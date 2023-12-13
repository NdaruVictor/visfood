-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Des 2023 pada 13.42
-- Versi server: 10.6.11-MariaDB-log
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodblog`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamats`
--

CREATE TABLE `alamats` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `nama_tempat` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `alamats`
--

INSERT INTO `alamats` (`id`, `post_id`, `nama_tempat`, `alamat`, `created_at`, `updated_at`) VALUES
(3, 13, 'Bebek Goreng Cak No', 'Jl. Sukarno Hatta No.225, Ngasinan, Karangsoko, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66313', '2023-12-12 05:09:06', '2023-12-12 05:09:06'),
(4, 12, 'Nasi Goreng Atmo', 'WPV5+94P, Sosutan, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', '2023-12-12 06:57:15', '2023-12-12 06:57:15'),
(5, 13, 'Bebek Klinting', 'Panglima Sudirman No.146 Sebelah bank jatim Ngantru, Sawahan, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', '2023-12-12 06:59:04', '2023-12-12 06:59:04'),
(6, 20, 'BEKA HOME PUDDING', 'Jl. MT Haryono No.5A, Sawahan, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66315', '2023-12-12 07:11:06', '2023-12-12 07:11:06'),
(7, 22, 'PRODUSEN PIE APEL MALANG', 'Jl. Ikan Piranha Atas Gg. 2b No.94, Tunjungsekar, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142', '2023-12-12 07:28:14', '2023-12-12 07:28:14'),
(8, 22, 'PAIQU Pai Jogja, aneka olahan pie', 'Candi Dukuh RT 01/ RW 03 No. 42, Candi Dukuh, Sardonoharno, Kec. Ngaglik, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55581', '2023-12-12 07:28:47', '2023-12-12 07:28:47'),
(9, 23, 'Veteran 44 cafe', 'Jl. Veteran No.44, Sosutan, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', '2023-12-12 07:31:53', '2023-12-12 07:31:53'),
(10, 23, 'Tea Break Pangsud Trenggalek', 'Jl. Panglima Sudirman No.14, Sawahan, Sumbergedong, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', '2023-12-12 07:32:46', '2023-12-12 07:32:46'),
(11, 25, 'Wano boba tea trenggalek', 'Jl. Sukarno Hatta No.76d, Kelutan, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66313', '2023-12-12 07:47:58', '2023-12-12 07:47:58'),
(12, 25, 'Wano boba', 'Jl. Panglima Sudirman No.21, Sawahan, Ngantru, Kec. Trenggalek, Kabupaten Trenggalek, Jawa Timur 66311', '2023-12-12 07:49:47', '2023-12-12 07:49:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ktps`
--

CREATE TABLE `ktps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ttl` varchar(255) NOT NULL,
  `jns_kelamin` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `agama` varchar(255) NOT NULL,
  `status_perkawinan` varchar(255) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `kewarganegaraan` varchar(255) NOT NULL,
  `berlaku_hingga` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `ktps`
--

INSERT INTO `ktps` (`id`, `nik`, `nama`, `ttl`, `jns_kelamin`, `alamat`, `agama`, `status_perkawinan`, `pekerjaan`, `kewarganegaraan`, `berlaku_hingga`, `created_at`, `updated_at`) VALUES
(1, '3503052609050001', 'Febria AAmanta Pradana', 'Trenggalek 23-05-2005', 'Laki-laki', 'Dusun Pacar, Rt 26, Rw02, Desa Nlinggis, Kec Tugu, Kab Trenggalek', 'ISLAM', 'BELUM MENIKAH', 'PELAJAR', 'WNI', 'SEUMUR HIDUP', '2023-11-07 01:22:53', '2023-11-07 01:35:53');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_09_19_052328_create_posts_table', 1),
(6, '2023_11_07_080212_create_ktps_table', 2),
(7, '2023_11_30_115818_create_recipes_table', 3),
(8, '2023_12_02_103730_create_alamats_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `image`, `title`, `content`, `created_at`, `updated_at`) VALUES
(12, 'm3oxgNPU0NtZftewOgl0jM1awsbCBjN4nKenp8el.jpg', 'Nasi Goreng', 'Nasi goreng adalah makanan berupa nasi yang digoreng dan dicampur dalam minyak goreng, margarin, atau mentega. Biasanya ditambah dengan kecap manis, bawang merah, bawang putih, asam jawa,dan lada.', '2023-09-26 18:45:32', '2023-12-10 08:42:49'),
(13, 'f6kqcPTqJEbSVHnWt6cQazM3LnBY9nwcnj5CdYrL.jpg', 'Bebek Goreng', 'Bebek goreng adalah daging bebek yang digoreng dan dihidangkan dengan lalapan. Bebek goreng dapat ditemui di warung-warung kaki lima sampai di restoran dan hotel mewah.', '2023-09-26 18:46:48', '2023-10-16 21:43:33'),
(20, '7yMvoAXY9SIC50hRgFcWxPRn9ntJvmtePLLDLvEJ.jpg', 'Puding Coklat', 'Puding coklat&nbsp;merupakan salah satu kelas makanan penutup dalam keluarga puding&nbsp;dengan rasa coklat&nbsp;.&nbsp;Ada dua jenis utama: makanan penutup yang direbus lalu didinginkan, secara tekstur berupa puding&nbsp;dengan pati', '2023-12-11 19:00:24', '2023-12-11 19:00:24'),
(22, 't6FDu9HrsYb6IcsdaVJra2AkgSgBS1cxm9PBRYMO.jpg', 'Pai Apel', 'Pastei apel atau pai apel adalah pai buah yang isian utamanya adalah buah apel yang biasanya akan menimbulkan rasa manis seiring proses pemanggangan.', '2023-12-12 04:49:23', '2023-12-12 04:49:23'),
(23, 'sobU36TibZSAa7lD3xX0V3oxlPsFJ0011gcdwsnA.jpg', 'Lemon tea', 'Lemon tea adalah varian teh yang dibuat dengan perasaan jeruk nipis, kemudian disajikan dengan irisan lemon. Minuman ini memiliki rasa yang manis bercampur dengan asam lemon.', '2023-12-12 04:57:14', '2023-12-12 04:57:14'),
(25, 'BFUmMhsb3zk8IBZZb1BQYdTToEPrVUcGeWty9jGk.jpg', 'Brown sugar boba milk tea', 'Minuman boba (brown sugar boba milk tea) merupakan minuman yang dibuat dari tepung tapioka, susu, dan teh yang memiliki nilai kalori serta kandungan gula tinggi.', '2023-12-12 07:45:35', '2023-12-12 07:45:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `recipes`
--

CREATE TABLE `recipes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `recipe` text NOT NULL,
  `cara_memasak` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `recipes`
--

INSERT INTO `recipes` (`id`, `post_id`, `recipe`, `cara_memasak`, `created_at`, `updated_at`) VALUES
(3, 12, 'Nasi putih 1 piring\r\nBawang putih 2 siung, cincang halus\r\nKecap manis atau kecap asin sesuai selera\r\nSaus sambal sesuai selera\r\nSaus tiram sesuai selera\r\nGaram secukupnya\r\nKaldu bubuk rasa ayam atau sapi sesuai selera\r\nDaun bawang 1 batang, cincang halus\r\nTelur ayam 1 butir\r\nSosis ayam 1 buah, iris tipis\r\nMargarin atau minyak goreng 3 sdm', 'Siapkan penggorengan dengan api sedang, tuang margarin atau minyak goreng.\r\nMasukkan bawang putih dan daun bawang yang sudah dicincang halus. Tumis hingga berbau harum atau hingga warnanya keemasan.\r\nMasukkan sosis dan 1 butir telur ayam. Tumis sebentar.\r\nMasukkan bumbu halus dan nasi. Aduk hingga tercampur rata.\r\nTuang kecap manis, saus sambal, saus tiram, garam, dan kaldu bubuk. Aduk hingga warna nasi berubah secara merata.\r\nNasi goreng biasa yang sederhana dan enak siap disajikan.', '2023-12-02 03:36:26', '2023-12-02 03:36:26'),
(4, 13, 'Bahan: 2 ekor ayam bebek (potong sesuai selera), 1 buah jeruk nipis ambil airnya dan garam, 4 lembar daun salam, 10 lembar daun jeruk, 3 sdm gula merah, 3 sdm air asam Jawa, 5 buah serai, 1 liter air atau secukupnya, 2 sdm gula pasir, Garam dan kaldu jamur, Minyak untuk menggoreng Bumbu halus: 20 bawang putih, 25 bawang merah, 1 sdt merica butiran, 8 kemiri, 1 sdm ketumbar bubuk, 3 jempol jahe, 1 jempol kencur, 4 jempol lengkuas, 2 ruas kunyit, 1 sdm terasi', '1. Setelah mencuci bersih bebek, kucuri jeruk nipis dan baluri garam, biarkan selama 30 menit.\r\n2. Tumis bumbu halus dengan sedikit minyak, masukkan daun salam, serai, daun jeruk, lalu tumis sampai wangi dan matang.\r\n3. Masukkan bebek lalu aduk rata dengan bumbu.\r\n4. Masukkan air, aduk rata, masukkan gula, garam, dan kaldu jamur, masak sampai air mendidih lalu kecilkan apinya dan masak hingga matang selama 50 menit, koreksi rasanya.\r\n5. Setelah matang dan empuk, tiriskan bebek lalu goreng dalam minyak panas hingga kulit kecokelatan.', '2023-12-12 05:06:44', '2023-12-12 05:06:44'),
(5, 20, 'Bahan puding: 1200 ml Air, 30 gr Cokelat Bubuk, 50 gr Susu Bubuk, 200 gr Gula Pasir, 7 gr Agar-agar, 15 gr Jelly Bubuk, 250 gr Frisian Flag Kental Manis Cokelat \r\nBahan Vla: 25 gr Tepung Custard, 600 ml Air, 80 gr Susu Bubuk, 100 gr Gula Pasir, 1 sdm Vanilla Extract, ½ sdt Garam', 'Campurkan bahan pudding dalam mangkuk,\r\nTambahkan Frisian Flag Kental Manis Cokelat yang Nikmat. Frisian Flag Kental Manis Cokelat, Cokelatnya bikin Semuaa Nikmat!\r\nTuang ke dalam panci, aduk, masak hingga mendidih\r\nTuang ke dalam cetakan, lalu dinginkan\r\nDinginkan hingga mengeras\r\nCampur adonan vla, lalu masak\r\nSajikan pudding dengan vla', '2023-12-12 07:04:35', '2023-12-12 07:04:35'),
(6, 22, 'Bahan isian: 4 buah apel\r\n3 sdm maizena\r\n2 sdm margarin\r\n1 sdt bubuk kayu manis\r\n5 sdm gula pasir\r\n1 sdm air jeruk nipis\r\n200 ml air\r\nBahan Kulit pai: 250 gr tepung terigu\r\n3 sdm minyak sayur\r\n4 sdm margarin\r\n2 sdt gula\r\n1/4 sdt garam\r\nAir secukupnya', 'Campur terigu, margarin dan minyak sayur lalu aduk rata hingga semua bahan tercampur.\r\nTuang air sedikit demi sedikit dan uleni adonan hingga kalis.\r\nUntuk isian, panaskan margarin tambahkan gula dan campur hingga larut dan tercampur rata.\r\nMasukkan apel, bubuk kayu manis, dan sedikit air dalam lelehan mentega, masak hingga matang.\r\nSetelah apel empuk, tambahkan maizena dan air jeruk nipis, aduk rata hingga mengental.\r\nAmbil adonan kulit secukupnya lalu gilas tipis dan isi dengan isian apel.\r\nLipat seperti lumpia atau pastel dan lakukan hingga bahan kulit dan isian habis.\r\nGoreng pie apel dengan api sedang hingga kecokelatan.\r\nTiriskan dan sajikan.', '2023-12-12 07:26:03', '2023-12-12 07:26:03'),
(7, 23, 'Bahan: Es batu, Madu atau gula, Air es, Lemon, Teh.', '1. Seduh teh dengan air panas hingga mencapai tingkat kekentalan yang kamu inginkan. Lalu, sisihkan terlebih dahulu.\r\n2. Tuang teh ke dalam gelas dan campurkan gula.\r\n3. Tambahkan es dan perasan air lemon. Sajikan dalam keadaan dingin agar lebih nikmat.', '2023-12-12 07:30:35', '2023-12-12 07:30:35'),
(9, 25, 'Bahan: 100 ml teh hitam untuk milk tea, 30 ml sirup gula aren, Boba secukupnya, 150 ml susu cair, 75 ml topping cream Es, batu secukupnya', '1. Siapkan gelas berukuran 470 ml.\r\n2. Tuang teh hitam, sirup gula aren, dan boba ke gelas.\r\n3. Campur semua bahan dan aduk rata.\r\n4. Isi dengan es batu sampai hampir penuh.\r\n5. Tuangkan susu cair dan beri hiasan topping cream secukupnya.\r\n6. Brown sugar boba milk tea siap disajikan.', '2023-12-12 07:46:55', '2023-12-12 07:46:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Ndaru', 'admin@gmail.com', NULL, '$2y$10$tLYRuOoY3oWIclA.9LdKw.ysy3XH2OFV5fCjgWWye6DXLohCmPg4a', NULL, '2023-11-13 20:28:01', '2023-11-13 20:28:01'),
(5, 'ndaru', 'ndaru360@gmail.com', NULL, '$2y$10$gaxf.JkhrLfjU4LpmQ8RYOlFXg3z4.R/ZdFc0P021eM0pPa1ayqJm', NULL, '2023-11-13 23:00:48', '2023-11-13 23:00:48'),
(6, 'Ndaru', 'ndaruvictor@gmail.com', NULL, '$2y$10$PPxuFCmuSG2yqTPBtf.DY.NTdkSogKbCkbY8HYcsf.D5915QNN1oK', NULL, '2023-11-22 00:55:33', '2023-11-22 00:55:33');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamats`
--
ALTER TABLE `alamats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `alamats_post_id_foreign` (`post_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `ktps`
--
ALTER TABLE `ktps`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `recipes_post_id_foreign` (`post_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamats`
--
ALTER TABLE `alamats`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ktps`
--
ALTER TABLE `ktps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `alamats`
--
ALTER TABLE `alamats`
  ADD CONSTRAINT `alamats_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `recipes`
--
ALTER TABLE `recipes`
  ADD CONSTRAINT `recipes_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
