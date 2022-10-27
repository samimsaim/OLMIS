-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2021 at 08:16 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `olmis`
--

-- --------------------------------------------------------

--
-- Table structure for table `ahkam_wa_hedayat`
--

CREATE TABLE `ahkam_wa_hedayat` (
  `shumara_maktob` int(255) NOT NULL,
  `ID_nawyat_maktob` int(255) NOT NULL,
  `date` date NOT NULL,
  `mursal` varchar(255) COLLATE utf8_bin NOT NULL,
  `mursal_elai` varchar(255) COLLATE utf8_bin NOT NULL,
  `khulas_matlab` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ID_dosya_archive` int(255) NOT NULL,
  `mulahezat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `tahrerat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `hukom_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `araiz`
--

CREATE TABLE `araiz` (
  `ID_nwyat_maktob` int(255) NOT NULL,
  `shumara_maktob` int(255) NOT NULL,
  `date` date NOT NULL,
  `mursal` varchar(255) COLLATE utf8_bin NOT NULL,
  `mursal_elai` varchar(255) COLLATE utf8_bin NOT NULL,
  `khulas matlab` varchar(1000) COLLATE utf8_bin DEFAULT NULL,
  `ejraat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mulahezat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `ID_dosya_archive` int(255) NOT NULL,
  `tahrerat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `shumara_ariza` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `dosya_archive`
--

CREATE TABLE `dosya_archive` (
  `dosya_id` int(255) NOT NULL,
  `dosya_name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `makateb`
--

CREATE TABLE `makateb` (
  `shumara_maktob` int(255) NOT NULL,
  `date` date NOT NULL,
  `mursal` varchar(255) COLLATE utf8_bin NOT NULL,
  `mursal_elai` varchar(255) COLLATE utf8_bin NOT NULL,
  `khulas_matlab` varchar(255) COLLATE utf8_bin NOT NULL,
  `ID_nawyat _maktob` int(255) NOT NULL,
  `ID_shuba_marbuta` int(255) NOT NULL,
  `ID_dosya_archive` int(255) NOT NULL,
  `ejraat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `mulahezat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `tahrerat` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `hedayat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `makateb`
--

INSERT INTO `makateb` (`shumara_maktob`, `date`, `mursal`, `mursal_elai`, `khulas_matlab`, `ID_nawyat _maktob`, `ID_shuba_marbuta`, `ID_dosya_archive`, `ejraat`, `mulahezat`, `tahrerat`, `hedayat`) VALUES
(1, '2021-03-10', 'something', 'something', 'nothing', 1, 1, 1, 'something', 'something', 'nothing', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nawyat_maktob`
--

CREATE TABLE `nawyat_maktob` (
  `ID` int(255) NOT NULL,
  `nawyat` varchar(255) COLLATE utf8_bin NOT NULL,
  `shumara_nawyat_maktob` int(255) DEFAULT NULL,
  `qaid_warda` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `nawyat_maktob`
--

INSERT INTO `nawyat_maktob` (`ID`, `nawyat`, `shumara_nawyat_maktob`, `qaid_warda`) VALUES
(1, 'sadra', 1, 323),
(2, 'wareda', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shuabat`
--

CREATE TABLE `shuabat` (
  `shuba_id` int(255) NOT NULL,
  `shuba_name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `position` varchar(255) COLLATE utf8_bin NOT NULL,
  `phone` int(255) NOT NULL,
  `privilege` varchar(255) COLLATE utf8_bin NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `position`, `phone`, `privilege`, `username`, `password`, `email`, `last_name`) VALUES
(1, 'sara', 'web developer', 728188127, 'admin', 'rahimi', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'sara.rahimi303@gmail.com', 'rahimi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ahkam_wa_hedayat`
--
ALTER TABLE `ahkam_wa_hedayat`
  ADD PRIMARY KEY (`hukom_id`);

--
-- Indexes for table `araiz`
--
ALTER TABLE `araiz`
  ADD PRIMARY KEY (`shumara_ariza`);

--
-- Indexes for table `dosya_archive`
--
ALTER TABLE `dosya_archive`
  ADD PRIMARY KEY (`dosya_id`);

--
-- Indexes for table `makateb`
--
ALTER TABLE `makateb`
  ADD PRIMARY KEY (`shumara_maktob`);

--
-- Indexes for table `nawyat_maktob`
--
ALTER TABLE `nawyat_maktob`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `shuabat`
--
ALTER TABLE `shuabat`
  ADD PRIMARY KEY (`shuba_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ahkam_wa_hedayat`
--
ALTER TABLE `ahkam_wa_hedayat`
  MODIFY `hukom_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dosya_archive`
--
ALTER TABLE `dosya_archive`
  MODIFY `dosya_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nawyat_maktob`
--
ALTER TABLE `nawyat_maktob`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `shuabat`
--
ALTER TABLE `shuabat`
  MODIFY `shuba_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
