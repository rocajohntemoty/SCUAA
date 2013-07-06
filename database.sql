-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 05, 2013 at 09:53 PM
-- Server version: 5.1.41
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scuaa`
--
CREATE DATABASE `scuaa` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `scuaa`;

-- --------------------------------------------------------

--
-- Table structure for table `bronze`
--

CREATE TABLE IF NOT EXISTS `bronze` (
  `bronzeID` int(11) NOT NULL AUTO_INCREMENT,
  `sportsID` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  PRIMARY KEY (`bronzeID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `bronze`
--


-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `parentCategoryID` int(11) NOT NULL,
  PRIMARY KEY (`categoryID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `category`
--


-- --------------------------------------------------------

--
-- Table structure for table `gold`
--

CREATE TABLE IF NOT EXISTS `gold` (
  `goldID` int(11) NOT NULL AUTO_INCREMENT,
  `sportsID` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  PRIMARY KEY (`goldID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `gold`
--


-- --------------------------------------------------------

--
-- Table structure for table `points`
--

CREATE TABLE IF NOT EXISTS `points` (
  `pointsID` int(11) NOT NULL,
  `gold` int(11) NOT NULL,
  `bronze` int(11) NOT NULL,
  `silver` int(11) NOT NULL,
  PRIMARY KEY (`pointsID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `points`
--


-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `schoolID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`schoolID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `school`
--


-- --------------------------------------------------------

--
-- Table structure for table `silver`
--

CREATE TABLE IF NOT EXISTS `silver` (
  `silverID` int(11) NOT NULL AUTO_INCREMENT,
  `sportsID` int(11) NOT NULL,
  `schoolID` int(11) NOT NULL,
  PRIMARY KEY (`silverID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `silver`
--


-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE IF NOT EXISTS `sports` (
  `sportsID` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `categoryID` int(11) NOT NULL,
  PRIMARY KEY (`sportsID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sports`
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
