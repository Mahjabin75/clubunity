-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 06:10 PM
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
-- Database: `club`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` int(11) NOT NULL,
  `clubId` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `clubId`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'cfde0abc-8', 'Lorem ipsum dolor sit', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eligendi, rerum voluptatem explicabo voluptate facilis nisi quisquam mollitia dignissimos ipsum.\n', '2023-11-30 08:00:23', '2023-11-30 15:17:24'),
(2, 'cfde0abc-8', 'Lorem ipsum', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eligendi, rerum voluptatem explicabo voluptate facilis nisi quisquam ', '2023-11-30 08:00:23', '2023-11-30 15:17:24'),
(3, '9d54103b-8', 'Lorem ipsum dolor', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum eligendi, rerum voluptatem explicabo voluptate facilis nisi quisqua', '2023-11-30 08:00:23', '2023-11-30 15:17:24');

-- --------------------------------------------------------

--
-- Table structure for table `clubs`
--

CREATE TABLE `clubs` (
  `id` int(11) NOT NULL,
  `clubId` varchar(255) DEFAULT NULL,
  `clubname` varchar(100) DEFAULT NULL,
  `clubImage` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `number` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clubs`
--

INSERT INTO `clubs` (`id`, `clubId`, `clubname`, `clubImage`, `details`, `email`, `location`, `number`, `created_at`, `updated_at`) VALUES
(1, 'cfde0abc-8', 'Adventure Club', 'club-logo-1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ex, illo omnis recusandae explicabo vero tempora aspernatur repellat odio? Ex atque nesciunt ea facilis consequatur.', 'adventure@gmail.com', 'CityName', '1234567890', '2023-11-29 15:13:12', '2023-12-01 03:08:50'),
(2, 'cfde218a-8', 'Music Club', 'club-logo-4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ex, illo omnis recusandae explicabo vero tempora aspernatur repellat odio? Ex atque nesciunt ea facilis consequatur.', 'music@gmail.com', 'AnotherCity', '9876543210', '2023-11-29 15:13:12', '2023-11-30 07:58:53'),
(3, '9d53f913-8', 'Football Club', 'club-logo-6.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ex, illo omnis recusandae explicabo vero tempora aspernatur repellat odio? Ex atque nesciunt ea facilis consequatur.', 'football@gmail.com', 'CityA', '111222333', '2023-11-30 05:52:15', '2023-11-30 07:41:05'),
(5, '9d54103b-8', 'Drama Club', 'club-logo-2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit ex, illo omnis recusandae explicabo vero tempora aspernatur repellat odio? Ex atque nesciunt ea facilis consequatur.', 'drama@gmail.com', 'CityC', '777888999', '2023-11-30 05:52:15', '2023-11-30 07:56:51');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `clubId` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `startDate` datetime DEFAULT NULL,
  `endDate` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `clubId`, `title`, `startDate`, `endDate`, `created_at`, `status`, `updated_at`) VALUES
(1, 'cfde0abc-8', 'aaa', '2023-11-30 02:34:52', '2023-11-30 20:35:06', '2023-11-30 14:34:29', 'approved', '2023-11-30 19:48:34'),
(2, 'cfde0abc-8', 'bbb', '2023-11-30 12:34:55', '2023-11-30 23:35:08', '2023-11-30 14:34:33', 'approved', '2023-11-30 15:34:49'),
(5, 'cfde0abc-8', 'test 2', '2023-11-30 00:00:00', '2023-11-30 00:00:00', '2023-11-30 09:42:20', 'pending', '2023-11-30 09:42:20'),
(6, 'cfde0abc-8', 'tredrtgd', '2023-11-30 00:00:00', '2023-11-30 00:00:00', '2023-11-30 10:23:36', 'pending', '2023-11-30 10:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `userId` varchar(36) DEFAULT NULL,
  `clubId` varchar(10) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `userId`, `clubId`, `status`, `created_at`, `updated_at`) VALUES
