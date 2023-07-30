<?php

require 'vendor/autoload.php';
require_once 'Login/controllers/authController.php';
use PHPMailer\PHPMailer\PHPMailer;

$phpmailer = new PHPMailer();
$phpmailer->isSMTP();
$phpmailer->Host = 'sandbox.smtp.mailtrap.io';
$phpmailer->SMTPAuth = true;
$phpmailer->Port = 2525;
$phpmailer->Username = 'd5a0bd8285e9fd';
$phpmailer->Password = '95b9a99b9153e0';

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

$message = array(); // Initialize an empty array to store validation messages

if (isset($_POST['submit'])) {
    // Validate name field
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    if (empty($name)) {
        $message[] = 'Please enter your name.';
    }

    // Validate email field
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    if (empty($email)) {
        $message[] = 'Please enter your email.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $message[] = 'Please enter a valid email address.';
    }

    // Validate number field
    $number = $_POST['number'];
    if (empty($number)) {
        $message[] = 'Please enter your number.';
    } elseif (!preg_match('/^\d{11}$/', $number)) {
        $message[] = 'Please enter a 11-digit number.';
    }
    
    // If there are no validation errors, insert the data into the database
    if (empty($message)) {
        $date = $_POST['date'];

        $insert = mysqli_query($conn, "INSERT INTO contact_form (name, email, number, date) VALUES ('$name', '$email', '$number', '$date')") or die('query failed');

        if ($insert) {
            $message[] = 'Appointment made successfully!';
            $phpmailer->setFrom('medappoint.sd5@gmail.com', 'MedAppoint');
            $phpmailer->addAddress($email, $name);

            $phpmailer->Subject = 'Appointment Successful!';
            $phpmailer->Body = 'Hi ' .$name.'! You have successfully made an appointment. Please arrive at the time of the appointment. In the event that you have not arrive on time, we will automatically cancel your appointment.';
            $phpmailer->send();
        } else {
            $message[] = 'Appointment failed.';
        }
    }
}
?>