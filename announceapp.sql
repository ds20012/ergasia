-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2022 at 04:37 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `announceapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ArticleID` int(11) NOT NULL,
  `Author` varchar(20) NOT NULL,
  `Text` varchar(200) NOT NULL,
  `DatePosted` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`ArticleID`, `Author`, `Text`, `DatePosted`) VALUES
(29, 'Helen Vraskali', 'Hello everyone', '2022-01-01'),
(30, 'George Mendes', 'Hello guys welcome to the university our class will start today as usual', '2022-01-01'),
(31, 'Tzina Pataki', 'Dear students , class is canceled for today ', '2022-01-01'),
(32, 'Jack dunderman', 'Hello guys', '2022-01-01'),
(33, 'Jack dunderman', 'No lessons because of covid', '2022-01-01'),
(38, 'Jeff Dunhamm', 'Hello my dear people , lets start the show', '2022-01-01'),
(39, 'Jack dunderman', 'Dear students hello', '2022-01-04'),
(40, 'Teacher1', 'Dear students hello', '2022-01-11'),
(41, 'Jack dunderman', 'my text', '2022-01-11'),
(42, 'dimitris', 'Hello my people', '2022-01-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ArticleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
