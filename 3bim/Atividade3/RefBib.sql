-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 23-Set-2016 às 10:54
-- Versão do servidor: 5.5.47-0ubuntu0.14.04.1
-- versão do PHP: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `RefBib`
--
CREATE DATABASE IF NOT EXISTS `RefBib` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `RefBib`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `citacoes`
--

CREATE TABLE IF NOT EXISTS `citacoes` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `nomeArquivo` varchar(255) NOT NULL,
  `titulo` text NOT NULL,
  `autores` text NOT NULL,
  `citacoes` text NOT NULL,
  `referencias` text NOT NULL,
  `dataCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `palavrasChave` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
