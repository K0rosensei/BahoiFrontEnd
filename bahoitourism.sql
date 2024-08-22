-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2024 at 02:40 PM
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
-- Database: `bahoitourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `diving`
--

CREATE TABLE `diving` (
  `Id` int(11) NOT NULL,
  `Alat` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Kerangan` text NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `homestay`
--

CREATE TABLE `homestay` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Foto1` text NOT NULL,
  `Foto2` text DEFAULT NULL,
  `Foto3` text DEFAULT NULL,
  `SnK` text NOT NULL,
  `Infotambahan` text NOT NULL,
  `Fasilitas` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesandiving`
--

CREATE TABLE `pesandiving` (
  `Id` int(11) NOT NULL,
  `Alat` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanhomestay`
--

CREATE TABLE `pesanhomestay` (
  `Id` int(11) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Total` int(11) NOT NULL,
  `Checkin` date NOT NULL,
  `Ischeckin` tinyint(1) NOT NULL,
  `Checkout` date NOT NULL,
  `Ischeckout` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanwisata`
--

CREATE TABLE `pesanwisata` (
  `Id` int(11) NOT NULL,
  `Tempat` varchar(255) NOT NULL,
  `Tanggal` date NOT NULL,
  `Jumlah` int(11) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratinghomestay`
--

CREATE TABLE `ratinghomestay` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ratingwisata`
--

CREATE TABLE `ratingwisata` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Rating` int(11) NOT NULL,
  `Review` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Nohp` varchar(255) DEFAULT NULL,
  `Password` varchar(255) NOT NULL,
  `Tokenkey` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wisata`
--

CREATE TABLE `wisata` (
  `Id` int(11) NOT NULL,
  `Tempat` varchar(255) NOT NULL,
  `Harga` int(11) NOT NULL,
  `Foto1` text DEFAULT NULL,
  `Foto2` text DEFAULT NULL,
  `Foto3` text DEFAULT NULL,
  `Foto4` text DEFAULT NULL,
  `Foto5` text DEFAULT NULL,
  `Foto6` text DEFAULT NULL,
  `Foto7` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `diving`
--
ALTER TABLE `diving`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `homestay`
--
ALTER TABLE `homestay`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pesandiving`
--
ALTER TABLE `pesandiving`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pesanhomestay`
--
ALTER TABLE `pesanhomestay`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pesanwisata`
--
ALTER TABLE `pesanwisata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ratinghomestay`
--
ALTER TABLE `ratinghomestay`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `ratingwisata`
--
ALTER TABLE `ratingwisata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
