<?php
include "includes/connection.php";
$id = $_GET["id"];
$sql = "DELETE FROM `admin` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: user.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}

