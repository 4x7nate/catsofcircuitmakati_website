<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['FName']);
    $email = htmlspecialchars($_POST['Email']);
    $contact = htmlspecialchars($_POST['ContactNumber']);
    $message = htmlspecialchars($_POST['com']);

    $to = "thecatsofcircuitmakati@gmail.com";
    $subject = "New Inquiry from $name";
    $body = "Name: $name\nEmail: $email\nContact Number: $contact\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email successfully sent to $to...";
    } else {
        echo "Email sending failed...";
        error_log("Email sending failed to $to with subject $subject and body $body");
    }
} else {
    echo "Invalid request method.";
    error_log("Invalid request method: " . $_SERVER["REQUEST_METHOD"]);
}
?>