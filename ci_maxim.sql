-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-09-2019 a las 23:34:39
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ci_roperia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `descripcion`) VALUES
(1, 'hombre'),
(2, 'mujer'),
(3, 'accesorio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE `consultas` (
  `nombre` varchar(100) NOT NULL,
  `asunto` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `id` int(11) NOT NULL,
  `mensaje` varchar(200) NOT NULL,
  `leido` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`nombre`, `asunto`, `email`, `id`, `mensaje`, `leido`) VALUES
('Saul Paredes', 'dasd', 'saul_paredes@hotmail.es', 1, 'asda', 0),
('Saul Paredes', 'dasd', 'saul_paredes@hotmail.es', 2, 'sadas', 0),
('Saul Paredes', 'dasd', 'saul_paredes@hotmail.es', 3, 'ada', 0),
('Saul Paredes', 'testeo', 'email@ht.com', 4, 'vista de consulta ante un mensaje largo, como se ve el recuadro el cual contiene el mensaje', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `id` int(11) NOT NULL DEFAULT 1,
  `descripcion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`id`, `descripcion`) VALUES
(1, 'administrador'),
(2, 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(200) NOT NULL,
  `imagen` varchar(150) NOT NULL,
  `disable` int(1) NOT NULL DEFAULT 0,
  `categoria_id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` double(11,2) NOT NULL,
  `tipo_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `descripcion`, `imagen`, `disable`, `categoria_id`, `nombre`, `precio`, `tipo_id`) VALUES
(1, 'producto1', 'uploads/product_1.png', 0, 1, 'Producto1', 158.00, 2),
(2, 'producto2 descripcion', 'uploads/product_2.png', 0, 3, 'producto2', 257.00, 2),
(3, 'producto4 descripcion', 'uploads/product_6.png', 0, 3, 'producto4', 240.00, 2),
(4, 'producto3 descripcion', 'uploads/product_3.png', 0, 2, 'producto3', 157.00, 1),
(5, 'producto7 descripcion', 'uploads/product_8.png', 0, 3, 'producto7', 112.00, 2),
(6, 'producto6 descripcion', 'uploads/product_7.png', 0, 2, 'producto6', 140.00, 2),
(7, 'producto9 descripcion', 'uploads/product_10.png', 0, 1, 'producto9', 124.00, 1),
(8, 'producto10 descripcion', 'uploads/product_4.png', 0, 3, 'producto10', 200.00, 1),
(9, 'producto11 descripcion', 'uploads/product_9.png', 0, 1, 'producto11', 155.00, 1),
(12, 'producto14 descripcion', 'uploads/product_5.png', 1, 1, 'producto14', 130.00, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipos_producto`
--

CREATE TABLE `tipos_producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipos_producto`
--

INSERT INTO `tipos_producto` (`id`, `descripcion`) VALUES
(1, 'regular'),
(2, 'destacado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf8 COLLATE utf8_spanish2_ci NOT NULL,
  `perfil_id` int(11) NOT NULL DEFAULT 2,
  `disable` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellido`, `username`, `password`, `email`, `perfil_id`, `disable`) VALUES
(1, 'Saul', 'Paredes', 'admin', 'YWRtaW4=', 'saul_paredes@hotmail.es', 1, 0),
(2, 'Pepe', 'Millonario', 'pepe', 'cGVwZQ==', 'email@ht.com', 2, 0),
(3, 'Usuario', 'Comun', 'user1', 'dXNlcjE=', 'comunuser@ht.com', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_cabecera`
--

CREATE TABLE `venta_cabecera` (
  `id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `fecha` datetime NOT NULL,
  `total` double(11,2) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `codigo_postal` varchar(30) NOT NULL,
  `provincia` varchar(150) NOT NULL,
  `ciudad` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_cabecera`
--

INSERT INTO `venta_cabecera` (`id`, `usuario_id`, `fecha`, `total`, `direccion`, `codigo_postal`, `provincia`, `ciudad`) VALUES
(1, 1, '2019-06-18 20:40:19', 497.00, 'Desiderio Sosa S/N', '3414', 'Corrientes', 'Itatí'),
(2, 1, '2019-06-18 20:40:52', 497.00, 'Desiderio Sosa S/N', '3414', 'Corrientes', 'Itatí'),
(3, 1, '2019-06-18 21:23:04', 240.00, 'Desiderio Sosa S/N', '3414', 'Corrientes', 'Itatí'),
(4, 1, '2019-06-18 22:36:48', 364.00, 'Desiderio Sosa S/N', '3414', 'Corrientes', 'Itatí'),
(5, 1, '2019-06-18 22:37:38', 124.00, 'Desiderio Sosa S/N', '3414', 'Corrientes', 'Itatí'),
(6, 1, '2019-06-18 22:38:40', 236.00, 'Desiderio Sosa S/N', '3414', 'Corrientes', 'Itatí'),
(7, 1, '2019-06-18 22:39:38', 140.00, 'Desiderio Sosa S/N', '3414', 'Corrientes', 'Itatí');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_detalle`
--

CREATE TABLE `venta_detalle` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `producto_id` int(11) NOT NULL,
  `subtotal` double(11,2) NOT NULL,
  `venta_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_detalle`
--

INSERT INTO `venta_detalle` (`id`, `cantidad`, `producto_id`, `subtotal`, `venta_id`) VALUES
(1, 1, 3, 240.00, 1),
(2, 1, 2, 257.00, 1),
(3, 1, 3, 240.00, 2),
(4, 1, 2, 257.00, 2),
(5, 1, 3, 240.00, 3),
(6, 1, 3, 240.00, 4),
(7, 1, 7, 124.00, 4),
(8, 1, 7, 124.00, 5),
(9, 1, 7, 124.00, 6),
(10, 1, 5, 112.00, 6),
(11, 1, 6, 140.00, 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_producto_tipo` (`tipo_id`),
  ADD KEY `FK_categoria` (`categoria_id`) USING BTREE;

--
-- Indices de la tabla `tipos_producto`
--
ALTER TABLE `tipos_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_perfil` (`perfil_id`) USING BTREE;

--
-- Indices de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_usuario_id` (`usuario_id`) USING BTREE;

--
-- Indices de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_producto_detalle` (`producto_id`),
  ADD KEY `FK_venta_detalle` (`venta_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tipos_producto`
--
ALTER TABLE `tipos_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_categoria_id` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_producto_tipo` FOREIGN KEY (`tipo_id`) REFERENCES `tipos_producto` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `FK_perfil` FOREIGN KEY (`perfil_id`) REFERENCES `perfil` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta_cabecera`
--
ALTER TABLE `venta_cabecera`
  ADD CONSTRAINT `FK_usuario_id` FOREIGN KEY (`usuario_id`) REFERENCES `usuario` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `venta_detalle`
--
ALTER TABLE `venta_detalle`
  ADD CONSTRAINT `FK_producto_detalle` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_venta_detalle` FOREIGN KEY (`venta_id`) REFERENCES `venta_cabecera` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
