-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2024 at 07:36 PM
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
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `institusi` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `addres` varchar(100) NOT NULL,
  `is_deleted` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `email`, `nama`, `institusi`, `country`, `addres`, `is_deleted`) VALUES
(63, '2200018149@webmail.uad.ac.id', 'hadri', 'Uad', 'Bantul', 'Tamanan', '0'),
(64, 'ramadhanifirza11@gmail.com', 'Firza', 'UMY', 'Bumi ayu', 'bumi ayu jalan sana', '1'),
(66, '2200018149@webmail.uad.ac.id', 'asd', 'asd', 'asdasd', 'asdasd', '0'),
(67, 'aasdasd@adasd', 'asdasd', 'adasd', 'asdasd', 'asdasd', '1'),
(68, '2200018149@webmail.uad.ac.id', 'asdasfe', 'asdqwad', 'asdawsadawda', 'asdawdawd', '0'),
(69, 'ahmadfawwaz003@gmail.com', 'asdasdsc', 'asdawad', 'asdawdaw', 'adawdawd', '1'),
(70, 'jomblok286@gmail.com', 'asdad', 'asdaxcxqec', 'assqwad', 'asdadw', '1'),
(71, 'adadasda@adas', 'adsadas', 'asdasd', 'asdasd', 'asdasd', '1'),
(72, 'asaas@AFJNNNL', '', '', '', '', '1'),
(73, 'ADASDWAD@da', '', '', '', '', '1'),
(74, 'adaw@ads', '', '', '', '', '1'),
(75, 'ramadhanifirza11@gmail.com', 'asd', 'asdasdasd', 'dfhdfh', 'sdgffh', '1'),
(76, 'asdasdasd@asdasd', 'asda', 'asdasd', 'asdasd', 'asdasd', '1'),
(77, 'asdasd@adsasd', 'asd', 'asd', 'asd', 'asd', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `username`, `password`) VALUES
(1, 'aldi', 'aldiganteng@gmail.com', 'admin', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
