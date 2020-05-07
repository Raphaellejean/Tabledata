-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: May 07, 2020 at 07:11 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `firstdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `sample_table`
--

DROP TABLE IF EXISTS `sample_table`;
CREATE TABLE IF NOT EXISTS `sample_table` (
  `fname` varchar(20) NOT NULL,
  `age` int(7) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sample_table`
--

INSERT INTO `sample_table` (`fname`, `age`) VALUES
('daniel', 466),
('', 0),
('', 0),
('', 0),
('', 0),
('koo', 56),
('two', 556),
('kolpol', 56),
('jojo', 45),
('', 0),
('daniel', 25),
('daniel', 52);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
