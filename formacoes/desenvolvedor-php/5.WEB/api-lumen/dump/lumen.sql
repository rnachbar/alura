-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.3.16-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Copiando estrutura para tabela lumen.episodios
CREATE TABLE IF NOT EXISTS `episodios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `temporada` int(11) NOT NULL,
  `numero` int(11) NOT NULL,
  `assistido` tinyint(1) NOT NULL DEFAULT 0,
  `serie_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `episodios_serie_id_foreign` (`serie_id`),
  CONSTRAINT `episodios_serie_id_foreign` FOREIGN KEY (`serie_id`) REFERENCES `series` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumen.episodios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `episodios` DISABLE KEYS */;
INSERT INTO `episodios` (`id`, `temporada`, `numero`, `assistido`, `serie_id`) VALUES
	(1, 1, 1, 1, 1),
	(2, 1, 2, 0, 1),
	(3, 1, 3, 0, 1);
/*!40000 ALTER TABLE `episodios` ENABLE KEYS */;

-- Copiando estrutura para tabela lumen.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumen.migrations: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2021_02_21_152049_criar_tabelas_series', 1),
	(2, '2021_02_21_152102_criar_tabelas_episodios', 1),
	(3, '2021_02_22_182608_criar_tabela_usuarios', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela lumen.series
CREATE TABLE IF NOT EXISTS `series` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumen.series: ~12 rows (aproximadamente)
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` (`id`, `nome`) VALUES
	(1, 'Friends'),
	(2, 'Breaking Bad'),
	(3, 'Supernatural'),
	(4, 'Stranger Things'),
	(5, 'Agent\'s of S.H.I.E.L.D.'),
	(6, 'Lost'),
	(7, 'WandaVision'),
	(8, 'O Expresso do Amanhã'),
	(9, 'O Mandaloriano'),
	(10, 'Gothan'),
	(11, 'The 100'),
	(12, 'Brooklyn Nine-Nine');
/*!40000 ALTER TABLE `series` ENABLE KEYS */;

-- Copiando estrutura para tabela lumen.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela lumen.usuarios: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `email`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'raphael.nachbar@navegarti.com.br', '$2y$10$PV6K9Q4XqoPMCuRWQPMJceUM2iLM6AC1YXkebvwB8lGQRXN58ySdy', '2021-02-22 15:40:24', '2021-02-22 15:40:25');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
