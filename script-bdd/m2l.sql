-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 10 mai 2019 à 18:46
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `m2l`
--

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

DROP TABLE IF EXISTS `formation`;
CREATE TABLE IF NOT EXISTS `formation` (
  `idFormation` int(11) NOT NULL AUTO_INCREMENT,
  `nomFormation` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `objectifFormation` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `couts` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idFormation`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `formation`
--

INSERT INTO `formation` (`idFormation`, `nomFormation`, `objectifFormation`, `couts`) VALUES
(1, 'Alimentation du sportif                           ', 'Notions de base - Régimes adaptés à la compétition : préparation - période d\'effort - récupération', '150 euros'),
(2, 'Traumatologie sportive                            ', 'Définitions - Inventaire des pathologies - Traitement - Prévention', '250 euros'),
(3, 'Formation Power Point                             ', 'Mettre en oeuvre les différentes commandes et les fonctions de PowerPoint ', '400 euros'),
(4, 'Formation Excel                                   ', 'A la découverte  d\'Excel et de toutes ses fonctionnalités', '500 euros'),
(5, 'Conduites addictives (les dépendances)', 'Quelles conduites à tenir auprès du pratiquant sportif', '200 euros');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

DROP TABLE IF EXISTS `inscription`;
CREATE TABLE IF NOT EXISTS `inscription` (
  `pseudo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `idSession` int(11) NOT NULL,
  PRIMARY KEY (`pseudo`,`idSession`),
  KEY `idSession` (`idSession`),
  KEY `pseudo` (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`pseudo`, `idSession`) VALUES
('booguy', 3),
('booguy', 7),
('francisco', 1),
('francisco', 5),
('francisco', 14),
('La nasa', 1),
('La nasa', 4),
('zetsu92', 10);

-- --------------------------------------------------------

--
-- Structure de la table `intervenant`
--

DROP TABLE IF EXISTS `intervenant`;
CREATE TABLE IF NOT EXISTS `intervenant` (
  `idIntervenant` int(11) NOT NULL AUTO_INCREMENT,
  `nomIntervenant` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`idIntervenant`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `intervenant`
--

INSERT INTO `intervenant` (`idIntervenant`, `nomIntervenant`) VALUES
(1, 'Chateau patrick'),
(2, 'Forget laure'),
(3, 'Sylvestre richard');

-- --------------------------------------------------------

--
-- Structure de la table `lieuformation`
--

DROP TABLE IF EXISTS `lieuformation`;
CREATE TABLE IF NOT EXISTS `lieuformation` (
  `idLieuFormation` int(11) NOT NULL AUTO_INCREMENT,
  `nomLieu` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `adresse` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`idLieuFormation`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `lieuformation`
--

INSERT INTO `lieuformation` (`idLieuFormation`, `nomLieu`, `adresse`) VALUES
(1, 'Salle informatique Maison Régionale des Sports de Lorraine', '13 Rue Jean Moulin 54 510 Tomblaine'),
(2, 'Salle Lorraine 10 Maison Régionale des Sports de Lorraine', '13 Rue Jean Moulin 54 510 Tomblaine');

-- --------------------------------------------------------

--
-- Structure de la table `sessionformation`
--

DROP TABLE IF EXISTS `sessionformation`;
CREATE TABLE IF NOT EXISTS `sessionformation` (
  `idSession` int(11) NOT NULL AUTO_INCREMENT,
  `dateDebut` date NOT NULL,
  `duree` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `idFormation` int(11) NOT NULL,
  `idLieuFormation` int(11) NOT NULL,
  `idIntervenant` int(11) NOT NULL,
  PRIMARY KEY (`idSession`),
  KEY `idFormation` (`idFormation`),
  KEY `idLieuFormation` (`idLieuFormation`),
  KEY `idIntervenant` (`idIntervenant`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `sessionformation`
--

INSERT INTO `sessionformation` (`idSession`, `dateDebut`, `duree`, `idFormation`, `idLieuFormation`, `idIntervenant`) VALUES
(1, '2019-06-03', '5 jours', 1, 2, 2),
(2, '2019-06-17', '3 jours', 2, 2, 2),
(3, '2019-06-20', '2 jours', 3, 1, 1),
(4, '2019-07-01', '5 jours', 4, 1, 1),
(5, '2019-07-08', '4 jours', 5, 2, 3),
(6, '2019-07-15', '5 jours', 1, 2, 2),
(7, '2019-06-22', '3 jours', 2, 2, 2),
(8, '2019-06-25', '2 jours', 3, 1, 1),
(9, '2019-07-29', '5 jours', 4, 1, 1),
(10, '2019-08-05', '4 jours', 5, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `pseudo` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mdp2` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`pseudo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`pseudo`, `nom`, `prenom`, `mail`, `mdp`, `mdp2`) VALUES
('booguy', 'boudjelal', 'mohamed', 'mohamed@gmail.com', '1234', '1234'),
('zetsu92', 'omri', 'ahmed', 'zetsu92@hotmail.com', '1234', '1234'),
('francisco', 'kouaho', 'francis', 'kouaho@gmail.com', '1234', '1234'),
('La nasa', 'abreu', 'nicolas', 'abreu@gmail.com', '1234', '1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
