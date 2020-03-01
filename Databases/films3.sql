-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: film
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
  `actor_name` varchar(50) NOT NULL DEFAULT 'noname',
  `age` int(3) NOT NULL DEFAULT '0',
  `gender` varchar(1) NOT NULL DEFAULT '',
  `actor_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `actors`
--

LOCK TABLES `actors` WRITE;
/*!40000 ALTER TABLE `actors` DISABLE KEYS */;
INSERT INTO `actors` VALUES (1,'Vin Diesel',52,'m',1),(2,'Paul Walker',40,'m',2),(3,'Jordana Brewster',39,'w',3),(4,'Michelle Rodrigez',41,'w',4),(5,'Matt Schulze',47,'m',5),(6,'Johny Strong',40,'m',6),(7,'Chad Lindberg',43,'m',7),(8,'Rick Yune',48,'m',8),(9,'Thom Barry',69,'m',9),(10,'Dwayne Johnson',47,'m',10),(11,'Joey Dedio',56,'m',1),(12,'Mike Epps',51,'m',1),(13,'Howard Duff',76,'m',2),(14,'Henry Gibson',73,'m',2),(15,'Elijah Wood',39,'m',3),(16,'Josh Hartnett',41,'m',3),(17,'Jaime Tirelli',74,'m',4),(18,'Paul Calderon',60,'m',4),(19,'Wesley Snipes',57,'m',5),(20,'Kris Kristofferson',83,'m',5),(21,'Ewan McGregor',48,'m',6),(22,'Tom Sizemore',58,'m',6),(23,'Sarah Butler',35,'w',7),(24,'Daniel Franzese',41,'m',7),(25,'Shaquille O\'Neal',47,'m',9),(26,'Annabeth Gish',48,'w',9),(27,'Pierce Brosnan',66,'m',8),(28,'Halle Berry',53,'w',8),(29,'Karen Gillan',32,'w',10),(30,'Jack Black',50,'m',10);
/*!40000 ALTER TABLE `actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directors`
--

DROP TABLE IF EXISTS `directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `directors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dir_name` varchar(50) NOT NULL DEFAULT 'noname',
  `age` int(3) NOT NULL DEFAULT '0',
  `gender` varchar(1) NOT NULL DEFAULT '',
  `dir_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directors`
--

