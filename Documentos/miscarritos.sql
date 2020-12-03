-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2020 a las 03:21:25
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `miscarritos`
--
CREATE DATABASE IF NOT EXISTS `miscarritos` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `miscarritos`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquilers`
--

CREATE TABLE `alquilers` (
  `idalquiler` int(11) NOT NULL,
  `costo` double NOT NULL,
  `estado_alquiler` varchar(45) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `fecha_inicial` date NOT NULL,
  `fecha_final` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `idreservas` int(11) NOT NULL,
  `estado_reserva` varchar(45) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `fecha_reserva` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallers`
--

CREATE TABLE `tallers` (
  `idtaller` int(11) NOT NULL,
  `fecha_revision` date NOT NULL,
  `descripcion` varchar(300) NOT NULL,
  `estado_vehiculo` varchar(45) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `vehiculo_idvehiculo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuarios`
--

CREATE TABLE `tipo_usuarios` (
  `idtipo_Usuario` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_usuarios`
--

INSERT INTO `tipo_usuarios` (`idtipo_Usuario`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'almacenista'),
(3, 'mecanico'),
(4, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_vehiculos`
--

CREATE TABLE `tipo_vehiculos` (
  `idtipo_vehiculo` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tipo_Identificacion` varchar(3) DEFAULT NULL,
  `numero_Identificacion` bigint(15) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `tipo_Usuario_idtipo_Usuario` int(11) NOT NULL DEFAULT 4,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `tipo_Identificacion`, `numero_Identificacion`, `email`, `direccion`, `telefono`, `password`, `tipo_Usuario_idtipo_Usuario`, `created_at`, `updated_at`) VALUES
(19, 'sebastian', 'nit', 123123, 'gohansebas_94@hotmail.com', 'weaweqwe', NULL, '$2y$10$ZK8sG9itfW7t1zQwjn.QN.s2/uqecRt6Et7kshlHYC1JPt6bDJoQi', 4, '2020-12-03 06:53:38', '2020-12-03 06:53:38'),
(20, '1111123131111', 'cc', 123123, 'johan_gamez@bancopopular.com.co', 'wqeqwe', 12334235, '$2y$10$hmpgBGkw1GlRjuD5XbgteudXvXcy/E6Jp6STX3fshGoyw39hcBttO', 4, '2020-12-03 06:55:51', '2020-12-03 06:55:51'),
(21, '11111111111111111', 'nit', 123123123, 'johan_gamez@bancpopular.com.co', 'wqeqwe', 12, '$2y$10$WVgmDHzqfM788t8YlyC.uu8.7iq5GGojLbdQenHelEE2w.CACvpFq', 4, '2020-12-03 06:58:29', '2020-12-03 06:58:29'),
(22, '11213111', 'cc', 123123, 'johamez@bancopopular.com.co', 'qweqwe', 123123, '$2y$10$Bqx0EPpBGf51azkruPoCGeJ5AtvuMHzOc7hPorgc2Qm54JyyNgcHe', 4, '2020-12-03 06:59:34', '2020-12-03 06:59:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `idvehiculo` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `placa` varchar(7) NOT NULL,
  `cantidad_pasajeros` varchar(45) NOT NULL,
  `color` varchar(45) NOT NULL,
  `numero_puertas` varchar(45) NOT NULL,
  `capacidad_carga` varchar(45) NOT NULL,
  `tipo_vehiculo_idtipo_vehiculo` int(11) NOT NULL,
  `alquiler_idalquiler` int(11) NOT NULL,
  `reserva_idreservas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alquilers`
--
ALTER TABLE `alquilers`
  ADD PRIMARY KEY (`idalquiler`),
  ADD KEY `fk_alquiler_usuario1_idx` (`usuario_idUsuario`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`idreservas`),
  ADD KEY `fk_reservas_usuario1_idx` (`usuario_idUsuario`);

--
-- Indices de la tabla `tallers`
--
ALTER TABLE `tallers`
  ADD PRIMARY KEY (`idtaller`),
  ADD KEY `fk_taller_usuario1_idx` (`usuario_idUsuario`),
  ADD KEY `fk_taller_vehiculo1_idx` (`vehiculo_idvehiculo`);

--
-- Indices de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  ADD PRIMARY KEY (`idtipo_Usuario`);

--
-- Indices de la tabla `tipo_vehiculos`
--
ALTER TABLE `tipo_vehiculos`
  ADD PRIMARY KEY (`idtipo_vehiculo`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_Usuario_tipo_Usuario_idx` (`tipo_Usuario_idtipo_Usuario`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`idvehiculo`),
  ADD KEY `fk_vehiculo_tipo_vehiculo1_idx` (`tipo_vehiculo_idtipo_vehiculo`),
  ADD KEY `fk_vehiculo_alquiler1_idx` (`alquiler_idalquiler`),
  ADD KEY `fk_vehiculo_reserva1_idx` (`reserva_idreservas`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alquilers`
--
ALTER TABLE `alquilers`
  MODIFY `idalquiler` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `idreservas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tallers`
--
ALTER TABLE `tallers`
  MODIFY `idtaller` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tipo_usuarios`
--
ALTER TABLE `tipo_usuarios`
  MODIFY `idtipo_Usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tipo_vehiculos`
--
ALTER TABLE `tipo_vehiculos`
  MODIFY `idtipo_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `idvehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alquilers`
--
ALTER TABLE `alquilers`
  ADD CONSTRAINT `fk_alquiler_usuario1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD CONSTRAINT `fk_reservas_usuario1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tallers`
--
ALTER TABLE `tallers`
  ADD CONSTRAINT `fk_taller_usuario1` FOREIGN KEY (`usuario_idUsuario`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_taller_vehiculo1` FOREIGN KEY (`vehiculo_idvehiculo`) REFERENCES `vehiculos` (`idvehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_Usuario_tipo_Usuario` FOREIGN KEY (`tipo_Usuario_idtipo_Usuario`) REFERENCES `tipo_usuarios` (`idtipo_Usuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `fk_vehiculo_alquiler1` FOREIGN KEY (`alquiler_idalquiler`) REFERENCES `alquilers` (`idalquiler`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehiculo_reserva1` FOREIGN KEY (`reserva_idreservas`) REFERENCES `reservas` (`idreservas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_vehiculo_tipo_vehiculo1` FOREIGN KEY (`tipo_vehiculo_idtipo_vehiculo`) REFERENCES `tipo_vehiculos` (`idtipo_vehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
