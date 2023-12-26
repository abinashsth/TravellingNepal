
<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

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
    <title>Packages</title>
</head>

<body>

    <?php
    if ($_SESSION['loginstatus'] == "") {
        header("location: loginform.php");
        exit; // Add exit to prevent further execution
    }
    ?>

    <?php include('includes/function.php')?>

    <?php 
    // include ('includes/connection.php')
    ?>


    <!-- Navbar -->
    <?php include('includes/top.php') ?> 

    <!-- Admin Link -->
    <?php include('includes/left.php') ?>


    <div class="container">
        <?php
        // if (isset($_GET["msg"])) {
        //     $msg = $_GET["msg"];
        //     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        //     ' . $msg . '
        //     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        //     </div>';
        // }
        ?>
        <h1 style='text-align: center; color: #3BBFC3 '> Packages </h1>
        <a href="add_package.php" class="btn btn-success mb-3" style="background-color: #3BBFC3">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table" style="background-color: #3BBFC3">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Packages Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Max Elevation</th>
                    <th scope="col">Max Group</th>
                    <th scope="col">Best Time</th>
                    <!-- <th scope="col">Details</th> -->
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `package`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["pac_id"] ?></td>
                        <td><?php echo $row["Package_title"] ?></td>
                        <td><?php echo $row["Price"] ?></td>
                        <td><?php echo $row["Duration"] ?></td>
                        <td><?php echo $row["Max_Evelation"] ?></td>
                        <td><?php echo $row["Max_Group"] ?></td>
                        <td><?php echo $row["Best_Time"] ?></td>
                       
                        <td>
                        <?php if ($_SESSION["usertype"] == "admin") { ?>
                            <a href="editpackage.php?pac_id=<?php echo $row["pac_id"] ?>" class="link-dark">
                            <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                           
                            <a href="delete_package.php?pac_id=<?php echo $row["pac_id"] ?>" class="link-dark"  onclick="return confirm('Are you sure you want to delete this item?');">
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

function callfunction()
{
 confirm("Are you sure you want to delete?");
}

    </script> -->

   <!-- Bootstrap JS -->
   <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

</body>

</html>
