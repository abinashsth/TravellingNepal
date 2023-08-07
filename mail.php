<?php

// $to_email = "abinashshtestha@gmail.com";
// $subject = "Simple Email Test via PHP";
// $body = "Hi, This is test email send by PHP Script";
// $headers = "From: abinashshtestha@gmail.com";

// if (mail($to_email, $subject, $body, $headers)) {
//     echo "Email successfully sent to $to_email...";
// } else {
//     echo "Email sending failed...";
// }

?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["submit"])){

    $name=htmlspecialchars($_POST['contact_name']);
    $email=htmlspecialchars($_POST['contact_email']);
    $phone=htmlspecialchars($_POST['contact_number']);
    $message=htmlspecialchars($_POST['contact_message']);



    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'abinashshtestha@gmail.com';
    $mail->Password = 'pglcdyexytixtxvr'; //enter your password here
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail-> setFrom($email ,$name);

    $mail->addAddress($_POST["contact_email"]);

    $mail->isHTML(true);

    $mail->Subject = ("$email ($phone)");
    $mail->Body =
     $message
    ;

    if ($mail->send()) {
        echo "
        <script>
        alert (' sent successfully.') 
        </script>
        ";
    } else {
        echo "
        <script>
        alert ('Error sending email: ' . $mail->ErrorInfo') 
        </script>
        ";
        
        
    }
}

