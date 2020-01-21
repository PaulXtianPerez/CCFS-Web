-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 21, 2020 at 06:41 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ccfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `accid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(45) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(16) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `type` varchar(15) NOT NULL,
  `accstatus` varchar(11) DEFAULT 'Active',
  PRIMARY KEY (`accid`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accid`, `empid`, `username`, `password`, `fname`, `lname`, `type`, `accstatus`) VALUES
(1, 'CCFS-001', 'REGISTRAR', 'REGISTRAR', 'ADAM', 'SOBREMONTE', 'REGISTRAR', 'Active'),
(2, 'CCFS-002', 'Paul_Acc', 'a123', 'PAUL', 'PEREZ', 'REGISTRAR', 'Inactive'),
(3, 'CCFS-003', 'ACCOUNTING', 'ACCOUNTING', 'JARGON', 'TAASIN', 'ACCOUNTING', 'Active'),
(4, 'CCFS-004', 'vinceAcc', 'running', 'VINCENT', 'TOLENTINO', 'ACCOUNTING', 'Inactive'),
(5, 'CCFS-005', 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 'Active'),
(6, 'CCFS-008', 'ACC_IMRAN', '12345', 'IMRAN', 'MAHMOOD', 'ACCOUNTING', 'Active'),
(7, 'CCFS-009', 'TEST', 'TEST', 'TEST', 'TEST', 'ADMIN', 'Active'),
(8, '30', 'JacobAnderson', '123456', 'Jacob ', 'Anderson', 'Registrar', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
CREATE TABLE IF NOT EXISTS `assessment` (
  `assessID` int(11) NOT NULL AUTO_INCREMENT,
  `amount` double NOT NULL,
  `IDno` int(11) NOT NULL,
  `assessfor` varchar(45) DEFAULT NULL,
  `duedate` date DEFAULT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`assessID`),
  KEY `IDno` (`IDno`),
  KEY `yearid` (`yearid`)
) ENGINE=InnoDB AUTO_INCREMENT=363 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessment`
--

INSERT INTO `assessment` (`assessID`, `amount`, `IDno`, `assessfor`, `duedate`, `yearid`) VALUES
(343, 50, 210002, 'downpayment', NULL, 10),
(344, 216.66666666667, 210002, 'July', NULL, 10),
(345, 216.66666666667, 210002, 'August', NULL, 10),
(346, 216.66666666667, 210002, 'September', NULL, 10),
(347, 216.66666666667, 210002, 'October', NULL, 10),
(348, 216.66666666667, 210002, 'November', NULL, 10),
(349, 216.66666666667, 210002, 'December', NULL, 10),
(350, 216.66666666667, 210002, 'January', NULL, 10),
(351, 216.66666666667, 210002, 'February', NULL, 10),
(352, 216.66666666667, 210002, 'March', NULL, 10),
(353, 50, 210010, 'downpayment', NULL, 10),
(354, 216.66666666667, 210010, 'July', NULL, 10),
(355, 216.66666666667, 210010, 'August', NULL, 10),
(356, 216.66666666667, 210010, 'September', NULL, 10),
(357, 216.66666666667, 210010, 'October', NULL, 10),
(358, 216.66666666667, 210010, 'November', NULL, 10),
(359, 216.66666666667, 210010, 'December', NULL, 10),
(360, 216.66666666667, 210010, 'January', NULL, 10),
(361, 216.66666666667, 210010, 'February', NULL, 10),
(362, 216.66666666667, 210010, 'March', NULL, 10);

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attid` int(11) NOT NULL AUTO_INCREMENT,
  `IDno` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `month` varchar(31) DEFAULT NULL,
  `daysPres` int(40) DEFAULT NULL,
  `daysTar` int(40) DEFAULT NULL,
  `daysAbs` int(40) DEFAULT NULL,
  PRIMARY KEY (`attid`) USING BTREE,
  KEY `studid` (`IDno`,`yearid`) USING BTREE,
  KEY `idyear` (`yearid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=218 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attid`, `IDno`, `yearid`, `month`, `daysPres`, `daysTar`, `daysAbs`) VALUES
