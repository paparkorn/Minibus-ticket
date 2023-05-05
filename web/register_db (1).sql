-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3310
-- Generation Time: Apr 12, 2023 at 03:33 PM
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
(8, 'koonut', 'oneway', 'LON', 'CAM', '2023-04-05', '2023-04-13', 2),
(9, 'koonut', 'oneway', 'LON', 'BRI', '2023-04-06', '2023-04-14', 2),
(10, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-06', '2023-04-13', 2),
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
(31, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '0000-00-00', 1),
(32, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '0000-00-00', 1),
(33, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-10', 1),
(34, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-10', '2023-04-12', 1),
(35, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-10', '0000-00-00', 1),
(36, 'koonut', 'roundtrip', 'BRI', 'LON', '2023-04-12', '0000-00-00', 1),
(37, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-12', '2023-04-13', 1),
(38, 'koonut', 'oneway', 'BRI', 'LON', '2023-04-12', '0000-00-00', 0);

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
(5, 'koonut', 'kengfinity.01@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`B_id`);

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
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
