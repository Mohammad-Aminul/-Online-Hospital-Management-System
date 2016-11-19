-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2015 at 09:23 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbappointment`
--
CREATE DATABASE IF NOT EXISTS `dbappointment` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbappointment`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE IF NOT EXISTS `tbladmin` (
  `docname` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`docname`, `username`, `password`) VALUES
('Dr. Mostafa Miah', 'mostafa', 'miah'),
('Dr. Mahamudul Hasan', 'ma', 'ha');

-- --------------------------------------------------------

--
-- Table structure for table `tblblood_donation`
--

CREATE TABLE IF NOT EXISTS `tblblood_donation` (
  `donar_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `contact_number` varchar(20) DEFAULT NULL,
  `blood_group` char(3) NOT NULL,
  `age` int(10) DEFAULT NULL,
  `occupation` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`donar_id`,`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1007 ;

--
-- Dumping data for table `tblblood_donation`
--

INSERT INTO `tblblood_donation` (`donar_id`, `name`, `password`, `contact_number`, `blood_group`, `age`, `occupation`) VALUES
(1003, 'a', 'a', '222', 'A+', 22, 's'),
(1004, 'kjkl', 'jlkjl', '3', 'A+', 22, 's'),
(1005, 'Mohammad aminul islam', '12345', '01916232841', 'O+', 22, 'student'),
(1006, 'z', 'z', '01916232841', 'A-', 22, 'student');

-- --------------------------------------------------------

--
-- Table structure for table `tblmahamudul`
--

CREATE TABLE IF NOT EXISTS `tblmahamudul` (
  `serial_no` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `gender` char(6) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `date` char(3) DEFAULT NULL,
  `month` char(10) DEFAULT NULL,
  `year` char(5) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`serial_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblmahamudul`
--

INSERT INTO `tblmahamudul` (`serial_no`, `first_name`, `last_name`, `mobile_no`, `email`, `address`, `gender`, `age`, `date`, `month`, `year`, `status`) VALUES
(1, 'aminul', 'islam', '01916232841', 'aminul.ruet@yahoo.com', 'tangail', 'Male', 22, '5', 'February', '2014', 1),
(2, 'aminul', 'islam', '01916232841', 'aminul.ruet@yahoo.com', 'tangail', 'Male', 22, '5', 'February', '2014', 1),
(3, 'ruhul', 'amin', '171377827', 'ruhul@gmail.com', 'gaibandha', 'Male', 22, '20', 'November', '2014', 1),
(4, 'asad', 'islam', '171727727', 'asad@gmail.com', 'raj', 'Male', 23, '17', 'November', '2014', 0),
(5, 'rajib', 'miah', '19182771', 'rajib@gmail.com', 'tan', 'Male', 32, '29', 'November', '2014', 1),
(6, 'Monirul', 'islam', '1918571650', 'milon@gmail.com', 'Basail,tangail', 'Male', 22, '31', 'November', '2014', 0),
(7, 'Monirul', 'islam', '1918571650', 'milon@gmail.com', 'Basail,tangail,Bangladesh', 'Male', 22, '31', 'November', '2014', 0),
(8, 'aminul', 'islam', '01916232841', 'aminul.ruet@yahoo.com', 'tangail', 'Male', 22, '5', 'February', '2014', 1),
(9, 'ruhul', 'islam', '19182771', 'ruhul@gmail.com', 'gaibandha', 'Male', 22, '1', 'January', '2014', 0),
(10, 'ruhul', 'amin', '171377827', 'ruhul@gmail.com', 'gaibandha', 'Male', 22, '1', 'January', '2014', 0),
(11, 'Tarek', 'Miah', '1918277122', 'tarek@gamil.com', 'Chittagong', 'Male', 22, '20', 'March', '2015', 0),
(12, 'Monirul', 'islam', '1918277122', 'milon@gmail.com', 'Basail,tangail', 'Male', 22, '19', 'January', '2015', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblmostafa`
--

CREATE TABLE IF NOT EXISTS `tblmostafa` (
  `serial_no` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `mobile_no` varchar(13) NOT NULL,
  `email` varchar(40) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `gender` char(6) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `date` char(3) DEFAULT NULL,
  `month` char(10) DEFAULT NULL,
  `year` char(5) DEFAULT NULL,
  `status` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`serial_no`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `tblmostafa`
--

INSERT INTO `tblmostafa` (`serial_no`, `first_name`, `last_name`, `mobile_no`, `email`, `address`, `gender`, `age`, `date`, `month`, `year`, `status`) VALUES
(1, 'aminul', 'islam', '01916232841', 'aminul.ruet@yahoo.com', 'tangail', 'Male', 22, '5', 'February', '2014', 1),
(2, 'ruhul', 'amin', '171727727', 'ruhul@gmail.com', 'gaibandha', 'Male', 22, '8', 'November', '2014', 1),
(3, 'ruhul', 'amin', '171727727', 'ruhul@gmail.com', 'gaibandha', 'Male', 22, '8', 'November', '2014', 1),
(4, 'Rajib', 'Miah', '1981929911', 'rajib@gmail.com', 'dhaka', 'Male', 22, '19', 'November', '2014', 1),
(5, 'Tarek', 'islam', '1716277732', 'tarek@gamil.com', 'Chittagong', 'Male', 22, '15', 'December', '2014', NULL),
(6, 'Tarek', 'islam', '1716277732', 'tarek@gamil.com', 'Chittagong', 'Male', 22, '15', 'December', '2014', NULL),
(7, 'Monirul', 'islam', '1918277122', 'milon@gmail.com', 'Basail,tangail', 'Male', 22, '29', 'December', '2014', 1),
(8, 'jahid', 'hasan', '171727727', 'jahid.ruet@gmail.com', 'lalmoni', 'Male', 21, '19', 'December', '2014', NULL),
(9, 'Rohan', 'Miah', '1628817827', 'r.k@gamil.com', 'Kanchanpur', 'Male', 7, '19', 'January', '2015', NULL),
(10, 'Rohan', 'Miah', '1628817827', 'r.k@gamil.com', 'Kanchanpur', 'Male', 8, '19', 'January', '2015', 1),
(11, 'aminul', 'islam', '928932', 'aminulkbt@gmail.com', 'raj', 'Male', 23, '18', 'January', '2015', NULL),
(12, 'jjjjjjjjjjjjjjjjj', 'Miah', '928932', 'tareq.sefati@gmail.com', 'raj', 'Male', 33, '18', 'January', '2014', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
