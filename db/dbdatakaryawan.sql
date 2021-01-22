-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2021 at 10:56 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbdatakaryawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_datakarayawan`
--

CREATE TABLE `tbl_datakarayawan` (
  `id` int(5) NOT NULL,
  `NIK` varchar(25) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `jabatan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_datakarayawan`
--

INSERT INTO `tbl_datakarayawan` (`id`, `NIK`, `nama_lengkap`, `jenis_kelamin`, `alamat`, `tgl_masuk`, `jabatan`) VALUES
(11, '1274034309990001', 'Dalila Panjaitan', 'Perempuan', 'Jln. Sei Tualang Raso Tanjungbalai', '2017-12-31', 'Kabag Produksi'),
(15, '1473029878129890', 'Rismayanti', 'Perempuan', 'Tanjungbalai', '2017-12-31', 'Manager'),
(16, '1472409878760002', 'Maulida Pratiwi', 'Perempuan', 'Jl. Sepakat, Tanjungbalai', '2017-12-31', 'Kabag Keamanan'),
(17, '127890298760004', 'Ali', 'Laki-Laki', 'Medan', '2019-11-05', 'Staff'),
(18, '1174589030458967', 'Muhammad Imam', 'Laki-Laki', 'Jl. Sipori-pori Kapias Batu VIII', '2015-11-01', 'Sekretaris');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gajikaryawan`
--

CREATE TABLE `tbl_gajikaryawan` (
  `NIK` varchar(25) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jabatan` varchar(25) NOT NULL,
  `gaji_pokok` varchar(15) NOT NULL,
  `gaji_lembur` varchar(15) NOT NULL,
  `total_diterima` varchar(15) NOT NULL,
  `id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gajikaryawan`
--

INSERT INTO `tbl_gajikaryawan` (`NIK`, `nama_karyawan`, `jabatan`, `gaji_pokok`, `gaji_lembur`, `total_diterima`, `id`) VALUES
('1274034309990001', 'Dalila', 'Kabag Produksi', 'Rp. 3.500.000', 'Rp. 700.000', 'Rp. 4.200.000', 7),
('1473029878129890', 'Rismayanti', 'Manager', 'Rp. 5.000.000', 'Rp. 500.000', 'Rp. 5.500.000', 12),
('1472409878760002', 'Maulida Pratiwi', 'Kabag Keamanan', 'Rp. 6.000.000', 'Rp. 1.000.000', 'Rp. 7.000.000', 13),
('1174589030458967', 'Muhammad Imam', 'Sekretaris', 'Rp. 7.000.000', 'Rp. 200.000', 'Rp. 7.200.000', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '827ccb0eea8a706c4c34a16891f84e7b', 'devk@gmail.com', 'PT. ABC ', 1, 'Staff Kepegawaian PT. ABC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_datakarayawan`
--
ALTER TABLE `tbl_datakarayawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gajikaryawan`
--
ALTER TABLE `tbl_gajikaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_datakarayawan`
--
ALTER TABLE `tbl_datakarayawan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_gajikaryawan`
--
ALTER TABLE `tbl_gajikaryawan`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
