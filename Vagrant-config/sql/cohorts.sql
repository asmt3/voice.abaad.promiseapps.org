# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.5.38-0ubuntu0.12.04.1)
# Database: argos
# Generation Time: 2014-10-02 09:13:49 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table cohorts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cohorts`;

CREATE TABLE `cohorts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `cohorts` WRITE;
/*!40000 ALTER TABLE `cohorts` DISABLE KEYS */;

INSERT INTO `cohorts` (`id`, `name`, `type`)
VALUES
	(1,'M_0-0.5','demographic'),
	(2,'M_0.5-1','demographic'),
	(3,'M_1-2','demographic'),
	(4,'M_2-4','demographic'),
	(5,'M_4-8','demographic'),
	(6,'M_8-12','demographic'),
	(7,'M_12-15','demographic'),
	(8,'M_15-18','demographic'),
	(9,'M_18-24','demographic'),
	(10,'M_24-34','demographic'),
	(11,'M_34-44','demographic'),
	(12,'M_44-54','demographic'),
	(13,'M_54-64','demographic'),
	(14,'M_64-99','demographic'),
	(15,'F_0-0.5','demographic'),
	(16,'F_0.5-1','demographic'),
	(17,'F_1-2','demographic'),
	(18,'F_2-4','demographic'),
	(19,'F_4-8','demographic'),
	(20,'F_8-12','demographic'),
	(21,'F_12-15','demographic'),
	(22,'F_15-18','demographic'),
	(23,'F_18-24','demographic'),
	(24,'F_24-34','demographic'),
	(25,'F_34-44','demographic'),
	(26,'F_44-54','demographic'),
	(27,'F_54-64','demographic'),
	(28,'F_64-99','demographic');

/*!40000 ALTER TABLE `cohorts` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
