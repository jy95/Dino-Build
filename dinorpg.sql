
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Dim 15 Novembre 2015 à 17:22
-- Version du serveur: 10.0.20-MariaDB
-- Version de PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `dinorpg`
--

-- --------------------------------------------------------

--
-- Structure de la table `air`
--

CREATE TABLE IF NOT EXISTS `air` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `idparent` int(11) NOT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tables des compétences air';

--
-- Contenu de la table `air`
--

INSERT INTO `air` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Agilité', 'P', 'Augmente la puissance des assauts d''Air de 5.', '-', 0),
(2, 1, 'Stratégie', 'S', 'Adopte la meilleure stratégie d''attaque en fonction des défenses des ennemis.', '-', 0),
(3, 1, 'Mistral', 'A', 'Attaque tous les ennemis avec un pouvoir d''Air 3.', 'Faible', 0),
(4, 2, 'Esquive', 'P', 'Augmente les chances d''esquive de 10%.', '-', 1),
(5, 2, 'Saut', 'P', 'Permet d''attaquer les ennemis en vol.', '-', 1),
(6, 2, 'Analyse', 'S', 'Choisi la meilleure cible pour chaque attaque.', '-', 2),
(7, 2, 'Cueillette', 'C', 'Permet au Dinoz de récolter des plantes dans certains lieux.', '-', 2),
(8, 2, 'Tai-Chi ', 'A', 'Augmente la puissance des assauts d''Air de 15. Diminue la vitesse des Attaques d''air de 20%.', '-', 3),
(9, 2, 'Tornade', 'A', 'Attaque tous les ennemis avec un pouvoir de Air 5.', 'Normale', 3),
(10, 3, 'Elasticité', 'P', 'Augmente la puissance des assauts d''Air de 10 et augmente la défense Air de 3.', '-', 4),
(11, 3, 'Disque Vacuum', 'A', 'Attaque un ennemi avec un pouvoir d''Air de 12.', 'Forte', 4),
(12, 3, 'Attaque Plongeante', 'A', 'Attaque un ennemi avec un assaut ayant un bonus d''Air 2.', 'Faible', 5),
(13, 3, 'Furtivité', 'P', 'Augmente les défenses Air, Eau et Foudre de 2.', '-', 5),
(14, 3, 'Spécialiste', 'S', 'Pour les assauts, l''élément le plus faible est remplacé par l''élément le plus fort.', '-', 6),
(15, 3, 'Talon d''Achille ', 'P', 'Augmente la puissance de tous les assauts de 2.', '-', 6),
(16, 3, 'Oeil de Lynx ', 'C', 'Permet au Dinoz de trouver des plantes exotiques dans certains lieux.', '-', 7),
(17, 3, 'Nuage Toxique ', 'A', 'Empoisonne tous les ennemis.', 'Forte', 7),
(18, 3, 'Éveil', 'E', 'Diminue la vitesse des attaques d''Air de 20%.', '-', 8),
(19, 3, 'Paumes Éjectables ', 'A', 'Attaque un ennemi avec un assaut de puissance doublée puis diminue l''initiative de 15.', 'Faible', 8),
(20, 3, 'Vent Vif ', 'E', 'Donne le statut Accéléré.', 'Normale', 9),
(21, 3, 'Forme Vaporeuse ', 'S', 'Permet de gagner le statut Intangible en se défendant.', '-', 9),
(22, 4, 'Trou Noir ', 'A', 'Envoie un ennemi dans une dimension parallèle.', 'Très Forte', 11),
(23, 4, 'Maître Lévitateur ', 'S', 'Permet à tous les Dinoz du Groupe d''attaquer les ennemis en vol.', '-', 12),
(24, 4, 'Haleine Fétive ', 'S', 'Empoisonne les ennemis touchés par un assaut.', '-', 17),
(25, 4, 'Professeur', 'U', 'Augmente le gain d''expérience de tous les Dinoz de 5%.', '-', 18),
(26, 4, 'Méditation Solitaire', 'P', 'Augmente la défense Air de 3, diminue la vitesse des attaques Air de 50%.', '-', 18),
(27, 4, 'Souffle de Vie ', 'S', 'Rends invulnérable au poison et aux malédictions.', '-', 20),
(28, 5, 'Méditation Transcend', 'P', 'Augmente la défense air de 6, diminue la vitesse des attaques air de 50%', '-', 26),
(29, 6, 'Forme Etherale ', 'S', 'Donne le statut Intangible.', '-', 28);

-- --------------------------------------------------------

--
-- Structure de la table `air_plus`
--

