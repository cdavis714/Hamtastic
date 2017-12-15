-- MySQL dump 10.13  Distrib 5.5.58, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: hamtastic
-- ------------------------------------------------------
-- Server version	5.5.58-0ubuntu0.14.04.1

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
-- Table structure for table `Clogin`
--

DROP TABLE IF EXISTS `Clogin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Clogin` (
  `C_ID` int(10) unsigned DEFAULT NULL,
  `Password` varchar(50) NOT NULL,
  KEY `C_ID` (`C_ID`),
  CONSTRAINT `Clogin_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `Customer` (`Customer_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Clogin`
--

LOCK TABLES `Clogin` WRITE;
/*!40000 ALTER TABLE `Clogin` DISABLE KEYS */;
INSERT INTO `Clogin` VALUES (1,'2f5c29a9031c55b67782cf854bde7a1d'),(2,'f6bab693a717d85161daee340d48aa92'),(3,'ac73396a16db5cbdbcd12afce17430bd'),(4,'2b4ae288a819f2bcf8e290332c838148'),(5,'2f5c29a9031c55b67782cf854bde7a1d'),(7,'5f4dcc3b5aa765d61d8327deb882cf99'),(8,'2f5c29a9031c55b67782cf854bde7a1d'),(9,'2f5c29a9031c55b67782cf854bde7a1d'),(10,'2b4ae288a819f2bcf8e290332c838148'),(11,'5f4dcc3b5aa765d61d8327deb882cf99'),(12,'d5e3507401b07b41e77b9508fb21a58b'),(5,'2f5c29a9031c55b67782cf854bde7a1d'),(16,'2f5c29a9031c55b67782cf854bde7a1d');
/*!40000 ALTER TABLE `Clogin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Customer`
--

DROP TABLE IF EXISTS `Customer`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Customer` (
  `Customer_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Athlete` varchar(150) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `School_name` varchar(30) NOT NULL,
  PRIMARY KEY (`Customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Customer`
--

LOCK TABLES `Customer` WRITE;
/*!40000 ALTER TABLE `Customer` DISABLE KEYS */;
INSERT INTO `Customer` VALUES (1,'Connor Davis','cdavis46@students.towson.edu','Towson'),(2,'John Doe','jdoe@testlogin.edu','John Doe High'),(3,'Jane Doe','jane.doe@testlogin.edu','Jane Doe High'),(4,'Katherine Bridenstine','kbride1@students.towson.edu','Towson'),(5,'Connor Other','connordavis714@gmail.com','Other'),(7,'Andrae Calma','a.calma24@gmail.com','Towson University'),(8,'Ryan Oechsler','roechs1@students.towson.edu','Towson University'),(9,'Jon Snow','jonsnow828@yahoo.com','Winter is Coming'),(10,'L.A. Fitness','hello.com','Towson'),(11,'L.A. Fitness','lafitnesslaurel@laf.com','Laurel'),(12,'Rachel Green','rgreen@friends.com','Friends'),(16,'Rebecca Broadwater','broadre7781@gmail.com','Towson');
/*!40000 ALTER TABLE `Customer` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Posts`
--

DROP TABLE IF EXISTS `Posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Posts` (
  `C_ID` int(10) unsigned DEFAULT NULL,
  `Post_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  `Content` varchar(200) NOT NULL,
  PRIMARY KEY (`Post_id`),
  KEY `C_ID` (`C_ID`),
  CONSTRAINT `Posts_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `Customer` (`Customer_ID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Posts`
--

LOCK TABLES `Posts` WRITE;
/*!40000 ALTER TABLE `Posts` DISABLE KEYS */;
INSERT INTO `Posts` VALUES (4,2,'2017-12-14','Who wants to go for a run with me later tonight?!'),(1,3,'2017-12-14','I tore my hamstring!!! I need advice on how to stretch it!!! '),(7,4,'2017-12-14','I skipped leg day :('),(8,5,'2017-12-14','Just got back home from my run!'),(9,6,'2017-12-14','Someone please find me the will to live.....'),(12,7,'2017-12-15','Winter is coming, wear warm clothing!');
/*!40000 ALTER TABLE `Posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Profile`
--

DROP TABLE IF EXISTS `Profile`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Profile` (
  `C_ID` int(10) unsigned DEFAULT NULL,
  `Bio` varchar(300) NOT NULL,
  `Picture` longblob,
  KEY `C_ID` (`C_ID`),
  CONSTRAINT `Profile_ibfk_1` FOREIGN KEY (`C_ID`) REFERENCES `Customer` (`Customer_ID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Profile`
--

LOCK TABLES `Profile` WRITE;
/*!40000 ALTER TABLE `Profile` DISABLE KEYS */;
INSERT INTO `Profile` VALUES (8,'sports are fun! i love sports!','Baltimore_Ravens_logo.png'),(7,'Me at work. Help me','corgi.jpg'),(7,'Gains 4 dayz','dextermeme.jpg'),(1,'new bio again','');
/*!40000 ALTER TABLE `Profile` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Requested_Accounts`
--

DROP TABLE IF EXISTS `Requested_Accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Requested_Accounts` (
  `Request_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Company_school` varchar(30) NOT NULL,
  `phone_num` varchar(10) NOT NULL,
  `Reasoning` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`Request_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Requested_Accounts`
--

LOCK TABLES `Requested_Accounts` WRITE;
/*!40000 ALTER TABLE `Requested_Accounts` DISABLE KEYS */;
/*!40000 ALTER TABLE `Requested_Accounts` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-15  2:14:31
