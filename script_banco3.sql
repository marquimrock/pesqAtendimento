-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07-Ago-2018 às 01:29
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

--
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
  `questao3` text NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pesquisa`
--

INSERT INTO `pesquisa` (`id`, `comanda`, `vendedor`, `questao1`, `questao2`, `questao3`, `data`, `hora`) VALUES
(58, 1, 'BRUNA', 'bom', 'bom', 'bom', '2018-08-04', '00:00:00'),
(59, 2, 'CAMILA', 'bom', 'bom', 'bom', '2018-08-04', '00:00:00'),
(60, 2, 'CAMILA', 'otimo', 'otimo', 'otimo', '2018-08-04', '00:00:00'),
(61, 1, 'BRUNA', 'bom', 'bom', 'bom', '2018-08-04', '00:00:00'),
(62, 55, '', 'ruim', 'bom', 'otimo', '2018-08-04', '00:00:00'),
(63, 1, 'BRUNA', 'ruim', 'ruim', 'ruim', '2018-08-04', '00:00:00'),
(64, 2, 'CAMILA', 'bom', 'bom', 'bom', '2018-08-05', '00:00:00'),
(65, 1, 'BRUNA', 'otimo', 'otimo', 'otimo', '2018-08-06', '00:00:00'),
(66, 1, 'BRUNA', 'ruim', 'ruim', 'ruim', '2018-08-06', '19:58:00'),
(67, 2, 'CAMILA', 'ruim', 'ruim', 'ruim', '2018-08-06', '19:59:00');

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
