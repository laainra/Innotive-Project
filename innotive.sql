-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 06:28 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `innotive`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Technology', 'technology', '2023-06-03 12:17:11', '2023-06-03 12:17:11'),
(2, 'Craft', 'craft', '2023-06-03 12:17:11', '2023-06-03 12:17:11'),
(3, 'Art', 'art', '2023-06-03 12:25:45', '2023-06-03 12:25:45'),
(4, 'Personal', 'personal', '2023-06-03 12:25:45', '2023-06-03 12:25:45'),
(5, 'Painting', 'painting', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(6, 'Sculpture', 'sculpture', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(7, 'Photography', 'photography', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(8, 'Graphic Design', 'graphic-design', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(9, 'Digital Art', 'digital-art', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(10, 'Animation', 'animation', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(11, 'Illustration', 'illustration', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(12, 'Video Production', 'video-production', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(13, 'Web Design', 'web-design', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(14, 'Virtual Reality', 'virtual-reality', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(15, 'Software Development', 'software-development', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(16, 'Artificial Intelligence (AI)', 'artificial-intelligence', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(17, 'Data Science and Analytics', 'data-science-analytics', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(18, 'Cybersecurity', 'cybersecurity', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(19, 'Internet of Things (IoT)', 'internet-of-things', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(20, 'Cloud Computing', 'cloud-computing', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(21, 'Mobile Applications', 'mobile-applications', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(22, 'Digital Marketing', 'digital-marketing', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(23, 'Network Infrastructure', 'network-infrastructure', '2023-06-14 05:16:36', '2023-06-14 05:16:36'),
(24, 'User Experience (UX) Design', 'user-experience-design', '2023-06-14 05:16:36', '2023-06-14 05:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tweet_id` bigint(20) UNSIGNED NOT NULL,
  `body` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `tweet_id`, `body`, `created_at`, `updated_at`) VALUES
(7, 6, 5, 'hola', '2023-06-07 16:02:14', '2023-06-07 16:02:14'),
(8, 6, 5, 'hola', '2023-06-07 16:03:06', '2023-06-07 16:03:06'),
(11, 6, 4, 'halo juga', '2023-06-07 22:23:26', '2023-06-07 22:23:26'),
(14, 6, 4, 'salken ya', '2023-06-07 22:26:30', '2023-06-07 22:26:30'),
(15, 2, 6, 'waw', '2023-06-08 20:21:44', '2023-06-08 20:21:44'),
(16, 4, 5, 'halo', '2023-06-08 20:29:48', '2023-06-08 20:29:48'),
(17, 2, 5, 'Haloo, bagus bgt gifnya', '2023-06-17 18:40:10', '2023-06-17 18:40:10');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tweet_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ewallets`
--

CREATE TABLE `ewallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `balance` decimal(8,2) NOT NULL DEFAULT 0.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follows`
--

CREATE TABLE `follows` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `following_user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `follows`
--

INSERT INTO `follows` (`user_id`, `following_user_id`, `created_at`, `updated_at`) VALUES
(2, 1, NULL, NULL),
(2, 3, NULL, NULL),
(3, 1, NULL, NULL),
(3, 2, NULL, NULL),
(4, 3, NULL, NULL),
(6, 3, NULL, NULL),
(8, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `likeable_likes`
--

CREATE TABLE `likeable_likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `likeable_id` varchar(36) NOT NULL,
  `likeable_type` varchar(255) NOT NULL,
  `user_id` varchar(36) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likeable_like_counters`
--

CREATE TABLE `likeable_like_counters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `likeable_id` varchar(36) NOT NULL,
  `likeable_type` varchar(255) NOT NULL,
  `count` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `tweet_id` bigint(20) UNSIGNED NOT NULL,
  `liked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `tweet_id`, `liked`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 1, '2023-06-04 03:15:31', '2023-06-04 03:15:31'),
(2, 2, 3, 1, '2023-06-06 15:40:56', '2023-06-06 15:40:56'),
(3, 2, 4, 1, '2023-06-06 15:41:59', '2023-06-06 15:41:59'),
(8, 2, 5, 0, '2023-06-06 15:49:18', '2023-06-06 15:49:18'),
(9, 2, 6, 1, '2023-06-06 15:53:30', '2023-06-06 15:53:30'),
(14, 6, 4, 1, '2023-06-07 15:45:07', '2023-06-07 15:57:57'),
(17, 6, 5, 0, '2023-06-07 15:57:45', '2023-06-07 15:57:52'),
(18, 2, 8, 1, '2023-06-17 18:25:09', '2023-06-17 18:25:09');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_06_222923_create_transactions_table', 1),
(4, '2018_11_07_192923_create_transfers_table', 1),
(5, '2018_11_15_124230_create_wallets_table', 1),
(6, '2019_08_19_000000_create_failed_jobs_table', 1),
(7, '2020_12_14_100910_create_tweets_table', 1),
(8, '2020_12_14_150455_create_follows_table', 1),
(9, '2020_12_16_080559_create_likes_table', 1),
(10, '2021_11_02_202021_update_wallets_uuid_table', 1),
(11, '2023_05_28_004530_create_social_accounts_table', 1),
(12, '2023_05_28_014834_create_categories_table', 1),
(13, '2023_06_03_204314_create_donations_table', 2),
(14, '2023_06_04_010732_add_wallet_id', 3),
(15, '2023_06_07_094916_create_comments_table', 3),
(16, '2016_02_07_000000_create_likeable_tables', 4),
(17, '2018_09_13_123456_create_wallet_tables', 4),
(18, '2018_11_05_123456_update_wallet_transactions_table', 4),
(19, '2019_01_25_000000_add_polymorphic_relation_to_transactions_table', 4),
(20, '2022_12_26_095933_create_wallets_table', 5),
(21, '2022_12_26_110710_create_wallet_transactions_table', 5),
(22, '2023_06_09_091141_create_ewallets_table', 5),
(23, '2023_06_12_030412_create_transactions_table', 5),
(24, '2023_06_04_010732_add_ewallet_id', 6),
(25, '2023_06_16_091156_add_tweet_id_to_transactions', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('lailaar77@gmail.com', '$2y$10$4Zd13Zc8EirO4xW08HewFeH.NSzG41m867Y6vTiAaqtngmPBX/mfW', '2023-06-08 19:08:01'),
('lailaar0710@gmail.com', '$2y$10$TIKEarkWawDHmqpG.IUiUuNe6XQX4AekrFR65hUlAMHtfwXeYr16K', '2023-06-08 20:38:10'),
('lailaar0710@gmail.com', '0xBIy9h3mw7GvwR1nbL6TaTNRtBXmTHYYhY9r0WqrB9FvsQMPOiugkR3cWjK4BiS', '2023-06-14 16:49:02'),
('lailaar0710@gmail.com', 'R8CUH064H9SEXJwp8oR3ItymhTuMGVeyFAlTW0Lt5oBvyZ9Em7OYFgjTRjOPI4dV', '2023-06-14 16:49:29'),
('lailaar0710@gmail.com', 'A8D91P5G9GUnPC3WbqXwdhRN8d6R03AjSGCmQBAu9vZcgkLmjwfMqQGkYJ8hJML6', '2023-06-14 16:50:32'),
('lailaar0710@gmail.com', 'jCBuLJXPQIBWasYdQwede1GaapFUMqYSwkdsijCJP0GWnjWz6gshpFy9B4m7ULZO', '2023-06-14 16:51:44'),
('lailaar0710@gmail.com', 'JA9tXQLe5H3AIg7ZYNqqSI0Ml2yGgLl5A5uIuyVwEQxS9jNB49If7iKPCK6kxgf6', '2023-06-14 16:51:52'),
('lailaar0710@gmail.com', 'IcOShpH6Mv9kmMzBEIyRbIajE0Yztey70f1CoLLnhiZzkufjYvC8T1zslql9iITs', '2023-06-14 16:53:32'),
('lailaar0710@gmail.com', '1LuPA9ttzmVApAReBRmNc3C4WQCTAujsKYsPfEY2RgQxLBXbVGcvqlE2iwNx6lth', '2023-06-14 16:53:45'),
('lailaar0710@gmail.com', '3TLAo0XMfYDlfwXhwoUaixcU15Ga8NaZmRHML81RP61f7ykywVYAaH0EeDicVf8j', '2023-06-14 16:55:05'),
('lailaar0710@gmail.com', '7ghylYX2xu53Kiq6y4xWjuJS7mytNoQBBwaPZb9pu7RzmwbnpxkwaLQ3EMvjEg8c', '2023-06-14 16:55:11'),
('lailaar0710@gmail.com', 'wG6v3lQCUtIksvIcBecrC3TCOpGWYt3RL1DgU9s7bvQ52fKy3eOVMsFrKyPF6kkI', '2023-06-14 16:59:33'),
('lailaar0710@gmail.com', 'Qp7qfYgH0VS238jTNcobZ8ZxsISchYdF4qqoHNaHuBnQTMJeJTZgJoWhgxxk8Nvx', '2023-06-14 17:02:39'),
('lailaar0710@gmail.com', 'wrMGcy34IjTJFpXMAHu1CA27Djd9eIbiMQAxuZNJ4FkF0iFslP0cGqhAFOWmZZyd', '2023-06-14 17:08:43'),
('lailaar0710@gmail.com', 'N2rOUnmAuBOPqsplUFnW704BJv0vksS8reSuw0YWs2deHQNz9Z2XyKN12LGFjqTa', '2023-06-14 17:10:06'),
('lailaar0710@gmail.com', 'EsWhqy7uYpVKll2CDcXyAT6trtGgSpTbSa6uehqRCx4BWq66bUNzEZV09xMweDQ3', '2023-06-14 17:11:02'),
('lailaar0710@gmail.com', 'eACFgtJipAzJjNLRzhSZecmqgZvFrV1xMX1gKhwcBeYeeixI6WHGmrCEkitM2Hx9', '2023-06-14 17:11:33'),
('lailaar0710@gmail.com', 'zExxjknMaR1SbRewRkZWYXTpn5Ga5riYEeTv8GMRr86p0xTTpCjR09849N4d2pu4', '2023-06-14 23:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `social_accounts`
--

CREATE TABLE `social_accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `provider_id` varchar(255) NOT NULL,
  `provider_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_accounts`
--

INSERT INTO `social_accounts` (`id`, `user_id`, `provider_id`, `provider_name`, `created_at`, `updated_at`) VALUES
(1, 1, '109212324285048912311', 'google', '2023-05-28 02:43:24', '2023-05-28 02:43:24'),
(2, 5, '101685093921523353809', 'google', '2023-06-05 22:51:42', '2023-06-05 22:51:42'),
(3, 6, '116407112824917710411', 'google', '2023-06-06 17:25:10', '2023-06-06 17:25:10'),
(4, 2, '111741203', 'github', '2023-06-08 19:09:42', '2023-06-08 19:09:42'),
(5, 2, '106428158775155973939', 'google', '2023-06-08 20:41:33', '2023-06-08 20:41:33'),
(6, 10, '117958389258118386497', 'google', '2023-06-09 00:35:30', '2023-06-09 00:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reference_id` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `debited_wallet` bigint(20) UNSIGNED DEFAULT NULL,
  `credited_wallet` bigint(20) UNSIGNED DEFAULT NULL,
  `amount` decimal(10,2) NOT NULL,
  `type` varchar(255) NOT NULL,
  `method` varchar(255) DEFAULT NULL,
  `status` enum('1','2','3','4') DEFAULT NULL COMMENT '1=wait for payment, 2=payment completed, 3=expired, 4=canceled',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `snap_token` varchar(36) DEFAULT NULL,
  `tweet_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `reference_id`, `description`, `debited_wallet`, `credited_wallet`, `amount`, `type`, `method`, `status`, `created_at`, `updated_at`, `snap_token`, `tweet_id`) VALUES
(1, 'e6381986-96bf-3640-b187-7cf2bff22104', 'Et rerum rerum porro qui accusantium unde accusantium.', NULL, NULL, '201.17', 'donate', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(2, '6418cea0-2ced-37f3-9528-0bcbc9b926f9', 'Consequatur est iste aperiam est ut.', NULL, NULL, '851.31', 'donate', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(3, 'bf247b6f-89c2-3b79-8ee0-33308dcfe205', 'Consequuntur id eum fugit quis quae et amet fugit.', NULL, NULL, '179.18', 'donate', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(4, '48f531ff-bd4c-301c-97ac-eb5c734544a2', 'Consequatur quo voluptatem consequatur reiciendis accusantium vel autem.', NULL, NULL, '302.12', 'topup', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(5, '4a8da9c6-e771-3410-ac9c-7fc0813a3e85', 'Eveniet in iste dolorem.', NULL, NULL, '797.35', 'topup', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(6, '39aa8510-d28b-3946-8fa4-e03af65fe8aa', 'Aut repellendus et voluptas temporibus nisi voluptatem dolorum.', NULL, NULL, '923.01', 'topup', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(7, 'da694b6e-9868-3c16-806e-37fceda39863', 'Magnam eaque magni consectetur sint quaerat quae.', NULL, NULL, '373.74', 'donate', NULL, '4', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(8, 'ca6a2bf0-d3dc-3ff4-ba06-e3f1cd8fc86d', 'Qui odit aut rerum minus.', NULL, NULL, '565.87', 'donate', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(9, '808ed18e-08d1-360d-bb76-3168210c8baf', 'Id tenetur accusamus tenetur nihil praesentium voluptas.', NULL, NULL, '15.95', 'topup', NULL, '1', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(10, '2ff3f782-dec4-3697-9d2e-f37099c91269', 'Et expedita iusto est qui beatae voluptatum voluptate.', NULL, NULL, '836.99', 'topup', NULL, '3', '2023-06-13 15:26:38', '2023-06-13 15:26:38', NULL, NULL),
(11, 'DONATE_64893c9ca6a1e', 'Donation', 8, 1, '1000.00', 'donate', 'gopay', '1', '2023-06-13 21:05:48', '2023-06-13 21:05:48', NULL, 6),
(12, 'DONATE_64893d75474f1', 'Donation', 9, 2, '1000.00', 'donate', 'gopay', '1', '2023-06-13 21:09:25', '2023-06-13 21:09:25', NULL, 5),
(13, 'TOPUP_64898b1a3a3b7', 'Top-up Wallet', NULL, 8, '10000.00', 'topup', 'gopay', '1', '2023-06-14 02:40:42', '2023-06-14 02:40:42', NULL, 8),
(14, 'DONATE_648ac830c287f', 'Donation', 6, 8, '1000.00', 'donate', 'dana', '1', '2023-06-15 01:13:36', '2023-06-15 01:13:36', NULL, 8),
(15, 'DONATE_648bd35830cfc', 'Donation', 8, 1, '1000.00', 'donate', 'wallet', '1', '2023-06-15 20:13:28', '2023-06-15 20:13:28', NULL, 6),
(16, 'TOPUP_648e5ef9de900', 'Top-up Wallet', NULL, 8, '10000.00', 'topup', 'gopay', '1', '2023-06-17 18:33:45', '2023-06-17 18:33:45', NULL, NULL),
(17, 'DONATE_648e5f56eab63', 'Donation', 8, 1, '5000.00', 'donate', 'wallet', '1', '2023-06-17 18:35:18', '2023-06-17 18:35:18', NULL, 6);

-- --------------------------------------------------------

--
-- Table structure for table `tweets`
--

CREATE TABLE `tweets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `body` varchar(255) NOT NULL,
  `tweetImage` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tweets`
--

INSERT INTO `tweets` (`id`, `user_id`, `body`, `tweetImage`, `created_at`, `updated_at`, `category_id`) VALUES
(3, 2, 'hai, halo', NULL, '2023-06-03 12:29:36', '2023-06-03 12:29:36', 4),
(4, 3, 'Haloo', NULL, '2023-06-04 03:15:01', '2023-06-04 03:15:01', 4),
(5, 3, 'Hai, i have my new gif', 'tweetImages/lCtVE2k1tmN62fbNJfJThl672gjD9ck4plXIximE.gif', '2023-06-04 03:20:14', '2023-06-04 03:20:14', 3),
(6, 1, 'hai', NULL, '2023-06-05 20:58:08', '2023-06-05 20:58:08', 3),
(7, 6, 'haii', NULL, '2023-06-07 22:31:00', '2023-06-07 22:31:00', 4),
(8, 2, 'Annyeong!', NULL, '2023-06-14 02:55:36', '2023-06-14 02:55:36', 4),
(9, 2, 'Halooo.. this is wallet icon', 'tweetImages/5HUuzRftRWiG5snPxVYWAdMWw8dufq0vSPbwwSYW.png', '2023-06-17 18:27:04', '2023-06-17 18:27:04', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) DEFAULT substring_index(`email`,'@',1),
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `avatar` text DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `phone`, `avatar`, `banner`, `email`, `email_verified_at`, `password`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'laila.sone7', 'LAILA AINUR RAHMA', NULL, NULL, NULL, 'laila.sone7@gmail.com', NULL, NULL, NULL, 'dQHX9Fd3BjNDTAWzDWpUmOz9FEqtngm8ACFIjMZSkRlfAg0FImRjWUb3uw3z', '2023-05-28 02:43:24', '2023-05-28 02:43:24'),
(2, 'laainra', 'Lala Here For Yaaa', '081239640530', NULL, NULL, 'lailaar77@gmail.com', '2023-06-08 02:38:02', '$2y$10$y5FUsjEcJpvpLjsn/QC4deXWqnSSrYKBx0IEQDnRkhojxoowdoW5K', 'holaaa, this is lala', 'BEM4GTGEbNAKeo0vojDkFAXFjSlWwt9JuKptaJF2809kqnn36ra3oEvzKnKL', '2023-05-28 02:48:52', '2023-06-17 18:30:27'),
(3, 'anaana', 'Ana', '081234567890', 'avatars/CK1jpLsVSOJRVPtvVM4V38xtYwiexYBR4zjKHycr.gif', 'banners/BS5EqEPGhhCLWrWcsEgzaGBIACPFEzdqayU7LUZe.gif', 'ana@gmail.com', '2023-06-13 21:11:03', '$2y$10$iD0P.bXt5JjxUfs6k9B8UOyxmvFrB0HZjeCO9JEqYzrV2V4nh1gDW', 'Haloo, I\'m Ana', NULL, '2023-06-04 03:14:48', '2023-06-17 18:42:04'),
(4, 'laila_ar', 'Lala', '081234234533', NULL, NULL, 'lailaar0710@gmail.com', '2023-06-08 20:29:05', '$2y$10$cQSABBag1cqnGEG4/taHy.ommSRYa6P3uGGi61jZSqBVVmN2a.jqK', NULL, NULL, '2023-06-05 21:19:15', '2023-06-08 20:29:05'),
(6, 'lailaar77', 'Laila Ainur Rahma', NULL, NULL, NULL, 'lailaar77@student.uns.ac.id', '2023-06-08 02:30:04', NULL, NULL, 'lubxRhv8GyqvtJ4mFzfIuayXJ4qjOOYjF8AJgp4jeDvDovA9rLgUP9fik858', '2023-06-06 17:25:10', '2023-06-08 02:30:04'),
(7, 'kangho', 'kangho', NULL, NULL, NULL, 'kangho@gmail.com', '2023-06-08 19:59:05', '$2y$10$t14Wf5g98e0BOx1d3kdNFO82iuOdk1vnFGoS2pRNdm2nNQ55ksFVK', NULL, NULL, '2023-06-08 19:58:29', '2023-06-14 23:27:55'),
(8, 'kanaya', 'kanaya', NULL, NULL, NULL, 'kanaya@gmail.com', '2023-06-15 01:11:32', '$2y$10$k38Vy81kUroU3RvSM4IFQ.3AcmdzSlThCFFjA6xKY1SxK53Ot1uaa', NULL, NULL, '2023-06-09 00:30:14', '2023-06-15 01:11:32'),
(9, 'laila', 'laila', NULL, NULL, NULL, 'laila@gmail.com', '2023-06-17 18:38:06', '$2y$10$i6Nc/Jg64UoE43b8fEqWiuMQndV4G.jfvPPesBS6E/FzJJaPqavH2', NULL, NULL, '2023-06-09 00:33:46', '2023-06-17 18:38:06'),
(10, 'yorudda', 'yoru here', NULL, NULL, NULL, 'yorudda@gmail.com', NULL, NULL, NULL, 'JuaKGj1ar6LZrLZm7RnqnZqAp6r4LoKpSFLUz8SvpkDJK5NZupMjguYIK4Vm', '2023-06-09 00:35:30', '2023-06-09 00:35:30'),
(11, 'lalahye', 'hye', NULL, NULL, NULL, 'lalahye@gmail.com', '2023-06-14 22:21:36', '$2y$10$L6AobbamtGkV4je7tcP0yOHEyO74FYgZU82LrCwokzTZWo8vax4J.', NULL, NULL, '2023-06-14 22:21:09', '2023-06-14 23:10:07'),
(12, 'trialaccount', 'Trial', '081234324768', NULL, NULL, 'trial@gmail.com', '2023-06-17 18:17:25', '$2y$10$cEiuyr96VnNkSDHQjf0iOOGQtdAZ8nF7EZsDHzjvrlASJJ9pu7jBS', NULL, 'jWEnavANVOYBuxjKPjAVg0eRRzxwVqvMFwwth9k3E02HrWqJQ696Gl2raqKO', '2023-06-17 18:16:50', '2023-06-17 18:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `wallets`
--

CREATE TABLE `wallets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `balance` decimal(8,2) DEFAULT 0.00,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wallets`
--

INSERT INTO `wallets` (`id`, `user_id`, `balance`, `created_at`, `updated_at`) VALUES
(1, 1, '6000.00', '2023-06-12 00:49:55', '2023-06-17 18:35:19'),
(2, 3, '1000.00', '2023-06-12 00:50:25', '2023-06-13 21:09:25'),
(3, 6, '0.00', '2023-06-12 00:51:40', '2023-06-14 04:04:06'),
(4, 10, '0.00', '2023-06-12 00:52:16', '2023-06-14 04:04:41'),
(5, 9, '0.00', '2023-06-12 00:53:08', '2023-06-14 04:04:52'),
(6, 8, '0.00', '2023-06-12 00:53:48', '2023-06-14 04:05:00'),
(7, NULL, '0.00', '2023-06-12 00:54:19', '2023-06-12 00:54:19'),
(8, 2, '15000.00', '2023-06-12 01:00:28', '2023-06-17 18:35:18'),
(9, 4, '0.00', '2023-06-12 01:03:10', '2023-06-12 01:03:10'),
(10, 7, '0.00', '2023-06-13 14:55:44', '2023-06-13 14:55:44'),
(11, 12, '0.00', '2023-06-17 18:16:50', '2023-06-17 18:16:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_tweet_id_foreign` (`tweet_id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donations_user_id_foreign` (`user_id`),
  ADD KEY `donations_tweet_id_foreign` (`tweet_id`);

--
-- Indexes for table `ewallets`
--
ALTER TABLE `ewallets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `follows`
--
ALTER TABLE `follows`
  ADD PRIMARY KEY (`user_id`,`following_user_id`),
  ADD KEY `follows_following_user_id_foreign` (`following_user_id`);

--
-- Indexes for table `likeable_likes`
--
ALTER TABLE `likeable_likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `likeable_likes_unique` (`likeable_id`,`likeable_type`,`user_id`),
  ADD KEY `likeable_likes_user_id_index` (`user_id`);

--
-- Indexes for table `likeable_like_counters`
--
ALTER TABLE `likeable_like_counters`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `likeable_counts` (`likeable_id`,`likeable_type`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `likes_user_id_tweet_id_unique` (`user_id`,`tweet_id`),
  ADD KEY `likes_tweet_id_foreign` (`tweet_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `social_accounts`
--
ALTER TABLE `social_accounts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `social_accounts_provider_id_unique` (`provider_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_debited_wallet_foreign` (`debited_wallet`),
  ADD KEY `transactions_credited_wallet_foreign` (`credited_wallet`),
  ADD KEY `transactions_tweet_id_foreign` (`tweet_id`);

--
-- Indexes for table `tweets`
--
ALTER TABLE `tweets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tweets_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wallets`
--
ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ewallets`
--
ALTER TABLE `ewallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likeable_likes`
--
ALTER TABLE `likeable_likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likeable_like_counters`
--
ALTER TABLE `likeable_like_counters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `social_accounts`
--
ALTER TABLE `social_accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tweets`
--
ALTER TABLE `tweets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `wallets`
--
ALTER TABLE `wallets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_tweet_id_foreign` FOREIGN KEY (`tweet_id`) REFERENCES `tweets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `donations`
--
ALTER TABLE `donations`
  ADD CONSTRAINT `donations_tweet_id_foreign` FOREIGN KEY (`tweet_id`) REFERENCES `tweets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `donations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ewallets`
--
ALTER TABLE `ewallets`
  ADD CONSTRAINT `ewallets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `follows`
--
ALTER TABLE `follows`
  ADD CONSTRAINT `follows_following_user_id_foreign` FOREIGN KEY (`following_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `follows_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_tweet_id_foreign` FOREIGN KEY (`tweet_id`) REFERENCES `tweets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_credited_wallet_foreign` FOREIGN KEY (`credited_wallet`) REFERENCES `wallets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_debited_wallet_foreign` FOREIGN KEY (`debited_wallet`) REFERENCES `wallets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `transactions_tweet_id_foreign` FOREIGN KEY (`tweet_id`) REFERENCES `tweets` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tweets`
--
ALTER TABLE `tweets`
  ADD CONSTRAINT `tweets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `wallets`
--
ALTER TABLE `wallets`
  ADD CONSTRAINT `wallets_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
