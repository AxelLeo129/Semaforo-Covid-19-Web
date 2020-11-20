-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-11-2020 a las 20:04:35
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.2.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `semaforo_covid_web`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentoss`
--

CREATE TABLE `departamentoss` (
  `idDepartamento` int(11) NOT NULL,
  `nombreDep` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `departamentoss`
--

INSERT INTO `departamentoss` (`idDepartamento`, `nombreDep`) VALUES
(1, 'Guatemala'),
(2, 'San Marcos'),
(3, 'Sacatepequez');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `establecimientos`
--

CREATE TABLE `establecimientos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) COLLATE ucs2_spanish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE ucs2_spanish_ci NOT NULL,
  `normas` varchar(255) COLLATE ucs2_spanish_ci NOT NULL,
  `departamento` int(11) NOT NULL,
  `municipio` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE ucs2_spanish_ci NOT NULL,
  `pagina_web` varchar(255) COLLATE ucs2_spanish_ci NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `establecimientos`
--

INSERT INTO `establecimientos` (`id`, `nombre`, `descripcion`, `normas`, `departamento`, `municipio`, `imagen`, `pagina_web`, `user_id`) VALUES
(7, 'Max', 'Tienda de venta y reparación ...', 'No más de una persona, todos deben de llevar mascarilla.', 1, 1, 'https://www.max.com.gt/skin/frontend/base/default/images/tiendas_max_logo.png', 'https://www.max.com.gt/tiendas-max', 1),
(10, 'El Duende', 'Tienda de videojugos y accesorios gamming', 'No más de una persona, todos deben de llevar mascarilla.', 3, 7, 'https://blog.elduendemall.com/wp-content/uploads/2019/10/2-1-300x115.jpg', 'https://elduendemall.com/blog/', 1),
(11, 'Tre Fratelli', 'Restaurante de Comida Italiana', 'No más de una persona, todos deben de llevar mascarilla.', 1, 2, 'https://cliente.quieroaplicar.com/uploads/imagen_25098.png', 'https://www.facebook.com/TreFratelliGt/', 1),
(12, 'McDonald´s', 'Restaurante de Comida rápida', 'No más de una persona, todos deben de llevar mascarilla.', 2, 4, 'https://logos-world.net/wp-content/uploads/2020/04/McDonalds-Logo-2006%E2%80%93present.png', 'https://mcdonalds.com.gt/', 1),
(13, 'Sherwin Williams', 'Tienda de Pintura', 'No más de una persona, todos deben de llevar mascarilla.', 2, 5, 'https://i0.wp.com/elpoderdelasideas.com/wp-content/uploads/sherwin_williams_logo_cubre_la_tierra.png?fit=550%2C268&ssl=1', 'https://www.sherwinca.com/', 1),
(14, 'Tre Fratelli', 'Restaurante de Comida Italiana', 'No más de una persona, todos deben de llevar mascarilla.', 3, 9, 'https://i.pinimg.com/originals/53/81/9d/53819d02567a5265d63fa6a3f1a3a080.jpg', 'https://www.tacobell.com.gt/', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipioss`
--

CREATE TABLE `municipioss` (
  `idMuni` int(11) NOT NULL,
  `nombreMuni` varchar(50) NOT NULL,
  `idDepartamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `municipioss`
--

INSERT INTO `municipioss` (`idMuni`, `nombreMuni`, `idDepartamento`) VALUES
(1, 'Guatemala', 1),
(2, 'Mixco', 1),
(3, 'Villa Nueva', 1),
(4, 'San Marcos', 2),
(5, 'San Pedro', 2),
(6, 'Malacatán', 2),
(7, 'Antigua Guatemala', 3),
(8, 'Jocotenango', 3),
(9, 'San Lucas', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) COLLATE ucs2_spanish_ci NOT NULL,
  `password` varchar(255) COLLATE ucs2_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ucs2 COLLATE=ucs2_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'axel@email.com', '$2y$10$ZT3kQqKKGW4HHnZOZ73FJOG8vHg89kzLukxU8bSCCcy6JDb5R55yq');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `departamentoss`
--
ALTER TABLE `departamentoss`
  ADD PRIMARY KEY (`idDepartamento`);

--
-- Indices de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `departamento` (`departamento`),
  ADD KEY `municipio` (`municipio`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `municipioss`
--
ALTER TABLE `municipioss`
  ADD PRIMARY KEY (`idMuni`),
  ADD KEY `idDepartamento` (`idDepartamento`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `departamentoss`
--
ALTER TABLE `departamentoss`
  MODIFY `idDepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `municipioss`
--
ALTER TABLE `municipioss`
  MODIFY `idMuni` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `establecimientos`
--
ALTER TABLE `establecimientos`
  ADD CONSTRAINT `establecimientos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `establecimientos_ibfk_2` FOREIGN KEY (`departamento`) REFERENCES `departamentoss` (`idDepartamento`),
  ADD CONSTRAINT `establecimientos_ibfk_3` FOREIGN KEY (`municipio`) REFERENCES `municipioss` (`idMuni`);

--
-- Filtros para la tabla `municipioss`
--
ALTER TABLE `municipioss`
  ADD CONSTRAINT `municipioss_ibfk_1` FOREIGN KEY (`idDepartamento`) REFERENCES `departamentoss` (`idDepartamento`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
