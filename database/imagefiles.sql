-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 13, 2018 at 10:39 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imagefiles`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `size` bigint(4) NOT NULL,
  `type` varchar(255) NOT NULL,
  `description` text,
  `location` varchar(255) NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `size`, `type`, `description`, `location`, `upload_date`) VALUES
(3, 'agriculture-apple-blur-257840.jpg', 3414616, 'jpg', 'Agriculture Apple Blur', 'images/agriculture-apple-blur-257840.jpg', '2018-09-12 01:35:09'),
(6, 'ducks.jpg', 222154, 'jpg', 'Ducks are floating on a lake', 'images/ducks.jpg', '2018-09-13 03:51:22'),
(5, 'big-stones-on-the-lake.jpg', 170587, 'jpg', 'A big stone mountain on a lake', 'images/big-stones-on-the-lake.jpg', '2018-09-13 03:37:23'),
(7, 'fall-feeling.jpg', 331597, 'jpg', 'A street with fall smelling', 'images/fall-feeling.jpg', '2018-09-13 03:52:37'),
(8, 'small-island.jpg', 148376, 'jpg', 'A good landscape with wonderful looking island', 'images/small-island.jpg', '2018-09-13 03:53:39'),
(10, 'house-in-the-wood.jpg', 307844, 'jpg', 'A house in the wood', 'images/house-in-the-wood.jpg', '2018-09-13 14:04:32'),
(13, 'many-trees-are-in-the-wood.jpg', 335036, 'jpg', 'Many trees in the wood', 'images/many-trees-are-in-the-wood.jpg', '2018-09-13 14:33:38'),
(14, 'spectacle-landscape-with-a-beautiful-load.jpg', 188808, 'jpg', 'Spectacle landscape with a beautiful load', 'images/spectacle-landscape-with-a-beautiful-load.jpg', '2018-09-13 14:53:54'),
(18, 'dreamy-falls.jpg', 223591, 'jpg', 'The falls that only can see in a dream', 'images/dreamy-falls.jpg', '2018-09-13 15:22:59'),
(19, 'island-mountains-delta.jpg', 185922, 'jpg', 'Island mountains and delta entering the sea', 'images/island-mountains-delta.jpg', '2018-09-13 15:40:30');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
