-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 04:27 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_item`
--

CREATE TABLE `add_item` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `item_qty` int(10) NOT NULL,
  `date_entry` date NOT NULL,
  `item_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `add_item`
--

INSERT INTO `add_item` (`item_id`, `item_name`, `item_qty`, `date_entry`, `item_image`) VALUES
(1, 'pencil', 10, '2020-05-08', ''),
(3, 'marker', 10, '2020-05-10', ''),
(4, 'notepad', 10, '2020-05-17', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `Admin_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `Admin_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `Admin_password` varchar(50) COLLATE utf8_bin NOT NULL,
  `Admin_gender` varchar(10) COLLATE utf8_bin NOT NULL,
  `Admin_age` int(10) NOT NULL,
  `Admin_address` varchar(50) COLLATE utf8_bin NOT NULL,
  `Admin_phone` bigint(20) NOT NULL,
  `Token` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`Admin_name`, `Admin_email`, `Admin_password`, `Admin_gender`, `Admin_age`, `Admin_address`, `Admin_phone`, `Token`) VALUES
('Gaurav Kumar', 'ankit4gaurav@gmail.com', 'gaurav1998', 'male', 22, 'D-113 D.D.A Flats Kalkaji New Delhi-110019', 9654195767, 1),
('Ankit', 'ankitkumar29.01.1998@gmail.com', 'ankit_gaurav1998', 'male', 21, 'D-96 Khanpur', 9654195767, 2);

-- --------------------------------------------------------

--
-- Table structure for table `issue_item`
--

CREATE TABLE `issue_item` (
  `e_id` int(10) NOT NULL,
  `e_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(20) COLLATE utf8_bin NOT NULL,
  `item_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL,
  `depart` varchar(20) COLLATE utf8_bin NOT NULL,
  `issue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `issue_item`
--

INSERT INTO `issue_item` (`e_id`, `e_name`, `item_name`, `item_id`, `qty`, `depart`, `issue_date`) VALUES
(1, 'Gaurav', 'pen', 2, 20, 'technology', '2020-05-07'),
(2, 'Ram Kumar', 'paper', 9, 7, 'account', '2020-05-02'),
(3, 'Ankit Kumar', 'paper', 9, 3, 'account', '2020-05-03');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `item_id` int(10) NOT NULL,
  `item_name` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`item_id`, `item_name`) VALUES
(1, 'pencil'),
(2, 'pen'),
(3, 'marker'),
(4, 'notepad'),
(5, 'stapler'),
(6, 'clip folder'),
(7, 'paper bag'),
(8, 'punch'),
(9, 'paper');

-- --------------------------------------------------------

--
-- Table structure for table `staff_registration`
--

CREATE TABLE `staff_registration` (
  `id` int(10) NOT NULL,
  `emp_name` varchar(50) COLLATE utf8_bin NOT NULL,
  `mail` varchar(50) COLLATE utf8_bin NOT NULL,
  `addr` varchar(100) COLLATE utf8_bin NOT NULL,
  `department` varchar(50) COLLATE utf8_bin NOT NULL,
  `date_birth` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `staff_registration`
--

INSERT INTO `staff_registration` (`id`, `emp_name`, `mail`, `addr`, `department`, `date_birth`) VALUES
(1, 'Gaurav', 'ankit4gaurav@gmail.com', 'ankit4gaurav@gmail.com', 'technology', '2020-05-13'),
(2, 'Ram Kumar', 'xyz@gmail.com', 'D-164 D.D.D. A Flats', 'account', '2020-05-19'),
(3, 'Ankit Kumar', 'ankitkumar29.01.1998@gmail.com', 'ankitkumar29.01.1998@gmail.com', 'account', '2020-05-21'),
(4, 'Sushil Kumar', 'Sushil@gmail.com', 'Palam', 'purchase', '2020-05-22'),
(5, 'vinay', 'ankit4gaurav@gmail.com', 'D-112 d.d.a flats kalkaji', 'clerk', '2021-04-26'),
(6, 'Aakash Gupta', 'akash@gmail.com', 'D-164 D.D.A FLATS KALKAJI', 'account', '1998-04-27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_item`
--
ALTER TABLE `add_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`Admin_email`),
  ADD UNIQUE KEY `Token` (`Token`);

--
-- Indexes for table `issue_item`
--
ALTER TABLE `issue_item`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `staff_registration`
--
ALTER TABLE `staff_registration`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `Token` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
