-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 2018 m. Spa 25 d. 14:40
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db-alspok`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `apklausa`
--

DROP TABLE IF EXISTS `apklausa`;
CREATE TABLE IF NOT EXISTS `apklausa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Ip` varchar(256) COLLATE utf8_lithuanian_ci NOT NULL,
  `FirstName` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `LastName` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `Life` varchar(50) COLLATE utf8_lithuanian_ci NOT NULL,
  `Weather` varchar(256) COLLATE utf8_lithuanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
