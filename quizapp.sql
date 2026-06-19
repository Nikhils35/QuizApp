-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2026 at 06:53 PM
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
-- Database: `quizapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `role` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(3, 'admin', 'admin@gmail.com', '12', 'Owner', '2025-12-30 23:08:10', '2025-12-30 23:08:10'),
(5, 'developer', 'developer@gmail.com', '12', 'developer', '2026-01-13 18:01:27', '2026-01-13 18:01:27');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(10) NOT NULL,
  `catagory` varchar(30) NOT NULL,
  `created_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `updated_at` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `userid` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagory`, `created_at`, `updated_at`, `userid`) VALUES
(42, 'Mathemetics', '2026-01-11 11:57:55.482818', '2026-01-11 11:57:55.482818', 3),
(43, 'GK', '2026-01-11 11:58:08.718761', '2026-01-11 11:58:08.718761', 3),
(44, 'science', '2026-01-11 11:58:22.209376', '2026-01-11 11:58:22.209376', 3),
(45, 'Geography', '2026-01-11 11:58:36.086886', '2026-01-11 11:58:36.086886', 3),
(46, 'english', '2026-01-11 11:58:44.820956', '2026-01-11 11:58:44.820956', 3),
(47, 'sports', '2026-01-11 11:58:52.372140', '2026-01-11 11:58:52.372140', 3),
(48, 'Art', '2026-01-11 11:59:05.493715', '2026-01-11 11:59:05.493715', 3),
(49, 'trivia', '2026-01-11 11:59:18.919519', '2026-01-11 11:59:18.919519', 3),
(50, 'music', '2026-01-11 11:59:27.109376', '2026-01-11 11:59:27.109376', 3),
(51, 'animals', '2026-01-11 11:59:34.013436', '2026-01-11 11:59:34.013436', 3),
(52, 'food', '2026-01-11 11:59:40.044575', '2026-01-11 11:59:40.044575', 3),
(53, 'movies', '2026-01-11 11:59:47.907878', '2026-01-11 11:59:47.907878', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mcqs`
--

CREATE TABLE `mcqs` (
  `id` int(10) NOT NULL,
  `question` varchar(300) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `catagory_id` int(10) NOT NULL,
  `admin_id` int(10) NOT NULL,
  `a` varchar(100) NOT NULL,
  `b` varchar(100) NOT NULL,
  `c` varchar(100) NOT NULL,
  `d` varchar(100) NOT NULL,
  `correct_ans` varchar(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcqs`
--

INSERT INTO `mcqs` (`id`, `question`, `quiz_id`, `catagory_id`, `admin_id`, `a`, `b`, `c`, `d`, `correct_ans`, `updated_at`, `created_at`) VALUES
(41, 'Which number is odd?', 26, 42, 3, '4', '8', '10', '7', 'd', '2026-01-11 12:08:42', '2026-01-11 12:08:42'),
(42, 'If you have 12 apples and give 5 away, how many are left?', 26, 42, 3, '5', '6', '7', '8', 'c', '2026-01-11 12:09:11', '2026-01-11 12:09:11'),
(43, '2, 6, 12, 20, ___ ?', 26, 42, 3, '28', '30', '32', '36', 'b', '2026-01-11 12:10:13', '2026-01-11 12:10:13'),
(44, '7 + 7 ÷ 7 × 7 = ?', 26, 42, 3, '14', '7', '8', '14.5', 'a', '2026-01-11 12:10:41', '2026-01-11 12:10:41'),
(45, 'Which number does NOT belong to the group?', 26, 42, 3, '2', '3', '5', '9', 'd', '2026-01-11 12:11:15', '2026-01-11 12:11:15'),
(46, '1, 4, 9, 16, ___ ?', 26, 42, 3, '20', '24', '25', '30', 'c', '2026-01-11 12:11:38', '2026-01-11 12:11:38'),
(47, '100 − (20 ÷ 5) × 4 = ?', 26, 42, 3, '84', '88', '92', '96', 'd', '2026-01-11 12:12:22', '2026-01-11 12:12:22'),
(48, 'If 3 cats catch 3 mice in 3 minutes,\r\nhow many cats are needed to catch 6 mice in 6 minutes?', 26, 42, 3, '3', '6', '9', '12', 'a', '2026-01-11 12:12:43', '2026-01-11 12:12:43'),
(49, 'Which number is missing?\r\n3, 6, 11, 18, ___ ?', 26, 42, 3, '25', '27', '29', '30', 'b', '2026-01-11 12:13:24', '2026-01-11 12:13:24'),
(50, 'A number when multiplied by 4 and added to 6 becomes 26.\r\nWhat is the number?', 26, 42, 3, '4', '5', '6', '7', 'b', '2026-01-11 12:14:23', '2026-01-11 12:14:23'),
(51, 'jkhgfd', 27, 43, 3, 'uy', 'jhguy', 'kjhg', 'kjhgf', 'a', '2026-01-11 13:35:17', '2026-01-11 13:35:17'),
(52, 'mkjbhgf', 27, 43, 3, 'jkhg', 'kljhg', 'kljhgv', 'kljhg', 'a', '2026-01-11 13:35:25', '2026-01-11 13:35:25');

-- --------------------------------------------------------

--
-- Table structure for table `mcq_records`
--

CREATE TABLE `mcq_records` (
  `id` int(10) NOT NULL,
  `record_id` int(10) NOT NULL,
  `mcq_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `selected_ans` varchar(10) NOT NULL,
  `is_correct` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mcq_records`
--

INSERT INTO `mcq_records` (`id`, `record_id`, `mcq_id`, `user_id`, `selected_ans`, `is_correct`, `updated_at`, `created_at`) VALUES
(85, 44, 51, 1, 'a', 1, '2026-01-19 11:12:14', '2026-01-19 11:12:14'),
(86, 44, 52, 1, 'a', 1, '2026-01-19 11:12:19', '2026-01-19 11:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` int(10) NOT NULL,
  `quiz` varchar(300) NOT NULL,
  `catagory_id` int(10) NOT NULL,
  `creator` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `quiz`, `catagory_id`, `creator`, `created_at`, `updated_at`) VALUES
(26, 'basic 10 maths quiz', 42, 'admin', '2026-01-11 12:02:08', '2026-01-11 12:02:08'),
(27, 'jhgf', 43, 'admin', '2026-01-11 13:35:10', '2026-01-11 13:35:10');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(10) NOT NULL,
  `quiz_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `quiz_id`, `user_id`, `status`, `updated_at`, `created_at`) VALUES
(44, 27, 1, 1, '2026-01-19 05:42:20', '2026-01-19 11:12:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'akhil', 'akhil@test.com', '12', '2026-01-08 20:25:34'),
(5, 'helo', 'helo@test.com', '12', '2026-01-13 10:36:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcqs`
--
ALTER TABLE `mcqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcq_records`
--
ALTER TABLE `mcq_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `mcqs`
--
ALTER TABLE `mcqs`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `mcq_records`
--
ALTER TABLE `mcq_records`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
