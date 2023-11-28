<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add your email address where you want to receive the form submissions
    $to = "brostechnology1k719@gmail.com";

    $subject = "New Contact Form Submission - Bros Technology";
    $headers = "From: $email";

    $mailBody = "Name: $name\n";
    $mailBody .= "Email: $email\n";
    $mailBody .= "Message:\n$message";

    // Send email
    mail($to, $subject, $mailBody, $headers);

    // You can redirect the user to a thank-you page
    header("Location: thank_you.html");
    exit();
}
?>
