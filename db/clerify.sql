-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2018 at 08:08 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clerify`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cdid` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `posted_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `uname` varchar(1000) NOT NULL,
  `quid` int(11) NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cdid`, `comment`, `posted_date`, `uname`, `quid`, `likes`) VALUES
(15, 'zxczzczc', '2018-03-02 17:19:27', 'walboyz', 70, 17),
(16, 'dilanii\r\n', '2018-02-10 06:08:56', 'walboyz', 68, 0),
(41, 'bcvbb', '2018-03-02 17:19:32', 'jay123', 70, 5),
(42, 'bcvbb', '2018-02-10 11:51:14', 'jay123', 70, 1),
(52, 'heloo', '2018-02-10 18:15:52', 'jay123', 69, 2),
(54, 'sdffsdfss', '2018-02-10 09:15:00', 'jay123', 70, 0),
(64, 'giakshaaaaaaaaa', '2018-02-10 10:00:23', 'sonalfer', 70, 0),
(99, 'asdaddasdas', '2018-02-10 18:28:34', 'jay123', 70, 0),
(100, 'axsadsdasd', '2018-02-10 18:29:49', 'jay123', 70, 0),
(132, 'twinkle', '2018-02-11 18:02:27', 'jay123', 68, 1),
(133, 'cow', '2018-02-11 18:03:32', 'jay123', 70, 1),
(134, 'dick', '2018-02-11 18:04:26', 'jay123', 70, 1),
(135, 'dick\r\n', '2018-02-11 18:13:28', 'jay123', 70, 3),
(136, 'sddads', '2018-02-11 18:10:04', 'jay123', 70, 0),
(137, 'asadsads', '2018-02-11 18:11:08', 'jay123', 70, 0),
(138, 'sadsdad', '2018-02-11 18:12:03', 'jay123', 70, 0),
(139, 'sdasda', '2018-02-11 18:12:06', 'jay123', 70, 0),
(140, 'xcxs\r\n', '2018-03-02 16:24:06', 'walboyz', 70, 0),
(141, 'dilanii', '2018-03-02 16:24:15', 'walboyz', 70, 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `mid` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(486) NOT NULL,
  `username` varchar(486) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`mid`, `name`, `email`, `username`, `password`) VALUES
(1, 'jayanga', 'jayanga.sl@gmail.com', 'jay123', '$2y$10$kmewjhOMfQq//zp9lkXRD.aEiBzcInlz4Qug/qWTY5r/h3CxH08ki'),
(17, 'Twinkle Fernando', 'twinky@gmail.com', 'twinky', '$2y$10$PO3qgGPY8tfUYGn0cBs9LugJtve5ApZ0h2FvrARmgOc6pgb2mIZ9W'),
(21, 'Soanl Fernando', 'james@gmail.com', 'sonalfer', '$2y$10$4MXFkqDjF3Ogu4k1svpRNupxmZG3msED/0LzhiHagFBUS/hhInavq'),
(22, 'Giaksha Antony', 'giakshaantony@gmail.com', 'giakshaantony', '$2y$10$xyBLs3rwafIznxAL1hC6SOhEMoX4OIhSHicprD3Rv5WLPjO17q672'),
(113, 'Lahiru Randika', 'walrandika@nsbm.lk', 'walboyz', '$2y$10$PJkI5Y0S/qngduVql8M37OQdzQGES2eAhqIOLT/Tm0MDWQa0RUcUa');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(6) UNSIGNED NOT NULL,
  `question` varchar(1024) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `mid` int(11) DEFAULT NULL,
  `mname` varchar(255) DEFAULT NULL,
  `musername` varchar(248) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `category`, `post_date`, `mid`, `mname`, `musername`) VALUES
(41, 'What is Multi plexing', 'Computer Networks', '2018-02-08 14:55:52', 1, 'jayanga', 'jay123'),
(42, 'Recommend some good sites for php tutorials', 'Software Engineering', '2018-02-08 14:55:52', 1, 'jayanga', 'jay123'),
(48, 'How to add a comment Howsdsds to add a comment How to adsdasd a comment', 'Administration', '2018-02-08 14:56:51', 1, 'jayanga', 'jay123'),
(63, 'How to go to Nugegoda', 'Transport', '2018-02-08 19:20:44', 1, 'jayanga', 'jay123'),
(68, 'what is profit and loss', 'Business Management', '2018-02-08 19:27:37', 1, 'jayanga', 'jay123'),
(69, 'how ot create pay roll system', 'Human Resource', '2018-02-08 19:27:54', 1, 'jayanga', 'jay123'),
(70, 'how to get exam admission', 'Administration', '2018-02-08 19:29:20', 1, 'jayanga', 'jay123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cdid`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cdid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
