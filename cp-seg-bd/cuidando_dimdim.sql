-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25-Jan-2016 às 01:26
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
(29, 3, 'Conta de Ãgua', 90, '2014-01-22', 'HabitaÃ§Ã£o'),
(29, 3, 'Conta de Luz', 90, '2014-01-16', 'HabitaÃ§Ã£o'),
(29, 3, 'Aluguel', 500, '2014-01-23', 'HabitaÃ§Ã£o'),
(29, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(29, 3, 'Internet', 90, '2014-01-17', 'Outros'),
(29, 3, 'CombustÃ­vel', 70, '2014-01-15', 'Transporte'),
(29, 3, 'Ã”nibus', 50, '2014-01-31', 'Transporte'),
(29, 3, 'Telefone ', 100, '2014-01-10', 'Outros'),
(29, 4, 'Cinema', 20, '2014-01-23', 'Lazer'),
(29, 4, 'Restaurante', 120, '2014-01-09', 'CartÃ£o de crÃ©dito'),
(29, 4, 'MÃ©dico', 70, '2014-01-16', 'SaÃºde'),
(29, 4, 'Problemas na casa', 120, '2014-01-17', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(30, 3, 'Conta de Luz', 90, '2014-02-13', 'HabitaÃ§Ã£o'),
(30, 3, 'Conta de Ãgua', 100, '2014-02-13', 'HabitaÃ§Ã£o'),
(30, 3, 'Aluguel', 500, '2014-02-22', 'HabitaÃ§Ã£o'),
(30, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-02-13', 'Outros'),
(30, 3, 'Internet', 40, '2014-02-20', 'Outros'),
(30, 3, 'CombustÃ­vel', 70, '2014-02-12', 'Transporte'),
(30, 3, 'Ã”nibus', 40, '2014-02-14', 'Transporte'),
(30, 3, 'Telefone ', 110, '2014-02-13', 'Outros'),
(30, 3, 'Cinema', 60, '2014-02-19', 'Lazer'),
(30, 4, 'Livro Os MiserÃ¡veis', 50, '2014-02-20', 'Lazer'),
(30, 4, 'Cadernos, estojo, lÃ¡pis, caneta, borracha, etc', 220, '2014-02-15', 'EducaÃ§Ã£o'),
(31, 3, 'Conta de Ãgua', 90, '2014-03-21', 'HabitaÃ§Ã£o'),
(31, 3, 'Conta de Luz', 90, '2014-03-06', 'HabitaÃ§Ã£o'),
(31, 3, 'Aluguel', 500, '2014-03-22', 'HabitaÃ§Ã£o'),
(31, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-03-10', 'Outros'),
(31, 3, 'Internet', 40, '2014-03-25', 'Outros'),
(31, 3, 'CombustÃ­vel', 80, '2014-03-17', 'Transporte'),
(31, 3, 'Ã”nibus', 50, '2014-03-20', 'Transporte'),
(31, 3, 'Conta de Telefone', 100, '2014-03-13', 'Outros'),
(31, 4, 'Dentista', 70, '2014-03-20', 'Cuidados pessoais'),
(31, 3, 'MÃ©dico', 80, '2014-03-19', 'SaÃºde'),
(31, 4, 'Show da Banda Mais Bonita da Cidade', 120, '2014-03-29', 'Lazer'),
(32, 3, 'Contaq', 80, '2014-04-17', 'HabitaÃ§Ã£o'),
(32, 3, 'Conta de Luz', 110, '2014-04-25', 'HabitaÃ§Ã£o'),
(32, 3, 'Aluguel', 500, '2014-04-17', 'HabitaÃ§Ã£o'),
(32, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-04-26', 'Outros'),
(32, 3, 'Internet', 40, '2014-04-19', 'Outros'),
(32, 3, 'CombustÃ­vel', 70, '2014-04-19', 'Transporte'),
(32, 3, 'Ã”nibus', 40, '2014-04-19', 'Transporte'),
(32, 3, 'Conta de Telefone', 90, '2014-04-26', 'Outros'),
(32, 4, 'Livro DidÃ¡tico de MatemÃ¡tica', 30, '2014-04-26', 'EducaÃ§Ã£o'),
(32, 4, 'Restaurante Bom Apetite', 100, '2014-04-16', 'Lazer'),
(32, 4, 'MÃ©dico', 90, '2014-04-10', 'SaÃºde'),
(32, 4, 'Pia do banheiro', 130, '2014-04-11', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(33, 3, 'Conta de Ãgua', 80, '2014-05-29', 'HabitaÃ§Ã£o'),
(33, 3, 'Conta de Luz', 90, '2014-05-30', 'HabitaÃ§Ã£o'),
(33, 3, 'Aluguel', 500, '2014-05-23', 'HabitaÃ§Ã£o'),
(33, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-05-31', 'Outros'),
(33, 3, 'Internet', 40, '2014-05-22', 'Outros'),
(33, 3, 'CombustÃ­vel', 80, '2014-05-21', 'Transporte'),
(33, 3, 'Ã”nibus', 60, '2014-05-21', 'Transporte'),
(33, 3, 'Conta de Telefone', 90, '2014-05-15', 'Outros'),
(33, 4, 'Cinema Filme Caminhos da Floresta', 20, '2014-05-16', 'Lazer'),
(33, 4, 'Livro Psicologias', 20, '2014-05-16', 'EducaÃ§Ã£o'),
(33, 4, 'Detista', 70, '2014-05-13', 'Cuidados pessoais'),
(33, 4, 'Conserto carro', 630, '2014-05-15', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(33, 4, 'Porta da sala', 120, '2014-05-23', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(34, 3, 'Conta de Ãgua', 100, '2014-01-22', 'HabitaÃ§Ã£o'),
(34, 3, 'Conta de Luz', 110, '2014-01-16', 'HabitaÃ§Ã£o'),
(34, 3, 'Aluguel', 570, '2014-01-23', 'HabitaÃ§Ã£o'),
(34, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(34, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(34, 3, 'CombustÃ­vel', 70, '2014-01-15', 'Transporte'),
(34, 3, 'Ã”nibus', 60, '2014-01-31', 'Transporte'),
(34, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(34, 4, 'Restaurante', 90, '2014-01-09', 'CartÃ£o de crÃ©dito'),
(34, 4, 'MÃ©dico', 120, '2014-01-16', 'SaÃºde'),
(34, 4, 'Show da Rock', 150, '2014-03-29', 'Lazer'),
(34, 4, 'Conserto carro', 120, '2014-05-15', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(36, 3, 'Conta de Ãgua', 110, '2014-01-22', 'HabitaÃ§Ã£o'),
(36, 3, 'Conta de Luz', 110, '2014-01-16', 'HabitaÃ§Ã£o'),
(36, 3, 'Aluguel', 570, '2014-01-23', 'HabitaÃ§Ã£o'),
(36, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(36, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(36, 3, 'CombustÃ­vel', 90, '2014-01-15', 'Transporte'),
(36, 3, 'Ã”nibus', 40, '2014-01-31', 'Transporte'),
(36, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(36, 4, 'Restaurante', 150, '2014-01-09', 'CartÃ£o de crÃ©dito'),
(36, 4, 'Conserto carro', 110, '2014-05-15', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(36, 4, 'Livro Dom Casmuro', 30, '2014-05-16', 'EducaÃ§Ã£o'),
(36, 4, 'Cadernos, estojo, lÃ¡pis, caneta, borracha, etc', 100, '2014-02-15', 'EducaÃ§Ã£o'),
(36, 4, 'Viage para Bonito', 780, '2014-04-16', 'Lazer'),
(37, 3, 'Conta de Ãgua', 100, '2014-01-22', 'HabitaÃ§Ã£o'),
(37, 3, 'Conta de Luz', 100, '2014-01-16', 'HabitaÃ§Ã£o'),
(37, 3, 'Aluguel', 570, '2014-01-23', 'HabitaÃ§Ã£o'),
(37, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(37, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(37, 3, 'CombustÃ­vel', 70, '2014-01-15', 'Transporte'),
(37, 3, 'Ã”nibus', 60, '2014-01-31', 'Transporte'),
(37, 3, 'Telefone ', 100, '2014-01-10', 'Outros'),
(37, 4, 'Teto casa', 60, '2014-05-15', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(37, 4, 'MÃ©dico', 70, '2014-04-10', 'SaÃºde'),
(38, 3, 'Conta de Ãgua', 110, '2014-01-22', 'HabitaÃ§Ã£o'),
(38, 3, 'Conta de Luz', 110, '2014-01-16', 'HabitaÃ§Ã£o'),
(38, 3, 'Aluguel', 570, '2014-01-23', 'HabitaÃ§Ã£o'),
(38, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(38, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(38, 3, 'CombustÃ­vel', 90, '2014-01-15', 'Transporte'),
(38, 3, 'Ã”nibus', 40, '2014-01-31', 'Transporte'),
(38, 3, 'Telefone ', 100, '2014-01-10', 'Outros'),
(38, 4, 'Cinema O Mágico de Oz', 20, '2014-05-16', 'Lazer'),
(38, 4, 'Orquestra sinfonica', 200, '2014-03-29', 'Lazer'),
(38, 4, 'Porta do quarto', 70, '2014-05-23', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(39, 3, 'Conta de Ãgua', 100, '2014-01-22', 'HabitaÃ§Ã£o'),
(39, 3, 'Conta de Luz', 90, '2014-01-16', 'HabitaÃ§Ã£o'),
(39, 3, 'Aluguel', 570, '2014-01-23', 'HabitaÃ§Ã£o'),
(39, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(39, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(39, 3, 'CombustÃ­vel', 70, '2014-01-15', 'Transporte'),
(39, 3, 'Ã”nibus', 40, '2014-01-31', 'Transporte'),
(39, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(39, 4, 'Vidro do carro', 320, '2014-05-23', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(39, 4, 'Dentista', 110, '2014-03-20', 'Cuidados pessoais'),
(39, 4, 'Restaurante Bom Apetite', 170, '2014-04-16', 'Lazer'),
(40, 3, 'Conta de Ãgua', 110, '2014-01-22', 'HabitaÃ§Ã£o'),
(40, 3, 'Conta de Luz', 90, '2014-01-16', 'HabitaÃ§Ã£o'),
(40, 3, 'Aluguel', 570, '2014-01-23', 'HabitaÃ§Ã£o'),
(40, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(40, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(40, 3, 'CombustÃ­vel', 70, '2014-01-15', 'Transporte'),
(40, 3, 'Ã”nibus', 50, '2014-01-31', 'Transporte'),
(40, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(40, 4, 'Problemas na casa', 120, '2014-01-17', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(40, 4, 'Restaurante Bom Apetite', 200, '2014-04-16', 'Lazer'),
(41, 3, 'Conta de Ãgua', 90, '2014-01-22', 'HabitaÃ§Ã£o'),
(41, 3, 'Conta de Luz', 100, '2014-01-16', 'HabitaÃ§Ã£o'),
(41, 3, 'Aluguel', 620, '2014-01-23', 'HabitaÃ§Ã£o'),
(41, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(41, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(41, 3, 'CombustÃ­vel', 70, '2014-01-15', 'Transporte'),
(41, 3, 'Ã”nibus', 50, '2014-01-31', 'Transporte'),
(41, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(41, 4, 'Livro de Cervantes', 30, '2014-04-16', 'Lazer'),
(41, 4, 'Cinema', 40, '2014-04-16', 'Lazer'),
(41, 3, 'MÃ©dico', 30, '2014-03-19', 'SaÃºde'),
(41, 4, 'Restaurante Bom Apetite', 150, '2014-04-16', 'Lazer'),
(41, 4, 'Viagem', 800, '2014-04-16', 'Lazer'),
(42, 3, 'Conta de Ãgua', 80, '2014-01-22', 'HabitaÃ§Ã£o'),
(42, 3, 'Conta de Luz', 90, '2014-01-16', 'HabitaÃ§Ã£o'),
(42, 3, 'Aluguel', 620, '2014-01-23', 'HabitaÃ§Ã£o'),
(42, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(42, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(42, 3, 'CombustÃ­vel', 70, '2014-01-15', 'Transporte'),
(42, 3, 'Ã”nibus', 100, '2014-01-31', 'Transporte'),
(42, 3, 'Telefone ', 80, '2014-01-10', 'Outros'),
(42, 4, 'Livro de Manoel', 50, '2014-04-16', 'Lazer'),
(42, 4, 'Restaurante Bom Apetite', 120, '2014-04-16', 'Lazer'),
(42, 4, 'Roda', 320, '2014-04-11', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(42, 4, 'Espelho', 120, '2014-04-11', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(43, 3, 'Conta de Ãgua', 100, '2014-01-22', 'HabitaÃ§Ã£o'),
(43, 3, 'Conta de Luz', 100, '2014-01-16', 'HabitaÃ§Ã£o'),
(43, 3, 'Aluguel', 620, '2014-01-23', 'HabitaÃ§Ã£o'),
(43, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(43, 3, 'Internet', 40, '2014-01-17', 'Outros'),
(43, 3, 'CombustÃ­vel', 80, '2014-01-15', 'Transporte'),
(43, 3, 'Ã”nibus', 100, '2014-01-31', 'Transporte'),
(43, 3, 'Telefone ', 80, '2014-01-10', 'Outros'),
(44, 3, 'Conta de Ãgua', 90, '2014-01-22', 'HabitaÃ§Ã£o'),
(44, 3, 'Conta de Luz', 80, '2014-01-16', 'HabitaÃ§Ã£o'),
(44, 3, 'Aluguel', 620, '2014-01-23', 'HabitaÃ§Ã£o'),
(44, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(44, 3, 'Internet', 50, '2014-01-17', 'Outros'),
(44, 3, 'CombustÃ­vel', 80, '2014-01-15', 'Transporte'),
(44, 3, 'Ã”nibus', 120, '2014-01-31', 'Transporte'),
(44, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(45, 3, 'Conta de Ãgua', 90, '2014-01-22', 'HabitaÃ§Ã£o'),
(45, 3, 'Conta de Luz', 120, '2014-01-16', 'HabitaÃ§Ã£o'),
(45, 3, 'Aluguel', 620, '2014-01-23', 'HabitaÃ§Ã£o'),
(45, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(45, 3, 'Internet', 50, '2014-01-17', 'Outros'),
(45, 3, 'CombustÃ­vel', 90, '2014-01-15', 'Transporte'),
(45, 3, 'Ã”nibus', 130, '2014-01-31', 'Transporte'),
(45, 3, 'Telefone ', 100, '2014-01-10', 'Outros'),
(46, 3, 'Conta de Ãgua', 100, '2014-01-22', 'HabitaÃ§Ã£o'),
(46, 3, 'Conta de Luz', 130, '2014-01-16', 'HabitaÃ§Ã£o'),
(46, 3, 'Aluguel', 660, '2014-01-23', 'HabitaÃ§Ã£o'),
(46, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(46, 3, 'Internet', 50, '2014-01-17', 'Outros'),
(46, 3, 'CombustÃ­vel', 100, '2014-01-15', 'Transporte'),
(46, 3, 'Ã”nibus', 110, '2014-01-31', 'Transporte'),
(46, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(47, 3, 'Conta de Ãgua', 100, '2014-01-22', 'HabitaÃ§Ã£o'),
(47, 3, 'Conta de Luz', 120, '2014-01-16', 'HabitaÃ§Ã£o'),
(47, 3, 'Aluguel', 660, '2014-01-23', 'HabitaÃ§Ã£o'),
(47, 3, 'Mensalidade da associaÃ§Ã£o', 30, '2014-01-17', 'Outros'),
(47, 3, 'Internet', 50, '2014-01-17', 'Outros'),
(47, 3, 'CombustÃ­vel', 110, '2014-01-15', 'Transporte'),
(47, 3, 'Ã”nibus', 100, '2014-01-31', 'Transporte'),
(47, 3, 'Telefone ', 90, '2014-01-10', 'Outros'),
(43, 4, 'Restaurante Bom Apetite', 80, '2014-04-16', 'Lazer'),
(43, 4, 'Viagem', 230, '2014-04-16', 'Lazer'),
(43, 4, 'Dentista', 70, '2014-04-10', 'SaÃºde'),
(43, 4, 'Cadernos', 120, '2014-04-26', 'EducaÃ§Ã£o'),
(44, 4, 'Cinema', 30, '2014-04-16', 'Lazer'),
(44, 4, 'Restaurante Bom Apetite', 90, '2014-04-16', 'Lazer'),
(44, 4, 'MÃ©dico', 100, '2014-04-10', 'SaÃºde'),
(44, 4, 'Show', 50, '2014-04-16', 'Lazer'),
(45, 4, 'Livro', 50, '2014-04-16', 'Lazer'),
(45, 4, 'Bancos', 200, '2014-04-11', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(46, 4, 'Cinema', 70, '2014-04-16', 'Lazer'),
(46, 4, 'Livro', 20, '2014-04-16', 'Lazer'),
(46, 4, 'Pizzaria', 70, '2014-04-16', 'Lazer'),
(46, 4, 'MÃ©dico', 100, '2014-04-10', 'SaÃºde'),
(46, 4, 'Parabrisa', 350, '2014-04-11', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(46, 4, 'Passeio', 340, '2014-04-16', 'Lazer'),
(47, 4, 'Dentista', 50, '2014-04-10', 'SaÃºde'),
(47, 4, 'MÃ©dico', 120, '2014-04-10', 'SaÃºde'),
(47, 4, 'Janela da cozinha', 70, '2014-04-11', 'ManutenÃ§Ã£o ou prevenÃ§Ã£o'),
(48, 4, 'Presente das irmÃ£s', 100, '2014-09-23', 'Outros'),
(47, 3, 'Luz', 90, '2015-06-25', 'HabitaÃ§Ã£o'),
(51, 3, 'Aluguel', 120, '2016-01-23', 'HabitaÃ§Ã£o'),
(51, 4, 'Par de sapatos', 110, '2016-01-30', 'VestuÃ¡rio');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=52 ;

--
-- Extraindo dados da tabela `movimento`
--

INSERT INTO `movimento` (`id_movimento`, `id_usuario`, `mes`, `ano`, `saldo`, `sit_relatorio`) VALUES
(29, 8, 1, 2014, 840, 1),
(30, 8, 2, 2014, 880, 1),
(31, 8, 3, 2014, 940, 1),
(32, 8, 4, 2014, 880, 1),
(33, 8, 5, 2014, 360, 1),
(34, 8, 6, 2014, 640, 1),
(36, 8, 7, 2014, -60, 1),
(37, 8, 8, 2014, 990, 1),
(38, 8, 9, 2014, 810, 1),
(39, 8, 10, 2014, 560, 1),
(40, 8, 11, 2014, 820, 1),
(41, 8, 12, 2014, 50, 1),
(42, 8, 1, 2015, 470, 1),
(43, 8, 2, 2015, 540, 1),
(44, 8, 3, 2015, 760, 1),
(45, 8, 4, 2015, 710, 1),
(46, 8, 5, 2015, -30, 1),
(47, 8, 6, 2015, NULL, 0),
(49, 10, 6, 2015, NULL, 0),
(50, 11, 6, 2015, NULL, 0),
(51, 8, 1, 2016, NULL, 0);

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
(8, 'Bibiana', 'Terra', '25', 'Feminino', 'bibiana.terra@gmail.com'),
(9, 'DÃ¢ndara Sabrina', 'GenelhÃº', '18', 'Feminino', 'dandara.genelhu@hotmail.com'),
(11, 'Emma', 'Swan', '28', 'Feminino', 'emma@gmail.com');

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
(29, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(29, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(29, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(30, 'Meu SalÃ¡rio', 600, '2014-02-13'),
(30, 'SalÃ¡rio MÃ£e', 800, '2014-02-14'),
(30, 'SalÃ¡rio Pai', 790, '2014-02-19'),
(31, 'Meu SalÃ¡rio', 600, '2014-03-13'),
(31, 'SalÃ¡rio MÃ£e', 800, '2014-03-12'),
(31, 'SalÃ¡rio Pai', 790, '2014-03-20'),
(32, 'Meu SalÃ¡rio', 600, '2014-04-24'),
(32, 'SalÃ¡rio MÃ£e', 800, '2014-04-19'),
(32, 'SalÃ¡rio Pai', 790, '2014-04-26'),
(33, 'Meu SalÃ¡rio', 600, '2014-05-17'),
(33, 'SalÃ¡rio MÃ£e', 800, '2014-05-24'),
(33, 'SalÃ¡rio Pai', 790, '2014-05-16'),
(34, 'Meu SalÃ¡rio', 600, '2014-06-19'),
(34, 'SalÃ¡rio Pai', 790, '2014-06-12'),
(34, 'SalÃ¡rio MÃ£e', 800, '2014-06-27'),
(36, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(36, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(36, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(37, 'Meu SalÃ¡rio', 600, '2014-02-13'),
(37, 'SalÃ¡rio MÃ£e', 800, '2014-02-14'),
(37, 'SalÃ¡rio Pai', 790, '2014-02-19'),
(38, 'Meu SalÃ¡rio', 600, '2014-02-13'),
(38, 'SalÃ¡rio MÃ£e', 800, '2014-02-14'),
(38, 'SalÃ¡rio Pai', 790, '2014-02-19'),
(39, 'Meu SalÃ¡rio', 600, '2014-02-13'),
(39, 'SalÃ¡rio MÃ£e', 800, '2014-02-14'),
(39, 'SalÃ¡rio Pai', 790, '2014-02-19'),
(40, 'Meu SalÃ¡rio', 600, '2014-02-13'),
(40, 'SalÃ¡rio MÃ£e', 800, '2014-02-14'),
(40, 'SalÃ¡rio Pai', 790, '2014-02-19'),
(42, 'Meu SalÃ¡rio', 600, '2014-02-13'),
(42, 'SalÃ¡rio MÃ£e', 800, '2014-02-14'),
(42, 'SalÃ¡rio Pai', 790, '2014-02-19'),
(41, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(41, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(41, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(43, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(43, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(43, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(44, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(44, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(44, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(45, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(45, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(45, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(46, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(46, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(46, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(47, 'Meu SalÃ¡rio', 600, '2014-01-08'),
(47, 'SalÃ¡rio MÃ£e', 800, '2014-01-10'),
(47, 'SalÃ¡rio Pai', 790, '2014-01-12'),
(48, 'Auxilio tc', 65, '2013-02-20'),
(47, 'Bolsa FamÃ­lia', 69, '2015-06-11'),
(47, 'jjhhu', 323, '2015-06-05'),
(47, 'Aluguel', 250, '2015-06-05'),
(51, 'salario', 345, '2016-01-22');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipo`
--

CREATE TABLE IF NOT EXISTS `tipo` (
`id_tipo` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `descricao` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `tipo`
--

INSERT INTO `tipo` (`id_tipo`, `tipo`, `descricao`) VALUES
(3, 'Fixa', 'Despesas Fixas sÃ£o aquelas que estÃ£o presentes em todos ou quase todos os meses do ano, sendo que seu valor pode oscilar durante os meses. Exemplo: aluguel, caso o invÃ­duo resida em um imÃ³vel alugado. '),
(4, 'VariÃ¡vel', 'Despesas VariÃ¡veis, podem nÃ£o estar presentes durante todos os meses do ano, podendo atÃ© ser diminuido o seu valor. Exemplo:a conta de energia elÃ©trica, onde se pode economizar; dentista, que nÃ£o precisa acontecer em todos os meses; lazer entre outras.');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(500) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `login`, `senha`) VALUES
(8, 'bibiana', '76cebb2c444d72118969791fc106cde2'),
(9, 'sabrinagenelhu', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'emma', '00a809937eddc44521da9521269e75c6');

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
MODIFY `id_movimento` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tipo`
--
ALTER TABLE `tipo`
MODIFY `id_tipo` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
