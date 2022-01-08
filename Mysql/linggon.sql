-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2022 at 04:33 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linggon`
--

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
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2021_12_19_154141_create_users_table', 1),
(10, '2021_12_21_162249_create_product_table', 1);

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
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `harga_product` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `detail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pengrajin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kategori` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `nama_product`, `harga_product`, `stock`, `detail`, `pengrajin`, `kategori`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Tas Model J', 232000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua.', 'Linggon', 'Tas', 'coro1.jpeg', NULL, NULL),
(2, 'Tas Model K', 90000, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua.', 'Linggon', 'Tas', 'coro2.jpeg', NULL, NULL),
(3, 'Tas Model L', 70000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua.', 'Linggon', 'Tas', 'coro3.jpeg', NULL, NULL),
(4, 'Tas Model M', 90000, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua.', 'Linggon', 'Tas', 'coro4.jpeg', NULL, NULL),
(5, 'Tas Model x', 232000, 10, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, magna aliqua.', 'Linggon', 'Tas', 'coro5.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `is_admin` tinyint(1) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zip_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `is_admin`, `name`, `email`, `password`, `google_id`, `gender`, `birth_date`, `profession`, `address`, `province`, `city`, `district`, `zip_code`, `instagram`, `phone`, `remember_token`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'zhiro security', 'zhirosec@gmail.com', 'eyJpdiI6Im1IRHpUR0ZOUk52cUNzQ0g4b2tBd3c9PSIsInZhbHVlIjoidXUxRy91Y3B5Y1pZdE5KbkdndE5hZz09IiwibWFjIjoiNWQ5MWNlMjFiYWUyYzhhZDAzMjQ5Njk0YTFiZWE4ZDRjNmFiMmQ5YmMyZTk0ZTYyNGFhYmJjMWNmZjlkNzRhMyIsInRhZyI6IiJ9', '109289434223976181396', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 13:50:45', '2022-01-07 13:50:45'),
(2, 2, 'Faiz Hanafi', 'faizhanafi90@gmail.com', 'eyJpdiI6ImRoVVhNeHkyUmJlOXB3MDkwNEtLOEE9PSIsInZhbHVlIjoiU242WEdBU29VK3pTbU42ZjJRbDVFZz09IiwibWFjIjoiNmRjMmNjMjQ3MDhmNTkxYTk3YWZhYjI1OWJjNGVlNTI4NWRlYjQ3OWZmMDA5NGY4M2UxNGViMjE0YTJjNjBmYyIsInRhZyI6IiJ9', '105639532102425562824', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 14:04:14', '2022-01-07 14:04:14'),
(3, 2, '2019,CS Faiz Hanafi', 'f.hanafi@students.esqbs.ac.id', 'eyJpdiI6ImNrc0lYSFl0dXUxVjk4NG1JS0ZKUUE9PSIsInZhbHVlIjoiWjc5dVN1Vm94bExPVVVVd24vbENnQT09IiwibWFjIjoiZmQ1MGVjN2JiZWE3NDIxYWQyY2Q3YmMyOTdmMDBkYmU5NTFkYzljYWYyMmUwZjMwMmE3Y2UyYTIzYjZkZGY3ZiIsInRhZyI6IiJ9', '109331306067468146201', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 15:09:55', '2022-01-07 15:09:55'),
(4, NULL, 'testing', 'testing@gmail.com', '$2y$10$8qduK98yM3HbzexvzdEDiOIU3IsrJcLXHQmoYqmu2a9nPtsqvRi.2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 19:59:01', '2022-01-07 19:59:01'),
(5, 2, 'Islamic Club ESQBS', 'ldkesqbs165@gmail.com', 'eyJpdiI6Im9QcHVUTyt0NnhXYmdnZHF5c2lON2c9PSIsInZhbHVlIjoibWx0MXM2ZU5rRmphNDRNVFFDRWw2Zz09IiwibWFjIjoiNzQ4ZWY3MjU5NzY1MTdmYjgxZWFlODIwZTZiODYzYThmNDczYTgxZjBmZDA3OGRkMjIwOTMwNDY5MGVmY2VlYSIsInRhZyI6IiJ9', '116589830853677351693', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-07 20:00:38', '2022-01-07 20:00:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `product`
--
ALTER TABLE `product`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
