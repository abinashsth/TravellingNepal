



<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: view_booking.php');
}
?>

<?php
include "includes/connection.php";
include "includes/function.php";
$id = $_GET["booking_id"];
$sql = "DELETE FROM `booking` WHERE booking_id = {$id}";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: view_booking.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

