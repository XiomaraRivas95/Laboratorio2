-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.33 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table laboratorio2.automovil: ~3 rows (approximately)
DELETE FROM `automovil`;
/*!40000 ALTER TABLE `automovil` DISABLE KEYS */;
INSERT INTO `automovil` (`id`, `matricula`, `marca`, `modelo`, `color`, `precio`) VALUES
	(1, '0932-SM', 'Toyota', 'Corolla', 'Beige', 10000.00),
	(2, 'C0932-2', 'Nissan', 'Sentra', 'Negro', 12000.00),
	(3, '894328-C', 'Toyota', 'Hilux', 'Gris', 25000.00);
/*!40000 ALTER TABLE `automovil` ENABLE KEYS */;

-- Dumping data for table laboratorio2.clientes: ~0 rows (approximately)
DELETE FROM `clientes`;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;

-- Dumping data for table laboratorio2.usuarios: ~8 rows (approximately)
DELETE FROM `usuarios`;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `username`, `password`, `email`) VALUES
	(1, 'michellx', '$2y$10$gjkUrd4B4HXlneDTN362we.UODwNDIKHHw93tALQRs/yZCuz.89AG', 'michell@gmail.com'),
	(2, 'mamonete', '$2y$10$NL9Pg1EpZTYXjABDqN0tIeVfWJKhksr.5DbVyG5Jfz.AgjOEvogBe', 'mamonete@gmail.com'),
	(3, 'aidee', '1234', 'aidee@gmail.com'),
	(4, 'admin', '$2y$10$b4vE/HyYQ32tGx.9zbyNDeCvVigy/JZg.Oz6aaB.PiEqER95Amscu', 'admin@admin.com'),
	(5, 'angelica', '$2y$10$yHETeribXTL85ZRKtIxIYeCbyIYlTTWieUxwEgiXUpBwgqfJb2Bv.', 'angelica@gmail.com'),
	(6, 'pruebaX', '$2y$10$o1HK1yck5srKy4htBLjW/.C/ji7l44ZztEUEQhLJ8RgSN.yJxL48O', 'prueba@gmail.com'),
	(7, 'jose', '$2y$10$boOJmGeWsbLsfBluzsTGie.chpfwTVLKHgo8pvrQAibRhLjKDpxSu', 'jose@gmailcom'),
	(8, 'josselin', '$2y$10$TLKtsDB.kQ0ODh.t.Tr5P.vGaUZYKRfXaB0jfId3TbwOljANbPYHu', 'josselin@gmail.com');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
