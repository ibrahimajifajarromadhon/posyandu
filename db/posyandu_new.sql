-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2026 at 12:26 PM
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
-- Database: `posyandu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_balita`
--

CREATE TABLE `tbl_balita` (
  `id` int(11) NOT NULL,
  `id_balita` varchar(100) NOT NULL,
  `id_ortu` varchar(100) NOT NULL,
  `nik_balita` varchar(16) NOT NULL,
  `nm_balita` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `bb_lahir` float NOT NULL,
  `pb_lahir` float NOT NULL,
  `tgl_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_balita`
--

INSERT INTO `tbl_balita` (`id`, `id_balita`, `id_ortu`, `nik_balita`, `nm_balita`, `tgl_lahir`, `jenis_kelamin`, `bb_lahir`, `pb_lahir`, `tgl_create`) VALUES
(1, 'BLTA202600001', 'ORTU202600001', '3371010101240002', 'M. Zico ', '2021-01-12', 'Laki-Laki', 3.5, 50, '2026-02-13 08:27:24'),
(2, 'BLTA202600002', 'ORTU202600001', '1231312412132423', 'Debug Balita', '2024-05-15', 'Laki-Laki', 10, 100, '2026-02-13 08:39:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_imunisasi`
--

CREATE TABLE `tbl_imunisasi` (
  `id` int(11) NOT NULL,
  `id_imunisasi` varchar(100) NOT NULL,
  `id_balita` varchar(100) NOT NULL,
  `id_ortu` varchar(100) NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `id_jenis_imunisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `tbl_imunisasi`
--

INSERT INTO `tbl_imunisasi` (`id`, `id_imunisasi`, `id_balita`, `id_ortu`, `tgl_imunisasi`, `id_jenis_imunisasi`) VALUES
(1, 'IMNS202600001', 'BLTA202600001', 'ORTU202600001', '2026-02-11', 'JNSI202600001'),
(2, 'IMNS202600002', 'BLTA202600001', 'ORTU202600001', '2026-02-11', 'JNSI202600002');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_imunisasi`
--

CREATE TABLE `tbl_jenis_imunisasi` (
  `id` int(11) NOT NULL,
  `id_jenis_imunisasi` varchar(100) NOT NULL,
  `nama_jenis_imunisasi` varchar(50) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `tgl_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_jenis_imunisasi`
--

INSERT INTO `tbl_jenis_imunisasi` (`id`, `id_jenis_imunisasi`, `nama_jenis_imunisasi`, `keterangan`, `tgl_create`) VALUES
(1, 'JNSI202600001', 'Polio', 'Mencegah kelumpuhan', '2026-02-11 11:13:09'),
(3, 'JNSI202600002', 'Hepatitis B', 'Mencegah Hepatitis B', '2026-02-11 11:30:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kader`
--

CREATE TABLE `tbl_kader` (
  `id_kader` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nm_kader` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_kader`
--

INSERT INTO `tbl_kader` (`id_kader`, `username`, `password`, `nm_kader`, `status`) VALUES
(1, 'kader', '$2y$10$PjPnGvBZRcBhkNH5wyvVxesweh7WzyrShE/a24WmykuWp4b7Qy8I2', 'Iqbal', 'aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ortu`
--

CREATE TABLE `tbl_ortu` (
  `id` int(11) NOT NULL,
  `id_ortu` varchar(100) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL,
  `tgl_create` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_ortu`
--

INSERT INTO `tbl_ortu` (`id`, `id_ortu`, `nm_ayah`, `nm_ibu`, `username`, `password`, `email`, `no_hp`, `alamat`, `pekerjaan_ayah`, `pekerjaan_ibu`, `tgl_create`) VALUES
(1, 'ORTU202600001', 'Alam', 'Dina', 'dina28', '$2y$10$RALwDXyevSVGeK7zpwTlJ.C.cNGgAciMV1KjUu5rLnbccz1oO3eH2', 'dina28@gmail.com', '08888888888', 'Jogja', 'TNI AD', 'IRT', '2026-02-13 08:25:46'),
(2, 'ORTU202600002', 'Yanto', 'Yuli', 'yuli123', '$2y$10$rYl1tBtlwVBORuFYzgBAKebeyvVDiw7fvwMWVZf8N65sz/PiVKk.6', 'yuli@gmail.com', '08777777777', 'Jogja', 'TNI AD', 'Guru', '2026-02-11 10:31:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pertumbuhan`
--

CREATE TABLE `tbl_pertumbuhan` (
  `id` int(11) NOT NULL,
  `id_pertumbuhan` varchar(100) NOT NULL,
  `id_balita` varchar(100) NOT NULL,
  `tgl_cek` date NOT NULL,
  `usia` varchar(255) NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` float NOT NULL,
  `lingkar_kepala` float NOT NULL,
  `lingkar_lengan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_pertumbuhan`
--

INSERT INTO `tbl_pertumbuhan` (`id`, `id_pertumbuhan`, `id_balita`, `tgl_cek`, `usia`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `lingkar_lengan`) VALUES
(1, 'PTBH202600001', 'BLTA202600001', '2026-02-09', '1 Tahun', 5, 80, 50, 50),
(2, 'PTBH202600002', 'BLTA202600001', '2026-02-11', '1 Tahun 8 Bulan', 10, 100, 100, 100),
(3, 'PTBH202600003', 'BLTA202600001', '2026-02-11', '5 Tahun 0 Bulan (60 Bulan)', 50, 100, 50, 50),
(4, 'PTBH202600004', 'BLTA202600001', '2026-02-11', '5 Tahun 0 Bulan (60 Bulan)', 10, 10, 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_balita`
--
ALTER TABLE `tbl_balita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_jenis_imunisasi`
--
ALTER TABLE `tbl_jenis_imunisasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kader`
--
ALTER TABLE `tbl_kader`
  ADD PRIMARY KEY (`id_kader`);

--
-- Indexes for table `tbl_ortu`
--
ALTER TABLE `tbl_ortu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pertumbuhan`
--
ALTER TABLE `tbl_pertumbuhan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_balita`
--
ALTER TABLE `tbl_balita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jenis_imunisasi`
--
ALTER TABLE `tbl_jenis_imunisasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_kader`
--
ALTER TABLE `tbl_kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_ortu`
--
ALTER TABLE `tbl_ortu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pertumbuhan`
--
ALTER TABLE `tbl_pertumbuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
