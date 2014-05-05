-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2014 at 12:49 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0
--
-- third commit
--

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electrostore`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminreg`
--
-- Creation: Apr 10, 2014 at 01:56 AM
-- Last update: Apr 10, 2014 at 02:17 AM
--

CREATE TABLE IF NOT EXISTS `adminreg` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) DEFAULT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `adminNo` varchar(8) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cellN` varchar(20) DEFAULT NULL,
  `passwrd` varchar(20) DEFAULT NULL,
  `passwd` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`admin_id`, `Fname`, `Lname`, `adminNo`, `email`, `cellN`, `passwrd`, `passwd`) VALUES
(1, 'millia', 'mabasa', '', 'millicia68@gmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(2, 'millia', 'mabasa', '', 'millicia68@gmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(3, 'mm', 'mabasa', '123456', 'matimbamillia@webmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(4, 'millia', 'mabasa', '123456', 'matimbamillia@webmail.com', '', '', '+'),
(5, 'millia', 'mabasa', '123456', 'matimbamillia@webmail.com', 'mmm123', 'mmm123', '+2778-406-9658');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--
-- Creation: Apr 08, 2014 at 09:29 AM
-- Last update: Apr 08, 2014 at 09:29 AM
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(10) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `product` varchar(30) DEFAULT NULL,
  `product_price` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--


-- --------------------------------------------------------

--
-- Table structure for table `login`
--
-- Creation: Apr 08, 2014 at 08:56 AM
-- Last update: Apr 08, 2014 at 08:56 AM
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--


-- --------------------------------------------------------

--
-- Table structure for table `order`
--
-- Creation: Apr 08, 2014 at 09:08 AM
-- Last update: Apr 08, 2014 at 09:08 AM
--

CREATE TABLE IF NOT EXISTS `order` (
  `order_num` int(20) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `product` varchar(50) DEFAULT NULL,
  `product_price` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--
-- Creation: Apr 10, 2014 at 06:00 AM
-- Last update: Apr 20, 2014 at 12:44 PM
--

CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(50) DEFAULT NULL,
  `pro_price` varchar(10) DEFAULT NULL,
  `pro_details` varchar(100) DEFAULT NULL,
  `pro_cat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_details`, `pro_cat`) VALUES
(15, 'Sumsung', '2700', 'windows 8\r\nAMD 64bit processor', 'Desktop'),
(14, 'sony', '2700', 'windows 8\r\nAMD 64bit processor', 'Laptop'),
(13, 'Aplle', '3500', 'mac\r\nintel celeron 64bit processor', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--
-- Creation: Apr 08, 2014 at 09:01 AM
-- Last update: Apr 10, 2014 at 02:06 AM
--

CREATE TABLE IF NOT EXISTS `register` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(30) DEFAULT NULL,
  `Lname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `e-mail` varchar(30) DEFAULT NULL,
  `cellN` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Rpassword` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `Fname`, `Lname`, `username`, `e-mail`, `cellN`, `password`, `Rpassword`) VALUES
(1, 'beauty', 'khosa', 'beau', 'beau123@yahoo.com', 'bea123', 'bea123', '+2778-406-9658'),
(2, 'beauty', 'khosa', 'beau', 'beau123@yahoo.com', 'bea123', 'bea123', '+2778-406-9658'),
(3, 'beauty', 'khosa', 'beau', 'beau123@yahoo.com', 'bea123', 'bea123', '+2778-406-9658'),
(4, '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', ''),
(8, '', '', '', '', '', '', ''),
(9, '', '', '', '', '', '', ''),
(10, '', '', '', '', '', '', ''),
(11, 'millia', 'mabasa', '123456', 'millicia68@gmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(12, 'millia', 'mabasa', '123456', 'millicia68@gmail.com', 'mmm123', 'mmm123', '+2778-406-9658');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
