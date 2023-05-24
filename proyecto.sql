SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Base de datos: `proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnx`
--

CREATE TABLE `alumnx` (
  `IdAlumno` int(11) NOT NULL,
  `Nombre` varchar(250) NOT NULL,
  `Apellido` varchar(250) NOT NULL,
  `Direccion` varchar(250) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Documento` varchar(250) DEFAULT NULL,
  `Nacimiento` date NOT NULL,
  `Curso` varchar(250) DEFAULT NULL,
  `Dias` set('Lunes','Martes','Miércoles','Jueves') DEFAULT NULL,
  `Horario` varchar(250) DEFAULT NULL,
  `Pago` varchar(30) DEFAULT NULL,
  `Contrato` varchar(30) NOT NULL,
  `Atendio` varchar(250) DEFAULT NULL,
  `Inscripcion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `alumnx`
--

INSERT INTO `alumnx` (`IdAlumno`, `Nombre`, `Apellido`, `Direccion`, `Telefono`, `Email`, `Documento`, `Nacimiento`, `Curso`, `Dias`, `Horario`, `Pago`, `Contrato`, `Atendio`, `Inscripcion`) VALUES
(1, 'Ixchel', 'Lopez', 'Roma', '8436837463', 'luiscard@example.com', 'Ixchel', '2003-08-26', 'Curso 3', 'Lunes,Martes,Jueves', 'Horario 2', 'Contado', '21091700', 'Martina', '2023-05-23'),
(2, 'Marco', 'Palomo', 'Palermo', '9734978933', 'Marco21@example.com', 'Marquito', '2013-06-05', 'Curso 2', 'Martes,Miércoles', 'Horario 3', 'Crédito', '17092112', 'Luis', '2023-05-19'),
(3, 'Elena', 'Bono', 'Polanco', '9385029839', 'Bolo09@example.com', 'Bono', '2006-08-01', 'Curso 1', 'Miércoles', 'Horario 3', 'NULL', '17001821', 'Irma', '2023-05-23'),
(4, 'Atl', 'Maloso', 'Abajo de un puente', '3398987345', 'Atl1God@example.com', 'Maloso', '2000-03-30', 'Curso 3', 'Martes', 'Horario 1', 'Tarjeta', '0989902107', 'Daniel', '2023-05-21'),
(5, 'Palomo', 'Mono', 'Zoológico ', '4848732733', 'Pamono@example.com', 'Monosi', '2009-11-27', 'Curso 2', 'Lunes,Miércoles', 'Horario 2', 'Moneda', '90884922109', 'Karla', '2023-05-24');


-- Indices de la tabla `alumnx`
--
ALTER TABLE `alumnx`
  ADD PRIMARY KEY (`IdAlumno`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `alumnx`
--
ALTER TABLE `alumnx`
  MODIFY `IdAlumno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;
