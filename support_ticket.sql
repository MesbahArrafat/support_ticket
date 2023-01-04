-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 04, 2023 at 06:57 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sp_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `body`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 13, NULL, 'mesbah Uddin Arfat', '2022-12-28 21:12:16', '2022-12-29 05:32:07', NULL),
(2, 1, 13, 1, 'my name is arafat', '2022-12-28 21:15:44', '2022-12-29 00:29:37', NULL),
(3, 1, 13, 2, 'cfh', '2022-12-28 21:15:48', '2022-12-28 21:15:48', NULL),
(4, 9, 13, 3, 'jrhrtjrjrj', '2022-12-28 21:16:26', '2022-12-28 21:16:26', NULL),
(5, 9, 13, 1, 'rjrjrj', '2022-12-28 21:16:32', '2022-12-28 21:16:32', NULL),
(6, 2, 13, 5, 'not yet to done', '2022-12-28 21:17:23', '2022-12-28 21:17:23', NULL),
(7, 1, 22, NULL, 'This work is done', '2022-12-28 21:40:36', '2022-12-28 21:40:36', NULL),
(8, 6, 22, 7, 'how to one in', '2022-12-28 21:41:42', '2022-12-28 21:41:42', NULL),
(9, 6, 22, 8, 'I don\'t know', '2022-12-28 21:42:02', '2022-12-28 21:42:02', NULL),
(10, 1, 22, 9, 'not to done', '2022-12-28 21:49:58', '2022-12-28 21:49:58', NULL),
(11, 1, 22, 10, 'hellow world', '2022-12-28 21:53:17', '2022-12-28 21:53:17', NULL),
(12, 1, 22, NULL, 'not yet', '2022-12-28 21:53:30', '2022-12-28 21:53:30', NULL),
(13, 1, 22, 12, 'done this work', '2022-12-28 21:54:47', '2022-12-28 21:54:47', NULL),
(14, 1, 22, 13, 'hellow done', '2022-12-28 21:57:38', '2022-12-28 21:57:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_07_042941_create_user_models_table', 1),
(6, '2022_12_07_090620_create_user_details_models_table', 1),
(7, '2022_12_07_090752_create_projects_models_table', 1),
(8, '2022_12_07_090855_create_support_category_models_table', 1),
(9, '2022_12_07_090941_create_support_request_models_table', 1),
(10, '2022_12_07_091031_create_support_request_update_models_table', 1),
(11, '2022_12_29_025116_create_comments_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects_models`
--

DROP TABLE IF EXISTS `projects_models`;
CREATE TABLE IF NOT EXISTS `projects_models` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `projects_models_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `projects_models`
--

INSERT INTO `projects_models` (`id`, `user_id`, `name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(18, NULL, 'Yuhani MS', 'Yuhani MS', '1', '2022-12-29 04:32:37', '2022-12-29 04:46:18'),
(17, 9, 'project 3', 'Culpa dolorem odio', '2', '2022-12-14 04:43:49', '2022-12-14 04:43:49'),
(16, 9, 'project 2', 'Orson Sanders', '1', '2022-12-14 04:43:16', '2022-12-14 04:43:16'),
(7, 2, 'Brielle Rowland', 'Orson Sanders', '2', '2022-12-11 00:12:34', '2022-12-11 00:12:34'),
(8, 2, 'Brielle Rowland', 'Orson Sanders', '2', '2022-12-11 00:12:46', '2022-12-11 00:12:46'),
(9, 6, 'silva', 'Kiara Cooley', '1', '2022-12-11 00:25:32', '2022-12-11 00:25:32'),
(10, 7, 'Anastasia Duran', 'Gage Battle', '1', '2022-12-11 00:30:59', '2022-12-11 00:30:59'),
(11, 7, 'Adam Sharp', 'Cruz Evans', '1', '2022-12-11 21:27:21', '2022-12-11 21:27:21'),
(12, 10, 'Burke Vasquez', 'Michael Richmond', '1', '2022-12-12 02:56:40', '2022-12-12 02:56:40'),
(13, 7, 'Brielle Rowland', 'Aut molestiae ut cil', '1', '2022-12-12 23:05:18', '2022-12-12 23:05:18'),
(14, 7, 'Brielle Rowland  yoooo', 'Aut molestiae ut cil ttttttttttttttttttttttttttt', '1', '2022-12-12 23:06:03', '2022-12-12 23:06:03'),
(15, 9, 'project 1', 'Aut molestiae ut cil', '1', '2022-12-14 04:41:17', '2022-12-14 04:41:17');

-- --------------------------------------------------------

--
-- Table structure for table `support_category_models`
--

DROP TABLE IF EXISTS `support_category_models`;
CREATE TABLE IF NOT EXISTS `support_category_models` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `support_category_models`
--

INSERT INTO `support_category_models` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(5, 'montu mia', 'tut tut', '2022-12-12 02:56:50', '2022-12-29 04:59:34'),
(3, 'Odessa Hunter', 'Molestias excepteur', '2022-12-11 22:50:56', '2022-12-11 22:50:56'),
(6, 'Nogor IT solution', 'Aut molestiae ut cil', '2022-12-12 03:07:56', '2022-12-12 03:07:56'),
(7, 'higher range', 'hellow world', '2022-12-29 04:53:48', '2022-12-29 04:53:48');

-- --------------------------------------------------------

--
-- Table structure for table `support_request_models`
--

DROP TABLE IF EXISTS `support_request_models`;
CREATE TABLE IF NOT EXISTS `support_request_models` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_id` int(11) DEFAULT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `employee_id` int(11) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `support_request_models_customer_id_foreign` (`customer_id`),
  KEY `support_request_models_support_category_id_foreign` (`category_id`),
  KEY `employee_id` (`employee_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `support_request_models`
--

INSERT INTO `support_request_models` (`id`, `project_id`, `customer_id`, `category_id`, `description`, `status`, `employee_id`, `created_at`, `updated_at`) VALUES
(22, 9, 6, 3, 'Non pariatur Eligenf4rf4rffffffffff', 2, 2, '2022-12-15 02:59:25', '2022-12-16 23:13:55'),
(11, 17, 9, 5, 'silva 500', NULL, NULL, '2022-12-13 03:38:51', '2022-12-15 00:19:16'),
(14, 15, 9, 6, 'Laborum ex officiis', NULL, NULL, '2022-12-13 21:48:36', '2022-12-15 00:19:22'),
(21, 9, 6, 5, 'Id repudiandae nece', 2, 12, '2022-12-15 02:58:26', '2022-12-16 23:14:15'),
(18, 17, 9, 6, 'Aut molestiae ut cil', NULL, NULL, '2022-12-15 00:13:36', '2022-12-15 00:13:36'),
(20, 9, 6, 6, 'Sit a quas nisi est', 2, 9, '2022-12-15 02:57:41', '2022-12-15 03:54:07'),
(23, 17, 9, 5, 'Aut molestiae ut cil', NULL, NULL, '2022-12-29 05:19:50', '2022-12-29 05:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `support_request_update_models`
--

DROP TABLE IF EXISTS `support_request_update_models`;
CREATE TABLE IF NOT EXISTS `support_request_update_models` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) NOT NULL,
  `support_request_id` bigint(20) UNSIGNED NOT NULL,
  `commentator_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `support_request_update_models_support_request_id_foreign` (`support_request_id`),
  KEY `support_request_update_models_commentator_id_foreign` (`commentator_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) DEFAULT NULL COMMENT '1=Admin,2=Employee,3=Customer.',
  `status` int(11) DEFAULT NULL COMMENT '1=Active,2=Deactive.',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', '$2a$12$MAoLfevnbYiG24phN6T9wu7Jaj7T9a3iKWfzfXe2GB.uA9GWUd38.', 1, 2, NULL, 'wNASQYtOalGVBkZQgo5YBnI4fiWPyZWYM3EkhOC7ZdRlRuEyH7BnSYqvaVA9', '2022-12-07 23:19:15', '2022-12-16 23:27:53'),
