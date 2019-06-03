-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2019 at 12:24 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(7) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL,
  `Clave` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrador`
--

INSERT INTO `administrador` (`id`, `Nombre`, `Clave`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `CodigoCat` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Descripcion` text NOT NULL,
  PRIMARY KEY (`CodigoCat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categoria`
--

INSERT INTO `categoria` (`CodigoCat`, `Nombre`, `Descripcion`) VALUES
('COD1', 'Piezas Artesanales', 'Las mejores piezas artesanales de Venezuela'),
('COD2', 'Arte Moderno', 'Lo ultimo del Arte'),
('COD3', 'Viajes Exoticos', 'Los mejores destinos paradisiacos'),
('COD4', 'Mejores albunes de musica', 'Lo mejor de la cultura urbana y el Heavy Metal de los 90');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `NIT` varchar(30) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `NombreCompleto` varchar(70) NOT NULL,
  `Apellido` varchar(70) NOT NULL,
  `Clave` text NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `Email` varchar(30) NOT NULL,
  PRIMARY KEY (`NIT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`NIT`, `Nombre`, `NombreCompleto`, `Apellido`, `Clave`, `Direccion`, `Telefono`, `Email`) VALUES
('1', '1234', 'jm', 'jk', '81dc9bdb52d04dc20036dbd8313ed055', 'askjoaj', '0299', 'saodkjp@gmail.com'),
('14568192', 'mari', 'Mari', 'Telleria', 'b59c67bf196a4758191e42f76670ceba', 'caracas', '04129989009', 'mari@gmail.com'),
('26478979', 'jormand11', 'daniel', 'rojas', 'b59c67bf196a4758191e42f76670ceba', 'Vargas venezuela', '04129963778', 'jorman1345@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `cuentabanco`
--

DROP TABLE IF EXISTS `cuentabanco`;
CREATE TABLE IF NOT EXISTS `cuentabanco` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `NumeroCuenta` varchar(100) NOT NULL,
  `NombreBanco` varchar(100) NOT NULL,
  `NombreBeneficiario` varchar(100) NOT NULL,
  `TipoCuenta` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuentabanco`
--

INSERT INTO `cuentabanco` (`id`, `NumeroCuenta`, `NombreBanco`, `NombreBeneficiario`, `TipoCuenta`) VALUES
(1, '010202020202020202020202', 'Mercantil', 'Jorman Mayora', 'Corriente');

-- --------------------------------------------------------

--
-- Table structure for table `detalle`
--

DROP TABLE IF EXISTS `detalle`;
CREATE TABLE IF NOT EXISTS `detalle` (
  `NumPedido` int(20) NOT NULL,
  `CodigoProd` varchar(30) NOT NULL,
  `CantidadProductos` int(20) NOT NULL,
  `PrecioProd` decimal(30,2) NOT NULL,
  KEY `NumPedido` (`NumPedido`),
  KEY `CodigoProd` (`CodigoProd`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detalle`
--

INSERT INTO `detalle` (`NumPedido`, `CodigoProd`, `CantidadProductos`, `PrecioProd`) VALUES
(2, 'MAM06', 1, '16.00'),
(3, 'VE2', 1, '278.00'),
(4, 'MAM04', 5, '14.00');

-- --------------------------------------------------------

--
-- Table structure for table `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `CodigoProd` varchar(30) NOT NULL,
  `NombreProd` varchar(30) NOT NULL,
  `CodigoCat` varchar(30) NOT NULL,
  `Precio` decimal(30,2) NOT NULL,
  `Descuento` int(2) NOT NULL,
  `Modelo` varchar(30) NOT NULL,
  `Marca` varchar(30) NOT NULL,
  `Stock` int(20) NOT NULL,
  `NITProveedor` varchar(30) NOT NULL,
  `Imagen` varchar(150) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Estado` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `CodigoCat` (`CodigoCat`),
  KEY `NITProveedor` (`NITProveedor`),
  KEY `Agregado` (`Nombre`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `producto`
--

INSERT INTO `producto` (`id`, `CodigoProd`, `NombreProd`, `CodigoCat`, `Precio`, `Descuento`, `Modelo`, `Marca`, `Stock`, `NITProveedor`, `Imagen`, `Nombre`, `Estado`) VALUES
(1, '001', 'Set De Escudillas En Gres Piez', 'COD1', '24.00', 0, 'Tazas', 'Artesanal', 789, '26478979', '001.jpg', 'admin', 'Activo'),
(2, '002', '5 Piezas de madera Artesanía', 'COD1', '40.00', 0, 'Accesorios', 'IndianShelf', 456, '26478979', '002.jpg', 'admin', 'Activo'),
(3, '003', 'tarros de barro 3 piezas', 'COD1', '50.00', 0, 'Tazas', 'Barro', 77, '26478979', '003.jpg', 'admin', 'Activo'),
(4, 'AM01', 'Retrato de Dora Maar', 'COD2', '200.00', 0, 'Capital del Arte', 'Picasso', 1, '26478979', 'AM01.jpg', 'admin', 'Activo'),
(5, 'AM02', 'Chop Suey', 'COD2', '215.00', 0, 'Capital del Arte', 'Hopper', 1, '26478979', 'AM02.jpg', 'admin', 'Activo'),
(6, 'AM04', 'Rojo', 'COD2', '98.00', 0, 'Capital del Arte', 'Abstracto', 1, '26478979', 'AM04.jpg', 'admin', 'Activo'),
(7, 'VE1', 'Los Roques 7D, 6N', 'COD3', '489.00', 10, 'Viajes Turisticos', 'Paquetes Turisticos', 100, '26478979', 'VE1.jpg', 'admin', 'Activo'),
(8, 'VE2', 'Isla de Margarita 7D, 6N', 'COD3', '278.00', 0, 'Viajes Turisticos', 'Paquetes Turisticos', 99, '26478979', 'VE2.jpg', 'admin', 'Activo'),
(9, 'MAM01', 'British Steel', 'COD4', '8.00', 0, 'Album Musical', 'Judas Priest', 67, '26478979', 'MAM01.jpg', 'admin', 'Activo'),
(10, 'MAM02', 'Paranoid', 'COD4', '12.00', 20, 'Album Musical', 'Black Sabbath', 48, '26478979', 'MAM02.jpg', 'admin', 'Activo'),
(11, 'MAM03', 'Iron Maiden', 'COD4', '15.00', 0, 'Album Musical', 'Iron Maiden', 78, '26478979', 'MAM03.jpg', 'admin', 'Activo'),
(12, 'MAM04', 'Residente', 'COD4', '14.00', 0, 'Album Musical', 'Residente', 93, '26478979', 'MAM04.jpg', 'admin', 'Activo'),
(13, 'MAM05', 'Entren los que quieran', 'COD4', '18.00', 0, 'Album Musical', 'Calle 13', 25, '26478979', 'MAM05.jpg', 'admin', 'Activo'),
(14, 'MAM06', 'Los de atrás vienen conmigo', 'COD4', '16.00', 0, 'Album Musical', 'Calle 13', 22, '26478979', 'MAM06.jpg', 'admin', 'Activo');

-- --------------------------------------------------------

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE IF NOT EXISTS `proveedor` (
  `NITProveedor` varchar(30) NOT NULL,
  `NombreProveedor` varchar(30) NOT NULL,
  `Direccion` varchar(200) NOT NULL,
  `Telefono` varchar(20) NOT NULL,
  `PaginaWeb` varchar(30) NOT NULL,
  PRIMARY KEY (`NITProveedor`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proveedor`
--

INSERT INTO `proveedor` (`NITProveedor`, `NombreProveedor`, `Direccion`, `Telefono`, `PaginaWeb`) VALUES
('26478979', 'Jorman Mayora', 'Vargas Venezuela', '04129963778', 'http://jormanmayora.com');

-- --------------------------------------------------------

--
-- Table structure for table `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `NumPedido` int(20) NOT NULL AUTO_INCREMENT,
  `Fecha` varchar(150) NOT NULL,
  `NIT` varchar(30) NOT NULL,
  `TotalPagar` decimal(30,2) NOT NULL,
  `Estado` varchar(150) NOT NULL,
  `NumeroDeposito` varchar(50) NOT NULL,
  `TipoEnvio` varchar(37) NOT NULL,
  `Adjunto` varchar(50) NOT NULL,
  PRIMARY KEY (`NumPedido`),
  KEY `NIT` (`NIT`),
  KEY `NIT_2` (`NIT`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venta`
--

INSERT INTO `venta` (`NumPedido`, `Fecha`, `NIT`, `TotalPagar`, `Estado`, `NumeroDeposito`, `TipoEnvio`, `Adjunto`) VALUES
(2, '02-06-2019', '1', '16.00', 'Pendiente', '32', 'Recoger Por Tienda', 'comprobante_2.jpg'),
(3, '02-06-2019', '1', '278.00', 'Pendiente', '43', 'Recoger Por Tienda', 'Sin archivo adjunto'),
(4, '02-06-2019', '1', '70.00', 'Pendiente', '46334', 'Recoger Por Tienda', 'comprobante_3.jpg');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detalle`
--
ALTER TABLE `detalle`
  ADD CONSTRAINT `detalle_ibfk_9` FOREIGN KEY (`NumPedido`) REFERENCES `venta` (`NumPedido`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_7` FOREIGN KEY (`CodigoCat`) REFERENCES `categoria` (`CodigoCat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_8` FOREIGN KEY (`NITProveedor`) REFERENCES `proveedor` (`NITProveedor`) ON UPDATE CASCADE;

--
-- Constraints for table `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`NIT`) REFERENCES `cliente` (`NIT`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
