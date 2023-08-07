

<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: review.php');
}
?>

<?php
include "includes/connection.php";
$id = $_GET["review_id"];
$sql = "DELETE FROM `review` WHERE review_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: review.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