(122, 210001, 10, 'Jan', 1, 1, 1),
(123, 210001, 10, 'Feb', NULL, NULL, NULL),
(124, 210001, 10, 'Mar', NULL, NULL, NULL),
(125, 210001, 10, 'Apr', NULL, NULL, NULL),
(126, 210001, 10, 'May', NULL, NULL, NULL),
(127, 210001, 10, 'Jun', NULL, NULL, NULL),
(128, 210001, 10, 'Jul', NULL, NULL, NULL),
(129, 210001, 10, 'Aug', NULL, NULL, NULL),
(130, 210001, 10, 'Sep', NULL, NULL, NULL),
(131, 210001, 10, 'Oct', NULL, NULL, NULL),
(132, 210001, 10, 'Nov', NULL, NULL, NULL),
(133, 210001, 10, 'Dec', NULL, NULL, NULL),
(134, 210004, 15, 'Jan', NULL, NULL, NULL),
(135, 210004, 15, 'Feb', NULL, NULL, NULL),
(136, 210004, 15, 'Mar', NULL, NULL, NULL),
(137, 210004, 15, 'Apr', NULL, NULL, NULL),
(138, 210004, 15, 'May', NULL, NULL, NULL),
(139, 210004, 15, 'Jun', NULL, NULL, NULL),
(140, 210004, 15, 'Jul', NULL, NULL, NULL),
(141, 210004, 15, 'Aug', NULL, NULL, NULL),
(142, 210004, 15, 'Sep', NULL, NULL, NULL),
(143, 210004, 15, 'Oct', NULL, NULL, NULL),
(144, 210004, 15, 'Nov', NULL, NULL, NULL),
(145, 210004, 15, 'Dec', NULL, NULL, NULL),
(146, 190023, 15, 'Jan', NULL, NULL, NULL),
(147, 190023, 15, 'Feb', NULL, NULL, NULL),
(148, 190023, 15, 'Mar', NULL, NULL, NULL),
(149, 190023, 15, 'Apr', NULL, NULL, NULL),
(150, 190023, 15, 'May', NULL, NULL, NULL),
(151, 190023, 15, 'Jun', NULL, NULL, NULL),
(152, 190023, 15, 'Jul', NULL, NULL, NULL),
(153, 190023, 15, 'Aug', NULL, NULL, NULL),
(154, 190023, 15, 'Sep', NULL, NULL, NULL),
(155, 190023, 15, 'Oct', NULL, NULL, NULL),
(156, 190023, 15, 'Nov', NULL, NULL, NULL),
(157, 190023, 15, 'Dec', NULL, NULL, NULL),
(158, 200009, 15, 'Jan', NULL, NULL, NULL),
(159, 200009, 15, 'Feb', NULL, NULL, NULL),
(160, 200009, 15, 'Mar', NULL, NULL, NULL),
(161, 200009, 15, 'Apr', NULL, NULL, NULL),
(162, 200009, 15, 'May', NULL, NULL, NULL),
(163, 200009, 15, 'Jun', NULL, NULL, NULL),
(164, 200009, 15, 'Jul', NULL, NULL, NULL),
(165, 200009, 15, 'Aug', NULL, NULL, NULL),
(166, 200009, 15, 'Sep', NULL, NULL, NULL),
(167, 200009, 15, 'Oct', NULL, NULL, NULL),
(168, 200009, 15, 'Nov', NULL, NULL, NULL),
(169, 200009, 15, 'Dec', NULL, NULL, NULL),
(170, 200001, 15, 'Jan', NULL, NULL, NULL),
(171, 200001, 15, 'Feb', NULL, NULL, NULL),
(172, 200001, 15, 'Mar', NULL, NULL, NULL),
(173, 200001, 15, 'Apr', NULL, NULL, NULL),
(174, 200001, 15, 'May', NULL, NULL, NULL),
(175, 200001, 15, 'Jun', NULL, NULL, NULL),
(176, 200001, 15, 'Jul', NULL, NULL, NULL),
(177, 200001, 15, 'Aug', NULL, NULL, NULL),
(178, 200001, 15, 'Sep', NULL, NULL, NULL),
(179, 200001, 15, 'Oct', NULL, NULL, NULL),
(180, 200001, 15, 'Nov', NULL, NULL, NULL),
(181, 200001, 15, 'Dec', NULL, NULL, NULL),
(182, 200006, 15, 'Jan', NULL, NULL, NULL),
(183, 200006, 15, 'Feb', NULL, NULL, NULL),
(184, 200006, 15, 'Mar', NULL, NULL, NULL),
(185, 200006, 15, 'Apr', NULL, NULL, NULL),
(186, 200006, 15, 'May', NULL, NULL, NULL),
(187, 200006, 15, 'Jun', NULL, NULL, NULL),
(188, 200006, 15, 'Jul', NULL, NULL, NULL),
(189, 200006, 15, 'Aug', NULL, NULL, NULL),
(190, 200006, 15, 'Sep', NULL, NULL, NULL),
(191, 200006, 15, 'Oct', NULL, NULL, NULL),
(192, 200006, 15, 'Nov', NULL, NULL, NULL),
(193, 200006, 15, 'Dec', NULL, NULL, NULL),
(194, 200007, 15, 'Jan', NULL, NULL, NULL),
(195, 200007, 15, 'Feb', NULL, NULL, NULL),
(196, 200007, 15, 'Mar', NULL, NULL, NULL),
(197, 200007, 15, 'Apr', NULL, NULL, NULL),
(198, 200007, 15, 'May', NULL, NULL, NULL),
(199, 200007, 15, 'Jun', NULL, NULL, NULL),
(200, 200007, 15, 'Jul', NULL, NULL, NULL),
(201, 200007, 15, 'Aug', NULL, NULL, NULL),
(202, 200007, 15, 'Sep', NULL, NULL, NULL),
(203, 200007, 15, 'Oct', NULL, NULL, NULL),
(204, 200007, 15, 'Nov', NULL, NULL, NULL),
(205, 200007, 15, 'Dec', NULL, NULL, NULL),
(206, 200008, 15, 'Jan', NULL, NULL, NULL),
(207, 200008, 15, 'Feb', NULL, NULL, NULL),
(208, 200008, 15, 'Mar', NULL, NULL, NULL),
(209, 200008, 15, 'Apr', NULL, NULL, NULL),
(210, 200008, 15, 'May', NULL, NULL, NULL),
(211, 200008, 15, 'Jun', NULL, NULL, NULL),
(212, 200008, 15, 'Jul', NULL, NULL, NULL),
(213, 200008, 15, 'Aug', NULL, NULL, NULL),
(214, 200008, 15, 'Sep', NULL, NULL, NULL),
(215, 200008, 15, 'Oct', NULL, NULL, NULL),
(216, 200008, 15, 'Nov', NULL, NULL, NULL),
(217, 200008, 15, 'Dec', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `checklist`
--

DROP TABLE IF EXISTS `checklist`;
CREATE TABLE IF NOT EXISTS `checklist` (
  `checkid` int(11) NOT NULL AUTO_INCREMENT,
  `checkdesc` varchar(45) DEFAULT NULL,
  `checkvalues` varchar(45) DEFAULT NULL,
  `corevalues` varchar(45) DEFAULT NULL,
  `valuedesc` varchar(45) DEFAULT NULL,
  `firstrating` varchar(3) NOT NULL,
  `secondrating` varchar(3) NOT NULL,
  `thirdrating` varchar(3) NOT NULL,
  `fourthrating` varchar(3) NOT NULL,
  `studatt` int(11) NOT NULL,
  `IDno` int(11) NOT NULL,
  PRIMARY KEY (`checkid`),
  KEY `idnumber` (`IDno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `curriculum`
--

DROP TABLE IF EXISTS `curriculum`;
CREATE TABLE IF NOT EXISTS `curriculum` (
  `curid` int(45) NOT NULL AUTO_INCREMENT,
  `curname` varchar(11) NOT NULL,
  `subjname1` text NOT NULL,
  `subjname2` text NOT NULL,
  `subjname3` text NOT NULL,
  `subjname4` text NOT NULL,
  `subjname5` text NOT NULL,
  `subjname6` text NOT NULL,
  `subjname7` text NOT NULL,
  `subjname8` text NOT NULL,
  `subjname9` text NOT NULL,
  `subjname10` text NOT NULL,
  `subjname11` text NOT NULL,
  `subjname12` text NOT NULL,
  `subjname13` text NOT NULL,
  `subjname14` text NOT NULL,
  `subjname15` text NOT NULL,
  `subjname16` text NOT NULL,
  `subjname17` text NOT NULL,
  `subjname18` text NOT NULL,
  `subjname19` text NOT NULL,
  `subjname20` text NOT NULL,
  `grade` varchar(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`curid`),
  KEY `idyear` (`yearid`) USING BTREE,
  KEY `curname` (`curname`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`curid`, `curname`, `subjname1`, `subjname2`, `subjname3`, `subjname4`, `subjname5`, `subjname6`, `subjname7`, `subjname8`, `subjname9`, `subjname10`, `subjname11`, `subjname12`, `subjname13`, `subjname14`, `subjname15`, `subjname16`, `subjname17`, `subjname18`, `subjname19`, `subjname20`, `grade`, `yearid`) VALUES
(19, 'K to 12', 'Word ', 'Mathethamatics', 'Reading & Phonics', 'Language', 'Science', 'Filipino', 'Music', 'Arts', 'PE', 'Writing', 'Computer', '', '', '', '', '', '', '', '', '', 'NURSERY', 14),
(20, 'K to 12', 'Word ', 'Mathethamatics', 'Reading & Phonics', 'Language', 'Science', 'Filipino', 'Music', 'Arts', 'PE', 'Writing', 'Computer', '', '', '', '', '', '', '', '', '', 'PRE-KINDER', 14),
(21, 'K to 12', 'Word ', 'Mathethamatics', 'Reading & Phonics', 'Language', 'Science', 'Filipino', 'Music', 'Arts', 'PE', 'Writing', 'Computer', '', '', '', '', '', '', '', '', '', 'KINDER', 14),
(22, 'K to 12', 'Word ', 'Mathematics ', 'Science ', 'English ', 'Filipino ', 'Araling Panlipunan ', 'Music ', 'Arts ', 'PE ', 'Health ', 'Computer ', 'Mother Tounge ', 'Edukasyon sa Pagpapakatao ', 'Technology and Livelihood Education', 'Edukasyong Pantahanan at Pangkabuhayan', '', '', '', '', '', 'GRADE 1', 14),
(23, 'K to 12', 'Word ', 'Mathematics ', 'Science ', 'English ', 'Filipino ', 'Araling Panlipunan ', 'Music ', 'Arts ', 'PE ', 'Health ', 'Computer ', 'Mother Tounge ', 'Edukasyon sa Pagpapakatao ', 'Technology and Livelihood Education', 'Edukasyong Pantahanan at Pangkabuhayan', '', '', '', '', '', 'GRADE 2', 14),
(24, 'K to 12', 'Word ', 'Mathematics ', 'Science ', 'English ', 'Filipino ', 'Araling Panlipunan ', 'Music ', 'Arts ', 'PE ', 'Health ', 'Computer ', 'Mother Tounge ', 'Edukasyon sa Pagpapakatao ', 'Technology and Livelihood Education', 'Edukasyong Pantahanan at Pangkabuhayan', '', '', '', '', '', 'GRADE 3', 14),
(25, 'K to 12', 'Word ', 'Mathematics ', 'Science ', 'English ', 'Filipino ', 'Araling Panlipunan ', 'Music ', 'Arts ', 'PE ', 'Health ', 'Computer ', 'Mother Tounge ', 'Edukasyon sa Pagpapakatao ', 'Technology and Livelihood Education', 'Edukasyong Pantahanan at Pangkabuhayan', '', '', '', '', '', 'GRADE 4', 14),
(26, 'K to 12', 'Word ', 'Mathematics ', 'Science ', 'English ', 'Filipino ', 'Araling Panlipunan ', 'Music ', 'Arts ', 'PE ', 'Health ', 'Computer ', 'Mother Tounge ', 'Edukasyon sa Pagpapakatao ', 'Technology and Livelihood Education', 'Edukasyong Pantahanan at Pangkabuhayan', '', '', '', '', '', 'GRADE 5', 14),
(27, 'K to 12', 'Word ', 'Mathematics', 'Science', 'English ', 'Filipino ', 'Araling Panlipunan ', 'Music ', 'Arts ', 'PE ', 'Health ', 'Computer ', 'Mother Tounge ', 'Edukasyon sa Pagpapakatao ', 'Technology and Livelihood Education', 'Edukasyong Pantahanan at Pangkabuhayan', '', '', '', '', '', 'GRADE 6', 14);

-- --------------------------------------------------------

--
-- Table structure for table `curstudent`
--

DROP TABLE IF EXISTS `curstudent`;
CREATE TABLE IF NOT EXISTS `curstudent` (
  `studentid` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID FOR TABLE',
  `IDno` int(11) NOT NULL COMMENT 'ID OF THE STUDENT',
  `gradelvl` varchar(45) NOT NULL,
  `section` varchar(11) NOT NULL,
  `teacher` varchar(45) NOT NULL,
  `totalpayment` int(11) DEFAULT NULL,
  `dateenrolled` date NOT NULL,
  `yearid` int(11) NOT NULL,
  `enrID` int(90) NOT NULL,
  PRIMARY KEY (`studentid`),
  UNIQUE KEY `IDno_2` (`IDno`),
  KEY `gradlvl_idx` (`gradelvl`),
  KEY `yearID_idx` (`yearid`),
  KEY `enrID_idx` (`enrID`),
  KEY `IDno` (`IDno`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curstudent`
--

INSERT INTO `curstudent` (`studentid`, `IDno`, `gradelvl`, `section`, `teacher`, `totalpayment`, `dateenrolled`, `yearid`, `enrID`) VALUES
(1, 200001, 'KINDER', '1', '1', 1, '2019-11-14', 3, 1),
(9, 200009, 'KINDER', '1', '1', 1, '2019-11-19', 3, 9),
(39, 200024, 'NURSERY', '1', '1', 1, '2020-01-21', 15, 45),
(40, 200025, 'NURSERY', '1', '1', 1, '2020-01-21', 15, 46),
(41, 200026, 'NURSERY', '1', '1', 1, '2020-01-21', 15, 47),
(42, 200027, 'NURSERY', '1', '1', 1, '2020-01-21', 15, 48);

-- --------------------------------------------------------

--
-- Table structure for table `enstudent`
--

DROP TABLE IF EXISTS `enstudent`;
CREATE TABLE IF NOT EXISTS `enstudent` (
  `enid` int(90) NOT NULL AUTO_INCREMENT,
  `IDno` int(11) DEFAULT NULL,
  `GivenName` varchar(45) NOT NULL,
  `MiddleName` varchar(45) NOT NULL,
  `SurName` varchar(45) NOT NULL,
  `gradelvl` varchar(45) NOT NULL,
  `birthdate` date NOT NULL,
  `birthplace` varchar(45) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `homeTelnum` varchar(45) DEFAULT NULL,
  `mobilenum` varchar(45) NOT NULL,
  `studaddress` varchar(90) NOT NULL,
  `prevschoolattended` varchar(45) NOT NULL,
  `studstat` varchar(45) NOT NULL,
  `sponsor` varchar(12) DEFAULT NULL,
  `faFname` varchar(45) DEFAULT NULL,
  `falname` varchar(45) DEFAULT NULL,
  `faAdd` varchar(60) DEFAULT NULL,
  `faMobilenum` varchar(45) DEFAULT NULL,
  `faEmail` varchar(45) DEFAULT NULL,
  `faoccupation` varchar(45) NOT NULL,
  `moFname` varchar(45) DEFAULT NULL,
  `moLname` varchar(45) DEFAULT NULL,
  `moAdd` varchar(60) DEFAULT NULL,
  `momobilenum` varchar(45) DEFAULT NULL,
  `moEmail` varchar(45) DEFAULT NULL,
  `mooccupation` varchar(45) NOT NULL,
  `sibFname` varchar(60) DEFAULT NULL,
  `sibLname` varchar(60) DEFAULT NULL,
  `sibBirthdate` date DEFAULT NULL,
  `sibschoolname` varchar(45) DEFAULT NULL,
  `yearid` int(11) NOT NULL,
  `dateenrolled` date NOT NULL,
  `guardianName` varchar(45) DEFAULT NULL,
  `guardianAddress` varchar(60) DEFAULT NULL,
  `guardianContact` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`enid`),
  KEY `studFname` (`GivenName`),
  KEY `studLname` (`SurName`),
  KEY `gradelvl` (`gradelvl`),
  KEY `YearID_idx` (`yearid`),
  KEY `studIDno_idx` (`IDno`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enstudent`
--

INSERT INTO `enstudent` (`enid`, `IDno`, `GivenName`, `MiddleName`, `SurName`, `gradelvl`, `birthdate`, `birthplace`, `gender`, `homeTelnum`, `mobilenum`, `studaddress`, `prevschoolattended`, `studstat`, `sponsor`, `faFname`, `falname`, `faAdd`, `faMobilenum`, `faEmail`, `faoccupation`, `moFname`, `moLname`, `moAdd`, `momobilenum`, `moEmail`, `mooccupation`, `sibFname`, `sibLname`, `sibBirthdate`, `sibschoolname`, `yearid`, `dateenrolled`, `guardianName`, `guardianAddress`, `guardianContact`) VALUES
(1, 200001, 'PAUL CHRISTIAN', 'SANGGA', 'PEREZ', 'KINDER', '2020-12-11', 'BAGUIO CITY', 'Male', '', '', 'SAN LUIS, BAGUIO CITY', '', 'Enrolled', NULL, 'PAUL', 'PEREZ', 'SAN LUIS, BAGUIO CITY', '09123456789', '', 'ENGINEER', 'MARIA', 'SANGA', '', '', '', '', NULL, NULL, NULL, NULL, 15, '2019-11-14', 'MAHMOOD IMRAN D', '', ''),
(2, 200002, 'ANJELLA', 'TAYUBA', 'BUAN', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'Male', '', '09203662849', 'IRISAN, BAGUIO CITY', '', 'Enrolled', NULL, 'ROGER', 'TAYUBA', 'IRISAN, BAGUIO CITY', '09391212196', '', '', 'GRACE', 'BUAN', 'IRISAN, BAGUIO CITY', '09203662844', '', 'HOUSE KEEPER', NULL, NULL, NULL, NULL, 15, '2019-11-19', '', '', ''),
(3, 200003, 'CHYRIS DUALIE', 'ANGAWA', 'DANG-AY', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'Female', '', '09999198540', '# 290-D PRK-14-A CYPRESS, IRISAN, BAGUIO CITY', 'PATILONG ELEM. SCHOOL', 'Enrolled', NULL, 'MORRIS', 'DANG-AY', '# 290-D PRK-14-A CYPRESS, IRISAN, BAGUIO CITY', '09128889125', '', 'NURSE', 'CHERRY LOU', 'DANG-AY', '#290-D PRK. 14-A CYPRESS, IRISAN, BAGUIO CITY', '09999198540', '', '', 'OZZY CLYDE', 'DANG-AY', '2005-05-15', 'INHS', 15, '2019-11-19', ' ', ' ', ' '),
(4, 200004, 'NATALIE HYMES', 'BAGANO', 'MARZAN', 'GRADE 1', '2020-12-12', 'BENGUET GEN, LA TRINIDAD', 'Female', '', '09999032717', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', 'LECA', 'Enrolled', NULL, 'ANDRES', 'MARZAN JR.', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', 'TAXI DRIVER', 'EVA', 'BAGANO', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', '', NULL, NULL, NULL, NULL, 15, '2019-11-19', 'JULIET CAPUYAN MARZAN', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '09999032717'),
(5, 200005, 'LUZTY LANCE', 'MAYOS', 'BIASCA', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'Male', '244-7011', '', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', 'EASTER COLLEGE', 'Enrolled', NULL, 'LUISITO', 'BIASCA', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', '09998548911', '', 'BUSINESSMAN', 'ANA MAE', 'MAYOS', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', '09465323005 / 09299717800', '', 'BUSINESSWOMAN', 'ZALOY EMMANUEL', 'BIASCA', '2012-12-30', 'PNHS', 15, '2019-11-19', '', '', ''),
(6, 200006, 'LIL CIANNE', 'VENTURA', 'BIORE', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'Female', '', '09129205286', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', 'BAGUIO CENTRAL SCHOOL', 'Enrolled', NULL, '', '', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '', '', '', 'CHRESS AN', 'VENTURA', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '09129205286', '', 'SALES ASSOCIATE', NULL, NULL, NULL, NULL, 15, '2019-11-19', 'CRISPIN M. VENTURA', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '09296884634'),
(7, 200007, 'LJ CELINA', 'PAGADOR', 'TIONGO', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'Female', '', '09504565950', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', NULL, 'B-JAY', 'TIONGO', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', '09082455013', 'B-JAYTIONGO@YAHOO.COM', 'LENDING COLLECTOR', 'JOSEBEN', 'TIONGCO', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', '09504565950', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 15, '2019-11-19', ' ', ' ', ' '),
(8, 200008, 'GHABRIEL ACE', 'SANCHEZ', 'PALOMO', 'GRADE 1', '2020-12-12', 'LA TRINIDAD', 'Male', '', '', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', 'BAGUIO CENTRAL SCHOOL', 'Enrolled', NULL, 'CONSTANTINE', 'PALOMO', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', '09458150893', 'CONSPALOMO3378@GMAIL.COM', '', 'HEMMINGWAY', 'PALOMO', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', '09308619368', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 15, '2019-11-19', ' ', ' ', ' '),
(9, 200009, 'RIDDICK LAURENCE', 'DOCYOSEN', 'VIERNES', 'NURSERY', '2020-12-12', 'KIN-IWAY, BESAO', 'Male', '', '', '#20 PUROK 17, IRISAN, BAGUIO CITY', 'ICLC', 'Enrolled', NULL, 'JAYSON', 'VIERNES', '#20 PUROK 17, IRISAN, BAGUIO CITY', '', '', 'LABORER', 'JOEYLYN', 'VIERNES', '#20 PUROK 17, IRISAN, BAGUIO CITY', '09088611220', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 15, '2019-11-19', ' ', ' ', ' '),
(10, 200010, 'ASHLYNE ZYNHEL', 'BLAZA', 'CASTRO', 'GRADE 1', '2020-12-12', 'BGH BAGUIO', 'Female', '', '09553854056', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', 'ELPEDIO QUIRINO ELEM SCH', 'Enrolled', NULL, 'ALLAN', 'CASTRO', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', '', '', 'VENDOR', 'JAYNALYN', 'BLAZA', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', '09553854056', '', 'HOUSEWIFE', 'ALJHAY', 'CASTRO', '2012-05-12', 'CCFS', 15, '2019-11-19', ' ', ' ', ' '),
(11, 200011, 'XERR JHAKE', 'DUMAPIS', 'BANTIAN', 'GRADE 1', '2020-12-12', 'BEGH', 'Male', '', '09074243658 / 09266474312', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', 'UCAB ELEMENTARY SCHOOL', 'Enrolled', NULL, 'JESSIE', 'BANTIAN', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', '09196901341', '', 'POLICE OFFICER', 'JENNIFER', 'BANTIAN', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', '09074243658', 'JENNIFER.BANTIAN@YAHOO.COM', '', NULL, '', NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(38, 200023, 'SEAN', 'PANO', 'INAHAO', 'NURSERY', '2020-12-12', 'BAGUIO CITY', 'Male', '442-1383', '09137184916', 'PHASE 1, BAKAKENG BAGUIO CITY', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', '', 'FERNANDO', 'INAHAO', 'PHASE 1, BAKAKENG BAGUIO CITY', '09384917481', 'FERNANDO72@YAHOO.COM', 'ENGINEER', 'NATASHA', 'INAHAO', 'PHASE 1, BAKAKENG BAGUIO CITY', '093837183818', 'NATASHA72@YAHOO.COM', 'NURSE', NULL, NULL, NULL, NULL, 15, '2020-01-21', 'MARIO', 'PHASE 1, BAKAKENG BAGUIO CITY', '09384184181'),
(45, 200024, 'IVAN', 'HANDO', 'IGNACIO', 'NURSERY', '2020-12-12', 'BAGUIO CITY', 'Male', '441-3914', '09381948192', 'PHASE 2, BAKAKENG BAGUIO CITY', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', '', 'AGUILAR', 'IGNACIO', 'PHASE 2, BAKAKENG BAGUIO CITY', '093719197131', 'AGUILAR03@YAHOO.COM', 'MECHANICAL ENGINEER', 'NIKKI', 'IGNACIO', 'PHASE 1, BAKAKENG BAGUIO CITY', '093713819128', 'NIKKI03@YAHOO.COM', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 15, '2020-01-21', 'DONALD IGNACIO', 'PHASE 1, BAKAKENG BAGUIO CITY', '09124884929'),
(46, 200025, 'LEONARD', 'PUGYAO', 'BERNARDO', 'NURSERY', '2020-12-12', 'PASIG CITY', 'Male', '420-2010', '09384818481', 'ITOGON BENGUET', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', '', 'JOMARI', 'BERNARDO', 'ITOGON BENGUET', '0988817273', 'JOMARIBER@YAHOO.COM', 'CHEF', 'ABIGAIL', 'BERNARDO', 'ITOGON BENGUET', '09391838188', 'ABIGAIL98@GMAIL.COM', 'TEACHER', NULL, NULL, NULL, NULL, 15, '2020-01-21', 'SEAN AGUILAR', 'ITOGON BENGUET', '09381838181'),
(47, 200026, 'DONALD', 'JENNICAL', 'MAPILE', 'NURSERY', '2020-12-12', 'CEBU CITY', 'Male', '445-3919', '0938183888', 'ENGINEERS HILL, BAGUIO CITY', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', '', 'DOLOR', 'MAPILE', 'ENGINEERS HILL, BAGUIO CITY', '09888311312', 'DOLORMAPS@GMAIL.COM', 'PROFESSOR', 'JENNELYN', 'MAPILE', 'ENGINEERS HILL, BAGUIO CITY', '091828181818', 'JENMAPS@GMAIL.COM', 'NURSE', NULL, NULL, NULL, NULL, 15, '2020-01-21', 'PAUL MAPILE', 'ENGINEERS HILL, BAGUIO CITY', '09283838991'),
(48, 200027, 'CHAD', 'DONOR', 'BALLESTEROS', 'NURSERY', '2020-12-12', 'BAGUIO CITY', 'Male', '446-3919', '09281818373', 'SANLUIS, VILLAGE BAGUIO CITY', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', '', 'CHRISTIAN', 'BALLESTEROS', 'SANLUIS, VILLAGE BAGUIO CITY', '09381938187', 'CHS01@GMAIL.COM', 'ELECTRICAL ENGINEER', 'STEPHANIE', 'BALLESTEROS', 'SANLUIS, VILLAGE BAGUIO CITY', '09123878137', 'STEPH01@GMAIL.COM', 'TEACHER', NULL, NULL, NULL, NULL, 15, '2020-01-21', 'ISIDRO BALLESTEROS', 'SANLUIS, VILLAGE BAGUIO CITY', '091838183818');

--
-- Triggers `enstudent`
--
DROP TRIGGER IF EXISTS `Insert into curstudent`;
DELIMITER $$
CREATE TRIGGER `Insert into curstudent` AFTER INSERT ON `enstudent` FOR EACH ROW INSERT INTO `curstudent` VALUES(NULL,NEW.IDno,NEW.gradelvl,"1","1","1",NEW.dateenrolled,NEW.yearid,NEW.enid)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `feestudent`
--

DROP TABLE IF EXISTS `feestudent`;
CREATE TABLE IF NOT EXISTS `feestudent` (
  `feestID` int(40) NOT NULL AUTO_INCREMENT,
  `books` double NOT NULL,
  `misc` double NOT NULL,
  `tuition` double NOT NULL,
  `service` double DEFAULT NULL,
  `balance` int(11) NOT NULL,
  `IDno` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`feestID`),
  KEY `estudyID` (`IDno`),
  KEY `theyear_idx` (`yearid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feestudent`
--

INSERT INTO `feestudent` (`feestID`, `books`, `misc`, `tuition`, `service`, `balance`, `IDno`, `yearid`) VALUES
(2, 0, 0, 0, 3, 0, 200024, 15),
(3, 0, 2, 0, 0, 0, 200025, 15);

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `gradeid` int(11) NOT NULL AUTO_INCREMENT,
  `subjID` int(90) NOT NULL,
  `sename` varchar(11) NOT NULL,
  `firstquartergrade` int(11) DEFAULT NULL,
  `secondquartergrade` int(11) DEFAULT NULL,
  `thirdquartergrade` int(11) DEFAULT NULL,
  `fourthquartergrade` int(11) DEFAULT NULL,
  `finalgrade` int(11) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `IDno` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`gradeid`),
  KEY `studid_idx` (`IDno`),
  KEY `suID` (`subjID`),
  KEY `yid` (`yearid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=125 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grades`
--

INSERT INTO `grades` (`gradeid`, `subjID`, `sename`, `firstquartergrade`, `secondquartergrade`, `thirdquartergrade`, `fourthquartergrade`, `finalgrade`, `remarks`, `IDno`, `yearid`) VALUES
(1, 60, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200001, 10),
(2, 61, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200001, 10),
(3, 62, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200001, 10),
(4, 63, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200001, 10),
(68, 60, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200009, 10),
(69, 61, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200009, 10),
(70, 62, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200009, 10),
(71, 63, 'BETA', NULL, NULL, NULL, NULL, NULL, NULL, 200009, 10);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `payid` int(11) NOT NULL,
  `payname` varchar(45) DEFAULT NULL,
  `payamount` float DEFAULT NULL,
  `paydate` date DEFAULT NULL,
  `feestID` int(40) DEFAULT NULL,
  PRIMARY KEY (`payid`),
  UNIQUE KEY `feestID` (`feestID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schoolfees`
--

DROP TABLE IF EXISTS `schoolfees`;
CREATE TABLE IF NOT EXISTS `schoolfees` (
  `scfeeid` int(40) NOT NULL AUTO_INCREMENT,
  `totalfee` double NOT NULL,
  `preschoolFee` double NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`scfeeid`),
  UNIQUE KEY `yearid` (`yearid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `schoolyear`
--

DROP TABLE IF EXISTS `schoolyear`;
CREATE TABLE IF NOT EXISTS `schoolyear` (
  `yearid` int(11) NOT NULL AUTO_INCREMENT,
  `yearstart` int(10) NOT NULL,
  `yearend` int(10) NOT NULL,
  `janAtt` float NOT NULL,
  `febAtt` float NOT NULL,
  `marAtt` float NOT NULL,
  `aprAtt` float NOT NULL,
  `mayAtt` float NOT NULL,
  `junAtt` float NOT NULL,
  `julAtt` float NOT NULL,
  `augAtt` float NOT NULL,
  `sepAtt` float NOT NULL,
  `octAtt` float NOT NULL,
  `novAtt` float NOT NULL,
  `decAtt` float NOT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `pretui1` float DEFAULT NULL,
  `premisc1` float DEFAULT NULL,
  `prebook1` float DEFAULT NULL,
  `pretui2` float DEFAULT NULL,
  `premisc2` float DEFAULT NULL,
  `prebook2` float DEFAULT NULL,
  `pretui3` float NOT NULL,
  `premisc3` float NOT NULL,
  `prebook3` float NOT NULL,
  `gradetui1` float DEFAULT NULL,
  `gradebook1` float DEFAULT NULL,
  `grademisc1` float DEFAULT NULL,
  `gradetui2` float DEFAULT NULL,
  `grademisc2` float DEFAULT NULL,
  `gradebook2` float DEFAULT NULL,
  `gradetui3` float DEFAULT NULL,
  `grademisc3` float DEFAULT NULL,
  `gradebook3` float DEFAULT NULL,
  `gradetui4` float DEFAULT NULL,
  `grademisc4` float DEFAULT NULL,
  `gradebook4` float DEFAULT NULL,
  `gradetui5` float DEFAULT NULL,
  `grademisc5` float DEFAULT NULL,
  `gradebook5` float DEFAULT NULL,
  `gradetui6` float DEFAULT NULL,
  `grademisc6` float DEFAULT NULL,
  `gradebook6` float DEFAULT NULL,
  `scfee` float DEFAULT NULL,
  `scstatus` varchar(10) DEFAULT 'INACTIVE',
  PRIMARY KEY (`yearid`),
  KEY `yearstart` (`yearstart`),
  KEY `yearend` (`yearend`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`yearid`, `yearstart`, `yearend`, `janAtt`, `febAtt`, `marAtt`, `aprAtt`, `mayAtt`, `junAtt`, `julAtt`, `augAtt`, `sepAtt`, `octAtt`, `novAtt`, `decAtt`, `dateStart`, `dateEnd`, `pretui1`, `premisc1`, `prebook1`, `pretui2`, `premisc2`, `prebook2`, `pretui3`, `premisc3`, `prebook3`, `gradetui1`, `gradebook1`, `grademisc1`, `gradetui2`, `grademisc2`, `gradebook2`, `gradetui3`, `grademisc3`, `gradebook3`, `gradetui4`, `grademisc4`, `gradebook4`, `gradetui5`, `grademisc5`, `gradebook5`, `gradetui6`, `grademisc6`, `gradebook6`, `scfee`, `scstatus`) VALUES
(15, 2020, 2021, 20, 20, 20, 10, 0, 15, 20, 20, 20, 20, 20, 15, '2020-06-08', '2021-04-15', 10888.7, 2095, 3600, 10888.7, 2095, 3600, 10888.7, 3600, 2095, 10888.7, 3900, 2095, 10888.7, 2095, 3900, 10888.7, 2095, 3900, 10888.7, 2095, 3900, 10888.7, 2095, 3900, 10888.7, 2095, 3900, NULL, 'ACTIVE'),
(16, 2019, 2020, 20, 20, 20, 10, 0, 15, 20, 20, 20, 20, 20, 15, '2019-06-10', '2020-04-13', 10888.7, 2095, 3600, 10888.7, 2095, 3600, 10888.7, 3600, 2095, 10888.7, 3900, 2095, 10888.7, 2095, 3900, 10888.7, 2095, 3900, 10888.7, 2095, 3900, 10888.7, 2095, 3900, 10888.7, 2095, 3900, NULL, 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `secID` int(11) NOT NULL AUTO_INCREMENT,
  `sename` varchar(10) NOT NULL,
  `gradelvl` text NOT NULL,
  `adviserlname` varchar(40) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`secID`),
  KEY `yearid` (`yearid`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`secID`, `sename`, `gradelvl`, `adviserlname`, `yearid`) VALUES
(46, 'ALEPH', 'NURSERY', 'CARINIO ESTEBAN', 15),
(47, 'ALPHA', 'PRE-KINDER', 'JOMARI MARSAN', 15),
(48, 'BETA', 'KINDER', 'ADAM ARYOLA', 15),
(49, 'GAMMA', 'GRADE 1', 'MARIO DEGUZMAN', 15),
(51, 'DELTA', 'GRADE 2', 'KIM ABALOS', 15),
(52, 'EPSILON', 'GRADE 3', 'MAY PUGADO', 15),
(54, 'ETA', 'GRADE 5', 'LAURENCE SORIANO', 15),
(55, 'THETA', 'GRADE 6', 'STEPHANIE ERNON', 15),
(56, 'BONA', 'GRADE 4', 'TRACIE HORN', 15);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subjID` int(90) NOT NULL AUTO_INCREMENT,
  `subname` varchar(12) NOT NULL,
  `adviserLname` varchar(30) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`subjID`),
  KEY `yeaid` (`yearid`)
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjID`, `subname`, `adviserLname`, `yearid`) VALUES
(1, 'Math-1', 'Perez', 12),
(2, 'English-1', 'Portacio', 13),
(3, 'Filipino-1', 'Boyoten', 10),
(5, 'Mape-1', 'Galang', 10),
(6, 'Computer-1', 'Turacao', 10),
(7, 'Word-1', 'Turao', 10),
(8, 'Writing-1', 'Lagarde', 10),
(9, 'Reading-1', 'Piog', 10),
(10, 'Science-1', 'Flores', 10),
(11, 'Math-2', 'Perez', 12),
(12, 'English-2', 'Portacio', 13),
(13, 'Filipino-2', 'Boyoten', 10),
(14, 'Mape-2', 'Galang', 10),
(15, 'Computer-2', 'Turacao', 10),
(16, 'Word-2', 'Turao', 10),
(17, 'Writing-2', 'Lagarde', 10),
(18, 'Reading-2', 'Piog', 10),
(19, 'Science-2', 'Flores', 10),
(20, 'Math-3', 'Perez', 12),
(21, 'English-3', 'Portacio', 13),
(22, 'Filipino-3', 'Boyoten', 10),
(23, 'Mape-3', 'Galang', 10),
(24, 'Computer-3', 'Turacao', 10),
(25, 'Word-3', 'Turao', 10),
(26, 'Writing-3', 'Lagarde', 10),
(27, 'Reading-3', 'Piog', 10),
(28, 'Science-3', 'Flores', 10),
(29, 'Math-4', 'Perez', 12),
(30, 'English-4', 'Portacio', 13),
(31, 'Filipino-4', 'Boyoten', 10),
(32, 'Mape-4', 'Galang', 10),
(33, 'Computer-4', 'Turacao', 10),
(34, 'Word-4', 'Turao', 10),
(35, 'Writing-4', 'Lagarde', 10),
(36, 'Reading-4', 'Piog', 10),
(37, 'Science-4', 'Flores', 10),
(38, 'Math-5', 'Perez', 12),
(39, 'English-5', 'Portacio', 13),
(40, 'Filipino-5', 'Boyoten', 10),
(41, 'Mape-5', 'Galang', 10),
(42, 'Computer-5', 'Turacao', 10),
(43, 'Word-5', 'Turao', 10),
(44, 'Writing-4', 'Lagarde', 10),
(45, 'Reading-5', 'Piog', 10),
(46, 'Science-5', 'Flores', 10),
(47, 'Math-6', 'Perez', 12),
(48, 'English-6', 'Portacio', 13),
(49, 'Filipino-6', 'Boyoten', 10),
(50, 'Mape-6', 'Galang', 10),
(51, 'Computer-6', 'Turacao', 10),
(52, 'Word-6', 'Turao', 10),
(53, 'Writing-6', 'Lagarde', 10),
(54, 'Reading-6', 'Piog', 10),
(55, 'Science-6', 'Flores', 10),
(56, 'Writing-N', 'Lagarde', 10),
(57, 'Reading-N', 'Piog', 10),
(58, 'Writing-Pk', 'Lagarde', 10),
(59, 'Reading-Pk', 'Piog', 10),
(60, 'Math-K', 'Perez', 12),
(61, 'Word-K', 'Turao', 10),
(62, 'Writing-K', 'Lagarde', 10),
(63, 'Reading-K', 'Piog', 10);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `ayearid` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `idnumber` FOREIGN KEY (`IDno`) REFERENCES `curstudent` (`IDno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `curriculum`
--
ALTER TABLE `curriculum`
  ADD CONSTRAINT `iyear` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `curstudent`
--
ALTER TABLE `curstudent`
  ADD CONSTRAINT `IDno` FOREIGN KEY (`IDno`) REFERENCES `enstudent` (`IDno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `enrID` FOREIGN KEY (`enrID`) REFERENCES `enstudent` (`enid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gradlvl` FOREIGN KEY (`gradelvl`) REFERENCES `enstudent` (`gradelvl`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `enstudent`
--
ALTER TABLE `enstudent`
  ADD CONSTRAINT `IDYear` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feestudent`
--
ALTER TABLE `feestudent`
  ADD CONSTRAINT `estudyID` FOREIGN KEY (`IDno`) REFERENCES `curstudent` (`IDno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `theyear` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `IDofNumber` FOREIGN KEY (`IDno`) REFERENCES `curstudent` (`IDno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `suID` FOREIGN KEY (`subjID`) REFERENCES `subject` (`subjID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `yID` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
