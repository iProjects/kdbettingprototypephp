-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2015 at 04:45 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mididb`
--
CREATE DATABASE IF NOT EXISTS `mididb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `mididb`;

-- --------------------------------------------------------

--
-- Table structure for table `midiassets`
--

DROP TABLE IF EXISTS `midiassets`;
CREATE TABLE IF NOT EXISTS `midiassets` (
  `id` int(11) NOT NULL,
  `assetname` varchar(200) DEFAULT NULL,
  `assettype` varchar(200) DEFAULT NULL,
  `dateacquired` varchar(200) DEFAULT NULL,
  `acquiredvalue` varchar(200) DEFAULT NULL,
  `currentvalue` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midiassets`
--

INSERT INTO `midiassets` (`id`, `assetname`, `assettype`, `dateacquired`, `acquiredvalue`, `currentvalue`) VALUES
(3, 'sssssssssss', 'ssssssss', '2015-06-07', '1', '1'),
(4, 'test', 'test', '2015-06-10', '433', '4334'),
(5, 'test', 'test', '2015-06-13', '12345', '12345'),
(6, 'test', 'test', '2015-06-13', '12345', '12345'),
(7, 'test', 'test', '2015-06-13', '12345', '12345'),
(8, 'test', 'test', '2015-06-13', '12345', '12345'),
(9, 'test', 'test', '2015-06-13', '12345', '12345'),
(10, 'test', 'test', '2015-06-13', '12345', '12345'),
(11, 'test', 'test', '2015-06-13', '12345', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `midiemployees`
--

DROP TABLE IF EXISTS `midiemployees`;
CREATE TABLE IF NOT EXISTS `midiemployees` (
  `id` int(11) NOT NULL,
  `surname` varchar(200) DEFAULT NULL,
  `othernames` varchar(200) DEFAULT NULL,
  `gender` varchar(200) DEFAULT NULL,
  `informby` varchar(200) DEFAULT NULL,
  `dateofbirth` varchar(200) DEFAULT NULL,
  `datecreated` varchar(200) DEFAULT NULL,
  `dateofemployment` varchar(200) DEFAULT NULL,
  `basicsalary` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `midiusers`
--

DROP TABLE IF EXISTS `midiusers`;
CREATE TABLE IF NOT EXISTS `midiusers` (
  `id` int(11) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `pwd` varchar(200) DEFAULT NULL,
  `telephone` varchar(200) DEFAULT NULL,
  `usertype` varchar(200) DEFAULT NULL,
  `status` varchar(200) DEFAULT NULL,
  `role` varchar(200) DEFAULT NULL,
  `lastlogindate` varchar(200) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `midiusers`
--

INSERT INTO `midiusers` (`id`, `email`, `pwd`, `telephone`, `usertype`, `status`, `role`, `lastlogindate`) VALUES
(32, 'k@k.com', 'k', 'k', 'k', 'k', 'k', NULL),
(33, 'v@v.com', 'v', 'v', 'v', 'v', 'v', NULL),
(34, 'a@a.com', 'a', 'a', 'a', 'a', 'a', NULL),
(35, 's@s.com', 's', 's', 's', 's', 's', NULL),
(36, 'w@w.com', 'w', 'w', 'w', 'w', 'w', NULL),
(37, 'd@d.com', 'd', 'd', 'd', 'd', 'd', NULL),
(38, 'q@q.com', 'q', 'q', 'q', 'q', 'q', NULL),
(39, 'e@e.com', 'e', 'ee', 'e', 'e', 'e', NULL),
(40, 'z@z.com', 'z', 'z', 'z', 'z', 'z', NULL),
(41, 'r@r.com', 'r', 'r', 'r', 'r', 'r', NULL),
(42, 't@t.com', 't', 't', 't', 't', 't', NULL),
(43, 'y@y.com', 'y', 'y', 'y', 'y', 'y', NULL),
(44, 'u@u.com', 'u', 'u', 'u', 'u', 'u', NULL),
(45, 'o@o.com', 'o', 'o', 'o', 'o', 'o', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `midiassets`
--
ALTER TABLE `midiassets`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `midiemployees`
--
ALTER TABLE `midiemployees`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `midiusers`
--
ALTER TABLE `midiusers`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `midiassets`
--
ALTER TABLE `midiassets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `midiemployees`
--
ALTER TABLE `midiemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `midiusers`
--
ALTER TABLE `midiusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
