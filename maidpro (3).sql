-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2022 at 06:48 PM
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
(2, 'jishnu123@gmail.com', 'Jishnu Gopalan', 2147483647, 'sbin0070149', 'sbi'),
(3, 'abc@gmail.com', 'Jishnu Gopalan', 2147483647, 'sbin0070149', 'sbi'),
(4, 'aadi@gmail.com', 'Jishnu Gopalan', 123456789, 'sbin0070149', 'sbi'),
(5, 'aadi@gmail.com', 'Jishnu Gopalan', 123456789, 'sbin0070149', 'sbi'),
(6, 'abc123@gmail.com', 'asaaaaaaaaaaa', 2147483647, 'sbin0070143', 'sbi'),
(7, 'abin123@gmail.com', 'fds', 2147483647, 'das', 'sda');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `bill_id` int(11) NOT NULL,
  `request_id` int(11) NOT NULL,
  `userid` varchar(35) NOT NULL,
  `workerid` varchar(35) NOT NULL,
  `rate` int(12) NOT NULL,
  `datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `bill_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`bill_id`, `request_id`, `userid`, `workerid`, `rate`, `datetime`, `bill_status`) VALUES
(7, 6, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 1500, '2022-02-14 17:57:31', 0),
(8, 6, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 1800, '2022-02-15 16:35:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category` varchar(30) NOT NULL,
  `category_image` varchar(50) NOT NULL,
  `rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`, `category_image`, `rate`) VALUES
(4, 'Cleaning', '', 1001),
(5, 'Cooking', '', 1000),
(6, 'Baby Sitter', '', 1000),
(7, 'Elderly Care', '', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(11) NOT NULL,
  `sender_email` varchar(50) NOT NULL,
  `reciever_email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `chat_time` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `sender_email`, `reciever_email`, `message`, `chat_time`) VALUES
(0, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com ', 'hi', '2022-02-10 18:21:59'),
(0, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'hello', '2022-02-10 18:30:10'),
(0, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'hi', '2022-02-13 07:03:28'),
(0, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 's', '2022-02-23 17:32:02'),
(0, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 's', '2022-02-23 17:32:23'),
(0, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 's', '2022-02-23 17:32:25'),
(0, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'sjhgjh', '2022-02-23 17:32:29');

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
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `feedback_id` int(11) NOT NULL,
  `email` varchar(35) NOT NULL,
  `feedback` varchar(90) NOT NULL,
  `feedbacktime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`feedback_id`, `email`, `feedback`, `feedbacktime`) VALUES
