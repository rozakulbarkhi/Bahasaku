-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 05:41 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bahasaku`
--

-- --------------------------------------------------------

--
-- Table structure for table `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kelas` varchar(256) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi`
--

INSERT INTO `materi` (`id`, `kelas`, `judul`, `file`) VALUES
(121, '7', 'Teks Biografi', 'BAB_1_MATERI_BAHASA_INDONESIA_KELAS_71.pdf'),
(122, '7', 'Mendeskripsikan Teks', 'BAB_2_BELAJAR_MENDESKRIPSIKAN1.pdf'),
(123, '7', 'Memahami dan Mencipta Cerita Fantasi', 'BAB_3_BAHASA_INDONESIA_KELAS_71.pdf'),
(124, '8', 'Laporan', '8_BAB_11.pdf'),
(125, '8', 'Makna Kata Ulang', '8_BAB_21.pdf'),
(126, '9', 'BAB 1', '9_BAB_13.pdf'),
(127, '9', 'BAB 2', '9_BAB_22.pdf'),
(128, '10', 'BAB 1', 'BAB_11.pdf'),
(129, '10', 'BAB 2', 'BAB_21.pdf'),
(130, '10', 'BAB 3', 'BAB_31.pdf'),
(131, '10', 'BAB 4', 'BAB_41.pdf'),
(132, '11', 'BAB 1', '11_BAB_11.pdf'),
(133, '11', 'BAB 2', '11_BAB_21.pdf'),
(134, '11', 'BAB 3', '11_BAB_31.pdf'),
(135, '12', 'BAB 1', '12_BAB_11.pdf'),
(136, '12', 'BAB 2', '12_BAB_2.pdf'),
(137, '9', 'BAB 3', '9_BAB_31.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Rozak', 'rozakulbarkhirb@gmail.com', 'rozak1.png', '$2y$10$RAdLXne14kdZo/eqWpxaZuxth09evaxuU/0HlVv.N7L5krnJrDcAC', 1, 1, 1572312795),
(8, 'Wahyu Sujanto', 'wahyu@gmail.com', 'naruto1.png', '$2y$10$XPsHFsbpgSPuP2CcbINqvueKnX0dyLjrXAnX6Z73DnPmQpgiEbg4C', 2, 1, 1572312795);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `kelas` varchar(256) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `kode` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`id`, `kelas`, `judul`, `kode`) VALUES
(16, '2', 'Mengeja Huruf', 'MJoQImGT5Dg'),
(20, '4', 'Membaca dan Menulis', '1kFu-VvL7Cc'),
(21, '5', 'Pemakaian Huruf Kapital', 'eaXEcwrEBKQ'),
(25, '1', 'Pengenalan Huruf', '1qhJqFk7wUc'),
(26, '3', 'Membaca Lima Huruf', 'nvQ-bLgoyPE'),
(27, '6', 'Membaca Paragraf', 'm9DGjdK2BO4'),
(28, '7', 'Materi Kelas 7', 'AIg8TCiAXIg'),
(29, '8', 'Makna Kata Ulang', 'hlMqHR3SZpM'),
(30, '9', 'Materi Kelas 9', 'PiMGMTVxwQE'),
(31, '10', 'Materi Kelas 10', '-wt_UcqQU0A'),
(32, '11', 'Materi Kelas 11', 'oPuPSnJn-nI'),
(33, '12', 'Materi Kelas 12', 'AVcceJzV5XM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
