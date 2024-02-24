-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 14/08/2023 às 13:07
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bancodaos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `os`
--

CREATE TABLE `os` (
  `id_os` int(11) NOT NULL,
  `graduacao` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `esquadrao` varchar(10) NOT NULL,
  `data_reg` varchar(20) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `fechada` varchar(3) NOT NULL,
  `diagnostico` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Despejando dados para a tabela `os`
--

INSERT INTO `os` (`id_os`, `graduacao`, `nome`, `esquadrao`, `data_reg`, `descricao`, `fechada`, `diagnostico`) VALUES
(45, 'CB', 'ETST', 'CA P', '12/08/2023|20:12', 'FONTE QUEIMADA', 'sim', ''),
(46, 'CB', 'PAZ', 'CA P', '12/08/2023|20:44', 'MINHA FONTE QUEIMOU.', 'sim', 'Fonte trocada S/A'),
(47, 'CEL', 'ASD', 'CA P', '12/08/2023|20:58', 'ASD', 'não', ''),
(48, '3ºSGT', 'DE FRANçA', 'CA P', '12/08/2023|21:18', 'MEU COMPUTADOR NãO ESTá LIGANDO Só FICA DANDO TELA AZUL.', 'sim', 'Arrumamos seu pc seu merda'),
(49, '3ºSGT', 'TORRES', '1ºESQD', '12/08/2023|21:19', 'a internet no primeiro esquadrão está ruim', 'não', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `os`
--
ALTER TABLE `os`
  ADD PRIMARY KEY (`id_os`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `os`
--
ALTER TABLE `os`
  MODIFY `id_os` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
