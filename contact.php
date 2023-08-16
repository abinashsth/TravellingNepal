<?php
//     include('function.php');
//     include('connection.php');



?>


<?php
//finder variable
$error_finder = 0;
//without error variable
$first = $email = $number = "";
//with error variable
$error_first = $error_email = $error_number = "";
if (isset($_POST['submit'])) {
      if (empty($_POST['contact_name'])) {
            $error_first = "Empty First Name";
            $error_finder = 1;
      } else if (strlen($_POST['contact_name']) < 2) {
            $error_first = "First Name cannot accept less the 3 digit";
            $error_finder = 1;
      } else {
            $first = $_POST['contact_name'];
            if (!preg_match("/^[a-z A-Z]*$/", $first)) {
                  $error_first = "Only Charecter Allow";
                  $error_finder = 1;
            } else {
                  $first = $_POST['contact_name'];
            }
      }

      if (empty($_POST['contact_email'])) {
            $error_finder = 1;
            $error_email = "Empty email ";
      } else if (strlen($_POST['contact_email']) <= 5) {
            $error_finder = 1;
            $error_email = "the 3 digit of charater can't support";
      } else {
            $email = $_POST['contact_email'];
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $error_finder = 1;
                  $error_email = "invalid email ";
            } else {
                  $email = $_POST['contact_email'];
            }
      }

      if (empty($_POST['contact_number'])) {
            $error_number = "The number is empty";
            $error_finder = 1;
      } else if (strlen($_POST['contact_number']) < 9) {
            $error_number = "the number should be 10 lenth";
            $error_finder = 1;
      } else if (strlen($_POST['contact_number']) > 14) {
            $error_number = "Contact Cannot accept more then 14 digit. ";
            $error_finder = 1;
      } else {
            $number = $_POST['contact_number'];
            if (preg_match("/^[0-9]*&/", $number)) {
                  $error_finder = 1;
                  $error_number = "only number allow";
            } else {
                  $number = $_POST['contact_number'];
            }
      }



      if ($error_finder == 0) {
            $_SESSION['submit'] = true;

         
            $sql = "INSERT INTO `contact`(cont_id, Name, phone, Email,Message) VALUES (NULL,'" . $first . "','" . $number . "','" . $email . "', '" . $_POST["contact_message"] . "')";
             mysqli_query($conn, $sql);
            //   $id=mysqli_insert_id();
            // $_SESSION['id'] = $id;
            // if ($id) {
            //       echo "<script>window.location:'contact.php';</script>";
            // }
      }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Contact Us</title>

      <link rel="stylesheet" href="style.css">

      <!-- Boostrap Css Link -->
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <!-- Fontawesome -->
      <link rel="stylesheet" href="css/all.min.css">
      <link rel="stylesheet" href="css/fontawesome.min.css">
      <!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
      <!-- Fontawesome -->
</head>

<body>

      <!-- Function -->
      <?php



      // if (isset($_POST["submit"])) {

      //       //   $conn = makeconnection();

      //       $sql = "INSERT INTO `contact`( `Name`, `phone`, `Email`, `Message`) VALUES 
      //           ('" . $_POST["contact_name"] . "','" . $_POST["contact_number"] . "','" . $_POST["contact_email"] . "','" . $_POST["contact_message"] . "') ";
      //       mysqli_query($conn, $sql);
      //       mysqli_close($conn);
      //       // echo "<script> alert('Record Saved.');</script>";


      // }


      ?>

      <!-- contact section -->
      <section id="Contact">
            <div class="contact">

                  <h3 class="bottom_text"> CONTACT US </h3>


                  <div class="contact-box">

                        <div class="contact-top">
                              <h3>GET IN TOUCH</h3>

                              <div class="contact_container">
                              <div id="statusMessage"></div>

                                    <form  id="contactForm" method="POST" action="" >
                                          <div class="row g-2 ">


                                                <div class="col">
                                                      <label>Name:</label>
                                                      <input type="text" id='name' name="contact_name" class="form-control" placeholder="Fullname" aria-label="Fullname" value="<?php echo $first; ?>" >

                                                      <center>
                                                            <p style="color:red;">
                                                                  <?php
                                                                  if ($error_first == !null) {
                                                                        echo $error_first;
                                                                  }
                                                                  ?>
                                                            </p>
                                                      </center>
                                                </div>
                                                <div class="col">
                                                      <label>Phone:</label>
                                                      <input type="text" id="phone" name="contact_number" class="form-control" placeholder="Phone number" aria-label="Phone number" value="<?php echo $number; ?>"  >
                                                      <center>
                                                            <p style="color:red; font-family:normal;">
                                                                  <?php
                                                                  if ($error_number == !null) {
                                                                        echo $error_number;
                                                                  } ?>
                                                            </p>
                                                      </center>
                                                </div>
                                          </div>

                                          <div class="row g-1 ">

                                                <div class="col">
                                                      <label>Email:</label>
                                                      <input type="Email" id="email" name="contact_email" class="form-control" placeholder="Email" aria-label="Email" value="<?php echo $email; ?>"  >
                                                      <center>
                                                            <p style="color:red;">
                                                                  <?php
                                                                  if ($error_email == !null) {
                                                                        echo $error_email;
                                                                  } ?>
                                                            </p>
                                                      </center>
                                                </div>
                                          </div>

                                          <br>
                                          <div class="col">
                                                <label>Message</label>
                                                <textarea id="message" rows="4" column="8" name="contact_message" placeholder="your message" ></textarea>
                                          </div>

                                          <button type="submit" name="submit" class="btn btn-primary mt-5 mb
                    3 px-6 py-2 rounded text-white shadow bg-dark border-0 hover
                    me-lg-2 my-sm-0 ">Send Message</button>

                                          <p id="responseMessage"></p>

                              </div>
                              </form>
                        </div>
                  </div>



            </div>

      </section>
      <!-- <script>
        $(document).ready(function () {
            $("#contactForm").submit(function (event) {
                event.preventDefault();
                var formData = $(this).serialize();
                
                $.ajax({
                    type: "POST",
                    url: "mail.php",
                    data: formData,
                    success: function (response) {
                        $("#statusMessage").html(response);
                    }
                });
            });
        });

        </script> -->
    


      <!-- Bootstrap JS -->
      <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

