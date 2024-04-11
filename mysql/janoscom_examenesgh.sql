-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: janoscom_examenesgh
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
-- Current Database: `janoscom_examenesgh`
--


--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `horarios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fecha` varchar(10) NOT NULL,
  `horario` varchar(8) NOT NULL,
  `cupos` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
INSERT INTO `horarios` (`id`, `fecha`, `horario`, `cupos`) VALUES (1,'2023-11-23','08:00:00',0),(2,'2023-11-23','08:15:00',0),(3,'2023-11-23','08:30:00',0),(4,'2023-11-23','08:45:00',2),(5,'2023-11-23','09:00:00',0),(6,'2023-11-23','09:15:00',2),(7,'2023-11-23','09:30:00',2),(8,'2023-11-23','09:45:00',2),(9,'2023-11-23','10:00:00',1),(10,'2023-11-23','10:15:00',2),(11,'2023-11-23','10:30:00',2),(12,'2023-11-23','10:45:00',2),(13,'2023-11-23','11:00:00',1),(14,'2023-11-23','11:15:00',1),(15,'2023-11-23','11:30:00',1),(16,'2023-11-23','11:45:00',0),(17,'2023-11-23','13:30:00',2),(18,'2023-11-23','13:45:00',2),(19,'2023-11-23','14:00:00',1),(20,'2023-11-23','14:15:00',2),(21,'2023-11-23','14:30:00',0),(22,'2023-11-23','14:45:00',2),(23,'2023-11-23','15:00:00',2),(24,'2023-11-23','15:15:00',2),(25,'2023-11-23','15:30:00',2),(26,'2023-11-23','15:45:00',2),(27,'2023-11-23','16:00:00',2),(28,'2023-11-23','16:15:00',2),(29,'2023-11-23','16:30:00',2),(30,'2023-11-23','16:45:00',2),(31,'2023-11-23','17:00:00',0),(32,'2023-11-23','17:15:00',1),(33,'2023-11-24','08:00:00',0),(34,'2023-11-24','08:15:00',1),(35,'2023-11-24','08:30:00',0),(36,'2023-11-24','08:45:00',1),(37,'2023-11-24','09:00:00',1),(38,'2023-11-24','09:15:00',2),(39,'2023-11-24','09:30:00',1),(40,'2023-11-24','09:45:00',2),(41,'2023-11-24','10:00:00',0),(42,'2023-11-24','10:15:00',0),(43,'2023-11-24','10:30:00',2),(44,'2023-11-24','10:45:00',1),(45,'2023-11-24','11:00:00',1),(46,'2023-11-24','11:15:00',2),(47,'2023-11-24','11:30:00',2),(48,'2023-11-24','11:45:00',2),(49,'2023-11-24','13:30:00',0),(50,'2023-11-24','13:45:00',1),(51,'2023-11-24','14:00:00',0),(52,'2023-11-24','14:15:00',1),(53,'2023-11-24','14:30:00',0),(54,'2023-11-24','14:45:00',0),(55,'2023-11-24','15:00:00',0),(56,'2023-11-24','15:15:00',1),(57,'2023-11-24','15:30:00',0),(58,'2023-11-24','15:45:00',2),(59,'2023-11-24','16:00:00',0),(60,'2023-11-24','16:15:00',1),(61,'2023-11-24','16:30:00',1),(62,'2023-11-24','16:45:00',2),(63,'2023-11-24','17:00:00',2),(64,'2023-11-24','17:15:00',1),(65,'2023-11-24','17:45:00',2),(66,'2023-11-24','18:00:00',1);
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reserva`
--

DROP TABLE IF EXISTS `reserva`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `reserva` (
  `Id_reserva` int NOT NULL AUTO_INCREMENT,
  `fecha` varchar(10) NOT NULL,
  `horario` varchar(8) NOT NULL,
  `documento` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`Id_reserva`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reserva`
--

