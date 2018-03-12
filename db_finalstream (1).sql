-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2018 at 12:49 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_finalstream`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblaccount`
--

CREATE TABLE `tblaccount` (
  `acctid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privileges` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblaccount`
--

INSERT INTO `tblaccount` (`acctid`, `username`, `password`, `privileges`, `FirstName`, `lastName`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '', 'Emer', 'Villafria');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `course` int(11) NOT NULL,
  `coursedesc` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `courseid` int(11) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseid`, `course`) VALUES
(1, 'IT'),
(2, 'ABM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_subjects`
--

CREATE TABLE `tbl_course_subjects` (
  `course_subid` int(11) NOT NULL,
  `subjectid` int(10) NOT NULL,
  `courseid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_subjects`
--

INSERT INTO `tbl_course_subjects` (`course_subid`, `subjectid`, `courseid`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `id` int(11) NOT NULL,
  `teacherinfoid` int(11) NOT NULL,
  `quarter` int(11) NOT NULL,
  `week` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `directory` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`id`, `teacherinfoid`, `quarter`, `week`, `description`, `directory`) VALUES
(5, 1, 1, 3, 'wow 2', '../files/1/Untitled.png'),
(6, 1, 1, 1, 'asgasg', '../files/1/fluff-fold-menu-board-40x40-final2-copy.jpg'),
(11, 3, 1, 2, 'zsf', '../files/user-photo.png'),
(12, 3, 2, 2, 'lk', '../files/01_LCD_Slide_Handout_1-1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gchat`
--

CREATE TABLE `tbl_gchat` (
  `g_id` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gchat`
--

INSERT INTO `tbl_gchat` (`g_id`, `courseId`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gmessage`
--

CREATE TABLE `tbl_gmessage` (
  `id` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `message` varchar(100) NOT NULL,
  `senderId` int(11) NOT NULL,
  `sendertype` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gmessage`
--

INSERT INTO `tbl_gmessage` (`id`, `courseid`, `message`, `senderId`, `sendertype`, `date`, `time`) VALUES
(7, 1, 'hello guys', 3, '0', '0000-00-00', '00:00:00'),
(8, 1, 'hello din', 2, '1', '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `gradeid` int(11) NOT NULL,
  `gradeDes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`gradeid`, `gradeDes`) VALUES
(1, 'Grade 11'),
(2, 'Grade 12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pmessage`
--

CREATE TABLE `tbl_pmessage` (
  `id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL,
  `message` varchar(255) NOT NULL,
  `sendertype` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pmessage`
--

INSERT INTO `tbl_pmessage` (`id`, `studentId`, `teacherId`, `message`, `sendertype`, `date`, `time`) VALUES
(20, 3, 2, 'test', 1, '0000-00-00', '00:00:00'),
(21, 3, 2, 'hello', 0, '0000-00-00', '00:00:00'),
(22, 3, 2, 'hi cath', 1, '0000-00-00', '00:00:00'),
(23, 3, 2, 'hi sir marrion', 0, '0000-00-00', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_fill`
--

CREATE TABLE `tbl_question_fill` (
  `id` int(11) NOT NULL,
  `quizId` int(11) NOT NULL,
  `questionDesc` varchar(100) NOT NULL,
  `answ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_question_fill`
--

INSERT INTO `tbl_question_fill` (`id`, `quizId`, `questionDesc`, `answ`) VALUES
(1, 1, 'aerhrdh', 'aegas'),
(5, 2, 'aaa', 'aaaa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_question_multiple`
--

CREATE TABLE `tbl_question_multiple` (
  `id` int(11) NOT NULL,
  `quizId` int(10) NOT NULL,
  `questionDesc` varchar(100) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `answ` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_question_multiple`
--

INSERT INTO `tbl_question_multiple` (`id`, `quizId`, `questionDesc`, `a`, `b`, `c`, `d`, `answ`) VALUES
(1, 1, 'ivans?', 'with "S"?', 'eh?', 'How come?', 'None of the above', ''),
(2, 1, 'awgfawg', 'awg', 'awg', 'awga', 'wgawg', 'awg'),
(4, 2, 'asadad', 'asa', 'asas', 'asa', 'asa', 'asa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `quizId` int(11) NOT NULL,
  `quizDesc` varchar(100) NOT NULL,
  `teacherinfo_id` int(11) NOT NULL,
  `timeStart` datetime NOT NULL,
  `timeEnd` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz`
--

INSERT INTO `tbl_quiz` (`quizId`, `quizDesc`, `teacherinfo_id`, `timeStart`, `timeEnd`) VALUES
(1, 'qfqwfqwf', 1, '2018-03-11 01:01:00', '2018-03-11 01:01:00'),
(2, 'test quiz', 3, '2018-03-11 08:00:00', '2018-03-11 08:15:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE `tbl_score` (
  `quizId` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studentinfo`
--

CREATE TABLE `tbl_studentinfo` (
  `studinfoid` int(11) NOT NULL,
  `studid` int(11) NOT NULL,
  `courseId` int(10) NOT NULL,
  `gradeId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studentinfo`
--

INSERT INTO `tbl_studentinfo` (`studinfoid`, `studid`, `courseId`, `gradeId`) VALUES
(1, 1, 1, 1),
(2, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `studentId` int(11) NOT NULL,
  `studentNo` int(11) NOT NULL,
  `frstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobileno` int(15) NOT NULL,
  `dateofBirth` date NOT NULL,
  `age` int(2) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `emailadress` varchar(100) NOT NULL,
  `yearlevel` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(50) NOT NULL,
  `privilege` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`studentId`, `studentNo`, `frstName`, `middleName`, `lastName`, `address`, `mobileno`, `dateofBirth`, `age`, `gender`, `fathername`, `mothername`, `emailadress`, `yearlevel`, `course`, `username`, `password`, `privilege`, `status`) VALUES
(1, 123, 'john ivan', 'B', 'jaron', 'qwe', 231, '0000-00-00', 0, '', '', '', '', 0, '', 'ivan', '2c42e5cf1cdbafea04ed267018ef1511', '', 1),
(2, 123, 'john ivan', 'B', 'jaron', 'qwe', 231, '0000-00-00', 0, '', '', '', '', 0, '', 'ivan', '2c42e5cf1cdbafea04ed267018ef1511', '', 1),
(3, 0, 'cath', 'cosa', 'austria', 'tanauan', 2147483647, '0000-00-00', 18, 'Female', '', '', 'cath.acosta@gmail.com', 0, '', 'catherine', '5eb59a1c45ec8d0eafe705c45aa15ce1', '2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subject`
--

CREATE TABLE `tbl_subject` (
  `subjectid` int(11) NOT NULL,
  `subjectDesc` varchar(100) NOT NULL,
  `gradeid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subject`
--

INSERT INTO `tbl_subject` (`subjectid`, `subjectDesc`, `gradeid`) VALUES
(1, 'Algebra', 1),
(2, 'Geometry', 1),
(3, 'ABM subj 11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacherinfo`
--

CREATE TABLE `tbl_teacherinfo` (
  `teacherinfo_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `subjectid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teacherinfo`
--

INSERT INTO `tbl_teacherinfo` (`teacherinfo_id`, `teacher_id`, `courseid`, `subjectid`) VALUES
(3, 2, 1, 2),
(4, 3, 1, 1),
(5, 4, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `teacherid` int(11) NOT NULL,
  `teacherNo` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `middleName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `field` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `dateofBirth` date NOT NULL,
  `age` int(11) NOT NULL,
  `gender` int(2) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(100) NOT NULL,
  `privilege` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`teacherid`, `teacherNo`, `firstName`, `middleName`, `lastName`, `field`, `address`, `mobileno`, `dateofBirth`, `age`, `gender`, `emailaddress`, `username`, `password`, `privilege`, `status`) VALUES
(2, 0, 'marrion', 'm', 'esquivias', '', 'tanauan', 2147483647, '0000-00-00', 19, 0, 'marrion@gmail.com', 'marrion', '391a85db5efaed01a11b3fdcddb90afa', '1', 0),
(3, 0, 'lemuel', 'lemuel', 'lemuel', '', 'a', 2147483647, '0000-00-00', 25, 0, 'lem@yahoo.com', 'lem', '45e9ed689390d96ec2334675bc774f1a', '1', 0),
(4, 0, 'X', 'x', 'x', '', 'x', 2147483647, '0000-00-00', 30, 0, 'cath.acosta@gmail.com', 'x', '9dd4e461268c8034f5c8564e155c67a6', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblaccount`
--
ALTER TABLE `tblaccount`
  ADD PRIMARY KEY (`acctid`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`course`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `tbl_course_subjects`
--
ALTER TABLE `tbl_course_subjects`
  ADD PRIMARY KEY (`course_subid`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gchat`
--
ALTER TABLE `tbl_gchat`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tbl_gmessage`
--
ALTER TABLE `tbl_gmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`gradeid`);

--
-- Indexes for table `tbl_pmessage`
--
ALTER TABLE `tbl_pmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question_fill`
--
ALTER TABLE `tbl_question_fill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_question_multiple`
--
ALTER TABLE `tbl_question_multiple`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`quizId`);

--
-- Indexes for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD PRIMARY KEY (`quizId`);

--
-- Indexes for table `tbl_studentinfo`
--
ALTER TABLE `tbl_studentinfo`
  ADD PRIMARY KEY (`studinfoid`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`studentId`);

--
-- Indexes for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  ADD PRIMARY KEY (`subjectid`);

--
-- Indexes for table `tbl_teacherinfo`
--
ALTER TABLE `tbl_teacherinfo`
  ADD PRIMARY KEY (`teacherinfo_id`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`teacherid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblaccount`
--
ALTER TABLE `tblaccount`
  MODIFY `acctid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `course` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_course_subjects`
--
ALTER TABLE `tbl_course_subjects`
  MODIFY `course_subid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tbl_gchat`
--
ALTER TABLE `tbl_gchat`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gmessage`
--
ALTER TABLE `tbl_gmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `gradeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_pmessage`
--
ALTER TABLE `tbl_pmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tbl_question_fill`
--
ALTER TABLE `tbl_question_fill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_question_multiple`
--
ALTER TABLE `tbl_question_multiple`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `quizId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_studentinfo`
--
ALTER TABLE `tbl_studentinfo`
  MODIFY `studinfoid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `studentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_subject`
--
ALTER TABLE `tbl_subject`
  MODIFY `subjectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_teacherinfo`
--
ALTER TABLE `tbl_teacherinfo`
  MODIFY `teacherinfo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `teacherid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
