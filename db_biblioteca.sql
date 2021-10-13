-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-09-2021 a las 15:10:57
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.10

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
(1, 'Gabriel ', 'Garcia Marquez', 'Colombiano'),
(2, 'Haruki ', 'Murakami', 'Japones'),
(3, 'Miguel', 'de Cervantes Saavedra', 'Español'),
(4, 'Lewis', 'Carroll', 'Britanico'),
(5, 'Paulo ', 'Coelho', 'Brasileño'),
(6, 'Umberto', 'Eco', 'Italiano'),
(7, 'Eduardo', 'Galeano', 'Uruguayo'),
(8, 'Jose Luis', 'Borges', 'Argentino'),
(9, 'Roberto', 'Artl', 'Argentino'),
(10, 'Julio', 'Cortazar', 'Argentino'),
(11, 'Samanta', 'Schweblin', 'Argentina'),
(12, 'Alejandra', 'Pizarnik', 'Argentina'),
(13, 'John Ronald ', 'Reuel Tolkien', 'Britanico'),
(14, 'Charles', 'Dickens', NULL),
(15, 'Robert Louis ', 'Stevenson', 'Britanico'),
(16, 'Pablo', 'Neruda', 'Chileno'),
(17, 'Edgar Allan', 'Poe', 'Estadounidense'),
(18, 'Ray', 'Bradbury', 'Estadounidense');

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
  `idAutor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `libros`
--

INSERT INTO `libros` (`idLibro`, `nombre`, `genero`, `editorial`, `descripcion`, `idAutor`) VALUES
(1, 'Cien años de soledad', 'Realismo mágico', 'DeBolsillo', 'Muchos años después, frente al pelotón de fusilamiento, el coronel Aureliano Buendía había de recordar aquella tarde remota en que su padre lo llevó a conocer el hielo. Con estas palabras empieza una novela legendaria, una de las aventuras literarias más fascinantes del siglo XX. La familia Buendía-Iguarán, con sus milagros, fantasías, obsesiones, tragedias, incestos, adulterios, rebeldías, descubrimientos y condenas, representa al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero', 1),
(2, 'Tokio blues', 'Novela', 'Tusquets', 'Una historia de amor triangular que se convierte en el relato de una educación sentimental pero también de las pérdidas que implica toda maduración.', 2),
(3, 'Las aventuras de Alicia en el país de las maravillas', 'Literatura fantastica', 'Macmillan Publishers', 'Un día aburrido como tantos otros, Alicia se duerme y de este modo entra en el País de las Maravillas de la mano del Conejo Blanco. Allí conocerá a la Falsa Tortuga, la Reina de Corazones, el Gato de Chester, la Duquesa, el Sombrerero Loco o la Liebre de Marzo, entre muchos otros personajes fantásticos con los que vivirá aventuras de lo más variopintas.', 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`idAutor`);

--
-- Indices de la tabla `libros`
--
ALTER TABLE `libros`
  ADD PRIMARY KEY (`idLibro`),
  ADD KEY `FK_AutorLibros` (`idAutor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `autor`
--
ALTER TABLE `autor`
  MODIFY `idAutor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `libros`
--
ALTER TABLE `libros`
  MODIFY `idLibro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `libros`
--
ALTER TABLE `libros`
  ADD CONSTRAINT `FK_AutorLibros` FOREIGN KEY (`idAutor`) REFERENCES `autor` (`idAutor`);
COMMIT;


CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
