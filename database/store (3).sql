-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 06:14 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `auction`
--

CREATE TABLE `auction` (
  `name` varchar(30) NOT NULL,
  `district` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `pincode` int(6) NOT NULL,
  `address` varchar(70) NOT NULL,
  `bidamount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auction`
--

INSERT INTO `auction` (`name`, `district`, `email`, `phone`, `pincode`, `address`, `bidamount`) VALUES
('23', 'Thiruvananthapuram', 'aaa@gmail.com', 2147483647, 676317, 'aknm gptc thirurangadi ,velimukku (PO),chelari,malappuram,kerala,67631', 3242),
('eeeeeeee', 'Thiruvananthapuram', 'aaa@gmail.com', 2147483647, 676317, 'aknm gptc thirurangadi ,velimukku (PO),chelari,malappuram,kerala,67631', 2323);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`) VALUES
(1, 'Aranmula Kannadi', 1999),
(2, 'Nettupetti', 5000),
(3, 'Elephant', 999),
(4, 'Wooden Elephant', 1111),
(5, 'kathakali-mask', 999),
(6, 'Kubera statue', 1999),
(7, 'Necklace', 9999),
(8, 'Nirapara', 1000),
(9, 'Palakka Necklace', 1600),
(10, 'Shoes', 899),
(11, 'Urli', 3000),
(12, 'Pot', 4999),
(1000, 'Load krishna', 2999),
(1001, 'Nature', 999),
(1002, 'Acrylic painting', 1999),
(1003, 'Maxres painting', 1111),
(1004, 'Sunset', 999),
(1005, 'Lascoax painting', 1999),
(1006, 'Wall Frame', 999),
(1007, 'Automn Walk', 1000),
(1008, 'Horse Painting', 1600),
(1009, 'Nightview Painting', 899),
(1010, 'Decorative Painting', 3000),
(1011, 'Krishna Painting', 4999),
(2000, 'Netturpetti', 36000),
(2001, 'wood ganesh', 40000),
(2002, 'wood elephant', 50000),
(2003, 'Wood Deer', 80000),
(2004, 'Coconut balls', 3000),
(2005, 'Wooden Deer locker', 3000),
(2006, 'Palace Door', 80000),
(2007, 'Wooden Elephant', 8000),
(2008, 'Ramayanam Reading Stand', 1500),
(2009, 'Wood box', 7000),
(2010, 'Museum craft', 9000),
(2011, 'Head of  King', 12000),
(3000, 'Bird', 1000),
(3001, 'Tortoise', 4000),
(3002, 'hipo', 5000),
(3003, 'coconut plate', 800),
(3004, 'Coconut balls', 3000),
(3005, 'Wooden Deer locker', 3000),
(3006, 'Palace Door', 80000),
(3007, 'Wooden Elephant', 8000),
(3008, 'Ramayanam Reading Stand', 1500),
(3009, 'Wood box', 7000),
(3010, 'Museum craft', 9000),
(3011, 'Head of  King', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `address`) VALUES
(7, 'aa', 'aa@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '1111111111', 'dfdf', 'dfdgfgf'),
(8, 'akshay', 'appupkchelembra@gmail.com', '14e1b600b1fd579f47433b88e8d85291', '7994116370', 'malappuram', 'aknm gptc thirurangadi ,velimukku (PO),chelari,malappuram,kerala,676317');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(42, 7, 6, 'Added to cart'),
(74, 8, 3001, 'Added to cart'),
(75, 8, 2, 'Added to cart'),
(76, 8, 1001, 'Added to cart'),
(77, 8, 2001, 'Added to cart'),
(78, 8, 1, 'Added to cart');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`,`item_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3015;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