CREATE TABLE IF NOT EXISTS `air_plus` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `energie` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idparent` int(11) DEFAULT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='compétences air lv50+';

--
-- Contenu de la table `air_plus`
--

INSERT INTO `air_plus` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Maîtrise Corporelle', 'P', 'Augmente de 20% la récupération d''énergie', '-', 0),
(2, 2, 'Blanc', 'P', 'Augmente la puissance des assauts de 20 sur Nimbao', '-', 1),
(3, 2, 'Anaérobie', 'S', 'Diminue l''endurance de 25%', '-', 1),
(4, 3, 'Double Face', 'P', '50% de chances de gagner ou perdre 10 d''initiative au début du combat', '-', 2),
(5, 3, 'Flagellation', 'P', 'Diminue la récupération de 15%', '-', 2),
(6, 3, 'Souffle d''Ange', 'P', 'Augmente la défense de feu de 20', '-', 3),
(7, 3, 'Ouragan', 'P', 'Augmente la puissance des assauts d''air de 20', '-', 3),
(8, 4, 'Ouranos', 'A', 'Diminue la vitesse de tous les dinoz n''ayant pas 10 en air de 50% pendant 3 tours', 'Forte', 4),
(9, 4, 'Twinoid 500mg', 'P', 'AUgmente l''endurance de 50', '-', 5),
(10, 4, 'Londuhaut', 'C', '+1 case de cueillette', '-', 6),
(11, 4, 'Surplis d''Hadès', 'S', '+1 case d''équipement', '-', 7),
(12, 4, 'Réceptacle Thermique', 'E', 'Permet d''annuler les compétences sphériques feu A et E d''un adversaire', '-', 7),
(13, 5, 'Qi Gong', 'E', 'Enlève toute l''endurance d''un ennemi', 'Très Forte', 8),
(14, 5, 'Sylphides', 'A', 'Enlève un dinoz adversaire de la bataille', '-', 9),
(15, 5, 'Messie', 'U', 'Augmente le nombre maximum de Dinoz de 3', '-', 10),
(16, 5, 'Mutinerie', 'E', 'Utilise les clones pour attaquer leurs maîtres', 'Forte', 11),
(17, 5, 'Mains Collantes', 'E', 'Bloque la capacité de l''ennemi à esquiver les attaques', 'Faible', 12);

-- --------------------------------------------------------

--
-- Structure de la table `bois`
--

CREATE TABLE IF NOT EXISTS `bois` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `idparent` int(11) NOT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tables des compétences bois';

--
-- Contenu de la table `bois`
--

INSERT INTO `bois` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Carapace', 'P', 'Augmente l''armure de 1.', '-', 0),
(2, 1, 'Endurance', 'P', 'Augmente la défense Bois de 2.', '-', 0),
(3, 1, 'Sauvagerie', 'P', 'Augmente la puissance des assauts de Bois de 5.', '-', 0),
(4, 2, 'Sympathique', 'S', 'Le Dinoz peut être suivi par un Dinoz supplémentaire.', '-', 1),
(5, 2, 'Vignes', 'E', 'Diminue l''initiative d''un ennemi de 15.', 'Faible', 1),
(6, 2, 'Fouille', 'C', 'Permet au Dinoz de trouver des Artefacts dans certains lieux.', '-', 2),
(7, 2, 'Croissance', 'P', 'Augmente la puissance de tous les assauts de 1 et augmente le maximum de points de vie de 20.', '-', 2),
(8, 2, 'Tenacité', 'P', 'Augmente le minimum de dégâts de 1.', '-', 3),
(9, 2, 'Renforts korgons', 'E', 'Appelle un Korgon pour aider à combattre.', 'Normale', 3),
(10, 3, 'Planificateur', 'C', 'Permet au Dinoz de fouiller une case supplémentaire.', '-', 4),
(11, 3, 'Héritage Faroe', 'P', 'Augmente la puissance des attaque de Bois de 12 et l''armure de 1.', '-', 4),
(12, 3, 'Etat Primal', 'E', 'Annule tous les statuts positifs des ennemis et tous les statuts négatifs du Groupe.', 'Faible', 5),
(13, 3, 'Printemps Précoce', 'E', 'Tous les autres Dinoz du Groupe regagnent jusqu''à autant de points de vie que l''élément Bois du Dinoz.', 'Faible', 5),
(14, 3, 'Détective', 'C', 'Permet au Dinoz de trouver des artefacts peu communs dans certains lieux.', '-', 6),
(15, 3, 'Expert en Fouilles', 'C', 'Permet au Dinoz de fouiller une case supplémentaire.', '-', 6),
(16, 3, 'Cocon', 'S', 'Augmente la rapidité de la récupération des points de vie au repos.', '-', 7),
(17, 3, 'Large Machoire', 'P', 'Augmente la puissance des assauts de Bois de 15.', '-', 7),
(18, 3, 'Charisme', 'S', 'Le Dinoz peut être suivi par un Dinoz supplémentaire.', '-', 8),
(19, 3, 'Résistance à la Magi', 'E', 'Annule tous les statuts négatifs.', 'Faible', 8),
(20, 3, 'Acrobate', 'P', 'Augmente la vitesse de 15%.', '-', 9),
(21, 3, 'Instinct Sauvage', 'P', 'Augmente de 2 l''élément Bois.', '-', 9),
(22, 4, 'Esprit Gorilloz', 'E', 'Appelle un Esprit Gorilloz pour aider à combattre.', 'Forte', 11),
(23, 4, 'Garde Forestier', 'P', 'Augmente la défense Bois de tous les Dinoz du Groupe de 3.', '-', 13),
(24, 4, 'Archéologue', 'C', 'Permet au Dinoz de trouver des artefacts rares ou exceptionnels dans certains lieux.', '-', 14),
(25, 4, 'Géant', 'P', 'Augmente la puissance des assauts de 5 et le maximum de points de vie de 30. Diminue la vitesse du Dinoz de 20%.', '-', 16),
(26, 4, 'Leader', 'U', 'Augmente le nombre maximum de Dinoz de 3.', '-', 18),
(27, 4, 'Ingénieur', 'U', 'Tous les dinoz peuvent être équipés d''un objet de combat supplémentaire.', '-', 21),
(28, 5, 'Colosse', 'P', 'Augmente la puissance de tous les assauts de 15 et le maximum de points de vie de 50. Diminue la vitesse du Dinoz de 20%.', '-', 25);

-- --------------------------------------------------------

--
-- Structure de la table `bois_plus`
--

CREATE TABLE IF NOT EXISTS `bois_plus` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `energie` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idparent` int(11) DEFAULT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='compétences bois lv50+';

