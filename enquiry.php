<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enquiry</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
    <!-- CSS Link -->

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Fontawesome -->

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ultra&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">


    <!-- Google Fonts -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
</head>

<body>

    <!-- Function -->
    <?php
    include('function.php');
    include('connection.php');
  
    if (isset($_POST["submit"])) {
        $conn = makeconnection();
    
                $sql = "INSERT INTO `enquiry`(`enquiry_id`, `Package_id`,  `Package_Name`,`Full_Name`, `Contact No.`, `Email_Address`, `Address`, `Message`) VALUES 
                (Null,'" . $_POST["pac_select"] . "','" . $_POST["pac_select"] . "','" . $_POST["Enquiry_name"] . "','" . $_POST["Enquiry_Contact"] . "'
                ,'" . $_POST["Enquiry_email"] . "','" . $_POST["Enquiry_Address"] . "','" . $_POST["Enquiry_message"] . "')";
                mysqli_query($conn, $sql);
                mysqli_close($conn);
                echo "<script>alert('Record Saved.');</script>";
            
        
    }
    ?>

    <div class="home_top">
        <?php include('navbar.php'); ?>

        <div class="text_1">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Category</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Subcategory</a></li>
                    <li class="breadcrumb-item"><a href="index.php">Package</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Enquiry</li>
                </ol>
                <h1>Enquiry</h1>
            </div>
        </div>
    </div>

    <!-- Trip Booking  -->
    <div class="container">

    <div class="category_1">
            <h3 class="top_text">ENQUIRY</h3>
    </div>

        <div class="container d-flex justify-content-center">

            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
                <div class="row mb-3">

                    <!-- Subcategory Option -->
                    <h2 class="booking">Select a Package:</h2><br>
                    <div class="col">

                        <select class="form-select" name="pac_select" aria-label="Default select example" required>
                            <option value="" selected>Select</option>
                            <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                            <?php
                            $conn = makeconnection();
                            $sql = "select * from package";
                            $result = mysqli_query($conn, $sql);
                            $r = mysqli_num_rows($result);
                            //echo $r;

                            while ($row = mysqli_fetch_array($result)) {

                                echo "<option value=$row[0]>$row[3]</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>

                <div class="row mb-4">

                    <h2 class="booking_details">Personal Details:</h2><br>
                    <div class="col">
                        <!-- <label class="form-label">Price:</label> -->
                        <input type="text" class="form-control" name="Enquiry_name" placeholder="Full Name">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Duration:</label> -->
                        <input type="number" class="form-control" name="Enquiry_Contact" placeholder="Contact No.">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="email" class="form-control" name="Enquiry_email" placeholder="Email">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="text" class="form-control" name="Enquiry_Address" placeholder="Address">
                    </div>

                </div>


                

                <div class="form-group mb-3">
                    <!-- <label class="form-label">Comment:</label><br> -->
                    <textarea id="Enquiry_message" name="Enquiry_message" rows="4" cols="127" placeholder="Message"></textarea>


                        <!-- <button type="submit" class="btn btn-primary" name="submit">ADD</button> -->
                </div>


                <div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>

                </div>
            </form>
        </div>
    </div>



    <!-- Contact Section -->

    <?php include('contact.php'); ?>


    <!-- Footer Section -->

    <?php include('footer.php'); ?>






</body>

</html>