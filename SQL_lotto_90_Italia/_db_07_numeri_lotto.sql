-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 01, 2022 at 01:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lotto_90_Italia`
--

-- --------------------------------------------------------

--
-- Table structure for table `numeri_lotto`
--

CREATE TABLE `numeri_lotto` (
  `id` int(2) NOT NULL,
  `nr` int(2) DEFAULT NULL,
  `nr_c1` int(1) DEFAULT NULL,
  `nr_c2` int(1) DEFAULT NULL,
  `valcifre` int(2) DEFAULT NULL,
  `valore` int(2) DEFAULT NULL,
  `distanza` int(2) DEFAULT NULL,
  `dp` int(11) NOT NULL,
  `di` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `numeri_lotto`
--

INSERT INTO `numeri_lotto` (`id`, `nr`, `nr_c1`, `nr_c2`, `valcifre`, `valore`, `distanza`, `dp`, `di`) VALUES
(1, 1, 0, 1, 1, 1, 1, 0, 1),
(2, 2, 0, 2, 2, 2, 2, 1, 0),
(3, 3, 0, 3, 3, 3, 3, 0, 1),
(4, 4, 0, 4, 4, 4, 4, 1, 0),
(5, 5, 0, 5, 5, 5, 5, 0, 1),
(6, 6, 0, 6, 6, 6, 6, 1, 0),
(7, 7, 0, 7, 7, 7, 7, 0, 1),
(8, 8, 0, 8, 8, 8, 8, 1, 0),
(9, 9, 0, 9, 9, 9, 9, 0, 1),
(10, 10, 1, 0, 1, 1, 1, 0, 1),
(11, 11, 1, 1, 2, 2, 0, 1, 0),
(12, 12, 1, 2, 3, 3, 1, 0, 1),
(13, 13, 1, 3, 4, 4, 2, 1, 0),
(14, 14, 1, 4, 5, 5, 3, 0, 1),
(15, 15, 1, 5, 6, 6, 4, 1, 0),
(16, 16, 1, 6, 7, 7, 5, 0, 1),
(17, 17, 1, 7, 8, 8, 6, 1, 0),
(18, 18, 1, 8, 9, 9, 7, 0, 1),
(19, 19, 1, 9, 10, 1, 8, 1, 0),
(20, 20, 2, 0, 2, 2, 2, 1, 0),
(21, 21, 2, 1, 3, 3, 1, 0, 1),
(22, 22, 2, 2, 4, 4, 0, 1, 0),
(23, 23, 2, 3, 5, 5, 1, 0, 1),
(24, 24, 2, 4, 6, 6, 2, 1, 0),
(25, 25, 2, 5, 7, 7, 3, 0, 1),
(26, 26, 2, 6, 8, 8, 4, 1, 0),
(27, 27, 2, 7, 9, 9, 5, 0, 1),
(28, 28, 2, 8, 10, 1, 6, 1, 0),
(29, 29, 2, 9, 11, 2, 7, 0, 1),
(30, 30, 3, 0, 3, 3, 3, 0, 1),
(31, 31, 3, 1, 4, 4, 2, 1, 0),
(32, 32, 3, 2, 5, 5, 1, 0, 1),
(33, 33, 3, 3, 6, 6, 0, 1, 0),
(34, 34, 3, 4, 7, 7, 1, 0, 1),
(35, 35, 3, 5, 8, 8, 2, 1, 0),
(36, 36, 3, 6, 9, 9, 3, 0, 1),
(37, 37, 3, 7, 10, 1, 4, 1, 0),
(38, 38, 3, 8, 11, 2, 5, 0, 1),
(39, 39, 3, 9, 12, 3, 6, 1, 0),
(40, 40, 4, 0, 4, 4, 4, 1, 0),
(41, 41, 4, 1, 5, 5, 3, 0, 1),
(42, 42, 4, 2, 6, 6, 2, 1, 0),
(43, 43, 4, 3, 7, 7, 1, 0, 1),
(44, 44, 4, 4, 8, 8, 0, 1, 0),
(45, 45, 4, 5, 9, 9, 1, 0, 1),
(46, 46, 4, 6, 10, 1, 2, 1, 0),
(47, 47, 4, 7, 11, 2, 3, 0, 1),
(48, 48, 4, 8, 12, 3, 4, 1, 0),
(49, 49, 4, 9, 13, 4, 5, 0, 1),
(50, 50, 5, 0, 5, 5, 5, 0, 1),
(51, 51, 5, 1, 6, 6, 4, 1, 0),
(52, 52, 5, 2, 7, 7, 3, 0, 1),
(53, 53, 5, 3, 8, 8, 2, 1, 0),
(54, 54, 5, 4, 9, 9, 1, 0, 1),
(55, 55, 5, 5, 10, 1, 0, 1, 0),
(56, 56, 5, 6, 11, 2, 1, 0, 1),
(57, 57, 5, 7, 12, 3, 2, 1, 0),
(58, 58, 5, 8, 13, 4, 3, 0, 1),
(59, 59, 5, 9, 14, 5, 4, 1, 0),
(60, 60, 6, 0, 6, 6, 6, 1, 0),
(61, 61, 6, 1, 7, 7, 5, 0, 1),
(62, 62, 6, 2, 8, 8, 4, 1, 0),
(63, 63, 6, 3, 9, 9, 3, 0, 1),
(64, 64, 6, 4, 10, 1, 2, 1, 0),
(65, 65, 6, 5, 11, 2, 1, 0, 1),
(66, 66, 6, 6, 12, 3, 0, 1, 0),
(67, 67, 6, 7, 13, 4, 1, 0, 1),
(68, 68, 6, 8, 14, 5, 2, 1, 0),
(69, 69, 6, 9, 15, 6, 3, 0, 1),
(70, 70, 7, 0, 7, 7, 7, 0, 1),
(71, 71, 7, 1, 8, 8, 6, 1, 0),
(72, 72, 7, 2, 9, 9, 5, 0, 1),
(73, 73, 7, 3, 10, 1, 4, 1, 0),
(74, 74, 7, 4, 11, 2, 3, 0, 1),
(75, 75, 7, 5, 12, 3, 2, 1, 0),
(76, 76, 7, 6, 13, 4, 1, 0, 1),
(77, 77, 7, 7, 14, 5, 0, 1, 0),
(78, 78, 7, 8, 15, 6, 1, 0, 1),
(79, 79, 7, 9, 16, 7, 2, 1, 0),
(80, 80, 8, 0, 17, 8, 8, 1, 0),
(81, 81, 8, 1, 9, 9, 7, 0, 1),
(82, 82, 8, 2, 10, 1, 6, 1, 0),
(83, 83, 8, 3, 11, 2, 5, 0, 1),
(84, 84, 8, 4, 12, 3, 4, 1, 0),
(85, 85, 8, 5, 13, 4, 3, 0, 1),
(86, 86, 8, 6, 14, 5, 2, 1, 0),
(87, 87, 8, 7, 15, 6, 1, 0, 1),
(88, 88, 8, 8, 16, 7, 0, 1, 0),
(89, 89, 8, 9, 17, 8, 1, 0, 1),
(90, 90, 9, 0, 9, 9, 9, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `numeri_lotto`
--
ALTER TABLE `numeri_lotto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `numeri_lotto`
--
ALTER TABLE `numeri_lotto`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
