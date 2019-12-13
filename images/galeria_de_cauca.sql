-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 11 déc. 2019 à 10:13
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `galeria_de_cauca`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `_id_admin` int(1) NOT NULL,
  `name_admin` varchar(20) NOT NULL,
  `password_admin` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`_id_admin`, `name_admin`, `password_admin`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`_id`, `email`, `prenom`, `nom`, `message`) VALUES
(1, 'lili@lili.com', 'Lionel', 'Tran', 'COucou'),
(2, 'lili@lili.com', 'Lil', 'Lil', 'Coucou'),
(3, '', '', '', 'Bien le aurevoir!');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prix` int(11) NOT NULL,
  `message` varchar(50) NOT NULL,
  `id_oeuvre` int(11) NOT NULL,
  PRIMARY KEY (`_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `_id_message` int(11) NOT NULL AUTO_INCREMENT,
  `message_admin` varchar(50) NOT NULL,
  `message_user` varchar(50) NOT NULL,
  `message_contenu` varchar(255) NOT NULL,
  PRIMARY KEY (`_id_message`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`_id_message`, `message_admin`, `message_user`, `message_contenu`) VALUES
(1, '1', 'lionel', 'Bien le bonjour'),
(2, '1', 'hello', 'Bien'),
(3, '1', 'lionel', 'COucou'),
(4, '1', 'lionel', 'COucou'),
(5, '1', 'lionel', ''),
(6, '1', 'lionel', ''),
(7, '1', 'lionel', ''),
(8, '1', '', ''),
(9, '1', '', ''),
(10, '1', '', 'Bien le matin'),
(11, '1', '', 'Bien le quoi ?'),
(12, '1', '', 'Et la session ?'),
(13, '1', '', 'Blablabli');

-- --------------------------------------------------------

--
-- Structure de la table `oeuvre`
--

DROP TABLE IF EXISTS `oeuvre`;
CREATE TABLE IF NOT EXISTS `oeuvre` (
  `_id_oeuvre` int(11) NOT NULL AUTO_INCREMENT,
  `nom_oeuvre` varchar(50) NOT NULL,
  `date_oeuvre` varchar(50) NOT NULL,
  `description_oeuvre` varchar(254) NOT NULL,
  `poids_oeuvre` int(10) NOT NULL,
  `hauteur_oeuvre` int(10) NOT NULL,
  `longueur_oeuvre` int(10) NOT NULL,
  PRIMARY KEY (`_id_oeuvre`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `oeuvre`
--

INSERT INTO `oeuvre` (`_id_oeuvre`, `nom_oeuvre`, `date_oeuvre`, `description_oeuvre`, `poids_oeuvre`, `hauteur_oeuvre`, `longueur_oeuvre`) VALUES
(1, 'Statuette en pierre', 'IIIe siècle', 'Statuette en pierre fait à la main ', 5, 0, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `mot_passe` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `email`, `nom`, `prenom`, `mot_passe`) VALUES
(2, 'lionel.tran@eemi.com', 'Tran', 'Lionel', 'password'),
(3, 'amine@benayad.com', 'Benayad', 'Amine', 'password'),
(4, '', '', '', ''),
(5, 'test@test.mail', 'NomTest', 'PrenomTest', 'password'),
(6, 'test@test.com', 'NomT', 'PrenomT', 'password'),
(7, 'test@test.com', 'NomT', 'PrenomT', 'password'),
(8, 'isaure@delutiis.com', 'De Lutiis', 'Isaure', 'password');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
