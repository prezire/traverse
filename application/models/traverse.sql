-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 16, 2014 at 09:53 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `traverse`
--

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `name`, `description`, `address`, `landline`, `mobile`, `fax`) VALUES
(7, 'o', 'o', 'o', '1', '1', '1'),
(8, 'new org', 'f', 'f', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `organization_members`
--

CREATE TABLE IF NOT EXISTS `organization_members` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `organization_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `organization_id` (`organization_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `organization_members`
--

INSERT INTO `organization_members` (`id`, `organization_id`, `user_id`) VALUES
(4, 7, 105),
(5, 7, 106),
(6, 7, 107),
(7, 7, 108),
(8, 7, 8),
(9, 7, 110),
(10, 7, 111),
(11, 8, 105);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Visitor'),
(3, 'Super Admin'),
(4, 'Editor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `nationality` varchar(255) NOT NULL,
  `alternate_email` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `image_filename` varchar(255) NOT NULL,
  `plan` enum('Small','Medium','Large') NOT NULL DEFAULT 'Small',
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=121 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `email`, `password`, `title`, `full_name`, `enabled`, `landline`, `mobile`, `address`, `nationality`, `alternate_email`, `image_path`, `image_filename`, `plan`) VALUES
(8, 1, 'e', 'e', 'Mr.', 'e', 0, '3', '3', 'e', 'e', 'e', '', '', 'Small'),
(105, 1, 'kj', 'lkj', 'Mr.', 'asdflkj', 0, '1', '1', 'w', '1', 'lj', '', '', 'Small'),
(106, 1, 'kj', 'lkj', 'Mr.', 'asdflkj', 0, '1', '1', 'w', '1', 'lj', '', '', 'Small'),
(107, 1, 'kj', 'lkj', 'Mr.', 'asdflkj', 0, '1', '1', 'w', '1', 'lj', '', '', 'Small'),
(108, 1, 'w', 'w', 'Mr.', 'w', 0, '3', '3', 'w', 'w', 'w', '', '', 'Small'),
(110, 1, 'f', 'f', 'Mr.', 'f', 0, '3', '3', 'fx', 'f', 'f', '', '', 'Small'),
(111, 1, 'kj', 'lkj', 'Mr.', 'asdflkj', 0, '1', '1', 'w', '1', 'lj', '', '', 'Small'),
(112, 2, '', '', '', 'sdf', 0, '', '', '', '', '', '', '', 'Small'),
(113, 2, '', '', '', 'sdf', 0, '', '', '', '', '', '', '', 'Small'),
(114, 2, '', '', '', 'adflk', 0, '', '', '', '', '', '', '', 'Small'),
(115, 2, '', '', '', 'dfasdlkj', 0, '', '', '', '', '', '', '', 'Small'),
(116, 2, '', '', '', 'adsfsf', 0, '', '', '', '', '', '', '', 'Small'),
(117, 2, '', '', '', 'adsf', 0, '', '', '', '', '', '', '', 'Small'),
(118, 2, '', '', '', 'adsf', 0, '', '', '', '', '', '', '', 'Small'),
(119, 2, '', '', '', 'xx', 0, '', '', '', '', '', '', '', 'Small'),
(120, 2, '', '', '', 'ff', 0, '', '', '', '', '', '', '', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `purpose` text NOT NULL,
  `person_to_visit` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `date_time_in` datetime NOT NULL,
  `date_time_out` datetime NOT NULL,
  `organization_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `organization_id` (`organization_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `user_id`, `purpose`, `person_to_visit`, `company`, `date_time_in`, `date_time_out`, `organization_id`) VALUES
(90, 114, 'klk', 'jl', 'lk', '2014-11-16 14:52:00', '2014-11-16 14:52:00', 7),
(91, 115, 'kjflskdjl', 'lkjflksjl', 'kjdsf', '2014-11-16 15:07:00', '2014-11-16 15:07:00', 8),
(92, 116, 'kjflskdjl', 'fsdjl', 'kjfl', '2014-11-16 15:08:00', '2014-11-16 15:08:00', 8),
(93, 117, 'lj', 'fsj', 'lk', '2014-11-16 15:09:00', '2014-11-16 15:09:00', 8),
(94, 118, 'fsdf', 'fsdf', 'fsdf', '2014-11-16 15:10:00', '2014-11-16 15:10:00', 8),
(95, 119, 'xx', 'xx', 'xx', '2014-11-16 15:18:00', '2014-11-16 15:18:00', 7),
(96, 120, 'ff', 'ff', 'ff', '2014-11-16 15:19:00', '2014-11-16 15:19:00', 7);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `organization_members`
--
ALTER TABLE `organization_members`
  ADD CONSTRAINT `organization_members_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `organization_members_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `visitors_ibfk_2` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `visitors_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
