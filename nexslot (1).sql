-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2024 at 12:54 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nexslot`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `adminId` int(12) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `contact` int(10) NOT NULL,
  `nic` int(20) NOT NULL,
  `post` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`adminId`, `name`, `email`, `password`, `contact`, `nic`, `post`) VALUES
(1, 'adeesha', 'adeeshaharshana@gmail.com', '123', 112843481, 123456, 'admin'),
(2, 'malsha', 'malsha@gmail.com', '456', 112843481, 123456, 'csr');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `email` varchar(32) NOT NULL,
  `name` varchar(20) NOT NULL,
  `message` varchar(100) NOT NULL,
  `messageID` int(20) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`email`, `name`, `message`, `messageID`, `reply`) VALUES
('adeeshaharshana@gmail.com', 'adeesha', 'bbhvgvbbythbghkjl', 1, 'ybhbyujhoumb,o'),
('adeesha@123', 'adee', 'jgmhm', 2, ''),
('hcg@123', 'hg', 'uyffhvuj', 3, 'hi'),
('adeeshaharshana@gmail.com', 'adeesha', 'frdhmhxs,thgf ,', 4, ''),
('shanaka@gmail.com', 'adeesha', '123', 5, '');

-- --------------------------------------------------------

--
-- Table structure for table `package1`
--

CREATE TABLE `package1` (
  `ID` int(11) NOT NULL,
  `Features` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package1`
--

INSERT INTO `package1` (`ID`, `Features`) VALUES
(2, 'rwtsgftgh'),
(3, 'rwtsg'),
(5, 'adeesha'),
(6, 'adeesha'),
(7, 'vidun');

-- --------------------------------------------------------

--
-- Table structure for table `package2`
--

CREATE TABLE `package2` (
  `ID` int(11) NOT NULL,
  `Features` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `package2`
--

INSERT INTO `package2` (`ID`, `Features`) VALUES
(1, 'ydtdth jghv'),
(2, 'adeesha'),
(3, 'adeesha'),
(4, 'vidun'),
(5, 'shanaka');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `license_number` varchar(10) NOT NULL,
  `vehicle` varchar(10) NOT NULL,
  `floor` int(11) NOT NULL,
  `slot` varchar(10) NOT NULL,
  `package` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `reservationID` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`email`, `username`, `nic`, `license_number`, `vehicle`, `floor`, `slot`, `package`, `date`, `start_time`, `end_time`, `reservationID`) VALUES
('malsha@gmail.com', 'malsha', '2003138007', '2003138007', '', 0, '', 'basic', '2024-10-26', '02:18:00', '02:17:00', 2),
('adeeshaharshana@gmail.com', 'adeesha harshana', '2003138007', '2003138007', '00:00:00', 1, 'C', 'premium', '0000-00-00', '00:00:00', '00:00:00', 3),
('adeeshaharshana@gmail.com', 'adeesha harshana', '2003138007', '2003138007', 'abc-1234', 0, '', 'premium', '0000-00-00', '00:00:01', '00:00:05', 4),
('adeeshaharshana@gmail.com', 'adeesha harshana', '2003138007', '2003138007', 'abc-1234', 0, '', 'premium', '2024-10-30', '00:04:00', '00:50:00', 5),
('malsha@gmail.com', 'malsha', '2003138007', '2003138007', '6', 0, '', 'basic', '2024-10-19', '06:40:00', '06:43:00', 7),
('malsha@gmail.com', 'malsha', '2003138007', '2003138007', 'abc123', 0, '', 'basic', '2024-10-19', '06:40:00', '06:43:00', 8),
('malsha@gmail.com', 'malsha', '2003138007', '2003138007', 'fhhcn', 9, '40', 'basic', '2024-10-15', '07:06:00', '00:05:00', 9),
('malsha@gmail.com', 'malsha', '2003138007', '2003138007', 'dfg-456', 8, '5', 'basic', '2024-10-11', '03:01:00', '11:08:00', 10),
('adeeshaharshana@gmail.com', 'adeesha harshana', '2003138007', '2003138007', '', 0, '', 'premium', '2024-10-16', '00:00:00', '00:00:00', 11);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(12) NOT NULL,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `vehicleNo` varchar(8) NOT NULL,
  `idNo` varchar(12) NOT NULL,
  `lisenceNo` varchar(12) NOT NULL,
  `contactNo` int(10) NOT NULL,
  `package` varchar(10) NOT NULL,
  `file` varchar(50) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `name`, `email`, `password`, `vehicleNo`, `idNo`, `lisenceNo`, `contactNo`, `package`, `file`, `role`) VALUES
(1, 'adeesha harshana', 'adeeshaharshana@gmail.com', '123', '50', '200313800710', '200313800710', 112843481, 'premium', 'WhatsApp Image 2024-08-03 at 19.42.31_d9773f0c.jpg', 'user'),
(2, 'malsha', 'malsha@gmail.com', '456', 'kt-6328', '200313800710', '200313800710', 1128434811, 'basic', '6f8a1dee410735e3f141868bfe77c839.jpg', ''),
(3, 'shanaka', 'shanaka@gmail.com', '123', '123', '123', '123', 123, '', '6f8a1dee410735e3f141868bfe77c839.jpg', 'admin'),
(7, 'pranee', 'pranee@gmail.com', '123', '123abc', '200313800710', '200313800710', 112843481, '', 'f1d73fe478e006d58f3207e21e952ba7.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `email` varchar(32) NOT NULL,
  `vehicleID` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `brand` varchar(20) NOT NULL,
  `model` varchar(20) NOT NULL,
  `vehicleNo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`email`, `vehicleID`, `type`, `brand`, `model`, `vehicleNo`) VALUES
('malsha@gmail.com', 2, 'car', 'honda', 'gud', 'abc123'),
('malsha@gmail.com', 3, 'van', 'toyota', 'ghn', 'fhhcn'),
('pranee@gmail.com', 4, 'wheel', 'honda', 'land', 'abc123'),
('adeeshaharshana@gmail.com', 5, 'bike', 'toyota', 'land', '1234avd'),
('malsha@gmail.com', 6, 'wheel', 'honda', 'bajaj', 'abc-1234'),
('malsha@gmail.com', 7, 'suv', 'honda', 'civic', 'dfg-456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`adminId`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`messageID`);

--
-- Indexes for table `package1`
--
ALTER TABLE `package1`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `package2`
--
ALTER TABLE `package2`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`reservationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `adminId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `messageID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `package1`
--
ALTER TABLE `package1`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package2`
--
ALTER TABLE `package2`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `reservationID` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `vehicleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
