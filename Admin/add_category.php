<?php if (!isset($_SESSION)) { session_start(); } ?>

<?php
include "includes/connection.php";
include "includes/function.php";

if ($_SESSION['loginstatus'] == "") {
    header("location:loginform.php");
    exit; // Add an exit statement to stop the script execution
}

if (isset($_POST["submit"])) {
    $conn = makeconnection();

    // $categoryname = $_POST['']

    $target_dir = "category/";
    $target_file = $target_dir . basename($_FILES["Cat_images"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);

    //check if image file is an actual image or fake image
    $check = getimagesize($_FILES["Cat_images"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadok = 1;
    } else {
        echo "File is not an image.";
        $uploadok = 0;
    }

    //check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadok = 0;
    }

    //check file size
    if ($_FILES["Cat_images"]["size"] > 1000000) {
        echo "Sorry, your file is too large.";
        $uploadok = 0;
    }

    //allow certain file formats
    if ($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadok = 0;
    }

    if ($uploadok == 1) {
        if (move_uploaded_file($_FILES["Cat_images"]["tmp_name"], $target_file)) {
            // $sql = "INSERT INTO `category` ( `Category_Name`, `Images`, `Details`) VALUES ('" . $_POST["Cat_name"] . "', '" . basename($_FILES["Cat_images"]["name"]) . "', '" . $_POST["Cat_details"] . "')";
            $sql = "INSERT INTO `category`(`cat_id`, `Category_Name`, `Images`, `Details`) VALUES (NULL,'" . $_POST["Cat_name"] . "', '" . basename($_FILES["Cat_images"]["name"]) . "', '" . $_POST["Cat_details"] . "')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>
            alert('Successfully Inserted .');
            </script>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
    <!-- Boostrap Css Link -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->
    <!-- Fontawesome -->

    <title>Category</title>
</head>

<body>
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Category</h3>
            <p class="text-muted">Complete the form below to add a new category</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Category Name:</label>
                        <input type="text" class="form-control" name="Cat_name" placeholder="Category Name">
                    </div>

                    <div class="col">
                        <label class="form-label">Upload Pic:</label><br>
                        <input type="file" name="Cat_images" />
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Details:</label><br>
                    <textarea id="freeform" name="Cat_details" rows="4" cols="100"
                        placeholder="Enter text here..." required></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="category.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

  
     <!-- Bootstrap JS -->
     <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>

    </body>

</html>