LOCK TABLES `directors` WRITE;
/*!40000 ALTER TABLE `directors` DISABLE KEYS */;
INSERT INTO `directors` VALUES (1,'Gordon Bijelonic',49,'m',1),(2,'Vin Diesel',52,'m',1),(3,'Bob Dahlin',76,'m',2),(4,'Robert Rodriguez',51,'m',3),(5,'Karyn Kusama',51,'w',4),(6,'Stephen Norrington',56,'m',5),(7,'Ridley Scott',82,'m',6),(8,'Steven R. Monroe',56,'m',7),(9,'Lee Tamahori',69,'m',8),(10,'Kenneth Johnson',66,'m',9),(11,'Jake Kasdan',45,'m',10);
/*!40000 ALTER TABLE `directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films`
--

DROP TABLE IF EXISTS `films`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(100) NOT NULL DEFAULT 'noname',
  `year` int(4) NOT NULL DEFAULT '0',
  `genre` varchar(100) NOT NULL DEFAULT '',
  `time` int(3) NOT NULL DEFAULT '0',
  `language` varchar(50) NOT NULL DEFAULT '',
  `country` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films`
--

LOCK TABLES `films` WRITE;
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` VALUES (1,'Strays',1997,'drama',97,'English','USA'),(2,'Monster In The Closet',1986,'horror film',90,'English','USA'),(3,'The Faculty',1998,'fantasy, horror film',104,'English','USA'),(4,'Girlfight',2000,'drama, sport',110,'English','USA'),(5,'Blade',1998,'horror',120,'English','USA'),(6,'Black Hawk Down',2001,'historical, war drama, action',144,'English','USA'),(7,'I Spit on Your Grave',2010,'horror film',108,'English','USA'),(8,'Die Another Day',2002,'action',135,'English','USA, Great Britain'),(9,'Steel',1997,'superhero movie, action, science fiction',97,'English','USA'),(10,'Jumanji: The Next Level',2019,'action, adventure, comedy',123,'English','USA'),(11,'Halk',2005,'fantasy',100,'English','USA');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films_actors`
--

DROP TABLE IF EXISTS `films_actors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `films_actors` (
  `id_film` int(11) NOT NULL DEFAULT '0',
  `id_actor` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films_actors`
--

LOCK TABLES `films_actors` WRITE;
/*!40000 ALTER TABLE `films_actors` DISABLE KEYS */;
INSERT INTO `films_actors` VALUES (1,'1, 11, 12'),(2,'2, 13, 14'),(3,'3, 15, 16'),(4,'4, 17, 18'),(5,'5, 19, 20'),(6,'6, 21, 22'),(7,'7, 23, 24'),(8,'8, 27, 28'),(9,'9, 25, 26'),(10,'10, 29, 30');
/*!40000 ALTER TABLE `films_actors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films_directors`
--

DROP TABLE IF EXISTS `films_directors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `films_directors` (
  `id_film` int(11) NOT NULL DEFAULT '0',
  `id_director` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films_directors`
--

LOCK TABLES `films_directors` WRITE;
/*!40000 ALTER TABLE `films_directors` DISABLE KEYS */;
INSERT INTO `films_directors` VALUES (1,'1, 2'),(2,'3'),(3,'4'),(4,'5'),(5,'6'),(6,'7'),(7,'8'),(8,'9'),(9,'10'),(10,'11');
/*!40000 ALTER TABLE `films_directors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `films_producers`
--

DROP TABLE IF EXISTS `films_producers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `films_producers` (
  `id_film` int(11) NOT NULL DEFAULT '0',
  `id_producer` varchar(100) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `films_producers`
--

LOCK TABLES `films_producers` WRITE;
/*!40000 ALTER TABLE `films_producers` DISABLE KEYS */;
INSERT INTO `films_producers` VALUES (1,'1'),(2,'2'),(3,'3'),(4,'4, 5'),(5,'7'),(6,'8, 9'),(7,'10, 11'),(8,'12, 13'),(9,'14'),(10,'15, 16, 17, 18');
/*!40000 ALTER TABLE `films_producers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `producers`
--

DROP TABLE IF EXISTS `producers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `producers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_name` varchar(50) NOT NULL DEFAULT 'noname',
  `age` int(3) NOT NULL DEFAULT '0',
  `gender` varchar(1) NOT NULL DEFAULT '',
  `prod_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `producers`
--

LOCK TABLES `producers` WRITE;
/*!40000 ALTER TABLE `producers` DISABLE KEYS */;
INSERT INTO `producers` VALUES (1,'Robert Bigelow',74,'m',1),(2,'Peter L. Bergquist',65,'m',2),(3,'Elizabeth Avellan',59,'w',3),(4,'Maggie Renzi',59,'w',4),(5,'Sarah Green',59,'w',4),(6,'Martha Griffin',64,'w',4),(7,'Peter Frankfurt',47,'m',5),(8,'Jerry Bruckheimer',76,'m',6),(9,'Ridley Scott',82,'m',6),(10,'Lisa M. Hansen',45,'w',7),(11,'Paul Hertzberg',57,'m',7),(12,'Barbara Broccoli',59,'m',8),(13,'Michael Wilson',63,'m',8),(14,'Quincy Delight Jones',86,'m',9),(15,'Dwayne Johnson',47,'m',10),(16,'Dany Garcia',51,'w',10),(17,'Matt Tolmach',55,'m',10),(18,'Jake Kasdan',45,'m',10);
/*!40000 ALTER TABLE `producers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-03-01 17:53:27
