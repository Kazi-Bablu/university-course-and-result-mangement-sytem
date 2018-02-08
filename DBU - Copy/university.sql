-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 08, 2018 at 08:17 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `university`
--

-- --------------------------------------------------------

--
-- Table structure for table `allocate_classrooms`
--

CREATE TABLE `allocate_classrooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `Room_No` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `allocate_classrooms`
--

INSERT INTO `allocate_classrooms` (`id`, `department_id`, `course_id`, `Room_No`, `date`, `start_time`, `end_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 35, 'Room 301', '2017-12-24', '09:00:00', '11:00:00', '2017-12-24 05:15:59', '2017-12-24 05:15:59', NULL),
(2, 1, 36, 'Room 302', '2017-12-25', '09:00:00', '11:00:00', '2017-12-24 09:00:44', '2017-12-24 09:00:44', NULL),
(4, 112, 35, 'Room 304', '2017-12-25', '11:00:00', '01:00:00', '2017-12-24 09:02:43', '2017-12-24 09:02:43', NULL),
(5, 107, 36, 'Room 401', '2017-12-24', '09:00:00', '11:00:00', '2017-12-24 10:36:16', '2017-12-24 10:36:16', NULL),
(6, 1, 35, 'Room 401', '2017-12-26', '00:00:09', '11:00:00', '2017-12-26 02:08:55', '2017-12-26 02:08:55', NULL),
(7, 108, 36, 'Room 401', '2017-12-30', '09:00:00', '11:00:00', '2017-12-30 09:53:08', '2017-12-30 09:53:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `semester` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `code`, `name`, `credit`, `description`, `department_id`, `semester`, `created_at`, `updated_at`, `deleted_at`) VALUES
(35, 'MCT253', 'Multimedia Programming Language', 4.00, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', '112', 'Three Semester', '2017-12-19 12:42:36', '2017-12-19 12:42:36', NULL),
(36, 'swe425', 'Web Pogramming', 3.50, 'Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially', '1', 'Six Semester', '2017-12-20 13:10:36', '2017-12-20 13:10:36', NULL),
(37, 'swe457', 'C pogramming language', 5.00, 'fdlkjgjmrgprfgmp pjfpgjpmrepgnmg picprtprptgprg', '1', 'First Semester', '2017-12-23 14:37:41', '2017-12-23 14:37:41', NULL),
(38, 'SWE878', 'Social Engineering', 4.00, 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', '3', 'Second Semester', '2017-12-31 00:28:16', '2017-12-31 00:28:16', NULL),
(39, 'CSE875', 'Basic Computer Engineer', 5.00, 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', '105', 'Second Semester', '2017-12-31 00:28:54', '2017-12-31 00:28:54', NULL),
(40, 'ENA875', 'Earth Of Living', 4.00, 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', '107', 'First Semester', '2017-12-31 00:29:24', '2017-12-31 00:29:24', NULL),
(41, 'MCTA121', 'Basic Multimedia', 5.00, 'simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has', '106', 'Second Semester', '2017-12-31 00:30:56', '2017-12-31 00:30:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_assign_tos`
--

CREATE TABLE `course_assign_tos` (
  `id` int(10) UNSIGNED NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit_taken` int(11) NOT NULL,
  `remain_credit` int(11) NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `C_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_credit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_assign_tos`
--

INSERT INTO `course_assign_tos` (`id`, `department_id`, `teacher`, `credit_taken`, `remain_credit`, `course`, `C_name`, `course_credit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, '1', '14', 20, 15, '37', 'C pogramming language', '5', '2017-12-30 12:37:32', '2017-12-30 12:37:32', NULL),
(3, '3', '15', 20, 16, '40', 'Earth Of Living', '4', '2017-12-31 00:29:51', '2017-12-31 00:29:51', NULL),
(4, '105', '16', 20, 15, '39', 'Basic Computer Engineer', '5', '2017-12-31 00:30:05', '2017-12-31 00:30:05', NULL),
(5, '106', '17', 5, 1, '35', 'Multimedia Programming Language', '4', '2017-12-31 00:32:20', '2017-12-31 00:32:20', NULL),
(6, '3', '15', 20, 16, '38', 'Social Engineering', '4', '2017-12-31 13:21:14', '2017-12-31 13:21:14', NULL),
(7, '105', '16', 20, 15, '39', 'Basic Computer Engineer', '5', '2017-12-31 13:21:25', '2017-12-31 13:21:25', NULL),
(8, '108', '13', 10, 6, '40', 'Earth Of Living', '4', '2017-12-31 13:22:01', '2017-12-31 13:22:01', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `code`, `name`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, '132', 'software engineering', NULL, '2017-12-16 12:56:34', '2017-12-16 17:31:46'),
(3, '135', 'Bachelor of Business Administration', NULL, '2017-12-16 13:01:04', '2017-12-16 13:01:04'),
(105, '137', 'Computer Science Engineering', NULL, '2017-12-17 15:44:50', '2017-12-17 15:44:50'),
(106, '138', 'Multimedia Technology and Creative', NULL, '2017-12-17 15:45:13', '2017-12-17 15:45:13'),
(107, '140', 'Bachelor of Management', NULL, '2017-12-17 15:45:37', '2017-12-17 15:45:37'),
(108, '141', 'Bachelor of law', NULL, '2017-12-17 15:46:11', '2017-12-17 15:46:11'),
(109, '142', 'Electrical and Electronics Engineering', NULL, '2017-12-17 15:47:20', '2017-12-17 15:47:20'),
(110, '143', 'Bachelor of Archetecture', NULL, '2017-12-17 15:47:43', '2017-12-17 15:47:43'),
(111, '144', 'Bachelor of Accounting', NULL, '2017-12-17 15:48:01', '2017-12-17 15:48:01'),
(112, '145', 'Robotics Engineering.', NULL, '2017-12-17 15:48:29', '2017-12-17 15:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `enroll_courses`
--

CREATE TABLE `enroll_courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_num` int(11) NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `enroll_courses`
--

INSERT INTO `enroll_courses` (`id`, `reg_num`, `s_name`, `email`, `department_id`, `course_id`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 106719, 'kazi mike', 'kazi@gmail.com', 'software engineering', '37', '2018-01-05 00:00:00', '2018-01-05 13:18:46', '2018-01-05 13:18:46', NULL),
(4, 13135, 'Masum Khan', 'masum@gmail.com', 'software engineering', '36', '2018-01-06 00:00:00', '2018-01-06 02:44:09', '2018-01-06 02:44:09', NULL),
(5, 13135, 'Masum Khan', 'masum@gmail.com', 'software engineering', '37', '2018-01-06 00:00:00', '2018-01-06 02:44:42', '2018-01-06 02:44:42', NULL),
(6, 110665, 'Robiul Islam', 'robi@gmail.com', 'Bachelor of Business Administration', '38', '2018-01-13 00:00:00', '2018-01-13 13:37:05', '2018-01-13 13:37:05', NULL);

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
(3, '2017_12_16_173357_create_department_table', 2),
(5, '2017_12_17_211054_create_courses_table', 3),
(8, '2017_12_18_154157_create_teachers_table', 4),
(11, '2017_12_23_154213_create_students_table', 6),
(12, '2017_12_18_201121_create_course_assign_tos_table', 7),
(13, '2017_12_24_103516_create_allocate_classrooms_table', 8),
(17, '2018_01_02_184008_create_enroll_courses_table', 9),
(18, '2018_01_06_182344_create_save_student_results_table', 10);

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
-- Table structure for table `save_student_results`
--

CREATE TABLE `save_student_results` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_number` int(11) NOT NULL,
  `st_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_ad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_na` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `save_student_results`
--

INSERT INTO `save_student_results` (`id`, `reg_number`, `st_name`, `email_ad`, `department_na`, `course_id`, `grade`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 106719, 'kazi mike', 'kazi@gmail.com', 'software engineering', '37', 'A+', '2018-01-12 14:22:37', '2018-01-12 14:22:37', NULL),
(4, 13135, 'Masum Khan', 'masum@gmail.com', 'software engineering', '36', 'A+', '2018-01-13 13:29:50', '2018-01-13 13:29:50', NULL),
(5, 13135, 'Masum Khan', 'masum@gmail.com', 'software engineering', '37', 'A+', '2018-01-13 13:30:02', '2018-01-13 13:30:02', NULL),
(6, 110665, 'Robiul Islam', 'robi@gmail.com', 'Bachelor of Business Administration', '38', 'B', '2018-01-13 13:37:25', '2018-01-13 13:37:25', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(10) UNSIGNED NOT NULL,
  `reg_id` int(11) NOT NULL,
  `s_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` int(11) NOT NULL,
  `course_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `reg_id`, `s_name`, `email`, `number`, `date`, `address`, `department_id`, `course_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, 'kazi bablu', 'k.bablubd.swe@gmail.com', 1457864214, '2017-12-23', 'mohammadpur,dhaka', 1, 35, '2017-12-23 10:50:47', '2017-12-23 10:50:47', NULL),
(4, 0, 'robi khan', 'robi11@gmail.com', 1247896542, '2017-12-23', 'jessore,Banaladesh', 3, NULL, '2017-12-23 14:51:21', '2017-12-23 15:07:08', NULL),
(8, 211161, 'smith khan', 'khan@gmail.com', 1234567896, '2017-12-23', 'south africa', 3, NULL, '2017-12-23 15:30:34', '2017-12-23 15:30:34', NULL),
(9, 13135, 'Masum Khan', 'masum@gmail.com', 1236987452, '2018-01-03', 'mohammadpur,dhaka', 1, NULL, '2018-01-03 00:46:00', '2018-01-03 00:46:00', NULL),
(10, 106719, 'kazi mike', 'kazi@gmail.com', 1234578965, '2018-01-03', 'mohammadpur,dhaka', 1, NULL, '2018-01-03 14:40:30', '2018-01-03 14:40:30', NULL),
(11, 110665, 'Robiul Islam', 'robi@gmail.com', 1325698745, '2018-01-13', 'jessore,Banaladesh', 3, NULL, '2018-01-13 13:36:46', '2018-01-13 13:36:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `address`, `email`, `phone`, `designation`, `department_id`, `credit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(13, 'robi khan', 'jessore,Banaladesh', 'robikhan@gmail.com', 1247896452, 'lecturer', '108', 10, '2017-12-20 14:52:58', '2017-12-20 14:52:58', NULL),
(14, 'kazi bablu', 'mohammadpur,dhaka', 'k.bablubd.swe@gmail.com', 1247896541, 'lecturer', '1', 20, '2017-12-23 08:58:35', '2017-12-23 08:58:35', NULL),
(15, 'smith khan', 'south africa', 'khan@gmail.com', 1245789652, 'Senior lecturer', '3', 20, '2017-12-31 00:26:24', '2017-12-31 00:26:24', NULL),
(16, 'Hyper Khan', 'mohammadpur,dhaka', 'hyper@yahoo.com', 1234569874, 'Professor', '105', 20, '2017-12-31 00:27:08', '2017-12-31 00:27:08', NULL),
(17, 'Auyon Sk', 'mohammadpur,dhaka', 'auyon@gmail.com', 1234578963, 'lecturer', '106', 5, '2017-12-31 00:31:57', '2017-12-31 00:31:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(101, 'admin', 'admin@example.com', '$2y$10$BuOp3LqTxvaD9MPmPRJBkuKQu14T0CxVPZf3T/i/aNCGlhcS9zTdu', 'IVX3uDIsK1jY97xTEjfvyAniDGZzELRezcMDDKDkV3QNTAs74oa6tZTQ3Kdy', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allocate_classrooms`
--
ALTER TABLE `allocate_classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_assign_tos`
--
ALTER TABLE `course_assign_tos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
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
-- Indexes for table `save_student_results`
--
ALTER TABLE `save_student_results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `students_email_unique` (`email`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teachers_email_unique` (`email`);

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
-- AUTO_INCREMENT for table `allocate_classrooms`
--
ALTER TABLE `allocate_classrooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `course_assign_tos`
--
ALTER TABLE `course_assign_tos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `enroll_courses`
--
ALTER TABLE `enroll_courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `save_student_results`
--
ALTER TABLE `save_student_results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
