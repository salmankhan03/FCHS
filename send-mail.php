<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (!empty($_POST['name'])  && !empty($_POST['email']) && !empty($_POST['contact_no']) && !empty($_POST['message'])) {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->isSMTP();
    $mail->Host = 'mail.intellidt.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'inquiry@fullcarehs.com';
    $mail->Password = 'Fsadmin';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($_POST['email']);
    $mail->addAddress('tonyh@intellidt.com');
    //$mail->addAddress('inquiry@fullcarehs.com');

    $mail->Subject = 'FCHS Contact Form';
    $mail->isHTML(TRUE);

    $message =  preg_replace("/&#?[a-z0-9]{2,8};/i", "", $_POST['message']);

    $mail->Body = "<html><b>Name:</b> {$_POST['name']} </br><br><b>Email:</b> {$_POST['email']} </br><br><b>Contact No:</b> {$_POST['contact_no']} </br><br><b>Message :</b> {$message} </br></html>";


    // send the message
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;

        //echo '<script>alert("Message could not be sent. Mailer Error:  . "' . $mail->ErrorInfo . '")</script>';
    } else {
        // header("Location: contact.php");
        // echo '<script>alert("Message has been sent")</script>';
        echo '<script>
            alert("Message has been sent");
            window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";
        </script>';
    }
} else {
    // header("Location: contact.php");
    // echo '<script>alert("Message has been sent")</script>';
    echo '<script>
        alert("Error");
        window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";
    </script>';
}