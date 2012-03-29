-- MySQL dump 10.13  Distrib 5.1.61, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: ad2012
-- ------------------------------------------------------
-- Server version	5.1.61-0ubuntu0.11.10.1

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
-- Table structure for table `accessories`
--

DROP TABLE IF EXISTS `accessories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accessories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `space` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accessories`
--

LOCK TABLES `accessories` WRITE;
/*!40000 ALTER TABLE `accessories` DISABLE KEYS */;
INSERT INTO `accessories` VALUES (1,'Fire Extinguisher',0,25,100,1,'Automatic fire reduction system'),(2,'Fuzzy Dice',0,0,5,0,':)'),(3,'Night Vision',1,75,350,1,'Improves visibility at night for one gunner or the driver.');
/*!40000 ALTER TABLE `accessories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `accessories_vehicles`
--

DROP TABLE IF EXISTS `accessories_vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accessories_vehicles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(10) unsigned NOT NULL,
  `accessory_id` int(10) unsigned NOT NULL,
  `hp` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicle_id` (`vehicle_id`,`accessory_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accessories_vehicles`
--

LOCK TABLES `accessories_vehicles` WRITE;
/*!40000 ALTER TABLE `accessories_vehicles` DISABLE KEYS */;
INSERT INTO `accessories_vehicles` VALUES (4,11,1,1),(5,12,1,1),(6,13,1,1),(7,13,3,1);
/*!40000 ALTER TABLE `accessories_vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bodies`
--

DROP TABLE IF EXISTS `bodies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bodies` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `maxWeight` int(10) unsigned NOT NULL,
  `maxSpace` int(10) unsigned NOT NULL,
  `maxCargoSpace` int(10) unsigned NOT NULL,
  `armorCost` int(10) unsigned NOT NULL,
  `armorWeight` int(10) unsigned NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bodies`
--

LOCK TABLES `bodies` WRITE;
/*!40000 ALTER TABLE `bodies` DISABLE KEYS */;
INSERT INTO `bodies` VALUES (1,'Sub-Compact',1600,8,0,10,5,800),(2,'Compact',1900,10,0,12,6,1000),(3,'Mid Size',2200,13,0,15,7,1200),(4,'Full Size',2500,16,0,18,8,1450),(5,'Luxury Sedan',2900,20,0,22,9,1950),(6,'SM Station Wagon',2300,12,4,15,8,1300),(7,'LG Station Wagon',2600,14,6,18,9,1600),(8,'SM Pickup',2800,10,10,12,6,1200),(9,'LG Pickup',3100,14,14,15,8,1500),(10,'Van',3100,22,6,20,10,1550);
/*!40000 ALTER TABLE `bodies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `characters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `cash` int(11) NOT NULL DEFAULT '0',
  `health` smallint(6) NOT NULL DEFAULT '100',
  `drivingSkill` int(11) NOT NULL DEFAULT '0',
  `mechanicSkill` int(11) NOT NULL DEFAULT '0',
  `gunnerSkill` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `characters`
--

LOCK TABLES `characters` WRITE;
/*!40000 ALTER TABLE `characters` DISABLE KEYS */;
/*!40000 ALTER TABLE `characters` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `powerplants`
--

DROP TABLE IF EXISTS `powerplants`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `powerplants` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `space` int(10) unsigned NOT NULL,
  `weight` int(10) unsigned NOT NULL,
  `power` int(10) unsigned NOT NULL,
  `cost` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `powerplants`
--

LOCK TABLES `powerplants` WRITE;
/*!40000 ALTER TABLE `powerplants` DISABLE KEYS */;
INSERT INTO `powerplants` VALUES (1,'Economy',3,400,600,350,5),(2,'Small',3,500,800,750,6),(3,'Medium',4,700,1400,950,8),(4,'Large',5,900,1700,1300,10),(5,'Heavy Duty',6,1000,1900,2500,12),(6,'Super Duty',7,1100,2250,4000,14),(7,'Cobra Jet',7,1150,2600,7000,14);
/*!40000 ALTER TABLE `powerplants` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tires`
--

DROP TABLE IF EXISTS `tires`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tires` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `weight` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `handlingMod` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tires`
--

LOCK TABLES `tires` WRITE;
/*!40000 ALTER TABLE `tires` DISABLE KEYS */;
INSERT INTO `tires` VALUES (1,'Standard',30,50,6,-1),(2,'Performance',35,75,7,1),(3,'Heavy-Duty',40,70,9,0),(4,'Puncture Resistant',35,90,10,0),(5,'Solid',60,105,14,-1);
/*!40000 ALTER TABLE `tires` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `hash` varchar(40) DEFAULT NULL,
  `created` datetime NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'kurt','75d7a070f6a93475481550944198932307592e0b',NULL,'2012-03-28 16:43:16','klakin2003@yahoo.com');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `body_id` int(10) unsigned NOT NULL,
  `crew` smallint(5) unsigned NOT NULL,
  `powerplant_id` int(10) unsigned NOT NULL,
  `plantHp` int(11) NOT NULL,
  `plantCharge` int(11) NOT NULL,
  `chassis_id` smallint(1) NOT NULL,
  `suspension_id` smallint(1) NOT NULL,
  `tire_id` int(10) unsigned NOT NULL,
  `tireLFhp` int(11) NOT NULL,
  `tireRFhp` int(11) NOT NULL,
  `tireLBhp` int(11) NOT NULL,
  `tireLB2hp` int(11) NOT NULL,
  `tireRBhp` int(11) NOT NULL,
  `tireRB2hp` int(11) NOT NULL,
  `armorF` int(11) NOT NULL,
  `armorR` int(11) NOT NULL,
  `armorB` int(11) NOT NULL,
  `armorL` int(11) NOT NULL,
  `armorT` int(11) NOT NULL,
  `armorU` int(11) NOT NULL,
  `hpF` int(11) NOT NULL,
  `hpB` int(11) NOT NULL,
  `hpR` int(11) NOT NULL,
  `hpL` int(11) NOT NULL,
  `hpT` int(11) NOT NULL,
  `hpU` int(11) NOT NULL,
  `cost` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (11,'Little Stinger',0,1,0,2,0,0,3,2,2,7,7,7,0,7,0,36,30,35,30,10,10,36,35,30,30,10,10,5010),(12,'Bad Boy',0,2,0,3,8,100,3,2,3,9,9,9,0,9,0,34,25,30,25,10,10,34,30,25,25,10,10,5738),(13,'Ghetto Blaster',0,5,1,4,10,100,4,3,4,10,10,10,0,10,0,40,26,35,26,10,10,40,35,26,26,10,10,14094);
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles_weapons`
--

DROP TABLE IF EXISTS `vehicles_weapons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicles_weapons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(10) unsigned NOT NULL,
  `weapon_id` int(10) unsigned NOT NULL,
  `position` varchar(1) NOT NULL,
  `ammo` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `vehicle_id` (`vehicle_id`),
  KEY `weapon_id` (`weapon_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles_weapons`
--

LOCK TABLES `vehicles_weapons` WRITE;
/*!40000 ALTER TABLE `vehicles_weapons` DISABLE KEYS */;
INSERT INTO `vehicles_weapons` VALUES (9,11,5,'F',10,4),(10,11,1,'B',20,3),(11,12,4,'F',10,5),(12,12,1,'B',20,3),(13,13,7,'F',10,6),(14,13,2,'B',20,4),(15,13,3,'R',5,4),(16,13,3,'L',5,4);
/*!40000 ALTER TABLE `vehicles_weapons` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `weapons`
--

DROP TABLE IF EXISTS `weapons`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `weapons` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `space` smallint(5) unsigned NOT NULL,
  `weight` int(10) unsigned NOT NULL,
  `ammo` int(10) unsigned NOT NULL,
  `damageL` int(10) unsigned NOT NULL,
  `damageH` int(10) unsigned NOT NULL,
  `type` varchar(1) NOT NULL,
  `hp` int(10) unsigned NOT NULL,
  `chanceToHit` smallint(6) NOT NULL,
  `failureRate` smallint(6) NOT NULL,
  `range` int(11) NOT NULL,
  `cost` int(10) unsigned NOT NULL,
  `ammoCost` int(10) unsigned NOT NULL,
  `description` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `weapons`
--

LOCK TABLES `weapons` WRITE;
/*!40000 ALTER TABLE `weapons` DISABLE KEYS */;
INSERT INTO `weapons` VALUES (1,'Light Machine Gun',1,75,20,1,8,'A',3,75,5,10,250,2,'Standard Light Machine Gun.  Fires a set burst.'),(2,'Heavy Machine Gun',2,125,20,3,14,'A',4,75,5,11,450,4,'Larger caliber than light MG.  Non selectable burst size.'),(3,'Mini Gun',1,125,5,5,18,'A',4,80,3,9,700,10,'Multi Barrel Gatling Gun.  High cyclic rate.'),(4,'Vulcan Gatling Gun',3,175,10,5,20,'A',5,80,3,11,550,4,'Multi Barrel Gatling Gun.  Lower cyclic rate than Mini-gun, but larger caliber. '),(5,'Light Cannon',2,115,10,8,12,'B',4,60,3,8,500,5,'Light cannon does burst damage.'),(6,'Medium Cannon',3,175,10,16,20,'B',5,60,3,8,700,6,'Larger caliber than light cannon.  Does Burst damage.'),(7,'Heavy Cannon',4,220,10,22,26,'B',6,60,4,7,850,7,'Heavy cannon deos burst damage.  Can\'t be mounted in turrets or on sides of smaller vehicles.');
/*!40000 ALTER TABLE `weapons` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2012-03-28 19:08:01
