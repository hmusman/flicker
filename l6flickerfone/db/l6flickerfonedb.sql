-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 09:35 AM
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
(3, 'infinix', '2020-08-05 00:35:13', '2020-08-05 00:35:13');

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
(1, 'mobile', 'this is description', NULL, '2020-07-24 02:34:43', '2020-08-05 00:37:17'),
(3, 'laptop', 'this is description of laptop', NULL, '2020-07-24 03:01:02', '2020-07-24 03:01:02'),
(6, 'tablet', 'this is description of tablets', NULL, '2020-08-05 00:36:33', '2020-08-05 00:36:33');

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
(13, '2020_09_23_065148_sell_products', 10);

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
  `code` varchar(50) NOT NULL,
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
(4, '20202', 'samsung 7 plus', 'admin/images/pricecalculatorproduct/2pT5jNcrEvhDD592DsvDBpAU0610iyTaECM4DpZ1.png', 1, 1, '1500', '2500', '1500', '2500', '500', '1500', '2020-09-22 06:01:29', '2020-09-22 06:26:41');

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
(11, '4', 'blue', '32gb', '45000', '2020-09-22 06:29:54', '2020-09-22 06:29:54'),
(12, '4', 'blue', '64gb', '55000', '2020-09-22 06:29:54', '2020-09-22 06:29:54'),
(13, '4', 'yellow', '128gb', '75500', '2020-09-22 06:29:54', '2020-09-22 06:29:54');

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
-- Table structure for table `sell_products`
--

CREATE TABLE `sell_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `category_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `minor_dent_scratch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `major_dent_scratch` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_accessories_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen_is_cracked` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_box_available` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device_battery_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `device_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell_products`
--

INSERT INTO `sell_products` (`id`, `user_id`, `category_id`, `brand_id`, `model`, `color`, `price`, `minor_dent_scratch`, `major_dent_scratch`, `original_accessories_available`, `screen_is_cracked`, `device_box_available`, `device_battery_status`, `status`, `device_status`, `pta`, `city`, `phone`, `img1`, `img2`, `img3`, `img4`, `img5`, `img6`, `img7`, `img8`, `img9`, `img10`, `created_at`, `updated_at`) VALUES
(23, 25, '1', '1', 'samsung new 7 plus', 'green', '45500', 'no', 'no', 'no', 'yes', 'yes', '97', '0', 'Fair', 'approved', 'lahore', '03051449423', '1601018295_0rX2eOOHzpD712u3pmjkntQ0vex7jQbQT2TbNlrL.png', '1601018295_4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', '1601018296_DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', '', '', '', NULL, NULL, NULL, NULL, '2020-09-25 02:18:16', '2020-09-25 02:18:16');

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
  `minor_dent_scratch` varchar(255) NOT NULL DEFAULT '0',
  `major_dent_scratch` varchar(255) NOT NULL DEFAULT '0',
  `original_accessories_available` varchar(255) NOT NULL DEFAULT '0',
  `screen_is_cracked` varchar(255) NOT NULL DEFAULT '0',
  `device_box_available` varchar(255) NOT NULL DEFAULT '0',
  `device_battery_status` varchar(255) NOT NULL DEFAULT '0',
  `detail_check` int(1) NOT NULL DEFAULT 0,
  `other_detail` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sma_products`
--

