-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 15, 2019 at 06:39 PM
-- Server version: 10.2.30-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apiiologicsco_kickback`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `wallet_id` varchar(50) NOT NULL,
  `event_id` varchar(50) NOT NULL,
  `event_name` varchar(50) NOT NULL,
  `checkin_timestamp` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `wallet_id`, `event_id`, `event_name`, `checkin_timestamp`) VALUES
(1, '1', '', 'kickbackevent', 1576409289),
(2, '1', '1', 'kickbackevent', 1576411196),
(3, '1', '1', 'kickbackevent', 1576413501),
(4, '2', '1', 'kickbackevent', 1576414015),
(5, '2', '1', 'kickbackevent', 1576414052),
(6, '2', '1', 'kickbackevent', 1576414625),
(7, '2', '1', 'kickbackevent', 1576414664),
(8, '2', '1', 'kickbackevent', 1576415552),
(9, '0x4678aa82320f0d887d37aca83210c0289a6e1785', '1', 'kickbackevent', 1576416007),
(10, '0x4678aa82320f0d887d37aca83210c0289a6e1785', '1', 'kickbackevent', 1576416606),
(11, '0x4678aa82320f0d887d37aca83210c0289a6e1785', '1', 'kickbackevent', 1576416786);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
