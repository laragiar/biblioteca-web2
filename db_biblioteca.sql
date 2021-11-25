-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2021 a las 02:42:45
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_biblioteca`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autor`
--

CREATE TABLE `autor` (
  `idAutor` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(80) NOT NULL,
  `nacionalidad` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `autor`
--

INSERT INTO `autor` (`idAutor`, `nombre`, `apellido`, `nacionalidad`) VALUES
(4, 'Lewis ', 'Carroll', 'Britanico'),
(5, 'Paulo ', 'Coelho', 'Brasileño'),
(6, 'Umberto ', 'Eco', 'Italiano'),
(7, 'Eduardo ', 'Galeano', 'Uruguayo'),
(9, 'Roberto ', 'Artl', 'Argentino'),
(10, 'Julio ', 'Cortazar', 'Argentino'),
(12, 'Alejandra ', 'Pizarnik', 'Argentina'),
(13, 'John Ronald ', 'Reuel Tolkien', 'Britanico'),
(15, 'Robert Louis ', 'Stevenson', 'Britanico'),
(17, 'Edgar Allan ', 'Poe', 'Estadounidense'),
(21, 'Roland ', 'Barthes', 'Francesa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(500) NOT NULL,
  `puntuacion` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idLibro` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `descripcion`, `puntuacion`, `idUser`, `idLibro`) VALUES
(38, 'Me gusto mucho este libro. ', 4, 56, 57),
(40, 'Releo con frecuencia tus poemas y los doy a leer a otros y les tengo amor. Tengo amor a tus poemas; querría que hicieras muchos y que tus poemas difundieran por todas partes el amor y el terror\". ', 5, 56, 65),
(41, 'Este libro lo padeci', 1, 78, 61),
(50, 'Que ganas de abrazar. Galeano el mejor', 5, 56, 57),
(51, 'Esperaba mucho mas de este libro', 2, 56, 57),
(52, 'No me gusto para nada', 1, 56, 57),
(53, 'Me encantooo. Se los recomiendo. Lectura corta, rapida y hermosa', 5, 56, 57);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `libros`
--

CREATE TABLE `libros` (
  `idLibro` int(11) NOT NULL,
  `nombre` varchar(80) NOT NULL,
  `genero` varchar(100) NOT NULL,
  `editorial` varchar(100) NOT NULL,
  `descripcion` varchar(1000) DEFAULT NULL,
  `idAutor` int(11) NOT NULL,
  `img` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `nombre`, `genero`, `editorial`, `descripcion`, `idAutor`, `img`) VALUES
(26, 'Las aventuras de Alicia en el país de las maravillas ', 'Literatura fantástica', 'Macmillan Publishers', 'Un día aburrido como tantos otros, Alicia se duerme y de este modo entra en el País de las Maravillas de la mano del Conejo Blanco. Allí conocerá a la Falsa Tortuga, la Reina de Corazones, el Gato de Chester, la Duquesa, el Sombrerero Loco o la Liebre de Marzo, entre muchos otros personajes fantásticos con los que vivirá aventuras de lo más variopintas.', 4, 'img/libro/619edee49416c.png'),
(55, 'Las Venas Abiertas de Latino América ', 'Ensayo ', 'Siglo XXI', 'Las venas abiertas de América Latina es la narración de la historia económica de Latinoamérica y su constante relación de comercio, explotación y conspiración con Estados Unidos y Europa desde las invasiones del siglo XV hasta la época del “libre comercio” del de fines del siglo XX.', 7, 'img/libro/619ede6bcffb7.jpeg'),
(57, 'El libro de los abrazos', 'Poesía épica', 'Siglo XXI', 'Refleja una síntesis perfecta del imaginario más inspirado de su autor. Celebraciones, sucesos, profecías, crónicas, sueños, memorias y desmemorias, deliciosos relatos breves en los que hasta las paredes hablan. Recoge mini relatos, diálogos, pensamientos y reflexiones del autor sobre distintos aspectos del hombre.', 7, 'img/libro/619ed9f7f1287.jpg'),
(58, 'Los siete locos', 'Ficción', 'Claridad', 'Relata la historia de Remo Erdosain, un hombre que se encuentra desesperado ante la falta de dinero y que se lo acusa de estafar a la empresa donde trabaja. No sólo queda expuesto y humillado ante sus superiores sino que además le dan un corto plazo para reponer el dinero. ', 9, 'img/libro/619ee20deff0b.jpg'),
(59, 'El alquimista', 'Novela', 'Planeta', 'El Alquimista relata las aventuras de Santiago, un joven pastor andaluz que un día emprende un viaje por las arenas del desierto en busca de un tesoro. Lo que empieza como la búsqueda de bienes mundanos se convertirá en el descubrimiento del tesoro interior.', 5, 'img/libro/619ee267575a8.jpg'),
(60, 'La cámara lucida', 'Ensayo', 'Paidos', 'En el libro desarrolla Barthes su idea de la fotografía como huella de la realidad. Desde la experiencia de la muerte de su madre traslada Barthes su estado de ánimo a la teoría de la fotografía. Por ello, fotografía y muerte son los dos temas indisolubles del libro.', 21, NULL),
(61, 'El gato negro', 'Terror', 'Octaedro', 'Espacios cerrados, amores fúnebres, mares tenebrosos, tumbas, cadáveres, sangre y esa típica opresión psicológica que procede de lo extraordinario. Un joven matrimonio lleva una vida hogareña, apacible con su gato, hasta que el joven empieza a dejarse arrastrar por la bebida. El alcohol lo vuelve irascible y en uno de sus accesos de furia acaba con la vida del animal. Un segundo gato aparece en escena, la situación familiar empeora, y los acontecimientos se precipitan hasta culminar en un horrendo desenlace.', 17, NULL),
(62, 'El nombre de la rosa', 'Novela', 'Lumen', 'Un monje franciscano investiga una serie de atroces asesinatos y trata de juntar las piezas del rompecabezas para descubrir al asesino.', 6, 'img/libro/619ee3c6b130a.jpg'),
(64, 'Los hijos de los dias', 'Novelo', 'Siglo XXI', 'Los hijos de los días reúne 366 historias, una para cada día del año. En ellas, Galeano capta instantáneas que reflejan la vida de hombres y mujeres célebres o anónimos.', 7, NULL),
(65, 'Extracción de la piedra de locura', 'Poesia', 'Siglo XXI', 'o que se representa en La extracción de la piedra de la locura es una especie de operación quirúrgica que se realizaba durante la Edad Media, y que según los testimonios escritos sobre ella consistía en la extirpación de una piedra que causaba la necedad del hombre.', 12, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `rol`) VALUES
(56, 'test@gmail.com', '$2y$10$IaH94P/5raawfs.eKSJQreOT8Y7b2WPv.u6g3oIvie.CC6ZhVxmTO', 1),
(72, 'victoriaBronzoni@gmail.com', '$2y$10$ewbWftmIjB4oqPFqBh6r/.7WDSweU0lgA4qPQQLYw8LzB4B/CdaG.', 1),
(73, 'laragiarrocco@gmail.com', '$2y$10$3W2if27cWSoxfIxPX17A5OPveJXlnm.9Cqsp4eaqZXGBoXlqyYP3i', 1),
(74, 'valentina98@gmail.com', '$2y$10$BDaVtwa/P773Cc6ipkR7ReQHqwue3Zp/CmnV4rfm0DTqoaHty7dqC', 0),
(75, 'nachin2901@gmail.com', '$2y$10$iSkXCrhVxTwXd7hGlKsAgu2oOkTD1KvrWkpZdlBljBv4l90pkQc/.', 0),
(76, 'luciahol_89@hotmail.com', '$2y$10$uyYU4y4G/3ZCrT7J/KCrW.9QggSQ0A0dz2IMubdl9ZKezfO0bcmyW', 0),
(78, 'javier@gmail.com', '$2y$10$0KwftYVImqpGvrdRxSuWo.rEcsYH1GfwgqrsxzojFzFxa6HcGFSwC', 1),
(79, 'lucas@gmail.com', '$2y$10$r0IetfN7hRfu.i6s/z8/qe72dnRamdZA5L64/fUd7tu0ML/FaLHmq', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idAutor` (`idUser`),
  ADD KEY `idLibro` (`idLibro`),
  ADD KEY `idComment` (`idUser`),
  ADD KEY `idUser` (`idUser`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `FK_AutorLibros` (`idAutor`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `comentarios_ibfk_2` FOREIGN KEY (`idLibro`) REFERENCES `libros` (`idLibro`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comentarios_ibfk_3` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `FK_AutorLibros` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
