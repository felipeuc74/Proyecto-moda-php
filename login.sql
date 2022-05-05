-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 03-06-2019 a las 02:11:24
-- Versión del servidor: 5.7.21
-- Versión de PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

DROP TABLE IF EXISTS `imagen`;
CREATE TABLE IF NOT EXISTS `imagen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(500) DEFAULT NULL,
  `ruta` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE IF NOT EXISTS `publicacion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(500) DEFAULT NULL,
  `img` varchar(500) DEFAULT NULL,
  `contenido` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`id`, `titulo`, `img`, `contenido`) VALUES
(5, 'Sandalias', 'img/vestido_largo.jpg', 'Si te gustaron las sandalias planas de conchas, espera a ver el vestido suelto y ligero que tambiÃ©n ha puesto de acuerdo a Zara y Mango.'),
(6, 'Vestidos', 'img/paula.jpg', 'Si este vestido corto de flores ya estÃ¡ arrasando en Brownie, ahora que Paula EchevarrÃ­a se lo ha puesto con las sandalias de pala mÃ¡s cÃ³modas de Stradivarius... Â¡va a volar!'),
(7, 'Sandalias Doradas', 'img/street_style.jpg', 'Estas sandalias plateadas de tacÃ³n y piel de Zara podrÃ­an ser la NUEVAS sandalias doradas y te convertirÃ¡n en la invitada perfecta con cualquier vestido.'),
(8, 'Pantalones pitillo', 'img/pitillos_zara.jpg', 'Los Ãºnicos pantalones pitillo que te pondrÃ¡s hasta septiembre serÃ¡n ESTOS de Zara porque son baratÃ­simos sin ser de rebajas y Â¡cÃ³mo quedan con Havaianas, mules y plataformas!'),
(9, 'Basicos de guardarropa', 'img/maria_pombo.jpg', 'MarÃ­a Pombo YA ha llevado la falda pareo del verano 2019, la ha combinado con esa camisa blanca que TODAS tenemos en el armario y el resultado es MUY elegante y MUY tendencia.'),
(10, 'A lo Julia Roberts', 'img/julia_roberts.jpg', 'La americana, la camiseta y los vaqueros de Mango que necesitas para vestir como Julia Roberts en 1991 y las chicas mÃ¡s estilosas en 2019.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `apellidoP` varchar(100) DEFAULT NULL,
  `apellidoM` varchar(100) DEFAULT NULL,
  `dir` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `contra` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidoP`, `apellidoM`, `dir`, `foto`, `usuario`, `contra`) VALUES
(1, 'joel ', 'chan', 'tec', 'calle 25 # 131', '333.jpg', 'joel1220', '12345'),
(2, 'felipe ', 'uc', 'pech', 'calle 27 # 131', '333.jpg', 'felipe24', '12345');

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
