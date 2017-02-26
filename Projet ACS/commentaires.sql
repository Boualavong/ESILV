-- phpMyAdmin SQL Dump

-- version 4.2.11

-- http://www.phpmyadmin.net

--
-- Client :  127.0.0.1

-- Généré le :  Jeu 9 Avril 2015 à 10:53

-- Version du serveur :  5.6.21

-- Version de PHP :  5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- Base de données :  `html`

--

-- 
--------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE IF NOT EXISTS `commentaires` (
  `Civilité` varchar(30) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `Note` int(10) NOT NULL,
  `commentaire` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Contenu de la table `commentaires`
--

INSERT INTO `commentaires` (`Civilité`, `Nom`, `email`, `Note`, `commentaire`) VALUES
('Madame', 'Patate', 'madamepatate@pat.ate', 5, 'Un commentaire');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
