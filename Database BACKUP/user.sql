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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'admin', 'asfdsf', '$2y$10$PUL7smSlnneHtZx/hI2gNegRQ5CRGGiuCqNwdNWIHjQ'),
(3, 'hitesh', 'hitesh', '$2y$10$W4uigu4gtXVY8W9tiwMs.e8fMZmQTF2dnabvsxl.qGi'),
(4, 'one', 'one', '$2y$10$CwdnvJ5X5OG8UIuWF3bPquIbaL2Bud22FR2LBzt3mYJ2H/.9YZ6F2'),
(5, 'mandeep', 'mandeep', '$2y$10$GfE5j52OPgTqHg.0sH528Oa2iXO.Zj4Ug3PZ5aFYtrhpgBZG6PJke'),
(6, 'two', 'two', '$2y$10$oQX7SPjs6tnlbSdjxHakpe6P2jt0AtvFVX4wRBGS4pMM68ILjgn4i'),
(7, 'komal', 'komal', '$2y$10$VtsCdVrqAz/Z0cd.7NuqruvuocdhJUifnGSpbCCddMCHtSgIjyEuO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
