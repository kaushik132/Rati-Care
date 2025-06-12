-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2025 at 09:04 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rati_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `order` int(11) NOT NULL DEFAULT 0,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uri` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `permission` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `parent_id`, `order`, `title`, `icon`, `uri`, `permission`, `created_at`, `updated_at`) VALUES
(1, 0, 1, 'Dashboard', 'icon-chart-bar', '/', NULL, NULL, NULL),
(2, 0, 2, 'Admin', 'icon-server', '', NULL, NULL, NULL),
(3, 2, 3, 'Users', 'icon-users', 'auth/users', NULL, NULL, NULL),
(4, 2, 4, 'Roles', 'icon-user', 'auth/roles', NULL, NULL, NULL),
(5, 2, 5, 'Permission', 'icon-ban', 'auth/permissions', NULL, NULL, NULL),
(6, 2, 6, 'Menu', 'icon-bars', 'auth/menu', NULL, NULL, NULL),
(7, 2, 7, 'Operation log', 'icon-history', 'auth/logs', NULL, NULL, NULL),
(8, 0, 7, 'Helpers', 'icon-cogs', '', NULL, '2025-06-05 23:42:38', '2025-06-05 23:42:38'),
(9, 8, 8, 'Scaffold', 'icon-keyboard', 'helpers/scaffold', NULL, '2025-06-05 23:42:38', '2025-06-05 23:42:38'),
(10, 8, 9, 'Database terminal', 'icon-database', 'helpers/terminal/database', NULL, '2025-06-05 23:42:39', '2025-06-05 23:42:39'),
(11, 8, 10, 'Laravel artisan', 'icon-terminal', 'helpers/terminal/artisan', NULL, '2025-06-05 23:42:39', '2025-06-05 23:42:39'),
(12, 8, 11, 'Routes', 'icon-list-alt', 'helpers/routes', NULL, '2025-06-05 23:42:39', '2025-06-05 23:42:39'),
(14, 0, 11, 'Contacts', 'icon-file', 'contacts', NULL, '2025-06-12 01:29:02', '2025-06-12 01:29:02');

-- --------------------------------------------------------

--
-- Table structure for table `admin_operation_log`
--

CREATE TABLE `admin_operation_log` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `method` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `input` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_operation_log`
--

