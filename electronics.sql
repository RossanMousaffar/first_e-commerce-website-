-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 22, 2015 at 03:10 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `electronics`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductName` text NOT NULL,
  `Description` text NOT NULL,
  `Price` float NOT NULL,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `ProductName`, `Description`, `Price`) VALUES
(1, 'Samsung', 'Samsung Galaxy S4 model I9500 Bluetooth Wifi b/g/n camera front and back 12 mega pixel ', 20000),
(2, 'Iphone 6', 'wifi (headset) 64 gb internal camera front back ', 35000),
(3, 'HTC', 'HTC M18 Bluetoot 3.0 camera front and back', 25000),
(4, 'Iphone', 'Iphone 6 plus Camera front and Back', 38000),
(5, 'lumia', 'Lumia 1020', 20000),
(6, 'Blackberry', 'Z10 camera front back 3.0 bluetooth', 20000),
(7, 'Samsung', 'Galaxy S5', 25000),
(8, 'Huwaii', 'P8 front back camera body metal', 22000),
(9, 'Lumia', 'Lumia 630', 15000),
(10, 'Apple', 'Apple iwatch', 42000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` text NOT NULL,
  `LastName` text NOT NULL,
  `Gender` text NOT NULL,
  `DateOfBirth` date NOT NULL,
  `LocalAddress` text NOT NULL,
  `Country` text NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `FirstName`, `LastName`, `Gender`, `DateOfBirth`, `LocalAddress`, `Country`, `Username`, `Password`) VALUES
(4, 'Martin', 'David', 'Male', '1992-05-23', 'Paris', 'Mauritius', 'davis', 'martin'),
(5, 'Rukhsar', 'Sobratty', 'Female', '1992-05-23', 'Highlands', 'Mauritius', 'rukh', '23051992'),
(6, 'paul', 'Jean', '', '0000-00-00', '', 'Mauritius', 'jean', '12345'),
(7, 'sarah', 'martine', '', '0000-00-00', '', 'France', 'sarah', 'martin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
