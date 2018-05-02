-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2018 a las 06:50:38
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
(9, 'Salvaguarda', 'Has completado la parte 2 y 3 del formulario! Y ahora disfrutas de una informacion más personalizada', 20, 'images/imagesLogros/staff_b_01.png'),
(10, 'Chispa de esperanza', 'Has obtenido el nivel 10', 60, 'images/imagesLogros/arrow_b_02.png'),
(11, 'Luz al final del tunel', 'Has obtenido el nivel 15', 120, 'images/imagesLogros/arrow_b_03.png'),
(12, 'Fe demoledora', 'Has obtenido el nivel 20', 240, 'images/imagesLogros/arrow_b_04.png'),
(13, 'Rompe-Corazones', 'Te conectaste en san valentin :)', 69, 'images/imagesLogros/heart.png');

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
  `logrosID` text COLLATE latin1_spanish_ci,
  `idListaTitulos` text COLLATE latin1_spanish_ci
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci COMMENT='Aqui se guardaran los datos del perfil de un usuario';

--
-- Volcado de datos para la tabla `perfil_usuario`
--

INSERT INTO `perfil_usuario` (`idPerfil`, `libros_leidos`, `gusta_escribir`, `definicion_chkbox`, `estudios_chkbox`, `lugar_estudio`, `textArea_sobreti`, `idUsuario`, `modal`, `logrosID`, `idListaTitulos`) VALUES
(7, '0-2 libros en mi vida', 'Lo he intentado pero me cansÃ©.', '.val1.val2.val3.val4', '.primaria.secundaria.nouni.uni', 'bvcnvnvbnvb', 'nvbnvbnbvdsdsxvhfchresfdgdfgdf', 24, 1, '7.8.9', '1'),
(13, '0-2 libros en mi vida', 'Tengo un libro listo para su publicacion.', '.val1.val2', '.primaria.secundaria', 'ehg', 'fdghdfgdfhgherrgervergergerrgr', 26, 1, '7.9', NULL),
(25, 'Me leo uno a la semana :D', 'Lo he intentado pero me cansÃ©.', '.val2.val3.val4', '.primaria', 'ehfhgfhgfhgfhgfhgfhf', 'ehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhfehfhgfhgfhgfhgfhgfhf', 27, 1, '7.9', NULL),
(26, '0-2 libros en mi vida', 'Lo he intentado pero me cansÃ©.', '.val2.val3', 'Los estudios no son necesarios, y muchos menos obl', '', '', 28, 1, '7.9', NULL);

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

--
-- Volcado de datos para la tabla `publicaciones`
--

