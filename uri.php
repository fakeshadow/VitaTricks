<?php
error_reporting(E_ERROR | E_PARSE);
$file = fopen("uri.ics", "rb");
$text = fread($file,filesize("uri.ics"));
fclose($file);

$uri = $_POST["uri"];

$toSend = str_replace("<URI-HERE>",$uri,$text);

use PHPMailer\PHPMailer\PHPMailer;
require_once('PHPMailer/src/PHPMailer.php');
$email = $_POST["email"];
$mail = new PHPMailer;
$mail->setFrom('vitatric@xo2.x10hosting.com', 'SilicaAndPina');
$mail->addAddress($email, 'You');
$mail->Subject  = 'Your URI Call';
$mail->Body     = 'Click the attachment, then click the Browser Icon.';
$mail->addStringAttachment($toSend,"uri.ics");
$mail->send();
?> 

<h1>uri.ics has been sent to: <?php echo $email; ?>