INSERT INTO `sma_products` (`id`, `code`, `name`, `color`, `unit`, `cost`, `price`, `alert_quantity`, `image`, `dimage`, `dimage1`, `category_id`, `brand_id`, `city`, `subcategory_id`, `quantity`, `details`, `description`, `type`, `promotion`, `launch_announced`, `launch_status`, `body_dimensions`, `body_weight`, `body_build`, `body_sim`, `display_type`, `display_size`, `display_resolution`, `display_protection`, `platform_os`, `platform_chipset`, `platform_cpu`, `platform_gpu`, `memory_card_slot`, `memory_ram`, `memory_storage`, `main_type`, `main_type_value`, `main_feature`, `main_video`, `selfie_single`, `selfie_feature`, `selfie_video`, `sound_loudspeaker`, `sound_jack`, `sound_mic`, `comms_wlan`, `comms_bluetooth`, `comms_gps`, `comms_nfc`, `comms_radio`, `comms_usb`, `feature_sensor`, `battery_status`, `battery_stand_by`, `battery_talk_time`, `battery_music`, `colors`, `promo_price`, `start_date`, `end_date`, `sale_unit`, `brand`, `slug`, `weight`, `upload_type`, `video`, `video_link`, `os`, `processor`, `memory`, `storage`, `camera`, `size`, `resolution`, `connectivity`, `battery`, `height`, `width`, `depth`, `brief_weight`, `minor_dent_scratch`, `major_dent_scratch`, `original_accessories_available`, `screen_is_cracked`, `device_box_available`, `device_battery_status`, `detail_check`, `other_detail`, `created_at`, `updated_at`) VALUES
(11, '7867862', 'samsung 7 plus', 'grey', NULL, NULL, '95000', '20.0000', 'admin/images/product/4LIykWOVWbaX6GG01NNAzDR7fhshkPiX4dLO3Iru.png', 'admin/images/product/SkIsWTNLH7zPa4nF3cLr56LPOvA9K05WLz8h1DGc.png', 'admin/images/product/15aQ1gS4n1CJgiUiaA7oqjWxXUYxPTpMkMO4pp3c.png', 1, 1, NULL, NULL, 2, NULL, 'this is detail', 'standard', 0, '2020-08-12', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'http://flickerfone/videos', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1000', '1500', '500', '3000', '1000', '1500', 0, NULL, '2020-08-11 07:50:53', '2020-09-19 02:21:58'),
(18, '432432432', 'infinix hot s3 lites e', 'lightbrown', NULL, NULL, '45466', '20.0000', 'admin/images/product/kEqsyRDD7pBLRuBIiFyEmE7E2I6YbG5sPeb15Yyd.png', 'admin/images/product/m40dR5Ny9keFK5nfnpglrMpiIDWud0aqbq1BytXA.png', 'admin/images/product/yv9pETO8Nd8YtI7UEFDRQsT4MNhRRAy9xGg7Mpix.png', 1, 3, NULL, NULL, 6, NULL, 'thid', 'standard', 0, '2020-08-22', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', NULL, '2GB RAM', '64/256GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x opti           <label class=', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'HDR', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'no', 'no', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'no', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '2500', '5000', '1500', '3500', '500', '2000', 0, NULL, '2020-08-21 05:51:55', '2020-09-19 02:22:32'),
(19, '4324545454', 'samsung hot 8 litesme', 'blue', NULL, NULL, '666', '20.0000', 'admin/images/product/aSgjP2ynt9a6qXA7jNilvPwBcivudY8zaAorTmgt.png', 'admin/images/product/T8ig5pcJDfWngMpKY6U5qmA3xwZTfc4EhdpVfwSz.png', 'admin/images/product/KAxMtoBnIiEfWjlKcZ15cQm7olzQrwGpzUq5VLk9.png', 1, 1, NULL, NULL, 7, NULL, 'detail', 'standard', 0, '2020-09-05', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'no', '4GB RAM', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', 'single', 'selfie feature', NULL, NULL, NULL, 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'no', NULL, 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, 'http://flickerfone/videos', 'iOS 10.0.1', 'Quad-core 2.34 GHz', '2 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1700', '2700', '1500', '3500', '1200', '2500', 0, NULL, '2020-09-04 01:43:45', '2020-09-19 02:23:16'),
(20, '453212', 'samsung 11 plus', 'yellow', NULL, NULL, '120000', '20.0000', 'admin/images/product/KCM5YYTRkcHkqo8u63peR415V82X39f6pqrgQBE8.png', 'admin/images/product/qjmGC5b7mZlvVnAblCcXzHKQAQINY7RkbTyrh5uY.png', 'admin/images/product/qLf73uffLgm7gGDE3cDowkg65OVTcKMrdotramse.png', 1, 1, NULL, NULL, 6, NULL, 'this is description', 'standard', 0, '2020-09-07', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', NULL, 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '8GB', '64/256/512GB', 'single', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'selfie feature', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'no', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', '2.0, proprietary reversible connecto', 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '4 GB RAM', '32/128GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '1500', '4500', '2400', '4500', '1300', '2300', 0, NULL, '2020-09-14 00:35:34', '2020-09-19 02:24:07'),
(21, '876123', 'samsung 7 plus', 'grey', NULL, NULL, '85500', '20.0000', 'admin/images/product/K0ACtJxMTGSQKInn35JQ3PVQqb50T0zUSC7MKMci.png', 'admin/images/product/DlfcotlQ1HyJow9VDUDzxXkmWiK6jft03bYawewm.png', 'admin/images/product/J251Zxs5zlXZbcadxGzGwICqVyjhpSS5PefUZru3.png', 1, 1, NULL, NULL, 6, NULL, 'this is detail', 'standard', 0, '2020-09-08', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '8GB', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'selfie feature', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', 'Active noise cancellation with dedicated mic Dolby Atmos, Dolby Digital Plus', 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', '2.0, proprietary reversible connecto', 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', 'Quad-core 2.34 GHz', '8 GB RAM', '32/128/256 GB', '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '500', '2500', '800', '1500', '500', '1500', 0, NULL, '2020-09-14 01:00:19', '2020-09-19 02:25:24'),
(22, '87612343', 'samsung 7 plus new', 'grey', NULL, NULL, '85500', '20.0000', 'admin/images/product/e1bJmx3jNq3tYs7IZgAqPPwrCg7gwGdDutMlmxRs.png', 'admin/images/product/CtIa104k7gUFxIWADHA70sfPiYIxC1HvNCDBcHXB.png', 'admin/images/product/37oJwzbbAm9SS4ZJ2IJffVg6UVNJhJC0mW71e5OL.png', 1, 1, NULL, NULL, 6, NULL, 'this is detail', 'standard', 0, '2020-09-08', 'Available', '158 x 77.8 x 8.1 mm (6.22 x 3.06 x 0.32 in)', '125', 'Front/back glass, stainless steel frame', 'Nano-SIM and/or Electronic SIM card IP68 dust/water resistant (up to 4m for 30 mins)', 'Super Retina XDR OLED capacitive touchscreen, 16M colors', '6.5 inches, 102.9 cm2 (~83.7% screen-to-body ratio)', '1242 x 2688 pixels, 19.5:9 ratio (~458 ppi density)', 'Scratch-resistant glass, oleophobic coating 800 nits max brightness Dolby Vision HDR10 Wide color gamut True-tone 120Hz touch-sensing', 'iOS 13, upgradable to iOS 13.2', 'Apple A13 Bionic (7 nm+)', 'Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)', 'Apple GPU (4-core graphics)', 'yes', '8GB', '64/256/512GB', 'triple', '12 MP, f/1.8, 26mm (wide), 1/2.55\", 1.4µm, dual pixel PDAF, OIS 12 MP, f/2.4 52mm (telephoto), 1/3.4\", 1.0µm, PDAF, OIS 2x optical zoom 12 MP, f/2.4, 13mm (ultrawide)', 'Quad-LED dual-tone flash, HDR (photo/panorama)', '2160p@24/30/60fps, 1080p@30/60/120/240fps, HDR, stereo sound rec', '12 MP, f/2.2, 23mm (wide) SL 3D camera', 'selfie feature', '2160p@24/30/60fps, 1080p@30/60/120fps, gyro-EIS', 'yes', 'yes', NULL, 'Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot', '5.0, A2DP, LE', 'Yes, with A-GPS, GLONASS, GALILEO, QZSS', 'No', 'yes', '2.0, proprietary reversible connecto', 'Face ID, accelerometer, gyro, proximity, compass, barometer Siri natural language commands and dictation', 'Non-removable Li-Ion 3969 mAh battery (15.04 Wh)', NULL, 'Up to 20 h (multimedia)', 'Up to 80 h', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, NULL, NULL, 'iOS 10.0.1', NULL, NULL, NULL, '12/7 MP', '4.7 inches', '750 x 1334 pixels', 'Wi-Fi 802.11, Bluetooth 4.2, NFC (Apple Pay only)', 'Non-removable Li-Po 1960 mAh battery', '5.44 inches', '2.64 inches', '0.28 inches', '138g', '2000', '3000', '1500', '4000', '1000', '1500', 0, NULL, '2020-09-14 01:02:50', '2020-09-17 02:48:52');

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
(25, 'buyer', 'muhammadwaseem', 'MuhammadWaseem', 'waseemulfat961@gmail.com', 'devsbeta', NULL, '03013435656', '18 Hazari', '$2y$10$/NsFMW/lXzRn7T26I0q2UuXXeNbXeXJqML1rMZwUhRZwYMTd2trDm', 1, 'dbkv7U6qgb1tTCbyTtIJwC6ANqPzWShAUGK2Ur6gd9aS5edh3NZ7Gi8S4XTD', '2020-09-19 02:15:16', '2020-09-25 00:11:41'),
(27, 'buyer', 'usman', 'usman', 'evkpbbrefazqvzlfzs@tsyefn.com', 'dd', NULL, '1234556', 'Baddin', '$2y$10$92tSKJzzOBmqQXtdeyG8AO6CGyWnV1afOijW/Ad02zuAa89PLwfUq', 1, NULL, '2020-09-24 00:20:50', '2020-09-24 00:23:59'),
(28, 'buyer', 'usman', 'Muhammad Waseem', 'evkpbbrefazqvzlfzs1@tsyefn.com', 'newcommpany', NULL, '03013435656', '18 Hazari', '$2y$10$k0fBa9EBP4OyQ7bUpT4WfuIC7pvydQyXlEv/dVAq5u0woZnXqFb1i', 0, NULL, '2020-09-24 00:21:47', '2020-09-25 00:11:47');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `variations`
--

INSERT INTO `variations` (`id`, `product_id`, `cproduct_id`, `color`, `storage`, `price`, `created_at`, `updated_at`) VALUES
(256, '22', NULL, 'blue', '32gb', '45000', '2020-09-17 02:48:52', '2020-09-17 02:48:52'),
(257, '22', NULL, 'pink', '64gb', '55500', '2020-09-17 02:48:52', '2020-09-17 02:48:52'),
(258, '22', NULL, 'pink', '128gb', '75500', '2020-09-17 02:48:52', '2020-09-17 02:48:52'),
(260, '22', NULL, 'pink', '256gb', '95500', '2020-09-17 02:48:52', '2020-09-17 02:48:52'),
(261, '11', NULL, 'blue', '32gb', '45000', '2020-09-19 02:21:58', '2020-09-19 02:21:58'),
(262, '11', NULL, 'blue', '64gb', '28000', '2020-09-19 02:21:58', '2020-09-19 02:21:58'),
(263, '11', NULL, 'pink', '64gb', '45500', '2020-09-19 02:21:58', '2020-09-19 02:21:58'),
(264, '11', NULL, 'pink', '32gb', '55500', '2020-09-19 02:21:58', '2020-09-19 02:21:58'),
(265, '18', NULL, 'lightbrown', '32gb', '45000', '2020-09-19 02:22:32', '2020-09-19 02:22:32'),
(266, '18', NULL, 'lightbrown', '64gb', '65500', '2020-09-19 02:22:32', '2020-09-19 02:22:32'),
(267, '18', NULL, 'lightyellow', '64gb', '55500', '2020-09-19 02:22:32', '2020-09-19 02:22:32'),
(268, '19', NULL, 'pink', '32gb', '45000', '2020-09-19 02:23:16', '2020-09-19 02:23:16'),
(269, '19', NULL, 'pink', '64gb', '55000', '2020-09-19 02:23:16', '2020-09-19 02:23:16'),
(270, '20', NULL, 'pink', '32gb', '45000', '2020-09-19 02:24:07', '2020-09-19 02:24:07'),
(271, '20', NULL, 'pink', '64gb', '70500', '2020-09-19 02:24:07', '2020-09-19 02:24:07'),
(272, '20', NULL, 'light pink', '128gb', '85500', '2020-09-19 02:24:07', '2020-09-19 02:24:07'),
(273, '21', NULL, 'black', '32gb', '25000', '2020-09-19 02:25:25', '2020-09-19 02:25:25'),
(274, '21', NULL, 'blue', '64gb', '55500', '2020-09-19 02:25:25', '2020-09-19 02:25:25'),
(275, '21', NULL, 'blue', '128gb', '85500', '2020-09-19 02:25:25', '2020-09-19 02:25:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
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
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_sliders`
--
ALTER TABLE `blog_sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `price_calculator_products`
--
ALTER TABLE `price_calculator_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `price_variations`
--
ALTER TABLE `price_variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sell_products`
--
ALTER TABLE `sell_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `sma_products`
--
ALTER TABLE `sma_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `variations`
--
ALTER TABLE `variations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
