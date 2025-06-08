<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "namitr2003@gmail.com"; 

    $subject = "New Contact Query from Website";
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p>Thank you for contacting us, $name. We will get back to you shortly.</p>";
    } else {
        echo "<p>Sorry, there was a problem sending your message. Please try again later.</p>";
    }
}
?>
