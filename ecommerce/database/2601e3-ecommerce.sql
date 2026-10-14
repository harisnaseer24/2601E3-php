-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 14, 2026 at 12:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2601e3-ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(250) NOT NULL,
  `cat_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`, `cat_desc`) VALUES
(1, 'Electronics', 'Hight quality appliances'),
(2, 'Home Decors', 'Modern home decor equipments'),
(3, 'Grocery', 'All items at cheap rates with high quality'),
(4, 'Footwear', 'Comfortable footwears');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `title`, `description`, `price`, `stock`, `image`, `cat_id`, `created_at`) VALUES
(1, 'Refrigerator', 'Thanda krta ha', 250000, 50, 'refrigerator.png', 1, '2026-10-02 15:19:37'),
(2, 'Curtains', 'Good quality fabric', 15000, 6000, 'curtains.png', 2, '2026-10-02 15:42:51'),
(3, 'Samsung Galaxy S26 Ultra', '6.9 inches\r\nDisplay\r\nram-specs-image\r\n12GB\r\nRAM\r\nbattery-specs-image\r\n5000 mAh\r\nBattery\r\nbackcamera-specs-image\r\n200.0 MP + 50.0 MP + 50.0 MP + 10.0 MP\r\nBack Camera', 390995, 600, 'https://images.priceoye.pk/samsung-galaxy-s26-ultra-pakistan-priceoye-x43oo-500x500.webp', 1, '2026-10-07 15:37:51'),
(4, 'adf', 'fgfdg', 343, 544, 'image.png', 4, '2026-10-12 15:57:58'),
(5, 'df', 'ewe', 3, 5, 'image.png', 2, '2026-10-12 16:02:29'),
(6, 'df', 'dfds', 3, 2, 'image.png', 2, '2026-10-12 16:04:11'),
(7, 'df', 'dfds', 3, 2, 'banner.jpg', 2, '2026-10-12 16:12:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
