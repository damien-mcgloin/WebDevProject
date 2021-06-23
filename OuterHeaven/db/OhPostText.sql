-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 04:46 PM
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
-- Table structure for table `OhPostText`
--

CREATE TABLE `OhPostText` (
  `PostTextID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `post` text NOT NULL,
  `PostTopicID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OhPostText`
--

INSERT INTO `OhPostText` (`PostTextID`, `user`, `post`, `PostTopicID`) VALUES
(1, 'TekHead', 'Well I know Nintendo didn\'t announce it at the anniversary but maybe E3?? What do you think guys?', 26),
(34, '', '', 26),
(35, '', '', 26),
(40, '', '', 26),
(44, 'pizza', 'test', 26),
(48, 'pizza', 'this is another test', 26),
(52, 'pizza', 'this is another test', 26),
(53, 'pizza', 'this is another another test', 26);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OhPostText`
--
ALTER TABLE `OhPostText`
  ADD PRIMARY KEY (`PostTextID`),
  ADD KEY `FK_PostTopicID1` (`PostTopicID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OhPostText`
--
ALTER TABLE `OhPostText`
  MODIFY `PostTextID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OhPostText`
--
ALTER TABLE `OhPostText`
  ADD CONSTRAINT `FK_PostTopicID1` FOREIGN KEY (`PostTopicID`) REFERENCES `OhPostTopic` (`PostTopicID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
