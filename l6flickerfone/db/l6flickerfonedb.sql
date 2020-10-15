-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2020 at 09:16 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l6flickerfonedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accessories`
--

CREATE TABLE `accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `accessory_category_id` bigint(20) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessories`
--

INSERT INTO `accessories` (`id`, `accessory_category_id`, `brand_id`, `name`, `price`, `img`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'charging plug', '250', '1601460853_fd456406745d816a45cae554c788e754.jpg', '2020-09-30 05:14:13', '2020-09-30 05:14:13'),
(3, 1, 1, 'samsung power bank', '3500', '1601551731_c23685501622e754070fa3704340e17b.jpg', '2020-10-01 06:28:53', '2020-10-01 06:28:53'),
(4, 1, 3, 'infinix power bank', '2500', '1601551818_c23685501622e754070fa3704340e17b.jpg', '2020-10-01 06:30:19', '2020-10-01 06:30:19'),
(6, 1, 1, 'samsung latest charger', '1200', '1601551920_c0b6bec43a7ce173814b5a475e39c336.jpg', '2020-10-01 06:32:01', '2020-10-01 06:32:01'),
(7, 1, 3, 'Infinix latest charger', '1000', '1601551959_e3620ef195b1e615421b271a7b4d438c.jpg', '2020-10-01 06:32:39', '2020-10-01 06:32:39'),
(9, 1, 1, 'charging plug 1', '250', '1601460853_fd456406745d816a45cae554c788e754.jpg', '2020-09-30 05:14:13', '2020-09-30 05:14:13'),
(10, 1, 1, 'samsung power bank 1', '3500', '1601551731_c23685501622e754070fa3704340e17b.jpg', '2020-10-01 06:28:53', '2020-10-01 06:28:53'),
(11, 1, 3, 'infinix power bank 2', '2500', '1601551818_c23685501622e754070fa3704340e17b.jpg', '2020-10-01 06:30:19', '2020-10-01 06:30:19'),
(12, 1, 1, 'samsung latest charger 3', '1200', '1601551920_c0b6bec43a7ce173814b5a475e39c336.jpg', '2020-10-01 06:32:01', '2020-10-01 06:32:01'),
(13, 1, 3, 'Infinix latest charger 4', '1000', '1601551959_e3620ef195b1e615421b271a7b4d438c.jpg', '2020-10-01 06:32:39', '2020-10-01 06:32:39'),
(14, 1, 1, 'charging plug 6', '250', '1601460853_fd456406745d816a45cae554c788e754.jpg', '2020-09-30 05:14:13', '2020-09-30 05:14:13'),
(15, 1, 1, 'samsung power bank7', '3500', '1601551731_c23685501622e754070fa3704340e17b.jpg', '2020-10-01 06:28:53', '2020-10-01 06:28:53'),
(16, 1, 3, 'infinix power bank 8', '2500', '1601551818_c23685501622e754070fa3704340e17b.jpg', '2020-10-01 06:30:19', '2020-10-01 06:30:19'),
(17, 1, 1, 'samsung latest charger 9', '1200', '1601551920_c0b6bec43a7ce173814b5a475e39c336.jpg', '2020-10-01 06:32:01', '2020-10-01 06:32:01'),
(18, 1, 3, 'Infinix latest charger 10', '1000', '1601551959_e3620ef195b1e615421b271a7b4d438c.jpg', '2020-10-01 06:32:39', '2020-10-01 06:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `accessory_categories`
--

CREATE TABLE `accessory_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accessory_categories`
--

INSERT INTO `accessory_categories` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'charging', '2020-09-30 03:04:31', '2020-09-30 03:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `active_emails`
--

CREATE TABLE `active_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `active_emails`
--

INSERT INTO `active_emails` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\r\n<html>\r\n<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0\">\r\n	<link href=\"https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic\" rel=\"stylesheet\" type=\"text/css\">\r\n	<title>FlickerFone Email Template</title>\r\n	<style type=\"text/css\">/*Hotmail and Yahoo specific code*/\r\n\r\n.ReadMsgBody {\r\n	width: 100%;\r\n}\r\n.ExternalClass {\r\n	width: 100%;\r\n}\r\n.yshortcuts {\r\n	color: #ffffff;\r\n}\r\n.yshortcuts a span {\r\n	color: #ffffff;\r\n	border-bottom: none !important;\r\n	background: none !important;\r\n}\r\n/*Hotmail and Yahoo specific code*/\r\nbody {\r\n	-webkit-text-size-adjust: 100%;\r\n	-ms-text-size-adjust: 100%;\r\n	-webkit-font-smoothing: antialiased;\r\n	margin: 0 !important;\r\n	padding: 0 !important;\r\n	width: 100% !important;\r\n}\r\np {\r\n	margin: 0px !important;\r\n	padding: 0px !important;\r\n}\r\nth {\r\n	font-weight: normal !important;\r\n}\r\n.appleLinks a {\r\n	color: #e3e3f1 !important;\r\n	text-decoration: none !important;\r\n}\r\n.button-container {\r\n	margin: 0 auto !important;\r\n	width: 60% !important;\r\n}\r\n/* mouse over link title */\r\n.titletxt {\r\n	color: #616161;\r\n	text-decoration: none;\r\n}\r\n.titletxt:hover {\r\n	color: #545454;\r\n	text-decoration: none;\r\n}\r\n/* mouse over link cta */\r\n/*-----Mobile specific code------*/\r\n @media only screen and (max-width:799px) {\r\nbody {\r\n	width: auto !important;\r\n}\r\ntable[class=\"main\"] {\r\n	max-width: 480px !important;\r\n	width: 100% !important;\r\n}\r\nimg[class=\"img1\"] {\r\n	max-width: 150px !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"img2\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"banner\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"spacerimg\"] {\r\n	max-width: 0px !important;\r\n	width: 0px !important;\r\n	display: none !important;\r\n}\r\nth[class=\"stack1\"] {\r\n	display: block !important;\r\n	width: 100% !important;\r\n	height: auto !important;\r\n	text-align: center !important;\r\n}\r\nth[class=\"stack2\"] {\r\n	display: block !important;\r\n	width: 100% !important;\r\n	height: auto !important;\r\n	margin-top: 15px !important;\r\n}\r\nth[class=\"sphide\"] {\r\n	display: none !important;\r\n	width: 0px;\r\n}\r\ntd[class=\"textcntr\"] {\r\n	text-align: center !important;\r\n	padding-left: 10px;\r\n	padding-right: 10px;\r\n}\r\ntd[class=\"button\"] {\r\n	max-width: 180px !important;\r\n	width: 180px !important;\r\n	display: block;\r\n	margin: 0 auto;\r\n	background-color: #faad47;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\ntd[class=\"hspace\"] {\r\n	height: 25px !important;\r\n}\r\n}\r\n @media only screen and (max-width: 479px) {\r\nbody {\r\n	width: auto !important;\r\n}\r\ntable[class=\"main\"] {\r\n	max-width: 320px !important;\r\n	width: 100% !important;\r\n}\r\nimg[class=\"img1\"] {\r\n	max-width: 150px !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nth[class=\"sphide22\"] {\r\n	display: none !important;\r\n	width: 0px;\r\n}\r\ntd[class=\"titlefsize\"] {\r\n	font-size: 20px !important;\r\n	text-align: center !important;\r\n}\r\ntd[class=\"wspacw\"] {\r\n	width: 6px !important;\r\n}\r\nth[class=\"midspacw\"] {\r\n	width: 8px !important;\r\n}\r\ntd[class=\"textcntr\"] {\r\n	text-align: center !important;\r\n}\r\ntable[class=\"logo_left\"] {\r\n	max-width: 100%;\r\n	width: 100% !important;\r\n	height: auto;\r\n	margin: 0 auto;\r\n	text-align: center !important;\r\n}\r\nimg[class=\"logo_center\"] {\r\n	display: inherit !important;\r\n}\r\ntd[class=\"cta1\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	background-color: #ffffff;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\ntd[class=\"cta\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	background-color: #faad47;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\nimg[class=\"spacerimg\"] {\r\n	max-width: 0px !important;\r\n	width: 0px !important;\r\n	display: none !important;\r\n}\r\n}\r\n/*-----Mobile specific code end------*/\r\n	</style>\r\n</head>\r\n<body bgcolor=\"#F7F7F7\" style=\"margin: 0px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-font-smoothing: antialiased;padding: 0 !important;width: 100% !important;\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#F7F7F7\">\r\n<tbody>\r\n<tr>\r\n<td align=\"center\">\r\n<table class=\"main\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><span style=\"color: #f8f8f8;\"><span style=\"font-family: Lato, Arial, sans-serif, \'Trebuchet MS\';\"><span style=\"font-size: 12px; line-height: 15px;\">Welcome to the Educents Community. Discover New Ways to Keep Kids Excited About Learning.</span></span></span></td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td bgcolor=\"#FFFFFF\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td width=\"28\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td height=\"28\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\">\r\n<table class=\"logo_left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td align=\"center\"><span class=\"sg-image\"> <a href=\"http://www.educents.com/?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img class=\"logo_center\" style=\"width: 110px; height: 60px;\" src=\"https://flickerfone.com/assets/images/logo-cropped.jpg\" alt=\"logo\" width=\"110\" height=\"60\" border=\"0\" /> </a> </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 18px; color: #616161; text-align: center;\"><a style=\"color: #616161; text-decoration: none;\" target=\"_blank\">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style=\"color: #616161; text-decoration: none;\" href=\"/NewMobilePhones\" target=\"_blank\">New Products</a></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td width=\"28\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\"><span class=\"sg-image\"> <a href=\"/Admin/Active/1/\" target=\"_blank\"><img class=\"banner\" style=\"width: 100%; height: 245px;\" src=\"https://flickerfone.com/assets/images/b1.jpg\" alt=\"banner\" height=\"245\" border=\"0\" /></a> </span></td>\r\n</tr>\r\n<tr>\r\n<td bgcolor=\"#FFFFFF\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"wspacw\" width=\"35\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 26px; line-height: 32px; color: #17b9ac; text-align: center; font-weight: bold;\">Welcome to FlickerFone</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 32px; color: #000000; text-align: center; font-weight: bold;\">Your Account has been activated</td>\r\n</tr>\r\n<tr>\r\n<td height=\"12\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 22px; line-height: 26px; color: #616161; text-align: center;\">Save an <span style=\"font-size: 24px; font-weight: bold;\">EXTRA 15% off</span>&nbsp;on your first purchase!</td>\r\n</tr>\r\n<tr>\r\n<td height=\"5\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 24px; color: #616161; text-align: center;\">Promo code: <span style=\"font-size: 14px; font-weight: bold;\">SAVE15</span></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"center\">\r\n<table width=\"180\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"cta1\" style=\"border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; border: 1px solid #faad47;\" align=\"center\" bgcolor=\"#ffffff\" width=\"180\" height=\"40\"><a style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 38px; color: #faad47; text-align: center; text-decoration: none !important; padding-bottom: 1px; width: 100%; font-weight: bold; display: inline-block;\" href=\"/NewMobilePhones\" target=\"_blank\"> <span style=\"color: #faad47;\">SHOP NOW</span> </a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td height=\"5\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td class=\"wspacw\" width=\"35\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td width=\"28\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"textcntr\" style=\"font-family: Lato, Arial, sans-serif, \'Trebuchet MS\'; font-size: 15px; line-height: 25px; color: #616161; font-weight: bold; text-align: center;\">Follow us for our latest deals, tips and advice&nbsp;</td>\r\n<td height=\"36\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"center\">\r\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><span class=\"sg-image\"> <a href=\"https://www.facebook.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/710a18cd99ba36db34412b55ff649c56add28b997b1c1b9e03ebf4f420874acdaade97c0c513dec89e5756b08854791b3e853867ed2ea918fdf19b3e9487b783.png\" alt=\"facebook\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"https://twitter.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/b74a9cd00a7456db4b0d8eaa72cd27c3280272e378aaf57b24534a8af463984d6d27b1ea9a821397b0e1a7fada0335b0c7ff578948d5d9868630a522cf193ac8.png\" alt=\"twitter\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"https://www.pinterest.com/educents/?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/9ded3ac16e9f24024f8fa11ebea7d3c56ddddeb08c727025ca5f91427ece25ad1256dcf2bf6ce80dd006d0706f20353fa6141cbe61c868181dd9850aa223791a.png\" alt=\"pinterest\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"http://instagram.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 21px; height: 21px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/fdd5cd004b13fe1f2c8869a9530f63eaf64c803710b6d3e6000ce70a6a4726d51b2f65a975a59615983fd092f76b76f37950c28df3e69e5de2cd4615064f8955.png\" alt=\"instagram\" width=\"21\" height=\"21\" border=\"0\" /> </a> </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td height=\"36\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Helvetica, Arial, sans-serif, Trebuchet MS; font-size: 12px; line-height: 18px; color: #616161; text-align: center;\"><em>You&rsquo;re receiving this email because you&rsquo;ve registered on <a style=\"color: #616161; text-decoration: underline;\" target=\"_blank\">Flickerfone.com</a>.<br /> <br /> I don\'t know flickerfone address</em></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td width=\"28\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</body>\r\n</html>', NULL, '2020-10-13 01:08:42');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'adminname', 'admin@gmail.com', NULL, '$2y$10$/NsFMW/lXzRn7T26I0q2UuXXeNbXeXJqML1rMZwUhRZwYMTd2trDm', NULL, '2020-07-22 18:05:30', '2020-07-22 14:15:42');

