-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 29, 2020 at 03:50 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

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
-- Table structure for table `checklist`
--

DROP TABLE IF EXISTS `checklist`;
CREATE TABLE IF NOT EXISTS `checklist` (
  `checkid` int(11) NOT NULL AUTO_INCREMENT,
  `checkvalues` varchar(45) DEFAULT NULL,
  `checkdesc` varchar(200) DEFAULT NULL,
  `competencyvalues` varchar(45) DEFAULT NULL,
  `competencydesc` varchar(200) DEFAULT NULL,
  `corevalues` varchar(45) DEFAULT NULL,
  `valuedesc` varchar(200) DEFAULT NULL,
  `firstrating` varchar(5) DEFAULT NULL,
  `secondrating` varchar(5) DEFAULT NULL,
  `thirdrating` varchar(5) DEFAULT NULL,
  `fourthrating` varchar(5) DEFAULT NULL,
  `studatt` int(11) DEFAULT NULL,
  `IDno` int(11) DEFAULT NULL,
  PRIMARY KEY (`checkid`),
  KEY `idnumber` (`IDno`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`checkid`, `checkvalues`, `checkdesc`, `competencyvalues`, `competencydesc`, `corevalues`, `valuedesc`, `firstrating`, `secondrating`, `thirdrating`, `fourthrating`, `studatt`, `IDno`) VALUES
(1, 'GROSS MOTOR', 'Climbs on chair or other elevated piece of furniture like bed without help.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(2, 'GROSS MOTOR', 'Walks backward.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(3, 'GROSS MOTOR', 'Runs without tripping or falling.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(4, 'GROSS MOTOR', 'Walks downstairs, two feet on each step with one hand held.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(5, 'GROSS MOTOR', 'Walks upstairs holding handrail, two feet on each step.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(6, 'GROSS MOTOR', 'Walks upstairs with alternate feet without holding handrails.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(7, 'GROSS MOTOR', 'Walks downstairs with alternate feet without holding handrails.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(8, 'GROSS MOTOR', 'Moves body part as directed.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(9, 'GROSS MOTOR', 'Jumps up.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(10, 'GROSS MOTOR', 'Throws ball overhead with direction.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(11, 'GROSS MOTOR', 'Hops 1 to 3 steps on preferred foot.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(12, 'GROSS MOTOR', 'Jumps and turns.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(13, 'GROSS MOTOR', 'Dances patterns/joins group movement activities.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(14, 'FINE MOTOR', 'Uses all 5 fingers to get foods/toys placed on flat surface.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(15, 'FINE MOTOR', 'Picks up objects with thumb and index fingers.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(16, 'FINE MOTOR', 'Displays a hand preference.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(17, 'FINE MOTOR', 'Puts objects in/out of containers.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(18, 'FINE MOTOR', 'Holds crayon with all the fingers of his hand making a fist. (i.e. palmar grasp)', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(19, 'FINE MOTOR', 'Unscrew lid container or unwraps food.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(20, 'FINE MOTOR', 'Scribbles spontaneously.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(21, 'FINE MOTOR', 'Scribbles vertical and horizontal lines.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(22, 'FINE MOTOR', 'Draws circle purposely.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(23, 'FINE MOTOR', 'Draws a human figure (head, eyes, trunk, arms, and hand/fingers).', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(24, 'FINE MOTOR', 'Draws a house using geometric forms.', NULL, NULL, NULL, NULL, '', '', '', '', 1, 200001),
(25, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates health habits that keep one clean and sanitary', NULL, NULL, 'B', 'B ', 'C', 'C', 1, 200001),
(26, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates health habits that promote personal safety', NULL, NULL, 'A', 'B', 'B', 'A', 1, 200001),
(27, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates locomotor skills such as walking, running, skipping, jumping, climbing correctly during play, dance or exercise activities.', NULL, NULL, '', '', '', '', 1, 200001),
(28, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates non-locomotor skills such as pushing, pulling, turning, swaying, bending, throwing, catching, and kicking correctly during play, dance or exercise.', NULL, NULL, '', '', '', '', 1, 200001),
(29, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrate fine motor skills needed for self-care/self-help such as tooth brushing, buttoning, screwing, and unscrewing lids, using spoon and fork correctly, etc.', NULL, NULL, '', '', '', '', 1, 200001),
(30, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrate fine motor skills needed for creative self-expression/art activities, such as tearing, cutting, pasting, copying, drawing, coloring, molding, painting, and lacing, etc.', NULL, NULL, '', '', '', '', 1, 200001),
(31, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Traces, copies, or writes letter and numerals', NULL, NULL, '', '', '', '', 1, 200001),
(32, NULL, NULL, 'Socio-Emotional Development', 'States personal information (name, gender, age, birthday)', NULL, NULL, '', '', '', '', 1, 200001),
(33, NULL, NULL, 'Socio-Emotional Development', 'Expresses personal interests and needs', NULL, NULL, '', '', '', '', 1, 200001),
(34, NULL, NULL, 'Socio-Emotional Development', 'Demonstrates readiness in trying out new experiences, and self-confidence in doing tasks independently', NULL, NULL, '', '', '', '', 1, 200001),
(35, NULL, NULL, 'Socio-Emotional Development', 'Expresses feelings in appropriate ways and in different situations.', NULL, NULL, '', '', '', '', 1, 200001),
(36, NULL, NULL, 'Socio-Emotional Development', 'Follow school rules willingly and executes school tasks and routines well', NULL, NULL, '', '', '', '', 1, 200001),
(37, NULL, NULL, 'Socio-Emotional Development', 'Recognizes different emotions, acknowledges the feelings of others, and shows willingness to help.', NULL, NULL, '', '', '', '', 1, 200001),
(38, NULL, NULL, 'Socio-Emotional Development', 'Shows respect in dealing with peers and adults', NULL, NULL, '', '', '', '', 1, 200001),
(39, NULL, NULL, 'Socio-Emotional Development', 'Identifies members of one\'s family', NULL, NULL, '', '', '', '', 1, 200001),
(40, NULL, NULL, 'Socio-Emotional Development', 'Identifies people and places in the school and community', NULL, NULL, '', '', '', '', 1, 200001),
(41, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Expresses love of God in full reverence and faithfulness.', 'RO', 'SO', 'AO', 'AO', NULL, NULL),
(42, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Applies God\'s Word and Truth in school and at home.', 'AO', 'AO', '', '', NULL, NULL),
(43, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Respects place of worship and religious beliefs of others.', 'AO', 'SO', '', '', NULL, NULL),
(44, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Demonstrates intellectual honesty', 'NO', 'RO', '', '', NULL, NULL),
(45, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Recognizes and respects one\'s feelings and those of others', NULL, NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Sensitive to individual, social, and cultural differences', NULL, NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Recognizes and respects people from different economic, social, and cultural backgrounds', NULL, NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Cooperates during activities', NULL, NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Communicates respectfully', NULL, NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Accepts defeat and celebrates others\' success', NULL, NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Shows a caring attitude towards the environment, and school materials', NULL, NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Practices waste management', NULL, NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Conserves energy and resources', NULL, NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Keeps work area in order during and after work.', NULL, NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Keeps one\'s work neat and orderly.', NULL, NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Identifies oneself as a Filipino', NULL, NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Respects the flag and national anthem', NULL, NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Abides by the rules of the school, community, and country', NULL, NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Perseveres to achieve goals despite difficult circumstances', NULL, NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Manages time and personal resources efficiently and effectively', NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checklist`
--
ALTER TABLE `checklist`
  ADD CONSTRAINT `idnumber` FOREIGN KEY (`IDno`) REFERENCES `curstudent` (`IDno`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
