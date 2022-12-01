-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Dez-2022 às 21:03
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dash1`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `data` varchar(11) NOT NULL,
  `temperatura` float NOT NULL,
  `umidade` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `data`, `temperatura`, `umidade`) VALUES
(11, '2022-11-27', 25, 60),
(12, '2022-11-28', 27, 65),
(13, '2022-11-29', 29, 55),
(14, '2022-11-29', 30, 55),
(15, '2022-11-29', 25, 50),
(16, '2022-11-29', 23, 35),
(17, '2022-11-29', 25, 60),
(18, '2022-11-30', 25, 60),
(19, '2022-11-30', 18, 75),
(20, '2022-11-30', 19, 65),
(21, '0000-00-00', 21, 65),
(22, '2022-12-01', 21, 65),
(23, '2022-12-01', 15, 30),
(24, '2022-12-01', 29, 65),
(25, '2022-12-01', 28, 90),
(26, '2022-12-01', 28, 70),
(27, '2022-12-01', 30, 45);

-- --------------------------------------------------------

--
-- Estrutura da tabela `lucros`
--

CREATE TABLE `lucros` (
  `id` int(11) NOT NULL,
  `mes` varchar(50) NOT NULL,
  `ano_2021` varchar(50) NOT NULL,
  `ano_2022` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `lucros`
--

INSERT INTO `lucros` (`id`, `mes`, `ano_2021`, `ano_2022`) VALUES
(1, 'Julho', '120.16', '210.15'),
(2, 'Agosto', '420.40', '480'),
(3, 'Setembro', '310', '350'),
(4, 'Outubro', '650.33', '720'),
(5, 'Novembro', '200', '416.65');

-- --------------------------------------------------------

--
-- Estrutura da tabela `producao`
--

CREATE TABLE `producao` (
  `id` int(11) NOT NULL,
  `horastrabalhadas` int(11) NOT NULL,
  `nomefuncionario` varchar(50) NOT NULL,
  `turno` varchar(3) NOT NULL,
  `codigopecas` int(11) NOT NULL,
  `quantidadepecas` int(11) NOT NULL,
  `pecasdefeito` int(11) NOT NULL,
  `tempoquebra` int(11) NOT NULL,
  `paradaprogramada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `producao`
--

INSERT INTO `producao` (`id`, `horastrabalhadas`, `nomefuncionario`, `turno`, `codigopecas`, `quantidadepecas`, `pecasdefeito`, `tempoquebra`, `paradaprogramada`) VALUES
(1, 18, 'Mario', 'A', 123, 18000, 12, 15, 21),
(2, 18, 'Carlos', 'A', 456, 19000, 15, 60, 15),
(3, 18, 'Antônio', ' B', 123, 18000, 12, 20, 15),
(4, 18, 'ALBERTO', ' B', 123, 18000, 20, 18, 16),
(5, 18, 'Alberto', 'C', 123, 18500, 20, 20, 10),
(6, 18, 'Marcos', ' C', 123, 18000, 10, 20, 10),
(7, 18, 'Maria', ' A', 456, 17500, 15, 10, 10),
(8, 18, 'Marcos', ' A', 123, 17500, 15, 16, 45),
(9, 18, 'Mané', ' A', 789, 17500, 20, 20, 0),
(10, 18, 'Marcos', ' A', 789, 19000, 10, 10, 1),
(11, 18, 'Alex', ' B', 123, 18000, 0, 0, 0),
(12, 18, 'Carlos', ' A', 789, 18000, 150, 45, 45),
(13, 18, 'Carlos', ' A', 789, 18000, 150, 45, 45),
(14, 18, 'Carlos', ' A', 789, 18000, 150, 45, 45),
(15, 16, 'AA', ' A', 123, 18000, 150, 20, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `resultado`
--

CREATE TABLE `resultado` (
  `id` int(11) NOT NULL,
  `horasTrabalhadas` int(11) NOT NULL,
  `nomeFuncionario` varchar(50) NOT NULL,
  `turno` varchar(3) NOT NULL,
  `codigoPecas` int(11) NOT NULL,
  `quantidadePecas` int(11) NOT NULL,
  `pecasDefeito` int(11) NOT NULL,
  `tempoQuebra` int(11) NOT NULL,
  `paradaProgramada` int(11) NOT NULL,
  `disponibilidade` float NOT NULL,
  `eficiencia` float NOT NULL,
  `qualidade` float NOT NULL,
  `oee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `resultado`
--

INSERT INTO `resultado` (`id`, `horasTrabalhadas`, `nomeFuncionario`, `turno`, `codigoPecas`, `quantidadePecas`, `pecasDefeito`, `tempoQuebra`, `paradaProgramada`, `disponibilidade`, `eficiencia`, `qualidade`, `oee`) VALUES
(1, 18, 'Antônio', 'A', 123, 21000, 150, 10, 30, 18, 90.75, 99.1736, 10),
(2, 18, 'Amarildo', 'A', 123, 18000, 150, 10, 30, 18, 90.75, 99.1736, 10),
(3, 18, 'Carlos', 'A', 123, 18000, 150, 10, 30, 18, 90.75, 99.1736, 0),
(4, 24, 'Eli', 'C', 123, 20000, 0, 0, 0, 100, 100, 100, 100),
(5, 24, 'José', 'B', 123, 24000, 10, 0, 0, 100, 100, 99.9584, 120),
(14, 24, 'B', ' B', 789, 23000, 0, 0, 0, 100, 115, 100, 115),
(15, 18, 'Jesus', 'C', 123, 18000, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id_venda` int(11) NOT NULL,
  `dia` date NOT NULL,
  `nome` varchar(50) NOT NULL,
  `turno` varchar(1) NOT NULL,
  `horas` int(2) NOT NULL,
  `codigo` varchar(5) NOT NULL,
  `producao` int(11) NOT NULL,
  `defeito` int(11) NOT NULL,
  `quebra` int(11) NOT NULL,
  `parada` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id_venda`, `dia`, `nome`, `turno`, `horas`, `codigo`, `producao`, `defeito`, `quebra`, `parada`) VALUES
(11, '2022-11-29', 'João', 'A', 18, 'P123', 20000, 1, 10, 1),
(12, '2022-11-29', 'Carlos', 'B', 16, 'P456', 18000, 0, 0, 0),
(13, '2022-11-28', 'Marcos', 'C', 16, 'P789', 17000, 0, 0, 0),
(21, '2022-11-29', 'Carlos', 'A', 18, 'P123', 205000, 1, 2, 3),
(22, '2022-11-29', 'Eli', 'C', 18, 'P123', 12000, 1, 1, 1),
(23, '0000-00-00', 'AndreyMala', 'C', 18, 'P456', 19000, 100, 0, 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices para tabela `lucros`
--
ALTER TABLE `lucros`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `producao`
--
ALTER TABLE `producao`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `resultado`
--
ALTER TABLE `resultado`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id_venda`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `lucros`
--
ALTER TABLE `lucros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `producao`
--
ALTER TABLE `producao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `resultado`
--
ALTER TABLE `resultado`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
