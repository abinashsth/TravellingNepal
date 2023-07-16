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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
        crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Category</title>
</head>

<body>

    <?php
    if ($_SESSION['loginstatus'] == "") {
        header("location: loginform.php");
        exit; // Add exit to prevent further execution
    }
    ?>

    <?php include('includes/function.php')?>

    <?php include "includes/connection.php"?>


    <!-- Navbar -->
    <?php include('includes/top.php') ?> 

    <!-- Admin Link -->
    <?php include('includes/left.php') ?>


    <div class="container">
        <?php
        if (isset($_GET["msg"])) {
            $msg = $_GET["msg"];
            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            ' . $msg . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
        ?>
        <h1 style='text-align: center; color: #3BBFC3 '> Category </h1>
        <a href="add_category.php" class="btn btn-success mb-3" style="background-color: #3BBFC3">Add New</a>

        <table class="table table-hover text-center">
            <thead class="table" style="background-color: #3BBFC3">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Images</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "SELECT * FROM `category`";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td><?php echo $row["cat_id"] ?></td>
                        <td><?php echo $row["Category_Name"] ?></td>
                       <td> <?php
                         echo $row["Images"] 
                         ?> </td>

                        <td>
                            <a href="editcategory.php?cat_id=<?php echo $row["cat_id"] ?>" class="link-dark">
                            <i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                           
                            <a href="delete_category.php?cat_id=<?php echo $row["cat_id"] ?>" class="link-dark"  onclick="return confirm('Are you sure you want to delete this item?');">
                            <i class="fa-solid fa-trash fs-5"></i></a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Delete Function -->
    <script>
//         function callfunction() {
//   var confirmed = false;
  
//   while (!confirmed) {
//     if (confirm("Are you sure you want to delete this record?")) {
//       confirmed = true;
//       // Proceed with the deletion or perform any other action
//     } else ( cancel!=0){
//       // Perform any other action if the user cancels the deletion
//       console.log("Deletion canceled.");
//     }
//   }
// }


// function callfunction()
// {
//  confirm("Are you sure you want to delete?");
// }

    </script>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
