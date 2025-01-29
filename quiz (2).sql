-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 30, 2024 at 11:46 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `quizmaze`
--

CREATE TABLE `quizmaze` (
  `sno` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizmaze`
--

INSERT INTO `quizmaze` (`sno`, `username`, `email`, `password`) VALUES
(44, 'student', 'aniketsable0508@gmail.com', '1'),
(45, 'aa', 'aa@gmail.com', 'aa'),
(46, 'raju', 'jewfk@gmail.com', 'raju'),
(47, 'Sanju ', 'sanju@gmail.com', 'sanju'),
(48, 'gaurav', 'gaurav@gmail.com', 'gaurav'),
(49, 'pooja', 'pooja@gmail.com', '123'),
(50, 'Madhura', 'madhura123@gmail.com', '2323'),
(51, '', '', ''),
(52, 'kk', 'kk@gmail.com', 'kk'),
(53, 'ds', 'aniketsable0508@gmail.com', 'ww'),
(54, 'aniket_sable3', 'aniket_sable3@gmail.com', 'LW@TCt8upC9X'),
(55, 'student', 'aniketsable0508@gmail.com', '111'),
(56, 'a', 'aniketsable0508@gmail.com', 'a'),
(57, 'dinesh', 'aniketsable0508@gmail.com', '111');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_scores`
--

CREATE TABLE `quiz_scores` (
  `score_id` int(11) NOT NULL,
  `sno` int(11) DEFAULT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quiz_scores`
--

INSERT INTO `quiz_scores` (`score_id`, `sno`, `score`) VALUES
(35, 44, 2),
(36, 45, 2),
(37, 45, 2),
(38, 45, 2),
(39, 46, 2),
(40, 46, 0),
(41, 47, 1),
(42, 48, 2),
(43, 49, 2),
(44, 51, 1),
(45, 52, 2),
(46, 56, 0),
(47, 56, 2),
(48, 56, 0);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `category_description` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id`, `username`, `category_description`) VALUES
(1, 'Aniket Sable', 'As a Instrumentation engineer i am having keen interest in measurement and… | Learn more about Aniket Sable\'s work experience, education, connections & more'),
(2, 'Vedant Pawashe', 'Student in chemical engineering in mumbai teach earlier student of class 12th'),
(3, 'Divy Patel', 'dfgfdggfdfgdfdgdfgfgd'),
(4, 'Shubham Pawar', 'Student in chemical engineering in mumbai teach earlier student of class 12th'),
(5, 'Aniket Machraker', 'Mumbai, Maharashtra, India · Senior Project Manager · TA Digital Worked as a Software Developer in Development Team in a Core Banking Project. Responsibilities: - Enhanced a Payment Capture S'),
(6, 'Ranjit Sir', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum'),
(7, 'Madhura Mhatre', 'aniket sable is very very kind person. '),
(8, 'Kamlesh Sable', 'dsfffffffffffffffffffffffffffffffff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quizmaze`
--
ALTER TABLE `quizmaze`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `quiz_scores`
--
ALTER TABLE `quiz_scores`
  ADD PRIMARY KEY (`score_id`),
  ADD KEY `sno` (`sno`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quizmaze`
--
ALTER TABLE `quizmaze`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `quiz_scores`
--
ALTER TABLE `quiz_scores`
  MODIFY `score_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `quiz_scores`
--
ALTER TABLE `quiz_scores`
  ADD CONSTRAINT `quiz_scores_ibfk_1` FOREIGN KEY (`sno`) REFERENCES `quizmaze` (`sno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
