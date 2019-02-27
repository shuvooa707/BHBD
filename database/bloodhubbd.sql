-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 11:49 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodhubbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data_table`
--

CREATE TABLE `admin_data_table` (
  `userName` int(20) NOT NULL,
  `password` int(20) NOT NULL,
  `bDate` int(20) NOT NULL,
  `age` int(10) NOT NULL,
  `gender` int(10) NOT NULL,
  `address` int(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `nationality` int(20) NOT NULL,
  `bloodGroup` int(10) NOT NULL,
  `id` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blood_storage`
--

CREATE TABLE `blood_storage` (
  `group` varchar(20) NOT NULL,
  `donarName` varchar(20) NOT NULL,
  `donarAge` int(20) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `request_board`
--

CREATE TABLE `request_board` (
  `requestee_id` varchar(100) NOT NULL,
  `blood_group` varchar(20) NOT NULL,
  `quantity_request` varchar(20) NOT NULL,
  `date_need_within` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_data_table`
--

CREATE TABLE `user_data_table` (
  `Name` varchar(50) NOT NULL,
  `bDate` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `bloodGroup` varchar(10) NOT NULL,
  `bloodgiven` int(255) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `id` varchar(10000) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data_table`
--

INSERT INTO `user_data_table` (`Name`, `bDate`, `age`, `gender`, `address`, `phone`, `email`, `nationality`, `bloodGroup`, `bloodgiven`, `userName`, `id`, `password`) VALUES
('Shuvo Sarker', '1995-01-01', '22', 'male', 'Somewhere In Dhaka', 1924901115, 'shuvooa707@gmail.com', 'Bangladeshi', 'AB ', 0, 'shuvo', '0', 'abcd'),
('MD Bishal', '2018-08-04', '2', 'male', 'Somewhere in Dhaka', 12902232, 'mdbishal@gmail.com', 'Bangladeshi', 'AB-', 0, 'bishal', '1', 'abcd'),
('Arif Hasan', '1996-06-13', '21', 'male', 'Somewhere in Pabna', 1924901115, 'arif007@gmail.com', 'Bangladeshi', 'AB ', 0, 'arif007', '2', 'abcd');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
