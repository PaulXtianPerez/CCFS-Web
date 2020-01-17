-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 17, 2020 at 03:23 AM
-- Server version: 5.7.24
-- PHP Version: 7.3.1

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
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=latin1;

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
(133, 210001, 10, 'Dec', NULL, NULL, NULL);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `curstudent`
--

INSERT INTO `curstudent` (`studentid`, `IDno`, `gradelvl`, `section`, `teacher`, `totalpayment`, `dateenrolled`, `yearid`, `enrID`) VALUES
(1, 210001, 'KINDER', '1', '1', 1, '2019-11-14', 3, 1),
(2, 210002, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 2),
(3, 210003, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 3),
(4, 210004, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 4),
(5, 210005, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 5),
(6, 210006, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 6),
(7, 210007, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 7),
(8, 210008, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 8),
(9, 210009, 'KINDER', '1', '1', 1, '2019-11-19', 3, 9),
(10, 210010, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 10),
(11, 210011, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 11),
(12, 210012, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 12),
(13, 210013, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 13),
(14, 210014, 'GRADE 6', '1', '1', 1, '2019-11-20', 3, 14),
(15, 210015, 'KINDER', '1', '1', 1, '2019-11-20', 3, 15),
(16, 210016, 'KINDER', '1', '1', 1, '2019-11-27', 3, 16);

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
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

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
(14, 210014, 'ADAM', 'NAVARRO', 'SOBREMONT', 'GRADE 6', '2020-12-12', 'BAGUIO CITY ', 'M', '', '0995635694', '06B LOAKAN BAGUIO CITY', 'CCFS', 'Enrolled', NULL, 'ARIEL', 'SOBREMONTE', '06B LOAKAN BAGUIO CITY', '09560595161', '', 'TAXI DRIVER', 'LILIA', 'NAVARRO', '06B LOAKAN BAGUIO CITY', '', '', 'OFW', NULL, NULL, NULL, NULL, 3, '2019-11-20', 'PAUL CHRISTIAN PEREZ', 'AWLFJAW', '09999999999'),
(15, 210015, 'CHRISTINE MAE ANNE', 'SANGGA', 'PEREZ', 'NURSERY', '2020-12-12', 'BAGUIO CITY', 'F', NULL, '09614286968', 'IRISAN, BAGUIO CITY', ' ', 'Enrolled', NULL, NULL, NULL, NULL, NULL, NULL, 'ENGINEER', NULL, NULL, NULL, NULL, NULL, 'NURSE', NULL, NULL, NULL, NULL, 3, '2019-11-01', 'PAUL ROLAND ', '#31 PUROK 15, BALABOA, IRISAN BAGUIO CITY', '099939294913'),
(16, 210016, 'IMRAN', 'DIXON', 'MAHMOOD', 'NURSERY', '2020-12-12', 'BAGUIO CITY', 'M', '', '', 'BAGUIO CITY', '', 'Enrolled', NULL, '', '', 'BAGUIO CITY', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 3, '2019-11-27', 'PAUL PEREZ', 'BAGUIO CITY', '0912345678'),
(17, 210017, 'aawd', 'awd', 'awd', 'Preschool', '2020-12-12', 'awd', 'Male', 'awd', 'awwd', 'awd', 'awd', 'Enrolled', '', 'awd', 'awd', 'awd', 'awwd', 'awd', 'awd', 'awd', 'awd', 'awwd', 'awd', 'awd', 'awd', '', '', '2020-12-12', '', 11, '2020-03-01', '', '', ''),
(18, 210018, 'awd', 'awd', 'awd', 'Preschool', '2020-12-12', 'awd', 'Male', 'awwd', 'awd', 'wd', 'awd', 'Enrolled', '', 'awd', 'aawd', 'awd', 'awd', 'awd', 'awwd', 'awawd', 'awwd', 'awd', 'awd', 'awd', 'awd', '', '', '2020-12-12', '', 11, '2020-03-01', 'awd', 'awd', 'awd'),
(19, 210019, 'awd', 'awd', 'awd', 'Preschool', '2020-12-12', 'awd', 'Male', 'awd', 'awd', 'awd', 'awd', 'Enrolled', '', 'awd', 'khk', 'hk', 'hkh', 'kh', 'hk', 'khk', 'hk', 'hk', 'khk', 'hk', 'hkh', '', '', '2020-12-12', '', 11, '2020-03-01', 'h', 'khh', 'kh'),
(20, 210020, 'HDin', 'aosidlsd', 'Hander', 'Grade 1', '1998-01-21', 'qweqwe', 'Male', '123', '123', 'qwe', 'asd', 'Enrolled', '', 'jhkjh', 'kjh', 'kjh', '123', 'kjh', 'kjh', 'kjh', 'kjh', 'kjh', '123', 'jkasjd', 'kjh', '', '', '2020-12-12', '', 13, '2020-01-14', 'kjhkjh', 'kjhkh', '123'),
(21, 210021, 'asdasd', 'asdasd', 'Hander', 'Grade 2', '1998-01-21', 'asdasd', 'Male', '123', '123', 'asdasd', 'jasdj', 'Enrolled', '', 'kjhkjh', 'kh', 'kjh', '123', 'kjh', 'kjh', 'kjhkjh', 'kjkjh', 'kjhkjh', '123', 'kjhkj', 'khjkjh', '', '', '2020-12-12', '', 13, '2020-01-14', 'kjhjkh', 'kjh', '132'),
(22, 210022, 'HDin', 'aosidlsd', 'Hander', 'Section', '1998-01-21', 'lklkj', 'Female', 'k123123', '12312', 'lkjl', 'kjhkjh', 'Enrolled', '', 'jhkjhkjh', 'kjh', 'kjh', '123123', 'jhgjhgjhg', 'kjhk', 'jhgjhg', 'jhgj', 'hgjhg', '123', 'jhgjhg', 'jhgjhgjhg', '', '', '2020-12-12', '', 10, '2020-01-15', 'hkjhkjh', 'kjhkjhkjh', '12313');

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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`yearid`, `yearstart`, `yearend`, `janAtt`, `febAtt`, `marAtt`, `aprAtt`, `mayAtt`, `junAtt`, `julAtt`, `augAtt`, `sepAtt`, `octAtt`, `novAtt`, `decAtt`, `dateStart`, `dateEnd`, `pretui1`, `premisc1`, `prebook1`, `pretui2`, `premisc2`, `prebook2`, `pretui3`, `premisc3`, `prebook3`, `gradetui1`, `gradebook1`, `grademisc1`, `gradetui2`, `grademisc2`, `gradebook2`, `gradetui3`, `grademisc3`, `gradebook3`, `gradetui4`, `grademisc4`, `gradebook4`, `gradetui5`, `grademisc5`, `gradebook5`, `gradetui6`, `grademisc6`, `gradebook6`, `scfee`, `scstatus`) VALUES
(1, 2019, 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INACTIVE'),
(2, 2020, 2021, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INACTIVE'),
(3, 2021, 2022, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'INACTIVE'),
(7, 2019, 2020, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 20115, 'INACTIVE'),
(10, 2020, 2021, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2020-06-30', '2021-04-15', NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5632, 'ACTIVE'),
(11, 2222, 22223, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2222-05-04', '2223-06-02', 1, 123, 12, 2, 213, 21, 0, 0, 0, 1, 123, 12, 2, 21, 213, 3, 31, 312, 4, 41, 412, 5, 51, 512, 6, 61, 612, 6215, 'INACTIVE'),
(12, 2023, 2024, 20, 25, 26, 23, 21, 51, 2, 56, 1, 56, 5, 4, '2023-06-02', '2024-05-25', 51548, 5484, 5484, 545, 545, 5454, 0, 0, 0, 545, 54, 54, 54, 54, 54, 54, 54, 545, 45, 454, 545, 45, 45, 454, 545, 45, 54, 545, 'INACTIVE'),
(13, 9010, 9011, 54541, 545, 45, 454, 54, 54, 54, 54, 54, 54, 5, 45, '9010-01-21', '9011-01-21', 45, 4, 54, 54, 54, 54, 54, 5, 45, 45, 54, 4, 54, 54, 54, 54, 54, 54, 5, 45, 4, 54123, 54, 54, 54, 5, 45, 4, 'INACTIVE'),
(14, 3019, 3020, 654564, 654, 654, 654, 654, 645, 654, 654, 6, 546, 54, 654, '3019-12-01', '3020-12-01', 654, 6, 54, 654, 654, 654, 654, 546, 6, 546, 654, 54, 654, 654, 654, 65, 46, 54, 654, 654, 6, 54, 654, 654, 654, 65, 465, NULL, 'INACTIVE');

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
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`secID`, `sename`, `gradelvl`, `adviserlname`, `yearid`) VALUES
(46, 'Aleph', 'Nursery', 'CARINIO', 2020),
(47, 'Alpha', 'Pre-Kinder', 'MARSAN', 2020),
(48, 'Beta', 'Kinder', 'ARYOLA', 2020),
(49, 'Gamma', 'Grade 1', 'DEGUZMAN', 2020),
(51, 'Delta', 'Grade 2', 'ABALOS', 2020),
(52, 'Epsilon', 'Grade 3', 'PUGADO', 2020),
(53, 'Zeta', 'Grade 4', 'BONA', 2020),
(54, 'Eta', 'Grade 5', 'SORIANO', 2020),
(55, 'Theta', 'Grade 6', 'LERNON', 2020);

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
