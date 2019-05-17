-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2019 a las 15:22:56
-- Versión del servidor: 5.5.57-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `mi_sistema`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`a01703446`@`%` PROCEDURE `selectHobbies`()
    NO SQL
SELECT * FROM Hobbie$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Hobbie`
--

CREATE TABLE IF NOT EXISTS `Hobbie` (
  `idhobbie` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  PRIMARY KEY (`idhobbie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `Hobbie`
--

INSERT INTO `Hobbie` (`idhobbie`, `nombre`) VALUES
(1, 'Fut'),
(2, 'Basket'),
(3, 'Videojuegos'),
(4, 'Cocina'),
(5, 'Cantar'),
(6, 'Programar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Usuario`
--

CREATE TABLE IF NOT EXISTS `Usuario` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(30) NOT NULL,
  `apaterno` varchar(30) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `idhobbie` int(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idhobbie` (`idhobbie`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `Usuario`
--

INSERT INTO `Usuario` (`id`, `nombre`, `apaterno`, `correo`, `idhobbie`) VALUES
(1, 'juan', 'alcantara', 'juan@alcantaraa.it', 3),
(2, 'lol', 'lil', 'lol@lil', 1),
(3, 'Javier', 'Mendez', 'a01703446@itesm.mx', 6),
(4, 'John', 'Rambo', 'first@blood.io', 4),
(5, 'Walter', 'White', 'breaking@bad.cool', 5),
(8, 'Eric', 'Cartman', 'elmapache@estupidokyle.judio', 3),
(9, 'Jake', 'Muy Hombre', 'lisasimpson@mail.net', 6),
(10, 'Sor Juana', 'Ines de la Cruz', 'billetede200@bancodemexico.gob', 2);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `Usuario`
--
ALTER TABLE `Usuario`
  ADD CONSTRAINT `Usuario_ibfk_1` FOREIGN KEY (`idhobbie`) REFERENCES `Hobbie` (`idhobbie`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
