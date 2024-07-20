-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 04:39 PM
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
-- Database: `intmat`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactmessage`
--

CREATE TABLE `contactmessage` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactmessage`
--

INSERT INTO `contactmessage` (`id`, `fname`, `lname`, `email`, `message`) VALUES
(1, 'CHETAN', 'B R', 'chiranjeevichetan1998@gmail.com', 'Hi what\'s up'),
(2, 'chiru', 'b r', 'chiru@gmail.com', 'Hi hello');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`) VALUES
(1, 'chetan', 'chetan@gmail.com'),
(2, 'chetan123', 'chetu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `usersUid` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `email`, `usersUid`, `phone`, `pass`) VALUES
(1, 'CHETAN B R', 'chiranjeevichetan1998@gmail.com', '', 6363451047, '$2y$10$Rs8KGWlG/SP1Y7X/6XFyeeUddZWyCpBDUTDrlGdnHBt'),
(2, 'chiru', 'chiru@gmail.com', '', 6363451047, '$2y$10$f8Fmh1akWZrHCdIOL.Gry.Mbcv6mLk3vFDX4d0HCXCW'),
(3, 'sup', 'supriya@yahoo.com', '', 7337738535, '$2y$10$9qgv7sseVLMw3xYbmbyPSOc8ZhjofiNe.HZeFwabFnF'),
(4, 'manu', 'manu@yahoo.com', '', 7337738535, '$2y$10$vqDeOxUbs3aWbWLn2ClF6.vhAyF3H0zvw9xS.tRou6s'),
(5, 'teju', 'teju@gmail.com', '', 636365619, '$2y$10$m39kI/RX3ZVXmb.tlCbfS.p5lzg3ZUPCknuWmiC6.c5'),
(6, 'nayana', 'nayana@gmail.com', '', 7281632617, '$2y$10$wwzwwQpcQPv7XNNpR97Oc.vRQ4jxkmyMgaTzP1VHDqN'),
(7, 'chetan', 'chiranjeevi@gmail.com', '', 6363451047, '$2y$10$B/77UmvhGJLJ9SdctuJtce/j0gt4xAq9og6aeq.xdDf'),
(8, 'likitha', 'likitha@gmail.com', '', 6363451047, '$2y$10$p3C2lUd/OAdI0wdClbXEC.BypvbXsr816fpCF8NSqDT'),
(9, 'sonu', 'sonu@gmail.com', '', 9880505751, '$2y$10$tSjDX4rVLLT337XCzwu2WuWwjBNHmARe50F.JZwqin2'),
(10, 'chetu', 'chetu@gmail.com', '', 6363451047, 'Chetan@2003'),
(11, 'suppi', 'suppi@gmail.com', '', 7337738535, '$2y$10$yFDKqSlsuuIbMhOhmo2CmOyBdsHyD4HBgxefP2GZZyA'),
(12, 'NAVEEN', 'naveen@gmail.com', 'naveen123', 6363451047, '$2y$10$d94r.azpYZ09ZqsX8Ihk4esQY4djwMGoFgcvgCKij7K'),
(13, 'pushpa', 'pushpa@gmail.com', 'pushpa123', 6363451047, '123'),
(14, 'suppu', 'suppu@gmail.com', 'suppu123', 7337738535, '123'),
(15, 'pratyush', 'pratyush@gmail.com', 'Pratushpratye', 6363451047, 'Chetan@2003'),
(16, 'Sumanth', 'sumanth@gmail.com', 'sumanth123', 6363451047, '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactmessage`
--
ALTER TABLE `contactmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactmessage`
--
ALTER TABLE `contactmessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
