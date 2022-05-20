-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 10:37 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cvwebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `personalinformation`
--

CREATE TABLE `personalinformation` (
  `id` int(11) NOT NULL,
  `fullName` varchar(200) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dayNum` int(2) NOT NULL,
  `seriesAbbreviation` varchar(3) NOT NULL,
  `monthName` varchar(5) NOT NULL,
  `yearNum` int(4) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `placeOfBirth` varchar(255) NOT NULL,
  `jobTittle` text NOT NULL,
  `yearOf Experience` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personalinformation`
--

INSERT INTO `personalinformation` (`id`, `fullName`, `gender`, `dayNum`, `seriesAbbreviation`, `monthName`, `yearNum`, `nationality`, `placeOfBirth`, `jobTittle`, `yearOf Experience`) VALUES
(1, 'Aya Mazen Alarayshi', 'Female', 7, 'th', 'Apr.', 2002, 'Palestinian', 'Gaza', 'Software Engineering', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personalinformation`
--
ALTER TABLE `personalinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personalinformation`
--
ALTER TABLE `personalinformation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
