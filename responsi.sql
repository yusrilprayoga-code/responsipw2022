-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 12:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `responsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `no_telp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `no_telp`) VALUES
(1, 'admin', 'admin', 'yusril prayoga', '0822');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `VIN` int(20) NOT NULL,
  `vehicle_name` varchar(30) NOT NULL,
  `device_name` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `series` varchar(30) NOT NULL,
  `wiper_width` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VIN`, `vehicle_name`, `device_name`, `type`, `series`, `wiper_width`) VALUES
(3, 'Ferrari LaFerrari Aperta', 'LaFerrari Aperta', 'Aperta', 'V12', 950),
(4, 'Pagani Huayra Tricolore', 'Huayra Tricolore', 'Aermacchi MB-339A P.A.N', 'V12', 829),
(5, 'Koenigsegg CCXR Trevita', 'CCXR Trevita', 'Trevita', 'V8', 480),
(6, 'Lamborghini Veneno', 'Veneno', 'Veneno', 'V12', 335),
(7, 'Lykan Hypersport', 'Hypersport', 'Hypersport', 'V12', 750),
(8, 'Ferrari F60 Amerika', 'F60 Amerika', 'F60 Amerika', 'V12', 320),
(9, 'Lamborghini Reventon', 'Reventon', 'Reventon', 'V12', 650),
(10, 'Aston Martin One-77', 'One-77', 'One-77', 'V12', 354),
(11, 'McLaren P1', 'P1', 'P1', 'V12', 720),
(12, 'Lamborghini Sesto Elemento', 'Sesto Elemento', 'Sesto Elemento', 'V12', 570),
(13, 'Pagani Zonda Cinque Roadster', 'Zonda Cinque Roadster', 'Zonda Cinque Roadster', 'V12', 678),
(16, 'Hennessey Venom GT', 'Venom GT', 'Toyota', 'V12', 375),
(17, 'Porsche 918 Spyder', '918 spyder', '918 spyder', 'V12', 540);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`VIN`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `VIN` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