--
-- Contenu de la table `bois_plus`
--

INSERT INTO `bois_plus` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Oxygénation Musculaire', 'P', 'Augmente l''endurance de 20%', '-', 0),
(2, 1, 'Vert', 'P', 'Augmente de 20 les assauts à la forêt de Grumhel', '-', 0),
(3, 2, 'Source de Vie', 'S', 'Si un des assauts ennemi touche le dinoz, il absorbera 5% de vie de l''attaquant', 'Faible', 1),
(4, 2, 'Vide Energétique', 'S', '-15% récupération adverse lors d''un assaut', 'Faible', 1),
(5, 2, 'Bouclier Dinoz', 'E', 'Protège automatiquement le dinoz qui a le moins de points de vie en prenant les dégâts à sa place', '-', 2),
(6, 2, 'Acide Lactique', 'P', 'Diminue l''endurance de 15%', '-', 2),
(7, 3, 'Lancer de Roche', 'A', 'Attaque un ennemi avec un pouvoir bois 10, un rocher est projeté sur l''ennemi à une vitesse stupéfiante', 'Forte', 3),
(8, 3, 'Courbatures', 'E', 'Diminue l''endurance d''un dinoz adverse de 30%', 'Faible', 4),
(9, 3, 'Force Control', 'P', 'Le dinoz fait au moins 10 dégâts au dinoz adverse lors d''un assaut', '-', 5),
(10, 3, 'Peau de Fer', 'P', 'Augmente les points de vie de 50', '-', 6),
(11, 4, 'Champollion', 'C', 'Permet au dinoz de fouiller une case supplémentaire', '-', 7),
(12, 4, 'Courant de Vie', 'P', 'Augmente la défense contre l''eau de 20 et augmente les assauts de bois de 20', '-', 8),
(13, 4, 'Berserk', 'E', 'Double la puissance des assauts mais empêche l''utilisation des compétences de type E et A', '-', 9),
(14, 4, 'Rivière de Vie', 'P', 'Augmente l''initiative de 20', '-', 10),
(15, 5, 'Mur de Boue', 'A', 'Absorbe jusqu''à 30 dégâts avant de disparaître (Vulnérables à la CSK)', '-', 11),
(16, 5, 'Peau d''Acier', 'P', 'Augmente le maximum de point de vie de 100', '-', 11),
(17, 5, 'Sharignan', 'E', 'Copie une compétence d''un dinoz adverse utilisée pendant le combat et la conserve jusqu''à la fin', '-', 12),
(18, 5, 'Amazonie', 'P', 'Tous les dinoz avec un élément en bois de moins de 10 points va dormir durant les trois prochains tours, sauf s''ils sont soumis à une attaque qui leur fait perdre 10 pv', '-', 13),
(19, 5, 'Receptacle Aqueux', 'E', 'Permet d''annuler les compétences sphériques A et E en eau d''un adversaire', '-', 14);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `dino_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `date` datetime NOT NULL,
  `response_comment_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`comment_id`,`dino_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='table des commentaires' AUTO_INCREMENT=4 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`comment_id`, `dino_id`, `user_id`, `comment`, `date`, `response_comment_id`) VALUES
(1, 3, 19751, 'test :gold:', '2015-09-14 13:56:48', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `donnees_users`
--

CREATE TABLE IF NOT EXISTS `donnees_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `race` varchar(20) NOT NULL,
  `eau` varchar(255) DEFAULT NULL,
  `feu` varchar(255) DEFAULT NULL,
  `air` varchar(255) DEFAULT NULL,
  `foudre` varchar(255) DEFAULT NULL,
  `bois` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`,`user`),
  KEY `user` (`user`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COMMENT='tables des enregistrements' AUTO_INCREMENT=11 ;

--
-- Contenu de la table `donnees_users`
--

INSERT INTO `donnees_users` (`id`, `user`, `nom`, `race`, `eau`, `feu`, `air`, `foudre`, `bois`) VALUES
(3, 19751, 'dassa', 'kabuki', '1,2,3,5,8,9,13,14,19,21,22,29', '1,2', '1,4,2,3,9,20,27,21', '3,8,20', '3,9'),
(4, 86274, 'william', 'winks', NULL, NULL, NULL, NULL, NULL),
(5, 3829873, 'Ashe', 'winks', NULL, NULL, NULL, NULL, NULL),
(6, 1786176, 'Pepito', 'pigmou', 'null', 'null', 'null', 'null', '2'),
(7, 5491656, 'WatterHorn', 'sirain', '1,4,5,14,2,3,8,19,9,22', '1,2,3,9', 'null', 'null', 'null'),
(8, 2716239, 'Wanwan', 'wanwan', '2,3,8,19,20', '1,3,6,10,16,23,24,30', 'null', 'null', 'null'),
(9, 5491656, 'InferHorn', 'pigmou', '3,8,9', 'null', 'null', 'null', 'null'),
(10, 2716239, 'Bidule', 'moueffe', '2,3,8,19,20', 'null', 'null', '3,8,20', 'null');

-- --------------------------------------------------------

--
-- Structure de la table `double`
--

CREATE TABLE IF NOT EXISTS `double` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` enum('A','C','E','P','S','U') NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `parent_eau` int(11) NOT NULL,
  `parent_feu` int(11) NOT NULL,
  `parent_foudre` int(11) NOT NULL,
  `parent_air` int(11) NOT NULL,
  `parent_bois` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='table des competences double';

