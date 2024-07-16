-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2023 at 07:19 PM
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
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `title` varchar(50) DEFAULT NULL,
  `desc1` mediumtext DEFAULT NULL,
  `desc2` mediumtext DEFAULT NULL,
  `desc3` mediumtext DEFAULT NULL,
  `moto` varchar(20) DEFAULT NULL,
  `mentor_title` varchar(20) DEFAULT NULL,
  `mentor_descp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`title`, `desc1`, `desc2`, `desc3`, `moto`, `mentor_title`, `mentor_descp`) VALUES
('Group and Teamwork Information', 'This project aims to create a user-friendly and informative online platform that serves as a hub for a wide range of healthcare-related resources, services, and information. The website will cater to individuals seeking medical advice, health education, appointment scheduling, and a community for sharing experiences and insights. The primary objective of this project is to bridge the gap between healthcare providers, medical information, and the general public. By offering a user-centric website, we intend to empower users with the tools they need to make informed decisions about their health and well-being.', 'The healthcare system is designed as a comprehensive web-based platform that facilitates efficient patient management, medical records storage, appointment scheduling, and communication between patients and healthcare providers. Our group-5 team members are:', 'We are currently doing CSE 482 Internet and Web Technology course, where we are required to make a website which will show our merit and potential.', 'One Team, One Dream!', 'About the mentor', 'CSE 482 Internet and Web Technology faculty is <a ');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
