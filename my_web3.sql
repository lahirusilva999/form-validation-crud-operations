-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 04, 2024 at 10:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_web3`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `member_id` int UNSIGNED NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `reg_date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `email`, `password`, `reg_date_time`) VALUES
(5, 'Kamal', 'Fernando', 'kamal@example.com', '1258', '2024-08-28 00:00:00'),
(7, 'Nimal', 'Fernando', 'nimal@gmail.com', '9999', '2024-08-12 14:33:00'),
(8, 'Scarlet', 'Mccormick', 'cyqefimuq@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '1991-10-27 00:00:00'),
(9, 'Cruz', 'Blackburn', 'sofu@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '2023-01-16 00:00:00'),
(11, 'Nalaka', 'Alwis', 'nalaka@gmail.com', '202cb962ac59075b964b07152d234b70', '2024-08-24 00:00:00'),
(12, 'Nuwan', 'Kumara', 'nuwan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2024-08-30 00:00:00'),
(13, 'Kamal', 'Thisara', 'kamal@gmail', '202cb962ac59075b964b07152d234b70', '2024-09-03 00:00:00'),
(14, 'Anuradha', 'Kurera', 'anuradha@gmail.com', '39cec6d4d21b5dade7544dab6881423e', '2024-09-06 00:00:00'),
(15, 'Nihal', 'Perera', 'nihal@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '2024-08-21 00:00:00'),
(17, 'Ayosh', 'De silva', 'Ayosh@gmail.com', 'fa246d0262c3925617b0c72bb20eeb1d', '2024-08-23 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `member_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
