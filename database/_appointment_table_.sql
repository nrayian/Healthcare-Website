-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 10:50 PM
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
-- Database: `hcweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `apid` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `message` varchar(300) DEFAULT NULL,
  `doc_id` int(11) DEFAULT NULL,
  `doc_name` varchar(255) DEFAULT NULL,
  `pay_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`apid`, `userid`, `name`, `email_id`, `date`, `phone_number`, `department`, `message`, `doc_id`, `doc_name`, `pay_status`) VALUES
(1, 1, 'Syed Niamul Kazbe Rayian', 'syed.rayian@northsouth.edu', '2023-10-26', '01719087571', 'Cardiology', 'asdfsdfsadfsadgdfsgdsfg', 11, 'Prof. Dr. Nazir Ahammed Chowdhury (Ronju)', 'Not Paid'),
(2, 8, 'Jinnat Sultana', 'kazbeahmed@gmail.com', '2023-11-09', '01906599331', 'Dental', 'Cavity', 5, 'Dr. Md. Imran Hossain', 'Not Paid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`apid`),
  ADD KEY `userid` (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `apid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `users` (`Personid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
