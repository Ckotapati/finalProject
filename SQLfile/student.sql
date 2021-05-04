-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2021 at 05:37 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `courseID` int(11) NOT NULL,
  `course_name` varchar(50) DEFAULT NULL,
  `semester` int(11) DEFAULT NULL,
  `instructor` varchar(30) DEFAULT NULL,
  `classroom` varchar(20) DEFAULT NULL,
  `Timings` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`courseID`, `course_name`, `semester`, `instructor`, `classroom`, `Timings`) VALUES
(1, 'web programming', 2021, 'samuel', 'B 26', '1pm --3pm'),
(2, 'cyber security', 2021, 'paul', 'B 27', '1pm --3pm'),
(3, 'computer networks', 2021, 'daniel', 'B 28', '1pm --3pm');

-- --------------------------------------------------------

--
-- Table structure for table `enrollment_details`
--

CREATE TABLE `enrollment_details` (
  `student_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrollment_details`
--

INSERT INTO `enrollment_details` (`student_id`, `course_id`) VALUES
(1, 2),
(1, 3),
(2, 2),
(NULL, 2),
(4, 1),
(4, 1),
(4, 1),
(12, 1),
(12, 2);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `Id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Id`, `name`, `birth_date`, `gender`, `email`, `password`) VALUES
(1, 'jhon', '1992-04-16', 'Male', 'jhon@gmail.com', 'jhon123'),
(2, 'Hari', '1992-05-16', 'Male', 'hari@gmail.com', 'hari123'),
(3, 'candice', '1993-05-21', 'Female', 'candice@gmail.com', 'candice123'),
(4, 'abc', '2021-04-03', 'female', 'abc@gmail.com', 'abc'),
(10, 'xyz', '2021-04-02', 'male', 'xyz@gmail.com', 'xyz'),
(11, 'poi', '2021-04-10', 'female', 'poi@gmail.com', 'poi'),
(12, 'teja', '2021-04-01', 'male', 'teja@gmail.com', 'teja');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `enrollment_details`
--
ALTER TABLE `enrollment_details`
  ADD KEY `student_id` (`student_id`),
  ADD KEY `course_id` (`course_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `courseID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `enrollment_details`
--
ALTER TABLE `enrollment_details`
  ADD CONSTRAINT `enrollment_details_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`Id`),
  ADD CONSTRAINT `enrollment_details_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course_info` (`courseID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
