-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2022 at 08:56 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_smnilaisiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` varchar(6) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(11) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `role` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `nama`, `username`, `pass`, `role`) VALUES
('ad7665', 'Jobs', 'jobs', '12345', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru`
--

CREATE TABLE `tb_guru` (
  `id` varchar(6) NOT NULL,
  `nip` int(18) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `username` varchar(11) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `role` int(2) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru`
--

INSERT INTO `tb_guru` (`id`, `nip`, `nama`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `no_hp`, `username`, `pass`, `role`) VALUES
('gu6752', 2147483647, 'Steve', 'Colorado', '2022-11-18', 'L', 'California', '08978234', 'steve', '12345', 2),
('gu8035', 32523423, 'Amanda Clarissa', 'New york', '2022-11-02', 'P', 'New York', '8117267158', 'mandasa', '12345', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_guru_mapel`
--

CREATE TABLE `tb_guru_mapel` (
  `id` varchar(6) NOT NULL,
  `id_guru` varchar(6) NOT NULL,
  `id_mapel` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_guru_mapel`
--

INSERT INTO `tb_guru_mapel` (`id`, `id_guru`, `id_mapel`) VALUES
('mp7452', 'gu6752', 'mp4257'),
('mp1862', 'gu8035', 'mp4257'),
('mp9184', 'gu8035', 'mp6845');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mapel`
--

CREATE TABLE `tb_mapel` (
  `id` varchar(6) NOT NULL,
  `mata_pelajaran` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mapel`
--

INSERT INTO `tb_mapel` (`id`, `mata_pelajaran`) VALUES
('mp4257', 'Sains'),
('mp6845', 'Matematika');

-- --------------------------------------------------------

--
-- Table structure for table `tb_murid`
--

CREATE TABLE `tb_murid` (
  `id` varchar(6) NOT NULL,
  `nisn` int(10) NOT NULL,
  `nama_murid` varchar(20) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` enum('P','L') NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `username` varchar(11) NOT NULL,
  `pass` varchar(8) NOT NULL,
  `role` int(2) NOT NULL DEFAULT '3'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_murid`
--

INSERT INTO `tb_murid` (`id`, `nisn`, `nama_murid`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `username`, `pass`, `role`) VALUES
('mu0972', 745645, 'charlie', 'New york', '2022-11-15', 'L', 'New York', 'charlie', '12345', 3),
('mu5067', 5467563, 'Amanda Clarissa', 'Colorado', '2022-11-04', 'P', 'New York', 'mandasa', '12345', 3),
('mu8547', 984562342, 'Renita', 'Colorado', '2022-11-03', 'P', 'Australia', 'renita', '12345', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` varchar(6) NOT NULL,
  `id_guru` varchar(6) NOT NULL,
  `id_murid` varchar(6) NOT NULL,
  `id_mapel` varchar(6) NOT NULL,
  `nilai` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `id_guru`, `id_murid`, `id_mapel`, `nilai`) VALUES
('pe1524', 'gu6752', 'mu5067', 'mp4257', 80),
('pe2064', 'gu6752', 'mu8547', 'mp4257', 80),
('pe7831', 'gu6752', 'mu0972', 'mp4257', 80);

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id` int(2) NOT NULL,
  `role` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Murid');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `tb_guru_mapel`
--
ALTER TABLE `tb_guru_mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`,`id_mapel`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tb_mapel`
--
ALTER TABLE `tb_mapel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_murid`
--
ALTER TABLE `tb_murid`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role` (`role`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_guru` (`id_guru`,`id_murid`,`id_mapel`),
  ADD KEY `id_murid` (`id_murid`),
  ADD KEY `id_mapel` (`id_mapel`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_role`
--
ALTER TABLE `tb_role`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD CONSTRAINT `tb_admin_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tb_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_guru`
--
ALTER TABLE `tb_guru`
  ADD CONSTRAINT `tb_guru_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tb_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_guru_mapel`
--
ALTER TABLE `tb_guru_mapel`
  ADD CONSTRAINT `tb_guru_mapel_ibfk_1` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_guru_mapel_ibfk_2` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_murid`
--
ALTER TABLE `tb_murid`
  ADD CONSTRAINT `tb_murid_ibfk_1` FOREIGN KEY (`role`) REFERENCES `tb_role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`id_murid`) REFERENCES `tb_murid` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `tb_mapel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`id_guru`) REFERENCES `tb_guru` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
