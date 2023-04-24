-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 24/04/2023 às 05:04
-- Versão do servidor: 10.4.27-MariaDB
-- Versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `imc`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_faixas_imc`
--

CREATE TABLE `tb_faixas_imc` (
  `id_faixa_imc` int(10) UNSIGNED NOT NULL,
  `nr_vlr_min` decimal(4,2) NOT NULL COMMENT 'valor mínimo da faixa',
  `nr_vlr_max` decimal(4,2) NOT NULL COMMENT 'valor máximo da faixa',
  `ds_situacao` varchar(200) NOT NULL COMMENT 'situação '
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='faixas de situação do imc';

--
-- Despejando dados para a tabela `tb_faixas_imc`
--

INSERT INTO `tb_faixas_imc` (`id_faixa_imc`, `nr_vlr_min`, `nr_vlr_max`, `ds_situacao`) VALUES
(1, '0.00', '16.99', 'Muito abaixo do peso'),
(2, '17.00', '18.49', 'Abaixo do peso'),
(3, '18.50', '24.99', 'Peso normal'),
(4, '25.00', '29.99', 'Acima do peso'),
(5, '30.00', '34.99', 'Obesidade I'),
(6, '35.00', '39.99', 'Obesidade II'),
(7, '40.00', '99.99', 'Obesidade III (mórbida');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_registro_imc`
--

CREATE TABLE `tb_registro_imc` (
  `id_pessoa` int(10) UNSIGNED NOT NULL,
  `ds_nome` varchar(200) NOT NULL,
  `nr_vlr_imc` decimal(4,2) NOT NULL,
  `ds_situacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb_registro_imc`
--

INSERT INTO `tb_registro_imc` (`id_pessoa`, `ds_nome`, `nr_vlr_imc`, `ds_situacao`) VALUES
(1, 'Marcio', '38.57', 'teste'),
(2, 'Sicrano', '26.12', 'teste'),
(3, 'Sicrano', '26.12', 'Acima do peso'),
(4, 'Beltrano', '17.30', 'Abaixo do peso'),
(5, 'Marcio', '38.57', 'Obesidade II');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb_faixas_imc`
--
ALTER TABLE `tb_faixas_imc`
  ADD PRIMARY KEY (`id_faixa_imc`);

--
-- Índices de tabela `tb_registro_imc`
--
ALTER TABLE `tb_registro_imc`
  ADD PRIMARY KEY (`id_pessoa`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb_faixas_imc`
--
ALTER TABLE `tb_faixas_imc`
  MODIFY `id_faixa_imc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `tb_registro_imc`
--
ALTER TABLE `tb_registro_imc`
  MODIFY `id_pessoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
