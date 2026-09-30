-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2026 at 06:13 PM
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
-- Database: `famoleras_pos`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `full_name`, `email`, `phone`, `created_at`) VALUES
(1, 'Hatsune Miku', 'miku@gmail.com', '09123456789', '2026-09-24 01:17:24'),
(2, 'Kasane Teto', 'teto@gmail.com', '09234567890', '2026-09-24 01:17:24'),
(3, 'Akita Neru', 'neru@gmail.com', '09345678901', '2026-09-24 01:17:24'),
(4, 'Zundamon', 'zundamon@gmail.com', '09456789012', '2026-09-24 01:17:24'),
(5, 'Yowane Haku', 'haku@gmail.com', '09567890123', '2026-09-24 01:17:24'),
(6, 'test customer', 'hello@example.com', '0919191919', '2026-09-30 15:32:33'),
(7, 'test customer', 'hello@example.com', '0919191919', '2026-09-30 15:34:01'),
(8, 'Megurine Luka', 'luka@gmail.com', '09112223333', '2026-09-30 15:35:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `created_at`, `avatar`) VALUES
(1, 'admin01', 'John Admin', '2026-09-24 01:26:19', NULL),
(2, 'cashier01', 'Anna Lopez', '2026-09-24 01:26:19', NULL),
(3, 'cashier02', 'Mark Santos', '2026-09-24 01:26:19', NULL),
(4, 'manager01', 'Lisa Cruz', '2026-09-24 01:26:19', NULL),
(5, 'staff01', 'Kevin Reyes', '2026-09-24 01:26:19', NULL),
(6, 'miku01miku', 'Hatsune Miku', '2026-09-30 15:39:53', '1790784733_1868320a5d905c47f2ba.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
