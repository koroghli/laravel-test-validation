-- MySQL dump 10.13  Distrib 5.5.54, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.54-0ubuntu0.14.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(120) DEFAULT NULL,
  `message` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`id`)
<<<<<<< HEAD
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;
=======
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
<<<<<<< HEAD
INSERT INTO `messages` VALUES (1,'sara','sarah@gmail.com','coucou'),(2,'test','test','test'),(3,NULL,NULL,'3 < 4'),(4,NULL,NULL,'3 < 4'),(5,'amira','vb:c,b','coucou'),(6,'amira','vb:c,b','coucou'),(7,'amira','vb:c,b','coucou'),(8,'hg','gf','fg'),(9,'hg','gf','fg'),(10,'hg','gf','fg'),(11,'hg','gf','fg'),(12,'hg','gf','fg'),(13,'s','s','3 < 4'),(14,'dd','ss','ss'),(15,'dd','ss','ss'),(16,'dd','ss','ss'),(17,'dd','ss','ss'),(18,'j','j','3 < 4');
=======
INSERT INTO `messages` VALUES (1,'sara','sarah@gmail.com',NULL);
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
<<<<<<< HEAD
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
=======
-- Table structure for table `persons`
--

DROP TABLE IF EXISTS `persons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `persons` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `message` varchar(230) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `persons`
--

LOCK TABLES `persons` WRITE;
/*!40000 ALTER TABLE `persons` DISABLE KEYS */;
/*!40000 ALTER TABLE `persons` ENABLE KEYS */;
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` tinytext,
  `created_at` varchar(45) DEFAULT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  `remember_token` tinytext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
<<<<<<< HEAD
INSERT INTO `users` VALUES (1,'amira','koroghli.amira@gmail.com','$2y$10$i3HP9XtZQAZd/7N.0WkTIehOTjtcrB5gefdh.hLP8N3zPJNxSAbZ6','2017-02-09 11:01:32','2017-02-09 11:01:32','uJBvM0nDR8avC6ogVQhOtmu6MTcM9PlY7ZxaGagfXPtoau7GzormOrK7QG4G'),(2,'admin','admin@gmail.com','$2y$10$CwnbZcfa75VJ/QOYr24WDuqckPxrMXyVwuthV..VFTKGKyDHE21rW','2017-02-10 08:07:26','2017-02-10 08:07:26','seadVQpct5NX2JzyezqMXGDz0YcZRl9S8g3yMBxYsVXTUCrneRvaynA6apaZ'),(3,'koroghli','koroghli2.amira@gmail.com','$2y$10$.IIIAQZfLKy5SOdRq1vOwuvCY9A2G4vqLY6Tw9M1/WuzXoTo3hkei','2017-02-10 10:02:08','2017-02-10 10:02:08','eU7Ku8C9ruoIqo7XxXIJPqAVE2pp2Z4wnkwLMGQq1Rp2PN1KFuakdhkVYqnk');
=======
INSERT INTO `users` VALUES (1,'amira','koroghli.amira@gmail.com','$2y$10$i3HP9XtZQAZd/7N.0WkTIehOTjtcrB5gefdh.hLP8N3zPJNxSAbZ6','2017-02-09 11:01:32','2017-02-09 11:01:32','uJBvM0nDR8avC6ogVQhOtmu6MTcM9PlY7ZxaGagfXPtoau7GzormOrK7QG4G'),(2,'admin','admin@gmail.com','$2y$10$CwnbZcfa75VJ/QOYr24WDuqckPxrMXyVwuthV..VFTKGKyDHE21rW','2017-02-10 08:07:26','2017-02-10 08:07:26','bdpf5X1xTW0pYtFhvJqBy8Qmm2j59EtPeIGqNQIdeoCCqdckBTNNNMfpCc8D'),(3,'koroghli','koroghli2.amira@gmail.com','$2y$10$.IIIAQZfLKy5SOdRq1vOwuvCY9A2G4vqLY6Tw9M1/WuzXoTo3hkei','2017-02-10 10:02:08','2017-02-10 10:02:08',NULL);
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4
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

<<<<<<< HEAD
-- Dump completed on 2017-02-10 15:08:01
=======
-- Dump completed on 2017-02-10 12:58:17
>>>>>>> 9e26a59b43fbad7b6068c3714dab64e1144b7dd4
