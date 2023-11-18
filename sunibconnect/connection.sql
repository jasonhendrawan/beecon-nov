-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 09:22 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunibconnect`
--

-- --------------------------------------------------------

--
-- Table structure for table `connection`
--

CREATE TABLE `connection` (
  `connectId` int(11) NOT NULL,
  `user1` varchar(255) DEFAULT NULL,
  `user2` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connection`
--

INSERT INTO `connection` (`connectId`, `user1`, `user2`, `status`) VALUES
(1, 'Bryan', 'Fabian', 'pending'),
(2, 'Jason', 'Fabian', 'connected'),
(3, 'Bryan', 'Jason', 'connected'),
(4, 'user', 'user3', 'pending'),
(5, 'user', 'user2', 'connected'),
(6, 'user2', 'user3', 'connected');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `connection`
--
ALTER TABLE `connection`
  ADD PRIMARY KEY (`connectId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `connection`
--
ALTER TABLE `connection`
  MODIFY `connectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
