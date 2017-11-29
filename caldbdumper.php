<?php
error_reporting(E_ERROR | E_PARSE);
use PHPMailer\PHPMailer\PHPMailer;
require_once('PHPMailer/src/PHPMailer.php');
$email = $_POST["email"];
$mail = new PHPMailer;
$mail->setFrom('vitatric@xo2.x10hosting.com', 'SilicaAndPina');
$mail->addAddress($email, 'You');
$mail->Subject  = 'Dump Calendar.db';
$mail->Body     = 'Click the attachment :)';
$mail->addAttachment("caldbdumper.ics");
$mail->send();
?> 

<h1>caldbdumper.ics has been sent to: <?php echo $email; ?>
