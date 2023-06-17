-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.39-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para banco_tcc_mtl
DROP DATABASE IF EXISTS `banco_tcc_mtl`;
CREATE DATABASE IF NOT EXISTS `banco_tcc_mtl` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `banco_tcc_mtl`;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_alimento
DROP TABLE IF EXISTS `tabela_alimento`;
CREATE TABLE IF NOT EXISTS `tabela_alimento` (
  `Cod_Ali` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Ali` varchar(30) NOT NULL,
  `Cod_Categ` int(11) NOT NULL,
  `Indi_Diab` int(11) NOT NULL,
  `Indi_Hiper` int(11) NOT NULL,
  `Pont_Ali` int(11) NOT NULL,
  `Pont_Rend_Ali` int(11) NOT NULL,
  `Sazon__Ini` date NOT NULL,
  `Sazon_Fim` date NOT NULL,
  `Pont_Rend_Sazon` int(11) NOT NULL,
  `Into_Lact` int(11) DEFAULT NULL,
  `Int_Gluten` int(11) DEFAULT NULL,
  PRIMARY KEY (`Cod_Ali`),
  KEY `FK_Cod_Categ` (`Cod_Categ`),
  CONSTRAINT `FK_Cod_Categ` FOREIGN KEY (`Cod_Categ`) REFERENCES `tabela_cate_alimento` (`Cod_Categ`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_alimento: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_alimento` DISABLE KEYS */;
REPLACE INTO `tabela_alimento` (`Cod_Ali`, `Nome_Ali`, `Cod_Categ`, `Indi_Diab`, `Indi_Hiper`, `Pont_Ali`, `Pont_Rend_Ali`, `Sazon__Ini`, `Sazon_Fim`, `Pont_Rend_Sazon`, `Into_Lact`, `Int_Gluten`) VALUES
	(1, 'Pão Integral', 3, 0, 0, 0, 3, '0000-00-00', '0000-00-00', 1, 0, 1);
/*!40000 ALTER TABLE `tabela_alimento` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_cate_alimento
DROP TABLE IF EXISTS `tabela_cate_alimento`;
CREATE TABLE IF NOT EXISTS `tabela_cate_alimento` (
  `Cod_Categ` int(11) NOT NULL AUTO_INCREMENT,
  `Nome_Cate_ali` varchar(25) NOT NULL,
  PRIMARY KEY (`Cod_Categ`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_cate_alimento: ~6 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_cate_alimento` DISABLE KEYS */;
REPLACE INTO `tabela_cate_alimento` (`Cod_Categ`, `Nome_Cate_ali`) VALUES
	(1, 'Light'),
	(2, 'Diet'),
	(3, 'Integral'),
	(4, 'Comum'),
	(5, 'Industrializado'),
	(6, 'Embutido');
/*!40000 ALTER TABLE `tabela_cate_alimento` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_doenca
DROP TABLE IF EXISTS `tabela_doenca`;
CREATE TABLE IF NOT EXISTS `tabela_doenca` (
  `Cod_Doenca_Usu` int(11) NOT NULL,
  `Tipo_Doenca_Usu` varchar(20) NOT NULL,
  PRIMARY KEY (`Cod_Doenca_Usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_doenca: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_doenca` DISABLE KEYS */;
REPLACE INTO `tabela_doenca` (`Cod_Doenca_Usu`, `Tipo_Doenca_Usu`) VALUES
	(0, 'Nada'),
	(1, 'Diabetes');
/*!40000 ALTER TABLE `tabela_doenca` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_intolerancia
DROP TABLE IF EXISTS `tabela_intolerancia`;
CREATE TABLE IF NOT EXISTS `tabela_intolerancia` (
  `Cod_Into_Usu` int(11) NOT NULL,
  `Tipo_Into_Usu` varchar(20) NOT NULL,
  PRIMARY KEY (`Cod_Into_Usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_intolerancia: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_intolerancia` DISABLE KEYS */;
REPLACE INTO `tabela_intolerancia` (`Cod_Into_Usu`, `Tipo_Into_Usu`) VALUES
	(0, 'Nada'),
	(1, 'Lactose'),
	(2, 'Glúten');
/*!40000 ALTER TABLE `tabela_intolerancia` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_med_gli
DROP TABLE IF EXISTS `tabela_med_gli`;
CREATE TABLE IF NOT EXISTS `tabela_med_gli` (
  `Cod_Med_Gli` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Usuario` int(11) NOT NULL,
  `Med_Leit_Gli` int(11) NOT NULL,
  `Data_Leit_Gli` date NOT NULL,
  PRIMARY KEY (`Cod_Med_Gli`),
  KEY `FK_Id_Usu_Gli` (`Id_Usuario`),
  CONSTRAINT `FK_Id_Usu_Gli` FOREIGN KEY (`Id_Usuario`) REFERENCES `tabela_usuario` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_med_gli: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_med_gli` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabela_med_gli` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_med_hiper
DROP TABLE IF EXISTS `tabela_med_hiper`;
CREATE TABLE IF NOT EXISTS `tabela_med_hiper` (
  `Cod_Med_Hiper` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Usuario` int(11) NOT NULL,
  `Med_Leit_Hiper` int(11) NOT NULL,
  `Data_Leit_Hiper` date NOT NULL,
  PRIMARY KEY (`Cod_Med_Hiper`),
  KEY `FK_Id_Usu_Hiper` (`Id_Usuario`),
  CONSTRAINT `FK_Id_Usu_Hiper` FOREIGN KEY (`Id_Usuario`) REFERENCES `tabela_usuario` (`Id_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_med_hiper: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_med_hiper` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabela_med_hiper` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_renda
DROP TABLE IF EXISTS `tabela_renda`;
CREATE TABLE IF NOT EXISTS `tabela_renda` (
  `Cod_Renda_Usu` int(11) NOT NULL,
  `Salario_Usu` int(11) NOT NULL,
  PRIMARY KEY (`Cod_Renda_Usu`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_renda: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_renda` DISABLE KEYS */;
REPLACE INTO `tabela_renda` (`Cod_Renda_Usu`, `Salario_Usu`) VALUES
	(0, 0),
	(1, 2000);
/*!40000 ALTER TABLE `tabela_renda` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_substituicao
DROP TABLE IF EXISTS `tabela_substituicao`;
CREATE TABLE IF NOT EXISTS `tabela_substituicao` (
  `Cod_Subs` int(11) NOT NULL AUTO_INCREMENT,
  `Id_Usuario` int(11) NOT NULL,
  `Cod_Ali_A` int(11) NOT NULL,
  `Cod_Ali_B` int(11) NOT NULL,
  PRIMARY KEY (`Cod_Subs`),
  KEY `FK_Cod_Ali_A` (`Cod_Ali_A`),
  KEY `FK_Cod_Ali_B` (`Cod_Ali_B`),
  CONSTRAINT `FK_Cod_Ali_A` FOREIGN KEY (`Cod_Ali_A`) REFERENCES `tabela_alimento` (`Cod_Ali`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Cod_Ali_B` FOREIGN KEY (`Cod_Ali_B`) REFERENCES `tabela_alimento` (`Cod_Ali`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_substituicao: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_substituicao` DISABLE KEYS */;
/*!40000 ALTER TABLE `tabela_substituicao` ENABLE KEYS */;

-- Copiando estrutura para tabela banco_tcc_mtl.tabela_usuario
DROP TABLE IF EXISTS `tabela_usuario`;
CREATE TABLE IF NOT EXISTS `tabela_usuario` (
  `Id_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `CPF_Usu` varchar(11) NOT NULL,
  `Nome_Usu` varchar(50) NOT NULL,
  `Telefone_Usu` varchar(15) DEFAULT NULL,
  `Email_Usu` varchar(60) NOT NULL,
  `Senha_Usu` varchar(20) NOT NULL,
  `Freq_AtivFis_Usu` int(11) NOT NULL,
  `Cod_Doenca_Usu` int(11) NOT NULL DEFAULT '0',
  `Cod_Renda_Usu` int(11) NOT NULL DEFAULT '0',
  `Cod_Into_Usu` int(11) NOT NULL DEFAULT '0',
  `Gene_Usu` int(11) DEFAULT NULL,
  PRIMARY KEY (`Id_Usuario`),
  KEY `FK_Renda_Usu` (`Cod_Renda_Usu`),
  KEY `FK_Into_Usu` (`Cod_Into_Usu`),
  KEY `FK_Doenca_Usu` (`Cod_Doenca_Usu`),
  CONSTRAINT `FK_Doenca_Usu` FOREIGN KEY (`Cod_Doenca_Usu`) REFERENCES `tabela_doenca` (`Cod_Doenca_Usu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Into_Usu` FOREIGN KEY (`Cod_Into_Usu`) REFERENCES `tabela_intolerancia` (`Cod_Into_Usu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_Renda_Usu` FOREIGN KEY (`Cod_Renda_Usu`) REFERENCES `tabela_renda` (`Cod_Renda_Usu`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- Copiando dados para a tabela banco_tcc_mtl.tabela_usuario: ~17 rows (aproximadamente)
/*!40000 ALTER TABLE `tabela_usuario` DISABLE KEYS */;
REPLACE INTO `tabela_usuario` (`Id_Usuario`, `CPF_Usu`, `Nome_Usu`, `Telefone_Usu`, `Email_Usu`, `Senha_Usu`, `Freq_AtivFis_Usu`, `Cod_Doenca_Usu`, `Cod_Renda_Usu`, `Cod_Into_Usu`, `Gene_Usu`) VALUES
	(1, '14370690617', 'Talles', '1699978500', 'tallesmiguel0510@gmail.com', 'AA', 0, 1, 1, 1, NULL),
	(2, '111111111', 'Seila', NULL, 'algo@gmail.com', 'EE', 0, 0, 0, 0, NULL),
	(6, '', '', '', '', '', 0, 0, 0, 0, NULL),
	(8, '', '', '', '', '', 0, 0, 0, 0, NULL),
	(9, '', 'Talles', '', '', 'secso', 0, 0, 0, 0, NULL),
	(10, '', 'Talles', '', '', 'secso', 0, 0, 0, 0, NULL),
	(11, '', 'Talles', '', '', 'secso', 0, 0, 0, 0, NULL),
	(12, '', 'Talles', '', '', 'secso', 0, 0, 0, 0, NULL),
	(13, '', 'Talles', NULL, '', 'secso', 0, 0, 0, 0, NULL),
	(14, '', 'Talles', NULL, '', 'secso', 0, 0, 0, 0, NULL),
	(15, '', 'Talles', NULL, 'teste@gmail.com', 'secso', 0, 0, 0, 0, NULL),
	(16, '', 'Talles', NULL, 'teste@gmail.com', 'as', 0, 0, 0, 0, NULL),
	(17, '', 'Talles', NULL, 'teste@gmail.com', 'as', 0, 0, 0, 0, NULL),
	(18, '', 'sads', NULL, 'asdd@gmail.com', 'ads', 0, 0, 0, 0, NULL),
	(19, '', 'sads', NULL, 'asdd@gmail.com', 'ads', 0, 0, 0, 0, NULL),
	(20, '', 'sads', NULL, 'asdd@gmail.com', 'ads', 0, 0, 0, 0, NULL),
	(21, '', 'sads', NULL, 'asdd@gmail.com', 'ads', 0, 0, 0, 0, NULL),
	(22, '', 'sads', NULL, 'asdd@gmail.com', 'ads', 0, 0, 0, 0, NULL);
/*!40000 ALTER TABLE `tabela_usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
tabela_usuario