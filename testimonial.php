<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
    include('function.php');
    include('connection.php');

    $sql = "SELECT * FROM `review`";
    $result = mysqli_query($cn, $sql);
    ?>


    <section id="testimonial">
        <div class="title-text">
        <h3 class="top_text">Testimonial</h3>
        <h3 class="bottom_text"> What client says</h3>
        </div>

        
        <div class="testimonial-row">

        <?php
                        if (!empty($result)) {
                            while ($row = mysqli_fetch_array($result)) {
                                $review_id = $row["review_id"];
                                $Name = $row["Name"];
                                $username = $row["username"];
                                $review_image = $row["Images"];
                                $review_details = $row["Details"];
                                ?>
                                
            <div class="testimonial-column">
                <div class="user">
                    <img src="Admin/review/<?php echo $review_image ?>">
                    <div class="user-info">
                        <h4><?php echo $Name ?><i class="fab fa-instagram"></i></h4>
                        <small>@<?php echo $username ?></small>
                    </div>
                </div>
                <p><?php echo $review_details ?></p>

            </div>
            <!-- <div class="testimonial-column">
                <div class="user">
                    <img src="photo/nupur.jpg">
                    <div class="user-info">
                        <h4>Nupur Khadgi<i class="fab fa-instagram"></i></h4>
                        <small>@khadginupur</small>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptatem, neque incidunt commodi facere beatae debitis consequuntur explicabo soluta eveniet vel tempora nisi, deleniti magni aliquid, reprehenderit temporibus esse laudantium.</p>

            </div> -->
            <!-- <div class="testimonial-column">
                <div class="user">
                    <img src="photo/wangbu.jpg">
                    <div class="user-info">
                        <h4>Wangbhu Tamang<i class="fab fa-instagram"></i></h4>
                        <small>@tamangwangbhu</small>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente voluptatem, neque incidunt commodi facere beatae debitis consequuntur explicabo soluta eveniet vel tempora nisi, deleniti magni aliquid, reprehenderit temporibus esse laudantium.</p>

            </div> -->

            <?php
                            }
                        } else {
                            echo "No reviews found.";
                        }
                        ?>
        </div>
    </section>

</body>

</html>