-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2020 at 12:10 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iicdc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(10) NOT NULL,
  `adminname` varchar(25) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `usertype` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `loginid`, `password`, `status`, `usertype`) VALUES
(1, 'Aditya', 'admin', 'adminadmin', 'Active', 'Admin'),
(2, 'Kishore', 'admin1', '123456789', 'Active', 'Admin'),
(3, 'Sooraj', 'admin2', '123456789', 'Active', 'Admin'),
(4, 'Anuj', 'admin', '123456789', 'Active', 'Admin'),
(5, 'Raj kiran', 'rajkiran', 'q1w2e3r4/', 'Active', 'Admin'),
(6, 'Mahesh kiran', 'mahesh', 'q1w2e3r4/', 'Active', 'Pharmacy Manager'),
(8, 'rupesh', 'rupesh', 'rupeshrupesh', 'Active', 'Pharmacy Manager'),
(9, 'testadmin', 'testadmin', 'adminadmin', 'Active', '');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentid` int(10) NOT NULL,
  `departmentname` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentid`, `departmentname`, `description`, `status`) VALUES
(46, 'Clerk', 'Does all the paper work related to the office documents', 'Active'),
(47, 'Accountants', 'Does all the managing of the money', 'Active'),
(90, 'Technicians', 'Looks for the problems in the poles and transformer.', 'Active'),
(91, 'testDepartment', 'test', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `predictedtemp`
--

CREATE TABLE `predictedtemp` (
  `hour1` float NOT NULL,
  `hour2` float NOT NULL,
  `hour3` float NOT NULL,
  `hour4` float NOT NULL,
  `hour5` float NOT NULL,
  `hour6` float NOT NULL,
  `hour7` float NOT NULL,
  `hour8` float NOT NULL,
  `hour9` float NOT NULL,
  `hour10` float NOT NULL,
  `hour11` float NOT NULL,
  `hour12` float NOT NULL,
  `hour13` float NOT NULL,
  `hour14` float NOT NULL,
  `hour15` float NOT NULL,
  `hour16` float NOT NULL,
  `hour17` float NOT NULL,
  `hour18` float NOT NULL,
  `hour19` float NOT NULL,
  `hour20` float NOT NULL,
  `hour21` float NOT NULL,
  `hour22` float NOT NULL,
  `hour23` float NOT NULL,
  `hour24` float NOT NULL,
  `updatetime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sensors`
--

CREATE TABLE `sensors` (
  `id` int(11) NOT NULL,
  `temperature` float NOT NULL,
  `vibration` int(11) NOT NULL,
  `humidity` float NOT NULL,
  `gas` float NOT NULL,
  `flame` varchar(10) NOT NULL,
  `Time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sensors`
--

INSERT INTO `sensors` (`id`, `temperature`, `vibration`, `humidity`, `gas`, `flame`, `Time`) VALUES
(1, 151.5, 1345, 73.5, 299, 'yes', '0000-00-00 00:00:00'),
(2, 151.1, 1490, 73.5, 287, 'yes', '2020-01-18 14:50:39'),
(3, 162, 2000, 72, 156, 'no', '2020-01-18 14:52:56'),
(4, 140, 1590, 83, 240, 'no', '2020-01-18 15:28:59'),
(5, 160, 2300, 78, 158, 'yes', '2020-01-18 15:30:58'),
(6, 150, 1900, 76, 200, 'yes', '2020-01-18 15:38:31'),
(7, 155, 1300, 69, 100, 'yes', '2020-01-18 15:40:59');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffid` int(10) NOT NULL,
  `staffname` varchar(50) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `departmentid` int(10) NOT NULL,
  `loginid` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `status` varchar(10) NOT NULL,
  `education` varchar(25) NOT NULL,
  `experience` float(11,1) NOT NULL,
  `consultancy_charge` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffid`, `staffname`, `mobileno`, `departmentid`, `loginid`, `password`, `status`, `education`, `experience`, `consultancy_charge`) VALUES
(44, 'Sai kiran', '8548874216', 20, 'doctor9', '123456789', 'Active', 'BAMS', 5.0, 50.00),
(45, 'Mahesh', '9985633225', 11, 'maheshkrishna', '123456789', 'Active', 'MBBS', 5.0, 200.00),
(46, 'Rupesh kumar', '889655884', 12, 'rupesh', '123456789', 'Active', 'MBBS', 5.0, 250.00),
(47, 'Parthiv patel', '99855896633', 12, 'parthiv', '77896541230', 'Active', 'MBBS', 7.0, 600.00),
(61, 'vidya', '986555566', 5, '8553507260', '876867888', 'active', 'ufyhfhjkl', 3.0, 3.00),
(90, 'Lokesh Kumar Chopra', '9812453678', 11, 'doctor', '123456789', 'Active', 'MBBS,MD,IDCCM', 7.0, 700.00);

-- --------------------------------------------------------

--
-- Table structure for table `staff_timings`
--

CREATE TABLE `staff_timings` (
  `staff_timings_id` int(10) NOT NULL,
  `staffid` int(10) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `available_day` varchar(15) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff_timings`
--

INSERT INTO `staff_timings` (`staff_timings_id`, `staffid`, `start_time`, `end_time`, `available_day`, `status`) VALUES
(17, 35, '09:30:00', '13:00:00', '', 'Active'),
(18, 36, '13:30:00', '17:00:00', '', 'Active'),
(19, 37, '14:00:00', '18:00:00', '', 'Active'),
(20, 38, '17:00:00', '21:00:00', '', 'Active'),
(21, 39, '13:00:00', '19:00:00', '', 'Active'),
(22, 40, '07:00:00', '11:00:00', '', 'Active'),
(23, 41, '13:30:00', '16:30:00', '', 'Active'),
(24, 42, '11:30:00', '14:30:00', '', 'Active'),
(25, 43, '12:30:00', '16:30:00', '', 'Active'),
(26, 44, '21:30:00', '12:30:00', '', 'Active'),
(27, 36, '01:03:00', '13:03:00', '', 'Active'),
(28, 61, '11:11:00', '19:07:00', '', 'Active'),
(29, 35, '11:11:00', '16:44:00', '', 'Active'),
(30, 35, '01:10:00', '16:11:00', '', 'Active'),
(31, 35, '01:02:00', '15:04:00', '2018-03-26', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `address`, `mobileno`, `city`, `pincode`, `loginid`, `password`, `gender`, `dob`) VALUES
(57, 'Peter king', ' st house,\r\nsunkadakatte,\r\nbangalore', '88569525445', 'Bangalore', '575002', 'aditya', 'adityamahajan1', 'MALE', '1978-07-11'),
(61, 'Mansi wakodkar', '    A3 mantri nagar ,bhavsar chowk', '9834340509', 'nanded', '431605', 'mansi', 'mansi786', 'FEMALE', '1999-08-28'),
(64, 'shraddha devshetwar', ' vishnupuri', '9850071512', 'Nanded', '431605', 'sdevshetwar@gmail.com', 'shraddha@786', 'FEMALE', '2000-02-02'),
(66, 'aditya mahajan', 'jkshrfuhwoin', '1234567890', 'nanded', '431605', 'aditya', 'adityamahajan', 'MALE', '2011-11-11'),
(67, 'csahgdewqkfk', 'kregftergekg', '6787556435', 'nanded', '435789', 'chandu', 'Chandu@1234', 'male', '2020-01-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`),
  ADD UNIQUE KEY `adminname` (`adminname`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentid`);

--
-- Indexes for table `sensors`
--
ALTER TABLE `sensors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffid`);

--
-- Indexes for table `staff_timings`
--
ALTER TABLE `staff_timings`
  ADD PRIMARY KEY (`staff_timings_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `loginid` (`loginid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `departmentid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `sensors`
--
ALTER TABLE `sensors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staffid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `staff_timings`
--
ALTER TABLE `staff_timings`
  MODIFY `staff_timings_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
