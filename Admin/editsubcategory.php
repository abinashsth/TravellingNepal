<?php
include "includes/function.php";
include "includes/connection.php";
$sub_id = $_GET["sub_id"];

if (isset($_POST["submit"])) {
    // $name = $_POST['name'];
    $sub_name = $_POST['Sub_name'];
    $sub_images = $_POST['Sub_images'];
    $sub_details = $_POST['Sub_details'];
    $cat_select = $_POST['cat_select'];

    //   $sql = "UPDATE `` SET `username`='$username',`password`='$password', `type`='$type' WHERE id = $id";
    $sql = "UPDATE `subcategory` SET `Subcategory_Name`='$sub_name',`cat_id`='$cat_select',`Images`=' $sub_images',`Details`=' $sub_details' WHERE `sub_id`= $sub_id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: subcategory.php?msg=Data updated successfully");
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

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Subcategory (Update)</title>
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
        $sql = "SELECT * FROM `subcategory` WHERE sub_id = $sub_id LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
        ?>

        <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Subcategory Name:</label>
                        <input type="text" class="form-control" name="Sub_name" value='<?php echo $row['Subcategory_Name'] ?>'>
                    </div>

                    <div class="col">
                        <label class="form-label">Upload Pic:</label><br>
                        <input type="file" name="Sub_images" value='<?php echo $row['Images'] ?>' />
                    </div>

                    <div class="col">
                        <label class="form-label">Select Category:</label><br>
                        <select class="form-select" name="cat_select" aria-label="Default select example" required>
                        <option value="" selected>Select</option>
                        <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                         <?php
                        $conn=makeconnection();  
                        $sql="select * from category";
                        $result=mysqli_query($conn,$sql);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        while($row=mysqli_fetch_array($result))
                        {
                            
                                echo "<option value=$row[0]>$row[1]</option>";
                            
                        }
                            ?>
                        </select>                       
                    </div>

                </div>





                <div class="form-group mb-3">
                    <label class="form-label">Details:</label><br>
                    <textarea id="freeform" name="Sub_details" rows="4" cols="130" value='<?php echo $row['Details'] ?>' placeholder="Enter text here..." required></textarea>

                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="subcategory.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>