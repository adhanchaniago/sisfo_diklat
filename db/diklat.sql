-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2017 at 08:37 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_angkatan`
--

INSERT INTO `tb_angkatan` (`id`, `nama_diklat`, `tgl_masuk`, `tgl_selesai`) VALUES
(1, 'Diklat Penaksir dan Analis Kredit Muda Angkatan I Tahun 2017', '2017-09-20', '2017-09-30'),
(2, 'Workshop Managing Customer Service Officer (CSO) Angkatan III Tahun 2017', '2017-08-01', '2017-08-03'),
(3, 'Diklat Penaksir dan Analis Madya Angkatan II Tahun 2017', '2017-08-30', '2017-09-30');

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
  `nama` varchar(50) NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_akun_id` (`user_akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_detail_asmen`
--

INSERT INTO `tb_detail_asmen` (`id`, `user_akun_id`, `nik`, `nama`, `jekel`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nomor_hp`) VALUES
(1, 40, 'P84567', 'Yendriwasih', 'Perempuan', 'Bukittinggi', '1976-03-20', 'Jl. Cengkeh ', '081374516363');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_instruktur`
--

CREATE TABLE IF NOT EXISTS `tb_detail_instruktur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jekel` enum('Laki-Laki','Perempuan') NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_akun_id` (`user_akun_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_detail_instruktur`
--

INSERT INTO `tb_detail_instruktur` (`id`, `user_akun_id`, `nik`, `nama`, `jekel`, `nomor_hp`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
(1, 32, 'P84123', 'Asmadi', 'Laki-Laki', '081363043899', 'Pariaman', '1976-03-10', 'Jl. Gunung Pangilun Padang'),
(2, 37, 'P84234', 'Leny', 'Perempuan', '081267020616', 'Kota Baru, Solok', '1977-01-16', 'Jl. Belanti No 34 Padang'),
(3, 38, 'P84345', 'Edwar', 'Laki-Laki', '089723112908', 'Padang', '1975-01-07', 'Jl. Tan Malaka Sawahan Padang'),
(4, 39, 'P84456', 'Peni Marzuki', 'Laki-Laki', '081374990201', 'Batusangkar', '1979-04-28', 'Jl. Andalas Padang');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_detail_peserta`
--

INSERT INTO `tb_detail_peserta` (`id`, `kamar_id`, `user_akun_id`, `nik`, `angkatan_id`, `nomor_absen`, `nama`, `jekel`, `tempat_lahir`, `tgl_lahir`, `cabang_asal`, `alamat_kantor`, `tlp_kantor`, `nomor_hp`, `alamat_rumah`, `agama`, `foto`, `ktp`) VALUES
(1, 2, 33, 'P91123', 1, 1, 'Febriyanti Rahayu', 'perempuan', 'Siantar', '1989-02-16', 'Cabang Medan Utama', 'Jl. Pegadaian NO 112 Medan', '', '081198123', 'Jl. Denpasar NO 32 Sumatera Utara', 'islam', NULL, NULL),
(2, 2, 34, 'P91234', 1, 2, 'Eka Yuliana Hasyim', 'perempuan', 'Parepare', '1990-08-21', 'Cabang Sidrap', 'Jl. Andi Makkasau No 54-56 Sidenreng Rappang', '', '081265679001', 'Jl. Terrung No 6 Kota Parepare', 'islam', NULL, NULL),
(3, 3, 35, 'P91345', 1, 3, 'Farrid Kiwang', 'laki-laki', 'Kupang', '1987-10-31', 'Cabang Kupang', 'Jl. Brawijaya No I Kupang', '0380-822508', '081238291010', 'Jl. Supul II No 09 Perumnas Kupang', 'islam', NULL, NULL),
(4, 3, 36, 'P91456', 1, 4, 'I Gusti Ayu Paramitha Gupta', 'perempuan', 'Praya, Lombok Tengah', '1992-02-15', 'Cabang Denpasar', 'Jln. Thamrin No 39 Denpasar', '(0361) 42256', '087861660606', 'RIverride Residence Kau BS Dalung, Kuta Utara ', 'hindu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_staff`
--

CREATE TABLE IF NOT EXISTS `tb_detail_staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_jadwal_diklat`
--

INSERT INTO `tb_jadwal_diklat` (`id`, `angkatan_id`, `mata_pelajaran_id`, `detail_instruktur_id`, `hari`, `tgl`, `waktu_mulai`, `waktu_selesai`) VALUES
(1, 1, 1, 1, 'Rabu', '2017-09-20', '07.30', '10.00'),
(2, 1, 2, 3, 'Rabu', '2017-09-20', '10.30', '13.30'),
(3, 1, 3, 2, 'Rabu', '2017-09-20', '13.30', '15.30'),
(4, 1, 4, 4, 'Rabu', '2017-09-20', '15.20', '16.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE IF NOT EXISTS `tb_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_asrama` varchar(50) NOT NULL,
  `nomor_kamar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id`, `nama_asrama`, `nomor_kamar`) VALUES
(2, 'Asrama 3', '3.01'),
(3, 'Asrama 3', '3.02'),
(4, 'Asrama 4', '4.01'),
(5, 'Asrama 4', '4.02'),
(6, 'Asrama 4', '4.03'),
(7, 'Asrama 4', '4.04');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mata_pelajaran`
--

CREATE TABLE IF NOT EXISTS `tb_mata_pelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_mata_pelajaran`
--

INSERT INTO `tb_mata_pelajaran` (`id`, `nama_pelajaran`) VALUES
(1, 'Hukum Jaminan Fidusia'),
(2, 'Metode Teknik Menaksir Barang Gudang (MTBG)'),
(3, 'Metode Teknik Menaksir Logam Perhiasan (MTLP)'),
(4, 'Dasar-dasar Pembiayaan dan Perkreditan (DPP)');

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `angkatan_id`, `mata_pelajaran_id`, `detail_peserta_id`, `detail_instruktur_id`, `nilai`) VALUES
(1, 1, 1, 1, 1, '70.00'),
(2, 1, 3, 1, 2, '85.00'),
(3, 1, 3, 2, 2, '75.00'),
(4, 1, 3, 3, 2, '80.00'),
(5, 1, 3, 3, 2, '70.00'),
(6, 1, 3, 4, 2, '83.00'),
(7, 1, 1, 2, 1, '80.00'),
(8, 1, 1, 3, 1, '82.00'),
(9, 1, 1, 3, 1, '87.00'),
(10, 1, 1, 4, 1, '80.00'),
(11, 1, 4, 1, 4, '75.00'),
(12, 1, 4, 2, 4, '80.00'),
(13, 1, 4, 3, 4, '75.00'),
(14, 1, 4, 4, 4, '81.00'),
(16, 1, 2, 1, 3, '80.00'),
(18, 1, 2, 2, 3, '81.00'),
(19, 1, 2, 3, 3, '75.00'),
(20, 1, 2, 4, 3, '78.00');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `tb_user_akun`
--

INSERT INTO `tb_user_akun` (`id`, `username`, `password`, `hak_akses`, `status`) VALUES
(31, '131400036', 'd58b9d726538345be5d7cd978622db78', 'admin', 1),
(32, 'P84123', '8306df3234691d44e4062da2a708b138', 'instruktur', 1),
(33, 'P91123', '7539fd746b9b4f67a4e91ebf6439e67b', 'peserta', 1),
(34, 'P91234', '6f8c1c5c4fe7ff7b8a5898c98dab8059', 'peserta', 1),
(35, 'P91345', '4c6f5b24ac89be066793410665ebba0c', 'peserta', 1),
(36, 'P91456', '610a767c148c6a3dbe802f536b4ad7ab', 'peserta', 1),
(37, 'P84234', '662fcfe71de11821cd90eef1bb338e45', 'instruktur', 1),
(38, 'P84345', '01f41db39ac077519e36f2e3ef5f5299', 'instruktur', 1),
(39, 'P84456', 'c4a76b15856b2116bc812418a1670e7e', 'instruktur', 1),
(40, 'P84567', 'ee512ca7554aa579f8320f1b2babfd5e', 'asmen', 1),
(41, 'P912211', 'd71827132b0cc637be2098f210677f51', 'staff', 1),
(42, '131400020', '07abb1f3a1882b60b38fa59b8eec8384', 'admin', 1);

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
