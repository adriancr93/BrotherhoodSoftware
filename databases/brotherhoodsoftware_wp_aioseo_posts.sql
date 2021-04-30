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
-- Table structure for table `wp_aioseo_posts`
--

DROP TABLE IF EXISTS `wp_aioseo_posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wp_aioseo_posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `title` text COLLATE utf8mb4_unicode_520_ci,
  `description` text COLLATE utf8mb4_unicode_520_ci,
  `keywords` mediumtext COLLATE utf8mb4_unicode_520_ci,
  `keyphrases` longtext COLLATE utf8mb4_unicode_520_ci,
  `page_analysis` longtext COLLATE utf8mb4_unicode_520_ci,
  `canonical_url` text COLLATE utf8mb4_unicode_520_ci,
  `og_title` text COLLATE utf8mb4_unicode_520_ci,
  `og_description` text COLLATE utf8mb4_unicode_520_ci,
  `og_object_type` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT 'default',
  `og_image_type` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT 'default',
  `og_image_custom_url` text COLLATE utf8mb4_unicode_520_ci,
  `og_image_custom_fields` text COLLATE utf8mb4_unicode_520_ci,
  `og_custom_image_width` int DEFAULT NULL,
  `og_custom_image_height` int DEFAULT NULL,
  `og_video` varchar(255) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `og_custom_url` text COLLATE utf8mb4_unicode_520_ci,
  `og_article_section` text COLLATE utf8mb4_unicode_520_ci,
  `og_article_tags` text COLLATE utf8mb4_unicode_520_ci,
  `twitter_use_og` tinyint(1) DEFAULT '0',
  `twitter_card` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT 'default',
  `twitter_image_type` varchar(64) COLLATE utf8mb4_unicode_520_ci DEFAULT 'default',
  `twitter_image_custom_url` text COLLATE utf8mb4_unicode_520_ci,
  `twitter_image_custom_fields` text COLLATE utf8mb4_unicode_520_ci,
  `twitter_title` text COLLATE utf8mb4_unicode_520_ci,
  `twitter_description` text COLLATE utf8mb4_unicode_520_ci,
  `seo_score` int NOT NULL DEFAULT '0',
  `schema_type` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT NULL,
  `schema_type_options` longtext COLLATE utf8mb4_unicode_520_ci,
  `pillar_content` tinyint(1) DEFAULT NULL,
  `robots_default` tinyint(1) NOT NULL DEFAULT '1',
  `robots_noindex` tinyint(1) NOT NULL DEFAULT '0',
  `robots_noarchive` tinyint(1) NOT NULL DEFAULT '0',
  `robots_nosnippet` tinyint(1) NOT NULL DEFAULT '0',
  `robots_nofollow` tinyint(1) NOT NULL DEFAULT '0',
  `robots_noimageindex` tinyint(1) NOT NULL DEFAULT '0',
  `robots_noodp` tinyint(1) NOT NULL DEFAULT '0',
  `robots_notranslate` tinyint(1) NOT NULL DEFAULT '0',
  `robots_max_snippet` int DEFAULT NULL,
  `robots_max_videopreview` int DEFAULT NULL,
  `robots_max_imagepreview` varchar(20) COLLATE utf8mb4_unicode_520_ci DEFAULT 'large',
  `tabs` mediumtext COLLATE utf8mb4_unicode_520_ci,
  `images` longtext COLLATE utf8mb4_unicode_520_ci,
  `image_scan_date` datetime DEFAULT NULL,
  `priority` tinytext COLLATE utf8mb4_unicode_520_ci,
  `frequency` tinytext COLLATE utf8mb4_unicode_520_ci,
  `videos` longtext COLLATE utf8mb4_unicode_520_ci,
  `video_thumbnail` text COLLATE utf8mb4_unicode_520_ci,
  `video_scan_date` datetime DEFAULT NULL,
  `local_seo` longtext COLLATE utf8mb4_unicode_520_ci,
  `created` datetime NOT NULL,
  `updated` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ndx_aioseo_posts_post_id` (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wp_aioseo_posts`
--

LOCK TABLES `wp_aioseo_posts` WRITE;
/*!40000 ALTER TABLE `wp_aioseo_posts` DISABLE KEYS */;
INSERT INTO `wp_aioseo_posts` VALUES (1,13,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-21 04:28:54',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-21 04:25:39','2021-04-21 04:28:54'),(2,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-21 04:25:39',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-21 04:25:39','2021-04-21 04:25:39'),(3,40,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-21 04:25:39',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-21 04:25:39','2021-04-21 04:25:39'),(4,42,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-21 04:25:39',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-21 04:25:39','2021-04-21 04:25:39'),(5,34,NULL,NULL,'[]','{\"focus\":[],\"additional\":[]}','{\"analysis\":{\"basic\":{\"metadescriptionLength\":[],\"lengthContent\":{\"title\":\"Longitud del contenido\",\"description\":\"El contenido est\\u00e1 por debajo del m\\u00ednimo de palabras. A\\u00f1ada m\\u00e1s contenido.\",\"score\":3,\"maxScore\":9,\"error\":1},\"isInternalLink\":{\"title\":\"Enlaces internos\",\"description\":\"No pudimos encontrar ning\\u00fan enlace interno en su contenido. A\\u00f1ada enlaces internos en su contenido.\",\"score\":3,\"maxScore\":9,\"error\":1},\"isExternalLink\":{\"title\":\"Enlaces externos\",\"description\":\"No se encontraron enlaces salientes. A\\u00f1ada enlaces a recursos externos.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":3},\"title\":{\"titleLength\":{\"title\":\"Longitud del t\\u00edtulo SEO\",\"description\":\"El t\\u00edtulo es demasiado corto.\",\"score\":6,\"maxScore\":9,\"error\":1},\"errors\":1},\"readability\":{\"contentHasAssets\":{\"error\":1,\"title\":\"Im\\u00e1genes\\/Videos en el contenido\",\"description\":\"No est\\u00e1 usando medios enriquecidos como im\\u00e1genes o v\\u00eddeos.\",\"score\":1,\"maxScore\":5},\"paragraphLength\":{\"title\":\"Longitud de los p\\u00e1rrafos\",\"description\":\"Est\\u00e1 usando p\\u00e1rrafos cortos.\",\"score\":5,\"maxScore\":5,\"error\":0},\"sentenceLength\":{\"title\":\"Longitud de las frases\",\"description\":\"\\u00a1La longitud de la frase se ve genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"passiveVoice\":{\"title\":\"Voz pasiva\",\"description\":\"Est\\u00e1s usando suficiente voz activa. \\u00a1Eso es fant\\u00e1stico!\",\"score\":9,\"maxScore\":9,\"error\":0},\"transitionWords\":{\"title\":\"Palabras de transici\\u00f3n\",\"description\":\"Ninguna de las frases contiene palabras de transici\\u00f3n. Usa alguna.\",\"score\":3,\"maxScore\":9,\"error\":1},\"consecutiveSentences\":{\"title\":\"Frases consecutivas\",\"description\":\"Hay suficiente variedad en sus frases. \\u00a1Eso es genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"subheadingsDistribution\":{\"title\":\"Distribuci\\u00f3n de subt\\u00edtulos\",\"description\":\"No est\\u00e1 usando ning\\u00fan subt\\u00edtulo, pero su texto es lo suficientemente corto y probablemente no los necesite.\",\"score\":9,\"maxScore\":9,\"error\":0},\"calculateFleschReading\":{\"title\":\"Facilidad de lectura Flesch\",\"description\":\"El texto punt\\u00faa 0 en la prueba, lo que se considera very difficult para leer. Try to make shorter sentences, using less difficult words to improve readability.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":3}}}',NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,'',NULL,NULL,'[]',0,'default','default',NULL,NULL,NULL,NULL,58,'default','{\"article\":{\"articleType\":\"BlogPosting\"},\"course\":{\"name\":\"\",\"description\":\"\",\"provider\":\"\"},\"faq\":{\"pages\":[]},\"product\":{\"reviews\":[]},\"recipe\":{\"ingredients\":[],\"instructions\":[],\"keywords\":[]},\"software\":{\"reviews\":[],\"operatingSystems\":[]},\"webPage\":{\"webPageType\":\"WebPage\"}}',0,1,0,0,0,0,0,0,0,-1,-1,'large','{\"tab\":\"advanced\",\"tab_social\":\"twitter\",\"tab_sidebar\":\"general\",\"tab_modal\":\"general\",\"tab_modal_social\":\"facebook\"}','[{\"image:loc\":\"http:\\/\\/localhost\\/brotherhoodsoftware\\/wp-content\\/uploads\\/2021\\/03\\/bench-accounting-C3V88BOoRoM-unsplash-1-scaled-1.jpg\",\"image:title\":\"bench-accounting-C3V88BOoRoM-unsplash-1\",\"image:caption\":\"\"}]','2021-04-23 04:58:46','default','default',NULL,NULL,NULL,'{\"locations\":{\"business\":{\"name\":\"\",\"businessType\":\"\",\"image\":\"\",\"areaServed\":\"\",\"urls\":{\"website\":\"\",\"aboutPage\":\"\",\"contactPage\":\"\"},\"address\":{\"streetLine1\":\"\",\"streetLine2\":\"\",\"zipCode\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"addressFormat\":\"#streetLineOne\\n#streetLineTwo\\n#city, #state #zipCode\"},\"contact\":{\"phone\":\"\",\"email\":\"\",\"fax\":\"\"},\"ids\":{\"vat\":\"\",\"tax\":\"\",\"chamberOfCommerce\":\"\"},\"payment\":{\"priceRange\":\"\",\"currenciesAccepted\":\"\",\"methods\":\"\"}}},\"openingHours\":{\"useDefaults\":true,\"show\":true,\"alwaysOpen\":false,\"use24hFormat\":false,\"timezone\":\"\",\"labels\":{\"closed\":\"\",\"alwaysOpen\":\"\"},\"days\":{\"monday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"tuesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"wednesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"thursday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"friday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"saturday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"sunday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"}}}}','2021-04-21 04:25:39','2021-04-23 05:19:55'),(16,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-21 04:26:29',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-21 04:26:29','2021-04-21 04:26:29'),(17,2534,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(18,2535,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(19,2536,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(20,2539,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(21,2540,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(22,2543,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(23,2544,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(24,2545,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(25,2546,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:32:23',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:32:23','2021-04-23 03:32:23'),(26,2547,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,0,'default','default',NULL,NULL,NULL,NULL,0,NULL,NULL,0,1,0,0,0,0,0,0,0,NULL,NULL,'large',NULL,NULL,'2021-04-23 03:33:28',NULL,NULL,NULL,NULL,NULL,NULL,'2021-04-23 03:33:28','2021-04-23 03:33:28'),(27,2568,'#post_title #separator_sa #site_title','#post_content','[]','{\"focus\":[],\"additional\":[]}','{\"analysis\":{\"basic\":{\"metadescriptionLength\":{\"title\":\"Longitud de la meta descripci\\u00f3n\",\"description\":\"La meta descripci\\u00f3n tiene m\\u00e1s de 160 caracteres.\",\"score\":6,\"maxScore\":9,\"error\":1},\"lengthContent\":{\"title\":\"Longitud del contenido\",\"description\":\"El contenido est\\u00e1 por debajo del m\\u00ednimo de palabras. A\\u00f1ada m\\u00e1s contenido.\",\"score\":6,\"maxScore\":9,\"error\":1},\"isInternalLink\":{\"title\":\"Enlaces internos\",\"description\":\"No pudimos encontrar ning\\u00fan enlace interno en su contenido. A\\u00f1ada enlaces internos en su contenido.\",\"score\":3,\"maxScore\":9,\"error\":1},\"isExternalLink\":{\"title\":\"Enlaces externos\",\"description\":\"No se encontraron enlaces salientes. A\\u00f1ada enlaces a recursos externos.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":4},\"title\":{\"titleLength\":{\"title\":\"Longitud del t\\u00edtulo SEO\",\"description\":\"El t\\u00edtulo es demasiado corto.\",\"score\":6,\"maxScore\":9,\"error\":1},\"errors\":1},\"readability\":{\"contentHasAssets\":{\"error\":1,\"title\":\"Im\\u00e1genes\\/Videos en el contenido\",\"description\":\"No est\\u00e1 usando medios enriquecidos como im\\u00e1genes o v\\u00eddeos.\",\"score\":1,\"maxScore\":5},\"paragraphLength\":{\"title\":\"Longitud de los p\\u00e1rrafos\",\"description\":\"Est\\u00e1 usando p\\u00e1rrafos cortos.\",\"score\":5,\"maxScore\":5,\"error\":0},\"sentenceLength\":{\"title\":\"Longitud de las frases\",\"description\":\"\\u00a1La longitud de la frase se ve genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"passiveVoice\":{\"title\":\"Voz pasiva\",\"description\":\"Est\\u00e1s usando suficiente voz activa. \\u00a1Eso es fant\\u00e1stico!\",\"score\":9,\"maxScore\":9,\"error\":0},\"transitionWords\":{\"title\":\"Palabras de transici\\u00f3n\",\"description\":\"Ninguna de las frases contiene palabras de transici\\u00f3n. Usa alguna.\",\"score\":3,\"maxScore\":9,\"error\":1},\"consecutiveSentences\":{\"title\":\"Frases consecutivas\",\"description\":\"Hay suficiente variedad en sus frases. \\u00a1Eso es genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"subheadingsDistribution\":{\"title\":\"Distribuci\\u00f3n de subt\\u00edtulos\",\"description\":\"No est\\u00e1 usando ning\\u00fan subt\\u00edtulo, pero su texto es lo suficientemente corto y probablemente no los necesite.\",\"score\":9,\"maxScore\":9,\"error\":0},\"calculateFleschReading\":{\"title\":\"Facilidad de lectura Flesch\",\"description\":\"El texto punt\\u00faa 18 en la prueba, lo que se considera very difficult para leer. Try to make shorter sentences, using less difficult words to improve readability.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":3}}}',NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,'',NULL,NULL,'[]',0,'default','default',NULL,NULL,NULL,NULL,64,'default','{\"article\":{\"articleType\":\"BlogPosting\"},\"course\":{\"name\":\"\",\"description\":\"\",\"provider\":\"\"},\"faq\":{\"pages\":[]},\"product\":{\"reviews\":[]},\"recipe\":{\"ingredients\":[],\"instructions\":[],\"keywords\":[]},\"software\":{\"reviews\":[],\"operatingSystems\":[]},\"webPage\":{\"webPageType\":\"WebPage\"}}',0,1,0,0,0,0,0,0,0,-1,-1,'large','{\"tab\":\"advanced\",\"tab_social\":\"twitter\",\"tab_sidebar\":\"general\",\"tab_modal\":\"general\",\"tab_modal_social\":\"facebook\"}',NULL,NULL,'default','default',NULL,NULL,NULL,'{\"locations\":{\"business\":{\"name\":\"\",\"businessType\":\"\",\"image\":\"\",\"areaServed\":\"\",\"urls\":{\"website\":\"\",\"aboutPage\":\"\",\"contactPage\":\"\"},\"address\":{\"streetLine1\":\"\",\"streetLine2\":\"\",\"zipCode\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"addressFormat\":\"#streetLineOne\\n#streetLineTwo\\n#city, #state #zipCode\"},\"contact\":{\"phone\":\"\",\"email\":\"\",\"fax\":\"\"},\"ids\":{\"vat\":\"\",\"tax\":\"\",\"chamberOfCommerce\":\"\"},\"payment\":{\"priceRange\":\"\",\"currenciesAccepted\":\"\",\"methods\":\"\"}}},\"openingHours\":{\"useDefaults\":true,\"show\":true,\"alwaysOpen\":false,\"use24hFormat\":false,\"timezone\":\"\",\"labels\":{\"closed\":\"\",\"alwaysOpen\":\"\"},\"days\":{\"monday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"tuesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"wednesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"thursday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"friday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"saturday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"sunday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"}}}}','2021-04-23 04:02:37','2021-04-23 04:02:37'),(28,2569,'#post_title #separator_sa #site_title','#post_content','[]','{\"focus\":[],\"additional\":[]}','{\"analysis\":{\"basic\":{\"metadescriptionLength\":{\"title\":\"Longitud de la meta descripci\\u00f3n\",\"description\":\"La meta descripci\\u00f3n tiene m\\u00e1s de 160 caracteres.\",\"score\":6,\"maxScore\":9,\"error\":1},\"lengthContent\":{\"title\":\"Longitud del contenido\",\"description\":\"La longitud del contenido es correcta. \\u00a1Buen trabajo!\",\"score\":9,\"maxScore\":9,\"error\":0},\"isInternalLink\":{\"title\":\"Enlaces internos\",\"description\":\"No pudimos encontrar ning\\u00fan enlace interno en su contenido. A\\u00f1ada enlaces internos en su contenido.\",\"score\":3,\"maxScore\":9,\"error\":1},\"isExternalLink\":{\"title\":\"Enlaces externos\",\"description\":\"No se encontraron enlaces salientes. A\\u00f1ada enlaces a recursos externos.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":3},\"title\":{\"titleLength\":{\"title\":\"Longitud del t\\u00edtulo SEO\",\"description\":\"El t\\u00edtulo es demasiado corto.\",\"score\":6,\"maxScore\":9,\"error\":1},\"errors\":1},\"readability\":{\"contentHasAssets\":{\"error\":1,\"title\":\"Im\\u00e1genes\\/Videos en el contenido\",\"description\":\"No est\\u00e1 usando medios enriquecidos como im\\u00e1genes o v\\u00eddeos.\",\"score\":1,\"maxScore\":5},\"paragraphLength\":{\"title\":\"Longitud de los p\\u00e1rrafos\",\"description\":\"Est\\u00e1 usando p\\u00e1rrafos cortos.\",\"score\":5,\"maxScore\":5,\"error\":0},\"sentenceLength\":{\"title\":\"Longitud de las frases\",\"description\":\"\\u00a1La longitud de la frase se ve genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"passiveVoice\":{\"title\":\"Voz pasiva\",\"description\":\"Est\\u00e1s usando suficiente voz activa. \\u00a1Eso es fant\\u00e1stico!\",\"score\":9,\"maxScore\":9,\"error\":0},\"transitionWords\":{\"title\":\"Palabras de transici\\u00f3n\",\"description\":\"Ninguna de las frases contiene palabras de transici\\u00f3n. Usa alguna.\",\"score\":3,\"maxScore\":9,\"error\":1},\"consecutiveSentences\":{\"title\":\"Frases consecutivas\",\"description\":\"Hay suficiente variedad en sus frases. \\u00a1Eso es genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"subheadingsDistribution\":{\"title\":\"Distribuci\\u00f3n de subt\\u00edtulos\",\"description\":\"No est\\u00e1 utilizando ning\\u00fan subt\\u00edtulo, aunque su texto es bastante largo. Intente a\\u00f1adir algunos subt\\u00edtulos.\",\"score\":2,\"maxScore\":9,\"error\":1},\"calculateFleschReading\":{\"title\":\"Facilidad de lectura Flesch\",\"description\":\"El texto punt\\u00faa 0 en la prueba, lo que se considera very difficult para leer. Try to make shorter sentences, using less difficult words to improve readability.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":4}}}',NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,'',NULL,NULL,'[]',0,'default','default',NULL,NULL,NULL,NULL,63,'default','{\"article\":{\"articleType\":\"BlogPosting\"},\"course\":{\"name\":\"\",\"description\":\"\",\"provider\":\"\"},\"faq\":{\"pages\":[]},\"product\":{\"reviews\":[]},\"recipe\":{\"ingredients\":[],\"instructions\":[],\"keywords\":[]},\"software\":{\"reviews\":[],\"operatingSystems\":[]},\"webPage\":{\"webPageType\":\"WebPage\"}}',0,1,0,0,0,0,0,0,0,-1,-1,'large','{\"tab\":\"advanced\",\"tab_social\":\"twitter\",\"tab_sidebar\":\"general\",\"tab_modal\":\"general\",\"tab_modal_social\":\"facebook\"}',NULL,NULL,'default','default',NULL,NULL,NULL,'{\"locations\":{\"business\":{\"name\":\"\",\"businessType\":\"\",\"image\":\"\",\"areaServed\":\"\",\"urls\":{\"website\":\"\",\"aboutPage\":\"\",\"contactPage\":\"\"},\"address\":{\"streetLine1\":\"\",\"streetLine2\":\"\",\"zipCode\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"addressFormat\":\"#streetLineOne\\n#streetLineTwo\\n#city, #state #zipCode\"},\"contact\":{\"phone\":\"\",\"email\":\"\",\"fax\":\"\"},\"ids\":{\"vat\":\"\",\"tax\":\"\",\"chamberOfCommerce\":\"\"},\"payment\":{\"priceRange\":\"\",\"currenciesAccepted\":\"\",\"methods\":\"\"}}},\"openingHours\":{\"useDefaults\":true,\"show\":true,\"alwaysOpen\":false,\"use24hFormat\":false,\"timezone\":\"\",\"labels\":{\"closed\":\"\",\"alwaysOpen\":\"\"},\"days\":{\"monday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"tuesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"wednesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"thursday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"friday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"saturday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"sunday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"}}}}','2021-04-23 04:04:23','2021-04-23 04:04:23'),(29,2584,'#post_title #separator_sa #site_title','#post_content','[]','{\"focus\":[],\"additional\":[]}','{\"analysis\":{\"basic\":{\"metadescriptionLength\":[],\"lengthContent\":{\"error\":1,\"title\":\"Longitud del contenido\",\"description\":\"Por favor primero a\\u00f1ada algo de contenido.\",\"score\":1,\"maxScore\":5},\"isInternalLink\":[],\"isExternalLink\":[],\"errors\":1},\"title\":{\"titleLength\":{\"title\":\"Longitud del t\\u00edtulo SEO\",\"description\":\"El t\\u00edtulo es demasiado corto.\",\"score\":6,\"maxScore\":9,\"error\":1},\"errors\":1},\"readability\":{\"contentHasAssets\":{\"error\":1,\"title\":\"Im\\u00e1genes\\/Videos en el contenido\",\"description\":\"Por favor primero a\\u00f1ada algo de contenido.\",\"score\":1,\"maxScore\":5},\"paragraphLength\":[],\"sentenceLength\":[],\"passiveVoice\":[],\"transitionWords\":[],\"consecutiveSentences\":[],\"subheadingsDistribution\":[],\"calculateFleschReading\":[],\"errors\":1}}}',NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,'',NULL,NULL,'[]',0,'default','default',NULL,NULL,NULL,NULL,35,'default','{\"article\":{\"articleType\":\"BlogPosting\"},\"course\":{\"name\":\"\",\"description\":\"\",\"provider\":\"\"},\"faq\":{\"pages\":[]},\"product\":{\"reviews\":[]},\"recipe\":{\"ingredients\":[],\"instructions\":[],\"keywords\":[]},\"software\":{\"reviews\":[],\"operatingSystems\":[]},\"webPage\":{\"webPageType\":\"WebPage\"}}',0,1,0,0,0,0,0,0,0,-1,-1,'large','{\"tab\":\"general\",\"tab_social\":\"facebook\",\"tab_sidebar\":\"general\",\"tab_modal\":\"general\",\"tab_modal_social\":\"facebook\"}',NULL,'2021-04-23 04:37:04','default','default',NULL,NULL,NULL,'{\"locations\":{\"business\":{\"name\":\"\",\"businessType\":\"\",\"image\":\"\",\"areaServed\":\"\",\"urls\":{\"website\":\"\",\"aboutPage\":\"\",\"contactPage\":\"\"},\"address\":{\"streetLine1\":\"\",\"streetLine2\":\"\",\"zipCode\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"addressFormat\":\"#streetLineOne\\n#streetLineTwo\\n#city, #state #zipCode\"},\"contact\":{\"phone\":\"\",\"email\":\"\",\"fax\":\"\"},\"ids\":{\"vat\":\"\",\"tax\":\"\",\"chamberOfCommerce\":\"\"},\"payment\":{\"priceRange\":\"\",\"currenciesAccepted\":\"\",\"methods\":\"\"}}},\"openingHours\":{\"useDefaults\":true,\"show\":true,\"alwaysOpen\":false,\"use24hFormat\":false,\"timezone\":\"\",\"labels\":{\"closed\":\"\",\"alwaysOpen\":\"\"},\"days\":{\"monday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"tuesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"wednesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"thursday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"friday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"saturday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"sunday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"}}}}','2021-04-23 04:26:30','2021-04-23 04:37:04'),(30,51,'#post_title #separator_sa #site_title','#post_content','[]','{\"focus\":[],\"additional\":[]}','{\"analysis\":{\"basic\":{\"metadescriptionLength\":[],\"lengthContent\":{\"error\":1,\"title\":\"Longitud del contenido\",\"description\":\"Por favor primero a\\u00f1ada algo de contenido.\",\"score\":1,\"maxScore\":5},\"isInternalLink\":[],\"isExternalLink\":[],\"errors\":1},\"title\":{\"titleLength\":{\"title\":\"Longitud del t\\u00edtulo SEO\",\"description\":\"El t\\u00edtulo es demasiado corto.\",\"score\":6,\"maxScore\":9,\"error\":1},\"errors\":1},\"readability\":{\"contentHasAssets\":{\"error\":1,\"title\":\"Im\\u00e1genes\\/Videos en el contenido\",\"description\":\"Por favor primero a\\u00f1ada algo de contenido.\",\"score\":1,\"maxScore\":5},\"paragraphLength\":[],\"sentenceLength\":[],\"passiveVoice\":[],\"transitionWords\":[],\"consecutiveSentences\":[],\"subheadingsDistribution\":[],\"calculateFleschReading\":[],\"errors\":1}}}',NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,'',NULL,NULL,'[]',0,'default','default',NULL,NULL,NULL,NULL,35,'default','{\"article\":{\"articleType\":\"BlogPosting\"},\"course\":{\"name\":\"\",\"description\":\"\",\"provider\":\"\"},\"faq\":{\"pages\":[]},\"product\":{\"reviews\":[]},\"recipe\":{\"ingredients\":[],\"instructions\":[],\"keywords\":[]},\"software\":{\"reviews\":[],\"operatingSystems\":[]},\"webPage\":{\"webPageType\":\"WebPage\"}}',0,1,0,0,0,0,0,0,0,-1,-1,'large','{\"tab\":\"general\",\"tab_social\":\"facebook\",\"tab_sidebar\":\"general\",\"tab_modal\":\"general\",\"tab_modal_social\":\"facebook\"}',NULL,'2021-04-23 04:37:04','default','default',NULL,NULL,NULL,'{\"locations\":{\"business\":{\"name\":\"\",\"businessType\":\"\",\"image\":\"\",\"areaServed\":\"\",\"urls\":{\"website\":\"\",\"aboutPage\":\"\",\"contactPage\":\"\"},\"address\":{\"streetLine1\":\"\",\"streetLine2\":\"\",\"zipCode\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"addressFormat\":\"#streetLineOne\\n#streetLineTwo\\n#city, #state #zipCode\"},\"contact\":{\"phone\":\"\",\"email\":\"\",\"fax\":\"\"},\"ids\":{\"vat\":\"\",\"tax\":\"\",\"chamberOfCommerce\":\"\"},\"payment\":{\"priceRange\":\"\",\"currenciesAccepted\":\"\",\"methods\":\"\"}}},\"openingHours\":{\"useDefaults\":true,\"show\":true,\"alwaysOpen\":false,\"use24hFormat\":false,\"timezone\":\"\",\"labels\":{\"closed\":\"\",\"alwaysOpen\":\"\"},\"days\":{\"monday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"tuesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"wednesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"thursday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"friday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"saturday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"sunday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"}}}}','2021-04-23 04:33:39','2021-04-23 04:37:04'),(31,2596,'#post_title #separator_sa #site_title','#post_content','[]','{\"focus\":[],\"additional\":[]}','{\"analysis\":{\"basic\":{\"metadescriptionLength\":[],\"lengthContent\":{\"title\":\"Longitud del contenido\",\"description\":\"El contenido est\\u00e1 por debajo del m\\u00ednimo de palabras. A\\u00f1ada m\\u00e1s contenido.\",\"score\":3,\"maxScore\":9,\"error\":1},\"isInternalLink\":{\"title\":\"Enlaces internos\",\"description\":\"No pudimos encontrar ning\\u00fan enlace interno en su contenido. A\\u00f1ada enlaces internos en su contenido.\",\"score\":3,\"maxScore\":9,\"error\":1},\"isExternalLink\":{\"title\":\"Enlaces externos\",\"description\":\"No se encontraron enlaces salientes. A\\u00f1ada enlaces a recursos externos.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":3},\"title\":{\"titleLength\":{\"title\":\"Longitud del t\\u00edtulo SEO\",\"description\":\"El t\\u00edtulo es demasiado corto.\",\"score\":6,\"maxScore\":9,\"error\":1},\"errors\":1},\"readability\":{\"contentHasAssets\":{\"error\":1,\"title\":\"Im\\u00e1genes\\/Videos en el contenido\",\"description\":\"No est\\u00e1 usando medios enriquecidos como im\\u00e1genes o v\\u00eddeos.\",\"score\":1,\"maxScore\":5},\"paragraphLength\":{\"title\":\"Longitud de los p\\u00e1rrafos\",\"description\":\"Est\\u00e1 usando p\\u00e1rrafos cortos.\",\"score\":5,\"maxScore\":5,\"error\":0},\"sentenceLength\":{\"title\":\"Longitud de las frases\",\"description\":\"\\u00a1La longitud de la frase se ve genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"passiveVoice\":{\"title\":\"Voz pasiva\",\"description\":\"Est\\u00e1s usando suficiente voz activa. \\u00a1Eso es fant\\u00e1stico!\",\"score\":9,\"maxScore\":9,\"error\":0},\"transitionWords\":{\"title\":\"Palabras de transici\\u00f3n\",\"description\":\"Ninguna de las frases contiene palabras de transici\\u00f3n. Usa alguna.\",\"score\":3,\"maxScore\":9,\"error\":1},\"consecutiveSentences\":{\"title\":\"Frases consecutivas\",\"description\":\"Hay suficiente variedad en sus frases. \\u00a1Eso es genial!\",\"score\":9,\"maxScore\":9,\"error\":0},\"subheadingsDistribution\":{\"title\":\"Distribuci\\u00f3n de subt\\u00edtulos\",\"description\":\"No est\\u00e1 usando ning\\u00fan subt\\u00edtulo, pero su texto es lo suficientemente corto y probablemente no los necesite.\",\"score\":9,\"maxScore\":9,\"error\":0},\"calculateFleschReading\":{\"title\":\"Facilidad de lectura Flesch\",\"description\":\"El texto punt\\u00faa 0 en la prueba, lo que se considera very difficult para leer. Try to make shorter sentences, using less difficult words to improve readability.\",\"score\":3,\"maxScore\":9,\"error\":1},\"errors\":3}}}',NULL,NULL,NULL,'default','default',NULL,NULL,NULL,NULL,'',NULL,NULL,'[]',0,'default','default',NULL,NULL,NULL,NULL,58,'default','{\"article\":{\"articleType\":\"BlogPosting\"},\"course\":{\"name\":\"\",\"description\":\"\",\"provider\":\"\"},\"faq\":{\"pages\":[]},\"product\":{\"reviews\":[]},\"recipe\":{\"ingredients\":[],\"instructions\":[],\"keywords\":[]},\"software\":{\"reviews\":[],\"operatingSystems\":[]},\"webPage\":{\"webPageType\":\"WebPage\"}}',0,1,0,0,0,0,0,0,0,-1,-1,'large','{\"tab\":\"advanced\",\"tab_social\":\"twitter\",\"tab_sidebar\":\"general\",\"tab_modal\":\"general\",\"tab_modal_social\":\"facebook\"}',NULL,NULL,'default','default',NULL,NULL,NULL,'{\"locations\":{\"business\":{\"name\":\"\",\"businessType\":\"\",\"image\":\"\",\"areaServed\":\"\",\"urls\":{\"website\":\"\",\"aboutPage\":\"\",\"contactPage\":\"\"},\"address\":{\"streetLine1\":\"\",\"streetLine2\":\"\",\"zipCode\":\"\",\"city\":\"\",\"state\":\"\",\"country\":\"\",\"addressFormat\":\"#streetLineOne\\n#streetLineTwo\\n#city, #state #zipCode\"},\"contact\":{\"phone\":\"\",\"email\":\"\",\"fax\":\"\"},\"ids\":{\"vat\":\"\",\"tax\":\"\",\"chamberOfCommerce\":\"\"},\"payment\":{\"priceRange\":\"\",\"currenciesAccepted\":\"\",\"methods\":\"\"}}},\"openingHours\":{\"useDefaults\":true,\"show\":true,\"alwaysOpen\":false,\"use24hFormat\":false,\"timezone\":\"\",\"labels\":{\"closed\":\"\",\"alwaysOpen\":\"\"},\"days\":{\"monday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"tuesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"wednesday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"thursday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"friday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"saturday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"},\"sunday\":{\"open24h\":false,\"closed\":false,\"openTime\":\"09:00\",\"closeTime\":\"17:00\"}}}}','2021-04-23 05:19:55','2021-04-23 05:19:55');
/*!40000 ALTER TABLE `wp_aioseo_posts` ENABLE KEYS */;
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
