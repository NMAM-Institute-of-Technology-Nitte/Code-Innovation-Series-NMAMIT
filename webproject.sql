-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 10:10 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Pass` varchar(20) NOT NULL,
  `PhoneNo` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`FirstName`, `LastName`, `Pass`, `PhoneNo`, `Email`) VALUES
('Jaya', 'Shetty', '1111', '1234567890', 'jay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_name` text NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `course_url` varchar(200) NOT NULL,
  `course_cost` varchar(200) NOT NULL,
  `course_category` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_name`, `course_code`, `course_url`, `course_cost`, `course_category`) VALUES
('programming in C++', 'c++22343', 'https://www.yom/watch?v=eIrMbAQSU34', '300', 'c++ programming'),
('DBMS', 'dbms33', 'https://www.yom/watch?v=eIrMbAQSU34764239', '1000', 'DBMS'),
('programming in java', 'java2-0008', 'https://www.youtube.com/watch?v=eIrMbAQSU34', '500', 'java'),
('python', 'xbksaudy3', 'https://www.yom/watch?v=eIrMbAQSU34764239', '1567', 'python programming');

-- --------------------------------------------------------

--
-- Table structure for table `feedbackform`
--

CREATE TABLE `feedbackform` (
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `telnum` varchar(10) NOT NULL,
  `feedback` text NOT NULL,
  `rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbackform`
--

INSERT INTO `feedbackform` (`firstname`, `lastname`, `email`, `telnum`, `feedback`, `rating`) VALUES
('mahima', 'biswas', 'mahi@gmail.com', '1234567890', 'amazing...', 3),
('Jenisha', 'Quadros', 'quadros@gmail.com', '8793132056', 'nice....', 3),
('khushi', 'shetty', 'sweetcookie274@gmail.com', '5781389522', 'Awesome!!', 5);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `PhoneNo` varchar(10) NOT NULL,
  `Pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`FirstName`, `LastName`, `Email`, `PhoneNo`, `Pass`) VALUES
('abc', 'xyz', 'abc@gmail.com', '4568791235', '1234'),
('Khushi', 'Shetty', 'khushishetty@gmail.com', '8105199132', '1234'),
('Maithili', 'Rao', 'maithili@gmail.com', '4512785236', '1111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_code`);

--
-- Indexes for table `feedbackform`
--
ALTER TABLE `feedbackform`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
