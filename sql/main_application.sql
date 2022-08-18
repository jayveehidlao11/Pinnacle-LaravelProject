-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 18, 2022 at 07:04 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `main_application`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcement`
--

CREATE TABLE `announcement` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcement`
--

INSERT INTO `announcement` (`id`, `start_date`, `end_date`, `title`, `file`, `content`, `created_at`, `updated_at`) VALUES
(2, '2022-08-17', '2022-08-20', 'demo event', 'images/362387494f6be6613daea643a7706a42.jpg|images/621eb0b827c09dd1804e87bd74f79383.jpg', 'demo content', NULL, '2022-08-17 01:06:04');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `profile_pic` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` date NOT NULL,
  `age` int(11) NOT NULL,
  `birthplace` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalcode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `profile_pic`, `firstname`, `lastname`, `middlename`, `birthday`, `age`, `birthplace`, `gender`, `email`, `phonenumber`, `address`, `postalcode`, `password`, `agreement`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Jayvee', 'Hidlao', 'Obillo', '2000-02-18', 22, 'Antipolo Disctrict Hospital', 'male', 'jayveehidlao11@gmail.com', '09957109043', 'Peace Village Phase 3', '1870', '$2y$10$BQY75DlpOZGWd3/I1oVO6OuwseHpRk97O2nCvfYuEX2359t1ghBKa', 1, '2022-06-05 23:59:10', '2022-08-16 23:59:10'),
(2, NULL, 'post', 'malone', NULL, '1987-03-20', 35, 'Antipolo Disctrict Hospital', 'female', 'postmalone@gmail.com', '09957109043', 'Peace Village Phase 3', '1870', '$2y$10$qSt4Jxi2YLInwI06ebQf0utLy7JvqhJaDxyKuOCTZkE.Ldu3Q7wcy', 1, '2022-08-17 01:13:00', '2022-08-17 01:13:00'),
(3, NULL, 'demo', 'demo', 'demo', '2002-03-18', 20, 'Bagong bayan', 'male', 'demo@gmail.com', '09957109043', 'Peace Village Phase 4', '1870', '$2y$10$Mm1TTrFwlVu1utKv6muGkuvwsio6a1GKQWGm/MyJLOW4C6olFLgXW', 1, '2022-08-17 01:13:05', '2022-08-17 01:13:05'),
(4, NULL, 'try', 'try', NULL, '1986-03-20', 36, 'Antipolo Disctrict Hospital', 'male', 'try@gmail.com', '09957109043', 'Peace Village Phase 3', '1870', '$2y$10$fcxqUoZH3TOjowKVdQF3pO9CgEzPva9sBoq/SU36K1wY6iVNJ/Spq', 1, '2022-08-17 01:21:51', '2022-08-17 01:21:51');

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_26_214236_create__applicants_table', 1),
(6, '2022_08_01_052435_create_announcement_table', 2),
(7, '2022_08_02_172714_add_role_to_users', 3);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `emailVerify_token` varchar(250) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `email_verified_at`, `emailVerify_token`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(41, '2022ADMIN1', 'Pablo Minguito Hidlao', 'paascurep@gmail.com', '2022-08-14 19:36:00', '', '$2y$10$d.a02LctbEAlQkvoCavDdOPLyPva4E/qW3ROnND/HOQ7fAEBt2Sta', NULL, '2022-08-05 13:13:16', '2022-08-05 13:13:16', 'admin'),
(100, '2022A1', 'Jayvee Obillo Hidlao', 'jayveehidlao11@gmail.com', NULL, 'wN1U25XmJFmZHdVH6FAJoFcX6Oog7fsQg7tDkpfvYvuXWWAEmxBtq5vkZDKn', '$2y$10$R2Z7ulmj1wHUbFGrvLaut.rnQtOXrfgM9lJ1/qKjb9mGSuTT.sQxW', NULL, '2022-06-05 23:59:10', '2022-08-16 23:59:10', 'applicant'),
(110, '2022A2', 'post  malone', 'postmalone@gmail.com', NULL, '9j4TV1tV6fdV6xe25J72K8EuiTWYNwThClqFNsV58BGJ9UmOj2qSGiBp2Ieu', '$2y$10$Ahe6tVq08IVkdzZ50TeSY.5WOBAvE9/uqJ0iM9myU4GPmRhtzielS', NULL, '2022-08-17 01:12:56', '2022-08-17 01:12:56', 'applicant'),
(111, '2022A3', 'demo demo demo', 'demo@gmail.com', NULL, 'dsKIeuIDN8B6V8zHKdUk87bJsgT2EYk5VFozMxJSOfU0A2PWLSRSvGnsF0wA', '$2y$10$u2pfmEYdSzCuW1DoKP2tx.pS8buZc9hO0WgMCxv07XtDghIIteaES', NULL, '2022-08-17 01:13:01', '2022-08-17 01:13:01', 'applicant'),
(114, '2022A4', 'try  try', 'try@gmail.com', NULL, 'VLU7jb2JzTjP5FSLNu2ZXlfWRQ6F6BRwTYoEvPzVWRW6ua9twUzsfihwoXKa', '$2y$10$xDmBWTR08u3w1QdHawIifeG7JfUN/uVPc7zYdwVnSIxQ.NA3BJanu', NULL, '2022-08-17 01:21:47', '2022-08-17 01:21:47', 'applicant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcement`
--
ALTER TABLE `announcement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcement`
--
ALTER TABLE `announcement`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
