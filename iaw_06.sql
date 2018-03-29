-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2018 a las 12:17:15
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iaw_06`
--
CREATE DATABASE IF NOT EXISTS `iaw_06` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `iaw_06`;

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `Trademark` varchar(15) NOT NULL,
  `Model` varchar(30) NOT NULL,
  `Reference` int(10) NOT NULL,
  `Stock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Data dump for table `computers`
--

INSERT INTO `computers` (`Trademark`, `Model`, `Reference`, `Stock`) VALUES
('Dell', 'Inspiron 1500 Series', 10000, 1),
('HP', '255 G6', 20000, 1),
('Lenovo', 'Ideacentre 620S', 30000, 0),
('Fujitsu', 'Esprimo P420', 40000, 1),
('MSI', 'Aegis 3 VR7RC-003EU', 50000, 0);

--
-- Indexes for overturned tables
--

--
-- Indexes of table `computers`
--
ALTER TABLE `computers`
  ADD PRIMARY KEY (`Reference`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
