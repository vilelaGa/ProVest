-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 18-Fev-2022 às 02:04
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
-- Banco de dados: `provestnovo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

DROP TABLE IF EXISTS `aluno`;
CREATE TABLE IF NOT EXISTS `aluno` (
  `id_aluno` int NOT NULL AUTO_INCREMENT,
  `senha_aluno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_aluno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado_aluno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade_aluno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_aluno` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_alunos` date NOT NULL,
  `hora_alunos` time NOT NULL,
  `anoRegistro_aluno` year NOT NULL,
  `periodo_aluno` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo_aluno` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto_aluno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id_curso` int NOT NULL AUTO_INCREMENT,
  `nome_curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado_curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade_curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `endereco_curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telefone_curso` bigint NOT NULL,
  `celular_curso` bigint NOT NULL,
  `foto_curso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tipo_curso` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descricao_curso` text COLLATE utf8_unicode_ci NOT NULL,
  `data_curso` date NOT NULL,
  `hora_curso` time NOT NULL,
  `ano_curso` year NOT NULL,
  `moderador_de_curso` int NOT NULL,
  `maps_do_curso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_professor` int NOT NULL,
  `cnpj` bigint DEFAULT NULL,
  `link_esterno` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chat_curso` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cep` int NOT NULL,
  PRIMARY KEY (`id_curso`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_facul_rpa_python`
--

DROP TABLE IF EXISTS `dados_facul_rpa_python`;
CREATE TABLE IF NOT EXISTS `dados_facul_rpa_python` (
  `nome_facul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `texto_facul` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `professor`
--

DROP TABLE IF EXISTS `professor`;
CREATE TABLE IF NOT EXISTS `professor` (
  `id_professor` int NOT NULL AUTO_INCREMENT,
  `senha_professor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nome_professor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estado_professor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cidade_professor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_professor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `data_professor` date NOT NULL,
  `hora_professor` time NOT NULL,
  `anoRegistro_professor` year NOT NULL,
  `materia_professor` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sexo_professor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `foto_professor` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_professor`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
