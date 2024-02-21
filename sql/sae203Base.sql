-- MySQL dump 10.19  Distrib 10.3.36-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sae203Base
-- ------------------------------------------------------
-- Server version	10.3.36-MariaDB-0+deb10u2

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
-- Table structure for table `createur`
--

DROP TABLE IF EXISTS `createur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `createur` (
  `createur_id` int(11) NOT NULL AUTO_INCREMENT,
  `createur_nom` varchar(40) NOT NULL,
  `createur_prenom` varchar(40) NOT NULL,
  `createur_nationalite` varchar(40) NOT NULL,
  PRIMARY KEY (`createur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `createur`
--

LOCK TABLES `createur` WRITE;
/*!40000 ALTER TABLE `createur` DISABLE KEYS */;
INSERT INTO `createur` VALUES (1,'Satoschi','Nakamoto','Inconnus'),(2,'Vitalik','Buterin','Russe'),(3,'Shibaswap','Community','US');
/*!40000 ALTER TABLE `createur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `crypto`
--

DROP TABLE IF EXISTS `crypto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `crypto` (
  `crypto_id` int(11) NOT NULL AUTO_INCREMENT,
  `crypto_nom` varchar(40) NOT NULL,
  `crypto_annee` varchar(20) NOT NULL,
  `crypto_prix` double NOT NULL,
  `crypto_img` varchar(400) NOT NULL,
  `crypto_volume_totale` varchar(80) NOT NULL,
  `crypto_resumer` text NOT NULL,
  `_auteur_id` int(11) NOT NULL,
  PRIMARY KEY (`crypto_id`),
  KEY `creer` (`_auteur_id`),
  CONSTRAINT `creer` FOREIGN KEY (`_auteur_id`) REFERENCES `createur` (`createur_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `crypto`
--

LOCK TABLES `crypto` WRITE;
/*!40000 ALTER TABLE `crypto` DISABLE KEYS */;
INSERT INTO `crypto` VALUES (1,'Bitcoin','2009',24000,'','21 millions','Le Bitcoin est une monnaie numérique qui n\'est pas contrôlée par une autorité centrale et est gérée par un grand nombre d\'ordinateurs connectés à Internet. Cela permet des transactions moins chères, plus sécurisées et plus confidentielles.',1),(2,'Ethereum','2015',1700,'','130 millions','Ethereum est une plateforme open-source qui utilise une blockchain pour exécuter des contrats intelligents et des applications décentralisées. Sa cryptomonnaie native, appelée Ether (ETH), est utilisée pour payer les frais de transaction sur le réseau Ethereum.',2),(3,'Shiba Inu','2020',0.000012,'','394 billions','Le Shiba Inu Crypto est une crypto-monnaie créée en 2020 pour servir de pièce d\'utilité pour une communauté. Le projet a connu une croissance rapide de sa communauté et de sa capitalisation boursière, mais son prix est connu pour être très volatil.',3);
/*!40000 ALTER TABLE `crypto` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-02  8:59:04
