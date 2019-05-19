-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Maio-2019 às 23:16
-- Versão do servidor: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
  `cnpj` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cnpj`) VALUES
(0, '12345678901234'),
(35, '111111111111'),
(36, '111111111111'),
(37, '22222222222'),
(38, '122121312'),
(40, '12345678901234'),
(41, '12345678901234'),
(42, '12345678901234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL,
  `cpf` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numIdentificacao` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
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
(42, 'Seu ZÃ©', 'seuze@email.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Juiz de Fora', 'MG'),
(40, 'JoÃ£o', 'joao@email.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Belo Horizonte', 'MG'),
(41, 'Aninha', 'ana@email.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Recife', 'Pernambuco'),
(39, 'admin', 'adm@adm.com', '96e79218965eb72c92a549dd5a330112', 'administrador', NULL, NULL, NULL, 'Juiz de Fora', 'MG');

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
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
