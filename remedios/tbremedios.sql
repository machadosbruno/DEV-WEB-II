-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09/09/2025 às 03:20
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
-- Banco de dados: `bdremedios`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbremedios`
--

CREATE TABLE `tbremedios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `data` date NOT NULL,
  `observacao` varchar(255) NOT NULL,
  `codUsuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbremedios`
--

INSERT INTO `tbremedios` (`id`, `nome`, `data`, `observacao`, `codUsuario`) VALUES
(1, 'Remedio 1', '2025-09-08', 'Observacao 1', 0),
(2, 'Remedio 2', '2025-09-08', 'Observacao 2', 0),
(3, 'Remedio 3', '2025-09-30', 'Observacao 3', 0),
(4, 'Remedio 3', '2025-09-30', 'Observacao 3', 0),
(5, 'Remedio 3', '2025-09-30', 'Observacao 3', 0),
(6, '', '0000-00-00', '', 0),
(7, 'Remedio 3', '2025-09-11', 'Observacao 6', 0),
(8, 'Remedio 3', '2025-09-11', 'Observacao 6', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbremedios`
--
ALTER TABLE `tbremedios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbremedios`
--
ALTER TABLE `tbremedios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
