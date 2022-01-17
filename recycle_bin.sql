-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2021 at 03:47 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `recycle_bin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad`
--

CREATE TABLE `ad` (
  `id` int(10) NOT NULL,
  `owners_email` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `local_area` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `price` float NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `date_time` datetime NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `status` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ad`
--

INSERT INTO `ad` (`id`, `owners_email`, `category`, `city`, `local_area`, `description`, `price`, `product_name`, `phone_no`, `date_time`, `image_path`, `status`) VALUES
(1, 'e', 'q', 'Dhaka', 'q', 'q', 0, 'q', '+8801304725872', '2021-06-03 23:46:49', 'imgAd/e4.jpg', b'0'),
(2, 'e', 's', 'sa', 's', 's', 0, 'ss', 's', '2021-06-03 23:49:32', 'imgAd/e5.jpg', b'0'),
(4, 'e', 'a', 'a', 'a', 'a', 22, 'ssss', '+8801304725872', '2021-06-04 20:55:47', 'imgAd/e7.jpg', b'0'),
(5, 'e', 'mobile', 'Dhaka', 'Mirpur', 'OnePlus 7', 20000, 'mobile', '+8801304725872', '2021-06-05 02:59:58', 'imgAd/e8.jpg', b'0'),
(7, 'e', 'h', 'h', 'h', 'h', 0, 'h', 'h', '2021-06-05 03:02:51', 'imgAd/e10.jpg', b'0');

-- --------------------------------------------------------

--
-- Table structure for table `comment_on_product`
--

CREATE TABLE `comment_on_product` (
  `product_id` varchar(65) NOT NULL,
  `commented_user_email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `owner_email` varchar(50) NOT NULL,
  `post_no` int(11) NOT NULL,
  `post_content` varchar(700) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_comment`
--

CREATE TABLE `post_comment` (
  `post_id` varchar(65) NOT NULL,
  `commented_user_email` varchar(50) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_id`
--

CREATE TABLE `user_id` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_id`
--

INSERT INTO `user_id` (`email`, `pass`, `name`) VALUES
('e', 'e', 'e');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `total_given_ad` int(11) NOT NULL DEFAULT 0,
  `profile_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`email`, `address`, `description`, `phone_no`, `total_given_ad`, `profile_photo`) VALUES
('e', '', '', '', 11, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad`
--
ALTER TABLE `ad`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment_on_product`
--
ALTER TABLE `comment_on_product`
  ADD PRIMARY KEY (`product_id`,`date_time`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`owner_email`,`post_no`);

--
-- Indexes for table `post_comment`
--
ALTER TABLE `post_comment`
  ADD PRIMARY KEY (`post_id`,`date_time`);

--
-- Indexes for table `user_id`
--
ALTER TABLE `user_id`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad`
--
ALTER TABLE `ad`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
