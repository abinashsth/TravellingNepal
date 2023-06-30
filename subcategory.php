<!DOCTYPE html>
<html lang="en">

<head>
    <title>Subategory of Activities</title>

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

    $sql = "SELECT * FROM `category`";
    $result = mysqli_query($cn, $sql);
    ?>

    <div class="home_top">
        <?php include('navbar.php'); ?>

        <div class="text_1">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Subcategory</li>
                </ol>
                <h1>Subcategory</h1>
            </div>
        </div>
    </div>

    <!-- Category -->
    <div class="category_1">
        <h3 class="top_text">Subcategory</h3>
        <!-- <h3 class="bottom_text">ACTIVITY</h3> -->
<div class="sidenav_top">


       
<div class="sidenav">
<button class="dropdown-btn">Activity 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Mountain Biking in Nepal</a>
    <a href="#">Tour in Nepal</a>
    <a href="#">Peaking Climbing in Nepal</a>
    <a href="#">Rafting in Nepal</a>
    <a href="#">Hiking in Nepal</a>
    <a href="#">Trekking in Nepal</a>
  </div>

  <button class="dropdown-btn">Region 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="#">Everest Region</a>
    <a href="#">Dolpo Region</a>
    <a href="#">Annapurna Region</a>
    <a href="#">Langtang Region</a>
    <a href="#">Manaslu Region</a>
    <a href="#">Mustang Region</a>
    <a href="#">Kanchanjunga Region</a>
    <a href="#">Far Western Region</a>
  </div>

  
  <button class="dropdown-btn">Range 
  </button>
 
  
</div>

<div class="line">

</div>

<div class="main">
 <div class="main_container">
  <div class="main_image" >
    <img src="photo/14.jpg" alt="" width="400px" height="250px">
  </div>
  </div>
  <div class="sub_container">
  <div class="main_heading">
    <h2>Upper Mustang</h2>
  </div>
  <div class="main_paragraph">
    <p>Upper Mustang Trek is located in the ancient Himalayan Kingdom which lies in the northern central part of Nepal and at the top of the Kaligandaki River. When you enter the restricted area, you enter an ancient land with its own distinct history and tradition.</p>

  </div>
  <a href="">More Details</a>
 </div>
</div>
  
</div>

        <!-- 
            <div class="sub_factor_category">
                <div class="card-heading_category">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $id = $row["id"];
                            $Cat_name = $row["Category_Name"];
                            $Cat_image = $row["Images"];
                            $Cat_details = $row["Details"];
                        ?>
                            <div class="col">
                                <div class="card_category">
                                    <img src="Admin/category/<?php echo $Cat_image ?> " class="card-img-top_category" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title_category"><?php echo $Cat_name ?></h5>
                                        <div class="category_1_detail">
                                            <p>
                                                Trekking generally means a multi-day hike in the mountains — in this case, on trails throughout Nepal's Himalayan mountains and foothills. Treks typically take you through areas where hiking is the only means of transport since the mountains are too remote to build roads.
                                                <?php echo $Cat_details ?>
                                            </p>
                                        </div>
                                        <div class="book_button_category">
                                            <button type="submit"><a href="booking.php">View details</a></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div> -->


        <!-- <div class="class_package">
                        <button type="submit">
                            <a href="package.php">View More</a>
                        </button>
                    </div> -->
    </div>

    </div>
    </div>


    
<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>



    <!-- Contact Section -->
    <?php
    include('contact.php');
    ?>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>