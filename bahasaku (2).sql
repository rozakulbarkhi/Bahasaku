-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Des 2019 pada 09.28
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.1.33

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
-- Struktur dari tabel `materi`
--

CREATE TABLE `materi` (
  `id` int(11) NOT NULL,
  `kelas` varchar(256) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `file` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `materi`
--

INSERT INTO `materi` (`id`, `kelas`, `judul`, `file`) VALUES
(1, '10', 'BAB 1', 'BAB_1.pdf'),
(2, '10', 'BAB 2', 'BAB_2.pdf'),
(3, '10', 'BAB 3', 'BAB_3.pdf'),
(4, '10', 'BAB 4', 'BAB_4.pdf'),
(6, '11', 'BAB 1', '11_BAB_1.pdf'),
(7, '11', 'BAB 2', '11_BAB_2.pdf'),
(8, '11', 'BAB 3', '11_BAB_3.pdf'),
(9, '12', 'BAB 1', '12_BAB_1.pdf'),
(10, '12', 'BAB 2', '12_BAB_2.pdf'),
(11, '7', 'BAB 1', 'BAB_1_MATERI_BAHASA_INDONESIA_KELAS_7.pdf'),
(12, '7', 'BAB 2', 'BAB_2_BELAJAR_MENDESKRIPSIKAN.pdf'),
(13, '7', 'BAB 3', 'BAB_3_BAHASA_INDONESIA_KELAS_7.pdf'),
(14, '8', 'BAB 1', '8_BAB_1.pdf'),
(15, '8', 'BAB 2', '8_BAB_2.pdf'),
(16, '9', 'BAB 1', '9_BAB_1.pdf'),
(17, '9', 'BAB 2', '9_BAB_2.pdf'),
(18, '9', 'BAB 3', '9_BAB_3.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(7, 'Rozak', 'rozakulbarkhirb@gmail.com', 'rozak1.png', '$2y$10$RAdLXne14kdZo/eqWpxaZuxth09evaxuU/0HlVv.N7L5krnJrDcAC', 1, 1, 1572312795),
(8, 'Wahyu Sujanto', 'wahyu@gmail.com', 'naruto1.png', '$2y$10$XPsHFsbpgSPuP2CcbINqvueKnX0dyLjrXAnX6Z73DnPmQpgiEbg4C', 2, 1, 1572312795),
(10, 'Heri Susanto', 'heri@gmail.com', 'default.jpg', '$2y$10$SE8YKJAwZxIWuUytQEdQ2.yAg/YiakiIvMYYqjshceLqTZ/59ieS.', 2, 1, 1572312795),
(12, 'Hafsah Nur', 'mehafsahnur@gmail.com', 'default.jpg', '$2y$10$s.x57p.kl30vsKVDP6mvSOo/2TE.iieejf7yFvCH7NPtO2Z9qyiEa', 2, 1, 1574946069);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `judul` varchar(256) NOT NULL,
  `kelas` varchar(256) NOT NULL,
  `code` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `materi`
--
ALTER TABLE `materi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `materi`
--
ALTER TABLE `materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
