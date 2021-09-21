-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 12:03 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fclms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_course`
--

CREATE TABLE `admin_course` (
  `CourseId` int(11) NOT NULL,
  `CourseCode` varchar(10) DEFAULT NULL,
  `CourseName` varchar(15) DEFAULT NULL,
  `CourseFile` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_course`
--

INSERT INTO `admin_course` (`CourseId`, `CourseCode`, `CourseName`, `CourseFile`) VALUES
(1, 'C_009', 'JAVA', 'java un 4.pdf'),
(2, 'C_009', 'JAVA', 'java un 4.pdf'),
(3, 'C_009', 'JAVA', 'java un 4.pdf'),
(4, 'c_0010', 'Python', 'java un 6.docx'),
(5, 'c_0010', 'Python', 'java un 6.docx');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `Cid` int(11) NOT NULL,
  `coursename` varchar(50) DEFAULT NULL,
  `Syllabus` text,
  `Duration` varchar(50) DEFAULT NULL,
  `Batches` varchar(50) DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `Fees` int(11) DEFAULT NULL,
  `Tid` int(11) DEFAULT NULL,
  `Sid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`Cid`, `coursename`, `Syllabus`, `Duration`, `Batches`, `status`, `Fees`, `Tid`, `Sid`) VALUES
(1, 'PHP', NULL, '2 Months', 'Batch-1', 'Processing', 10000, NULL, NULL),
(2, 'Java', NULL, '2 Months', 'Batch-1', 'Processing', 10000, NULL, NULL),
(3, 'Python', NULL, '2 Months', 'Batch-2', 'Processing', 10000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `Pid` int(11) NOT NULL,
  `projectname` varchar(100) DEFAULT NULL,
  `start_date` date NOT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Duration` varchar(50) DEFAULT NULL,
  `Domain` varchar(50) DEFAULT NULL,
  `Sid` int(11) DEFAULT NULL,
  `Tid` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`Pid`, `projectname`, `start_date`, `Status`, `Duration`, `Domain`, `Sid`, `Tid`) VALUES
