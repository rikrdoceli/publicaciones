-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 10-03-2023 a las 01:32:33
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

DROP TABLE IF EXISTS `autor`;
CREATE TABLE IF NOT EXISTS `autor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `autor` varchar(150) NOT NULL,
  `autor2` varchar(150) NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `imagen2` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`id`, `autor`, `autor2`, `imagen`, `imagen2`, `estado`) VALUES
(1, 'asdfasdf', '', '', '', 1),
(2, '1212', '', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `configuracion`
--

DROP TABLE IF EXISTS `configuracion`;
CREATE TABLE IF NOT EXISTS `configuracion` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` text NOT NULL,
  `correo` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `configuracion`
--

INSERT INTO `configuracion` (`id`, `nombre`, `telefono`, `direccion`, `correo`) VALUES
(1, 'GIDI', '0000000000', 'Sto. Domingo - Ecuador', 'gidi_rep@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `editorial`
--

DROP TABLE IF EXISTS `editorial`;
CREATE TABLE IF NOT EXISTS `editorial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `editorial` varchar(150) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `editorial`
--

INSERT INTO `editorial` (`id`, `editorial`, `estado`) VALUES
(1, 'Salud y Bienestar', 1),
(2, 'Agricultura y GanaderÃ­a', 1),
(3, 'Ambiente, Biodiversidad y Cambio ClimÃ¡tico', 1),
(4, 'EnergÃ­a y Materiales', 1),
(5, 'Desarrollo Industrial', 1),
(6, 'Territorio y Sociedad Inclusivos', 1),
(7, 'TecnologÃ­as de la InformaciÃ³n y ComunicaciÃ³n', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
CREATE TABLE IF NOT EXISTS `estudiante` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(20) NOT NULL,
  `dni` varchar(20) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `carrera` varchar(255) NOT NULL,
  `direccion` text NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libro`
--

DROP TABLE IF EXISTS `libro`;
CREATE TABLE IF NOT EXISTS `libro` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` text,
  `cantidad` int(11) DEFAULT NULL,
  `id_autor` varchar(100) DEFAULT NULL,
  `id_editorial` int(11) DEFAULT NULL,
  `anio_edicion` date DEFAULT NULL,
  `anio_acepta` date DEFAULT NULL,
  `id_materia` int(11) DEFAULT NULL,
  `num_pagina` int(11) DEFAULT NULL,
  `descripcion` text,
  `enlace` varchar(500) DEFAULT NULL,
  `imagen` varchar(100) DEFAULT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libro`
--

INSERT INTO `libro` (`id`, `titulo`, `cantidad`, `id_autor`, `id_editorial`, `anio_edicion`, `anio_acepta`, `id_materia`, `num_pagina`, `descripcion`, `enlace`, `imagen`, `estado`) VALUES
(1, 'asdfas', 23423, '1', 2, '2023-03-01', '2023-03-01', 2, 32, '23', 'asfa', 'ccfbf1f392dde6176699e3c6eac8e2d3_HORARIO DE CLASES NIVELACION ESTUDIANTES 7H.pdf', 1),
(3, 'asdfasdfas', 323, '1', 1, '2023-03-03', '2023-03-03', 1, 32, 'asdfa', 'sfa', 'aa167bde94c01b0cb9332aa1cb04aecd_Archivo de GIDI.pdf', 1),
(5, 'aaaaaaaaa', 0, '0', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(6, '', 0, '0', 1, '2023-03-03', '2023-03-03', 1, 0, 'asf', 'asfd', '', 1),
(8, 'asfafadsf', 0, '0', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(10, 'eeeee', 0, '0', 1, '2023-03-03', '2023-03-03', 1, 0, 'adf', 'adfadfs', '', 1),
(11, 'eeeee', 0, '0', 1, '2023-03-03', '2023-03-03', 1, 0, 'asdfas', 'fasfd', '', 1),
(12, 'eee', 0, '0', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(13, 'fafaf', 34, '0', 1, '2023-03-03', '2023-03-03', 1, 0, '34', 'rr', '', 1),
(16, 'ttttttttt', 0, '0', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(17, 'tttt', 0, 'ttt', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(18, 'ttt', 0, 'ttt', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(19, 'ttt', 0, 'ttt', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(20, '55555555', 0, '5555', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(21, 'tt', 0, 'ttt', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(22, 'wereq', 0, '55', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(23, 'ttt', NULL, 'ttt', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1),
(24, '', 0, 'asfasf', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(25, 'asdfasfas', 0, '55\r\n66\r\n77', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(26, 'afasf', 0, '55\r\n77', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(27, 'yyyy', 0, '55\r\nasdfdasf\r\nasfas', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1),
(28, 'asdafa', 0, '2', 1, '2023-03-03', '2023-03-03', 1, 0, '', '', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia`
--

DROP TABLE IF EXISTS `materia`;
CREATE TABLE IF NOT EXISTS `materia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `materia` text NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materia`
--

INSERT INTO `materia` (`id`, `materia`, `estado`) VALUES
(1, 'Tesis', 1),
(2, 'ArtÃ­culo cientÃ­fico', 1),
(3, 'Ponencias', 1),
(4, 'Libros', 1),
(5, 'Proyectos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prestamo`
--

DROP TABLE IF EXISTS `prestamo`;
CREATE TABLE IF NOT EXISTS `prestamo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudiante` int(11) NOT NULL,
  `id_libro` int(11) NOT NULL,
  `fecha_prestamo` date NOT NULL,
  `fecha_devolucion` date NOT NULL,
  `cantidad` int(11) NOT NULL,
  `observacion` text NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pubadm`
--

DROP TABLE IF EXISTS `pubadm`;
CREATE TABLE IF NOT EXISTS `pubadm` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `anio_edicion` date NOT NULL,
  `id_materia` int(11) NOT NULL,
  `num_pagina` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pubdoc`
--

DROP TABLE IF EXISTS `pubdoc`;
CREATE TABLE IF NOT EXISTS `pubdoc` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `anio_edicion` date NOT NULL,
  `id_materia` int(11) NOT NULL,
  `num_pagina` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pubest`
--

DROP TABLE IF EXISTS `pubest`;
CREATE TABLE IF NOT EXISTS `pubest` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `anio_edicion` date NOT NULL,
  `id_materia` int(11) NOT NULL,
  `num_pagina` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pubpar`
--

DROP TABLE IF EXISTS `pubpar`;
CREATE TABLE IF NOT EXISTS `pubpar` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_autor` int(11) NOT NULL,
  `id_editorial` int(11) NOT NULL,
  `anio_edicion` date NOT NULL,
  `id_materia` int(11) NOT NULL,
  `num_pagina` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(100) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `cedula` varchar(10) NOT NULL,
  `cargo` varchar(100) NOT NULL,
  `clave` varchar(100) NOT NULL,
  `imagen` varchar(500) DEFAULT NULL,
  `rol` varchar(20) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nombre`, `cedula`, `cargo`, `clave`, `imagen`, `rol`, `estado`) VALUES
(1, 'crisjav@outlook.com.ar', 'Cristian Rocafuerte', '1724957301', 'Responsable del sistema', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '707031d1041032105f3c6295263f3b5a_a92cd2f8ba.jpg', '1', 1),
(2, 'mel.cus@gmail.com', 'Melvin Cusme', '1002297841', 'Responsable del sistema', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'c312488753b5c5d37b0810843c6d5b45_1264518.jpg', '1', 1),
(3, 'egiber_serra@hotmail.com', 'Egiber Serrano', '0805641278', 'Responsable del sistema', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '', '1', 1),
(4, 'jimmy_zam@hotmail.com', 'Jimmy Zambrano', '1245036878', 'Responsable del sistema', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '', '1', 1),
(5, 'gidi_invitado@hotmail.com', 'Invitado', '1112223334', 'Usuario invitado de GIDI', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', '', '7', 1),
(6, '1', 'Administrador', '1', '', '6b86b273ff34fce19d6b804eff5a3f5747ada4eaa22f1d49c01e52ddb7875b4b', '4dc8732cbd5889130f6a3ee04a7b3143_585e4bf3cb11b227491c339a (1).png', '1', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
