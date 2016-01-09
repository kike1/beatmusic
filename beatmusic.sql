-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 09, 2016 at 07:53 PM
-- Server version: 5.5.38
-- PHP Version: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `beatmusic`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
`id` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `id_artista`, `nombre`) VALUES
(1, 1, 'album1'),
(2, 2, 'album2'),
(3, 0, 'album3'),
(4, 0, 'album4');

-- --------------------------------------------------------

--
-- Table structure for table `artista`
--

CREATE TABLE `artista` (
`id` int(16) NOT NULL,
  `nombre` varchar(128) NOT NULL,
  `img` varchar(512) NOT NULL,
  `descripcion` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artista`
--

INSERT INTO `artista` (`id`, `nombre`, `img`, `descripcion`) VALUES
(1, 'Tiesto', 'tiesto.jpg', 'Tijs Michiel Verwest (n. 17 de enero de 1969, en Breda, Países Bajos)3 es un DJ y productor neerlandés. A pesar de que ha utilizado muchos alias en el pasado, es más conocido por su trabajo como DJ Tiësto o simplemente como Tiësto, un alias que proviene de su sobrenombre de la infancia.'),
(2, 'Hardwell', 'hardwell.jpg', 'Robbert van de Corput, (n. 7 de enero de 1988, en Breda, Países Bajos), mejor conocido como Hardwell, es un DJ y productor neerlandés orientado al género Progressive House. Actualmente, ocupa el puesto #2 en los 100 mejores DJ''s del mundo según la encuesta anual que realiza la revista DJmag.1 2 Hardwell es muy conocido por sus actuaciones en directo en los principales festivales de música como Tomorrowland y Ultra Music Festival y por su exitoso sencillo llamado "Spaceman".'),
(3, 'Wiz Khalifa', 'wizkhalifa.jpg', ''),
(4, 'Drake', 'drake.jpg', 'Aubrey Drake Graham (24 de octubre de 1986, Toronto, Ontario), conocido artísticamente como Drake, es un artista canadiense, rapero, compositor y actor. Originalmente se hizo conocido por interpretar al personaje Jimmy Brooks de la serie de televisión Degrassi: The Next Generation. Más tarde saltó a la fama como cantante de rap, lanzando varios mixtapes como Room for Improvement antes de firmar con Lil Wayne en la compañía discográfica estadounidense Young Money Entertainment en junio de 2009.1');

-- --------------------------------------------------------

--
-- Table structure for table `artista_album`
--

CREATE TABLE `artista_album` (
  `id_artista` int(11) NOT NULL,
  `id_album` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artista_album`
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
-- Table structure for table `artista_cancion`
--

CREATE TABLE `artista_cancion` (
  `id_artista` int(11) NOT NULL,
  `id_cancion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artista_cancion`
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
-- Table structure for table `cancion`
--

CREATE TABLE `cancion` (
`id` int(16) NOT NULL,
  `id_album` int(16) NOT NULL,
  `id_sello` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `img` varchar(128) NOT NULL,
  `likes` int(16) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cancion`
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
-- Table structure for table `sello`
--

CREATE TABLE `sello` (
`id` int(16) NOT NULL,
  `nombre` varchar(512) NOT NULL,
  `img` varchar(512) NOT NULL,
  `descripcion` varchar(1024) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sello`
--

INSERT INTO `sello` (`id`, `nombre`, `img`, `descripcion`) VALUES
(1, 'Spinnin Records', 'spinnin.jpg', 'sello de música electrónica'),
(2, 'Tylor Gang', 'tylor.jpg', 'sello de música hiphop'),
(3, 'Doorn Records', 'doorn.jpg', 'Sander van Doorn , es un DJ y productor holandés de música trance, actualmente orientado al electro house. Se encuentra en el TOP 100 de la lista DJmag debutando el año 2006 en el número 32. En 2007 se ubicó en el puesto número 15. Ya en el 2008 en el puesto número 13 y en el 2009 en el puesto número 10 siendo su mejor performance en la encuesta.');

-- --------------------------------------------------------

--
-- Table structure for table `sello_artista`
--

CREATE TABLE `sello_artista` (
  `id_sello` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
`id` int(11) NOT NULL,
  `nick` varchar(64) NOT NULL,
  `password` varchar(512) NOT NULL,
  `tipo` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`id`, `nick`, `password`, `tipo`) VALUES
(1, 'kike', '066fc7b468bbf62055fe69a4f097de90', 'admin'),
(3, 'kike1', 'bf2d0283ea146823ac357b2bb08b8ee6', 'usuario'),
(4, 'kike2', 'f4d5af20f3f8ca890d997ebb5d9b6dcf', 'usuario');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_likes`
--

CREATE TABLE `usuario_likes` (
  `id_usuario` int(11) NOT NULL,
  `id_cancion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usuario_likes`
--

INSERT INTO `usuario_likes` (`id_usuario`, `id_cancion`) VALUES
(1, 4),
(1, 12),
(1, 14),
(1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artista`
--
ALTER TABLE `artista`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `nombre` (`nombre`);

--
-- Indexes for table `artista_album`
--
ALTER TABLE `artista_album`
 ADD PRIMARY KEY (`id_artista`,`id_album`), ADD KEY `id_artista` (`id_artista`,`id_album`);

--
-- Indexes for table `artista_cancion`
--
ALTER TABLE `artista_cancion`
 ADD PRIMARY KEY (`id_artista`,`id_cancion`), ADD KEY `id_artista` (`id_artista`,`id_cancion`), ADD KEY `id_cancion` (`id_cancion`);

--
-- Indexes for table `cancion`
--
ALTER TABLE `cancion`
 ADD PRIMARY KEY (`id`), ADD KEY `id_album` (`id_album`), ADD KEY `id_sello` (`id_sello`);

--
-- Indexes for table `sello`
--
ALTER TABLE `sello`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sello_artista`
--
ALTER TABLE `sello_artista`
 ADD PRIMARY KEY (`id_sello`,`id_artista`), ADD KEY `id_sello` (`id_sello`,`id_artista`), ADD KEY `id_artista` (`id_artista`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario_likes`
--
ALTER TABLE `usuario_likes`
 ADD PRIMARY KEY (`id_usuario`,`id_cancion`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `artista`
--
ALTER TABLE `artista`
MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cancion`
--
ALTER TABLE `cancion`
MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `sello`
--
ALTER TABLE `sello`
MODIFY `id` int(16) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `artista_album`
--
ALTER TABLE `artista_album`
ADD CONSTRAINT `artista_album_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`);

--
-- Constraints for table `artista_cancion`
--
ALTER TABLE `artista_cancion`
ADD CONSTRAINT `artista_cancion_ibfk_1` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`),
ADD CONSTRAINT `artista_cancion_ibfk_2` FOREIGN KEY (`id_cancion`) REFERENCES `cancion` (`id`);

--
-- Constraints for table `sello_artista`
--
ALTER TABLE `sello_artista`
ADD CONSTRAINT `sello_artista_ibfk_1` FOREIGN KEY (`id_sello`) REFERENCES `sello` (`id`),
ADD CONSTRAINT `sello_artista_ibfk_2` FOREIGN KEY (`id_artista`) REFERENCES `artista` (`id`);
