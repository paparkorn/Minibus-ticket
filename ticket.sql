-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Generation Time: May 02, 2023 at 04:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fullname` int(11) NOT NULL,
  `id` varchar(40) DEFAULT NULL,
  `contact` varchar(30) DEFAULT NULL,
  `email` varchar(140) DEFAULT NULL,
  `username` varchar(70) DEFAULT NULL,
  `password` varchar(130) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `available_class`
--

CREATE TABLE `available_class` (
  `class_id` varchar(120) NOT NULL,
  `class_name` varchar(80) NOT NULL,
  `class_capacity` smallint(6) NOT NULL DEFAULT 0,
  `class_price` double NOT NULL DEFAULT 10,
  `description` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

CREATE TABLE `booking_details` (
  `order_ref` varchar(255) NOT NULL,
  `fullname` varchar(120) NOT NULL,
  `contact` varchar(40) DEFAULT NULL,
  `gender` varchar(40) DEFAULT NULL,
  `class_reserved` varchar(255) NOT NULL,
  `destination` varchar(180) NOT NULL,
  `seats_reserved` varchar(50) NOT NULL DEFAULT '1',
  `date_reserved` varchar(50) DEFAULT NULL,
  `transaction_id` varchar(190) NOT NULL,
  `account` varchar(130) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `time_p` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`order_ref`, `fullname`, `contact`, `gender`, `class_reserved`, `destination`, `seats_reserved`, `date_reserved`, `transaction_id`, `account`, `amount`, `time_p`) VALUES
('TO45R69B46E', 'koonut thongchang', 'kengfinity.01@gmail.com', 'FEMALE', 'High Class Travel', 'BRIGHTON to LONDON', '1', 'April 29, 2023', '123456789123', 'HALIFAX', '20', '12:00'),
('EO80T52B90R', 'koonut thongchang', 'kengfinity.01@gmail.com', 'MALE', 'Middle Class Travel', 'CAMBRIDGE to BRIGHTON', '1', 'May 04, 2023', '123456789123', 'SANTANDER', '15', '12:00'),
('AC39B17R44E', 'koonut thongchang', 'kengfinity.01@gmail.com', 'MALE', 'Middle Class Travel', 'BRIGHTON to CAMBRIDGE', '3', 'May 03, 2023', '123456789123', 'SANTANDER', '45', '15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tickets_generated`
--

CREATE TABLE `tickets_generated` (
  `ticket_ref` varchar(120) NOT NULL,
  `order_ref` varchar(120) NOT NULL,
  `travel_class` varchar(255) NOT NULL,
  `date_processed` datetime DEFAULT NULL,
  `destination` varchar(120) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `amount` double DEFAULT 0,
  `payment_via` varchar(180) DEFAULT NULL,
  `transaction_id` varchar(210) NOT NULL,
  `status` varchar(80) DEFAULT 'unused'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`amount`, `payment_via`, `transaction_id`, `status`) VALUES
(7500, 'MPESA', 'LORSO93045KWE', 'used');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`fullname`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `available_class`
--
ALTER TABLE `available_class`
  ADD PRIMARY KEY (`class_id`,`class_name`),
  ADD UNIQUE KEY `class_name` (`class_name`);

--
-- Indexes for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD PRIMARY KEY (`order_ref`),
  ADD KEY `available_classbooking_details` (`class_reserved`),
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `tickets_generated`
--
ALTER TABLE `tickets_generated`
  ADD PRIMARY KEY (`ticket_ref`),
  ADD KEY `available_classtickets_generated` (`travel_class`),
  ADD KEY `booking_detailstickets_generated` (`order_ref`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `fullname` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
