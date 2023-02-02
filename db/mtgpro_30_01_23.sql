-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 03:26 PM
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
  `bio` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_hit` int(11) NOT NULL DEFAULT 1,
  `total_qr_download` int(11) NOT NULL DEFAULT 1,
  `total_vcf_download` int(11) NOT NULL DEFAULT 1,
  `color_link` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=yes,0=no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_cards`
--

INSERT INTO `business_cards` (`id`, `card_id`, `user_id`, `theme_id`, `theme_color`, `card_lang`, `cover`, `profile`, `card_url`, `card_type`, `title`, `title2`, `sub_title`, `description`, `card_status`, `status`, `created_at`, `updated_at`, `company_name`, `company_websitelink`, `ccode`, `phone_number`, `card_email`, `card_for`, `logo`, `designation`, `deleted_at`, `deleted_by`, `is_deleted`, `location`, `bio`, `total_hit`, `total_qr_download`, `total_vcf_download`, `color_link`) VALUES
(4, '637876cb3152c', 44, '1', '#fff', 'en', NULL, 'upload/profile/1668839088.png', '637876cb3152c', 'vcard', 'Maidul', 'Developer', NULL, NULL, 'activated', '0', '2022-11-19 00:25:15', '2023-01-30 12:15:09', 'Arobil', NULL, '+880', '01681944126', 'maidul.tech@gmail.com', 'Work', NULL, NULL, '2023-01-20 20:14:24', 1, NULL, NULL, NULL, 5, 1, 1, 0),
(5, '637876cb32a0c', 44, '1', '#fff', 'en', NULL, 'upload/profile/1668839088.png', '637876cb32a0c', 'vcard', 'Maidul', 'Developer', NULL, NULL, 'activated', '0', '2022-11-19 00:25:15', '2023-01-30 12:15:09', 'Arobil', NULL, '+880', '01681944126', 'maidul.tech@gmail.com', 'Personal', NULL, NULL, '2023-01-20 20:14:17', 1, NULL, NULL, NULL, 2, 1, 1, 0),
(6, '637882c8dedf1', 46, '1', '#fff', 'en', NULL, 'upload/profile/1668842163.png', '637882c8dedf1', 'vcard', 'Maidul', 'Dveloper', NULL, NULL, 'activated', '0', '2022-11-19 01:16:24', '2023-01-30 12:15:09', 'Arobil', NULL, '+880', '01918993427', 'maidul02@gmail.com', 'Work', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(7, '637882c8e5baf', 46, '1', '#fff', 'en', NULL, 'upload/profile/1668842163.png', '637882c8e5baf', 'vcard', 'Maidul', 'Dveloper', NULL, NULL, 'activated', '0', '2022-11-19 01:16:24', '2023-01-30 12:15:09', 'Arobil', NULL, '+880', '01918993427', 'maidul02@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(8, '6378d30ede830', 46, '1', '#fff', 'en', NULL, '/upload/profile/3-6378d30ee461f3.jpg', 'test', 'vcard', 'Sakib', 'Khan', '', NULL, 'activated', '0', '2022-11-19 06:58:54', '2023-01-30 12:15:09', 'FDC', 'www.fdc.com', '+880', NULL, 'skib@gmail.com', 'TEST', '/upload/logo/3-6378d30f135493.jpg', 'Actor', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(9, '6378d84b7e635', 46, '1', '#fff', 'en', NULL, '/upload/profile/62670e55cbfef-6378d84b80d8d62670e55cbfef.jpeg', 'rubel', 'vcard', 'Rubel', 'Hossen', '', NULL, 'activated', '0', '2022-11-19 07:21:15', '2023-01-30 12:15:09', 'Rubel Ltd', 'www.rubel.com', '+880', NULL, 'rubel@gmail.com', 'Rubel', '/upload/logo/12-6378d84b85c5d12.png', 'CEO', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(12, '12', 47, '1', '#fff', 'en', NULL, 'upload/profile/1668957249.png', '637a4460c2c55', 'vcard', 'fgfg', 'fgfgg', NULL, NULL, 'activated', '0', '2022-11-20 09:14:40', '2023-01-30 12:15:09', 'fgfg', NULL, '+1', '1212', 'suju@mailinator.com', 'Work', 'upload/logo/1668957421.png', NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(13, '637a4460c534b', 47, '1', '#fff', 'en', NULL, 'upload/profile/1668957249.png', '637a4460c534b', 'vcard', 'fgfg', 'fgfgg', NULL, NULL, 'activated', '0', '2022-11-20 09:14:40', '2023-01-30 12:15:09', 'fgfg', NULL, '+1', '1212', 'suju@mailinator.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(29, '637deb110642a', 2, '1', '#fff', 'en', NULL, 'upload/profile/1669629598.png', 'maidul', 'vcard', 'Maidul', 'Islam', NULL, NULL, 'activated', '0', '2022-11-23 03:42:41', '2023-01-30 12:15:09', 'arobil ltd', 'www.arobil.com', '+1', '01918993427', 'maidul.tech@gmail.com', 'Personal', '/upload/logo/maidul_logo-637deb111c2fdmaidul_logo.png', 'Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(30, '637f25bb4b520', 2, '1', '#fff', 'en', NULL, '/upload/profile/maidul_logo-637f25bb5de29maidul_logo.png', 'maidul01', 'vcard', 'Maidul', 'Islam', NULL, NULL, 'activated', '0', '2022-11-24 02:05:15', '2023-01-30 12:15:09', 'Arobil', 'arobil.com', '+880', '01681944126', 'maidul.tech@gmail.com', 'Personal', '/upload/logo/maidul_logo-637f25bb9221fmaidul_logo.png', 'Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(31, '6381bd9ff0445', 49, '1', '#fff', 'en', NULL, 'upload/profile/1669447053.png', '6381bd9ff0445', 'vcard', 'Rakib', NULL, NULL, NULL, 'activated', '0', '2022-11-26 01:17:51', '2023-01-30 12:15:09', NULL, NULL, '+880', '01681944126', 'rokib@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(32, '63836ff8dc70d', 50, '1', '#fff', 'en', NULL, 'upload/profile/1669558211.png', '63836ff8dc70d', 'vcard', 'Sharif Khan', NULL, NULL, NULL, 'activated', '0', '2022-11-27 08:11:04', '2023-01-30 12:15:09', 'Azuramart', NULL, '+880', '016181944126', 'sharif@gmail.com', 'Personal', NULL, 'CEO', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(33, '63836ff8ddb69', 50, '1', '#fff', 'en', NULL, 'upload/profile/1669558211.png', '63836ff8ddb69', 'vcard', 'Sharif Khan', NULL, NULL, NULL, 'activated', '0', '2022-11-27 08:11:04', '2023-01-30 12:15:09', 'Azuramart', NULL, '+880', '016181944126', 'sharif@gmail.com', 'Work', NULL, 'CEO', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(34, '638618acf057a', 2, '1', '#219653', 'en', NULL, 'upload/profile/1669732256.png', 'test1', 'vcard', 'Md', 'Maidul Islam', NULL, NULL, 'activated', '0', '2022-11-29 08:35:24', '2023-01-30 12:15:09', 'Arobil Ltd', 'www.arobil.com', '+1', '01918993427', 'maidul.tech@gmail.com', 'Personal', 'upload/logo/1669732277.png', 'Developer', NULL, NULL, NULL, NULL, NULL, 6, 1, 1, 0),
(35, '6387118a8de29', 51, '1', '#fff', 'en', NULL, NULL, '6387118a8de29', 'vcard', 'Kamal', NULL, NULL, NULL, 'activated', '0', '2022-11-30 02:17:14', '2023-01-30 12:15:09', NULL, NULL, '+1', '019111111', 'user10@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 18, 1, 2, 0),
(36, '638711c561c08', 52, '1', '#fff', 'en', NULL, NULL, '638711c561c08', 'vcard', 'Jamal', NULL, NULL, NULL, 'activated', '0', '2022-11-30 02:18:13', '2023-01-30 12:15:09', NULL, NULL, '+880', '01918993427', 'jamal@gmail.com', 'Personal', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(41, '6391f383ebb8b', 54, '1', '#F2C94C', 'en', 'assets/uploads/avatar/rony-mia-63cb5787ca85e.png', 'assets/uploads/avatar/rony-mia-63cb5787ca77a.png', '6391f383ebb8b', 'vcard', 'Rony Mia', NULL, '', NULL, 'activated', '0', '2022-12-08 08:24:03', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, NULL, 'ronymia.tech@gmail.com', 'Personal', 'assets/uploads/avatar/rony-mia-63cb5787ca9ae.png', 'Project Manager', NULL, NULL, NULL, NULL, NULL, 7, 2, 1, 0),
(42, '6391f383ece93', 54, '1', '#fff', 'en', NULL, 'upload/profile/1670509378.png', '6391f383ece93', 'vcard', 'Rony Mia', NULL, NULL, NULL, 'activated', '0', '2022-12-08 08:24:03', '2023-01-30 12:15:09', 'Arobil', NULL, '+880', '01767671133', 'ronymia.tech@gmail.com', 'Work', NULL, 'Developer', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 0),
(48, '63947f792585f', 57, '1', '#fff', 'en', NULL, NULL, '63947f792585f', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:45:45', '2023-01-30 12:15:09', 'sdf', NULL, '+1', '23123', 'mr.mokaddes@gmail.com', 'Personal', NULL, 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(49, '63947f792630e', 57, '1', '#fff', 'en', NULL, NULL, '63947f792630e', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:45:45', '2023-01-30 12:15:09', 'sdf', NULL, '+1', '23123', 'mr.mokaddes@gmail.com', 'Work', NULL, 'sdf', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(50, '63947fcb24768', 58, '1', '#fff', 'en', NULL, NULL, '63947fcb24768', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:47:07', '2023-01-30 12:15:09', 'sdf', NULL, '+1', '234234', 'mr.mokaddes@yahoo.com', 'Personal', NULL, 'sdfs', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(51, '63947fcb25055', 58, '1', '#fff', 'en', NULL, NULL, '63947fcb25055', 'vcard', 'sdfsdf', NULL, NULL, NULL, 'activated', '0', '2022-12-10 06:47:07', '2023-01-30 12:15:09', 'sdf', NULL, '+1', '234234', 'mr.mokaddes@yahoo.com', 'Work', NULL, 'sdfs', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(54, '63948c377e4dd', 59, '1', '#fff', 'en', NULL, 'upload/profile/1670679586.png', '63948c377e4dd', 'vcard', 'Md Maidul Islam', NULL, NULL, NULL, 'activated', '0', '2022-12-10 07:40:07', '2023-01-30 12:15:09', 'Arobil', NULL, '+880', '01681944126', 'mahibc1@gmail.com', 'Personal', NULL, 'Full Stack Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(55, '63948c377f37b', 59, '1', '#fff', 'en', NULL, 'upload/profile/1670679586.png', '63948c377f37b', 'vcard', 'Md Maidul Islam', NULL, NULL, NULL, 'activated', '0', '2022-12-10 07:40:07', '2023-01-30 12:15:09', 'Arobil', NULL, '+880', '01681944126', 'mahibc1@gmail.com', 'Work', NULL, 'Full Stack Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(59, '63955d160b101', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670733065.png', '63955d160b101', 'vcard', 'Tenu', NULL, NULL, NULL, 'activated', '0', '2022-12-10 22:31:18', '2023-01-30 12:15:09', 'APDL Ltd', NULL, '+1268', '1918993458', 'teno@gmail.com', 'Work', NULL, 'Manager Sales', '2022-12-10 23:57:02', 1, NULL, NULL, NULL, 1, 1, 1, 0),
(60, '6398138841a4e', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670910838.png', '6398138841a4e', 'vcard', 'Jamal Khan', NULL, NULL, NULL, 'activated', '0', '2022-12-12 17:54:16', '2023-01-30 12:15:09', 'ABC Group', NULL, '+238', '019189963427', 'teno@gmail.com', 'Personal', NULL, 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(61, '6398138844d50', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670930297.png', '6398138844d50', 'vcard', 'Jamal', 'Khan', NULL, NULL, 'activated', '0', '2022-12-12 17:54:16', '2023-01-30 12:15:09', 'ABC Group', NULL, '+238', '019189963427', 'teno@gmail.com', 'Work', 'upload/logo/1670911687.png', 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(62, '6398989f60975', 64, '1', '#fff', 'en', NULL, 'upload/profile/1670944777.png', 'test4', 'vcard', 'Tenu', 'Khan', '', NULL, 'activated', '0', '2022-12-13 03:22:07', '2023-01-30 12:15:09', 'Khan Group', 'https://stackoverflow.com', '+1', '01911116666', 'khan@gmail.com', 'TEST', 'upload/logo/1670944785.png', 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(64, '639899a572a13', 64, '1', '#fff', 'en', NULL, NULL, 'testf', 'vcard', 'Tenu', 'hkaa', '', NULL, 'activated', '0', '2022-12-13 03:26:29', '2023-01-30 12:15:09', NULL, NULL, '+1', '191889999', 'maidul@gmail.com', 'ttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(66, '63b19a9e37353', 66, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/1672583836.png', '63b19a9e373b6', 'vcard', 'Raj', NULL, NULL, NULL, 'activated', '0', '2023-01-01 14:37:18', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, '8801681944126', 'raj@gmail.com', 'Work', NULL, 'Develoepr', NULL, NULL, NULL, 'Banani, Dhaka', 'This is a short bio of Maidul Islam', 1, 1, 1, 0),
(70, '63b2d4e055360', 66, '1', '#219653', 'en', 'assets/uploads/cover/21f78700-13b4-4b5e-9dab-fc224c28a3a8-63b2d4e0557a4.jpg', 'assets/uploads/avatar/41-63b2d4e0553fc.jpg', '63b2d4e055360', 'vcard', 'Md Maidul Islam', NULL, '', NULL, 'activated', '0', '2023-01-02 12:58:08', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, NULL, NULL, 'Office', 'assets/uploads/logo/21f78700-13b4-4b5e-9dab-fc224c28a3a8-63b2d4e0559d9.jpg', 'Developer', NULL, NULL, NULL, 'Banani, Dhaka', 'I am from Bangladesh.', 1, 1, 1, 0),
(71, '63b2eff777acb', 66, '1', '#fff', 'en', 'assets/uploads/avatar/maidul-63b4370b9b46e.jpg', 'assets/uploads/avatar/maidul-63b4370b99bfb.jpg', 'maidul77', 'vcard', 'Maidul', NULL, '', NULL, 'activated', '0', '2023-01-02 14:53:43', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, NULL, 'raj@gmail.com', 'Office', 'assets/uploads/avatar/maidul-63b437982b8ab.jpg', 'Php Developer', NULL, NULL, NULL, 'Dhaka, Bangladesh', 'Easily extend form controls by adding text, buttons, or button groups on either side of textual inputs, custom selects, and custom file inputs.', 1, 1, 1, 0),
(72, '63b58af96436d', 67, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/hasad-whitfield-63b58af964424.jpg', '63b58af9643cd', 'vcard', 'Hasad Whitfield', NULL, NULL, NULL, 'activated', '0', '2023-01-04 14:19:37', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, '0259566666', 'jexoqo@mailinator.com', 'Work', NULL, 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(73, '63bd391d38c7f', 2, '1', '#219653', 'en', 'assets/uploads/avatar/md-maidul-islam-63bd391d3a696.jpg', 'assets/uploads/avatar/md-maidul-islam-63bd391d39359.jpg', 'maidulislam', 'vcard', 'Md Maidul Islam', NULL, '', NULL, 'activated', '0', '2023-01-10 10:08:29', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, NULL, 'user@gmail.com', 'Personal', 'assets/uploads/avatar/md-maidul-islam-63bd391d3c2e6.jpg', 'Php Developer', NULL, NULL, NULL, 'Banani, Dhaka', 'I am from Dhaka, perfect for php Developer', 1, 3, 1, 0),
(74, '63bd4f08e2d91', 2, '1', '#fff', 'en', NULL, NULL, 'card1', 'vcard', 'test', NULL, '', NULL, 'activated', '0', '2023-01-10 11:42:00', '2023-01-30 12:15:09', 'test', NULL, NULL, NULL, 'user@gmail.com', 'test', NULL, 'test', NULL, NULL, NULL, 'test', NULL, 1, 1, 1, 0),
(75, '63bd6977b2e2d', 2, '1', '#fff', 'en', NULL, NULL, 'Estsuntmollitquidemvelitautmolestiaeomnis', 'vcard', 'Stella Peterson', NULL, '', NULL, 'activated', '0', '2023-01-10 13:34:47', '2023-01-30 12:15:09', 'Conley Roach Co', NULL, NULL, NULL, 'user@gmail.com', 'Similique cumque nat', NULL, 'Eum enim consequatur incididunt fuga Recusandae', NULL, NULL, NULL, 'Quod aut laboris dolor ut rem duis rerum quod aliq', 'Officia culpa lorem maiores aut qui qui ad et odio sed sequi eligendi vitae quidem excepturi ut qui', 1, 1, 1, 0),
(76, '63be48e1bbf8b', 70, '1', '#9B51E0', 'en', 'assets/uploads/avatar/masud-63be4a8279335.jpg', 'assets/uploads/avatar/masud-63be48e1bc015.jpg', 'masudranatapu', 'vcard', 'Masud', NULL, '', NULL, 'activated', '0', '2023-01-11 11:28:01', '2023-01-30 12:15:09', 'Arobil Outsourcing', NULL, NULL, NULL, 'masud@gmail.com', 'Work', NULL, 'Software Developer', NULL, NULL, NULL, 'KB Road, Dhaka, Bangladesh', 'Hi, I am masud rana tapu.', 1, 1, 11, 0),
(77, '63be846d3575e', 71, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/ziaur-rahman-63be846d357d8.jpg', '63be846d357a4', 'vcard', 'Ziaur Rahman', NULL, NULL, NULL, 'activated', '0', '2023-01-11 15:42:05', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, '01860141942', 'ziariyad018@gmail.com', 'Work', NULL, 'Software Engineer', NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 0),
(78, '63be85a280773', 71, '1', '#EB5757', 'en', 'assets/uploads/avatar/ziaur-rahman-63be85a280a49.jpg', 'assets/uploads/avatar/ziaur-rahman-63be85a280921.jpg', 'riyadjk', 'vcard', 'Ziaur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-11 15:47:14', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, NULL, 'ziariyad018@gmail.com', 'Business Card', 'assets/uploads/avatar/ziaur-rahman-63be85a280d57.jpg', 'Software Engineer', NULL, NULL, NULL, 'Banani,Dhaka-1213', 'Bio is loading', 1, 1, 1, 0),
(79, '63be96edcfca6', 71, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/ziaur-rahman-63be972f0afa1.jpg', 'riyad', 'vcard', 'Ziaur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-11 17:01:01', '2023-01-30 12:15:09', 'Arobil ltd', NULL, NULL, NULL, 'ziariyad018@gmail.com', 'Business Card', NULL, 'Software Engineer', NULL, NULL, NULL, 'Banani,Dhaka-1213', 'Bio is loading', 1, 2, 1, 0),
(80, '63beb5ef00775', 73, '1', '#000', 'en', 'assets/uploads/avatar/jr-63c5a43d64060.jpg', 'assets/uploads/avatar/joe-renter-63bf2d460e241.jpg', '63beb5ef007cc', 'vcard', 'JR', NULL, '', NULL, 'activated', '0', '2023-01-11 19:13:19', '2023-01-30 12:15:09', 'Non-QM Doc LLC', NULL, NULL, NULL, 'jr@mtgpro.me', 'MTG PRO', 'assets/uploads/avatar/joe-renter-63bf2d460e573.jpg', 'CEO & Founder', NULL, NULL, NULL, NULL, NULL, 1, 3, 13, 0),
(81, '63beba8a2606c', 74, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/asasas-63beba8a260ed.jpg', '63beba8a260b7', 'vcard', 'asasas', NULL, NULL, NULL, 'activated', '0', '2023-01-11 19:32:58', '2023-01-30 12:15:09', 'asas', NULL, NULL, '01710788656', 'asasas@gmail.com', 'Work', NULL, 'asas', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(82, '63bebc2d0e0df', 75, '1', '#fff', 'en', NULL, 'assets/uploads/avatar/michael-m-63bebc2d0e156.jpg', '63bebc2d0e122', 'vcard', 'Michael M. Kelly', NULL, NULL, NULL, 'activated', '0', '2023-01-11 19:39:57', '2023-01-30 12:15:09', 'Xray Eye & Vision Clinics', NULL, NULL, '69315788', 'MichaelMKelly@jourrapide.com', 'Work', NULL, 'Personnel administrator', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(83, '63bebcedcfadf', 76, '1', '#219653', 'en', 'assets/uploads/avatar/md-63c0161bb8afe.jpg', 'assets/uploads/avatar/md-63c011f755d4a.jpg', '63bebcedcfb24', 'vcard', 'Md. Arifur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-11 19:43:09', '2023-01-30 12:15:09', 'Arobil Limited', NULL, NULL, NULL, 'JohnAKnox@dayrep.com', 'Work', 'assets/uploads/avatar/md-63c011f7564c6.jpg', 'Web Developer', NULL, NULL, NULL, 'Dhaka', 'simple', 1, 4, 8, 0),
(84, '63becc4664459', 77, '1', '#219653', 'en', 'assets/uploads/avatar/sakib-63becd32837f8.jpg', 'assets/uploads/avatar/sakib-63becc46644e7.jpg', 'maidul1', 'vcard', 'Sakib', NULL, '', NULL, 'activated', '0', '2023-01-11 20:48:38', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, NULL, 'sakib@gmail.com', 'Work', 'assets/uploads/avatar/sakib-63becd3283a6a.jpg', 'Programmer', NULL, NULL, NULL, 'Banani, Dhaka', 'Hi, This is Md Maidul from BD', 1, 1, 1, 0),
(85, '63bee72458762', 78, '1', '#000', 'en', NULL, 'assets/uploads/avatar/jagdeep-singh-63c6eec3b0019.jpg', '63bee724587a7', 'vcard', 'Jagdeep Singh', NULL, '', NULL, 'activated', '0', '2023-01-11 22:43:16', '2023-01-30 12:15:09', 'Cliffco Mortgage Bankers', NULL, NULL, NULL, 'jagdeep.saini2704@gmail.com', 'Loan Processor', NULL, 'Loan Processor/Closing Co-Ordinator', NULL, NULL, NULL, NULL, NULL, 1, 5, 3, 1),
(86, '63bf2e7203bc2', 73, '1', '#F2994A', 'en', NULL, NULL, 'jr', 'vcard', 'john', NULL, '', NULL, 'activated', '0', '2023-01-12 03:47:30', '2023-01-30 12:15:09', 'sdf', NULL, NULL, NULL, 'jr@mtgpro.me', '21', NULL, 'swdf', NULL, NULL, NULL, 'ny', NULL, 1, 1, 1, 0),
(88, '63c0214bca2a7', 80, '1', NULL, 'en', NULL, 'assets/uploads/avatar/md-maidul-islam-63c0214bca331.jpg', '63c0214bca2fc', 'vcard', 'Md Maidul Islam', NULL, NULL, NULL, 'activated', '0', '2023-01-12 21:03:39', '2023-01-30 12:15:09', 'Arobil ltd', NULL, NULL, '01681944126', 'Md_Maidul_Islam@gmail.com', 'Work', NULL, 'Manager', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(89, '63c2377e42666', 1, '1', NULL, 'en', NULL, NULL, '63c2377e426a3', 'vcard', 'nayeemsarwar', NULL, NULL, NULL, 'activated', '0', '2023-01-14 11:02:54', '2023-01-30 12:15:09', 'arobil it', NULL, NULL, '01253866', 'arobil@gmail.com', 'Work', NULL, 'private service', NULL, NULL, NULL, NULL, NULL, 1, 2, 2, 0),
(90, '63c2470fe6681', 83, '1', NULL, 'en', NULL, NULL, '63c2470fe66be', 'vcard', 'abir sarwar', NULL, NULL, NULL, 'activated', '0', '2023-01-14 12:09:19', '2023-01-30 12:15:09', 'provider', NULL, NULL, '058578411', 'abir@gmail.com', 'Work', NULL, 'servicre', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(94, '63c2bf07cb10b', 90, '1', '#9B51E0', 'en', NULL, 'assets/uploads/avatar/kamrul-63c2bf07cb181.jpg', '63c2bf07cb14d', 'vcard', 'Kamrul', NULL, '', NULL, 'activated', '0', '2023-01-14 20:41:11', '2023-01-30 12:15:09', 'Arobil Ltd', NULL, NULL, NULL, 'kamrul@gmail.com', 'Work', NULL, 'Designer', '2023-01-20 20:16:32', 1, NULL, NULL, NULL, 1, 1, 1, 0),
(95, '63c380930935e', 91, '1', NULL, 'en', NULL, NULL, '63c380930939c', 'vcard', 'Joseph Renter', NULL, NULL, NULL, 'activated', '0', '2023-01-15 10:26:59', '2023-01-30 12:15:09', 'Non-QM Doc LLC', NULL, NULL, '5162973389', 'jr@nonqmdoc.com', 'Work', NULL, 'CEO', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(96, '63c3893edec2c', 92, '1', NULL, 'en', NULL, 'assets/uploads/avatar/ajom-khan-63c3893edec9b.jpg', '63c3893edec68', 'vcard', 'ajom khan', NULL, NULL, NULL, 'activated', '0', '2023-01-15 11:03:58', '2023-01-30 12:15:09', 'Titas  gas', NULL, NULL, '0127485585', 'ajim@gmail.com', 'Work', NULL, 'Govt service', '2023-01-20 20:39:33', 1, NULL, NULL, NULL, 1, 1, 1, 0),
(98, '63c3a83d1f2e9', 107, '1', '#9B51E0', 'en', 'assets/uploads/avatar/arifur-rahman-63c3b708d4467.jpg', 'assets/uploads/avatar/arifur-rahman-63c3a83d1f376.jpg', '63c3a83d1f33a', 'vcard', 'Arifur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-15 13:16:13', '2023-01-30 12:15:09', 'Arobil Limited', NULL, NULL, NULL, 'arifmahmud64@gmail.com', 'Work', 'assets/uploads/avatar/arifur-rahman-63c3b708d47dd.jpg', 'Web Developer', '2023-01-20 20:16:26', 1, 1, NULL, NULL, 1, 2, 2, 0),
(99, '63c779bee6a27', 109, '1', NULL, 'en', NULL, 'assets/uploads/avatar/moshiur-rahman-63c779bee6a9e.jpg', '63c779bee6a69', 'vcard', 'Moshiur Rahman', NULL, NULL, NULL, 'deactivate', '0', '2023-01-18 10:46:54', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, '01770802187', 'mo15103053@gmail.com', 'Work', NULL, 'Web Developer Inter', '2023-01-20 20:16:21', 1, NULL, NULL, NULL, 1, 2, 1, 0),
(100, '63c77af100fe7', 108, '1', NULL, 'en', 'assets/uploads/avatar/tanjim-tisha-63c7ed24647b8.png', 'assets/uploads/avatar/tanjim-tisha-63c77af101059.jpg', '63c77af101026', 'vcard', 'Tanjim Tisha', NULL, '', NULL, 'activated', '0', '2023-01-18 10:52:01', '2023-01-30 12:15:09', 'FDC', NULL, NULL, NULL, 'tisha@gmail.com', 'Work', NULL, 'Actress', NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 0),
(101, '63c782e1a7177', 110, '1', '#9B51E0', 'en', 'assets/uploads/avatar/moshiur-rahman-63c78b96e069f.png', 'assets/uploads/avatar/moshiur-rahman-63c782e1a71eb.jpg', '63c782e1a71b8', 'vcard', 'Moshiur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-18 11:25:53', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, NULL, 'moshiur2187@gmail.com', 'Work', 'assets/uploads/avatar/moshiur-rahman-63c78b96e0806.png', 'Web Developer Inter', '2023-01-20 20:40:52', 1, 1, 'Dhaka Bangladesh', 'Hello I am Moshiur Rahman Manik I am a Web Developer in Intern', 1, 1, 2, 0),
(102, '63c783d893ccc', 110, '1', '#219653', 'en', 'assets/uploads/avatar/moshiur-rahman-63c783d893fa5.png', 'assets/uploads/avatar/moshiur-rahman-63c783d893e56.png', '63c783d893ccc', 'vcard', 'Moshiur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-18 11:30:00', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, NULL, 'moshiur2187@gmail.com', 'Business Card', 'assets/uploads/avatar/moshiur-rahman-63c783d89402a.png', 'Web Developer Inter', '2023-01-20 20:40:22', 1, 1, 'Dhaka Bangladesh', 'I am Moshiur Rahman Manik, I am a web developer in intern', 1, 1, 3, 0),
(103, '63c795eb7f33f', 109, '1', '#2F80ED', 'en', 'assets/uploads/avatar/moshiur-rahman-63c795eb7f61f.png', 'assets/uploads/avatar/moshiur-rahman-63c795eb7f4cf.png', '63c795eb7f33f', 'vcard', 'Moshiur Rahman', NULL, '', NULL, 'deactivate', '0', '2023-01-18 12:47:07', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, NULL, 'mo15103053@gmail.com', 'Business Card', 'assets/uploads/avatar/moshiur-rahman-63c795eb7f708.png', 'Web Developer Inter', '2023-01-20 20:40:18', 1, NULL, 'Dhaka Bangladesh', 'Hi I am Moshiur Rahman Manik', 1, 1, 2, 0),
(104, '63c7a38c52953', 111, '1', NULL, 'en', NULL, 'assets/uploads/avatar/moshiur-rahman-63c7a38c529ca.jpg', '63c7a38c52995', 'vcard', 'Moshiur Rahman', NULL, NULL, NULL, 'activated', '0', '2023-01-18 13:45:16', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, '01770802187', 'moshiur@gmail.com', 'Work', NULL, 'Web Developer Intern', '2023-01-20 20:40:14', 1, 1, NULL, NULL, 1, 1, 2, 0),
(105, '63c7ae2555dbd', 112, '1', NULL, 'en', 'assets/uploads/avatar/arifur-rahman-63c7ae6567374.png', 'assets/uploads/avatar/arifur-rahman-63c7ae2555e30.jpg', '63c7ae2555dfd', 'vcard', 'Arifur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-18 14:30:29', '2023-01-30 12:15:09', 'Arobil Limited', NULL, NULL, NULL, 'arifmahmud64@gmail.com', 'Work', 'assets/uploads/avatar/arifur-rahman-63c7ae6567572.png', 'Web Developer', '2023-01-20 20:40:59', 1, NULL, NULL, NULL, 1, 2, 2, 0),
(106, '63c7afd8e6f9b', 113, '1', NULL, 'en', NULL, 'assets/uploads/avatar/md-manik-63c7afd8e700e.jpg', '63c7afd8e6fdb', 'vcard', 'Md Manik', NULL, NULL, NULL, 'activated', '0', '2023-01-18 14:37:44', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, '01770802187', 'moshiur2187@gmail.com', 'Work', NULL, 'Web developer', '2023-01-20 20:40:10', 1, 1, NULL, NULL, 1, 1, 2, 0),
(107, '63c7b0ce54cf5', 113, '1', '#2F80ED', 'en', 'assets/uploads/avatar/moshiur-rahman-63c7b0ce54fd2.png', 'assets/uploads/avatar/moshiur-rahman-63c7b0ce54e74.png', '63c7b0ce54cf5', 'vcard', 'Moshiur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-18 14:41:50', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, NULL, 'moshiur2187@gmail.com', 'Business Card', 'assets/uploads/avatar/moshiur-rahman-63c7b0ce5506f.png', 'Web developer', '2023-01-20 20:15:46', 1, 1, 'Dhaka Bangladesh', 'Hi I am Moshiur Rahman', 1, 1, 1, 0),
(108, '63c7d12982685', 72, '1', NULL, 'en', NULL, 'assets/uploads/avatar/riyad-63c7d129826fc.jpg', '63c7d129826c6', 'vcard', 'riyad', NULL, NULL, NULL, 'activated', '0', '2023-01-18 16:59:53', '2023-01-30 12:15:09', 'arobil ltd.', NULL, NULL, '01860141952', 'ziariyad@gmail.com', 'Work', NULL, 'Software Engineer', '2023-01-20 20:16:12', 1, NULL, NULL, NULL, 1, 1, 1, 0),
(109, '63c82a319ee0c', 114, '1', '#EB5757', 'en', NULL, 'assets/uploads/avatar/fabian-roman-63c82a319ee82.jpg', '63c82a319ee4c', 'vcard', 'Fabian Roman', NULL, '', NULL, 'activated', '0', '2023-01-18 23:19:45', '2023-01-30 12:15:09', 'Cliffco Mortgage Bankers', NULL, NULL, NULL, 'froman@cliffcomortgage.com', 'Work', NULL, 'VP Secondary & Operations', NULL, NULL, NULL, NULL, NULL, 1, 3, 1, 0),
(110, '63c847d64d625', 115, '1', NULL, 'en', NULL, 'assets/uploads/avatar/larisa-zambelli-63c847d64d6a0.jpg', '63c847d64d66a', 'vcard', 'Larisa Zambelli', NULL, NULL, NULL, 'activated', '0', '2023-01-19 01:26:14', '2023-01-30 12:15:09', 'Cliffco Mortgage Bankers', NULL, NULL, '6317429693', 'zambellilarisa1@gmail.com', 'Work', NULL, 'Loan Officer', NULL, NULL, NULL, NULL, NULL, 1, 2, 1, 0),
(111, '63c8b34ea5f9d', 116, '1', NULL, 'en', NULL, 'assets/uploads/avatar/rakib-63c8b34ea6012.jpg', '63c8b34ea5fde', 'vcard', 'Rakib', NULL, NULL, NULL, 'activated', '0', '2023-01-19 09:04:46', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, '8801767671133', 'rakib@gmail.com', 'Work', NULL, 'Developer', '2023-01-20 20:15:54', 1, NULL, NULL, NULL, 1, 1, 1, 0),
(112, '63c8ef43a6a93', 71, '1', '#F2C94C', 'en', 'assets/uploads/avatar/fsd-63c8ef43a6d2a.png', 'assets/uploads/avatar/fsd-63c8ef43a6c25.png', '63c8ef43a6a93', 'vcard', 'fsd', NULL, '', NULL, 'activated', '0', '2023-01-19 13:20:35', '2023-01-30 12:15:09', 'fsdf', NULL, NULL, NULL, 'ziariyad018@gmail.com', 'fsdfsdf', 'assets/uploads/avatar/fsd-63c8ef43a6e2b.png', 'sdfsd', '2023-01-20 20:16:08', 1, NULL, 'fdfsd', 'dfsdf', 1, 1, 1, 0),
(113, '63c8fe1ab8f70', 109, '1', '#2F80ED', 'en', 'assets/uploads/avatar/moshiur-rahman-63c8fe1ab9250.png', 'assets/uploads/avatar/moshiur-rahman-63c8fe1ab9102.png', '63c8fe1ab8f70', 'vcard', 'Moshiur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-19 14:23:54', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, NULL, 'mo15103053@gmail.com', 'Business Card', 'assets/uploads/avatar/moshiur-rahman-63c8fe1ab9360.png', 'Web Developer Intern', '2023-01-20 20:16:00', 1, NULL, 'Banani Model Town Dhaka', 'Hello There hi I am Moshiur Rahman Manik Web Developer intern at Arobil', 1, 2, 2, 0),
(114, '63c90d2b2fad3', 109, '1', '#9B51E0', 'en', 'assets/uploads/avatar/moshiur-rahman-63c90d2b2fdcf.png', 'assets/uploads/avatar/moshiur-rahman-63c90d2b2fc69.png', '63c90d2b2fad3', 'vcard', 'Moshiur Rahman', NULL, '', NULL, 'activated', '0', '2023-01-19 15:28:11', '2023-01-30 12:15:09', 'Arobil', NULL, NULL, NULL, 'mo15103053@gmail.com', 'Another Business car', 'assets/uploads/avatar/moshiur-rahman-63c90d2b2fe63.png', 'Web developer', '2023-01-20 20:15:57', 1, NULL, 'Dhaka Bangladesh', 'Hi there I am Moshiur Rahman Manik', 1, 3, 2, 0),
(115, '63caa8688dbd6', 78, '1', '#000', 'en', NULL, NULL, '63caa8688dbd6', 'vcard', 'Jagdeep', NULL, '', NULL, 'activated', '0', '2023-01-20 20:42:48', '2023-01-30 12:15:09', 'Cliffco', NULL, NULL, NULL, 'jagdeep.saini2704@gmail.com', 'My business Card', NULL, 'Processor', NULL, NULL, NULL, 'NY', NULL, 1, 2, 1, 0),
(116, '63cb3c97a6c5f', 117, '1', NULL, 'en', NULL, NULL, '63cb3c97a6c9e', 'vcard', 'DanYell Drummond', NULL, NULL, NULL, 'activated', '0', '2023-01-21 07:15:03', '2023-01-30 12:15:09', 'Company', NULL, NULL, '8014143603', 'danyelldrummond@gmail.com', 'Work', NULL, 'Consultant', NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 0),
(117, '63cc74b720213', 118, '1', NULL, 'en', NULL, NULL, '63cc74b720253', 'vcard', 'Elizabeth Burbige', NULL, NULL, NULL, 'activated', '0', '2023-01-22 05:26:47', '2023-01-30 12:15:09', 'Test', NULL, NULL, '3474561200', 'elizburbige@gmail.com', 'Work', NULL, 'Test', NULL, NULL, NULL, NULL, NULL, 1, 2, 1, 0),
(118, '63d0b75cc0d0f', 120, '1', NULL, 'en', NULL, 'assets/uploads/avatar/md-mridul-63d0b75cc0e59.jpg', '63d0b75cc0db9', 'vcard', 'Md Mridul', NULL, '', NULL, 'activated', '1', '2023-01-25 05:00:12', '2023-01-30 12:15:09', 'Arobil It', NULL, NULL, NULL, 'mdmridul608@gmail.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, 'While it\'s not hard to get a job as a web developer.', 1, 1, 1, 0),
(119, '63d75325d161e', 121, '1', NULL, 'en', NULL, 'assets/uploads/avatar/jone-doye-63d75325d1770.jpg', '63d75325d16b6', 'vcard', 'jone Doye', NULL, NULL, NULL, 'activated', '0', '2023-01-30 05:18:29', '2023-01-30 12:15:09', 'Arobil It', NULL, NULL, '1794798227', 'mdmridul6088@gmail.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, NULL, 1, 1, 2, 0);

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
  `position` int(10) UNSIGNED ZEROFILL NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_fields`
--

INSERT INTO `business_fields` (`id`, `card_id`, `type`, `icon`, `icon_image`, `icon_id`, `label`, `content`, `position`, `status`, `created_at`, `updated_at`) VALUES
(20, 66, 'username', 'twitter', 'assets/img/icon/custom_icon/322775612_1123025228376934_9165924068334459188_n-63b2bb383fc60.jpg', 2, 'Official1110', 'https://twitter.com/maidul1', 0000000001, '1', '2023-01-02 03:58:18', '2023-01-02 11:09:22'),
(22, 70, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Personal', 'maidulislah11110', 0000000001, '1', '2023-01-02 03:58:18', '2023-01-02 11:09:22'),
(23, 72, 'email', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jexoqo@mailinator.com', 0000000001, '1', '2023-01-04 14:19:37', '2023-01-04 14:19:37'),
(24, 73, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'user@gmail.com', 0000000001, '1', '2023-01-10 10:08:29', '2023-01-10 10:08:29'),
(25, 73, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/maidulislam.tech', 0000000002, '1', '2023-01-10 10:09:45', '2023-01-10 10:09:45'),
(26, 74, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'user@gmail.com', 0000000001, '1', '2023-01-10 11:42:00', '2023-01-10 11:42:00'),
(27, 75, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'user@gmail.com', 0000000001, '1', '2023-01-10 13:34:47', '2023-01-10 13:34:47'),
(28, 76, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'masud@gmail.com', 0000000001, '1', '2023-01-11 11:28:01', '2023-01-11 11:28:01'),
(29, 76, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/masudrana.tapu134/', 0000000002, '1', '2023-01-11 11:29:39', '2023-01-11 11:29:39'),
(30, 76, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01602307323', 0000000003, '1', '2023-01-11 11:30:00', '2023-01-11 11:30:00'),
(31, 76, 'link', 'linkedin', 'assets/img/icon/linkedin.svg', 3, 'Linkedin', 'https://www.linkedin.com/https://www.linkedin.com/in/masud-rana-tapu-23a498233/', 0000000004, '1', '2023-01-11 11:30:25', '2023-01-11 11:30:25'),
(32, 77, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'ziariyad018@gmail.com', 0000000001, '1', '2023-01-11 15:42:05', '2023-01-11 15:42:05'),
(34, 79, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'ziariyad018@gmail.com', 0000000001, '1', '2023-01-11 17:01:01', '2023-01-11 17:01:01'),
(35, 79, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01860141942', 0000000002, '1', '2023-01-11 17:01:26', '2023-01-11 17:01:26'),
(36, 80, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jr@mtgpro.me', 0000000001, '1', '2023-01-11 19:13:19', '2023-01-11 19:13:19'),
(37, 81, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'asasas@gmail.com', 0000000001, '1', '2023-01-11 19:32:58', '2023-01-11 19:32:58'),
(38, 82, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'MichaelMKelly@jourrapide.com', 0000000001, '1', '2023-01-11 19:39:57', '2023-01-11 19:39:57'),
(39, 83, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'JohnAKnox@dayrep.com', 0000000001, '1', '2023-01-11 19:43:09', '2023-01-11 19:43:09'),
(40, 84, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801918993427', 0000000001, '1', '2023-01-11 20:48:38', '2023-01-11 20:48:38'),
(41, 84, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'sakib@gmail.com', 0000000002, '1', '2023-01-11 20:48:38', '2023-01-11 20:48:38'),
(42, 84, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/maidulislam.tech', 0000000003, '1', '2023-01-11 20:50:59', '2023-01-11 20:50:59'),
(43, 84, 'mobile', 'number', 'assets/img/icon/number.svg', 28, 'Number', '+8801781631681', 0000000004, '1', '2023-01-11 20:51:18', '2023-01-11 20:51:18'),
(44, 85, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '5165349095', 0000000001, '1', '2023-01-11 22:43:16', '2023-01-11 22:43:16'),
(45, 85, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jsingh@cliffcomortgage.com', 0000000002, '1', '2023-01-11 22:43:16', '2023-01-11 22:44:47'),
(49, 80, 'link', 'instagram', 'assets/img/icon/instagram.svg', 7, 'Instagram', 'https://www.instagram.com/_mtgpro.me/', 0000000004, '1', '2023-01-12 03:36:36', '2023-01-18 21:06:12'),
(50, 80, 'mobile', 'facetime', 'assets/img/icon/facetime.svg', 23, 'Face Time', '5162973389', 0000000005, '1', '2023-01-12 03:43:39', '2023-01-12 13:52:54'),
(51, 80, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '15162973389', 0000000006, '1', '2023-01-12 03:43:54', '2023-01-12 03:43:54'),
(52, 86, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jr@mtgpro.me', 0000000001, '1', '2023-01-12 03:47:30', '2023-01-12 03:47:30'),
(53, 80, '', 'number', 'assets/img/icon/number.svg', 28, 'Text me!', '5162973389', 0000000007, '1', '2023-01-12 13:55:33', '2023-01-12 13:55:33'),
(54, 80, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '5162973389', 0000000008, '1', '2023-01-12 13:56:31', '2023-01-12 13:56:31'),
(60, 83, 'link', 'youtube', 'assets/img/icon/youtube.svg', 44, 'Youtube', 'https://www.youtube.com/', 0000000002, '1', '2023-01-12 20:01:46', '2023-01-12 20:01:46'),
(61, 83, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01710788656', 0000000003, '1', '2023-01-12 20:02:02', '2023-01-12 20:02:02'),
(62, 83, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '01711103662', 0000000004, '1', '2023-01-12 20:02:11', '2023-01-12 20:02:11'),
(63, 83, 'link', 'Website', 'assets/img/icon/safari.svg', 51, 'Website', 'http://arobil.com/', 0000000005, '1', '2023-01-12 20:02:30', '2023-01-12 20:02:30'),
(64, 83, 'username', 'twitter', 'assets/img/icon/twitter.svg', 2, 'Twitter', 'https://twitter.com/arifurrahmansw', 0000000006, '1', '2023-01-12 20:02:55', '2023-01-12 20:02:55'),
(65, 83, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'arifmahmud64@gmail.com', 0000000007, '1', '2023-01-12 20:03:55', '2023-01-12 20:03:55'),
(66, 83, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'https://goo.gl/maps/2tWaL48ubHu8q2VW9', 0000000008, '1', '2023-01-12 20:05:02', '2023-01-12 20:05:02'),
(67, 83, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/arifurrahmansw', 0000000009, '1', '2023-01-12 20:05:17', '2023-01-12 20:05:17'),
(68, 83, 'link', 'linktree', 'assets/img/icon/linktree.svg', 26, 'Linktree', 'https://www.linktree.com/', 0000000010, '1', '2023-01-12 20:05:47', '2023-01-12 20:05:47'),
(69, 83, 'link', 'linkedin', 'assets/img/icon/linkedin.svg', 3, 'Linkedin', 'https://www.linkedin.com/', 0000000010, '1', '2023-01-12 20:06:00', '2023-01-12 20:06:00'),
(71, 88, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01681944126', 0000000001, '1', '2023-01-12 21:03:39', '2023-01-12 21:03:39'),
(72, 88, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'Md_Maidul_Islam@gmail.com', 0000000002, '1', '2023-01-12 21:03:39', '2023-01-12 21:03:39'),
(73, 89, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01253866', 0000000001, '1', '2023-01-14 11:02:54', '2023-01-14 11:02:54'),
(74, 89, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'arobil@gmail.com', 0000000002, '1', '2023-01-14 11:02:54', '2023-01-14 11:02:54'),
(75, 90, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '058578411', 0000000001, '1', '2023-01-14 12:09:19', '2023-01-14 12:09:19'),
(76, 90, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'abir@gmail.com', 0000000002, '1', '2023-01-14 12:09:19', '2023-01-14 12:09:19'),
(85, 94, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801681944126', 0000000001, '0', '2023-01-14 20:41:11', '2023-01-14 20:41:11'),
(86, 94, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'kamrul@gmail.com', 0000000002, '0', '2023-01-14 20:41:11', '2023-01-14 20:41:11'),
(87, 95, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '5162973389', 0000000001, '1', '2023-01-15 10:26:59', '2023-01-15 10:26:59'),
(88, 95, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jr@nonqmdoc.com', 0000000002, '1', '2023-01-15 10:26:59', '2023-01-15 10:26:59'),
(89, 96, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '0127485585', 0000000001, '0', '2023-01-15 11:03:58', '2023-01-15 11:03:58'),
(90, 96, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'ajim@gmail.com', 0000000002, '0', '2023-01-15 11:03:58', '2023-01-15 11:03:58'),
(93, 98, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801710788656', 0000000001, '0', '2023-01-15 13:16:13', '2023-01-18 14:29:40'),
(94, 98, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'arifmahmud64@gmail.com', 0000000002, '0', '2023-01-15 13:16:13', '2023-01-18 14:29:40'),
(95, 98, 'link', 'linkedin', 'assets/img/icon/linkedin.svg', 3, 'Linkedin', 'https://www.linkedin.com/in/arifurrahmansw', 0000000003, '0', '2023-01-15 14:48:45', '2023-01-18 14:29:40'),
(96, 98, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '01515232821', 0000000004, '0', '2023-01-15 14:48:53', '2023-01-18 14:29:40'),
(97, 98, 'username', 'twitter', 'assets/img/icon/twitter.svg', 2, 'Twitter', 'https://twitter.com/arifurrahmansw', 0000000005, '0', '2023-01-15 14:49:04', '2023-01-18 14:29:40'),
(98, 98, 'username', 'twitter', 'assets/img/icon/twitter.svg', 2, 'Twitter', 'https://twitter.com/arif01710', 0000000006, '0', '2023-01-15 14:49:13', '2023-01-18 14:29:40'),
(99, 98, 'username', 'pinterest', 'assets/img/icon/pinterest.svg', 4, 'Pinterest', 'https://www.pinterest.com/arif01710', 0000000007, '0', '2023-01-15 14:49:21', '2023-01-18 14:29:40'),
(100, 98, 'link', 'Website', 'assets/img/icon/safari.svg', 51, 'Website', 'https://arobil.com/', 0000000008, '0', '2023-01-15 14:49:49', '2023-01-18 14:29:40'),
(101, 76, 'username', 'Venmo.com', 'assets/img/icon/venmo.svg', 50, 'Venmo', 'https://venmo.com/masudranatapu', 0000000005, '1', '2023-01-16 18:35:20', '2023-01-16 18:35:20'),
(102, 76, 'number', 'zelle', 'assets/img/icon/zelle.svg', 45, 'Zelle', 'https://www.zellepay.com/', 0000000006, '1', '2023-01-16 18:35:38', '2023-01-16 18:35:38'),
(103, 76, 'link', 'youtube', 'assets/img/icon/youtube.svg', 44, 'Youtube', 'https://youtube.com', 0000000007, '1', '2023-01-16 18:36:10', '2023-01-16 18:36:10'),
(104, 76, 'link', 'yelp', 'assets/img/icon/yelp.svg', 43, 'Yelp', 'https://www.yelp.com/', 0000000008, '1', '2023-01-16 18:36:34', '2023-01-16 18:36:34'),
(105, 76, 'username', 'twitch', 'assets/img/icon/twitch.svg', 40, 'Twitch', 'https://www.twitch.tv/masudranatapu', 0000000009, '1', '2023-01-16 18:36:53', '2023-01-16 18:36:53'),
(106, 76, 'username', 'tiktok', 'assets/img/icon/tiktok.svg', 39, 'Tiktok', 'https://tiktok.com/masudranatapu', 0000000010, '1', '2023-01-16 18:37:00', '2023-01-16 18:37:00'),
(107, 76, 'link', 'telegram', 'assets/img/icon/telegram.svg', 38, 'Telegram', 'https://www.telegram.com/masud.rana.tapu', 0000000010, '1', '2023-01-16 18:37:24', '2023-01-16 18:37:24'),
(108, 76, 'link', 'square', 'assets/img/icon/square.svg', 37, 'Square', 'https://squareup.com/https://www.square.com/masud.rana.tapu', 0000000010, '1', '2023-01-16 18:37:41', '2023-01-16 18:37:41'),
(109, 76, 'link', 'spotify', 'assets/img/icon/spotify.svg', 36, 'Spotify', 'https://open.spotify.com/https://www.spotify.com/masud.rana.tapu', 0000000010, '1', '2023-01-16 18:37:56', '2023-01-16 18:37:56'),
(110, 76, 'username', 'soundcloud', 'assets/img/icon/soundcloud.svg', 35, 'Soundcloud', 'https://soundcloud.com/masudranatapu', 0000000010, '1', '2023-01-16 18:38:06', '2023-01-16 18:38:06'),
(111, 76, 'username', 'snapchat', 'assets/img/icon/snapchat.svg', 34, 'Snapchat', 'https://www.snapchat.com/masudranatapu', 0000000010, '1', '2023-01-16 18:38:17', '2023-01-16 18:38:17'),
(112, 76, 'link', 'safari', 'assets/img/icon/safari.svg', 33, 'Safari', 'https://www.safari.com/masudrana.tapu', 0000000010, '1', '2023-01-16 18:38:31', '2023-01-16 18:38:31'),
(113, 76, 'link', 'Reviews', 'assets/img/icon/reviews.svg', 32, 'Reviews', 'https://www.reviews.com/masudranatapu', 0000000010, '1', '2023-01-16 18:38:50', '2023-01-16 18:38:50'),
(114, 76, 'link', 'podcasts', 'assets/img/icon/podcasts.svg', 31, 'Podcasts', 'https://podcastsconnect.apple.com/https://www.podcasts.com/masudranatapu', 0000000010, '1', '2023-01-16 18:39:09', '2023-01-16 18:39:09'),
(115, 76, 'link', 'opensea', 'assets/img/icon/opensea_color.svg', 29, 'OpenSea', 'https://www.opensea.com/masudranatapu', 0000000010, '1', '2023-01-16 18:39:25', '2023-01-16 18:39:25'),
(116, 76, 'link', 'linktree', 'assets/img/icon/linktree.svg', 26, 'Linktree', 'https://www.linktree.com/masudranatapu', 0000000010, '1', '2023-01-16 18:42:51', '2023-01-16 18:42:51'),
(117, 76, 'link', 'file', 'assets/img/icon/file.svg', 24, 'File', 'https://www.file.com/masudranatapu', 0000000010, '1', '2023-01-16 18:43:12', '2023-01-16 18:43:12'),
(118, 76, 'mobile', 'facetime', 'assets/img/icon/facetime.svg', 23, 'Face Time', 'masudranatapu', 0000000010, '1', '2023-01-16 18:43:21', '2023-01-16 18:43:21'),
(119, 76, 'link', 'etsy', 'assets/img/icon/etsy.svg', 22, 'Etsy', 'https://www.etsy.com/masudranatapu', 0000000010, '1', '2023-01-16 18:43:37', '2023-01-16 18:43:37'),
(120, 76, 'link', 'dropdown', 'assets/img/icon/dropDown.svg', 20, 'DropDown', 'https://www.dropdown.com/masudranatapu', 0000000010, '1', '2023-01-16 18:46:26', '2023-01-16 18:46:26'),
(121, 76, 'link', 'discord', 'assets/img/icon/discord.svg', 19, 'Discord', 'https://www.discord.com/masudranatapu', 0000000010, '1', '2023-01-16 18:46:37', '2023-01-16 18:46:37'),
(122, 76, 'link', 'customlink', 'assets/img/icon/customlink.svg', 18, 'Custom Link', 'https://www.zellepay.com/', 0000000010, '1', '2023-01-16 18:46:43', '2023-01-16 18:46:43'),
(124, 76, 'link', 'clubhouse', 'assets/img/icon/clubhouse.svg', 16, 'Clubhouse', 'https://www.clubhouse.com/masudranatapu', 0000000010, '1', '2023-01-16 18:47:16', '2023-01-16 18:47:16'),
(125, 76, 'username', 'cashapp', 'assets/img/icon/cashapp.svg', 15, 'Cash App', 'https://cash.app/masudranatapu', 0000000010, '1', '2023-01-16 18:47:30', '2023-01-16 18:47:30'),
(126, 76, 'link', 'calendly', 'assets/img/icon/calendly.svg', 14, 'Calendly', 'https://www.calendly.com/masudranatapu', 0000000010, '1', '2023-01-16 18:47:43', '2023-01-16 18:47:43'),
(127, 76, 'link', 'booksy', 'assets/img/icon/booksy.svg', 13, 'Booksy', 'https://www.booksy.com/masudranatapu', 0000000010, '1', '2023-01-16 18:48:10', '2023-01-16 18:48:10'),
(128, 76, 'link', 'app_link', 'assets/img/icon/app_link.svg', 11, 'App Link', 'https://www.applink.com/', 0000000010, '1', '2023-01-16 18:49:01', '2023-01-16 18:49:01'),
(129, 76, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'KB Road, Konabari, Gazipur, Dhaka, Bangladesh', 0000000010, '1', '2023-01-16 18:49:34', '2023-01-16 18:49:34'),
(130, 76, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '014785823690', 0000000010, '1', '2023-01-16 18:49:41', '2023-01-16 18:49:41'),
(131, 76, 'username', 'instagram', 'assets/img/icon/instagram.svg', 7, 'Instagram', 'https://www.instagram.com/masudranatapu', 0000000010, '1', '2023-01-16 18:49:48', '2023-01-16 18:49:48'),
(132, 76, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/masudranatapu', 0000000010, '1', '2023-01-16 18:50:08', '2023-01-16 18:50:08'),
(133, 76, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'masudranatapu@gmail.copm', 0000000010, '1', '2023-01-16 18:50:17', '2023-01-16 18:50:17'),
(134, 76, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '+8801710788656', 0000000010, '1', '2023-01-16 18:50:27', '2023-01-17 11:21:20'),
(135, 76, 'username', 'pinterest', 'assets/img/icon/pinterest.svg', 4, 'Pinterest', 'https://www.pinterest.com/masudranatapu', 0000000010, '1', '2023-01-16 18:50:31', '2023-01-16 18:50:31'),
(136, 76, 'link', 'linkedin', 'assets/img/icon/linkedin.svg', 3, 'Linkedin', 'https://www.linkedin.com/masudranatapu', 0000000010, '1', '2023-01-16 18:50:42', '2023-01-16 18:50:42'),
(137, 76, 'username', 'twitter', 'assets/img/icon/twitter.svg', 2, 'Twitter', 'https://twitter.com/https://www.witter.com/masudranatapu', 0000000010, '1', '2023-01-16 18:50:53', '2023-01-16 18:50:53'),
(138, 76, 'link', 'apple', 'assets/img/icon/apple.svg', 12, 'Apple', 'https://www.apple.com/masudranatapu', 0000000010, '1', '2023-01-16 18:51:20', '2023-01-16 18:51:20'),
(139, 76, 'link', 'paypal', 'assets/img/icon/paypal.svg', 30, 'Paypal', 'https://www.paypal.mehttps://www.paypal.com/masudranatapu', 0000000010, '1', '2023-01-16 18:51:32', '2023-01-16 18:51:32'),
(140, 76, 'link', 'Featured', 'assets/img/icon/featured.svg', 52, 'Featured', 'https://www.featured.com/masudranatapu', 0000000010, '1', '2023-01-16 18:51:50', '2023-01-16 18:51:50'),
(141, 76, 'link', 'Website', 'assets/img/icon/safari.svg', 51, 'Website', 'https://masudranatapu.com', 0000000010, '1', '2023-01-16 18:52:05', '2023-01-16 18:52:05'),
(142, 76, 'link', 'hoobe', 'assets/img/icon/hoobe.svg', 25, 'Hoobe', 'https://www.hoobe.com/masudranatapu', 0000000010, '1', '2023-01-16 18:52:18', '2023-01-16 18:52:18'),
(143, 76, 'text', 'Text Section', 'assets/img/icon/textSection.svg', 8, 'Text Section', 'Hi, I am masud rana tapu', 0000000010, '1', '2023-01-16 18:52:32', '2023-01-16 18:52:32'),
(144, 76, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213', 0000000010, '1', '2023-01-17 11:23:48', '2023-01-17 11:23:48'),
(146, 99, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01770802187', 0000000001, '0', '2023-01-18 10:46:54', '2023-01-18 10:46:54'),
(147, 99, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'mo15103053@gmail.com', 0000000002, '0', '2023-01-18 10:46:54', '2023-01-18 10:46:54'),
(148, 100, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801681944126', 0000000001, '1', '2023-01-18 10:52:01', '2023-01-18 10:52:01'),
(149, 100, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'tisha@gmail.com', 0000000002, '1', '2023-01-18 10:52:01', '2023-01-18 10:52:01'),
(150, 101, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01770802187', 0000000001, '0', '2023-01-18 11:25:53', '2023-01-18 12:31:57'),
(151, 101, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'moshiur2187@gmail.com', 0000000002, '0', '2023-01-18 11:25:53', '2023-01-18 12:31:57'),
(152, 102, 'email', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'https://www.google.com/', 0000000001, '0', '2023-01-18 11:30:00', '2023-01-18 12:31:57'),
(153, 102, 'link', 'telegram', 'assets/img/icon/telegram.svg', 38, 'Telegram', 'https://www.google.com/', 0000000002, '0', '2023-01-18 11:39:28', '2023-01-18 12:31:57'),
(154, 101, 'link', 'Reviews', 'assets/img/icon/reviews.svg', 32, 'Google', 'https://www.google.com/', 0000000003, '0', '2023-01-18 11:55:58', '2023-01-18 12:31:57'),
(155, 103, 'email', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'mo15103053@gmail.com', 0000000001, '0', '2023-01-18 12:47:07', '2023-01-18 12:47:07'),
(156, 103, 'link', 'telegram', 'assets/img/icon/telegram.svg', 38, 'Telegram', 'https://web.telegram.org/k/', 0000000002, '0', '2023-01-18 12:47:53', '2023-01-18 12:47:53'),
(157, 104, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01770802187', 0000000001, '0', '2023-01-18 13:45:16', '2023-01-18 14:08:55'),
(158, 104, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'moshiur@gmail.com', 0000000002, '0', '2023-01-18 13:45:16', '2023-01-18 14:08:55'),
(159, 105, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801710788656', 0000000001, '0', '2023-01-18 14:30:29', '2023-01-18 14:30:29'),
(160, 105, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'arifmahmud64@gmail.com', 0000000002, '0', '2023-01-18 14:30:29', '2023-01-18 14:30:29'),
(161, 106, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01770802187', 0000000001, '0', '2023-01-18 14:37:44', '2023-01-18 14:55:04'),
(162, 106, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'moshiur2187@gmail.com', 0000000002, '0', '2023-01-18 14:37:44', '2023-01-18 14:55:04'),
(163, 107, 'email', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'moshiur2187@gmail.com', 0000000001, '0', '2023-01-18 14:41:50', '2023-01-18 14:55:04'),
(164, 107, 'number', 'wechat', 'assets/img/icon/wechat.svg', 42, 'Wechat', '01770802187', 0000000002, '0', '2023-01-18 14:42:25', '2023-01-18 14:55:04'),
(165, 108, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01860141952', 0000000001, '0', '2023-01-18 16:59:53', '2023-01-18 16:59:53'),
(166, 108, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'ziariyad@gmail.com', 0000000002, '0', '2023-01-18 16:59:53', '2023-01-18 16:59:53'),
(167, 100, 'link', 'embeddedvideo', 'assets/img/icon/embeddedvideo.svg', 21, 'Video', 'https://www.youtube.com/embed/zlJDTxahav0', 0000000003, '1', '2023-01-18 18:16:19', '2023-01-18 18:16:19'),
(168, 80, 'link', 'Website', 'assets/img/icon/safari.svg', 51, 'MTGPro.me', 'https://www.mtgpro.me/', 0000000009, '1', '2023-01-18 21:01:30', '2023-01-18 21:01:30'),
(169, 80, 'link', 'Website', 'assets/img/icon/custom_icon/mtg-01-63c80a1b17c41.jpg', 51, 'MTGPRO', 'https://www.mtgpro.me/', 0000000010, '1', '2023-01-18 21:02:51', '2023-01-18 21:02:51'),
(170, 109, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '5169988146', 0000000001, '1', '2023-01-18 23:19:45', '2023-01-18 23:19:45'),
(171, 109, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'froman@cliffcomortgage.com', 0000000002, '1', '2023-01-18 23:19:45', '2023-01-18 23:19:45'),
(172, 109, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/fabian.roman.7121', 0000000003, '1', '2023-01-18 23:20:40', '2023-01-18 23:20:40'),
(173, 110, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '6317429693', 0000000001, '1', '2023-01-19 01:26:14', '2023-01-19 01:26:14'),
(174, 110, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'zambellilarisa1@gmail.com', 0000000002, '1', '2023-01-19 01:26:14', '2023-01-19 01:26:14'),
(175, 111, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8801767671133', 0000000001, '0', '2023-01-19 09:04:46', '2023-01-19 09:04:46'),
(176, 111, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'rakib@gmail.com', 0000000002, '0', '2023-01-19 09:04:46', '2023-01-19 09:04:46'),
(177, 112, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'ziariyad018@gmail.com', 0000000001, '0', '2023-01-19 13:20:35', '2023-01-19 13:20:35'),
(178, 112, 'link', 'youtube', 'assets/img/icon/youtube.svg', 44, 'Youtube', 'https://flsjldfls.com', 0000000002, '0', '2023-01-19 13:21:06', '2023-01-19 13:21:06'),
(179, 113, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'moshiur2187@gmail.com', 0000000000, '0', '2023-01-19 14:23:54', '2023-01-19 14:42:15'),
(180, 113, 'link', 'youtube', 'assets/img/icon/youtube.svg', 44, 'Youtube', 'https://youtu.be/7-0kxFGgMgo', 0000000001, '0', '2023-01-19 14:29:33', '2023-01-19 14:29:33'),
(181, 113, 'link', 'facebook', 'assets/img/icon/facebook.svg', 1, 'Facebook', 'https://www.facebook.com/', 0000000002, '0', '2023-01-19 14:30:26', '2023-01-19 14:30:26'),
(182, 113, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'Banani, Dhaka', 0000000040, '0', '2023-01-19 14:32:41', '2023-01-19 17:22:10'),
(183, 113, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'https://goo.gl/maps/qbenWWvEbfEYdTQy6', 0000000041, '0', '2023-01-19 14:32:41', '2023-01-19 14:32:41'),
(184, 113, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '01770802187', 0000000042, '0', '2023-01-19 14:33:09', '2023-01-19 14:33:09'),
(185, 113, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01770802187', 0000000043, '0', '2023-01-19 14:33:25', '2023-01-19 14:33:25'),
(186, 113, 'username', 'instagram', 'assets/img/icon/instagram.svg', 7, 'Instagram', 'moshiur_rahman_manik', 0000000044, '0', '2023-01-19 14:34:39', '2023-01-19 14:34:39'),
(187, 113, 'link', 'linkedin', 'assets/img/icon/linkedin.svg', 3, 'Linkedin', 'https://www.linkedin.com/in/moshiur-rahman-1385141a6', 0000000045, '0', '2023-01-19 14:35:58', '2023-01-19 14:35:58'),
(188, 113, 'link', 'Reviews', 'assets/img/icon/reviews.svg', 32, 'Reviews', 'https://www.google.com/', 0000000046, '0', '2023-01-19 14:38:31', '2023-01-19 14:38:31'),
(189, 113, 'link', 'telegram', 'assets/img/icon/telegram.svg', 38, 'Telegram', 'https://web.telegram.org/k/', 0000000003, '0', '2023-01-19 14:39:12', '2023-01-19 14:39:12'),
(190, 113, 'username', 'Venmo.com', 'assets/img/icon/venmo.svg', 50, 'Venmo', 'moshiur_rahman_manik', 0000000004, '0', '2023-01-19 15:07:26', '2023-01-19 15:07:26'),
(191, 113, 'number', 'zelle', 'assets/img/icon/zelle.svg', 45, 'Zelle', '01770802187', 0000000005, '0', '2023-01-19 15:07:38', '2023-01-19 15:07:38'),
(192, 113, 'link', 'yelp', 'assets/img/icon/yelp.svg', 43, 'Yelp', 'https://youtu.be/7-0kxFGgMgo', 0000000006, '0', '2023-01-19 15:07:59', '2023-01-19 15:07:59'),
(193, 113, 'number', 'wechat', 'assets/img/icon/wechat.svg', 42, 'Wechat', '01770802187', 0000000007, '0', '2023-01-19 15:08:04', '2023-01-19 15:08:04'),
(194, 113, 'username', 'twitch', 'assets/img/icon/twitch.svg', 40, 'Twitch', 'moshiur_rahman_manik', 0000000008, '0', '2023-01-19 15:08:13', '2023-01-19 15:08:13'),
(195, 113, 'username', 'tiktok', 'assets/img/icon/tiktok.svg', 39, 'Tiktok', 'moshiur_rahman_manik', 0000000009, '0', '2023-01-19 15:08:20', '2023-01-19 15:08:20'),
(196, 113, 'link', 'square', 'assets/img/icon/square.svg', 37, 'Square', 'https://youtu.be/7-0kxFGgMgo', 0000000010, '0', '2023-01-19 15:08:31', '2023-01-19 15:08:31'),
(197, 113, 'link', 'spotify', 'assets/img/icon/spotify.svg', 36, 'Spotify', 'https://youtu.be/7-0kxFGgMgo', 0000000011, '0', '2023-01-19 15:08:42', '2023-01-19 15:08:42'),
(198, 113, 'username', 'soundcloud', 'assets/img/icon/soundcloud.svg', 35, 'Soundcloud', 'moshiur_rahman_manik', 0000000012, '0', '2023-01-19 15:08:50', '2023-01-19 15:08:50'),
(199, 113, 'username', 'snapchat', 'assets/img/icon/snapchat.svg', 34, 'Snapchat', 'moshiur_rahman_manik', 0000000013, '0', '2023-01-19 15:10:26', '2023-01-19 15:10:26'),
(200, 113, 'link', 'safari', 'assets/img/icon/safari.svg', 33, 'Safari', 'https://youtu.be/7-0kxFGgMgo', 0000000014, '0', '2023-01-19 15:12:20', '2023-01-19 15:12:20'),
(201, 113, 'link', 'Reviews', 'assets/img/icon/reviews.svg', 32, 'Reviews', 'https://youtu.be/7-0kxFGgMgo', 0000000015, '0', '2023-01-19 15:13:00', '2023-01-19 15:13:00'),
(202, 113, 'link', 'podcasts', 'assets/img/icon/podcasts.svg', 31, 'Podcasts', 'https://youtu.be/7-0kxFGgMgo', 0000000016, '0', '2023-01-19 15:13:29', '2023-01-19 15:13:29'),
(203, 113, 'link', 'opensea', 'assets/img/icon/opensea_color.svg', 29, 'OpenSea', 'https://youtu.be/7-0kxFGgMgo', 0000000017, '0', '2023-01-19 15:14:03', '2023-01-19 15:14:03'),
(204, 113, 'link', 'mediakits', 'assets/img/icon/mediakits.svg', 27, 'Mediakits', 'https://youtu.be/7-0kxFGgMgo', 0000000018, '0', '2023-01-19 15:14:29', '2023-01-19 15:14:29'),
(205, 113, 'link', 'linktree', 'assets/img/icon/linktree.svg', 26, 'Linktree', 'https://youtu.be/7-0kxFGgMgo', 0000000019, '0', '2023-01-19 15:14:38', '2023-01-19 15:14:38'),
(206, 113, 'link', 'file', 'assets/img/icon/file.svg', 24, 'File', 'https://youtu.be/7-0kxFGgMgo', 0000000020, '0', '2023-01-19 15:14:44', '2023-01-19 15:14:44'),
(207, 113, 'mobile', 'facetime', 'assets/img/icon/facetime.svg', 23, 'Face Time', '01770802187', 0000000021, '0', '2023-01-19 15:15:01', '2023-01-19 15:15:01'),
(208, 113, 'link', 'etsy', 'assets/img/icon/etsy.svg', 22, 'Etsy', 'https://youtu.be/7-0kxFGgMgo', 0000000022, '0', '2023-01-19 15:15:09', '2023-01-19 15:15:09'),
(209, 113, 'link', 'embeddedvideo', 'assets/img/icon/embeddedvideo.svg', 21, 'Your video', 'https://www.youtube.com/embed/xVDG_HLpvqM', 0000000047, '0', '2023-01-19 15:15:19', '2023-01-19 19:41:54'),
(210, 113, 'link', 'dropdown', 'assets/img/icon/dropDown.svg', 20, 'DropDown', 'https://youtu.be/7-0kxFGgMgo', 0000000023, '0', '2023-01-19 15:15:25', '2023-01-19 15:15:25'),
(211, 113, 'link', 'discord', 'assets/img/icon/discord.svg', 19, 'Discord', 'https://youtu.be/7-0kxFGgMgo', 0000000024, '0', '2023-01-19 15:15:35', '2023-01-19 15:15:35'),
(212, 113, 'link', 'customlink', 'assets/img/icon/customlink.svg', 18, 'Custom Link', 'https://youtu.be/7-0kxFGgMgo', 0000000025, '0', '2023-01-19 15:15:40', '2023-01-19 15:15:40'),
(214, 113, 'link', 'clubhouse', 'assets/img/icon/clubhouse.svg', 16, 'Clubhouse', 'https://youtu.be/7-0kxFGgMgo', 0000000026, '0', '2023-01-19 15:16:06', '2023-01-19 15:16:06'),
(215, 113, 'username', 'cashapp', 'assets/img/icon/cashapp.svg', 15, 'Cash App', 'moshiur_rahman_manik', 0000000027, '0', '2023-01-19 15:16:18', '2023-01-19 15:16:18'),
(216, 113, 'username', 'cashapp', 'assets/img/icon/cashapp.svg', 15, 'Cash App', 'moshiur_rahman_manik', 0000000028, '0', '2023-01-19 15:16:51', '2023-01-19 15:16:51'),
(217, 113, 'link', 'calendly', 'assets/img/icon/calendly.svg', 14, 'Calendly', 'https://youtu.be/7-0kxFGgMgo', 0000000029, '0', '2023-01-19 15:16:59', '2023-01-19 15:16:59'),
(218, 113, 'link', 'booksy', 'assets/img/icon/booksy.svg', 13, 'Booksy', 'https://youtu.be/7-0kxFGgMgo', 0000000030, '0', '2023-01-19 15:17:06', '2023-01-19 15:17:06'),
(219, 113, 'link', 'app_link', 'assets/img/icon/app_link.svg', 11, 'App Link', 'https://youtu.be/7-0kxFGgMgo', 0000000031, '0', '2023-01-19 15:17:29', '2023-01-19 15:17:29'),
(220, 113, 'link', 'app_link', 'assets/img/icon/app_link.svg', 11, 'App Link', 'https://youtu.be/7-0kxFGgMgo', 0000000032, '0', '2023-01-19 15:17:41', '2023-01-19 15:17:41'),
(221, 113, 'username', 'pinterest', 'assets/img/icon/pinterest.svg', 4, 'Pinterest', 'moshiur_rahman_manik', 0000000033, '0', '2023-01-19 15:18:27', '2023-01-19 15:18:27'),
(222, 113, 'link', 'apple', 'assets/img/icon/apple.svg', 12, 'Apple Music', 'https://youtu.be/7-0kxFGgMgo', 0000000034, '0', '2023-01-19 15:18:36', '2023-01-19 15:18:36'),
(223, 113, 'link', 'paypal', 'assets/img/icon/paypal.svg', 30, 'Paypal', 'https://youtu.be/7-0kxFGgMgo', 0000000035, '0', '2023-01-19 15:18:43', '2023-01-19 15:18:43'),
(224, 113, 'link', 'Featured', 'assets/img/icon/featured.svg', 52, 'Featured', 'https://youtu.be/7-0kxFGgMgo', 0000000036, '0', '2023-01-19 15:18:51', '2023-01-19 15:18:51'),
(225, 113, 'link', 'Website', 'assets/img/icon/safari.svg', 51, 'Website', 'https://youtu.be/7-0kxFGgMgo', 0000000037, '0', '2023-01-19 15:18:56', '2023-01-19 15:18:56'),
(226, 113, 'link', 'hoobe', 'assets/img/icon/hoobe.svg', 25, 'Hoobe', 'https://youtu.be/7-0kxFGgMgo', 0000000038, '0', '2023-01-19 15:19:02', '2023-01-19 15:19:02'),
(227, 113, 'link', 'hoobe', 'assets/img/icon/hoobe.svg', 25, 'Hoobe', 'https://youtu.be/7-0kxFGgMgo', 0000000039, '0', '2023-01-19 15:19:02', '2023-01-19 15:19:02'),
(228, 113, 'text', 'Text Section', 'assets/img/icon/textSection.svg', 8, 'Text Section', 'https://youtu.be/7-0kxFGgMgo', 0000000049, '0', '2023-01-19 15:19:06', '2023-01-19 15:19:06'),
(229, 114, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'moshiur2187@gmail.com', 0000000001, '0', '2023-01-19 15:28:11', '2023-01-19 15:29:07'),
(230, 114, 'username', 'Venmo.com', 'assets/img/icon/venmo.svg', 50, 'Venmo', 'manik15103053', 0000000002, '0', '2023-01-19 15:30:06', '2023-01-19 15:30:06'),
(231, 114, 'mail', 'email', 'assets/img/icon/email.svg', 46, 'Email', 'moshiur2187@gmail.com', 0000000003, '0', '2023-01-19 15:30:19', '2023-01-19 15:30:19'),
(232, 114, 'number', 'zelle', 'assets/img/icon/zelle.svg', 45, 'Zelle', 'manik15103053', 0000000004, '0', '2023-01-19 15:30:28', '2023-01-19 15:30:28'),
(233, 114, 'link', 'youtube', 'assets/img/icon/youtube.svg', 44, 'Youtube', 'https://youtu.be/hj32fj9BIw4', 0000000005, '0', '2023-01-19 15:31:33', '2023-01-19 15:31:33'),
(234, 114, 'link', 'yelp', 'assets/img/icon/yelp.svg', 43, 'Yelp', 'https://youtu.be/hj32fj9BIw4', 0000000006, '0', '2023-01-19 15:31:53', '2023-01-19 15:31:53'),
(235, 114, 'number', 'wechat', 'assets/img/icon/wechat.svg', 42, 'Wechat', '01770802187', 0000000007, '0', '2023-01-19 15:32:03', '2023-01-19 15:32:03'),
(236, 114, 'username', 'twitch', 'assets/img/icon/twitch.svg', 40, 'Twitch', 'manik15103053', 0000000008, '0', '2023-01-19 15:32:13', '2023-01-19 15:32:13'),
(237, 114, 'link', 'telegram', 'assets/img/icon/telegram.svg', 38, 'Telegram', 'https://youtu.be/hj32fj9BIw4', 0000000009, '0', '2023-01-19 15:32:28', '2023-01-19 15:32:28'),
(238, 114, 'link', 'telegram', 'assets/img/icon/telegram.svg', 38, 'Telegram', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:32:39', '2023-01-19 15:32:39'),
(239, 114, 'link', 'square', 'assets/img/icon/square.svg', 37, 'Square', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:32:47', '2023-01-19 15:32:47'),
(240, 114, 'link', 'spotify', 'assets/img/icon/spotify.svg', 36, 'Spotify', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:32:58', '2023-01-19 15:32:58'),
(241, 114, 'link', 'spotify', 'assets/img/icon/spotify.svg', 36, 'Spotify', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:33:08', '2023-01-19 15:33:08'),
(242, 114, 'username', 'soundcloud', 'assets/img/icon/soundcloud.svg', 35, 'Soundcloud', 'manik15103053', 0000000010, '0', '2023-01-19 15:33:21', '2023-01-19 15:33:21'),
(243, 114, 'username', 'snapchat', 'assets/img/icon/snapchat.svg', 34, 'Snapchat', 'manik15103053', 0000000010, '0', '2023-01-19 15:33:33', '2023-01-19 15:33:33'),
(244, 114, 'link', 'safari', 'assets/img/icon/safari.svg', 33, 'Safari', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:33:45', '2023-01-19 15:33:45'),
(245, 114, 'link', 'safari', 'assets/img/icon/safari.svg', 33, 'Safari', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:33:58', '2023-01-19 15:33:58'),
(246, 114, 'link', 'Reviews', 'assets/img/icon/reviews.svg', 32, 'Reviews', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:34:11', '2023-01-19 15:34:11'),
(247, 114, 'link', 'podcasts', 'assets/img/icon/podcasts.svg', 31, 'Podcasts', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:34:21', '2023-01-19 15:34:21'),
(248, 114, 'link', 'opensea', 'assets/img/icon/opensea_color.svg', 29, 'OpenSea', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:34:30', '2023-01-19 15:34:30'),
(249, 114, 'link', 'opensea', 'assets/img/icon/opensea_color.svg', 29, 'OpenSea', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:34:40', '2023-01-19 15:34:40'),
(250, 114, 'link', 'linktree', 'assets/img/icon/linktree.svg', 26, 'Linktree', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:34:48', '2023-01-19 15:34:48'),
(251, 114, 'link', 'linktree', 'assets/img/icon/linktree.svg', 26, 'Linktree', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:35:08', '2023-01-19 15:35:08'),
(252, 114, 'link', 'linktree', 'assets/img/icon/linktree.svg', 26, 'Linktree', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:35:20', '2023-01-19 15:35:20'),
(253, 114, 'mobile', 'facetime', 'assets/img/icon/facetime.svg', 23, 'Face Time', '01770802187', 0000000010, '0', '2023-01-19 15:35:36', '2023-01-19 15:35:36'),
(254, 114, 'link', 'embeddedvideo', 'assets/img/icon/embeddedvideo.svg', 21, 'Your video', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:35:43', '2023-01-19 15:35:43'),
(255, 114, 'link', 'dropdown', 'assets/img/icon/dropDown.svg', 20, 'DropDown', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:35:52', '2023-01-19 15:35:52'),
(256, 114, 'link', 'customlink', 'assets/img/icon/customlink.svg', 18, 'Custom Link', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:36:00', '2023-01-19 15:36:00'),
(258, 114, 'link', 'clubhouse', 'assets/img/icon/clubhouse.svg', 16, 'Clubhouse', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:36:27', '2023-01-19 15:36:27'),
(259, 114, 'username', 'cashapp', 'assets/img/icon/cashapp.svg', 15, 'Cash App', 'manik15103053', 0000000010, '0', '2023-01-19 15:36:45', '2023-01-19 15:36:45'),
(260, 114, 'username', 'cashapp', 'assets/img/icon/cashapp.svg', 15, 'Cash App', 'manik15103053', 0000000010, '0', '2023-01-19 15:36:57', '2023-01-19 15:36:57'),
(261, 114, 'link', 'calendly', 'assets/img/icon/calendly.svg', 14, 'Calendly', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:37:15', '2023-01-19 15:37:15'),
(262, 114, 'link', 'calendly', 'assets/img/icon/calendly.svg', 14, 'Calendly', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:37:27', '2023-01-19 15:37:27'),
(263, 114, 'link', 'app_link', 'assets/img/icon/app_link.svg', 11, 'App Link', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:37:34', '2023-01-19 15:37:34'),
(264, 114, 'link', 'calendly', 'assets/img/icon/calendly.svg', 14, 'Calendly', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:37:42', '2023-01-19 15:37:42'),
(265, 114, 'link', 'app_link', 'assets/img/icon/app_link.svg', 11, 'App Link', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:37:50', '2023-01-19 15:37:50'),
(266, 114, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'https://youtu.be/hj32fj9BIw4', 0000000010, '0', '2023-01-19 15:38:10', '2023-01-19 15:38:10'),
(267, 89, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', 'Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213', 0000000003, '1', '2023-01-19 18:16:04', '2023-01-19 18:16:04'),
(268, 89, 'mail', 'email', 'assets/img/icon/email.svg', 46, 'Email', 'arifurr@gmail.com', 0000000004, '1', '2023-01-19 18:18:21', '2023-01-19 18:18:21'),
(269, 76, 'link', 'embeddedvideo', 'assets/img/icon/embeddedvideo.svg', 21, 'Your video', 'https://www.youtube.com/embed/', 0000000010, '1', '2023-01-19 19:37:17', '2023-01-19 19:37:57'),
(270, 115, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'jagdeep.saini2704@gmail.com', 0000000001, '1', '2023-01-20 20:42:48', '2023-01-20 20:42:48'),
(271, 115, 'text', 'text', 'assets/img/icon/text.svg', 54, 'Text', '5165349095', 0000000002, '1', '2023-01-20 20:43:52', '2023-01-20 20:43:52'),
(272, 115, 'mobile', 'facetime', 'assets/img/icon/facetime.svg', 23, 'Face Time', '5165349095', 0000000003, '1', '2023-01-20 20:47:04', '2023-01-20 20:47:04'),
(273, 115, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', '70 Charles', 0000000004, '1', '2023-01-20 20:47:32', '2023-01-20 20:47:32'),
(274, 115, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '5165349095', 0000000005, '1', '2023-01-20 20:47:50', '2023-01-20 20:47:50'),
(275, 116, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '8014143603', 0000000001, '0', '2023-01-21 07:15:03', '2023-01-21 07:15:03'),
(276, 116, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'danyelldrummond@gmail.com', 0000000002, '0', '2023-01-21 07:15:03', '2023-01-21 07:15:03'),
(277, 41, 'mail', 'email', 'assets/img/icon/email.svg', 46, 'Email', 'ronymia.tech@gmail.com', 0000000001, '1', '2023-01-21 09:10:25', '2023-01-21 09:10:25'),
(278, 41, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '+88 01767671133', 0000000002, '1', '2023-01-21 09:10:49', '2023-01-21 09:10:49'),
(279, 4, 'number', 'whatsapp', 'assets/img/icon/whatsapp.svg', 6, 'Whatsapp', '+8801681944126', 0000000001, '1', '2023-01-21 20:39:15', '2023-01-21 20:39:15'),
(280, 117, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '3474561200', 0000000001, '1', '2023-01-22 05:26:47', '2023-01-22 05:26:47'),
(281, 117, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'elizburbige@gmail.com', 0000000002, '1', '2023-01-22 05:26:47', '2023-01-22 05:26:47'),
(282, 117, 'text', 'text', 'assets/img/icon/text.svg', 54, 'Text', '3474561200', 0000000003, '1', '2023-01-22 05:28:20', '2023-01-22 05:28:20'),
(283, 117, 'username', 'Venmo.com', 'assets/img/icon/venmo.svg', 50, 'Venmo', 'lizzzastar@gmail.com', 0000000004, '1', '2023-01-22 05:29:27', '2023-01-22 05:29:27'),
(284, 117, 'number', 'zelle', 'assets/img/icon/zelle.svg', 45, 'Zelle', '3474561200', 0000000005, '1', '2023-01-22 05:29:37', '2023-01-22 05:29:37'),
(285, 117, 'username', 'snapchat', 'assets/img/icon/snapchat.svg', 34, 'Snapchat', 'lizzzastar@gmail.com', 0000000006, '1', '2023-01-22 05:30:12', '2023-01-22 05:30:12'),
(286, 117, 'mobile', 'facetime', 'assets/img/icon/facetime.svg', 23, 'Face Time', '3474561200', 0000000007, '1', '2023-01-22 05:30:29', '2023-01-22 05:30:29'),
(287, 117, 'username', 'cashapp', 'assets/img/icon/cashapp.svg', 15, 'Cash App', '$lizabeth0000217', 0000000008, '1', '2023-01-22 05:32:18', '2023-01-22 05:32:18'),
(288, 117, 'address', 'address', 'assets/img/icon/address.svg', 10, 'Address', '64 W 2nd St Freeport NY 11520', 0000000009, '1', '2023-01-22 05:32:40', '2023-01-22 05:32:40'),
(289, 80, 'text', 'text', 'assets/img/icon/text.svg', 54, 'Text', '516-297-3389', 0000000011, '1', '2023-01-22 05:44:14', '2023-01-22 05:44:14'),
(290, 118, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '01794798227', 0000000001, '1', '2023-01-25 05:00:12', '2023-01-25 05:00:12'),
(291, 118, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'mdmridul608@gmail.com', 0000000002, '1', '2023-01-25 05:00:12', '2023-01-25 05:00:12'),
(292, 119, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '1794798227', 0000000001, '1', '2023-01-30 05:18:29', '2023-01-30 05:18:29'),
(293, 119, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'mdmridul6088@gmail.com', 0000000002, '1', '2023-01-30 05:18:29', '2023-01-30 05:18:29');

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
(1, 'site_name', 'MTPro.me', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(2, 'currency', 'USD', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(3, 'timezone', 'America/New_York', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
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
(17, 'invoice_name', 'mtgpro', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(18, 'invoice_email', 'sales@mtgpro.me', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(19, 'invoice_phone', '+88 01767671133', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(20, 'invoice_address', '123, lorem ipsum', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(21, 'invoice_city', 'dhaka', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(22, 'invoice_state', 'dhaka', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(23, 'invoice_zipcode', '1212', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(24, 'invoice_country', 'Bangaldesh', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(25, 'tax_name', 'Goods and Service Tax', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(26, 'tax_value', '0', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(27, 'tax_number', '0', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(28, 'email_heading', 'Thanks for using mtgpro.me. This is an invoice for your recent purchase.', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(29, 'email_footer', 'If you’re having trouble with the button above, please login into your web browser.', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(30, 'invoice_footer', 'Thank you very much for doing business with us. We look forward to working with you again!', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(31, 'share_content', 'Welcome to { business_name }, Here is my digital Digital Business Card, { business_url } \r\nPowered by: { appName }', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
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
(13, 'Luke V. Withers', 'Photogrammetrist', NULL, '9038 3339 3080', 'LukeVWithers@rhyta.com', 'Dahlkemper\'s', '4538 Jessie Street\r\nBourneville, OH 45617', 107, 98, '2023-01-15 14:29:36', NULL, NULL, NULL, 1, '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', 1),
(14, 'Troy M. Glover', 'Bindery machine operator', NULL, '1589 2330 8616', 'TroyMGlover@teleworm.us', 'Harold Powell', 'Troy M. Glover\r\n431 Little Acres Lane\r\nAngle Inlet, MN 56711', 107, 98, '2023-01-15 14:31:02', NULL, NULL, NULL, 1, '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', 1),
(15, 'Clifton T. Torres', 'Lawyer', NULL, '234234234234234', 'tecij81550@tohup.com', 'Naugles', '2076 Khale Street\r\nMyrtle Beach, SC 29577', 107, 98, '2023-01-15 14:33:18', '2023-01-15 14:39:52', NULL, 107, 1, 'assets/uploads/avatar/clifton-t-63c3bbd86636b.jpg', 1),
(16, 'jojo', 'presidente', NULL, '5165165516', 'jr@example.com', 'going crazy llc', 'hello how are you', 73, 80, '2023-01-16 06:28:49', NULL, NULL, NULL, 1, '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', 1),
(17, 'joj', 'presidente 2', NULL, '5165165516', 'jojo@example.com', 'lala lala llc', 'i said helo', 73, 80, '2023-01-16 06:29:46', NULL, NULL, NULL, 1, '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', 1),
(18, 'Moshiur Rahman', 'Web Developer', NULL, '01770802187', 'moshiur2187@gmail.com', 'Arobil', 'Hi This is the Here', 109, 103, '2023-01-18 12:50:08', NULL, NULL, NULL, 1, NULL, NULL),
(19, 'Moshiur Rahman', 'Web Developer', NULL, '01770802187', 'moshiur2187@gmail.com', 'Arobil', 'Hi There is the best site for make the business card', 109, 113, '2023-01-19 14:47:31', NULL, NULL, NULL, 1, NULL, NULL),
(20, 'Md Mridul', 'Human', NULL, '01794798227', 'mdmridul608@gmail.com', 'Arobil It', 'ques', 120, 118, '2023-01-29 13:06:40', NULL, NULL, NULL, 1, NULL, 120);

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
(4, 'Privacy Policy', 'privacy-policy', '<div><p style=\"text-align: justify;\"><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>﻿﻿﻿<span style=\"font-size: 0.875rem; letter-spacing: 0px;\">﻿</span><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">﻿﻿Protecting your private information is our priority. This Statement of Privacy applies to MTGPro.me, and Non-QM Doc LLC and governs data collection and usage. For the purposes of this Privacy Policy, unless otherwise noted, all references to Non-QM Doc LLC include www.MTGPro.me and&nbsp;<span style=\"font-weight: 600;\">MTGPro.me.</span>&nbsp;The MTGPro.me application is a Digital Marketing and Ecommerce application. By using the&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;application, you consent to the data practices described in this statement.</span><br></p><div><span style=\"font-size: 0.875rem; letter-spacing: 0px;\"><span style=\"font-weight: 600;\">Collection of your Personal Information</span></span><br></div><div style=\"text-align: justify;\">In order to better provide you with products and services offered, MTGPro.me may collect personally identifiable information, such as your:&nbsp;&nbsp;</div><div style=\"text-align: justify;\"><br></div><ul><li>First and Last Name</li><li>Mailing Address</li><li>E-mail Address</li><li>Phone Number</li><li>Employer</li><li>Job Title</li><li>Social Media Profiles, Websites, Etc.&nbsp;</li></ul><div style=\"text-align: justify;\">If you purchase&nbsp;<span style=\"font-weight: 600;\">MTGPro.me\'s</span>&nbsp;products and services, we collect billing and credit card information. This information is used to complete the purchase transaction.</div><div><br></div><div style=\"text-align: justify;\">We do not collect any personal information about you unless you voluntarily provide it to us. However, you may be required to provide certain personal information to us when you elect to use certain products or services. These may include: (a) registering for an account; (b) entering a sweepstakes or contest sponsored by us or one of our partners; (c) signing up for special offers from selected third parties; (d) sending us an email message; (e) submitting your credit card or other payment information when ordering and purchasing products and services. To wit, we will use your information for, but not limited to, communicating with you in relation to services and/or products you have requested from us. We also may gather additional personal or non-personal information in the future</div><div><br></div><div><div><span style=\"font-weight: 600;\">Use of your Personal Information</span></div><div><br></div><div><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;collects and uses your personal information to operate and deliver the services you have requested.</div><div><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;may also use your personally identifiable information to inform you of other products or services available from&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;and its affiliates.</div><div><br></div><div><span style=\"font-weight: 600;\">Sharing Information with Third Parties</span></div><div><br></div><div><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;does not sell, rent or lease its customer lists to third parties.</div><div><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">MTGPro.me&nbsp;</span>may, from time to time, contact you on behalf of external business partners about a particular offering that may be of interest to you. In those cases, your unique personally identifiable information&nbsp;<span style=\"font-weight: 600;\">(e-mail, name, address, telephone number)</span>&nbsp;is transferred to the third party.&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;may share data with trusted partners to help perform statistical analysis, send you email or postal mail, provide customer support, or arrange for deliveries. All such third parties are prohibited from using your personal information except to provide these services to&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>, and they are required to maintain the confidentiality of your information.&nbsp;</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;may disclose your personal information, without notice, if required to do so by law or in the good faith belief that such action is necessary to: (a) conform to the edicts of the law or comply with legal process served on&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;or the site; (b) protect and defend the rights or property of&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>; and/or (c) act under exigent circumstances to protect the personal safety of users of&nbsp;<span style=\"font-weight: 600;\">MTGPro.me,</span>&nbsp;or the public.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><span style=\"font-weight: 600;\">Opt-Out of Disclosure of Personal Information to Third Parties</span></div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\">In connection with any personal information we may disclose to a third party for a business purpose, you have the right to know:&nbsp;</div><ul><li style=\"text-align: justify;\"><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">The categories of personal information that we disclosed about you for a business purpose.&nbsp;</span><br></li></ul><div style=\"text-align: justify;\">You have the right under the California Consumer Privacy Act of 2018&nbsp;<span style=\"font-weight: 600;\">(CCPA)</span>&nbsp;and certain other privacy and data protection laws, as applicable, to opt-out of the disclosure of your personal information. If you exercise your right to opt-out of the disclosure of your personal information, we will refrain from disclosing your personal information, unless you subsequently provide express authorization for the disclosure of your personal information. To opt-out of the disclosure of your personal information, visit this Web page _________________.&nbsp;</div><div><br></div><div><div><span style=\"font-weight: 600;\">Right to Deletion</span></div><div><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">Subject to certain exceptions set out below, on receipt of a verifiable request from you, we will:</span></div><ul><li><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">Delete your personal information from our records; and</span></li><li>Direct any service providers to delete your personal information from their records.&nbsp;</li></ul><div>Please note that we may not be able to comply with requests to delete your personal information if it is necessary to:</div><div><br></div><ul><li style=\"text-align: justify;\">Complete the transaction for which the personal information was collected, fulfill the terms of a written warranty or product recall conducted in accordance with federal law, provide a good or service requested by you, or reasonably anticipated within the context of our ongoing business relationship with you, or otherwise perform a contract between you and us;</li><li style=\"text-align: justify;\">Detect security incidents, protect against malicious, deceptive, fraudulent, or illegal activity; or prosecute those responsible for that activity;</li><li style=\"text-align: justify;\">Debug to identify and repair errors that impair existing intended functionality;</li><li style=\"text-align: justify;\">Exercise free speech, ensure the right of another consumer to exercise his or her right of free speech, or exercise another right provided for by law;</li><li style=\"text-align: justify;\">Comply with the California Electronic Communications Privacy Act;</li><li style=\"text-align: justify;\">Engage in public or peer-reviewed scientific, historical, or statistical research in the public interest that adheres to all other applicable ethics and privacy laws, when our deletion of the information is likely to render impossible or seriously impair the achievement of such research, provided we have obtained your informed consent; • Enable solely internal uses that are reasonably aligned with your expectations based on your relationship with us;</li><li style=\"text-align: justify;\">Comply with an existing legal obligation; or</li><li style=\"text-align: justify;\">Otherwise use your personal information, internally, in a lawful manner that is compatible with the context in which you provided the information.</li></ul><div><span style=\"font-weight: 600;\">Children Under</span></div><div><br></div><div style=\"text-align: justify;\">Thirteen&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;does not knowingly collect personally identifiable information from children under the age of thirteen. If you are under the age of thirteen, you must ask your parent or guardian for permission to use this application.</div><div><br></div><div><div><span style=\"font-weight: 600;\">Disconnecting your MTGPro.me Account from Third Party Websites</span></div><div><br></div><div style=\"text-align: justify;\">You will be able to connect your&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;account to third-party accounts. BY CONNECTING YOUR&nbsp;<span style=\"font-weight: 600;\">MTGPRO.ME</span>&nbsp;ACCOUNT TO YOUR THIRD PARTY ACCOUNT, YOU ACKNOWLEDGE AND AGREE THAT YOU ARE CONSENTING TO THE CONTINUOUS RELEASE OF INFORMATION ABOUT YOU TO OTHERS (IN ACCORDANCE WITH YOUR PRIVACY SETTINGS ON THOSE THIRD PARTY SITES). IF YOU DO NOT WANT INFORMATION ABOUT YOU, INCLUDING PERSONALLY IDENTIFYING INFORMATION, TO BE SHARED IN THIS MANNER, DO NOT USE THIS FEATURE. You may disconnect your account from a third party account at any time. by removing the link to the third party site from their account&nbsp;&nbsp;</div><div><br></div><div><span style=\"font-weight: 600;\">Opt-Out &amp; Unsubscribe from Third Party Communications</span></div><div><br></div><div style=\"text-align: justify;\">We respect your privacy and give you an opportunity to opt-out of receiving announcements of certain information. Users may opt-out of receiving any or all communications from third-party partners of&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;by contacting us here:</div><div><br></div><div>Web page: _________________</div><div>Email:&nbsp;<span style=\"font-weight: 600;\">info@mtgpro.me</span></div><div>Phone: ____________________</div><div><br></div><div><span style=\"font-weight: 600;\">E-mail Communications</span></div><div><span style=\"text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">From time to time,</span><span style=\"font-weight: 600; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">&nbsp;MTGPro.me</span><span style=\"text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">&nbsp;may contact you via email for the purpose of providing announcements, promotional offers, alerts, confirmations, surveys, and/or other general communication. In order to improve our Services, we may receive a notification when you open an email from MTGPro.me or click on a link therein.&nbsp;</span><br></div><div><br></div><div><span style=\"font-weight: 600;\">External Data Storage Sites</span></div><div><span style=\"font-size: 0.875rem; letter-spacing: 0px;\">We may store your data on servers provided by third party hosting vendors with whom we have contracted.&nbsp;</span><br></div><div><br></div><div><span style=\"font-weight: 600;\">Changes to this Statement</span></div><div style=\"text-align: justify;\"><span style=\"font-size: 0.875rem; letter-spacing: 0px;\"><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;reserves the right to change this Privacy Policy from time to time. We will notify you about significant changes in the way we treat personal information by sending a notice to the primary email address specified in your account, by placing a prominent notice on our application, and/or by updating any privacy information. Your continued use of the application and/or Services available after such modifications will constitute your: (a) acknowledgment of the modified Privacy Policy; and (b) agreement to abide and be bound by that Policy.</span><br></div><div><br></div><div><span style=\"font-weight: 600;\">Contact Information</span></div><div><br></div><div><span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;welcomes your questions or comments regarding this Statement of Privacy. If you believe that&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;has not adhered to this Statement, please contact&nbsp;<span style=\"font-weight: 600;\">MTGPro.me</span>&nbsp;at:</div><div><br></div><div><div><span style=\"font-weight: 600;\">Mtgo Pro</span></div><div>Non-QM Doc LLC</div><div>1603 Capitol Ave Suite 310</div><div>Cheyenne, Wyoming 82001</div><div><br></div><div>Email Address:</div><div><span style=\"font-weight: 600;\">info@MTGPro.me</span></div><div><br></div><div>Telephone number:</div><div>_________________</div><div><br></div><div>Effective as of January 10, 2023</div></div></div></div></div></div>', 1, 1, NULL, NULL, NULL, 1, '2022-11-26 10:03:52', '2023-01-16 20:06:30', NULL, 1, NULL),
(5, 'Terms and Conditions', 'terms-and-conditions', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"color: rgb(32, 33, 36); font-family: consolas, &quot;lucida console&quot;, &quot;courier new&quot;, monospace; font-size: 12px; white-space: pre-wrap; letter-spacing: 0px;\">Terms and Conditions</span><br></p>', 1, 2, NULL, NULL, NULL, 1, '2022-11-26 10:17:15', '2022-12-06 23:17:32', 'footer', 1, 'col-3'),
(6, 'Data deletion instructions', 'data-deletion-instructions', '<h1 class=\"article-title text-capitalize py-md-2\"><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>How Can I Deactivate Or Delete My Account?</h1><div class=\"content\" style=\"\"><p class=\"card-text\" style=\"margin-bottom: 1rem; font-size: 15px; line-height: 30px;\"></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">We\'re sorry to hear you want to remove or deactivate your mtgpro.me account. You have the option of temporarily deactivating your account and then reactivating it later, or permanently deleting your account. Please keep in mind that account termination is permanent and cannot be reversed. You must be signed in to fill out the account deactivation/deletion request form in order to deactivate or delete your account. Please see our privacy policy for more information.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\"><span style=\"font-weight: bolder;\">When you have successfully deactivated your account:</span></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">1) You will not be able to log in to your mtgpro.me account nor use the same credentials (email or phone number) to create a new account.<br></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">3) Your profile will be hidden. Some information such as your product reviews may still be visible to others.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">4) Your account can still be reactivated. You will need to contact us Via Email at Info@MTGPro.me if you want to reactivate your account.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\"><span style=\"font-weight: bolder;\">When you have successfully deleted your account:<br></span></p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">1) You will not be able to log in to your mtgpro.me account nor use the same credentials (email or phone number) to create a new account.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">2) You will not be able to reactivate or recover any data, including your reviews and past purchase history</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">3) You will need to set up a new account using a different email and/or mobile number if you want to use mtgpro.me again.</p><p style=\"margin-bottom: 1rem; font-size: 1.1em; line-height: 30px;\">If you have trouble logging into your account or suspect that someone has logged into your account, please contact us through email (info@mtgpro.me).<span style=\"font-size: 14px;\">﻿</span></p></div>', 1, 1, 'sddrrr', 'sdadxxx', NULL, 1, '2022-11-26 10:18:13', '2023-01-22 05:31:04', NULL, 1, NULL),
(7, 'What Is MTGPro.me?', 'about', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">MTGPro.me is a digital business card helping\r\nmortgage professionals make their lasting first impression, amazing! We provide\r\nyou the tools and resources you need to stand out from the competition. With a\r\nquick tap, click or scan showcase all your content across any platform in one personally\r\nbranded PROfile . <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">&nbsp;</span></p><p>\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">Our platform allows you to create a\r\nprofessional PROfile that includes your professional background, industry\r\ncertifications, NMLS ID. In addition to creating a profile, you can also\r\ncustomize your digital business card with your headshot, logo, contact\r\ninformation, websites, application pages and every social media account you\r\nhave. This allows you to easily share your information with potential clients,\r\nreferral partners, and other professionals. We also provide free marketing\r\nmaterial, social media posts, and other content to help you promote yourself\r\nand your business.&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">Our Mission: </span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><font color=\"#5e5e5e\" face=\"Segoe UI, sans-serif\"><span style=\"font-size: 12pt;\">To help every mortgage professional stay top of mind with every business connection they make and help you get the </span><span style=\"font-size: 16px;\">recognition</span><span style=\"font-size: 12pt;\">&nbsp;of the PRO that you are.</span></font></p>', 1, 1, NULL, NULL, NULL, 1, '2022-12-06 22:51:51', '2023-01-15 06:42:55', NULL, 1, NULL),
(8, 'Careers', 'careers', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 4, NULL, NULL, NULL, 1, '2022-12-06 22:53:09', '2022-12-06 23:16:19', 'footer', 1, 'col-2'),
(9, 'Contact us', 'contact-us', '<p><span style=\"font-size: 14px;\">﻿Please email info@mtgpro.me and we will get back to you as soon as possible. In your email please include:</span></p><p><span style=\"font-size: 14px;\">Your Name:</span></p><p><span style=\"font-size: 14px;\">Email Address:</span></p><p><span style=\"font-size: 14px;\">Username:</span></p><p><span style=\"font-size: 14px;\">Please be sure to be as detailed as possible on the particulars of your request in order to resolve your request efficiently.&nbsp;<br></span><br></p>', 1, 1, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2023-01-22 05:34:14', NULL, 1, NULL),
(10, 'Security', 'security', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.<br></p>', 1, 6, NULL, NULL, NULL, 1, '2022-12-06 22:54:17', '2022-12-06 23:18:10', 'footer', 1, 'col-2'),
(11, 'Tutorials', 'tutorials', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br></p>', 1, 5, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2022-12-06 23:17:57', 'footer', 1, 'col-2'),
(12, 'Help', 'help', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.<br></p>', 1, 5, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2022-12-06 23:17:57', 'footer', 1, 'col-2'),
(13, 'Environment setup', 'environment', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><br></p>', 1, 1, 'env', NULL, NULL, 1, '2023-01-16 10:35:37', '2023-01-16 10:35:49', NULL, 1, NULL),
(14, 'Free Marketing Material', 'free-marketing-material', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>Free Marketing Material<br></p>', 1, 1, 'Free Marketing Material', 'Free Marketing Material', NULL, 1, '2023-01-16 15:53:06', '2023-01-18 14:22:45', NULL, 1, NULL),
(15, 'Test customer Pages Update', 'test-customer-pages', '<p><span style=\"font-size: 14px;\">﻿</span>This is the best tset</p>', 1, 1, 'test', 'This is the best test', NULL, 1, '2023-01-18 14:22:00', '2023-01-18 14:22:30', NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `type`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Welcome Mail', 'Welcome To MtgPro.com', 'Hi, {user_name}, {email}\r\nThanks for signing up to {site_name}.\r\nIf you have any questions about this, please visit our website {site_name}\r\nSimply go here {site_name} ,\r\nto get started create a vCard. \r\n{site_name}\r\n\r\n © {site_name} All rights reserved.', NULL, '2023-01-29 13:31:47'),
(2, 'Plan Purchase', 'Thank You for order', 'Hello! {user_name}, thank you for purchasing from {site_title}. \r\nTotal order {order_cost}, Transaction number {transaction_number}.\r\nYour order is now {order_status}.\r\n\r\nWe Care About Our Customers.', NULL, '2023-01-29 13:28:03'),
(3, 'Plan Upgrade', 'Plan Upgrade Info', 'Hello Admin, your have receive a new order Transaction_number : {transaction_number}, User name  {user_name},  Total order {order_cost}, \r\nOrder status {order_status}.\r\n{site_title}', NULL, '2023-01-29 13:15:04'),
(4, 'Send Connect to Subscriber', 'Successfully Connect  with Subscriber', 'Hello, {user_name},\nYou are successfully connect our {sub_name}.\nThank You.\nWe are also care About Our Customers and subscriber.', NULL, '2023-01-29 13:43:15'),
(5, 'Send Connect to Visitors & CC Subscriber', 'Subscription Successfull Mail', 'Hello!  Thank you. You Have Subscribed Successfully.\r\nThanks by {site_title}.\r\n\r\nWe are also care About Our Customers and subscriber.', NULL, '2023-01-29 13:43:45'),
(6, 'Request Features to Admin Mail', 'You have new query form mtgPro', 'Hello {user_name}, \r\n\r\nThank You.\r\n\r\nWe are also care About Our Customers and subscriber.', NULL, '2023-01-29 13:47:33'),
(7, 'Request Features to Subscriber Mail', 'You are successfully subscribe our mtgpro', 'Hello {user_name}, \r\nThanks for subscribe \r\nWe Care About Our Customers.', NULL, '2023-01-29 13:48:20');

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
(3, 'What are Digital Business Cards?', 'Digital business cards are a modern way of exchanging a limitless amount contact information. They are digital versions of traditional paper business cards and provide a more efficient way to share every platform you utilize to maintian your brand.  Digital business cards are typically shared via text message, email, or other digital communication platforms. They are also often used with QR codes and today more commonly with NFC (Near Field Communication) technology to quickly and easily share contact.', 1, 1, NULL, 1, '2023-01-14 11:24:58', '2023-01-15 05:13:02', 1),
(4, 'What does NFC  nfo mean?', 'Near Field Communication (NFC) technology is a wireless technology that allows two devices to communicate with each other when they are close together. NFC tags can be used to store digital business cards, allowing users to quickly and easily share their contact information with others.', 1, 2, NULL, 1, '2023-01-15 05:15:20', '2023-01-16 10:36:18', 1),
(5, 'What are digital business cards?', 'Digital business cards are a modern way of exchanging a limitless amount contact information. They are digital versions of traditional paper business cards and provide a more efficient way to share every platform you utilize to maintain your brand.  Digital business cards are typically shared via text message, email, or other digital communication platforms. They are also often used with QR codes and today more commonly with NFC (Near Field Communication) technology to quickly and easily share contact information.', 1, 3, NULL, 1, '2023-01-16 10:36:48', '2023-01-20 10:10:09', 1);

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
(1, '/upload/payment-method/IMG-1620460545.png', 'Paypal', 'Paypal', '5', '6', 'enabled', '0', '2022-03-12 14:54:38', '2023-01-14 19:23:45'),
(2, '/assets/uploads/payment-method/IMG-1617618450.png', 'Stripe', 'Stripe', '10', '11', 'enabled', '1', '2022-03-12 14:54:38', '2022-08-14 17:47:56');

-- --------------------------------------------------------

--
-- Table structure for table `history_card_browsing`
--

CREATE TABLE `history_card_browsing` (
  `id` int(16) NOT NULL,
  `card_id` int(10) DEFAULT NULL,
  `device_id` varchar(124) DEFAULT NULL,
  `ip_address` varchar(15) DEFAULT NULL,
  `user_agent` varchar(1024) DEFAULT NULL,
  `region` varchar(128) DEFAULT NULL,
  `region_code` varchar(128) DEFAULT NULL,
  `region_name` varchar(128) DEFAULT NULL,
  `counter` int(16) NOT NULL DEFAULT 1,
  `name` varchar(155) DEFAULT NULL,
  `username` varchar(124) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `city` varchar(128) DEFAULT NULL,
  `area_code` varchar(128) DEFAULT NULL,
  `country_code` varchar(128) DEFAULT NULL,
  `country_name` varchar(128) DEFAULT NULL,
  `continent_name` varchar(128) DEFAULT NULL,
  `timezone` varchar(128) DEFAULT NULL,
  `created_by` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `modified_by` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `modified_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `history_card_browsing`
--

INSERT INTO `history_card_browsing` (`id`, `card_id`, `device_id`, `ip_address`, `user_agent`, `region`, `region_code`, `region_name`, `counter`, `name`, `username`, `email`, `mobile`, `city`, `area_code`, `country_code`, `country_name`, `continent_name`, `timezone`, `created_by`, `modified_by`, `created_at`, `modified_at`) VALUES
(1, 119, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0', NULL, NULL, NULL, 5, 'jone Doye', 'mdmridul6088', 'mdmridul6088@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Triggers `history_card_browsing`
--
DELIMITER $$
CREATE TRIGGER `after_history_card_browsing_insert` AFTER INSERT ON `history_card_browsing` FOR EACH ROW begin
 declare var_total_views int(10) default 0;
select count(*) into var_total_views from history_card_browsing where card_id = new.card_id;
update business_cards set total_hit = var_total_views where id = new.card_id;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `marketing_materials`
--

CREATE TABLE `marketing_materials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `order_id` int(10) NOT NULL DEFAULT 0,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  `author_name` varchar(155) DEFAULT NULL,
  `file` varchar(155) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `marketing_materials`
--

INSERT INTO `marketing_materials` (`id`, `title`, `order_id`, `image`, `description`, `status`, `created_at`, `created_by`, `updated_at`, `updated_by`, `author_name`, `file`) VALUES
(1, 'Casual Conversations', 10, 'http://127.0.0.1:8000/assets/uploads/marketing-materials/1674397467.png', '<p><b><span style=\"font-size: 14px;\">﻿</span><span style=\"color: rgb(102, 102, 102); font-family: Poppins, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">Lorem ipsum dolor sit amet consectetur adipisicing elit. </span></b></p><p><span style=\"color: rgb(102, 102, 102); font-family: Poppins, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">Quos laboriosam maxime ipsa accusantium unde, accusamus recusandae eveniet aspernatur ullam, fuga dolore consequatur, sapiente fugit repellendus! Libero nobis vitae accusamus illo? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos laboriosam maxime ipsa accusantium unde, accusamus recusandae eveniet aspernatur ullam, fuga dolore consequatur, sapiente fugit repellendus! Libero nobis vitae accusamus illo?</span><br></p>', 1, '2023-01-22 20:24:27', NULL, '2023-01-22 20:24:27', NULL, 'TEST', 'http://127.0.0.1:8000/assets/uploads/marketing-materials/1674397467.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `discount` float(14,2) DEFAULT 0.00,
  `coupon_discount` float(14,2) NOT NULL DEFAULT 0.00,
  `total_price` float(14,2) DEFAULT 0.00,
  `payment_fee` float(14,2) NOT NULL DEFAULT 0.00,
  `vat` float(14,2) DEFAULT 0.00,
  `grand_total` float DEFAULT 0,
  `discount_percentage` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `order_date` date DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` tinyint(4) NOT NULL DEFAULT 0,
  `status` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '1=prossing, 2=on the way, 3=delivered',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT '1=Photo Frame,2=gift card'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `quantity`, `discount`, `coupon_discount`, `total_price`, `payment_fee`, `vat`, `grand_total`, `discount_percentage`, `user_id`, `order_date`, `payment_method`, `payment_status`, `status`, `created_at`, `updated_at`, `type`) VALUES
(1, '101', 2, 0.00, 0.00, 100.00, 5.00, 0.00, 105, 0, 2, '2023-01-25', 'stripe', 1, '3', NULL, '2023-01-26 11:26:54', 1),
(2, '102', 2, 0.00, 0.00, 156.00, 0.00, 0.00, 156, 0, 1, '2023-01-26', 'Stripe', 0, '3', '2023-01-26 11:30:35', '2023-01-26 11:55:35', 0),
(3, '103', 1, 0.00, 0.00, 142.00, 0.00, 0.00, 142, 0, 120, '2023-01-28', 'Stripe', 0, '1', '2023-01-28 11:37:27', '2023-01-28 11:37:27', 0),
(4, '104', 4, 0.00, 0.00, 312.00, 0.00, 0.00, 312, 0, 120, '2023-01-28', 'Stripe', 0, '1', '2023-01-28 12:29:31', '2023-01-28 12:29:31', 0),
(5, '105', 2, 0.00, 0.00, 172.00, 0.00, 0.00, 172, 0, 120, '2023-01-29', 'Stripe', 0, '1', '2023-01-29 05:28:54', '2023-01-29 05:28:54', 0),
(6, '106', 3, 0.00, 0.00, 170.00, 0.00, 0.00, 170, 0, 120, '2023-01-29', 'Stripe', 0, '1', '2023-01-29 06:28:21', '2023-01-29 06:28:21', 0),
(7, '107', 2, 0.00, 0.00, 156.00, 0.00, 0.00, 156, 0, 120, '2023-01-29', 'Stripe', 0, '1', '2023-01-29 07:36:00', '2023-01-29 07:36:00', 0),
(8, '108', 1, 0.00, 0.00, 142.00, 0.00, 0.00, 142, 0, 120, '2023-01-29', 'Stripe', 1, '1', '2023-01-29 07:41:47', '2023-01-29 07:41:47', 0);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(10) DEFAULT NULL,
  `product_id` int(10) DEFAULT NULL,
  `quantity` int(4) DEFAULT NULL,
  `unit_price` float(14,2) DEFAULT NULL,
  `free_credit` float(14,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `created_by` int(10) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `quantity`, `unit_price`, `free_credit`, `created_at`, `created_by`, `updated_at`) VALUES
(1, 1, 3, 1, 50.00, NULL, '2022-10-25 19:31:14', 5, NULL),
(2, 1, 6, 1, 50.00, NULL, '2022-10-25 19:31:14', 5, NULL),
(9, 2, 3, 1, 142.00, 0.00, '2023-01-26 17:30:35', 1, '2023-01-26 17:30:35'),
(10, 2, 6, 1, 14.00, 0.00, '2023-01-26 17:30:35', 1, '2023-01-26 17:30:35'),
(11, 3, 3, 1, 142.00, 0.00, '2023-01-28 17:37:27', 120, '2023-01-28 17:37:27'),
(12, 4, 3, 2, 142.00, 0.00, '2023-01-28 18:29:31', 120, '2023-01-28 18:29:31'),
(13, 4, 6, 2, 14.00, 0.00, '2023-01-28 18:29:31', 120, '2023-01-28 18:29:31'),
(14, 5, 6, 1, 30.00, 0.00, '2023-01-29 11:28:54', 120, '2023-01-29 11:28:54'),
(15, 5, 3, 1, 142.00, 0.00, '2023-01-29 11:28:54', 120, '2023-01-29 11:28:54'),
(16, 6, 3, 1, 142.00, 0.00, '2023-01-29 12:28:21', 120, '2023-01-29 12:28:21'),
(17, 6, 6, 2, 14.00, 0.00, '2023-01-29 12:28:21', 120, '2023-01-29 12:28:21'),
(18, 7, 3, 1, 142.00, 0.00, '2023-01-29 13:36:00', 120, '2023-01-29 13:36:00'),
(19, 7, 6, 1, 14.00, 0.00, '2023-01-29 13:36:00', 120, '2023-01-29 13:36:00'),
(20, 8, 3, 1, 142.00, 0.00, '2023-01-29 13:41:47', 120, '2023-01-29 13:41:47');

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
(1, 'home', 'banner', 'banner_title', 'Modern Contact Solutions For Today\'s Mortgage Professional<span class=\"d-block\">Get Recognized As An MTG PRO</span>', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1, 0),
(2, 'home', 'banner', 'banner_description', 'Less than 2 weeks until we launch! Follow @_MTGPro.me for updates and special launch deals!', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1, 0),
(3, 'home', 'banner', 'banner_button', 'Plans Aren\'t Live Yet', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 0, 1, 0),
(4, 'home', 'banner', 'banner_photo', 'assets/uploads/banner/1673673799.jpg', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 1, 0),
(248, 'home', 'banner', 'banner_video', '/assets/uploads/videos/WhatsApp Video 2023-01-18 at 12-63c791c17073b.mp4', '2023-01-15 10:47:59', '2023-01-15 10:47:59', 1, 0, 3, 1),
(249, 'home', 'features', 'feature_card_icon_1', 'assets/uploads/banner/1674307236.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 5, 0),
(250, 'home', 'features', 'feature_card_title_1', 'Share With Anyone', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 5, 0),
(251, 'home', 'features', 'feature_card_description_1', 'Others don’t need an app or a Popl device', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 6, 0),
(252, 'home', 'features', 'feature_card_icon_2', 'assets/uploads/banner/1674287243.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 7, 0),
(253, 'home', 'features', 'feature_card_title_2', 'Brand Consistency', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 8, 0),
(254, 'home', 'features', 'feature_card_description_2', 'Use templates and bulk edits to maintain cards at scale', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 9, 0),
(255, 'home', 'features', 'feature_card_icon_3', 'assets/uploads/banner/1674307095.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 10, 0),
(256, 'home', 'features', 'feature_card_title_3', 'Security is Key', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 11, 0),
(257, 'home', 'features', 'feature_card_description_3', 'We protect your privacy at all times and never share.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 12, 0),
(258, 'home', 'features', 'feature_card_icon_4', 'assets/uploads/banner/1674307095.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 13, 0),
(259, 'home', 'features', 'feature_card_title_4', '24/7 Support', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 14, 0),
(260, 'home', 'features', 'feature_card_description_4', 'We’re here to help with free setup, onboarding, and more.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 15, 0),
(261, 'home', 'features', 'feature_card_icon_5', 'assets/uploads/banner/1674307130.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 16, 0),
(262, 'home', 'features', 'feature_card_title_5', 'Unlimited Cards', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 17, 0),
(263, 'home', 'features', 'feature_card_description_5', 'As your team grows, we grow with you.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 18, 0),
(264, 'home', 'features', 'feature_card_icon_6', 'assets/uploads/banner/1674307173.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 19, 0),
(265, 'home', 'features', 'feature_card_title_6', 'Free Smart Products', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 20, 0),
(266, 'home', 'features', 'feature_card_description_6', 'Lorem, ipsum dolor, sit amet consectetur adipisicing elit.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 21, 0),
(267, 'home', 'features', 'feature_card_icon_7', 'assets/uploads/banner/1674307236.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 22, 0),
(268, 'home', 'features', 'feature_card_title_7', 'Share With Anyone', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 23, 0),
(269, 'home', 'features', 'feature_card_description_7', 'Use templates and bulk edits to maintain cards at scale', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 24, 0),
(270, 'home', 'features', 'feature_card_icon_8', 'assets/uploads/banner/1674307236.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 25, 0),
(271, 'home', 'features', 'feature_card_title_8', 'Brand Consistency', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 26, 0),
(272, 'home', 'features', 'feature_card_description_8', 'Use templates and bulk edits to maintain cards at scale', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 27, 0),
(273, 'home', 'video_section', 'video_section_title', 'What is Contacts Solutions', '2022-12-30 03:58:34', '2022-12-29 03:58:34', 1, 0, 28, 0),
(274, 'home', 'video_section', 'video_section_content', '<iframe width=\"100%\" height=\"350\" src=\"https://www.youtube.com/embed/Zx_Ud23OsME\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', '2022-12-29 04:02:44', '2022-12-29 04:02:44', 1, 0, 29, 0);

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
  `plan_type` int(1) DEFAULT NULL COMMENT '1=Solopreneur & Individuals, \r\n2=Team Accounts',
  `plan_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_free` int(11) NOT NULL DEFAULT 0 COMMENT '0=paid,1=free',
  `plan_price_monthly` double DEFAULT 0,
  `plan_price_yearly` double NOT NULL DEFAULT 0,
  `plan_price` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `plan_type`, `plan_id`, `plan_name`, `plan_description`, `is_free`, `plan_price_monthly`, `plan_price_yearly`, `plan_price`, `discount_percentage`, `validity`, `no_of_vcards`, `no_of_services`, `no_of_galleries`, `no_of_features`, `no_of_payments`, `personalized_link`, `hide_branding`, `free_setup`, `free_support`, `recommended`, `is_watermark_enabled`, `features`, `plans_type`, `name`, `slug`, `stripe_plan_id`, `stripe_data`, `stripe_data_yearly`, `stripe_plan_id_yearly`, `paypal_plan_id`, `paypal_plan_data`, `cost`, `status`, `shareable`, `created_at`, `updated_at`, `is_vcard`, `is_whatsapp_store`, `is_email_signature`, `is_qr_code`, `is_yearly_plan`) VALUES
(1, 1, '62f8bab5e6912', 'Free', 'Free', 1, 0, 0, '0', 0, '366', '5', 999, 999, 999, 999, '1', '0', '0', '0', '1', '0', '[\"Up to 2 Shareable Digital Cards\",\"Two-Way Contact Sharing\",\"Unlimited Connections & Card Shares\",\"Free Ongoing Base Updates & Feature Adds\"]', 1, 'Beta Tester', 'beta-tester', 'plan_N8aTRq6lwV1if7', '{\"id\":\"plan_N8aTRq6lwV1if7\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":0,\"amount_decimal\":\"0\",\"billing_scheme\":\"per_unit\",\"created\":1673262811,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_N8aTTFeGcJ5UKY\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_N8aTICI7b6KBup\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":0,\"amount_', 'plan_N8aTICI7b6KBup', NULL, NULL, NULL, '1', 1, '2022-08-14 03:04:53', '2023-01-17 15:01:03', 1, 0, 0, 0, 1),
(2, 1, '62f8d81cbf71c', 'Intro Pro Plan', 'Gold', 0, 14, 100, '999', 10, '31', '2', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"Access to all our current features\",\"Free Upgrades Across ALL PLANS\",\"2 Custom Card Setups & Personalizations\",\"Annual Plans Get Brandable Social Media Posts\",\"Annual Plans Get Brandable Marketing Material\"]', 1, 'Professional', 'professional', 'plan_MvsPvaXh0SApeG', '{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amo', 'plan_MteDPNuinE4V5C', NULL, NULL, NULL, '1', 1, '2022-08-14 05:10:20', '2023-01-17 15:00:24', 1, 1, 1, 1, 1),
(3, 2, '62f8d935b6119', 'Corporate', 'Corporate', 0, 15, 149, '1999', 12, '9999', '100', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"Everything in Solo & Small Business Accounts +\",\"Up to 100 Shareable Digital Cards\",\"10 Professional Card Setups & Personalizations\",\"Team-Level Tracking (new feature development; Coming Soon!)\"]', 1, 'Legacy Client', 'legacy-client', 'plan_MF94PTFRux9rYx', '{\"id\":\"plan_MF94PTFRux9rYx\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":4995,\"amount_decimal\":\"4995\",\"billing_scheme\":\"per_unit\",\"created\":1660475701,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MF94KiEL4GmZHC\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"am', 'plan_MteDxmBhgyMs0K', NULL, NULL, NULL, '1', 1, '2022-08-14 05:15:01', '2023-01-03 08:18:17', 1, 0, 0, 0, 1),
(7, 2, '63c23b68689cd', 'free motion', 'this good motion', 0, 220, 22000, '90000', 0, '', '1', 999, 999, 999, 999, '1', '0', '0', '0', '1', '0', '[\"good\"]', 1, 'free motion', 'free-motion', 'plan_NAMtjUsRMzM10s', '{\"id\":\"plan_NAMtjUsRMzM10s\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":9000000,\"amount_decimal\":\"9000000\",\"billing_scheme\":\"per_unit\",\"created\":1673673576,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NAMtK7QloY3GDP\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_NBu96njuecTy7d\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":2200000,\"a', 'plan_NBu96njuecTy7d', NULL, NULL, NULL, '0', 1, '2023-01-14 05:19:36', '2023-01-18 07:45:52', 0, 0, 1, 0, 1),
(8, 1, '63c38822e2f67', 'free', 'its free time to change up your decission', 1, 2200, 20000, '2200', 0, '', '1', 999, 999, 999, 999, '0', '0', '0', '0', '0', '0', '[\"12\"]', 1, 'free', 'free', 'plan_NAjmLZWNEU8IOJ', '{\"id\":\"plan_NAjmLZWNEU8IOJ\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":220000,\"amount_decimal\":\"220000\",\"billing_scheme\":\"per_unit\",\"created\":1673758754,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NAjmuYjBEKxdyD\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', NULL, NULL, NULL, NULL, NULL, '0', 1, '2023-01-15 04:59:14', '2023-01-15 06:32:42', 0, 0, 0, 0, 1),
(9, 1, '63c4d3bbe26ce', 'Paid', 'This is paid version', 0, 120, 2000, '1200', 0, '', '1', 999, 999, 999, 999, '1', '0', '0', '0', '0', '0', '[\"12\"]', 1, 'Paid', 'paid', 'plan_NB6budFae5zNqR', '{\"id\":\"plan_NB6budFae5zNqR\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":120000,\"amount_decimal\":\"120000\",\"billing_scheme\":\"per_unit\",\"created\":1673843643,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NB6bSbtWlSOnvu\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_NB6bYCAPs6f14s\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":200000,\"am', 'plan_NB6bYCAPs6f14s', NULL, NULL, NULL, '1', 1, '2023-01-16 04:34:03', '2023-01-18 04:35:32', 1, 0, 0, 0, 1),
(10, 2, '63c7aa24d4937', 'Test panel Update', 'We and our partners store or access information on devices, such as cookies and process personal data, such as unique identifiers and standard information sent by a device for the purposes described below. You may click to consent to our and our partners’ processing for such purposes. Alternatively, you may click to refuse to consent, or access more detailed information and change your preferences before consenting. Your preferences will apply to this website only. Please note that some processing of your personal data may not require your consent, but you have a right to object to such processing. You can change your preferences at any time by returning to this site or visit our privacy policy.', 0, 18, 20, '100', 0, '', '1', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"privacy policy\",\"privacy policy\"]', 1, 'Test panel', 'test-panel', 'plan_NBubkTXukPYHzD', '{\"id\":\"plan_NBubkTXukPYHzD\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":10000,\"amount_decimal\":\"10000\",\"billing_scheme\":\"per_unit\",\"created\":1674029604,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NBubGmYbg2GbVk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_NBucLbqf7A2Mhs\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":2000,\"amou', 'plan_NBucLbqf7A2Mhs', NULL, NULL, NULL, '0', 1, '2023-01-18 08:13:24', '2023-01-18 08:15:08', 1, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'FileService Credits',
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_price` float DEFAULT NULL,
  `unit_price_regular` float NOT NULL DEFAULT 0,
  `product_type` int(1) NOT NULL DEFAULT 2 COMMENT '1=virtual,2=physical',
  `vat` int(1) DEFAULT NULL COMMENT '	if is_vat_exclude = 1 then vat will be get value',
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1=active,0=inactive',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(10) DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `product_slug`, `thumbnail`, `details`, `unit_price`, `unit_price_regular`, `product_type`, `vat`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(3, 'Md Mridul 2', 'md-mridul-2', '/productThumb/mixed-food-pizza-with-olive-rolls-vegetables-and-chicken-ranch-63cf9e2582f63.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu egestas tellus. Maecenas consectetur libero non velit laoreet posuere. Nulla sit amet volutpat augue. Quisque malesuada vulputate ligula, non vehicula eros porttitor ut. Etiam mattis, leo vel ornare tincidunt, mi mauris aliquam magna, sit amet consectetur nibh tortor sed leo. In vel sollicitudin urna. Duis in lectus vel ipsum laoreet cursus ut sit amet orci. Aenean tincidunt elementum nunc, nec efficitur risus consectetur consequat.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu egestas tellus. Maecenas consectetur libero non velit laoreet posuere. Nulla sit amet volutpat augue. Quisque malesuada vulputate ligula, non vehicula eros porttitor ut. Etiam mattis, leo vel ornare tincidunt, mi mauris aliquam magna, sit amet consectetur nibh tortor sed leo. In vel sollicitudin urna. Duis in lectus vel ipsum laoreet cursus ut sit amet orci. Aenean tincidunt elementum nunc, nec efficitur risus consectetur consequat.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu egestas tellus. Maecenas consectetur libero non velit laoreet posuere. Nulla sit amet volutpat augue. Quisque malesuada vulputate ligula, non vehicula eros porttitor ut. Etiam mattis, leo vel ornare tincidunt, mi mauris aliquam magna, sit amet consectetur nibh tortor sed leo. In vel sollicitudin urna. Duis in lectus vel ipsum laoreet cursus ut sit amet orci. Aenean tincidunt elementum nunc, nec efficitur risus consectetur consequat.', 142, 122, 2, 0, 1, '2023-01-24 06:31:35', '2023-01-24 10:55:34', 1, 1),
(6, 'Md Mridul', 'md-mridul6', '/productThumb/6769264_60111-63cf97a2372cd.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu egestas tellus. Maecenas consectetur libero non velit laoreet posuere. Nulla sit amet volutpat augue. Quisque malesuada vulputate ligula, non vehicula eros porttitor ut. Etiam mattis, leo vel ornare tincidunt, mi mauris aliquam magna, sit amet consectetur nibh tortor sed leo. In vel sollicitudin urna. Duis in lectus vel ipsum laoreet cursus ut sit amet orci. Aenean tincidunt elementum nunc, nec efficitur risus consectetur consequat.', 14, 30, 1, 0, 1, '2023-01-24 08:32:34', '2023-01-24 08:32:34', 1, 1),
(7, 'test product', 'test-product', '/productThumb/61qttlg6qql-63d6882889812.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu egestas tellus. Maecenas consectetur libero non velit laoreet posuere. Nulla sit amet volutpat augue. Quisque malesuada vulputate ligula, non vehicula eros porttitor ut. Etiam mattis, leo vel ornare tincidunt, mi mauris aliquam magna, sit amet consectetur nibh tortor sed leo. In vel sollicitudin urna. Duis in lectus vel ipsum laoreet cursus ut sit amet orci. Aenean tincidunt elementum nunc, nec efficitur risus consectetur consequat.</p>', 10, 120, 1, 0, 1, '2023-01-29 08:46:58', '2023-01-29 14:52:24', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image_name`, `created_at`, `updated_at`) VALUES
(851, 3, '/productImages/mixed-food-pizza-with-olive-rolls-vegetables-and-chicken-ranch-63cfa8adaefe0.jpg', '2023-01-24 09:45:17', '2023-01-24 09:45:17'),
(852, 3, '/productImages/1eaa2150ae291213-63cfa8adb6a02.jpg', '2023-01-24 09:45:17', '2023-01-24 09:45:17'),
(853, 3, '/productImages/pizza-pollo-e-zucchine-600x428-63cfa8adbe062.jpg', '2023-01-24 09:45:17', '2023-01-24 09:45:17'),
(854, 6, '/productImages/20220211142347-margherita-9920_ba86be55-674e-4f35-8094-2067ab41a671-63cfb2b7d6673.jpg', '2023-01-24 10:28:07', '2023-01-24 10:28:07'),
(855, 6, '/productImages/cheeseburgerpattymeltfinal-63cfb2b7dcec3.jpg', '2023-01-24 10:28:07', '2023-01-24 10:28:07'),
(872, 7, '/productImages/61qttlg6qql-63d68871c7ff6.jpg', '2023-01-29 14:53:37', '2023-01-29 14:53:37'),
(873, 7, '/productImages/61jcjhpcc5l-63d68871ec236.jpg', '2023-01-29 14:53:37', '2023-01-29 14:53:37');

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
(4, 2, 0, 'Lorem, ipsum dolor sit amet consectetur adipisicing, elit. Iusto distinctio porro sunt incidunt iure placeat, earum laboriosam reprehenderit, eligendi corrupti quia numquam laudantium labore tempore, ipsam aliquid, quo nulla praesentium!', 1, '2023-01-14 14:31:52', 2, 'Jon Doe', 'Manager at Arobil Ltd'),
(5, 66, 0, 'Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming .....', 1, '2023-01-16 14:03:13', 66, 'Raj & Pori', 'We are Dhaka'),
(6, 1, 0, 'handsome import', 1, '2023-01-15 05:30:10', 1, 'Mtgpro Admin', 'its good'),
(8, 113, 0, 'Hello I am Moshiur Rahman', 0, '2023-01-18 14:50:50', 113, 'Md Manik', 'Hello test'),
(9, 72, 0, 'fdfdfsffsdf sfd dsf df sd', 0, '2023-01-18 18:38:33', 72, 'riyad', 'fsdf'),
(10, 54, 0, 'Testing Review', 0, '2023-01-21 11:54:08', 54, 'Rony Mia', 'Good'),
(11, 1, 1, 'dasd adasdasd', 1, '2023-01-21 19:28:31', 1, 'Mtgpro Admin', 'asda');

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
  `main_motto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `site_disclimer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `google_key`, `google_analytics_id`, `site_name`, `site_logo`, `favicon`, `seo_meta_description`, `seo_keywords`, `seo_image`, `tawk_chat_bot_key`, `name`, `address`, `driver`, `host`, `port`, `encryption`, `username`, `password`, `status`, `created_at`, `updated_at`, `application_type`, `app_mode`, `facebook_client_id`, `facebook_client_secret`, `facebook_callback_url`, `google_client_id`, `google_client_secret`, `google_callback_url`, `copyright_text`, `office_address`, `facebook_url`, `youtube_url`, `twitter_url`, `linkedin_url`, `telegram_url`, `whatsapp_number`, `ios_app_url`, `android_app_url`, `email`, `phone_no`, `support_email`, `instagram_url`, `site_title`, `pinterest_url`, `main_motto`, `site_disclimer`) VALUES
(1, NULL, 'G-12SD09FF03', 'MTPro.me', '/assets/uploads/logo/mtgpro-63b019bb82b60.png', '/assets/uploads/icon/mtg_gmail-dp-63b019bb822d0.jpg', 'Welcome to Mtgpro. It’s more than a digital business card, it’s a networking sales generator.', 'keyword 1, keyword 2', '/assets/uploads/logo/mtg_gmail-dp-63b019bb82e31.jpg', NULL, 'Mtgpro', 'noreply@mtgpro.me', 'smtp', 'smtp.mailtrap.io', 2525, 'tls', 'maidul@gmail.com', '12345678', '1', '2022-03-12 14:54:38', '2023-01-30 12:12:59', NULL, NULL, '5840805692668340', 'e15876dfe456af8cd5dea082aea5313e', 'https://letsconnectv2.webdevs4u.com/auth/facebook/callback', '570809630329-0a126djludbrlnkkcoh5je6b8fe8rqbo.apps.googleusercontent.com', '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', 'https://letsconnectv2.webdevs4u.com/auth/google/callback', 'Copyright © LetsConnect. All rights reserved.', 'USA', 'https://www.facebook.com/', 'https://www.youtube.com/', 'https://twitter.com/', 'https://www.linkedin.com/feed/', 'https://telegram.org/', '+8801515262626', 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'support@mtgpro.me', '+1516297-3389', 'support@mtgpro.me', 'https://www.instagram.com/_mtgpro.me/', 'MTGPro.me', NULL, 'MTGPro.me is an optimized digital business card solution for mortgage professionals. \r\nMTGPro.me is owned by Non-QM Doc, a Wyoming Limited Liability Company', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu \r\negestas tellus. Maecenas consectetur libero non velit laoreet posuere. \r\nNulla sit amet volutpat augue. Quisque malesuada vulputate ligula, non \r\nvehicula eros porttitor ut. Etiam mattis, leo vel ornare tincidunt, mi \r\nmauris aliquam magna, sit amet consectetur nibh tortor sed leo. In vel \r\nsollicitudin urna. Duis in lectus vel ipsum laoreet cursus ut sit amet \r\norci. Aenean tincidunt elementum nunc, nec efficitur risus consectetur \r\nconsequat.');

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
  `icon_color` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `example_text` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
  `order_id` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `type` enum('mobile','number','text','username','link','mail','address','file') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_link` varchar(124) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'if type is username',
  `is_paid` int(1) NOT NULL DEFAULT 0 COMMENT '0=free,1=paid'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_icon`
--

INSERT INTO `social_icon` (`id`, `icon_group`, `icon_name`, `icon_image`, `icon_fa`, `icon_title`, `icon_color`, `example_text`, `status`, `order_id`, `created_at`, `updated_at`, `type`, `main_link`, `is_paid`) VALUES
(1, 'Recommended', 'facebook', 'assets/img/icon/facebook.svg', NULL, 'Facebook', '#007bff', 'ex:https://www.facebook.com/johndoe', 1, 100, '2023-01-11 11:16:18', '2022-11-15 19:26:22', 'link', NULL, 0),
(2, 'Social Media', 'twitter', 'assets/img/icon/twitter.svg', NULL, 'Twitter', '#1DA1F2', 'johndoe', 1, 95, '2023-01-11 11:13:52', '2022-11-15 20:18:41', 'username', 'https://twitter.com/', 0),
(3, 'Social Media', 'linkedin', 'assets/img/icon/linkedin.svg', NULL, 'Linkedin', '#0A66C2', 'ex:https://www.linkedin.com/in/johndoe', 1, 90, '2023-01-17 10:44:01', '2022-11-15 20:18:41', 'link', NULL, 0),
(4, 'Social Media', 'pinterest', 'assets/img/icon/pinterest.svg', NULL, 'Pinterest', '#E60023', 'johndoe', 1, 85, '2023-01-11 11:13:49', '2022-11-15 20:18:41', 'username', 'https://www.pinterest.com/', 0),
(5, 'Contact', 'email', 'assets/img/icon/email.svg', NULL, 'Email', '#A93998', 'ex:example@gmail.com', 1, 80, '2023-01-11 06:52:49', '2022-11-15 20:18:41', 'mail', NULL, 0),
(6, 'Social Media', 'whatsapp', 'assets/img/icon/whatsapp.svg', NULL, 'Whatsapp', '#00EF4E', 'ex:+8801681944126', 1, 75, '2023-01-11 11:25:59', '2022-11-15 19:26:22', 'number', NULL, 0),
(7, 'Recommended', 'instagram', 'assets/img/icon/instagram.svg', NULL, 'Instagram', '#D83E73', 'ex:https://www.instagram.com/johndoe', 1, 70, '2023-01-16 18:02:45', '2022-11-15 19:26:22', 'username', 'https://www.instagram.com/', 0),
(8, 'More', 'textSection', 'assets/img/icon/textSection.svg', NULL, 'Text Section', '#ffffff', 'Text Section', 1, 65, '2023-01-11 06:28:23', '2022-11-15 19:26:22', 'text', NULL, 0),
(9, 'Recommended', 'phone', 'assets/img/icon/call.svg', '', 'Phone', '#3FE536', 'ex:+8801681944126', 1, 60, '2022-11-15 19:26:22', '2022-11-15 19:26:22', 'mobile', NULL, 0),
(10, 'Recommended', 'address', 'assets/img/icon/address.svg', NULL, 'Address', NULL, 'ex:Unit 10A, House 21, Road 17, Banani C/A, Dhaka 1213', 1, 55, '2023-01-17 15:18:08', '2022-11-15 20:18:41', 'address', NULL, 0),
(11, 'Recommended', 'app_link', 'assets/img/icon/app_link.svg', NULL, 'App Link', '#0C62F0', 'ex:https://www.applink.com/johndoe', 1, 1, '2023-01-11 11:17:37', '2022-11-15 20:18:41', 'link', NULL, 1),
(12, 'Music Media', 'apple', 'assets/img/icon/apple.svg', NULL, 'Apple Music', '#FA273F', 'https://www.apple.com/apple-music/', 1, 2, '2023-01-18 15:13:36', '2022-11-15 20:18:41', 'link', NULL, 0),
(13, 'Recommended', 'booksy', 'assets/img/icon/booksy.svg', NULL, 'Booksy', '#3DBDA3', 'ex:https://www.booksy.com/johndoe', 1, 3, '2023-01-11 11:17:29', '2023-01-01 22:20:09', 'link', NULL, 0),
(14, 'Recommended', 'calendly', 'assets/img/icon/calendly.svg', NULL, 'Calendly', '#006BFF', 'ex:https://www.calendly.com/johndoe', 1, 4, '2023-01-11 11:17:27', '2023-01-01 22:20:09', 'link', NULL, 0),
(15, 'Recommended', 'cashapp', 'assets/img/icon/cashapp.svg', NULL, 'Cash App', '#00D632', 'johndoe', 1, 5, '2023-01-11 11:14:34', '2023-01-01 22:20:09', 'username', 'https://cash.app/', 1),
(16, 'Recommended', 'clubhouse', 'assets/img/icon/clubhouse.svg', NULL, 'Clubhouse', '#F1EFE3', 'ex:https://www.clubhouse.com/johndoe', 1, 6, '2023-01-11 11:17:01', '2023-01-01 22:25:36', 'link', NULL, 0),
(18, 'Recommended', 'customlink', 'assets/img/icon/customlink.svg', NULL, 'Custom Link', '#FFFEFF', 'ex:https://www.customlink.com/johndoe', 1, 8, '2023-01-11 11:23:17', '2023-01-01 22:25:36', 'link', NULL, 0),
(19, 'Recommended', 'discord', 'assets/img/icon/discord.svg', NULL, 'Discord', '#5865F2', 'ex:https://www.discord.com/johndoe', 1, 9, '2023-01-11 11:16:55', '2023-01-01 22:25:36', 'link', NULL, 0),
(20, 'Recommended', 'dropdown', 'assets/img/icon/dropDown.svg', NULL, 'DropDown', '#fff', 'ex:https://www.dropdown.com/maidul', 1, 10, '2023-01-12 20:13:13', '2023-01-01 22:25:36', 'link', NULL, 0),
(21, 'Recommended', 'embeddedvideo', 'assets/img/icon/embeddedvideo.svg', NULL, 'Your video', '#fff', 'ex:https://www.embeddedvideo.com/maidul', 1, 11, '2023-01-18 14:53:12', '2023-01-01 22:34:37', 'link', NULL, 0),
(22, 'Recommended', 'etsy', 'assets/img/icon/etsy.svg', NULL, 'Etsy', '#fff', 'ex:https://www.etsy.com/maidul', 1, 12, '2023-01-16 18:22:20', '2023-01-01 22:34:37', 'link', NULL, 0),
(23, 'Recommended', 'facetime', 'assets/img/icon/facetime.svg', NULL, 'Face Time', '#2CE129', 'ex:https://www.facetime.com/johndoe', 1, 13, '2023-01-11 12:12:25', '2023-01-01 22:34:37', 'mobile', NULL, 0),
(24, 'Recommended', 'file', 'assets/img/icon/file.svg', NULL, 'File', '#fff', 'ex:', 1, 14, '2023-01-12 20:12:53', '2023-01-01 22:34:37', 'file', NULL, 1),
(25, 'More', 'hoobe', 'assets/img/icon/hoobe.svg', NULL, 'Hoobe', '#4BA6B9', 'ex:hoo.be link', 1, 15, '2023-01-11 11:50:02', '2023-01-01 22:34:37', 'link', NULL, 0),
(26, 'Recommended', 'linktree', 'assets/img/icon/linktree.svg', NULL, 'Linktree', '#fff', 'ex:https://linktr.ee/johndoe', 1, 16, '2023-01-11 11:22:40', '2023-01-01 22:34:37', 'link', NULL, 0),
(27, 'Recommended', 'mediakits', 'assets/img/icon/mediakits.svg', NULL, 'Mediakits', '#0B0A25', 'ex:https://www.mediakits.com/johndoe', 1, 29, '2023-01-11 11:16:50', '2023-01-01 22:34:37', 'link', NULL, 0),
(29, 'Recommended', 'opensea', 'assets/img/icon/opensea_color.svg', NULL, 'OpenSea', '#ffffff', 'ex:https://opensea.io/', 1, 17, '2023-01-16 18:25:12', '2023-01-01 22:41:18', 'link', NULL, 0),
(30, 'Payment', 'paypal', 'assets/img/icon/paypal.svg', NULL, 'Paypal', '#0080C3', 'ex:https://www.paypal.me/johndoe', 1, 18, '2023-01-17 15:18:36', '2023-01-01 22:41:18', 'link', NULL, 0),
(31, 'Recommended', 'podcasts', 'assets/img/icon/podcasts.svg', NULL, 'Podcasts', '#9539CD', 'ex:', 1, 19, '2023-01-16 18:17:22', '2023-01-01 22:41:18', 'link', 'https://podcastsconnect.apple.com/', 0),
(32, 'Recommended', 'Reviews', 'assets/img/icon/reviews.svg', NULL, 'Reviews', '#fff', 'ex: https://g.co/kgs/mcWyDK', 1, 20, '2023-01-16 18:23:58', '2023-01-01 22:41:18', 'link', NULL, 1),
(33, 'Recommended', 'safari', 'assets/img/icon/safari.svg', NULL, 'Safari', '#2B9FDA', 'ex:https://www.safari.com', 1, 21, '2023-01-12 20:11:43', '2023-01-01 22:41:18', 'link', NULL, 0),
(34, 'Recommended', 'snapchat', 'assets/img/icon/snapchat.svg', NULL, 'Snapchat', '#FFFC00', 'johndoe', 1, 22, '2023-01-11 11:14:27', '2023-01-01 22:41:18', 'username', 'https://www.snapchat.com/', 0),
(35, 'Recommended', 'soundcloud', 'assets/img/icon/soundcloud.svg', NULL, 'Soundcloud', '#FF3A00', 'johndoe', 1, 23, '2023-01-16 18:08:27', '2023-01-01 22:41:18', 'username', 'https://soundcloud.com/', 0),
(36, 'Recommended', 'spotify', 'assets/img/icon/spotify.svg', NULL, 'Spotify', '#151418', 'https://open.spotify.com/user/john_doe', 1, 24, '2023-01-17 15:17:42', '2023-01-01 22:41:18', 'link', NULL, 0),
(37, 'Recommended', 'square', 'assets/img/icon/square.svg', NULL, 'Square', '#212121', 'https://squareup.com/us/en', 1, 25, '2023-01-17 10:50:48', '2023-01-01 22:41:18', 'link', 'https://squareup.com/', 0),
(38, 'Recommended', 'telegram', 'assets/img/icon/telegram.svg', NULL, 'Telegram', '#28A8E9', 'https://t.me/johndoe', 1, 26, '2023-01-11 11:15:34', '2023-01-01 22:41:18', 'link', NULL, 0),
(39, 'Recommended', 'tiktok', 'assets/img/icon/tiktok.svg', NULL, 'Tiktok', '#020002', 'purnima', 1, 27, '2023-01-12 20:09:06', '2023-01-01 22:41:18', 'username', 'https://tiktok.com/', 0),
(40, 'Recommended', 'twitch', 'assets/img/icon/twitch.svg', NULL, 'Twitch', '#9146FF', 'johndoe', 1, 30, '2023-01-16 18:05:15', '2023-01-01 22:53:39', 'username', 'https://www.twitch.tv/', 0),
(42, 'Recommended', 'wechat', 'assets/img/icon/wechat.svg', NULL, 'Wechat', '#01D960', 'ex:https://www.wechat.com/maidul', 1, 33, '2023-01-16 18:05:59', '2023-01-01 22:53:39', 'number', NULL, 0),
(43, 'Recommended', 'yelp', 'assets/img/icon/yelp.svg', '', 'Yelp', '#FF3753', 'ex:https://www.yelp.com/maidul', 1, 34, '2023-01-01 22:53:39', '2023-01-01 22:53:39', 'link', NULL, 0),
(44, 'Recommended', 'youtube', 'assets/img/icon/youtube.svg', NULL, 'Youtube', '#FF0000', 'ex:https://www.youtube.com/johndoe', 1, 35, '2023-01-16 18:04:48', '2023-01-01 22:53:39', 'link', NULL, 0),
(45, 'Recommended', 'zelle', 'assets/img/icon/zelle.svg', NULL, 'Zelle', '#AA00FF', 'ex:+8801681944126', 1, 37, '2023-01-11 11:19:18', '2023-01-01 22:53:39', 'number', NULL, 0),
(46, 'Recommended', 'email', 'assets/img/icon/email.svg', NULL, 'Email', '#1D61F0', 'ex:example@gmail.com', 1, 82, '2023-01-11 07:02:55', '2023-01-11 01:02:55', 'mail', NULL, 0),
(50, 'Recommended', 'Venmo.com', 'assets/img/icon/venmo.svg', NULL, 'Venmo', '#008CFF', 'johndoe', 1, 32, '2023-01-11 11:14:00', '2023-01-11 02:49:28', 'username', 'https://venmo.com/', 0),
(51, 'More', 'Website', 'assets/img/icon/safari.svg', NULL, 'Website', '#ffffff', 'ex:https://www.johndoe.com/', 1, 23, '2023-01-16 18:12:03', '2023-01-11 05:48:35', 'link', NULL, 1),
(52, 'More', 'Featured', 'assets/img/icon/featured.svg', NULL, 'Featured', '#ffffff', 'ex: featured  link', 1, 2, '2023-01-16 18:29:46', '2023-01-11 06:07:29', 'link', NULL, 0),
(54, 'Recommended', 'text', 'assets/img/icon/text.svg', NULL, 'Text', '#2ce029', 'ex:+8801918993427', 1, 2, '2023-01-11 12:07:29', '2023-01-11 06:07:29', 'text', NULL, 0);

--
-- Triggers `social_icon`
--
DELIMITER $$
CREATE TRIGGER `after_social_icon_update` AFTER UPDATE ON `social_icon` FOR EACH ROW begin


if new.type <> old.type then   

update business_fields set type = new.type where icon_id = new.id;

end if;


end
$$
DELIMITER ;

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
  `plan_id` int(100) DEFAULT NULL,
  `order_id` int(100) DEFAULT NULL,
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

INSERT INTO `transactions` (`id`, `gobiz_transaction_id`, `transaction_date`, `transaction_id`, `user_id`, `plan_id`, `order_id`, `desciption`, `payment_gateway_name`, `transaction_currency`, `transaction_amount`, `invoice_number`, `invoice_prefix`, `invoice_details`, `payment_status`, `status`, `created_at`, `updated_at`) VALUES
(17, '', '2023-01-11 11:39:14', 'sub_1MOx1oBIRmXVjgUGlA9e9Zuz', '70', 2, NULL, 'Gold Plan', 'Stripe', 'USD', '17.7', '63be4b8252847', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"Masud\",\"to_billing_address\":\"Dhaka\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+880\",\"to_billing_email\":\"masud@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":17.7,\"subtotal\":15,\"tax_amount\":2.7}', 'Success', '1', '2023-01-11 11:39:14', '2023-01-11 11:39:14'),
(18, '', '2023-01-12 19:49:51', 'sub_1MPRA9BIRmXVjgUGKgMcm7mn', '76', 2, NULL, 'Gold Plan', 'Stripe', 'usd', '54.28', '63c00fff91a61', NULL, '{\"from_billing_name\":\"LetsConnect\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@letsconnect.com\",\"to_billing_name\":\"John A. Knox\",\"to_billing_address\":\"asasasas\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"JohnAKnox@dayrep.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"18\",\"invoice_amount\":54.28,\"subtotal\":46,\"tax_amount\":8.28}', 'Success', '1', '2023-01-12 19:49:51', '2023-01-12 19:49:51'),
(20, '63c392072f03a', '2023-01-15 11:41:27', '', '92', 62, NULL, 'Free Plan', 'Offline', 'USD', '0', '1', 'INV-', '{\"from_billing_name\":\"conexus\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"SPN125553322\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@conexus.com\",\"to_billing_name\":null,\"to_billing_address\":null,\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":null,\"to_billing_email\":null,\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":0,\"subtotal\":\"0\",\"tax_amount\":0}', 'SUCCESS', '1', '2023-01-15 11:41:27', '2023-01-15 11:41:27'),
(21, '', '2023-01-18 12:15:20', 'sub_1MRUvaBIRmXVjgUGOnv5YRAG', '110', 2, NULL, 'Intro Pro Plan Plan', 'Stripe', 'usd', '100', '63c78e78094ca', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Moshiur Rahman\",\"to_billing_address\":\"Dhaka Bangladesh\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+8801770802187\",\"to_billing_email\":\"moshiur2187@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":100,\"subtotal\":100,\"tax_amount\":0}', 'Success', '1', '2023-01-18 12:15:20', '2023-01-18 12:15:20'),
(22, '', '2023-01-18 14:53:40', 'sub_1MRXOoBIRmXVjgUGLKbn3z6h', '113', 2, NULL, 'Intro Pro Plan Plan', 'Stripe', 'usd', '14', '63c7b39434a28', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Manik\",\"to_billing_address\":\"Dhaka Bangladesh\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+8801770802187\",\"to_billing_email\":\"moshiur2187@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":14,\"subtotal\":14,\"tax_amount\":0}', 'Success', '1', '2023-01-18 14:53:40', '2023-01-18 14:53:40'),
(23, '', '2023-01-19 09:07:58', 'sub_1MRoToBIRmXVjgUGLJbN43u0', '116', 3, NULL, 'Corporate Plan', 'Stripe', 'usd', '149', '63c8b40eb0c4f', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Rony Islam\",\"to_billing_address\":\"dhaka, banani\\r\\ndhaka\",\"to_billing_city\":\"Chittoor\",\"to_billing_state\":\"ANDHRA PRADESH\",\"to_billing_zipcode\":\"1213\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+880199057232\",\"to_billing_email\":\"ronymia.tech@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":149,\"subtotal\":149,\"tax_amount\":0}', 'Success', '1', '2023-01-19 09:07:58', '2023-01-19 09:07:58'),
(24, '', '2023-01-19 14:52:04', 'sub_1MRtqoBIRmXVjgUGo3rd0TIK', '109', 3, NULL, 'Corporate Plan', 'Stripe', 'usd', '149', '63c904b429fca', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Moshiur Rahman\",\"to_billing_address\":\"Test Buliding\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+8801770802187\",\"to_billing_email\":\"mo15103053@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":149,\"subtotal\":149,\"tax_amount\":0}', 'Success', '1', '2023-01-19 14:52:04', '2023-01-19 14:52:04'),
(25, '', '2023-01-19 15:43:27', 'sub_1MRueXBIRmXVjgUGxFSqrcQX', '109', 2, NULL, 'Intro Pro Plan Plan', 'Stripe', 'usd', '100', '63c910bf2ff8f', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Moshiur Rahman\",\"to_billing_address\":\"Test Buliding\",\"to_billing_city\":\"Dhaka\",\"to_billing_state\":\"Dhaka Division\",\"to_billing_zipcode\":\"1212\",\"to_billing_country\":\"Bangladesh\",\"to_billing_phone\":\"+8801770802187\",\"to_billing_email\":\"mo15103053@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":100,\"subtotal\":100,\"tax_amount\":0}', 'Success', '1', '2023-01-19 15:43:27', '2023-01-19 15:43:27'),
(26, '', '2023-01-21 19:26:13', 'sub_1MSh5DBIRmXVjgUGfTyKDm60', '44', 2, NULL, 'Intro Pro Plan Plan', 'Stripe', 'usd', '100', '63cbe7f591814', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Uma Morgan\",\"to_billing_address\":\"Optio non modi irur\",\"to_billing_city\":\"Voluptate aperiam ha\",\"to_billing_state\":\"Inventore ea culpa\",\"to_billing_zipcode\":\"66667\",\"to_billing_country\":\"United States\",\"to_billing_phone\":\"+1 778-849-6926\",\"to_billing_email\":\"hokedege@mailinator.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":100,\"subtotal\":100,\"tax_amount\":0}', 'Success', '1', '2023-01-21 19:26:13', '2023-01-21 19:26:13'),
(27, '', '2023-01-22 09:44:06', 'sub_1MSuTQBIRmXVjgUGFHP65YAQ', '54', 2, NULL, 'Intro Pro Plan Plan', 'Stripe', 'usd', '100', '63ccb106c13f2', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Rony Islam\",\"to_billing_address\":\"dhaka, banani\\r\\ndhaka\",\"to_billing_city\":\"Chittoor\",\"to_billing_state\":\"ANDHRA PRADESH\",\"to_billing_zipcode\":\"1213\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+880 1990-57232\",\"to_billing_email\":\"ronymia.tech@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":100,\"subtotal\":100,\"tax_amount\":0}', 'Success', '1', '2023-01-22 09:44:06', '2023-01-22 09:44:06'),
(28, '', '2023-01-22 13:43:08', 'sub_1MSyCkBIRmXVjgUGuY5Kji59', '51', 2, NULL, 'Intro Pro Plan Plan', 'Stripe', 'usd', '100', '63cce90c32561', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Kamal\",\"to_billing_address\":\"sdsd\",\"to_billing_city\":\"sdsd\",\"to_billing_state\":\"sdsd\",\"to_billing_zipcode\":\"1200\",\"to_billing_country\":\"United States\",\"to_billing_phone\":\"+8801681944126\",\"to_billing_email\":\"user10@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":100,\"subtotal\":100,\"tax_amount\":0}', 'Success', '1', '2023-01-22 07:43:08', '2023-01-22 07:43:08'),
(29, '', '2023-01-25 11:02:04', 'sub_1MU17WBIRmXVjgUGYkBFDql9', '120', 2, 1, 'Intro Pro Plan Plan', 'Stripe', 'usd', '105', '63d0b7cc09df5', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+8801794798227\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":100,\"subtotal\":100,\"tax_amount\":0}', 'Success', '1', '2023-01-25 05:02:04', '2023-01-25 05:02:04'),
(30, '', '2023-01-26 17:30:35', 'txn_3MUTf8IH2i6FoGaE0jBzk41V', '1', NULL, 2, 'from order 2', 'Stripe', 'usd', '156', '63d2645b89fd6', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Mtgpro Admin\",\"to_billing_address\":\"Gazipur\",\"to_billing_city\":\"dsada\",\"to_billing_state\":\"dada\",\"to_billing_zipcode\":\"asdad\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+8801794798227\",\"to_billing_email\":\"arobil@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":\"txn_3MUTf8IH2i6FoGaE0jBzk41V\",\"subtotal\":\"txn_3MUTf8IH2i6FoGaE0jBzk41V\",\"tax_amount\":0}', 'Success', '1', '2023-01-26 11:30:35', '2023-01-26 11:30:35'),
(31, '', '2023-01-28 17:37:27', 'txn_3MVCivIH2i6FoGaE1zdrVo2w', '120', NULL, 3, 'from order 3', 'Stripe', 'usd', '142', '63d508f7ca123', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":\"txn_3MVCivIH2i6FoGaE1zdrVo2w\",\"subtotal\":\"txn_3MVCivIH2i6FoGaE1zdrVo2w\",\"tax_amount\":0}', 'Success', '1', '2023-01-28 11:37:27', '2023-01-28 11:37:27'),
(32, '', '2023-01-28 18:29:31', 'txn_3MVDXLIH2i6FoGaE19n00Tem', '120', NULL, 4, 'from order 4', 'Stripe', 'usd', '312', '63d5152b64f2a', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+8801794798227\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":\"txn_3MVDXLIH2i6FoGaE19n00Tem\",\"subtotal\":\"txn_3MVDXLIH2i6FoGaE19n00Tem\",\"tax_amount\":0}', 'Success', '1', '2023-01-28 12:29:31', '2023-01-28 12:29:31'),
(33, '', '2023-01-29 11:28:54', 'txn_3MVTRiIH2i6FoGaE0nHEFnST', '120', NULL, 5, 'from order 5', 'Stripe', 'usd', '172', '63d60416f1039', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+1\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":\"txn_3MVTRiIH2i6FoGaE0nHEFnST\",\"subtotal\":\"txn_3MVTRiIH2i6FoGaE0nHEFnST\",\"tax_amount\":0}', 'Success', '1', '2023-01-29 05:28:54', '2023-01-29 05:28:54'),
(34, '', '2023-01-29 12:28:21', 'txn_3MVUNFIH2i6FoGaE0fAbTUEN', '120', NULL, 6, 'from order 6', 'Stripe', 'usd', '170', '63d6120515c24', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+8801794798227\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":\"txn_3MVUNFIH2i6FoGaE0fAbTUEN\",\"subtotal\":\"txn_3MVUNFIH2i6FoGaE0fAbTUEN\",\"tax_amount\":0}', 'Success', '1', '2023-01-29 06:28:21', '2023-01-29 06:28:21'),
(35, '', '2023-01-29 13:36:00', 'txn_3MVVQhIH2i6FoGaE1LrICwsc', '120', NULL, 7, 'from order 7', 'Stripe', 'usd', '156', '63d621e0031b0', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+880794798227\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":\"txn_3MVVQhIH2i6FoGaE1LrICwsc\",\"subtotal\":\"txn_3MVVQhIH2i6FoGaE1LrICwsc\",\"tax_amount\":0}', 'Success', '1', '2023-01-29 07:36:00', '2023-01-29 07:36:00'),
(36, '', '2023-01-29 13:41:47', 'txn_3MVVWKIH2i6FoGaE1Gzh3t3A', '120', NULL, 8, 'from order 8', 'Stripe', 'usd', '142', '63d6233b11e18', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+88011111111111\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":\"txn_3MVVWKIH2i6FoGaE1Gzh3t3A\",\"subtotal\":\"txn_3MVVWKIH2i6FoGaE1Gzh3t3A\",\"tax_amount\":0}', 'Success', '1', '2023-01-29 07:41:47', '2023-01-29 07:41:47'),
(37, '', '2023-01-29 15:20:26', 'sub_1MVX3oBIRmXVjgUGXWAaz1K3', '120', 2, NULL, 'Intro Pro Plan Plan', 'Stripe', 'usd', '14', '63d63a5aaf953', NULL, '{\"from_billing_name\":\"mtgpro\",\"from_billing_address\":\"123, lorem ipsum\",\"from_billing_city\":\"dhaka\",\"from_billing_state\":\"dhaka\",\"from_billing_zipcode\":\"1212\",\"from_billing_country\":\"Bangaldesh\",\"from_vat_number\":\"0\",\"from_billing_phone\":\"+88 01767671133\",\"from_billing_email\":\"sales@mtgpro.me\",\"to_billing_name\":\"Md Mridul\",\"to_billing_address\":\"mawna\",\"to_billing_city\":\"sreepur\",\"to_billing_state\":\"gazipur\",\"to_billing_zipcode\":\"1740\",\"to_billing_country\":\"Bangladesh (\\u09ac\\u09be\\u0982\\u09b2\\u09be\\u09a6\\u09c7\\u09b6)\",\"to_billing_phone\":\"+8802711111111111\",\"to_billing_email\":\"mdmridul608@gmail.com\",\"to_vat_number\":null,\"tax_name\":\"Goods and Service Tax\",\"tax_type\":\"exclusive\",\"tax_value\":\"0\",\"invoice_amount\":14,\"subtotal\":14,\"tax_amount\":0}', 'Success', '1', '2023-01-29 09:20:26', '2023-01-29 09:20:26');

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
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `active_card_id` int(10) DEFAULT NULL,
  `connection_title` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_notify` tinyint(4) DEFAULT 1,
  `user_disclimer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`, `active_card_id`, `connection_title`, `is_notify`, `user_disclimer`) VALUES
(1, 'Mtgpro Admin', NULL, 'arobil@gmail.com', 'user_1', NULL, 1, 1, NULL, 0, '$2y$10$ol.KtLxyCrVL3TQH1CKeoerNqDOJYs5g59Z0.RhU37uL4t3KvSVYe', 'Email', '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-15', '2023-01-14', 'Mtgpro Admin', NULL, NULL, 'Gazipur', 'dsada', 'dada', 'asdad', 'Bangladesh (বাংলাদেশ)', '+8801794798227', 'arobil@gmail.com', 1, NULL, NULL, NULL, NULL, NULL, '2022-03-12 14:54:38', '2023-01-19 18:46:44', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 89, NULL, 0, NULL),
(2, 'user1', NULL, 'maidul.tech10@gmail.com', 'user_2', NULL, 0, 2, NULL, 0, '$2y$10$v8MKSaFQyVL..Fs8ZW.Pt..RccGPD5uRfyKexrYcgW0GXUaGvpTlO', 'Email', 'https://www.mtgpro.me/assets/uploads/avatar/-63c2bc503f953.png', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-09 17:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-10', '2023-01-09', 'Dahlia Strong', 'personal', '123', NULL, 'Autem distinctio Sa', 'Odit velit qui a tot', '75510', NULL, '+1 (606) 757-4578', 'comy@mailinator.com', 1, NULL, NULL, NULL, NULL, 'cus_MvsUI7ZC6dOOp9', '2022-08-15 14:34:14', '2023-01-15 10:00:00', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ZjzgMfO4nMKUHEVIcCKDa0iHd2vlYQ9NbLGQN9qM5igKWgkIFBNVAJVAYkh3', '2023-01-15 11:00:00', 1, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(44, 'Md Maidul Islam', NULL, 'Maidul@gmail.com', 'user_44', NULL, 1, 2, NULL, 0, '$2y$10$ymfM/z4aBi58HGVoQl48HekrFbCUpJYmDnWuW1tmwd0EjspASl0yi', NULL, NULL, '2', NULL, '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-21', '2023-01-21', 'Uma Morgan', NULL, NULL, 'Optio non modi irur', 'Voluptate aperiam ha', 'Inventore ea culpa', '66667', 'United States', '+1 778-849-6926', 'hokedege@mailinator.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MSh5DBIRmXVjgUGfTyKDm60\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674307571,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674307571,\"currency\":\"usd\",\"current_period_end\":1705843571,\"current_period_start\":1674307571,\"customer\":\"cus_ND7J6aqyTPH1fc\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_ND7J0RXADy3Nc1\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674307572,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MSh5DBIRmXVjgUGfTyKDm60\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MSh5DBIRmXVjgUGfTyKDm60\"},\"latest_invoice\":\"in_1MSh5DBIRmXVjgUGduIgvgwM\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674307571,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_ND7J6aqyTPH1fc', '2022-11-02 08:58:29', '2023-01-21 19:26:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, 0, NULL),
(45, 'Maidul', NULL, 'maidul1@gmail.com', 'user_45', NULL, 1, 1, NULL, 0, '$2y$10$4CA3v2emacQWtY67ZkfS8.FmugGYH5pY3lcmvVy4Xl.ipkykEqSiO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-19 01:06:04', '2023-01-15 11:31:53', NULL, NULL, NULL, NULL, NULL, '0152121012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(49, 'Rokib', NULL, 'rokib@gmail.com', 'user_49', NULL, 1, 2, NULL, 0, '$2y$10$cBU5Zq8kX/CN14iPR.ghK.O8tCNVVQsMQrHSv9npCHWYn1PaUUlVi', NULL, 'upload/profile/1669453399.jpg', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-27', '2022-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-26 06:24:04', '2022-11-26 03:03:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(50, 'Sharif', NULL, 'sharif@gmail.com', 'user_50', NULL, 1, 2, NULL, 0, '$2y$10$vlc72hr0quMawpKKBAWVWur2LLoS55VirnJVJRDOlqScbglQ8JfG6', NULL, 'upload/profile/1669558751.png', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-28', '2022-11-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-27 14:08:58', '2022-11-27 08:19:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(51, 'Kamal', NULL, 'user10@gmail.com', 'user_51', NULL, 1, 2, NULL, 0, '$2y$10$cuwHVKFPHtqzEACwJKh3iORBwWSC0Ywgn6corStox682JvFgVkS7m', NULL, NULL, '2', NULL, '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T11:10:20.000000Z\",\"updated_at\":\"2023-01-17T21:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-22', '2023-01-22', 'Kamal', NULL, NULL, 'sdsd', 'sdsd', 'sdsd', '1200', 'United States', '+8801681944126', 'user10@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MSyCkBIRmXVjgUGuY5Kji59\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674373386,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674373386,\"currency\":\"usd\",\"current_period_end\":1705909386,\"current_period_start\":1674373386,\"customer\":\"cus_NDP05OpdrmqMMc\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NDP07z9FdGekbC\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674373386,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MSyCkBIRmXVjgUGuY5Kji59\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MSyCkBIRmXVjgUGuY5Kji59\"},\"latest_invoice\":\"in_1MSyCkBIRmXVjgUGrbxjRFda\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674373386,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NDP05OpdrmqMMc', '2022-11-30 07:51:58', '2023-01-22 07:57:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 35, NULL, 0, NULL),
(52, 'Jamal', NULL, 'jamal@gmail.com', 'user_52', NULL, 1, 2, NULL, 0, '$2y$10$YJQ.XhRrFAnodS5cz.LLQ.bNFUtqFyO3ilumeNR6B8Y0qLFlTBc1u', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-12-30', '2022-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-30 08:17:36', '2022-11-30 02:18:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(54, 'Rony Mia', NULL, 'ronymia.tech@gmail.com', 'user_54', NULL, 1, 2, NULL, 0, '$2y$10$mwV9B/U0MVYKpc76MICZPuObdPi4FNW0S0OD1IfOMS0kIukvAMU6y', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4C9qHTYcI0ZzTxl40nUtRPzrJXOyHnrXLCEH3G=s96-c', '2', NULL, '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-22', '2023-01-22', 'Rony Islam', NULL, NULL, 'dhaka, banani\r\ndhaka', 'Chittoor', 'ANDHRA PRADESH', '1213', 'Bangladesh (বাংলাদেশ)', '+880 1990-57232', 'ronymia.tech@gmail.com', 1, '2bXvA82lZv0rPAZwmE8A9YLrxiCdow7EE8RD1oKaTdw1zsBwWD7DGJaRd4TN', NULL, NULL, '{\"id\":\"sub_1MSuTQBIRmXVjgUGFHP65YAQ\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674359044,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674359044,\"currency\":\"usd\",\"current_period_end\":1705895044,\"current_period_start\":1674359044,\"customer\":\"cus_NDL9pBBoWWo3Ch\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NDL9BIiUqsQtS9\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674359045,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MSuTQBIRmXVjgUGFHP65YAQ\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MSuTQBIRmXVjgUGFHP65YAQ\"},\"latest_invoice\":\"in_1MSuTQBIRmXVjgUGO1pEVmbR\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674359044,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NDL9pBBoWWo3Ch', '2022-12-08 08:21:37', '2023-01-21 12:11:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107403319867710670983', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 41, NULL, 0, NULL),
(57, 'Mokaddes Hosain', NULL, 'mr.mokaddes@gmail.com', 'user_57', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2308423085971803/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:45:25', '2022-12-10 06:45:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2308423085971803', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(58, 'বেদনার বিশালতা', NULL, 'mr.mokaddes@yahoo.com', 'user_58', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2483507575123152/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:46:38', '2022-12-10 06:46:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2483507575123152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(59, 'Md Maidul Islam', NULL, 'mahibc1@gmail.com', 'user_59', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2135716489941526/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:57:59', '2022-12-10 06:57:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2135716489941526', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(60, 'Md Maidul', NULL, 'maidul.tech1@gmail.com', 'user_60', NULL, 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4oYDvcIxT3OAcXD-t_j8Z_gWfrBS7dbYbMrZA7=s96-c', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:59:08', '2022-12-10 06:59:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107639191533203099239', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(62, 'Rony Mia', NULL, 'ronymia111333@gmail.com', 'user_62', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/1801020763564287/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-10 08:06:19', '2022-12-10 08:06:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '1801020763564287', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(64, 'Tenu', NULL, 'teno@gmail.com', 'user_64', NULL, 1, 2, NULL, 0, '$2y$10$cJO1.wrrpI4NRQgKV0CLTeY4S8g/pCuKl5n.8hDbu.OC2XCneeH1W', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"10\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-11', '2022-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-12-11 10:29:58', '2022-12-13 00:32:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(65, 'Pori Moni', NULL, 'pori@gmail.com', 'user_65', NULL, 2, 2, NULL, 0, '$2y$10$LAR/Q4BqT/yNaM9dyL8DbuSBZoEvuLwLNTjIgJ8r/G7P007KmpTKi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-01 00:14:23', '2023-01-01 00:14:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(66, 'Raj', NULL, 'raj@gmail.com', 'user_66', NULL, 2, 2, NULL, 0, '$2y$10$5I8iykUXNQAiPBUSN8uytOgY.P22b5RfK/akOiazXBlY2Zh.Q1OZu', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-03 20:16:49\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-09', '2023-01-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-01 14:27:22', '2023-01-08 13:19:29', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(67, 'Hasad Whitfield', NULL, 'jexoqo@mailinator.com', 'user_67', NULL, 2, 2, NULL, 0, '$2y$10$W/ErYo1AoUcb4l/yTtrZOeDp.KyqGr4NpGvKxomBXiadr33zpRjZy', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-03 20:16:49\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2024-01-06', '2023-01-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-04 14:18:34', '2023-01-05 14:55:19', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(68, 'Cade Elliott', NULL, 'vetidudug@mailinator.com', 'user_68', NULL, 2, 2, NULL, 0, '$2y$10$sZ.HEx9Bbwx.A8Jd6yIjvupn8EA3b.4pC/zL2bIB2t3Uxo51q6JnW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-08 13:18:16', '2023-01-08 13:18:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`, `active_card_id`, `connection_title`, `is_notify`, `user_disclimer`) VALUES
(69, 'sakil', NULL, 'sakil@gmail.com', 'user_69', 'BD', 1, 2, NULL, 0, '$2y$10$tsuhxswes335t1.UCXmWnuYEJlrD3d3y9N/M7Rk0BN0tG4tkb2cc.', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 11:05:43', '2023-01-11 11:05:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(70, 'Masud', NULL, 'masud@gmail.com', 'user_70', 'BD', 1, 2, NULL, 0, '$2y$10$CM3o5lVs.hFjzxt/ODwGMu.UM.zXDpyYfgTf5CKXkRXaYpuQH7YES', NULL, 'https://www.mtgpro.me/assets/uploads/avatar/-63beaeef6f719.png', '2', NULL, '{\"id\":2,\"plan_type\":2,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Gold\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":46,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solopreneur Account +\\\",\\\"Up to 20 Shareable Digital Cards\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Marketing Mastery 101 Guide\\\",\\\"BONUS: MTG Branding Guide\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-03T08:17:56.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2023-02-11', '2023-01-11', 'Masud', NULL, NULL, 'Dhaka', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+880', 'masud@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MOx1oBIRmXVjgUGlA9e9Zuz\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1673415551,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1673415551,\"currency\":\"usd\",\"current_period_end\":1676093951,\"current_period_start\":1673415551,\"customer\":\"cus_N9FWOBDt6N7yDU\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_N9FWwITGjZzQmr\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1673415552,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MOx1oBIRmXVjgUGlA9e9Zuz\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MOx1oBIRmXVjgUGlA9e9Zuz\"},\"latest_invoice\":\"in_1MOx1oBIRmXVjgUGal5lHAzu\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1673415551,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_N9FWOBDt6N7yDU', '2023-01-11 11:25:23', '2023-01-19 19:36:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 76, NULL, 0, NULL),
(71, 'Ziaur Rahman', NULL, 'ziariyad018@gmail.com', 'user_71', 'BD', 1, 2, NULL, 0, '$2y$10$8gMttuZN5GkCfr.14E7E/O1sO9y6GftOKaFkT.qX.P6bK6C7b.fLO', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 15:39:25', '2023-01-18 18:25:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 79, NULL, 0, NULL),
(72, 'riyad', NULL, 'ziariyad@gmail.com', 'user_72', 'BD', 1, 2, NULL, 0, '$2y$10$7ABZEkqQqlQBdkwTvuJ66OutBF0hqqLpPWhUB/bACpmBxA0cEW0rO', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 16:30:07', '2023-01-18 18:24:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 108, NULL, 0, NULL),
(73, 'Joe Renter', NULL, 'jr@mtgpro.me', 'user_73', 'US', 1, 1, NULL, 0, '$2y$10$tzk9UHWHh1gLcv9PuLNXhuWTCIuoiaOJ.pboz74w//FL5m3Jd2WLe', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Freeport', 'New York', '11520', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:11:33', '2023-01-22 06:12:56', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, NULL, 0, NULL),
(74, 'asasas', NULL, 'asasas@gmail.com', 'user_74', 'BD', 1, 2, NULL, 0, '$2y$10$4a5PMD8SeIF08/ST4mSxEuo92SQohfgE3m4EndvFRXlWZzmc27lV.', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:32:27', '2023-01-11 19:32:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(75, 'Michael M. Kelly', NULL, 'MichaelMKelly@jourrapide.com', 'user_75', 'BD', 1, 2, NULL, 0, '$2y$10$Bf9ynbXiKV08/LLzMcs/PuLEF7BvdanzDHg2BPX8/8qENvpqDzg6K', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:38:51', '2023-01-11 19:38:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(76, 'John A. Knox', NULL, 'JohnAKnox@dayrep.com', 'user_76', 'BD', 1, 2, NULL, 0, '$2y$10$bY/OLPoEJiyMcF7aNx11U.6CQCxXRbQdwmrNhWwOuxA1Oe198aFne', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-15', '2023-01-14', 'John A. Knox', NULL, NULL, 'asasasas', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+1', 'JohnAKnox@dayrep.com', 1, NULL, NULL, NULL, NULL, 'cus_N9kfofuMNVHkV5', '2023-01-11 19:41:00', '2023-01-14 15:33:39', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 83, NULL, 0, NULL),
(77, 'Sakib', NULL, 'sakib@gmail.com', 'user_77', 'BD', 1, 2, NULL, 0, '$2y$10$/DplIPSuQ7fmefKTx0YzW.V9y0LpBd36kFv.XI8J11rxHNx6hmuqq', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 20:47:46', '2023-01-11 20:47:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(78, 'Jagdeep Singh', NULL, 'jagdeep.saini2704@gmail.com', 'user_78', 'US', 1, 2, NULL, 0, '$2y$10$gxZ4BZmd7ZOhx9hUWNonXOKnSJW.zA4AgB0c.si9Q24uAW2yJN/jG', NULL, 'https://www.mtgpro.me/assets/uploads/avatar/-63c181e7893d3.png', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-14', '2023-01-13', NULL, NULL, NULL, NULL, 'Rockaway', 'New Jersey', '07866', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 22:36:54', '2023-01-20 20:54:50', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 115, 'Share your info back with Jagdeep Singh', 1, NULL),
(79, 'Purnima', NULL, 'purnima@gmail.com', 'purnima', 'BD', 1, 2, NULL, 0, '$2y$10$Z5NAlVt3aznQO6jBRpxsNuEQKUUdDcyrDGpofiMR2lMNMW6XXqS.e', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-12', '2023-01-12', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-12 18:26:15', '2023-01-13 09:42:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 87, NULL, 0, NULL),
(80, 'Md Maidul Islam', NULL, 'Md_Maidul_Islam@gmail.com', 'Md Maidul Islam', 'BD', 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2181498475363327/picture?type=normal', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2026-01-12', '2023-01-12', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1000', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-12 21:02:31', '2023-01-12 21:03:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2181498475363327', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 88, NULL, 0, NULL),
(81, 'Sarwar', NULL, 'nayeemsarwar1275@gmail.com', '', NULL, 2, 1, NULL, 0, '$2y$10$.NAQ7rE6Xs4bBG3CvcUxLumPgUKbJpWTDQEha/zUb7N8bOC4FXmb6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 11:26:48', '2023-01-14 11:26:48', NULL, NULL, NULL, NULL, NULL, '01520123451', NULL, NULL, NULL, NULL, 'Software', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(82, 'hasemali', NULL, 'hasem@gmail.com', 'hasem', 'BD', 1, 2, NULL, 0, '$2y$10$dTqTEqOrTk7cCtpWGeLB6.qpRrRfnso95OtHyEqTz3z5Q.Sl3D5iS', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 12:06:37', '2023-01-14 12:06:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(83, 'abir sarwar', NULL, 'abir@gmail.com', 'abir', 'BD', 1, 2, NULL, 0, '$2y$10$HHlH45WbOw5cJBXMAO.0eOTtrLQDjNZ4taecP53WnpusgSgHdq0zS', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 12:08:29', '2023-01-14 12:09:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 90, NULL, 0, NULL),
(84, 'kahlillur rahman', NULL, 'khalil@gmail.com', 'khalil', 'BD', 1, 2, NULL, 0, '$2y$10$f1lDod7CNE7WTHAyZQ5zi.AV171RaNuiUKFAHV4owtLo5J6PT9XL2', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 12:12:28', '2023-01-14 12:12:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(85, 'maidul', NULL, 'maidul01@gmail.com', 'maidul', 'BD', 1, 2, NULL, 0, '$2y$10$fKj8IB4NbJuCaHCklp5s4ePBCARGg7iF9Wvwe6820ymb/8MmPSdUG', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 14:15:38', '2023-01-14 14:15:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(90, 'Kamrul', NULL, 'kamrul@gmail.com', 'kamrul', 'BD', 1, 2, NULL, 0, '$2y$10$HQzIt8E1XG0v9DYcaZS8Uu0dGJfEsjIAK/QcKOJZKC26yd514s/ae', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 20:40:21', '2023-01-14 20:41:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 94, NULL, 0, NULL),
(91, 'Joseph Renter', NULL, 'jr@nonqmdoc.com', 'joeR', 'US', 1, 2, NULL, 0, '$2y$10$eFth2lsgFu1.hLAePt/nfuFGQIz4Z8P08lCcN10EHdHp8pjAXh8sa', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-15', '2023-01-15', NULL, NULL, NULL, NULL, 'Freeport', 'New York', '11520', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-15 10:25:34', '2023-01-15 10:26:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 95, NULL, 0, NULL),
(92, 'ajom khan', NULL, 'ajim@gmail.com', 'ajom', 'BD', 1, 2, NULL, 0, '$2y$10$8uBwblLa1jQl4FttT08SPuKu.R0.5.92JksIe446/5EU0oUsy2/pq', NULL, NULL, '62f8bab5e6912', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T03:04:53.000000Z\",\"updated_at\":\"2023-01-09T05:13:33.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-16', '2023-01-15', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-15 11:02:12', '2023-01-15 11:41:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 96, NULL, 0, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`, `active_card_id`, `connection_title`, `is_notify`, `user_disclimer`) VALUES
(107, 'Arifur Rahman', NULL, '107-arifmahmud64@gmail.com', 'arifur-rahman-63c3a8179e5e7', 'BD', 1, 2, NULL, 0, '$2y$10$5t1cNV/mhimbDWJ80n1bvenkauaEsDduCtPe8GZBD5/.sjyHgDE..', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4IZvMNZJWrbKDErUWRt6O80Du3C87cPn-iMZ2rXuA=s96-c', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-16', '2023-01-15', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-15 13:15:35', '2023-01-18 14:29:40', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'google', '100953062814271775540', NULL, NULL, NULL, NULL, 'uqprqmMHW63ypGGTrJvp5JprEuHyfQRYS7SvAeskQyzjQrEioV4IHe9QWeIk', '2023-01-15 16:18:26', 1, '2023-01-18 14:29:40', 107, 1, 98, NULL, 0, NULL),
(108, 'Tanjim Tisha', NULL, 'tisha@gmail.com', 'tisha', 'BD', 1, 2, NULL, 0, '$2y$10$iaP8Nx9wSs6rBxZH4WBTde27D2H6bXy3fl7ag058yEKMWPKkCFJ.O', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-18', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-18 10:39:28', '2023-01-18 18:41:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 100, NULL, 0, NULL),
(109, 'Moshiur Rahman', NULL, 'mo15103053@gmail.com', 'moshiur_rahman', 'BD', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp7BYOAzaPNgzCrR-tf-9BDHzNEH71RhQJCILAsJ=s96-c', '2', '366', '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-19', 'Moshiur Rahman', NULL, NULL, 'Test Buliding', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+8801770802187', 'mo15103053@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MRueXBIRmXVjgUGxFSqrcQX\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674121405,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674121405,\"currency\":\"usd\",\"current_period_end\":1705657405,\"current_period_start\":1674121405,\"customer\":\"cus_NCIRAV5DGzW2rn\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NCJHbtzRxuEveZ\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674121405,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MRueXBIRmXVjgUGxFSqrcQX\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRueXBIRmXVjgUGxFSqrcQX\"},\"latest_invoice\":\"in_1MRueXBIRmXVjgUGYRLxitUO\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674121405,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NCIRAV5DGzW2rn', '2023-01-18 10:43:36', '2023-01-19 19:10:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '101109321737579271560', NULL, NULL, NULL, NULL, 'v4jSud1VwMmLXbuEoO6nweXsXxV2auQO8Q9yZ19UM8g9trcLteQ9F8NrMUQb', '2023-01-19 15:59:17', 1, NULL, NULL, NULL, 114, NULL, 0, NULL),
(110, 'Moshiur Rahman', NULL, '110-moshiur2187@gmail.com', 'moshiur', 'BD', 1, 2, NULL, 0, '$2y$10$3NvqFcM82YjpLs5TfUFgO.QAciVwYsvVKnVo4VhkEFF19.XbhUtIS', NULL, NULL, '2', '366', '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-18', '2023-01-18', 'Moshiur Rahman', NULL, NULL, 'Dhaka Bangladesh', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+8801770802187', 'moshiur2187@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MRUvaBIRmXVjgUGOnv5YRAG\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674022518,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674022518,\"currency\":\"usd\",\"current_period_end\":1705558518,\"current_period_start\":1674022518,\"customer\":\"cus_NBsgDjR9NgQapK\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NBsgiYfXT0tjwz\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674022518,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MRUvaBIRmXVjgUGOnv5YRAG\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRUvaBIRmXVjgUGOnv5YRAG\"},\"latest_invoice\":\"in_1MRUvaBIRmXVjgUGrP3D6Cy1\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674022518,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NBsgDjR9NgQapK', '2023-01-18 11:20:21', '2023-01-18 12:31:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MKINasfFSXgmPW2rtvLiSkcWxqFSCG8cCPZkLn4ucMXT9mGNliboZsayLiFx', '2023-01-18 12:58:15', 0, '2023-01-18 12:31:57', 110, 1, 101, NULL, 0, NULL),
(111, 'Moshiur Rahman', NULL, '111-moshiur@gmail.com', 'moshiur123', 'BD', 1, 2, NULL, 0, '$2y$10$c4sXILFJjh6X4xjbrhCmWe3l5bUOsFR9B9uTqmN9NJaK7wLvCu1/q', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-18', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-18 13:43:29', '2023-01-18 14:08:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-18 14:08:55', 111, 1, 104, NULL, 0, NULL),
(112, 'Arifur Rahman', NULL, 'arifmahmud64@gmail.com', 'arifur_rahman', 'BD', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4IZvMNZJWrbKDErUWRt6O80Du3C87cPn-iMZ2rXuA=s96-c', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-18', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-18 14:29:47', '2023-01-18 14:30:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '100953062814271775540', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 105, NULL, 0, NULL),
(113, 'Md Manik', NULL, '113-moshiur2187@gmail.com', 'manik15103053', 'BD', 1, 2, NULL, 0, '$2y$10$I8Z3co3NoFALEJVAPnLzAO7piJ2Y5jFPmJ4qt3gJ6JLUenNv0gSnG', NULL, NULL, '2', '366', '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2023-02-18', '2023-01-18', 'Md Manik', NULL, NULL, 'Dhaka Bangladesh', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+8801770802187', 'moshiur2187@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MRXOoBIRmXVjgUGLKbn3z6h\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674032018,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674032018,\"currency\":\"usd\",\"current_period_end\":1676710418,\"current_period_start\":1674032018,\"customer\":\"cus_NBvFwsHYIPRpi0\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NBvFTqW77NLAZR\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674032018,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MRXOoBIRmXVjgUGLKbn3z6h\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRXOoBIRmXVjgUGLKbn3z6h\"},\"latest_invoice\":\"in_1MRXOoBIRmXVjgUG6ooRtglA\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674032018,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NBvFwsHYIPRpi0', '2023-01-18 14:35:58', '2023-01-18 14:55:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3yRfMgkxQhePUvbknbvjT6O3tG46rNwhdm4ZRDRyIk6zYCjdA9XzYZir8Ii0', '2023-01-18 15:47:53', 0, '2023-01-18 14:55:04', 113, 1, 107, NULL, 0, NULL),
(114, 'Fabian Roman', NULL, 'froman@cliffcomortgage.com', 'froman', 'US', 1, 2, NULL, 0, '$2y$10$xuzCETDYOV6zs18jVdvopu7wCTFM/z7ds0OZaviO.z4keBN0EwjUO', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-18', NULL, NULL, NULL, NULL, 'Rockaway', 'New Jersey', '07866', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-18 23:17:29', '2023-01-18 23:25:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 109, NULL, 0, NULL),
(115, 'Larisa Zambelli', NULL, 'zambellilarisa1@gmail.com', 'larisazambelli', 'US', 1, 2, NULL, 0, '$2y$10$IpO1.59KlQ0ajcWgozPq/uHqM5rzEsfC8HiLw/8b6aOQymqYkf40a', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-20', '2023-01-19', NULL, NULL, NULL, NULL, 'Rockaway', 'New Jersey', '07866', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-19 01:23:54', '2023-01-19 10:50:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 110, NULL, 0, NULL),
(116, 'Rakib', NULL, 'rakib@gmail.com', 'rakib', 'BD', 1, 2, NULL, 0, '$2y$10$u0mmQmuCL2JnXplUI3t/C.aLXNptB8pzo7vFNRyzcwr6Ppvovu6oO', NULL, NULL, '3', '366', '{\"id\":3,\"plan_type\":2,\"plan_id\":\"62f8d935b6119\",\"plan_name\":\"Corporate\",\"plan_description\":\"Corporate\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":149,\"plan_price\":\"1999\",\"discount_percentage\":12,\"validity\":\"9999\",\"no_of_vcards\":\"100\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solo & Small Business Accounts +\\\",\\\"Up to 100 Shareable Digital Cards\\\",\\\"10 Professional Card Setups & Personalizations\\\",\\\"Team-Level Tracking (new feature development; Coming Soon!)\\\"]\",\"plans_type\":1,\"name\":\"Legacy Client\",\"slug\":\"legacy-client\",\"stripe_plan_id\":\"plan_MF94PTFRux9rYx\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF94PTFRux9rYx\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":4995,\\\"amount_decimal\\\":\\\"4995\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660475701,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF94KiEL4GmZHC\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDxmBhgyMs0K\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":199900,\\\"am\",\"stripe_plan_id_yearly\":\"plan_MteDxmBhgyMs0K\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:15:01.000000Z\",\"updated_at\":\"2023-01-03T08:18:17.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-19', 'Rony Islam', NULL, NULL, 'dhaka, banani\r\ndhaka', 'Chittoor', 'ANDHRA PRADESH', '1213', 'Bangladesh (বাংলাদেশ)', '+880199057232', 'ronymia.tech@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MRoToBIRmXVjgUGLJbN43u0\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674097676,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674097676,\"currency\":\"usd\",\"current_period_end\":1705633676,\"current_period_start\":1674097676,\"customer\":\"cus_NCCt85CbJ7VLML\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NCCtakpoUH1eJk\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674097677,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":199900,\"unit_amount_decimal\":\"199900\"},\"quantity\":1,\"subscription\":\"sub_1MRoToBIRmXVjgUGLJbN43u0\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRoToBIRmXVjgUGLJbN43u0\"},\"latest_invoice\":\"in_1MRoToBIRmXVjgUGlZZXseYB\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674097676,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NCCt85CbJ7VLML', '2023-01-19 09:04:08', '2023-01-19 09:16:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 111, NULL, 0, NULL),
(117, 'DanYell Drummond', NULL, 'danyelldrummond@gmail.com', 'DDrummond', 'US', 1, 2, NULL, 0, '$2y$10$h4vK3eQi6ZKp849P8fxgAOrZEgrpEXaWUyzMPlWUpSFApQ11DXGuW', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-22', '2023-01-21', NULL, NULL, NULL, NULL, 'Sandy', 'Utah', '84070', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-21 07:13:19', '2023-01-21 07:15:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 116, NULL, 0, NULL),
(118, 'Elizabeth Burbige', NULL, 'elizburbige@gmail.com', 'elizburbige', 'US', 1, 2, NULL, 0, '$2y$10$2aiKir8PdledgHo6FdeZc.HAIDF6Tge9V9eTw808cJX07vPVHj7qW', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-23', '2023-01-22', NULL, NULL, NULL, NULL, 'Freeport', 'New York', '11520', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-22 05:26:17', '2023-01-22 06:02:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 117, NULL, 0, NULL),
(119, 'Maidul Islam', NULL, 'maidul.tech@gmail.com', 'maidul07', 'BD', 1, 2, NULL, 0, '$2y$10$D5soOCllBPbhSK25U2iT9uh/33HGdgr9JGjxzHyJY6kMXZf4NTHxa', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-23', '2023-01-22', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-22 09:45:46', '2023-01-22 09:45:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `is_delete`, `active_card_id`, `connection_title`, `is_notify`, `user_disclimer`) VALUES
(120, 'Md Mridul', NULL, 'mdmridul608@gmail.com', 'mdmridul608', 'BD', 1, 2, NULL, 0, '$2y$10$fd.GmcNK76onYMvdSLejleyV43gCBf0DTobZU0HBFURBVd2mo//Tu', NULL, NULL, '2', '366', '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T11:10:20.000000Z\",\"updated_at\":\"2023-01-17T21:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2023-02-28', '2023-01-29', 'Md Mridul', NULL, NULL, 'mawna', 'sreepur', 'gazipur', '1740', 'Bangladesh (বাংলাদেশ)', '+8802711111111111', 'mdmridul608@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MVX3oBIRmXVjgUGXWAaz1K3\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674984028,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674984028,\"currency\":\"usd\",\"current_period_end\":1677576028,\"current_period_start\":1674984028,\"customer\":\"cus_NEU5XOteeuaeda\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NG3AOIlVmSyUKK\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674984029,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MVX3oBIRmXVjgUGXWAaz1K3\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MVX3oBIRmXVjgUGXWAaz1K3\"},\"latest_invoice\":\"in_1MVX3oBIRmXVjgUGqwpY34rM\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674984028,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NEU5XOteeuaeda', '2023-01-25 04:59:24', '2023-01-30 12:15:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 118, NULL, 1, NULL),
(121, 'jone Doye', NULL, 'mdmridul6088@gmail.com', 'mdmridul6088', 'BD', 1, 2, NULL, 0, '$2y$10$yPFpDfuFcmOiXIo23hTlbuNjE32U8L87pdMy6VhUMQS.fj2a7FNMO', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-18 03:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-31', '2023-01-30', NULL, NULL, NULL, NULL, '', '', NULL, 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-30 05:17:42', '2023-01-30 13:13:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 119, 'Share your info back with jone Doye', 1, '<p><i><strong>User Disclimer Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.\r\n                                                            </i></p>');

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
-- Indexes for table `email_templates`
--
ALTER TABLE `email_templates`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `history_card_browsing`
--
ALTER TABLE `history_card_browsing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marketing_materials`
--
ALTER TABLE `marketing_materials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

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
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=120;

--
-- AUTO_INCREMENT for table `business_fields`
--
ALTER TABLE `business_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=294;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `custom_pages`
--
ALTER TABLE `custom_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_card_browsing`
--
ALTER TABLE `history_card_browsing`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `marketing_materials`
--
ALTER TABLE `marketing_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=277;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=874;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_icon`
--
ALTER TABLE `social_icon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