(2, 'Sifat', 'sifat@gmail.com', '$2a$12$LrPpwERRojiLtKky7htp5uNGBXtDoJrIqYFsbhOhT0bqZ52wJ6LWe', 2, 2, NULL, NULL, '2022-12-08 02:18:38', '2022-12-08 02:18:38'),
(4, 'Cedric Reed', 'dugyfom@mailinator.com', '$2y$10$hiKm4ygOiR.7UE32i99TqeAKfLTdMw74V99vM2jW1j6ywqNfrg1KK', 1, 2, NULL, NULL, '2022-12-10 21:50:12', '2022-12-10 21:50:12'),
(5, 'Rhona Guerrero', 'sejukisiw@mailinator.com', '$2y$10$sRLbZj7drMHQBl/ZkoDHq.TjekmUjohw0WygWHnQ4y1MGaGJwdSvC', 1, 1, NULL, NULL, '2022-12-10 22:54:50', '2022-12-10 22:54:50'),
(6, 'Rabbi', 'rabbi@gmail.com', '$2y$10$Fx0Z1sF/oe8ItQkfxbUMwebAlPV14h4MnSy92m166q5j7M/WlN9zq', 3, 1, NULL, NULL, '2022-12-11 00:25:02', '2022-12-11 00:25:02'),
(7, 'Mr.PM', 'pmsir@gmail.com', '$2y$10$UX1bBr2FyjJWVb13ArB2iu.W11LLFAI0O3mveLGQcCrfam3IPGAxm', 3, 1, NULL, NULL, '2022-12-11 00:30:48', '2022-12-11 00:30:48'),
(8, 'Venus Lyons', 'rohazum@mailinator.com', '$2y$10$XLUiuO/CJNfdBu4xyVunyeegqHwilLhXB/Qmfa8x9BYpIc7cS2bPC', 1, 2, NULL, NULL, '2022-12-11 01:28:56', '2022-12-11 01:28:56'),
(10, 'Eden Reed', 'mika@mailinator.com', '$2y$10$.d4Yy37KzyUgdNOiRPBmxOBxWbYU0.X/etKpyiUc6Nb.bRhPDcBLu', 3, 1, NULL, NULL, '2022-12-11 21:27:10', '2022-12-11 21:27:10'),
(12, 'sarafaraz', 'sarfaraz@gmail.com', '$2a$12$3pJ/3B9So7dh.RRsF6q32eEhFSLzzC35iL88Ihy9u6MuQn2I.yvfm', 2, 2, NULL, NULL, '2022-12-12 04:24:43', '2022-12-12 04:24:43'),
(13, 'minu', 'minu@gmail.com', '$2y$10$/hUzjtT5.T7V15EPNubJx.QDVCu/Z64Pj2cqvRDDT2sB4phSj/ViW', 3, 2, NULL, NULL, '2022-12-29 03:57:56', '2022-12-29 04:11:14');

