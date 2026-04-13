<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Correct field names (IMPORTANT)
    $applicant_name = htmlspecialchars($_POST['applicant_name']);
    $applicant_email     = htmlspecialchars($_POST['applicant_email']);
    $applicant_phone     = htmlspecialchars($_POST['applicant_phone']);
    $applicant_job       = htmlspecialchars($_POST['applicant_job']);
    $applicant_position  = htmlspecialchars($_POST['applicant_position']);

    if (!filter_var($applicant_email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format";
        exit;
    }

    // ✅ FILE UPLOAD
    $uploadPath = 'assets/cv/';
    $fileName = '';

    if (isset($_FILES['applicant_cv']) && $_FILES['applicant_cv']['error'] == 0) {

        $fileTmp  = $_FILES['applicant_cv']['tmp_name'];
        $fileName = $applicant_name . '_' . basename($_FILES['applicant_cv']['name']);
        $targetFile = $uploadPath . $fileName;

        // Move file
        if (!move_uploaded_file($fileTmp, $targetFile)) {
            echo "File upload failed";
            exit;
        }
    }

    $mail = new PHPMailer(true);

    try {
        // SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.hostinger.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'test@digitroopers.com';
        $mail->Password   = 'Test@321+-';
        $mail->SMTPSecure = 'tls';
        $mail->Port       = 587;

        // Sender
        $mail->setFrom('test@digitroopers.com', 'Digitroopers');
        $mail->addAddress('test@digitroopers.com');

        $mail->addReplyTo($applicant_email, $applicant_name);

        // ✅ Attach file
        // if ($fileName != '') {
        //     $mail->addAttachment($uploadPath . $fileName);
        // }

        $mail->isHTML(true);
        $mail->Subject = "Job Application - $applicant_job";

        // ✅ Add file link in email
        // $fileLink = ($fileName != '') 
        //     ? "CV Link: https://new.digitroopers.com/assets/cv/$fileName\n\n" 
        //     : "";

        $fileLink = ($fileName != '') 
            ? "<a href='https://new.digitroopers.com/assets/cv/$fileName' target='_blank'>Download CV</a><br><br>" 
            : "";

        $mail->Body = "Name: $applicant_name<br>".
                      "Email: $applicant_email<br>".
                      "Phone: $applicant_phone<br>".
                      "Job: $applicant_job<br>".
                      "Position: $applicant_position<br>".
                      "File-Link: $fileLink";

        $mail->send();

        echo "<div class='alert alert-success'>Application submitted successfully</div>";
        exit;

    } catch (Exception $e) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    }
}