/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.21-MariaDB : Database - gofit_db
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gofit_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `gofit_db`;

/*Table structure for table `acc_login` */

DROP TABLE IF EXISTS `acc_login`;

CREATE TABLE `acc_login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` smallint(3) NOT NULL DEFAULT 3,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `acc_login_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `acc_login` */

insert  into `acc_login`(`username`,`password`,`level`,`user_id`) values ('eru.2001','123098',3,1);

/*Table structure for table `acc_profile` */

DROP TABLE IF EXISTS `acc_profile`;

CREATE TABLE `acc_profile` (
  `dob` date DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `pnum` varchar(13) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `acc_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `acc_profile` */

insert  into `acc_profile`(`dob`,`sex`,`address`,`pnum`,`email`,`user_id`) values ('2001-07-29','male','0111(F) Leo St., Esperanza Heights Subd., Deparo, Caloocan City','+639208281567','ocampo.jerud.2001@gmail.com',1);

/*Table structure for table `accounts` */

DROP TABLE IF EXISTS `accounts`;

CREATE TABLE `accounts` (
  `user_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  `date_joined` datetime NOT NULL,
  `branch_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `accounts_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `accounts` */

insert  into `accounts`(`user_id`,`fname`,`lname`,`status`,`date_joined`,`branch_id`) values (1,'Jerud','Ocampo','active','2021-12-04 19:51:21',NULL);

/*Table structure for table `announcements` */

DROP TABLE IF EXISTS `announcements`;

CREATE TABLE `announcements` (
  `from` varchar(50) NOT NULL,
  `to` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `until` datetime NOT NULL,
  `branch_id` int(10) unsigned DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  KEY `branch_id` (`branch_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`),
  CONSTRAINT `announcements_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `announcements` */

/*Table structure for table `blogs` */

DROP TABLE IF EXISTS `blogs`;

CREATE TABLE `blogs` (
  `blog_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `img_path` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(4000) NOT NULL,
  `date` datetime NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `blogs_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `blogs` */

/*Table structure for table `branches` */

DROP TABLE IF EXISTS `branches`;

CREATE TABLE `branches` (
  `branch_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(50) DEFAULT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'active',
  PRIMARY KEY (`branch_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `branches_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `branches` */

/*Table structure for table `clubs` */

DROP TABLE IF EXISTS `clubs`;

CREATE TABLE `clubs` (
  `club_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `desc` varchar(500) DEFAULT NULL,
  `date` datetime NOT NULL,
  `branch_id` int(10) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`club_id`),
  KEY `branch_id` (`branch_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `clubs_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`),
  CONSTRAINT `clubs_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `clubs` */

/*Table structure for table `clubs_joined` */

DROP TABLE IF EXISTS `clubs_joined`;

CREATE TABLE `clubs_joined` (
  `date` datetime NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `club_id` int(10) unsigned NOT NULL,
  KEY `user_id` (`user_id`),
  KEY `club_id` (`club_id`),
  CONSTRAINT `clubs_joined_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`),
  CONSTRAINT `clubs_joined_ibfk_2` FOREIGN KEY (`club_id`) REFERENCES `clubs` (`club_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `clubs_joined` */

/*Table structure for table `events` */

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `event_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `date` datetime NOT NULL,
  `until` datetime NOT NULL,
  `branch_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `branch_id` (`branch_id`),
  CONSTRAINT `events_ibfk_1` FOREIGN KEY (`branch_id`) REFERENCES `branches` (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `events` */

/*Table structure for table `goals` */

DROP TABLE IF EXISTS `goals`;

CREATE TABLE `goals` (
  `date` date NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `goals` */

/*Table structure for table `goals_joined` */

DROP TABLE IF EXISTS `goals_joined`;

CREATE TABLE `goals_joined` (
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `goals_joined_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `goals_joined` */

/*Table structure for table `payments` */

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `trans_id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `until` datetime NOT NULL,
  `enc_data` varchar(500) NOT NULL,
  `payment` int(10) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `payments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `accounts` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `payments` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
