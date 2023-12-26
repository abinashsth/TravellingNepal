<?php
    include('function.php');
    // include('connection.php');
   

  
    ?>

<?php
//finder variable
$error_finder = 0;
//without error variable
$first =$last=$email=$fullname=$number=$address="";
//with error variable
$error_first = $error_last=$error_email=$error_fullname=$error_number=$error_address="";
if(isset($_POST['booking_send'])){
      if(empty($_POST['booking_first'])){
            $error_first = "Empty First Name";
            $error_finder = 1;
      }else if(strlen($_POST['booking_first'])<2){
            $error_first = "First Name cannot accept less the 3 digit";
            $error_finder = 1;
      }else{
            $first = $_POST['booking_first'];
            if(!preg_match("/^[a-zA-Z]*$/", $first)){
                  $error_first = "Only Charecter Allow";
                  $error_finder = 1;
            }else{
                   $first = $_POST['booking_first'];
            }
      }
      if(empty($_POST['booking_last'])){
            $error_last="Empty last name";
            $error_finder=1;

      }
      else if(strlen($_POST['booking_last'])<3){
            $error_last="Last name cannot accept less then 3 digit";
            $error_finder=1;
      }
      else{
            $last=$_POST['booking_last'];
            if(!preg_match("/^[a-zA-Z]*$/",$last )){
                  $error_last="only Character allow";
                  $error_finder=1;
            }
            else{
                  $last=$_POST['booking_last'];
            }
      }
      if(empty($_POST['booking_email'])){
            $error_finder=1;
            $error_email="Empty email ";
      }
      else if(strlen($_POST['booking_email'])<=5){
            $error_finder=1;
            $error_email="the 3 digit of charater can't support";
      }
      else{
            $email=$_POST['booking_email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                  $error_finder=1;
                  $error_email="invalid email ";
            }
            else{
                  $email=$_POST['booking_email'];
            }
      }
      if(empty($_POST['emergency_full_name'])){
        $error_fullname = "Empty FUll Name";
        $error_finder = 1;
  }else if(strlen($_POST['emergency_full_name'])<2){
        $error_fullname = "Full Name cannot accept less the 3 digit";
        $error_finder = 1;
  }else{
        $fullname = $_POST['emergency_full_name'];
        if(!preg_match("/^[a-z A-Z]*$/", $fullname)){
              $error_fullname = "Only Charecter Allow";
              $error_finder = 1;
        }else{
               $fullname = $_POST['emergency_full_name'];
        }
  }
      if(empty($_POST['emergency_contact'])){
            $error_number="The number is empty";
            $error_finder=1;
      }
      else if(strlen($_POST['emergency_contact'])<9){
            $error_number="the number should be 10 lenth";
            $error_finder=1;
      }
      else if(strlen($_POST['emergency_contact'])>14){
            $error_number = "Contact Cannot accept more then 14 digit. ";
            $error_finder = 1;
      }
      else{
            $number=$_POST['emergency_contact'];
            if(preg_match("/^[0-9]*&/", $number)){
                  $error_finder=1;
                  $error_number="only number allow";
            }
            else{
                  $number=$_POST['emergency_contact'];
            }
      }
      if(empty($_POST['emergency_location'])){
            $error_finder=1;
            $error_address="The address is Empty";
      }
      else if(strlen($_POST['emergency_location'])<=3){
            $error_finder=1;
            $error_address="the 3 digit of charater can't support";

      }
      else{
            $address=$_POST['emergency_location'];
            if(!preg_match("/^[a-zA-Z]*$/", $address)){
                  $error_finder=1;
                  $error_address="only charater support";
            }
            else{
                  $address=$_POST['emergency_location'];
            }
      }
      
      
if($error_finder==0)
{      $_SESSION['booking_send']=true;
    //   $sql="INSERT INTO student(firstname,lastname,email,number,address,password) values('".$first."','".$last."','".$email."','".$number."','".$address."','".$password."')";
      $sql="INSERT INTO `booking`( First Name, Last Name, Email Address, Full Name, Location, Contact ) VALUES ('".$first."','".$last."','".$email."','".$fullname."','".$address."','".$number."')";
      $sql = "INSERT INTO `booking`(`booking_id`, `Package_Name`, `First Name`, `Middle Name`, `Last Name`, `Email Address`, `Gender`, `Date of Birth`, `Nationality`, `Profession`, `Arrival Date`, `Departure Date`, `Passport No`, `Issued Date`, `Expiry Date`, `Full Name`, `Location`, `Contact`, `Relationship`, `Comment`) VALUES 
                                    (NULL,'" . $_POST["pac_select"] . "','".$first."','" . $_POST["booking_middle"] . "','".$last."','".$email."','" . $_POST["gender"] . "','" . $_POST["booking_dob"] . "','" . $_POST["booking_nationality"] . "','" . $_POST["booking_profession"] . "','" . $_POST["booking_arrival"] . "','" . $_POST["booking_departure"] . "',
                                    '" . $_POST["booking_passport"] . "','" . $_POST["booking_issued"] . "','" . $_POST["booking_expiry"] . "','".$fullname."','".$address."','".$number."','" . $_POST["emergency_relation"] . "','" . $_POST["emergency_comment"] . "')";
      
      mysqli_query($conn,$sql);
    //   $id=mysqli_insert_id();
//       $_SESSION['id']=$id;
//   if($id){
//       echo "<script>window.location:'booking.php';</script>";

// }
}
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
    <!-- CSS Link -->

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

    <!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
    <!-- Fontawesome -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ultra&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <!-- Google Fonts -->

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >

</head>

<body>

    <!-- Function -->
   

    <div class="home_top">
        <?php include('navbar.php'); ?>

        <div class="text_1">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                    <li class="breadcrumb-item"><a href="packages.php">Package</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
                <h1>Trip Booking</h1>
            </div>
        </div>
    </div>

    <!-- Trip Booking  -->
    <div class="container_booking">
    <div class="category_1">
            <h3 class="top_text">BOOKING</h3>
    </div>
        <div class="container d-flex justify-content-center">

            <form   action=""  method="post" id="myform" >
            <div class="col">
            <h2 class="booking_details">Select a Packages:</h2><br>
                        <select class="form-select" name="pac_select" aria-label="Default select example" >
                        <option value="" selected>Select</option>
                        <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                         <?php
                        // $conn=makeconnection();  
                        $sql="select * from `package`  ";
                        $result=mysqli_query($conn,$sql);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        while($row=mysqli_fetch_array($result))
                        {
                            
                                echo "<option value=$row[0]>$row[2]</option>";
                            
                        }
                            ?>
                        </select>                       
                    </div>

                <div class="row mb-4">

                    <h2 class="booking_details">Personal Details:</h2><br>
                    <div class="col">
                        <!-- <label class="form-label">Price:</label> -->
                        <input type="text" class="form-control" id="firstname" name="booking_first" placeholder="First Name" value="<?php echo $first; ?>">
                         <center><p style="color:red;">
                         <?php
                              if($error_first == !null){
                                    echo $error_first;
                              }
                         ?>
                   </p></center>
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Duration:</label> -->
                        <input type="text" class="form-control" id="middlename" name="booking_middle" placeholder="Middle Name">
                        
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="text" class="form-control" id="lastname" name="booking_last" placeholder="Last Name" value="<?php echo $last; ?>">
                         <center><p style="color:red; font-style:normal;">
                   <?php if($error_last==!null){
                        echo $error_last;
                        } ?></p></center>
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="text" class="form-control" id="email" name="booking_email" placeholder="Email Address" value="<?php echo $email; ?>" >
                         <center> <p style="color:red;">
                   <?php 
                   if($error_email==!null){
                        echo $error_email;

                        } ?>
                        </p></center>
                    </div>

                </div>


                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Gender:</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="gender" id="gender" value="Others">
                            <label class="form-check-label" for="inlineRadio3">Others</label>
                        </div>

                    </div>

                    <div class="col">
                        <label class="form-label">Date of Birth:</label>
                        <input type="date" class="form-control" id="dateofbirth" name="booking_dob" placeholder="Date Of Birth">
                    </div>

                    <div class="col">
                        <label class="form-label">Nationality:</label>
                        <input type="text" class="form-control" id="nationality" name="booking_nationality" placeholder="Nationality">
                    </div>

                </div>


                <div class="row mb-2">
                    <!-- <div class="col">
                        <label class="form-label">Profession:</label><br>
                        <input type="text" name="booking_profession" placeholder="Profession" />
                    </div> -->

                    <div class="col">
                        <label class="form-label">Arrival Date:</label><br>
                        <input type="date" name="booking_arrival" id="arrival" placeholder="Arrival Date:" />
                    </div>

                    <div class="col">
                        <label class="form-label">Departute Date:</label><br>
                        <input type="date" name="booking_departure" id="departure"  placeholder="Departure Date:" />
                    </div>

                </div>

                <!-- <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Passport No</label><br>
                        <input type="text" name="booking_passport" id="passport" placeholder="Passport No"  />
                    </div>

                    <div class="col">
                        <label class="form-label">Issued Date:</label><br>
                        <input type="date" name="booking_issued" id="issued" placeholder="Issued Date:"  />
                    </div>

                    <div class="col">
                        <label class="form-label">Expiry Date:</label><br>
                        <input type="date" name="booking_expiry" id="expiry" placeholder="Expiry Date:"  />
                    </div>

                </div> -->


                <div class="row mb-4">

                    <h2 class="booking_details">In Case of Emergency:</h2><br>
                    <div class="col">
                       
                        <input type="text" class="form-control" id="Emergency_name" name="emergency_full_name" placeholder="Full Name*" value="<?php echo $fullname; ?>">
                         <center><p style="color:red;">
                         <?php
                              if($error_fullname == !null){
                                    echo $error_fullname;
                              }
                         ?>
                   </p></center>
                    </div>

                    <div class="col">
                       
                        <input type="text" class="form-control" id="location" name="emergency_location" placeholder="Location*" value="<?php echo $address; ?>">
                         <center><p style="color:red;">
                   <?php if($error_address==!null){
                        echo $error_address;
                        } ?>
                   </p></center>
                    </div>

                    <div class="col">
                       
                        <input type="text" class="form-control" id="Emergency_contact" name="emergency_contact" placeholder="Contact No.*" value="<?php echo $number; ?>">
                        <center><p style="color:red; font-family:normal;">
                   <?php 
                    if($error_number==!null){
                        echo $error_number;
                        } ?>
                        </p></center>
                    </div>

                    <div class="col">
                      
                        <input type="text" class="form-control" id="relation" name="emergency_relation" placeholder="RelationShip">
                        <span class="error" id="relation_err"> </span>
                    </div>

                </div>

                    <!-- <div class="form-group mb-3">
                    <label class="form-label">Comment:</label><br>
                    <textarea id="emergency_comment" name="emergency_comment" rows="4" cols="127" placeholder="Enter text here..." required>

                    </textarea>


    
                    </div> -->

                    <div class="form-floating">
                    <!-- <label class="form-label">Comment:</label><br> -->
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" id="emergency_comment" name="emergency_comment"></textarea>
                    <label for="floatingTextarea2">Enter the comment here....</label>
                    </div>


                <div>
                    <button type="submit" class="btn btn-success" id="submitbtn" name="booking_send">Submit</button>

                </div>
            </form>
        </div>
    </div>

    <!-- Booking Validation -->
    <!-- <script  src="js/book_validation.js" ></script> -->


    <!-- Contact Section -->

    <?php 
    // include('contact.php'); 
    ?>


    <!-- Footer Section -->

    <?php include('footer.php'); ?>


   



</body>

</html>



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// require 'phpmailer/src/Exception.php';
// require 'phpmailer/src/PHPMailer.php';
// require 'phpmailer/src/SMTP.php

if(isset($_POST["booking_send"])){

    $package=htmlspecialchars($_POST['pac_select']);
    $firstname=htmlspecialchars($_POST['booking_first']);
     $middlename=htmlspecialchars($_POST['booking_middle']);
      $lastname=htmlspecialchars($_POST['booking_last']);
     $email=htmlspecialchars($_POST['booking_email']);
     $gender=htmlspecialchars($_POST['gender']);
     $dob=htmlspecialchars($_POST['booking_dob']);
    $nationality=htmlspecialchars($_POST['booking_nationality']);
        $profession=htmlspecialchars($_POST['booking_profession']);
    $arrival=htmlspecialchars($_POST['booking_arrival']);
    $departure=htmlspecialchars($_POST['booking_departure']);
    $passport=htmlspecialchars($_POST['booking_passport']);
     $issued=htmlspecialchars($_POST['booking_issued']);
    $expiry=htmlspecialchars($_POST['booking_expiry']);
    $fullname=htmlspecialchars($_POST['emergency_full_name']);
     $contact=htmlspecialchars($_POST['emergency_contact']);
    $address=htmlspecialchars($_POST['emergency_location']);
    $relation=htmlspecialchars($_POST['emergency_relation']);
    $message=htmlspecialchars($_POST['emergency_comment']);


   
                
    $mail = new PHPMailer(true);

    $mail->IsSMTP(); // send via SMTP
    $mail->Host = 'smtp.gmail.com'; // SMTP servers
    $mail->Port = 587; // SMTP servers
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->Username = 'abinashshtestha@gmail.com'; // SMTP username
    $mail->Password = 'pglcdyexytixtxvr'; // SMTP password
    $mail->From = $_POST["booking_email"];
    $mail->FromName = 'Abinash Shrestha' ;
    $mail->AddAddress('abinashshrestha246@gmail.com');
    $mail->IsHTML(true); // send as HTML

    $mail->Subject = ("Booking");
    $mail->Body =
    "First Name: $firstname <br> 
    Middle Name: $middlename <br>
    Last Name: $lastname <br> 
    Email: $email<br>
    Gender: $gender <br>
    Date of Birth: $dob <br>
    Nationality: $nationality <br>
    Profession: $profession<br>
    Arrival Date: $arrival <br>
    Departure Date: $departure<br>
    Passport No: $passport <br>
    Issued Date: $issued <br>
    Expiry Date: $expiry <br>
    Full Name: $fullname <br>
    Contact: $contact <br> 
    Address: $address <br> 
    RelationShip: $relation <br>
    Message: $message";

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