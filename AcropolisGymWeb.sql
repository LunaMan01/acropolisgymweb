-- MySQL dump 10.16  Distrib 10.1.33-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: acropolisgymweb
-- ------------------------------------------------------
-- Server version	10.1.33-MariaDB

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `NIP_Cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_Cliente` varchar(30) DEFAULT NULL,
  `apellido_Paterno` varchar(30) DEFAULT NULL,
  `apellido_Materno` varchar(30) DEFAULT NULL,
  `edad_Cliente` int(11) DEFAULT NULL,
  `genero` char(1) DEFAULT NULL,
  `peso_Cliente` float DEFAULT NULL,
  `problemas_Salud_Cliente` varchar(50) DEFAULT NULL,
  `nota_Cliente` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`NIP_Cliente`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Luis','Ceja','Luna',20,'M',78.3,'Nada','Nada'),(2,'Carlos','Solano','Vega',20,'M',75.3,'Nada','Nada'),(3,'Karla','Perez','Sanches',18,'F',65.5,'Nada','Nada'),(5,'Mariana','Moran','Guerrero',19,'F',69.1,'Nada','Nada');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `membresias`
--

DROP TABLE IF EXISTS `membresias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `membresias` (
  `id_Membresia` int(11) NOT NULL AUTO_INCREMENT,
  `NIP_Cliente` int(11) NOT NULL,
  `fecha_Inicio` varchar(10) DEFAULT NULL,
  `fecha_Fin` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_Membresia`),
  KEY `NIP_Cliente` (`NIP_Cliente`),
  CONSTRAINT `membresias_ibfk_1` FOREIGN KEY (`NIP_Cliente`) REFERENCES `clientes` (`NIP_Cliente`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `membresias`
--

LOCK TABLES `membresias` WRITE;
/*!40000 ALTER TABLE `membresias` DISABLE KEYS */;
INSERT INTO `membresias` VALUES (1,1,'2018-11-13','2018-12-13'),(2,1,'',''),(4,3,'',''),(5,2,'',''),(6,1,'',''),(7,2,'',''),(8,2,'',''),(9,3,'',''),(10,1,'',''),(11,1,'',''),(12,5,'',''),(13,2,'2018-11-14','2018-12-14'),(14,2,'',''),(15,5,'',''),(16,2,'',''),(17,5,'',''),(18,5,'',''),(19,5,'2018-11-21','2018-12-21'),(20,1,'',''),(21,2,'2018-12-19','2019-01-19'),(22,5,'','');
/*!40000 ALTER TABLE `membresias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas`
--

DROP TABLE IF EXISTS `notas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notas` (
  `id_Nota` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(20) DEFAULT NULL,
  `descripcion_Nota` varchar(500) DEFAULT NULL,
  `fechaRecordar` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id_Nota`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas`
--

LOCK TABLES `notas` WRITE;
/*!40000 ALTER TABLE `notas` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `productos` (
  `id_Producto` int(11) NOT NULL AUTO_INCREMENT,
  `descripcion_Producto` varchar(50) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `existencia` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_Producto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-11-13 23:57:47
