-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2022 at 09:09 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto_vencer`
--

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE `cursos` (
  `id_curso` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `descricao` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`id_curso`, `nome`, `descricao`) VALUES
(1, 'Excel', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/y7cKGFe-l58\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(2, 'Lógica', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/8mei6uVttho\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(3, 'PHP', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/XwpsxPmQN2E\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>'),
(4, 'Delphi', '<iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/pFni9cj4tqE\" title=\"YouTube video player\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `endereco` varchar(90) NOT NULL,
  `telefonec` varchar(20) NOT NULL,
  `escolaridade` varchar(30) NOT NULL,
  `situacao` varchar(30) NOT NULL,
  `interesse` varchar(30) NOT NULL,
  `cep` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`, `cpf`, `endereco`, `telefonec`, `escolaridade`, `situacao`, `interesse`, `cep`) VALUES
(1, 'Marcos da Silva', '6498241-2541', 'marcosilva@gmail.com', '123456', '52413251474', 'Rua 9 qd.20 Lt30', '6499258-7412', 'Ensino Médio Completo', 'não', 'Informática', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id_curso`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id_curso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
