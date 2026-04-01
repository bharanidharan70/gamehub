-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2026 at 09:32 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `gamer_tag` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL,
  `favorite_game` varchar(100) DEFAULT NULL,
  `gamer_level` varchar(20) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'user',
  `status` varchar(20) DEFAULT 'active',
  `otp` varchar(10) DEFAULT NULL,
  `otp_expiry` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `gamer_tag`, `email`, `password`, `dob`, `gender`, `country`, `favorite_game`, `gamer_level`, `avatar`, `role`, `status`, `otp`, `otp_expiry`) VALUES
(1, 'id-01', 'bharanid134@gmail.com', '$2y$10$6om7VaM8Lw0fTpU0zeljk.PeMTEG11yXGi3CKZzDOOeF1wdOjrGwS', '2004-08-08', 'Male', 'India', 'GTA', 'intermediate', 'futuristic-ninja-digital-art 1.jpg', 'admin', 'active', NULL, NULL),
(3, 'id-02', 'priya@gmail.com', '$2y$10$ugKDAggOLO0JjKfUEtqGW.4jeoj6iIJ671jQW.pxiHfyB3.wpxfuW', '2005-07-19', 'Female', 'USA', 'GTA', '', 'neon-gaming-background.jpg', 'user', 'active', NULL, NULL),
(5, 'id-05', 'preshika@gmail.com', '$2y$10$NEqSvz76YY/2Z5D5wJVH4eFuL6clmpa6URJ0/XtblghA.Y2q80mr2', '2006-01-20', 'Female', 'India', 'speed nitro', 'Beginner', '1774192330_3d-fantasy-scene.jpg', 'user', 'active', NULL, NULL),
(6, 'test1', 't1@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL),
(7, 'test2', 't2@gmail.com', '123', '0000-00-00', 'Male', 'india', 'God of War', '', NULL, 'user', 'active', NULL, NULL),
(8, 'test3', 't3@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL),
(9, 'test4', 't4@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL),
(10, 'test5', 't5@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL),
(11, 'test6', 't6@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, NULL, 'user', 'active', NULL, NULL),
(12, 'id-08', 'example@gmail.com', '$2y$10$rVEtGgi7w1lp5CWbIreOc./11Ctcoo/a2HWMsUAtUKS4blKZc0rBy', '2026-03-25', 'Female', 'Japan', 'Need for speed', 'Pro', '1774964357_Blue shirt.jpg', 'user', 'active', '845595', '2026-04-01 09:13:21'),
(13, 'id-09', 'applecutslove@gmail.com', '$2y$10$FLwYcMpm0oupf2pFy0CFQuvV9ThLMwWxlMK7PCttaaacrZcGr/1fq', '2026-04-06', 'Male', 'UK', 'PUBG', 'Beginner', '1775022872_green sweatshirt.jpg', 'user', 'active', '664313', '2026-04-01 09:03:30'),
(14, 'id-10', 'noommani4@gmail.com', '$2y$10$Vt/KN8lhJsjJ7wGhtqEYNeBz4CBG0GGT9TjizzSVrQpT2QXMWbmSm', '2026-04-02', 'Male', 'India', 'NFS', 'Beginner', '1775023930_Black sweatshirt.jpg', 'user', 'active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_games`
--

CREATE TABLE `user_games` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `game_name` varchar(100) DEFAULT NULL,
  `game_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_games`
--

INSERT INTO `user_games` (`id`, `user_id`, `game_name`, `game_image`) VALUES
(11, 5, 'Neon Legends', 'https://wallpapercave.com/wp/wp10439053.jpg'),
(12, 5, 'Turbo Legends', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgZShlFZnRnYgACBsXw6XPqW64SJpyD5JswQ&s'),
(13, 5, 'Empire Builder', 'https://upload.wikimedia.org/wikipedia/en/1/13/First_edition_of_Empire_Builder_1982.jpg'),
(15, 5, 'Speed Racer', 'https://wallpapercave.com/wp/wp2041824.jpg'),
(18, 1, 'Shadow Strike', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTpeHvAQIhTZIDkdcYgOWhLvgqdmH6BcgMog&s'),
(19, 1, 'Neon Legends', 'https://wallpapercave.com/wp/wp10439053.jpg'),
(20, 1, 'Speed Racer', 'https://wallpapercave.com/wp/wp2041824.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_games`
--
ALTER TABLE `user_games`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_games`
--
ALTER TABLE `user_games`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
