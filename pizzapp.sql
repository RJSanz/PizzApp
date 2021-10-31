-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-10-2021 a las 07:15:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizzapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `ID_usuario` int(4) NOT NULL,
  `Usuario` varchar(10) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `Correo` varchar(20) NOT NULL,
  `FecNac` date NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Contrasena` varchar(10) NOT NULL,
  `Tipo` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`ID_usuario`, `Usuario`, `Nombre`, `Correo`, `FecNac`, `Telefono`, `Direccion`, `Contrasena`, `Tipo`) VALUES
(1, 'RjSanz', 'Raúl Sánchez Martínez', 'radjesama@gmail.com', '1997-01-19', 1234567, 'Las Flores No. 6', '1591hhh', 'A'),
(2, 'robert19', 'roberto roboto', 'robertr@gmail.com', '1998-10-10', 1234567890, 'orquideas12', '1234567', 'U'),
(3, 'Leonidas', 'Leonides Perez', 'leo.docode@outlook.c', '1994-08-08', 1234567890, 'cerca del cbetis', '12345678', 'U'),
(4, 'qwerty', 'qwerty', 'doqw', '1919-12-19', 987654321, 'wofw', 'qwerty', 'U'),
(5, 'agla', 'nanta', 'dorpehal', '1919-12-19', 987654321, 'wofw', 'yhvh', 'U'),
(6, 'oeojwd', 'dwqdjq', 'wjeewdj@kwenewkdn', '1818-12-18', 1234567, 'idjw', '1234567', 'U'),
(7, 'aksmas', 'sjasjsa', 'ssasasj@kwenewkdn', '1818-12-18', 1234567, 'idjw', '1234567', 'U');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID_usuario` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
