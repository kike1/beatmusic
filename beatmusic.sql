-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 03, 2016 at 11:53 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`id`, `id_artista`, `nombre`) VALUES
(1, 1, 'album1'),
(2, 2, 'album2');

-- --------------------------------------------------------

--
-- Table structure for table `artista`
--

CREATE TABLE `artista` (
`id` int(16) NOT NULL,
  `nombre` varchar(256) NOT NULL,
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
(4, 'Drake', 'drake.jpg', '');

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
(1, 3),
(1, 5),
(2, 2),
(2, 4),
(2, 6),
(3, 6),
(3, 8),
(4, 7),
(4, 9);

-- --------------------------------------------------------

--
-- Table structure for table `cancion`
--

CREATE TABLE `cancion` (
`id` int(16) NOT NULL,
  `id_album` int(16) NOT NULL,
  `nombre` varchar(256) NOT NULL,
  `img` varchar(128) NOT NULL,
  `likes` int(16) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cancion`
--

INSERT INTO `cancion` (`id`, `id_album`, `nombre`, `img`, `likes`, `fecha_creacion`) VALUES
(1, 1, 'prueba', '12680829.jpg', 1, '2016-01-02 23:00:00'),
(2, 2, 'mixtape 2016', '12810518.jpg', 13, '0000-00-00 00:00:00'),
(3, 2, 'mixtape vol. 2 2016', '12829906.jpg', 2, '0000-00-00 00:00:00'),
(4, 1, 'prueba1', '12680829.jpg', 2, '2016-01-03 20:05:27'),
(5, 2, 'mixtape 3', '12844369.jpg', 4, '2016-01-03 20:05:27'),
(6, 1, 'prueba 3', '12853015.jpg', 2, '2016-01-03 20:06:08'),
(7, 2, 'mixtape 4', '12774914.jpg', 1, '2016-01-03 20:06:08'),
(8, 2, 'Carry on', '12774914.jpg', 5, '2016-01-03 22:43:10'),
(9, 3, 'Gotta love', '12774914.jpg', 55, '2016-01-03 22:43:10'),
(10, 2, 'Into the wild', '12774914.jpg', 33, '2016-01-03 22:45:18'),
(11, 3, 'Feel Good', '12774914.jpg', 15, '2016-01-03 22:45:18'),
(12, 0, 'Home', '12928683.jpg', 5, '2016-01-03 22:46:24'),
(13, 0, 'Bring it back', '12928683.jpg', 7, '2016-01-03 22:46:24'),
(14, 3, 'Home', '12928683.jpg', 22, '2016-01-03 22:46:40'),
(15, 5, 'Bring it back', '12928683.jpg', 65, '2016-01-03 22:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `sello`
--

CREATE TABLE `sello` (
`id` int(16) NOT NULL,
  `nombre` varchar(512) NOT NULL,
  `img` varchar(512) NOT NULL,
  `descripcion` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for table `tipousuario`
--

CREATE TABLE `tipousuario` (
`id` int(11) NOT NULL,
  `nombre` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
`id` int(11) NOT NULL,
  `nick` varchar(64) NOT NULL,
  `password` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `artista_album`
--
ALTER TABLE `artista_album`
 ADD PRIMARY KEY (`id_artista`,`id_album`);

--
-- Indexes for table `artista_cancion`
--
ALTER TABLE `artista_cancion`
 ADD PRIMARY KEY (`id_artista`,`id_cancion`);

--
-- Indexes for table `cancion`
--
ALTER TABLE `cancion`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sello`
--
ALTER TABLE `sello`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sello_artista`
--
ALTER TABLE `sello_artista`
 ADD PRIMARY KEY (`id_sello`,`id_artista`);

--
-- Indexes for table `tipousuario`
--
ALTER TABLE `tipousuario`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
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
MODIFY `id` int(16) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tipousuario`
--
ALTER TABLE `tipousuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;