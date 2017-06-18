-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.21-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Versie:              9.4.0.5173
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van logs wordt geschreven
CREATE DATABASE IF NOT EXISTS `logs` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `logs`;

-- Structuur van  tabel logs.containers wordt geschreven
CREATE TABLE IF NOT EXISTS `containers` (
  `Container_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Serienummer` varchar(30) NOT NULL,
  `Volume` int(11) NOT NULL,
  `Van` date NOT NULL,
  `Tot` date NOT NULL,
  PRIMARY KEY (`Container_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.containers: 2 rows
/*!40000 ALTER TABLE `containers` DISABLE KEYS */;
INSERT INTO `containers` (`Container_ID`, `Serienummer`, `Volume`, `Van`, `Tot`) VALUES
	(1, '80541230', 1000, '2017-02-01', '2017-02-02'),
	(2, '80941236', 1000, '2017-02-01', '2027-02-27');
/*!40000 ALTER TABLE `containers` ENABLE KEYS */;

-- Structuur van  tabel logs.containersperinstallaties wordt geschreven
CREATE TABLE IF NOT EXISTS `containersperinstallaties` (
  `Container_ID` int(11) NOT NULL,
  `Installatie_ID` int(11) NOT NULL,
  KEY `Container_ID` (`Container_ID`),
  KEY `Installatie_ID` (`Installatie_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.containersperinstallaties: 2 rows
/*!40000 ALTER TABLE `containersperinstallaties` DISABLE KEYS */;
INSERT INTO `containersperinstallaties` (`Container_ID`, `Installatie_ID`) VALUES
	(1, 1),
	(2, 1);
/*!40000 ALTER TABLE `containersperinstallaties` ENABLE KEYS */;

-- Structuur van  tabel logs.installaties wordt geschreven
CREATE TABLE IF NOT EXISTS `installaties` (
  `Installatie_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Klant_ID` int(11) NOT NULL,
  `Verantwoordelijk_ID` int(11) NOT NULL,
  `Van` varchar(50) NOT NULL,
  `Tot` varchar(50) NOT NULL,
  PRIMARY KEY (`Installatie_ID`),
  KEY `Klant_ID` (`Klant_ID`),
  KEY `Verantwoordelijk_ID` (`Verantwoordelijk_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.installaties: 7 rows
/*!40000 ALTER TABLE `installaties` DISABLE KEYS */;
INSERT INTO `installaties` (`Installatie_ID`, `Klant_ID`, `Verantwoordelijk_ID`, `Van`, `Tot`) VALUES
	(1, 1, 1, '2017-02-01', '2017-02-04'),
	(2, 0, 1, '2017-03-29', '2017-04-02'),
	(3, 2, 1, '2017-03-29', '2017-04-15'),
	(4, 0, 1, '2017-03-24', '2017-04-02'),
	(5, 0, 1, '2017-03-30', '2017-04-22'),
	(6, 1, 1, '2017-03-30', '2017-03-31'),
	(7, 1, 1, '2017-03-16', '2017-03-17');
/*!40000 ALTER TABLE `installaties` ENABLE KEYS */;

-- Structuur van  tabel logs.klanten wordt geschreven
CREATE TABLE IF NOT EXISTS `klanten` (
  `Klant_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Klantnaam` varchar(50) NOT NULL,
  `Adres` varchar(100) NOT NULL,
  `Telnr` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  PRIMARY KEY (`Klant_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.klanten: 4 rows
/*!40000 ALTER TABLE `klanten` DISABLE KEYS */;
INSERT INTO `klanten` (`Klant_ID`, `Klantnaam`, `Adres`, `Telnr`, `Email`) VALUES
	(1, 'Pukkelpop', 'Kempische Steenweg, 3500 Hasselt', '483289105', 'info@pukkelpop.be'),
	(2, 'Rock Werchter', 'Haachtsesteenweg 12, 3118 Rotselaar', '0446447327', 'rockwerchter@inter.vlaanderen'),
	(3, 'Graspop MM', 'Festivalpark Boeretang, 2480 Dessel', '015649286', 'info@gmm.be'),
	(4, 'Tomorrowland', 'Schommelei 1, 2850 Boom', '042673484', 'info@tomorrowland.be');
/*!40000 ALTER TABLE `klanten` ENABLE KEYS */;

-- Structuur van  tabel logs.logs wordt geschreven
CREATE TABLE IF NOT EXISTS `logs` (
  `Log_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Container_ID` int(11) NOT NULL,
  `Meting` int(11) NOT NULL,
  PRIMARY KEY (`Log_ID`),
  KEY `Installatie_ID` (`Container_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.logs: 15 rows
/*!40000 ALTER TABLE `logs` DISABLE KEYS */;
INSERT INTO `logs` (`Log_ID`, `Container_ID`, `Meting`) VALUES
	(1, 1, 1),
	(2, 2, 2),
	(3, 2, 4),
	(4, 3, 8),
	(5, 3, 16),
	(6, 3, 32),
	(7, 4, 64),
	(8, 4, 128),
	(9, 4, 256),
	(10, 4, 512),
	(11, 5, 1024),
	(12, 5, 2048),
	(13, 5, 4096),
	(14, 5, 8192),
	(15, 5, 16384);
/*!40000 ALTER TABLE `logs` ENABLE KEYS */;

-- Structuur van  tabel logs.modules wordt geschreven
CREATE TABLE IF NOT EXISTS `modules` (
  `Module_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Serienummer` varchar(30) NOT NULL,
  `Fabrikant` varchar(50) NOT NULL,
  `Van` date NOT NULL,
  `Tot` date NOT NULL,
  PRIMARY KEY (`Module_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.modules: 3 rows
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` (`Module_ID`, `Serienummer`, `Fabrikant`, `Van`, `Tot`) VALUES
	(1, '10-kl-12', 'Bayramodules', '2017-02-01', '2017-02-26'),
	(2, '10-kl-13', 'Bayramodules', '2017-02-01', '2017-02-28'),
	(3, '10-kl-15', 'SMD', '2017-04-20', '2017-04-29');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;

-- Structuur van  tabel logs.modulespercontainers wordt geschreven
CREATE TABLE IF NOT EXISTS `modulespercontainers` (
  `Container_ID` int(11) NOT NULL,
  `Module_ID` int(11) NOT NULL,
  KEY `Container_ID` (`Container_ID`),
  KEY `Module_ID` (`Module_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.modulespercontainers: ~0 rows (ongeveer)
/*!40000 ALTER TABLE `modulespercontainers` DISABLE KEYS */;
/*!40000 ALTER TABLE `modulespercontainers` ENABLE KEYS */;

-- Structuur van  tabel logs.verantwoordelijken wordt geschreven
CREATE TABLE IF NOT EXISTS `verantwoordelijken` (
  `Verantwoordelijke_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Naam` varchar(50) NOT NULL,
  `Van` date NOT NULL,
  `Tot` date NOT NULL,
  PRIMARY KEY (`Verantwoordelijke_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumpen data van tabel logs.verantwoordelijken: 3 rows
/*!40000 ALTER TABLE `verantwoordelijken` DISABLE KEYS */;
INSERT INTO `verantwoordelijken` (`Verantwoordelijke_ID`, `Naam`, `Van`, `Tot`) VALUES
	(1, 'Castermans Kakophaling', '2017-02-01', '2017-02-28'),
	(2, 'Nick\'s Shit Emporium', '2017-04-20', '2017-04-28'),
	(3, 'Stad Tienen', '2017-04-21', '2017-04-30');
/*!40000 ALTER TABLE `verantwoordelijken` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
