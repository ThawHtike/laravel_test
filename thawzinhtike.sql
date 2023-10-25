-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2023 at 06:11 AM
-- Server version: 8.0.31
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thawzinhtike`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `body`, `category_id`, `updated_at`, `created_at`) VALUES
(4, 'ee', 'ee', 'ee', '2023-04-04 01:55:44', '2023-04-04 01:55:44'),
(3, '33', '33', '33', '2023-04-03 18:16:39', '2023-04-03 18:16:39');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `address`, `phone`, `updated_at`, `created_at`) VALUES
(2, 'Thaw Zin Htike', 'Yangon', '+95-9423673831', '2023-04-04 04:38:25', '2023-04-04 04:38:25'),
(3, 'win thaw', 'mandalay', '11111111', '2023-04-04 06:08:19', '2023-04-04 06:08:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `price`, `updated_at`, `created_at`) VALUES
(1, 'TV', 777, '2023-04-04 06:06:31', '2023-04-04 04:19:27'),
(3, 'Motorcycle', 100000, '2023-04-04 04:20:58', '2023-04-04 04:20:58'),
(4, 'ddd', 2222, '2023-04-04 06:04:53', '2023-04-04 06:04:53'),
(5, 'wwww', 2222, '2023-04-04 06:06:09', '2023-04-04 06:06:09'),
(6, 'qqqq', 11111, '2023-04-04 06:10:21', '2023-04-04 06:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Win Win', 'win@gmail.com', NULL, '$2y$10$thmXnWVZLNEKzJQ.fUe/YOyzX6nVudSrNQc69B4rJ49wHw9fqfbpW', NULL, '2023-04-03 22:55:57', '2023-04-03 22:55:57'),
(2, 'thaw zin Htike', 'thaw@gmail.com', NULL, '$2y$10$aPzt.CW4rL950.i36h.L9egfaJrNQtsSbfBjmkqd/vagucVv/gALa', NULL, '2023-04-03 22:47:19', '2023-04-03 22:47:19'),
(4, 'win win kyaw', 'winkyaw@gmail.com', NULL, '$2y$10$lfG0ZrKcKR5rsnQateG6x.AtkYxTBNyHpd6K8zv8oqm/NUI8TR94G', NULL, '2023-04-03 23:08:34', '2023-04-03 23:08:34'),
(5, 'win win kyaw', 'winkyaw@gmail.com', NULL, '$2y$10$j.IY4z/i/nzLtQ7Ql9iRBOp2sfey6nkvAeseo8AOlnD4RxpSel8Eq', NULL, '2023-04-03 23:09:50', '2023-04-03 23:09:50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
