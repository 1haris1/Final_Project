-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2019 at 08:39 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perfect_dressing`
--

-- --------------------------------------------------------

--
-- Table structure for table `dress_brands`
--

CREATE TABLE `dress_brands` (
  `brands_Id` int(100) NOT NULL,
  `brands_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dress_brands`
--

INSERT INTO `dress_brands` (`brands_Id`, `brands_title`) VALUES
(1, 'Levi\'s'),
(2, 'Nike'),
(3, 'Zara Noor'),
(4, 'Outfitter'),
(5, 'Ultra-club'),
(6, 'Tommy Hilfiger');

-- --------------------------------------------------------

--
-- Table structure for table `dress_categories`
--

CREATE TABLE `dress_categories` (
  `cat_Id` int(50) NOT NULL,
  `cat_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dress_categories`
--

INSERT INTO `dress_categories` (`cat_Id`, `cat_title`) VALUES
(1, 'T-Shirt'),
(2, 'Dress pent'),
(3, 'Sweater'),
(4, 'Jacket'),
(5, 'Jeans'),
(6, 'Pent Coat');

-- --------------------------------------------------------

--
-- Table structure for table `dress_product`
--

CREATE TABLE `dress_product` (
  `dress_Id` int(50) NOT NULL,
  `dress_cat` varchar(50) NOT NULL,
  `dress_brand` varchar(25) NOT NULL,
  `dress_price` int(50) NOT NULL,
  `dress_image` varchar(200) NOT NULL,
  `dress_keyword` varchar(300) NOT NULL,
  `dress_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_Id` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dress_brands`
--
ALTER TABLE `dress_brands`
  ADD PRIMARY KEY (`brands_Id`);

--
-- Indexes for table `dress_categories`
--
ALTER TABLE `dress_categories`
  ADD PRIMARY KEY (`cat_Id`);

--
-- Indexes for table `dress_product`
--
ALTER TABLE `dress_product`
  ADD PRIMARY KEY (`dress_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dress_brands`
--
ALTER TABLE `dress_brands`
  MODIFY `brands_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dress_categories`
--
ALTER TABLE `dress_categories`
  MODIFY `cat_Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `dress_product`
--
ALTER TABLE `dress_product`
  MODIFY `dress_Id` int(50) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
