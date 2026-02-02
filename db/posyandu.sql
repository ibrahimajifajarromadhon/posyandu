-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Nov 2025 pada 13.29
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

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
-- Struktur dari tabel `tbl_balita`
--

CREATE TABLE `tbl_balita` (
  `id_balita` int(11) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  `nm_balita` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `bb_lahir` float NOT NULL,
  `pb_lahir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_balita`
--

INSERT INTO `tbl_balita` (`id_balita`, `id_ortu`, `nm_balita`, `tgl_lahir`, `jenis_kelamin`, `bb_lahir`, `pb_lahir`) VALUES
(1, 15, 'M. Zico ', '2024-02-01', 'Laki-Laki', 1, 1),
(2, 1, 'Wawan', '2025-06-03', 'Perempuan', 1, 1),
(3, 15, 'Anggara', '2025-06-03', 'Laki-Laki', 9, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_imunisasi`
--

CREATE TABLE `tbl_imunisasi` (
  `id_imunisasi` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `id_ortu` int(11) NOT NULL,
  `tgl_imunisasi` date NOT NULL,
  `jenis_imunisasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `tbl_imunisasi`
--

INSERT INTO `tbl_imunisasi` (`id_imunisasi`, `id_balita`, `id_ortu`, `tgl_imunisasi`, `jenis_imunisasi`) VALUES
(1, 1, 15, '2025-06-07', 'Polio'),
(2, 3, 15, '2025-07-02', 'Campak'),
(5, 2, 1, '2025-07-01', 'Campak'),
(6, 1, 15, '2025-07-05', 'Polio');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kader`
--

CREATE TABLE `tbl_kader` (
  `id_kader` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nm_kader` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_kader`
--

INSERT INTO `tbl_kader` (`id_kader`, `username`, `password`, `nm_kader`, `status`) VALUES
(1, 'kader', '$2y$10$PjPnGvBZRcBhkNH5wyvVxesweh7WzyrShE/a24WmykuWp4b7Qy8I2', 'Iqbal', 'aktif');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ortu`
--

CREATE TABLE `tbl_ortu` (
  `id_ortu` int(11) NOT NULL,
  `nm_ayah` varchar(50) NOT NULL,
  `nm_ibu` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan_ayah` varchar(100) NOT NULL,
  `pekerjaan_ibu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_ortu`
--

INSERT INTO `tbl_ortu` (`id_ortu`, `nm_ayah`, `nm_ibu`, `username`, `password`, `email`, `no_hp`, `alamat`, `pekerjaan_ayah`, `pekerjaan_ibu`) VALUES
(1, 'Said', 'Dina', 'dina28', '$2y$10$q5XQhgP4VmHDGEBDXokD2eltGnKXzTordI2Mx.4bx0KWMo3xSHL2m', 'dina28@gmail.com', '085674321682', 'Karang Makmur ', 'TNI', 'IRT'),
(15, 'Sohib', 'Yuli', 'yuli', '$2y$10$A01u8rLa4bswyUNRhwJnSuypE3GOvfG5rKdS3EJ0EPxC2Irs77Uvm', 'yuli@gmail.com', '087778667251', 'Klaten', 'TNI', 'IRT'),
(23, 'Alam', 'Siti', 'siti', '$2y$10$jSpaBeYNVMFWa38bclKbe.L/9Sj9irN44cGlYc1r.MKFW5oR4KIqy', 'siti@gmail.com', '087778667251', 'Klaten', 'Guru', 'IRT'),
(24, 'Tes', 'Tes', '12345', '$2y$10$PjPnGvBZRcBhkNH5wyvVxesweh7WzyrShE/a24WmykuWp4b7Qy8I2', 'tes@gmail.com', '087778667251', 'Klaten', 'TNI', 'IRT');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pertumbuhan`
--

CREATE TABLE `tbl_pertumbuhan` (
  `id_pertumbuhan` int(11) NOT NULL,
  `id_balita` int(11) NOT NULL,
  `tgl_cek` date NOT NULL,
  `usia` int(11) NOT NULL,
  `berat_badan` float NOT NULL,
  `tinggi_badan` float NOT NULL,
  `lingkar_kepala` float NOT NULL,
  `lingkar_lengan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tbl_pertumbuhan`
--

INSERT INTO `tbl_pertumbuhan` (`id_pertumbuhan`, `id_balita`, `tgl_cek`, `usia`, `berat_badan`, `tinggi_badan`, `lingkar_kepala`, `lingkar_lengan`) VALUES
(26, 1, '2019-07-06', 5, 3, 15, 10, 8),
(27, 1, '2019-08-07', 10, 6.2, 20, 13, 10),
(28, 1, '2020-02-07', 35, 12, 20, 14, 5),
(29, 1, '2020-06-06', 47, 20, 10, 15, 10),
(45, 2, '2023-08-14', 3, 4, 2, 8, 2),
(52, 3, '2025-06-03', 1, 1, 1, 11, 1),
(53, 2, '2025-06-03', 1, 1, 11, 1, 1),
(54, 2, '2025-07-31', 1, 11, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_balita`
--
ALTER TABLE `tbl_balita`
  ADD PRIMARY KEY (`id_balita`);

--
-- Indeks untuk tabel `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
  ADD PRIMARY KEY (`id_imunisasi`);

--
-- Indeks untuk tabel `tbl_kader`
--
ALTER TABLE `tbl_kader`
  ADD PRIMARY KEY (`id_kader`);

--
-- Indeks untuk tabel `tbl_ortu`
--
ALTER TABLE `tbl_ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indeks untuk tabel `tbl_pertumbuhan`
--
ALTER TABLE `tbl_pertumbuhan`
  ADD PRIMARY KEY (`id_pertumbuhan`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_balita`
--
ALTER TABLE `tbl_balita`
  MODIFY `id_balita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_imunisasi`
--
ALTER TABLE `tbl_imunisasi`
  MODIFY `id_imunisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tbl_kader`
--
ALTER TABLE `tbl_kader`
  MODIFY `id_kader` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_ortu`
--
ALTER TABLE `tbl_ortu`
  MODIFY `id_ortu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `tbl_pertumbuhan`
--
ALTER TABLE `tbl_pertumbuhan`
  MODIFY `id_pertumbuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
