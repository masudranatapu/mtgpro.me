-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 01, 2023 at 03:26 PM
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
  `status` int(2) NOT NULL DEFAULT 1 COMMENT '0=inactive,1=active',
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
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` varchar(1024) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_hit` int(11) NOT NULL DEFAULT 0,
  `total_qr_download` int(11) NOT NULL DEFAULT 0,
  `total_vcf_download` int(11) NOT NULL DEFAULT 0,
  `color_link` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=yes,0=no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `business_cards`
--

INSERT INTO `business_cards` (`id`, `card_id`, `user_id`, `theme_id`, `theme_color`, `card_lang`, `cover`, `profile`, `card_url`, `card_type`, `title`, `title2`, `sub_title`, `description`, `status`, `created_at`, `updated_at`, `company_name`, `company_websitelink`, `ccode`, `phone_number`, `card_email`, `card_for`, `logo`, `designation`, `deleted_at`, `deleted_by`, `location`, `bio`, `total_hit`, `total_qr_download`, `total_vcf_download`, `color_link`) VALUES
(1, '63d8f2503c721', 128, '1', NULL, 'en', NULL, 'assets/uploads/avatar/md-mridul-63d8f2503c8c5.jpg', '63d8f2503c818', 'vcard', 'Md Mridul', NULL, NULL, NULL, 1, '2023-01-31 10:49:52', '2023-02-01 13:40:04', 'Arobil It', NULL, NULL, '+8801794798227', 'mdmridul608@gmail.com', 'Work', NULL, 'Web Developer', NULL, NULL, NULL, NULL, 1, 1, 1, 0);

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
(1, 1, 'mobile', 'phone', 'assets/img/icon/call.svg', 9, 'Phone', '+8801794798227', 0000000001, '1', '2023-01-31 10:49:52', '2023-01-31 10:49:52'),
(2, 1, 'mail', 'email', 'assets/img/icon/email.svg', 5, 'Email', 'mdmridul608@gmail.com', 0000000002, '1', '2023-01-31 10:49:52', '2023-01-31 10:49:52');

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
(17, 'invoice_name', 'Non-QM Doc LLC', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(18, 'invoice_email', 'Info@MTGPro.me', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(19, 'invoice_phone', '0', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(20, 'invoice_address', '1603 Capitol Ave. Suite 310', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(21, 'invoice_city', 'Cheyenne', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(22, 'invoice_state', 'Wyoming', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(23, 'invoice_zipcode', '82001', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(24, 'invoice_country', 'USA', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(25, 'tax_name', 'Goods and Service Tax', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(26, 'tax_value', '0', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(27, 'tax_number', '0', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(28, 'email_heading', 'Thanks for using mtgpro.me. Here\'s your invoice. \r\nIf you have any questions please email info@mtgpro.me and we\'ll get back to you as soon as possible.', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
(29, 'email_footer', 'Exclusively Tailored For Mortgage Professionals.\r\nStand out from the competition and get recognized as an MTGPRO', '2022-03-12 14:54:38', '2022-03-12 14:54:38'),
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
(20, 'test', 'cxc', NULL, '01918993427', 'mahibc1@gmail.com', 'xcxc', 'xcxc', 119, 119, '2023-01-22 16:22:15', NULL, NULL, NULL, 1, 'https://graph.facebook.com/v3.3/2135716489941526/picture?type=normal', 59),
(21, 'test', NULL, NULL, '01681944126', 'mahibc1@gmail.com', NULL, 'testt', 119, 119, '2023-01-22 16:24:08', NULL, NULL, NULL, 1, NULL, 51),
(22, 'Moshiur Rahman', 'Web developer', NULL, '01770802187', 'moshiur2187@gmail.com', 'Arobil', 'Hello', 124, 124, '2023-01-29 14:52:15', NULL, NULL, NULL, 1, NULL, 124);

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
(7, 'What Is MTGPro.me?', 'about', '<p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size: 14pt;\">﻿</span><span style=\"font-size: 14pt;\">﻿</span><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">MTGPro.me is a digital business card helping\r\nmortgage professionals make their lasting first impression, amazing! MTGPro.me is the ONLY digital business card specifically tailored to the mortgage professionals of today. We provide\r\nyou the tools and resources you need to stand out from the competition. With a\r\nquick tap, click or scan showcase all your content across any platform in one personally\r\nbranded PROfile.</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\"> <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">If you meet a prospect and give them your card, how many of them look you up on Instagram? Facebook? YouTube? or any other platform you\'ve branded yourself on. Make your content work for you and bring it all in one place. Get recognized as an MTGPRO!</span></p><p>\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">Our platform allows you to create a\r\nprofessional PROfile that includes your professional background, industry\r\ncertifications, NMLS ID. In addition to creating a profile, you can also\r\ncustomize your digital business card with your headshot, logo, contact\r\ninformation, websites, application pages and every social media account you\r\nhave. You\'ll be able to&nbsp; easily share your information with potential clients,\r\nreferral partners, and other industry professionals. We also provide free marketing\r\nmaterial, social media posts, and other content to help you promote yourself\r\nand your business.&nbsp;</span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\"><br></span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><span style=\"font-size:12.0pt;font-family:&quot;Segoe UI&quot;,sans-serif;mso-fareast-font-family:\r\n&quot;Times New Roman&quot;;color:#5E5E5E\">Our Mission: </span></p><p class=\"MsoNormal\" style=\"margin-bottom:0in;line-height:normal\"><font color=\"#5e5e5e\" face=\"Segoe UI, sans-serif\"><span style=\"font-size: 12pt;\">To help every mortgage professional stay top of mind with every business connection they make and help you get the </span><span style=\"font-size: 16px;\">recognition</span><span style=\"font-size: 12pt;\">&nbsp;of the PRO that you are.</span></font></p>', 1, 1, NULL, NULL, NULL, 1, '2022-12-06 22:51:51', '2023-01-25 07:36:09', NULL, 73, NULL),
(8, 'Careers', 'careers', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).<br></p>', 1, 4, NULL, NULL, NULL, 1, '2022-12-06 22:53:09', '2022-12-06 23:16:19', 'footer', 1, 'col-2'),
(9, 'Contact us', 'contact-us', '<p><br></p><p><br></p>', 1, 1, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2023-01-25 07:37:03', NULL, 73, NULL),
(10, 'Security', 'security', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.<br></p>', 1, 6, NULL, NULL, NULL, 1, '2022-12-06 22:54:17', '2022-12-06 23:18:10', 'footer', 1, 'col-2'),
(11, 'Tutorials', 'tutorials', '<p>Coming Soon!</p>', 1, 1, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2023-01-25 07:33:52', NULL, 73, NULL),
(12, 'Help', 'help', '<p>Please visit our contact us page to submit any feedback or for help in any way.&nbsp; If you\'d like to email us:</p><p style=\"margin-bottom: 20px; font-size: 15px; line-height: 28px; text-align: justify; font-family: &quot;DM Sans&quot;, sans-serif;\"><span style=\"font-size: 14px;\">﻿Please email info@mtgpro.me and we will get back to you as soon as possible. In your email please include:</span></p><p style=\"margin-bottom: 20px; font-size: 15px; line-height: 28px; text-align: justify; font-family: &quot;DM Sans&quot;, sans-serif;\"><span style=\"font-size: 14px;\">Your Name:</span></p><p style=\"margin-bottom: 20px; font-size: 15px; line-height: 28px; text-align: justify; font-family: &quot;DM Sans&quot;, sans-serif;\"><span style=\"font-size: 14px;\">Email Address:</span></p><p style=\"margin-bottom: 20px; font-size: 15px; line-height: 28px; text-align: justify; font-family: &quot;DM Sans&quot;, sans-serif;\"><span style=\"font-size: 14px;\">Username:</span></p><p style=\"margin-bottom: 20px; font-size: 15px; line-height: 28px; text-align: justify; font-family: &quot;DM Sans&quot;, sans-serif;\"><span style=\"font-size: 14px;\">Please be sure to be as detailed as possible on the particulars of your request in order to resolve your request efficiently.&nbsp;</span></p>', 1, 1, NULL, NULL, NULL, 1, '2022-12-06 22:53:46', '2023-01-25 07:39:21', NULL, 73, NULL),
(13, 'Environment setup', 'environment', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><br></p>', 1, 1, 'env', NULL, NULL, 1, '2023-01-16 10:35:37', '2023-01-16 10:35:49', NULL, 1, NULL),
(14, 'Free Marketing Material', 'free-marketing-material', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span>Free Marketing Material<br></p>', 1, 1, 'Free Marketing Material', 'Free Marketing Material', NULL, 1, '2023-01-16 15:53:06', '2023-01-18 14:22:45', NULL, 1, NULL),
(15, 'Test customer Pages Update', 'test-customer-pages', '<p><span style=\"font-size: 14px;\">﻿</span>This is the best tset</p>', 1, 1, 'test', 'This is the best test', NULL, 1, '2023-01-18 14:22:00', '2023-01-18 14:22:30', NULL, 1, NULL),
(16, 'Disclaimer', 'disclaimer', 'disclaimer', 1, 1, 'disclaimer', 'disclaimer', NULL, NULL, '2023-01-29 21:42:25', NULL, NULL, 1, 'col-1');

-- --------------------------------------------------------

--
-- Table structure for table `email_templates`
--

CREATE TABLE `email_templates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `email_templates`
--

INSERT INTO `email_templates` (`id`, `type`, `slug`, `subject`, `body`, `created_at`, `updated_at`) VALUES
(1, 'Welcome Mail', NULL, 'Welcome To MtgPro.com', 'Hi, {user_name}, {email}\r\nThanks for signing up to {site_name}.\r\nIf you have any questions about this, please visit our website {site_name}\r\nSimply go here {site_name} ,\r\nto get started create a vCard. \r\n{site_name}\r\n\r\n © {site_name} All rights reserved.', NULL, '2023-01-29 13:31:47'),
(2, 'Plan Purchase', NULL, 'Thank You for order', 'Hello! {user_name}, thank you for purchasing from {site_title}. \r\nTotal order {order_cost}, Transaction number {transaction_number}.\r\nYour order is now {order_status}.\r\n\r\nWe Care About Our Customers.', NULL, '2023-01-29 13:28:03'),
(3, 'Plan Upgrade', NULL, 'Plan Upgrade Info', 'Hello Admin, your have receive a new order Transaction_number : {transaction_number}, User name  {user_name},  Total order {order_cost}, \r\nOrder status {order_status}.\r\n{site_title}', NULL, '2023-01-29 13:15:04'),
(4, 'Send Connect to Subscriber', 'send-connect-to-subscriber', 'Successfully Connect  with Subscriber', 'Hello, {user_name},\nYou are successfully connect our {sub_name}.\nThank You.\nWe are also care About Our Customers and subscriber.', NULL, '2023-02-01 13:08:36'),
(5, 'Send Connect to Visitors & CC Subscriber', NULL, 'Subscription Successfull Mail', 'Hello!  Thank you. You Have Subscribed Successfully.\r\nThanks by {site_title}.\r\n\r\nWe are also care About Our Customers and subscriber.', NULL, '2023-01-29 13:43:45'),
(6, 'Request Features to Admin Mail', NULL, 'You have new query form mtgPro', 'Hello {user_name}, \r\n\r\nThank You.\r\n\r\nWe are also care About Our Customers and subscriber.', NULL, '2023-01-29 13:47:33'),
(7, 'Request Features to Subscriber Mail', 'request-features-to-subscriber-mail', 'You are successfully subscribe our mtgpro', 'Hello {user_name}, \r\nThanks for subscribe \r\nWe Care About Our Customers.', NULL, '2023-02-01 13:14:17'),
(8, 'Contact query mail to card owner', 'contact-query-mail-to-card-owner', 'Contact query mail to card owner', 'Hello, {{owner}},\r\nYou have a connection form {{name}}.\r\n\r\nHere are some of his details.\r\nName  : {{name}}\r\nEmail : {{email}}\r\nPhone : {{phone}}\r\nJob title :{{title}}\r\nCompany Name:{{company_name}}\r\nMessage : {{message}}\r\n\r\nThank You.\r\nWe also care About Our Customers and subscriber.', '2023-02-01 13:13:21', '2023-02-01 13:36:41');

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
(4, 'What does NFC mean?', 'Near Field Communication (NFC) technology is a wireless technology that allows two devices to communicate with each other when they are close together. NFC tags can be used to store digital business cards, allowing users to quickly and easily share their contact information with others.', 1, 2, NULL, 1, '2023-01-15 05:15:20', '2023-01-27 06:13:31', 73),
(5, 'What are digital business cards?', 'Digital business cards are a modern way of exchanging a limitless amount contact information. They are digital versions of traditional paper business cards and provide a more efficient way to share every platform you utilize to maintain your brand.  Digital business cards are typically shared via text message, email, or other digital communication platforms. They are also often used with QR codes and today more commonly with NFC (Near Field Communication) technology to quickly and easily share contact information.', 1, 3, NULL, 1, '2023-01-16 10:36:48', '2023-01-20 10:10:09', 1),
(7, 'What are QR Codes', 'Those weird looking boxes that look like a funky art piece is really a QR code. A two-dimensional barcode that can be scanned using a smartphone camera. They can be used to quickly and easily share digital business cards with others. QR codes can be printed on traditional paper business cards or displayed on digital devices, such as tablets or laptops.', 1, 4, NULL, 73, '2023-01-27 06:14:35', NULL, NULL),
(8, 'Why MTGPRO.ME?', 'MTGPRO.ME is the number 1 digital business card solution tailored specifically to mortgage professionals. With industry features like a mortgage calculator on your PROfile, the ability to keep compliant displaying your NMLS ID and Equal Housing logo, and free marketing material with select plans, MTGPRO.ME will not only save you money but also make it easy to scale your business.', 1, 5, NULL, 73, '2023-01-27 06:27:03', '2023-01-28 08:25:03', 73);

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
(1, 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0', NULL, NULL, NULL, 61, 'Md Mridul', 'mdmridul608', 'mdmridul608@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Table structure for table `history_card_downloads`
--

CREATE TABLE `history_card_downloads` (
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
-- Dumping data for table `history_card_downloads`
--

INSERT INTO `history_card_downloads` (`id`, `card_id`, `device_id`, `ip_address`, `user_agent`, `region`, `region_code`, `region_name`, `counter`, `name`, `username`, `email`, `mobile`, `city`, `area_code`, `country_code`, `country_name`, `continent_name`, `timezone`, `created_by`, `modified_by`, `created_at`, `modified_at`) VALUES
(1, 1, NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:109.0) Gecko/20100101 Firefox/109.0', NULL, NULL, NULL, 2, 'Md Mridul', 'mdmridul608', 'mdmridul608@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Triggers `history_card_downloads`
--
DELIMITER $$
CREATE TRIGGER `after_history_card_downloads_insert` AFTER INSERT ON `history_card_downloads` FOR EACH ROW begin
 declare var_total_views int(10) default 0;
select count(*) into var_total_views from history_card_downloads where card_id = new.card_id;
update business_cards set total_vcf_download = var_total_views where id = new.card_id;

end
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `history_qr_downloads`
--

CREATE TABLE `history_qr_downloads` (
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
-- Triggers `history_qr_downloads`
--
DELIMITER $$
CREATE TRIGGER `after_history_qr_downloads_insert` AFTER INSERT ON `history_qr_downloads` FOR EACH ROW begin
 declare var_total_views int(10) default 0;
select count(*) into var_total_views from history_qr_downloads where card_id = new.card_id;
update business_cards set total_qr_download = var_total_views where id = new.card_id;

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
(1, 'Lorem Ipsum is simply dummy text of the printing', 1, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973095.png', '<p><span style=\"font-size: 14px;\">﻿</span><strong style=\"font-size: 0.875rem; letter-spacing: 0px; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-size: 0.875rem; letter-spacing: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 1, '2023-01-29 12:18:15', NULL, '2023-01-29 12:18:15', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973095.pdf'),
(2, 'It is a long established fact that a reader will be distracted', 3, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973350.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span><br></p>', 1, '2023-01-29 12:22:30', NULL, '2023-01-29 12:22:30', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973350.pdf'),
(3, 'Contrary to popular belief, Lorem Ipsum is not simply random text', 5, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973429.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">&nbsp;</span><br></p>', 1, '2023-01-29 12:23:49', NULL, '2023-01-29 12:23:49', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973429.pdf'),
(4, 'There are many variations of passages of Lorem Ipsum available,', 3, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973488.png', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span><br></p>', 1, '2023-01-29 12:24:48', NULL, '2023-01-29 12:24:48', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973488.pdf'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit', 3, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973558.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</span><br></p>', 1, '2023-01-29 12:25:58', NULL, '2023-01-29 12:25:58', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973558.pdf'),
(6, 'But I must explain to you how all this mistaken idea of denouncing pleasure', 3, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973624.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?</span><br></p>', 1, '2023-01-29 12:27:04', NULL, '2023-01-29 12:27:04', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973624.pdf'),
(7, 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium', 3, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973709.jpeg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">t vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span><br></p>', 1, '2023-01-29 12:28:29', NULL, '2023-01-29 12:28:29', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973709.pdf'),
(8, 'On the other hand, we denounce with righteous indignation and dislike', 1, 'https://mtgpro.me/assets/uploads/marketing-materials/1674973936.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted. The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.</span><br></p>', 1, '2023-01-29 12:32:16', NULL, '2023-01-29 12:32:16', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674973936.pdf'),
(9, 'Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis', 3, 'https://mtgpro.me/assets/uploads/marketing-materials/1674974024.jpeg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur</span><br></p>', 1, '2023-01-29 12:33:44', NULL, '2023-01-29 12:33:44', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674974024.pdf'),
(10, 'At vero eos et accusamus et iusto odio dignissimos ducimus', 3, 'https://mtgpro.me/assets/uploads/marketing-materials/1674974112.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify; font-size: 0.875rem; letter-spacing: 0px;\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat</span><br></p>', 1, '2023-01-29 12:35:12', NULL, '2023-01-29 12:35:12', NULL, 'Admin', 'https://mtgpro.me/assets/uploads/marketing-materials/1674974112.pdf');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` int(11) NOT NULL DEFAULT 1 COMMENT '1=Photo Frame,2=gift card',
  `status` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `quantity`, `discount`, `coupon_discount`, `total_price`, `payment_fee`, `vat`, `grand_total`, `discount_percentage`, `user_id`, `order_date`, `payment_method`, `payment_status`, `created_at`, `updated_at`, `type`, `status`) VALUES
(1, '1000', 2, 0.00, 0.00, 38300.00, 0.00, 0.00, 38300, 0, 51, '2023-01-29', 'Stripe', 1, '2023-01-29 15:27:51', '2023-01-29 15:27:51', 0, 1),
(2, '1001', 1, 0.00, 0.00, 21900.00, 0.00, 0.00, 21900, 0, 119, '2023-01-29', 'Stripe', 1, '2023-01-29 16:19:32', '2023-01-29 16:19:32', 0, 1);

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
(1, 1, 13, 1, 3500.00, 0.00, '2023-01-29 21:27:51', 51, '2023-01-29 21:27:51'),
(2, 1, 15, 1, 34800.00, 0.00, '2023-01-29 21:27:51', 51, '2023-01-29 21:27:51'),
(3, 2, 14, 1, 21900.00, 0.00, '2023-01-29 22:19:32', 119, '2023-01-29 22:19:32');

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
(4, 'home', 'banner', 'banner_photo', 'assets/uploads/banner/1674439051.png', '2022-03-12 08:54:38', '2022-03-12 08:54:38', 1, 1, 1, 0),
(5, 'home', 'banner', 'banner_video', '/assets/uploads/videos/WhatsApp Video 2023-01-18 at 12-63c791c17073b.mp4', '2023-01-15 10:47:59', '2023-01-15 10:47:59', 1, 0, 3, 1),
(248, 'home', 'features', 'feature_card_icon_1', 'assets/uploads/banner/1674440581.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 5, 0),
(249, 'home', 'features', 'feature_card_title_1', 'Share With Anyone', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 5, 0),
(251, 'home', 'features', 'feature_card_description_1', 'Share your info with anyone on any device', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 6, 0),
(252, 'home', 'features', 'feature_card_icon_2', 'assets/uploads/banner/1674287243.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 7, 0),
(253, 'home', 'features', 'feature_card_title_2', 'Security is Key', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 8, 0),
(254, 'home', 'features', 'feature_card_description_2', 'We protect your privacy at all times and never sharing your info or data.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 9, 0),
(255, 'home', 'features', 'feature_card_icon_3', 'assets/uploads/banner/1674441405.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 10, 0),
(256, 'home', 'features', 'feature_card_title_3', 'Marketing Tools', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 11, 0),
(257, 'home', 'features', 'feature_card_description_3', 'Free marketing tools and customer facing calculators.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 12, 0),
(258, 'home', 'features', 'feature_card_icon_4', 'assets/uploads/banner/1674511219.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 13, 0),
(259, 'home', 'features', 'feature_card_title_4', 'Support', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 14, 0),
(260, 'home', 'features', 'feature_card_description_4', 'Email us with any questions - Live Chat support coming soon!', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 15, 0),
(261, 'home', 'features', 'feature_card_icon_5', 'assets/uploads/banner/1674440361.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 16, 0),
(262, 'home', 'features', 'feature_card_title_5', 'QR Codes', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 17, 0),
(263, 'home', 'features', 'feature_card_description_5', 'Easily download your QR Code leading scans right to your PROfile', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 18, 0),
(264, 'home', 'features', 'feature_card_icon_6', 'assets/uploads/banner/1674440280.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 19, 0),
(265, 'home', 'features', 'feature_card_title_6', 'Free Smart Products', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 20, 0),
(266, 'home', 'features', 'feature_card_description_6', 'Annual Plans come with a free MTGPRO.ME NFC device.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 21, 0),
(267, 'home', 'features', 'feature_card_icon_7', 'assets/uploads/banner/1674511475.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 22, 0),
(268, 'home', 'features', 'feature_card_title_7', 'Share With Anyone', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 23, 0),
(269, 'home', 'features', 'feature_card_description_7', 'Use templates and bulk edits to maintain cards at scale', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 24, 0),
(270, 'home', 'features', 'feature_card_icon_8', 'assets/uploads/banner/1674437331.png', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 1, 25, 0),
(271, 'home', 'features', 'feature_card_title_8', 'Brand Consistency', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 26, 0),
(272, 'home', 'features', 'feature_card_description_8', 'Centralize all your branded platforms into one easy to use PROfile.', '2022-03-12 02:54:38', '2022-03-12 02:54:38', 1, 0, 27, 0),
(273, 'home', 'video_section', 'video_section_title', 'Want to see a new feature? Request it in your PROfile.', '2022-12-30 03:58:34', '2022-12-29 03:58:34', 1, 0, 28, 0),
(274, 'home', 'video_section', 'video_section_content', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Uj2ue1L4y2U\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" allowfullscreen></iframe>', '2022-12-29 04:02:44', '2022-12-29 04:02:44', 1, 0, 29, 0);

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
(1, NULL, '1', 'Free', 'Free', 1, 0, 0, '0', 0, '366', '2', 999, 999, 999, 999, '', '0', '', '', '0', '', '[\"Up to 2 Shareable Digital Cards\",\"Two-Way Contact Sharing\",\"Unlimited Connections & Card Shares\",\"Free Ongoing Base Updates & Feature Adds\"]', 1, 'Beta Tester', 'beta-tester', 'plan_N8aTRq6lwV1if7', '{\"id\":\"plan_N8aTRq6lwV1if7\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":0,\"amount_decimal\":\"0\",\"billing_scheme\":\"per_unit\",\"created\":1673262811,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_N8aTTFeGcJ5UKY\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_N8aTICI7b6KBup\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":0,\"amount_', 'plan_N8aTICI7b6KBup', NULL, NULL, NULL, '1', 1, '2022-08-14 09:04:53', '2023-01-29 15:14:53', 0, 0, 0, 0, 1),
(2, NULL, '2', 'Intro Pro Plan', 'Gold', 0, 12, 100, NULL, 10, '31', '2', 999, 999, 999, 999, '', '1', '', '', '1', '', '[\"Access to all our current features\",\"Free Upgrades Across ALL PLANS\",\"2 Custom Card Setups & Personalizations\",\"Annual Plans Get Brandable Social Media Posts\",\"Annual Plans Get Brandable Marketing Material\"]', 1, 'Professional', 'professional', 'plan_MvsPvaXh0SApeG', '{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amo', 'plan_MteDPNuinE4V5C', NULL, NULL, NULL, '1', 1, '2022-08-14 11:10:20', '2023-01-26 18:42:29', 0, 0, 0, 1, 1),
(3, NULL, '2', 'PROfessional Plan', 'Corporate', 0, 15, 149, NULL, 12, '9999', '100', 999, 999, 999, 999, '', '1', '', '', '1', '', '[\"Up to 100 Shareable Digital Cards With Unique QR Codes\",\"Team-Level Tracking (new feature development; Coming Soon!)\",\"Annual plans get a free randomly selected pro device!\"]', 1, 'Legacy Client', 'legacy-client', 'plan_MF94PTFRux9rYx', '{\"id\":\"plan_MF94PTFRux9rYx\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":4995,\"amount_decimal\":\"4995\",\"billing_scheme\":\"per_unit\",\"created\":1660475701,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MF94KiEL4GmZHC\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"am', 'plan_MteDxmBhgyMs0K', NULL, NULL, NULL, '1', 1, '2022-08-14 11:15:01', '2023-01-26 18:44:14', 0, 0, 0, 1, 1),
(7, 2, '2', 'free motion', 'this good motion', 0, 220, 22000, '90000', 0, '', '1', 999, 999, 999, 999, '1', '0', '0', '0', '1', '0', '[\"good\"]', 1, 'free motion', 'free-motion', 'plan_NAMtjUsRMzM10s', '{\"id\":\"plan_NAMtjUsRMzM10s\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":9000000,\"amount_decimal\":\"9000000\",\"billing_scheme\":\"per_unit\",\"created\":1673673576,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NAMtK7QloY3GDP\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_NBu96njuecTy7d\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":2200000,\"a', 'plan_NBu96njuecTy7d', NULL, NULL, NULL, '0', 1, '2023-01-14 11:19:36', '2023-01-18 13:45:52', 0, 0, 1, 0, 1),
(8, 1, '2', 'free', 'its free time to change up your decission', 1, 2200, 20000, '2200', 0, '', '1', 999, 999, 999, 999, '0', '0', '0', '0', '0', '0', '[\"12\"]', 1, 'free', 'free', 'plan_NAjmLZWNEU8IOJ', '{\"id\":\"plan_NAjmLZWNEU8IOJ\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":220000,\"amount_decimal\":\"220000\",\"billing_scheme\":\"per_unit\",\"created\":1673758754,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NAjmuYjBEKxdyD\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', NULL, NULL, NULL, NULL, NULL, '0', 1, '2023-01-15 10:59:14', '2023-01-15 12:32:42', 0, 0, 0, 0, 1),
(9, 1, '2', 'Paid', 'This is paid version', 0, 120, 2000, '1200', 0, '', '1', 999, 999, 999, 999, '1', '0', '0', '0', '0', '0', '[\"12\"]', 1, 'Paid', 'paid', 'plan_NB6budFae5zNqR', '{\"id\":\"plan_NB6budFae5zNqR\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":120000,\"amount_decimal\":\"120000\",\"billing_scheme\":\"per_unit\",\"created\":1673843643,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NB6bSbtWlSOnvu\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_NB6bYCAPs6f14s\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":200000,\"am', 'plan_NB6bYCAPs6f14s', NULL, NULL, NULL, '0', 1, '2023-01-16 10:34:03', '2023-01-24 03:53:02', 1, 0, 0, 0, 1),
(10, 2, '2', 'Test panel Update', 'We and our partners store or access information on devices, such as cookies and process personal data, such as unique identifiers and standard information sent by a device for the purposes described below. You may click to consent to our and our partners’ processing for such purposes. Alternatively, you may click to refuse to consent, or access more detailed information and change your preferences before consenting. Your preferences will apply to this website only. Please note that some processing of your personal data may not require your consent, but you have a right to object to such processing. You can change your preferences at any time by returning to this site or visit our privacy policy.', 0, 18, 20, '100', 0, '', '1', 999, 999, 999, 999, '1', '1', '1', '1', '1', '1', '[\"privacy policy\",\"privacy policy\"]', 1, 'Test panel', 'test-panel', 'plan_NBubkTXukPYHzD', '{\"id\":\"plan_NBubkTXukPYHzD\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":10000,\"amount_decimal\":\"10000\",\"billing_scheme\":\"per_unit\",\"created\":1674029604,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NBubGmYbg2GbVk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_NBucLbqf7A2Mhs\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":2000,\"amou', 'plan_NBucLbqf7A2Mhs', NULL, NULL, NULL, '0', 1, '2023-01-18 14:13:24', '2023-01-18 14:15:08', 1, 1, 1, 0, 1),
(11, NULL, '63d62e884cf7c', 'Personal', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,\r\nmolestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum\r\nnumquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium\r\noptio, eaque rerum! Provident similique accusantium nemo autem. Veritatis\r\nobcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam\r\nnihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,\r\ntenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,\r\nquia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos', 0, 10, 150, NULL, 0, '', '1', 999, 999, 999, 999, '', '0', '', '', '0', '', '[\"All Social Media\"]', 1, 'Personal', 'personal', 'plan_NG2MGZ344bB8SC', '{\"id\":\"plan_NG2MGZ344bB8SC\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1000,\"amount_decimal\":\"1000\",\"billing_scheme\":\"per_unit\",\"created\":1674981023,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_NG2MAJGTJZMR8c\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"}', '{\"id\":\"plan_NG2MKd5rIyvJ40\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":10500,\"amo', 'plan_NG2MKd5rIyvJ40', NULL, NULL, NULL, '1', 1, '2023-01-29 14:30:00', '2023-01-29 14:31:40', 0, 0, 0, 0, 1);

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
(13, 'Popl Card', 'popl-card', '/productThumb/crd-blk_2side_46ad1bc6-dbb0-409d-9ff1-722b21ace899_2000x-63d68914a634c.webp', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><strong style=\"font-size: 0.875rem; letter-spacing: 0px; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-size: 0.875rem; letter-spacing: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 3500, 4000, 1, 0, 1, '2023-01-29 20:04:48', '2023-01-29 20:56:20', 1, 1),
(14, 'Custom PhoneCard', 'custom-phonecard', '/productThumb/popl-phonecard-phone-ylh-custom-blk_1_2000x-63d68967757cb.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><strong style=\"font-size: 0.875rem; letter-spacing: 0px; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-size: 0.875rem; letter-spacing: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 20900, 21900, 1, 0, 1, '2023-01-29 20:08:58', '2023-01-29 20:57:43', 1, 1),
(15, 'Apple Watch Band', 'apple-watch-band15', '/productThumb/apl-blk-qr-44-product_2000x-63d6899b73c01.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><strong style=\"font-size: 0.875rem; letter-spacing: 0px; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-size: 0.875rem; letter-spacing: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 34800, 35800, 1, 0, 1, '2023-01-29 20:20:52', '2023-01-29 20:58:35', 1, 1),
(16, 'Apple Watch Band', 'apple-watch-band16', '/productThumb/crd-blk_back_ee914df7-ded0-40ec-82ee-b9c33f3be18a_2000x-63d689d5c37ad.jpg', '<p><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><span style=\"font-size: 14px;\">﻿</span><strong style=\"font-size: 0.875rem; letter-spacing: 0px; margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-size: 0.875rem; letter-spacing: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span><br></p>', 34800, 35800, 1, 0, 1, '2023-01-29 20:21:24', '2023-01-29 20:59:33', 1, 1);

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
(1, 1, '/productImages/apple-iphone-14-pro-max-deep-purple-300x300-63d60d03d46a9.jpg', '2023-01-29 12:06:59', '2023-01-29 12:06:59'),
(2, 1, '/productImages/images-(1)-63d60d03d642b.jpeg', '2023-01-29 12:06:59', '2023-01-29 12:06:59'),
(3, 1, '/productImages/apple-iphone-14-pro-max-deep-purple-300x300-63d60d04d6c1a.jpg', '2023-01-29 12:07:00', '2023-01-29 12:07:00'),
(4, 1, '/productImages/images-(1)-63d60d04d889e.jpeg', '2023-01-29 12:07:00', '2023-01-29 12:07:00'),
(5, 2, '/productImages/61yhhtv4utl-63d60df323d82.jpg', '2023-01-29 12:10:59', '2023-01-29 12:10:59'),
(6, 2, '/productImages/126-1262106_the-perfect-lady-professional-girls-images-png-63d60df32c242.png', '2023-01-29 12:10:59', '2023-01-29 12:10:59'),
(7, 2, '/productImages/lenovo-ideapad-3-celeron-4gb-1tb-hdd-15-63d60df3417a9.jpg', '2023-01-29 12:10:59', '2023-01-29 12:10:59'),
(8, 3, '/productImages/0e171624478046305e41eb13e903feff-63d60e5bd7857.jpg', '2023-01-29 12:12:43', '2023-01-29 12:12:43'),
(9, 3, '/productImages/98a970213e8c95279a79f2e09ab8dfb4-63d60e5be0a36.jpg', '2023-01-29 12:12:43', '2023-01-29 12:12:43'),
(10, 3, '/productImages/skx52942_shopbystylegridupdate_men_750x664_casual_sneakers-63d60e5be5509.jpg', '2023-01-29 12:12:43', '2023-01-29 12:12:43'),
(11, 4, '/productImages/9vtmpw9qfevpjsfbqxwq_img76101024x10242xwebp-63d60ece1dd0a.jpg', '2023-01-29 12:14:38', '2023-01-29 12:14:38'),
(12, 4, '/productImages/ngdfl005_2_-63d60ece211f1.jpg', '2023-01-29 12:14:38', '2023-01-29 12:14:38'),
(13, 5, '/productImages/8ed91fabd1432909778e7e8a5947a110-63d60f306f0db.jpg', '2023-01-29 12:16:16', '2023-01-29 12:16:16'),
(14, 5, '/productImages/41gufqa6mms-63d60f3073237.jpg', '2023-01-29 12:16:16', '2023-01-29 12:16:16'),
(15, 5, '/productImages/dk-0088-dibangu-designer-belts-for-men-high-quality-male-genuine-leather-strap-with-automatic-buckle__04322-63d60f307f904.jpg', '2023-01-29 12:16:16', '2023-01-29 12:16:16'),
(16, 6, '/productImages/61+skcjfd-l-63d614593d6ac.jpg', '2023-01-29 12:38:17', '2023-01-29 12:38:17'),
(17, 6, '/productImages/135_a-63d6145941938.jpg', '2023-01-29 12:38:17', '2023-01-29 12:38:17'),
(18, 6, '/productImages/45544550-7c97-11ed-be7f-b301bffa0c0d-63d614594efc4.jpg', '2023-01-29 12:38:17', '2023-01-29 12:38:17'),
(19, 6, '/productImages/colmi-p28-plus-smart-watch-1-63d6145955b82.jpg', '2023-01-29 12:38:17', '2023-01-29 12:38:17'),
(20, 7, '/productImages/41cr0mrpahl-63d6155082d67.jpg', '2023-01-29 12:42:24', '2023-01-29 12:42:24'),
(21, 7, '/productImages/51yatfwykqs-63d615508aa02.jpg', '2023-01-29 12:42:24', '2023-01-29 12:42:24'),
(22, 7, '/productImages/eng_pl_monitor-hp-27-27ea-x6w32aa-fhd-ips-7ms-mat-7747_3-63d61550a1ef1.jpg', '2023-01-29 12:42:24', '2023-01-29 12:42:24'),
(23, 7, '/productImages/hp-22er-500x500-63d61550abbb3.jpg', '2023-01-29 12:42:24', '2023-01-29 12:42:24'),
(24, 8, '/productImages/618l+v-i3ol-63d6161b5f130.jpg', '2023-01-29 12:45:47', '2023-01-29 12:45:47'),
(25, 8, '/productImages/das-keyboard-the-keyboard-4c-tkl-cherry-mx-brown-nordic-63d6161b62c70.jpg', '2023-01-29 12:45:47', '2023-01-29 12:45:47'),
(26, 8, '/productImages/images-63d6161b64507.png', '2023-01-29 12:45:47', '2023-01-29 12:45:47'),
(27, 8, '/productImages/keyboard-63d6161b67e04.jpg', '2023-01-29 12:45:47', '2023-01-29 12:45:47'),
(28, 9, '/productImages/7dace719b2c6932cce67a98c0c5fce50-63d616f0d1715.jpg', '2023-01-29 12:49:20', '2023-01-29 12:49:20'),
(29, 9, '/productImages/34c635cad0d8dc166934611c5531ad42-63d616f0dbae3.jpg', '2023-01-29 12:49:20', '2023-01-29 12:49:20'),
(30, 9, '/productImages/61-(1)-63d616f0e1ca7.jpg', '2023-01-29 12:49:20', '2023-01-29 12:49:20'),
(31, 9, '/productImages/9268f918cf27d46397f659e1b6044e1d-63d616f0f0413.jpg', '2023-01-29 12:49:21', '2023-01-29 12:49:21'),
(32, 10, '/productImages/cosmetics-1600px-63d617a6518cb.jpg', '2023-01-29 12:52:22', '2023-01-29 12:52:22'),
(33, 10, '/productImages/cosmetics-759-63d617a657ea1.jpg', '2023-01-29 12:52:22', '2023-01-29 12:52:22'),
(34, 10, '/productImages/pexels-photo-7290089-63d617a65abd8.jpeg', '2023-01-29 12:52:22', '2023-01-29 12:52:22'),
(35, 11, '/productImages/51poyriiiml-63d618ac559b8.jpg', '2023-01-29 12:56:44', '2023-01-29 12:56:44'),
(36, 11, '/productImages/6166ujc7c1l-63d618ac584a5.jpg', '2023-01-29 12:56:44', '2023-01-29 12:56:44'),
(37, 11, '/productImages/h6110bdd227324b8aa69909875d6cadaee-63d618ac5bfcb.jpg', '2023-01-29 12:56:44', '2023-01-29 12:56:44'),
(38, 11, '/productImages/h45659d06713c4781bd867e3e099a5f25u-63d618ac614b7.jpg', '2023-01-29 12:56:44', '2023-01-29 12:56:44'),
(39, 12, '/productImages/_methode_times_prod_web_bin_0d313100-7fa9-11e8-a645-f0478472c67b-63d619e032c2e.jpg', '2023-01-29 13:01:52', '2023-01-29 13:01:52'),
(40, 12, '/productImages/fragrance-63d619e03a94e.jpg', '2023-01-29 13:01:52', '2023-01-29 13:01:52'),
(56, 13, '/productImages/crd-blk_2side_46ad1bc6-dbb0-409d-9ff1-722b21ace899_2000x-(1)-63d6892a37191.jpg', '2023-01-29 20:56:42', '2023-01-29 20:56:42'),
(57, 13, '/productImages/crd-blk_back_ee914df7-ded0-40ec-82ee-b9c33f3be18a_2000x-63d6892a58e0c.jpg', '2023-01-29 20:56:42', '2023-01-29 20:56:42'),
(58, 13, '/productImages/crd-blk_d92e20b1-34af-498e-b2ff-d31ee625c000_2000x-63d6892a78248.jpg', '2023-01-29 20:56:42', '2023-01-29 20:56:42'),
(59, 14, '/productImages/popl-phonecard-phone-ylh-custom-blk_1_2000x-63d68985611af.jpg', '2023-01-29 20:58:13', '2023-01-29 20:58:13'),
(60, 14, '/productImages/popl-phonecard-phone-ylh-custom-nologo-wht_2000x-63d689858302f.jpg', '2023-01-29 20:58:13', '2023-01-29 20:58:13'),
(61, 14, '/productImages/popl-phonecard-phone-ylh-custom-wht_1_2000x-63d68985a86a9.jpg', '2023-01-29 20:58:13', '2023-01-29 20:58:13'),
(62, 15, '/productImages/apl-blk-qr-44-front_2000x-63d689c0d60ca.jpg', '2023-01-29 20:59:12', '2023-01-29 20:59:12'),
(63, 15, '/productImages/apl-blk-qr-44-product_2000x-63d689c1022ba.jpg', '2023-01-29 20:59:13', '2023-01-29 20:59:13'),
(64, 16, '/productImages/crd-blk_2side_46ad1bc6-dbb0-409d-9ff1-722b21ace899_2000x-(1)-63d689eba0c84.jpg', '2023-01-29 20:59:55', '2023-01-29 20:59:55'),
(65, 16, '/productImages/crd-blk_back_ee914df7-ded0-40ec-82ee-b9c33f3be18a_2000x-63d689ebc30c2.jpg', '2023-01-29 20:59:55', '2023-01-29 20:59:55'),
(66, 16, '/productImages/crd-blk_d92e20b1-34af-498e-b2ff-d31ee625c000_2000x-63d689ebe16c0.jpg', '2023-01-29 20:59:55', '2023-01-29 20:59:55');

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
(4, 2, 0, 'Thx for the early access - the propad is awesome!', 1, '2023-01-22 05:13:40', 2, 'Jon T.', 'MLO'),
(5, 66, 0, 'Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming Hi Bangladesh, we are coming .....', 1, '2023-01-16 14:03:13', 66, 'Raj & Pori', 'We are Dhaka'),
(6, 1, 5, 'I hadn’t gotten any applications in 2023 and haven’t tried this hard since I started as a Junior LO. The day after I signed up put my new QR code on my open house flyers and the mortgage calculator landed me two solid apps!', 1, '2023-01-22 06:13:22', 1, 'Jerome', 'Calculator'),
(8, 113, 0, 'Hello I am Moshiur Rahman', 0, '2023-01-18 14:50:50', 113, 'Md Manik', 'Hello test'),
(9, 72, 0, 'fdfdfsffsdf sfd dsf df sd', 0, '2023-01-18 18:38:33', 72, 'riyad', 'fsdf'),
(10, 54, 0, 'Really cool tools. Looking forward to the full launch', 1, '2023-01-22 06:19:34', 54, 'Nick', 'Features'),
(11, 1, 1, 'CAN’T WAIT FOR MORE! I was able to get early access to marketing material and looked like a rockstar in a pinch :)', 1, '2023-01-22 05:38:56', 1, 'Jackie Litz', 'THANK YOU!'),
(12, 120, 0, 'This is the first review', 0, '2023-01-29 14:39:31', 120, 'Moshiur Rahman', 'This is the test'),
(13, 122, 0, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley', 0, '2023-01-29 14:42:29', 122, 'zia', 'Test Title'),
(14, 119, 0, 'Do you have an idea for a feature that would make better for you? Let us know! Do you have an idea for a feature that would make better for you? Let us know!Do you have an idea for a feature that would make better for you? Let us know!Dogfghghhghghgh', 0, '2023-01-29 18:17:10', 119, 'Maidul Islam', 'Do you have an idea for a feature that'),
(15, 124, 0, 'This is the first test', 0, '2023-01-29 18:18:32', 124, 'Moshiur Rahman', 'This is the first test');

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
  `site_disclaimer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `google_key`, `google_analytics_id`, `site_name`, `site_logo`, `favicon`, `seo_meta_description`, `seo_keywords`, `seo_image`, `tawk_chat_bot_key`, `name`, `address`, `driver`, `host`, `port`, `encryption`, `username`, `password`, `status`, `created_at`, `updated_at`, `application_type`, `app_mode`, `facebook_client_id`, `facebook_client_secret`, `facebook_callback_url`, `google_client_id`, `google_client_secret`, `google_callback_url`, `copyright_text`, `office_address`, `facebook_url`, `youtube_url`, `twitter_url`, `linkedin_url`, `telegram_url`, `whatsapp_number`, `ios_app_url`, `android_app_url`, `email`, `phone_no`, `support_email`, `instagram_url`, `site_title`, `pinterest_url`, `main_motto`, `site_disclaimer`) VALUES
(1, NULL, 'G-12SD09FF03', 'MTPro.me', '/assets/uploads/logo/mtgpro-63b019bb82b60.png', '/assets/uploads/icon/mtg_gmail-dp-63b019bb822d0.jpg', 'Welcome to Mtgpro. It’s more than a digital business card, it’s a networking sales generator.', 'keyword 1, keyword 2', '/assets/uploads/logo/mtg_gmail-dp-63b019bb82e31.jpg', NULL, 'Mtgpro', 'noreply@mtgpro.me', 'smtp', 'smtp.mailtrap.io', 2525, 'tls', 'maidul@gmail.com', '12345678', '1', '2022-03-12 14:54:38', '2023-01-28 08:39:56', NULL, NULL, '5840805692668340', 'e15876dfe456af8cd5dea082aea5313e', 'https://letsconnectv2.webdevs4u.com/auth/facebook/callback', '570809630329-0a126djludbrlnkkcoh5je6b8fe8rqbo.apps.googleusercontent.com', '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', 'https://letsconnectv2.webdevs4u.com/auth/google/callback', 'Copyright © LetsConnect. All rights reserved.', 'USA', NULL, NULL, NULL, NULL, NULL, NULL, 'https://www.linkedin.com/feed/', 'https://www.linkedin.com/feed/', 'support@mtgpro.me', '+1516297-3389', 'support@mtgpro.me', 'https://www.instagram.com/_mtgpro.me/', 'MTGPro.me', NULL, 'MTGPro.me is an optimized digital business card solution for mortgage professionals. \r\nMTGPro.me is owned by Non-QM Doc, a Wyoming Limited Liability Company', NULL);

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
  `plan_id` int(10) DEFAULT NULL,
  `order_id` int(10) DEFAULT NULL,
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
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '0=pending,1=active,2=deleted',
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
  `active_card_id` int(10) DEFAULT NULL,
  `connection_title` varchar(155) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_notify` tinyint(4) DEFAULT 1,
  `user_disclaimer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `active_card_id`, `connection_title`, `is_notify`, `user_disclaimer`) VALUES
(1, 'Mtgpro Admin', NULL, 'arobil@gmail.com', 'user_1', NULL, 1, 1, NULL, 0, '$2y$10$ol.KtLxyCrVL3TQH1CKeoerNqDOJYs5g59Z0.RhU37uL4t3KvSVYe', 'Email', '/assets/uploads/profile/IMG-MTG_Gmail Dp.jpg-1672488921.jpg', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-15', '2023-01-14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-03-12 14:54:38', '2023-01-19 18:46:44', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 89, NULL, 0, NULL),
(2, 'user1', NULL, 'maidul.tech10@gmail.com', 'user_2', NULL, 0, 2, NULL, 0, '$2y$10$v8MKSaFQyVL..Fs8ZW.Pt..RccGPD5uRfyKexrYcgW0GXUaGvpTlO', 'Email', 'https://www.mtgpro.me/assets/uploads/avatar/-63c2bc503f953.png', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-09 17:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-10', '2023-01-09', 'Dahlia Strong', 'personal', '123', NULL, 'Autem distinctio Sa', 'Odit velit qui a tot', '75510', NULL, '+1 (606) 757-4578', 'comy@mailinator.com', 2, NULL, NULL, NULL, NULL, 'cus_MvsUI7ZC6dOOp9', '2022-08-15 14:34:14', '2023-01-15 10:00:00', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'ZjzgMfO4nMKUHEVIcCKDa0iHd2vlYQ9NbLGQN9qM5igKWgkIFBNVAJVAYkh3', '2023-01-15 11:00:00', 1, '2023-01-28 08:41:12', 73, NULL, NULL, 0, NULL),
(44, 'Md Maidul Islam', NULL, '44-Maidul@gmail.com', 'user_44', NULL, 1, 2, NULL, 0, '$2y$10$ymfM/z4aBi58HGVoQl48HekrFbCUpJYmDnWuW1tmwd0EjspASl0yi', NULL, NULL, '2', NULL, '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-21', '2023-01-21', 'Uma Morgan', NULL, NULL, 'Optio non modi irur', 'Voluptate aperiam ha', 'Inventore ea culpa', '66667', 'United States', '+1 778-849-6926', 'hokedege@mailinator.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MSh5DBIRmXVjgUGfTyKDm60\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674307571,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674307571,\"currency\":\"usd\",\"current_period_end\":1705843571,\"current_period_start\":1674307571,\"customer\":\"cus_ND7J6aqyTPH1fc\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_ND7J0RXADy3Nc1\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674307572,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MSh5DBIRmXVjgUGfTyKDm60\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MSh5DBIRmXVjgUGfTyKDm60\"},\"latest_invoice\":\"in_1MSh5DBIRmXVjgUGduIgvgwM\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674307571,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_ND7J6aqyTPH1fc', '2022-11-02 08:58:29', '2023-01-21 19:26:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:42:00', 73, 4, NULL, 0, NULL),
(45, 'Maidul', NULL, 'maidul1@gmail.com', 'user_45', NULL, 1, 1, NULL, 0, '$2y$10$4CA3v2emacQWtY67ZkfS8.FmugGYH5pY3lcmvVy4Xl.ipkykEqSiO', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2022-11-19 01:06:04', '2023-01-15 11:31:53', NULL, NULL, NULL, NULL, NULL, '0152121012', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(49, 'Rokib', NULL, '49-rokib@gmail.com', 'user_49', NULL, 1, 2, NULL, 0, '$2y$10$cBU5Zq8kX/CN14iPR.ghK.O8tCNVVQsMQrHSv9npCHWYn1PaUUlVi', NULL, 'upload/profile/1669453399.jpg', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-27', '2022-11-26', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-11-26 06:24:04', '2022-11-26 03:03:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:42:49', 73, NULL, NULL, 0, NULL),
(50, 'Sharif', NULL, '50-sharif@gmail.com', 'user_50', NULL, 1, 2, NULL, 0, '$2y$10$vlc72hr0quMawpKKBAWVWur2LLoS55VirnJVJRDOlqScbglQ8JfG6', NULL, 'upload/profile/1669558751.png', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-01-28', '2022-11-27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-11-27 14:08:58', '2022-11-27 08:19:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:43:10', 73, NULL, NULL, 0, NULL),
(51, 'Kamal', NULL, '51-user10@gmail.com', 'user_51', NULL, 1, 2, NULL, 0, '$2y$10$cuwHVKFPHtqzEACwJKh3iORBwWSC0Ywgn6corStox682JvFgVkS7m', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '0000-00-00', '2022-11-30', 'Kamal', NULL, NULL, 'fgfg', 'fgfg', 'fgfg', 'fgfg', 'United States', '+1', '51-user10@gmail.com', 2, NULL, NULL, NULL, NULL, NULL, '2022-11-30 07:51:58', '2022-11-30 02:17:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:43:38', 73, NULL, NULL, 0, NULL),
(52, 'Jamal', NULL, '52-jamal@gmail.com', 'user_52', NULL, 1, 2, NULL, 0, '$2y$10$YJQ.XhRrFAnodS5cz.LLQ.bNFUtqFyO3ilumeNR6B8Y0qLFlTBc1u', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"3\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF6yZyLZuhFKDP\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660467893,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF6yUR494O4D68\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MF6yZyLZuhFKDP\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2022-11-17 10:46:41\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2022-12-30', '2022-11-30', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-11-30 08:17:36', '2022-11-30 02:18:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:43:59', 73, NULL, NULL, 0, NULL),
(54, 'Rony Mia', NULL, 'ronymia.tech@gmail.com', 'user_54', NULL, 1, 2, NULL, 0, '$2y$10$mwV9B/U0MVYKpc76MICZPuObdPi4FNW0S0OD1IfOMS0kIukvAMU6y', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4C9qHTYcI0ZzTxl40nUtRPzrJXOyHnrXLCEH3G=s96-c', '2', NULL, '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-22', '2023-01-22', 'Rony Islam', NULL, NULL, 'dhaka, banani\r\ndhaka', 'Chittoor', 'ANDHRA PRADESH', '1213', 'Bangladesh (বাংলাদেশ)', '+880 1990-57232', 'ronymia.tech@gmail.com', 1, '2bXvA82lZv0rPAZwmE8A9YLrxiCdow7EE8RD1oKaTdw1zsBwWD7DGJaRd4TN', NULL, NULL, '{\"id\":\"sub_1MSuTQBIRmXVjgUGFHP65YAQ\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674359044,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674359044,\"currency\":\"usd\",\"current_period_end\":1705895044,\"current_period_start\":1674359044,\"customer\":\"cus_NDL9pBBoWWo3Ch\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NDL9BIiUqsQtS9\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674359045,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MSuTQBIRmXVjgUGFHP65YAQ\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MSuTQBIRmXVjgUGFHP65YAQ\"},\"latest_invoice\":\"in_1MSuTQBIRmXVjgUGO1pEVmbR\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674359044,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NDL9pBBoWWo3Ch', '2022-12-08 08:21:37', '2023-01-24 09:31:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107403319867710670983', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:44:58', 73, 41, NULL, 0, NULL),
(57, 'Mokaddes Hosain', NULL, '57-mr.mokaddes@gmail.com', 'user_57', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2308423085971803/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:45:25', '2022-12-10 06:45:25', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2308423085971803', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:45:25', 73, NULL, NULL, 0, NULL),
(58, 'বেদনার বিশালতা', NULL, '58-mr.mokaddes@yahoo.com', 'user_58', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2483507575123152/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:46:38', '2022-12-10 06:46:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2483507575123152', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:45:58', 73, NULL, NULL, 0, NULL),
(59, 'Md Maidul Islam', NULL, '59-mahibc1@gmail.com', 'user_59', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2135716489941526/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:57:59', '2022-12-10 06:57:59', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2135716489941526', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:46:22', 73, NULL, NULL, 0, NULL),
(60, 'Md Maidul', NULL, '60-maidul.tech1@gmail.com', 'user_60', NULL, 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4oYDvcIxT3OAcXD-t_j8Z_gWfrBS7dbYbMrZA7=s96-c', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 06:59:08', '2022-12-10 06:59:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '107639191533203099239', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:47:37', 73, NULL, NULL, 0, NULL),
(62, 'Rony Mia', NULL, '62-ronymia111333@gmail.com', 'user_62', NULL, 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/1801020763564287/picture?type=normal', NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-10', '2022-12-10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-12-10 08:06:19', '2022-12-10 08:06:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '1801020763564287', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:47:59', 73, NULL, NULL, 0, NULL),
(64, 'Tenu', NULL, '64-teno@gmail.com', 'user_64', NULL, 1, 2, NULL, 0, '$2y$10$cJO1.wrrpI4NRQgKV0CLTeY4S8g/pCuKl5n.8hDbu.OC2XCneeH1W', NULL, NULL, NULL, NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Solopreneur & Individual\",\"plan_description\":\"Solopreneur & Individual\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"10\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 3 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2022-12-10 05:35:43\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2023-01-11', '2022-12-11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2022-12-11 10:29:58', '2022-12-13 00:32:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:48:28', 73, NULL, NULL, 0, NULL),
(65, 'Pori Moni', NULL, '65-pori@gmail.com', 'user_65', NULL, 2, 2, NULL, 0, '$2y$10$LAR/Q4BqT/yNaM9dyL8DbuSBZoEvuLwLNTjIgJ8r/G7P007KmpTKi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-01 00:14:23', '2023-01-01 00:14:23', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:48:40', 73, NULL, NULL, 0, NULL),
(66, 'Raj', NULL, '66-raj@gmail.com', 'user_66', NULL, 2, 2, NULL, 0, '$2y$10$5I8iykUXNQAiPBUSN8uytOgY.P22b5RfK/akOiazXBlY2Zh.Q1OZu', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-03 20:16:49\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-09', '2023-01-08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-01 14:27:22', '2023-01-08 13:19:29', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:49:15', 73, NULL, NULL, 0, NULL),
(67, 'Hasad Whitfield', NULL, '67-jexoqo@mailinator.com', 'user_67', NULL, 2, 2, NULL, 0, '$2y$10$W/ErYo1AoUcb4l/yTtrZOeDp.KyqGr4NpGvKxomBXiadr33zpRjZy', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_MteFuq7wvJ1aBb\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MteFuq7wvJ1aBb\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1669817263,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MteFgKvvRAdgt8\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteF5c6833me9t\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_MteF5c6833me9t\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-03 20:16:49\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0}', '2024-01-06', '2023-01-05', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-04 14:18:34', '2023-01-05 14:55:19', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 08:49:34', 73, NULL, NULL, 0, NULL),
(68, 'Cade Elliott', NULL, '68-vetidudug@mailinator.com', 'user_68', NULL, 2, 2, NULL, 0, '$2y$10$sZ.HEx9Bbwx.A8Jd6yIjvupn8EA3b.4pC/zL2bIB2t3Uxo51q6JnW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-08 13:18:16', '2023-01-08 13:18:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 09:23:07', 73, NULL, NULL, 0, NULL),
(69, 'sakil', NULL, '69-sakil@gmail.com', 'user_69', 'BD', 1, 2, NULL, 0, '$2y$10$tsuhxswes335t1.UCXmWnuYEJlrD3d3y9N/M7Rk0BN0tG4tkb2cc.', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-11 11:05:43', '2023-01-11 11:05:43', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 09:23:26', 73, NULL, NULL, 0, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `active_card_id`, `connection_title`, `is_notify`, `user_disclaimer`) VALUES
(70, 'Masud', NULL, '70-masud@gmail.com', 'user_70', 'BD', 1, 2, NULL, 0, '$2y$10$CM3o5lVs.hFjzxt/ODwGMu.UM.zXDpyYfgTf5CKXkRXaYpuQH7YES', NULL, 'https://www.mtgpro.me/assets/uploads/avatar/-63beaeef6f719.png', '2', NULL, '{\"id\":2,\"plan_type\":2,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Gold\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":46,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"20\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solopreneur Account +\\\",\\\"Up to 20 Shareable Digital Cards\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Marketing Mastery 101 Guide\\\",\\\"BONUS: MTG Branding Guide\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-03T08:17:56.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2023-02-11', '2023-01-11', 'Masud', NULL, NULL, 'Dhaka', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+880', 'masud@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MOx1oBIRmXVjgUGlA9e9Zuz\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1673415551,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1673415551,\"currency\":\"usd\",\"current_period_end\":1676093951,\"current_period_start\":1673415551,\"customer\":\"cus_N9FWOBDt6N7yDU\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_N9FWwITGjZzQmr\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1673415552,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MOx1oBIRmXVjgUGlA9e9Zuz\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MOx1oBIRmXVjgUGlA9e9Zuz\"},\"latest_invoice\":\"in_1MOx1oBIRmXVjgUGal5lHAzu\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1673415551,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_N9FWOBDt6N7yDU', '2023-01-11 11:25:23', '2023-01-19 19:36:20', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 09:23:36', 73, 76, NULL, 0, NULL),
(71, 'Ziaur Rahman', NULL, '71-ziariyad018@gmail.com', 'user_71', 'BD', 1, 2, NULL, 0, '$2y$10$8gMttuZN5GkCfr.14E7E/O1sO9y6GftOKaFkT.qX.P6bK6C7b.fLO', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-11 15:39:25', '2023-01-18 18:25:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 09:24:15', 73, 79, NULL, 0, NULL),
(72, 'riyad', NULL, 'ziariyad@gmail.com', 'user_72', 'BD', 1, 2, NULL, 0, '$2y$10$7ABZEkqQqlQBdkwTvuJ66OutBF0hqqLpPWhUB/bACpmBxA0cEW0rO', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 16:30:07', '2023-01-18 18:24:09', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 108, NULL, 0, NULL),
(73, 'Joe Renter', NULL, 'jr@mtgpro.me', 'user_73', 'US', 1, 2, NULL, 0, '$2y$10$tzk9UHWHh1gLcv9PuLNXhuWTCIuoiaOJ.pboz74w//FL5m3Jd2WLe', NULL, '/assets/uploads/profile/IMG-MTG-01.jpg-1674876292.jpg', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Freeport', 'New York', '11520', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:11:33', '2023-01-28 10:29:40', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 80, NULL, 0, NULL),
(74, 'asasas', NULL, 'asasas@gmail.com', 'user_74', 'BD', 1, 2, NULL, 0, '$2y$10$4a5PMD8SeIF08/ST4mSxEuo92SQohfgE3m4EndvFRXlWZzmc27lV.', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:32:27', '2023-01-11 19:32:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(75, 'Michael M. Kelly', NULL, 'MichaelMKelly@jourrapide.com', 'user_75', 'BD', 1, 2, NULL, 0, '$2y$10$Bf9ynbXiKV08/LLzMcs/PuLEF7BvdanzDHg2BPX8/8qENvpqDzg6K', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 19:38:51', '2023-01-11 19:38:51', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(76, 'John A. Knox', NULL, 'JohnAKnox@dayrep.com', 'user_76', 'BD', 1, 2, NULL, 0, '$2y$10$bY/OLPoEJiyMcF7aNx11U.6CQCxXRbQdwmrNhWwOuxA1Oe198aFne', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-15', '2023-01-14', 'John A. Knox', NULL, NULL, 'asasasas', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+1', 'JohnAKnox@dayrep.com', 1, NULL, NULL, NULL, NULL, 'cus_N9kfofuMNVHkV5', '2023-01-11 19:41:00', '2023-01-14 15:33:39', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 83, NULL, 0, NULL),
(77, 'Sakib', NULL, 'sakib@gmail.com', 'user_77', 'BD', 1, 2, NULL, 0, '$2y$10$/DplIPSuQ7fmefKTx0YzW.V9y0LpBd36kFv.XI8J11rxHNx6hmuqq', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-11', '2023-01-11', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 20:47:46', '2023-01-11 20:47:46', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(78, 'Jagdeep Singh', NULL, 'jagdeep.saini2704@gmail.com', 'user_78', 'US', 1, 2, NULL, 0, '$2y$10$gxZ4BZmd7ZOhx9hUWNonXOKnSJW.zA4AgB0c.si9Q24uAW2yJN/jG', NULL, 'https://www.mtgpro.me/assets/uploads/avatar/-63c181e7893d3.png', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-14', '2023-01-13', NULL, NULL, NULL, NULL, 'Rockaway', 'New Jersey', '07866', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-11 22:36:54', '2023-01-28 03:58:30', NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 115, 'Share your info back with Jagdeep Singh', 1, NULL),
(79, 'Purnima', NULL, 'purnima@gmail.com', 'purnima', 'BD', 1, 2, NULL, 0, '$2y$10$Z5NAlVt3aznQO6jBRpxsNuEQKUUdDcyrDGpofiMR2lMNMW6XXqS.e', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-12', '2023-01-12', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-12 18:26:15', '2023-01-13 09:42:18', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 87, NULL, 0, NULL),
(80, 'Md Maidul Islam', NULL, 'Md_Maidul_Islam@gmail.com', 'Md Maidul Islam', 'BD', 1, 2, NULL, 0, '', NULL, 'https://graph.facebook.com/v3.3/2181498475363327/picture?type=normal', '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2026-01-12', '2023-01-12', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1000', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-12 21:02:31', '2023-01-12 21:03:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'facebook', '2181498475363327', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 88, NULL, 0, NULL),
(81, 'Sarwar', NULL, 'nayeemsarwar1275@gmail.com', '', NULL, 2, 1, NULL, 0, '$2y$10$.NAQ7rE6Xs4bBG3CvcUxLumPgUKbJpWTDQEha/zUb7N8bOC4FXmb6', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 11:26:48', '2023-01-14 11:26:48', NULL, NULL, NULL, NULL, NULL, '01520123451', NULL, NULL, NULL, NULL, 'Software', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(82, 'hasemali', NULL, 'hasem@gmail.com', 'hasem', 'BD', 1, 2, NULL, 0, '$2y$10$dTqTEqOrTk7cCtpWGeLB6.qpRrRfnso95OtHyEqTz3z5Q.Sl3D5iS', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 12:06:37', '2023-01-14 12:06:37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(83, 'abir sarwar', NULL, 'abir@gmail.com', 'abir', 'BD', 1, 2, NULL, 0, '$2y$10$HHlH45WbOw5cJBXMAO.0eOTtrLQDjNZ4taecP53WnpusgSgHdq0zS', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 12:08:29', '2023-01-14 12:09:19', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 90, NULL, 0, NULL),
(84, 'kahlillur rahman', NULL, 'khalil@gmail.com', 'khalil', 'BD', 1, 2, NULL, 0, '$2y$10$f1lDod7CNE7WTHAyZQ5zi.AV171RaNuiUKFAHV4owtLo5J6PT9XL2', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 12:12:28', '2023-01-14 12:12:28', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(85, 'maidul', NULL, 'maidul01@gmail.com', 'maidul', 'BD', 1, 2, NULL, 0, '$2y$10$fKj8IB4NbJuCaHCklp5s4ePBCARGg7iF9Wvwe6820ymb/8MmPSdUG', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 14:15:38', '2023-01-14 14:15:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL),
(90, 'Kamrul', NULL, 'kamrul@gmail.com', 'kamrul', 'BD', 1, 2, NULL, 0, '$2y$10$HQzIt8E1XG0v9DYcaZS8Uu0dGJfEsjIAK/QcKOJZKC26yd514s/ae', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-14', '2023-01-14', NULL, NULL, NULL, NULL, 'Rajbari', 'Chittagong', '7700', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-14 20:40:21', '2023-01-14 20:41:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 94, NULL, 0, NULL),
(91, 'Joseph Renter', NULL, 'jr@nonqmdoc.com', 'joeR', 'US', 1, 1, NULL, 0, '$2y$10$xyqzKIpaUYjLNVBiohwN9e9Ee2DNuntqQg/mSkcfi08VB0kyBHarm', NULL, NULL, '1', NULL, '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2028-01-15', '2023-01-15', NULL, NULL, NULL, NULL, 'Freeport', 'New York', '11520', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-15 10:25:34', '2023-01-28 10:28:22', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 95, NULL, 0, NULL),
(92, 'ajom khan', NULL, 'ajim@gmail.com', 'ajom', 'BD', 1, 2, NULL, 0, '$2y$10$8uBwblLa1jQl4FttT08SPuKu.R0.5.92JksIe446/5EU0oUsy2/pq', NULL, NULL, '62f8bab5e6912', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T03:04:53.000000Z\",\"updated_at\":\"2023-01-09T05:13:33.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-16', '2023-01-15', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-15 11:02:12', '2023-01-15 11:41:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 96, NULL, 0, NULL),
(107, 'Arifur Rahman', NULL, '107-arifmahmud64@gmail.com', 'arifur-rahman-63c3a8179e5e7', 'BD', 1, 2, NULL, 0, '$2y$10$5t1cNV/mhimbDWJ80n1bvenkauaEsDduCtPe8GZBD5/.sjyHgDE..', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4IZvMNZJWrbKDErUWRt6O80Du3C87cPn-iMZ2rXuA=s96-c', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 5 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Updates & Feature Add\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-09 11:13:33\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-16', '2023-01-15', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-15 13:15:35', '2023-01-18 14:29:40', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'google', '100953062814271775540', NULL, NULL, NULL, NULL, 'uqprqmMHW63ypGGTrJvp5JprEuHyfQRYS7SvAeskQyzjQrEioV4IHe9QWeIk', '2023-01-15 16:18:26', 1, '2023-01-18 14:29:40', 107, 98, NULL, 0, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `active_card_id`, `connection_title`, `is_notify`, `user_disclaimer`) VALUES
(108, 'Tanjim Tisha', NULL, '108-tisha@gmail.com', 'tisha', 'BD', 1, 2, NULL, 0, '$2y$10$iaP8Nx9wSs6rBxZH4WBTde27D2H6bXy3fl7ag058yEKMWPKkCFJ.O', NULL, NULL, '3', '366', '{\"id\":3,\"plan_type\":2,\"plan_id\":\"62f8d935b6119\",\"plan_name\":\"Corporate\",\"plan_description\":\"Corporate\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":149,\"plan_price\":\"1999\",\"discount_percentage\":12,\"validity\":\"9999\",\"no_of_vcards\":\"100\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solo & Small Business Accounts +\\\",\\\"Up to 100 Shareable Digital Cards\\\",\\\"10 Professional Card Setups & Personalizations\\\",\\\"Team-Level Tracking (new feature development; Coming Soon!)\\\"]\",\"plans_type\":1,\"name\":\"Legacy Client\",\"slug\":\"legacy-client\",\"stripe_plan_id\":\"plan_MF94PTFRux9rYx\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF94PTFRux9rYx\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":4995,\\\"amount_decimal\\\":\\\"4995\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660475701,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF94KiEL4GmZHC\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDxmBhgyMs0K\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":199900,\\\"am\",\"stripe_plan_id_yearly\":\"plan_MteDxmBhgyMs0K\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:15:01.000000Z\",\"updated_at\":\"2023-01-03T08:18:17.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-22', '2023-01-22', 'Tanjim Tisha', NULL, NULL, 'Dhaka', 'Rajbari', 'Chittagong', '7700', 'Bangladesh', '+8801681944126', 'tisha@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MT1J0BIRmXVjgUGv4y1Xhme\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674385306,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674385306,\"currency\":\"usd\",\"current_period_end\":1705921306,\"current_period_start\":1674385306,\"customer\":\"cus_NDSDDJLi7pc615\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NDSD7QD546JJRy\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674385307,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":199900,\"unit_amount_decimal\":\"199900\"},\"quantity\":1,\"subscription\":\"sub_1MT1J0BIRmXVjgUGv4y1Xhme\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MT1J0BIRmXVjgUGv4y1Xhme\"},\"latest_invoice\":\"in_1MT1J0BIRmXVjgUGoJvr6phR\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674385306,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NDSDDJLi7pc615', '2023-01-18 10:39:28', '2023-01-18 18:41:17', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 09:24:30', 73, 100, NULL, 0, NULL),
(109, 'Moshiur Rahman', NULL, '109-mo15103053@gmail.com', 'moshiur_rahman', 'BD', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp7BYOAzaPNgzCrR-tf-9BDHzNEH71RhQJCILAsJ=s96-c', '2', '366', '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-19', 'Moshiur Rahman', NULL, NULL, 'Test Buliding', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+8801770802187', 'mo15103053@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MRueXBIRmXVjgUGxFSqrcQX\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674121405,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674121405,\"currency\":\"usd\",\"current_period_end\":1705657405,\"current_period_start\":1674121405,\"customer\":\"cus_NCIRAV5DGzW2rn\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NCJHbtzRxuEveZ\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674121405,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MRueXBIRmXVjgUGxFSqrcQX\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRueXBIRmXVjgUGxFSqrcQX\"},\"latest_invoice\":\"in_1MRueXBIRmXVjgUGYRLxitUO\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674121405,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NCIRAV5DGzW2rn', '2023-01-18 10:43:36', '2023-01-19 19:10:27', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '101109321737579271560', NULL, NULL, NULL, NULL, 'v4jSud1VwMmLXbuEoO6nweXsXxV2auQO8Q9yZ19UM8g9trcLteQ9F8NrMUQb', '2023-01-19 15:59:17', 1, '2023-01-28 10:27:53', 73, 114, NULL, 0, NULL),
(110, 'Moshiur Rahman', NULL, '110-moshiur2187@gmail.com', 'moshiur', 'BD', 1, 2, NULL, 0, '$2y$10$3NvqFcM82YjpLs5TfUFgO.QAciVwYsvVKnVo4VhkEFF19.XbhUtIS', NULL, NULL, '2', '366', '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-18', '2023-01-18', 'Moshiur Rahman', NULL, NULL, 'Dhaka Bangladesh', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+8801770802187', 'moshiur2187@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MRUvaBIRmXVjgUGOnv5YRAG\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674022518,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674022518,\"currency\":\"usd\",\"current_period_end\":1705558518,\"current_period_start\":1674022518,\"customer\":\"cus_NBsgDjR9NgQapK\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NBsgiYfXT0tjwz\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674022518,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":99900,\"unit_amount_decimal\":\"99900\"},\"quantity\":1,\"subscription\":\"sub_1MRUvaBIRmXVjgUGOnv5YRAG\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRUvaBIRmXVjgUGOnv5YRAG\"},\"latest_invoice\":\"in_1MRUvaBIRmXVjgUGrP3D6Cy1\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDPNuinE4V5C\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":99900,\"amount_decimal\":\"99900\",\"billing_scheme\":\"per_unit\",\"created\":1669817130,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDfxnrK06JVE\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674022518,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NBsgDjR9NgQapK', '2023-01-18 11:20:21', '2023-01-18 12:31:57', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'MKINasfFSXgmPW2rtvLiSkcWxqFSCG8cCPZkLn4ucMXT9mGNliboZsayLiFx', '2023-01-18 12:58:15', 0, '2023-01-18 12:31:57', 110, 101, NULL, 0, NULL),
(111, 'Moshiur Rahman', NULL, '111-moshiur@gmail.com', 'moshiur123', 'BD', 1, 2, NULL, 0, '$2y$10$c4sXILFJjh6X4xjbrhCmWe3l5bUOsFR9B9uTqmN9NJaK7wLvCu1/q', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-18', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-18 13:43:29', '2023-01-18 14:08:55', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-18 14:08:55', 111, 104, NULL, 0, NULL),
(112, 'Arifur Rahman', NULL, '112-arifmahmud64@gmail.com', 'arifur_rahman', 'BD', 1, 2, NULL, 0, '', NULL, 'https://lh3.googleusercontent.com/a/AEdFTp4IZvMNZJWrbKDErUWRt6O80Du3C87cPn-iMZ2rXuA=s96-c', '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-18', NULL, NULL, NULL, NULL, 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', NULL, NULL, 2, NULL, NULL, NULL, NULL, NULL, '2023-01-18 14:29:47', '2023-01-18 14:30:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'google', '100953062814271775540', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-01-28 09:24:23', 73, 105, NULL, 0, NULL),
(113, 'Md Manik', NULL, '113-moshiur2187@gmail.com', 'manik15103053', 'BD', 1, 2, NULL, 0, '$2y$10$I8Z3co3NoFALEJVAPnLzAO7piJ2Y5jFPmJ4qt3gJ6JLUenNv0gSnG', NULL, NULL, '2', '366', '{\"id\":2,\"plan_type\":1,\"plan_id\":\"62f8d81cbf71c\",\"plan_name\":\"Intro Pro Plan\",\"plan_description\":\"Gold\",\"is_free\":0,\"plan_price_monthly\":14,\"plan_price_yearly\":100,\"plan_price\":\"999\",\"discount_percentage\":10,\"validity\":\"31\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Access to all our current features\\\",\\\"Free Upgrades Across ALL PLANS\\\",\\\"2 Custom Card Setups & Personalizations\\\",\\\"Annual Plans Get Brandable Social Media Posts\\\",\\\"Annual Plans Get Brandable Marketing Material\\\"]\",\"plans_type\":1,\"name\":\"Professional\",\"slug\":\"professional\",\"stripe_plan_id\":\"plan_MvsPvaXh0SApeG\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MvsPvaXh0SApeG\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":1500,\\\"amount_decimal\\\":\\\"1500\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1670331207,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MvsPIglZpLUA3I\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDPNuinE4V5C\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":99900,\\\"amo\",\"stripe_plan_id_yearly\":\"plan_MteDPNuinE4V5C\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:10:20.000000Z\",\"updated_at\":\"2023-01-17T15:00:24.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":1,\"is_email_signature\":1,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2023-02-18', '2023-01-18', 'Md Manik', NULL, NULL, 'Dhaka Bangladesh', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+8801770802187', 'moshiur2187@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MRXOoBIRmXVjgUGLKbn3z6h\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674032018,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674032018,\"currency\":\"usd\",\"current_period_end\":1676710418,\"current_period_start\":1674032018,\"customer\":\"cus_NBvFwsHYIPRpi0\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NBvFTqW77NLAZR\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674032018,\"metadata\":[],\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"month\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":1500,\"unit_amount_decimal\":\"1500\"},\"quantity\":1,\"subscription\":\"sub_1MRXOoBIRmXVjgUGLKbn3z6h\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRXOoBIRmXVjgUGLKbn3z6h\"},\"latest_invoice\":\"in_1MRXOoBIRmXVjgUG6ooRtglA\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MvsPvaXh0SApeG\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":1500,\"amount_decimal\":\"1500\",\"billing_scheme\":\"per_unit\",\"created\":1670331207,\"currency\":\"usd\",\"interval\":\"month\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MvsPIglZpLUA3I\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674032018,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NBvFwsHYIPRpi0', '2023-01-18 14:35:58', '2023-01-18 14:55:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3yRfMgkxQhePUvbknbvjT6O3tG46rNwhdm4ZRDRyIk6zYCjdA9XzYZir8Ii0', '2023-01-18 15:47:53', 0, '2023-01-18 14:55:04', 113, 107, NULL, 0, NULL),
(114, 'Fabian Roman', NULL, 'froman@cliffcomortgage.com', 'froman', 'US', 1, 2, NULL, 0, '$2y$10$xuzCETDYOV6zs18jVdvopu7wCTFM/z7ds0OZaviO.z4keBN0EwjUO', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-18', NULL, NULL, NULL, NULL, 'Rockaway', 'New Jersey', '07866', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-18 23:17:29', '2023-01-18 23:25:38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 109, NULL, 0, NULL),
(115, 'Larisa Zambelli', NULL, 'zambellilarisa1@gmail.com', 'larisazambelli', 'US', 1, 2, NULL, 0, '$2y$10$IpO1.59KlQ0ajcWgozPq/uHqM5rzEsfC8HiLw/8b6aOQymqYkf40a', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-20', '2023-01-19', NULL, NULL, NULL, NULL, 'Rockaway', 'New Jersey', '07866', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-19 01:23:54', '2023-01-19 10:50:01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 110, NULL, 0, NULL),
(116, 'Rakib', NULL, 'rakib@gmail.com', 'rakib', 'BD', 1, 2, NULL, 0, '$2y$10$u0mmQmuCL2JnXplUI3t/C.aLXNptB8pzo7vFNRyzcwr6Ppvovu6oO', NULL, NULL, '3', '366', '{\"id\":3,\"plan_type\":2,\"plan_id\":\"62f8d935b6119\",\"plan_name\":\"Corporate\",\"plan_description\":\"Corporate\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":149,\"plan_price\":\"1999\",\"discount_percentage\":12,\"validity\":\"9999\",\"no_of_vcards\":\"100\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"1\",\"free_setup\":\"1\",\"free_support\":\"1\",\"recommended\":\"1\",\"is_watermark_enabled\":\"1\",\"features\":\"[\\\"Everything in Solo & Small Business Accounts +\\\",\\\"Up to 100 Shareable Digital Cards\\\",\\\"10 Professional Card Setups & Personalizations\\\",\\\"Team-Level Tracking (new feature development; Coming Soon!)\\\"]\",\"plans_type\":1,\"name\":\"Legacy Client\",\"slug\":\"legacy-client\",\"stripe_plan_id\":\"plan_MF94PTFRux9rYx\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF94PTFRux9rYx\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":4995,\\\"amount_decimal\\\":\\\"4995\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660475701,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF94KiEL4GmZHC\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDxmBhgyMs0K\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":199900,\\\"am\",\"stripe_plan_id_yearly\":\"plan_MteDxmBhgyMs0K\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:15:01.000000Z\",\"updated_at\":\"2023-01-03T08:18:17.000000Z\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-19', '2023-01-19', 'Rony Islam', NULL, NULL, 'dhaka, banani\r\ndhaka', 'Chittoor', 'ANDHRA PRADESH', '1213', 'Bangladesh (বাংলাদেশ)', '+880199057232', 'ronymia.tech@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MRoToBIRmXVjgUGLJbN43u0\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674097676,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674097676,\"currency\":\"usd\",\"current_period_end\":1705633676,\"current_period_start\":1674097676,\"customer\":\"cus_NCCt85CbJ7VLML\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NCCtakpoUH1eJk\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674097677,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":199900,\"unit_amount_decimal\":\"199900\"},\"quantity\":1,\"subscription\":\"sub_1MRoToBIRmXVjgUGLJbN43u0\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MRoToBIRmXVjgUGLJbN43u0\"},\"latest_invoice\":\"in_1MRoToBIRmXVjgUGlZZXseYB\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674097676,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NCCt85CbJ7VLML', '2023-01-19 09:04:08', '2023-01-19 09:16:10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 111, NULL, 0, NULL),
(117, 'DanYell Drummond', NULL, 'danyelldrummond@gmail.com', 'DDrummond', 'US', 1, 2, NULL, 0, '$2y$10$h4vK3eQi6ZKp849P8fxgAOrZEgrpEXaWUyzMPlWUpSFApQ11DXGuW', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-22', '2023-01-21', NULL, NULL, NULL, NULL, 'Sandy', 'Utah', '84070', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-21 07:13:19', '2023-01-21 07:15:03', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 116, NULL, 0, NULL),
(118, 'Elizabeth Burbige', NULL, 'elizburbige@gmail.com', 'elizburbige', 'US', 1, 2, NULL, 0, '$2y$10$2aiKir8PdledgHo6FdeZc.HAIDF6Tge9V9eTw808cJX07vPVHj7qW', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-23', '2023-01-22', NULL, NULL, NULL, NULL, 'Freeport', 'New York', '11520', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-22 05:26:17', '2023-01-22 06:02:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 117, NULL, 0, NULL),
(119, 'Maidul Islam', NULL, 'maidul.tech@gmail.com', 'maidul07', 'BD', 1, 2, NULL, 0, '$2y$10$D5soOCllBPbhSK25U2iT9uh/33HGdgr9JGjxzHyJY6kMXZf4NTHxa', NULL, NULL, '3', '366', '{\"id\":3,\"plan_type\":null,\"plan_id\":\"2\",\"plan_name\":\"PROfessional Plan\",\"plan_description\":\"Corporate\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":149,\"plan_price\":null,\"discount_percentage\":12,\"validity\":\"9999\",\"no_of_vcards\":\"100\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"\",\"hide_branding\":\"1\",\"free_setup\":\"\",\"free_support\":\"\",\"recommended\":\"1\",\"is_watermark_enabled\":\"\",\"features\":\"[\\\"Up to 100 Shareable Digital Cards With Unique QR Codes\\\",\\\"Team-Level Tracking (new feature development; Coming Soon!)\\\",\\\"Annual plans get a free randomly selected pro device!\\\"]\",\"plans_type\":1,\"name\":\"Legacy Client\",\"slug\":\"legacy-client\",\"stripe_plan_id\":\"plan_MF94PTFRux9rYx\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF94PTFRux9rYx\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":4995,\\\"amount_decimal\\\":\\\"4995\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660475701,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF94KiEL4GmZHC\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDxmBhgyMs0K\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":199900,\\\"am\",\"stripe_plan_id_yearly\":\"plan_MteDxmBhgyMs0K\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T11:15:01.000000Z\",\"updated_at\":\"2023-01-26T18:44:14.000000Z\",\"is_vcard\":0,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-29', '2023-01-29', 'Maidul Islam', NULL, NULL, 'test', 'Rajbari', 'Chittagong', '7700', 'Bangladesh', '+1', 'maidul.tech@gmail.com', 1, NULL, NULL, NULL, '{\"id\":\"sub_1MVdbwBIRmXVjgUGofpz8rrh\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1675009208,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1675009208,\"currency\":\"usd\",\"current_period_end\":1706545208,\"current_period_start\":1675009208,\"customer\":\"cus_NDRYjG4UEu73ty\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NG9vAeA6wcGp7c\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1675009208,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":199900,\"unit_amount_decimal\":\"199900\"},\"quantity\":1,\"subscription\":\"sub_1MVdbwBIRmXVjgUGofpz8rrh\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MVdbwBIRmXVjgUGofpz8rrh\"},\"latest_invoice\":\"in_1MVdbwBIRmXVjgUGfJBRMZjF\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1675009208,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NDRYjG4UEu73ty', '2023-01-22 09:45:46', '2023-01-29 17:36:29', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 119, NULL, 0, NULL);
INSERT INTO `users` (`id`, `name`, `lname`, `email`, `username`, `billing_country_code`, `role_id`, `user_type`, `email_verified_at`, `email_verified`, `password`, `auth_type`, `profile_image`, `plan_id`, `term`, `plan_details`, `plan_validity`, `plan_activation_date`, `billing_name`, `type`, `vat_number`, `billing_address`, `billing_city`, `billing_state`, `billing_zipcode`, `billing_country`, `billing_phone`, `billing_email`, `status`, `remember_token`, `paypal_plan_id`, `paypal_data`, `stripe_data`, `stripe_customer_id`, `created_at`, `updated_at`, `trial_ends_at`, `paid_with`, `gender`, `country_code`, `ccode`, `phone`, `avatar`, `provider`, `social_id`, `dob`, `designation`, `company_name`, `company_websitelink`, `token`, `token_expire_at`, `is_token_active`, `deleted_at`, `deleted_by`, `active_card_id`, `connection_title`, `is_notify`, `user_disclaimer`) VALUES
(120, 'Moshiur Rahman', NULL, '120-moshiur2187@gmail.com', 'manik', 'BD', 1, 2, NULL, 0, '$2y$10$l2j0mhHEG5LbJwXhNHJSZuU3wSW4zMP4jDD3gNG5.dz4GoowZ9BF6', NULL, NULL, '3', '366', '{\"id\":3,\"plan_type\":null,\"plan_id\":\"2\",\"plan_name\":\"PROfessional Plan\",\"plan_description\":\"Corporate\",\"is_free\":0,\"plan_price_monthly\":15,\"plan_price_yearly\":149,\"plan_price\":null,\"discount_percentage\":12,\"validity\":\"9999\",\"no_of_vcards\":\"100\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"\",\"hide_branding\":\"1\",\"free_setup\":\"\",\"free_support\":\"\",\"recommended\":\"1\",\"is_watermark_enabled\":\"\",\"features\":\"[\\\"Up to 100 Shareable Digital Cards With Unique QR Codes\\\",\\\"Team-Level Tracking (new feature development; Coming Soon!)\\\",\\\"Annual plans get a free randomly selected pro device!\\\"]\",\"plans_type\":1,\"name\":\"Legacy Client\",\"slug\":\"legacy-client\",\"stripe_plan_id\":\"plan_MF94PTFRux9rYx\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_MF94PTFRux9rYx\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":4995,\\\"amount_decimal\\\":\\\"4995\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1660475701,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"year\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_MF94KiEL4GmZHC\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_MteDxmBhgyMs0K\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":199900,\\\"am\",\"stripe_plan_id_yearly\":\"plan_MteDxmBhgyMs0K\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14T05:15:01.000000Z\",\"updated_at\":\"2023-01-26T12:44:14.000000Z\",\"is_vcard\":0,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":1,\"is_yearly_plan\":1}', '2024-01-29', '2023-01-29', 'Moshiur Rahman', NULL, NULL, 'tttt', 'Dhaka', 'Dhaka Division', '1212', 'Bangladesh', '+8801770802187', 'moshiur2187@gmail.com', 2, NULL, NULL, NULL, '{\"id\":\"sub_1MVW2RBIRmXVjgUGpvPPOEWP\",\"object\":\"subscription\",\"application\":null,\"application_fee_percent\":null,\"automatic_tax\":{\"enabled\":false},\"billing_cycle_anchor\":1674980099,\"billing_thresholds\":null,\"cancel_at\":null,\"cancel_at_period_end\":false,\"canceled_at\":null,\"collection_method\":\"charge_automatically\",\"created\":1674980099,\"currency\":\"usd\",\"current_period_end\":1706516099,\"current_period_start\":1674980099,\"customer\":\"cus_NDN24cRV4JQOJH\",\"days_until_due\":null,\"default_payment_method\":null,\"default_source\":null,\"default_tax_rates\":[],\"description\":null,\"discount\":null,\"ended_at\":null,\"items\":{\"object\":\"list\",\"data\":[{\"id\":\"si_NG26BYMTszK87X\",\"object\":\"subscription_item\",\"billing_thresholds\":null,\"created\":1674980100,\"metadata\":[],\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"price\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"price\",\"active\":true,\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"custom_unit_amount\":null,\"livemode\":false,\"lookup_key\":null,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"recurring\":{\"aggregate_usage\":null,\"interval\":\"year\",\"interval_count\":1,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"tax_behavior\":\"unspecified\",\"tiers_mode\":null,\"transform_quantity\":null,\"type\":\"recurring\",\"unit_amount\":199900,\"unit_amount_decimal\":\"199900\"},\"quantity\":1,\"subscription\":\"sub_1MVW2RBIRmXVjgUGpvPPOEWP\",\"tax_rates\":[]}],\"has_more\":false,\"total_count\":1,\"url\":\"\\/v1\\/subscription_items?subscription=sub_1MVW2RBIRmXVjgUGpvPPOEWP\"},\"latest_invoice\":\"in_1MVW2RBIRmXVjgUGAf6CsDyr\",\"livemode\":false,\"metadata\":[],\"next_pending_invoice_item_invoice\":null,\"on_behalf_of\":null,\"pause_collection\":null,\"payment_settings\":{\"payment_method_options\":null,\"payment_method_types\":null,\"save_default_payment_method\":\"off\"},\"pending_invoice_item_interval\":null,\"pending_setup_intent\":null,\"pending_update\":null,\"plan\":{\"id\":\"plan_MteDxmBhgyMs0K\",\"object\":\"plan\",\"active\":true,\"aggregate_usage\":null,\"amount\":199900,\"amount_decimal\":\"199900\",\"billing_scheme\":\"per_unit\",\"created\":1669817135,\"currency\":\"usd\",\"interval\":\"year\",\"interval_count\":1,\"livemode\":false,\"metadata\":[],\"nickname\":null,\"product\":\"prod_MteDWoFXPJGKOk\",\"tiers_mode\":null,\"transform_usage\":null,\"trial_period_days\":null,\"usage_type\":\"licensed\"},\"quantity\":1,\"schedule\":null,\"start_date\":1674980099,\"status\":\"active\",\"test_clock\":null,\"transfer_data\":null,\"trial_end\":null,\"trial_start\":null}', 'cus_NDN24cRV4JQOJH', '2023-01-22 11:34:03', '2023-01-29 14:45:47', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'M4KgCyyrbZHTmYWYzTzCfKl9fVhuMm77urqFV9U4bAvooqUCD0usQAkbWgLo', '2023-01-29 15:44:53', 1, '2023-01-29 14:45:47', 120, 118, NULL, 0, NULL),
(121, 'Lisa Zambelli', NULL, 'lisazambelli@aol.com', 'lisazambelli', 'US', 1, 2, NULL, 0, '$2y$10$mZsSb8gNhHVQW7eYPIWgn.y2ScFULi5RzrXcDay/o7RTxcYfAtht6', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":1,\"plan_id\":\"62f8bab5e6912\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"5\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"1\",\"hide_branding\":\"0\",\"free_setup\":\"0\",\"free_support\":\"0\",\"recommended\":\"1\",\"is_watermark_enabled\":\"0\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 09:04:53\",\"updated_at\":\"2023-01-17 21:01:03\",\"is_vcard\":1,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-01-25', '2023-01-24', NULL, NULL, NULL, NULL, 'Rockaway', 'New Jersey', '07866', 'United States', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-24 02:42:39', '2023-01-24 02:44:13', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 120, NULL, 1, NULL),
(128, 'Md Mridul', NULL, 'mdmridul608@gmail.com', 'mdmridul608', 'BD', 1, 2, NULL, 0, '$2y$10$LU4GHBRHJ5yfotOUhXAmC.HTDb3ZHPh6IpHDBCvdDMc7G1LvXeN0C', NULL, NULL, '1', '366', '{\"id\":1,\"plan_type\":null,\"plan_id\":\"1\",\"plan_name\":\"Free\",\"plan_description\":\"Free\",\"is_free\":1,\"plan_price_monthly\":0,\"plan_price_yearly\":0,\"plan_price\":\"0\",\"discount_percentage\":0,\"validity\":\"366\",\"no_of_vcards\":\"2\",\"no_of_services\":999,\"no_of_galleries\":999,\"no_of_features\":999,\"no_of_payments\":999,\"personalized_link\":\"\",\"hide_branding\":\"0\",\"free_setup\":\"\",\"free_support\":\"\",\"recommended\":\"0\",\"is_watermark_enabled\":\"\",\"features\":\"[\\\"Up to 2 Shareable Digital Cards\\\",\\\"Two-Way Contact Sharing\\\",\\\"Unlimited Connections & Card Shares\\\",\\\"Free Ongoing Base Updates & Feature Adds\\\"]\",\"plans_type\":1,\"name\":\"Beta Tester\",\"slug\":\"beta-tester\",\"stripe_plan_id\":\"plan_N8aTRq6lwV1if7\",\"stripe_data\":\"{\\\"id\\\":\\\"plan_N8aTRq6lwV1if7\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_decimal\\\":\\\"0\\\",\\\"billing_scheme\\\":\\\"per_unit\\\",\\\"created\\\":1673262811,\\\"currency\\\":\\\"usd\\\",\\\"interval\\\":\\\"month\\\",\\\"interval_count\\\":1,\\\"livemode\\\":false,\\\"metadata\\\":[],\\\"nickname\\\":null,\\\"product\\\":\\\"prod_N8aTTFeGcJ5UKY\\\",\\\"tiers_mode\\\":null,\\\"transform_usage\\\":null,\\\"trial_period_days\\\":null,\\\"usage_type\\\":\\\"licensed\\\"}\",\"stripe_data_yearly\":\"{\\\"id\\\":\\\"plan_N8aTICI7b6KBup\\\",\\\"object\\\":\\\"plan\\\",\\\"active\\\":true,\\\"aggregate_usage\\\":null,\\\"amount\\\":0,\\\"amount_\",\"stripe_plan_id_yearly\":\"plan_N8aTICI7b6KBup\",\"paypal_plan_id\":null,\"paypal_plan_data\":null,\"cost\":null,\"status\":\"1\",\"shareable\":1,\"created_at\":\"2022-08-14 15:04:53\",\"updated_at\":\"2023-01-29 21:14:53\",\"is_vcard\":0,\"is_whatsapp_store\":0,\"is_email_signature\":0,\"is_qr_code\":0,\"is_yearly_plan\":1}', '2024-02-01', '2023-01-31', NULL, NULL, NULL, NULL, '', '', NULL, 'Bangladesh', NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, '2023-01-31 10:49:13', '2023-02-01 13:40:04', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'Share your info back with Md Mridul', 1, '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `history_card_downloads`
--
ALTER TABLE `history_card_downloads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `history_qr_downloads`
--
ALTER TABLE `history_qr_downloads`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `business_fields`
--
ALTER TABLE `business_fields`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=166;

--
-- AUTO_INCREMENT for table `custom_pages`
--
ALTER TABLE `custom_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `email_templates`
--
ALTER TABLE `email_templates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `history_card_browsing`
--
ALTER TABLE `history_card_browsing`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_card_downloads`
--
ALTER TABLE `history_card_downloads`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `history_qr_downloads`
--
ALTER TABLE `history_qr_downloads`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `marketing_materials`
--
ALTER TABLE `marketing_materials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=275;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tutorials`
--
ALTER TABLE `tutorials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
