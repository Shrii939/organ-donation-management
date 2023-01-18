-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2023 at 12:52 PM
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
  `organ_id` int(5) NOT NULL,
  `test_detail` varchar(50) DEFAULT NULL,
  `organ_type` varchar(10) DEFAULT NULL,
  `now_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trigger1`
--

INSERT INTO `trigger1` (`organ_id`, `test_detail`, `organ_type`, `now_Date`) VALUES
(105, 'tested ok', 'heart', '2023-01-11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trigger1`
--
ALTER TABLE `trigger1`
  ADD PRIMARY KEY (`organ_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
