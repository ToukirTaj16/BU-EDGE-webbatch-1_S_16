-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 11:40 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicstlist`
--

CREATE TABLE `academicstlist` (
  `ID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Phone` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Subject` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `academicstlist`
--

INSERT INTO `academicstlist` (`ID`, `Name`, `Phone`, `Password`, `Address`, `Subject`) VALUES
(1, 'Toukir Taj', '01558021297', '12345678', 'Azimpur, Dhaka', 'Physics'),
(2, 'Abdullah ', '01945402855', '76658396', 'Rupsha, Khulna', 'Chemistry'),
(3, 'Polash', '01710223647', 'tt277488hur', 'Patuakhali, Barishal', 'Mathematics'),
(4, 'Samia', '01717316627', 's997fnu9', 'Mirpur, Dhaka', 'Statistics'),
(5, 'Arafat', '01705966603', 'a232u88ncxb', 'Uzirpur, Barishal', 'Physics');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Username` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Username`, `Password`) VALUES
('BUhost', '87654321');

-- --------------------------------------------------------

--
-- Table structure for table `applicant`
--

CREATE TABLE `applicant` (
  `ID` int(11) NOT NULL,
  `Name` varchar(60) NOT NULL,
  `Fathers_name` varchar(60) NOT NULL,
  `Mothers_name` varchar(60) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Nationality` varchar(100) DEFAULT NULL,
  `Phone` varchar(20) NOT NULL,
  `Subject` varchar(45) NOT NULL,
  `University` varchar(100) NOT NULL,
  `CGPA` decimal(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicant`
--

INSERT INTO `applicant` (`ID`, `Name`, `Fathers_name`, `Mothers_name`, `Date_of_birth`, `Gender`, `Nationality`, `Phone`, `Subject`, `University`, `CGPA`) VALUES
(1, 'Md. Sunny Islam', 'Jahir Rayhan', 'Salma Begum', '1999-02-05', 'male', 'Bangladeshi', '01452677256', 'Physics', 'University Of Barishal', 3.25),
(19, 'Jarin Akter ', 'Abdus Salam', 'Tania Rahman', '2002-02-14', 'Female', 'Bangladeshi', '076422212134', 'Physics', 'UGV', 3.96),
(26, 'tania rahim', 'Himadri hossain', 'Farhin hossain', '1998-08-23', 'Female', 'Bangladeshi', '018273777289', 'Physics', 'Barishal University', 3.50),
(28, 'Towfiq Polash', 'F.M. Akhteruzzaman', 'Parvin Akhter ', '1997-06-05', 'male', 'Bangladeshi', '018727387168', 'Soil & Environmental Science', 'Barishal University', 2.67),
(29, 'Arafat Zaman', 'A Zaman', 'parvin khan', '2005-07-28', 'male', 'Bangladeshi', '019283656728', 'Applied Physics', 'PSTU', 3.14);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicstlist`
--
ALTER TABLE `academicstlist`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Phone` (`Phone`);

--
-- Indexes for table `applicant`
--
ALTER TABLE `applicant`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academicstlist`
--
ALTER TABLE `academicstlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `applicant`
--
ALTER TABLE `applicant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
