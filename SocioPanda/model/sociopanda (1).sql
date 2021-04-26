-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 08:32 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sociopanda`
--

-- --------------------------------------------------------

--
-- Table structure for table `communityuser`
--

CREATE TABLE `communityuser` (
  `id` int(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communityuser`
--

INSERT INTO `communityuser` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(1, 'Sadia', 'Riya', 'riya@yahoo.com', '01722092262', '12345'),
(2, 'riya', 'myLove', 'riya@gmail.com', '1234567989', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `new_record`
--

CREATE TABLE `new_record` (
  `id` int(50) NOT NULL,
  `trn_date` datetime NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `submittedby` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `title`, `description`, `submittedby`) VALUES
(15, '2021-04-24 22:39:07', 'Hello', 'I miss you', 'riya@love.com'),
(16, '2021-04-24 22:45:39', 'Hello', 'Hello Me ', 'riya@love.com'),
(17, '2021-04-24 22:54:19', 'Hello', 'How are you', 'riya@love.com'),
(18, '2021-04-24 23:03:01', 'Hello', 'ki koro tumi?? amk ki  mone pore na tmr? ', 'riya@love.com'),
(19, '2021-04-24 23:03:29', 'Hello', 'ki koro tumi?? amk ki  mone pore na tmr? ', 'riya@love.com'),
(20, '2021-04-25 06:30:37', 'Need help', 'please save me from monster.', 'riya@love.com'),
(24, '2021-04-25 06:54:28', 'Hello', 'Hi How are you??????????????', 'riya@love.com');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `name` varchar(250) NOT NULL,
  `code` varchar(100) NOT NULL,
  `price` double(9,2) NOT NULL,
  `image` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `code`, `price`, `image`) VALUES
(1, 'Laptop Core i5', 'Laptop01', 600.00, '../assets/image/product-images/laptop.jpg'),
(2, 'Laptop Bag', 'Bag01', 50.00, '../assets/image/product-images/laptop-bag.jpg'),
(3, 'iPhone X', 'iphone12', 700.00, '../assets/image/product-images/iphone.jpg'),
(4, 'mac', '2000hh', 200.00, '../assets\\image\\product-images\\mac.jpg'),
(8, 'Andriod', 'Android232', 20000.00, 'phone.jpg'),
(9, 'Andriod10', 'Android2320', 500.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `selleruser`
--

CREATE TABLE `selleruser` (
  `id` int(100) NOT NULL,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `password` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `selleruser`
--

INSERT INTO `selleruser` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`) VALUES
(1, 'sharirar', 'kabir', 'sha@gmail.com', '0178903738', '12345'),
(2, 'Shahariar', 'Shuvo', 'shuvo@gmail.com', '01722092262', '12345'),
(4, 'Shahariar', 'kabir', 'kabir7days@gmail.com', '01722092262', '0000'),
(5, 'Shahariar', 'Kabir', 'Shahariar4me@gmail.com', '01722092262', '0000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `communityuser`
--
ALTER TABLE `communityuser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `selleruser`
--
ALTER TABLE `selleruser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `communityuser`
--
ALTER TABLE `communityuser`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `selleruser`
--
ALTER TABLE `selleruser`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
