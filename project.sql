-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 15, 2020 at 12:55 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

DROP TABLE IF EXISTS `art`;
CREATE TABLE IF NOT EXISTS `art` (
  `ART_ID` varchar(10) NOT NULL,
  `ARTIST_ID` varchar(10) DEFAULT NULL,
  `ART_GENRE` varchar(15) NOT NULL,
  `ART_PRICE` decimal(4,2) NOT NULL,
  PRIMARY KEY (`ART_ID`),
  KEY `FK_ARTIST_ID` (`ARTIST_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `ARTIST_ID` varchar(10) NOT NULL,
  `ARTIST_LNAME` varchar(15) NOT NULL,
  `ARTIST_FNAME` varchar(15) NOT NULL,
  `ARTIST_PHONE` varchar(12) NOT NULL,
  PRIMARY KEY (`ARTIST_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

DROP TABLE IF EXISTS `buyer`;
CREATE TABLE IF NOT EXISTS `buyer` (
  `BUYER_ID` varchar(10) NOT NULL,
  `BUYER_FNAME` varchar(15) NOT NULL,
  `BUYER_LNAME` varchar(15) NOT NULL,
  `PHONE_NO` varchar(12) NOT NULL,
  PRIMARY KEY (`BUYER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sold`
--

DROP TABLE IF EXISTS `sold`;
CREATE TABLE IF NOT EXISTS `sold` (
  `ORDER_ID` varchar(10) NOT NULL,
  `ARTIST_ID` varchar(10) DEFAULT NULL,
  `BUYER_ID` varchar(10) DEFAULT NULL,
  `ART_ID` varchar(10) DEFAULT NULL,
  `PRICE` decimal(4,2) NOT NULL,
  PRIMARY KEY (`ORDER_ID`),
  KEY `FK_BUYER_ID` (`BUYER_ID`),
  KEY `FK_ART_ID` (`ART_ID`),
  KEY `FK_ARTIST_ID` (`ARTIST_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- ----------------------------------------------------------

--
-- VIEW
--

CREATE OR REPLACE VIEW `all_details` AS 
SELECT
      artist.ARTIST_ID,
      artist.ARTIST_FNAME,
      artist.ARTIST_LNAME,
      artist.ARTIST_PHONE,
      art.ART_ID,
      art.ART_GENRE,
      art.ART_PRICE,
      sold.ORDER_ID,
      sold.BUYER_ID,
      sold.PRICE 
	  FROM `artist` 
	  LEFT JOIN `art` ON artist.ARTIST_ID = art.ARTIST_ID 
	  LEFT JOIN `sold` ON art.ART_ID = sold.ART_ID 
	  UNION 
	  SELECT 
	  artist.ARTIST_ID,
      artist.ARTIST_FNAME,
      artist.ARTIST_LNAME,
      artist.ARTIST_PHONE,
      art.ART_ID,
      art.ART_GENRE,
      art.ART_PRICE,
      sold.ORDER_ID,
      sold.BUYER_ID,
      sold.PRICE 
	  FROM `artist` 
	  RIGHT JOIN `art` ON artist.ARTIST_ID = art.ARTIST_ID 
	  RIGHT JOIN `sold` ON art.ART_ID = sold.ART_ID;
	  COMMIT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
