-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 04, 2022 at 05:38 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

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
-- Table structure for table `exam_details_table`
--

CREATE TABLE `exam_details_table` (
  `exam_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `exam_title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_question` varchar(5) CHARACTER SET latin1 NOT NULL,
  `marks_if_right` varchar(30) CHARACTER SET latin1 NOT NULL,
  `marks_if_wrong` varchar(30) CHARACTER SET latin1 NOT NULL,
  `exam_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `exam_status` enum('pending','created','started','completed') CHARACTER SET latin1 NOT NULL,
  `exam_code` varchar(8) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `answer` varchar(255) NOT NULL,
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
  `password` varchar(255) NOT NULL,
  `status` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verification_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
