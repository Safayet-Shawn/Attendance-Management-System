-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 01:31 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attendance`
--

-- --------------------------------------------------------

--
-- Table structure for table `atn`
--

CREATE TABLE `atn` (
  `id` int(100) NOT NULL,
  `roll` int(150) NOT NULL,
  `attend` varchar(150) NOT NULL,
  `attend_time` date NOT NULL,
  `batch_id` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `atn`
--

INSERT INTO `atn` (`id`, `roll`, `attend`, `attend_time`, `batch_id`) VALUES
(28, 1162, '', '2020-01-07', '0'),
(29, 1165, '', '2020-01-07', '0'),
(30, 1149, '', '2020-01-07', '0'),
(31, 1166, '', '2020-01-07', '0'),
(32, 1161, '', '2020-01-07', '0'),
(43, 1149, 'present', '2020-01-08', '0'),
(44, 1161, 'present', '2020-01-08', '0'),
(45, 1162, 'absent', '2020-01-08', '0'),
(46, 1165, 'absent', '2020-01-08', '0'),
(47, 1166, 'absent', '2020-01-08', '0'),
(72, 1149, 'present', '2020-01-10', '9A'),
(73, 1161, 'present', '2020-01-10', '9A'),
(74, 1162, 'present', '2020-01-10', '9A'),
(75, 1165, 'absent', '2020-01-10', '9A'),
(76, 1166, 'absent', '2020-01-10', '9A'),
(81, 331, 'present', '2020-01-10', '9B'),
(82, 1149, 'present', '2020-01-10', '9B'),
(83, 1234, 'absent', '2020-01-10', '9B'),
(84, 2222, 'absent', '2020-01-10', '9B'),
(85, 331, 'present', '2020-01-10', '9B'),
(86, 1149, 'present', '2020-01-10', '9B'),
(87, 1234, 'absent', '2020-01-10', '9B'),
(88, 2222, 'absent', '2020-01-10', '9B'),
(89, 331, 'present', '2020-01-10', '9B'),
(90, 1149, 'absent', '2020-01-10', '9B'),
(91, 1234, 'absent', '2020-01-10', '9B'),
(92, 2222, 'present', '2020-01-10', '9B'),
(93, 331, 'present', '2020-01-10', '9B'),
(94, 1149, 'absent', '2020-01-10', '9B'),
(95, 1234, 'absent', '2020-01-10', '9B'),
(96, 2222, 'present', '2020-01-10', '9B'),
(97, 1, '', '0000-00-00', ''),
(98, 12, '', '0000-00-00', ''),
(99, 1232, '', '0000-00-00', ''),
(100, 2222, '', '0000-00-00', ''),
(101, 133, '', '0000-00-00', ''),
(102, 999, '', '0000-00-00', ''),
(103, 888, '', '0000-00-00', ''),
(104, 888, 'present', '2020-01-12', '10A'),
(105, 999, 'present', '2020-01-12', '10A');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `ba` int(150) NOT NULL,
  `batch` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`id`, `name`, `ba`, `batch`) VALUES
(1, 'A', 9, 'Boys Class'),
(2, 'B', 9, 'Girls Class'),
(3, 'C', 9, 'Combine'),
(4, 'A', 8, 'Boys class'),
(5, 'B', 7, 'Boys'),
(7, 'A', 10, 'Girls'),
(8, 'A', 9, 'combine');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `roll` int(150) NOT NULL,
  `cnt` int(150) NOT NULL,
  `batch` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `roll`, `cnt`, `batch`) VALUES
(43, 'Jobayer Ahmed', 1162, 1726681903, '9A'),
(44, 'Sujon Das', 1165, 1378908765, '9A'),
(45, 'Dipok Roy', 1149, 1678908765, '9A'),
(46, 'Safayet Shawn', 1166, 1878908765, '9A'),
(47, 'Prokash Das', 1161, 1926681903, '9A'),
(49, 'Sujon Das', 2222, 1378908765, '9B'),
(50, 'Jobayer Ahmed', 1149, 1678908765, '9B'),
(51, 'Dipok Roy', 1234, 1378908765, '9B'),
(52, 'Robiul Alom', 331, 1926681903, '9B'),
(53, 'Didar Hossain', 1, 1378908765, '9C'),
(54, 'Sazzat Sakil', 12, 1926681903, '9C'),
(55, 'Jannatul Ferdous', 1232, 1678908765, '9C'),
(56, 'Tanim Khan', 2222, 1726681903, '9C'),
(57, 'Sekh Sojib', 133, 186681903, '9C'),
(58, 'Jobayer Ahmed', 999, 1926681903, '10A'),
(59, 'Dipok Roy', 888, 1926681903, '10A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atn`
--
ALTER TABLE `atn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atn`
--
ALTER TABLE `atn`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
