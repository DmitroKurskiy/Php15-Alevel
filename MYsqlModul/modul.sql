-- MySQL dump 10.17  Distrib 10.3.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: php15
-- ------------------------------------------------------
-- Server version	10.3.13-MariaDB-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `dicts`
--

DROP TABLE IF EXISTS `dicts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dicts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dicts`
--

LOCK TABLES `dicts` WRITE;
/*!40000 ALTER TABLE `dicts` DISABLE KEYS */;
INSERT INTO `dicts` VALUES (1,'animals','2021-11-22 19:32:54'),(2,'school','2021-11-22 19:32:54'),(3,'nature','2021-11-22 19:32:54'),(4,'human','2021-11-22 19:32:54'),(5,'SF','2021-11-22 19:32:54');
/*!40000 ALTER TABLE `dicts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pwd` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'Vasya','21341234qwfsdf','mmm@mmail.com','m'),(2,'Alex','21341234','mmm@gmail.com','m'),(3,'Alexey','qq21341234Q','alexey@gmail.com','m'),(4,'Helen','MarryMeeee','hell@gmail.com','f'),(5,'Jenny','SmakeMyb','eachup@gmailcom','f'),(6,'Lora','burn23','tpicks@gmail.com','f');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `words`
--

DROP TABLE IF EXISTS `words`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `words` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `word` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'w',
  `dict_id` int(11) NOT NULL DEFAULT 1,
  `updated` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `words`
--

LOCK TABLES `words` WRITE;
/*!40000 ALTER TABLE `words` DISABLE KEYS */;
INSERT INTO `words` VALUES (1,'turtle','w',1,'2021-11-22 19:33:09'),(2,'pig','w',1,'2021-11-22 19:33:09'),(3,'dog','w',1,'2021-11-22 19:33:09'),(4,'cat','w',1,'2021-11-22 19:33:09'),(5,'lizard','w',1,'2021-11-22 19:33:09'),(6,'cow','w',1,'2021-11-22 19:33:09'),(7,'rabbit','w',1,'2021-11-22 19:33:09'),(8,'frog','w',1,'2021-11-22 19:33:09'),(9,'headgehog','w',1,'2021-11-22 19:33:09'),(10,'goat','w',1,'2021-11-22 19:33:09'),(11,'desk','w',2,'2021-11-22 19:33:20'),(12,'book','w',2,'2021-11-22 19:33:20'),(13,'chalk','w',2,'2021-11-22 19:33:20'),(14,'pen','w',2,'2021-11-22 19:33:20'),(15,'pencil','w',2,'2021-11-22 19:33:20'),(16,'copybook','w',2,'2021-11-22 19:33:20'),(17,'lesson','w',2,'2021-11-22 19:33:20'),(18,'teacher','w',2,'2021-11-22 19:33:20'),(19,'pupils','w',2,'2021-11-22 19:33:20'),(20,'school','w',2,'2021-11-22 19:33:20'),(21,'ray','w',3,'2021-11-22 19:33:34'),(22,'thunder','w',3,'2021-11-22 19:33:34'),(23,'sun','w',3,'2021-11-22 19:33:34'),(24,'field','w',3,'2021-11-22 19:33:34'),(25,'hill','w',3,'2021-11-22 19:33:34'),(26,'mountain','w',3,'2021-11-22 19:33:34'),(27,'river','w',3,'2021-11-22 19:33:34'),(28,'forest','w',3,'2021-11-22 19:33:34'),(29,'grass','w',3,'2021-11-22 19:33:34'),(30,'rain','w',3,'2021-11-22 19:33:34'),(31,'hair','w',4,'2021-11-22 19:33:47'),(32,'nail','w',4,'2021-11-22 19:33:47'),(33,'finger','w',4,'2021-11-22 19:33:47'),(34,'eye','w',4,'2021-11-22 19:33:47'),(35,'tooth','w',4,'2021-11-22 19:33:47'),(36,'knee','w',4,'2021-11-22 19:33:47'),(37,'elbow','w',4,'2021-11-22 19:33:47'),(38,'leg','w',4,'2021-11-22 19:33:47'),(39,'arm','w',4,'2021-11-22 19:33:47'),(40,'head','w',4,'2021-11-22 19:33:47'),(41,'engine','w',5,'2021-11-22 19:34:03'),(42,'steel','w',5,'2021-11-22 19:34:03'),(43,'power','w',5,'2021-11-22 19:34:03'),(44,'nuclear','w',5,'2021-11-22 19:34:03'),(45,'shotgun','w',5,'2021-11-22 19:34:03'),(46,'laser','w',5,'2021-11-22 19:34:03'),(47,'flight','w',5,'2021-11-22 19:34:03'),(48,'energy','w',5,'2021-11-22 19:34:03'),(49,'Moon','w',5,'2021-11-22 19:34:03'),(50,'splace','w',5,'2021-11-22 19:34:03');
/*!40000 ALTER TABLE `words` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-22 21:44:38
