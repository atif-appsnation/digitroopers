<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Sanitize input
    $full_name = htmlspecialchars($_POST['full_name']);
    $subject   = htmlspecialchars($_POST['subject']);
    $email     = htmlspecialchars($_POST['email']);
    $phone     = htmlspecialchars($_POST['phone']);
    $message   = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP Configuration
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'test@digitroopers.com';
        $mail->Password   = 'Test@321+-';

        $mail->SMTPSecure = 'tls'; // ✅ FIXED
        $mail->Port       = 587;   // ✅ FIXED

        // ✅ FIXED: Use your domain email as sender
        $mail->setFrom('test@digitroopers.com', 'Digitroopers');

        // Receiver
        $mail->addAddress('test@digitroopers.com', 'Digitroopers');

        // ✅ User email as reply-to
        $mail->addReplyTo($email, $full_name);

        $mail->isHTML(false);
        $mail->Subject = $subject;

        $mail->Body = "Name: $full_name\n". 
                        "Email: $email\n".
                        "Phone: $phone\n".
                        "Message:$message";

        $mail->send();

        echo "Message Sent Successfully";
        exit;

    } catch (Exception $e) {
        echo json_encode([
            "status" => "error",
            "message" => $mail->ErrorInfo
        ]);
    }
}
else {
    echo json_encode([
        "status" => "error",
        "message" => "Invalid request"
    ]);
}