-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-06-2019 a las 10:15:03
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webautogestionada`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bebidas`
--

CREATE TABLE `bebidas` (
  `id` int(4) NOT NULL,
  `nombre_bebida` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `bebidas`
--

INSERT INTO `bebidas` (`id`, `nombre_bebida`, `precio`) VALUES
(1, 'cocacola', 2.00),
(2, 'vino blanco', 4.00),
(3, 'vino negro', 5.00),
(4, 'agua mineral', 4.00),
(5, 'agua con gas', 4.00),
(6, 'batidos', 2.00),
(7, 'cafe', 1.00),
(8, 'infusiones', 1.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platos`
--

CREATE TABLE `platos` (
  `id` int(4) NOT NULL,
  `nombre_plato` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `precio_ud` float(4,2) NOT NULL,
  `orden_plato` enum('primero','segundo','postre') COLLATE utf8_spanish_ci NOT NULL,
  `menu_activo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `platos`
--

INSERT INTO `platos` (`id`, `nombre_plato`, `precio_ud`, `orden_plato`, `menu_activo`) VALUES
(2, 'guisado de cangrejos', 10.00, 'primero', 1),
(3, 'cocido madrileño', 13.00, 'primero', 1),
(4, 'espaguetis a la boloñesa', 6.00, 'segundo', 1),
(5, 'pechuga de pollo', 5.00, 'segundo', 1),
(6, 'ensalada mediterranea', 5.00, 'segundo', 1),
(7, 'Flan de calatrava', 5.00, 'postre', 1),
(8, 'crep de chocolate', 6.00, 'postre', 1),
(9, 'helado de sabores', 5.00, 'postre', 1),
(10, 'patatas bravas', 3.00, 'primero', 0),
(11, 'jureles en escabeche', 3.00, 'segundo', 1),
(12, 'jureles en escabeche', 3.00, 'segundo', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `platos`
--
ALTER TABLE `platos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bebidas`
--
ALTER TABLE `bebidas`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `platos`
--
ALTER TABLE `platos`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
