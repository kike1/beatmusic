-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-01-2016 a las 23:53:57
-- Versión del servidor: 5.6.17
-- Versión de PHP: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `beatmusic`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `album`
--

CREATE TABLE IF NOT EXISTS `album` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_artista` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `album`
--

INSERT INTO `album` (`id`, `id_artista`, `nombre`) VALUES
(1, 1, 'album1'),
(2, 2, 'album2'),
(3, 0, 'album3'),
(4, 0, 'album4');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista`
--

CREATE TABLE IF NOT EXISTS `artista` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(128) NOT NULL,
  `img` varchar(512) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nombre` (`nombre`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `artista`
--

INSERT INTO `artista` (`id`, `nombre`, `img`, `descripcion`) VALUES
(1, 'Tiesto', 'tiesto.jpg', 'Tijs Michiel Verwest (n. 17 de enero de 1969, en Breda, Países Bajos)3 es un DJ y productor neerlandés. A pesar de que ha utilizado muchos alias en el pasado, es más conocido por su trabajo como DJ Tiësto o simplemente como Tiësto, un alias que proviene de su sobrenombre de la infancia.'),
(2, 'Hardwell', 'hardwell.jpg', 'Robbert van de Corput, (n. 7 de enero de 1988, en Breda, Países Bajos), mejor conocido como Hardwell, es un DJ y productor neerlandés orientado al género Progressive House. Actualmente, ocupa el puesto #2 en los 100 mejores DJ''s del mundo según la encuesta anual que realiza la revista DJmag.1 2 Hardwell es muy conocido por sus actuaciones en directo en los principales festivales de música como Tomorrowland y Ultra Music Festival y por su exitoso sencillo llamado "Spaceman".'),
(3, 'Wiz_Khalifa', 'wizkhalifa.jpg', 'Cameron Jibril Thomaz (Minot, Dakota del Norte; 8 de septiembre de 1987), más conocido como Wiz Khalifa, es un rapero, cantante, compositor y actor estadounidense. Wiz Khalifa es hijo de un padre militar.1 Sus padres se divorciaron cuando tenía unos tres años. Vivió en Alemania, Inglaterra y Japón antes de irse a vivir a Pittsburgh donde llevó a cabo sus estudios en el Taylor Allderdice High School. Realizó su debut con el álbum Show and Prove, en 2006, lo que le llevó a firmar por la Warner Bros. Records en 2007. Wiz Khalifa lanzó su segundo álbum Deal or No Deal, en noviembre de 2009. En 2011 se publicó su tercer álbum, Rolling Papers, que cuenta con los sencillos: "Black and Yellow", "Roll Up", "On My Level" y "No Sleep". Su cuarto disco, O.N.I.F.C., salió el 4 de octubre de 2012. Y su último álbum, Blacc Hollywood, salió el 18 de de agosto de 2014, cuenta con canciones como "We dem boyz", "Promises" y "So high".'),
(4, 'Drake', 'drake.jpg', 'Aubrey Drake Graham (24 de octubre de 1986, Toronto, Ontario), conocido artísticamente como Drake, es un artista canadiense, rapero, compositor y actor. Originalmente se hizo conocido por interpretar al personaje Jimmy Brooks de la serie de televisión Degrassi: The Next Generation. Más tarde saltó a la fama como cantante de rap, lanzando varios mixtapes como Room for Improvement antes de firmar con Lil Wayne en la compañía discográfica estadounidense Young Money Entertainment en junio de 2009.1'),
(5, 'Cedric_Gervais', 'cedric.jpg', 'Cédric DePasquale1 más conocido por su nombre artístico Cédric Gervais, es un disc jockey y productor francés de música house, oriundo de Marsella. Actualmente reside en Miami, Florida.\r\nCedric comenzó a mezclar a los trece años, teniendo como grandes influencias musicales a Laurent Garnier y Carl Cox.5 Empezó a presentarse como DJ a los quince años en su Francia natal, convirtiéndose así, en uno de los residentes más jóvenes del legendario club Le Queen de París.'),
(6, 'Damian_Marley', 'damian.jpg', 'Damian Robert Nesta "Jr. Gong" Marley (nacido el 21 de julio de 1978 en Kingston, Jamaica) es un músico jamaicano, ganador de 3 premios Grammy, artista de roots reggae y dancehall, es uno de los hijos menores de Bob Marley, y el único hijo entre Bob y Cindy Breakspeare, Miss Mundo de 1976. Su apodo es Junior Gong, derivación del de su padre, Tuff Gong. Damian ha estado actuando desde los 13 años en su primer grupo que salió de la escuela donde estudiaba su bachillerato. Comparte con la mayor parte de la familia Marley una larga carrera musical. A diferencia de sus hermanos y hermanas, su especialidad musical es, sin embargo, el raggamuffin. Actualmente forma parte de la banda de reggae y rock, SuperHeavy junto a Mick Jagger.\r\n\r\nComo su padre antes que él y el resto de la familia Marley, es un rastafari y su música refleja tanto sus creencias como los principios dirigentes rastafaris de un amor, un planeta, y la libertad para todo. A pesar de que se pasa la mayor parte del año viajando, reside en Kingston y Mi'),
(7, 'Marc_Dosem', 'dosem.jpg', 'Marc Dosem nació a principios de los años ochenta en el corazón de Cataluña, en Girona, España, en el comienzo de una era de uso común de los sintetizadores de hardware en la música y creció con el auge de sonido electrónica de baile de los años 90. Después de algunos años de jugar con los ordenadores personales de primera generación durante su infancia, el joven catalán comenzó a componer sus primeras producciones personales con la ayuda de los primeros softwares de producción de música digitales. Las influencias musicales de Marc provienen de los sonidos del dub, house y techno y de la escena discotecas de Barcelona y Girona.'),
(8, 'Dub_Vision', 'dubvision.jpg', 'DubVision es un dúo holandés de música electrónica compuesto por los hermanos Stephan Leicher y Victor Leicher (Stephan nacido en 1981, Victor nacido en 1989), perteneciente al sello discográfico Spinnin'' Records.'),
(9, 'Fedde_Le_Grand', 'fedde_le_grand.jpg', 'Fedde le Grand (n. 7 de septiembre de 1977 en Utrecht, Países Bajos) es un DJ y productor holandés. Se dio a conocer al público con el single "Put your hands up for Detroit", editado en 2006. En 2014 se ubicó en el puesto 35 según la votación realizada por la revista DJ Magazine. En 2011 alcanzó su mejor performance llegando al puesto 14.'),
(10, 'John_Dahlbäck', 'johndalback.jpg', 'John Dahlbäck es un productor y DJ sueco de música house.John Dahlback nació en 1985 en un pequeño pueblo no muy lejos de Estocolmo.'),
(11, 'Skrillex', 'skrillex.jpg', 'Sonny John Moore (Los Ángeles, California, 15 de enero de 1988),1 más conocido por su nombre artístico Skrillex, es un productor estadounidense de música electrónica de los géneros dubstep, brostep y electro house, ex-vocalista y guitarrista de su primera banda pop-punk, atRisk entre 2001 a 20032 y ex-vocalista de la banda de post-hardcore From First to Last entre los años 2004 y 2007.3 4\r\n\r\nComo productor, destaca la implementación de Ableton Live. En noviembre de 2011, Skrillex fue nominado a cinco categorías las cuales son Premios Grammy, de los cuales ganó tres, mejor remix por «Cinema» de Benny Benassi, mejor grabación de dance por «Scary Monsters and Nice Sprites» y mejor álbum. En 2014, estrenó su álbum debut Recess, y actualmente ocupa el puesto #9 en la encuesta realizada por la revista DJmag 5 .\r\n\r\nA él se le adjudica el hecho de que la música dubstep haya alcanzado gran popularidad en los últimos años,6 7 , y actualmente trabaja en un dúo con Diplo, llamado Jack Ü, y juntos ha hecho colaboraciones '),
(12, 'Tote_King', 'tote.jpg', 'Manuel González Rodríguez, artísticamente conocido como ToteKing (n. Sevilla; 13 de diciembre de 1978) es un rapero. Es hermano de Shotta, también MC.ToteKing estudió filología inglesa en Universidad de Sevilla2 aunque no se llegó a licenciar. La compaginaba además de con rap, con el baloncesto; llegando a jugar como base en 2ª liga Nacional.3 La afición por este deporte le llevó a realizar junto a Dj Griffi, el tema musical promocional de la cadena de televisión La Sexta para el Mundial de Baloncesto de Japón 2006 titulada "Al rojo vivo".4 A su vez, en el verano 2008 fue la imagen promocional del Campus de la web Jugones.es dedicado al baloncesto y al hip hop, pero este no llegó a abrirse al público.[cita requerida] También trabajó en la hostelería, como indica en su canción "Como en casa".Plantilla:Cita letra canción');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista_album`
--

