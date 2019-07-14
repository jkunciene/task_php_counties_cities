-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 14, 2019 at 12:03 PM
-- Server version: 5.7.24-log
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(6) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `discription` text,
  `price` int(6) DEFAULT NULL,
  `imgname` varchar(30) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `discription`, `price`, `imgname`, `status`) VALUES
(1, 'Rožinis sijonukas', 'Rankų darbo sijonukas įvairaus amžiaus mergaitėms, kurios dievina rožinę spalvą, dydis pagal individualų užsakymą, raštas gali būti keičiamas', 50, 'pink_1', 1),
(2, 'Rusvas sijonukas', 'Rankų darbo sijonukas įvairaus amžiaus mergaitėms, kurios mėgsta ramesnę spalvą, dydis pagal individualų užsakymą, raštas gali būti keičiamas', 45, 'brown_1', 1),
(3, 'Žalsvas sijonukas', 'Rankų darbo sijonukas įvairaus amžiaus mergaitėms, dydis pagal individualų užsakymą, raštas gali būti keičiamas', 43, 'green_1', 1),
(4, 'Mėlynas sijonukas', 'Rankų darbo sijonukas įvairaus amžiaus mergaitėms, dydis pagal individualų užsakymą, raštas gali būti keičiamas', 46, 'blue_1', 1),
(10, 'test', 'test aprašymas', 222, 'test', 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(6) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
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
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
