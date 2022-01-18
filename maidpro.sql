-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 06:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maidpro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `bank_account_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ac_holder_name` varchar(30) NOT NULL,
  `ac_no` int(13) NOT NULL,
  `ifsc` varchar(20) NOT NULL,
  `bank_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`bank_account_id`, `email`, `ac_holder_name`, `ac_no`, `ifsc`, `bank_name`) VALUES
(2, 'jishnu123@gmail.com', 'Jishnu Gopalan', 2147483647, 'sbin0070149', 'sbi');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `category_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `category_image`) VALUES
(1, 'Painting', 'uploads/painting.jpg'),
(2, 'Cleaning', 'uploads/cleaning.jpg'),
(3, 'Cooking', 'uploads/cooking.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `district` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `state_id`, `district`) VALUES
(1, 1, 'Ernakulam'),
(2, 1, 'Malappuram'),
(3, 2, 'Chennai');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `usertype` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `email`, `usertype`) VALUES
(2, 'jishnu123@gmail.com', 'worker'),
(3, 'admin123@gmail.com', 'admin'),
(4, 'jishnugopalan2000@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `notification_id` int(11) NOT NULL,
  `senderid` varchar(30) NOT NULL,
  `receiverid` varchar(30) NOT NULL,
  `content` varchar(70) NOT NULL,
  `notification_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `notification_type` varchar(25) NOT NULL DEFAULT 'normal'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notification_id`, `senderid`, `receiverid`, `content`, `notification_datetime`, `notification_type`) VALUES
(1, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'Jishnu sends a request.Do you want to accept', '2022-01-18 12:40:46', 'request'),
(2, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Congratulations!Jishnu Gopalan accepted your request', '2022-01-18 14:55:55', 'accepted'),
(3, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Congratulations!Jishnu Gopalan accepted your request', '2022-01-18 14:56:32', 'accepted'),
(4, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Congratulations!Jishnu Gopalan accepted your request', '2022-01-18 14:56:36', 'accepted'),
(5, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Sorry!Jishnu Gopalan rejected your request', '2022-01-18 14:57:58', 'rejected'),
(6, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Congratulations!Jishnu Gopalan accepted your request', '2022-01-18 15:25:00', 'accepted');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `user_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `phone` bigint(11) NOT NULL,
  `profile_pic` varchar(50) NOT NULL DEFAULT 'images/profile_pic.png',
  `house` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pincode` int(10) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date_of_birth` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`user_id`, `email`, `name`, `phone`, `profile_pic`, `house`, `place`, `district`, `state`, `pincode`, `gender`, `date_of_birth`) VALUES
(2, 'jishnu123@gmail.com', 'Jishnu Gopalan', 7994245510, 'images/profile_pic.png', 'Kochukudiputhenpura', 'Kuthukuzhy', '1', '1', 686691, 'Male', '1999-04-29'),
(3, 'jishnugopalan2000@gmail.com', 'Jishnu', 7994245510, 'images/profile_pic.png', '', '', '', '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `workerid` varchar(30) NOT NULL,
  `needs` text NOT NULL,
  `request_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `request_status` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `userid`, `workerid`, `needs`, `request_datetime`, `request_status`) VALUES
(3, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'We need a part time worker in our company', '2022-01-18 12:40:46', 1);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(11) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `state`) VALUES
(1, 'Kerala'),
(2, 'Tamilnadu');

-- --------------------------------------------------------

--
-- Table structure for table `verification`
--

CREATE TABLE `verification` (
  `verification_id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `verification_type` varchar(20) NOT NULL,
  `document` varchar(50) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verification`
--

INSERT INTO `verification` (`verification_id`, `email`, `verification_type`, `document`, `status`) VALUES
(2, 'jishnu123@gmail.com', 'Adhaar Card', 'uploads/adhar demo.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `worker`
--

CREATE TABLE `worker` (
  `worker_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `category` varchar(25) NOT NULL,
  `service_charge` int(10) NOT NULL,
  `starting_time` varchar(25) NOT NULL,
  `ending_time` varchar(25) NOT NULL,
  `description` varchar(50) NOT NULL,
  `experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worker`
--

INSERT INTO `worker` (`worker_id`, `email`, `category`, `service_charge`, `starting_time`, `ending_time`, `description`, `experience`) VALUES
(1, 'jishnu123@gmail.com', 'Cleaning', 1500, '10:00:00', '17:00:00', 'I am an experienced person.', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`bank_account_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `verification`
--
ALTER TABLE `verification`
  ADD PRIMARY KEY (`verification_id`);

--
-- Indexes for table `worker`
--
ALTER TABLE `worker`
  ADD PRIMARY KEY (`worker_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `bank_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `verification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
