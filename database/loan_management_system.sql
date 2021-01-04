-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2020 at 07:09 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loan management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `name` text NOT NULL,
  `customer id` varchar(10) NOT NULL,
  `username` varchar(20) NOT NULL,
  `ph no` int(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `pan no` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `emi`
--

CREATE TABLE `emi` (
  `loan id` int(11) NOT NULL,
  `name` int(20) NOT NULL,
  `loan type` int(20) NOT NULL,
  `loan amount` int(10) NOT NULL,
  `no of emi's` int(10) NOT NULL,
  `loan tenure` int(10) NOT NULL,
  `interest rate` int(10) NOT NULL,
  `monthly installment` int(10) NOT NULL,
  `no fo emi;s remaining` int(10) NOT NULL,
  `total loan amount paid` int(10) NOT NULL,
  `total due amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `loan id` int(10) NOT NULL,
  `name` text NOT NULL,
  `customer id` varchar(10) NOT NULL,
  `loan type` int(20) NOT NULL,
  `loan amount` int(10) NOT NULL,
  `loan tenure` int(10) NOT NULL,
  `interest rate` varchar(10) NOT NULL,
  `loan status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan payment`
--

CREATE TABLE `loan payment` (
  `name` int(20) NOT NULL,
  `emi no` int(20) NOT NULL,
  `receipt no` int(10) NOT NULL,
  `loan id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `total loan amount paid` int(10) NOT NULL,
  `total due amount` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `username` int(10) NOT NULL,
  `role` int(10) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `date` date NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer id`,`username`);

--
-- Indexes for table `emi`
--
ALTER TABLE `emi`
  ADD PRIMARY KEY (`loan id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan id`,`customer id`);

--
-- Indexes for table `loan payment`
--
ALTER TABLE `loan payment`
  ADD PRIMARY KEY (`loan id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`,`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emi`
--
ALTER TABLE `emi`
  MODIFY `loan id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
