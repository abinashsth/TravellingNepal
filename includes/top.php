
<!-- TOp of the Admin Panel  -->
<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top</title>
   
   <!-- Css Link -->
    <link rel="stylesheet" href="css/style1.css">
    <!-- css link closed -->
</head>
<body>


<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>
    
<?php
// include('includes/function.php');
include('includes/connection.php');
?>
     

<!-- Navbar -->
<div id="navbar">
    <img src="Logo\logo1.png" alt="Travelling Nepal">
    <div class="logout">
    
            <a href="../index.php" >Preview Website</a>
            <a href="logout.php" >Logout</a>
    </div>
</div>
<!-- Navbar closed -->



</body>
</html>


