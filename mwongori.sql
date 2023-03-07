-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 19, 2020 at 09:05 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `mwongori`
--

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE IF NOT EXISTS `fees` (
  `Studentname` varchar(50) NOT NULL,
  `StudentID` varchar(50) NOT NULL,
  `telNo` bigint(255) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Tuitionfee` bigint(20) NOT NULL,
  `Library` bigint(20) NOT NULL,
  `Activity` bigint(20) NOT NULL,
  `Cautionmoney` bigint(20) NOT NULL,
  `Otherexpenses` bigint(20) NOT NULL,
  `Total` bigint(20) NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`Studentname`, `StudentID`, `telNo`, `Email`, `Tuitionfee`, `Library`, `Activity`, `Cautionmoney`, `Otherexpenses`, `Total`) VALUES
('cliff', '876868', 794631365, 'hjjghjgj@gmail.com', 100, 100, 100, 100, 100, 500),
('david', '877676', 745785786, 'dony@gmail.com', 200, 500, 300, 500, 500, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `Firstname` varchar(50) NOT NULL,
  `Surname` varchar(50) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Birthday` date NOT NULL,
  `Gender` char(1) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Indoors` longtext NOT NULL,
  `Outdoors` longtext NOT NULL,
  `Science` longtext NOT NULL,
  `General` longtext NOT NULL,
  `Societies` longtext NOT NULL,
  `Comments` longtext NOT NULL,
  PRIMARY KEY (`StudentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`Firstname`, `Surname`, `Lastname`, `StudentID`, `Birthday`, `Gender`, `Email`, `Indoors`, `Outdoors`, `Science`, `General`, `Societies`, `Comments`) VALUES
('cliff', 'gekonge', 'judy', 2344, '2020-12-10', 'm', 'cliffndege100@gmail.com', 'BasketBall', '.....', '.....', 'Drama Club', '....', 'yes'),
('brian', 'makori', 'mongare', 5186, '2001-09-27', 'm', 'briansmile525@gmail.com', 'NULL', 'Rugby', 'NULL', 'Music Club', 'NULL', 'am glad to be a student'),
('cliff', 'gekonge', 'ndemo', 32435, '2020-11-05', 'f', 'cliffndege100@gmail.com', 'BasketBall', 'NULL', 'IT Club', 'NULL', 'NULL', 'yes'),
('cliff', 'gekonge', 'ndemo', 2343423, '2020-12-11', 'm', 'cliffndege100@gmail.com', 'Floorball', 'NULL', 'Chemistry Club', 'NULL', 'NULL', 'were');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(28, 'David', 'david13@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'cliff', 'cliffndege100@gmail.com', '9e94e929e22a6c121307febc79ea549c'),
(36, 'winn', 'wisk87@gmail.com', '587526cc35b297a23a83f8584a572699'),
(37, 'David', 'david17@gmail.com', 'd51d090c5596779dd6ac268572205d33');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
