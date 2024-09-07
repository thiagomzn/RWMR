-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2024 a las 12:06:10
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
-- Base de datos: `rwmr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asignatura`
--

CREATE TABLE `asignatura` (
  `id` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` enum('Áulica','Taller') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `asignatura`
--

INSERT INTO `asignatura` (`id`, `id_curso`, `nombre`, `tipo`) VALUES
(1, 1, 'Matemática', 'Áulica'),
(2, 1, 'Lengua', 'Áulica'),
(3, 1, 'Inglés', 'Áulica'),
(4, 1, 'Geografía', 'Áulica'),
(5, 1, 'Historia', 'Áulica'),
(6, 1, 'Biología', 'Áulica'),
(7, 1, 'Dibujo Técnico', 'Áulica'),
(8, 1, 'Formación Ética y Ciudadana', 'Áulica'),
(9, 1, 'Educación Física', 'Áulica'),
(10, 1, 'Tecnología', 'Áulica'),
(11, 2, 'Matemática', 'Áulica'),
(12, 2, 'Lengua', 'Áulica'),
(13, 2, 'Inglés', 'Áulica'),
(14, 2, 'Geografía', 'Áulica'),
(15, 2, 'Historia', 'Áulica'),
(16, 2, 'Biología', 'Áulica'),
(17, 2, 'Dibujo Técnico', 'Áulica'),
(18, 2, 'Formación Ética y Ciudadana', 'Áulica'),
(19, 2, 'Física', 'Áulica'),
(20, 1, 'Ajuste mecánico', 'Taller'),
(21, 1, 'Electricidad I', 'Taller'),
(22, 1, 'Carpintería I', 'Taller'),
(23, 1, 'Hojalatería I', 'Taller'),
(24, 1, 'Informática I', 'Taller'),
(25, 1, 'Construcciones civiles', 'Taller'),
(26, 1, 'T.D.I', 'Taller'),
(27, 2, 'Ajuste Mecánico II', 'Taller'),
(28, 2, 'Electricidad II', 'Taller'),
(29, 2, 'Carpintería II', 'Taller'),
(30, 2, 'Herrería y soldadura', 'Taller'),
(31, 2, 'Informática II', 'Taller'),
(32, 2, 'Automotor', 'Taller'),
(33, 3, 'Lengua', 'Áulica'),
(34, 3, 'Inglés', 'Áulica'),
(35, 3, 'Geografía', 'Áulica'),
(36, 3, 'Historia', 'Áulica'),
(37, 3, 'Formación Ética y Ciudadana', 'Áulica'),
(38, 3, 'Química', 'Áulica'),
(39, 3, 'Matemática', 'Áulica'),
(40, 3, 'Física', 'Áulica'),
(41, 3, 'Dibujo Técnico', 'Áulica'),
(42, 3, 'Educación Física', 'Áulica'),
(43, 3, 'Instalaciones Eléctricas', 'Taller'),
(44, 3, 'Máquinas y Herramientas', 'Taller'),
(45, 3, 'Modelo y Fundición', 'Taller'),
(46, 3, 'Informática III', 'Taller'),
(47, 3, 'T.D.I. Soldadura', 'Taller'),
(48, 4, 'Lengua y literatura', 'Áulica'),
(49, 4, 'Inglés', 'Áulica'),
(50, 4, 'Organización y Gestión', 'Áulica'),
(51, 4, 'Procesos Productivos', 'Áulica'),
(52, 4, 'Análisis Matemático', 'Áulica'),
(53, 4, 'Ética y Deontología', 'Áulica'),
(54, 4, 'Química', 'Áulica'),
(55, 4, 'CAD', 'Áulica'),
(56, 4, 'Mecánica Técnica', 'Áulica'),
(57, 4, 'Estática y Resistencia de Materiales', 'Áulica'),
(58, 4, 'Educación Física', 'Áulica'),
(59, 4, 'Electromecánica', 'Taller'),
(60, 4, 'Materiales y Ensayos', 'Taller'),
(61, 4, 'Máquinas y Herramientas II', 'Taller'),
(62, 4, 'Mediciones Eléctricas', 'Taller'),
(63, 4, 'T.D.I Soldadura II', 'Taller'),
(64, 5, 'Lengua y Literatura', 'Áulica'),
(65, 5, 'Inglés Técnico', 'Áulica'),
(66, 5, 'Matemática, Estadística y Probabilidad', 'Áulica'),
(67, 5, 'Marco Jurídico de los Procesos Productivos', 'Áulica'),
(68, 5, 'Psicología Laboral', 'Áulica'),
(69, 5, 'Termodinámica', 'Áulica'),
(70, 5, 'Mecánica de los Fluidos', 'Áulica'),
(71, 5, 'Mecanismos y Elementos de Máquinas', 'Áulica'),
(72, 5, 'Electrónica', 'Áulica'),
(73, 5, 'Educación Física', 'Áulica'),
(74, 5, 'Electrotecnia', 'Áulica'),
(75, 5, 'Electro Fluimática', 'Taller'),
(76, 5, 'Instalaciones Eléctricas II', 'Taller'),
(77, 5, 'Laboratorio de Máquinas Eléctricas', 'Taller'),
(78, 5, 'T.D.I Introducción al CNC y CAD-CAM', 'Taller'),
(79, 6, 'Inglés Técnico', 'Áulica'),
(80, 6, 'Educación Física', 'Áulica'),
(81, 6, 'Economía, Gestión y Desarrollo de emprendimientos', 'Áulica'),
(82, 6, 'Proyecto Electromecánico', 'Áulica'),
(83, 6, 'Organización Industrial', 'Áulica'),
(84, 6, 'Higiene y Seguridad', 'Áulica'),
(85, 6, 'Sistemas de control', 'Áulica'),
(86, 6, 'Mantenimiento Industrial', 'Áulica'),
(87, 6, 'Máquinas Térmicas', 'Áulica'),
(88, 6, 'CNC CAD-CAM I', 'Taller'),
(89, 6, 'Mantenimiento y Montaje Industrial', 'Taller'),
(90, 6, 'Práctica Profesionalizantes', 'Taller'),
(91, 9, 'Lengua', 'Áulica'),
(92, 9, 'Lengua Extranjera (Inglés)', 'Áulica'),
(93, 9, 'Geografía', 'Áulica'),
(94, 9, 'Historia', 'Áulica'),
(95, 9, 'Formación Ética y Ciudadana', 'Áulica'),
(96, 9, 'Educación Física', 'Áulica'),
(97, 9, 'Matemática', 'Áulica'),
(98, 9, 'Física', 'Áulica'),
(99, 9, 'Electrónica', 'Áulica'),
(100, 9, 'Laboratorio de Hardware I', 'Taller'),
(101, 9, 'Laboratorio de Software I', 'Taller'),
(102, 9, 'Dibujo Asistido - CAD', 'Taller'),
(103, 9, 'Lógica y programación', 'Taller'),
(104, 9, 'Laboratorio de Sistemas Operativos I', 'Taller'),
(105, 10, 'Lengua y Literatura', 'Áulica'),
(106, 10, 'Lengua Extranjera Técnica', 'Áulica'),
(107, 10, 'Ética y Deontología', 'Áulica'),
(108, 10, 'Análisis Matemático', 'Áulica'),
(109, 10, 'Química', 'Áulica'),
(110, 10, 'Técnicas Digigtales', 'Áulica'),
(111, 10, 'Teoría y Gestión de las Organizaciones', 'Áulica'),
(112, 10, 'Laboratorio de Hardware II', 'Taller'),
(113, 10, 'Laboratorio de Software II', 'Taller'),
(114, 10, 'Redes I', 'Taller'),
(115, 10, 'Bases de Datos I', 'Taller'),
(116, 10, 'Laboratorio Sistemas Operativos II', 'Taller'),
(117, 10, 'Programación', 'Taller'),
(118, 11, 'Lengua y Literatura', 'Áulica'),
(119, 11, 'Lengua Extranjera Técnica', 'Áulica'),
(120, 11, 'Psicolog{ia Laboral', 'Áulica'),
(121, 11, 'Educación Física', 'Áulica'),
(122, 11, 'Matemática', 'Áulica'),
(123, 11, 'Técnicas Digitales II', 'Áulica'),
(124, 11, 'Economía', 'Áulica'),
(125, 11, 'Sistemas de Información Contable', 'Áulica'),
(126, 11, 'Laboratorio de Software II', 'Taller'),
(127, 11, 'Redes II', 'Taller'),
(128, 11, 'Bases de Datos II', 'Taller'),
(129, 11, 'Programación', 'Taller'),
(130, 11, 'Laboratorio de Hardware II', 'Taller'),
(131, 11, 'Seguridad Informática', 'Taller'),
(132, 11, 'Prácticas Profesioinalizantes', 'Taller'),
(133, 12, 'Inglés Técnico', 'Áulica'),
(134, 12, 'Probabilidad y Estadística', 'Áulica'),
(135, 12, 'Marco Jurídico', 'Áulica'),
(136, 12, 'Diseño Multimedia', 'Áulica'),
(137, 12, 'Micro Emprendimiento', 'Áulica'),
(138, 12, 'Proyecto', 'Áulica'),
(139, 12, 'Educación Física', 'Áulica'),
(140, 12, 'Laboratorio de Mantenido de Hardware', 'Áulica'),
(141, 12, 'Programación Web', 'Taller'),
(142, 12, 'Sistemas Operativos de Redes', 'Taller'),
(143, 12, 'Aplicaciones de Redes', 'Taller'),
(144, 12, 'Prácticas Profesionalizantes', 'Taller'),
(145, 12, 'Laboratorio de Mantenimiento de Hardware', 'Taller'),
(146, 12, 'Redes III', 'Taller'),
(147, 15, 'Lengua', 'Áulica'),
(148, 15, 'Inglés', 'Áulica'),
(149, 15, 'Geografía', 'Áulica'),
(150, 15, 'Historia', 'Áulica'),
(151, 15, 'Formación Ética y Ciudadana', 'Áulica'),
(152, 15, 'Educación Física', 'Áulica'),
(153, 15, 'Matemática', 'Áulica'),
(154, 15, 'Física', 'Áulica'),
(155, 15, 'Química I', 'Áulica'),
(156, 15, 'Representación del Automotor', 'Áulica'),
(157, 15, 'Tecnología del Automotor', 'Áulica'),
(158, 15, 'Electricidad del Automotor', 'Taller'),
(159, 15, 'Componentes e Instalaciones', 'Taller'),
(160, 15, 'Sistema de Alimentación', 'Taller'),
(161, 15, 'Admimisión y Escape', 'Taller'),
(162, 15, 'T.D.I Informática I', 'Taller'),
(163, 16, 'Lengua y Literatura', 'Áulica'),
(164, 16, 'Inglés', 'Áulica'),
(165, 16, 'Ciudadanía y Trabajo', 'Áulica'),
(166, 16, 'Educación Física', 'Áulica'),
(167, 16, 'Análisis Matemático', 'Áulica'),
(168, 16, 'Química II', 'Áulica'),
(169, 16, 'Estática y Resistencia de los Materiales', 'Áulica'),
(170, 16, 'Fundamentos Electricidad y Electrónica', 'Áulica'),
(171, 16, 'Representación Gráfica', 'Áulica'),
(172, 16, 'Hidráulica y Neumática', 'Áulica'),
(173, 16, 'Motores I', 'Áulica'),
(174, 16, 'Oficina Técnica', 'Taller'),
(175, 16, 'Verificación y Mantenimiento de motores I', 'Taller'),
(176, 16, 'Verificación y Mantenimiento de sistema', 'Taller'),
(177, 16, 'Transmisión I', 'Taller'),
(178, 16, 'Verificación Eléctronica I', 'Taller'),
(179, 17, 'Lengua y Literatura', 'Áulica'),
(180, 17, 'Inglés', 'Áulica'),
(181, 17, 'Psicología Laboral', 'Áulica'),
(182, 17, 'Análisis Matemático', 'Áulica'),
(183, 17, 'Marco Jurídico', 'Áulica'),
(184, 17, 'Mat. y procesos de Meca', 'Áulica'),
(185, 17, 'Educación Vial', 'Áulica'),
(186, 17, 'Diseño Asistido por computadora', 'Áulica'),
(187, 17, 'Estructura del vehículo', 'Áulica'),
(188, 17, 'Motores II', 'Áulica'),
(189, 17, 'Instalaciones Eléctricas y Electrónicas', 'Áulica'),
(190, 17, 'Educación Física', 'Áulica'),
(191, 17, 'Verificación y Mantenimiento de motores I', 'Taller'),
(192, 17, 'Verificación y mantenimiento susp. y frenos', 'Taller'),
(193, 17, 'Verificación y Mantenimiento instalaciones eléctri', 'Taller'),
(194, 17, 'Prácticas profesionalizantes', 'Taller'),
(195, 18, 'Inglés', 'Áulica'),
(196, 18, 'Ética y deontología', 'Áulica'),
(197, 18, 'Seguridad e higiene Laboral', 'Áulica'),
(198, 18, 'Peritaje y siniestros automot.', 'Áulica'),
(199, 18, 'Industria Autom. y Protección', 'Áulica'),
(200, 18, 'Enoc. y comercialización', 'Áulica'),
(201, 18, 'Sistemas de inyección', 'Áulica'),
(202, 18, 'Proyecto Automotores', 'Áulica'),
(203, 18, 'Organización y Gestión', 'Áulica'),
(204, 18, 'Ensayo de comp. y Sist.', 'Áulica'),
(205, 18, 'Educación Física', 'Áulica'),
(206, 18, 'Verificación y Mantenimiento de Motores GNC y GLP', 'Taller'),
(207, 18, 'Verificación y Mantenimiento sust. de inyección', 'Taller'),
(208, 18, 'Verificación y Mantenimiento instalaciones eléctri', 'Taller'),
(209, 18, 'Prácticas profesionalizantes', 'Taller');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `id` int(11) NOT NULL,
  `year` enum('1er Año','2do Año','3er Año','4to Año','5to Año','6to Año') NOT NULL,
  `division` enum('A','B','C','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `curso`
--

INSERT INTO `curso` (`id`, `year`, `division`) VALUES
(1, '1er Año', 'A'),
(2, '2do Año', 'A'),
(3, '3er Año', 'A'),
(4, '4to Año', 'A'),
(5, '5to Año', 'A'),
(6, '6to Año', 'A'),
(7, '1er Año', 'B'),
(8, '2do Año', 'B'),
(9, '3er Año', 'B'),
(10, '4to Año', 'B'),
(11, '5to Año', 'B'),
(12, '6to Año', 'B'),
(13, '1er Año', 'C'),
(14, '2do Año', 'C'),
(15, '3er Año', 'C'),
(16, '4to Año', 'C'),
(17, '5to Año', 'C'),
(18, '6to Año', 'C');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id` int(11) NOT NULL,
  `dni` varchar(11) NOT NULL,
  `pwd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id`, `dni`, `pwd`) VALUES
(18, '46599963', 'kndlak'),
(19, '2342342342', 'kndlak'),
(20, '46599963', 'milanesa200');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `examen`
--

CREATE TABLE `examen` (
  `id` int(11) NOT NULL,
  `id_asignatura` int(11) NOT NULL,
  `id_estudiante` int(11) NOT NULL,
  `id_profesor1` int(11) NOT NULL,
  `id_profesor2` int(11) NOT NULL,
  `id_profesor3` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `dni` int(11) NOT NULL,
  `pwd` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `puesto` enum('Estudiante','Docente') NOT NULL,
  `dni` int(11) NOT NULL,
  `pwd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `puesto`, `dni`, `pwd`) VALUES
(21, 'Docente', 46599963, 'milanesa2005'),
(22, 'Estudiante', 46599963, 'milanesa2005');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `asignatura_idcurso` (`id_curso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `examen`
--
ALTER TABLE `examen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asignatura`
--
ALTER TABLE `asignatura`
  ADD CONSTRAINT `asignatura_idcurso` FOREIGN KEY (`id_curso`) REFERENCES `curso` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
