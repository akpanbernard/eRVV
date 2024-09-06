-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 28, 2015 at 02:39 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ervv`
--
CREATE DATABASE IF NOT EXISTS `ervv` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ervv`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE IF NOT EXISTS `admin_table` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `username`, `password`) VALUES
(1, 'usman', 'admin'),
(2, 'sunny', 'asaboy123');

-- --------------------------------------------------------

--
-- Table structure for table `nabteb2007`
--

CREATE TABLE IF NOT EXISTS `nabteb2007` (
  `can_id` int(255) NOT NULL AUTO_INCREMENT,
  `can_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `center` varchar(255) NOT NULL,
  `can_no` varchar(255) NOT NULL,
  `can_photo` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_year` varchar(255) NOT NULL,
  `maths` varchar(5) NOT NULL,
  `english` varchar(5) NOT NULL,
  `chemistry` varchar(5) NOT NULL,
  `biology` varchar(5) NOT NULL,
  `economics` varchar(5) NOT NULL,
  `commerce` varchar(5) NOT NULL,
  `accounting` varchar(5) NOT NULL,
  `computer` varchar(5) NOT NULL,
  `agric` varchar(5) NOT NULL,
  `physics` varchar(5) NOT NULL,
  `literature` varchar(5) NOT NULL,
  `fmaths` varchar(5) NOT NULL,
  `geography` varchar(5) NOT NULL,
  `government` varchar(5) NOT NULL,
  `crs` varchar(5) NOT NULL,
  `irs` varchar(5) NOT NULL,
  `arabic` varchar(5) NOT NULL,
  `hausa` varchar(5) NOT NULL,
  `igbo` varchar(5) NOT NULL,
  `yoruba` varchar(5) NOT NULL,
  `home` varchar(5) NOT NULL,
  PRIMARY KEY (`can_id`),
  UNIQUE KEY `can_no` (`can_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `nabteb2007`
--

INSERT INTO `nabteb2007` (`can_id`, `can_name`, `dob`, `sex`, `center`, `can_no`, `can_photo`, `exam_type`, `exam_year`, `maths`, `english`, `chemistry`, `biology`, `economics`, `commerce`, `accounting`, `computer`, `agric`, `physics`, `literature`, `fmaths`, `geography`, `government`, `crs`, `irs`, `arabic`, `hausa`, `igbo`, `yoruba`, `home`) VALUES
(1, 'USMAN MOHAMMED', '9TH AUGUST, 1989', 'male', 'FEDERAL SCIENCE AND TECHNICAL COLLEGE, KADUNA', '2147483647', '44ayuba.jpg', 'NABTEB', '2007', 'C5', 'C5', 'C6', 'C6', 'D7', 'NIL', 'NIL', 'NIL', 'D7', 'NIL', 'NIL', 'NIL', 'D7', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL'),
(5, 'SULEIMAN MUNIR', '4TH JUNE, 1991', 'male', 'GOVERNMENT SECONDARY SCHOOL ARGUNGUN', '4081000023', '2998skertel.jpg', 'NABTEB', '2007', 'C6', 'C6', 'C6', 'D7', 'D7', 'NIL', 'NIL', 'NIL', 'D7', 'D7', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL'),
(6, 'ISMAIL LUKMAN KAFAKA', '8TH AUGUST, 1990', 'male', 'GOVERNMENT SCIENCE COLLEGE, ALIERO', '4081000301', '8311rocker.JPG', 'NABTEB', '2007', 'C6', 'C6', 'C6', 'D7', 'D7', 'NIL', 'NIL', 'NIL', 'D7', 'D7', 'NIL', 'NIL', 'C5', 'NIL', 'NIL', 'NIL', 'NIL', 'C6', 'NIL', 'NIL', 'NIL');

-- --------------------------------------------------------

--
-- Table structure for table `neco2010`
--

CREATE TABLE IF NOT EXISTS `neco2010` (
  `can_id` int(255) NOT NULL AUTO_INCREMENT,
  `can_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `center` varchar(255) NOT NULL,
  `can_no` int(255) NOT NULL,
  `can_photo` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_year` varchar(255) NOT NULL,
  `maths` varchar(5) NOT NULL,
  `english` varchar(5) NOT NULL,
  `chemistry` varchar(5) NOT NULL,
  `biology` varchar(5) NOT NULL,
  `economics` varchar(5) NOT NULL,
  `commerce` varchar(5) NOT NULL,
  `accounting` varchar(5) NOT NULL,
  `computer` varchar(5) NOT NULL,
  `agric` varchar(5) NOT NULL,
  `physics` varchar(5) NOT NULL,
  `literature` varchar(5) NOT NULL,
  `fmaths` varchar(5) NOT NULL,
  `geography` varchar(5) NOT NULL,
  `government` varchar(5) NOT NULL,
  `crs` varchar(5) NOT NULL,
  `irs` varchar(5) NOT NULL,
  `arabic` varchar(5) NOT NULL,
  `hausa` varchar(5) NOT NULL,
  `igbo` varchar(5) NOT NULL,
  `yoruba` varchar(5) NOT NULL,
  `home` varchar(5) NOT NULL,
  PRIMARY KEY (`can_id`),
  UNIQUE KEY `can_no` (`can_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `neco2010`
--

INSERT INTO `neco2010` (`can_id`, `can_name`, `dob`, `sex`, `center`, `can_no`, `can_photo`, `exam_type`, `exam_year`, `maths`, `english`, `chemistry`, `biology`, `economics`, `commerce`, `accounting`, `computer`, `agric`, `physics`, `literature`, `fmaths`, `geography`, `government`, `crs`, `irs`, `arabic`, `hausa`, `igbo`, `yoruba`, `home`) VALUES
(1, 'AYUBA ABDULLAHI', '6TH JUNE, 1990', 'male', 'GOVERNMENT SECONDARY SCHOOL ARGUNGUN', 2147483647, '8311rocker.jpg', 'NECO', '2010', 'B3', 'E8', 'C6', 'C6', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'C4', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL', 'NIL');

-- --------------------------------------------------------

--
-- Table structure for table `users_table`
--

CREATE TABLE IF NOT EXISTS `users_table` (
  `user_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users_table`
--

INSERT INTO `users_table` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'Ibrahim Mungadi', 'mungadi'),
(2, 'Salihu Umar', 'sally123'),
(3, 'Simeon Bawa', 'sbawa24'),
(4, 'sunny', 'asaboy123');

-- --------------------------------------------------------

--
-- Table structure for table `waec2011`
--

CREATE TABLE IF NOT EXISTS `waec2011` (
  `can_id` int(255) NOT NULL AUTO_INCREMENT,
  `can_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `sex` varchar(255) NOT NULL,
  `center` varchar(255) NOT NULL,
  `can_no` int(255) NOT NULL,
  `can_photo` varchar(255) NOT NULL,
  `exam_type` varchar(255) NOT NULL,
  `exam_year` varchar(255) NOT NULL,
  `maths` varchar(5) NOT NULL,
  `english` varchar(5) NOT NULL,
  `chemistry` varchar(5) NOT NULL,
  `biology` varchar(5) NOT NULL,
  `economics` varchar(5) NOT NULL,
  `commerce` varchar(5) NOT NULL,
  `accounting` varchar(5) NOT NULL,
  `computer` varchar(5) NOT NULL,
  `agric` varchar(5) NOT NULL,
  `physics` varchar(5) NOT NULL,
  `literature` varchar(5) NOT NULL,
  `fmaths` varchar(5) NOT NULL,
  `geography` varchar(5) NOT NULL,
  `government` varchar(5) NOT NULL,
  `crs` varchar(5) NOT NULL,
  `irs` varchar(5) NOT NULL,
  `arabic` varchar(5) NOT NULL,
  `hausa` varchar(5) NOT NULL,
  `igbo` varchar(5) NOT NULL,
  `yoruba` varchar(5) NOT NULL,
  `home` varchar(5) NOT NULL,
  PRIMARY KEY (`can_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `waec2011`
--

INSERT INTO `waec2011` (`can_id`, `can_name`, `dob`, `sex`, `center`, `can_no`, `can_photo`, `exam_type`, `exam_year`, `maths`, `english`, `chemistry`, `biology`, `economics`, `commerce`, `accounting`, `computer`, `agric`, `physics`, `literature`, `fmaths`, `geography`, `government`, `crs`, `irs`, `arabic`, `hausa`, `igbo`, `yoruba`, `home`) VALUES
(1, 'LAWAL OLAJUMOKE GANIYAT', '5TH NOVEMBER, 1992', 'female', 'GOVERNMENT GIRLS COLLEGE, OSHOGBO.', 2147483647, '646ellorefemmechalk4.jpg', 'WAEC', '2011', 'B3', 'B3', 'B3', 'C4', 'C4', 'NIL', 'NIL', 'NIL', 'C4', 'C5', 'NIL', 'C5', 'C5', 'NIL', 'C6', 'NIL', 'NIL', 'NIL', 'NIL', 'E8', 'NIL');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
