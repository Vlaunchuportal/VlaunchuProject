-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 02:06 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vlaunchjob`
--

-- --------------------------------------------------------

--
-- Table structure for table `recruiterdata`
--

CREATE TABLE `recruiterdata` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `alternateEmail` varchar(25) NOT NULL,
  `PhoneNumber` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recruiterdata`
--

INSERT INTO `recruiterdata` (`id`, `email`, `password`, `alternateEmail`, `PhoneNumber`) VALUES
(1, 'shubham@gmail.com', '123', 'shubh@gmail.com', 9125474780);

-- --------------------------------------------------------

--
-- Table structure for table `signupdata`
--

CREATE TABLE `signupdata` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `alternateEmail` varchar(25) NOT NULL,
  `phoneNumber` bigint(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signupdata`
--

INSERT INTO `signupdata` (`id`, `email`, `password`, `alternateEmail`, `phoneNumber`) VALUES
(1, 'shubh@gmail.com', '123', 'shubham@gmail.com', 9125474780),
(2, 'shubh@gmail.com', '123', 'shubham@gmail.com', 9125474780),
(3, 'shubh@gmail.com', '123', 'shubham@gmail.com', 9125474780),
(4, 'shubh@gmail.com', '123', 'shubham@gmail.com', 9125484880),
(5, 'shubham@gmail.com', '123', 'shubham@gmail.com', 9125474780),
(6, '', '', '', 0),
(7, '', '', '', 0),
(8, '', '', '', 0),
(9, '', '', '', 0),
(10, '', '', '', 0),
(11, 'shubh@gmail.com', '123', 'shubham@gmail.com', 9125474780),
(12, 'ram@gmail.com', '123', 'ram@gmail.com', 9125474780),
(13, 'shubham@gmail.com', '$2y$10$n6srLfd/BBvMVSnesb', 'shubham@gamil.com', 9125474780),
(14, '', '', '', 0),
(15, '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recruiterdata`
--
ALTER TABLE `recruiterdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signupdata`
--
ALTER TABLE `signupdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recruiterdata`
--
ALTER TABLE `recruiterdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `signupdata`
--
ALTER TABLE `signupdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
