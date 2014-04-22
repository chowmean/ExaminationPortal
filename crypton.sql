-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2014 at 06:11 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `crypton`
--
CREATE DATABASE IF NOT EXISTS `crypton` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crypton`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(16) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('gaurav', 'g@ur@V');

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `username` varchar(16) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `answer` int(100) NOT NULL,
  `answer_number` int(100) NOT NULL,
  PRIMARY KEY (`username`,`exam_number`,`answer_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`username`, `exam_number`, `answer`, `answer_number`) VALUES
('ab', 1, 5, 1),
('ab', 1, 5, 2),
('ab', 1, 5, 3),
('ab', 1, 5, 4),
('ab', 1, 5, 5),
('ab', 1, 5, 6),
('ab', 1, 5, 7),
('ab', 1, 5, 8),
('ab', 1, 5, 9),
('ab', 1, 5, 10),
('ab', 1, 5, 11),
('ab', 1, 5, 12),
('ab', 1, 5, 13),
('ab', 1, 5, 14),
('ab', 1, 5, 15),
('ab', 1, 5, 16),
('ab', 1, 5, 17),
('ab', 1, 5, 18),
('ab', 1, 5, 19),
('ab', 1, 5, 20),
('ab', 4, 5, 1),
('ab', 4, 2, 2),
('ab', 4, 2, 3),
('ab', 4, 3, 4),
('ab', 4, 5, 5),
('ab', 4, 5, 6),
('ab', 4, 5, 7),
('ab', 4, 5, 8),
('ab', 4, 5, 9),
('ab', 4, 5, 10),
('abhi', 1, 5, 1),
('abhi', 1, 5, 2),
('abhi', 1, 5, 3),
('abhi', 1, 5, 4),
('abhi', 1, 5, 5),
('abhi', 1, 5, 6),
('abhi', 1, 5, 7),
('abhi', 1, 5, 8),
('abhi', 1, 5, 9),
('abhi', 1, 5, 10),
('abhi', 1, 5, 11),
('abhi', 1, 5, 12),
('abhi', 1, 5, 13),
('abhi', 1, 5, 14),
('abhi', 1, 5, 15),
('abhi', 1, 5, 16),
('abhi', 1, 5, 17),
('abhi', 1, 5, 18),
('abhi', 1, 5, 19),
('abhi', 1, 5, 20),
('abhi', 4, 5, 1),
('abhi', 4, 5, 2),
('abhi', 4, 5, 3),
('abhi', 4, 5, 4),
('abhi', 4, 5, 5),
('abhi', 4, 5, 6),
('abhi', 4, 5, 7),
('abhi', 4, 5, 8),
('abhi', 4, 5, 9),
('abhi', 4, 5, 10),
('chow', 1, 5, 1),
('chow', 1, 5, 2),
('chow', 1, 5, 3),
('chow', 1, 5, 4),
('chow', 1, 5, 5),
('chow', 1, 5, 6),
('chow', 1, 5, 7),
('chow', 1, 5, 8),
('chow', 1, 5, 9),
('chow', 1, 5, 10),
('chow', 1, 5, 11),
('chow', 1, 5, 12),
('chow', 1, 5, 13),
('chow', 1, 5, 14),
('chow', 1, 5, 15),
('chow', 1, 5, 16),
('chow', 1, 5, 17),
('chow', 1, 5, 18),
('chow', 1, 5, 19),
('chow', 1, 5, 20),
('chow', 4, 1, 1),
('chow', 4, 5, 2),
('chow', 4, 5, 3),
('chow', 4, 5, 4),
('chow', 4, 5, 5),
('chow', 4, 5, 6),
('chow', 4, 5, 7),
('chow', 4, 5, 8),
('chow', 4, 5, 9),
('chow', 4, 5, 10),
('gagan', 4, 5, 1),
('gagan', 4, 5, 2),
('gagan', 4, 2, 3),
('gagan', 4, 4, 4),
('gagan', 4, 5, 5),
('gagan', 4, 5, 6),
('gagan', 4, 5, 7),
('gagan', 4, 5, 8),
('gagan', 4, 5, 9),
('gagan', 4, 5, 10),
('gara', 4, 5, 1),
('gara', 4, 5, 2),
('gara', 4, 5, 3),
('gara', 4, 5, 4),
('gara', 4, 5, 5),
('gara', 4, 5, 6),
('gara', 4, 5, 7),
('gara', 4, 5, 8),
('gara', 4, 5, 9),
('gara', 4, 5, 10),
('gau', 1, 5, 1),
('gau', 1, 5, 2),
('gau', 1, 5, 3),
('gau', 1, 5, 4),
('gau', 1, 5, 5),
('gau', 1, 5, 6),
('gau', 1, 5, 7),
('gau', 1, 5, 8),
('gau', 1, 5, 9),
('gau', 1, 5, 10),
('gau', 1, 5, 11),
('gau', 1, 5, 12),
('gau', 1, 5, 13),
('gau', 1, 5, 14),
('gau', 1, 5, 15),
('gau', 1, 5, 16),
('gau', 1, 5, 17),
('gau', 1, 5, 18),
('gau', 1, 5, 19),
('gau', 1, 5, 20),
('gau', 4, 5, 1),
('gau', 4, 5, 2),
('gau', 4, 5, 3),
('gau', 4, 5, 4),
('gau', 4, 5, 5),
('gau', 4, 5, 6),
('gau', 4, 5, 7),
('gau', 4, 5, 8),
('gau', 4, 5, 9),
('gau', 4, 5, 10),
('gaurav', 4, 5, 1),
('gaurav', 4, 5, 2),
('gaurav', 4, 5, 3),
('gaurav', 4, 5, 4),
('gaurav', 4, 5, 5),
('gaurav', 4, 5, 6),
('gaurav', 4, 5, 7),
('gaurav', 4, 5, 8),
('gaurav', 4, 5, 9),
('gaurav', 4, 5, 10),
('has', 4, 1, 1),
('jai', 1, 5, 1),
('jai', 1, 5, 2),
('jai', 1, 5, 3),
('jai', 1, 5, 4),
('jai', 1, 5, 5),
('jai', 1, 5, 6),
('jai', 1, 5, 7),
('jai', 1, 5, 8),
('jai', 1, 5, 9),
('jai', 1, 5, 10),
('jai', 1, 5, 11),
('jai', 1, 5, 12),
('jai', 1, 5, 13),
('jai', 1, 5, 14),
('jai', 1, 5, 15),
('jai', 1, 5, 16),
('jai', 1, 5, 17),
('jai', 1, 5, 18),
('jai', 1, 5, 19),
('jai', 1, 5, 20),
('jai', 4, 2, 1),
('jai', 4, 1, 2),
('jai', 4, 5, 3),
('jai', 4, 1, 4),
('jai', 4, 3, 5),
('jai', 4, 2, 6),
('jai', 4, 3, 7),
('jai', 4, 1, 8),
('jai', 4, 1, 9),
('jai', 4, 2, 10),
('rahul', 4, 5, 1),
('rahul', 4, 5, 2),
('rahul', 4, 5, 3),
('rahul', 4, 5, 4),
('rahul', 4, 5, 5),
('rahul', 4, 5, 6),
('rahul', 4, 5, 7),
('rahul', 4, 5, 8),
('rahul', 4, 5, 9),
('rahul', 4, 5, 10),
('vishal', 4, 5, 1),
('vishal', 4, 5, 2),
('vishal', 4, 5, 3),
('vishal', 4, 5, 4),
('vishal', 4, 5, 5),
('vishal', 4, 5, 6),
('vishal', 4, 5, 7),
('vishal', 4, 5, 8),
('vishal', 4, 5, 9),
('vishal', 4, 5, 10),
('xyz', 1, 5, 1),
('xyz', 1, 5, 2),
('xyz', 1, 5, 3),
('xyz', 1, 5, 4),
('xyz', 1, 5, 5),
('xyz', 1, 5, 6),
('xyz', 1, 5, 7),
('xyz', 1, 5, 8),
('xyz', 1, 5, 9),
('xyz', 1, 5, 10),
('xyz', 1, 5, 11),
('xyz', 1, 5, 12),
('xyz', 1, 5, 13),
('xyz', 1, 5, 14),
('xyz', 1, 5, 15),
('xyz', 1, 5, 16),
('xyz', 1, 5, 17),
('xyz', 1, 5, 18),
('xyz', 1, 5, 19),
('xyz', 1, 5, 20),
('xyz', 4, 2, 1),
('xyz', 4, 5, 2),
('xyz', 4, 5, 3),
('xyz', 4, 5, 4),
('xyz', 4, 5, 5),
('xyz', 4, 5, 6),
('xyz', 4, 5, 7),
('xyz', 4, 5, 8),
('xyz', 4, 5, 9),
('xyz', 4, 2, 10);

