-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2019 at 08:44 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studata`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_details2`
--

CREATE TABLE `student_details2` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `number` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `city` varchar(150) NOT NULL,
  `course` varchar(100) NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_details2`
--

INSERT INTO `student_details2` (`id`, `name`, `number`, `email`, `city`, `course`, `date`) VALUES
(7, 'addsfg', '9999999999', 'test@dp.com', 'hyderabad', 'PYTHON', '2019-11-11 14:05:33.000000'),
(8, 'addsfg', '9999999999', 'test@dp.com', 'hyderabad', 'JAVA', '2019-11-11 14:47:07.000000'),
(9, 'addsfg', '9999999999', 'test@dp.com', 'hyderabad', 'JAVA', '2019-11-11 14:48:41.000000'),
(10, 'addsfg', '9999999999', 'test@dp.com', 'hyderabad', 'JAVA', '2019-11-11 14:49:07.000000'),
(11, 'Mahesh', '9999999999', 'test@dp.com', 'hyderabad', 'JAVA', '2019-11-11 14:51:50.000000'),
(15, 'prime', '0987654321', 'admin@skillmonks.com', 'HYD', '', '2019-12-03 10:15:27.000000'),
(16, 'ORIEN IT', '0987654321', 'admin@skillmonks.com', 'HYD', 'CYBER SECURITY', '2019-12-16 08:44:06.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_details2`
--
ALTER TABLE `student_details2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_details2`
--
ALTER TABLE `student_details2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