CREATE TABLE IF NOT EXISTS `artista_album` (
  `id_artista` int(11) NOT NULL,
  `id_album` int(11) NOT NULL,
  PRIMARY KEY (`id_artista`,`id_album`),
  KEY `id_artista` (`id_artista`,`id_album`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artista_album`
--

INSERT INTO `artista_album` (`id_artista`, `id_album`) VALUES
(1, 1),
(1, 3),
(1, 4),
(2, 2),
(2, 4),
(2, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista_cancion`
--

CREATE TABLE IF NOT EXISTS `artista_cancion` (
  `id_artista` int(11) NOT NULL,
  `id_cancion` int(11) NOT NULL,
  PRIMARY KEY (`id_artista`,`id_cancion`),
  KEY `id_artista` (`id_artista`,`id_cancion`),
  KEY `id_cancion` (`id_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `artista_cancion`
--

INSERT INTO `artista_cancion` (`id_artista`, `id_cancion`) VALUES
(1, 1),
(2, 2),
(1, 3),
(2, 4),
(1, 5),
(2, 6),
(3, 6),
(4, 7),
(3, 8),
(4, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cancion`
--

CREATE TABLE IF NOT EXISTS `cancion` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_album` int(16) NOT NULL,
  `id_sello` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `img` varchar(128) NOT NULL,
  `likes` int(16) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_album` (`id_album`),
  KEY `id_sello` (`id_sello`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcado de datos para la tabla `cancion`
--

INSERT INTO `cancion` (`id`, `id_album`, `id_sello`, `id_artista`, `nombre`, `img`, `likes`, `fecha_creacion`) VALUES
(1, 1, 1, 1, 'prueba', '12680829.jpg', 1, '2016-01-02 23:00:00'),
(2, 2, 1, 2, 'mixtape 2016', '12810518.jpg', 13, '0000-00-00 00:00:00'),
(3, 2, 1, 3, 'mixtape vol. 2 2016', '12829906.jpg', 2, '0000-00-00 00:00:00'),
(4, 1, 1, 4, 'Drake - Hotline Bling (192kbit)', '12680829.jpg', 3, '2016-01-03 20:05:27'),
(5, 2, 3, 2, 'mixtape 3', '12844369.jpg', 4, '2016-01-03 20:05:27'),
(6, 1, 2, 1, 'prueba 3', '12853015.jpg', 2, '2016-01-03 20:06:08'),
(7, 2, 2, 4, 'mixtape 4', '12774914.jpg', 1, '2016-01-03 20:06:08'),
(8, 2, 1, 3, 'Carry on', '12774914.jpg', 5, '2016-01-03 22:43:10'),
(9, 3, 3, 4, 'Gotta love', '12774914.jpg', 55, '2016-01-03 22:43:10'),
(10, 2, 1, 3, 'Into the wild', '12774914.jpg', 2, '2016-01-03 22:45:18'),
(11, 3, 2, 2, 'Feel Good', '12774914.jpg', 15, '2016-01-03 22:45:18'),
(12, 1, 2, 1, 'Home', '12928683.jpg', 7, '2016-01-03 22:46:24'),
(13, 1, 3, 1, 'Bring it back', '12928683.jpg', 7, '2016-01-03 22:46:24'),
(14, 3, 1, 4, 'Home', '12928683.jpg', 24, '2016-01-03 22:46:40'),
(15, 5, 2, 3, 'Bring it back', '12928683.jpg', 9, '2016-01-03 22:46:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `evento`
--

CREATE TABLE IF NOT EXISTS `evento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `fecha` date NOT NULL,
  `duracion` int(10) NOT NULL,
  `lugar` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=47 ;

--
-- Volcado de datos para la tabla `evento`
--

INSERT INTO `evento` (`id`, `nombre`, `fecha`, `duracion`, `lugar`) VALUES
(1, 'ACTUAL FESTIVAL 2016', '2016-01-02', 5, 'Logroño'),
(2, 'MADRID WINTER FESTIVAL 2016', '2016-01-01', 1, 'Madrid'),
(5, 'LURRAZPIKO FESTA 2016', '2016-01-29', 2, 'San Sebastian'),
(6, 'GUITAR FESTIVAL BCN 2016', '2016-02-24', 3, 'Barcelona'),
(9, 'XTRARRADIO MUSICFEST 2016', '2016-01-05', 2, 'Barcelona'),
(10, 'EL DÍA DE LA MARMOTA 2016', '2016-02-06', 2, 'Sevilla'),
(11, 'SOUND ISIDRO 2016', '2016-02-11', 3, 'Madrid'),
(12, 'EMERGÈNCIA FESTIVAL 2016', '2016-02-13', 2, 'Barcelona'),
(13, 'TWINPALM 2016', '2016-02-27', 1, 'L’hospitalet de l’Infant'),
(14, 'MUTEK 2016 BARCELONA', '2016-03-02', 4, 'Barcelona'),
(15, 'WOMBAT FEST 2016', '2016-03-04', 3, 'Bilbao'),
(16, 'ESMORGA FEST 2016', '2016-03-05', 2, 'Sarria, Lugo'),
(17, 'MADRID POPFEST 2016', '2016-03-11', 2, 'Madrid'),
(18, 'PRIMAVERA TROMPETERA 2016', '2016-03-12', 1, 'Jerez de la Frontera'),
(19, 'AZERO’S ROCK FESTIVAL 2016', '2016-03-12', 1, 'El Astillero, Cantabria'),
(20, 'SANSAN FESTIVAL 2016', '2016-03-24', 4, 'Gandia, Valencia'),
(21, 'FACE FESTIVAL 2016', '2016-03-24', 3, 'Madrid'),
(22, 'VIÑA ROCK 2016', '2016-04-28', 3, 'Villarobledo'),
(23, 'GIJÓN SOUND FESTIVAL 2016', '2016-04-15', 2, 'Gijón'),
(24, 'FESTIVAL SUEÑOS DE LIBERTAD 2016 ', '2016-04-22', 2, 'Ibiza'),
(25, 'L.E.V. 2016', '2016-04-28', 3, 'Gijón'),
(26, 'FIV 2016', '2016-04-29', 2, 'Vilalba, Lugo'),
(27, 'SOS 4.8 2016', '2016-05-06', 2, 'Murcia'),
(28, 'EN ORBITA 2016', '2016-05-14', 1, 'Granada'),
(29, 'FESTIVAL TOMAVISTAS 2016', '2016-05-20', 3, 'Madrid'),
(30, 'MONTGOROCK FESTIVAL 2016', '2016-05-20', 2, 'Jávea, Alicante'),
(31, 'PRIMAVERA SOUND 2016', '2016-06-01', 4, 'Barcelona'),
(32, 'SÓNAR 2016', '2016-06-16', 3, 'Barcelona'),
(33, 'MAD MUSIC CITY 2016 (DÍA DE LA MÚSICA)', '2016-06-15', 5, 'Madrid'),
(34, 'PALENCIA SONORA 2016', '2016-06-10', 2, 'Palencia'),
(35, 'FESTIVAL DE LOS SENTIDOS 2016', '2016-06-17', 3, 'La Roda, Albacete'),
(36, 'AZKENA ROCK FESTIVAL 2016', '2016-06-17', 3, 'Isla Cristina, Huelva'),
(37, 'POLIFONIK SOUND 2016', '2016-06-24', 2, 'Barbastro, Huesca'),
(38, 'A SUMMER STORY 2016', '2016-06-24', 2, 'Arganda del Rey, Madrid'),
(39, 'CULTUREFEST 2016', '2016-06-24', 2, 'Tarazona, Zaragoza'),
(40, 'EMDIV MUSIC FESTIVAL 2016', '2016-06-25', 1, 'Elda, Alicante'),
(41, 'FIB 2016', '2016-07-14', 4, 'Benicàssim'),
(42, 'NO SIN MÚSICA FESTIVAL 2016', '2016-07-21', 3, 'San Felipe Neri, Cádiz'),
(43, 'WEEKEND BEACH FESTIVAL 2016', '2016-07-06', 4, 'Torre del Mar, Málaga'),
(44, 'LOW FESTIVAL 2016', '2016-07-29', 3, 'Benidorm'),
(45, 'JAZZALDIA 2016', '2016-07-20', 6, 'San Sebastian - Donostia'),
(46, 'ROCK FEST BCN 2016', '2016-07-15', 3, 'Coloma de Gramenet, Barcelona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sello`
--

CREATE TABLE IF NOT EXISTS `sello` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(512) NOT NULL,
  `img` varchar(512) NOT NULL,
  `descripcion` varchar(1024) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `sello`
--

INSERT INTO `sello` (`id`, `nombre`, `img`, `descripcion`) VALUES
(1, 'Spinnin Records', 'spinnin.jpg', 'sello de música electrónica'),
(2, 'Tylor', 'tylor.jpg', 'sello de música hiphop'),
(3, 'Doorn Records', 'doorn.jpg', 'Sander van Doorn , es un DJ y productor holandés de música trance, actualmente orientado al electro house. Se encuentra en el TOP 100 de la lista DJmag debutando el año 2006 en el número 32. En 2007 se ubicó en el puesto número 15. Ya en el 2008 en el puesto número 13 y en el 2009 en el puesto número 10 siendo su mejor performance en la encuesta.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sello_artista`
--

CREATE TABLE IF NOT EXISTS `sello_artista` (
  `id_sello` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL,
  PRIMARY KEY (`id_sello`,`id_artista`),
  KEY `id_sello` (`id_sello`,`id_artista`),
  KEY `id_artista` (`id_artista`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nick` varchar(64) NOT NULL,
  `password` varchar(512) NOT NULL,
  `tipo` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nick`, `password`, `tipo`) VALUES
(1, 'kike', '066fc7b468bbf62055fe69a4f097de90', 'admin'),
(3, 'kike1', 'bf2d0283ea146823ac357b2bb08b8ee6', 'usuario'),
(4, 'kike2', 'f4d5af20f3f8ca890d997ebb5d9b6dcf', 'usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_likes`
--

CREATE TABLE IF NOT EXISTS `usuario_likes` (
  `id_usuario` int(11) NOT NULL,
  `id_cancion` int(11) NOT NULL,
  PRIMARY KEY (`id_usuario`,`id_cancion`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario_likes`
--

INSERT INTO `usuario_likes` (`id_usuario`, `id_cancion`) VALUES
(1, 4),
(1, 12),
(1, 14),
(1, 15);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `artista_album`
--
ALTER TABLE `artista_album`
  ADD CONSTRAINT `artista_album_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`);

--
-- Filtros para la tabla `artista_cancion`
--
ALTER TABLE `artista_cancion`
  ADD CONSTRAINT `artista_cancion_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`),
  ADD CONSTRAINT `artista_cancion_ibfk_2` FOREIGN KEY (`id_cancion`) REFERENCES `cancion` (`id`);

--
-- Filtros para la tabla `sello_artista`
--
ALTER TABLE `sello_artista`
  ADD CONSTRAINT `sello_artista_ibfk_1` FOREIGN KEY (`id_sello`) REFERENCES `sello` (`id`),
  ADD CONSTRAINT `sello_artista_ibfk_2` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
