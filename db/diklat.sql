-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2017 at 11:28 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diklat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_angkatan`
--

CREATE TABLE `tb_angkatan` (
  `id` int(10) NOT NULL,
  `nama_diklat` varchar(200) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_selesai` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_angkatan`
--

INSERT INTO `tb_angkatan` (`id`, `nama_diklat`, `tgl_masuk`, `tgl_selesai`) VALUES
(4, 'Diklat Penaksir Muda Angkatan I Tahun 2017', '2017-05-13', '2017-06-14'),
(5, 'xxxxxxxxxxxxxxxxxxxxxxxxx', '2017-09-26', '2017-09-30');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_admin`
--

CREATE TABLE `tb_detail_admin` (
  `id` int(11) NOT NULL,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_admin`
--

INSERT INTO `tb_detail_admin` (`id`, `user_akun_id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nomor_hp`) VALUES
(1, 22, '221191', 'huda', 'Padang', '1991-11-22', 'Jl. Proklamasih No 22 Padang', '081363101009'),
(2, 31, '131400036', 'Adi Raka Siwi', 'Padang', '1994-04-29', 'Padang', '081268280648');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_asmen`
--

CREATE TABLE `tb_detail_asmen` (
  `id` int(11) NOT NULL,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_asmen`
--

INSERT INTO `tb_detail_asmen` (`id`, `user_akun_id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nomor_hp`) VALUES
(3, 27, '1234', 'Yendriwasih', 'Agam', '1965-04-12', 'Jl. Cengkeh ', '081374516363');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_instruktur`
--

CREATE TABLE `tb_detail_instruktur` (
  `id` int(11) NOT NULL,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_instruktur`
--

INSERT INTO `tb_detail_instruktur` (`id`, `user_akun_id`, `nik`, `nama`, `nomor_hp`, `tempat_lahir`, `tgl_lahir`, `alamat`) VALUES
(6, 28, '12345', 'Leny', '081267020616', 'Solok', '1967-07-15', 'Jl. Beringin Padang'),
(7, 35, '131400123', 'Rikishi', '081212312332', 'Padang Panjang', '1991-06-20', 'FK UNAND');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_peserta`
--

CREATE TABLE `tb_detail_peserta` (
  `id` int(11) NOT NULL,
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
  `ktp` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_peserta`
--

INSERT INTO `tb_detail_peserta` (`id`, `kamar_id`, `user_akun_id`, `nik`, `angkatan_id`, `nomor_absen`, `nama`, `jekel`, `tempat_lahir`, `tgl_lahir`, `cabang_asal`, `alamat_kantor`, `tlp_kantor`, `nomor_hp`, `alamat_rumah`, `agama`, `foto`, `ktp`) VALUES
(2, 2, 40, 'P8637', 4, 1, 'Budi Harianto, S.Pd', 'laki-laki', 'Padang', '1990-12-10', 'Cabang Terandam, Padang', 'Jl. Proklamasi No. 22 Padang - Sumbar', '0751 - 09266', '085223431232', 'Jln. Antah No. 234 Padang', 'islam', 'PRF-P8637.jpg', 'KTP-P8637.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_staff`
--

CREATE TABLE `tb_detail_staff` (
  `id` int(11) NOT NULL,
  `user_akun_id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_hp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_detail_staff`
--

INSERT INTO `tb_detail_staff` (`id`, `user_akun_id`, `nik`, `nama`, `tempat_lahir`, `tgl_lahir`, `alamat`, `nomor_hp`) VALUES
(2, 29, '123456', 'Wira Friska Atmaka', 'Bukittinggi', '1987-07-21', 'Steba Padang', '081371177998'),
(3, 33, '131400067', 'Jhon Cena', 'Bukittinggi', '1989-10-18', 'Padang', '085212398756'),
(4, 34, '131400092', 'Brock Lesnar', 'Lubeg', '1999-12-21', 'Padang', '081323454321');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jadwal_diklat`
--

CREATE TABLE `tb_jadwal_diklat` (
  `id` int(11) NOT NULL,
  `angkatan_id` int(11) NOT NULL,
  `mata_pelajaran_id` int(11) NOT NULL,
  `detail_instruktur_id` int(11) NOT NULL,
  `hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `tgl` date NOT NULL,
  `waktu_mulai` varchar(10) NOT NULL,
  `waktu_selesai` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_jadwal_diklat`
--

INSERT INTO `tb_jadwal_diklat` (`id`, `angkatan_id`, `mata_pelajaran_id`, `detail_instruktur_id`, `hari`, `tgl`, `waktu_mulai`, `waktu_selesai`) VALUES
(2, 4, 2, 6, 'Rabu', '2017-09-13', '07.30', '09.00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kamar`
--

CREATE TABLE `tb_kamar` (
  `id` int(11) NOT NULL,
  `nama_asrama` varchar(50) NOT NULL,
  `nomor_kamar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_kamar`
--

INSERT INTO `tb_kamar` (`id`, `nama_asrama`, `nomor_kamar`) VALUES
(2, 'Asrama 3', '3.01'),
(3, 'Asrama 3', '3.02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mata_pelajaran`
--

CREATE TABLE `tb_mata_pelajaran` (
  `id` int(11) NOT NULL,
  `nama_pelajaran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_mata_pelajaran`
--

INSERT INTO `tb_mata_pelajaran` (`id`, `nama_pelajaran`) VALUES
(1, 'Hukum Jaminan'),
(2, 'Metologi Teknik Barang Gudang (MTBG)');

-- --------------------------------------------------------

--
-- Table structure for table `tb_materi`
--

CREATE TABLE `tb_materi` (
  `id` int(11) NOT NULL,
  `detail_instruktur_id` int(11) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_materi`
--

INSERT INTO `tb_materi` (`id`, `detail_instruktur_id`, `judul_materi`, `lokasi`) VALUES
(1, 6, 'Materi asdasdsad Faker', 'MATERI-12345-50374-20170912.xls');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nilai`
--

CREATE TABLE `tb_nilai` (
  `id` int(11) NOT NULL,
  `angkatan_id` int(11) NOT NULL,
  `mata_pelajaran_id` int(11) NOT NULL,
  `detail_peserta_id` int(11) NOT NULL,
  `detail_instruktur_id` int(11) NOT NULL,
  `nilai` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_nilai`
--

INSERT INTO `tb_nilai` (`id`, `angkatan_id`, `mata_pelajaran_id`, `detail_peserta_id`, `detail_instruktur_id`, `nilai`) VALUES
(1, 4, 2, 2, 6, '90');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_akun`
--

CREATE TABLE `tb_user_akun` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('staff','asmen','instruktur','peserta','admin') NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_user_akun`
--

INSERT INTO `tb_user_akun` (`id`, `username`, `password`, `hak_akses`, `status`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 1),
(2, 'staff', '1253208465b1efa876f982d8a9e73eef', 'staff', 1),
(3, 'asmen', '7c7fc44923be659f0a6355e7ed1174f7', 'asmen', 1),
(4, 'instruktur', '904a21816242160aecca3f7b4f5898f4', 'instruktur', 1),
(5, 'peserta', '129451d83a60351a82516cb836842c68', 'peserta', 1),
(22, '221191', '865c20518b0d5d0b9f18b5c4dd8fcba3', 'admin', 1),
(27, '1234', '81dc9bdb52d04dc20036dbd8313ed055', 'asmen', 1),
(28, '12345', '827ccb0eea8a706c4c34a16891f84e7b', 'instruktur', 1),
(29, '123456', 'e10adc3949ba59abbe56e057f20f883e', 'staff', 1),
(31, '131400036', '0858dcffabb19cf27bcae1865f8530c5', 'admin', 1),
(33, '131400067', '90b184d89eedbc6adde1ea671f6a3f7c', 'staff', 1),
(34, '131400092', '10b1a9cc3d4c8e72dfb88ae35ed933a7', 'staff', 1),
(35, '131400123', 'c0a7e9b4efe4d554853ab78264812935', 'instruktur', 1),
(36, '131400199', '56d5240927e5ae73b266f58b4bb7b353', 'admin', 1),
(40, 'P8637', '0858dcffabb19cf27bcae1865f8530c5', 'peserta', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_detail_admin`
--
ALTER TABLE `tb_detail_admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_akun_id` (`user_akun_id`),
  ADD KEY `user_akun_id_2` (`user_akun_id`);

--
-- Indexes for table `tb_detail_asmen`
--
ALTER TABLE `tb_detail_asmen`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_akun_id` (`user_akun_id`);

--
-- Indexes for table `tb_detail_instruktur`
--
ALTER TABLE `tb_detail_instruktur`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_akun_id` (`user_akun_id`);

--
-- Indexes for table `tb_detail_peserta`
--
ALTER TABLE `tb_detail_peserta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kamar_id` (`kamar_id`),
  ADD KEY `angkatan_id` (`angkatan_id`),
  ADD KEY `kamar_id_2` (`kamar_id`),
  ADD KEY `user_akun_id` (`user_akun_id`);

--
-- Indexes for table `tb_detail_staff`
--
ALTER TABLE `tb_detail_staff`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_akun_id` (`user_akun_id`),
  ADD KEY `user_akun_id_2` (`user_akun_id`);

--
-- Indexes for table `tb_jadwal_diklat`
--
ALTER TABLE `tb_jadwal_diklat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `angkatan_id` (`angkatan_id`),
  ADD KEY `mata_pelajaran_id` (`mata_pelajaran_id`),
  ADD KEY `detail_instruktur_id` (`detail_instruktur_id`);

--
-- Indexes for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_mata_pelajaran`
--
ALTER TABLE `tb_mata_pelajaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_materi`
--
ALTER TABLE `tb_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `detail_instruktur_id` (`detail_instruktur_id`);

--
-- Indexes for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `mata_pelajaran_id` (`mata_pelajaran_id`),
  ADD KEY `detail_peserta_id` (`detail_peserta_id`),
  ADD KEY `nilai` (`nilai`),
  ADD KEY `detail_peserta_id_2` (`detail_peserta_id`),
  ADD KEY `mata_pelajaran_id_2` (`mata_pelajaran_id`),
  ADD KEY `angkatan_id` (`angkatan_id`),
  ADD KEY `mata_pelajaran_id_3` (`mata_pelajaran_id`),
  ADD KEY `detail_peserta_id_3` (`detail_peserta_id`),
  ADD KEY `nilai_2` (`nilai`),
  ADD KEY `detail_instruktur_id` (`detail_instruktur_id`),
  ADD KEY `angkatan_id_2` (`angkatan_id`),
  ADD KEY `mata_pelajaran_id_4` (`mata_pelajaran_id`),
  ADD KEY `detail_peserta_id_4` (`detail_peserta_id`),
  ADD KEY `detail_instruktur_id_2` (`detail_instruktur_id`);

--
-- Indexes for table `tb_user_akun`
--
ALTER TABLE `tb_user_akun`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_angkatan`
--
ALTER TABLE `tb_angkatan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_detail_admin`
--
ALTER TABLE `tb_detail_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_detail_asmen`
--
ALTER TABLE `tb_detail_asmen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_detail_instruktur`
--
ALTER TABLE `tb_detail_instruktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_detail_peserta`
--
ALTER TABLE `tb_detail_peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_detail_staff`
--
ALTER TABLE `tb_detail_staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_jadwal_diklat`
--
ALTER TABLE `tb_jadwal_diklat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_kamar`
--
ALTER TABLE `tb_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tb_mata_pelajaran`
--
ALTER TABLE `tb_mata_pelajaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_materi`
--
ALTER TABLE `tb_materi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_nilai`
--
ALTER TABLE `tb_nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_user_akun`
--
ALTER TABLE `tb_user_akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
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
