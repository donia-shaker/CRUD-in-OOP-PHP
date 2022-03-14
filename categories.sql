-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 07:16 PM
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
-- Database: `categories`
--

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `name`, `description`, `active`) VALUES
(1, 'Mohummed', 'wwwwww', 0),
(2, 'Mohummed', 'wwwwww', 0),
(3, 'Mohummed', 'wwwwww', 0),
(4, 'Mohummed', 'wwwwww', 0),
(5, 'ahmedbbbbbbbbbbb', 'bbb', 0),
(6, '', '', 0),
(7, '', '', 0),
(8, 'ahmed', 'wwwwww', 0),
(9, 'book1', 'jjjj', 1),
(10, 'book2', 'wwwwww', 1),
(11, 'book3', 'wwwwww', 1),
(12, '', '', 0),
(13, '', '', 0),
(14, '', '', 0),
(15, '', '', 0),
(16, '', '', 0),
(17, '', '', 0),
(18, '', '', 0),
(19, '', '', 0),
(20, '', 'nnn', 0),
(21, 'Mohummed', '', 0),
(22, 'Mohummed', '', 0),
(23, 'Mohummed', '', 0),
(24, 'Mohummed', '', 0),
(25, 'Mohummed', 'bbb', 0),
(26, 'book4', 'ddddddddd', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
