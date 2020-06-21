-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2020 às 23:09
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dala`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(55) NOT NULL,
  `category` varchar(55) NOT NULL,
  `details` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `details`, `description`, `image`) VALUES
(14, 'ablablue', '2222', '', '', '', ''),
(15, 'anna', '22', 'feminino', 'legal', 'gente boa', ''),
(16, 'anna', '22', 'feminino', 'legal', 'pequena', ''),
(17, 'aaa', 'a', 'aaaa', 'aaaaaaa', 'aaaa', ''),
(18, 'aaa', 'a', 'aaaa', 'aaaaaaa', 'aaaa', ''),
(19, 'sssssss', 'sssssssss', 'ssssssssssss', 'sssssssssss', 'ssssssssss', ''),
(20, 'ablabluebl', 'zero', 'toy', 'doido', 'demonio da tazmania', ''),
(21, 'blusa', '2', 'feminina', 'rosa', 'algodao', ''),
(22, 'fundo', '1', 'feminino', 'rosa', 'quadrado', 'Design sem nome (4).png'),
(23, 'anna', '2222222', 'feminina', 'legal', 'pequena', 'My_Video_Page.png'),
(25, 'aaaaa', 'aaaaa', 'aaaaaa', 'aaaaaaaaaa', 'aaa', 'nota fiscal.jpg'),
(26, 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(27, 'ssssss', 'ssssss', 'sssssssss', 'sssssssss', 'sssssssss', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(28, 'sssssss', 'sssssss', 'sssssss', 'sssssssss', 'ssssssss', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(29, 'aaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(30, 'eeeeeeee', 'eeeeeeeee', 'eeeeeeeeeee', 'eeeeeeeeeeeeee', 'eeeeeeeeeeeee', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(31, 'wwwwwwwww', 'wwwwww', 'wwwwww', 'wwwwwwwwwww', 'wwwwwwww', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(32, 'qqqqq', 'qqqqq', 'qqqqq', 'qqqq', 'qqqqqqq', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(33, 'zzzzz', 'zzzzzzz', 'zzzzzzzz', 'zzzzzzzzz', 'zzzzzzzzzzz', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(34, 'Anna Letícia Franco Monteiro', '22,22', 'feminina', 'cool, legal em ingles', 'cansada', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(35, 'aaaaaaaa', 'aaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(36, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(37, 'sssssss', 'sssssss', 'ssssssss', 'sssssssssss', 'ssssssssss', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
