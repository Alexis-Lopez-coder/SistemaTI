-- MariaDB dump 10.17  Distrib 10.4.13-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sistemati
-- ------------------------------------------------------
-- Server version	10.4.13-MariaDB-1:10.4.13+maria~bionic-log

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
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admins` (
  `id_admin` varchar(10) NOT NULL,
  `contrasena` varchar(20) NOT NULL,
  `nombre` varchar(15) NOT NULL,
  `apellidos` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `profesion` varchar(30) NOT NULL,
  `imagen` varchar(200) DEFAULT NULL,
  `admin` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admins`
--

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
INSERT INTO `admins` VALUES ('alan01','12345','Alan','Lopez Lira','alan@mail.com','','Coder & Android','fotos/alan01dx.png',0),('alex01','123','Alexis','Lopez Lira','alex@mail.com','4141148656','Web Developer & Android','fotos/alex01alexis.jpp',1),('vane01','123','Vanessa','Lopez Lira','vane@mail.com','4141025410','Contadora','fotos/vane01dx.png',0),('xiaomi','123','Alexis','Lopez','alexis07binomo@gmail.com','1234567891','inge','',0);
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `area_empresa`
--

DROP TABLE IF EXISTS `area_empresa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `area_empresa` (
  `id_area` varchar(20) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_area`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `area_empresa`
--

