

<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: package.php');
}
?>

<?php
include "includes/connection.php";
$id = $_GET["pac_id"];
$sql = "DELETE FROM `package` WHERE pac_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: package.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

