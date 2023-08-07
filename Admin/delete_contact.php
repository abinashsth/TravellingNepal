


<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: view_contact.php');
}
?>

<?php
include "includes/connection.php";
$id = $_GET["cont_id"];
$sql = "DELETE FROM `contact` WHERE cont_id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: view_contact.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

