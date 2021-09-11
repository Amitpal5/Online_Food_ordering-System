-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2021 at 07:09 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `dish_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `dish_id`, `quantity`, `created_at`, `updated_at`) VALUES
(76, 1, 8, 1, '2021-09-11 08:05:59', '2021-09-11 08:05:59'),
(77, 1, 9, 1, '2021-09-11 08:06:03', '2021-09-11 08:06:03'),
(78, 1, 10, 1, '2021-09-11 08:06:07', '2021-09-11 08:06:07');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `Cat_id` bigint(20) UNSIGNED NOT NULL,
  `Cat_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`Cat_id`, `Cat_Name`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', '2021-07-23 04:34:46', '2021-07-23 04:34:46'),
(2, 'Lunch', '2021-07-23 04:35:03', '2021-07-23 04:35:03'),
(3, 'Dinner', '2021-07-23 04:35:09', '2021-07-23 04:35:09'),
(4, 'Appetizers', '2021-07-23 04:35:16', '2021-07-23 04:35:16'),
(5, 'Drinks', '2021-07-23 04:35:24', '2021-07-23 04:35:24'),
(7, 'Snacks', '2021-07-24 06:11:27', '2021-07-24 06:11:27');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Discount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `Coupon_name`, `Discount`, `status`, `created_at`, `updated_at`) VALUES
(2, 'summer2021', '10', '1', '2021-08-19 10:00:16', '2021-08-19 10:00:33'),
(3, 'ZNM3457', '50', '0', '2021-08-20 01:05:51', '2021-08-20 01:05:51');

-- --------------------------------------------------------

--
-- Table structure for table `dishes`
--

