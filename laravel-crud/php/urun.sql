-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 15, 2023 at 10:03 AM
-- Server version: 10.6.11-MariaDB-1:10.6.11+maria~ubu2004
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sadmin_yazi`
--

-- --------------------------------------------------------

--
-- Table structure for table `urun`
--

CREATE TABLE `urun` (
  `uid` int(11) NOT NULL,
  `urunadi` varchar(250) NOT NULL,
  `ambalajturu` varchar(250) NOT NULL,
  `stok` int(11) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_general_ci;

--
-- Dumping data for table `urun`
--

INSERT INTO `urun` (`uid`, `urunadi`, `ambalajturu`, `stok`, `fiyat`, `kategori_id`, `created_at`, `updated_at`) VALUES
(19, 'Tabak', '2', 5, 15, 31, '2022-12-09 12:27:59', '2022-12-09 12:27:59'),
(20, 'kola', '1', 12, 20, 34, '2022-12-09 12:28:41', '2022-12-09 12:28:41'),
(21, 'Cips', '2', 25, 15, 33, '2022-12-20 11:25:06', '2022-12-20 11:25:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `urun`
--
ALTER TABLE `urun`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `urun`
--
ALTER TABLE `urun`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
