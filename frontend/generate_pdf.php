<?php
require 'vendor/autoload.php'; // DOMPDF autoload

use Dompdf\Dompdf;
use Dompdf\Options;

$email = $_GET['email'] ?? '';

// Sample content (you can pull from DB instead)
$html = "
<h2>Employee Form PDF</h2>
<p><strong>Email:</strong> $email</p>
<p>This is a PDF generated after form submission.</p>
";

// Setup PDF
$options = new Options();
$options->set('defaultFont', 'Arial');
$dompdf = new Dompdf($options);
$dompdf->loadHtml($html);
$dompdf->setPaper('A4', 'portrait');
$dompdf->render();

// Save PDF
$pdfOutput = $dompdf->output();
$pdfFile = "pdfs/employee_" . time() . ".pdf";
file_put_contents($pdfFile, $pdfOutput);

// Send email
require 'send_email.php';
sendEmailWithPDF($email, $pdfFile);

echo "PDF generated and emailed successfully.";
?>
