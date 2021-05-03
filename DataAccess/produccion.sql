-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-05-2021 a las 07:16:30
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `produccion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` date NOT NULL,
  `usuario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `admin`
--

INSERT INTO `admin` (`id_admin`, `status`, `nombre`, `apellido`, `fecha`, `usuario`, `pass`, `email`) VALUES
(1, 1, 'Jhorky', 'Escalante', '2020-11-15', 'jhorkyadmi', '123456', 'jhorky.admin@gmail.c'),
(3, 1, 'Sebastian', 'Apellido', '2020-11-17', 'seba1799', '12345678', 'seba1799@gmail.com'),
(4, 1, 'Roberto', 'Rocco', '2021-05-01', 'roccoadmin', '123456', 'roberto.rocco@davinci.edu.ar');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clasificacion`
--

CREATE TABLE `clasificacion` (
  `id_clasificacion` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `clasificacion`
--

INSERT INTO `clasificacion` (`id_clasificacion`, `status`, `nombre`, `descripcion`) VALUES
(1, 1, 'ATP', 'Todas las edades pueden ver. No hay desnudez ni sangre y/o alcohol. El lenguaje es cortés sin el uso de insultos o con ofensas muy suaves que caen en lo gracioso.'),
(2, 1, '+13', 'Desnudez parcial, sangre leve, muertes poco violentas, lenguaje regularizado e imágenes intensas suelen aparecer en las películas de esta clasificación. Pueden ingresar menores si van acompañados por un familiar o tutor.'),
(3, 1, '+16', 'Desnudez fuerte y explícita pero no pornográfica, escenas fuertes, alcohol y drogas, insultos, imágenes muy intensas, muertes muy violentas y sangre en mucha cantidad. Se recomienda discreción para los menores de 16 años.'),
(4, 1, '+18', 'Los menores de edad no están destinados a ver la película. Desnudez fuerte pornografía, violencia extrema, muertes extremadamente violentas, lenguaje ofensivo, derramamiento de sangre extremo, imágenes intensas frecuentes, escenas intensamente fuertes, insultos intensos y alcohol, drogas y tabaco.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `id_comentario` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `rating` int(1) NOT NULL,
  `titulo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `comentario` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `id_pelicula` int(2) NOT NULL,
  `id_usuario` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `status`, `fecha`, `rating`, `titulo`, `comentario`, `id_pelicula`, `id_usuario`) VALUES
(19, 1, '2021-05-01 20:12:42', 4, 'Muy buena', 'Una predecible \"dramedia\" que se eleva por sus enérgicos números de baile\r\n', 38, 4),
(20, 1, '2021-05-01 20:12:42', 2, 'Muy mala', 'Se ambienta en un barco que nos deja a nivel emocional, intelectual y estético literalmente a la deriva. Si al menos fuese graciosa...\r\n', 4, 4),
(21, 1, '2021-05-01 20:12:42', 3, 'Safable', 'Película tailandesa de zombies que no es mala del todo pese que el inicio me dio risa sobretodo por la caracterización de los zombies que es algo mala pero bueno esto fue mejorando después solo que aq', 45, 4),
(22, 1, '2021-05-01 20:12:42', 5, 'Espectacular', 'Muy buena película, excelente por donde se la mire, pareciera que Phoenix nació para este papel.', 56, 4),
(23, 1, '2021-05-01 20:12:42', 1, 'Horrible', 'Horrible, aburrida, la primera fue algo entretenida, pero esta directamente fue una perdida de tiempo.', 44, 4),
(24, 1, '2021-05-01 20:12:42', 5, 'Espectacular', 'Exquisita. Me ha encantado , no es una película para ver las miserias de una de las estrellas del pop más grandes, si no la historia de una de las mejores bandas de Rock de todos los tiempos. La recom', 48, 4),
(25, 1, '2021-05-01 20:12:42', 2, 'Muy mala', 'Ni fu, ni fa! La peli más floja de la saga. Una verdadera lástima echar a perder una precuela con este semejante bodrio, totalmente innecesario. La historia es mala de cojones y, por si fuera poco, se', 59, 4),
(26, 1, '2021-05-01 20:12:42', 4, 'Muy buena', 'Me gusta mucho la trama y que es complicada de ver a la primera. Me gusta como te va intercalando información de distintos momentos en el tiempo y recién al final, gracias al clímax del la peli, podes', 7, 4),
(27, 1, '2021-05-01 20:12:42', 2, 'Muy mala', 'Me entretuvo hasta la mitad, después ya por la intriga la termine de ver, pero me decepciono.', 49, 4),
(28, 1, '2021-05-01 20:12:42', 4, 'Muy buena', 'Muy entretenida, no podes parar de verla hasta el final. Recomendable.', 58, 4),
(29, 1, '2021-05-01 20:12:42', 1, 'Horrible', 'Decepcionante, tenia muchas espectativas de esta peli, es una perdida de tiempo.', 61, 4),
(30, 1, '2021-05-01 20:12:42', 5, 'Espectacular', 'Me encanto esta pelicula, no pude despegar mis ojos de la pantalla.', 27, 4),
(31, 1, '2021-05-01 20:12:42', 3, 'Safable', 'Tiene muchos agujeros de guion e incoherencias, pero aun asi me entretuvo mucho.', 9, 4),
(33, 1, '2021-05-01 20:12:43', 4, 'Muy buena', 'Espectacular actuacion! una historia muy entretenida.', 39, 4),
(34, 1, '2021-05-01 20:12:43', 2, 'Muy mala', 'Para quien le guste este genero de peliculas esta bien, pero me parecio un bodrio...', 43, 4),
(35, 1, '2021-05-01 20:12:43', 4, 'Muy buena', 'Espero que haya secuela y que este a la altura de esta', 57, 4),
(36, 1, '2021-05-01 20:12:43', 1, 'Horrible', 'Lo unico que agradezco de la pelicula, es no haber pagado una entrada de cine por verla', 25, 4),
(37, 1, '2021-05-01 20:12:43', 5, 'Espectacular', 'Imposible aburrise, te mantiene atrapado durante toda la pelicula', 42, 4),
(38, 1, '2021-05-01 20:12:43', 1, 'Horrible', 'Sin comentarios, ojala podria ponerle un puntaje menor', 52, 4),
(39, 1, '2021-05-01 20:12:43', 4, 'Muy buena', 'Me encanto la actuación de Ewan McGregor y como toda película basada en un libro de Stephen King, me encanto!', 5, 5),
(40, 1, '2021-05-01 20:12:43', 5, 'Espectacular', 'Como me morí de risa con esta peli, mucho humor negro!!', 4, 5),
(41, 1, '2021-05-01 20:12:43', 3, 'Safable', 'Divertida y entretenida, si te gustan los musicales.', 38, 5),
(42, 1, '2021-05-01 20:12:43', 3, 'Safable', 'Es una pelicula muy generica, no me sorprendio en nada', 34, 5),
(43, 1, '2021-05-01 20:12:43', 4, 'Muy buena', 'Alucinante, es una película que te deja pensando en la posibilidad de universos paralelos, muy interesante', 12, 5),
(44, 1, '2021-05-01 20:12:43', 3, 'Safable', 'Tiene un argumento muy pobre, me aburrí a la mitad de la película.', 11, 5),
(45, 1, '2021-05-01 20:12:43', 2, 'Muy mala', 'Estuve esperando por años a que se estrenara esta peli, y me termino decepcionando, el terror no es tal, es mas una pelicula de adolescentes, para adolescentes.', 8, 5),
(46, 1, '2021-05-01 20:12:43', 3, 'Safable', 'Me entretuvo hasta la mitad, después ya por la intriga la termine de ver, pero me decepciono. ', 3, 5),
(47, 1, '2021-05-01 20:12:43', 3, 'Safable', 'me gustaron los efectos visuales, pero la historia fue muy pobre y predecible, ya para la mitad de la peli sabias como terminaría ', 35, 5),
(48, 1, '2021-05-01 20:12:43', 3, 'Safable', 'Entretenida, pero para verla una sola vez, tiene algunos agujeros de guion pero zafa.', 45, 5),
(49, 1, '2021-05-01 20:12:43', 1, 'Horrible', 'Wow! peliculón, excelente actuación e interpretación de Phoenix, no se pierdan esta peli!', 56, 5),
(50, 1, '2021-05-01 20:12:43', 1, 'Horrible', 'Tenia muchas expectativas de esta peli porque se decía que era una especia de copia de Evangelion, pero nada que ver, fue malísima!', 44, 5),
(51, 1, '2021-05-01 20:12:43', 5, 'Espectacular', 'Impresionante la interpretación de Rami Malek!. Altamente recomendable.', 48, 5),
(52, 1, '2021-05-01 20:12:44', 3, 'Safable', 'No me gusto esta película, me pareció una película de acción muy común, lo único destacable fue el humor de flash, pero nada mas.', 15, 5),
(53, 1, '2021-05-01 20:12:44', 4, 'Muy buena', 'Me gusto, no fue como el resto de la saga, un poco floja pero me entretuvo.', 59, 5),
(54, 1, '2021-05-01 20:12:44', 3, 'Safable', 'Es entretenida, me gusto pero le falta acción. Toda la peli es igual hasta que llegan los últimos 30 mins.', 7, 5),
(55, 1, '2021-05-01 20:12:44', 2, 'Muy mala', 'Si no te mata el frío, lo hará el aburrimiento.', 3, 6),
(56, 1, '2021-05-01 20:12:44', 3, 'Safable', 'Es la clase de película que seguramente muchos fans querrán que les guste, y mientras que hace honor a esa modesta promesa, ciertamente no va por encima ni más allá\r\n', 8, 6),
(57, 1, '2021-05-01 20:12:44', 1, 'Horrible', 'Malgasta el potencial de una temática relevante y de una premisa interesante a causa de una sobrecargada reimaginación de la narrativa de superhéroes.\r\n', 11, 6),
(58, 1, '2021-05-01 20:12:44', 2, 'Muy mala', 'Muy mala. El trailer es lo mejor q tiene esta película. Absurda y llena de estereotipos, se podría soportar lo absurdo del argumento científico si al menos la trama estuviese acorde, pero no. Me he ab', 12, 6),
(59, 1, '2021-05-01 20:12:44', 2, 'Muy mala', 'Aburrida, capas que si te gustan mucho las películas musicales te entretiene un poco, no fue mi caso.', 38, 6),
(60, 1, '2021-05-01 20:12:44', 1, 'Horrible', 'Humor un poco fuerte, no apto para sensibles, si no es tu caso, la recomiendo', 4, 6),
(61, 1, '2021-05-01 20:12:44', 5, 'Espectacular', 'Si viste el Resplandor, definitivamente te encantara. Personalmente creo que es una excelente película y tiene muchas reminiscencias del resplandor y me mantuvo muy atento durante las mas de 2 horas q', 5, 6),
(62, 1, '2021-05-01 20:12:44', 1, 'Horrible', 'Un buen personaje muy mal introducido al universo Marvel, con una trama muy pobre y metida al final por la fuerza, una lastima', 35, 6),
(63, 1, '2021-05-01 20:12:44', 2, 'Muy mala', 'perdida de tiempo, aburrida y sin coherencia en algunas partes, no la recomiendo', 45, 6),
(64, 1, '2021-05-01 20:12:44', 5, 'Espectacular', 'Me encanto, no tenia tantas expectativas pero si las hubiera tenido, seguramente las hubiera superado ampliamente', 56, 6),
(65, 1, '2021-05-01 20:12:44', 1, 'Horrible', 'Aburrida, típica secuela que nunca tendría que haber existido', 44, 6),
(66, 1, '2021-05-01 20:12:44', 5, 'Espectacular', 'Para mi en mi opinión esta película es fantástica. Me gusto como contaron la historia de esta leyenda de la música, tiene un buen guion y una buena dirección, en especial el actor quien lo interpreta,', 48, 6),
(67, 1, '2021-05-01 20:12:44', 2, 'Muy mala', 'Estuvo buena, aunque esperaba un poco (bastante) mas', 15, 6),
(68, 1, '2021-05-01 20:12:44', 3, 'Safable', 'Buena película para matar el aburrimiento una tarde, no mas que eso', 59, 6),
(69, 1, '2021-05-01 20:12:44', 1, 'Horrible', 'Hay que tener un poco de paciencia, pero no es mala, entretiene bastante\r\n', 7, 6),
(70, 1, '2021-05-01 20:12:44', 2, 'Muy mala', 'Me entretuvo hasta la mitad, después ya por la intriga la termine de ver, pero me decepciono.', 3, 7),
(71, 1, '2021-05-01 20:12:45', 4, 'Muy buena', 'Muy entretenida, no podes parar de verla hasta el final. Recomendable.', 8, 7),
(72, 1, '2021-05-01 20:12:45', 1, 'Horrible', 'Decepcionante, tenia muchas espectativas de esta peli, es una perdida de tiempo.', 11, 7),
(73, 1, '2021-05-01 20:12:45', 5, 'Espectacular', 'Me encanto esta pelicula, no pude despegar mis ojos de la pantalla.', 12, 7),
(74, 1, '2021-05-01 20:12:45', 3, 'Safable', 'Tiene muchos agujeros de guion e incoherencias, pero aun asi me entretuvo mucho.', 34, 7),
(75, 1, '2021-05-01 20:12:45', 1, 'Horrible', 'Buenos actores, pero pobres interpretaciones, un guion horrible y una historia incoherente.', 38, 7),
(76, 1, '2021-05-01 20:12:45', 4, 'Muy buena', 'Espectacular actuacion! una historia muy entretenida.', 4, 7),
(77, 1, '2021-05-01 20:12:45', 2, 'Muy mala', 'Para quien le guste este genero de películas esta bien, pero me pareció un bodrio...', 5, 7),
(78, 1, '2021-05-01 20:12:45', 4, 'Muy buena', 'Espero que haya secuela y que este a la altura de esta', 35, 7),
(79, 1, '2021-05-01 20:12:45', 1, 'Horrible', 'Lo unico que agradezco de la pelicula, es no haber pagado una entrada de cine por verla', 45, 7),
(80, 1, '2021-05-01 20:12:45', 5, 'Espectacular', 'Imposible aburrise, te mantiene atrapado durante toda la pelicula', 56, 7),
(81, 1, '2021-05-01 20:12:45', 5, 'Espectacular', 'Entretenida, me gusto bastante, la volveria a ver varias veces', 48, 7),
(82, 1, '2021-05-01 20:12:45', 2, 'Muy mala', 'Buena pelicula para matar el aburrimiento una tarde, no mas que eso', 15, 7),
(83, 1, '2021-05-01 20:12:45', 2, 'Muy mala', 'Me aburrio bastante, no la recomiendo si no les gusta este genero ', 59, 7),
(84, 1, '2021-05-01 20:12:45', 2, 'Muy mala', 'Me entretuvo hasta la mitad, después ya por la intriga la termine de ver, pero me decepciono.', 7, 7),
(85, 1, '2021-05-01 20:12:45', 1, 'Horrible', 'Buenos actores, pero pobres interpretaciones, un guion horrible y una historia incoherente.', 44, 7),
(86, 1, '2021-05-01 20:12:45', 2, 'Muy mala', 'Me aburrió bastante, no la recomiendo si no les gusta este genero ', 3, 8),
(87, 1, '2021-05-01 20:12:45', 1, 'Horrible', 'Decepcionante, tenia muchas expectativas de esta peli, es una perdida de tiempo', 8, 8),
(88, 1, '2021-05-01 20:12:45', 1, 'Horrible', 'Sin comentarios, ojala podría ponerle un puntaje menor', 11, 8),
(89, 1, '2021-05-01 20:12:45', 4, 'Muy buena', 'Muy entretenida, no podes parar de verla hasta el final. Recomendable.', 12, 8),
(90, 1, '2021-05-01 20:12:45', 4, 'Muy buena', 'Muy entretenida, no podes parar de verla hasta el final. Recomendable.', 34, 8),
(91, 1, '2021-05-01 20:12:45', 2, 'Muy mala', 'Buena pelicula para matar el aburrimiento una tarde, no mas que eso', 38, 8),
(92, 1, '2021-05-01 20:12:45', 2, 'Muy mala', 'Buena pelicula para matar el aburrimiento una tarde, no mas que eso', 4, 8),
(93, 1, '2021-05-01 20:12:45', 5, 'Espectacular', 'Me encanto esta película, no pude despegar mis ojos de la pantalla.', 5, 8),
(94, 1, '2021-05-01 20:12:45', 1, 'Horrible', 'Una lastima por los que pagaron la entrada al cine, Marvel debería devolverles la plata por la calidad de esta película', 35, 8),
(95, 1, '2021-05-01 20:12:46', 1, 'Horrible', 'Decepcionante, tenia muchas expectativas de esta peli, es una perdida de tiempo.', 45, 8),
(96, 1, '2021-05-01 20:12:46', 5, 'Espectacular', 'Imposible aburrise, te mantiene atrapado durante toda la película', 56, 8),
(97, 1, '2021-05-01 20:12:46', 1, 'Horrible', 'Lo único que agradezco de la película, es no haber pagado una entrada de cine por verla', 44, 8),
(98, 1, '2021-05-01 20:12:46', 5, 'Espectacular', 'Me encanto esta película, no pude despegar mis ojos de la pantalla.', 48, 8),
(99, 1, '2021-05-01 20:12:46', 1, 'Horrible', 'Buenos actores, pero pobres interpretaciones, un guion horrible y una historia incoherente.', 15, 8),
(100, 1, '2021-05-01 20:12:46', 1, 'Horrible', 'Sin comentarios, ojala podría ponerle un puntaje menor, arruina la saga', 59, 8),
(101, 1, '2021-05-01 20:12:46', 3, 'Safable', 'Tiene muchos agujeros de guion e incoherencias, pero aun asi me entretuvo mucho.', 7, 8),
(102, 1, '2021-05-01 20:12:46', 2, 'Muy mala', 'Buena pelicula para matar el aburrimiento una tarde, no mas que eso', 3, 9),
(103, 1, '2021-05-01 20:12:46', 5, 'Espectacular', 'Entretenida, me gusto bastante, la volveria a ver varias veces', 8, 9),
(104, 1, '2021-05-01 20:12:46', 5, 'Espectacular', 'Imposible aburrise, te mantiene atrapado durante toda la pelicula', 11, 9),
(105, 1, '2021-05-01 20:12:46', 1, 'Horrible', 'Sin comentarios, ojala podria ponerle un puntaje menor', 12, 9),
(106, 1, '2021-05-01 20:12:46', 5, 'Espectacular', 'Imposible aburrise, te mantiene atrapado durante toda la pelicula', 34, 9),
(107, 1, '2021-05-01 20:12:46', 4, 'Muy buena', 'Espero que haya secuela y que este a la altura de esta', 4, 9),
(108, 1, '2021-05-01 20:12:46', 2, 'Muy mala', 'Para quien le guste este genero de peliculas esta bien, pero me parecio un bodrio...', 4, 9),
(109, 1, '2021-05-01 20:12:46', 4, 'Muy buena', 'Espectacular actuacion! una historia muy entretenida.', 5, 9),
(110, 1, '2021-05-01 20:12:46', 1, 'Horrible', 'Buenos actores, pero pobres interpretaciones, un guion horrible y una historia incoherente.', 35, 9),
(111, 1, '2021-05-01 20:12:46', 3, 'Safable', 'Tiene muchos agujeros de guion e incoherencias, pero aun asi me entretuvo mucho.', 45, 9),
(112, 1, '2021-05-01 20:12:46', 5, 'Espectacular', 'Me encanto esta pelicula, no pude despegar mis ojos de la pantalla.', 56, 9),
(113, 1, '2021-05-01 20:12:46', 1, 'Horrible', 'Decepcionante, tenia muchas espectativas de esta peli, es una perdida de tiempo.', 44, 9),
(114, 1, '2021-05-01 20:12:46', 4, 'Muy buena', 'Muy entretenida, no podes parar de verla hasta el final. Recomendable.', 48, 9),
(115, 1, '2021-05-01 20:12:47', 1, 'Horrible', 'Decepcionante, tenia muchas espectativas de esta peli, es una perdida de tiempo.', 15, 9),
(116, 1, '2021-05-01 20:12:47', 2, 'Muy mala', 'Me entretuvo hasta la mitad, después ya por la intriga la termine de ver, pero me decepciono.', 59, 9),
(117, 1, '2021-05-01 20:12:47', 2, 'Muy mala', 'Me aburrio bastante, no la recomiendo si no les gusta este genero ', 7, 9),
(134, 1, '2021-05-01 20:12:47', 1, 'Horrible', 'Lo unico que agradezco de la pelicula, es no haber pagado una entrada de cine por verla', 3, 11),
(135, 1, '2021-05-01 20:12:47', 4, 'Muy buena', 'Espero que haya secuela y que este a la altura de esta', 8, 11),
(136, 1, '2021-05-01 20:12:47', 2, 'Muy mala', 'Para quien le guste este genero de peliculas esta bien, pero me parecio un bodrio...', 11, 11),
(137, 1, '2021-05-01 20:12:47', 4, 'Muy buena', 'Espectacular actuacion! una historia muy entretenida.', 12, 11),
(138, 1, '2021-05-01 20:12:47', 1, 'Horrible', 'Buenos actores, pero pobres interpretaciones, un guion horrible y una historia incoherente.', 34, 11),
(139, 1, '2021-05-01 20:12:47', 3, 'Safable', 'Tiene muchos agujeros de guion e incoherencias, pero aun asi me entretuvo mucho.', 38, 11),
(140, 1, '2021-05-01 20:12:47', 1, 'Horrible', 'Decepcionante, tenia muchas espectativas de esta peli, es una perdida de tiempo.', 4, 11),
(141, 1, '2021-05-01 20:12:47', 4, 'Muy buena', 'Muy entretenida, no podes parar de verla hasta el final. Recomendable.', 5, 11),
(142, 1, '2021-05-01 20:12:47', 2, 'Muy mala', 'Me aburrio bastante, no la recomiendo si no les gusta este genero ', 35, 11),
(143, 1, '2021-05-01 20:12:47', 2, 'Muy mala', 'Buena pelicula para matar el aburrimiento una tarde, no mas que eso', 45, 11),
(144, 1, '2021-05-01 20:12:48', 5, 'Espectacular', 'Entretenida, me gusto bastante, la volveria a ver varias veces', 56, 11),
(145, 1, '2021-05-01 20:12:48', 1, 'Horrible', 'Sin comentarios, ojala podria ponerle un puntaje menor', 44, 11),
(146, 1, '2021-05-01 20:12:48', 3, 'Safable', 'Tiene muchos agujeros de guion e incoherencias, pero aun asi me entretuvo mucho.', 48, 11),
(147, 1, '2021-05-01 20:12:48', 1, 'Horrible', 'Sin comentarios, ojala podría ponerle un puntaje menor', 15, 11),
(148, 1, '2021-05-01 20:12:48', 2, 'Muy mala', 'Para quien le guste este genero de peliculas esta bien, pero me parecio un bodrio...', 59, 11),
(149, 1, '2021-05-01 20:12:48', 4, 'Muy buena', 'Espectacular actuacion! una historia muy entretenida.', 7, 11),
(150, 1, '2021-05-01 20:12:48', 5, 'Espectacular', 'Excelente peli! :D', 58, 11),
(151, 1, '2021-05-01 20:12:48', 5, 'Espectacular', 'Muy bueno la verdad mucha accion ', 43, 11),
(152, 1, '2021-05-01 20:12:48', 5, 'Espectacular', 'Impresionante como esa niña decifra codigos', 42, 11),
(153, 1, '2021-05-01 20:12:48', 3, 'Safable', 'Masomenos, un poco aburrido al principio.', 40, 11),
(154, 1, '2021-05-01 20:12:48', 1, 'Horrible', 'Entretenido, complicado entenderlo.', 41, 11),
(155, 1, '2021-05-01 20:12:48', 4, 'Muy buena', 'Muy gracioso, recomendable.', 18, 11),
(156, 1, '2021-05-01 20:12:48', 4, 'Muy buena', 'Safa que digamos.. xD', 6, 11),
(157, 1, '2021-05-01 20:12:48', 5, 'Espectacular', 'Me encanto!', 33, 11),
(158, 1, '2021-05-01 20:12:48', 2, 'Muy mala', 'Medio aburido.', 54, 11),
(159, 1, '2021-05-01 20:12:48', 4, 'Muy buena', 'Muy bueno!', 49, 11),
(160, 1, '2021-05-01 20:12:48', 1, 'Horrible', 'Muy romantico!', 47, 11),
(161, 1, '2021-05-01 20:12:48', 4, 'Muy buena', 'Muy buena!', 53, 11),
(162, 1, '2021-05-01 20:12:48', 5, 'Espectacular', 'Me encanto.', 46, 11),
(163, 1, '2021-05-01 20:12:49', 4, 'Muy buena', 'Entretenido.', 29, 11),
(164, 1, '2021-05-01 20:12:49', 1, 'Horrible', 'Decepcionante, tenia muchas expectativas de esta peli, es una perdida de tiempo.', 3, 12),
(165, 1, '2021-05-01 20:12:49', 2, 'Muy mala', 'Me entretuvo hasta la mitad, después ya por la intriga la termine de ver, pero me decepciono', 8, 12),
(166, 1, '2021-05-01 20:12:49', 2, 'Muy mala', 'Me entretuvo hasta la mitad, después ya por la intriga la termine de ver, pero me decepciono', 11, 12),
(167, 1, '2021-05-01 20:12:49', 5, 'Espectacular', 'Entretenida, me gusto bastante, la volvería a ver varias veces', 12, 12),
(168, 1, '2021-05-01 20:12:49', 2, 'Muy mala', 'Buena pelicula para matar el aburrimiento una tarde, no mas que eso', 34, 12),
(169, 1, '2021-05-01 20:12:49', 3, 'Safable', 'Buena para ver como aleatoria, pero no para verlas mas de una vez', 38, 12),
(170, 1, '2021-05-01 20:12:49', 5, 'Espectacular', 'Entretenida, me gusto bastante, la volvería a ver varias veces', 4, 12),
(171, 1, '2021-05-01 20:12:49', 5, 'Espectacular', 'Entretenida, me gusto bastante, la volvería a ver varias veces', 5, 12),
(172, 1, '2021-05-01 20:12:49', 2, 'Muy mala', 'Buena pelicula para matar el aburrimiento una tarde, no mas que eso', 35, 12),
(173, 1, '2021-05-01 20:12:49', 2, 'Muy mala', 'Aburrida, no deja ningún recuerdo, una mas del montón', 45, 12),
(174, 1, '2021-05-01 20:12:49', 5, 'Espectacular', 'Sin palabras, lo único malo de la peli, es que termina', 56, 12),
(175, 1, '2021-05-01 20:12:49', 1, 'Horrible', 'Pensé que iba a ser una peli bastante mala, y no me equivoque', 44, 12),
(176, 1, '2021-05-01 20:12:49', 4, 'Muy buena', 'Impresionante, recomendada para los amantes de la BUENA música', 48, 12),
(177, 1, '2021-05-01 20:12:49', 3, 'Safable', 'Flash empujo la película para que sea aceptable, lo demás, aprueba raspando', 15, 12),
(178, 1, '2021-05-01 20:12:49', 2, 'Muy mala', 'Solamente arruinan la saga', 59, 12),
(179, 1, '2021-05-01 20:12:49', 4, 'Muy buena', 'Muy buena, interesante, mejor de lo que me esperaba', 7, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `id_direccion` int(2) NOT NULL,
  `calle` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `altura` int(5) NOT NULL,
  `piso` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dpto` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `barrio` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`id_direccion`, `calle`, `altura`, `piso`, `dpto`, `barrio`) VALUES
(1, 'riobamba', 1200, '1', 'D', 'Recoleta'),
(2, 'Junin', 2020, '8', 'A', 'Recoleta'),
(3, 'Corrientes', 3010, '2', '2A', 'Chacarita');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `id_genero` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`id_genero`, `status`, `nombre`) VALUES
(1, 1, 'Acción'),
(2, 1, 'Aventura'),
(3, 1, 'Ciencia y Ficción'),
(4, 1, 'Comedia'),
(5, 1, 'Crimen'),
(6, 1, 'Documental'),
(7, 1, 'Drama'),
(8, 1, 'Fantasía'),
(9, 1, 'Infantil'),
(10, 1, 'Musical'),
(11, 1, 'Romance'),
(12, 1, 'Suspenso'),
(13, 1, 'Terror');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero_subgenero`
--

CREATE TABLE `genero_subgenero` (
  `id_genero_subgenero` int(2) NOT NULL,
  `id_genero` int(2) NOT NULL,
  `id_subgenero` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `genero_subgenero`
--

INSERT INTO `genero_subgenero` (`id_genero_subgenero`, `id_genero`, `id_subgenero`) VALUES
(28, 1, NULL),
(3, 1, 2),
(10, 1, 8),
(11, 1, 9),
(29, 2, NULL),
(16, 2, 13),
(30, 3, NULL),
(4, 3, 2),
(6, 3, 4),
(7, 3, 5),
(20, 3, 15),
(31, 4, NULL),
(2, 4, 1),
(12, 4, 10),
(21, 4, 16),
(32, 5, NULL),
(9, 5, 7),
(15, 5, 12),
(33, 6, NULL),
(14, 6, 11),
(34, 7, NULL),
(17, 7, 13),
(23, 7, 18),
(24, 7, 19),
(35, 8, NULL),
(5, 8, 3),
(18, 8, 14),
(22, 8, 17),
(36, 9, NULL),
(37, 10, NULL),
(38, 11, NULL),
(13, 11, 10),
(25, 11, 19),
(39, 12, NULL),
(26, 12, 20),
(27, 12, 21),
(40, 13, NULL),
(8, 13, 6),
(19, 13, 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula`
--

