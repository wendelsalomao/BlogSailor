-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Nov-2021 às 21:33
-- Versão do servidor: 10.4.13-MariaDB
-- versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbcompany`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `niveis_acessos`
--

CREATE TABLE `niveis_acessos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `niveis_acessos`
--

INSERT INTO `niveis_acessos` (`id`, `nome`, `created`, `modified`) VALUES
(1, 'Administrador', '2016-02-19 00:00:00', NULL),
(2, 'Colaborador', '2016-02-19 00:00:00', NULL),
(3, 'Cliente', '2016-02-19 00:00:00', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(220) NOT NULL,
  `telefone` int(15) DEFAULT NULL,
  `email` varchar(520) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `situacoe_id` int(11) NOT NULL DEFAULT 0,
  `niveis_acesso_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `telefone`, `email`, `senha`, `situacoe_id`, `niveis_acesso_id`, `created`, `modified`) VALUES
(13, 'Douglas', 2147483647, 'douglassoaressantoskl@gmail.com', '202cb962ac59075b964b07152d234b70', 3, 3, '2021-07-15 18:29:46', NULL),
(14, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 16:14:21', NULL),
(15, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 16:14:22', NULL),
(16, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 16:14:24', NULL),
(17, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 16:14:26', NULL),
(18, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 16:14:29', NULL),
(19, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 16:14:30', NULL),
(20, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 16:27:45', NULL),
(21, 'mark1', 0, '', '501bcf0cab75667820e15dff4550c988', 3, 3, '2021-07-19 17:34:16', NULL),
(22, 'mark1', 0, 'mark1@g.com', '202cb962ac59075b964b07152d234b70', 3, 3, '2021-07-26 16:38:41', NULL),
(23, 'Thigas', 1140028922, 'fulano@gmail.com', '089aa77d824f33064f02cc2d9bb5b7ee', 3, 3, '2021-10-28 17:38:18', NULL),
(24, 'Thigas', 40088922, 'thigas@gmail.com.br', '202cb962ac59075b964b07152d234b70', 3, 3, '2021-10-28 17:39:03', NULL),
(25, 'Douglas', 2147483647, 'doug@gmail.com', '4de991919dc758b5cd1962541a079237', 3, 3, '2021-11-29 23:21:25', NULL),
(26, 'doug', 216516510, 'doug@gmail.com', '25f9e794323b453885f5181f1b624d0b', 3, 3, '2021-11-29 23:25:20', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `niveis_acessos`
--
ALTER TABLE `niveis_acessos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
