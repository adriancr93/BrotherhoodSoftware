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
-- Table structure for table `wp_yikes_easy_mc_forms`
--

DROP TABLE IF EXISTS `wp_yikes_easy_mc_forms`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_yikes_easy_mc_forms` (
  `id` int NOT NULL AUTO_INCREMENT,
  `list_id` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `form_name` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `form_description` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `fields` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `custom_styles` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `custom_template` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `send_welcome_email` int NOT NULL,
  `redirect_user_on_submit` int NOT NULL,
  `redirect_page` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `submission_settings` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `optin_settings` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `form_settings` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `error_messages` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `custom_notifications` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `impressions` int NOT NULL,
  `submissions` int NOT NULL,
  `custom_fields` text COLLATE utf8mb4_unicode_520_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_yikes_easy_mc_forms`
--

LOCK TABLES `wp_yikes_easy_mc_forms` WRITE;
/*!40000 ALTER TABLE `wp_yikes_easy_mc_forms` DISABLE KEYS */;
/*!40000 ALTER TABLE `wp_yikes_easy_mc_forms` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-29 22:46:31
