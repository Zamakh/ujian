-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 12:40 PM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ujian`
--

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `nama` varchar(30) DEFAULT NULL,
  `NIK` varchar(20) NOT NULL DEFAULT '',
  `no_hp` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `skema` varchar(50) DEFAULT NULL,
  `sertifikasi` varchar(50) DEFAULT NULL,
  `tempat_uji_kompetensi` varchar(30) DEFAULT NULL,
  `rekomendasi` varchar(30) DEFAULT NULL,
  `tgl_terbit_sertifikasi` date DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `organisasi` varchar(20) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`nama`, `NIK`, `no_hp`, `email`, `skema`, `sertifikasi`, `tempat_uji_kompetensi`, `rekomendasi`, `tgl_terbit_sertifikasi`, `tgl_lahir`, `organisasi`, `updated_at`, `created_at`) VALUES
('asdfasdf', '12312', '343243242', 'afsdfasdf', '', '', '', '', NULL, '0000-00-00', '', '2018-08-07 14:21:05', '2018-08-07 14:21:05'),
('asdfasdf', '123123', '232323', '', '', '', '', '', NULL, '0000-00-00', '', '2018-08-07 14:22:17', '2018-08-07 14:22:17'),
('Budi', '1234', '0988888', 'blbalb@gmail.com', 'asfd', 'asdf', 'adfasdf', 'dafsdfasdf', '2018-08-27', '2018-08-28', 'basdf', '2018-08-07 22:30:57', '2018-08-07 22:30:57'),
('Zamakhsyari Dhofier', '3442099', '082185929217', 'dhofier96@gmail.com', 'afsdfsd', 'adsfadsf', 'adfasdf', 'asfdasdfas', '2018-08-30', '2018-08-27', 'Universitas Jambi', '2018-08-07 17:34:57', '2018-08-07 17:34:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`NIK`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
