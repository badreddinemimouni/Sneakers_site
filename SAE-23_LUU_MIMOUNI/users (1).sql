-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 08, 2023 at 06:52 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(2) NOT NULL,
  `nom` varchar(150) NOT NULL,
  `Stock` int(5) NOT NULL,
  `pointure` int(2) NOT NULL,
  `prix` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `nom`, `Stock`, `pointure`, `prix`) VALUES
(15, 'New Balance 550', 58, 36, 39.45),
(16, 'Air Max 90', 39, 37, 45),
(17, 'Nike Dunk Low Celtics', 250, 36, 15.16),
(31, 'Nike Dunk Low Celtics ', 14, 40, 15.25),
(32, 'Air Max 90 ', 246, 36, 156),
(33, 'Air Max 90 ', 15, 39, 15.25),
(34, 'Nike Dunk Low Celtics ', 15, 37, 15.25),
(35, 'Nike Dunk Low Celtics ', 21, 38, 155),
(36, 'Air Max 90 ', 14, 38, 158);

-- --------------------------------------------------------

--
-- Table structure for table `user_site`
--

CREATE TABLE `user_site` (
  `user_id` int(11) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(128) NOT NULL,
  `Grade` varchar(20) NOT NULL DEFAULT 'client'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_site`
--

INSERT INTO `user_site` (`user_id`, `prenom`, `nom`, `email`, `password`, `Grade`) VALUES
(1, 'Badr mimouni', '', 'badr_mim@outlook.fr', 'devine', ''),
(37, 'admin', 'admin', 'admin@sneakersaddict.com', 'adminBeziers', 'admin'),
(39, 'Mimouni', 'Badr-Eddine', 'nbad@mail.com', 'badr', 'client'),
(66, 'Mimouni', 'Badr-Eddine', 'badr@mail.com', 'badr', 'client'),
(67, 'Mimouni', 'Badr-Eddine', 'badr1@mail.com', 'badr', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_site`
--
ALTER TABLE `user_site`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `user_site`
--
ALTER TABLE `user_site`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
