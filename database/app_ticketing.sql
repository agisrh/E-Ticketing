-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: Jul 27, 2017 at 08:00 AM
-- Server version: 5.6.35
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_ticketing`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(5) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `deskripsi_kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`) VALUES
(1, 'Bioskop', 'Tiket Bioskop                                                                                                                                                                                            '),
(2, 'Pesawat', 'Tiket Peswat                                                '),
(3, 'Sepak Bola', 'Sepak Bola'),
(4, 'Wisata', 'Wisata');

-- --------------------------------------------------------

--
-- Table structure for table `log_aktifitas`
--

CREATE TABLE `log_aktifitas` (
  `id_log` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `aktifitas` text NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_aktifitas`
--

INSERT INTO `log_aktifitas` (`id_log`, `id_user`, `aktifitas`, `tanggal`, `waktu`) VALUES
(84, 1, 'Melengkapi Profil', '2017-06-14', '21:24:28'),
(85, 1, 'Melengkapi Profil', '2017-06-14', '21:30:14'),
(86, 1, 'Mengubah biodata diri sendiri', '2017-06-14', '21:31:26'),
(87, 1, 'Mengubah biodata diri sendiri', '2017-06-14', '21:31:39'),
(88, 1, 'Mengubah foto Profil', '2017-06-16', '22:22:28'),
(89, 1, 'Mengubah foto Profil', '2017-06-16', '22:23:59'),
(90, 1, 'Mengubah foto Profil', '2017-06-16', '22:25:12'),
(91, 1, 'Mengubah foto Profil', '2017-06-16', '22:26:16'),
(92, 1, 'Menambahkan user baru', '2017-06-16', '23:15:45'),
(93, 1, 'Menghapus salah satu user', '2017-06-16', '23:19:02'),
(94, 1, 'Mengubah data user', '2017-06-16', '23:35:14'),
(95, 1, 'Mengubah data user', '2017-06-16', '23:35:34'),
(96, 1, 'Menambahkan user baru', '2017-06-18', '14:55:05'),
(97, 1, 'Menghapus salah satu user', '2017-06-18', '15:01:04'),
(98, 1, 'Menambahkan user baru', '2017-06-18', '15:02:00'),
(99, 1, 'Menghapus salah satu user', '2017-06-18', '15:06:25'),
(100, 1, 'Menambahkan user baru', '2017-06-18', '15:06:43'),
(101, 1, 'Menghapus salah satu user', '2017-06-18', '15:07:48'),
(102, 1, 'Menambahkan user baru', '2017-06-18', '15:08:05'),
(103, 1, 'Menambahkan kategori baru', '2017-07-04', '21:49:46'),
(104, 1, 'Mengubah data kategori', '2017-07-04', '21:59:33'),
(105, 1, 'Mengubah data kategori', '2017-07-04', '22:01:31'),
(106, 1, 'Mengubah data kategori', '2017-07-04', '22:01:41'),
(107, 1, 'Mengubah data kategori', '2017-07-04', '22:02:15'),
(108, 1, 'Mengubah data kategori', '2017-07-08', '19:55:17'),
(109, 1, 'Mengubah data kategori', '2017-07-08', '20:06:02'),
(110, 1, 'Menambahkan tiket baru', '2017-07-08', '20:21:03'),
(111, 1, 'Menambahkan tiket baru', '2017-07-08', '20:25:32'),
(112, 1, 'Menghapus data tiket', '2017-07-08', '20:27:05'),
(113, 1, 'Menambahkan tiket baru', '2017-07-08', '20:27:51'),
(114, 1, 'Menambahkan tiket baru', '2017-07-08', '20:29:13'),
(115, 1, 'Menambahkan tiket baru', '2017-07-08', '20:39:36'),
(116, 1, 'Menambahkan tiket baru', '2017-07-08', '23:54:54'),
(117, 1, 'Menambahkan tiket baru', '2017-07-08', '23:56:23'),
(118, 1, 'Menambahkan tiket baru', '2017-07-08', '23:56:59'),
(119, 1, 'Menambahkan tiket baru', '2017-07-08', '23:57:36'),
(120, 1, 'Menambahkan tiket baru', '2017-07-08', '23:59:10'),
(121, 1, 'Menambahkan tiket baru', '2017-07-09', '00:00:20'),
(122, 1, 'Menambahkan loket baru', '2017-07-09', '00:19:23'),
(123, 1, 'Mengubah loket tiket', '2017-07-09', '00:20:58'),
(124, 1, 'Menghapus loket tiket', '2017-07-09', '00:21:04'),
(125, 1, 'Menambahkan loket baru', '2017-07-09', '00:21:22'),
(126, 1, 'Melakuan transaksi', '2017-07-09', '01:05:45'),
(127, 1, 'Melakuan transaksi', '2017-07-09', '23:02:09'),
(128, 1, 'Melakuan transaksi', '2017-07-09', '23:06:50'),
(129, 1, 'Melakuan transaksi', '2017-07-10', '11:51:00'),
(130, 1, 'Melakuan transaksi', '2017-07-10', '12:11:35'),
(131, 20, 'Melakuan transaksi', '2017-07-10', '22:19:50'),
(132, 1, 'Menambahkan kategori baru', '2017-07-10', '22:27:40'),
(133, 1, 'Menambahkan kategori baru', '2017-07-10', '22:27:59'),
(134, 1, 'Menambahkan loket baru', '2017-07-10', '22:28:27'),
(135, 1, 'Menambahkan loket baru', '2017-07-10', '22:28:54'),
(136, 1, 'Menambahkan loket baru', '2017-07-10', '22:29:16'),
(137, 1, 'Mengubah data tiket', '2017-07-10', '22:30:49'),
(138, 1, 'Mengubah data tiket', '2017-07-10', '22:32:01'),
(139, 2, 'Melakuan transaksi', '2017-07-10', '22:33:41'),
(140, 2, 'Melakuan transaksi', '2017-07-10', '22:34:04'),
(141, 2, 'Melakuan transaksi', '2017-07-10', '22:34:57'),
(142, 1, 'Menghapus salah satu user', '2017-07-22', '23:49:53'),
(143, 1, 'Menambahkan user baru', '2017-07-22', '23:50:38'),
(144, 1, 'Mengubah data user', '2017-07-22', '23:57:20'),
(145, 21, 'Melakuan transaksi', '2017-07-23', '00:00:16'),
(146, 1, 'Menghapus loket tiket', '2017-07-23', '11:40:54'),
(147, 1, 'Mengubah data user', '2017-07-23', '11:41:33'),
(148, 1, 'Mengubah data user', '2017-07-23', '11:41:46'),
(149, 1, 'Menambahkan user baru', '2017-07-23', '11:42:42'),
(150, 1, 'Melakuan transaksi', '2017-07-27', '21:37:42'),
(151, 1, 'Melakuan transaksi', '2017-07-27', '21:42:15');

