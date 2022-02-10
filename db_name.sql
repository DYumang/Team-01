-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 08, 2022 at 12:48 PM
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
  `id` int(255) NOT NULL,
  `exam_id` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_id` int(255) NOT NULL,
  `exam_title` varchar(255) CHARACTER SET latin1 NOT NULL,
  `total_question` varchar(5) CHARACTER SET latin1 NOT NULL,
  `score` int(255) NOT NULL,
  `marks_if_right` varchar(30) CHARACTER SET latin1 NOT NULL,
  `marks_if_wrong` varchar(30) CHARACTER SET latin1 NOT NULL,
  `exam_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `exam_status` enum('pending','created','started','completed') CHARACTER SET latin1 NOT NULL,
  `exam_code` varchar(8) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam_details_table`
--

INSERT INTO `exam_details_table` (`id`, `exam_id`, `user_id`, `exam_title`, `total_question`, `score`, `marks_if_right`, `marks_if_wrong`, `exam_created_date`, `exam_status`, `exam_code`) VALUES
(9, 'e9b66d13c832b75e76f2', 0, 'TEST QUIZ 1', '3', 0, '1', '1', '2022-02-08 11:25:54', 'pending', 'TEST1234'),
(10, 'e9b66d13c832b75e76f2', 3, 'TEST QUIZ 1', '3', 3, '1', '1', '2022-02-08 11:26:35', 'pending', 'TEST1234'),
(11, 'a0bac09c86ee6318d502', 0, 'Test Quiz 2', '10', 0, '2', '1', '2022-02-08 11:27:45', 'pending', '1234TEST'),
(12, 'a0bac09c86ee6318d502', 3, 'Test Quiz 2', '10', 4, '2', '1', '2022-02-08 11:30:14', 'pending', '1234TEST'),
(14, 'e9b66d13c832b75e76f2', 3, 'TEST QUIZ 1', '3', 1, '1', '1', '2022-02-08 11:39:44', 'pending', 'TEST1234'),
(15, 'a0bac09c86ee6318d502', 3, 'Test Quiz 2', '10', 11, '2', '1', '2022-02-08 11:40:47', 'pending', '1234TEST'),
(16, 'cd603fa88cb3a6c1453f', 0, 'WWE', '5', 0, '5', '2', '2022-02-08 11:41:50', 'pending', '12345678'),
(17, 'cd603fa88cb3a6c1453f', 3, 'WWE', '5', 18, '5', '2', '2022-02-08 11:44:05', 'pending', '12345678'),
(18, 'cd603fa88cb3a6c1453f', 3, 'WWE', '5', 18, '5', '2', '2022-02-08 11:44:49', 'pending', '12345678');

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
('7c1648e7adb2cdbb8818', 'A', 'bdb07e7ce335fd8fa55d'),
('7c1648e7adb2cdbb8818', 'B', '0b05b4327b388ecebd9a'),
('7c1648e7adb2cdbb8818', 'C', '832a9bfd26da1c284ef3'),
('7c1648e7adb2cdbb8818', 'D', '51ec5f0804cb201f5275'),
('c67e622119307a1b132f', '1', 'be0c415ab3da88709fda'),
('c67e622119307a1b132f', '2', 'af71c0122d2c7723ffe6'),
('c67e622119307a1b132f', '3', 'e508947169459cb19f85'),
('c67e622119307a1b132f', '4', 'df661996f549f46faeae'),
('a1bbe530aa0bd1766868', '5', '6070334be6a7a368dc84'),
('a1bbe530aa0bd1766868', '6', '2da702407b9614bcb802'),
('a1bbe530aa0bd1766868', '7', '75a87e61a17d630bae6d'),
('a1bbe530aa0bd1766868', '8', 'c78e8ca90d19facdcd32'),
('38950f191abd9131d20a', 'A', '0cdda5f8fb87a7549331'),
('38950f191abd9131d20a', 'B', 'ccc8a308e133ffd57eff'),
('38950f191abd9131d20a', 'C', '83e92260cc9d0fa2af7e'),
('38950f191abd9131d20a', 'D', '7cd91086e392df8d53e9'),
('afd2559223d6145be407', 'E', '607b5b334ee2dee292c1'),
('afd2559223d6145be407', 'F', '629f41e7390896f245fd'),
('afd2559223d6145be407', 'G', 'd4e21a2507bff2c8242d'),
('afd2559223d6145be407', 'H', '60e66e098e5fbc188857'),
('b278c96e5e2ea370b0fe', 'I', 'd6599a399ecff8f2ad8a'),
('b278c96e5e2ea370b0fe', 'J', '44c12875d594310dc4f8'),
('b278c96e5e2ea370b0fe', 'K', '897d0e6cf2342c9397ed'),
('b278c96e5e2ea370b0fe', 'L', 'a5fb26c57e667fab76e5'),
('8d3111db73908402a387', 'M', 'e9f958a1349eb4a743e9'),
('8d3111db73908402a387', 'N', 'de4e63288da27a1dbc20'),
('8d3111db73908402a387', 'O', '84ac93b51b1f3493f988'),
('8d3111db73908402a387', 'P', '2334b6f588fc0fcb65a3'),
('56a5c18b8371b3038c72', 'Q', '71a1e5d171a06fc75fcf'),
('56a5c18b8371b3038c72', 'R', 'c8ca768758a0ccf845a3'),
('56a5c18b8371b3038c72', 'S', 'a3db7b95ec2cac19789b'),
('56a5c18b8371b3038c72', 'T', '71762db75bd608c07a89'),
('83b5cdcca134f7d0a02a', 'U', '390a2e1f12ac78742b2a'),
('83b5cdcca134f7d0a02a', 'V', '3694ebeea652ec6fcb67'),
('83b5cdcca134f7d0a02a', 'W', '574c7107950bd0799da8'),
('83b5cdcca134f7d0a02a', 'X', '3a5a03a32c1fa913f981'),
('abc2e241a6d7166a0239', 'Y', '77f6a12a03b2805b631c'),
('abc2e241a6d7166a0239', 'Z', 'a5fb4c3875caa3d2c583'),
('abc2e241a6d7166a0239', 'A', 'd28900c29c9f7c54d0ee'),
('abc2e241a6d7166a0239', 'B', 'a26f84c547bd48a79863'),
('ab1f8dc5a40179a6e907', '1', '41e67bb5f47e2d03afb4'),
('ab1f8dc5a40179a6e907', '2', '3aee40241d76b1c5627c'),
('ab1f8dc5a40179a6e907', '3', '4fc3a00ec1b39022b1bc'),
('ab1f8dc5a40179a6e907', '4', 'c52c29a5bb6581effbab'),
('37b260e8a57c6b53b061', '5', '2d956df716d118309a53'),
('37b260e8a57c6b53b061', '6', 'c71703d2789c0967a61a'),
('37b260e8a57c6b53b061', '7', '1031a19e21e51539ae50'),
('37b260e8a57c6b53b061', '8', '500a2676a1cd0025c008'),
('19513009dc8c760a8d27', '9', '9b23db51f226474291c3'),
('19513009dc8c760a8d27', '0', 'a6bccbcb0e9ff69673a0'),
('19513009dc8c760a8d27', '1', '2d37b7ef72282c515f51'),
('19513009dc8c760a8d27', '2', '4038e87b68a43404032b'),
('90e79aacd9e82d949a0b', 'Bobby Lashley', '28898d115878ed4d5309'),
('90e79aacd9e82d949a0b', 'John Cena', '0763ad16dfc2afd5007c'),
('90e79aacd9e82d949a0b', 'Randy Orton', 'f68bb84446ae246c6998'),
('90e79aacd9e82d949a0b', 'Undertaker', '2ecfdbeb152210661883'),
('d040ff60bdd4c7ba4f02', 'Nakamura', '4df4947823805e380d4a'),
('d040ff60bdd4c7ba4f02', 'Styles', '408f00f684e4d2485ece'),
('d040ff60bdd4c7ba4f02', 'Mysterio', '9d08e860bb1288b89a1e'),
('d040ff60bdd4c7ba4f02', 'Otis', 'e50542669afdf55f08ba'),
('c7a7aebeb5427ea37c7c', 'Reigns', 'f464cdc72cf0d7935bf0'),
('c7a7aebeb5427ea37c7c', 'Lesnar', 'eb885532c7c96a93008a'),
('c7a7aebeb5427ea37c7c', 'Kingston', '1e77994dbec55809b051'),
('c7a7aebeb5427ea37c7c', 'Woods', '334655e5e7d2a6eb2cc8'),
('242ae070d2991b83aaea', 'Triple H', '7e04813611f1b8939edb'),
('242ae070d2991b83aaea', 'Jericho', 'c12ab6604b3929def3b9'),
('242ae070d2991b83aaea', 'Orton', 'f756dfe6435f1731e0c5'),
('242ae070d2991b83aaea', 'McIntyre', 'f5bc3c3dafaea0d24738'),
('b1a916ebbd829cd83291', 'Savage', 'b76bca25171c828def35'),
('b1a916ebbd829cd83291', 'Flair', '8c297589300c4b559c9d'),
('b1a916ebbd829cd83291', 'Foley', 'b6cb166296bbe15f445c'),
('b1a916ebbd829cd83291', 'Kane', 'ac3a966ce20b9497d0e0');

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
('e9b66d13c832b75e76f2', '7c1648e7adb2cdbb8818', 'Test 1', 'bdb07e7ce335fd8fa55d'),
('e9b66d13c832b75e76f2', 'c67e622119307a1b132f', 'Test 2', 'be0c415ab3da88709fda'),
('e9b66d13c832b75e76f2', 'a1bbe530aa0bd1766868', 'Test 3', '6070334be6a7a368dc84'),
('a0bac09c86ee6318d502', '38950f191abd9131d20a', 'Test 1', '0cdda5f8fb87a7549331'),
('a0bac09c86ee6318d502', 'afd2559223d6145be407', 'Test 2', '607b5b334ee2dee292c1'),
('a0bac09c86ee6318d502', 'b278c96e5e2ea370b0fe', 'Test 3', 'd6599a399ecff8f2ad8a'),
('a0bac09c86ee6318d502', '8d3111db73908402a387', 'Test 4', 'e9f958a1349eb4a743e9'),
('a0bac09c86ee6318d502', '56a5c18b8371b3038c72', 'Test 5', '71a1e5d171a06fc75fcf'),
('a0bac09c86ee6318d502', '83b5cdcca134f7d0a02a', 'Test 6', '390a2e1f12ac78742b2a'),
('a0bac09c86ee6318d502', 'abc2e241a6d7166a0239', 'Test 7', '77f6a12a03b2805b631c'),
('a0bac09c86ee6318d502', 'ab1f8dc5a40179a6e907', 'Test 8', '41e67bb5f47e2d03afb4'),
('a0bac09c86ee6318d502', '37b260e8a57c6b53b061', 'Test 9', '2d956df716d118309a53'),
('a0bac09c86ee6318d502', '19513009dc8c760a8d27', 'Test 10', '9b23db51f226474291c3'),
('cd603fa88cb3a6c1453f', '90e79aacd9e82d949a0b', 'WWE Champ', '28898d115878ed4d5309'),
('cd603fa88cb3a6c1453f', 'd040ff60bdd4c7ba4f02', 'Intercontinental Champ', '4df4947823805e380d4a'),
('cd603fa88cb3a6c1453f', 'c7a7aebeb5427ea37c7c', 'Universal Champ', 'f464cdc72cf0d7935bf0'),
('cd603fa88cb3a6c1453f', '242ae070d2991b83aaea', 'Retired', '7e04813611f1b8939edb'),
('cd603fa88cb3a6c1453f', 'b1a916ebbd829cd83291', 'Dead', 'b76bca25171c828def35');

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
(2, 'Law', 'Marshall', 'TekkenGod', '2022-12-31', 'ac8de3b5b736fd627b42c91071c5c2a6ec963a89', 1, 'yumangdanne@gmail.com', 'e1b36a71277262ca5d3ea8e61d28abfe'),
(3, 'Johnny', 'Knoxville', 'BadGrampa', '2022-12-31', 'ac8de3b5b736fd627b42c91071c5c2a6ec963a89', 1, 'jackass011gaming@gmail.com', 'e94662cf48f13cc876efe0e78e2ab44d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `exam_details_table`
--
ALTER TABLE `exam_details_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_name`
--
ALTER TABLE `tbl_name`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `exam_details_table`
--
ALTER TABLE `exam_details_table`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_name`
--
ALTER TABLE `tbl_name`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
