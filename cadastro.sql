-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 30-Nov-2018 às 10:54
-- Versão do servidor: 5.5.17
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

DROP TABLE IF EXISTS `cadastro`;
CREATE TABLE IF NOT EXISTS `cadastro` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `negociacao` int(11) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `endereco` varchar(20) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(20) NOT NULL,
  `regiao` varchar(20) NOT NULL,
  `salas` int(11) NOT NULL,
  `quartos` int(11) NOT NULL,
  `suites` int(11) NOT NULL,
  `banheiro` int(11) NOT NULL,
  `garagem` int(11) NOT NULL,
  `descricao` text NOT NULL,
  `area_construida` float NOT NULL,
  `area_total` float NOT NULL,
  `area_comum` float NOT NULL,
  `area_terreno` float NOT NULL,
  `destaque` tinyint(1) NOT NULL,
  `lancamento` tinyint(1) NOT NULL,
  `disponivel` tinyint(1) NOT NULL,
  `mostrar_site` tinyint(1) NOT NULL,
  `titulo` varchar(10) NOT NULL,
  `condominio_fechado` tinyint(1) DEFAULT NULL,
  `despensa` tinyint(1) DEFAULT NULL,
  `lavabo` tinyint(1) DEFAULT NULL,
  `piscina` tinyint(1) DEFAULT NULL,
  `sauna` tinyint(1) DEFAULT NULL,
  `area_servico` tinyint(1) DEFAULT NULL,
  `lavanderia` tinyint(1) DEFAULT NULL,
  `piso_frio` tinyint(1) DEFAULT NULL,
  `armario_embutido` tinyint(1) DEFAULT NULL,
  `churrasqueira` tinyint(1) DEFAULT NULL,
  `escritorio` tinyint(1) DEFAULT NULL,
  `sacada` tinyint(1) DEFAULT NULL,
  `varanda` tinyint(1) DEFAULT NULL,
  `cozinha_planejada` tinyint(1) DEFAULT NULL,
  `salao_festa` tinyint(1) DEFAULT NULL,
  `portaria` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`codigo`, `negociacao`, `tipo`, `endereco`, `bairro`, `cidade`, `regiao`, `salas`, `quartos`, `suites`, `banheiro`, `garagem`, `descricao`, `area_construida`, `area_total`, `area_comum`, `area_terreno`, `destaque`, `lancamento`, `disponivel`, `mostrar_site`, `titulo`, `condominio_fechado`, `despensa`, `lavabo`, `piscina`, `sauna`, `area_servico`, `lavanderia`, `piso_frio`, `armario_embutido`, `churrasqueira`, `escritorio`, `sacada`, `varanda`, `cozinha_planejada`, `salao_festa`, `portaria`) VALUES
(1, 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 'fdh', 1, 1, 1, 1, 1, 1, 1, 1, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 'fdh', 1, 1, 1, 1, 1, 1, 1, 1, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 'fdh', 1, 1, 1, 1, 1, 1, 1, 1, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 1, '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 'fdh', 1, 1, 1, 1, 1, 1, 1, 1, '1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
