-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2021 at 09:02 PM
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
  `name` varchar(30) NOT NULL,
  `customer_id` int(30) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `phno` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`name`, `customer_id`, `username`, `pswd`, `phno`, `dob`, `address`, `pan_no`, `email`) VALUES
('awadhesh', 1234, 'awadhesh@123', 'raja@1234', '7563830770', '1999-01-29', 'bangalorre', 'aaaaaaaaaa', 'awadhesh@gmail.com'),
('raja', 1235, 'raja@12345', 'raja@12345', '9955404124', '1996-09-29', 'banka', '6644554454', 'raja@gmail.com'),
('idrees khan', 1236, 'idress@123', 'idress@123', '9966554433', '1999-12-12', 'bangalore', 'AAAAAWWWWW', 'idress@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `emi`
--

CREATE TABLE `emi` (
  `loan id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `loan_type` varchar(30) NOT NULL,
  `loan_amount` int(10) NOT NULL,
  `no_of_emi's` int(10) NOT NULL,
  `loan_tenure` varchar(10) NOT NULL,
  `interest_rate` int(10) NOT NULL,
  `monthly_installment` int(10) NOT NULL,
  `no_of_emi's_remaining` int(10) NOT NULL,
  `total_loan_amount_paid` int(10) NOT NULL,
  `total_due_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan payment`
--

CREATE TABLE `loan payment` (
  `name` int(20) NOT NULL,
  `emi_no` int(20) NOT NULL,
  `receipt_no` int(10) NOT NULL,
  `loan_id` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `total_loan_amount_paid` int(10) NOT NULL,
  `total_due_amount` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `loan_details`
--

CREATE TABLE `loan_details` (
  `loan_id` INT(15) NOT NULL PRIMARY KEY,
  `customer_id` INT(15) NOT NULL,
  `customer_name` VARCHAR(30) NOT NULL,
  `loan_type` VARCHAR(30) NOT NULL,
  `loan_amount` VARCHAR(30) NOT NULL,
  `loan_tenure` VARCHAR(30) NOT NULL,
  `interest_rate` VARCHAR(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loan_details`
--

-- INSERT INTO `loan_details` (`customer_id`, `customer_name`, `loan_type`, `loan_amount`, `loan_tenure`, `interest_rate`) VALUES 
-- (3, 'kop', 1234, 'dsdfdd', '12344', '12', '10'),
-- (8, 'awadhesh', 1235, 'sasasajkjk', '123434', '12', '10');

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
  `username` varchar(30) NOT NULL,
  `role` int(10) NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`,`username`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `emi`
--
ALTER TABLE `emi`
  ADD PRIMARY KEY (`loan id`);

--
-- Indexes for table `loan payment`
--
ALTER TABLE `loan payment`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD PRIMARY KEY (`loan_id`),
  ADD UNIQUE KEY `customer_id` (`customer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1244;

--
-- AUTO_INCREMENT for table `emi`
--
ALTER TABLE `emi`
  MODIFY `loan id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `loan_details`
--
ALTER TABLE `loan_details`
MODIFY `loan_id` INT(30) AUTO_INCREMENT, AUTO_INCREMENT=13524;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `loan_details`
--
ALTER TABLE `loan_details`
  ADD CONSTRAINT `loan_details_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
