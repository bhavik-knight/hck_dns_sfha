-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 23, 2022 at 03:07 AM
-- Server version: 5.7.40-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trial_dns`
--

-- --------------------------------------------------------

--
-- Table structure for table `trial_adventures`
--

CREATE TABLE `trial_adventures` (
  `id` int(11) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `tripDate` date NOT NULL,
  `duration` int(3) NOT NULL,
  `summary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trial_adventures`
--

INSERT INTO `trial_adventures` (`id`, `heading`, `tripDate`, `duration`, `summary`) VALUES
(1, 'Alaska', '2022-12-25', 999, 'Eve, Let&#039;s move to Alaska! \r\nLove, V'),
(5, 'Paris', '2022-12-01', 3, 'Where are you, V? I am here at your Apartment!!\r\nLove,\r\nEve'),
(6, 'London', '2022-12-06', 1, 'Let&#039;s leave forever!'),
(7, 'Rome', '2020-07-23', 2, 'My baby shot me down :&#039;('),
(8, 'Russia', '2022-11-01', 3, 'Surprise, Konstantine!'),
(9, '14', '2022-11-10', 14, '141414'),
(10, 'Alaska', '2023-02-10', 241, 'Let&#039;s GOOOOOOOOOOOOO!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trial_adventures`
--
ALTER TABLE `trial_adventures`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trial_adventures`
--
ALTER TABLE `trial_adventures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
