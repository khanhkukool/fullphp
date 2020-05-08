<?php
// DEMO chức năng gửi mail
//thử sử dụng hàm mail có sẵn của PHP
//$mail_to = "nguyenvietmanhit@gmail.com";
//$subject = "Tiêu đề gửi mail";
//$message = "Đây là nội dung gửi mail";
//$is_send_mail = mail($mail_to, $subject, $message);
//if ($is_send_mail) {
//    echo 'Gửi mail thành công';
//}
//else {
//    echo 'Gửi mail thất bại';
//}
?>
<!--//demo gửi mail sử dụng thư viện PHPMailer-->
<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function

//nhúng các class vào
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require_once 'PHPMailer/src/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
//require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'nguyenvietmanhit@gmail.com';                     // SMTP username
    $mail->Password   = 'ylcqjmgvqoazcxzn';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('nvmanh@cmc.com.vn', 'Nguyen Viet Manh');
    $mail->addAddress('nguyenvietmanhit@gmail.com', 'Manh');     // Add a recipient
//    $mail->addAddress('ellen@example.com');               // Name is optional
//    $mail->addReplyTo('info@example.com', 'Information');
//    $mail->addCC('cc@example.com');
//    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('image.jpeg');         // Add attachments
//    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
