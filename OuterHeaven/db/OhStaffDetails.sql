-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 04:47 PM
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
-- Table structure for table `OhStaffDetails`
--

CREATE TABLE `OhStaffDetails` (
  `StaffDetailsID` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `UserTypeID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OhStaffDetails`
--

INSERT INTO `OhStaffDetails` (`StaffDetailsID`, `username`, `password`, `email`, `UserTypeID`) VALUES
(1, 'admin1', '482c811da5d5b4bc6d497ffa98491e38', 'ohstaff1@gmail.com', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OhStaffDetails`
--
ALTER TABLE `OhStaffDetails`
  ADD PRIMARY KEY (`StaffDetailsID`),
  ADD KEY `FK_UserTypeID2` (`UserTypeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OhStaffDetails`
--
ALTER TABLE `OhStaffDetails`
  MODIFY `StaffDetailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OhStaffDetails`
--
ALTER TABLE `OhStaffDetails`
  ADD CONSTRAINT `FK_UserTypeID2` FOREIGN KEY (`UserTypeID`) REFERENCES `OhUserType` (`UserTypeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
