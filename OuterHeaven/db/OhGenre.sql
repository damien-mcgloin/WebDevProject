-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 04:44 PM
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
-- Table structure for table `OhGenre`
--

CREATE TABLE `OhGenre` (
  `GenreID` int(11) NOT NULL,
  `Genre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OhGenre`
--

INSERT INTO `OhGenre` (`GenreID`, `Genre`) VALUES
(1, 'Action'),
(2, 'Strategy'),
(3, 'RPG'),
(4, 'Animation'),
(5, 'Casual'),
(6, 'Simulation'),
(7, 'Racing'),
(8, 'Adventure'),
(9, 'Violent'),
(10, 'Free'),
(11, 'Sports'),
(12, 'Gore'),
(13, 'Multiplayer'),
(14, 'Utilities'),
(15, 'Design'),
(16, 'Education'),
(17, 'Publishing'),
(18, 'Audio'),
(19, 'Photo'),
(20, 'Early'),
(21, 'Indie');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OhGenre`
--
ALTER TABLE `OhGenre`
  ADD PRIMARY KEY (`GenreID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OhGenre`
--
ALTER TABLE `OhGenre`
  MODIFY `GenreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
