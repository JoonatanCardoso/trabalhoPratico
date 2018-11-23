-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23-Nov-2018 às 03:14
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdlocadora`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `id` int(254) NOT NULL,
  `CPF` varchar(254) DEFAULT NULL,
  `RG` varchar(254) DEFAULT NULL,
  `NOME` varchar(254) DEFAULT NULL,
  `ENDERECO` varchar(254) DEFAULT NULL,
  `CARGO` varchar(254) DEFAULT NULL,
  `DATAADMISSAO` varchar(254) DEFAULT NULL,
  `DATADEMISSAO` varchar(254) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`id`, `CPF`, `RG`, `NOME`, `ENDERECO`, `CARGO`, `DATAADMISSAO`, `DATADEMISSAO`) VALUES
(2, '6454', '44546', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(3, 'asdasdas', 'dsadas', 'dsadasdas', 'dsadasdas', 'dasdasdas', 'dsadasdas', NULL),
(4, '6454', '44546', 'FLavio', 'dsadasdas', 'varredor', '21/98/4562', NULL),
(5, '6454', '44546', 'FLavio', 'dsadasdas', 'Gerenadsadsadas', '21/98/4562', NULL),
(6, '6454', '44546', 'FLavioas', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(7, '6454', '44546', 'FLavioas', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(8, '6454', '44546', 'FLavioas', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(9, '6454', '44546', 'FLaviodsadsa', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(10, '6454ds', '44546', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(11, '6454dsa', '44546', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(12, '6454', '44546', 'FLaviodsadas', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(13, '6454dasdas', '44546', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(14, '6454as', '44546', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(15, '6454', '44546as', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(16, '6454', '445s46', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL),
(17, '6454', '44546asas', 'FLavio', 'dsadasdas', 'Gerente', '21/98/4562', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionario`
--
ALTER TABLE `funcionario`
  MODIFY `id` int(254) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
