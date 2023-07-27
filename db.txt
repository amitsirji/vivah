-- phpMyAdmin SQL Dump
-- version 2.11.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 16, 2014 at 07:52 PM
-- Server version: 5.0.51
-- PHP Version: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `vivah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `name` varchar(15) NOT NULL,
  `passwd` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`name`, `passwd`) VALUES
('\0', '773214e90eb99bdb'),
('1', '1'),
('\0', '773214e90eb99bdb');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(30) collate latin1_general_ci NOT NULL,
  `address` varchar(50) collate latin1_general_ci NOT NULL,
  `gender` varchar(5) collate latin1_general_ci NOT NULL,
  `emailid` varchar(30) collate latin1_general_ci NOT NULL,
  `city` varchar(20) collate latin1_general_ci NOT NULL,
  `state` varchar(20) collate latin1_general_ci NOT NULL,
  `comment` varchar(50) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `address`, `gender`, `emailid`, `city`, `state`, `comment`) VALUES
('jk', 'rajkot-4', 'male', 'jk@yahoo.com', 'rajkot', 'gujarat', 'very good'),
('Raj', 'Rajkot', 'Male', 'raj@yahoo.com', 'Rajkot', 'Gujarat', 'No'),
('ajk', 'j.jkljkj', 'Male', 'ajk@kk.com', 'rajkot', 'gujarat', 'jlskdjksld');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `no` int(3) NOT NULL,
  `name` varchar(25) collate latin1_general_ci NOT NULL,
  `gender` char(1) collate latin1_general_ci NOT NULL,
  `phoneno` int(10) NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`no`, `name`, `gender`, `phoneno`, `email`) VALUES
(1, 'jk', 'm', 2147483647, 'kjkjkj'),
(0, '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` varchar(10) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `photo`) VALUES
('p1', ''),
('\0', '773214e90eb99bdb'),
('', ''),
('\0', '773214e90eb99bdb');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` varchar(15) NOT NULL,
  `fullname` varchar(38) NOT NULL,
  `emailid` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `birthday` int(5) NOT NULL,
  `birthmonth` varchar(5) NOT NULL,
  `birthyear` int(5) NOT NULL,
  `profilecreator` varchar(10) NOT NULL,
  `meritalstatus` varchar(15) NOT NULL,
  `havechildren` varchar(25) NOT NULL,
  `height` varchar(30) NOT NULL,
  `bodytype` varchar(10) NOT NULL,
  `complexion` varchar(15) NOT NULL,
  `specialcases` varchar(40) NOT NULL,
  `mothertongue` varchar(10) NOT NULL,
  `caste` varchar(30) NOT NULL,
  `subcaste` varchar(30) NOT NULL,
  `manglik` varchar(10) NOT NULL,
  `familyvalues` varchar(10) NOT NULL,
  `education` varchar(10) NOT NULL,
  `profession` varchar(40) NOT NULL,
  `diet` varchar(10) NOT NULL,
  `smoke` varchar(10) NOT NULL,
  `drink` varchar(5) NOT NULL,
  `state` varchar(15) NOT NULL,
  `city` varchar(15) NOT NULL,
  `residencystatus` varchar(15) NOT NULL,
  `contactnumber` varchar(15) NOT NULL,
  `more` varchar(200) NOT NULL,
  `photo` varchar(100) NOT NULL,
  `age` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `fullname`, `emailid`, `religion`, `country`, `gender`, `birthday`, `birthmonth`, `birthyear`, `profilecreator`, `meritalstatus`, `havechildren`, `height`, `bodytype`, `complexion`, `specialcases`, `mothertongue`, `caste`, `subcaste`, `manglik`, `familyvalues`, `education`, `profession`, `diet`, `smoke`, `drink`, `state`, `city`, `residencystatus`, `contactnumber`, `more`, `photo`, `age`) VALUES
('p1', 'Ratan J Parekh', 'sllsfjl@yahoo.com', 'Magahi', 'India', 'Male', 4, 'Apr', 2002, 'self', 'Never Married', 'No', '150 cm', 'Average', 'Wheatish', 'None', 'Brij', 'Besta', 'uhte', 'Don''t Know', 'Moderate', 'Bachelors', 'Commerce Professional', 'Veg', 'No', 'No', 'Punjab', 'Jaipur', 'Citizen', '+87878785456', '----------					', '', '26'),
('14780', 'b', 'b@gmail;.com', 'Gujrati', 'India', 'Male', 4, 'Apr', 1985, 'Sibling', 'Divorced', 'Yes,Living together', '150 cm', 'Average', 'Wheatish', 'Physically challenged due to accident', 'Arunachail', 'Agarwal', '', 'Yes', 'Traditiona', '', '', '', '', '', '', '', '', '', '												', '', '15'),
('naresh', 'yogi', 'ja@gmail.com', 'Tamil', 'India', 'Male', 18, 'Nov', 1993, 'Parent/Gua', 'Divorced', 'Yes,Living together', '150 cm', 'Average', 'Wheatish', 'Physically challenged from birth', 'Khandesi', 'Aryasamaj', 'fgf', 'Yes', 'Moderate', 'Bachelors', 'Science Professional', 'Veg', 'Yes', 'Yes', 'Hariyana', 'Udaipur', 'Citizen', '1223454565', '	nnen					', '', '34');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `emailid` varchar(30) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `birthday` varchar(5) NOT NULL,
  `birthmonth` varchar(5) NOT NULL,
  `birthyear` varchar(5) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `country` varchar(25) NOT NULL,
  `state` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `password`, `emailid`, `gender`, `birthday`, `birthmonth`, `birthyear`, `religion`, `country`, `state`) VALUES
('j', 'ajk', 'asdw@yahoo.com', 'Male', '1', 'Jan', '1940', 'Manipuri', 'India', 'Assam'),
('Dhaval', '123', 'Dhavalsavsani@gmail.com', 'Male', '15', 'Apr', '1989', 'Gujrati', 'India', 'Gujarat'),
('1', 'a', 'a@yahoo.com', 'Male', '1', 'Jan', '1975', 'Bangali', 'India', 'Uttar Pradesh'),
('raj', 'raj', 'raj@yahoo.com', 'Male', '22', 'Apr', '1989', 'Gujrati', 'India', 'Gujarat'),
('b', 'b', 'b@yahoo.com', 'Male', '30', 'Jun', '1987', 'Gujrati', 'India', 'Gujarat'),
('14780', '12345', 'asdf@gmail;.com', 'Male', '1', 'Jan', '1975', 'Bangali', 'India', 'Uttar Pradesh'),
('naresh', '111', 'ja@gmail.com', 'Male', '1', 'Jan', '1975', 'Bangali', 'India', 'Uttar Pradesh');

-- --------------------------------------------------------

--
-- Table structure for table `stud`
--

CREATE TABLE `stud` (
  `No` varchar(3) collate latin1_general_ci NOT NULL,
  `Name` varchar(20) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`No`),
  UNIQUE KEY `No` (`No`),
  UNIQUE KEY `No_2` (`No`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `stud`
--

INSERT INTO `stud` (`No`, `Name`) VALUES
('2', 'DhavalI'),
('1', 'Yashvant'),
('01', 'yash'),
('4', 'Ashutosh'),
('5', 'ajk'),
('', '');
