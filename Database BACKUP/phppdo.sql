-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2023 at 08:43 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppdo`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentstable`
--

CREATE TABLE `studentstable` (
  `id` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `class` int(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `studentstable`
--

INSERT INTO `studentstable` (`id`, `sname`, `age`, `class`, `gender`) VALUES
(1, 'vinod1', 16, 12, 'male'),
(2, 'vinod2', 16, 12, 'male'),
(3, 'vidod3', 17, 12, 'male'),
(5, 'vinod', 17, 12, 'male'),
(6, 'thapatechnical', 16, 12, 'male'),
(7, 'thapatechnical1', 16, 12, 'male'),
(8, 'thapatechnical2', 16, 12, 'male'),
(9, 'thapatechnical3', 16, 12, 'male'),
(10, 'thapatechnical4', 16, 12, 'male'),
(11, 'thapatechnical4', 16, 12, 'male'),
(12, 'thapatechnical4', 16, 12, 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentstable`
--
ALTER TABLE `studentstable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentstable`
--
ALTER TABLE `studentstable`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
