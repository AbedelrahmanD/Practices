-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2022 at 07:23 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_manangment`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'zzz', '123'),
(3, 'abed', '123'),
(5, 'abed', '123'),
(6, 'abed', '123'),
(7, 'abed', '1234'),
(8, 'abed', '1234'),
(10, 'aaa', 'bbb'),
(11, 'a', '$2y$10$xgQ9NawHKPTKEdZYZfkf9.H3Dyu276TKMZD1IbVXAp28gVnbSdULu'),
(12, 'a', '$2y$10$pkODqH2Aqd4FOpdpIz4YlerNN61b4SpbCaDjmiB89drM.ExcTQq3u'),
(13, 'a', '$2y$10$tMefxsJxpwDIpYoTKp0Kz.z2hqU5TBEDcWt0tcQxpDRidGqpmL24.'),
(14, 'a', '$2y$10$fxY0f/27R2AytfC84tr3POHv4zuKskYut6f8sspXhEGHJ8doSCW5a'),
(15, 'as', '$2y$10$UVXCJIp9lLQNP0BagPBmJ.OLcc5uaSspuKrrF0iTUNXxjdc9mttw2'),
(16, 'asw', '$2y$10$udTDwWES6SOkTcFdS7wCoeePFniL3NxiayAxHolJ1Ns/xBY2ok.4.'),
(17, 'zzz1', '$2y$10$bWFTIUtLmR.nUbAFcHbF5e4vFcK87/VOdsDAunFFjPtEMdZbuwV3S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
