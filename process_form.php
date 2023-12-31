<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Adjust the path to autoload.php based on your project structure
require_once 'vendor/autoload.php';

use League\OAuth2\Client\Provider\Google;

$provider = new Google([
    'clientId'     => '{google-client-id}',
    'clientSecret' => '{google-client-secret}',
    'redirectUri'  => 'https://example.com/callback-url',
]);

 // Create a new PHPMailer instance
 $mail = new PHPMailer(true);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'lexygregorywebsite@gmail.com';
        $mail->Password = 'mxzr xodd pnyl lghw';
        $mail->Port = 465;
        $mail->SMTPSecure = "ssl";

        // Recipients
        $mail->setFrom('lexygregorywebsite@gmail.com', 'User');
        $mail->addAddress('lexygregorywebsite@gmail.com', 'Lexy');

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'New Contact Form Submission';
        $mail->Body = "<p>$name sent you a message!<br>
                      email: $email <br>
                      <br>$message</p>";
        // Send mail
        if (!$mail->send()) {
            echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent.';
        }
        $mail->smtpClose();
    }
}
?>
