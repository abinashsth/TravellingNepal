



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">
    <!-- <script src="https://kit.fontawesome.com/87af938e58.js" crossorigin="anonymous"></script> -->

    <!-- Add Font Awesome CSS link if not included in the main HTML file -->
    <!-- Example: <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"> -->
</head>

<body>


    <section id="testimonial">
        <div class="title-text">
        <h3 class="top_text">Testimonial</h3>
        <h3 class="bottom_text"> What clients say</h3>
        </div>

        <div class="testimonial-row">
                  
<?php
    // Make sure 'connection.php' contains the correct database connection code
    include('connection.php');
    // include('function.php');
    
if (isset($_POST["send"])) {
   

    // $categoryname = $_POST['']

    $target_dir = "Admin/review/";
    $target_file = $target_dir . basename($_FILES["review_images"]["name"]);
    $uploadok = 1;
    $imagefiletype = pathinfo($target_file, PATHINFO_EXTENSION);

    //check if image file is an actual image or fake image
    $check = getimagesize($_FILES["review_images"]["tmp_name"]);
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
    if ($_FILES["review_images"]["size"] > 2000000) {
        echo "Sorry, your file is too large.";
        $uploadok = 0;
    }

    //allow certain file formats
    if ($imagefiletype != "jpg" && $imagefiletype != "png" && $imagefiletype != "jpeg" && $imagefiletype != "gif") {
        echo "Sorry, only JPG, JPEG, PNG, and GIF files are allowed.";
        $uploadok = 0;
    }

    if ($uploadok == 1) {
        if (move_uploaded_file($_FILES["review_images"]["tmp_name"], $target_file)) {
            $sql = "INSERT INTO `review`(`review_id`, `Name`, `username`, `Images`, `Details`) VALUES 
            (Null,'" . $_POST["review_name"] . "','" . $_POST["review_username"] . "','" . basename($_FILES["review_images"]["name"]) . "','" . $_POST["review_details"] . "')";
            mysqli_query($conn, $sql);
            mysqli_close($conn);
            echo "<script>alert('Record Saved.');</script>";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }

}

    // Make sure the 'review' table exists and contains the necessary columns
    $sql1 = "SELECT * FROM `review`";
    $result = mysqli_query($conn, $sql1);

?>
        <?php
            // Check if there are any reviews in the result set
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    // Fetch review details from the current row
                    $Name = $row["Name"];
                    $username = $row["username"];
                    $review_image = $row["Images"];
                    $review_details = $row["Details"];
                    ?>
                                
            <div class="testimonial-column">
                <div class="user">
                    <!-- Make sure the image path is correct -->
                    <img src="Admin/review/<?php echo $review_image ?>" alt="User Image">
                    <div class="user-info">
                        <h4><?php echo $Name ?><i class="fab fa-instagram"></i></h4>
                        <small>@<?php echo $username ?></small>
                    </div>
                </div>
                <p><?php echo $review_details ?></p>
            </div>

            <?php
                }
            } else {
                // If no reviews found in the database
                echo "<div class='testimonial-column'>No reviews found.</div>";
            }
            ?>

            


       
        </div>

           <!-- Button trigger modal -->
       <div class="review_button">
       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Review</button>

       </div>
     
       

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Review</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Name:</label>
                        <input type="text" class="form-control" name="review_name" placeholder="Name">
                    </div>

                    <div class="col">
                        <label class="form-label">Username:</label>
                        <input type="text" class="form-control" name="review_username" placeholder="Username">
                    </div>

                    <div class="col">
                        <label class="form-label">Upload Pic:</label><br>
                        <input type="file" name="review_images" />
                    </div>
                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Details:</label><br>
                    <textarea id="freeform" name="review_details" rows="4" cols="50"
                        placeholder="Enter text here..." required></textarea>
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="send">Submit</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
            </form>
        </div>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
    </section>

</body>

</html>