</body>

</html>

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

    $mail->Subject = ("Contact US ");
    $mail->Body =
    "Name: $name<br>Email: $email<br>Phone: $phone<br> Message: $message";

//     if (!$mail->send()) {
//         echo 'Mailer Error: ' . $mail->ErrorInfo;
//     } else {
//         header("Location: index.php?status=success");
//         exit();
//     }
// } else {
//     header("Location: index.php?status=error");
//     exit();
// }

if ($mail->send()) {
      echo "
      <script>
      alert ('Error sending email: ' . $mail->ErrorInfo') 
      </script>
      ";
      
  } else {
     echo "
      <script>
      alert (' sent successfully.') 
      </script>
      ";
     echo "
      <script>
     window.location.href= booking.php;
      </script
      ";
      
       }
    }
?>

<?php
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php';

// if(isset($_POST["submit"])){

//     $name=htmlspecialchars($_POST['contact_name']);
//     $email=htmlspecialchars($_POST['contact_email']);
//     $phone=htmlspecialchars($_POST['contact_number']);
//     $message=htmlspecialchars($_POST['contact_message']);


//     // $username = 'abinashsttestha@gmail.com';
//     // $host = 'smtp.gmail.com';
//     // $secret = 'pglcdyexytixtxvr';



//     // echo $name, $email, $phone, $message; die;



//     // $mail = new PHPMailer(true);

//     // $mail->isSMTP();
//     // $mail->Host = 'smtp.gmail.com';
//     // $mail->SMTPAuth = true;
//     // $mail->Username = 'abinashshtestha@gmail.com';
//     // $mail->Password = 'pglcdyexytixtxvr'; //enter your password here
//     // $mail->SMTPSecure = 'tls';
//     // $mail->Port = 587;

//     // $mail-> setFrom($email ,$name);

//     // // $mail->addAddress($_POST["contact_email"]);
//     // $mail->addAddress($username);
//     // $mail->isHTML(true);


//     $mail = new PHPMailer(true);

//     $mail->IsSMTP(); // send via SMTP
//     $mail->Host = 'smtp.gmail.com'; // SMTP servers
//     $mail->Port = 587; // SMTP servers
//     $mail->SMTPAuth = true; // turn on SMTP authentication
//     $mail->Username = 'abinashshtestha@gmail.com'; // SMTP username
//     $mail->Password = 'pglcdyexytixtxvr'; // SMTP password
//     $mail->From = 'abinashshrestha246@gmail.com';
//     $mail->FromName = 'Abinash Shrestha' ;
//     $mail->AddAddress($_POST["contact_email"]);
//     $mail->IsHTML(true); // send as HTML

//     $mail->Subject = ("$email ($phone)");
//     $mail->Body =

//     $name ;
//     $email;
//     $phone;
//    $message;
//     ;

//     if ($mail->send()) {
//         echo "
//         <script>
//         alert (' sent successfully.') 
//         </script>
//         ";
//        echo "
//         <script>
//        window.location.href= contact.php;
//         </script
//         ";
//     } else {
//         echo "
//         <script>
//         alert ('Error sending email: ' . $mail->ErrorInfo') 
//         </script>
//         ";
        
        
//     }
// }

?>