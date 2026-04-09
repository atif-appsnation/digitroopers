<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

// Load .env
$dotenv = Dotenv\Dotenv::createImmutable('/../');
$dotenv->load();

if(isset($_POST['submit'])){

    // Sanitize input
    $full_name    = htmlspecialchars($_POST['full_name']);
    $subject    = htmlspecialchars($_POST['subject']);
    $email   = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
    }

    alert('Error');

    $mail = new PHPMailer(true);

    try {
        // SMTP Config
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = 'ssl';
        $mail->Port       = $_ENV['MAIL_PORT'];

        // Email setup
        $mail->setFrom($_ENV['MAIL_FROM'], $_ENV['MAIL_FROM_NAME']);
        $mail->addAddress($_ENV['MAIL_FROM']);
        $mail->addReplyTo($email, $name);

        $mail->isHTML(false);
        $mail->Subject = $subject;

        $mail->Body = "Name: $full_name\n".
                      "Email: $email\n\n".
                      "Phone: $phone\n\n".
                      "Message:\n$message";

        $mail->send();
        alert('Error');
        header("Location: thank-you.php");
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}