-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 10-Jun-2019 às 20:31
-- Versão do servidor: 5.7.21
-- PHP Version: 7.2.4

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

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cnpj` varchar(18) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `cnpj`, `usuario_id`) VALUES
(1, '21.312.312/321', 0),
(2, '21.312.312/312', 0),
(3, '99.999.999/9999-99', 52),
(6, '11.111.111/1111-11', 55),
(7, '22.222.222/2222-22', 56),
(8, '11.111.111/1111-11', 57);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
CREATE TABLE IF NOT EXISTS `funcionarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `cpf` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `numero_identificacao` int(11) NOT NULL,
  `salario` float NOT NULL,
  `cargo` enum('vendedor','administrador') NOT NULL,
  `usuario_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `usuario_id` (`usuario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`id`, `cpf`, `numero_identificacao`, `salario`, `cargo`, `usuario_id`) VALUES
(5, '14123123213', 1, 998, 'vendedor', 43),
(6, '222.222.222-22', 200, 200, 'vendedor', 62),
(7, '333.333.333-33', 123, 10000, 'administrador', 63);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `preco` float NOT NULL,
  `fabricante` varchar(195) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desconto` float NOT NULL,
  `quantidade` int(11) NOT NULL,
  `setor_id` int(11) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `setor_id` (`setor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `fabricante`, `desconto`, `quantidade`, `setor_id`) VALUES
(28, 'Leite', 2, 'Porto Alegre', 1, 213, 5),
(27, 'MaÃ§a (KG)', 10, 'ZÃ©', 2, 100, 1),
(29, 'Banana (KG)', 6, 'ZÃ©', 2, 300, 1),
(26, 'Teste', 3214, '12', 132, 321, 4),
(30, 'OVO', 1, '12', 231, 231, 4),
(31, 'Queijo', 5, 'Seu ZÃ©', 1, 200, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `setores`
--

DROP TABLE IF EXISTS `setores`;
CREATE TABLE IF NOT EXISTS `setores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(195) NOT NULL,
  `administrador_responsavel` varchar(195) NOT NULL,
  `numero_identificacao` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `setores`
--

INSERT INTO `setores` (`id`, `nome`, `administrador_responsavel`, `numero_identificacao`) VALUES
(1, 'Alimentos', 'Lucas', 23123231),
(5, 'LatÃ­cinios', 'Seu ZÃ©', 1234);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `senha` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` enum('cliente','administrador','vendedor') COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`, `categoria`, `cidade`, `estado`) VALUES
(42, 'Seu ZÃ©', 'seuze@email.com', '96e79218965eb72c92a549dd5a330112', 'cliente', 'Juiz de Fora', 'RJ'),
(49, 'Teste', 'cliente@teste.com', '96e79218965eb72c92a549dd5a330112', 'administrador', 'C', 'RN'),
(48, 'Lucas Castro', 'teste@teste.com22', '96e79218965eb72c92a549dd5a330112', 'administrador', 'Juiz de Fora', 'MG'),
(47, 'Lucas Castro', 'wqe@teste.com', '96e79218965eb72c92a549dd5a330112', 'cliente', 'Juiz de Fora', 'MG'),
(50, 'Lucas 132132', 'tes213te@teste.com', '96e79218965eb72c92a549dd5a330112', 'cliente', 'Juiz de Fora', 'MG'),
(51, 'TESTE', 'pia213zzi@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'cliente', 'Juiz de Fora', 'MG'),
(55, 'Lucas', 'lucas@email.com', '96e79218965eb72c92a549dd5a330112', 'cliente', 'GoianÃ¡', 'PI'),
(54, 'A', 'Ateste@teste.com', '96e79218965eb72c92a549dd5a330112', 'cliente', 'AA', ''),
(56, 'Bernardo', 'bernardo.email.com', 'b0baee9d279d34fa1dfd71aadb908c3f', 'cliente', 'Belo Horizonte', 'MG'),
(57, 'Adriana', 'aaa@mail.com', '7fa8282ad93047a4d6fe6111c93b308a', 'cliente', 'Juiz de Fora', 'MG'),
(58, 'Luis', 'luis@email.com', '96e79218965eb72c92a549dd5a330112', 'administrador', 'Juiz de Fora', 'MG'),
(59, 'AAAA', 'aaaa@email.com', '96e79218965eb72c92a549dd5a330112', 'administrador', 'Juiz de Fora', 'MG'),
(60, 'AAAA', 'qweqweaaaa@email.com', '7fa8282ad93047a4d6fe6111c93b308a', 'administrador', 'Juiz de Fora', 'MG'),
(61, 'Alice', 'alice@mail.com', '96e79218965eb72c92a549dd5a330112', 'administrador', 'Juiz de Fora', 'MG'),
(62, 'Ana', 'ana@mail.com', '96e79218965eb72c92a549dd5a330112', 'administrador', 'Porto Seguro', 'BA'),
(63, 'ZÃ©', 'ze@mail.com', '96e79218965eb72c92a549dd5a330112', 'administrador', 'Juiz de Fora', 'MG');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(10) UNSIGNED NOT NULL,
  `data` date NOT NULL,
  `funcionario_id` int(10) UNSIGNED NOT NULL,
  `valor` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cliente_id` (`cliente_id`),
  KEY `funcionario_id` (`funcionario_id`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `cliente_id`, `data`, `funcionario_id`, `valor`) VALUES
(36, 36, '2019-06-08', 5, 525),
(37, 4, '2019-06-09', 5, 15),
(38, 6, '2019-06-27', 7, 2073),
(39, 7, '2019-06-10', 6, 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda_produto`
--

DROP TABLE IF EXISTS `venda_produto`;
CREATE TABLE IF NOT EXISTS `venda_produto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produto_id` int(11) NOT NULL,
  `venda_id` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `produto_id` (`produto_id`),
  KEY `venda_id` (`venda_id`)
) ENGINE=InnoDB AUTO_INCREMENT=110 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `venda_produto`
--

INSERT INTO `venda_produto` (`id`, `produto_id`, `venda_id`, `quantidade`) VALUES
(93, 26, 35, 1),
(94, 30, 35, 6),
(95, 28, 35, 6),
(96, 28, 35, 6),
(97, 28, 35, 6),
(98, 29, 36, 1),
(99, 30, 37, 1),
(100, 30, 37, 2),
(101, 30, 37, 3),
(102, 30, 37, 4),
(103, 30, 37, 5),
(104, 31, 38, 1),
(105, 28, 38, 2),
(106, 27, 38, 3),
(107, 27, 38, 4),
(108, 31, 38, 5),
(109, 31, 39, 10);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
