-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2022 at 08:40 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `e_id` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pg_owner`
--

CREATE TABLE `pg_owner` (
  `id` int(5) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pg_owner`
--

INSERT INTO `pg_owner` (`id`, `Email`, `Password`, `Name`) VALUES
(1, 'admin@gmail.com', '77777', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `resources`
--

CREATE TABLE `resources` (
  `id` int(5) NOT NULL,
  `R_name` varchar(5000) NOT NULL,
  `R_address` varchar(5000) NOT NULL,
  `R_image` mediumtext NOT NULL,
  `R_price` int(5) NOT NULL,
  `R_occupant` int(11) NOT NULL,
  `R_name_pl` varchar(2000) NOT NULL,
  `R_address_pl` varchar(5000) NOT NULL,
  `pname` varchar(5000) NOT NULL,
  `pname_pl` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resources`
--

INSERT INTO `resources` (`id`, `R_name`, `R_address`, `R_image`, `R_price`, `R_occupant`, `R_name_pl`, `R_address_pl`, `pname`, `pname_pl`) VALUES
(1, 'Tenament', 'Cybernetyki 17, 02-677 Warszawa, Poland', 'upload/home_01.jpg', 500, 2, 'kamienica', 'Cybernetyki 17, 02-677 Warszawa, Polska', 'New 2 rooms apartment (48 m2) finished.', ' Nowe 2 pokojowe mieszkanie (48m2) wyko?czone w NAJWY?SZYM .'),
(2, 'Tenament', 'Witolin, Warsaw', 'upload/villa-4555824_1920.jpg', 2000, 4, 'kamienica', 'Witolin, Warszawa', 'Room for rent in 7-bedroom apartment', 'Do wynaj?cia pokój w mieszkaniu 7 pokojowym'),
(5, 'Bunglows', 'Kamionek', 'upload/home_03.jpg', 5200, 4, 'Domki letniskowe', 'Kamionek', 'Rooms for rent in 3-bedroom', 'Do wynaj?cia pokoje 3-pokojowe'),
(6, 'Flat', 'OGRODOWA 49 in warszawa', 'upload/slider_01.jpg', 4000, 4, 'plo', 'OGRODOWEJ 49 w warszawie', '2 BEDROOM FLAT', 'MIESZKANIE Z 2 POKOJAMI'),
(8, '1', '', 'upload/', 0, 0, 'Mestey', '', 'Mestey', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `pg_owner`
--
ALTER TABLE `pg_owner`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `resources`
--
ALTER TABLE `resources`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `e_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pg_owner`
--
ALTER TABLE `pg_owner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resources`
--
ALTER TABLE `resources`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
