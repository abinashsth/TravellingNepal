<?php
    include('function.php');
//     include('connection.php');
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

    $mail->IsSMTP(); // send via SMTP
    $mail->Host = 'smtp.gmail.com'; // SMTP servers
    $mail->Port = 587; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = 'abinashshtestha@gmail.com'; // SMTP username
    $mail->Password = 'pglcdyexytixtxvr'; // SMTP password
    $mail->From = $_POST["contact_email"];
    $mail->FromName = 'Abinash Shrestha' ;
    $mail->AddAddress('abinashshrestha246@gmail.com');
    $mail->IsHTML(true); // send as HTML

    $mail->Subject = ("$name ($phone)");
    $mail->Body =
    "Name: $name<br>Email: $email<br>Phone: $phone<br> Message: $message";

    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        header("Location: navbar.php#Contact?status=success");
        exit();
    }
} else {
    header("Location: navbar.php#Contact?status=error");
    exit();
}


?>