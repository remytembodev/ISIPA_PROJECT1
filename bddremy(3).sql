-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 09 Juillet 2023 à 11:35
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `bddremy`
--

-- --------------------------------------------------------

--
-- Structure de la table `ap2`
--

CREATE TABLE IF NOT EXISTS `ap2` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `ap2`
--

INSERT INTO `ap2` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `bdd1`
--

CREATE TABLE IF NOT EXISTS `bdd1` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bdd1`
--

INSERT INTO `bdd1` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `bdd2`
--

CREATE TABLE IF NOT EXISTS `bdd2` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `bdd2`
--

INSERT INTO `bdd2` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `connexion`
--

CREATE TABLE IF NOT EXISTS `connexion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(17) NOT NULL,
  `pass` text NOT NULL,
  `no_hash` varchar(25) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=50 ;

--
-- Contenu de la table `connexion`
--

INSERT INTO `connexion` (`ID`, `user`, `pass`, `no_hash`) VALUES
(36, 'ISIMTDNBDG167', '796315', ''),
(37, 'ISIMTDpmcG168', '255916', ''),
(38, 'ISIMTDllaG169', '516297', ''),
(39, 'ISIMTDDSMG170', '324799', ''),
(40, 'ISIMTDRMHG171', '279969', ''),
(41, 'ISIMTDrBSG172', '806116', ''),
(42, 'ISIMTDnbrG173', '748923', ''),
(43, 'ISIMTDFPSG174', '614422', ''),
(44, 'ISIMTDvbaG175', '205806', ''),
(45, 'ISIMTDbbfG376', '691304', ''),
(46, 'ISIMTDTnsG277', '0', ''),
(47, 'ISIMTDBKZG278', '$2y$12$2HC', ''),
(49, 'ISIMTDMBNG379', '$2y$12$Mw0', '');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE IF NOT EXISTS `etudiant` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=19 ;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174'),
(8, 'vuma', 'bindele', 'alain', 'remytembo5@gmail.com', 'MATADI', '2023-06-29', 'Celibatair', 'CONGOLAISE', 'nsadisi', 10, 'TM', 'G1', 'ISIMTDvbaG175'),
(9, 'vuma', 'bindele', 'alain', 'remytembo5@gmail.com', 'MATADI', '2023-06-29', 'Celibatair', 'CONGOLAISE', 'nsadisi', 10, 'TM', 'G1', ''),
(10, 'vuma', 'bindele', 'alain', 'remytembo5@gmail.com', 'MATADI', '2023-06-29', 'Celibatair', 'CONGOLAISE', 'nsadisi', 10, 'TM', 'G1', ''),
(11, 'biyaka', 'buita', 'fortune', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'congolaise', 'nsadisi', 10, 'GF', 'G3', 'ISIMTDbbfG376'),
(12, 'biyaka', 'buita', 'fortune', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'congolaise', 'nsadisi', 10, 'GF', 'G3', 'ISIMTDbbfG376'),
(13, 'biyaka', 'buita', 'fortune', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'congolaise', 'nsadisi', 10, 'GF', 'G3', 'ISIMTDbbfG376'),
(14, 'biyaka', 'buita', 'fortune', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'congolaise', 'nsadisi', 10, 'GF', 'G3', 'ISIMTDbbfG376'),
(15, 'biyaka', 'buita', 'fortune', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'congolaise', 'nsadisi', 10, 'GF', 'G3', ''),
(16, 'TEMBO', 'nguala', 'sedrick', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'MariÃ©(e)', 'CONGOLAISE', 'nsadisi', 1, 'Douane', 'G2', 'ISIMTDTnsG277'),
(17, 'BITA', 'KUIRA', 'ZAMA', 'remytembo5@gmail.com', 'MATADI', '2023-07-08', 'MariÃ©(e)', 'CONGOLAISE', 'j', 5, 'IG', 'G2', 'ISIMTDBKZG278'),
(18, 'MAVUNGU', 'BINDA', 'NATHALIE', 'remytembot4@gmail.com', 'MATADI', '2023-07-07', 'Celibatair', 'CONGOLAISE', 'nsadisi', 7, 'GF', 'G3', 'ISIMTDMBNG379');

