-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Sam 25 Mai 2013 à 14:36
-- Version du serveur: 5.5.25
-- Version de PHP: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `moviesconnection`
--

-- --------------------------------------------------------

--
-- Structure de la table `mc_movies`
--

CREATE TABLE `mc_movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(300) COLLATE utf8mb4_unicode_ci NOT NULL,
  `release` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `synopsis` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `poster` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
