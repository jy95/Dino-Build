-- phpMyAdmin SQL Dump
-- version 4.4.9
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 14 Juin 2015 à 17:17
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `dinorpg`
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
  `idparent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tables des compétences air';

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
(28, 5, 'Méditation Transcend', 'P', 'Augmente la défense air de 6, diminue la vitesse des attaques air de 50%', '-', 20),
(29, 6, 'Forme Etherale ', 'S', 'Donne le statut Intangible.', '-', 28);

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
  `idparent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tables des compétences bois';

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
-- Structure de la table `double`
--

CREATE TABLE IF NOT EXISTS `double` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `parent_eau` int(11) NOT NULL,
  `parent_feu` int(11) NOT NULL,
  `parent_foudre` int(11) NOT NULL,
  `parent_air` int(11) NOT NULL,
  `parent_bois` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='table des competences double';

--
-- Contenu de la table `double`
--

INSERT INTO `double` (`id`, `nom`, `parent_eau`, `parent_feu`, `parent_foudre`, `parent_air`, `parent_bois`) VALUES
(0, 'Electrolyse ', 0, 0, 0, 0, 0),
(1, 'Maître Elémentaire ', 0, 0, 0, 0, 0),
(3, 'Surcharge', 0, 0, 0, 0, 0),
(4, 'Secousse', 0, 0, 0, 0, 0),
(5, 'Choc', 0, 0, 0, 0, 0),
(6, 'Armure de basalte ', 0, 0, 0, 0, 0),
(7, 'Sprint', 0, 0, 0, 0, 0),
(8, 'Infatiguable', 0, 0, 0, 0, 0),
(9, 'Vendetta', 0, 0, 0, 0, 0),
(10, 'Bulle', 0, 0, 0, 0, 0);

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
  `quetzu` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tables des compétences eau';

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
  `quetzu` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tables des compétences feu';

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
(10, 3, 'Aura Incandescante', 'P', 'Augmente l''élément Feu de 2.', '-', 9, 0),
(11, 3, 'Griffes infernales', 'S', 'Inflige des dégâts de feu continus à un adversaire.', '-', 4, 1),
(12, 3, 'Waïkikidô', 'P', 'Augmente les chances de contre-attaque de 10% et le maximum de points de vie de 20. Diminue l''initiative du Dinoz de 5.', '-', 5, 0),
(13, 3, 'Vigilance ', 'P', 'Augmente la défense Feu de 5.', '-', 5, 0),
(14, 3, 'Paume Chalumeau', 'A', 'Attaque un ennemi avec un pouvoir de Feu 10 puis diminue l''initiative du Dinoz de 15.', 'Faible', 5, 0),
(15, 3, 'Kamikaze', 'A', 'Attaque un ennemi avec un pouvoir de Feu 15 puis le Dinoz perd la moitié de ses points de vie.', 'Faible', 6, 0),
(16, 3, 'Chasseur de Géant', 'C', 'Permet au Dinoz de chasser des animaux moyens dans certains lieux.', '-', 7, 0),
(17, 3, 'Coulée de Lave', 'A', 'Attaque un ennemi avec un pouvoir de Feu 12.', 'Normale', 7, 0),
(18, 3, 'Boule de Feu', 'A', 'Attaque un ennemi avec un pouvoir de Feu 7.', 'Faible', 8, 0),
(19, 3, ' Combustion', 'E', 'Tous les ennemis perdent des points de vie égaux à leur élément Bois.', 'Faible', 8, 0),
(20, 3, 'Aura Incandescante', 'P', 'Augmente l''élément Feu de 2.', '-', 9, 0),
(21, 3, 'Vengeance', 'P', 'Augmente les chances de contre-attaque de 5%.', '-', 9, 0),
(22, 3, 'Sieste', 'A', 'Le Dinoz regagne jusqu''à 20 points de vie et s''endort.', 'Faible', 10, 0),
(23, 3, 'Coeur Ardent', 'P', 'Augmente la puissance de tous les assauts de feu de 12 et augmente le maximum de point de vie de 20.', '-', 10, 0),
(24, 4, 'Chef de guerre', 'P', 'Augmente la puissance de tous les assauts de tous les Dinoz du Groupe de 2.', '-', 13, 0),
(25, 4, 'Bélier', 'P', 'Augmente la puissance du premier assaut de 20.', '-', 15, 0),
(26, 4, 'Chasseur de Dragon', 'C', 'Permet au Dinoz de chasser des animaux très rares et dangereux dans certains lieux.', '-', 16, 0),
(27, 4, 'Torche', 'S', 'Le Dinoz est enflammé.', '-', 19, 0),
(28, 4, 'Météores', 'A', 'Attaque tous les ennemis avec un pouvoir de Feu 10.', 'Forte', 20, 0),
(29, 4, 'Self-Control', 'S', 'Empêche tous les statuts négatifs et diminue l''initiative de 3.', '-', 22, 0),
(30, 5, 'Brave', 'S', 'Le Dinoz ne pourra plus faire parti d''un Groupe. Augmente l''élément Feu de 6, le maximum de point de vie de 50 et la vitesse de 15%.', '-', 29, 0);

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
  `idparent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='tables des compétences foudre';

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

--
-- Index pour les tables exportées
--

--
-- Index pour la table `air`
--
ALTER TABLE `air`
  ADD PRIMARY KEY (`num`,`niv`);

--
-- Index pour la table `bois`
--
ALTER TABLE `bois`
  ADD PRIMARY KEY (`num`,`niv`);

--
-- Index pour la table `eau`
--
ALTER TABLE `eau`
  ADD PRIMARY KEY (`num`,`niv`);

--
-- Index pour la table `feu`
--
ALTER TABLE `feu`
  ADD PRIMARY KEY (`num`,`niv`);

--
-- Index pour la table `foudre`
--
ALTER TABLE `foudre`
  ADD PRIMARY KEY (`num`,`niv`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
