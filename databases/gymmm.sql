-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 05:18 AM
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
-- Database: `gymmm`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`username`, `password`) VALUES
('rutu@gmail.com', 'rutu');

-- --------------------------------------------------------

--
-- Table structure for table `instruments`
--

CREATE TABLE `instruments` (
  `i_id` int(10) NOT NULL,
  `lname_instru` varchar(30) NOT NULL,
  `no_of_quantity` int(10) NOT NULL,
  `condition_instru` varchar(30) NOT NULL,
  `damaged_instru` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instruments`
--

INSERT INTO `instruments` (`i_id`, `lname_instru`, `no_of_quantity`, `condition_instru`, `damaged_instru`) VALUES
(1, '', 0, '', 0),
(2, '', 0, '', 0),
(3, '', 0, '', 0),
(4, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(22) NOT NULL,
  `lname` varchar(22) NOT NULL,
  `gender` varchar(22) NOT NULL,
  `cnum` varchar(22) NOT NULL,
  `address` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  `pass` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `gender`, `cnum`, `address`, `email`, `pass`) VALUES
(1, 'rutuja', 'kute', ' female', '8767690537', 'saikheda', 'kuterutuja@gmail.com', 'rutuja'),
(5, 'vaishu', 'nerpgar', ' female', '87766789', 'chandori', 'vaishu@gmail.com', 'vaishu'),
(6, 'divya', 'thakare', ' female', '8767907654', 'odha', 'divya@gmail.com', 'divya'),
(7, 'rutuja', 'kute', ' female', '8767907654', 'saikheda', 'kuterutuja@gmail.com', 'rutu');

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

CREATE TABLE `membership` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `cnum` varchar(12) NOT NULL,
  `address` varchar(30) NOT NULL,
  `membership_plan` varchar(22) NOT NULL,
  `membership_price` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `name`, `email`, `cnum`, `address`, `membership_plan`, `membership_price`) VALUES
(9, ' divya thakare', 'divya@gmail.com', '8767907654', 'satana', 'Standard Plan', ' 500 Rs/Month');

-- --------------------------------------------------------

--
-- Table structure for table `traineer`
--

CREATE TABLE `traineer` (
  `tid` int(10) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `teducation` varchar(30) NOT NULL,
  `taddress` varchar(40) NOT NULL,
  `tsalary` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `traineer`
--

INSERT INTO `traineer` (`tid`, `tname`, `teducation`, `taddress`, `tsalary`) VALUES
(1, ',hfeh', ' jhkw', 'hfkweh', 11),
(2, 'ramesh', ' b tech', 'nashik', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `instruments`
--
ALTER TABLE `instruments`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership`
--
ALTER TABLE `membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traineer`
--
ALTER TABLE `traineer`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `instruments`
--
ALTER TABLE `instruments`
  MODIFY `i_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `membership`
--
ALTER TABLE `membership`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `traineer`
--
ALTER TABLE `traineer`
  MODIFY `tid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
