-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2021 at 11:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `problema2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', '2017-11-10 01:38:32');

-- --------------------------------------------------------

--
-- Table structure for table `tblenquiry`
--

CREATE TABLE `tblenquiry` (
  `id` int(11) NOT NULL,
  `FullName` varchar(100) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `MobileNumber` char(10) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `Status` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblenquiry`
--

INSERT INTO `tblenquiry` (`id`, `FullName`, `EmailId`, `MobileNumber`, `Subject`, `Description`, `PostingDate`, `Status`) VALUES
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'a', '2021-03-27 10:11:32', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'a', '2021-03-28 14:05:49', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'a', '2021-03-28 14:05:50', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:05:56', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:07:50', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:08:30', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:08:30', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:09:02', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:09:05', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:09:50', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:09:50', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:09:51', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asdf', '2021-03-28 14:09:57', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asdf', '2021-03-28 14:10:23', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:10:24', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:11:26', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:11:27', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:12:11', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:12:12', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:13:55', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:14:09', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:14:15', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:17:57', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:17:58', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:18:28', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:18:57', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:18:58', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:18:59', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:19:36', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'asd', '2021-03-28 14:19:37', 1),
(0, 'Jonel', 'barbujonel061@gmail.com', '1234567891', 'info', 'ale', '2021-03-28 14:19:52', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:20:08', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:20:51', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:21:27', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:21:28', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:22:22', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:22:23', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:23:31', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:23:32', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:24:22', 1),
(0, 'Jonel Barbu ', 'barbujonel061@gmail.com', '1234567891', 'info3', 'as', '2021-03-28 14:24:26', 1),
(0, 'Jonel Barbu ', 'barbujonel@gmail.com', '1234567891', 'info5', 'a', '2021-03-28 14:38:32', 1),
(0, 'jonel B', 'barbujonel99@gmail.com', '1234567891', 'info6', 'Salut!', '2021-03-31 05:49:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(4, 'jonel061', 'barbujonel061@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'jonel0612', 'barbujonel@gmail.com', '2bdefad6d098b50441c434cc8a89e184'),
(6, 'Jonel99', 'barbujonel99@gmail.com', '2bdefad6d098b50441c434cc8a89e184');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
