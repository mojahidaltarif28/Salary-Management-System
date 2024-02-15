-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 11:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `salary_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowance`
--

CREATE TABLE `allowance` (
  `id` int(20) NOT NULL,
  `basic_salary` int(20) NOT NULL,
  `current_salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `deduction`
--

CREATE TABLE `deduction` (
  `id` int(20) NOT NULL,
  `basic_salary` varchar(20) NOT NULL,
  `current_salary` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `id` int(100) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `job_code` varchar(10) NOT NULL,
  `contact_number` int(11) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `national_id` varchar(40) NOT NULL,
  `passport` varchar(40) NOT NULL,
  `pre_address` varchar(100) NOT NULL,
  `per_address` varchar(100) NOT NULL,
  `doj` date NOT NULL,
  `card_number` varchar(50) NOT NULL,
  `department` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `salary` int(15) NOT NULL,
  `current_salary` int(20) NOT NULL DEFAULT 0,
  `division` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`id`, `first_name`, `surname`, `full_name`, `email`, `password`, `job_code`, `contact_number`, `gender`, `dob`, `national_id`, `passport`, `pre_address`, `per_address`, `doj`, `card_number`, `department`, `designation`, `salary`, `current_salary`, `division`, `image`) VALUES
(18030541, 'Md Mojahid AL', 'Tarif  ', 'Md Mojahid AL Tarif   ', 'mojahidaltarif55@gmail.com', '1234', '#5600', 1717268128, 'Male', '2021-08-24', '2412987654', '34567', 'হলাইজানা পূর্বপাড়া (তেলিপাড়া)', 'f', '2021-08-05', 'ff', 'Director ', 'Managing Director', 500000, 500000, 'Admin', 'images_uploaded/IMG_20190114_000114.jpg'),
(18030544, 'sumiya yeasmin', 'bha ', 'sumiya yeasmin bha  ', 'mojahidaltarif59@gmail.com', '12345', '#5600', 1717268128, 'Female', '2021-10-02', '2412987654', '0188888888888888', 'হলাইজানা পূর্বপাড়া (তেলিপাড়া)', 'dhaka', '2021-09-09', '19875648236', 'Director ', 'Managing Director', 500000, 500000, 'User', 'images_uploaded/IMG_20201024_173204.jpg'),
(18030545, 'MOST JAHANARA', 'BEGUM        ', 'MOST JAHANARA BEGUM        ', 'mojahidaltarif01@gmail.com', '1234', '#5601', 1717268128, 'Female', '2021-09-06', '12987654', '018888', 'Dhaka', 'Dhaka', '2021-09-08', '19875648236', 'IT', 'Programmer', 80000, 80000, 'User', 'images_uploaded/13695186_1750067161936376_368675204_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_code`
--

CREATE TABLE `job_code` (
  `code` varchar(10) NOT NULL,
  `department` varchar(10) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `Salary` int(15) NOT NULL,
  `division` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_code`
--

INSERT INTO `job_code` (`code`, `department`, `designation`, `Salary`, `division`) VALUES
('#5600', 'Director ', 'Managing Director', 500000, 'Admin'),
('#5601', 'IT', 'Programmer', 80000, 'User'),
('#5602', 'Accounting', 'Salary Operator', 50000, 'User'),
('#5603', 'Marketing', 'Sales Executive', 40000, 'User'),
('#5604', 'sales', 'Sales Man', 20000, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `devision` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `pass`, `devision`) VALUES
(14, 'mojahidaltarif01@gmail.com', '1234', 'User'),
(10, 'mojahidaltarif55@gmail.com', '1234', 'Admin'),
(13, 'mojahidaltarif59@gmail.com', '12345', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `job_code`
--
ALTER TABLE `job_code`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `login_id` (`login_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18030546;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