-- --------------------------------------------------------

--
-- Table structure for table `block_emails`
--

CREATE TABLE `block_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `block_emails`
--

INSERT INTO `block_emails` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\r\n<html>\r\n<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0\">\r\n	<link href=\"https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic\" rel=\"stylesheet\" type=\"text/css\">\r\n	<title>FlickerFone Email Template</title>\r\n	<style type=\"text/css\">/*Hotmail and Yahoo specific code*/\r\n\r\n.ReadMsgBody {\r\n	width: 100%;\r\n}\r\n.ExternalClass {\r\n	width: 100%;\r\n}\r\n.yshortcuts {\r\n	color: #ffffff;\r\n}\r\n.yshortcuts a span {\r\n	color: #ffffff;\r\n	border-bottom: none !important;\r\n	background: none !important;\r\n}\r\n/*Hotmail and Yahoo specific code*/\r\nbody {\r\n	-webkit-text-size-adjust: 100%;\r\n	-ms-text-size-adjust: 100%;\r\n	-webkit-font-smoothing: antialiased;\r\n	margin: 0 !important;\r\n	padding: 0 !important;\r\n	width: 100% !important;\r\n}\r\np {\r\n	margin: 0px !important;\r\n	padding: 0px !important;\r\n}\r\nth {\r\n	font-weight: normal !important;\r\n}\r\n.appleLinks a {\r\n	color: #e3e3f1 !important;\r\n	text-decoration: none !important;\r\n}\r\n.button-container {\r\n	margin: 0 auto !important;\r\n	width: 60% !important;\r\n}\r\n/* mouse over link title */\r\n.titletxt {\r\n	color: #616161;\r\n	text-decoration: none;\r\n}\r\n.titletxt:hover {\r\n	color: #545454;\r\n	text-decoration: none;\r\n}\r\n/* mouse over link cta */\r\n/*-----Mobile specific code------*/\r\n @media only screen and (max-width:799px) {\r\nbody {\r\n	width: auto !important;\r\n}\r\ntable[class=\"main\"] {\r\n	max-width: 480px !important;\r\n	width: 100% !important;\r\n}\r\nimg[class=\"img1\"] {\r\n	max-width: 150px !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"img2\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"banner\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"spacerimg\"] {\r\n	max-width: 0px !important;\r\n	width: 0px !important;\r\n	display: none !important;\r\n}\r\nth[class=\"stack1\"] {\r\n	display: block !important;\r\n	width: 100% !important;\r\n	height: auto !important;\r\n	text-align: center !important;\r\n}\r\nth[class=\"stack2\"] {\r\n	display: block !important;\r\n	width: 100% !important;\r\n	height: auto !important;\r\n	margin-top: 15px !important;\r\n}\r\nth[class=\"sphide\"] {\r\n	display: none !important;\r\n	width: 0px;\r\n}\r\ntd[class=\"textcntr\"] {\r\n	text-align: center !important;\r\n	padding-left: 10px;\r\n	padding-right: 10px;\r\n}\r\ntd[class=\"button\"] {\r\n	max-width: 180px !important;\r\n	width: 180px !important;\r\n	display: block;\r\n	margin: 0 auto;\r\n	background-color: #faad47;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\ntd[class=\"hspace\"] {\r\n	height: 25px !important;\r\n}\r\n}\r\n @media only screen and (max-width: 479px) {\r\nbody {\r\n	width: auto !important;\r\n}\r\ntable[class=\"main\"] {\r\n	max-width: 320px !important;\r\n	width: 100% !important;\r\n}\r\nimg[class=\"img1\"] {\r\n	max-width: 150px !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nth[class=\"sphide22\"] {\r\n	display: none !important;\r\n	width: 0px;\r\n}\r\ntd[class=\"titlefsize\"] {\r\n	font-size: 20px !important;\r\n	text-align: center !important;\r\n}\r\ntd[class=\"wspacw\"] {\r\n	width: 6px !important;\r\n}\r\nth[class=\"midspacw\"] {\r\n	width: 8px !important;\r\n}\r\ntd[class=\"textcntr\"] {\r\n	text-align: center !important;\r\n}\r\ntable[class=\"logo_left\"] {\r\n	max-width: 100%;\r\n	width: 100% !important;\r\n	height: auto;\r\n	margin: 0 auto;\r\n	text-align: center !important;\r\n}\r\nimg[class=\"logo_center\"] {\r\n	display: inherit !important;\r\n}\r\ntd[class=\"cta1\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	background-color: #ffffff;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\ntd[class=\"cta\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	background-color: #faad47;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\nimg[class=\"spacerimg\"] {\r\n	max-width: 0px !important;\r\n	width: 0px !important;\r\n	display: none !important;\r\n}\r\n}\r\n/*-----Mobile specific code end------*/\r\n	</style>\r\n</head>\r\n<body bgcolor=\"#F7F7F7\" style=\"margin: 0px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-font-smoothing: antialiased;padding: 0 !important;width: 100% !important;\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#F7F7F7\">\r\n<tbody>\r\n<tr>\r\n<td align=\"center\">\r\n<table class=\"main\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><span style=\"color: #f8f8f8;\"><span style=\"font-family: Lato, Arial, sans-serif, \'Trebuchet MS\';\"><span style=\"font-size: 12px; line-height: 15px;\">Welcome to the Educents Community. Discover New Ways to Keep Kids Excited About Learning.</span></span></span></td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td bgcolor=\"#FFFFFF\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td width=\"28\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td height=\"28\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\">\r\n<table class=\"logo_left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td align=\"center\"><span class=\"sg-image\"> <a href=\"http://www.educents.com/?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img class=\"logo_center\" style=\"width: 110px; height: 60px;\" src=\"https://flickerfone.com/assets/images/logo-cropped.jpg\" alt=\"logo\" width=\"110\" height=\"60\" border=\"0\" /> </a> </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 18px; color: #616161; text-align: center;\"><a style=\"color: #616161; text-decoration: none;\" target=\"_blank\">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style=\"color: #616161; text-decoration: none;\" href=\"/NewMobilePhones\" target=\"_blank\">New Products</a></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td width=\"28\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\"><span class=\"sg-image\"> <a href=\"/Admin/Block/1/\" target=\"_blank\"><img class=\"banner\" style=\"width: 100%; height: 245px;\" src=\"https://flickerfone.com/assets/images/b1.jpg\" alt=\"banner\" height=\"245\" border=\"0\" /></a> </span></td>\r\n</tr>\r\n<tr>\r\n<td bgcolor=\"#FFFFFF\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"wspacw\" width=\"35\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 26px; line-height: 32px; color: #17b9ac; text-align: center; font-weight: bold;\">Sorry To Say !</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 32px; color: #000000; text-align: center; font-weight: bold;\">Your Account has been blocked</td>\r\n</tr>\r\n<tr>\r\n<td height=\"12\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 22px; line-height: 26px; color: #616161; text-align: center;\">Save an <span style=\"font-size: 24px; font-weight: bold;\">EXTRA 15% off</span>&nbsp;on your first purchase!</td>\r\n</tr>\r\n<tr>\r\n<td height=\"5\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 24px; color: #616161; text-align: center;\">Promo code: <span style=\"font-size: 14px; font-weight: bold;\">SAVE15</span></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"center\">\r\n<table width=\"180\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"cta1\" style=\"border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; border: 1px solid #faad47;\" align=\"center\" bgcolor=\"#ffffff\" width=\"180\" height=\"40\"><a style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 38px; color: #faad47; text-align: center; text-decoration: none !important; padding-bottom: 1px; width: 100%; font-weight: bold; display: inline-block;\" href=\"/NewMobilePhones\" target=\"_blank\"> <span style=\"color: #faad47;\">SHOP NOW</span> </a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td height=\"5\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td class=\"wspacw\" width=\"35\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td width=\"28\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"textcntr\" style=\"font-family: Lato, Arial, sans-serif, \'Trebuchet MS\'; font-size: 15px; line-height: 25px; color: #616161; font-weight: bold; text-align: center;\">Follow us for our latest deals, tips and advice&nbsp;</td>\r\n<td height=\"36\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"center\">\r\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><span class=\"sg-image\"> <a href=\"https://www.facebook.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/710a18cd99ba36db34412b55ff649c56add28b997b1c1b9e03ebf4f420874acdaade97c0c513dec89e5756b08854791b3e853867ed2ea918fdf19b3e9487b783.png\" alt=\"facebook\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"https://twitter.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/b74a9cd00a7456db4b0d8eaa72cd27c3280272e378aaf57b24534a8af463984d6d27b1ea9a821397b0e1a7fada0335b0c7ff578948d5d9868630a522cf193ac8.png\" alt=\"twitter\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"https://www.pinterest.com/educents/?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/9ded3ac16e9f24024f8fa11ebea7d3c56ddddeb08c727025ca5f91427ece25ad1256dcf2bf6ce80dd006d0706f20353fa6141cbe61c868181dd9850aa223791a.png\" alt=\"pinterest\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"http://instagram.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 21px; height: 21px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/fdd5cd004b13fe1f2c8869a9530f63eaf64c803710b6d3e6000ce70a6a4726d51b2f65a975a59615983fd092f76b76f37950c28df3e69e5de2cd4615064f8955.png\" alt=\"instagram\" width=\"21\" height=\"21\" border=\"0\" /> </a> </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td height=\"36\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Helvetica, Arial, sans-serif, Trebuchet MS; font-size: 12px; line-height: 18px; color: #616161; text-align: center;\"><em>You&rsquo;re receiving this email because you&rsquo;ve registered on <a style=\"color: #616161; text-decoration: underline;\" target=\"_blank\">Flickerfone.com</a>.<br /> <br /> I don\'t know flickerfone address</em></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td width=\"28\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</body>\r\n</html>', NULL, '2020-10-13 01:11:24');

-- --------------------------------------------------------

--
-- Table structure for table `blog_sliders`
--

CREATE TABLE `blog_sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_sliders`
--

INSERT INTO `blog_sliders` (`id`, `detail`, `img`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .', 'admin/images/blogslider/8Z2jdubZ3HmRfYw2TQiWy3URmSpZdRyRq7AzbXvR.jpeg', 1, NULL, '2020-09-16 04:41:46'),
(2, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .', 'admin/images/blogslider/8Z2jdubZ3HmRfYw2TQiWy3URmSpZdRyRq7AzbXvR.jpeg', 1, NULL, '2020-09-16 04:41:46'),
(3, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .', 'admin/images/blogslider/8Z2jdubZ3HmRfYw2TQiWy3URmSpZdRyRq7AzbXvR.jpeg', 0, NULL, '2020-09-16 04:49:55'),
(4, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .', 'admin/images/blogslider/8Z2jdubZ3HmRfYw2TQiWy3URmSpZdRyRq7AzbXvR.jpeg', 0, NULL, '2020-09-16 04:49:55'),
(5, 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore, placeat architecto molestias incidunt quas rerum repellat iste doloremque asperiores voluptatibus .', 'admin/images/blogslider/8Z2jdubZ3HmRfYw2TQiWy3URmSpZdRyRq7AzbXvR.jpeg', 1, NULL, '2020-09-16 04:41:46');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'samsung', '2020-07-25 05:12:43', '2020-08-05 00:36:06'),
(3, 'infinix', '2020-08-05 00:35:13', '2020-08-05 00:35:13'),
(5, 'oppo', '2020-10-09 02:51:26', '2020-10-09 02:51:26'),
(6, 'iphone', '2020-10-09 02:51:39', '2020-10-09 02:51:39'),
(7, 'realme', '2020-10-09 02:51:49', '2020-10-09 02:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `buy_new_sells`
--

CREATE TABLE `buy_new_sells` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_new_sells`
--

