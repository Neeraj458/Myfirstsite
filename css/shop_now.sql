-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 05, 2021 at 08:06 AM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_now`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(5) NOT NULL,
  `item_name` varchar(50) DEFAULT NULL,
  `item_price` int(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `item_name`, `item_price`) VALUES
(1, 'Mens T-Shirt', 395),
(2, 'Mens Stretch Slim jeans', 759),
(3, 'United Jeans Mens Blue Dori Style', 599),
(4, 'Mens Regular Fit Casual Check Shirt', 630),
(5, 'ASIAN Mens Sports Running Shoes', 799),
(6, 'Mens Shoes for Running, Walking, Gym', 459),
(7, 'T-Rock Mens Running Shoe', 399),
(8, 'Mens Airsocks Black Red Knitted Sports Shoes', 664),
(9, 'RUSTET Analouge Mens Day and Date Watch', 375),
(10, 'TIMEWEAR Stainless Steel Chain Watch for Men', 329),
(11, 'TIMEX Anolog Black Mens Watch', 1095),
(12, 'TIMEWEAR Commando Series Watch for Men', 659),
(13, 'Mi Smart Band 5', 2499);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE IF NOT EXISTS `register` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `email`, `phone`, `password`) VALUES
(4, 'neeraj@gmail.com', '1234567890', '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

DROP TABLE IF EXISTS `users_items`;
CREATE TABLE IF NOT EXISTS `users_items` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `item_id` int(5) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `item_id` (`item_id`)
) ENGINE=MyISAM AUTO_INCREMENT=192 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `email`) VALUES
(191, NULL, 5, 'neeraj@gmail.com'),
(190, NULL, 2, 'neeraj@gmail.com'),
(189, NULL, 1, 'neeraj@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
