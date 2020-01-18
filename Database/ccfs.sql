-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 18, 2020 at 01:13 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accid`, `empid`, `username`, `password`, `fname`, `lname`, `type`, `accstatus`) VALUES
(1, 'CCFS-001', 'REGISTRAR', 'REGISTRAR', 'ADAM', 'SOBREMONTE', 'REGISTRAR', 'Active'),
(2, 'CCFS-002', 'Paul_Acc', 'a123', 'PAUL', 'PEREZ', 'REGISTRAR', 'Inactive'),
(3, 'CCFS-003', 'ACCOUNTING', 'ACCOUNTING', 'JARGON', 'TAASIN', 'ACCOUNTING', 'Active'),
(4, 'CCFS-004', 'vinceAcc', 'running', 'VINCENT', 'TOLENTINO', 'ACCOUNTING', 'Active'),
(5, 'CCFS-005', 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 'Active'),
(6, 'CCFS-008', 'ACC_IMRAN', '12345', 'IMRAN', 'MAHMOOD', 'ACCOUNTING', 'Active'),
(7, 'CCFS-009', 'TEST', 'TEST', 'TEST', 'TEST', 'ADMIN', 'Active'),
(8, '30', 'JacobAnderson', '123456', 'Jacob ', 'Anderson', 'Registrar', 'Active'),
(9, 'CCFS-006', 'Georgy', '123456', 'George', 'Washington', 'ADMIN', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `assessment`
--

DROP TABLE IF EXISTS `assessment`;
CREATE TABLE IF NOT EXISTS `assessment` (
  `assessID` int(11) NOT NULL AUTO_INCREMENT,
  `assessname` varchar(20) NOT NULL,
  `amount` double NOT NULL,
  `IDno` int(11) NOT NULL,
  PRIMARY KEY (`assessID`),
  KEY `IDno` (`IDno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attid`, `IDno`, `yearid`, `month`, `daysPres`, `daysTar`, `daysAbs`) VALUES
(27, 210001, 16, 'Mar', NULL, NULL, NULL),
(28, 210001, 16, 'Apr', NULL, NULL, NULL),
(29, 210001, 16, 'May', NULL, NULL, NULL),
(30, 210001, 16, 'Jun', NULL, NULL, NULL),
(31, 210001, 16, 'Jul', NULL, NULL, NULL),
(32, 210001, 16, 'Aug', NULL, NULL, NULL),
(33, 210001, 16, 'Sep', 1, 1, 1),
(34, 210001, 16, 'Oct', NULL, NULL, NULL),
(35, 210001, 16, 'Nov', NULL, NULL, NULL),
(36, 210001, 16, 'Dec', NULL, NULL, NULL),
(37, 210014, 18, 'Jan', 12, 1, 10),
(38, 210014, 18, 'Feb', NULL, NULL, NULL),
(39, 210014, 18, 'Mar', NULL, NULL, NULL),
(40, 210014, 18, 'Apr', NULL, NULL, NULL),
(41, 210014, 18, 'May', NULL, NULL, NULL),
(42, 210014, 18, 'Jun', NULL, NULL, NULL),
(43, 210014, 18, 'Jul', NULL, NULL, NULL),
(44, 210014, 18, 'Aug', NULL, NULL, NULL),
(45, 210014, 18, 'Sep', NULL, NULL, NULL),
(46, 210014, 18, 'Oct', NULL, NULL, NULL),
(47, 210014, 18, 'Nov', NULL, NULL, NULL),
(48, 210014, 18, 'Dec', NULL, NULL, NULL),
(49, 210002, 19, 'Jan', NULL, NULL, NULL),
(50, 210002, 19, 'Feb', NULL, NULL, NULL),
(51, 210002, 19, 'Mar', NULL, NULL, NULL),
(52, 210002, 19, 'Apr', NULL, NULL, NULL),
(53, 210002, 19, 'May', NULL, NULL, NULL),
(54, 210002, 19, 'Jun', NULL, NULL, NULL),
(55, 210002, 19, 'Jul', NULL, NULL, NULL),
(56, 210002, 19, 'Aug', NULL, NULL, NULL),
(57, 210002, 19, 'Sep', NULL, NULL, NULL),
(58, 210002, 19, 'Oct', NULL, NULL, NULL),
(59, 210002, 19, 'Nov', NULL, NULL, NULL),
(60, 210002, 19, 'Dec', NULL, NULL, NULL);

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curriculum`
--

