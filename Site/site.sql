-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 02-Nov-2022 às 19:32
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `site`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `recover_solicitation`
--

CREATE TABLE `recover_solicitation` (
  `id` int(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `rash` varchar(200) NOT NULL,
  `status` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `recover_solicitation`
--

INSERT INTO `recover_solicitation` (`id`, `email`, `rash`, `status`) VALUES
(1, 'rian-neris@hotmail.com', '7fb6d3f1cdfae5ff5c3a7387935a9e16', NULL),
(2, 'rian-neris@hotmail.com', 'e3e7f7ccaf4c0089fe677ef89f69e448', NULL),
(3, 'rian-neris@hotmail.com', '97f736f371dbe7cbee53eadd3e9e2a7e', NULL),
(4, 'rian-neris@hotmail.com', 'e2eee282a71595b3fb93ab19476e2b45', NULL),
(5, 'rian-neris@hotmail.com', 'a36fa655e205db506dd5dc6510eae769', NULL),
(6, 'rian-neris@hotmail.com', '5ec0fbbb14a22a612c308fdeb73ae849', NULL),
(7, 'rian-neris@hotmail.com', '1bca1cdf24922001cb16c030fbc84c36', NULL),
(8, 'rian-neris@hotmail.com', '4728598d3f399971b01b91c01bebada0', NULL),
(9, 'rian-neris@hotmail.com', '39bee20de0ad3043c317e5c52febff57', NULL),
(10, 'rian-neris@hotmail.com', 'db5e6f31dfbc940755ae6c7a0462ec62', NULL),
(11, 'rian-neris@hotmail.com', '0dfb5a954f859f4f786efbd7c10d8d40', NULL),
(12, 'rian-neris@hotmail.com', 'b298bb7a54f6588752394565b4cc7f21', NULL),
(13, 'rian-neris@hotmail.com', '397d585ea0f12a54635f146310362925', NULL),
(14, 'rian-neris@hotmail.com', '87b2958f381b614c2a55597632195edc', NULL),
(15, 'rian-neris@hotmail.com', '582ae7ebf83882657cd477a4205723aa', NULL),
(16, 'rian-neris@hotmail.com', '2aa2d35a9bd4baaacf573eb71ddb83b6', NULL),
(17, 'rian-neris@hotmail.com', '151ca994897270f7ee3c3617f0e60016', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(50) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `email`, `senha`) VALUES
(1, 'Rian Neris', 'rian6081', 'rian-neris@hotmail.com', 'cb2b28afc2cc836b33eb7ed86f99e65a');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `recover_solicitation`
--
ALTER TABLE `recover_solicitation`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `recover_solicitation`
--
ALTER TABLE `recover_solicitation`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
