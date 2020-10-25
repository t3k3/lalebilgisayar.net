-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 19, 2020 at 06:55 PM
-- Server version: 10.3.25-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lalebilgisaya_lale`
--

-- --------------------------------------------------------

--
-- Table structure for table `gorsel`
--

CREATE TABLE `gorsel` (
  `id` int(11) NOT NULL,
  `urun_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `path` varchar(250) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Dumping data for table `gorsel`
--

INSERT INTO `gorsel` (`id`, `urun_id`, `name`, `path`) VALUES
(77, 35, '8888010145842.jpg', 'http://www.lalebilgisayar.net/uploads/8888010145842.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `kategori_ust_id` int(11) NOT NULL,
  `kategori_name` varchar(100) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `kategori_ust_id`, `kategori_name`) VALUES
(1, 0, 'Bilgisayar'),
(2, 0, 'Donanım'),
(3, 0, 'Tablet'),
(4, 1, 'Notebook'),
(5, 1, 'Masaustu'),
(6, 1, 'Server'),
(7, 1, 'Netbook'),
(8, 2, 'İşlemci'),
(9, 2, 'Anakart'),
(10, 2, 'Ram Bellek'),
(11, 2, 'Ekran Kartı'),
(12, 2, 'Hard Disk'),
(13, 2, 'SSD Disk'),
(14, 2, 'Monitör');

-- --------------------------------------------------------

--
-- Table structure for table `urunler`
--

CREATE TABLE `urunler` (
  `id` int(11) NOT NULL,
  `urun_kodu` varchar(100) COLLATE utf32_turkish_ci NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `urun_name` varchar(500) COLLATE utf32_turkish_ci NOT NULL,
  `urun_marka` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `urun_model` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `urun_detay` varchar(1000) COLLATE utf32_turkish_ci NOT NULL,
  `urun_etiketler` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `urun_fiyat` int(11) NOT NULL,
  `urun_isyeni` tinyint(1) NOT NULL,
  `urun_isaktif` tinyint(1) NOT NULL DEFAULT 1,
  `urun_stok` int(11) NOT NULL,
  `urun_hit` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Dumping data for table `urunler`
--

INSERT INTO `urunler` (`id`, `urun_kodu`, `kategori_id`, `urun_name`, `urun_marka`, `urun_model`, `urun_detay`, `urun_etiketler`, `urun_fiyat`, `urun_isyeni`, `urun_isaktif`, `urun_stok`, `urun_hit`, `created_at`) VALUES
(35, '1515', 4, 'SAMSUNG NP300', 'SAMSUNG', 'NP300', '10/100 Ethernet	Var\r\nBellek Yuvası	2\r\nBluetooth Özelliği	Var\r\nBoyutlar	367.9 x 243 x 29\r\nCihaz Ağırlığı	2 - 4 kg\r\nEkran Kartı Hafızası	1 GB\r\nEkran Kartı Tipi	Harici Ekran Kartı\r\nEkran Kartı	Nvidia GeForce GT620M\r\neMMC Kapasitesi	Yok\r\nHarddisk Kapasitesi	500 GB\r\nHDD Hızı	5400 RPM\r\nHDMI	Var\r\nİşlemci Cache	3 MB L3 Cache\r\nİşlemci Hızı	2,5 GHz\r\nİşlemci Nesli	3.Nesil\r\nİşlemci Tipi	Intel Core i5\r\nİşlemci	3210M\r\nİşletim Sistemi	Windows 7 Home Basic\r\nKart Okuyucu	Var\r\nMax Ekran Çözünürlüğü	1366 x 768\r\nOptik Sürücü	DVD Dual Yazıcı\r\nPaket İçeriği	Notebook\r\nParmak İzi Okuyucu	Yok\r\nPil	6 Hücreli\r\nRam (Sistem Belleği)	6 GB\r\nRam Tipi	DDR3\r\nSSD Kapasitesi	Yok\r\nÜrün Modeli	Notebook\r\nWebcam	Var', 'i5,intel', 1500, 0, 1, 1, 1, '2020-03-09 18:47:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `password` varchar(250) COLLATE utf32_turkish_ci NOT NULL,
  `yetki` int(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `yetki`) VALUES
(1, 'admin', '352e43e1ffec358b4e4b616e1370abfc1c5cc07cdf48fe232c9a3727ca605eb2', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gorsel`
--
ALTER TABLE `gorsel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkgorsel_urun` (`urun_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `urunler`
--
ALTER TABLE `urunler`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fkurun_kategori` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gorsel`
--
ALTER TABLE `gorsel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `urunler`
--
ALTER TABLE `urunler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gorsel`
--
ALTER TABLE `gorsel`
  ADD CONSTRAINT `fkgorsel_urun` FOREIGN KEY (`urun_id`) REFERENCES `urunler` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `urunler`
--
ALTER TABLE `urunler`
  ADD CONSTRAINT `fkurun_kategori` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
