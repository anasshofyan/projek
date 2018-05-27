-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 04:27 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tutorteknik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_jadwal`
--

CREATE TABLE `tabel_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `nama_materi` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_katalog`
--

CREATE TABLE `tabel_katalog` (
  `id_katalog` int(11) NOT NULL,
  `katalog_informatika` varchar(200) NOT NULL,
  `katalog_elektro` varchar(200) NOT NULL,
  `katalog_desain` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_kategori`
--

CREATE TABLE `tabel_kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_keranjang`
--

CREATE TABLE `tabel_keranjang` (
  `id_keranjang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_komentar`
--

CREATE TABLE `tabel_komentar` (
  `id_komentar` int(11) NOT NULL,
  `komentar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_portofolio`
--

CREATE TABLE `tabel_portofolio` (
  `id_portofolio` int(11) NOT NULL,
  `nama_portofolio` varchar(200) NOT NULL,
  `foto_portofolio` varchar(200) NOT NULL,
  `tahun_portofolio` date NOT NULL,
  `penghargaan_portofolio` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_produk`
--

CREATE TABLE `tabel_produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `deskripsi_produk` varchar(200) NOT NULL,
  `video_review_produk` varchar(200) NOT NULL,
  `link_video_produk` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_produk`
--

INSERT INTO `tabel_produk` (`id_produk`, `nama_produk`, `deskripsi_produk`, `video_review_produk`, `link_video_produk`) VALUES
(1, 'Membuat Smart Kandang ', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor a, sapiente, maiores nam iusto! Dolor deleniti accusantium assumenda qui ipsa, perspiciatis iure iusto. Provident ratione ab consec', '', 'http://youtube.com'),
(2, 'Arduino Lorem Ipsum', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor a, sapiente, maiores nam iusto! Dolor deleniti accusantium assumenda qui ipsa, perspiciatis iure iusto. Provident ratione ab consec', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor a, sapiente, maiores nam iusto! Dolor deleniti accusantium assumenda qui ipsa, perspiciatis iure iusto. Provident ratione ab consec', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. Ad dolor a, sapiente, maiores nam iusto! Dolor deleniti accusantium assumenda qui ipsa, perspiciatis iure iusto. Provident ratione ab consec');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_rating`
--

CREATE TABLE `tabel_rating` (
  `id_rating` int(11) NOT NULL,
  `rating_value` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_status`
--

CREATE TABLE `tabel_status` (
  `id_status` int(11) NOT NULL,
  `nama_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_status`
--

INSERT INTO `tabel_status` (`id_status`, `nama_status`) VALUES
(1, 'admin'),
(2, 'tutor'),
(3, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_tempat`
--

CREATE TABLE `tabel_tempat` (
  `id_tempat` int(11) NOT NULL,
  `lokasi_cod` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tabel_transaksi`
--

CREATE TABLE `tabel_transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `status_transaksi` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(12) NOT NULL,
  `alamat` text NOT NULL,
  `bio` text NOT NULL,
  `status` int(1) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `email`, `telp`, `alamat`, `bio`, `status`, `foto`) VALUES
(11, 'Anas Shofyan Martunis Fateh', 'anas', '$2y$10$dtOcHq2OoJeUK5VupHlFM.4/GYGy40ZExEW9CxD0iThD/Pci.kjjG', 'shofyananasmf@gmail.com', '', '', '', 0, ''),
(12, 'anasss', 'shofyan', '$2y$10$dScTAZqA.76MDPjeCJCbXOnN0g.0UO33NT/3bVifVuPZ6fLq20pBS', 'anas@gmail.com', '', '', '', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tabel_katalog`
--
ALTER TABLE `tabel_katalog`
  ADD PRIMARY KEY (`id_katalog`);

--
-- Indexes for table `tabel_kategori`
--
ALTER TABLE `tabel_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tabel_keranjang`
--
ALTER TABLE `tabel_keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `tabel_portofolio`
--
ALTER TABLE `tabel_portofolio`
  ADD PRIMARY KEY (`id_portofolio`);

--
-- Indexes for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `tabel_rating`
--
ALTER TABLE `tabel_rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `tabel_status`
--
ALTER TABLE `tabel_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tabel_tempat`
--
ALTER TABLE `tabel_tempat`
  ADD PRIMARY KEY (`id_tempat`);

--
-- Indexes for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_jadwal`
--
ALTER TABLE `tabel_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_katalog`
--
ALTER TABLE `tabel_katalog`
  MODIFY `id_katalog` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_keranjang`
--
ALTER TABLE `tabel_keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_komentar`
--
ALTER TABLE `tabel_komentar`
  MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_portofolio`
--
ALTER TABLE `tabel_portofolio`
  MODIFY `id_portofolio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_produk`
--
ALTER TABLE `tabel_produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tabel_rating`
--
ALTER TABLE `tabel_rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_status`
--
ALTER TABLE `tabel_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tabel_tempat`
--
ALTER TABLE `tabel_tempat`
  MODIFY `id_tempat` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabel_transaksi`
--
ALTER TABLE `tabel_transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
