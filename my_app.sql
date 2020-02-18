-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-02-2020 a las 12:23:30
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `my_app`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `restaurants`
--

CREATE TABLE `restaurants` (
  `id_restaurant` int(3) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lng` decimal(11,8) NOT NULL,
  `kind_food` set('Vegetarian','Mediterranean','Spanish','Italian','Chinese','Mexican','Japanese','Thai','Indian','French','Catalan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `restaurants`
--

INSERT INTO `restaurants` (`id_restaurant`, `name`, `address`, `lat`, `lng`, `kind_food`) VALUES
(18, 'Chaka Khan', 'Carrer Hospital, 104, Barcelona', '41.37955475', '2.16721821', 'Chinese,Japanese,Thai'),
(19, 'Raó', 'Carrer de les Sitges, 3, Barcelona', '41.38441467', '2.16967249', 'Mediterranean,Spanish'),
(20, 'Pizzeria Bar Ottantotto', 'Passatge de Utset,2, Barcelona', '41.40482220', '2.17727770', 'Mediterranean,Italian'),
(21, 'Koy Shunka', 'Carrer de Copons, 7, Barcelona', '41.38568878', '2.17534328', 'Japanese'),
(22, 'Sushifresh', 'Carrer Europa, 24, Barcelona', '41.38684845', '2.12868571', 'Chinese,Japanese'),
(23, 'Tariq', 'Baldomer Sola, 3, Badalona', '41.44504547', '2.23696113', 'Thai,Indian'),
(24, 'El Mexicano de Sant Cugat', 'Carrer Puig i Cadafalch, 42, Sant Cugat del Vallès', '41.47171021', '2.09010816', 'Mexican'),
(25, 'La Tartine', 'Plana del Hospital, 9, Sant Cugat del Vallès', '41.47378159', '2.08364296', 'French'),
(26, 'Can Massis', 'Avinguda de la Constitució, 135, Castelldefels', '41.27946472', '1.97861004', 'Vegetarian,Mediterranean,Spanish'),
(27, 'Dosa Nova', 'Carrer de Santa Tecla, 5, Sitges', '41.23517227', '1.80665183', 'Indian'),
(28, 'Bar del Mig', 'Carrer de la Plaça, 12, Premià de Mar', '41.49219131', '2.35539103', 'Mediterranean,Spanish,Catalan');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id_restaurant`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id_restaurant` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
