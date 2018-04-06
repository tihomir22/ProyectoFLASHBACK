-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-04-2018 a las 20:46:45
-- Versión del servidor: 10.1.29-MariaDB
-- Versión de PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registroflashback`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logros`
--

CREATE TABLE `logros` (
  `idlogros` int(11) NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `exp_logro` int(11) DEFAULT NULL,
  `imagen_path` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `logros`
--

INSERT INTO `logros` (`idlogros`, `nombre`, `descripcion`, `exp_logro`, `imagen_path`) VALUES
(7, 'El preludio de una leyenda', 'Te has registrado exitosamente.', 10, 'images/imagesLogros/sword_b_01.png'),
(8, 'El camino del iniciado', 'Has obtenido el nivel 5', 30, 'images/imagesLogros/arrow_b_01.png'),
(9, 'Salvaguarda', 'Has completado la parte 2 y 3 del formulario! Y ahora disfrutas de una informacion más personalizada', 20, 'images/imagesLogros/staff_b_01.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_usuario`
--

CREATE TABLE `perfil_usuario` (
  `idPerfil` int(11) NOT NULL,
  `libros_leidos` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `gusta_escribir` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `definicion_chkbox` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `estudios_chkbox` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `lugar_estudio` varchar(50) COLLATE latin1_spanish_ci DEFAULT NULL,
  `textArea_sobreti` text COLLATE latin1_spanish_ci,
  `idUsuario` int(11) NOT NULL,
  `modal` tinyint(1) NOT NULL,
  `logrosID` text COLLATE latin1_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Aqui se guardaran los datos del perfil de un usuario';

--
-- Volcado de datos para la tabla `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`idPerfil`, `libros_leidos`, `gusta_escribir`, `definicion_chkbox`, `estudios_chkbox`, `lugar_estudio`, `textArea_sobreti`, `idUsuario`, `modal`, `logrosID`) VALUES
(7, '2-10 libros en mi vida', 'Lo he intentado pero me cansÃ©.', '.val2.val3.val4', '.primaria.secundaria.nouni', 'Universidad de Wisconsin , Texas ', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', 24, 1, '7.8.9'),
(11, '0-2 libros en mi vida', 'Lo he intentado pero me cansÃ©.', '.val1.val2.val3.val4', '.primaria.secundaria.nouni.uni', 'eh ', 'hola papaso', 25, 1, NULL),
(13, '0-2 libros en mi vida', 'Tengo un libro listo para su publicacion.', '.val1.val2', '.primaria.secundaria', 'ehg', 'fdghdfgdfhgherrgervergergerrgr', 26, 1, '7.9');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicaciones`
--

CREATE TABLE `publicaciones` (
  `idPubli` int(11) NOT NULL,
  `archivo_path` varchar(45) DEFAULT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `autor` int(11) NOT NULL,
  `tematica` varchar(45) DEFAULT NULL,
  `tipo` varchar(45) DEFAULT NULL,
  `contenido` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUsuarios` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `avatar` varchar(45) NOT NULL,
  `Nivel` int(3) NOT NULL,
  `Rango` varchar(30) NOT NULL DEFAULT 'Desconocido',
  `Creada` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `Experencia` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUsuarios`, `username`, `email`, `password`, `avatar`, `Nivel`, `Rango`, `Creada`, `Experencia`) VALUES
(24, 'tihomir619', 'tihomir_alcudia3@hotmail.com', '6ddb4bea8207c2c7a8aaaddc02b8ea28', 'images/myAvatar.png', 5, 'Desconocido', '2018-03-30 09:48:14', 140),
(25, 'anna123', 'tihomir_alcudia5@hotmail.com', '6ddb4bea8207c2c7a8aaaddc02b8ea28', 'images/Koala.jpg', 1, 'Desconocido', '2018-04-04 13:34:07', 20),
(26, 'andreufilldeputa', 'andreufilldeputa@gmail.com', '6ddb4bea8207c2c7a8aaaddc02b8ea28', 'images/Penguins.jpg', 1, 'Desconocido', '2018-04-06 11:41:18', 60);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `logros`
--
ALTER TABLE `logros`
  ADD PRIMARY KEY (`idlogros`);

--
-- Indices de la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `idUsuario` (`idUsuario`);

--
-- Indices de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  ADD PRIMARY KEY (`idPubli`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUsuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `logros`
--
ALTER TABLE `logros`
  MODIFY `idlogros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idPubli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  ADD CONSTRAINT `perfil_usuario_ibfk_1` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`idUsuarios`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
