-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2023 at 06:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `image_path`, `upload_date`) VALUES
(5, 'Uploads/Building.jpg', '2023-10-21 08:05:30');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `message` longtext NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`, `upload_date`) VALUES
(3, 'Hamza Hasan', 'hamzahasan0327@gmail.com', '03359090327', 'Hello How are you ?', '2023-10-16 10:10:52'),
(4, 'Javid Ali', 'javidali123@gmail.com', '03331122334', 'Good Morning!', '2023-10-21 06:55:38'),
(7, 'Hisham Ali', 'hishamali456@gmail.com', '03335566778', 'Good Night!', '2023-10-21 07:00:05');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `upload_date`) VALUES
(1, 'admin', 'hotel123', '2023-10-21 09:56:15'),
(2, 'hotel', 'pakistan', '2023-10-21 09:56:59');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `image_path`, `upload_date`) VALUES
(5, 'Uploads/Manager-02.jpg', '2023-10-21 09:21:54');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `room_no` varchar(100) NOT NULL,
  `room_details` longtext NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `image_path`, `room_no`, `room_details`, `upload_date`) VALUES
(11, 'Uploads/Room-06.jpg', 'ROOM 1', 'Enjoy a spacious haven with a king-size bed, stunning city views, and a private balcony. Modern amenities include a flat-screen TV, minibar, and luxurious en-suite bathroom', '2023-10-21 07:19:05'),
(12, 'Uploads/Room-05.jpg', 'ROOM 2', 'Enjoy a spacious haven with a king-size bed, stunning city views, and a private balcony. Modern amenities include a flat-screen TV, minibar, and luxurious en-suite bathroom', '2023-10-21 07:19:40'),
(13, 'Uploads/Room-03.jpg', 'ROOM 3', 'Enjoy a spacious haven with a king-size bed, stunning city views, and a private balcony. Modern amenities include a flat-screen TV, minibar, and luxurious en-suite bathroom', '2023-10-21 07:20:07'),
(14, 'Uploads/Room-02.jpg', 'ROOM 4', 'Enjoy a spacious haven with a king-size bed, stunning city views, and a private balcony. Modern amenities include a flat-screen TV, minibar, and luxurious en-suite bathroom', '2023-10-21 07:20:44');

-- --------------------------------------------------------

--
-- Table structure for table `roombooking`
--

CREATE TABLE `roombooking` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cnic` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `roomno` varchar(500) NOT NULL,
  `checkin` datetime NOT NULL,
  `checkout` datetime NOT NULL,
  `message` varchar(2000) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roombooking`
--

INSERT INTO `roombooking` (`id`, `name`, `email`, `cnic`, `phone`, `roomno`, `checkin`, `checkout`, `message`, `upload_date`) VALUES
(3, 'Inayat Ullah', 'iu334454@gmail.com', '1510118406225', '3111920296', '2', '2023-10-04 00:00:00', '2023-10-06 00:00:00', 'hello every one', '2023-10-22 03:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_price` varchar(100) NOT NULL,
  `food_detail` longtext NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image_path`, `food_name`, `food_price`, `food_detail`, `upload_date`) VALUES
(29, 'Uploads/Banner.jpg', 'Large Bargar', 'RS. 500', 'Free Delivery at Home!', '2023-10-21 06:09:02'),
(30, 'Uploads/Food-02.jpg', 'Medium Bargar', 'RS. 300', 'Free Delivery at Home!', '2023-10-21 06:10:02'),
(32, 'Uploads/Food-03.jpg', 'Small Bargar', 'RS. 200', 'Free Delivery at Home !', '2023-10-21 06:48:06'),
(33, 'Uploads/Food-04.jpg', 'Rice', 'RS. 800', 'Free Delivery at Home!', '2023-10-21 09:35:25'),
(34, 'Uploads/Food-01.jpg', 'Bargar', 'RS. 1000', 'Free Home Delivery!', '2023-10-21 09:36:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roombooking`
--
ALTER TABLE `roombooking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `roombooking`
--
ALTER TABLE `roombooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
