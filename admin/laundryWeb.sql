-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 07:05 PM
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
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `dropoff`
--

CREATE TABLE `dropoff` (
  `dropOffId` varchar(10) NOT NULL,
  `numberOfLoads` int(11) DEFAULT NULL,
  `serviceType` enum('Wash and Dry','Wash Only','Dry Only') NOT NULL,
  `timeSlot` time DEFAULT NULL,
  `bookingDate` date DEFAULT NULL,
  `additionalRemarks` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `status` enum('Pending','Confirmed','Completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dropoff`
--

INSERT INTO `dropoff` (`dropOffId`, `numberOfLoads`, `serviceType`, `timeSlot`, `bookingDate`, `additionalRemarks`, `userId`, `status`) VALUES
('D646ba17a3', 3, '', '09:00:00', '2023-05-24', 'pick up later', 2, 'Pending'),
('D646bc1ffe', 3, 'Wash and Dry', '10:30:00', '2023-05-25', 'fold too', 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `selfservice`
--

CREATE TABLE `selfservice` (
  `selfServiceId` varchar(10) NOT NULL,
  `numberOfLoads` int(11) DEFAULT NULL,
  `serviceType` enum('Wash and Dry','Wash Only','Dry Only') DEFAULT NULL,
  `timeSlot` varchar(20) DEFAULT NULL,
  `bookingDate` date DEFAULT NULL,
  `additionalRemarks` varchar(255) DEFAULT NULL,
  `userId` int(11) DEFAULT NULL,
  `status` enum('Pending','Confirmed','Completed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `selfservice`
--

INSERT INTO `selfservice` (`selfServiceId`, `numberOfLoads`, `serviceType`, `timeSlot`, `bookingDate`, `additionalRemarks`, `userId`, `status`) VALUES
('S646bc09d5', 2, 'Wash and Dry', '15:20', '2023-05-25', 'yeahh', 1, 'Pending'),
('S646bc1627', 2, 'Wash Only', '22:44', '2023-05-24', '', 1, 'Pending'),
('S646bc1ac3', 4, 'Wash and Dry', '09:30', '2023-05-24', 'broommsdad', 1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `contactNo` int(11) DEFAULT NULL,
  `role` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `email`, `password`, `contactNo`, `role`) VALUES
(1, 'Nayeon Im', 'nayeon@gmail.com', 'de10825d7a3d9c225a18ba765a55c906', 912345567, 'customer'),
(2, 'Mina Myoui', 'mina@gmail.com', '308a29557d589f5e2c9d9b0975ff9c82', 991213435, 'customer'),
(10, 'Kim Dahyun', 'tofu@gmail.com', '37f1a796f6baecf44c808fa1d9c44c21', 912345678, 'Admin'),
(11, 'Park Jihyo', 'jihyo@gmail.com', '0aa922c50205946138dcd1da47fdba33', 989458645, 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dropoff`
--
ALTER TABLE `dropoff`
  ADD PRIMARY KEY (`dropOffId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `selfservice`
--
ALTER TABLE `selfservice`
  ADD PRIMARY KEY (`selfServiceId`),
  ADD KEY `userId` (`userId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dropoff`
--
ALTER TABLE `dropoff`
  ADD CONSTRAINT `dropoff_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);

--
-- Constraints for table `selfservice`
--
ALTER TABLE `selfservice`
  ADD CONSTRAINT `selfservice_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
