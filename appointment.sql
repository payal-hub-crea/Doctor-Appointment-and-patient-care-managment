-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2026 at 06:55 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `appointment`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL,
  `patient_name` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `department` varchar(50) DEFAULT NULL,
  `doctor` varchar(100) DEFAULT NULL,
  `appointment_date` date DEFAULT NULL,
  `appointment_time` varchar(20) DEFAULT NULL,
  `symptoms` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_id` int(11) DEFAULT NULL,
  `visit_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_name`, `phone`, `email`, `age`, `gender`, `department`, `doctor`, `appointment_date`, `appointment_time`, `symptoms`, `created_at`, `user_id`, `visit_type`) VALUES
(33, 'payal ', '7276500276', 'payalshinde634@gmail.com', 21, 'female', 'gynecology', 'Dr. Sunita Patil', '2026-06-17', '14:00', 'hgjhjbmj nkllkmkl mlkm', '2026-06-03 03:36:41', 8, 'new'),
(34, 'gita', '7344387322', 'phdhsjkd@gmail.com', 21, 'female', 'pediatrics', 'Dr. Anil Shinde', '2026-06-26', '15:30', 'jfhf kjfjo jkjfk', '2026-06-03 04:54:44', 9, 'followup'),
(35, 'najiya', '5468783282', 'najiya12@gmail.com', 21, 'female', 'orthopedics', 'Dr. R. A. Joshi', '2026-06-19', '15:00', 'hfkhidjoij jlfkjvk', '2026-06-03 05:47:36', 10, 'new'),
(36, 'nita', '2878912921', 'nita@gmail.com', 21, 'female', 'orthopedics', 'Dr. R. A. Joshi', '2026-06-17', '15:00', 'fjji lkjdljfll lk', '2026-06-03 05:58:52', 11, 'followup'),
(37, 'jay', '7276500276', 'jay@gmail.com', 21, 'female', 'gynecology', 'Dr. Sunita Patil', '2026-06-20', '15:30', 'hfkejk jfkjkj kjdkjfk', '2026-06-03 09:01:03', 12, 'report'),
(38, 'dinesh', '2878912921', 'dinesh@gmail.com', 21, 'male', 'surgery', 'Dr. Vivek Shah', '2026-06-25', '14:30', 'dkjkejo jkjfkljl lklfl', '2026-06-04 10:07:24', 13, 'new'),
(39, 'aditya', '2878912921', 'aditya@gmail.com', 21, 'male', 'orthopedics', 'Dr. R. A. Joshi', '2026-07-04', '16:30', 'hhgsuygu', '2026-06-04 11:06:34', 8, 'new'),
(40, 'payal ', '7276500276', 'payalshinde634@gmail.com', 21, 'female', 'pediatrics', 'Dr. Anil Shinde', '2026-06-17', '16:00', 'jfijij h', '2026-06-04 11:25:00', 8, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `specialty` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `schedule` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone`) VALUES
(8, 'payal', 'payalshinde634@gmail.com', 'payal123', '68989'),
(9, 'gitanjali', 'gitanjali@gmail.com', 'gita123', '58757'),
(10, 'najiya', 'najiya12@gmail.com', 'najiya123', '5732636873'),
(11, 'nita ', 'nita@gmail.com', 'nita123', '65446'),
(12, 'jay ', 'jay@gmail.com', 'jay123', '673446781'),
(13, 'dinesh', 'dinesh@gmail.com', 'dinesh@123', '368787293');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
