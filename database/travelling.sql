-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2023 at 05:39 AM
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
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `Category_Name` varchar(200) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `Category_Name`, `Images`, `Details`) VALUES
(1, 'Tour in Nepal ', '14.jpg', 'Tour in Nepal.......');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` int(100) NOT NULL,
  `Package_title` varchar(200) NOT NULL,
  `Title_image` varchar(200) NOT NULL,
  `Details` varchar(1000) NOT NULL,
  `Price` varchar(100) NOT NULL,
  `Duration` varchar(200) NOT NULL,
  `Max_Evelation` varchar(200) NOT NULL,
  `Max_Group` varchar(100) NOT NULL,
  `Best_Time` varchar(100) NOT NULL,
  `Trip_overview` varchar(2000) NOT NULL,
  `Image_1` varchar(100) NOT NULL,
  `Image_2` varchar(100) NOT NULL,
  `Itinerary` varchar(1000) NOT NULL,
  `Include` varchar(1000) NOT NULL,
  `Exclude` varchar(1000) NOT NULL,
  `Map_title` varchar(200) NOT NULL,
  `Map_image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `id` int(100) NOT NULL,
  `Subcategory_Name` varchar(200) NOT NULL,
  `Images` varchar(200) NOT NULL,
  `Details` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`id`, `Subcategory_Name`, `Images`, `Details`) VALUES
(9, 'Upper Mustang Trek ', '14.jpg', 'Upper Mustang Trek is located in the ancient Himalayan Kingdom which lies in the northern central part of Nepal and at the top of the Kaligandaki River. When you enter the restricted area, you enter an ancient land with its own distinct history and tradition.'),
(10, 'Annapurna Trek', '15.jpg', 'Annapurna Circuit offers the greatest diversity of flora, fauna, and landscape of any trek in Nepal. From sub-tropical to alpine forests, from lush jungle to arid wind-swept valleys, few other treks enable you to walk through such a changing environment. From Kathmandu, we cross fertile, terraced valleys, following the Marsyangdi River.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
