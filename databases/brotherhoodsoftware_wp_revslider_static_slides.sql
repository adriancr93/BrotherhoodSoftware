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
-- Table structure for table `wp_revslider_static_slides`
--

DROP TABLE IF EXISTS `wp_revslider_static_slides`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_revslider_static_slides` (
  `id` int NOT NULL AUTO_INCREMENT,
  `slider_id` int NOT NULL,
  `params` longtext NOT NULL,
  `layers` longtext NOT NULL,
  `settings` text NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_revslider_static_slides`
--

LOCK TABLES `wp_revslider_static_slides` WRITE;
/*!40000 ALTER TABLE `wp_revslider_static_slides` DISABLE KEYS */;
INSERT INTO `wp_revslider_static_slides` VALUES (3,3,'{\"static\":{\"isstatic\":true,\"lastEdited\":\"front\"},\"runtime\":{\"collapsedGroups\":[]},\"title\":\"Global Layers\",\"info\":{\"params\":[{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10}]},\"timeline\":{\"transition\":[\"fade\"],\"slots\":[0],\"duration\":[1000],\"easeIn\":[\"default\"],\"easeOut\":[\"default\"],\"rotation\":[0]},\"nav\":{\"arrows\":{\"presets\":{\"height\":\"50\",\"height-def\":false,\"font-size\":\"40\",\"font-size-def\":false,\"background\":\"rgba(255,255,255,0)\",\"background-def\":false,\"width\":\"50\",\"width-def\":false}}},\"version\":\"6.2.0\",\"bg\":{\"image\":\"\"}}','{\"top\":{\"uid\":\"top\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"TOP ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"},\"middle\":{\"uid\":\"middle\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"MID ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"},\"bottom\":{\"uid\":\"bottom\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"BOTTOM ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"}}','{\"version\":\"6.2.0\"}'),(4,4,'{\"static\":{\"isstatic\":true,\"lastEdited\":\"front\"},\"runtime\":{\"collapsedGroups\":[]},\"title\":\"Global Layers\",\"info\":{\"params\":[{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10}]},\"timeline\":{\"transition\":[\"fade\"],\"slots\":[0],\"duration\":[1000],\"easeIn\":[\"default\"],\"easeOut\":[\"default\"],\"rotation\":[0]},\"nav\":{\"arrows\":{\"presets\":{\"height\":\"50\",\"height-def\":false,\"font-size\":\"40\",\"font-size-def\":false,\"background\":\"rgba(255,255,255,0)\",\"background-def\":false,\"width\":\"50\",\"width-def\":false}}},\"version\":\"6.2.0\",\"bg\":{\"image\":\"\"}}','{\"top\":{\"uid\":\"top\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"TOP ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"},\"middle\":{\"uid\":\"middle\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"MID ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"},\"bottom\":{\"uid\":\"bottom\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"BOTTOM ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"}}','{\"version\":\"6.2.0\"}'),(5,5,'{\"static\":{\"isstatic\":true,\"lastEdited\":\"front\"},\"runtime\":{\"collapsedGroups\":[]},\"title\":\"Global Layers\",\"info\":{\"params\":[{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10},{\"v\":\"\",\"l\":10}]},\"timeline\":{\"transition\":[\"fade\"],\"slots\":[0],\"duration\":[1000],\"easeIn\":[\"default\"],\"easeOut\":[\"default\"],\"rotation\":[0]},\"nav\":{\"arrows\":{\"presets\":{\"height\":\"50\",\"height-def\":false,\"font-size\":\"40\",\"font-size-def\":false,\"background\":\"rgba(255,255,255,0)\",\"background-def\":false,\"width\":\"50\",\"width-def\":false}}},\"version\":\"6.2.0\",\"bg\":{\"image\":\"\"}}','{\"top\":{\"uid\":\"top\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"TOP ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"},\"middle\":{\"uid\":\"middle\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"MID ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"},\"bottom\":{\"uid\":\"bottom\",\"group\":{\"puid\":-1,\"groupOrder\":0},\"type\":\"zone\",\"alias\":\"BOTTOM ROWS\",\"position\":{\"zIndex\":0},\"text\":\"\",\"version\":\"6.2.0\"}}','{\"version\":\"6.2.0\"}');
/*!40000 ALTER TABLE `wp_revslider_static_slides` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-29 22:46:30
