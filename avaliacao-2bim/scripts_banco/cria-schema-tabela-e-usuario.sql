-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Jun-2023 às 06:12
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
-- Banco de dados: `login-ltpii`
--
CREATE DATABASE IF NOT EXISTS `login-ltpii` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `login-ltpii`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_usuario`
--

CREATE TABLE IF NOT EXISTS `tb_usuario` (
  `id_usuario` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id do usuário',
  `ds_email` varchar(200) NOT NULL COMMENT 'e-mail do usuário',
  `ds_nome` varchar(200) NOT NULL COMMENT 'nome do usuário',
  `id_status` tinyint(3) UNSIGNED NOT NULL COMMENT '0 - não logado\r\n1 - logado\r\n99 - inativo',
  `ds_senha` varchar(256) NOT NULL COMMENT 'hash da senha',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;



/* Se estiver usando PHP 7 e MySQL 8 então use o comando abaixo 
- situação dos notebooks da Faculdade Senac
 */
CREATE USER `usuario_apl`@`%` IDENTIFIED WITH mysql_native_password BY 'usuario123';


/* use este comando se estiver usando o MySQL do XAMPP ou se estiver usando PHP 8 e MySQL 8 */
CREATE USER `usuario_apl`@`%` IDENTIFIED BY 'usuario123';

/* se quiser alterar a senha 

ALTER USER `usuario_apl`@`%` IDENTIFIED BY 'nova_senha_123';

*/


/* concede privilégios para que o usuario_apl possa executar SELECT, INSERT, DELETE e  UPDATE nas tabelas do schema login-ltpii */
GRANT SELECT, INSERT, UPDATE, DELETE ON `login-ltpii`.* TO `usuario_apl`@`%`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
