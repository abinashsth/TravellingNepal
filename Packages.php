<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>annapurna trek</title>

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

        <div class="text_1">
            <div style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="category.php">Category</a></li>
                    <li class="breadcrumb-item"><a href="subcategory.php">Subcategory</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Packages</li>
                </ol>
                <h1>Annapurna Trek</h1>
            </div>
        </div>
    </div>


    <!-- about mustang -->
    <div class="uppar_mustang">
        <div class="about">
            <p>Upper Mustang Trek is located in the ancient Himalayan Kingdom which
                lies in the northern central part
                of Nepal and at the top of the Kaligandaki River.
                When you enter the restricted area, you enter an ancient
                land with its own distinct history and tradition.</p>
        </div>

        <!-- vertical line -->
        <div class="Package_line">

        </div>


        <div class="about_1">
            <h1>USD $500</h1>
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
                <div class="sub_details"> Duration:<div class="sub_details_1"> 15 Days</div>
                </div>
            </div>
            <div class="icon_package"><i class="fa-sharp fa-solid fa-mountain"></i>
                <div class="sub_details"> Max Elevation:<br>
                    <div class="sub_details_1"> 4200 m </div>
                </div>
            </div>
            <div class="icon_package"><i class="fa-solid fa-user-group"></i>
                <div class="sub_details"> Max. Group:<br>
                    <div class="sub_details_1">3 </div>
                </div>
            </div>
            <div class="icon_package"><i class="fa-solid fa-clock"></i>
                <div class="sub_details"> Best Time:<br>
                    <div class="sub_details_1"> April & May </div>
                </div>
            </div>
        </div>
    </div>

    <!-- trip overviews -->
    <div class="trip">
        <h1>Trip Overview</h1>
        <p>Trek through the incredible Annapurna region and be awed by the Nepalese Himalayas. These snow-capped peaks, mist-shrouded valleys,
            isolated communities and remote monasteries will inspire those with a bold spirit and a yearning for a definitive nature experience.
            Reach altitudes of more than 5000 metres, discover the ancestral traditions of the local people and immerse yourself completely in the
            spectacular mountain wilderness of the Annapurna Circuit. This is a challenging trip, but the sense of accomplishment will leave even
            the most seasoned trekker with some unforgettable memories
        </p>

        <div class="image">
            <img src="photo/annapurna (2).jpg">
        </div>



        <p> The Annapurna Circuit is one of the most popular treks in Nepal, and rightly so. On this route, the scenery and culture dramatically change
            from subtropical forests, paddy fields, and the world’s deepest river gorge to ice flows, a high mountain pass, arid cliffs, and mountain views.<br></p>

        <p> Passing through Manang, the trek starts with views the Manaslu range, Tibetan-like Buddhist villages, and woodlands, through the Marshyangdi Valley.
            Heading towards the high Thorong La Pass, a host of mountains come into view, including the Annapurna Massif, Dhaulagiri, Manaslu, and Tilicho Peak.
            The trail continues over the pass to enter Mustang and the Hindu pilgrimage town of Muktinath and on down the Kali Gandaki Valley, past the unique and
            interesting village of Marpha with its small monastery, narrow cobbled streets, and apple orchards, on to the hot springs at Tatopani and the view point of Poon Hill.<br></p>

        <p> From Poon Hill, it is possible to see more than 20 of the highest mountains within the Annapurna and Dhaulagiri ranges
            This trek allows for proper acclimatization before tackling the Thorong La pass at 5,414m. However, it is a long trek, with an average day being 6-7 hours,
            and a good basic physical fitness is recommended.
            With the varied landscapes, villages, and peoples along the trail, and of course, the majestic mountains, it is a photographer’s paradise. It is also a way
            to discover the different aspects, cultures, and landscapes of the country in one trip, and while circling the Annapurna range!<br></p>

        <p>The temple and 108 waterspouts at Muktinath are holy to Hindus and form part of the cultural history of Nepal. Just a short hike down the trail and the villages
            of Jharkot and Kagbeni plunge the visitor back into a Buddhist culture of monasteries and prayer flags.
            Kagbeni is a charming village: from Kagbeni another trail enters Upper Mustang, and there is a constant stream of yak and mule trains taking goods north.
            Exploring the tiny village, there are many interesting sights such as almost prehistoric clay effigies. This trek is certainly varied and full of daily
            surprises and interesting finds and accompanied all the way with up close and personal mountain views!</p>
        <div class="image">
            <img src="photo/3.jpg" height="800px" width="80%">
        </div>
        <p>A few hours walk from Lo Manthang is Gyakar, with its famous Gompa. Ghar Gompa is over 1,200 years old, is dedicated to Guru
            Rinpoche, who traveled these areas then.Gompa is famous for its rock paintings and the fact it is believed that if you make a
            wish here, it will come true. So make a wish at the Ghar Gompa, and hope to return again someday!The trek is at a relatively
            high altitude (3,000m to 3,800m), intensified by the dry air.While it is no problem for those born at this altitude to travel
            at speed, visitors will be more leisurely in their hike to avoid any altitude-related problems. On average, walking takes 5 to 7
            hours a day, and some paths are particularly windy and dusty.But this trek into the restricted area of Upper Mustang, which
            in part follows the ancient salt route, will remain in one’s memory forever.
        </p>
        <h1>Why The Annapurna Circuit Trek?</h1>
        <p>Ascend to the clouds and reach an altitude of 5416 metres as you cross the Thorung
            La Pass along the Annapurna Circuit. Testing your mind and body, this is one hell of an accomplishment.Uncover a different side of the Himalayas,
            trekking past terraced rice fields, oak and rhododendron forests, there’s a diverse array of nature that awaits in the Annapurna region.
            <br>
            Learn about life in Nepalese mountain communities, get to know locals and meet other trekkers while you stay in teahouses in the small communities along the way.
            Discover Nepal's compact capital in Kathmandu. With a limited amount of time spent here to discover its bazaars
            and temples, why not extend your stay beforehand to get a real feel of Nepalese culture.


        </p>

    </div>

    <!-- itineary -->

    <div class="itinerary">
        <div class="heading">
            <h1>Outine Itinerary</h1>
        </div>


        <div class="day_1">
            <h2> Day 1:</h2>
            <p>Kathmandu to Jagat (Jagat- 1,290 m / 4,232 ft – 10 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 2:</h2>
            <p> Jagat to Dharapani (Dharapani – 1,830 m / 6,003 ft – 7 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 3:</h2>
            <p> Dharapani to Chame (Chame – 2,710 m / 8,891 ft – 6 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 4:</h2>
            <p> Chame to Pisang (Pisang – 3,300 m / 10,826 ft – 5 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 5:</h2>
            <p>Pisang to Manang (Manang – 3,540 m / 11,614 ft – 6 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 6:</h2>
            <p> Acclimatization Day (Day Trip to Praken Gompa) Manang – 3,540 m / 11,614 ft – 3 hrs</p><br>
        </div>

        <div class="day_1">
            <h2> Day 7:</h2>
            <p>Manang to Yak Kharka (Yak Kharka – 4,110 m / 13,484 ft – 4 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 8:</h2>
            <p> Yak Kharka to Thorong Phedi (Thorong Phedi – 4,600 m / 15,091 ft – 3 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 9:</h2>
            <p>Thorong Phedi to Muktinath via Thorong La (Muktinath – 3,800 m / 12,467 ft – 9 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 10:</h2>
            <p>Muktinath to Jomsom (Jomsom – 2,643 m / 8,759 ft – 6 hrs)</p><br>
        </div>

        <div class="day_1">
            <h2> Day 11:</h2>
            <p> Jomsom to Pokhara Flight (Pokhara – 822 m / 2,696 ft – 30 min)</p><br>
        </div>

        <div class="day_1">

            <h2> Day 12:</h2>
            <p>Pokhara to Kathmandu (Kathmandu – 1,400 m / 4,593 ft – 9 hrs)</p><br>
        </div>


    </div>


    <div class="include">
        <div class="include_list">
            <h1>What is Included</h1>
            <ul>
                <li>11 nights accommodation in mountain teahouses</li>
                <li>1 nights accommodation in Pokhara Kuti Resort or similar</li>
                <li>Guide for 12 days</li>
                <li>Annapurna conservation area permit</li>
                <li>Trekkers information management system card</li>
                <li>12 x breakfast, 12 x lunch and 11 x dinner while on the trek</li>


            </ul>
        </div>

        <!-- cost excludes -->

        <div class="exclude_list">
            <h1>What is Excluded</h1>
            <ul>
                <li>One Porter for 16 days USD 310</li>
                <li>Kathmandu Private Transport USD 180</li>
                <li>Pokhara Kathmandu Private Transport USD 120</li>
            </ul>
        </div>


    </div>

    <div class="map">
        <div class="map_text">
            <h1>Annapurna Circuit Trek map</h1>
        </div>
        <div class="map_img">
            <img src="photo/annapurna.jpg" height="800px" width="60%">
        </div>
    </div>



    <!-- Contact Section -->

    <?php include('contact.php'); ?>


    <!-- Footer Section -->

    <?php include('footer.php'); ?>





</body>

</html>