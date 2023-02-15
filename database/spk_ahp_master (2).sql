-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 14, 2021 at 06:23 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk_ahp_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `namauser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `namauser`) VALUES
('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
('2', 'admin1', '21232f297a57a5a743894a0e4a801fc3', 'Agus D'),
('3', 'admin2', '21232f297a57a5a743894a0e4a801fc3', 'Maria L');

-- --------------------------------------------------------

--
-- Table structure for table `perbandingan_kriteria`
--

CREATE TABLE `perbandingan_kriteria` (
  `id_kriteria` varchar(3) NOT NULL,
  `nilai_banding` int(5) NOT NULL,
  `kriteria1` varchar(30) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `kriteria2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perbandingan_kriteria`
--

INSERT INTO `perbandingan_kriteria` (`id_kriteria`, `nilai_banding`, `kriteria1`, `nm_banding`, `kriteria2`) VALUES
('B01', 1, 'C01', '1. Sama penting dengan', 'C01'),
('B02', 1, 'C02', '1. Sama penting dengan', 'C02'),
('B03', 1, 'C03', '1. Sama penting dengan', 'C03'),
('B04', 1, 'C04', '1. Sama penting dengan', 'C04');

-- --------------------------------------------------------

--
-- Table structure for table `perb_alternatif`
--

CREATE TABLE `perb_alternatif` (
  `id_alternatif` varchar(3) NOT NULL,
  `nm_banding` varchar(30) NOT NULL,
  `nb_db` int(5) NOT NULL,
  `alternatif1` varchar(30) NOT NULL,
  `alternatif2` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perb_alternatif`
--

INSERT INTO `perb_alternatif` (`id_alternatif`, `nm_banding`, `nb_db`, `alternatif1`, `alternatif2`) VALUES
('A02', '1. Sama penting dengan', 1, 'Maria', 'Maria'),
('A03', '1. Sama penting dengan', 1, 'Agus', 'Agus'),
('A04', '1. Sama penting dengan', 1, 'Widia', 'Widia'),
('A05', '1. Sama penting dengan', 1, 'Iman', 'Iman'),
('A06', '1. Sama penting dengan', 1, 'Jono', 'Jono');

-- --------------------------------------------------------

--
-- Table structure for table `pw_kriteria`
--

