<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Compose the email message
    $to = "soerenkiilerich.oe@gmail.com";
    $subject = "New message from $name";
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send the email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Error: Message could not be sent.";
    }
}
?>