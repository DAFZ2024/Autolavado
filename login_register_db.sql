-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-09-2024 a las 14:53:13
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
-- Base de datos: `login_register_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva_citas`
--

CREATE TABLE `reserva_citas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(70) NOT NULL,
  `gmail` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `tipo_servicio` varchar(50) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reserva_citas`
--

INSERT INTO `reserva_citas` (`id`, `nombre`, `gmail`, `telefono`, `tipo_servicio`, `lugar`, `fecha`, `hora`) VALUES
(4, 'DUBER FORERO', 'du28fo@gmail.com', '3114996440', 'Lavado basico', 'San mateo', '2024-09-09', '09:00:00'),
(5, 'yeidi forero', 'duber_forero@soy.sena.edu.co', '3124876095', 'Limpieza premiun', 'El altico', '2024-09-25', '12:00:00'),
(6, 'SENDEROS', 'duber.forero.talentotech@usa.edu.co', '42322', 'Limpieza completa', 'El altico', '2024-09-19', '13:00:00'),
(7, 'DUBER FORERO', 'du28fo@gmail.com', '3876894', 'Limpieza completa', 'El altico', '2024-09-30', '09:00:00'),
(8, 'DUBER FORERO', 'Du28fo@gmail.com', '3114996440', 'Limpieza premiun', 'San mateo', '2028-10-27', '13:00:00'),
(9, 'DUBER FORERO', 'du28fo@gmail.com', '3114996440', 'Limpieza premiun', 'San mateo', '2024-09-10', '10:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre_completo` varchar(70) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(500) NOT NULL,
  `token_reset` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre_completo`, `correo`, `contrasena`, `token_reset`) VALUES
(1, 'duber forero', 'du28fo@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', 'e1ebbe4089241bdcf236bfb663da335e'),
(2, 'camila forero', '123@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', '633f11c74432cebd9da7a7ee6960d380'),
(3, 'duber forero', 'ye@gmail.com', '3c9909afec25354d551dae21590bb26e38d53f2173b8d3dc3eee4c047e7ab1c1eb8b85103e3be7ba613b31bb5c9c36214dc9f14a42fd7a2fdb84856bca5c44c2', ''),
(4, 'santiago', 'santi@gmail.com', 'd404559f602eab6fd602ac7680dacbfaadd13630335e951f097af3900e9de176b6db28512f2e000b9d04fba5133e8b1c6e8df59db3a8ab9d60be4b97cc9e81db', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `reserva_citas`
--
ALTER TABLE `reserva_citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `reserva_citas`
--
ALTER TABLE `reserva_citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
