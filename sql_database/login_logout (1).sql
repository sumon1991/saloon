-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 08:27 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `login_logout`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE IF NOT EXISTS `admin_users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(25) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `joining_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`user_id`, `user_name`, `user_email`, `user_password`, `joining_date`) VALUES
(4, 'test', 'test@123.com', '123456', '2016-11-06 00:00:00'),
(5, 'test', 'test@123.com', '123456', '2016-11-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `payment_id` int(11) NOT NULL,
  `item_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `status`) VALUES
(1, 'Product1', 'product_image1.jpg', 10.00, 1),
(2, 'Product2', 'product_image2.jpg', 50.00, 1),
(3, '3-image', 'gallery/3.jpg', 10.00, 1),
(4, '4-image', 'gallery/4.jpg', 15.00, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `imageName` varchar(20) NOT NULL,
  `imagePrice` varchar(50) NOT NULL,
  `sellPic` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=67 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `imageName`, `imagePrice`, `sellPic`) VALUES
(58, 'image3', '10', '18530.jpg'),
(59, 'image4', '10', '680374.jpg'),
(57, 'image2', '10', '737507.jpg'),
(56, 'image1', '10', '341266.jpg'),
(60, 'image5', '10', '966706.jpg'),
(61, 'image6', '15', '19841.jpg'),
(62, 'image7', '10', '193800.jpg'),
(63, 'image8', '10', '27188.jpg'),
(65, 'image9', '15', '275452.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users_video`
--

CREATE TABLE IF NOT EXISTS `tbl_users_video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `videoName` varchar(20) NOT NULL,
  `videoPrice` varchar(50) NOT NULL,
  `videoPic` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=68 ;

--
-- Dumping data for table `tbl_users_video`
--

INSERT INTO `tbl_users_video` (`id`, `videoName`, `videoPrice`, `videoPic`) VALUES
(67, 'test2', '20', '836.mp4'),
(65, 'test', '156', '574357969.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(32) NOT NULL,
  `register_date` date NOT NULL,
  `active_account` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `register_date`, `active_account`) VALUES
(1, 'sumon sen', '123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-25', 'Y'),
(2, 'sumonsen', 'sumon.animator@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-25', 'Y'),
(3, '123', 'test@123.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-10-25', 'Y'),
(0, 'Saikat Mitra', 'saikat360@yahoo.co.in', 'e8dc4081b13434b45189a720b77b6818', '2016-10-27', 'Y'),
(0, 'sandipan dey', '456@123.com', 'e10adc3949ba59abbe56e057f20f883e', '2016-11-04', 'Y');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
