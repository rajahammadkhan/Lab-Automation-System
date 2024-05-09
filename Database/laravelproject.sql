-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2021 at 06:02 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravelproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `approveds`
--

CREATE TABLE `approveds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `erp_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `erp_user_id`, `erp_status`, `erp_category_name`, `created_at`, `updated_at`) VALUES
(3, 2, '1', 'Pharmacy', '2021-10-20 18:02:35', '2021-10-20 18:02:35'),
(6, 2, '1', 'Agriculture', '2021-10-20 18:15:53', '2021-10-20 18:15:53');

-- --------------------------------------------------------

--
-- Table structure for table `deshbords`
--

CREATE TABLE `deshbords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_09_23_032138_create_deshbords_table', 1),
(6, '2021_10_09_032528_create_products_table', 1),
(7, '2021_10_11_025004_create_categories_table', 1),
(9, '2021_10_11_171711_create_testers_table', 1),
(10, '2021_10_12_023929_create_approveds_table', 1),
(11, '2021_10_12_024111_create_rejecteds_table', 1),
(12, '2021_10_12_030143_create_user_details_table', 1),
(13, '2021_10_12_030206_create_testing_requests_table', 1),
(14, '2021_10_12_030448_create_profiles_table', 1),
(15, '2014_10_12_000000_create_users_table', 2),
(18, '2021_10_11_093144_create_testings_table', 3);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `erp_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_sales_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_short_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_long_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `erp_user_id`, `erp_status`, `erp_category_name`, `erp_product_name`, `erp_product_code`, `erp_product_price`, `erp_sales_price`, `erp_product_image`, `erp_short_description`, `erp_long_description`, `created_at`, `updated_at`) VALUES
(7, 2, '1', 'Pharmacy', 'Toddler', 'xxx', '4500', '3500', '1634728111886.jpg', 'they probably won’t make much difference to your health beyond a placebo effect.', '<p>A large number claim some kind of benefit to either health or appearance, or both. The cosmetics industry has been on to this confusion for a long time, hinting that their magic ingredient(s) will improve some aspect of health, often skin, as well as make you look good, be filled with energy etc</p>', '2021-10-20 18:08:31', '2021-10-20 18:08:31'),
(8, 2, '1', 'Agriculture', 'Coragan', 'xyz', '5000', '4500', '1634728664518.jpg', 'We focus on delivering products that are novel and offer sustainable solutions for our customers and the community.', '<p>Acelan is a neonicotinoid insecticide which controls sucking pests especially Aphids and White Fly by interrupting the brain signals, causing paralysis and then extermination</p>', '2021-10-20 18:17:44', '2021-10-20 18:17:44');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rejecteds`
--

CREATE TABLE `rejecteds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testers`
--

CREATE TABLE `testers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testings`
--

CREATE TABLE `testings` (
  `id` int(10) UNSIGNED NOT NULL,
  `erp_user_id` int(10) UNSIGNED NOT NULL,
  `erp_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `erp_category_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_request_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_hidden_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_rejected` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_suggestion_category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_suggestion_product` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_requirement_need` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_general_feedback` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_testing_request` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testings`
--

INSERT INTO `testings` (`id`, `erp_user_id`, `erp_status`, `erp_category_name`, `erp_product_name`, `erp_request_type`, `erp_hidden_type`, `erp_rejected`, `erp_suggestion_category`, `erp_suggestion_product`, `erp_requirement_need`, `erp_general_feedback`, `erp_testing_request`, `created_at`, `updated_at`) VALUES
(3, 2, '1', 'Pharmacy', 'Toddler', 'Request', 'approved', NULL, NULL, NULL, NULL, NULL, '<p>Request to test the product. ...</p>', '2021-10-20 18:18:50', '2021-10-20 18:36:25'),
(4, 2, '1', 'Agriculture', 'Coragan', 'Suggestion', 'rejected', '<p>There are too many similar products.</p>', 'The exact specifications of the product.', 'Good Product', 'The shipping address you want the sample delivered to.', 'Request for a model number and company name tag so you can differentiate.', NULL, '2021-10-20 18:19:46', '2021-10-20 18:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `testing_requests`
--

CREATE TABLE `testing_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `erp_cell_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_alternative_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `erp_country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `erp_cell_number`, `erp_alternative_number`, `erp_address`, `erp_country`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Raja Hammad', 'raja123@gmail.com', NULL, 1, '$2y$10$13RBABfdMGubosus2uN.M.PE1WMFZWz05YObO2RMHqRMxamRC1jt6', '03101010101', '03202020201', 'Karachi', 'Pakistan', NULL, '2021-10-16 10:38:30', '2021-10-20 17:25:39'),
(2, 'Aptech', 'aptech@gmail.com', NULL, 0, '$2y$10$UfDJIbkZ4aXXtRouEfV2BubJoWGzIgdSYurlMwMnC2b4BojdjromG', NULL, NULL, NULL, NULL, NULL, '2021-10-18 09:31:59', '2021-10-18 09:31:59'),
(3, 'fahad', 'fahad@gmail.com', NULL, 0, '$2y$10$leO8DI/oDT6Y8XW/YvCxVuY1cFI8YcWP0QDef/fORjTNAvDwFHrdK', NULL, NULL, NULL, NULL, NULL, '2021-10-20 13:28:19', '2021-10-20 13:28:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approveds`
--
ALTER TABLE `approveds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `deshbords`
--
ALTER TABLE `deshbords`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rejecteds`
--
ALTER TABLE `rejecteds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testers`
--
ALTER TABLE `testers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `testers_email_unique` (`email`);

--
-- Indexes for table `testings`
--
ALTER TABLE `testings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `testings_erp_user_id_foreign` (`erp_user_id`);

--
-- Indexes for table `testing_requests`
--
ALTER TABLE `testing_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approveds`
--
ALTER TABLE `approveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `deshbords`
--
ALTER TABLE `deshbords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rejecteds`
--
ALTER TABLE `rejecteds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testers`
--
ALTER TABLE `testers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testings`
--
ALTER TABLE `testings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `testing_requests`
--
ALTER TABLE `testing_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `testings`
--
ALTER TABLE `testings`
  ADD CONSTRAINT `testings_erp_user_id_foreign` FOREIGN KEY (`erp_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
