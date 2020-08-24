-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2020 at 09:02 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travelix`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `hotelid` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_price` varchar(50) NOT NULL,
  `hotel_rating` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`hotelid`, `hotel_name`, `hotel_price`, `hotel_rating`) VALUES
(1, 'Aestro Hotel', 'From $200/Night', 4),
(2, 'Enchanted Garden', 'From $300/Night', 5);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'huzefa', 'huzefa@gmail.com', 'u', 'gd dr r rdtdr dr rtdt d'),
(3, 'huzefa', 'huzefa_shahjapur@hotmail.com', 'new', 'thh  tt f h ff hfh f'),
(4, '', '', '', ''),
(5, '', '', '', ''),
(6, 'huzefa', 'huzefa_shahjapur@hotmail.com', 'new', 'urfffff t  thtfhthtfht hthftf ft'),
(7, 'huzefa', 'hhuzefa525@gmail.com', 'yjyj', 'i am new'),
(8, 'huzefa', 'huzefa@gmail.com', 'huzefa@gmil.com', 'esfefe fes '),
(9, 'huzefa', 'huzefa@gmail.com', 'huzefa@gmil.com', 'esfefe fes '),
(10, 'new', 'huzefa@gmail.com', 'fdgfdg ', 'd gd gdgdg gdf gd'),
(11, 'huzefa', 'huzefa@gmail.com', 'fdgfdg ', 'dsf sd fsd fs fs');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `orderid` int(15) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_phone` varchar(15) NOT NULL,
  `customer_packagedetail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`orderid`, `customer_name`, `customer_email`, `customer_phone`, `customer_packagedetail`) VALUES
(2, 'huzefa', 'huzefa@gmail.com', '0525222524', ' xtgfdh hfgfhgfhcgvbvnnvnnv'),
(3, 'e', 'se@gmail.com', '030-22-382470', 'vg    vgvhgv h'),
(4, 'wow', 'wow@gmail.com', '030-22-382470', '7tyr r tyr tyrtyrtr ty tyrytr ');

-- --------------------------------------------------------

--
-- Table structure for table `tbmembers`
--

CREATE TABLE `tbmembers` (
  `member_id` int(5) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbmembers`
--

INSERT INTO `tbmembers` (`member_id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Kimani', 'Kahiga', 'kahiga@gmail.com', '547da2b03f947606f1d06a8dec093e64'),
(2, 'MacDonald', 'Ngowi', 'mcbcrue08@gmail.com', '14b876400a7ae986df9b17fbaffb9eca'),
(3, 'test', 'testt', 'test@example.com', '098f6bcd4621d373cade4e832627b4f6'),
(4, 'huzefa', 'hussain', 'huzefa@nu.edu.pk', '37cfd605ae7123cba387973807ae48d0'),
(7, 'huzefa', 'hussain', 'k163962@nu.edu.pk', '37cfd605ae7123cba387973807ae48d0'),
(8, 'sana', 'arif', 'sanaarif123@gmail.com', '123456'),
(9, 'db', 'fifth', 'db@gmail.com', 'huzefa.53'),
(11, 'newvoter', 'voternew', 'voter@nu.edu.pk', 'huzefa.53'),
(12, 'taha', 'ali', 'taha@gmail.com', '123456'),
(13, 'new', '2', 'huzefa@gmail.com', '123'),
(14, 'new2', 'new4', 'huzefa.hussain1111@gmail.com', '12345'),
(15, 'new2', 'new4', 'huzefa.hussain1111@gmail.com', '12345'),
(16, 'grdfggf', 'gddg', 'huzefa.hussain1111@gmail.comf', '12'),
(17, 'new2', 'new4', 'huzefa.hussain1111@gmail.com', '12345'),
(18, 'new2', 'new4', 'huzefa.hussain1111@gmail.com', '12345'),
(19, 'ffdgf', 'ffdg', 'huzefa.hussain1111@gmail.com', '12345'),
(20, 'ffdgf', 'ffdg', 'huzefa.hussain1111@gmail.com', '12345'),
(21, 'nw', 'e', 'huzefa@gmail.com', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`hotelid`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `tbmembers`
--
ALTER TABLE `tbmembers`
  ADD PRIMARY KEY (`member_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `hotelid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `orderid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbmembers`
--
ALTER TABLE `tbmembers`
  MODIFY `member_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
