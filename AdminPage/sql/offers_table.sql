-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 09:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ad_handiya`
--

-- --------------------------------------------------------

--
-- Table structure for table `offers_table`
--

CREATE TABLE `offers_table` (
  `ID` int(11) NOT NULL,
  `OfferType` varchar(20) NOT NULL,
  `OffersPlan` varchar(20) NOT NULL,
  `Description` varchar(60) NOT NULL,
  `Deadline` date NOT NULL,
  `Promo Code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers_table`
--

INSERT INTO `offers_table` (`ID`, `OfferType`, `OffersPlan`, `Description`, `Deadline`, `Promo Code`) VALUES
(17, 'Silver', '50% OFF', 'Apply only for Electronics items.', '2024-05-09', 'PRM#123'),
(18, 'Gold', '75% OFF', 'Apply for Vehicles category Only', '2024-05-08', 'PRM#456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `offers_table`
--
ALTER TABLE `offers_table`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `offers_table`
--
ALTER TABLE `offers_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
