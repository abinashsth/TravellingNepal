<?php 

session_start();
include'connection.php';




 ?>



<!DOCTYPE html>
<?php
//finder variable
$error_finder = 0;
//without error variable
$first =$last=$email=$number=$address= $password="";
//with error variable
$error_first = $error_last=$error_email=$error_number=$error_address=$error_password="";
if(isset($_POST['login'])){
      if(empty($_POST['first'])){
            $error_first = "Empty First Name";
            $error_finder = 1;
      }else if(strlen($_POST['first'])<2){
            $error_first = "First Name cannot accept less the 3 digit";
            $error_finder = 1;
      }else{
            $first = $_POST['first'];
            if(!preg_match("/^[a-zA-Z]*$/", $first)){
                  $error_first = "Only Charecter Allow";
                  $error_finder = 1;
            }else{
                   $first = $_POST['first'];
            }
      }
      if(empty($_POST['last'])){
            $error_last="Empty last name";
            $error_finder=1;

      }
      else if(strlen($_POST['last'])<3){
            $error_last="Last name cannot accept less then 3 digit";
            $error_finder=1;
      }
      else{
            $last=$_POST['last'];
            if(!preg_match("/^[a-zA-Z]*$/",$last )){
                  $error_last="only Character allow";
                  $error_finder=1;
            }
            else{
                  $last=$_POST['last'];
            }
      }
      if(empty($_POST['email'])){
            $error_finder=1;
            $error_email="Empty email ";
      }
      else if(strlen($_POST['email'])<=5){
            $error_finder=1;
            $error_email="the 3 digit of charater can't support";
      }
      else{
            $email=$_POST['email'];
            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                  $error_finder=1;
                  $error_email="invalid email ";
            }
            else{
                  $email=$_POST['email'];
            }
      }
      if(empty($_POST['number'])){
            $error_number="The number is empty";
            $error_finder=1;
      }
      else if(strlen($_POST['number'])<9){
            $error_number="the number should be 10 lenth";
            $error_finder=1;
      }
      else if(strlen($_POST['number'])>14){
            $error_number = "Contact Cannot accept more then 14 digit. ";
            $error_finder = 1;
      }
      else{
            $number=$_POST['number'];
            if(preg_match("/^[0-9]*&/", $number)){
                  $error_finder=1;
                  $error_number="only number allow";
            }
            else{
                  $number=$_POST['number'];
            }
      }
      if(empty($_POST['address'])){
            $error_finder=1;
            $error_address="The address is Empty";
      }
      else if(strlen($_POST['address'])<=3){
            $error_finder=1;
            $error_address="the 3 digit of charater can't support";

      }
      else{
            $address=$_POST['address'];
            if(!preg_match("/^[a-zA-Z]*$/", $address)){
                  $error_finder=1;
                  $error_address="only charater support";
            }
            else{
                  $address=$_POST['address'];
            }
      }
      if(empty($_POST['password'])){
            $error_finder=1;
            $error_password="the password empty";

      }
      else if(strlen($_POST['password'])<=5)
      {
            $error_finder=1;
            $error_password="the password should be more then 6";
      }
      else{
            $password=$_POST['password'];
      }
      
if($error_finder==0)
{      $_SESSION['login']=true;
      $sql="INSERT INTO student(firstname,lastname,email,number,address,password) values('".$first."','".$last."','".$email."','".$number."','".$address."','".$password."')";
      $data=mysqli_query($conn,$sql);
      $id=mysqli_insert_id();
      $_SESSION['id']=$id;
  if($id){
      echo "<script>window.location:'register.php';</script>";

}
}
}
?>
<html>
<head>
	<title>register || page</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	
</head>
<body>
<?php include'../classes/header.php'; 
       include'../classes/nav.php';
       ?>
       <div id="reg">
       <div class="reg">
       <div id="reg-left">
       <div class="reg-left">
       <h4>Sign Up</h4>
       <P>it's free and always will be.</P>
       </div>
                   <form method="post" action="" enctype="multipart/form-data">
                   <input type="text" name="first" placeholder="FIRST NAME" value="<?php echo $first; ?>">
                   <br><center><p style="color:red;">
                         <?php
                              if($error_first == !null){
                                    echo $error_first;
                              }
                         ?>
                   </p></center>
                   <input  type="text" name="last" placeholder="last name" value="<?php echo $last; ?>">
                   <br><center><p style="color:red; font-style:normal;">
                   <?php if($error_last==!null){
                        echo $error_last;
                        } ?></p></center>
                   <input type="text" name="email" placeholder="email " value="<?php echo $email; ?>" >
                   <center> <p style="color:red;">
                   <?php 
                   if($error_email==!null){
                        echo $error_email;

                        } ?>
                        </p></center>

                   <input type="text" name="number" placeholder="number" value="<?php echo $number; ?>" >
                   <center><p style="color:red; font-famly:normal;">
                   <?php 
                    if($error_number==!null){
                        echo $error_number;
                        } ?>
                        </p></center>
                   <input type="text" name="address" placeholder="address" value="<?php echo $address; ?>" >
                   <center><p style="color:red;">
                   <?php if($error_address==!null){
                        echo $error_address;
                        } ?>
                   </p></center>
                   <input type="password" name="password" placeholder="password">
                   <center><p style="color:red;">
                         <?php if($error_password==!null){
                              echo $error_password;
                              } ?>
                   </p></center>
                   
                   
                   <input type="submit" name="login" value="sign up">
                     </form>
                     

       
      
</body>
</html>