INSERT INTO `publicaciones` (`idPubli`, `archivo_path`, `titulo`, `autor`, `tematica`, `tipo`, `contenido`) VALUES
(32, NULL, 'Prueba001', 24, 'polithri.roma.terr.biog', '2', '<h1>Soy un ejemplo!</h1>\r\n\r\n<h2>Soy una anomalia!</h2>\r\n\r\n<h3><strong>Que est&aacute; pasando?!</strong></h3>\r\n\r\n<h4>Soy un ejemplo!</h4>\r\n\r\n<div class=\"row\">\r\n<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\" id=\"divRojo\">\r\n<p>Discusion de ideas y conceptos, se comparten ideas viables y se discuten entre el equipo y se llega a un acuerdo, se realizan estudios de viabilidad y requisitos de sistema.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\" id=\"divNaranja\">\r\n<p>El equipo pretende dar sus primeros coletazos, pasando del dise&ntilde;o a la codificaci&oacute;n con herramientas como HTML,CSS, PHP. En esta fase la pagina web se someter&aacute; a muchos cambios diaramente.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\" id=\"divYellow\">\r\n<p>Se termina el dise&ntilde;o estatico de la pagina, se crear&aacute;n base de datos para guardar la informacion de los usuarios y se implementar&aacute; caracteristicas dinamicas en la pagina y plataforma.</p>\r\n</div>\r\n\r\n<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\" id=\"divCyan\">\r\n<p>Se lanzar&aacute; la pagina web, en un principio solamente la pagina hasta que se logre pulir la plataforma, una vez se compruebe la funcionalidad de la plataforma esta se lanzar&aacute; junto a sus caracteristicas principales.</p>\r\n</div>\r\n</div>\r\n\r\n<div class=\"col-md-6\"><img alt=\"foto1\" src=\"style/book-rocket.png\" /></div>\r\n\r\n<div class=\"col-md-6\" id=\"textoBook\">\r\n<h4>Resurgiendo de las cenizas</h4>\r\n\r\n<p>Flashback pretende modificar el significado y embellecerlo con un toque radiante, se desea que cuando un usuario elige utilizar la plataforma &quot;FLASHBACK&quot; se lleve a un nivel nuevo de escritura y que pueda llevar sus sue&ntilde;os a cabo. El usuario contar&aacute; con un sistema de experiencia que ir&aacute; aumentando a medida que este vayas publicando cap&iacute;tulos de su novela favorita.<br />\r\nTambi&eacute;n una vez hecha la subida, podr&aacute; recibir valoraciones, comentarios de los visitantes y incluso podr&aacute;n recompensarle con la tecnologia de IOTA , una criptomoneda destinada a satisfacer las necesidades de la plataforma a la vez que descentralizan el ecosistema digital</p>\r\n\r\n<p>El significado se podr&iacute;a entender como una visi&oacute;n del pasado que se vive en el presente, la mayor&iacute;a de personas que escribieron alguna vez en su vida y lo dejan, a la hora de retomarlo les entra ese complejo, ese recuerdo p unzante, el miedo de que les vuelva a ocurrir lo mismo y se vean frustrados de nuevo.</p>\r\n</div>\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rangos`
--

CREATE TABLE `rangos` (
  `idRangos` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `descripcion` text,
  `EXP` int(11) DEFAULT NULL,
  `combinacion` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='	';

--
-- Volcado de datos para la tabla `rangos`
--

INSERT INTO `rangos` (`idRangos`, `nombre`, `descripcion`, `EXP`, `combinacion`) VALUES
(1, 'Iniciado', 'Combinaste El preludio de una leyenda y Salvaguarda', 10, '7.9'),
(2, 'Leyenda', 'Combinaste los 4 primeros logros de experencia', 500, '8.10.11.12'),
(3, 'Capataz', 'Combinaste los 2 primeros logros de experencia', 250, '8.10'),
(4, 'Romantico', 'Combinaste el logro Rompe-Corazones', 10, '13');

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
(24, 'tihomir619', 'tihomir_alcudia3@hotmail.com', '6ddb4bea8207c2c7a8aaaddc02b8ea28', 'images/myAvatar.png', 6, 'Desconocido', '2018-03-30 09:48:14', 340),
(26, 'andreufilldeputa', 'andreufilldeputa@gmail.com', '6ddb4bea8207c2c7a8aaaddc02b8ea28', 'images/Penguins.jpg', 1, 'Desconocido', '2018-04-06 11:41:18', 60),
(27, 'prueba123', 'prueba123@gmail.com', 'fa5a02c9cc183b3ff1bfcd4c2243f85c', 'images/fotonoticia_20171117100545_640.jpg', 1, 'Desconocido', '2018-04-08 10:58:46', 40),
(28, 'andreufurioso', 'andreufurioso@gmail.com', '1212e80f2739954e1966b5f2f2e6a1c5', 'images/Hydrangeas.jpg', 1, 'Desconocido', '2018-04-12 05:12:56', 10);

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
-- Indices de la tabla `rangos`
--
ALTER TABLE `rangos`
  ADD PRIMARY KEY (`idRangos`);

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
  MODIFY `idlogros` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `perfil_usuario`
--
ALTER TABLE `perfil_usuario`
  MODIFY `idPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `publicaciones`
--
ALTER TABLE `publicaciones`
  MODIFY `idPubli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `rangos`
--
ALTER TABLE `rangos`
  MODIFY `idRangos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUsuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

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
