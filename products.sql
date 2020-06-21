-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Jun-2020 às 23:49
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
  `gender` int(55) NOT NULL,
  `category` varchar(55) NOT NULL,
  `details` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `gender`, `category`, `details`, `description`, `image`) VALUES
(14, 'ablablue', '2222', 0, '', '', '', ''),
(15, 'anna', '22', 0, 'feminino', 'legal', 'gente boa', ''),
(16, 'anna', '22', 0, 'feminino', 'legal', 'pequena', ''),
(17, 'aaa', 'a', 0, 'aaaa', 'aaaaaaa', 'aaaa', ''),
(18, 'aaa', 'a', 0, 'aaaa', 'aaaaaaa', 'aaaa', ''),
(19, 'sssssss', 'sssssssss', 0, 'ssssssssssss', 'sssssssssss', 'ssssssssss', ''),
(20, 'ablabluebl', 'zero', 0, 'toy', 'doido', 'demonio da tazmania', ''),
(21, 'blusa', '2', 0, 'feminina', 'rosa', 'algodao', ''),
(22, 'fundo', '1', 0, 'feminino', 'rosa', 'quadrado', 'Design sem nome (4).png'),
(23, 'anna', '2222222', 0, 'feminina', 'legal', 'pequena', 'My_Video_Page.png'),
(25, 'aaaaa', 'aaaaa', 0, 'aaaaaa', 'aaaaaaaaaa', 'aaa', 'nota fiscal.jpg'),
(26, 'aaaaaaaa', 'aaaaaaaaa', 0, 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(27, 'ssssss', 'ssssss', 0, 'sssssssss', 'sssssssss', 'sssssssss', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(28, 'sssssss', 'sssssss', 0, 'sssssss', 'sssssssss', 'ssssssss', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(29, 'aaaaaaaa', 'aaaaaaaaa', 0, 'aaaaaaaaaa', 'aaaaaaaaaaa', 'aaaaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(30, 'eeeeeeee', 'eeeeeeeee', 0, 'eeeeeeeeeee', 'eeeeeeeeeeeeee', 'eeeeeeeeeeeee', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(31, 'wwwwwwwww', 'wwwwww', 0, 'wwwwww', 'wwwwwwwwwww', 'wwwwwwww', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(32, 'qqqqq', 'qqqqq', 0, 'qqqqq', 'qqqq', 'qqqqqqq', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(33, 'zzzzz', 'zzzzzzz', 0, 'zzzzzzzz', 'zzzzzzzzz', 'zzzzzzzzzzz', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(34, 'Anna Letícia Franco Monteiro', '22,22', 0, 'feminina', 'cool, legal em ingles', 'cansada', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(35, 'aaaaaaaa', 'aaaaaaa', 0, 'aaaaaaaaaaa', 'aaaaaaaa', 'aaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(36, 'aaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaa', 0, 'aaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaa', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG'),
(37, 'sssssss', 'sssssss', 0, 'ssssssss', 'sssssssssss', 'ssssssssss', 'Turma 2_Eletromecanica_08533_anna Leticia_6 BAILE_RAF_0980.JPG');

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
