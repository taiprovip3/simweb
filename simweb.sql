-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 10:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nhinguyenv3`
--

-- --------------------------------------------------------

--
-- Table structure for table `balances`
--

CREATE TABLE `balances` (
  `id` int(11) NOT NULL,
  `token` int(11) NOT NULL,
  `credit` double NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `balances`
--

INSERT INTO `balances` (`id`, `token`, `credit`, `email`) VALUES
(32, 0, 0, 'nhito1doraemon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `comment` varchar(255) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 mean boy; 1 mean girl',
  `email` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `first_name`, `last_name`, `address`, `phone_number`, `age`, `sex`, `email`) VALUES
(32, '', '', '', '', 0, 0, 'nhito1doraemon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `time_triggerred` timestamp NOT NULL DEFAULT current_timestamp(),
  `action` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `time_triggerred`, `action`, `status`, `email`) VALUES
(30, '2022-06-08 04:14:49', 'Register account', 'verifying', 'nhito1doraemon@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `musters`
--

CREATE TABLE `musters` (
  `email` varchar(255) NOT NULL,
  `lastmuster` timestamp NOT NULL DEFAULT current_timestamp(),
  `countmuster` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `stars` int(11) NOT NULL,
  `at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`stars`, `at`, `email`) VALUES
(5, '2022-05-31 02:11:23', 'Anonymous@gmail.com'),
(4, '2022-05-31 02:11:42', 'Anonymous@gmail.com'),
(5, '2022-05-31 04:28:33', 'Anonymous@gmail.com'),
(5, '2022-05-31 04:29:41', 'Anonymous@gmail.com'),
(5, '2022-05-31 04:29:46', 'Anonymous@gmail.com'),
(1, '2022-05-31 04:31:26', 'Anonymous@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) NOT NULL,
  `authen_token` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0 mean not verify; 1 mean verified'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `authen_token`, `status`) VALUES
(1, 'Anonymous@gmail.com', '123123az', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 1),
(608, 'nhito1doraemon@gmail.com', '$2y$10$L6hFlMHHUw7ePp.gISChLORk.aZal8b01UElHZdRBGQlvio3HCh5W', '092e17f9533c7b5eb1e4c07b07dd39ed', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `view` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `ip`, `view`, `email`) VALUES
(51, '142.251.10.104', 29, 'Anonymous@gmail.com'),
(52, '192.168.1.1', 1, 'Anonymous@gmail.com'),
(53, '142.251.12.105', 61, 'Anonymous@gmail.com'),
(54, '172.217.194.147', 87, 'Anonymous@gmail.com'),
(57, '142.250.4.104', 3, 'Anonymous@gmail.com'),
(58, '142.251.10.106', 3, 'Anonymous@gmail.com'),
(59, '74.125.200.106', 4, 'Anonymous@gmail.com'),
(60, '74.125.130.103', 5, 'Anonymous@gmail.com'),
(61, '74.125.200.103', 3, 'Anonymous@gmail.com'),
(62, '142.251.12.103', 77, 'Anonymous@gmail.com'),
(63, '172.253.118.105', 38, 'Anonymous@gmail.com'),
(64, '142.250.4.147', 12, 'Anonymous@gmail.com'),
(65, '142.251.12.106', 13, 'Anonymous@gmail.com'),
(66, '142.251.10.105', 40, 'Anonymous@gmail.com'),
(72, '142.251.12.104', 2, 'Anonymous@gmail.com'),
(73, '172.217.194.106', 33, 'Anonymous@gmail.com'),
(83, '74.125.68.105', 5, 'Anonymous@gmail.com'),
(93, '142.251.10.99', 5, 'Anonymous@gmail.com'),
(94, '142.250.4.106', 1, 'Anonymous@gmail.com'),
(95, '142.251.12.147', 8, 'Anonymous@gmail.com'),
(96, '74.125.200.99', 9, 'Anonymous@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `balances`
--
ALTER TABLE `balances`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_balances_to_users` (`email`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_comments_to_users` (`email`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_infos_to_users` (`email`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_logs_to_users` (`email`);

--
-- Indexes for table `musters`
--
ALTER TABLE `musters`
  ADD KEY `fk_from_musters_to_users` (`email`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD KEY `fk_from_rates_to_users` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_from_visitor_to_users` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `balances`
--
ALTER TABLE `balances`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=609;

--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `balances`
--
ALTER TABLE `balances`
  ADD CONSTRAINT `fk_from_balances_to_users` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_from_comments_to_users` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `infos`
--
ALTER TABLE `infos`
  ADD CONSTRAINT `fk_from_infos_to_users` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_from_logs_to_users` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `musters`
--
ALTER TABLE `musters`
  ADD CONSTRAINT `fk_from_musters_to_users` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `fk_from_rates_to_users` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `visitors`
--
ALTER TABLE `visitors`
  ADD CONSTRAINT `fk_from_visitor_to_users` FOREIGN KEY (`email`) REFERENCES `users` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
