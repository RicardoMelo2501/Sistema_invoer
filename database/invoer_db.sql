-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.22-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para sistema_invoer
CREATE DATABASE IF NOT EXISTS `sistema_invoer` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `sistema_invoer`;

-- Copiando estrutura para tabela sistema_invoer.cargas
CREATE TABLE IF NOT EXISTS `cargas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `empresa_id` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `nota_fiscal` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela sistema_invoer.cargas: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `cargas` DISABLE KEYS */;
INSERT INTO `cargas` (`id`, `tipo`, `empresa_id`, `peso`, `nota_fiscal`, `created`, `modified`) VALUES
	(1, 'Madeira', 3, 12, '312212421412', '2021-12-05 02:11:22', '2021-12-05 02:11:22'),
	(2, 'Ferro', 3, 321, '312212421412', '2021-12-05 02:13:15', '2021-12-05 02:13:15'),
	(3, 'Chumbo', 7, 512, '1232132141', '2021-12-05 02:17:01', '2021-12-05 02:17:01');
/*!40000 ALTER TABLE `cargas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_invoer.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(18) COLLATE utf8_unicode_ci NOT NULL,
  `nome_social` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela sistema_invoer.empresas: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`id`, `cnpj`, `nome_social`, `created`, `modified`) VALUES
	(3, '12321421', 'Empresa Teste', '2021-12-05 00:12:37', '2021-12-05 00:12:37'),
	(7, '12342143', 'Empresa Teste455514', '2021-12-05 00:16:33', '2021-12-05 00:16:33'),
	(8, '12321421', 'Empresa Teste 4', '2021-12-05 03:03:15', '2021-12-05 03:03:15'),
	(9, '124321412421', 'Empresa Teste33333', '2021-12-05 03:57:00', '2021-12-05 03:57:00');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_invoer.motoristas
CREATE TABLE IF NOT EXISTS `motoristas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `cnh` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela sistema_invoer.motoristas: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `motoristas` DISABLE KEYS */;
INSERT INTO `motoristas` (`id`, `nome`, `cpf`, `cnh`, `created`, `modified`) VALUES
	(1, 'Ricardo Vinicius Silva de Melo', '31233242155', '12432141', '2021-12-05 04:37:37', '2021-12-05 04:37:37');
/*!40000 ALTER TABLE `motoristas` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_invoer.portos
CREATE TABLE IF NOT EXISTS `portos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `municipio` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `estado` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `faturamento` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela sistema_invoer.portos: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `portos` DISABLE KEYS */;
INSERT INTO `portos` (`id`, `nome`, `municipio`, `estado`, `faturamento`) VALUES
	(1, 'Santa Tereza', 'Recife', 'Pernambuco', 120000),
	(2, '1233', 'Recife', 'Pernambuco', 123244);
/*!40000 ALTER TABLE `portos` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_invoer.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela sistema_invoer.users: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `username`, `password`, `email`, `created`, `modified`) VALUES
	(2, 'Ricardito', '$2y$10$iMiHFkK5OBCXrj6Jfu/I2.uB0.NUip693lnPQ/Z.2TyPq4lMa4MYq', 'teste2@gmail.com', '2021-12-05 01:15:41', '2021-12-05 01:15:41'),
	(3, 'Ricardo', '$2y$10$7i2q.a/hOPe5YkUWPksBxu2prWSkGPrQHx4g3RA4mja2R7KFoUEaq', 'teste5@gmail.com', '2021-12-05 02:01:04', '2021-12-05 02:01:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

-- Copiando estrutura para tabela sistema_invoer.veiculos
CREATE TABLE IF NOT EXISTS `veiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `motorista_id` int(11) NOT NULL,
  `modelo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `placa_carroceria` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `placa_veiculo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela sistema_invoer.veiculos: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `veiculos` DISABLE KEYS */;
INSERT INTO `veiculos` (`id`, `motorista_id`, `modelo`, `placa_carroceria`, `placa_veiculo`, `created`, `modified`) VALUES
	(1, 1, 'Mercedes', '42174321', '124321743', '2021-12-05 04:48:31', '2021-12-05 04:48:31');
/*!40000 ALTER TABLE `veiculos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
