-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 06:14 PM
-- Server version: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 5.6.32-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apnucake2`
--

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0' COMMENT '0:Draft,1:Published,2:Deleted',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `slug`, `status`, `created`, `modified`) VALUES
(1, 'Newzeland', 'nz', 2, '2017-11-22 16:00:00', '2017-11-22 16:00:00'),
(2, 'Newzeland', 'nz', 1, '2017-11-22 17:41:28', '2017-11-22 17:41:28'),
(3, 'dfsdf', 'sdfsdfdfdf', 2, '2017-11-22 17:43:26', '2017-11-22 17:54:41'),
(4, '0011dfsdf', '0011sdfsdfdfdf', 2, '2017-11-22 17:51:25', '2017-11-22 17:58:16'),
(5, 'Gujarat', 'gujarat', 1, '2017-11-22 17:58:40', '2017-11-22 17:58:40'),
(6, 'Australlia', 'australlia', 1, '2017-11-22 17:58:53', '2017-11-22 17:58:53'),
(7, 'Sports', 'sports', 1, '2017-11-22 17:59:15', '2017-11-22 17:59:15'),
(8, 'Bollywood', 'bollywood', 1, '2017-11-22 17:59:27', '2017-11-22 17:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(100) NOT NULL,
  `content` longtext NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0:Draft,1:Published,2:Deleted',
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `user_id`, `status`, `created`, `modified`) VALUES
(1, 'first page', 'first-page', '<h1>First Page</h1><br><p>first page</p><p>first page</p><p>first page</p><p>first page</p><p>first page</p><p>first page</p><p>first page</p><p>first page</p><p>first page</p><p>first page</p>', 1, 0, '2017-11-21 05:14:28', '2017-11-21 05:14:28'),
(2, 'kdnfgkdjfgn', 'kdsfgndkfjngdkfgn', 'dfgnkdjfgn dfknjgdfgdkfjgndfg dfgjdfngkjdnfg dfjkgndfkngdg', 1, 2, '2017-11-21 17:11:05', '2017-11-22 11:55:16'),
(3, '11dfglkmf ', '11lksmf', '11lskfmslkfdmsdflm\r\ndsfkmsdf\r\nsdlfkmsdlfkmsdflksdmf\r\n\r\nsdfkmsdlf\r\nsdflksdmflskdmf\r\nsdfksdmflsdkmflsdmf', 1, 2, '2017-11-21 17:32:28', '2017-11-22 18:00:07'),
(4, 'fghfgh', 'gfhgfh', 'gfhgjfj', 1, 2, '2017-11-21 17:38:00', '2017-11-21 17:46:36'),
(5, 'gfhgbv', 'vcbhfgh', 'ghbgfhfhytrf', 1, 2, '2017-11-21 17:38:11', '2017-11-21 17:43:31'),
(6, 'dtgtrdet', 'fgd', 'fgfdgfgh', 1, 2, '2017-11-21 17:38:22', '2017-11-21 17:43:31'),
(7, 'gfhfgh', 'gfhfgh', 'gfhgfh', 1, 2, '2017-11-21 17:56:58', '2017-11-21 17:57:08'),
(8, 'gfhfgh', 'gfhfgjhgj', 'hgjghjghjhgj', 1, 2, '2017-11-21 17:57:25', '2017-11-21 17:57:32'),
(10, 'dfgdfgfg', '1fghdf', 'sdfgdfgdfgvcxv', 1, 2, '2017-11-22 14:39:31', '2017-11-22 18:00:07'),
(11, '11vvdfdfgdfgdfg', 'fgfgrer', 'fgdfgfdgdfg', 1, 2, '2017-11-22 14:43:08', '2017-11-22 18:00:07'),
(12, '11sfndd', '11fgdfggh', '<p><strong>111fgffdgffhgfhfghghgh</strong></p>', 1, 2, '2017-11-22 17:50:46', '2017-11-22 18:00:07'),
(13, 'About US', 'about-us', '<p>This is aboout us page content</p>', 1, 1, '2017-11-22 18:00:46', '2017-11-22 18:00:46'),
(14, 'Contact Us', 'contact-us', '<p>This is contact us page content</p>', 1, 1, '2017-11-22 18:01:16', '2017-11-22 18:01:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_type` enum('admin','user') NOT NULL DEFAULT 'user',
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `encrypt_password` varchar(255) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `image_name` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL COMMENT '0 for active, 1 for inactive, 2 for draft, 3 for delete',
  `created_date` datetime NOT NULL,
  `modified_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `name`, `email`, `username`, `password`, `encrypt_password`, `mobile`, `image_name`, `status`, `created_date`, `modified_date`) VALUES
(1, 'user', 'admin', 'admin@seawindsolution.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'ZDQxMmY=', '9876543210', '1489728509footer1.png', 0, '2017-03-01 18:23:14', '2017-03-17 10:58:29'),
(2, 'user', 'Vivek Acharya', 'vivek@v.com', 'vivek', 'e10adc3949ba59abbe56e057f20f883e', 'MTIzNDU2', '456134897', NULL, 0, '2017-03-18 14:21:32', '2017-03-18 14:21:32'),
(3, 'user', 'Chintan Khorasiya', 'chintan@seawindsolution.com', 'chintanseller', 'e10adc3949ba59abbe56e057f20f883e', 'MTIzNDU2', '09000012345', NULL, 0, '2017-09-29 11:11:16', '2017-09-29 11:11:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
