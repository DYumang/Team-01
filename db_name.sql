-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 05, 2022 at 05:45 PM
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

--
-- Dumping data for table `exam_details_table`
--

INSERT INTO `exam_details_table` (`exam_id`, `exam_title`, `total_question`, `marks_if_right`, `marks_if_wrong`, `exam_created_date`, `exam_status`, `exam_code`) VALUES
('8ce79dc2f1cbb19510d6', 'Test Quiz 1', '5', '2', '1', '2022-02-05 05:45:31', 'pending', 'TEST1234');

-- --------------------------------------------------------

--
-- Table structure for table `options_details_table`
--

CREATE TABLE `options_details_table` (
  `question_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `options` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `optionid` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `options_details_table`
--

INSERT INTO `options_details_table` (`question_id`, `options`, `optionid`) VALUES
('3d940c24ef8b9d2791c1', 'Charles Babbage', '5f2c5a41c77e5f6513bb'),
('3d940c24ef8b9d2791c1', 'Elon Musk', 'e622281e615ad22c1771'),
('3d940c24ef8b9d2791c1', 'Nikola Tesla', '383412fda61222d02ee4'),
('3d940c24ef8b9d2791c1', 'Stephen Spielberg', 'b592fdb86b25a148cfa6'),
('7b219e92259707e182f0', 'PewDiePie', 'f4edd6767ef641b03c3f'),
('7b219e92259707e182f0', 'VanossGaming', '632a02711004061eff30'),
('7b219e92259707e182f0', 'MrBeast', 'b4e373a4bb0f34308b4a'),
('7b219e92259707e182f0', 'MaximilianDood', 'c2161a630a874299873b'),
('a90be582d899f1417745', 'WWE', 'f5f5a767f36be6385142'),
('a90be582d899f1417745', 'AEW', '0599b0e075a01328d569'),
('a90be582d899f1417745', 'NJPW', 'd4be7b51b76a7cc2dfe3'),
('a90be582d899f1417745', 'AAA Lucha Libre', '8069aeb6e753647009ba'),
('0bc931b6bec319baa2b4', 'MJF', '61f7669bc478aaaf4a82'),
('0bc931b6bec319baa2b4', 'Ric Flair', 'a04443fcc4cbe7fec765'),
('0bc931b6bec319baa2b4', 'Roddy Piper', 'd2a194840be344c2fea1'),
('0bc931b6bec319baa2b4', 'James Elseworth', '2126ad97a7a18b0fd0ad'),
('5e6b1a5a16f339964cac', 'The Rock', 'db757631af88cc3be535'),
('5e6b1a5a16f339964cac', 'John Cena', 'f6182068c8f3f137d13a'),
('5e6b1a5a16f339964cac', 'Stone Cold', '6d6d844f563165f0593f'),
('5e6b1a5a16f339964cac', 'Roman Reigns', 'dc7c5db26423e5014596');

-- --------------------------------------------------------

--
-- Table structure for table `questions_details_table`
--

CREATE TABLE `questions_details_table` (
  `exam_id` text CHARACTER SET utf8 NOT NULL,
  `question_id` text CHARACTER SET utf8 NOT NULL,
  `questions` text CHARACTER SET utf8 NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `questions_details_table`
--

INSERT INTO `questions_details_table` (`exam_id`, `question_id`, `questions`, `answer`) VALUES
('8ce79dc2f1cbb19510d6', '3d940c24ef8b9d2791c1', 'Who is the Father of Computers', '5f2c5a41c77e5f6513bb'),
('8ce79dc2f1cbb19510d6', '7b219e92259707e182f0', 'Who should you subscribe to?', 'c2161a630a874299873b'),
('8ce79dc2f1cbb19510d6', 'a90be582d899f1417745', 'Which Wrestling Promotion\'s better?', '0599b0e075a01328d569'),
('8ce79dc2f1cbb19510d6', '0bc931b6bec319baa2b4', 'Best Heel in the business?', 'd2a194840be344c2fea1'),
('8ce79dc2f1cbb19510d6', '5e6b1a5a16f339964cac', 'Best on the Mic?', 'db757631af88cc3be535');

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
-- Dumping data for table `tbl_name`
--

INSERT INTO `tbl_name` (`id`, `lastName`, `firstName`, `username`, `birthdate`, `password`, `status`, `email`, `verification_key`) VALUES
(1, 'yumang', 'dan', 'edoyuma', '2022-12-31', 'ac8de3b5b736fd627b42c91071c5c2a6ec963a89', 0, '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
