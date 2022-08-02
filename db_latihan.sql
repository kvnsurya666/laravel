-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2022 at 09:23 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(500) NOT NULL,
  `kode_kategori` int(11) NOT NULL,
  `kode_model` int(11) NOT NULL,
  `kode_merk` int(11) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `deskripsi` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `kode_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`kode_kategori`, `nama_kategori`) VALUES
(0, 'Machinery'),
(1, 'Machine tool'),
(2, 'Cutting tool'),
(3, 'Measuring tool'),
(4, 'Hand tool'),
(5, 'Cutting coolant'),
(6, 'Abrasive');

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `kode_merk` int(11) NOT NULL,
  `nama_merk` varchar(50) NOT NULL,
  `gambar_merk` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`kode_merk`, `nama_merk`, `gambar_merk`) VALUES
(0, 'WEIDA', 'weida.png'),
(1, 'J&W', 'J&W.png'),
(2, 'Fullmark', 'fullmark.jpg'),
(3, 'DIXON', 'dixon.jpg'),
(4, 'SAN OU', 'sanou.jpg'),
(5, 'Mitutoyo', 'mitutoyo.png'),
(6, 'Maykestag', 'maykestag.jpg'),
(7, 'NACHI', 'NACHI.jpg'),
(8, 'NIKKEN', 'NIKKEN.jpg'),
(9, 'SEAYAC', 'seayac.jpg'),
(10, 'SHAN GIN', 'SHAN GIN.jpg'),
(11, 'Besdia', 'Besdia.jpg'),
(12, 'Arntz', 'Arntz.jpg'),
(13, 'ORIENTCRAFT', 'ORIENTCRAFT.png'),
(14, 'SUPERSONIC', 'SUPERSONIC.jpg'),
(15, 'BOSI TOOLS', 'bosi tools.png'),
(16, 'CarMard', 'Carmar.jpg'),
(17, 'VERTEX', 'vertex.png'),
(18, 'WAYTRAIN', 'waytrain.jpg'),
(19, 'KODEX', 'KODEX.png'),
(20, 'LAMINA', 'LAMINA.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_30_091412_create_siswa_table', 2),
(6, '2022_07_29_072626_create_sales_table', 3),
(7, '2022_07_29_073144_create_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `kode_model` int(11) NOT NULL,
  `nama_model` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `nama`, `alamat`, `tgl_lahir`, `created_at`, `updated_at`) VALUES
(1, 'Edi', 'Surabaya', '1980-12-22', NULL, NULL),
(2, 'Ilyas', 'Surabaya', '1976-01-30', NULL, NULL),
(3, 'Rochman', 'Surabaya', '1977-01-01', NULL, NULL),
(4, 'Dwiono', 'Surabaya', '1970-04-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_sales` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('admin','sales') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'sales',
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `id_sales`, `name`, `role`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Kevin', 'admin', 'kevinsuryaperdana@gmail.com', NULL, '$2y$10$vICfKqf2GPUZkDuky4apleKaBbUATj39liY3KMA5swHEAlVE5CLXy', NULL, NULL, NULL),
(2, NULL, 'Fenny', 'admin', 'fennyresav18@gmail.com', NULL, '$2y$10$sD9/6ovvrPVhXnsFzLL5AuKJlxwdsy5BVArh9CX/p1wVsEhqVWH0u', NULL, NULL, NULL),
(4, 1, 'Edi', 'sales', 'edi123@gmail.com', NULL, '$2y$10$uRUcdieUdS0REPxpRshiOOXkokeOx/e6Dtwy4x8bea9Zm5CmIO3Am', NULL, NULL, NULL),
(5, 2, 'Ilyas', 'sales', 'ilyas456@gmail.com', NULL, '$2y$10$q4EMyTif68jdULV9Dm9oXOYnGIOE7L/XhX587htzmCp8P7KkzO8.i', '5WFwGDwj6lYKI7tTvCCae3C4PjtgZ4rVAKGR1ig3ToSjPj5zh1E6I9ClrPCf', NULL, NULL),
(6, 3, 'Rochman', 'sales', 'rochman789@gmail.com', NULL, '$2y$10$Ifl3XC/Q7WSBIaP2L42Dce.fVAJxOZ810.eT7hLFmmvpFi/gbZZdW', NULL, NULL, NULL),
(7, 4, 'Dwiono', 'sales', 'gdwiono@gmail.com', NULL, '$2y$10$/qz8hyFxPyyjUpOiIvq2JOYQVBOPkxHW2egFEi2XpfObJfWaYDCvK', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `kode_kategori` (`kode_kategori`,`kode_model`,`kode_merk`),
  ADD UNIQUE KEY `nama_barang` (`nama_barang`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kode_kategori`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`kode_merk`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`kode_model`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
