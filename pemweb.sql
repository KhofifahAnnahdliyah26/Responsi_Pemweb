/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 10.4.18-MariaDB : Database - pemweb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pemweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `pemweb`;

/*Table structure for table `detail_sewa` */

DROP TABLE IF EXISTS `detail_sewa`;

CREATE TABLE `detail_sewa` (
  `id_detail` int(11) NOT NULL AUTO_INCREMENT,
  `id_ruangan` int(11) NOT NULL,
  `id_sewa` int(11) NOT NULL,
  `lama_sewa` int(11) NOT NULL,
  `biaya_sewa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_detail`),
  KEY `id_ruangan` (`id_ruangan`),
  KEY `id_sewa` (`id_sewa`),
  CONSTRAINT `detail_sewa_ibfk_1` FOREIGN KEY (`id_ruangan`) REFERENCES `ruangan` (`id_ruangan`),
  CONSTRAINT `detail_sewa_ibfk_2` FOREIGN KEY (`id_sewa`) REFERENCES `header_sewa` (`id_sewa`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

/*Data for the table `detail_sewa` */

insert  into `detail_sewa`(`id_detail`,`id_ruangan`,`id_sewa`,`lama_sewa`,`biaya_sewa`) values 
(1,1,1,2,500000),
(9,2,10,4,800000),
(10,4,11,3,450000);

/*Table structure for table `header_sewa` */

DROP TABLE IF EXISTS `header_sewa`;

CREATE TABLE `header_sewa` (
  `id_sewa` int(11) NOT NULL AUTO_INCREMENT,
  `id_penyewa` int(11) NOT NULL,
  `total_bayar` int(11) DEFAULT NULL,
  `tanggal_bayar` date NOT NULL,
  PRIMARY KEY (`id_sewa`),
  KEY `id_penyewa` (`id_penyewa`),
  CONSTRAINT `header_sewa_ibfk_1` FOREIGN KEY (`id_penyewa`) REFERENCES `penyewa` (`id_penyewa`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

/*Data for the table `header_sewa` */

insert  into `header_sewa`(`id_sewa`,`id_penyewa`,`total_bayar`,`tanggal_bayar`) values 
(1,1,700000,'2021-05-15'),
(10,2,800000,'2021-05-19'),
(11,4,450000,'2021-05-20');

/*Table structure for table `penyewa` */

DROP TABLE IF EXISTS `penyewa`;

CREATE TABLE `penyewa` (
  `id_penyewa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_penyewa` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_penyewa`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `penyewa` */

insert  into `penyewa`(`id_penyewa`,`nama_penyewa`,`alamat`,`no_telp`) values 
(1,'Khofifah','jl.junjung buih lll',2147483647),
(2,'fathur','jl.mawar',1234567891),
(4,'fify','jl.soekarno',1234567876);

/*Table structure for table `ruangan` */

DROP TABLE IF EXISTS `ruangan`;

CREATE TABLE `ruangan` (
  `id_ruangan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(50) NOT NULL,
  `harga_sewa` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_ruangan`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `ruangan` */

insert  into `ruangan`(`id_ruangan`,`nama_ruangan`,`harga_sewa`) values 
(1,'a1',250000),
(2,'a2',200000),
(4,'c1',150000);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
