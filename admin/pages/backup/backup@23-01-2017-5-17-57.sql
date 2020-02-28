-- MySQL dump 10.13  Distrib 5.5.24, for Win32 (x86)
--
-- Host: localhost    Database: donasi
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `alamat`
--

DROP TABLE IF EXISTS `alamat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alamat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `alamat` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alamat`
--

LOCK TABLES `alamat` WRITE;
/*!40000 ALTER TABLE `alamat` DISABLE KEYS */;
INSERT INTO `alamat` VALUES (1,'Jl. Gagak Hitam No.118E Depan Cafe Old Time Medan , Sumatera Utara - 20122');
/*!40000 ALTER TABLE `alamat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `carousel`
--

DROP TABLE IF EXISTS `carousel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `carousel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(200) NOT NULL,
  `keterangan` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `carousel`
--

LOCK TABLES `carousel` WRITE;
/*!40000 ALTER TABLE `carousel` DISABLE KEYS */;
INSERT INTO `carousel` VALUES (2,'Pesantren Nurul Iman','Ini merupakan pesantren tertua di kota medan yang seharusnya mendapat perhatian lebih','1.png');
/*!40000 ALTER TABLE `carousel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `donasi`
--

DROP TABLE IF EXISTS `donasi`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `donasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `iduser` int(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `namabarang` varchar(200) NOT NULL,
  `alamat` varchar(200) NOT NULL,
  `doa` text NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `jasapengirim` varchar(200) NOT NULL,
  `noresi` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `donasi`
--

LOCK TABLES `donasi` WRITE;
/*!40000 ALTER TABLE `donasi` DISABLE KEYS */;
INSERT INTO `donasi` VALUES (1,2,'agus pramono','baju sekolah','jl bunga asoka','semoga barang ini berguna buat mereka','1.png','JNE','BNKJ76566687','2017-01-22 14:41:20','Sudah Diterima'),(2,2,'Agus Pramono','Baju Sekolah','simpang bunga asoka jl gagak hitam','semoga berkah','2.png','JNE','KOIUh747974879','2017-01-22 15:06:15','Sudah Dikirim');
/*!40000 ALTER TABLE `donasi` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `logadmin`
--

DROP TABLE IF EXISTS `logadmin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `logadmin` (
  `idlog` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  PRIMARY KEY (`idlog`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `logadmin`
--

LOCK TABLES `logadmin` WRITE;
/*!40000 ALTER TABLE `logadmin` DISABLE KEYS */;
INSERT INTO `logadmin` VALUES (1,'Agus Pramono','agus.prahma5@gmail.com','agus151515','d90f589c12540210b6bee57c127ec9e4','user.png');
/*!40000 ALTER TABLE `logadmin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayatlog`
--

DROP TABLE IF EXISTS `riwayatlog`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayatlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `tanggal` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayatlog`
--

LOCK TABLES `riwayatlog` WRITE;
/*!40000 ALTER TABLE `riwayatlog` DISABLE KEYS */;
INSERT INTO `riwayatlog` VALUES (1,'agus151515','2017-01-22 15:02:30'),(2,'agus151515','2017-01-23 10:45:39');
/*!40000 ALTER TABLE `riwayatlog` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(150) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (2,'agus','jl sunggal no 118E Medan Sumatera utara','085261523578','agus.prahma5@gmail.com','agus1','d90f589c12540210b6bee57c127ec9e4','2.png'),(3,'rahma sari','jl bunga raya','085261523578','sarirahma65@gmail.com','rahma1','2ddbf96e67b1c7d400979c9670d63421','3.png');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-01-23 11:17:59
