-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2023 at 03:48 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtgpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `category_slug`, `title`, `slug`, `image`, `author`, `tag`, `date`, `details`, `created_at`, `updated_at`) VALUES
(9, 'lets-connect', 'Lorem ipsum dolor sit', 'lorem-ipsum-dolor-sit', 'frontend/assets/blog/1670676197.webp', 'Admin', 'html,css', '10-12-2022', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown JAVA printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2022-05-11 04:48:49', '2022-12-10 06:43:17'),
(10, 'auto-subscription', 'Where can I get some?', 'where-can-i-get-some', 'frontend/assets/blog/1670676164.png', 'Admin', NULL, '10-12-2022', 'Contrary to popular belief, Lorem Ipsum is not simply PHP random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2022-05-11 07:42:45', '2022-12-10 06:42:44'),
(11, 'qr-code', 'Where does it come from?', 'where-does-it-come-from', 'frontend/assets/blog/1670676141.png', 'Admin', NULL, '10-12-2022', 'Contrary to popular belief, Lorem Ipsum is not simply HTML random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 1999 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2022-05-11 07:42:58', '2022-12-10 06:42:21');

-- --------------------------------------------------------

--
-- Table structure for table `business_cards`
--

CREATE TABLE `business_cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `card_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `theme_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `theme_color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_lang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'EN',
  `cover` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'lname from user table',
  `sub_title` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'activated',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `company_name` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_websitelink` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ccode` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_number` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_email` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `card_for` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_deleted` tinyint(4) DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_cards`
--

INSERT INTO `business_cards` (`id`, `card_id`, `user_id`, `theme_id`, `theme_color`, `card_lang`, `cover`, `profile`, `card_url`, `card_type`, `title`, `title2`, `sub_title`, `description`, `card_status`, `status`, `created_at`, `updated_at`, `company_name`, `company_websitelink`, `ccode`, `phone_number`, `card_email`, `card_for`, `logo`, `designation`, `deleted_at`, `deleted_by`, `is_deleted`, `location`, `bio`) VALUES
(4, '637876cb3152c', 44, '1', '#fff', 'en', NULL, 'upload/profile/1668839088.png', '637876cb3152c', 'vcard', 'Maidul', 'Developer', NULL, NULL, 'activated', '1', '2022-11-19 00:25:15', '2022-11-19 00:25:15', 'Arobil', NULL, '+880', '01681944126', 'maidul.tech@gmail.com', 'Work', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '637876cb32a0c', 44, '1', '#fff', 'en', NULL, 'upload/profile/1668839088.png', '637876cb32a0c', 'vcard', 'Maidul', 'Developer', NULL, NULL, 'activated', '1', '2022-11-19 00:25:15', '2022-11-19 00:25:15', 'Arobil', NULL, '+880', '01681944126', 'maidul.tech@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, '637882c8dedf1', 46, '1', '#fff', 'en', NULL, 'upload/profile/1668842163.png', '637882c8dedf1', 'vcard', 'Maidul', 'Dveloper', NULL, NULL, 'activated', '1', '2022-11-19 01:16:24', '2022-11-19 01:16:24', 'Arobil', NULL, '+880', '01918993427', 'maidul02@gmail.com', 'Work', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '637882c8e5baf', 46, '1', '#fff', 'en', NULL, 'upload/profile/1668842163.png', '637882c8e5baf', 'vcard', 'Maidul', 'Dveloper', NULL, NULL, 'activated', '1', '2022-11-19 01:16:24', '2022-11-19 01:16:24', 'Arobil', NULL, '+880', '01918993427', 'maidul02@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '6378d30ede830', 46, '1', '#fff', 'en', NULL, '/upload/profile/3-6378d30ee461f3.jpg', 'test', 'vcard', 'Sakib', 'Khan', '', NULL, 'activated', '1', '2022-11-19 06:58:54', '2022-11-19 12:58:55', 'FDC', 'www.fdc.com', '+880', NULL, 'skib@gmail.com', 'TEST', '/upload/logo/3-6378d30f135493.jpg', 'Actor', NULL, NULL, NULL, NULL, NULL),
(9, '6378d84b7e635', 46, '1', '#fff', 'en', NULL, '/upload/profile/62670e55cbfef-6378d84b80d8d62670e55cbfef.jpeg', 'rubel', 'vcard', 'Rubel', 'Hossen', '', NULL, 'activated', '1', '2022-11-19 07:21:15', '2022-11-19 13:21:15', 'Rubel Ltd', 'www.rubel.com', '+880', NULL, 'rubel@gmail.com', 'Rubel', '/upload/logo/12-6378d84b85c5d12.png', 'CEO', NULL, NULL, NULL, NULL, NULL),
(12, '12', 47, '1', '#fff', 'en', NULL, 'upload/profile/1668957249.png', '637a4460c2c55', 'vcard', 'fgfg', 'fgfgg', NULL, NULL, 'activated', '1', '2022-11-20 09:14:40', '2022-11-20 09:17:03', 'fgfg', NULL, '+1', '1212', 'suju@mailinator.com', 'Work', 'upload/logo/1668957421.png', NULL, NULL, NULL, NULL, NULL, NULL),
(13, '637a4460c534b', 47, '1', '#fff', 'en', NULL, 'upload/profile/1668957249.png', '637a4460c534b', 'vcard', 'fgfg', 'fgfgg', NULL, NULL, 'activated', '1', '2022-11-20 09:14:40', '2022-11-20 09:14:40', 'fgfg', NULL, '+1', '1212', 'suju@mailinator.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, '637deb110642a', 2, '1', '#fff', 'en', NULL, 'upload/profile/1669629598.png', 'maidul', 'vcard', 'Maidul', 'Islam', NULL, NULL, 'activated', '1', '2022-11-23 03:42:41', '2022-11-28 04:00:01', 'arobil ltd', 'www.arobil.com', '+1', '01918993427', 'maidul.tech@gmail.com', 'Personal', '/upload/logo/maidul_logo-637deb111c2fdmaidul_logo.png', 'Developer', NULL, NULL, NULL, NULL, NULL),
(30, '637f25bb4b520', 2, '1', '#fff', 'en', NULL, '/upload/profile/maidul_logo-637f25bb5de29maidul_logo.png', 'maidul01', 'vcard', 'Maidul', 'Islam', NULL, NULL, 'activated', '1', '2022-11-24 02:05:15', '2022-11-24 03:57:27', 'Arobil', 'arobil.com', '+880', '01681944126', 'maidul.tech@gmail.com', 'Personal', '/upload/logo/maidul_logo-637f25bb9221fmaidul_logo.png', 'Developer', NULL, NULL, NULL, NULL, NULL),
(31, '6381bd9ff0445', 49, '1', '#fff', 'en', NULL, 'upload/profile/1669447053.png', '6381bd9ff0445', 'vcard', 'Rakib', NULL, NULL, NULL, 'activated', '1', '2022-11-26 01:17:51', '2022-11-26 01:17:51', NULL, NULL, '+880', '01681944126', 'rokib@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, '63836ff8dc70d', 50, '1', '#fff', 'en', NULL, 'upload/profile/1669558211.png', '63836ff8dc70d', 'vcard', 'Sharif Khan', NULL, NULL, NULL, 'activated', '1', '2022-11-27 08:11:04', '2022-11-27 08:11:04', 'Azuramart', NULL, '+880', '016181944126', 'sharif@gmail.com', 'Personal', NULL, 'CEO', NULL, NULL, NULL, NULL, NULL),
(33, '63836ff8ddb69', 50, '1', '#fff', 'en', NULL, 'upload/profile/1669558211.png', '63836ff8ddb69', 'vcard', 'Sharif Khan', NULL, NULL, NULL, 'activated', '1', '2022-11-27 08:11:04', '2022-11-27 08:11:04', 'Azuramart', NULL, '+880', '016181944126', 'sharif@gmail.com', 'Work', NULL, 'CEO', NULL, NULL, NULL, NULL, NULL),
(34, '638618acf057a', 2, '1', '#219653', 'en', NULL, 'upload/profile/1669732256.png', 'test1', 'vcard', 'Md', 'Maidul Islam', NULL, NULL, 'activated', '1', '2022-11-29 08:35:24', '2022-11-29 08:43:56', 'Arobil Ltd', 'www.arobil.com', '+1', '01918993427', 'maidul.tech@gmail.com', 'Personal', 'upload/logo/1669732277.png', 'Developer', NULL, NULL, NULL, NULL, NULL),
(35, '6387118a8de29', 51, '1', '#fff', 'en', NULL, NULL, '6387118a8de29', 'vcard', 'Kamal', NULL, NULL, NULL, 'activated', '1', '2022-11-30 02:17:14', '2022-11-30 02:17:14', NULL, NULL, '+1', '019111111', 'user10@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, '638711c561c08', 52, '1', '#fff', 'en', NULL, NULL, '638711c561c08', 'vcard', 'Jamal', NULL, NULL, NULL, 'activated', '1', '2022-11-30 02:18:13', '2022-11-30 02:18:13', NULL, NULL, '+880', '01918993427', 'jamal@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(37, '6391cff1261e6', 53, '1', '#fff', 'en', NULL, NULL, '6391cff1261e6', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '1', '2022-12-08 05:52:17', '2022-12-08 05:52:17', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Personal', NULL, 'My card', NULL, NULL, NULL, NULL, NULL),
(38, '6391cff126d6b', 53, '1', '#fff', 'en', NULL, NULL, '6391cff126d6b', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '1', '2022-12-08 05:52:17', '2022-12-08 05:52:17', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Work', NULL, 'My card', NULL, NULL, NULL, NULL, NULL),
(39, '6391cff2065ea', 53, '1', '#fff', 'en', NULL, NULL, '6391cff2065ea', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '1', '2022-12-08 05:52:18', '2022-12-08 05:52:18', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Personal', NULL, 'My card', NULL, NULL, NULL, NULL, NULL),
(40, '6391cff207179', 53, '1', '#fff', 'en', NULL, NULL, '6391cff207179', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '1', '2022-12-08 05:52:18', '2022-12-08 05:52:18', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Work', NULL, 'My card', NULL, NULL, NULL, NULL, NULL),
(41, '6391f383ebb8b', 54, '1', '#fff', 'en', NULL, 'upload/profile/1670509378.png', '6391f383ebb8b', 'vcard', 'Rony Mia', NULL, NULL, NULL, 'activated', '1', '2022-12-08 08:24:03', '2022-12-08 08:24:03', 'Arobil', NULL, '+880', '01767671133', 'ronymia.tech@gmail.com', 'Personal', NULL, 'Developer', NULL, NULL, NULL, NULL, NULL),
(42, '6391f383ece93', 54, '1', '#fff', 'en', NULL, 'upload/profile/1670509378.png', '6391f383ece93', 'vcard', 'Rony Mia', NULL, NULL, NULL, 'activated', '1', '2022-12-08 08:24:03', '2022-12-08 08:24:03', 'Arobil', NULL, '+880', '01767671133', 'ronymia.tech@gmail.com', 'Work', NULL, 'Developer', NULL, NULL, NULL, NULL, NULL),
(43, '6391f6140fbdf', 55, '1', '#fff', 'en', NULL, 'upload/profile/1670510060.png', '6391f6140fbdf', 'vcard', 'Spencer Suggs', NULL, NULL, NULL, 'activated', '1', '2022-12-08 08:35:00', '2022-12-08 08:35:00', 'LetsConnect Technology Company', NULL, '+1', '9727420702', 'spencer@letsconnect.site', 'Personal', NULL, 'Founder | Visionary | Innovator', NULL, NULL, NULL, NULL, NULL),
(44, '6391f61410eca', 55, '1', '#fff', 'en', NULL, 'upload/profile/1670510060.png', 'letsconnect', 'vcard', 'Spencer', 'Suggs', NULL, NULL, 'activated', '1', '2022-12-08 08:35:00', '2022-12-08 09:08:24', 'LetsConnect Technology Company', 'www.LetsConnect.site', '+1', '9727420702', 'spencer@letsconnect.site', 'Work', 'upload/logo/1670510425.png', 'Founder | Visionary | Innovator', NULL, NULL, NULL, NULL, NULL),
(45, '639464640f5aa', 56, '1', '#fff', 'en', NULL, 'upload/profile/1670669395.png', '639464640f5aa', 'vcard', 'Arifur Rahman', NULL, NULL, NULL, 'activated', '1', '2022-12-10 04:50:12', '2022-12-10 04:50:12', 'Arobil Limited', NULL, '+880', '01710788656', 'arifmahmud64@gmail.com', 'Personal', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL),
(48, '63947f792585f', 57, '1', '#fff', 'en', NULL, NULL, '63947f792585f', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '1', '2022-12-10 06:45:45', '2022-12-10 06:45:45', 'sdf', NULL, '+1', '23123', 'mr.mokaddes@gmail.com', 'Personal', NULL, 'sdf', NULL, NULL, NULL, NULL, NULL),
(49, '63947f792630e', 57, '1', '#fff', 'en', NULL, NULL, '63947f792630e', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '1', '2022-12-10 06:45:45', '2022-12-10 06:45:45', 'sdf', NULL, '+1', '23123', 'mr.mokaddes@gmail.com', 'Work', NULL, 'sdf', NULL, NULL, NULL, NULL, NULL),
(50, '63947fcb24768', 58, '1', '#fff', 'en', NULL, NULL, '63947fcb24768', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '1', '2022-12-10 06:47:07', '2022-12-10 06:47:07', 'sdf', NULL, '+1', '234234', 'mr.mokaddes@yahoo.com', 'Personal', NULL, 'sdfs', NULL, NULL, NULL, NULL, NULL),
(51, '63947fcb25055', 58, '1', '#fff', 'en', NULL, NULL, '63947fcb25055', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '1', '2022-12-10 06:47:07', '2022-12-10 06:47:07', 'sdf', NULL, '+1', '234234', 'mr.mokaddes@yahoo.com', 'Work', NULL, 'sdfs', NULL, NULL, NULL, NULL, NULL),
(52, '639486bad9ba3', 61, '1', '#fff', 'en', NULL, 'upload/profile/1670678187.png', '639486bad9ba3', 'vcard', 'Arifur Rahman', NULL, NULL, NULL, 'activated', '1', '2022-12-10 07:16:42', '2022-12-10 07:16:42', 'Arobil Limited', NULL, '+880', '01710788656', 'arifurrahman911@live.com', 'Personal', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL),
(53, '639486bada879', 61, '1', '#fff', 'en', NULL, 'upload/profile/1670678187.png', '639486bada879', 'vcard', 'Arifur Rahman', NULL, NULL, NULL, 'activated', '1', '2022-12-10 07:16:42', '2022-12-10 07:16:42', 'Arobil Limited', NULL, '+880', '01710788656', 'arifurrahman911@live.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL),
(54, '63948c377e4dd', 59, '1', '#fff', 'en', NULL, 'upload/profile/1670679586.png', '63948c377e4dd', 'vcard', 'Md Maidul Islam', NULL, NULL, NULL, 'activated', '1', '2022-12-10 07:40:07', '2022-12-10 07:40:07', 'Arobil', NULL, '+880', '01681944126', 'mahibc1@gmail.com', 'Personal', NULL, 'Full Stack Developer', NULL, NULL, NULL, NULL, NULL),
(55, '63948c377f37b', 59, '1', '#fff', 'en', NULL, 'upload/profile/1670679586.png', '63948c377f37b', 'vcard', 'Md Maidul Islam', NULL, NULL, NULL, 'activated', '1', '2022-12-10 07:40:07', '2022-12-10 07:40:07', 'Arobil', NULL, '+880', '01681944126', 'mahibc1@gmail.com', 'Work', NULL, 'Full Stack Developer', NULL, NULL, NULL, NULL, NULL),
(56, '6394955bd8f66', 63, '1', '#fff', 'en', NULL, 'upload/profile/1670681916.png', '6394955bd8f66', 'vcard', 'Arifur', NULL, NULL, NULL, 'activated', '2', '2022-12-10 08:19:07', '2022-12-10 08:19:07', 'Arobil Limited', NULL, '+880', '1710788656', 'arifurrahman01710@gmail.com', 'Personal', NULL, 'Web Developer', '2022-12-11 00:07:42', 1, NULL, NULL, NULL),
(57, '6394955bd9cc0', 63, '1', '#fff', 'en', NULL, 'upload/profile/1670681916.png', '6394955bd9cc0', 'vcard', 'Arifur', NULL, NULL, NULL, 'activated', '2', '2022-12-10 08:19:07', '2022-12-10 08:19:07', 'Arobil Limited', NULL, '+880', '1710788656', 'arifurrahman01710@gmail.com', 'Work', NULL, 'Web Developer', '2022-12-11 00:59:03', 1, NULL, NULL, NULL),
(59, '63955d160b101', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670733065.png', '63955d160b101', 'vcard', 'Tenu', NULL, NULL, NULL, 'activated', '2', '2022-12-10 22:31:18', '2022-12-10 22:31:18', 'APDL Ltd', NULL, '+1268', '1918993458', 'teno@gmail.com', 'Work', NULL, 'Manager Sales', '2022-12-10 23:57:02', 1, NULL, NULL, NULL),
(60, '6398138841a4e', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670910838.png', '6398138841a4e', 'vcard', 'Jamal Khan', NULL, NULL, NULL, 'activated', '1', '2022-12-12 17:54:16', '2022-12-12 17:54:16', 'ABC Group', NULL, '+238', '019189963427', 'teno@gmail.com', 'Personal', NULL, 'Manager', NULL, NULL, NULL, NULL, NULL),
(61, '6398138844d50', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670930297.png', '6398138844d50', 'vcard', 'Jamal', 'Khan', NULL, NULL, 'activated', '1', '2022-12-12 17:54:16', '2022-12-12 23:18:34', 'ABC Group', NULL, '+238', '019189963427', 'teno@gmail.com', 'Work', 'upload/logo/1670911687.png', 'Manager', NULL, NULL, NULL, NULL, NULL),
(62, '6398989f60975', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670944777.png', 'test4', 'vcard', 'Tenu', 'Khan', '', NULL, 'activated', '1', '2022-12-13 03:22:07', '2022-12-13 15:22:07', 'Khan Group', 'https://stackoverflow.com', '+1', '01911116666', 'khan@gmail.com', 'TEST', 'upload/logo/1670944785.png', 'Manager', NULL, NULL, NULL, NULL, NULL),
(64, '639899a572a13', 64, '1', '#fff', 'en', NULL, NULL, 'testf', 'vcard', 'Tenu', 'hkaa', '', NULL, 'activated', '1', '2022-12-13 03:26:29', '2022-12-13 15:26:29', NULL, NULL, '+1', '191889999', 'maidul@gmail.com', 'ttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, '63b19a9e37353', 66, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/1672583836.png', '63b19a9e373b6', 'vcard', 'Raj', NULL, NULL, NULL, 'activated', '1', '2023-01-01 14:37:18', '2023-01-02 12:16:58', 'Arobil', NULL, NULL, '8801681944126', 'raj@gmail.com', 'Work', NULL, 'Develoepr', NULL, NULL, NULL, 'Banani, Dhaka', 'This is a short bio of Maidul Islam'),
(70, '63b2d4e055360', 66, '1', '#219653', 'en', 'assets/uploads/cover/21f78700-13b4-4b5e-9dab-fc224c28a3a8-63b2d4e0557a4.jpg', 'assets/uploads/avatar/41-63b2d4e0553fc.jpg', '63b2d4e055360', 'vcard', 'Md Maidul Islam', NULL, '', NULL, 'activated', '1', '2023-01-02 12:58:08', '2023-01-02 12:58:08', 'Arobil Ltd', NULL, NULL, NULL, NULL, 'Office', 'assets/uploads/logo/21f78700-13b4-4b5e-9dab-fc224c28a3a8-63b2d4e0559d9.jpg', 'Developer', NULL, NULL, NULL, 'Banani, Dhaka', 'I am from Bangladesh.'),
(71, '63b2eff777acb', 66, '1', '#fff', 'en', 'assets/uploads/avatar/maidul-63b4370b9b46e.jpg', 'assets/uploads/avatar/maidul-63b4370b99bfb.jpg', 'maidul77', 'vcard', 'Maidul', NULL, '', NULL, 'activated', '1', '2023-01-02 14:53:43', '2023-01-03 14:11:36', 'Arobil Ltd', NULL, NULL, NULL, 'raj@gmail.com', 'Office', 'assets/uploads/avatar/maidul-63b437982b8ab.jpg', 'Php Developer', NULL, NULL, NULL, 'Dhaka, Bangladesh', 'Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.');

-- --------------------------------------------------------

--
-- Table structure for table `business_fields`
--

CREATE TABLE `business_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `card_id` int(10) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_id` int(10) DEFAULT NULL,
  `label` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_fields`
--

INSERT INTO `business_fields` (`id`, `card_id`, `type`, `icon`, `icon_image`, `icon_id`, `label`, `content`, `position`, `status`, `created_at`, `updated_at`) VALUES
(20, 66, '', 'twitter', 'assets/img/icon/custom_icon/322775612_1123025228376934_9165924068334459188_n-63b2bb383fc60.jpg', 2, 'Official1110', 'https://www.facebook.com/maidulislam.tech11110', '1', '1', '2023-01-02 03:58:18', '2023-01-02 11:09:22'),
(22, 70, '', 'email', 'assets/img/icon/email.svg', 5, 'Personal', 'https://www.facebook.com/maidulislam.tech11110', '1', '1', '2023-01-02 03:58:18', '2023-01-02 11:09:22');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(1, 'Vcards Sharing', 'vcards-sharing', '2022-05-11 09:27:22', '2022-05-21 21:01:52'),
(4, 'Whats  App Store', 'whats-app-store', '2022-05-11 09:30:11', '2022-05-21 21:01:30'),
(5, 'Lets Connect', 'lets-connect', '2022-05-11 09:30:23', '2022-05-21 21:01:16'),
(6, 'Auto Subscription', 'auto-subscription', '2022-05-11 09:30:37', '2022-05-21 21:01:03'),
(9, 'QR Code', 'qr-code', '2022-05-11 23:26:25', '2022-05-21 21:00:30'),
(15, 'vcards', 'vcards', '2022-05-12 23:07:24', '2022-05-21 21:00:09');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(10) UNSIGNED NOT NULL,
  `config_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config_value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `config_key`, `config_value`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'Mtgpro.me', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(2, 'currency', 'USD', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(3, 'timezone', 'Africa/Abidjan', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(4, 'paypal_mode', 'sandbox', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(5, 'paypal_client_id', 'Aa8_7OJaxmCZQpkx3hbzdySDz7haM0Wu6c6MmzX5JQsaywY1i8HMJo2ddnr9-pEEoRP3qvjflrxOVoXL', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(6, 'paypal_secret', 'ELMx8Z_ddA0Z597lD-dDPssM4VxBbnWvvoxb1mjuIiMCHLRSzbSN6owESivW4moqRPPYOTyl1J9QxSx0', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(7, 'razorpay_key', 'YOUR_RAZORPAY_KEY', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(8, 'razorpay_secret', 'YOUR_RAZORPAY_SECRET', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(9, 'term', 'monthly', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(10, 'stripe_publishable_key', 'pk_test_51M9pqYBIRmXVjgUGW3b1i91X0uTNeU6umRaoD9UprcFLotiHpfdBwgr4MnkbZoPuKKPFmdWJFVzWTwvUgxBrcl1d00OcqJU0Ta', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(11, 'stripe_secret', 'sk_test_51M9pqYBIRmXVjgUG4VjKaH21Jm0s6KvLTcIZ6fgTqpvfIbfuVocHbjn4vOeVHX6yrJekPPw4xfphkU4EN7ItAqr500Q3kUMHc8', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(12, 'app_theme', 'blue', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(13, 'primary_image', '/frontend/assets/elements/home.gif', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(14, 'secondary_image', '/frontend/assets/elements/home.svg', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(15, 'tax_type', 'exclusive', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(16, 'invoice_prefix', 'INV-', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(17, 'invoice_name', 'LetsConnect', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(18, 'invoice_email', 'sales@letsconnect.com', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(19, 'invoice_phone', '+88 01767671133', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(20, 'invoice_address', '123, lorem ipsum', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(21, 'invoice_city', 'dhaka', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(22, 'invoice_state', 'dhaka', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(23, 'invoice_zipcode', '1212', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(24, 'invoice_country', 'Bangaldesh', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(25, 'tax_name', 'Goods and Service Tax', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(26, 'tax_value', '18', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(27, 'tax_number', 'SPN125553322', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(28, 'email_heading', 'Thanks for using LetsConnect. This is an invoice for your recent purchase.', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(29, 'email_footer', 'If you’re having trouble with the button above, please login into your web browser.', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(30, 'invoice_footer', 'Thank you very much for doing business with us. We look forward to working with you again!', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(31, 'share_content', 'Welcome to { business_name }, Here is my digital vCard, { business_url } \r\nPowered by: { appName }', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(32, 'bank_transfer', 'Bank: FARM CREDIT BANK DN P&I\r\nBank Account Number: 18539734757                     \r\nRouting Number: 21054734\r\nIBAN: IN94769888520201207044719366\r\n\r\nBank: FARM CREDIT BANK DN P&I\r\nBank Account Number: 18539734757                     \r\nRouting Number: 21054734\r\nIBAN: IN94769888520201207044719366', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(33, 'stripe_endpoint_secret', 'whsec_akol6QZWkkwjhIsX5crV0PwYNGyLnRcx', '2022-06-28 16:41:12', '2022-06-28 16:41:12');

-- --------------------------------------------------------

--
-- Table structure for table `connects`
--

CREATE TABLE `connects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `ccode` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `card_id` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connects`
--

INSERT INTO `connects` (`id`, `name`, `title`, `ccode`, `phone`, `email`, `company_name`, `message`, `user_id`, `card_id`, `created_at`) VALUES
(1, 'asd', 'sad', '+880', '3424', 'asdasd@sdf.com', 'asd', 'sdd', 2, 63763960, '2022-11-24 12:31:38'),
(2, 'Momin Khan', 'sad', '+880', '3424', 'asdasd@sdf.com', 'asd', 'sdd', 2, 63763960, '2022-11-24 12:32:10'),
(3, 'Mokaddes', 'Hello Dear', '+880', '1750899448', 'mr.mokaddes@gmail.com', 'Arobil', 'I want to conncet with you', 2, 63763960, '2022-11-24 12:48:21'),
(4, 'Mkds khan', 'Let\'s Connect', '+880', '1788189944', 'mkds@gmail.com', 'My coompany', 'No Message', 2, 63763960, '2022-11-24 13:06:22'),
(5, 'new', 'title', '+880', '1788189944', 'myemail@mail.com', 'Company', 'Message', 2, 63763960, '2022-11-24 13:08:26'),
(6, 'Momin Khan', 'Connect Me', '+880', '1788189944', 'mkds@gmail.com', 'Arobil Ltd', 'NoMessage', 2, 63763960, '2022-11-24 13:14:24'),
(7, 'Muddassir', 'New Title', '+880', '185465465', 'MAI@MAIL.COM', 'oASIS it', 'Mokaddes', 2, 63763960, '2022-11-24 13:21:49'),
(8, 'Md Maidul', 'Developer', '+880', '01918993427', 'akil@gmail.com', 'Arobil', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage', 2, 637, '2022-11-29 10:33:49'),
(9, 'Md', 'Developer', '+1', '01918993427', 'maidul@gmail.com', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage', 2, 637, '2022-11-29 10:37:31'),
(10, 'Maidul', 'Developer', '+880', '011681944126', 'midul@gmail.com', 'www.arobil.com', 'The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government', 2, 30, '2022-11-29 12:11:24'),
(11, 'Maidul', 'Developer', '+880', '011681944126', 'midul@gmail.com', 'www.arobil.com', 'The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government', 2, 30, '2022-11-29 12:13:31'),
(12, 'Md Jamil', 'About Fiverr', '+880', '01918993427', 'jamil@gmail.com', 'Arobil', 'I am from Dhaka, I want to talk about new business idea, please knock me when you feel free.\r\nThanks', 59, 54, '2022-12-10 13:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` int(10) UNSIGNED NOT NULL,
  `priority` int(11) NOT NULL,
  `iso_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `symbol` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subunit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subunit_to_unit` int(11) NOT NULL,
  `symbol_first` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `html_entity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decimal_mark` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thousands_separator` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iso_numeric` int(11) NOT NULL,
  `is_default` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `priority`, `iso_code`, `name`, `symbol`, `subunit`, `subunit_to_unit`, `symbol_first`, `html_entity`, `decimal_mark`, `thousands_separator`, `iso_numeric`, `is_default`) VALUES
(1, 100, 'AED', 'United Arab Emirates Dirham', 'د.إ', 'Fils', 100, 'true', '', '.', ',', 784, 0),
(2, 100, 'AFN', 'Afghan Afghani', '؋', 'Pul', 100, 'false', '', '.', ',', 971, 0),
(3, 100, 'ALL', 'Albanian Lek', 'L', 'Qintar', 100, 'false', '', '.', ',', 8, 0),
(4, 100, 'AMD', 'Armenian Dram', 'դր.', 'Luma', 100, 'false', '', '.', ',', 51, 0),
(5, 100, 'ANG', 'Netherlands Antillean Gulden', 'ƒ', 'Cent', 100, 'true', '&#x0192;', ',', '.', 532, 0),
(6, 100, 'AOA', 'Angolan Kwanza', 'Kz', 'Cêntimo', 100, 'false', '', '.', ',', 973, 0),
(7, 100, 'ARS', 'Argentine Peso', '$', 'Centavo', 100, 'true', '&#x20B1;', ',', '.', 32, 0),
(8, 4, 'AUD', 'Australian Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 36, 0),
(9, 100, 'AWG', 'Aruban Florin', 'ƒ', 'Cent', 100, 'false', '&#x0192;', '.', ',', 533, 0),
(10, 100, 'AZN', 'Azerbaijani Manat', 'null', 'Qəpik', 100, 'true', '', '.', ',', 944, 0),
(11, 100, 'BAM', 'Bosnia and Herzegovina Convertible Mark', 'КМ', 'Fening', 100, 'true', '', '.', ',', 977, 0),
(12, 100, 'BBD', 'Barbadian Dollar', '$', 'Cent', 100, 'false', '$', '.', ',', 52, 0),
(13, 100, 'BDT', 'Bangladeshi Taka', '৳', 'Paisa', 100, 'true', '', '.', ',', 50, 0),
(14, 100, 'BGN', 'Bulgarian Lev', 'лв', 'Stotinka', 100, 'false', '', '.', ',', 975, 0),
(15, 100, 'BHD', 'Bahraini Dinar', 'ب.د', 'Fils', 1000, 'true', '', '.', ',', 48, 0),
(16, 100, 'BIF', 'Burundian Franc', 'Fr', 'Centime', 100, 'false', '', '.', ',', 108, 0),
(17, 100, 'BMD', 'Bermudian Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 60, 0),
(18, 100, 'BND', 'Brunei Dollar', '$', 'Sen', 100, 'true', '$', '.', ',', 96, 0),
(19, 100, 'BOB', 'Bolivian Boliviano', 'Bs.', 'Centavo', 100, 'true', '', '.', ',', 68, 0),
(20, 100, 'BRL', 'Brazilian Real', 'R$', 'Centavo', 100, 'true', 'R$', ',', '.', 986, 0),
(21, 100, 'BSD', 'Bahamian Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 44, 0),
(22, 100, 'BTN', 'Bhutanese Ngultrum', 'Nu.', 'Chertrum', 100, 'false', '', '.', ',', 64, 0),
(23, 100, 'BWP', 'Botswana Pula', 'P', 'Thebe', 100, 'true', '', '.', ',', 72, 0),
(24, 100, 'BYR', 'Belarusian Ruble', 'Br', 'Kapyeyka', 100, 'false', '', '.', ',', 974, 0),
(25, 100, 'BZD', 'Belize Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 84, 0),
(26, 5, 'CAD', 'Canadian Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 124, 0),
(27, 100, 'CDF', 'Congolese Franc', 'Fr', 'Centime', 100, 'false', '', '.', ',', 976, 0),
(28, 100, 'CHF', 'Swiss Franc', 'Fr', 'Rappen', 100, 'true', '', '.', ',', 756, 0),
(29, 100, 'CLF', 'Unidad de Fomento', 'UF', 'Peso', 1, 'true', '&#x20B1;', ',', '.', 990, 0),
(30, 100, 'CLP', 'Chilean Peso', '$', 'Peso', 1, 'true', '&#36;', ',', '.', 152, 0),
(31, 100, 'CNY', 'Chinese Renminbi Yuan', '¥', 'Fen', 100, 'true', '&#20803;', '.', ',', 156, 0),
(32, 100, 'COP', 'Colombian Peso', '$', 'Centavo', 100, 'true', '&#x20B1;', ',', '.', 170, 0),
(33, 100, 'CRC', 'Costa Rican Colón', '₡', 'Céntimo', 100, 'true', '&#x20A1;', ',', '.', 188, 0),
(34, 100, 'CUC', 'Cuban Convertible Peso', '$', 'Centavo', 100, 'false', '', '.', ',', 931, 0),
(35, 100, 'CUP', 'Cuban Peso', '$', 'Centavo', 100, 'true', '&#x20B1;', '.', ',', 192, 0),
(36, 100, 'CVE', 'Cape Verdean Escudo', '$', 'Centavo', 100, 'false', '', '.', ',', 132, 0),
(37, 100, 'CZK', 'Czech Koruna', 'Kč', 'Haléř', 100, 'true', '', ',', '.', 203, 0),
(38, 100, 'DJF', 'Djiboutian Franc', 'Fdj', 'Centime', 100, 'false', '', '.', ',', 262, 0),
(39, 100, 'DKK', 'Danish Krone', 'kr', 'Øre', 100, 'false', '', ',', '.', 208, 0),
(40, 100, 'DOP', 'Dominican Peso', '$', 'Centavo', 100, 'true', '&#x20B1;', '.', ',', 214, 0),
(41, 100, 'DZD', 'Algerian Dinar', 'د.ج', 'Centime', 100, 'false', '', '.', ',', 12, 0),
(42, 100, 'EGP', 'Egyptian Pound', 'ج.م', 'Piastre', 100, 'true', '&#x00A3;', '.', ',', 818, 0),
(43, 100, 'ERN', 'Eritrean Nakfa', 'Nfk', 'Cent', 100, 'false', '', '.', ',', 232, 0),
(44, 100, 'ETB', 'Ethiopian Birr', 'Br', 'Santim', 100, 'false', '', '.', ',', 230, 0),
(45, 2, 'EUR', 'Euro', '€', 'Cent', 100, 'true', '&#x20AC;', ',', '.', 978, 0),
(46, 100, 'FJD', 'Fijian Dollar', '$', 'Cent', 100, 'false', '$', '.', ',', 242, 0),
(47, 100, 'FKP', 'Falkland Pound', '£', 'Penny', 100, 'false', '&#x00A3;', '.', ',', 238, 0),
(48, 3, 'GBP', 'British Pound', '£', 'Penny', 100, 'true', '&#x00A3;', '.', ',', 826, 0),
(49, 100, 'GEL', 'Georgian Lari', 'ლ', 'Tetri', 100, 'false', '', '.', ',', 981, 0),
(50, 100, 'GHS', 'Ghanaian Cedi', '₵', 'Pesewa', 100, 'true', '&#x20B5;', '.', ',', 936, 0),
(51, 100, 'GIP', 'Gibraltar Pound', '£', 'Penny', 100, 'true', '&#x00A3;', '.', ',', 292, 0),
(52, 100, 'GMD', 'Gambian Dalasi', 'D', 'Butut', 100, 'false', '', '.', ',', 270, 0),
(53, 100, 'GNF', 'Guinean Franc', 'Fr', 'Centime', 100, 'false', '', '.', ',', 324, 0),
(54, 100, 'GTQ', 'Guatemalan Quetzal', 'Q', 'Centavo', 100, 'true', '', '.', ',', 320, 0),
(55, 100, 'GYD', 'Guyanese Dollar', '$', 'Cent', 100, 'false', '$', '.', ',', 328, 0),
(56, 100, 'HKD', 'Hong Kong Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 344, 0),
(57, 100, 'HNL', 'Honduran Lempira', 'L', 'Centavo', 100, 'true', '', '.', ',', 340, 0),
(58, 100, 'HRK', 'Croatian Kuna', 'kn', 'Lipa', 100, 'true', '', ',', '.', 191, 0),
(59, 100, 'HTG', 'Haitian Gourde', 'G', 'Centime', 100, 'false', '', '.', ',', 332, 0),
(60, 100, 'HUF', 'Hungarian Forint', 'Ft', 'Fillér', 100, 'false', '', ',', '.', 348, 0),
(61, 100, 'IDR', 'Indonesian Rupiah', 'Rp', 'Sen', 100, 'true', '', ',', '.', 360, 0),
(62, 100, 'ILS', 'Israeli New Sheqel', '₪', 'Agora', 100, 'true', '&#x20AA;', '.', ',', 376, 0),
(63, 100, 'INR', 'Indian Rupee', '₹', 'Paisa', 100, 'true', '&#x20b9;', '.', ',', 356, 0),
(64, 100, 'IQD', 'Iraqi Dinar', 'ع.د', 'Fils', 1000, 'false', '', '.', ',', 368, 0),
(65, 100, 'IRR', 'Iranian Rial', '﷼', 'Dinar', 100, 'true', '&#xFDFC;', '.', ',', 364, 0),
(66, 100, 'ISK', 'Icelandic Króna', 'kr', 'Eyrir', 100, 'true', '', ',', '.', 352, 0),
(67, 100, 'JMD', 'Jamaican Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 388, 0),
(68, 100, 'JOD', 'Jordanian Dinar', 'د.ا', 'Piastre', 100, 'true', '', '.', ',', 400, 0),
(69, 6, 'JPY', 'Japanese Yen', '¥', 'null', 1, 'true', '&#x00A5;', '.', ',', 392, 0),
(70, 100, 'KES', 'Kenyan Shilling', 'KSh', 'Cent', 100, 'true', '', '.', ',', 404, 0),
(71, 100, 'KGS', 'Kyrgyzstani Som', 'som', 'Tyiyn', 100, 'false', '', '.', ',', 417, 0),
(72, 100, 'KHR', 'Cambodian Riel', '៛', 'Sen', 100, 'false', '&#x17DB;', '.', ',', 116, 0),
(73, 100, 'KMF', 'Comorian Franc', 'Fr', 'Centime', 100, 'false', '', '.', ',', 174, 0),
(74, 100, 'KPW', 'North Korean Won', '₩', 'Chŏn', 100, 'false', '&#x20A9;', '.', ',', 408, 0),
(75, 100, 'KRW', 'South Korean Won', '₩', 'null', 1, 'true', '&#x20A9;', '.', ',', 410, 0),
(76, 100, 'KWD', 'Kuwaiti Dinar', 'د.ك', 'Fils', 1000, 'true', '', '.', ',', 414, 0),
(77, 100, 'KYD', 'Cayman Islands Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 136, 0),
(78, 100, 'KZT', 'Kazakhstani Tenge', '〒', 'Tiyn', 100, 'false', '', '.', ',', 398, 0),
(79, 100, 'LAK', 'Lao Kip', '₭', 'Att', 100, 'false', '&#x20AD;', '.', ',', 418, 0),
(80, 100, 'LBP', 'Lebanese Pound', 'ل.ل', 'Piastre', 100, 'true', '&#x00A3;', '.', ',', 422, 0),
(81, 100, 'LKR', 'Sri Lankan Rupee', '₨', 'Cent', 100, 'false', '&#x0BF9;', '.', ',', 144, 0),
(82, 100, 'LRD', 'Liberian Dollar', '$', 'Cent', 100, 'false', '$', '.', ',', 430, 0),
(83, 100, 'LSL', 'Lesotho Loti', 'L', 'Sente', 100, 'false', '', '.', ',', 426, 0),
(84, 100, 'LTL', 'Lithuanian Litas', 'Lt', 'Centas', 100, 'false', '', '.', ',', 440, 0),
(85, 100, 'LVL', 'Latvian Lats', 'Ls', 'Santīms', 100, 'true', '', '.', ',', 428, 0),
(86, 100, 'LYD', 'Libyan Dinar', 'ل.د', 'Dirham', 1000, 'false', '', '.', ',', 434, 0),
(87, 100, 'MAD', 'Moroccan Dirham', 'د.م.', 'Centime', 100, 'false', '', '.', ',', 504, 0),
(88, 100, 'MDL', 'Moldovan Leu', 'L', 'Ban', 100, 'false', '', '.', ',', 498, 0),
(89, 100, 'MGA', 'Malagasy Ariary', 'Ar', 'Iraimbilanja', 5, 'true', '', '.', ',', 969, 0),
(90, 100, 'MKD', 'Macedonian Denar', 'ден', 'Deni', 100, 'false', '', '.', ',', 807, 0),
(91, 100, 'MMK', 'Myanmar Kyat', 'K', 'Pya', 100, 'false', '', '.', ',', 104, 0),
(92, 100, 'MNT', 'Mongolian Tögrög', '₮', 'Möngö', 100, 'false', '&#x20AE;', '.', ',', 496, 0),
(93, 100, 'MOP', 'Macanese Pataca', 'P', 'Avo', 100, 'false', '', '.', ',', 446, 0),
(94, 100, 'MRO', 'Mauritanian Ouguiya', 'UM', 'Khoums', 5, 'false', '', '.', ',', 478, 0),
(95, 100, 'MUR', 'Mauritian Rupee', '₨', 'Cent', 100, 'true', '&#x20A8;', '.', ',', 480, 0),
(96, 100, 'MVR', 'Maldivian Rufiyaa', 'MVR', 'Laari', 100, 'false', '', '.', ',', 462, 0),
(97, 100, 'MWK', 'Malawian Kwacha', 'MK', 'Tambala', 100, 'false', '', '.', ',', 454, 0),
(98, 100, 'MXN', 'Mexican Peso', '$', 'Centavo', 100, 'true', '$', '.', ',', 484, 0),
(99, 100, 'MYR', 'Malaysian Ringgit', 'RM', 'Sen', 100, 'true', '', '.', ',', 458, 0),
(100, 100, 'MZN', 'Mozambican Metical', 'MTn', 'Centavo', 100, 'true', '', ',', '.', 943, 0),
(101, 100, 'NAD', 'Namibian Dollar', '$', 'Cent', 100, 'false', '$', '.', ',', 516, 0),
(102, 100, 'NGN', 'Nigerian Naira', '₦', 'Kobo', 100, 'false', '&#x20A6;', '.', ',', 566, 0),
(103, 100, 'NIO', 'Nicaraguan Córdoba', 'C$', 'Centavo', 100, 'false', '', '.', ',', 558, 0),
(104, 100, 'NOK', 'Norwegian Krone', 'kr', 'Øre', 100, 'true', 'kr', ',', '.', 578, 0),
(105, 100, 'NPR', 'Nepalese Rupee', '₨', 'Paisa', 100, 'true', '&#x20A8;', '.', ',', 524, 0),
(106, 100, 'NZD', 'New Zealand Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 554, 0),
(107, 100, 'OMR', 'Omani Rial', 'ر.ع.', 'Baisa', 1000, 'true', '&#xFDFC;', '.', ',', 512, 0),
(108, 100, 'PAB', 'Panamanian Balboa', 'B/.', 'Centésimo', 100, 'false', '', '.', ',', 590, 0),
(109, 100, 'PEN', 'Peruvian Nuevo Sol', 'S/.', 'Céntimo', 100, 'true', 'S/.', '.', ',', 604, 0),
(110, 100, 'PGK', 'Papua New Guinean Kina', 'K', 'Toea', 100, 'false', '', '.', ',', 598, 0),
(111, 100, 'PHP', 'Philippine Peso', '₱', 'Centavo', 100, 'true', '&#x20B1;', '.', ',', 608, 0),
(112, 100, 'PKR', 'Pakistani Rupee', '₨', 'Paisa', 100, 'true', '&#x20A8;', '.', ',', 586, 0),
(113, 100, 'PLN', 'Polish Złoty', 'zł', 'Grosz', 100, 'false', 'z&#322;', ',', '', 985, 0),
(114, 100, 'PYG', 'Paraguayan Guaraní', '₲', 'Céntimo', 100, 'true', '&#x20B2;', '.', ',', 600, 0),
(115, 100, 'QAR', 'Qatari Riyal', 'ر.ق', 'Dirham', 100, 'false', '&#xFDFC;', '.', ',', 634, 0),
(116, 100, 'RON', 'Romanian Leu', 'Lei', 'Bani', 100, 'true', '', ',', '.', 946, 0),
(117, 100, 'RSD', 'Serbian Dinar', 'РСД', 'Para', 100, 'true', '', '.', ',', 941, 0),
(118, 100, 'RUB', 'Russian Ruble', 'р.', 'Kopek', 100, 'false', '&#x0440;&#x0443;&#x0431;', ',', '.', 643, 0),
(119, 100, 'RWF', 'Rwandan Franc', 'FRw', 'Centime', 100, 'false', '', '.', ',', 646, 0),
(120, 100, 'SAR', 'Saudi Riyal', 'ر.س', 'Hallallah', 100, 'true', '&#xFDFC;', '.', ',', 682, 0),
(121, 100, 'SBD', 'Solomon Islands Dollar', '$', 'Cent', 100, 'false', '$', '.', ',', 90, 0),
(122, 100, 'SCR', 'Seychellois Rupee', '₨', 'Cent', 100, 'false', '&#x20A8;', '.', ',', 690, 0),
(123, 100, 'SDG', 'Sudanese Pound', '£', 'Piastre', 100, 'true', '', '.', ',', 938, 0),
(124, 100, 'SEK', 'Swedish Krona', 'kr', 'Öre', 100, 'false', '', ',', '', 752, 0),
(125, 100, 'SGD', 'Singapore Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 702, 0),
(126, 100, 'SHP', 'Saint Helenian Pound', '£', 'Penny', 100, 'false', '&#x00A3;', '.', ',', 654, 0),
(127, 100, 'SKK', 'Slovak Koruna', 'Sk', 'Halier', 100, 'true', '', '.', ',', 703, 0),
(128, 100, 'SLL', 'Sierra Leonean Leone', 'Le', 'Cent', 100, 'false', '', '.', ',', 694, 0),
(129, 100, 'SOS', 'Somali Shilling', 'Sh', 'Cent', 100, 'false', '', '.', ',', 706, 0),
(130, 100, 'SRD', 'Surinamese Dollar', '$', 'Cent', 100, 'false', '', '.', ',', 968, 0),
(131, 100, 'SSP', 'South Sudanese Pound', '£', 'piaster', 100, 'false', '&#x00A3;', '.', ',', 728, 0),
(132, 100, 'STD', 'São Tomé and Príncipe Dobra', 'Db', 'Cêntimo', 100, 'false', '', '.', ',', 678, 0),
(133, 100, 'SVC', 'Salvadoran Colón', '₡', 'Centavo', 100, 'true', '&#x20A1;', '.', ',', 222, 0),
(134, 100, 'SYP', 'Syrian Pound', '£S', 'Piastre', 100, 'false', '&#x00A3;', '.', ',', 760, 0),
(135, 100, 'SZL', 'Swazi Lilangeni', 'L', 'Cent', 100, 'true', '', '.', ',', 748, 0),
(136, 100, 'THB', 'Thai Baht', '฿', 'Satang', 100, 'true', '&#x0E3F;', '.', ',', 764, 0),
(137, 100, 'TJS', 'Tajikistani Somoni', 'ЅМ', 'Diram', 100, 'false', '', '.', ',', 972, 0),
(138, 100, 'TMT', 'Turkmenistani Manat', 'T', 'Tenge', 100, 'false', '', '.', ',', 934, 0),
(139, 100, 'TND', 'Tunisian Dinar', 'د.ت', 'Millime', 1000, 'false', '', '.', ',', 788, 0),
(140, 100, 'TOP', 'Tongan Paʻanga', 'T$', 'Seniti', 100, 'true', '', '.', ',', 776, 0),
(141, 100, 'TRY', 'Turkish Lira', 'TL', 'kuruş', 100, 'false', '', ',', '.', 949, 0),
(142, 100, 'TTD', 'Trinidad and Tobago Dollar', '$', 'Cent', 100, 'false', '$', '.', ',', 780, 0),
(143, 100, 'TWD', 'New Taiwan Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 901, 0),
(144, 100, 'TZS', 'Tanzanian Shilling', 'Sh', 'Cent', 100, 'true', '', '.', ',', 834, 0),
(145, 100, 'UAH', 'Ukrainian Hryvnia', '₴', 'Kopiyka', 100, 'false', '&#x20B4;', '.', ',', 980, 0),
(146, 100, 'UGX', 'Ugandan Shilling', 'USh', 'Cent', 100, 'false', '', '.', ',', 800, 0),
(147, 1, 'USD', 'United States Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 840, 0),
(148, 100, 'UYU', 'Uruguayan Peso', '$', 'Centésimo', 100, 'true', '&#x20B1;', ',', '.', 858, 0),
(149, 100, 'UZS', 'Uzbekistani Som', 'null', 'Tiyin', 100, 'false', '', '.', ',', 860, 0),
(150, 100, 'VEF', 'Venezuelan Bolívar', 'Bs F', 'Céntimo', 100, 'true', '', ',', '.', 937, 0),
(151, 100, 'VND', 'Vietnamese Đồng', '₫', 'Hào', 10, 'true', '&#x20AB;', ',', '.', 704, 0),
(152, 100, 'VUV', 'Vanuatu Vatu', 'Vt', 'null', 1, 'true', '', '.', ',', 548, 0),
(153, 100, 'WST', 'Samoan Tala', 'T', 'Sene', 100, 'false', '', '.', ',', 882, 0),
(154, 100, 'XAF', 'Central African Cfa Franc', 'Fr', 'Centime', 100, 'false', '', '.', ',', 950, 0),
(155, 100, 'XAG', 'Silver (Troy Ounce)', 'oz t', 'oz', 1, 'false', '', '.', ',', 961, 0),
(156, 100, 'XAU', 'Gold (Troy Ounce)', 'oz t', 'oz', 1, 'false', '', '.', ',', 959, 0),
(157, 100, 'XCD', 'East Caribbean Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 951, 0),
(158, 100, 'XDR', 'Special Drawing Rights', 'SDR', '', 1, 'false', '$', '.', ',', 960, 0),
(159, 100, 'XOF', 'West African Cfa Franc', 'Fr', 'Centime', 100, 'false', '', '.', ',', 952, 0),
(160, 100, 'XPF', 'Cfp Franc', 'Fr', 'Centime', 100, 'false', '', '.', ',', 953, 0),
(161, 100, 'YER', 'Yemeni Rial', '﷼', 'Fils', 100, 'false', '&#xFDFC;', '.', ',', 886, 0),
(162, 100, 'ZAR', 'South African Rand', 'R', 'Cent', 100, 'true', '&#x0052;', '.', ',', 710, 0),
(163, 100, 'ZMK', 'Zambian Kwacha', 'ZK', 'Ngwee', 100, 'false', '', '.', ',', 894, 0),
(164, 100, 'ZMW', 'Zambian Kwacha', 'ZK', 'Ngwee', 100, 'false', '', '.', ',', 967, 0),
(165, 1, 'USD', 'United States Dollar', '$', 'Cent', 100, 'true', '$', '.', ',', 840, 1);

-- --------------------------------------------------------

--
-- Table structure for table `custom_pages`
--

CREATE TABLE `custom_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url_slug` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order_id` int(11) NOT NULL DEFAULT 1,
  `meta_keywords` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `update_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `position` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `display_in` enum('col-1','col-2','col-3','col-4') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `custom_pages`
--

INSERT INTO `custom_pages` (`id`, `title`, `url_slug`, `body`, `is_active`, `order_id`, `meta_keywords`, `meta_description`, `update_by`, `created_by`, `created_at`, `updated_at`, `position`, `updated_by`, `display_in`) VALUES
(4, 'Privacy Policy', 'privacy-policy', '<div class=\"px-3 lg:px-5 lg:-mt-4 mb-5 lg:mb-0\">\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            <span style=\"font-size: 14px;\">﻿</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>\r\n\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Consent</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Information we collect</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            How we use your information</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Log Files</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Cookies and Web Beacons</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            For more general information on cookies, please read \"What Are Cookies\".\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Advertising Partners Privacy Policies</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Third Party Privacy Policies</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            GDPR Data Protection Rights</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n\r\n                        <p class=\"primary-color-blackish-blue text-xl 2xl:text-4xl font-semibold px-4 lg:px-0 -mt-2 lg:-mt-0\">\r\n                            Childrens Information</p>\r\n                        <br>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                        <p class=\"mb-5 primary-color-blackish-blue-opacity font-medium md:text-sm 2xl:text-3xl px-4 lg:px-0 2xl:px-4 lg:pr-3 mt-2 lg:-mt-1 2xl:mt-2 2xl:pb-64\">\r\n                            Lorem Ipsum is simply dummy text of the printing and typesetting industry\r\n                        </p>\r\n                    </div>', 1, 1, NULL, NULL, NULL, 1, '2022-11-26 10:03:52', '2022-12-06 23:16:40', 'footer', 1, 'col-3'),
(5, 'Terms and Conditions', 'terms-and-conditions', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap; letter-spacing: 0px;\">Terms and Conditions</span><br></p>', 1, 2, NULL, NULL, NULL, 1, '2022-11-26 10:17:15', '2022-12-06 23:17:32', 'footer', 1, 'col-3'),
(6, 'Data deletion instructions', 'data-deletion-instructions', '<h1 class=\"article-title text-capitalize py-md-2\"><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>How Can I Deactivate Or Delete My Account?</h1><div class=\"content\" style=\"\"><p class=\"card-text\" style=\"margin-bottom: 1rem; font-size: 15px; line-height: 30px;\"></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">We\'re sorry to hear you want to remove or deactivate your letsconnect.site account. You have the option of temporarily deactivating your account and then reactivating it later, or permanently deleting your account. Please keep in mind that account termination is permanent and cannot be reversed. You must be signed in to fill out the account deactivation/deletion request form in order to deactivate or delete your account. Please see our privacy policy for more information.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\"><span style=\"font-weight: bolder;\">When you have successfully deactivated your account:</span></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">1) You will not be able to log in to your letsconnect.site account nor use the same credentials (email or phone number) to create a new account<br></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">3) Your profile will be hidden. Some information such as your product reviews may still be visible to others</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">4) Your account can still be reactivated. You will need to contact us on Live Chat if you want to reactivate your account</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">Note: If you wish to discontinue using letsconnect.site services, you may simply log out of your account and unsubscribe from our newsletters. You may continue using our services at any time by logging back into letsconnect.site .<br></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\"><span style=\"font-weight: bolder;\">When you have successfully deleted your account:<br></span></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">1) You will not be able to log in to your letsconnect.site account nor use the same credentials (email or phone number) to create a new account</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">2) You will not be able to reactivate or recover any data, including your reviews and past purchase history</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">3) You will need to set up a new account using a different email and/or mobile number if you want to use letsconnect.site again.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">If you have trouble logging into your account or suspect that someone has logged into your account, please contact us through email (info@letsconnect.site).</p></div>', 1, 0, 'sddrrr', 'sdadxxx', NULL, 1, '2022-11-26 10:18:13', '2022-12-06 23:16:48', 'footer', 1, 'col-3'),
(7, 'About', 'about', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><strong style=\"font-size: 0.875rem; letter-spacing: 0px; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-size: 0.875rem; letter-spacing: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 1, 3, NULL, NULL, NULL, 1, '2022-12-06 22:51:51', '2022-12-06 23:16:28', 'footer', 1, 'col-2'),
(8, 'Careers', 'careers', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 4, NULL, NULL, NULL, 1, '2022-12-06 22:53:09', '2022-12-06 23:16:19', 'footer', 1, 'col-2'),
(9, 'Contact us', 'contact-us', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br></p>', 1, 5, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2022-12-06 23:17:57', 'footer', 1, 'col-2'),
(10, 'Security', 'security', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.<br></p>', 1, 6, NULL, NULL, NULL, 1, '2022-12-06 22:54:17', '2022-12-06 23:18:10', 'footer', 1, 'col-2');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `order_id` int(11) NOT NULL DEFAULT 1,
  `update_by` int(11) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `body`, `is_active`, `order_id`, `update_by`, `created_by`, `created_at`, `updated_at`, `updated_by`) VALUES
(2, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged', 1, 1, NULL, 1, '2022-11-30 05:38:13', '2022-11-30 06:01:29', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment_gateway_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_gateway_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret_key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'enabled',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `payment_gateway_logo`, `payment_gateway_name`, `display_name`, `client_id`, `secret_key`, `is_status`, `status`, `created_at`, `updated_at`) VALUES
(1, '/upload/payment-method/IMG-1620460545.png', 'Paypal', 'Paypal', '5', '6', 'enabled', '0', '2022-03-12 14:54:38', '2022-12-01 06:35:05'),
(2, '/upload/payment-method/IMG-1617618450.png', 'Stripe', 'Stripe', '10', '11', 'enabled', '1', '2022-03-12 14:54:38', '2022-08-14 17:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_title` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `section_content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `is_photo` int(1) NOT NULL DEFAULT 0,
  `order_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `section_name`, `section_title`, `section_content`, `created_at`, `updated_at`, `status`, `is_photo`, `order_id`) VALUES
(1, 'home', 'banner', 'banner_title', 'The Last Business Card You\'ll Ever', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1),
(2, 'home', 'banner', 'banner_description', 'Your shareable, professional business card in your pocket and available anytime, anywhere, with unlimited connections.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1),
(3, 'home', 'banner', 'banner_button', 'Create My Card', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1),
(4, 'home', 'banner', 'banner_photo', 'assets/images/1668576525.jpg', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 1),
(5, 'home', 'what', 'what_photo', 'assets/images/1668576488.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 2),
(6, 'home', 'features', 'feature_card1_photo', 'assets/images/1668579308.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(7, 'home', 'what', 'what_mini_title', 'What is LetsConnect?', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(8, 'home', 'what', 'what_title', 'First impressions really do matter', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(9, 'home', 'what', 'what_description', 'Choose your plan, story-brand your digital business card, share your card in social settings, build more meaningful relationships, and close more deals.1', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(10, 'home', 'what', 'what_li_title_1', 'Step 1: Create your LetsConnect Card', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(11, 'home', 'what', 'what_li_title_2', 'Step 2: Share your LetsConnect Card', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(12, 'home', 'what', 'what_li_title_3', 'Step 3: Connect with more prospects & close more deals.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(13, 'home', 'what', 'what_card_title_1', 'Here\'s A Few Examples', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(14, 'home', 'what', 'what_card_description_1', 'You can show case your product images on your business card.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(15, 'home', 'what', 'what_card_title_2', 'Testimonial1', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(16, 'home', 'what', 'what_card_description_2', 'You can list your testimonials with name and messages.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(17, 'home', 'what', 'what_card_title_3', 'Save vCard1', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(18, 'home', 'what', 'what_card_description_3', 'Visitor can save your phone number as vCard file format.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(19, 'home', 'what', 'what_card_title_4', 'Best for Businesses', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(20, 'home', 'what', 'what_card_description_4', 'LetsConnect Digital Business cards will help you to transform your card visitors into customers.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 2),
(21, 'home', 'features', 'feature_mini_title', 'Why Digital Business Card?', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(22, 'home', 'features', 'feature_title', 'vCard Features', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(23, 'home', 'features', 'feature_card_title_1', 'QR Code <span>Scan</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(24, 'home', 'features', 'feature_card_description_1', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(25, 'home', 'features', 'feature_card_title_2', 'Thumbnail and <span>Cover</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(26, 'home', 'features', 'feature_card_description_2', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(27, 'home', 'features', 'feature_card_title_3', 'Testimonials', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(28, 'home', 'features', 'feature_card_description_3', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(29, 'home', 'features', 'feature_card_title_4', 'About <span>Section</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(30, 'home', 'features', 'feature_card_description_4', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(31, 'home', 'features', 'feature_card_title_5', 'Share vCard <span>Direct</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(32, 'home', 'features', 'feature_card_description_5', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(33, 'home', 'features', 'feature_card_title_6', 'Social Media <span>Shareable</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(34, 'home', 'features', 'feature_card_description_6', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(35, 'home', 'features', 'feature_card_title_7', 'Save <span>Info</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(36, 'home', 'features', 'feature_card_description_7', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(37, 'home', 'features', 'feature_card_title_8', 'Social Media<span> Links</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(38, 'home', 'features', 'feature_card_description_8', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(39, 'home', 'features', 'feature_card_title_9', 'Practical<span>Application</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(40, 'home', 'features', 'feature_card_description_9', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(41, 'home', 'features', 'feature_card_title_10', 'Beautiful<span> UI Design</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(42, 'home', 'features', 'feature_card_description_10', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(43, 'home', 'features', 'feature_card_title_11', 'Rapid <span>Loading</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(44, 'home', 'features', 'feature_card_description_11', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(45, 'home', 'features', 'feature_card_title_12', 'Unique <span>URL Link</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(46, 'home', 'features', 'feature_card_description_12', 'Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n<p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(47, 'home', 'pricing', 'pricing_mini_title', 'LetsConnect Plans', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(48, 'home', 'pricing', 'pricing_title', 'Pick Your Plan', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(49, 'home', 'pricing', 'pricing_subtitle', 'Good investments will gives you 10x more revenue.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(64, 'footer support email', 'support', 'support_email', 'support@letsconnect.com', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(65, 'privacy', 'privacy', 'privacy_title', 'Privacy Policy for LetsConnect', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(66, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(67, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(68, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(69, 'privacy', 'privacy', 'privacy_content_title', 'Consent', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(70, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(71, 'privacy', 'privacy', 'privacy_content_title', 'Information we collect', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(72, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(73, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(74, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(75, 'privacy', 'privacy', 'privacy_content_title', 'How we use your information', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(76, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(77, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(78, 'privacy', 'privacy', 'privacy_content_title', 'Log Files', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(79, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(80, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(81, 'privacy', 'privacy', 'privacy_content_title', 'Cookies and Web Beacons', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(82, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(83, 'privacy', 'privacy', 'privacy_content_description', 'For more general information on cookies, please read \"What Are Cookies\".', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(84, 'privacy', 'privacy', 'privacy_content_title', 'Advertising Partners Privacy Policies', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(85, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(86, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(87, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(88, 'privacy', 'privacy', 'privacy_content_title', 'Third Party Privacy Policies', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(89, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(90, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(91, 'privacy', 'privacy', 'privacy_content_title', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(92, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(93, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(94, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(95, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(96, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(97, 'privacy', 'privacy', 'privacy_content_title', 'GDPR Data Protection Rights', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(98, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(99, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(100, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(101, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(102, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(103, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(104, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(105, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(106, 'privacy', 'privacy', 'privacy_content_title', 'Childrens Information', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(107, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(108, 'privacy', 'privacy', 'privacy_content_description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(109, 'terms', 'terms', 'term_content_title', 'Terms and Conditions', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(110, 'terms', 'terms', 'term_content_description', 'Updated as of 04/09/2022', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(111, 'terms', 'terms', 'term_content_description', 'LetsConnect, Inc. (“LetsConnect,” “we,” “us,” “our”) provides its services to you through its website located at https://www.LetsConnect.site (the “Site”) and through its mobile applications and related services (collectively, such services, including any new features and applications, and the Site, the “Services”), subject to the following Terms of Service (as amended from time to time, the “Terms of Service”).', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(112, 'terms', 'terms', 'term_content_description', 'We reserve the right, at our sole discretion, to change or modify portions of these Terms of Service at any time. If we do this, we will post the changes on this page and will indicate at the top of this page the date these terms were last revised. We will also notify you, either through the Services user interface, in an email notification or through other reasonable means. For existing users of the Services, any such changes will become effective no earlier than fourteen days after they are posted, except that changes addressing new functions of the Services or changes made for legal reasons will be effective immediately, and for new users signing up for the Services, any changes will be effective immediately. Your continued use of the Service after the date any such changes become effective constitutes your acceptance of the new Terms of Service.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(113, 'terms', 'terms', 'term_content_description', 'In addition, when using certain services, you will be subject to any additional terms applicable to such services that may be posted on the Service from time to time, including, without limitation, the Privacy Policy located at https://letsconnect.site/privacy-policy. All such terms are hereby incorporated by reference into these Terms of Service.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(114, 'terms', 'terms', 'term_content_title', '1. Access and Use of the Service\r\nDescription of Services:  The Services are software accessed over the internet and via mobile devices for the purpose of sharing, updating, storing, accessing and otherwise using your own contact information and the contact information of other people in your network.  \r\n\r\nYour Registration Obligations: You are required to register with LetsConnect in order to access and use the Service. If you choose to register for the Service, you agree to provide and maintain true, accurate, current and complete information about yourself as prompted by the Service\'s registration form. Registration data and certain other information about you are governed by our Privacy Policy. If you are under 13 years of age, you are not authorized to use the Service. In addition, if you are under 18 years old, you may use the Service only with the approval of your parent or guardian.\r\n\r\nSecurity of your account: You agree to be responsible for any act or omission of any users that access the Services under your account. You agree to immediately notify LetsConnect of any breach of security of which you become aware.\r\n\r\nAccess to the Service: You are responsible for obtaining and maintaining any equipment and ancillary services needed to connect to, access or otherwise use the Service. You are responsible for ensuring that such equipment and services are compatible with the Service, and, to the extent applicable, the Software (as defined below), and complies with all configurations and specifications set forth in LetsConnect\'s published policies then in effect.\r\n\r\nModifications to the Service: LetsConnect reserves the right to modify or discontinue, temporarily or permanently, the Service (or any part thereof) with or without notice. You agree that LetsConnect will not be liable to you or to any third party for any modification, suspension or discontinuance of the Service.\r\n\r\nGeneral Practices Regarding Use and Storage: You acknowledge that LetsConnect may establish general practices and limits concerning use of the Service, including without limitation the maximum period of time that data or other content will be retained by the Service and the maximum storage space that will be allotted on LetsConnect\'s servers on your behalf. You agree that LetsConnect has no responsibility or liability for the deletion or failure to store any data or other content maintained or uploaded by the Service. You acknowledge that LetsConnect reserves the right to terminate accounts that are inactive for an extended period of time. You further acknowledge that LetsConnect reserves the right to change these general practices and limits at any time, in its sole discretion, with or without notice.\r\n\r\nMobile Services: The Service includes certain services that are available via a mobile device, including (i) the ability to upload content to the Service via a mobile device, (ii) the ability to browse the Service and the Site from a mobile device and (iii) the ability to access certain features through an application downloaded and installed on a mobile device (collectively, the “Mobile Services”). To the extent you access the Service through a mobile device, your wireless service carrier\'s standard charges, data rates and other fees may apply. In addition, downloading, installing, or using certain Mobile Services may be prohibited or restricted by your carrier, and not all Mobile Services may work with all carriers or devices.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(115, 'terms', 'terms', 'term_content_description', '2. Conditions of Use\r\nUser Conduct: You are solely responsible for all information, data, text, images, video or other materials (“Content”) that you upload, post, publish, display, transmit or send (collectively, “Transmit”) or otherwise use via the Service. You agree to use the Service in compliance with the LetsConnect Acceptable Use Policy available at www.LetsConnect.site/legal. LetsConnect reserves the right to investigate and take appropriate legal action against anyone who, in LetsConnect\'s sole discretion, violates this provision, including without limitation, suspending or terminating the account of such violators and reporting you to the law enforcement authorities.\r\n\r\nFees: To the extent the Service or any portion thereof is made available for any fee, you will be required to select a payment plan and billing frequency (annual or monthly) as described on https://letsconnect.site/#pricing and provide LetsConnect information regarding your credit card or other payment instrument. You represent and warrant to LetsConnect that such information is true and that you are authorized to use the payment instrument. You will promptly update your account information with any changes (for example, a change in your billing address or credit card expiration date) that may occur. You agree to pay LetsConnect the amount that is specified in the payment plan in accordance with the terms of such plan and this Terms of Service. You hereby authorize LetsConnect to bill your payment instrument in advance on a periodic basis in accordance with the terms of the applicable payment plan until you terminate your account, and you further agree to pay any charges so incurred. YOU ACKNOWLEDGE AND AGREE THAT (A) LETSCONNECT (OR OUR PAYMENT PROCESSOR) IS AUTHORIZED TO CHARGE YOU ON A RECURRING BASIS (E.G., MONTHLY OR YEARLY) FOR AS LONG AS YOUR SUBSCRIPTION TO THE SERVICE CONTINUES AND (B) YOUR SUBSCRIPTION WILL CONTINUE UNTIL YOU CANCEL IT OR WE SUSPEND OR STOP PROVIDING ACCESS TO THE SERVICES. YOU MAY CANCEL YOUR SUBSCRIPTION AT ANY TIME BY EMAILING US AT [SUPPORT@LETSCONNECT.SITE] OR VIA THE INTERFACE OF THE SERVICES; PROVIDED, THAT, ANY SUCH CANCELATION WILL BE EFFECTIVE AT THE END OF YOUR CURRENT ANNUAL OR MONTHLY BILLING PERIOD, AND THAT CANCELATION WILL NOT RESULT IN ANY REFUND OF PREPAID FEES. If you dispute any charges you must notify LetsConnect in writing within sixty (60) days after the date that LetsConnect charges you. We reserve the right to change LetsConnect\'s prices. If LetsConnect does change prices, LetsConnect will provide notice of the change through the Service or in email to you, at LetsConnect\'s option, at least 30 days before the change is to take effect. Your continued use of the Service after the price change becomes effective constitutes your agreement to pay the changed amount. LetsConnect may choose to bill through an invoice, in which case, full payment for invoices issued in any given month must be received by LetsConnect thirty (30) days after the mailing date of the invoice, or the Services may be terminated. Unpaid invoices are subject to a finance charge of 1.5% per month on any outstanding balance, or the maximum permitted by law, whichever is lower, plus all expenses of collection. You shall be responsible for all taxes associated with the Services other than U.S. taxes based on LetsConnect\'s net income.\r\n\r\nBusiness Accounts:  If you have been provided access to the service as part of your employer’s business account with LetsConnect, then you acknowledge that your right to access and use the Service is subject to the terms of a separate agreement between LetsConnect and your employer.  Your access to the Service may be revoked by your employer at any time.\r\n\r\nSpecial Notice for International Use; Export Controls: Software available in connection with the Service and the transmission of applicable data, if any, is subject to United States export controls. No Software may be downloaded from the Service or otherwise exported or re-exported in violation of U.S. export laws. Downloading or using the Software is at your sole risk. Recognizing the global nature of the Internet, you agree to comply with all local rules and laws regarding your use of the Service, including as it concerns online conduct and acceptable content.\r\n\r\nCommercial Use: Unless otherwise expressly authorized herein or in the Service, you agree not to display, distribute, license, perform, publish, reproduce, duplicate, copy, create derivative works from, modify, sell, resell, exploit, transfer or transmit for any commercial purposes, any portion of the Service, use of the Service, or access to the Service.\r\n\r\nData Processing Addendum: To the extent we process any Customer Personal Data (as defined in the Addendum) that is subject to the GDPR (as defined in the Addendum) on your behalf, the terms of the data processing addendum at https://www.LetsConnect.me/legal (“Addendum”), which are hereby incorporated by reference, shall apply and the parties agree to comply with such terms.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(116, 'terms', 'terms', 'term_content_description', '3. Third Party Distribution Channels\r\nLetsConnect offers Software applications that may be made available through the Apple App Store, Android Marketplace or other distribution channels (“Distribution Channels”). If you obtain such Software through a Distribution Channel, you may be subject to additional terms of the Distribution Channel. These Terms of Service are between you and us only, and not with the Distribution Channel. To the extent that you utilize any other third party products and services in connection with your use of our Services, you agree to comply with all applicable terms of any agreement for such third party products and services.\r\n\r\nWith respect to Software that is made available for your use in connection with an Apple-branded product (such Software, “Apple-Enabled Software”), in addition to the other terms and conditions set forth in these Terms of Service, the following terms and conditions apply:\r\n\r\nLetsConnect and you acknowledge that these Terms of Service are concluded between LetsConnect and you only, and not with Apple Inc. (“Apple”), and that as between LetsConnect and Apple, LetsConnect, not Apple, is solely responsible for the Apple-Enabled Software and the content thereof.\r\n\r\nYou may not use the Apple-Enabled Software in any manner that is in violation of or inconsistent with the Usage Rules set forth for Apple-Enabled Software in, or otherwise be in conflict with, the App Store Terms of Service.\r\n\r\nYour license to use the Apple-Enabled Software is limited to a non-transferable license to use the Apple-Enabled Software on an iOS Product that you own or control, as permitted by the Usage Rules set forth in the App Store Terms of Service.\r\n\r\nApple has no obligation whatsoever to provide any maintenance or support services with respect to the Apple-Enabled Software.\r\n\r\nApple is not responsible for any product warranties, whether express or implied by law. In the event of any failure of the Apple-Enabled Software to conform to any applicable warranty, you may notify Apple, and Apple will refund the purchase price for the Apple-Enabled Software to you, if any; and, to the maximum extent permitted by applicable law, Apple will have no other warranty obligation whatsoever with respect to the Apple-Enabled Software, or any other claims, losses, liabilities, damages, costs or expenses attributable to any failure to conform to any warranty, which will be LetsConnect\'s sole responsibility, to the extent it cannot be disclaimed under applicable law.\r\n\r\nLetsConnect and you acknowledge that LetsConnect, not Apple, is responsible for addressing any claims of you or any third party relating to the Apple-Enabled Software or your possession and/or use of that Apple-Enabled Software, including, but not limited to: (i) product liability claims; (ii) any claim that the Apple-Enabled Software fails to conform to any applicable legal or regulatory requirement; and (iii) claims arising under consumer protection or similar legislation.\r\n\r\nIn the event of any third party claim that the Apple-Enabled Software or the end-user\'s possession and use of that Apple-Enabled Software infringes that third party\'s intellectual property rights, as between LetsConnect and Apple, LetsConnect, not Apple, will be solely responsible for the investigation, defense, settlement and discharge of any such intellectual property infringement claim.\r\n\r\nYou represent and warrant that (i) you are not located in a country that is subject to a U.S. Government embargo, or that has been designated by the U.S. Government as a \"terrorist supporting\" country; and (ii) you are not listed on any U.S. Government list of prohibited or restricted parties.\r\n\r\nIf you have any questions, complaints or claims with respect to the Apple-Enabled Software, they should be directed to LetsConnect as follows:\r\n\r\nsupport@letsconnect.site\r\n\r\n2406 S. Jupiter Rd. STE 3 Garland, TX 75041\r\n\r\nLetsConnect and you acknowledge and agree that Apple, and Apple\'s subsidiaries, are third party beneficiaries of these Terms of Service with respect to the Apple-Enabled Software, and that, upon your acceptance of the terms and conditions of these Terms of Service, Apple will have the right (and will be deemed to have accepted the right) to enforce these Terms of Service against you with respect to the Apple-Enabled Software as a third party beneficiary thereof.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(117, 'terms', 'terms', 'term_content_title', '4. Intellectual Property Rights\r\nService Content, Software and Trademarks: You acknowledge and agree that the Service may contain content or features (“Service Content”) that are protected by copyright, patent, trademark, trade secret or other proprietary rights and laws. Except as expressly authorized by LetsConnect, you agree not to modify, copy, frame, scrape, rent, lease, loan, sell, distribute or create derivative works based on the Service or the Service Content, in whole or in part, except that the foregoing does not apply to your own User Content (as defined below) that you legally upload to the Service. In connection with your use of the Service you will not engage in or use any data mining, robots, scraping or similar data gathering or extraction methods. If you are blocked by LetsConnect from accessing the Service (including by blocking your IP address), you agree not to implement any measures to circumvent such blocking (e.g., by masking your IP address or using a proxy IP address). Any use of the Service or the Service Content other than as specifically authorized herein is strictly prohibited. The technology and software underlying the Service or distributed in connection therewith are the property of LetsConnect, our affiliates and our partners (the “Software”). You agree not to copy, modify, create a derivative work of, reverse engineer, reverse assemble or otherwise attempt to discover any source code, sell, assign, sublicense, or otherwise transfer any right in the Software. Any rights not expressly granted herein are reserved by LetsConnect.\r\n\r\nThe LetsConnect name and logos are trademarks and service marks of LetsConnect (collectively the “LetsConnect Trademarks”). Other LetsConnect, product, and service names and logos used and displayed via the Service may be trademarks or service marks of their respective owners who may or may not endorse or be affiliated with or connected to LetsConnect. Nothing in this Terms of Service or the Service should be construed as granting, by implication, estoppel, or otherwise, any license or right to use any of LetsConnect Trademarks displayed on the Service, without our prior written permission in each instance. All goodwill generated from the use of LetsConnect Trademarks will inure to our exclusive benefit.\r\n\r\nThird Party Material: Under no circumstances will LetsConnect be liable in any way for any content or materials of any third parties (including users), including, but not limited to, for any errors or omissions in any Content, or for any loss or damage of any kind incurred as a result of the use of any such content. You acknowledge that LetsConnect does not pre-screen content, but that LetsConnect and its designees will have the right (but not the obligation) in their sole discretion to refuse or remove any Content that is available via the Service. You agree that you must evaluate, and bear all risks associated with, the use of any content, including any reliance on the accuracy, completeness, or usefulness of such content.\r\n\r\nUser Content Transmitted Through the Service: With respect to the Content or other materials you transmit through the Service or share with other users or recipients (collectively, “User Content”), you represent and warrant that you own all right, title and interest in and to such User Content, including, without limitation, all copyrights and rights of publicity contained therein. By transmitting any User Content through the Service, you hereby grant and will grant LetsConnect and its affiliated companies a license to perform the actions necessary to deliver User Content to the intended recipients. You also acknowledge and agree that User Content does not include any System Data. System Data is owned by LetsConnect. “System Data” means aggregated and anonymous user and other data regarding the Services that may be used to generate logs, statistics and reports regarding performance, availability, integrity and security of the Services. System Data does not include the contact information or Personal Data of your contacts that you upload or receive through the Service.\r\n\r\nYou acknowledge and agree that any questions, comments, suggestions, ideas, feedback or other information about the Service provided by you to LetsConnect (“Submissions”), and any User Content that you make available through the Service in a manner that allows other users of the Service and/or members of the general public not specified or identified by you to access your User Content (“Public User Content”) are non-confidential and LetsConnect will be entitled to the unrestricted use and dissemination of these Submissions and Public User Content for any purpose, commercial or otherwise, without acknowledgment or compensation to you.\r\n\r\nYou acknowledge and agree that LetsConnect may preserve content and may also disclose content if required to do so by law or in the good faith belief that such preservation or disclosure is reasonably necessary to: (a) comply with legal process, applicable laws or government requests; (b) enforce these Terms of Service; (c) respond to claims that any content violates the rights of third parties; or (d) protect the rights, property, or personal safety of LetsConnect, its users and the public. You understand that the technical processing and transmission of the Service, including your content, may involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(118, 'terms', 'terms', 'term_content_description', '5. Third Party Services\r\nThe Service may provide, or third parties may provide, links or other access to other sites, services, products, and resources on the Internet (“Third Party Services”). LetsConnect has no control over such Third Party Services and LetsConnect is not responsible for and does not endorse such Third Party Services. You further acknowledge and agree that LetsConnect will not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any content, events, goods or services available on or through any such Third Party Service. Any dealings you have with third parties found while using the Service are between you and the third party, and you agree that LetsConnect is not liable for any loss or claim that you may have against any such third party.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(119, 'terms', 'terms', 'term_content_description', '6. Indemnity and Release\r\nYou agree to release, indemnify and hold LetsConnect and its affiliates and their officers, employees, directors and agents (collectively, “Indemnitees”) harmless from any from any and all losses, damages, expenses, including reasonable attorneys\' fees, rights, claims, actions of any kind and injury (including death) arising out of or relating to your use of the Service, any User Content, your connection to the Service, your violation of these Terms of Service or your violation of any rights of another. Notwithstanding the foregoing, you will have no obligation to indemnify or hold harmless any Indemnitee from or against any liability, losses, damages or expenses incurred as a result of any action or inaction of such Indemnitee. If you are a California resident, you waive California Civil Code Section 1542, which says: “A general release does not extend to claims which the creditor does not know or suspect to exist in his favor at the time of executing the release, which if known by him must have materially affected his settlement with the debtor.” If you are a resident of another jurisdiction, you waive any comparable statute or doctrine.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(120, 'terms', 'terms', 'term_content_description', '7. Disclaimer of Warranties\r\nYOUR USE OF THE SERVICE IS AT YOUR SOLE RISK. THE SERVICE IS PROVIDED ON AN “AS IS” AND “AS AVAILABLE” BASIS. LETSCONNECT EXPRESSLY DISCLAIMS ALL WARRANTIES OF ANY KIND, WHETHER EXPRESS, IMPLIED OR STATUTORY, INCLUDING, BUT NOT LIMITED TO THE IMPLIED WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE, TITLE AND NON-INFRINGEMENT.\r\n\r\nLETSCONNECT MAKES NO WARRANTY THAT (I) THE SERVICE WILL MEET YOUR REQUIREMENTS, (II) THE SERVICE WILL BE UNINTERRUPTED, TIMELY, SECURE, OR ERROR-FREE, (III) THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SERVICE WILL BE ACCURATE OR RELIABLE, OR (IV) THE QUALITY OF ANY PRODUCTS, SERVICES, INFORMATION, OR OTHER MATERIAL PURCHASED OR OBTAINED BY YOU THROUGH THE SERVICE WILL MEET YOUR EXPECTATIONS.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(121, 'terms', 'terms', 'term_content_description', '8. Limitation of Liability\r\nYOU EXPRESSLY UNDERSTAND AND AGREE THAT LETSCONNECT WILL NOT BE LIABLE FOR ANY INDIRECT, INCIDENTAL, SPECIAL, CONSEQUENTIAL, EXEMPLARY DAMAGES, OR DAMAGES FOR LOSS OF PROFITS INCLUDING BUT NOT LIMITED TO, DAMAGES FOR LOSS OF GOODWILL, USE, DATA OR OTHER INTANGIBLE LOSSES (EVEN IF LETSCONNECT HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES), WHETHER BASED ON CONTRACT, TORT, NEGLIGENCE, STRICT LIABILITY OR OTHERWISE, RESULTING FROM: (I) THE USE OR THE INABILITY TO USE THE SERVICE; (II) THE COST OF PROCUREMENT OF SUBSTITUTE GOODS AND SERVICES RESULTING FROM ANY GOODS, DATA, INFORMATION OR SERVICES PURCHASED OR OBTAINED OR MESSAGES RECEIVED OR TRANSACTIONS ENTERED INTO THROUGH OR FROM THE SERVICE; (III) UNAUTHORIZED ACCESS TO OR ALTERATION OF YOUR TRANSMISSIONS OR DATA; (IV) STATEMENTS OR CONDUCT OF ANY THIRD PARTY ON THE SERVICE; OR (V) ANY OTHER MATTER RELATING TO THE SERVICE. IN NO EVENT WILL LETSCONNECT\'S TOTAL LIABILITY TO YOU FOR ALL DAMAGES, LOSSES OR CAUSES OF ACTION EXCEED THE AMOUNT YOU HAVE PAID LETSCONNECT IN THE LAST SIX (6) MONTHS, OR, IF GREATER, ONE HUNDRED DOLLARS ($100).\r\n\r\nSOME JURISDICTIONS DO NOT ALLOW THE DISCLAIMER OR EXCLUSION OF CERTAIN WARRANTIES OR THE LIMITATION OR EXCLUSION OF LIABILITY FOR INCIDENTAL OR CONSEQUENTIAL DAMAGES. ACCORDINGLY, SOME OF THE ABOVE LIMITATIONS SET FORTH ABOVE MAY NOT APPLY TO YOU OR BE ENFORCEABLE WITH RESPECT TO YOU AND ARE INTENDED TO BE ONLY AS BROAD AS IS PERMITTED UNDER THE LAWS OF THE APPLICABLE STATE.  IF ANY PORTION OF THESE SECTIONS IS HELD TO BE INVALID UNDER APPLICABLE LAWS, THE INVALIDITY OF SUCH PORTION SHALL NOT AFFECT THE VALIDITY OF THE REMAINING PORTIONS OF THE APPLICABLE SECTIONS. IF YOU ARE DISSATISFIED WITH ANY PORTION OF THE SERVICE OR WITH THESE TERMS OF SERVICE, YOUR SOLE AND EXCLUSIVE REMEDY IS TO DISCONTINUE USE OF THE SERVICE.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20);
INSERT INTO `pages` (`id`, `page_name`, `section_name`, `section_title`, `section_content`, `created_at`, `updated_at`, `status`, `is_photo`, `order_id`) VALUES
(122, 'terms', 'terms', 'term_content_description', '9. Dispute Resolution By Binding Arbitration\r\nPLEASE READ THIS SECTION CAREFULLY AS IT AFFECTS YOUR RIGHTS.\r\n\r\na. Agreement to Arbitrate\r\n\r\nThis Dispute Resolution by Binding Arbitration section is referred to in this Terms of Service as the “Arbitration Agreement.” You agree that any and all disputes or claims that have arisen or may arise between you and LetsConnect, whether arising out of or relating to this Terms of Service (including any alleged breach thereof), the Services, any advertising, any aspect of the relationship or transactions between us, shall be resolved exclusively through final and binding arbitration, rather than a court, in accordance with the terms of this Arbitration Agreement, except that you may assert individual claims in small claims court, if your claims qualify. Further, this Arbitration Agreement does not preclude you from bringing issues to the attention of federal, state, or local agencies, and such agencies can, if the law allows, seek relief against us on your behalf. You agree that, by entering into this Terms of Service, you and LetsConnect are each waiving the right to a trial by jury or to participate in a class action. Your rights will be determined by a neutral arbitrator, not a judge or jury. The Federal Arbitration Act governs the interpretation and enforcement of this Arbitration Agreement.\r\n\r\nb. Prohibition of Class and Representative Actions and Non-Individualized Relief\r\n\r\nYOU AND LETSCONNECT AGREE THAT EACH OF US MAY BRING CLAIMS AGAINST THE OTHER ONLY ON AN INDIVIDUAL BASIS AND NOT AS A PLAINTIFF OR CLASS MEMBER IN ANY PURPORTED CLASS OR REPRESENTATIVE ACTION OR PROCEEDING. UNLESS BOTH YOU AND LETSCONNECT AGREE OTHERWISE, THE ARBITRATOR MAY NOT CONSOLIDATE OR JOIN MORE THAN ONE PERSON\'S OR PARTY\'S CLAIMS AND MAY NOT OTHERWISE PRESIDE OVER ANY FORM OF A CONSOLIDATED, REPRESENTATIVE, OR CLASS PROCEEDING. ALSO, THE ARBITRATOR MAY AWARD RELIEF (INCLUDING MONETARY, INJUNCTIVE, AND DECLARATORY RELIEF) ONLY IN FAVOR OF THE INDIVIDUAL PARTY SEEKING RELIEF AND ONLY TO THE EXTENT NECESSARY TO PROVIDE RELIEF NECESSITATED BY THAT PARTY\'S INDIVIDUAL CLAIM(S), EXCEPT THAT YOU MAY PURSUE A CLAIM FOR AND THE ARBITRATOR MAY AWARD PUBLIC INJUNCTIVE RELIEF UNDER APPLICABLE LAW TO THE EXTENT REQUIRED FOR THE ENFORCEABILITY OF THIS PROVISION.\r\n\r\nc. Pre-Arbitration Dispute Resolution\r\n\r\nLetsConnect is always interested in resolving disputes amicably and efficiently, and most customer concerns can be resolved quickly and to the customer\'s satisfaction by emailing customer support at support@LetsConnect.site. If such efforts prove unsuccessful, a party who intends to seek arbitration must first send to the other, by certified mail, a written Notice of Dispute (“Notice”). The Notice to LetsConnect should be sent to 2406 S. Jupiter Rd. STE 3 Garland, TX 75041 (“Notice Address”). The Notice must (i) describe the nature and basis of the claim or dispute and (ii) set forth the specific relief sought. If LetsConnect and you do not resolve the claim within sixty (60) calendar days after the Notice is received, you or LetsConnect may commence an arbitration proceeding. During the arbitration, the amount of any settlement offer made by LetsConnect or you shall not be disclosed to the arbitrator until after the arbitrator determines the amount, if any, to which you or LetsConnect is entitled.\r\n\r\nd. Arbitration Procedures\r\n\r\nArbitration will be conducted by a neutral arbitrator in accordance with the American Arbitration Association’s (“AAA”) rules and procedures, including the AAA\'s Consumer Arbitration Rules (collectively, the “AAA Rules”), as modified by this Arbitration Agreement. For information on the AAA, please visit its website, https://www.adr.org. Information about the AAA Rules and fees for consumer disputes can be found at the AAA\'s consumer arbitration page, https://www.adr.org/consumer_arbitration . If there is any inconsistency between any term of the AAA Rules and any term of this Arbitration Agreement, the applicable terms of this Arbitration Agreement will control unless the arbitrator determines that the application of the inconsistent Arbitration Agreement terms would not result in a fundamentally fair arbitration. The arbitrator must also follow the provisions of these Terms of Service as a court would. All issues are for the arbitrator to decide, including, but not limited to, issues relating to the scope, enforceability, and arbitrability of this Arbitration Agreement. Although arbitration proceedings are usually simpler and more streamlined than trials and other judicial proceedings, the arbitrator can award the same damages and relief on an individual basis that a court can award to an individual under the Terms of Service and applicable law. Decisions by the arbitrator are enforceable in court and may be overturned by a court only for very limited reasons.\r\n\r\nUnless LetsConnect and you agree otherwise, any arbitration hearings will take place in a reasonably convenient location for both parties with due consideration of their ability to travel and other pertinent circumstances. If the parties are unable to agree on a location, the determination shall be made by AAA.  If your claim exceeds $10,000, the right to a hearing will be determined by the AAA Rules. Regardless of the manner in which the arbitration is conducted, the arbitrator shall issue a reasoned written decision sufficient to explain the essential findings and conclusions on which the award is based.\r\n\r\n\r\n\r\ne. Costs of Arbitration\r\n\r\nPayment of all filing, administration, and arbitrator fees (collectively, the “Arbitration Fees”) will be governed by the AAA Rules, unless otherwise provided in this Arbitration Agreement. If you are able to demonstrate to the arbitrator that you are economically unable to pay your portion of the Arbitration Fees or if the arbitrator otherwise determines for any reason that you should not be required to pay your portion of the Arbitration Fees, LetsConnect will pay your portion of such fees. In addition, if you demonstrate to the arbitrator that the costs of arbitration will be prohibitive as compared to the costs of litigation, LetsConnect will pay as much of the Arbitration Fees as the arbitrator deems necessary to prevent the arbitration from being cost-prohibitive. Any payment of attorneys\' fees will be governed by the AAA Rules.\r\n\r\nf. Confidentiality\r\n\r\nAll aspects of the arbitration proceeding, and any ruling, decision, or award by the arbitrator, will be strictly confidential for the benefit of all parties.\r\n\r\ng. Severability\r\n\r\nIf a court or the arbitrator decides that any term or provision of this Arbitration Agreement (other than the subsection (b) titled “Prohibition of Class and Representative Actions and Non-Individualized Relief” above) is invalid or unenforceable, the parties agree to replace such term or provision with a term or provision that is valid and enforceable and that comes closest to expressing the intention of the invalid or unenforceable term or provision, and this Arbitration Agreement shall be enforceable as so modified. If a court or the arbitrator decides that any of the provisions of subsection (b) above titled “Prohibition of Class and Representative Actions and Non-Individualized Relief” are invalid or unenforceable, then the entirety of this Arbitration Agreement shall be null and void, unless such provisions are deemed to be invalid or unenforceable solely with respect to claims for public injunctive relief. The remainder of the Terms of Service will continue to apply.\r\n\r\nh. Future Changes to Arbitration Agreement\r\n\r\nNotwithstanding any provision in this Terms of Service to the contrary, LetsConnect agrees that if it makes any future change to this Arbitration Agreement (other than a change to the Notice Address) while you are a user of the Services, you may reject any such change by sending LetsConnect written notice within thirty (30) calendar days of the change to the Notice Address provided above. By rejecting any future change, you are agreeing that you will arbitrate any dispute between us in accordance with the language of this Arbitration Agreement as of the date you first accepted these Terms of Service (or accepted any subsequent changes to these Terms of Service).', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(123, 'terms', 'terms', 'term_content_description', '10. Termination\r\nYou agree that LetsConnect, in its sole discretion, may suspend or terminate your account (or any part thereof) or use of the Service and remove and discard any content within the Service, for any reason, including, without limitation, for lack of use or if LetsConnect believes that you have violated or acted inconsistently with the letter or spirit of these Terms of Service. Any suspected fraudulent, abusive or illegal activity that may be grounds for termination of your use of Service, may be referred to appropriate law enforcement authorities. LetsConnect may also in its sole discretion and at any time discontinue providing the Service, or any part thereof, with or without notice. You agree that any termination of your access to the Service under any provision of this Terms of Service may be effected without prior notice, and acknowledge and agree that LetsConnect may immediately deactivate or delete your account and all related information and files in your account and/or bar any further access to such files or the Service. Further, you agree that LetsConnect will not be liable to you or any third party for any termination of your access to the Service.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(124, 'terms', 'terms', 'term_content_description', '11. User Disputes\r\nYou agree that you are solely responsible for your interactions with any other user in connection with the Service and LetsConnect will have no liability or responsibility with respect thereto. LetsConnect reserves the right, but has no obligation, to become involved in any way with disputes between you and any other user of the Service.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(125, 'terms', 'terms', 'term_content_description', '12. General\r\nThese Terms of Service constitute the entire agreement between you and LetsConnect and govern your use of the Service, superseding any prior agreements between you and LetsConnect with respect to the Service. You also may be subject to additional terms and conditions that may apply when you use affiliate or third party services, third party content or third party software. These Terms of Service will be governed by the laws of the State of California without regard to its conflict of law provisions. With respect to any disputes or claims not subject to arbitration, as set forth above, you and LetsConnect agree to submit to the personal and exclusive jurisdiction of the state and federal courts located within Santa Clara County, California. The failure of LetsConnect to exercise or enforce any right or provision of these Terms of Service will not constitute a waiver of such right or provision. If any provision of these Terms of Service is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties\' intentions as reflected in the provision, and the other provisions of these Terms of Service remain in full force and effect. You agree that regardless of any statute or law to the contrary, any claim or cause of action arising out of or related to use of the Service or these Terms of Service must be filed within one (1) year after such claim or cause of action arose or be forever barred. A printed version of this agreement and of any notice given in electronic form will be admissible in judicial or administrative proceedings based upon or relating to this agreement to the same extent and subject to the same conditions as other business documents and records originally generated and maintained in printed form. You may not assign this Terms of Service without the prior written consent of LetsConnect, but LetsConnect may assign, sublicense, or transfer any or all of its rights and obligations under this Terms of Service without restriction. The section titles in these Terms of Service are for convenience only and have no legal or contractual effect. Notices to you may be made via either email or regular mail. The Service may also provide notices to you of changes to these Terms of Service or other matters by displaying notices or links to notices generally on the Service.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(126, 'terms', 'terms', 'term_content_description', '13. Your Privacy\r\nAt LetsConnect, we respect the privacy of our users. For details please see our Privacy Policy at https://www.LetsConnect.site/legal. By using the Service, you consent to our collection and use of personal data as outlined therein.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(127, 'terms', 'terms', 'term_content_title', '14. Notice for California Users\r\nUnder California Civil Code Section 1789.3, users of the Service from California are entitled to the following specific consumer rights notice: The Complaint Assistance Unit of the Division of Consumer Services of the California Department of Consumer Affairs may be contacted in writing at 1625 North Market Blvd., Suite N 112, Sacramento, CA 95834, or by telephone at (916) 445-1254 or (800) 952-5210. You may contact us at LetsConnect, LLC., 2406 S. Jupiter RD. STE 3 Garland, TX 75041', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(128, 'terms', 'terms', 'term_content_description', 'Questions? Concerns? Suggestions? Please contact us at support@LetsConnect.site to report any violations of these Terms of Service or to pose any questions regarding this Terms of Service or the Service.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(129, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(130, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(131, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(132, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(133, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(134, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(135, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(136, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(137, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(138, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(139, 'terms', 'terms', 'term_content_title', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(140, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(141, 'terms', 'terms', 'term_content_title', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(142, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(143, 'terms', 'terms', 'term_content_title', 'All Rights Reserved 2022 LetsConnect, LLC.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(144, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(145, 'terms', 'terms', 'term_content_title', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(146, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(147, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(148, 'terms', 'terms', 'term_content_title', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(149, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(150, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(151, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(152, 'terms', 'terms', 'term_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(153, 'footer', 'footer', 'social-facebook', 'https://www.facebook.com/LetsConnect.site', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(154, 'footer', 'footer', 'social-twitter', 'https://twitter.com/Mr_LetsConnect', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(155, 'footer', 'footer', 'social-instagram', 'https://www.instagram.com/letsconnect.site/', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(156, 'footer', 'footer', 'social-linkedIn', 'https://www.linkedin.com/in/mr-letsconnect/', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(157, 'refund', 'refund', 'refund-title', 'Refund Policy', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(158, 'refund', 'refund', 'refund-desc', 'LetsConnect is available for free. If you want access to features like custom colors, different card designs, a personalized URL, removing LetsConnect branding, and more, you’ll need to upgrade to one of our premium plans. We offer subscriptions for individuals and businesses, with prices starting as low as $4.00/month.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(159, 'refund', 'refund', 'desc', 'However, if you’re unsatisfied with LetsConnect and feel that our upcoming innovations won\'t suit your needs, we will gladly refund up to 3-months billing. Of course we\'ll ask some questions to see what it is we can do better, but we won\'t tie you down and pry them out! You\'re welcome to keep your \"free\" level LetsConnect for life.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(160, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(161, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(162, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(163, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(164, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(165, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(166, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(167, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(168, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(169, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(170, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(171, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(172, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(173, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(174, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(175, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(176, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(177, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(178, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(179, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(180, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(181, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(182, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(183, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(184, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(185, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(186, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(187, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(188, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(189, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(190, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(191, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(192, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(193, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(194, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(195, 'refund', 'refund', 'desc', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(196, 'contact', 'contact', 'page_name', 'LetsConnect', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(197, 'contact', 'contact', 'page_subtitle', 'Literally, let\'s connect.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(198, 'contact', 'contact', 'page_section_1', 'Office', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(199, 'contact', 'contact', 'page_section_1_content_1', 'Dallas, TX', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(200, 'contact', 'contact', 'page_section_1_content_2', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(201, 'contact', 'contact', 'page_section_2', 'Contacts', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(202, 'contact', 'contact', 'page_section_2_content_1', 'sales@letsconnect.com', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(203, 'contact', 'contact', 'page_section_2_content_1', '(325) 999-5387', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(204, 'contact', 'contact', 'page_section_3', 'Socials', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(205, 'about', 'about', 'about_content_title', 'About Us:', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(206, 'about', 'about', 'about_content_description', 'What\'s Different:', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(207, 'about', 'about', 'about_content_description', 'Sales and networking events are exhausting. LetsConnect bridges the gap between meeting your target prospects and the actual workflow of bringing them into your network. While there are some exceptionally talents networking individuals out there, the majority of us find ourselves lacking the focus and discipline it takes to pursue more than 10 relationships at a time. This is where LetsConnect takes over by combining automation systems with CRM funnels to simultaneously warm up your prospects while also positioning you as an authority in your niche. Further, LetsConnect has pre-made templates ready to customize for your automations to ensure a quick and painless integration to your systems.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(208, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(209, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(210, 'about', 'about', 'about_content_title', 'Mission:', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(211, 'about', 'about', 'about_content_description', 'LetsConnect uses reciprocal compliance to gain the trust of the users prospects leading to higher conversion rates, lifecycles, and referral percentages for the users products and services. By harvesting data throughout the process, LetsConnect harmoniously warms and recycles leads as they move throughout the sales process.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(212, 'about', 'about', 'about_content_description', 'Whereas most marketplace offerings for similar products position themselves as digital business cards, LetsConnect has been developed as an elite-level lead generator. A sales tool rather than an exchange of contact information. LetsConnect accomplishes this through the simplicity of a digital business card while interfaced with an automation system that directs prospects into a self-guided sales funnel. By utilizing suggestive prompts the LetsConnect automation system builds trust for a prospect through reciprocal compliance.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(213, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(214, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(215, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(216, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(217, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(218, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(219, 'about', 'about', 'about_content_description', NULL, '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(220, 'legal-gdpr', 'Legal-&-GDPR', 'Legal & GDPR content description', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2022-04-24 13:33:48', '2022-04-24 13:33:48', 1, 0, 20),
(221, 'legal-gdpr', 'Legal-&-GDPR', 'Page name\r\n', 'Legal & GDPR', '2022-04-20 15:21:45', '2022-04-20 15:21:45', 1, 0, 20),
(225, 'home', 'features', 'feature_card1_button', 'Let\'s Scan QR Code1', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(226, 'home', 'features', 'feature_card2_photo', 'assets/images/1668579243.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(227, 'home', 'features', 'feature_card2_button', 'Upload your photo', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(228, 'home', 'features', 'feature_card3_photo', 'assets/images/1668580296.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(229, 'home', 'features', 'feature_card3_button', 'Create your testimonial1', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(230, 'home', 'features', 'feature_card4_photo', 'assets/images/1668580654.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(231, 'home', 'features', 'feature_card4_button', 'Share your hobbies', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(232, 'home', 'features', 'feature_card5_photo', 'assets/images/1668581828.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(233, 'home', 'features', 'feature_card5_button', 'Download your card', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(234, 'home', 'features', 'feature_card6_photo', 'assets/images/1668583026.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(235, 'home', 'features', 'feature_card6_button', 'Share your card', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(236, 'home', 'features', 'feature_card7_photo', 'assets/images/1668583185.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(237, 'home', 'features', 'feature_card7_button', 'Save your card', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(238, 'home', 'features', 'feature_card8_photo', 'assets/images/1668585815.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(239, 'home', 'features', 'feature_card8_button', 'Share on social media', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(240, 'home', 'features', 'feature_card9_photo', 'assets/images/1668586168.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(241, 'home', 'features', 'feature_card9_button', 'Create now', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(242, 'home', 'features', 'feature_card10_photo', 'assets/images/1668587988.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(243, 'home', 'features', 'feature_card10_button', 'See UI Design', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(244, 'home', 'features', 'feature_card11_photo', 'assets/images/1668588221.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(245, 'home', 'features', 'feature_card11_button', 'Create now', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20),
(246, 'home', 'features', 'feature_card12_photo', 'assets/images/1668588479.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 20),
(247, 'home', 'features', 'feature_card12_button', 'Create your card', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 20);

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
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(10) UNSIGNED NOT NULL,
  `plan_type` int(1) NOT NULL DEFAULT 1 COMMENT '1=Solopreneur & Individuals, \r\n2=Team Accounts',
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_free` int(11) NOT NULL DEFAULT 0 COMMENT '0=paid,1=free',
  `plan_price_monthly` double DEFAULT 0,
  `plan_price_yearly` double NOT NULL DEFAULT 0,
  `plan_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `discount_percentage` double NOT NULL DEFAULT 0,
  `validity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_vcards` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_of_services` int(11) DEFAULT 999,
  `no_of_galleries` int(11) DEFAULT 999,
  `no_of_features` int(11) DEFAULT 999,
  `no_of_payments` int(11) DEFAULT 999,
  `personalized_link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide_branding` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free_setup` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `free_support` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recommended` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_watermark_enabled` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `plans_type` int(11) DEFAULT NULL,
  `name` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT '''''''default''''''',
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_plan_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_data_yearly` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_plan_id_yearly` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_plan_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_plan_data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cost` float DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `shareable` tinyint(1) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_vcard` int(1) NOT NULL DEFAULT 1,
  `is_whatsapp_store` int(1) NOT NULL DEFAULT 1,
  `is_email_signature` int(1) NOT NULL DEFAULT 1,
  `is_qr_code` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_type`, `plan_id`, `plan_name`, `plan_description`, `is_free`, `plan_price_monthly`, `plan_price_yearly`, `plan_price`, `discount_percentage`, `validity`, `no_of_vcards`, `no_of_services`, `no_of_galleries`, `no_of_features`, `no_of_payments`, `personalized_link`, `hide_branding`, `free_setup`, `free_support`, `recommended`, `is_watermark_enabled`, `features`, `plans_type`, `name`, `slug`, `stripe_plan_id`, `stripe_data`, `stripe_data_yearly`, `stripe_plan_id_yearly`, `paypal_plan_id`, `paypal_plan_data`, `cost`, `status`, `shareable`, `created_at`, `updated_at`, `is_vcard`, `is_whatsapp_store`, `is_email_signature`, `is_qr_code`) VALUES
(1, 1, '62f8bab5e6912', 'Free', 'Free', 1, 0, 0, '0', 0, '366', '5', 999, 999, 999, 999, '1', '0', '0', '0', '1', '0', '[\"Up to 5 Shareable Digital Cards\",\"Two-Way Contact Sharing\",\"Unlimited Connections & Card Shares\",\"Free Ongoing Updates & Feature Add\"]', 1, 'Beta Tester', 'beta-tester', 'plan_MteFuq7wvJ1aBb', '{\"id\":\"plan_MteFuq7wvJ1aBb\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":0,\"amount_decimal\":\"0\",\"billing_scheme\":\"per_unit\",\"created\":1669817263,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteFgKvvRAdgt8\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_MteF5c6833me9t\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":0,\"amount_', 'plan_MteF5c6833me9t', NULL, NULL, NULL, '1', 1, '2022-08-14 09:04:53', '2023-01-03 14:16:49', 1, 0, 0, 0),
(2, 2, '62f8d81cbf71c', 'Gold', 'Gold', 0, 15, 46, '999', 10, '31', '20', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"Everything in Solopreneur Account +\",\"Up to 20 Shareable Digital Cards\",\"2 Custom Card Setups & Personalizations\",\"Marketing Mastery 101 Guide\",\"BONUS: MTG Branding Guide\"]', 1, 'Professional', 'professional', 'plan_MvsPvaXh0SApeG', '{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amo', 'plan_MteDPNuinE4V5C', NULL, NULL, NULL, '1', 1, '2022-08-14 11:10:20', '2023-01-03 14:17:56', 1, 1, 1, 1),
(3, 2, '62f8d935b6119', 'Corporate', 'Corporate', 0, 15, 149, '1999', 12, '9999', '100', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"Everything in Solo & Small Business Accounts +\",\"Up to 100 Shareable Digital Cards\",\"10 Professional Card Setups & Personalizations\",\"Team-Level Tracking (new feature development; Coming Soon!)\"]', 1, 'Legacy Client', 'legacy-client', 'plan_MF94PTFRux9rYx', '{\"id\":\"plan_MF94PTFRux9rYx\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":4995,\"amount_decimal\":\"4995\",\"billing_scheme\":\"per_unit\",\"created\":1660475701,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MF94KiEL4GmZHC\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"am', 'plan_MteDxmBhgyMs0K', NULL, NULL, NULL, '1', 1, '2022-08-14 11:15:01', '2023-01-03 14:18:17', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(255) NOT NULL,
  `user_id` int(10) DEFAULT NULL COMMENT 'from users table',
  `order_id` int(10) DEFAULT NULL COMMENT 'for showing home page\r\n',
  `details` varchar(1024) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(255) NOT NULL,
  `display_name` varchar(50) DEFAULT NULL,
  `display_title` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `user_id`, `order_id`, `details`, `status`, `created_at`, `created_by`, `display_name`, `display_title`) VALUES
(4, 2, 0, 'sd', 0, '2022-12-04 09:13:12', 2, 'user1', 'sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `google_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_analytics_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_name` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_meta_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keywords` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tawk_chat_bot_key` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `host` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `port` int(11) NOT NULL,
  `encryption` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `application_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_mode` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'local/live',
  `facebook_client_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_client_secret` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_callback_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_client_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_client_secret` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `google_callback_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_address` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telegram_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_number` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ios_app_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `android_app_url` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_email` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `google_key`, `google_analytics_id`, `site_name`, `site_logo`, `favicon`, `seo_meta_description`, `seo_keywords`, `seo_image`, `tawk_chat_bot_key`, `name`, `address`, `driver`, `host`, `port`, `encryption`, `username`, `password`, `status`, `created_at`, `updated_at`, `application_type`, `app_mode`, `facebook_client_id`, `facebook_client_secret`, `facebook_callback_url`, `google_client_id`, `google_client_secret`, `google_callback_url`, `copyright_text`, `office_address`, `facebook_url`, `youtube_url`, `twitter_url`, `linkedin_url`, `telegram_url`, `whatsapp_number`, `ios_app_url`, `android_app_url`, `email`, `phone_no`, `support_email`, `instagram_url`, `site_title`) VALUES
(1, NULL, 'G-12SD09FF03', 'Mtgpro.me', '/assets/uploads/logo/mtgpro-63b019bb82b60.png', '/assets/uploads/icon/mtg_gmail-dp-63b019bb822d0.jpg', 'Welcome to Mtgpro. It’s more than a digital business card, it’s a networking sales generator.', 'keyword 1, keyword 2', '/assets/uploads/logo/mtg_gmail-dp-63b019bb82e31.jpg', NULL, 'Mtgpro', 'noreply@mtgpro.me', 'smtp', 'smtp.mailtrap.io', 2525, 'tls', 'maidul@gmail.com', '123456', '1', '2022-03-12 14:54:38', '2022-12-31 05:15:07', NULL, NULL, '495920045706830', 'dcbac5562d862384bce2918bf025eeaf', 'https://letsconnectv2.webdevs4u.com/auth/facebook/callback', '78445555544', '778844444555', 'https://letsconnectv2.webdevs4u.com/auth/google/callback', 'Copyright © LetsConnect. All rights reserved.', 'USA', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/Mr_LetsConnect', 'https://www.linkedin.com/feed/', 'https://telegram.org/', '+8801515262626', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'support@mtgpro.me', '+1516297-3389', 'support@mtgpro.me', 'https://www.linkedin.com/feed/', 'Mtgpro.me');

-- --------------------------------------------------------

--
-- Table structure for table `social_icon`
--

CREATE TABLE `social_icon` (
  `id` int(10) UNSIGNED NOT NULL,
  `icon_group` enum('Recommended','Contact','Social Media','Music Media','Payment','More') COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'need lowercase',
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_fa` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `example_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `order_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icon`
--

INSERT INTO `social_icon` (`id`, `icon_group`, `icon_name`, `icon_image`, `icon_fa`, `icon_title`, `example_text`, `status`, `order_id`, `created_at`, `updated_at`) VALUES
(1, 'Recommended', 'facebook', 'assets/img/icon/facebook.svg', '', 'Facebook', 'ex:https://www.facebook.com/maidul', 1, 100, '2022-11-16 01:26:22', '2022-11-16 01:26:22'),
(2, 'More', 'twitter', 'assets/img/icon/twitter.svg', NULL, 'Twitter', 'ex:https://www.twitter.com/maidul', 1, 95, '2023-01-02 08:48:52', '2022-11-16 02:18:41'),
(3, 'Social Media', 'linkedin', 'assets/img/icon/linkedin.svg', NULL, 'Linkedin', 'ex:https://www.linkedin.com/maidul', 1, 90, '2023-01-02 08:49:04', '2022-11-16 02:18:41'),
(4, 'Recommended', 'pinterest', 'assets/img/icon/pinterest.svg', '', 'Pinterest', 'ex:https://www.pinterest.com/maidul', 1, 85, '2022-11-16 02:18:41', '2022-11-16 02:18:41'),
(5, 'Contact', 'email', 'assets/img/icon/email.svg', NULL, 'Email', 'ex:example@gmail.com', 1, 80, '2023-01-02 08:49:17', '2022-11-16 02:18:41'),
(6, 'Music Media', 'whatsapp', 'assets/img/icon/whatsapp.svg', NULL, 'Whatsapp', 'ex:+8801681944126', 1, 75, '2023-01-02 08:49:24', '2022-11-16 01:26:22'),
(7, 'Recommended', 'instagram', 'assets/img/icon/instagram.svg', '', 'Instagram', 'ex:https://www.instagram.com/maidul', 1, 70, '2022-11-17 04:54:51', '2022-11-16 01:26:22'),
(8, 'Recommended', 'text_section', 'assets/img/icon/textSection.svg', 'fa', 'Text', 'ex:+8801681944126', 1, 65, '2023-01-02 05:25:57', '2022-11-16 01:26:22'),
(9, 'Recommended', 'phone', 'assets/img/icon/call.svg', '', 'Phone', 'ex:+8801681944126', 1, 60, '2022-11-16 01:26:22', '2022-11-16 01:26:22'),
(10, 'Recommended', 'address', 'assets/img/icon/address.svg', '', 'Address', 'Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213', 1, 55, '2022-11-17 04:58:52', '2022-11-16 02:18:41'),
(11, 'Recommended', 'app_link', 'assets/img/icon/app_link.svg', '', 'App Link', 'ex:https://www.applink.com/maidul', 1, 1, '2022-11-17 04:58:52', '2022-11-16 02:18:41'),
(12, 'Recommended', 'apple', 'assets/img/icon/apple.svg', '', 'Apple', 'https://www.apple.com/apple-music/', 1, 2, '2022-11-17 04:58:52', '2022-11-16 02:18:41'),
(13, 'Recommended', 'booksy', 'assets/img/icon/booksy.svg', '', 'Booksy', 'ex:https://www.booksy.com/maidul', 1, 3, '2023-01-02 04:20:09', '2023-01-02 04:20:09'),
(14, 'Recommended', 'calendly', 'assets/img/icon/calendly.svg', '', 'Calendly', 'ex:https://www.calendly.com/maidul', 1, 4, '2023-01-02 04:20:09', '2023-01-02 04:20:09'),
(15, 'Recommended', 'cashapp', 'assets/img/icon/cashapp.svg', '', 'Cash App', 'ex:https://www.cashapp.com/maidul', 1, 5, '2023-01-02 04:20:09', '2023-01-02 04:20:09'),
(16, 'Recommended', 'clubhouse', 'assets/img/icon/clubhouse.svg', '', 'Clubhouse', 'ex:https://www.clubhouse.com/maidul', 1, 6, '2023-01-02 04:25:36', '2023-01-02 04:25:36'),
(17, 'Recommended', 'contactcard', 'assets/img/icon/contactcard.svg', '', 'Contact Card', 'ex:https://www.contactcard.com/maidul', 1, 7, '2023-01-02 04:25:36', '2023-01-02 04:25:36'),
(18, 'Recommended', 'customlink', 'assets/img/icon/customlink.svg', '', 'Custom Link', 'ex:https://www.customlink.com/maidul', 1, 8, '2023-01-02 04:25:36', '2023-01-02 04:25:36'),
(19, 'Recommended', 'discord', 'assets/img/icon/discord.svg', '', 'Discord', 'ex:https://www.discord.com/maidul', 1, 9, '2023-01-02 04:25:36', '2023-01-02 04:25:36'),
(20, 'Recommended', 'dropdown', 'assets/img/icon/dropDown.svg', '', 'DropDown', 'ex:https://www.dropdown.com/maidul', 1, 10, '2023-01-02 04:25:36', '2023-01-02 04:25:36'),
(21, 'Recommended', 'embeddedvideo', 'assets/img/icon/embeddedvideo.svg', '', 'Embedde Video', 'ex:https://www.embeddedvideo.com/maidul', 1, 11, '2023-01-02 04:34:37', '2023-01-02 04:34:37'),
(22, 'Recommended', 'etsy', 'assets/img/icon/etsy.svg', '', 'Etsy', 'ex:https://www.etsy.com/maidul', 1, 12, '2023-01-02 04:34:37', '2023-01-02 04:34:37'),
(23, 'Recommended', 'facetime', 'assets/img/icon/facetime.svg', '', 'Face Time', 'ex:https://www.facetime.com/maidul', 1, 13, '2023-01-02 04:34:37', '2023-01-02 04:34:37'),
(24, 'Recommended', 'file', 'assets/img/icon/file.svg', '', 'File', NULL, 1, 14, '2023-01-02 04:34:37', '2023-01-02 04:34:37'),
(25, 'Recommended', 'hoobe', 'assets/img/icon/hoobe.svg', '', 'Hoobe', NULL, 1, 15, '2023-01-02 04:34:37', '2023-01-02 04:34:37'),
(26, 'Recommended', 'linktree', 'assets/img/icon/linktree.svg', '', 'Linktree', NULL, 1, 16, '2023-01-02 04:34:37', '2023-01-02 04:34:37'),
(27, 'Recommended', 'mediakits', 'assets/img/icon/mediakits.svg', '', 'Mediakits', NULL, 1, 29, '2023-01-02 04:34:37', '2023-01-02 04:34:37'),
(28, 'Recommended', 'number', 'assets/img/icon/number.svg', '', 'Number', NULL, 1, 28, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(29, 'Recommended', 'opensea_color', 'assets/img/icon/opensea_color.svg', '', 'Opensea Color', NULL, 1, 17, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(30, 'Recommended', 'paypal', 'assets/img/icon/paypal.svg', '', 'Paypal', 'ex:https://www.paypal.com/maidul', 1, 18, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(31, 'Recommended', 'podcasts', 'assets/img/icon/podcasts.svg', '', 'Podcasts', NULL, 1, 19, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(32, 'Recommended', 'reviews', 'assets/img/icon/reviews.svg', '', 'Reviews', NULL, 1, 20, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(33, 'Recommended', 'safari', 'assets/img/icon/safari.svg', '', 'Safari', 'ex:https://www.safari.com', 1, 21, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(34, 'Recommended', 'snapchat', 'assets/img/icon/snapchat.svg', '', 'Snapchat', 'ex:https://www.snapchat.com/maidul', 1, 22, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(35, 'Recommended', 'soundcloud', 'assets/img/icon/soundcloud.svg', '', 'Soundcloud', NULL, 1, 23, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(36, 'Recommended', 'spotify', 'assets/img/icon/spotify.svg', '', 'Spotify', 'ex:https://www.spotify.com/maidul', 1, 24, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(37, 'Recommended', 'square', 'assets/img/icon/square.svg', '', 'Square', NULL, 1, 25, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(38, 'Recommended', 'telegram', 'assets/img/icon/telegram.svg', '', 'Telegram', NULL, 1, 26, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(39, 'Recommended', 'tiktok', 'assets/img/icon/tiktok.svg', '', 'Tiktok', NULL, 1, 27, '2023-01-02 04:41:18', '2023-01-02 04:41:18'),
(40, 'Recommended', 'twitch', 'assets/img/icon/twitch.svg', '', 'Twitch', NULL, 1, 30, '2023-01-02 04:53:39', '2023-01-02 04:53:39'),
(41, 'Recommended', 'venmo', 'assets/img/icon/venmo.svg', '', 'Venmo', 'ex:https://www.venmo.com/maidul', 1, 31, '2023-01-02 04:53:39', '2023-01-02 04:53:39'),
(42, 'Recommended', 'wechat', 'assets/img/icon/wechat.svg', '', 'Wechat', 'ex:https://www.wechat.com/maidul', 1, 33, '2023-01-02 04:53:39', '2023-01-02 04:53:39'),
(43, 'Recommended', 'yelp', 'assets/img/icon/yelp.svg', '', 'Yelp', 'ex:https://www.yelp.com/maidul', 1, 34, '2023-01-02 04:53:39', '2023-01-02 04:53:39'),
(44, 'Recommended', 'youtube', 'assets/img/icon/youtube.svg', '', 'Youtube', 'ex:https://www.youtube.com/maidul', 1, 35, '2023-01-02 04:53:39', '2023-01-02 04:53:39'),
(45, 'Recommended', 'zelle', 'assets/img/icon/zelle.svg', '', 'Zelle', NULL, 1, 37, '2023-01-02 04:53:39', '2023-01-02 04:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'angcon26101999@gmail.com', '2022-08-13 10:34:13', '2022-08-13 10:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE `themes` (
  `id` int(10) UNSIGNED NOT NULL,
  `theme_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `theme_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `theme_type` int(11) DEFAULT 0 COMMENT '1=Smart, 0=Other',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `theme_id`, `theme_name`, `theme_description`, `theme_thumbnail`, `theme_price`, `status`, `theme_type`, `created_at`, `updated_at`) VALUES
(1, '7ccc432a06caa', 'Modern vCard1', 'vCard2', 'upload/theme/1668433997.jpg', '2', '0', 0, '2022-03-12 14:54:38', '2022-11-14 07:53:17'),
(2, '7ccc432a06vta', 'Modern vCard Dark', 'vCard', 'upload/theme/2.png', '1', '1', 0, '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(10, '7ccc432a06vta', 'Modern vCard Dark', 'vCard', 'upload/theme/3.png', '2', '1', 0, '2022-03-12 14:54:38', '2022-03-12 14:54:38');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) UNSIGNED NOT NULL,
  `gobiz_transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desciption` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_gateway_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_currency` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transaction_amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_prefix` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `gobiz_transaction_id`, `transaction_date`, `transaction_id`, `user_id`, `plan_id`, `desciption`, `payment_gateway_name`, `transaction_currency`, `transaction_amount`, `invoice_number`, `invoice_prefix`, `invoice_details`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(1, '62f8bc36e2ef1', '2022-08-14 04:11:18', '62f8bc36e2f30', '2', '62f8bab5e6912', 'Beta Tester Plan', 'FREE', 'USD', '0', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"dhaka\",\"to_billing_state\":\"1234\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia.tech@gmail.com\",\"to_vat_number\":\"1234\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":0,\"subtotal\":0,\"tax_amount\":0}', 'SUCCESS', '1', '2022-08-14 09:11:18', '2022-11-14 09:15:22'),
(2, '62f8d9ee8be78', '2022-08-14 06:18:06', '62f8d9ee8bec8', '2', '62f8bab5e6912', 'Beta Tester Plan', 'FREE', 'USD', '0', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":null,\"to_billing_address\":null,\"to_billing_city\":null,\"to_billing_state\":null,\"to_billing_zipcode\":null,\"to_billing_country\":null,\"to_billing_phone\":null,\"to_billing_email\":null,\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":0,\"subtotal\":0,\"tax_amount\":0}', 'SUCCESS', '1', '2022-08-14 11:18:06', '2022-08-14 11:18:06'),
(3, '62f8dbb6a6559', '2022-08-14 06:25:42', 'I-9R346VHGV6KD', '2', '62f8d81cbf71c', 'Professional Plan', 'PayPal', 'USD', '9.44', '1', 'INV-', '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"JohnDoe\",\"to_billing_address\":\"1 Main St\",\"to_billing_city\":\"San Jose\",\"to_billing_state\":\"CA\",\"to_billing_zipcode\":\"95131\",\"to_billing_country\":\"US\",\"to_billing_email\":\"sb-itiqr16331656@personal.example.com\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":\"9.44\",\"subtotal\":\"8.95\",\"tax_amount\":1.439999999999999946709294817992486059665679931640625}', 'SUCCESS', '1', '2022-08-14 11:25:42', '2022-08-14 11:25:42'),
(4, '62f8e5d347502', '2022-08-14 07:08:51', 'I-A6FWNTAYMVEX', '2', '62f8d81cbf71c', 'Professional Plan', 'PayPal', 'USD', '9.44', '2', 'INV-', '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"JohnDoe\",\"to_billing_address\":\"1 Main St\",\"to_billing_city\":\"San Jose\",\"to_billing_state\":\"CA\",\"to_billing_zipcode\":\"95131\",\"to_billing_country\":\"US\",\"to_billing_email\":\"sb-itiqr16331656@personal.example.com\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":\"9.44\",\"subtotal\":\"8.95\",\"tax_amount\":1.439999999999999946709294817992486059665679931640625}', 'SUCCESS', '1', '2022-08-14 12:08:51', '2022-08-14 12:08:51'),
(5, '62f93574abbfc', '2022-08-14 12:48:36', 'sub_1LWkvOIY8R27Jx6MKYLwYrCh', '2', '62f8d81cbf71c', 'Professional Plan', 'Stripe', 'USD', '9.44', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"dhaka\",\"to_billing_state\":\"1234\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia.tech@gmail.com\",\"to_vat_number\":\"1234\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":9.4399999999999995026200849679298698902130126953125,\"subtotal\":\"8.95\",\"tax_amount\":1.439999999999999946709294817992486059665679931640625}', 'Success', '1', '2022-08-14 17:48:36', '2022-08-14 17:48:36'),
(6, '62f9d4147a3a7', '2022-08-15 00:05:24', '', '2', '62f8d81cbf71c', 'Professional Plan', 'Offline', 'USD', '9.44', '3', 'INV-', '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"dhaka\",\"to_billing_state\":\"1234\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia.tech@gmail.com\",\"to_vat_number\":\"1234\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":9.4399999999999995026200849679298698902130126953125,\"subtotal\":\"8.95\",\"tax_amount\":1.439999999999999946709294817992486059665679931640625}', 'SUCCESS', '1', '2022-08-15 05:05:24', '2022-08-15 05:05:24'),
(7, '62f9e8b97983e', '2022-08-15 01:33:29', 'sub_1LWwraIY8R27Jx6MCiBkDMnF', '2', '62f9e85cc228f', 'test4 Plan', 'Stripe', 'USD', '23.6', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":null,\"to_billing_address\":null,\"to_billing_city\":null,\"to_billing_state\":null,\"to_billing_zipcode\":null,\"to_billing_country\":null,\"to_billing_phone\":null,\"to_billing_email\":null,\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":23.60000000000000142108547152020037174224853515625,\"subtotal\":\"20\",\"tax_amount\":3.600000000000000088817841970012523233890533447265625}', 'Success', '1', '2022-08-15 06:33:29', '2022-08-15 06:33:29'),
(8, '62fa5aa510319', '2022-08-15 09:39:33', '62fa5aa510355', '2', '62f8bab5e6912', 'Beta Tester Plan', 'FREE', 'USD', '0', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"banani\",\"to_billing_state\":\"banani\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia111333@gmail.com\",\"to_vat_number\":\"123\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":0,\"subtotal\":0,\"tax_amount\":0}', 'SUCCESS', '1', '2022-08-15 14:39:33', '2022-08-15 14:39:33'),
(9, '6347a63bb81ff', '2022-10-13 00:46:35', '', '2', '62f8d935b6119', 'Legacy Client Plan', 'Offline', 'USD', '57.82', '4', 'INV-', '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"dhaka\",\"to_billing_state\":\"1234\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia.tech@gmail.com\",\"to_vat_number\":\"1234\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":57.82,\"subtotal\":\"49.95\",\"tax_amount\":8.82}', 'SUCCESS', '1', '2022-10-12 18:46:35', '2022-10-12 18:46:35'),
(10, '63884b901bd0e', '2022-12-01 06:37:04', 'sub_1MA6OHBIRmXVjgUGJJQSR5zk', '2', '2', 'LetsConnect Small Business Plan', 'Stripe', 'USD', '1178.82', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"banani\",\"to_billing_state\":\"banani\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia111333@gmail.com\",\"to_vat_number\":\"123\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":1178.82,\"subtotal\":\"999\",\"tax_amount\":179.82}', 'Success', '1', '2022-12-01 00:37:04', '2022-12-01 00:37:04'),
(11, '63884bd57afa5', '2022-12-01 06:38:13', 'sub_1MA6POBIRmXVjgUGCbJzth9x', '2', '2', 'LetsConnect Small Business Plan', 'Stripe', 'USD', '1178.82', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"banani\",\"to_billing_state\":\"banani\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia111333@gmail.com\",\"to_vat_number\":\"123\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":1178.82,\"subtotal\":\"999\",\"tax_amount\":179.82}', 'Success', '1', '2022-12-01 00:38:13', '2022-12-01 00:38:13'),
(12, '63884c6b43f95', '2022-12-01 06:40:43', 'sub_1MA6RoBIRmXVjgUGvIM3Nocy', '2', '2', 'LetsConnect Small Business Plan', 'Stripe', 'USD', '1178.82', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":\"dhaka\",\"to_billing_city\":\"banani\",\"to_billing_state\":\"banani\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"ronymia111333@gmail.com\",\"to_vat_number\":\"123\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":1178.82,\"subtotal\":\"999\",\"tax_amount\":179.82}', 'Success', '1', '2022-12-01 00:40:43', '2022-12-01 00:40:43'),
(13, '638851665fcbe', '2022-12-01 07:01:58', 'sub_1MA6mNBIRmXVjgUGrlwj6ur9', '2', '2', 'LetsConnect Small Business Plan', 'Stripe', 'USD', '1178.82', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rony\",\"to_billing_address\":null,\"to_billing_city\":\"banani\",\"to_billing_state\":\"banani\",\"to_billing_zipcode\":\"1234\",\"to_billing_country\":null,\"to_billing_phone\":\"01990572321\",\"to_billing_email\":\"user@gmail.com\",\"to_vat_number\":\"ronymia111333@gmail.com\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":1178.82,\"subtotal\":\"999\",\"tax_amount\":179.82}', 'Success', '1', '2022-12-01 01:01:58', '2022-12-01 01:01:58'),
(14, '638f3ca1eb6af', '2022-12-06 06:59:13', 'sub_1MC0jrBIRmXVjgUGLbsM6szE', '2', '2', 'LetsConnect Small Business Plan', 'Stripe', 'USD', '1178.82', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Dahlia Strong\",\"to_billing_address\":null,\"to_billing_city\":\"Autem distinctio Sa\",\"to_billing_state\":\"Odit velit qui a tot\",\"to_billing_zipcode\":\"75510\",\"to_billing_country\":null,\"to_billing_phone\":\"+1 (606) 757-4578\",\"to_billing_email\":\"comy@mailinator.com\",\"to_vat_number\":\"909\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":1178.82,\"subtotal\":\"999\",\"tax_amount\":179.82}', 'Success', '1', '2022-12-06 00:59:13', '2022-12-06 00:59:13'),
(15, '6391d59105659', '2022-12-08 06:16:17', 'sub_1MCj1OBIRmXVjgUGyYrP6XWT', '53', '2', 'LetsConnect Small Business Plan', 'Stripe', 'USD', '54.28', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Rabin mia\",\"to_billing_address\":null,\"to_billing_city\":\"Jsjjd\",\"to_billing_state\":\"Hdjd\",\"to_billing_zipcode\":\"Jdjjd\",\"to_billing_country\":null,\"to_billing_phone\":null,\"to_billing_email\":\"rabinmia7578@gmail.com\",\"to_vat_number\":\"Jdjjd\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":54.280000000000001136868377216160297393798828125,\"subtotal\":46,\"tax_amount\":8.2799999999999993605115378159098327159881591796875}', 'Success', '1', '2022-12-08 06:16:17', '2022-12-08 06:16:17'),
(16, '63946815edec5', '2022-12-10 05:05:57', 'sub_1MDQsRBIRmXVjgUGEXjhlIvW', '56', '2', 'LetsConnect Small Business Plan', 'Stripe', 'USD', '17.7', NULL, NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Arifur Rahman\",\"to_billing_address\":null,\"to_billing_city\":\"asas\",\"to_billing_state\":\"asas\",\"to_billing_zipcode\":\"12345\",\"to_billing_country\":null,\"to_billing_phone\":\"01710788656\",\"to_billing_email\":\"arifmahmud64@gmail.com\",\"to_vat_number\":\"21323\",\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":17.699999999999999289457264239899814128875732421875,\"subtotal\":15,\"tax_amount\":2.70000000000000017763568394002504646778106689453125}', 'Success', '1', '2022-12-10 05:05:57', '2022-12-10 05:05:57');

-- --------------------------------------------------------

--
-- Table structure for table `tutorials`
--

CREATE TABLE `tutorials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tutorials`
--

INSERT INTO `tutorials` (`id`, `title`, `created_at`, `updated_at`, `description`) VALUES
(1, 'how to create a card.', '2022-04-26 19:59:21', '2022-04-26 19:59:21', 'description 1'),
(2, 'how to create a card11.', '2022-04-26 19:59:21', '2022-04-26 19:59:21', 'description 2'),
(3, 'how to create a card1122221.', '2022-04-26 19:59:21', '2022-04-26 19:59:21', 'description 3 e');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` bigint(20) NOT NULL DEFAULT 2,
  `user_type` int(1) NOT NULL DEFAULT 2 COMMENT '1=admin,2=user',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `email_verified` int(1) NOT NULL DEFAULT 0,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auth_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_details` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_validity` date DEFAULT NULL,
  `plan_activation_date` date DEFAULT NULL,
  `billing_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vat_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_address` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `billing_email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_plan_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paypal_data` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `stripe_customer_id` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `paid_with` int(11) DEFAULT NULL COMMENT '0=Stripe, 1=Paypal\r\n',
  `gender` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ccode` varchar(8) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_id` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_websitelink` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token_expire_at` datetime DEFAULT NULL,
  `is_token_active` tinyint(4) DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted_by` int(11) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`) VALUES
(1, 'LetsConnect', NULL, 'admin@gmail.com', 1, 1, NULL, 0, '$2y$10$g6GacdNZ6Pqoz6VOCav9kep7E.2u3o.TqxP5/0ZtlzMju18z9HjoS', 'Email', '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-03-12 14:54:38', '2022-12-31 06:15:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'user1', NULL, 'user@gmail.com', 0, 2, NULL, 0, '$2y$10$v8MKSaFQyVL..Fs8ZW.Pt..RccGPD5uRfyKexrYcgW0GXUaGvpTlO', 'Email', 'upload/logo/1669870763.png', '2', '9999', '{\"id\":2,\"plan_type\":2,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"LetsConnect Small Business\",\"plan_description\":\"LetsConnect Small Business\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":46,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solopreneur Account +\\\",\\\"Up to 20 Shareable Digital Cards\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Marketing Mastery 101 Guide\\\",\\\"BONUS: LetsConnect Branding Guide\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T22:10:20.000000Z\",\"updated_at\":\"2022-12-06T12:53:27.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1}', '2023-01-06', '2022-12-06', 'Dahlia Strong', 'personal', '123', NULL, 'Autem distinctio Sa', 'Odit velit qui a tot', '75510', NULL, '+1 (606) 757-4578', 'comy@mailinator.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MC0jrBIRmXVjgUGLbsM6szE\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1670331551,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1670331551,\"currency\":\"usd\",\"current_period_end\":1673009951,\"current_period_start\":1670331551,\"customer\":\"cus_MvsUI7ZC6dOOp9\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_MvsUJJ9FCTbBGP\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1670331552,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MC0jrBIRmXVjgUGLbsM6szE\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MC0jrBIRmXVjgUGLbsM6szE\"},\"latest_invoice\":\"in_1MC0jrBIRmXVjgUGlBundyWn\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1670331551,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_MvsUI7ZC6dOOp9', '2022-08-15 14:34:14', '2022-12-01 00:48:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Md Maidul Islam', NULL, 'Maidul@gmail.com', 1, 2, NULL, 0, '$2y$10$ymfM/z4aBi58HGVoQl48HekrFbCUpJYmDnWuW1tmwd0EjspASl0yi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-02 08:58:29', '2022-12-07 20:02:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '', NULL, 'maidul1@gmail.com', 1, 1, NULL, 0, '$2y$10$4CA3v2emacQWtY67ZkfS8.FmugGYH5pY3lcmvVy4Xl.ipkykEqSiO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-19 01:06:04', '2022-11-19 01:06:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Rokib', NULL, 'rokib@gmail.com', 1, 2, NULL, 0, '$2y$10$cBU5Zq8kX/CN14iPR.ghK.O8tCNVVQsMQrHSv9npCHWYn1PaUUlVi', NULL, 'upload/profile/1669453399.jpg', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-27', '2022-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-26 06:24:04', '2022-11-26 03:03:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Sharif', NULL, 'sharif@gmail.com', 1, 2, NULL, 0, '$2y$10$vlc72hr0quMawpKKBAWVWur2LLoS55VirnJVJRDOlqScbglQ8JfG6', NULL, 'upload/profile/1669558751.png', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-28', '2022-11-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-27 14:08:58', '2022-11-27 08:19:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Kamal', NULL, 'user10@gmail.com', 1, 2, NULL, 0, '$2y$10$cuwHVKFPHtqzEACwJKh3iORBwWSC0Ywgn6corStox682JvFgVkS7m', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '0000-00-00', '2022-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-30 07:51:58', '2022-11-30 02:17:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Jamal', NULL, 'jamal@gmail.com', 1, 2, NULL, 0, '$2y$10$YJQ.XhRrFAnodS5cz.LLQ.bNFUtqFyO3ilumeNR6B8Y0qLFlTBc1u', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-12-30', '2022-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-30 08:17:36', '2022-11-30 02:18:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Rabin mia', NULL, 'rabinmia7578@gmail.com', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp5skZc5cDeXLPg6eXI_ii3nbHLqkA7WXGSb3adp=s96-c', '2', NULL, '{\"id\":2,\"plan_type\":2,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"LetsConnect Small Business\",\"plan_description\":\"LetsConnect Small Business\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":46,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solopreneur Account +\\\",\\\"Up to 20 Shareable Digital Cards\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Marketing Mastery 101 Guide\\\",\\\"BONUS: LetsConnect Branding Guide\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T16:10:20.000000Z\",\"updated_at\":\"2022-12-06T06:53:27.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1}', '2023-01-08', '2022-12-08', 'Rabin mia', NULL, NULL, NULL, 'Jsjjd', 'Hdjd', 'Jdjjd', NULL, NULL, 'rabinmia7578@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MCj1OBIRmXVjgUGyYrP6XWT\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1670501774,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1670501774,\"currency\":\"usd\",\"current_period_end\":1673180174,\"current_period_start\":1670501774,\"customer\":\"cus_MwcFgr9RnTdFGW\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_MwcFeLmBPtZDvV\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1670501775,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MCj1OBIRmXVjgUGyYrP6XWT\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MCj1OBIRmXVjgUGyYrP6XWT\"},\"latest_invoice\":\"in_1MCj1OBIRmXVjgUGErmMnWG4\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1670501774,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_MwcFgr9RnTdFGW', '2022-12-08 05:50:25', '2022-12-08 05:50:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '115691976286960126962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Rony Mia', NULL, 'ronymia.tech@gmail.com', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4C9qHTYcI0ZzTxl40nUtRPzrJXOyHnrXLCEH3G=s96-c', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-11-30 08:07:46\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-08', '2022-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-08 08:21:37', '2022-12-08 08:21:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107403319867710670983', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Spencer Suggs', NULL, 'spencer@letsconnect.site', 1, 2, NULL, 0, '$2y$10$ZTVtW3vzFYehUp3A2RAFT.dgjSXBfSDpkYxFB7MmT.WEAlJ3Isfuq', NULL, 'https://letsconnectv2.webdevs4u.com/upload/logo/1670510302.png', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-11-30 08:07:46\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-08', '2022-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-08 20:30:30', '2022-12-08 08:38:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Arifur Rahman', NULL, 'arifmahmud64@gmail.com', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4IZvMNZJWrbKDErUWRt6O80Du3C87cPn-iMZ2rXuA=s96-c', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-11-30 08:07:46\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-12-11', '2022-12-10', 'Arifur Rahman', NULL, NULL, NULL, 'asas', 'asas', '12345', NULL, '01710788656', 'arifmahmud64@gmail.com', 1, NULL, NULL, NULL, NULL, 'cus_MxLZ8p7EJQsK4F', '2022-12-10 04:49:12', '2022-12-10 05:19:20', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'google', '100953062814271775540', NULL, NULL, NULL, NULL, 'haKpCQqu0mcGjh0iCoYQnUi7nVAJ4WAMGMVKqluxzoqcPT8oKxGsHfEFmusm', '2022-12-10 06:03:46', 1, NULL, NULL, NULL),
(57, 'Mokaddes Hosain', NULL, 'mr.mokaddes@gmail.com', 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2308423085971803/picture?type=normal', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:45:25', '2022-12-10 06:45:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2308423085971803', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'বেদনার বিশালতা', NULL, 'mr.mokaddes@yahoo.com', 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2483507575123152/picture?type=normal', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:46:38', '2022-12-10 06:46:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2483507575123152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Md Maidul Islam', NULL, 'mahibc1@gmail.com', 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2135716489941526/picture?type=normal', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:57:59', '2022-12-10 06:57:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2135716489941526', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Md Maidul', NULL, 'maidul.tech@gmail.com', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4oYDvcIxT3OAcXD-t_j8Z_gWfrBS7dbYbMrZA7=s96-c', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:59:08', '2022-12-10 06:59:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107639191533203099239', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Arifur Rahman', NULL, 'arifurrahman911@live.com', 1, 2, NULL, 0, '$2y$10$tUvSErHMWYPItlNg5Mz8J..gkwzHb0ii16fu.fgK2Mmw0BKHVDJ.i', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 19:14:16', '2022-12-10 07:16:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Rony Mia', NULL, 'ronymia111333@gmail.com', 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/1801020763564287/picture?type=normal', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 08:06:19', '2022-12-10 08:06:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '1801020763564287', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Arifur', NULL, '63-arifurrahman01710@gmail.com', 1, 2, NULL, 0, '$2y$10$8POzbpKX9HuRMJPZHBECsu/f6URJ67p6nmj/znJjEJY2K6wQ3cp5.', NULL, 'https://letsconnectv2.webdevs4u.com/upload/logo/1670682269.png', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 20:17:10', '2022-12-10 08:25:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'EU3cvteFObrXzKsKzwk9NbxFnLtSOWEGgs0g9DPT7rk7qZnp2LAZz7N74e0a', '2022-12-10 09:24:48', 1, '2022-12-10 08:25:36', 63, 1),
(64, 'Tenu', NULL, 'teno@gmail.com', 1, 2, NULL, 0, '$2y$10$cJO1.wrrpI4NRQgKV0CLTeY4S8g/pCuKl5n.8hDbu.OC2XCneeH1W', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"10\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-11', '2022-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-11 10:29:58', '2022-12-13 00:32:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Pori Moni', NULL, 'pori@gmail.com', 2, 2, NULL, 0, '$2y$10$LAR/Q4BqT/yNaM9dyL8DbuSBZoEvuLwLNTjIgJ8r/G7P007KmpTKi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-01 00:14:23', '2023-01-01 00:14:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`) VALUES
(66, 'Raj', NULL, 'raj@gmail.com', 2, 2, NULL, 0, '$2y$10$5I8iykUXNQAiPBUSN8uytOgY.P22b5RfK/akOiazXBlY2Zh.Q1OZu', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-12-10 11:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2024-01-03', '2023-01-02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-01 14:27:22', '2023-01-02 08:11:31', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `business_cards`
--
ALTER TABLE `business_cards`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `business_cards_card_url_unique` (`card_url`);

--
-- Indexes for table `business_fields`
--
ALTER TABLE `business_fields`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connects`
--
ALTER TABLE `connects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `custom_pages`
--
ALTER TABLE `custom_pages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
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
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_icon`
--
ALTER TABLE `social_icon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutorials`
--
ALTER TABLE `tutorials`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `business_cards`
--
ALTER TABLE `business_cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `business_fields`
--
ALTER TABLE `business_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `connects`
--
ALTER TABLE `connects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `custom_pages`
--
ALTER TABLE `custom_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=248;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_icon`
--
ALTER TABLE `social_icon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
