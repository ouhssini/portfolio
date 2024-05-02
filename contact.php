<?php

if(!isset($_POST['email'])) {
    header('Location: /');
    exit();
}



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './assets/phpmailer/src/Exception.php';
require './assets/phpmailer/src/PHPMailer.php';
require './assets/phpmailer/src/SMTP.php';

// Instantiate PHPMailer
$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'taghbalte2009@gmail.com';
    $mail->Password = '';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port = 465;
    //Recipients
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('taghbalte2009@gmail.com', 'Ahmed Ouhssini');
    $mail->addReplyTo($_POST['email'], $_POST['name']); 
    $mail->MessageDate = date('Y-m-d H:i:s');
    // Content
    $mail->isHTML(true);
    $mail->Subject = "Message from Portfolio Contact Me Form {$_POST['email']}";
    $mail->Body    = $_POST['message'];

    $mail->send();
    $res =  'true';
    header("location: /?send=$res");
} catch (Exception $e) {
    $res = 'false';
    header("location: /?send=$res");
} finally {
    $mail->smtpClose();
}
