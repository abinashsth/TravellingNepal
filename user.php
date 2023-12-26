<?php if(!isset($_SESSION)) { session_start(); } ?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- CSS Link -->
 <link rel="stylesheet" href="css/style1.css"> 

<!-- Boostrap Css Link -->
<link href="css/bootstrap.min.css" rel="stylesheet">

<!-- Fontawesome -->
<link rel="stylesheet" href="css/all.min.css">
<link rel="stylesheet" href="css/fontawesome.min.css">
<!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
<!-- Fontawesome -->
  <title>User </title>
</head>

<body>


<?php
if($_SESSION['loginstatus']=="")
{
	header("location:loginform.php");
}
?>

<?php include('includes/function.php');?>

<?php include "includes/connection.php";?>


<!-- Navbar -->
<?php include('includes/top.php'); ?> 

<!-- Admin Link  -->

<?php include('includes/left.php'); ?>



<!-- 
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    PHP Complete CRUD Application
  </nav> -->

  <div class="container">
    <?php
    // if (isset($_GET["msg"])) {
    //   $msg = $_GET["msg"];
    //   echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    //   ' . $msg . '
    //   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    // </div>';
    // }
    ?>

    <h1 style='text-align: center; color: #3BBFC3'> User </h1>
    <a href="add-new.php" class="btn btn-success mb-3" style ="background-color: #3BBFC3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table" style ="background-color: #3BBFC3">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Username</th>
          <th scope="col">Password</th>
          <th scope="col">Type</th>
          <th scope="col">Operation</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `admin`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["username"] ?></td>
            <td><?php echo $row["password"] ?></td>
            <td><?php echo $row["type"] ?></td>
            <td>
            <?php if ($_SESSION["usertype"] == "admin") { ?>
              <a href="edituser.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
             
              <a href="deleteuser.php?id=<?php echo $row["id"] ?>" class="link-dark"  onclick="return confirm('Are you sure you want to delete this item?');">
                            <i class="fa-solid fa-trash fs-5"></i></a>
            
            <?php } ?>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

<!-- Delete Function -->
<!-- <script>
 function deleteFile(username) {
  // Validate the file name
  if (!fileName) {
    console.error('Invalid file name');
    return;
  }

  // Show confirmation dialog
  const confirmDelete = confirm(`Are you sure you want to delete the file "${username}"?`);

  if (confirmDelete) {
    // Call a server-side API or perform necessary actions to delete the file
    // Replace the following line with the actual code for file deletion

    // Example: Making an AJAX request to a server-side script
    const xhr = new XMLHttpRequest();
    const url = 'delete_file.php'; // Replace with the actual server-side script URL

    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE) {
        if (xhr.status === 200) {
          // File deletion successful
          console.log('File deleted successfully');
        } else {
          // Error occurred while deleting the file
          console.error('Error deleting the file');
        }
      }
    };

    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send('file=' + encodeURIComponent(username));
  } else {
    // User cancelled the deletion
    console.log('File deletion cancelled');
  }
}


</script> -->

  <!-- Bootstrap JS -->
  <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

</body>

</html>