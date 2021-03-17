-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2021 at 05:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` bigint(20) NOT NULL,
  `username` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `auth_key` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `pswdFailedAttempts` int(11) DEFAULT NULL,
  `password` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `verification_token` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `createdUser` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `updatedUser` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `createdTime` datetime NOT NULL,
  `updatedTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `name`, `auth_key`, `status`, `pswdFailedAttempts`, `password`, `password_hash`, `password_reset_token`, `email`, `verification_token`, `createdUser`, `updatedUser`, `createdTime`, `updatedTime`) VALUES
(0, 'karan', NULL, '', 1, NULL, '1234', '', NULL, 'karan25@@gmail.com\r\n', NULL, '', '', '2021-03-17 11:30:35', '2021-03-17 11:30:35'),
(1, 'balaarul', 'bala', '007OojGHPBXwngl5UE8so5NBkUuyhKf_', 1, NULL, 'balamayooran', '$2y$13$6rHoTJhsber6KZ.Ny0p4A.R77cfliz6xwEFTea/jqrOsb7oC3hEpC', NULL, 'balaarul@gmail.com', NULL, 'admin', 'admin', '2021-03-17 11:35:55', '2021-03-17 11:35:55'),
(2, 'piriyaarav', 'pirii', '', 1, NULL, 'piriyaarav', '$2y$13$6rHoTJhsber6KZ.Ny0p4A.R77cfliz6xwEFTea/jqrOsb7oC3hEpC', NULL, 'piriya23@gmail.com', NULL, 'admin', 'admin', '2021-03-17 11:38:53', '2021-03-17 11:38:53'),
(3, 'aarav', 'aravinth', '', 1, NULL, 'aravppd', '$2y$13$6rHoTJhsber6KZ.Ny0p4A.R77cfliz6xwEFTea/jqrOsb7oC3hEpC', NULL, 'arav24@gmail.com', NULL, 'admin', 'admin', '2021-03-17 11:41:34', '2021-03-17 11:41:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UK_USERNAME` (`username`),
  ADD UNIQUE KEY `UK_EMAIL` (`email`),
  ADD UNIQUE KEY `UK_RESET_TOKEN` (`password_reset_token`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
