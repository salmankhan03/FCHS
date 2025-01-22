<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (!empty($_POST['fname'])  && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['city']) && !empty($_POST['state']) && !empty($_POST['zip']) && !empty($_POST['answer1']) && !empty($_POST['answer2']) && !empty($_POST['answer3']) && !empty($_POST['employer']) && !empty($_POST['travel']) && !empty($_POST['motivation']) && !empty($_POST['information_source'])) {
    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->Encoding = 'base64';

    $mail->isSMTP();
    $mail->Host = 'mail.fullcarehs.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'hiring@fullcarehs.com';
    $mail->Password = 'FSadmin';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom($_POST['email']);
    //$mail->addAddress('hiring@fullcarehs.com');
    $mail->addAddress('tonyh@intellidt.com');
    $mail->Subject = 'FCHS Application Form';
    $mail->isHTML(TRUE);



    $body = "<html>
    <b>Position: </b> {$_POST['job_title']} </br><br>
    <b>First Name: </b> {$_POST['fname']} </br><br>
    <b>Last Name: </b> {$_POST['lname']} </br><br>
    <b>Email: </b> {$_POST['email']} </br><br>
    <b>Contact No: </b> {$_POST['phone']} </br><br>
    <b>Address Line 1: </b> {$_POST['address']} </br><br>
    <b>City: </b> {$_POST['city']} </br><br>
    <b>Province: </b> {$_POST['state']} </br><br>
    <b>Postal Code: </b> {$_POST['zip']} </br><br>
    <b>What do you love most about caregiving? </b><br> {$_POST['answer1']} </br><br></br>
    <b>Why do you feel you would be a good Full Care Health Services Caregiver? </b><br> {$_POST['answer2']} </br> <br></br>
    <b>What is the most important thing you seek from an employer? </b> <br> {$_POST['answer3']} </br> <br></br>
    <b>What kind of hours are you seeking? </b> <br> {$_POST['employer']} </br><br> </br>
    <b>I travel by: </b> <br> {$_POST['travel']} </br><br> </br>
    <b>If you were successfully hired, what things will motivate you the most in your job? </b> <br> {$_POST['motivation']} </br> <br></br>
    <b>How did you hear about us? </b> <br> {$_POST['information_source']} </br> <br></br>
    </html>";

    $mail->Body = $body;


    // send the Application
    if (!$mail->send()) {
        echo 'Application could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;

        echo '<script>alert("Application could not be sent. Mailer Error:  . "' . $mail->ErrorInfo . '")</script>';
    } else {
        //header("Location: jobtitle.php");
        //echo '<script>alert("Application has been sent")</script>';
        echo '<script>
            alert("Application has been sent");
            window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";
        </script>';
    }
} else {
    //header("Location: jobtitle.php");
    //echo '<script>alert("Error")</script>';
    echo '<script>
        alert("Error");
        window.location.href = "' . $_SERVER['HTTP_REFERER'] . '";
    </script>';
}