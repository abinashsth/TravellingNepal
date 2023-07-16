-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2023 at 07:32 PM
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
(1, 'admin', 'admin', 'admin');

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

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `Category_Name` varchar(200) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Details` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `Category_Name`, `Images`, `Details`) VALUES
(9, 'Tour in Nepal ', '14.jpg', 'Tour in Nepal '),
(10, 'Trekking in Nepal', '8.jpg', 'Trekking in Nepal'),
(11, 'mountain biking ', '4.jpg', 'Mountain Biking in Nepal');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `enquiry_id` int(200) NOT NULL,
  `Package_id` varchar(200) NOT NULL,
  `Package_Name` varchar(200) NOT NULL,
  `Full_Name` varchar(200) NOT NULL,
  `Contact No.` int(200) NOT NULL,
  `Email_Address` varchar(200) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`enquiry_id`, `Package_id`, `Package_Name`, `Full_Name`, `Contact No.`, `Email_Address`, `Address`, `Message`) VALUES
(1, '9', '', 'Abinash Shrestha', 2147483647, 'abinsdi@gmail.com', 'Bouddha', 'sfsf');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pac_id` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `Package_title` varchar(200) NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Max_Evelation` varchar(200) NOT NULL,
  `Max_Group` varchar(100) NOT NULL,
  `Best_Time` varchar(100) NOT NULL,
  `Trip_overview1` varchar(2000) NOT NULL,
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

INSERT INTO `package` (`pac_id`, `cat_id`, `sub_id`, `Package_title`, `Details`, `Price`, `Duration`, `Max_Evelation`, `Max_Group`, `Best_Time`, `Trip_overview1`, `Image_1`, `Trip_overview2`, `Image_2`, `Trip_overview3`, `Itinerary`, `Include`, `Exclude`, `Map_image`) VALUES
(9, 9, 20, 'Muktinath Temple', 'Muktinath Temple', '200', '10', '4200', '4', 'April to May', 'Hi What is your name ?', '13.jpg', 'Hello I am Abinash Shrestha ..', '14.jpg', 'How are you??', '<p><i><strong>Hi</strong></i></p><p><i><strong>hello</strong></i></p><p><i><strong>what is your name</strong></i></p>', '<p><i><strong>dfd</strong></i></p><p><i><strong>dsada</strong></i></p><p><i><strong>fdffgfg</strong></i></p><p><i><strong>kkjkjk</strong></i></p>', '<p><i><strong>saas</strong></i></p><p><i><strong>,nv</strong></i></p><p><i><strong>fgfdg</strong></i></p><p><i><strong>fgd</strong></i></p><p><i><strong>fdghd</strong></i></p><p><i><strong>zz</strong></i></p>', 'annapurna.jpg');

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
(2, 'Devika Dangal', 'dnagaldevika', 'Devika.jpg', 'Hi , i am devika dangal'),
(3, 'Nupur Khadgi', 'khadgi nupur', 'nupur.jpg', 'nupur khadgi'),
(6, 'Wangbhu Tamang', 'wangbhutamang', 'wangbu.jpg', 'wangbhutamang');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `sub_id` int(100) NOT NULL,
  `Subcategory_Name` varchar(200) NOT NULL,
  `cat_id` int(200) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`sub_id`, `Subcategory_Name`, `cat_id`, `Images`, `Details`) VALUES
(20, 'Muktinath Tour', 9, '14.jpg', 'Muktinath Tour in Nepal'),
(22, 'Upper Mustang Trek ', 10, '19.jpg', 'Upper Mustang Trek');

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
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`sub_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `enquiry_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pac_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `sub_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
