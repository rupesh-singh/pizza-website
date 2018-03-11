-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 06:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ait`
--

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(5000) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pizza` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `toppings` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `address`, `phone`, `pizza`, `quantity`, `toppings`, `size`) VALUES
(1, 'harsh', 'c-33 miraroad sec-10 shantinagar 401107', '9768686287', 'DOUBLE CHEESE MARGHERITA', 3, 'Pepperoni', 'SMALL');

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `crust` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `pic` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `regiter` (
  `id` int(10) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Dob` varchar(255) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `meal` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regiter`
--

INSERT INTO `regiter` (`id`, `Name`, `Email`, `Phone`, `Dob`, `Gender`, `meal`) VALUES
(3, 'rupesh', 'rupesh@gmail.com', '987456321', '1996-08-06', 'Male', 'VEG'),
(4, 'harsh', 'harsh@gmail.com', '9987546542', '1996-07-08', 'Male', 'VEG'),
(5, 'harshal', 'harshal@gmail.com', '9875413665', '1996-06-08', 'Male', 'VEG'),
(8, 'harsh4', 'harsh@qwert.com', '9874563215', '1996-05-02', 'Male', 'VEG'),
(9, 'harsh', 'harshkumar.jp@somaiya.edu', '9768686287', '1996-10-07', 'Male', 'VEG'),
(10, 'ankit', 'ankit.bhikadiya@gmail.com', '987585768', '2017-04-07', 'Male', 'VEG'),
(11, '', 'diyoraharsh06@gmail.com', '9768686287', '2017-01-12', 'Male', 'VEG'),
(12, 'harsh7', 'diyora123@gmail.com', '876385694382', '1996-12-01', 'Male', 'VEG'),
(13, 'harsh7', 'diyora123@gmail.com', '876385694382', '1996-12-01', 'Male', 'VEG');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `regiter`
--
ALTER TABLE `regiter`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
