-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 12, 2020 at 06:16 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `IICDC`
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
(90, 'Technicians', 'Looks for the problems in the poles and warehouse.', 'Active'),
(91, 'testDepartment', 'test', 'Active');

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
(44, 'Sai kiran', '8548874216', 20, 'staff9', '123456789', 'Active', 'BAMS', 5.0, 50.00),
(45, 'Mahesh', '9985633225', 11, 'maheshkrishna', '123456789', 'Active', 'MBBS', 5.0, 200.00),
(46, 'Rupesh kumar', '889655884', 12, 'rupesh', '123456789', 'Active', 'MBBS', 5.0, 250.00),
(47, 'Parthiv patel', '99855896633', 12, 'parthiv', '77896541230', 'Active', 'MBBS', 7.0, 600.00),
(61, 'vidya', '986555566', 5, '8553507260', '876867888', 'active', 'ufyhfhjkl', 3.0, 3.00),
(90, 'Lokesh Kumar Chopra', '9812453678', 11, 'staff', '123456789', 'Active', 'MBBS,MD,IDCCM', 7.0, 700.00);

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
  `admissiondate` date NOT NULL,
  `admissiontime` time NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobileno` varchar(15) NOT NULL,
  `city` varchar(25) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `loginid` varchar(50) NOT NULL,
  `password` varchar(25) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `admissiondate`, `admissiontime`, `address`, `mobileno`, `city`, `pincode`, `loginid`, `password`, `bloodgroup`, `gender`, `dob`, `status`) VALUES
(57, 'Peter king', '2018-07-12', '21:07:50', ' st house,\r\nsunkadakatte,\r\nbangalore', '88569525445', 'Bangalore', '575002', 'aditya', 'adityamahajan1', 'A+', 'MALE', '1978-07-11', 'Active'),
(61, 'Mansi wakodkar', '2019-10-18', '08:42:44', '    A3 mantri nagar ,bhavsar chowk', '9834340509', 'nanded', '431605', 'mansi', 'mansi786', 'B+', 'FEMALE', '1999-08-28', 'Active'),
(64, 'shraddha devshetwar', '2019-10-19', '07:00:03', ' vishnupuri', '9850071512', 'Nanded', '431605', 'sdevshetwar@gmail.com', 'shraddha@786', 'B+', 'FEMALE', '2000-02-02', 'Active'),
(66, 'aditya mahajan', '2019-11-05', '05:49:35', 'jkshrfuhwoin', '1234567890', 'nanded', '431605', 'aditya', 'adityamahajan', 'O+', 'MALE', '2011-11-11', 'Active');

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
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
