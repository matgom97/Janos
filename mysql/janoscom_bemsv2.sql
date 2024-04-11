-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: janoscom_bemsv2
-- ------------------------------------------------------
-- Server version	8.0.36-cll-lve

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
-- Current Database: `janoscom_bemsv2`
--


--
-- Table structure for table `dispositivos`
--

DROP TABLE IF EXISTS `dispositivos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dispositivos` (
  `dispositivo_id` bigint NOT NULL AUTO_INCREMENT,
  `dispositivo_habitacion_id` bigint NOT NULL,
  `dispositivo_nombre` varchar(155) COLLATE utf8mb4_general_ci NOT NULL,
  `dispositivo_descripcion` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `dispositivo_estado` tinyint(1) NOT NULL,
  `dispositivo_valor` int DEFAULT NULL,
  `dispositivo_lectura` int DEFAULT NULL,
  `modified_by` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`dispositivo_id`),
  KEY `dispositivo_habitacion` (`dispositivo_habitacion_id`),
  CONSTRAINT `dispositivo_habitacion` FOREIGN KEY (`dispositivo_habitacion_id`) REFERENCES `habitaciones` (`habitacion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dispositivos`
--

LOCK TABLES `dispositivos` WRITE;
/*!40000 ALTER TABLE `dispositivos` DISABLE KEYS */;
INSERT INTO `dispositivos` (`dispositivo_id`, `dispositivo_habitacion_id`, `dispositivo_nombre`, `dispositivo_descripcion`, `dispositivo_estado`, `dispositivo_valor`, `dispositivo_lectura`, `modified_by`, `created_at`, `updated_at`) VALUES (1,6,'Device 001','121',0,NULL,NULL,22,'2023-11-15 21:17:52','2023-11-15 21:17:52'),(2,6,'Device 002','qwert',0,NULL,NULL,22,'2023-11-15 23:03:44','2023-11-15 23:03:44');
/*!40000 ALTER TABLE `dispositivos` ENABLE KEYS */;
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
-- Table structure for table `habitaciones`
--

DROP TABLE IF EXISTS `habitaciones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `habitaciones` (
  `habitacion_id` bigint NOT NULL AUTO_INCREMENT,
  `habitacion_piso_id` bigint NOT NULL,
  `habitacion_nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `habitacion_descripcion` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `habitacion_ocupacion` int NOT NULL,
  `habitacion_capacidad` int DEFAULT NULL,
  `habitacion_estado` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` bigint DEFAULT NULL,
  PRIMARY KEY (`habitacion_id`),
  KEY `habitacion_piso` (`habitacion_piso_id`),
  CONSTRAINT `habitacion_piso` FOREIGN KEY (`habitacion_piso_id`) REFERENCES `pisos` (`piso_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `habitaciones`
--

LOCK TABLES `habitaciones` WRITE;
/*!40000 ALTER TABLE `habitaciones` DISABLE KEYS */;
INSERT INTO `habitaciones` (`habitacion_id`, `habitacion_piso_id`, `habitacion_nombre`, `habitacion_descripcion`, `habitacion_ocupacion`, `habitacion_capacidad`, `habitacion_estado`, `created_at`, `updated_at`, `modified_by`) VALUES (6,2,'Habitacion 203','Habitacion 203 del piso 2 del hotel san marcos',1,2,1,'2023-10-28 02:03:00','2023-10-28 02:03:00',22),(7,2,'habitacion #202','prueba',1,2,1,'2023-11-15 23:03:14','2023-11-15 23:03:14',22);
/*!40000 ALTER TABLE `habitaciones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `hoteles`
--

DROP TABLE IF EXISTS `hoteles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `hoteles` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `hotel_imagen` varchar(5000) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hotel_nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hotel_ciudad` varchar(155) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `hotel_direccion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `hotel_telefono` bigint NOT NULL,
  `hotel_descripcion` varchar(1000) COLLATE utf8mb4_general_ci NOT NULL,
  `hotel_estado` tinyint(1) NOT NULL,
  `hotel_categoria` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` bigint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `hoteles`
--

LOCK TABLES `hoteles` WRITE;
/*!40000 ALTER TABLE `hoteles` DISABLE KEYS */;
INSERT INTO `hoteles` (`id`, `hotel_imagen`, `hotel_nombre`, `hotel_ciudad`, `hotel_direccion`, `hotel_telefono`, `hotel_descripcion`, `hotel_estado`, `hotel_categoria`, `created_at`, `updated_at`, `modified_by`) VALUES (11,'1695519733.jpg','Hotel San Marcos','Santa Marta','Calle 29k # 31b-103 Portales de la avenida',30192827,'Hotel san marcos, santa marta',1,4,'2023-09-24 06:42:13','2023-09-24 06:42:13',24),(12,'1695910617.png','Hotel el prado','Barranquilla','72 #54',1231313,'hotel el prado',1,4,'2023-09-28 19:16:57','2023-09-28 19:16:57',22);
/*!40000 ALTER TABLE `hoteles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu` (
  `menu_id` int NOT NULL AUTO_INCREMENT,
  `menu_nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `menu_nivel` int NOT NULL,
  `menu_url` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `menu_padre_id` bigint NOT NULL,
  `menu_orden` int DEFAULT NULL,
  `roles_permisibles` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`menu_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_reset_tokens_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1);
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pisos`
--

DROP TABLE IF EXISTS `pisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pisos` (
  `piso_id` bigint NOT NULL AUTO_INCREMENT,
  `piso_nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `piso_descripcion` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `piso_estado` tinyint(1) NOT NULL,
  `piso_hotel_id` bigint NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` bigint DEFAULT NULL,
  PRIMARY KEY (`piso_id`),
  KEY `hotel_piso` (`piso_hotel_id`),
  CONSTRAINT `hotel_piso` FOREIGN KEY (`piso_hotel_id`) REFERENCES `hoteles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pisos`
--

LOCK TABLES `pisos` WRITE;
/*!40000 ALTER TABLE `pisos` DISABLE KEYS */;
INSERT INTO `pisos` (`piso_id`, `piso_nombre`, `piso_descripcion`, `piso_estado`, `piso_hotel_id`, `created_at`, `updated_at`, `modified_by`) VALUES (1,'Piso #1','Recepcion del hotel san marcos.',1,11,'2023-09-24 04:44:18','2023-09-24 01:45:13',22),(2,'Piso #2','Piso principal del hotel san marcos',1,11,'2023-09-24 04:47:55','2023-09-24 01:45:16',22);
/*!40000 ALTER TABLE `pisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `role_id` bigint NOT NULL AUTO_INCREMENT,
  `role_nombre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `modified_by` bigint DEFAULT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` (`role_id`, `role_nombre`, `created_at`, `updated_at`, `modified_by`) VALUES (1,'Administrador','2023-09-13 19:09:49','0000-00-00 00:00:00',NULL),(2,'Gerente operativo','2023-09-13 19:09:49','0000-00-00 00:00:00',NULL),(3,'Ejecutivo','2023-09-13 19:09:49','0000-00-00 00:00:00',NULL),(4,'Auxiliar','2023-09-13 19:09:49','2023-09-13 19:11:18',NULL),(5,'Cliente','2023-09-13 19:09:58','2023-09-13 19:09:58',NULL);
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `states` (
  `state_id` bigint NOT NULL AUTO_INCREMENT,
  `entity_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `state` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `attributes` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `event_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_changed` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_changed_ts` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_updated` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_updated_ts` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `old_state_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `attributes_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `context_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `context_user_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `context_parent_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `origin_idx` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `context_id_bin` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `context_user_id_bin` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `context_parent_id_bin` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `metadata_id` varchar(500) COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=28118 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` (`state_id`, `entity_id`, `state`, `attributes`, `event_id`, `last_changed`, `last_changed_ts`, `last_updated`, `last_updated_ts`, `old_state_id`, `attributes_id`, `context_id`, `context_user_id`, `context_parent_id`, `origin_idx`, `context_id_bin`, `context_user_id_bin`, `context_parent_id_bin`, `metadata_id`) VALUES (27813,'','129.77','','','','','','1697534133.71858','','85','','','','0','b\'\\x01\\x8b<\\xebE\\xd6\\xcf\\xd0-LDv\\xd8C\\xb0.\'','','','59'),(27814,'','129.77','','','','','','1697534133.795386','','89','','','','0','b\'\\x01\\x8b<\\xebF#\\x02\\xef\\xc8To\\xd5)<\\x00n\'','','','63'),(27815,'','0.2','','','','','','1697534133.894439','','86','','','','0','b\'\\x01\\x8b<\\xebF\\x86\\xbb\\xcbM\\x9c\\x9c\\x12=\\x1c:\\x9e\'','','','60'),(27816,'','1.94','','','','','','1697534133.99621','','90','','','','0','b\'\\x01\\x8b<\\xebF\\xecy\\xd7\\xe5O\\x98H\\xb9\\xcb\\xb7S\'','','','64'),(27817,'','6.0','','','','','','1697534134.09501','','84','','','','0','b\'\\x01\\x8b<\\xebGO\\xc8\\xc9Fb\\n\\x17T\\xdcu<\'','','','58'),(27818,'','176.53','','','','','','1697534134.195728','','88','','','','0','b\'\\x01\\x8b<\\xebG\\xb3\\x1dYT2\\xd5\\x0f\\xc2\\x1a\\x87\\xda\'','','','62'),(27819,'','75.8','','','','','','1697534134.299808','','83','','','','0','b\'\\x01\\x8b<\\xebH\\x1b=^\\x15S\\xda#\\\\\\xca$\\xf9\'','','','57'),(27820,'','515.27','','','','','','1697534134.397727','','87','','','','0','b\'\\x01\\x8b<\\xebH}\\x05faU\\xc6\\x1b;\\x9eC|\'','','','61'),(27821,'','129.8','','','','','','1697534138.715361','','81','','','','0','b\'\\x01\\x8b<\\xebY[>`\\xdc\\x0c\\xaa\\xb6jJ\\x00\\x1c\'','','','55'),(27822,'','2.13','','','','','','1697534138.791804','','82','','','','0','b\'\\x01\\x8b<\\xebY\\xa7r\\xe5\\xeaf\\xe5m\\xcf7\\xcb\\xbc\'','','','56'),(27823,'','182.27','','','','','','1697534138.894644','','80','','','','0','b\'\\x01\\x8b<\\xebZ\\x0e<W_nra\\xaeW1&\'','','','54'),(27824,'','591.08','','','','','','1697534138.994291','','79','','','','0','b\'\\x01\\x8b<\\xebZr @@&\\xfc,[\\x05y<\'','','','53'),(27825,'','131.03','','','','','','1697534140.656293','','81','','','','0','b\'\\x01\\x8b<\\xeb`\\xf0\\xb6\\xd7.\\x88X:[\\xdd\\r\\x02\'','','','91'),(27826,'','0.0','','','','','','1697534140.936108','','82','','','','0','b\'\\x01\\x8b<\\xebb\\x08\\xe8\\xe4n\\xd3~\\x0f\\x1f\\xd6\\xa5,\'','','','92'),(27827,'','0.0','','','','','','1697534141.237136','','80','','','','0','b\'\\x01\\x8b<\\xebc5\\xbb\\xa2\\x06\\x94\\xe9yv\\xbe\\x8a\\xc0\'','','','90'),(27828,'','2.55','','','','','','1697534141.537124','','79','','','','0','b\"\\x01\\x8b<\\xebda\\xaa\'\\xaeU\\x87|JL\\x0e0\"','','','89'),(27829,'','131.07','','','','','','1697534141.847331','','85','','','','0','b\'\\x01\\x8b<\\xebe\\x97\\xc4/\\x8e\\xb0P\\x1c\\x04c\\xd2\\xbc\'','','','95'),(27830,'','131.07','','','','','','1697534142.146376','','89','','','','0','b\'\\x01\\x8b<\\xebf\\xc2\\xd4\\xde\\xf3^\\xe6?-^\\xa9E\'','','','99'),(27831,'','0.0','','','','','','1697534142.448857','','86','','','','0','b\'\\x01\\x8b<\\xebg\\xf0\\xb9\\xf7\\x96\\x80:H\\xb3\\xbf\\xb0B\'','','','96'),(27832,'','0.0','','','','','','1697534142.749699','','90','','','','0','b\'\\x01\\x8b<\\xebi\\x1d0\\xd7\\x0ek\\x01\"pU?\\x89\'','','','100'),(27833,'','0.0','','','','','','1697534143.049638','','84','','','','0','b\'\\x01\\x8b<\\xebjI\\x84\\x80\\x12c2z\\xa8\\xf4\\xfc\\x81\'','','','94'),(27834,'','0.0','','','','','','1697534143.350714','','88','','','','0','b\'\\x01\\x8b<\\xebkv$=\\xa1\\xaf\\xca\\x98T\\xe6\\tR\'','','','98'),(27835,'','1.25','','','','','','1697534143.666541','','83','','','','0','b\"\\x01\\x8b<\\xebl\\xb2>\\x84\\xd45\\xa0\\xa7\\xb5\'\\x8b2\"','','','93'),(27836,'','1.29','','','','','','1697534143.949151','','87','','','','0','b\'\\x01\\x8b<\\xebm\\xcd\\x8eav\\x8a\\xado\\xf9\\x83\\x95\\xd3\'','','','97'),(27837,'','130.17','','','','','','1697534433.723833','27813','85','','','','0','b\'\\x01\\x8b<\\xef\\xd9\\xbbPG/p+\\\\\\xc4\\x9d`\\xfa\'','','','59'),(27838,'','130.17','','','','','','1697534433.801883','27814','89','','','','0','b\'\\x01\\x8b<\\xef\\xda\\t\\xc1\\xc3\\xca\\xf7\\xeft\\xdc\\x19\\xe6\\xe9\'','','','63'),(27839,'','0.21','','','','','','1697534433.901217','27815','86','','','','0','b\'\\x01\\x8b<\\xef\\xdamh\\x1dnu\\x0ea\\x97\\xdd8\\xb8\'','','','60'),(27840,'','1.86','','','','','','1697534434.001122','27816','90','','','','0','b\'\\x01\\x8b<\\xef\\xda\\xd1SKb\\xebY\\xaa\\x89$$p\'','','','64'),(27841,'','8.0','','','','','','1697534434.101593','27817','84','','','','0','b\'\\x01\\x8b<\\xef\\xdb5\\xd9N\\x0c\\x8d\\xf8U\\xb6i\\xed\\xd8\'','','','58'),(27842,'','171.17','','','','','','1697534434.201404','27818','88','','','','0','b\'\\x01\\x8b<\\xef\\xdb\\x99\\xc8\\xd5wo1\\x05\\x80\\xfb\\x8e\\xdc\'','','','62'),(27843,'','75.81','','','','','','1697534434.304414','27819','83','','','','0','b\'\\x01\\x8b<\\xef\\xdc\\x00@\\xb7ExrE\\xb5B\\x9a=\'','','','57'),(27844,'','515.29','','','','','','1697534434.401273','27820','87','','','','0','b\'\\x01\\x8b<\\xef\\xdcaA\\x99\\xa0\\xcaA\\x89\\x90I\\x95\\xcf\'','','','61'),(27845,'','130.26','','','','','','1697534438.723852','27821','81','','','','0','b\'\\x01\\x8b<\\xef\\xedC\\xb40C\\xb6\\xef-bE\\xb7U\'','','','55'),(27846,'','2.07','','','','','','1697534438.80085','27822','82','','','','0','b\'\\x01\\x8b<\\xef\\xed\\x90\\xbc\\xfe\\xc2\\x87l\\x1a\\xb8\\\'\"\\x97\'','','','56'),(27847,'','178.54','','','','','','1697534438.899086','27823','80','','','','0','b\'\\x01\\x8b<\\xef\\xed\\xf3\\xdc\\xdbr\\x08\\xaa\\x96\\x95R\\xaaA\'','','','54'),(27848,'','591.09','','','','','','1697534439.000288','27824','79','','','','0','b\'\\x01\\x8b<\\xef\\xeeXJ`RZ\\xaa\\x03\\x9acTs\'','','','53'),(27849,'','131.1','','','','','','1697534440.664404','27825','81','','','','0','b\'\\x01\\x8b<\\xef\\xf4\\xd8\\x9br\\xc9\\x0cjZ\\x00\\xe6\\x97\\xbc\'','','','91'),(27850,'','0.0','','','','','','1697534440.949823','27826','82','','','','0','b\'\\x01\\x8b<\\xef\\xf5\\xf5\\xa8\\xaa\\x80\\xde\\x92\\xa2\\x14\\xfe\\xed\\xee\'','','','92'),(27851,'','0.0','','','','','','1697534441.246673','27827','80','','','','0','b\'\\x01\\x8b<\\xef\\xf7\\x1e\\x90\\xd9g\\r \\x8b\\xf5\\x16\\x82\\x1d\'','','','90'),(27852,'','2.55','','','','','','1697534441.544162','27828','79','','','','0','b\'\\x01\\x8b<\\xef\\xf8H\\x8f\\xe4&\\xc0\\x91\\xe7b\\xa7\\x9e\\xeb\'','','','89'),(27853,'','131.08','','','','','','1697534441.856612','27829','85','','','','0','b\'\\x01\\x8b<\\xef\\xf9\\x80I\\x92\\xe9\\xf0\\xfc^\\x81v\\x18\\xcd\'','','','95'),(27854,'','131.08','','','','','','1697534442.158305','27830','89','','','','0','b\'\\x01\\x8b<\\xef\\xfa\\xaeU\\x95\\xc8A\\xf2\\x8e\\x932\\x99\\xe9\'','','','99'),(27855,'','0.0','','','','','','1697534442.456599','27831','86','','','','0','b\'\\x01\\x8b<\\xef\\xfb\\xd8\\xce\\x87\\x13Z\\xbf\\xb9V\\xb4K\\xb1\'','','','96'),(27856,'','0.0','','','','','','1697534442.755255','27832','90','','','','0','b\'\\x01\\x8b<\\xef\\xfd\\x03#\\x8d\\x91\\xcfx\\x14\\x83\\x8cR\\xb3\'','','','100'),(27857,'','0.0','','','','','','1697534443.057575','27833','84','','','','0','b\'\\x01\\x8b<\\xef\\xfe1O\\xf9]\\x98\\xd3\\xe6L(\\xd4\\xb2\'','','','94'),(27858,'','0.0','','','','','','1697534443.356789','27834','88','','','','0','b\'\\x01\\x8b<\\xef\\xff\\\\\\x99\\x84\\xd8]\\xb2W\\x03\\xe49S\'','','','98'),(27859,'','1.25','','','','','','1697534443.796319','27835','83','','','','0','b\'\\x01\\x8b<\\xf0\\x01\\x14=\\n\\xcb\\x95\\xa1\\x93z\\xc88\\x87\'','','','93'),(27860,'','1.29','','','','','','1697534444.057204','27836','87','','','','0','b\'\\x01\\x8b<\\xf0\\x02\\x19`\\xaf\\xb5\\x90S\\xb2\\xce\\xbed\\x9b\'','','','97'),(27861,'','130.38','','','','','','1697534733.729814','27837','85','','','','0','b\'\\x01\\x8b<\\xf4m\\xa1\\xa0\\xa7\\xfd\\xea\\xd2\\x95H\\xa5S~\'','','','59'),(27862,'','130.38','','','','','','1697534733.808162','27838','89','','','','0','b\'\\x01\\x8b<\\xf4m\\xf0~\\n\\x01Y\\xb8\\xca\\x0f\\\\}\\x89\'','','','63'),(27863,'','0.22','','','','','','1697534733.906922','27839','86','','','','0','b\'\\x01\\x8b<\\xf4nR\\x944\\xcf\\xc7f*\\xf6\\x8b\\xa2\\xb3\'','','','60'),(27864,'','1.86','','','','','','1697534734.007924','27840','90','','','','0','b\'\\x01\\x8b<\\xf4n\\xb7\\xe6S:\\x0e\\xb0\\xc7}\"\\xde\\xcd\'','','','64'),(27865,'','8.75','','','','','','1697534734.108836','27841','84','','','','0','b\'\\x01\\x8b<\\xf4o\\x1c\\xa4\\xbbuq\\xf3\\xf9\\x9c\\xb7D*\'','','','58'),(27866,'','170.84','','','','','','1697534734.207181','27842','88','','','','0','b\'\\x01\\x8b<\\xf4o\\x7f\\xbbm\\xa4v\\xb5\\xc5\\xc6>6\\x82\'','','','62'),(27867,'','75.81','','','','','','1697534734.308266','27843','83','','','','0','b\'\\x01\\x8b<\\xf4o\\xe4\\xbd\\x08\\x14Jj\\xacM~\\xec\\xdf\'','','','57'),(27868,'','515.3','','','','','','1697534734.407833','27844','87','','','','0','b\'\\x01\\x8b<\\xf4pG\\x91iX\\xe9\\x7f\\x87\"f>\\xb7\'','','','61'),(27869,'','130.34','','','','','','1697534738.72904','27845','81','','','','0','b\'\\x01\\x8b<\\xf4\\x81)\\x86Q\\xe7\\x8b\\xf17\\xaf>~\\xbb\'','','','55'),(27870,'','2.08','','','','','','1697534738.806189','27846','82','','','','0','b\'\\x01\\x8b<\\xf4\\x81v\\x9a\\x07*\\xd2L\\x91\\xd9F\\x05\\xcc\'','','','56'),(27871,'','179.64','','','','','','1697534738.905279','27847','80','','','','0','b\'\\x01\\x8b<\\xf4\\x81\\xd9\\xa3w\\x9b4\\x9c\\xe8L<\\xcb>\'','','','54'),(27872,'','591.11','','','','','','1697534739.005067','27848','79','','','','0','b\'\\x01\\x8b<\\xf4\\x82=\\xed\\x08/\\xbdt>\\xcfA\\x84\\xac\'','','','53'),(27873,'','131.15','','','','','','1697534740.668365','27849','81','','','','0','b\'\\x01\\x8b<\\xf4\\x88\\xbc4\\x81\\xc2\\xf3\\xa4r\\xd2i_4\'','','','91'),(27874,'','0.0','','','','','','1697534740.965729','27850','82','','','','0','b\'\\x01\\x8b<\\xf4\\x89\\xe5\\xd8\\xa3f3\\x94\\xba\\xf2A\\xe8f\'','','','92'),(27875,'','0.0','','','','','','1697534741.2494','27851','80','','','','0','b\'\\x01\\x8b<\\xf4\\x8b\\x01\\x90C\\xd5\\x1f4\\xdftd\\x03\\x94\'','','','90'),(27876,'','2.55','','','','','','1697534741.549743','27852','79','','','','0','b\'\\x01\\x8b<\\xf4\\x8c-\\xfe2d\\xb0\\xe3I\\xa9\\x8d<X\'','','','89'),(27877,'','131.1','','','','','','1697534741.8643','27853','85','','','','0','b\'\\x01\\x8b<\\xf4\\x8dh\\x14\\xca\\x91Z\\x9c\\xe7t\\xb9r\\xd5\'','','','95'),(27878,'','131.1','','','','','','1697534742.16164','27854','89','','','','0','b\'\\x01\\x8b<\\xf4\\x8e\\x91/O\\xee\\x9b\\x10#J\\xfa%\\x19\'','','','99'),(27879,'','0.0','','','','','','1697534743.561266','27855','86','','','','0','b\'\\x01\\x8b<\\xf4\\x94\\t*\\xe7\\xbaQ\\xcb*Q\\x82;m\'','','','96'),(27880,'','0.0','','','','','','1697534743.861523','27856','90','','','','0','b\'\\x01\\x8b<\\xf4\\x955\\xdb\\x8fU\\xa9\\xae>\\xaeo1\\xe4\'','','','100'),(27881,'','0.0','','','','','','1697534744.16307','27857','84','','','','0','b\'\\x01\\x8b<\\xf4\\x96c\\x9c\\xa7Q\\xb7\\xdfH\\xa8\\xa9\\xb8!\'','','','94'),(27882,'','0.0','','','','','','1697534744.461419','27858','88','','','','0','b\'\\x01\\x8b<\\xf4\\x97\\x8d\\xa3\\xd4\\xadKZ\\x0e\\xc8:?\\xaa\'','','','98'),(27883,'','1.25','','','','','','1697534744.761646','27859','83','','','','0','b\'\\x01\\x8b<\\xf4\\x98\\xb9\\x02\\xe8\\xa3iU\\x87\\x1e>\\xbd)\'','','','93'),(27884,'','1.29','','','','','','1697534745.062001','27860','87','','','','0','b\'\\x01\\x8b<\\xf4\\x99\\xe6\\xb3\\x8f\\xdcK6aI\\xa3\\x13\\xfb\'','','','97'),(27885,'','130.52','','','','','','1697535033.736326','27861','85','','','','0','b\'\\x01\\x8b<\\xf9\\x01\\x88,\\xa2\\xaf\"D\\x01\\x8a\\x92\\xc8\\x9d\'','','','59'),(27886,'','130.52','','','','','','1697535033.812726','27862','89','','','','0','b\'\\x01\\x8b<\\xf9\\x01\\xd4\\x9e\\x9b\\xe7\\x93B\\xc9c\\xd0 \\xa5\'','','','63'),(27887,'','0.21','','','','','','1697535033.912767','27863','86','','','','0','b\'\\x01\\x8b<\\xf9\\x028x|W:Y\\x8eJ\\xa6\\x13D\'','','','60'),(27888,'','1.86','','','','','','1697535034.012599','27864','90','','','','0','b\'\\x01\\x8b<\\xf9\\x02\\x9c\\x94X\\x0b\\xac\\xf0\\xb7R$\\xbc3\'','','','64'),(27889,'','8.05','','','','','','1697535034.111679','27865','84','','','','0','b\'\\x01\\x8b<\\xf9\\x02\\xff\\xf6\\x9e\\x0eU\\x8c\\x88C\\xa3\\xbf8\'','','','58'),(27890,'','172.1','','','','','','1697535034.212397','27866','88','','','','0','b\'\\x01\\x8b<\\xf9\\x03dV85\\xf9\\x9b\\xcf\\x11\\xee\\xbe~\'','','','62'),(27891,'','75.81','','','','','','1697535034.314715','27867','83','','','','0','b\'\\x01\\x8b<\\xf9\\x03\\xca\\x8e\\xaf[\\xc7\\xdd\\x19q\\x8f\\x89\\\\\'','','','57'),(27892,'','515.32','','','','','','1697535034.413354','27868','87','','','','0','b\'\\x01\\x8b<\\xf9\\x04-\\xeb?q\\n\\xc1\\xbeHn\\x80M\'','','','61'),(27893,'','130.55','','','','','','1697535038.731111','27869','81','','','','0','b\'\\x01\\x8b<\\xf9\\x15\\x0b\\xd2\\xc5\\xaf\\xdb\\x83\\xa1\\xe4\\xc2\\x08!\'','','','55'),(27894,'','2.08','','','','','','1697535038.809143','27870','82','','','','0','b\'\\x01\\x8b<\\xf9\\x15Y\\x0cZx>\\xba\\x86\\x07a\\x08Q\'','','','56'),(27895,'','180.4','','','','','','1697535038.910071','27871','80','','','','0','b\'\\x01\\x8b<\\xf9\\x15\\xbe\\xdf\\x92\\xa9P\\xc6\\r\\xdaK_!\'','','','54'),(27896,'','591.12','','','','','','1697535039.009809','27872','79','','','','0','b\'\\x01\\x8b<\\xf9\\x16!}\\x0f\\x88\\xc3\\xb4E\\xcd\\xb8-\\xbd\'','','','53'),(27897,'','131.35','','','','','','1697535040.674488','27873','81','','','','0','b\'\\x01\\x8b<\\xf9\\x1c\\xa2=\\x8d~\\x1c\\xdfY\\x08\\xa0\\xc9\\x97\'','','','91'),(27898,'','0.0','','','','','','1697535040.956991','27874','82','','','','0','b\'\\x01\\x8b<\\xf9\\x1d\\xbc\\xfcr\\xa8\\x8fn^\\xec\\x04\\xbcj\'','','','92'),(27899,'','0.0','','','','','','1697535041.255161','27875','80','','','','0','b\'\\x01\\x8b<\\xf9\\x1e\\xe7\\xc2\\xfc\\xf5m9\\x91\\xb8%\\xbek\'','','','90'),(27900,'','2.55','','','','','','1697535041.555233','27876','79','','','','0','b\'\\x01\\x8b<\\xf9 \\x13\\xf1\\xba\\x99\\xeb|\\x93E\\xd7\\x9e&\'','','','89'),(27901,'','131.33','','','','','','1697535041.865771','27877','85','','','','0','b\'\\x01\\x8b<\\xf9!I\\x1ej\\xf0\\x02\\xa5\\xda\\x1daL\\x94\'','','','95'),(27902,'','131.33','','','','','','1697535042.166462','27878','89','','','','0','b\'\\x01\\x8b<\\xf9\"vu\\x1998_E\\x0b\\x06\\xc7\\xcd\'','','','99'),(27903,'','0.0','','','','','','1697535042.467394','27879','86','','','','0','b\'\\x01\\x8b<\\xf9#\\xa3a8\\x11\\x8bR\\xf3MDso\'','','','96'),(27904,'','0.0','','','','','','1697535042.768624','27880','90','','','','0','b\'\\x01\\x8b<\\xf9$\\xd0\\xd9\\xfd<\\xbe}\\x19\\x03\\xb0\\xefd\'','','','100'),(27905,'','0.0','','','','','','1697535043.066939','27881','84','','','','0','b\'\\x01\\x8b<\\xf9%\\xfa>\\x02dx\\x81\\xda\\xc9\\x8e\\xbax\'','','','94'),(27906,'','0.0','','','','','','1697535043.367476','27882','88','','','','0','b\"\\x01\\x8b<\\xf9\'\'\\xec(\\xb7\\xbcU\\x0f\\xf8\\xad~\\xe0\"','','','98'),(27907,'','1.25','','','','','','1697535043.686635','27883','83','','','','0','b\'\\x01\\x8b<\\xf9(f%\\xe8\\xd2\\xe3\\x8ft\\x9f\\xb8e\\xb7\'','','','93'),(27908,'','1.29','','','','','','1697535043.966658','27884','87','','','','0','b\'\\x01\\x8b<\\xf9)~\\xaa\\xef\\x89\\xcb\\xbc?\\xdb\\xb0(Y\'','','','97'),(27909,'','130.49','','','','','','1697535333.736761','27885','85','','','','0','b\'\\x01\\x8b<\\xfd\\x95h\\xa0WE\\xb3\\xf2WL3\\x11\\xa8\'','','','59'),(27910,'','130.49','','','','','','1697535333.81452','27886','89','','','','0','b\'\\x01\\x8b<\\xfd\\x95\\xb6\\x1cW\\xd5\\xc5[\\x08\\xd9\\xd0\\xbb\\x0f\'','','','63'),(27911,'','0.22','','','','','','1697535333.914356','27887','86','','','','0','b\'\\x01\\x8b<\\xfd\\x96\\x1a\\x0e\\x94\\xb6[9\\xd8hDw\\xd3\'','','','60'),(27912,'','1.86','','','','','','1697535334.013484','27888','90','','','','0','b\'\\x01\\x8b<\\xfd\\x96}H\\x91\\xad\\xa4\\x9e\\x05\\xda\\x18U\\x01\'','','','64'),(27913,'','7.63','','','','','','1697535334.114629','27889','84','','','','0','b\'\\x01\\x8b<\\xfd\\x96\\xe2lL\\xa1\\x074\\xb3\\xa3\\xcbp\\xd8\'','','','58'),(27914,'','172.09','','','','','','1697535334.214615','27890','88','','','','0','b\'\\x01\\x8b<\\xfd\\x97F\\xe1\\x04g&\\xb0lM\\xbf\\xd2K\'','','','62'),(27915,'','75.81','','','','','','1697535334.316825','27891','83','','','','0','b\'\\x01\\x8b<\\xfd\\x97\\xac\\xc3T\\xee\\xbdC!s\\xb5\\xa6\\x00\'','','','57'),(27916,'','515.33','','','','','','1697535334.414039','27892','87','','','','0','b\'\\x01\\x8b<\\xfd\\x98\\x0e\\x19\\xa8\\xed&\\xec\\x15@Tb\\x90\'','','','61'),(27917,'','130.47','','','','','','1697535338.735429','27893','81','','','','0','b\'\\x01\\x8b<\\xfd\\xa8\\xef\\xa9\\xbf\\xa0\\xd1\\xedYkT\\x01\\x9c\'','','','55'),(27918,'','2.08','','','','','','1697535338.812435','27894','82','','','','0','b\'\\x01\\x8b<\\xfd\\xa9<P\\x18\\xc1\\x9b\\x14\\x1f\\xf6\\xc3\\x1e\\xf2\'','','','56'),(27919,'','179.98','','','','','','1697535338.912877','27895','80','','','','0','b\'\\x01\\x8b<\\xfd\\xa9\\xa0\\x1b\\xca4\\xea}\\x8b\\xcd#\\x9at\'','','','54'),(27920,'','591.14','','','','','','1697535339.012693','27896','79','','','','0','b\'\\x01\\x8b<\\xfd\\xaa\\x04\\xc0*\\xbf\\xf9\\xb3K\\xae\\xcaB\\xd8\'','','','53'),(27921,'','131.11','','','','','','1697535340.681572','27897','81','','','','0','b\'\\x01\\x8b<\\xfd\\xb0\\x89\\xa0\\xf2\\xe1\\xe5\\xb8\\x98\\xbd<J\\xfb\'','','','91'),(27922,'','0.0','','','','','','1697535340.958402','27898','82','','','','0','b\"\\x01\\x8b<\\xfd\\xb1\\x9e\\xb05S6\'q\\xd4\\xb3C\\xd7\"','','','92'),(27923,'','0.0','','','','','','1697535341.259112','27899','80','','','','0','b\'\\x01\\x8b<\\xfd\\xb2\\xcbb\\xd8uy\\x98\\xec\\xa3G\\x84\\xd2\'','','','90'),(27924,'','2.55','','','','','','1697535341.560596','27900','79','','','','0','b\'\\x01\\x8b<\\xfd\\xb3\\xf8K\\xdb\\xbd\\x01A\\xc7\\xd0\\x8a\\xf7\\xf4\'','','','89'),(27925,'','131.1','','','','','','1697535341.872897','27901','85','','','','0','b\'\\x01\\x8b<\\xfd\\xb50\\xf2\\xa4\\\\\\x966\\x0b\\xcb\\xbe\\xc4\\x01\'','','','95'),(27926,'','131.1','','','','','','1697535342.170664','27902','89','','','','0','b\'\\x01\\x8b<\\xfd\\xb6Z\\x83\\xc3R\\x98,\\x8c\\xa1\\xef\\\\[\'','','','99'),(27927,'','0.0','','','','','','1697535342.472143','27903','86','','','','0','b\'\\x01\\x8b<\\xfd\\xb7\\x88bI\\x12\\xce\\xf5t\\xed\\xba\\t\\xa5\'','','','96'),(27928,'','0.0','','','','','','1697535342.771738','27904','90','','','','0','b\'\\x01\\x8b<\\xfd\\xb8\\xb3\\xa3\\xcbv\\x15\\x1b\\xa6^%>\\xc2\'','','','100'),(27929,'','0.0','','','','','','1697535343.070847','27905','84','','','','0','b\'\\x01\\x8b<\\xfd\\xb9\\xde\\x1b\\xc8\"\\x92\\x17dD+\\xe0\"\'','','','94'),(27930,'','0.0','','','','','','1697535343.3697','27906','88','','','','0','b\'\\x01\\x8b<\\xfd\\xbb\\t\\x1d\\xd2\\x8b\\xc2\\xd1c%\\xc1n\\x84\'','','','98'),(27931,'','1.25','','','','','','1697535343.695442','27907','83','','','','0','b\'\\x01\\x8b<\\xfd\\xbcO(\\xa5)\\xca\\xc9\\x05\\xb5\"\\x0f\\xc5\'','','','93'),(27932,'','1.29','','','','','','1697535343.968663','27908','87','','','','0','b\'\\x01\\x8b<\\xfd\\xbd`r|\\xce\\xd4C\\xc4\\xe2\\x92\\x91T\'','','','97'),(27933,'','130.52','','','','','','1697535633.737898','27909','85','','','','0','b\'\\x01\\x8b=\\x02)I3\\xa5\\xda\\xe3td>\\xc6zA\'','','','59'),(27934,'','130.52','','','','','','1697535633.817361','27910','89','','','','0','b\'\\x01\\x8b=\\x02)\\x99]\\xd5$\\x05\\xb2O\\xbd\\xe8]\\x86\'','','','63'),(27935,'','0.2','','','','','','1697535633.914325','27911','86','','','','0','b\'\\x01\\x8b=\\x02)\\xfam5\\x0c\\x84\\xe3\\xbf\\xde!U1\'','','','60'),(27936,'','1.84','','','','','','1697535634.016965','27912','90','','','','0','b\"\\x01\\x8b=\\x02*`{\\xcd\\xf5DT(\'\\x8c\\x99[\"','','','64'),(27937,'','7.21','','','','','','1697535634.116616','27913','84','','','','0','b\'\\x01\\x8b=\\x02*\\xc4\\xbcxw\\x1a-RaF\\xa4x\'','','','58'),(27938,'','170.55','','','','','','1697535634.219886','27914','88','','','','0','b\'\\x01\\x8b=\\x02++\\x91g\\xd5\\x98y\\x9d\\nD\\x9d&\'','','','62'),(27939,'','75.81','','','','','','1697535634.318928','27915','83','','','','0','b\'\\x01\\x8b=\\x02+\\x8e\\xc2c\\x8bf\\x7f?\\xb2\\x81r\\xc7\'','','','57'),(27940,'','515.35','','','','','','1697535634.41519','27916','87','','','','0','b\'\\x01\\x8b=\\x02+\\xef\\xca\\x1b\\xb7\\xda\\xe55G\\xcb\\x9a(\'','','','61'),(27941,'','130.59','','','','','','1697535638.738537','27917','81','','','','0','b\'\\x01\\x8b=\\x02<\\xd2zo\\x037\\x83\\xa16\\xae\\xdb\\xb8\'','','','55'),(27942,'','2.04','','','','','','1697535638.814564','27918','82','','','','0','b\'\\x01\\x8b=\\x02=\\x1eW\\r,\\xcf\\xcb\\xcc\\n\\x11\\x9f[\'','','','56'),(27943,'','177.28','','','','','','1697535638.915163','27919','80','','','','0','b\'\\x01\\x8b=\\x02=\\x83\\x06{!\\xfe\\xbc6\\xb1\\xbaC\\xad\'','','','54'),(27944,'','591.15','','','','','','1697535639.014385','27920','79','','','','0','b\'\\x01\\x8b=\\x02=\\xe6\\xc1\\xd3\\xd1\\xcc\\x11\\x9b\\x7fI\\xba\\xdc\'','','','53'),(27945,'','131.16','','','','','','1697535640.681736','27921','81','','','','0','b\'\\x01\\x8b=\\x02Di\\x14\\xf6s/\\x1c`z8\\xd9\\xa5\'','','','91'),(27946,'','0.0','','','','','','1697535641.361416','27922','82','','','','0','b\'\\x01\\x8b=\\x02G\\x11\\xf9\\xbe+\\x17\\xf7\\xb3\\xe1\\x9b0Z\'','','','92'),(27947,'','0.0','','','','','','1697535641.684','27923','80','','','','0','b\'\\x01\\x8b=\\x02HT\\x00\\xd82\\xb0\\xee8\\x8a\\n\\x90\\x81\'','','','90'),(27948,'','2.55','','','','','','1697535641.96147','27924','79','','','','0','b\'\\x01\\x8b=\\x02Ii\\x8d\\x9bf\\xc1\\xf8\\x81k\\x81\\xb2|\'','','','89'),(27949,'','131.15','','','','','','1697535642.273255','27925','85','','','','0','b\'\\x01\\x8b=\\x02J\\xa10T\\xdf\\xd4\\xeb\\x9dR\\xf6\\xe5\\xe2\'','','','95'),(27950,'','131.15','','','','','','1697535642.570222','27926','89','','','','0','b\'\\x01\\x8b=\\x02K\\xca\\x0f\\xd3\\x07\\x06\\xe6\\xc6\\xf4\\xc01\\xeb\'','','','99'),(27951,'','0.0','','','','','','1697535642.874437','27927','86','','','','0','b\'\\x01\\x8b=\\x02L\\xfa\\xe6\\\\7Z\\x08\\xf0\\x881=B\'','','','96'),(27952,'','0.0','','','','','','1697535643.174277','27928','90','','','','0','b\'\\x01\\x8b=\\x02N&\\xad\\xbb^I\\x1b\\x03(<4\\x04\'','','','100'),(27953,'','0.0','','','','','','1697535643.473457','27929','84','','','','0','b\'\\x01\\x8b=\\x02OQ\\xe30!M\\xb7\\x1a\\x9a\\xf9\\xce\\xb6\'','','','94'),(27954,'','0.0','','','','','','1697535643.777814','27930','88','','','','0','b\'\\x01\\x8b=\\x02P\\x81G\\x8d`\\x8a\\x86\\x04FO\\xb9\\x17\'','','','98'),(27955,'','1.25','','','','','','1697535644.074336','27931','83','','','','0','b\"\\x01\\x8b=\\x02Q\\xaa(\\x97\'gM\\xd3\\x04\\xec\\x87\\x18\"','','','93'),(27956,'','1.29','','','','','','1697535644.375728','27932','87','','','','0','b\'\\x01\\x8b=\\x02R\\xd7^~\\xa7T\\xd9\\x11N8\\xa2O\'','','','97'),(27957,'','25.0','','','','','','1697535829.842245','','114','','','','0','b\"\\x01\\x8b=\\x05\'R\\xb60\\x95j\\xfbe\\xc7\\x1c\\xdf\\xab\"','','','48'),(27958,'','cool','','','','1697322276.478818','','1697535829.843128','','181','','','','0','b\"\\x01\\x8b=\\x05\'S\\x06\\x9cT\\x81\\x1e\\x99\\x1eG\\xa4\\x81\"','','','51'),(27959,'','130.58','','','','','','1697535933.741398','27933','85','','','','0','b\'\\x01\\x8b=\\x06\\xbd-\\xc4G4h#\\x8cN\\xb1\\xe9\\x85\'','','','59'),(27960,'','130.58','','','','','','1697535933.820111','27934','89','','','','0','b\'\\x01\\x8b=\\x06\\xbd|@\\xc1e<\\xb7\\xc1\\xc5\\x83<\\x88\'','','','63'),(27961,'','0.21','','','','','','1697535933.919327','27935','86','','','','0','b\'\\x01\\x8b=\\x06\\xbd\\xdf\\xf9A|\\xce\\x98\\x9f\\x8c\\x18Jd\'','','','60'),(27962,'','1.86','','','','','','1697535934.018569','27936','90','','','','0','b\"\\x01\\x8b=\\x06\\xbeB\\xf9\\x8f\\x85\\xaa5\\x96y{\\xfc\'\"','','','64'),(27963,'','6.36','','','','','','1697535934.118997','27937','84','','','','0','b\'\\x01\\x8b=\\x06\\xbe\\xa6T\\xb0\\xac\\xb0}p\\x18\\x85I{\'','','','58'),(27964,'','172.58','','','','','','1697535934.219918','27938','88','','','','0','b\'\\x01\\x8b=\\x06\\xbf\\x0bv\\x8e\\xf8\\xd0\\x9c\\x0fC\\x80\\xbd\\xd8\'','','','62'),(27965,'','75.81','','','','','','1697535934.321363','27939','83','','','','0','b\'\\x01\\x8b=\\x06\\xbfq\\xc6\\xae<\\x1czr%\\x15)\\xd3\'','','','57'),(27966,'','515.36','','','','','','1697535934.420502','27940','87','','','','0','b\'\\x01\\x8b=\\x06\\xbf\\xd4E\\xf7\\x880\\xc3|\\xf9\\x1e^5\'','','','61'),(27967,'','130.56','','','','','','1697535938.739138','27941','81','','','','0','b\'\\x01\\x8b=\\x06\\xd0\\xb3Gq8,\\x9ba:V\\xf8{\'','','','55'),(27968,'','2.06','','','','','','1697535938.817591','27942','82','','','','0','b\'\\x01\\x8b=\\x06\\xd1\\x01\\x11\\xbf\\xe0\\x82\\x85\\xc6\\x93\\xae\\xcc\\xfb\'','','','56'),(27969,'','195.43','','','','','','1697535938.917933','27943','80','','','','0','b\'\\x01\\x8b=\\x06\\xd1eH\"\\xa5\\xe5\"8\\xb4=\\xe7?\'','','','54'),(27970,'','591.17','','','','','','1697535939.018137','27944','79','','','','0','b\'\\x01\\x8b=\\x06\\xd1\\xca\\xfeFB\\x98-\\xe2\\x8f\\x19\\xb3\\xbb\'','','','53'),(27971,'','131.28','','','','','','1697535940.687161','27945','81','','','','0','b\'\\x01\\x8b=\\x06\\xd8Oko\\xb1\\x84:\\x80l4\\\\$\'','','','91'),(27972,'','0.0','','','','','','1697535940.966597','27946','82','','','','0','b\'\\x01\\x8b=\\x06\\xd9fKF\\xeaG\\xc1f\\xbe\\x93\\x95E\'','','','92'),(27973,'','0.0','','','','','','1697535941.269826','27947','80','','','','0','b\'\\x01\\x8b=\\x06\\xda\\x95\\xc1\\xf98\\xa9d\\xdb\\xcb\\xafH\\xf1\'','','','90'),(27974,'','2.55','','','','','','1697535941.566404','27948','79','','','','0','b\'\\x01\\x8b=\\x06\\xdb\\xbe+\\xd5\\xfc\\xf4\\xf78\\x18^\\xbf`\'','','','89'),(27975,'','131.28','','','','','','1697535941.878412','27949','85','','','','0','b\'\\x01\\x8b=\\x06\\xdc\\xf6D[D\\x1d5,\\xec\\xd7Xb\'','','','95'),(27976,'','131.28','','','','','','1697535942.178954','27950','89','','','','0','b\'\\x01\\x8b=\\x06\\xde\"\\xccdo\\xd7\\xb6\\xbe\\xfc\\xf7x\\x0e\'','','','99'),(27977,'','0.0','','','','','','1697535942.482141','27951','86','','','','0','b\'\\x01\\x8b=\\x06\\xdfR\\x9e\\xc6\\x04\\x01\\x9d\\x85\\x99\\x8d\\x0fW\'','','','96'),(27978,'','0.0','','','','','','1697535942.778716','27952','90','','','','0','b\'\\x01\\x8b=\\x06\\xe0z\\xe0\\xe6|\\x18Qy\\x1c0\\xd0s\'','','','100'),(27979,'','0.0','','','','','','1697535943.080206','27953','84','','','','0','b\'\\x01\\x8b=\\x06\\xe1\\xa8-\\xd8\\x94\\xe6\\xcc\\xe1\\x02\\xce\\xc9\\xb6\'','','','94'),(27980,'','0.0','','','','','','1697535943.377484','27954','88','','','','0','b\'\\x01\\x8b=\\x06\\xe2\\xd1\\x15\\xcf\\xaf\\x03\\xd2\\xda\\xdfOjx\'','','','98'),(27981,'','1.25','','','','','','1697535943.698727','27955','83','','','','0','b\'\\x01\\x8b=\\x06\\xe4\\x12F\\x9br\\xab\\xea\\xeb\\xec\\xe8\\x19y\'','','','93'),(27982,'','1.29','','','','','','1697535943.977798','27956','87','','','','0','b\'\\x01\\x8b=\\x06\\xe5)^LX\\xf0Py\\xac\\x94\\xc9\\x02\'','','','97'),(27983,'','130.85','','','','','','1697536233.739501','27959','85','','','','0','b\'\\x01\\x8b=\\x0bQ\\x0b?\\x96\\xd2\\x15_\\xe8\\x94\\xb8\\x85V\'','','','59'),(27984,'','130.85','','','','','','1697536233.818731','27960','89','','','','0','b\'\\x01\\x8b=\\x0bQZ\\xc69\\xe0\\x15#qz\\x90\\xe9\\xa1\'','','','63'),(27985,'','0.19','','','','','','1697536233.918339','27961','86','','','','0','b\'\\x01\\x8b=\\x0bQ\\xbe\\x7f\\x93\\x9b\\xd5\\xb6~\\x1d\\xb5\\xc0k\'','','','60'),(27986,'','1.86','','','','','','1697536234.018879','27962','90','','','','0','b\'\\x01\\x8b=\\x0bR\"\\xa6\\xbcC\\x0ej\\xeb\\xf7\\xbb\\xd5\\x89\'','','','64'),(27987,'','23.06','','','','','','1697536234.117989','27963','84','','','','0','b\'\\x01\\x8b=\\x0bR\\x85\\xf8dm>\\x8d\\xb5I\\xbb\\x1d\\xb4\'','','','58'),(27988,'','172.55','','','','','','1697536234.218049','27964','88','','','','0','b\'\\x01\\x8b=\\x0bR\\xea\\x9eK\\x81PW\\xa8\\x16]S\\xb7\'','','','62'),(27989,'','75.81','','','','','','1697536234.320349','27965','83','','','','0','b\'\\x01\\x8b=\\x0bSP\\xa6a\\xe0u?-NC\\xa5%\'','','','57'),(27990,'','515.37','','','','','','1697536234.418114','27966','87','','','','0','b\'\\x01\\x8b=\\x0bS\\xb2\\xb2j\"\\x18\\xd5T}g\\xb69\'','','','61'),(27991,'','130.75','','','','','','1697536238.737834','27967','81','','','','0','b\'\\x01\\x8b=\\x0bd\\x91U\\x93W\\x98\\x8a\\xea\\x18^\\xac\\x96\'','','','55'),(27992,'','2.05','','','','','','1697536238.814868','27968','82','','','','0','b\'\\x01\\x8b=\\x0bd\\xde\\xdd\\x8b\\xfe\\xa3X\\x7f\\x9d\\xac|\\xcb\'','','','56'),(27993,'','195.44','','','','','','1697536238.915089','27969','80','','','','0','b\'\\x01\\x8b=\\x0beC\\xa0\\xb5\\xb8=\\xa5\\xf6TE\\xf9o\'','','','54'),(27994,'','591.19','','','','','','1697536239.016226','27970','79','','','','0','b\'\\x01\\x8b=\\x0be\\xa8\\x80W\\x91\\xd8\\x05,m\\xd0\\xdfO\'','','','53'),(27995,'','131.49','','','','','','1697536240.687553','27971','81','','','','0','b\'\\x01\\x8b=\\x0bl/\\xed\\xbe\\xc6\\xd1\\xf5N\\xcfy\\xd81\'','','','91'),(27996,'','0.0','','','','','','1697536240.966401','27972','82','','','','0','b\'\\x01\\x8b=\\x0bmF\\xdc;\\xac\\xd9}U\\r\\x8dr\\xbf\'','','','92'),(27997,'','0.0','','','','','','1697536241.270441','27973','80','','','','0','b\'\\x01\\x8b=\\x0bnv\\x8e\\xa0\\xa1J\\xca\\xc5\\x86\\xda2\\xe0\'','','','90'),(27998,'','2.55','','','','','','1697536241.566928','27974','79','','','','0','b\'\\x01\\x8b=\\x0bo\\x9e\\xa2r\\xd0\\xa0Z\\xbf\\xec\\xc3\\x92\\xfe\'','','','89'),(27999,'','131.46','','','','','','1697536241.879215','27975','85','','','','0','b\'\\x01\\x8b=\\x0bp\\xd7\\xa7\\x8f\\x80\\xad\\xa3\\xaf\\x0eGXj\'','','','95'),(28000,'','131.46','','','','','','1697536242.178594','27976','89','','','','0','b\'\\x01\\x8b=\\x0br\\x02^\\xf4\\xa8\\xb4\\xa0(\\xc0g\\xd8\\xe2\'','','','99'),(28001,'','0.0','','','','','','1697536242.477853','27977','86','','','','0','b\'\\x01\\x8b=\\x0bs-\\xc5\\xd3.*\\x1b\\x8b\\xf5\\xdb\\xd3\\xf5\'','','','96'),(28002,'','0.0','','','','','','1697536242.777102','27978','90','','','','0','b\'\\x01\\x8b=\\x0btY\\xba\\x9c\\xe5) \\xc6N>\\xb1\\xe5\'','','','100'),(28003,'','0.0','','','','','','1697536243.07807','27979','84','','','','0','b\'\\x01\\x8b=\\x0bu\\x86\\x13\\x8c0\\xc9U^\\x8e\\xea\\x9ap\'','','','94'),(28004,'','0.0','','','','','','1697536243.37896','27980','88','','','','0','b\'\\x01\\x8b=\\x0bv\\xb2\\xbd\\xe6\\xa0\\xe7\\xc5\\xf0\\x92(=\\xcf\'','','','98'),(28005,'','1.25','','','','','','1697536243.698112','27981','83','','','','0','b\'\\x01\\x8b=\\x0bw\\xf2\\xc2\\x94H\\xcf%\\x9d$\\xedz\"\'','','','93'),(28006,'','1.29','','','','','','1697536243.979966','27982','87','','','','0','b\'\\x01\\x8b=\\x0by\\x0b\\xdd\\xafi=1\\xf8\\x97`\\x9f\\x1e\'','','','97'),(28007,'','130.53','','','','','','1697536533.739015','27983','85','','','','0','b\'\\x01\\x8b=\\x0f\\xe4\\xeb!\\xb3\\xea\\xa7,C\\xd5\\x04\\x8d\\xfa\'','','','59'),(28008,'','130.53','','','','','','1697536533.818183','27984','89','','','','0','b\'\\x01\\x8b=\\x0f\\xe5:\\x9b\\xfdH\\x9d\\xe9\\xbf?\\xdbtI\'','','','63'),(28009,'','0.19','','','','','','1697536533.917176','27985','86','','','','0','b\'\\x01\\x8b=\\x0f\\xe5\\x9d;Ah\\x92~\\xdb0LNK\'','','','60'),(28010,'','1.85','','','','','','1697536534.015964','27986','90','','','','0','b\'\\x01\\x8b=\\x0f\\xe5\\xffo\\xd9\\xfd\\xd6\\xe2t\\xcc\\xcb\\xe2f\'','','','64'),(28011,'','22.82','','','','','','1697536534.116883','27987','84','','','','0','b\'\\x01\\x8b=\\x0f\\xe6dvb$+sb\\xc3\\x08\\xd6\\x86\'','','','58'),(28012,'','171.07','','','','','','1697536534.21735','27988','88','','','','0','b\"\\x01\\x8b=\\x0f\\xe6\\xc9\\x13.u\'&4\\x9f\\xbdJ\\xc9\"','','','62'),(28013,'','75.81','','','','','','1697536534.320692','27989','83','','','','0','b\'\\x01\\x8b=\\x0f\\xe70\\x08\\xf9\\x9e\\xf4\\x06\\x86=/\\x93K\'','','','57'),(28014,'','515.39','','','','','','1697536534.416582','27990','87','','','','0','b\'\\x01\\x8b=\\x0f\\xe7\\x90\\xb0+Zj8\\xf6\\xa0\\x97W\\xec\'','','','61'),(28015,'','130.5','','','','','','1697536538.735942','27991','81','','','','0','b\"\\x01\\x8b=\\x0f\\xf8o\\xa0Lw2{H\\xbe\\x98\\x0b\'\"','','','55'),(28016,'','2.04','','','','','','1697536538.813971','27992','82','','','','0','b\'\\x01\\x8b=\\x0f\\xf8\\xbd\\x83\\x93dT\\xeb\\x95\\xca\\x96\\xee\\x8e\'','','','56'),(28017,'','193.38','','','','','','1697536538.913698','27993','80','','','','0','b\'\\x01\\x8b=\\x0f\\xf9! \\xce\\xf4\\xd1\\xa7\\xb5\\xc1+\\\\\\xd6\'','','','54'),(28018,'','591.2','','','','','','1697536539.015144','27994','79','','','','0','b\'\\x01\\x8b=\\x0f\\xf9\\x87\\xa5\\x97\\xe1\\xdcJ\\xfd\\t1\\xef\\xdb\'','','','53'),(28019,'','131.13','','','','','','1697536540.685377','27995','81','','','','0','b\'\\x01\\x8b=\\x10\\x00\\rae\\xf1)\\xb7\\x9e\\x8a\\x8b\\xc1M\'','','','91'),(28020,'','0.0','','','','','','1697536540.967427','27996','82','','','','0','b\"\\x01\\x8b=\\x10\\x01\'M\\xb8\\xa4Q-\\x03\\xacG\\xc4m\"','','','92'),(28021,'','0.0','','','','','','1697536541.264824','27997','80','','','','0','b\'\\x01\\x8b=\\x10\\x02PD\\x0c\\xfe\\x1fjM\\xf3\\xf8\\xdc\\x8c\'','','','90'),(28022,'','2.55','','','','','','1697536541.568312','27998','79','','','','0','b\'\\x01\\x8b=\\x10\\x03\\x80\\x18\\xa1O~etW\\xa5\\xdb\\x9b\'','','','89'),(28023,'','131.14','','','','','','1697536541.877435','27999','85','','','','0','b\'\\x01\\x8b=\\x10\\x04\\xb53@\"\\xca\\x96\\xaa\\xc1\\xea\\xfb\\xc8\'','','','95'),(28024,'','131.14','','','','','','1697536542.177442','28000','89','','','','0','b\'\\x01\\x8b=\\x10\\x05\\xe1\\xf12\\xd2<\\xc1\\xa6\\xda\\x08\\x7f\\x8b\'','','','99'),(28025,'','0.0','','','','','','1697536542.477911','28001','86','','','','0','b\'\\x01\\x8b=\\x10\\x07\\r\\x14[X\\x9fC\\x08S`\\xda\\xf1\'','','','96'),(28026,'','0.0','','','','','','1697536542.778189','28002','90','','','','0','b\'\\x01\\x8b=\\x10\\x08:,XDV\\xe06)\\x9b\\x99O\'','','','100'),(28027,'','0.0','','','','','','1697536543.081246','28003','84','','','','0','b\'\\x01\\x8b=\\x10\\ti\\xb1r\\t\\xbc\\xf9dp\\xe1q\\xc9\'','','','94'),(28028,'','0.0','','','','','','1697536543.379395','28004','88','','','','0','b\'\\x01\\x8b=\\x10\\n\\x93OQ\\xdf\\x9c\\xf7\\xb0\\xb7\\xfe&\\x83\'','','','98'),(28029,'','1.25','','','','','','1697536543.698984','28005','83','','','','0','b\'\\x01\\x8b=\\x10\\x0b\\xd2\\x07\\x1c\\x89:d\\x18\\xd3|\\xb6l\'','','','93'),(28030,'','1.29','','','','','','1697536543.976488','28006','87','','','','0','b\'\\x01\\x8b=\\x10\\x0c\\xe8\\xc34K%\\x08\\x82\\xc9Tg\\xc0\'','','','97'),(28031,'','on','','','','','','1697536798.053736','','154','','','','0','b\'\\x01\\x8b=\\x13\\xede\\x13\\xac\\xe3?\\x12\\xb1\\xb7\\x86\\x9f\\xc9\'','','','66'),(28032,'','130.32','','','','','','1697536833.739381','28007','85','','','','0','b\'\\x01\\x8b=\\x14x\\xcb\\x86\\x88!kO\\x8c\\x06\\x1dU\\xd9\'','','','59'),(28033,'','130.32','','','','','','1697536833.817201','28008','89','','','','0','b\'\\x01\\x8b=\\x14y\\x19\\xcc\\xd6\\xb6:\\xdd\\x8b\\x01\\xe1\\\\A\'','','','63'),(28034,'','0.16','','','','','','1697536833.916406','28009','86','','','','0','b\'\\x01\\x8b=\\x14y|\\xbc\\xfa\\xfdv;\\xd0XQ\\xdf\\x00\'','','','60'),(28035,'','1.88','','','','','','1697536834.01621','28010','90','','','','0','b\'\\x01\\x8b=\\x14y\\xe0\\\\\\xa8\\x0e\\xcc\\x05\\x95?\\xe7\\xfc\\xc7\'','','','64'),(28036,'','19.38','','','','','','1697536834.116617','28011','84','','','','0','b\'\\x01\\x8b=\\x14zD\\xe8\\xb1\\xd2:\\xdf_\\xc5\\xacJm\'','','','58'),(28037,'','174.29','','','','','','1697536834.216336','28012','88','','','','0','b\'\\x01\\x8b=\\x14z\\xa8|\\xe9\\xd2Q\\xb9o\\xf72\\x97/\'','','','62'),(28038,'','75.81','','','','','','1697536834.318897','28013','83','','','','0','b\'\\x01\\x8b=\\x14{\\x0e\\x01mPSK\\xa9\\xca\\xab+\\xe0\'','','','57'),(28039,'','515.4','','','','','','1697536834.417816','28014','87','','','','0','b\'\\x01\\x8b=\\x14{q\\xa2z\\xe5L\\x0b\\xe9-0\\xbc\\x94\'','','','61'),(28040,'','130.46','','','','','','1697536838.736764','28015','81','','','','0','b\'\\x01\\x8b=\\x14\\x8cP)\\xc3\\xcf\\xfcr\\x17\\xc8\\r\\x98}\'','','','55'),(28041,'','2.04','','','','','','1697536838.813866','28016','82','','','','0','b\'\\x01\\x8b=\\x14\\x8c\\x9d\\x0f\\x18\\xfb]\\x8a\\x14\\x91\\xc8F\\xce\'','','','56'),(28042,'','194.03','','','','','','1697536838.914486','28017','80','','','','0','b\'\\x01\\x8b=\\x14\\x8d\\x02\\xe8\\x8e\\xd5i\\xa4\\xdf9\\xfaF\\xd0\'','','','54'),(28043,'','591.22','','','','','','1697536839.015671','28018','79','','','','0','b\'\\x01\\x8b=\\x14\\x8dg#\\xeb\\x16\\xe4|-M^\\x7f\\xf0\'','','','53'),(28044,'','131.52','','','','','','1697536840.686617','28019','81','','','','0','b\'\\x01\\x8b=\\x14\\x93\\xee\\xdd0]:\\xe7\\x95\\xae?8\"\'','','','91'),(28045,'','0.0','','','','','','1697536840.967052','28020','82','','','','0','b\'\\x01\\x8b=\\x14\\x95\\x07Q\\xa5\\xa4\\x7f\\x14D\\x97\\xdfO\\xc5\'','','','92'),(28046,'','0.0','','','','','','1697536841.267859','28021','80','','','','0','b\'\\x01\\x8b=\\x14\\x963.{\\xf6m\\xdf\\xd0\\xf1p\\xd3h\'','','','90'),(28047,'','2.55','','','','','','1697536841.566032','28022','79','','','','0','b\'\\x01\\x8b=\\x14\\x97^y\\xdb\\x06\\xab\\x9dO\\xe2\\x80\\x18\\x18\'','','','89'),(28048,'','131.49','','','','','','1697536841.878314','28023','85','','','','0','b\'\\x01\\x8b=\\x14\\x98\\x96\\\\\\xbd\\x1f\\x95\\xe0\\xeb\\xfd\\x8d_.\'','','','95'),(28049,'','131.49','','','','','','1697536842.179889','28024','89','','','','0','b\'\\x01\\x8b=\\x14\\x99\\xc3u8\\xba\\xbc^(\\x9fc\\x14\\xf2\'','','','99'),(28050,'','0.0','','','','','','1697536842.479135','28025','86','','','','0','b\'\\x01\\x8b=\\x14\\x9a\\xef(\\xa2*\\x83\\x12\\xcb\\x194\\x17\\xa3\'','','','96'),(28051,'','0.0','','','','','','1697536842.779256','28026','90','','','','0','b\'\\x01\\x8b=\\x14\\x9c\\x1b\\xfa\\xb9~\\xd9=\\xc8\\xf7\\xdf\\x8bb\'','','','100'),(28052,'','0.0','','','','','','1697536843.083716','28027','84','','','','0','b\'\\x01\\x8b=\\x14\\x9dK\\xc2\\xaa\\xf42\\x84\\x19\\x98\\x06\\xfc\\xd3\'','','','94'),(28053,'','0.0','','','','','','1697536843.379602','28028','88','','','','0','b\'\\x01\\x8b=\\x14\\x9es\\xcb\\t|3q\\x15\\x12\\x86\\xe52\'','','','98'),(28054,'','1.25','','','','','','1697536843.70013','28029','83','','','','0','b\'\\x01\\x8b=\\x14\\x9f\\xb4\\x036\\xaf\\x91\\xf1\\xceH\\x9d\\x85\\x1f\'','','','93'),(28055,'','1.29','','','','','','1697536843.97972','28030','87','','','','0','b\'\\x01\\x8b=\\x14\\xa0\\xcb-\\x13\\x9b\\xa14\\x84\\xc6jp\\xf3\'','','','97'),(28056,'','on','','','','','','1697537104.951817','','155','','','','0','b\'\\x01\\x8b=\\x18\\x9c79).\\xbc\\xc0\\xed\\xb4\\x02ez\'','','','68'),(28057,'','130.25','','','','','','1697537133.738766','28032','85','','','','0','b\'\\x01\\x8b=\\x19\\x0c\\xaa9\\xf8<P\\xa9S\\xd4\\x8f\\xf5\\x94\'','','','59'),(28058,'','130.25','','','','','','1697537133.816092','28033','89','','','','0','b\'\\x01\\x8b=\\x19\\x0c\\xf8du\\xdc2\\xe5\\x86\\xdc\\x10\\xc1\\x04\'','','','63'),(28059,'','0.17','','','','','','1697537133.916464','28034','86','','','','0','b\'\\x01\\x8b=\\x19\\r\\\\D\\xbb8\\x968\\xac\\xa5\\x94\\xef\\xb4\'','','','60'),(28060,'','1.85','','','','','','1697537134.016638','28035','90','','','','0','b\'\\x01\\x8b=\\x19\\r\\xc0\\xf4\\xbb\\xa9\\x98r^\\xd0\\xbcf\\xc9\'','','','64'),(28061,'','20.63','','','','','','1697537134.115828','28036','84','','','','0','b\'\\x01\\x8b=\\x19\\x0e#\\x8b\\xcb\\x9f\\xb9E\\xb1Q\\x8b\\x14\\x1a\'','','','58'),(28062,'','171.29','','','','','','1697537134.21555','28037','88','','','','0','b\'\\x01\\x8b=\\x19\\x0e\\x87\\xf18\\xeerNJ\\xc3Z7F\'','','','62'),(28063,'','75.81','','','','','','1697537134.317177','28038','83','','','','0','b\'\\x01\\x8b=\\x19\\x0e\\xed}\\xce\\x073,6\\xba#\\xad\\x1f\'','','','57'),(28064,'','515.42','','','','','','1697537134.417089','28039','87','','','','0','b\"\\x01\\x8b=\\x19\\x0fQ\\x866\\x9cs\\x01=\\x05C\'\\x84\"','','','61'),(28065,'','130.3','','','','','','1697537138.73605','28040','81','','','','0','b\'\\x01\\x8b=\\x19 0SG\\xb2|Z\\x8d\\x05CE\\t\'','','','55'),(28066,'','2.02','','','','','','1697537138.813053','28041','82','','','','0','b\'\\x01\\x8b=\\x19 }\\x8b>\\xc0\\x89\\xf9)<\\x00\\xb7(\'','','','56'),(28067,'','192.03','','','','','','1697537138.914464','28042','80','','','','0','b\'\\x01\\x8b=\\x19 \\xe2\\x81\\x18\\xc9\\xb6\\r\\xc5\\xfc9\\x9c\\x86\'','','','54'),(28068,'','591.23','','','','','','1697537139.014264','28043','79','','','','0','b\'\\x01\\x8b=\\x19!F\\xd3\\xe68\\xa3\\x85\\xbfQ\\xde\\xd3\\xf1\'','','','53'),(28069,'','131.24','','','','','','1697537140.6902','28044','81','','','','0','b\"\\x01\\x8b=\\x19\'\\xd2\\xbe\\t\\xb3\\xdc\\xe5&\\xed\\xdb\\xc6\\t\"','','','91'),(28070,'','0.0','','','','','','1697537140.96744','28045','82','','','','0','b\'\\x01\\x8b=\\x19(\\xe7\\x9d\\x92\\xa77$^\\xe8\\xba\\xa06\'','','','92'),(28071,'','0.0','','','','','','1697537141.267904','28046','80','','','','0','b\'\\x01\\x8b=\\x19*\\x13\\xc4\\x95K\\xcf\"`l\\x07\\xec\\xa7\'','','','90'),(28072,'','2.55','','','','','','1697537141.569238','28047','79','','','','0','b\"\\x01\\x8b=\\x19+A4\\xdf\\xdd\\x8e\\xe9N\\x9b\\xd0\'\\xae\"','','','89'),(28073,'','131.21','','','','','','1697537141.881689','28048','85','','','','0','b\'\\x01\\x8b=\\x19,y\\x91\\xe7\\xe4S\\xfeU&\\xd4\\x07\\xa1\'','','','95'),(28074,'','131.21','','','','','','1697537142.180048','28049','89','','','','0','b\'\\x01\\x8b=\\x19-\\xa4\\x9a\\xbc\\x02xE\\x13\\xc9K \\xee\'','','','99'),(28075,'','0.0','','','','','','1697537142.479045','28050','86','','','','0','b\'\\x01\\x8b=\\x19.\\xcf( b\\xd5\\xa4Z\\\\v]d\'','','','96'),(28076,'','0.0','','','','','','1697537142.780077','28051','90','','','','0','b\'\\x01\\x8b=\\x19/\\xfc|\\xbd\\xdcK\\xd3\\x864\\x9c\\xe0\\xca\'','','','100'),(28077,'','0.0','','','','','','1697537143.080679','28052','84','','','','0','b\'\\x01\\x8b=\\x191(5\\x17\\xa1~\\xe1\\xb2i\\x1b\\xd8\\xe8\'','','','94'),(28078,'','0.0','','','','','','1697537143.379168','28053','88','','','','0','b\'\\x01\\x8b=\\x192S\\xb9a\\xecE\\xe1G\\xb5\\x0f\\x0e\\xa9\'','','','98'),(28079,'','1.25','','','','','','1697537143.958222','28054','83','','','','0','b\'\\x01\\x8b=\\x194\\x96\\x9b\\x02|\\xaaWu\\xd8\\x8d]\\xac\'','','','93'),(28080,'','1.29','','','','','','1697537144.280871','28055','87','','','','0','b\'\\x01\\x8b=\\x195\\xd8\\xe5B/-\\x18d\\x03\\x12!\\x0b\'','','','97'),(28081,'','130.55','','','','','','1697537433.739005','28057','85','','','','0','b\'\\x01\\x8b=\\x1d\\xa0\\x8b\\xc1I\\xec\\xf0\\xf3\\x8b\\xd5\\x12\\x9f\\xcc\'','','','59'),(28082,'','130.55','','','','','','1697537433.816837','28058','89','','','','0','b\'\\x01\\x8b=\\x1d\\xa0\\xd8\\xfe\\x85\\x95O\\xab\\xaa\\xe4\\x9c\\xfe\\xd7\'','','','63'),(28083,'','0.19','','','','','','1697537433.916716','28059','86','','','','0','b\'\\x01\\x8b=\\x1d\\xa1<\\x9e.;K+\\x90\\xb1\\x13\\xde\\x07\'','','','60'),(28084,'','1.83','','','','','','1697537434.017452','28060','90','','','','0','b\'\\x01\\x8b=\\x1d\\xa1\\xa1]0\\t=\\xa0\\xdc\\x92\\xf8\\x86.\'','','','64'),(28085,'','22.86','','','','','','1697537434.117388','28061','84','','','','0','b\'\\x01\\x8b=\\x1d\\xa2\\x05\\xb9G\\xcaiTw0B\\xf1\\xd1\'','','','58'),(28086,'','170.32','','','','','','1697537434.217165','28062','88','','','','0','b\'\\x01\\x8b=\\x1d\\xa2i\\xb9\\x03\\x083r\\xd1\\x82]e\\xd0\'','','','62'),(28087,'','75.82','','','','','','1697537434.320145','28063','83','','','','0','b\'\\x01\\x8b=\\x1d\\xa2\\xd0Q\\x1d\\xbd\\xf1`p\\x03l;\\xca\'','','','57'),(28088,'','515.43','','','','','','1697537434.417926','28064','87','','','','0','b\'\\x01\\x8b=\\x1d\\xa31\\xeb\\x83/[\\xc8dF\\xa28\\x01\'','','','61'),(28089,'','130.52','','','','','','1697537438.735532','28065','81','','','','0','b\'\\x01\\x8b=\\x1d\\xb4\\x0fG\\xe3\\xb2S\\xb9\\xe5w\\x89\\xa0A\'','','','55'),(28090,'','2.03','','','','','','1697537438.815229','28066','82','','','','0','b\'\\x01\\x8b=\\x1d\\xb4_\\x01\\x87\\x84\\t\\xb7\\x17t\\xf3\\x8e\\xd8\'','','','56'),(28091,'','193.42','','','','','','1697537438.91587','28067','80','','','','0','b\'\\x01\\x8b=\\x1d\\xb4\\xc3\\xa0X\".\\xda\\x97\\xcen\\xf4\\x9f\'','','','54'),(28092,'','591.25','','','','','','1697537439.016318','28068','79','','','','0','b\'\\x01\\x8b=\\x1d\\xb5(?\\xf0\\xa9\\xf0x\\xba\\x00\\xf5\\xca\\xe6\'','','','53'),(28093,'','131.24','','','','','','1697537440.692223','28069','81','','','','0','b\"\\x01\\x8b=\\x1d\\xbb\\xb4Jb\'\\xaa\\\\\\x07 \\xaa\\x0b\\x9f\"','','','91'),(28094,'','0.0','','','','','','1697537440.969765','28070','82','','','','0','b\'\\x01\\x8b=\\x1d\\xbc\\xc9\\x9a\\xb9\\xde\\xc1){T\\xa5\\x9e\\x82\'','','','92'),(28095,'','0.0','','','','','','1697537441.269027','28071','80','','','','0','b\'\\x01\\x8b=\\x1d\\xbd\\xf5\\xa5\\tm\\x12y\\x85\\xa2nn\\xed\'','','','90'),(28096,'','2.55','','','','','','1697537441.571249','28072','79','','','','0','b\'\\x01\\x8b=\\x1d\\xbf#x\\x94%\\xa7\\xb2}\\xd5\\x97}\\xe1\'','','','89'),(28097,'','131.21','','','','','','1697537441.880751','28073','85','','','','0','b\'\\x01\\x8b=\\x1d\\xc0X(\\xe1\\xd5\\xce\\x8eu\\x05\\xdd\\xcec\'','','','95'),(28098,'','131.21','','','','','','1697537442.182076','28074','89','','','','0','b\'\\x01\\x8b=\\x1d\\xc1\\x86a\\xedJ\\xd6\\x80O\\xd0\\xd2\\xf6\\x83\'','','','99'),(28099,'','0.0','','','','','','1697537442.482723','28075','86','','','','0','b\'\\x01\\x8b=\\x1d\\xc2\\xb2\\xf3\\x98\\xca&\\x95\\x80\\x7fa]9\'','','','96'),(28100,'','0.0','','','','','','1697537442.783931','28076','90','','','','0','b\'\\x01\\x8b=\\x1d\\xc3\\xdf/\\x9c\\x1361\\x98/\\x1c\\xedt\'','','','100'),(28101,'','0.0','','','','','','1697537443.082515','28077','84','','','','0','b\'\\x01\\x8b=\\x1d\\xc5\\n\\x95:)[\\xda\\x9f\\xb29\\x16*\'','','','94'),(28102,'','0.0','','','','','','1697537443.381079','28078','88','','','','0','b\"\\x01\\x8b=\\x1d\\xc65\\xc0\'l4eN\\xed\\xa3\\x15\\x85\"','','','98'),(28103,'','1.25','','','','','','1697537443.702467','28079','83','','','','0','b\'\\x01\\x8b=\\x1d\\xc7vl\\xf4\\x99n\\xd9\\x7f\\xe4\\xcf\\x99\\xb2\'','','','93'),(28104,'','1.29','','','','','','1697537443.981973','28080','87','','','','0','b\'\\x01\\x8b=\\x1d\\xc8\\x8d\\xb7\\xe4\\xa8\\x0bAN\\xa2\\\\9;\'','','','97'),(28105,'','130.72','','','','','','1697537733.739936','28081','85','','','','0','b\'\\x01\\x8b=\"4k\\xc8\\x0bc\\\\\\xb8\\xd6\\xd4\\xd9\\x8b[\'','','','59'),(28106,'','130.72','','','','','','1697537733.817952','28082','89','','','','0','b\'\\x01\\x8b=\"4\\xb9{\\xde\\xed*/qF[z&\'','','','63'),(28107,'','2.34','','','','','','1697537733.917889','28083','86','','','','0','b\'\\x01\\x8b=\"5\\x1d*u\\xeb.F\\xdb+d\\xe4\\xe1\'','','','60'),(28108,'','1.86','','','','','','1697537734.017239','28084','90','','','','0','b\'\\x01\\x8b=\"5\\x81\\xf5\\x97\\x9d\\x80cr\\xe1u\\x0f\\xd4\'','','','64'),(28109,'','16.79','','','','','','1697537734.117586','28085','84','','','','0','b\'\\x01\\x8b=\"5\\xe5$\\xed\\xa86.yh\\xd3{\\xf4\'','','','58'),(28110,'','172.44','','','','','','1697537734.217031','28086','88','','','','0','b\'\\x01\\x8b=\"6I\\x18\\x15[\\xe2\\x0cg\\x0e\\xc7S\\xe1\'','','','62'),(28111,'','75.82','','','','','','1697537734.318216','28087','83','','','','0','b\'\\x01\\x8b=\"6\\xae\\x05\\x81.8\\x19\\xd8N\\xee\\x08n\'','','','57'),(28112,'','515.45','','','','','','1697537734.418573','28088','87','','','','0','b\'\\x01\\x8b=\"7\\x12\\xe1\\x1a+\\xc4\\xb9N{\\xaf\\xd4p\'','','','61'),(28113,'','130.73','','','','','','1697537738.7371','28089','81','','','','0','b\'\\x01\\x8b=\"G\\xf1o\\xb4w\\xe9\\xbb\"\\x9a\\xec6^\'','','','55'),(28114,'','4.18','','','','','','1697537738.814243','28090','82','','','','0','b\'\\x01\\x8b=\"H>\\xbaL\\x86\\xa6cS\\xcf>\\xb3\\xd8\'','','','56'),(28115,'','189.44','','','','','','1697537738.915858','28091','80','','','','0','b\'\\x01\\x8b=\"H\\xa3\\x88\\xb8\\xa2i\\xe3\\xb7w\\xb7_}\'','','','54'),(28116,'','591.26','','','','','','1697537739.01436','28092','79','','','','0','b\'\\x01\\x8b=\"I\\x06fH+\\xfcNw-\\x7f\\xc8\\x08\'','','','53'),(28117,'','131.05','','','','','','1697537740.692208','28093','81','','','','0','b\'\\x01\\x8b=\"O\\x94\\xf7\\xc8\\x84\\xb94\\x89\\x9a\\x13A\\r\'','','','91');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_hotel` bigint NOT NULL,
  `user_role` bigint NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo_identificacion` bigint DEFAULT NULL,
  `numero_identificacion` varchar(12) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_created` bigint DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `numero_identificacion` (`numero_identificacion`),
  KEY `user_role` (`user_role`),
  KEY `user_hotel` (`user_hotel`),
  CONSTRAINT `user_hotel` FOREIGN KEY (`user_hotel`) REFERENCES `hoteles` (`id`),
  CONSTRAINT `user_role` FOREIGN KEY (`user_role`) REFERENCES `roles` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `user_hotel`, `user_role`, `name`, `tipo_identificacion`, `numero_identificacion`, `email`, `email_verified_at`, `password`, `user_created`, `remember_token`, `created_at`, `updated_at`) VALUES (30,12,2,'Oscar Garcia',1,'79540191','Oscarma.garcia@gmail.com',NULL,'$2y$10$ESeDLeQ0ndfr6EMBOc4KCeQOCQcFGdfIEq6gbWqr36GLhEUmqaDiO',22,NULL,'2023-09-28 19:11:42','2023-09-28 19:11:42'),(32,11,1,'Oscar Garcia',1,'795401911','ogarcia@gmail.com',NULL,'$2y$10$ekjVhqaEZqDxvGHwlpwoKOV9xuvACcIXYvkJ561nWF8jCU.1mPR9G',22,'F3cOyX9gwKJwkxKO7eeASoCuivAyf6FTyZe00Q1AFjVvUNs0zJeyhPFZlJjt','2023-11-15 22:57:35','2023-12-03 02:34:24'),(33,11,1,'Jose Javier Zapata',1,'19615269','josejavierz@gmail.com',NULL,'$2y$10$8evK4LbgGT/2TNPevZHTlOpzF9kW02isUcsQMcTmRZ.7Wi23kbB9q',22,NULL,'2023-11-27 20:46:30','2023-11-27 20:46:30');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'janoscom_bemsv2'
--

--
-- Dumping routines for database 'janoscom_bemsv2'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-01 13:47:37