-- --------------------------------------------------------

--
-- Table structure for table `correct`
--

CREATE TABLE IF NOT EXISTS `correct` (
  `exam_number` int(100) NOT NULL,
  `answer_number` int(100) NOT NULL,
  `answer` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `correct`
--

INSERT INTO `correct` (`exam_number`, `answer_number`, `answer`) VALUES
(1, 1, 2),
(1, 2, 3),
(1, 3, 4),
(4, 1, 3),
(4, 2, 1),
(4, 3, 1),
(4, 4, 4),
(4, 5, 2),
(4, 6, 2),
(4, 7, 1),
(4, 8, 1),
(4, 9, 1),
(4, 10, 2);

-- --------------------------------------------------------

--
-- Table structure for table `crypt_answers`
--

CREATE TABLE IF NOT EXISTS `crypt_answers` (
  `username` varchar(16) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `answer` varchar(1000) NOT NULL,
  `answer_number` int(100) NOT NULL,
  PRIMARY KEY (`username`,`exam_number`,`answer_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crypt_answers`
--

INSERT INTO `crypt_answers` (`username`, `exam_number`, `answer`, `answer_number`) VALUES
('ab', 4, 'wrong_answer', 1),
('ab', 4, 'wrong_answer', 2),
('ab', 4, 'wrong_answer', 3),
('ab', 4, 'wrong_answer', 4),
('chow', 4, 'wrong_answer', 1),
('chow', 4, 'wrong_answer', 2),
('chow', 4, 'wrong_answer', 3),
('chow', 4, 'wrong_answer', 4),
('jai', 4, 'whitespace', 1),
('jai', 4, 'wrong_answer', 2),
('jai', 4, 'wrong_answer', 3),
('jai', 4, 'wrong_answer', 4);

-- --------------------------------------------------------

--
-- Table structure for table `crypt_correct`
--

CREATE TABLE IF NOT EXISTS `crypt_correct` (
  `exam_number` int(100) NOT NULL,
  `answer_number` int(199) NOT NULL,
  `answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crypt_correct`
--

INSERT INTO `crypt_correct` (`exam_number`, `answer_number`, `answer`) VALUES
(1, 1, '&lt;&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `crypt_exam`
--

CREATE TABLE IF NOT EXISTS `crypt_exam` (
  `admin` varchar(16) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `max_question` int(100) NOT NULL,
  `exam_name` varchar(50) NOT NULL,
  `visible` int(2) NOT NULL,
  PRIMARY KEY (`exam_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crypt_exam`
--

INSERT INTO `crypt_exam` (`admin`, `exam_number`, `max_question`, `exam_name`, `visible`) VALUES
('gaurav', 1, 10, 'crypt1', 1),
('gaurav', 2, 10, 'crypt2', 0),
('abab', 3, 5, 'test3', 1),
('gaurav', 4, 4, 'uyg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `crypt_question`
--

CREATE TABLE IF NOT EXISTS `crypt_question` (
  `exam_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crypt_question`
--

INSERT INTO `crypt_question` (`exam_number`, `question_number`, `question`) VALUES
(1, 1, 'ajsdfkla'),
(1, 2, 'jzxhjkashdjkf');

-- --------------------------------------------------------

--
-- Table structure for table `crypt_score`
--

CREATE TABLE IF NOT EXISTS `crypt_score` (
  `username` varchar(20) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `score` int(100) NOT NULL,
  PRIMARY KEY (`username`,`exam_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crypt_score`
--

INSERT INTO `crypt_score` (`username`, `exam_number`, `score`) VALUES
('ab', 1, 0),
('ab', 4, 0),
('abhi', 1, 0),
('abhi', 4, 0),
('chow', 1, 0),
('chow', 4, 0),
('gau', 1, 0),
('gau', 4, 0),
('jai', 1, 0),
('jai', 4, 0),
('xyz', 1, 0),
('xyz', 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE IF NOT EXISTS `exams` (
  `admin` varchar(100) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `exam_name` varchar(100) NOT NULL,
  `max_question` int(100) NOT NULL,
  `visible` int(10) NOT NULL,
  UNIQUE KEY `exam_number` (`exam_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`admin`, `exam_number`, `exam_name`, `max_question`, `visible`) VALUES
('gaurav', 1, 'test1', 20, 0),
('abhi', 2, 'test2', 20, 0),
('abhi', 3, 'test3', 10, 0),
('gaurav', 4, 'for_bacha', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `final_score`
--

CREATE TABLE IF NOT EXISTS `final_score` (
  `username` varchar(20) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `score` int(100) NOT NULL,
  PRIMARY KEY (`username`,`exam_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `final_score`
--

INSERT INTO `final_score` (`username`, `exam_number`, `score`) VALUES
('ab', 1, 0),
('ab', 4, -3),
('abhi', 1, 0),
('abhi', 4, 0),
('chow', 1, 0),
('chow', 4, -1),
('gau', 1, 0),
('gau', 4, 0),
('jai', 1, 0),
('jai', 4, 6),
('xyz', 1, 0),
('xyz', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `exam_number` int(100) NOT NULL,
  `question_number` int(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  UNIQUE KEY `option4` (`option4`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`exam_number`, `question_number`, `question`, `option1`, `option2`, `option3`, `option4`) VALUES
(3, 7, '(1/10)18 - (1/10)20 = ?', '99/1020', '99/10', ' 0.9', ' none of these'),
(3, 6, 'If 2x-y=4 then 6x-3y=?', '15', '12', '18', '10'),
(3, 1, 'Here is a sequence of numbers: 1 11 21 1211 111221 It seems to be a strange sequence, but yet there is a system behind it... What is the next term in this sequence? ', '111', '312211', '2211111112', '11111121211'),
(3, 2, 'A two degite number is given.after swaping the degite position we subtracting this new number with original number result is 36 waht is diff of degite', '4', '36', '9', '12'),
(4, 1, '<img src=''img.jpg''></img>', '10', '12', '16', '18'),
(4, 2, 'solve for x? 2x+12=8', '-2', '12', '2', '4'),
(3, 3, 'int i=3;\r\nprintf(i++,++i,++i)\r\n\r\nwhat is the output ?', 'depends on compiler', '4 5 5', '3 5 6', '4 5 6'),
(4, 9, 'IF YOU ARE MOVING TOWARDS A TRAIN AT A SPEED OF 10KMPH AND TRAN IS COMING AT  A SPEED OF 20KMPH AND DISTANCE IS 30KM.TIME AFTER YOU REACH THE TRAIN', '1HR', '2HR ', '3HR', '4HR'),
(3, 8, 'What is the missing number in this series?\r\n8 2 14 6 11 ? 14 6 18 12 ', '9', '10', '7', '5'),
(4, 10, 'WHAT IS THR GRAVITATIONAL FORCE OF EARTH', '10', '9.8 ', '8', '6'),
(4, 3, 'there are 5 boys and 6 girls in a family.. how many brother and sister does a girl have', '5,5', '5,6', '3,4', '6,7'),
(3, 4, 'char a[]="abhishek";<br>\r\nchar b[];<br>\r\nchar b=a;<br>\r\nprintf b;<br>\r\noutput ?', 'compilation error', 'abhishek', 'null', 'a'),
(4, 5, 'PRESIDENT OF INDIA', 'PRATIBHA PATIL', 'PRANAV MUKHERJI', 'RANI MUKHERJI', 'ABDUL KALAM'),
(1, 2, 'adsfafds?', 'jkhjk', 'jkhjk', 'hjk', 'h'),
(4, 4, 'WHAT IS THE NAME OF FINANCE  MINISTER OF UNITED STATES', 'BILL CLINTON', 'OBAAMA', 'GEORGE W BUSH', 'HILARY CLINTON'),
(4, 8, 'WHAT IS THE FULL FORM OF IP AND URL', 'INTERNET PROTOCOL , UNIFORM RESOURCE LOCATOR', 'INTERNET PRIORITY, UNIFORM RESTART LOCATOR', 'INFORMATIN PROTOCOL, UNIFORM RESOURCE LOCATOR', 'INTERNET PRIORITY, UNIFORM REOURCE LOCATOR'),
(1, 1, 'how r u?', 'asd', 'sd', 'kjh', 'jh'),
(3, 9, '>>a="rahul"<br>\r\n>>a[-1]<br>\r\noutput?(python)', 'l', 'u', 'h', 'l'),
(4, 6, 'CAPTAL OF ITALY', 'ROME', 'VENICE', 'ENDLAND', 'LONDON'),
(3, 5, 'Find the smallest number in a GP whose sum is 38 and product 1728', '12', '20', '8', 'non of these'),
(3, 10, 'ppp uses which protocol to identify network layer protocol?', 'ncp', 'tcp', 'ip', 'smtp'),
(4, 7, 'WHICH IS THE LARGEST RIVER', 'nile', 'GANAGA', 'AMAZON', 'TI-SUNGG');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE IF NOT EXISTS `score` (
  `username` varchar(16) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `score` int(100) NOT NULL,
  PRIMARY KEY (`username`,`exam_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`username`, `exam_number`, `score`) VALUES
('ab', 1, 0),
('ab', 4, -3),
('abhi', 1, 0),
('abhi', 4, 0),
('chow', 1, 0),
('chow', 4, -1),
('gau', 1, 0),
('gau', 4, 0),
('jai', 1, 0),
('jai', 4, 6),
('xyz', 1, 0),
('xyz', 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `submit`
--

CREATE TABLE IF NOT EXISTS `submit` (
  `username` varchar(16) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `submit_value` int(100) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`username`,`exam_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit`
--

INSERT INTO `submit` (`username`, `exam_number`, `submit_value`, `time`) VALUES
('ab', 4, 1, '0000-00-00 00:00:00'),
('abhi', 4, 1, '0000-00-00 00:00:00'),
('chow', 4, 1, '0000-00-00 00:00:00'),
('gagan', 4, 1, '0000-00-00 00:00:00'),
('gara', 4, 1, '0000-00-00 00:00:00'),
('gaurav', 4, 1, '0000-00-00 00:00:00'),
('jai', 4, 1, '2013-11-10 20:57:13'),
('rahul', 4, 1, '0000-00-00 00:00:00'),
('vishal', 4, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `submit_crypt`
--

CREATE TABLE IF NOT EXISTS `submit_crypt` (
  `username` varchar(16) NOT NULL,
  `exam_number` int(100) NOT NULL,
  `submit_value` int(100) NOT NULL,
  `time` datetime NOT NULL,
  PRIMARY KEY (`username`,`exam_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submit_crypt`
--

INSERT INTO `submit_crypt` (`username`, `exam_number`, `submit_value`, `time`) VALUES
('ab', 4, 1, '0000-00-00 00:00:00'),
('abhi', 4, 1, '0000-00-00 00:00:00'),
('chow', 4, 1, '0000-00-00 00:00:00'),
('gara', 4, 1, '0000-00-00 00:00:00'),
('gaurav', 3, 1, '0000-00-00 00:00:00'),
('gaurav', 4, 1, '0000-00-00 00:00:00'),
('jai', 4, 1, '2013-11-10 20:59:35'),
('rahul', 3, 1, '0000-00-00 00:00:00'),
('rahul', 4, 1, '0000-00-00 00:00:00'),
('vishal', 4, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `team_reg`
--

CREATE TABLE IF NOT EXISTS `team_reg` (
  `team` varchar(100) NOT NULL,
  `player1` varchar(100) NOT NULL,
  `player2` varchar(100) NOT NULL,
  `player3` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`team`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team_reg`
--

INSERT INTO `team_reg` (`team`, `player1`, `player2`, `player3`, `password`) VALUES
('1', 'y', '', '', 'c81e728d9d4c2f636f067f89cc14862c'),
('asd', '', 'x', '', '3b6f421e7550395e28e091c5565ac80a'),
('asj', 'd', '', '', '8277e0910d750195b448797616e091ad'),
('has', 'a', 'b', 'c', '3309a7a7941818e131b4dfb9a6349914');

-- --------------------------------------------------------

--
-- Table structure for table `update`
--

CREATE TABLE IF NOT EXISTS `update` (
  `value` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `update`
--

INSERT INTO `update` (`value`) VALUES
('asdhasohdoahdsdash'),
('oasodkjkaosjdoj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(16) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('abhi', 'd76f3d05cc9ac98f1f9160274a39fe33'),
('gara', '04b7aaeab58d4c6507e86a90250694af'),
('gaurav', '29be54a52396750258d886abc5417fda'),
('rahul', '439ed537979d8e831561964dbbbd7413'),
('vishal', '8b64d2451b7a8f3fd17390f88ea35917');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
