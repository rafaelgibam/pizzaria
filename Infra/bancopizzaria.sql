-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Maio-2018 às 05:46
-- Versão do servidor: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pizzaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `RG` varchar(45) DEFAULT NULL,
  `NOME` varchar(255) DEFAULT NULL,
  `SEXO` varchar(45) DEFAULT NULL,
  `DATA_NASC` date DEFAULT NULL,
  `NUM_FIXO` varchar(45) DEFAULT NULL,
  `NUM_CELULAR` varchar(45) DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL,
  `CRIADO_EM` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `LOGRADOURO` varchar(255) NOT NULL,
  `NUMERO` varchar(45) NOT NULL,
  `BAIRRO` varchar(45) NOT NULL,
  `MUNICIPIO` varchar(45) NOT NULL,
  `UF` varchar(45) NOT NULL,
  `PAIS` varchar(45) NOT NULL,
  `REFERENCIA` varchar(255) NOT NULL,
  `CEP` varchar(45) NOT NULL,
  `COMPLEMENTO` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `CPF`, `RG`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`, `NUM_CELULAR`, `ESTADO`, `CRIADO_EM`, `LOGRADOURO`, `NUMERO`, `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA`, `CEP`, `COMPLEMENTO`) VALUES
(1, '122', '', 'rafael willames da silva', 'NaoInformado', '0000-00-00', '98003250', '', 1, '2018-05-23 18:27:50', 'rua doutor miguel vieira ferreira, 107', '', '', 'Recife', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cozinheiro`
--

