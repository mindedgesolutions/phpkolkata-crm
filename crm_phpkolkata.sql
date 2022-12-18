-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2022 at 05:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crm_phpkolkata`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_master`
--

CREATE TABLE `access_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `p_list` tinyint(1) NOT NULL DEFAULT 0,
  `p_read` tinyint(1) NOT NULL DEFAULT 0,
  `p_write` tinyint(1) NOT NULL DEFAULT 0,
  `p_delete` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `access_master`
--

INSERT INTO `access_master` (`id`, `user_id`, `menu_id`, `p_list`, `p_read`, `p_write`, `p_delete`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, 1, 1, 1, '2022-12-06 18:02:19', '2022-12-06 18:02:19'),
(2, 1, 3, 1, 1, 1, 1, '2022-12-06 18:02:19', '2022-12-06 18:02:19'),
(3, 1, 4, 1, 1, 1, 1, '2022-12-06 18:02:19', '2022-12-06 18:02:19'),
(4, 2, 2, 1, 1, 1, 1, '2022-12-06 18:03:17', '2022-12-06 18:03:17'),
(5, 2, 3, 1, 1, 1, 1, '2022-12-06 18:03:17', '2022-12-06 18:03:17'),
(6, 2, 4, 1, 1, 1, 1, '2022-12-06 18:03:17', '2022-12-06 18:03:17'),
(7, 3, 2, 1, 1, 1, 1, '2022-12-06 18:03:44', '2022-12-07 12:37:14'),
(8, 3, 3, 1, 1, 1, 1, '2022-12-06 18:03:44', '2022-12-07 12:37:14'),
(9, 3, 4, 1, 1, 1, 1, '2022-12-06 18:03:44', '2022-12-07 12:37:14'),
(10, 4, 2, 1, 1, 1, 1, '2022-12-06 18:04:08', '2022-12-06 18:04:08'),
(11, 4, 3, 1, 1, 1, 1, '2022-12-06 18:04:08', '2022-12-06 18:04:08'),
(12, 4, 4, 1, 1, 1, 1, '2022-12-06 18:04:08', '2022-12-06 18:04:08'),
(13, 3, 5, 1, 0, 0, 0, '2022-12-07 12:37:02', '2022-12-07 12:37:14');

-- --------------------------------------------------------

--
-- Table structure for table `admin_master`
--

CREATE TABLE `admin_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` smallint(6) NOT NULL DEFAULT 2,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `deal_master`
--

CREATE TABLE `deal_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `deal_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deal_date` datetime NOT NULL,
  `lead_owner` int(11) NOT NULL,
  `owner_type` smallint(6) NOT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
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
-- Table structure for table `id_store`
--

CREATE TABLE `id_store` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `last_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_num` int(11) DEFAULT NULL,
  `id_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `id_store`
--

INSERT INTO `id_store` (`id`, `last_id`, `id_num`, `id_type`, `created_at`, `updated_at`) VALUES
(1, '0004', 4, 'lead', '2022-12-07 09:00:57', '2022-12-07 09:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `lead_followup_master`
--

CREATE TABLE `lead_followup_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` int(11) DEFAULT NULL,
  `action_type` smallint(6) DEFAULT NULL,
  `annotation` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `next_follow_up_date` date DEFAULT NULL,
  `lead_status` smallint(6) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `action_date` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_followup_master`
--

