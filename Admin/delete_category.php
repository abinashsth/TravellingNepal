
<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: category.php');
}
?>

<?php
include "includes/connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM `category` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: category.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

