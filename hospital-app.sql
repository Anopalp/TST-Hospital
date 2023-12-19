-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 03:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` varchar(225) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `golongan` varchar(225) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `golongan`, `jumlah`, `harga`) VALUES
('1', 'Terima Angin', 'Obat Herbal', 140, 56000),
('2', 'Panadol - Paranti Nahan Modol', 'Obat Bebas', 511, 49000);

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_pasien` int(100) NOT NULL,
  `nama_pasien` varchar(225) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `asuransi` varchar(225) NOT NULL,
  `id_bpjs` varchar(225) DEFAULT NULL,
  `kelas_rawat` varchar(225) DEFAULT NULL,
  `pj` varchar(225) DEFAULT NULL,
  `telp_pj` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_pasien`, `nama_pasien`, `tanggal_lahir`, `golongan_darah`, `asuransi`, `id_bpjs`, `kelas_rawat`, `pj`, `telp_pj`) VALUES
(1, 'sam', '2002-07-10', 'A', 'BPJS', '3851253301', '1', NULL, NULL),
(2, 'tops', '1000-02-09', 'B', 'Non BPJS', NULL, NULL, 'sam', '0920-1029-0192'),
(3, 'sam', '2002-07-10', 'A', 'BPJS', '3851253301', '1', NULL, NULL),
(4, 'lip', '2101-01-09', 'D', 'Non BPJS', NULL, NULL, 'S', '0192-0192-0192'),
(5, 'tops', '1999-12-09', 'D', 'BPJS', '8398728303', '1', NULL, NULL),
(6, 'tops', '1999-12-09', 'W', 'BPJS', '8398728303', '1', NULL, NULL),
(7, 'lip', '1000-01-01', 'I', 'Non BPJS', NULL, NULL, 'sam', '1029-1029-0192'),
(8, 'tops', '1999-12-09', 'Q', 'BPJS', '8398728303', '1', NULL, NULL),
(9, 'sam', '2002-07-10', 'S', 'BPJS', '3851253301', '1', NULL, NULL),
(10, 'nopal', '2012-12-12', 'O', 'BPJS', '1669251274', '2', NULL, NULL),
(11, 'sam', '2002-07-10', 'E', 'BPJS', '3851253301', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id_request` int(11) NOT NULL,
  `nama_obat` varchar(225) NOT NULL,
  `jumlah_request` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `status_request` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_request`, `nama_obat`, `jumlah_request`, `total_harga`, `status_request`) VALUES
(1, 'Terima Angin', 1, 56000, 'Diterima'),
(2, 'Panadol - Paranti Nahan Modol', 1, 49000, 'Diterima'),
(3, 'Terima Angin', 1000, 56000000, 'Ditolak'),
(4, 'Panadol - Paranti Nahan Modol', 70, 3430000, 'Ditolak');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`) VALUES
('Muhammad Aliefnaufal', 'lip', '13cd2f564722a27f4032ac66435f979e'),
('Samuel Eric', 'sam', 'f3e1abbdcff6ab622e031e36459c57cb'),
('Christopher Febrian', 'top', '19ee8fb0ab02f329afb9133e56d31025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id_request`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
