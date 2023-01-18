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
-- Table structure for table `organ_bank`
--

CREATE TABLE `organ_bank` (
  `organ_id` int(5) NOT NULL,
  `test_details` varchar(50) DEFAULT NULL,
  `issues` varchar(50) DEFAULT NULL,
  `org_type` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organ_bank`
--

INSERT INTO `organ_bank` (`organ_id`, `test_details`, `issues`, `org_type`) VALUES
(101, 'passed', 'ok', 'kidney'),
(105, 'tested ok', 'no issues', 'heart'),
(202, 'passed', 'no', 'brain');

--
-- Triggers `organ_bank`
--
DELIMITER $$
CREATE TRIGGER `available` AFTER INSERT ON `organ_bank` FOR EACH ROW insert into trigger1 VALUES(new.organ_id,new.test_details,new.org_type,NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organ_bank`
--
ALTER TABLE `organ_bank`
  ADD PRIMARY KEY (`organ_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `organ_bank`
--
ALTER TABLE `organ_bank`
  ADD CONSTRAINT `organ_bank_ibfk_1` FOREIGN KEY (`organ_id`) REFERENCES `organ` (`organ_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
