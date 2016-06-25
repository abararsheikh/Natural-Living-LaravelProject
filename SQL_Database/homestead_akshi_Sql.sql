-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2016 at 07:49 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homestead`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'antipasti', '2016-06-25 21:22:04', '2016-06-25 21:22:04'),
(2, 'primi', '2016-06-25 21:22:04', '2016-06-25 21:22:04'),
(3, 'secondi', '2016-06-25 21:22:04', '2016-06-25 21:22:04'),
(4, 'dolci e dessert', '2016-06-25 21:22:04', '2016-06-25 21:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantita` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `type`, `quantita`, `created_at`, `updated_at`) VALUES
(1, 'olio di oliva', '', NULL, '2016-03-01 21:19:45', '2016-03-01 21:19:45'),
(2, 'pollo', '', NULL, '2016-03-01 21:19:45', '2016-03-01 21:19:45'),
(3, 'patate', '', NULL, '2016-03-01 21:19:45', '2016-03-01 21:19:45'),
(4, 'aglio', '', NULL, '2016-03-01 21:19:45', '2016-03-01 21:19:45'),
(6, 'prezzemolo', '', NULL, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(7, 'vongole', '', NULL, '2016-03-02 01:31:59', '2016-03-25 19:08:38'),
(8, 'vino', '', NULL, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(9, 'pomodori', '', NULL, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(10, 'pasta filo', '', NULL, '2016-03-02 02:28:41', '2016-03-02 02:28:41'),
(11, 'panna fresca', '', NULL, '2016-03-02 02:28:41', '2016-03-02 02:28:41'),
(12, 'sale', '', NULL, '2016-03-02 02:28:41', '2016-03-02 02:28:41'),
(13, 'uova', '', NULL, '2016-03-02 02:28:41', '2016-03-02 02:28:41'),
(14, 'parmigiano', '', NULL, '2016-03-02 02:28:41', '2016-03-02 02:28:41'),
(15, 'erba cipollina', '', NULL, '2016-03-02 02:28:41', '2016-03-02 02:28:41'),
(16, 'butto', '', NULL, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(17, 'scorze di arancia', '', NULL, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(18, 'zucchero', '', NULL, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(19, 'gocce di cioccolato', '', NULL, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(20, 'farina', '', NULL, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(21, 'fecola', '', NULL, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(22, 'uovo', '', NULL, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(23, 'carne di cavallo', '', NULL, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(24, 'alloro', '', NULL, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(25, 'dado', '', NULL, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(26, 'vino binaco', '', NULL, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(27, 'panna', '', NULL, '2016-03-03 19:54:09', '2016-03-03 19:54:09'),
(29, 'pesche', '', NULL, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(30, 'amido di mais', '', NULL, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(31, 'burro', '', NULL, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(32, 'aceto', '', NULL, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(33, 'limone', '', NULL, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(34, 'ceci', '', NULL, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(35, 'olive nere', '', NULL, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(36, 'pomodoro', '', NULL, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(37, 'basilico', '', NULL, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(38, 'pepe', '', NULL, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(39, 'tonno', '', NULL, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(40, 'cipollotti', '', NULL, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(41, 'grana padano', '', NULL, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(42, 'pangrattato', '', NULL, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(43, 'pasta brisée', '', NULL, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(44, 'prosciutto', '', NULL, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(45, 'scalogni', '', NULL, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(46, 'brodo vegetale', '', NULL, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(47, 'estratto di carne', '', NULL, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(49, 'nocciole', '', NULL, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(50, 'cioccolato', '', NULL, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(51, 'lievito', '', NULL, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(52, 'stracchino', '', NULL, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(53, 'agretti', '', NULL, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(54, 'latte', '', NULL, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(55, 'cipolla', '', NULL, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(56, 'spaghetti', '', NULL, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(57, 'fagiolini', '', NULL, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(58, 'albumi', '', NULL, '2016-03-08 01:13:48', '2016-03-08 01:13:48'),
(59, 'cannella', '', NULL, '2016-03-08 01:13:48', '2016-03-25 18:45:11'),
(60, 'lenticchie', '', NULL, '2016-03-25 18:46:02', '2016-03-25 18:46:02'),
(61, 'Semolino', '', NULL, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(62, 'pecorino', '', NULL, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(63, 'noce moscata', '', NULL, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(64, 'cacao', '', NULL, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(65, 'marsala', '', NULL, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(66, 'ricotta', '', NULL, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(67, 'strutto', '', NULL, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(68, 'ciliege', '', NULL, '2016-03-25 19:03:45', '2016-03-25 19:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `ingredient_to_recipes`
--

CREATE TABLE `ingredient_to_recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `ingredient_id` int(10) UNSIGNED NOT NULL,
  `recipe_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ingredient_to_recipes`
--

INSERT INTO `ingredient_to_recipes` (`id`, `ingredient_id`, `recipe_id`, `created_at`, `updated_at`) VALUES
(6, 4, 4, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(7, 6, 4, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(8, 7, 4, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(9, 8, 4, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(10, 1, 4, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(11, 9, 4, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(14, 15, 5, '2016-03-02 02:28:41', '2016-03-03 20:47:39'),
(18, 16, 6, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(19, 17, 6, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(20, 18, 6, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(21, 19, 6, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(22, 20, 6, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(23, 21, 6, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(24, 22, 6, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(25, 23, 7, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(26, 20, 7, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(27, 24, 7, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(28, 25, 7, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(29, 1, 7, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(30, 26, 7, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(31, 12, 7, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(32, 12, 5, '2016-03-03 20:52:04', '2016-03-03 20:52:04'),
(33, 27, 5, '2016-03-03 20:52:04', '2016-03-03 20:52:04'),
(34, 22, 5, '2016-03-03 20:52:04', '2016-03-03 20:52:04'),
(35, 10, 5, '2016-03-03 20:52:04', '2016-03-03 20:52:04'),
(36, 14, 5, '2016-03-03 20:52:04', '2016-03-03 20:52:04'),
(37, 2, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(38, 29, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(39, 18, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(40, 30, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(41, 31, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(42, 32, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(43, 33, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(44, 12, 8, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(45, 34, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(46, 3, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(47, 35, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(48, 36, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(49, 4, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(50, 37, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(51, 1, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(52, 12, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(53, 38, 9, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(54, 9, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(55, 39, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(56, 40, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(57, 41, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(58, 42, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(59, 1, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(60, 12, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(61, 38, 10, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(62, 2, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(63, 43, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(64, 44, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(65, 45, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(66, 22, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(67, 14, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(68, 31, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(69, 46, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(70, 1, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(71, 12, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(72, 38, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(73, 47, 11, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(74, 20, 12, '2016-03-08 00:29:23', '2016-03-08 00:29:23'),
(76, 31, 12, '2016-03-08 00:29:23', '2016-03-08 00:29:23'),
(77, 13, 12, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(78, 49, 12, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(79, 50, 12, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(80, 51, 12, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(81, 12, 12, '2016-03-08 00:29:24', '2016-03-08 00:29:24'),
(82, 20, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(83, 52, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(84, 53, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(85, 31, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(86, 41, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(87, 54, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(88, 22, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(89, 55, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(90, 33, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(91, 1, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(92, 12, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(93, 38, 13, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(94, 56, 14, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(95, 36, 14, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(96, 57, 14, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(97, 39, 14, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(98, 6, 14, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(99, 4, 14, '2016-03-08 01:11:06', '2016-03-08 01:11:06'),
(100, 1, 14, '2016-03-08 01:11:06', '2016-03-08 01:11:06'),
(101, 12, 14, '2016-03-08 01:11:06', '2016-03-08 01:11:06'),
(102, 50, 15, '2016-03-08 01:13:48', '2016-03-08 01:13:48'),
(103, 58, 15, '2016-03-08 01:13:48', '2016-03-08 01:13:48'),
(104, 27, 15, '2016-03-08 01:13:48', '2016-03-08 01:13:48'),
(105, 18, 15, '2016-03-08 01:13:48', '2016-03-08 01:13:48'),
(106, 54, 15, '2016-03-08 01:13:48', '2016-03-08 01:13:48'),
(107, 59, 15, '2016-03-08 01:13:48', '2016-03-08 01:13:48'),
(109, 61, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(110, 22, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(111, 54, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(112, 31, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(113, 14, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(114, 12, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(115, 62, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(116, 63, 17, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(117, 20, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(118, 18, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(119, 64, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(120, 59, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(121, 13, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(122, 32, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(123, 65, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(124, 66, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(125, 50, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(126, 67, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(127, 68, 18, '2016-03-25 19:03:45', '2016-03-25 19:03:45'),
(128, 18, 12, '2016-03-25 19:06:52', '2016-03-25 19:06:52');

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
('2014_10_12_100000_create_password_resets_table', 1),
('2016_03_01_123216_create_categories_table', 1),
('2016_03_01_123430_create_ingredients_table', 1),
('2016_03_01_123631_create_recipes_table', 1),
('2016_03_01_123832_create_ingredient_to_recipes_table', 1),
('2016_03_25_113246_create_settings_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `difficult` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `minuti` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `description`, `category_id`, `user_id`, `difficult`, `minuti`, `created_at`, `updated_at`) VALUES
(4, ' Fregola con arselle', 'PRESENTAZIONE\n La fregola con le arselle, in sardo fregula con cocciula, è una ricetta tipica della Sardegna molto gustosa. Questo particolare formato di pasta di semola di grano duro ha la forma di piccole palline che vengono lavorate a mano e che sposano perfettamente minestre leggere e delicate. La fregola con le arselle può essere servita sia come primo piatto che come piatto unico magari accompagnato con altri frutti di mare e qualche totano tagliato ad anelli. Trattandosi di un prodotto tipico della Sardegna, probabilmente non sarà semplicissimo da reperire, ma non impossibile!\n\n PREPARAZIONE\n La prima cosa da fare per preparare la fregola con le arselle è quella di occuparsi proprio delle vongole, che devono essere freschissime e controllate una per una scartando quelle rotte e successivamente lasciate in ammollo per qualche ora a spurgare. In una padella versate dellolio e gli spicchi daglio (1), aspettate qualche istante che si insaporiscano e poi toglieteli (2) prima di versare le vongole (3) che avrete scolato.\n Alzate la fiamma e versate il vino (4) coprite con il coperchio (5) e lasciate cuocere qualche minuto agitando la padella, continuate fin quando tutte le arselle non saranno aperte (6).\n In un altro tegame più grande, lasciate dorare uno spicchio daglio insieme allolio (7), aggiungete il prezzemolo dopo aver tolto laglio (8) e lasciate insaporire giusto qualche istante (9).\n prima di versare il pomodoro (10) e di aggiustare di sale (11) e di pepe (12).\n Scolate le vongole (13) tenendo da parte il liquido di cottura e sgusciatele (14) avendo cura di conservarne qualcuna per la decorazione finale (15).\n Stendete un canovaccio pulito, o della garza sterile, in un colino e filtrate il liquido di cottura delle vongole (16), se fosse necessario ripetete loperazione (17) per assicurarvi un sugo senza sabbia ed eventuali residui di gusci. Nel tegame con il sugo ed il prezzemolo versate la fregola (18) e poi, mano a mano, versate il sugo delle vongole come fosse un brodo (19), aggiustate di sale (20) e di pepe (21) e continuate la cottura mescolando di tanto in tanto (22). Verso la fine della cottura aggiungete le vongole sgusciate in precedenza (23) e ancora un po di prezzemolo (24).\n Sistemate il pane carasau sul fondo di un piatto (25), versate la fregola con le arselle in superficie (26) e infine guarnite con le vongole messe da parte e del prezzemolo (27) e servite subito!\n\n ', 2, 1, 'medio', 0, '2016-03-02 01:31:59', '2016-03-02 01:31:59'),
(5, 'Le cialdine al parmigiano', 'Preparazione delle cialdine al parmigiano\n\n 1) Per preparare la ricetta delle cialdine al parmigiano, srotola i fogli di pasta fillo e dividili in tanti dischetti del diametro di 4 cm aiutandoti con un tagliapasta, poi sbatti luovo in una ciotola con la panna fresca e il sale. Dopodiché spennella i dischetti di pasta con il mix appena ottenuto.\n\n 2) Ora taglia il parmigiano reggiano a lamelle, poi pulisci le foglie di prezzemolo, maggiorana, timo ed erba cipollina con un panno bagnato. Dopodiché guarnisci metà dei dischetti con una foglia aromatica e una lamella di parmigiano, poi coprili bene con i dischi rimasti.\n\n 3) Infine pungi con una forchetta la superficie delle cialdine farcite e friggile per pochi istanti in olio ben caldo, poi scolale con un mestolo forato, mettile sulla carta assorbente in modo da eliminare lolio in eccesso e servile.\n Cialdine al parmigiano: cenni storici sul Parmigiano Reggiano\n\n Le origini del parmigiano reggiano sono molto antiche, risalgono infatti al Medioevo e vengono collocate attorno al XII secolo accanto ai grandi monasteri e castelli in cui comparvero i primi edifici destinati alla lavorazione del latte. Già nel 1200-1300 il parmigiano reggiano aveva raggiunto la standardizzazione attuale così come dimostra la citazione nel Decamerone di Boccaccio. Ciò porta inoltre a pensare che le sue origini possano risalire a diversi secoli prima e non è neanche escluso che la ricetta del parmigiano sia simile a quella del Granone Lodigiano, un altro formaggio che di tanto in tanto veniva citato nelle fonti romane. Col passare dei secoli il Reggiano, che oggi utilizziamo per preparare le cialdine al parmigiano e tante altre ricette nostrane, si è diffuso rapidamente nelle province di Parma, Reggio nellEmilia e Modena ottenendo pure la denominazione di origine protetta.\n ', 1, 4, 'medio', 0, '2016-03-02 02:28:41', '2016-03-03 19:06:59'),
(6, 'Cookies allarancia', 'Per la ricetta dei cookies allarancia, tagliate le scorze di arancia a filetti, raccoglietele in un pentolino, copritele di acqua, portatele al bollore e scolatele. Ripetete loperazione per altre due volte, poi caramellatele in padella con g 90 di zucchero e 3 cucchiai di miele; distribuitele infine su un vassoio e lasciatele raffreddare. Potete candirle il giorno prima.\n Mescolate le farine con la fecola, il lievito e un pizzico di sale; lavoratele quindi a mano con i tuorli, luovo e il burro, morbido. Alla fine unite le gocce di cioccolato, g 100 di zucchero, impastate brevemente, poi incorporate le scorze di arancia, fredde.\n Distribuite il composto, a mucchietti ben distanziati, su una teglia coperta di carta da forno, passandone alcuni nei fiocchi di cereali.\n Infornate a 175 °C per 10? circa. Sfornate i biscotti e lasciateli raffreddare su una gratella.', 4, 2, 'facile', 0, '2016-03-02 18:05:14', '2016-03-02 18:05:14'),
(7, 'Ragù di cavallo con formine di polenta', 'Per la ricetta del ragù di cavallo con formine di polenta, preparate la polenta in acqua salata, seguendo le istruzioni sulla confezione, poi suddividetela fra 6 stampini ad anello pennellati con acqua. Fate appassire il soffritto nella pentola a pressione con 2 cucchiaiate dolio e la foglia di alloro.\n\n Unite la carne trita e rosolatela. Bagnate con il vino bianco, unite un cucchiaino di concentrato di pomodoro e il dado sbriciolato. Chiudete e cuocete per 15?. Sformate la polenta, versatevi sopra il ragù e portate in tavola ben caldo.', 3, 3, 'difficile', 0, '2016-03-02 18:39:40', '2016-03-02 18:39:40'),
(8, 'Pollo in salsa alle pesche', 'Tagliate il pollo in sei pezzi, eliminando testa, zampe e interiora e ricavando 2 ali, 2 cosce e 2 mezzi petti. Passateli sulla fiamma per eliminare eventuali residui di piume (strinare), poi rosolateli in un tegame con una piccola noce di burro per 10?. Trasferite i pezzi di pollo in una pirofila e infornate a 200 °C per 20?. Togliete i petti, conservandoli al caldo, e cuocete il resto ancora per 10-15?. Sciogliete intanto in una casseruola lo zucchero con qualche goccia di succo di limone. Dopo 1?, fuori dal fuoco, versatevi 2 cucchiaiate di aceto. Tornate sul fuoco e fate sciogliere i grumi che si formano. Aggiungete 50 g di burro, poi lo sciroppo di pesche. Portatelo a bollore con un pizzico di sale e addensate con un pizzico di amido di mais diluito in acqua, fino a ottenere una salsa agrodolce. Tagliate a fette sottili le pesche sciroppate e glassatele nella salsa. Disponete il pollo in un piatto da portata, irroratelo con la salsa, circondate i pezzi con le fettine di pesca e servite guarnendo a piacere con ciuffetti di rosmarino.\n ', 3, 4, 'facile', 0, '2016-03-07 21:57:04', '2016-03-07 21:57:04'),
(9, 'Crema di ceci e palline di patate', 'Per la ricetta della crema di ceci e palline di patate, snocciolate le olive schiacciandole delicatamente con un pestacarne per far staccare la polpa dal nocciolo e tritatele poi grossolanamente. Lessate le patate per 30? circa, quindi sbucciatele, unitevi un ciuffo di prezzemolo tritato con un pezzetto di aglio, le olive tritate, sale, pepe, schiacciate tutto con uno schiacciapatate, quindi mescolate.\n\n Dividete il composto in piccole porzioni (un cucchiaino colmo) e distribuitele su un vassoio unto di olio. Conditele con un filo di olio e fatele ruotare tra i palmi delle mani formando delle palline. Mettete le palline in un vassoio, spolverizzatele con origano e pepe e fatele rotolare nel vassoio perché se ne ricoprano uniformemente.\n\n Frullate i ceci con il loro liquido di governo con mezzo mestolo di acqua, 2 cucchiai di olio e sale, ottenendo una crema liscia e abbastanza fluida. Distribuite la crema di ceci nei piatti e completateli con le palline di patate e dadini di pomodoro, foglie di basilico, pepe e un giro di olio.', 2, 3, 'medio', 0, '2016-03-08 00:17:24', '2016-03-08 00:17:24'),
(10, 'Pomodori al tonno', 'Per fare i pomodori al tonno tagliate a metà i pomodori con unincisione orizzontale; svuotateli dei semi, salateli e teneteli capovolti a spurgare. Spuntate i cipollotti, riduceteli a rondelle e saltateli velocemente in padella con un filo dolio, maggiorana, sale, pepe, quindi spegnete e mescolatevi il tonno sbriciolato. Riempite con questo composto i pomodori, spolverizzateli di formaggio e pangrattato, irrorateli dolio, sistemateli in una teglia e infornateli a 250° per 20? circa; serviteli tiepidi.', 1, 3, 'facile', 0, '2016-03-08 00:22:52', '2016-03-08 00:22:52'),
(11, 'Pie di Pasqua', 'Per fare la pie di Pasqua, fate scongelare la pasta brisée. Disossate il pollo, riducete a bocconcini la polpa ottenuta e rosolatela in padella, a fuoco vivo, con burro e olio caldi e gli scalogni a spicchi; sfumate con un dito di vino, salate, pepate e portate a cottura, coperto, senza aggiungere alcun liquido; ci vorranno circa 25? e, alla fine, togliete la carne dal sugo (che va conservato), fatela raffreddare poi mescolatela con il prosciutto a cubetti, gli asparagi sminuzzati, un trito di timo e prezzemolo e 2 cucchiai di parmigiano grattugiato.\n Stendete la pasta brisée a mm 3 di spessore poi, con parte di essa, rivestite uno stampo a guscio duovo lasciandola debordare abbondantemente.\n Versate nello stampo il misto di pollo e prosciutto, chiudete ripiegandovi sopra la pasta debordante, quindi sformate la pie a forma duovo, su una placca coperta da carta da forno; pennellatela con uovo sbattuto, guarnitela con un nastro di pasta, pennellate tutto ancora una volta e, infine, infornate a 200° per 40? circa. Servite la pie-uovo accompagnata dal sugo di pollo, precedentemente allungato con un mestolo di brodo, insaporito con un punta di estratto di carne e fatto ridurre a salsina.', 3, 1, 'difficile', 0, '2016-03-08 00:26:54', '2016-03-08 00:26:54'),
(12, 'Ciambellone bicolore', 'Per fare il ciambellone bicolore, montate a spuma il burro con lo zucchero e un pizzico di sale, unite le uova, uno alla volta, continuando a lavorare con la frusta elettrica, quindi dividete limpasto in due parti uguali e incorporate, a una, il cioccolato gianduia fuso, freddo, e metà della farina setacciata con mezza bustina di lievito;\n allaltra parte dellimpasto, invece, amalgamate le nocciole sminuzzate grossolanamente, leggermente inumidite e mescolate con la farina rimasta. Imburrate e infarinate bene uno stampo a ciambella con bordi alti (diametro cm 22), riempitelo con i due impasti a colori alternati, poi infornatelo a 170° per circa unora: se durante la cottura il dolce dovesse scurirsi troppo, copritelo con carta da forno e, prima di sfornarlo, infilatevi uno stecchino che dovrà uscire asciutto. Sfornate il ciambellone e, subito, sformatelo su una gratella lasciandolo raffreddare capovolto, quindi servitelo.', 4, 1, 'facile', 0, '2016-03-08 00:29:23', '2016-03-08 00:29:23'),
(13, 'Tortine con stracchino e agretti', 'Per la ricetta delle tortine con stracchino e agretti, impastate la farina con il burro, 80 g di grana e un pizzico di sale, ottenendo dei bricioloni; unite luovo e proseguite a impastare fino a formare un panetto. Avvolgetelo nella carta da forno, poi nella pellicola e lasciatelo riposare in frigo per 1 ora.\n\n Amalgamate lo stracchino con un filo di olio, un pizzico di sale, una macinata di pepe, la scorza grattugiata di un limone e il latte, fino a ottenere un composto cremoso. Sbucciate la cipolla e affettatela sottilmente. Sminuzzate gli agretti. Fate imbiondire la cipolla in una padella velata di olio per 1-2, poi unite gli agretti, saltateli per 1-2, salateli, quindi spegnete. Completate con 20 g di grana.\n\n Stendete la pasta a 3 mm di spessore e usatela per foderare 8 stampini (ø 8 cm, h 2 cm). Bucherellate il fondo con i rebbi della forchetta, distribuite gli agretti e completate con la crema di stracchino. Infornate a 170 °C per 10, poi coprite le tortine con un foglio di alluminio e proseguite nella cottura per 8. Sfornate, sformate e infornate di nuovo per 2. Sfornate e lasciate intiepidire prima di servire.', 1, 2, 'medio', 0, '2016-03-08 01:07:39', '2016-03-08 01:07:39'),
(14, 'Spaghetti con fagiolini, pomodoro e tonno', 'Per fare gli spaghetti con fagiolini, pomodoro e tonno, pelate i pomodori e tagliateli a pezzetti raccogliendoli in una ciotola con il succo che rilasceranno. Mescolateli poi con il tonno sbriciolato. Scaldate 4 cucchiai di olio con uno spicchio di aglio intero, un ciuffetto di prezzemolo tritato e un peperoncino a piacere; poi togliete laglio e versate lolio sul misto di tonno e pomodori. Lessate molto al dente i fagiolini, scolateli con la schiumarola tenendo la loro acqua sul fuoco, e divideteli in due per il lungo: acquisteranno lo spessore ideale per abbinarsi agli spaghetti. Rimetteteli nella loro acqua bollente insieme con gli spaghetti e il sale. Scolate infine la pasta con i fagiolini e conditela con il misto di tonno e pomodori.', 2, 2, 'facile', 0, '2016-03-08 01:11:05', '2016-03-08 01:11:05'),
(15, 'Ganache nera e meringhe', 'Per la ricetta della ganache nera, rivestite le pareti di 6 stampini troncoconici (ø cm 7) con uno strato non sottile di cioccolato temperato, poi capovolgeteli e fateli rassodare. Spezzate il cioccolato in una ciotola e versatevi la panna portata a ebollizione con un pizzico di cannella.\n\n Mescolate per sciogliere il cioccolato, fate raffreddare (ganache) e riempite fino allorlo le ciotoline ottenute sformando gli stampini; mettetele in frigo. Scaldate lo zucchero con un cucchiaio di acqua a 110 °C, versatelo a filo sugli albumi montati e continuate a montarli per 2?.\n\n Fate 6 quenelle e immergetele nel latte bollente per 2? (meringhe). Togliete dal frigo le ciotoline, unite le meringhe e decorate a piacere.', 4, 4, 'medio', 0, '2016-03-08 01:13:48', '2016-03-25 17:27:01'),
(17, 'Gnocchi alla romana', 'Giovedì gnocchi, venerdì pesce e sabato trippa! Gli gnocchi sono un antico primo piatto, preparati con le farine più varie e diffusi in tutto il mondo, anche in diverse forme. Come vuole la tradiziona romana, questi rappresentano proprio il classico piatto del giovedì, probabilmente posto in mezzo alla settimana per compensare la leggerezza del pasto del giorno successivo...un''arcana usanza che ancora oggi viene portata avanti dai cittadini romani più nostalgici. Oggi abbiamo scelto di proporvi una tipica ricetta laziale: gli gnocchi alla romana! Succulenti dischi di semolino caratterizzati da una dorata crosticina, resa così fragrante grazie all''aggiunta di burro e pecorino! Certo, a Roma, il giorno giusto per prepararli è il giovedì ma, una volta provati, ve ne innamonere a tal punto che ogni giorno sarà quello giusto per portare in tavola questi gnocchi alla romana! Il segreto? Serviteli ancora fumanti per scoprirlo!\n\n Per preparare gli gnocchi alla romana, ponete il latte in un tegame sul fuoco, e aggiungete una noce di burro, il sale (2), e un pizzico noce moscata (2); appena inizierà a bollire versatevi a pioggia il semolino (3), mescolando energicamente con una frusta, per evitare la formazione di grumi.\n Cuocete il composto a fuoco basso per qualche minuto, fino a che non si sarà addensato (4); dopodiché togliete il recipiente dal fuoco ed incorporate al composto i due tuorli (5) mescolando questa volta con un mestolo di legno (6).\n Unite anche il parmigiano (7) e mescolate il tutto nuovamente (8). A questo punto versate metà dell''impasto ancora bollente su un foglio di carta forno (9) e utilizzando le mani, dategli una forma cilindrica (10). Per non scottarvi troppo potete passare le mani sotto l''acqua fredda. Una volta ottennuto un cilindro uniforme, avvolgetelo nella carta forno (11). Ripetete la stessa operazione per la seconda metà dell''impasto tenuto da parte e riponete i due rotoli (12) in frigorifero per una ventina di minuti.\n Una volta raffreddato, otterrete un impasto compatto e con un coltello riuscirete ad ottenere dei dischi perfetti (13). Per facilitarvi nel taglio consigliamo di inumidire la lama con dell''acqua. Una volta ottenuti circa 40 pezzi disponeteli su una teglia precedentemente imburrata (14) e cospargeteli con il burro fuso, ma non bollente (15).\n Spolverizzate la superficie con il pecorino romano (16) e cuocete in forno statico preriscaldato a 200° per 20-25 minuti (se utilizzate il forno ventilato 180° per 15 minuti). Dopodichè azionate la funzione grill e lasciateli gratinare per 4-5 minuti. Una volta pronti (17) servite i vostri gnocchi alla romana ben caldi (18)!\n ', 2, 1, 'medio', 0, '2016-03-25 18:54:22', '2016-03-25 18:54:22'),
(18, 'Cannoli siciliani', 'Prepariamo le scorcie\n Se avete la possibilità usare una planetaria con lattrezzo a foglia, quindi mescolare farina, zucchero, cacao e sale. Aggiungere lo strutto  al miscuglio di farina e farlo ben amalgamare, quindi unire le uova, farle assorbire ed infine continuare a lavorare aggiungendo il Marsala e laceto fino ad ottenere un impasto non troppo morbido ma consistente. Formare una palla, avvolgerla in pellicola da cucina e riporre in frigo per almeno unora.\n Spianare limpasto ad uno spessore sottile (potete usare una sfogliatrice finendo con uno spessore simile a quello delle tagliatelle) spolverando, man mano, con la farina sia il piano di lavoro che limpasto. Quando avrete raggiunto lo spessore desiderato, ricavate dei dischetti dal diametro di circa 10 cm. (potete aiutarvi con un coppapasta). Avvolgere i dischetti nelle cannelle unte dolio, congiungendo i bordi spennellandoli con  lalbume battuto. Friggere in abbondante olio ben caldo, due-tre per volta. Non appena la pasta sarà di un bel dorato scuro scolare e mettere a raffreddare su carta assorbente da cucina.\n\n Prepariamo la crema di ricotta\n Se la ricotta è molto umida, come dovrebbe essere, farla sgocciolare in modo da eliminare la maggior parte di siero. Amalgamare bene la ricotta con lo zucchero. Lasciare riposare per unora e quindi setacciarla. A questo punto unire la cannella e il cioccolato fondente.\n\n Confezioniamo i cannoli\n Riempire le scorze con la crema e spianare le parti estreme aiutandovi con un coltello, posare una ciliegia candita alle estremità, mettere in un vassoio e spolverare con zucchero a velo e infine adagiare sul bordo la scorzetta di arancia candita.', 4, 3, 'difficile', 0, '2016-03-25 19:03:45', '2016-03-25 19:03:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `site_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paginate_recipe` int(10) UNSIGNED NOT NULL,
  `paginate_admin` int(10) UNSIGNED NOT NULL,
  `theme` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_name`, `paginate_recipe`, `paginate_admin`, `theme`, `created_at`, `updated_at`) VALUES
(1, 'Recipe World', 6, 20, 1, '2016-06-25 21:22:04', '2016-06-25 21:22:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tizio', 'tizio@email.com', '$2y$10$NR2OGJS4iOVBNgaRzkXlWuQm81i/4Ea3S3YKgLduwEQEci5P893c.', 1, NULL, '2016-06-25 21:22:03', '2016-06-25 21:22:03'),
(2, 'Caio', 'caio@email.com', '$2y$10$Rmso8l3NGNhdk0yNzUhI7.d/n/XxphB9YZAZBj/HK44f8Y4E.o16a', 1, NULL, '2016-06-25 21:22:03', '2016-06-25 21:22:03'),
(3, 'Sempronio', 'sempronio@email.com', '$2y$10$OK1PLbvD8hETWD7Sh8OGPOhjCiRkeIRqsNZ05JQD0YFcjUiDD12Yy', 1, NULL, '2016-06-25 21:22:03', '2016-06-25 21:22:03'),
(4, 'Raffone', 'raffone@email.com', '$2y$10$JrFv21kT.RJyEeSZMaUGUelav9atkaeD0B.4bIgHVWt2rQK3EZ93W', 1, NULL, '2016-06-25 21:22:03', '2016-06-25 21:22:03'),
(5, 'administrator', 'admin@email.com', '$2y$10$Vk4BhK8XmNiq5f9OUpGQt.npkZIdJxfnMzattHHWkN7JvHEjITaL6', 2, NULL, '2016-06-25 21:22:04', '2016-06-25 21:22:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ingredient_to_recipes`
--
ALTER TABLE `ingredient_to_recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredient_to_recipes_ingredient_id_foreign` (`ingredient_id`),
  ADD KEY `ingredient_to_recipes_recipe_id_foreign` (`recipe_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_category_id_foreign` (`category_id`),
  ADD KEY `recipes_user_id_foreign` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `ingredient_to_recipes`
--
ALTER TABLE `ingredient_to_recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ingredient_to_recipes`
--
ALTER TABLE `ingredient_to_recipes`
  ADD CONSTRAINT `ingredient_to_recipes_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ingredient_to_recipes_recipe_id_foreign` FOREIGN KEY (`recipe_id`) REFERENCES `recipes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `recipes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
