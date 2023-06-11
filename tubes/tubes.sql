-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 04:45 PM
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
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$jXONpXr.WpkrLrKX0sOx1exUgKA1F2ovm2LE97okn8eTe9M0mMrzm'),
(2, 'umar21', 'umarfauzy91@gmail.com', '$2y$10$A/.BofNklawQdLaJujfG7uokZyM7Wq4GdS9/rgXdR4g6eoDu6GRoi');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Winter Fashion'),
(3, 'Spring Fashion'),
(12, 'Summer Fashion'),
(13, 'Autumn Fashion'),
(14, 'Dry Fashion'),
(15, 'Rainy Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id_product` int NOT NULL,
  `id_kategori` int NOT NULL,
  `judul_berita` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `gambar` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id_product`, `id_kategori`, `judul_berita`, `gambar`) VALUES
(12, 1, 'Oufit Casual Winter', '6485ef1b7c744.png'),
(13, 1, 'Oufit  Winter', '6485ef397f184.png'),
(14, 1, 'Oufit Casual Winter For Women', '6485ef4ee9f65.png'),
(15, 1, 'Outfit Winter In Paris', '6485ef6fc663e.png'),
(16, 1, 'NewZealand Oufit Winter', '6485f09841655.png'),
(17, 12, 'Oufit Casual Summer', '6485f248b72bf.png'),
(18, 12, 'Outfit Summer', '6485f254a50df.png'),
(19, 12, 'Oufit Casual Summer In City', '6485f264a79e0.png'),
(22, 12, 'Oufit Casual Summer Women', '6485f29b40b96.png'),
(23, 3, 'Oufit Spring', '6485f36863352.png'),
(24, 3, 'Outfit Casual Spring ', '6485f379b90a1.png'),
(25, 3, 'Oufit City Spring For Busines Women', '6485f38d572b3.png'),
(26, 3, 'Oufit Casual Spring For Women', '6485f39f74361.png'),
(28, 13, 'Oufit Casual Women Auntum', '6485f53b6ce59.png'),
(30, 13, 'Auntum Fashion Casual In City', '6485f56670453.png'),
(32, 13, 'Auntum Fashion Women', '6485f5a980da2.png'),
(35, 14, 'Only RainCoat Oufit', '6485f68b74bd4.png'),
(38, 15, 'Rainy Oufit For Women', '6485f771207e8.png'),
(40, 3, 'Oufit Cute Spring For Women', '6485f83518440.png'),
(41, 12, 'Oufit Summer In Paris', '6485f88d5b9c6.png'),
(42, 12, 'Oufit Summer For Boys', '6485f89ba0fcb.png'),
(43, 13, 'Auntum Fashion Casual Women ', '6485f903ca9dc.png'),
(44, 13, 'Auntum Fashion Cute In Women', '6485f920777b9.png'),
(45, 15, 'Oufit Rainy In City ', '6485f972cab5c.png'),
(46, 15, 'Oufit Casual Rainy', '6485f989c0ebe.png'),
(47, 15, 'Oufit Casual Cute Women', '6485f9a083daa.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
