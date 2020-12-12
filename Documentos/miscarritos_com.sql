-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-12-2020 a las 22:21:27
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
-- Base de datos: `miscarritos.com`
--
CREATE DATABASE IF NOT EXISTS `miscarritos.com` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `miscarritos.com`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alquilers`
--

DROP TABLE IF EXISTS `alquilers`;
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

DROP TABLE IF EXISTS `reservas`;
CREATE TABLE `reservas` (
  `idreservas` int(11) NOT NULL,
  `estado_reserva` varchar(45) NOT NULL,
  `usuario_idUsuario` int(11) NOT NULL,
  `fecha_reserva` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'almacenista'),
(3, 'mecanico'),
(4, 'cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tallers`
--

DROP TABLE IF EXISTS `tallers`;
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
-- Estructura de tabla para la tabla `tipo_vehiculos`
--

DROP TABLE IF EXISTS `tipo_vehiculos`;
CREATE TABLE `tipo_vehiculos` (
  `idtipo_vehiculo` int(11) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `tipo_Identificacion` varchar(3) DEFAULT NULL,
  `numero_Identificacion` bigint(15) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` bigint(10) DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `role_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `tipo_Identificacion`, `numero_Identificacion`, `email`, `direccion`, `telefono`, `password`, `created_at`, `updated_at`, `role_id`) VALUES
(1, 'sebastian', 'nit', 123123, 'gohansebas_94@hotmail.com', 'weaweqwe', NULL, '$2y$10$ZK8sG9itfW7t1zQwjn.QN.s2/uqecRt6Et7kshlHYC1JPt6bDJoQi', '2020-12-11 08:07:39', '2020-12-11 08:07:39', 1),
(2, 'johan', 'cc', 123123, 'johan_gamez@bancopopular.com.co', 'wqeqwe', 12334235, '$2y$10$hmpgBGkw1GlRjuD5XbgteudXvXcy/E6Jp6STX3fshGoyw39hcBttO', '2020-12-11 08:19:29', '2020-12-11 08:19:29', 4),
(3, 'wain', 'cc', 123123, 'quintero.marketing23@gmail.com', 'qweq', 12312, '$2y$10$A/HXfIGLP2aMW/D2ECX2cuSB3C6VSCpYKD3eBDqXcDOrnjHRL1XpC', '2020-12-11 08:19:34', '2020-12-11 08:19:34', 2),
(8, 'pedro', 'cc', 1232134123, 'yuriiquiintero@gmail.com', 'qeqweqw', 231, '$2y$10$eM0pa9oJpsS.399IZPJlU.EAZvgo/olIKPzQEx2ahvjHwes5PSzlq', '2020-12-11 21:33:49', '2020-12-11 21:33:49', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

DROP TABLE IF EXISTS `vehiculos`;
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
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tallers`
--
ALTER TABLE `tallers`
  ADD PRIMARY KEY (`idtaller`),
  ADD KEY `fk_taller_usuario1_idx` (`usuario_idUsuario`),
  ADD KEY `fk_taller_vehiculo1_idx` (`vehiculo_idvehiculo`);

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
  ADD KEY `fk_users_roles1_idx` (`role_id`);

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
-- AUTO_INCREMENT de la tabla `tipo_vehiculos`
--
ALTER TABLE `tipo_vehiculos`
  MODIFY `idtipo_vehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  ADD CONSTRAINT `fk_users_roles1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
