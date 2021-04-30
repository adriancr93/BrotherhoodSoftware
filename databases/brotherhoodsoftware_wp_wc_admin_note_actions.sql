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
-- Table structure for table `wp_wc_admin_note_actions`
--

DROP TABLE IF EXISTS `wp_wc_admin_note_actions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_wc_admin_note_actions` (
  `action_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `note_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `label` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `query` longtext COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `is_primary` tinyint(1) NOT NULL DEFAULT '0',
  `actioned_text` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  PRIMARY KEY (`action_id`),
  KEY `note_id` (`note_id`)
) ENGINE=InnoDB AUTO_INCREMENT=1071 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_wc_admin_note_actions`
--

LOCK TABLES `wp_wc_admin_note_actions` WRITE;
/*!40000 ALTER TABLE `wp_wc_admin_note_actions` DISABLE KEYS */;
INSERT INTO `wp_wc_admin_note_actions` VALUES (1,1,'connect','Connect','?page=wc-addons&section=helper','unactioned',0,''),(2,2,'yes-please','Yes please!','https://woocommerce.us8.list-manage.com/subscribe/post?u=2c1434dc56f9506bf3c3ecd21&amp;id=13860df971&amp;SIGNUPPAGE=plugin','actioned',0,''),(20,19,'learn-more','Learn more','https://woocommerce.com/posts/how-to-sell-online-courses-wordpress/?utm_source=inbox','actioned',1,''),(89,20,'learn-more','Aprende más','https://woocommerce.com/mobile/','actioned',0,''),(90,21,'visit-the-theme-marketplace','Visita la tienda de temas','https://woocommerce.com/product-category/themes/?utm_source=inbox','actioned',0,''),(91,22,'affirm-insight-first-product-and-payment','Sí','','actioned',0,'Gracias por tus comentarios'),(109,23,'add-first-product','Añadir un producto','http://localhost/brotherhoodsoftware/wp-admin/admin.php?page=wc-admin&task=products','actioned',0,''),(110,24,'learn-more','Aprende más','https://docs.woocommerce.com/document/managing-products/?utm_source=inbox','actioned',0,''),(230,25,'view-payment-gateways','Aprende más','https://woocommerce.com/product-category/woocommerce-extensions/payment-gateways/','actioned',1,''),(231,26,'open-marketing-hub','Abrir centro de marketing','http://localhost/brotherhoodsoftware/wp-admin/admin.php?page=wc-admin&path=/marketing','actioned',0,''),(725,27,'learn-more','Aprende más','https://docs.woocommerce.com/document/variable-product/?utm_source=inbox','actioned',0,''),(964,28,'day-after-first-product','Aprende más','https://docs.woocommerce.com/document/woocommerce-customizer/?utm_source=inbox','actioned',0,''),(965,29,'first-downloadable-product-handling','Aprende más','https://docs.woocommerce.com/document/digital-downloadable-product-handling/?utm_source=inbox','actioned',0,''),(1000,30,'share-feedback','Compartir comentarios','https://automattic.survey.fm/store-setup-survey','actioned',0,''),(1001,31,'affirm-insight-first-sale','Sí','','actioned',0,'Gracias por tus comentarios'),(1002,31,'deny-insight-first-sale','No','','actioned',0,'Gracias por tus comentarios'),(1054,3,'open_wc_paypal_payments_product_page','Learn more','https://woocommerce.com/products/woocommerce-paypal-payments/','actioned',1,''),(1055,4,'upgrade_now_facebook_pixel_api','Upgrade now','plugin-install.php?tab=plugin-information&plugin=&section=changelog','actioned',1,''),(1056,5,'learn_more_facebook_ec','Learn more','https://woocommerce.com/products/facebook/','unactioned',1,''),(1057,6,'set-up-concierge','Schedule free session','https://wordpress.com/me/concierge','actioned',1,''),(1058,7,'learn-more','Learn more','https://docs.woocommerce.com/document/woocommerce-shipping-and-tax/?utm_source=inbox','unactioned',1,''),(1059,8,'learn-more-ecomm-unique-shopping-experience','Learn more','https://docs.woocommerce.com/document/product-add-ons/?utm_source=inbox','actioned',1,''),(1060,9,'watch-the-webinar','Watch the webinar','https://youtu.be/V_2XtCOyZ7o','actioned',1,''),(1061,10,'learn-more','Learn more','https://woocommerce.com/posts/ecommerce-shipping-solutions-guide/?utm_source=inbox','actioned',1,''),(1062,11,'boost-sales-marketing-guide','See marketing guide','https://developer.apple.com/apple-pay/marketing/?utm_source=inbox&utm_campaign=square-boost-sales','actioned',1,''),(1063,12,'grow-your-business-marketing-guide','See marketing guide','https://developer.apple.com/apple-pay/marketing/?utm_source=inbox&utm_campaign=square-grow-your-business','actioned',1,''),(1064,13,'add-apple-pay','Add Apple Pay','/admin.php?page=wc-settings&tab=checkout&section=woocommerce_payments','actioned',1,''),(1065,13,'learn-more','Learn more','https://docs.woocommerce.com/document/payments/apple-pay/?utm_source=inbox&utm_medium=product&utm_campaign=wcpay_applepay','actioned',1,''),(1066,14,'boost-sales-marketing-guide','See marketing guide','https://developer.apple.com/apple-pay/marketing/?utm_source=inbox&utm_campaign=wcpay-boost-sales','actioned',1,''),(1067,15,'grow-your-business-marketing-guide','See marketing guide','https://developer.apple.com/apple-pay/marketing/?utm_source=inbox&utm_campaign=wcpay-grow-your-business','actioned',1,''),(1068,16,'optimizing-the-checkout-flow','Learn more','https://woocommerce.com/posts/optimizing-woocommerce-checkout?utm_source=inbox','actioned',1,''),(1069,17,'learn-more','Learn more','https://woocommerce.com/posts/first-things-customize-woocommerce/?utm_source=inbox','unactioned',1,''),(1070,18,'qualitative-feedback-from-new-users','Share feedback','https://automattic.survey.fm/wc-pay-new','actioned',1,'');
/*!40000 ALTER TABLE `wp_wc_admin_note_actions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-29 22:46:25
