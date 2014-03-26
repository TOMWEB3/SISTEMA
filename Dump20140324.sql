CREATE DATABASE  IF NOT EXISTS `DBTOM` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `DBTOM`;
-- MySQL dump 10.13  Distrib 5.6.13, for linux-glibc2.5 (x86_64)
--
-- Host: 127.0.0.1    Database: DBTOM
-- ------------------------------------------------------
-- Server version	5.5.36-MariaDB

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
-- Table structure for table `QUADROS_CLINICOS`
--

DROP TABLE IF EXISTS `QUADROS_CLINICOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `QUADROS_CLINICOS` (
  `COD_QUADRO_CLINICO` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_QUADRO_CLINICO` varchar(40) NOT NULL,
  `DSC_QUADRO_CLINICO` text,
  PRIMARY KEY (`COD_QUADRO_CLINICO`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `QUADROS_CLINICOS`
--

LOCK TABLES `QUADROS_CLINICOS` WRITE;
/*!40000 ALTER TABLE `QUADROS_CLINICOS` DISABLE KEYS */;
INSERT INTO `QUADROS_CLINICOS` VALUES (1,'Quadro 1 - AGRESSÃO',NULL),(2,'Quadro 2 - ASMA',NULL),(3,'Quadro 3 - AUTO-AGRESSÃO',NULL),(4,'Quadro 4 - BEBÊ QUE CHORA',NULL),(5,'Quadro 5 - CATÁSTROFES PRIMARIA',NULL),(6,'Quadro 6 - CATÁSTROFES SEGUNDARIA',NULL),(7,'Quadro 7 - CEFALEIA',NULL),(8,'Quadro 8 - COMPORTAMENTO ESTRANHO',NULL),(9,'Quadro 9 - CONVULSÕES',NULL),(10,'Quadro 10 - CORPO ESTRANHO',NULL),(11,'Quadro 11 - CRIANÇA DIFCULDADE LOCOMOÇÃO',NULL),(12,'Quadro 12 - CRIANÇA NÃO SE SENTE BEM',NULL),(13,'Quadro 13 - CRIANÇA IRRITADA',NULL),(14,'Quadro 14 - DIABETES',NULL),(15,'Quadro 15 - DIARREIA',NULL),(16,'Quadro 16 - DISPNEIA',NULL),(17,'Quadro 17 - DISPNEIA NA CRIANÇA',NULL),(18,'Quadro 18 - DOENÇA HEMATOLÓGICA',NULL),(19,'Quadro 19 - DOENÇA MENTAL',NULL),(20,'Quadro 20 - DST',NULL),(21,'Quadro 21 - DOR ABDOMINAL',NULL),(22,'Quadro 22 - DOR ABDOMINAL NA CRIANÇA',NULL),(23,'Quadro 23 - DOR CERVICAL',NULL),(24,'Quadro 24 - DOR DE GARGANTA',NULL),(25,'Quadro 25 - DOR LOMBAR',NULL),(26,'Quadro 26 - DOR TESTICULAR',NULL),(27,'Quadro 27 - DOR TORÁCICA ',NULL),(28,'Quadro 28 - EMBRIAGUEZ APARENTE',NULL),(29,'Quadro 29 - ERUPÇÕ CUTÂNEAS',NULL),(30,'Quadro 30 - ESTADO DE INCONSCIÊNCIA',NULL),(34,'Quadro 31 - EXPOSIÇÃO A QUÍMICOS',NULL),(35,'Quadro 32 - FERIDAS',NULL),(36,'Quadro 33 - GRANDE TRAUMATISMO',NULL),(37,'Quadro 34 - GRAVIDEZ',NULL),(38,'Quadro 35 - HEMORRAGIA GASTRO-INTESTINAL',NULL),(39,'Quadro 36 - HEMORRAGIA VAGINAL',NULL),(40,'Quadro 37 - INDISPOSIÇÃO NO ADULTO',NULL),(41,'Quadro 38 - INFECÇÕES LOCAIS E ABCESSOS',NULL),(42,'Quadro 39 - LESÃO TORACO-ABDOMINAL ',NULL),(43,'Quadro 40 - MORDEDURAS E PICADAS',NULL),(44,'Quadro 41 - PAIS PREOCUPADOS',NULL),(45,'Quadro 42 - PROBLEMAS ESTOMATOLÓGICOS',NULL),(46,'Quadro 43 - PROBLEMAS NASAIS',NULL),(47,'Quadro 44 - PROBLEMAS NOS MENBROS',NULL),(48,'Quadro 45 - PROBLEMAS OFTALMOLÓGICOS',NULL),(49,'Quadro 46 - PROBLEMAS OUVIDOS',NULL),(50,'Quadro 47 - PROBLEMAS URINÁRIOS',NULL),(51,'Quadro 48 - QUEDA',NULL),(52,'Quadro 49 - QUEIMADURAS 1-2-3 GRAU',NULL),(53,'Quadro 50 - SOBREDOSAGEM E ENVENENAMENTO',NULL),(54,'Quadro 51 - TRAUMATISMO CRANIOENCEFÁLICO',NULL),(55,'Quadro 52 - VÓMITOS',NULL);
/*!40000 ALTER TABLE `QUADROS_CLINICOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SINTOMAS`
--

DROP TABLE IF EXISTS `SINTOMAS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SINTOMAS` (
  `COD_SINTOMA` int(11) NOT NULL AUTO_INCREMENT,
  `SINTOMA` varchar(40) NOT NULL,
  `CLS_SINTOMA` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`COD_SINTOMA`)
) ENGINE=InnoDB AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SINTOMAS`
--

LOCK TABLES `SINTOMAS` WRITE;
/*!40000 ALTER TABLE `SINTOMAS` DISABLE KEYS */;
INSERT INTO `SINTOMAS` VALUES (1,'Compromisso da via aérea','Vermelho'),(2,'Insuficiência respiratória','Vermelho'),(3,'Grande hemorragia incontolável ','Laranja'),(4,'Crise convulsiva','Laranja'),(5,'Choque','Vermelho'),(6,'Trauma maior','Laranja'),(7,'Coma','Vermelho'),(8,'Parada cardio-respiratória','Vermelho'),(9,'Trabalho de parto acima 20 semanas','Amarelo'),(10,'Dor severa','Laranja'),(11,'Dispneia aguda','Laranja'),(12,'Alteração do estado de consciência','Laranja'),(13,'Alto risco de nova auto-agressão','Laranja'),(14,'Dor moderada','Amarelo'),(15,'História inapropriada','Amarelo'),(16,'Pequena hemorragia incontrolável','Amarelo'),(17,'Risco moderado de alto-agressão','Amarelo'),(18,'Angustia marcada','Amarelo'),(19,'Novos sintomas e/ou sinais neurológicos','Amarelo'),(20,'Dor','Verde'),(21,'Edema','Verde'),(22,'Deformação','Verde'),(23,'Problema recente','Verde'),(24,'Respiração ineficaz','Vermelho'),(25,'Criança não reativa','Vermelho'),(26,'Incapacidade de falar frases completas','Laranja'),(27,'Taquicardia acentuada','Laranja'),(28,'Perfusão muito baixo','Laranja'),(29,'Saturação de O2 muito baixo','Laranja'),(30,'Perfusão baixo','Amarelo'),(31,'Saturação de O2 baixo','Amarelo'),(32,'História significativa de asma','Amarelo'),(33,'Asma sem melhoria com remedio habitual','Amarelo'),(34,'Broncoespasmo','Verde'),(35,'Provável infecção respiratória','Verde'),(36,'Mecanismo de lesão','Laranja'),(37,'História de perda da consciência','Amarelo'),(38,'História significativa de incidente','Laranja'),(39,'Hemorragia exsanguinante','Vermelho'),(40,'Convulsão recente','Vermelho'),(41,'Só responde à voz e à dor','Laranja'),(42,'Erupção cutânea desconhecida','Laranja'),(43,'Prostrado','Laranja'),(44,'Cianótico','Laranja'),(45,'Criança Febril','Laranja'),(46,'Inconsolável pelos pais','Amarelo'),(47,'Choro ininterrupto e prolongado','Amarelo'),(48,'Incapaz de se alimentar','Amarelo'),(49,'Comportamento estranho','Verde'),(50,'Febrícula','Verde'),(51,'Anda','Verde'),(52,'Respira após abertura via aérea','Laranja'),(53,'Frequencia respiratória > 29','Verde'),(54,'Frequencia repiratória < 10','Verde'),(55,'Preenchimento capilar > 2 seg.','Vermelho'),(56,'Pulso > 120','Vermelho'),(57,'Cefaleia inicio repentino','Laranja'),(58,'Perda subta da visão','Laranja'),(60,'Sinais de meningismo','Laranja'),(61,'Adulto febril','Amarelo'),(62,'Sinais neurologicos focais','Amarelo'),(64,'Couro cabeludo doloroso','Amarelo'),(65,'Febril','Amarelo'),(66,'Hipoglicémia','Vermelho'),(67,'História sobredosagem ou envenenamento','Laranja'),(68,'Alto risco de agressão a terceiros','Laranja'),(69,'Traumatismo cranioencefálico','Amarelo'),(70,'Risco moderado de agressão a terceiros','Amarelo'),(71,'História psiquiátrica significativa','Amarelo'),(72,'História de T.C.E','Amarelo'),(73,'Cefaleia','Verde'),(74,'Estridor respiratório','Vermelho'),(75,'Traumatismo ocular penetrante','Laranja'),(76,'Inflamação local','Verde'),(77,'Infecção local','Verde'),(78,'Coprometimento vascular','Laranja'),(79,'Dor nas articulações em movimento','Amarelo'),(80,'Incapacidade de suportar peso','Amarelo'),(81,'Artuculação quente','Amarelo'),(82,'Não responde aos estimulos dos pais','Laranja'),(83,'Hipotermia','Laranja'),(84,'Retenção urinária','Amarelo'),(85,'Não alimenta','Amarelo'),(86,'Incapacidade de distração','Amarelo'),(87,'Hiperglicemia com cetose','Laranja'),(88,'Hiperglicemia','Amarelo'),(89,'Vómitos persistentes','Amarelo'),(90,'Vómitos','Verde'),(91,'Hematemeses - vómito com sangue','Laranja'),(92,'Hematoquésias, melenas ou rectorragias','Laranja'),(93,'História significativa de diarreia','Amarelo'),(94,'História fezes pretas/ensanguentadas','Amarelo'),(95,'História de hematemeses','Amarelo'),(96,'Sinais de desidratação','Amarelo'),(97,'Dor pré-cordial','Laranja'),(98,'Dispneia inicio agudo pós-traumático','Laranja'),(99,'Pulso anormal','Laranja'),(100,'Exaustão','Laranja'),(101,'Dor pleurítica','Amarelo'),(102,'Traumatismo torácico','Verde'),(103,'Baba-se','Vermelho'),(104,'Trabalho respiratório aumentado','Laranja'),(105,'História hematológica significativa','Laranja'),(106,'Imunosupressão conhecida','Amarelo'),(107,'Comportamento disruptivo','Amarelo'),(108,'Dor testicular','Amarelo'),(109,'Exantema eritematoso ou bulhoso','Amarelo'),(110,'Muito febril','Laranja'),(111,'Dor irradiando para a região dorsal','Laranja'),(112,'Dor com irradiação ao ombro','Amarelo'),(113,'Possível gravidez','Amarelo'),(114,'Massa abdominal visível','Amarelo'),(115,'Traumatismo direto da região cervical','Amarelo'),(116,'Histórico de viagem ao estrangeiro','Amarelo'),(117,'instalação súbita','Amarelo'),(118,'Dor abdominal','Amarelo'),(119,'Traumatismo direto da região lombar','Amarelo'),(120,'Incapacidade de andar','Amarelo'),(121,'Idade < 25 anos','Laranja'),(122,'Gangrena escrotal','Laranja'),(123,'Cólica','Amarelo'),(124,'Celulite escrotal','Amarelo'),(125,'Traumatismo escrotal','Verde'),(126,'Alteração consciencia n. comp.  alcool','Laranja'),(127,'Alteração consciencia comp. ao alcool','Amarelo'),(129,'Traumatismo recente','Verde'),(130,'Dor severa/prurido','Laranja'),(131,'História significativa de alergias','Laranja'),(132,'Edema da face','Laranja'),(133,'Edema da lingua','Laranja'),(134,'Dor moderada/prurido','Amarelo'),(135,'Dor/prurido','Verde'),(136,'Lesão ocular','Vermelho'),(138,'Lesão inalação substância quimica','Laranja'),(139,'Mortalidade moderada','Amarelo'),(140,'Lesão','Verde'),(141,'Comprometimento vascular distal','Laranja'),(142,'História clinica significativa','Amarelo'),(143,'Apresentação de segmentos fetais','Vermelho'),(145,'Prolapso do cordão umbilical','Vermelho'),(146,'História de convulsão','Amarelo'),(147,'Parto em curso','Laranja'),(148,'Hemorragia vaginal intensa','Laranja'),(149,'Perda sanguinea gestação < 24 sem.','Laranja'),(150,'História de traumatismo','Amarelo'),(151,'Pressão arterial elevada','Amarelo'),(152,'Hemorragia vaginal','Amarelo'),(153,'Gestação > 24 semanas','Laranja'),(154,'Traumatismo vaginal','Amarelo'),(155,'Menstruação normal','Verde'),(156,'História de risco especial de infecção','Laranja'),(157,'Enfisema subcutaneo','Laranja'),(158,'Comprometimento vascular','Laranja'),(159,'Evisceração de orgãos','Laranja'),(160,'Não urina','Amarelo'),(161,'Avulsão dentária recente','Amarelo'),(162,'Deformação grosseira','Amarelo'),(163,'História significativa','Amarelo'),(165,'Distúrbio hemorrágico','Verde'),(166,'Pele critica','Laranja'),(167,'Fratura exposta','Amarelo'),(168,'Lesão recente','Verde'),(169,'Lesão ocular química','Vermelho'),(170,'Perda total súbita de visão','Laranja'),(171,'Olho vermelho','Verde'),(172,'Hematoma auricular','Amarelo'),(173,'Vertigens','Amarelo'),(174,'Quente','Amarelo'),(175,'Muito quente','Laranja'),(176,'Perda aguda de audição','Verde'),(177,'Priapismo','Laranja'),(178,'Hematuria visível','Amarelo'),(179,'Disúria','Verde'),(180,'Lesão por inalação','Laranja'),(181,'Inalação de fumaça','Amarelo'),(182,'Lesão eletrica','Amarelo'),(183,'Queimadura química','Amarelo'),(184,'Hematoma do couro cabeludo','Verde'),(185,'Adulto muito febril','Laranja'),(186,'Acuidade visual reduzida','Amarelo'),(187,'Alta mortalidade','Laranja');
/*!40000 ALTER TABLE `SINTOMAS` ENABLE KEYS */;
UNLOCK TABLES;
/*!50003 SET @saved_cs_client      = @@character_set_client */ ;
/*!50003 SET @saved_cs_results     = @@character_set_results */ ;
/*!50003 SET @saved_col_connection = @@collation_connection */ ;
/*!50003 SET character_set_client  = utf8 */ ;
/*!50003 SET character_set_results = utf8 */ ;
/*!50003 SET collation_connection  = utf8_general_ci */ ;
/*!50003 SET @saved_sql_mode       = @@sql_mode */ ;
/*!50003 SET sql_mode              = '' */ ;
DELIMITER ;;
/*!50003 CREATE*/ /*!50017 DEFINER=`root`@`localhost`*/ /*!50003 TRIGGER TAI_SINTOMAS
BEFORE INSERT ON SINTOMAS
FOR EACH ROW 
INSERT INTO SINTOMAS( COD_SINTOMA, SINTOMA, CLS_SINTOMA) VALUES(NEW.COD_SINTOMA, NEW.SINTOMA, NEW.CLS_SINTOMA) */;;
DELIMITER ;
/*!50003 SET sql_mode              = @saved_sql_mode */ ;
/*!50003 SET character_set_client  = @saved_cs_client */ ;
/*!50003 SET character_set_results = @saved_cs_results */ ;
/*!50003 SET collation_connection  = @saved_col_connection */ ;

--
-- Table structure for table `SINTOMAS_LOG`
--

DROP TABLE IF EXISTS `SINTOMAS_LOG`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SINTOMAS_LOG` (
  `COD_SINTOMA` int(11) DEFAULT NULL,
  `SINTOMA` varchar(40) DEFAULT NULL,
  `CLS_SINTOMA` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SINTOMAS_LOG`
--

LOCK TABLES `SINTOMAS_LOG` WRITE;
/*!40000 ALTER TABLE `SINTOMAS_LOG` DISABLE KEYS */;
/*!40000 ALTER TABLE `SINTOMAS_LOG` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `SINTOMAS_QUADROS_CLINICOS`
--

DROP TABLE IF EXISTS `SINTOMAS_QUADROS_CLINICOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `SINTOMAS_QUADROS_CLINICOS` (
  `COD_QUADRO_CLINICO` int(11) NOT NULL,
  `COD_SINTOMA` int(11) NOT NULL,
  PRIMARY KEY (`COD_QUADRO_CLINICO`,`COD_SINTOMA`),
  KEY `FK_SINTOMAS_QUADROS_CLINICOS_SINTOMAS` (`COD_SINTOMA`),
  CONSTRAINT `FK_SINTOMAS_QUADROS_CLINICOS_QUADROS_CLINICOS` FOREIGN KEY (`COD_QUADRO_CLINICO`) REFERENCES `QUADROS_CLINICOS` (`COD_QUADRO_CLINICO`),
  CONSTRAINT `FK_SINTOMAS_QUADROS_CLINICOS_SINTOMAS` FOREIGN KEY (`COD_SINTOMA`) REFERENCES `SINTOMAS` (`COD_SINTOMA`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `SINTOMAS_QUADROS_CLINICOS`
--

LOCK TABLES `SINTOMAS_QUADROS_CLINICOS` WRITE;
/*!40000 ALTER TABLE `SINTOMAS_QUADROS_CLINICOS` DISABLE KEYS */;
INSERT INTO `SINTOMAS_QUADROS_CLINICOS` VALUES (1,1),(1,3),(1,5),(1,10),(1,11),(1,13),(1,14),(1,16),(1,19),(1,20),(1,21),(1,22),(1,24),(1,36),(1,37),(2,1),(2,5),(2,12),(2,23),(2,24),(2,25),(2,26),(2,27),(2,28),(2,29),(2,30),(2,31),(2,32),(2,33),(2,34),(2,35),(3,1),(3,3),(3,4),(3,5),(3,10),(3,11),(3,12),(3,13),(3,14),(3,15),(3,16),(3,17),(3,18),(3,24),(3,36),(3,38),(10,1),(10,3),(10,5),(10,10),(10,14),(10,15),(10,16),(10,20),(10,23),(10,24),(10,36),(10,38),(10,39),(10,74),(10,75),(10,76),(10,77),(11,1),(11,5),(11,10),(11,14),(11,15),(11,20),(11,23),(11,24),(11,42),(11,44),(11,45),(11,50),(11,79),(11,80),(11,81),(11,158),(12,1),(12,5),(12,10),(12,14),(12,15),(12,20),(12,23),(12,24),(12,25),(12,40),(12,41),(12,42),(12,44),(12,49),(12,50),(12,82),(12,83),(12,84),(12,85),(12,174),(13,1),(13,5),(13,10),(13,14),(13,15),(13,20),(13,23),(13,24),(13,25),(13,41),(13,42),(13,44),(13,45),(13,47),(13,49),(13,50),(13,67),(13,85),(13,86),(14,1),(14,5),(14,12),(14,23),(14,24),(14,25),(14,45),(14,50),(14,61),(14,65),(14,87),(14,88),(14,89),(14,90),(15,1),(15,5),(15,10),(15,12),(15,14),(15,20),(15,23),(15,24),(15,89),(15,90),(15,91),(15,92),(15,93),(15,94),(15,95),(15,96),(16,1),(16,5),(16,12),(16,20),(16,23),(16,24),(16,26),(16,28),(16,29),(16,30),(16,31),(16,32),(16,34),(16,35),(16,97),(16,98),(16,99),(16,100),(16,101),(16,102),(17,1),(17,5),(17,15),(17,20),(17,23),(17,24),(17,25),(17,26),(17,28),(17,29),(17,30),(17,31),(17,32),(17,34),(17,35),(17,41),(17,74),(17,98),(17,100),(17,102),(17,103),(17,104),(18,1),(18,3),(18,5),(18,10),(18,12),(18,14),(18,16),(18,20),(18,23),(18,24),(18,39),(18,45),(18,50),(18,61),(18,65),(18,105),(18,106),(19,1),(19,5),(19,12),(19,13),(19,17),(19,18),(19,24),(19,68),(19,70),(19,71),(19,107),(20,1),(20,5),(20,10),(20,12),(20,14),(20,20),(20,23),(20,24),(20,42),(20,44),(20,50),(20,65),(20,106),(20,108),(20,109),(20,110),(21,1),(21,5),(21,10),(21,14),(21,20),(21,23),(21,24),(21,89),(21,90),(21,91),(21,92),(21,94),(21,111),(21,112),(21,113),(22,1),(22,5),(22,10),(22,14),(22,15),(22,20),(22,23),(22,24),(22,46),(22,89),(22,90),(22,91),(22,92),(22,94),(22,114),(23,1),(23,5),(23,10),(23,14),(23,19),(23,23),(23,24),(23,42),(23,44),(23,45),(23,60),(23,61),(23,115),(23,174);
/*!40000 ALTER TABLE `SINTOMAS_QUADROS_CLINICOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TIPO_USUARIO`
--

DROP TABLE IF EXISTS `TIPO_USUARIO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TIPO_USUARIO` (
  `COD_TPO_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `DSC_TPO_USUARIO` varchar(30) NOT NULL,
  PRIMARY KEY (`COD_TPO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TIPO_USUARIO`
--

LOCK TABLES `TIPO_USUARIO` WRITE;
/*!40000 ALTER TABLE `TIPO_USUARIO` DISABLE KEYS */;
/*!40000 ALTER TABLE `TIPO_USUARIO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USER`
--

DROP TABLE IF EXISTS `USER`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USER` (
  `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `NOM_USUARIO` varchar(50) DEFAULT NULL,
  `SGL_USUARIO` varchar(30) NOT NULL,
  PRIMARY KEY (`COD_USUARIO`),
  UNIQUE KEY `SGL_USUARIO` (`SGL_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USER`
--

LOCK TABLES `USER` WRITE;
/*!40000 ALTER TABLE `USER` DISABLE KEYS */;
/*!40000 ALTER TABLE `USER` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `USUARIOS`
--

DROP TABLE IF EXISTS `USUARIOS`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `USUARIOS` (
  `COD_USUARIO` int(11) NOT NULL AUTO_INCREMENT,
  `COD_TPO_USUARIO` int(11) NOT NULL,
  `NOM_USUARIO` varchar(50) DEFAULT NULL,
  `SGL_USUARIO` varchar(30) NOT NULL,
  PRIMARY KEY (`COD_USUARIO`),
  UNIQUE KEY `SGL_USUARIO` (`SGL_USUARIO`),
  KEY `FK_USUARIOS_TIPO_USUARIO` (`COD_TPO_USUARIO`),
  CONSTRAINT `FK_USUARIOS_TIPO_USUARIO` FOREIGN KEY (`COD_TPO_USUARIO`) REFERENCES `TIPO_USUARIO` (`COD_TPO_USUARIO`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `USUARIOS`
--

LOCK TABLES `USUARIOS` WRITE;
/*!40000 ALTER TABLE `USUARIOS` DISABLE KEYS */;
/*!40000 ALTER TABLE `USUARIOS` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'DBTOM'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-03-24 19:18:47
