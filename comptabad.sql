-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 28 juin 2019 à 10:20
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
-- Base de données :  `comptabad`
--

-- --------------------------------------------------------

--
-- Structure de la table `cheque`
--

DROP TABLE IF EXISTS `cheque`;
CREATE TABLE IF NOT EXISTS `cheque` (
  `ID_Cheque` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Remise` int(11) DEFAULT NULL,
  `ID_ChequeEtat` int(11) DEFAULT NULL,
  `Numero` varchar(100) DEFAULT NULL,
  `Banque` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_Cheque`),
  KEY `ID_Remise` (`ID_Remise`),
  KEY `ID_ChequeEtat` (`ID_ChequeEtat`)
) ENGINE=InnoDB AUTO_INCREMENT=240 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `cheque`
--

INSERT INTO `cheque` (`ID_Cheque`, `ID_Remise`, `ID_ChequeEtat`, `Numero`, `Banque`) VALUES
(201, NULL, NULL, NULL, NULL),
(202, NULL, NULL, NULL, NULL),
(203, NULL, NULL, NULL, NULL),
(204, NULL, NULL, NULL, NULL),
(205, NULL, NULL, NULL, NULL),
(206, NULL, NULL, NULL, NULL),
(207, NULL, NULL, '15', NULL),
(208, NULL, NULL, '120', NULL),
(209, NULL, NULL, '120', NULL),
(210, NULL, NULL, NULL, NULL),
(211, NULL, NULL, NULL, NULL),
(212, NULL, NULL, NULL, NULL),
(213, NULL, NULL, '12', NULL),
(214, NULL, NULL, '1', NULL),
(215, NULL, NULL, '1', NULL),
(216, NULL, NULL, '4', NULL),
(217, NULL, NULL, '4', NULL),
(218, NULL, NULL, '5', NULL),
(219, NULL, NULL, '12', NULL),
(220, NULL, NULL, '12', NULL),
(221, NULL, NULL, '12', NULL),
(222, NULL, NULL, '12', NULL),
(223, NULL, NULL, '12', NULL),
(224, NULL, NULL, '12', NULL),
(225, NULL, NULL, '12', NULL),
(226, NULL, NULL, '12', NULL),
(227, NULL, NULL, '12', NULL),
(228, NULL, NULL, '12', NULL),
(229, NULL, NULL, '12', NULL),
(230, NULL, NULL, '1', NULL),
(231, NULL, NULL, '1', NULL),
(232, NULL, NULL, '1', NULL),
(233, NULL, NULL, '1', NULL),
(234, NULL, NULL, '120', NULL),
(235, NULL, NULL, NULL, NULL),
(236, NULL, NULL, NULL, NULL),
(237, NULL, NULL, NULL, NULL),
(238, NULL, NULL, NULL, NULL),
(239, NULL, NULL, '12', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `chequeetat`
--

DROP TABLE IF EXISTS `chequeetat`;
CREATE TABLE IF NOT EXISTS `chequeetat` (
  `ID_ChequeEtat` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_ChequeEtat`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `compte`
--

DROP TABLE IF EXISTS `compte`;
CREATE TABLE IF NOT EXISTS `compte` (
  `ID_Compte` int(11) NOT NULL AUTO_INCREMENT,
  `NumeroCompte` int(11) NOT NULL,
  `LibelleCompteResultat` mediumtext,
  `LibelleGenerique` varchar(500) NOT NULL,
  `LibelleCompteReel` varchar(500) NOT NULL,
  `Type` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_Compte`)
) ENGINE=InnoDB AUTO_INCREMENT=141 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `compte`
--

