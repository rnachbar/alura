-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Fev-2017 às 20:12
-- Versão do servidor: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `controle_compras`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `compradores`
--

CREATE TABLE `compradores` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compradores`
--

INSERT INTO `compradores` (`id`, `nome`, `endereco`, `telefone`) VALUES
(1, 'raphael', 'sebastiao alves', '999999999'),
(2, 'nachbar', 'rua dois', '11111111');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  `data` date DEFAULT NULL,
  `recebido` tinyint(1) DEFAULT '0',
  `observacoes` text NOT NULL,
  `forma_pagt` enum('cartao','dinheiro','boleto') DEFAULT NULL,
  `comprador_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `valor`, `data`, `recebido`, `observacoes`, `forma_pagt`, `comprador_id`) VALUES
(1, 1500, '2016-02-03', 1, 'geladeira nova', 'boleto', 1),
(2, 400, '2016-01-14', 0, 'hd externo', 'boleto', 1),
(3, 200, '2008-02-19', 1, 'MATERIAL ESCOLAR', 'boleto', 1),
(4, 3500, '2008-05-21', 0, 'TELEVISAO', 'boleto', 1),
(5, 1576.4, '2008-04-30', 1, 'MATERIAL DE CONSTRUCAO', 'boleto', 1),
(6, 163.45, '2008-12-15', 1, 'PIZZA PRA FAMILIA', 'boleto', 1),
(7, 4780, '2009-01-23', 1, 'SALA DE ESTAR', 'boleto', 1),
(8, 392.15, '2009-03-03', 1, 'QUARTOS', 'boleto', 1),
(10, 402.9, '2009-03-21', 1, 'COPA', 'boleto', 2),
(11, 54.98, '2009-04-12', 0, 'LANCHONETE', 'boleto', 2),
(12, 12.34, '2009-05-23', 0, 'LANCHONETE', 'boleto', 2),
(13, 78.65, '2009-12-04', 1, 'entregue antes de 2011', 'boleto', 2),
(14, 12.39, '2009-01-06', 0, 'SORVETE NO PARQUE', 'boleto', 2),
(15, 98.12, '2009-07-09', 1, 'entregue antes de 2011', 'boleto', 2),
(16, 2498, '2009-01-12', 1, 'COMPRAS DE JANEIRO', 'boleto', 2),
(17, 3212.4, '2009-11-13', 1, 'entregue antes de 2011', 'boleto', 2),
(18, 223.09, '2009-12-17', 1, 'entregue antes de 2011', 'boleto', 2),
(19, 768.9, '2009-01-16', 1, 'FESTA', 'boleto', 2),
(20, 910, '2010-01-09', 1, 'entregue antes de 2011', 'boleto', 2),
(21, 12, '2010-02-19', 1, 'entregue antes de 2011', 'boleto', 2),
(22, 678.43, '2010-05-21', 1, 'entregue antes de 2011', 'boleto', 2),
(23, 10937.12, '2010-04-30', 1, 'entregue antes de 2011', 'boleto', 2),
(24, 1501, '2010-06-22', 1, 'entregue antes de 2011', 'boleto', 2),
(25, 1709, '2010-08-25', 0, 'PARCELA DA CASA', 'boleto', 2),
(26, 567.09, '2010-09-25', 0, 'PARCELA DO CARRO', 'boleto', 2),
(27, 631.53, '2010-10-12', 1, 'IPTU', 'boleto', 2),
(28, 909.11, '2010-02-11', 1, 'entregue antes de 2011', 'boleto', 2),
(29, 768.18, '2010-04-10', 1, 'entregue antes de 2011', 'boleto', 2),
(30, 434, '2010-04-01', 1, 'entregue antes de 2011', 'boleto', 2),
(31, 115.9, '2010-06-12', 1, 'entregue antes de 2011', 'boleto', 2),
(32, 98, '2010-10-12', 0, 'DIA DAS CRIANÇAS', 'boleto', 2),
(33, 253.7, '2010-12-20', 0, 'preparando o natal', 'boleto', 2),
(34, 370.15, '2010-12-25', 0, 'COMPRAS DE NATAL', 'boleto', 2),
(35, 32.09, '2011-07-02', 1, 'LANCHONETE', 'boleto', 2),
(36, 954.12, '2011-11-03', 1, 'SHOW DA IVETE SANGALO', 'boleto', 2),
(37, 98.7, '2011-02-07', 1, 'LANCHONETE', 'boleto', 2),
(38, 213.5, '2011-09-25', 0, 'ROUPAS', 'boleto', 2),
(39, 1245.2, '2011-10-17', 0, 'ROUPAS', 'boleto', 2),
(40, 23.78, '2011-12-18', 1, 'LANCHONETE DO ZÉ', 'boleto', 2),
(41, 576.12, '2011-09-13', 1, 'SAPATOS', 'boleto', 2),
(42, 12.34, '2011-07-19', 0, 'CANETAS', 'boleto', 2),
(43, 87.43, '2011-05-10', 0, 'GRAVATA', 'boleto', 2),
(46, 500, '2014-04-05', 1, 'presente', 'boleto', 2),
(47, 500, '2014-04-05', 0, 'presente', 'boleto', 2),
(48, 500, '2014-04-05', 0, 'presente mae', 'boleto', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compradores`
--
ALTER TABLE `compradores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comprador_id` (`comprador_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compradores`
--
ALTER TABLE `compradores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`comprador_id`) REFERENCES `compradores` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