CREATE TABLE `dishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Cat_id` bigint(20) UNSIGNED NOT NULL,
  `Dish_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Dish_Img` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dishes`
--

INSERT INTO `dishes` (`id`, `Cat_id`, `Dish_name`, `Dish_Img`, `price`) VALUES
(8, 4, 'MIXED PAKURA', '1627059734.png', '190 TK'),
(9, 3, 'Ghorer Khabar', '1627059835.png', '450 TK'),
(10, 2, 'Pulao Korma/Roast', '1627059866.png', '625 TK'),
(11, 1, 'Raita- Cucumber Salad', '1627059908.png', '130 TK'),
(12, 6, 'Chicken Shashlic', '1627059950.jpg', '225 TK'),
(14, 3, 'Spicy Tandori', '1627128936.png', '450 TK'),
(16, 1, 'Egg Omelet', '1627138365.jpg', '150 TK'),
(17, 1, 'laa', '1627566346.PNG', '150 TK');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `f_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(1200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int(11) NOT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `f_id`, `name`, `email`, `message`, `rating`, `date`, `status`, `created_at`, `updated_at`) VALUES
(10, '8', 'Amit Paul', 'chondro@gmail.com', 'Pakkar was great', 3, '22 Aug-2021', '1', '2021-08-20 00:48:23', '2021-08-20 01:06:07'),
(11, '9', 'Amit paul', 'amit.pal@gmail.com', 'The Food was good', 5, '22 Aug-2021', '1', NULL, NULL),
(12, '8', 'Sumit basak', 'sumitbask@gmail.com', 'food was great', 5, '22 Aug-2021', '1', '2021-08-22 06:47:35', '2021-08-22 06:47:35'),
(15, '11', 'Zarin', 'zarin@gmail.com', 'Raita was great', 5, '22 Aug-2021', '1', '2021-08-22 10:00:51', '2021-08-22 10:00:51'),
(16, '14', 'Zarin', 'zarin@gmail.com', 'Food was very testy', 5, '22 Aug-2021', '1', '2021-08-22 10:07:33', '2021-08-22 10:07:33'),
(17, '8', 'Amit Paul', 'chondro@gmail.com', 'eeeeeeeee', 5, '30 Aug-2021', '1', '2021-08-30 08:44:37', '2021-08-30 08:47:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_07_10_164105_create_sessions_table', 1),
(7, '2021_07_19_141930_create_catagorieds_table', 2),
(8, '2021_07_23_100800_create_dishes_table', 3),
(9, '2021_07_23_102225_create_catagories_table', 4),
(10, '2021_07_23_102907_create_catagories_table', 5),
(11, '2021_07_23_103606_create_dishes_table', 6),
(12, '2021_07_23_135826_create_dishes_table', 7),
(13, '2021_07_24_161952_create_reservations_table', 8),
(14, '2021_07_26_055103_create_carts_table', 9),
(15, '2021_07_26_103330_create_carts_table', 10),
(16, '2021_07_26_104733_create_carts_table', 11),
(17, '2021_07_27_110122_create_carts_table', 12),
(18, '2021_07_27_131450_create_carts_table', 13),
(19, '2021_07_28_072031_create_orders_table', 14),
(20, '2021_07_28_121557_create_orders_table', 15),
(21, '2021_07_28_124138_create_order_items_table', 16),
(22, '2021_08_18_154453_create_feedback_table', 17),
(23, '2021_08_19_141910_create_coupons_table', 18);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `tracking_no` int(100) NOT NULL,
  `total_price` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_status`, `tracking_no`, `total_price`, `Name`, `Phone`, `Email`, `Address`, `created_at`, `updated_at`) VALUES
(23, 1, '0', 5476, '2700', 'Amit Paul', 'chondro@gmail.com', '01712532864', '26/2 juginagar len,wari.', '2021-07-29 07:44:34', '2021-07-29 07:44:34'),
(24, 8, '0', 3290, '1920', 'Sagar Paul', 'Sagar@gmail.com', '01712432567', 'karmokar para sherpur bogr', '2021-07-29 07:50:44', '2021-07-29 07:50:44'),
(25, 1, '1', 1905, '190', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-07-29 12:33:56', '2021-07-30 00:54:33'),
(26, 1, '0', 9836, '450', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-07-29 12:35:20', '2021-07-30 00:57:09'),
(27, 1, '0', 5398, '380', 'Amit paul', 'amit.pal@gmail.com', '01712532864', 'karmokar para sherpur bogra', '2021-07-30 01:01:01', '2021-07-30 01:01:01'),
(28, 1, '1', 7786, '190', 'Amit paul', 'amit.pal@gmail.com', '01712532864', 'karmokar para sherpur bogra', '2021-07-30 01:07:36', '2021-08-11 11:57:59'),
(33, 1, '0', 4721, '405', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-08-19 10:53:23', '2021-08-19 10:53:23'),
(34, 1, '0', 8530, '640', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-08-19 11:10:05', '2021-08-19 11:10:05'),
(36, 1, '0', 3990, '171', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-08-19 13:14:45', '2021-08-19 13:14:45'),
(40, 1, '0', 2739, '405', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-08-19 13:25:23', '2021-08-19 13:25:23'),
(41, 1, '0', 9089, '190', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-08-19 13:25:51', '2021-08-19 13:25:51'),
(42, 6, '0', 4924, '405', 'Sagar Karmokar', 'amit.pal@gmail.com', '0286733833', 'adfdd', '2021-08-19 13:31:51', '2021-08-19 13:31:51'),
(43, 1, '0', 3647, '981', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-08-20 00:47:26', '2021-08-20 00:47:26'),
(44, 6, '0', 7519, '950', 'Sagar Karmokar', 'ami', '0286733833', 'adfdd', '2021-08-20 01:07:20', '2021-08-20 01:07:20'),
(45, 1, '0', 8384, '190', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-09-01 03:23:06', '2021-09-01 03:23:06'),
(46, 1, '0', 2122, '640', 'Amit Paul', 'chondro@gmail.com', '0286733833', 'adfdd', '2021-09-05 10:22:35', '2021-09-05 10:22:35');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `dish_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dish_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `dish_name`, `dish_id`, `quantity`, `price`) VALUES
(13, 23, 'Ghorer Khabar', 9, 3, '450 TK'),
(14, 23, 'Spicy Tandori', 14, 3, '450 TK'),
(15, 24, 'Ghorer Khabar', 9, 2, '450 TK'),
(16, 24, 'MIXED PAKURA', 8, 3, '190 TK'),
(17, 24, 'laa', 17, 3, '150 TK'),
(18, 25, 'MIXED PAKURA', 8, 1, '190 TK'),
(19, 26, 'Ghorer Khabar', 9, 1, '450 TK'),
(20, 27, 'MIXED PAKURA', 8, 2, '190 TK'),
(21, 28, 'MIXED PAKURA', 8, 1, '190 TK'),
(22, 29, 'Pulao Korma/Roast', 10, 1, '625 TK'),
(23, 30, 'MIXED PAKURA', 8, 1, '190 TK'),
(24, 30, 'Ghorer Khabar', 9, 2, '450 TK'),
(25, 31, 'MIXED PAKURA', 8, 4, '190 TK'),
(26, 32, 'MIXED PAKURA', 8, 1, '190 TK'),
(27, 33, 'Ghorer Khabar', 9, 1, '450 TK'),
(28, 34, 'MIXED PAKURA', 8, 1, '190 TK'),
(29, 34, 'Ghorer Khabar', 9, 1, '450 TK'),
(30, 35, 'Ghorer Khabar', 9, 1, '450 TK'),
(31, 35, 'Pulao Korma/Roast', 10, 1, '625 TK'),
(32, 36, 'MIXED PAKURA', 8, 1, '190 TK'),
(33, 37, 'Ghorer Khabar', 9, 1, '450 TK'),
(34, 38, 'MIXED PAKURA', 8, 1, '190 TK'),
(35, 39, 'MIXED PAKURA', 8, 3, '190 TK'),
(36, 39, 'Ghorer Khabar', 9, 3, '450 TK'),
(37, 40, 'Ghorer Khabar', 9, 1, '450 TK'),
(38, 41, 'MIXED PAKURA', 8, 1, '190 TK'),
(39, 42, 'Ghorer Khabar', 9, 1, '450 TK'),
(40, 43, 'MIXED PAKURA', 8, 1, '190 TK'),
(41, 43, 'Ghorer Khabar', 9, 2, '450 TK'),
(42, 44, 'MIXED PAKURA', 8, 10, '190 TK'),
(43, 45, 'MIXED PAKURA', 8, 1, '190 TK'),
(44, 46, 'MIXED PAKURA', 8, 1, '190 TK'),
(45, 46, 'Ghorer Khabar', 9, 1, '450 TK');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone` int(11) NOT NULL,
  `Person` int(11) NOT NULL,
  `Reservation_Date` date NOT NULL,
  `Reservation_Time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `Name`, `Email`, `Phone`, `Person`, `Reservation_Date`, `Reservation_Time`, `created_at`, `updated_at`) VALUES
