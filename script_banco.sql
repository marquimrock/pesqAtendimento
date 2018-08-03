-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Ago-2018 às 02:36
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 5.6.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- crie um banco com nome "enquete" manualmente;
-- Database: `enquete`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id` int(6) NOT NULL,
  `comanda` int(8) NOT NULL,
  `vendedor` text NOT NULL,
  `questao1` text NOT NULL,
  `questao2` text NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`id`, `comanda`, `vendedor`, `questao1`, `questao2`, `data`) VALUES
(17, 9898, 'vendedor 1', 'bom', 'otimo', '0000-00-00 00:00:00'),
(21, 990099, 'vendedor 1', 'bom', 'otimo', '0000-00-00 00:00:00'),
(22, 0, 'vendedor 1', 'otimo', 'otimo', '0000-00-00 00:00:00'),
(23, 44444444, 'vendedor 1', 'bom', 'otimo', '0000-00-00 00:00:00'),
(24, 8888, 'vendedor 1', 'bom', 'otimo', '0000-00-00 00:00:00'),
(25, 99999999, 'vendedor 1', 'bom', 'ruim', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesquisa`
--
ALTER TABLE `pesquisa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesquisa`
--
ALTER TABLE `pesquisa`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
