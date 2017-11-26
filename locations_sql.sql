-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 26, 2017 at 01:57 PM
-- Server version: 5.7.19
-- PHP Version: 7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vsat-soft`
--

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `city_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `city_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `latitude` float DEFAULT NULL,
  `longitude` float DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`city_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`city_id`, `city_name`, `country_id`, `is_active`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(1, 'Umm al Qaywayn', 1, 0, NULL, NULL, NULL, '2017-11-26 08:36:14'),
(2, 'Ras al-Khaimah', 1, 1, NULL, NULL, NULL, '2017-11-26 08:53:59'),
(3, 'Dubai', 1, 1, NULL, NULL, NULL, '2017-11-26 08:53:59'),
(4, 'Zaranj', 2, 1, NULL, NULL, NULL, '2017-11-26 08:53:59'),
(5, 'Shindand', 2, 1, NULL, NULL, NULL, NULL),
(6, 'Sar-e Pul', 2, 1, NULL, NULL, NULL, NULL),
(7, 'Rustaq', 2, 0, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `country_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `region_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`country_id`, `full_name`, `short_name`, `region_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'United Arab Emirates', 'United Arab Emirates', 1, 0, NULL, '2017-11-26 08:39:02'),
(2, 'Afghanistan', 'Afghanistan', 1, 1, NULL, '2017-11-26 08:55:31'),
(3, 'Armenia', 'Armenia', 1, 1, NULL, '2017-11-26 08:55:31'),
(4, 'China', 'China', 1, 1, NULL, '2017-11-26 08:55:31'),
(5, 'Cabo Verde', 'Cabo Verde', 2, 1, NULL, '2017-11-26 08:55:33'),
(6, 'Burundi', 'Burundi', 2, 1, NULL, '2017-11-26 08:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `regions`
--

DROP TABLE IF EXISTS `regions`;
CREATE TABLE IF NOT EXISTS `regions` (
  `region_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`region_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `regions`
--

INSERT INTO `regions` (`region_id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Asia', 1, NULL, '2017-11-26 08:55:31'),
(2, 'Africa', 1, NULL, '2017-11-26 08:55:33'),
(3, 'Americas', 1, NULL, '2017-11-26 08:55:35'),
(4, 'Europe', 1, NULL, '2017-11-26 08:55:39'),
(5, 'Oceania', 1, NULL, '2017-11-26 08:55:42');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
