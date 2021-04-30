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
-- Table structure for table `wp_usermeta`
--

DROP TABLE IF EXISTS `wp_usermeta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL DEFAULT '0',
  `meta_key` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `meta_value` longtext COLLATE utf8mb4_unicode_520_ci,
  PRIMARY KEY (`umeta_id`),
  KEY `user_id` (`user_id`),
  KEY `meta_key` (`meta_key`(191))
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_usermeta`
--

LOCK TABLES `wp_usermeta` WRITE;
/*!40000 ALTER TABLE `wp_usermeta` DISABLE KEYS */;
INSERT INTO `wp_usermeta` VALUES (1,1,'nickname','admin'),(2,1,'first_name',''),(3,1,'last_name',''),(4,1,'description',''),(5,1,'rich_editing','true'),(6,1,'syntax_highlighting','true'),(7,1,'comment_shortcuts','false'),(8,1,'admin_color','fresh'),(9,1,'use_ssl','0'),(10,1,'show_admin_bar_front','true'),(11,1,'locale',''),(12,1,'wp_capabilities','a:1:{s:13:\"administrator\";b:1;}'),(13,1,'wp_user_level','10'),(14,1,'dismissed_wp_pointers','theme_editor_notice'),(15,1,'show_welcome_panel','1'),(16,1,'session_tokens','a:1:{s:64:\"55f3276feefc45d563366b0e96ce8de60b7aee50126bbfd847a5a1a87bf7e020\";a:4:{s:10:\"expiration\";i:1619893724;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:115:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.128 Safari/537.36\";s:5:\"login\";i:1618684124;}}'),(17,1,'wp_dashboard_quick_press_last_post_id','4'),(18,1,'managenav-menuscolumnshidden','a:5:{i:0;s:11:\"link-target\";i:1;s:15:\"title-attribute\";i:2;s:11:\"css-classes\";i:3;s:3:\"xfn\";i:4;s:11:\"description\";}'),(19,1,'metaboxhidden_nav-menus','a:2:{i:0;s:12:\"add-post_tag\";i:1;s:15:\"add-post_format\";}'),(20,1,'_woocommerce_tracks_anon_id','woo:M0GgZjLHA0R85/y5sqFXYFui'),(21,1,'last_update','1618685121'),(22,1,'woocommerce_admin_activity_panel_inbox_last_read','1618685107308'),(23,1,'wc_last_active','1619740800'),(24,1,'closedpostboxes_','a:0:{}'),(25,1,'metaboxhidden_','a:1:{i:0;s:17:\"kc-hidden-metabox\";}'),(26,1,'_order_count','0'),(27,1,'nav_menu_recently_edited','46'),(28,1,'wp_user-settings','libraryContent=browse&editor=tinymce&posts_list_mode=excerpt'),(29,1,'wp_user-settings-time','1619231510'),(30,1,'_wc_plugin_framework_facebook_for_woocommerce_dismissed_messages','a:1:{s:36:\"facebook_for_woocommerce_get_started\";b:1;}'),(31,1,'closedpostboxes_page','a:1:{i:0;s:13:\"masb_seo_meta\";}'),(32,1,'metaboxhidden_page','a:1:{i:0;s:9:\"authordiv\";}'),(33,1,'edit_page_per_page','20'),(34,1,'meta-box-order_','a:3:{s:6:\"normal\";s:29:\"aioseo-settings,masb_seo_meta\";s:8:\"advanced\";s:17:\"kc-hidden-metabox\";s:4:\"side\";s:41:\"layout_settings,slider_revolution_metabox\";}'),(35,1,'closedpostboxes_apside-hebuilder','a:1:{i:0;s:13:\"masb_seo_meta\";}'),(36,1,'metaboxhidden_apside-hebuilder','a:1:{i:0;s:7:\"slugdiv\";}'),(37,2,'nickname','wooteam'),(38,2,'first_name',''),(39,2,'last_name',''),(40,2,'description',''),(41,2,'rich_editing','true'),(42,2,'syntax_highlighting','true'),(43,2,'comment_shortcuts','false'),(44,2,'admin_color','fresh'),(45,2,'use_ssl','0'),(46,2,'show_admin_bar_front','true'),(47,2,'locale',''),(48,2,'wp_capabilities','a:1:{s:8:\"customer\";b:1;}'),(49,2,'wp_user_level','0'),(50,2,'dismissed_wp_pointers',''),(51,1,'closedpostboxes_composer_widget','a:1:{i:0;s:14:\"masb_sectionid\";}'),(52,1,'metaboxhidden_composer_widget','a:1:{i:0;s:7:\"slugdiv\";}');
/*!40000 ALTER TABLE `wp_usermeta` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-29 22:46:22
