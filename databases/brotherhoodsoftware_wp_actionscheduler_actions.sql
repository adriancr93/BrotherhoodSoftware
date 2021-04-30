-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: localhost    Database: brotherhoodsoftware
-- ------------------------------------------------------
-- Server version	8.0.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wp_actionscheduler_actions`
--

DROP TABLE IF EXISTS `wp_actionscheduler_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_actionscheduler_actions` (
  `action_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `hook` varchar(191) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `scheduled_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `scheduled_date_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `args` varchar(191) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `schedule` longtext COLLATE utf8mb4_unicode_520_ci,
  `group_id` bigint unsigned NOT NULL DEFAULT '0',
  `attempts` int NOT NULL DEFAULT '0',
  `last_attempt_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `last_attempt_local` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `claim_id` bigint unsigned NOT NULL DEFAULT '0',
  `extended_args` varchar(8000) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  PRIMARY KEY (`action_id`),
  KEY `hook` (`hook`),
  KEY `status` (`status`),
  KEY `scheduled_date_gmt` (`scheduled_date_gmt`),
  KEY `args` (`args`),
  KEY `group_id` (`group_id`),
  KEY `last_attempt_gmt` (`last_attempt_gmt`),
  KEY `claim_id` (`claim_id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_actionscheduler_actions`
--

LOCK TABLES `wp_actionscheduler_actions` WRITE;
/*!40000 ALTER TABLE `wp_actionscheduler_actions` DISABLE KEYS */;
INSERT INTO `wp_actionscheduler_actions` VALUES (9,'action_scheduler/migration_hook','complete','2021-04-17 18:45:46','2021-04-17 18:45:46','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1618685146;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1618685146;}',1,1,'2021-04-17 18:46:38','2021-04-17 18:46:38',0,NULL),(10,'action_scheduler/migration_hook','complete','2021-04-17 18:47:52','2021-04-17 18:47:52','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1618685272;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1618685272;}',1,1,'2021-04-17 18:47:55','2021-04-17 18:47:55',0,NULL),(11,'wpforms_process_entry_emails_meta_cleanup','complete','2021-04-22 00:00:00','2021-04-21 18:00:00','{\"tasks_meta_id\":1}','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619049600;s:18:\"\0*\0first_timestamp\";i:1619049600;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619049600;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',2,1,'2021-04-23 00:52:50','2021-04-22 18:52:50',0,NULL),(14,'wpforms_admin_notifications_update','complete','0000-00-00 00:00:00','0000-00-00 00:00:00','{\"tasks_meta_id\":3}','O:28:\"ActionScheduler_NullSchedule\":0:{}',2,1,'2021-04-21 04:17:49','2021-04-20 22:17:49',0,NULL),(17,'aioseo_cleanup_action_scheduler','complete','2021-04-22 04:23:02','2021-04-21 22:23:02','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619065382;s:18:\"\0*\0first_timestamp\";i:1619065382;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619065382;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-23 00:52:51','2021-04-22 18:52:51',0,NULL),(20,'wp_mail_smtp_admin_notifications_update','complete','0000-00-00 00:00:00','0000-00-00 00:00:00','[1]','O:28:\"ActionScheduler_NullSchedule\":0:{}',4,1,'2021-04-21 04:26:15','2021-04-20 22:26:15',0,NULL),(32,'aioseo_image_sitemap_scan','complete','2021-04-21 06:17:46','2021-04-21 00:17:46','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1618985866;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1618985866;}',3,1,'2021-04-23 00:52:51','2021-04-22 18:52:51',0,NULL),(34,'aioseo_admin_notifications_update','complete','2021-04-24 00:52:51','2021-04-23 18:52:51','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619225571;s:18:\"\0*\0first_timestamp\";i:1619053200;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619225571;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-24 02:01:35','2021-04-23 20:01:35',0,NULL),(35,'aioseo_cleanup_action_scheduler','complete','2021-04-24 00:52:51','2021-04-23 18:52:51','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619225571;s:18:\"\0*\0first_timestamp\";i:1619065382;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619225571;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-24 02:01:35','2021-04-23 20:01:35',0,NULL),(36,'aioseo_image_sitemap_scan','complete','2021-04-23 01:07:51','2021-04-22 19:07:51','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619140071;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619140071;}',3,1,'2021-04-23 01:08:04','2021-04-22 19:08:04',0,NULL),(37,'wp_mail_smtp_admin_notifications_update','complete','0000-00-00 00:00:00','0000-00-00 00:00:00','[2]','O:28:\"ActionScheduler_NullSchedule\":0:{}',4,1,'2021-04-23 00:52:52','2021-04-22 18:52:52',0,NULL),(38,'wpforms_admin_notifications_update','complete','0000-00-00 00:00:00','0000-00-00 00:00:00','{\"tasks_meta_id\":4}','O:28:\"ActionScheduler_NullSchedule\":0:{}',2,1,'2021-04-23 00:52:52','2021-04-22 18:52:52',0,NULL),(39,'aioseo_image_sitemap_scan','complete','2021-04-23 01:23:04','2021-04-22 19:23:04','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619140984;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619140984;}',3,1,'2021-04-23 01:23:09','2021-04-22 19:23:09',0,NULL),(40,'aioseo_image_sitemap_scan','complete','2021-04-23 01:38:09','2021-04-22 19:38:09','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619141889;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619141889;}',3,1,'2021-04-23 01:55:02','2021-04-22 19:55:02',0,NULL),(41,'aioseo_image_sitemap_scan','complete','2021-04-23 01:55:32','2021-04-22 19:55:32','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619142932;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619142932;}',3,1,'2021-04-23 01:55:35','2021-04-22 19:55:35',0,NULL),(42,'aioseo_image_sitemap_scan','complete','2021-04-23 02:10:35','2021-04-22 20:10:35','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619143835;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619143835;}',3,1,'2021-04-23 02:10:48','2021-04-22 20:10:48',0,NULL),(43,'aioseo_image_sitemap_scan','complete','2021-04-23 02:11:18','2021-04-22 20:11:18','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619143878;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619143878;}',3,1,'2021-04-23 02:13:53','2021-04-22 20:13:53',0,NULL),(44,'aioseo_image_sitemap_scan','complete','2021-04-23 02:28:53','2021-04-22 20:28:53','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619144933;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619144933;}',3,1,'2021-04-23 02:29:16','2021-04-22 20:29:16',0,NULL),(45,'aioseo_image_sitemap_scan','complete','2021-04-23 02:44:16','2021-04-22 20:44:16','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619145856;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619145856;}',3,1,'2021-04-23 02:44:17','2021-04-22 20:44:17',0,NULL),(46,'aioseo_image_sitemap_scan','complete','2021-04-23 02:59:17','2021-04-22 20:59:17','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619146757;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619146757;}',3,1,'2021-04-23 02:59:53','2021-04-22 20:59:53',0,NULL),(47,'aioseo_image_sitemap_scan','complete','2021-04-23 03:00:23','2021-04-22 21:00:23','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619146823;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619146823;}',3,1,'2021-04-23 03:00:58','2021-04-22 21:00:58',0,NULL),(48,'aioseo_image_sitemap_scan','complete','2021-04-23 03:15:58','2021-04-22 21:15:58','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619147758;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619147758;}',3,1,'2021-04-23 03:16:38','2021-04-22 21:16:38',0,NULL),(49,'aioseo_image_sitemap_scan','complete','2021-04-23 03:31:38','2021-04-22 21:31:38','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619148698;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619148698;}',3,1,'2021-04-23 03:32:23','2021-04-22 21:32:23',0,NULL),(50,'aioseo_image_sitemap_scan','complete','2021-04-23 03:32:53','2021-04-22 21:32:53','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619148773;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619148773;}',3,1,'2021-04-23 03:33:28','2021-04-22 21:33:28',0,NULL),(51,'aioseo_image_sitemap_scan','complete','2021-04-23 03:33:58','2021-04-22 21:33:58','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619148838;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619148838;}',3,1,'2021-04-23 03:34:36','2021-04-22 21:34:36',0,NULL),(52,'aioseo_image_sitemap_scan','complete','2021-04-23 03:49:36','2021-04-22 21:49:36','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619149776;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619149776;}',3,1,'2021-04-23 03:49:41','2021-04-22 21:49:41',0,NULL),(53,'aioseo_image_sitemap_scan','complete','2021-04-23 04:04:41','2021-04-22 22:04:41','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619150681;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619150681;}',3,1,'2021-04-23 04:05:29','2021-04-22 22:05:29',0,NULL),(54,'aioseo_image_sitemap_scan','complete','2021-04-23 04:05:39','2021-04-22 22:05:39','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619150739;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619150739;}',3,1,'2021-04-23 04:06:29','2021-04-22 22:06:29',0,NULL),(55,'aioseo_image_sitemap_scan','complete','2021-04-23 04:05:59','2021-04-22 22:05:59','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619150759;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619150759;}',3,1,'2021-04-23 04:06:29','2021-04-22 22:06:29',0,NULL),(56,'aioseo_image_sitemap_scan','complete','2021-04-23 04:21:29','2021-04-22 22:21:29','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619151689;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619151689;}',3,1,'2021-04-23 04:21:36','2021-04-22 22:21:36',0,NULL),(57,'aioseo_image_sitemap_scan','complete','2021-04-23 04:36:36','2021-04-22 22:36:36','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619152596;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619152596;}',3,1,'2021-04-23 04:37:04','2021-04-22 22:37:04',0,NULL),(58,'aioseo_image_sitemap_scan','complete','2021-04-23 04:37:34','2021-04-22 22:37:34','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619152654;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619152654;}',3,1,'2021-04-23 04:37:40','2021-04-22 22:37:40',0,NULL),(59,'aioseo_image_sitemap_scan','complete','2021-04-23 04:52:40','2021-04-22 22:52:40','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619153560;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619153560;}',3,1,'2021-04-23 04:53:32','2021-04-22 22:53:32',0,NULL),(60,'aioseo_image_sitemap_scan','complete','2021-04-23 04:54:02','2021-04-22 22:54:02','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619153642;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619153642;}',3,1,'2021-04-23 04:54:30','2021-04-22 22:54:30',0,NULL),(61,'aioseo_image_sitemap_scan','complete','2021-04-23 04:55:00','2021-04-22 22:55:00','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619153700;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619153700;}',3,1,'2021-04-23 04:55:29','2021-04-22 22:55:29',0,NULL),(62,'aioseo_image_sitemap_scan','complete','2021-04-23 04:55:59','2021-04-22 22:55:59','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619153759;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619153759;}',3,1,'2021-04-23 04:56:33','2021-04-22 22:56:33',0,NULL),(63,'aioseo_image_sitemap_scan','complete','2021-04-23 04:57:03','2021-04-22 22:57:03','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619153823;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619153823;}',3,1,'2021-04-23 04:57:57','2021-04-22 22:57:57',0,NULL),(64,'aioseo_image_sitemap_scan','complete','2021-04-23 04:58:27','2021-04-22 22:58:27','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619153907;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619153907;}',3,1,'2021-04-23 04:58:46','2021-04-22 22:58:46',0,NULL),(65,'aioseo_image_sitemap_scan','complete','2021-04-23 04:59:16','2021-04-22 22:59:16','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619153956;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619153956;}',3,1,'2021-04-23 04:59:20','2021-04-22 22:59:20',0,NULL),(66,'aioseo_image_sitemap_scan','complete','2021-04-23 05:14:20','2021-04-22 23:14:20','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619154860;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619154860;}',3,1,'2021-04-23 05:15:03','2021-04-22 23:15:03',0,NULL),(67,'aioseo_image_sitemap_scan','complete','2021-04-23 05:30:03','2021-04-22 23:30:03','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619155803;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619155803;}',3,1,'2021-04-23 05:36:09','2021-04-22 23:36:09',0,NULL),(68,'action_scheduler/migration_hook','complete','2021-04-23 05:24:55','2021-04-22 23:24:55','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619155495;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619155495;}',1,1,'2021-04-23 05:25:29','2021-04-22 23:25:29',0,NULL),(69,'action_scheduler/migration_hook','complete','2021-04-23 05:26:42','2021-04-22 23:26:42','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619155602;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619155602;}',1,1,'2021-04-23 05:26:47','2021-04-22 23:26:47',0,NULL),(70,'action_scheduler/migration_hook','complete','2021-04-23 05:27:53','2021-04-22 23:27:53','[]','O:30:\"ActionScheduler_SimpleSchedule\":2:{s:22:\"\0*\0scheduled_timestamp\";i:1619155673;s:41:\"\0ActionScheduler_SimpleSchedule\0timestamp\";i:1619155673;}',1,1,'2021-04-23 05:29:47','2021-04-22 23:29:47',0,NULL),(71,'aioseo_admin_notifications_update','complete','2021-04-25 02:01:35','2021-04-24 20:01:35','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619316095;s:18:\"\0*\0first_timestamp\";i:1619053200;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619316095;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-25 18:40:09','2021-04-25 12:40:09',0,NULL),(72,'aioseo_cleanup_action_scheduler','complete','2021-04-25 02:01:35','2021-04-24 20:01:35','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619316095;s:18:\"\0*\0first_timestamp\";i:1619065382;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619316095;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-25 18:40:09','2021-04-25 12:40:09',0,NULL),(73,'aioseo_admin_notifications_update','complete','2021-04-26 18:40:09','2021-04-26 12:40:09','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619462409;s:18:\"\0*\0first_timestamp\";i:1619053200;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619462409;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-27 23:26:46','2021-04-27 17:26:46',0,NULL),(74,'aioseo_cleanup_action_scheduler','complete','2021-04-26 18:40:09','2021-04-26 12:40:09','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619462409;s:18:\"\0*\0first_timestamp\";i:1619065382;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619462409;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-27 23:26:46','2021-04-27 17:26:46',0,NULL),(75,'aioseo_admin_notifications_update','complete','2021-04-28 23:26:46','2021-04-28 17:26:46','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619652406;s:18:\"\0*\0first_timestamp\";i:1619053200;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619652406;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-29 03:35:54','2021-04-28 21:35:54',0,NULL),(76,'aioseo_cleanup_action_scheduler','complete','2021-04-28 23:26:46','2021-04-28 17:26:46','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619652406;s:18:\"\0*\0first_timestamp\";i:1619065382;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619652406;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-29 03:35:54','2021-04-28 21:35:54',0,NULL),(77,'aioseo_admin_notifications_update','complete','2021-04-30 03:35:54','2021-04-29 21:35:54','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619753754;s:18:\"\0*\0first_timestamp\";i:1619053200;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619753754;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-30 04:20:30','2021-04-29 22:20:30',0,NULL),(78,'aioseo_cleanup_action_scheduler','complete','2021-04-30 03:35:54','2021-04-29 21:35:54','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619753754;s:18:\"\0*\0first_timestamp\";i:1619065382;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619753754;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,1,'2021-04-30 04:20:30','2021-04-29 22:20:30',0,NULL),(79,'aioseo_admin_notifications_update','pending','2021-05-01 04:20:30','2021-04-30 22:20:30','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619842830;s:18:\"\0*\0first_timestamp\";i:1619053200;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619842830;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,NULL),(80,'aioseo_cleanup_action_scheduler','pending','2021-05-01 04:20:30','2021-04-30 22:20:30','[]','O:32:\"ActionScheduler_IntervalSchedule\":5:{s:22:\"\0*\0scheduled_timestamp\";i:1619842830;s:18:\"\0*\0first_timestamp\";i:1619065382;s:13:\"\0*\0recurrence\";i:86400;s:49:\"\0ActionScheduler_IntervalSchedule\0start_timestamp\";i:1619842830;s:53:\"\0ActionScheduler_IntervalSchedule\0interval_in_seconds\";i:86400;}',3,0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,NULL);
/*!40000 ALTER TABLE `wp_actionscheduler_actions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-29 22:46:20
