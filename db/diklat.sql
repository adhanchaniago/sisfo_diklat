-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2017 at 05:25 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `diklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_angkatan`
--

CREATE TABLE IF NOT EXISTS `tb_angkatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_diklat` varchar(200) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tb_angkatan`
--

INSERT INTO `tb_angkatan` (`id`, `nama_diklat`, `tgl_masuk`, `tgl_selesai`) VALUES
(15, 'DIKLAT PENAKSIR & ANALIS KREDIT MUDA ANGKATAN XI TAHUN 2017', '2017-03-07', '2017-04-29'),
(16, 'PENDIDIKAN DAN PELATIHAN GADAI SYARIAH', '2017-07-13', '2017-07-22'),
(17, 'DIKLAT PENAKSIR & ANALIS KREDIT MADYA ANGKATAN II TAHUN 2017', '2015-04-27', '2015-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_admin`
--

CREATE TABLE IF NOT EXISTS `tb_detail_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_akun_id` (`user_akun_id`),
  KEY `user_akun_id_2` (`user_akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_detail_admin`
--

INSERT INTO `tb_detail_admin` (`id`, `user_akun_id`, `nik`, `nama`, `jekel`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nomor_hp`) VALUES
(2, 31, '131400036', 'Adi Raka Siwi', 'Laki-Laki', 'Padang', '1994-04-29', 'Padang', '081268280648'),
(3, 42, '131400020', 'Huda Prasetia', 'Laki-Laki', 'Padang', '1991-11-22', 'Jl. Proklamasi No 22 Padang', '081363101009');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_asmen`
--

CREATE TABLE IF NOT EXISTS `tb_detail_asmen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_akun_id` (`user_akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_detail_asmen`
--

INSERT INTO `tb_detail_asmen` (`id`, `user_akun_id`, `nik`, `nama`, `jekel`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nomor_hp`) VALUES
(1, 40, 'P84567', 'Yendriwasih', 'Perempuan', 'Bukittinggi', '1976-03-20', 'Jl. Cengkeh ', '081374516363'),
(2, 147, 'P84778', 'Nadrawati', 'Perempuan', 'Biaro', '1965-03-11', 'Lubuk Minturun ', '081363346479');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_instruktur`
--

CREATE TABLE IF NOT EXISTS `tb_detail_instruktur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_akun_id` (`user_akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `tb_detail_instruktur`
--

INSERT INTO `tb_detail_instruktur` (`id`, `user_akun_id`, `nik`, `nama`, `jekel`, `nomor_hp`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
(1, 32, 'P84123', 'Asmadi', 'Laki-Laki', '081363043899', 'Pariaman', '1976-03-10', 'Jl. Gunung Pangilun Padang'),
(2, 37, 'P84234', 'Leny', 'Perempuan', '081267020616', 'Kota Baru, Solok', '1977-01-16', 'Jl. Belanti No 34 Padang'),
(3, 38, 'P84345', 'Edwar', 'Laki-Laki', '089723112908', 'Padang', '1975-01-07', 'Jl. Tan Malaka Sawahan Padang'),
(4, 39, 'P84456', 'Peni Marzuki', 'Laki-Laki', '081374990201', 'Batusangkar', '1979-04-28', 'Jl. Andalas Padang'),
(5, 45, 'P86123', 'Gusti Yeni', 'Perempuan', '081274879811', 'Pariaman', '1980-04-01', 'Jl. Nerwana No 31 Padang Barat'),
(6, 46, 'P86234', 'Hari Subur Tjahji', 'Laki-Laki', '081374562873', '', '1980-02-01', 'Jl. Kampar Selatan, Kepulauan Riau'),
(7, 47, 'P86345', 'Hari Evy S', 'Laki-Laki', '08779112931', 'Jakarta', '1969-06-09', 'Komp. Sinarmas, Pekanbaru'),
(9, 49, 'P86567', 'Mery Andriati S', 'Perempuan', '087911129311', 'Padang', '1976-10-11', 'Komp. Polda Sumbar, Padang'),
(10, 50, 'P86678', 'Arifmon', 'Laki-Laki', '081319788901', 'Payakumbuh', '1969-09-17', 'Jl. Seroja No 44 Pekanbaru'),
(11, 107, 'P1234', 'Dwi Hadi Atmaka', 'Laki-Laki', '081374555777', 'Solo', '1968-07-28', 'Jl. Tanah Sirah No 12, Padang'),
(14, 110, 'P4567', 'Dilla Kortriza', 'Perempuan', '08126742789', 'Padang', '1976-10-18', 'Jl. Air Camar Padang'),
(15, 111, 'P5678', 'Yendriwasih', 'Perempuan', '081374516363', 'Bukittinggi', '2017-10-12', 'Jl. Cengkeh Padang'),
(16, 112, 'P6789', 'Yolla Yolanda', 'Perempuan', '081374567721', 'Jakarta', '1982-07-07', 'Jl. Raden Saleh Padang'),
(17, 113, 'P7890', 'Vona Yufani', 'Perempuan', '081977889111', 'Jakarta', '1983-10-07', 'Jl. Sukajati, Jakarta Pusat'),
(18, 114, 'P8901', 'Muh. Fahmi', 'Laki-Laki', '081266613133', 'Padang', '1981-09-01', 'Jl. Ampang No 13 Padang'),
(19, 115, 'P9012', 'Imam Subekti', 'Laki-Laki', '087812345612', 'Samarinda', '1970-01-01', 'Jl. Jati Negara, Jakarta Pusat'),
(20, 116, 'P9123', 'Andra Djunaidy', 'Laki-Laki', '08199987651', 'Lubuk Alung', '1970-12-01', 'Jl. Lintas Bukittinggi, Lubuk Alung '),
(21, 117, 'P9234', 'Mustofa', 'Laki-Laki', '081966677721', 'Semarang', '1979-10-28', 'Blok E Gang Jati, Jakarta Pusat'),
(22, 146, 'P9345', 'Alnafiah Alius', 'Laki-Laki', '081977828911', 'Padang', '1960-01-14', 'Tabing Padang No 45 ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_peserta`
--

CREATE TABLE IF NOT EXISTS `tb_detail_peserta` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kamar_id` int(11) NOT NULL,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `angkatan_id` int(11) NOT NULL,
  `nomor_absen` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('laki-laki','perempuan') DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `cabang_asal` varchar(100) DEFAULT NULL,
  `alamat_kantor` varchar(100) DEFAULT NULL,
  `tlp_kantor` varchar(12) DEFAULT NULL,
  `nomor_hp` varchar(12) DEFAULT NULL,
  `alamat_rumah` varchar(100) DEFAULT NULL,
  `agama` enum('islam','katolik','protestan','hindu','buddha') DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `ktp` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `kamar_id` (`kamar_id`),
  KEY `angkatan_id` (`angkatan_id`),
  KEY `kamar_id_2` (`kamar_id`),
  KEY `user_akun_id` (`user_akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=86 ;

--
-- Dumping data for table `tb_detail_peserta`
--

INSERT INTO `tb_detail_peserta` (`id`, `kamar_id`, `user_akun_id`, `nik`, `angkatan_id`, `nomor_absen`, `nama`, `jekel`, `tempat_lahir`, `tgl_lahir`, `cabang_asal`, `alamat_kantor`, `tlp_kantor`, `nomor_hp`, `alamat_rumah`, `agama`, `foto`, `ktp`) VALUES
(60, 4, 118, 'P89148035', 15, 1, 'Nining Purnama Sari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(61, 2, 119, 'P921613093', 15, 2, 'T. Aulia Akbar', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(62, 2, 120, 'P941613121', 15, 3, 'Chandra Muliawan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(64, 3, 122, 'P851511776', 15, 5, 'Rudi Kencana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(65, 8, 123, 'P931613056', 15, 6, 'Rezha Pratama Lubis', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(70, 3, 130, 'P921613458', 15, 7, 'Rizky Rizali Wardana', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(71, 5, 131, 'P88149178', 15, 8, 'Endang Sri Wardani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(72, 8, 132, 'P931613673', 15, 9, 'Dhanton Anut Panjaitan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(73, 9, 133, 'P921613071', 15, 10, 'Muflih Rori Putra Harahap', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(74, 9, 134, 'P85148081', 15, 11, 'Aradea Anabrang', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(75, 6, 135, 'P861511874', 15, 12, 'Siti Rahmadhani Nasution', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(76, 4, 136, 'P91149229', 15, 13, 'Marizana Ramadhani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(77, 5, 137, 'P8714 9143', 15, 14, 'Dini Hanisyahfitri Sinaga', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(78, 6, 138, 'P82149256', 15, 15, 'Teja Ogan Andalusia', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(79, 28, 139, 'P86149109', 15, 16, 'Herman Putra Sibarani', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(80, 7, 140, 'P87149168', 15, 17, 'Meriam Emma Sari Simanjuntak', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(81, 28, 141, 'P84149273', 15, 18, 'Irwan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(82, 29, 142, 'P90149495', 15, 19, 'Yepta T.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(83, 30, 143, 'P86149104', 15, 20, 'Muhammad Januspati A. Hasibuan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(84, 7, 144, 'P921613065', 15, 21, 'Fitri Sundari', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(85, 6, 145, 'P89148037', 15, 22, 'Hetti Keristina BR. Tarigan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_staff`
--

CREATE TABLE IF NOT EXISTS `tb_detail_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_akun_id` (`user_akun_id`),
  KEY `user_akun_id_2` (`user_akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_detail_staff`
--

INSERT INTO `tb_detail_staff` (`id`, `user_akun_id`, `nik`, `nama`, `jekel`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nomor_hp`) VALUES
(1, 41, 'P912211', 'Wira Friska Hadi', 'Laki-Laki', 'Bukittinggi', '1984-08-22', 'Jl. Pariaman, Steba Padang', '081371177998');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_diklat`
--

CREATE TABLE IF NOT EXISTS `tb_jadwal_diklat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan_id` int(11) NOT NULL,
  `mata_pelajaran_id` int(11) NOT NULL,
  `detail_instruktur_id` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `tgl` date NOT NULL,
  `waktu_mulai` varchar(10) NOT NULL,
  `waktu_selesai` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `angkatan_id` (`angkatan_id`),
  KEY `mata_pelajaran_id` (`mata_pelajaran_id`),
  KEY `detail_instruktur_id` (`detail_instruktur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `tb_jadwal_diklat`
--

INSERT INTO `tb_jadwal_diklat` (`id`, `angkatan_id`, `mata_pelajaran_id`, `detail_instruktur_id`, `hari`, `tgl`, `waktu_mulai`, `waktu_selesai`) VALUES
(1, 15, 16, 10, 'Selasa', '2017-03-07', '07.30', '10.45'),
(2, 15, 18, 22, 'Selasa', '2017-03-07', '10.45', '14.30'),
(3, 15, 8, 20, 'Rabu', '2017-03-08', '07.30', '12.15'),
(4, 15, 6, 3, 'Rabu', '2017-03-08', '13.00', '17.45'),
(5, 15, 8, 20, 'Kamis', '2017-03-09', '07.30', '12.15'),
(6, 15, 6, 3, 'Kamis', '2017-03-09', '13.00', '17.45'),
(7, 15, 3, 2, 'Jumat', '2017-03-10', '07.30', '10.45'),
(8, 15, 6, 3, 'Jumat', '2017-03-10', '13.00', '17.45'),
(9, 15, 8, 20, 'Sabtu', '2017-03-11', '07.30', '14.30'),
(10, 15, 6, 3, 'Sabtu', '2017-03-11', '14.45', '17.45'),
(11, 15, 21, 20, 'Senin', '2017-03-13', '07.30', '09.00'),
(12, 15, 3, 2, 'Senin', '2017-03-13', '09.15', '12.15'),
(13, 15, 2, 3, 'Senin', '2017-03-13', '13.00', '17.45'),
(14, 15, 3, 2, 'Selasa', '2017-03-14', '07.30', '09.00'),
(15, 15, 2, 3, 'Selasa', '2017-03-14', '13.00', '17.45'),
(16, 15, 3, 2, 'Rabu', '2017-03-15', '07.30', '12.15'),
(17, 15, 6, 3, 'Rabu', '2017-03-15', '13.00', '17.45'),
(18, 15, 10, 7, 'Kamis', '2017-03-16', '07.30', '12.15'),
(19, 15, 3, 2, 'Kamis', '2017-03-16', '13.00', '17.45'),
(20, 15, 23, 3, 'Jumat', '2017-03-17', '07.30', '09.00'),
(21, 15, 3, 2, 'Jumat', '2017-10-17', '09.15', '14.30'),
(22, 15, 10, 6, 'Jumat', '2017-03-17', '14.45', '17.45'),
(23, 15, 7, 15, 'Sabtu', '2017-03-18', '07.30', '14.30'),
(24, 15, 27, 7, 'Senin', '2017-03-20', '07.30', '09.00'),
(25, 15, 4, 4, 'Senin', '2017-03-20', '09.15', '14.30'),
(26, 15, 7, 15, 'Senin', '2017-03-20', '14.45', '17.45'),
(27, 15, 7, 15, 'Selasa', '2017-03-21', '07.30', '12.15'),
(28, 15, 4, 4, 'Selasa', '2017-03-21', '14.45', '17.45'),
(29, 15, 4, 4, 'Rabu', '2017-03-22', '07.30', '09.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_asrama` varchar(50) NOT NULL,
  `nomor_kamar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id`, `nama_asrama`, `nomor_kamar`) VALUES
(2, 'Asrama 3', '3.01'),
(3, 'Asrama 3', '3.02'),
(4, 'Asrama 4', '4.01'),
(5, 'Asrama 4', '4.02'),
(6, 'Asrama 4', '4.03'),
(7, 'Asrama 4', '4.04'),
(8, 'Asrama 3', '3.03'),
(9, 'Asrama 3', '3.04'),
(10, 'Asrama 3', '3.05'),
(11, 'Asrama 3', '3.06'),
(12, 'Asrama 3', '3.07'),
(13, 'Asrama 3', '3.08'),
(14, 'Asrama 3', '3.09'),
(15, 'Asrama 3', '3.10'),
(16, 'Asrama 1', '1.01'),
(17, 'Asrama 1', '1.02'),
(18, 'Asrama 1', '1.03'),
(19, 'Asrama 1', '1.04'),
(20, 'Asrama 2', '2.01'),
(21, 'Asrama 2', '2.02'),
(22, 'Asrama 2 ', '2.03'),
(23, 'Asrama 2', '2.04'),
(24, 'Asrama 5', '5.01'),
(25, 'Asrama 5', '5.02'),
(26, 'Asrama 5', '5.03'),
(27, 'Asrama 5', '5.04'),
(28, 'Asrama 6', '6.01'),
(29, 'Asrama 6', '6.02'),
(30, 'Asrama 6', '6.03'),
(31, 'Asrama 6', '6.04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `tb_mata_pelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `tb_mata_pelajaran`
--

INSERT INTO `tb_mata_pelajaran` (`id`, `nama_pelajaran`) VALUES
(1, 'Hukum Jaminan Fidusia (HJF)'),
(2, 'Metode Teknik Menaksir Barang Gudang (MTBG)'),
(3, 'Metode Teknik Menaksir Logam Perhiasan (MTLP)'),
(4, 'Dasar-dasar Pembiayaan dan Perkreditan (DPP)'),
(5, 'Metode dan Teknik Menaksir Permata Intan (MTPI)'),
(6, 'Metode dan Teknik Menaksir Barang Gudang (MTBG)'),
(7, 'Pedoman Operasional Bisnis Fidusia (POBF)'),
(8, 'Proses Kerja Penaksir (PKP)'),
(9, 'Pegadaian Sistem Informasi Online (PAS)'),
(10, 'Akuntansi dan Keuangan (AK)'),
(11, 'Budaya Perusahaan (BP)'),
(12, 'Standar Pelayanan Pegadaian (SPP)'),
(13, 'Personality Development (PD)'),
(14, 'Pemasaran Market Inteligen & Sales (PMIS)'),
(15, 'Ceramah Direksi (CD)'),
(16, 'Ceramah Literasi Kebijakan Perusahaan (CLKP)'),
(17, 'Ceramah Kebijakan SHC (CKSHC)'),
(18, 'Ceramah Produk Emas (CPE)'),
(19, 'Ceramah Identifikasi Keaslian Kendaraan Bermotor '),
(20, 'Ceramah Tindak Pidana Korupsi (CTPK)'),
(21, 'UJIAN Proses Kerja Penaksir'),
(22, 'UJIAN Metode Teknik Menaksir Logam Perhiasan'),
(23, 'UJIAN Metode Teknik Menaksir Barang Gudang'),
(24, 'UJIAN  Metode Teknik Menaksir Permata Intan'),
(25, 'UJIAN Dasar-dasar Pembiayaan dan Perkreditan'),
(26, 'UJIAN Pedoman Operasional BIsnis Fidusia'),
(27, 'UJIAN Akuntansi dan Keuangan'),
(28, 'UJIAN Budaya Perusahaan'),
(29, 'UJIAN Pegadaian Sistem Informasi Online'),
(30, 'UJIAN Standar Pelayanan Pegadaian'),
(31, 'UJIAN Hukum Jaminan Fidusia'),
(32, 'UJIAN Pemasaran Market Inteligen & Sales');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE IF NOT EXISTS `tb_materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_instruktur_id` int(11) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_instruktur_id` (`detail_instruktur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id`, `detail_instruktur_id`, `judul_materi`, `lokasi`) VALUES
(1, 1, 'Pelatihan OJK', 'MATERI-P84123-34629-20170923.pptx');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE IF NOT EXISTS `tb_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan_id` int(11) NOT NULL,
  `mata_pelajaran_id` int(11) NOT NULL,
  `detail_peserta_id` int(11) NOT NULL,
  `detail_instruktur_id` int(11) NOT NULL,
  `nilai` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`),
  KEY `mata_pelajaran_id` (`mata_pelajaran_id`),
  KEY `detail_peserta_id` (`detail_peserta_id`),
  KEY `nilai` (`nilai`),
  KEY `detail_peserta_id_2` (`detail_peserta_id`),
  KEY `mata_pelajaran_id_2` (`mata_pelajaran_id`),
  KEY `angkatan_id` (`angkatan_id`),
  KEY `mata_pelajaran_id_3` (`mata_pelajaran_id`),
  KEY `detail_peserta_id_3` (`detail_peserta_id`),
  KEY `nilai_2` (`nilai`),
  KEY `detail_instruktur_id` (`detail_instruktur_id`),
  KEY `angkatan_id_2` (`angkatan_id`),
  KEY `mata_pelajaran_id_4` (`mata_pelajaran_id`),
  KEY `detail_peserta_id_4` (`detail_peserta_id`),
  KEY `detail_instruktur_id_2` (`detail_instruktur_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=64 ;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `angkatan_id`, `mata_pelajaran_id`, `detail_peserta_id`, `detail_instruktur_id`, `nilai`) VALUES
(1, 15, 6, 60, 3, '70'),
(2, 15, 6, 61, 3, '85'),
(3, 15, 6, 62, 3, '77'),
(4, 15, 6, 64, 3, '81'),
(5, 15, 6, 65, 3, '90'),
(6, 15, 6, 70, 3, '75'),
(7, 15, 6, 71, 3, '70'),
(8, 15, 6, 72, 3, '85'),
(9, 15, 6, 73, 3, '80'),
(10, 15, 6, 74, 3, '79'),
(11, 15, 6, 75, 3, '88'),
(12, 15, 6, 76, 3, '80'),
(13, 15, 6, 77, 3, '80'),
(14, 15, 6, 78, 3, '85'),
(15, 15, 6, 79, 3, '70'),
(16, 15, 6, 80, 3, '75'),
(17, 15, 6, 81, 3, '75'),
(18, 15, 6, 82, 3, '79'),
(19, 15, 6, 83, 3, '77'),
(20, 15, 6, 84, 3, '85'),
(21, 15, 6, 85, 3, '80'),
(22, 15, 10, 60, 7, '75'),
(23, 15, 10, 61, 7, '80'),
(24, 15, 10, 62, 7, '75'),
(25, 15, 10, 64, 7, '80'),
(26, 15, 10, 65, 7, '77'),
(27, 15, 10, 70, 7, '80'),
(28, 15, 10, 71, 7, '75'),
(29, 15, 10, 72, 7, '90'),
(30, 15, 10, 73, 7, '75'),
(31, 15, 10, 74, 7, '73'),
(32, 15, 10, 75, 7, '76'),
(33, 15, 10, 76, 7, '78'),
(34, 15, 10, 77, 7, '89'),
(35, 15, 10, 78, 7, '85'),
(36, 15, 10, 79, 7, '85'),
(37, 15, 10, 80, 7, '82'),
(38, 15, 10, 81, 7, '70'),
(39, 15, 10, 82, 7, '80'),
(40, 15, 10, 83, 7, '70'),
(41, 15, 10, 84, 7, '80'),
(42, 15, 10, 85, 7, '70'),
(43, 15, 8, 60, 20, '80'),
(44, 15, 8, 61, 20, '80'),
(45, 15, 8, 62, 20, '75'),
(46, 15, 8, 64, 20, '90'),
(47, 15, 8, 65, 20, '87'),
(48, 15, 8, 70, 20, '75'),
(49, 15, 8, 71, 20, '75'),
(50, 15, 8, 72, 20, '90'),
(51, 15, 8, 73, 20, '91'),
(52, 15, 8, 74, 20, '78'),
(53, 15, 8, 75, 20, '80'),
(54, 15, 8, 76, 20, '88'),
(55, 15, 8, 77, 20, '75'),
(56, 15, 8, 78, 20, '80'),
(57, 15, 8, 79, 20, '80'),
(58, 15, 8, 80, 20, '88'),
(59, 15, 8, 81, 20, '90'),
(60, 15, 8, 82, 20, '87'),
(61, 15, 8, 83, 20, '85'),
(62, 15, 8, 84, 20, '80'),
(63, 15, 8, 85, 20, '88');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_akun`
--

CREATE TABLE IF NOT EXISTS `tb_user_akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('staff','asmen','instruktur','peserta','admin') NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=148 ;

--
-- Dumping data for table `tb_user_akun`
--

INSERT INTO `tb_user_akun` (`id`, `username`, `password`, `hak_akses`, `status`) VALUES
(31, '131400036', 'd58b9d726538345be5d7cd978622db78', 'admin', 1),
(32, 'P84123', '8306df3234691d44e4062da2a708b138', 'instruktur', 1),
(37, 'P84234', '662fcfe71de11821cd90eef1bb338e45', 'instruktur', 1),
(38, 'P84345', '01f41db39ac077519e36f2e3ef5f5299', 'instruktur', 1),
(39, 'P84456', 'c4a76b15856b2116bc812418a1670e7e', 'instruktur', 1),
(40, 'P84567', 'ee512ca7554aa579f8320f1b2babfd5e', 'asmen', 1),
(41, 'P912211', 'd71827132b0cc637be2098f210677f51', 'staff', 1),
(42, '131400020', '439a6408ccef86d4327260e4f90b1e5b', 'admin', 1),
(45, 'P86123', '257b84726cacdee483dcf4499c850d82', 'instruktur', 1),
(46, 'P86234', '8286c223a1d14e8f7b957f7f53b2d653', 'instruktur', 1),
(47, 'P86345', '201b97f19bda7a5032f19e80cb2e4e3f', 'instruktur', 1),
(49, 'P86567', '597d3797c401fca0742586120a0403f7', 'instruktur', 1),
(50, 'P86678', '63c25c5d56192380b03fba85f6bd0fe7', 'instruktur', 1),
(107, 'P1234', 'b345b94e859379fc760ea7f11518cb08', 'instruktur', 1),
(110, 'P4567', '5b4112bb5147e95098bcf9f016638441', 'instruktur', 1),
(111, 'P5678', '42548135ef9618565d3d814a56a69063', 'instruktur', 1),
(112, 'P6789', '06b546cbddfdf2bcda24b3055891edb9', 'instruktur', 1),
(113, 'P7890', '4ff810c801dbd182ce15ea2db5b3de8e', 'instruktur', 1),
(114, 'P8901', '67c56d6d0d138732c9a96574d235aa8c', 'instruktur', 1),
(115, 'P9012', '1479eae3fdb169c994873779630a06a9', 'instruktur', 1),
(116, 'P9123', '4f7521a85d1668d3e121654f044be890', 'instruktur', 1),
(117, 'P9234', '248084b7ddc3a1b8d42cc392c9bfe77c', 'instruktur', 1),
(118, 'P89148035', '8d563c2698423a77d5be14af572f7e47', 'peserta', 1),
(119, 'P921613093', '7c6f6da1c90a235e91f5ddccee151255', 'peserta', 1),
(120, 'P941613121', '98455c2fbbad6a1fc9b0096101b83778', 'peserta', 1),
(121, 'P911613052', 'f600928adf01b5ce15e23a9e123939dd', 'peserta', 1),
(122, 'P851511776', '20e90e291b5ceb720e0133d862917462', 'peserta', 1),
(123, 'P931613056', '645235c1c5ec864595930e98fc18df90', 'peserta', 1),
(130, 'P921613458', '1ceb4e86e622c8c486d8bb5ad9f38fb4', 'peserta', 1),
(131, 'P88149178', '862b6966b70836f83140103997e49714', 'peserta', 1),
(132, 'P931613673', 'de43969428e3d5d063e958a3853fcd78', 'peserta', 1),
(133, 'P921613071', 'da59d3fe1b22540bf670cedb9a71a731', 'peserta', 1),
(134, 'P85148081', '4e8e58816aba6ea890c2b9a6f90d56e2', 'peserta', 1),
(135, 'P861511874', 'b11a9be50f7bcfdaf80fc546141b8c5d', 'peserta', 1),
(136, 'P91149229', 'cb1277b4f3ab8b8eb041f79b34bd8b82', 'peserta', 1),
(137, 'P8714 9143', '5fac515874b7b87b2ef48493db4919fc', 'peserta', 1),
(138, 'P82149256', 'a82b5f49ddde82e57497ce97d9ef58f1', 'peserta', 1),
(139, 'P86149109', 'a1629711c83d38dc4906b4e3b44767a7', 'peserta', 1),
(140, 'P87149168', 'ff0a6d37fd042207c2005298ab5e0ce7', 'peserta', 1),
(141, 'P84149273', '87389ee1b94167c24fa65ec088312518', 'peserta', 1),
(142, 'P90149495', 'cb0604b2443bbac6988608d01377a6cd', 'peserta', 1),
(143, 'P86149104', '40d4f051c907213931d1d7b79dc100e6', 'peserta', 1),
(144, 'P921613065', '13697d15507fd43937136d5356523d8e', 'peserta', 1),
(145, 'P89148037', '36b45cf814f80e05223597351c4ceb7f', 'peserta', 1),
(146, 'P9345', 'f423b1bead6d6cd778d56202ab4e203e', 'instruktur', 1),
(147, 'P84778', '1b3d18a3c49c198ddbb69f0b2e0c0a31', 'asmen', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_detail_admin`
--
ALTER TABLE `tb_detail_admin`
  ADD CONSTRAINT `tb_detail_admin_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`);

--
-- Constraints for table `tb_detail_asmen`
--
ALTER TABLE `tb_detail_asmen`
  ADD CONSTRAINT `tb_detail_asmen_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`);

--
-- Constraints for table `tb_detail_instruktur`
--
ALTER TABLE `tb_detail_instruktur`
  ADD CONSTRAINT `tb_detail_instruktur_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`);

--
-- Constraints for table `tb_detail_peserta`
--
ALTER TABLE `tb_detail_peserta`
  ADD CONSTRAINT `tb_detail_peserta_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`),
  ADD CONSTRAINT `tb_detail_peserta_ibfk_2` FOREIGN KEY (`kamar_id`) REFERENCES `tb_kamar` (`id`),
  ADD CONSTRAINT `tb_detail_peserta_ibfk_3` FOREIGN KEY (`angkatan_id`) REFERENCES `tb_angkatan` (`id`);

--
-- Constraints for table `tb_detail_staff`
--
ALTER TABLE `tb_detail_staff`
  ADD CONSTRAINT `tb_detail_staff_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`);

--
-- Constraints for table `tb_jadwal_diklat`
--
ALTER TABLE `tb_jadwal_diklat`
  ADD CONSTRAINT `tb_jadwal_diklat_ibfk_1` FOREIGN KEY (`angkatan_id`) REFERENCES `tb_angkatan` (`id`),
  ADD CONSTRAINT `tb_jadwal_diklat_ibfk_2` FOREIGN KEY (`mata_pelajaran_id`) REFERENCES `tb_mata_pelajaran` (`id`),
  ADD CONSTRAINT `tb_jadwal_diklat_ibfk_3` FOREIGN KEY (`detail_instruktur_id`) REFERENCES `tb_detail_instruktur` (`id`);

--
-- Constraints for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD CONSTRAINT `tb_materi_ibfk_1` FOREIGN KEY (`detail_instruktur_id`) REFERENCES `tb_detail_instruktur` (`id`);

--
-- Constraints for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`angkatan_id`) REFERENCES `tb_angkatan` (`id`),
  ADD CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`mata_pelajaran_id`) REFERENCES `tb_mata_pelajaran` (`id`),
  ADD CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`detail_peserta_id`) REFERENCES `tb_detail_peserta` (`id`),
  ADD CONSTRAINT `tb_nilai_ibfk_4` FOREIGN KEY (`detail_instruktur_id`) REFERENCES `tb_detail_instruktur` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
