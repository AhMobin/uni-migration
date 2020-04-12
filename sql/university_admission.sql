-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2020 at 01:28 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university_admission`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `full_name`, `phone_number`, `email_address`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, 'admin@admission.com', NULL, '$2y$10$M5ngnV33wNPRKkdIZp88w.O6qUvcJd7By3ahPYsQVJXMq60hmicUq', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admissions`
--

CREATE TABLE `admissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `uni_choice_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admissions`
--

INSERT INTO `admissions` (`id`, `user_id`, `uni_choice_id`, `payment_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, '2020-03-11 03:04:10', '2020-03-11 03:04:10'),
(2, 2, 4, 2, 1, '2020-03-26 14:11:06', '2020-03-26 14:11:06');

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
-- Table structure for table `hscs`
--

CREATE TABLE `hscs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `hsc_roll` bigint(20) NOT NULL,
  `hsc_registration` bigint(20) NOT NULL,
  `hsc_board` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hsc_result` double(8,2) NOT NULL,
  `hsc_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hscs`
--

INSERT INTO `hscs` (`id`, `user_id`, `hsc_roll`, `hsc_registration`, `hsc_board`, `hsc_group`, `hsc_result`, `hsc_year`, `created_at`, `updated_at`) VALUES
(1, 1, 215698, 1010868615, 'dhaka', 'science', 5.00, '2015', '2020-03-11 02:49:05', '2020-03-11 02:49:05'),
(2, 2, 452424, 42544545442, 'dhaka', 'science', 4.20, '2015', '2020-03-26 13:47:32', '2020-03-26 13:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(24, '2020_03_10_141618_create_users_table', 1),
(25, '2020_03_10_141706_create_password_resets_table', 1),
(26, '2020_03_10_141742_create_failed_jobs_table', 1),
(27, '2020_03_10_141816_create_admins_table', 1),
(28, '2020_03_10_141928_create_uni_categories_table', 1),
(29, '2020_03_10_141951_create_universities_table', 1),
(30, '2020_03_10_154336_create_sscs_table', 1),
(31, '2020_03_10_154354_create_hscs_table', 1),
(32, '2020_03_10_171608_create_university_choices_table', 1),
(33, '2020_03_10_171632_create_payments_table', 1),
(34, '2020_03_10_171651_create_admissions_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_trx_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `user_id`, `payment_number`, `payment_trx_id`, `created_at`, `updated_at`) VALUES
(1, 1, '01636737279', 'JH547SS4O', '2020-03-11 03:04:10', '2020-03-11 03:04:10'),
(2, 2, '01636734785', 'QH747SS44', '2020-03-26 14:11:06', '2020-03-26 14:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `sscs`
--

CREATE TABLE `sscs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `ssc_roll` bigint(20) NOT NULL,
  `ssc_board` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_group` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ssc_result` double(8,2) NOT NULL,
  `ssc_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sscs`
--

INSERT INTO `sscs` (`id`, `user_id`, `ssc_roll`, `ssc_board`, `ssc_group`, `ssc_result`, `ssc_year`, `created_at`, `updated_at`) VALUES
(1, 1, 107585, 'dhaka', 'science', 4.94, '2013', '2020-03-11 02:49:05', '2020-03-11 02:49:05'),
(2, 2, 452421, 'dhaka', 'science', 4.00, '2013', '2020-03-26 13:47:32', '2020-03-26 13:47:32');

-- --------------------------------------------------------

--
-- Table structure for table `universities`
--

CREATE TABLE `universities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `university_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `university_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unicategory_id` bigint(20) UNSIGNED NOT NULL,
  `university_contact` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `universities`
--

INSERT INTO `universities` (`id`, `university_name`, `university_slug`, `unicategory_id`, `university_contact`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Bangladesh University Of Engineering and Technology(BUET)', 'bangladesh-university-of-engineering-and-technologybuet', 1, NULL, 1, '2020-03-11 02:15:04', '2020-03-11 02:15:04'),
(3, 'Chittagong University  of Engineering and Technology(CUET)', 'chittagong-university-of-engineering-and-technologycuet', 1, NULL, 1, '2020-03-11 02:16:18', '2020-03-11 02:16:18'),
(4, 'Rajshahi University Engineering  and Technology(RUET)', 'rajshahi-university-engineering-and-technologyruet', 1, NULL, 1, '2020-03-11 02:30:44', '2020-03-11 02:30:44'),
(5, 'Khulna University of Engineering and Technology(KUET)', 'khulna-university-of-engineering-and-technologykuet', 1, NULL, 1, '2020-03-11 02:31:43', '2020-03-11 02:31:43'),
(6, 'Dhaka University Engineering and Technology(DUET)', 'dhaka-university-engineering-and-technologyduet', 1, NULL, 1, '2020-03-11 02:32:58', '2020-03-11 02:32:58'),
(7, 'Shahjalal University of Science  and Technology (SUST)', 'shahjalal-university-of-science-and-technology-sust', 2, NULL, 1, '2020-03-11 02:36:28', '2020-03-11 02:36:28'),
(8, 'Hajee Mohammad  Danesh Science and Technology University (HSTU)', 'hajee-mohammad-danesh-science-and-technology-university-hstu', 2, NULL, 1, '2020-03-11 02:44:03', '2020-03-11 02:44:03'),
(9, 'Mawlana Bhashani Science and Technology University ( MBSTU)', 'mawlana-bhashani-science-and-technology-university-mbstu', 2, NULL, 1, '2020-03-11 02:46:19', '2020-03-11 02:46:19'),
(10, 'Patuakhali Science and Technology University(PSTU)', 'patuakhali-science-and-technology-universitypstu', 2, NULL, 1, '2020-03-11 02:47:44', '2020-03-11 02:47:44'),
(11, 'Noakhali Science and Technology University(NSTU)', 'noakhali-science-and-technology-universitynstu', 2, NULL, 1, '2020-03-11 02:49:18', '2020-03-11 02:49:18'),
(12, 'Jashore University Of Science and Technology(JUST)', 'jashore-university-of-science-and-technologyjust', 2, NULL, 1, '2020-03-11 02:50:18', '2020-03-11 02:50:18'),
(13, 'Pabna University Of Science andTechnology (PUST)', 'pabna-university-of-science-andtechnology-pust', 2, NULL, 1, '2020-03-11 02:51:39', '2020-03-11 02:51:39'),
(14, 'Bangabandhu Sheikh Mujibur Rahman Science and Technology University(BSMRSTU)', 'bangabandhu-sheikh-mujibur-rahman-science-and-technology-universitybsmrstu', 2, NULL, 1, '2020-03-11 02:52:52', '2020-03-11 02:52:52'),
(15, 'Rangamati Science and Technology University( RMSTU)', 'rangamati-science-and-technology-university-rmstu', 2, NULL, 1, '2020-03-11 02:56:15', '2020-03-11 02:56:15'),
(16, 'Bangamata Sheikh Fojilatunnesa Mujib Science and Technology University(BSFMSTU)', 'bangamata-sheikh-fojilatunnesa-mujib-science-and-technology-universitybsfmstu', 2, NULL, 1, '2020-03-11 02:58:13', '2020-03-11 02:58:13'),
(17, 'Chandpur Science and Technology University ( CSTU)', 'chandpur-science-and-technology-university-cstu', 2, NULL, 1, '2020-03-11 02:59:11', '2020-03-11 02:59:11'),
(18, 'Sunamganj Science and Technology University( SSTU)', 'sunamganj-science-and-technology-university-sstu', 2, NULL, 1, '2020-03-11 03:00:27', '2020-03-11 03:00:27'),
(19, 'Bogura Science and Technology University(BSTU)', 'bogura-science-and-technology-universitybstu', 2, NULL, 1, '2020-03-11 03:01:23', '2020-03-11 03:01:23'),
(20, 'Lakshmipur Science and Technology University(LSTU)', 'lakshmipur-science-and-technology-universitylstu', 2, NULL, 1, '2020-03-11 03:02:37', '2020-03-11 03:02:37'),
(21, 'Bangabandhu Sheikh Mujibur Rahman Digital University  (BDU)', 'bangabandhu-sheikh-mujibur-rahman-digital-university-bdu', 2, NULL, 1, '2020-03-11 03:04:39', '2020-03-11 03:04:39'),
(22, 'Bangladesh Agricultural University(BAU)', 'bangladesh-agricultural-universitybau', 3, NULL, 1, '2020-03-11 04:03:23', '2020-03-11 04:03:23'),
(23, 'Bangabandhu Sheikh Mujibur Rahman Agricultural University(BSMRAU)', 'bangabandhu-sheikh-mujibur-rahman-agricultural-universitybsmrau', 3, NULL, 1, '2020-03-11 04:05:15', '2020-03-11 04:05:15'),
(24, 'Shere-e- Bangla Agricultural University(SAU)', 'shere-e-bangla-agricultural-universitysau', 3, NULL, 1, '2020-03-11 04:06:53', '2020-03-11 04:06:53'),
(25, 'Chittagong Veterinary and Animal Sciences University(CVASU)', 'chittagong-veterinary-and-animal-sciences-universitycvasu', 3, NULL, 1, '2020-03-11 04:08:36', '2020-03-11 04:08:36'),
(26, 'Sylhet Agricultural University(SAU)', 'sylhet-agricultural-universitysau', 3, NULL, 1, '2020-03-11 04:09:34', '2020-03-11 04:09:34'),
(27, 'Khulna Agricultural University(KAU)', 'khulna-agricultural-universitykau', 3, NULL, 1, '2020-03-11 04:10:41', '2020-03-11 04:10:41'),
(28, 'Habiganj Agricultural University(HAU)', 'habiganj-agricultural-universityhau', 3, NULL, 1, '2020-03-11 04:11:40', '2020-03-11 04:11:40'),
(29, 'University of Dhaka(DU)', 'university-of-dhakadu', 4, NULL, 1, '2020-03-11 04:20:05', '2020-03-11 04:20:05'),
(30, 'University of Rajshahi (RU)', 'university-of-rajshahi-ru', 4, NULL, 1, '2020-03-11 04:20:55', '2020-03-11 04:20:55'),
(31, 'University of Chittagong(CU)', 'university-of-chittagongcu', 4, NULL, 1, '2020-03-11 04:21:58', '2020-03-11 04:21:58'),
(32, 'Jahangirnagar University(JU)', 'jahangirnagar-universityju', 4, NULL, 1, '2020-03-11 04:22:43', '2020-03-11 04:22:43'),
(33, 'Islamic University ,  Bangladesh (IU)', 'islamic-university-bangladesh-iu', 4, NULL, 1, '2020-03-11 04:24:09', '2020-03-11 04:24:09'),
(34, 'Khulna University(KU)', 'khulna-universityku', 4, NULL, 1, '2020-03-11 04:25:18', '2020-03-11 04:25:18'),
(35, 'Jagannath University(JnU)', 'jagannath-universityjnu', 4, NULL, 1, '2020-03-11 04:26:05', '2020-03-11 04:26:05'),
(36, 'Jatiya Kabi Kazi Nazrul Islam University(JKKNIU)', 'jatiya-kabi-kazi-nazrul-islam-universityjkkniu', 4, NULL, 1, '2020-03-11 04:27:13', '2020-03-11 04:27:13'),
(37, 'Comilla University(CoU)', 'comilla-universitycou', 4, NULL, 1, '2020-03-11 04:28:05', '2020-03-11 04:28:05'),
(38, 'Begum Rokeya University(BRU)', 'begum-rokeya-universitybru', 4, NULL, 1, '2020-03-11 04:29:38', '2020-03-11 04:29:38'),
(39, 'Bangladesh University of Professionals(BUP)', 'bangladesh-university-of-professionalsbup', 4, NULL, 1, '2020-03-11 04:30:47', '2020-03-11 04:30:47'),
(40, 'University of Barisal(BU)', 'university-of-barisalbu', 4, NULL, 1, '2020-03-11 04:31:48', '2020-03-11 04:31:48'),
(41, 'Rabindra University, Bangladesh(RUB)', 'rabindra-university-bangladeshrub', 4, NULL, 1, '2020-03-11 04:33:50', '2020-03-11 04:33:50'),
(42, 'Sheikh Hasina University (SHU)', 'sheikh-hasina-university-shu', 4, NULL, 1, '2020-03-11 04:34:43', '2020-03-11 04:34:43'),
(43, 'Bangabandhu Sheikh Mujibur Rahman University( BSMRU)', 'bangabandhu-sheikh-mujibur-rahman-university-bsmru', 4, NULL, 1, '2020-03-11 04:35:53', '2020-03-11 04:35:53'),
(44, 'Bangladesh University of Textiles(BUTEX)', 'bangladesh-university-of-textilesbutex', 5, NULL, 1, '2020-03-11 04:42:26', '2020-03-11 04:42:26'),
(45, 'Bangabandhu Sheikh Mujibur Rahman Maritime University(BSMRMU)', 'bangabandhu-sheikh-mujibur-rahman-maritime-universitybsmrmu', 5, NULL, 1, '2020-03-11 04:43:51', '2020-03-11 04:43:51'),
(46, 'Bangabandhu  Sheikh Mujibur Rahman Aviation and Aerospace University(BSMRAAU)', 'bangabandhu-sheikh-mujibur-rahman-aviation-and-aerospace-universitybsmraau', 5, NULL, 1, '2020-03-11 04:45:50', '2020-03-11 04:45:50');

-- --------------------------------------------------------

--
-- Table structure for table `university_choices`
--

CREATE TABLE `university_choices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `first_choice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `second_choice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `third_choice` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `university_choices`
--

INSERT INTO `university_choices` (`id`, `user_id`, `first_choice`, `second_choice`, `third_choice`, `created_at`, `updated_at`) VALUES
(1, 1, 'Bangladesh University Of Engineering and Technology(BUET)', 'Shahjalal University of Science  and Technology (SUST)', 'University of Dhaka(DU)', '2020-03-11 03:04:10', '2020-03-11 03:04:10'),
(4, 2, 'University of Dhaka(DU)', 'Bangabandhu Sheikh Mujibur Rahman University( BSMRU)', 'Jagannath University(JnU)', '2020-03-26 14:11:06', '2020-03-26 14:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `uni_categories`
--

CREATE TABLE `uni_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `uni_categories`
--

INSERT INTO `uni_categories` (`id`, `category_name`, `category_slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Engineering University', 'engineering-university', 1, '2020-03-11 02:50:29', '2020-03-11 02:50:29'),
(2, 'Science And Technology', 'science-and-technology', 1, '2020-03-11 02:50:55', '2020-03-11 02:50:55'),
(3, 'Agricultural University', 'agricultural-university', 1, '2020-03-11 02:51:05', '2020-03-11 02:51:05'),
(4, 'General University', 'general-university', 1, '2020-03-11 02:51:17', '2020-03-11 02:51:17'),
(5, 'Specialised University', 'specialised-university', 1, '2020-03-11 02:51:31', '2020-03-11 02:51:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `phone_number`, `email_address`, `email_verified_at`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Abu Horaira Mobin', '01620327185', 'ahmobin1515@gmail.com', NULL, '$2y$10$V59za3t6.ZuogtYAhoD9h.xrBfzDARijdjem8LArdRU9sGBUnfBxa', '2020-03-11 02:48:13', '2020-03-11 02:48:13'),
(2, 'Dr Mohammad Nurul Ashraf', '0162452745', 'nurul@mail.com', NULL, '$2y$10$0a/HVLv5CfoUSOxo5wWBOuRys3n1AAVIl8hnxKotm4bo2b92OrbSK', '2020-03-26 13:46:44', '2020-03-26 13:46:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_address_unique` (`email_address`);

--
-- Indexes for table `admissions`
--
ALTER TABLE `admissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admissions_user_id_unique` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hscs`
--
ALTER TABLE `hscs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hscs_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `hscs_hsc_roll_unique` (`hsc_roll`),
  ADD UNIQUE KEY `hscs_hsc_registration_unique` (`hsc_registration`);

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
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payments_user_id_unique` (`user_id`);

--
-- Indexes for table `sscs`
--
ALTER TABLE `sscs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sscs_user_id_unique` (`user_id`),
  ADD UNIQUE KEY `sscs_ssc_roll_unique` (`ssc_roll`);

--
-- Indexes for table `universities`
--
ALTER TABLE `universities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `universities_unicategory_id_index` (`unicategory_id`);

--
-- Indexes for table `university_choices`
--
ALTER TABLE `university_choices`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `university_choices_user_id_unique` (`user_id`);

--
-- Indexes for table `uni_categories`
--
ALTER TABLE `uni_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`),
  ADD UNIQUE KEY `users_email_address_unique` (`email_address`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admissions`
--
ALTER TABLE `admissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hscs`
--
ALTER TABLE `hscs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sscs`
--
ALTER TABLE `sscs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `universities`
--
ALTER TABLE `universities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `university_choices`
--
ALTER TABLE `university_choices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uni_categories`
--
ALTER TABLE `uni_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hscs`
--
ALTER TABLE `hscs`
  ADD CONSTRAINT `hscs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sscs`
--
ALTER TABLE `sscs`
  ADD CONSTRAINT `sscs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `universities`
--
ALTER TABLE `universities`
  ADD CONSTRAINT `universities_unicategory_id_foreign` FOREIGN KEY (`unicategory_id`) REFERENCES `uni_categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
