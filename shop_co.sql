-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 05:48 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop.co`
--

-- --------------------------------------------------------

--
-- Table structure for table `product-d-nav`
--

CREATE TABLE `product-d-nav` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product-d-nav`
--

INSERT INTO `product-d-nav` (`id`, `name`, `price`, `image`) VALUES
(1, '', 0, 'image 1.jpg'),
(2, '', 0, 'image 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product-details`
--

CREATE TABLE `product-details` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product-details`
--

INSERT INTO `product-details` (`id`, `name`, `price`, `image`) VALUES
(1, 'Polo with Contrast Trims', 212, 'Polo with Contrast Trims.png'),
(2, 'Gradient Graphic T-shirt', 145, 'Gradient Graphic T-shirt.png'),
(3, 'Polo with Tipping Details', 180, 'Polo with Tipping Details.png'),
(4, 'Black Striped T-shirt', 120, 'Black Striped T-shirt.png'),
(6, '', 0, 'image 1.jpg'),
(7, '', 0, 'image 2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `Product-name` varchar(50) NOT NULL,
  `Price` int(50) NOT NULL,
  `Product-image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `Product-name`, `Price`, `Product-image`) VALUES
(1, 'T-SHIRT WITH TAPE DETAILS', 120, 'T-shirt-with-tape.png'),
(2, 'SKINNY FIT JEANS', 240, 'Skinny-fit-jeans.png'),
(3, 'CHECKERED SHIRT', 180, 'Checked-Shirt.png'),
(4, 'Sleeve Striped T-Shirt', 130, 'Sleeve-Striped-T-Shirt.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product-details`
--
ALTER TABLE `product-details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Product-name` (`Product-name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product-details`
--
ALTER TABLE `product-details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
