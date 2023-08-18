-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 04:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `empid` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `password`, `empid`) VALUES
('receptionist', '1234', '1');

-- --------------------------------------------------------

--
-- Table structure for table `balance`
--

CREATE TABLE `balance` (
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `balance`
--

INSERT INTO `balance` (`balance`) VALUES
(15723);

-- --------------------------------------------------------

--
-- Table structure for table `booked_hist`
--

CREATE TABLE `booked_hist` (
  `phone` bigint(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `Room_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_hist`
--

INSERT INTO `booked_hist` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `swimming`, `price`, `book_id`, `Room_no`) VALUES
(9191919191, 'naman', '102', 'Double bed Non AC', '2023-04-20', '2023-04-22', 2, 'false', 873, 10055, '37'),
(9191919191, 'naman', '102', 'Single bed Non AC', '2023-04-01', '2023-04-02', 1, 'true', 720, 10056, '4'),
(9000000000, 'neelansh', '123', 'Single bed AC', '2023-04-22', '2023-04-28', 6, 'true', 11520, 10057, '15'),
(9191919191, 'naman', '102', 'Double bed Non AC', '2023-04-10', '2023-04-12', 2, 'true', 2610, 10060, '11');

-- --------------------------------------------------------

--
-- Table structure for table `book_id`
--

CREATE TABLE `book_id` (
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_id`
--

INSERT INTO `book_id` (`book_id`) VALUES
(10063);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_booking`
--

CREATE TABLE `confirmed_booking` (
  `phone` bigint(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `Room_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmed_booking`
--

INSERT INTO `confirmed_booking` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `swimming`, `price`, `book_id`, `Room_no`) VALUES
(9191919191, 'naman', '102', 'Double bed Non AC', '2023-04-20', '2023-04-21', 1, 'true', 331, 10058, '21'),
(9191919191, 'naman', '102', 'Single bed Non AC', '2023-04-01', '2023-04-05', 4, 'true', 1240, 10059, '13'),
(9191919191, 'naman', '102', 'Single bed Non AC', '2023-05-01', '2023-05-02', 1, 'true', 963, 10061, '34');

-- --------------------------------------------------------

--
-- Table structure for table `frequent_user`
--

CREATE TABLE `frequent_user` (
  `token_no` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` bigint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frequent_user`
--

INSERT INTO `frequent_user` (`token_no`, `name`, `phone`) VALUES
(795, 'naman', 9191919191),
(250, 'naman', 9191919191);

-- --------------------------------------------------------

--
-- Table structure for table `rooms_count`
--

CREATE TABLE `rooms_count` (
  `room_type` varchar(20) NOT NULL,
  `available_rooms` int(11) NOT NULL,
  `occupied_rooms` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms_count`
--

INSERT INTO `rooms_count` (`room_type`, `available_rooms`, `occupied_rooms`, `price`) VALUES
('Single bed Non AC', 8, 3, 500),
('Double bed Non AC', 7, 3, 1000),
('Single bed AC', 9, 1, 1500),
('Double bed AC', 10, 0, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `temp_session`
--

CREATE TABLE `temp_session` (
  `phone` bigint(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp_session`
--

INSERT INTO `temp_session` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
(9191919191, '1234', 'naman', 'naman@mail.com', '102', '2001-01-01');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `phone` bigint(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`phone`, `password`, `name`, `email`, `idproof`, `dob`) VALUES
(9191919191, '1234', 'naman', 'naman@mail.com', '102', '2001-01-01'),
(9000000000, '1234', 'neelansh', 'neelansh@mail.com', '123', '2001-10-10');

-- --------------------------------------------------------

--
-- Table structure for table `user_room_book`
--

CREATE TABLE `user_room_book` (
  `phone` bigint(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `idproof` varchar(20) NOT NULL,
  `room_type` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `days` int(11) NOT NULL,
  `swimming` varchar(5) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Waiting',
  `price` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  `Room_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_room_book`
--

INSERT INTO `user_room_book` (`phone`, `name`, `idproof`, `room_type`, `checkin`, `checkout`, `days`, `swimming`, `status`, `price`, `book_id`, `Room_no`) VALUES
(9000000000, 'neelansh', '123', 'Single bed AC', '2023-04-22', '2023-04-28', 6, 'true', 'Confirmed', 11520, 10057, '15'),
(9191919191, 'naman', '102', 'Double bed Non AC', '2023-04-20', '2023-04-21', 1, 'true', 'Confirmed', 1300, 10058, '21'),
(9191919191, 'naman', '102', 'Single bed Non AC', '2023-04-01', '2023-04-05', 4, 'true', 'Confirmed', 3200, 10059, '13'),
(9191919191, 'naman', '102', 'Double bed Non AC', '2023-04-10', '2023-04-12', 2, 'true', 'Confirmed', 2900, 10060, '11'),
(9191919191, 'naman', '102', 'Single bed Non AC', '2023-05-01', '2023-05-02', 1, 'true', 'Confirmed', 1070, 10061, '34'),
(9191919191, 'naman', '102', 'Single bed AC', '2023-04-19', '2023-04-21', 2, 'false', 'Waiting', 3000, 10062, 'To be Provided');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booked_hist`
--
ALTER TABLE `booked_hist`
  ADD PRIMARY KEY (`book_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
