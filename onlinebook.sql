-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 23, 2023 at 06:50 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlinebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'book', 'online');

-- --------------------------------------------------------

--
-- Table structure for table `order_d`
--

DROP TABLE IF EXISTS `order_d`;
CREATE TABLE `order_d` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` varchar(255) NOT NULL,
  `gtotal` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `UserAddress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `order_d`
--

INSERT INTO `order_d` (`id`, `userid`, `gtotal`, `status`, `UserAddress`) VALUES
(1, 'raj', 15750, 'confirm', NULL),
(2, 'aryan', 750, 'confirm', NULL),
(3, 'rohit', 750, 'confirm', NULL),
(4, 'aryan', 1000, 'confirm', NULL),
(5, 'Rishu@12345', 1750, 'confirm', NULL),
(6, 'Rishu@12345', 1000, 'pending', 'Patna');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `date_time` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `order_details`
--


-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE `order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `p_id`, `quantity`) VALUES
(1, 1, 2, 3),
(2, 1, 3, 3),
(3, 2, 2, 1),
(4, 2, 3, 1),
(5, 3, 2, 1),
(6, 3, 3, 1),
(7, 4, 4, 1),
(8, 4, 5, 1),
(9, 5, 5, 1),
(10, 5, 2, 1),
(11, 5, 3, 1),
(12, 5, 4, 1),
(13, 6, 4, 1),
(14, 6, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `auth_name` varchar(100) NOT NULL,
  `publication` varchar(100) NOT NULL,
  `description` varchar(256) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `auth_name`, `publication`, `description`, `Price`, `image`) VALUES
(5, 'PHP', 'RAJ KUMAR SINHA', 'NEW  DELHI', 'This book for advanced programmer.', '650', 'malayalam.jpg'),
(2, 'CPP', 'Bala Guruswamy', 'patna', 'this book is very good ', '500', '30118791_m.jpg'),
(3, 'Java', 'Bala Guruswamy', 'patna', 'this book is very good ', '250', 'online-bookstore.jpg'),
(4, 'C', 'Bala Guruswamy', 'TMH', 'This book for advanced programmer.', '350', '30118791_m.jpg'),
(8, 'CPP', 'Rajeev Singh', 'TMH', 'Good Book', '350', '30118791_m.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

DROP TABLE IF EXISTS `register`;
CREATE TABLE `register` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `l_name`, `email`, `mobile`, `username`, `password`) VALUES
(1, 'rohit', 'raj', 'rohit11@gmail.com', '8863961021', 'rohit', '12345'),
(3, 'Aryan', 'Raj', 'aryan11@gmail.com', '9090987876', 'aryan', '12345'),
(4, 'Rishu', 'kumar', 'rishukumartengraha@gmail.com', '7488431625', 'Rishu@12345', 'Rishu@12345');