-- --------------------------------------------------------

--
-- Table structure for table `loket`
--

CREATE TABLE `loket` (
  `id_loket` int(5) NOT NULL,
  `nama_loket` varchar(100) NOT NULL,
  `posisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loket`
--

INSERT INTO `loket` (`id_loket`, `nama_loket`, `posisi`) VALUES
(2, 'Loket A', 'Gerbang Pintu A'),
(3, 'Loket B', 'Gerbang Pintu B'),
(4, 'Loket C', 'Gerbang Pintu C');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `kode_tiket` varchar(50) NOT NULL,
  `id_kategori` int(5) NOT NULL,
  `nama_tiket` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `stok` int(10) NOT NULL,
  `harga` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`kode_tiket`, `id_kategori`, `nama_tiket`, `deskripsi`, `stok`, `harga`) VALUES
('0001', 1, 'Spiderman Home Coming', 'Deskripsi', 184, '40000'),
('0002', 2, 'Travel', 'Desc', 8, '400000'),
('0003', 4, 'Outdoor', 'Tiket Outdoor', 26, '50000'),
('0004', 4, 'Renang', 'Tiket Renang', 65, '20000');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `no_trans` varchar(50) NOT NULL,
  `id_user` int(10) NOT NULL,
  `kode_tiket` varchar(50) NOT NULL,
  `id_loket` int(5) NOT NULL,
  `jumlah` int(10) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `total` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`no_trans`, `id_user`, `kode_tiket`, `id_loket`, `jumlah`, `tanggal`, `jam`, `total`) VALUES
('20170709010513', 1, '0001', 2, 2, '2017-07-09', '01:05:45', '80000'),
('20170709225658', 1, '0002', 2, 5, '2017-06-09', '23:02:09', '2000000'),
('20170709230608', 1, '0001', 2, 10, '2017-05-09', '23:06:50', '400000'),
('20170710115046', 1, '0001', 2, 4, '2017-04-10', '11:51:00', '160000'),
('20170710121125', 1, '0002', 2, 7, '2017-07-10', '12:11:35', '2800000'),
('20170710221935', 2, '0001', 2, 2, '2017-07-10', '22:19:50', '80000'),
('20170710223320', 2, '0004', 4, 3, '2017-07-10', '22:33:41', '60000'),
('20170710223349', 2, '0003', 5, 1, '2017-07-10', '22:34:04', '50000'),
('20170710223443', 2, '0002', 3, 4, '2017-07-10', '22:34:57', '1600000'),
('20170723000007', 21, '0003', 3, 3, '2017-07-23', '00:00:16', '150000'),
('20170727213558', 1, '0004', 2, 2, '2017-07-27', '21:37:41', '40000'),
('20170727214205', 1, '0002', 2, 1, '2017-07-27', '21:42:15', '400000');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `telpon` varchar(15) COLLATE latin1_general_ci NOT NULL,
  `foto` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL DEFAULT '2',
  `title` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `blokir` enum('Y','N') COLLATE latin1_general_ci NOT NULL DEFAULT 'N',
  `id_session` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `id_loket` int(5) NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locktype` varchar(1) COLLATE latin1_general_ci NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `email`, `telpon`, `foto`, `level`, `title`, `blokir`, `id_session`, `id_loket`, `last_login`, `locktype`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@detik.com', '08123456789', 'picture.jpg', '1', 'Administrator', 'N', 'u0l518f1bplh6mqa4h6orflop4', 2, '2017-07-27 21:02:03', '0'),
(21, 'staff', '1253208465b1efa876f982d8a9e73eef', 'Staff 1', 'staff@tiket.com', '0811111111111', '', '2', 'Staff', 'N', 'vr8doevdprfn1r3d1hibrfmjh1', 3, '2017-07-22 23:59:58', '0'),
(22, 'staff2', '8bc01711b8163ec3f2aa0688d12cdf3b', 'Staff 2', 'staff2@tiket.com', '082222222222222', '', '2', 'Staff', 'N', '', 4, NULL, '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  ADD PRIMARY KEY (`id_log`);

--
-- Indexes for table `loket`
--
ALTER TABLE `loket`
  ADD PRIMARY KEY (`id_loket`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`kode_tiket`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`no_trans`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `log_aktifitas`
--
ALTER TABLE `log_aktifitas`
  MODIFY `id_log` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `loket`
--
ALTER TABLE `loket`
  MODIFY `id_loket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
