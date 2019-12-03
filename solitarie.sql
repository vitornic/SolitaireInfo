-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 03-Dez-2019 às 06:43
-- Versão do servidor: 10.4.8-MariaDB
-- versão do PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-04:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `solitarie`
--

CREATE DATABASE `solitarie`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `administradores`
--

CREATE TABLE `administradores` (
  `codigo` bigint(20) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `senha` varchar(100) DEFAULT NULL,
  `telefone` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `administradores`
--

INSERT INTO `administradores` (`codigo`, `nome`, `email`, `senha`, `telefone`) VALUES
(1, 'vitor', 'vitoradm2@gmail.com', '123', '14365214786'),
(2, 'qwe', 'qwe@gmail.com', '123', '14991497781'),
(3, 'qwe', 'qqwewe@gmail.com', '123', '14991497781'),
(4, 'qwe', 'qwewqe@gmail.com', '111', '11111111111');

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
(2, 'qwe', 'dois@gmail.com', 'qwe', '11111111111'),
(3, 'qwe', 'qwe@qwe.com', '123', '11111111111'),
(4, 'Vitor', 'vitor@gmail.com', '123', '14991497781'),
(5, 'qwe', 'wea123re@hotmail.com', '123', '14991497781'),
(6, 'qwe', 'qw1233123e@qwe.com', '123', '14991497781'),
(7, '7-7*778.', 'doiqwes@gmail.com', '123', '11111111111'),
(8, 'qqqqqq', 'qwe@q123we.com', '11111', '11111111111'),
(9, 'qwe1', 'q123123we@qwe.com', '111', '14991497781');

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
(1, 'Joao', 'joao@gmail.com', '14991497781'),
(2, 'DoisEu', 'clauzereu@gmail.com', '14991497781'),
(3, 'DoisEu123', 'clauzeqwereu@gmail.com', '14991497781'),
(4, 'DoisEu', 'clauzeqqwewereu@gmail.com', '14991497781');

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
(1, 'Dell Inspiron', 'Dell Inspiron 4gb', '800.00', '1100.00', 'notebook.jpg', 1, 1),
(2, 'Teclado deathstalker', 'Gamer, Iluminado', '300.00', '499.00', 'teclado.png', 2, 2),
(3, 'Controle Xbox', 'controle xbox', '100.00', '200.00', 'xbox.png', 3, 3),
(4, 'The Last of Us', 'Jogo The Last of Us', '50.00', '100.00', 'jogos.png', 4, 4),
(5, 'SDD', '5mb/s leitura, 4mb/s gravação', '180.00', '200.00', 'ssd.png', 5, 2),
(6, 'placa de video', 'geforce galaxy', '600.00', '750.00', 'video.png', 6, 1),
(7, 'Caixa de som', 'led, bluetooth', '80.00', '120.00', 'audio.png', 7, 1),
(8, 'Roteador', '15m', '110.00', '150.00', 'redes.png', 9, 2),
(9, 'Venennum', '32gb RAM ddr4, intel i7 9900KS', '12000.00', '15000.00', 'pc.png', 1, 1);

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
(1, 'Computador', 'Categoria de Computadores'),
(2, 'Perifericos', 'Categoria de Perifericos'),
(3, 'Acessorios', 'Categoria de Acessorios'),
(4, 'Jogos', 'Categoria para jogos'),
(5, 'armazenmento', 'categoria para armazenamento'),
(6, 'Video', 'categoria para video'),
(7, 'Audio', 'Categoria para audio'),
(8, 'Gabinetes', 'Categoria para gabinetes'),
(9, 'Redes', 'categoria para redes');

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
-- Índices para tabela `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`codigo`);

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
-- AUTO_INCREMENT de tabela `administradores`
--
ALTER TABLE `administradores`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `clientes`
--
ALTER TABLE `clientes`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `fornecedores`
--
ALTER TABLE `fornecedores`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT de tabela `tipoprod`
--
ALTER TABLE `tipoprod`
  MODIFY `codigo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
