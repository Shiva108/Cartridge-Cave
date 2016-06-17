-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 17, 2016 at 09:04 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `exam`
--
CREATE DATABASE IF NOT EXISTS `exam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `exam`;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `sender` int(255) NOT NULL,
  `receiver` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` varchar(255) NOT NULL,
  `feeling` varchar(255) NOT NULL,
  `msgid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`sender`, `receiver`, `title`, `text`, `feeling`, `msgid`) VALUES
(10, 8, 'title', 'Whats on your mind?', 'happy', 7),
(10, 8, 'title', 'Whats on your mind?', 'happy', 8),
(10, 8, 'test', 'test', 'chilled', 9),
(10, 11, 'title', 'Whats on your mind?', 'happy', 10),
(10, 12, 'title', 'Whats on your mind?', 'happy', 11),
(10, 10, 'title', 'Whats on your mind?', 'happy', 12),
(10, 10, 'title', 'Whats on your mind?', 'ginger', 13),
(11, 10, 'Drunk', 'Typical HU', 'High as fuck', 14),
(11, 11, 'High', 'fsdf', 'High as fuck', 15);

-- --------------------------------------------------------

--
-- Table structure for table `scoreboard`
--

DROP TABLE IF EXISTS `scoreboard`;
CREATE TABLE `scoreboard` (
  `scoreid` int(255) NOT NULL,
  `game` varchar(255) NOT NULL,
  `highscore` bigint(255) NOT NULL,
  `userid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scoreboard`
--

INSERT INTO `scoreboard` (`scoreid`, `game`, `highscore`, `userid`) VALUES
(3, 'donkeykong', 1234, 11),
(4, 'donkeykong', 22, 11),
(5, 'donkeykong', 654645645654, 10),
(6, 'donkeykong', 767, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` int(3) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `age`, `email`, `gender`, `password`) VALUES
(10, 0, 'tamas@test.dk', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
(11, 0, 'thomas@test.dk', 0, '81dc9bdb52d04dc20036dbd8313ed055'),
(12, 0, 'mathias@test.dk', 0, '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msgid`);

--
-- Indexes for table `scoreboard`
--
ALTER TABLE `scoreboard`
  ADD PRIMARY KEY (`scoreid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msgid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `scoreboard`
--
ALTER TABLE `scoreboard`
  MODIFY `scoreid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
