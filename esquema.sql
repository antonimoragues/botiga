-- MySQL dump 10.13  Distrib 8.0.30, for Linux (x86_64)
--
-- Host: localhost    Database: myDB
-- ------------------------------------------------------
-- Server version	8.0.30

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `productes`
--

DROP TABLE IF EXISTS `productes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productes` (
  `id` int DEFAULT NULL,
  `nom` varchar(200) DEFAULT NULL,
  `desc` varchar(500) DEFAULT NULL,
  `preu` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productes`
--

LOCK TABLES `productes` WRITE;
/*!40000 ALTER TABLE `productes` DISABLE KEYS */;
INSERT INTO `productes` VALUES (1,'Ras','Ras is a long sleeve brown t-shirt with stripes in the middle of the sleeves. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process.',29),(2,'Roxo','Roxo is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process',30),(3,'Aiden','Aiden is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process',30),(4,'Rasmus','Rasmus is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process',25),(5,'Riley','Riley is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process',35),(6,'Ruben','Ruben is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process',40),(7,'Russel','Russel is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process',45),(8,'Rasmus','Rasmus is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process',27),(9,'Riley 2','Riley is a white t-shirt with a print of a jeep on the front. The t-shirt has short sleeves and a round neck. This Molo product is GOTS certified organic, which means that it is made with certified organic materials and produced under the strictest social and environmental standards throughout the entire manufacturing process ',30);
/*!40000 ALTER TABLE `productes` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-10-19 16:41:00
