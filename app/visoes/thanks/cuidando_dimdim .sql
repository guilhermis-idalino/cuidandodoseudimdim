-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jun-2015 às 02:42
-- Versão do servidor: 5.5.39
-- PHP Version: 5.4.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cuidando_dimdim`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `despesa`
--

CREATE TABLE IF NOT EXISTS `despesa` (
  `id_movimento` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `valor` double NOT NULL,
  `data_vencimento` date NOT NULL,
  `categoria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `despesa`
--

INSERT INTO `despesa` (`id_movimento`, `id_tipo`, `titulo`, `valor`, `data_vencimento`, `categoria`) VALUES
(10, 2, 'Luz', 180, '2015-05-20', 'HabitaÃ§Ã£o'),
(10, 2, 'Ã”nibus e TÃ¡xis', 250, '2015-05-25', 'Transporte'),
(10, 1, 'Aluguel', 750, '2015-05-29', 'HabitaÃ§Ã£o'),
(10, 2, 'Ãgua', 160, '2015-05-14', 'HabitaÃ§Ã£o'),
(10, 2, 'Supermercado', 350, '2015-05-15', 'CartÃ£o de crÃ©dito'),
(10, 2, 'Dentista', 70, '2015-05-28', 'SaÃºde'),
(10, 2, 'Livros', 60, '2015-05-23', 'Lazer'),
(10, 2, 'Cinema', 90, '2015-05-02', 'Lazer'),
(10, 2, 'Concerto do Carro', 1200, '2015-05-18', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(10, 2, 'Cadernos', 60, '2015-05-21', 'EducaÃ§Ã£o');

-- --------------------------------------------------------

--
-- Estrutura da tabela `movimento`
--

CREATE TABLE IF NOT EXISTS `movimento` (
`id_movimento` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `ano` int(11) NOT NULL,
  `saldo` double DEFAULT NULL,
  `sit_relatorio` int(11) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=27 ;

--
-- Extraindo dados da tabela `movimento`
--

INSERT INTO `movimento` (`id_movimento`, `id_usuario`, `mes`, `ano`, `saldo`, `sit_relatorio`) VALUES
(10, 4, 5, 2015, 830, 1),
(11, 6, 5, 2015, NULL, 0),
(14, 7, 5, 2015, NULL, 0),
(26, 4, 6, 2015, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(25) NOT NULL,
  `sobrenome` varchar(100) NOT NULL,
  `idade` varchar(3) NOT NULL,
  `genero` varchar(9) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_usuario`, `nome`, `sobrenome`, `idade`, `genero`, `email`) VALUES
(4, 'Guilhermis', 'Idalino da Silva Camargo', '18', 'Masculino', 'gui@gui.com'),
(5, 'DÃ¢ndara Sabrina', 'Silva Almeida GenelhÃº', '18', 'Feminino', 'dandara.genelhu@hotmail.com'),
(6, 'Emma', 'Avetruz Bird', '25', 'Feminino', 'emma@bird.ave'),
(7, 'Flora', 'Florencia Veneza', '27', 'Feminino', 'flora@ra.flo');

-- --------------------------------------------------------

--
-- Estrutura da tabela `receita`
--

CREATE TABLE IF NOT EXISTS `receita` (
  `id_movimento` int(11) NOT NULL,
  `titulo` varchar(200) NOT NULL,
  `valor` int(11) NOT NULL,
  `data_recebimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `receita`
--

INSERT INTO `receita` (`id_movimento`, `titulo`, `valor`, `data_recebimento`) VALUES
(10, 'SalÃ¡rio Pai', 1500, '2015-05-10'),
(10, 'SalÃ¡rio MÃ£e', 1500, '2015-05-10'),
(10, 'Meu SalÃ¡rio', 1000, '2015-05-10');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
`id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`, `descricao`) VALUES
(1, 'Fixas', 'Fixas'),
(2, 'VariÃ¡veis', 'VariÃ¡veis');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`) VALUES
(4, 'guilhermis.25', '1c6445058449fff6d35c340c862510bd'),
(5, 'sabrinagenelhu', '046ddf96c233a273fd390c3d0b1a9aa4'),
(6, 'emma', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'flora', '979c8e8f8271e3431249f935cd7d3f4c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movimento`
--
ALTER TABLE `movimento`
 ADD PRIMARY KEY (`id_movimento`);

--
-- Indexes for table `tipo`
--
ALTER TABLE `tipo`
 ADD PRIMARY KEY (`id_tipo`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movimento`
--
ALTER TABLE `movimento`
MODIFY `id_movimento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
