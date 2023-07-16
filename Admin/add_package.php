<?php
// Check if session is not started, then start it
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

include "includes/connection.php";
include "includes/function.php";

if (!isset($_SESSION['loginstatus']) || $_SESSION['loginstatus'] == "") {
    header("location:loginform.php");
    exit; // Add an exit statement to stop the script execution
}




//Package Image

if (isset($_POST["submit"])) {
    $conn = makeconnection();

    // Image 1
    if (isset($_FILES["package_image1"])) {
        $target_dir = "Packages/";
        $target_file = $target_dir . basename($_FILES["package_image1"]["name"]);
        $uploadok1 = 1;
        $imagefiletype1 = pathinfo($target_file, PATHINFO_EXTENSION);

        // Check if image file is an actual image or fake image
        $check = getimagesize($_FILES["package_image1"]["tmp_name"]);
        if ($check !== false) {
            echo "File 1 is an image - " . $check["mime"] . ".";
            $uploadok1 = 1;
        } else {
            echo "File 1 is not an image.";
            $uploadok1 = 0;
        }

        // Check if file 1 already exists
        if (file_exists($target_file)) {
            echo "Sorry, file 1 already exists.";
            $uploadok1 = 0;
        }

        // Check file 1 size
        if ($_FILES["package_image1"]["size"] > 500000) {
            echo "Sorry, your file 1 is too large.";
            $uploadok1 = 0;
        }

        // Allow certain file formats
        if ($imagefiletype1 != "jpg" && $imagefiletype1 != "png" && $imagefiletype1 != "jpeg" && $imagefiletype1 != "gif") {
            echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed for file 1.";
            $uploadok1 = 0;
        }

        if ($uploadok1 == 1) {
            if (move_uploaded_file($_FILES["package_image1"]["tmp_name"], $target_file)) {
                // File 1 uploaded successfully
            } else {
                echo "Sorry, there was an error uploading file 1.";
            }
        }
    }

    // Image 2
    if (isset($_FILES["package_image2"])) {
        $target_dir = "Packages/";
        $target_file = $target_dir . basename($_FILES["package_image2"]["name"]);
        $uploadok2 = 1;
        $imagefiletype2 = pathinfo($target_file, PATHINFO_EXTENSION);

        // ... (Image 2 checks and handling)

        if ($uploadok2 == 1) {
            if (move_uploaded_file($_FILES["package_image2"]["tmp_name"], $target_file)) {
                // File 2 uploaded successfully
            } else {
                echo "Sorry, there was an error uploading file 2.";
            }
        }
    }

    // Image 3 (Map Image)
    if (isset($_FILES["package_image3"])) {
        $target_dir = "Packages/";
        $target_file = $target_dir . basename($_FILES["package_image3"]["name"]);
        $uploadok3 = 1;
        $imagefiletype3 = pathinfo($target_file, PATHINFO_EXTENSION);

        // ... (Image 3 checks and handling)

        if ($uploadok3 == 1) {
            if (move_uploaded_file($_FILES["package_image3"]["tmp_name"], $target_file)) {
                // File 3 uploaded successfully
            } else {
                echo "Sorry, there was an error uploading file 3.";
            }
        }
    }

    if ($uploadok1 == 1 && $uploadok2 == 1 && $uploadok3 == 1) {

        // $sql = "INSERT INTO `package`(`pac_id`,`cat_id`,`sub_id` `Package_title`, `Details`, `Price`, `Duration`, `Max_Evelation`, `Max_Group`, `Best_Time`, `Trip_overview1`, `Image_1`, `Trip_overview2`, `Image_2`, `Trip_overview3`, `Itinerary`, `Include`, `Exclude`, `Map_image`) VALUES 
        //     (NULL, '" . $_POST["cat_select"] . "','" . $_POST["sub_select"] . "','" . $_POST["package_name"] . "', '" . $_POST["package_details"] . "', '" . $_POST["package_price"] . "', '" . $_POST["package_duration"] . "', '" . $_POST["package_elevation"] . "',
        //     '" . $_POST["package_group"] . "', '" . $_POST["package_time"] . "', '" . $_POST["package_overview1"] . "', '" . basename($_FILES["package_image1"]["name"]) . "','" . $_POST["package_overview2"] . "', '" . basename($_FILES["package_image2"]["name"]) . "',
        //     '" . $_POST["package_overview3"] . "','" . $_POST["package_itinerary"] . "', '" . $_POST["package_include"] . "', '" . $_POST["package_exclude"] . "', '" . basename($_FILES["package_image3"]["name"]) . "')";

        $sql = " INSERT INTO `package`(`pac_id`, `cat_id`, `sub_id`, `Package_title`, `Details`, `Price`, `Duration`, `Max_Evelation`, `Max_Group`, `Best_Time`, `Trip_overview1`, `Image_1`, `Trip_overview2`, `Image_2`, `Trip_overview3`, `Itinerary`, `Include`, `Exclude`, `Map_image`) VALUES 
        (Null,'" . $_POST["cat_select"] . "' , '" . $_POST["sub_select"] . "','" . $_POST["package_name"] . "','" . $_POST["package_details"] . "','" . $_POST["package_price"] . "',
        '" . $_POST["package_duration"] . "','" . $_POST["package_elevation"] . "',  '" . $_POST["package_group"] . "','" . $_POST["package_time"] . "', '" . $_POST["package_overview1"] . "','" . basename($_FILES["package_image1"]["name"]) . "','" . $_POST["package_overview2"] . "',
        '" . basename($_FILES["package_image2"]["name"]) . "', '" . $_POST["package_overview3"] . "' ,'" . $_POST["package_itinerary"] . "','" . $_POST["package_include"] . "', '" . $_POST["package_exclude"] . "','" . basename($_FILES["package_image3"]["name"]) . "')";
        
        mysqli_query($conn, $sql);
        mysqli_close($conn);
        echo "<script>alert('Record Saved.');</script>";
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

    <title>Package</title>

    <style>
         .ck-editor__editable[role="textbox"] {
                /* editing area */
                min-height: 300px;
            }
    </style>




</head>

<body>
     <div class="container">
        <div class="text-center mb-4">
            <h3>Add New Package</h3>
            <p class="text-muted">Complete the form below to add a new packages</p>
        </div>

        <div class="container d-flex justify-content-center">

            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Package Name:</label>
                        <input type="text" class="form-control" name="package_name" placeholder="Package Name">
                    </div>


                    <!-- Category Option -->
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

                        <!-- Subcategory Option -->
                    <div class="col">
                        <label class="form-label">Select Subcategory:</label><br>
                        <select class="form-select" name="sub_select" aria-label="Default select example" required>
                        <option value="" selected>Select</option>
                        <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                         <?php
                        $conn=makeconnection();  
                        $sql="select * from subcategory";
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

                <div class="form-group mb-1">
                    <label class="form-label">Details:</label><br>
                    <textarea  name="package_details" rows="4" cols="127"
                        placeholder="Enter text here..." required></textarea> 
                </div>

                <div class="row mb-5">
                    <div class="col">
                        <label class="form-label">Price:</label>
                        <input type="number" class="form-control" name="package_price" placeholder="Price">
                    </div>

                    <div class="col">
                        <label class="form-label">Duration:</label>
                        <input type="number" class="form-control" name="package_duration" placeholder="Duration">
                    </div>

                    <div class="col">
                        <label class="form-label">Max Elevation:</label>
                        <input type="number" class="form-control" name="package_elevation" placeholder="Max Elevation">
                    </div>

                    <div class="col">
                        <label class="form-label">Max Group:</label>
                        <input type="number" class="form-control" name="package_group" placeholder="Max Group">
                    </div>

                    <div class="col">
                        <label class="form-label">Best Time:</label>
                        <input type="text" class="form-control" name="package_time" placeholder="Best Time">
                    </div>
                   
                </div>

                <div class="form-group mb-1">
                    <label class="form-label">Trip Overview 1:</label><br>
                    <textarea  name="package_overview1" rows="4" cols="127"
                        placeholder="Enter text here..." required></textarea>
                </div>

                <div class="form-group mb-1">
                    <label class="form-label">Trip Overview 2:</label><br>
                    <textarea  name="package_overview2" rows="4" cols="127"
                        placeholder="Enter text here..." required></textarea>
                </div>

                <div class="form-group mb-1">
                    <label class="form-label">Trip Overview 3:</label><br>
                    <textarea  name="package_overview3" rows="4" cols="127"
                        placeholder="Enter text here..." required></textarea>
                </div>

                <div class="row mb-2">
                <div class="col">
                        <label class="form-label">Image 1:</label><br>
                        <input type="file" name="package_image1" />
                    </div>

                    <div class="col">
                        <label class="form-label">Image 2:</label><br>
                        <input type="file" name="package_image2" />
                    </div>

                    <div class="col">
                        <label class="form-label">Map:</label><br>
                        <input type="file" name="package_image3" />
                    </div>

                </div>

                
                <div class="form-group mb-3">
                    <label class="form-label">Itinerary:</label><br>
                    <!-- <div class="col">
                        <label class="form-label">Day:</label>
                        <input type="number" class="form-control" name="package_day" placeholder="Day">
                    </div> -->

                    <textarea id="package_itinerary" name="package_itinerary" rows="4" cols="127" placeholder="Enter text here..." required>

                    </textarea>


                        <!-- <button type="submit" class="btn btn-primary" name="submit">ADD</button> -->
                </div>


               
                <div class="form-group mb-3">
                    <label class="form-label">Include:</label><br>
                    <!-- <div class="col">
                        <label class="form-label">Day:</label>
                        <input type="number" class="form-control" name="package_day" placeholder="Day">
                    </div> -->

                    <textarea id="package_include" name="package_include" rows="4" cols="127" placeholder="Enter text here..." required>

                    </textarea>


                        <!-- <button type="submit" class="btn btn-primary" name="submit">ADD</button> -->
                </div>


                        
                <div class="form-group mb-3">
                    <label class="form-label">Exclude:</label><br>
                    <textarea id="package_exclude" name="package_exclude" rows="4" cols="127" placeholder="Enter text here..." required>

                    </textarea>


                        <!-- <button type="submit" class="btn btn-primary" name="submit">ADD</button> -->
                </div>



                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="package.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- Bootstrap -->

   
   
    </body>

</html>

 <!-- CKEDITOR -->
 <script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

<!-- CKEDITOR -->


<!-- CKEDITOR Script -->
<script>
ClassicEditor
    .create( document.querySelector( '#package_itinerary') )
    .catch( error => {
        console.error( error );
    } );


    ClassicEditor
    .create( document.querySelector( '#package_include') )
    .catch( error => {
        console.error( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#package_exclude') )
    .catch( error => {
        console.error( error );
    } );
</script>

<!-- CKEDITOR Script -->
