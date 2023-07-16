

<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: view_enquiry.php');
}
?>

<?php
include "includes/connection.php";
$id = $_GET["enquiry_id"];
$sql = "DELETE FROM `enquiry` WHERE enquiry_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: view_enquiry.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

