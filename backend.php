
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Simple mail function to send the message
    mail("your-email@example.com", "Portfolio Contact", $message, "From: $email");
}
?>