-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220722.bbf4e29d52
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2022 at 03:26 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `northernvintagebarbershop`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `time` time NOT NULL,
  `service` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`id`, `name`, `phone`, `email`, `date`, `time`, `service`) VALUES
(8, 'John', 19, 'joeshua1312@gmail.com', '0', '07:23:00', 'Haircut,Hair Cut & Beard,Hair Straightening Service'),
(10, 'Jack', 123436515, 'joes@email.com', '0', '12:55:00', 'Haircut'),
(12, 'John', 123436515, 'joeshua1312@gmail.com', '2022', '12:58:00', 'Haircut,Beard Trimming'),
(14, 'John', 123436515, 'joeshua1312@gmail.com', '2022-Jul-Sat', '12:01:00', 'Haircut'),
(15, 'John', 192133111, 'Jack@email.com', '2022-Jul-Fri', '12:26:00', 'Beard Trimming,Clean Shaving'),
(16, 'John', 123436515, 'joeshua1312@gmail.com', '2022-Jul-Sun', '13:07:00', 'Haircut,Hair Cut & Beard,Beard Trimming,Clean Shaving,Hair Straightening Service'),
(25, 'Carrie', 123411131, 'carrie@gmail.com', '2022-Jul-Fri', '13:36:00', 'Hair Cut & Beard,Beard Trimming,Clean Shaving');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `msg`) VALUES
(5, 'Jack', 'Jack@email.com', 'Whats up'),
(14, 'John', 'joeshua@gmail.com', 'Hello there'),
(16, 'Carrie', 'carrie@gmail.com', 'Hello there, do you open on Sunday?');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(50) DEFAULT NULL,
  `designation` varchar(255) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `designation`, `created`) VALUES
(2, 'admin', 'admin', 'Owner', '2022-07-20 15:00:02'),
(3, 'Adela Marion', 'admin2', 'Accountant', '2022-07-20 15:01:16'),
(4, 'Andrew Best', 'admin3', 'Head Barber', '2022-07-20 15:01:47'),
(20, 'John Joeshua', 'admin', 'Web Developer', '2022-07-21 07:06:12'),
(23, 'Mike Wazowski', 'bigmike', 'Bodyguard', '2022-07-20 20:25:57'),
(28, 'Bella', 'bella', 'Hairwasher', '2022-07-24 13:08:56'),
(29, 'Huvan Darvend', 'dave123', 'Supplier', '2022-07-24 10:20:48'),
(35, 'Alex', 'alex', 'Head Cleaner', '2022-07-24 14:02:30'),
(37, 'Ranveer', 'ranveer', 'Head Barber', '2022-07-24 20:19:43');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `age` int(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(13) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `age`, `email`, `phone`, `grade`, `msg`) VALUES
(11, 'Huvan Darvend', 25, 'Huvan@gmail.com', 192133111, 'Very Good', 'Very Good services; I am very happy with my hair cut choice. Recommended by my barber'),
(13, 'Matthew', 21, 'matt@gmail.com', 123436414, 'Good', 'Very good service; very timely done'),
(14, 'Alex', 21, 'matt@gmail.com', 123436414, 'Very Good', 'Very good service; i like the new barber styling '),
(16, 'Carrie', 21, 'carrie@gmail.com', 123411131, 'Good', 'I like the service, nice people');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
