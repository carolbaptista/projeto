-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Mar-2018 às 00:23
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mah`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastroc`
--

CREATE TABLE `cadastroc` (
  `id` int(25) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `cpf` bigint(255) NOT NULL,
  `telefone` int(255) NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL,
  `nascimento` date NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `senha` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `cadastroc`
--

INSERT INTO `cadastroc` (`id`, `nome`, `cpf`, `telefone`, `endereco`, `nascimento`, `email`, `senha`) VALUES
(1, 'Julio', 12345678912, 2504, 'Rua Huston', '1996-03-01', 'julio@gmail.com', '12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido`
--

CREATE TABLE `pedido` (
  `id` int(20) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `endereco` varchar(255) COLLATE utf8_bin NOT NULL,
  `nomep` varchar(255) COLLATE utf8_bin NOT NULL,
  `precop` int(20) NOT NULL,
  `status` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `pedido`
--

INSERT INTO `pedido` (`id`, `nome`, `endereco`, `nomep`, `precop`, `status`) VALUES
(41, 'Karina', 'Rua Topster, Casa 7', 'A Culpa e das Estrelas', 25, 'caminho'),
(42, '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(255) NOT NULL,
  `nomep` varchar(255) COLLATE utf8_bin NOT NULL,
  `preco` int(20) NOT NULL,
  `descricao` varchar(255) COLLATE utf8_bin NOT NULL,
  `tipo` varchar(255) COLLATE utf8_bin NOT NULL,
  `foto` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nomep`, `preco`, `descricao`, `tipo`, `foto`) VALUES
(1, 'Camisa Lacoste', 95, 'Bem Bonita', 'Vestuario', 'camisa.jpg'),
(2, 'PES 2018', 150, 'PES 2018 - XBOX360', 'Games', 'pes.jpg'),
(3, 'Minecraft', 80, 'Minecraft - 2018', 'Games', 'mine.jpg'),
(4, 'Tablet Samsung Galaxy', 459, 'Tab A T280 8GB 7 Wi-Fi - Android 5.1 Proc. Quad Core Camera 5MP + Frontal', 'Celulares', 's.jpg'),
(5, 'A Culpa e das Estrelas', 25, 'Drama', 'Livros', 'c.jpg'),
(6, 'Mouse', 65, 'Utilizavel', 'Informatica', 'i.jpg'),
(7, 'Televisao', 759, 'Led', 'Eletronicos', 'tv.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedor`
--

CREATE TABLE `vendedor` (
  `id` int(4) NOT NULL,
  `nomev` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` bigint(11) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastroc`
--
ALTER TABLE `cadastroc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastroc`
--
ALTER TABLE `cadastroc`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