--
-- Contenu de la table `double`
--

INSERT INTO `double` (`id`, `nom`, `type`, `description`, `energie`, `parent_eau`, `parent_feu`, `parent_foudre`, `parent_air`, `parent_bois`) VALUES
(1, 'Electrolyse ', 'P', 'Augmente de 5% la vitesse de tous les dinoz du groupe.', '-', 18, 0, 18, 0, 0),
(2, 'Maître Elémentaire ', 'P', 'Augmente de 2 les éléments Eau et Feu.', '-', 11, 20, 0, 0, 0),
(3, 'Surcharge', 'P', ' 	Augmente les chances de multicoups de 15%.', '-', 0, 0, 15, 10, 0),
(4, 'Secousse', 'A', 'Attaque au sol avec un pouvoir de Bois + Air 4.', '-', 0, 0, 0, 19, 21),
(5, 'Choc', 'P', ' 	Ajoute la valeur de l''élément Foudre aux assauts de Bois et la valeur de l''élément Bois aux assauts de Foudre.', '-', 0, 0, 11, 0, 12),
(6, 'Armure de basalte ', 'P', 'Augmente l''armure du Dinoz de 3.', '-', 0, 13, 0, 0, 16),
(7, 'Sprint', 'P', 'Augmente l''initiative de 6.', '-', 0, 16, 10, 0, 0),
(8, 'Infatiguable', 'P', 'Augmente de 2 toutes les défenses.', '-', 21, 0, 0, 0, 19),
(9, 'Vendetta', 'P', 'Augmente 20% les chances de contre-attaque.', '-', 0, 22, 0, 15, 0),
(10, 'Bulle', 'P', 'Protège de façon permanente contre les dégâts des pouvoirs élémentaires qui ne font pas de dégâts de bois selon un certain poucentage .', '-', 14, 0, 0, 21, 0);

-- --------------------------------------------------------

--
-- Structure de la table `eau`
--

CREATE TABLE IF NOT EXISTS `eau` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `idparent` int(11) NOT NULL,
  `quetzu` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tables des compétences eau';

--
-- Contenu de la table `eau`
--

INSERT INTO `eau` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`, `quetzu`) VALUES
(1, 1, 'Canon à eau', 'A', 'Attaque un ennemi avec un pouvoir d''Eau 6.', 'Faible', 0, 0),
(2, 1, 'Perception', 'P', 'Augmente la puissance de tous les assauts d''Eau de 4 et permet d''attaquer les ennemis intangibles.', '-', 0, 0),
(3, 1, 'Mutation', 'P', 'Augmente le maximum de points de vie de 30.', '-', 0, 0),
(4, 2, 'Gel', 'A', 'Attaque un ennemi avec un pouvoir d''Eau 5. L''ennemi est ensuite ralenti.', 'Faible', 1, 0),
(5, 2, 'Douche Ecossaise', 'E', 'Attaque tous les ennemis avec un pouvoir d\\Eau 2.', 'Faible', 1, 0),
(6, 2, 'Coups sournois', 'A', 'Attaque un ennemi. En cas de réussite l''ennemi perds la moitié de ses points de vie.', 'Faible', 2, 0),
(7, 2, 'Apprenti pecheur', 'C', 'Permet au Dinoz de pêcher des petits poissons dans certains lieux.', '-', 2, 0),
(8, 2, 'Poche Ventrale', 'S', 'Permet au Dinoz d''être équipé avec un objet de combat supplémentaire.', '-', 3, 0),
(9, 2, 'Karaté Sous-Marin', 'P', 'Augmente la puissance de tous les assauts et pouvoirs d''Eau de 10.', '-', 3, 0),
(10, 2, 'Ecailles luminescent', 'P', 'Augmente l''armure de 2.', '-', 3, 1),
(11, 3, 'Zéro absolu', 'P', 'Augmente la défense contre le feu de 25.', '-', 4, 0),
(12, 3, 'Pétrification', 'A', 'Pétrifie un ennemi.', 'Faible', 4, 0),
(13, 3, 'Accuponcture', 'S', 'Donne le statut Guérison. Si un ennemi réussi un assaut contre le Dinoz, l''ennemi perds 1 point de vie.', '-', 5, 0),
(14, 3, 'Sapeur', 'S', 'La probabilité d''utilisation des objets de combat est augmentée de 50%.', '-', 5, 0),
(15, 3, 'Coup Fatal', 'A', 'Attaque un ennemi. S''il est touché, il perd tous ses points de vie.', 'Faible', 6, 0),
(16, 3, 'Entrainement S-M', 'P', 'Augmente le maximum des points de vie de 10.', '-', 6, 0),
(17, 3, 'Pecheur confirmé', 'C', 'Permet au Dinoz de pêcher des gros poissons dans certains lieux.', '-', 7, 0),
(18, 3, 'Marécage', 'E', 'Ralentis tous les ennemis.', 'Faible', 7, 0),
(19, 3, 'Sumo', 'P', 'Augmente le maximum de points de vie de 100.', '-', 8, 0),
(20, 3, 'Sans pitié', 'S', 'Choisi la cible avec le moins de points de vie pour chaque assaut.', '-', 8, 0),
(21, 3, 'Clone Aqueux', 'E', 'Crée un clone du Dinoz avec 1 point de vie.', 'Forte', 9, 0),
(22, 3, 'Griffes Empoissonées', 'S', 'Si un des assauts d''Eau du Dinoz touche un ennemi, il est empoisonné.', '-', 9, 0),
(23, 3, 'Peau de Serpent', 'P', 'Augmente de 10% l''esquive des assauts et réduit de 15% la vitesse des attaques eau.', '-', 10, 1),
(24, 4, 'Rayon Kaar-Sher', 'A', 'Attaque tous les ennemis avec un pouvoir d''Eau 7.', 'Forte', 12, 0),
(25, 4, 'Magasinier', 'U', 'Augmente le maximum d''objets stockable de 50%..', '-', 14, 0),
(26, 4, 'EntrainementSMavancé', 'P', 'Augmente le maximum des points de vie de 20.', '-', 16, 0),
(27, 4, 'Maitre pêcheur', 'C', 'Permet au Dinoz de pêcher des poissons rares ou exceptionnels dans certains lieux.', '-', 17, 0),
(28, 4, 'Cuisinier', 'U', 'Augmente le gain de vie des objets de 10% pour tous les Dinoz.', '-', 19, 0),
(29, 4, 'Sang Acide', 'S', 'Si un des assauts d''un ennemi touche le Dinoz, il peut faire perdre de la vie à l''ennemi.', '-', 22, 0),
(30, 5, 'Maitre nageur', 'S', 'Augmente l''élément Eau de 5.', '-', 25, 0);

-- --------------------------------------------------------

--
-- Structure de la table `eau_plus`
--

CREATE TABLE IF NOT EXISTS `eau_plus` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `energie` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idparent` int(11) DEFAULT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='compétences eau lv50+';

