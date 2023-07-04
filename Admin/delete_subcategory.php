

<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: subcategory.php');
}
?>

<?php
include "includes/connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM `subcategory` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: subcategory.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

