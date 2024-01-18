-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2024 at 09:54 PM
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
-- Database: `maaslanden`
--

-- --------------------------------------------------------

--
-- Table structure for table `game_1`
--

CREATE TABLE `game_1` (
  `id` int(11) NOT NULL,
  `type` varchar(16) NOT NULL,
  `name` varchar(32) NOT NULL,
  `industry` varchar(16) NOT NULL,
  `initial_pop` int(16) NOT NULL,
  `current_pop` int(16) NOT NULL,
  `city_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `game_keys`
--

CREATE TABLE `game_keys` (
  `id` int(8) NOT NULL,
  `game_key` int(16) NOT NULL,
  `game` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_keys`
--

INSERT INTO `game_keys` (`id`, `game_key`, `game`) VALUES
(1, 2147483647, 1);

-- --------------------------------------------------------

--
-- Table structure for table `game_variables`
--

CREATE TABLE `game_variables` (
  `id` int(16) NOT NULL,
  `kind` varchar(16) NOT NULL,
  `variable` varchar(16) NOT NULL,
  `game_id` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_variables`
--

INSERT INTO `game_variables` (`id`, `kind`, `variable`, `game_id`) VALUES
(259, 'city', 'capital', 1),
(260, 'city', 'village', 1),
(261, 'city', 'village', 1),
(262, 'city', 'town', 1),
(263, 'city', 'village', 1),
(264, 'city', 'town', 1),
(265, 'city', 'city', 1),
(266, 'city', 'village', 1),
(267, 'city', 'town', 1),
(268, 'city', 'city', 1),
(269, 'city', 'village', 1),
(270, 'city', 'town', 1),
(271, 'city', 'city', 1),
(272, 'industry', 'fishing', 1),
(273, 'industry', 'nuclear', 1),
(274, 'industry', 'farming', 1),
(275, 'industry', 'tourism', 1),
(276, 'industry', 'forest', 1),
(277, 'industry', 'mining', 1),
(278, 'city_name', 'Amsterdam', 1),
(279, 'city_name', 'Rotterdam', 1),
(280, 'city_name', 'Den Haag', 1),
(281, 'city_name', 'Utrecht', 1),
(282, 'city_name', 'Eindhoven', 1),
(283, 'city_name', 'Tilburg', 1),
(284, 'city_name', 'Groningen', 1),
(285, 'city_name', 'Almere', 1),
(286, 'city_name', 'Breda', 1),
(287, 'city_name', 'Nijmegen', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_1`
--
ALTER TABLE `game_1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_keys`
--
ALTER TABLE `game_keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_variables`
--
ALTER TABLE `game_variables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_1`
--
ALTER TABLE `game_1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `game_keys`
--
ALTER TABLE `game_keys`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `game_variables`
--
ALTER TABLE `game_variables`
  MODIFY `id` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=288;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
