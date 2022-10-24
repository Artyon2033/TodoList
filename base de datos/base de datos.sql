-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-10-2022 a las 17:32:04
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tutorial`
--
CREATE DATABASE IF NOT EXISTS `tutorial` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tutorial`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tarea`
--
-- Creación: 22-10-2022 a las 00:28:38
--

CREATE TABLE `tarea` (
  `cod_tarea` int(11) NOT NULL,
  `tarea` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tarea`
--

INSERT INTO `tarea` (`cod_tarea`, `tarea`) VALUES
(20182361, 'lavar'),
(201913193, 'entrenar'),
(2019312214, 'Limpiar el garaje ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--
-- Creación: 16-10-2022 a las 20:43:06
--

CREATE TABLE `usuarios` (
  `id_cliente` int(200) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_cliente`, `usuario`, `contraseña`, `correo`, `telefono`, `rol`) VALUES
(1, '', '', '', '', 'cliente'),
(3, 'adasdas', 'asdada', 'asdasdassa@gmail.com', '32543453', 'cliente'),
(4, 'pmadasdsaads', 'adasds', 'adgashdashg@gmail.com', '123123', 'cliente'),
(5, 'adas', 'adasasd', 'asdhjashd@gmail.com', '1212321', 'cliente'),
(6, 'usuario2', 'usuario2', 'usuario2@gmail.com', '678423', 'cliente'),
(7, 'usuario3', 'usuario3', 'usuario3@gmail.com', '12321212', 'cliente'),
(8, 'usuario4', 'usuario4', 'usuario4@gmail.com', '12321212', 'cliente'),
(9, 'usuario5', 'usuario5', 'usuario5@gmail.com', '123123212', 'cliente'),
(10, 'usuario6', 'usuario6', 'usuario6@gmail.com', '1212121232', 'cliente'),
(11, 'usuario7', 'usuario7', 'usuario7@gmail.com', '65423423234', 'cliente');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tarea`
--
ALTER TABLE `tarea`
  ADD PRIMARY KEY (`cod_tarea`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tarea`
--
ALTER TABLE `tarea`
  MODIFY `cod_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_cliente` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
