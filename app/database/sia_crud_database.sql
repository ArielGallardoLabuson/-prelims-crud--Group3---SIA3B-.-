-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2023 at 04:34 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sia_crud_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `sia_crud_table`
--

CREATE TABLE `sia_crud_table` (
  `id` int(32) NOT NULL,
  `name` varchar(60) NOT NULL,
  `age` varchar(32) NOT NULL,
  `contact_number` varchar(60) NOT NULL,
  `email_address` varchar(60) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sia_crud_table`
--

INSERT INTO `sia_crud_table` (`id`, `name`, `age`, `contact_number`, `email_address`, `gender`) VALUES
(1, 'Ariel Labuson', '24', '09451570794', 'ariellabuson08@gmail.com', 'Male'),
(2, 'emmanuel Labuson', '23', '09451570794', 'ariellabuson08@gmail.co', 'Male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sia_crud_table`
--
ALTER TABLE `sia_crud_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sia_crud_table`
--
ALTER TABLE `sia_crud_table`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
