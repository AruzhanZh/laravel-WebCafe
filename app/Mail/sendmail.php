<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';

$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('en', 'phpmailer/language/');
$mail->isHTML(true);

$mail->setFrom('190103359@stu.sdu.edu.kz', 'Live Dinner Restaurant');
$mail->addAddress('190103359@stu.sdu.edu.kz');
$mail->Subject = 'Hello! You hit the SUBSCRIBE button!';

$body = '<h1>From now on, you will be the first to learn all the news and offers of our restaurant. Enjoy!</h1>';

$mail->Body = $body;
?>