<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require "../vendor/autoload.php";

function sendMail($name, $email, $subject, $body, $html = false)
{
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $phpmailer->Port = 465;
    $phpmailer->Username = 'user@example.com';
    $phpmailer->Password = 'tvlrumtxiwvuyza';

    // Recipients
    $phpmailer->setFrom('contact@example.com', 'Example');
    $phpmailer->addAddress($email, $name);

    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    $phpmailer->send();
}
