-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2020 at 02:33 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dealer_motor_rmp`
--

-- --------------------------------------------------------

--
-- Table structure for table `motorcycle_tb`
--

CREATE TABLE `motorcycle_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `brand_id` int(100) NOT NULL,
  `image` varchar(300) NOT NULL,
  `Color` varchar(100) NOT NULL,
  `specification` varchar(400) NOT NULL,
  `stock` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `motorcycle_tb`
--

INSERT INTO `motorcycle_tb` (`id`, `name`, `brand_id`, `image`, `Color`, `specification`, `stock`) VALUES
(1, 'Mio', 1, 'mio.png', 'Blue', 'A scooter motorcycle, made by Yamaha', 75),
(2, 'Vario', 2, 'vario.png', 'Black', 'A scooter motorcycle, made by Honda', 69);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motorcycle_tb`
--
ALTER TABLE `motorcycle_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motorcycle_tb`
--
ALTER TABLE `motorcycle_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
