
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

    $target_dir = "subcategory/";
    $target_file = $target_dir . basename($_FILES["Subcat_images"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);

    //check if image file is an actual image or fake image
    $check = getimagesize($_FILES["Subcat_images"]["tmp_name"]);
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
    if ($_FILES["Subcat_images"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadok = 0;
    }

    //allow certain file formats
    if ($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadok = 0;
    }

    if ($uploadok == 1) {
        if (move_uploaded_file($_FILES["Subcat_images"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO `subcategory` ( `Subcategory_Name`, `Images`, `Details`) VALUES ('" . $_POST["Subcat_name"] . "', '" . basename($_FILES["Subcat_images"]["name"]) . "', '" . $_POST["Subcat_details"] . "')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Record Saved.');</script>";
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
    <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Subcategory</h3>
            <p class="text-muted">Complete the form below to add a new category</p>
        </div>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Subcategory Name:</label>
                        <input type="text" class="form-control" name="Subcat_name" placeholder="Subcategory Name">
                    </div>

                    <div class="col">
                        <label class="form-label">Upload Pic:</label><br>
                        <input type="file" name="Subcat_images" />
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Details:</label><br>
                    <textarea id="freeform" name="Subcat_details" rows="4" cols="100"
                        placeholder="Enter text here..." required></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="subcategory.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
