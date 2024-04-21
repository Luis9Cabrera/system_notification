-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-04-2024 a las 16:04:22
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `notification`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deportes`
--

CREATE TABLE `deportes` (
  `id_deporte` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `deportes`
--

INSERT INTO `deportes` (`id_deporte`, `id_user`) VALUES
(2, 3),
(1, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `finanzas`
--

CREATE TABLE `finanzas` (
  `id_finanzas` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `finanzas`
--

INSERT INTO `finanzas` (`id_finanzas`, `id_user`) VALUES
(1, 1),
(2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notif_correo`
--

CREATE TABLE `notif_correo` (
  `id_correo` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notif_correo`
--

INSERT INTO `notif_correo` (`id_correo`, `id_user`) VALUES
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notif_push`
--

CREATE TABLE `notif_push` (
  `id_push` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notif_push`
--

INSERT INTO `notif_push` (`id_push`, `id_user`) VALUES
(3, 1),
(1, 2),
(4, 3),
(2, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notif_sms`
--

CREATE TABLE `notif_sms` (
  `id_sms` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `notif_sms`
--

INSERT INTO `notif_sms` (`id_sms`, `id_user`) VALUES
(3, 1),
(4, 2),
(1, 3),
(2, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `peliculas`
--

CREATE TABLE `peliculas` (
  `id_peliculas` int(255) NOT NULL,
  `id_user` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `peliculas`
--

INSERT INTO `peliculas` (`id_peliculas`, `id_user`) VALUES
(2, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(255) NOT NULL,
  `mensaje` text NOT NULL,
  `tipo_notificacion` varchar(255) NOT NULL,
  `user` int(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `telefono` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `nombre`, `correo`, `telefono`) VALUES
(1, 'Luis', 'luis@gmail.com', 2223645892),
(2, 'Alberto', 'alberto@gmail.com', 7854123698),
(3, 'Sofia', 'sofia@gmail.com', 4236895145),
(4, 'Juan', 'juan@gmail.com', 2153694216),
(5, 'Zuri', 'zuri@gmail.com', 5423013697);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD PRIMARY KEY (`id_deporte`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `finanzas`
--
ALTER TABLE `finanzas`
  ADD PRIMARY KEY (`id_finanzas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `notif_correo`
--
ALTER TABLE `notif_correo`
  ADD PRIMARY KEY (`id_correo`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `notif_push`
--
ALTER TABLE `notif_push`
  ADD PRIMARY KEY (`id_push`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `notif_sms`
--
ALTER TABLE `notif_sms`
  ADD PRIMARY KEY (`id_sms`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD PRIMARY KEY (`id_peliculas`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`),
  ADD KEY `user` (`user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `deportes`
--
ALTER TABLE `deportes`
  MODIFY `id_deporte` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `finanzas`
--
ALTER TABLE `finanzas`
  MODIFY `id_finanzas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `notif_correo`
--
ALTER TABLE `notif_correo`
  MODIFY `id_correo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `notif_push`
--
ALTER TABLE `notif_push`
  MODIFY `id_push` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `notif_sms`
--
ALTER TABLE `notif_sms`
  MODIFY `id_sms` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `peliculas`
--
ALTER TABLE `peliculas`
  MODIFY `id_peliculas` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `deportes`
--
ALTER TABLE `deportes`
  ADD CONSTRAINT `deportes_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `finanzas`
--
ALTER TABLE `finanzas`
  ADD CONSTRAINT `finanzas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `notif_correo`
--
ALTER TABLE `notif_correo`
  ADD CONSTRAINT `notif_correo_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `notif_push`
--
ALTER TABLE `notif_push`
  ADD CONSTRAINT `notif_push_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `notif_sms`
--
ALTER TABLE `notif_sms`
  ADD CONSTRAINT `notif_sms_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `peliculas`
--
ALTER TABLE `peliculas`
  ADD CONSTRAINT `peliculas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
