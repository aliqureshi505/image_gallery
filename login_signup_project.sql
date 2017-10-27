-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2017 at 02:00 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login/signup project`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(11) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `Title`, `Description`, `Image`) VALUES
(5, 'Heights', 'Image contains no description', '58a44d4eac9d6'),
(6, 'Slow shine', 'Image contains no description', '58a44d5f52b46'),
(7, 'Nature', 'Image contains no description', '58a44d6d87083'),
(8, 'Riding alone', 'Image contains no description', '58a44d8140b23'),
(9, 'Amazing', 'Image contains no description', '58a44d8edee84'),
(10, 'Pretty', 'Image contains no description', '58a44d9bf2db5'),
(11, 'Just alone', 'Image contains no description', '58a44dadb68db'),
(12, 'Wonder', 'Image contains no description', '58a44dbe03bff'),
(13, 'Beautiful', 'Image contains no description', '58a44dd00dd58'),
(14, 'Mountain', 'Image contains no description', '58a44ddf21d61'),
(15, 'Light Room', 'Image contains no description', '58a44df1209d4'),
(16, 'Angry', 'Image contains no description', '58a44dffc171e'),
(17, 'Alone', 'Image contains no description', '58a44e37516b8'),
(18, 'Action:', 'Image contains no description\r\n', '58a44e738b9ac');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `First_Name` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `Is_Admin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First_Name`, `Password`, `Is_Admin`) VALUES
(1, 'admin', 'admin', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