CREATE TABLE `pelicula` (
  `id_pelicula` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `precio` int(4) NOT NULL,
  `id_clasificacion` int(2) NOT NULL,
  `duracion` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `anio` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `directores` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `actores` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pelicula`
--

INSERT INTO `pelicula` (`id_pelicula`, `status`, `nombre`, `precio`, `id_clasificacion`, `duracion`, `anio`, `directores`, `actores`, `descripcion`) VALUES
(1, 1, 'The Godfather', 200, 4, '2h 55min', '1972', 'Francis Ford Coppola', 'Marlon Brando, Al Pa', 'Don Vito Corleone es el jefe de una de las cinco familias que ejercen el mando de la Cosa Nostra en Nueva York en los años 40. Don Corleone tiene cuatro hijos; una chica, Connie, y tres varones, Santino, o Sonny, como le gusta que le llamen, Michael y Freddie, al que env\\u00edan exiliado a Las Vegas, dada su incapacidad para asumir puestos de mando en la \\u0094Familia\\u0094. Cuando otro capo, Sollozzo, al rechazar el Padrino intervenir en el negocio de estupefacientes, intenta asesinar a \\u00e9ste, empieza una cruenta lucha de violentos episodios entre los distintos grupos.'),
(2, 1, 'The Godfather II', 200, 4, '3h 22min', '1974', 'Francis Ford Coppola', 'Al Pacino, Robert De', 'Michael Corleone lidera el imperio criminal de su padre, mientras que se recuerda el ascenso al poder del joven Vito.'),
(3, 1, 'Centigrade', 150, 3, '1h 38min', '2020', 'Brendan Walsh', 'Mavis Simpson-Ernst,', 'Un matrimonio se queda atrapado en su vehículo congelado después de una tormenta y tiene que luchar para sobrevivir.'),
(4, 1, 'Harpoon', 200, 4, '1h 23min', '2019', 'Rob Grant', 'Munro Chambers, Chri', 'Tres amigos se quedan en un yate a la deriva en medio del océano. Sin escapatoria y luchando por sobrevivir, con mucho alcohol pero poca comida y agua, con el tiempo los tres jóvenes se dejarán llevar'),
(5, 1, 'Doctor Sleep', 150, 3, '2h 32min', '2019', 'Mike Flanagan', 'Ewan McGregor, Rebec', 'Dan, alcohólico y traumatizado por lo que le pasó siendo un niño en el hotel Overlook, conoce a Abra, una adolescente que posee el mismo don que él. Dan tratará de salvar a Abra de un grupo de siniest'),
(6, 1, 'Dreamcatcher', 200, 4, '2h 16min', '2003', 'Lawrence Kasdan', 'Morgan Freeman, Thom', 'Basada en la obra de Stephen King. Cuatro amigos unidos por telepatía enfrentan a alienígenas en los bosques de Maine.'),
(7, 1, 'Arrival', 120, 2, '1h 56min', '2016', 'Denis Villeneuve', 'Amy Adams, Jeremy Re', 'El gobierno contrata a la prestigiosa lingüista Louise Banks para que se comunique con unos alienígenas que han llegado a la Tierra. Conforme ella aprende su idioma, va experimentando regresiones muy '),
(8, 1, 'The New Mutants', 120, 2, '1h 34min', '2020', 'Josh Boone', 'Maisie Williams, Any', 'Cinco jóvenes mutantes que acaban de descubrir sus habilidades, son encerrados en unas instalaciones secretas contra su voluntad y luchan por escapar de su pasado y salvarse a sí mismos.'),
(9, 1, 'Interstellar', 120, 2, '2h 49min', '2014', 'Christopher Nolan', 'Matthew McConaughey,', 'Al ver que la vida en la Tierra está llegando a su fin, un grupo de exploradores dirigidos por el piloto Cooper (McConaughey) y la científica Amelia (Hathaway) emprende una misión que puede ser la más'),
(10, 1, 'Inception', 120, 2, '2h 28min', '2010', 'Christopher Nolan', 'Leonardo DiCaprio, J', 'Dom Cobb es un ladrón con una extraña habilidad para entrar a los sueños de la gente y robarles los secretos de sus subconscientes. Su habilidad lo ha vuelto muy popular en el mundo del espionaje corp'),
(11, 1, 'Proyecto Power', 150, 3, '1h 53min', '2020', 'Henry Joost, Ariel S', 'Jamie Foxx, Joseph G', 'Un exsoldado se une a un policía para encontrar la fuente detrás de una píldora peligrosa que proporciona superpoderes temporales.'),
(12, 1, 'Tenet', 120, 2, '2h 30min', '2020', 'Christopher Nolan', 'John David Washingto', 'Una acción épica que gira en torno al espionaje internacional, los viajes en el tiempo y la evolución, en la que un agente secreto debe prevenir la Tercera Guerra Mundial.'),
(13, 1, 'Harry Potter and the', 100, 1, '2h 32min', '2001', 'Chris Columbus', 'Daniel Radcliffe, Ru', 'El día de su cumpleaños, Harry Potter descubre que es hijo de dos conocidos hechiceros, de los que ha heredado poderes mágicos. Debe asistir a una famosa escuela de magia y hechicería, donde entabla u'),
(14, 1, 'Pirates of the Carib', 100, 1, '2h 23min', '2003', 'Gore Verbinski', 'Johnny Depp, Geoffre', 'El capitán Barbossa le roba el barco al pirata Jack Sparrow y secuestra a Elizabeth, amiga de Will Turner. Barbossa y su tripulación son víctimas de un conjuro que los condena a vivir eternamente y a '),
(15, 1, 'Justice League', 100, 1, '2h', '2017', 'Zack Snyder', 'Ben Affleck, Gal Gad', 'Gracias a su renovada fe en la humanidad e inspirado por el acto de altruísmo de Superman, Bruce Wayne pide ayuda a su nueva aliada, Diana Prince, para enfrentar a un enemigo aún más peligroso.'),
(16, 1, 'The Lord of the Ring', 120, 2, '2h 58min', '2001', 'Peter Jackson', 'Elijah Wood, Ian McK', 'Frodo Bolsón es un hobbit al que su tío Bilbo hace portador del poderoso Anillo Único, capaz de otorgar un poder ilimitado al que la posea, con la finalidad de destruirlo. Sin embargo, fuerzas maligna'),
(17, 1, 'Avatar', 100, 1, '2h 42min', '2009', 'James Cameron', 'Sam Worthington, Zoe', 'En un exuberante planeta llamado Pandora viven los Navi, seres que aparentan ser primitivos pero que en realidad son muy evolucionados. Debido a que el ambiente de Pandora es venenoso, los híbridos hu'),
(18, 1, 'Scary Movie', 150, 3, '1h 28 min', '2000', 'Keenen Ivory Wayans', 'Anna Faris, Jon Abra', 'Una bella estudiante muere asesinada. Un grupo de desorientados adolescentes descubre que entre ellos hay un asesino. La heroína Cyndi Campbell y su grupo de despistados amigos se verán aterrorizados '),
(19, 1, 'The Hangover', 150, 3, '1h 40 min', '2009', 'Todd Phillips', 'Bradley Cooper, Ed H', 'Historia de una desmadrada despedida de soltero en la que el novio y tres amigos se montan una gran juerga en Las Vegas. Como era de esperar, a la mañana siguiente tienen una resaca tan monumental que'),
(20, 1, 'Grown Ups', 120, 2, '1h 57 min', '2010', 'Dennis Dugan', 'Adam Sandler, Kevin ', 'Después de treinta años, cinco amigos vuelven a verse para asistir al funeral de su entrenador de baloncesto de la infancia. Con sus esposas e hijos a cuestas, deciden pasar el fin de semana del 4 de '),
(21, 1, 'Mr. Beans Holiday', 100, 1, '1h 50 min', '2007', 'Steve Bendelack', 'Rowan Atkinson, Emma', 'Mister Bean decide irse de vacaciones al sur de Francia y convierte su viaje de Londres a la Costa Azul en un auténtico caos: por dondequiera que pasa provoca verdaderos estragos.'),
(22, 1, 'Me, Myself & Irene', 150, 3, '1h 57 min', '2000', 'Peter Farrelly', 'Jim Carrey, Renée Ze', 'Charlie es un inocente y amable policía de Rhode Island que es todo un caballero, además de un abnegado padre soltero de tres hijos de color que su esposa tuvo tras una aventura. Pero un día Charlie, '),
(23, 1, 'Indiana Jones Raider', 120, 2, '1h 55 min', '1981', 'Steven Spielberg', 'Harrison Ford, Karen', 'Año 1936. Indiana Jones es un profesor de arqueología, dispuesto a correr peligrosas aventuras con tal de conseguir valiosas reliquias históricas. Después de una infructuosa misión en Sudamérica, el g'),
(24, 1, 'The Mummy', 120, 2, '2h 05 min', '1999', 'Stephen Sommers', 'Rachel Weisz, John H', 'Durante una batalla en Egipto, el legionario Rick OConnell y un compañero descubren las ruinas de Hamunaptra, la ciudad de los muertos. Algún tiempo después vuelven al mismo lugar con una egiptóloga y'),
(25, 1, 'Life of Pi', 120, 2, '2h 07 min', '2012', 'Ang Lee', 'Suraj Sharma, Irrfan', 'Tras un naufragio en medio del océano Pacífico, el joven hindú Pi, hijo de un guarda de zoo que viajaba de la India a Canadá, se encuentra en un bote salvavidas con un único superviviente, un tigre de'),
(26, 1, 'Cast Away', 100, 1, '2h 23 min', '2000', 'Robert Zemeckis', 'Tom Hanks, Helen Hun', 'Tras un naufragio en medio del océano Pacífico, el joven hindú Pi, hijo de un guarda de zoo que viajaba de la India a Canadá, se encuentra en un bote salvavidas con un único superviviente, un tigre de'),
(27, 1, 'The Revenant', 150, 3, '2h 36 min', '2015', 'Alejandro González I', 'Leonardo DiCaprio, T', 'Año 1823. En las profundidades de la América salvaje, el explorador Hugh Glass (Leonardo DiCaprio) participa junto a su hijo mestizo Hawk en una expedición de tramperos que recolecta pieles. Glass res'),
(28, 1, 'Monsters, Inc.', 100, 1, '1h 38 min', '2001', 'Peter Docter', 'Billy Crystal, John ', 'Monsters Inc. es la mayor empresa de miedo del mundo, y James P. Sullivan es uno de sus mejores empleados. Asustar a los niños no es un trabajo fácil, ya que todos creen que los niños son tóxicos y no'),
(29, 1, 'Cars', 100, 1, '1h 54 min', '2006', 'John Lasseter', 'Owen Wilson, Bonnie ', 'El aspirante a campeón de carreras Rayo McQueen parece que está a punto de conseguir el éxito, la fama y todo lo que había soñado, hasta que por error toma un desvío inesperado en la polvorienta y sol'),
(30, 1, 'Toy Story', 100, 1, '1h 20 min', '1995', 'John Lasseter', 'Tom Hanks, Tim Allen', 'Los juguetes de Andy, un niño de 6 años, temen que haya llegado su hora y que un nuevo regalo de cumpleaños les sustituya en el corazón de su dueño. Woody, un vaquero que ha sido hasta ahora el juguet'),
(31, 1, 'Ice Age', 100, 1, '1h 15 min', '2002', 'Chris Wedge', 'MDenis Leary, John L', 'En la epoca glacial de la prehistoria un mamut, un perezoso gigante y un tigre se ocuparán de cuidar un bebé humano extraviado por su familia.'),
(32, 1, 'Shrek', 100, 1, '1h 27 min', '2001', 'Andrew Adamson', 'Mike Myers, Eddie Mu', 'Hace mucho tiempo, en una lejanísima ciénaga, vivía un feroz ogro llamado Shrek. De repente, un día, su soledad se ve interrumpida por una invasión de sorprendentes personajes. Hay ratoncitos ciegos e'),
(33, 1, 'Asesino Solitario', 120, 4, '1h 31min', '2007', 'Philip Atwell', 'Jet Li, Jason Statha', 'Después de que su compañero Tom Lone y su familia son asesinados aparentemente por el infame y esquivo asesino Rogue, el agente del FBI John Crawford se obsesiona con la venganza mientras su mundo se '),
(34, 1, 'Bala Perdida', 120, 4, '1h 32min', '2020', 'Guillaume Pierret', 'Nicolas Duvauchelle,', 'Lino (Alban Lenoir), un mecánico con un don especial para construir coches, ingresa en prisión por un robo que salió mal. Sin embargo, el jefe de una unidad especial de lucha contra las drogas le ofre'),
(35, 1, 'Capitana Marvel', 150, 1, '2h 40min', '2019', 'Anna Boden, Ryan Fleck', 'Brie Larson, Samuel L. Jackson, Jude Law', 'Ubicada en los 90. \"Capitana Marvel\" es una nueva aventura que nos presentará un periodo de la historia nunca antes vista en el MCU, que seguirá el viaje de Carol Danvers para convertirse en una de las heroínas más poderosas del universo. Mientras una guerra galáctica entre dos razas alienígenas llega a la Tierra, Danvers se encuentra a sí misma y a un pequeño grupo de aliados, en el centro del remolino.'),
(36, 1, 'Despertares', 120, 2, '2h 1min', '1990', 'Penny Marshall', 'Robert De Niro, Robi', 'El médico Malcolm Sayer, se encuentra con una sala llena de catatónicos víctimas de una epidemia de encefalitis. El doctor se perturba ante esta situación y por el hecho de que muchos son catatónicos '),
(37, 1, 'Hombre de Familia', 130, 2, '2h 5min', '2000', 'Brett Ratner', 'Nicolas Cage, Téa Le', 'Jack Campbell (Nicolas Cage) es un egocéntrico broker de Wall Street cuya única obsesión es el trabajo y una vida llena de lujo. Un día, tras un incidente en una tienda durante la Nochebuena, se despi'),
(38, 1, 'Siente el Ritmo', 120, 1, '1h 49min', '2020', 'Elissa Down', 'Sofia Carson, Enrico', 'Cuando la bailarina talentosa y egocéntrica April (Sofía Carson) es desterrada de Broadway, ella se muda a regañadientes con su padre (Enrico Colantoni) en su pequeña ciudad natal de Wisconsin. Hacien'),
(39, 1, 'El poder del Tai chi', 130, 3, '1h 45min', '2013', 'Elissa Down', 'Tiger Hu Chen, Keanu', 'Chen (Reeves) es un joven con experiencia y un don innato para el combate. Será en el Pekín actual donde todo su potencial se vea desarrollado y explotado, abriendo ante él un infinito abanico de posi'),
(40, 1, 'En el nombre del rey', 130, 3, '2h 4min', '2008', 'Uwe Boll', 'Jason Statham, John ', 'Ambientada en el reino de Ehb, la historia sigue a Farmer, quien fue adoptado por su pueblo. Cuando la esposa de Farmer, Solana, y su hijo se van a vender verduras a Stonebridge, la granja de Farmer e'),
(41, 1, 'Vecinos en la mira', 130, 3, '1h 50min', '2008', 'Neil LaBute', 'Samuel L. Jackson, P', 'Una joven pareja (Patrick Wilson y Kerry Washington) se acaba de mudar a la casa de sus sueños en California. Muy pronto descubrirán que no son bien recibidos por uno de sus vecinos (Samuel L. Jackson'),
(42, 1, 'Codigo del Miedo', 130, 3, '1h 50min', '2012', 'Boaz Yakin', 'Jason Statham, Chris', 'Luke Wright (Jason Statham, Los mercenarios) se ha metido en un grave problema con las mafias rusas. Después de haber perdido un combate amañado, los miembros del clan han asesinado a su esposa y lo h'),
(43, 1, 'El Redentor', 130, 3, '1h 40min', '2013', 'Steven Knight', 'Jason Statham, Bened', 'Joey Jones (Jason Statham) es un ex soldado de las Fuerzas Especiales, vagabundo y atormentado por un trágico pasado. Harto de las injusticias que ve constantemente a su alrededor, los acontecimientos'),
(44, 1, 'Titanes del Pacifico', 140, 2, '2h 20min', '2018', 'Steven S. DeKnight', 'John Boyega, Scott E', 'Un futuro cercano. Han pasado 10 años tras la primera invasión que sufrió la humanidad, pero la lucha aún no ha terminado. El planeta vuelve a ser asediado por los Kaiju, una raza de alienígenas colos'),
(45, 1, 'The Driver', 130, 3, '1h 37min', '2019', 'Wych Kaosayananda', 'Mark Dacascos, Jerem', 'Después de que una plaga de muertos vivientes diezme la vida humana en la tierra, un ex asesino a sueldo (Mark Dacascos), su esposa (Julie Condra) y su hija, Bree (Noelani Dacascos) , vive tranquilame'),
(46, 1, 'High School Musical', 100, 1, '98 min.', '2006', 'Kenny Ortega', 'Zac Efron, Vanessa H', 'Un popular atleta de secundaria y una chica académicamente talentosa obtienen papeles en el musical de la escuela y desarrollan una amistad que amenaza el orden social de East High.'),
(47, 1, 'High School Musical ', 100, 1, '106 min.', '2007', 'Kenny Ortega', 'Zac Efron, Vanessa H', 'La escuela terminó por verano y los East High Wildcats están listos para convertirlo en el momento de sus vidas después de conseguir trabajos en un club de campo adinerado propiedad de la familia de S'),
(48, 1, 'Bohemian Rhapsody', 120, 2, '134 min.', '2018', 'Bryan Singer', 'Rami Malek, Gwilym L', 'La historia de la legendaria banda de rock británica Queen y el cantante principal Freddie Mercury , antes de su famosa actuación en Live Aid (1985).'),
(49, 1, 'Gilda, no me arrepie', 120, 2, '118 min.', '2016', 'Lorena Muñoz', 'Natalia Oreiro, Ánge', 'Gilda, la artista, que comenzó su carrera respondiendo a un anuncio, hubo de sobreponerse al rechazo inicial de su familia, pero su voz y su carisma le ganaron un lugar en el estrellato, mitificándose'),
(50, 1, 'Escuela de rock', 100, 1, '109 min.', '2003', 'Richard Linklater', 'Jack Black, Joan Cus', 'Después de ser expulsado de su banda de rock, Dewey Finn se convierte en maestro sustituto de una escuela primaria privada, solo para intentar convertir su clase en una banda de rock.'),
(51, 1, '3 metros sobre el ci', 120, 2, '119 min.', '2010', 'Fernando González Mo', 'Mario Casas, Maria V', 'Una mujer privilegiada y un hombre temerario se enamoran a pesar de sus diferentes clases sociales.'),
(52, 1, 'Tengo ganas de ti', 120, 2, '2h', '2012', 'Fernando González Mo', 'Mario Casas, Clara L', 'La secuela de 3 Metros Sobre El Cielo, comienza con el regreso de H a su ciudad natal, donde volver a conectar con el pasado significa lucha y también un nuevo amor.'),
(53, 1, 'Grease', 120, 2, '110 min.', '1978', 'Randal Kleiser', 'John Travolta, Olivi', 'La buena chica Sandy Olsson y el engrasador Danny Zuko se enamoraron durante el verano. Cuando descubran inesperadamente que ahora están en la misma escuela secundaria, ¿podrán reavivar su romance?'),
(54, 1, 'Como si fuera la pri', 120, 2, '99 min.', '2004', 'Peter Segal', 'Adam Sandler, Drew B', 'Henry Roth es un hombre que le teme al compromiso hasta que conoce a la hermosa Lucy. Se llevan bien y Henry piensa que finalmente ha encontrado a la chica de sus sueños hasta que descubre que tiene p'),
(55, 1, 'Titanic', 120, 2, '195 min', '1997', 'James Cameron', 'Leonardo DiCaprio, K', 'Un aristócrata de diecisiete años se enamora de un artista amable pero pobre a bordo del lujoso y desafortunado RMS Titanic.'),
(56, 1, 'Joker ', 150, 3, '122 min.', '2019', 'Todd Phillips', 'Joaquin Phoenix, Rob', 'En Gotham City, el comediante con problemas mentales Arthur Fleck es ignorado y maltratado por la sociedad. Luego se embarca en una espiral descendente de revolución y crímenes sangrientos. Este camin'),
(57, 1, 'El lobo de Wall Stre', 150, 3, '180 min.', '2013', 'Martin Scorsese', 'Leonardo DiCaprio, J', 'Basado en la historia real de Jordan Belfort , desde su ascenso a un adinerado corredor de bolsa que vive la buena vida hasta su caída que involucra el crimen, la corrupción y el gobierno federal.'),
(58, 1, 'No respires', 150, 3, '88 min.', '2016', 'Fede Alvarez', 'Jane Levy, Dylan Min', 'Con la esperanza de marcharse con una enorme fortuna, un trío de ladrones irrumpe en la casa de un ciego que no es tan indefenso como parece.'),
(59, 1, 'La masacre de Texas ', 200, 4, '90 min', '2017', 'Alexandre Bustillo, ', 'Lili Taylor, Stephen', 'Leatherface adolescente escapa de un hospital psiquiátrico con otros tres reclusos, secuestra a una joven enfermera y la lleva a un viaje por carretera desde el infierno, mientras es perseguida por un'),
(60, 1, 'Ciudad de Dios', 150, 3, '130 min.', '2002', 'Fernando Meirelles, ', 'Alexandre Rodrigues,', 'En los barrios marginales de Río, los caminos de dos niños divergen mientras uno lucha por convertirse en fotógrafo y el otro en capo.'),
(61, 1, 'I Am not Your Negro', 120, 2, '95 min.', '2016', 'Raoul Peck', 'Samuel L. Jackson, H', 'El escritor James Baldwin realizó en 1979 un ensayo, Remember This House, sobre el racismo en Estados Unidos, hablando de su relación con Malcolm X, Martin Luther King, Medgar Evers, entre otros activ'),
(62, 1, 'Capturing the Friedm', 150, 3, '107 min.', '2003', 'Andrew Jarecki', 'Arnold Friedman, Ela', 'Documental sobre los Friedman, una familia judía aparentemente típica de clase media alta cuyo mundo se transforma instantáneamente cuando el padre y su hijo menor son arrestados y acusados ​​de críme'),
(63, 1, 'Life Itself', 150, 3, '121 min', '2014', 'Steve James', 'Roger Ebert, Chaz Eb', 'La vida y carrera del reconocido crítico de cine y comentarista social Roger Ebert.'),
(64, 1, 'The Shawshank Redemp', 150, 3, '2h 22min', '1995', 'Frank Darabont', ' Tim Robbins, Morgan', 'Un hombre inocente es enviado a una corrupta penitenciaria de Maine en 1947 y sentenciado a dos cadenas perpetuas por un doble asesinato.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pelicula_genero`
--

CREATE TABLE `pelicula_genero` (
  `id_pelicula_genero` int(2) NOT NULL,
  `id_pelicula` int(2) NOT NULL,
  `id_genero_subgenero` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pelicula_genero`
--

INSERT INTO `pelicula_genero` (`id_pelicula_genero`, `id_pelicula`, `id_genero_subgenero`) VALUES
(1, 1, 15),
(2, 1, 34),
(3, 2, 15),
(4, 2, 34),
(5, 3, 17),
(6, 3, 39),
(7, 4, 6),
(8, 4, 16),
(9, 4, 17),
(10, 4, 31),
(11, 5, 18),
(12, 5, 34),
(13, 5, 39),
(14, 6, 5),
(15, 6, 30),
(16, 6, 34),
(17, 6, 39),
(18, 7, 5),
(19, 7, 30),
(20, 7, 34),
(21, 7, 39),
(22, 8, 5),
(23, 8, 28),
(24, 8, 30),
(25, 8, 39),
(26, 9, 20),
(27, 9, 29),
(28, 9, 34),
(29, 10, 5),
(30, 10, 28),
(31, 10, 29),
(32, 10, 30),
(33, 11, 3),
(34, 11, 4),
(35, 12, 7),
(36, 12, 28),
(37, 13, 5),
(38, 13, 29),
(39, 14, 5),
(40, 14, 28),
(41, 14, 29),
(42, 15, 3),
(43, 15, 29),
(44, 15, 35),
(45, 16, 10),
(46, 16, 29),
(47, 16, 34),
(48, 16, 35),
(49, 17, 5),
(50, 17, 28),
(51, 17, 29),
(52, 18, 2),
(53, 18, 40),
(54, 19, 21),
(55, 20, 21),
(56, 21, 21),
(57, 22, 21),
(58, 23, 9),
(59, 23, 28),
(60, 23, 29),
(61, 23, 31),
(62, 24, 5),
(63, 24, 28),
(64, 24, 29),
(65, 25, 16),
(66, 25, 17),
(67, 26, 16),
(68, 26, 17),
(69, 27, 16),
(70, 28, 22),
(71, 28, 31),
(72, 28, 36),
(73, 29, 22),
(74, 29, 29),
(75, 29, 31),
(76, 29, 36),
(77, 30, 22),
(78, 30, 31),
(79, 30, 36),
(80, 31, 22),
(81, 31, 29),
(82, 31, 31),
(83, 31, 36),
(84, 32, 22),
(85, 32, 29),
(86, 32, 31),
(87, 32, 36),
(88, 33, 11),
(89, 33, 39),
(90, 34, 9),
(91, 34, 28),
(92, 34, 39),
(93, 35, 3),
(94, 35, 4),
(95, 35, 35),
(96, 35, 39),
(97, 36, 23),
(98, 37, 12),
(99, 37, 13),
(100, 37, 30),
(101, 37, 34),
(102, 37, 38),
(103, 38, 21),
(104, 38, 34),
(105, 38, 37),
(106, 39, 11),
(107, 39, 29),
(108, 39, 34),
(109, 40, 10),
(110, 40, 29),
(111, 40, 30),
(112, 40, 35),
(113, 40, 39),
(114, 40, 40),
(115, 41, 9),
(116, 41, 34),
(117, 41, 39),
(118, 41, 40),
(119, 42, 9),
(120, 42, 28),
(121, 42, 39),
(122, 42, 40),
(123, 43, 9),
(124, 43, 28),
(125, 43, 34),
(126, 43, 39),
(127, 43, 40),
(128, 44, 6),
(129, 44, 28),
(130, 45, 7),
(131, 45, 28),
(132, 45, 40),
(133, 46, 21),
(134, 46, 37),
(135, 47, 21),
(136, 47, 37),
(137, 48, 23),
(138, 48, 37),
(139, 49, 23),
(140, 49, 37),
(141, 50, 21),
(142, 50, 37),
(143, 51, 24),
(144, 51, 25),
(145, 51, 28),
(146, 52, 24),
(147, 52, 25),
(148, 52, 28),
(149, 53, 12),
(150, 53, 13),
(151, 53, 38),
(152, 54, 12),
(153, 54, 13),
(154, 54, 34),
(155, 55, 24),
(156, 55, 25),
(157, 56, 26),
(158, 56, 32),
(159, 56, 34),
(160, 57, 23),
(161, 57, 32),
(162, 58, 26),
(163, 58, 32),
(164, 58, 40),
(165, 59, 8),
(166, 59, 32),
(167, 59, 39),
(168, 60, 14),
(169, 60, 32),
(170, 60, 34),
(171, 61, 14),
(172, 62, 14),
(173, 63, 24),
(174, 63, 25),
(175, 64, 27),
(176, 64, 34);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subgenero`
--

CREATE TABLE `subgenero` (
  `id_subgenero` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `subgenero`
--

INSERT INTO `subgenero` (`id_subgenero`, `status`, `nombre`) VALUES
(1, 1, 'Humor Negro'),
(2, 1, 'Superheroes'),
(3, 1, 'Sobrenatural'),
(4, 1, 'Monstruos'),
(5, 1, 'Zombies'),
(6, 1, 'Slasher'),
(7, 1, 'Policial'),
(8, 1, 'Bélico'),
(9, 1, 'Artes Marciales'),
(10, 1, 'Comedia Romántica'),
(11, 1, 'Historico'),
(12, 1, 'Gangsters'),
(13, 1, 'Supervivencia'),
(14, 1, 'Terror Psicologico'),
(15, 1, 'Futurista'),
(16, 1, 'Humor'),
(17, 1, 'Animacion'),
(18, 1, 'Biografia'),
(19, 1, 'Drama Romantico'),
(20, 1, 'Thriller Psicologico'),
(21, 1, 'Thriller ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(2) NOT NULL,
  `status` int(1) NOT NULL,
  `nombre` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `fecha` datetime NOT NULL DEFAULT current_timestamp(),
  `fecha_nac` date NOT NULL,
  `usuario` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` int(15) NOT NULL,
  `pedidos` int(3) DEFAULT NULL,
  `dinero_gastado` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `status`, `nombre`, `apellido`, `fecha`, `fecha_nac`, `usuario`, `pass`, `email`, `telefono`, `pedidos`, `dinero_gastado`) VALUES
(1, 1, 'Roberto', 'Rocco', '2020-11-21 21:51:00', '1991-04-17', 'rocko', '123456', 'roberto.rocco@davinc', 1564567852, NULL, NULL),
(2, 1, 'Sebastian', 'Tolaba', '2020-11-23 05:18:41', '2020-11-11', 'seba17', '12345678', 'seba17@gmail.com', 0, NULL, NULL),
(4, 1, 'José', 'Hernandes', '2020-11-24 00:39:12', '1988-03-30', 'josehern', '123456', 'josehernandes@gmail.', 1542635874, NULL, NULL),
(5, 1, 'Armando', 'Barrera', '2020-11-24 00:41:24', '1993-05-25', 'armandobar', '123456', 'armandobarrera@hotma', 1564852365, NULL, NULL),
(6, 1, 'Jimena', 'Blanche', '2020-11-24 00:42:28', '1992-10-17', 'jimeblanch', '123456', 'blanchejimena@gmail.', 1542365895, NULL, NULL),
(7, 1, 'Esteban', 'Guillen', '2020-11-24 00:43:23', '1989-09-25', 'guillenest', '123456', 'estebanguillen@yahoo', 1567418523, NULL, NULL),
(8, 1, 'Diego', 'Rodas', '2020-11-24 00:44:10', '1980-12-29', 'rodasdiego', '123456', 'diegorodas@gmail.com', 1542365987, NULL, NULL),
(9, 1, 'Matias', 'Garcia', '2020-11-24 00:44:54', '1999-01-11', 'matgarcia', '123456', 'matiasgarcia@gmail.c', 1157489264, NULL, NULL),
(11, 1, 'Martin', 'Caruso', '2020-11-24 00:46:32', '1999-06-23', 'martincaru', '123456', 'martincaruso@yahoo.c', 1569624185, NULL, NULL),
(12, 1, 'Joaquin', 'Podestá', '2020-11-24 00:47:25', '1990-04-20', 'joapodesta', '123456', 'joapodesta@gmail.com', 1164859620, NULL, NULL),
(13, 1, 'Jhorky', 'Escalante', '2020-11-24 01:03:15', '1991-09-14', 'jhorky', '123', 'jhorky.91@gmail.com', 44300200, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_direccion`
--

CREATE TABLE `usuario_direccion` (
  `id_usuario_direccion` int(2) NOT NULL,
  `id_usuario` int(3) NOT NULL,
  `id_direccion` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario_direccion`
--

INSERT INTO `usuario_direccion` (`id_usuario_direccion`, `id_usuario`, `id_direccion`) VALUES
(1, 1, 1),
(3, 13, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indices de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  ADD PRIMARY KEY (`id_clasificacion`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`id_comentario`),
  ADD KEY `id_pelicula` (`id_pelicula`,`id_usuario`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`id_direccion`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `genero_subgenero`
--
ALTER TABLE `genero_subgenero`
  ADD PRIMARY KEY (`id_genero_subgenero`),
  ADD KEY `id_genero` (`id_genero`,`id_subgenero`),
  ADD KEY `id_subgenero` (`id_subgenero`);

--
-- Indices de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD PRIMARY KEY (`id_pelicula`),
  ADD KEY `pelicula_ibfk_3` (`id_clasificacion`);

--
-- Indices de la tabla `pelicula_genero`
--
ALTER TABLE `pelicula_genero`
  ADD PRIMARY KEY (`id_pelicula_genero`),
  ADD KEY `pelicula_genero_ibfk_1` (`id_pelicula`),
  ADD KEY `id_genero_subgenero` (`id_genero_subgenero`);

--
-- Indices de la tabla `subgenero`
--
ALTER TABLE `subgenero`
  ADD PRIMARY KEY (`id_subgenero`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_direccion`
--
ALTER TABLE `usuario_direccion`
  ADD PRIMARY KEY (`id_usuario_direccion`),
  ADD KEY `id_usuario` (`id_usuario`,`id_direccion`),
  ADD KEY `id_direccion` (`id_direccion`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `clasificacion`
--
ALTER TABLE `clasificacion`
  MODIFY `id_clasificacion` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `id_comentario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `id_direccion` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `id_genero` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `genero_subgenero`
--
ALTER TABLE `genero_subgenero`
  MODIFY `id_genero_subgenero` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `pelicula`
--
ALTER TABLE `pelicula`
  MODIFY `id_pelicula` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `pelicula_genero`
--
ALTER TABLE `pelicula_genero`
  MODIFY `id_pelicula_genero` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT de la tabla `subgenero`
--
ALTER TABLE `subgenero`
  MODIFY `id_subgenero` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuario_direccion`
--
ALTER TABLE `usuario_direccion`
  MODIFY `id_usuario_direccion` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`),
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`);

--
-- Filtros para la tabla `genero_subgenero`
--
ALTER TABLE `genero_subgenero`
  ADD CONSTRAINT `genero_subgenero_ibfk_1` FOREIGN KEY (`id_genero`) REFERENCES `genero` (`id_genero`),
  ADD CONSTRAINT `genero_subgenero_ibfk_2` FOREIGN KEY (`id_subgenero`) REFERENCES `subgenero` (`id_subgenero`);

--
-- Filtros para la tabla `pelicula`
--
ALTER TABLE `pelicula`
  ADD CONSTRAINT `pelicula_ibfk_1` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificacion` (`id_clasificacion`),
  ADD CONSTRAINT `pelicula_ibfk_3` FOREIGN KEY (`id_clasificacion`) REFERENCES `clasificacion` (`id_clasificacion`);

--
-- Filtros para la tabla `pelicula_genero`
--
ALTER TABLE `pelicula_genero`
  ADD CONSTRAINT `pelicula_genero_ibfk_1` FOREIGN KEY (`id_pelicula`) REFERENCES `pelicula` (`id_pelicula`),
  ADD CONSTRAINT `pelicula_genero_ibfk_2` FOREIGN KEY (`id_genero_subgenero`) REFERENCES `genero_subgenero` (`id_genero_subgenero`);

--
-- Filtros para la tabla `usuario_direccion`
--
ALTER TABLE `usuario_direccion`
  ADD CONSTRAINT `usuario_direccion_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `usuario_direccion_ibfk_2` FOREIGN KEY (`id_direccion`) REFERENCES `direccion` (`id_direccion`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
