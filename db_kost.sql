-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 10:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kost`
--

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `No_Kamar` char(15) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `No_Kamar`, `gambar`) VALUES
(1, '001', 'IMG_6568.JPG'),
(2, '002', 'IMG_6572.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `galeri2`
--

CREATE TABLE `galeri2` (
  `id_galeri2` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri2`
--

INSERT INTO `galeri2` (`id_galeri2`, `nama`, `gambar`) VALUES
(1, 'Gambar 1', 'IMG_6509.jpg'),
(2, 'Gambar 2', 'IMG_6513.jpg'),
(3, 'Gambar 3', 'IMG_6522.jpg'),
(4, 'Gambar 4', 'IMG_6572.jpg'),
(5, 'Gambar 5', 'IMG_6529.jpg'),
(6, 'Gambar 6', 'IMG_6541.jpg'),
(7, 'Gambar 7', 'IMG_6553.jpg'),
(8, 'Gambar 8', 'IMG_6581.jpg'),
(9, 'Gambar 9', 'IMG_6563.jpg'),
(10, 'Gambar 10', 'IMG_6568.jpg'),
(11, 'Gambar 11', 'IMG_6589.jpg'),
(12, 'Gambar 12', 'IMG_6576.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `No_Kamar` char(15) NOT NULL,
  `id_galeri` int(50) NOT NULL,
  `Jenis` varchar(50) DEFAULT NULL,
  `Type` varchar(50) DEFAULT NULL,
  `harga` double DEFAULT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`No_Kamar`, `id_galeri`, `Jenis`, `Type`, `harga`, `deskripsi`, `stok`) VALUES
('001', 1, 'Suite Room', 'Double', 150000, 'Double bed di setiap kamar, kontrol AC individu setiap kamar, international \ndan local satelit chanel TV, tersedia free WiFi, Kamar mandi menggunakan \nshower, disediakan lemari berukuran sedang, serta meja dinding serta kursi.', 5),
('002', 2, 'VIP Room', 'Double', 200000, 'Double bed di setiap kamar, kontrol AC individu setiap kamar, \ninternational dan local satelit chanel TV, tersedia free WiFi, disediakan \nlemari berukuran sedang, serta meja dinding serta kursi. Kamar mandi \nmenggunakan shower dan tersedia bathup fiber.', 3);

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_pelanggan` int(50) NOT NULL,
  `jumlah_transfer` int(11) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `id_transaksi`, `id_pelanggan`, `jumlah_transfer`, `bank`, `gambar`, `status`) VALUES
(32, 22, 3, 200000, 'Mandiri', 'IMG_6568.JPG', 'Y'),
(33, 23, 3, 200000, 'Mandiri', 'IMG_6568.JPG', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(35) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jk` varchar(11) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `no_hp`, `jk`, `alamat`, `email`) VALUES
(3, 'ALTUNDRI WAHYU HIDAYATULLAH', 'altundri', '123', '087884649035', 'pria', 'Jalan Sudirman', 'altundriwahyuu@gmail.com'),
(4, 'sultan', 'sultan', 'sultan', '8712412', 'pria', 'asd', 'evisukasih06061982@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `deskripsi1` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `gambar`, `deskripsi1`) VALUES
(1, 'IMG_6509.jpg', 'Welcome To RD Kost Palembang'),
(2, 'IMG_6526.JPG', 'Enjoy your day by staying at this boarding house'),
(3, 'IMG_6513.JPG', 'Get the comfort you want with all the facilites we provided');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `No_Faktur` varchar(50) NOT NULL,
  `No_Kamar` char(15) NOT NULL,
  `Jenis` varchar(255) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `tgl_masuk` date DEFAULT NULL,
  `tgl_keluar` date DEFAULT NULL,
  `jml_kamar` varchar(255) NOT NULL,
  `lama_menginap` int(11) NOT NULL,
  `harga` int(50) NOT NULL,
  `Nama` varchar(255) NOT NULL,
  `Telpon` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `No_Faktur`, `No_Kamar`, `Jenis`, `id_pelanggan`, `tgl_masuk`, `tgl_keluar`, `jml_kamar`, `lama_menginap`, `harga`, `Nama`, `Telpon`, `alamat`, `Email`, `pesan`) VALUES
(22, 'INV-00023', '002', 'VIP Room', 3, '2022-07-18', '2022-07-19', '1', 1, 200000, 'ALTUNDRI WAHYU HIDAYATULLAH', '087884649035', 'Jalan Sudirman', 'altundriwahyuu@gmail.com', ''),
(23, 'INV-00024', '002', 'VIP Room', 3, '2022-07-21', '2022-07-22', '1', 1, 200000, 'ALTUNDRI WAHYU HIDAYATULLAH', '087884649035', 'Jalan Sudirman', 'altundriwahyuu@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`) VALUES
(1, 'nina', 'nina', 'f2ceea1536ac1b8fed1a167a9c8bf04d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`),
  ADD KEY `No_Kamar` (`No_Kamar`);

--
-- Indexes for table `galeri2`
--
ALTER TABLE `galeri2`
  ADD PRIMARY KEY (`id_galeri2`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`No_Kamar`),
  ADD KEY `id_galeri` (`id_galeri`),
  ADD KEY `id_galeri_2` (`id_galeri`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `No_Kamar` (`No_Kamar`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `galeri2`
--
ALTER TABLE `galeri2`
  MODIFY `id_galeri2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
