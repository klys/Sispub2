-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 14-11-2014 a las 18:26:07
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `servicios publicos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE IF NOT EXISTS `parroquias` (
  `parroquia_id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`parroquia_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=54 ;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`parroquia_id`, `nombre`) VALUES
(45, 'Parroquia Carirubana'),
(49, 'Parroquia Norte'),
(50, 'Parroquia Santa Ana'),
(51, 'Parroquia Urbana Punta CardÃ³n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE IF NOT EXISTS `servicios` (
  `Numero` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL,
  `C.I` varchar(15) NOT NULL,
  `Nombre` varchar(80) NOT NULL,
  `Parroquia` varchar(5) NOT NULL,
  `Sector` varchar(5) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Tipo_Serv` int(11) NOT NULL,
  `Tipo_Serv2` varchar(100) NOT NULL,
  `Tdp` varchar(5) NOT NULL,
  `Anulado` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Fecha_Ejec` date NOT NULL,
  `Supervisor` varchar(50) NOT NULL,
  `Observ` varchar(250) NOT NULL,
  `Usuario` varchar(30) NOT NULL,
  `Hora` varchar(15) NOT NULL,
  `Equipo` varchar(50) NOT NULL,
  `Detalles` mediumtext NOT NULL,
  PRIMARY KEY (`Numero`),
  KEY `par_cod` (`Parroquia`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `servicios`
--

INSERT INTO `servicios` (`Numero`, `Fecha`, `C.I`, `Nombre`, `Parroquia`, `Sector`, `Direccion`, `Tipo_Serv`, `Tipo_Serv2`, `Tdp`, `Anulado`, `Status`, `Fecha_Ejec`, `Supervisor`, `Observ`, `Usuario`, `Hora`, `Equipo`, `Detalles`) VALUES
(1, '2014-11-12', '18681955', 'junior', '01', '01', 'calle sur 2', 2, 'achique2', '01', 'no', 'activa', '2014-11-20', 'bersnard', 'nada', 'bersnard', '8:24pm', 'vit ', 'amigo mio...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitantes`
--

CREATE TABLE IF NOT EXISTS `solicitantes` (
  `CI` varchar(15) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Parroquia` varchar(5) NOT NULL,
  `Sector` varchar(80) NOT NULL,
  `Direccion` varchar(254) NOT NULL,
  `Telefonos` varchar(35) NOT NULL,
  `Tipop` int(5) NOT NULL,
  PRIMARY KEY (`CI`),
  KEY `ci` (`CI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `solicitantes`
--

INSERT INTO `solicitantes` (`CI`, `Nombre`, `Parroquia`, `Sector`, `Direccion`, `Telefonos`, `Tipop`) VALUES
('14802100', 'Wirma Colina', '02', 'Andres Eloy Blanco', 'Calle Democracia', '0416-9612651', 1),
('18681955', 'Junior', '01', 'Pedro Manuel', 'Calle Sur', '0416-1234567', 0),
('20553197', 'Ana Manaure', '01', 'Santa Rosa', 'Punta Cardon', '04161621897', 2),
('23586927', 'Estefany Salazar', '01', 'SantaRosa', 'Calle Venezuela', '0414-4257769', 5),
('24425286', 'Abigail Pire', '04', 'Los Rosales', 'Calle Principal', '0426-4605822', 4),
('24596371', 'Bersnard Coello', '02', 'Amuay', 'Amuay Abajo', '0424-4277475', 0),
('25567815', 'Berlin Coello', '03', 'Amuay', 'Parque Amuay', '0424-6720429', 4),
('7567548', 'William Manaure', '45', 'Santa Rosa', 'Calle Venezuela - CallejÃ³n Peru', '0416-9661389', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `solicitud`
--

CREATE TABLE IF NOT EXISTS `solicitud` (
  `solicitud_id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`solicitud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcado de datos para la tabla `solicitud`
--

INSERT INTO `solicitud` (`solicitud_id`, `nombre`) VALUES
(1, 'Achiques'),
(2, 'Agua Potable'),
(3, 'Alumbrado Publico'),
(4, 'Caliche'),
(5, 'Excavaciones'),
(6, 'Instalación de Bajante'),
(7, 'Limpieza'),
(8, 'Plomeria'),
(10, 'Traslado de Unidad'),
(14, 'hkhjkjh');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subsolicitud`
--

CREATE TABLE IF NOT EXISTS `subsolicitud` (
  `Codigo` int(5) NOT NULL AUTO_INCREMENT,
  `Codigo2` int(5) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`Codigo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tdp`
--

CREATE TABLE IF NOT EXISTS `tdp` (
  `tdp_id` int(5) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`tdp_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tdp`
--

INSERT INTO `tdp` (`tdp_id`, `nombre`) VALUES
(1, 'Consejos Comunales'),
(2, 'Entes Decentralizados'),
(3, 'Entes Policiales'),
(4, 'Escuelas'),
(5, 'Personas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_u` varchar(25) NOT NULL,
  `clave_u` varchar(50) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre_u`, `clave_u`) VALUES
(14, 'root', '1234'),
(15, 'admin', '4321');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
