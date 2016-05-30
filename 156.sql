/*
SQLyog Ultimate v11.24 (32 bit)
MySQL - 5.0.96-community-nt : Database - myweb
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
/*Table structure for table `myweb_user` */

CREATE TABLE `myweb_user` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `username` varchar(20) NOT NULL,
  `level` int(10) default '0',
  `signature` varchar(70) default '你这傻逼就没有想对自己说的话吗?戳右自己修改吧!',
  `password` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `reg_time` datetime NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Table structure for table `myweb_user_action` */

CREATE TABLE `myweb_user_action` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `ip` varchar(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `area` varchar(10) NOT NULL,
  `action` varchar(200) NOT NULL,
  `action_time` datetime default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=248 DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
