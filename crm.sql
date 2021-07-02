-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jul-2021 às 03:02
-- Versão do servidor: 10.4.19-MariaDB
-- versão do PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crm`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `IDagenda` int(11) NOT NULL,
  `data` varchar(20) NOT NULL,
  `hora` time DEFAULT NULL,
  `sala` varchar(5) DEFAULT NULL,
  `IDpaciente` int(11) DEFAULT NULL,
  `IDmedico` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`IDagenda`, `data`, `hora`, `sala`, `IDpaciente`, `IDmedico`) VALUES
(1, '', '12:56:09', '1', 1, 3),
(6, '2021-06-16', '09:40:00', '10', 3, 15),
(9, '2021-06-23', '16:30:00', '10', 6, 16);

-- --------------------------------------------------------

--
-- Estrutura da tabela `medico`
--

CREATE TABLE `medico` (
  `IDmedico` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `crm` varchar(20) DEFAULT NULL,
  `especialidade` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `medico`
--

INSERT INTO `medico` (`IDmedico`, `nome`, `telefone`, `crm`, `especialidade`) VALUES
(1, 'Rafael Barros', '(19) 99452-1235', '654789A', 'Cardiologista'),
(3, 'Denise Stefano', '(19)9987-4652', '7894562A', 'Gineocologista'),
(14, 'Enzo', '19949495959', '1523684', 'Ortopedista'),
(15, 'Davi', '19949495959', '1523684', 'Ortopedista'),
(16, 'Enzo', '19949495959', '1523684', 'Ortopedista'),
(36, 'Enzo', '19949495959', '1523684', 'Nutricionista');

-- --------------------------------------------------------

--
-- Estrutura da tabela `paciente`
--

CREATE TABLE `paciente` (
  `IDpaciente` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `telefone` varchar(50) DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `convenio` varchar(10) DEFAULT NULL,
  `obs` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `paciente`
--

INSERT INTO `paciente` (`IDpaciente`, `nome`, `telefone`, `nascimento`, `convenio`, `obs`) VALUES
(1, 'Taynara', '(19) 99400-0184', '1998-09-23', 'não', ''),
(3, 'Victoria', '(19) 98999-5621', '2010-08-15', 'nao', ''),
(6, 'Marcia', '(19) 98885-6598', '1977-03-10', 'nao', ''),
(11, '', '', '0000-00-00', '', ''),
(12, '', '', '0000-00-00', '', ''),
(13, '', '', '0000-00-00', '', ''),
(14, '', '', '0000-00-00', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`IDagenda`),
  ADD KEY `fk_agenda_medico` (`IDmedico`),
  ADD KEY `fk_agenda_paciente` (`IDpaciente`);

--
-- Índices para tabela `medico`
--
ALTER TABLE `medico`
  ADD PRIMARY KEY (`IDmedico`);

--
-- Índices para tabela `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`IDpaciente`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `IDagenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `medico`
--
ALTER TABLE `medico`
  MODIFY `IDmedico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de tabela `paciente`
--
ALTER TABLE `paciente`
  MODIFY `IDpaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `fk_agenda_medico` FOREIGN KEY (`IDmedico`) REFERENCES `medico` (`IDmedico`),
  ADD CONSTRAINT `fk_agenda_paciente` FOREIGN KEY (`IDpaciente`) REFERENCES `paciente` (`IDpaciente`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
