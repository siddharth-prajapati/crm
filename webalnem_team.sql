-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 19, 2014 at 02:30 PM
-- Server version: 5.1.66-rel14.1-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webalnem_team`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `website` varchar(50) NOT NULL,
  `descri` text,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `website`, `descri`, `created_at`) VALUES
(1, 'abc', 'www.abc.com', 'coming soon', '2014-06-06 05:42:58'),
(2, 'mynew project', 'www.newproject.com', '', '2014-06-06 06:15:44'),
(3, 'XYZ', 'xyz.com', 'papap\r\npapappapap\r\npapappapap\r\npapappapap\r\npapappapap\r\npapap', '2014-06-13 03:04:58');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE IF NOT EXISTS `requests` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `priority` tinyint(1) NOT NULL DEFAULT '1',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `title`, `description`, `priority`, `status`, `date`) VALUES
(1, 'Emailer content', 'test data', 2, 1, '0000-00-00 00:00:00'),
(2, 'Image collection', 'this is test data', 3, 1, '0000-00-00 00:00:00'),
(3, 'Post Template', 'Test data', 1, 1, '0000-00-00 00:00:00'),
(4, 'Logo Design', 'Logo design description', 3, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `startdate` varchar(30) DEFAULT NULL,
  `enddate` varchar(30) DEFAULT NULL,
  `project_id` int(5) NOT NULL,
  `users` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`id`, `title`, `startdate`, `enddate`, `project_id`, `users`, `description`, `created_at`) VALUES
(1, 'login', '09 June 20', '11 June 20', 1, '1,2,3', 'add login functionality', '2014-06-06 07:17:14'),
(2, 'Task 1', '12 June 2014', '18 June 2014', 1, NULL, 'Task 1 description', '2014-06-11 12:13:13'),
(10, '', '', '', 0, '1,2,3', '', '2014-06-13 06:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `pic`, `role`, `status`, `last_login`, `created_at`) VALUES
(1, 'abc', 'abc', 'abc@gmail.com', 'web123', '', '', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Pavan', 'Trivedi', 'admin@webalekh.com', '21232f297a57a5a743894a0e4a801fc3', NULL, '1', 1, NULL, NULL),
(3, 'Siddharth', 'Chauhan', 'wpc@webalekh.com', '43b90920409618f188bfc6923f16b9fa', NULL, NULL, 0, '2014-06-05 11:01:57', '2014-06-05 11:01:57');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
