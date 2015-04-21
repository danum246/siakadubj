/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.16 : Database - db_siakad
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`db_siakad` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `db_siakad`;

/*Table structure for table `tbl_jabatan` */

DROP TABLE IF EXISTS `tbl_jabatan`;

CREATE TABLE `tbl_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `jabatan` varchar(100) NOT NULL,
  `lembaga_id` int(11) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_jabatan` */

insert  into `tbl_jabatan`(`id_jabatan`,`jabatan`,`lembaga_id`) values (1,'Superadmins',1),(4,'Operator',4),(6,'Admin Baru',1);

/*Table structure for table `tbl_karyawan` */

DROP TABLE IF EXISTS `tbl_karyawan`;

CREATE TABLE `tbl_karyawan` (
  `id_kary` int(11) NOT NULL AUTO_INCREMENT,
  `nik` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jns_kel` varchar(2) NOT NULL,
  `alamat` text NOT NULL,
  `hp` varchar(30) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `jabatan_id` int(11) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 = aktif , 0 = tidak',
  `pictures` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`nik`),
  KEY `id_kary` (`id_kary`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_karyawan` */

insert  into `tbl_karyawan`(`id_kary`,`nik`,`nama`,`jns_kel`,`alamat`,`hp`,`email`,`jabatan_id`,`status`,`pictures`) values (1,'201110225043','Superadmin','P','matramans','+6287781042439','danum246@gmail.com',1,1,NULL),(5,'1','danu','P','asasasa','+6287781042439','danum246@gmail.com',4,1,'20150421040909_index.php');

/*Table structure for table `tbl_lembaga` */

DROP TABLE IF EXISTS `tbl_lembaga`;

CREATE TABLE `tbl_lembaga` (
  `id_lembaga` int(11) NOT NULL AUTO_INCREMENT,
  `kode_lembaga` varchar(50) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text,
  PRIMARY KEY (`kode_lembaga`),
  KEY `id_lembaga` (`id_lembaga`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_lembaga` */

insert  into `tbl_lembaga`(`id_lembaga`,`kode_lembaga`,`lembaga`,`telepon`,`alamat`) values (1,'UBJ-BKS','Kampus Bekasi',NULL,NULL),(4,'UBJ-JKT','Kampus Jakarta',NULL,NULL);

/*Table structure for table `tbl_menu` */

DROP TABLE IF EXISTS `tbl_menu`;

CREATE TABLE `tbl_menu` (
  `id_menu` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(30) NOT NULL,
  `url` varchar(100) NOT NULL,
  `parent_menu` int(11) NOT NULL,
  `icon` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_menu`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_menu` */

insert  into `tbl_menu`(`id_menu`,`menu`,`url`,`parent_menu`,`icon`) values (2,'Form','-',0,'icon-th-list '),(3,'Setting','-',0,'icon-cogs '),(4,'User Apps','setting/user',3,NULL),(5,'Role Menu','setting/role',3,NULL),(6,'Jabatan','data/jabatan',7,NULL),(7,'Data','-',0,'icon-folder-open '),(8,'Karyawan','data/karyawan',7,NULL),(25,'Master','-',0,'icon-random'),(9,'Report','#',0,'icon-list-alt'),(10,'Menu','setting/menu',3,NULL),(33,'Akademik','-',0,'icon-book '),(32,'Mahasiswa','data/mahasiswa',7,''),(31,'Pengisian KRS / FRS','#',2,''),(18,'Lembaga','data/lembaga',7,NULL),(30,'Pendaftaran Mahasiswa Baru','#',2,''),(29,'Jurusan','#',25,''),(28,'Fakultas','master/fakultas',25,''),(34,'Mata Kuliah','#',33,''),(35,'Jadwal Perkuliahan','#',33,''),(36,'Tahun Ajaran','master/tahunajaran',25,''),(37,'Pengajuan Cuti','#',2,''),(44,'Kompetensi Dosen','#',40,''),(39,'Kuisioner','#',2,''),(40,'Indeks','-',0,'icon-bar-chart'),(41,'KHS Mahasiswa','#',40,''),(42,'Prestasi Dosen','#',40,''),(43,'Kurikulum','#',33,''),(45,'Parameter Kompetensi','#',25,'');

/*Table structure for table `tbl_role_access` */

DROP TABLE IF EXISTS `tbl_role_access`;

CREATE TABLE `tbl_role_access` (
  `id_role` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  PRIMARY KEY (`id_role`)
) ENGINE=MyISAM AUTO_INCREMENT=483 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_role_access` */

insert  into `tbl_role_access`(`id_role`,`menu_id`,`jabatan_id`) values (428,29,4),(427,18,4),(426,32,4),(425,8,4),(424,6,4),(423,39,4),(482,33,1),(481,9,1),(480,25,1),(479,7,1),(478,3,1),(477,2,1),(476,43,1),(475,35,1),(474,34,1),(473,36,1),(472,28,1),(471,29,1),(470,18,1),(469,32,1),(468,8,1),(467,6,1),(466,10,1),(465,5,1),(464,4,1),(463,37,1),(462,30,1),(461,31,1),(429,28,4),(430,36,4),(431,45,4),(432,43,4),(433,44,4),(434,42,4),(435,2,4),(436,7,4),(437,25,4),(438,33,4),(439,40,4);

/*Table structure for table `tbl_user_login` */

DROP TABLE IF EXISTS `tbl_user_login`;

CREATE TABLE `tbl_user_login` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `password_plain` varchar(30) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `status` int(11) NOT NULL COMMENT '1 = aktif , 0 = tidak',
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `tbl_user_login` */

insert  into `tbl_user_login`(`id_user`,`username`,`password`,`password_plain`,`nik`,`status`) values (1,'admin','cbc1d54e4c2ddb35bbb12c027749a4ea4c82e98c','123456','201110225043',1),(7,'admin-op','cbc1d54e4c2ddb35bbb12c027749a4ea4c82e98c','123456','1',1);

/*Table structure for table `view_role` */

DROP TABLE IF EXISTS `view_role`;

/*!50001 DROP VIEW IF EXISTS `view_role` */;
/*!50001 DROP TABLE IF EXISTS `view_role` */;

/*!50001 CREATE TABLE  `view_role`(
 `id_role` int(11) ,
 `menu_id` int(11) ,
 `jabatan_id` int(11) ,
 `menu` varchar(30) ,
 `id_menu` int(11) ,
 `parent_menu` int(11) 
)*/;

/*Table structure for table `view_user` */

DROP TABLE IF EXISTS `view_user`;

/*!50001 DROP VIEW IF EXISTS `view_user` */;
/*!50001 DROP TABLE IF EXISTS `view_user` */;

/*!50001 CREATE TABLE  `view_user`(
 `id_user` int(11) ,
 `nik` varchar(50) ,
 `password_plain` varchar(30) ,
 `status` int(11) ,
 `username` varchar(50) ,
 `nama` varchar(50) 
)*/;

/*View structure for view view_role */

/*!50001 DROP TABLE IF EXISTS `view_role` */;
/*!50001 DROP VIEW IF EXISTS `view_role` */;

/*!50001 CREATE ALGORITHM=TEMPTABLE DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_role` AS select `b`.`id_role` AS `id_role`,`b`.`menu_id` AS `menu_id`,`b`.`jabatan_id` AS `jabatan_id`,`a`.`menu` AS `menu`,`a`.`id_menu` AS `id_menu`,`a`.`parent_menu` AS `parent_menu` from ((`tbl_menu` `a` left join `tbl_role_access` `b` on((`a`.`id_menu` = `b`.`menu_id`))) left join `tbl_jabatan` `c` on((`b`.`jabatan_id` = `c`.`id_jabatan`))) */;

/*View structure for view view_user */

/*!50001 DROP TABLE IF EXISTS `view_user` */;
/*!50001 DROP VIEW IF EXISTS `view_user` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_user` AS select `a`.`id_user` AS `id_user`,`a`.`nik` AS `nik`,`a`.`password_plain` AS `password_plain`,`a`.`status` AS `status`,`a`.`username` AS `username`,`b`.`nama` AS `nama` from (((`tbl_user_login` `a` join `tbl_karyawan` `b` on((`a`.`nik` = `b`.`nik`))) join `tbl_jabatan` `c` on((`b`.`jabatan_id` = `c`.`id_jabatan`))) join `tbl_lembaga` `d` on((`c`.`lembaga_id` = `d`.`id_lembaga`))) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
