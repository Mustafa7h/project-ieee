-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2023 at 11:21 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin1`
--

CREATE TABLE `admin1` (
  `id` int(11) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin1`
--

INSERT INTO `admin1` (`id`, `admin_email`, `pass`) VALUES
(3, 'admin@one', '123'),
(4, 'admin@two', '456');

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `phone`, `book_name`, `quantity`) VALUES
(30, 'mustafa', '123456', 'open the sky', 1),
(31, 'manar', '12012', 'world news', 3),
(32, 'rahma', '15826', 'by the air', 1),
(33, 'ahmed', '79956', 'last year', 2),
(34, 'aya', '79511', 'desgin', 3),
(40, 'user', '785412', 'air', 1);

-- --------------------------------------------------------

--
-- Table structure for table `history_book`
--

CREATE TABLE `history_book` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history_book`
--

INSERT INTO `history_book` (`id`, `image`, `price`) VALUES
(3, './imgs/book(9).png', 99),
(4, './imgs/book(8).png', 99),
(5, './imgs/book(10).png', 200);

-- --------------------------------------------------------

--
-- Table structure for table `physics_book`
--

CREATE TABLE `physics_book` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `physics_book`
--

INSERT INTO `physics_book` (`id`, `image`, `price`) VALUES
(3, './imgs/book(7).png', 100),
(4, './imgs/book(4).png', 99),
(5, './imgs/book(3).png', 99);

-- --------------------------------------------------------

--
-- Table structure for table `science_book`
--

CREATE TABLE `science_book` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `science_book`
--

INSERT INTO `science_book` (`id`, `image`, `price`) VALUES
(9, './imgs/book(2).png', 99),
(11, './imgs/book(5).png', 95),
(13, './imgs/book(1).png', 150);

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `name`, `email`, `password`, `phone`) VALUES
(13, 'aya', 'aya@1', '321', '79511'),
(14, 'ahmed', 'ahmed@2', '951', '79956'),
(15, 'rahma', 'rahma@3', '753', '15826'),
(16, 'manar', 'manar@4', '369', '12012'),
(17, 'mustafa', 'mustafa@5', '741', '123456'),
(18, 'user', 'user@9', '6547', '785412');

-- --------------------------------------------------------

--
-- Table structure for table `sports_book`
--

CREATE TABLE `sports_book` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sports_book`
--

INSERT INTO `sports_book` (`id`, `image`, `price`) VALUES
(3, './imgs/book(11).png', 99),
(4, './imgs/book(12).png', 99),
(5, './imgs/book(13).png', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin1`
--
ALTER TABLE `admin1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_book`
--
ALTER TABLE `history_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `physics_book`
--
ALTER TABLE `physics_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `science_book`
--
ALTER TABLE `science_book`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports_book`
--
ALTER TABLE `sports_book`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin1`
--
ALTER TABLE `admin1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `history_book`
--
ALTER TABLE `history_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `physics_book`
--
ALTER TABLE `physics_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `science_book`
--
ALTER TABLE `science_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sports_book`
--
ALTER TABLE `sports_book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
