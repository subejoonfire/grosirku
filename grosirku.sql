-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 06, 2024 at 12:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grosirku`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int NOT NULL,
  `username` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `username`, `password`) VALUES
(3, 'aa', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `idbarang` int NOT NULL,
  `nmbarang` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `kategori` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `stok` int NOT NULL,
  `harga` int NOT NULL,
  `gambar` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(9) COLLATE utf8mb4_general_ci NOT NULL,
  `idpenyedia` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`idbarang`, `nmbarang`, `kategori`, `stok`, `harga`, `gambar`, `status`, `idpenyedia`) VALUES
(130, 'Kangkung', 'Makanan', 20, 3500, 'wallpaperflare.com_wallpaper (10).jpg', 'Tersedia', 158),
(131, 'dsaf', 'Makanan', 0, 132, 'Screenshot (13).png', 'Tersedia', 158);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `idkeranjang` int NOT NULL,
  `idbarang` int NOT NULL,
  `hargatotal` int NOT NULL,
  `jmlpesanan` int NOT NULL,
  `idpenjual` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penjual`
--

CREATE TABLE `penjual` (
  `idpenjual` int NOT NULL,
  `plusername` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `plpassword` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `alamat` varchar(110) COLLATE utf8mb4_general_ci NOT NULL,
  `desa` varchar(128) COLLATE utf8mb4_general_ci NOT NULL,
  `kodepos` int NOT NULL,
  `jenis_kelamin` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `nomor` int NOT NULL,
  `email` varchar(128) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjual`
--

INSERT INTO `penjual` (`idpenjual`, `plusername`, `plpassword`, `alamat`, `desa`, `kodepos`, `jenis_kelamin`, `nomor`, `email`) VALUES
(129, 'harlan', 'harlan', 'Ambungad', 'Ambungannn', 70817, 'Laki Laki', 2147483647, 'wa@gmail.commm');

-- --------------------------------------------------------

--
-- Table structure for table `penyedia`
--

CREATE TABLE `penyedia` (
  `idpenyedia` int NOT NULL,
  `pyusername` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `pypassword` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penyedia`
--

INSERT INTO `penyedia` (`idpenyedia`, `pyusername`, `pypassword`) VALUES
(158, 'wa', 'wa');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` int NOT NULL,
  `idpenyedia` int NOT NULL,
  `idbarang` int NOT NULL,
  `jmlpesanan` int NOT NULL,
  `hargatotal` int NOT NULL,
  `statuspesanan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `idpenjual` int NOT NULL,
  `idkeranjang` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `idpenyedia`, `idbarang`, `jmlpesanan`, `hargatotal`, `statuspesanan`, `idpenjual`, `idkeranjang`) VALUES
(173, 158, 130, 1, 3500, 'Sedang Diproses', 129, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`idbarang`),
  ADD KEY `idpenyedia` (`idpenyedia`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`idkeranjang`),
  ADD KEY `idbarang` (`idbarang`),
  ADD KEY `idpenjual` (`idpenjual`);

--
-- Indexes for table `penjual`
--
ALTER TABLE `penjual`
  ADD PRIMARY KEY (`idpenjual`);

--
-- Indexes for table `penyedia`
--
ALTER TABLE `penyedia`
  ADD PRIMARY KEY (`idpenyedia`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`),
  ADD KEY `idbarang` (`idbarang`),
  ADD KEY `idkeranjang` (`idkeranjang`),
  ADD KEY `idpenjual` (`idpenjual`),
  ADD KEY `idpenyedia` (`idpenyedia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `idbarang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=132;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `idkeranjang` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `penjual`
--
ALTER TABLE `penjual`
  MODIFY `idpenjual` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- AUTO_INCREMENT for table `penyedia`
--
ALTER TABLE `penyedia`
  MODIFY `idpenyedia` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `idpesanan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`idpenyedia`) REFERENCES `penyedia` (`idpenyedia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
