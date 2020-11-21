-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2020 at 07:24 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `time`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'pass');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `aid` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `pincode` varchar(15) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`aid`, `name`, `email`, `phone`, `dob`, `gender`, `address`, `pincode`, `city`) VALUES
(1, 'sachinkrishna', 'krishsachin@gmail.com', '9800789655', '2020-11-07', 'male', ' abc apartment, 5th cross ,urwastore', '575007', 'mangalore'),
(2, 'samit d', 'samitd123@gmail.com', '9008877665', '2020-11-02', 'male', 'sai palace ,4th cross gandhinagar', '567899', 'mangaluru'),
(3, 'aman r shetty', 'amanrshetty@gmail.com', '8976112300', '2000-08-17', 'male', 'skyblue towers ,ring road ', '456789', 'kanpur'),
(4, 'rohit s rao', 'rrrao34@gmail.com', '7998832111', '2020-11-20', 'male', 'ocean view nehru maidan,4th cross', '578909', 'mangalore');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `aid` int(11) NOT NULL,
  `regno` varchar(20) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `model` varchar(50) DEFAULT NULL,
  `pick` varchar(20) DEFAULT NULL,
  `sdate` date DEFAULT NULL,
  `stime` time DEFAULT NULL,
  `servicetype` varchar(50) DEFAULT NULL,
  `cost` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`aid`, `regno`, `type`, `model`, `pick`, `sdate`, `stime`, `servicetype`, `cost`) VALUES
(1, 'ka19mz2312', 'four wheeler', 'suzuki celerio', 'yes', '2020-11-26', '12:00:00', 'WHEEL REPLACEMENT', '4000'),
(2, 'an67io6788', 'four wheeler', 'hyundai i20', 'yes', '2020-11-27', '12:00:00', 'BODY REPAIR', '5500'),
(3, 'up56kn1299', 'four wheeler', 'honda city', 'yes', '2020-11-18', '01:00:00', 'RUNNING REPAIRS', '6000'),
(4, 'ka19mz2390', 'four wheeler', 'honda crz', 'no', '2020-11-15', '01:00:00', 'WHEEL REPLACEMENT', '4000');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `username`, `password`) VALUES
('name1', 'name1@gmail.com', 'name'),
('dhruva', 'dhruva@nmamit.in', 'dhruva'),
('samit', 'samit@gmail.com', 'samit'),
('sachinnk', 'sachin@gmail.com', 'sachin'),
('name1', 'name1@gmail.com', 'name'),
('name', 'name1@gmail.com', 'name'),
('name1', 'name@gmail.com', 'name'),
('ryan', 'ryan@gmail.com', 'ryan'),
('ankit', 'ankit@gmail.com', 'ankit'),
('rowel', 'rowel@gmail.com', 'rowel');

-- --------------------------------------------------------

--
-- Table structure for table `testing`
--

CREATE TABLE `testing` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(60) NOT NULL,
  `car_regno` varchar(20) NOT NULL,
  `car_model` varchar(50) NOT NULL,
  `service_date` date NOT NULL,
  `service_time` time NOT NULL,
  `service` varchar(30) NOT NULL,
  `service_cost` varchar(20) NOT NULL,
  `pincode` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testing`
--

INSERT INTO `testing` (`name`, `email`, `phone_number`, `date_of_birth`, `gender`, `address`, `car_regno`, `car_model`, `service_date`, `service_time`, `service`, `service_cost`, `pincode`) VALUES
('david', 'david@gmail.com', '8977569896', '0000-00-00', 'male', 'rtyyrrr', 're45ty6578', 'ford', '2020-11-29', '10:00:00', 'PERIODIC MAINTENANCE', '345', NULL),
('john', 'john@gmail.com', '23445643', '2020-11-05', 'male', 'texas street , 4th lane', 'ny23zd3456', 'tesla', '2020-11-28', '10:00:00', 'BODY REPAIR', '122', NULL),
('sammy', 'sam@gmail.com', '5677654566', '2020-11-08', 'male', 'werryu,nmkjk', 'er45yu7689', 'jyhyui', '2020-11-02', '04:00:00', 'PERIODIC MAINTENANCE', '122', NULL),
('', '', '', '0000-00-00', 'male', '', '', '', '0000-00-00', '00:00:00', 'PERIODIC MAINTENANCE', '', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_ibfk_1` FOREIGN KEY (`aid`) REFERENCES `customers` (`aid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
