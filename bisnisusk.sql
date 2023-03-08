-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 07:26 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bisnisusk`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(500) NOT NULL,
  `foto` varchar(500) NOT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp(),
  `berita` longtext NOT NULL,
  `kategori_berita` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `foto`, `tgl_upload`, `berita`, `kategori_berita`) VALUES
(3, 'Judul Disini', 'WhatsApp_Image_2023-03-06_at_16_56_193.jpeg', '2023-03-08 18:20:55', 'sadasd', 1),
(4, 'foto kita', 'FotoBolaAceh-375.JPG', '2023-03-08 18:26:17', 'isi berita', 2);

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int(11) NOT NULL,
  `judul_galeri` varchar(500) NOT NULL,
  `foto_galeri` varchar(500) NOT NULL,
  `nama_galeri` varchar(500) NOT NULL,
  `keterangan_galeri` text NOT NULL,
  `kagegori_galeri` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `struktur organisasi`
--

CREATE TABLE `struktur organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `nama` varchar(500) NOT NULL,
  `jabatan` varchar(500) NOT NULL,
  `keterangan` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `unit_bisnis`
--

CREATE TABLE `unit_bisnis` (
  `id_unit_bisnis` int(11) NOT NULL,
  `nama_unit` varchar(500) NOT NULL,
  `jenis_usaha` varchar(500) NOT NULL,
  `lokasi` text NOT NULL,
  `kategori` int(11) NOT NULL,
  `foto_unit` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pasword` varchar(50) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `pasword`, `role`) VALUES
(1, 'admin_bisnis', 'da896fc70505978a5328833fb239cfe550597fe3', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `struktur organisasi`
--
ALTER TABLE `struktur organisasi`
  ADD PRIMARY KEY (`id_organisasi`);

--
-- Indexes for table `unit_bisnis`
--
ALTER TABLE `unit_bisnis`
  ADD PRIMARY KEY (`id_unit_bisnis`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `struktur organisasi`
--
ALTER TABLE `struktur organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `unit_bisnis`
--
ALTER TABLE `unit_bisnis`
  MODIFY `id_unit_bisnis` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