CREATE TABLE `cozinheiro` (
  `ID` int(11) NOT NULL,
  `CPF` varchar(45) DEFAULT NULL,
  `RG` varchar(45) DEFAULT NULL,
  `CNPJ` varchar(45) DEFAULT NULL,
  `RAZAOSOCIAL` varchar(45) DEFAULT NULL,
  `NOME` varchar(255) DEFAULT NULL,
  `SEXO` varchar(45) DEFAULT NULL,
  `DATA_NASC` date DEFAULT NULL,
  `NUM_FIXO` varchar(45) DEFAULT NULL,
  `NUM_CELULAR` varchar(45) DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL,
  `LOGRADOURO` varchar(255) DEFAULT NULL,
  `NUMERO` varchar(45) DEFAULT NULL,
  `COMPLEMENTO` varchar(45) DEFAULT NULL,
  `BAIRRO` varchar(45) DEFAULT NULL,
  `MUNICIPIO` varchar(45) DEFAULT NULL,
  `UF` varchar(45) DEFAULT NULL,
  `PAIS` varchar(45) DEFAULT NULL,
  `REFERENCIA` varchar(45) DEFAULT NULL,
  `SALARIO` float DEFAULT NULL,
  `CEP` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cozinheiro`
--

INSERT INTO `cozinheiro` (`ID`, `CPF`, `RG`, `CNPJ`, `RAZAOSOCIAL`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`, `NUM_CELULAR`, `ESTADO`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA`, `SALARIO`, `CEP`) VALUES
(1, '111', NULL, '111', 'Torta', 'Rafael', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `delivery`
--

CREATE TABLE `delivery` (
  `ID` int(11) NOT NULL,
  `DATA_ENTREGA` date DEFAULT NULL,
  `PRECO` float DEFAULT NULL,
  `MOTOBOY_ID` int(11) NOT NULL,
  `PEDIDO_DELIVERY_ID` int(11) NOT NULL,
  `CLIENTE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `ID` int(11) NOT NULL,
  `LOGRADOURO` varchar(255) DEFAULT NULL,
  `NUMERO` varchar(10) DEFAULT NULL,
  `COMPLEMENTO` varchar(45) DEFAULT NULL,
  `BAIRRO` varchar(45) DEFAULT NULL,
  `MUNICIPIO` varchar(45) DEFAULT NULL,
  `UF` varchar(45) DEFAULT NULL,
  `PAIS` varchar(45) DEFAULT NULL,
  `REFERENCIA` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL,
  `CLIENTE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ID`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA`, `CEP`, `CLIENTE_ID`) VALUES
(2, 'rua doutor miguel vieira ferreira1', '107', 'casa', 'cordeiro', 'Recife', 'PE', 'Brasil', 'aaaaaa', '50721230', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `garcom`
--

CREATE TABLE `garcom` (
  `ID` int(11) NOT NULL,
  `CPF` varchar(11) DEFAULT NULL,
  `RG` varchar(45) DEFAULT NULL,
  `NOME` varchar(255) DEFAULT NULL,
  `SEXO` varchar(45) DEFAULT NULL,
  `DATA_NASC` date DEFAULT NULL,
  `NUM_FIXO` varchar(45) DEFAULT NULL,
  `NUM_CELULAR` varchar(45) DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL,
  `GORJETA` float DEFAULT NULL,
  `DATA_ADMISSAO` date DEFAULT NULL,
  `SALARIO` float DEFAULT NULL,
  `LOGRADOURO` varchar(255) DEFAULT NULL,
  `NUMERO` varchar(45) DEFAULT NULL,
  `COMPLEMENTO` varchar(45) DEFAULT NULL,
  `BAIRRO` varchar(45) DEFAULT NULL,
  `MUNICIPIO` varchar(45) DEFAULT NULL,
  `UF` varchar(45) DEFAULT NULL,
  `PAIS` varchar(45) DEFAULT NULL,
  `REFERENCIA` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `garcom`
--

INSERT INTO `garcom` (`ID`, `CPF`, `RG`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`, `NUM_CELULAR`, `ESTADO`, `GORJETA`, `DATA_ADMISSAO`, `SALARIO`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA`, `CEP`) VALUES
(1, '12354', '', 'rafael garcom', 'NaoInformado', '0000-00-00', '', '', 1, 0, '0000-00-00', 0, 'rua doutor miguel vieira ferreira, 107', '', '', '', 'Recife', '', '', '', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedido`
--

CREATE TABLE `item_pedido` (
  `ID` int(11) NOT NULL,
  `QTD` int(11) DEFAULT NULL,
  `PRODUTO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mesa`
--

CREATE TABLE `mesa` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `NUMERO` int(10) UNSIGNED DEFAULT NULL,
  `COR` varchar(45) DEFAULT NULL,
  `QTD_LUGAR` int(11) DEFAULT NULL,
  `PESO` float DEFAULT NULL,
  `ALTURA` float DEFAULT NULL,
  `COMPRIMENTO` float DEFAULT NULL,
  `LARGURA` float DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `mesa`
--

INSERT INTO `mesa` (`ID`, `NOME`, `NUMERO`, `COR`, `QTD_LUGAR`, `PESO`, `ALTURA`, `COMPRIMENTO`, `LARGURA`, `ESTADO`) VALUES
(3, 'mesa x', 2525, 'branca', 3, 3.5, 2.5, 4.5, 6.5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `motoboy`
--

CREATE TABLE `motoboy` (
  `ID` int(11) NOT NULL,
  `CPF` varchar(45) DEFAULT NULL,
  `RG` varchar(45) DEFAULT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `SEXO` varchar(45) DEFAULT NULL,
  `DATA_NASC` date DEFAULT NULL,
  `NUM_FIXO` varchar(45) DEFAULT NULL,
  `NUM_CELULAR` varchar(45) DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL,
  `DATA_ADMISSAO` date DEFAULT NULL,
  `SALARIO` float DEFAULT NULL,
  `PLACA` varchar(7) DEFAULT NULL,
  `LOGRADOURO` varchar(255) DEFAULT NULL,
  `NUMERO` varchar(45) DEFAULT NULL,
  `COMPLEMENTO` varchar(45) DEFAULT NULL,
  `BAIRRO` varchar(45) DEFAULT NULL,
  `MUNICIPIO` varchar(45) DEFAULT NULL,
  `UF` varchar(45) DEFAULT NULL,
  `PAIS` varchar(45) DEFAULT NULL,
  `REFERENCIA` varchar(45) DEFAULT NULL,
  `CEP` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_delivery`
--

CREATE TABLE `pedido_delivery` (
  `ID` int(11) NOT NULL,
  `NUMERO` int(10) UNSIGNED DEFAULT NULL,
  `DATA_ABERTURA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DATA_FECHAMENTO` date DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `OBSERVACOES` varchar(255) DEFAULT NULL,
  `ITEM_PEDIDO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedido_presencial`
--

CREATE TABLE `pedido_presencial` (
  `ID` int(11) NOT NULL,
  `NUMERO` int(11) DEFAULT NULL,
  `DATA_ABERTURA` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `DATA_FECHAMENTO` date DEFAULT NULL,
  `TOTAL` float DEFAULT NULL,
  `OBSERVACOES` varchar(255) DEFAULT NULL,
  `GARCOM_ID` int(11) NOT NULL,
  `MESA_ID` int(11) NOT NULL,
  `ITEM_PEDIDO_ID` int(11) NOT NULL,
  `CLIENTE_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(45) DEFAULT NULL,
  `DESCRICAO` varchar(255) DEFAULT NULL,
  `PRECO` float DEFAULT NULL,
  `ALTURA` float DEFAULT NULL,
  `COMPRIMENTO` float DEFAULT NULL,
  `LARGURA` float DEFAULT NULL,
  `PESO` float DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL,
  `FATIA` int(11) DEFAULT NULL,
  `BORDA` tinyint(4) DEFAULT NULL,
  `COZINHEIRO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`ID`, `NOME`, `DESCRICAO`, `PRECO`, `ALTURA`, `COMPRIMENTO`, `LARGURA`, `PESO`, `ESTADO`, `FATIA`, `BORDA`, `COZINHEIRO_ID`) VALUES
(3, 'Pizza de Mussarela', 'Pizza de mussarela de algo com isso!', 20.5, 3.5, 3.5, 3.4, 20.5, 1, 5, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `cozinheiro`
--
ALTER TABLE `cozinheiro`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`ID`,`MOTOBOY_ID`,`PEDIDO_DELIVERY_ID`,`CLIENTE_ID`),
  ADD KEY `fk_DELIVERY_MOTOBOY1_idx` (`MOTOBOY_ID`),
  ADD KEY `fk_DELIVERY_PEDIDO_DELIVERY1_idx` (`PEDIDO_DELIVERY_ID`),
  ADD KEY `fk_DELIVERY_CLIENTE1_idx` (`CLIENTE_ID`);

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`ID`,`CLIENTE_ID`),
  ADD KEY `fk_ENDERECO_CLIENTE1_idx` (`CLIENTE_ID`);

--
-- Indexes for table `garcom`
--
ALTER TABLE `garcom`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD PRIMARY KEY (`ID`,`PRODUTO_ID`),
  ADD KEY `fk_ITEM_PEDIDO_PRODUTO1_idx` (`PRODUTO_ID`);

--
-- Indexes for table `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `motoboy`
--
ALTER TABLE `motoboy`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pedido_delivery`
--
ALTER TABLE `pedido_delivery`
  ADD PRIMARY KEY (`ID`,`ITEM_PEDIDO_ID`),
  ADD KEY `fk_PEDIDO_ITEM_PEDIDO1_idx` (`ITEM_PEDIDO_ID`);

--
-- Indexes for table `pedido_presencial`
--
ALTER TABLE `pedido_presencial`
  ADD PRIMARY KEY (`ID`,`GARCOM_ID`,`MESA_ID`,`ITEM_PEDIDO_ID`,`CLIENTE_ID`),
  ADD KEY `fk_PEDIDO_PRESENCIAL_GARCOM1_idx` (`GARCOM_ID`),
  ADD KEY `fk_PEDIDO_PRESENCIAL_MESA1_idx` (`MESA_ID`),
  ADD KEY `fk_PEDIDO_PRESENCIAL_ITEM_PEDIDO1_idx` (`ITEM_PEDIDO_ID`),
  ADD KEY `fk_PEDIDO_PRESENCIAL_CLIENTE1_idx` (`CLIENTE_ID`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID`,`COZINHEIRO_ID`),
  ADD KEY `fk_PRODUTO_COZINHEIRO1_idx` (`COZINHEIRO_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cozinheiro`
--
ALTER TABLE `cozinheiro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `garcom`
--
ALTER TABLE `garcom`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_pedido`
--
ALTER TABLE `item_pedido`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesa`
--
ALTER TABLE `mesa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `motoboy`
--
ALTER TABLE `motoboy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido_delivery`
--
ALTER TABLE `pedido_delivery`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pedido_presencial`
--
ALTER TABLE `pedido_presencial`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `fk_DELIVERY_CLIENTE1` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `cliente` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DELIVERY_MOTOBOY1` FOREIGN KEY (`MOTOBOY_ID`) REFERENCES `motoboy` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DELIVERY_PEDIDO_DELIVERY1` FOREIGN KEY (`PEDIDO_DELIVERY_ID`) REFERENCES `pedido_delivery` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_ENDERECO_CLIENTE1` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `cliente` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `fk_ITEM_PEDIDO_PRODUTO1` FOREIGN KEY (`PRODUTO_ID`) REFERENCES `produto` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido_delivery`
--
ALTER TABLE `pedido_delivery`
  ADD CONSTRAINT `fk_PEDIDO_ITEM_PEDIDO1` FOREIGN KEY (`ITEM_PEDIDO_ID`) REFERENCES `item_pedido` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `pedido_presencial`
--
ALTER TABLE `pedido_presencial`
  ADD CONSTRAINT `fk_PEDIDO_PRESENCIAL_CLIENTE1` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `cliente` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PEDIDO_PRESENCIAL_GARCOM1` FOREIGN KEY (`GARCOM_ID`) REFERENCES `garcom` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PEDIDO_PRESENCIAL_ITEM_PEDIDO1` FOREIGN KEY (`ITEM_PEDIDO_ID`) REFERENCES `item_pedido` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_PEDIDO_PRESENCIAL_MESA1` FOREIGN KEY (`MESA_ID`) REFERENCES `mesa` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_PRODUTO_COZINHEIRO1` FOREIGN KEY (`COZINHEIRO_ID`) REFERENCES `cozinheiro` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
