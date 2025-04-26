<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $name = htmlspecialchars($_POST['name']);
    $surname = htmlspecialchars($_POST['surname']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    if (!filter_var)($email, FILTER_VALIDATE_EMAIL) {
        $error = "Invalid Email Format.";
    } else {
        $to = "FARINYARO88@GMAIL.COM";
        $subject = "New Contact Form Submission";
        $body = "You Have Receive a New Message From $name ($email).\n\nMessage:\n$message";
        $headers = "From: $email";
        if (mail($to, $subject, $body, $headers)) {
            $success = "Thank You For Contacting Us. We Will Get Back To You Soon!";
        } else {
            $error = "Sorry, There Was An Error Sending Your Message, Please Try Agaain Later.";
        }
    }
}
?>