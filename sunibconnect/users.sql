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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentId` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `studentId`, `email`, `password`, `gender`, `major`, `region`, `created_at`, `updated_at`) VALUES
(1, 'Bryan', '2503002567', 'bryan@gmail.com', '$2y$10$iLsK5/bB0HequVs5JAWD9e.zLFav9iKfEcmETQJ7rq3v8kX2duQFy', 'male', 'computer_science', 'kemanggisan', '2023-06-18 13:37:00', '2023-06-18 13:37:00'),
(3, 'dummy', '0', 'dummy@gmail.com', '$2y$10$c2ueZpwwkjarLSutjAh4E.k1sHSMczniuo5.RqxFF0.Aay/WfNl5y', 'male', 'business', 'bandung', '2023-06-19 11:59:50', '2023-06-19 11:59:50'),
(4, 'Fabian', '2504013538', 'fabian@gmail.com', '$2y$10$0CS.BhbiT4NE3K9uvhYy7OXCMOI.L5ywI/m6KAdjVRv8iBma6xG76', 'male', 'computer_science', 'kemanggisan', '2023-06-20 08:03:23', '2023-06-20 08:03:23'),
(5, 'Jason', '2402569843', 'jasonW@gmail.com', '$2y$10$VKrWKR9mVtIg8mbimN5AWui5doqFt3mjIz1jHVrtC35uVGULmSZe2', 'male', 'computer_science', 'kemanggisan', '2023-06-21 03:46:34', '2023-06-21 03:46:34'),
(6, 'test', '123', 'test@gmail.com', '$2y$10$H4xFhPNR8SKqFZYHgtHBVOUbt./G1pR7s9D3M5Nzaqqj9k6RyUhFC', 'female', 'engineering', 'malang', '2023-06-21 22:58:32', '2023-06-21 22:58:32'),
(7, 'user', '111', 'user@gmail.com', '$2y$10$ylki453fAwda6lgqKxp.B.e5abonj/xgs7WswyTlYjxSzugLvRtd.', 'male', 'computer_science', 'semarang', '2023-06-21 23:01:18', '2023-06-21 23:01:18'),
(8, 'user2', '222', 'user2@gmail.com', '$2y$10$DPsJbQkW.vTE/8UfeijbbOmWlcQRWHeWwutCNZu3fvPLABYYrnMAC', 'female', 'computer_science', 'semarang', '2023-06-21 23:02:35', '2023-06-21 23:02:35'),
(9, 'user3', '333', 'user3@gmail.com', '$2y$10$zcVfK2Ciw8UWZsM6EmT9jOz7PG043mID1howVkpr8R7OtAW9WIvRi', 'male', 'business', 'bekasi', '2023-06-21 23:05:14', '2023-06-21 23:05:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
