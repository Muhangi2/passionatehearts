-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2024 at 02:40 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phmdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) NOT NULL,
  `category` enum('skills','education','financial','health') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `photo`, `category`, `created_at`, `updated_at`) VALUES
(3, 'uploads/teams/35c67880568968b5ea5bf76c4bb0a5ff.jpg', 'skills', '2024-08-09 00:41:23', '2024-08-09 00:41:23'),
(4, 'uploads/teams/c3838ddeab2e2b830be8840f87904267.jpg', 'financial', '2024-08-09 00:42:15', '2024-08-09 00:42:15'),
(5, 'uploads/teams/193e2911527cb975c4eb7adaf0064944.jpg', 'health', '2024-08-09 00:43:44', '2024-08-09 00:43:44'),
(6, 'uploads/teams/839556d1d047067efb3c54691e597091.jpg', 'skills', '2024-08-09 00:48:42', '2024-08-09 00:48:42'),
(7, 'uploads/teams/21a3d732406d7f6ee7a26f9854c23346.jpg', 'financial', '2024-08-09 01:09:04', '2024-08-09 01:09:04'),
(8, 'uploads/teams/e28f4275fd07f56ad24e2dab65d9b90e.jpg', 'financial', '2024-08-09 01:09:34', '2024-08-09 01:09:34'),
(9, 'uploads/teams/7cf06b02b1b1e22b36307f14de3e270a.jpg', 'education', '2024-08-09 01:10:01', '2024-08-09 01:10:01'),
(10, 'uploads/teams/85c68a7b8ccf8d85173f5f7f5b75b2f8.jpg', 'education', '2024-08-09 01:10:40', '2024-08-09 01:10:40'),
(11, 'uploads/teams/d8660d7b0d6ab4680ac29e508181c6a7.jpg', 'education', '2024-08-09 01:12:28', '2024-08-09 01:12:28'),
(12, 'uploads/teams/362e9eefab59252a3e4d9f872f467b06.jpg', 'education', '2024-08-09 19:06:08', '2024-08-09 19:06:08'),
(13, 'uploads/teams/1941c5b4c45816fa75ffe002200ee13a.jpg', 'skills', '2024-08-09 19:07:10', '2024-08-09 19:07:10'),
(14, 'uploads/teams/20e81128f8f0249be873f0fa33683090.jpg', 'financial', '2024-08-09 19:08:03', '2024-08-09 19:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_08_04_120441_create_projects_table', 1),
(5, '2024_08_04_172547_create_blogs_table', 1),
(6, '2024_08_05_195257_create_teams_table', 2),
(7, '2024_08_08_155824_create_galleries_table', 3),
(8, '2024_08_08_165600_create_galleries_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Kyalimpa Gawudensiya\'s Passionate Heart Story', 'Kyalimpa Gawudensiya faced immense hardship after being widowed with seven children. Moving to Rwampara, Rutoma Bagahwe, she persevered through challenging circumstances, dedicating her life to caring for her family and seeking hope.', 'uploads/projects/782aaf40ebb287d47ed8ac78b453f2d2.jpg', '2024-08-06 21:39:54', '2024-08-06 21:39:54'),
(5, 'Phoebe Korugeyendo\'s Passionate Heart Story', 'Phoebe Korugeyendo. Born in Bulingo, Uganda, Phoebe married her husband Mpirwe Jackson at the young age of 20. Together they built a life and a family, welcoming seven children. However, tragedy struck twice, taking the lives of their two youngest, Kyasimile Adrine and Mastiko Grace.\r\nLife became even more challenging when Phoebe\'s husband passed away at the age of 50. Left alone to care for their five remaining children – Tusiime Mpirwe, Maureen, Alex Mukunde, and Karugaba Francis – and three grandchildren, Phoebe found herself struggling to make ends meet. To add to the hardship, her husband had sold their plot of land, leaving them without a secure home.\r\nOn the brink of despair, Phoebe was met by Passionate Hearts Ministries, an organization, dedicated to empowering disadvantaged families, which supported Phoebe and her children.\r\n\"Passionate Hearts has really done me well,\" Phoebe says with heartfelt gratitude. \"They feed me. My children are well fed.\"\r\nThe food distribution program ensured that Phoebe\'s family wouldn\'t go hungry, alleviating a massive burden and allowing her to focus on her children\'s well-being. But Passionate Hearts Ministries\' impact goes beyond just food. Recognizing the importance of education in breaking the cycle of poverty, the organization has also provided educational opportunities for Phoebe\'s children. Two of them are currently enrolled in school, thanks to Passionate Hearts Ministries\' support.\r\n\"They are both happy and I want to thank Passionate Hearts from the bottom of my heart,\" Phoebe beams.\r\nPassionate Hearts Ministries has not only provided Phoebe\'s family with basic necessities and education, but also hope for a brighter future. Empowered by their support, Phoebe has a vision for her family\'s future.\r\n\"My goal is to find decent work for myself, like maybe making donuts,\" Phoebe shares. \"This way, I can earn money and save up. In the future, I\'d love to buy a plot of land and build a house for myself and my children. Even better, this same business could potentially help me raise money to pay for their school fees.\"\r\n', 'uploads/projects/47c415b485f9a8384fe61f7f7cd975ad.jpg', '2024-08-06 21:45:34', '2024-08-06 21:45:34'),
(6, 'Jovanice Bashemeire\'s Passionate Heart Story', 'At 75, widow Jovanice Bashemeire faced immense hardship. Passionate Hearts Ministries provided her family a home and educational support. Jovanice dreams of educating her grandchildren and learning a skill to sustain them.', 'uploads/projects/1d9504db49b18f3ee7006bd1c6411b4d.jpg', '2024-08-06 21:53:55', '2024-08-06 21:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('G6Ws83AfqyX3IlXksnLmiWPGgl85ppxnRGgqXWOV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiNVM0Nm1GRWtxSlpiQUhlVkQ2c3QxRmR6NTVlTzZqdjBhSGhqZ1czTCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9oaXN0b3J5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1723206756),
('LR7uCTWDsTmLTNQ24pOrSUbQJKU3etawEenbn5Gl', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoibkNoUjYzbHo3cVlCMXEyV1pqa2p1SnRXbXdGeGJJZGpaeWs0OW4yMCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9qZWN0LzYiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1723184347),
('OLnq7HGd1Nc4MM5GjmUWNHxpBx5Qmqt63TGExgMz', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiZDFBbU5kQ0tWcFlvRUxjRzNrUVlJOG5tRDVZbEMxZU9nMkhRTkJMViI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC90ZWFtIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1723182790),
('YrF1bGj2l4Iy3RNZEij06WbKTC7NjWPRE9Anuy5i', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/127.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSEpyVWhIcFM3Tk1ZN0pOQklkZkVlQ1prTU5hdFFYanoxZGd2MFhlNSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9qZWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1723206444);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `photo`, `name`, `position`, `description`, `created_at`, `updated_at`) VALUES
(14, 'uploads/teams/8e07b0839c210a7f5262b641a91a0fa1.jpg', 'ainemukama', 'manager', ' must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful.', '2024-08-07 00:12:06', '2024-08-07 00:12:06'),
(28, 'uploads/teams/8c669e76ae0017f2dd1c64c87c8c3944.jpg', 'John Doe', 'Volunteer', 'Understanding the importance of giving back to society begins with embracing the philosophy of compassion and service. This philosophy is rooted in the belief that every individual has a role to play in uplifting the community. Compassion, the foundation of this philosophy, drives us to connect with others\' suffering and respond with kindness and empathy. Service, on the other hand, translates this compassion into action. By serving others, we fulfill a deeper purpose, enriching both our lives and the lives of those around us. It is through this lens that giving back becomes not just an obligation, but a meaningful pursuit that defines our humanity.', '2024-08-09 10:55:20', '2024-08-09 10:55:20'),
(29, 'uploads/teams/ebce496cb407046cdf901bfacf501ec3.jpg', 'Alice Smith', 'Volunteer', 'Helping the poor and marginalized is often seen as providing material support—food, shelter, clothing—but it goes far beyond that. True giving involves understanding the unique challenges faced by those in need and offering support that empowers them to overcome these obstacles. This could mean providing education, skills training, or opportunities for employment. It might involve offering emotional support or advocating for systemic changes that address the root causes of poverty. By broadening our perspective on what it means to help, we can make a more lasting impact on the lives of the less fortunate', '2024-08-09 10:58:54', '2024-08-09 10:58:54'),
(30, 'uploads/teams/ac264d98b50af1fe27f6bd65f5501177.jpg', 'David Brown', 'Volunteer', 'Generosity is a powerful tool for uplifting humanity. It is an expression of our shared responsibility to ensure that everyone has the opportunity to live with dignity and hope. Generosity goes beyond simply giving what we have in excess; it requires us to give of ourselves—our time, energy, and resources—to create a more just and equitable world. When we give with an open heart, we inspire others to do the same, creating a ripple effect that can transform entire communities. Generosity, when practiced collectively, has the potential to reshape society by addressing inequality and fostering a culture of care.', '2024-08-09 10:59:39', '2024-08-09 10:59:39'),
(31, 'uploads/teams/5a56e8057f5585c28aebbd4051aca717.jpg', 'Clark Kent', 'Volunteer', 'Building meaningful connections is at the heart of effective giving. When we connect with those we seek to help, we gain a deeper understanding of their needs and aspirations. These connections allow us to approach giving not from a place of pity, but from a place of solidarity and partnership. By engaging with the community, listening to their stories, and involving them in the process of change, we ensure that our efforts are truly impactful. Meaningful connections also remind us that giving is not a one-way street; it is a reciprocal exchange that enriches both the giver and the receiver.', '2024-08-09 11:00:52', '2024-08-09 11:00:52'),
(32, 'uploads/teams/6b108dbf1785c97f3ea457f9a919bfdf.jpg', 'Peter Parker', 'Volunteer', 'Purposeful work is central to the journey of giving back. Whether through volunteering, advocacy, or philanthropy, our efforts must be guided by a clear sense of purpose. This purpose gives direction to our actions and ensures that they align with our values and the needs of the community. Purposeful endeavors are sustainable because they are fueled by passion and commitment, rather than obligation or guilt. When we engage in work that resonates with our sense of purpose, we find fulfillment in the act of giving, knowing that we are contributing to something larger than ourselves.', '2024-08-09 11:02:46', '2024-08-09 11:02:46');

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
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
