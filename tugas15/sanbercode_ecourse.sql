-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2024 at 07:37 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sanbercode_ecourse`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `content`, `author`, `image`, `created_at`) VALUES
(1, 'The Future of Web Development', 'Web development is evolving with new frameworks and technologies. This post discusses the trends shaping the future of web development.', 'John Doe', 'web_future.jpg', '2024-09-08 06:46:18'),
(2, 'Responsive Design Best Practices', 'Learn the essential best practices for creating responsive web designs that look great on any device.', 'Jane Smith', 'responsive_design.jpg', '2024-09-08 06:48:12'),
(3, 'Top JavaScript Libraries in 2024', 'Explore the top JavaScript libraries that developers are using in 2024 to build modern, dynamic web applications.', 'Michael Johnson', 'js_libraries.jpg', '2024-09-08 06:49:42'),
(4, 'Why UX Matters in Web Development', 'User experience (UX) is critical for web developers. Discover how to improve UX in your web projects.', 'Emily Davis', 'ux_webdev.jpg', '2024-09-08 06:54:54'),
(5, 'Building Progressive Web Apps (PWAs)', 'Progressive Web Apps (PWAs) combine the best of web and mobile apps. This guide explains how to build one.', 'Chris Lee', 'pwa_building.jpg', '2024-09-08 06:55:40');

-- --------------------------------------------------------

--
-- Table structure for table `checkout_course`
--

CREATE TABLE `checkout_course` (
  `id` int NOT NULL,
  `full_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `course_name` varchar(100) DEFAULT NULL,
  `whatsapp_number` varchar(20) DEFAULT NULL,
  `payment_method` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `checkout_course`
--

INSERT INTO `checkout_course` (`id`, `full_name`, `email`, `course_name`, `whatsapp_number`, `payment_method`, `created_at`) VALUES
(1, 'Syakil', 'syakil@email.com', 'Web Development', '0812263564882', 'bank_transfer', '2024-09-07 15:29:25'),
(5, 'Surya', 'surya@email.com', 'Mobile Apps Development', '0877564874220', 'credit_card', '2024-09-07 15:40:47'),
(6, 'Sylga', 'sylga@email.com', 'Digital Marketing', '089347872661', 'paypal', '2024-09-07 15:59:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout_course`
--
ALTER TABLE `checkout_course`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `checkout_course`
--
ALTER TABLE `checkout_course`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