(1, 'jishnugopalan2000@gmail.com', 'asas', '2022-02-14 18:08:00');

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
(4, 'jishnugopalan2000@gmail.com', 'user'),
(5, 'abc@gmail.com', 'notuser'),
(8, 'aadi@gmail.com', 'notuser'),
(9, 'abc123@gmail.com', 'notuser'),
(10, 'abcd@gmail.com', 'user'),
(11, 'abin123@gmail.com', 'worker'),
(12, 'abcde@gmail.com', 'notuser');

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
(6, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Congratulations!Jishnu Gopalan accepted your request', '2022-01-18 15:25:00', 'accepted'),
(7, 'jishnugopalan2000@gmail.com', '', 'Jishnu send a request.Do you want to accept?', '2022-02-13 06:17:57', 'request'),
(8, 'jishnugopalan2000@gmail.com', '', 'Jishnu send a request.Do you want to accept?', '2022-02-13 06:19:39', 'request'),
(9, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'Jishnu send a request.Do you want to accept?', '2022-02-13 06:19:45', 'request'),
(10, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'Jishnu send a request.Do you want to accept?', '2022-02-13 06:21:05', 'request'),
(11, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Congratulations!Jishnu Gopalan accepted your request', '2022-02-13 06:49:42', 'accepted'),
(12, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'Jishnu send a request.Do you want to accept?', '2022-02-16 18:23:48', 'request'),
(13, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'Jishnu send a request.Do you want to accept?', '2022-02-16 18:25:12', 'request'),
(14, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'Congratulations!Jishnu Gopalan accepted your request', '2022-02-22 17:40:05', 'accepted'),
(15, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'Jishnu send a request.Do you want to accept?', '2022-02-23 17:41:33', 'request'),
(16, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'Jishnu send a request.Do you want to accept?', '2022-02-23 17:44:57', 'request');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `workerid` varchar(35) NOT NULL,
  `userid` varchar(35) NOT NULL,
  `payment` int(12) NOT NULL,
  `paymentdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `bill_id`, `workerid`, `userid`, `payment`, `paymentdate`) VALUES
(1, 5, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 10500, '2022-02-13 13:55:43'),
(2, 8, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 1800, '2022-02-15 16:36:29');

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
(2, 'jishnu123@gmail.com', 'Jishnu Gopalan', 7994245510, '../users/images/jishnu.jpg', 'Kochukudiputhenpura', 'Kuthukuzhy', '1', '1', 686691, 'Male', '2022-02-22'),
(3, 'jishnugopalan2000@gmail.com', 'Jishnu', 7994245510, 'images/profile_pic.png	', '', '', '', '', 0, '', ''),
(4, 'abc@gmail.com', 'abc', 7994245510, 'images/profile_pic.png	', 'sdas', 'asdas', '1', '1', 686691, 'Male', '2022-02-11'),
(5, 'aadi@gmail.com', 'Aadi', 7994245510, 'images/profile_pic.png	', 'shdakjdh', 'asdas', '1', '1', 686691, 'Male', '2022-02-16'),
(6, 'abc123@gmail.com', 'abc', 9778146653, 'images/profile_pic.png	', 'abc home', 'kuthukuzhy', '1', '1', 686691, 'Male', '2022-02-16'),
(7, 'abcd@gmail.com', 'abcd', 9778146653, 'images/profile_pic.png	', '', '', '', '', 0, '', ''),
(8, 'abin123@gmail.com', 'abin', 7994245510, 'images/profile_pic.png', 'fsd', 'ffds', '1', '1', 686691, 'Male', '2022-02-23'),
(9, 'abcde@gmail.com', 'sd', 7994245510, 'images/profile_pic.png', 'sdfs', 'dqweqw', '1', '1', 686631, 'Male', '2004-12-15');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `workerid` varchar(30) NOT NULL,
  `needs` text NOT NULL,
  `contact_address` varchar(80) NOT NULL,
  `contact_number` bigint(12) NOT NULL,
  `request_datetime` timestamp NOT NULL DEFAULT current_timestamp(),
  `request_status` tinyint(4) NOT NULL DEFAULT 0,
  `booking_date` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `userid`, `workerid`, `needs`, `contact_address`, `contact_number`, `request_datetime`, `request_status`, `booking_date`) VALUES
(10, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', 'sdas', 'sds', 7994244510, '2022-02-23 17:41:33', 0, '2022-02-24'),
(11, 'jishnugopalan2000@gmail.com', 'jishnu123@gmail.com', '1221sdas', 'fdf', 7994245510, '2022-02-23 17:44:57', 0, '2022-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `workerid` varchar(35) NOT NULL,
  `userid` varchar(35) NOT NULL,
  `review` varchar(80) NOT NULL,
  `star` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`review_id`, `workerid`, `userid`, `review`, `star`) VALUES
(3, 'jishnu123@gmail.com', 'jishnugopalan2000@gmail.com', 'sdadas', 4);

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
(2, 'jishnu123@gmail.com', 'Adhaar Card', 'uploads/adhar demo.png', 1),
(3, 'abc@gmail.com', 'Adhaar Card', 'users/uploads/adhar demo.png', 2),
(4, 'aadi@gmail.com', 'SSLC', 'users/uploads/avathar.jpg', 2),
(5, 'aadi@gmail.com', 'SSLC', 'users/uploads/avathar.jpg', 2),
(6, 'abc123@gmail.com', 'SSLC', 'users/uploads/avathar.jpg', 2),
(7, 'abin123@gmail.com', 'SSLC', 'users/uploads/IMG_20210818_091019_2.jpg', 1),
(8, 'abcde@gmail.com', 'SSLC', 'users/uploads/download (2).jfif', 2);

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
(1, 'jishnu123@gmail.com', 'Cleaning', 1500, '10:00:00', '17:00:00', 'I am an experienced person.', 2),
(2, 'abc@gmail.com', 'Painting', 6000, '13:30', '01:30', 'asdasd', 2),
(3, 'aadi@gmail.com', 'Elderly Care', 1500, '', '', 'asdasdasd dccas', 3),
(4, 'aadi@gmail.com', 'Elderly Care', 1500, '', '', 'asdasdasd dccas', 3),
(5, 'abc123@gmail.com', 'Cleaning', 1000, '', '', 'asd sdass', 2),
(6, 'abin123@gmail.com', 'Baby Sitter', 1000, '', '', 'fdf', 4),
(7, 'abcde@gmail.com', 'Cleaning', 1001, '', '', 'werewr', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`bank_account_id`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`bill_id`);

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
-- Indexes for table `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`feedback_id`);

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
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

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
  MODIFY `bank_account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `bill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `verification`
--
ALTER TABLE `verification`
  MODIFY `verification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `worker`
--
ALTER TABLE `worker`
  MODIFY `worker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
