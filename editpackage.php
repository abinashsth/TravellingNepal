<?php
include "includes/connection.php";

$pac_id = $_GET["pac_id"];

if (isset($_POST["submit"])) {
    // $name = $_POST['name'];
    $cat_id = $_POST['cat_select'];
    $sub_id = $_POST['sub_select'];
    $package_name = $_POST['package_name'];
    $package_details = $_POST['package_details'];
    $package_price = $_POST['package_price'];
    $package_duration = $_POST['package_duration'];
    $package_elevation = $_POST['package_elevation'];
    $package_group = $_POST['package_group'];
    $package_time = $_POST['package_time'];
    $package_overview1 = $_POST['package_overview1'];
    $package_image1 = $_POST['package_image1'];
    $package_overview2 = $_POST['package_overview2'];
    $package_image2 = $_POST['package_image2'];
    $package_overview3 = $_POST['package_overview3'];
    $package_itinerary = $_POST['package_itinerary'];
    $package_include = $_POST['package_include'];
    $package_exclude = $_POST['package_exclude'];
    $package_image3 = $_POST['package_image3'];

    //   $sql = "UPDATE `` SET `username`='$username',`password`='$password', `type`='$type' WHERE id = $id";
    $sql = " UPDATE `package` SET `cat_id`='$cat_id',`sub_id`=' $sub_id',`Package_title`=' $package_name',
            `Details`=' $package_details',`Price`='$package_price',`Duration`=' $package_duration',`Max_Evelation`='$package_elevation',`Max_Group`=' $package_group',
            `Best_Time`=' $package_time',`Trip_overview1`='$package_overview1',`Image_1`='$package_image1',`Trip_overview2`=' $package_overview2',
            `Image_2`='$package_image2',`Trip_overview3`='$package_overview3',`Itinerary`='$package_itinerary',`Include`='$package_include',`Exclude`=' $package_exclude',
            `Map_image`='$package_image3' WHERE `pac_id`= $pac_id )";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: package.php?msg=Data updated successfully");
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
    <title>Package(Update)</title>

    <style>
        .ck-editor__editable[role="textbox"] {
            /* editing area */
            min-height: 300px;
        }
    </style>




</head>

<body>



    <body>
        <div class="container">
            <div class="text-center mb-4">
                <h3>Add New Package</h3>
                <p class="text-muted">Complete the form below to add a new packages</p>
            </div>

            <?php
            $sql = "SELECT * FROM `package` WHERE pac_id = $pac_id ";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="container d-flex justify-content-center">

                <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <div class="col">
                            <label class="form-label">Package Name:</label>
                            <input type="text" class="form-control" name="package_name" placeholder="Package Name" value='<?php echo $row['Package_title']?>'>
                        </div>


                        <!-- Category Option -->
                        <div class="col">
                            <label class="form-label">Select Category:</label><br>
                            <select class="form-select" name="cat_select" aria-label="Default select example"  required>
                                <option value='<?php echo $row['cat_id']?>' selected>Select</option>
                                <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                                <?php
                                // $conn = makeconnection();
                                $sql = "select * from category";
                                $result = mysqli_query($conn, $sql);
                                $r = mysqli_num_rows($result);
                                //echo $r;

                                while ($row = mysqli_fetch_array($result)) {

                                    echo "<option value=$row[0]>$row[1]</option>";
                                }
                                ?>
                            </select>
                        </div>
                      </div>

                    <div class="form-group mb-1">
                        <label class="form-label">Details:</label><br>
                        <textarea name="package_details" rows="4" cols="127" value='<?php echo $row['Details']?>' placeholder="Enter text here..." required></textarea>
                    </div>

                    <div class="row mb-5">
                        <div class="col">
                            <label class="form-label">Price:</label>
                            <input type="number" class="form-control" name="package_price" placeholder="Price" value='<?php echo $row['Price']?>'>
                        </div>

                        <div class="col">
                            <label class="form-label">Duration:</label>
                            <input type="text" class="form-control" name="package_duration" placeholder="Duration">
                        </div>

                        <div class="col">
                            <label class="form-label">Max Elevation:</label>
                            <input type="text" class="form-control" name="package_elevation" placeholder="Max Elevation">
                        </div>

                        <div class="col">
                            <label class="form-label">Max Group:</label>
                            <input type="text" class="form-control" name="package_group" placeholder="Max Group">
                        </div>

                        <div class="col">
                            <label class="form-label">Best Time:</label>
                            <input type="text" class="form-control" name="package_time" placeholder="Best Time">
                        </div>

                    </div>

                    <div class="form-group mb-1">
                        <label class="form-label">Trip Overview 1:</label><br>
                        <textarea name="package_overview1" rows="4" cols="127" placeholder="Enter text here..." required></textarea>
                    </div>

                    <div class="form-group mb-1">
                        <label class="form-label">Trip Overview 2:</label><br>
                        <textarea name="package_overview2" rows="4" cols="127" placeholder="Enter text here..." required></textarea>
                    </div>

                    <div class="form-group mb-1">
                        <label class="form-label">Trip Overview 3:</label><br>
                        <textarea name="package_overview3" rows="4" cols="127" placeholder="Enter text here..." required></textarea>
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

        <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script async src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous"></script>




    </body>

</html>

<!-- CKEDITOR -->
<script src="https://cdn.ckeditor.com/ckeditor5/38.1.0/classic/ckeditor.js"></script>

<!-- CKEDITOR -->


<!-- CKEDITOR Script -->
<script>
    ClassicEditor
        .create(document.querySelector('#package_itinerary'))
        .catch(error => {
            console.error(error);
        });


    ClassicEditor
        .create(document.querySelector('#package_include'))
        .catch(error => {
            console.error(error);
        });

    ClassicEditor
        .create(document.querySelector('#package_exclude'))
        .catch(error => {
            console.error(error);
        });
</script>

<!-- CKEDITOR Script -->