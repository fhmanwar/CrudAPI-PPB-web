-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2020 at 04:25 PM
-- Server version: 10.4.6-MariaDB
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
-- Database: `db_json`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggreks`
--

CREATE TABLE `anggreks` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `anggreks`
--

INSERT INTO `anggreks` (`id`, `name`, `desc`, `price`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Anggrek Bulan', 'Lorem Ipsum bla', 600000, 'http://127.0.0.1:8000/image/upload/anggrek/53.jpg', '2019-12-30 09:50:11', '2020-01-04 09:37:30', NULL),
(2, 'Anggrek dendrobium', NULL, 700000, 'http://127.0.0.1:8000/image/upload/anggrek/63.jpg', '2019-12-30 10:02:25', '2019-12-31 05:48:49', NULL),
(3, 'Anggrek Hitam', NULL, 450000, 'http://127.0.0.1:8000/image/upload/anggrek/86.jpg', '2019-12-30 10:06:26', '2019-12-31 05:48:57', NULL),
(4, 'dadsd', NULL, 21, '1577761007.png', '2019-12-30 19:56:47', '2019-12-30 19:58:03', '2019-12-30 19:58:03'),
(5, 'akpodop', NULL, 450000, NULL, '2019-12-30 20:11:21', '2019-12-30 20:11:57', '2019-12-30 20:11:57'),
(6, 'akpod', NULL, 2000, NULL, '2019-12-30 20:11:38', '2019-12-30 20:11:55', '2019-12-30 20:11:55'),
(7, 'akpod', NULL, 2000, NULL, '2019-12-30 20:11:48', '2019-12-30 20:11:52', '2019-12-30 20:11:52'),
(8, 'Anggrek Tanah', NULL, 900000, 'http://127.0.0.1:8000/image/upload/anggrek/19.jpg', '2019-12-30 21:03:05', '2019-12-31 05:49:14', NULL),
(9, 'Anggrek Tebu', NULL, 550000, 'http://127.0.0.1:8000/image/upload/anggrek/39.jpg', '2019-12-30 21:03:27', '2019-12-31 05:49:21', NULL),
(10, 'Anggrek Vanda', 'kjasndansdknasd lorem pisum', 750000, 'http://127.0.0.1:8000/image/upload/anggrek/86.jpg', '2019-12-30 21:03:50', '2020-01-04 09:38:52', NULL),
(11, 'Anggrek sp', NULL, 900120, 'http://127.0.0.1:8000/image/upload/anggrek/1578130923.jpg', '2020-01-04 09:42:03', '2020-01-04 09:42:07', '2020-01-04 09:42:07');

-- --------------------------------------------------------

--
-- Table structure for table `ayams`
--

CREATE TABLE `ayams` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_brg` char(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_jual` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok_min` int(11) NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_08_19_000000_create_failed_jobs_table', 1),
(22, '2019_12_28_071953_create_products_table', 1),
(23, '2019_12_28_074836_create_ayams_table', 1),
(24, '2019_12_30_142042_create_anggreks_table', 1),
(26, '2020_01_03_190658_add_levelakses_users_table', 2),
(27, '2020_01_04_145531_add_softdelete_users_table', 3),
(30, '2020_01_04_192510_create_pejualan_table', 4),
(32, '2020_01_04_204559_orders_table', 5),
(33, '2016_06_01_000001_create_oauth_auth_codes_table', 6),
(34, '2016_06_01_000002_create_oauth_access_tokens_table', 6),
(35, '2016_06_01_000003_create_oauth_refresh_tokens_table', 6),
(36, '2016_06_01_000004_create_oauth_clients_table', 6),
(37, '2016_06_01_000005_create_oauth_personal_access_clients_table', 6),
(38, '2020_01_05_184829_api_token_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembalian` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `total`, `bayar`, `kembalian`, `created_at`, `updated_at`) VALUES
(1, 100000, 120000, 20000, NULL, NULL);

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
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_anggrek` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `id_order`, `id_user`, `id_anggrek`, `qty`, `harga`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 2, 1, 100000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_brg` char(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nm_brg` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `satuan` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga` double NOT NULL,
  `harga_beli` double NOT NULL,
  `stok` int(11) NOT NULL,
  `stok_min` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `akses` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `akses`, `api_token`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'Administrator', 'admin@admin.com', NULL, '$2y$10$25M2fHiOW8fcEWoNkohfuOlQ1G5OrsXJ7i9xbW9460I28JdeUYdZq', 'admin', NULL, NULL, '2020-01-02 07:56:20', '2020-01-02 07:56:20', NULL),
(5, 'Joni', 'joni@user.com', NULL, '$2y$10$TZGTDZg4..w4nelGUTJAne8dYH81HwdGkZxS.s4y3U5JdQKXVxG2q', 'user', NULL, NULL, '2020-01-03 13:00:59', '2020-01-03 13:00:59', NULL),
(6, 'Joko', 'joko@user.com', NULL, '$2y$10$yW7rv5yZveJtQVCCD9wH3eYW0uq9hm69wZrW.7yZh23e102T95RlW', 'user', NULL, NULL, '2020-01-03 13:13:49', '2020-01-03 13:13:49', NULL),
(7, 'jodi', 'jodi@user.com', NULL, '$2y$10$shL2TtnY8wVwNFUlzr2sM.p2vgpk7LokYVr2Jo2iV5UoTHkTiuR7m', 'user', NULL, NULL, '2020-01-04 05:12:05', '2020-01-04 05:12:05', NULL),
(8, 'jordi', 'jordi@user.com', NULL, '$2y$10$e9V6l1meCBGccnyBptlwB..jlPg3ZUjtAc2R8IjlO6Jt/auzk1OCK', 'user', NULL, NULL, '2020-01-04 05:14:01', '2020-01-04 05:14:01', NULL),
(9, 'dodi', 'dodi@user.com', NULL, '$2y$10$zD6r6/9oV1GEk/4xxbVUP.diwkpvO.4XKqqFMY.VH3t.xsStzN40q', 'user', NULL, NULL, '2020-01-04 05:24:39', '2020-01-04 11:25:04', '2020-01-04 11:25:04'),
(10, 'dido', 'dido@example.com', NULL, '$2y$10$W5l4FKWVPeyY2y7D.0netOM4/REwCrIyJlZfGFzgeN3q0Qovr/TIO', 'user', NULL, NULL, '2020-01-04 05:52:06', '2020-01-04 11:24:59', '2020-01-04 11:24:59'),
(11, 'Dino', 'dino@example.com', NULL, '$2y$10$HOxKJBylTGsYUunCF8jTxeav3hLpforNp3Foctl1IizBxbYjy7R4m', 'user', NULL, NULL, '2020-01-04 08:14:14', '2020-01-04 11:24:55', '2020-01-04 11:24:55'),
(13, 'Dino', 'dino@user.com', NULL, '$2y$10$ro1ZRdBTOkYRPTYYIDsEduY9NID7kZ0oDBFMQMoQ1umKAkhN94jVK', 'user', NULL, NULL, '2020-01-04 09:33:55', '2020-01-04 11:21:53', '2020-01-04 11:21:53'),
(14, 'Dodit', 'dodit@user.com', NULL, '$2y$10$ts6Ubq6Pid8XfOpfWi9LAOsbKTDnt9cj08f5GGn3gIYvZ3eiz/wgi', 'user', NULL, NULL, '2020-01-04 11:26:05', '2020-01-04 11:26:05', NULL),
(16, 'dini', 'dini@user.com', NULL, '$2y$10$8DZE..E57VAGY9xHzQOVWu4ragtB6gUC4MIGzyMDRAJDrxiqa0Cua', 'user', NULL, NULL, '2020-01-04 11:27:30', '2020-01-04 11:29:31', '2020-01-04 11:29:31'),
(18, 'wani', 'wani@user.com', NULL, '$2y$10$ANbgCBco7jP9C9xckwNLcuYFFo8aamZjZbP8yAoM1fq/mPC8nKNL6', 'user', '1K3ckXj3LzOg2zFjN8IEJv0EpMQSq3FXEm9NE8HAp575Tm8Ng3Apixn4JuY5u01FLvxYmAkKJkUEU8ZZ', NULL, '2020-01-05 12:15:03', '2020-01-05 12:15:03', NULL),
(19, 'wani1', 'wani1@user.com', NULL, '$2y$10$0DO/z411RD94A.6kmlMEr.O8jlRuxxaG69BWw19yg/NGkTzkmg1Fq', 'user', 'tlcdcCNFsyK6NOVvIANqHMKHRY4jq9RByuKUElN2QJ3h58WLx0voUzIW4ZlVIU8PIhUfSecdH5GshmOO', NULL, '2020-01-05 12:31:44', '2020-01-05 12:31:44', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggreks`
--
ALTER TABLE `anggreks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ayams`
--
ALTER TABLE `ayams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_personal_access_clients_client_id_index` (`client_id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggreks`
--
ALTER TABLE `anggreks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `ayams`
--
ALTER TABLE `ayams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
