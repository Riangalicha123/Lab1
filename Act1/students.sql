-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2023 at 05:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `table_section`
--

CREATE TABLE `table_section` (
  `id` int NOT NULL,
  `Section` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_section`
--

INSERT INTO `table_section` (`id`, `Section`) VALUES
(2, 'F1'),
(1, 'F2'),
(3, 'F3'),
(4, 'F4'),
(5, 'F5'),
(6, 'F6');

-- --------------------------------------------------------

--
-- Table structure for table `table_students`
--

CREATE TABLE `table_students` (
  `id` int NOT NULL,
  `StudName` text,
  `StudGender` text,
  `StudCourse` text,
  `StudSection` varchar(25) DEFAULT NULL,
  `StudYear` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `table_students`
--

INSERT INTO `table_students` (`id`, `StudName`, `StudGender`, `StudCourse`, `StudSection`, `StudYear`) VALUES
(4, 'Kenneth', 'Male', 'BSIT', 'F1', 'Second Year'),
(6, 'Rian Galicha', 'Male', 'BSIT', 'F2', 'Third Year'),
(7, 'Karl Henson', 'Male', 'BSIT', 'F4', 'Third Year'),
(8, 'Navy Jane Cleofe', 'Female', 'BSIT', 'F2', 'Third Year');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_section`
--
ALTER TABLE `table_section`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idx_section` (`Section`);

--
-- Indexes for table `table_students`
--
ALTER TABLE `table_students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `StudSection` (`StudSection`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_section`
--
ALTER TABLE `table_section`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `table_students`
--
ALTER TABLE `table_students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `table_students`
--
ALTER TABLE `table_students`
  ADD CONSTRAINT `table_students_ibfk_1` FOREIGN KEY (`StudSection`) REFERENCES `table_section` (`Section`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