(6, '191-35', '9d53f913-8', 'joined', '2023-11-30 18:56:12', '2023-12-01 00:57:24'),
(7, '191-35', 'cfde0abc-8', 'joined', '2023-11-30 19:20:23', '2023-11-30 19:20:38'),
(8, '191-35', 'cfde218a-8', 'pending', '2023-12-09 11:08:33', '2023-12-09 11:08:33');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `clubId` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `clubId`, `title`, `created_at`, `updated_at`) VALUES
(1, '9d53f913-8', 'Notification 1', '2023-11-30 08:55:46', '2023-11-30 15:28:36'),
(2, '9d53f913-8', 'Notification 2', '2023-11-30 08:55:46', '2023-11-30 15:28:36'),
(3, 'cfde218a-8', 'Notification 3', '2023-11-30 08:55:46', '2023-11-30 15:28:36'),
(4, '9d54103b-8', 'Notification 4', '2023-11-30 08:55:46', '2023-11-30 15:28:36'),
(5, 'cfde0abc-8', 'aaaaaa', '2023-11-30 09:28:41', '2023-11-30 09:28:41'),
(6, 'cfde0abc-8', 'aaaaaa', '2023-11-30 09:29:37', '2023-11-30 09:29:37'),
(7, 'cfde0abc-8', 'bbb', '2023-11-30 09:29:48', '2023-11-30 09:29:48'),
(8, 'cfde0abc-8', 'test', '2023-11-30 09:30:51', '2023-11-30 09:30:51'),
(9, 'cfde0abc-8', 'aaa', '2023-11-30 09:31:42', '2023-11-30 09:31:42'),
(10, 'cfde0abc-8', 'dfk;jgdfk;jg', '2023-11-30 10:23:11', '2023-11-30 10:23:11');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `clubId` varchar(10) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `clubId`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, '9d53f913-8', 'Our Last Event', 'foot-4.jpg', '2023-11-30 06:39:32', '2023-11-30 15:35:06'),
(2, '9d53f913-8', 'Our football champions award 2023', 'foot-2.jpg', '2023-11-30 07:43:07', '2023-11-30 15:35:06'),
(3, '9d53f913-8', 'Trophy unveiling ceremony 2023', 'foot-1.jpg', '2023-11-30 07:43:07', '2023-11-30 15:35:06'),
(4, 'cfde0abc-8', 'Our social work', 'addv(1).jpg', '2023-11-30 07:43:07', '2023-11-30 15:35:06'),
(5, 'cfde0abc-8', 'Bandarban tour 2023', 'addv(3).jpg', '2023-11-30 07:43:07', '2023-11-30 15:35:06'),
(8, '9d54103b-8', 'Program 2023', 'drama1.JPG', '2023-11-30 07:43:07', '2023-11-30 15:35:06'),
(9, '9d54103b-8', 'Program 2023', 'drama2.JPG', '2023-11-30 07:43:07', '2023-11-30 15:35:06'),
(10, NULL, 'Post 9', NULL, '2023-11-30 07:43:07', '2023-11-30 15:35:06'),
(18, 'cfde0abc-8', 'Tour 2023', '1701398300.jpg', '2023-11-30 20:38:20', '2023-11-30 20:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `role` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `notification` varchar(5) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `email_verified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `remember_token` varchar(100) DEFAULT NULL,
  `userId` varchar(36) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role`, `email`, `name`, `image`, `password`, `notification`, `created_at`, `updated_at`, `email_verified_at`, `remember_token`, `userId`) VALUES
(1, 'admin', 'admin@gmail.com', 'Akib', 'user.jpg', '$2y$10$y6HAblGSDCdc.m5uGfJfeutKkbShweFXuJr.YOxm1er.5awD4mr.q', 'nread', '2023-11-29 15:00:13', '2023-12-09 17:07:31', '2023-11-29 06:00:00', '', 'cfde0abc-111'),
(2, 'superadmin', 'superadmin@gmail.com', 'Super Admin User', 'user.jpg', '$2y$10$YDceb8.MEB9Uomu3nG0OBuet8bwkhA400.Vg6egAyzPzk3n9NzdS.', 'nread', '2023-11-29 15:00:13', '2023-11-30 21:44:15', '2023-11-29 06:00:00', '', '1144'),
(3, 'user', 'user@gmail.com', 'User', 'user.jpg', '$2y$10$jaasCzeAsLI67GBHEwEJIOUuiP313VBEye1xt91ppwxJkg7QOh2QO', NULL, '2023-11-29 15:00:13', '2023-11-30 21:44:37', '2023-11-29 06:00:00', '', '191-35'),
(4, 'user', 'aaa@gmail.com', 'User2', NULL, '$2y$10$w9wAQ8GdF8VqPBOTpIjYEeQ487ywmEO4DEtfAB4UV4BqUa9ibSwQy', 'nread', '2023-11-30 13:38:50', '2023-11-30 10:23:11', '2023-11-30 13:38:50', NULL, '191-25'),
(7, 'admin', 'fjdjjrhr@gmail.com', 'Rifat', 'user.jpg', '$2y$10$THJpyYFFuJvWsTzH73d6denC3Vj7XrHxc6NtE/cfETq.dq3rTCn.6', NULL, '2023-11-30 21:43:35', '2023-11-30 21:43:35', '2023-12-01 03:43:35', NULL, '7JRB1701402215'),
(8, 'admin', 'adventure@gmail.com', 'Adventure', NULL, '$2y$10$THJpyYFFuJvWsTzH73d6denC3Vj7XrHxc6NtE/cfETq.dq3rTCn.6', NULL, '2023-12-09 17:03:28', '2023-12-09 17:07:41', '2023-12-09 17:03:28', NULL, 'cfde0abc-8'),
(9, 'admin', 'music@gmail.com', 'Music', NULL, '$2y$10$THJpyYFFuJvWsTzH73d6denC3Vj7XrHxc6NtE/cfETq.dq3rTCn.6', NULL, '2023-12-09 17:03:55', '2023-12-09 17:07:56', '2023-12-09 17:03:55', NULL, 'cfde218a-8'),
(10, 'admin', 'football@gmail.com', 'Football', NULL, '$2y$10$THJpyYFFuJvWsTzH73d6denC3Vj7XrHxc6NtE/cfETq.dq3rTCn.6', NULL, '2023-12-09 17:04:25', '2023-12-09 17:08:06', '2023-12-09 17:04:25', NULL, '9d53f913-8'),
(11, 'admin', 'drama@gmail.com', 'Drama', NULL, '$2y$10$THJpyYFFuJvWsTzH73d6denC3Vj7XrHxc6NtE/cfETq.dq3rTCn.6', NULL, '2023-12-09 17:04:41', '2023-12-09 17:08:15', '2023-12-09 17:04:41', NULL, '9d54103b-8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubId` (`clubId`);

--
-- Indexes for table `clubs`
--
ALTER TABLE `clubs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `clubId` (`clubId`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubId` (`clubId`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`),
  ADD KEY `clubId` (`clubId`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubId` (`clubId`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `clubId` (`clubId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `clubs`
--
ALTER TABLE `clubs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement`
--
ALTER TABLE `announcement`
  ADD CONSTRAINT `announcement_ibfk_1` FOREIGN KEY (`clubId`) REFERENCES `clubs` (`clubId`) ON DELETE CASCADE;

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`clubId`) REFERENCES `clubs` (`clubId`) ON DELETE CASCADE;

--
-- Constraints for table `members`
--
ALTER TABLE `members`
  ADD CONSTRAINT `members_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`userId`) ON DELETE CASCADE,
  ADD CONSTRAINT `members_ibfk_2` FOREIGN KEY (`clubId`) REFERENCES `clubs` (`clubId`) ON DELETE CASCADE;

--
-- Constraints for table `notification`
--
ALTER TABLE `notification`
  ADD CONSTRAINT `notification_ibfk_1` FOREIGN KEY (`clubId`) REFERENCES `clubs` (`clubId`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`clubId`) REFERENCES `clubs` (`clubId`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
