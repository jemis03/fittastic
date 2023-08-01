-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 07:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fittastic`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_sno` int(5) NOT NULL,
  `user_fname` varchar(50) NOT NULL,
  `user_lname` varchar(50) NOT NULL,
  `user_date_of_birth` varchar(50) NOT NULL,
  `user_gender` varchar(20) NOT NULL,
  `user_email` varchar(60) NOT NULL,
  `user_password` varchar(60) NOT NULL,
  `user_choice` varchar(20) NOT NULL,
  `user_choice_id` int(6) NOT NULL DEFAULT 0,
  `user_choice_code` varchar(30) NOT NULL,
  `user_visiting` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_sno`, `user_fname`, `user_lname`, `user_date_of_birth`, `user_gender`, `user_email`, `user_password`, `user_choice`, `user_choice_id`, `user_choice_code`, `user_visiting`) VALUES
(1, 'Dip', 'Goti', '02/10/2001', 'Male', 'deepgoti2001@gmail.com', '2002', 'Trainer', 1, 'TR1', 0),
(2, 'Rushabh', 'Goswami', '01/01/2002', 'Male', 'rushabhgoswami@gmail.com', '2002', 'Trainee', 1, 'TE1', 0),
(4, 'jinal', 'patel', '07/04/2002', 'Female', 'jinalpatel@gmail.com', '2002', 'Trainee', 2, 'TE2', 0),
(5, 'Nupur', 'Parekh', '14/02/2004', 'Female', 'nupurparekh1424@gmail.com', '2002', 'Trainee', 3, 'TE3', 0),
(6, 'jemish', 'lathiya', '01/12/2001', 'Male', 'jemish@gmail.com', '2002', 'Trainee', 4, 'TE4', 0),
(7, 'nemish', 'gorasiya', '26/01/2022', 'Male', 'nemishgorasiya@gmail.com', '2002', 'Trainee', 5, 'TE5', 0),
(8, 'Ayush', 'Mendapara', '12/01/2022', 'Male', 'ayushmendapara@gmail.com', '2002', 'Trainee', 6, 'TE6', 0),
(9, 'rushabh', 'gajera', '19/01/2022', 'Male', 'rushabhgajera@gmail.com', '2002', 'Trainee', 7, 'TE7', 0),
(10, 'jay', 'borad', '19/01/2022', 'Male', 'jayborad@gmail.com', '2002', 'Trainer', 2, 'TR2', 0),
(11, 'rajesh', 'solanki', '20/01/2022', 'Male', 'rajeshsolanki@gmail.com', '2002', 'Trainee', 8, 'TE8', 0),
(12, 'dharmik', 'satani', '17/02/2004', 'Male', 'satani@gmail.com', '2002', 'Trainee', 9, 'TE9', 0),
(13, 'dhananjay', 'goyani', '05/05/2002', 'Male', 'dhaananjay@gmail.com', '2002', 'Trainee', 10, 'TE10', 0),
(14, 'vasu', 'goti', '03/07/2005', 'Male', 'vasugoti@gmail.com', '2002', 'Trainee', 11, 'TE11', 0),
(15, 'tej', 'goti', '01/01/2005', 'Male', 'tej@gmail.com', '2002', 'Trainer', 3, 'TR3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_sno`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_sno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
