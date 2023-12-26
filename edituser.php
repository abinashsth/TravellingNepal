<?php
include "includes/connection.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  // $name = $_POST['name'];
  $username = $_POST['username'];
   $password = $_POST['password'];
   $type = $_POST['type'];

  $sql = "UPDATE `admin` SET `username`='$username',`password`='$password', `type`='$type' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: user.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSS Link -->
  <!-- <link rel="stylesheet" href="css/style1.css">  -->

<!-- Boostrap Css Link -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Fontawesome -->
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
<!-- Fontawesome -->
  <title>PHP CRUD Application</title>
</head>

<body>
  <!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav> -->

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `admin` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
          <label class="form-label">Username:</label>
          <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Password:</label>
            <input type="password" class="form-control" name="password" value="<?php echo $row['password'] ?>">
          </div>
        </div>

     
       

        <div class="form-group mb-3">
          <label>Type:</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="type" id="admin" value="admin" <?php echo ($row["type"] == 'admin') ? "checked" : ""; ?>>
          <label for="admin" class="form-input-label">Admin</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="type" id="geberal" value="general" <?php echo ($row["type"] == 'general') ? "checked" : ""; ?>>
          <label for="general" class="form-input-label">General</label>
        </div>

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

   <!-- Bootstrap JS -->
   <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

</body>

</html>