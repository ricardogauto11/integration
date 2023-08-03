<?php

use PHPMailer\PHPMailer\PHPMailer;

require "../vendor/autoload.php";

function sendMail($name, $email, $subject, $body, $html = false)
{
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'e8327acc8d123b';
    $phpmailer->Password = '9c8f1f71d899d7';

    // Recipients
    $phpmailer->setFrom('contact@example.com', 'Example');
    $phpmailer->addAddress($email, $name);

    //Content
    $phpmailer->isHTML($html);                                  //Set email format to HTML
    $phpmailer->Subject = $subject;
    $phpmailer->Body    = $body;

    $phpmailer->send();
}
