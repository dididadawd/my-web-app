<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the recipient email address
    $to = 'yo7102@bs.amalnet.k12.il';

    // Set the email subject and body
    $subject = 'Accordion Orchestra Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo '<p>Your message has been sent. Thank you!</p>';
    } else {
        echo '<p>There was a problem sending your message. Please try again later.</p>';
    }
}
?>
