-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2018 at 03:47 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelguide`
--

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `c_id` int(200) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_sub` varchar(255) NOT NULL,
  `c_email` varchar(200) NOT NULL,
  `c_message` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`c_id`, `c_name`, `c_sub`, `c_email`, `c_message`) VALUES
(2, 'jak', 'i want to visit', 'jakirhosen043@gmail.com', 'i want to know morw'),
(3, 'jak', 'i want to visit', 'jakirhosen043@gmail.com', 'i want to know morw'),
(4, 'jakir', 'sdsd', 'jakirhosen@gmail.com', 'dfdfrtda'),
(5, 'jakir', 'sdsd', 'jakirhosen@gmail.com', 'dfdfrtda'),
(6, 'jakir hosen', 'this is good', 'yttrrtr@gmail.com', 'dajlksjdla');

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `pack_id` int(200) NOT NULL,
  `pack_name` varchar(256) NOT NULL,
  `category` int(200) NOT NULL,
  `price` int(255) NOT NULL,
  `detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`pack_id`, `pack_name`, `category`, `price`, `detail`) VALUES
(21, 'Weekly pack to saint martin resort', 1, 10000, 'With this package You can stay at saint martin sea beach resort seven days and seven night. '),
(22, 'Ten day family package on cox bazar', 2, 20000, 'In this package you and at most four family member can stay in beautiful hotel of cox bazar. '),
(23, 'seven day trip', 1, 10000, 'trip to saint martin'),
(24, '10 days to cox budder', 1, 10000, 'this is gooood');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(200) NOT NULL,
  `div_name` varchar(256) NOT NULL,
  `pic` varchar(8000) NOT NULL,
  `detail` varchar(8000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_first` varchar(256) NOT NULL,
  `user_last` varchar(256) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_uid` varchar(256) NOT NULL,
  `user_pwd` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_email`, `user_uid`, `user_pwd`) VALUES
(1, 'Jakir', 'Hosen', 'jakirhosen043@gmail.com', 'jakir94', '$2y$10$0Wg9.ISpSlMd7jLm/Yp9r.YsqgF17om/jcwccDLH9EYEbx5kCcyrO'),
(2, 'Zakir', 'Hossain', 'jakir.hossain75@gmail.com', 'jakir92', '$2y$10$WzWVfjiCPoRiGMaaNpXQwuH6YHJtLrcGZMaW7x//Za0t2PxDHZ1ra'),
(3, 'jakir', 'hosen', 'jakirhosen043@gmail.com', 'admin', '$2y$10$d/RkuNfma0JlV1H1VPmtd.Q87EIamZqGvCLus8J/J0P.sbe7f/78W');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`pack_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `c_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `pack_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
