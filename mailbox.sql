-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 18, 2014 at 07:47 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mailbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Receiver` varchar(100) DEFAULT NULL,
  `Sender` varchar(100) DEFAULT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `Message` varchar(1000) DEFAULT NULL,
  `Date` datetime DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`uid`, `Receiver`, `Sender`, `Subject`, `Message`, `Date`) VALUES
(2, 'kuldeepkumar123', 'ducat123', 'php core', 'm kn huji ji', NULL),
(3, 'amar123', 'ducat123', 'hjsy', 'hifji', NULL),
(4, 'kuldeepkumar123', 'ducat123', 'java', 'android...................', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `Receiver` varchar(100) DEFAULT NULL,
  `Sender` varchar(100) DEFAULT NULL,
  `Subject` varchar(200) DEFAULT NULL,
  `Message` varchar(1000) DEFAULT NULL,
  `datetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`uid`, `Receiver`, `Sender`, `Subject`, `Message`, `datetime`) VALUES
(1, 'kuldeepkumar123', '', 'PHP', 'Introduction of PHP.....', '0000-00-00 00:00:00'),
(2, 'amar123', 'ducat123', 'PHP', 'hjhgh\r\nkjjjjh\r\njbjhjjh', '0000-00-00 00:00:00'),
(6, 'amar123', 'ducat123', 'jkjkjkjk', 'kkkkkk', '0000-00-00 00:00:00'),
(7, 'amar123', 'ducat123', 'nnjnjj', 'kkkk', '0000-00-00 00:00:00'),
(9, 'amar123', 'ducat123', 'java', 'hgfggh\r\nnnbb\r\nnvvb', '2014-10-14 12:38:46'),
(10, 'amar123', 'ducat123', 'gggg', ',l;mmmm/', '2014-10-14 12:45:30'),
(12, 'amar123', 'ducat123', 'ggggggggg', 'liu', '2014-10-14 12:51:16'),
(13, 'amar123', 'ducat123', 'training', 'php', '2014-10-14 12:58:47'),
(15, 'ducat123', 'amar123', 'PHP', 'jhhhj\r\nkjjjj\r\nhjh', '2014-10-15 12:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pass` varchar(20) DEFAULT NULL,
  `cfpass` varchar(20) DEFAULT NULL,
  `bd_date` varchar(20) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `mobile` bigint(20) DEFAULT NULL,
  `country` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `fname`, `lname`, `uname`, `pass`, `cfpass`, `bd_date`, `gender`, `mobile`, `country`) VALUES
(1, 'Ducat', 'India', 'ducat123', 'admin123', 'admin123', '02', 'male', 7866666886, 'India'),
(4, 'AMAR ', 'VERMA', 'amar123', 'amarverma', 'amarverma', '04', 'male', 454545454, 'India'),
(3, 'kuldeep', 'machal', 'kuldeepkumar123', '123456', '123456', '10', 'male', 8858584545, 'India');
