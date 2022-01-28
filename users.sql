-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 02:42 PM
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
-- Database: `iawd_2106`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(100) NOT NULL,
  `conformpassword` varchar(100) NOT NULL,
  `photo` varchar(150) NOT NULL,
  `status` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `uname`, `email`, `password`, `conformpassword`, `photo`, `status`) VALUES
(6, 'Nurul', 'nurulamin4525', 'nurulamin4525@gmail.com', '202cb962ac59075b964b07152d234b70', '', 'Nurul Amin-1642410316.png', 2),
(7, 'saiful Islam', '01838003295', 'saifulislamx264@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '', 'saiful Islam-1642445255.png', 1),
(9, 'Python', 'what12', 'phoo@gmail.com', '202cb962ac59075b964b07152d234b70', '', 'Python-1642882490.jpg', 1),
(11, 'saiful Islam', 'da', 'sa@gmail.com', 'c12e01f2a13ff5587e1e9e4aedb8242d', '', 'saiful Islam-1642960520.jpg', 1),
(13, 'Raphael Kemp', 'Mannix Madden', 'lodu@mailinator.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 'Raphael Kemp-1642961405.jpg', 2),
(17, 'Roary Schneider', 'Tyler Benjamin', 'byqehehuh@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '', 'Roary Schneider-1642963555.jpg', 1),
(18, 'sai', 'islam', 'saif@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '', 'sai-1643021801.jpg', 1),
(19, 'Abraham Castro', 'MacKensie Tucker', 'zedicen@mailinator.com', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', '', 'Abraham Castro-1643078607.jpg', 2);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
