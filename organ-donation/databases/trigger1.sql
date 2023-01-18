-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 04:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `organ_donation`
--

-- --------------------------------------------------------

--
-- Table structure for table `trigger1`
--

CREATE TABLE `trigger1` (
  `organ_id` varchar(5) NOT NULL,
  `test_details` varchar(250) DEFAULT NULL,
  `organ_type` varchar(25) NOT NULL,
  `now_Date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trigger1`
--

INSERT INTO `trigger1` (`organ_id`, `test_details`, `organ_type`, `now_Date`) VALUES
('103', 'passed', 'kidney', '2023-01-18 16:08:44'),
('106', 'passed', 'brain', '2023-01-18 20:49:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trigger1`
--
ALTER TABLE `trigger1`
  ADD PRIMARY KEY (`organ_id`,`organ_type`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `trigger1`
--
ALTER TABLE `trigger1`
  ADD CONSTRAINT `trigger1_ibfk_1` FOREIGN KEY (`organ_id`) REFERENCES `organ_bank` (`organ_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
