<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (!empty($_POST['fname'])  && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['saddress']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip']) && !empty($_POST['answer1']) && !empty($_POST['answer2']) && !empty($_POST['answer3']) && !empty($_POST['employer']) && !empty($_POST['motivation']) && !empty($_POST['information_source'])) {
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'mail.fullcarehs.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hiring@fullcarehs.com';
    $mail->Password = 'FSadmin';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('hiring@fullcarehs.com');
    $mail->addAddress('sal@intellidt.com');
    $mail->Subject = 'FCHS Application Form';
    $mail->isHTML(TRUE);



    $body = "<html>
    <b>First Name :-</b> {$_POST['fname']} <br>
    <b>Last Name :-</b> {$_POST['lname']} <br>
    <b>Email :-</b> {$_POST['email']} </br><br>
    <b>Contact No :-</b> {$_POST['phone']} </br><br>
    <b>Address Line 1 :-</b> {$_POST['address']} </br><br>
    <b>Address Line 2 :-</b> {$_POST['saddress']} </br><br>
    <b>City :-</b> {$_POST['city']} </br><br>
    <b>Province :-</b> {$_POST['state']} </br><br>
    <b>Postal Code :-</b> {$_POST['zip']} </br><br>
    <b>What do you love most about caregiving? :-</b><br> {$_POST['answer1']} </br><br></br>
    <b>Why do you feel you would be a good Full Care Health Services Caregiver? :-</b><br> {$_POST['answer2']} </br> <br></br>
    <b>What is the most important thing you seek from an employer?:-</b> <br> {$_POST['answer3']} </br> <br></br>
    <b>Are you legally authorized to work in Canada with any employer? :-</b> <br> {$_POST['employer']} </br><br> </br>
    <b>If you were successfully hired, what things will motivate you the most in your job? :-</b> <br> {$_POST['motivation']} </br> <br></br>
    <b>How did you hear about us? :-</b> <br> {$_POST['information_source']} </br> <br></br>
    </html>";

    $mail->Body = $body;


    // send the message
    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;

        echo '<script>alert("Message could not be sent. Mailer Error:  . "' . $mail->ErrorInfo . '")</script>';
    } else {
        header("Location: jobtitle.php");
        echo '<script>alert("Message has been sent")</script>';
    }
} else {

    header("Location: jobtitle.php");
    echo '<script>alert("Message has been sent")</script>';
}