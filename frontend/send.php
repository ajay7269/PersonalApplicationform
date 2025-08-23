<?php
require_once('tcpdf/tcpdf.php');

// Create new PDF
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('helvetica', '', 12);
$pdf->Write(0, 'This is a test PDF with dummy data.');

// Save PDF to file
$pdfOutput = 'generated_form.pdf';
$pdf->Output($pdfOutput, 'F');

// Email setup
$to = 'main@example.com'; // main recipient
$cc = 'cc1@example.com, cc2@example.com, cc3@example.com, cc4@example.com'; // 4 CC
$subject = 'Personal Form Submitted';
$message = 'Please find attached the personal form PDF.';
$headers = "From: sender@example.com\r\n";
$headers .= "CC: $cc\r\n";

// Attach PDF
$file = $pdfOutput;
$content = chunk_split(base64_encode(file_get_contents($file)));
$uid = md5(uniqid(time()));
$filename = basename($file);

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"\r\n\r\n";
$headers .= "This is a multi-part message in MIME format.\r\n";
$headers .= "--".$uid."\r\n";
$headers .= "Content-type:text/plain; charset=iso-8859-1\r\n";
$headers .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
$headers .= $message."\r\n\r\n";
$headers .= "--".$uid."\r\n";
$headers .= "Content-Type: application/octet-stream; name=\"".$filename."\"\r\n";
$headers .= "Content-Transfer-Encoding: base64\r\n";
$headers .= "Content-Disposition: attachment; filename=\"".$filename."\"\r\n\r\n";
$headers .= $content."\r\n\r\n";
$headers .= "--".$uid."--";

// Send email
if (mail($to, $subject, "", $headers)) {
    echo "Email sent successfully with PDF.";
} else {
    echo "Failed to send email.";
}
?>
