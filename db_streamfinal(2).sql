-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2018 at 04:58 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_streamfinal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_account`
--

CREATE TABLE `tbl_account` (
  `accountId` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_account`
--

INSERT INTO `tbl_account` (`accountId`, `username`, `password`, `firstname`, `lastname`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Luffy', 'Mugiwara');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `courseId` int(11) NOT NULL,
  `course_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseId`, `course_description`) VALUES
(1, 'IT'),
(2, 'ABM');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_enrolledstudents`
--

CREATE TABLE `tbl_enrolledstudents` (
  `es_Id` int(11) NOT NULL,
  `studId` int(11) NOT NULL,
  `sy_courseId` int(11) NOT NULL,
  `gradeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_enrolledstudents`
--

INSERT INTO `tbl_enrolledstudents` (`es_Id`, `studId`, `sy_courseId`, `gradeId`) VALUES
(1, 1, 1, 1),
(2, 2, 1, 1),
(3, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_files`
--

CREATE TABLE `tbl_files` (
  `fileId` int(11) NOT NULL,
  `sy_course_subjId` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `week` int(11) NOT NULL,
  `quarter` int(11) NOT NULL,
  `directory` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_files`
--

INSERT INTO `tbl_files` (`fileId`, `sy_course_subjId`, `description`, `week`, `quarter`, `directory`) VALUES
(2, 1, 'awrawr', 2, 3, '../files/1/map1.png'),
(3, 1, 'awrawr', 2, 3, '../files/1/map1.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gmembers`
--

CREATE TABLE `tbl_gmembers` (
  `gMem_Id` int(11) NOT NULL,
  `g_Id` int(11) NOT NULL,
  `studentId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gmembers`
--

INSERT INTO `tbl_gmembers` (`gMem_Id`, `g_Id`, `studentId`) VALUES
(1, 1, 1),
(2, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gmessages`
--

CREATE TABLE `tbl_gmessages` (
  `g_msgs_Id` int(11) NOT NULL,
  `g_Id` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `senderType` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gmessages`
--

INSERT INTO `tbl_gmessages` (`g_msgs_Id`, `g_Id`, `senderId`, `message`, `senderType`, `date`, `time`) VALUES
(7, 1, 2, 'ohu\r\n', 0, '2018-03-15', '12:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gposts`
--

CREATE TABLE `tbl_gposts` (
  `gPost_Id` int(11) NOT NULL,
  `g_Id` int(11) NOT NULL,
  `senderId` int(11) NOT NULL,
  `senderType` int(11) NOT NULL,
  `post` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gposts`
--

INSERT INTO `tbl_gposts` (`gPost_Id`, `g_Id`, `senderId`, `senderType`, `post`, `date`, `time`) VALUES
(1, 1, 1, 1, 'wow nagpost!', '2018-03-13', '14:07:31'),
(2, 1, 1, 1, 'ye ye ye ye', '2018-03-13', '15:10:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_grade`
--

CREATE TABLE `tbl_grade` (
  `gradeId` int(11) NOT NULL,
  `gradeDesc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_grade`
--

INSERT INTO `tbl_grade` (`gradeId`, `gradeDesc`) VALUES
(1, 'Grade 11'),
(2, 'Grade 12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `g_Id` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL,
  `group_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`g_Id`, `teacherId`, `group_title`) VALUES
(1, 1, 'new Group');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_notif`
--

CREATE TABLE `tbl_notif` (
  `notifId` int(11) NOT NULL,
  `sy_course_subjId` int(11) NOT NULL,
  `notif` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_notif`
--

INSERT INTO `tbl_notif` (`notifId`, `sy_course_subjId`, `notif`, `date`, `time`) VALUES
(1, 1, 'Video streaming started', '2018-03-16', '16:21:07'),
(2, 2, 'Video streaming started', '2018-03-16', '16:41:54'),
(3, 1, 'Video streaming started', '2018-03-16', '16:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pmessage`
--

CREATE TABLE `tbl_pmessage` (
  `pMsg_Id` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL,
  `studentId` int(11) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `senderType` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pmessage`
--

INSERT INTO `tbl_pmessage` (`pMsg_Id`, `teacherId`, `studentId`, `message`, `senderType`, `date`, `time`) VALUES
(19, 1, 2, 'w0w', 0, '2018-03-15', '11:56:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz`
--

CREATE TABLE `tbl_quiz` (
  `quizId` int(11) NOT NULL,
  `sy_course_subjId` int(11) NOT NULL,
  `quizDesc` varchar(100) NOT NULL,
  `timestart` datetime NOT NULL,
  `timeend` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_fill`
--

CREATE TABLE `tbl_quiz_fill` (
  `questionId` int(11) NOT NULL,
  `quizId` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `correct_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz_fill`
--

INSERT INTO `tbl_quiz_fill` (`questionId`, `quizId`, `question`, `correct_answer`) VALUES
(2, 2, 'qqqq1111', 'hjgawkrjhar');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quiz_multiple`
--

CREATE TABLE `tbl_quiz_multiple` (
  `questionId` int(11) NOT NULL,
  `quizId` int(11) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `ans1` varchar(1000) NOT NULL,
  `ans2` varchar(1000) NOT NULL,
  `ans3` varchar(1000) NOT NULL,
  `ans4` varchar(1000) NOT NULL,
  `correct_answer` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quiz_multiple`
--

INSERT INTO `tbl_quiz_multiple` (`questionId`, `quizId`, `question`, `ans1`, `ans2`, `ans3`, `ans4`, `correct_answer`) VALUES
(3, 2, 'auiwetylaeiwuy', 'sejkfh', 'asg', 'jkasg', 'asg', 'asg'),
(4, 2, 'asgasg', '11', '22', '33', '44', '44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_score`
--

CREATE TABLE `tbl_score` (
  `scoreId` int(11) NOT NULL,
  `quizId` int(11) NOT NULL,
  `es_Id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_score`
--

INSERT INTO `tbl_score` (`scoreId`, `quizId`, `es_Id`, `score`) VALUES
(5, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_stream`
--

CREATE TABLE `tbl_stream` (
  `id` int(11) NOT NULL,
  `sy_course_subjId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `studId` int(11) NOT NULL,
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
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`studId`, `firstname`, `middlename`, `lastname`, `address`, `birthdate`, `age`, `mobileno`, `emailaddress`, `gender`, `username`, `password`, `privilege`) VALUES
(1, 'ivan', 'ivan', 'ivan', 'ivan', '0000-00-00', 12, 'ivan', 'ivan', 'ivan', 'ivan', 'ivan', 0),
(2, 'john', 'john', 'john ', 'john', '0000-00-00', 12, 'john', 'john', 'john', 'john', '3847820138564525205299f1f444c5ec', 0),
(3, 'jaron', 'jaron', 'jaron', 'jaron', '0000-00-00', 12, 'jaron', 'jaron', 'jaron', 'jaron', 'jaron', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subjects`
--

CREATE TABLE `tbl_subjects` (
  `subjectId` int(11) NOT NULL,
  `subjDesc` varchar(100) NOT NULL,
  `gradeId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_subjects`
--

INSERT INTO `tbl_subjects` (`subjectId`, `subjDesc`, `gradeId`) VALUES
(1, 'Algebra', 1),
(2, 'Geometry', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy`
--

CREATE TABLE `tbl_sy` (
  `syId` int(11) NOT NULL,
  `SY_From` varchar(10) NOT NULL,
  `SY_To` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sy`
--

INSERT INTO `tbl_sy` (`syId`, `SY_From`, `SY_To`) VALUES
(1, '2017', '2018'),
(2, '2019', '2020');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy_course`
--

CREATE TABLE `tbl_sy_course` (
  `sy_courseId` int(11) NOT NULL,
  `syId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sy_course`
--

INSERT INTO `tbl_sy_course` (`sy_courseId`, `syId`, `courseId`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 1),
(5, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sy_course_subj`
--

CREATE TABLE `tbl_sy_course_subj` (
  `sy_course_subjId` int(11) NOT NULL,
  `sy_courseId` int(11) NOT NULL,
  `subjectId` int(11) NOT NULL,
  `teacherId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sy_course_subj`
--

INSERT INTO `tbl_sy_course_subj` (`sy_course_subjId`, `sy_courseId`, `subjectId`, `teacherId`) VALUES
(1, 1, 1, 1),
(2, 1, 2, 1),
(3, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachers`
--

CREATE TABLE `tbl_teachers` (
  `teacherId` int(11) NOT NULL,
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
  `privilege` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teachers`
--

INSERT INTO `tbl_teachers` (`teacherId`, `firstname`, `middlename`, `lastname`, `address`, `birthdate`, `age`, `mobileno`, `emailaddress`, `gender`, `username`, `password`, `privilege`) VALUES
(1, 'ivans', 'ivans', 'ivan', 'ivan', '2018-03-01', 0, 'ivan', 'ivan', 'Male', 'ivans', '49bae64cf5a049512142fc7c587c4861', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_account`
--
ALTER TABLE `tbl_account`
  ADD PRIMARY KEY (`accountId`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `tbl_enrolledstudents`
--
ALTER TABLE `tbl_enrolledstudents`
  ADD PRIMARY KEY (`es_Id`);

--
-- Indexes for table `tbl_files`
--
ALTER TABLE `tbl_files`
  ADD PRIMARY KEY (`fileId`);

--
-- Indexes for table `tbl_gmembers`
--
ALTER TABLE `tbl_gmembers`
  ADD PRIMARY KEY (`gMem_Id`);

--
-- Indexes for table `tbl_gmessages`
--
ALTER TABLE `tbl_gmessages`
  ADD PRIMARY KEY (`g_msgs_Id`);

--
-- Indexes for table `tbl_gposts`
--
ALTER TABLE `tbl_gposts`
  ADD PRIMARY KEY (`gPost_Id`);

--
-- Indexes for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  ADD PRIMARY KEY (`gradeId`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`g_Id`);

--
-- Indexes for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  ADD PRIMARY KEY (`notifId`);

--
-- Indexes for table `tbl_pmessage`
--
ALTER TABLE `tbl_pmessage`
  ADD PRIMARY KEY (`pMsg_Id`);

--
-- Indexes for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  ADD PRIMARY KEY (`quizId`);

--
-- Indexes for table `tbl_quiz_fill`
--
ALTER TABLE `tbl_quiz_fill`
  ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `tbl_quiz_multiple`
--
ALTER TABLE `tbl_quiz_multiple`
  ADD PRIMARY KEY (`questionId`);

--
-- Indexes for table `tbl_score`
--
ALTER TABLE `tbl_score`
  ADD PRIMARY KEY (`scoreId`);

--
-- Indexes for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`studId`);

--
-- Indexes for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  ADD PRIMARY KEY (`subjectId`);

--
-- Indexes for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  ADD PRIMARY KEY (`syId`);

--
-- Indexes for table `tbl_sy_course`
--
ALTER TABLE `tbl_sy_course`
  ADD PRIMARY KEY (`sy_courseId`);

--
-- Indexes for table `tbl_sy_course_subj`
--
ALTER TABLE `tbl_sy_course_subj`
  ADD PRIMARY KEY (`sy_course_subjId`);

--
-- Indexes for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  ADD PRIMARY KEY (`teacherId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_account`
--
ALTER TABLE `tbl_account`
  MODIFY `accountId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_enrolledstudents`
--
ALTER TABLE `tbl_enrolledstudents`
  MODIFY `es_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_files`
--
ALTER TABLE `tbl_files`
  MODIFY `fileId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_gmembers`
--
ALTER TABLE `tbl_gmembers`
  MODIFY `gMem_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_gmessages`
--
ALTER TABLE `tbl_gmessages`
  MODIFY `g_msgs_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_gposts`
--
ALTER TABLE `tbl_gposts`
  MODIFY `gPost_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_grade`
--
ALTER TABLE `tbl_grade`
  MODIFY `gradeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `g_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_notif`
--
ALTER TABLE `tbl_notif`
  MODIFY `notifId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_pmessage`
--
ALTER TABLE `tbl_pmessage`
  MODIFY `pMsg_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_quiz`
--
ALTER TABLE `tbl_quiz`
  MODIFY `quizId` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_quiz_fill`
--
ALTER TABLE `tbl_quiz_fill`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_quiz_multiple`
--
ALTER TABLE `tbl_quiz_multiple`
  MODIFY `questionId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_score`
--
ALTER TABLE `tbl_score`
  MODIFY `scoreId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_stream`
--
ALTER TABLE `tbl_stream`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `studId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_subjects`
--
ALTER TABLE `tbl_subjects`
  MODIFY `subjectId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sy`
--
ALTER TABLE `tbl_sy`
  MODIFY `syId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_sy_course`
--
ALTER TABLE `tbl_sy_course`
  MODIFY `sy_courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_sy_course_subj`
--
ALTER TABLE `tbl_sy_course_subj`
  MODIFY `sy_course_subjId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_teachers`
--
ALTER TABLE `tbl_teachers`
  MODIFY `teacherId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
