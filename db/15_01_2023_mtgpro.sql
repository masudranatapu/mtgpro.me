-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 03:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

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
  `bio` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_hit` int(11) NOT NULL DEFAULT 1,
  `total_qr_download` int(11) NOT NULL DEFAULT 1,
  `total_vcf_download` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_cards`
--

INSERT INTO `business_cards` (`id`, `card_id`, `user_id`, `theme_id`, `theme_color`, `card_lang`, `cover`, `profile`, `card_url`, `card_type`, `title`, `title2`, `sub_title`, `description`, `card_status`, `status`, `created_at`, `updated_at`, `company_name`, `company_websitelink`, `ccode`, `phone_number`, `card_email`, `card_for`, `logo`, `designation`, `deleted_at`, `deleted_by`, `is_deleted`, `location`, `bio`, `total_hit`, `total_qr_download`, `total_vcf_download`) VALUES
(4, '637876cb3152c', 44, '1', '#fff', 'en', NULL, 'upload/profile/1668839088.png', '637876cb3152c', 'vcard', 'Maidul', 'Developer', NULL, NULL, 'activated', '0', '2022-11-19 00:25:15', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01681944126', 'maidul.tech@gmail.com', 'Work', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(5, '637876cb32a0c', 44, '1', '#fff', 'en', NULL, 'upload/profile/1668839088.png', '637876cb32a0c', 'vcard', 'Maidul', 'Developer', NULL, NULL, 'activated', '0', '2022-11-19 00:25:15', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01681944126', 'maidul.tech@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(6, '637882c8dedf1', 46, '1', '#fff', 'en', NULL, 'upload/profile/1668842163.png', '637882c8dedf1', 'vcard', 'Maidul', 'Dveloper', NULL, NULL, 'activated', '0', '2022-11-19 01:16:24', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01918993427', 'maidul02@gmail.com', 'Work', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(7, '637882c8e5baf', 46, '1', '#fff', 'en', NULL, 'upload/profile/1668842163.png', '637882c8e5baf', 'vcard', 'Maidul', 'Dveloper', NULL, NULL, 'activated', '0', '2022-11-19 01:16:24', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01918993427', 'maidul02@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(8, '6378d30ede830', 46, '1', '#fff', 'en', NULL, '/upload/profile/3-6378d30ee461f3.jpg', 'test', 'vcard', 'Sakib', 'Khan', '', NULL, 'activated', '0', '2022-11-19 06:58:54', '2023-01-15 11:35:29', 'FDC', 'www.fdc.com', '+880', NULL, 'skib@gmail.com', 'TEST', '/upload/logo/3-6378d30f135493.jpg', 'Actor', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(9, '6378d84b7e635', 46, '1', '#fff', 'en', NULL, '/upload/profile/62670e55cbfef-6378d84b80d8d62670e55cbfef.jpeg', 'rubel', 'vcard', 'Rubel', 'Hossen', '', NULL, 'activated', '0', '2022-11-19 07:21:15', '2023-01-15 11:35:29', 'Rubel Ltd', 'www.rubel.com', '+880', NULL, 'rubel@gmail.com', 'Rubel', '/upload/logo/12-6378d84b85c5d12.png', 'CEO', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(12, '12', 47, '1', '#fff', 'en', NULL, 'upload/profile/1668957249.png', '637a4460c2c55', 'vcard', 'fgfg', 'fgfgg', NULL, NULL, 'activated', '0', '2022-11-20 09:14:40', '2023-01-15 11:35:29', 'fgfg', NULL, '+1', '1212', 'suju@mailinator.com', 'Work', 'upload/logo/1668957421.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(13, '637a4460c534b', 47, '1', '#fff', 'en', NULL, 'upload/profile/1668957249.png', '637a4460c534b', 'vcard', 'fgfg', 'fgfgg', NULL, NULL, 'activated', '0', '2022-11-20 09:14:40', '2023-01-15 11:35:29', 'fgfg', NULL, '+1', '1212', 'suju@mailinator.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(29, '637deb110642a', 2, '1', '#fff', 'en', NULL, 'upload/profile/1669629598.png', 'maidul', 'vcard', 'Maidul', 'Islam', NULL, NULL, 'activated', '0', '2022-11-23 03:42:41', '2023-01-15 11:35:29', 'arobil ltd', 'www.arobil.com', '+1', '01918993427', 'maidul.tech@gmail.com', 'Personal', '/upload/logo/maidul_logo-637deb111c2fdmaidul_logo.png', 'Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(30, '637f25bb4b520', 2, '1', '#fff', 'en', NULL, '/upload/profile/maidul_logo-637f25bb5de29maidul_logo.png', 'maidul01', 'vcard', 'Maidul', 'Islam', NULL, NULL, 'activated', '0', '2022-11-24 02:05:15', '2023-01-15 11:35:29', 'Arobil', 'arobil.com', '+880', '01681944126', 'maidul.tech@gmail.com', 'Personal', '/upload/logo/maidul_logo-637f25bb9221fmaidul_logo.png', 'Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(31, '6381bd9ff0445', 49, '1', '#fff', 'en', NULL, 'upload/profile/1669447053.png', '6381bd9ff0445', 'vcard', 'Rakib', NULL, NULL, NULL, 'activated', '0', '2022-11-26 01:17:51', '2023-01-15 11:35:29', NULL, NULL, '+880', '01681944126', 'rokib@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(32, '63836ff8dc70d', 50, '1', '#fff', 'en', NULL, 'upload/profile/1669558211.png', '63836ff8dc70d', 'vcard', 'Sharif Khan', NULL, NULL, NULL, 'activated', '0', '2022-11-27 08:11:04', '2023-01-15 11:35:29', 'Azuramart', NULL, '+880', '016181944126', 'sharif@gmail.com', 'Personal', NULL, 'CEO', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(33, '63836ff8ddb69', 50, '1', '#fff', 'en', NULL, 'upload/profile/1669558211.png', '63836ff8ddb69', 'vcard', 'Sharif Khan', NULL, NULL, NULL, 'activated', '0', '2022-11-27 08:11:04', '2023-01-15 11:35:29', 'Azuramart', NULL, '+880', '016181944126', 'sharif@gmail.com', 'Work', NULL, 'CEO', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(34, '638618acf057a', 2, '1', '#219653', 'en', NULL, 'upload/profile/1669732256.png', 'test1', 'vcard', 'Md', 'Maidul Islam', NULL, NULL, 'activated', '0', '2022-11-29 08:35:24', '2023-01-15 11:35:29', 'Arobil Ltd', 'www.arobil.com', '+1', '01918993427', 'maidul.tech@gmail.com', 'Personal', 'upload/logo/1669732277.png', 'Developer', NULL, NULL, NULL, NULL, NULL, 6, 1, 1),
(35, '6387118a8de29', 51, '1', '#fff', 'en', NULL, NULL, '6387118a8de29', 'vcard', 'Kamal', NULL, NULL, NULL, 'activated', '0', '2022-11-30 02:17:14', '2023-01-15 11:35:29', NULL, NULL, '+1', '019111111', 'user10@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(36, '638711c561c08', 52, '1', '#fff', 'en', NULL, NULL, '638711c561c08', 'vcard', 'Jamal', NULL, NULL, NULL, 'activated', '0', '2022-11-30 02:18:13', '2023-01-15 11:35:29', NULL, NULL, '+880', '01918993427', 'jamal@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(37, '6391cff1261e6', 53, '1', '#fff', 'en', NULL, NULL, '6391cff1261e6', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '0', '2022-12-08 05:52:17', '2023-01-15 11:35:29', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Personal', NULL, 'My card', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(38, '6391cff126d6b', 53, '1', '#fff', 'en', NULL, NULL, '6391cff126d6b', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '0', '2022-12-08 05:52:17', '2023-01-15 11:35:29', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Work', NULL, 'My card', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(39, '6391cff2065ea', 53, '1', '#fff', 'en', NULL, NULL, '6391cff2065ea', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '0', '2022-12-08 05:52:18', '2023-01-15 11:35:29', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Personal', NULL, 'My card', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(40, '6391cff207179', 53, '1', '#fff', 'en', NULL, NULL, '6391cff207179', 'vcard', 'Rabin', NULL, NULL, NULL, 'activated', '0', '2022-12-08 05:52:18', '2023-01-15 11:35:29', 'Arobil', NULL, '+1', '01984594919', 'rabinmia7578@gmail.com', 'Work', NULL, 'My card', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(41, '6391f383ebb8b', 54, '1', '#fff', 'en', NULL, 'upload/profile/1670509378.png', '6391f383ebb8b', 'vcard', 'Rony Mia', NULL, NULL, NULL, 'activated', '0', '2022-12-08 08:24:03', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01767671133', 'ronymia.tech@gmail.com', 'Personal', NULL, 'Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(42, '6391f383ece93', 54, '1', '#fff', 'en', NULL, 'upload/profile/1670509378.png', '6391f383ece93', 'vcard', 'Rony Mia', NULL, NULL, NULL, 'activated', '0', '2022-12-08 08:24:03', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01767671133', 'ronymia.tech@gmail.com', 'Work', NULL, 'Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(43, '6391f6140fbdf', 55, '1', '#fff', 'en', NULL, 'upload/profile/1670510060.png', '6391f6140fbdf', 'vcard', 'Spencer Suggs', NULL, NULL, NULL, 'activated', '0', '2022-12-08 08:35:00', '2023-01-15 11:35:29', 'LetsConnect Technology Company', NULL, '+1', '9727420702', 'spencer@letsconnect.site', 'Personal', NULL, 'Founder | Visionary | Innovator', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(44, '6391f61410eca', 55, '1', '#fff', 'en', NULL, 'upload/profile/1670510060.png', 'letsconnect', 'vcard', 'Spencer', 'Suggs', NULL, NULL, 'activated', '0', '2022-12-08 08:35:00', '2023-01-15 11:35:29', 'LetsConnect Technology Company', 'www.LetsConnect.site', '+1', '9727420702', 'spencer@letsconnect.site', 'Work', 'upload/logo/1670510425.png', 'Founder | Visionary | Innovator', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(45, '639464640f5aa', 56, '1', '#fff', 'en', NULL, 'upload/profile/1670669395.png', '639464640f5aa', 'vcard', 'Arifur Rahman', NULL, NULL, NULL, 'activated', '0', '2022-12-10 04:50:12', '2023-01-15 11:35:29', 'Arobil Limited', NULL, '+880', '01710788656', 'arifmahmud64@gmail.com', 'Personal', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(48, '63947f792585f', 57, '1', '#fff', 'en', NULL, NULL, '63947f792585f', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:45:45', '2023-01-15 11:35:29', 'sdf', NULL, '+1', '23123', 'mr.mokaddes@gmail.com', 'Personal', NULL, 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(49, '63947f792630e', 57, '1', '#fff', 'en', NULL, NULL, '63947f792630e', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:45:45', '2023-01-15 11:35:29', 'sdf', NULL, '+1', '23123', 'mr.mokaddes@gmail.com', 'Work', NULL, 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(50, '63947fcb24768', 58, '1', '#fff', 'en', NULL, NULL, '63947fcb24768', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:47:07', '2023-01-15 11:35:29', 'sdf', NULL, '+1', '234234', 'mr.mokaddes@yahoo.com', 'Personal', NULL, 'sdfs', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(51, '63947fcb25055', 58, '1', '#fff', 'en', NULL, NULL, '63947fcb25055', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:47:07', '2023-01-15 11:35:29', 'sdf', NULL, '+1', '234234', 'mr.mokaddes@yahoo.com', 'Work', NULL, 'sdfs', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(52, '639486bad9ba3', 61, '1', '#fff', 'en', NULL, 'upload/profile/1670678187.png', '639486bad9ba3', 'vcard', 'Arifur Rahman', NULL, NULL, NULL, 'activated', '0', '2022-12-10 07:16:42', '2023-01-15 11:35:29', 'Arobil Limited', NULL, '+880', '01710788656', 'arifurrahman911@live.com', 'Personal', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(53, '639486bada879', 61, '1', '#fff', 'en', NULL, 'upload/profile/1670678187.png', '639486bada879', 'vcard', 'Arifur Rahman', NULL, NULL, NULL, 'activated', '0', '2022-12-10 07:16:42', '2023-01-15 11:35:29', 'Arobil Limited', NULL, '+880', '01710788656', 'arifurrahman911@live.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(54, '63948c377e4dd', 59, '1', '#fff', 'en', NULL, 'upload/profile/1670679586.png', '63948c377e4dd', 'vcard', 'Md Maidul Islam', NULL, NULL, NULL, 'activated', '0', '2022-12-10 07:40:07', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01681944126', 'mahibc1@gmail.com', 'Personal', NULL, 'Full Stack Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(55, '63948c377f37b', 59, '1', '#fff', 'en', NULL, 'upload/profile/1670679586.png', '63948c377f37b', 'vcard', 'Md Maidul Islam', NULL, NULL, NULL, 'activated', '0', '2022-12-10 07:40:07', '2023-01-15 11:35:29', 'Arobil', NULL, '+880', '01681944126', 'mahibc1@gmail.com', 'Work', NULL, 'Full Stack Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(56, '6394955bd8f66', 63, '1', '#fff', 'en', NULL, 'upload/profile/1670681916.png', '6394955bd8f66', 'vcard', 'Arifur', NULL, NULL, NULL, 'activated', '0', '2022-12-10 08:19:07', '2023-01-15 11:35:29', 'Arobil Limited', NULL, '+880', '1710788656', 'arifurrahman01710@gmail.com', 'Personal', NULL, 'Web Developer', '2022-12-11 00:07:42', 1, NULL, NULL, NULL, 1, 1, 1),
(57, '6394955bd9cc0', 63, '1', '#fff', 'en', NULL, 'upload/profile/1670681916.png', '6394955bd9cc0', 'vcard', 'Arifur', NULL, NULL, NULL, 'activated', '0', '2022-12-10 08:19:07', '2023-01-15 11:35:29', 'Arobil Limited', NULL, '+880', '1710788656', 'arifurrahman01710@gmail.com', 'Work', NULL, 'Web Developer', '2022-12-11 00:59:03', 1, NULL, NULL, NULL, 1, 1, 1),
(59, '63955d160b101', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670733065.png', '63955d160b101', 'vcard', 'Tenu', NULL, NULL, NULL, 'activated', '0', '2022-12-10 22:31:18', '2023-01-15 11:35:29', 'APDL Ltd', NULL, '+1268', '1918993458', 'teno@gmail.com', 'Work', NULL, 'Manager Sales', '2022-12-10 23:57:02', 1, NULL, NULL, NULL, 1, 1, 1),
(60, '6398138841a4e', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670910838.png', '6398138841a4e', 'vcard', 'Jamal Khan', NULL, NULL, NULL, 'activated', '0', '2022-12-12 17:54:16', '2023-01-15 11:35:29', 'ABC Group', NULL, '+238', '019189963427', 'teno@gmail.com', 'Personal', NULL, 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(61, '6398138844d50', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670930297.png', '6398138844d50', 'vcard', 'Jamal', 'Khan', NULL, NULL, 'activated', '0', '2022-12-12 17:54:16', '2023-01-15 11:35:29', 'ABC Group', NULL, '+238', '019189963427', 'teno@gmail.com', 'Work', 'upload/logo/1670911687.png', 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(62, '6398989f60975', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670944777.png', 'test4', 'vcard', 'Tenu', 'Khan', '', NULL, 'activated', '0', '2022-12-13 03:22:07', '2023-01-15 11:35:29', 'Khan Group', 'https://stackoverflow.com', '+1', '01911116666', 'khan@gmail.com', 'TEST', 'upload/logo/1670944785.png', 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(64, '639899a572a13', 64, '1', '#fff', 'en', NULL, NULL, 'testf', 'vcard', 'Tenu', 'hkaa', '', NULL, 'activated', '0', '2022-12-13 03:26:29', '2023-01-15 11:35:29', NULL, NULL, '+1', '191889999', 'maidul@gmail.com', 'ttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(66, '63b19a9e37353', 66, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/1672583836.png', '63b19a9e373b6', 'vcard', 'Raj', NULL, NULL, NULL, 'activated', '0', '2023-01-01 14:37:18', '2023-01-15 11:35:29', 'Arobil', NULL, NULL, '8801681944126', 'raj@gmail.com', 'Work', NULL, 'Develoepr', NULL, NULL, NULL, 'Banani, Dhaka', 'This is a short bio of Maidul Islam', 1, 1, 1),
(70, '63b2d4e055360', 66, '1', '#219653', 'en', 'assets/uploads/cover/21f78700-13b4-4b5e-9dab-fc224c28a3a8-63b2d4e0557a4.jpg', 'assets/uploads/avatar/41-63b2d4e0553fc.jpg', '63b2d4e055360', 'vcard', 'Md Maidul Islam', NULL, '', NULL, 'activated', '0', '2023-01-02 12:58:08', '2023-01-15 11:35:29', 'Arobil Ltd', NULL, NULL, NULL, NULL, 'Office', 'assets/uploads/logo/21f78700-13b4-4b5e-9dab-fc224c28a3a8-63b2d4e0559d9.jpg', 'Developer', NULL, NULL, NULL, 'Banani, Dhaka', 'I am from Bangladesh.', 1, 1, 1),
(71, '63b2eff777acb', 66, '1', '#fff', 'en', 'assets/uploads/avatar/maidul-63b4370b9b46e.jpg', 'assets/uploads/avatar/maidul-63b4370b99bfb.jpg', 'maidul77', 'vcard', 'Maidul', NULL, '', NULL, 'activated', '0', '2023-01-02 14:53:43', '2023-01-15 11:35:29', 'Arobil Ltd', NULL, NULL, NULL, 'raj@gmail.com', 'Office', 'assets/uploads/avatar/maidul-63b437982b8ab.jpg', 'Php Developer', NULL, NULL, NULL, 'Dhaka, Bangladesh', 'Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.', 1, 1, 1),
(72, '63b58af96436d', 67, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/hasad-whitfield-63b58af964424.jpg', '63b58af9643cd', 'vcard', 'Hasad Whitfield', NULL, NULL, NULL, 'activated', '0', '2023-01-04 14:19:37', '2023-01-15 11:35:29', 'Arobil Ltd', NULL, NULL, '0259566666', 'jexoqo@mailinator.com', 'Work', NULL, 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(73, '63bd391d38c7f', 2, '1', '#219653', 'en', 'assets/uploads/avatar/md-maidul-islam-63bd391d3a696.jpg', 'assets/uploads/avatar/md-maidul-islam-63bd391d39359.jpg', 'maidulislam', 'vcard', 'Md Maidul Islam', NULL, '', NULL, 'activated', '0', '2023-01-10 10:08:29', '2023-01-15 11:35:29', 'Arobil Ltd', NULL, NULL, NULL, 'user@gmail.com', 'Personal', 'assets/uploads/avatar/md-maidul-islam-63bd391d3c2e6.jpg', 'Php Developer', NULL, NULL, NULL, 'Banani, Dhaka', 'I am from Dhaka, perfect for php Developer', 14, 3, 1),
(74, '63bd4f08e2d91', 2, '1', '#fff', 'en', NULL, NULL, 'card1', 'vcard', 'test', NULL, '', NULL, 'activated', '0', '2023-01-10 11:42:00', '2023-01-15 11:35:29', 'test', NULL, NULL, NULL, 'user@gmail.com', 'test', NULL, 'test', NULL, NULL, NULL, 'test', NULL, 25, 1, 1),
(75, '63bd6977b2e2d', 2, '1', '#fff', 'en', NULL, NULL, 'Estsuntmollitquidemvelitautmolestiaeomnis', 'vcard', 'Stella Peterson', NULL, '', NULL, 'activated', '0', '2023-01-10 13:34:47', '2023-01-15 11:35:29', 'Conley Roach Co', NULL, NULL, NULL, 'user@gmail.com', 'Similique cumque nat', NULL, 'Eum enim consequatur incididunt fuga Recusandae', NULL, NULL, NULL, 'Quod aut laboris dolor ut rem duis rerum quod aliq', 'Officia culpa lorem maiores aut qui qui ad et odio sed sequi eligendi vitae quidem excepturi ut qui', 2, 1, 1),
(76, '63be48e1bbf8b', 70, '1', '#9B51E0', 'en', 'assets/uploads/avatar/masud-63be4a8279335.jpg', 'assets/uploads/avatar/masud-63be48e1bc015.jpg', 'masudranatapu', 'vcard', 'Masud', NULL, '', NULL, 'activated', '0', '2023-01-11 11:28:01', '2023-01-15 11:35:29', 'Arobil Outsourcing', NULL, NULL, NULL, 'masud@gmail.com', 'Work', NULL, 'Software Developer', NULL, NULL, NULL, 'KB Road, Dhaka, Bangladesh', 'Hi, I am masud rana tapu.', 24, 1, 4),
(77, '63be846d3575e', 71, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/ziaur-rahman-63be846d357d8.jpg', '63be846d357a4', 'vcard', 'Ziaur Rahman', NULL, NULL, NULL, 'activated', '0', '2023-01-11 15:42:05', '2023-01-15 11:35:29', 'Arobil Ltd', NULL, NULL, '01860141942', 'ziariyad018@gmail.com', 'Work', NULL, 'Software Engineer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(78, '63be85a280773', 71, '1', '#EB5757', 'en', 'assets/uploads/avatar/ziaur-rahman-63be85a280a49.jpg', 'assets/uploads/avatar/ziaur-rahman-63be85a280921.jpg', 'riyadjk', 'vcard', 'Ziaur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-11 15:47:14', '2023-01-15 11:35:29', 'Arobil Ltd', NULL, NULL, NULL, 'ziariyad018@gmail.com', 'Business Card', 'assets/uploads/avatar/ziaur-rahman-63be85a280d57.jpg', 'Software Engineer', NULL, NULL, NULL, 'Banani,Dhaka-1213', 'Bio is loading', 2, 1, 1),
(79, '63be96edcfca6', 71, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/ziaur-rahman-63be972f0afa1.jpg', 'riyad', 'vcard', 'Ziaur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-11 17:01:01', '2023-01-15 11:35:29', 'Arobil ltd', NULL, NULL, NULL, 'ziariyad018@gmail.com', 'Business Card', NULL, 'Software Engineer', NULL, NULL, NULL, 'Banani,Dhaka-1213', 'Bio is loading', 6, 2, 1),
(80, '63beb5ef00775', 73, '1', '#fff', 'en', NULL, NULL, '63beb5ef007cc', 'vcard', 'Joe Renter', NULL, NULL, NULL, 'activated', '0', '2023-01-11 19:13:19', '2023-01-15 11:35:29', 'non-QM Doc LLC', NULL, NULL, '5162973389', 'jr@mtgpro.me', 'Work', NULL, 'CEO & Founder', NULL, NULL, NULL, NULL, NULL, 4, 1, 1),
(81, '63beba8a2606c', 74, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/asasas-63beba8a260ed.jpg', '63beba8a260b7', 'vcard', 'asasas', NULL, NULL, NULL, 'activated', '0', '2023-01-11 19:32:58', '2023-01-15 11:35:29', 'asas', NULL, NULL, '01710788656', 'asasas@gmail.com', 'Work', NULL, 'asas', NULL, NULL, NULL, NULL, NULL, 2, 1, 1),
(82, '63bebc2d0e0df', 75, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/michael-m-63bebc2d0e156.jpg', '63bebc2d0e122', 'vcard', 'Michael M. Kelly', NULL, NULL, NULL, 'activated', '0', '2023-01-11 19:39:57', '2023-01-15 11:35:29', 'Xray Eye & Vision Clinics', NULL, NULL, '69315788', 'MichaelMKelly@jourrapide.com', 'Work', NULL, 'Personnel administrator', NULL, NULL, NULL, NULL, NULL, 2, 1, 1),
(83, '63bebcedcfadf', 76, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/john-a-63bebcedcfb5a.jpg', '63bebcedcfb24', 'vcard', 'John A. Knox', NULL, NULL, NULL, 'activated', '0', '2023-01-11 19:43:09', '2023-01-15 11:35:29', 'Century House', NULL, NULL, '0171009495686', 'JohnAKnox@dayrep.com', 'Work', NULL, 'Coil finisher', NULL, NULL, NULL, NULL, NULL, 2, 1, 1),
(86, '63bebfdc7af5d', 77, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/alfredolgee-63bebfdc7b033.jpg', '63bebfdc7aff0', 'vcard', 'AlfredoLGee', NULL, NULL, NULL, 'activated', '0', '2023-01-11 13:55:40', '2023-01-15 11:35:29', 'asas', NULL, NULL, '017107889656', 'AlfredoLGee@dayrep.com', 'Work', NULL, 'asasas', NULL, NULL, NULL, NULL, NULL, 3, 1, 1),
(87, '63bec2a3286de', 78, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/williamjquandt-63bec2a3289d2.jpg', '63bec2a328856', 'vcard', 'WilliamJQuandt', NULL, NULL, NULL, 'activated', '0', '2023-01-11 14:07:31', '2023-01-15 11:35:29', 'qwewqewqe', NULL, NULL, '01710788656', 'WilliamJQuandt@teleworm.us', 'Work', NULL, 'wqeqwe', NULL, NULL, NULL, NULL, NULL, 4, 1, 1),
(89, '63bfcb7179c4a', 79, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/arifur-rahman-63bfcb7179d75.jpg', '63bfcb7179d21', 'vcard', 'Arifur Rahman', NULL, NULL, NULL, 'activated', '0', '2023-01-12 08:57:21', '2023-01-15 11:35:29', 'Arobil Limited', NULL, NULL, '01710788656', 'arifurrahman01710@gmail.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL, 2, 1, 1),
(90, '63bfcf11a8fcb', 80, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/tocedew-63bfcf11a90ba.jpg', '63bfcf11a905e', 'vcard', 'tocedew', NULL, NULL, NULL, 'activated', '0', '2023-01-12 09:12:49', '2023-01-15 11:35:29', 'Arobil Limited', NULL, NULL, '01710788656', 'tocedew261@tohup.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(91, '63bfd19e8d45d', 81, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/tocedew26-63bfd19e8d750.jpg', '63bfd19e8d510', 'vcard', 'tocedew26', NULL, NULL, NULL, 'activated', '0', '2023-01-12 09:23:42', '2023-01-15 11:35:29', 'asas', NULL, NULL, '01710788656', 'tocedew26@tohup.com', 'Work', NULL, 'asas', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(92, '63bfd60712d91', 82, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/tocedew-63bfd60712f4e.jpg', '63bfd60712e15', 'vcard', 'tocedew', NULL, NULL, NULL, 'activated', '1', '2023-01-12 09:42:31', '2023-01-15 11:35:29', 'adad', NULL, NULL, '01710788656', 'tocedew261@tohup.com', 'Work', NULL, 'adad', NULL, NULL, NULL, NULL, NULL, 29, 1, 8),
(93, '63c24113e1e7e', 83, '1', NULL, 'en', 'assets/uploads/avatar/gihamo-63c241545a747.jpg', 'assets/uploads/avatar/gihamo-63c24113e1ffa.jpg', '63c24113e1f0a', 'vcard', 'gihamo', NULL, '', NULL, 'activated', '0', '2023-01-14 05:43:47', '2023-01-15 11:35:29', 'Arobil Limited', NULL, NULL, NULL, 'gihamo3196@themesw.com', 'Work', 'assets/uploads/avatar/gihamo-63c241545b873.jpg', 'Web Developer', NULL, NULL, NULL, 'Dhaka', 'lorem', 18, 1, 4),
(94, '63c2575a574e8', 84, '1', NULL, 'en', 'assets/uploads/avatar/tecij81550-63c26b3ef0a6e.jpg', 'assets/uploads/avatar/tecij81550-63c2575a57868.jpg', '63c2575a5758e', 'vcard', 'tecij81550', NULL, '', NULL, 'activated', '0', '2023-01-14 07:18:50', '2023-01-15 11:35:29', 'Arobil limited', NULL, NULL, NULL, 'tecij81550@tohup.com', 'Work', 'assets/uploads/avatar/tecij81550-63c26b3ef226d.jpg', 'Web Developer', '2023-01-15 15:24:49', 84, 1, 'Dhaka', 'sasasasasas', 16, 1, 5),
(95, '63c3e19eb7089', 85, '1', NULL, 'en', NULL, 'assets/uploads/avatar/abdullah-63c3e19eb71a3.jpg', '63c3e19eb7144', 'vcard', 'Abdullah', NULL, NULL, NULL, 'activated', '0', '2023-01-15 11:21:02', '2023-01-15 11:35:29', 'Arobil Limited', NULL, NULL, '8801710788656', 'abdullah@gmail.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1),
(96, '63c40584aaf8c', 82, '1', '#fff', 'en', NULL, NULL, '63c40584aaf8c', 'vcard', 'sas', NULL, '', NULL, 'activated', '1', '2023-01-15 13:54:12', '2023-01-15 13:57:12', 'as', NULL, NULL, NULL, 'tocedew261@tohup.com', 'sadsad', NULL, 'asas', NULL, NULL, NULL, 'asas', 'asasasasasadasd', 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `business_fields`
--

CREATE TABLE `business_fields` (
  `id` int(10) UNSIGNED NOT NULL,
  `card_id` int(10) DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(20, 66, 'username', 'twitter', 'assets/img/icon/custom_icon/322775612_1123025228376934_9165924068334459188_n-63b2bb383fc60.jpg', 2, 'Official1110', 'https://twitter.com/maidul1', '1', '1', '2023-01-02 03:58:18', '2023-01-02 11:09:22'),
(22, 70, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Personal', 'maidulislah11110', '1', '1', '2023-01-02 03:58:18', '2023-01-02 11:09:22'),
(23, 72, 'email', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jexoqo@mailinator.com', '1', '1', '2023-01-04 14:19:37', '2023-01-04 14:19:37'),
(24, 73, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'user@gmail.com', '1', '1', '2023-01-10 10:08:29', '2023-01-10 10:08:29'),
(25, 73, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/maidulislam.tech', '2', '1', '2023-01-10 10:09:45', '2023-01-10 10:09:45'),
(26, 74, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'user@gmail.com', '1', '1', '2023-01-10 11:42:00', '2023-01-10 11:42:00'),
(27, 75, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'user@gmail.com', '1', '1', '2023-01-10 13:34:47', '2023-01-10 13:34:47'),
(28, 76, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'masud@gmail.com', '1', '1', '2023-01-11 11:28:01', '2023-01-11 11:28:01'),
(29, 76, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/masudrana.tapu134/', '2', '1', '2023-01-11 11:29:39', '2023-01-11 11:29:39'),
(30, 76, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01602307323', '3', '1', '2023-01-11 11:30:00', '2023-01-11 11:30:00'),
(31, 76, 'link', 'linkedin', 'assets/img/icon/linkedin.svg', 3, 'Linkedin', 'https://www.linkedin.com/https://www.linkedin.com/in/masud-rana-tapu-23a498233/', '4', '1', '2023-01-11 11:30:25', '2023-01-11 11:30:25'),
(32, 77, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'ziariyad018@gmail.com', '1', '1', '2023-01-11 15:42:05', '2023-01-11 15:42:05'),
(34, 79, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'ziariyad018@gmail.com', '1', '1', '2023-01-11 17:01:01', '2023-01-11 17:01:01'),
(35, 79, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01860141942', '2', '1', '2023-01-11 17:01:26', '2023-01-11 17:01:26'),
(36, 80, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jr@mtgpro.me', '1', '1', '2023-01-11 19:13:19', '2023-01-11 19:13:19'),
(37, 81, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'asasas@gmail.com', '1', '1', '2023-01-11 19:32:58', '2023-01-11 19:32:58'),
(38, 82, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'MichaelMKelly@jourrapide.com', '1', '1', '2023-01-11 19:39:57', '2023-01-11 19:39:57'),
(39, 83, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'JohnAKnox@dayrep.com', '1', '1', '2023-01-11 19:43:09', '2023-01-11 19:43:09'),
(40, 86, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '017107889656', '1', '1', '2023-01-11 13:55:40', '2023-01-11 13:55:40'),
(41, 86, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'AlfredoLGee@dayrep.com', '2', '1', '2023-01-11 13:55:40', '2023-01-11 13:55:40'),
(42, 87, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01710788656', '1', '1', '2023-01-11 14:07:31', '2023-01-11 14:07:31'),
(43, 87, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'WilliamJQuandt@teleworm.us', '2', '1', '2023-01-11 14:07:31', '2023-01-11 14:07:31'),
(46, 89, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01710788656', '1', '1', '2023-01-12 08:57:21', '2023-01-12 08:57:21'),
(47, 89, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'arifurrahman01710@gmail.com', '2', '1', '2023-01-12 08:57:21', '2023-01-12 08:57:21'),
(48, 90, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01710788656', '1', '1', '2023-01-12 09:12:49', '2023-01-12 09:12:49'),
(49, 90, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'tocedew261@tohup.com', '2', '1', '2023-01-12 09:12:49', '2023-01-12 09:12:49'),
(50, 91, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01710788656', '1', '1', '2023-01-12 09:23:42', '2023-01-12 09:23:42'),
(51, 91, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'tocedew26@tohup.com', '2', '1', '2023-01-12 09:23:42', '2023-01-12 09:23:42'),
(54, 92, 'username', 'Venmo.com', 'assets/img/icon/1673426968.svg', 50, 'Venmo', 'https://venmo.com/https://venmo.com/adad', '0', '1', '2023-01-12 11:19:11', '2023-01-12 11:19:11'),
(55, 92, NULL, 'safari', 'assets/uploads/avatar/-63bffea014be2.jpg', 33, 'Safari', 'Safari', '5', '1', '2023-01-12 12:35:44', '2023-01-12 12:35:44'),
(56, 92, 'text', 'address', 'assets/uploads/avatar/-63bfff3bb71bb.jpg', 10, 'Address', '231e23e32', '6', '1', '2023-01-12 12:38:19', '2023-01-12 12:38:19'),
(57, 92, NULL, 'safari', 'assets/uploads/avatar/-63c00217e57a8.jpg', 33, 'Safari', 'dsadadadasd', '7', '1', '2023-01-12 12:50:31', '2023-01-12 12:50:31'),
(58, 92, NULL, 'yelp', 'assets/img/icon/yelp.svg', 43, 'Yelp', 'sadad', '8', '1', '2023-01-12 12:50:54', '2023-01-12 12:50:54'),
(59, 92, 'mail', 'email', 'assets/img/icon/1673420575.svg', 46, 'Email', 'sadasdasd', '9', '1', '2023-01-12 12:51:25', '2023-01-12 12:51:25'),
(60, 92, 'mail', 'email', 'assets/img/icon/1673420575.svg', 46, 'Email', 'sadadad', '10', '1', '2023-01-12 12:52:11', '2023-01-12 12:52:11'),
(61, 92, NULL, 'safari', 'assets/img/icon/safari.svg', 33, 'Safari', 'zxzXZX', '11', '1', '2023-01-12 12:53:22', '2023-01-12 12:53:22'),
(62, 92, NULL, 'safari', 'assets/uploads/avatar/-63c002e321d5d.jpg', 33, 'Safari', 'dffsfsf', '12', '1', '2023-01-12 12:53:55', '2023-01-12 12:53:55'),
(63, 92, NULL, 'safari', 'assets/img/icon/safari.svg', 33, 'Safari', 'asasas', '1', '1', '2023-01-12 12:57:41', '2023-01-12 12:57:41'),
(64, 92, NULL, 'opensea_color', 'assets/uploads/avatar/-63c003d535f53.jpg', 29, 'Opensea Color', 'adadadadad', '2', '1', '2023-01-12 12:57:57', '2023-01-12 12:57:57'),
(65, 92, 'link', 'calendly', 'assets/img/icon/custom_icon/arobil_logo_70x70-63c005a5209ac.png', 14, 'Calendly', 'https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded', '3', '1', '2023-01-12 13:05:41', '2023-01-12 13:05:41'),
(66, 92, 'text', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'sasasas', '5', '1', '2023-01-12 13:06:02', '2023-01-12 13:06:02'),
(67, 92, 'link', 'clubhouse', 'assets/img/icon/custom_icon/pexels-andrea-piacquadio-774095-63c005d44f15a.jpg', 16, 'Clubhouse', 'https://stackoverflow.com/questions/4459379/preview-an-image-before-it-is-uploaded', '4', '1', '2023-01-12 13:06:28', '2023-01-12 13:06:28'),
(68, 92, NULL, 'etsy', 'assets/img/icon/custom_icon/cashapp-63c0078ae1835.png', 22, 'Etsy', '2e2e23e23e23e', '10', '1', '2023-01-12 13:13:46', '2023-01-12 13:13:46'),
(69, 93, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01710788656', '1', '1', '2023-01-14 05:43:47', '2023-01-14 05:43:47'),
(70, 93, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'gihamo3196@themesw.com', '2', '1', '2023-01-14 05:43:47', '2023-01-14 05:43:47'),
(71, 93, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/', '3', '1', '2023-01-14 05:57:30', '2023-01-14 05:57:30'),
(72, 94, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801710788656', '1', '2', '2023-01-14 07:18:50', '2023-01-15 09:24:49'),
(73, 94, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'tecij81550@tohup.com', '2', '2', '2023-01-14 07:18:50', '2023-01-15 09:24:49'),
(74, 94, 'username', 'Venmo.com', 'assets/img/icon/1673426968.svg', 50, 'Venmo', 'https://venmo.com/https://venmo.com/arifurrahmansw', '3', '2', '2023-01-14 08:44:08', '2023-01-15 09:24:49'),
(75, 94, 'link', 'linktree', 'assets/img/icon/linktree.svg', 26, 'Linktree', 'https://linktr.ee/', '4', '2', '2023-01-14 08:44:44', '2023-01-15 09:24:49'),
(76, 94, 'text', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213', '5', '2', '2023-01-14 08:45:21', '2023-01-15 09:24:49'),
(77, 94, 'username', 'twitter', 'assets/img/icon/twitter.svg', 2, 'Twitter', 'https://twitter.com/https://twitter.com/arifurrahmansw', '6', '2', '2023-01-14 08:45:37', '2023-01-15 09:24:49'),
(78, 94, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '01711103662', '7', '2', '2023-01-14 08:45:53', '2023-01-15 09:24:49'),
(79, 94, 'username', 'pinterest', 'assets/img/icon/pinterest.svg', 4, 'Pinterest', 'https://www.pinterest.com/https://www.pinterest.com/arifurrahmansw', '8', '2', '2023-01-14 08:46:29', '2023-01-15 09:24:49'),
(80, 94, 'link', 'linkedin', 'assets/img/icon/linkedin.svg', 3, 'Linkedin', 'https://www.linkedin.com/in/arifurrahmansw/', '9', '2', '2023-01-14 08:46:59', '2023-01-15 09:24:49'),
(81, 94, 'link', 'Website', 'assets/img/icon/1673437715.svg', 51, 'Website', 'https://arobil.com/', '10', '2', '2023-01-14 08:47:11', '2023-01-15 09:24:49'),
(82, 94, 'mobile', 'tiktok', 'assets/img/icon/tiktok.svg', 39, 'Tiktok', 'https://www.tiktok.com/@shamima_afrinomi', '10', '2', '2023-01-14 08:50:27', '2023-01-15 09:24:49'),
(83, 94, 'mail', 'email', 'assets/img/icon/1673420575.svg', 46, 'Email', 'arifurrahman91@live.com', '10', '2', '2023-01-14 08:50:46', '2023-01-15 09:24:49'),
(84, 94, 'link', 'youtube', 'assets/img/icon/youtube.svg', 44, 'Youtube', 'https://www.youtube.com/', '10', '2', '2023-01-14 08:51:08', '2023-01-15 09:24:49'),
(85, 94, 'link', 'youtube', 'assets/img/icon/youtube.svg', 44, 'Youtube', 'https://www.youtube.com/', '10', '2', '2023-01-14 08:51:09', '2023-01-15 09:24:49'),
(86, 95, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801710788656', '1', '1', '2023-01-15 11:21:02', '2023-01-15 11:21:02'),
(87, 95, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'abdullah@gmail.com', '2', '1', '2023-01-15 11:21:02', '2023-01-15 11:21:02'),
(88, 96, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'tocedew261@tohup.com', '1', '1', '2023-01-15 13:54:12', '2023-01-15 13:54:12');

--
-- Triggers `business_fields`
--
DELIMITER $$
CREATE TRIGGER `before_business_fields_insert` BEFORE INSERT ON `business_fields` FOR EACH ROW begin



declare var_type varchar(55) default null;
declare var_main_link varchar(255) default null;




select type, main_link into var_type, var_main_link from social_icon where id = new.icon_id;



set new.type = var_type;
set new.content = CONCAT_WS('' , var_main_link, new.content);


end
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `before_business_fields_update` BEFORE UPDATE ON `business_fields` FOR EACH ROW begin


declare var_type varchar(55) default null;
declare var_main_link varchar(255) default null;


select type, main_link into var_type, var_main_link from social_icon where id = new.icon_id;


set new.type = var_type;
set new.content = CONCAT_WS('' , var_main_link, new.content);


end
$$
DELIMITER ;

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
(26, 'tax_value', '0', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
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
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `profile_image` varchar(124) DEFAULT NULL,
  `connect_user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `connects`
--

INSERT INTO `connects` (`id`, `name`, `title`, `ccode`, `phone`, `email`, `company_name`, `message`, `user_id`, `card_id`, `created_at`, `updated_at`, `created_by`, `updated_by`, `is_active`, `profile_image`, `connect_user_id`) VALUES
(1, 'asd', 'sad', '+880', '3424', 'asdasd@sdf.com', 'asd', 'sdd', 2, 63763960, '2022-11-24 12:31:38', NULL, NULL, NULL, 1, NULL, NULL),
(2, 'Momin Khan', 'sad', '+880', '3424', 'asdasd@sdf.com', 'asd', 'sdd', 2, 63763960, '2022-11-24 12:32:10', NULL, NULL, NULL, 1, NULL, NULL),
(3, 'Mokaddes', 'Hello Dear', '+880', '1750899448', 'mr.mokaddes@gmail.com', 'Arobil', 'I want to conncet with you', 2, 63763960, '2022-11-24 12:48:21', NULL, NULL, NULL, 1, NULL, NULL),
(4, 'Mkds khan', 'Let\'s Connect', '+880', '1788189944', 'mkds@gmail.com', 'My coompany', 'No Message', 2, 63763960, '2022-11-24 13:06:22', NULL, NULL, NULL, 1, NULL, NULL),
(5, 'new', 'title', '+880', '1788189944', 'myemail@mail.com', 'Company', 'Message', 2, 63763960, '2022-11-24 13:08:26', NULL, NULL, NULL, 1, NULL, NULL),
(6, 'Momin Khan', 'Connect Me', '+880', '1788189944', 'mkds@gmail.com', 'Arobil Ltd', 'NoMessage', 2, 63763960, '2022-11-24 13:14:24', NULL, NULL, NULL, 1, NULL, NULL),
(7, 'Muddassir', 'New Title', '+880', '185465465', 'MAI@MAIL.COM', 'oASIS it', 'Mokaddes', 2, 63763960, '2022-11-24 13:21:49', NULL, NULL, NULL, 1, NULL, NULL),
(8, 'Md Maidul', 'Developer', '+880', '01918993427', 'akil@gmail.com', 'Arobil', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage', 2, 637, '2022-11-29 10:33:49', NULL, NULL, NULL, 1, NULL, NULL),
(9, 'Md', 'Developer', '+1', '01918993427', 'maidul@gmail.com', NULL, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage', 2, 637, '2022-11-29 10:37:31', NULL, NULL, NULL, 1, NULL, NULL),
(10, 'Maidul', 'Developer', '+880', '011681944126', 'midul@gmail.com', 'www.arobil.com', 'The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government', 2, 30, '2022-11-29 12:11:24', NULL, NULL, NULL, 1, NULL, NULL),
(11, 'Maidul', 'Developer', '+880', '011681944126', 'midul@gmail.com', 'www.arobil.com', 'The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government The prime minister said her government', 2, 30, '2022-11-29 12:13:31', NULL, NULL, NULL, 1, NULL, NULL),
(12, 'Md Jamil', 'About Fiverr', '+880', '01918993427', 'jamil@gmail.com', 'Arobil', 'I am from Dhaka, I want to talk about new business idea, please knock me when you feel free.\r\nThanks', 59, 54, '2022-12-10 13:45:16', NULL, NULL, NULL, 1, NULL, NULL),
(13, 'asasas', 'adad', NULL, '01710788656', 'asasas@gmail.com', 'sadasd', 'asd', 82, 92, '2023-01-12 14:10:25', NULL, NULL, NULL, 1, NULL, NULL),
(14, 'asasas', 'adad', NULL, '01710788656', 'asasas@gmail.com', 'sadasd', 'asd', 82, 92, '2023-01-12 14:11:20', NULL, NULL, NULL, 1, NULL, NULL),
(15, 'asas', 'asas', NULL, '01710788656', 'asasas@gmail.com', 'asas', 'asas', 82, 92, '2023-01-12 14:12:07', NULL, NULL, NULL, 1, NULL, NULL),
(16, 'asasa', 'asas', NULL, '01710788656', 'asasas@gmail.com', 'asas', 'asas', 82, 92, '2023-01-12 14:13:16', NULL, NULL, NULL, 1, NULL, NULL),
(17, 'asas', 'aasdasd', NULL, '01710788656', 'asas@gmail.com', 'asdasdasdasd', 'sadsad', 82, 92, '2023-01-12 14:17:43', NULL, NULL, NULL, 1, NULL, NULL),
(18, 'asas', 'aasdasd', NULL, '01710788656', 'asas@gmail.com', 'asdasdasdasd', 'sadsad', 82, 92, '2023-01-12 14:17:48', NULL, NULL, NULL, 1, NULL, NULL),
(19, 'dasdasda', 'asas', NULL, '017178656546', 'asdasdas@gmail.com', 'asas', 'asas', 82, 92, '2023-01-14 04:38:57', NULL, NULL, NULL, 1, NULL, NULL),
(20, 'dasdasda', 'asas', NULL, '017178656546', 'asdasdas@gmail.com', 'asas', 'asas', 82, 92, '2023-01-14 04:39:02', NULL, NULL, NULL, 1, NULL, NULL),
(21, 'adasd', 'sadsd', NULL, '01710788656', 'sdasd@gmail.com', 'asdasd', 'asdasd', 82, 92, '2023-01-14 04:44:10', NULL, NULL, NULL, 1, NULL, NULL),
(22, 'adasd', 'sadsd', NULL, '01710788656', 'sdasd@gmail.com', 'asdasd', 'asdasd', 82, 92, '2023-01-14 04:44:15', NULL, NULL, NULL, 1, NULL, NULL),
(23, 'asas', 'asas', NULL, '01710788656', 'asasas@gmail.com', 'asas', 'asas', 82, 92, '2023-01-14 04:46:02', NULL, NULL, NULL, 1, NULL, NULL),
(24, 'asdasd', 'saas', NULL, '01710788656', 'sdsadad@gmail.com', 'asas', 'as', 82, 92, '2023-01-14 04:48:51', NULL, NULL, NULL, 1, NULL, NULL),
(25, 'adasd', 'asas', NULL, '01710788656', 'sadasd@gmail.com', 'asas', 'asasas', 82, 92, '2023-01-14 04:50:12', '2023-01-15 19:23:28', NULL, 82, 1, NULL, NULL),
(26, 'Arifur Rahman', 'Web Developer', NULL, '01710788656', 'arifurrrahman@gmail.com', 'Arobil Limited', 'lorem', 83, 93, '2023-01-14 06:09:35', NULL, NULL, NULL, 1, NULL, NULL),
(27, 'Arifur Rahman', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', 'Aasad', 'dadasdasd', 84, 94, '2022-12-01 08:33:30', NULL, NULL, NULL, 1, 'https://lh3.googleusercontent.com/a/AEdFTp4IZvMNZJWrbKDErUWRt6O80Du3C87cPn-iMZ2rXuA=s96-c', 56),
(28, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:46:21', NULL, NULL, NULL, 1, NULL, NULL),
(29, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:46:54', NULL, NULL, NULL, 1, NULL, NULL),
(30, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:46:56', NULL, NULL, NULL, 1, NULL, NULL),
(31, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:46:58', NULL, NULL, NULL, 1, NULL, NULL),
(32, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:46:59', NULL, NULL, NULL, 1, NULL, NULL),
(33, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:46:59', NULL, NULL, NULL, 1, NULL, NULL),
(34, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:46:59', NULL, NULL, NULL, 1, NULL, NULL),
(35, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:00', NULL, NULL, NULL, 1, NULL, NULL),
(36, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:00', NULL, NULL, NULL, 1, NULL, NULL),
(37, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:01', NULL, NULL, NULL, 1, NULL, NULL),
(38, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:01', NULL, NULL, NULL, 1, NULL, NULL),
(39, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:01', NULL, NULL, NULL, 1, NULL, NULL),
(40, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:02', NULL, NULL, NULL, 1, NULL, NULL),
(41, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:02', NULL, NULL, NULL, 1, NULL, NULL),
(42, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:02', NULL, NULL, NULL, 1, NULL, NULL),
(43, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:02', NULL, NULL, NULL, 1, NULL, NULL),
(44, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:03', NULL, NULL, NULL, 1, NULL, NULL),
(45, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:20', NULL, NULL, NULL, 1, NULL, NULL),
(46, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:20', NULL, NULL, NULL, 1, NULL, NULL),
(47, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:21', NULL, NULL, NULL, 1, NULL, NULL),
(48, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:21', NULL, NULL, NULL, 1, NULL, NULL),
(49, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:22', NULL, NULL, NULL, 1, NULL, NULL),
(50, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:22', NULL, NULL, NULL, 1, NULL, NULL),
(51, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:22', NULL, NULL, NULL, 1, NULL, NULL),
(52, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:23', NULL, NULL, NULL, 1, NULL, NULL),
(53, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:23', NULL, NULL, NULL, 1, NULL, NULL),
(54, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:23', NULL, NULL, NULL, 1, NULL, NULL),
(55, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:24', NULL, NULL, NULL, 1, NULL, NULL),
(56, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:24', NULL, NULL, NULL, 1, NULL, NULL),
(57, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:24', NULL, NULL, NULL, 1, NULL, NULL),
(58, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:25', NULL, NULL, NULL, 1, NULL, NULL),
(59, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:25', NULL, NULL, NULL, 1, NULL, NULL),
(60, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:25', NULL, NULL, NULL, 1, NULL, NULL),
(61, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:25', NULL, NULL, NULL, 1, NULL, NULL),
(62, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:26', NULL, NULL, NULL, 1, NULL, NULL),
(63, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:26', NULL, NULL, NULL, 1, NULL, NULL),
(64, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:26', NULL, NULL, NULL, 1, NULL, NULL),
(65, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:27', NULL, NULL, NULL, 1, NULL, NULL),
(66, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:27', NULL, NULL, NULL, 1, NULL, NULL),
(67, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:27', NULL, NULL, NULL, 1, NULL, NULL),
(68, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:28', NULL, NULL, NULL, 1, NULL, NULL),
(69, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:28', NULL, NULL, NULL, 1, NULL, NULL),
(70, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:28', NULL, NULL, NULL, 1, NULL, NULL),
(71, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:28', NULL, NULL, NULL, 1, NULL, NULL),
(72, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:29', NULL, NULL, NULL, 1, NULL, NULL),
(73, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:29', NULL, NULL, NULL, 1, NULL, NULL),
(74, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:29', NULL, NULL, NULL, 1, NULL, NULL),
(75, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:30', NULL, NULL, NULL, 1, NULL, NULL),
(76, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:30', NULL, NULL, NULL, 1, NULL, NULL),
(77, 'Abdullah', 'Web Developer', NULL, '01710788656', 'email@email.com', NULL, NULL, 84, 94, '2023-01-14 09:47:30', NULL, NULL, NULL, 1, NULL, NULL),
(78, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:07', NULL, NULL, NULL, 1, NULL, NULL),
(79, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:09', NULL, NULL, NULL, 1, NULL, NULL),
(80, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:11', NULL, NULL, NULL, 1, NULL, NULL),
(81, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:11', NULL, NULL, NULL, 1, NULL, NULL),
(82, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:11', NULL, NULL, NULL, 1, NULL, NULL),
(83, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:11', NULL, NULL, NULL, 1, NULL, NULL),
(84, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:11', NULL, NULL, NULL, 1, NULL, NULL),
(85, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:11', NULL, NULL, NULL, 1, NULL, NULL),
(86, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:12', NULL, NULL, NULL, 1, NULL, NULL),
(87, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:12', NULL, NULL, NULL, 1, NULL, NULL),
(88, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:13', NULL, NULL, NULL, 1, NULL, NULL),
(89, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:13', NULL, NULL, NULL, 1, NULL, NULL),
(90, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:13', NULL, NULL, NULL, 1, NULL, NULL),
(91, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:14', NULL, NULL, NULL, 1, NULL, NULL),
(92, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:14', NULL, NULL, NULL, 1, NULL, NULL),
(93, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:14', NULL, NULL, NULL, 1, NULL, NULL),
(94, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:14', NULL, NULL, NULL, 1, NULL, NULL),
(95, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:15', NULL, NULL, NULL, 1, NULL, NULL),
(96, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:15', NULL, NULL, NULL, 1, NULL, NULL),
(97, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:15', NULL, NULL, NULL, 1, NULL, NULL),
(98, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:16', NULL, NULL, NULL, 1, NULL, NULL),
(99, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:16', NULL, NULL, NULL, 1, NULL, NULL),
(100, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:16', NULL, NULL, NULL, 1, NULL, NULL),
(101, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:17', NULL, NULL, NULL, 1, NULL, NULL),
(102, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:17', NULL, NULL, NULL, 1, NULL, NULL),
(103, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:17', NULL, NULL, NULL, 1, NULL, NULL),
(104, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:18', NULL, NULL, NULL, 1, NULL, NULL),
(105, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:18', NULL, NULL, NULL, 1, NULL, NULL),
(106, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:18', NULL, NULL, NULL, 1, NULL, NULL),
(107, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:18', NULL, NULL, NULL, 1, NULL, NULL),
(108, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:19', NULL, NULL, NULL, 1, NULL, NULL),
(109, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:19', NULL, NULL, NULL, 1, NULL, NULL),
(110, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:19', NULL, NULL, NULL, 1, NULL, NULL),
(111, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:19', NULL, NULL, NULL, 1, NULL, NULL),
(112, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:20', NULL, NULL, NULL, 1, NULL, NULL),
(113, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:20', NULL, NULL, NULL, 1, NULL, NULL),
(114, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:20', NULL, NULL, NULL, 1, NULL, NULL),
(115, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:21', NULL, NULL, NULL, 1, NULL, NULL),
(116, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:21', NULL, NULL, NULL, 1, NULL, NULL),
(117, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:21', NULL, NULL, NULL, 1, NULL, NULL),
(118, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:21', NULL, NULL, NULL, 1, NULL, NULL),
(119, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:22', NULL, NULL, NULL, 1, NULL, NULL),
(120, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:22', NULL, NULL, NULL, 1, NULL, NULL),
(121, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:23', NULL, NULL, NULL, 1, NULL, NULL),
(122, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:48:23', NULL, NULL, NULL, 1, NULL, NULL),
(123, 'Abdullah', 'Web Developer', NULL, '01710788656', 'arifmahmud64@gmail.com', NULL, NULL, 84, 94, '2023-01-14 09:53:14', NULL, NULL, NULL, 1, NULL, NULL);

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
(4, 'Privacy Policy', 'privacy-policy', '<div><p style=\"text-align: justify;\"><span style=\"font-size: 14px;\">﻿</span>﻿﻿﻿<span style=\"font-size: 0.875rem; letter-spacing: 0px;\">﻿</span><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">﻿﻿Protecting your private information is our priority. This Statement of Privacy applies to MTGPro.me, and Non-QM Doc LLC and governs data collection and usage. For the purposes of this Privacy Policy, unless otherwise noted, all references to Non-QM Doc LLC include www.MTGPro.me and&nbsp;<span style=\"font-weight: 600;\">MTGPro.me.</span>&nbsp;The MTGPro.me application is a Digital Marketing and Ecommerce application. By using the&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;application, you consent to the data practices described in this statement.</span><br></p><div><span style=\"font-size: 0.875rem; letter-spacing: 0px;\"><span style=\"font-weight: 600;\">Collection of your Personal Information</span></span><br></div><div style=\"text-align: justify;\">In order to better provide you with products and services offered, MTGPro.me may collect personally identifiable information, such as your:&nbsp;&nbsp;</div><div style=\"text-align: justify;\"><br></div><ul><li>First and Last Name</li><li>Mailing Address</li><li>E-mail Address</li><li>Phone Number</li><li>Employer</li><li>Job Title</li><li>Social Media Profiles, Websites, Etc.&nbsp;</li></ul><div style=\"text-align: justify;\">If you purchase&nbsp;<span style=\"font-weight: 600;\">MTGPro.me\'s</span>&nbsp;products and services, we collect billing and credit card information. This information is used to complete the purchase transaction.</div><div><br></div><div style=\"text-align: justify;\">We do not collect any personal information about you unless you voluntarily provide it to us. However, you may be required to provide certain personal information to us when you elect to use certain products or services. These may include: (a) registering for an account; (b) entering a sweepstakes or contest sponsored by us or one of our partners; (c) signing up for special offers from selected third parties; (d) sending us an email message; (e) submitting your credit card or other payment information when ordering and purchasing products and services. To wit, we will use your information for, but not limited to, communicating with you in relation to services and/or products you have requested from us. We also may gather additional personal or non-personal information in the future</div><div><br></div><div><div><span style=\"font-weight: 600;\">Use of your Personal Information</span></div><div><br></div><div><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;collects and uses your personal information to operate and deliver the services you have requested.</div><div><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;may also use your personally identifiable information to inform you of other products or services available from&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;and its affiliates.</div><div><br></div><div><span style=\"font-weight: 600;\">Sharing Information with Third Parties</span></div><div><br></div><div><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;does not sell, rent or lease its customer lists to third parties.</div><div><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">MTGPro.me&nbsp;</span>may, from time to time, contact you on behalf of external business partners about a particular offering that may be of interest to you. In those cases, your unique personally identifiable information&nbsp;<span style=\"font-weight: 600;\">(e-mail, name, address, telephone number)</span>&nbsp;is transferred to the third party.&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;may share data with trusted partners to help perform statistical analysis, send you email or postal mail, provide customer support, or arrange for deliveries. All such third parties are prohibited from using your personal information except to provide these services to&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>, and they are required to maintain the confidentiality of your information.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;may disclose your personal information, without notice, if required to do so by law or in the good faith belief that such action is necessary to: (a) conform to the edicts of the law or comply with legal process served on&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;or the site; (b) protect and defend the rights or property of&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>; and/or (c) act under exigent circumstances to protect the personal safety of users of&nbsp;<span style=\"font-weight: 600;\">MTGPro.me,</span>&nbsp;or the public.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">Opt-Out of Disclosure of Personal Information to Third Parties</span></div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">In connection with any personal information we may disclose to a third party for a business purpose, you have the right to know:&nbsp;</div><ul><li style=\"text-align: justify;\"><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">The categories of personal information that we disclosed about you for a business purpose.&nbsp;</span><br></li></ul><div style=\"text-align: justify;\">You have the right under the California Consumer Privacy Act of 2018&nbsp;<span style=\"font-weight: 600;\">(CCPA)</span>&nbsp;and certain other privacy and data protection laws, as applicable, to opt-out of the disclosure of your personal information. If you exercise your right to opt-out of the disclosure of your personal information, we will refrain from disclosing your personal information, unless you subsequently provide express authorization for the disclosure of your personal information. To opt-out of the disclosure of your personal information, visit this Web page _________________.&nbsp;</div><div><br></div><div><div><span style=\"font-weight: 600;\">Right to Deletion</span></div><div><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">Subject to certain exceptions set out below, on receipt of a verifiable request from you, we will:</span></div><ul><li><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">Delete your personal information from our records; and</span></li><li>Direct any service providers to delete your personal information from their records.&nbsp;</li></ul><div>Please note that we may not be able to comply with requests to delete your personal information if it is necessary to:</div><div><br></div><ul><li style=\"text-align: justify;\">Complete the transaction for which the personal information was collected, fulfill the terms of a written warranty or product recall conducted in accordance with federal law, provide a good or service requested by you, or reasonably anticipated within the context of our ongoing business relationship with you, or otherwise perform a contract between you and us;</li><li style=\"text-align: justify;\">Detect security incidents, protect against malicious, deceptive, fraudulent, or illegal activity; or prosecute those responsible for that activity;</li><li style=\"text-align: justify;\">Debug to identify and repair errors that impair existing intended functionality;</li><li style=\"text-align: justify;\">Exercise free speech, ensure the right of another consumer to exercise his or her right of free speech, or exercise another right provided for by law;</li><li style=\"text-align: justify;\">Comply with the California Electronic Communications Privacy Act;</li><li style=\"text-align: justify;\">Engage in public or peer-reviewed scientific, historical, or statistical research in the public interest that adheres to all other applicable ethics and privacy laws, when our deletion of the information is likely to render impossible or seriously impair the achievement of such research, provided we have obtained your informed consent; • Enable solely internal uses that are reasonably aligned with your expectations based on your relationship with us;</li><li style=\"text-align: justify;\">Comply with an existing legal obligation; or</li><li style=\"text-align: justify;\">Otherwise use your personal information, internally, in a lawful manner that is compatible with the context in which you provided the information.</li></ul><div><span style=\"font-weight: 600;\">Children Under</span></div><div><br></div><div style=\"text-align: justify;\">Thirteen&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;does not knowingly collect personally identifiable information from children under the age of thirteen. If you are under the age of thirteen, you must ask your parent or guardian for permission to use this application.</div><div><br></div><div><div><span style=\"font-weight: 600;\">Disconnecting your MTGPro.me Account from Third Party Websites</span></div><div><br></div><div style=\"text-align: justify;\">You will be able to connect your&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;account to third party accounts. BY CONNECTING YOUR&nbsp;<span style=\"font-weight: 600;\">MTGPRO.ME</span>&nbsp;ACCOUNT TO YOUR THIRD PARTY ACCOUNT, YOU ACKNOWLEDGE AND AGREE THAT YOU ARE CONSENTING TO THE CONTINUOUS RELEASE OF INFORMATION ABOUT YOU TO OTHERS (IN ACCORDANCE WITH YOUR PRIVACY SETTINGS ON THOSE THIRD PARTY SITES). IF YOU DO NOT WANT INFORMATION ABOUT YOU, INCLUDING PERSONALLY IDENTIFYING INFORMATION, TO BE SHARED IN THIS MANNER, DO NOT USE THIS FEATURE. You may disconnect your account from a third party account at any time. by removing the link to the third party site from their account&nbsp;&nbsp;</div><div><br></div><div><span style=\"font-weight: 600;\">Opt-Out &amp; Unsubscribe from Third Party Communications</span></div><div><br></div><div style=\"text-align: justify;\">We respect your privacy and give you an opportunity to opt-out of receiving announcements of certain information. Users may opt-out of receiving any or all communications from third-party partners of&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;by contacting us here:</div><div><br></div><div>Web page: _________________</div><div>Email:&nbsp;<span style=\"font-weight: 600;\">info@mtgpro.me</span></div><div>Phone: ____________________</div><div><br></div><div><span style=\"font-weight: 600;\">E-mail Communications</span></div><div><span style=\"text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">From time to time,</span><span style=\"font-weight: 600; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">&nbsp;MTGPro.me</span><span style=\"text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">&nbsp;may contact you via email for the purpose of providing announcements, promotional offers, alerts, confirmations, surveys, and/or other general communication. In order to improve our Services, we may receive a notification when you open an email from MTGPro.me or click on a link therein.&nbsp;</span><br></div><div><br></div><div><span style=\"font-weight: 600;\">External Data Storage Sites</span></div><div><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">We may store your data on servers provided by third party hosting vendors with whom we have contracted.&nbsp;</span><br></div><div><br></div><div><span style=\"font-weight: 600;\">Changes to this Statement</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 0.875rem; letter-spacing: 0px;\"><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;reserves the right to change this Privacy Policy from time to time. We will notify you about significant changes in the way we treat personal information by sending a notice to the primary email address specified in your account, by placing a prominent notice on our application, and/or by updating any privacy information. Your continued use of the application and/or Services available after such modifications will constitute your: (a) acknowledgment of the modified Privacy Policy; and (b) agreement to abide and be bound by that Policy.</span><br></div><div><br></div><div><span style=\"font-weight: 600;\">Contact Information</span></div><div><br></div><div><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;welcomes your questions or comments regarding this Statement of Privacy. If you believe that&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;has not adhered to this Statement, please contact&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;at:</div><div><br></div><div><div><span style=\"font-weight: 600;\">Mtgo Pro</span></div><div>Non-QM Doc LLC</div><div>1603 Capitol Ave Suite 310</div><div>Cheyenne, Wyoming 82001</div><div><br></div><div>Email Address:</div><div><span style=\"font-weight: 600;\">info@MTGPro.me</span></div><div><br></div><div>Telephone number:</div><div>_________________</div><div><br></div><div>Effective as of January 10, 2023</div></div></div></div></div></div>', 1, 1, NULL, NULL, NULL, 1, '2022-11-26 10:03:52', '2023-01-11 12:41:08', NULL, 1, NULL),
(5, 'Terms and Conditions', 'terms-and-conditions', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap; letter-spacing: 0px;\">Terms and Conditions</span><br></p>', 1, 2, NULL, NULL, NULL, 1, '2022-11-26 10:17:15', '2022-12-06 23:17:32', 'footer', 1, 'col-3'),
(6, 'Data deletion instructions', 'data-deletion-instructions', '<h1 class=\"article-title text-capitalize py-md-2\"><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>How Can I Deactivate Or Delete My Account?</h1><div class=\"content\" style=\"\"><p class=\"card-text\" style=\"margin-bottom: 1rem; font-size: 15px; line-height: 30px;\"></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">We\'re sorry to hear you want to remove or deactivate your letsconnect.site account. You have the option of temporarily deactivating your account and then reactivating it later, or permanently deleting your account. Please keep in mind that account termination is permanent and cannot be reversed. You must be signed in to fill out the account deactivation/deletion request form in order to deactivate or delete your account. Please see our privacy policy for more information.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\"><span style=\"font-weight: bolder;\">When you have successfully deactivated your account:</span></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">1) You will not be able to log in to your letsconnect.site account nor use the same credentials (email or phone number) to create a new account<br></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">3) Your profile will be hidden. Some information such as your product reviews may still be visible to others</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">4) Your account can still be reactivated. You will need to contact us on Live Chat if you want to reactivate your account</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">Note: If you wish to discontinue using letsconnect.site services, you may simply log out of your account and unsubscribe from our newsletters. You may continue using our services at any time by logging back into letsconnect.site .<br></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\"><span style=\"font-weight: bolder;\">When you have successfully deleted your account:<br></span></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">1) You will not be able to log in to your letsconnect.site account nor use the same credentials (email or phone number) to create a new account</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">2) You will not be able to reactivate or recover any data, including your reviews and past purchase history</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">3) You will need to set up a new account using a different email and/or mobile number if you want to use letsconnect.site again.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">If you have trouble logging into your account or suspect that someone has logged into your account, please contact us through email (info@letsconnect.site).</p></div>', 1, 0, 'sddrrr', 'sdadxxx', NULL, 1, '2022-11-26 10:18:13', '2022-12-06 23:16:48', 'footer', 1, 'col-3'),
(7, 'About', 'about', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><strong style=\"font-size: 0.875rem; letter-spacing: 0px; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-size: 0.875rem; letter-spacing: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 1, 3, NULL, NULL, NULL, 1, '2022-12-06 22:51:51', '2022-12-06 23:16:28', 'footer', 1, 'col-2'),
(8, 'Careers', 'careers', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 4, NULL, NULL, NULL, 1, '2022-12-06 22:53:09', '2022-12-06 23:16:19', 'footer', 1, 'col-2'),
(9, 'Contact us', 'contact-us', NULL, 1, 5, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2022-12-06 23:17:57', 'footer', 1, 'col-2'),
(10, 'Security', 'security', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.<br></p>', 1, 6, NULL, NULL, NULL, 1, '2022-12-06 22:54:17', '2022-12-06 23:18:10', 'footer', 1, 'col-2'),
(11, 'Tutorials', 'tutorials', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br></p>', 1, 5, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2022-12-06 23:17:57', 'footer', 1, 'col-2'),
(12, 'Help', 'help', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br></p>', 1, 5, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2022-12-06 23:17:57', 'footer', 1, 'col-2');

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
(2, '/assets/uploads/payment-method/IMG-1617618450.png', 'Stripe', 'Stripe', '10', '11', 'enabled', '1', '2022-03-12 14:54:38', '2022-08-14 17:47:56');

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
  `order_id` int(11) NOT NULL DEFAULT 1,
  `is_video` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_name`, `section_name`, `section_title`, `section_content`, `created_at`, `updated_at`, `status`, `is_photo`, `order_id`, `is_video`) VALUES
(1, 'home', 'banner', 'banner_title', 'Modern Contact Solutions For Today\'s Mortgage Professional<span class=\"d-block\">Contacts Solutions</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1, 0),
(2, 'home', 'banner', 'banner_description', 'Your shareable, professional business card in your pocket and available anytime, anywhere, with unlimited connections.', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1, 0),
(3, 'home', 'banner', 'banner_button', 'Learn more', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1, 0),
(4, 'home', 'banner', 'banner_photo', 'assets/uploads/banner/1673416154.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 1, 0),
(5, 'home', 'banner', 'banner_video', '/assets/uploads/video/typing-63c38d34e82a5.mp4', '2023-01-15 04:47:59', '2023-01-15 04:47:59', 1, 0, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('tocedew261@tohup.com', '$2y$10$qrmfwraH2yPBUWlyu52fd.TG7l4.YTd2rIgWbMtNhf43zxT0iGxtu', '2023-01-15 10:08:00');

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
  `is_qr_code` int(1) NOT NULL DEFAULT 1,
  `is_yearly_plan` int(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_type`, `plan_id`, `plan_name`, `plan_description`, `is_free`, `plan_price_monthly`, `plan_price_yearly`, `plan_price`, `discount_percentage`, `validity`, `no_of_vcards`, `no_of_services`, `no_of_galleries`, `no_of_features`, `no_of_payments`, `personalized_link`, `hide_branding`, `free_setup`, `free_support`, `recommended`, `is_watermark_enabled`, `features`, `plans_type`, `name`, `slug`, `stripe_plan_id`, `stripe_data`, `stripe_data_yearly`, `stripe_plan_id_yearly`, `paypal_plan_id`, `paypal_plan_data`, `cost`, `status`, `shareable`, `created_at`, `updated_at`, `is_vcard`, `is_whatsapp_store`, `is_email_signature`, `is_qr_code`, `is_yearly_plan`) VALUES
(1, 1, '62f8bab5e6912', 'Free', 'Free', 1, 0, 0, '0', 0, '366', '5', 999, 999, 999, 999, '1', '0', '0', '0', '1', '0', '[\"Up to 5 Shareable Digital Cards\",\"Two-Way Contact Sharing\",\"Unlimited Connections & Card Shares\",\"Free Ongoing Updates & Feature Add\"]', 1, 'Beta Tester', 'beta-tester', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1', 1, '2022-08-14 09:04:53', '2023-01-09 11:13:33', 1, 0, 0, 0, 1),
(2, 2, '62f8d81cbf71c', 'Gold', 'Gold', 0, 15, 46, '999', 10, '31', '20', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"Everything in Solopreneur Account +\",\"Up to 20 Shareable Digital Cards\",\"2 Custom Card Setups & Personalizations\",\"Marketing Mastery 101 Guide\",\"BONUS: MTG Branding Guide\"]', 1, 'Professional', 'professional', 'plan_N9gev6Ge1jQwtM', '{\"id\":\"plan_N9gev6Ge1jQwtM\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1673516425,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_N9gezjO0wmP5L3\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_N9geY1vknhCTBU\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":4600,\"amou', 'plan_N9geY1vknhCTBU', NULL, NULL, NULL, '1', 1, '2022-08-14 11:10:20', '2023-01-12 09:40:29', 1, 1, 1, 1, 1),
(3, 2, '62f8d935b6119', 'Corporate', 'Corporate', 0, 30, 149, '1999', 12, '9999', '100', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"Everything in Solo & Small Business Accounts +\",\"Up to 100 Shareable Digital Cards\",\"10 Professional Card Setups & Personalizations\",\"Team-Level Tracking (new feature development; Coming Soon!)\"]', 1, 'Legacy Client', 'legacy-client', 'plan_N9ge1ZMDkrpBgb', '{\"id\":\"plan_N9ge1ZMDkrpBgb\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":3000,\"amount_decimal\":\"3000\",\"billing_scheme\":\"per_unit\",\"created\":1673516430,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_N9geirfUiuXHCC\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_N9geRlEEErdrgt\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":14900,\"amo', 'plan_N9geRlEEErdrgt', NULL, NULL, NULL, '1', 1, '2022-08-14 11:15:01', '2023-01-12 09:40:34', 1, 0, 0, 0, 1);

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
(4, 2, 0, 'Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!', 1, '2023-01-11 06:14:11', 2, 'Jone Doe', 'Manager at Arobil Ltd'),
(6, 82, 0, 'rty sfsdfdsfsdfsfsdfsfsfsfsfsfsfsfsf', 0, '2023-01-15 13:43:08', 82, 'tocedewsdfsdf', 'tyrysdfsdfsfsf');

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
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pinterest_url` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_motto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `google_key`, `google_analytics_id`, `site_name`, `site_logo`, `favicon`, `seo_meta_description`, `seo_keywords`, `seo_image`, `tawk_chat_bot_key`, `name`, `address`, `driver`, `host`, `port`, `encryption`, `username`, `password`, `status`, `created_at`, `updated_at`, `application_type`, `app_mode`, `facebook_client_id`, `facebook_client_secret`, `facebook_callback_url`, `google_client_id`, `google_client_secret`, `google_callback_url`, `copyright_text`, `office_address`, `facebook_url`, `youtube_url`, `twitter_url`, `linkedin_url`, `telegram_url`, `whatsapp_number`, `ios_app_url`, `android_app_url`, `email`, `phone_no`, `support_email`, `instagram_url`, `site_title`, `pinterest_url`, `main_motto`) VALUES
(1, NULL, 'G-12SD09FF03', 'Mtgpro.me', '/assets/uploads/logo/mtgpro-63b019bb82b60.png', '/assets/uploads/icon/mtg_gmail-dp-63b019bb822d0.jpg', 'Welcome to Mtgpro. It’s more than a digital business card, it’s a networking sales generator.', 'keyword 1, keyword 2', '/assets/uploads/logo/mtg_gmail-dp-63b019bb82e31.jpg', NULL, 'Mtgpro', 'noreply@mtgpro.me', 'smtp', 'smtp.mailtrap.io', 2525, 'tls', 'maidul@gmail.com', '123456', '1', '2022-03-12 14:54:38', '2022-12-31 05:15:07', NULL, NULL, '495920045706830', 'dcbac5562d862384bce2918bf025eeaf', 'https://letsconnectv2.webdevs4u.com/auth/facebook/callback', '78445555544', '778844444555', 'https://letsconnectv2.webdevs4u.com/auth/google/callback', 'Copyright © LetsConnect. All rights reserved.', 'USA', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/Mr_LetsConnect', 'https://www.linkedin.com/feed/', 'https://telegram.org/', '+8801515262626', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'support@mtgpro.me', '+1516297-3389', 'support@mtgpro.me', 'https://www.linkedin.com/feed/', 'Mtgpro.me', NULL, 'Lorem ipsum dolor sit, amet consectetur adipisicing, elit. Cum aliquid, nam sint voluptates et aliquam');

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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` enum('mobile','number','text','username','link','mail') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_link` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'if type is username',
  `is_paid` int(1) NOT NULL DEFAULT 0 COMMENT '0=free,1=paid',
  `icon_color` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icon`
--

INSERT INTO `social_icon` (`id`, `icon_group`, `icon_name`, `icon_image`, `icon_fa`, `icon_title`, `example_text`, `status`, `order_id`, `created_at`, `updated_at`, `type`, `main_link`, `is_paid`, `icon_color`) VALUES
(1, 'Recommended', 'facebook', 'assets/img/icon/facebook.svg', NULL, 'Facebook', 'ex:https://www.facebook.com/johndoe', 1, 100, '2023-01-11 17:16:18', '2022-11-16 01:26:22', 'link', NULL, 0, NULL),
(2, 'Social Media', 'twitter', 'assets/img/icon/twitter.svg', NULL, 'Twitter', 'johndoe', 1, 95, '2023-01-11 17:13:52', '2022-11-16 02:18:41', 'username', 'https://twitter.com/', 0, NULL),
(3, 'Social Media', 'linkedin', 'assets/img/icon/linkedin.svg', NULL, 'Linkedin', 'ex:https://www.linkedin.com/johndoe', 1, 90, '2023-01-11 17:16:21', '2022-11-16 02:18:41', 'link', NULL, 0, NULL),
(4, 'Social Media', 'pinterest', 'assets/img/icon/pinterest.svg', NULL, 'Pinterest', 'johndoe', 1, 85, '2023-01-11 17:13:49', '2022-11-16 02:18:41', 'username', 'https://www.pinterest.com/', 0, NULL),
(5, 'Contact', 'email', 'assets/img/icon/email.svg', NULL, 'Email', 'ex:example@gmail.com', 1, 80, '2023-01-11 12:52:49', '2022-11-16 02:18:41', 'mail', NULL, 0, NULL),
(6, 'Social Media', 'whatsapp', 'assets/img/icon/whatsapp.svg', NULL, 'Whatsapp', 'ex:+8801681944126', 1, 75, '2023-01-11 17:25:59', '2022-11-16 01:26:22', 'number', NULL, 0, NULL),
(7, 'Recommended', 'instagram', 'assets/img/icon/instagram.svg', NULL, 'Instagram', 'ex:https://www.instagram.com/johndoe', 1, 70, '2023-01-11 17:20:05', '2022-11-16 01:26:22', 'link', NULL, 0, NULL),
(8, 'More', 'Text Section', 'assets/img/icon/textSection.svg', NULL, 'Text Section', 'Text Section', 1, 65, '2023-01-11 12:28:23', '2022-11-16 01:26:22', 'text', NULL, 0, NULL),
(9, 'Recommended', 'phone', 'assets/img/icon/call.svg', '', 'Phone', 'ex:+8801681944126', 1, 60, '2022-11-16 01:26:22', '2022-11-16 01:26:22', 'mobile', NULL, 0, NULL),
(10, 'Recommended', 'address', 'assets/img/icon/address.svg', NULL, 'Address', 'ex:Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213', 1, 55, '2023-01-11 17:20:22', '2022-11-16 02:18:41', 'text', NULL, 0, NULL),
(11, 'Recommended', 'app_link', 'assets/img/icon/app_link.svg', NULL, 'App Link', 'ex:https://www.applink.com/johndoe', 1, 1, '2023-01-11 17:17:37', '2022-11-16 02:18:41', 'link', NULL, 1, NULL),
(12, 'Music Media', 'apple', 'assets/img/icon/apple.svg', NULL, 'Apple', 'https://www.apple.com/apple-music/', 1, 2, '2023-01-11 17:26:21', '2022-11-16 02:18:41', 'link', NULL, 0, NULL),
(13, 'Recommended', 'booksy', 'assets/img/icon/booksy.svg', NULL, 'Booksy', 'ex:https://www.booksy.com/johndoe', 1, 3, '2023-01-11 17:17:29', '2023-01-02 04:20:09', 'link', NULL, 0, NULL),
(14, 'Recommended', 'calendly', 'assets/img/icon/calendly.svg', NULL, 'Calendly', 'ex:https://www.calendly.com/johndoe', 1, 4, '2023-01-11 17:17:27', '2023-01-02 04:20:09', 'link', NULL, 0, NULL),
(15, 'Recommended', 'cashapp', 'assets/img/icon/cashapp.svg', NULL, 'Cash App', 'johndoe', 1, 5, '2023-01-11 17:14:34', '2023-01-02 04:20:09', 'username', 'https://cash.app/', 1, NULL),
(16, 'Recommended', 'clubhouse', 'assets/img/icon/clubhouse.svg', NULL, 'Clubhouse', 'ex:https://www.clubhouse.com/johndoe', 1, 6, '2023-01-11 17:17:01', '2023-01-02 04:25:36', 'link', NULL, 0, NULL),
(17, 'Recommended', 'Contact card', 'assets/img/icon/contactcard.svg', NULL, 'Contact Card', 'ex:https://www.contactcard.com/maidul', 1, 7, '2023-01-11 13:15:12', '2023-01-02 04:25:36', 'mobile', NULL, 0, NULL),
(18, 'Recommended', 'customlink', 'assets/img/icon/customlink.svg', NULL, 'Custom Link', 'ex:https://www.customlink.com/johndoe', 1, 8, '2023-01-11 17:23:17', '2023-01-02 04:25:36', 'link', NULL, 0, NULL),
(19, 'Recommended', 'discord', 'assets/img/icon/discord.svg', NULL, 'Discord', 'ex:https://www.discord.com/johndoe', 1, 9, '2023-01-11 17:16:55', '2023-01-02 04:25:36', 'link', NULL, 0, NULL),
(20, 'Recommended', 'dropdown', 'assets/img/icon/dropDown.svg', '', 'DropDown', 'ex:https://www.dropdown.com/maidul', 1, 10, '2023-01-02 04:25:36', '2023-01-02 04:25:36', NULL, NULL, 0, NULL),
(21, 'Recommended', 'embeddedvideo', 'assets/img/icon/embeddedvideo.svg', '', 'Embedde Video', 'ex:https://www.embeddedvideo.com/maidul', 1, 11, '2023-01-02 04:34:37', '2023-01-02 04:34:37', NULL, NULL, 0, NULL),
(22, 'Recommended', 'etsy', 'assets/img/icon/etsy.svg', '', 'Etsy', 'ex:https://www.etsy.com/maidul', 1, 12, '2023-01-02 04:34:37', '2023-01-02 04:34:37', NULL, NULL, 0, NULL),
(23, 'Recommended', 'facetime', 'assets/img/icon/facetime.svg', NULL, 'Face Time', 'ex:https://www.facetime.com/johndoe', 1, 13, '2023-01-11 18:12:25', '2023-01-02 04:34:37', 'mobile', NULL, 0, NULL),
(24, 'Recommended', 'file', 'assets/img/icon/file.svg', '', 'File', NULL, 1, 14, '2023-01-02 04:34:37', '2023-01-02 04:34:37', NULL, NULL, 1, NULL),
(25, 'More', 'hoobe', 'assets/img/icon/hoobe.svg', NULL, 'Hoobe', 'ex:hoo.be link', 1, 15, '2023-01-11 17:50:02', '2023-01-02 04:34:37', 'link', NULL, 0, NULL),
(26, 'Recommended', 'linktree', 'assets/img/icon/linktree.svg', NULL, 'Linktree', 'ex:https://linktr.ee/johndoe', 1, 16, '2023-01-11 17:22:40', '2023-01-02 04:34:37', 'link', NULL, 0, NULL),
(27, 'Recommended', 'mediakits', 'assets/img/icon/mediakits.svg', NULL, 'Mediakits', 'ex:https://www.mediakits.com/johndoe', 1, 29, '2023-01-11 17:16:50', '2023-01-02 04:34:37', 'link', NULL, 0, NULL),
(28, 'Recommended', 'number', 'assets/img/icon/number.svg', NULL, 'Number', 'ex:+8801681944126', 1, 28, '2023-01-11 17:19:21', '2023-01-02 04:41:18', 'mobile', NULL, 0, NULL),
(29, 'Recommended', 'opensea_color', 'assets/img/icon/opensea_color.svg', '', 'Opensea Color', NULL, 1, 17, '2023-01-02 04:41:18', '2023-01-02 04:41:18', NULL, NULL, 0, NULL),
(30, 'Payment', 'paypal', 'assets/img/icon/paypal.svg', NULL, 'Paypal', 'ex:https://www.paypal.me/johndoe', 1, 18, '2023-01-11 17:16:53', '2023-01-02 04:41:18', 'link', NULL, 0, NULL),
(31, 'Recommended', 'podcasts', 'assets/img/icon/podcasts.svg', NULL, 'Podcasts', 'ex:', 1, 19, '2023-01-11 17:32:24', '2023-01-02 04:41:18', 'mobile', NULL, 0, NULL),
(32, 'Recommended', 'Reviews', 'assets/img/icon/reviews.svg', NULL, 'Reviews', 'ex: google review link', 1, 20, '2023-01-11 17:31:43', '2023-01-02 04:41:18', 'link', NULL, 1, NULL),
(33, 'Recommended', 'safari', 'assets/img/icon/safari.svg', '', 'Safari', 'ex:https://www.safari.com', 1, 21, '2023-01-02 04:41:18', '2023-01-02 04:41:18', NULL, NULL, 0, NULL),
(34, 'Recommended', 'snapchat', 'assets/img/icon/snapchat.svg', NULL, 'Snapchat', 'johndoe', 1, 22, '2023-01-11 17:14:27', '2023-01-02 04:41:18', 'username', 'https://www.snapchat.com/', 0, NULL),
(35, 'Recommended', 'soundcloud', 'assets/img/icon/soundcloud.svg', NULL, 'Soundcloud', 'johndoe', 1, 23, '2023-01-11 17:14:23', '2023-01-02 04:41:18', 'username', 'https://soundcloud.com/', 0, NULL),
(36, 'Recommended', 'spotify', 'assets/img/icon/spotify.svg', '', 'Spotify', 'ex:https://www.spotify.com/maidul', 1, 24, '2023-01-02 04:41:18', '2023-01-02 04:41:18', NULL, NULL, 0, NULL),
(37, 'Recommended', 'square', 'assets/img/icon/square.svg', '', 'Square', NULL, 1, 25, '2023-01-02 04:41:18', '2023-01-02 04:41:18', NULL, NULL, 0, NULL),
(38, 'Recommended', 'telegram', 'assets/img/icon/telegram.svg', NULL, 'Telegram', 'https://t.me/johndoe', 1, 26, '2023-01-11 17:15:34', '2023-01-02 04:41:18', 'link', NULL, 0, NULL),
(39, 'Recommended', 'tiktok', 'assets/img/icon/tiktok.svg', NULL, 'Tiktok', 'https://www.tiktok.com/', 1, 27, '2023-01-14 09:31:23', '2023-01-02 04:41:18', 'mobile', 'https://www.tiktok.com/', 0, NULL),
(40, 'Recommended', 'twitch', 'assets/img/icon/twitch.svg', NULL, 'Twitch', 'johndoe', 1, 30, '2023-01-11 17:14:12', '2023-01-02 04:53:39', 'username', 'https://www.twitch.tv/', 0, NULL),
(42, 'Recommended', 'wechat', 'assets/img/icon/wechat.svg', '', 'Wechat', 'ex:https://www.wechat.com/maidul', 1, 33, '2023-01-02 04:53:39', '2023-01-02 04:53:39', NULL, NULL, 0, NULL),
(43, 'Recommended', 'yelp', 'assets/img/icon/yelp.svg', '', 'Yelp', 'ex:https://www.yelp.com/maidul', 1, 34, '2023-01-02 04:53:39', '2023-01-02 04:53:39', NULL, NULL, 0, NULL),
(44, 'Recommended', 'youtube', 'assets/img/icon/youtube.svg', NULL, 'Youtube', 'ex:https://www.youtube.com/johndoe', 1, 35, '2023-01-11 17:16:24', '2023-01-02 04:53:39', 'link', NULL, 0, NULL),
(45, 'Recommended', 'zelle', 'assets/img/icon/zelle.svg', NULL, 'Zelle', 'ex:+8801681944126', 1, 37, '2023-01-11 17:19:18', '2023-01-02 04:53:39', 'number', NULL, 0, NULL),
(46, 'Recommended', 'email', 'assets/img/icon/1673420575.svg', NULL, 'Email', 'ex:example@gmail.com', 1, 82, '2023-01-11 13:02:55', '2023-01-11 07:02:55', 'mail', NULL, 0, NULL),
(47, 'Contact', 'Contact Card', 'assets/img/icon/1673420780.svg', NULL, 'Contact card', 'Contact card', 1, 56, '2023-01-11 13:08:36', '2023-01-11 07:06:20', 'text', NULL, 0, NULL),
(50, 'Recommended', 'Venmo.com', 'assets/img/icon/1673426968.svg', NULL, 'Venmo', 'johndoe', 1, 32, '2023-01-11 17:14:00', '2023-01-11 08:49:28', 'username', 'https://venmo.com/', 0, NULL),
(51, 'More', 'Website', 'assets/img/icon/1673437715.svg', NULL, 'Website', 'ex:https://www.johndoe.com/', 1, 23, '2023-01-11 17:48:35', '2023-01-11 11:48:35', 'link', NULL, 1, NULL),
(52, 'More', 'Featured', 'assets/img/icon/1673438849.svg', NULL, 'Featured', 'ex: featured  link', 1, 2, '2023-01-11 18:07:29', '2023-01-11 12:07:29', 'link', NULL, 0, NULL);

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
(17, '', '2023-01-11 11:39:14', 'sub_1MOx1oBIRmXVjgUGlA9e9Zuz', '70', '2', 'Gold Plan', 'Stripe', 'USD', '17.7', '63be4b8252847', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Masud\",\"to_billing_address\":\"Dhaka\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+880\",\"to_billing_email\":\"masud@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":17.7,\"subtotal\":15,\"tax_amount\":2.7}', 'Success', '1', '2023-01-11 11:39:14', '2023-01-11 11:39:14'),
(18, '', '2023-01-12 11:05:16', 'sub_1MPIyTBIRmXVjgUGDDtoAZBy', '2', '2', 'Gold Plan', 'Stripe', 'usd', '17.7', '63bf950c5a33d', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Dahlia Strong\",\"to_billing_address\":\"qqwqww\",\"to_billing_city\":\"Autem distinctio Sa\",\"to_billing_state\":\"Odit velit qui a tot\",\"to_billing_zipcode\":\"75510\",\"to_billing_country\":\"United States\",\"to_billing_phone\":\"+880\",\"to_billing_email\":\"user@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":17.7,\"subtotal\":15,\"tax_amount\":2.7}', 'Success', '1', '2023-01-12 05:05:16', '2023-01-12 05:05:16'),
(19, '', '2023-01-12 13:21:00', 'sub_1MPIyTBIRmXVjgUGDDtoAZBy', '2', '3', 'Corporate Plan', 'Stripe', 'usd', '149', '63bfb4dcb1e72', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Dahlia Strong\",\"to_billing_address\":\"qqwqww\",\"to_billing_city\":\"Autem distinctio Sa\",\"to_billing_state\":\"Odit velit qui a tot\",\"to_billing_zipcode\":\"75510\",\"to_billing_country\":\"United States\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"user@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":149,\"subtotal\":149,\"tax_amount\":0}', 'Success', '1', '2023-01-12 07:21:00', '2023-01-12 07:21:00'),
(20, '', '2023-01-12 15:01:27', 'sub_1MPMf2BIRmXVjgUG0K6NZbCG', '79', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63bfcc676013a', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Arifur Rahman\",\"to_billing_address\":\"dasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"arifurrahman01710@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:01:27', '2023-01-12 09:01:27'),
(21, '', '2023-01-12 15:07:02', 'sub_1MPMkRBIRmXVjgUGhTdVrHCf', '79', '3', 'Corporate Plan', 'Stripe', 'usd', '149', '63bfcdb652da7', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Arifur Rahman\",\"to_billing_address\":\"dasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"arifurrahman01710@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":149,\"subtotal\":149,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:07:02', '2023-01-12 09:07:02'),
(22, '', '2023-01-12 15:13:18', 'sub_1MPMqVBIRmXVjgUGBAwLTND7', '80', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63bfcf2e710ad', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"adasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:13:18', '2023-01-12 09:13:18'),
(23, '', '2023-01-12 15:22:20', 'sub_1MPMzFBIRmXVjgUGfFuF5XU8', '80', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63bfd14c7510e', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"adasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:22:20', '2023-01-12 09:22:20'),
(24, '', '2023-01-12 15:24:37', 'sub_1MPN1TBIRmXVjgUGkmgreunp', '81', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63bfd1d5c2ec3', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew26\",\"to_billing_address\":\"ads\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"49494949\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew26@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:24:37', '2023-01-12 09:24:37'),
(25, '', '2023-01-12 15:30:58', 'sub_1MPN7cBIRmXVjgUGIW81C8n7', '81', '3', 'Corporate Plan', 'Stripe', 'usd', '149', '63bfd352bb47c', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew26\",\"to_billing_address\":\"ads\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"49494949\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew26@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":149,\"subtotal\":149,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:30:58', '2023-01-12 09:30:58'),
(26, '', '2023-01-12 15:31:42', 'sub_1MPN8KBIRmXVjgUGKKve0bKt', '81', '2', 'Gold Plan', 'Stripe', 'usd', '15', '63bfd37ee696f', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew26\",\"to_billing_address\":\"ads\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"49494949\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew26@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":15,\"subtotal\":15,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:31:42', '2023-01-12 09:31:42'),
(27, '', '2023-01-12 15:32:29', 'sub_1MPN94BIRmXVjgUGHFnykTjS', '81', '3', 'Corporate Plan', 'Stripe', 'usd', '30', '63bfd3ad49fb6', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew26\",\"to_billing_address\":\"ads\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"49494949\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew26@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":30,\"subtotal\":30,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:32:29', '2023-01-12 09:32:29'),
(28, '', '2023-01-12 15:34:26', 'sub_1MPNAyBIRmXVjgUGnMx5arQF', '81', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63bfd422892c7', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew26\",\"to_billing_address\":\"ads\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"49494949\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew26@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:34:26', '2023-01-12 09:34:26'),
(29, '', '2023-01-12 15:43:10', 'sub_1MPNJPBIRmXVjgUGbgja8F41', '82', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63bfd62ebb5dd', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"aadasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"243423\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:43:10', '2023-01-12 09:43:10'),
(30, '', '2023-01-12 15:51:42', 'sub_1MPNRfBIRmXVjgUGxga2m6tv', '82', '3', 'Corporate Plan', 'Stripe', 'usd', '149', '63bfd82e4afdf', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"aadasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"243423\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":149,\"subtotal\":149,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:51:42', '2023-01-12 09:51:42'),
(31, '', '2023-01-12 15:53:01', 'sub_1MPNSwBIRmXVjgUGS54FIBVc', '82', '2', 'Gold Plan', 'Stripe', 'usd', '15', '63bfd87d13ad2', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"aadasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"243423\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":15,\"subtotal\":15,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:53:01', '2023-01-12 09:53:01'),
(32, '', '2023-01-12 15:53:08', 'sub_1MPNT3BIRmXVjgUG0Y81qrOB', '82', '2', 'Gold Plan', 'Stripe', 'usd', '15', '63bfd88401e56', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"aadasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"243423\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":15,\"subtotal\":15,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:53:08', '2023-01-12 09:53:08'),
(33, '', '2023-01-12 15:54:01', 'sub_1MPNTvBIRmXVjgUGpD9qvB6K', '82', '3', 'Corporate Plan', 'Stripe', 'usd', '30', '63bfd8b9d8e20', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"aadasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"243423\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":30,\"subtotal\":30,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:54:01', '2023-01-12 09:54:01'),
(34, '', '2023-01-12 15:56:45', 'sub_1MPNWZBIRmXVjgUG8WbPsaX9', '82', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63bfd95dcb8d5', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tocedew\",\"to_billing_address\":\"aadasd\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"243423\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tocedew261@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-12 09:56:45', '2023-01-12 09:56:45'),
(35, '', '2023-01-14 16:53:00', 'sub_1MQ7M5BIRmXVjgUGs38u4T7R', '84', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63c2898c19865', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tecij81550\",\"to_billing_address\":\"2323\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"322323\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tecij81550@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-14 10:53:00', '2023-01-14 10:53:00'),
(36, '', '2023-01-14 16:54:14', 'sub_1MQ7NIBIRmXVjgUGCoI1peHI', '84', '3', 'Corporate Plan', 'Stripe', 'usd', '30', '63c289d6acac2', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tecij81550\",\"to_billing_address\":\"2323\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"322323\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tecij81550@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":30,\"subtotal\":30,\"tax_amount\":0}', 'Success', '1', '2023-01-14 10:54:14', '2023-01-14 10:54:14'),
(37, '', '2023-01-14 16:57:54', 'sub_1MQ7QpBIRmXVjgUGJaCOObPN', '84', '2', 'Gold Plan', 'Stripe', 'usd', '15', '63c28ab23ac5c', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tecij81550\",\"to_billing_address\":\"2323\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"322323\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tecij81550@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":15,\"subtotal\":15,\"tax_amount\":0}', 'Success', '1', '2023-01-14 10:57:54', '2023-01-14 10:57:54'),
(38, '', '2023-01-14 16:58:47', 'sub_1MQ7RgBIRmXVjgUGLP80dAIl', '84', '3', 'Corporate Plan', 'Stripe', 'usd', '149', '63c28ae77d420', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tecij81550\",\"to_billing_address\":\"2323\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"322323\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tecij81550@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":149,\"subtotal\":149,\"tax_amount\":0}', 'Success', '1', '2023-01-14 10:58:47', '2023-01-14 10:58:47'),
(39, '', '2023-01-14 18:18:52', 'sub_1MQ8hBBIRmXVjgUGfymvT4uf', '84', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63c29dac61383', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tecij81550\",\"to_billing_address\":\"2323\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"322323\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tecij81550@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-14 12:18:52', '2023-01-14 12:18:52'),
(40, '', '2023-01-14 18:23:43', 'sub_1MQ8lsBIRmXVjgUGMg5lSQfy', '84', '2', 'Gold Plan', 'Stripe', 'usd', '46', '63c29ecf26c3e', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"tecij81550\",\"to_billing_address\":\"2323\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka\",\"to_billing_zipcode\":\"322323\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"tecij81550@tohup.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":46,\"subtotal\":46,\"tax_amount\":0}', 'Success', '1', '2023-01-14 12:23:43', '2023-01-14 12:23:43');

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
  `billing_country_code` varchar(50) CHARACTER SET utf16 DEFAULT NULL,
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
  `paid_with` int(11) DEFAULT NULL COMMENT '0=Stripe, 1=Paypal',
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
  `is_delete` tinyint(1) DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active_card_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`, `username`, `active_card_id`) VALUES
(1, 'Mtgpro Admin', NULL, 'admin@gmail.com', NULL, 1, 1, NULL, 0, '$2y$10$g6GacdNZ6Pqoz6VOCav9kep7E.2u3o.TqxP5/0ZtlzMju18z9HjoS', 'Email', '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-03-12 14:54:38', '2022-12-31 06:15:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'user1', NULL, 'user@gmail.com', NULL, 0, 2, NULL, 0, '$2y$10$v8MKSaFQyVL..Fs8ZW.Pt..RccGPD5uRfyKexrYcgW0GXUaGvpTlO', 'Email', 'assets/uploads/avatar/-63bc16441bf64.png', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":null,\"stripe_data\":null,\"stripe_data_yearly\":null,\"stripe_plan_id_yearly\":null,\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-09 17:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-13', '2023-01-12', 'Dahlia Strong', 'personal', '123', 'qqwqww', 'Autem distinctio Sa', 'Odit velit qui a tot', '75510', 'United States', '+1', 'user@gmail.com', 1, NULL, NULL, NULL, NULL, 'cus_MvsUI7ZC6dOOp9', '2022-08-15 14:34:14', '2023-01-12 07:27:30', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 'Md Maidul Islam', NULL, 'Maidul@gmail.com', NULL, 1, 2, NULL, 0, '$2y$10$ymfM/z4aBi58HGVoQl48HekrFbCUpJYmDnWuW1tmwd0EjspASl0yi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-02 08:58:29', '2022-12-07 20:02:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, '', NULL, 'maidul1@gmail.com', NULL, 1, 1, NULL, 0, '$2y$10$4CA3v2emacQWtY67ZkfS8.FmugGYH5pY3lcmvVy4Xl.ipkykEqSiO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-19 01:06:04', '2022-11-19 01:06:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(49, 'Rokib', NULL, 'rokib@gmail.com', NULL, 1, 2, NULL, 0, '$2y$10$cBU5Zq8kX/CN14iPR.ghK.O8tCNVVQsMQrHSv9npCHWYn1PaUUlVi', NULL, 'upload/profile/1669453399.jpg', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-27', '2022-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-26 06:24:04', '2022-11-26 03:03:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(50, 'Sharif', NULL, 'sharif@gmail.com', NULL, 1, 2, NULL, 0, '$2y$10$vlc72hr0quMawpKKBAWVWur2LLoS55VirnJVJRDOlqScbglQ8JfG6', NULL, 'upload/profile/1669558751.png', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-28', '2022-11-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-27 14:08:58', '2022-11-27 08:19:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(51, 'Kamal', NULL, 'user10@gmail.com', NULL, 1, 2, NULL, 0, '$2y$10$cuwHVKFPHtqzEACwJKh3iORBwWSC0Ywgn6corStox682JvFgVkS7m', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '0000-00-00', '2022-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-30 07:51:58', '2022-11-30 02:17:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(52, 'Jamal', NULL, 'jamal@gmail.com', NULL, 1, 2, NULL, 0, '$2y$10$YJQ.XhRrFAnodS5cz.LLQ.bNFUtqFyO3ilumeNR6B8Y0qLFlTBc1u', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-12-30', '2022-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-30 08:17:36', '2022-11-30 02:18:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(53, 'Rabin mia', NULL, 'rabinmia7578@gmail.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp5skZc5cDeXLPg6eXI_ii3nbHLqkA7WXGSb3adp=s96-c', NULL, NULL, '{\"id\":2,\"plan_type\":2,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"LetsConnect Small Business\",\"plan_description\":\"LetsConnect Small Business\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":46,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solopreneur Account +\\\",\\\"Up to 20 Shareable Digital Cards\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Marketing Mastery 101 Guide\\\",\\\"BONUS: LetsConnect Branding Guide\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T16:10:20.000000Z\",\"updated_at\":\"2022-12-06T06:53:27.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1}', '2023-01-08', '2022-12-08', 'Rabin mia', NULL, NULL, NULL, 'Jsjjd', 'Hdjd', 'Jdjjd', NULL, NULL, 'rabinmia7578@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MCj1OBIRmXVjgUGyYrP6XWT\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1670501774,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1670501774,\"currency\":\"usd\",\"current_period_end\":1673180174,\"current_period_start\":1670501774,\"customer\":\"cus_MwcFgr9RnTdFGW\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_MwcFeLmBPtZDvV\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1670501775,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MCj1OBIRmXVjgUGyYrP6XWT\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MCj1OBIRmXVjgUGyYrP6XWT\"},\"latest_invoice\":\"in_1MCj1OBIRmXVjgUGErmMnWG4\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1670501774,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_MwcFgr9RnTdFGW', '2022-12-08 05:50:25', '2022-12-08 05:50:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '115691976286960126962', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(54, 'Rony Mia', NULL, 'ronymia.tech@gmail.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4C9qHTYcI0ZzTxl40nUtRPzrJXOyHnrXLCEH3G=s96-c', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-11-30 08:07:46\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-08', '2022-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-08 08:21:37', '2022-12-08 08:21:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107403319867710670983', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(55, 'Spencer Suggs', NULL, 'spencer@letsconnect.site', NULL, 1, 2, NULL, 0, '$2y$10$ZTVtW3vzFYehUp3A2RAFT.dgjSXBfSDpkYxFB7MmT.WEAlJ3Isfuq', NULL, 'https://letsconnectv2.webdevs4u.com/upload/logo/1670510302.png', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-11-30 08:07:46\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-08', '2022-12-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-08 20:30:30', '2022-12-08 08:38:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(56, 'Arifur Rahman', NULL, 'arifmahmud64@gmail.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4IZvMNZJWrbKDErUWRt6O80Du3C87cPn-iMZ2rXuA=s96-c', NULL, '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-11-30 08:07:46\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-12-11', '2022-12-10', 'Arifur Rahman', NULL, NULL, NULL, 'asas', 'asas', '12345', NULL, '01710788656', 'arifmahmud64@gmail.com', 1, NULL, NULL, NULL, NULL, 'cus_MxLZ8p7EJQsK4F', '2022-12-10 04:49:12', '2022-12-10 05:19:20', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'google', '100953062814271775540', NULL, NULL, NULL, NULL, 'haKpCQqu0mcGjh0iCoYQnUi7nVAJ4WAMGMVKqluxzoqcPT8oKxGsHfEFmusm', '2022-12-10 06:03:46', 1, NULL, NULL, NULL, NULL, NULL),
(57, 'Mokaddes Hosain', NULL, 'mr.mokaddes@gmail.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2308423085971803/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:45:25', '2022-12-10 06:45:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2308423085971803', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(58, 'বেদনার বিশালতা', NULL, 'mr.mokaddes@yahoo.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2483507575123152/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:46:38', '2022-12-10 06:46:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2483507575123152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(59, 'Md Maidul Islam', NULL, 'mahibc1@gmail.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2135716489941526/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:57:59', '2022-12-10 06:57:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2135716489941526', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(60, 'Md Maidul', NULL, 'maidul.tech@gmail.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4oYDvcIxT3OAcXD-t_j8Z_gWfrBS7dbYbMrZA7=s96-c', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:59:08', '2022-12-10 06:59:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107639191533203099239', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 'Arifur Rahman', NULL, 'arifurrahman911@live.com', NULL, 1, 2, NULL, 0, '$2y$10$tUvSErHMWYPItlNg5Mz8J..gkwzHb0ii16fu.fgK2Mmw0BKHVDJ.i', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 19:14:16', '2022-12-10 07:16:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'Rony Mia', NULL, 'ronymia111333@gmail.com', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/1801020763564287/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 08:06:19', '2022-12-10 08:06:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '1801020763564287', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'Arifur', NULL, 'arifurrahman01710@gmail.com', NULL, 1, 2, NULL, 0, '$2y$10$8POzbpKX9HuRMJPZHBECsu/f6URJ67p6nmj/znJjEJY2K6wQ3cp5.', NULL, 'https://letsconnectv2.webdevs4u.com/upload/logo/1670682269.png', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 20:17:10', '2022-12-10 08:25:36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'EU3cvteFObrXzKsKzwk9NbxFnLtSOWEGgs0g9DPT7rk7qZnp2LAZz7N74e0a', '2022-12-10 09:24:48', 1, NULL, NULL, 0, NULL, NULL),
(64, 'Tenu', NULL, 'teno@gmail.com', NULL, 1, 2, NULL, 0, '$2y$10$cJO1.wrrpI4NRQgKV0CLTeY4S8g/pCuKl5n.8hDbu.OC2XCneeH1W', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"10\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-11', '2022-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-11 10:29:58', '2022-12-13 00:32:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'Pori Moni', NULL, 'pori@gmail.com', NULL, 2, 2, NULL, 0, '$2y$10$LAR/Q4BqT/yNaM9dyL8DbuSBZoEvuLwLNTjIgJ8r/G7P007KmpTKi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-01 00:14:23', '2023-01-01 00:14:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'Raj', NULL, 'raj@gmail.com', NULL, 2, 2, NULL, 0, '$2y$10$5I8iykUXNQAiPBUSN8uytOgY.P22b5RfK/akOiazXBlY2Zh.Q1OZu', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-03 20:16:49\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-09', '2023-01-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-01 14:27:22', '2023-01-08 13:19:29', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'Hasad Whitfield', NULL, 'jexoqo@mailinator.com', NULL, 2, 2, NULL, 0, '$2y$10$W/ErYo1AoUcb4l/yTtrZOeDp.KyqGr4NpGvKxomBXiadr33zpRjZy', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-03 20:16:49\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2024-01-06', '2023-01-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-04 14:18:34', '2023-01-05 14:55:19', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'Cade Elliott', NULL, 'vetidudug@mailinator.com', NULL, 2, 2, NULL, 0, '$2y$10$sZ.HEx9Bbwx.A8Jd6yIjvupn8EA3b.4pC/zL2bIB2t3Uxo51q6JnW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-08 13:18:16', '2023-01-08 13:18:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`, `username`, `active_card_id`) VALUES
(69, 'sakil', NULL, 'sakil@gmail.com', 'BD', 1, 2, NULL, 0, '$2y$10$tsuhxswes335t1.UCXmWnuYEJlrD3d3y9N/M7Rk0BN0tG4tkb2cc.', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 11:05:43', '2023-01-11 11:05:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'Masud', NULL, 'masud@gmail.com', 'BD', 1, 2, NULL, 0, '$2y$10$CM3o5lVs.hFjzxt/ODwGMu.UM.zXDpyYfgTf5CKXkRXaYpuQH7YES', NULL, 'https://www.mtgpro.me/assets/uploads/avatar/-63beaeef6f719.png', '2', NULL, '{\"id\":2,\"plan_type\":2,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Gold\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":46,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solopreneur Account +\\\",\\\"Up to 20 Shareable Digital Cards\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Marketing Mastery 101 Guide\\\",\\\"BONUS: MTG Branding Guide\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-03T08:17:56.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2023-02-11', '2023-01-11', 'Masud', NULL, NULL, 'Dhaka', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+880', 'masud@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MOx1oBIRmXVjgUGlA9e9Zuz\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1673415551,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1673415551,\"currency\":\"usd\",\"current_period_end\":1676093951,\"current_period_start\":1673415551,\"customer\":\"cus_N9FWOBDt6N7yDU\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_N9FWwITGjZzQmr\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1673415552,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MOx1oBIRmXVjgUGlA9e9Zuz\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MOx1oBIRmXVjgUGlA9e9Zuz\"},\"latest_invoice\":\"in_1MOx1oBIRmXVjgUGal5lHAzu\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1673415551,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_N9FWOBDt6N7yDU', '2023-01-11 11:25:23', '2023-01-11 18:43:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'Ziaur Rahman', NULL, 'ziariyad018@gmail.com', 'BD', 1, 2, NULL, 0, '$2y$10$8gMttuZN5GkCfr.14E7E/O1sO9y6GftOKaFkT.qX.P6bK6C7b.fLO', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 15:39:25', '2023-01-11 15:39:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'riyad', NULL, 'ziariyad@gmail.com', 'BD', 1, 2, NULL, 0, '$2y$10$7ABZEkqQqlQBdkwTvuJ66OutBF0hqqLpPWhUB/bACpmBxA0cEW0rO', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 16:30:07', '2023-01-11 16:30:07', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'tocedew', NULL, 'tocedew261@tohup.com', 'BD', 1, 2, NULL, 0, '$2y$10$f.YkFZovohHr0R8jKOIIKuEmGW.Hho/ZU7nKqIEtAXR3PsS85z.c6', NULL, 'http://127.0.0.1:8000/assets/uploads/avatar/-63c403316aa5c.png', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":null,\"stripe_data\":null,\"stripe_data_yearly\":null,\"stripe_plan_id_yearly\":null,\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-09 17:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-16', '2023-01-15', 'tocedew', NULL, NULL, 'aadasd', 'Dhaka', 'Dhaka', '243423', 'Bangladesh', '+1', 'tocedew261@tohup.com', 1, 'TFNFMRxffElreDQKz9GR1jNhBTqWQDKL8uMAavrCtMZEZA5NSnlDSJUsOqQa', NULL, NULL, NULL, 'cus_N9ggvE93lOrV9E', '2023-01-12 09:42:00', '2023-01-15 14:06:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'hpwwWt6acDnloTOR1EbWTp6a8poTED0N2ZHrTbrzpV4bkzV3uUyGFN2N0byg', '2023-01-15 20:44:36', 1, NULL, NULL, NULL, 'tocedew261tohupcom', 92),
(83, 'gihamo', NULL, 'gihamo3196@themesw.com1', 'BD', 1, 2, NULL, 0, '$2y$10$VZ74vTX3qGqm6E5Z.f/2XuBN/TkvfRwBNSWIOCvA0Kjv/oTKm2Up.', NULL, 'http://127.0.0.1:8000/assets/uploads/avatar/-63c247aa41768.png', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":null,\"stripe_data\":null,\"stripe_data_yearly\":null,\"stripe_plan_id_yearly\":null,\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-09 17:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', NULL, 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 05:42:58', '2023-01-14 06:12:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gihamo3196themeswcom', 93),
(84, 'tecij81550', NULL, '84-tecij81550@tohup.com', 'BD', 1, 2, NULL, 0, '$2y$10$VSaG60fynXrBUjwk0/0J5OTaMO.Y3WCpf5k6cDzU50TRKNtKSxbua', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":null,\"stripe_data\":null,\"stripe_data_yearly\":null,\"stripe_plan_id_yearly\":null,\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-09 17:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-15', '2023-01-14', 'tecij81550', NULL, NULL, '2323', 'Dhaka', 'Dhaka', '322323', 'Bangladesh', '+1', 'tecij81550@tohup.com', 2, NULL, NULL, NULL, NULL, 'cus_NATj7OJq8sDEP0', '2023-01-14 07:17:55', '2023-01-15 09:24:49', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qdXfheeiWhPoPi14e0CJRHO63xh0mssNctUE5hWOejCHeF4v2Ms1PSGx5Ozu', '2023-01-15 16:24:20', 1, '2023-01-15 15:24:49', 84, 1, 'tecij81550tohupcom', 94),
(85, 'Abdullah', NULL, 'abdullah@gmail.com', 'BD', 1, 2, NULL, 0, '$2y$10$AnfFMrgCUkXKrnQx5FLQjeKwGvzryUKDfO0WvaMjT84pdE0wB5q1q', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":null,\"stripe_data\":null,\"stripe_data_yearly\":null,\"stripe_plan_id_yearly\":null,\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-09 17:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-16', '2023-01-15', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka', NULL, 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-15 11:19:44', '2023-01-15 11:21:02', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'tecij81550tohupcom1', 95);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `business_fields`
--
ALTER TABLE `business_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `connects`
--
ALTER TABLE `connects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `custom_pages`
--
ALTER TABLE `custom_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_icon`
--
ALTER TABLE `social_icon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
