-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 21-04-2019 a las 22:38:08
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `da_cine_base_de_datos`
--
CREATE DATABASE `da_cine_base_de_datos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `da_cine_base_de_datos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `dca_peliculas_tabla`
--

CREATE TABLE IF NOT EXISTS `dca_peliculas_tabla` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `peliculas` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `dca_peliculas_tabla`
--

INSERT INTO `dca_peliculas_tabla` (`id`, `peliculas`, `descripcion`) VALUES
(3, 'Bajo la Misma Estrella', 'Es una pelicula de dos adolescentes pacientes de cÃ¡ncer inician un viaje para reafirmar sus vidas y visitar a un escritor solitario en Ãmsterdam.'),
(4, 'Avengers Infinity War ', 'Es una pelÃ­cula estadounidense de superhÃ©roes de 2018, basada en el equipo de superhÃ©roes de Marvel Comics los Vengadores, producida por Marvel Studios y distribuida por Walt Disney Studios Motion Pictures. Es la secuela de The Avengers (2012) y Avengers: Age of Ultron (2015), ubicÃ¡ndose como la dÃ©cimo novena pelÃ­cula del Universo cinematogrÃ¡fico de Marvel.    '),
(5, 'Titanic', 'Es  una pelÃ­cula estadounidense dramÃ¡tica de catÃ¡strofe de 1997 dirigida y escrita por James Cameron y protagonizada por Leonardo DiCaprio, Kate Winslet, Billy Zane, Kathy Bates, Gloria Stuart y Bill Paxton. La trama, una epopeya romÃ¡ntica, relata la relaciÃ³n de Jack Dawson y Rose DeWitt Bukater, dos jÃ³venes que se conocen y se enamoran a bordo del transatlÃ¡ntico RMS Titanic en su viaje inaugural desde Southampton, Inglaterra, a Nueva York, EE. UU., en abril de 1912. '),
(6, 'A Dos Metros de Ti', 'Es una pelicula de dos adolescentes pacientes de cÃ¡ncer que con el pasar del tiempo se enamoran en el hospital.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
