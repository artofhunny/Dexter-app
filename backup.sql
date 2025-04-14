-- MySQL dump 10.13  Distrib 9.2.0, for macos15.2 (arm64)
--
-- Host: localhost    Database: mysquareapp
-- ------------------------------------------------------
-- Server version	9.2.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `apps`
--

DROP TABLE IF EXISTS `apps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `apps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_icon` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `x_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `app_images` json DEFAULT NULL,
  `about_intro` text COLLATE utf8mb4_unicode_ci,
  `about_overview` text COLLATE utf8mb4_unicode_ci,
  `about_features` text COLLATE utf8mb4_unicode_ci,
  `about_get_started` text COLLATE utf8mb4_unicode_ci,
  `app_tags` json DEFAULT NULL,
  `seo_title` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` text COLLATE utf8mb4_unicode_ci,
  `seo_keywords` text COLLATE utf8mb4_unicode_ci,
  `faq` json DEFAULT NULL,
  `likes` bigint unsigned NOT NULL DEFAULT '0',
  `followers` bigint unsigned NOT NULL DEFAULT '0',
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `average_rating` decimal(4,2) NOT NULL DEFAULT '0.00',
  `total_reviews` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `apps_app_name_unique` (`app_name`),
  KEY `apps_user_id_foreign` (`user_id`),
  KEY `apps_website_url_index` (`website_url`),
  KEY `apps_instagram_url_index` (`instagram_url`),
  KEY `apps_facebook_url_index` (`facebook_url`),
  KEY `apps_x_url_index` (`x_url`),
  CONSTRAINT `apps_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `apps`
--

