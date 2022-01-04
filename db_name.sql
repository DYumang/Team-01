-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:33 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

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
(33, 'Hammy', 'Hamster', 'hami', '2021-12-14', '8cb2237d0679ca88db6464eac60da96345513964');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
