-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 18, 2018 at 09:03 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inversiones_n`
--

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE IF NOT EXISTS `clientes` (
  `RFC` char(13) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` char(10) NOT NULL,
  PRIMARY KEY (`RFC`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clientes`
--

INSERT INTO `clientes` (`RFC`, `nombre`, `direccion`, `telefono`) VALUES
('SOGJ910530493', 'JUAN MANUEL SOSA GOMEZ', 'BENITO JUAREZ 427', '3312462127');

-- --------------------------------------------------------

--
-- Table structure for table `empleados`
--

CREATE TABLE IF NOT EXISTS `empleados` (
  `nss` char(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` char(10) NOT NULL,
  `user` varchar(10) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`nss`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empleados`
--

INSERT INTO `empleados` (`nss`, `nombre`, `direccion`, `telefono`, `user`, `pass`) VALUES
('04079147460', 'JUAN MANUEL SOSA GOMEZ', 'BENITO JUAREZ 427', '3312462127', 'JMSOSA', 'ABCD'),
('89098763726', 'Alejandra Izquierdo', 'Narnia 2000', '3456476479', 'AIZQUIERDO', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `inversion`
--

CREATE TABLE IF NOT EXISTS `inversion` (
  `id_inversion` int(11) NOT NULL,
  `fecha_reg` date DEFAULT '0000-00-00',
  `dias` int(11) NOT NULL DEFAULT '30',
  `importe` decimal(10,0) DEFAULT '0',
  `nss_empleado` char(11) DEFAULT NULL,
  `RFC_cliente` char(13) DEFAULT NULL,
  `categoria` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_inversion`),
  KEY `nss_empleado` (`nss_empleado`),
  KEY `RFC_cliente` (`RFC_cliente`),
  KEY `categoria` (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inversion`
--

INSERT INTO `inversion` (`id_inversion`, `fecha_reg`, `dias`, `importe`, `nss_empleado`, `RFC_cliente`, `categoria`) VALUES
(1, '2018-09-13', 40, '3000', '04079147460', 'SOGJ910530493', 'METALES');

-- --------------------------------------------------------

--
-- Table structure for table `tipo_inversion`
--

CREATE TABLE IF NOT EXISTS `tipo_inversion` (
  `id_tipo_inv` int(11) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `porcentaje` int(11) NOT NULL,
  `tasa_pago` int(11) NOT NULL,
  PRIMARY KEY (`categoria`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tipo_inversion`
--

INSERT INTO `tipo_inversion` (`id_tipo_inv`, `categoria`, `porcentaje`, `tasa_pago`) VALUES
(1, 'METALES', 8, 12);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `inversion`
--
ALTER TABLE `inversion`
  ADD CONSTRAINT `inversion_ibfk_1` FOREIGN KEY (`nss_empleado`) REFERENCES `empleados` (`nss`),
  ADD CONSTRAINT `inversion_ibfk_2` FOREIGN KEY (`RFC_cliente`) REFERENCES `clientes` (`RFC`),
  ADD CONSTRAINT `inversion_ibfk_3` FOREIGN KEY (`categoria`) REFERENCES `tipo_inversion` (`categoria`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
