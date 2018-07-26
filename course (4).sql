-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2018 at 08:23 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `course`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  `designation` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`username`, `password`, `designation`) VALUES
('dinakaran', 'dd', 'secratary'),
('arun', 'babloo', 'founder'),
('awdhil', 'awdhil97', 'hod');

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `sno` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `fathersname` varchar(20) NOT NULL,
  `mothersname` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `tenthpercentage` varchar(20) NOT NULL,
  `twelthpercentage` varchar(20) NOT NULL,
  `cutoff` varchar(20) NOT NULL,
  `group1` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `course` varchar(20) NOT NULL,
  `status` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`sno`, `firstname`, `lastname`, `fathersname`, `mothersname`, `religion`, `caste`, `gender`, `dob`, `tenthpercentage`, `twelthpercentage`, `cutoff`, `group1`, `email`, `course`, `status`) VALUES
(1, 'dina', 'karan', 'ramadurai', 'malarkodi', 'Hindu', 'bc', 'Male', '1997/11/14', '98', '96', '192', 'mpcc', 'dinakar14.ram@gmail.com', 'cse', 'confirm'),
(2, 'awdhil', 'ithishyam', 'mohammad', 'aisha', 'muslim', 'bcm', 'Male', '1997/10/05', '97', '87', '172', 'mpcb', 'hearthackerawdhil@gmail.com', 'civil', 'confirm'),
(4, 'akil', 'dog', 'jasf', 'ajkfgukas', 'Hindu', 'bc', 'Male', '1997/08/09', '85', '96', '180', 'mpcc', 'akil@gmail.com', 'mech', 'rejected'),
(5, 'deva', 'raj', 'sd', 'sd', 'Hindu', 'oc', 'Male', '1997/11/14', '65', '65', '769', 'mpcb', 'dinakar15.ram@gmail.com', 'cse', 'confirm'),
(6, 'balaji', 'a', 'anand', 'bakiyam', 'Hindu', 'bc', 'Male', '1997/10/20', '99', '99', '199', 'mpcb', 'balajianand@gmail.com', 'ei', 'confirm'),
(7, 'Jain', 'SAk', 'Abdul ', 'Fathima', 'muslim', 'bcm', 'Male', '1989/13/89', '78', '52', '96', 'mpcb', 'jainu_56@yahoo.com', 'cse', 'rejected'),
(8, 'babloo', 'kumararavind', 'aravinfkumar', 'mayilu', 'Christian', 'sc/st', 'Male', '2000/12/10', '77', '88', '189', 'mpcb', 'bablookumar@gmail', 'civil', 'confirm'),
(9, 'dd', 'dd', 'dd', 'dd', 'Christian', 'sc/st', 'Female', '1997/11/14', '98', '98', '123', 'commerce', 'p@gmail.com', 'ece', 'confirm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
