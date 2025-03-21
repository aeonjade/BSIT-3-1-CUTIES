-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2024 at 01:24 AM
-- Server version: 8.0.40-cll-lve
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `czvqqzbp_cutiesdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `announcement_id` int NOT NULL,
  `announcement_title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `announcement_description` varchar(700) COLLATE utf8mb4_general_ci NOT NULL,
  `announcement_date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`announcement_id`, `announcement_title`, `announcement_description`, `announcement_date_added`) VALUES
(77, 'Patawad', 'Amanai', '2024-12-05 15:38:41');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int NOT NULL,
  `post_title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `post_description` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `post_creator` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_title`, `post_date`, `post_description`, `post_creator`) VALUES
(2, 'Patawad Amanai', '2024-12-05 00:00:00', 'Patawad, Amanai. Subalit hindi man lang ako nakakaramdam ng galit sa iyo ngayon. Wala akong itinatanim na galit sa kung kanino man. Ngayon lang kasi\'y parang napakaganda ng mundo. Mula sa langit at lupa, ako lamang ang pinarangalan. Ang merito ng pagkakaroon ng kapamaraanan na ipinasa sa mga henerasyon ay ang pagkakaroon ng isang manwal. Ngunit, ang demerito nito ay ang impormasyon tungkol sa kapamaraanan ay madaling kumalat. Isa kang miyembro ng Zen\'in clan, hindi ba? Kaya pala ang dami mong alam tungkol sa Walang Hangganang Kapamaraanan. Pero, kahit sa angkan ng Gojo, bilang lamang ang nakakaalam nito. Kunin ang pinabisa at ang binaliktad, pagsama-samahin ang dalawang magkaibang ekspresyon ng walang hanggan upang makabuo at maitulak ang likhang masa. Haka-hakang kapamaraanan: Lila 🫸🔵+🔴🫷 = 🫴💨💨💨💨💨🟣', 'Vic Vincent Magtanggol'),
(3, 'Hoy bakla', '2024-12-05 00:00:00', 'Hoy bakla anong cnasabe mo tongkol sakin. ha Bakla ayosin mo lng Hello ma’am,,menu PO natin for today,,. Binagoungan baboy na may talong. Sinigang na bangus dagupan. .adobong manok. Letchon paksiw Mebudo .igabo. At dinuguan. May monggo PO na may talbos NG amplaya,,', 'Andrew Bautista'),
(4, 'Esophagus', '2024-12-05 00:00:00', '3...2..1😎👀 esOphagus🫦 esophagUs 🗣️🙈 habang✌🏻 tayo\'y👥🫂 kumakain🥣🍳 sa hapag kainan 🍽️shemprehh🐎 hindi🙅🏻‍♂️🚭 mawawala🤼 ang iyong🫵🏻🫵🏻 esophAgus 🗣️🫁 mananatili yan 🫂🦾 pang habang buhay♾️ iingatan 🫂🤝 pahahalagahan mo yan 🫵💗 dadaloy dadalOy yan 🌊🚰🚰 sa iyong sInapupUnan 🫄', 'Jhonn Brets');

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int NOT NULL,
  `task_title` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `task_start_date` date NOT NULL,
  `task_end_date` date NOT NULL,
  `task_time` time NOT NULL,
  `task_description` varchar(300) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_title`, `task_start_date`, `task_end_date`, `task_time`, `task_description`) VALUES
(59, 'Game Dev', '2024-12-06', '2024-12-07', '12:00:00', 'Expert Testing of Expansion Application');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint NOT NULL,
  `user_id` bigint NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `student_number` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `student_number`, `filename`) VALUES
(8, 38924437279849, 'ajv_16', '$2y$10$uZLwjugYXOCv/bddSnIjiertz44t8oJV64VHYixBmO7hcFpY.lIAO', '22-2544', NULL),
(9, 38601, 'tads@gmail.com', '$2y$10$l59wKaE21adnZzRrgmaEyO0SNQcVPwFOsNZTbLZzhWvVMp9BD7GL.', '22-2443', NULL),
(10, 43024, 'lexineslore', '$2y$10$1nFoG3Zm5B5KemZTee4./.WzQRKtRnmdnKIh8B.UalRY6onVnPtC.', '202206107', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`announcement_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `announcement_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
