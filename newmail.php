<meta charset="utf-8" type="text/html">

<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// echo !extension_loaded('openssl')?"Not Available":"Available";
echo'<br>';
// include 'PHPMailer/PHPMailerAutoload.php';

if(isset($_POST["submit"])){

$name = ($_POST['contact_name']);
$mailfrom = ($_POST['contact_email']);
// $context = $_POST['context'];
$phone=($_POST['contact_number']);
$message=($_POST['contact_message']);

// echo $name,$mailfrom,$phone,$message;
echo "<br>";

echo "<br>";
$subject = 'Contact Us';
/*i'm not sure if i can use any gmail or it needs to be
  registred on my server admin panel*/
// $to ="$mailfrom";
define ('Abinash','abinashshtestha@gmail.com');
define ('Password','pglcdyexytixtxvr');


function smtpmailer( $mailfrom, $name, $subject, $message) {
    global $error;
    $mail = new PHPMailer(true);  // create a new object

    
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true;  // authentication enabled
    $mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
    $mail->SMTPAutoTLS = false;
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->CharSet = "UTF-8";

    $mail->Username = Abinash;
    $mail->Password = Password;
    $mail->SetFrom ($mailfrom); //here it's my error
    $mail->Subject = $subject;
    $mail->Body = $message;
    $mail->AddAddress('abinashshrestha246@gmail.com');
    if(!$mail->Send()) {
        $error = 'Mail error: '.$mail->ErrorInfo;
        return false;
    } else {
        $error = 'Message sent!';
        return true;
    }
}
 smtpmailer( $mailfrom, $name, $subject, $message);
}
  ?>

