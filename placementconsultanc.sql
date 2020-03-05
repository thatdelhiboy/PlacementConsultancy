-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2020 at 05:15 AM
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
  `City` varchar(100) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `Password_Confirmation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employer`
--

INSERT INTO `employer` (`First_Name`, `Last_Name`, `Username`, `Email`, `Age`, `City`, `Password`, `Password_Confirmation`) VALUES
('Haushila', 'Pandey', 'eshaushila', 'haushila11@gmail.com', 0, NULL, '7bf29a335b2d027b09580b99d9cb58469c42a1d3', '7bf29a335b2d027b09580b99d9cb58469c42a1d3'),
('Pari', 'Kumari', 'pari123', 'pari123@test.com', 20, NULL, '7f47faf8d3a197901337bf6dc25920684107fdf1', '7f47faf8d3a197901337bf6dc25920684107fdf1'),
('Haushila', 'Pandey', 'sms.brij56', 'haushilssa1@gmail.com', 23, NULL, '32a89bdcec2d50f9dc9747cd47ecfc14cf9c3dbe', '32a89bdcec2d50f9dc9747cd47ecfc14cf9c3dbe'),
('Abhishek', 'Srivastava', 'sriabhishek', 'sriabhi@test.com', 20, NULL, '1143a6c02022fb734892e83a7512d0b5ae9ea467', '1143a6c02022fb734892e83a7512d0b5ae9ea467');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `Posting_time` datetime DEFAULT NULL,
  `Username_fk` varchar(100) DEFAULT NULL,
  `Title` varchar(250) DEFAULT NULL,
  `Job_id` int(11) NOT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Skill` varchar(250) NOT NULL,
  `Salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`Posting_time`, `Username_fk`, `Title`, `Job_id`, `City`, `Skill`, `Salary`) VALUES
('2020-02-06 06:50:27', 'eshaushila', 'Hr Recruiter', 2, 'Delhi', 'Must have a graduation degree.', 11000),
('2020-02-12 11:21:27', 'eshaushila', 'Hr Recruiter', 3, 'Delhi', 'Must have graduation degree.', 12000),
('2020-02-12 11:23:02', 'eshaushila', 'Data Entry', 4, 'Delhi', 'Must have intermediate pass.', 10000),
('2020-02-13 11:16:46', 'eshaushila', 'Data Entry', 5, 'Kanpur', 'Must have intermediate degree.', 10000);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `Message_Id` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Sender` varchar(100) DEFAULT NULL,
  `Message` varchar(250) NOT NULL,
  `Created_by` datetime NOT NULL,
  `Mobile_fk` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `opted`
--

CREATE TABLE `opted` (
  `Like_Id` bigint(11) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `Job_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `opted`
--

INSERT INTO `opted` (`Like_Id`, `Status`, `Job_id`) VALUES
(9921320934, 1, 2),
(9921320934, 1, 3),
(2147483647, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `course` varchar(100) DEFAULT NULL,
  `board` varchar(100) DEFAULT NULL,
  `percentage` float DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `user_fk` bigint(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`course`, `board`, `percentage`, `year`, `user_fk`) VALUES
('BA', 'DDU', 56, 2018, 2147483647),
('High School', 'CBSE', 71, 2012, 2147483647),
('High School', 'CBSE', 80, 2012, 9921320934);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `username`) VALUES
(2, 'eshaushila'),
(0, ''),
(1, 'karishma12'),
(1, 'mdanas');

-- --------------------------------------------------------

--
-- Table structure for table `seeker`
--

CREATE TABLE `seeker` (
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Username` varchar(50) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Mobile` bigint(12) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Gender` varchar(11) DEFAULT NULL,
  `Password` varchar(100) NOT NULL,
  `Date` date DEFAULT NULL,
  `job_fk` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seeker`
--

INSERT INTO `seeker` (`First_Name`, `Last_Name`, `Username`, `Email`, `Mobile`, `City`, `Gender`, `Password`, `Date`, `job_fk`) VALUES
('Atul', 'Srivastava', 'sriatul', 'atulsri12@outlook.com', 0, '', 'male', 'd168c8156634bc65cec5a94e53e6bc21f42af7e6', '2020-02-05', 0),
('Mohammad', 'Anas', 'mdanas', 'mdanas21@test.com', 2147483647, '', 'male', '7f47faf8d3a197901337bf6dc25920684107fdf1', '2020-02-07', 4),
('Ritu', 'Kumar', 'ritu21', 'ritu21@outlook.com', 9842569830, '', 'female', '8cb2237d0679ca88db6464eac60da96345513964', '2020-02-11', 0),
('Aisha', 'Singh', 'singhaisha', 'singhaisha@test.com', 9912548922, '', 'female', '541ce4f28732b2e1bedb871b057ff726f3925dcf', '2020-02-13', 0),
('Karishma', 'Kumari', 'karishma12', 'karishma12@outlook.com', 9921320934, '', 'female', 'd168c8156634bc65cec5a94e53e6bc21f42af7e6', '2020-02-10', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employer`
--
ALTER TABLE `employer`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`Job_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Message_Id`);

--
-- Indexes for table `opted`
--
ALTER TABLE `opted`
  ADD PRIMARY KEY (`Job_id`);

--
-- Indexes for table `seeker`
--
ALTER TABLE `seeker`
  ADD PRIMARY KEY (`Mobile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `Job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Message_Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `job`
--
ALTER TABLE `job`
  ADD CONSTRAINT `job_ibfk_1` FOREIGN KEY (`Username_fk`) REFERENCES `employer` (`Username`);

--
-- Constraints for table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`Mobile_fk`) REFERENCES `seeker` (`Mobile`);

--
-- Constraints for table `qualification`
--
ALTER TABLE `qualification`
  ADD CONSTRAINT `qualification_ibfk_1` FOREIGN KEY (`user_fk`) REFERENCES `seeker` (`Mobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
