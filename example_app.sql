-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Mar 21, 2021 at 09:36 AM
-- Server version: 8.0.22
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `example_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_17_155912_create_roles_table', 2),
(5, '2020_04_17_155932_add_role_id_to_users', 2),
(8, '2020_04_17_160240_create_permission_table', 3),
(9, '2021_03_07_104441_create_product_table', 4),
(12, '2020_04_17_160323_create_permission_role_table', 6),
(13, '2021_03_13_225251_create_statuses_table', 7),
(14, '2021_03_07_104542_create_order_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `productId` bigint UNSIGNED NOT NULL,
  `userId` bigint UNSIGNED NOT NULL,
  `statusId` bigint UNSIGNED NOT NULL,
  `totalQty` int NOT NULL,
  `rejectQty` int NOT NULL,
  `dateCollection` date DEFAULT NULL,
  `dateReturn` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `productId`, `userId`, `statusId`, `totalQty`, `rejectQty`, `dateCollection`, `dateReturn`) VALUES
(1, '2021-03-14 19:32:31', '2021-03-14 19:32:31', 1, 3, 3, 1, 0, '2021-04-01', '2021-04-02'),
(2, '2021-03-15 00:44:13', '2021-03-15 00:44:13', 1, 3, 2, 5, 0, '2021-03-25', '2021-03-31'),
(3, '2021-03-15 00:47:13', '2021-03-15 00:47:13', 2, 3, 4, 4, 0, NULL, NULL),
(4, '2021-03-15 01:07:50', '2021-03-15 01:07:50', 2, 3, 4, 4, 0, '2021-03-25', '2021-03-31'),
(5, '2021-03-15 01:08:19', '2021-03-15 01:08:19', 3, 3, 2, 4, 0, '2021-03-25', '2021-03-31'),
(6, '2021-03-15 01:20:45', '2021-03-15 01:20:45', 3, 3, 2, 4, 0, '2021-03-25', '2021-03-31'),
(7, '2021-03-15 09:55:18', '2021-03-15 09:55:18', 4, 3, 2, 4, 0, '2021-03-25', '2021-03-31'),
(8, '2021-03-15 10:02:00', '2021-03-15 10:02:00', 3, 3, 2, 3, 0, '2021-03-25', '2021-03-31'),
(9, '2021-03-15 22:22:33', '2021-03-15 22:22:33', 3, 3, 2, 50, 0, '2021-03-25', '2021-03-31'),
(11, '2021-03-15 22:35:38', '2021-03-15 22:35:38', 7, 3, 2, 30, 0, '2021-03-25', '2021-03-31');

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `key`, `controller`, `method`, `created_at`, `updated_at`) VALUES
(4, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'index', NULL, NULL),
(5, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'checklogin', NULL, NULL),
(6, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'successlogin', NULL, NULL),
(7, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'logout', NULL, NULL),
(8, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'feedback', NULL, NULL),
(9, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'newOrder', NULL, NULL),
(10, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'contact', NULL, NULL),
(11, NULL, NULL, 'App\\Http\\Controllers\\UserDataController', 'index', NULL, NULL),
(12, NULL, NULL, 'App\\Http\\Controllers\\UserDataController', 'create', NULL, NULL),
(13, NULL, NULL, 'App\\Http\\Controllers\\UserDataController', 'store', NULL, NULL),
(14, NULL, NULL, 'App\\Http\\Controllers\\UserDataController', 'show', NULL, NULL),
(15, NULL, NULL, 'App\\Http\\Controllers\\UserDataController', 'edit', NULL, NULL),
(16, NULL, NULL, 'App\\Http\\Controllers\\UserDataController', 'update', NULL, NULL),
(17, NULL, NULL, 'App\\Http\\Controllers\\UserDataController', 'destroy', NULL, NULL),
(18, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'registration', NULL, NULL),
(19, NULL, NULL, 'Closure', 'Closure', NULL, NULL),
(20, NULL, NULL, 'App\\Http\\Controllers\\MainController', 'login', NULL, NULL),
(21, NULL, NULL, 'App\\Http\\Controllers\\UserController', 'create', NULL, NULL),
(22, NULL, NULL, 'App\\Http\\Controllers\\UserController', 'registration', NULL, NULL),
(23, NULL, NULL, 'App\\Http\\Controllers\\OrderController', 'vieworders', NULL, NULL),
(24, NULL, NULL, 'App\\Http\\Controllers\\OrderController', 'edit', NULL, NULL),
(25, NULL, NULL, 'App\\Http\\Controllers\\OrderController', 'show', NULL, NULL),
(26, NULL, NULL, 'App\\Http\\Controllers\\ProductController', 'viewproducts', NULL, NULL),
(27, NULL, NULL, 'App\\Http\\Controllers\\ProductController', 'show', NULL, NULL),
(28, NULL, NULL, 'App\\Http\\Controllers\\ProductController', 'neworder1', NULL, NULL),
(29, NULL, NULL, 'App\\Http\\Controllers\\ProductController', 'createorder1', NULL, NULL),
(30, NULL, NULL, 'App\\Http\\Controllers\\OrderController', 'neworder', NULL, NULL),
(31, NULL, NULL, 'App\\Http\\Controllers\\OrderController', 'createorder', NULL, NULL),
(32, NULL, NULL, 'App\\Http\\Controllers\\ProductController', 'newproduct', NULL, NULL),
(33, NULL, NULL, 'App\\Http\\Controllers\\ProductController', 'createproduct', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` int UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
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
(33, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `rejectFee` double(8,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `created_at`, `updated_at`, `name`, `description`, `price`, `rejectFee`) VALUES
(1, NULL, NULL, 'pack 4 towels', NULL, 2.14, 8.54),
(2, NULL, NULL, 'duvet cover', NULL, 1.95, 7.80),
(3, NULL, NULL, 'duvet', NULL, 4.64, 18.54),
(4, NULL, NULL, 'pillow', NULL, 1.85, 7.38),
(5, NULL, NULL, 'table linen', NULL, 1.79, 7.14),
(6, NULL, NULL, 'fitted sheet', NULL, 2.10, 8.40),
(7, NULL, NULL, 'flat sheet', NULL, 2.24, 8.95),
(8, NULL, NULL, 'pillowcase', NULL, 0.80, 3.19),
(9, NULL, NULL, 'base valance', NULL, 2.69, 10.74),
(10, '2021-03-19 14:32:26', '2021-03-19 14:32:26', 'test1', 'test1', 3.00, 9.00),
(11, '2021-03-19 19:23:01', '2021-03-19 19:23:01', 'service1', 'service1', 3.40, 9.50);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'admin', NULL),
(2, 'operator', NULL),
(3, 'customer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'New Order', 'Customer. New order/ renew', NULL, NULL),
(2, 'Luxe.Confirm Order', 'Luxe.Order confirm', NULL, NULL),
(3, 'Luxe.Order delivery', 'Luxe.Order deliver', NULL, NULL),
(4, 'Customer. Order delivery confirm', 'Customer. Order delivery confirmation', NULL, NULL),
(5, 'Customer. Order wash', 'Customer. Order wash', NULL, NULL),
(6, 'Luxe. Collection date&time', 'Luxe. Set up estimated date & time of collection', NULL, NULL),
(7, 'Luxe. Collect& Check', 'Luxe/transport. Collect&check', NULL, NULL),
(8, 'Luxe. Prewash check', 'Luxe. Pre wash checks', NULL, NULL),
(9, 'Customer. Prewash check accept', 'Customer. Pre wash check accept', NULL, NULL),
(10, 'Luxe.Return date&time', 'Luxe. Return. Set up estimated date and time of return', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'John Smith', 'john_smith@gmail.com', NULL, '$2y$10$Zg..gIecETUUGKBsKqCYzeZEURc2I6lvoI/bj4t0msZLHLWUydaO.', 'tXdOmO0u6VyksEK6iLMF8x7dKVvLWFx6k2yNRZROU0xBhhk3sn28bAAHGqVY', '2021-01-18 22:33:11', '2021-01-18 22:33:11', 2),
(3, 'Nicolae Bulat', 'nicolae.bulat@gmail.com', NULL, '$2y$10$1A6bFrktXhytnVS1uyKUFuXRjNNv5DmA8hZ.fCvBrj1BrZlmCezdC', '85uajglf5wCayeO2KqBOitT9pswDNlTzckhfLXZ0Sw6TVXVn52O2i5wpmvqO', '2021-01-22 18:43:44', '2021-01-22 18:43:44', 1),
(4, 'cusromer1', 'customer1@customer1.com', NULL, '$2y$10$Q0NKMpzFc9DxjVCb3o6A4uE5gz4y3s7Vthpyps.FlM4/7kICnYz1q', 'VXdk981SQB', '2021-03-13 20:50:34', '2021-03-13 20:50:34', 3),
(5, 'cusromer2', 'customer2@customer2.com', NULL, '$2y$10$Lmy9hqFpS211dqU7xN698O1LgP7woHA3EVNPvgkUUuIQ9jOJ2hJfO', 'bhbLp5sGjm', '2021-03-13 21:30:53', '2021-03-13 21:30:53', 3),
(6, 'customer3', 'customer3@customer.com', NULL, '$2y$10$SZStI7k/jvg8WJZYJiW/tOYjJKN5IdEbPshgy7DRXcWuMWg6hiClK', 'evwky8yPEA', '2021-03-13 22:18:07', '2021-03-13 22:18:07', 3),
(7, 'customer4', 'customer4@customer.com', NULL, '$2y$10$v1qbpxiQVnaNPH9s/Qo26uNLJmLTRXRRKt5UsY0.tNRt45/l5pm6O', 'DW02tYmyXtfcie9O7TljLZUV91lLg239KibnugN893AXkNrilcGcIY4dAk3D', '2021-03-15 22:03:05', '2021-03-15 22:03:05', 3);

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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_productid_foreign` (`productId`),
  ADD KEY `orders_userid_foreign` (`userId`),
  ADD KEY `orders_statusid_foreign` (`statusId`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_productid_foreign` FOREIGN KEY (`productId`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_statusid_foreign` FOREIGN KEY (`statusId`) REFERENCES `status` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_userid_foreign` FOREIGN KEY (`userId`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
