-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-03-2021 a las 15:48:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnitia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asociacion`
--

CREATE TABLE `asociacion` (
  `nregistro` int(10) NOT NULL,
  `idcontenedor` varchar(10) NOT NULL,
  `mac` varchar(20) NOT NULL,
  `evento` varchar(20) NOT NULL,
  `comentario` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asociacion`
--

INSERT INTO `asociacion` (`nregistro`, `idcontenedor`, `mac`, `evento`, `comentario`) VALUES
(1, 'N-00675', '00800000040256FC', 'Emitiendo', 'En operacion, emitiendo, etc.'),
(2, 'N-01283', '008000000402570D', 'ROBADO', 'Sensor robado. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contenedores`
--

CREATE TABLE `contenedores` (
  `nresgistro` int(10) NOT NULL,
  `idcontenedor` text NOT NULL,
  `direccion` text NOT NULL,
  `mac` text NOT NULL,
  `serial` text NOT NULL,
  `estado` text NOT NULL,
  `estatus` text NOT NULL,
  `longitud` text NOT NULL,
  `latitud` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contenedores`
--

INSERT INTO `contenedores` (`nresgistro`, `idcontenedor`, `direccion`, `mac`, `serial`, `estado`, `estatus`, `longitud`, `latitud`) VALUES
(1, '', '', '00800000040256FC', '', '', '', '', ''),
(2, '', '', '008000000', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE `evento` (
  `nregistro` int(10) NOT NULL,
  `tipoeven` varchar(300) NOT NULL,
  `feceven` varchar(300) NOT NULL,
  `respon` varchar(300) NOT NULL,
  `eviden` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`nregistro`, `tipoeven`, `feceven`, `respon`, `eviden`) VALUES
(1, 'Tapa de contenedor en mal estado', '04/marz/20', 'Ricado Diaz', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `nregistro` int(10) NOT NULL,
  `idcontenedor` text NOT NULL,
  `zona` text NOT NULL,
  `isla` text NOT NULL,
  `direccion` text NOT NULL,
  `estado` text NOT NULL,
  `fecha` text NOT NULL,
  `longitud` text NOT NULL,
  `latitud` text NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`nregistro`, `idcontenedor`, `zona`, `isla`, `direccion`, `estado`, `fecha`, `longitud`, `latitud`, `comentario`) VALUES
(1, 'N-00675\r\n', '2\r\n', '51-0001\r\n', 'Calle 127c#50a-45\r\n', 'Emitiendo\r\n', '7-oct-20\r\n', '-74,058247\r\n', '4,711546\r\n', 'Instalado con éxito, emitiendo bien. '),
(2, 'N-01283\r\n', '2\r\n', '51-0001\r\n', 'Calle 127a#51a\r\n', 'ROBADO\r\n', '7-oct-20\r\n', '-74,06112\r\n', ' 4,70985\r\n', 'Sensor robado. ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sensores`
--

CREATE TABLE `sensores` (
  `nregistro` int(10) NOT NULL,
  `mac` varchar(20) NOT NULL,
  `serial` varchar(20) NOT NULL,
  `fechainv` varchar(10) NOT NULL,
  `estadosen` varchar(20) NOT NULL,
  `subestadosen` varchar(20) NOT NULL,
  `fecha` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `sensores`
--

INSERT INTO `sensores` (`nregistro`, `mac`, `serial`, `fechainv`, `estadosen`, `subestadosen`, `fecha`) VALUES
(1, '00800000040256FC', '0822120200800023', '7-oct-20', 'Operación - Bogotá', 'Emitiendo', '2-marz-20'),
(2, '008000000402570D', '0822120200800062', '7-oct-20', 'ROBADO', 'ROBADO', '2-marz-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `usuarios` varchar(10) NOT NULL,
  `contraseña` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`usuarios`, `contraseña`) VALUES
('admin', 'admin123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  ADD PRIMARY KEY (`nregistro`);

--
-- Indices de la tabla `contenedores`
--
ALTER TABLE `contenedores`
  ADD PRIMARY KEY (`nresgistro`);

--
-- Indices de la tabla `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`nregistro`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`nregistro`);

--
-- Indices de la tabla `sensores`
--
ALTER TABLE `sensores`
  ADD PRIMARY KEY (`nregistro`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asociacion`
--
ALTER TABLE `asociacion`
  MODIFY `nregistro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `contenedores`
--
ALTER TABLE `contenedores`
  MODIFY `nresgistro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT de la tabla `evento`
--
ALTER TABLE `evento`
  MODIFY `nregistro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `nregistro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `sensores`
--
ALTER TABLE `sensores`
  MODIFY `nregistro` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
