-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Jun 2020 pada 15.39
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rwebprak`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('4askt5c65qo7v6ompqe76jqu2u8rgg07', '::1', 1593351112, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333335313130383b),
('aa7tdrjdu8as0bnn70hatamijm9c90hb', '::1', 1593351117, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333335303934313b),
('d007cmh1p4mc4dk0hhrm7obadfrblbpd', '::1', 1593350810, 0x5f5f63695f6c6173745f726567656e65726174657c693a313539333335303533343b);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wrgkeluar`
--

CREATE TABLE `tb_wrgkeluar` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` char(50) NOT NULL,
  `alamat_asal` varchar(150) NOT NULL,
  `kota_tujuan` varchar(50) NOT NULL,
  `alamat_tujuan` varchar(150) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wrgkeluar`
--

INSERT INTO `tb_wrgkeluar` (`id`, `nama`, `jk`, `alamat_asal`, `kota_tujuan`, `alamat_tujuan`, `no_hp`) VALUES
(7, 'Nuradela', 'Perempuan', 'Bakul Iwak Nini Sartem', 'Bima, NTB', 'Pak Thengul', '086743847585');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_wrgmasuk`
--

CREATE TABLE `tb_wrgmasuk` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jk` char(50) NOT NULL,
  `kota_asal` varchar(150) NOT NULL,
  `alamat_asal` varchar(150) NOT NULL,
  `alamat_tujuan` char(150) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_wrgmasuk`
--

INSERT INTO `tb_wrgmasuk` (`id`, `nama`, `jk`, `kota_asal`, `alamat_asal`, `alamat_tujuan`, `no_hp`) VALUES
(26, 'Carto Ardiyanto', 'Laki-Laki', 'Kuningan', 'Kuning kuning', 'Tukang Bakso', '086743847585'),
(27, 'Falakh Bur', 'Perempuan', 'Jakarta', 'Bogor', 'Bu Darwi', '083844865649'),
(28, 'Wardah', 'Laki-Laki', 'NTB', 'Bima', 'Mbah Sukiyem Sriharjo', '087834123456'),
(30, 'Amanda Fahmidyna', 'Perempuan', 'Cilacap', 'Majenang', 'Nini Martiah', '086333999888');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `tb_wrgkeluar`
--
ALTER TABLE `tb_wrgkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_wrgmasuk`
--
ALTER TABLE `tb_wrgmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_wrgkeluar`
--
ALTER TABLE `tb_wrgkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_wrgmasuk`
--
ALTER TABLE `tb_wrgmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