LOCK TABLES `apps` WRITE;
/*!40000 ALTER TABLE `apps` DISABLE KEYS */;
INSERT INTO `apps` VALUES (1,'89987fc2-57c8-4e4e-aab8-82962a24f58e','aInfia','app_icons/XskSMauUFVriSgG7eiMF7DH4EgxyCS3UWgG2YbVW.webp','Audit','https://infimultichain.com/exch/',NULL,NULL,NULL,'\"[\\\"app_images\\\\/o8lmiZ8x3BWX3LpFj0ir8Xp01wwWpUSDPt6ukjBF.webp\\\",\\\"app_images\\\\/ARnDrSPQe3dmi8UTLNzx3Zfkel5wguR08ndwgtOx.webp\\\"]\"','','Abhayaashahida','','','\"[\\\"ass\\\",\\\"asasa\\\"]\"','Avia app helps to ghost game',NULL,NULL,'\"[{\\\"question\\\":\\\"How to install?\\\",\\\"answer\\\":\\\"yEs install it\\\"}]\"',0,100000,0,'2025-03-25 12:42:28','2025-03-30 13:43:14',0.00,0),(2,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Henlo','app_icons/gvUVtR8XcxZpiMSC13GfuSgD5F6M9gUUW4rKKURY.jpg','Browser','https://infimultichain.com/exch/',NULL,NULL,NULL,'[\"app_images/gtdwWBXGz89q4BkEVAXB2zKhZYE4BU4Re0k9PMIm.jpg\", \"app_images/l2si8TO0lBjubVY4c4AJg02jdtqzPjHz2q10Ep0h.png\"]','Some of the first news circulations occurred in Renaissance Europe. These handwritten newsletters, circulated among merchants, contained news about wars, economic conditions, and social customs. Newsletters were very','winker fush sjsk','sfafa afa wqr','afaf ','\"[\\\"ass \\\",\\\"asasa\\\"]\"',NULL,NULL,NULL,'[]',0,0,1,'2025-03-26 04:45:16','2025-04-07 07:32:30',0.00,2),(3,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Baleno','app_icons/kTXlPgx7kst1F8Wu121jLLYj3NiLJGxTueCAlPQb.jpg','Marketplace','https://www.mexc.co/en-IN/price/henlo',NULL,NULL,NULL,'\"[\\\"app_images\\\\/hVFsuV1UfkFZ4GCE2sSFJpYifjxwR0QhpO3rbah0.webp\\\",\\\"app_images\\\\/ojDqW5dIMS6WPXUuauXzNONjpHpepREgDkY0bAHp.webp\\\"]\"','Validation for all fields\r\n\r\nProper error handling\r\n\r\nCSRF protection\r\n\r\nClean, maintainable code structure\r\n\r\nWordPress-like UI with Bootstrap styling','Validation for all fields\r\n\r\nProper error handling\r\n\r\nCSRF protection\r\n\r\nClean, maintainable code structure\r\n\r\nWordPress-like UI with Bootstrap styling','Validation for all fields\r\n\r\nProper error handling\r\n\r\nCSRF protection\r\n\r\nClean, maintainable code structure\r\n\r\nWordPress-like UI with Bootstrap styling','fish eat','\"[\\\"etherium\\\"]\"','Baleno','Baleno','[\"heleno \",\" visit\"]','\"[]\"',10000,0,1,'2025-03-26 07:24:43','2025-03-31 11:15:59',0.00,0),(4,'89987fc2-57c8-4e4e-aab8-82962a24f58e','Chain app','app_icons/482FPkFD8xzyUxuHdqSLoeRORCsA3e35XYCSM0Mw.jpg','Audit','https://infimultichain.com/exch/',NULL,NULL,NULL,'[\"app_images/hhZ5VyWcD7IW7i740L6RXroylKwDHq536aR8JMun.jpg\", \"app_images/W7FQikhSxLCQMYl71z99yWa8htXkMEDH47f2vCEq.jpg\", \"app_images/7fPazL6Wug42IcHcD0i9RcEkLcksYqz8u59GvOKn.jpg\"]','Chain app works on etherium','','','','\"[\\\"etherium\\\"]\"','Chan-coin','chan coin seo','[\"\"]','[]',0,1,0,'2025-03-27 07:35:00','2025-04-01 10:49:17',0.00,0);
/*!40000 ALTER TABLE `apps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_post`
--

DROP TABLE IF EXISTS `category_post`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `category_post` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `post_id` bigint unsigned NOT NULL,
  `category_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_post_post_id_foreign` (`post_id`),
  KEY `category_post_category_id_foreign` (`category_id`),
  CONSTRAINT `category_post_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_post_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_post`
--

LOCK TABLES `category_post` WRITE;
/*!40000 ALTER TABLE `category_post` DISABLE KEYS */;
/*!40000 ALTER TABLE `category_post` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` VALUES (2,'Ankit Shukhla','Ankitshukhla@gmail.com','vinko','1234567891','Want to list app','2025-03-31 07:41:44','2025-03-31 07:41:44'),(3,'Vicky','vicky@gmail.com','wixx','0987654322','want to list app name wixx','2025-03-31 07:46:28','2025-03-31 07:46:28');
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `follows`
--

DROP TABLE IF EXISTS `follows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `follows` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `app_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `follows_user_id_foreign` (`user_id`),
  KEY `follows_app_id_foreign` (`app_id`),
  CONSTRAINT `follows_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE,
  CONSTRAINT `follows_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `follows`
--

LOCK TABLES `follows` WRITE;
/*!40000 ALTER TABLE `follows` DISABLE KEYS */;
INSERT INTO `follows` VALUES (6,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020',1,'2025-04-01 10:42:02','2025-04-01 10:42:02'),(15,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020',2,'2025-04-02 08:00:50','2025-04-02 08:00:50');
/*!40000 ALTER TABLE `follows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hot_offers`
--

DROP TABLE IF EXISTS `hot_offers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hot_offers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `position` tinyint NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `original_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hot_offers_position_unique` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hot_offers`
--

LOCK TABLES `hot_offers` WRITE;
/*!40000 ALTER TABLE `hot_offers` DISABLE KEYS */;
INSERT INTO `hot_offers` VALUES (4,1,'1743178862_ .jpg','5b576fb7-5355-4dba-9df4-52aa52e930ea.webp','2025-03-26 10:09:12','2025-03-28 10:51:02'),(5,2,'1743178862_Psycho wallpaper for PC.jpeg','5b576fb7-5355-4dba-9df4-52aa52e930ea.webp','2025-03-26 10:09:12','2025-03-28 10:51:02'),(6,3,'1743178862_sports-car-mountains-retrowave-synthwave-4k-wallpaper-uhdpaper.com-233@0@k.jpg','5b576fb7-5355-4dba-9df4-52aa52e930ea.webp','2025-03-26 10:09:12','2025-03-28 10:51:02');
/*!40000 ALTER TABLE `hot_offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hot_picks`
--

DROP TABLE IF EXISTS `hot_picks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hot_picks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `app_id` bigint unsigned NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hot_picks_position_unique` (`position`),
  KEY `hot_picks_app_id_foreign` (`app_id`),
  CONSTRAINT `hot_picks_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hot_picks`
--

LOCK TABLES `hot_picks` WRITE;
/*!40000 ALTER TABLE `hot_picks` DISABLE KEYS */;
INSERT INTO `hot_picks` VALUES (1,2,1,'2025-04-07 08:37:20','2025-04-07 08:37:20'),(2,2,2,'2025-04-07 08:37:20','2025-04-07 08:37:20'),(3,3,3,'2025-04-07 08:37:20','2025-04-07 08:37:20'),(4,2,4,'2025-04-07 08:37:20','2025-04-07 08:37:20'),(5,2,5,'2025-04-07 08:37:20','2025-04-07 08:37:20');
/*!40000 ALTER TABLE `hot_picks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_batches`
--

LOCK TABLES `job_batches` WRITE;
/*!40000 ALTER TABLE `job_batches` DISABLE KEYS */;
/*!40000 ALTER TABLE `job_batches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (11,'0001_01_01_000000_create_users_table',1),(12,'0001_01_01_000001_create_cache_table',1),(13,'0001_01_01_000002_create_jobs_table',1),(14,'2025_03_21_052818_create_apps_table',1),(15,'2025_03_22_153646_add_profile_fields_to_users_table',2),(16,'2025_03_25_150954_create_posts_table',3),(17,'2025_03_25_183132_modify_user_id_in_posts_table',4),(18,'2025_03_25_184510_create_categories_table',5),(19,'2025_03_25_184535_create_category_post_table',6),(20,'2025_03_26_111224_create_password_resets_table',7),(21,'2025_03_26_121738_create_settings_table',8),(22,'2025_03_26_124940_add_seo_fields_to_apps_table',8),(24,'2025_03_26_132110_create_hot_offers_table',9),(26,'2025_03_28_125931_create_contacts_table',10),(27,'2025_03_29_151126_create_reviews_table',11),(28,'2025_03_30_182958_create_reviews_table',12),(30,'2025_03_30_190738_add_average_rating_to_apps_table',13),(31,'2025_03_31_161932_create_follows_table',14),(32,'2025_04_01_151857_create_follows_table',15),(33,'2025_04_02_150801_create_top_games_table',16),(34,'2025_04_05_123308_create_top_utilities_table',17),(35,'2025_04_07_135042_create_hot_picks_table',18);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `categories` json DEFAULT NULL,
  `tags` json DEFAULT NULL,
  `status` enum('draft','published') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'draft',
  `scheduled_at` timestamp NULL DEFAULT NULL,
  `allow_comments` tinyint(1) NOT NULL DEFAULT '1',
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
INSERT INTO `posts` VALUES (1,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','template test','template-test','wxe','<p>adadaef</p>',NULL,NULL,'\"[\\\"aa\\\"]\"','published','2025-02-13 18:26:00',1,0,NULL,NULL,'2025-03-25 13:06:48','2025-03-25 13:06:48'),(2,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Hey test blog','hey-test-blog','Excerpt','<h1><strong>Its a high from Hadi</strong></h1>','uploads/blogs/JxMgeP1AQ8WUlpc8iFU5cQGYkLM0GT4atkx2h1i2.jpg',NULL,'\"[\\\"aa\\\",\\\"laravel\\\"]\"','published','2025-03-25 18:43:00',1,0,NULL,NULL,'2025-03-25 13:13:18','2025-03-25 13:13:18'),(3,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Dummy-blog','dummy-blog','excerpy','<h1>Hey Hadi</h1>',NULL,NULL,'\"[\\\"aa\\\"]\"','published','2025-03-25 18:49:00',1,0,NULL,NULL,'2025-03-25 13:19:21','2025-03-25 13:19:21'),(4,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','News media','news-media','excerpt','<p><span style=\"color: rgb(32, 33, 34);\">ome of the first news circulations occurred in Renaissance Europe. These handwritten newsletters, circulated among merchants, contained news about wars, economic conditions, and social customs. Newsletters were very scarce and no two were the same as they were all hand written, until the invention of the printing press by&nbsp;</span><a href=\"https://en.wikipedia.org/wiki/Johannes_Gutenberg\" target=\"_blank\" style=\"color: var(--color-progressive,#36c);\">Johannes Gutenberg</a><span style=\"color: rgb(32, 33, 34);\">&nbsp;in 1440. With movable type and ink, newspapers were now able to be mass produced for cheap.</span><a href=\"https://en.wikipedia.org/wiki/News_media#cite_note-:1-1\" target=\"_blank\" style=\"color: var(--color-progressive,#36c); background-color: initial;\"><sup>[1]</sup></a><span style=\"color: rgb(32, 33, 34);\">&nbsp;The first printed news appeared b</span></p>','uploads/blogs/3M1YqvurTCAtU353ZuOBXsQpCVTn1STt2o58hG0F.png',NULL,'\"[\\\"aa\\\",\\\" laravel\\\"]\"','published','2025-03-26 10:41:00',1,0,'Test meta','Test data','2025-03-26 05:11:10','2025-03-26 05:11:10'),(5,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','The Future of Technology','the-future-of-technology','Technology is evolving rapidly, shaping our future in ways we never imagined.','<p>&lt;p&gt;The world of technology is evolving at an unprecedented pace. Innovations like artificial intelligence, blockchain, and quantum computing are transforming industries and creating new opportunities.&lt;/p&gt;</p><p><br></p><p>&lt;p&gt;In the coming years, we can expect self-driving cars to become mainstream, AI-powered assistants to revolutionize customer service, and space exploration to reach new heights.&lt;/p&gt;</p><p><br></p><p>&lt;p&gt;The future is digital, and embracing technological advancements will be key to staying ahead in this ever-changing landscape.&lt;/p&gt;</p><p><br></p>','uploads/blogs/AIfRESWkwKLR6pxCiiTNWWjb9zyYZpbZC6BBHcGL.jpg',NULL,'\"[\\\"tech\\\",\\\" AI\\\",\\\" future\\\",\\\" innovation\\\"]\"','published','2025-03-26 10:43:00',1,0,'The Future of Technology in 2025 and Beyond','Discover the latest tech trends shaping our world, from AI to space exploration.','2025-03-26 05:14:11','2025-03-26 05:14:11'),(6,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','The Future of AI in Everyday Life','the-future-of-ai-in-everyday-life','Excerpt: AI is transforming daily life, from smart assistants to automated driving.','<h1>&lt;p&gt;Artificial Intelligence (AI) is no longer a concept of the future—it\'s part of our daily lives.&nbsp;</h1><h1>From voice assistants like Siri and Alexa to self-driving cars, AI continues to evolve rapidly.&lt;/p&gt;&nbsp;</h1><h1><br></h1><h1>&lt;p&gt;With advancements in machine learning and automation, industries such as healthcare, finance,&nbsp;</h1><h1>and education are leveraging AI to improve efficiency and decision-making.&lt;/p&gt;&nbsp;</h1><h1><br></h1><h1>&lt;p&gt;But as AI grows, ethical considerations arise. Will AI replace jobs? How do we ensure fair use?&nbsp;</h1><h1>The future of AI is exciting, yet it requires careful regulation and development.&lt;/p&gt;</h1><p><br></p>','uploads/blogs/uzgHBY4JBuwQsplpNGADCHg2IDGdprGKCf5KuV6b.jpg',NULL,'\"[\\\"tech\\\",\\\" AI\\\",\\\" future\\\",\\\" innovation\\\"]\"','published','2025-03-26 10:47:00',1,0,'The Future of Technology in 2025 and Beyond','tst data','2025-03-26 05:17:58','2025-03-26 05:17:58'),(7,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','vweleke','vweleke','Excerpt: AI is transforming daily life, from sasasamart assistants to automated driving.','<p>asasasadasdsdada</p>','uploads/blogs/5x7XZeOnEJokM4HwR5NBOwMhBHCkpBhCx350Xq8q.jpg',NULL,'\"[\\\"tech\\\",\\\" AI\\\",\\\" future\\\",\\\" innovation\\\"]\"','published','2025-03-26 10:47:00',1,0,'The Future of Technology in 2025 and Beyond','tst data','2025-03-26 05:20:58','2025-03-26 05:20:58'),(8,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Auto generated','auto-generated','auto','<h1>Normal sdgf</h1><h1>bdfashfa</h1><h1>anfnanga</h1><h1>&lt;p&gt; sdjshkfh&lt;p&gt;</h1>',NULL,NULL,'\"[\\\"\\\"]\"','published','2025-03-29 15:24:00',1,0,NULL,NULL,'2025-03-26 09:54:35','2025-03-26 09:54:35'),(9,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Chain app','chain-app','Chain app','<p><br></p>',NULL,NULL,'\"[\\\"\\\"]\"','draft',NULL,1,0,NULL,NULL,'2025-03-27 07:38:39','2025-03-27 07:38:39'),(10,'b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Aviator Blog','aviator-blog','Aviator','<p><strong>Aviator</strong></p><h1>An aviator is a person who operates an aircraft, commonly referred to as a pilot. Aviators play a crucial role in air travel, military defense, and aerial exploration. From early pioneers like the Wright brothers to modern commercial pilots, aviation has significantly evolved, making air travel one of the fastest and safest modes of transportation. Pilots undergo rigorous training, mastering navigation, weather conditions, and emergency procedures to ensure passenger and cargo safety. Whether flying commercial jets, military fighter planes, or private aircraft, aviators demonstrate skill, precision, and a deep understanding of aerodynamics. Their contributions continue to shape global connectivity and technological advancements in aviation.</h1>','uploads/blogs/rsBmfxzBl7d8nVzxCHQCNEWcKE8MGL67d76jPmZV.jpg',NULL,'\"[\\\"aviator\\\"]\"','published','2025-04-28 14:10:00',1,0,NULL,NULL,'2025-03-27 08:40:12','2025-03-27 08:40:12');
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reviews` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `app_id` bigint unsigned NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL DEFAULT '0',
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reviews_app_id_foreign` (`app_id`),
  CONSTRAINT `reviews_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reviews`
--

LOCK TABLES `reviews` WRITE;
/*!40000 ALTER TABLE `reviews` DISABLE KEYS */;
INSERT INTO `reviews` VALUES (17,2,'Abhay',5,'good application','2025-04-02 08:02:54','2025-04-02 08:02:54'),(18,2,'Abhay',3,'hey hey','2025-04-07 07:32:30','2025-04-07 07:32:30');
/*!40000 ALTER TABLE `reviews` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `site_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tagline` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wp_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `site_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `users_can_register` tinyint(1) NOT NULL DEFAULT '0',
  `default_role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'subscriber',
  `timezone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'UTC',
  `date_format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'F j, Y',
  `time_format` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'g:i a',
  `start_of_week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top_games`
--

DROP TABLE IF EXISTS `top_games`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `top_games` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` int NOT NULL,
  `platform` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `discount` decimal(5,2) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `top_games_position_unique` (`position`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top_games`
--

LOCK TABLES `top_games` WRITE;
/*!40000 ALTER TABLE `top_games` DISABLE KEYS */;
INSERT INTO `top_games` VALUES (1,NULL,'topgames/topgame_game-1-1743857966.png','https://solana.com/',1,NULL,NULL,NULL,0,'2025-04-05 07:29:26','2025-04-05 07:29:26'),(2,NULL,'topgames/topgame_game-2-1743857966.png','https://solana.com/',2,NULL,NULL,NULL,0,'2025-04-05 07:29:26','2025-04-05 07:29:26'),(3,NULL,'topgames/topgame_game-3-1743857966.png','https://solana.com/',3,NULL,NULL,NULL,0,'2025-04-05 07:29:26','2025-04-05 07:29:26');
/*!40000 ALTER TABLE `top_games` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `top_utilities`
--

DROP TABLE IF EXISTS `top_utilities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `top_utilities` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `app_id` bigint unsigned NOT NULL,
  `position` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `top_utilities_position_unique` (`position`),
  KEY `top_utilities_app_id_foreign` (`app_id`),
  KEY `top_utilities_position_index` (`position`),
  CONSTRAINT `top_utilities_app_id_foreign` FOREIGN KEY (`app_id`) REFERENCES `apps` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `top_utilities`
--

LOCK TABLES `top_utilities` WRITE;
/*!40000 ALTER TABLE `top_utilities` DISABLE KEYS */;
INSERT INTO `top_utilities` VALUES (1,1,1,'2025-04-05 11:52:04','2025-04-05 11:52:04'),(2,2,2,'2025-04-05 11:52:04','2025-04-05 11:52:04'),(3,3,3,'2025-04-05 11:52:04','2025-04-05 11:52:04'),(4,4,4,'2025-04-05 11:52:04','2025-04-05 11:52:04'),(5,4,5,'2025-04-05 11:52:04','2025-04-05 11:52:04');
/*!40000 ALTER TABLE `top_utilities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES ('89987fc2-57c8-4e4e-aab8-82962a24f58e','Madhu','madhu@gmail.com',NULL,'$2y$12$t8J5GdvAAs5fKrH99/yei./.XLNXVAyjj0.H79tz.OuPY4JNc7qu2','profile_images/LfHI87a6v2HDCfdxkpdebUQAY0eN7k1poaVRiSOc.jpg','7011215475','NeW york 11',NULL,'2025-03-25 12:41:25','2025-03-25 13:29:45',0),('b3acdb2c-8bfb-41e0-9f5e-34ce12d52020','Abhay','abhaydelkumar@gmail.com',NULL,'$2y$12$BtaKE1aromoF5nKJIPqHVuue6bGlXhGXBMHMfvfkiUHRwqkydrEoe','profile_images/d0Tyr3HqNemGVpjot6rlFDUOIp8mmdGxCoBb0Tad.jpg',NULL,NULL,NULL,'2025-03-25 12:40:15','2025-03-25 12:55:09',1);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-04-09 18:33:18
