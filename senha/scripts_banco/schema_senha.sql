-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2023 às 05:21
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `senha`
--
DROP DATABASE IF EXISTS `senha`;
CREATE DATABASE IF NOT EXISTS `senha` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `senha`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_senha`
--

CREATE TABLE `tb_senha` (
  `id_senha` int(10) UNSIGNED NOT NULL COMMENT 'chave primária',
  `id_tipo_senha` int(10) UNSIGNED NOT NULL COMMENT 'tipo de senha: 1 - normal, 2 - pendência, 3 - prioridade',
  `ts_geracao` datetime NOT NULL DEFAULT current_timestamp() COMMENT 'timestamp quando senha foi gerada',
  `ts_atendimento` datetime DEFAULT NULL COMMENT 'timestamp do momento do atendimento',
  `id_usuario` int(10) UNSIGNED DEFAULT NULL COMMENT 'id do usuário que realizou atendimento'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tabela antes do insert `tb_senha`
--

TRUNCATE TABLE `tb_senha`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL COMMENT 'id do usuário',
  `ds_nome` varchar(200) NOT NULL COMMENT 'nome do usuário',
  `id_papel_usuario` int(10) UNSIGNED NOT NULL COMMENT 'id do papel do usuário: 1-adm, 2-atendente',
  `id_status` tinyint(3) UNSIGNED NOT NULL COMMENT '0 - não logado\r\n1 - logado\r\n99 - inativo',
  `ds_senha` varchar(256) DEFAULT NULL COMMENT 'hash da senha',
  `id_guiche` tinyint(3) UNSIGNED NOT NULL COMMENT 'Número do guiche onde atenderá'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncar tabela antes do insert `tb_usuario`
--

TRUNCATE TABLE `tb_usuario`;
--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `tb_senha`
--
ALTER TABLE `tb_senha`
  ADD PRIMARY KEY (`id_senha`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_senha`
--
ALTER TABLE `tb_senha`
  MODIFY `id_senha` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'chave primária';

--
-- AUTO_INCREMENT de tabela `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id do usuário';

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_senha`
--
ALTER TABLE `tb_senha`
  ADD CONSTRAINT `tb_senha_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuario` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
