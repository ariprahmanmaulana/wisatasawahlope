-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Jan 2023 pada 08.16
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sawah_lope`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Informasi', 'informasi', NULL, NULL),
(3, 'Hiburan', 'hiburan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category_gazebos`
--

CREATE TABLE `category_gazebos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `category_gazebos`
--

INSERT INTO `category_gazebos` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Besar -1', NULL, NULL),
(2, 'Besar -2', NULL, NULL),
(3, 'Kecil -1', NULL, NULL),
(4, 'Kecil -2', NULL, NULL),
(5, 'Kecil -3', NULL, NULL),
(6, 'Kecil -4', NULL, NULL),
(7, 'Kecil -5', NULL, NULL),
(8, 'Kecil -6', NULL, NULL),
(9, 'Kecil -7', NULL, NULL),
(10, 'Kecil -8', NULL, NULL),
(11, 'Kecil -9', NULL, NULL),
(12, 'Kecil -10', NULL, NULL),
(13, 'Kecil -11', NULL, NULL),
(14, 'Kecil -12', NULL, NULL),
(15, 'Kecil -13', NULL, NULL),
(16, 'Kecil -14', NULL, NULL),
(17, 'Kecil -15', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `gazebos`
--

CREATE TABLE `gazebos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `category_gazebos_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `masuk` time NOT NULL,
  `keluar` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `gazebos`
--

INSERT INTO `gazebos` (`id`, `name`, `nohp`, `category_gazebos_id`, `tanggal`, `masuk`, `keluar`, `created_at`, `updated_at`) VALUES
(1, 'Pebi Pebriansah', '12312312', 1, '2023-01-30', '10:09:00', '12:01:00', '2023-01-29 16:02:34', '2023-01-29 16:02:34'),
(2, 'Pebi Pebriansah', '085723336281', 1, '2023-01-30', '10:09:00', '12:01:00', '2023-01-29 16:03:00', '2023-01-29 16:03:00'),
(3, 'Pebi Pebriansah', '085723336281', 1, '2023-01-30', '10:09:00', '12:01:00', '2023-01-29 16:04:29', '2023-01-29 16:04:29'),
(4, 'Pebi Pebriansah', 'asdasd', 1, '2023-01-30', '10:09:00', '12:01:00', '2023-01-29 16:13:02', '2023-01-29 16:13:02'),
(5, 'Pebi Pebriansah', 'asdasd', 1, '2023-01-30', '10:09:00', '12:01:00', '2023-01-29 16:13:25', '2023-01-29 16:13:25'),
(6, 'Pebi Pebriansah', 'asdasd', 1, '2023-01-30', '10:09:00', '12:01:00', '2023-01-29 16:18:25', '2023-01-29 16:18:25'),
(7, 'Pebi Pebriansah', 'adasdasd', 1, '2023-01-30', '12:39:00', '12:41:00', '2023-01-29 16:35:54', '2023-01-29 16:35:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `laporans`
--

CREATE TABLE `laporans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `pemasukan` varchar(255) NOT NULL,
  `pengeluaran` varchar(255) NOT NULL,
  `saldo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `laporans`
--

INSERT INTO `laporans` (`id`, `tanggal`, `pemasukan`, `pengeluaran`, `saldo`, `created_at`, `updated_at`) VALUES
(1, '2023-01-07', '12000000', '8000000', '4000000', '2023-01-06 22:56:29', '2023-01-06 22:56:29'),
(2, '2023-01-14', '20000000', '8000000', '16000000', '2023-01-06 22:58:18', '2023-01-06 22:58:18'),
(3, '2023-04-01', '5000000', '2000000', '3000000', '2023-01-29 23:33:00', '2023-01-29 23:33:00'),
(4, '2023-01-02', '3000000', '1000000', '2000000', '2023-01-29 23:33:57', '2023-01-29 23:33:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_15_023543_create_posts_table', 1),
(6, '2022_11_23_023039_create_categories_table', 1),
(7, '2022_12_07_051022_add_is_admin_to_users_table', 1),
(8, '2022_12_07_053236_create_laporans_table', 1),
(9, '2022_12_08_042452_create_gazebos_table', 1),
(10, '2022_12_08_045033_create_category_gazebos_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `excerpt` text NOT NULL,
  `body` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `image`, `excerpt`, `body`, `published_at`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'Sawah Lope', 'sawah-lope-', 'post-images/fU0DFlExUWG0UXqbFlIedOUif3BuPp04k4WT7yRh.jpg', 'Tempat wisata yang sangat recomended dengan menyaksikan keindahan gunung ciremai yang lebih dekat. Dan fasilitas yang lumayan untuk anak-anak dan keluarga.&nbsp;&nbsp;', '<div>Tempat wisata yang sangat recomended dengan menyaksikan keindahan gunung ciremai yang lebih dekat. Dan fasilitas yang lumayan untuk anak-anak dan keluarga.&nbsp;&nbsp;</div>', NULL, '2023-01-06 21:31:07', '2023-01-06 21:31:07'),
(2, 2, 2, 'gazebo di sawah lope', 'gazebo-di-sawah-lope', 'post-images/HJePxJVTeWwzLRmmM7pSUlzPxaoWfWkmGAuRrDP8.jpg', 'Tempat yang nyaman untuk berlibur di akhir pekan, tempatnya lumayan bersih dan tertata rapih, tersedia juga beberapa permainan anak-anak dan juga untuk gazebonya kita di fasilitasi karaoke dengan harg...', '<div>Tempat yang nyaman untuk berlibur di akhir pekan, tempatnya lumayan bersih dan tertata rapih, tersedia juga beberapa permainan anak-anak dan juga untuk gazebonya kita di fasilitasi karaoke dengan harga yang cukup terjangkau.......<br>- tiket murah<br>- toilet ada<br>- mushola ada<br>- bahkan ada restaurant<br>tempat parkir juga lumayan luas</div>', NULL, '2023-01-06 21:39:52', '2023-01-06 21:39:52'),
(3, 2, 3, 'sawah lope', 'sawah-lope', 'post-images/414dwNzWguGtW0qKVD2QBDfFPCroFlBJL7duDGcU.jpg', 'Tempat yang bagus untuk menenangkan fikiran,karena tempat nya cukup nyaman dan sejuk yang dimana pengunjung merasakan suasana yang sejuk yang membuat fikiran lebih fresh. Selain itu di sawah lope semu...', '<div>Tempat yang bagus untuk menenangkan fikiran,karena tempat nya cukup nyaman dan sejuk yang dimana pengunjung merasakan suasana yang sejuk yang membuat fikiran lebih fresh. Selain itu di sawah lope semua nya serba terjangkau contohnya tiket masuk,booking gazebo,serta makanan yang ada di sawah lope tersebut. Dan adapun fasilitas yang ada disini cukup memadai seperti karaoke,wahana permainan untuk anak-anak dan parkir yang cukup luas serta terdapat mushola untuk beribadah.</div>', NULL, '2023-01-06 21:48:00', '2023-01-06 21:48:00'),
(4, 2, 5, 'Gazebo sawah lope', 'gazebo-sawah-lope', 'post-images/4A7ssIwu1xnaM429tmYCdFo0eaKkr8gC8kxouAO5.jpg', 'Disawah lope tersedia gazebo kecil maupun besar.&nbsp; Untuk kisaran harga sewa nya mulai dari 15k/jam yang kecil dan yang besar 25k/jam.Penyewaan juga kita bisa lewat website wisata sawah lope ataupu...', '<div>Disawah lope tersedia gazebo kecil maupun besar.&nbsp; Untuk kisaran harga sewa nya mulai dari 15k/jam yang kecil dan yang besar 25k/jam.<br>Penyewaan juga kita bisa lewat website wisata sawah lope ataupun secara langsung disawah lope.</div>', NULL, '2023-01-07 00:27:10', '2023-01-07 00:27:10'),
(5, 2, 5, 'Fasilitas sawah lope', 'fasilitas-sawah-lope', 'post-images/JG5dWRsOyewD47WHDwCIdH4kJ35skMS5T0FVhGGR.jpg', 'Fasilitas yang ada disawah lope&nbsp; :1. Resto2. Gazebo kecil dan besar3. Tempat foto yang menarik4. Mushola5. Permainan anak (Trampolin, Skuter, Ban Renang)6. Karaoke7. Parkiran yang cukup luas8. To...', '<div>Fasilitas yang ada disawah lope&nbsp; :<br>1. Resto<br>2. Gazebo kecil dan besar<br>3. Tempat foto yang menarik<br>4. Mushola<br>5. Permainan anak (Trampolin, Skuter, Ban Renang)<br>6. Karaoke<br>7. Parkiran yang cukup luas<br>8. Toilet<br>DLL<br><br></div>', NULL, '2023-01-07 00:33:24', '2023-01-07 00:33:24'),
(6, 3, 5, 'Wisata untuk keluarga', 'wisata-untuk-keluarga', 'post-images/xWJiwWIO03a6wF79EZIFveilXI55jW1C832G5f2L.jpg', 'Sangat nyaman untuk berkumpul keluarga..... :)', '<div>Sangat nyaman untuk berkumpul keluarga..... :)</div>', NULL, '2023-01-07 00:36:08', '2023-01-07 00:36:41'),
(7, 3, 5, 'Spot Foto', 'spot-foto-', 'post-images/Ks4MfgARYpB5Bjd5owrPdZ0COVQkj4FiyRrpK396.jpg', 'Banyak pilihan untuk berfoto.. :)', '<div>Banyak pilihan untuk berfoto.. :)</div>', NULL, '2023-01-07 00:38:16', '2023-01-07 00:38:16'),
(8, 3, 1, 'berlibur sawah lope didesa cikaso', 'berlibur-sawah-lope-didesa-cikaso', 'post-images/srcx9BbBj7QTuPx3cuUw3yLzHwAR8QYGopGZ0ljN.jpg', 'liburan disawah lope', '<div>liburan disawah lope</div>', NULL, '2023-01-13 19:01:11', '2023-01-13 19:01:11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `nohp`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'Arip Rahman Maulana', 'ariprahman', 'ariprahman@gmail.com', '', NULL, '$2y$10$zTLLf85gpvcEPjEbgWD1heeoGjVN94VJzTxAzG9.fQpgZg6iqyYam', NULL, '2023-01-06 21:18:17', '2023-01-06 21:18:17', 0),
(2, 'Wasdiana', 'wasdiana', 'wasdiana@gmail.com', '', NULL, '$2y$10$LHRw1y3pT4AOgl.0/QXTi.FbfTPsPvGjw71IcSacQzqOhTKRA6NcK', NULL, '2023-01-06 21:31:43', '2023-01-06 21:31:43', 0),
(3, 'Alvin', 'alvin', 'alvin@gmail.com', '', NULL, '$2y$10$qJUOgqnEVLS.q515nYUH9uVdYzc0DVISZtDZHWznPQylplu4cxNRK', NULL, '2023-01-06 21:42:34', '2023-01-06 21:42:34', 0),
(4, 'Ghyar Mahardika', 'ghyar', 'ghyarmahardika@gmail.com', '', NULL, '$2y$10$IdwxRI2RSbJJXgnfyQ9Taum08s981LOHF8gtmC9skc4AnAUeG5lE2', NULL, '2023-01-06 22:19:07', '2023-01-06 22:19:07', 0),
(5, 'Admin', 'admin', 'adminsawahlope@gmail.com', '', NULL, '$2y$10$f2cQIk29KwLOvmfLpO0Do.yxKKAzDFpPs0F8td83ndMRV89KbQu2q', NULL, '2023-01-06 22:20:01', '2023-01-06 22:20:01', 1),
(6, 'Pebi Pebriansah', 'pebipebriansah16', 'pebipebriansah160200@gmail.com', '', NULL, '$2y$10$AIRFptZRSajjXeNMyWYp.OZ0Q/caC4eALJYHzrXQ63spnzPvRNpFa', NULL, '2023-01-29 03:29:14', '2023-01-29 03:29:14', 0),
(7, 'Ghyar', 'ghyar123', 'ghyar@gmail.com', '', NULL, '$2y$10$xkyuAQmjxnwkFRc9NnflKO.hKNskhPKaofR185XvcL4gTbOr3FRN2', NULL, '2023-01-29 23:41:48', '2023-01-29 23:41:48', 0),
(8, 'Pebi Pebriansah', 'pebipebriansah17', 'pebipebriansah1600@gmail.com', '085723336281', NULL, '$2y$10$Uxd/hbUbd00/93JhxQeo..eBDiMnv/krcxhaY8ZamLM9/w0HVB0q2', NULL, '2023-01-29 23:48:40', '2023-01-29 23:48:40', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeks untuk tabel `category_gazebos`
--
ALTER TABLE `category_gazebos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_gazebos_name_unique` (`name`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gazebos`
--
ALTER TABLE `gazebos`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `laporans`
--
ALTER TABLE `laporans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `category_gazebos`
--
ALTER TABLE `category_gazebos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gazebos`
--
ALTER TABLE `gazebos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `laporans`
--
ALTER TABLE `laporans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
