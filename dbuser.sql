-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Bulan Mei 2022 pada 16.41
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbuser`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `author`
--

CREATE TABLE `author` (
  `id_author` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul_komik` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `jadwal` varchar(30) NOT NULL,
  `ringkasan` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `author`
--

INSERT INTO `author` (`id_author`, `nama`, `judul_komik`, `genre`, `jadwal`, `ringkasan`, `created_at`, `updated_at`) VALUES
(1, 'S.M.S/King Productions', 'Who is Mr. President?', 'Drama', 'Minggu', 'halo ganteng', '2022-05-13 06:40:16', '2022-05-13 09:24:37'),
(2, 'Taejoon Park', 'Lookism', 'Aksi', 'Jumat', 'Berantem tidak menyelesaikan masalah...', '2022-05-13 06:40:16', '2022-05-14 09:10:24'),
(4, 'Nowone/Della', 'The Girl 180', 'Romance', 'Jumat', 'Tinggi, ganteng.. tapi masalahnya dia bukan seorang laki-laki!! Gadis yang ganteng ini pura-pura jadi cowok untuk menjadi model terbaik! Apakah dia bisa menyembunyikan rahasia tersebut selama-lamanya?', '2022-05-13 08:30:49', '2022-05-13 17:22:05'),
(6, 'Ralfsonti', 'Uga Uga', 'Komedi', 'Senin', 'Kamu mau aku gimana?', '2022-05-13 11:23:58', '2022-05-13 11:23:58'),
(7, 'Flutasiko', 'Gasolome', 'Thriller', 'Rabu', 'Wangi hujan di malam hari', '2022-05-13 11:24:58', '2022-05-13 11:24:58'),
(9, 'Ruslan', 'Wonderland', 'Romance', 'Jumat', 'Ruslan ganteng banget', '2022-05-13 13:46:56', '2022-05-13 13:46:56'),
(11, 'Ilang', 'Marry My Husband', 'Romance', 'Sabtu', 'Menikahlah dengan suami ku, aku tidak butuh suami seperti dia', '2022-05-14 05:30:38', '2022-05-14 05:30:38'),
(12, 'Harem', 'Dunia Isekai', 'Fantasi', 'Sabtu', 'Bagaimana rsanya masuk ke dunia isekai. Bukannya senang, he malah...', '2022-05-14 05:32:27', '2022-05-14 05:32:27'),
(13, 'Rishine/Rise', 'Number', 'Drama', 'Senin', 'Ada apa dengan angka-angka itu...', '2022-05-14 05:33:51', '2022-05-14 05:33:51'),
(14, 'Wheein', 'Us', 'Horor', 'Rabu', 'Kita bisa apa??', '2022-05-14 05:34:39', '2022-05-14 05:34:39'),
(15, 'Sorran', 'Flawless', 'Romance', 'Sabtu', 'Kesempurnaan hanyalah milik yang kuasa', '2022-05-14 09:09:34', '2022-05-14 09:09:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2022-05-12-141952', 'App\\Database\\Migrations\\Users', 'default', 'App', 1652367142, 1),
(2, '2022-05-13-072806', 'App\\Database\\Migrations\\Author', 'default', 'App', 1652428425, 2),
(3, '2022-05-13-085607', 'App\\Database\\Migrations\\Author', 'default', 'App', 1652432299, 3),
(4, '2022-05-13-092201', 'App\\Database\\Migrations\\Author', 'default', 'App', 1652433943, 4),
(5, '2022-05-13-093104', 'App\\Database\\Migrations\\Author', 'default', 'App', 1652434404, 5),
(6, '2022-05-13-104930', 'App\\Database\\Migrations\\Author', 'default', 'App', 1652439100, 6),
(7, '2022-05-13-113628', 'App\\Database\\Migrations\\Author', 'default', 'App', 1652441899, 7),
(8, '2022-05-13-185631', 'App\\Database\\Migrations\\Webnovel', 'default', 'App', 1652468569, 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `created_at`, `updated_at`) VALUES
('gulaa', '$2y$10$roym3EG3HOflflwJbWtxIe33/RLYWhjJAMJ7k.P4b1csqt/uYqMBq', 'Gulaku', '2022-05-13 13:45:13', '2022-05-13 13:45:13'),
('Rama18', '$2y$10$je5mpNT4xIfLzxCVrnrXO.y6vvWNwOosPhPEZp.juWgOIkMbQlHkq', 'Rama Firmansyah', '2022-05-12 11:14:01', '2022-05-12 11:14:01'),
('sugaris', '$2y$10$74X/N1Qmi06QXIaTxkINBOZYRcsd28UwRWpDgiYhNNs51vq3.nZSm', 'Salwa Tuzzahrow', '2022-05-14 09:06:36', '2022-05-14 09:06:36'),
('sugarmanis', '$2y$10$vPS3Xf89uqBrRJ0.cVCEXeJ1ds1lW6iEuuLnS.4Ek/rB13ttD10be', 'Sugar Less', '2022-05-13 16:59:21', '2022-05-13 16:59:21'),
('sugarrr', '$2y$10$aIsZqyH9N4JCgEe85uuCoOWy1vtB2gmn6.wNtiyIQc9alWc88GRtq', 'Sugar Manis', '2022-05-13 13:40:07', '2022-05-13 13:40:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `webnovel`
--

CREATE TABLE `webnovel` (
  `id_webnovel` int(11) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `judul_komik` varchar(100) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `jadwal` varchar(30) NOT NULL,
  `ringkasan` varchar(500) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `webnovel`
--

INSERT INTO `webnovel` (`id_webnovel`, `nama`, `judul_komik`, `genre`, `jadwal`, `ringkasan`, `created_at`, `updated_at`) VALUES
(1, 'Fadil', 'Kreator Author', 'Komedi', 'Minggu', 'Bagaimana ya keluh kesah suka duka jadi kretor hihi..', '2022-05-13 14:19:52', '2022-05-14 05:54:16'),
(2, 'Solar', 'Silermoon Habis Tenaga', 'Aksi', 'Selasa', 'Menjelajahi luar angkasa butuh tenaga boss..', '2022-05-13 14:19:52', '2022-05-14 09:13:54'),
(7, 'Subin', 'What I Say', 'Komedi', 'Senin', 'Ku bilang apa jangan seperti itu!', '2022-05-13 15:53:56', '2022-05-13 15:53:56'),
(8, 'Moonbyul', 'Cheese In The Trap', 'Romance', 'Selasa', 'Awasss jangan sampai terperangkap!!', '2022-05-13 15:55:10', '2022-05-13 15:55:10'),
(9, 'CikiCiki', 'Abracadabra!', 'Fantasi', 'Jumat', 'Mau aku sulap jadi apa, tapi jangan minta banyak banyak!!', '2022-05-14 05:51:04', '2022-05-14 05:51:04'),
(10, 'Laura', 'Looak At Me', 'Horor', 'Minggu', 'Jangan tatap aku terlalu lama!!', '2022-05-14 09:13:01', '2022-05-14 09:13:01');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id_author`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `webnovel`
--
ALTER TABLE `webnovel`
  ADD PRIMARY KEY (`id_webnovel`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `author`
--
ALTER TABLE `author`
  MODIFY `id_author` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `webnovel`
--
ALTER TABLE `webnovel`
  MODIFY `id_webnovel` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