CREATE TABLE `pw_kriteria` (
  `id` int(2) NOT NULL,
  `pw1` varchar(5) NOT NULL,
  `pw2` varchar(5) NOT NULL,
  `pw3` varchar(5) NOT NULL,
  `pw4` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pw_kriteria`
--

INSERT INTO `pw_kriteria` (`id`, `pw1`, `pw2`, `pw3`, `pw4`) VALUES
(1, '0.39', '0.28', '0.2', '0.14'),
(2, '0.25', '0.25', '0.25', '0.25'),
(3, '0', '0.25', '0.25', '0.25'),
(4, '0.51', '0.28', '0.14', '0.08'),
(5, '0.5', '0.28', '0.14', '0.08'),
(6, '0.5', '0.28', '0.14', '0.08'),
(7, '0.5', '0.28', '0.14', '0.08'),
(8, '0.42', '0.23', '0.2', '0.15'),
(9, '0.25', '0.25', '0.25', '0.25'),
(10, '0.25', '0.25', '0.25', '0.25'),
(11, '0.39', '0.28', '0.2', '0.14'),
(12, '0.25', '0.25', '0.25', '0.25'),
(13, '0.25', '0.25', '0.25', '0.25'),
(14, '0.25', '0.25', '0.25', '0.25'),
(15, '0.25', '0.25', '0.25', '0.25'),
(16, '0.25', '0.25', '0.25', '0.25'),
(17, '0.25', '0.25', '0.25', '0.25'),
(18, '0.25', '0.25', '0.25', '0.25'),
(19, '0.25', '0.25', '0.25', '0.25'),
(20, '0.25', '0.25', '0.25', '0.25'),
(21, '0.25', '0.25', '0.25', '0.25'),
(22, '0.25', '0.25', '0.25', '0.25'),
(23, '0.25', '0.25', '0.25', '0.25'),
(24, '0.25', '0.25', '0.25', '0.25'),
(25, '0.25', '0.25', '0.25', '0.25'),
(26, '0.25', '0.25', '0.25', '0.25'),
(27, '0.25', '0.25', '0.25', '0.25'),
(28, '0.25', '0.25', '0.25', '0.25'),
(29, '0.25', '0.25', '0.25', '0.25'),
(30, '0.25', '0.25', '0.25', '0.25'),
(31, '0.25', '0.25', '0.25', '0.25'),
(32, '0.25', '0.25', '0.25', '0.25'),
(33, '0.25', '0.25', '0.25', '0.25'),
(34, '0.25', '0.25', '0.25', '0.25'),
(35, '0.25', '0.25', '0.25', '0.25'),
(36, '0.25', '0.25', '0.25', '0.25'),
(37, '0.25', '0.25', '0.25', '0.25'),
(38, '0.25', '0.25', '0.25', '0.25'),
(39, '0.25', '0.25', '0.25', '0.25'),
(40, '0.25', '0.25', '0.25', '0.25'),
(41, '0.25', '0.25', '0.25', '0.25'),
(42, '0.25', '0.25', '0.25', '0.25'),
(43, '0.25', '0.25', '0.25', '0.25'),
(44, '0.25', '0.25', '0.25', '0.25'),
(45, '0.25', '0.25', '0.25', '0.25'),
(46, '0.25', '0.25', '0.25', '0.25'),
(47, '0.25', '0.25', '0.25', '0.25'),
(48, '0.25', '0.25', '0.25', '0.25'),
(49, '0.25', '0.25', '0.25', '0.25'),
(50, '0.25', '0.25', '0.25', '0.25'),
(51, '0.25', '0.25', '0.25', '0.25'),
(52, '0.25', '0.25', '0.25', '0.25'),
(53, '0.25', '0.25', '0.25', '0.25'),
(54, '0.25', '0.25', '0.25', '0.25'),
(55, '0.25', '0.25', '0.25', '0.25'),
(56, '0.25', '0.25', '0.25', '0.25'),
(57, '0.25', '0.25', '0.25', '0.25'),
(58, '0.25', '0.25', '0.25', '0.25'),
(59, '0.25', '0.25', '0.25', '0.25'),
(60, '0.25', '0.25', '0.25', '0.25'),
(61, '0.25', '0.25', '0.25', '0.25'),
(62, '0.25', '0.25', '0.25', '0.25'),
(63, '0.25', '0.25', '0.25', '0.25'),
(64, '0.25', '0.25', '0.25', '0.25'),
(65, '0.25', '0.25', '0.25', '0.25'),
(66, '0.25', '0.25', '0.25', '0.25'),
(67, '0.25', '0.25', '0.25', '0.25'),
(68, '0.25', '0.25', '0.25', '0.25'),
(69, '0.25', '0.25', '0.25', '0.25'),
(70, '0.25', '0.25', '0.25', '0.25'),
(71, '0.25', '0.25', '0.25', '0.25'),
(72, '0.25', '0.25', '0.25', '0.25'),
(73, '0.25', '0.25', '0.25', '0.25'),
(74, '0.25', '0.25', '0.25', '0.25'),
(75, '0.25', '0.25', '0.25', '0.25'),
(76, '0.25', '0.25', '0.25', '0.25'),
(77, '0.25', '0.25', '0.25', '0.25'),
(78, '0.25', '0.25', '0.25', '0.25'),
(79, '0.25', '0.25', '0.25', '0.25'),
(80, '0.25', '0.25', '0.25', '0.25'),
(81, '0.25', '0.25', '0.25', '0.25'),
(82, '0.25', '0.25', '0.25', '0.25'),
(83, '0.25', '0.25', '0.25', '0.25'),
(84, '0.25', '0.25', '0.25', '0.25'),
(85, '0.25', '0.25', '0.25', '0.25'),
(86, '0.25', '0.25', '0.25', '0.25'),
(87, '0.25', '0.25', '0.25', '0.25'),
(88, '0.25', '0.25', '0.25', '0.25'),
(89, '0.25', '0.25', '0.25', '0.25'),
(90, '0.25', '0.25', '0.25', '0.25'),
(91, '0.25', '0.25', '0.25', '0.25'),
(92, '0.25', '0.25', '0.25', '0.25'),
(93, '0.25', '0.25', '0.25', '0.25'),
(94, '0.25', '0.25', '0.25', '0.25'),
(95, '0.25', '0.25', '0.25', '0.25'),
(96, '0.25', '0.25', '0.25', '0.25'),
(97, '0.25', '0.25', '0.25', '0.25'),
(98, '0.25', '0.25', '0.25', '0.25'),
(99, '0.25', '0.25', '0.25', '0.25'),
(100, '0.25', '0.25', '0.25', '0.25'),
(101, '0.25', '0.25', '0.25', '0.25'),
(102, '0.25', '0.25', '0.25', '0.25'),
(103, '0.25', '0.25', '0.25', '0.25'),
(104, '0.25', '0.25', '0.25', '0.25'),
(105, '0.25', '0.25', '0.25', '0.25'),
(106, '0.25', '0.25', '0.25', '0.25'),
(107, '0.25', '0.25', '0.25', '0.25'),
(108, '0.25', '0.25', '0.25', '0.25'),
(109, '0.25', '0.25', '0.25', '0.25'),
(110, '0.25', '0.25', '0.25', '0.25'),
(111, '0.25', '0.25', '0.25', '0.25'),
(112, '0.25', '0.25', '0.25', '0.25'),
(113, '0.25', '0.25', '0.25', '0.25'),
(114, '0.25', '0.25', '0.25', '0.25'),
(115, '0.25', '0.25', '0.25', '0.25'),
(116, '0.25', '0.25', '0.25', '0.25'),
(117, '0.25', '0.25', '0.25', '0.25'),
(118, '0.25', '0.25', '0.25', '0.25'),
(119, '0.39', '0.28', '0.2', '0.14'),
(120, '0.38', '0.3', '0.18', '0.14'),
(121, '0.37', '0.35', '0.17', '0.12'),
(122, '0.38', '0.3', '0.18', '0.14'),
(123, '0.41', '0.3', '0.18', '0.12'),
(124, '0.25', '0.25', '0.25', '0.25'),
(125, '0.25', '0.25', '0.25', '0.25'),
(126, '0.25', '0.25', '0.25', '0.25'),
(127, '0.25', '0.25', '0.25', '0.25'),
(128, '0.25', '0.25', '0.25', '0.25'),
(129, '0.25', '0.25', '0.25', '0.25'),
(130, '0.25', '0.25', '0.25', '0.25'),
(131, '0.25', '0.25', '0.25', '0.25'),
(132, '0.25', '0.25', '0.25', '0.25'),
(133, '0.25', '0.25', '0.25', '0.25'),
(134, '0.25', '0.25', '0.25', '0.25'),
(135, '0.25', '0.25', '0.25', '0.25'),
(136, '0.25', '0.25', '0.25', '0.25'),
(137, '0.25', '0.25', '0.25', '0.25'),
(138, '0.44', '0.29', '0.16', '0.12'),
(139, '0.44', '0.29', '0.16', '0.12'),
(140, '0.4', '0.28', '0.19', '0.13'),
(141, '0.25', '0.25', '0.25', '0.25'),
(142, '0.25', '0.25', '0.25', '0.25'),
(143, '0.25', '0.25', '0.25', '0.25'),
(144, '0.25', '0.25', '0.25', '0.25'),
(145, '0.25', '0.25', '0.25', '0.25'),
(146, '0.25', '0.25', '0.25', '0.25'),
(147, '0.39', '0.23', '0.23', '0.14'),
(148, '0.25', '0.25', '0.25', '0.25'),
(149, '0.25', '0.25', '0.25', '0.25'),
(150, '0.25', '0.25', '0.25', '0.25'),
(151, '0.25', '0.25', '0.25', '0.25'),
(152, '0.25', '0.25', '0.25', '0.25'),
(153, '0.25', '0.25', '0.25', '0.25'),
(154, '0.25', '0.25', '0.25', '0.25'),
(155, '0.25', '0.25', '0.25', '0.25'),
(156, '0.25', '0.25', '0.25', '0.25'),
(157, '0.25', '0.25', '0.25', '0.25'),
(158, '0.25', '0.25', '0.25', '0.25'),
(159, '0.25', '0.25', '0.25', '0.25'),
(160, '0.25', '0.25', '0.25', '0.25'),
(161, '0.25', '0.25', '0.25', '0.25'),
(162, '0.25', '0.25', '0.25', '0.25'),
(163, '0.33', '0.31', '0.23', '0.13'),
(164, '0.52', '0.2', '0.19', '0.1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kriteria`
--

CREATE TABLE `tbl_kriteria` (
  `id_kriteria` varchar(7) NOT NULL,
  `kd_kriteria` int(7) NOT NULL,
  `nama_kriteria` varchar(50) NOT NULL,
  `atribute` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kriteria`
--

INSERT INTO `tbl_kriteria` (`id_kriteria`, `kd_kriteria`, `nama_kriteria`, `atribute`) VALUES
('krt-001', 201, 'Usia', 'benefit'),
('krt-002', 202, 'Diameter Batang', 'benefit'),
('krt-003', 203, 'Banyak Buah', 'benefit'),
('krt-004', 204, 'Hama', 'cost');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mhs`
--

CREATE TABLE `tbl_mhs` (
  `id_mhs` varchar(7) NOT NULL,
  `nim` int(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mhs`
--

INSERT INTO `tbl_mhs` (`id_mhs`, `nim`, `nama`, `alamat`) VALUES
('mhs-001', 2011140204, 'Elang', 'Tangerang'),
('mhs-002', 2011140299, 'Maria', 'Tangerang'),
('mhs-003', 2011142347, 'Agus', 'Bambu Apus Pamulang'),
('mhs-004', 2011248346, 'Widia', 'Pondok Aren'),
('mhs-005', 2011323124, 'Iman', 'Tangerang'),
('mhs-006', 22, 'Jono', 'kasdkajdj');

-- --------------------------------------------------------

--
-- Table structure for table `tb_alternatif`
--

CREATE TABLE `tb_alternatif` (
  `id_alternatif` int(11) NOT NULL,
  `nama_alternatif` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_alternatif`
--

INSERT INTO `tb_alternatif` (`id_alternatif`, `nama_alternatif`) VALUES
(51, 'Montong1'),
(59, 'Suwono'),
(65, 'Montong2'),
(67, 'Jiana Salim'),
(68, 'Suwono Salim'),
(69, 'Fahreza Setiawanan'),
(70, 'Fahreza Setiawanan'),
(71, 'Fahreza Setiawanan'),
(73, 'Montong3'),
(74, ''),
(75, 'Adi Susanto'),
(76, 'sasa'),
(77, 'Eko'),
(78, 'suciptoo'),
(79, 'Adi Susanto'),
(80, 'Eko'),
(81, 'Adi Susanto'),
(82, 'Adi Susanto'),
(83, 'Adi Susanto'),
(84, 'Montong4'),
(87, 'Montong5'),
(88, 'Montong6'),
(89, 'Montong7'),
(90, 'Montong8'),
(91, 'Montong9'),
(92, 'Montong10');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id_nilai` int(11) NOT NULL,
  `id_alternatif` int(50) NOT NULL,
  `kriteria1` int(25) NOT NULL,
  `kriteria2` varchar(25) NOT NULL,
  `kriteria3` varchar(25) NOT NULL,
  `kriteria4` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id_nilai`, `id_alternatif`, `kriteria1`, `kriteria2`, `kriteria3`, `kriteria4`) VALUES
(39, 51, 4, '24.2', '0', '1'),
(53, 65, 6, '27.59', '80', '3'),
(56, 73, 8, '29.46', '90', '4'),
(57, 84, 5, '25.19', '0', '2'),
(60, 87, 6, '27.48', '80', '4'),
(61, 88, 8, '28.66', '90', '3'),
(62, 89, 4, '24.68', '0', '2'),
(63, 90, 6, '26.91', '80', '2'),
(64, 91, 10, '38.85', '100', '5'),
(65, 92, 8, '30.1', '90', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbandingan_kriteria`
--
ALTER TABLE `perbandingan_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `perb_alternatif`
--
ALTER TABLE `perb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kriteria`
--
ALTER TABLE `tbl_kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `tbl_mhs`
--
ALTER TABLE `tbl_mhs`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  ADD PRIMARY KEY (`id_alternatif`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pw_kriteria`
--
ALTER TABLE `pw_kriteria`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=165;

--
-- AUTO_INCREMENT for table `tb_alternatif`
--
ALTER TABLE `tb_alternatif`
  MODIFY `id_alternatif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
