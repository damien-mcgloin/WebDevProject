-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 04:48 PM
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
-- Table structure for table `OhUserDetails`
--

CREATE TABLE `OhUserDetails` (
  `UserDetailsID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `domain` varchar(50) NOT NULL,
  `UserTypeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OhUserDetails`
--

INSERT INTO `OhUserDetails` (`UserDetailsID`, `username`, `password`, `email`, `domain`, `UserTypeID`) VALUES
(1, 'sdfgh', '6ba667f2e5fb6e2e9a9edd14f49a3d53', 'sdfgh', '@gmail.com', 1),
(2, 'pizza', '7cf2db5ec261a0fa27a502d3196a6f60', 'pizza', '@gmail.com', 1),
(3, 'pizza2', '41e234c745bb909ea142727d704787f6', 'pizza2', 'gmail.com', 1),
(6, 'test', '098f6bcd4621d373cade4e832627b4f6', 'test', 'test', 1),
(11, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user', 1),
(12, 'pat', '7852341745c93238222a65a910d1dcc5', 'pat', 'pat', 1),
(14, 'new', '22af645d1859cb5ca6da0c484f1f37ea', 'new', 'new', 1),
(15, 'phil', 'd14ffd41334ec4b4b3f2c0d55c38be6f', 'phil', 'phil', 1),
(17, 'john', 'c40676b7896fd472849098ba5120c6ab', 'john', 'johnmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OhUserDetails`
--
ALTER TABLE `OhUserDetails`
  ADD PRIMARY KEY (`UserDetailsID`),
  ADD KEY `FK_UserTypeID` (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OhUserDetails`
--
ALTER TABLE `OhUserDetails`
  MODIFY `UserDetailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OhUserDetails`
--
ALTER TABLE `OhUserDetails`
  ADD CONSTRAINT `FK_UserTypeID` FOREIGN KEY (`UserTypeID`) REFERENCES `OhUserType` (`UserTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