LOCK TABLES `area_empresa` WRITE;
/*!40000 ALTER TABLE `area_empresa` DISABLE KEYS */;
INSERT INTO `area_empresa` VALUES ('almacen','Almacen'),('calidad','Calidad'),('gerencia','Gerencia'),('piso-a','Piso-A'),('piso-b','Piso-B'),('rh','RH'),('ventas','Ventas');
/*!40000 ALTER TABLE `area_empresa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `computadoras`
--

DROP TABLE IF EXISTS `computadoras`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `computadoras` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `computadoras`
--

LOCK TABLES `computadoras` WRITE;
/*!40000 ALTER TABLE `computadoras` DISABLE KEYS */;
INSERT INTO `computadoras` VALUES ('acer','ACER'),('hoora','HOORA'),('hp','HP'),('lenovo','LENOVO'),('mac','MAC'),('phpvaga','PHPVAGA'),('ropero','ROPERO'),('samsung','SAMSUNG'),('toshiba','TOSHIBA');
/*!40000 ALTER TABLE `computadoras` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacto`
--

DROP TABLE IF EXISTS `contacto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacto` (
  `id_c` int(10) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `asunto` varchar(60) NOT NULL,
  `mensaje` text NOT NULL,
  `leido` int(1) NOT NULL DEFAULT 0,
  `fecha` date NOT NULL,
  PRIMARY KEY (`id_c`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacto`
--

LOCK TABLES `contacto` WRITE;
/*!40000 ALTER TABLE `contacto` DISABLE KEYS */;
INSERT INTO `contacto` VALUES (0000000001,'MAria Ximena','xime@gmail.com','Antivirus','Hola...',1,'2020-05-31'),(0000000002,'Cesar','cesar@mail.com','Pantalla azul','asdad',1,'2020-05-31'),(0000000003,'Salomé Islas','salo@mail.com','PC lenta','Hola, bune dia. Mi computadora desde  hace dias esta muy lenta,....,blablablablablabla',1,'2020-05-31'),(0000000004,'Alejandra Avila','aleavila@mai.com','Virus','adasdasdaadad',1,'2020-05-31'),(0000000005,'Luz','luz@mai.com','PC Lenta','adasdodlflfafalfml',1,'2020-05-31'),(0000000006,'Karina Diaz','kary@mail.com','XD','adadad',1,'2020-05-31'),(0000000007,'Juan','juan@gmai.com','adsa@sad.com','adasd',1,'2020-06-01'),(0000000008,'Esmeralda','esme@asd.com','sadasdad','sfsdfdfsd',1,'2020-06-01');
/*!40000 ALTER TABLE `contacto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cpu`
--

DROP TABLE IF EXISTS `cpu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cpu` (
  `id` varchar(15) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cpu`
--

LOCK TABLES `cpu` WRITE;
/*!40000 ALTER TABLE `cpu` DISABLE KEYS */;
INSERT INTO `cpu` VALUES ('amd','AMD'),('ibm','IBM'),('intel','INTEL'),('sunway','SUNWAY');
/*!40000 ALTER TABLE `cpu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dd`
--

DROP TABLE IF EXISTS `dd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dd` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dd`
--

LOCK TABLES `dd` WRITE;
/*!40000 ALTER TABLE `dd` DISABLE KEYS */;
INSERT INTO `dd` VALUES ('hitachi','Hitachi'),('samsung','Samsung'),('seagate','Seagate'),('toshiba','Toshiba'),('wester-digital','Western Digital');
/*!40000 ALTER TABLE `dd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `empleados` (
  `cedula` varchar(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `fecha` varchar(30) NOT NULL,
  `cargo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipos_registrados`
--

DROP TABLE IF EXISTS `equipos_registrados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipos_registrados` (
  `id` int(5) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(40) NOT NULL,
  `area` varchar(40) NOT NULL,
  `marca_eq` varchar(20) NOT NULL,
  `modelo_eq` varchar(40) NOT NULL,
  `marca_cpu` varchar(20) NOT NULL,
  `modelo_cpu` varchar(40) NOT NULL,
  `marca_ram` varchar(30) NOT NULL,
  `modelo_ram` varchar(30) NOT NULL,
  `marca_dd` varchar(30) NOT NULL,
  `modelo_dd` varchar(30) NOT NULL,
  `garantia` varchar(20) NOT NULL,
  `user_pass` text DEFAULT NULL,
  `software` text DEFAULT NULL,
  `fecha_encargo` datetime NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_entrega` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 0,
  `leido` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos_registrados`
--

LOCK TABLES `equipos_registrados` WRITE;
/*!40000 ALTER TABLE `equipos_registrados` DISABLE KEYS */;
INSERT INTO `equipos_registrados` VALUES (00001,'ALEXIS','LOPEZ LIRA','CALIDAD','ACER','ASPIRE3','AMD','COREI8','CORSAIR','1485POADS','HITACHI','ASDAD','NA','asda','ASDASD','2020-06-03 19:41:43','HOLA TENGO UN PC QUE ESTA MUY LENTA Y NECESITA SER REPARADA','2021-01-28 14:17:09',1,1),(00002,'XIMENA','AGUILAR TRIGUEROS','CALIDAD','LENOVO','PRUEBA','INTEL','COREI8','HYPERX','LOPA78','TOSHIBA','ASD3256','2019-09-30','asdc','NGV','2020-06-03 19:46:15','NGV','2020-06-04 10:49:16',0,1),(00003,'MARIA XIMENA','AGUILAR TRIGUEROS','ALMACEN','ACER','PRUEBA','AMD','RYSEN','CORSAIR','1485POADS','HITACHI','DG','NA','adssad','ADSA','2020-06-03 19:51:58','ASDAD','2020-06-08 12:36:17',1,1),(00004,'VANESSA','LOPEZ LIRA','ALMACEN','ACER','PRUEBA','AMD','6153SD','CORSAIR','1485POADS','HITACHI','ASDAD','NA','asda','ASDA','2020-06-03 20:04:02','ADSAD','2020-06-08 11:37:06',1,1),(00005,'DANIELA','ANGELES','ALMACEN','ACER','PRUEBA','AMD','COREI8','GSKILL','XD','SEAGATE','ASDAD','NA','asdas','ASD','2020-06-03 20:07:54','ADS','2020-06-07 21:25:13',1,1),(00006,'DANIELA','LOPEZ','ALMACEN','LENOVO','PRUEBA 2','AMD','RYSEN','HYPERX','1485POADS','HITACHI','ASDAD','NA','sdfsd','SDFDS','2020-06-03 20:19:54','SDFDSF','NA',0,0),(00007,'ALEXIS','LOPEZ LIRA','ALMACEN','GATEWAY','ASD','AMD','RYSEN','CORSAIR','ADS','HITACHI','ASDAD','NA','adas','ASDAS','2020-06-03 21:17:40','ASDA','NA',0,0),(00008,'XIMENA','LOPEZ LIRA','ALMACEN','LANIX','OTROMODELO','IBM','COREI7','CORSAIR','LOPA78','HITACHI','ASDAD','NA','asasda','ASDASD','2020-06-03 21:19:56','ASDAD','NA',0,0),(00009,'ALEXIS','AT','ALMACEN','LANIX','PRUEBA 3','AMD','COREI7','CORSAIR','LOPA78','HITACHI','ASDAD','NA','asdsda','ASDA','2020-06-03 21:23:52','ASDAS','NA',0,1),(00010,'DANIELA','AGUILAR TRIGUEROS','CALIDAD','PHPVA','JAVA','AMD','COREI8','CORSAIR','LOPA78','HITACHI','DG','NA','as','ASD','2020-06-03 21:54:15','AASD','NA',0,1),(00011,'DANIELA','LOPEZ LIRA','CALIDAD','PHPVA','PRUEBA 3','INTEL','RYSEN','CORSAIR','LOPA78','HITACHI','ASDAD','NA','sadsad','ASDADS','2020-06-03 21:58:25','ADSAD','NA',0,0),(00012,'DANIELA','ANGELES','PISO-A','PHPVAGA','ASD89','AMD','RYSEN','CORSAIR','LOPA78','HITACHI','ASDAD','NA','asda','ASDAS','2020-06-03 22:11:19','ASDAD','NA',0,0),(00013,'ALEXIS','LORA','VENTAS','ROPERO','ROPERO1','AMD','TEL','CORSAIR','TEL','HITACHI','TEL','NA','ada','ASDAS','2020-06-03 22:14:27','ASDAS','NA',0,0),(00014,'ALEJANDRA','AVILA','GERENCIA','HOORA','HORA 1500','AMD','COREI8','CORSAIR','486E','HITACHI','RED-GLO','NA','asd','ASD','2020-06-03 22:18:11','ASD','NA',0,0),(00015,'JOAQUIN','LIRA','PISO-A','LENOVO','piense','AMD','RYSEN','HYPERX','LOPA78','HITACHI','RED-GLO','NA','user - 0115','OFFICE','2020-06-04 11:11:23','ESTA MUY LENTA LA MAQUINA Y SE CIERRAN LOS PROGRAMAS SIEMPRE','NA',0,1),(00016,'JOSUE','MARQUEZ','PISO-A','LENOVO','THINGPAD','INTEL','COREI8','GSKILL','LOPA78','HITACHI','ASDAD','2020-06-15','josue - a012','OFIICE','2020-06-06 18:31:32','ESTA MUY LENTA','NA',0,1),(00017,'LUIS ANGEL','MT','GERENCIA','LENOVO','LEGION','AMD','RYSEN','CORSAIR','1485POADS','HITACHI','ASDAD','2020-01-28','xd - 0120','NINGUNO','2020-06-08 11:58:52','XD','NA',0,1),(00018,'RICARDO','GARCIA TREJO','GERENCIA','HP','Modelo DE PRUEBA','INTEL','1065MIX','KINGSTON','1065MIX','SAMSUNG','1065MIX','2020-06-11','ALEXIS - 123','MICROSOFT OFFICE','2021-04-30 12:40:13','ESTA MUY LENTA\r\n','NA',0,1);
/*!40000 ALTER TABLE `equipos_registrados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `equipos_reparar`
--

DROP TABLE IF EXISTS `equipos_reparar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `equipos_reparar` (
  `id_equipo` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `nombre_cli` varchar(15) NOT NULL,
  `apellidos_cli` varchar(20) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `eq_marc` varchar(10) NOT NULL,
  `eq_mod` varchar(10) NOT NULL,
  `cpu_marc` varchar(10) NOT NULL,
  `cpu_mod` varchar(10) NOT NULL,
  `ram_marc` varchar(10) NOT NULL,
  `ram_mod` varchar(10) NOT NULL,
  `dd_marc` varchar(10) NOT NULL,
  `dd_mod` varchar(10) NOT NULL,
  `garantia` varchar(20) NOT NULL,
  `user_pass` text DEFAULT NULL,
  `software` text DEFAULT NULL,
  `fecha_encargo` datetime NOT NULL,
  `fecha_entrega` varchar(20) NOT NULL,
  `estado` int(1) NOT NULL DEFAULT 0,
  `leido` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id_equipo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `equipos_reparar`
--

LOCK TABLES `equipos_reparar` WRITE;
/*!40000 ALTER TABLE `equipos_reparar` DISABLE KEYS */;
/*!40000 ALTER TABLE `equipos_reparar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inventario`
--

DROP TABLE IF EXISTS `inventario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inventario` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `producto` varchar(30) NOT NULL,
  `descripcion` text NOT NULL,
  `cantidad` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inventario`
--

LOCK TABLES `inventario` WRITE;
/*!40000 ALTER TABLE `inventario` DISABLE KEYS */;
INSERT INTO `inventario` VALUES (1,'Memoria RAM','Marca Kingston',15),(2,'Disco Duro','Marca SATA',20),(3,'Unidad CD','Marca HP',7),(4,'Memoria RAM','Marca SATA',100),(5,'Microfono','Marca SURE',15);
/*!40000 ALTER TABLE `inventario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos_cpu`
--

DROP TABLE IF EXISTS `modelos_cpu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos_cpu` (
  `id_mod` varchar(40) NOT NULL,
  `id_marca` varchar(15) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mod`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `modelos_cpu_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `cpu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos_cpu`
--

LOCK TABLES `modelos_cpu` WRITE;
/*!40000 ALTER TABLE `modelos_cpu` DISABLE KEYS */;
INSERT INTO `modelos_cpu` VALUES ('apu-a6-9500','amd','APU A6 9500'),('apu-a8-9600','amd','APU A8 9600'),('apu-ax-6000','amd','APU AX 6000'),('apu-ax-7000','amd','APU AX 7000'),('apu-ax-8000','amd','APU AX 8000'),('apu-ax-9000','amd','APU AX 9000'),('athlon','amd','ATHLON'),('atom','intel','ATOM'),('core','intel','CORE'),('core-2','intel','CORE 2'),('core-i3','intel','CORE i3'),('core-i5','intel','CORE i5'),('core-i7','intel','CORE i7'),('core-i9','intel','CORE i9'),('fx-4350','amd','FX-4350'),('fx-8350','amd','FX-8350'),('pentium','intel','PENTIUM'),('pentium-4','intel','PENTIUM 4'),('pentium-4-express-edition','intel','PENTIUM 4 EXPRES EDITION'),('pentium-d-ee','intel','PENTIUM D / EE'),('pentium-dual-core','intel','PENTIUM DUAL-CORE'),('pentium-ii','intel','PENTIUM II'),('pentium-m','intel','PENTIUM M'),('pentium-mmx','intel','PENTIUM MMX'),('pentium-pro','intel','PENTIUM PRO'),('power','ibm','POWER'),('power2','ibm','POWER 2'),('power3','ibm','POWER 3'),('power4+','ibm','POWER 4+'),('power5','ibm','POWER 5'),('power6','ibm','POWER 6'),('power7','ibm','POWER 7'),('power8','ibm','POWER 8'),('ryzen-x1000','amd','RYZEN X100'),('ryzen-x2000','amd','RYZEN X2000'),('ryzen3','amd','RYZEN 3'),('ryzen5-1400','amd','RYZEN 5 1400'),('ryzen5-1500','amd','RYZEN 5 1500'),('ryzen7-1700x','amd','RYZEN 7 1700X'),('ryzen7-1800x','amd','RYZEN 7 1800X'),('xenon','intel','XENON');
/*!40000 ALTER TABLE `modelos_cpu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos_dd`
--

DROP TABLE IF EXISTS `modelos_dd`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos_dd` (
  `id_mod` varchar(20) NOT NULL,
  `id_marca` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mod`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `modelos_dd_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `dd` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos_dd`
--

LOCK TABLES `modelos_dd` WRITE;
/*!40000 ALTER TABLE `modelos_dd` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelos_dd` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos_de_cpu`
--

DROP TABLE IF EXISTS `modelos_de_cpu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos_de_cpu` (
  `id_mod` varchar(20) NOT NULL,
  `id_marca` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mod`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `modelos_de_cpu_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `cpu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos_de_cpu`
--

LOCK TABLES `modelos_de_cpu` WRITE;
/*!40000 ALTER TABLE `modelos_de_cpu` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelos_de_cpu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos_pc`
--

DROP TABLE IF EXISTS `modelos_pc`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos_pc` (
  `id_mod` varchar(40) NOT NULL,
  `id_marca` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mod`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `modelos_pc_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `computadoras` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos_pc`
--

LOCK TABLES `modelos_pc` WRITE;
/*!40000 ALTER TABLE `modelos_pc` DISABLE KEYS */;
INSERT INTO `modelos_pc` VALUES ('asd89','phpvaga','PHPVAGA'),('aspire3','acer','Aspire 3'),('aspire5','acer','Aspire 5'),('aspirees','acer','Aspire ES'),('chromebook','acer','Chromebook'),('chromebookplus','samsung','Chromebook Plus'),('chromebookplus3black','samsung','Chromebook 3 Black'),('dynabook','toshiba','DynaBook'),('elitebook','hp','Elitebook'),('homenotebook','hp','Home Notebook'),('hora1500','hoora','HORA 1500'),('ideapad','lenovo','Ideapad'),('imac','mac','iMac'),('legion','lenovo','Legion'),('macbookair','mac','Macbook Air'),('macbookpro','mac','Macbook Pro'),('mini','samsung','Mini'),('pavilion','hp','Pavilion'),('portegez30-c','toshiba','Portege Z30-C'),('probook','hp','ProBook'),('prueba','lenovo','prueba'),('prueba2','lenovo','PRUEBA 2'),('ropero1','ropero','ROPERO'),('rv415','samsung','Rv415'),('satelitepro','toshiba','Satelite Pro'),('sateliteproa40','toshiba','Satelite Pro A40'),('spin','acer','Spin'),('swift3','acer','Swift 3'),('swift5','acer','Swift 5'),('tecraa40','toshiba','Tecra A40'),('tecraa50','toshiba','Tecra A50'),('tecrax40','toshiba','Tecra X40'),('thingpad','lenovo','Thingpad'),('ultrabooknp900','samsung','Ultrabook Np900'),('yoga','lenovo','Yoga');
/*!40000 ALTER TABLE `modelos_pc` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modelos_ram`
--

DROP TABLE IF EXISTS `modelos_ram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modelos_ram` (
  `id_mod` varchar(20) NOT NULL,
  `id_marca` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`id_mod`),
  KEY `id_marca` (`id_marca`),
  CONSTRAINT `modelos_ram_ibfk_1` FOREIGN KEY (`id_marca`) REFERENCES `ram` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelos_ram`
--

LOCK TABLES `modelos_ram` WRITE;
/*!40000 ALTER TABLE `modelos_ram` DISABLE KEYS */;
/*!40000 ALTER TABLE `modelos_ram` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ram`
--

DROP TABLE IF EXISTS `ram`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ram` (
  `id` varchar(20) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ram`
--

LOCK TABLES `ram` WRITE;
/*!40000 ALTER TABLE `ram` DISABLE KEYS */;
INSERT INTO `ram` VALUES ('corsair','Corsair'),('gskill','G.Skill'),('hyperx','HyperX'),('kingston','Kingston'),('team-group','Team Group');
/*!40000 ALTER TABLE `ram` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-30 13:10:26
