-- phpMyAdmin SQL Dump
-- version 5.2.1deb3
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 24-01-2025 a las 22:03:28
-- Versión del servidor: 8.0.40-0ubuntu0.24.04.1
-- Versión de PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mail_postales`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombre_cliente` varchar(20) NOT NULL,
  `apellido_cliente` varchar(30) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `codigo_postal` int NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`nombre_cliente`, `apellido_cliente`, `direccion`, `codigo_postal`, `email`, `fecha_nacimiento`) VALUES
('Adalbaro', 'Pineda Ríos', 'Atamaria, 34', 36830, 'adalbaropinedarios@dominio.com', '1990-01-24'),
('Ami', 'Leiva Rosas', 'C/ Señores Curas, 27', 12161, 'amileivarosas@dominio.com', '2000-05-15'),
('Ervino', 'Aguilera Alcantar', 'La Fontanilla, 80', 12161, 'ervinoaguileraalcantar@dominio.com', '1972-01-22'),
('Gamal', 'Mondragón Vargas', 'C/ Arana, 71', 2610, 'gamalmondragonvargas@dominio.com', '1979-01-26'),
('Leonid', 'Valles Sanabria', 'Plazuela do Porto, 10', 37891, 'leonidvallessanabria@dominio.com', '1957-04-13'),
('Maciel', 'Sevilla Rosario', 'C/ Cuesta del Álamo, 25', 29492, 'macielsevillarosario@dominio.com', '1969-12-02'),
('Mennos', 'Barajas Ocasio', 'C/ Señores Curas, 7', 12125, 'mennosbarajasocasio@dominio.com', '2001-03-23'),
('Serxio', 'Barragán Carrasco', 'C/ Proc. San Sebastián, 41', 13120, 'serxiobarragancarrasco@dominio.com', '1980-11-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
