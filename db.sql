/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.1.38-MariaDB : Database - news-web
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`news-web` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `news-web`;

/*Table structure for table `about` */

DROP TABLE IF EXISTS `about`;

CREATE TABLE `about` (
  `id_about` int(11) NOT NULL,
  `visi_about` text NOT NULL,
  `misi_about` text NOT NULL,
  `gambar_about` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `about` */

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`username`,`password`) values 
(5,'admin','$2y$10$R/k.imQFL57dle2wTBW09.OQiw1W0PcaifQzBGls1LAEvseE44XH.');

/*Table structure for table `berita` */

DROP TABLE IF EXISTS `berita`;

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(11) DEFAULT NULL,
  `judul_berita` varchar(100) DEFAULT NULL,
  `tgl_berita` date DEFAULT NULL,
  `isi_berita` text,
  `gambar_berita` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

/*Data for the table `berita` */

insert  into `berita`(`id_berita`,`id_kategori`,`judul_berita`,`tgl_berita`,`isi_berita`,`gambar_berita`) values 
(18,23,'brita budaya','2024-09-02','sasas','alvaro-morata_169.jpeg'),
(19,23,'ssfsfs','2024-09-02','sfsfsfs','alvaro-morata_169.jpeg');

/*Table structure for table `kategori` */

DROP TABLE IF EXISTS `kategori`;

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

/*Data for the table `kategori` */

insert  into `kategori`(`id_kategori`,`nama_kategori`) values 
(23,'budaya'),
(24,'politik');

/*Table structure for table `kontak` */

DROP TABLE IF EXISTS `kontak`;

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kontak` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `no_telp` varchar(100) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`id_kontak`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `kontak` */

insert  into `kontak`(`id_kontak`,`nama_kontak`,`email`,`facebook`,`instagram`,`no_telp`,`alamat`) values 
(1,'G. Randy','grandy1308@gmail.com','https://www.facebook.com/','https://www.instagram.com/','083801032021','Padang12');

/*Table structure for table `tim` */

DROP TABLE IF EXISTS `tim`;

CREATE TABLE `tim` (
  `id_tim` int(11) NOT NULL AUTO_INCREMENT,
  `nama_tim` varchar(50) DEFAULT NULL,
  `jabatan_tim` varchar(50) DEFAULT NULL,
  `foto_tim` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_tim`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `tim` */

insert  into `tim`(`id_tim`,`nama_tim`,`jabatan_tim`,`foto_tim`) values 
(6,'aaa1','aaaa','alvaro-morata_169.jpeg'),
(7,'bbbb','bbbb','alvaro-morata_169.jpeg'),
(8,'ccc','cccc','alvaro-morata_169.jpeg'),
(9,'ddd','ddd','alvaro-morata_169.jpeg');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `user` */

insert  into `user`(`id_user`,`username`,`password`,`nama_lengkap`,`foto`) values 
(0,'admin','admin','grandy','alvaro-morata_169.jpeg');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
