-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 05 mai 2023 à 17:52
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `candidature`
--

-- --------------------------------------------------------

--
-- Structure de la table `depute_national`
--

CREATE TABLE `depute_national` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `voies` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `depute_national`
--

INSERT INTO `depute_national` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `voies`, `photo`) VALUES
(1, 'justine', 'khasa', 'mbumba', 'F', 0, 'images_nationales/FB_IMG_1669147800910.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `depute_provincial`
--

CREATE TABLE `depute_provincial` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `voies` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `depute_provincial`
--

INSERT INTO `depute_provincial` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `voies`, `photo`) VALUES
(1, 'KHASA', 'MBUMBA', 'dieudonne', 'M', 0, 'images_provinciaux/Capture d’écran (16).png'),
(2, 'KHASA', 'MBUMBA', 'dieudonne', 'M', 0, 'images_provinciaux/Capture d’écran (16).png');

-- --------------------------------------------------------

--
-- Structure de la table `electeurs`
--

CREATE TABLE `electeurs` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `lieunaissance` varchar(255) NOT NULL,
  `datedenaissance` date NOT NULL,
  `adresse` text NOT NULL,
  `origine` text NOT NULL,
  `nompere` varchar(255) NOT NULL,
  `nomere` varchar(255) NOT NULL,
  `nn` text NOT NULL,
  `voter` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `electeurs`
--

INSERT INTO `electeurs` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `lieunaissance`, `datedenaissance`, `adresse`, `origine`, `nompere`, `nomere`, `nn`, `voter`) VALUES
(1, 'KHASA', 'MBUMBA', 'ROGER', 'M', 'MUANDA', '2002-05-23', 'KINKANDA', 'LUBOLO/TSHELA/KONGO CENTRAL', 'KHASA', 'SEVO', '30546950945', NULL),
(2, 'KALEMBA', 'KALAYAME', 'DONNEL', 'M', 'MBANZA-NGUNGU', '1998-06-01', 'AV MPATI N°2', 'KIMUMBA/LUOZI/KONGO CENTRAL', 'KALEMBA', 'BAYAMODILA', '30670959226', 1);

-- --------------------------------------------------------

--
-- Structure de la table `presidentielle`
--

CREATE TABLE `presidentielle` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `postnom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` varchar(1) NOT NULL,
  `voies` int(11) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `presidentielle`
--

INSERT INTO `presidentielle` (`id`, `nom`, `postnom`, `prenom`, `sexe`, `voies`, `photo`) VALUES
(1, 'khasa', 'mbumba', 'roge', 'M', 0, 'images_presidents/-y52f58.jpg'),
(2, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(3, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(4, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(5, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(6, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(7, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(8, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(9, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(10, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(11, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(12, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(13, 'khasa', 'mbumba', 'roger', 'M', 0, 'images_presidents/-y52f58.jpg'),
(14, 'SEVO', 'baza', 'JACQUELINE', 'F', 0, 'images_presidents/FB_IMG_1669147839565.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `vote_national`
--

CREATE TABLE `vote_national` (
  `id_vote` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jour_vote` datetime NOT NULL DEFAULT current_timestamp(),
  `voies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vote_national`
--

INSERT INTO `vote_national` (`id_vote`, `id`, `jour_vote`, `voies`) VALUES
(1, 1, '2023-04-28 00:17:28', 1),
(2, 1, '2023-04-28 00:19:29', 1),
(3, 1, '2023-04-28 00:20:22', 1),
(4, 1, '2023-04-28 15:37:13', 1),
(5, 1, '2023-04-28 16:57:28', 1),
(6, 1, '2023-04-29 10:11:17', 1),
(7, 1, '2023-05-04 16:31:10', 1),
(8, 1, '2023-05-05 15:45:13', 1),
(9, 1, '2023-05-05 15:45:14', 1),
(10, 1, '2023-05-05 15:45:56', 1),
(11, 1, '2023-05-05 15:46:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vote_president`
--

CREATE TABLE `vote_president` (
  `id_vote` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jour_vote` datetime NOT NULL DEFAULT current_timestamp(),
  `voies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vote_president`
--

INSERT INTO `vote_president` (`id_vote`, `id`, `jour_vote`, `voies`) VALUES
(1, 3, '2023-04-28 00:17:28', 1),
(2, 1, '2023-04-28 00:19:29', 1),
(3, 2, '2023-04-28 00:20:22', 1),
(4, 1, '2023-04-28 15:37:13', 1),
(5, 2, '2023-04-28 16:57:28', 1),
(6, 7, '2023-04-29 10:11:17', 1),
(7, 1, '2023-05-04 16:31:10', 1),
(8, 1, '2023-05-05 15:45:13', 1),
(9, 1, '2023-05-05 15:45:14', 1),
(10, 1, '2023-05-05 15:45:56', 1),
(11, 2, '2023-05-05 15:46:28', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vote_provincial`
--

CREATE TABLE `vote_provincial` (
  `id_vote` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `jour_vote` datetime NOT NULL DEFAULT current_timestamp(),
  `voies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `vote_provincial`
--

INSERT INTO `vote_provincial` (`id_vote`, `id`, `jour_vote`, `voies`) VALUES
(1, 2, '2023-04-28 00:17:28', 1),
(2, 1, '2023-04-28 00:19:29', 1),
(3, 2, '2023-04-28 00:20:23', 1),
(4, 1, '2023-04-28 15:37:14', 1),
(5, 1, '2023-04-28 16:57:28', 1),
(6, 2, '2023-04-29 10:11:17', 1),
(7, 2, '2023-05-04 16:31:10', 1),
(8, 2, '2023-05-05 15:45:13', 1),
(9, 2, '2023-05-05 15:45:14', 1),
(10, 2, '2023-05-05 15:45:56', 1),
(11, 2, '2023-05-05 15:46:28', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `depute_national`
--
ALTER TABLE `depute_national`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `depute_provincial`
--
ALTER TABLE `depute_provincial`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `electeurs`
--
ALTER TABLE `electeurs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `presidentielle`
--
ALTER TABLE `presidentielle`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vote_national`
--
ALTER TABLE `vote_national`
  ADD PRIMARY KEY (`id_vote`);

--
-- Index pour la table `vote_president`
--
ALTER TABLE `vote_president`
  ADD PRIMARY KEY (`id_vote`);

--
-- Index pour la table `vote_provincial`
--
ALTER TABLE `vote_provincial`
  ADD PRIMARY KEY (`id_vote`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `depute_national`
--
ALTER TABLE `depute_national`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `depute_provincial`
--
ALTER TABLE `depute_provincial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `electeurs`
--
ALTER TABLE `electeurs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `presidentielle`
--
ALTER TABLE `presidentielle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `vote_national`
--
ALTER TABLE `vote_national`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `vote_president`
--
ALTER TABLE `vote_president`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `vote_provincial`
--
ALTER TABLE `vote_provincial`
  MODIFY `id_vote` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
