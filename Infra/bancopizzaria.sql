-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Maio-2018 às 21:06
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
  `ENDERECO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `CPF`, `RG`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`, `NUM_CELULAR`, `ESTADO`, `CRIADO_EM`, `ENDERECO_ID`) VALUES
(1, '111', '222', 'Alterado Rafael', 'masculino', '2014-12-12', '333', '555', 1, '2018-05-17 18:17:18', 1),
(2, '111', '222', 'rafael', 'masculino', '2014-12-12', '333', '555', 1, '2018-05-17 18:32:13', 1),
(3, '111', '222', 'Alterado Rafael', 'masculino', '2014-12-12', '333', '555', 1, '2018-05-17 18:41:21', 1),
(4, '111', '222', 'Alterado Rafael', 'masculino', '2014-12-12', '333', '555', 1, '2018-05-17 18:41:23', 1);

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
  `SALARIO` float DEFAULT NULL,
  `ENDERECO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cozinheiro`
--

INSERT INTO `cozinheiro` (`ID`, `CPF`, `RG`, `CNPJ`, `RAZAOSOCIAL`, `NOME`, `SEXO`, `DATA_NASC`, `NUM_FIXO`, `NUM_CELULAR`, `ESTADO`, `SALARIO`, `ENDERECO_ID`) VALUES
(1, '2', '12', '2', '2', '2', '2', '2018-05-16', '2', '2', 1, 2, 1);

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
  `CEP` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `endereco`
--

INSERT INTO `endereco` (`ID`, `LOGRADOURO`, `NUMERO`, `COMPLEMENTO`, `BAIRRO`, `MUNICIPIO`, `UF`, `PAIS`, `REFERENCIA`, `CEP`) VALUES
(1, 'RUA PHP', '107', 'Casa', 'CordeiroPHP', 'Recife', 'PE', 'Brazil', 'GALEGOPHP', '50721230');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada_produto`
--

CREATE TABLE `entrada_produto` (
  `ID` int(11) NOT NULL,
  `QTD` int(11) DEFAULT NULL,
  `PRODUTO_ID` int(11) NOT NULL,
  `COZINHEIRO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `GOJETA` float DEFAULT NULL,
  `DATA_ADMISSAO` date DEFAULT NULL,
  `SALARIO` float DEFAULT NULL,
  `ENDERECO_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  `ENDERECO_ID` int(11) NOT NULL
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
  `BORDA` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`,`ENDERECO_ID`),
  ADD KEY `fk_CLIENTE_ENDERECO_idx` (`ENDERECO_ID`);

--
-- Indexes for table `cozinheiro`
--
ALTER TABLE `cozinheiro`
  ADD PRIMARY KEY (`ID`,`ENDERECO_ID`),
  ADD KEY `fk_COZINHEIRO_ENDERECO1_idx` (`ENDERECO_ID`);

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
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `entrada_produto`
--
ALTER TABLE `entrada_produto`
  ADD PRIMARY KEY (`ID`,`PRODUTO_ID`,`COZINHEIRO_ID`),
  ADD KEY `fk_FORNECEDOR_has_PRODUTO_PRODUTO1_idx` (`PRODUTO_ID`),
  ADD KEY `fk_ENTRADA_PRODUTO_COZINHEIRO1_idx` (`COZINHEIRO_ID`);

--
-- Indexes for table `garcom`
--
ALTER TABLE `garcom`
  ADD PRIMARY KEY (`ID`,`ENDERECO_ID`),
  ADD KEY `fk_GARCOM_ENDERECO1_idx` (`ENDERECO_ID`);

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
  ADD PRIMARY KEY (`ID`,`ENDERECO_ID`),
  ADD KEY `fk_MOTOBOY_ENDERECO1_idx` (`ENDERECO_ID`);

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
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `entrada_produto`
--
ALTER TABLE `entrada_produto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `garcom`
--
ALTER TABLE `garcom`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `item_pedido`
--
ALTER TABLE `item_pedido`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mesa`
--
ALTER TABLE `mesa`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `fk_CLIENTE_ENDERECO` FOREIGN KEY (`ENDERECO_ID`) REFERENCES `endereco` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `cozinheiro`
--
ALTER TABLE `cozinheiro`
  ADD CONSTRAINT `fk_COZINHEIRO_ENDERECO1` FOREIGN KEY (`ENDERECO_ID`) REFERENCES `endereco` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `delivery`
--
ALTER TABLE `delivery`
  ADD CONSTRAINT `fk_DELIVERY_CLIENTE1` FOREIGN KEY (`CLIENTE_ID`) REFERENCES `cliente` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DELIVERY_MOTOBOY1` FOREIGN KEY (`MOTOBOY_ID`) REFERENCES `motoboy` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_DELIVERY_PEDIDO_DELIVERY1` FOREIGN KEY (`PEDIDO_DELIVERY_ID`) REFERENCES `pedido_delivery` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `entrada_produto`
--
ALTER TABLE `entrada_produto`
  ADD CONSTRAINT `fk_ENTRADA_PRODUTO_COZINHEIRO1` FOREIGN KEY (`COZINHEIRO_ID`) REFERENCES `cozinheiro` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_FORNECEDOR_has_PRODUTO_PRODUTO1` FOREIGN KEY (`PRODUTO_ID`) REFERENCES `produto` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `garcom`
--
ALTER TABLE `garcom`
  ADD CONSTRAINT `fk_GARCOM_ENDERECO1` FOREIGN KEY (`ENDERECO_ID`) REFERENCES `endereco` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `item_pedido`
--
ALTER TABLE `item_pedido`
  ADD CONSTRAINT `fk_ITEM_PEDIDO_PRODUTO1` FOREIGN KEY (`PRODUTO_ID`) REFERENCES `produto` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `motoboy`
--
ALTER TABLE `motoboy`
  ADD CONSTRAINT `fk_MOTOBOY_ENDERECO1` FOREIGN KEY (`ENDERECO_ID`) REFERENCES `endereco` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
