/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.1.33-community : Database - db_bppom
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_bppom` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_bppom`;

/*Table structure for table `tbl_pekerjaan` */

DROP TABLE IF EXISTS `tbl_pekerjaan`;

CREATE TABLE `tbl_pekerjaan` (
  `id_pekerjaan` int(11) NOT NULL AUTO_INCREMENT,
  `pekerjaan` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id_pekerjaan`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_pekerjaan` */

insert  into `tbl_pekerjaan`(`id_pekerjaan`,`pekerjaan`) values (1,'Wiraswasta'),(2,'Pelajar / Mahasiswa'),(3,'Pegawai Negeri'),(4,'Nelayan'),(5,'Pembalap');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