INSERT INTO `compte` (`ID_Compte`, `NumeroCompte`, `LibelleCompteResultat`, `LibelleGenerique`, `LibelleCompteReel`, `Type`) VALUES
(1, 6580, 'Autres charges de gestion courante', 'Charges diverses de gestion courante', 'Charges diverses de gestion courante', 'Depense'),
(2, 6586, 'Autres charges de gestion courante', 'Cotisations, affilations', 'Cotisations (liées à la vie statutaire)', 'Depense'),
(3, 6544, 'Autres charges de gestion courante', 'Créance irrécouvrable', '	Créances des exercices antérieurs', 'Depense'),
(4, 6580, 'Autres charges de gestion courante', 'Frais de stages, de formations des adhérents, bénévoles,..', 'Charges diverses de gestion courante', 'Depense'),
(5, 6580, 'Autres charges de gestion courante', 'Inscriptions des adhérents, des équipes / Frais d\'engagement auprès des Comités, Ligues, Fédérations, etc.', 'Charges diverses de gestion courante', 'Depense'),
(6, 6580, 'Autres charges de gestion courante', 'Licences', 'Charges diverses de gestion courante', 'Depense'),
(7, 6580, 'Autres charges de gestion courante', 'Remise faite dans le cadre des Chèques Vacances, Coupon Sport, Coupon ANCV, etc.', 'Charges diverses de gestion courante', 'Depense'),
(8, 6580, 'Autres charges de gestion courante\r\n', 'Frais de mutation', 'Charges diverses de gestion courante', 'Depense'),
(10, 6516, 'Autres charges de gestion courante', 'SACEM / SPRE', 'Droits d\'auteur et de reproduction (SACEM)', 'Depense'),
(11, 657, 'Autres charges de gestion courante', 'Subvention, sponsoring ou aide reversés dans le cadre d\'une convention', 'Subventions versees par l\'association', 'Depense'),
(12, 6611, 'Charges financières', 'Intérêts d emprunt', 'Intérêts des emprunts et dettes', 'Depense'),
(13, 6616, ' Charges financières', 'Pénalités bancaires', 'Intérêts bancaires', 'Depense'),
(14, 6712, 'Charges exeptionnelles', 'Amendes / Pénalités diverses', 'Pénalités et amendes fiscales ou pénales', 'Depense'),
(18, 6780, 'Charges exeptionnelles', 'Charge sur exercice antérieur', 'Autres charges exceptionnelles', 'Depense'),
(19, 6718, 'Charges exeptionnelles', 'Chèque impayé, trop rendu monnaie...', 'Autres charges exeptionnelles sur operation de gestion', 'Depense'),
(20, 6713, 'Charges exeptionnelles', 'Dons', 'Dons, Liberalites', 'Depense'),
(21, 6780, 'Charges exeptionnelles', 'Grosse dépense de réparation ou gros frais liés à un problème dans l association (exceptionnel)', 'Autres charges exceptionnelles', 'Depense'),
(22, 6712, 'Charges exeptionnelles', 'Pénalités de match', 'Pénalités et amendes fiscales ou pénales', 'Depense'),
(23, 7580, 'Autres produits de gestion courante', 'Amendes, pénalites facturées', 'Produits divers de gestion courante', 'Recette'),
(24, 7580, 'Autres produits de gestion courante', 'Collectes', 'Produits divers de gestion courante', 'Recette'),
(25, 7580, 'Autres produits de gestion courante', 'Dons de personnes physiques', 'Produits divers de gestion courante', 'Recette'),
(26, 7580, 'Autres produits de gestion courante', 'Mutation : recette provenant de mutations dnathlètes', 'Produits divers de gestion courante', 'Recette'),
(27, 7580, 'Autres produits de gestion courante', 'Mécénat d entreprise', 'Produits divers de gestion courante', 'Recette'),
(28, 7580, 'Autres produits de gestion courante', 'Participation des adherents (stages, competitions,...)', 'Produits divers de gestion courante', 'Recette'),
(29, 7580, 'Autres produits de gestion courante', 'Produits divers de gestion courante', 'Produits divers de gestion courante', 'Recette'),
(30, 7511, 'Autres produits de gestion courante', 'Recettes publicitaires (catalogue, calendrier, sponsor)', 'Sponsor', 'Recette'),
(31, 7580, 'Autres produits de gestion courante', 'Reversement quote-part licence ou carte par la Fédération', '	Produits divers de gestion courante', 'Recette'),
(32, 7680, 'Produits financiers', 'Intérêts des comptes d\'épargne ou placement', 'Autres produits financiers	', 'Recette'),
(33, 7710, 'Produits exceptionnels', 'Produit sur exercice antérieur', 'Produits exceptionnels sur opérations de gestion', 'Recette'),
(34, 7710, 'Produits exceptionnels', 'Produits exceptionnels/Indemnités (dommages/intérêts, préjudice, assurance)', '	Produits exceptionnels sur opérations de gestion', 'Recette'),
(35, 7900, 'transfert de charges', 'Licences ou cartes des adhérents reversées à la fédération', 'Transfert de charges', 'Recette'),
(36, 7900, 'transfert de charges', 'Remboursement des frais de formation professionnelle (UNIFORMATION, AGEFOS...)', 'Transfert de charges', 'Recette'),
(37, 6040, 'Achats études et de prestations de services', 'Prestation de services: appel à dautres clubs, entreprise de nettoyage, artisan', 'Achats d\'études et prestations de services', 'Depense'),
(38, 6060, 'Achats non stockés de matières et de fournitures', 'Alimentation, boissons, repas, apéritifs,... préparés par le club', 'Achats non stockés - Matières premières et fournitures ...', 'Depense'),
(39, 6040, 'ASP', 'Subvention - ASP (Agence de Service de Paiement) pour service civique, PEC, etc.', 'ASP', 'Depense'),
(40, 6060, 'Achats non stockés de matières et de fournitures', 'Materiel dont la valeur > 500 euros (à amortir)', 'Achats non stockés - Matières premières et fournitures .', 'Depense'),
(41, 6160, 'Assurance', 'Assurances propres au club : responsabilité civile, incendie, locaux...', 'Primes d\'assurances', 'Depense'),
(42, 6480, 'Autres charges de personnel', 'Autres charges de personnel (Ex : Indemnités Kilométriques, formation, etc. )', 'Autres charges de personnel', 'Depense'),
(43, 6068, 'Autres fournitures', 'Achat matériel stocké : Air liquide, gaz...', 'Autres matières et fournitures', 'Depense'),
(44, 6480, 'Autres charges de personnel', 'Frais de formation du personnel, tickets restaurant', 'Autres charges de personnel', 'Depense'),
(45, 6068, 'Autres fournitures', 'Achat pour revente (Ex : alimentation, boissons, petit matériel, etc. )', 'Autres matières et fournitures', 'Depense'),
(46, 6068, 'Autres fournitures', 'Billetterie, entrée de match', 'Autres matières et fournitures', 'Depense'),
(47, 6350, 'Autres impôts et taxes', 'Taxe d\'habitation, taxe foncière, carte grise...', 'Autres impôts, taxes et versements assimilés (administration des impôts)', 'Depense'),
(48, 6350, 'Autres impôts et taxes', 'Taxe Sur l Audiovisuel (TSA)', 'Autres impôts, taxes et versements assimilés (administration des impôts)', 'Depense'),
(49, 7470, 'Autres recettes (précisez)', 'Subvention - autre', 'Autres subventions', 'Recette'),
(50, 8640, 'Bénévolat', 'Personnel bénévole / Bénévolat', 'Bénévolat', 'Autres'),
(51, 6450, 'Charges sociales', 'Cotisations sociales : patronales et salariales (Mutuelle complémentaire santé)', 'Charges de sécurité sociale et de prévoyance', 'Depense'),
(52, 6475, 'Charges sociales', 'Cotisations sociales : patronales et salariales (Médecine du travail)', 'Charges sociales : patronales et salariales (Médecine du travail)	', 'Depense'),
(53, 6450, 'Charges sociales', 'Cotisations sociales : patronales et salariales (Prévoyance)', 'Charges de sécurité sociale et de prévoyance', 'Depense'),
(54, 6450, 'Charges sociales', 'Cotisations sociales : patronales et salariales (Retraite)', 'Charges de sécurité sociale et de prévoyance', 'Depense'),
(55, 6450, 'Charges sociales', 'Cotisations sociales : patronales et salariales (URSSAF)', 'Charges de sécurité sociale et de prévoyance', 'Depense'),
(56, 7443, 'Commune(s):', 'Subvention - Commune', 'Commune	', 'Recette'),
(57, 165, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.\r\n', 'Caution ou dépôt de garantie reçu encaissé et son remboursemen', 'Caution reçue	', 'Autres'),
(61, 275, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Caution ou dépôt de garantie versé décaissé et son remboursement', 'Caution versee', 'Autres'),
(62, 164, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Emprunt', 'Emprunt auprès des établissements de crédit', 'Autres'),
(63, 164, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Investissement compte à terme, parts sociales', '	Emprunt auprès des établissements de crédit', 'Autres'),
(64, 467, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Prêt financier à une association', 'Autres comptes débiteurs ou créditeurs', 'Autres'),
(65, 164, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Remboursement d\'emprunt (capital)', '	Emprunt auprès des établissements de crédit', 'Autres'),
(66, 164, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Remboursement de capital de compte à terme', '	Emprunt auprès des établissements de crédit', 'Autres'),
(67, 467, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Remboursement reçu sur prêt accordé à un tiers', 'Autres comptes débiteurs ou créditeurs', 'Autres'),
(68, 581, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Virement dépense (entre les comptes internes de l\'association)', '	Virement', 'Autres'),
(69, 581, 'Compte de libellés qui ne sont pas affichés dans les comptes de résultats mais pris en compte dans laffichage des détails du bilan.', 'Virement recette (entre les comptes internes de l\'association)', '	Virement', 'Autres'),
(70, 6185, 'Divers', 'Frais colloques, séminaires, conférences', '	Frais de colloques, séminaires, conférences', 'Depense'),
(71, 6180, 'Documentation', 'Documentation', '	Divers', 'Depense'),
(72, 8610, 'Dons en nature', 'Dons en nature : dons (à caractère définitif) d\'entreprises ou de personnes physiques (matériel, chèque cadeau, prestation de service, etc.)', 'Dons en nature', 'Autres'),
(73, 8610, 'Dons en nature', 'Dons en nature : frais des bénévoles NON remboursés (déplacements)', 'Dons en nature', 'Autres'),
(74, 7560, 'Dont cotisations', 'Cotisations des adhérents, des clubs', 'Cotisations', 'Recette'),
(75, 7442, 'Département(s):', 'Subvention - Conseil Départemental', 'Département', 'Recette'),
(76, 6251, 'Déplacements, missions', 'Frais de déplacement : autoroute, train, bus, métro, avion, etc.', 'Voyages et déplacements', 'Depense'),
(77, 6251, 'Déplacements, missions', 'Frais de déplacement : indemnités kilométriques', 'Voyages et déplacements', 'Depense'),
(78, 6257, 'Déplacements, missions', 'Frais de restauration lies aux reunions', 'Receptions', 'Depense'),
(79, 6251, 'Déplacements, missions', 'Frais de restauration liés aux déplacements, matchs', 'Voyages et déplacements', 'Depense'),
(80, 6251, 'Déplacements, missions', 'Frais hébergement liés aux déplacements, matchs', 'Voyages et déplacements', 'Depense'),
(81, 6256, 'Déplacements, missions', 'Frais mission-représentation (reception, porte-ouverte, assemblée)', 'Missions', 'Depense'),
(82, 6251, 'Déplacements, missions', 'Indemnité de service civique', 'Voyages et déplacements', 'Depense'),
(83, 6150, 'Entretien et réparation', 'Réparation et entretien de véhicules, locaux, etc.', '	Entretien et réparations', 'Depense'),
(84, 6150, 'Entretien et réparation\r\n', 'Réparation ou maintenance de matériel', '	Entretien et réparations', 'Depense'),
(85, 7410, 'Etat: CNDS', 'Subvention - Agence Regionale de Sante', 'Etat', 'Recette'),
(86, 7410, 'Etat: CNDS', 'Subvention - CNDS', 'Etat', 'Recette'),
(87, 7410, 'Etat: CNDS', 'Subvention - FONJEP', 'Etat', 'Recette'),
(88, 7410, 'Etat: CNDS', 'Subvention - Politique de la ville', 'Etat', 'Recette'),
(89, 7410, 'Etat: CNDS', 'Subvention - État', 'Etat', 'Recette'),
(90, 7462, 'Fonds européens', 'Subvention - Fonds européens', '	Fonds européens', 'Recette'),
(91, 6050, 'Fourniture entretien et de petit équipement', 'Filets, lignes natation, caisses but, balises marquage, materiel golf... : Materiel non consommable, petit materiel <500 euros', 'Achats de matériel, équipement et travaux', 'Depense'),
(92, 6064, 'Fourniture entretien et de petit équipement', 'Fournitures administratives : papeterie, ramette, stylos, petit matériel, consommables informatiques', 'Fournitures administratives', 'Depense'),
(93, 6063, 'Fourniture entretien et de petit équipement', 'Fournitures pour activité du club : Maillots, ballons, chaussures, vêtements', 'Fournitures d\'entretien et de petit équipement', 'Depense'),
(94, 6063, 'Fourniture entretien et de petit équipement', 'Fournitures pour fonctionnement de l\'association : produits d\'entretien, papier toilette, savon, etc.', 'Fournitures d\'entretien et de petit équipement', 'Depense'),
(95, 6064, 'Fourniture entretien et de petit équipement', 'Imprimante, ordinateur, petit matériel < 500 euros', 'Fournitures administratives', 'Depense'),
(96, 6063, 'Fourniture entretien et de petit équipement', 'Pharmacie : achat de bandelette, bombe de froid ...', 'Fournitures d\'entretien et de petit équipement', 'Depense'),
(97, 6061, 'Fournitures non stockables ( eau, énergie)', 'Carburant', 'Fournitures non stockables (eau, énergie...)', 'Depense'),
(98, 6061, 'Fournitures non stockables ( eau, énergie)', 'Eau-gaz-électricité', 'Fournitures non stockables (eau, énergie...)', 'Depense'),
(99, 6260, 'Frais postaux et de télécommunications', 'Téléphone, internet, affranchissement, fax', 'Frais postaux et frais de télécommunications', 'Depense'),
(100, 7461, 'Fédération', 'Subvention - Fédération', 'Fédération', 'Recette'),
(101, 6333, 'Impôts et taxes sur rémunération', 'Participation des employeurs à la formation professionnelle continue (OPCO : AFDAS, Uniformation, AGEFOS PME, ...)', 'Participation des employeurs à la formation professionnelle continue', 'Depense'),
(102, 6311, 'Impôts et taxes sur rémunération', 'Taxe sur les salaires', 'Taxe sur les salaires', 'Depense'),
(103, 6140, 'Locations', 'Charges locatives et de copropriete', 'Charges locatives et de copropriete', 'Depense'),
(104, 6130, 'Locations', 'Location matériel, équipement, terrain, salle, véhicule, bureau, etc.', '	Locations', 'Depense'),
(105, 8620, 'Mise à disposition gratuite de biens et prestations', 'Mise à disposition (temporaire) de locaux (salle de sport, spectacle, etc.), de matériel par une entreprise ou collectivité / prestation en nature', 'Mise à disposition gratuite de biens', 'Autres'),
(106, 7460, 'Organismes sociaux ( à détailler):', 'Subvention - Organismes sociaux (CAF,...)', 'Organismes sociaux', 'Recette'),
(107, 7060, 'Prestation de services', 'Activités facturées (prestations touristiques, découvertes, initiations...)', '	Prestations de services', 'Recette'),
(108, 7060, 'Prestation de services', 'Inscription des participants (animations, stages pendant les vacances,...)', '	Prestations de services', 'Recette'),
(109, 7060, 'Prestation de services', 'Inscription des équipes, billetterie, entrée de matchs...', '	Prestations de services', 'Recette'),
(112, 7060, 'Prestation de services', 'Intervention/Prestation extérieure', '	Prestations de services', 'Recette'),
(113, 7060, 'Prestation de services', 'Vente de nuitées (hébergement)', '	Prestations de services', 'Recette'),
(114, 7083, 'Produits des activités annexes', 'Activités annexes (frais de déplacements, autre, ...)', 'Produits des activités annexes', 'Recette'),
(115, 7083, 'Produits des activités annexes', 'Locations diverses (Ex : salle, matériel, etc. )', 'Produits des activités annexes', 'Recette'),
(116, 7084, 'Produits des activités annexes', 'Mise à disposition de personnel (facturée)', 'Produits des activités annexes', 'Recette'),
(117, 6231, 'Publicité, publication', 'Annonces et insertions publicitaires : prospectus, annonces, journaux', 'Annonces et insertions', 'Depense'),
(118, 6238, 'Publicité, publication', 'Dépenses naissances, mariages, funérailles', 'Divers', 'Depense'),
(119, 6231, 'Publicité, publication', 'Outils de communication : banderoles, panneaux ...', 'Annonces et insertions', 'Depense'),
(120, 6237, 'Publicité, publication', 'Publications : revues internes, journaux, programme, catalogue, flyers', 'Publications', 'Depense'),
(121, 6234, 'Publicité, publication', 'Récompenses, cadeaux, coupes, lots, trophées, pourboires, etc.', 'Cadeaux', 'Depense'),
(122, 7441, 'Région(s):', 'Subvention - Conseil Régional (Région)', 'Region', 'Recette'),
(123, 6411, 'Rémunération des personnels', 'Cotisations sociales : patronales et salariales (Impôts - Prélèvement à la source)', 'Impôts - Prélèvement à la source', 'Depense'),
(124, 6410, 'Rémunération des personnels', 'Indemnité stagiaire, prime de match entrant dans le cadre de la franchise URSSAF', 'Rémunération du personnel', 'Depense'),
(125, 6410, 'Rémunération des personnels', 'Salaire net du personnel', 'Rémunération du personnel', 'Depense'),
(126, 6210, 'Rémunérations intermédiaires et honoraires', 'Frais d\'arbitrage ou de jugement', 'Personnel extérieur à l\'association', 'Depense'),
(127, 6226, 'Rémunérations intermédiaires et honoraires', 'Honoraires (comptable, consultant, visite médicale)', 'Honoraires', 'Depense'),
(128, 6210, 'Rémunérations intermédiaires et honoraires', 'Personnel extérieur à l\'association, intérim, mise à disposition...', 'Personnel extérieur à l\'association', 'Depense'),
(129, 6270, 'Services bancaires, autres', 'Frais bancaires, commissions, agios', 'Services bancaires et assimilés', 'Depense'),
(130, 6280, 'Services bancaires, autres', 'Frais de gestion de l\'emploi', '	Divers', 'Depense'),
(131, 6241, 'Services bancaires, autres', 'Frais de livraison', 'Transport sur achats', 'Depense'),
(132, 6280, 'Services bancaires, autres', 'Redevances', 'Divers', 'Depense'),
(133, 6110, 'Sous traitance générale', 'Repas traiteur, orchestre, animation, spectacle, paniers repas pour sorties', '	Sous-traitance générale', 'Depense'),
(134, 7444, 'Subvention communauté de communes et agglomération', 'Subvention - Communauté de Communes et agglomération', 'Communauté de communes et agglomération', 'Recette'),
(135, 7010, 'Vente de marchandises', 'Buvette, sandwich, repas (achat revendu)', 'Ventes de produits finis', 'Recette'),
(136, 7020, 'Vente de marchandises', 'Loto, tombola, bal : recette', 'Ventes de produits intermédiaires', 'Recette'),
(137, 7070, 'Vente de marchandises', 'Vente d\'articles publicitaires ou d\'accessoires (tee-shirt, calendriers, maillots, etc. )', '	Vente de marchandises', 'Recette'),
(138, 7070, 'Vente de marchandises', 'Vente de petit matériel, fournitures, etc.', '	Vente de marchandises', 'Recette'),
(139, 7010, 'Vente de marchandises', 'Vente de produits réalisés par l association (Livres, etc.)', 'Ventes de produits finis', 'Recette'),
(140, 7900, 'transfert de charges', 'Transfert de charges', 'Transfert de charges', 'Recette');

-- --------------------------------------------------------

--
-- Structure de la table `ecriture`
--

DROP TABLE IF EXISTS `ecriture`;
CREATE TABLE IF NOT EXISTS `ecriture` (
  `ID_Ecriture` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Journal` int(11) DEFAULT NULL,
  `ID_Piece` int(11) DEFAULT NULL,
  `ID_Compte` int(11) DEFAULT NULL,
  `ID_Exercice` int(11) DEFAULT NULL,
  `Montant` decimal(13,2) NOT NULL,
  `Lettrage` varchar(10) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `DateRapprochement` date DEFAULT NULL,
  `lmd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Ecriture`),
  KEY `ID_Journal` (`ID_Journal`),
  KEY `ID_Piece` (`ID_Piece`),
  KEY `ID_Compte` (`ID_Compte`),
  KEY `ID_Exercice` (`ID_Exercice`)
) ENGINE=InnoDB AUTO_INCREMENT=277 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `ecriture`
--

INSERT INTO `ecriture` (`ID_Ecriture`, `ID_Journal`, `ID_Piece`, `ID_Compte`, `ID_Exercice`, `Montant`, `Lettrage`, `Date`, `DateRapprochement`, `lmd`) VALUES
(273, 2, 247, 31, NULL, '-2.00', NULL, '2019-06-14', NULL, '2019-06-27 14:56:50'),
(274, 1, 248, 65, NULL, '12.00', NULL, '2019-06-12', '2019-06-15', '2019-06-26 10:19:16'),
(275, NULL, 249, 74, NULL, '11.00', NULL, '2019-06-05', NULL, '2019-06-26 10:34:24'),
(276, 2, 250, 5, NULL, '-15.00', NULL, '2019-06-06', '2019-06-13', '2019-06-27 06:54:14');

-- --------------------------------------------------------

--
-- Structure de la table `entite`
--

DROP TABLE IF EXISTS `entite`;
CREATE TABLE IF NOT EXISTS `entite` (
  `ID_Entite` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TypeEntite` int(11) DEFAULT NULL,
  `ID_Utilisateur` int(11) NOT NULL,
  `Nom` varchar(50) DEFAULT NULL,
  `CodePostal` varchar(50) DEFAULT NULL,
  `Addresse` varchar(50) DEFAULT 'NULL',
  `Ville` varchar(50) DEFAULT NULL,
  `Mail` varchar(50) DEFAULT NULL,
  `Tel` varchar(50) DEFAULT NULL,
  `Raison` varchar(50) DEFAULT NULL,
  `Siret` int(100) NOT NULL,
  `Prenom` varchar(100) DEFAULT NULL,
  `CodeTiers` int(11) DEFAULT NULL,
  `Capital` int(11) DEFAULT NULL,
  `NumeroTva` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Entite`),
  KEY `ID_TypeEntite` (`ID_TypeEntite`),
  KEY `ID_Utilisateur` (`ID_Utilisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `entite`
--

INSERT INTO `entite` (`ID_Entite`, `ID_TypeEntite`, `ID_Utilisateur`, `Nom`, `CodePostal`, `Addresse`, `Ville`, `Mail`, `Tel`, `Raison`, `Siret`, `Prenom`, `CodeTiers`, `Capital`, `NumeroTva`) VALUES
(9, NULL, 0, 'IM', '2222', 'd', 's', 'a@mm', '13455', 'vcbcbv', 5, 'ML', 2, 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `exercice`
--

DROP TABLE IF EXISTS `exercice`;
CREATE TABLE IF NOT EXISTS `exercice` (
  `ID_Exercice` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Entite` int(11) DEFAULT NULL,
  `DateDebut` date DEFAULT NULL,
  `DateFin` date DEFAULT NULL,
  `Flag` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`ID_Exercice`),
  KEY `ID_Entite` (`ID_Entite`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `exercice`
--

INSERT INTO `exercice` (`ID_Exercice`, `ID_Entite`, `DateDebut`, `DateFin`, `Flag`) VALUES
(1, NULL, '2019-01-01', '2019-12-31', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

DROP TABLE IF EXISTS `facture`;
CREATE TABLE IF NOT EXISTS `facture` (
  `ID_Facture` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ModePayement` int(11) DEFAULT NULL,
  `ID_Cheque` int(11) DEFAULT NULL,
  `DesignationFacture` varchar(50) DEFAULT NULL,
  `NumeroFacture` varchar(15) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `DateEcheance` date DEFAULT NULL,
  `PrixTTC` decimal(13,2) NOT NULL,
  `Commentaire` text,
  `DateRapprochement` date DEFAULT NULL,
  `ID_Compte` int(11) DEFAULT NULL,
  PRIMARY KEY (`ID_Facture`),
  KEY `ID_ModePayement` (`ID_ModePayement`),
  KEY `ID_Compte` (`ID_Compte`),
  KEY `ID_Cheque` (`ID_Cheque`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `facture`
--

INSERT INTO `facture` (`ID_Facture`, `ID_ModePayement`, `ID_Cheque`, `DesignationFacture`, `NumeroFacture`, `Date`, `DateEcheance`, `PrixTTC`, `Commentaire`, `DateRapprochement`, `ID_Compte`) VALUES
(1, 3, 239, '  gbf', 'm', '2019-06-06', NULL, '15.00', 'okl', '2019-06-13', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `journal`
--

DROP TABLE IF EXISTS `journal`;
CREATE TABLE IF NOT EXISTS `journal` (
  `ID_Journal` int(11) NOT NULL AUTO_INCREMENT,
  `Libelle` mediumtext,
  PRIMARY KEY (`ID_Journal`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `journal`
--

INSERT INTO `journal` (`ID_Journal`, `Libelle`) VALUES
(1, 'Vente'),
(2, 'Achat');

-- --------------------------------------------------------

--
-- Structure de la table `modepayement`
--

DROP TABLE IF EXISTS `modepayement`;
CREATE TABLE IF NOT EXISTS `modepayement` (
  `ID_ModePayement` int(11) NOT NULL,
  `Libelle` mediumtext,
  PRIMARY KEY (`ID_ModePayement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `modepayement`
--

INSERT INTO `modepayement` (`ID_ModePayement`, `Libelle`) VALUES
(1, 'chèque'),
(2, 'espèce'),
(3, 'carte'),
(4, 'prélévement');

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

DROP TABLE IF EXISTS `payement`;
CREATE TABLE IF NOT EXISTS `payement` (
  `ID_Payement` int(11) NOT NULL AUTO_INCREMENT,
  `ID_Cheque` int(11) DEFAULT NULL,
  `ID_ModePayement` int(11) DEFAULT NULL,
  `ID_Compte` int(11) DEFAULT NULL,
  `Numero` varchar(50) NOT NULL,
  `JustificatifPayement` varchar(500) DEFAULT NULL,
  `Commentaire` varchar(500) NOT NULL,
  `Date` date DEFAULT NULL,
  `Montant` decimal(13,2) NOT NULL,
  `DateRapprochement` date DEFAULT NULL,
  PRIMARY KEY (`ID_Payement`),
  KEY `ID_Cheque` (`ID_Cheque`),
  KEY `ID_ModePayement` (`ID_ModePayement`),
  KEY `ID_Compte` (`ID_Compte`)
) ENGINE=InnoDB AUTO_INCREMENT=105 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `payement`
--

INSERT INTO `payement` (`ID_Payement`, `ID_Cheque`, `ID_ModePayement`, `ID_Compte`, `Numero`, `JustificatifPayement`, `Commentaire`, `Date`, `Montant`, `DateRapprochement`) VALUES
(102, 236, 3, 31, ' 423', 'sdd', 'f', '2019-06-14', '2.00', '2019-05-31'),
(103, 237, 2, 65, ' 423', 'sdd', 'a', '2019-06-12', '12.00', '2019-06-15'),
(104, 238, NULL, 74, ' ', NULL, '', '2019-06-05', '11.00', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

DROP TABLE IF EXISTS `piece`;
CREATE TABLE IF NOT EXISTS `piece` (
  `ID_Piece` int(11) NOT NULL AUTO_INCREMENT,
  `ID_PieceType` int(11) DEFAULT NULL,
  `ID_Facture` int(11) DEFAULT NULL,
  `ID_Entite` int(11) DEFAULT NULL,
  `ID_Payement` int(11) DEFAULT NULL,
  `NumeroPiece` varchar(15) NOT NULL,
  `DescriptionPiece` mediumtext,
  `DateRapprochement` date DEFAULT NULL,
  PRIMARY KEY (`ID_Piece`),
  KEY `ID_PieceType` (`ID_PieceType`),
  KEY `ID_Facture` (`ID_Facture`),
  KEY `ID_Entite` (`ID_Entite`),
  KEY `ID_Payement` (`ID_Payement`)
) ENGINE=InnoDB AUTO_INCREMENT=251 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `piece`
--

INSERT INTO `piece` (`ID_Piece`, `ID_PieceType`, `ID_Facture`, `ID_Entite`, `ID_Payement`, `NumeroPiece`, `DescriptionPiece`, `DateRapprochement`) VALUES
(247, NULL, NULL, 9, 102, ' 423', 'sdd', '2019-05-31'),
(248, NULL, NULL, 9, 103, ' 423', 'sdd', '2019-06-15'),
(249, NULL, NULL, 9, 104, ' ', NULL, NULL),
(250, NULL, 1, 9, NULL, 'm', '  gbf', '2019-06-13');

-- --------------------------------------------------------

--
-- Structure de la table `piecetype`
--

DROP TABLE IF EXISTS `piecetype`;
CREATE TABLE IF NOT EXISTS `piecetype` (
  `ID_PieceType` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) NOT NULL,
  PRIMARY KEY (`ID_PieceType`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `remise`
--

DROP TABLE IF EXISTS `remise`;
CREATE TABLE IF NOT EXISTS `remise` (
  `ID_Remise` int(11) NOT NULL AUTO_INCREMENT,
  `Date` date NOT NULL,
  PRIMARY KEY (`ID_Remise`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `ID_Test` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) NOT NULL,
  `DateModif` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_Test`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `test`
--

INSERT INTO `test` (`ID_Test`, `Nom`, `DateModif`) VALUES
(1, 'Test1454', '2019-06-03 15:19:51'),
(2, 'Test252', '2019-06-03 15:17:31');

-- --------------------------------------------------------

--
-- Structure de la table `typeentite`
--

DROP TABLE IF EXISTS `typeentite`;
CREATE TABLE IF NOT EXISTS `typeentite` (
  `ID_TypeEntite` int(11) NOT NULL AUTO_INCREMENT,
  `Description` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_TypeEntite`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `typeentite`
--

INSERT INTO `typeentite` (`ID_TypeEntite`, `Description`) VALUES
(1, 'Compagnie');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
CREATE TABLE IF NOT EXISTS `utilisateur` (
  `ID_Utilisateur` int(11) NOT NULL,
  `Nom` varchar(100) DEFAULT NULL,
  `Prenom` varchar(100) DEFAULT NULL,
  `Fonction` varchar(100) DEFAULT NULL,
  `Mail` varchar(100) DEFAULT NULL,
  `Login` varchar(50) NOT NULL,
  `Motdepasse` text NOT NULL,
  PRIMARY KEY (`ID_Utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`ID_Utilisateur`, `Nom`, `Prenom`, `Fonction`, `Mail`, `Login`, `Motdepasse`) VALUES
(1, 'J', 'P', 'kjs', 'df1', 'login', 'pass'),
(2, 'm', 'm', 'kjs', 'df1', 'login2', 'a');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `cheque`
--
ALTER TABLE `cheque`
  ADD CONSTRAINT `Cheque_ibfk_1` FOREIGN KEY (`ID_Remise`) REFERENCES `remise` (`ID_Remise`),
  ADD CONSTRAINT `Cheque_ibfk_2` FOREIGN KEY (`ID_ChequeEtat`) REFERENCES `chequeetat` (`ID_ChequeEtat`);

--
-- Contraintes pour la table `ecriture`
--
ALTER TABLE `ecriture`
  ADD CONSTRAINT `Ecriture_ibfk_1` FOREIGN KEY (`ID_Journal`) REFERENCES `journal` (`ID_Journal`),
  ADD CONSTRAINT `Ecriture_ibfk_2` FOREIGN KEY (`ID_Piece`) REFERENCES `piece` (`ID_Piece`),
  ADD CONSTRAINT `Ecriture_ibfk_3` FOREIGN KEY (`ID_Compte`) REFERENCES `compte` (`ID_Compte`),
  ADD CONSTRAINT `Ecriture_ibfk_4` FOREIGN KEY (`ID_Exercice`) REFERENCES `exercice` (`ID_Exercice`);

--
-- Contraintes pour la table `entite`
--
ALTER TABLE `entite`
  ADD CONSTRAINT `Entite_ibfk_1` FOREIGN KEY (`ID_TypeEntite`) REFERENCES `typeentite` (`ID_TypeEntite`);

--
-- Contraintes pour la table `exercice`
--
ALTER TABLE `exercice`
  ADD CONSTRAINT `exercice_ibfk_1` FOREIGN KEY (`ID_Entite`) REFERENCES `entite` (`ID_Entite`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`ID_Compte`) REFERENCES `compte` (`ID_Compte`),
  ADD CONSTRAINT `facture_ibfk_2` FOREIGN KEY (`ID_Cheque`) REFERENCES `cheque` (`ID_Cheque`),
  ADD CONSTRAINT `modereglement` FOREIGN KEY (`ID_ModePayement`) REFERENCES `modepayement` (`ID_ModePayement`);

--
-- Contraintes pour la table `payement`
--
ALTER TABLE `payement`
  ADD CONSTRAINT `Payement_ibfk_1` FOREIGN KEY (`ID_Cheque`) REFERENCES `cheque` (`ID_Cheque`),
  ADD CONSTRAINT `Payement_ibfk_2` FOREIGN KEY (`ID_ModePayement`) REFERENCES `modepayement` (`ID_ModePayement`),
  ADD CONSTRAINT `Payement_ibfk_3` FOREIGN KEY (`ID_Compte`) REFERENCES `compte` (`ID_Compte`);

--
-- Contraintes pour la table `piece`
--
ALTER TABLE `piece`
  ADD CONSTRAINT `Piece_ibfk_1` FOREIGN KEY (`ID_PieceType`) REFERENCES `piecetype` (`ID_PieceType`),
  ADD CONSTRAINT `Piece_ibfk_2` FOREIGN KEY (`ID_Facture`) REFERENCES `facture` (`ID_Facture`),
  ADD CONSTRAINT `Piece_ibfk_3` FOREIGN KEY (`ID_Entite`) REFERENCES `entite` (`ID_Entite`),
  ADD CONSTRAINT `Piece_ibfk_4` FOREIGN KEY (`ID_Payement`) REFERENCES `payement` (`ID_Payement`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
