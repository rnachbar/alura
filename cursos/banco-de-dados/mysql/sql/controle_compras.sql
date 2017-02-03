-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03-Fev-2017 às 17:40
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
-- Estrutura da tabela `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `valor` double DEFAULT NULL,
  `data` date DEFAULT NULL,
  `recebido` tinyint(1) DEFAULT NULL,
  `observacoes` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `valor`, `data`, `recebido`, `observacoes`) VALUES
(1, 1500, '2016-02-03', 1, 'geladeira nova'),
(2, 400, '2016-01-14', 0, 'hd externo'),
(3, 200, '2008-02-19', 1, 'MATERIAL ESCOLAR'),
(4, 3500, '2008-05-21', 0, 'TELEVISAO'),
(5, 1576.4, '2008-04-30', 1, 'MATERIAL DE CONSTRUCAO'),
(6, 163.45, '2008-12-15', 1, 'PIZZA PRA FAMILIA'),
(7, 4780, '2009-01-23', 1, 'SALA DE ESTAR'),
(8, 392.15, '2009-03-03', 1, 'QUARTOS'),
(9, 1203, '2009-03-18', 1, 'QUARTOS'),
(10, 402.9, '2009-03-21', 1, 'COPA'),
(11, 54.98, '2009-04-12', 0, 'LANCHONETE'),
(12, 12.34, '2009-05-23', 0, 'LANCHONETE'),
(13, 78.65, '2009-12-04', 0, 'LANCHONETE'),
(14, 12.39, '2009-01-06', 0, 'SORVETE NO PARQUE'),
(15, 98.12, '2009-07-09', 1, 'HOPI HARI'),
(16, 2498, '2009-01-12', 1, 'COMPRAS DE JANEIRO'),
(17, 3212.4, '2009-11-13', 1, 'COMPRAS DO MES'),
(18, 223.09, '2009-12-17', 1, 'COMPRAS DE NATAL'),
(19, 768.9, '2009-01-16', 1, 'FESTA'),
(20, 827.5, '2010-01-09', 1, 'FESTA'),
(21, 12, '2010-02-19', 1, 'SALGADO NO AEROPORTO'),
(22, 678.43, '2010-05-21', 1, 'PASSAGEM PRA BAHIA'),
(23, 10937.12, '2010-04-30', 1, 'CARNAVAL EM CANCUN'),
(24, 1501, '2010-06-22', 0, 'PRESENTE DA SOGRA'),
(25, 1709, '2010-08-25', 0, 'PARCELA DA CASA'),
(26, 567.09, '2010-09-25', 0, 'PARCELA DO CARRO'),
(27, 631.53, '2010-10-12', 1, 'IPTU'),
(28, 909.11, '2010-02-11', 1, 'IPVA'),
(29, 768.18, '2010-04-10', 1, 'GASOLINA VIAGEM PORTO ALEGRE'),
(30, 434, '2010-04-01', 0, 'RODEIO INTERIOR DE SAO PAULO'),
(31, 115.9, '2010-06-12', 0, 'DIA DOS NAMORADOS'),
(32, 98, '2010-10-12', 0, 'DIA DAS CRIANÇAS'),
(33, 253.7, '2010-12-20', 0, 'NATAL - PRESENTES'),
(34, 370.15, '2010-12-25', 0, 'COMPRAS DE NATAL'),
(35, 32.09, '2011-07-02', 1, 'LANCHONETE'),
(36, 954.12, '2011-11-03', 1, 'SHOW DA IVETE SANGALO'),
(37, 98.7, '2011-02-07', 1, 'LANCHONETE'),
(38, 213.5, '2011-09-25', 0, 'ROUPAS'),
(39, 1245.2, '2011-10-17', 0, 'ROUPAS'),
(40, 23.78, '2011-12-18', 1, 'LANCHONETE DO ZÉ'),
(41, 576.12, '2011-09-13', 1, 'SAPATOS'),
(42, 12.34, '2011-07-19', 0, 'CANETAS'),
(43, 87.43, '2011-05-10', 0, 'GRAVATA'),
(44, 887.66, '2011-02-02', 1, 'PRESENTE PARA O FILHAO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
