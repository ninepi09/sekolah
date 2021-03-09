-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2021 at 09:34 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sekolahhubmaster`
--

-- --------------------------------------------------------

--
-- Table structure for table `sekolahs`
--

CREATE TABLE `sekolahs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sekolah` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenjang` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun_ajaran` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sekolahs`
--

INSERT INTO `sekolahs` (`id`, `id_sekolah`, `name`, `alamat`, `jenjang`, `tahun_ajaran`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '1', 'Sman 11', 'menda', 'sma', '2019/2020', NULL, NULL, NULL),
(2, '2', 'sman 23', 'm', 'SMP', '2020/2021', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sekolahs`
--
ALTER TABLE `sekolahs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sekolahs`
--
ALTER TABLE `sekolahs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
