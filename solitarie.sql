-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10-Nov-2019 às 17:20
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `solitarie`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `telefone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`codigo`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'Albertin', 'albertin@gmail.com', '1', '14936521478'),
(2, 'qwe', 'dois@gmail.com', 'qwe', '11111111111'),
(3, 'qwe', 'qwe@qwe.com', '123', '11111111111'),
(4, 'Vitor', 'vitor@gmail.com', '123', '14991497781');

-- --------------------------------------------------------

--
-- Estrutura da tabela `fornecedores`
--

CREATE TABLE `fornecedores` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `fornecedores`
--

INSERT INTO `fornecedores` (`codigo`, `nome`, `email`, `telefone`) VALUES
(1, 'Joao', 'joao@gmail.com', '14991497781');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `C_Prod` decimal(8,2) NOT NULL,
  `P_Venda` decimal(8,2) NOT NULL,
  `fotoProd` varchar(200) NOT NULL,
  `codTipo` bigint(20) NOT NULL,
  `codForne` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`codigo`, `nome`, `descricao`, `C_Prod`, `P_Venda`, `fotoProd`, `codTipo`, `codForne`) VALUES
(1, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(2, 'Acabate Tres', 'Acabate Treis', '5.00', '7.00', 'abacate.jpg', 1, 1),
(3, 'Acabate Tres', 'Acabate Treis', '10.00', '7.00', 'abacate.jpg', 1, 1),
(4, 'Acabate Tres', 'Acabate Treis', '10.00', '14.00', 'abacate.jpg', 1, 1),
(5, 'Acabate', 'Acabate Treis', '5.00', '7.00', 'abacate.jpg', 1, 1),
(6, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(7, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(8, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(9, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(10, 'Acabate', 'Acabate Treis', '5.00', '7.00', 'abacate.jpg', 1, 1),
(11, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(12, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(13, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(14, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(15, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(16, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(17, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(18, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(19, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(20, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(21, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(22, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(23, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(24, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(25, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(26, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(27, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(28, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(29, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(30, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(31, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(32, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(33, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(34, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(35, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(36, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(37, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(38, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(39, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(40, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(41, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(42, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(43, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(44, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(45, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(46, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(47, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(48, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(49, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(50, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(51, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(52, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(53, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(54, 'Acabate Tres', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(55, 'Acabate Tres', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(56, 'Acabate Tres', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(57, 'Acabate Tres', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(58, 'Acabate Tres', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(59, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(60, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(61, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(62, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(63, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(64, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(65, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(66, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(67, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(68, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(69, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(70, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(71, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(72, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(73, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(74, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(75, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(76, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(77, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(78, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(79, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(80, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(81, 'coca', '2 litro', '15.00', '20.00', 'coca.jpg', 1, 1),
(82, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(83, 'Acabate', 'Acabate Dois', '5.00', '7.00', 'abacate.jpg', 1, 1),
(84, 'diferente', 'diferente dois', '5.00', '7.00', 'abacate.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipoprod`
--

CREATE TABLE `tipoprod` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `tipoprod`
--

INSERT INTO `tipoprod` (`codigo`, `nome`, `descricao`) VALUES
(1, 'Abacate', 'Abacate Dois');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `codigo` bigint(20) NOT NULL,
  `data` date NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `codProd` bigint(20) NOT NULL,
  `codCliente` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codForne` (`codForne`),
  ADD KEY `codTipo` (`codTipo`);

--
-- Índices para tabela `tipoprod`
--
ALTER TABLE `tipoprod`
  ADD PRIMARY KEY (`codigo`);

--
-- Índices para tabela `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `codProd` (`codProd`),
  ADD KEY `codCliente` (`codCliente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `tipoprod`
--
ALTER TABLE `tipoprod`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `vendas`
--
ALTER TABLE `vendas`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `produtos`
--
ALTER TABLE `produtos`
  ADD CONSTRAINT `produtos_ibfk_1` FOREIGN KEY (`codForne`) REFERENCES `fornecedores` (`codigo`),
  ADD CONSTRAINT `produtos_ibfk_2` FOREIGN KEY (`codTipo`) REFERENCES `tipoprod` (`codigo`);

--
-- Limitadores para a tabela `vendas`
--
ALTER TABLE `vendas`
  ADD CONSTRAINT `vendas_ibfk_1` FOREIGN KEY (`codProd`) REFERENCES `produtos` (`codigo`),
  ADD CONSTRAINT `vendas_ibfk_2` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`codigo`),
  ADD CONSTRAINT `vendas_ibfk_3` FOREIGN KEY (`codCliente`) REFERENCES `clientes` (`codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
