use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'path/to/PHPMailer/PHPMailer.php';
require 'path/to/PHPMailer/SMTP.php';
require 'path/to/PHPMailer/Exception.php';
$mail = new PHPMailer(true);

try {
    // Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'kylamarket777@gmail.com'; // Your Gmail email address
    $mail->Password   = 'Jesaja60'; // Your Gmail App Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Sender and recipient
    $mail->setFrom('kylamarket777@gmail.com', 'Your Name');
    $mail->addAddress('recipient@example.com', 'Recipient Name');

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'Subject';
    $mail->Body    = 'Email body';

    $mail->send();
    echo 'Email sent successfully';
} catch (Exception $e) {
    echo 'Email sending failed: ' . $mail->ErrorInfo;
}
