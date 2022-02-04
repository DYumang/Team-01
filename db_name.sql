-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 04:36 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_name`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_details_table`
--

CREATE TABLE `answer_details_table` (
  `question_id` text CHARACTER SET utf8 NOT NULL,
  `answer_id` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `exam_details_table`
--

CREATE TABLE `exam_details_table` (
  `exam_id` varchar(11) CHARACTER SET utf8 NOT NULL,
  `exam_title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_question` varchar(5) CHARACTER SET latin1 NOT NULL,
  `marks_if_right` varchar(30) CHARACTER SET latin1 NOT NULL,
  `marks_if_wrong` varchar(30) CHARACTER SET latin1 NOT NULL,
  `exam_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `exam_status` enum('pending','created','started','completed') CHARACTER SET latin1 NOT NULL,
  `exam_code` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_details_table`
--

INSERT INTO `exam_details_table` (`exam_id`, `exam_title`, `total_question`, `marks_if_right`, `marks_if_wrong`, `exam_created_date`, `exam_status`, `exam_code`) VALUES
('', 'my quiz', '10', '1', '1', '2022-01-18 03:49:33', 'pending', 'hsdsa76'),
('', 'treasure', '10', '1', '1', '2022-01-18 13:29:45', 'pending', '5555555'),
('', 'quiz new', '10', '1', '1', '2022-01-21 10:17:46', 'pending', '89ord6'),
('', 'quiz new', '10', '1', '1', '2022-01-21 14:00:44', 'pending', '8d7dad4'),
('', 'quiz new', '10', '1', '1', '2022-01-21 14:01:13', 'pending', '8d7dad4'),
('', 'quiz new', '10', '1', '1', '2022-01-21 14:01:41', 'pending', '8d7dad4'),
('', 'quiz new', '10', '1', '1', '2022-01-21 14:01:41', 'pending', '8d7dad4'),
('', 'quiz new', '10', '1', '1', '2022-01-21 14:01:42', 'pending', '8d7dad4'),
('', 'quiz new', '10', '1', '1', '2022-01-21 15:09:40', 'pending', 'hdaj7893'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:11:20', 'pending', 'fksdfkjdks'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:11:44', 'pending', 'fksdfkjdks'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:11:44', 'pending', 'fksdfkjdks'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:12:25', 'pending', 'fksdfkjdks'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:12:27', 'pending', 'fksdfkjdks'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:12:28', 'pending', 'fksdfkjdks'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:15:35', 'pending', 'dadaddd'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:15:37', 'pending', 'dadaddd'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:16:10', 'pending', 'dadaddd'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:16:10', 'pending', 'dadaddd'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:16:44', 'pending', 'dadaddd'),
('', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:16:44', 'pending', 'dadaddd'),
('2576b383a2b', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:29:13', 'pending', 'thdsa87'),
('045253a09e2', 'hffsjfjsd', '10', '1', '1', '2022-01-21 15:29:41', 'pending', 'thdsa87'),
('24e0c0321eb', 'jklasldjlas', '10', '1', '1', '2022-01-21 15:43:29', 'pending', 'asdasdas'),
('734c0099dbd', 'jklasldjlas', '10', '1', '1', '2022-01-21 15:44:28', 'pending', 'asdasdas'),
('ab67ddf4208', 'jklasldjlas', '10', '1', '1', '2022-01-21 15:44:29', 'pending', 'asdasdas'),
('f5d3c62bc8a', 'jklasldjlas', '10', '1', '1', '2022-01-21 15:44:29', 'pending', 'asdasdas'),
('a4930e2e114', 'jklasldjlas', '10', '1', '1', '2022-01-21 15:44:29', 'pending', 'asdasdas'),
('fb7007446eb', 'jklasldjlas', '10', '1', '1', '2022-01-21 15:44:29', 'pending', 'asdasdas'),
('d8d78e8d449', 'ghfghfghfg', '10', '1', '1', '2022-01-21 15:57:48', 'pending', 'fdsfdsfsd'),
('7bb6053ab25', 'fsdfsdf', '10', '1', '1', '2022-01-21 16:00:37', 'pending', 'fsfsdfsf');

-- --------------------------------------------------------

--
-- Table structure for table `options_details_table`
--

CREATE TABLE `options_details_table` (
  `question_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `options` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `optionid` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `questions_details_table`
--

CREATE TABLE `questions_details_table` (
  `exam_id` text CHARACTER SET utf8 NOT NULL,
  `question_id` text CHARACTER SET utf8 NOT NULL,
  `questions` text CHARACTER SET utf8 NOT NULL,
  `choice` int(10) NOT NULL,
  `question_no` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_name`
--

CREATE TABLE `tbl_name` (
  `id` int(11) NOT NULL,
  `lastName` varchar(25) NOT NULL,
  `firstName` varchar(25) NOT NULL,
  `username` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_name`
--

INSERT INTO `tbl_name` (`id`, `lastName`, `firstName`, `username`, `birthdate`, `password`) VALUES
(22, 'Shogan', 'Raiden', 'eiiiiii', '1990-01-01', '5fa339bbbb1eeaced3b52e54f44576aaf0d77d96'),
(23, 'Park', 'Chanyeol', 'yoda', '1990-11-27', '5fa339bbbb1eeaced3b52e54f44576aaf0d77d96'),
(24, 'fama', 'gdtete', 'sheyy', '2021-12-02', '7c4a8d09ca3762af61e59520943dc26494f8941b'),
(25, 'mema', 'aaaaa', 'sheyy', '1999-01-10', 'b33da403023ee0896a1ea31247f48f5de6ddc196'),
(26, 'Parkkkkk', 'Chanyeollll', 'yoda', '1990-11-27', '5fa339bbbb1eeaced3b52e54f44576aaf0d77d96'),
(27, 'mema', 'aaaaa', 'sheyy', '1999-01-10', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220'),
(29, 'Shey', 'Shey', 'sheyyy', '2021-12-21', '8cb2237d0679ca88db6464eac60da96345513964'),
(30, 'Fama', 'Diana', 'darkerplexing22', '2021-12-07', '1a9b9508b6003b68ddfe03a9c8cbc4bd4388339b'),
(32, 'Rey', 'Rey', 'reyy', '2021-12-08', '7b21848ac9af35be0ddb2d6b9fc3851934db8420'),
(33, 'Hammy', 'Hamster', 'hami', '2021-12-14', '8cb2237d0679ca88db6464eac60da96345513964'),
(34, 'Perms', 'John', 'Permss', '2022-01-05', '4d3b643020961ed6d7e0afc4fe18fb2d91a998b6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_name`
--
ALTER TABLE `tbl_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
