<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category of Activities</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
    <!-- CSS Link -->

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
                    <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
                <h1>Category</h1>
            </div>
        </div>
        </div>

        <!-- Category -->
        <div class="category_1">
            <h3 class="top_text">CATEGORY</h3>
            <h3 class="bottom_text">ACTIVITY</h3>

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
                                                <!-- Trekking generally means a multi-day hike in the mountains — in this case, on trails throughout Nepal's Himalayan mountains and foothills. Treks typically take you through areas where hiking is the only means of transport since the mountains are too remote to build roads. -->
                                                <?php echo $Cat_details ?>
                                            </p>
                                        </div>
                                        <div class="book_button_category">
                                            <button type="submit"><a href="subcategory.php">View details</a></button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                    <!-- <div class="class_package">
                        <button type="submit">
                            <a href="package.php">View More</a>
                        </button>
                    </div> -->
                </div>

            </div>
        </div>


  

    <!-- Contact Section -->
    <?php
    include('contact.php');
    ?>



    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>