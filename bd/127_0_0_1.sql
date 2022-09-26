-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 22-Set-2022 às 20:55
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bduni`
--
CREATE DATABASE IF NOT EXISTS `bduni` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `bduni`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoafisica`
--

DROP TABLE IF EXISTS `tb_pessoafisica`;
CREATE TABLE IF NOT EXISTS `tb_pessoafisica` (
  `idPF` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `codCPF` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idPF`),
  UNIQUE KEY `codCPF` (`codCPF`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoajuridica`
--

DROP TABLE IF EXISTS `tb_pessoajuridica`;
CREATE TABLE IF NOT EXISTS `tb_pessoajuridica` (
  `idPJ` int NOT NULL AUTO_INCREMENT,
  `codCNPJ` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `nomeFantasia` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsavel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `senha` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idPJ`),
  UNIQUE KEY `codCNPJ` (`codCNPJ`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
