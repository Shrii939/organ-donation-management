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
-- Table structure for table `organ_bank`
--

CREATE TABLE `organ_bank` (
  `organ_id` varchar(5) NOT NULL,
  `test_details` varchar(50) DEFAULT NULL,
  `issues` varchar(50) DEFAULT NULL,
  `org_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organ_bank`
--

INSERT INTO `organ_bank` (`organ_id`, `test_details`, `issues`, `org_type`) VALUES
('101', 'passed', 'minor issue', 'eye'),
('101', 'passed', 'no issuues', 'kidney'),
('102', 'passed', 'no issues', 'eye'),
('103', 'passed', 'ok\r\n', 'kidney'),
('103', 'passed', 'noo issues', 'liver'),
('104', 'passed', 'no issues', 'eye'),
('104', 'passed', 'no', 'kidney'),
('105', 'passed', 'ok', 'liver'),
('106', 'passed', 'no', 'brain');

--
-- Triggers `organ_bank`
--
DELIMITER $$
CREATE TRIGGER `available` AFTER INSERT ON `organ_bank` FOR EACH ROW insert into trigger1 values(new.organ_id,new.test_details,new.org_type,now())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organ_bank`
--
ALTER TABLE `organ_bank`
  ADD PRIMARY KEY (`organ_id`,`org_type`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
