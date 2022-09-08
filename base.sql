-- MariaDB dump 10.19  Distrib 10.5.13-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: livret
-- ------------------------------------------------------
-- Server version	10.5.13-MariaDB

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
-- Table structure for table `asso_9`
--

DROP TABLE IF EXISTS `asso_9`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asso_9` (
  `codeetudiant` int(5) NOT NULL,
  `classecode` int(5) NOT NULL,
  PRIMARY KEY (`codeetudiant`,`classecode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asso_9`
--

LOCK TABLES `asso_9` WRITE;
/*!40000 ALTER TABLE `asso_9` DISABLE KEYS */;
INSERT INTO `asso_9` VALUES (1,4),(2,6),(3,12),(4,3),(5,9),(8,7),(9,13),(10,5),(11,16),(12,17),(13,12),(14,18),(16,1);
/*!40000 ALTER TABLE `asso_9` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `classe`
--

DROP TABLE IF EXISTS `classe`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `classe` (
  `classecode` int(5) NOT NULL,
  `Libelleclasse` varchar(35) DEFAULT NULL,
  `specialite` varchar(100) DEFAULT NULL,
  `Annee` int(11) DEFAULT NULL CHECK (`Annee` between 1 and 3),
  `Libellecourt` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`classecode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `classe`
--