--
-- Contenu de la table `eau_plus`
--

INSERT INTO `eau_plus` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Eau Divine', 'S', 'Double la restauration des pv lors du repos du dinoz', '-', 0),
(2, 2, 'Radiations Gamma', 'P', 'Augmente les assauts de 5 et le maximum de pv de 30. Diminue l''initiative de 10', '-', 1),
(3, 2, 'Bleu', 'P', 'Augmente les assauts de 20 dans les îles', '-', 1),
(4, 3, 'Mue Aqueuse', 'P', 'Augmente la défense foudre de 20', '-', 2),
(5, 3, 'Caparace Blindée', 'P', 'Augmente l''armure de 10 et diminue la vitesse de 20%', '-', 2),
(6, 3, 'Diète Chromatique', 'E', 'Applique le statut monoélément à un adversaire qui limite ses attaques à un seul élémént', 'Forte', 3),
(7, 4, 'Effluve Aphrodisiaque', 'S', 'Le dinoz peut être suivi par un dinoz supplémentaire', '-', 4),
(8, 4, 'Nemo', 'S', '+1 case de pêche', '-', 4),
(9, 4, 'Cleptomane', 'P', 'Annule les objets non magiques de l''inventaire d''un dinoz adverse dès le début du combat', '-', 5),
(10, 4, 'Abysse', 'A', 'Tous les dinoz n''ayant pas 10 en eau voient la puissance de leurs attaques et assauts diminuer de 25%', 'Forte', 6),
(11, 4, 'Banni des Dieux', 'E', 'Empêche un adversaire ciblé dappeler son invocation', '-', 6),
(12, 5, 'Tourbillon Magique', 'P', 'Augmente les assauts d''eau de 20', '-', 7),
(13, 5, 'Hyperventilation', 'P', 'Diminue la résistance de tous les ennemis de 20%', '-', 8),
(14, 5, 'Thérapie de groupe', 'E', 'Récupère autant de points de vie que l''équipe adverse lorsqu''elle utilise une compétence de soins', '-', 9),
(15, 5, 'Réceptacle Tesla', 'A', 'Annule les compétences sphériques foudre A et E sur un dinoz', 'Forte', 10),
(16, 5, 'Vitalité Marine', 'P', 'Augmente le maximum de points de vie de 80', '-', 11);

-- --------------------------------------------------------

--
-- Structure de la table `feu`
--

CREATE TABLE IF NOT EXISTS `feu` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `idparent` int(11) NOT NULL,
  `quetzu` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tables des compétences feu';

--
-- Contenu de la table `feu`
--

