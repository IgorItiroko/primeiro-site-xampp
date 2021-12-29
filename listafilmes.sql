-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Dez-2021 às 21:21
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `listafilmes`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `autenticar`
--

CREATE TABLE `autenticar` (
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `autenticar`
--

INSERT INTO `autenticar` (`login`, `senha`) VALUES
('igorshinji', 'asdf');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filmes`
--

CREATE TABLE `filmes` (
  `id` int(11) NOT NULL,
  `titulo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinopse` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `avaliacao` float DEFAULT NULL,
  `genero` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagem` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `filmes`
--

INSERT INTO `filmes` (`id`, `titulo`, `sinopse`, `avaliacao`, `genero`, `imagem`) VALUES
(6, 'Homem Aranha: Sem Volta Para Casa', '         Peter Parker é desmascarado e não consegue mais separar sua vida normal dos grandes riscos de ser um super-herói. Quando ele pede ajuda ao Doutor Estranho, os riscos se tornam ainda mais perigosos, e o forçam a descobrir o que realmente significa ser o Homem-Aranha.         ', 4.5, 'Ação/Super-Heroi', 'https://vizer.tv/content/movies/posterPt/342/27820.webp'),
(7, '007: SEM TEMPO PARA MORRER', 'Bond deixou o serviço ativo e está desfrutando de uma vida tranquila na Jamaica. Sua paz é interrompida quando o seu velho amigo Felix Leiter, da CIA, aparece pedindo sua ajuda. A missão de resgatar um cientista sequestrado acaba sendo muito mais difícil do que o esperado, deixando Bond no caminho de um vilão misterioso e armado com uma nova tecnologia perigosa.', 3.8, 'Ação/Espionagem', 'https://vizer.tv/content/movies/posterPt/342/27818.webp'),
(9, 'VENOM: TEMPO DE CARNIFICINA', 'O relacionamento entre Eddie e Venom (Tom Hardy) está evoluindo. Buscando a melhor forma de lidar com a inevitável simbiose, esse dois lados descobrem como viver juntos e, de alguma forma, se tornarem melhores juntos do que separados.', 3.2, ' Ação/Aventura', 'https://vizer.tv/content/movies/posterPt/342/27817.webp'),
(10, 'A LIGA DE MONSTROS', 'Em um mundo onde monstros existem, podem ser domados e competir no wrestling, Winnie decide seguir os passos do pai no popular esporte: ele quer se tornar um treinador e transformar uma criatura inexperiente em um grande lutador.', 4.3, 'Comédia/Animação', 'https://vizer.tv/content/movies/posterPt/342/30310.webp');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autenticar`
--
ALTER TABLE `autenticar`
  ADD PRIMARY KEY (`login`);

--
-- Índices para tabela `filmes`
--
ALTER TABLE `filmes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `filmes`
--
ALTER TABLE `filmes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
