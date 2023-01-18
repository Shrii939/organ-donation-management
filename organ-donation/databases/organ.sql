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
-- Table structure for table `organ`
--

CREATE TABLE `organ` (
  `organ_id` varchar(5) NOT NULL,
  `donor_id` varchar(5) NOT NULL,
  `organ_type` varchar(25) NOT NULL,
  `details` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `organ`
--

INSERT INTO `organ` (`organ_id`, `donor_id`, `organ_type`, `details`) VALUES
('', '', '', ''),
('101', '1', 'eye', 'he is healthy to donate kidney'),
('104', '2', 'kidney', 'no'),
('105', '4', 'liver', 'ok'),
('106', '3', 'brain', 'ok');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `organ`
--
ALTER TABLE `organ`
  ADD PRIMARY KEY (`organ_id`,`donor_id`,`organ_type`),
  ADD KEY `donor_id` (`donor_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `organ`
--
ALTER TABLE `organ`
  ADD CONSTRAINT `organ_ibfk_1` FOREIGN KEY (`donor_id`) REFERENCES `donor` (`donor_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
