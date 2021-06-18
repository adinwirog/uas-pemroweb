-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jun 2021 pada 22.42
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uaspemroweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admincamat`
--

CREATE TABLE `admincamat` (
  `id` int(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admincamat`
--

INSERT INTO `admincamat` (`id`, `nama`, `jabatan`, `username`, `password`) VALUES
(332211, 'admin', '1', 'admin', '$2y$10$jFK9hcSbxNBMRLeoyhvjlOHpG979t2VkigjS90q/PjFpnusRCk8FG');

-- --------------------------------------------------------

--
-- Struktur dari tabel `datapenduduk`
--

CREATE TABLE `datapenduduk` (
  `id` int(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `penghasilan` int(11) NOT NULL,
  `idpenerimaan` int(11) DEFAULT NULL,
  `idkeberhakan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `datapenduduk`
--

INSERT INTO `datapenduduk` (`id`, `nama`, `alamat`, `pekerjaan`, `penghasilan`, `idpenerimaan`, `idkeberhakan`) VALUES
(3328300, 'Ahmad Syarifudin', 'Jl. Bahru No 54', 'Nelayan', 1000000, 1, 1),
(3328301, 'Alim Syardani', 'Jl. Rotan No 37', 'Wiraswasta', 500000, 1, 1),
(3328303, 'Abdul Manaf', 'Jl. Rayu Tawang RT 15 RW 4', 'Petani', 400000, 1, 1),
(3328305, 'Rohmat', 'Jl. Kalibaru RT 5', 'Wiraswasta', 3000000, 1, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `keberhakan`
--

CREATE TABLE `keberhakan` (
  `id` int(11) NOT NULL,
  `keberhakan` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keberhakan`
--

INSERT INTO `keberhakan` (`id`, `keberhakan`) VALUES
(1, 'Berhak'),
(2, 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `perangkatdesa`
--

CREATE TABLE `perangkatdesa` (
  `id` int(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `perangkatdesa`
--

INSERT INTO `perangkatdesa` (`id`, `nama`, `jabatan`, `username`, `password`) VALUES
(3328110, 'Akhmad Nakhrowi', 'Sekretaris Desa', 'nakhrowi', '$2y$10$/9gOO7vYDj4eU4f6LU0u0eVKpx8COLy2fbWgtPdVLXdXk/2P/503K'),
(3328111, 'Ahmad Furqoni', 'Asisten Lurah', 'furqon123', '$2y$10$QXdbdbG9IF8LkpiN9yX67eV8E/I5ceHrB0HKvr99P4PL1JMLs0TEy'),
(3328112, 'Ainul Yaqin Mufarozah', 'Sekretaris Desa', '3328112', '$2y$10$OwEtOJO2Mzx5Zz/wbTzr7e5Q/fq8jce8vCJq1WrxL88DgAQz8p0ki'),
(3328113, 'Katrina Kaif', 'Kepala Urusan Pembangunan', 'Kaif123', '$2y$10$yKU4QOIxj0Z9HrbaRdSHNeRLsyTXXqTvBL3P27dUVJEbwKVokr1Zm'),
(3328114, 'Bahrudin Yusuf', 'Kepala Urusan Umum', 'bahrudin12', '$2y$10$qrmSiL8QefU4lmLyEaG1/euBkUsic31SilBTQ7dmxBRWmNFEg1d7y'),
(3328115, 'Burhan Karim', 'Administrasi Umum', 'burhankarim', '$2y$10$L1xZ5TXZ8iHg8K4ZLIDBr.rthB9kb3aa0wytJI2mhip4dKTR7Qm3q');

-- --------------------------------------------------------

--
-- Struktur dari tabel `statuspenerimaan`
--

CREATE TABLE `statuspenerimaan` (
  `id` int(11) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `statuspenerimaan`
--

INSERT INTO `statuspenerimaan` (`id`, `status`) VALUES
(1, 'Belum'),
(2, 'Sudah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admincamat`
--
ALTER TABLE `admincamat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `datapenduduk`
--
ALTER TABLE `datapenduduk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpenerimaan` (`idpenerimaan`),
  ADD KEY `idkeberhakan` (`idkeberhakan`);

--
-- Indeks untuk tabel `keberhakan`
--
ALTER TABLE `keberhakan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `perangkatdesa`
--
ALTER TABLE `perangkatdesa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `statuspenerimaan`
--
ALTER TABLE `statuspenerimaan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admincamat`
--
ALTER TABLE `admincamat`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=332212;

--
-- AUTO_INCREMENT untuk tabel `datapenduduk`
--
ALTER TABLE `datapenduduk`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3328306;

--
-- AUTO_INCREMENT untuk tabel `keberhakan`
--
ALTER TABLE `keberhakan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `perangkatdesa`
--
ALTER TABLE `perangkatdesa`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3328123;

--
-- AUTO_INCREMENT untuk tabel `statuspenerimaan`
--
ALTER TABLE `statuspenerimaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `datapenduduk`
--
ALTER TABLE `datapenduduk`
  ADD CONSTRAINT `datapenduduk_ibfk_1` FOREIGN KEY (`idpenerimaan`) REFERENCES `statuspenerimaan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE,
  ADD CONSTRAINT `datapenduduk_ibfk_2` FOREIGN KEY (`idkeberhakan`) REFERENCES `keberhakan` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
