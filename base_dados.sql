-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for temperaturas
DROP DATABASE IF EXISTS `temperaturas`;
CREATE DATABASE IF NOT EXISTS `temperaturas` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `temperaturas`;

-- Dumping structure for table temperaturas.medidas
DROP TABLE IF EXISTS `medidas`;
CREATE TABLE IF NOT EXISTS `medidas` (
  `id_medida` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `valor` int(10) unsigned DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id_medida`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

-- Dumping data for table temperaturas.medidas: ~17 rows (approximately)
/*!40000 ALTER TABLE `medidas` DISABLE KEYS */;
INSERT INTO `medidas` (`id_medida`, `valor`, `created_at`) VALUES
	(1, 10, '2021-06-27 18:24:49'),
	(2, 75, '2021-06-27 18:24:58'),
	(3, 23, '2021-06-27 18:25:07'),
	(4, 65, '2021-06-27 18:25:10'),
	(5, 78, '2021-06-27 18:25:13'),
	(6, 45, '2021-06-27 18:25:19'),
	(7, 32, '2021-06-27 18:25:22'),
	(8, 10, '2021-06-27 18:25:29'),
	(9, 56, '2021-06-27 18:25:32'),
	(10, 76, '2021-06-27 18:25:35'),
	(11, 34, '2021-06-27 18:25:38'),
	(12, 10, '2021-06-27 18:25:44'),
	(13, 20, '2021-06-27 18:25:46'),
	(14, 30, '2021-06-27 18:25:49'),
	(15, 40, '2021-06-27 18:25:51'),
	(16, 50, '2021-06-27 18:25:54'),
	(17, 60, '2021-06-27 18:25:57'),
	(18, 50, '2021-06-27 18:26:00'),
	(19, 40, '2021-06-27 18:26:03');
/*!40000 ALTER TABLE `medidas` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
