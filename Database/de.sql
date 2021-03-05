-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 08:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

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
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `rmob` int(11) NOT NULL,
  `rpost` varchar(255) NOT NULL,
  `rpassword` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `rname`, `remail`, `rmob`, `rpost`, `rpassword`) VALUES
(2, 'dharmayu', 'ram@123', 0, 'customer', '567'),
(3, 'Meet shah ', 'mshah5225@gmail.com', 0, 'customer', '2345'),
(4, 'rh76', 'Vankani@gmail.com', 0, 'customer', '890'),
(5, 'meet', 'Vankani@gmail.com', 0, 'cook', '5676867'),
(6, 'Arjun ', 'arjun123@gmail.com', 0, 'cook', 'arjun'),
(7, 'Arjun vankani', 'Vankani@gmail.com', 0, 'cook', '12345'),
(8, 'arjun', 'Vankani@gmail.com', 0, 'cook', '1234'),
(9, 'Meet shah ', 'mshah5225@gmail.com', 123456789, 'customer', '1234'),
(10, 'Meet shah ', 'mshah5225@gmail.com', 0, 'cook', '123'),
(11, 'user', 'user@gmail.com', 0, 'customer', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
