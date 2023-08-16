<?php
// session_start();
include 'connection.php';
// include 'function.php';

if (isset($_POST['search'])) {
    $search = $_POST['search'];

    $query = "SELECT * FROM category WHERE Category_Name LIKE '%$search%' ";
    $result = mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
</head>

<body>

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
                        if (isset($result) && mysqli_num_rows($result) > 0) {
                            $count = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
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
                                                <button type="submit" onclick="window.location.href='packages.php?cat_id=<?php echo $cat_id ?>'">View details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                        <?php

                            }

                            if ($count % 4 == 0)
                                echo "</div><div>";
                            $count++;
                        } else {
                            echo "<p>No categories found.</p>";
                        }

                        ?>


                    </div>
                </div>

            </div>


        </div>

        <?php
        include('contact.php');
        include('footer.php');
        ?>

    </section>

</body>

</html>