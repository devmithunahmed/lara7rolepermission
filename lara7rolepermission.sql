-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2023 at 05:47 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lara7rolepermission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin@example.com', 'superadmin', NULL, '$2y$10$QqDUr7hOQh/HTcHVNHPVh.ZyEj.VfkiCnMJIpqHKk/KcjmPB3oAp2', NULL, '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(2, 'Author Admin', 'author@gmail.com', 'author', NULL, '$2y$10$lmHzM5grrGvqpHJ6yH/eGucfkY3eTE0vzqgGv3w8yL/rvNYzbbHsK', NULL, '2023-11-04 15:59:29', '2023-11-04 15:59:29'),
(3, 'Editor Admin', 'editor@gmail.com', 'editor', NULL, '$2y$10$DhrAjRaPhFGd5aydsRrsj.12NKhjpio8rWAdZg30SvqvzWWa0zrfK', NULL, '2023-11-05 06:29:32', '2023-11-05 10:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2023_10_29_184202_create_permission_tables', 1),
(5, '2023_11_03_190028_create_admins_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\Admin', 1),
(1, 'App\\User', 1),
(2, 'App\\Models\\Admin', 1),
(2, 'App\\Models\\Admin', 2),
(2, 'App\\Models\\Admin', 3),
(3, 'App\\Models\\Admin', 3),
(5, 'App\\Models\\Admin', 2),
(9, 'App\\User', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `group_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `group_name`, `created_at`, `updated_at`) VALUES
(1, 'dashboard.view', 'admin', 'dashboard', '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(2, 'dashboard.edit', 'admin', 'dashboard', '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(3, 'blog.create', 'admin', 'blog', '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(4, 'blog.view', 'admin', 'blog', '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(5, 'blog.edit', 'admin', 'blog', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(6, 'blog.delete', 'admin', 'blog', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(7, 'blog.approve', 'admin', 'blog', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(8, 'admin.create', 'admin', 'admin', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(9, 'admin.view', 'admin', 'admin', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(10, 'admin.edit', 'admin', 'admin', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(11, 'admin.delete', 'admin', 'admin', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(12, 'admin.approve', 'admin', 'admin', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(13, 'role.create', 'admin', 'role', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(14, 'role.view', 'admin', 'role', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(15, 'role.edit', 'admin', 'role', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(16, 'role.delete', 'admin', 'role', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(17, 'role.approve', 'admin', 'role', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(18, 'user.create', 'admin', 'user', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(19, 'user.view', 'admin', 'user', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(20, 'user.edit', 'admin', 'user', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(21, 'user.delete', 'admin', 'user', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(22, 'user.approve', 'admin', 'user', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(23, 'reporter.create', 'admin', 'reporter', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(24, 'reporter.view', 'admin', 'reporter', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(25, 'reporter.edit', 'admin', 'reporter', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(26, 'reporter.delete', 'admin', 'reporter', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(27, 'reporter.approve', 'admin', 'reporter', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(28, 'news.create', 'admin', 'news', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(29, 'news.view', 'admin', 'news', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(30, 'news.edit', 'admin', 'news', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(31, 'news.delete', 'admin', 'news', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(32, 'news.approve', 'admin', 'news', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(33, 'category.create', 'admin', 'category', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(34, 'category.view', 'admin', 'category', '2023-11-04 15:43:07', '2023-11-04 15:43:07'),
(35, 'category.edit', 'admin', 'category', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(36, 'category.delete', 'admin', 'category', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(37, 'category.approve', 'admin', 'category', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(38, 'subcategory.create', 'admin', 'subcategory', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(39, 'subcategory.view', 'admin', 'subcategory', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(40, 'subcategory.edit', 'admin', 'subcategory', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(41, 'subcategory.delete', 'admin', 'subcategory', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(42, 'subcategory.approve', 'admin', 'subcategory', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(43, 'district.create', 'admin', 'district', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(44, 'district.view', 'admin', 'district', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(45, 'district.edit', 'admin', 'district', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(46, 'district.delete', 'admin', 'district', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(47, 'district.approve', 'admin', 'district', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(48, 'subdistrict.create', 'admin', 'subdistrict', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(49, 'subdistrict.view', 'admin', 'subdistrict', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(50, 'subdistrict.edit', 'admin', 'subdistrict', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(51, 'subdistrict.delete', 'admin', 'subdistrict', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(52, 'subdistrict.approve', 'admin', 'subdistrict', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(53, 'profile.create', 'admin', 'profile', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(54, 'profile.view', 'admin', 'profile', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(55, 'profile.edit', 'admin', 'profile', '2023-11-04 15:43:08', '2023-11-04 15:43:08'),
(56, 'profile.delete', 'admin', 'profile', '2023-11-04 15:43:09', '2023-11-04 15:43:09'),
(57, 'profile.approve', 'admin', 'profile', '2023-11-04 15:43:09', '2023-11-04 15:43:09');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', 'admin', '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(2, 'admin', 'admin', '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(3, 'Role Editor', 'admin', '2023-11-04 15:43:06', '2023-11-05 08:29:09'),
(4, 'Role Writer', 'admin', '2023-11-04 15:43:06', '2023-11-05 08:29:50'),
(5, 'Role Author', 'admin', '2023-11-04 15:55:09', '2023-11-05 08:30:41'),
(6, 'Role Admin', 'admin', '2023-11-04 15:56:13', '2023-11-04 15:56:13'),
(7, 'Role User', 'admin', '2023-11-04 15:56:44', '2023-11-05 08:31:08'),
(8, 'Role Moderator', 'admin', '2023-11-04 15:57:36', '2023-11-05 08:34:00'),
(9, 'Role Manager', 'admin', '2023-11-04 15:58:05', '2023-11-05 08:33:36'),
(10, 'Role Permission', 'admin', '2023-11-05 08:27:51', '2023-11-05 08:27:51');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(8, 6),
(9, 1),
(9, 3),
(9, 4),
(9, 5),
(9, 6),
(9, 8),
(9, 9),
(10, 1),
(10, 6),
(11, 1),
(11, 6),
(12, 1),
(12, 6),
(13, 1),
(13, 10),
(14, 1),
(14, 3),
(14, 4),
(14, 5),
(14, 9),
(14, 10),
(15, 1),
(15, 10),
(16, 1),
(16, 10),
(17, 1),
(17, 10),
(18, 1),
(18, 7),
(19, 1),
(19, 3),
(19, 4),
(19, 5),
(19, 7),
(19, 9),
(20, 1),
(20, 7),
(21, 1),
(21, 7),
(22, 1),
(22, 7),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(53, 8),
(54, 1),
(54, 8),
(55, 1),
(55, 8),
(56, 1),
(56, 8),
(57, 1),
(57, 8);

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User Admin', 'useradmin@gmail.com', NULL, '$2y$10$V4a3f0rBF9P.L7s5QCQNOutuAjCM.bEo/xCx5h3vFMuyqwmCKDyJO', NULL, '2023-11-04 15:43:06', '2023-11-04 15:43:06'),
(2, 'Reporter', 'reporter@gmail.com', NULL, '$2y$10$92dCstgyslq6UJvm5mwZp.ssBjt9a0AR7ePBPj2bR1eClrZUbx79u', NULL, '2023-11-04 16:01:19', '2023-11-04 16:01:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

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
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