(1, 'LMS', '2019-12-25', 'Completed', '2 Months', 'Php', 2, NULL),
(2, 'Buzz', '2019-12-25', 'Completed', '2 Months', 'Php', 1, NULL),
(3, 'Forensic Lab', '2019-12-25', 'Processing', '2 Months', 'Java', 3, NULL),
(4, 'P4', '2019-12-25', 'Processing', '2 Months', 'Pythpon', 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `studentname` varchar(100) DEFAULT NULL,
  `collegename` varchar(200) DEFAULT NULL,
  `student_coursename` varchar(100) NOT NULL,
  `student_admission_date` date NOT NULL,
  `student_mobileno` bigint(20) DEFAULT NULL,
  `student_alternateNumber` bigint(20) NOT NULL,
  `student_guardianNumber` bigint(20) NOT NULL,
  `student_dob` date NOT NULL,
  `student_email` varchar(100) DEFAULT NULL,
  `student_userid` varchar(100) NOT NULL,
  `student_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `studentname`, `collegename`, `student_coursename`, `student_admission_date`, `student_mobileno`, `student_alternateNumber`, `student_guardianNumber`, `student_dob`, `student_email`, `student_userid`, `student_status`) VALUES
(1, 'Shivani katkar', 'Modern College', 'PHP', '0000-00-00', 4356337389, 0, 0, '0000-00-00', 'shivani21@gamil.com', '', 'Pursing'),
(2, 'Dhwani Patel', 'D Y Patil College', 'PHP', '2020-01-13', 1352451234, 45231235, 13252334, '1998-05-23', 'dhwanipatel22@gmail.com', 'dhwani', 'Break'),
(3, 'Mukund Gaikwad', 'D Y Patil college', 'Java', '0000-00-00', 4253434112, 0, 0, '0000-00-00', 'mukundg55@gmail.com', '', 'Pursing'),
(4, 'pradyna', 'Modern College', 'Python', '0000-00-00', 2473231234, 0, 0, '0000-00-00', 'pradyna13@gmail.com', '', 'Pursing');

-- --------------------------------------------------------

--
-- Table structure for table `student_mark`
--

CREATE TABLE `student_mark` (
  `mid` int(11) NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `coursename` varchar(100) NOT NULL,
  `examtype` varchar(100) NOT NULL,
  `examdate` date NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_mark`
--

INSERT INTO `student_mark` (`mid`, `studentname`, `coursename`, `examtype`, `examdate`, `marks`) VALUES
(1, 'Shivani Katkar', 'PHP', 'Aptitude Test', '2020-02-20', 40),
(2, 'Shivani Katkar', 'Core Php', 'Practical Test', '2020-02-28', 70),
(3, 'Dhwani Patel', 'Core Php', 'Aptitude Test', '2020-02-20', 38);

-- --------------------------------------------------------

--
-- Table structure for table `student_register`
--

CREATE TABLE `student_register` (
  `StudentId` int(11) NOT NULL,
  `StudentFullName` char(50) DEFAULT NULL,
  `StudentDateOfJoin` date DEFAULT NULL,
  `StudentGender` char(10) DEFAULT NULL,
  `StudentPhoneNumber` bigint(20) DEFAULT NULL,
  `StudentAlternateNumber` bigint(20) DEFAULT NULL,
  `StudentGuardianNumber` bigint(20) DEFAULT NULL,
  `StudentCourse` char(20) DEFAULT NULL,
  `StudentTrainer` char(20) DEFAULT NULL,
  `StudentEmailId` varchar(50) DEFAULT NULL,
  `StudentUserName` varchar(20) DEFAULT NULL,
  `StudentPassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_register`
--

INSERT INTO `student_register` (`StudentId`, `StudentFullName`, `StudentDateOfJoin`, `StudentGender`, `StudentPhoneNumber`, `StudentAlternateNumber`, `StudentGuardianNumber`, `StudentCourse`, `StudentTrainer`, `StudentEmailId`, `StudentUserName`, `StudentPassword`) VALUES
(1, 'Shivani Padmakar Katkar', '1997-07-14', 'female', 7066894612, 9028862603, 9028594612, 'Object oriented coce', 'Mr. Albus Severus Po', 'shivani1997@gmail.com', 'shivani', 'shivani'),
(2, 'sourabh sunil patil', '2001-05-08', 'male', 9423094612, 9028862603, 8888294612, 'Python', 'Mr. Harry Ptter', 'sourabh@gmail.com', 'sourabh085', 'sourabh');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Tid` int(11) NOT NULL,
  `Tname` varchar(50) DEFAULT NULL,
  `Tadd` varchar(100) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Mobileno` bigint(20) DEFAULT NULL,
  `Joining_Date` date DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `About` varchar(1000) DEFAULT NULL,
  `Photo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `trainer_courses`
--

CREATE TABLE `trainer_courses` (
  `trainercourseid` int(11) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `no_of_student` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_courses`
--

INSERT INTO `trainer_courses` (`trainercourseid`, `coursename`, `no_of_student`) VALUES
(1, 'PHP', 40),
(2, 'Java', 40),
(3, 'Python', 35),
(4, 'Dot Net', 40);

-- --------------------------------------------------------

--
-- Table structure for table `trainer_login`
--

CREATE TABLE `trainer_login` (
  `trainer_login_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_login`
--

INSERT INTO `trainer_login` (`trainer_login_id`, `username`, `password`) VALUES
(1, 'peterh12', 'peterh12'),
(2, 'patel85', 'patel85');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_profile`
--

CREATE TABLE `trainer_profile` (
  `tid` int(11) NOT NULL,
  `tfullname` varchar(200) NOT NULL,
  `taddress` varchar(200) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `tdob` date NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `images` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_profile`
--

INSERT INTO `trainer_profile` (`tid`, `tfullname`, `taddress`, `mobileno`, `tdob`, `age`, `email`, `images`) VALUES
(111, 'peterh', 'mumbai', 2147483647, '1987-05-03', 37, 'peterh12@gmail.com', ''),
(112, 'patel', 'Pune', 125135135, '1985-09-12', 34, 'patel85@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `trainer_question`
--

CREATE TABLE `trainer_question` (
  `qid` int(11) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `examtype` varchar(100) NOT NULL,
  `question` varchar(1000) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `correct_answer` varchar(200) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_question`
--

INSERT INTO `trainer_question` (`qid`, `coursename`, `examtype`, `question`, `option1`, `option2`, `option3`, `option4`, `correct_answer`, `marks`) VALUES
(1, 'Core PHP', 'Aptitude Test', 'What is PHP', 'Hypertext preprocessor', 'processor hyperlink page', 'protected hypen page  ', 'paging hyper processor', 'Hypertext preprocessor', 2),
(2, 'CORE PHP', 'Aptitude Test', 'which of the following is not true?', 'php makes a website dynamic', 'php can be used to develop web applications', 'php applications can not be compiled', 'php can not be embedded into html', 'php can not be embedded into html', 2),
(3, 'C', 'Aptitude Test', 'All Keywords in c are in ___', 'Lowercase letters', 'uppercase letters', 'camelcase letters', 'None of the mentioned', 'Lowercase letters', 2),
(4, 'C', 'Aptitude Test', 'What is the size of an int data type?', '4 Bytes', '8 Bytes', 'Depends on the system/compiler', 'Cannot be determined', 'Depends on the system/compiler', 2),
(5, 'Core Java', 'Aptitude Test ', 'Which company started developing Java (as a Green project)?', 'Microsoft', 'Oracle', 'Apple', 'Sun Microsystem', 'Sun Microsystem', 2),
(6, 'Core .NET', 'Aptitude Test', 'MVC stands for __', 'Model, Vision & Control', 'Model, View & Controller', 'Model, ViewData & Controller', 'Model, Data & Controller', 'Model, View & Controller', 2),
(7, 'Core Python', 'Aptitude Test', 'Which type of elements are accepted by random.shuffle()?', 'strings', 'lists', 'tuples', 'integers', 'lists', 2),
(8, 'core PHP', 'Aptitude Test', 'How many error levels are available in php?', '14', '15', '16', '17', '16', 2),
(9, 'MYSQL', 'Appptitude Test', 'the statement used to removed indexes on tables is ___', 'Change', 'Alter', 'Alternate', 'Update', 'Alter', 2),
(10, 'C', 'Aptitude Test', 'which of the following is not true?', 'efhngdswd', 'php can be used to develop web applications', 'php applications can not be compiled', 'efge', 'php can not be embedded into html', 2);

-- --------------------------------------------------------

--
-- Table structure for table `trainer_register`
--

CREATE TABLE `trainer_register` (
  `TrainerId` int(11) NOT NULL,
  `TrainerFullName` char(20) DEFAULT NULL,
  `Technology` char(15) DEFAULT NULL,
  `TrainerPhoneNumber` bigint(20) DEFAULT NULL,
  `TrainerGender` char(15) DEFAULT NULL,
  `TrainerEmailId` varchar(50) DEFAULT NULL,
  `TrainerUserName` varchar(20) DEFAULT NULL,
  `TrainerPassword` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer_register`
--

INSERT INTO `trainer_register` (`TrainerId`, `TrainerFullName`, `Technology`, `TrainerPhoneNumber`, `TrainerGender`, `TrainerEmailId`, `TrainerUserName`, `TrainerPassword`) VALUES
(1, 'Rohini Taware', 'JAVA', 7894561236, 'on', 'rohini@gmail.com', 'rohini', 'rohini'),
(2, 'Mrunalini Dhone', 'JAVA', 7412589635, 'on', 'mrunalini@gmail.com', 'mrunalini', 'mrunalini');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_course`
--
ALTER TABLE `admin_course`
  ADD PRIMARY KEY (`CourseId`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`Cid`),
  ADD KEY `Sid` (`Sid`),
  ADD KEY `Tid` (`Tid`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`Pid`),
  ADD KEY `Sid` (`Sid`),
  ADD KEY `Tid` (`Tid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `student_mark`
--
ALTER TABLE `student_mark`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `student_register`
--
ALTER TABLE `student_register`
  ADD PRIMARY KEY (`StudentId`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Tid`);

--
-- Indexes for table `trainer_courses`
--
ALTER TABLE `trainer_courses`
  ADD PRIMARY KEY (`trainercourseid`);

--
-- Indexes for table `trainer_login`
--
ALTER TABLE `trainer_login`
  ADD PRIMARY KEY (`trainer_login_id`);

--
-- Indexes for table `trainer_profile`
--
ALTER TABLE `trainer_profile`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `trainer_question`
--
ALTER TABLE `trainer_question`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `trainer_register`
--
ALTER TABLE `trainer_register`
  ADD PRIMARY KEY (`TrainerId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_course`
--
ALTER TABLE `admin_course`
  MODIFY `CourseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `Cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `Pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_mark`
--
ALTER TABLE `student_mark`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student_register`
--
ALTER TABLE `student_register`
  MODIFY `StudentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer`
--
ALTER TABLE `trainer`
  MODIFY `Tid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trainer_courses`
--
ALTER TABLE `trainer_courses`
  MODIFY `trainercourseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trainer_login`
--
ALTER TABLE `trainer_login`
  MODIFY `trainer_login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `trainer_profile`
--
ALTER TABLE `trainer_profile`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `trainer_question`
--
ALTER TABLE `trainer_question`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `trainer_register`
--
ALTER TABLE `trainer_register`
  MODIFY `TrainerId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `course_ibfk_2` FOREIGN KEY (`Tid`) REFERENCES `trainer` (`Tid`);

--
-- Constraints for table `project`
--
ALTER TABLE `project`
  ADD CONSTRAINT `project_ibfk_1` FOREIGN KEY (`Sid`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `project_ibfk_2` FOREIGN KEY (`Tid`) REFERENCES `trainer` (`Tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
