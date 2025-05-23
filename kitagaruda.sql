-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2025 pada 09.03
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kitagaruda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `gambar` text NOT NULL,
  `tanggal` date NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `gambar`, `tanggal`, `username`) VALUES
(13, 'Timnas Putri Indonesia Juara Piala AFF 2024', 'Women\'s', '20250108163644.jpg', '2025-01-08', 'admin'),
(15, 'Shin Tae-yong Puji Performa Pemain Usai Kalahkan Myanmar', 'Men\'s', '20241212184943.png', '2024-12-12', 'admin'),
(16, 'Timnas Indonesia Menang 1-0 atas Myanmar di Pertandingan Pembuka AMEC 2024', 'Men\'s', '20241212185621.png', '2024-12-12', 'admin'),
(17, 'Victor Benjamin Siap Berikan yang Terbaik untuk Garuda', 'Men\'s', '20241212185736.png', '2024-12-12', 'admin'),
(18, 'Skuad Timnas Indonesia Tiba di Myanmar', 'Men\'s', '20241212185811.png', '2024-12-12', 'admin'),
(19, 'PSSI Gandeng Mitra Ke-25. Erick Thohir: Dorong Timnas Terus Jaga Trust', 'PSSI', '20241212185907.png', '2024-12-12', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `tanggal` datetime NOT NULL,
  `gambar` text NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gallery`
--

INSERT INTO `gallery` (`id`, `tanggal`, `gambar`, `username`) VALUES
(13, '2025-01-08 17:19:05', '20250108171905.jpg', 'admin'),
(14, '2025-01-08 17:20:01', '20250108172001.jpg', 'admin'),
(15, '2025-01-08 17:20:19', '20250108172019.jpg', 'admin'),
(16, '2025-01-08 17:55:00', '20250108175500.jpg', 'admin'),
(18, '2025-01-08 21:28:01', '20250108212801.jpg', 'admin'),
(19, '2025-01-08 21:28:16', '20250108212816.jpg', 'admin'),
(20, '2025-01-08 21:28:36', '20250108212836.jpg', 'admin'),
(21, '2025-01-08 21:28:51', '20250108212851.jpg', 'admin'),
(22, '2025-01-08 21:29:05', '20250108212905.jpg', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `foto`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'admin.jpg'),
(2, 'ryandita', 'b59c67bf196a4758191e42f76670ceba', 'ryandita.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
