-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2021 at 05:50 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `osimeter`
--

-- --------------------------------------------------------

--
-- Table structure for table `osimeter`
--

CREATE TABLE `osimeter` (
  `id` int(11) NOT NULL,
  `suhu` int(11) DEFAULT NULL,
  `Heartbeet` int(11) DEFAULT NULL,
  `SO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `osimeter`
--

INSERT INTO `osimeter` (`id`, `suhu`, `Heartbeet`, `SO`) VALUES
(2, 12, 12, 12),
(4, 13, 36, 45),
(5, 10, 13, 9),
(6, 1, 2, 3),
(7, 100, 120, 200),
(8, 120, 10, 300);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `nik` int(25) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `kelurahan` varchar(50) DEFAULT NULL,
  `kota` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `nik`, `alamat`, `kelurahan`, `kota`) VALUES
(1, 'alfa', 123, 'jombang', 'medokan', 'situbondo'),
(2, 'ibnu', 2147483647, 'jobang', 'hfjfj', 'kofaokf'),
(3, 'abi', 123456, 'medokan', 'medokan', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `osimeter`
--
ALTER TABLE `osimeter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `osimeter`
--
ALTER TABLE `osimeter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
