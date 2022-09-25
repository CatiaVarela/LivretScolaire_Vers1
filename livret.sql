-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : dim. 25 sep. 2022 à 18:22
-- Version du serveur : 10.5.13-MariaDB
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `livret`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

DROP TABLE IF EXISTS `administrateur`;
CREATE TABLE IF NOT EXISTS `administrateur` (
  `NOMADMIN` varchar(15) NOT NULL,
  `PRENOMADMIN` varchar(15) NOT NULL,
  `MDPADMIN` varchar(15) NOT NULL,
  `Permission` int(5) NOT NULL DEFAULT 4
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`NOMADMIN`, `PRENOMADMIN`, `MDPADMIN`, `Permission`) VALUES
('Leo', 'Leonard', 'Rynax2018', 4),
('root', 'root', 'root', 5);

-- --------------------------------------------------------

--
-- Structure de la table `classe`
--

DROP TABLE IF EXISTS `classe`;
CREATE TABLE IF NOT EXISTS `classe` (
  `classecode` int(5) NOT NULL,
  `Libelleclasse` varchar(35) DEFAULT NULL,
  `specialite` varchar(100) DEFAULT NULL,
  `Annee` int(11) DEFAULT NULL,
  `Libellecourt` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`classecode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe`
--

INSERT INTO `classe` (`classecode`, `Libelleclasse`, `specialite`, `Annee`, `Libellecourt`) VALUES
(1, 'Brevet de technicien superieur', 'Services informatiques aux organisations', 1, 'BTS1SIO1'),
(2, 'Brevet de technicien superieur', 'Notariat', 1, 'BTS1NOT1'),
(3, 'Brevet de technicien superieur', 'Services informatiques aux organisations', 2, 'BTS2SIO'),
(4, 'Brevet de technicien superieur', 'Notariat', 2, 'BTS2NOT'),
(5, 'Brevet de technicien superieur', 'Support a l\'Action Manageriale', 1, 'BTS1SAM1'),
(6, 'Brevet de technicien superieur', 'Support a l\'Action Manageriale', 2, 'BTS2SAM'),
(7, 'Brevet de technicien superieur', 'Services et prestations des secteurs sanitaire et social', 2, 'BTS2SP3S'),
(8, 'Brevet de technicien superieur', 'Services et prestations des secteurs sanitaire et social', 1, 'BTS1SP3S1'),
(9, 'Brevet de technicien superieur', 'Comptabilite et gestion', 1, 'BTS1CG1'),
(10, 'Brevet de technicien superieur', 'Comptabilite et gestion', 2, 'BTS2CG'),
(11, 'Classe preparatoire', 'Economique et commerciale technologique', 1, 'ECT1'),
(12, 'Classe preparatoire', 'Economique et commerciale technologique', 2, 'ECT2'),
(13, 'DTS', 'Imagerie medicale', 1, 'DTS1'),
(14, 'DTS', 'Imagerie medicale', 2, 'DTS2'),
(15, 'DTS', 'Imagerie medicale', 3, 'DTS3'),
(16, 'Diplome', 'Comptabilite et Gestion', 1, 'DCG1'),
(17, 'Diplome', 'Comptabilite et Gestion', 2, 'DCG2'),
(18, 'Diplome', 'Comptabilite et Gestion', 3, 'DCG3');

-- --------------------------------------------------------

--
-- Structure de la table `classe_etudiant`
--

DROP TABLE IF EXISTS `classe_etudiant`;
CREATE TABLE IF NOT EXISTS `classe_etudiant` (
  `codeetudiant` int(5) NOT NULL,
  `classecode` int(5) NOT NULL,
  PRIMARY KEY (`codeetudiant`,`classecode`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `classe_etudiant`
--

INSERT INTO `classe_etudiant` (`codeetudiant`, `classecode`) VALUES
(1, 4),
(2, 6),
(3, 12),
(4, 3),
(5, 9),
(8, 7),
(9, 13),
(10, 5),
(11, 16),
(12, 17),
(13, 12),
(14, 18),
(16, 1);

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

DROP TABLE IF EXISTS `enseignant`;
CREATE TABLE IF NOT EXISTS `enseignant` (
  `CodeEnseignant` int(11) NOT NULL AUTO_INCREMENT,
  `NOMENSEIGNANT` char(32) DEFAULT NULL,
  `PRENOMENSEIGNANT` char(32) DEFAULT NULL,
  `MDPENSEIGNANT` varchar(15) NOT NULL,
  `Permission` int(5) NOT NULL DEFAULT 2,
  PRIMARY KEY (`CodeEnseignant`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseignant`
--

INSERT INTO `enseignant` (`CodeEnseignant`, `NOMENSEIGNANT`, `PRENOMENSEIGNANT`, `MDPENSEIGNANT`, `Permission`) VALUES
(1, 'NOVALES', 'Corinne', 'CorinneDu06', 2),
(2, 'SAINSAULIEU', 'Stephane', 'Test', 2),
(3, 'NOM_enseignant', 'Prenom_enseignant', 'Test', 2),
(4, 'nom', 'prenom', 'np', 2);

-- --------------------------------------------------------

--
-- Structure de la table `enseigner`
--

DROP TABLE IF EXISTS `enseigner`;
CREATE TABLE IF NOT EXISTS `enseigner` (
  `classecode` int(11) NOT NULL,
  `CodeEnseignant` int(11) NOT NULL,
  `CodeMatiere` int(11) NOT NULL,
  PRIMARY KEY (`classecode`,`CodeEnseignant`,`CodeMatiere`),
  KEY `FK_ENSEIGNER_ENSEIGNANT` (`CodeEnseignant`),
  KEY `FK_ENSEIGNER_MATIERE` (`CodeMatiere`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `enseigner`
--

INSERT INTO `enseigner` (`classecode`, `CodeEnseignant`, `CodeMatiere`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 1, 4),
(1, 1, 6),
(1, 1, 10),
(1, 2, 5),
(1, 2, 7),
(1, 2, 8),
(2, 1, 10),
(2, 2, 2),
(2, 2, 4),
(3, 1, 6),
(3, 2, 1),
(3, 2, 2),
(3, 2, 4),
(3, 2, 5),
(3, 2, 7),
(3, 2, 8),
(4, 1, 10),
(4, 2, 2),
(4, 2, 4),
(5, 2, 2),
(5, 2, 4),
(5, 2, 5),
(6, 2, 2),
(6, 2, 4),
(6, 2, 5),
(7, 2, 2),
(7, 2, 4),
(8, 2, 2),
(8, 2, 4),
(9, 2, 1),
(9, 2, 5),
(14, 2, 1),
(18, 2, 3);

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `codeetudiant` int(11) NOT NULL,
  `NOMETUDIANT` char(32) DEFAULT NULL,
  `PRENOMETUDIANT` char(32) DEFAULT NULL,
  `datedenaissance` char(32) DEFAULT NULL,
  `Numeronational` varchar(32) DEFAULT NULL,
  `Classe` char(32) DEFAULT NULL,
  PRIMARY KEY (`codeetudiant`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`codeetudiant`, `NOMETUDIANT`, `PRENOMETUDIANT`, `datedenaissance`, `Numeronational`, `Classe`) VALUES
(1, 'TEST1', 'PRENOM1', '06/07/2000', '080222882ZC', 'BTS2NOT'),
(2, 'TEST2', 'PRENOM2', '26/06/2000', '080222228JR', 'BTS2SAM'),
(3, 'TEST3', 'PRENOM3', '24/05/2002', '082080629RK', 'ECT2'),
(4, 'TEST4', 'PRENOM4', '24/01/2002', '220020064BD', 'BTS2SIO'),
(5, 'TEST5', 'PRENOM5', '24/05/2002', '244288244KD', 'BTS1CG1'),
(6, 'TEST6', 'PRENOM6', '24/05/2002', '080200060HC', ''),
(7, 'TEST7', 'PRENOM7', '24/05/2002', '', ''),
(8, 'TEST8', 'PRENOM8', '24/05/2002', '080222042EF', 'BTS2SP3S'),
(9, 'TEST9', 'PRENOM9', '24/05/2002', '062202462JK', 'DTS1'),
(10, 'TEST10', 'PRENOM10', '24/05/2002', '080464004DJ', 'BTS1SAM1'),
(11, 'TEST11', 'PRENOM11', '24/05/2002', '080642004BD', 'DCG1'),
(12, 'TEST12', 'PRENOM12', '24/05/2002', '060644840GH', 'DCG2'),
(13, 'TEST13', 'PRENOM13', '24/05/2002', '204060288CK', 'ECT2'),
(14, 'TEST14', 'PRENOM14', '24/05/2002', '080648680BK', 'DCG3'),
(15, 'TEST15', 'PRENOM15', '24/05/2002', '082022622EJ', 'PPPE1'),
(16, 'TEST16', 'PRENOM16', '24/05/2002', '264022260DF', 'BTS1SIO1'),
(17, 'TEST17', 'PRENOM17', '24/05/2002', '080480868FC', '1TSCA');

-- --------------------------------------------------------

--
-- Structure de la table `matiere`
--

DROP TABLE IF EXISTS `matiere`;
CREATE TABLE IF NOT EXISTS `matiere` (
  `CodeMatiere` int(11) NOT NULL AUTO_INCREMENT,
  `LibMatiere` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`CodeMatiere`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `matiere`
--

INSERT INTO `matiere` (`CodeMatiere`, `LibMatiere`) VALUES
(1, 'Mathematiques'),
(2, 'Langue vivante1'),
(3, 'Comptabilite et audit'),
(4, 'Culture G'),
(5, 'Culture economique juridique et manageriale'),
(6, 'Bloc 1'),
(7, 'Bloc 2: SLAM/SISR'),
(8, 'Bloc 3: Cybersecurite'),
(9, 'Droit general et droit notarial'),
(10, 'CEJM Appliquee'),
(11, 'Langue vivante 2'),
(24, 'test'),
(13, 'test'),
(30, 'test'),
(23, 'test'),
(29, 'test'),
(28, 'test'),
(26, 'test'),
(27, 'test');

-- --------------------------------------------------------

--
-- Structure de la table `note_etudiant`
--

DROP TABLE IF EXISTS `note_etudiant`;
CREATE TABLE IF NOT EXISTS `note_etudiant` (
  `NoteCode` int(11) NOT NULL AUTO_INCREMENT,
  `Semestre1` varchar(5) DEFAULT NULL,
  `Semestre2` varchar(5) DEFAULT NULL,
  `Moyenne` varchar(5) DEFAULT NULL,
  `Appreciation` varchar(1000) DEFAULT NULL,
  `Semestre3` varchar(5) DEFAULT NULL,
  `Semestre4` varchar(5) DEFAULT NULL,
  `codeetudiant` int(11) DEFAULT NULL,
  `codematiere` int(11) DEFAULT NULL,
  `classecode` int(11) DEFAULT NULL,
  PRIMARY KEY (`NoteCode`),
  UNIQUE KEY `Unote` (`codeetudiant`,`codematiere`,`classecode`)
) ENGINE=MyISAM AUTO_INCREMENT=93 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `note_etudiant`
--

INSERT INTO `note_etudiant` (`NoteCode`, `Semestre1`, `Semestre2`, `Moyenne`, `Appreciation`, `Semestre3`, `Semestre4`, `codeetudiant`, `codematiere`, `classecode`) VALUES
(1, '9.5', '15.7', '12.6', NULL, NULL, NULL, 16, 10, 1),
(2, '15', '12', '13.5', NULL, NULL, NULL, 16, 7, 1),
(3, '14', '18', '16', NULL, NULL, NULL, 1, 10, 4),
(4, '12', '16', '14', NULL, NULL, NULL, 1, 4, 4),
(5, '11', '12', '11.5', NULL, NULL, NULL, 2, 5, 6),
(6, '11', '3', '7', NULL, NULL, NULL, 5, 1, 9),
(7, '', '', '15', '', NULL, NULL, 16, 8, 1),
(8, '14.5', '12', '13.25', 'Bien', NULL, NULL, 16, 1, 1),
(9, '13', '11', '12', NULL, NULL, NULL, 1, 2, 4),
(10, '1.3', '5.6', '3.45', '', NULL, NULL, 16, 4, 1),
(11, '18', '11', '14.5', 'Bien.', NULL, NULL, 16, 2, 1),
(12, '10', '11', '10.5', NULL, NULL, NULL, 16, 6, 1),
(13, '1', '2', '1.5', NULL, NULL, NULL, 16, 5, 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
