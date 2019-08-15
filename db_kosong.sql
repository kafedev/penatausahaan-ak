-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 15 Agu 2019 pada 08.52
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pajak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kpknl`
--

CREATE TABLE `kpknl` (
  `id` int(10) NOT NULL,
  `jenis_alat` text NOT NULL,
  `tgl_reg` date NOT NULL,
  `nama_wp` text,
  `no_surat` text,
  `no_agenda` text,
  `no_ak` text,
  `nilai` int(5) DEFAULT NULL,
  `keterangan` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kpp_lain`
--

CREATE TABLE `kpp_lain` (
  `id` int(10) NOT NULL,
  `jenis_alat` text NOT NULL,
  `tgl_reg` date NOT NULL,
  `nama_wp` text,
  `kpp_pengirim` text,
  `no_surat` text,
  `no_agenda` text,
  `no_ak` text,
  `nilai` int(5) NOT NULL,
  `keterangan` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kpp_sendiri`
--

CREATE TABLE `kpp_sendiri` (
  `id` int(10) NOT NULL,
  `jenis_alat` text NOT NULL,
  `dari` text,
  `tgl_reg` date NOT NULL,
  `nama_wp` text,
  `untuk` varchar(11) DEFAULT NULL,
  `ket_lain` text,
  `no_surat` text,
  `no_agenda` text,
  `no_ak` text,
  `nilai` int(5) DEFAULT NULL,
  `keterangan` text NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ppat`
--

CREATE TABLE `ppat` (
  `id` int(10) NOT NULL,
  `jenis_alat` text NOT NULL,
  `tgl_reg` date NOT NULL,
  `bulan` varchar(7) NOT NULL,
  `no_surat` text,
  `no_agenda` text,
  `no_ak` text,
  `keterangan` text,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kpknl`
--
ALTER TABLE `kpknl`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kpp_lain`
--
ALTER TABLE `kpp_lain`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kpp_sendiri`
--
ALTER TABLE `kpp_sendiri`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ppat`
--
ALTER TABLE `ppat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kpknl`
--
ALTER TABLE `kpknl`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kpp_lain`
--
ALTER TABLE `kpp_lain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kpp_sendiri`
--
ALTER TABLE `kpp_sendiri`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ppat`
--
ALTER TABLE `ppat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
