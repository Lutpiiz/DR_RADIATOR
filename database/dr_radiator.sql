-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2024 pada 02.28
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dr_radiator`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Luthfi', 'luthfi@gmail.com', '1234'),
(2, 'Attha', 'handika@gmail.com', '1212'),
(3, 'Vhemas', 'vhemas@gmail.com', '3434'),
(4, 'admin', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE `barang` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jenis`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Radiator Koyorad Josjis', 'rad', 'Radiator merek Koyorad kualitas no. 1 di Indonesia', 3000000, 'radiator2.jpg'),
(2, 'Tank Super', 'tank', 'Tank super impor Jerman', 1000000, 'tank3.jpg'),
(3, 'Coolant Ungu', 'cool', 'Coolant ungu racun kobra', 500000, 'coolant3.jpeg'),
(5, 'Selang Biru', 'sel', 'Selang biru kuat 10 tahun', 300000, 'selang1.jpeg'),
(7, 'Coolant Ireng', 'cool', 'Coolant ireng pedas manis', 50000, 'coolant2.jpeg'),
(8, 'Radiator Top', 'rad', 'Radiator top markotop', 2500000, 'radiator6.jpg'),
(9, 'Tank  Avanza', 'tank', 'Tank Avanza ori impor Jepang', 300000, 'tank2.jpg'),
(10, 'Selang Samco', 'sel', 'Selang Samco super', 150000, 'selangradiator1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`id`, `nama`, `deskripsi`, `waktu`, `harga`, `gambar`) VALUES
(1, 'Ganti Radiator', 'Kami menawarkan layanan penggantian radiator yang komprehensif di bengkel kami. Dari evaluasi kondisi radiator hingga penggantian dengan yang baru, kami memastikan sistem pendingin kendaraan beroperas', '1 Jam', 3500000, 'ganti radiator.jpg'),
(2, 'Korok Radiator', 'Bengkel kami melayani korok radiator, meliputi pembersihan, perbaikan kebocoran, dan perawatan esensial. Mulai dari pembersihan hingga penanganan kebocoran serta penggantian komponen ya', '2 Jam', 500000, 'korok radiator.jpg'),
(3, 'Tambal Bocor Radiator', 'Bengkel kami memberikan layanan tambal bocor radiator yang cepat dan efisien. Dari pengecekan sumber kebocoran hingga penggunaan teknik tambal khusus, kami menangani masalah ini dengan cepat untuk men', '1 Jam', 300000, 'tambal radiator.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` char(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `beli` varchar(50) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `jenis_bayar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `telepon`, `email`, `beli`, `alamat`, `jenis_bayar`) VALUES
(15, 'Luthfi', '088811111111', 'luthfi@gmail.com', 'Tank Super', 'Yogyakarta', 'e-wallet'),
(16, 'Yanto', '088811111111', 'yanto@gmail.com', 'Coolant Ungu', 'Yogyakarta', 'e-wallet'),
(17, 'Yanto', '088811111111', 'yanto@gmail.com', 'Coolant Ungu', 'Yogyakarta', 'transfer bank'),
(18, 'Dalijo', '088823728372', 'dalijo@gmail.com', 'Coolant Ireng', 'Klaten', 'e-wallet'),
(19, 'Sumbul', '088811111111', 'sumbul@gmail.com', 'Ganti Radiator', 'Yogyakarta', 'transfer bank');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `telepon` char(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `telepon`, `email`, `password`) VALUES
(1, 'Yanto', '088811111111', 'yanto@gmail.com', '1111'),
(2, 'Sumbul', '088822222222', 'sumbul@gmail.com', '2222'),
(3, 'Sigit', '088833333333', 'sigit@gmail.com', '3333'),
(4, 'user', '081234567890', 'user@gmail.com', 'user');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
