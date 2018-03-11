-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 09:55 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ait`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pizza` varchar(255) NOT NULL,
  `quantity` varchar(10) NOT NULL,
  `toppings` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `address`, `phone`, `pizza`, `quantity`, `toppings`, `size`) VALUES
(1, 'asda', '', '', 'DELUXE VEGGIE', '', 'Pepperoni', 'SMALL'),
(2, 'Rupesh ', 'A-202', '987456321', 'DOUBLE CHEESE MARGHERITA', '2', 'Cheese', 'LARGE'),
(3, 'Rupesh Singh', 'A-202', '987456321', 'DELUXE VEGGIE', '2', 'Cheese', 'MEDIUM'),
(4, 'Harsh patel', 'mira road', '5478457865', 'DOUBLE CHEESE MARGHERITA', '4', 'Pepperoni', 'SMALL'),
(5, 'Harshal', 'borivali', '9874561312', 'FARM HOUSE', '3', 'Mushroom', 'MEDIUM'),
(6, 'Harshal', 'borivali', '9874561312', 'FARM HOUSE', '3', 'Mushroom', 'MEDIUM'),
(7, 'Harshal', 'borivali', '9874561312', '5 PEPPER', '3', 'Mushroom', 'MEDIUM'),
(8, 'smith harry', 'newyork', '6547892133', 'PERI-PERI CHICKEN', '5', 'Onion', 'SMALL');

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE IF NOT EXISTS `pizzas` (
`id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `crust` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `pic` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `name`, `crust`, `price`, `pic`) VALUES
(1, 'DELUXE VEGGIE', 'HAND COOKED', 450, 'p1.jpg'),
(2, 'VEG EXTRAVAGANZA', 'HAND COOKED', 250, 'p2.jpg'),
(3, '5 PEPPER', 'HAND COOKED', 350, 'p3.jpg'),
(4, 'DOUBLE CHEESE MARGHERITA', 'HAND COOKED', 500, 'p4.jpg'),
(5, 'FARM HOUSE\r\n', 'HAND COOKED', 300, 'p5.jpg'),
(6, 'PANEER MAKHANI', 'HAND COOKED', 350, 'p6.jpg'),
(7, 'CHICKEN SAUSAGE', 'HAND COOKED', 450, 'p7.jpg'),
(8, 'CHICKEN GOLDEN DELIGHT', 'HAND COOKED', 450, 'p8.jpg'),
(9, 'CHICKEN DOMINATOR', 'HAND COOKED', 650, 'p9.jpg'),
(10, 'PERI-PERI CHICKEN', 'HAND COOKED', 850, 'p10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `regiter`
--

CREATE TABLE IF NOT EXISTS `regiter` (
`id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Dob` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `meal` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiter`
--

INSERT INTO `regiter` (`id`, `Name`, `Email`, `Phone`, `Dob`, `Gender`, `meal`) VALUES
(3, 'rupesh', 'rupesh@gmail.com', '987456321', '1996-08-06', 'Male', 'VEG'),
(4, 'harsh', 'harsh@gmail.com', '9987546542', '1996-07-08', 'Male', 'VEG'),
(5, 'harshal', 'harshal@gmail.com', '9875413665', '1996-06-08', 'Male', 'VEG'),
(8, 'harsh4', 'harsh@qwert.com', '9874563215', '1996-05-02', 'Male', 'VEG'),
(9, 'rupesh', 'rupesh@gmail2.com', '8762', '1996-12-02', 'Male', 'VEG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--
ALTER TABLE `order`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regiter`
--
ALTER TABLE `regiter`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `regiter`
--
ALTER TABLE `regiter`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
