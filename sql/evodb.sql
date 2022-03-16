-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 02:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(9, 'Computers', '2021-08-15 15:56:31', '2021-08-15 15:56:31'),
(10, 'Laptops', '2021-08-15 15:56:46', '2021-08-15 15:56:46'),
(11, 'Accessories', '2021-08-15 15:57:07', '2021-08-15 15:57:07'),
(12, 'Smart-Phones', '2021-08-15 15:57:31', '2021-08-15 15:57:31'),
(13, 'Cameras', '2021-08-15 15:57:55', '2021-08-15 15:57:55');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `msg` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `msg`, `created_at`, `updated_at`) VALUES
(3, 'leuldamtew@yahoo.com', 'something to say!', '2021-08-15 03:51:53', '2021-08-15 03:51:53');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'new', 'user', 'new@user.com', '123', '2021-08-10 08:23:13', '2021-08-10 08:23:13'),
(6, 'sds', 'as', 'hello@world.com', '123', '2021-08-10 08:46:40', '2021-08-10 08:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_email` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `products` varchar(300) NOT NULL,
  `total` int(11) NOT NULL,
  `pay_method` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_email`, `firstname`, `lastname`, `address`, `phone`, `products`, `total`, `pay_method`, `created_at`, `updated_at`) VALUES
(27, 'new@user.com', 'new', 'user', 'blaaa', '121212', 'Asus-transformer', 1350, 'Cash on delivery', '2021-08-16 18:53:15', '2021-08-16 18:53:15'),
(29, 'new@user.com', 'new', 'user', 'blaaa', '121212', ' Asus-transformer,  Dell-laptop, ', 700, 'Cash on delivery', '2021-08-16 19:26:17', '2021-08-16 19:26:17'),
(30, 'new@user.com', 'new', 'user', 'blaaa', '+251090909', ' Asus-transformer,  Htc-one, ', 420, 'Cash on delivery', '2021-08-16 19:28:41', '2021-08-16 19:28:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `description` mediumtext NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `picture`, `description`, `category_id`, `created_at`, `updated_at`) VALUES
(33, 'Dell-laptop', 400, 'uploads/dellxp5.jpg', 'Dell xp5 15 inch laptop 1080p resolution ', 10, '2021-08-15 16:08:14', '2021-08-15 16:08:14'),
(34, 'Htc-one', 120, 'uploads/details-1.jpg', 'Htc smart phone with 128gb storage and 8gb ram', 12, '2021-08-15 16:19:12', '2021-08-15 16:19:12'),
(35, 'Asus-transformer', 300, 'uploads/large-asus-transformer-mini-t102ha-10-1-2-1-silver.jpg', 'Large asus transformer mini laptop for your creative mind', 10, '2021-08-15 16:21:51', '2021-08-15 16:21:51'),
(36, 'Amazon-tablet', 150, 'uploads/large-amazon-fire-hd-8-tablet-alexa-2017-16-gb-black.jpg', 'Large Amazon Tablet', 12, '2021-08-15 16:23:45', '2021-08-15 16:23:45'),
(37, 'Apple-ipad', 180, 'uploads/large-apple-9-7-ipad-32-gb-gold.jpg', 'Large Apple ipod 32gb gold', 12, '2021-08-15 16:26:13', '2021-08-15 16:26:13'),
(38, 'Apple-ipad', 160, 'uploads/large-apple-9-7-ipad-32-gb-space-grey.jpg', 'Large Apple ipod 32gb black', 12, '2021-08-15 16:26:49', '2021-08-15 16:26:49'),
(39, 'Dell-inspiron', 250, 'uploads/large-dell-inspiron-15-5000-15.jpg', 'Large dell inspiron 5000 laptop 15 inch', 10, '2021-08-15 16:28:40', '2021-08-15 16:28:40'),
(40, 'Dell-inspiron', 300, 'uploads/large-dell-inspiron-15-7000-15-6.jpg', 'Large dell inspiron 7000 15 inch white', 10, '2021-08-15 16:29:46', '2021-08-15 16:29:46'),
(41, 'Dell-inspiron-5657', 300, 'uploads/large-dell-inspiron-5675-gaming-pc-recon-blue.jpg', 'Large dell inspiron 5657 gaming PC recon blue', 9, '2021-08-15 16:31:49', '2021-08-15 16:31:49'),
(42, 'HP-barebone-omen', 500, 'uploads/large-hp-barebones-omen-x-900-099nn-gaming-pc.jpg', 'Hp barebones Gaming PC ', 9, '2021-08-15 16:33:06', '2021-08-15 16:33:06'),
(43, 'HP-pavilion', 300, 'uploads/large-hp-pavilion-power-580-015na-gaming-pc.jpg', 'Hp pavilion power 580', 9, '2021-08-15 16:33:55', '2021-08-15 16:33:55'),
(44, 'Beats-headphone', 80, 'uploads/product-5.jpg', 'Black Beats headphones', 11, '2021-08-15 16:34:59', '2021-08-15 16:34:59'),
(45, 'Black-headphones', 70, 'uploads/product-10.jpg', 'Comfortable black headphones', 11, '2021-08-15 16:35:52', '2021-08-15 16:35:52'),
(46, 'Apple-mouse', 100, 'uploads/apple-mouse.jpg', 'Apple mouse ', 11, '2021-08-15 16:37:25', '2021-08-15 16:37:25'),
(47, 'Drone', 400, 'uploads/product-9.jpg', 'Awesome drone with camera for various tasks', 11, '2021-08-15 16:38:48', '2021-08-15 16:38:48'),
(48, 'PC-specialist', 400, 'uploads/large-pc-specialist-vortex-minerva-xt-r-gaming-pc.jpg', 'Gaming pc by pc specialized', 9, '2021-08-15 16:40:26', '2021-08-15 16:40:26'),
(49, 'Canon-camera-5d', 500, 'uploads/canon.jpg', 'Digital Canon camera with 5D lens', 13, '2021-08-15 16:43:28', '2021-08-15 16:43:28'),
(50, 'canon', 200, 'uploads/canon-1.jpg', 'Epic professional camera cannon', 13, '2021-08-17 03:55:39', '2021-08-17 03:55:39'),
(51, 'samsung-camera', 300, 'uploads/camera-1.jpg', 'Powerful white lens camera by Samsung', 13, '2021-08-17 03:57:29', '2021-08-17 03:57:29'),
(52, 'nikon-camera', 250, 'uploads/camera-2.jpg', 'Powerful professional camera from Nikon', 13, '2021-08-17 03:58:31', '2021-08-17 03:58:31');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `ID` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`ID`, `email`, `created_at`) VALUES
(3, 'hello@stupid', '2021-08-14 21:13:23'),
(4, 'new@user.com', '2021-08-15 01:02:39'),
(5, 'bestleul@gmail.com', '2021-08-18 15:11:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
