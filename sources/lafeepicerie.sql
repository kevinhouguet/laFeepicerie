-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Jeu 15 Mai 2014 à 20:05
-- Version du serveur: 5.5.24-log
-- Version de PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `lafeepicerie`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE IF NOT EXISTS `commande` (
  `commande_code` int(11) NOT NULL AUTO_INCREMENT,
  `commande_date` date DEFAULT NULL,
  `commande_somme` int(11) DEFAULT NULL,
  PRIMARY KEY (`commande_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `commander`
--

CREATE TABLE IF NOT EXISTS `commander` (
  `commande_code` int(11) NOT NULL,
  `produit_code` varchar(5) NOT NULL,
  `commander_quantite` int(11) DEFAULT NULL,
  PRIMARY KEY (`commande_code`,`produit_code`),
  KEY `FK_PRODUIT_CODE` (`produit_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `livre_dor`
--

CREATE TABLE IF NOT EXISTS `livre_dor` (
  `livre_dor_code` int(11) NOT NULL AUTO_INCREMENT,
  `livre_dor_nom` varchar(50) DEFAULT NULL,
  `livre_dor_mail` varchar(50) DEFAULT NULL,
  `livre_dor_commentaire` varchar(255) DEFAULT NULL,
  `livre_dor_prenom` varchar(50) NOT NULL,
  `livre_dor_ville` varchar(100) NOT NULL,
  `livre_dor_date` date NOT NULL,
  PRIMARY KEY (`livre_dor_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `livre_dor`
--

INSERT INTO `livre_dor` (`livre_dor_code`, `livre_dor_nom`, `livre_dor_mail`, `livre_dor_commentaire`, `livre_dor_prenom`, `livre_dor_ville`, `livre_dor_date`) VALUES
(2, 'houguet', 'k.houguet@laposte.net', 'TEST', 'kévin', 'pont de l''isère', '2014-05-15'),
(4, 'houguet', 'k.houguet@laposte.net', 'RE test', 'kévin', 'pont de l''isère', '2014-05-15');

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int(11) NOT NULL AUTO_INCREMENT,
  `news_libelle` varchar(30) NOT NULL,
  `news_content` varchar(255) NOT NULL,
  `news_type` varchar(30) NOT NULL,
  `news_image` varchar(30) NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`news_id`, `news_libelle`, `news_content`, `news_type`, `news_image`) VALUES
(1, 'Première news slider', 'Ceci est la première news du slider', 'slider', 'slide_1');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `produit_code` varchar(5) NOT NULL,
  `produit_designation` varchar(30) DEFAULT NULL,
  `produit_description` varchar(500) DEFAULT NULL,
  `produit_prix_unitaire` int(11) DEFAULT NULL,
  `produit_quantite_stock` int(11) DEFAULT NULL,
  `produit_image` varchar(100) DEFAULT NULL,
  `type_produit_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`produit_code`),
  KEY `FK__TYPE_PRODUIT_CODE` (`type_produit_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`produit_code`, `produit_designation`, `produit_description`, `produit_prix_unitaire`, `produit_quantite_stock`, `produit_image`, `type_produit_code`) VALUES
('PRO01', 'Mug', 'Mug avec symbole Arobase, en porcelaine. Couleur blanche, symbole couleur gris-bleu.', 10, 25, 'mug', 6),
('PRO02', 'Assiette', 'Assiette neutre. Couleur blanche avec contour orange – rouge. Matière porcelaine.', 4, 250, 'assiette', 6),
('PRO03', 'Piles', 'Piles duracel, format AAA', 7, 250, 'pile', 6),
('PRO04', 'balai', 'petit balai pour balayer les petites surface', 4, 50, 'balai', 6),
('PRO05', 'Coke Coca', 'Canette de 33cl sans sucre ajouté', 1, 100, 'cokecola', 4),
('PRO06', 'Orangina', 'Canette d''orangina au gout orange', 1, 50, 'orangina', 4),
('PRO07', 'Fanta', 'Cannette de Fanta de 33Cl', 1, 50, 'fanta', 4),
('PRO08', 'Pepsi', 'Cannette de Pepsi de 33Cl', 1, 50, 'pepsi', 4),
('PRO09', 'Pommes ', 'Pomme Golden. Provenance : Egypte. \r\nprix au kilos', 1, 50, 'pomme', 1),
('PRO10', 'Bananes', 'Bananes plantain. Provenance : Costa Rica\r\nPrix au regime', 1, 20, 'banane', 1),
('PRO11', 'Tomate', 'Tomates rondes. Provenance : Maroc\r\nPrix au kilos', 2, 50, 'tomate', 1),
('PRO12', 'Fraise', 'Fraises. Provenances : Afrique \r\nPrix kilos', 4, 20, 'fraise', 1),
('PRO13', 'Baguette à l''ancienne', 'Baguette traditionnelle cuit au feu de bois.', 1, 20, 'baguette', 5),
('PRO14', 'Pain de mie', 'Pain de mie au blé complet', 2, 20, 'pain', 5),
('PRO15', 'Cupcake', 'Grand cupcake au chocolat et crème pâtissière.', 2, 20, 'cupcake', 5),
('PRO16', 'Tarte multifruit', 'Tarte multifruit avec des fraises, kiwis, ananas, myrtilles.', 7, 10, 'tarte', 5),
('PRO17', 'Crevettes', 'Grande crevette rose. Provenance : mer méditerranée, vendu au kilo', 8, 10, 'crevettes', 3),
('PRO18', 'Crabe', 'Crabe entier ou pince uniquement. Provenance : Norvège, vendu au kilo.', 18, 5, 'crabe', 3),
('PRO19', 'Saumon', 'Saumon frais. Provenance : océan atlantique vendu au kilo.', 14, 5, 'saumon', 3),
('PRO20', 'Merlan', 'Filet de Merlan. ', 19, 5, 'merlan', 3),
('PRO21', 'Cote d''agneaux', 'Viande d''agneaux française.', 18, 5, 'cote', 2),
('PRO22', 'Faux-filet', 'Viande bovine française.', 22, 5, 'faux', 2),
('PRO23', 'Bavette d''aloyau', 'Viande bovine française.', 18, 5, 'bavette', 2),
('PRO24', 'Brochette', 'Assortiment de brochette de dindes, bœufs, veaux.', 12, 5, 'brochette', 2);

-- --------------------------------------------------------

--
-- Structure de la table `type_produit`
--

CREATE TABLE IF NOT EXISTS `type_produit` (
  `type_produit_code` int(11) NOT NULL AUTO_INCREMENT,
  `type_produit_libelle` varchar(30) DEFAULT NULL,
  `type_produit_image` varchar(30) NOT NULL,
  `type_produit_url` varchar(30) NOT NULL,
  PRIMARY KEY (`type_produit_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `type_produit`
--

INSERT INTO `type_produit` (`type_produit_code`, `type_produit_libelle`, `type_produit_image`, `type_produit_url`) VALUES
(1, 'Fruits et Légumes', 'cat_fruits_legumes', 'fruitslegumes'),
(2, 'Viandes', 'cat_viande', 'viandes'),
(3, 'Poissonnerie', 'cat_poisson', 'poisson'),
(4, 'Boissons', 'cat_boisson', 'boisson'),
(5, 'Boulangerie et Patisserie', 'cat_pat_boulange', 'boulangerie'),
(6, 'Autres', 'cat_autres', 'autres');

-- --------------------------------------------------------

--
-- Structure de la table `type_utilisateur`
--

CREATE TABLE IF NOT EXISTS `type_utilisateur` (
  `type_utilisateur_code` int(11) NOT NULL AUTO_INCREMENT,
  `type_utilisateur_libelle` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`type_utilisateur_code`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `type_utilisateur`
--

INSERT INTO `type_utilisateur` (`type_utilisateur_code`, `type_utilisateur_libelle`) VALUES
(1, 'administrateur'),
(2, 'client');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `utilisateur_code` varchar(5) NOT NULL,
  `utilisateur_nom` varchar(50) DEFAULT NULL,
  `utilisateur_prenom` varchar(50) DEFAULT NULL,
  `utilisateur_civilite` varchar(4) NOT NULL,
  `utilisateur_naissance` date NOT NULL,
  `utilisateur_tel_fixe` varchar(10) NOT NULL,
  `utilisateur_rue` varchar(100) DEFAULT NULL,
  `utilisateur_ville` varchar(50) DEFAULT NULL,
  `utilisateur_codePostal` varchar(5) DEFAULT NULL,
  `utilisateur_tel` varchar(10) DEFAULT NULL,
  `utilisateur_mail` varchar(100) DEFAULT NULL,
  `utilisateur_mdp` varchar(16) DEFAULT NULL,
  `type_utilisateur_code` int(11) DEFAULT NULL,
  PRIMARY KEY (`utilisateur_code`),
  KEY `FK__TYPE_UTILISATEUR_CODE` (`type_utilisateur_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`utilisateur_code`, `utilisateur_nom`, `utilisateur_prenom`, `utilisateur_civilite`, `utilisateur_naissance`, `utilisateur_tel_fixe`, `utilisateur_rue`, `utilisateur_ville`, `utilisateur_codePostal`, `utilisateur_tel`, `utilisateur_mail`, `utilisateur_mdp`, `type_utilisateur_code`) VALUES
('1', 'HOUGUET', 'Kevin', 'M', '1990-03-17', '0442424242', '2 rue martin lelarge', 'valence', '26000', '0642424242', 'kevin_houguet@gmail.com', '1234', 2);

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `commander`
--
ALTER TABLE `commander`
  ADD CONSTRAINT `FK_COMMANDE_CODE` FOREIGN KEY (`commande_code`) REFERENCES `commande` (`commande_code`),
  ADD CONSTRAINT `FK_PRODUIT_CODE` FOREIGN KEY (`produit_code`) REFERENCES `produit` (`produit_code`);

--
-- Contraintes pour la table `produit`
--
ALTER TABLE `produit`
  ADD CONSTRAINT `FK__TYPE_PRODUIT_CODE` FOREIGN KEY (`type_produit_code`) REFERENCES `type_produit` (`type_produit_code`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK__TYPE_UTILISATEUR_CODE` FOREIGN KEY (`type_utilisateur_code`) REFERENCES `type_utilisateur` (`type_utilisateur_code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
