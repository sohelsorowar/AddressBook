-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 09:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `authentication`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_db`
--

CREATE TABLE IF NOT EXISTS `add_db` (
`id` int(20) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_db`
--

INSERT INTO `add_db` (`id`, `fullname`, `nickname`, `email`, `address`, `phone`) VALUES
(2, 'sohel Sorowar ', 'sohel', 'sohelsorowar@gmail.com', 'Rajsahi University !', 1521339261),
(3, 'Nirjhor Nir ', 'ds', 'sohelsorowar@gmail.com', 'xcx', 1521339261),
(4, 'dsf ', 'ds', 'shiam@gmail.com', 'Rajsahi University !', 1521339261),
(5, 'Atiqul Islam ', ' Atik', 'atiqulislam@gmail.com', ' ChapaiNawabganj', 1717294539);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(24, 'Sohel ', 'sohelsorowar@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(25, 'Nir', 'nir@g.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(27, 'Shaon', 'shaon@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(29, 'Rahul', 'rahul@gmail.com', 'e2fc714c4727ee9395f324cd2e7f331f'),
(31, 'sagor', 'sagor@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(32, '13055417', 'sohelsorowar@gmail.com', '202cb962ac59075b964b07152d234b70'),
(33, '13055417', 'sohelsorowar@gmail.com', '202cb962ac59075b964b07152d234b70'),
(34, '13055417', 'sohelsorowar@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(35, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(36, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(37, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(38, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(39, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(40, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(41, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(42, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(43, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(44, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(45, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(46, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(47, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(48, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(49, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(50, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(51, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(52, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(53, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(54, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(55, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(56, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(57, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(58, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(59, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(60, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(61, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(62, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(63, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(64, 'Sohel', 'sohelsorowar@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(65, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(66, '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(67, 'Atikul Islam', 'Atik@Ggmail.com', '3ccd65a41593c161e702256f5b09f780');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_db`
--
ALTER TABLE `add_db`
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
-- AUTO_INCREMENT for table `add_db`
--
ALTER TABLE `add_db`
MODIFY `id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=68;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
