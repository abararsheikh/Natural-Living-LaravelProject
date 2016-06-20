-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 05:14 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `natural_living`
--

-- --------------------------------------------------------

--
-- Table structure for table `bodydatatbl`
--

CREATE TABLE `bodydatatbl` (
  `id` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `date_Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_Height` decimal(10,0) NOT NULL,
  `user_Weight` decimal(10,0) NOT NULL,
  `user_Fat` decimal(10,0) NOT NULL,
  `user_Water` decimal(10,0) NOT NULL,
  `user_Muscles` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bodydatatbl`
--

INSERT INTO `bodydatatbl` (`id`, `user_Id`, `date_Created`, `user_Height`, `user_Weight`, `user_Fat`, `user_Water`, `user_Muscles`) VALUES
(19, 1, '2016-06-16 19:32:25', '123', '155', '10', '12', '12'),
(20, 1, '2016-06-16 23:53:15', '0', '2', '0', '2', '0'),
(21, 1, '2016-06-17 00:12:18', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `bodymeasurementtbl`
--

CREATE TABLE `bodymeasurementtbl` (
  `bodyMeasurementID` int(11) NOT NULL,
  `user_Id` int(11) NOT NULL,
  `date_Created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_Chest` int(11) NOT NULL,
  `user_BicepsL` int(11) NOT NULL,
  `user_BicepsR` int(11) NOT NULL,
  `user_Thighs` int(11) NOT NULL,
  `user_Calves` int(11) NOT NULL,
  `user_Waist` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bodymeasurementtbl`
--

INSERT INTO `bodymeasurementtbl` (`bodyMeasurementID`, `user_Id`, `date_Created`, `user_Chest`, `user_BicepsL`, `user_BicepsR`, `user_Thighs`, `user_Calves`, `user_Waist`) VALUES
(4, 1, '2016-06-16 20:18:12', 123, 13, 12, 12, 12, 12),
(5, 1, '2016-06-16 23:53:06', 0, 3, 0, 5, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('er.abrar@gmail.com', 'dec1bfd9b40aae39ae4704dd88a28e79a9f0845cc40475894fa2875405a12449', '2016-05-31 20:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'abrar', 'er.abrar@gmail.com', '$2y$10$/zU6h2v24BXtckZVi1EOf.HajLxsrXadjRQtxvLBM3K0npk3cfM/K', 'auoRfj7PjOz2v5bAvFy71fsInqcpPm6hrtKUXGM1bl0WoZsss7zFgvgSXO5k', '2016-05-31 20:02:46', '2016-05-31 20:03:39'),
(2, 'loveleen', 'loveleen.k.anand@gmail.com', '$2y$10$Wpde3jHxHpben8kqhFw6d.BD78PEwX2Ay7NBgy4.O6qRSItaQUyPu', 'FIxR8iCg1T0mpUCdClyTCXFrZeHZWNSlDlMWZ236d4XEqb3FeyoJRESUbsQN', '2016-06-09 02:21:06', '2016-06-11 23:55:59'),
(3, 'test', 'ishandloveleen@gmail.com', '$2y$10$MZ1ve8oRHh5pI/N2XmhhDOilUC.HtMazTfSfzl1YaZqT9Y/yOBtaO', 'msrZU6arUKqw44ajubvXCyIeAJQkIuRktOcWd8TbdcgTVb7YGb5P4rcXE42Y', '2016-06-11 21:33:12', '2016-06-12 02:00:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bodydatatbl`
--
ALTER TABLE `bodydatatbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bodymeasurementtbl`
--
ALTER TABLE `bodymeasurementtbl`
  ADD PRIMARY KEY (`bodyMeasurementID`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

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
-- AUTO_INCREMENT for table `bodydatatbl`
--
ALTER TABLE `bodydatatbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `bodymeasurementtbl`
--
ALTER TABLE `bodymeasurementtbl`
  MODIFY `bodyMeasurementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
