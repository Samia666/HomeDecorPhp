<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // You can add email sending functionality here
    // mail($to, $subject, $message, $headers);

    echo "Thank you, $name. Your message has been received.";
}
?>