INSERT INTO `lead_followup_master` (`id`, `lead_id`, `action_type`, `annotation`, `next_follow_up_date`, `lead_status`, `user_id`, `action_date`, `active`, `created_at`, `updated_at`) VALUES
(1, 1, 24, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2022-12-08', 21, 1, '2022-12-07 14:35:43', 1, '2022-12-07 09:05:43', '2022-12-07 09:05:43'),
(2, 1, 24, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', '2022-12-08', 21, 1, '2022-12-07 14:37:08', 1, '2022-12-07 09:07:08', '2022-12-07 09:07:08'),
(3, 1, 24, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', NULL, 20, 1, '2022-12-07 14:37:48', 1, '2022-12-07 09:07:48', '2022-12-07 09:07:48'),
(4, 1, 24, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', NULL, 20, 1, '2022-12-07 14:42:59', 1, '2022-12-07 09:12:59', '2022-12-07 09:12:59'),
(5, 2, 24, 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', NULL, 20, 1, '2022-12-07 20:01:25', 1, '2022-12-07 14:31:25', '2022-12-07 14:31:25');

-- --------------------------------------------------------

--
-- Table structure for table `lead_master`
--

CREATE TABLE `lead_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lead_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lead_date` datetime DEFAULT NULL,
  `lead_owner` int(11) NOT NULL,
  `owner_type` int(1) DEFAULT NULL,
  `business_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_person` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `whatsapp_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `assign_to` int(11) DEFAULT NULL,
  `notes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lead_type` smallint(6) DEFAULT NULL,
  `action` smallint(6) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `lead_status` int(3) DEFAULT 16,
  `post_followup_status` smallint(3) NOT NULL DEFAULT 21,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lead_master`
--

INSERT INTO `lead_master` (`id`, `lead_id`, `lead_date`, `lead_owner`, `owner_type`, `business_name`, `location`, `contact_person`, `job_title`, `contact_no`, `whatsapp_no`, `email`, `lead_source`, `assign_to`, `notes`, `lead_type`, `action`, `active`, `lead_status`, `post_followup_status`, `created_at`, `updated_at`) VALUES
(1, '0001', '2022-12-07 14:30:57', 4, 2, 'Test business 1', 'Test location 1', 'Test contact', 'Test job 1', '9830098301', '9830098301', 'test1@test.com', 'Test source 1', 1, NULL, 5, 9, 1, 17, 20, '2022-12-07 09:00:57', '2022-12-07 09:12:59'),
(2, '0002', '2022-12-07 14:33:21', 4, 2, 'Test business 2', 'Test location 2', 'Test contact', 'Test job 2', '9830098302', '9830098302', 'test2@test.com', 'Test source 2', 1, NULL, 5, 9, 1, 17, 20, '2022-12-07 09:03:21', '2022-12-07 14:31:25'),
(3, '0003', '2022-12-07 14:33:57', 4, 2, 'Test business 3', 'Test location 3', 'Test contact', 'Test job 3', '9830098303', '9830098303', 'test3@test.com', 'Test source 3', 1, NULL, 6, 10, 1, 16, 21, '2022-12-07 09:03:57', '2022-12-07 09:03:57'),
(4, '0004', '2022-12-07 14:34:50', 4, 2, 'Test business 4', 'Test location 4', 'Test contact', 'Test job 4', '9830098304', '9830098304', 'test4@test.com', 'Test source 4', 2, NULL, 6, 10, 1, 16, 21, '2022-12-07 09:04:50', '2022-12-07 09:04:50');

-- --------------------------------------------------------

--
-- Table structure for table `menu_master`
--

CREATE TABLE `menu_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `menu` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` smallint(6) DEFAULT NULL,
  `has_child` tinyint(1) NOT NULL DEFAULT 0,
  `route` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_master`
--

INSERT INTO `menu_master` (`id`, `menu`, `parent_id`, `has_child`, `route`, `active`, `created_at`, `updated_at`) VALUES
(1, 'All users', NULL, 1, NULL, 1, NULL, NULL),
(2, 'Admin', 1, 0, 'admin/list', 1, NULL, NULL),
(3, 'User', 1, 0, 'user/list', 1, NULL, NULL),
(4, 'Leads', NULL, 0, 'lead/list', 1, NULL, NULL),
(5, 'Deals', NULL, 1, NULL, 1, NULL, NULL),
(6, 'Approval Pending', 5, 0, 'deal/pending/list', 1, NULL, NULL),
(7, 'Active Deals', 5, 0, 'deal/active/list', 1, NULL, NULL);

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2020_05_21_100000_create_teams_table', 1),
(7, '2020_05_21_200000_create_team_user_table', 1),
(8, '2020_05_21_300000_create_team_invitations_table', 1),
(9, '2022_11_30_130330_create_sessions_table', 1),
(10, '2022_11_30_131106_create_admin_models_table', 1),
(11, '2022_11_30_131959_create_type_models_table', 1),
(12, '2022_11_30_191902_create_menu_models_table', 1),
(13, '2022_11_30_195807_create_access_models_table', 1),
(14, '2022_11_30_225245_create_lead_models_table', 1),
(15, '2022_12_01_113142_create_id_store_models_table', 1),
(16, '2022_12_01_232821_create_lead_followup_models_table', 1),
(17, '2022_12_03_030650_create_table_fields_models_table', 1),
(18, '2022_12_07_200830_create_deal_models_table', 2);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('AEnfrMmtPSe7gUpxRl086yZh8QQQUG6iUEbusePD', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiQjA2Q0plUEpLemlPZzRNczdRTVNxWmZ3NWFjcTdyNTdVYkhrQ0R1YSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJuZXciO2E6MDp7fXM6Mzoib2xkIjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kZWFsL3BlbmRpbmcvMi92aWV3Ijt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRNTTVOTDZ1SDkvU20wMmpyWFdURUNPOEdvTjRnUkFQTWt5YzRqV3hCWGl1WnptcXZtRjlVaSI7fQ==', 1670429367);

-- --------------------------------------------------------

--
-- Table structure for table `table_fields_master`
--

CREATE TABLE `table_fields_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `table_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `field_label` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `table_fields_master`
--

INSERT INTO `table_fields_master` (`id`, `table_name`, `field`, `field_label`, `active`, `created_at`, `updated_at`) VALUES
(1, 'lead_master', 'lead_id', 'Lead ID', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(2, 'lead_master', 'lead_date', 'Lead Date', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(3, 'lead_master', 'lead_owner', 'Lead Owner', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(4, 'lead_master', 'owner_type', 'Owner Type', 0, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(5, 'lead_master', 'business_name', 'Business Name', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(6, 'lead_master', 'location', 'Location', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(7, 'lead_master', 'contact_person', 'Contact Person', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(8, 'lead_master', 'job_title', 'Job Title', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(9, 'lead_master', 'contact_no', 'Contact No', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(10, 'lead_master', 'whatsapp_no', 'Whatsapp No', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(11, 'lead_master', 'email', 'Email', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(12, 'lead_master', 'lead_source', 'Lead Source', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(13, 'lead_master', 'assign_to', 'Assign To', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(14, 'lead_master', 'notes', 'Notes', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(15, 'lead_master', 'lead_type', 'Lead Type', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(16, 'lead_master', 'action', 'Action', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(17, 'lead_master', 'active', 'Active', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(18, 'lead_master', 'created_at', 'Created At', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14'),
(19, 'lead_master', 'updated_at', 'Updated At', 1, '2022-12-02 16:14:14', '2022-12-02 16:14:14');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_team` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `user_id`, `name`, `personal_team`, `created_at`, `updated_at`) VALUES
(1, 1, 'Souvik\'s Team', 1, '2022-12-06 18:00:18', '2022-12-06 18:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `team_invitations`
--

CREATE TABLE `team_invitations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `team_user`
--

CREATE TABLE `team_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_master`
--

CREATE TABLE `type_master` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` smallint(6) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_master`
--

INSERT INTO `type_master` (`id`, `type`, `parent_id`, `active`, `created_at`, `updated_at`) VALUES
(1, 'User type', NULL, 1, '2022-11-30 07:55:01', '2022-11-30 07:55:01'),
(2, 'Admin', 1, 1, '2022-11-30 07:55:01', '2022-11-30 07:55:01'),
(3, 'User', 1, 1, '2022-11-30 07:55:01', '2022-11-30 07:55:01'),
(4, 'Lead type', NULL, 1, '2022-11-30 12:03:38', '2022-11-30 12:03:38'),
(5, 'Hot', 4, 1, '2022-11-30 12:03:38', '2022-11-30 12:03:38'),
(6, 'Warm', 4, 1, '2022-11-30 12:03:38', '2022-11-30 12:03:38'),
(7, 'Cold', 4, 1, '2022-11-30 12:03:38', '2022-11-30 12:03:38'),
(8, 'Action', NULL, 1, '2022-11-30 12:07:57', '2022-11-30 12:07:57'),
(9, 'Call', 8, 1, '2022-11-30 12:07:57', '2022-11-30 12:07:57'),
(10, 'Demo', 8, 1, '2022-11-30 12:07:57', '2022-11-30 12:07:57'),
(11, 'Trial', 8, 1, '2022-11-30 12:07:57', '2022-11-30 12:07:57'),
(12, 'Installation', 8, 1, '2022-11-30 12:07:57', '2022-11-30 12:07:57'),
(13, 'Training', 8, 1, '2022-11-30 12:07:57', '2022-11-30 12:07:57'),
(14, 'Follow-up', 8, 1, '2022-11-30 12:07:57', '2022-11-30 12:07:57'),
(15, 'Lead status', NULL, 1, '2022-12-01 14:01:33', '2022-12-01 14:01:33'),
(16, 'Open', 15, 1, '2022-12-01 14:01:33', '2022-12-01 14:01:33'),
(17, 'On hold', 15, 1, '2022-12-01 14:01:33', '2022-12-01 14:01:33'),
(18, 'Closed', 15, 1, '2022-12-01 14:01:33', '2022-12-01 14:01:33'),
(19, 'Lead post follow-up status', NULL, 1, NULL, NULL),
(20, 'Turned to Deal', 19, 1, NULL, NULL),
(21, 'Follow-up needed', 19, 1, NULL, NULL),
(22, 'Cancelled', 19, 1, NULL, NULL),
(23, 'Follow-up action type', NULL, 1, NULL, NULL),
(24, 'Call', 23, 1, NULL, NULL),
(25, 'E-meeting', 23, 1, NULL, NULL),
(26, 'Meeting in person', 23, 1, NULL, NULL),
(27, 'Demo', 23, 1, NULL, NULL),
(28, 'Trial', 23, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(1) NOT NULL DEFAULT 3,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `mobile`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `role`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Souvik Nag', 's.nag26@gmail.com', NULL, NULL, '$2y$10$udclAd3tRoJlYvafW5iGm.s0VzW9GlvLwpgAkZuRIxrwTQU1Nz0Qa', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, '2022-12-06 18:00:18', '2022-12-06 18:00:18'),
(2, 'Test User One', 'test1@test.com', '9830098301', NULL, '$2y$10$Eexz.rWwBx44gp9bd9.yY.I0gaL0DcQvafDVwGuxUQyCNsbJ6sf/m', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, '2022-12-06 18:03:17', '2022-12-06 18:03:17'),
(3, 'Test User Two', 'test2@test.com', '9830098302', NULL, '$2y$10$oMKtdAfUSKZwR5s3/9iYqOR8vGnxBxfbNNnrxcAtfM4z0ADFvupEm', NULL, NULL, NULL, NULL, NULL, NULL, 3, 1, '2022-12-06 18:03:44', '2022-12-06 18:03:44'),
(4, 'Admin', 'admin@test.com', NULL, NULL, '$2y$10$MM5NL6uH9/Sm02jrXWTECO8GoN4gRAPMkyc4jWxBXiuZzmqvmF9Ui', NULL, NULL, NULL, NULL, NULL, NULL, 2, 1, '2022-12-06 18:04:08', '2022-12-06 18:04:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_master`
--
ALTER TABLE `access_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_master`
--
ALTER TABLE `admin_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_master_email_unique` (`email`);

--
-- Indexes for table `deal_master`
--
ALTER TABLE `deal_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `deal_master_deal_id_unique` (`deal_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `id_store`
--
ALTER TABLE `id_store`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_followup_master`
--
ALTER TABLE `lead_followup_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lead_master`
--
ALTER TABLE `lead_master`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `lead_master_lead_id_unique` (`lead_id`);

--
-- Indexes for table `menu_master`
--
ALTER TABLE `menu_master`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `table_fields_master`
--
ALTER TABLE `table_fields_master`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teams_user_id_index` (`user_id`);

--
-- Indexes for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_invitations_team_id_email_unique` (`team_id`,`email`);

--
-- Indexes for table `team_user`
--
ALTER TABLE `team_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team_user_team_id_user_id_unique` (`team_id`,`user_id`);

--
-- Indexes for table `type_master`
--
ALTER TABLE `type_master`
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
-- AUTO_INCREMENT for table `access_master`
--
ALTER TABLE `access_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin_master`
--
ALTER TABLE `admin_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `deal_master`
--
ALTER TABLE `deal_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `id_store`
--
ALTER TABLE `id_store`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lead_followup_master`
--
ALTER TABLE `lead_followup_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `lead_master`
--
ALTER TABLE `lead_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `menu_master`
--
ALTER TABLE `menu_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
-- AUTO_INCREMENT for table `table_fields_master`
--
ALTER TABLE `table_fields_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team_invitations`
--
ALTER TABLE `team_invitations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `team_user`
--
ALTER TABLE `team_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `type_master`
--
ALTER TABLE `type_master`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `team_invitations`
--
ALTER TABLE `team_invitations`
  ADD CONSTRAINT `team_invitations_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
