
<?php if(!isset($_SESSION)) { session_start(); } ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Left Side of Admin Panel</title>

    <link href="css/style1.css" rel="stylesheet" type="text/css" media="all"/>

    
    
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
    
<!-- Admin Link  -->

<div id="Aside">
    <div class="Aside_item">
    
        <h3 >  <a href="index.php">Dashboard </a> </h3>
        
        
      
        
        <div class="link">
       <a href="user.php" class="adminlink">User </a>
       <a href="category.php" class="adminlink"> Category </a>
       <a href="package.php" class="adminlink">Packages </a>
       <a href="review.php" class="adminlink">Reviews </a>
       <a href="view_booking.php" class="adminlink">Booking </a>
       <a href="view_enquiry.php" class="adminlink">Enquiry </a>
       <a href="view_contact.php" class="adminlink">Contact  </a>
       <!-- <a href="" class="adminlink">Add Reviews</a>
       <a href="" class="adminlink">Delete Reviews</a>
       <a href="" class="adminlink">View Reviews</a>
       <a href="" class="adminlink">View Enquiry</a> -->
        </div>
       
       
</div>
</div>

</body>
</html>


