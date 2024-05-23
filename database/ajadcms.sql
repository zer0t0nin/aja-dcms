-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2022 at 04:09 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajadcms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_cm`
--

CREATE TABLE `admin_cm` (
  `cm_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_inbox`
--

CREATE TABLE `admin_inbox` (
  `msg_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `msg_content` longtext NOT NULL,
  `msg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `admin_id` int(10) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `admin_contact` int(20) NOT NULL,
  `admin_dob` varchar(70) NOT NULL,
  `admin_gender` tinytext NOT NULL,
  `admin_position` text NOT NULL,
  `admin_photo` varchar(255) NOT NULL,
  `admin_biometric` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_contact`, `admin_dob`, `admin_gender`, `admin_position`, `admin_photo`, `admin_biometric`) VALUES
(21, 'Devon Jenny Uñalivia', 'jennyunalivia7@gmail.com', '1234', 1234567, '1998-03-07', 'Female', 'Dentist', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `apprvd_appts`
--

CREATE TABLE `apprvd_appts` (
  `appt_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_contact` int(20) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_type` varchar(150) NOT NULL,
  `appt_date` date NOT NULL,
  `appt_time` time NOT NULL,
  `appt_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apprvd_appts`
--

INSERT INTO `apprvd_appts` (`appt_id`, `users_name`, `users_email`, `users_contact`, `service_name`, `service_type`, `appt_date`, `appt_time`, `appt_desc`) VALUES
(4, 'Devon Jenny Uñalivia', 'jennyunalivia7@gmail.com', 2147483647, 'tooth extraction', '', '2022-01-06', '00:00:00', ''),
(6, 'Jeri Uñalivia', 'jeri@mail.com', 2147483647, 'tooth extraction', '', '2022-01-28', '00:00:00', ''),
(7, 'arya', 'arya@mail.com', 1234567, 'tooth extraction', '', '2022-01-28', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `appt_history`
--

CREATE TABLE `appt_history` (
  `appt_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_contact` int(20) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_type` varchar(150) NOT NULL,
  `service_price` int(10) NOT NULL,
  `appt_date` date NOT NULL,
  `appt_time` time NOT NULL,
  `appt_desc` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appt_history`
--

INSERT INTO `appt_history` (`appt_id`, `users_name`, `users_email`, `users_contact`, `service_name`, `service_type`, `service_price`, `appt_date`, `appt_time`, `appt_desc`) VALUES
(4, 'admin 1', 'jennyunalivia7@gmail.com', 123456789, 'tooth extraction', '', 1000, '2022-01-13', '00:00:00', '');

-- --------------------------------------------------------

--
-- Table structure for table `ortho_sales`
--

CREATE TABLE `ortho_sales` (
  `ortho_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `appt_date` date NOT NULL,
  `amt_paid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `other_sales`
--

CREATE TABLE `other_sales` (
  `othersales_id` int(10) NOT NULL,
  `patient_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `appt_date` date NOT NULL,
  `service_type` varchar(100) NOT NULL,
  `amt_paid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `patient_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_contact` int(20) NOT NULL,
  `users_dob` date NOT NULL,
  `users_gender` tinytext NOT NULL,
  `users_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient_appt_history`
--

CREATE TABLE `patient_appt_history` (
  `appt_id` int(10) NOT NULL,
  `users_name` text NOT NULL,
  `users_email` text NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_price` int(10) NOT NULL,
  `appt_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `req_appts`
--

CREATE TABLE `req_appts` (
  `appt_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_contact` int(20) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `service_type` varchar(150) NOT NULL,
  `appt_date` date NOT NULL,
  `appt_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req_appts`
--

INSERT INTO `req_appts` (`appt_id`, `users_name`, `users_email`, `users_contact`, `service_name`, `service_type`, `appt_date`, `appt_time`) VALUES
(9, 'Devorah Uñalivia', 'devorah@mail.com', 1234567, 'tooth extraction', '', '2022-01-27', '00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `service_id` int(10) NOT NULL,
  `service_name` varchar(100) NOT NULL,
  `service_price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users_inbox`
--

CREATE TABLE `users_inbox` (
  `msg_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `msg_content` longtext NOT NULL,
  `msg_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_profile`
--

CREATE TABLE `user_profile` (
  `users_id` int(10) NOT NULL,
  `users_name` varchar(200) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_contact` int(20) NOT NULL,
  `users_dob` date NOT NULL,
  `users_gender` tinytext NOT NULL,
  `users_pass` varchar(100) NOT NULL,
  `users_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_profile`
--

INSERT INTO `user_profile` (`users_id`, `users_name`, `users_email`, `users_contact`, `users_dob`, `users_gender`, `users_pass`, `users_photo`) VALUES
(16, 'arya', 'arya@mail.com', 1234567, '0000-00-00', '', '1234', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_cm`
--
ALTER TABLE `admin_cm`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `admin_inbox`
--
ALTER TABLE `admin_inbox`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `apprvd_appts`
--
ALTER TABLE `apprvd_appts`
  ADD PRIMARY KEY (`appt_id`);

--
-- Indexes for table `appt_history`
--
ALTER TABLE `appt_history`
  ADD PRIMARY KEY (`appt_id`);

--
-- Indexes for table `ortho_sales`
--
ALTER TABLE `ortho_sales`
  ADD PRIMARY KEY (`ortho_id`);

--
-- Indexes for table `other_sales`
--
ALTER TABLE `other_sales`
  ADD PRIMARY KEY (`othersales_id`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`patient_id`);

--
-- Indexes for table `patient_appt_history`
--
ALTER TABLE `patient_appt_history`
  ADD PRIMARY KEY (`appt_id`);

--
-- Indexes for table `req_appts`
--
ALTER TABLE `req_appts`
  ADD PRIMARY KEY (`appt_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `users_inbox`
--
ALTER TABLE `users_inbox`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `user_profile`
--
ALTER TABLE `user_profile`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_cm`
--
ALTER TABLE `admin_cm`
  MODIFY `cm_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_inbox`
--
ALTER TABLE `admin_inbox`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `admin_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `apprvd_appts`
--
ALTER TABLE `apprvd_appts`
  MODIFY `appt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `appt_history`
--
ALTER TABLE `appt_history`
  MODIFY `appt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ortho_sales`
--
ALTER TABLE `ortho_sales`
  MODIFY `ortho_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `other_sales`
--
ALTER TABLE `other_sales`
  MODIFY `othersales_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `patient_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_appt_history`
--
ALTER TABLE `patient_appt_history`
  MODIFY `appt_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `req_appts`
--
ALTER TABLE `req_appts`
  MODIFY `appt_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `service_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_inbox`
--
ALTER TABLE `users_inbox`
  MODIFY `msg_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_profile`
--
ALTER TABLE `user_profile`
  MODIFY `users_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
