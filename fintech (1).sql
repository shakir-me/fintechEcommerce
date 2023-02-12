-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 11:17 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fintech`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `about_us` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `about_us`, `about_title`, `image`, `description`, `long_description`, `created_at`, `updated_at`) VALUES
(1, 'ABOUT OUR ONLINE STORE', 'ABOUT TRADING SYSTEM FOR ANY PLATFORM', '38856png', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 18px; line-height: 1.7; color: rgb(84, 84, 84); font-family: \"Open Sans\", sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Nibh Metus Arcu Morbi A. At Nibh Posuere Sagittis Eros Scelerisque. Elementum.</p><p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 18px; line-height: 1.7; color: rgb(84, 84, 84); font-family: \"Open Sans\", sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Hendrerit Convallis Fringilla Massa Augue. Elit Netus Nulla Consectetur Potenti Tincidunt Lobortis Nulla Urna Eu. Dictum Tempor Et Purus Molestie Integer Viverra. Dictum Imperdiet Enim Quam Ut Morbi Vel Libero.</p><span style=\"color: rgb(84, 84, 84); font-family: \"Open Sans\", sans-serif; font-size: 18px; letter-spacing: normal; text-transform: capitalize; background-color: var(--bs-card-bg); font-weight: var(--bs-body-font-weight); text-align: var(--bs-body-text-align);\">Lorem Ipsum Dolor Sit Amet Consectetur. Sit Nunc Id Mauris Nibh Bibendum Tellus Nec Sit. Orci Proin Dolor Ipsum Mi Et Sit Condimentum Pulvinar. Purus Facilisis Eget Sed Dictum Donec Commodo. Enim Pellentesque Ac Eget Tristique. Aliquet Mattis Aliquam Id Aliquet. Iaculis Nunc Nisi Mus Egestas Euismod At.</span>gestas Euismod At.', 'Lorem Ipsum Dolor Sit Amet Consectetur. Nibh Metus Arcu Morbi A. At Nibh Posuere Sagittis Eros Scelerisque. Elementum.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Hendrerit Convallis Fringilla Massa Augue. Elit Netus Nulla Consectetur Potenti Tincidunt Lobortis Nulla Urna Eu. Dictum Tempor Et Purus Molestie Integer Viverra. Dictum Imperdiet Enim Quam Ut Morbi Vel Libero.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Sit Nunc Id Mauris Nibh Bibendum Tellus Nec Sit. Orci Proin Dolor Ipsum Mi Et Sit Condimentum Pulvinar. Purus Facilisis Eget Sed Dictum Donec Commodo. Enim Pellentesque Ac Eget Tristique. Aliquet Mattis Aliquam Id Aliquet. Iaculis Nunc Nisi Mus Egestas Euismod At.', '2023-02-07 10:04:04', '2023-02-07 10:21:06');

-- --------------------------------------------------------

--
-- Table structure for table `afeatures`
--

CREATE TABLE `afeatures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `afeatures`
--

