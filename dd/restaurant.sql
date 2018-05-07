-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 06:32 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(30) NOT NULL,
  `pwd` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `pwd`) VALUES
('admin01', 1234),
('admin02', 1234);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branchID` int(11) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branchID`, `location`) VALUES
(1, 'Dadar'),
(2, 'Colaba'),
(3, 'Juhu'),
(4, 'Thane');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `branchID` int(11) NOT NULL,
  `userID` varchar(30) NOT NULL,
  `pwd` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`branchID`, `userID`, `pwd`) VALUES
(1, 'admin01', '1234'),
(2, 'admin01', '1234'),
(3, 'admin01', '1234'),
(4, 'admin01', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `orderNo` int(11) NOT NULL,
  `branchID` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `branchID` int(11) NOT NULL,
  `userID` varchar(11) NOT NULL,
  `pwd` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`branchID`, `userID`, `pwd`) VALUES
(1, 'table01', '1234'),
(2, 'table01', '1234'),
(3, 'table01', '1234'),
(4, 'table01', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `menulist`
--

CREATE TABLE `menulist` (
  `menuID` int(11) NOT NULL,
  `menuName` varchar(256) DEFAULT NULL,
  `menuType` text,
  `fileName` varchar(256) NOT NULL,
  `path` varchar(256) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menulist`
--

INSERT INTO `menulist` (`menuID`, `menuName`, `menuType`, `fileName`, `path`, `price`) VALUES
(1, 'plat1', 'ajgd', '5a32c8feb032c2.42984334.jpeg', '../uploads/5a32c8feb032c2.42984334.jpeg', 234),
(5, 'plat4', 'ajgd', '5a3391739356d8.10857021.jpeg', '../uploads/5a3391739356d8.10857021.jpeg', 234),
(7, 'plat3', 'ajgd', '5a33918f166924.23451167.jpeg', '../uploads/5a33918f166924.23451167.jpeg', 234),
(8, 'plat2', 'ajgd', '5a3391b1a3eba1.82026632.jpeg', '../uploads/5a3391b1a3eba1.82026632.jpeg', 234);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderNo` int(11) NOT NULL,
  `branchID` int(11) NOT NULL,
  `tableNO` int(11) NOT NULL,
  `totalBill` int(11) NOT NULL,
  `stat` text NOT NULL,
  `plat1` int(11) DEFAULT '0',
  `plat4` int(11) DEFAULT '0',
  `plat3` int(11) DEFAULT '0',
  `plat2` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `adminID` (`adminID`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branchID`);

--
-- Indexes for table `menulist`
--
ALTER TABLE `menulist`
  ADD PRIMARY KEY (`menuID`),
  ADD UNIQUE KEY `menuName` (`menuName`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`orderNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menulist`
--
ALTER TABLE `menulist`
  MODIFY `menuID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `orderNo` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
