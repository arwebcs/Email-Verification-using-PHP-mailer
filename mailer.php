<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require 'vendor/autoload.php';

function emailSending($recipientEmail = "", $subject = "", $msgContent = "")
{
    $mail            = new PHPMailer(true);
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'arwebcs@gmail.com';
    $mail->Password   = 'bhsa iljd rfjm xdar';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom('arwebcs@gmail.com', 'ArWeb');
    $mail->addAddress($recipientEmail);

    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $msgContent;

    $send = $mail->send();
    if ($send) {
        $sendMail = true;
    } else {
        $sendMail = false;
    }
    return $sendMail;
}
