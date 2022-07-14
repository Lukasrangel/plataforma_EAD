-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 14-Jul-2022 às 17:15
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `EAD`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `EAD.alunos`
--

CREATE TABLE `EAD.alunos` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `cpf` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `EAD.alunos`
--

INSERT INTO `EAD.alunos` (`id`, `nome`, `email`, `senha`, `cpf`) VALUES
(1, 'Renato', 'renato@renatao.com', '123456', '558.580.808-00'),
(8, 'Riu', 'riu@streetfighter.com', '123', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `EAD.aulas`
--

CREATE TABLE `EAD.aulas` (
  `id` int(11) NOT NULL,
  `modulo_id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `link_aula` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `order_aula` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `EAD.aulas`
--

INSERT INTO `EAD.aulas` (`id`, `modulo_id`, `nome`, `link_aula`, `slug`, `order_aula`, `curso_id`) VALUES
(1, 1, 'Fundamentos Gerais', '', 'fundamentos-gerais', 1, 3),
(2, 1, 'Fundamentos avançados', '', 'fundamentos-avancados', 2, 3),
(3, 2, 'FrontEnd part1', '', 'frontendpart1', 3, 3),
(4, 2, 'FrontEnd parte2 ', '', 'frontend-parte2 ', 4, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `EAD.aulas_assistidas`
--

CREATE TABLE `EAD.aulas_assistidas` (
  `id` int(11) NOT NULL,
  `aula_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `EAD.aulas_assistidas`
--

INSERT INTO `EAD.aulas_assistidas` (`id`, `aula_id`, `aluno_id`, `curso_id`, `status`) VALUES
(2, 1, 1, 3, 1),
(3, 2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `EAD.cursos`
--

CREATE TABLE `EAD.cursos` (
  `id` int(11) NOT NULL,
  `curso` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `EAD.cursos`
--

INSERT INTO `EAD.cursos` (`id`, `curso`, `descricao`, `img`, `slug`) VALUES
(1, 'Desenvolvimento WEB', 'Aprenda do zero a desenvolver aplicações completas!', '591f197b0f718.jpg', 'desenvolvimento-web'),
(2, 'Wordpress', 'Domine o Wordpress com programação!', '5afa36d9be05c.jpeg', 'wordpress'),
(3, 'Desenvolvimento de aplicativos ', 'Desenvolva apps', '5e9e25971f39a.jpeg', 'desenvolvimento-de-aplicativos');

-- --------------------------------------------------------

--
-- Estrutura da tabela `EAD.cursos_controle`
--

CREATE TABLE `EAD.cursos_controle` (
  `id` int(11) NOT NULL,
  `curso_id` int(11) NOT NULL,
  `aluno_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `EAD.cursos_controle`
--

INSERT INTO `EAD.cursos_controle` (`id`, `curso_id`, `aluno_id`) VALUES
(1, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `EAD.modulos`
--

CREATE TABLE `EAD.modulos` (
  `id` int(11) NOT NULL,
  `modulo` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `id_curso` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `EAD.modulos`
--

INSERT INTO `EAD.modulos` (`id`, `modulo`, `descricao`, `id_curso`) VALUES
(1, 'Fundamentos Mobile', 'fundamentos', 3),
(2, 'FrontEnd Mobile', 'Aprenda o FrontEnd Mobile', 3);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `EAD.alunos`
--
ALTER TABLE `EAD.alunos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `EAD.aulas`
--
ALTER TABLE `EAD.aulas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `EAD.aulas_assistidas`
--
ALTER TABLE `EAD.aulas_assistidas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `EAD.cursos`
--
ALTER TABLE `EAD.cursos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `EAD.cursos_controle`
--
ALTER TABLE `EAD.cursos_controle`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `EAD.modulos`
--
ALTER TABLE `EAD.modulos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `EAD.alunos`
--
ALTER TABLE `EAD.alunos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `EAD.aulas`
--
ALTER TABLE `EAD.aulas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `EAD.aulas_assistidas`
--
ALTER TABLE `EAD.aulas_assistidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `EAD.cursos`
--
ALTER TABLE `EAD.cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `EAD.cursos_controle`
--
ALTER TABLE `EAD.cursos_controle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `EAD.modulos`
--
ALTER TABLE `EAD.modulos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