INSERT INTO `curriculum` (`curid`, `curname`, `subjname1`, `subjname2`, `subjname3`, `subjname4`, `subjname5`, `subjname6`, `subjname7`, `subjname8`, `subjname9`, `subjname10`, `subjname11`, `subjname12`, `subjname13`, `subjname14`, `subjname15`, `subjname16`, `subjname17`, `subjname18`, `subjname19`, `subjname20`, `grade`, `yearid`) VALUES
(1, 'DEPED', 'ENGLISH', 'ENGLISH', 'jhgjhg', 'kjhkhjk', 'jghjhgj', 'hg', 'jhg', 'jhgjhg', 'jhg', 'jh', 'gjh', 'gj', 'hgj', 'hgj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'NURSERY', 19),
(2, 'DEPED', 'gj', 'hgj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'gj', 'hgjh', 'gj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'PRE-KINDER', 19),
(3, 'DEPED', 'jh', 'gjh', 'gj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'gj', 'hgj', 'hgj', 'hgj', 'hg', 'jhg', 'jhgj', 'hgj', 'hgjh', 'KINDER', 19),
(4, 'DEPED', 'gjhg', 'jhg', 'jh', 'gj', 'hgjh', 'gjh', 'gj', 'hgj', 'hgj', 'hgj', 'hgj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'gj', 'hgj', 'GRADE 1', 19),
(5, 'DEPED', 'hg', 'jhgjhg', 'j', 'hgj', 'hgj', 'hg', 'jhgj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'j', 'ghj', 'hg', 'jhg', 'jhg', 'jhg', 'GRADE 2', 19),
(6, 'DEPED', 'jhg', 'jhg', 'jh', 'gj', 'hgj', 'hgj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'gj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'GRADE 3', 19),
(7, 'DEPED', 'gjh', 'gj', 'hgj', 'hgj', 'hgj', 'hgj', 'hgj', 'hgj', 'hg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jhg', 'jh', 'gj', 'hgj', 'hg', 'jhg', 'GRADE 4', 19),
(8, 'DEPED', 'jhg', 'jhg', 'jhg', 'jhgj', 'hgjh', 'j', 'hg', 'ghjghj', 'jgh', 'jhg', 'ghj', 'jhg', 'ghj', 'jgh', 'jhg', 'hjg', 'gjh', 'ghjjgh', 'jgh', 'ghj', 'GRADE 5', 19),
(9, 'DEPED', 'ghj', 'ghj', 'ghj', 'gjh', 'ghj', 'jgh', 'hgj', 'hjg', 'ghj', 'ghj', 'hgj', 'hgjgh', 'jhjg', 'ghj', 'asdasd', 'hjghjg', 'jhgg', 'hjh', 'gjghj', 'hjg', 'GRADE 6', 19);

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
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curstudent`
--

INSERT INTO `curstudent` (`studentid`, `IDno`, `gradelvl`, `section`, `teacher`, `totalpayment`, `dateenrolled`, `yearid`, `enrID`) VALUES
(1, 210001, 'KINDER', '1', '1', 1, '2019-11-14', 3, 1),
(2, 210002, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 2),
(3, 210003, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 3),
(4, 210004, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 4),
(6, 210006, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 6),
(7, 210007, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 7),
(8, 210008, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 8),
(9, 210009, 'KINDER', '1', '1', 1, '2019-11-19', 3, 9),
(10, 210010, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 10),
(11, 210011, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 11),
(12, 210012, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 12),
(13, 210013, 'Grade 2', '1', '1', 1, '2019-11-19', 3, 13),
(16, 210016, 'KINDER', '1', '1', 1, '2019-11-27', 3, 16),
(26, 210026, 'Section', '1', '1', 1, '2020-01-16', 15, 26),
(27, 210027, 'Section', '1', '1', 1, '2020-01-16', 15, 27),
(28, 210028, 'Section', '1', '1', 1, '2020-01-16', 15, 28),
(29, 210029, 'Section', '1', '1', 1, '2020-01-16', 15, 29),
(36, 210014, 'Grade 2', '1', '1', 1, '2020-01-16', 18, 23),
(39, 210015, 'Grade 2', '1', '1', 1, '2020-01-18', 20, 26);

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
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enstudent`
--

INSERT INTO `enstudent` (`enid`, `IDno`, `GivenName`, `MiddleName`, `SurName`, `gradelvl`, `birthdate`, `birthplace`, `gender`, `homeTelnum`, `mobilenum`, `studaddress`, `prevschoolattended`, `studstat`, `sponsor`, `faFname`, `falname`, `faAdd`, `faMobilenum`, `faEmail`, `faoccupation`, `moFname`, `moLname`, `moAdd`, `momobilenum`, `moEmail`, `mooccupation`, `sibFname`, `sibLname`, `sibBirthdate`, `sibschoolname`, `yearid`, `dateenrolled`, `guardianName`, `guardianAddress`, `guardianContact`) VALUES
(1, 210001, 'PAUL CHRISTIAN', 'SANGGA', 'PEREZ', 'KINDER', '2020-12-11', 'BAGUIO CITY', 'M', '', '', 'SAN LUIS, BAGUIO CITY', '', 'Enrolled', NULL, 'PAUL', 'PEREZ', 'SAN LUIS, BAGUIO CITY', '09123456789', '', 'ENGINEER', 'MARIA', 'SANGA', '', '', '', '', NULL, NULL, NULL, NULL, 3, '2019-11-14', 'MAHMOOD IMRAN D', '', ''),
(2, 210002, 'ANJELLA', 'TAYUBA', 'BUAN', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'M', '', '09203662849', 'IRISAN, BAGUIO CITY', '', 'Enrolled', NULL, 'ROGER', 'TAYUBA', 'IRISAN, BAGUIO CITY', '09391212196', '', '', 'GRACE', 'BUAN', 'IRISAN, BAGUIO CITY', '09203662844', '', 'HOUSE KEEPER', NULL, NULL, NULL, NULL, 1, '2019-11-19', '', '', ''),
(3, 210003, 'CHYRIS DUALIE', 'ANGAWA', 'DANG-AY', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'F', '', '09999198540', '# 290-D PRK-14-A CYPRESS, IRISAN, BAGUIO CITY', 'PATILONG ELEM. SCHOOL', 'Enrolled', NULL, 'MORRIS', 'DANG-AY', '# 290-D PRK-14-A CYPRESS, IRISAN, BAGUIO CITY', '09128889125', '', 'NURSE', 'CHERRY LOU', 'DANG-AY', '#290-D PRK. 14-A CYPRESS, IRISAN, BAGUIO CITY', '09999198540', '', '', 'OZZY CLYDE', 'DANG-AY', '2005-05-15', 'INHS', 3, '2019-11-19', ' ', ' ', ' '),
(4, 210004, 'NATALIE HYMES', 'BAGANO', 'MARZAN', 'GRADE 1', '2020-12-12', 'BENGUET GEN, LA TRINIDAD', 'F', '', '09999032717', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', 'LECA', 'Enrolled', NULL, 'ANDRES', 'MARZAN JR.', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', 'TAXI DRIVER', 'EVA', 'BAGANO', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', '', NULL, NULL, NULL, NULL, 3, '2019-11-19', 'JULIET CAPUYAN MARZAN', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '09999032717'),
(5, 210005, 'LUZTY LANCE', 'MAYOS', 'BIASCA', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'M', '244-7011', '', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', 'EASTER COLLEGE', 'Enrolled', NULL, 'LUISITO', 'BIASCA', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', '09998548911', '', 'BUSINESSMAN', 'ANA MAE', 'MAYOS', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', '09465323005 / 09299717800', '', 'BUSINESSWOMAN', 'ZALOY EMMANUEL', 'BIASCA', '2012-12-30', 'PNHS', 3, '2019-11-19', '', '', ''),
(6, 210006, 'LIL CIANNE', 'VENTURA', 'BIORE', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'F', '', '09129205286', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', 'BAGUIO CENTRAL SCHOOL', 'Enrolled', NULL, '', '', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '', '', '', 'CHRESS AN', 'VENTURA', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '09129205286', '', 'SALES ASSOCIATE', NULL, NULL, NULL, NULL, 3, '2019-11-19', 'CRISPIN M. VENTURA', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '09296884634'),
(7, 210007, 'LJ CELINA', 'PAGADOR', 'TIONGO', 'GRADE 1', '2020-12-12', 'BAGUIO CITY', 'F', '', '09504565950', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', NULL, 'B-JAY', 'TIONGO', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', '09082455013', 'B-JAYTIONGO@YAHOO.COM', 'LENDING COLLECTOR', 'JOSEBEN', 'TIONGCO', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', '09504565950', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(8, 210008, 'GHABRIEL ACE', 'SANCHEZ', 'PALOMO', 'GRADE 1', '2020-12-12', 'LA TRINIDAD', 'M', '', '', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', 'BAGUIO CENTRAL SCHOOL', 'Enrolled', NULL, 'CONSTANTINE', 'PALOMO', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', '09458150893', 'CONSPALOMO3378@GMAIL.COM', '', 'HEMMINGWAY', 'PALOMO', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', '09308619368', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(9, 210009, 'RIDDICK LAURENCE', 'DOCYOSEN', 'VIERNES', 'NURSERY', '2020-12-12', 'KIN-IWAY, BESAO', 'M', '', '', '#20 PUROK 17, IRISAN, BAGUIO CITY', 'ICLC', 'Enrolled', NULL, 'JAYSON', 'VIERNES', '#20 PUROK 17, IRISAN, BAGUIO CITY', '', '', 'LABORER', 'JOEYLYN', 'VIERNES', '#20 PUROK 17, IRISAN, BAGUIO CITY', '09088611220', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(10, 210010, 'ASHLYNE ZYNHEL', 'BLAZA', 'CASTRO', 'GRADE 1', '2020-12-12', 'BGH BAGUIO', 'F', '', '09553854056', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', 'ELPEDIO QUIRINO ELEM SCH', 'Enrolled', NULL, 'ALLAN', 'CASTRO', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', '', '', 'VENDOR', 'JAYNALYN', 'BLAZA', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', '09553854056', '', 'HOUSEWIFE', 'ALJHAY', 'CASTRO', '2012-05-12', 'CCFS', 3, '2019-11-19', ' ', ' ', ' '),
(11, 210011, 'XERR JHAKE', 'DUMAPIS', 'BANTIAN', 'GRADE 1', '2020-12-12', 'BEGH', 'M', '', '09074243658 / 09266474312', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', 'UCAB ELEMENTARY SCHOOL', 'Enrolled', NULL, 'JESSIE', 'BANTIAN', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', '09196901341', '', 'POLICE OFFICER', 'JENNIFER', 'BANTIAN', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', '09074243658', 'JENNIFER.BANTIAN@YAHOO.COM', 'HOUSEKEEPER', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(12, 210012, 'MERLA ZYLIE', 'LLACUNA', 'TALLOCOY', 'GRADE 1', '2020-12-12', 'LA TRINIDAD, BENGUET', 'F', '', '09294029140', '#96 PUROK 17, IRISAN, BAGUIO CITY', 'CCFS', 'Enrolled', NULL, 'PETER', 'TALLOCOY', '#96 PUROK 17, IRISAN, BAGUIO CITY', '', 'PJ.TALLOCOY@YAHOO.COM', 'OFW', 'FARRA MAE', 'TALLOCOY', '#96 PUROK 17, IRISAN, BAGUIO CITY', '09294029140', 'FM.TALLOCOY@YAHOO.COM', 'HOUSEKEEPER', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(13, 210013, 'CEEJAY', 'BUENAVISTA', 'MORALES', 'GRADE 1', '2020-12-12', 'BENGUET', 'M', '', '09103323015', '011A PUROK 12, IRISAN, BAGUIO CITY', 'CCFS', 'Enrolled', NULL, 'SEVERINO', 'MORALES', '011A PUROK 12, IRISAN, BAGUIO CITY', '', '', 'WELDER', 'MARIVIC', 'MORALES', '011A PUROK 12, IRISAN, BAGUIO CITY', '09103323015', '', 'HOUSEWIFE', 'JOY MARRIE', 'MORALES', '1999-12-08', 'UC', 3, '2019-11-19', ' ', ' ', ' '),
(23, 210014, 'NATALIE HYMES', 'BAGANO', 'MARZAN', 'Grade 2', '2020-12-12', 'BENGUET GEN, LA TRINIDAD', 'Female', '', '09999032717', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', 'LECA', 'Enrolled', '', 'ANDRES', 'MARZAN JR.', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', 'TAXI DRIVER', 'EVA', 'BAGANO', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', '', '', '', '2020-12-12', '', 20, '2020-01-18', 'JULIET CAPUYAN MARZAN', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '09999032717');

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
  `feestID` int(40) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
CREATE TABLE IF NOT EXISTS `grades` (
  `gradeid` int(11) NOT NULL AUTO_INCREMENT,
  `subjID` int(90) NOT NULL,
  `firstquartergrade` int(11) DEFAULT NULL,
  `secondquartergrade` int(11) DEFAULT NULL,
  `thirdquartergrade` int(11) DEFAULT NULL,
  `fourthquartergrade` int(11) DEFAULT NULL,
  `finalgrade` int(11) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  `IDno` int(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`gradeid`),
  UNIQUE KEY `yid` (`yearid`),
  KEY `studid_idx` (`IDno`),
  KEY `suID` (`subjID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `janAtt` int(11) DEFAULT '0',
  `febAtt` int(11) DEFAULT '0',
  `marAtt` int(11) DEFAULT '0',
  `aprAtt` int(11) DEFAULT '0',
  `mayAtt` int(11) DEFAULT '0',
  `junAtt` int(11) DEFAULT '0',
  `julAtt` int(11) DEFAULT '0',
  `augAtt` int(11) DEFAULT '0',
  `sepAtt` int(11) DEFAULT '0',
  `octAtt` int(11) DEFAULT '0',
  `novAtt` int(11) DEFAULT '0',
  `decAtt` int(11) DEFAULT '0',
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
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`yearid`, `yearstart`, `yearend`, `janAtt`, `febAtt`, `marAtt`, `aprAtt`, `mayAtt`, `junAtt`, `julAtt`, `augAtt`, `sepAtt`, `octAtt`, `novAtt`, `decAtt`, `dateStart`, `dateEnd`, `pretui1`, `premisc1`, `prebook1`, `pretui2`, `premisc2`, `prebook2`, `pretui3`, `premisc3`, `prebook3`, `gradetui1`, `gradebook1`, `grademisc1`, `gradetui2`, `grademisc2`, `gradebook2`, `gradetui3`, `grademisc3`, `gradebook3`, `gradetui4`, `grademisc4`, `gradebook4`, `gradetui5`, `grademisc5`, `gradebook5`, `gradetui6`, `grademisc6`, `gradebook6`, `scfee`, `scstatus`) VALUES
(18, 2019, 2020, 20, 20, 20, 20, 20, 15, 20, 20, 20, 20, 20, 15, '2019-05-15', '2020-04-15', 10000, 1500, 1000, 10000, 1500, 1000, 10000, 1500, 1000, 10000, 1500, 1000, 10000, 1000, 1500, 10000, 1000, 1500, 10000, 1000, 1500, 10000, 1000, 1501, 11000, 1000, 1500, NULL, 'INACTIVE'),
(19, 2019, 2020, 8, 78, 78787, 88, 78, 78, 787, 87, 87, 87, 87, 878, '2019-12-01', '2020-12-01', 7, 87, 87, 87, 87, 87, 887, 87, 87, 87, 87, 7, 87, 87, 87, 87, 87, 87, 8, 78, 78, 7, 87, 8, 78, 7, 87, NULL, 'ACTIVE'),
(20, 2019, 2020, 0, 0, 0, 0, 0, 12, 12, 12, 12, 12, 12, 12, '2019-06-12', '2020-12-01', 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 1, 2, 2, 2, 2, 2, 2, 2, 12, 12, 12, NULL, 'INACTIVE');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`secID`, `sename`, `gradelvl`, `adviserlname`, `yearid`) VALUES
(11, 'Undo', '1', 'TOLENTINO', 2020),
(13, 'Omega', '2', 'TOLENTINO', 2020),
(14, 'Hebrew', '3', 'PEREZ', 2020),
(16, 'Alpha', '5', 'MAHMOOD', 2020),
(17, 'Brew', 'Kinder 1', 'TAASIN', 2020),
(18, 'Beta', '6', 'TAASIN', 2020),
(45, 'Georgia', '4', 'MAHMOOD', 2020),
(46, 'Alpha', '6', 'TOLENTINO', 2019),
(47, 'Java', 'Grade 3', 'SOBREMONTE', 2019),
(48, 'Hambop', 'Pre-Kinder', 'SOBREMONTE', 2019);

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subjID`, `subname`, `adviserLname`, `yearid`) VALUES
(1, 'Math', 'TOLENTINO', 12),
(2, 'English', 'SOBREMONTE', 13),
(3, 'Science', 'MAHMOOD', 16),
(4, 'TLE', 'TOLENTINO', 16);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assessment`
--
ALTER TABLE `assessment`
  ADD CONSTRAINT `numberofID` FOREIGN KEY (`IDno`) REFERENCES `curstudent` (`IDno`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `IDno` FOREIGN KEY (`IDno`) REFERENCES `enstudent` (`IDno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `enrID` FOREIGN KEY (`enrID`) REFERENCES `enstudent` (`enid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gradlvl` FOREIGN KEY (`gradelvl`) REFERENCES `enstudent` (`gradelvl`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `yearID` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `enstudent`
--
ALTER TABLE `enstudent`
  ADD CONSTRAINT `IDYear` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `feestudent`
--
ALTER TABLE `feestudent`
  ADD CONSTRAINT `estudyID` FOREIGN KEY (`IDno`) REFERENCES `curstudent` (`IDno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `theyear` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `grades`
--
ALTER TABLE `grades`
  ADD CONSTRAINT `IDofNumber` FOREIGN KEY (`IDno`) REFERENCES `curstudent` (`IDno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `suID` FOREIGN KEY (`subjID`) REFERENCES `subject` (`subjID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `yID` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
