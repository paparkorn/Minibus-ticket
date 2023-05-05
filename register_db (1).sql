-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Generation Time: May 02, 2023 at 04:17 PM
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
-- Database: `register_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `name` varchar(100) NOT NULL,
  `seat` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`name`, `seat`, `price`) VALUES
('koonut', 'Array', 40),
('koonut', '1a, 1b', 40),
('koonut', 'Array', 40),
('koonut', '2a, 2b', 40),
('koonut', 'Array', 40),
('koonut', '1a, 1b', 40),
('koonut', '1a, 1a, 1b, 1a, 1b, Array, 2a, 2b, Array, 1a, 1b', 40),
('koonut', '1c, 2c', 40),
('koonut', '1a, 1a, 1b, 1a, 1b, Array, 2a, 2b, Array, 1a, 1b, 1a, 1a, 1b, 1a, 1b, Array, 2a, 2b, Array, 1a, 1b, ', 40),
('koonut', '1a, 1b', 40),
('koonut', '2d, 2e', 40);

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `B_id` int(11) NOT NULL,
  `id` varchar(50) NOT NULL,
  `travel_type` varchar(20) NOT NULL,
  `t_from` varchar(100) NOT NULL,
  `t_to` varchar(100) NOT NULL,
  `ondate` date NOT NULL,
  `returndate` date DEFAULT NULL,
  `passenger` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`B_id`, `id`, `travel_type`, `t_from`, `t_to`, `ondate`, `returndate`, `passenger`) VALUES
(11, 'koonut', 'oneway', 'BRI', 'CAM', '2023-04-06', '2023-04-07', 1),
(12, 'koonut', 'roundtrip', 'CAM', 'LON', '2023-04-13', '2023-04-29', 2),
(13, 'koonut', 'roundtrip', 'CAM', 'LON', '2023-04-13', '2023-04-29', 2),
(14, 'koonut', 'oneway', 'LON', 'BRI', '2023-04-10', '2023-04-18', 1),
(15, 'koonut', 'roundtrip', 'LON', 'BRI', '2023-04-10', '2023-04-18', 1),
(16, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '2023-04-18', 1),
(17, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-18', 1),
(18, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(19, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(20, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(21, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(22, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(23, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(24, 'koonut', 'roundtrip', 'LON', 'LON', '2023-04-12', '2023-04-18', 1),
(25, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(26, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-11', 1),
(27, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '0000-00-00', 1),
(28, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '0000-00-00', 1),
(29, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-12', 1),
(30, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-12', 1),
(34, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-12', 1),
(35, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '0000-00-00', 1),
(36, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-12', '0000-00-00', 1),
(37, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-12', '2023-04-13', 1),
(38, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-12', '0000-00-00', 0),
(39, 'koonut', 'oneway', 'LON', 'BRI', '2023-04-12', '0000-00-00', 0),
(40, 'keng', 'oneway', 'BRI', 'LON', '2023-04-14', '2023-04-15', 1),
(41, 'keng', '', '', '', '0000-00-00', '0000-00-00', 0),
(42, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-14', '0000-00-00', 1),
(43, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-14', '0000-00-00', 0),
(44, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-28', '2023-04-29', 2);

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_name` varchar(20) NOT NULL,
  `seat_no` varchar(5) NOT NULL,
  `available` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_name`, `seat_no`, `available`) VALUES
(1, 'LON->BRI', '1a', 0),
(1, 'LON->BRI', '1b', 0),
(1, 'LON->BRI', '1c', 0),
(1, 'LON->BRI', '1d', 0),
(1, 'LON->BRI', '1e', 0),
(1, 'LON->BRI', '2a', 0),
(1, 'LON->BRI', '2b', 0),
(1, 'LON->BRI', '2c', 0),
(1, 'LON->BRI', '2d', 0),
(1, 'LON->BRI', '2e', 0),
(1, 'LON->BRI', '3a', 0),
(1, 'LON->BRI', '3b', 0),
(1, 'LON->BRI', '3c', 0),
(1, 'LON->BRI', '3d', 0),
(1, 'LON->BRI', '3e', 0),
(1, 'LON->BRI', '4a', 0),
(1, 'LON->BRI', '4b', 0),
(1, 'LON->BRI', '4c', 0),
(1, 'LON->BRI', '4d', 0),
(1, 'LON->BRI', '4e', 0),
(1, 'LON->BRI', '5a', 0),
(1, 'LON->BRI', '5b', 0),
(1, 'LON->BRI', '5c', 0),
(1, 'LON->BRI', '5d', 0),
(1, 'LON->BRI', '5e', 0),
(2, 'LON->CAM', '1a', 0),
(2, 'LON->CAM', '1b', 0),
(2, 'LON->CAM', '1c', 0),
(2, 'LON->CAM', '1d', 0),
(2, 'LON->CAM', '1e', 0),
(2, 'LON->CAM', '2a', 0),
(2, 'LON->CAM', '2b', 0),
(2, 'LON->CAM', '2c', 0),
(2, 'LON->CAM', '2d', 0),
(2, 'LON->CAM', '2e', 0),
(2, 'LON->CAM', '3a', 0),
(2, 'LON->CAM', '3b', 0),
(2, 'LON->CAM', '3c', 0),
(2, 'LON->CAM', '3d', 0),
(2, 'LON->CAM', '3e', 0),
(2, 'LON->CAM', '4a', 0),
(2, 'LON->CAM', '4b', 0),
(2, 'LON->CAM', '4c', 0),
(2, 'LON->CAM', '4d', 0),
(2, 'LON->CAM', '4e', 0),
(2, 'LON->CAM', '5a', 0),
(2, 'LON->CAM', '5b', 0),
(2, 'LON->CAM', '5c', 0),
(2, 'LON->CAM', '5d', 0),
(2, 'LON->CAM', '5e', 0),
(3, 'BRI->LON', '1a', 0),
(3, 'BRI->LON', '1b', 0),
(3, 'BRI->LON', '1c', 0),
(3, 'BRI->LON', '1d', 0),
(3, 'BRI->LON', '1e', 0),
(3, 'BRI->LON', '2a', 0),
(3, 'BRI->LON', '2b', 0),
(3, 'BRI->LON', '2c', 0),
(3, 'BRI->LON', '2d', 0),
(3, 'BRI->LON', '2e', 0),
(3, 'BRI->LON', '3a', 0),
(3, 'BRI->LON', '3b', 0),
(3, 'BRI->LON', '3c', 0),
(3, 'BRI->LON', '3d', 0),
(3, 'BRI->LON', '3e', 0),
(3, 'BRI->LON', '4a', 0),
(3, 'BRI->LON', '4b', 0),
(3, 'BRI->LON', '4c', 0),
(3, 'BRI->LON', '4d', 0),
(3, 'BRI->LON', '4e', 0),
(3, 'BRI->LON', '5a', 0),
(3, 'BRI->LON', '5b', 0),
(3, 'BRI->LON', '5c', 0),
(3, 'BRI->LON', '5d', 0),
(3, 'BRI->LON', '5e', 0),
(4, 'BRI->CAM', '1a', 0),
(4, 'BRI->CAM', '1b', 0),
(4, 'BRI->CAM', '1c', 0),
(4, 'BRI->CAM', '1d', 0),
(4, 'BRI->CAM', '1e', 0),
(4, 'BRI->CAM', '2a', 0),
(4, 'BRI->CAM', '2b', 0),
(4, 'BRI->CAM', '2c', 0),
(4, 'BRI->CAM', '2d', 0),
(4, 'BRI->CAM', '2e', 0),
(4, 'BRI->CAM', '3a', 0),
(4, 'BRI->CAM', '3b', 0),
(4, 'BRI->CAM', '3c', 0),
(4, 'BRI->CAM', '3d', 0),
(4, 'BRI->CAM', '3e', 0),
(4, 'BRI->CAM', '4a', 0),
(4, 'BRI->CAM', '4b', 0),
(4, 'BRI->CAM', '4c', 0),
(4, 'BRI->CAM', '4d', 0),
(4, 'BRI->CAM', '4e', 0),
(4, 'BRI->CAM', '5a', 0),
(4, 'BRI->CAM', '5b', 0),
(4, 'BRI->CAM', '5c', 0),
(4, 'BRI->CAM', '5d', 0),
(4, 'BRI->CAM', '5e', 0),
(5, 'CAM->BRI', '1a', 0),
(5, 'CAM->BRI', '1b', 0),
(5, 'CAM->BRI', '1c', 0),
(5, 'CAM->BRI', '1d', 0),
(5, 'CAM->BRI', '1e', 0),
(5, 'CAM->BRI', '2a', 0),
(5, 'CAM->BRI', '2b', 0),
(5, 'CAM->BRI', '2c', 0),
(5, 'CAM->BRI', '2d', 0),
(5, 'CAM->BRI', '2e', 0),
(5, 'CAM->BRI', '3a', 0),
(5, 'CAM->BRI', '3b', 0),
(5, 'CAM->BRI', '3c', 0),
(5, 'CAM->BRI', '3d', 0),
(5, 'CAM->BRI', '3e', 0),
(5, 'CAM->BRI', '4a', 0),
(5, 'CAM->BRI', '4b', 0),
(5, 'CAM->BRI', '4c', 0),
(5, 'CAM->BRI', '4d', 0),
(5, 'CAM->BRI', '4e', 0),
(5, 'CAM->BRI', '5a', 0),
(5, 'CAM->BRI', '5b', 0),
(5, 'CAM->BRI', '5c', 0),
(5, 'CAM->BRI', '5d', 0),
(5, 'CAM->BRI', '5e', 0),
(6, 'CAM->LON', '1a', 0),
(6, 'CAM->LON', '1b', 0),
(6, 'CAM->LON', '1c', 0),
(6, 'CAM->LON', '1d', 0),
(6, 'CAM->LON', '1e', 0),
(6, 'CAM->LON', '2a', 0),
(6, 'CAM->LON', '2b', 0),
(6, 'CAM->LON', '2c', 0),
(6, 'CAM->LON', '2d', 0),
(6, 'CAM->LON', '2e', 0),
(6, 'CAM->LON', '3a', 0),
(6, 'CAM->LON', '3b', 0),
(6, 'CAM->LON', '3c', 0),
(6, 'CAM->LON', '3d', 0),
(6, 'CAM->LON', '3e', 0),
(6, 'CAM->LON', '4a', 0),
(6, 'CAM->LON', '4b', 0),
(6, 'CAM->LON', '4c', 0),
(6, 'CAM->LON', '4d', 0),
(6, 'CAM->LON', '4e', 0),
(6, 'CAM->LON', '5a', 0),
(6, 'CAM->LON', '5b', 0),
(6, 'CAM->LON', '5c', 0),
(6, 'CAM->LON', '5d', 0),
(6, 'CAM->LON', '5e', 0);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(2, 'koonut thongchang', 'kengfinity.01@gmail.com', 'wrong booking', 'qwerty qwertyu zsdfgh');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `T_card` varchar(20) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `card_cvc` varchar(5) NOT NULL,
  `month` varchar(5) NOT NULL,
  `years` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `T_card`, `card_no`, `card_cvc`, `month`, `years`) VALUES
(1, 'debit card', '9876543211234567', '123', 'Apr', '2023');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
  `t_from` varchar(50) NOT NULL,
  `t_to` varchar(50) NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`t_from`, `t_to`, `time`) VALUES
('BRI', 'LON', '09:00:00'),
('BRI', 'LON', '11:00:00'),
('BRI', 'LON', '19:00:00'),
('BRI', 'CAM', '06:00:00'),
('BRI', 'CAM', '13:00:00'),
('BRI', 'CAM', '17:00:00'),
('LON', 'BRI', '18:00:00'),
('LON', 'BRI', '21:00:00'),
('LON', 'BRI', '23:00:00'),
('LON', 'CAM', '05:00:00'),
('LON', 'CAM', '12:00:00'),
('LON', 'CAM', '14:00:00'),
('CAM', 'BRI', '07:00:00'),
('CAM', 'BRI', '15:00:00'),
('CAM', 'BRI', '22:00:00'),
('CAM', 'LON', '11:00:00'),
('CAM', 'LON', '16:00:00'),
('CAM', 'LON', '20:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `PASSWORD` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `PASSWORD`) VALUES
(4, 'bankk', 'paparkorn.bank31@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'koonut', 'kengfinity.01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'keng', 'kengfinity.02@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