INSERT INTO `feu` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`, `quetzu`) VALUES
(1, 1, 'Force', 'P', 'Augmente la puissance de tous les assauts de 1.', '-', 0, 0),
(2, 1, 'Griffes Enflammées', 'P', 'Augmente la puissance de tous les assauts de Feu de 7.', '-', 0, 0),
(3, 1, 'Colère', 'E', 'Augmente la puissance du prochain assaut de 25%.', 'Faible', 0, 0),
(4, 2, 'Propulsions divines', 'P', 'Augmente la vitesse des attaques de feu de 30%. Réduit l''élément feu de 2.', '-', 1, 1),
(5, 2, 'Arts Martiaux', 'P', 'Augmente la puissance de tous les assauts de 2.', '-', 1, 0),
(6, 2, 'Charge', 'P', 'Augmente la puissance du premier assaut de 5.', '-', 1, 0),
(7, 2, 'Chasseur goupignon', 'C', 'Permet au Dinoz de chasser des petits animaux dans certains lieux.', '-', 2, 0),
(8, 2, 'Souffle Ardent', 'A', 'Attaque tous les ennemis avec un pouvoir de Feu 5.', 'Faible', 2, 0),
(9, 2, 'Furie', 'P', 'Augmente la puissance de tous les assauts de 3 et diminue toutes les défenses de 2.', '-', 3, 0),
(10, 2, 'Sang Chaud', 'P', 'Augmente l''initiative de 4.', '-', 3, 0),
(11, 3, 'Aura Incandescante', 'P', 'Augmente l''élément Feu de 2.', '-', 9, 0),
(12, 3, 'Griffes infernales', 'S', 'Inflige des dégâts de feu continus à un adversaire.', '-', 4, 1),
(13, 3, 'Waïkikidô', 'P', 'Augmente les chances de contre-attaque de 10% et le maximum de points de vie de 20. Diminue l''initiative du Dinoz de 5.', '-', 5, 0),
(14, 3, 'Vigilance ', 'P', 'Augmente la défense Feu de 5.', '-', 5, 0),
(15, 3, 'Paume Chalumeau', 'A', 'Attaque un ennemi avec un pouvoir de Feu 10 puis diminue l''initiative du Dinoz de 15.', 'Faible', 5, 0),
(16, 3, 'Kamikaze', 'A', 'Attaque un ennemi avec un pouvoir de Feu 15 puis le Dinoz perd la moitié de ses points de vie.', 'Faible', 6, 0),
(17, 3, 'Chasseur de Géant', 'C', 'Permet au Dinoz de chasser des animaux moyens dans certains lieux.', '-', 7, 0),
(18, 3, 'Coulée de Lave', 'A', 'Attaque un ennemi avec un pouvoir de Feu 12.', 'Normale', 7, 0),
(19, 3, 'Boule de Feu', 'A', 'Attaque un ennemi avec un pouvoir de Feu 7.', 'Faible', 8, 0),
(20, 3, ' Combustion', 'E', 'Tous les ennemis perdent des points de vie égaux à leur élément Bois.', 'Faible', 8, 0),
(21, 3, 'Aura Incandescante', 'P', 'Augmente l''élément Feu de 2.', '-', 9, 0),
(22, 3, 'Vengeance', 'P', 'Augmente les chances de contre-attaque de 5%.', '-', 9, 0),
(23, 3, 'Sieste', 'A', 'Le Dinoz regagne jusqu''à 20 points de vie et s''endort.', 'Faible', 10, 0),
(24, 3, 'Coeur Ardent', 'P', 'Augmente la puissance de tous les assauts de feu de 12 et augmente le maximum de point de vie de 20.', '-', 10, 0),
(25, 4, 'Chef de guerre', 'P', 'Augmente la puissance de tous les assauts de tous les Dinoz du Groupe de 2.', '-', 14, 0),
(26, 4, 'Bélier', 'P', 'Augmente la puissance du premier assaut de 20.', '-', 16, 0),
(27, 4, 'Chasseur de Dragon', 'C', 'Permet au Dinoz de chasser des animaux très rares et dangereux dans certains lieux.', '-', 17, 0),
(28, 4, 'Torche', 'S', 'Le Dinoz est enflammé.', '-', 20, 0),
(29, 4, 'Météores', 'A', 'Attaque tous les ennemis avec un pouvoir de Feu 10.', 'Forte', 21, 0),
(30, 4, 'Self-Control', 'S', 'Empêche tous les statuts négatifs et diminue l''initiative de 3.', '-', 23, 0),
(31, 5, 'Brave', 'S', 'Le Dinoz ne pourra plus faire parti d''un Groupe. Augmente l''élément Feu de 6, le maximum de point de vie de 50 et la vitesse de 15%.', '-', 30, 0);

-- --------------------------------------------------------

--
-- Structure de la table `feu_plus`
--

CREATE TABLE IF NOT EXISTS `feu_plus` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `description` int(11) NOT NULL,
  `energie` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idparent` int(11) DEFAULT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='compétences feu lv 50+';

--
-- Contenu de la table `feu_plus`
--

INSERT INTO `feu_plus` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Protéine Dinozienne', 'P', 0, '-', 0),
(2, 2, 'Exténuation', 'E', 0, 'Faible', 1),
(3, 2, 'Rouge', 'P', 0, '-', 1),
(4, 3, 'Carapace de Magma', 'P', 0, '-', 2),
(5, 3, 'Cri de Guerre', 'E', 0, 'Forte', 3),
(6, 4, 'Fièvre Brûlante', 'P', 0, '-', 4),
(7, 4, 'Bénédiction d''Artémis', 'C', 0, '-', 4),
(8, 4, 'Joker', 'P', 0, '-', 5),
(9, 4, 'Armure de Feu', 'P', 0, '-', 5),
(10, 5, 'Pays de Cendre', 'P', 0, '-', 6),
(11, 5, 'Réceptacle Rocheux', 'A', 0, '-', 7),
(12, 5, 'Fusion de Plumes', 'S', 0, '-', 7),
(13, 5, 'Acclamation Fraternelle', 'E', 0, '-', 8);

-- --------------------------------------------------------

--
-- Structure de la table `foudre`
--

CREATE TABLE IF NOT EXISTS `foudre` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `idparent` int(11) NOT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tables des compétences foudre';

--
-- Contenu de la table `foudre`
--

