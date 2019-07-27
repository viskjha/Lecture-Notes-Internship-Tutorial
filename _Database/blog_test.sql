-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 08:53 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_update_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `user_id`, `created_date_time`, `last_update_date_time`) VALUES
(1, 'first blog', 'first des', 1, '2019-06-25 09:25:39', '2019-06-25 09:26:01'),
(2, 'second title', 'second des', 4, '2019-06-25 09:26:55', '2019-06-25 09:26:55'),
(3, '', '', 16, '2019-06-30 09:49:42', '2019-06-30 09:49:42'),
(4, '', '', 16, '2019-06-30 09:49:51', '2019-06-30 09:49:51'),
(5, '', '', 16, '2019-06-30 09:53:37', '2019-06-30 09:53:37'),
(6, '', '', 16, '2019-06-30 09:55:34', '2019-06-30 09:55:34'),
(7, '', '', 16, '2019-06-30 09:55:47', '2019-06-30 09:55:47'),
(8, '', '', 16, '2019-06-30 09:55:54', '2019-06-30 09:55:54'),
(9, 'Video Editing', 'kdjkfbgdkjgdlj', 16, '2019-06-30 09:58:03', '2019-06-30 09:58:03'),
(10, 'uihguh', 'fdgfhgfhf', 16, '2019-06-30 09:58:11', '2019-06-30 09:58:11'),
(11, 'uihguh', 'fdgfhgfhf', 16, '2019-06-30 19:45:01', '2019-06-30 19:45:01'),
(12, 'book', 'jghgj', 16, '2019-06-30 19:45:05', '2019-06-30 19:45:05'),
(13, 'book', 'ijjoiji', 16, '2019-07-01 08:45:32', '2019-07-01 08:45:32'),
(14, 'book', 'ijjoiji', 16, '2019-07-01 08:46:44', '2019-07-01 08:46:44'),
(15, 'demo', 'i am vishal\r\n', 16, '2019-07-01 09:34:50', '2019-07-01 09:34:50'),
(17, 'demo', 'i am vishal\r\n', 16, '2019-07-01 09:36:56', '2019-07-01 09:36:56'),
(18, 'demo', 'i am vishal\r\n', 16, '2019-07-01 09:38:33', '2019-07-01 09:38:33'),
(19, 'jfgnjkb', 'fdhfhf\r\n', 16, '2019-07-02 02:50:26', '2019-07-02 02:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `first_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_date_time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `images`, `created_date_time`, `last_updated_date_time`) VALUES
(1, 'vishal', 'jha', 'vis@gmail.com', 'newpassword', NULL, '2019-06-23 10:37:52', '2019-06-24 09:16:12'),
(2, 'rohan', 'kumar', 'rohan@gmail.com', '123', NULL, '2019-06-24 08:47:05', '2019-06-24 08:47:05'),
(3, 'ravi', 'kumar', 'ravi@gmail.com', '123', NULL, '2019-06-24 08:53:05', '2019-06-24 08:53:05'),
(4, 'aditya', 'kumar', 'aditya@gmail.com', '123', NULL, '2019-06-24 08:53:05', '2019-06-24 08:53:05'),
(5, 'neha', 'kumari', 'neha@gmail.com', '123', NULL, '2019-06-24 08:59:49', '2019-06-24 08:59:49'),
(6, 'pooja', 'kumari', 'pooja@gmail.com', '123', NULL, '2019-06-24 08:59:49', '2019-06-24 08:59:49'),
(16, 'Vishal', 'Jha', 'vishaljha511@gmail.com', '123', NULL, '2019-06-28 15:01:59', '2019-06-28 15:01:59'),
(18, 'Vishal', 'Jha', 'vishaljha511@gmail.com', '123', NULL, '2019-06-28 15:03:36', '2019-06-28 15:03:36'),
(19, 'Vishal', 'Jha', 'vishaljha511@gmail.com', '123', NULL, '2019-06-28 15:03:46', '2019-06-28 15:03:46'),
(20, 'Vishal kumar', 'Jha', 'fgdg@gmail.com', 'grrt', NULL, '2019-06-29 08:25:02', '2019-06-29 08:25:02'),
(21, 'Vishal kumar', 'Jha', 'vishaljha511@gmail.com', '12345', NULL, '2019-07-02 09:03:08', '2019-07-02 09:03:08'),
(22, 'Vishal kumar', 'Jha', 'vishaljha511@gmail.com', '123', 'uploads/Screenshot (32).png', '2019-07-02 09:05:20', '2019-07-02 09:05:20'),
(23, 'demo', 'demo', 'demo@gmail.com', 'qaz', 'uploads/Screenshot (33).png', '2019-07-02 09:18:18', '2019-07-02 09:18:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
