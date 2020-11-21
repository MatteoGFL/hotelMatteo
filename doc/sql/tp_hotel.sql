-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 20, 2020 at 11:02 PM
-- Server version: 8.0.22-0ubuntu0.20.04.2
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tp_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambre`
--

CREATE TABLE `chambre` (
  `numero` int NOT NULL,
  `etage` int NOT NULL,
  `id_status` int NOT NULL,
  `id_employe` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chambre`
--

INSERT INTO `chambre` (`numero`, `etage`, `id_status`, `id_employe`) VALUES
(12, 1, 3, NULL),
(13, 1, 3, NULL),
(23, 2, 3, NULL),
(47, 4, 3, 8),
(49, 4, 3, NULL),
(55, 5, 3, 7),
(56, 5, 2, NULL),
(62, 6, 3, 7),
(72, 7, 3, 8),
(74, 7, 2, NULL),
(86, 8, 1, NULL),
(91, 9, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `etat`
--

CREATE TABLE `etat` (
  `id` int NOT NULL,
  `label` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etat`
--

INSERT INTO `etat` (`id`, `label`) VALUES
(1, 'Occupé'),
(2, 'Libre'),
(3, 'A nettoyer');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roles` json NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `roles`, `password`) VALUES
(5, 'matteo', '[\"ROLE_MANAGER\"]', '$argon2id$v=19$m=65536,t=4,p=1$BJWtri9t9pJIEyk6OiF2FQ$vbmdOzZ2djXtScK6Ft4vJzYMfcDdYEN/AlhL8sKbxyM'),
(6, 'julien', '[\"ROLE_RECEPTIONNISTE\"]', '$argon2id$v=19$m=65536,t=4,p=1$lFX3UBJwoCTxNYXwrr5IUA$qhWTvCGPqTNF8wH5eafR0qp/2PjoiMUZXhzr0xxyCXE'),
(7, 'pierre', '[\"ROLE_EMPLOYE\"]', '$argon2id$v=19$m=65536,t=4,p=1$1rnz8rrK98hojYMycWQ9mw$HBoVaex1hYvH5c1Wc3K4FImHvdNSbUHc3bc3TXKi7og'),
(8, 'paul', '[\"ROLE_EMPLOYE\"]', '$argon2id$v=19$m=65536,t=4,p=1$E4k5qdxg6K0N0iLAwC/2Zw$lVx/CLg3ISdCYj8zJG2DHFHMtidXyJW4aX5Wqbj2YTI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`numero`);

--
-- Indexes for table `etat`
--
ALTER TABLE `etat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_8D93D649F85E0677` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `numero` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT for table `etat`
--
ALTER TABLE `etat`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
