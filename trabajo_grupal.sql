-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2023 a las 16:11:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `trabajo_grupal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `developer`
--

CREATE TABLE `developer` (
  `idDeveloper` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `telefono` double NOT NULL,
  `correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `developer`
--

INSERT INTO `developer` (`idDeveloper`, `nombre`, `direccion`, `ciudad`, `telefono`, `correo`) VALUES
(1, 'Patricia Popayan', 'Mza 12 cs 16 cedral', 'libano-Tolima', 3187659328, 'jppopayanv@unadvirtual.ed.co');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegos_lista`
--

CREATE TABLE `juegos_lista` (
  `idJuegos` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `categoria` varchar(45) NOT NULL,
  `caracteristicas` varchar(45) NOT NULL,
  `consola` varchar(45) NOT NULL,
  `añoLanzamiento` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `juegos_lista`
--

INSERT INTO `juegos_lista` (`idJuegos`, `nombre`, `categoria`, `caracteristicas`, `consola`, `añoLanzamiento`) VALUES
(3, 'Road 96', 'Accion y aventura', 'Un jugador', 'Xbox One y Xbox Series X|S', '2022-04-14'),
(6, 'RUSH: A Disney • PIXAR Adventure', 'Lucha', 'Un jugador', 'Xbox One y Xbox Series X|S', '2012-03-20'),
(7, 'FIFA 23 Ultimate Edition', 'Deportes', 'Multijugador en linea', 'Xbox One y Xbox Series X|S', '2022-09-27'),
(21, 'Hill Climb', 'Carreras', 'Un Jugador', 'PC', '2012-09-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sales_manager`
--

CREATE TABLE `sales_manager` (
  `idSalesManager` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `direccion` varchar(45) NOT NULL,
  `ciudad` varchar(45) DEFAULT NULL,
  `telefono` double NOT NULL,
  `correo` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sales_manager`
--

INSERT INTO `sales_manager` (`idSalesManager`, `nombre`, `direccion`, `ciudad`, `telefono`, `correo`) VALUES
(1, 'Pepito Perez Rojas', 'Mza 5 cs 23 Centro', 'libano-Tolima', 3110003322, 'pepitoperez@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_final`
--

CREATE TABLE `usuario_final` (
  `idUsuarioFinal` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `direccion` varchar(80) NOT NULL,
  `ciudad` varchar(80) DEFAULT NULL,
  `telefono` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `juegos_lista`
--
ALTER TABLE `juegos_lista`
  ADD PRIMARY KEY (`idJuegos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `juegos_lista`
--
ALTER TABLE `juegos_lista`
  MODIFY `idJuegos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
