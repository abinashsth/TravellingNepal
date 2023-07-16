<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Packages</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Merienda:wght@300;400;500;600;700;800;900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Google Fonts -->
</head>

<body>
    <!-- uppar mustnag trek home page -->
    <?php
    include('function.php');
    include('connection.php');

    $sql = "SELECT * FROM `package`";
    $result = mysqli_query($cn, $sql);
    ?>

    <div class="home_top">
        <?php include('navbar.php'); ?>

        <?php
                        while ($row = mysqli_fetch_array($result)) {
                            $pac_id = $row["pac_id"];
                            $Package_name = $row["Package_title"];
                            $Package_details = $row["Details"];
                            $Package_price = $row["Price"];
                            $Package_duration = $row["Duration"];
                            $Package_evelation = $row["Max_Evelation"];
                            $Package_group = $row["Max_Group"];
                            $Package_time = $row["Best_Time"];
                            $Package_overview1 = $row["Trip_overview1"];
                            $Package_image1 = $row["Image_1"];
                            $Package_overview2 = $row["Trip_overview2"];
                            $Package_image2 = $row["Image_2"];
                            $Package_overview3 = $row["Trip_overview3"];
                            $Package_itinerary = $row["Itinerary"];
                            $Package_include = $row["Include"];
                            $Package_exclude = $row["Exclude"];
                            $Package_image3 = $row["Map_image"];
                        ?>

        <div class="text_1">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                    <li class="breadcrumb-item"><a href="subcategory.php">Subcategory</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Packages</li>
                </ol>
                <h1>
                <?php echo $Package_name ?> 
                    <!-- Upper Mustang -->

                </h1>
            </div>
        </div>
    </div>


    <!-- about mustang -->
    <div class="uppar_mustang">

                    

        <div class="about">
            <p>
                <!-- Upper Mustang Trek is located in the ancient Himalayan Kingdom which
                lies in the northern central part
                of Nepal and at the top of the Kaligandaki River.
                When you enter the restricted area, you enter an ancient
                land with its own distinct history and tradition. -->
                <?php echo $Package_details ?> 
            </p>
        </div>

        <!-- vertical line -->
        <div class="Package_line">

        </div>


        <div class="about_1">
            <h1>USD $<?php echo $Package_price ?> </h1>
            <h2>(Per Person) </h2>
            <div class="button_1">
                <button type="submit"><a href="booking.php">Book Now</a></button>
            </div>
            <div class="button_2">
                <button type="submit"><a href="enquiry.php"> Quick Inquiry</a> </button>
            </div>
        </div>
    </div>
    <!-- icon  -->
    <div class="Package_icon">
        <div class="icon_heading">
            <div class="icon_package"><i class="fa-sharp fa-regular fa-calendar-days"></i>
                <div class="sub_details"> Duration:<div class="sub_details_1"> <?php echo $Package_duration ?> days </div>
                </div>
            </div>
            <div class="icon_package"><i class="fa-sharp fa-solid fa-mountain"></i>
                <div class="sub_details"> Max Elevation:<br>
                    <div class="sub_details_1"> <?php echo $Package_evelation ?> m </div>
                </div>
            </div>
            <div class="icon_package"><i class="fa-solid fa-user-group"></i>
                <div class="sub_details"> Max. Group:<br>
                    <div class="sub_details_1"> <?php echo $Package_group ?>  </div>
                </div>
            </div>
            <div class="icon_package"><i class="fa-solid fa-clock"></i>
                <div class="sub_details"> Best Time:<br>
                    <div class="sub_details_1"> <?php echo $Package_time ?>  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- trip overviews -->
    <div class="trip">
        <h1>Trip Overview</h1>
        <p>
        <?php echo $Package_overview1 ?> 
            <!-- Trek through the incredible Annapurna region and be awed by the Nepalese Himalayas. These snow-capped peaks, mist-shrouded valleys,
            isolated communities and remote monasteries will inspire those with a bold spirit and a yearning for a definitive nature experience.
            Reach altitudes of more than 5000 metres, discover the ancestral traditions of the local people and immerse yourself completely in the
            spectacular mountain wilderness of the Annapurna Circuit. This is a challenging trip, but the sense of accomplishment will leave even
            the most seasoned trekker with some unforgettable memories -->
        </p>

        <div class="image">
            <img src="Admin/Packages/<?php echo $Package_image1 ?> ">
        </div>



            <p>
        <?php echo $Package_overview2 ?> 

            <!-- The temple and 108 waterspouts at Muktinath are holy to Hindus and form part of the cultural history of Nepal. Just a short hike down the trail and the villages
            of Jharkot and Kagbeni plunge the visitor back into a Buddhist culture of monasteries and prayer flags.
            Kagbeni is a charming village: from Kagbeni another trail enters Upper Mustang, and there is a constant stream of yak and mule trains taking goods north.
            Exploring the tiny village, there are many interesting sights such as almost prehistoric clay effigies. This trek is certainly varied and full of daily
            surprises and interesting finds and accompanied all the way with up close and personal mountain views! -->
        </p>
        <div class="image">
            <img src="Admin/Packages/<?php echo $Package_image2 ?> " height="800px" width="80%">
        </div>
        <p>
        <?php echo $Package_overview3 ?> 
            <!-- A few hours walk from Lo Manthang is Gyakar, with its famous Gompa. Ghar Gompa is over 1,200 years old, is dedicated to Guru
            Rinpoche, who traveled these areas then.Gompa is famous for its rock paintings and the fact it is believed that if you make a
            wish here, it will come true. So make a wish at the Ghar Gompa, and hope to return again someday!The trek is at a relatively
            high altitude (3,000m to 3,800m), intensified by the dry air.While it is no problem for those born at this altitude to travel
            at speed, visitors will be more leisurely in their hike to avoid any altitude-related problems. On average, walking takes 5 to 7
            hours a day, and some paths are particularly windy and dusty.But this trek into the restricted area of Upper Mustang, which
            in part follows the ancient salt route, will remain in one’s memory forever. -->
        </p>
        
      
    </div>

    <!-- itineary -->

    <div class="itinerary">
        <div class="heading">
            <h1>Outine Itinerary</h1>
        </div>
            
       <div class="paragraph1">
       <p>  <?php echo $Package_itinerary ?>   </p> <hr/>
       </div>
       
    </div>


    <div class="include">
        <div class="include_list">
            <h1>What is Included</h1>

            <div class="include_1">
              <p>   <i class="fa-solid fa-check" >    <?php echo $Package_include ?>  </i>  </p> <hr/>
            </div>
           
                 
                    <!-- 11 nights accommodation in mountain teahouses -->
               
                <!-- <li>1 nights accommodation in Pokhara Kuti Resort or similar</li>
                <li>Guide for 12 days</li>
                <li>Annapurna conservation area permit</li>
                <li>Trekkers information management system card</li>
                <li>12 x breakfast, 12 x lunch and 11 x dinner while on the trek</li> -->

        </div>

        <!-- cost excludes -->

        <div class="include_list">
            <h1>What is Excluded</h1>
             <div class="include_1">
             <p>  <i class="fa-solid fa-xmark">   <?php echo $Package_exclude ?></i>   </p> <hr/>
            </div>
                
                
                    <!-- One Porter for 16 days USD 310 -->
                
                <!-- <li>Kathmandu Private Transport USD 180</li>
                <li>Pokhara Kathmandu Private Transport USD 120</li> -->

        </div>


    </div>

    <div class="map">
        <div class="map_text">
            <h1>  <?php echo $Package_name ?>  map</h1>
        </div>
        <div class="map_img">
            <img src="Admin/Packages/<?php echo $Package_image3 ?>" >
        </div>
    </div>

    <?php
      }
    ?>


    <!-- Contact Section -->

    <?php include('contact.php'); ?>


    <!-- Footer Section -->

    <?php include('footer.php'); ?>





</body>

</html>