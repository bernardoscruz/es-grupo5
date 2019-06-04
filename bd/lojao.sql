-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04-Jun-2019 às 15:56
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
  `usuario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cnpj`, `usuario_id`) VALUES
(0, '12345678901234', 0),
(35, '111111111111', 0),
(36, '111111111111', 0),
(37, '22222222222', 0),
(38, '122121312', 0),
(41, '12345678901234', 0),
(42, '12345678901234', 0),
(43, '32131313131313', 0),
(44, '23.112.131/131', 0),
(46, '23.112.131/131', 0);

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
  `usuario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `cpf`, `numero_identificacao`, `salario`, `cargo`, `usuario_id`) VALUES
(1, '14123123213', 123, 998, 'vendedor', 0),
(2, '231.213.123', 231, 231, 'vendedor', 0),
(3, '231.213.212', 231321, 213213, 'vendedor', 0),
(4, '324.234.324', 321, 213231, 'administrador', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` float NOT NULL,
  `fabricante` varchar(195) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desconto` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `setor_id` int(11) UNSIGNED NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `fabricante`, `desconto`, `quantidade`, `setor_id`) VALUES
(12, 'Ovo 2', 0, '', 0, 0, 0),
(11, 'Ovo de Páscoa', 0, '', 0, 0, 0),
(10, 'Ovo de Páscoa', 0, '', 0, 0, 0),
(9, 'Ovo de Páscoa - Laka', 0, '', 0, 0, 0),
(13, 'Ovo de pascoa', 0, '', 0, 0, 0),
(14, 'Ovo de pascoa', 0, '', 0, 0, 0),
(15, 'Ovo de pascoa', 0, '', 0, 0, 0),
(16, 'Ovo de pascoa', 0, '', 0, 0, 0),
(17, 'Ovo de pascoa', 0, '', 0, 0, 0),
(18, 'Ovo de pascoa', 0, '', 0, 0, 0),
(19, 'Ovo de pascoa', 0, '', 0, 0, 0),
(20, 'Ovo de pascoa', 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `setores` (
  `id` int(11) NOT NULL,
  `nome` varchar(195) NOT NULL,
  `administrador_responsavel` varchar(195) NOT NULL,
  `numero_identificacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `setores` (`id`, `nome`, `administrador_responsavel`, `numero_identificacao`) VALUES
(1, 'Alimentos', 'Lucas', 23123);

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
(39, 'admin1', 'adm@adm.com', '96e79218965eb72c92a549dd5a330112', 'funcionario', NULL, NULL, NULL, 'Juiz de Fora', 'MG'),
(43, 'Teste', 'teste@teste.com', '96e79218965eb72c92a549dd5a330112', 'administrador', NULL, NULL, NULL, 'Juiz de Fora', 'Minas Gerais'),
(47, 'Lucas Castro', 'wqe@teste.com', '96e79218965eb72c92a549dd5a330112', 'cliente', NULL, NULL, NULL, 'Juiz de Fora', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

CREATE TABLE `vendas` (
  `id` int(11) NOT NULL,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `funcionario_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto`
--

CREATE TABLE `venda_produto` (
  `id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `venda_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario_id` (`usuario_id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setor_id` (`setor_id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `setores`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendas`
--
ALTER TABLE `vendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente_id` (`cliente_id`),
  ADD KEY `funcionario_id` (`funcionario_id`);

--
-- Indexes for table `venda_produto`
--
ALTER TABLE `venda_produto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `produto_id` (`produto_id`),
  ADD KEY `venda_id` (`venda_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `funcionarios`
--
ALTER TABLE `funcionarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `setores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `vendas`
--
ALTER TABLE `vendas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `venda_produto`
--
ALTER TABLE `venda_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
