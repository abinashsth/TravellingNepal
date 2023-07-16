<!DOCTYPE html>
<html lang="en">

<head>
    <title>Booking</title>

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

    // $sql = "SELECT * FROM `subcategory`";
    // $result = mysqli_query($conn, $sql);

    
if (isset($_POST["submit"])) {
    $conn = makeconnection();

            $sql = "INSERT INTO `booking`(`booking_id`,`Package_Name`, `First Name`, `Middle Name`, `Last Name`, `Email Address`, `Gender`, `Date of Birth`, `Nationality`, `Profession`, `Arrival Date`, `Departure Date`, `Passport No`,
             `Issued Date`, `Expiry Date`, `Full Name`, `Location`, `Contact`, `Relationship`, `Comment`) VALUES 
            (NULL,'" . $_POST["booking_first"] . "','" . $_POST["pac_select"] . "','" . $_POST["booking_middle"] . "','" . $_POST["booking_last"] . "','" . $_POST["booking_email"] . "','" . $_POST["inlineRadioOptions"] . "','" . $_POST["booking_dob"] . "','" . $_POST["booking_nationality"] . "',
            '" . $_POST["booking_profession"] . "','" . $_POST["booking_arrival"] . "','" . $_POST["booking_departure"] . "','" . $_POST["booking_passport"] . "','" . $_POST["booking_issued"] . "','" . $_POST["booking_expiry"] . "','" . $_POST["emergency_full_name"] . "',
            '" . $_POST["emergency_location"] . "','" . $_POST["emergency_contact"] . "','" . $_POST["emergency_relation"] . "','" . $_POST["emergency_comment"] . "')";
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
                    <li class="breadcrumb-item active" aria-current="page">Booking</li>
                </ol>
                <h1>Trip Booking</h1>
            </div>
        </div>
    </div>

    <!-- Trip Booking  -->
    <div class="container_booking">
    <div class="category_1">
            <h3 class="top_text">BOOKING</h3>
    </div>
        <div class="container d-flex justify-content-center">

            <form action="" method="post" style="width:50vw; min-width:300px;" enctype="multipart/form-data">
            <div class="col">
            <h2 class="booking_details">Select a Packages:</h2><br>
                        <select class="form-select" name="pac_select" aria-label="Default select example" required>
                        <option value="" selected>Select</option>
                        <!-- <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option> -->
                         <?php
                        $conn=makeconnection();  
                        $sql="select * from package";
                        $result=mysqli_query($conn,$sql);
                        $r=mysqli_num_rows($result);
                        //echo $r;

                        while($row=mysqli_fetch_array($result))
                        {
                            
                                echo "<option value=$row[0]>$row[3]</option>";
                            
                        }
                            ?>
                        </select>                       
                    </div>

                <div class="row mb-4">

                    <h2 class="booking_details">Personal Details:</h2><br>
                    <div class="col">
                        <!-- <label class="form-label">Price:</label> -->
                        <input type="text" class="form-control" name="booking_first" placeholder="First Name">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Duration:</label> -->
                        <input type="text" class="form-control" name="booking_middle" placeholder="Middle Name">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="text" class="form-control" name="booking_last" placeholder="Last Name">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="email" class="form-control" name="booking_email" placeholder="Email Address">
                    </div>

                </div>


                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Gender:</label> <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="Male">
                            <label class="form-check-label" for="inlineRadio1">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="Female">
                            <label class="form-check-label" for="inlineRadio2">Female</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="Others">
                            <label class="form-check-label" for="inlineRadio3">Others</label>
                        </div>

                    </div>

                    <div class="col">
                        <label class="form-label">Date of Birth:</label>
                        <input type="date" class="form-control" name="booking_dob" placeholder="Date Of Birth">
                    </div>

                    <div class="col">
                        <label class="form-label">Nationality:</label>
                        <input type="text" class="form-control" name="booking_nationality" placeholder="Nationality">
                    </div>

                </div>


                <div class="row mb-2">
                    <div class="col">
                        <label class="form-label">Profession:</label><br>
                        <input type="text" name="booking_profession" placeholder="Profession" />
                    </div>

                    <div class="col">
                        <label class="form-label">Arrival Date:*</label><br>
                        <input type="date" name="booking_arrival" placeholder="Arrival Date:" />
                    </div>

                    <div class="col">
                        <label class="form-label">Departute Date:*</label><br>
                        <input type="date" name="booking_departure" placeholder="Departure Date:" />
                    </div>

                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Passport No.*</label><br>
                        <input type="text" name="booking_passport" placeholder="Passport No" required />
                    </div>

                    <div class="col">
                        <label class="form-label">Issued Date:*</label><br>
                        <input type="date" name="booking_issued" placeholder="Issued Date:" required />
                    </div>

                    <div class="col">
                        <label class="form-label">Expiry Date:*</label><br>
                        <input type="date" name="booking_expiry" placeholder="Expiry Date:" required />
                    </div>

                </div>


                <div class="row mb-4">

                    <h2 class="booking_details">In Case of Emergency:</h2><br>
                    <div class="col">
                        <!-- <label class="form-label">Price:</label> -->
                        <input type="text" class="form-control" name="emergency_full_name" placeholder="Full Name*">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Duration:</label> -->
                        <input type="text" class="form-control" name="emergency_location" placeholder="Location*">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="number" class="form-control" name="emergency_contact" placeholder="Contact No.*">
                    </div>

                    <div class="col">
                        <!-- <label class="form-label">Max Elevation:</label> -->
                        <input type="text" class="form-control" name="emergency_relation" placeholder="RelationShip">
                    </div>

                </div>

                <div class="form-group mb-3">
                    <label class="form-label">Comment:</label><br>
                    <textarea id="emergency_comment" name="emergency_comment" rows="4" cols="127" placeholder="Enter text here..." required>

                    </textarea>


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