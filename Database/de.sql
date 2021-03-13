-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 09:49 AM
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
-- Database: `de`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `aid` int(255) NOT NULL,
  `aemail` varchar(255) NOT NULL,
  `apass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`aid`, `aemail`, `apass`) VALUES
(1, 'admin@ycoc.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `cid` int(11) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cmob` bigint(20) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `carea` varchar(255) NOT NULL,
  `cgender` varchar(10) NOT NULL,
  `cspec` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `cimage` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`cid`, `cname`, `cmob`, `cemail`, `carea`, `cgender`, `cspec`, `cpass`, `cimage`) VALUES
(8, 'ramprasad  sarakar', 12345641, 'ram@gmail.com', 'Porbandar', 'male', 'pasta', '123abcABC@', ''),
(9, 'Meet', 1234567890, 'mshah5225@gmail.com', 'geeta chowk', 'male', 'pizza', '123abcABC@', ''),
(16, 'Ruchit', 9697291291, 'ruchitkukadiya@gmail.com', 'pani ni tanki', 'male', 'chinese', 'D@tu9191', '');

-- --------------------------------------------------------

--
-- Table structure for table `cook_request`
--

CREATE TABLE `cook_request` (
  `crid` int(11) NOT NULL,
  `crname` varchar(255) NOT NULL,
  `crmob` bigint(20) NOT NULL,
  `cremail` varchar(255) NOT NULL,
  `crarea` varchar(255) NOT NULL,
  `crgender` varchar(10) NOT NULL,
  `crspec` varchar(255) NOT NULL,
  `crpass` varchar(255) NOT NULL,
  `crimage` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cook_request`
--

INSERT INTO `cook_request` (`crid`, `crname`, `crmob`, `cremail`, `crarea`, `crgender`, `crspec`, `crpass`, `crimage`) VALUES
(115, 'Meet Shah', 1234567890, 'mshah5225@gmail.com', 'geeta chowk', 'male', 'mshah5225@gmail.com', '123abcABC@', ''),
(116, 'Meet Shah', 1234567890, 'mshah5225@gmail.com', 'geeta chowk', 'male', 'mshah5225@gmail.com', '123abcABC@', 0x77616c6c7061706572666c6172652e636f6d5f77616c6c7061706572202837292e6a7067),
(136, 'Meet Shah', 1234567890, 'mshah5225@gmail.com', 'geeta chowk', 'male', 'mshah5225@gmail.com', '123abcABC@', ''),
(137, 'Meet Shah', 1234567890, 'mshah5225@gmail.com', 'geeta chowk', 'male', 'mshah5225@gmail.com', '123abcABC@', '');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file_name`, `uploaded_on`, `status`) VALUES
(115, 'meet', '2021-03-03 22:10:43', '1'),
(116, '20190623_170639.jpg', '2021-03-03 22:12:02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `rmob` bigint(11) NOT NULL,
  `rlandmark` text NOT NULL,
  `rpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `rname`, `remail`, `rmob`, `rlandmark`, `rpass`) VALUES
(34, 'Meet shah ', 'mshah5225@gmail.com', 7016160449, 'geeta choowk', '123abcABC@'),
(77, 'ram', 'test@123.com', 123456789, 'UP', '123abcABC%'),
(78, 'Dharmayu pathak', 'dharmayu888@gmail.com', 1234567890, 'leela udan', 'Rchu!t123'),
(79, 'Ramprasad Sarkar', 'ram@test.com', 123456789, 'UP', 'abcABC123#');

-- --------------------------------------------------------

--
-- Table structure for table `rimages`
--

CREATE TABLE `rimages` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL,
  `status` enum('1','0') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cook_request`
--
ALTER TABLE `cook_request`
  ADD PRIMARY KEY (`crid`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD KEY `id` (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rimages`
--
ALTER TABLE `rimages`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `aid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cook_request`
--
ALTER TABLE `cook_request`
  MODIFY `crid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `rimages`
--
ALTER TABLE `rimages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cook_request` (`crid`);

--
-- Constraints for table `rimages`
--
ALTER TABLE `rimages`
  ADD CONSTRAINT `rimages_ibfk_1` FOREIGN KEY (`id`) REFERENCES `cook_request` (`crid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
