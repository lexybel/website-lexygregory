<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'lexygregorywebsite@gmail.com';
    $mail->Password = 'sqgj atva umcb ykkn';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $mail->setFrom('lexygregorywebsite@gmail.com');
    $mail->addAddress('lexygregorywebsite@gmail.com');
    $mail->isHTML(true);

    $subject = "New message from $name";
    $mail->Subject = $subject;

    $body = "Email: $email <br> Message: $message";
    $mail->Body = $body;
    
    $mail->send();

    echo
    "
    <script>
    document.location.href = 'thanks.php';
    </script>
    ";
}
?>