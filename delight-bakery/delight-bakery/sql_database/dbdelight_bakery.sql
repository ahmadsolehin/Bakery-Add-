-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 06, 2013 at 12:58 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbdelight_bakery`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `currentstate` varchar(20) NOT NULL,
  `status` varchar(10) NOT NULL,
  `reg_date` varchar(30) NOT NULL,
  `last_login` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `username`, `email`, `password`, `telephone`, `gender`, `currentstate`, `status`, `reg_date`, `last_login`) VALUES
(1, 'Amerullah bin Muda', 'Amerullah', 'amerullah_92@yahoo.com', 'amer123', '0123456789', 'Male', 'Terengganu', 'Admin', '06-06-2013 03:49:25 AM', '06-06-2013 05:44:29 PM'),
(2, 'Syahira Azureen binti Abdul Talib', 'Syira', 'syira_syareen@yahoo.com', 'syira123', '0111222331', 'Female', 'Penang', 'Member', '06-06-2013 03:58:41 AM', '06-06-2013 05:47:06 PM');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `feed_fullname` varchar(50) NOT NULL,
  `feed_email` varchar(30) NOT NULL,
  `feed_telephone` varchar(15) NOT NULL,
  `feed_address` text NOT NULL,
  `feed_comment` text NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `feed_fullname`, `feed_email`, `feed_telephone`, `feed_address`, `feed_comment`) VALUES
(1, 'Ahmad Albab', 'ahmad@yahoo.com', '09-884 1412', '123 Jalan Tanpa Arah,\r\n32320 Satu Perhentian,\r\nKuala Kuda', 'No Comment'),
(2, 'sabri', 'sabri@yahoo.c', '01111111111', 't16', 'pwer la . nk kek 1 :)'),
(3, 'fatin athirah binti nasoha', 'fatinathrahnasoha@gmail.com', '0145232353', 'ump', 'very friendly'),
(4, 'Mohd Fakhrul Azzeri b Abd Mujid', 'azzery93@yahoo.com.my', '0139948899', 'B38 Kampung Paya Bungor 26020 Kuantan Pahang Darul Makmur', 'Haish awak hantar biskut basi la'),
(5, 'syira azureen', 'syira_somyareen@yahoo.c', '0195633123', '123\r\nparis', 'nice website n gd services..thanks for assits me..'),
(6, 'Ahmad', 'ahmad@yahoo.com', '0123456789', '12 jalan kat mana sahaja,\r\n', 'No Comment'),
(7, 'Abu Bakar', 'abu@gmail.com', '0123331233', '43 Jalan Tepi Bendang,\r\nTaman Selasih Perdana,\r\n12345 Kayangan', 'No comment for this site');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `username`, `product_id`, `quantity`, `order_date`) VALUES
(1, 'Syira', 1, 5, '06-06-2013 04:03 AM'),
(2, 'Ahmad', 1, 15, '06-06-2013 04:05 AM');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE IF NOT EXISTS `productlist` (
  `product_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` text NOT NULL,
  `product_price` decimal(5,2) NOT NULL,
  `product_picture` varchar(200) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`product_id`, `product_name`, `product_price`, `product_picture`) VALUES
(1, 'Blueberry Cheese Tart', 2.90, 'product_image/1.blueberry.cheese.tart.jpg'),
(2, 'Egg Tart', 2.40, 'product_image/2.egg.tart.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saved_order`
--

CREATE TABLE IF NOT EXISTS `saved_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_total` decimal(5,2) NOT NULL,
  `cust_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `phone` varchar(15) NOT NULL,
  `order_date` varchar(40) NOT NULL,
  `delivery_date` varchar(40) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `saved_order`
--

INSERT INTO `saved_order` (`id`, `order_total`, `cust_name`, `email`, `address`, `phone`, `order_date`, `delivery_date`, `status`) VALUES
(1, 21.50, 'Syira', 'syira_syareen@yahoo.com', '48, jalan masjid kampung nyior\r\n23100 dungun\r\nterengganu', '0111222331', '06-06-2013 04:03 AM', '2013-06-10', 'Cancelled'),
(2, 47.89, 'Ahmad', 'ahmad@gmail.com', '123 kucing berlari\r\nxtaw dah', '0111111111', '06-06-2013 04:05 AM', '2013-06-17', 'Process');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