LOCK TABLES `classe` WRITE;
/*!40000 ALTER TABLE `classe` DISABLE KEYS */;
INSERT INTO `classe` VALUES (1,'Brevet de technicien superieur','Services informatiques aux organisations',1,'BTS1SIO1'),(2,'Brevet de technicien superieur','Notariat',1,'BTS1NOT1'),(3,'Brevet de technicien superieur','Services informatiques aux organisations',2,'BTS2SIO'),(4,'Brevet de technicien superieur','Notariat',2,'BTS2NOT'),(5,'Brevet de technicien superieur','Support a l\'Action Manageriale',1,'BTS1SAM1'),(6,'Brevet de technicien superieur','Support a l\'Action Manageriale',2,'BTS2SAM'),(7,'Brevet de technicien superieur','Services et prestations des secteurs sanitaire et social',2,'BTS2SP3S'),(8,'Brevet de technicien superieur','Services et prestations des secteurs sanitaire et social',1,'BTS1SP3S1'),(9,'Brevet de technicien superieur','Comptabilite et gestion',1,'BTS1CG1'),(10,'Brevet de technicien superieur','Comptabilite et gestion',2,'BTS2CG'),(11,'Classe preparatoire','Economique et commerciale technologique',1,'ECT1'),(12,'Classe preparatoire','Economique et commerciale technologique',2,'ECT2'),(13,'DTS','Imagerie medicale',1,'DTS1'),(14,'DTS','Imagerie medicale',2,'DTS2'),(15,'DTS','Imagerie medicale',3,'DTS3'),(16,'Diplome','Comptabilite et Gestion',1,'DCG1'),(17,'Diplome','Comptabilite et Gestion',2,'DCG2'),(18,'Diplome','Comptabilite et Gestion',3,'DCG3');
/*!40000 ALTER TABLE `classe` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseignant` (
  `CodeEnseignant` int(11) NOT NULL AUTO_INCREMENT,
  `NOMENSEIGNANT` char(32) DEFAULT NULL,
  `PRENOMENSEIGNANT` char(32) DEFAULT NULL,
  PRIMARY KEY (`CodeEnseignant`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseignant`
--

LOCK TABLES `enseignant` WRITE;
/*!40000 ALTER TABLE `enseignant` DISABLE KEYS */;
INSERT INTO `enseignant` VALUES (1,'NOVALES','Corinne'),(2,'SAINSOULIEU','Stephane'),(3,'NOM_enseignant','Prenom_enseignant'),(4,'nom','prenom');
/*!40000 ALTER TABLE `enseignant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `enseigner` (
  `classecode` int(11) NOT NULL,
  `CodeEnseignant` int(11) NOT NULL,
  `CodeMatiere` int(11) NOT NULL,
  PRIMARY KEY (`classecode`,`CodeEnseignant`,`CodeMatiere`),
  KEY `FK_ENSEIGNER_ENSEIGNANT` (`CodeEnseignant`),
  KEY `FK_ENSEIGNER_MATIERE` (`CodeMatiere`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `enseigner`
--

LOCK TABLES `enseigner` WRITE;
/*!40000 ALTER TABLE `enseigner` DISABLE KEYS */;
INSERT INTO `enseigner` VALUES (1,1,1),(1,1,2),(1,1,4),(1,1,6),(1,1,10),(1,2,5),(1,2,7),(1,2,8),(2,1,10),(2,2,2),(2,2,4),(3,1,6),(3,2,1),(3,2,2),(3,2,4),(3,2,5),(3,2,7),(3,2,8),(4,1,10),(4,2,2),(4,2,4),(5,2,2),(5,2,4),(5,2,5),(6,2,2),(6,2,4),(6,2,5),(7,2,2),(7,2,4),(8,2,2),(8,2,4),(9,2,1),(9,2,5),(14,2,1),(18,2,3);
/*!40000 ALTER TABLE `enseigner` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `etudiant` (
  `codeetudiant` int(11) NOT NULL,
  `NOMETUDIANT` char(32) DEFAULT NULL,
  `PRENOMETUDIANT` char(32) DEFAULT NULL,
  `datedenaissance` char(32) DEFAULT NULL,
  `Numeronational` varchar(32) DEFAULT NULL,
  `Classe` char(32) DEFAULT NULL,
  PRIMARY KEY (`codeetudiant`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `etudiant`
--

LOCK TABLES `etudiant` WRITE;
/*!40000 ALTER TABLE `etudiant` DISABLE KEYS */;
INSERT INTO `etudiant` VALUES (1,'TEST1','PRENOM1','06/07/2000','080222882ZC','BTS2NOT'),(2,'TEST2','PRENOM2','26/06/2000','080222228JR','BTS2SAM'),(3,'TEST3','PRENOM3','24/05/2002','082080629RK','ECT2'),(4,'TEST4','PRENOM4','24/01/2002','220020064BD','BTS2SIO'),(5,'TEST5','PRENOM5','24/05/2002','244288244KD','BTS1CG1'),(6,'TEST6','PRENOM6','24/05/2002','080200060HC',''),(7,'TEST7','PRENOM7','24/05/2002','',''),(8,'TEST8','PRENOM8','24/05/2002','080222042EF','BTS2SP3S'),(9,'TEST9','PRENOM9','24/05/2002','062202462JK','DTS1'),(10,'TEST10','PRENOM10','24/05/2002','080464004DJ','BTS1SAM1'),(11,'TEST11','PRENOM11','24/05/2002','080642004BD','DCG1'),(12,'TEST12','PRENOM12','24/05/2002','060644840GH','DCG2'),(13,'TEST13','PRENOM13','24/05/2002','204060288CK','ECT2'),(14,'TEST14','PRENOM14','24/05/2002','080648680BK','DCG3'),(15,'TEST15','PRENOM15','24/05/2002','082022622EJ','PPPE1'),(16,'TEST16','PRENOM16','24/05/2002','264022260DF','BTS1SIO1'),(17,'TEST17','PRENOM17','24/05/2002','080480868FC','1TSCA');
/*!40000 ALTER TABLE `etudiant` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `matiere` (
  `CodeMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `LibMatiere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CodeMatiere`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `matiere`
--

LOCK TABLES `matiere` WRITE;
/*!40000 ALTER TABLE `matiere` DISABLE KEYS */;
INSERT INTO `matiere` VALUES (1,'Mathematiques'),(2,'Langue vivante1'),(3,'Comptabilite et audit'),(4,'Culture G'),(5,'Culture economique juridique et manageriale'),(6,'Bloc 1'),(7,'Bloc 2: SLAM/SISR'),(8,'Bloc 3: Cybersecurite'),(9,'Droit general et droit notarial'),(10,'CEJM Appliquee'),(11,'Langue vivante 2');
/*!40000 ALTER TABLE `matiere` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `note_etudiant`
--

DROP TABLE IF EXISTS `note_etudiant`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `note_etudiant` (
  `NoteCode` int(11) NOT NULL AUTO_INCREMENT,
  `Semestre1` varchar(5) DEFAULT NULL,
  `Semestre2` varchar(5) DEFAULT NULL,
  `Moyenne` varchar(5) DEFAULT NULL,
  `Appreciation` varchar(1000) DEFAULT NULL,
  `Semestre3` varchar(5) DEFAULT NULL,
  `Semestre4` varchar(5) DEFAULT NULL,
  `codeetudiant` int(11) DEFAULT NULL,
  `codematiere` int(11) DEFAULT NULL,
  `classecode` int(11) DEFAULT NULL,
  PRIMARY KEY (`NoteCode`),
  UNIQUE KEY `Unote` (`codeetudiant`,`codematiere`,`classecode`)
) ENGINE=InnoDB AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `note_etudiant`
--

LOCK TABLES `note_etudiant` WRITE;
/*!40000 ALTER TABLE `note_etudiant` DISABLE KEYS */;
INSERT INTO `note_etudiant` VALUES (1,'9.5','15.7','12.6',NULL,NULL,NULL,16,10,1),(2,'15','12','13.5',NULL,NULL,NULL,16,7,1),(3,'14','18','16',NULL,NULL,NULL,1,10,4),(4,'12','16','14',NULL,NULL,NULL,1,4,4),(5,'11','12','11.5',NULL,NULL,NULL,2,5,6),(6,'11','3','7',NULL,NULL,NULL,5,1,9),(7,'','','15','',NULL,NULL,16,8,1),(8,'14.5','12','13.25','Bien',NULL,NULL,16,1,1),(9,'13','11','12',NULL,NULL,NULL,1,2,4),(10,'1.3','5.6','3.45','',NULL,NULL,16,4,1),(11,'18','11','14.5','Bien.',NULL,NULL,16,2,1),(12,'10','11','10.5',NULL,NULL,NULL,16,6,1),(13,'1','2','1.5',NULL,NULL,NULL,16,5,1);
/*!40000 ALTER TABLE `note_etudiant` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-05 15:44:33
