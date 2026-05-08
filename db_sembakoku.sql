-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2026 at 04:49 AM
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
-- Database: `db_sembakoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `kategori` varchar(50) NOT NULL DEFAULT 'Sembako',
  `gambar` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_barang`, `harga`, `deskripsi`, `kategori`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Beras Pulen', 14000, 'Beras Pulen dan Lezat \r\n(Harga Tertera perliter)', 'Beras', '1777560429_ae3d2cbb838dfdb7892a.jpg', '2026-04-28 17:47:11', '2026-05-04 00:40:11'),
(4, 'Gula Batu 500 Gram', 15000, 'Gula Batu sedap untuk membuat teh ', 'Gula', '1777827229_beb55bdd29f57cc93609.jpg', '2026-05-03 16:53:49', '2026-05-03 16:53:49'),
(5, 'Beras Petruk', 55000, 'Beras Petruk Kemasan 5Kg', 'Beras', '1777855445_6e5061a87b43ff6bb563.jpg', '2026-05-04 00:44:05', '2026-05-04 00:44:05'),
(6, 'Beras Ramos', 112000, 'Beras Ramos Kemasan 10kg  Kualitas Premium ', 'Beras', '1777855493_45de4c43b3ad05420aef.jpg', '2026-05-04 00:44:53', '2026-05-04 00:44:53'),
(7, 'Gula Pasir', 11000, 'Gula dari Tebu Murni', 'Gula', '1777855615_70b91a63dec6482ac2ba.jpeg', '2026-05-04 00:46:55', '2026-05-04 02:42:17'),
(8, 'Gula Rose Brand', 9000, 'Gula Rose Brand', 'Gula', '1777855667_1f26a32a5ff8b2be4ac2.jpg', '2026-05-04 00:47:47', '2026-05-04 00:47:47'),
(9, 'Indomie Goreng', 4500, 'Indomie Goreng Jumbo', 'Mie Instan', '1777855806_1362021cdd44a89edd84.jpg', '2026-05-04 00:50:06', '2026-05-04 00:50:06'),
(10, 'Indomie Soto', 2500, 'Indomie Soto', 'Mie Instan', '1777855836_3207e54f494bebc9cc9d.jpg', '2026-05-04 00:50:36', '2026-05-04 00:50:36'),
(11, 'Mie Rendang', 3000, 'Indomie Rendang', 'Mie Instan', '1777855867_86b019ee4a07f59d0172.jpg', '2026-05-04 00:51:07', '2026-05-04 00:51:07'),
(12, 'Indomie Bawang', 2500, 'Indomie Ayam Bawang', 'Mie Instan', '1777856267_eb605b782749b88d804d.jpg', '2026-05-04 00:57:47', '2026-05-04 00:57:47'),
(14, 'Teh Pucuk', 3500, 'Teh Pucuk Segar', 'Minuman', '1777862310_03fcef365d5aed2cdf3c.jpg', '2026-05-04 02:38:30', '2026-05-04 02:38:30'),
(15, 'Frutea', 4499, 'Frutea', 'Minuman', '1777862337_8adff70663ad12358909.jpg', '2026-05-04 02:38:57', '2026-05-04 02:38:57'),
(16, 'Sajiku', 2000, 'Aneka Ragam Bumbu Instan', 'Bumbu', '1777862395_387942e523cf6edf71ae.jpg', '2026-05-04 02:39:55', '2026-05-04 02:39:55'),
(17, 'Bumbu Racik', 2000, 'Aneka Ragam Bumbu Racik', 'Bumbu', '1777862424_0a5043a4a0810a0181e5.jpg', '2026-05-04 02:40:24', '2026-05-04 02:40:24'),
(18, 'Bomboe', 3500, 'Bumbu Masak Instan', 'Bumbu', '1777862462_0a22278c499e84c9f398.jpg', '2026-05-04 02:41:02', '2026-05-04 02:41:02'),
(19, 'Ultra Milk', 6000, 'Susu Ultra', 'Minuman', '1777862497_61f0148576982e0ea7a6.jpg', '2026-05-04 02:41:37', '2026-05-04 02:41:37'),
(20, 'Minyak Bimoli', 47000, 'Minyak 1 Liter', 'Minyak', '1777862727_798478634ba4ae8c576d.jpg', '2026-05-04 02:45:27', '2026-05-04 02:45:27'),
(21, 'Minyak Tropical', 55000, 'Minyak Goreng Berkualitas', 'Minyak', '1777862754_91d6133410d96a96c41f.png', '2026-05-04 02:45:54', '2026-05-04 02:45:54'),
(22, 'Magicom Murah', 50000, 'Magicom Murah Philips', 'Kebutuhan Rumah', '1777862828_68f1fd7d9c07676d382f.jpeg', '2026-05-04 02:47:08', '2026-05-04 02:47:08'),
(23, 'Setrika Philips', 75000, 'Setrika Rumah Hemat Listrik!!', 'Kebutuhan Rumah', '1777862887_afb7906208e03a7c87f8.jpg', '2026-05-04 02:48:07', '2026-05-04 02:48:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
