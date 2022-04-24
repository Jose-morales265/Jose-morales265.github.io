-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-08-2021 a las 03:47:11
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `upam2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `id_admin` int(2) NOT NULL,
  `user` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`id_admin`, `user`, `mail`, `pass`, `fecha_reg`) VALUES
(1, 'Admin 1 Localhost', 'admin@admin.com', 'ROOT4321', '2021-07-28 23:56:00'),
(2, 'Admin 2 Localhost', 'admin2@admin2.com', 'ROOT', '2021-08-08 18:58:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `id_alumno` int(5) NOT NULL,
  `nombre1` varchar(150) NOT NULL,
  `nombre2` varchar(150) NOT NULL,
  `apaterno` varchar(150) NOT NULL,
  `amaterno` varchar(150) NOT NULL,
  `tel_cel` varchar(150) NOT NULL,
  `tel_fijo` varchar(150) NOT NULL,
  `id_est_tra` int(5) NOT NULL,
  `razon` varchar(255) NOT NULL,
  `correo` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `id_carrera` int(5) NOT NULL,
  `id_est_ti` int(5) NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`id_alumno`, `nombre1`, `nombre2`, `apaterno`, `amaterno`, `tel_cel`, `tel_fijo`, `id_est_tra`, `razon`, `correo`, `pass`, `id_carrera`, `id_est_ti`, `fecha_reg`) VALUES
(2, 'Z', 'B', 'C', 'SD', '1234567890', '12345678', 2, 'ABCABCABC', 'a.escribanov@gmail.com', '123ABC', 3, 3, '2021-08-05 03:05:57'),
(17, '', '', '', '', '', '', 2, '', '', '', 4, 3, '2021-08-01 21:22:23'),
(18, '', '', '', '', '', '', 2, '', '', '', 4, 3, '2021-08-01 21:22:41'),
(19, '', '', '', '', '', '', 2, '', '', '', 4, 2, '2021-08-01 21:22:41'),
(22, 'asdasdsad', 'asdasd', 'asdasdas', 'asdasdsad', '123123123', '123123123', 1, 'asdasdasd', 'aasdasd@saasf.com', '', 2, 1, '2021-08-01 21:54:52'),
(23, 'asdasdasd', 'asdasdas', 'asdasdas', 'asdasdsad', 'eq2qeqweq1231213', '123123123', 2, 'dw3da3asdasd', 'aasdasd@saasf.com', '', 2, 2, '2021-08-05 03:03:46'),
(25, '', '', '', '', '', '', 1, '', '', '', 2, 2, '2021-08-01 21:38:20'),
(30, 'asdad', 'asdasda', 'sdasdasd', 'asdasdasd', '1231231231', '12312312', 2, 'asdasdasdsa', 'csadasdasd@weasdad.com', 'asdasdad', 2, 1, '2021-08-05 00:50:52'),
(31, 'asdasdad', 'asdasdas', 'dasdasdas', 'dasdasd', '123123123', '12123123', 2, 'qeeqweqweasdd', 'csadasdasd@weasdad.com', 'asdadadq312', 2, 1, '2021-08-05 00:51:33'),
(32, 'dasdqdw', 'dqwdwd', 'qwdqwdqw', 'dqwdqwdqwd', '123123', '12313', 2, 'qwdqwd', 'csadasdasd@weasdad.com', '231d1e2e1', 2, 1, '2021-08-05 00:53:05'),
(33, 'adadsad', 'asdasdas', 'dasdasd', 'asdasdasd', '123123123', '12121231', 2, 'adadq22d12', 'a.escribanov@gmail.com', 'asdadasdsa', 1, 1, '2021-08-05 02:30:59'),
(34, 'asdasdq', 'wdwqdqw', 'qwdqdqdqw', 'qwdqdqwdsad', '1231231231', '2111232', 1, 'asdad2', 'a.escribanov@gmail.com', 'asd2edqwd2d', 2, 3, '2021-08-05 00:55:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carreras`
--

CREATE TABLE `carreras` (
  `id_carrera` int(5) NOT NULL,
  `carrera` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carreras`
--

INSERT INTO `carreras` (`id_carrera`, `carrera`) VALUES
(1, 'software'),
(2, 'energia'),
(3, 'terapia fisica'),
(4, 'automotriz'),
(5, 'manufactura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_ti`
--

CREATE TABLE `est_ti` (
  `id_est_ti` int(5) NOT NULL,
  `estado_ti` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `est_ti`
--

INSERT INTO `est_ti` (`id_est_ti`, `estado_ti`) VALUES
(1, 'titulado'),
(2, 'no titulado'),
(3, 'en proceso');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `est_tra`
--

CREATE TABLE `est_tra` (
  `id_est_tra` int(5) NOT NULL,
  `estado_tra` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `est_tra`
--

INSERT INTO `est_tra` (`id_est_tra`, `estado_tra`) VALUES
(1, 'trabajando'),
(2, 'no trabajando');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`id_alumno`),
  ADD KEY `id_carrera` (`id_carrera`),
  ADD KEY `id_est_ti` (`id_est_ti`),
  ADD KEY `id_est_tra` (`id_est_tra`);

--
-- Indices de la tabla `carreras`
--
ALTER TABLE `carreras`
  ADD PRIMARY KEY (`id_carrera`);

--
-- Indices de la tabla `est_ti`
--
ALTER TABLE `est_ti`
  ADD PRIMARY KEY (`id_est_ti`);

--
-- Indices de la tabla `est_tra`
--
ALTER TABLE `est_tra`
  ADD PRIMARY KEY (`id_est_tra`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  MODIFY `id_alumno` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `carreras`
--
ALTER TABLE `carreras`
  MODIFY `id_carrera` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `est_ti`
--
ALTER TABLE `est_ti`
  MODIFY `id_est_ti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `est_tra`
--
ALTER TABLE `est_tra`
  MODIFY `id_est_tra` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD CONSTRAINT `alumnos_ibfk_1` FOREIGN KEY (`id_carrera`) REFERENCES `carreras` (`id_carrera`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_2` FOREIGN KEY (`id_est_ti`) REFERENCES `est_ti` (`id_est_ti`) ON UPDATE CASCADE,
  ADD CONSTRAINT `alumnos_ibfk_3` FOREIGN KEY (`id_est_tra`) REFERENCES `est_tra` (`id_est_tra`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
