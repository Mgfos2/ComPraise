-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2013 at 06:42 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `micah_test`
--
CREATE DATABASE `micah_test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `micah_test`;

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `album_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(3) NOT NULL,
  `timestamp` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `name` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`album_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`album_id`, `user_id`, `timestamp`, `description`, `name`) VALUES
(8, 20, 1355250952, 'one day at a time', 'Coolio'),
(9, 20, 1355607552, 'another', 'another'),
(10, 21, 1355950369, 'Praise the Lord, all day long', 'The Harvest'),
(11, 25, 1355955904, 'poetic visions', 'Dream'),
(12, 20, 1357678211, 'January 1st!!!', 'Welcome Back');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE IF NOT EXISTS `chat` (
  `message_id` int(4) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `message` text,
  `dateofmessage` int(11) DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`message_id`, `user_id`, `message`, `dateofmessage`) VALUES
(3, 1, 'This is a test message', 1356160040),
(37, 0, 'Hey Will', 1361231580),
(38, 20, 'What''s up will', 1361231643),
(39, 18, 'Nothing much just chilling like a villain mayne', 1361231747),
(40, 20, 'What you got going on this weekend?', 1361231760),
(41, 18, 'Hey Riccky', 1362084757),
(42, 18, 'Nothing much Riccky', 1362084772);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `image_id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user_id` int(5) DEFAULT NULL,
  `album_id` int(5) DEFAULT NULL,
  `date_uploaded` int(11) DEFAULT NULL,
  `image_ext` varchar(4) DEFAULT NULL,
  `default_pic` int(1) NOT NULL,
  PRIMARY KEY (`image_id`),
  KEY `image_id` (`image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `user_id`, `album_id`, `date_uploaded`, `image_ext`, `default_pic`) VALUES
(13, 20, 1, 1355250838, 'jpg', 0),
(14, 20, 8, 1355250963, 'jpg', 0),
(15, 20, 8, 1355251121, 'jpg', 0),
(16, 20, 8, 1355256982, 'jpg', 0),
(17, 20, 8, 1355323118, 'png', 0),
(18, 20, 8, 1355323139, 'png', 0),
(19, 20, 8, 1355323172, 'png', 0),
(20, 20, 8, 1355328656, 'jpg', 0),
(21, 20, 9, 1355607791, 'jpg', 0),
(22, 20, 9, 1355607824, 'jpg', 0),
(23, 20, 8, 1355608025, 'jpg', 1),
(24, 21, 10, 1355950388, 'jpg', 1),
(25, 25, 11, 1355955918, 'jpg', 1),
(26, 20, 8, 1362061965, 'jpg', 0),
(27, 20, 12, 1362062001, 'jpg', 0),
(28, 20, 9, 1362084938, 'png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `favorite_color` varchar(10) NOT NULL,
  `birth_date` date NOT NULL,
  `place_of_birth` varchar(20) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `admin` tinyint(4) DEFAULT NULL,
  `default_pic` int(4) DEFAULT NULL,
  `member` enum('student','government','small_business','corporation') DEFAULT NULL,
  `friends` text,
  `sign_up_date` date NOT NULL,
  `address` varchar(25) NOT NULL,
  `city` varchar(25) NOT NULL,
  `state` varchar(20) NOT NULL,
  `zip` varchar(5) NOT NULL,
  `country` varchar(30) NOT NULL,
  `company` varchar(15) NOT NULL,
  `industry` varchar(15) NOT NULL,
  `job_role` varchar(15) NOT NULL,
  `bio` varchar(255) NOT NULL,
  `website` varchar(25) NOT NULL,
  `languages` varchar(15) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=82 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `first_name`, `last_name`, `username`, `password`, `favorite_color`, `birth_date`, `place_of_birth`, `email`, `admin`, `default_pic`, `member`, `friends`, `sign_up_date`, `address`, `city`, `state`, `zip`, `country`, `company`, `industry`, `job_role`, `bio`, `website`, `languages`) VALUES
(13, 'Mick', 'Micah', '', 'password', '', '0000-00-00', '', 'Mgfos2@gmail.com', 1, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(14, 'Lord', 'Almighty', '', '5f4dcc3b5aa765d61d8327deb', '', '0000-00-00', '', 'toogood@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(15, 'Charles', 'Forster', '', '5f4dcc3b5aa765d61d8327deb', '', '0000-00-00', '', 'another1@aol.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(16, 'Reading', 'Dilligently', '', '5f4dcc3b5aa765d61d8327deb', '', '0000-00-00', '', 'taking_answers@aol.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(17, 'Greg', 'Burrayy', '', '5f4dcc3b5aa765d61d8327deb', '', '0000-00-00', '', 'spikey_samurai@aol.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(18, 'Rick', 'Rolled', '', 'bae40c2118df670bfee775541', '', '0000-00-00', '', 'Rickrolled@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(19, 'Micah', 'Forster', '', 'bae40c2118df670bfee775541', '', '0000-00-00', '', 'Mgfos2@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(20, 'I Am', 'Forever', 'savingn13', 'password', '', '0000-00-00', '', '123@yahoo.com', NULL, NULL, 'corporation', NULL, '2013-02-27', '1825 Northglen Circle', 'Orange Park', 'Florida', '32068', 'U.S.', 'RMI', 'Software', 'Intern', 'Currently an   undergraduate at UNF trying to make a name for myself in the computing field', 'www.comPraise.com', 'English'),
(21, 'Van', 'Forster', '', 'password', '', '0000-00-00', '', 'grace@God.Jesus', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(22, 'Ina', 'Bogojevic', '', 'password', '', '0000-00-00', '', 'ina84@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(23, 'Dimpy', 'Sharma', '', 'password', '', '0000-00-00', '', 'Kavita01@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(24, 'Mergen', 'Oraschev', '', 'password', '', '0000-00-00', '', 'mergen01@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(25, 'Shaun', 'Saulsberry', '', 'dream', '', '0000-00-00', '', 'dreamsambition@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(26, 'Micah', 'Foster', '', 'password', '', '0000-00-00', '', 'copy@yahoo.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(27, 'Yua', 'Jin', '', 'passowrd', '', '0000-00-00', '', 'm@aol.com', NULL, NULL, NULL, NULL, '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(28, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(29, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(30, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(31, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(32, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(33, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(34, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(35, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(36, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(37, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(38, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(39, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(40, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(41, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(42, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(43, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(44, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(45, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(46, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(47, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(48, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(49, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(50, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(51, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(52, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(53, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(54, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(55, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(56, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(57, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(58, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(59, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(60, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(61, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(62, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(63, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(64, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(65, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(66, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(67, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(68, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(69, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(70, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, ',18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(71, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(72, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(73, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(74, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '18,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(75, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '13,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(76, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(77, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(78, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(79, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(80, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(81, '', '', '', '', '', '0000-00-00', '', NULL, NULL, NULL, NULL, '20,18,18,13,', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `reciever_user_id` int(5) NOT NULL,
  `sender_user_id` int(3) NOT NULL,
  `notification_type` enum('friend_request') NOT NULL,
  `del_flag` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `reciever_user_id`, `sender_user_id`, `notification_type`, `del_flag`) VALUES
(8, 15, 18, 'friend_request', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
