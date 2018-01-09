<?php
error_reporting(E_ERROR | E_PARSE);
use PHPMailer\PHPMailer\PHPMailer;
require_once('PHPMailer/src/PHPMailer.php');
$email = $_POST["email"];
$mail = new PHPMailer;
$mail->setFrom('vitatric@xo2.x10hosting.com', 'SilicaAndPina');
$mail->addAddress($email, 'You');
$mail->Subject  = 'PS Store Dark Theme';
$mail->Body     = 'Click the attachment, then click the Browser Icon.';
$mail->addAttachment("darktheme.ics");
$mail->send();
?> 

<h1>darktheme.ics has been sent to: <?php echo $email; ?>
