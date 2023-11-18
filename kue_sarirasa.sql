-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2023 at 05:51 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kue_sarirasa`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_kue`
--

CREATE TABLE `jenis_kue` (
  `jenis_kue_id` int(11) NOT NULL,
  `nama_jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_kue`
--

INSERT INTO `jenis_kue` (`jenis_kue_id`, `nama_jenis`) VALUES
(1, 'Brownies'),
(2, 'Bolu Bakar Arang'),
(3, 'Bolu Kukus');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(11) NOT NULL,
  `nama_supplier` varchar(255) NOT NULL,
  `alamat_supplier` text DEFAULT NULL,
  `nomor_telepon` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `nama_supplier`, `alamat_supplier`, `nomor_telepon`, `email`) VALUES
(1, 'Cakeis', 'Jl Terusan Kopo No 387', '022542312', 'cakeis@gmail.com'),
(2, 'Kue Bunda', 'Jalan Holis No 119', '022564723624', 'kuebunda@gmail.com'),
(3, 'Goodcake', 'Jalan Sunda No 23', '0225642324', 'goodcake@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `varian_kue`
--

CREATE TABLE `varian_kue` (
  `varian_kue_id` int(11) NOT NULL,
  `jenis_kue_id` int(11) DEFAULT NULL,
  `supplier_id` int(11) DEFAULT NULL,
  `nama_varian` varchar(255) NOT NULL,
  `gambar_kue` text NOT NULL,
  `harga` decimal(10,2) NOT NULL,
  `deskripsi` varchar(225) DEFAULT NULL,
  `stok` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `varian_kue`
--

INSERT INTO `varian_kue` (`varian_kue_id`, `jenis_kue_id`, `supplier_id`, `nama_varian`, `gambar_kue`, `harga`, `deskripsi`, `stok`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Brownies Coklat', 'image/brownies-coklat-lumer.jpe', '50000.00', 'Kue brownies coklat dengan tingkat kemanisan yang pas dan aman untuk dikonsumsi sehari-hari.', 23, '2023-11-08 15:32:43', '2023-11-08 15:32:54'),
(3, 1, 1, 'Brownies Strawberi', 'image/brownies-strawberi.jpg', '50000.00', 'Kue Brownies Strawberi dengan tingkat kemanisan yang pas dan aman untuk dikonsumsi sehari-hari.', 23, '2023-11-08 18:01:15', '2023-11-14 10:10:07'),
(4, 3, 3, 'Bolu Kukus Pandan', 'image/bolu-kukus-pandan.jfif', '35000.00', 'Bolu Kukus Pandan ini salah satu produk Best Seller, ayo cepat order hanya di Sarirasa!', 12, '2023-11-08 18:16:35', '2023-11-14 10:09:17'),
(5, 2, 2, 'Bolu Bakar Coklat Matang', 'image/bolu-bakar-coklat.jfif', '35000.00', 'Bolu Bakar dengan teknik pemanggangan ala Sarirasa yang tentunya akan memanjakan mulut anda!', 39, '2023-11-08 18:35:12', '2023-11-14 10:06:56'),
(6, 2, 3, 'Bolu Bakar Ketan Hitam', 'image/bolu-bakar-ketan.jfif', '60000.00', 'Bolu ketan ini sangat nikmat saat dikonsumsi dengan teh hangat, jadi langsung order bolu ketan di Sarirasa!', 4, '2023-11-08 19:56:32', '2023-11-14 21:12:06'),
(8, 2, 1, 'Bolu Gulung', 'image/bolu-gulung.jfif', '28000.00', 'Bolu Gulung yang digulung seperti menggulung tikar, rasa yang sangat alami dan aman untuk dikonsumsi.', 70, '2023-11-08 21:16:27', '2023-11-14 10:08:18'),
(16, 2, 1, 'Bolu Bakar Pisang', 'image/blp.jfif', '50000.00', 'Bolu Pisang Bakar dengan pisang yang sangat terasa di lidah, ayo buruan dibeli jangan sampai kehabisan!', 9, '2023-11-14 11:22:47', NULL),
(18, 1, 1, 'Bolu Kusut', 'image/gambar-profile.jpg', '45000.00', 'Bolu Kukus Pandan ini salah satu produk Best Seller, ayo cepat order hanya di Sarirasa!', 12, '2023-11-14 21:19:06', NULL),
(23, 3, 3, 'Bolu Kusut Pandan', 'image/bsl.jfif', '80000.00', 'Bolu Kukus Pandan ini salah satu produk Best Seller, ayo cepat order hanya di Sarirasa!', 43, '2023-11-16 19:10:00', '2023-11-16 19:10:33'),
(27, 1, 3, 'Bolu Kusut Strawberi', 'image/brownies-strawberi.jpg', '45000.00', 'Bolu Bakar coklat dengan tingkat kemanisan yang pas dan aman untuk dikonsumsi sehari-hari.', 32, '2023-11-18 11:35:00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_kue`
--
ALTER TABLE `jenis_kue`
  ADD PRIMARY KEY (`jenis_kue_id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`);

--
-- Indexes for table `varian_kue`
--
ALTER TABLE `varian_kue`
  ADD PRIMARY KEY (`varian_kue_id`),
  ADD KEY `jenis_kue_id` (`jenis_kue_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_kue`
--
ALTER TABLE `jenis_kue`
  MODIFY `jenis_kue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `varian_kue`
--
ALTER TABLE `varian_kue`
  MODIFY `varian_kue_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `varian_kue`
--
ALTER TABLE `varian_kue`
  ADD CONSTRAINT `varian_kue_ibfk_1` FOREIGN KEY (`jenis_kue_id`) REFERENCES `jenis_kue` (`jenis_kue_id`),
  ADD CONSTRAINT `varian_kue_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
