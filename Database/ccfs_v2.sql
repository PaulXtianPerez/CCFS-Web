-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 17, 2019 at 08:03 AM
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
  UNIQUE KEY `empID` (`empid`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accid`, `empid`, `username`, `password`, `fname`, `lname`, `type`, `accstatus`) VALUES
(1, 'CCFS-001', 'REGISTRAR', 'REGISTRAR', 'ADAM', 'SOBREMONTE', 'REGISTRAR', 'Active'),
(2, 'CCFS-002', 'Paul_Acc', 'a123', 'PAUL', 'PEREZ', 'REGISTRAR', 'Inactive'),
(3, 'CCFS-003', 'ACCOUNTING', 'ACCOUNTING', 'JARGON', 'TAASIN', 'ACCOUNTING', 'Active'),
(4, 'CCFS-004', 'vinceAcc', 'running', 'VINCENT', 'TOLENTINO', 'ACCOUNTING', 'Inactive'),
(5, 'CCFS-005', 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 'ADMIN', 'Active'),
(6, 'CCFS-008', 'ACC_IMRAN', '12345', 'IMRAN', 'MAHMOOD', 'ACCOUNTING', 'Active');

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
  `daysTar` int(40) NOT NULL,
  `daysAbs` int(40) DEFAULT NULL,
  PRIMARY KEY (`attid`),
  UNIQUE KEY `studid` (`IDno`,`yearid`),
  UNIQUE KEY `idyear` (`yearid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attid`, `IDno`, `yearid`, `month`, `daysPres`, `daysTar`, `daysAbs`) VALUES
(1, 1, 1, '1', 1, 0, NULL);

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
  `curid` int(45) NOT NULL,
  `subjID` int(90) NOT NULL,
  `grade` varchar(11) NOT NULL,
  `yearid` int(11) NOT NULL,
  `ordering` varchar(10) NOT NULL,
  PRIMARY KEY (`curid`),
  KEY `idyear` (`yearid`) USING BTREE,
  KEY `subID` (`subjID`)
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
(1, 210001, 'NURSERY', '1', '1', 1, '2019-11-14', 3, 1),
(2, 210002, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 2),
(3, 210003, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 3),
(4, 210004, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 4),
(5, 210005, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 5),
(6, 210006, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 6),
(7, 210007, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 7),
(8, 210008, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 8),
(9, 210009, 'NURSERY', '1', '1', 1, '2019-11-19', 3, 9),
(10, 210010, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 10),
(11, 210011, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 11),
(12, 210012, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 12),
(13, 210013, 'GRADE 1', '1', '1', 1, '2019-11-19', 3, 13),
(14, 210014, 'GRADE 6', '1', '1', 1, '2019-11-20', 3, 14),
(15, 210015, 'NURSERY', '1', '1', 1, '2019-11-20', 3, 15),
(16, 210016, 'NURSERY', '1', '1', 1, '2019-11-27', 3, 16);

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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `enstudent`
--

INSERT INTO `enstudent` (`enid`, `IDno`, `GivenName`, `MiddleName`, `SurName`, `gradelvl`, `birthdate`, `birthplace`, `gender`, `homeTelnum`, `mobilenum`, `studaddress`, `prevschoolattended`, `studstat`, `sponsor`, `faFname`, `falname`, `faAdd`, `faMobilenum`, `faEmail`, `faoccupation`, `moFname`, `moLname`, `moAdd`, `momobilenum`, `moEmail`, `mooccupation`, `sibFname`, `sibLname`, `sibBirthdate`, `sibschoolname`, `yearid`, `dateenrolled`, `guardianName`, `guardianAddress`, `guardianContact`) VALUES
(1, 210001, 'PAUL CHRISTIAN', 'SANGGA', 'PEREZ', 'NURSERY', '2012-11-06', 'BAGUIO CITY', 'M', '', '', 'SAN LUIS, BAGUIO CITY', '', 'Enrolled', NULL, 'PAUL', 'PEREZ', 'SAN LUIS, BAGUIO CITY', '09123456789', '', 'ENGINEER', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 3, '2019-11-14', '', '', ''),
(2, 210002, 'ANJELLA', 'TAYUBA', 'BUAN', 'GRADE 1', '2012-04-13', 'BAGUIO CITY', 'M', '', '09203662849', 'IRISAN, BAGUIO CITY', '', 'Enrolled', NULL, 'ROGER', 'TAYUBA', 'IRISAN, BAGUIO CITY', '09391212196', '', '', 'GRACE', 'BUAN', 'IRISAN, BAGUIO CITY', '09203662844', '', 'HOUSE KEEPER', NULL, NULL, NULL, NULL, 1, '2019-11-19', '', '', ''),
(3, 210003, 'CHYRIS DUALIE', 'ANGAWA', 'DANG-AY', 'GRADE 1', '2013-08-06', 'BAGUIO CITY', 'F', '', '09999198540', '# 290-D PRK-14-A CYPRESS, IRISAN, BAGUIO CITY', 'PATILONG ELEM. SCHOOL', 'Enrolled', NULL, 'MORRIS', 'DANG-AY', '# 290-D PRK-14-A CYPRESS, IRISAN, BAGUIO CITY', '09128889125', '', 'NURSE', 'CHERRY LOU', 'DANG-AY', '#290-D PRK. 14-A CYPRESS, IRISAN, BAGUIO CITY', '09999198540', '', '', 'OZZY CLYDE', 'DANG-AY', '2005-05-15', 'INHS', 3, '2019-11-19', ' ', ' ', ' '),
(4, 210004, 'NATALIE HYMES', 'BAGANO', 'MARZAN', 'GRADE 1', '2014-03-14', 'BENGUET GEN, LA TRINIDAD', 'F', '', '09999032717', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', 'LECA', 'Enrolled', NULL, 'ANDRES', 'MARZAN JR.', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', 'TAXI DRIVER', 'EVA', 'BAGANO', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '', '', '', NULL, NULL, NULL, NULL, 3, '2019-11-19', 'JULIET CAPUYAN MARZAN', '#32 PUROK 15, BALBOA, IRISAN, BAGUIO CITY', '09999032717'),
(5, 210005, 'LUZTY LANCE', 'MAYOS', 'BIASCA', 'GRADE 1', '2012-12-23', 'BAGUIO CITY', 'M', '244-7011', '', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', 'EASTER COLLEGE', 'Enrolled', NULL, 'LUISITO', 'BIASCA', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', '09998548911', '', 'BUSINESSMAN', 'ANA MAE', 'MAYOS', '01-A, PUROK 18, NAGOYA, IRISAN, BAGUIO CITY', '09465323005 / 09299717800', '', 'BUSINESSWOMAN', 'ZALOY EMMANUEL', 'BIASCA', '2012-12-30', 'PNHS', 3, '2019-11-19', '', '', ''),
(6, 210006, 'LIL CIANNE', 'VENTURA', 'BIORE', 'GRADE 1', '2013-03-05', 'BAGUIO CITY', 'F', '', '09129205286', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', 'BAGUIO CENTRAL SCHOOL', 'Enrolled', NULL, '', '', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '', '', '', 'CHRESS AN', 'VENTURA', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '09129205286', '', 'SALES ASSOCIATE', NULL, NULL, NULL, NULL, 3, '2019-11-19', 'CRISPIN M. VENTURA', '#114 PUROK 13, CYPRESS POINT, IRISAN, BAGUIO CITY', '09296884634'),
(7, 210007, 'LJ CELINA', 'PAGADOR', 'TIONGO', 'GRADE 1', '2013-08-25', 'BAGUIO CITY', 'F', '', '09504565950', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', 'CYPRESS CHRISTIAN FOUNDATION SCHOOL', 'Enrolled', NULL, 'B-JAY', 'TIONGO', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', '09082455013', 'B-JAYTIONGO@YAHOO.COM', 'LENDING COLLECTOR', 'JOSEBEN', 'TIONGCO', '#84-B ALLMAES CMPD, IRISAN, BAGUIO CITY', '09504565950', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(8, 210008, 'GHABRIEL ACE', 'SANCHEZ', 'PALOMO', 'GRADE 1', '2013-08-03', 'LA TRINIDAD', 'M', '', '', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', 'BAGUIO CENTRAL SCHOOL', 'Enrolled', NULL, 'CONSTANTINE', 'PALOMO', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', '09458150893', 'CONSPALOMO3378@GMAIL.COM', '', 'HEMMINGWAY', 'PALOMO', '#98 AGRO STREET, SAINT JOSEPH VILLAGE, IRISAN, BAGUIO CITY', '09308619368', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(9, 210009, 'RIDDICK LAURENCE', 'DOCYOSEN', 'VIERNES', 'NURSERY', '2012-12-01', 'KIN-IWAY, BESAO', 'M', '', '', '#20 PUROK 17, IRISAN, BAGUIO CITY', 'ICLC', 'Enrolled', NULL, 'JAYSON', 'VIERNES', '#20 PUROK 17, IRISAN, BAGUIO CITY', '', '', 'LABORER', 'JOEYLYN', 'VIERNES', '#20 PUROK 17, IRISAN, BAGUIO CITY', '09088611220', '', 'HOUSEWIFE', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(10, 210010, 'ASHLYNE ZYNHEL', 'BLAZA', 'CASTRO', 'GRADE 1', '2013-09-04', 'BGH BAGUIO', 'F', '', '09553854056', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', 'ELPEDIO QUIRINO ELEM SCH', 'Enrolled', NULL, 'ALLAN', 'CASTRO', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', '', '', 'VENDOR', 'JAYNALYN', 'BLAZA', 'PUROK 15, AGROO, IRISAN, BAGUIO CITY', '09553854056', '', 'HOUSEWIFE', 'ALJHAY', 'CASTRO', '2012-05-12', 'CCFS', 3, '2019-11-19', ' ', ' ', ' '),
(11, 210011, 'XERR JHAKE', 'DUMAPIS', 'BANTIAN', 'GRADE 1', '2012-07-11', 'BEGH', 'M', '', '09074243658 / 09266474312', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', 'UCAB ELEMENTARY SCHOOL', 'Enrolled', NULL, 'JESSIE', 'BANTIAN', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', '09196901341', '', 'POLICE OFFICER', 'JENNIFER', 'BANTIAN', 'PUROK 6, APUGAN, IRISAN, BAGUIO CITY', '09074243658', 'JENNIFER.BANTIAN@YAHOO.COM', 'HOUSEKEEPER', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(12, 210012, 'MERLA ZYLIE', 'LLACUNA', 'TALLOCOY', 'GRADE 1', '2013-09-25', 'LA TRINIDAD, BENGUET', 'F', '', '09294029140', '#96 PUROK 17, IRISAN, BAGUIO CITY', 'CCFS', 'Enrolled', NULL, 'PETER', 'TALLOCOY', '#96 PUROK 17, IRISAN, BAGUIO CITY', '', 'PJ.TALLOCOY@YAHOO.COM', 'OFW', 'FARRA MAE', 'TALLOCOY', '#96 PUROK 17, IRISAN, BAGUIO CITY', '09294029140', 'FM.TALLOCOY@YAHOO.COM', 'HOUSEKEEPER', NULL, NULL, NULL, NULL, 3, '2019-11-19', ' ', ' ', ' '),
(13, 210013, 'CEEJAY', 'BUENAVISTA', 'MORALES', 'GRADE 1', '2013-10-20', 'BENGUET', 'M', '', '09103323015', '011A PUROK 12, IRISAN, BAGUIO CITY', 'CCFS', 'Enrolled', NULL, 'SEVERINO', 'MORALES', '011A PUROK 12, IRISAN, BAGUIO CITY', '', '', 'WELDER', 'MARIVIC', 'MORALES', '011A PUROK 12, IRISAN, BAGUIO CITY', '09103323015', '', 'HOUSEWIFE', 'JOY MARRIE', 'MORALES', '1999-12-08', 'UC', 3, '2019-11-19', ' ', ' ', ' '),
(14, 210014, 'ADAM', 'NAVARRO', 'SOBREMONT', 'GRADE 6', '1999-06-02', 'BAGUIO CITY ', 'M', '', '0995635694', '06B LOAKAN BAGUIO CITY', 'CCFS', 'Enrolled', NULL, 'ARIEL', 'SOBREMONTE', '06B LOAKAN BAGUIO CITY', '09560595161', '', 'TAXI DRIVER', 'LILIA', 'NAVARRO', '06B LOAKAN BAGUIO CITY', '', '', 'OFW', NULL, NULL, NULL, NULL, 3, '2019-11-20', 'PAUL CHRISTIAN PEREZ', 'AWLFJAW', '09999999999'),
(15, 210015, 'CHRISTINE MAE ANNE', 'SANGGA', 'PEREZ', 'NURSERY', '2013-08-15', 'BAGUIO CITY', 'F', NULL, '09614286968', 'IRISAN, BAGUIO CITY', ' ', 'Enrolled', NULL, NULL, NULL, NULL, NULL, NULL, 'ENGINEER', NULL, NULL, NULL, NULL, NULL, 'NURSE', NULL, NULL, NULL, NULL, 3, '2019-11-01', 'PAUL ROLAND ', '#31 PUROK 15, BALABOA, IRISAN BAGUIO CITY', '099939294913'),
(16, 210016, 'IMRAN', 'DIXON', 'MAHMOOD', 'NURSERY', '2004-11-14', 'BAGUIO CITY', 'M', '', '', 'BAGUIO CITY', '', 'Enrolled', NULL, '', '', 'BAGUIO CITY', '', '', '', '', '', '', '', '', '', NULL, NULL, NULL, NULL, 3, '2019-11-27', 'PAUL PEREZ', 'BAGUIO CITY', '0912345678');

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
  `totalAtt` int(20) DEFAULT NULL,
  `totalSec` int(20) NOT NULL,
  `dateStart` date DEFAULT NULL,
  `dateEnd` date DEFAULT NULL,
  `preTuition` double NOT NULL,
  `preMisc` double NOT NULL,
  `preBook` double NOT NULL,
  `gradeTuition` double NOT NULL,
  `gradeMisc` double NOT NULL,
  `gradeBook` double NOT NULL,
  `scfee` float DEFAULT NULL,
  `scstatus` varchar(10) DEFAULT 'INACTIVE',
  PRIMARY KEY (`yearid`),
  KEY `yearstart` (`yearstart`),
  KEY `yearend` (`yearend`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schoolyear`
--

INSERT INTO `schoolyear` (`yearid`, `yearstart`, `yearend`, `totalAtt`, `totalSec`, `dateStart`, `dateEnd`, `preTuition`, `preMisc`, `preBook`, `gradeTuition`, `gradeMisc`, `gradeBook`, `scfee`, `scstatus`) VALUES
(1, 2019, 2020, 1, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, 'INACTIVE'),
(2, 2020, 2021, 200, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, 'INACTIVE'),
(3, 2021, 2022, 200, 0, NULL, NULL, 0, 0, 0, 0, 0, 0, NULL, 'INACTIVE'),
(7, 2019, 2020, 200, 6, NULL, NULL, 0, 0, 0, 0, 0, 0, 20115, 'INACTIVE'),
(10, 2020, 2021, 200, 8, '2020-06-30', '2021-04-15', 8000, 1000, 5000, 5222, 2555, 1000, 5632, 'INACTIVE');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `secID` int(11) NOT NULL AUTO_INCREMENT,
  `sename` varchar(10) NOT NULL,
  `adviserfname` varchar(45) NOT NULL,
  `adviserlname` varchar(40) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`secID`),
  UNIQUE KEY `adviserid` (`adviserfname`),
  UNIQUE KEY `yearid` (`yearid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subjID` int(90) NOT NULL AUTO_INCREMENT,
  `subname` varchar(12) NOT NULL,
  `yearid` int(11) NOT NULL,
  PRIMARY KEY (`subjID`),
  KEY `yeaid` (`yearid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD CONSTRAINT `iyear` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `subjectID` FOREIGN KEY (`subjID`) REFERENCES `subject` (`subjID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `curstudent`
--
ALTER TABLE `curstudent`
  ADD CONSTRAINT `IDno` FOREIGN KEY (`IDno`) REFERENCES `enstudent` (`IDno`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `enrID` FOREIGN KEY (`enrID`) REFERENCES `enstudent` (`enid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `gradlvl` FOREIGN KEY (`gradelvl`) REFERENCES `enstudent` (`gradelvl`) ON DELETE NO ACTION ON UPDATE NO ACTION,
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

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `feestudID` FOREIGN KEY (`feestID`) REFERENCES `feestudent` (`feestID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `schoolfees`
--
ALTER TABLE `schoolfees`
  ADD CONSTRAINT `idofYear` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `yeaID` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subject`
--
ALTER TABLE `subject`
  ADD CONSTRAINT `theyearid` FOREIGN KEY (`yearid`) REFERENCES `schoolyear` (`yearid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
