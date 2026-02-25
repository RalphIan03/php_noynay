-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2026 at 01:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cp4s_noynay_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `prod_id` int(11) NOT NULL,
  `prod_name` varchar(100) NOT NULL,
  `prod_quantity` int(11) NOT NULL,
  `prod_type` varchar(100) NOT NULL,
  `prod_price` double NOT NULL,
  `prod_date_added` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`prod_id`, `prod_name`, `prod_quantity`, `prod_type`, `prod_price`, `prod_date_added`) VALUES
(1, 'Wireless Mouses', 50, 'Electronics', 599, '2025-11-25'),
(4, 'Laptop Stand', 30, 'Accessories', 899, '2025-11-22'),
(5, 'Bluetooth Speaker', 25, 'Audio', 1299, '2025-11-21'),
(7, 'Gaming Headset', 20, 'Audio', 1599, '2025-11-19'),
(10, 'Power Bank 10000mAh', 45, 'Electronics', 999, '2025-11-16'),
(12, 'Router New Brand', 11, 'Electronics', 1500, '2025-11-27'),
(13, 'Monitor', 10, 'Electronics', 15999.99, '2025-11-26'),
(14, 'CPU', 10, 'Parts', 10000.45, '2025-11-26');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_status` varchar(10) NOT NULL,
  `transaction_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `transaction_name`, `user_id`, `transaction_status`, `transaction_date`) VALUES
(1, 'Purchase - Item A', 1, 'Completed', '2025-01-10'),
(2, 'Subscription Renewal', 5, 'Pending', '2025-01-12'),
(3, 'Payment - Invoice 1032', 5, 'Semi-App', '2025-01-15'),
(4, 'Refund Request', 9, 'Rejected', '2025-01-18'),
(5, 'Purchase - Item B', 6, 'Approved', '2025-01-20'),
(6, 'Wallet Top-Up', 9, 'Completed', '2025-01-21'),
(7, 'Service Fee Payment', 3, 'Pending', '2025-01-22'),
(8, 'Purchase - Item C', 11, 'Completed', '2025-01-23'),
(9, 'Membership Upgrade', 2, 'Completed', '2025-01-25'),
(10, 'Subscription Cancellation', 10, 'Semi-App', '2025-01-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `address` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `name`, `age`, `address`, `username`, `password`) VALUES
(5, 'Angela Torres', 24, 'Cebu City', 'AnnaToress', '1234'),
(9, 'Kyla Dimagiba', 21, 'Baguio City', '', ''),
(10, 'Josef Lim', 35, 'Manila', '', ''),
(11, 'Patricia Reyes', 28, 'General Santos City', '', ''),
(12, 'Mark Angelo Dañosos', 18, 'Digos City', '', ''),
(13, 'Chaff Hickory Vellila', 20, 'Digos City', '', ''),
(14, 'Latrel Tagalog', 29, 'Digos City', '', ''),
(16, 'Chaff', 30, 'Digos City', 'chaffgpt', '12341234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