LOCK TABLES `reserva` WRITE;
/*!40000 ALTER TABLE `reserva` DISABLE KEYS */;
INSERT INTO `reserva` (`Id_reserva`, `fecha`, `horario`, `documento`, `nombre`) VALUES (1,'2023-11-24','10:45:00','1063946881','Elia Regalado '),(2,'2023-11-23','14:00:00','85462399','JOSÉ VICENTE MAESTRE PERALTA'),(3,'2023-11-23','17:00:00','26671487','Milagros Yaneth Castro Calvo'),(4,'2023-11-23','17:15:00','32607994','Luz del Carmen Ospino Cañas'),(5,'2023-11-23','08:15:00','32769901','KATHERINE ROCIO GOMEZ PALACIO'),(6,'2023-11-24','08:45:00','1082934433','YULI SUAREZ'),(7,'2023-11-23','08:00:00','1148151775','1148151775'),(8,'2023-11-24','13:30:00','22605822','Shirly Molina Blanco'),(9,'2023-11-23','11:00:00','4981029','Frank Alonso Rodriguez Martínez '),(10,'2023-11-23','14:30:00','85459423','César Suárez '),(11,'2023-11-23','09:00:00','71695163','Gabriel Jaime Parra Henao'),(12,'2023-11-24','08:30:00','57429044','Abadis Josefa Núñez Cantillo '),(13,'2023-11-23','11:45:00','36669654','Liliana Lora Barrios '),(15,'2023-11-24','15:00:00','36667642','Esmeira Enith Pertuz Meza '),(16,'2023-11-24','18:00:00','12636584','Octavio Mario Martínez lavalle '),(17,'2023-11-24','15:00:00','26717875','KARIME ABUABARA ACOSTA'),(19,'2023-11-23','08:00:00','1082853255','CARLOS DAVID GARCIA CERVANTES'),(20,'2023-11-23','08:30:00','85153894','GustavoAdolfo Correa Solano'),(21,'2023-11-23','11:30:00','7629601','WALTER CAMILO TOVAR COQUIES'),(22,'2023-11-23','10:00:00','7601122','Leandro Raúl Rozo Martinez'),(23,'2023-11-23','08:15:00','79652237','Oscar Hernando Moreno Torres'),(24,'2023-11-24','14:00:00','36719101','Claudia Patricia Roa Mendoza'),(25,'2023-11-23','09:00:00','1019010671','Laura Nieto Henao'),(26,'2023-11-23','08:30:00','1082912545','Diego Armando Lindao Ruiz'),(27,'2023-11-23','14:30:00','1082994484','Anghy Amado Reyes'),(28,'2023-11-24','10:00:00','1082898829','Liliana aún '),(29,'2023-11-24','14:00:00','12548956','Eladio José correa silva'),(30,'2023-11-24','10:00:00','1082932071','Maria vengoechea '),(31,'2023-11-24','08:00:00','57445676','Dora Lucia Aldana Gutiérrez '),(32,'2023-11-24','14:30:00','85459423','César Suárez '),(33,'2023-11-24','13:45:00','1082853821','Ariadna sierra'),(34,'2023-11-23','17:00:00','85459423','César Suárez '),(35,'2023-11-24','14:15:00','7630514','David Rafael Roca Borre'),(36,'2023-11-24','08:00:00','39030284','Rosalbina Teresa Velasquez Becerra'),(37,'2023-11-24','16:30:00','12536608','Pascual Vicente Bernal Castro '),(38,'2023-11-24','11:00:00','36552872','Giomar Sarmiento Marengo'),(39,'2023-11-24','14:45:00','17901210','Jhonathan Ureche Iguaran '),(40,'2023-11-24','10:15:00','57431697','Rosana Patricia Elias Guerrero'),(41,'2023-11-24','16:00:00','1096948309','Magda Melissa Flórez Martínez'),(42,'2023-11-24','15:30:00','1018406263','Francy Elaine Torres Suarez'),(43,'2023-11-24','08:15:00','12546442','Nage Aun Quicena'),(44,'2023-11-24','16:00:00','1096948309','Magda Melissa Flórez Martínez'),(45,'2023-11-24','14:30:00','36552872','Giomar Sarmiento Marengo'),(46,'2023-11-24','09:00:00','8697755','Ricardo Jurado Nieto '),(47,'2023-11-24','15:15:00','12555689','Aquiles Ponzon Noriega'),(48,'2023-11-24','15:30:00','36727019','Karen Cárdenas Zambrano '),(49,'2023-11-24','17:15:00','1082867382','Melisa milagro arevalo padilla'),(50,'2023-11-24','13:30:00','72281798','Argemiro valle padilla'),(51,'2023-11-24','08:30:00','57465228','Eliana isabel wisman manjarres'),(52,'2023-11-24','10:15:00','1082916487','JOSE DAVID GONZALEZ VILLEGAS'),(53,'2023-11-24','16:15:00','1082971502','Kenia Melissa Munera Luque'),(54,'2023-11-24','14:45:00','7143371','Hernando dau'),(55,'2023-11-24','09:30:00','36540195','Maritza Martínez Correa ');
/*!40000 ALTER TABLE `reserva` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'janoscom_examenesgh'
--

--
-- Dumping routines for database 'janoscom_examenesgh'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-04-01 13:47:38
