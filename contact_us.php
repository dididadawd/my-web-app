<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "yaliofek1@gmail.com";
    $subject = "Message from $name ($email)";
    $body = "From: $name\nEmail: $email\n\n$message";

    if(mail($to, $subject, $body)) {
        echo "Thank you for contacting us!";
    } else {
        echo "There was an error sending your message. Please try again.";
    }
}
?>