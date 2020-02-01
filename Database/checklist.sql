-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 01, 2020 at 09:44 AM
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
  `checkvalues` varchar(50) DEFAULT NULL,
  `checkdesc` varchar(250) DEFAULT NULL,
  `competencyvalues` varchar(50) DEFAULT NULL,
  `competencydesc` varchar(250) DEFAULT NULL,
  `corevalues` varchar(50) DEFAULT NULL,
  `valuedesc` varchar(250) DEFAULT NULL,
  `firstrating` varchar(5) DEFAULT NULL,
  `secondrating` varchar(5) DEFAULT NULL,
  `thirdrating` varchar(5) DEFAULT NULL,
  `fourthrating` varchar(5) DEFAULT NULL,
  `IDno` int(11) DEFAULT NULL,
  PRIMARY KEY (`checkid`),
  KEY `idnumber` (`IDno`)
) ENGINE=InnoDB AUTO_INCREMENT=204 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checklist`
--

INSERT INTO `checklist` (`checkid`, `checkvalues`, `checkdesc`, `competencyvalues`, `competencydesc`, `corevalues`, `valuedesc`, `firstrating`, `secondrating`, `thirdrating`, `fourthrating`, `IDno`) VALUES
(1, 'GROSS MOTOR', 'Climbs on chair or other elevated piece of furniture like bed without help.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(2, 'GROSS MOTOR', 'Walks backward.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(3, 'GROSS MOTOR', 'Runs without tripping or falling.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(4, 'GROSS MOTOR', 'Walks downstairs, two feet on each step with one hand held.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(5, 'GROSS MOTOR', 'Walks upstairs holding handrail, two feet on each step.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(6, 'GROSS MOTOR', 'Walks upstairs with alternate feet without holding handrails.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(7, 'GROSS MOTOR', 'Walks downstairs with alternate feet without holding handrails.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(8, 'GROSS MOTOR', 'Moves body part as directed.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(9, 'GROSS MOTOR', 'Jumps up.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(10, 'GROSS MOTOR', 'Throws ball overhead with direction.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(11, 'GROSS MOTOR', 'Hops 1 to 3 steps on preferred foot.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(12, 'GROSS MOTOR', 'Jumps and turns.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(13, 'GROSS MOTOR', 'Dances patterns/joins group movement activities.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(14, 'FINE MOTOR', 'Uses all 5 fingers to get foods/toys placed on flat surface.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(15, 'FINE MOTOR', 'Picks up objects with thumb and index fingers.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(16, 'FINE MOTOR', 'Displays a hand preference.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(17, 'FINE MOTOR', 'Puts objects in/out of containers.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(18, 'FINE MOTOR', 'Holds crayon with all the fingers of his hand making a fist. (i.e. palmar grasp)', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(19, 'FINE MOTOR', 'Unscrew lid container or unwraps food.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(20, 'FINE MOTOR', 'Scribbles spontaneously.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(21, 'FINE MOTOR', 'Scribbles vertical and horizontal lines.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(22, 'FINE MOTOR', 'Draws circle purposely.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(23, 'FINE MOTOR', 'Draws a human figure (head, eyes, trunk, arms, and hand/fingers).', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(24, 'FINE MOTOR', 'Draws a house using geometric forms.', NULL, NULL, NULL, NULL, '', '', '', '', NULL),
(25, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates health habits that keep one clean and sanitary', NULL, NULL, 'B', 'B ', 'C', 'C', NULL),
(26, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates health habits that promote personal safety', NULL, NULL, 'A', 'B', 'B', 'A', NULL),
(27, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates locomotor skills such as walking, running, skipping, jumping, climbing correctly during play, dance or exercise activities.', NULL, NULL, '', '', '', '', NULL),
(28, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrates non-locomotor skills such as pushing, pulling, turning, swaying, bending, throwing, catching, and kicking correctly during play, dance or exercise.', NULL, NULL, '', '', '', '', NULL),
(29, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrate fine motor skills needed for self-care/self-help such as tooth brushing, buttoning, screwing, and unscrewing lids, using spoon and fork correctly, etc.', NULL, NULL, '', '', '', '', NULL),
(30, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Demonstrate fine motor skills needed for creative self-expression/art activities, such as tearing, cutting, pasting, copying, drawing, coloring, molding, painting, and lacing, etc.', NULL, NULL, '', '', '', '', NULL),
(31, NULL, NULL, 'Health, Well-Being, and Motor Development', 'Traces, copies, or writes letter and numerals', NULL, NULL, '', '', '', '', NULL),
(32, NULL, NULL, 'Socio-Emotional Development', 'States personal information (name, gender, age, birthday)', NULL, NULL, '', '', '', '', NULL),
(33, NULL, NULL, 'Socio-Emotional Development', 'Expresses personal interests and needs', NULL, NULL, '', '', '', '', NULL),
(34, NULL, NULL, 'Socio-Emotional Development', 'Demonstrates readiness in trying out new experiences, and self-confidence in doing tasks independently', NULL, NULL, '', '', '', '', NULL),
(35, NULL, NULL, 'Socio-Emotional Development', 'Expresses feelings in appropriate ways and in different situations.', NULL, NULL, '', '', '', '', NULL),
(36, NULL, NULL, 'Socio-Emotional Development', 'Follow school rules willingly and executes school tasks and routines well', NULL, NULL, '', '', '', '', NULL),
(37, NULL, NULL, 'Socio-Emotional Development', 'Recognizes different emotions, acknowledges the feelings of others, and shows willingness to help.', NULL, NULL, '', '', '', '', NULL),
(38, NULL, NULL, 'Socio-Emotional Development', 'Shows respect in dealing with peers and adults', NULL, NULL, '', '', '', '', NULL),
(39, NULL, NULL, 'Socio-Emotional Development', 'Identifies members of one\'s family', NULL, NULL, '', '', '', '', NULL),
(40, NULL, NULL, 'Socio-Emotional Development', 'Identifies people and places in the school and community', NULL, NULL, '', '', '', '', NULL),
(41, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Expresses love of God in full reverence and faithfulness.', 'RO', 'SO', 'AO', 'AO', NULL),
(42, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Applies God\'s Word and Truth in school and at home.', 'AO', 'AO', '', '', NULL),
(43, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Respects place of worship and religious beliefs of others.', 'AO', 'SO', '', '', NULL),
(44, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Demonstrates intellectual honesty', 'NO', 'RO', '', '', NULL),
(45, NULL, NULL, NULL, NULL, 'Reconciliation with God (Maka-Diyos)', 'Recognizes and respects one\'s feelings and those of others', NULL, NULL, NULL, NULL, NULL),
(46, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Sensitive to individual, social, and cultural differences', NULL, NULL, NULL, NULL, NULL),
(47, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Recognizes and respects people from different economic, social, and cultural backgrounds', NULL, NULL, NULL, NULL, NULL),
(48, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Cooperates during activities', NULL, NULL, NULL, NULL, NULL),
(49, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Communicates respectfully', NULL, NULL, NULL, NULL, NULL),
(50, NULL, NULL, NULL, NULL, 'Christ-Like Character (Maka-tao)', 'Accepts defeat and celebrates others\' success', NULL, NULL, NULL, NULL, NULL),
(51, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Shows a caring attitude towards the environment, and school materials', NULL, NULL, NULL, NULL, NULL),
(52, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Practices waste management', NULL, NULL, NULL, NULL, NULL),
(53, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Conserves energy and resources', NULL, NULL, NULL, NULL, NULL),
(54, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Keeps work area in order during and after work.', NULL, NULL, NULL, NULL, NULL),
(55, NULL, NULL, NULL, NULL, 'Excellence (Makakalikasan)', 'Keeps one\'s work neat and orderly.', NULL, NULL, NULL, NULL, NULL),
(56, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Identifies oneself as a Filipino', NULL, NULL, NULL, NULL, NULL),
(57, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Respects the flag and national anthem', NULL, NULL, NULL, NULL, NULL),
(58, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Abides by the rules of the school, community, and country', NULL, NULL, NULL, NULL, NULL),
(59, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Perseveres to achieve goals despite difficult circumstances', NULL, NULL, NULL, NULL, NULL),
(60, NULL, NULL, NULL, NULL, 'Instrumentation (Makabansa)', 'Manages time and personal resources efficiently and effectively', NULL, NULL, NULL, NULL, NULL),
(61, 'SELF-HELP', 'Feeds self with finger-food (e.g. biscuit, bread)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 'SELF-HELP', 'Feeds self using spoon with spillage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(63, 'SELF-HELP', 'Feeds self using fingers with spillage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 'SELF-HELP', 'Feeds self using spoon without spillage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 'SELF-HELP', 'Feeds self using fingers without spillage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(66, 'SELF-HELP', 'Eats without need of spoon feeding during any meal.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(67, 'SELF-HELP', 'Holds cold cup for drinking.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(68, 'SELF-HELP', 'Drinks cup with spillage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(69, 'SELF-HELP', 'Drinks from cup unassisted.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 'SELF-HELP', 'Pours from pitcher without spillage.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 'SELF-HELP', 'Prepares own foods/snacks.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 'SELF-HELP', 'Prepares meals for younger siblings/family members when no adult is around.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 'SELF-HELP', 'Participates when being dressed (e.g. raises arms and lifts legs)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 'SELF-HELP', 'Pulls down gartered short pants.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 'SELF-HELP', 'Removes undershirts.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 'SELF-HELP', 'Dresses without assistance except buttons and tying.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 'SELF-HELP', 'Dresses without assistance including buttons and tying.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 'SELF-HELP', 'Informs the adult only after he/she has already urinated (peed) or moves his/her bowels (poohed) in his/her underpants.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 'SELF-HELP', 'Informs others the need to urinate (pee) or move (pooh pooh) so he/she can be brought to a designated place (e.g. comfort room).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 'SELF-HELP', 'Goes to the designated place to urinate (pee) or move bowels (pooh) but sometimes still does in his/her pants.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 'SELF-HELP', 'Goes to the designated place to urinate (pee) or move bowels (pooh) but never does this in his/her pants.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 'SELF-HELP', 'Wipes or cleans self after a bowel movement (pooh).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 'SELF-HELP', 'Participates when bathing (e.g rubbing arms with soap)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 'SELF-HELP', 'Washes and dries hands without any help.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 'SELF-HELP', 'Washes face without any help.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(86, 'SELF-HELP', 'Bathes without any help.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(87, 'RECEPTIVE LANGUAGE', 'Points to family member when asked to do so.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(88, 'RECEPTIVE LANGUAGE', 'Points to body parts on himself/herself when asked to do so.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(89, 'RECEPTIVE LANGUAGE', 'Points to 5 named pictured objects when asked to do so.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(90, 'RECEPTIVE LANGUAGE', 'Follows one-step instructions that includes simple prepositions (e.g. in, on, under, etc.)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(91, 'RECEPTIVE LANGUAGE', 'Follows two-step instructions that include simple prepositions.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(92, 'EXPRESSIVE LANGUAGE', 'Uses 5-20 recognizable words.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(93, 'EXPRESSIVE LANGUAGE', 'Uses pronouns (e.g. I, me, you, etc.)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(94, 'EXPRESSIVE LANGUAGE', 'Uses 2-3 words verb-noun combinations (e.g. hindi gatas)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(95, 'EXPRESSIVE LANGUAGE', 'Name objects in pictures.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(96, 'EXPRESSIVE LANGUAGE', 'Speaks in grammatically correct 2-3 word sentences.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(97, 'EXPRESSIVE LANGUAGE', 'Ask \"what\" questions.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(98, 'EXPRESSIVE LANGUAGE', 'Ask \"who\" and \"why\" questions.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(99, 'EXPRESSIVE LANGUAGE', 'Gives account of recent experiences (with prompting) in order of occurrence using past tense.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(100, 'COGNITIVE', 'Looks at direction of falling objects.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(101, 'COGNITIVE', 'Looks for partially hidden objects.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(102, 'COGNITIVE', 'Imitates behavior just seen a few minutes earlier.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(103, 'COGNITIVE', 'Offers objects but will not release it.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(104, 'COGNITIVE', 'Looks for completely hidden objects.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(105, 'COGNITIVE', 'Exhibits simple pretend play (feed, put doll to sleep).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(106, 'COGNITIVE', 'Matches objects.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(107, 'COGNITIVE', 'Matches 2-3 colors.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(108, 'COGNITIVE', 'Matches pictures.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(109, 'COGNITIVE', 'Sorts based on shapes.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(110, 'COGNITIVE', 'Sorts based on 2 attribute (e.g. size and color)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(111, 'COGNITIVE', 'Arranges objects according to size, from smallest to biggest.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(112, 'COGNITIVE', 'Names 4-6 colors.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(113, 'COGNITIVE', 'Copies shapes', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(114, 'COGNITIVE', 'Names 3 animals or vegetables when asked', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(115, 'COGNITIVE', 'States what common household items are used for.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(116, 'COGNITIVE', 'Can assemble simple puzzles.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(117, 'COGNITIVE', 'Demonstrates an understanding of opposites by completing a statement.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(118, 'COGNITIVE', 'Points to left and right sides of the body.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(119, 'COGNITIVE', 'Can state what is silly or wrong in the pictures.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(120, 'COGNITIVE', 'Matches lower and upper case letters.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(121, 'SOCIO-EMOTIONAL', 'Enjoys watching activities of nearby people or animals.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(122, 'SOCIO-EMOTIONAL', 'Friendly with strangers but may initially show slight anxiety or shyness.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(123, 'SOCIO-EMOTIONAL', 'Plays alone but likes to be near with familiar adults or brothers or sisters.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(124, 'SOCIO-EMOTIONAL', 'Laughs or squeals aloud and play.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(125, 'SOCIO-EMOTIONAL', 'Plays peek-a-boo.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(126, 'SOCIO-EMOTIONAL', 'Rolls ball interactively with caregiver/examiner.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(127, 'SOCIO-EMOTIONAL', 'Hugs or cuddle toys.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(128, 'SOCIO-EMOTIONAL', 'Demonstrates respect for elders using terms like \"po\" and \"opo\".', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(129, 'SOCIO-EMOTIONAL', 'Shares toys with others.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(130, 'SOCIO-EMOTIONAL', 'Imitates adult activities (e.g. cooking, washing).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(131, 'SOCIO-EMOTIONAL', 'Identifies feelings of others.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(132, 'SOCIO-EMOTIONAL', 'Approximately uses cultural gestures of greetings without much prompting (e.g. bless, kiss, etc.)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(133, 'SOCIO-EMOTIONAL', 'Comforts playmates/siblings in distress.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(134, 'SOCIO-EMOTIONAL', 'Persists when faced with problems or obstacles to his wants.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(135, 'SOCIO-EMOTIONAL', 'Helps with family chores (e.g. wiping tables, watering plants, etc.)', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(136, 'SOCIO-EMOTIONAL', 'Curious about environment but knows when to stop asking.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(137, 'SOCIO-EMOTIONAL', 'Waits for turn.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(138, 'SOCIO-EMOTIONAL', 'Asks permission to play with toy being used by others.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(139, 'SOCIO-EMOTIONAL', 'Defends positions with determination.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(140, 'SOCIO-EMOTIONAL', 'Plays organized group games fairly (e.g. does not cheat in order to win).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(141, 'SOCIO-EMOTIONAL', 'Can talk about difficult feelings (e.g. anger, sadness, worry) he/she experiences.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(142, 'SOCIO-EMOTIONAL', 'Honors simple bargain with caregiver (e.g. can play outside only after cleaning, fixing his room).', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(143, 'SOCIO-EMOTIONAL', 'Watching responsibly over younger siblings/family member.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(144, 'SOCIO-EMOTIONAL', 'Cooperates with adults and peers in group situations to minimize quarrels and conflicts.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(145, NULL, NULL, 'Language, Literacy, and Communication', 'Distinguishes between elements of sounds e.g. pitch (low and high) volume (loud and soft)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(146, NULL, NULL, 'Language, Literacy, and Communication', 'Listens attentively to stories/poems/songs', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(147, NULL, NULL, 'Language, Literacy, and Communication', 'Recalls details from stories/poems/songs listened to', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(148, NULL, NULL, 'Language, Literacy, and Communication', 'Relates story event to personal experiences', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(149, NULL, NULL, 'Language, Literacy, and Communication', 'Sequence events from a story listened to', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(150, NULL, NULL, 'Language, Literacy, and Communication', 'Infer character traits and feelings', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(151, NULL, NULL, 'Language, Literacy, and Communication', 'Identify simple cause-and-effect and problem solution relationship of events in a story listened to or in a familiar situation', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(152, NULL, NULL, 'Language, Literacy, and Communication', 'Predict story outcomes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(153, NULL, NULL, 'Language, Literacy, and Communication', 'Discriminates objects/pictures as same and different, identifies missing parts of objects/pictures, and identifies which objects do not belong to the group', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(154, NULL, NULL, 'Language, Literacy, and Communication', 'Uses proper expressions in and polite greetings in appropriate situations', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(155, NULL, NULL, 'Language, Literacy, and Communication', 'Talks about details of objects, people, etc. using appropriate speaking vocabulary', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(156, NULL, NULL, 'Language, Literacy, and Communication', 'Participates actively in class activities (e.g. reciting poems, rhymes. etc.) and discussions by responding to questions accordingly.', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(157, NULL, NULL, 'Language, Literacy, and Communication', 'Ask simple questions (who, what, where, when, why)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(158, NULL, NULL, 'Language, Literacy, and Communication', 'Gives 1 to 2 step directions', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(159, NULL, NULL, 'Language, Literacy, and Communication', 'Recalls simple stories or narrates personal experiences', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(160, NULL, NULL, 'Language, Literacy, and Communication', 'Identifies sounds of letters (using the alphabet of the Mother Tongue)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(161, NULL, NULL, 'Language, Literacy, and Communication', 'The child can identify the following letter sounds: /a/ /b/ /c/ /d/ /e/ /f/ /g/ /h/ /i/ /j/ /k/ /l/ /m/ /n/ /n/ /ng/ /o/ /p/ /q/ /r/ /s/ /u/ /v/ /q/ /x/ /y/ /z/', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(162, NULL, NULL, 'Language, Literacy, and Communication', 'Names uppercase and lower case letters (using the alphabet of the Mother Tongue)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(163, NULL, NULL, 'Language, Literacy, and Communication', 'The child can name the following uppercase and lowercase letters:\r\nA B C D E F G H I J K L M N O P Q R S T U V W X Y Z\r\na b c d e f g h i j k l m n o p q r s t u v w x y z', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(164, NULL, NULL, 'Language, Literacy, and Communication', 'Matches uppercase and lowercase letters (using the alphabet of the Mother Tongue)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(165, NULL, NULL, 'Language, Literacy, and Communication', 'Identifies the beginning sound of a given word', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(166, NULL, NULL, 'Language, Literacy, and Communication', 'Distinguishes words that rhyme', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(167, NULL, NULL, 'Language, Literacy, and Communication', 'Counts syllables in a given word', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(168, NULL, NULL, 'Language, Literacy, and Communication', 'Identifies parts of the book (front and back, title, author, illustrator, etc.)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(169, NULL, NULL, 'Language, Literacy, and Communication', 'Shows interest in reading by browsing through books, predicting what the story is all about and demonstrating proper book handling behavior (e.g. flip pages sequentially, browses from left to right, etc.)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(170, NULL, NULL, 'Language, Literacy, and Communication', 'Interprets information from simple pictographs, maps, and other environmental print', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(171, NULL, NULL, 'Language, Literacy, and Communication', 'Writes one\'s given name', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(172, NULL, NULL, 'Language, Literacy, and Communication', 'Writes lowercase and uppercase letters', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(173, NULL, NULL, 'Language, Literacy, and Communication', 'Expresses simple ideas through symbols (e.g. drawings, invented spelling)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(174, NULL, NULL, 'Mathematics', 'Identifies colors', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(175, NULL, NULL, 'Mathematics', 'Identifies shapes', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(176, NULL, NULL, 'Mathematics', 'Sorts objects according to shape, size, and/or color', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(177, NULL, NULL, 'Mathematics', 'Compares and arranges objects according to a specific attribute (e.g. size, length, quantity, or duration)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(178, NULL, NULL, 'Mathematics', 'Recognizes and extends patterns', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(179, NULL, NULL, 'Mathematics', 'Tells the names of days in a week', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(180, NULL, NULL, 'Mathematics', 'Tells the months of the year', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(181, NULL, NULL, 'Mathematics', 'Distinguishes the time of the day and tells time by the hour (using analog clock)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(182, NULL, NULL, 'Mathematics', 'Rote counts up to 20', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(183, NULL, NULL, 'Mathematics', 'The child can count up to: 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 others:', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(184, NULL, NULL, 'Mathematics', 'The child can count up to: 1 2 3 4 5 6 7 8 9 10 others:', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(185, NULL, NULL, 'Mathematics', 'Recognize numerals up to 10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(186, NULL, NULL, 'Mathematics', 'The child can recognize numerals up to 10: 1 2 3 4 5 6 7 8 9 10 others:', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(187, NULL, NULL, 'Mathematics', 'Writes numerals up to 10', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(188, NULL, NULL, 'Mathematics', 'The child can write numerals up to: 1 2 3 4 5 6 7 8 9 10 others:', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(189, NULL, NULL, 'Mathematics', 'Sequences numbers', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(190, NULL, NULL, 'Mathematics', 'Identify the placement of objects (e.g. 1st, 2nd, 3rd, etc.) in a given set', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(191, NULL, NULL, 'Mathematics', 'Solves simple addition problems', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(192, NULL, NULL, 'Mathematics', 'Solves simple subtraction problems', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(193, NULL, NULL, 'Mathematics', 'Groups sets of concrete objects of equal quantities up to 10 (i.e., beginning multiplication)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(194, NULL, NULL, 'Mathematics', 'Separates sets of concrete objects of equal quantities up to 10 (i.e., beginning division)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(195, NULL, NULL, 'Mathematics', 'Measures length, capacity, and mass of objects using non-standard measuring tools', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(196, NULL, NULL, 'Mathematics', 'Recognizes coins and bills (up to PhP 20)', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(197, NULL, NULL, 'Mathematics', 'The child can recognize the following coins and bills: 5 centavos, 10 centavos, 25 centavos, 1 peso, 5 pesos, 10 pesos, 20 pesos', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(198, NULL, NULL, 'Understanding the Physical and Natural Environment', 'Identifies body parts and their functions', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(199, NULL, NULL, 'Understanding the Physical and Natural Environment', 'Records observations and data with pictures, numbers and/or symbols', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(200, NULL, NULL, 'Understanding the Physical and Natural Environment', 'Identifies parts of plants and animals', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(201, NULL, NULL, 'Understanding the Physical and Natural Environment', 'Classifies animals according to shared characteristics', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(202, NULL, NULL, 'Understanding the Physical and Natural Environment', 'Describes the basic needs and ways to care for plants, animals and the environment', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(203, NULL, NULL, 'Understanding the Physical and Natural Environment', 'Identifies different kinds of weather', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
