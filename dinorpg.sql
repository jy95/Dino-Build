-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 20 Mai 2015 à 01:09
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dinorpg`
--

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

CREATE TABLE IF NOT EXISTS `competences` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `niv` int(11) NOT NULL,
  `element` varchar(6) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `idparent` int(11) NOT NULL,
  PRIMARY KEY (`num`,`niv`,`element`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='table des compétences' AUTO_INCREMENT=144 ;

--
-- Contenu de la table `competences`
--

INSERT INTO `competences` (`num`, `niv`, `element`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'eau', 'Canon à eau', 'A', 'Attaque un ennemi avec un pouvoir d''Eau 6.', 'Faible', 0),
(2, 1, 'eau', 'Perception', 'P', 'Augmente la puissance de tous les assauts d''Eau de 4 et permet d''attaquer les ennemis intangibles.', '-', 0),
(3, 1, 'eau', 'Mutation', 'P', 'Augmente le maximum de points de vie de 30.', '-', 0),
(4, 2, 'eau', 'Gel', 'A', 'Attaque un ennemi avec un pouvoir d''Eau 5. L''ennemi est ensuite ralenti.', 'Faible', 1),
(5, 2, 'eau', 'Douche Ecossaise', 'E', 'Attaque tous les ennemis avec un pouvoir d\\Eau 2.', 'Faible', 1),
(6, 2, 'eau', 'Coups sournois', 'A', 'Attaque un ennemi. En cas de réussite l''ennemi perds la moitié de ses points de vie.', 'Faible', 2),
(7, 2, 'eau', 'Apprenti pecheur', 'C', 'Permet au Dinoz de pêcher des petits poissons dans certains lieux.', '-', 2),
(8, 2, 'eau', 'Poche Ventrale', 'S', 'Permet au Dinoz d''être équipé avec un objet de combat supplémentaire.', '-', 3),
(9, 2, 'eau', 'Karaté Sous-Marin', 'P', 'Augmente la puissance de tous les assauts et pouvoirs d''Eau de 10.', '-', 3),
(10, 3, 'eau', 'Zéro absolu', 'P', 'Augmente la défense contre le feu de 25.', '-', 4),
(11, 3, 'eau', 'Pétrification', 'A', 'Pétrifie un ennemi.', 'Faible', 4),
(12, 3, 'eau', 'Accuponcture', 'S', 'Donne le statut Guérison. Si un ennemi réussi un assaut contre le Dinoz, l''ennemi perds 1 point de vie.', '_', 5),
(13, 3, 'eau', 'Sapeur', 'S', 'La probabilité d''utilisation des objets de combat est augmentée de 50%.', '_', 5),
(14, 3, 'eau', 'Coup Fatal', 'A', 'Attaque un ennemi. S''il est touché, il perd tous ses points de vie.', 'Faible', 6),
(15, 3, 'eau', 'Entrainement S-M', 'P', 'Augmente le maximum des points de vie de 10.', '-', 6),
(16, 3, 'eau', 'Pecheur confirmé', 'C', 'Permet au Dinoz de pêcher des gros poissons dans certains lieux.', '-', 7),
(17, 3, 'eau', 'Marécage', 'E', 'Ralentis tous les ennemis.', 'Faible', 7),
(18, 3, 'eau', 'Sumo', 'P', 'Augmente le maximum de points de vie de 100.', '-', 8),
(19, 3, 'eau', 'Sans pitié', 'S', 'Choisi la cible avec le moins de points de vie pour chaque assaut.', '-', 8),
(20, 3, 'eau', 'Clone Aqueux', 'E', 'Crée un clone du Dinoz avec 1 point de vie.', 'Forte', 9),
(21, 3, 'eau', 'Griffes Empoissonées', 'S', 'Si un des assauts d''Eau du Dinoz touche un ennemi, il est empoisonné.', '-', 9),
(22, 4, 'eau', 'Rayon Kaar-Sher', 'A', 'Attaque tous les ennemis avec un pouvoir d''Eau 7.', 'Forte', 11),
(23, 4, 'eau', 'Magasinier', 'U', 'Augmente le maximum d''objets stockable de 50%..', '-', 13),
(24, 4, 'eau', 'EntrainementSMavancé', 'P', 'Augmente le maximum des points de vie de 20.', '-', 15),
(25, 4, 'eau', 'Maitre pêcheur', 'C', 'Permet au Dinoz de pêcher des poissons rares ou exceptionnels dans certains lieux.', '-', 16),
(26, 4, 'eau', 'Cuisinier', 'U', 'Augmente le gain de vie des objets de 10% pour tous les Dinoz.', '-', 18),
(27, 4, 'eau', 'Sang Acide', 'S', 'Si un des assauts d''un ennemi touche le Dinoz, il peut faire perdre de la vie à l''ennemi.', '-', 21),
(28, 5, 'eau', 'Maitre nageur', 'S', 'Augmente l''élément Eau de 5.', '-', 24),
(29, 1, 'bois', 'Carapace', 'P', 'Augmente l''armure de 1.', '-', 0),
(30, 1, 'bois', 'Endurance', 'P', 'Augmente la défense Bois de 2.', '-', 0),
(31, 1, 'bois', 'Sauvagerie', 'P', 'Augmente la puissance des assauts de Bois de 5.', '-', 0),
(32, 2, 'bois', 'Sympathique', 'S', 'Le Dinoz peut être suivi par un Dinoz supplémentaire.', '-', 29),
(33, 2, 'bois', 'Vignes', 'E', 'Diminue l''initiative d''un ennemi de 15.', 'Faible', 29),
(34, 2, 'bois', 'Fouille', 'C', 'Permet au Dinoz de trouver des Artefacts dans certains lieux.', '-', 30),
(35, 2, 'bois', 'Croissance', 'P', 'Augmente la puissance de tous les assauts de 1 et augmente le maximum de points de vie de 20.', '-', 30),
(36, 2, 'bois', 'Tenacité', 'P', 'Augmente le minimum de dégâts de 1.', '-', 31),
(37, 2, 'bois', 'Renforts korgons', 'E', 'Appelle un Korgon pour aider à combattre.', 'Normale', 31),
(38, 3, 'bois', 'Planificateur', 'C', 'Permet au Dinoz de fouiller une case supplémentaire.', '-', 32),
(39, 3, 'bois', 'Héritage Faroe', 'P', 'Augmente la puissance des attaque de Bois de 12 et l''armure de 1.', '-', 32),
(40, 3, 'bois', 'Etat Primal', 'E', 'Annule tous les statuts positifs des ennemis et tous les statuts négatifs du Groupe.', 'Faible', 33),
(41, 3, 'bois', 'Printemps Précoce', 'E', 'Tous les autres Dinoz du Groupe regagnent jusqu''à autant de points de vie que l''élément Bois du Dinoz.', 'Faible', 33),
(42, 3, 'bois', 'Détective', 'C', 'Permet au Dinoz de trouver des artefacts peu communs dans certains lieux.', '-', 34),
(43, 3, 'bois', 'Expert en Fouilles', 'C', 'Permet au Dinoz de fouiller une case supplémentaire.', '-', 34),
(44, 3, 'bois', 'Cocon', 'S', 'Augmente la rapidité de la récupération des points de vie au repos.', '-', 35),
(45, 3, 'bois', 'Large Machoire', 'P', 'Augmente la puissance des assauts de Bois de 15.', '-', 35),
(46, 3, 'bois', 'Charisme', 'S', 'Le Dinoz peut être suivi par un Dinoz supplémentaire.', '-', 36),
(47, 3, 'bois', 'Résistance à la Magi', 'E', 'Annule tous les statuts négatifs.', 'Faible', 36),
(48, 3, 'bois', 'Acrobate', 'P', 'Augmente la vitesse de 15%.', '-', 37),
(49, 3, 'bois', 'Instinct Sauvage', 'P', 'Augmente de 2 l''élément Bois.', '-', 37),
(50, 4, 'bois', 'Esprit Gorilloz', 'E', 'Appelle un Esprit Gorilloz pour aider à combattre.', 'Forte', 39),
(51, 4, 'bois', 'Garde Forestier', 'P', 'Augmente la défense Bois de tous les Dinoz du Groupe de 3.', '-', 41),
(52, 4, 'bois', 'Archéologue', 'C', 'Permet au Dinoz de trouver des artefacts rares ou exceptionnels dans certains lieux.', '-', 42),
(53, 4, 'bois', 'Géant', 'P', 'Augmente la puissance des assauts de 5 et le maximum de points de vie de 30. Diminue la vitesse du Dinoz de 20%.', '-', 44),
(54, 4, 'bois', 'Leader', 'U', 'Augmente le nombre maximum de Dinoz de 3.', '-', 46),
(55, 4, 'bois', 'Ingénieur', 'U', 'Tous les dinoz peuvent être équipés d''un objet de combat supplémentaire.', '-', 49),
(56, 5, 'bois', 'Colosse', 'P', 'Augmente la puissance de tous les assauts de 15 et le maximum de points de vie de 50. Diminue la vitesse du Dinoz de 20%.', '-', 53),
(57, 1, 'feu', 'Force', 'P', 'Augmente la puissance de tous les assauts de 1.', '-', 0),
(58, 1, 'feu', 'Griffes Enflammées', 'P', 'Augmente la puissance de tous les assauts de Feu de 7.', '-', 0),
(59, 1, 'feu', 'Colère', 'E', 'Augmente la puissance du prochain assaut de 25%.', 'Faible', 0),
(60, 2, 'feu', 'Arts Martiaux', 'P', 'Augmente la puissance de tous les assauts de 2.', '-', 57),
(61, 2, 'feu', 'Charge', 'P', 'Augmente la puissance du premier assaut de 5.', '-', 57),
(62, 2, 'feu', 'Chasseur goupignon', 'C', 'Permet au Dinoz de chasser des petits animaux dans certains lieux.', '-', 58),
(63, 2, 'feu', 'Souffle Ardent', 'A', 'Attaque tous les ennemis avec un pouvoir de Feu 5.', 'Faible', 58),
(64, 2, 'feu', 'Furie', 'P', 'Augmente la puissance de tous les assauts de 3 et diminue toutes les défenses de 2.', '-', 59),
(65, 2, 'feu', 'Sang Chaud', 'P', 'Augmente l''initiative de 4.', '-', 59),
(66, 3, 'feu', 'Waïkikidô', 'P', 'Augmente les chances de contre-attaque de 10% et le maximum de points de vie de 20. Diminue l''initiative du Dinoz de 5.', '-', 60),
(67, 3, 'feu', 'Vigilance ', 'P', 'Augmente la défense Feu de 5.', '-', 60),
(68, 3, 'feu', 'Paume Chalumeau', 'A', 'Attaque un ennemi avec un pouvoir de Feu 10 puis diminue l''initiative du Dinoz de 15.', 'Faible', 60),
(69, 3, 'feu', 'Kamikaze', 'A', 'Attaque un ennemi avec un pouvoir de Feu 15 puis le Dinoz perd la moitié de ses points de vie.', 'Faible', 61),
(70, 3, 'feu', 'Chasseur de Géant', 'C', 'Permet au Dinoz de chasser des animaux moyens dans certains lieux.', '-', 62),
(71, 3, 'feu', 'Coulée de Lave', 'A', 'Attaque un ennemi avec un pouvoir de Feu 12.', 'Normale', 62),
(72, 3, 'feu', 'Boule de Feu', 'A', 'Attaque un ennemi avec un pouvoir de Feu 7.', 'Faible', 63),
(73, 3, 'feu', ' Combustion', 'E', 'Tous les ennemis perdent des points de vie égaux à leur élément Bois.', 'Faible', 63),
(74, 3, 'feu', 'Aura Incandescante', 'P', 'Augmente l''élément Feu de 2.', '-', 64),
(75, 3, 'feu', 'Vengeance', 'P', 'Augmente les chances de contre-attaque de 5%.', '-', 64),
(76, 3, 'feu', 'Sieste', 'A', 'Le Dinoz regagne jusqu''à 20 points de vie et s''endort.', 'Faible', 65),
(77, 3, 'feu', 'Coeur Ardent', 'P', 'Augmente la puissance de tous les assauts de feu de 12 et augmente le maximum de point de vie de 20.', '-', 65),
(78, 4, 'feu', 'Chef de guerre', 'P', 'Augmente la puissance de tous les assauts de tous les Dinoz du Groupe de 2.', '-', 67),
(79, 4, 'feu', 'Bélier', 'P', 'Augmente la puissance du premier assaut de 20.', '-', 69),
(80, 4, 'feu', 'Chasseur de Dragon', 'C', 'Permet au Dinoz de chasser des animaux très rares et dangereux dans certains lieux.', '-', 70),
(81, 4, 'feu', 'Torche', 'S', 'Le Dinoz est enflammé.', '-', 73),
(82, 4, 'feu', 'Météores', 'A', 'Attaque tous les ennemis avec un pouvoir de Feu 10.', 'Forte', 74),
(83, 4, 'feu', 'Self-Contrôle', 'S', 'Empêche tous les statuts négatifs et diminue l''initiative de 3.', '-', 76),
(84, 5, 'feu', 'Brave', 'S', 'Le Dinoz ne pourra plus faire parti d''un Groupe. Augmente l''élément Feu de 6, le maximum de point de vie de 50 et la vitesse de 15%.', '-', 83),
(85, 1, 'foudre', 'Focus', 'E', 'Augmente la puissance du prochain assaut d''un bonus de Foudre 1.', 'Faible', 0),
(86, 1, 'foudre', 'Intelligence', 'S', 'Augmente le gain d''expérience en fin de combat de 5%.', '-', 0),
(87, 1, 'foudre', 'Célérité', 'P', 'Augmente la vitesse du Dinoz de 15%.', '-', 0),
(88, 2, 'foudre', 'Concentration', 'S', 'Attaque toujours le même ennemi.', '-', 85),
(89, 2, 'foudre', 'Régénérescence', 'S', 'Augmente la rapidité de récupération des points de vie lors du repos.', '-', 85),
(90, 2, 'foudre', 'Premiers Soins', 'S', 'Permet au Dinoz de récuperer un point de vie à la fin du combat s''il a perdu de la vie.', '-', 86),
(91, 2, 'foudre', 'Paratonnerre', 'C', 'Permet au Dinoz d''absorber l''énergie de la foudre dans certains lieux.', '-', 86),
(92, 2, 'foudre', 'Coup Double', 'P', 'Augmente les chances de multi-coup de 20%.', '-', 87),
(93, 2, 'foudre', 'Attaque-éclair', 'P', 'Augmente la vitesse des attaques Foudre de 40%.', '-', 87),
(94, 3, 'foudre', 'Voie de Kaos', 'P', 'Augmente la puissance des assauts de Feu et de Foudre de 6.', '-', 88),
(95, 3, 'foudre', ' Voie de Gaïa', 'P', 'Augmente la puissance des défenses Bois et Foudre de 3.', '-', 88),
(96, 3, 'foudre', 'Purée Salvatrice', 'E', 'Annule tous les statuts négatifs du groupe.', 'Forte', 89),
(97, 3, 'foudre', 'Aura Hermétique', 'E', 'Donne le statut Bouclier.', 'Faible', 89),
(98, 3, 'foudre', 'Médecine', 'S', 'Permet de récupérer jusqu''à 3 points de vie à la fin du combat.', '-', 90),
(99, 3, 'foudre', 'Adrénaline', 'P', 'Augmente la vitesse des attaques Foudre de 50%.', '-', 90),
(100, 3, 'foudre', 'Fission élémentaire', 'C', 'Permet au Dinoz de collecter l''énergie de tous les éléments dans certains lieux.', '-', 91),
(101, 3, 'foudre', 'Croc-Diamant', 'P', 'Augmente la puissance de tous les assauts de 2.', '-', 91),
(102, 3, 'foudre', 'Foudre', 'A', 'Attaque un ennemi avec un pouvoir de Foudre 10.', 'Normale', 92),
(103, 3, 'foudre', 'Danse Foudroyante ', 'A', 'Attaque 5 fois avec un pouvoir de Foudre 3.', 'Forte', 92),
(104, 3, 'foudre', 'Plan de Carrière', 'S', 'Permet au Dinoz de retirer une fois son élément lors d''un changement de niveau.', '-', 92),
(105, 3, 'foudre', 'Embuche', 'P', 'Augmente l''initiative de 7.', '-', 93),
(106, 4, 'foudre', 'CrépusculeFlamboyant', 'A', 'Attaque tous les ennemis avec un pouvoir Feu 6 + Foudre 6.', 'Forte', 94),
(107, 4, 'foudre', 'Aube Feuillue ', 'A', 'Régénère tous les Dinoz du Groupe jusqu''à Foudre 2 + Bois 2 points de vie.', 'Très Forte', 95),
(108, 4, 'foudre', 'Bénédiction', 'E', 'Donne le statuts béni à tous les Dinoz du groupe.', 'Faible', 96),
(109, 4, 'foudre', 'Brancardier', 'S', 'Permet à un autre Dinoz du Groupe de récupérer jusqu''à 5 points de vie à la fin du combat.', '-', 98),
(110, 4, 'foudre', 'Marchand', 'U', 'Diminue les prix de la boutique volante de 10%.', '-', 100),
(111, 4, 'foudre', 'Réincarnation', 'S', 'Le Dinoz pourra se réincarner à partir du niveau 40. Il redeviendra niveau 1 et partira avec un bonus de 5 points de compétences (en plus de ceux qu''il a déjà).', '-', 104),
(112, 5, 'foudre', 'Archange Corrosif ', 'P', 'Augmente l''élément feu de 2 et l''élément foudre de 1.', '-', 106),
(113, 5, 'foudre', 'Archange Génésif ', 'P', 'Augmente l''élément bois de 2 et l''élément foudre de 1.', '-', 107),
(114, 5, 'foudre', 'Prêtre', 'U', 'Augmente la rapidité de la récupération des points de vie de tous les Dinoz lors du repos.', '-', 108),
(115, 1, 'air', 'Agilité', 'P', 'Augmente la puissance des assauts d''Air de 5.', '-', 0),
(116, 1, 'air', 'Stratégie', 'S', 'Adopte la meilleure stratégie d''attaque en fonction des défenses des ennemis.', '-', 0),
(117, 1, 'air', 'Mistral', 'A', 'Attaque tous les ennemis avec un pouvoir d''Air 3.', 'Faible', 0),
(118, 2, 'air', 'Esquive', 'P', 'Augmente les chances d''esquive de 10%.', '-', 115),
(119, 2, 'air', 'Saut', 'P', 'Permet d''attaquer les ennemis en vol.', '-', 115),
(120, 2, 'air', 'Analyse', 'S', 'Choisi la meilleure cible pour chaque attaque.', '-', 116),
(121, 2, 'air', 'Cueillette', 'C', 'Permet au Dinoz de récolter des plantes dans certains lieux.', '-', 116),
(122, 2, 'air', 'Tai-Chi ', 'A', 'Augmente la puissance des assauts d''Air de 15. Diminue la vitesse des Attaques d''air de 20%.', '-', 117),
(123, 2, 'air', 'Tornade', 'A', 'Attaque tous les ennemis avec un pouvoir de Air 5.', 'Normale', 117),
(124, 3, 'air', 'Elasticité', 'P', 'Augmente la puissance des assauts d''Air de 10 et augmente la défense Air de 3.', '-', 118),
(125, 3, 'air', 'Disque Vacuum', 'A', 'Attaque un ennemi avec un pouvoir d''Air de 12.', 'Forte', 118),
(126, 3, 'air', 'Attaque Plongeante', 'A', 'Attaque un ennemi avec un assaut ayant un bonus d''Air 2.', 'Faible', 119),
(127, 3, 'air', 'Furtivité', 'P', 'Augmente les défenses Air, Eau et Foudre de 2.', '-', 119),
(128, 3, 'air', 'Spécialiste', 'S', 'Pour les assauts, l''élément le plus faible est remplacé par l''élément le plus fort.', '-', 120),
(129, 3, 'air', 'Talon d''Achille ', 'P', 'Augmente la puissance de tous les assauts de 2.', '-', 120),
(130, 3, 'air', 'Oeil de Lynx ', 'C', 'Permet au Dinoz de trouver des plantes exotiques dans certains lieux.', '-', 121),
(131, 3, 'air', 'Nuage Toxique ', 'A', 'Empoisonne tous les ennemis.', 'Forte', 121),
(132, 3, 'air', 'Éveil', 'E', 'Diminue la vitesse des attaques d''Air de 20%.', '-', 122),
(133, 3, 'air', 'Paumes Éjectables ', 'A', 'Attaque un ennemi avec un assaut de puissance doublée puis diminue l''initiative de 15.', 'Faible', 122),
(134, 3, 'air', 'Vent Vif ', 'E', 'Donne le statut Accéléré.', 'Normale', 123),
(135, 3, 'air', 'Forme Vaporeuse ', 'S', 'Permet de gagner le statut Intangible en se défendant.', '-', 123),
(136, 4, 'air', 'Trou Noir ', 'A', 'Envoie un ennemi dans une dimension parallèle.', 'Très Forte', 125),
(137, 4, 'air', 'Maître Lévitateur ', 'S', 'Permet à tous les Dinoz du Groupe d''attaquer les ennemis en vol.', '-', 126),
(138, 4, 'air', 'Haleine Fétive ', 'S', 'Empoisonne les ennemis touchés par un assaut.', '-', 131),
(139, 4, 'air', 'Professeur', 'U', 'Augmente le gain d''expérience de tous les Dinoz de 5%.', '-', 132),
(140, 4, 'air', 'Méditation Solitaire', 'P', 'Augmente la défense Air de 3, diminue la vitesse des attaques Air de 50%.', '-', 132),
(141, 4, 'air', 'Souffle de Vie ', 'S', 'Rends invulnérable au poison et aux malédictions.', '-', 134),
(142, 5, 'air', 'Méditation Transcend', 'P', 'Augmente la défense air de 6, diminue la vitesse des attaques air de 50%', '-', 134),
(143, 6, 'air', 'Forme Etherale ', 'S', 'Donne le statut Intangible.', '-', 140);

-- --------------------------------------------------------

--
-- Structure de la table `double`
--

CREATE TABLE IF NOT EXISTS `double` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `parent1` int(11) NOT NULL,
  `parent2` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='table des competences double';

--
-- Contenu de la table `double`
--

INSERT INTO `double` (`id`, `nom`, `parent1`, `parent2`) VALUES
(0, 'Electrolyse ', 17, 102),
(1, 'Maître Elémentaire ', 10, 73),
(3, 'Surcharge', 124, 99),
(4, 'Secousse', 133, 49),
(5, 'Choc', 40, 95),
(6, 'Armure de basalte ', 44, 66),
(7, 'Sprint', 94, 69),
(8, 'Infatiguable', 47, 20),
(9, 'Vendetta', 129, 75),
(10, 'Bulle', 135, 13);

-- --------------------------------------------------------

--
-- Structure de la table `quetzu`
--

CREATE TABLE IF NOT EXISTS `quetzu` (
  `num` int(11) NOT NULL AUTO_INCREMENT,
  `niv` int(11) NOT NULL,
  `element` varchar(6) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `type` char(1) NOT NULL,
  `description` varchar(255) NOT NULL,
  `energie` varchar(15) NOT NULL,
  `idparent` int(11) NOT NULL,
  PRIMARY KEY (`num`,`niv`,`element`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='competences quetzu eau et feu' AUTO_INCREMENT=61 ;

--
-- Contenu de la table `quetzu`
--

INSERT INTO `quetzu` (`num`, `niv`, `element`, `nom`, `type`, `description`, `energie`, `idparent`) VALUES
(1, 1, 'eau', 'Canon à eau', 'A', 'Attaque un ennemi avec un pouvoir d''Eau 6.', 'Faible', 0),
(2, 1, 'eau', 'Perception', 'P', 'Augmente la puissance de tous les assauts d''Eau de 4 et permet d''attaquer les ennemis intangibles.', '-', 0),
(3, 1, 'eau', 'Mutation', 'P', 'Augmente le maximum de points de vie de 30.', '-', 0),
(4, 2, 'eau', 'Gel', 'A', 'Attaque un ennemi avec un pouvoir d''Eau 5. L''ennemi est ensuite ralenti.', 'Faible', 1),
(5, 2, 'eau', 'Douche Ecossaise', 'E', 'Attaque tous les ennemis avec un pouvoir d\\Eau 2.', 'Faible', 1),
(6, 2, 'eau', 'Coups sournois', 'A', 'Attaque un ennemi. En cas de réussite l''ennemi perds la moitié de ses points de vie.', 'Faible', 2),
(7, 2, 'eau', 'Apprenti pecheur', 'C', 'Permet au Dinoz de pêcher des petits poissons dans certains lieux.', '-', 2),
(8, 2, 'eau', 'Poche Ventrale', 'S', 'Permet au Dinoz d''être équipé avec un objet de combat supplémentaire.', '-', 3),
(9, 2, 'eau', 'Karaté Sous-Marin', 'P', 'Augmente la puissance de tous les assauts et pouvoirs d''Eau de 10.', '-', 3),
(10, 2, 'eau', 'Ecailles luminescent', 'P', 'Augmente l''armure de 2.', '-', 3),
(11, 3, 'eau', 'Zéro absolu', 'P', 'Augmente la défense contre le feu de 25.', '-', 4),
(12, 3, 'eau', 'Pétrification', 'A', 'Pétrifie un ennemi.', 'Faible', 4),
(13, 3, 'eau', 'Accuponcture', 'S', 'Donne le statut Guérison. Si un ennemi réussi un assaut contre le Dinoz, l''ennemi perds 1 point de vie.', '-', 5),
(14, 3, 'eau', 'Sapeur', 'S', 'La probabilité d''utilisation des objets de combat est augmentée de 50%.', '-', 5),
(15, 3, 'eau', 'Coup Fatal', 'A', 'Attaque un ennemi. S''il est touché, il perd tous ses points de vie.', 'Faible', 6),
(16, 3, 'eau', 'Entrainement S-M', 'P', 'Augmente le maximum des points de vie de 10.', '-', 6),
(17, 3, 'eau', 'Pecheur confirmé', 'C', 'Permet au Dinoz de pêcher des gros poissons dans certains lieux.', '-', 7),
(18, 3, 'eau', 'Marécage', 'E', 'Ralentis tous les ennemis.', 'Faible', 7),
(19, 3, 'eau', 'Sumo', 'P', 'Augmente le maximum de points de vie de 100.', '-', 8),
(20, 3, 'eau', 'Sans pitié', 'S', 'Choisi la cible avec le moins de points de vie pour chaque assaut.', '-', 8),
(21, 3, 'eau', 'Clone Aqueux', 'E', 'Crée un clone du Dinoz avec 1 point de vie.', 'Forte', 9),
(22, 3, 'eau', 'Griffes Empoissonées', 'S', 'Si un des assauts d''Eau du Dinoz touche un ennemi, il est empoisonné.', '-', 9),
(23, 3, 'eau', 'Peau de Serpent', 'P', 'Augmente de 10% l''esquive des assauts et réduit de 15% la vitesse des attaques eau.', '-', 10),
(24, 4, 'eau', 'Rayon Kaar-Sher', 'A', 'Attaque tous les ennemis avec un pouvoir d''Eau 7.', 'Forte', 12),
(25, 4, 'eau', 'Magasinier', 'U', 'Augmente le maximum d''objets stockable de 50%..', '-', 14),
(26, 4, 'eau', 'EntrainementSMavancé', 'P', 'Augmente le maximum des points de vie de 20.', '-', 16),
(27, 4, 'eau', 'Maitre pêcheur', 'C', 'Permet au Dinoz de pêcher des poissons rares ou exceptionnels dans certains lieux.', '-', 17),
(28, 4, 'eau', 'Cuisinier', 'U', 'Augmente le gain de vie des objets de 10% pour tous les Dinoz.', '-', 19),
(29, 4, 'eau', 'Sang Acide', 'S', 'Si un des assauts d''un ennemi touche le Dinoz, il peut faire perdre de la vie à l''ennemi.', '-', 22),
(30, 5, 'eau', 'Maitre nageur', 'S', 'Augmente l''élément Eau de 5.', '-', 25),
(31, 1, 'feu', 'Force', 'P', 'Augmente la puissance de tous les assauts de 1.', '-', 0),
(32, 1, 'feu', 'Griffes Enflammées', 'P', 'Augmente la puissance de tous les assauts de Feu de 7.', '-', 0),
(33, 1, 'feu', 'Colère', 'E', 'Augmente la puissance du prochain assaut de 25%.', 'Faible', 0),
(34, 2, 'feu', 'Propulsions divines', 'P', 'Augmente la vitesse des attaques de feu de 30%. Réduit l''élément feu de 2.', '-', 31),
(35, 2, 'feu', 'Arts Martiaux', 'P', 'Augmente la puissance de tous les assauts de 2.', '-', 31),
(36, 2, 'feu', 'Charge', 'P', 'Augmente la puissance du premier assaut de 5.', '-', 31),
(37, 2, 'feu', 'Chasseur goupignon', 'C', 'Permet au Dinoz de chasser des petits animaux dans certains lieux.', '-', 32),
(38, 2, 'feu', 'Souffle Ardent', 'A', 'Attaque tous les ennemis avec un pouvoir de Feu 5.', 'Faible', 32),
(39, 2, 'feu', 'Furie', 'P', 'Augmente la puissance de tous les assauts de 3 et diminue toutes les défenses de 2.', '-', 33),
(40, 2, 'feu', 'Sang Chaud', 'P', 'Augmente l''initiative de 4.', '-', 33),
(41, 3, 'feu', 'Griffes infernales', 'S', 'Inflige des dégâts de feu continus à un adversaire.', '-', 34),
(42, 3, 'feu', 'Waïkikidô', 'P', 'Augmente les chances de contre-attaque de 10% et le maximum de points de vie de 20. Diminue l''initiative du Dinoz de 5.', '-', 35),
(43, 3, 'feu', 'Vigilance ', 'P', 'Augmente la défense Feu de 5.', '-', 35),
(44, 3, 'feu', 'Paume Chalumeau', 'A', 'Attaque un ennemi avec un pouvoir de Feu 10 puis diminue l''initiative du Dinoz de 15.', 'Faible', 35),
(45, 3, 'feu', 'Kamikaze', 'A', 'Attaque un ennemi avec un pouvoir de Feu 15 puis le Dinoz perd la moitié de ses points de vie.', 'Faible', 36),
(46, 3, 'feu', 'Chasseur de Géant', 'C', 'Permet au Dinoz de chasser des animaux moyens dans certains lieux.', '-', 37),
(47, 3, 'feu', 'Coulée de Lave', 'A', 'Attaque un ennemi avec un pouvoir de Feu 12.', 'Normale', 37),
(48, 3, 'feu', 'Boule de Feu', 'A', 'Attaque un ennemi avec un pouvoir de Feu 7.', 'Faible', 38),
(49, 3, 'feu', ' Combustion', 'E', 'Tous les ennemis perdent des points de vie égaux à leur élément Bois.', 'Faible', 38),
(50, 3, 'feu', 'Aura Incandescante', 'P', 'Augmente l''élément Feu de 2.', '-', 39),
(51, 3, 'feu', 'Vengeance', 'P', 'Augmente les chances de contre-attaque de 5%.', '-', 39),
(52, 3, 'feu', 'Sieste', 'A', 'Le Dinoz regagne jusqu''à 20 points de vie et s''endort.', 'Faible', 40),
(53, 3, 'feu', 'Coeur Ardent', 'P', 'Augmente la puissance de tous les assauts de feu de 12 et augmente le maximum de point de vie de 20.', '-', 40),
(54, 4, 'feu', 'Chef de guerre', 'P', 'Augmente la puissance de tous les assauts de tous les Dinoz du Groupe de 2.', '-', 43),
(55, 4, 'feu', 'Bélier', 'P', 'Augmente la puissance du premier assaut de 20.', '-', 45),
(56, 4, 'feu', 'Chasseur de Dragon', 'C', 'Permet au Dinoz de chasser des animaux très rares et dangereux dans certains lieux.', '-', 46),
(57, 4, 'feu', 'Torche', 'S', 'Le Dinoz est enflammé.', '-', 49),
(58, 4, 'feu', 'Météores', 'A', 'Attaque tous les ennemis avec un pouvoir de Feu 10.', 'Forte', 50),
(59, 4, 'feu', 'Self-Contrôle', 'S', 'Empêche tous les statuts négatifs et diminue l''initiative de 3.', '-', 52),
(60, 5, 'feu', 'Brave', 'S', 'Le Dinoz ne pourra plus faire parti d''un Groupe. Augmente l''élément Feu de 6, le maximum de point de vie de 50 et la vitesse de 15%.', '-', 59);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
