/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.16-MariaDB : Database - diklat
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `tb_angkatan` */

DROP TABLE IF EXISTS `tb_angkatan`;

CREATE TABLE `tb_angkatan` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nama_diklat` varchar(200) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_angkatan` */

/*Table structure for table `tb_detail_admin` */

DROP TABLE IF EXISTS `tb_detail_admin`;

CREATE TABLE `tb_detail_admin` (
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
  KEY `user_akun_id_2` (`user_akun_id`),
  CONSTRAINT `tb_detail_admin_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_detail_admin` */

insert  into `tb_detail_admin`(`id`,`user_akun_id`,`nik`,`nama`,`jekel`,`tempat_lahir`,`tgl_lahir`,`alamat`,`nomor_hp`) values (2,31,'131400036','Adi Raka Siwi','Laki-Laki','Padang','1994-04-29','Padang','081268280648');

/*Table structure for table `tb_detail_asmen` */

DROP TABLE IF EXISTS `tb_detail_asmen`;

CREATE TABLE `tb_detail_asmen` (
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
  CONSTRAINT `tb_detail_asmen_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_detail_asmen` */

/*Table structure for table `tb_detail_instruktur` */

DROP TABLE IF EXISTS `tb_detail_instruktur`;

CREATE TABLE `tb_detail_instruktur` (
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
  KEY `user_akun_id` (`user_akun_id`),
  CONSTRAINT `tb_detail_instruktur_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_detail_instruktur` */

/*Table structure for table `tb_detail_peserta` */

DROP TABLE IF EXISTS `tb_detail_peserta`;

CREATE TABLE `tb_detail_peserta` (
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
  KEY `user_akun_id` (`user_akun_id`),
  CONSTRAINT `tb_detail_peserta_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`),
  CONSTRAINT `tb_detail_peserta_ibfk_2` FOREIGN KEY (`kamar_id`) REFERENCES `tb_kamar` (`id`),
  CONSTRAINT `tb_detail_peserta_ibfk_3` FOREIGN KEY (`angkatan_id`) REFERENCES `tb_angkatan` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_detail_peserta` */

/*Table structure for table `tb_detail_staff` */

DROP TABLE IF EXISTS `tb_detail_staff`;

CREATE TABLE `tb_detail_staff` (
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
  KEY `user_akun_id_2` (`user_akun_id`),
  CONSTRAINT `tb_detail_staff_ibfk_1` FOREIGN KEY (`user_akun_id`) REFERENCES `tb_user_akun` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_detail_staff` */

/*Table structure for table `tb_jadwal_diklat` */

DROP TABLE IF EXISTS `tb_jadwal_diklat`;

CREATE TABLE `tb_jadwal_diklat` (
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
  KEY `detail_instruktur_id` (`detail_instruktur_id`),
  CONSTRAINT `tb_jadwal_diklat_ibfk_1` FOREIGN KEY (`angkatan_id`) REFERENCES `tb_angkatan` (`id`),
  CONSTRAINT `tb_jadwal_diklat_ibfk_2` FOREIGN KEY (`mata_pelajaran_id`) REFERENCES `tb_mata_pelajaran` (`id`),
  CONSTRAINT `tb_jadwal_diklat_ibfk_3` FOREIGN KEY (`detail_instruktur_id`) REFERENCES `tb_detail_instruktur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_jadwal_diklat` */

/*Table structure for table `tb_kamar` */

DROP TABLE IF EXISTS `tb_kamar`;

CREATE TABLE `tb_kamar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_asrama` varchar(50) NOT NULL,
  `nomor_kamar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `tb_kamar` */

insert  into `tb_kamar`(`id`,`nama_asrama`,`nomor_kamar`) values (2,'Asrama 3','3.01'),(3,'Asrama 3','3.02');

/*Table structure for table `tb_mata_pelajaran` */

DROP TABLE IF EXISTS `tb_mata_pelajaran`;

CREATE TABLE `tb_mata_pelajaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pelajaran` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `tb_mata_pelajaran` */

insert  into `tb_mata_pelajaran`(`id`,`nama_pelajaran`) values (1,'HJ'),(2,'MTBG');

/*Table structure for table `tb_materi` */

DROP TABLE IF EXISTS `tb_materi`;

CREATE TABLE `tb_materi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `detail_instruktur_id` int(11) NOT NULL,
  `judul_materi` varchar(100) NOT NULL,
  `lokasi` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `detail_instruktur_id` (`detail_instruktur_id`),
  CONSTRAINT `tb_materi_ibfk_1` FOREIGN KEY (`detail_instruktur_id`) REFERENCES `tb_detail_instruktur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tb_materi` */

/*Table structure for table `tb_nilai` */

DROP TABLE IF EXISTS `tb_nilai`;

CREATE TABLE `tb_nilai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `angkatan_id` int(11) NOT NULL,
  `mata_pelajaran_id` int(11) NOT NULL,
  `detail_peserta_id` int(11) NOT NULL,
  `detail_instruktur_id` int(11) NOT NULL,
  `nilai` varchar(200) NOT NULL,
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
  KEY `detail_instruktur_id_2` (`detail_instruktur_id`),
  CONSTRAINT `tb_nilai_ibfk_1` FOREIGN KEY (`angkatan_id`) REFERENCES `tb_angkatan` (`id`),
  CONSTRAINT `tb_nilai_ibfk_2` FOREIGN KEY (`mata_pelajaran_id`) REFERENCES `tb_mata_pelajaran` (`id`),
  CONSTRAINT `tb_nilai_ibfk_3` FOREIGN KEY (`detail_peserta_id`) REFERENCES `tb_detail_peserta` (`id`),
  CONSTRAINT `tb_nilai_ibfk_4` FOREIGN KEY (`detail_instruktur_id`) REFERENCES `tb_detail_instruktur` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tb_nilai` */

/*Table structure for table `tb_user_akun` */

DROP TABLE IF EXISTS `tb_user_akun`;

CREATE TABLE `tb_user_akun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` enum('staff','asmen','instruktur','peserta','admin') NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

/*Data for the table `tb_user_akun` */

insert  into `tb_user_akun`(`id`,`username`,`password`,`hak_akses`,`status`) values (31,'131400036','d58b9d726538345be5d7cd978622db78','admin',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