(1, 'Amit Paul', 'chondro@gmail.com', 286733833, 5, '2021-07-26', '10:30:00', '2021-07-24 10:42:55', '2021-07-24 10:42:55'),
(2, 'Amit Paul', 'chondro@gmail.com', 1712532864, 2, '2021-07-27', '00:00:05', '2021-07-24 11:01:56', '2021-07-24 11:01:56'),
(3, 'Amit Paul', 'chondro@gmail.com', 1712532864, 3, '2021-07-28', '06:30:00', '2021-07-25 02:07:58', '2021-07-25 02:07:58'),
(4, 'sagar', 'chondro.pal@gmail.com', 1312098765, 5, '2021-07-29', '05:30:00', '2021-07-25 02:22:05', '2021-07-25 02:22:05'),
(5, 'Amit Paul', 'chondro@gmail.com', 286733833, 4, '2021-07-30', '08:30:00', '2021-07-29 07:43:02', '2021-07-29 07:43:02'),
(6, 'sagar', 'hhdgjdh@gmail.com', 1345566777, 5, '2021-07-29', '10:35:00', '2021-07-29 07:47:46', '2021-07-29 07:47:46');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('bLCOeyOoscYH677lTtWjUxe04vxP8KEMT1Vy7ylv', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiSkNNQ3JsekkzSXRZMW5vWm1NcXRoeE9WUlcxbGFrN1U5WTBiQjRvdiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9yZXNlcnZhdGlvbmEiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkTy9uS1Z0QWVDbmM0WkNnNjlRSkF3Lk9aZ0J1MGNrTkZuWnFVTXdhZlB3NzVkRzk0Q2Y0cWEiO30=', 1631371409),
('dzy0qZuAj0s8pTeTvf6s9rah46PF7p751YSoROKJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibFFvVWhtTlZZM3dKUUJzdFoxVWZUQ2hxVldGNDhTMzNKYldyU3pkRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1630858809),
('P1BvYAEgz3dYAaCNMa6FH32zUrnmVb3ZM9L4bPhc', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVEU3QkpzSXRzanpjSmlKWWdpb1ZhSzhJRzFrNEVvV3o0NGMwcFVBNyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1630858809),
('qOj0B7GQXWiMPwLExvNb9Spnol2PX78iOji0FYAE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.63 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiRlg4azdMUTZXcjJOcGpScFNhR0ZGZGdEeFM2cldWYXd2OGx4ZTd4byI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1630859027),
('td7CdphGteyDL6frt7pfxhsGxVUSEPkh6BqDRLZL', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/92.0.4515.159 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWW9jQU1MUVl0STlxTE03WGV4OUVsRHY5VUdWRlZ0NERuRXNSWjdnciI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1630488259);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `utype`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Amit Paul', 'admin@palcreativeltd.com', '0', NULL, '$2y$10$V2zg2V.nOcScGEsZWlDdJ.kAn/dTpltLjVCkfpoe1Jm4W5Ufei62u', NULL, NULL, NULL, NULL, NULL, '2021-07-12 23:12:54', '2021-07-12 23:12:54'),
(2, 'admin', 'chondro@gmail.com', '1', NULL, '$2y$10$O/nKVtAeCnc4ZCg69QJAw.OZgBu0ckNFnZqUMwafPw75dG94Cf4qa', NULL, NULL, NULL, NULL, NULL, '2021-07-12 23:43:16', '2021-07-12 23:43:16'),
(5, 'Sagar Paul', 'chondro.pal@gmail.com', '0', NULL, '$2y$10$Hn5QyRxvQFuyTcYMlSFpFOmVlhhb3CaL9tBrgYAvjzR3UdWXkmVuy', NULL, NULL, NULL, NULL, NULL, '2021-07-26 07:18:26', '2021-07-26 07:18:26'),
(6, 'Amit Paul', 'amit.pal99991@hotmail.com', '0', NULL, '$2y$10$ESQePzghEaYEOIvwXE.OO.ZeKypO3oKG51ZMAtE1uvhWNvQofAT7e', NULL, NULL, NULL, NULL, NULL, '2021-07-26 10:34:47', '2021-07-26 10:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dishes`
--
ALTER TABLE `dishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `Cat_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dishes`
--
ALTER TABLE `dishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
