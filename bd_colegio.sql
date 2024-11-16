-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-11-2024 a las 19:36:25
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_colegio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Edad` int(11) DEFAULT NULL,
  `Carrera` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`ID`, `Nombre`, `Apellido`, `Edad`, `Carrera`) VALUES
(13, 'Juan', 'Pérez', 20, 'Ingeniería'),
(22, 'María', 'González', 22, 'Medicina'),
(46, 'Ana', 'Sánchez', 21, 'Biología'),
(55, 'Carlos', 'Ramírez', 23, 'Física'),
(367, 'Luis', 'Martínez', 21, 'Arquitectura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colegiaturas`
--

CREATE TABLE `colegiaturas` (
  `ID` int(11) NOT NULL,
  `AlumnoID` int(11) DEFAULT NULL,
  `Monto` decimal(10,2) DEFAULT NULL,
  `FechaPago` date DEFAULT NULL,
  `EstadoPago` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colegiaturas`
--

INSERT INTO `colegiaturas` (`ID`, `AlumnoID`, `Monto`, `FechaPago`, `EstadoPago`) VALUES
(1, 12, 2000.00, '2024-01-15', 'Pagado'),
(2, 52, 2500.00, '2024-01-10', 'Pagado'),
(3, 83, 2200.00, '2024-01-12', 'Pendiente'),
(4, 64, 1800.00, '2024-01-14', 'Pagado'),
(5, 25, 2400.00, '2024-01-16', 'Pendiente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kardex`
--

CREATE TABLE `kardex` (
  `ID` int(11) NOT NULL,
  `AlumnoID` int(11) DEFAULT NULL,
  `Materia` varchar(50) DEFAULT NULL,
  `Calificacion` decimal(3,2) DEFAULT NULL,
  `Creditos` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `kardex`
--

INSERT INTO `kardex` (`ID`, `AlumnoID`, `Materia`, `Calificacion`, `Creditos`) VALUES
(1, 1, 'Matemáticas', 9.99, 4),
(2, 1, 'Física', 9.99, 4),
(3, 2, 'Química', 9.99, 4),
(4, 3, 'Historia', 9.99, 3),
(5, 4, 'Biología', 9.99, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `maestros`
--

CREATE TABLE `maestros` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL,
  `Apellido` varchar(50) DEFAULT NULL,
  `Materia` varchar(50) DEFAULT NULL,
  `Años_Experiencia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `maestros`
--

INSERT INTO `maestros` (`ID`, `Nombre`, `Apellido`, `Materia`, `Años_Experiencia`) VALUES
(1, 'Pedro', 'López', 'Matemáticas', 10),
(2, 'Laura', 'Torres', 'Química', 8),
(3, 'Jorge', 'Fernández', 'Historia', 12),
(4, 'Sofia', 'Hernández', 'Biología', 5),
(5, 'Andrés', 'García', 'Física', 15);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `colegiaturas`
--
ALTER TABLE `colegiaturas`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `kardex`
--
ALTER TABLE `kardex`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `maestros`
--
ALTER TABLE `maestros`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
