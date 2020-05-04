-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-05-2020 a las 00:06:51
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_sistema_peliculas`
--EQUIPO INTEGRANTES-
--ROBERTO GARCIA--
--HECTOR GARCIA--
--GERSON MELENDEZ--
--ALEXIA CORTEZ--
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquiler`
--

CREATE TABLE `alquiler` (
  `idAlquiler` int(10) NOT NULL,
  `idCliente` int(10) NOT NULL,
  `idPelicula` int(10) NOT NULL,
  `fechaPrestamo` varchar(25) NOT NULL,
  `fechaDevolucion` varchar(25) NOT NULL,
  `valor` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `alquiler`
--

INSERT INTO `alquiler` (`idAlquiler`, `idCliente`, `idPelicula`, `fechaPrestamo`, `fechaDevolucion`, `valor`) VALUES
(5, 1, 1, '2020-05-03', '2020-05-03', '5.00'),
(6, 2, 2, '2020-05-04', '2020-05-04', '7.00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(10) NOT NULL,
  `Nombre` varchar(45) NOT NULL,
  `Direccion` varchar(40) NOT NULL,
  `Telefono` varchar(9) NOT NULL,
  `dui` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `Nombre`, `Direccion`, `Telefono`, `dui`) VALUES
(3, 'Gustavo', 'Usulutan', '48484848', '10101010'),
(4, 'Juan', 'Usulutan', '11111111', '12121212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `idPelicula` int(10) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `sinopsis` varchar(45) NOT NULL,
  `genero` varchar(15) NOT NULL,
  `duracion` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`idPelicula`, `nombre`, `descripcion`, `sinopsis`, `genero`, `duracion`) VALUES
(8, 'Avengers', 'Comics', 'Pelean por defender el mundo', 'aventura', '3:00'),
(9, 'Deadpool', 'Comics', 'Lucha por tratar de recuperar su salud y al amor de su vida', 'accion', '2:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  ADD PRIMARY KEY (`idAlquiler`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`idPelicula`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquiler`
--
ALTER TABLE `alquiler`
  MODIFY `idAlquiler` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `idPelicula` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
