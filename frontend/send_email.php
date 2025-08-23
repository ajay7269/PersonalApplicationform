<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function sendEmailWithPDF($to, $pdfPath) {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // Update SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your@example.com';
        $mail->Password   = 'yourpassword';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        $mail->setFrom('your@example.com', 'Your Name');
        $mail->addAddress($to);
        $mail->addAttachment($pdfPath);
        $mail->isHTML(true);
        $mail->Subject = 'Employee Form PDF';
        $mail->Body    = 'Please find the attached PDF form you submitted.';

        $mail->send();
        echo "Email sent to $to";
    } catch (Exception $e) {
        echo "Mail Error: {$mail->ErrorInfo}";
    }
}
?>
