-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 02:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `T1Id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`T1Id`, `Name`) VALUES
(1, 'Dipankar Das'),
(2, 'John Smith'),
(3, 'Steven'),
(4, 'Abhishek');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `T2Id` int(10) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`T2Id`, `UserName`, `Password`) VALUES
(1, 'dipankar12', 'e2b2628a1db6f0d21c7d2f7f18b68314'),
(2, 'john1', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Gerrard', 'adcaec3805aa912c0d0b14a81bedb6ff'),
(4, 'abhishek1', 'f589a6959f3e04037eb2b3eb0ff726ac');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `SNo` int(10) NOT NULL,
  `T3Id` int(10) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Article` longtext NOT NULL,
  `Upvotes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table3`
--

-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`T1Id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`T2Id`);

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `T1Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `T2Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `SNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
