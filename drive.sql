-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 06, 2023 at 10:36 AM
-- Server version: 8.0.32
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `uploadfile`
--

DROP TABLE IF EXISTS `uploadfile`;
CREATE TABLE IF NOT EXISTS `uploadfile` (
  `id` int NOT NULL AUTO_INCREMENT,
  `imgfile` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `uploadfile`
--

INSERT INTO `uploadfile` (`id`, `imgfile`) VALUES
(4, 'Book1.xlsx'),
(5, 'IF.pdf'),
(6, '209-2095343_imagens-ben-10-png-transparent-png.png'),
(7, 'st,small,507x507-pad,600x600,f8f8f8.jpg'),
(9, '1280-157619624-white-rabbits.jpg'),
(10, 'download (1).jfif'),
(11, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
