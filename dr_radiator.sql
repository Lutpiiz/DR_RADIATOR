-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 04:46 PM
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
-- Database: `dr_radiator`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'Luthfi', 'luthfi@gmail.com', '1234'),
(2, 'Attha', 'handika@gmail.com', '1212'),
(3, 'Vhemas', 'vhemas@gmail.com', '3434');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `deskripsi` varchar(200) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama`, `jenis`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Radiator Koyorad Josjis', 'rad', 'Radiator merek Koyorad kualitas no. 1 di Indonesia', 3000000, 'radiator2.jpg'),
(2, 'Tank Super', 'tank', 'Tank super impor Jerman', 1000000, 'tank3.jpg'),
(3, 'Coolant Ungu', 'cool', 'Coolant ungu racun kobra', 500000, 'coolant3.jpeg'),
(5, 'Selang Biru', 'sel', 'Selang biru kuat 10 tahun', 300000, 'selang1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `jasa`
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
-- Dumping data for table `jasa`
--

INSERT INTO `jasa` (`id`, `nama`, `deskripsi`, `waktu`, `harga`, `gambar`) VALUES
(1, 'Ganti Radiator', 'Kami menawarkan layanan penggantian radiator yang komprehensif di bengkel kami. Dari evaluasi kondisi radiator hingga penggantian dengan yang baru, kami memastikan sistem pendingin kendaraan beroperas', '1 Jam', 3500000, 'ganti radiator.jpg'),
(2, 'Korok Radiator', 'Bengkel kami melayani korok radiator, meliputi pembersihan, perbaikan kebocoran, dan perawatan esensial. Mulai dari pembersihan hingga penanganan kebocoran serta penggantian komponen ya', '2 Jam', 500000, 'korok radiator.jpg'),
(3, 'Tambal Bocor Radiator', 'Bengkel kami memberikan layanan tambal bocor radiator yang cepat dan efisien. Dari pengecekan sumber kebocoran hingga penggunaan teknik tambal khusus, kami menangani masalah ini dengan cepat untuk men', '1 Jam', 300000, 'tambal radiator.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
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
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama`, `telepon`, `email`, `beli`, `alamat`, `jenis_bayar`) VALUES
(15, 'Luthfi', '088811111111', 'luthfi@gmail.com', 'Tank Super', 'Yogyakarta', 'e-wallet'),
(16, 'Yanto', '088811111111', 'yanto@gmail.com', 'Coolant Ungu', 'Yogyakarta', 'e-wallet'),
(17, 'Yanto', '088811111111', 'yanto@gmail.com', 'Coolant Ungu', 'Yogyakarta', 'transfer bank'),
(18, 'Dalijo', '088823728372', 'dalijo@gmail.com', 'Coolant Ireng', 'Klaten', 'e-wallet'),
(19, 'Sumbul', '088811111111', 'sumbul@gmail.com', 'Ganti Radiator', 'Yogyakarta', 'transfer bank');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `telepon` char(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `telepon`, `email`, `password`) VALUES
(1, 'Yanto', '088811111111', 'yanto@gmail.com', '1111'),
(2, 'Sumbul', '088822222222', 'sumbul@gmail.com', '2222'),
(3, 'Sigit', '088833333333', 'sigit@gmail.com', '3333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jasa`
--
ALTER TABLE `jasa`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