INSERT INTO `admin_operation_log` (`id`, `user_id`, `path`, `method`, `ip`, `input`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'GET', '127.0.0.1', '[]', '2025-06-05 23:46:46', '2025-06-05 23:46:46'),
(2, 1, 'admin', 'GET', '127.0.0.1', '[]', '2025-06-12 01:03:51', '2025-06-12 01:03:51'),
(3, 1, 'admin/helpers/scaffold', 'GET', '127.0.0.1', '[]', '2025-06-12 01:05:33', '2025-06-12 01:05:33'),
(4, 1, 'admin/helpers/scaffold', 'POST', '127.0.0.1', '{\"table_name\":\"contacts\",\"model_name\":\"App\\\\Models\\\\Contact\",\"controller_name\":\"App\\\\Admin\\\\Controllers\\\\Contact\",\"create\":[\"controller\",\"menu_item\"],\"fields\":[{\"name\":null,\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":null}],\"timestamps\":\"on\",\"primary_key\":\"id\",\"_token\":\"IeuwzMBWZdw3LMMujRo887pJ01SEKP8Qbim6QYz2\"}', '2025-06-12 01:07:19', '2025-06-12 01:07:19'),
(5, 1, 'admin/helpers/scaffold', 'GET', '127.0.0.1', '[]', '2025-06-12 01:07:24', '2025-06-12 01:07:24'),
(6, 1, 'admin/helpers/scaffold', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:38', '2025-06-12 01:12:38'),
(7, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:41', '2025-06-12 01:12:41'),
(8, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:42', '2025-06-12 01:12:42'),
(9, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:43', '2025-06-12 01:12:43'),
(10, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:44', '2025-06-12 01:12:44'),
(11, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:44', '2025-06-12 01:12:44'),
(12, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:45', '2025-06-12 01:12:45'),
(13, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:46', '2025-06-12 01:12:46'),
(14, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:47', '2025-06-12 01:12:47'),
(15, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:48', '2025-06-12 01:12:48'),
(16, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:48', '2025-06-12 01:12:48'),
(17, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:49', '2025-06-12 01:12:49'),
(18, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:50', '2025-06-12 01:12:50'),
(19, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:51', '2025-06-12 01:12:51'),
(20, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:52', '2025-06-12 01:12:52'),
(21, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:53', '2025-06-12 01:12:53'),
(22, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:54', '2025-06-12 01:12:54'),
(23, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:54', '2025-06-12 01:12:54'),
(24, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:55', '2025-06-12 01:12:55'),
(25, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:56', '2025-06-12 01:12:56'),
(26, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:57', '2025-06-12 01:12:57'),
(27, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:12:57', '2025-06-12 01:12:57'),
(28, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:05', '2025-06-12 01:13:05'),
(29, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:06', '2025-06-12 01:13:06'),
(30, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:07', '2025-06-12 01:13:07'),
(31, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:08', '2025-06-12 01:13:08'),
(32, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:08', '2025-06-12 01:13:08'),
(33, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:09', '2025-06-12 01:13:09'),
(34, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:10', '2025-06-12 01:13:10'),
(35, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:11', '2025-06-12 01:13:11'),
(36, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:12', '2025-06-12 01:13:12'),
(37, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:12', '2025-06-12 01:13:12'),
(38, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:13', '2025-06-12 01:13:13'),
(39, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:14', '2025-06-12 01:13:14'),
(40, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:15', '2025-06-12 01:13:15'),
(41, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:16', '2025-06-12 01:13:16'),
(42, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:17', '2025-06-12 01:13:17'),
(43, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:18', '2025-06-12 01:13:18'),
(44, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:18', '2025-06-12 01:13:18'),
(45, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:19', '2025-06-12 01:13:19'),
(46, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:20', '2025-06-12 01:13:20'),
(47, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:21', '2025-06-12 01:13:21'),
(48, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:22', '2025-06-12 01:13:22'),
(49, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:36', '2025-06-12 01:13:36'),
(50, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:37', '2025-06-12 01:13:37'),
(51, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:38', '2025-06-12 01:13:38'),
(52, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:39', '2025-06-12 01:13:39'),
(53, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:39', '2025-06-12 01:13:39'),
(54, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:40', '2025-06-12 01:13:40'),
(55, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:41', '2025-06-12 01:13:41'),
(56, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:42', '2025-06-12 01:13:42'),
(57, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:43', '2025-06-12 01:13:43'),
(58, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:44', '2025-06-12 01:13:44'),
(59, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:45', '2025-06-12 01:13:45'),
(60, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:45', '2025-06-12 01:13:45'),
(61, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:46', '2025-06-12 01:13:46'),
(62, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:47', '2025-06-12 01:13:47'),
(63, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:48', '2025-06-12 01:13:48'),
(64, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:49', '2025-06-12 01:13:49'),
(65, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:13:50', '2025-06-12 01:13:50'),
(66, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:25:18', '2025-06-12 01:25:18'),
(67, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:06', '2025-06-12 01:27:06'),
(68, 1, 'admin/helpers/scaffold', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:17', '2025-06-12 01:27:17'),
(69, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:21', '2025-06-12 01:27:21'),
(70, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:21', '2025-06-12 01:27:21'),
(71, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:22', '2025-06-12 01:27:22'),
(72, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:23', '2025-06-12 01:27:23'),
(73, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:24', '2025-06-12 01:27:24'),
(74, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:25', '2025-06-12 01:27:25'),
(75, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:26', '2025-06-12 01:27:26'),
(76, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:26', '2025-06-12 01:27:26'),
(77, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:27', '2025-06-12 01:27:27'),
(78, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:28', '2025-06-12 01:27:28'),
(79, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:29', '2025-06-12 01:27:29'),
(80, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:30', '2025-06-12 01:27:30'),
(81, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:31', '2025-06-12 01:27:31'),
(82, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:31', '2025-06-12 01:27:31'),
(83, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:32', '2025-06-12 01:27:32'),
(84, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:33', '2025-06-12 01:27:33'),
(85, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:34', '2025-06-12 01:27:34'),
(86, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:35', '2025-06-12 01:27:35'),
(87, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:36', '2025-06-12 01:27:36'),
(88, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:36', '2025-06-12 01:27:36'),
(89, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:27:37', '2025-06-12 01:27:37'),
(90, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:17', '2025-06-12 01:28:17'),
(91, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:18', '2025-06-12 01:28:18'),
(92, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:19', '2025-06-12 01:28:19'),
(93, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:20', '2025-06-12 01:28:20'),
(94, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:21', '2025-06-12 01:28:21'),
(95, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:22', '2025-06-12 01:28:22'),
(96, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:22', '2025-06-12 01:28:22'),
(97, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:23', '2025-06-12 01:28:23'),
(98, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:24', '2025-06-12 01:28:24'),
(99, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:25', '2025-06-12 01:28:25'),
(100, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:26', '2025-06-12 01:28:26'),
(101, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:26', '2025-06-12 01:28:26'),
(102, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:27', '2025-06-12 01:28:27'),
(103, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:28', '2025-06-12 01:28:28'),
(104, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:29', '2025-06-12 01:28:29'),
(105, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:30', '2025-06-12 01:28:30'),
(106, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:31', '2025-06-12 01:28:31'),
(107, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:32', '2025-06-12 01:28:32'),
(108, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:32', '2025-06-12 01:28:32'),
(109, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:33', '2025-06-12 01:28:33'),
(110, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:34', '2025-06-12 01:28:34'),
(111, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:35', '2025-06-12 01:28:35'),
(112, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:36', '2025-06-12 01:28:36'),
(113, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:37', '2025-06-12 01:28:37'),
(114, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:37', '2025-06-12 01:28:37'),
(115, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:38', '2025-06-12 01:28:38'),
(116, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:39', '2025-06-12 01:28:39'),
(117, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:40', '2025-06-12 01:28:40'),
(118, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:41', '2025-06-12 01:28:41'),
(119, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:41', '2025-06-12 01:28:41'),
(120, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:42', '2025-06-12 01:28:42'),
(121, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:43', '2025-06-12 01:28:43'),
(122, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:44', '2025-06-12 01:28:44'),
(123, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:45', '2025-06-12 01:28:45'),
(124, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:45', '2025-06-12 01:28:45'),
(125, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:46', '2025-06-12 01:28:46'),
(126, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:47', '2025-06-12 01:28:47'),
(127, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:48', '2025-06-12 01:28:48'),
(128, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:48', '2025-06-12 01:28:48'),
(129, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:49', '2025-06-12 01:28:49'),
(130, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:50', '2025-06-12 01:28:50'),
(131, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:28:51', '2025-06-12 01:28:51'),
(132, 1, 'admin/helpers/scaffold', 'POST', '127.0.0.1', '{\"table_name\":\"contacts\",\"model_name\":\"App\\\\Models\\\\Contact\",\"controller_name\":\"App\\\\Admin\\\\Controllers\\\\ContactController\",\"create\":[\"controller\",\"menu_item\"],\"fields\":[{\"name\":null,\"type\":\"string\",\"nullable\":\"on\",\"key\":null,\"default\":null,\"comment\":null}],\"timestamps\":\"on\",\"primary_key\":\"id\",\"_token\":\"IeuwzMBWZdw3LMMujRo887pJ01SEKP8Qbim6QYz2\"}', '2025-06-12 01:29:02', '2025-06-12 01:29:02'),
(133, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:03', '2025-06-12 01:29:03'),
(134, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:03', '2025-06-12 01:29:03'),
(135, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:04', '2025-06-12 01:29:04'),
(136, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:05', '2025-06-12 01:29:05'),
(137, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:06', '2025-06-12 01:29:06'),
(138, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:07', '2025-06-12 01:29:07'),
(139, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:08', '2025-06-12 01:29:08'),
(140, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:08', '2025-06-12 01:29:08'),
(141, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:09', '2025-06-12 01:29:09'),
(142, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:10', '2025-06-12 01:29:10'),
(143, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:11', '2025-06-12 01:29:11'),
(144, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:12', '2025-06-12 01:29:12'),
(145, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:13', '2025-06-12 01:29:13'),
(146, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:14', '2025-06-12 01:29:14'),
(147, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:15', '2025-06-12 01:29:15'),
(148, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:15', '2025-06-12 01:29:15'),
(149, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:16', '2025-06-12 01:29:16'),
(150, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:17', '2025-06-12 01:29:17'),
(151, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:18', '2025-06-12 01:29:18'),
(152, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:29:19', '2025-06-12 01:29:19'),
(153, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:30:39', '2025-06-12 01:30:39'),
(154, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:30:46', '2025-06-12 01:30:46'),
(155, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:31:02', '2025-06-12 01:31:02'),
(156, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:31:15', '2025-06-12 01:31:15'),
(157, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:31:20', '2025-06-12 01:31:20'),
(158, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:32:16', '2025-06-12 01:32:16'),
(159, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:34:03', '2025-06-12 01:34:03'),
(160, 1, 'admin/contacts', 'GET', '127.0.0.1', '[]', '2025-06-12 01:34:05', '2025-06-12 01:34:05'),
(161, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2025-06-12 01:34:10', '2025-06-12 01:34:10'),
(162, 1, 'admin/auth/menu/13', 'DELETE', '127.0.0.1', '{\"_method\":\"delete\",\"_token\":\"IeuwzMBWZdw3LMMujRo887pJ01SEKP8Qbim6QYz2\"}', '2025-06-12 01:34:20', '2025-06-12 01:34:20'),
(163, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2025-06-12 01:34:21', '2025-06-12 01:34:21'),
(164, 1, 'admin/auth/menu', 'GET', '127.0.0.1', '[]', '2025-06-12 01:34:23', '2025-06-12 01:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `admin_permissions`
--

CREATE TABLE `admin_permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `http_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `http_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_permissions`
--

INSERT INTO `admin_permissions` (`id`, `name`, `slug`, `http_method`, `http_path`, `created_at`, `updated_at`) VALUES
(1, 'All permission', '*', '', '*', NULL, NULL),
(2, 'Dashboard', 'dashboard', 'GET', '/', NULL, NULL),
(3, 'Login', 'auth.login', '', '/auth/login\r\n/auth/logout', NULL, NULL),
(4, 'User setting', 'auth.setting', 'GET,PUT', '/auth/setting', NULL, NULL),
(5, 'Auth management', 'auth.management', '', '/auth/roles\r\n/auth/permissions\r\n/auth/menu\r\n/auth/logs', NULL, NULL),
(6, 'Admin helpers', 'ext.helpers', '', '/helpers/*', '2025-06-05 23:42:39', '2025-06-05 23:42:39');

-- --------------------------------------------------------

--
-- Table structure for table `admin_roles`
--

CREATE TABLE `admin_roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_roles`
--

INSERT INTO `admin_roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'administrator', '2025-06-05 23:41:53', '2025-06-05 23:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_menu`
--

CREATE TABLE `admin_role_menu` (
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_menu`
--

INSERT INTO `admin_role_menu` (`role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_permissions`
--

CREATE TABLE `admin_role_permissions` (
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_permissions`
--

INSERT INTO `admin_role_permissions` (`role_id`, `permission_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_role_users`
--

CREATE TABLE `admin_role_users` (
  `role_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_role_users`
--

INSERT INTO `admin_role_users` (`role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `name`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$12$QkV1a8vmiwIrYMLjLuHpwuC0A4.GjLI/o.g22AmUDhZB3CFXitbWy', 'Administrator', NULL, NULL, '2025-06-05 23:41:53', '2025-06-05 23:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `admin_user_permissions`
--

CREATE TABLE `admin_user_permissions` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Karina', 'Andrews', 'hiku@mailinator.com', '+1 (767) 178-7564', 'Qui vel laboris do a', '2025-06-12 00:45:48', '2025-06-12 00:45:48'),
(2, 'Hall', 'Nixon', 'gatab@mailinator.com', '+1 (985) 786-7183', 'Eum laboris in offic', '2025-06-12 00:46:33', '2025-06-12 00:46:33'),
(3, 'Rafael', 'Rodriquez', 'gakym@mailinator.com', '+1 (996) 638-1897', 'Nulla voluptatem Se', '2025-06-12 00:48:59', '2025-06-12 00:48:59'),
(4, 'Rina', 'Schmidt', 'xygix@mailinator.com', '+1 (444) 961-1714', 'Dolorum ex quo non v', '2025-06-12 00:53:40', '2025-06-12 00:53:40'),
(5, 'Colt', 'Stokes', 'qipiwoqo@mailinator.com', '+1 (103) 567-2495', 'Ut libero cum volupt', '2025-06-12 00:58:55', '2025-06-12 00:58:55'),
(6, 'karan', 'prajapat', 'karanprajapat9995@gmail.com', '8302734041', 'karan', '2025-06-12 01:32:05', '2025-06-12 01:32:05');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2016_01_04_173148_create_admin_tables', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_operation_log_user_id_index` (`user_id`);

--
-- Indexes for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_permissions_name_unique` (`name`),
  ADD UNIQUE KEY `admin_permissions_slug_unique` (`slug`);

--
-- Indexes for table `admin_roles`
--
ALTER TABLE `admin_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_roles_name_unique` (`name`),
  ADD UNIQUE KEY `admin_roles_slug_unique` (`slug`);

--
-- Indexes for table `admin_role_menu`
--
ALTER TABLE `admin_role_menu`
  ADD KEY `admin_role_menu_role_id_menu_id_index` (`role_id`,`menu_id`);

--
-- Indexes for table `admin_role_permissions`
--
ALTER TABLE `admin_role_permissions`
  ADD KEY `admin_role_permissions_role_id_permission_id_index` (`role_id`,`permission_id`);

--
-- Indexes for table `admin_role_users`
--
ALTER TABLE `admin_role_users`
  ADD KEY `admin_role_users_role_id_user_id_index` (`role_id`,`user_id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_users_username_unique` (`username`);

--
-- Indexes for table `admin_user_permissions`
--
ALTER TABLE `admin_user_permissions`
  ADD KEY `admin_user_permissions_user_id_permission_id_index` (`user_id`,`permission_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

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
-- AUTO_INCREMENT for table `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin_operation_log`
--
ALTER TABLE `admin_operation_log`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `admin_permissions`
--
ALTER TABLE `admin_permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `admin_roles`
--
ALTER TABLE `admin_roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
