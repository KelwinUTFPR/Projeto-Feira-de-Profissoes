-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.36-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win32
-- HeidiSQL Versão:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para projeto_feira
CREATE DATABASE IF NOT EXISTS `projeto_feira` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `projeto_feira`;

-- Copiando estrutura para tabela projeto_feira.blog
CREATE TABLE IF NOT EXISTS `blog` (
  `Blog_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `Blog_Titulo` varchar(250) DEFAULT NULL,
  `Blog_Corpo` longtext,
  `Blog_Data` timestamp NULL DEFAULT NULL,
  `Blog_Link` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Blog_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_feira.blog: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `blog` DISABLE KEYS */;
INSERT INTO `blog` (`Blog_Codigo`, `Blog_Titulo`, `Blog_Corpo`, `Blog_Data`, `Blog_Link`) VALUES
	(5, 'Fintechs', 'Empresas miram 60 milhões de pessoas que não têm conta em banco e precisam fazer transferências, pagar boletos e realizar compras', NULL, 'https://veja.abril.com.br/economia/fintechs-querem'),
	(6, 'Bolsonaro ou Haddad', 'Especialistas consultados por EXAME avaliam as propostas relativas a empreendedorismo dos dois candidatos à Presidência da República', NULL, 'https://exame.abril.com.br/pme/bolsonaro-ou-haddad'),
	(7, 'Shark Tank', ' No Brasil em sua terceira temporada, o programa exibido pelo Canal Sony já recebeu mais de 4.500 interessados em conseguir um investidor', NULL, 'https://veja.abril.com.br/economia/shark-tank-inve'),
	(10, 'Com desemprego em alta, número de MEIs cresce quase 40%', 'Avanço na formalização reflete a necessidade do brasileiro de buscar novas fontes de renda em meio a desocupação recorde', NULL, 'https://veja.abril.com.br/economia/com-desemprego-');
/*!40000 ALTER TABLE `blog` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_feira.blogimagem
CREATE TABLE IF NOT EXISTS `blogimagem` (
  `BlogImagem_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `BlogImagem_Nome` longtext,
  `BlogImagem_Tamanho` int(11) DEFAULT NULL,
  `BlogImagem_Blog_Codigo` int(11) DEFAULT NULL,
  PRIMARY KEY (`BlogImagem_Codigo`),
  KEY `FK_blogimagem_blog` (`BlogImagem_Blog_Codigo`),
  CONSTRAINT `FK_blogimagem_blog` FOREIGN KEY (`BlogImagem_Blog_Codigo`) REFERENCES `blog` (`Blog_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_feira.blogimagem: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `blogimagem` DISABLE KEYS */;
INSERT INTO `blogimagem` (`BlogImagem_Codigo`, `BlogImagem_Nome`, `BlogImagem_Tamanho`, `BlogImagem_Blog_Codigo`) VALUES
	(4, 'bc053ca5c67c1ad63353ae73c79910ca.jpg', NULL, 5),
	(5, 'a5c219657e2825e441ebef18ba13e920.jpg', NULL, 6),
	(6, '2b71c2e5aa65d1a4b3f02f7987bf8f55.jpg', NULL, 7),
	(8, 'cb68dddfcbfd51d302d238d211e4db32.jpg', NULL, 10);
/*!40000 ALTER TABLE `blogimagem` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_feira.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `SliderImagem_Codigo` int(11) NOT NULL AUTO_INCREMENT,
  `SliderImagem_Nome` longtext,
  `SliderImagem_Tamanho` int(11) DEFAULT NULL,
  PRIMARY KEY (`SliderImagem_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_feira.slider: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `slider` DISABLE KEYS */;
INSERT INTO `slider` (`SliderImagem_Codigo`, `SliderImagem_Nome`, `SliderImagem_Tamanho`) VALUES
	(1, '81214-The-4-Great-Barriers-to-Startup-Tech-Success-and-How-to-Overcome-Them.jpg', 50),
	(2, 'entrepreneur-1340645_1920.png', 50),
	(3, 'startup.png', 50);
/*!40000 ALTER TABLE `slider` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_feira.slider_texto
CREATE TABLE IF NOT EXISTS `slider_texto` (
  `slider_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `slider_corpo` varchar(50) DEFAULT NULL,
  `sliderImagem_slider_codigo` int(11) DEFAULT NULL,
  `slider_tam` int(11) DEFAULT NULL,
  PRIMARY KEY (`slider_codigo`),
  KEY `FK_slider_texto_slider` (`sliderImagem_slider_codigo`),
  CONSTRAINT `FK_slider_texto_slider` FOREIGN KEY (`sliderImagem_slider_codigo`) REFERENCES `slider` (`SliderImagem_Codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela projeto_feira.slider_texto: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `slider_texto` DISABLE KEYS */;
INSERT INTO `slider_texto` (`slider_codigo`, `slider_corpo`, `sliderImagem_slider_codigo`, `slider_tam`) VALUES
	(1, 'O que é um start-up?', 3, 50),
	(2, 'Cursos', 2, 50),
	(3, 'Empreendedorismo', 1, 50);
/*!40000 ALTER TABLE `slider_texto` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_feira.tb_posto
CREATE TABLE IF NOT EXISTS `tb_posto` (
  `POSTO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ENDERECO` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR_GASOLINA` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR_ETANOL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `VALOR_DIESEL` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `CLASSIFICACAO` int(10) DEFAULT NULL,
  PRIMARY KEY (`POSTO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela projeto_feira.tb_posto: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_posto` DISABLE KEYS */;
INSERT INTO `tb_posto` (`POSTO_ID`, `NOME`, `ENDERECO`, `VALOR_GASOLINA`, `VALOR_ETANOL`, `VALOR_DIESEL`, `CLASSIFICACAO`) VALUES
	(1, 'Bufalo Autoposto', 'BR 116 - KM 18', '4,50', '2,74', '3,10', 3),
	(2, 'Petropen Posto', 'Bairro Conchal', '4,10', '2,89', '3,12', 5),
	(3, 'Aracatu', 'Rua O Brasil para Cristo', '3,99', '2,89', '3,16', 4),
	(4, 'Posto do Ribeira', 'Estrada Juquia', '4,10', '3,00', '3,18', 2),
	(8, 'Alvaro Gomes', 'Rua dos Expedientes', '3,99', '2,89', '3,40', 1),
	(9, 'Autoposto Meneggetti', 'Bairro Conchal', '4,10', '2,99', '3,12', 4);
/*!40000 ALTER TABLE `tb_posto` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_feira.tb_usuario
CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `USUARIO_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `SENHA` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`USUARIO_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Copiando dados para a tabela projeto_feira.tb_usuario: ~5 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_usuario` DISABLE KEYS */;
INSERT INTO `tb_usuario` (`USUARIO_ID`, `NOME`, `EMAIL`, `SENHA`) VALUES
	(1, 'ratomanos', 'thiago@gmail.com', '123'),
	(2, 'Administrador', 'admin', '123'),
	(3, 'rudi', 'rudi2@gmail.com', '321'),
	(4, 'Michel', 'kuzniermichel', '123'),
	(5, 'Rudinei', 'rudinei@gmail', '123');
/*!40000 ALTER TABLE `tb_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
