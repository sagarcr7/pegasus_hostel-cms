-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 01:44 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(5) UNSIGNED NOT NULL,
  `username` text NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'pegasus', 'pegasus100');

-- --------------------------------------------------------

--
-- Table structure for table `std_fee`
--

CREATE TABLE `std_fee` (
  `std_id` int(10) UNSIGNED NOT NULL,
  `std_paymentnum` int(10) UNSIGNED NOT NULL,
  `std_paidamount` int(5) UNSIGNED NOT NULL,
  `std_paymentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table consisting the fee status of the students';

--
-- Dumping data for table `std_fee`
--

INSERT INTO `std_fee` (`std_id`, `std_paymentnum`, `std_paidamount`, `std_paymentdate`) VALUES
(1, 3, 3000, '2014-02-01'),
(2, 4, 2340, '2013-08-02'),
(1, 5, 3400, '2017-09-16');

-- --------------------------------------------------------

--
-- Table structure for table `std_registration`
--

CREATE TABLE `std_registration` (
  `std_id` int(10) UNSIGNED NOT NULL,
  `std_fname` text NOT NULL,
  `std_lname` text NOT NULL,
  `std_email` varchar(30) NOT NULL,
  `std_contact` int(2) UNSIGNED NOT NULL,
  `std_admitdate` date NOT NULL,
  `std_edulevel` varchar(15) DEFAULT NULL,
  `std_institute` mediumtext,
  `std_sex` enum('M','F','O') NOT NULL,
  `std_course` varchar(20) DEFAULT NULL,
  `std_jobinstitute` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table consisting the information of the admitted students';

--
-- Dumping data for table `std_registration`
--

INSERT INTO `std_registration` (`std_id`, `std_fname`, `std_lname`, `std_email`, `std_contact`, `std_admitdate`, `std_edulevel`, `std_institute`, `std_sex`, `std_course`, `std_jobinstitute`) VALUES
(1, 'sag/ar', 'vandari', 'sg/r@g/mail.com', 986108765, '2017-03-09', 'bachleor', 'ACHS college', 'M', 'CSIT', ''),
(2, 'alex', 'g/arcia', 'alex@g/mail.com', 987676242, '2017-08-12', '10+2', 'Trinity', 'F', 'BBA', ''),
(3, 'cris', 'ronaldo', 'cris@hotmail.com', 985412365, '2017-01-23', 'masters', 'sporting college', 'M', 'BE', 'Real madrid'),
(6, 'sergio', 'ramos', 'ramos4@gm/ail.com', 986541256, '2016-01-01', 'bachleor', 'ACHS', 'M', 'BBS', 'Spain'),
(8, 'asas', 'asasa', 'assd@gmail.com', 984125631, '0000-00-00', 'school', 'Faltu School', 'O', 'all', '');

-- --------------------------------------------------------

--
-- Table structure for table `workers`
--

CREATE TABLE `workers` (
  `w_id` int(10) UNSIGNED NOT NULL,
  `w_fname` text NOT NULL,
  `w_lname` text NOT NULL,
  `w_email` varchar(20) NOT NULL,
  `w_sex` enum('M','F','O') NOT NULL,
  `w_DOB` date NOT NULL,
  `w_jobtitle` tinytext NOT NULL,
  `w_contact` int(10) UNSIGNED NOT NULL,
  `w_startdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workers`
--

INSERT INTO `workers` (`w_id`, `w_fname`, `w_lname`, `w_email`, `w_sex`, `w_DOB`, `w_jobtitle`, `w_contact`, `w_startdate`) VALUES
(1, 'addsaaa', 'dasdc', 'aas@gmail.com', 'F', '2000-02-15', 'manager', 5646682, '2015-01-25'),
(2, 'asdads', 'adsawasdsas', 'sdsd@/g/mail.com', 'M', '1997-09-08', 'worker', 56215652, '2016-08-09'),
(3, 'asdsa', 'ha/sh/vs', 'sfss@outlook.com', 'F', '0000-00-00', 'Vada majne', 977852126, '2014-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `w_salary`
--

CREATE TABLE `w_salary` (
  `w_id` int(10) UNSIGNED NOT NULL,
  `w_paymentnum` int(10) UNSIGNED NOT NULL,
  `w_payamount` int(8) UNSIGNED NOT NULL,
  `w_paydate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table consisting the salary status of the workers';

--
-- Dumping data for table `w_salary`
--

INSERT INTO `w_salary` (`w_id`, `w_paymentnum`, `w_payamount`, `w_paydate`) VALUES
(1, 1, 10000, '2017-02-15'),
(2, 5, 40000, '2015-09-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `std_fee`
--
ALTER TABLE `std_fee`
  ADD PRIMARY KEY (`std_paymentnum`),
  ADD KEY `std_id` (`std_id`),
  ADD KEY `std_id_2` (`std_id`);

--
-- Indexes for table `std_registration`
--
ALTER TABLE `std_registration`
  ADD PRIMARY KEY (`std_id`);

--
-- Indexes for table `workers`
--
ALTER TABLE `workers`
  ADD PRIMARY KEY (`w_id`);

--
-- Indexes for table `w_salary`
--
ALTER TABLE `w_salary`
  ADD PRIMARY KEY (`w_paymentnum`),
  ADD UNIQUE KEY `w_id_2` (`w_id`),
  ADD KEY `w_id` (`w_id`),
  ADD KEY `w_id_3` (`w_id`),
  ADD KEY `w_id_4` (`w_id`),
  ADD KEY `w_id_5` (`w_id`),
  ADD KEY `w_id_6` (`w_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `std_fee`
--
ALTER TABLE `std_fee`
  MODIFY `std_paymentnum` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `std_registration`
--
ALTER TABLE `std_registration`
  MODIFY `std_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `workers`
--
ALTER TABLE `workers`
  MODIFY `w_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `w_salary`
--
ALTER TABLE `w_salary`
  MODIFY `w_paymentnum` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `std_fee`
--
ALTER TABLE `std_fee`
  ADD CONSTRAINT `std_fee_ibfk_1` FOREIGN KEY (`std_id`) REFERENCES `std_registration` (`std_id`);

--
-- Constraints for table `w_salary`
--
ALTER TABLE `w_salary`
  ADD CONSTRAINT `w_salary_ibfk_1` FOREIGN KEY (`w_id`) REFERENCES `workers` (`w_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
