-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2023 at 09:14 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE IF NOT EXISTS `cart_info` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) NOT NULL,
  `prod_price` float NOT NULL,
  `prod_qty` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`cart_id`, `prod_id`, `prod_price`, `prod_qty`, `user_name`) VALUES
(4, 0, 0, 1, 'ravi'),
(6, 6, 1840, 5, 'ram');

-- --------------------------------------------------------

--
-- Table structure for table `category_info`
--

CREATE TABLE IF NOT EXISTS `category_info` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(30) NOT NULL,
  `cat_dname` varchar(30) NOT NULL,
  `image_path` varchar(45) NOT NULL,
  `cat_type` varchar(10) NOT NULL,
  `cat_parent_id` int(11) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `category_info`
--

INSERT INTO `category_info` (`cat_id`, `cat_name`, `cat_dname`, `image_path`, `cat_type`, `cat_parent_id`, `reg_date`) VALUES
(2, 'rose', 'flower', '1681439038_Tulips.jpg', 'Primary', 0, '2023-04-14 07:53:58'),
(3, 'foot wear', 'sleeper', '1681608748_sleeper.jpeg', 'Primary', 0, '2023-04-16 07:02:28'),
(4, 'kids', 'kids wear', '1681608805_kids.jpg', 'Primary', 0, '2023-04-16 07:03:25'),
(5, 'neckless', 'jwellary', '1681608841_jwellary.jpg', 'Primary', 0, '2023-04-16 07:04:01'),
(6, 'mobile', 'mobile phone m02s', '1681609033_mobile.jpg', 'Secondary', 7, '2023-04-16 07:07:13'),
(7, 'electronic', 'bulbe', '1681609163_Lighthouse.jpg', 'Primary', 0, '2023-04-16 07:09:23');

-- --------------------------------------------------------

--
-- Table structure for table `cust_info`
--

CREATE TABLE IF NOT EXISTS `cust_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `adderess` text NOT NULL,
  `user_type` varchar(5) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cust_info`
--

INSERT INTO `cust_info` (`id`, `name`, `email`, `contact`, `adderess`, `user_type`, `user_name`, `pass`, `reg_date`) VALUES
(1, 'ravi', 'ravi@gmail.com', '4582', 'raipur', 'admin', 'ravi', 'ra', '1899-11-08 00:00:00'),
(2, 'ram', 'ram@gmail.com', '85964', 'durg 4910001cg', 'user', 'ram', 'r', '2023-04-11 03:32:02'),
(3, 'shyam', 'shyam@gmail.com', '542', 'raipur', 'user', 'shyam', 's', '2023-04-11 03:39:11'),
(4, 'dhatri', 'dhatri@gmail.com', '548526', 'durg ', 'user', 'dhatri', 'd', '2023-04-16 15:59:48'),
(5, '', '', '', '', 'user', '', '', '2023-05-15 14:41:52');

-- --------------------------------------------------------

--
-- Table structure for table `news_info`
--

CREATE TABLE IF NOT EXISTS `news_info` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_head` varchar(40) NOT NULL,
  `news_detail` text NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `news_info`
--

INSERT INTO `news_info` (`news_id`, `news_head`, `news_detail`) VALUES
(18, 'h1', 'h1 is'),
(19, 'windows', 'window 10');

-- --------------------------------------------------------

--
-- Table structure for table `offer_info`
--

CREATE TABLE IF NOT EXISTS `offer_info` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `offer_start_date` datetime NOT NULL,
  `offer_end_date` datetime NOT NULL,
  `offer_category_name` text NOT NULL,
  `offer_discount` int(11) NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `offer_info`
--

INSERT INTO `offer_info` (`offer_id`, `offer_name`, `offer_start_date`, `offer_end_date`, `offer_category_name`, `offer_discount`, `reg_date`) VALUES
(1, 'summer fest', '2023-05-02 00:00:00', '1970-01-02 00:00:00', '7', 2, '2023-05-01 22:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE IF NOT EXISTS `order_detail` (
  `order_detail_id` int(11) NOT NULL,
  `order_rate` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `order_qty` int(11) NOT NULL,
  `ref_reg_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_detail_id`, `order_rate`, `item_id`, `order_qty`, `ref_reg_no`) VALUES
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 0),
(0, 0, 0, 0, 11),
(0, 0, 0, 0, 11),
(0, 0, 0, 0, 11),
(0, 0, 0, 0, 12),
(0, 0, 0, 0, 12),
(0, 0, 0, 0, 12),
(0, 0, 0, 0, 13),
(0, 0, 0, 0, 13),
(0, 0, 0, 0, 13),
(0, 0, 0, 0, 14),
(0, 0, 0, 0, 14),
(0, 0, 0, 0, 14),
(0, 0, 0, 0, 15),
(0, 0, 0, 0, 15),
(0, 0, 0, 0, 15),
(0, 0, 0, 0, 16),
(0, 0, 0, 0, 16),
(0, 0, 0, 0, 16),
(0, 0, 0, 0, 17),
(0, 0, 0, 0, 17),
(0, 0, 0, 0, 17),
(0, 0, 0, 0, 18),
(0, 0, 0, 0, 18),
(0, 0, 0, 0, 18),
(0, 0, 0, 0, 19),
(0, 0, 0, 0, 19),
(0, 0, 0, 0, 19),
(0, 475, 7, 1, 20),
(0, 475, 7, 1, 20),
(0, 475, 7, 1, 20),
(0, 475, 7, 1, 21),
(0, 475, 7, 1, 21),
(0, 475, 7, 1, 21),
(0, 475, 7, 1, 32),
(0, 475, 7, 1, 33),
(0, 475, 7, 1, 33),
(0, 475, 7, 1, 33),
(0, 475, 7, 1, 33),
(0, 475, 7, 1, 34),
(0, 475, 7, 2, 34),
(0, 1840, 6, 2, 35),
(0, 1840, 6, 2, 36),
(0, 1840, 6, 1, 36),
(0, 12750, 2, 2, 37),
(0, 1840, 6, 1, 38),
(0, 1840, 6, 1, 39),
(0, 1840, 6, 1, 41),
(0, 1840, 6, 1, 43),
(0, 1840, 6, 1, 44),
(0, 1840, 6, 5, 46),
(0, 1840, 6, 5, 47);

-- --------------------------------------------------------

--
-- Table structure for table `order_main`
--

CREATE TABLE IF NOT EXISTS `order_main` (
  `order_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(30) NOT NULL,
  `order_cat_qty` int(11) NOT NULL,
  `total_price` float NOT NULL,
  `adderess` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `order_date` date NOT NULL,
  `last_update_date` datetime NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `order_main`
