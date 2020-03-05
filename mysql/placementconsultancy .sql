-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2020 at 12:15 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placementconsultancy`
--

-- --------------------------------------------------------

--
-- Table structure for table `employer`
--

CREATE TABLE `employer` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Age` int(11) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Password_Confirmation` varchar(100) NOT NULL,
  `User_Role` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`First_Name`, `Last_Name`, `Username`, `Email`, `Age`, `Password`, `Password_Confirmation`, `User_Role`) VALUES
('Haushila', 'Pandey', 'eshaushila', 'haushila11@gmail.com', 0, '7bf29a335b2d027b09580b99d9cb58469c42a1d3', '7bf29a335b2d027b09580b99d9cb58469c42a1d3', 0),
('Haushila', 'Pandey', 'sms.brij56', 'haushilssa1@gmail.com', 23, '32a89bdcec2d50f9dc9747cd47ecfc14cf9c3dbe', '32a89bdcec2d50f9dc9747cd47ecfc14cf9c3dbe', 0);

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Gender` varchar(11) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `User_id` int(4) NOT NULL,
  `Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`First_Name`, `Last_Name`, `Username`, `Email`, `Gender`, `Password`, `User_id`, `Date`) VALUES
('Atul', 'Srivastava', 'sriatul', 'atulsri12@outlook.com', 'male', 'f58cf5e7e10f195e21b553096d092c763ed18b0e', 3, NULL),
('Atul', 'Srivastava', 'sriatul', 'atulsri12@outlook.com', 'male', 'f58cf5e7e10f195e21b553096d092c763ed18b0e', 4, '0000-00-00'),
('Atul', 'Srivastava', 'sriatul', 'atulsri12@outlook.com', 'male', 'e5e69759c44373664d815dae1f19cf3add59bf39', 5, '2020-01-31'),
('Karishma', 'Kumari', 'karishma12', 'karishma12@outlook.com', 'female', '7f47faf8d3a197901337bf6dc25920684107fdf1', 6, '2020-01-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seeker`
--
ALTER TABLE `seeker`
  MODIFY `User_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
