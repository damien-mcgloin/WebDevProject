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
-- Table structure for table `OhPostTopic`
--

CREATE TABLE `OhPostTopic` (
  `PostTopicID` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `PostTypeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OhPostTopic`
--

INSERT INTO `OhPostTopic` (`PostTopicID`, `topic`, `PostTypeID`) VALUES
(1, 'General Discussion', 1),
(2, 'Gaming Deals Thread', 1),
(5, 'Recent Updates', 1),
(6, 'Games (unofficially) confirmed for OH release', 1),
(7, 'Community Wishlist', 1),
(8, 'Download Codes', 1),
(9, 'Monthly Free Games', 1),
(10, 'Community Giveaways', 1),
(11, 'Outer Heaven Feedback', 1),
(12, 'The complain about life in general thread', 1),
(13, 'Monster Hunter World', 2),
(14, 'Baldur\'s Gate Series', 2),
(15, 'Resident Evil 8: Village', 2),
(16, 'Neverwinter Nights Series', 2),
(17, 'Indie Nation', 2),
(18, 'Fallout Series', 2),
(19, 'Metal Gear Solid', 2),
(20, 'The Witcher 2', 2),
(21, 'The Elder Scrolls', 2),
(22, 'The Witcher 3: Wild Hunt', 2),
(23, 'Shin Megami Tensei V', 3),
(24, 'Returnal', 3),
(25, 'Ghostwire Tokyo', 3),
(26, 'Breath of the Wild 2', 3),
(27, 'Halo Infinite', 3),
(28, 'Final Fantasy 7 Remake Part 2', 3),
(29, 'God Of War Ragnarok', 3),
(30, 'Biomutant', 3),
(31, 'Hellblade 2 Senua\'s Saga', 3),
(32, 'Horizon Forbidden West', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OhPostTopic`
--
ALTER TABLE `OhPostTopic`
  ADD PRIMARY KEY (`PostTopicID`),
  ADD KEY `FK_PostTypeID` (`PostTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OhPostTopic`
--
ALTER TABLE `OhPostTopic`
  MODIFY `PostTopicID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OhPostTopic`
--
ALTER TABLE `OhPostTopic`
  ADD CONSTRAINT `FK_PostTypeID` FOREIGN KEY (`PostTypeID`) REFERENCES `OhPostType` (`PostTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
