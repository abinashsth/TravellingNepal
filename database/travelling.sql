-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2023 at 04:54 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelling`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `type`) VALUES
(2, 'abinas', 'abinas', 'general'),
(3, 'admin', 'admin', 'admin'),
(4, 'rakesh', 'rakesh', 'general');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(200) NOT NULL,
  `Package_Name` varchar(200) NOT NULL,
  `First Name` varchar(200) NOT NULL,
  `Middle Name` varchar(200) NOT NULL,
  `Last Name` varchar(200) NOT NULL,
  `Email Address` varchar(200) NOT NULL,
  `Gender` varchar(200) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Nationality` varchar(200) NOT NULL,
  `Profession` text NOT NULL,
  `Arrival Date` date NOT NULL,
  `Departure Date` date NOT NULL,
  `Passport No` varchar(200) NOT NULL,
  `Issued Date` date NOT NULL,
  `Expiry Date` date NOT NULL,
  `Full Name` varchar(200) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Contact` varchar(200) NOT NULL,
  `Relationship` text NOT NULL,
  `Comment` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `Package_Name`, `First Name`, `Middle Name`, `Last Name`, `Email Address`, `Gender`, `Date of Birth`, `Nationality`, `Profession`, `Arrival Date`, `Departure Date`, `Passport No`, `Issued Date`, `Expiry Date`, `Full Name`, `Location`, `Contact`, `Relationship`, `Comment`) VALUES
(8, '12', 'Abinash', '', 'Shrestha', 'abinash@gmail.com', 'Male', '2023-08-03', 'Nepali', 'student', '2023-09-08', '2023-09-09', '.065566546465', '2023-08-24', '2023-09-06', 'Asha Shrestha', 'Bouddha', '9818015296', 'Mother', 'hfghfghfghf');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `Category_Name` varchar(200) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Details` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `Category_Name`, `Images`, `Details`) VALUES
(28, 'Upper Mustang Trek', '14.jpg', 'The Upper Mustang Trek package is an 18-day holiday trip that is all about exploring hidden civilizations in the Upper Mustang Region of Nepal. '),
(29, 'Shey-Phoksundo Lake', '10.jpg', 'Shey Phoksundo Lake Trek is a short and relatively easy trip to one of Nepal’s largest and most spectacular lakes. '),
(30, 'Mardi Himal Trek ', '8.jpg', 'The Mardi Himal trek is a challenging and beautiful 4-day route in the Annapurna region that offers breathtaking views of the Himalayan mountain range.'),
(32, 'Everest Base Camp', 'kalapatthar.jpg', 'In an ideal world, most of us would love to stand on the top of the world, 8,848m high on Mt Everest.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(200) NOT NULL,
  `Package_id` varchar(200) NOT NULL,
  `Package_Name` varchar(200) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `Contact` int(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `Message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `Package_id`, `Package_Name`, `Full_Name`, `Contact`, `Email`, `address`, `Message`) VALUES
(11, '13', '13', 'Abinash Shrestha', 2147483647, 'rajusinkhwal@gmail.com', 'Bouddha', 'dgdfgfdgdfgfdgdfg'),
(12, '12', '12', 'Abinash Shrestha', 2147483647, 'rajusinkhwal@gmail.com', 'Bouddha', 'Abinash Shrestha');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pac_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `Package_title` varchar(200) NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `Price` varchar(2000) NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Max_Evelation` varchar(200) NOT NULL,
  `Max_Group` varchar(100) NOT NULL,
  `Best_Time` varchar(100) NOT NULL,
  `Trip_overview1` varchar(5000) NOT NULL,
  `Image_1` varchar(100) NOT NULL,
  `Trip_overview2` varchar(2000) NOT NULL,
  `Image_2` varchar(100) NOT NULL,
  `Trip_overview3` varchar(2000) NOT NULL,
  `Itinerary` varchar(1000) NOT NULL,
  `Include` varchar(1000) NOT NULL,
  `Exclude` varchar(1000) NOT NULL,
  `Map_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pac_id`, `cat_id`, `Package_title`, `Details`, `Price`, `Duration`, `Max_Evelation`, `Max_Group`, `Best_Time`, `Trip_overview1`, `Image_1`, `Trip_overview2`, `Image_2`, `Trip_overview3`, `Itinerary`, `Include`, `Exclude`, `Map_image`) VALUES
(12, 28, 'Upper Mustang Trek', 'The Upper Mustang trek in to the remote Trans-Himalayan Region of this semi-independent Tibetan Kingdom offers an adventurous 14 day itinerary with spectacular trekking through striking semi-arid desert with colourful rock formations, deep ravines and snow-capped peaks surrounding you.', '1615', '14', '4010', '5', 'April to May', 'The Upper Mustang trek winds its way to the hidden Buddhist world of the Kingdom of Mustang, also known as Lo. This remote trans-Himalayan mountain area borders Tibet and has a distinct Tibetan feel, both in its people and culture and in its arid landscape of high cliffs and rocks of unusual formations and colour.', '14.jpg', 'he trek visits Kagbeni, the gateway to Upper Mustang, then through a stark landscape in the rain shadow of the Dhaulagiri massif to Lo-Manthang, the seat of past Kings of the Kingdom of Lo.', 'Mustang 1.jpg', 'Explore caves, rock paintings, monasteries, and gompa and learn something about the culture of this area. Panoramic views of Nilgiri, Annapurna, Dhaulagiri, and others, are very much part of this exciting trip!', '<p><strong>Day 1:</strong> Kathmandu to Pokhara (Drive)</p><p>Pokhara – 830 m / 2723 ft – 7 hrs</p><p><strong>Day 2:</strong> Pokhara to Jomsom (Flight) to Kagbeni</p><p>Kagbeni – 930 m / 9186 ft – 3 hrs</p><p><strong>Day 3:</strong> Kagbeni to Chele</p><p>Chele – 3050 m / 10006 ft – 6 hrs</p><p><strong>Day 4:</strong> Chele to Syangmoche</p><p>Syangmoche – 3475 m / 11400 ft – 6 hrs</p><p><strong>Day 5:</strong> Syangmoche Ghami</p><p>Ghami – 3500 m / 11482 ft – 5 hrs</p><p><strong>Day 6:</strong> Ghami to Charang</p><p>Charang – 3560 m / 11679 ft – 4 hrs</p><p><strong>Day 7:</strong> Charang to Lo Manthang</p><p>Lo Manthang – 3770 m / 12368 ft – 5 hrs</p><p><strong>Day 8:</strong> Day Trip to Chhoser Cave</p><p>Lo Manthang – 3770 m / 12368 ft – 6 hrs</p><p><strong>Day 9:</strong> Lo Manthang to Dhakmar</p><p>Dhakmar – 3800 m / 12467 ft – 7 hrs</p><p><strong>Day 10:</strong> Dhakmar to Ghiling</p><p>Ghiling – 3860 m / 12664 ft – 6 hrs</p><p><strong>Day 11:</strong> Ghiling to Chuksang<', '<ul><li>1 nights accommodation in mountain teahouses</li><li>2 nights accommodation in Pokhara (Kuti Resort or similar)</li><li>Guide for 14 days</li><li>Kathmandu Pokhara Kathmandu tourist bus</li><li>Pokhara Jomsom Pokhara flight</li><li>Annapurna conservation area permit</li></ul>', '<ul><li>One Porter for 14 days USD 256</li><li>Lunch and dinner in Pokhara</li></ul>', 'upper-mustang-trek.jpg'),
(13, 29, 'Shey-Phoksundo Lake', 'Among many beautiful places in Nepal, Phoksundo Lake is considered one of the most beautiful and exotic tourist destinations located in Dolpo, the largest territorial district.', '1150', '11', '3640', '16', 'August-Septemper', 'Phoksundo Lake Trek is a short and easy journey to one of the most beautiful and deepest lakes of Nepal. Phoksundo is an alpine freshwater lake which is also considered sacred by the followers of Buddhist and Bon-po religions, making the trek an amazing mix of nature and culture.  ', 'phoksundo-lake-12.jpeg', 'The 11-day trip starts with your arrival in Tribhuvan International Airport, Kathmandu. The trip to Phoksundo Lake continues next day with a flight to Nepalgunj which lies in the lowland of western Terai, just 8 km away from Indian Border.', '9.jpg', 'The route also passes through several picturesque traditional villages like Dunai, Chhepka, Jharana Hotel, and Shyanta. The trekkers also come across the view of a magnificent 330m high waterfall. ', '<p><strong>Day 1: Arrival in Kathmandu</strong></p><p><strong>Day 2: Permit Procedure and afternoon fly from Kathmandu to Nepalgunj an hour flight</strong></p><p><strong>Day 3: Fly from Nepalgunj to Juphal 2475m/ 30 minutes and trek from Juphal to Dunai 2140m/3 hours walking</strong></p><p><strong>Day 4: Trek from Dunai to Chhepka 2720m/5-6&nbsp;hours walking</strong></p><p><strong>Day 5: Trek from Chhepka to&nbsp;Jharana Hotel 3040m/4-5&nbsp;hours walking</strong></p><p><strong>Day 6: Trek from Jharana Hotel to Phoksundo Lake (Ringmo Gaon) 3640m/2-3&nbsp;hours walking</strong></p><p><strong>Day 7: Exploring Shey Phoksundo Lake&nbsp;</strong></p><p><strong>Day 8: Trek from Phoksundo Lake to Chhepka 2720m/5-6&nbsp;hours walking</strong></p><p><strong>Day 9: Trek from Chhepka to&nbsp;Juphal 2475m/5-6 hours walking</strong></p><p><strong>Day 10: Fly from Juphal to Nepalgunj 30 minutes flight and then afternoon fly back to&nbsp;Kathmandu an hour flight</strong></p><p><strong>Day 11: Final ', '<p>Airport / Hotel / Airport pick up &amp; transfer by car / Van / Bus.<br>* 2&nbsp;nights single/double deluxe accommodation with breakfast at 4* Hotel Kathmandu Guest House or Dalai-La Boutique Hotel&nbsp;in Kathmandu.<br>* 1&nbsp;night single/double deluxe accommodation with breakfast at 3* Hotel in Nepalgunj.<br>* Basic Food (breakfast, lunch and dinner) with Tea &amp; coffee, hot/cold filter water during the trek.<br>* Accommodation in basic home-stay or simple lodge during the trek<br>* 1 experienced, helpful and friendly Guide &amp; porters (1 porter per 2 people), their food, accommodation, salary, equipment&nbsp;and their insurance.</p>', '<p>Any meals (Lunch and Dinner) in Kathmandu and Nepalgunj other than breakfast.<br>* Travel insurance.<br>* International air fare to and from Nepal.<br>* Nepal Tourist Visa fees.<br>* Items and expenses of personal nature.</p>', 'Shey-Phoksundo-Lake-Trek-Map-vonKathmandu.png'),
(14, 30, 'Mardi Himal Trek', 'The trek to base of Mount Mardi traverses via the astounding landscape of the Annapurna Conservation Area Project. The trek encapsulates cultural diversity, diverse biodiversity, astounding mountain vistas and amazing terrain all in one. The journey to the Mardi Himal Base Camp is filled with natural enriches that awe-strucks its seekers from the beginning itself.', '800', '5', '4500', '5', 'Sept-Nov and March - May', 'Mardi Himal Trek is one of a kind trek that is newly open. This area nestled deep in the vicinity of wilderness in the west is filled with amusement. Trek to Mardi Himal Base Camp begins from 2100 meters at Pritam Deurali and reaches the towering height of 4500 meters at Mardi Himal Base Camp.', '8.jpg', 'Mardi Himal Trek Route begins from the bustling city of Pokhara in the west. From hereafter, we take a short ride to the north-western village of Kande located on Baglung-Pokhara highway', 'machhapuchhre-view-from-mardi-himal-trek.jpg', 'Our trek takes us through small hamlets located in Forest camp which is located in an isolated area surrounded by lush greenery. Depending on your Mardi Himal Trek Itinerary, your stopover will be selected as forest camp or rest camp located at a duration of 2 hours from here. Then onward, we travel across these dense forests and elevate for a while to reach Low Camp.', '<h2>Day 1</h2><h4>Pokhara - Australian Camp - Deurali</h4><p>2100m, Deurali 1 hour drive, 4-5 hours walk L,D Lodge</p><h2>Day 2</h2><h4>Pitan Deurali -Forest Camp - Rest Camp - Low Camp</h4><p>2985m, Low Camp 7 hours walk B,L,D Lodge</p><h2>Day 3</h2><h4>Low Camp - High Camp.</h4><p>3550m, High Camp 4 hours trekking B,L,D Lodge</p><h2>Day 4</h2><h4>Hike to Mardi Himal Base Camp and trek down to Badal Danda</h4><p>4500m, Mardi Himal Base Camp 6-7 hours walk B,L,D Lodge</p><h2>Day 5</h2><h4>Badal Danda - Siding- Pokhara</h4><p>830m, Pokhara 5 hours walk, 2 hours drive B,L</p>', '<ul><li>Pokhara-Kande by private car and Siding or Lwang -Pokhara by public Jeep.</li><li>All the Meals (4 Breakfast, 5 Lunch, and 4 Dinner ) and accommodation during the trek.</li><li>Trekking permit.</li><li>One English speaking Government certificate holder trekking guide.</li><li>Fingertip Pulse Oximeter (we use every day to check your oxygen level and pulse in your body to avoid high risk).</li><li>Himalaya Trip T-shirt.</li></ul>', '<ul><li>All drinks tea, coffee, coke, Fanta, beer, Whiskey ,water etc.</li><li>Your Trekking gears.</li><li>Porter.</li><li>Tips for your guide etc.</li></ul>', 'mardi-himal-trek-map.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `Name`, `username`, `Images`, `Details`) VALUES
(7, 'Devika Dangal', 'dnagaldevika', 'Devika.jpg', 'I am Devika Dangal'),
(8, 'Wangbhu Tamang', 'wangbhutamang', 'wangbu.jpg', 'I am Wangbhu Tamang'),
(9, 'Nupur Khadgi', 'khadgi nupur', 'nupur.jpg', '|I am Nupur Kahdgi'),
(10, 'Urmila Tamang', '@urmila_tamang', 'urmila.jpg', 'I am Urmila Tamang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`enquiry_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pac_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pac_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
