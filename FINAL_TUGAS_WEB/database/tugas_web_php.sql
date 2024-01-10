-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 02:36 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugas_web_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi_ambil`
--

CREATE TABLE `detail_transaksi_ambil` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `letak_toko` varchar(255) NOT NULL,
  `waktu_pengambilan` date NOT NULL,
  `jam_pengambilan` time NOT NULL,
  `catatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi_kurir`
--

CREATE TABLE `detail_transaksi_kurir` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `waktu_pengiriman` date NOT NULL,
  `wilayah_pengiriman` varchar(255) NOT NULL,
  `alamat_pengiriman` varchar(255) NOT NULL,
  `detail_pengiriman` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `identitas_transaksi`
--

CREATE TABLE `identitas_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `no_telp1` varchar(25) NOT NULL,
  `no_telp2` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_pengiriman` varchar(20) NOT NULL,
  `metode_bayar` varchar(25) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) DEFAULT NULL,
  `product_image` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `id_toko` int(11) NOT NULL,
  `nama_toko` varchar(255) NOT NULL,
  `alamat_toko` varchar(255) NOT NULL,
  `wilayah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`id_toko`, `nama_toko`, `alamat_toko`, `wilayah`) VALUES
(1, 'sugarboo mall cengkareng', 'jl cengkareng', 'Jakarta Pusat'),
(2, 'sugarboo mall metropolitan', 'jalan patimura', 'Bekasi Selatan');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `Nama_Produk` varchar(255) NOT NULL,
  `Kuantitas` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi_ambil`
--
ALTER TABLE `detail_transaksi_ambil`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `detail_transaksi_kurir`
--
ALTER TABLE `detail_transaksi_kurir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `identitas_transaksi`
--
ALTER TABLE `identitas_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`id_toko`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tran_FK` (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi_ambil`
--
ALTER TABLE `detail_transaksi_ambil`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `detail_transaksi_kurir`
--
ALTER TABLE `detail_transaksi_kurir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `identitas_transaksi`
--
ALTER TABLE `identitas_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `toko`
--
ALTER TABLE `toko`
  MODIFY `id_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi_ambil`
--
ALTER TABLE `detail_transaksi_ambil`
  ADD CONSTRAINT `detail_transaksi_ambil_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `identitas_transaksi` (`id_transaksi`);

--
-- Constraints for table `detail_transaksi_kurir`
--
ALTER TABLE `detail_transaksi_kurir`
  ADD CONSTRAINT `detail_transaksi_kurir_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `identitas_transaksi` (`id_transaksi`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `id_tran_FK` FOREIGN KEY (`id_transaksi`) REFERENCES `identitas_transaksi` (`id_transaksi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
