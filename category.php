<!DOCTYPE html>
<html lang="en">

<head>
    <title>Category of Activities</title>

    <!-- CSS Link -->
    <link rel="stylesheet" href="style.css">
    <!-- CSS Link -->

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" >
    <!-- Bootstrap CSS -->
</head>

<body>

    <!-- Function -->
    <?php
    // include('function.php');
    include('connection.php');

    // Error handling for database query
    $sql = "SELECT * FROM `category`  ";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        die("Database query failed: " . mysqli_error($cn));
    }
    ?>
    
    <section>

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
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                $cat_id = $row["cat_id"];
                                $cat_name = $row["Category_Name"];
                                $cat_image = $row["Images"];
                                $cat_details = $row["Details"];
                        ?>

                                <div class="col">
                                    <div class="card_category">
                                        <img src="Admin/category/<?php echo $cat_image ?>" class="card-img-top_category" alt="">
                                        <div class="card-body">
                                            <h5 class="card-title_category"><?php echo $cat_name ?></h5>
                                            <div class="category_1_detail">
                                                <p>
                                                    <?php echo $cat_details ?>
                                                </p>
                                            </div>
                                            <div class="book_button_category">
                                                <!-- <button type="submit"><a href="subcategory.php?cat_id=<?php echo $cat_id ?>">View details</a></button> -->
                                                <button type="submit" onclick="window.location.href='packages.php?cat_id=<?php echo $cat_id ?>'">View details</button>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php
                            }
                        } else {
                            echo "No categories found.";
                        }
                        ?>


                    </div>
                   
                </div>
               
            </div>
           
        </div>
        <?php
        include('contact.php');
       
        ?>

        <?php
        include('footer.php');
       
        ?>

       
       
    
    </section>

     <!-- Contact Section -->
    

    <!-- Bootstrap JS -->
    <script src="js/bootstrap.bundle.min.js"></script>

</body>

</html>
