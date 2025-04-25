-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2025 at 07:03 AM
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
-- Database: `soheil`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `admin`) VALUES
('soheil', 1387, 1);

-- --------------------------------------------------------

--
-- Table structure for table `modireat`
--

CREATE TABLE `modireat` (
  `name` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `ghymat` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` int(20) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`name`, `username`, `password`, `admin`) VALUES
('swsw', 'sa', 123, 0),
('swsw', 'sa', 1385, 0),
('ali', 'ali1', 123, 0),
('soheil', 'soheil', 1387, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sellform`
--

CREATE TABLE `sellform` (
  `name` varchar(20) NOT NULL,
  `number` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `code_mahsol` int(11) NOT NULL,
  `Emeil` varchar(30) NOT NULL,
  `ghymat` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sellform`
--

INSERT INTO `sellform` (`name`, `number`, `address`, `code_mahsol`, `Emeil`, `ghymat`) VALUES
('shh', 91620, 'sdsdsd', 2, '@dad', 10000),
('shh', 91620, 'sdsdsd', 222, '', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `modireat`
--
ALTER TABLE `modireat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sellform`
--
ALTER TABLE `sellform`
  ADD PRIMARY KEY (`code_mahsol`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `modireat`
--
ALTER TABLE `modireat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
