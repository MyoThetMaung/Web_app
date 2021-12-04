-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 01, 2020 at 06:04 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trs`
--

-- --------------------------------------------------------

--
-- Table structure for table `state_division`
--

CREATE TABLE `state_division` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state_division`
--

INSERT INTO `state_division` (`id`, `name`) VALUES
(1, 'Yangon'),
(2, 'Mandalay'),
(3, 'Nay Pyi Taw'),
(4, 'Sagaing');

-- --------------------------------------------------------

--
-- Table structure for table `township`
--

CREATE TABLE `township` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `state_division_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `township`
--

INSERT INTO `township` (`id`, `name`, `state_division_id`) VALUES
(1, 'Bahan', 1),
(2, 'Chan Myae Thar San', 2),
(3, 'Hlaing', 1),
(4, 'Kaw Lin', 4),
(5, 'Pote Pa Thiri', 3),
(6, 'Aung Myae Thar Zan', 2),
(7, 'Tarmwe', 1),
(8, 'Win Tho', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `state_division`
--
ALTER TABLE `state_division`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `township`
--
ALTER TABLE `township`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `state_division`
--
ALTER TABLE `state_division`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `township`
--
ALTER TABLE `township`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