-- --------------------------------------------------------

--
-- Structure de la table `gf1`
--

CREATE TABLE IF NOT EXISTS `gf1` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gf1`
--

INSERT INTO `gf1` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `gf2`
--

CREATE TABLE IF NOT EXISTS `gf2` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gf2`
--

INSERT INTO `gf2` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174'),
(0, 'TEMBO', 'nguala', 'sedrick', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'MariÃ©(e)', 'CONGOLAISE', 'nsadisi', 1, 'Douane', 'G2', 'ISIMTDTnsG277');

-- --------------------------------------------------------

--
-- Structure de la table `gf3`
--

CREATE TABLE IF NOT EXISTS `gf3` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gf3`
--

INSERT INTO `gf3` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174'),
(0, 'MAVUNGU', 'BINDA', 'NATHALIE', 'remytembot4@gmail.com', 'MATADI', '2023-07-07', 'Celibatair', 'CONGOLAISE', 'nsadisi', 7, 'GF', 'G3', 'ISIMTDMBNG379');

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `Num_Form` int(4) NOT NULL AUTO_INCREMENT,
  `iduser` varchar(17) NOT NULL,
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` text NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(10) NOT NULL,
  `NATIONALITE` varchar(15) NOT NULL,
  `PERE` varchar(25) NOT NULL,
  `MERE` varchar(25) NOT NULL,
  `PROVINCE` varchar(10) NOT NULL,
  `DISTRICT` varchar(10) NOT NULL,
  `TERRITOIRE` varchar(10) NOT NULL,
  `ADRESSE` varchar(30) NOT NULL,
  `TELEPHONE` int(13) NOT NULL,
  `ECOLE` varchar(20) NOT NULL,
  `PROVINCE_ECOLE` varchar(10) NOT NULL,
  `TERRITOIRE_ECOLE` varchar(10) NOT NULL,
  `SECTION` varchar(15) NOT NULL,
  `CENTRE` varchar(15) NOT NULL,
  `ANNEE_DIPLOME` int(4) NOT NULL,
  `ACTIVITE` varchar(30) NOT NULL,
  `ANNEE_ACADEMIQUE` int(4) NOT NULL,
  `TITRE_ACADEMIQUE` varchar(15) NOT NULL,
  `ETABLISSEMENT` varchar(20) NOT NULL,
  `ANNEE_ETUDE` int(4) NOT NULL,
  `MENTION` varchar(15) NOT NULL,
  `CHOIX` varchar(25) NOT NULL,
  `PROMOTION` varchar(15) NOT NULL,
  `Date_Inscription` date NOT NULL,
  PRIMARY KEY (`Num_Form`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=80 ;

--
-- Contenu de la table `inscription`
--

INSERT INTO `inscription` (`Num_Form`, `iduser`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `PERE`, `MERE`, `PROVINCE`, `DISTRICT`, `TERRITOIRE`, `ADRESSE`, `TELEPHONE`, `ECOLE`, `PROVINCE_ECOLE`, `TERRITOIRE_ECOLE`, `SECTION`, `CENTRE`, `ANNEE_DIPLOME`, `ACTIVITE`, `ANNEE_ACADEMIQUE`, `TITRE_ACADEMIQUE`, `ETABLISSEMENT`, `ANNEE_ETUDE`, `MENTION`, `CHOIX`, `PROMOTION`, `Date_Inscription`) VALUES
(67, 'ISIMTDNBDG1', 'NGOMA', 'BINDA', 'DEBY', 'remytembo5@gmail.com', 'MATADI', '2023-06-01', 'Celibatair', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'kinshasa', 'luozi', 'nsadisi', 6, 'MAKAYA', 'KONGO CENT', 'boma', 'LITTERAIRE', 'NTENTEMBUA', 6, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-06-01'),
(68, 'ISIMTDpmcG1', 'puati', 'mbenza', 'cathy', 'remytembo4@gmail.com', 'MATADI', '2023-06-02', 'MariÃ©(e)', 'congolaise', 'TEMBO', 'L', 'kinshasa', 'cataracte', 'luozi', 'nsadisi', 6, 'MAKAYA', 'KONGO CENT', 'o', 'BIOCHIMIE', 'NTENTEMBUA', 4, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-06-02'),
(69, 'ISIMTDllaG1', 'lukeba', 'lukeba', 'anael', 'remytembo5@gmail.com', 'MATADI', '2023-06-01', 'Celibatair', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'cataracte', 'luozi', 'nsadisi', 8, 'MAKAYA', 'KONGO CENT', 'o', 'BIOCHIMIE', 'NTENTEMBUA', 7, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-06-01'),
(70, 'ISIMTDDSMG1', 'DIVINE', 'SEPHORA', 'MOKO', 'remytembo5@gmail.com', 'MATADI', '2023-05-31', 'MariÃ©(e)', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'cataracte', 'luozi', 'nsadisi', 7, 'MAKAYA', 'KONGO CENT', 'o', 'BIOCHIMIE', 'NTENTEMBUA', 11, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-05-31'),
(71, 'ISIMTDRMHG1', 'RENEDO', 'MEDDY', 'HASH', 'remytembo5@gmail.com', 'MATADI', '2023-05-30', 'Celibatair', 'CONGOLAISE', 'TEMBO', 'masisa', 'kc', 'kinshasa', 'j', 'j', 8, 'MAKAYA', 'KONGO CENT', 'MATA', 'BIOCHIMIE', 'NTENTEMBUA', 6, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-05-30'),
(72, 'ISIMTDrBSG1', 'remu', 'BINDA', 'Samuel', 'lorianenso32@gmail.com', 'MATADI', '2023-06-08', 'MariÃ©(e)', 'CONGOLAISE', 'l', 'L', 'kinshasa', 'cataracte', 'luozi', 'nsadisi', 8, 'LA BORNE', 'KONGO CENT', 'MATA', 'BIOCHIMIE', 'NTENTEMBUA', 3, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-06-08'),
(73, 'ISIMTDnbrG1', 'ndunda', 'baudouin', 'richesse', 'remytembo5@gmail.com', 'MATADI', '2023-06-01', 'MariÃ©(e)', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'kinshasa', 'luozi', 'j', 7, 'o', 'KONGO CENT', 'o', 'o', 'NTENTEMBUA', 13, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-06-01'),
(74, 'ISIMTDFPSG1', 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'kinshasa', 'luozi', 'nsadisi', 8, 'MAKAYA', 'KONGO CENT', 'boma', 'LITTERAIRE', 'NTENTEMBUA', 9, '', 0, '', '', 0, '', 'Technique de Maintenance', 'G1', '2023-07-01'),
(75, 'ISIMTDvbaG1', 'vuma', 'bindele', 'alain', 'remytembo5@gmail.com', 'MATADI', '2023-06-29', 'Celibatair', 'CONGOLAISE', 'TEMBO', 'L', 'kinshasa', 'cataracte', 'luozi', 'nsadisi', 10, 'MAKAYA', 'KONGO CENT', 'MATA', 'BIOCHIMIE', 'NTENTEMBUA', 8, '', 0, '', '', 0, '', 'TM', 'G1', '2023-06-29'),
(76, 'ISIMTDbbfG3', 'biyaka', 'buita', 'fortune', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'congolaise', 'TEMBO', 'masisa', 'kinshasa', 'cataracte', 'luozi', 'nsadisi', 10, 'MAKAYA', 'KONGO CENT', 'MATA', 'BIOCHIMIE', 'NTENTEMBUA', 12, '', 0, '', '', 0, '', 'GF', 'G3', '2023-07-01'),
(77, 'ISIMTDTnsG2', 'TEMBO', 'nguala', 'sedrick', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'MariÃ©(e)', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'cataracte', 'ndjili', 'nsadisi', 1, 'MAKAYA', 'KONGO CENT', 'MATA', 'BIOCHIMIE', 'o', 7, '', 0, '', '', 0, '', 'Douane', 'G2', '2023-07-01'),
(78, 'ISIMTDBKZG2', 'BITA', 'KUIRA', 'ZAMA', 'remytembo5@gmail.com', 'MATADI', '2023-07-08', 'MariÃ©(e)', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'kinshasa', 'LUKALA', 'j', 5, 'MAKAYA', 'KONGO CENT', 'MATA', 'BIOCHIMIE', 'NTENTEMBUA', 5, '', 0, '', '', 0, '', 'IG', 'G2', '2023-07-08'),
(79, 'ISIMTDMBNG3', 'MAVUNGU', 'BINDA', 'NATHALIE', 'remytembot4@gmail.com', 'MATADI', '2023-07-07', 'Celibatair', 'CONGOLAISE', 'TEMBO', 'masisa', 'kinshasa', 'cataracte', 'luozi', 'nsadisi', 7, 'MAKAYA', 'KONGO CENT', 'MATA', 'BIOCHIMIE', 'NTENTEMBUA', 5, '', 0, '', '', 0, '', 'GF', 'G3', '2023-07-07');

-- --------------------------------------------------------

--
-- Structure de la table `p1`
--

CREATE TABLE IF NOT EXISTS `p1` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `p1`
--

INSERT INTO `p1` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `p2`
--

CREATE TABLE IF NOT EXISTS `p2` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `p2`
--

INSERT INTO `p2` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174'),
(0, 'BITA', 'KUIRA', 'ZAMA', 'remytembo5@gmail.com', 'MATADI', '2023-07-08', 'MariÃ©(e)', 'CONGOLAISE', 'j', 5, 'IG', 'G2', 'ISIMTDBKZG278');

-- --------------------------------------------------------

--
-- Structure de la table `password_recover`
--

CREATE TABLE IF NOT EXISTS `password_recover` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token_user` varchar(64) NOT NULL,
  `token` varchar(64) NOT NULL,
  `date_recover` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `result_tm1`
--

CREATE TABLE IF NOT EXISTS `result_tm1` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `POST_NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(25) NOT NULL,
  `SEXE` varchar(7) NOT NULL,
  `INFO_FOND` int(11) NOT NULL,
  `PHYSIQUE` int(11) NOT NULL,
  `ELECTRO_GEN` int(11) NOT NULL,
  `ANALYSE_VEC` int(11) NOT NULL,
  `SANTE_PUB` int(11) NOT NULL,
  `SE` int(11) NOT NULL,
  `SCHEMAS_ELEC` int(11) NOT NULL,
  `EDUCIT` int(11) NOT NULL,
  `ALGO` int(11) NOT NULL,
  `MATH` int(11) NOT NULL,
  `ANGLAIS` int(11) NOT NULL,
  `ELECTR_DIGI` int(11) NOT NULL,
  `LEEO` int(11) NOT NULL,
  `MESURE_ELEC` int(11) NOT NULL,
  `FRANCAIS` int(11) NOT NULL,
  `PROJET` int(11) NOT NULL,
  `TECHO_COMPO` int(11) NOT NULL,
  `POURCENTAGE` int(11) NOT NULL,
  `MENTION` int(11) NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `result_tm2`
--

CREATE TABLE IF NOT EXISTS `result_tm2` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOM` varchar(25) NOT NULL,
  `POST_NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(25) NOT NULL,
  `SEXE` varchar(7) NOT NULL,
  `STRUC_ORDI` int(11) NOT NULL,
  `MACHINES_ELEC` int(11) NOT NULL,
  `CALCULATEUR` int(11) NOT NULL,
  `TELECOM` int(11) NOT NULL,
  `ALGO_II` int(11) NOT NULL,
  `DCI` int(11) NOT NULL,
  `SE_II` int(11) NOT NULL,
  `LABO_I` int(11) NOT NULL,
  `MATH_II` int(11) NOT NULL,
  `ELECTRMAGNE` int(11) NOT NULL,
  `ANALYSE_CIRCUIT` int(11) NOT NULL,
  `STAT` int(11) NOT NULL,
  `ANGLAIS_II` int(11) NOT NULL,
  `MRS` int(11) NOT NULL,
  `AUTO_I` int(11) NOT NULL,
  `RX_I` int(11) NOT NULL,
  `PROJET` int(11) NOT NULL,
  `POURCENTAGE` int(11) NOT NULL,
  `MENTION` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tar1`
--

CREATE TABLE IF NOT EXISTS `tar1` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tar1`
--

INSERT INTO `tar1` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `tar2`
--

CREATE TABLE IF NOT EXISTS `tar2` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tar2`
--

INSERT INTO `tar2` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `tm1`
--

CREATE TABLE IF NOT EXISTS `tm1` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tm1`
--

INSERT INTO `tm1` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174'),
(0, 'vuma', 'bindele', 'alain', 'remytembo5@gmail.com', 'MATADI', '2023-06-29', 'Celibatair', 'CONGOLAISE', 'nsadisi', 10, 'TM', 'G1', 'ISIMTDvbaG175'),
(0, 'vuma', 'bindele', 'alain', 'remytembo5@gmail.com', 'MATADI', '2023-06-29', 'Celibatair', 'CONGOLAISE', 'nsadisi', 10, 'TM', 'G1', ''),
(0, 'vuma', 'bindele', 'alain', 'remytembo5@gmail.com', 'MATADI', '2023-06-29', 'Celibatair', 'CONGOLAISE', 'nsadisi', 10, 'TM', 'G1', '');

-- --------------------------------------------------------

--
-- Structure de la table `tm2`
--

CREATE TABLE IF NOT EXISTS `tm2` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tm2`
--

INSERT INTO `tm2` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

-- --------------------------------------------------------

--
-- Structure de la table `tm3`
--

CREATE TABLE IF NOT EXISTS `tm3` (
  `ID` int(11) NOT NULL DEFAULT '0',
  `NOM` varchar(15) NOT NULL,
  `POST_NOM` varchar(15) NOT NULL,
  `PRENOM` varchar(15) NOT NULL,
  `EMAIL` varchar(25) NOT NULL,
  `LIEU_NAISSANCE` varchar(15) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `ETAT_CIVIL` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `NATIONALITE` varchar(25) CHARACTER SET utf8mb4 NOT NULL,
  `ADRESSE` text NOT NULL,
  `TELEPHONE` int(15) NOT NULL,
  `FACULTE` varchar(30) NOT NULL,
  `PROMOTION` text NOT NULL,
  `USERNAME` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `tm3`
--

INSERT INTO `tm3` (`ID`, `NOM`, `POST_NOM`, `PRENOM`, `EMAIL`, `LIEU_NAISSANCE`, `DATE_NAISSANCE`, `ETAT_CIVIL`, `NATIONALITE`, `ADRESSE`, `TELEPHONE`, `FACULTE`, `PROMOTION`, `USERNAME`) VALUES
(5, 'lukeba', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(6, '', '', '', '', '', '0000-00-00', '', '', '', 0, '', '', 'ISIMTDllaG169'),
(7, 'FIRANCE', 'PEYOGO', 'Samuel', 'remytembo5@gmail.com', 'MATADI', '2023-07-01', 'Celibatair', 'CONGOLAISE', 'nsadisi', 8, 'Technique de Maintenance', 'G1', 'ISIMTDFPSG174');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
