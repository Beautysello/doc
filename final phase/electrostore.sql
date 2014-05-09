-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 09, 2014 at 03:35 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0
--
-- 09/05/2014
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `adminreg`
--

INSERT INTO `adminreg` (`admin_id`, `Fname`, `Lname`, `adminNo`, `email`, `cellN`, `passwrd`, `passwd`) VALUES
(1, 'millia', 'mabasa', '', 'millicia68@gmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(2, 'millia', 'mabasa', '', 'millicia68@gmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(3, 'mm', 'mabasa', '123456', 'matimbamillia@webmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(4, 'millia', 'mabasa', '123456', 'matimbamillia@webmail.com', '', '', '+'),
(5, 'millia', 'mabasa', '123456', 'matimbamillia@webmail.com', 'mmm123', 'mmm123', '+2778-406-9658'),
(6, 'mill', 'mabasa', '156789', 'matimbamillia@webmail.co.za', 'milli23', 'milli23', '+2783-382-2089'),
(7, 'mill', 'mabasa', '156789', 'millicia@gmail.com', 'milli23', 'milli23', '+2783-382-2089');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `company` varchar(50) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `company`, `message`) VALUES
(1, 'beauty', 'beau@ahoo.com', '1234567890', 'com', 'fgr dfwer fgbrg fwfre dfgefr edfwer fwe'),
(2, 'millia', 'millicia@gmail.com', '1234567890', 'com', 'bnmjb dfwse srwg sdqed sdrwg sdefr dferf sdfwfr sfrw dge dfef'),
(3, 'millia', 'millicia@gmail.com', '+2783-123-4567', 'com', 'sadqwe fwr3w vff2wrf heg ewrw'),
(4, 'millia', 'millicia@gmail.com', '+2783-123-4567', 'com', 'sadqwe fwr3w vff2wrf heg ewrw');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `pro_id` int(10) NOT NULL AUTO_INCREMENT,
  `pro_name` varchar(50) DEFAULT NULL,
  `pro_price` varchar(10) DEFAULT NULL,
  `pro_details` varchar(100) DEFAULT NULL,
  `pro_cat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `pro_price`, `pro_details`, `pro_cat`) VALUES
(17, 'aplle', '200', 'mouse', 'Mouse'),
(13, 'Aplle', '3500', 'mac\r\nintel celeron 64bit processor', 'Laptop'),
(16, 'phillips', '3400', 'windows 8', 'Laptop');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Fname` varchar(20) DEFAULT NULL,
  `Lname` varchar(20) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `cellN` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `Rpassword` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `Fname`, `Lname`, `username`, `email`, `cellN`, `password`, `Rpassword`) VALUES
(1, '', '', '', '', '', '', ''),
(2, 'mill', 'mabasa', 'millicia', 'millicia@gmail.com', 'milli23', 'nnn456', '+2783-382-2089'),
(3, 'mill', 'mabasa', 'millicia', 'millicia@gmail.com', 'milli23', 'nnn456', '+2783-382-2089'),
(4, 'cvv', 'mabasa', 'beau', 'millicia@gmail.com', 'bea123', 'nnn456', '+2783-567-6789'),
(5, 'beauty', 'khosa', 'beau', 'beau@ahoo.com', '+2783-567-6789', 'jjj123', 'jjj123'),
(6, 'mill', 'mabasa', 'millicia', 'matimbamillia@webmail.co.za', '+2783-567-6789', 'mmm123', 'mmm123'),
(7, 'beauty', 'sello', 'bkhosa', 'sello@yahoo.com', '+2784-444-4444', 'nnn123', 'nnn123'),
(8, '', '', '', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