INSERT INTO `afeatures` (`id`, `title`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(3, 'COMMENTS', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi. Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 10:02:02', '2023-02-06 10:02:02'),
(4, 'MEDIA', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi. Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 10:02:51', '2023-02-06 10:02:51'),
(5, 'CONTACT FORMS', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi. Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 10:03:07', '2023-02-06 10:03:07'),
(6, 'EMBEDDED CONTENT FROM OTHER WEBSITES', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi. Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc', NULL, '2023-02-06 10:03:41', '2023-02-06 10:03:41'),
(7, 'HOW LONG WE RETAIN YOUR DATA', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi. Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc', NULL, '2023-02-06 10:03:54', '2023-02-06 10:03:54'),
(8, 'WHAT RIGHTS YOU HAVE OVER YOUR DATA', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi. Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 10:04:08', '2023-02-06 10:04:26');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_slug`, `brand_image`, `created_at`, `updated_at`) VALUES
(2, 'Brand One', 'brand-one', 'backend/assets/images/63df4918e7856.webp', '2023-02-05 06:13:45', '2023-02-05 06:13:45'),
(3, 'Brand Two', 'brand-two', 'backend/assets/images/63df492f7fe11.webp', '2023-02-05 06:14:07', '2023-02-05 06:14:07'),
(4, 'Brand Three', 'brand-three', 'backend/assets/images/63df493d105e1.webp', '2023-02-05 06:14:21', '2023-02-05 06:14:21'),
(5, 'Brand Four', 'brand-four', 'backend/assets/images/63df494c4fc06.webp', '2023-02-05 06:14:36', '2023-02-05 06:14:36'),
(6, 'Brand Five', 'brand-five', 'backend/assets/images/63df495e08b59.webp', '2023-02-05 06:14:54', '2023-02-05 06:14:54'),
(7, 'Brand Six', 'brand-six', 'backend/assets/images/63df7aa1e9183.webp', '2023-02-05 09:45:06', '2023-02-05 09:45:06');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_slug`, `created_at`, `updated_at`) VALUES
(3, 'Expert Advisor', 'expert-advisor', '2023-02-02 07:50:02', '2023-02-05 06:12:02'),
(4, 'Indicators', 'indicators', '2023-02-05 06:12:13', '2023-02-05 06:12:13'),
(5, 'Trading System', 'trading-system', '2023-02-05 06:12:26', '2023-02-05 06:12:26'),
(6, 'Trading Tools', 'trading-tools', '2023-02-05 06:12:41', '2023-02-05 06:12:41'),
(7, 'Source Code', 'source-code', '2023-02-05 06:12:54', '2023-02-05 06:12:54');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `address`, `phone`, `description`, `created_at`, `updated_at`) VALUES
(1, 'shakir ahmed', 'admin@gmail.com', 'news', 'Dhaka Mirpur 2', NULL, 'sss', '2023-02-06 05:23:12', '2023-02-06 05:23:12');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupon_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_rate` int(11) DEFAULT NULL,
  `coupon_use` int(11) DEFAULT NULL,
  `use_amount` int(11) DEFAULT NULL,
  `coupon_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_name`, `coupon_type`, `coupon_rate`, `coupon_use`, `use_amount`, `coupon_status`, `created_at`, `updated_at`) VALUES
(1, 'db8850', 'Percent', 20, 2, 20, 'Active', '2023-02-02 09:55:06', '2023-02-02 10:51:08');

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
-- Table structure for table `features`
--

CREATE TABLE `features` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `features`
--

INSERT INTO `features` (`id`, `heading`, `description`, `photo`, `created_at`, `updated_at`) VALUES
(2, 'COMMENTS', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 05:33:19', '2023-02-06 05:33:19'),
(3, 'MEDIA', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 05:33:42', '2023-02-06 05:33:42'),
(4, 'CONTACT FORMS', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc', NULL, '2023-02-06 05:33:59', '2023-02-06 05:33:59'),
(5, 'EMBEDDED CONTENT FROM OTHER WEBSITES', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc', NULL, '2023-02-06 05:34:11', '2023-02-06 05:34:11'),
(6, 'HOW LONG WE RETAIN YOUR DATA', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 05:34:30', '2023-02-06 05:34:30'),
(7, 'WHAT RIGHTS YOU HAVE OVER YOUR DATA', 'Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.\r\n\r\nLorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.', NULL, '2023-02-06 05:34:46', '2023-02-06 05:36:39');

-- --------------------------------------------------------

--
-- Table structure for table `it_works`
--

CREATE TABLE `it_works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memberships`
--

CREATE TABLE `memberships` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `membership_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_details` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `life_time_charge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expires_at` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `monthly_charge` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `memberships`
--

INSERT INTO `memberships` (`id`, `membership_name`, `membership_price`, `membership_details`, `life_time_charge`, `expires_at`, `created_at`, `updated_at`, `monthly_charge`) VALUES
(3, 'Basic Membership', '300', 'You Can Get Free Access To All EAs Of My Channel With  Lifetime Free Updates For A One-Time Fee Of $300 & Monthly $10 Payment', '1000', '3', '2023-02-02 10:07:45', '2023-02-05 11:29:29', '100'),
(4, 'Vip Membership', '300', 'You Can Get Free Access To All EAs Of My Channel With  Lifetime Free Updates For A One-Time Fee Of $300 & Monthly $10 Payment', '500', '2', '2023-02-05 11:30:14', '2023-02-05 11:30:14', '10'),
(5, 'Elite Membership', '400', 'You Can Get Free Access To All EAs Of My Channel With  Lifetime Free Updates For A One-Time Fee Of $300 & Monthly $10 Payment', '800', '1', '2023-02-05 11:30:49', '2023-02-05 11:30:49', '15'),
(6, 'Premium', '500', 'You Can Get Free Access To All EAs Of My Channel With  Lifetime Free Updates For A One-Time Fee Of $300 & Monthly $10 Payment', '1000', '3', '2023-02-05 11:31:24', '2023-02-05 11:31:24', '20');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_12_123240_create_categories_table', 1),
(6, '2023_01_14_061448_create_sub_categories_table', 1),
(7, '2023_01_14_071700_create_brands_table', 1),
(8, '2023_01_15_072928_create_products_table', 1),
(9, '2023_01_16_103245_create_memberships_table', 1),
(10, '2023_01_17_054611_create_testimonials_table', 1),
(11, '2023_01_17_080909_create_coupons_table', 1),
(12, '2023_01_17_135551_create_features_table', 1),
(13, '2023_01_18_121456_create_socials_table', 1),
(14, '2023_01_18_150010_create_afeatures_table', 1),
(15, '2023_01_19_053753_create_pages_table', 1),
(16, '2023_01_19_102013_create_subscribers_table', 1),
(17, '2023_01_23_075959_create_request_products_table', 1),
(18, '2023_01_23_105927_add_google_id_column', 1),
(19, '2023_01_24_124156_create_wish_lists_table', 1),
(20, '2023_01_28_032107_create_orders_table', 1),
(21, '2023_01_28_032627_create_order_details_table', 1),
(22, '2023_01_28_172531_create_recharges_table', 1),
(23, '2023_01_30_182040_create_subscriptions_table', 1),
(24, '2023_02_02_125125_create_settings_table', 2),
(25, '2023_02_06_111205_create_contacts_table', 3),
(26, '2023_02_07_153745_create_it_works_table', 4),
(27, '2023_02_07_155549_create_abouts_table', 5),
(28, '2023_02_08_125135_create_reviews_table', 6),
(29, '2023_02_12_140626_create_request_bookings_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_qty` int(11) NOT NULL,
  `total_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `coupon_amount` int(11) DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(199) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `coupon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `refund` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `order_no`, `total_qty`, `total_price`, `coupon_amount`, `payment_status`, `payment_method`, `coupon`, `created_at`, `updated_at`, `refund`, `balance`) VALUES
(6, 2, '230209012654', 1, '500.00', 0, NULL, 'Paypal', '', '2023-02-09 07:28:08', '2023-02-09 07:28:08', '50', NULL),
(7, 3, '230209041712', 1, '200.00', 0, NULL, 'Paypal', '', '2023-02-09 10:17:29', '2023-02-09 10:17:29', '20', NULL),
(8, 4, '230209050128', 1, '500.00', 0, NULL, 'Paypal', '', '2023-02-09 11:02:35', '2023-02-09 11:02:35', '50', NULL),
(9, 3, '230209050409', 1, '500.00', 0, NULL, 'Paypal', '', '2023-02-09 11:04:27', '2023-02-09 11:04:27', '50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_qty` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_price` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rstatus` int(11) DEFAULT 1,
  `product_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_name`, `product_qty`, `product_price`, `unit_price`, `created_at`, `updated_at`, `rstatus`, `product_id`) VALUES
(8, 6, 'New Software Livewire', '1', '500', 500, '2023-02-09 07:28:08', '2023-02-09 07:28:08', 1, 8),
(9, 7, 'New App  Mobile', '1', '200', 200, '2023-02-09 10:17:29', '2023-02-09 10:17:29', 1, NULL),
(10, 8, 'New Software Livewire', '1', '500', 500, '2023-02-09 11:02:35', '2023-02-09 11:02:35', 1, NULL),
(11, 9, 'New Software Livewire', '1', '500', 500, '2023-02-09 11:04:27', '2023-02-09 11:04:27', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_title_slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `page_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_title_slug`, `page_description`, `created_at`, `updated_at`) VALUES
(1, 'COMMENTS', 'comments', '<p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.</p><p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.</p>', '2023-02-02 11:25:54', '2023-02-07 09:42:47'),
(2, 'MEDIA', 'media', '<p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.</p><p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.</p>', '2023-02-07 09:43:05', '2023-02-07 09:43:05'),
(3, 'CONTACT FORMS', 'contact-forms', '<p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.</p><p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.</p>', '2023-02-07 09:43:18', '2023-02-07 09:43:18'),
(4, 'EMBEDDED CONTENT FROM OTHER WEBSITES', 'embedded-content-from-other-websites', '<p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.</p><p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.</p>', '2023-02-07 09:43:37', '2023-02-07 09:43:37'),
(5, 'HOW LONG WE RETAIN YOUR DATA', 'how-long-we-retain-your-data', '<p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.</p><p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.</p>', '2023-02-07 09:43:54', '2023-02-07 09:43:54'),
(6, 'WHAT RIGHTS YOU HAVE OVER YOUR DATA', 'what-rights-you-have-over-your-data', '<p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Eros Nec Ac Eget Blandit In. Eleifend Non Massa Viverra Etiam Faucibus Enim Porttitor. Leo Amet Sit Ultrices Egestas Sit Ultricies Adipiscing Pellentesque Morbi.</p><p class=\"privicey__content-dis\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 1.5; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Lorem Ipsum Dolor Sit Amet Consectetur. Dui Turpis In Turpis Duis Malesuada. Amet Pretium Id Gravida Aenean Egestas Dui Diam Aliquet Enim. Ut Risus Velit Felis Blandit Amet. Neque Consequat Commodo Id At Congue In Luctus Orci. Nisl In Odio Bibendum Ipsum Sem Duis Magna. Sed Nunc Nulla Orci Velit Id Posuere Eget. Ultrices At Erat Enim Malesuada Tristique Facilisis Dignissim Et Sed. Lacus Ultrices Mauris Pharetra Nunc.</p>', '2023-02-07 09:44:10', '2023-02-07 09:44:10');

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `specification` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `stock_warning` int(11) DEFAULT NULL,
  `buying_price` decimal(8,2) DEFAULT 0.00,
  `discount_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `discount_rate` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `is_free` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `product_short_desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification_ans` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_id` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visibility` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_title`, `product_slug`, `product_price`, `specification`, `description`, `thumbnail`, `images`, `product_code`, `tag`, `stock`, `stock_warning`, `buying_price`, `discount_type`, `discount_rate`, `discount_price`, `is_free`, `created_at`, `updated_at`, `product_short_desc`, `specification_ans`, `membership_id`, `visibility`, `status`) VALUES
(2, 3, NULL, 2, 'Operating Systems & Mac Software', 'Operating Systems & Mac Software', 'operating-systems-mac-software', '35.00', '[\"Discription\"]', '<h2 class=\"single__additional-title\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; font-size: 32px; border: 0px; vertical-align: baseline; color: rgb(32, 35, 74); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Operating Systems &amp; Mac Software</h2><p class=\"single__additional-dis1\" style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; line-height: 1.2; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Note: This EA Has Been Tested Only For Deriv, You Can Sign Up To A Deriv Account, And Fund With A Minimum Of $20.</p><h3 class=\"single__additional-dis2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 40px 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">FOR MT5</h3><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">For MT5 The File Now Comes With 6 Directories, The Indicator, Experts, Templates And The Thapellolib MT5, Sounds And Scripts Directories.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">The Thapelolib.Ex5 (File Not Folder), And The Sophia 3.0.Ex5, Should Also Be Copied To Your Experts/Advisors Directory In Your Data Folder. It Also Also Required That The Thapellolib.Ex5(File Not Folder) Should Be Copied To The Libraries Folder For Some Terminal Versions.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">The Indicators Should Be Copied To The Indicators Folder In Your Data Folder.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">The Template File Should Be Copied To The Template Folder In Your Data Folder.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Open Your Scripts In Your Data Folder, And Copy The Sophia Activator, And The Sophia Resizer For MT5 To The Scripts Folder.</p><h3 class=\"single__additional-rulestitle\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">EA Rules</h3><ul class=\"single__additional-rules\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; letter-spacing: normal;\"><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Rule 1: Don’t Run This Robot Without Reading The Installation GuideRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">2: A Trading Plan Is Required Before Using This Kindly Refer To Our GuideRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">3: Don’t Risk More Than 2% Of Your Available Capital On Any Single Trade.Rule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">4: Don’t Risk Your Last Money Refer To The GuideRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">5: Don’t Let This Robot Run The Whole Day Make Sure You Avoid Bad Market ConditionsRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">6: Don’t Be Greedy After Making Enough Profit / Reaching Your Daily TargetRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">7: Don’t Be Comfortable If You See That The Robot Is Making Some Loses Which You Don’t</li></ul>', 'backend/assets/images/63df54359aa1c.webp', '[\"backend\\/assets\\/images\\/63df5435be76d.webp\",\"backend\\/assets\\/images\\/63df5435d6721.webp\",\"backend\\/assets\\/images\\/63df5435f0c30.webp\",\"backend\\/assets\\/images\\/63df5436164a0.webp\"]', 'DQLVT-26534', 'wen', NULL, NULL, NULL, 'Flat', '30.00', '5.00', 1, '2023-02-05 07:01:10', '2023-02-05 10:14:19', 'The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.  Platform: MT4 And MT5. Currency Pairs: Synthetic Index. Forex Trading Time: 1 Minute .Trading Sessions: Non-Volatile Trading Sessions. Broker: Deriv Only .Makes Awesome Profits. Trading Assistant Will Be Available For This EA Shortly. Back Testing Not Allowed. Fewer Input V Ariables. Works But Does Not Trade On Demo.', '[\"Specifications\"]', '3', NULL, '1'),
(3, 3, NULL, 3, 'Semi-Auto Chemistry Analyser', 'Semi-Auto Chemistry Analyser', 'semi-auto-chemistry-analyser', '100.00', '[\"Discription\"]', '<p style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 2; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.</p><ul class=\"single__product-featurlist\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 16px; line-height: 2; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\"><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Platform: MT4 And MT5.</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Currency Pairs: Synthetic Index. Forex</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Trading Time: 1 Minute</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">.Trading Sessions: Non-Volatile Trading Sessions.</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Broker: Deriv Only</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">.Makes Awesome Profits.</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Trading Assistant Will Be Available For This EA Shortly.</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Back Testing Not Allowed.</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Fewer Input V Ariables.</li><li style=\"margin: 0px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Works But Does Not Trade On Demo.</li></ul>', 'backend/assets/images/63e0e23d2f082.webp', '[\"backend\\/assets\\/images\\/63e0e23d4dc65.webp\",\"backend\\/assets\\/images\\/63e0e23d68d7e.webp\",\"backend\\/assets\\/images\\/63e0e23d82b61.webp\"]', 'VRRSG-67282', 'new,update', NULL, NULL, NULL, 'Flat', '5.00', '95.00', 1, '2023-02-06 11:19:25', '2023-02-06 11:23:16', 'The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.  Platform: MT4 And MT5. Currency Pairs: Synthetic Index. Forex Trading Time: 1 Minute .Trading Sessions: Non-Volatile Trading Sessions. Broker: Deriv Only .Makes Awesome Profits. Trading Assistant Will Be Available For This EA Shortly. Back Testing Not Allowed. Fewer Input V Ariables. Works But Does Not Trade On Demo.', '[\"Specifications\"]', NULL, NULL, '1'),
(4, 3, NULL, 3, 'Semi-Auto Computer', 'Semi-Auto Computer', 'semi-auto-computer', '300.00', '[\"Discription\",\"gg\"]', '<h2 class=\"single__additional-title\" style=\"margin-right: 0px; margin-bottom: 30px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; font-size: 32px; border: 0px; vertical-align: baseline; color: rgb(32, 35, 74); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Operating Systems &amp; Mac Software</h2><p class=\"single__additional-dis1\" style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; line-height: 1.2; color: rgb(84, 84, 84); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Note: This EA Has Been Tested Only For Deriv, You Can Sign Up To A Deriv Account, And Fund With A Minimum Of $20.</p><h3 class=\"single__additional-dis2\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 40px 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">FOR MT5</h3><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">For MT5 The File Now Comes With 6 Directories, The Indicator, Experts, Templates And The Thapellolib MT5, Sounds And Scripts Directories.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">The Thapelolib.Ex5 (File Not Folder), And The Sophia 3.0.Ex5, Should Also Be Copied To Your Experts/Advisors Directory In Your Data Folder. It Also Also Required That The Thapellolib.Ex5(File Not Folder) Should Be Copied To The Libraries Folder For Some Terminal Versions.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">The Indicators Should Be Copied To The Indicators Folder In Your Data Folder.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">The Template File Should Be Copied To The Template Folder In Your Data Folder.</p><p style=\"margin-right: 0px; margin-bottom: 40px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">Open Your Scripts In Your Data Folder, And Copy The Sophia Activator, And The Sophia Resizer For MT5 To The Scripts Folder.</p><h3 class=\"single__additional-rulestitle\" style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal;\">EA Rules</h3><ul class=\"single__additional-rules\" style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; letter-spacing: normal;\"><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">Rule 1: Don’t Run This Robot Without Reading The Installation GuideRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">2: A Trading Plan Is Required Before Using This Kindly Refer To Our GuideRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">3: Don’t Risk More Than 2% Of Your Available Capital On Any Single Trade.Rule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">4: Don’t Risk Your Last Money Refer To The GuideRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">5: Don’t Let This Robot Run The Whole Day Make Sure You Avoid Bad Market ConditionsRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">6: Don’t Be Greedy After Making Enough Profit / Reaching Your Daily TargetRule</li><li style=\"margin: 0px 0px 10px; padding: 0px; outline: none; border: 0px; vertical-align: baseline; list-style: none;\">7: Don’t Be Comfortable If You See That The Robot Is Making Some Loses Which You Don’t</li></ul>', 'backend/assets/images/63e2317f22a24.webp', '[\"backend\\/assets\\/images\\/63e2317f4434f.webp\",\"backend\\/assets\\/images\\/63e2317f5e6ce.webp\"]', 'XYEER-91532', 'new', NULL, NULL, NULL, NULL, '0.00', '0.00', 1, '2023-02-07 11:09:51', '2023-02-07 11:09:51', 'The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.  Platform: MT4 And MT5. Currency Pairs: Synthetic Index. Forex Trading Time: 1 Minute .Trading Sessions: Non-Volatile Trading Sessions. Broker: Deriv Only .Makes Awesome Profits. Trading Assistant Will Be Available For This EA Shortly. Back Testing Not Allowed. Fewer Input V Ariables. Works But Does Not Trade On Demo.', '[\"Specifications\",\"ggg\"]', '3', '6', '1'),
(5, 3, NULL, 3, 'Operating Systems Dell', 'Operating Systems Dell', 'operating-systems-dell', '400.00', '[\"Discription\",null]', '<p><div class=\"related__products\" style=\"box-sizing: border-box; margin: 100px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"></div></p><div class=\"single__additional\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"><div class=\"container\" style=\"box-sizing: border-box; margin: 0px auto; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * 0.5); text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; --bs-gutter-x:1.5rem; --bs-gutter-y:0; width: 1140px; max-width: 1140px;\"><div class=\"tab-content\" id=\"pills-tabContent\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\" tabindex=\"0\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; transition: opacity 0.15s linear 0s; display: block;\"><div class=\"single__additional-content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"single__additional-wrapper\" style=\"box-sizing: border-box; margin: 70px 0px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; display: grid; grid-template-columns: auto auto;\"><div class=\"single__additional-left\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 30px 0px 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><h2 class=\"single__additional-title\" style=\"box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 32px; border: 0px; vertical-align: baseline; color: rgb(32, 35, 74);\">Operating Systems &amp; Mac Software</h2><p class=\"single__additional-dis1\" style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; line-height: 1.2; color: rgb(84, 84, 84);\">Note: This EA Has Been Tested Only For Deriv, You Can Sign Up To A Deriv Account, And Fund With A Minimum Of $20.</p><h3 class=\"single__additional-dis2\" style=\"box-sizing: border-box; margin: 0px; padding: 40px 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">FOR MT5</h3><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">For MT5 The File Now Comes With 6 Directories, The Indicator, Experts, Templates And The Thapellolib MT5, Sounds And Scripts Directories.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Thapelolib.Ex5 (File Not Folder), And The Sophia 3.0.Ex5, Should Also Be Copied To Your Experts/Advisors Directory In Your Data Folder. It Also Also Required That The Thapellolib.Ex5(File Not Folder) Should Be Copied To The Libraries Folder For Some Terminal Versions.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Indicators Should Be Copied To The Indicators Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Template File Should Be Copied To The Template Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">Open Your Scripts In Your Data Folder, And Copy The Sophia Activator, And The Sophia Resizer For MT5 To The Scripts Folder.</p><h3 class=\"single__additional-rulestitle\" style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">EA Rules</h3><ul class=\"single__additional-rules\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">Rule 1: Don’t Run This Robot Without Reading The Installation GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">2: A Trading Plan Is Required Before Using This Kindly Refer To Our GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">3: Don’t Risk More Than 2% Of Your Available Capital On Any Single Trade.Rule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">4: Don’t Risk Your Last Money Refer To The GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">5: Don’t Let This Robot Run The Whole Day Make Sure You Avoid Bad Market ConditionsRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">6: Don’t Be Greedy After Making Enough Profit / Reaching Your Daily TargetRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">7: Don’t Be Comfortable If You See That The Robot Is Making Some Loses Which You Don’t</li></ul></div><div class=\"single__additional-right\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-01.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"><span>&nbsp;</span><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-02.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"></div></div></div></div></div></div></div>', 'backend/assets/images/63e2332544d50.webp', '[\"backend\\/assets\\/images\\/63e233256065f.webp\",\"backend\\/assets\\/images\\/63e2332579a5f.webp\"]', 'ORQMD-74256', 'eeww,rr', NULL, NULL, NULL, NULL, '0.00', '0.00', 1, '2023-02-07 11:16:53', '2023-02-07 11:16:53', 'The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.  Platform: MT4 And MT5. Currency Pairs: Synthetic Index. Forex Trading Time: 1 Minute .Trading Sessions: Non-Volatile Trading Sessions. Broker: Deriv Only .Makes Awesome Profits. Trading Assistant Will Be Available For This EA Shortly. Back Testing Not Allowed. Fewer Input V Ariables. Works But Does Not Trade On Demo.', '[\"Specifications\",\"Specifications\"]', NULL, NULL, '1'),
(6, 3, NULL, 2, 'Operating Systems & Test', 'Operating Systems & Test', 'operating-systems-test', '200.00', '[\"Discription\",\"Discription\"]', '<p><div class=\"related__products\" style=\"box-sizing: border-box; margin: 100px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"></div></p><div class=\"single__additional\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"><div class=\"container\" style=\"box-sizing: border-box; margin: 0px auto; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * 0.5); text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; --bs-gutter-x:1.5rem; --bs-gutter-y:0; width: 1140px; max-width: 1140px;\"><div class=\"tab-content\" id=\"pills-tabContent\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\" tabindex=\"0\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; transition: opacity 0.15s linear 0s; display: block;\"><div class=\"single__additional-content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"single__additional-wrapper\" style=\"box-sizing: border-box; margin: 70px 0px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; display: grid; grid-template-columns: auto auto;\"><div class=\"single__additional-left\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 30px 0px 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><h2 class=\"single__additional-title\" style=\"box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 32px; border: 0px; vertical-align: baseline; color: rgb(32, 35, 74);\">Operating Systems &amp; Mac Software</h2><p class=\"single__additional-dis1\" style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; line-height: 1.2; color: rgb(84, 84, 84);\">Note: This EA Has Been Tested Only For Deriv, You Can Sign Up To A Deriv Account, And Fund With A Minimum Of $20.</p><h3 class=\"single__additional-dis2\" style=\"box-sizing: border-box; margin: 0px; padding: 40px 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">FOR MT5</h3><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">For MT5 The File Now Comes With 6 Directories, The Indicator, Experts, Templates And The Thapellolib MT5, Sounds And Scripts Directories.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Thapelolib.Ex5 (File Not Folder), And The Sophia 3.0.Ex5, Should Also Be Copied To Your Experts/Advisors Directory In Your Data Folder. It Also Also Required That The Thapellolib.Ex5(File Not Folder) Should Be Copied To The Libraries Folder For Some Terminal Versions.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Indicators Should Be Copied To The Indicators Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Template File Should Be Copied To The Template Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">Open Your Scripts In Your Data Folder, And Copy The Sophia Activator, And The Sophia Resizer For MT5 To The Scripts Folder.</p><h3 class=\"single__additional-rulestitle\" style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">EA Rules</h3><ul class=\"single__additional-rules\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">Rule 1: Don’t Run This Robot Without Reading The Installation GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">2: A Trading Plan Is Required Before Using This Kindly Refer To Our GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">3: Don’t Risk More Than 2% Of Your Available Capital On Any Single Trade.Rule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">4: Don’t Risk Your Last Money Refer To The GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">5: Don’t Let This Robot Run The Whole Day Make Sure You Avoid Bad Market ConditionsRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">6: Don’t Be Greedy After Making Enough Profit / Reaching Your Daily TargetRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">7: Don’t Be Comfortable If You See That The Robot Is Making Some Loses Which You Don’t</li></ul></div><div class=\"single__additional-right\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-01.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"><span>&nbsp;</span><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-02.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"></div></div></div></div></div></div></div>', 'backend/assets/images/63e2341184895.webp', '[\"backend\\/assets\\/images\\/63e234119ff09.webp\",\"backend\\/assets\\/images\\/63e23411b8ecd.webp\"]', 'RJIXN-51317', 'neww,dd', NULL, NULL, NULL, NULL, '0.00', '0.00', 1, '2023-02-07 11:20:49', '2023-02-07 11:20:49', 'The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.  Platform: MT4 And MT5. Currency Pairs: Synthetic Index. Forex Trading Time: 1 Minute .Trading Sessions: Non-Volatile Trading Sessions. Broker: Deriv Only .Makes Awesome Profits. Trading Assistant Will Be Available For This EA Shortly. Back Testing Not Allowed. Fewer Input V Ariables. Works But Does Not Trade On Demo.', '[\"Specifications\",\"Specifications\"]', NULL, NULL, '1'),
(7, 3, NULL, 2, 'New Software', 'New Software', 'new-software', '300.00', '[\"Discription\"]', '<p><div class=\"related__products\" style=\"box-sizing: border-box; margin: 100px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"></div></p><div class=\"single__additional\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"><div class=\"container\" style=\"box-sizing: border-box; margin: 0px auto; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * 0.5); text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; --bs-gutter-x:1.5rem; --bs-gutter-y:0; width: 1140px; max-width: 1140px;\"><div class=\"tab-content\" id=\"pills-tabContent\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\" tabindex=\"0\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; transition: opacity 0.15s linear 0s; display: block;\"><div class=\"single__additional-content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"single__additional-wrapper\" style=\"box-sizing: border-box; margin: 70px 0px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; display: grid; grid-template-columns: auto auto;\"><div class=\"single__additional-left\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 30px 0px 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><h2 class=\"single__additional-title\" style=\"box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 32px; border: 0px; vertical-align: baseline; color: rgb(32, 35, 74);\">Operating Systems &amp; Mac Software</h2><p class=\"single__additional-dis1\" style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; line-height: 1.2; color: rgb(84, 84, 84);\">Note: This EA Has Been Tested Only For Deriv, You Can Sign Up To A Deriv Account, And Fund With A Minimum Of $20.</p><h3 class=\"single__additional-dis2\" style=\"box-sizing: border-box; margin: 0px; padding: 40px 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">FOR MT5</h3><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">For MT5 The File Now Comes With 6 Directories, The Indicator, Experts, Templates And The Thapellolib MT5, Sounds And Scripts Directories.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Thapelolib.Ex5 (File Not Folder), And The Sophia 3.0.Ex5, Should Also Be Copied To Your Experts/Advisors Directory In Your Data Folder. It Also Also Required That The Thapellolib.Ex5(File Not Folder) Should Be Copied To The Libraries Folder For Some Terminal Versions.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Indicators Should Be Copied To The Indicators Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Template File Should Be Copied To The Template Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">Open Your Scripts In Your Data Folder, And Copy The Sophia Activator, And The Sophia Resizer For MT5 To The Scripts Folder.</p><h3 class=\"single__additional-rulestitle\" style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">EA Rules</h3><ul class=\"single__additional-rules\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">Rule 1: Don’t Run This Robot Without Reading The Installation GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">2: A Trading Plan Is Required Before Using This Kindly Refer To Our GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">3: Don’t Risk More Than 2% Of Your Available Capital On Any Single Trade.Rule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">4: Don’t Risk Your Last Money Refer To The GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">5: Don’t Let This Robot Run The Whole Day Make Sure You Avoid Bad Market ConditionsRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">6: Don’t Be Greedy After Making Enough Profit / Reaching Your Daily TargetRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">7: Don’t Be Comfortable If You See That The Robot Is Making Some Loses Which You Don’t</li></ul></div><div class=\"single__additional-right\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-01.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"><span>&nbsp;</span><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-02.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"></div></div></div></div></div></div></div>', 'backend/assets/images/63e234aea6ab3.webp', '[\"backend\\/assets\\/images\\/63e234aebfa9f.webp\",\"backend\\/assets\\/images\\/63e234aed9627.webp\"]', 'XAAUX-19993', 'ff', NULL, NULL, NULL, NULL, '0.00', '0.00', 1, '2023-02-07 11:23:26', '2023-02-07 11:23:26', NULL, '[\"Specifications\"]', NULL, NULL, '1');
INSERT INTO `products` (`id`, `category_id`, `subcategory_id`, `brand_id`, `product_name`, `product_title`, `product_slug`, `product_price`, `specification`, `description`, `thumbnail`, `images`, `product_code`, `tag`, `stock`, `stock_warning`, `buying_price`, `discount_type`, `discount_rate`, `discount_price`, `is_free`, `created_at`, `updated_at`, `product_short_desc`, `specification_ans`, `membership_id`, `visibility`, `status`) VALUES
(8, 3, NULL, 2, 'New Software Livewire', 'New Software Livewire', 'new-software-livewire', '500.00', '[null]', '<p><div class=\"related__products\" style=\"box-sizing: border-box; margin: 100px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"></div></p><div class=\"single__additional\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"><div class=\"container\" style=\"box-sizing: border-box; margin: 0px auto; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * 0.5); text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; --bs-gutter-x:1.5rem; --bs-gutter-y:0; width: 1140px; max-width: 1140px;\"><div class=\"tab-content\" id=\"pills-tabContent\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\" tabindex=\"0\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; transition: opacity 0.15s linear 0s; display: block;\"><div class=\"single__additional-content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"single__additional-wrapper\" style=\"box-sizing: border-box; margin: 70px 0px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; display: grid; grid-template-columns: auto auto;\"><div class=\"single__additional-left\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 30px 0px 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><h2 class=\"single__additional-title\" style=\"box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 32px; border: 0px; vertical-align: baseline; color: rgb(32, 35, 74);\">Operating Systems &amp; Mac Software</h2><p class=\"single__additional-dis1\" style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; line-height: 1.2; color: rgb(84, 84, 84);\">Note: This EA Has Been Tested Only For Deriv, You Can Sign Up To A Deriv Account, And Fund With A Minimum Of $20.</p><h3 class=\"single__additional-dis2\" style=\"box-sizing: border-box; margin: 0px; padding: 40px 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">FOR MT5</h3><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">For MT5 The File Now Comes With 6 Directories, The Indicator, Experts, Templates And The Thapellolib MT5, Sounds And Scripts Directories.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Thapelolib.Ex5 (File Not Folder), And The Sophia 3.0.Ex5, Should Also Be Copied To Your Experts/Advisors Directory In Your Data Folder. It Also Also Required That The Thapellolib.Ex5(File Not Folder) Should Be Copied To The Libraries Folder For Some Terminal Versions.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Indicators Should Be Copied To The Indicators Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Template File Should Be Copied To The Template Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">Open Your Scripts In Your Data Folder, And Copy The Sophia Activator, And The Sophia Resizer For MT5 To The Scripts Folder.</p><h3 class=\"single__additional-rulestitle\" style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">EA Rules</h3><ul class=\"single__additional-rules\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">Rule 1: Don’t Run This Robot Without Reading The Installation GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">2: A Trading Plan Is Required Before Using This Kindly Refer To Our GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">3: Don’t Risk More Than 2% Of Your Available Capital On Any Single Trade.Rule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">4: Don’t Risk Your Last Money Refer To The GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">5: Don’t Let This Robot Run The Whole Day Make Sure You Avoid Bad Market ConditionsRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">6: Don’t Be Greedy After Making Enough Profit / Reaching Your Daily TargetRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">7: Don’t Be Comfortable If You See That The Robot Is Making Some Loses Which You Don’t</li></ul></div><div class=\"single__additional-right\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-01.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"><span>&nbsp;</span><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-02.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"></div></div></div></div></div></div></div>', 'backend/assets/images/63e23505c746a.webp', '[\"backend\\/assets\\/images\\/63e2350600eb3.webp\",\"backend\\/assets\\/images\\/63e2350627aad.webp\"]', 'OVQOB-78444', 'dff', NULL, NULL, NULL, NULL, '0.00', '500.00', 1, '2023-02-07 11:24:54', '2023-02-09 12:13:49', 'The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.  Platform: MT4 And MT5. Currency Pairs: Synthetic Index. Forex Trading Time: 1 Minute .Trading Sessions: Non-Volatile Trading Sessions. Broker: Deriv Only .Makes Awesome Profits. Trading Assistant Will Be Available For This EA Shortly. Back Testing Not Allowed. Fewer Input V Ariables. Works But Does Not Trade On Demo.', '[\"Specifications\"]', NULL, NULL, '1'),
(9, 3, NULL, 3, 'New App  Mobile', 'New App  Mobile', 'new-app-mobile', '200.00', '[\"Discription\"]', '<p><div class=\"related__products\" style=\"box-sizing: border-box; margin: 100px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"></div></p><div class=\"single__additional\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; color: rgb(0, 1, 51); font-family: &quot;Open Sans&quot;, sans-serif; font-size: 16px; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);\"><div class=\"container\" style=\"box-sizing: border-box; margin: 0px auto; padding-top: 0px; padding-right: calc(var(--bs-gutter-x) * 0.5); padding-bottom: 0px; padding-left: calc(var(--bs-gutter-x) * 0.5); text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; --bs-gutter-x:1.5rem; --bs-gutter-y:0; width: 1140px; max-width: 1140px;\"><div class=\"tab-content\" id=\"pills-tabContent\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"tab-pane fade show active\" id=\"pills-home\" role=\"tabpanel\" aria-labelledby=\"pills-home-tab\" tabindex=\"0\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; transition: opacity 0.15s linear 0s; display: block;\"><div class=\"single__additional-content\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><div class=\"single__additional-wrapper\" style=\"box-sizing: border-box; margin: 70px 0px 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; display: grid; grid-template-columns: auto auto;\"><div class=\"single__additional-left\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 30px 0px 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><h2 class=\"single__additional-title\" style=\"box-sizing: border-box; margin: 0px 0px 30px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 32px; border: 0px; vertical-align: baseline; color: rgb(32, 35, 74);\">Operating Systems &amp; Mac Software</h2><p class=\"single__additional-dis1\" style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px; line-height: 1.2; color: rgb(84, 84, 84);\">Note: This EA Has Been Tested Only For Deriv, You Can Sign Up To A Deriv Account, And Fund With A Minimum Of $20.</p><h3 class=\"single__additional-dis2\" style=\"box-sizing: border-box; margin: 0px; padding: 40px 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">FOR MT5</h3><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">For MT5 The File Now Comes With 6 Directories, The Indicator, Experts, Templates And The Thapellolib MT5, Sounds And Scripts Directories.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Thapelolib.Ex5 (File Not Folder), And The Sophia 3.0.Ex5, Should Also Be Copied To Your Experts/Advisors Directory In Your Data Folder. It Also Also Required That The Thapellolib.Ex5(File Not Folder) Should Be Copied To The Libraries Folder For Some Terminal Versions.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Indicators Should Be Copied To The Indicators Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">The Template File Should Be Copied To The Template Folder In Your Data Folder.</p><p style=\"box-sizing: border-box; margin: 0px 0px 40px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; font-size: 22px;\">Open Your Scripts In Your Data Folder, And Copy The Sophia Activator, And The Sophia Resizer For MT5 To The Scripts Folder.</p><h3 class=\"single__additional-rulestitle\" style=\"box-sizing: border-box; margin: 0px 0px 20px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; font-weight: 500; line-height: 1.2; font-size: 1.75rem; border: 0px; vertical-align: baseline;\">EA Rules</h3><ul class=\"single__additional-rules\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">Rule 1: Don’t Run This Robot Without Reading The Installation GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">2: A Trading Plan Is Required Before Using This Kindly Refer To Our GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">3: Don’t Risk More Than 2% Of Your Available Capital On Any Single Trade.Rule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">4: Don’t Risk Your Last Money Refer To The GuideRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">5: Don’t Let This Robot Run The Whole Day Make Sure You Avoid Bad Market ConditionsRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">6: Don’t Be Greedy After Making Enough Profit / Reaching Your Daily TargetRule</li><li style=\"box-sizing: border-box; margin: 0px 0px 10px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline; list-style: none;\">7: Don’t Be Comfortable If You See That The Robot Is Making Some Loses Which You Don’t</li></ul></div><div class=\"single__additional-right\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; border: 0px; vertical-align: baseline;\"><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-01.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"><span>&nbsp;</span><img src=\"file:///C:/xampp/htdocs/officerweork/fintech-final/src/img/single-02.png\" alt=\"\" style=\"box-sizing: border-box; margin: 0px; padding: 0px; text-decoration: none; outline: none; text-transform: capitalize; vertical-align: baseline; border: 0px; max-width: 100%;\"></div></div></div></div></div></div></div>', 'backend/assets/images/63e23581e68da.webp', '[\"backend\\/assets\\/images\\/63e235820d32f.webp\",\"backend\\/assets\\/images\\/63e23582249fc.webp\"]', 'EHGDD-71443', 'new app', NULL, NULL, NULL, NULL, '0.00', '0.00', 1, '2023-02-07 11:26:58', '2023-02-07 11:26:58', NULL, '[\"Specifications\"]', NULL, NULL, '1'),
(10, 5, NULL, 4, 'New Product List', 'New Product List', 'new-product-list', '20000.00', '[\"Discription\",null]', '<p>fgfffffff</p>', 'backend/assets/images/63e4e92cbb36c.webp', '[\"backend\\/assets\\/images\\/63e4e92ce7cb0.webp\",\"backend\\/assets\\/images\\/63e4e92d0eb1b.webp\",\"backend\\/assets\\/images\\/63e4e92d285fa.webp\"]', 'VAEHJ-44455', 'sss,lll', NULL, NULL, NULL, NULL, '0.00', '0.00', 1, '2023-02-09 12:38:05', '2023-02-09 12:38:05', 'The Sophia 3.0 Forex Robot (Mother Of All Forex Robot) Is Now Available On Trading Kernel, For Only 25$, Instant And Lifetime Download.  Platform: MT4 And MT5. Currency Pairs: Synthetic Index. Forex Trading Time: 1 Minute .Trading Sessions: Non-Volatile Trading Sessions. Broker: Deriv Only .Makes Awesome Profits. Trading Assistant Will Be Available For This EA Shortly. Back Testing Not Allowed. Fewer Input V Ariables. Works But Does Not Trade On Demo.', '[\"Specifications\",null]', '[null,\"4\",\"5\",\"6\"]', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `recharges`
--

CREATE TABLE `recharges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(8,2) NOT NULL DEFAULT 0.00,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trans_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recharges`
--

INSERT INTO `recharges` (`id`, `user_id`, `amount`, `payment_method`, `trans_id`, `created_at`, `updated_at`) VALUES
(1, 2, '200.00', 'Paypal', 'f7f2e15e69b7', '2023-02-08 08:55:37', '2023-02-08 08:55:37');

-- --------------------------------------------------------

--
-- Table structure for table `request_bookings`
--

CREATE TABLE `request_bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `software_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `baker_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_security` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_account` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trading_server` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deposite_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imageone` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagetwo` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_bookings`
--

INSERT INTO `request_bookings` (`id`, `user_id`, `name`, `email`, `software_name`, `details`, `author_name`, `baker_name`, `trading_security`, `trading_account`, `trading_server`, `deposite_amount`, `value`, `created_at`, `updated_at`, `status`, `imageone`, `imagetwo`) VALUES
(1, 2, 'shakir khan', 'user@gmail.com', 'NFT', 'dd', 'dd', 'ddd', 'dd', 'dd', 'dd', 'dd', '[\"Build Indicator\",\"Build Indicator\",\"Build Indicator\"]', '2023-02-12 09:35:38', '2023-02-12 09:48:00', '2', '118.jpg', '933.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request_products`
--

CREATE TABLE `request_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `four` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `five` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `six` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `request_products`
--

INSERT INTO `request_products` (`id`, `user_id`, `name`, `one`, `two`, `three`, `four`, `created_at`, `updated_at`, `status`, `five`, `six`) VALUES
(3, NULL, 'What Would You Like To Do', 'Build Indicator', 'Build Indicator', 'Build Indicator', 'Build Indicator', '2023-02-12 05:08:14', '2023-02-12 05:08:14', NULL, 'Build Indicator', 'Build Indicator'),
(4, NULL, 'Select Platform ', 'Build Indicator', 'Build Indicator', 'Build Indicator', 'Build Indicator', '2023-02-12 05:09:14', '2023-02-12 05:09:14', NULL, 'Build Indicator', 'Build Indicator');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rating` int(11) DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_detail_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `rating`, `comment`, `order_detail_id`, `created_at`, `updated_at`) VALUES
(4, 4, 'Flutter Course for Beginners – 37-hour Cross Platform App Development TutorialFlutter Course for Beginners – 37-hour Cross Platform App Development Tutorial', 8, '2023-02-09 07:28:37', '2023-02-09 07:28:37');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `facebook`, `instagram`, `youtube`, `twitter`, `email`, `image`, `about`, `created_at`, `updated_at`) VALUES
(1, 'https://www.facebook.com/', 'https://www.instagram.com/', 'https://www.youtube.com/', 'https://twitter.com/', 'admin@gmail.com', '6955png', 'The Standard Chunk Of Lorem Ipsum Used Since The 1500s Is Reproduced Below For Those Interested', '2023-02-02 07:26:40', '2023-02-04 04:03:26');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `created_at`, `updated_at`) VALUES
(2, 'phpdeveloper.shakir@gmail.com', '2023-02-08 04:21:09', '2023-02-08 04:21:09');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `subscribe_id` bigint(20) UNSIGNED NOT NULL,
  `start_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expire_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `total_fee` decimal(8,2) NOT NULL DEFAULT 0.00,
  `subscribe_fee` decimal(8,2) NOT NULL DEFAULT 0.00,
  `monthly_charge` decimal(8,2) NOT NULL DEFAULT 0.00,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `membership_id` int(11) DEFAULT NULL,
  `monthly_charge_date` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `user_id`, `subscribe_id`, `start_date`, `expire_date`, `total_fee`, `subscribe_fee`, `monthly_charge`, `payment_method`, `created_at`, `updated_at`, `membership_id`, `monthly_charge_date`) VALUES
(1, 2, 4, '2023-02-08', 'lifetime', '500.00', '0.00', '0.00', 'Paypal', '2023-02-08 09:14:57', '2023-02-08 09:35:45', NULL, ''),
(2, 2, 3, '2023-02-08', 'lifetime', '1000.00', '0.00', '0.00', 'Paypal', '2023-02-08 09:16:20', '2023-02-08 09:16:20', NULL, ''),
(3, 3, 3, '2023-02-09', '2024-02-09', '400.00', '300.00', '100.00', 'Paypal', '2023-02-09 10:04:48', '2023-02-09 10:04:48', NULL, '2023-03-09'),
(4, 3, 5, '2023-02-09', 'lifetime', '415.00', '400.00', '15.00', 'Paypal', '2023-02-09 10:07:14', '2023-02-09 10:07:14', NULL, '2023-03-09'),
(5, 2, 3, '2023-02-11', 'lifetime', '1000.00', '0.00', '0.00', 'Paypal', '2023-02-11 07:04:51', '2023-02-11 07:04:51', NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `subcategory_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subcategory_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'H. Rackham', 'Director Open X', 'backend/assets/images/63e22ade50952.webp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s', '2023-02-07 10:41:34', '2023-02-07 10:41:34'),
(2, 'Shakir ahmed', 'full Stack developers', 'backend/assets/images/63e22afe4fd42.webp', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s', '2023-02-07 10:42:06', '2023-02-07 10:42:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subscribe_id` varchar(199) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `email`, `mobile`, `address`, `image`, `phone`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `balance`, `subscribe_id`) VALUES
(1, 'admin', 'Fintech', 'admin@gmail.com', '01740125204', 'Dhaka Mirpur 2', 'backend/assets/images/63db4f91b42cc.webp', 1740125204, NULL, '$2y$10$SRls1QAH1nf.J5LPaw6Sfu9.qt4wN6rkD20CwCYFoyuGf/qWCv9wa', NULL, '2023-02-02 05:08:41', '2023-02-02 10:37:12', NULL, NULL, NULL),
(2, 'user', 'shakir khan', 'user@gmail.com', '01740125204', 'Dhaka Mirpur', 'backend/assets/images/63e0d9f38bbd4.webp', 1740125204, '2023-02-02 06:27:48', '$2y$10$WpbHdU7NZXq85l.WRVpS2u0NWt6mCPU.ZMIqsTuzz3UJHKtakGRpS', NULL, '2023-02-02 05:08:41', '2023-02-11 07:04:51', NULL, NULL, '3'),
(3, 'user', 'shakir ahmed', 'shakir@gmail.com', NULL, NULL, 'backend/assets/images/63e4c4da99025.webp', NULL, '2023-02-08 06:30:57', '$2y$10$OZ.KY6tlJuHeWiOKLq3JgurwvH4aXrYoe/BPf/GmOPj545xkYhnDi', NULL, '2023-02-08 06:30:32', '2023-02-09 11:04:27', NULL, NULL, '5'),
(4, 'user', 'Text', 'test@gmail.com', NULL, NULL, 'backend/assets/images/63e4d25477472.webp', NULL, '2023-02-08 06:47:06', '$2y$10$amZQqYywIu/M.exNWGCTX.l7WypJJPpcH4obZDPOkRkV7dXSb6qkq', NULL, '2023-02-08 06:38:51', '2023-02-09 11:02:35', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wish_lists`
--

CREATE TABLE `wish_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wish_lists`
--

INSERT INTO `wish_lists` (`id`, `product_id`, `user_id`, `created_at`, `updated_at`) VALUES
(9, 9, 3, NULL, NULL),
(10, 8, 3, NULL, NULL),
(11, 7, 3, NULL, NULL),
(27, 2, 2, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `afeatures`
--
ALTER TABLE `afeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `it_works`
--
ALTER TABLE `it_works`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memberships`
--
ALTER TABLE `memberships`
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_user_id_foreign` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_order_id_foreign` (`order_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`),
  ADD KEY `products_subcategory_id_foreign` (`subcategory_id`),
  ADD KEY `products_brand_id_foreign` (`brand_id`);

--
-- Indexes for table `recharges`
--
ALTER TABLE `recharges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_bookings`
--
ALTER TABLE `request_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request_products`
--
ALTER TABLE `request_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `request_products_user_id_foreign` (`user_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_order_detail_id_foreign` (`order_detail_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subscriptions_user_id_foreign` (`user_id`),
  ADD KEY `subscriptions_subscribe_id_foreign` (`subscribe_id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sub_categories_category_id_foreign` (`category_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wish_lists_product_id_foreign` (`product_id`),
  ADD KEY `wish_lists_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `afeatures`
--
ALTER TABLE `afeatures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `features`
--
ALTER TABLE `features`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `it_works`
--
ALTER TABLE `it_works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memberships`
--
ALTER TABLE `memberships`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `recharges`
--
ALTER TABLE `recharges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_bookings`
--
ALTER TABLE `request_bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `request_products`
--
ALTER TABLE `request_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wish_lists`
--
ALTER TABLE `wish_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_subcategory_id_foreign` FOREIGN KEY (`subcategory_id`) REFERENCES `sub_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `request_products`
--
ALTER TABLE `request_products`
  ADD CONSTRAINT `request_products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_order_detail_id_foreign` FOREIGN KEY (`order_detail_id`) REFERENCES `order_details` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD CONSTRAINT `subscriptions_subscribe_id_foreign` FOREIGN KEY (`subscribe_id`) REFERENCES `memberships` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `subscriptions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wish_lists`
--
ALTER TABLE `wish_lists`
  ADD CONSTRAINT `wish_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wish_lists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
