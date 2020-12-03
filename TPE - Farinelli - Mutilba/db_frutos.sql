-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 02:05:43
-- Versión del servidor: 10.1.40-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_frutos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id_categoria` int(11) NOT NULL,
  `nombre_categoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_categoria`, `nombre_categoria`) VALUES
(8, 'Frutos Secos'),
(24, 'Cereales'),
(25, 'Mixes'),
(26, 'Varios'),
(28, 'Ofertas'),
(29, 'Dietetica');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `comentario` varchar(250) DEFAULT NULL,
  `puntaje` int(1) DEFAULT NULL,
  `id_user` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `puntaje`, `id_user`, `id_producto`) VALUES
(183, ' Muy buen producto', 5, 40, 41),
(184, ' Llegaron todas partidas', 1, 2, 42),
(185, ' Estaba humedo', 2, 2, 43),
(186, ' No los probé', 4, 2, 74),
(187, ' Espectacular', 4, 41, 82),
(188, ' Contiene muchas pasas de uva', 2, 41, 86),
(189, ' Recomendado', 5, 41, 81),
(190, 'Para aprovechar! está en precio', 5, 41, 88),
(191, ' Es 000 o 0000?', 2, 41, 85),
(192, ' Buen producto', 5, 40, 84),
(193, ' Muy bueno', 5, 40, 86),
(194, 'Maso', 3, 40, 79),
(195, ' Haces envios a Tandil?', 3, 40, 85),
(196, ' Un comentario', 4, 40, 74),
(198, 'Necesito 2 kilos', 4, 40, 43),
(199, 'Esta mejor que el premium', 5, 32, 84),
(200, ' Todo ok', 4, 32, 42),
(201, ' Cual es la diferencia con el frutal?', 2, 32, 82);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` text NOT NULL,
  `descripcion` text,
  `precio_kilo` int(11) NOT NULL,
  `precio_medio` int(11) NOT NULL,
  `precio_cuarto` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `descripcion`, `precio_kilo`, `precio_medio`, `precio_cuarto`, `id_categoria`) VALUES
(41, 'Pistacho', 'Producto importado', 999, 750, 400, 8),
(42, 'Nuez', 'Mariposa', 750, 1, 400, 8),
(43, 'Mani', 'Sin cascara', 350, 1, 120, 8),
(74, 'Durazno', 'Disecados', 120, 75, 40, 26),
(78, 'Azucar mascabo', 'Premium', 290, 200, 100, 26),
(79, 'Pasas de uva', 'Rubias', 160, 99, 55, 28),
(80, 'Azucar impalpable', NULL, 145, 90, 60, 28),
(81, 'Masapan', 'Colores varios', 380, 250, 100, 26),
(82, 'Running', 'Contiene: Pasa sult y rubia, almendra, nuez, chips de banana, papaya en cubo, trozo de anana, castaña de caju', 450, 280, 160, 25),
(83, 'Energetico', 'Contiene: Almendras, castañas de cajú, pasas de uva, nueces, mani.', 460, 240, 135, 25),
(84, 'Frutal', NULL, 600, 340, 200, 25),
(85, 'Harina integral', NULL, 135, 80, 40, 28),
(86, 'Granola', 'Formado por nueces, copos de avena mezclados con miel y otros ingredientes naturales', 320, 170, 80, 24),
(87, 'Granola premium', ' formado por nueces, copos de avena mezclados con miel y otros ingredientes naturales - Mayor cantidad de pistachos y almendras', 400, 220, 150, 24),
(88, 'Stevia', 'Hileret', 140, 77, 39, 29);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `administrador` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `usuario`, `password`, `mail`, `administrador`) VALUES
(2, 'roque', '$2y$10$0Zvbu1PtNDmtY2UZzoXDveOi0hVJPdgfV9ZUqGC94/HZmiIXtzd26', 'roqueAdmin@live.com.ar', 1),
(32, 'matias', '$2y$10$HmHPIkUvMC/rku3lxz2ndu1Kre5Jys6fvw5Q79oyQiAZt6BIBAzIS', 'matias@hotmail.com', 0),
(40, 'juan', '$2y$10$5wHB6leTLQ7obh0OpxVKB.4rISgOVPdywhvW.T3gy9PiVnn9TgfVK', 'juanM@gmail.com', 1),
(41, 'martina', '$2y$10$O5iJYDLuFc0Zdg.dkZnNjeBemoskKTWtLG.uDx5wg8qnXmtQUB4i6', 'mmm1920@gmail.com', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_user` (`id_user`) USING BTREE;

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id_categoria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
