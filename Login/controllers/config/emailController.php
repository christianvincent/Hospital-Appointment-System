<?php

require 'C:\xampp\htdocs\HospitalAppointment\vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once 'constants.php';

function sendVerificationEmail($userEmail, $token) 
{

    global $phpmailer;
    $phpmailer = new PHPMailer();
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'd5a0bd8285e9fd';
    $phpmailer->Password = '95b9a99b9153e0';

    $phpmailer->setFrom('medappoint.sd5@gmail.com', 'MedAppoint');
    $phpmailer->addAddress($userEmail);
    $phpmailer->Subject = 'Account Created Successfully!';

    // Create a clickable link using HTML anchor tag
    // $verificationLink = 'http://localhost:3000/Login/home.php?token=' . $token;
    // $body = 'Thank you for signing up to our website. Please click on the link below to verify your email.<br>';
    // $body .= '<a href="' . $verificationLink . '">' . $verificationLink . '</a>';
    // Set the email body as HTML to support the anchor tag
    $body = '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Verify Email</title>
    </head>
    <body>
        <div class="wrapper">
            <p>
                Thank you for signing up to our website. Please click on the link below to verify your email.
            </p>
            <a href="http://localhost:3000/Login/home.php?token=' . $token.'">
                Verify your email address
            </a>
        </div>
    </body>
    </html>';
    $phpmailer->isHTML(true);
    $phpmailer->Body = $body;
    //send message
    $phpmailer->send();
}
