-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05-Jun-2019 às 21:05
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `twitter_clone`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tweet`
--

CREATE TABLE `tweet` (
  `id_tweet` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `tweet` varchar(140) NOT NULL,
  `data_inclusao` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tweet`
--

INSERT INTO `tweet` (`id_tweet`, `id_usuario`, `tweet`, `data_inclusao`) VALUES
(1, 3, 'Teste de inclusão de tweet', '2019-04-11 11:25:50'),
(2, 3, 'Outro teste', '2019-04-11 11:30:41'),
(3, 3, 'O campo deve ser limpado', '2019-04-11 11:32:09'),
(4, 3, 'Eu aprendi a listar os meus tweets', '2019-04-15 10:27:29'),
(5, 3, 'Requisição assíncrona sem refresh de página', '2019-04-15 10:29:11'),
(6, 3, ' ', '2019-04-17 11:04:12'),
(7, 5, 'aaaa', '2019-05-31 13:40:02'),
(8, 5, 'sadwefefwefv', '2019-05-31 13:40:04'),
(9, 5, 'vewefewfef', '2019-05-31 13:40:06'),
(10, 5, 'teste butao', '2019-05-31 13:42:10'),
(11, 5, 'a', '2019-06-03 13:40:31'),
(12, 4, 'esfe', '2019-06-03 15:57:44'),
(13, 4, 'aefsefsferf', '2019-06-03 15:57:46'),
(14, 4, 'aswd', '2019-06-03 16:10:35');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `email`, `senha`) VALUES
(1, 'João', 'joao@teste.com.br', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Maria', 'Maria@teste.com.br', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'jorge', 'jorge@teste.com.br', '202cb962ac59075b964b07152d234b70'),
(4, 'Fernanda', 'fernanda@teste.com', 'de8f85dbb6750f322d69dddf394e0002'),
(5, 'thalisson', 'thalisson@email', 'de8f85dbb6750f322d69dddf394e0002');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_seguidores`
--

CREATE TABLE `usuarios_seguidores` (
  `id_usuario_seguidor` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `seguindo_id_usuario` int(11) NOT NULL,
  `data_registro` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios_seguidores`
--

INSERT INTO `usuarios_seguidores` (`id_usuario_seguidor`, `id_usuario`, `seguindo_id_usuario`, `data_registro`) VALUES
(3, 5, 2, '2019-06-03 13:45:08'),
(8, 5, 1, '2019-06-03 14:05:01'),
(7, 5, 4, '2019-06-03 14:05:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tweet`
--
ALTER TABLE `tweet`
  ADD PRIMARY KEY (`id_tweet`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
  ADD PRIMARY KEY (`id_usuario_seguidor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tweet`
--
ALTER TABLE `tweet`
  MODIFY `id_tweet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `usuarios_seguidores`
--
ALTER TABLE `usuarios_seguidores`
  MODIFY `id_usuario_seguidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
