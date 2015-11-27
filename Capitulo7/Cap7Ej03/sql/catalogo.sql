-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-11-2015 a las 09:44:43
-- Versión del servidor: 5.5.46-0ubuntu0.14.04.2
-- Versión de PHP: 5.5.9-1ubuntu4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catalogo`
--

CREATE TABLE IF NOT EXISTS `catalogo` (
  `codigo` varchar(20) COLLATE utf8_bin NOT NULL,
  `nombre` varchar(100) COLLATE utf8_bin NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_bin NOT NULL,
  `imagen` varchar(150) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `catalogo`
--

INSERT INTO `catalogo` (`codigo`, `nombre`, `precio`, `descripcion`, `imagen`) VALUES
('100305001', 'Camiseta Ellesse azul', 20.00, 'Clásica camiseta Prado de Ellesse. La camiseta presenta un diseño de cuello redondo y está fabricada en algodón 100%. Está rematada con el logo de Ellesse estampada mediante un molde sublimado. ', 'images/ellesse_t-shirt_blue.jpg'),
('100306001', 'Camiseta Fred Perry caoba', 25.00, 'Camiseta clásica de cuello redondo de Fred Perry. Presenta un cuello redondo ligeramente acanalado y con la corona de laurel bordada en el pecho. Fabricado a partir de algodón fino 100%.', 'images/fredperry_t-shirt_maghogany.jpg'),
('100306002', 'Camiseta Fred Perry rayas', 23.00, 'La camiseta "Breton striped" de Fred Perry. Rayas horizontales a lo largo de toda la camiseta con la corona de laurel marcada en el pecho. Fabricada a partir de algodón 100%.', 'images/fredperry_t-shirt_stripesbw.jpg'),
('100307001', 'Camiseta Henri Lloyd radar', 27.00, 'Camiseta Henri Lloyd Radar Tee. Diseño de manga corta y cuello redondo. Lleva bordado el logo en el pecho y nervaduras en el cuello. Fabricada en algodón 100%.', 'images/henrilloyd_t-shirt_radar.jpg'),
('100305002', 'Camiseta Ellesse Bergamo', 25.00, 'Camiseta Bergamo de la temporada 2015 Ellesse. Impresión sublimada a gran escala en la parte frontal. Diseño de cuello redondo, fabricada 100% en algodón', 'images/ellesse_t-shirt_bergamo.jpg'),
('100305003', 'Camiseta Ellesse Dante', 22.00, 'Camiseta Dante de Ellesse de manga corta y un cuello acanalado. Impresiones de gran tamaño en el frontal. Logotipo de la marca del cosido en el brazo y detalle del logo en el costado finalizan esta elegante camiseta. Fabricada 100% en algodón', 'images/ellesse_t-shirt_dante.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
