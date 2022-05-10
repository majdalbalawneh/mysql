-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 04:19 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tabel data`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_info`
--

CREATE TABLE `account_info` (
  `acc_no` int(50) NOT NULL,
  `acc_type` varchar(50) NOT NULL,
  `acc_id` int(50) NOT NULL,
  `acc_status` varchar(50) NOT NULL,
  `acc_activation_date` varchar(50) NOT NULL,
  `total_bal` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `cust_id` int(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `street` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pin_cod` varchar(10) NOT NULL,
  `email_id` varchar(10) NOT NULL,
  `phoe_no` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `perferred_customer_info`
--

CREATE TABLE `perferred_customer_info` (
  `rel_manager_id` int(11) NOT NULL,
  `cust_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `relationship_manager_info`
--

CREATE TABLE `relationship_manager_info` (
  `rel_manager_id` int(50) NOT NULL,
  `rel_manager_name` varchar(50) NOT NULL,
  `bank_branch` varchar(50) NOT NULL,
  `pin_cod` int(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(255) NOT NULL,
  `product` varchar(255) NOT NULL,
  `product category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_info`
--
ALTER TABLE `account_info`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `perferred_customer_info`
--
ALTER TABLE `perferred_customer_info`
  ADD PRIMARY KEY (`rel_manager_id`,`cust_id`);

--
-- Indexes for table `relationship_manager_info`
--
ALTER TABLE `relationship_manager_info`
  ADD PRIMARY KEY (`rel_manager_id`,`email_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
