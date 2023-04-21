<?php

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include library files 
require '../vendor/phpmailer/phpmailer/src/Exception.php'; 
require '../vendor/phpmailer/phpmailer/src//PHPMailer.php'; 
require '../vendor/phpmailer/phpmailer/src//SMTP.php'; 

$name = $_POST["name"];
$email = $_POST["email"];
$subject = $_POST["subject"];
$comments = $_POST["comments"];
if(!empty($_POST['emailaddress'])) die();

$mail = new PHPMailer(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = "smtp-relay.sendinblue.com";
$mail->SMTPAuth = true;

$mail->Username = "USERNAME_HERE";
$mail->Password = "PASSWORD_HERE";

$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 587;

$mail->setFrom($email, $name);

$mail->addAddress("ADDRESS_HERE", "Feedback");

$mail->Subject = $subject;
$mail->Body = $comments;

$mail->send();

header("Location: sent.html");

?>