INSERT INTO `foudre` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Focus', 'E', 'Augmente la puissance du prochain assaut d''un bonus de Foudre 1.', 'Faible', 0),
(2, 1, 'Intelligence', 'S', 'Augmente le gain d''expérience en fin de combat de 5%.', '-', 0),
(3, 1, 'Célérité', 'P', 'Augmente la vitesse du Dinoz de 15%.', '-', 0),
(4, 2, 'Concentration', 'S', 'Attaque toujours le même ennemi.', '-', 1),
(5, 2, 'Régénérescence', 'S', 'Augmente la rapidité de récupération des points de vie lors du repos.', '-', 1),
(6, 2, 'Premiers Soins', 'S', 'Permet au Dinoz de récuperer un point de vie à la fin du combat s''il a perdu de la vie.', '-', 2),
(7, 2, 'Paratonnerre', 'C', 'Permet au Dinoz d''absorber l''énergie de la foudre dans certains lieux.', '-', 2),
(8, 2, 'Coup Double', 'P', 'Augmente les chances de multi-coup de 20%.', '-', 3),
(9, 2, 'Attaque-éclair', 'P', 'Augmente la vitesse des attaques Foudre de 40%.', '-', 3),
(10, 3, 'Voie de Kaos', 'P', 'Augmente la puissance des assauts de Feu et de Foudre de 6.', '-', 4),
(11, 3, ' Voie de Gaïa', 'P', 'Augmente la puissance des défenses Bois et Foudre de 3.', '-', 4),
(12, 3, 'Purée Salvatrice', 'E', 'Annule tous les statuts négatifs du groupe.', 'Forte', 5),
(13, 3, 'Aura Hermétique', 'E', 'Donne le statut Bouclier.', 'Faible', 5),
(14, 3, 'Médecine', 'S', 'Permet de récupérer jusqu''à 3 points de vie à la fin du combat.', '-', 6),
(15, 3, 'Adrénaline', 'P', 'Augmente la vitesse des attaques Foudre de 50%.', '-', 6),
(16, 3, 'Fission élémentaire', 'C', 'Permet au Dinoz de collecter l''énergie de tous les éléments dans certains lieux.', '-', 7),
(17, 3, 'Croc-Diamant', 'P', 'Augmente la puissance de tous les assauts de 2.', '-', 7),
(18, 3, 'Foudre', 'A', 'Attaque un ennemi avec un pouvoir de Foudre 10.', 'Normale', 8),
(19, 3, 'Danse Foudroyante ', 'A', 'Attaque 5 fois avec un pouvoir de Foudre 3.', 'Forte', 8),
(20, 3, 'Plan de Carrière', 'S', 'Permet au Dinoz de retirer une fois son élément lors d''un changement de niveau.', '-', 8),
(21, 3, 'Embuche', 'P', 'Augmente l''initiative de 7.', '-', 9),
(22, 4, 'CrépusculeFlamboyant', 'A', 'Attaque tous les ennemis avec un pouvoir Feu 6 + Foudre 6.', 'Forte', 10),
(23, 4, 'Aube Feuillue ', 'A', 'Régénère tous les Dinoz du Groupe jusqu''à Foudre 2 + Bois 2 points de vie.', 'Très Forte', 11),
(24, 4, 'Bénédiction', 'E', 'Donne le statuts béni à tous les Dinoz du groupe.', 'Faible', 12),
(25, 4, 'Brancardier', 'S', 'Permet à un autre Dinoz du Groupe de récupérer jusqu''à 5 points de vie à la fin du combat.', '-', 14),
(26, 4, 'Marchand', 'U', 'Diminue les prix de la boutique volante de 10%.', '-', 16),
(27, 4, 'Réincarnation', 'S', 'Le Dinoz pourra se réincarner à partir du niveau 40. Il redeviendra niveau 1 et partira avec un bonus de 5 points de compétences (en plus de ceux qu''il a déjà).', '-', 20),
(28, 5, 'Archange Corrosif ', 'P', 'Augmente l''élément feu de 2 et l''élément foudre de 1.', '-', 22),
(29, 5, 'Archange Génésif ', 'P', 'Augmente l''élément bois de 2 et l''élément foudre de 1.', '-', 23),
(30, 5, 'Prêtre', 'U', 'Augmente la rapidité de la récupération des points de vie de tous les Dinoz lors du repos.', '-', 24);

-- --------------------------------------------------------

--
-- Structure de la table `foudre_plus`
--

