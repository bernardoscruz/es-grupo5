-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Maio-2019 às 15:50
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

CREATE TABLE `clientes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cnpj` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nome` varchar(195) NOT NULL,
  `cidade` varchar(195) NOT NULL,
  `estado` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cnpj`, `nome`, `cidade`, `estado`) VALUES
(0, '12345678901234', '', '', 0),
(35, '111111111111', '', '', 0),
(36, '111111111111', '', '', 0),
(37, '22222222222', '', '', 0),
(38, '122121312', '', '', 0),
(41, '12345678901234', '', '', 0),
(42, '12345678901234', '', '', 0),
(43, '32131313131313', '', '', 0),
(44, '23.112.131/131', '', '', 0),
(45, '23.112.131/131', '', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_identificacao` int(11) NOT NULL,
  `salario` float NOT NULL,
  `cargo` enum('vendedor','administrador') NOT NULL,
  `cidade` varchar(195) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `nome` varchar(195) NOT NULL,
  `email` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade` int(11) NOT NULL,
  `quantidade_minima` int(11) NOT NULL,
  `valor_compra` double(8,2) NOT NULL,
  `valor_venda` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `quantidade`, `quantidade_minima`, `valor_compra`, `valor_venda`, `created_at`, `updated_at`) VALUES
(12, 'Ovo 2', 1, 1, 10.00, 10.00, NULL, NULL),
(11, 'Ovo de Páscoa', 30, 20, 20.00, 40.00, NULL, NULL),
(10, 'Ovo de Páscoa', 20, 10, 1.50, 4.50, NULL, NULL),
(9, 'Ovo de Páscoa - Laka', 40, 10, 20.00, 35.00, NULL, NULL),
(13, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL),
(14, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL),
(15, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL),
(16, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL),
(17, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL),
(18, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL),
(19, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL),
(20, 'Ovo de pascoa', 1, 1, 20.00, 20.00, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` enum('cliente','administrador','gerente','funcionario') COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `categoria`, `remember_token`, `created_at`, `updated_at`, `cidade`, `estado`) VALUES
(42, 'Seu ZÃ©', 'seuze@email.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Juiz de Fora', 'RJ'),
(44, 'Lucas Castro', 'te123ste@teste.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Juiz de Fora', 'Minas Gerais'),
(41, 'Aninha', 'ana@email.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Recife', 'Pernambuco'),
(39, 'admin', 'adm@adm.com', '96e79218965eb72c92a549dd5a330112', 'administrador', NULL, NULL, NULL, 'Juiz de Fora', 'MG'),
(43, 'Teste', 'teste@teste.com', '96e79218965eb72c92a549dd5a330112', 'administrador', NULL, NULL, NULL, 'Juiz de Fora', 'Minas Gerais'),
(45, 'Lucas Castro', 'tes34235te@teste.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Juiz de Fora', 'Minas Gerais');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
