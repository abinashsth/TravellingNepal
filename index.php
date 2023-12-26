<?php
// Start a session if not already started
if (!isset($_SESSION)) {
    session_start();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>

     <!-- CSS Link -->
     <link rel="stylesheet" href="css/style1.css"> 

    <!-- Boostrap Css Link -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
    <!-- Fontawesome -->
</head>

<body>

<?php
// Redirect to loginform.php if the user is not logged in
if ($_SESSION['loginstatus'] == "") {
    header("location:loginform.php");
}

// Include necessary PHP files

?>


<?php 
include('includes/function.php');
?>

<?php include "includes/connection.php";?>

    <!-- Navbar -->
    <?php include('includes/top.php'); ?>

    <!-- Admin Link -->
    <?php include('includes/left.php'); ?>

    <!-- Welcome to Admin Panel -->
    <div id="right">
        <div class="topic">
            <h2>WELCOME
                <P> TO </P>
                ADMIN PANEL
                <div class="usericon">
                    <i class="fa-solid fa-user-lock "></i>
                </div>
            </h2>
        </div>
    </div>

    
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

</body>

</html>