CREATE TABLE IF NOT EXISTS `foudre_plus` (
  `num` int(11) NOT NULL,
  `niv` int(11) NOT NULL,
  `nom` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `type` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `energie` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `idparent` int(11) DEFAULT NULL,
  PRIMARY KEY (`num`,`niv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='compétences foudre lv50+';

--
-- Contenu de la table `foudre_plus`
--

INSERT INTO `foudre_plus` (`num`, `niv`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'Soutient Moral', 'P', 'Augmente l''endurance de 10', '-', 0),
(2, 2, 'Stimulation Cardiaque', 'P', 'Augmente la capacité de guérison du dinoz de 20%', '-', 1),
(3, 2, 'Jaune', 'P', 'Augmente la puissance des assauts de 20 aux steppes Magnétiques', '-', 1),
(4, 3, 'Morsure du Soleil', 'E', 'Donne le statut "ébloui" aux dinoz adverses', 'Normale', 2),
(5, 3, 'Crampe Chronique', 'E', 'Le dinoz perd 10 points d''énergie et diminue de 15% la capacité de récupération d''un dinoz', '-', 3),
(6, 4, 'Batterie Supplémentaire', 'S', 'Augmente le maximum de points de vie de 50 et diminue de 15 l''initiative du dinoz', '-', 4),
(7, 4, 'Einstein', 'C', '+1 case d''énergétiser', '-', 4),
(8, 4, 'Barrière électrifiée', 'E', 'Augmente la défense air de 20', '-', 5),
(9, 4, 'Oracle', 'P', 'Double les chances de sortie de l''invocation du dinoz', '-', 5),
(10, 5, 'Réceptacle Aérien', 'E', 'Permet d''annuler les compétences sphériques air A et E d''un adversaire', '-', 6),
(11, 5, 'Feu de St Elme', 'A', 'Tous les dinoz ayant moins de 10 en foudre perdent 5% de leur pv pendant 3 tours', '-', 7),
(12, 5, 'Force de Zeus', 'P', 'Augmente les assauts de foudre 20', '-', 8),
(13, 5, '...', 'P', 'Augmente l''esquive de 20%', '-', 9);

-- --------------------------------------------------------

--
-- Structure de la table `invocations`
--

CREATE TABLE IF NOT EXISTS `invocations` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` enum('E') NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `race` varchar(20) NOT NULL,
  `parent_eau` int(11) NOT NULL,
  `parent_feu` int(11) NOT NULL,
  `parent_foudre` int(11) NOT NULL,
  `parent_air` int(11) NOT NULL,
  `parent_bois` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='table des competences invocations';

--
-- Contenu de la table `invocations`
--

INSERT INTO `invocations` (`id`, `nom`, `type`, `description`, `energie`, `race`, `parent_eau`, `parent_feu`, `parent_foudre`, `parent_air`, `parent_bois`) VALUES
(1, 'Quetzalcoatl ', 'E', 'Attaque de 40 :foudre: sur tous les ennemis', '-', 'quetzu', 0, 0, 18, 0, 0),
(2, 'Fujin ', 'E', '+ 50% de vitesse aux dinozs du groupe', '-', 'nuagoz', 0, 0, 19, 11, 0),
(3, 'Bénédiction des fées', 'E', '+10 d''initiative aux dinozs du groupe', '-', 'gorilloz ', 0, 24, 0, 0, 12),
(4, 'Djinn', 'E', 'Attaque de :air: 20 sur tous les ennemis', '-', 'pteroz', 0, 8, 0, 24, 0),
(5, 'Raijin', 'E', 'Attaque de :foudre: 20 sur tous les ennemis', '-', 'planaile ', 0, 0, 18, 10, 0),
(6, 'Loup-Garou', 'E', 'Attaque de :bois: 30 sur tous les ennemis', '-', 'castivore', 0, 0, 0, 20, 21),
(7, 'Léviathan', 'E', 'Attaque de :eau: 20 sur tous les ennemis', '-', 'mahamuti ', 29, 0, 0, 9, 0),
(8, 'Armure d''Ifrit', 'E', 'Donne 20 en défense à l''élément :feu: à tous vos dinozs', '-', 'pigmou', 0, 19, 0, 0, 11),
(9, 'Golem', 'E', 'Donne 20 en défense :foudre: à l''élément à tous vos dinozs', '-', 'rocky', 0, 11, 16, 0, 0),
(10, 'Ondine', 'E', 'Attaque de 30 :eau: sur un adversaire', '-', 'sirain', 20, 22, 0, 0, 0),
(11, 'Baleine blanche', 'E', '+20 défense :eau: à tous vos dinozs', '-', 'winks', 27, 0, 15, 0, 0),
(12, 'Hadès', 'E', 'Empoisonne et ralentit', '-', 'santaz', 6, 0, 0, 24, 8),
(13, 'Grand Singe Sacré', 'E', '+20% d''esquive pour le groupe', '-', 'toufufu ', 0, 0, 19, 0, 18),
(14, 'Reine des frelons', 'E', 'Diminue l''endurance et la régénération du groupe de dinoz adverse', '-', 'soufflet ', 0, 0, 0, 20, 13),
(15, 'Bouddha', 'E', '+10 en défense dans chaque élément pour les dinozs du groupe', '-', 'hippoclamp ', 0, 5, 4, 18, 0),
(16, 'Yggdrasil ', 'E', 'Donne 20 en défense :bois: pour tous les dinozs du groupe', '-', 'wanwan', 0, 0, 0, 7, 23),
(17, 'Vulcain ', 'E', 'Attaque de 20 :feu: sur tous les ennemis', '-', 'moueffe', 0, 18, 17, 0, 0),
(18, 'Totem Ancestral Aér.', 'E', 'Attaque de 30 :air: sur un adversaire', '-', 'kabuki', 0, 20, 0, 18, 0),
(19, 'Salamandre ', 'E', 'Attaque de 40 :feu: sur un adversaire', '-', 'Feross', 15, 15, 0, 0, 0),
(20, 'Hercolubus', 'E', 'Attaque non-élémentale sur tous les ennemis', '-', 'smog', 0, 0, 28, 21, 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='tables des users';

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`) VALUES
(19751, 'Jkratos95', 'http://imgup.motion-twin.com/twinoid/0/c/ddb267d5_19751_100x100.gif'),
(5491656, 'PEPITO', 'http://imgup.motion-twin.com/twinoid/b/6/4e67715e_5491656_100x100.png'),
(8702552, 'Cavaswaggduslip', 'http://imgup.motion-twin.com/twinoid/f/6/e08710a6_8702552_100x100.gif'),
(2716239, 'Ashe', 'http://imgup.motion-twin.com/twinoid/2/c/ed38b5bd_2716239_100x100.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