--

INSERT INTO `order_main` (`order_id`, `user_name`, `order_cat_qty`, `total_price`, `adderess`, `status`, `order_date`, `last_update_date`) VALUES
(9, 'ram', 3, 1425, 'durg ', 'initiate', '2023-04-25', '2023-04-25 21:30:39'),
(10, 'ram', 3, 1425, 'durg ', 'initiate', '2023-04-25', '2023-04-25 21:30:39'),
(32, 'dhatri', 1, 475, 'durg raipur', 'initiate', '2023-04-26', '2023-04-26 10:23:23'),
(33, 'dhatri', 4, 1900, 'durg raipur', 'initiate', '2023-04-26', '2023-04-26 10:25:03'),
(34, 'ram', 2, 1425, 'durg 491001', 'initiate', '2023-04-26', '2023-04-26 12:29:55'),
(35, 'ram', 1, 3680, 'durg 491001', 'initiate', '2023-04-26', '2023-04-26 19:02:29'),
(36, 'ram', 2, 5520, 'durg 491001', 'initiate', '2023-04-26', '2023-04-26 19:09:00'),
(37, 'dhatri', 1, 25500, 'durg raipur', 'initiate', '2023-04-26', '2023-04-26 19:09:48'),
(38, 'ram', 1, 1840, 'durg 491001', 'initiate', '2023-04-27', '2023-04-27 11:07:43'),
(39, 'ram', 1, 1840, 'durg 491001', 'initiate', '2023-04-27', '2023-04-27 15:24:45'),
(40, 'ram', 0, 0, 'durg 491001', 'initiate', '2023-04-27', '2023-04-27 15:25:02'),
(41, 'ram', 1, 1840, 'durg 491001', 'initiate', '2023-04-27', '2023-04-27 15:25:16'),
(42, 'ram', 0, 0, 'durg 491001', 'initiate', '2023-04-27', '2023-04-27 15:25:39'),
(43, 'ram', 1, 1840, 'durg 4910001cg', 'initiate', '2023-04-27', '2023-04-27 15:26:39'),
(44, 'dhatri', 1, 1840, 'durg raipur', 'initiate', '2023-04-27', '2023-04-27 15:39:38'),
(45, 'dhatri', 0, 0, 'durg ', 'initiate', '2023-04-27', '2023-04-27 15:39:50'),
(46, 'ram', 1, 9200, 'durg 4910001cg', 'initiate', '2023-05-01', '2023-05-01 09:52:08'),
(47, 'ram', 1, 9200, 'durg 4910001cg', 'initiate', '2023-05-15', '2023-05-15 11:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_info`
--

CREATE TABLE IF NOT EXISTS `product_info` (
  `prod_id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(30) NOT NULL,
  `prod_price` varchar(10) NOT NULL,
  `prod_image_path` varchar(40) NOT NULL,
  `category_parent_id` int(11) NOT NULL,
  `prod_detail` text NOT NULL,
  `discount` float NOT NULL,
  `reg_date` datetime NOT NULL,
  PRIMARY KEY (`prod_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `product_info`
--

INSERT INTO `product_info` (`prod_id`, `prod_name`, `prod_price`, `prod_image_path`, `category_parent_id`, `prod_detail`, `discount`, `reg_date`) VALUES
(2, 'mobile', '15000', '1681613555_mobile.jpg', 6, '4GB Ram Rom\r\n48 Mega px ', 15, '2023-04-16 08:22:35'),
(3, 'bangles', '500', '1681639433_bangles.jpg', 5, 'COLOURFUL JHUMKI BANGLE SET WITH KUNDAN BORDER KADA BY LESHYA', 10, '2023-04-16 15:33:53'),
(4, 'ring', '15000', '1681639545_ring.jpg', 5, 'Diamond Ring In 18Kt White Gold (4.09 gram) with Diamonds (0.6860 Ct)', 10, '2023-04-16 15:35:45'),
(6, 'pendent', '2000', '1681639707_pendent.jpg', 5, 'Diamond Pendant In 18Kt Yellow Gold (1.546 gram) with Diamonds (0.2400 Ct)\r\n', 8, '2023-04-16 15:38:27'),
(7, 'earing', '500', '1681640172_earing.jpg', 5, 'Diamond Earrings In 18Kt Yellow Gold (16.32 gram) with Diamonds (0.1580 Ct)\r\n', 5, '2023-04-16 15:46:12');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
