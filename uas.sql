-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Agu 2019 pada 16.13
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_05_01_120245_create_t_kemeja_panjang', 1),
(2, '2019_05_01_120637_create_t_buyer', 2),
(3, '2019_08_08_194453_create_table_user', 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_buyer`
--

CREATE TABLE `t_buyer` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_telp_pelanggan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_pos_buyer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_buyer`
--

INSERT INTO `t_buyer` (`id`, `nama`, `alamat_pelanggan`, `no_telp_pelanggan`, `kode_pos_buyer`, `created_at`, `updated_at`) VALUES
(1, 'Bambang', 'Jl. Haji Kurdi Baru No.1', '081214424921', '40243', '2019-05-01 13:00:07', '2019-05-01 13:00:07'),
(2, 'maman suraman', 'Jl. Soekarno Hatta No.159', '081214523491', '40123', '2019-05-01 13:00:57', '2019-05-01 13:00:57'),
(12, 'Permata Puri', 'Jl. Pagarsih No.133', '082134548962', '30452', NULL, NULL),
(20, 'rere', 'Jl. von', '093974743883', '42632', '2019-08-09 05:33:05', '2019-08-09 05:33:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kemeja_panjang`
--

CREATE TABLE `t_kemeja_panjang` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kemeja_panjang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_produk` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_kemeja_panjang`
--

INSERT INTO `t_kemeja_panjang` (`id`, `nama_kemeja_panjang`, `model_produk`, `color`, `ukuran`, `stock`, `created_at`, `updated_at`) VALUES
(1, 'Ploti', 'Jeans', 'biru', 'L', '5', '2019-05-01 12:26:17', '2019-05-01 12:26:17'),
(2, 'ijun', 'Rsch', 'biru', 'M', '10', '2019-05-01 12:27:19', '2019-05-01 12:27:19'),
(4, 'flanel', 'bloods', 'ungu', 'S', '20', NULL, NULL),
(7, 'Vans', 'Bomber', 'hitam', 'XL', '100', NULL, NULL),
(8, 'Denim', 'Levis', 'Merah', 'L', '50', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE `t_login` (
  `id_login` int(10) UNSIGNED NOT NULL,
  `nama_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_login`
--

INSERT INTO `t_login` (`id_login`, `nama_user`, `username`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', '$2y$10$QQq/bPJLNlHFRWhnu8F0K.MF6lW7rz0pwOF3n9jEggCW8NFW9nbQW', 'Msx10qcwZM8Ulxtcz7EghATCQZM7fPJbS6Cvcv7TdBVGIWSbOuF8A3s2TJcx', '2019-08-08 13:55:13', '2019-08-08 13:55:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_buyer`
--
ALTER TABLE `t_buyer`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_kemeja_panjang`
--
ALTER TABLE `t_kemeja_panjang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_login`
--
ALTER TABLE `t_login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `t_buyer`
--
ALTER TABLE `t_buyer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `t_kemeja_panjang`
--
ALTER TABLE `t_kemeja_panjang`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `t_login`
--
ALTER TABLE `t_login`
  MODIFY `id_login` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
