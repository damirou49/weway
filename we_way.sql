-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 08 jan. 2018 à 08:41
-- Version du serveur :  5.7.19
-- Version de PHP :  7.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `we_way`
--

-- --------------------------------------------------------

--
-- Structure de la table `action`
--

DROP TABLE IF EXISTS `action`;
CREATE TABLE IF NOT EXISTS `action` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action_label` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `adresses`
--

DROP TABLE IF EXISTS `adresses`;
CREATE TABLE IF NOT EXISTS `adresses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adresse_label` int(11) NOT NULL,
  `adresse_adresse` varchar(255) NOT NULL,
  `adresse_CP` varchar(10) NOT NULL,
  `adresse_ville` varchar(255) NOT NULL,
  `adresse_pays` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `agences`
--

DROP TABLE IF EXISTS `agences`;
CREATE TABLE IF NOT EXISTS `agences` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `agence_nom` varchar(50) NOT NULL,
  `agence_CP` int(11) NOT NULL,
  `agence_ville` varchar(30) NOT NULL,
  `agence_adresse` varchar(30) NOT NULL,
  `agence_tel` int(11) NOT NULL,
  `agence_siret` int(11) NOT NULL,
  `agence_tva` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

DROP TABLE IF EXISTS `annonces`;
CREATE TABLE IF NOT EXISTS `annonces` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `anonce_titre` varchar(11) NOT NULL,
  `anonce_date_creation` date NOT NULL,
  `anonce_date_update` date NOT NULL,
  `anonce_valide` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `annonce_caracteristique_value`
--

DROP TABLE IF EXISTS `annonce_caracteristique_value`;
CREATE TABLE IF NOT EXISTS `annonce_caracteristique_value` (
  `id_annonce` int(11) NOT NULL AUTO_INCREMENT,
  `id_caracteristique` int(11) NOT NULL,
  `a_c_v_value` int(11) NOT NULL,
  PRIMARY KEY (`id_annonce`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `caracteristiques`
--

DROP TABLE IF EXISTS `caracteristiques`;
CREATE TABLE IF NOT EXISTS `caracteristiques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `caracteristique_label` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `categories_users`
--

DROP TABLE IF EXISTS `categories_users`;
CREATE TABLE IF NOT EXISTS `categories_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `C_user_label` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entreprise_nom` varchar(25) NOT NULL,
  `entreprise_CP` int(15) NOT NULL,
  `entreprise_ville` varchar(30) NOT NULL,
  `entreprise_adresse` varchar(50) NOT NULL,
  `entreprise_tel` int(11) NOT NULL,
  `entreprise_siret` int(11) NOT NULL,
  `entreprise_tva` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transport_caracteristiques_value`
--

DROP TABLE IF EXISTS `transport_caracteristiques_value`;
CREATE TABLE IF NOT EXISTS `transport_caracteristiques_value` (
  `id_transport` int(11) NOT NULL AUTO_INCREMENT,
  `id_caracteristique` varchar(11) NOT NULL,
  `transport_caracteristique_value_value` varchar(11) NOT NULL,
  PRIMARY KEY (`id_transport`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `type_caracteristiques`
--

DROP TABLE IF EXISTS `type_caracteristiques`;
CREATE TABLE IF NOT EXISTS `type_caracteristiques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type_caracteristique_label` varchar(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_entreprise` varchar(255) DEFAULT NULL,
  `user_nom` varchar(255) DEFAULT NULL,
  `user_prenom` varchar(255) DEFAULT NULL,
  `user_email` varchar(255) DEFAULT NULL,
  `user_password` varchar(255) DEFAULT NULL,
  `user_salt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `user_entreprise`, `user_nom`, `user_prenom`, `user_email`, `user_password`, `user_salt`) VALUES
(1, 'Dachser', 'damien', 'damien', 'damien.rousset@dachser.com', 'jyct7w5xclc0sks8w8sckoscgwc00w/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'jyct7w5xclc0sks8w8sckoscgwc00w'),
(2, 'test', 'test', 'test', 'test@gmail.com', '5sqapq1yrlcsgw0sow4cg4s4osg8kso/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '5sqapq1yrlcsgw0sow4cg4s4osg8kso'),
(3, 'superu', 'Brochoire', 'Marin', 'mb@gmail.com', 'runyrrbmvr4wscgsw080cs840k80swg/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'runyrrbmvr4wscgsw080cs840k80swg'),
(4, 'geodis', 'fred', 'gege', 'gege@gmail.com', 'm9kj70z9kuocw4gkwgs88osok0okwwo/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'm9kj70z9kuocw4gkwgs88osok0okwwo'),
(5, 'sncf', 'richard', 'richard', 'richard@gmail.com', 'lh3io4avk9w444k84kkcccgwsk0wwoo/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'lh3io4avk9w444k84kkcccgwsk0wwoo'),
(6, 'airfrance', 'jean luc ', 'mélanchon', 'melanchon@gmail.com', '4x7s2frezzqcccgw4kwk4skgcsosggo/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '4x7s2frezzqcccgw4kwk4skgcsosggo'),
(7, 'louis', 'jeanlouisdavid', 'alex', 'louis@gmail.com', 'r700nke2tn488gsg8kg0sosc0cw0cw4/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'r700nke2tn488gsg8kg0sosc0cw0cw4'),
(8, 'sfr', 'barré', 'florian', 'fb@gmail.com', 'n0a6x4dw9vk0swko4c0wkwogckgoo04/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'n0a6x4dw9vk0swko4c0wkwogckgoo04'),
(9, 'Woxy', 'Rousset', 'Alex', 'alex@gmail.com', 'sfzkf8ml72o8c8woows8sws4ck80kkc/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'sfzkf8ml72o8c8woows8sws4ck80kkc'),
(10, 'auchan', 'jean', 'delafontaine', 'jean@gmail.com', 'lowsgyq7d8g4s0oscgg0cow0kkwc0oo/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'lowsgyq7d8g4s0oscgg0cow0kkwc0oo'),
(11, 'Imie', 'Tom', 'Jedusor', 'tom@gmail.com', '5ic5qf2l7fggggsoo0wwco4sgccws04/a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '5ic5qf2l7fggggsoo0wwco4sgccws04');

-- --------------------------------------------------------

--
-- Structure de la table `vehicules`
--

DROP TABLE IF EXISTS `vehicules`;
CREATE TABLE IF NOT EXISTS `vehicules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicule_label` varchar(20) NOT NULL,
  `vehicule_immat` varchar(20) NOT NULL,
  `vehicule_circulation` date NOT NULL,
  `vehicule_cartegrise` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vehicules_action`
--

DROP TABLE IF EXISTS `vehicules_action`;
CREATE TABLE IF NOT EXISTS `vehicules_action` (
  `id` int(11) NOT NULL,
  `id_action` int(11) NOT NULL,
  `id_vehicule` int(11) NOT NULL,
  `vehicule_action_date` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
