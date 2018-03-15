-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2018 at 02:26 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_streamfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE IF NOT EXISTS `tbl_account` (
  `accountId` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  PRIMARY KEY (`accountId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`accountId`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Luffy', 'Mugiwara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE IF NOT EXISTS `tbl_course` (
  `courseId` int(11) NOT NULL AUTO_INCREMENT,
  `course_description` varchar(100) NOT NULL,
  PRIMARY KEY (`courseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseId`, `course_description`) VALUES
(1, 'ABM'),
(2, 'IT'),
(3, 'HRM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrolledstudents`
--

CREATE TABLE IF NOT EXISTS `tbl_enrolledstudents` (
  `es_Id` int(11) NOT NULL AUTO_INCREMENT,
  `studId` int(11) NOT NULL,
  `sy_courseId` int(11) NOT NULL,
  `gradeId` int(11) NOT NULL,
  PRIMARY KEY (`es_Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_enrolledstudents`
--

INSERT INTO `tbl_enrolledstudents` (`es_Id`, `studId`, `sy_courseId`, `gradeId`) VALUES
(6, 1, 19, 1),
(7, 1, 14, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE IF NOT EXISTS `tbl_files` (
  `fileId` int(11) NOT NULL AUTO_INCREMENT,
  `sy_course_subjId` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `week` int(11) NOT NULL,
  `quarter` int(11) NOT NULL,
  `directory` varchar(500) NOT NULL,
  PRIMARY KEY (`fileId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gmembers`
--

CREATE TABLE IF NOT EXISTS `tbl_gmembers` (
  `gMem_Id` int(11) NOT NULL AUTO_INCREMENT,
  `g_Id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  PRIMARY KEY (`gMem_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gmessages`
--

CREATE TABLE IF NOT EXISTS `tbl_gmessages` (
  `g_msgs_Id` int(11) NOT NULL AUTO_INCREMENT,
  `g_Id` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `senderType` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`g_msgs_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE IF NOT EXISTS `tbl_grade` (
  `gradeId` int(11) NOT NULL AUTO_INCREMENT,
  `gradeDesc` varchar(20) NOT NULL,
  PRIMARY KEY (`gradeId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`gradeId`, `gradeDesc`) VALUES
(1, 'grade11'),
(2, 'grade12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE IF NOT EXISTS `tbl_group` (
  `g_Id` int(11) NOT NULL AUTO_INCREMENT,
  `teacherId` int(11) NOT NULL,
  `group_title` varchar(100) NOT NULL,
  PRIMARY KEY (`g_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE IF NOT EXISTS `tbl_notif` (
  `notifId` int(11) NOT NULL AUTO_INCREMENT,
  `sy_course_subjId` int(11) NOT NULL,
  PRIMARY KEY (`notifId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pmessage`
--

CREATE TABLE IF NOT EXISTS `tbl_pmessage` (
  `pMsg_Id` int(11) NOT NULL AUTO_INCREMENT,
  `teacherId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `senderType` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`pMsg_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE IF NOT EXISTS `tbl_quiz` (
  `quizId` int(11) NOT NULL AUTO_INCREMENT,
  `sy_course_subjId` int(11) NOT NULL,
  `quizDesc` varchar(100) NOT NULL,
  `timestart` datetime NOT NULL,
  `timeend` datetime NOT NULL,
  PRIMARY KEY (`quizId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_fill`
--

CREATE TABLE IF NOT EXISTS `tbl_quiz_fill` (
  `questionId` int(11) NOT NULL AUTO_INCREMENT,
  `quizId` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `correct_answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`questionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_multiple`
--

CREATE TABLE IF NOT EXISTS `tbl_quiz_multiple` (
  `questionId` int(11) NOT NULL AUTO_INCREMENT,
  `quizId` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `ans1` varchar(1000) NOT NULL,
  `ans2` varchar(1000) NOT NULL,
  `ans3` varchar(1000) NOT NULL,
  `ans4` varchar(1000) NOT NULL,
  `correct_answer` varchar(1000) NOT NULL,
  PRIMARY KEY (`questionId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE IF NOT EXISTS `tbl_score` (
  `scoreId` int(11) NOT NULL AUTO_INCREMENT,
  `quizId` int(11) NOT NULL,
  `es_Id` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  PRIMARY KEY (`scoreId`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE IF NOT EXISTS `tbl_students` (
  `studId` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(11) NOT NULL,
  PRIMARY KEY (`studId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`studId`, `firstname`, `middlename`, `lastname`, `address`, `birthdate`, `age`, `mobileno`, `emailaddress`, `gender`, `username`, `password`, `privilege`) VALUES
(1, 'ZoroXXXX', 'A', 'Roronoa', 'Pantay', '0000-00-00', 20, '09358029816', 'zoro@gmail.com', 'Male', 'student', 'cd73502828457d15655bbd7a63fb0bc8', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE IF NOT EXISTS `tbl_subjects` (
  `subjectId` int(11) NOT NULL AUTO_INCREMENT,
  `subjDesc` varchar(100) NOT NULL,
  `gradeId` int(11) NOT NULL,
  PRIMARY KEY (`subjectId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`subjectId`, `subjDesc`, `gradeId`) VALUES
(1, 'Computer Programming 1', 1),
(2, 'Computer Programming 2', 2),
(3, 'Baking 1', 1),
(4, 'Accounting 1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy`
--

CREATE TABLE IF NOT EXISTS `tbl_sy` (
  `syId` int(11) NOT NULL AUTO_INCREMENT,
  `SY_From` varchar(10) NOT NULL,
  `SY_To` varchar(10) NOT NULL,
  PRIMARY KEY (`syId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_sy`
--

INSERT INTO `tbl_sy` (`syId`, `SY_From`, `SY_To`) VALUES
(1, '2018', '2019'),
(2, '2019', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy_course`
--

CREATE TABLE IF NOT EXISTS `tbl_sy_course` (
  `sy_courseId` int(11) NOT NULL AUTO_INCREMENT,
  `syId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  PRIMARY KEY (`sy_courseId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tbl_sy_course`
--

INSERT INTO `tbl_sy_course` (`sy_courseId`, `syId`, `courseId`) VALUES
(10, 1, 3),
(11, 1, 1),
(14, 1, 2),
(18, 2, 1),
(19, 2, 2),
(20, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy_course_subj`
--

CREATE TABLE IF NOT EXISTS `tbl_sy_course_subj` (
  `sy_course_subjId` int(11) NOT NULL AUTO_INCREMENT,
  `sy_courseId` int(11) NOT NULL,
  `subjectId` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL,
  PRIMARY KEY (`sy_course_subjId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tbl_sy_course_subj`
--

INSERT INTO `tbl_sy_course_subj` (`sy_course_subjId`, `sy_courseId`, `subjectId`, `teacherId`) VALUES
(9, 13, 1, 2),
(10, 13, 2, 2),
(11, 11, 4, 2),
(12, 10, 3, 3),
(13, 14, 1, 2),
(14, 19, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE IF NOT EXISTS `tbl_teachers` (
  `teacherId` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `birthdate` date NOT NULL,
  `age` int(11) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` int(11) NOT NULL,
  PRIMARY KEY (`teacherId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`teacherId`, `firstname`, `middlename`, `lastname`, `address`, `birthdate`, `age`, `mobileno`, `emailaddress`, `gender`, `username`, `password`, `privilege`) VALUES
(2, 'Catherine', 'Manguiat', 'Olaguir', 'Pantay Bata', '0000-00-00', 25, '09358029816', 'cath.olaguir@gmail.com', 'Female', 'teacher', '8d788385431273d11e8b43bb78f3aa41', 1),
(3, 'Ivans', 'C', 'Jaron', 'Tanauan City', '0000-00-00', 20, '09358029816', 'ivans@gmail.com', 'Male', 'ivans', '49bae64cf5a049512142fc7c587c4861', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