-- --------------------------------------------------------

--
-- Table structure for table `user_details_models`
--

DROP TABLE IF EXISTS `user_details_models`;
CREATE TABLE IF NOT EXISTS `user_details_models` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_details_models_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user_details_models`
--

INSERT INTO `user_details_models` (`id`, `user_id`, `name`, `address`, `phone`, `company_name`, `created_at`, `updated_at`) VALUES
(12, NULL, 'arafat.2022', 'rampura', '01515664863', 'nogor It', '2022-12-30 21:43:35', '2022-12-30 21:49:03'),
(11, NULL, 'Arafat', 'tampuradhaka', '01515664863', 'arafat', '2022-12-10 22:55:49', '2022-12-10 23:02:48'),
(6, NULL, 'Carlos Benton', 'Laudantium sed sed', '46', 'Holman and Snider Co', '2022-12-08 05:03:36', '2022-12-08 05:03:36'),
(7, NULL, 'Todd Rush', 'Ullamco ullamco eu s', '78', 'Mueller Lynn LLC', '2022-12-08 05:07:01', '2022-12-08 05:07:01'),
(10, NULL, 'Gloria Joyce', 'Dignissimos consecte', '44', 'Johns and Valenzuela Trading', '2022-12-10 21:52:10', '2022-12-10 21:52:10');

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

DROP TABLE IF EXISTS `user_models`;
CREATE TABLE IF NOT EXISTS `user_models` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
