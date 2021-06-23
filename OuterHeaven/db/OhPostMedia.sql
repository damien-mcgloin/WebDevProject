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
-- Table structure for table `OhPostMedia`
--

CREATE TABLE `OhPostMedia` (
  `PostMediaID` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `PostTopicID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `OhPostMedia`
--

INSERT INTO `OhPostMedia` (`PostMediaID`, `image`, `PostTopicID`) VALUES
(1, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2F0d1efcf29ec4969e206b58b64770a25f.jpg?v=1614954019870', 13),
(2, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fmzl.ptabvcks.png?v=1614953582444', 14),
(3, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FFkzwjnJknkrFlozkTdeQBMub.webp?v=1614953829132', 15),
(4, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fneverwinter_nights_logo_by_savvid_d63v61f-fullview.jpg?v=1614953638366', 16),
(5, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Findie-game-nation-1400x1400-1024x1024-1.png?v=1614953885943', 17),
(6, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FebQCvI.jpg?v=1614953713346', 18),
(7, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2F579349.jpg?v=1614953953309', 19),
(8, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fd73y9zq-ba318b7d-bbc5-470b-8d18-e8872cbc23fe.png?v=1614952939442', 20),
(9, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fthumb-1920-593393.jpg?v=1614953772886', 21),
(10, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fthe%20witcher%203.webp?v=1614952814290', 22),
(11, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fproduct_smt_neither-human-nor-devil_longsleeve_designview_1024x1024.png?v=1614955088645', 23),
(12, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2F602G2eMHHKudXKkt4qohOMlk.jpeg?v=1614955374846', 24),
(13, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fghostwire-tokyo_Fotor.jpg?v=1614954726685', 25),
(14, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fpreviewfile_883404239.jpg?v=1614955160906', 26),
(15, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fhalo-infinite-box-art-1-1024x1024.png?v=1614954784357', 27),
(16, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Ffinal-fantasy-vii-remake---button-fin-1586205679705.jpg?v=1614955239586', 28),
(17, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fgod-of-war-ps4---button-1-1501203533464.jpg?v=1614954548076', 29),
(18, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2FBiomutant-critter-1024x1024.webp?v=1614954878995', 30),
(19, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fhellblade_senuas_sacrifice-artwork-1024x1024.jpg?v=1614955309016', 31),
(20, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fhorizon-forbidden-west-1024x1024_897988-mm-90.jpg?v=1614954640064', 32),
(21, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 1),
(22, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 2),
(23, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 5),
(24, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 6),
(25, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 7),
(26, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 8),
(27, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 9),
(28, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 10),
(29, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 11),
(30, 'https://cdn.glitch.com/f1678d51-50e6-4ba7-a0ab-ddd4a76e5657%2Fandroid-chrome-512x512.png?v=1614946056510', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `OhPostMedia`
--
ALTER TABLE `OhPostMedia`
  ADD PRIMARY KEY (`PostMediaID`),
  ADD KEY `FK_PostTopicID` (`PostTopicID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `OhPostMedia`
--
ALTER TABLE `OhPostMedia`
  MODIFY `PostMediaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `OhPostMedia`
--
ALTER TABLE `OhPostMedia`
  ADD CONSTRAINT `FK_PostTopicID` FOREIGN KEY (`PostTopicID`) REFERENCES `OhPostTopic` (`PostTopicID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
