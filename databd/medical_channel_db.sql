-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2024 at 05:00 PM
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
-- Database: `medical_channel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment1`
--

CREATE TABLE `appointment1` (
  `appointmentId` int(20) NOT NULL,
  `PatientyId` int(20) NOT NULL,
  `doctorId` varchar(20) NOT NULL,
  `mobile` int(100) NOT NULL,
  `free` int(20) NOT NULL,
  `hospital` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointment1`
--

INSERT INTO `appointment1` (`appointmentId`, `PatientyId`, `doctorId`, `mobile`, `free`, `hospital`, `location`) VALUES
(1, 2, '1', 0, 776580500, 'Nawaloka', 'Colombo');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `doctors_id` int(50) NOT NULL,
  `name` varchar(250) NOT NULL,
  `hospital` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `free` int(20) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `specialization` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`doctors_id`, `name`, `hospital`, `city`, `mobile`, `free`, `gmail`, `specialization`) VALUES
(1, 'Thilina ', 'Ruhunu ', 'Galle', '0776583509', 3000, 'thilina@gmail.com', ''),
(2, 'Rukmi', 'Nawaloka', 'Mathara', '0776583509', 3000, 'rukmi@gmail.com', 'Vog');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patients_id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `age` int(50) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `Id_number` varchar(100) NOT NULL,
  `gmail` varchar(200) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`patients_id`, `name`, `city`, `age`, `mobile`, `gender`, `Id_number`, `gmail`, `password`) VALUES
(1, 'vinod', 'galle', 22, '0776583509', 'male', '200140003000', 'vinod@gmail.com', '1234'),
(2, 'Kamal', 'Mathugama', 34, '0773250464', 'male', '2000123154623', 'kamal@gmai;.com', '4564'),
(3, 'navodi', 'awiththawa', 23, '0776541232', 'male', '20014562', 'navodi@gmail.com', '222');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment1`
--
ALTER TABLE `appointment1`
  ADD PRIMARY KEY (`appointmentId`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`doctors_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patients_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment1`
--
ALTER TABLE `appointment1`
  MODIFY `appointmentId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `doctors_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patients_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
