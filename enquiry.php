
<?php
    include('function.php');
    include('connection.php');
   

  
    ?>

<?php
//finder variable
$error_finder = 0;
//without error variable
$first =$last=$email=$fullname=$number=$address="";
//with error variable
$error_first = $error_last=$error_email=$error_fullname=$error_number=$error_address="";
if(isset($_POST['submit'])){
      if(empty($_POST['Enquiry_name'])){
            $error_first = "Empty First Name";
            $error_finder = 1;
      }else if(strlen($_POST['Enquiry_name'])<2){
            $error_first = "First Name cannot accept less the 3 digit";
            $error_finder = 1;
      }else{
            $first = $_POST['Enquiry_name'];
            if(!preg_match("/^[a-zA-Z]*$/", $first)){
                  $error_first = "Only Charecter Allow";
                  $error_finder = 1;
            }else{
                   $first = $_POST['Enquiry_name'];
            }
      }
     
      if(empty($_POST['Enquiry_email'])){
            $error_finder=1;
            $error_email="Empty email ";
      }
      else if(strlen($_POST['Enquiry_email'])<=5){
            $error_finder=1;
            $error_email="the 3 digit of charater can't support";
      }
      else{
            $email=$_POST['Enquiry_email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                  $error_finder=1;
                  $error_email="invalid email ";
            }
            else{
                  $email=$_POST['Enquiry_email'];
            }
      }
    
      if(empty($_POST['Enquiry_Contact'])){
            $error_number="The number is empty";
            $error_finder=1;
      }
      else if(strlen($_POST['Enquiry_Contact'])<9){
            $error_number="the number should be 10 lenth";
            $error_finder=1;
      }
      else if(strlen($_POST['Enquiry_Contact'])>14){
            $error_number = "Contact Cannot accept more then 14 digit. ";
            $error_finder = 1;
      }
      else{
            $number=$_POST['Enquiry_Contact'];
            if(preg_match("/^[0-9]*&/", $number)){
                  $error_finder=1;
                  $error_number="only number allow";
            }
            else{
                  $number=$_POST['Enquiry_Contact'];
            }
      }
      if(empty($_POST['Enquiry_Address'])){
            $error_finder=1;
            $error_address="The address is Empty";
      }
      else if(strlen($_POST['Enquiry_Address'])<=3){
            $error_finder=1;
            $error_address="the 3 digit of charater can't support";

      }
      else{
            $address=$_POST['Enquiry_Address'];
            if(!preg_match("/^[a-zA-Z]*$/", $address)){
                  $error_finder=1;
                  $error_address="only charater support";
            }
            else{
                  $address=$_POST['Enquiry_Address'];
            }
      }
      
      
if($error_finder==0)
{      $_SESSION['submit']=true;

          $sql = "INSERT INTO `enquiry`(Full_Name, Contact No., Email_Address, Address) VALUES ('".$first."','".$number."','".$email."','".$address."')";
      $data=mysqli_query($conn,$sql);
    //   $id=mysqli_insert_id();
      $_SESSION['id']=$id;
  if($id){
      echo "<script>window.location:'enquiry.php';</script>";

}
}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enquiry</title>

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
    <?php
   
  
    if (isset($_POST["submit"])) {
        $conn = makeconnection();
    
                $sql = "INSERT INTO `enquiry`(`enquiry_id`, `Package_id`,  `Package_Name`,`Full_Name`, `Contact No.`, `Email_Address`, `Address`, `Message`) VALUES 
                (Null,'" . $_POST["pac_select"] . "','" . $_POST["pac_select"] . "','" . $_POST["Enquiry_name"] . "','" . $_POST["Enquiry_Contact"] . "'
                ,'" . $_POST["Enquiry_email"] . "','" . $_POST["Enquiry_Address"] . "','" . $_POST["Enquiry_message"] . "')";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                // echo "<script>alert('Record Saved.');</script>";
            
        
    }
    ?>

    <div class="home_top">
        <?php include('navbar.php'); ?>

        <div class="text_1">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Category</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Subcategory</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Package</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Enquiry</li>
                </ol>
                <h1>Enquiry</h1>
            </div>
        </div>
    </div>

    <!-- Trip Booking  -->
    <div class="container_booking">

    <div class="category_1">
            <h3 class="top_text">ENQUIRY</h3>
    </div>

        <div class="container d-flex justify-content-center">

            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">

                    <!-- Subcategory Option -->
                    <h2 class="booking">Select a Package:</h2><br>
                    <div class="col">

                        <select class="form-select" name="pac_select" aria-label="Default select example">
                            <option value="" selected>Select</option>
                            <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                            <?php
                            $conn = makeconnection();
                            $sql = "select * from package";
                            $result = mysqli_query($conn, $sql);
                            $r = mysqli_num_rows($result);
                            //echo $r;

                            while ($row = mysqli_fetch_array($result)) {

                                echo "<option value=$row[0]>$row[3]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">

                    <h2 class="booking_details">Personal Details:</h2><br>
                    <div class="col">
                        <!-- <label class="form-label">Price:</label> -->
                        <input type="text" class="form-control" name="Enquiry_name" placeholder="Full Name" value="<?php echo $first; ?>">
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
                        <input type="text" class="form-control" name="Enquiry_Contact" placeholder="Contact No." value="<?php echo $number; ?>">
                        <center><p style="color:red; font-famly:normal;">
                   <?php 
                    if($error_number==!null){
                        echo $error_number;
                        } ?>
                        </p></center>
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="text" class="form-control" name="Enquiry_email" placeholder="Email" value="<?php echo $email; ?>">
                        <center> <p style="color:red;">
                   <?php 
                   if($error_email==!null){
                        echo $error_email;

                        } ?>
                        </p></center>
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="text" class="form-control" name="Enquiry_Address" placeholder="Address" value="<?php echo $address; ?>">
                        <center><p style="color:red;">
                   <?php if($error_address==!null){
                        echo $error_address;
                        } ?>
                   </p></center>
                    </div>

                </div>


                


                <div class="form-floating">
                    <!-- <label class="form-label">Comment:</label><br> -->
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" id="Enquiry_message" name="Enquiry_message"></textarea>
                    <label for="floatingTextarea2">Enter the comment here....</label>
                    </div>


                <div>
                    <button  onclick="sendEmail()";  type="submit" class="btn btn-success" name="submit">Submit</button>

                </div>
            </form>
        </div>
    </div>



    <!-- Contact Section -->

    <?php include('contact.php'); ?>


    <!-- Footer Section -->

    <?php include('footer.php'); ?>


    <script src="https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail() {
            Email.send({
                Host: "smtp.elasticemail.com",
                Username: "abinashshrestha246@gmail.com",
                Password: "6C0F09DF457C58AFED32013310FCDEE20EDA",
                To: 'abinashshtestha@gmail.com',
                From: document.getElementById('email').value, // Corrected 'getElementById'
                Subject: "This is the subject",
                Body: "And this is the body"
            }).then(
                message => alert(message)
            );
        } 
    </script>



</body>

</html>