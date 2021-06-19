-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 19-Jun-2021 às 12:30
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pdo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `name`, `description`) VALUES
(32, 'camelo', 'pata'),
(31, 'camelo', 'pata'),
(30, 'pata', 'camelo'),
(29, 'Cursos', 'Ornamental'),
(28, 'Cursos', 'Ornamental'),
(27, 'catraca', 'onibus'),
(26, 'teste', 'testado'),
(13, 'Cadeira', 'Madeira maciça'),
(16, 'Cadeira', 'Madeira maciça'),
(17, 'Cadeira', 'Madeira maciça'),
(18, 'Cadeira', 'Madeira maciça'),
(19, 'Garrafa', 'Ornamental'),
(20, 'Celular', 'SmartPhone'),
(21, 'Celular', 'SmartPhone'),
(22, 'Celular', 'SmartPhone'),
(23, 'Celular', 'SmartPhone'),
(24, 'Celular', 'SmartPhone'),
(25, 'Celular', 'SmartPhone');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
