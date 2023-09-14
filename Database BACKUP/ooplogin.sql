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
-- Database: `ooplogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(10) NOT NULL,
  `users_uid` varchar(255) NOT NULL,
  `users_pwd` varchar(255) NOT NULL,
  `users_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(1, '', '$2y$10$rlp9d9NQRLHygnEGUhQoMu33dVfqFLlzXarE8EVQZKliaD04kMvby', 'test1@gmail.com'),
(2, 'test', '$2y$10$x6Qcygy4EqeN9Zyvo1UYaOm5oaPBtxoxpHaBI0f/jesw89Hl5Gdna', 'test2@gmail.com'),
(3, 'hitesh', '$2y$10$WBD0HVHw0GiE161yvxtafeWWSwONGjrfd2lXtomQakJEUlOG/eh7i', 'hitesh@gmail.com'),
(4, 'harry', '$2y$10$ayPo7rHRda4lVA3LNg717eEZH6IPWyBLS1FZPE8u7YfOOin7kaJGK', 'harry@gmail.com'),
(5, 'mandeep', '$2y$10$iHbsGH8qS9.RD97uusk7q.4gFKOhxcknpT3MUbAWpxh7HJgJHhTzi', 'man@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
