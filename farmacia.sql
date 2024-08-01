-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/08/2024 às 04:26
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `farmacia`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `remedio`
--

CREATE TABLE `remedio` (
  `codigo` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `laboratorio` varchar(100) NOT NULL,
  `preco` double NOT NULL,
  `quantidade` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `remedio`
--

INSERT INTO `remedio` (`codigo`, `nome`, `laboratorio`, `preco`, `quantidade`) VALUES
(1, 'Cimegripe', 'Cimed', 9.9, 10),
(2, 'Naldecon', 'EMS', 20, 30),
(3, 'Paracetamol', 'Aché', 10, 10),
(4, 'Paracetamol', 'Aché', 10, 10),
(5, 'Paracetamol', 'Aché', 10, 10),
(6, 'Dipirona', 'Aché', 5, 10);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `remedio`
--
ALTER TABLE `remedio`
  ADD PRIMARY KEY (`codigo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `remedio`
--
ALTER TABLE `remedio`
  MODIFY `codigo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
