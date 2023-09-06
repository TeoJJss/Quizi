-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2021 at 01:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `idpengguna` varchar(12) NOT NULL,
  `password` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jantina` varchar(10) NOT NULL,
  `aras` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`idpengguna`, `password`, `nama`, `jantina`, `aras`) VALUES
('111111111111', '1111', 'PENTADBIR SISTEM', 'LELAKI', 'ADMIN'),
('222222222222', '2222', '222', 'PEREMPUAN', 'PELAJAR');

-- --------------------------------------------------------

--
-- Table structure for table `perekodan`
--

CREATE TABLE `perekodan` (
  `idperekodan` int(11) NOT NULL,
  `idpengguna` varchar(12) NOT NULL,
  `idtopik` int(10) NOT NULL,
  `jenis` int(10) NOT NULL,
  `skor` varchar(5) NOT NULL,
  `catatan_masa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `perekodan`
--

INSERT INTO `perekodan` (`idperekodan`, `idpengguna`, `idtopik`, `jenis`, `skor`, `catatan_masa`) VALUES
(45, '222222222222', 10, 1, '1', '2021-11-01 05:23:19'),
(46, '222222222222', 10, 1, '2', '2021-11-01 05:30:39'),
(47, '222222222222', 10, 1, '2', '2021-11-01 05:30:51'),
(53, '222222222222', 10, 1, '0', '2021-11-12 13:08:32');

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE `pilihan` (
  `idpilihan` int(11) NOT NULL,
  `nom_soalan` int(10) NOT NULL,
  `jawapan` varchar(20) NOT NULL,
  `pilihan_jawapan` text NOT NULL,
  `idsoalan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`idpilihan`, `nom_soalan`, `jawapan`, `pilihan_jawapan`, `idsoalan`) VALUES
(24, 1, '0', 'IF...ELSE IF...ELSE', 15),
(25, 1, '0', 'FOR', 15),
(26, 1, '1', 'IF...ELSE', 15),
(27, 1, '0', 'WHILE', 15),
(32, 2, '', 'String Nama = input.nextLine();', 17),
(33, 2, '', 'nextLine()', 17),
(42, 1, '0', 'a', 22),
(43, 1, '0', 'b', 22),
(44, 1, '1', 'c', 22),
(45, 1, '0', 'd', 22),
(50, 1, '0', 'Float', 24),
(51, 1, '1', 'Integer', 24),
(52, 1, '0', 'Double', 24),
(53, 1, '0', 'Long', 24),
(54, 2, '0', 'String', 25),
(55, 2, '0', 'Line', 25),
(56, 2, '1', 'Boolean', 25),
(57, 2, '0', 'Character', 25),
(59, 2, '', 'Ralat logik', 27),
(60, 2, '', 'Logic error', 27),
(63, 1, '0', 'Analisis masalah ', 28),
(64, 1, '0', 'Pengekodan', 28),
(65, 1, '1', 'Pengujian dan penyahpepijatan', 28),
(66, 1, '0', 'dokumentasi', 28),
(73, 3, '0', 'a', 31),
(74, 3, '1', 'b', 31),
(75, 3, '0', 'c', 31),
(76, 3, '0', 'd', 31);

-- --------------------------------------------------------

--
-- Table structure for table `soalan`
--

CREATE TABLE `soalan` (
  `idsoalan` int(11) NOT NULL,
  `nom_soalan` int(11) NOT NULL,
  `soalan` text NOT NULL,
  `gambarajah` varchar(20) NOT NULL,
  `jenis` varchar(10) NOT NULL,
  `idtopik` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `soalan`
--

INSERT INTO `soalan` (`idsoalan`, `nom_soalan`, `soalan`, `gambarajah`, `jenis`, `idtopik`) VALUES
(24, 1, 'Jenis data untuk: \r\n\"2234\"				', '', '1', 10),
(25, 2, 'Jenis data untuk:\r\n\"True\"', '', '1', 10),
(31, 3, 'test', '', '1', 10);

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE `topik` (
  `idtopik` int(11) NOT NULL,
  `topik` varchar(30) NOT NULL,
  `markah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`idtopik`, `topik`, `markah`) VALUES
(10, 'Jenis data', 100),
(15, 'test', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`idpengguna`);

--
-- Indexes for table `perekodan`
--
ALTER TABLE `perekodan`
  ADD PRIMARY KEY (`idperekodan`);

--
-- Indexes for table `pilihan`
--
ALTER TABLE `pilihan`
  ADD PRIMARY KEY (`idpilihan`);

--
-- Indexes for table `soalan`
--
ALTER TABLE `soalan`
  ADD PRIMARY KEY (`idsoalan`);

--
-- Indexes for table `topik`
--
ALTER TABLE `topik`
  ADD PRIMARY KEY (`idtopik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `perekodan`
--
ALTER TABLE `perekodan`
  MODIFY `idperekodan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `pilihan`
--
ALTER TABLE `pilihan`
  MODIFY `idpilihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `soalan`
--
ALTER TABLE `soalan`
  MODIFY `idsoalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `topik`
--
ALTER TABLE `topik`
  MODIFY `idtopik` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
