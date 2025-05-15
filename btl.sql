-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2024 at 06:03 AM
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
-- Database: `btl`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `san_pham` varchar(255) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `id_user`, `san_pham`, `so_luong`, `anh`) VALUES
(1, 7, 'lúa', 10000000, 'anh/images.jpg'),
(2, 7, 'gạo', 200000000, 'anh/images.jpg'),
(3, 7, 'lúa', 10000000, 'anh/2.jpg'),
(4, 2, 'gà', 10101010, 'anh/images.jpg'),
(5, 2, 'gà', 10101010, 'anh/images.jpg'),
(6, 2, 'gà', 10101010, 'anh/images.jpg'),
(7, 2, 'lúa', 10000000, ''),
(8, 2, 'lúa', 10000000, ''),
(9, 2, 'gà', 10101010, ''),
(10, 2, 'gà', 10101010, 'anh/images.jpg'),
(11, 2, 'lúa', 10000000, 'anh/4.jpg'),
(12, 2, 'gà', 10101010, 'anh/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `san_pham` varchar(255) NOT NULL,
  `gia` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `san_pham`, `gia`, `anh`) VALUES
(4, 'lúa', 10000000, 'anh/4.jpg'),
(6, 'gạo', 200000000, 'anh/4.jpg'),
(8, 'gà', 10101010, 'anh/images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `quyen`
--

CREATE TABLE `quyen` (
  `id` int(11) NOT NULL,
  `ten_quyen` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quyen`
--

INSERT INTO `quyen` (`id`, `ten_quyen`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `ho_va_ten` varchar(50) NOT NULL,
  `ten_dang_nhap` varchar(20) NOT NULL,
  `mat_khau` varchar(20) NOT NULL,
  `quyen_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `ho_va_ten`, `ten_dang_nhap`, `mat_khau`, `quyen_id`) VALUES
(1, 'Đỗ Phí Quí', 'pickleball', '123', 1),
(2, 'Trịnh Văn Cường', 'cuong', '123', 1),
(3, 'phan van ky', 'ky', '123', 1),
(4, 'le bao long', 'long', '123', 1),
(5, 'cường', 'cuong', '123', 1),
(6, 'admin', 'admin', '123', 2),
(7, 'shiba', 'shiba', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quyen`
--
ALTER TABLE `quyen`
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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `quyen`
--
ALTER TABLE `quyen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