INSERT INTO `buy_new_sells` (`id`, `title`, `detail`, `img`, `created_at`, `updated_at`) VALUES
(1, 'buy', 'Search through our listings and buy used phones in Pakistan conveniently with our product grading system.', 'admin/images/buynewsell/M6fc32bff4a57196104b04b3f741654ce1598033653545.png', NULL, '2020-09-16 02:20:05'),
(2, 'new', 'Need information on your favorite mobile phone? Have a look at our comprehensive description, image galleries & comparison of your desired product.', 'admin/images/buynewsell/LUPF8Dbcn6JwgXd7UOEME8zdlN7P9Hr3YEvFQDiB.png', NULL, '2020-09-16 02:20:26'),
(3, 'sell', 'Want to sell your product? No worries, we got you covered. Just fill out our simple and easy to use form and get your product listed to find a potential buyer.', 'admin/images/buynewsell/Mb84a2f8b3bcf9483a96c33dd67472b071598033616752.png', NULL, '2020-09-16 02:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `description`, `img`, `created_at`, `updated_at`) VALUES
(1, 'mobile', 'this is description', NULL, '2020-07-24 02:34:43', '2020-08-05 00:37:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `metas`
--

CREATE TABLE `metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `metas`
--

INSERT INTO `metas` (`id`, `page_id`, `name`, `title`, `content`, `created_at`, `updated_at`) VALUES
(10, 1, NULL, 'contact us page', '<p>this is content</p>', '2020-08-04 02:19:38', '2020-08-04 02:19:38'),
(11, 2, NULL, 'about us page', '<p>this is conttent again</p>', '2020-08-04 02:20:10', '2020-08-04 02:26:31');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_22_102410_create_roles_table', 1),
(5, '2020_07_24_064351_create_categories_table', 2),
(6, '2020_07_25_081518_create_brands_table', 3),
(7, '2020_07_30_053714_create_pages_table', 4),
(8, '2020_08_04_053818_create_pages_table', 5),
(9, '2020_08_15_055034_variations', 6),
(10, '2020_09_16_061723_create_buy_new_sells_table', 7),
(11, '2020_09_16_075608_create_blog_sliders_table', 8),
(12, '2020_09_23_051308_create_sell_products_table', 9),
(13, '2020_09_23_065148_sell_products', 10),
(14, '2020_09_30_072722_create_accessories_table', 11),
(15, '2020_09_30_073927_create_accessory_categories_table', 12),
(16, '2020_09_30_115547_create_sell_accessories_table', 13),
(17, '2020_09_30_120524_add_column_sell_accessories', 14),
(18, '2020_10_03_091124_create_product_opinions_table', 15),
(19, '2020_10_05_053730_create_opinion_replies_table', 16),
(20, '2020_10_12_120108_create_welcome_emails_table', 17),
(21, '2020_10_12_120137_create_active_emails_table', 17),
(22, '2020_10_12_120152_create_block_emails_table', 17),
(23, '2020_10_13_054009_active_emails', 18),
(24, '2020_10_13_054030_welcome_emails', 18),
(25, '2020_10_13_054105_block_emails', 18);

-- --------------------------------------------------------

--
-- Table structure for table `opinion_replies`
--

CREATE TABLE `opinion_replies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `opinion_id` bigint(20) NOT NULL,
  `nick_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `opinion_replies`
--

INSERT INTO `opinion_replies` (`id`, `user_id`, `opinion_id`, `nick_name`, `reply`, `created_at`, `updated_at`) VALUES
(1, 25, 1, 'test', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', '2020-10-05 01:53:58', '2020-10-05 01:53:58'),
(8, 25, 4, 'sdfsd', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, co', '2020-10-05 02:12:04', '2020-10-05 02:12:04'),
(19, 29, 4, 'test', 'no login', '2020-10-08 00:31:20', '2020-10-08 00:31:20'),
(20, 43, 7, 'ws', 'reply to this', '2020-10-12 02:31:29', '2020-10-12 02:31:29'),
(21, 43, 19, 'sa', 'reply to this opinion', '2020-10-12 02:37:12', '2020-10-12 02:37:12'),
(22, 43, 19, 'res', 'second reply', '2020-10-12 02:37:49', '2020-10-12 02:37:49');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Contact Us', '2020-08-04 00:59:34', '2020-08-04 01:10:58'),
(2, 'About Us', '2020-08-04 01:10:02', '2020-08-04 01:10:02');

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
('testb@gmail.com', '$2y$10$PnK54.nSbs82c/dsW1y3S.yoaQcaFRdEBirBRKZoT4FsK7M8Mg3gi', '2020-09-19 00:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `price_calculator_products`
--

CREATE TABLE `price_calculator_products` (
  `id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `minor_dent_scratch` varchar(255) NOT NULL DEFAULT '0',
  `major_dent_scratch` varchar(255) NOT NULL DEFAULT '0',
  `original_accessories_available` varchar(255) NOT NULL DEFAULT '0',
  `screen_is_cracked` varchar(255) NOT NULL DEFAULT '0',
  `device_box_available` varchar(255) NOT NULL DEFAULT '0',
  `device_battery_status` varchar(255) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price_calculator_products`
--

INSERT INTO `price_calculator_products` (`id`, `code`, `name`, `image`, `category_id`, `brand_id`, `minor_dent_scratch`, `major_dent_scratch`, `original_accessories_available`, `screen_is_cracked`, `device_box_available`, `device_battery_status`, `created_at`, `updated_at`) VALUES
(4, '20202', 'samsung 7 plus', '1601102868_iphoneX.png', 1, 1, '1500', '2500', '1500', '2500', '500', '1500', '2020-09-22 06:01:29', '2020-09-26 01:47:50'),
(5, NULL, 'dsfs', '1602230382_iphone7.png', 1, 5, '4', '4', '4', '3', '5', '6', '2020-10-09 02:59:42', '2020-10-09 02:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `price_variations`
--

CREATE TABLE `price_variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price_variations`
--

INSERT INTO `price_variations` (`id`, `product_id`, `color`, `storage`, `price`, `created_at`, `updated_at`) VALUES
(14, '4', 'blue', '32gb', '45000', '2020-09-26 01:47:50', '2020-09-26 01:47:50'),
(15, '4', 'blue', '64gb', '55000', '2020-09-26 01:47:50', '2020-09-26 01:47:50'),
(16, '4', 'yellow', '128gb', '75500', '2020-09-26 01:47:50', '2020-09-26 01:47:50'),
(17, '5', 'blue', '32gb', '45000', '2020-10-09 03:00:27', '2020-10-09 03:00:27'),
(18, '5', 'pink', '64gb', '75500', '2020-10-09 03:00:27', '2020-10-09 03:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `product_opinions`
--

CREATE TABLE `product_opinions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `nick_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reply` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_opinions`
--

INSERT INTO `product_opinions` (`id`, `user_id`, `product_id`, `nick_name`, `comment`, `reply`, `created_at`, `updated_at`) VALUES
(1, '25', 11, 'this ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).1', NULL, '2020-10-03 05:03:46', '2020-10-03 05:03:46'),
(4, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).2', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(5, '25', 11, 'this ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).3', NULL, '2020-10-03 05:03:46', '2020-10-03 05:03:46'),
(6, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).4', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(8, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).6', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(9, '25', 11, 'this ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).7', NULL, '2020-10-03 05:03:46', '2020-10-03 05:03:46'),
(10, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).8', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(11, '25', 11, 'this ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)9', NULL, '2020-10-03 05:03:46', '2020-10-03 05:03:46'),
(12, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).10', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(14, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).12', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(15, '25', 11, 'this ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).13', NULL, '2020-10-03 05:03:46', '2020-10-03 05:03:46'),
(16, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).14', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(17, '25', 11, 'this ', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)15', NULL, '2020-10-03 05:03:46', '2020-10-03 05:03:46'),
(18, '25', 11, 'qwerty', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).16', NULL, '2020-10-03 06:00:50', '2020-10-03 06:00:50'),
(19, '43', 33, 'wa', 'this is opinionn of the product', NULL, '2020-10-12 02:36:37', '2020-10-12 02:36:37');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sell_accessories`
--

CREATE TABLE `sell_accessories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `accessory_category_id` bigint(20) DEFAULT NULL,
  `brand_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_accessories`
--

INSERT INTO `sell_accessories` (`id`, `user_id`, `accessory_category_id`, `brand_id`, `name`, `price`, `city`, `phone`, `img`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `detail`, `created_at`, `updated_at`) VALUES
(1, 25, 1, 1, 'test', '666', 'Lahore', '03051449423', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-09-30 07:22:15', '2020-09-30 07:22:15'),
(2, 25, 1, 1, 'test3', '1500', 'Faisalabad', '03051449423', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-09-30 07:22:15', '2020-09-30 07:22:15'),
(3, 25, 1, 1, 'test2', '1500', 'Faisalabad', '03051449423', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-09-30 07:22:15', '2020-09-30 07:22:15'),
(4, 25, 1, 3, 'test4', '1800', 'Faisalabad', '03051449423', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-09-30 07:22:15', '2020-09-30 07:22:15'),
(5, 25, 1, 3, 'test5', '600', 'Gujrat', '03051449423', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-09-30 07:22:15', '2020-09-30 07:22:15'),
(6, 25, 1, 3, 'test6', '1500', 'Gujrat', '03051449423', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-09-30 07:22:15', '2020-09-30 07:22:15'),
(12, 25, 1, 1, 'testagain', '1200', 'Bahawalpur', '03013435656', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-10-02 07:05:11', '2020-10-02 07:05:11'),
(14, 25, 1, 1, 'power bank', '1500', 'Bannu district|Bannu', '03013435656', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-10-07 23:55:59', '2020-10-07 23:55:59'),
(15, 29, NULL, 3, NULL, '1500', 'Adezai', '03015643789', '1601468535_fd456406745d816a45cae554c788e754.jpg', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-10-08 02:42:24', '2020-10-08 02:42:24'),
(16, 25, NULL, 6, NULL, '1500', 'Bannu district|Bannu', '03013435656', '1602308529_89f7223010c05c784156d05f5e705a32.png', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-10-10 00:42:09', '2020-10-10 00:42:09'),
(17, 43, NULL, 7, NULL, '800', 'Diwana', '03234567890', '1602486349_0be41d20bf0e0817a01c98575fd0e1f3.png', '0', '0', '0', '0', '0', '0', '0', NULL, '2020-10-12 02:05:50', '2020-10-12 02:05:50'),
(18, 25, NULL, 3, NULL, '2500', 'Ayubia', '03051449678', '1602586989_1026ae1042d5350779f203ad082b6ec0.png', '1602586987_8c67e3c01d95ccf586ec5f8f48742628.png', '1602586987_08e019b4f2e4c6b9845e0dfb69c4dd31.png', '1602586987_b2dd48ff3e52d0796675693d08fb192e.png', '1602586988_1026ae1042d5350779f203ad082b6ec0.png', '1602586988_e868aef2fb3b2f6bfc367362e445a131.png', '1602586988_7bfa6374ba9c05d491ea5f26813db25d.png', '1602586988_9f4356e130e607f26ab445c5d9c4b190.png', NULL, '2020-10-13 06:03:09', '2020-10-13 06:03:09'),
(19, 25, NULL, 1, NULL, '1190', 'Daska', '03013435123', '1602587137_1026ae1042d5350779f203ad082b6ec0.png', '', '', '', '', '', '', '', NULL, '2020-10-13 06:05:38', '2020-10-13 06:05:38'),
(20, 25, NULL, 1, NULL, '1190', 'Daska', '03013435123', '1602587305_1026ae1042d5350779f203ad082b6ec0.png', '', '', '', '', '', '', '', NULL, '2020-10-13 06:08:25', '2020-10-13 06:08:25'),
(21, 25, NULL, 1, NULL, '1190', 'Daska', '03013435123', '1602587408_1026ae1042d5350779f203ad082b6ec0.png', '', '', '', '', '', '', '', NULL, '2020-10-13 06:10:08', '2020-10-13 06:10:08');

-- --------------------------------------------------------

--
-- Table structure for table `sell_products`
--

CREATE TABLE `sell_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `minor_dent_scratch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_dent_scratch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_accessories_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen_is_cracked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_box_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_battery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `device_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img5` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img6` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img7` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img8` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img9` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img10` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_products`
--

INSERT INTO `sell_products` (`id`, `user_id`, `category_id`, `brand_id`, `model`, `color`, `price`, `minor_dent_scratch`, `major_dent_scratch`, `original_accessories_available`, `screen_is_cracked`, `device_box_available`, `device_battery_status`, `status`, `device_status`, `pta`, `city`, `phone`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `detail`, `created_at`, `updated_at`) VALUES
(23, 25, '1', '1', 'samsung new 7 plus', 'green', 45500, 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'Lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-25 02:18:16', '2020-09-25 02:18:16'),
(24, 25, '1', '3', 'infinix new 8 plus 1', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(25, 25, '1', '1', 'samsung new 8 plus 2', 'golden', 25500, 'yes', 'yes', 'no', 'no', 'no', '80', '0', 'Fair', 'approved', 'gujrat', '03013435656', '1601373847_1026ae1042d5350779f203ad082b6ec0.png', '1601373848_9f4356e130e607f26ab445c5d9c4b190.png', '1601373848_8c67e3c01d95ccf586ec5f8f48742628.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-29 05:04:08', '2020-09-29 05:04:08'),
(30, 25, '1', '1', 'samsung new 7 plus 1', 'green', 45500, 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'Lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-25 02:18:16', '2020-09-25 02:18:16'),
(31, 25, '1', '3', 'infinix new 8 plus 3', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(32, 25, '1', '3', 'infinix new 8 plus 4', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(33, 25, '1', '1', 'samsung new 8 plus 5', 'golden', 25500, 'yes', 'yes', 'no', 'no', 'no', '80', '0', 'Fair', 'approved', 'gujrat', '03013435656', '1601373847_1026ae1042d5350779f203ad082b6ec0.png', '1601373848_9f4356e130e607f26ab445c5d9c4b190.png', '1601373848_8c67e3c01d95ccf586ec5f8f48742628.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-29 05:04:08', '2020-09-29 05:04:08'),
(35, 25, '1', '1', 'samsung new 7 plus 3', 'green', 45500, 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'Lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-25 02:18:16', '2020-09-25 02:18:16'),
(36, 25, '1', '3', 'infinix new 8 plus', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(37, 25, '1', '1', 'samsung new 8 plus 98', 'golden', 25500, 'yes', 'yes', 'no', 'no', 'no', '80', '0', 'Fair', 'approved', 'gujrat', '03013435656', '1601373847_1026ae1042d5350779f203ad082b6ec0.png', '1601373848_9f4356e130e607f26ab445c5d9c4b190.png', '1601373848_8c67e3c01d95ccf586ec5f8f48742628.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-29 05:04:08', '2020-09-29 05:04:08'),
(38, 25, '1', '3', 'infinix new 8 plus 2', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(39, 25, '1', '1', 'samsung new 8 plus 6', 'golden', 25500, 'yes', 'yes', 'no', 'no', 'no', '80', '0', 'Fair', 'approved', 'gujrat', '03013435656', '1601373847_1026ae1042d5350779f203ad082b6ec0.png', '1601373848_9f4356e130e607f26ab445c5d9c4b190.png', '1601373848_8c67e3c01d95ccf586ec5f8f48742628.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-29 05:04:08', '2020-09-29 05:04:08'),
(40, 25, '1', '1', 'samsung new 7 plus 3', 'green', 45500, 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'Lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-25 02:18:16', '2020-09-25 02:18:16'),
(41, 25, '1', '3', 'infinix new 8 plus 7', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(42, 25, '1', '1', 'samsung new 7 plus 7', 'green', 45500, 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'Lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-25 02:18:16', '2020-09-25 02:18:16'),
(43, 25, '1', '3', 'infinix new 8 plus', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(44, 25, '1', '1', 'samsung new 8 plus', 'golden', 25500, 'yes', 'yes', 'no', 'no', 'no', '80', '0', 'Fair', 'approved', 'gujrat', '03013435656', '1601373847_1026ae1042d5350779f203ad082b6ec0.png', '1601373848_9f4356e130e607f26ab445c5d9c4b190.png', '1601373848_8c67e3c01d95ccf586ec5f8f48742628.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-29 05:04:08', '2020-09-29 05:04:08'),
(45, 25, '1', '1', 'samsung new 7 plus', 'green', 45500, 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'Lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-25 02:18:16', '2020-09-25 02:18:16'),
(46, 25, '1', '3', 'infinix new 8 plus t', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(47, 25, '1', '1', 'samsung new 8 plus 67', 'golden', 25500, 'yes', 'yes', 'no', 'no', 'no', '80', '0', 'Fair', 'approved', 'gujrat', '03013435656', '1601373847_1026ae1042d5350779f203ad082b6ec0.png', '1601373848_9f4356e130e607f26ab445c5d9c4b190.png', '1601373848_8c67e3c01d95ccf586ec5f8f48742628.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-29 05:04:08', '2020-09-29 05:04:08'),
(48, 25, '1', '1', 'samsung new 7 plus 89', 'green', 45500, 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'Lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-25 02:18:16', '2020-09-25 02:18:16'),
(49, 25, '1', '3', 'infinix new 8 plus 54', 'grey', 35900, 'yes', 'yes', 'yes', 'no', 'no', '60', '0', 'Fair', 'approved', 'Faisalabad', '03051449423', '1601112444_iphone11pro.png', '1601112445_iphoneXr.png', '1601112445_iphone7.png', '', '', '', NULL, NULL, NULL, NULL, '', '2020-09-26 04:27:25', '2020-09-26 04:27:25'),
(51, 25, '1', '6', 'iphone 12', 'grey', 125000, 'no', 'no', 'no', 'no', 'yes', '90', '0', 'Excellent', 'approved', 'Bahawalpur', '03013435656', '1602308383_d6db477051465f9ae7dd73337296bf31.png', '1602308384_08e019b4f2e4c6b9845e0dfb69c4dd31.png', '1602308384_0be41d20bf0e0817a01c98575fd0e1f3.png', '1602308385_8c67e3c01d95ccf586ec5f8f48742628.png', '1602308385_e868aef2fb3b2f6bfc367362e445a131.png', '1602308385_0be41d20bf0e0817a01c98575fd0e1f3.png', '1602308386_158ad05e729b97d9fe2cad9e4693662b.png', '1602308386_d8293fb8a4008e005dcea87aa543eed0.png', NULL, NULL, 'this is detail of iphone', '2020-10-10 00:39:46', '2020-10-10 00:39:46'),
(52, 43, '1', '7', 'realme 8', 'yellow', 37900, 'no', 'no', 'no', 'no', 'yes', '50', '0', 'Good', 'approved', 'Bazdar', '03324567890', '1602486279_1026ae1042d5350779f203ad082b6ec0.png', '1602486281_0be41d20bf0e0817a01c98575fd0e1f3.png', '1602486281_08e019b4f2e4c6b9845e0dfb69c4dd31.png', '1602486281_8c67e3c01d95ccf586ec5f8f48742628.png', '1602486281_e868aef2fb3b2f6bfc367362e445a131.png', '1602486282_0be41d20bf0e0817a01c98575fd0e1f3.png', '1602486282_7bfa6374ba9c05d491ea5f26813db25d.png', '1602486282_e868aef2fb3b2f6bfc367362e445a131.png', NULL, NULL, 'this is detail of the realme mobile', '2020-10-12 02:04:43', '2020-10-12 02:04:43'),
(53, 25, '1', '1', '03013435656', 'blue', 52500, 'no', 'no', 'yes', 'yes', 'yes', '80', '0', 'Fair', 'approved', 'Bahawalpur', '03013435632', '1602586447_1026ae1042d5350779f203ad082b6ec0.png', '1602586448_8c67e3c01d95ccf586ec5f8f48742628.png', '1602586449_08e019b4f2e4c6b9845e0dfb69c4dd31.png', '', '', '', '', '', NULL, NULL, 'this is detail', '2020-10-13 05:54:09', '2020-10-13 05:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `sma_products`
--

CREATE TABLE `sma_products` (
  `id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `color` varchar(100) NOT NULL,
  `unit` int(11) DEFAULT NULL,
  `cost` decimal(25,4) DEFAULT NULL,
  `price` decimal(25,0) NOT NULL,
  `alert_quantity` decimal(15,4) DEFAULT 20.0000,
  `image` varchar(255) DEFAULT 'no_image.png',
  `dimage` varchar(255) DEFAULT NULL,
  `dimage1` varchar(255) DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `subcategory_id` int(11) DEFAULT NULL,
  `quantity` int(5) DEFAULT 0,
  `details` varchar(1000) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `type` varchar(55) NOT NULL DEFAULT 'standard',
  `promotion` tinyint(1) DEFAULT 0,
  `launch_announced` varchar(255) DEFAULT NULL,
  `launch_status` varchar(255) DEFAULT NULL,
  `body_dimensions` varchar(255) DEFAULT NULL,
  `body_weight` varchar(255) DEFAULT NULL,
  `body_build` varchar(255) DEFAULT NULL,
  `body_sim` varchar(255) DEFAULT NULL,
  `display_type` varchar(255) DEFAULT NULL,
  `display_size` varchar(255) DEFAULT NULL,
  `display_resolution` varchar(255) DEFAULT NULL,
  `display_protection` varchar(255) DEFAULT NULL,
  `platform_os` varchar(255) DEFAULT NULL,
  `platform_chipset` varchar(255) DEFAULT NULL,
  `platform_cpu` varchar(255) DEFAULT NULL,
  `platform_gpu` varchar(255) DEFAULT NULL,
  `memory_card_slot` varchar(255) DEFAULT NULL,
  `memory_ram` varchar(255) DEFAULT NULL,
  `memory_storage` varchar(255) DEFAULT NULL,
  `main_type` varchar(255) DEFAULT NULL,
  `main_type_value` varchar(255) DEFAULT NULL,
  `main_feature` varchar(255) DEFAULT NULL,
  `main_video` varchar(255) DEFAULT NULL,
  `selfie_single` varchar(255) DEFAULT NULL,
  `selfie_feature` varchar(255) DEFAULT NULL,
  `selfie_video` varchar(255) DEFAULT NULL,
  `sound_loudspeaker` varchar(255) DEFAULT NULL,
  `sound_jack` varchar(255) DEFAULT NULL,
  `sound_mic` varchar(255) DEFAULT NULL,
  `comms_wlan` varchar(255) DEFAULT NULL,
  `comms_bluetooth` varchar(255) DEFAULT NULL,
  `comms_gps` varchar(255) DEFAULT NULL,
  `comms_nfc` varchar(255) DEFAULT NULL,
  `comms_radio` varchar(255) DEFAULT NULL,
  `comms_usb` varchar(255) DEFAULT NULL,
  `feature_sensor` varchar(255) DEFAULT NULL,
  `battery_status` varchar(255) DEFAULT NULL,
  `battery_stand_by` varchar(255) DEFAULT NULL,
  `battery_talk_time` varchar(255) DEFAULT NULL,
  `battery_music` varchar(255) DEFAULT NULL,
  `colors` varchar(255) DEFAULT NULL,
  `promo_price` decimal(25,4) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `sale_unit` int(11) DEFAULT NULL,
  `brand` int(11) DEFAULT NULL,
  `slug` varchar(55) DEFAULT NULL,
  `weight` decimal(10,4) DEFAULT NULL,
  `upload_type` int(11) NOT NULL DEFAULT 0 COMMENT '0 for noraml 1 for sell user',
  `video` text DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `os` varchar(255) DEFAULT NULL,
  `processor` varchar(255) DEFAULT NULL,
  `memory` varchar(255) DEFAULT NULL,
  `storage` varchar(255) DEFAULT NULL,
  `camera` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `resolution` varchar(255) DEFAULT NULL,
  `connectivity` varchar(255) DEFAULT NULL,
  `battery` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `width` varchar(255) DEFAULT NULL,
  `depth` varchar(255) DEFAULT NULL,
  `brief_weight` varchar(255) DEFAULT NULL,
  `minor_dent_scratch` varchar(255) DEFAULT '0',
  `major_dent_scratch` varchar(255) DEFAULT '0',
  `original_accessories_available` varchar(255) DEFAULT '0',
  `screen_is_cracked` varchar(255) DEFAULT '0',
  `device_box_available` varchar(255) DEFAULT '0',
  `device_battery_status` varchar(255) DEFAULT '0',
  `detail_check` int(1) NOT NULL DEFAULT 0,
  `other_detail` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sma_products`
--

INSERT INTO `sma_products` (`id`, `code`, `name`, `color`, `unit`, `cost`, `price`, `alert_quantity`, `image`, `dimage`, `dimage1`, `category_id`, `brand_id`, `city`, `subcategory_id`, `quantity`, `details`, `description`, `type`, `promotion`, `launch_announced`, `launch_status`, `body_dimensions`, `body_weight`, `body_build`, `body_sim`, `display_type`, `display_size`, `display_resolution`, `display_protection`, `platform_os`, `platform_chipset`, `platform_cpu`, `platform_gpu`, `memory_card_slot`, `memory_ram`, `memory_storage`, `main_type`, `main_type_value`, `main_feature`, `main_video`, `selfie_single`, `selfie_feature`, `selfie_video`, `sound_loudspeaker`, `sound_jack`, `sound_mic`, `comms_wlan`, `comms_bluetooth`, `comms_gps`, `comms_nfc`, `comms_radio`, `comms_usb`, `feature_sensor`, `battery_status`, `battery_stand_by`, `battery_talk_time`, `battery_music`, `colors`, `promo_price`, `start_date`, `end_date`, `sale_unit`, `brand`, `slug`, `weight`, `upload_type`, `video`, `video_link`, `os`, `processor`, `memory`, `storage`, `camera`, `size`, `resolution`, `connectivity`, `battery`, `height`, `width`, `depth`, `brief_weight`, `minor_dent_scratch`, `major_dent_scratch`, `original_accessories_available`, `screen_is_cracked`, `device_box_available`, `device_battery_status`, `detail_check`, `other_detail`, `created_at`, `updated_at`) VALUES
(11, '7867862', 'samsung 7 plus', 'grey', NULL, NULL, '95000', '20.0000', '1601026510_iphone6sPlus.png', '1601026511_iphoneXr.png', '1601026511_iphone8.png', 1, 1, NULL, NULL, 2, NULL, 'this is detail', 'standard', 0, '2020-08-12', 'Available', NULL, NULL, NULL, NULL, 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', NULL, NULL, NULL, NULL, 'yes', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Zw8h-PjtGDI\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1000', '1500', '500', '3000', '1000', '1500', 1, '<ol type=\"circle\"> \r\n      <li>os</li>\r\n<li>4gb ram</li>\r\n    </ol>', '2020-08-11 07:50:53', '2020-10-06 02:52:24'),
(18, '432432432', 'infinix hot s3 lites e', 'lightbrown', NULL, NULL, '15500', '20.0000', '1601026606_iphoneX.png', '1601026606_iphoneXr.png', '1601026606_iphone6sPlus.png', 1, 3, NULL, NULL, 6, NULL, 'thid', 'standard', 0, '2020-08-22', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', NULL, '2GB RAM', '64/256GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'no', 'no', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'no', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128GB', '12/7 MP', NULL, NULL, NULL, 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2020-08-21 05:51:55', '2020-09-30 01:40:42'),
(19, '4324545454', 'samsung hot 8 litesme new', 'blue', NULL, NULL, '38500', '20.0000', '1601026641_iphoneXr.png', '1601026641_iphoneX.png', '1601027015_iphonexsmax.png', 1, 1, NULL, NULL, 7, NULL, 'detail', 'standard', 0, '2020-09-05', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'no', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', 'single', 'selfie feature', NULL, NULL, NULL, 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'no', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'http://flickerfone/videos', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1700', '2700', '1500', '3500', '1200', '2500', 0, NULL, '2020-09-04 01:43:45', '2020-09-25 04:43:36'),
(20, '453212', 'samsung 11 plus', 'yellow', NULL, NULL, '120000', '20.0000', '1601026672_iphoneX.png', '1601027032_iphonexsmax.png', '1601026672_iphoneXr.png', 1, 1, NULL, NULL, 6, NULL, 'this is description', 'standard', 0, '2020-09-07', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', NULL, 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '8GB', '64/256/512GB', 'single', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'selfie feature', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'no', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', '2.0, proprietary reversible connecto', 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '4 GB RAM', '32/128GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1500', '4500', '2400', '4500', '1300', '2300', 0, NULL, '2020-09-14 00:35:34', '2020-09-25 04:43:52'),
(21, '876123', 'samsung 7 plus 2', 'grey', NULL, NULL, '85500', '20.0000', '1601026720_iphoneX.png', '1601027119_iphone8.png', '1601027056_iphoneXr.png', 1, 1, NULL, NULL, 6, NULL, 'this is detail', 'standard', 0, '2020-09-08', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '8GB', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'selfie feature', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', '2.0, proprietary reversible connecto', 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '8 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '500', '2500', '800', '1500', '500', '1500', 0, NULL, '2020-09-14 01:00:19', '2020-09-25 04:45:20'),
(22, '87612343', 'samsung 7 plus new', 'grey', NULL, NULL, '85500', '20.0000', '1601027087_iphoneXr.png', '1601027088_iphone6sPlus.png', '1601027088_iphone8.png', 1, 1, NULL, NULL, 6, NULL, 'this is detail', 'standard', 0, '2020-09-08', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '8GB', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'selfie feature', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', NULL, 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', '2.0, proprietary reversible connecto', 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '2000', '3000', '1500', '4000', '1000', '1500', 0, 'this is other detail', '2020-09-14 01:02:50', '2020-09-26 04:52:46'),
(30, '7867862', 'samsung 7 plus 3', 'grey', NULL, NULL, '55000', '20.0000', '1601026510_iphone6sPlus.png', '1601026511_iphoneXr.png', '1601026511_iphone8.png', 1, 1, NULL, NULL, 2, NULL, 'this is detail', 'standard', 0, '2020-08-12', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Zw8h-PjtGDI\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1000', '1500', '500', '3000', '1000', '1500', 0, NULL, '2020-08-11 07:50:53', '2020-10-01 01:17:21'),
(31, '7867862', 'samsung 7 plus 4', 'grey', NULL, NULL, '75000', '20.0000', '1601026510_iphone6sPlus.png', '1601026511_iphoneXr.png', '1601026511_iphone8.png', 1, 1, NULL, NULL, 2, NULL, 'this is detail', 'standard', 0, '2020-08-12', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Zw8h-PjtGDI\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1000', '1500', '500', '3000', '1000', '1500', 0, NULL, '2020-08-11 07:50:53', '2020-10-01 01:17:21'),
(32, '432432432', 'infinix hot s3 lites e', 'lightbrown', NULL, NULL, '45500', '20.0000', '1601026606_iphoneX.png', '1601026606_iphoneXr.png', '1601026606_iphone6sPlus.png', 1, 3, NULL, NULL, 6, NULL, 'thid', 'standard', 0, '2020-08-22', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', '', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', NULL, '2GB RAM', '64/256GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'no', 'no', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'no', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128GB', '12/7 MP', NULL, NULL, NULL, 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2020-08-21 05:51:55', '2020-09-30 01:40:42'),
(33, '4324545454', 'samsung hot 8 litesme', 'blue', NULL, NULL, '666', '20.0000', '1601026641_iphoneXr.png', '1601026641_iphoneX.png', '1601027015_iphonexsmax.png', 1, 1, NULL, NULL, 7, NULL, 'detail', 'standard', 0, '2020-09-05', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'no', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', 'single', 'selfie feature', NULL, NULL, NULL, 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'no', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'http://flickerfone/videos', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1700', '2700', '1500', '3500', '1200', '2500', 0, NULL, '2020-09-04 01:43:45', '2020-09-25 04:43:36'),
(34, '7867862', 'samsung 7 plus 5 ', 'grey', NULL, NULL, '59000', '20.0000', '1601026510_iphone6sPlus.png', '1601026511_iphoneXr.png', '1601026511_iphone8.png', 1, 1, NULL, NULL, 2, NULL, 'this is detail', 'standard', 0, '2020-08-12', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/Zw8h-PjtGDI\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1000', '1500', '500', '3000', '1000', '1500', 0, NULL, '2020-08-11 07:50:53', '2020-10-01 01:17:21'),
(35, '432432432', 'infinix hot s3 lites e', 'lightbrown', NULL, NULL, '65500', '20.0000', '1601026606_iphoneX.png', '1601026606_iphoneXr.png', '1601026606_iphone6sPlus.png', 1, 3, NULL, NULL, 6, NULL, 'thid', 'standard', 0, '2020-08-22', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', NULL, '2GB RAM', '64/256GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'no', 'no', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'no', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128GB', '12/7 MP', NULL, NULL, NULL, 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, '2020-08-21 05:51:55', '2020-09-30 01:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_name`, `username`, `name`, `email`, `company`, `shop`, `phone`, `city`, `password`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(25, 'buyer', 'muhammadwaseem', 'MuhammadWaseem', 'waseemulfat961@gmail.com', 'devsbeta', NULL, '03013435656', '18 Hazari', '$2y$10$lmUGQX/.oecGqmadj2UgnuiKa04q1nV9at0zLiFYWJmo.vvzoShUu', 1, 'FZpdSV1kUOkBR61HbsyPZh2sgBI99Q9Pxs3xWgD0cQ8Ok4Aruw9FTIDvcZUK', '2020-09-19 02:15:16', '2020-10-10 00:32:05'),
(27, 'buyer', 'usman', 'usman', 'evkpbbrefazqvzlfzs@tsyefn.com', 'dd', NULL, '1234556', 'Baddin', '$2y$10$92tSKJzzOBmqQXtdeyG8AO6CGyWnV1afOijW/Ad02zuAa89PLwfUq', 1, NULL, '2020-09-24 00:20:50', '2020-09-24 00:23:59'),
(29, 'buyer', 'test', 'usman89', 'testre@gmail.com', 'ff', NULL, '78897', 'Kot Addu', '$2y$10$uTUAKVWT8y4dYoVOz3rsaOBC1VPKlINYxGvYQMTf.F9q9Geckn4rq', 1, NULL, '2020-10-08 00:05:18', '2020-10-08 00:09:04'),
(43, 'buyer', 'waseem', 'Muhammadwaseem', 'generalpurpose961@gmail.com', 'devsbeta', NULL, '03017161638', '18 Hazari', '$2y$10$rD7U6zeOfJgFGDSiI0kh1OlD0Vcqd201HAIQi8iBvmQLdi2OAxcuK', 1, '3IPSXGivaOpnT4NPd4UCrpXoeNFWc5Yd8aC3NP6LqcWVMeCfqykdxhs6XyFM', '2020-10-12 01:41:49', '2020-10-12 01:53:00');

-- --------------------------------------------------------

--
-- Table structure for table `variations`
--

CREATE TABLE `variations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cproduct_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `storage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `product_id`, `cproduct_id`, `color`, `storage`, `price`, `img`, `created_at`, `updated_at`) VALUES
(299, '19', NULL, 'pink', '32gb', '45000', NULL, '2020-09-25 04:43:36', '2020-09-25 04:43:36'),
(300, '19', NULL, 'pink', '64gb', '55000', NULL, '2020-09-25 04:43:36', '2020-09-25 04:43:36'),
(301, '20', NULL, 'pink', '32gb', '45000', NULL, '2020-09-25 04:43:52', '2020-09-25 04:43:52'),
(302, '20', NULL, 'pink', '64gb', '70500', NULL, '2020-09-25 04:43:52', '2020-09-25 04:43:52'),
(303, '20', NULL, 'light pink', '128gb', '85500', NULL, '2020-09-25 04:43:52', '2020-09-25 04:43:52'),
(311, '21', NULL, 'black', '32gb', '25000', NULL, '2020-09-25 04:45:20', '2020-09-25 04:45:20'),
(312, '21', NULL, 'blue', '64gb', '55500', NULL, '2020-09-25 04:45:20', '2020-09-25 04:45:20'),
(313, '21', NULL, 'blue', '128gb', '85500', NULL, '2020-09-25 04:45:20', '2020-09-25 04:45:20'),
(318, '28', NULL, 'blue', '32gb', '45000', NULL, '2020-09-26 04:25:24', '2020-09-26 04:25:24'),
(323, '22', NULL, 'blue', '32gb', '45000', NULL, '2020-09-26 04:52:47', '2020-09-26 04:52:47'),
(324, '22', NULL, 'pink', '64gb', '55500', NULL, '2020-09-26 04:52:47', '2020-09-26 04:52:47'),
(325, '22', NULL, 'pink', '128gb', '75500', NULL, '2020-09-26 04:52:47', '2020-09-26 04:52:47'),
(326, '22', NULL, 'pink', '256gb', '95500', NULL, '2020-09-26 04:52:47', '2020-09-26 04:52:47'),
(334, '18', NULL, 'blue', '32gb', '45000', '1601448542_4eb3a5c8b2a4c1820e0bd9f8423b8e2a.png', '2020-09-30 01:50:05', '2020-09-30 01:50:05'),
(335, '18', NULL, 'blue', '64gb', '55000', '1601448542_4eb3a5c8b2a4c1820e0bd9f8423b8e2a.png', '2020-09-30 01:50:05', '2020-09-30 01:50:05'),
(336, '18', NULL, 'brown', '32gb', '45500', '1601448605_9266d77e2d552b0469ebaca1fd8d6397.png', '2020-09-30 01:50:05', '2020-09-30 01:50:05'),
(337, '29', NULL, 'blue', '32gb', '45000', '1601449807_89550539725a10717eb10c5db6950983.png', '2020-09-30 02:10:08', '2020-09-30 02:10:08'),
(354, '11', NULL, 'blue', '32gb', '45000', '1601531495_89550539725a10717eb10c5db6950983.png', '2020-10-06 02:52:25', '2020-10-06 02:52:25'),
(355, '11', NULL, 'blue', '64gb', '28000', '1601531495_89550539725a10717eb10c5db6950983.png', '2020-10-06 02:52:25', '2020-10-06 02:52:25'),
(356, '11', NULL, 'pink', '64gb', '45500', '1601531497_3e6777aa3f4e3de20e114cc603264993.png', '2020-10-06 02:52:25', '2020-10-06 02:52:25'),
(357, '11', NULL, 'pink', '32gb', '55500', '1601531497_3e6777aa3f4e3de20e114cc603264993.png', '2020-10-06 02:52:25', '2020-10-06 02:52:25');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_emails`
--

CREATE TABLE `welcome_emails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_emails`
--

INSERT INTO `welcome_emails` (`id`, `content`, `created_at`, `updated_at`) VALUES
(1, '<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">\r\n<html>\r\n<head><meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0\">\r\n	<link href=\"https://fonts.googleapis.com/css?family=Lato:400,300,700,400italic\" rel=\"stylesheet\" type=\"text/css\">\r\n	<title>FlickerFone Email Template</title>\r\n	<style type=\"text/css\">/*Hotmail and Yahoo specific code*/\r\n\r\n.ReadMsgBody {\r\n	width: 100%;\r\n}\r\n.ExternalClass {\r\n	width: 100%;\r\n}\r\n.yshortcuts {\r\n	color: #ffffff;\r\n}\r\n.yshortcuts a span {\r\n	color: #ffffff;\r\n	border-bottom: none !important;\r\n	background: none !important;\r\n}\r\n/*Hotmail and Yahoo specific code*/\r\nbody {\r\n	-webkit-text-size-adjust: 100%;\r\n	-ms-text-size-adjust: 100%;\r\n	-webkit-font-smoothing: antialiased;\r\n	margin: 0 !important;\r\n	padding: 0 !important;\r\n	width: 100% !important;\r\n}\r\np {\r\n	margin: 0px !important;\r\n	padding: 0px !important;\r\n}\r\nth {\r\n	font-weight: normal !important;\r\n}\r\n.appleLinks a {\r\n	color: #e3e3f1 !important;\r\n	text-decoration: none !important;\r\n}\r\n.button-container {\r\n	margin: 0 auto !important;\r\n	width: 60% !important;\r\n}\r\n/* mouse over link title */\r\n.titletxt {\r\n	color: #616161;\r\n	text-decoration: none;\r\n}\r\n.titletxt:hover {\r\n	color: #545454;\r\n	text-decoration: none;\r\n}\r\n/* mouse over link cta */\r\n/*-----Mobile specific code------*/\r\n @media only screen and (max-width:799px) {\r\nbody {\r\n	width: auto !important;\r\n}\r\ntable[class=\"main\"] {\r\n	max-width: 480px !important;\r\n	width: 100% !important;\r\n}\r\nimg[class=\"img1\"] {\r\n	max-width: 150px !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"img2\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"banner\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nimg[class=\"spacerimg\"] {\r\n	max-width: 0px !important;\r\n	width: 0px !important;\r\n	display: none !important;\r\n}\r\nth[class=\"stack1\"] {\r\n	display: block !important;\r\n	width: 100% !important;\r\n	height: auto !important;\r\n	text-align: center !important;\r\n}\r\nth[class=\"stack2\"] {\r\n	display: block !important;\r\n	width: 100% !important;\r\n	height: auto !important;\r\n	margin-top: 15px !important;\r\n}\r\nth[class=\"sphide\"] {\r\n	display: none !important;\r\n	width: 0px;\r\n}\r\ntd[class=\"textcntr\"] {\r\n	text-align: center !important;\r\n	padding-left: 10px;\r\n	padding-right: 10px;\r\n}\r\ntd[class=\"button\"] {\r\n	max-width: 180px !important;\r\n	width: 180px !important;\r\n	display: block;\r\n	margin: 0 auto;\r\n	background-color: #faad47;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\ntd[class=\"hspace\"] {\r\n	height: 25px !important;\r\n}\r\n}\r\n @media only screen and (max-width: 479px) {\r\nbody {\r\n	width: auto !important;\r\n}\r\ntable[class=\"main\"] {\r\n	max-width: 320px !important;\r\n	width: 100% !important;\r\n}\r\nimg[class=\"img1\"] {\r\n	max-width: 150px !important;\r\n	height: auto;\r\n	display: block;\r\n	margin: 0 auto;\r\n}\r\nth[class=\"sphide22\"] {\r\n	display: none !important;\r\n	width: 0px;\r\n}\r\ntd[class=\"titlefsize\"] {\r\n	font-size: 20px !important;\r\n	text-align: center !important;\r\n}\r\ntd[class=\"wspacw\"] {\r\n	width: 6px !important;\r\n}\r\nth[class=\"midspacw\"] {\r\n	width: 8px !important;\r\n}\r\ntd[class=\"textcntr\"] {\r\n	text-align: center !important;\r\n}\r\ntable[class=\"logo_left\"] {\r\n	max-width: 100%;\r\n	width: 100% !important;\r\n	height: auto;\r\n	margin: 0 auto;\r\n	text-align: center !important;\r\n}\r\nimg[class=\"logo_center\"] {\r\n	display: inherit !important;\r\n}\r\ntd[class=\"cta1\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	background-color: #ffffff;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\ntd[class=\"cta\"] {\r\n	max-width: 100% !important;\r\n	width: 100% !important;\r\n	background-color: #faad47;\r\n	border-radius: 2px;\r\n	-moz-border-radius: 2px;\r\n	-webkit-border-radius: 2px;\r\n}\r\nimg[class=\"spacerimg\"] {\r\n	max-width: 0px !important;\r\n	width: 0px !important;\r\n	display: none !important;\r\n}\r\n}\r\n/*-----Mobile specific code end------*/\r\n	</style>\r\n</head>\r\n<body bgcolor=\"#F7F7F7\" style=\"margin: 0px;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100%;-webkit-font-smoothing: antialiased;padding: 0 !important;width: 100% !important;\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#F7F7F7\">\r\n<tbody>\r\n<tr>\r\n<td align=\"center\">\r\n<table class=\"main\" border=\"0\" width=\"600\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><span style=\"color: #f8f8f8;\"><span style=\"font-family: Lato, Arial, sans-serif, \'Trebuchet MS\';\"><span style=\"font-size: 12px; line-height: 15px;\">Welcome to the Educents Community. Discover New Ways to Keep Kids Excited About Learning.</span></span></span></td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td bgcolor=\"#FFFFFF\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td width=\"28\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td height=\"28\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"left\">\r\n<table class=\"logo_left\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td align=\"center\"><span class=\"sg-image\"> <a href=\"http://www.educents.com/?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img class=\"logo_center\" style=\"width: 110px; height: 60px;\" src=\"https://flickerfone.com/assets/images/logo-cropped.jpg\" alt=\"logo\" width=\"110\" height=\"60\" border=\"0\" /> </a> </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 18px; color: #616161; text-align: center;\"><a style=\"color: #616161; text-decoration: none;\" target=\"_blank\">Home</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a style=\"color: #616161; text-decoration: none;\" href=\"/NewMobilePhones\" target=\"_blank\">New Products</a></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td width=\"28\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\"><span class=\"sg-image\"> <a href=\"/Admin/Welcome/1/\" target=\"_blank\"><img class=\"banner\" style=\"width: 100%; height: 245px;\" src=\"https://flickerfone.com/assets/images/b1.jpg\" alt=\"banner\" height=\"245\" border=\"0\" /></a> </span></td>\r\n</tr>\r\n<tr>\r\n<td bgcolor=\"#FFFFFF\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"wspacw\" width=\"35\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 26px; line-height: 32px; color: #17b9ac; text-align: center; font-weight: bold;\">Welcome to FlickerFone</td>\r\n</tr>\r\n<tr>\r\n<td height=\"12\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 22px; line-height: 26px; color: #616161; text-align: center;\">Save an <span style=\"font-size: 24px; font-weight: bold;\">EXTRA 15% </span>on your first purchase!</td>\r\n</tr>\r\n<tr>\r\n<td height=\"5\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 24px; color: #616161; text-align: center;\">Promo code: <span style=\"font-size: 14px; font-weight: bold;\">SAVE15</span></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"center\">\r\n<table width=\"180\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"cta1\" style=\"border-radius: 2px; -moz-border-radius: 2px; -webkit-border-radius: 2px; border: 1px solid #faad47;\" align=\"center\" bgcolor=\"#ffffff\" width=\"180\" height=\"40\"><a style=\"font-family: Lato, Arial, sans-serif, Trebuchet MS; font-size: 14px; line-height: 38px; color: #faad47; text-align: center; text-decoration: none !important; padding-bottom: 1px; width: 100%; font-weight: bold; display: inline-block;\" href=\"/NewMobilePhones\" target=\"_blank\"> <span style=\"color: #faad47;\">SHOP NOW</span> </a></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td height=\"5\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td class=\"wspacw\" width=\"35\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td>&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td valign=\"top\">\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td width=\"28\">&nbsp;</td>\r\n<td>\r\n<table border=\"0\" width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\r\n<tbody>\r\n<tr>\r\n<td class=\"textcntr\" style=\"font-family: Lato, Arial, sans-serif, \'Trebuchet MS\'; font-size: 15px; line-height: 25px; color: #616161; font-weight: bold; text-align: center;\">Follow us for our latest deals, tips and advice&nbsp;</td>\r\n<td height=\"36\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td align=\"center\">\r\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\">\r\n<tbody>\r\n<tr>\r\n<td><span class=\"sg-image\"> <a href=\"https://www.facebook.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/710a18cd99ba36db34412b55ff649c56add28b997b1c1b9e03ebf4f420874acdaade97c0c513dec89e5756b08854791b3e853867ed2ea918fdf19b3e9487b783.png\" alt=\"facebook\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"https://twitter.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/b74a9cd00a7456db4b0d8eaa72cd27c3280272e378aaf57b24534a8af463984d6d27b1ea9a821397b0e1a7fada0335b0c7ff578948d5d9868630a522cf193ac8.png\" alt=\"twitter\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"https://www.pinterest.com/educents/?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 20px; height: 20px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/9ded3ac16e9f24024f8fa11ebea7d3c56ddddeb08c727025ca5f91427ece25ad1256dcf2bf6ce80dd006d0706f20353fa6141cbe61c868181dd9850aa223791a.png\" alt=\"pinterest\" width=\"20\" height=\"20\" border=\"0\" /> </a> </span></td>\r\n<td width=\"25\">&nbsp;</td>\r\n<td><span class=\"sg-image\"> <a href=\"http://instagram.com/educents?utm_source=Educents&amp;utm_medium=email&amp;utm_campaign=welcome_new_9.1\" target=\"_blank\"><img style=\"width: 21px; height: 21px;\" src=\"https://marketing-image-production.s3.amazonaws.com/uploads/fdd5cd004b13fe1f2c8869a9530f63eaf64c803710b6d3e6000ce70a6a4726d51b2f65a975a59615983fd092f76b76f37950c28df3e69e5de2cd4615064f8955.png\" alt=\"instagram\" width=\"21\" height=\"21\" border=\"0\" /> </a> </span></td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n<tr>\r\n<td height=\"36\">&nbsp;</td>\r\n</tr>\r\n<tr>\r\n<td style=\"font-family: Helvetica, Arial, sans-serif, Trebuchet MS; font-size: 12px; line-height: 18px; color: #616161; text-align: center;\"><em>You&rsquo;re receiving this email because you&rsquo;ve registered on <a style=\"color: #616161; text-decoration: underline;\" target=\"_blank\">Flickerfone.com</a>.<br /> <br /> I don\'t know flickerfone address</em></td>\r\n</tr>\r\n<tr>\r\n<td height=\"15\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n<td width=\"28\">&nbsp;</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</td>\r\n</tr>\r\n</tbody>\r\n</table>\r\n</body>\r\n</html>', NULL, '2020-10-13 01:01:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessories`
--
ALTER TABLE `accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `accessory_categories`
--
ALTER TABLE `accessory_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `active_emails`
--
ALTER TABLE `active_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `block_emails`
--
ALTER TABLE `block_emails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_sliders`
--
ALTER TABLE `blog_sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buy_new_sells`
--
ALTER TABLE `buy_new_sells`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `metas`
--
ALTER TABLE `metas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinion_replies`
--
ALTER TABLE `opinion_replies`
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
-- Indexes for table `price_calculator_products`
--
ALTER TABLE `price_calculator_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `price_variations`
--
ALTER TABLE `price_variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_opinions`
--
ALTER TABLE `product_opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_accessories`
--
ALTER TABLE `sell_accessories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sell_products`
--
ALTER TABLE `sell_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sma_products`
--
ALTER TABLE `sma_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `variations`
--
ALTER TABLE `variations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_emails`
--
ALTER TABLE `welcome_emails`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessories`
--
ALTER TABLE `accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `accessory_categories`
--
ALTER TABLE `accessory_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `active_emails`
--
ALTER TABLE `active_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `block_emails`
--
ALTER TABLE `block_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_sliders`
--
ALTER TABLE `blog_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `buy_new_sells`
--
ALTER TABLE `buy_new_sells`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `metas`
--
ALTER TABLE `metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `opinion_replies`
--
ALTER TABLE `opinion_replies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `price_calculator_products`
--
ALTER TABLE `price_calculator_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `price_variations`
--
ALTER TABLE `price_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_opinions`
--
ALTER TABLE `product_opinions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sell_accessories`
--
ALTER TABLE `sell_accessories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sell_products`
--
ALTER TABLE `sell_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `sma_products`
--
ALTER TABLE `sma_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT for table `welcome_emails`
--
ALTER TABLE `welcome_emails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
