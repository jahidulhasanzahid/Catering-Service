-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2019 at 09:18 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multiauth`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'foysal', 'admin@admin.com', '$2y$10$zGXu5Z4grIhM.ARBRcwKFeXWstKgCcWVvFqPc6x9dVmXmcDIJ7Fg.', '2019-12-13 13:05:44', '2019-12-13 13:05:44');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `order_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `user_id`, `order_id`, `ip_address`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 6, 6, 1, '127.0.0.1', 2, '2019-11-13 13:52:41', '2019-11-13 14:32:06'),
(2, 6, 6, 2, '127.0.0.1', 1, '2019-11-13 14:33:43', '2019-11-13 14:35:10'),
(3, 6, 6, 3, '127.0.0.1', 1, '2019-11-13 14:36:56', '2019-11-13 14:39:05'),
(4, 4, 6, 3, '127.0.0.1', 1, '2019-11-13 14:37:07', '2019-11-13 14:39:05'),
(6, 5, 7, 4, '127.0.0.1', 1, '2019-11-18 12:45:08', '2019-11-18 12:45:24'),
(22, 12, 6, 5, '127.0.0.1', 3, '2019-11-20 13:45:04', '2019-11-20 14:04:51'),
(23, 6, 6, 5, '127.0.0.1', 2, '2019-11-20 13:45:35', '2019-11-20 14:04:51'),
(25, 5, 4, 6, '127.0.0.1', 1, '2019-12-08 11:36:24', '2019-12-08 11:36:35'),
(26, 13, 4, 7, '127.0.0.1', 1, '2019-12-08 12:18:46', '2019-12-08 12:24:05'),
(28, 13, 4, 8, '127.0.0.1', 1, '2019-12-08 12:27:20', '2019-12-08 12:28:16'),
(29, 12, 4, 9, '127.0.0.1', 1, '2019-12-08 12:30:17', '2019-12-08 12:30:38'),
(30, 13, 4, 10, '127.0.0.1', 1, '2019-12-08 12:32:40', '2019-12-08 12:32:49'),
(31, 13, 4, 12, '127.0.0.1', 1, '2019-12-08 12:36:16', '2019-12-08 12:36:25'),
(34, 13, 4, 16, '127.0.0.1', 1, '2019-12-11 13:07:14', '2019-12-11 13:08:18'),
(35, 13, 4, 17, '127.0.0.1', 2, '2019-12-13 12:12:27', '2019-12-13 12:12:58');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Rakiba Sultana', 'jahidulhasanzahid71@gmail.com', '01630765770', 'test', 'test', '2019-12-12 14:33:12', '2019-12-12 14:33:12'),
(2, 'Jahidul Hasan Zahid', 'jahidulhasanzahid71@gmail.com', '01630765770', 'test', 'test', '2019-12-12 14:34:04', '2019-12-12 14:34:04'),
(3, 'Jahidul Hasan Zahid', 'jahidulhasanzahid71@gmail.com', '01630765770', 'Test Two', 'test', '2019-12-12 14:34:40', '2019-12-12 14:34:40'),
(4, 'Rakiba Sultana', 'jahidulhasanzahid71@gmail.com', '01630765770', 'Test Two', 'gfdg', '2019-12-12 14:35:16', '2019-12-12 14:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2014_10_12_000000_create_users_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2019_09_30_180341_create_admins_table', 1),
(15, '2019_10_11_173805_create_products_table', 1),
(18, '2019_11_13_190540_create_settings_table', 3),
(19, '2019_11_12_201346_create_carts_table', 4),
(20, '2019_11_12_201749_create_orders_table', 4),
(21, '2019_12_12_202604_create_contacts_table', 5),
(22, '2019_12_12_204211_create_userinfos_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_address` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `is_paid` tinyint(1) DEFAULT '0',
  `is_completed` tinyint(1) DEFAULT '0',
  `is_seen_by_admin` tinyint(1) DEFAULT '0',
  `product_quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `ip_address`, `name`, `phone_no`, `shipping_address`, `email`, `message`, `is_paid`, `is_completed`, `is_seen_by_admin`, `product_quantity`, `created_at`, `updated_at`, `title`, `total_price`, `shop_id`) VALUES
(1, 6, '127.0.0.1', 'Jahidul', '01630765770', 'test', 'jahidulhasanzahid071@gmail.com', 'test', 0, 0, 0, NULL, '2019-11-13 14:32:06', '2019-11-13 14:32:06', NULL, NULL, NULL),
(2, 6, '127.0.0.1', 'test', '4546', 'test', 'jahidulhasanzahid071@gmail.com', 'test', 0, 0, 0, NULL, '2019-11-13 14:35:10', '2019-11-13 14:35:10', NULL, NULL, NULL),
(3, 6, '127.0.0.1', 'test', '45747', 'test', 'jahidulhasanzahid071@gmail.com', 'test', 0, 0, 0, NULL, '2019-11-13 14:39:05', '2019-11-13 14:39:05', NULL, NULL, NULL),
(4, 7, '127.0.0.1', 'Jahidul', '01630765770', 'T/10 NoorJahan Road, Mohammadpur', 'jahidulhasanzahid71@gmail.com', NULL, 0, 0, 0, NULL, '2019-11-18 12:45:24', '2019-11-18 12:45:24', NULL, NULL, NULL),
(7, 4, '127.0.0.1', 'Jahidul', '01630765770', 'T/10 NoorJahan Road, Mohammadpur', 'jahidulhasanzahid71@gmail.com', NULL, 0, 0, 0, NULL, '2019-12-08 12:24:05', '2019-12-08 12:24:05', NULL, NULL, 5),
(11, 4, '127.0.0.1', 'Sagor', '01630765770', 'T/10 NoorJahan Road, Mohammadpur', 'jahidulhasanzahid71@gmail.com', NULL, 0, 0, 0, NULL, '2019-12-08 12:33:27', '2019-12-08 12:33:27', NULL, NULL, 5),
(14, 4, '127.0.0.1', 'Sagor', '01630765770', 'T/10 NoorJahan Road, Mohammadpur', 'jahidulhasanzahid71@gmail.com', NULL, 0, 0, 0, NULL, '2019-12-08 12:37:35', '2019-12-08 12:37:35', NULL, NULL, 5),
(15, 4, '127.0.0.1', 'Sagor', '01630765770', 'T/10 NoorJahan Road, Mohammadpur', 'jahidulhasanzahid71@gmail.com', NULL, 0, 0, 0, NULL, '2019-12-08 12:38:11', '2019-12-08 12:38:11', NULL, NULL, 5),
(17, 4, '127.0.0.1', 'sagor', '01630765770', 'T/10 NoorJahan Road, Mohammadpur', 'jahidulhasanzahid71@gmail.com', NULL, 0, 0, 0, NULL, '2019-12-13 12:12:58', '2019-12-13 12:12:58', NULL, NULL, 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shopName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodItemName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodPrice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foodDetails` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `shop_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `shopName`, `category`, `foodItemName`, `image`, `foodPrice`, `foodDetails`, `created_at`, `updated_at`, `shop_id`) VALUES
(4, '', '', 'Dinner Bangla Joss', '1570818395.jpg', '255', 'foysal\'s Dine', '2019-10-11 12:26:36', '2019-10-11 12:26:36', 5),
(5, '', '', 'Good Food', '1570823365.jpg', '355', 'forhad\'s Dine', '2019-10-11 13:49:25', '2019-10-11 13:49:25', 5),
(6, '', 'Biriyani', 'Good Food', '1572373220.jpg', '344', 'Jahidul\'s Dine 2', '2019-10-29 12:20:22', '2019-10-29 12:20:22', 5),
(12, 'Jahidul\'s Dine', 'Vegetables', 'Good Food', '1574279086.jpg', '220', 'Jahidul\'s Dine', '2019-11-20 13:44:46', '2019-11-20 13:44:46', NULL),
(13, 'Jahidul\'s Dine', 'Fish', 'Good Food', '1575828407.jpg', '255', 'Jahidul\'s Dine', '2019-12-08 12:06:48', '2019-12-08 12:06:48', 5),
(14, 'dfhfg', 'Biriyani', 'Dinner Bangla Joss', '1576090634.jpg', '255', 'dfhfg', '2019-12-11 12:57:15', '2019-12-11 12:57:15', 5);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_cost` int(10) UNSIGNED NOT NULL DEFAULT '50',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userinfos`
--

CREATE TABLE `userinfos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` int(11) DEFAULT NULL,
  `shopName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodTypeOne` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodTypeTwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodTypeThree` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodTypeFour` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `foodTypeFive` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userinfos`
--

INSERT INTO `userinfos` (`id`, `userID`, `shopName`, `address`, `phone`, `foodTypeOne`, `foodTypeTwo`, `foodTypeThree`, `foodTypeFour`, `foodTypeFive`, `created_at`, `updated_at`) VALUES
(1, 5, 'Jahidul\'s Dine 2', 'T/10 NoorJahan Road, Mohammadpur', '01630765770', 'one', 'two', 'Three', 'test', 'test', '2019-12-13 02:52:20', '2019-12-13 02:52:20'),
(2, 8, 'sagor dine', 'T/10 NoorJahan Road, Mohammadpur', '01630765770', 'test', 'test', 'test', 'test', 'test', '2019-12-13 11:58:27', '2019-12-13 11:58:27'),
(3, 9, 'Joy Dine', 'T/10 NoorJahan Road, Mohammadpur', '01630765770', 'test', 'test', NULL, NULL, NULL, '2019-12-13 12:00:40', '2019-12-13 12:00:40');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pending',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `email_verified_at`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'Forhad', 'forhad@gmail.com', 2, NULL, '$2y$10$tHl7j/2Lj.2aZnIhRkPsEeOmkOjA02AgAo0/gp3YCBI17kMHQ1xe6', 'Active', NULL, '2019-10-11 13:48:22', '2019-10-11 13:48:40'),
(4, 'sagor', 'sagor@yahoo.com', 1, NULL, '$2y$10$NBjW5NGr0ujD8NHF2L/PhO4Q5TI41hkPXnVcvCFxKKqZwtgCFaVgO', 'pending', NULL, '2019-10-28 11:05:17', '2019-10-28 11:05:17'),
(5, 'Jahidul Hasan Zahid', 'jahidulhasanzahid71@gmail.com', 2, NULL, '$2y$10$0zO8VdJ0Hdy6WH8nBMoth.v.jdcI9KMRggnz0Jpt7S4GKz0HxCSgO', 'Active', NULL, '2019-11-12 11:53:42', '2019-11-12 11:53:49'),
(6, 'Jahidul Hasan Zahid', 'jahidulhasanzahid071@gmail.com', 1, NULL, '$2y$10$yMHMSXdxG5kCQC8MeO2aCesGQzHMOj5pymEZmM7NkSok9Qbkpw7RK', 'pending', NULL, '2019-11-12 11:54:46', '2019-11-12 11:54:46'),
(7, 'Rakiba Sultana', 'rakiba11@gmail.com', 2, NULL, '$2y$10$JVWlF2pezQ7DlJRWsNtIj.CVmvV1rnwmu20a5cpBgADvt7DOrazpu', 'Active', NULL, '2019-11-18 12:42:59', '2019-11-18 12:44:19'),
(8, 'sagor', 'sagor@hotmail.com', 2, NULL, '$2y$10$6vffzmrGQpDG7IGJDwUbPOpgYnRWf1GZ0.YGUYn1aJ98mgyEhU3Re', 'Active', NULL, '2019-12-13 11:52:26', '2019-12-13 11:53:14'),
(9, 'Joy', 'joy@hotmail.com', 2, NULL, '$2y$10$Zv8/VKGBjcG471FcZNo1TebOcHT6wKfrcL20cpJHLqevGdc7F3LIe', 'pending', NULL, '2019-12-13 12:00:26', '2019-12-13 12:00:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfos`
--
ALTER TABLE `userinfos`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userinfos`
--
ALTER TABLE `userinfos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
