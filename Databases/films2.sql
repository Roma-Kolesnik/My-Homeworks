-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: films
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8mb4 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `actors`
--

DROP TABLE IF EXISTS `actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `actors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT 'actor',
  `surname` varchar(30) NOT NULL DEFAULT 'surname',
  `age` int(3) NOT NULL DEFAULT '0',
  `gender` varchar(1) NOT NULL DEFAULT '?',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors`
--

LOCK TABLES `actors` WRITE;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
INSERT INTO `actors` VALUES (1,'Vin','Disel',52,'m'),(2,'Paul','Walker',40,'m'),(3,'Jordana','Brewster',39,'w'),(4,'Michelle','Rodrigez',41,'w'),(5,'Matt','Schulze',47,'m'),(6,'Johny','Strong',40,'m'),(7,'Chad','Lindberg',43,'m'),(8,'Rick','Yune',48,'m'),(9,'Thom','Barry',69,'m');
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `films` (
  `names` varchar(50) NOT NULL DEFAULT '',
  `year` int(4) NOT NULL DEFAULT '0',
  `genre` varchar(50) NOT NULL DEFAULT '-',
  `time` int(3) NOT NULL DEFAULT '0',
  `language` varchar(30) NOT NULL DEFAULT '-',
  `country` varchar(30) NOT NULL DEFAULT 'country',
  PRIMARY KEY (`names`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES ('Black Hawk Down',2001,'historical, war drama, action',144,'English','USA'),('Blade',1998,'horror',120,'English','USA'),('Die Another Day',2002,'action',135,'English','USA, Great Britain'),('Girlfight',2000,'drama and sport',110,'English','USA'),('I Spit on Your Grave',2010,'horror film',108,'English','USA'),('Monster In The Closet',1986,'horror film',90,'English','USA'),('Steel',1997,'superhero movie, action, science fiction',97,'English','USA'),('Strays',1997,'drama',97,'English','USA'),('The Faculty',1998,'fantasy and horror film',104,'English','USA');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producer`
--

DROP TABLE IF EXISTS `producer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `producer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT 'producer',
  `surname` varchar(30) NOT NULL DEFAULT 'surname',
  `gender` varchar(1) NOT NULL DEFAULT '?',
  `age` int(3) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producer`
--

LOCK TABLES `producer` WRITE;
/*!40000 ALTER TABLE `producer` DISABLE KEYS */;
INSERT INTO `producer` VALUES (1,'Jerry','Bruckheimer','m',76),(2,'Stephen','Norrington','m',56),(3,'Barbara','Broccoli','m',59),(4,'Maggie','Renzi','w',69),(5,'Joseph','Zbeda','m',50),(6,'Peter','L. Bergquist','m',50),(7,'Jones','Quincy','m',86),(8,'Gordon','Bijelonic','m',43),(9,'Elizabeth','Avellan','w',59);
/*!40000 ALTER TABLE `producer` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-24 15:36:13
