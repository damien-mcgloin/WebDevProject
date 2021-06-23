-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 04:43 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dmcgloin01`
--

-- --------------------------------------------------------

--
-- Table structure for table `OhComplaints`
--

CREATE TABLE `OhComplaints` (
  `ComplaintID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `complaint` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OhComplaints`
--

INSERT INTO `OhComplaints` (`ComplaintID`, `email`, `complaint`) VALUES
(1, 'damien@gmail.com', 'my copy of diablo isn\'t working'),
(2, 'damien@gmail.com', 'my game isn\'t working'),
(7, 'help', 'help'),
(8, 'help', 'help'),
(13, '', ''),
(14, '', ''),
(15, '', ''),
(16, 'test', 'test'),
(17, 'testagain', 'testagain'),
(18, 'test3', 'test3'),
(19, 'test4', 'test4'),
(20, 'test6', 'test6'),
(21, 'hi', 'test'),
(22, '', ''),
(23, 'dfghj', 'xcfghj'),
(24, '', ''),
(25, 'test', 'test'),
(26, 'test', 'test'),
(27, 'damien@damien.com', 'my game doesn\'t work'),
(28, 'johnmail.com', 'my game isn\'t working'),
(29, 'damien@gmail', 'hi john!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OhComplaints`
--
ALTER TABLE `OhComplaints`
  ADD PRIMARY KEY (`ComplaintID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OhComplaints`
--
ALTER TABLE `OhComplaints`
  MODIFY `ComplaintID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
