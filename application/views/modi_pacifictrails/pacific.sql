-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 05:41 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pacific`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `ACTIVITYID` varchar(10) NOT NULL,
  `ACTIVITYDESCRIPTION` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`ACTIVITYID`, `ACTIVITYDESCRIPTION`) VALUES
('1001', 'Hiking'),
('1002', 'Kayaking'),
('1003', 'Bird Watching');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `clientid` int(11) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `ADDRESS` varchar(30) DEFAULT NULL,
  `PHONE` varchar(10) NOT NULL,
  `EMAIL` varchar(320) NOT NULL,
  `RESID` int(11) DEFAULT NULL,
  `ACTIVITYID` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`clientid`, `FNAME`, `LNAME`, `ADDRESS`, `PHONE`, `EMAIL`, `RESID`, `ACTIVITYID`) VALUES
(6, 'Abhishek', 'Modi', NULL, '6823758774', 'aA@gmail.com', 6, '1002'),
(7, 'hiral', 'modi', NULL, '9887654321', 'h@af.com', 7, '1003'),
(8, 'jenil', 'desai', NULL, '1234554321', 'jd@jd.com', 8, '1002'),
(9, 'dhanish', 'desai', NULL, '8989898989', 'dh@fh.com', 9, '1003');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `PACKAGEID` int(11) NOT NULL,
  `PACKAGENAME` varchar(30) DEFAULT NULL,
  `PACKAGEDESCRIPTION` varchar(200) NOT NULL,
  `OFNIGHTS` int(11) DEFAULT NULL,
  `COST` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`PACKAGEID`, `PACKAGENAME`, `PACKAGEDESCRIPTION`, `OFNIGHTS`, `COST`) VALUES
(1, 'Weekend Escape', 'Two breakfasts, a trail map, a picnic snack', 2, 450),
(2, 'Zen Retreat', 'Four breakfasts, a trail map, a pass for daily yoga', 4, 600),
(3, 'Kayak Away', 'Two breakfasts, two hours of kayak rental daily, a trail map', 2, 500);

-- --------------------------------------------------------

--
-- Table structure for table `reservationyurt`
--

CREATE TABLE `reservationyurt` (
  `RESID` int(11) NOT NULL,
  `ARRIVALDATE` date DEFAULT NULL,
  `OFNIGHTS` int(11) DEFAULT NULL,
  `PACKAGEID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservationyurt`
--

INSERT INTO `reservationyurt` (`RESID`, `ARRIVALDATE`, `OFNIGHTS`, `PACKAGEID`) VALUES
(6, '2018-04-18', 2, 3),
(7, '2018-04-23', 3, 3),
(8, '2018-04-24', 4, 1),
(9, '2018-04-12', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `whendate`
--

CREATE TABLE `whendate` (
  `ID` int(11) NOT NULL,
  `DATE` date DEFAULT NULL,
  `ACTIVITYID` varchar(10) DEFAULT NULL,
  `CLIENTID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whendate`
--

INSERT INTO `whendate` (`ID`, `DATE`, `ACTIVITYID`, `CLIENTID`) VALUES
(5, '2018-04-25', '1002', 6),
(6, '2018-04-26', '1003', 7),
(7, '2018-04-29', '1002', 8),
(8, '2018-04-15', '1003', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`ACTIVITYID`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`clientid`),
  ADD KEY `RESID` (`RESID`),
  ADD KEY `ACTIVITYID` (`ACTIVITYID`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`PACKAGEID`);

--
-- Indexes for table `reservationyurt`
--
ALTER TABLE `reservationyurt`
  ADD PRIMARY KEY (`RESID`),
  ADD KEY `PACKAGEID` (`PACKAGEID`);

--
-- Indexes for table `whendate`
--
ALTER TABLE `whendate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ACTIVITYID` (`ACTIVITYID`),
  ADD KEY `CLIENTID` (`CLIENTID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `clientid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `PACKAGEID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `reservationyurt`
--
ALTER TABLE `reservationyurt`
  MODIFY `RESID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `whendate`
--
ALTER TABLE `whendate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`RESID`) REFERENCES `reservationyurt` (`RESID`),
  ADD CONSTRAINT `client_ibfk_2` FOREIGN KEY (`ACTIVITYID`) REFERENCES `activities` (`ACTIVITYID`);

--
-- Constraints for table `reservationyurt`
--
ALTER TABLE `reservationyurt`
  ADD CONSTRAINT `reservationyurt_ibfk_1` FOREIGN KEY (`PACKAGEID`) REFERENCES `package` (`PACKAGEID`);

--
-- Constraints for table `whendate`
--
ALTER TABLE `whendate`
  ADD CONSTRAINT `whendate_ibfk_1` FOREIGN KEY (`ACTIVITYID`) REFERENCES `activities` (`ACTIVITYID`),
  ADD CONSTRAINT `whendate_ibfk_2` FOREIGN KEY (`CLIENTID`) REFERENCES `client` (`clientid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
