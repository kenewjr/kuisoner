-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2021 at 06:21 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kuisioner`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `password` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `password`) VALUES
('abrar', 123);

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` int(8) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telp` int(50) NOT NULL,
  `email` varchar(35) NOT NULL,
  `id_prodi` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `password`, `nama`, `tempat_lahir`, `tanggal_lahir`, `telp`, `email`, `id_prodi`) VALUES
(11, '698d51a19d8a121ce581499d7b701668', 'abrar', 'serang', '2021-07-21', 2147483647, 'sdadasdsad', 0),
(113, '202cb962ac59075b964b07152d234b70', 'aaa', 'serang', '2021-07-21', 3321, 'kenelewatan@gmail.com', 0),
(111111, 'c4ca4238a0b923820dcc509a6f75849b', 'aqw', 'serang', '2021-07-14', 421421421, 'dasdasdasdsa', 0),
(11220034, '827ccb0eea8a706c4c34a16891f84e7b', 'Fajar Noviandy', 'Serang', '1996-11-11', 857752346, 'fnvdy1996@gmail.com', 1),
(11220035, 'e10adc3949ba59abbe56e057f20f883e', 'Permai Ramadhan', '2021-07-06', '2021-07-06', 857756278, 'permai@gmail.com', 0),
(22344569, '202cb962ac59075b964b07152d234b70', 'abrar', 'serang', '2021-07-13', 2147483647, 'dasdasdasdsa', 0),
(22344570, '202cb962ac59075b964b07152d234b70', 'parjo', 'ewew', '2021-07-21', 3321, 'sdadasdsad', 0);

-- --------------------------------------------------------

--
-- Table structure for table `quisioner`
--

CREATE TABLE `quisioner` (
  `no` int(20) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  `kurang` int(200) NOT NULL,
  `baik` int(200) NOT NULL,
  `sangat_baik` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quisioner`
--

INSERT INTO `quisioner` (`no`, `pertanyaan`, `kurang`, `baik`, `sangat_baik`) VALUES
(1, 'Dalam merespon keluhan mahasiswa', 10, 7, 25),
(2, 'Ketepatan waktu dalam mengampu kuliah ', 30, 5, 7),
(3, 'Pelayanan akademik ', 20, 12, 10),
(4, 'Pelayanan internet', 7, 10, 25),
(5, 'Pelayanan kemahasiswaan ', 35, 5, 2),
(6, 'Pelayanan tata usaha', 20, 12, 10),
(7, 'Perpustakaan dan fasilitasnya ', 15, 15, 12),
(8, 'Program asuransi mahasiswa', 10, 22, 10),
(9, 'Program beasiswa', 12, 10, 20),
(10, 'Strukture materi perkuliahan ', 5, 5, 32);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `quisioner`
--
ALTER TABLE `quisioner`
  ADD PRIMARY KEY (`no`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `nim` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22344571;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
