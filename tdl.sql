-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 26 mai 2021 à 09:26
-- Version du serveur :  8.0.25-0ubuntu0.20.04.1
-- Version de PHP : 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tdl`
--

-- --------------------------------------------------------

--
-- Structure de la table `espace`
--

CREATE TABLE `espace` (
  `id` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `id_createur` int DEFAULT NULL,
  `date_creation` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `espace`
--

INSERT INTO `espace` (`id`, `nom`, `id_createur`, `date_creation`) VALUES
(115, 'projet pro', 75, '2021-05-23 13:36:53'),
(116, 'WalidsLand', 76, '2021-05-23 13:39:29'),
(121, 'devoir', 78, '2021-05-23 13:44:01'),
(125, 'ggg', 79, '2021-05-24 14:29:14'),
(126, 'gkhiu', 75, '2021-05-25 09:14:57'),
(127, 'social network', 76, '2021-05-25 11:32:02'),
(128, 'llld', 80, '2021-05-25 11:32:29');

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int NOT NULL,
  `collaborateur` varchar(60) NOT NULL,
  `id_espace` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `groupe`
--

INSERT INTO `groupe` (`id`, `collaborateur`, `id_espace`) VALUES
(27, 'w@mail.fr', 115),
(30, 'a@a.fr', 126),
(31, 'e@e.fr', 127);

-- --------------------------------------------------------

--
-- Structure de la table `liste`
--

CREATE TABLE `liste` (
  `id` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `id_espace` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `liste`
--

INSERT INTO `liste` (`id`, `nom`, `id_espace`) VALUES
(68, 'maquette', 115),
(71, 'papillon', 116),
(73, 'lundi', 121),
(74, 'mardi', 121);

-- --------------------------------------------------------

--
-- Structure de la table `tache`
--

CREATE TABLE `tache` (
  `id` int NOT NULL,
  `nom` varchar(30) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `validation` tinyint(1) NOT NULL DEFAULT '0',
  `id_liste` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `tache`
--

INSERT INTO `tache` (`id`, `nom`, `description`, `validation`, `id_liste`) VALUES
(84, 'figma', NULL, 0, 68),
(85, 'bdd', NULL, 0, 68),
(90, 'orange', 'dldjc', 0, 71);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int NOT NULL,
  `login` varchar(30) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `nom`, `email`, `password`) VALUES
(75, 'pierro', 'p', 'p@mail.fr', '$2y$10$hSjv5XCAdThkmdJiv.9mRON17xYRi.wPYnSo.1hWaYTga/Kkf9ES.'),
(76, 'walid', 'w', 'w@mail.fr', '$2y$10$KrpKr52BE5N1LHSma137YO6/ItX3oSBaawOhPOZ593szxQ8WFO/re'),
(77, 'robino', 'r', 'r@mail.fr', '$2y$10$eSPX.2t/wAl126ifVdjMru5vAQIOZ5BZc./bi75Va02mMulMQFG/m'),
(78, 'nono', 'nolan', 'nolan@mail.fr', '$2y$10$yDXQWTGcBwjmnSkhDiaMo.hx41LWGoug/LXtsnnkiRI6uYLMcZ/ii'),
(79, 'annie', 'gonzalez', 'a@a.fr', '$2y$10$8rGUpojBUSoADWhhs3hyU..SSWcY0UmUFodVWYos6F4I9xWUWjNgC'),
(80, 'emma', 'e', 'e@e.fr', '$2y$10$NV10dss6rR9VXcT.P6e2JeUforqkC0H8LqWO9eBRdaSZ4EfRGVOde');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `espace`
--
ALTER TABLE `espace`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_utilisateur` (`id_createur`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_espace_groupe` (`id_espace`);

--
-- Index pour la table `liste`
--
ALTER TABLE `liste`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_espace` (`id_espace`);

--
-- Index pour la table `tache`
--
ALTER TABLE `tache`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_liste_fk` (`id_liste`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `espace`
--
ALTER TABLE `espace`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=129;

--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT pour la table `liste`
--
ALTER TABLE `liste`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT pour la table `tache`
--
ALTER TABLE `tache`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `espace`
--
ALTER TABLE `espace`
  ADD CONSTRAINT `fk_utilisateur` FOREIGN KEY (`id_createur`) REFERENCES `utilisateurs` (`id`) ON DELETE SET NULL ON UPDATE RESTRICT;

--
-- Contraintes pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD CONSTRAINT `fk_espace_groupe` FOREIGN KEY (`id_espace`) REFERENCES `espace` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `liste`
--
ALTER TABLE `liste`
  ADD CONSTRAINT `fk_espace` FOREIGN KEY (`id_espace`) REFERENCES `espace` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;

--
-- Contraintes pour la table `tache`
--
ALTER TABLE `tache`
  ADD CONSTRAINT `id_liste_fk` FOREIGN KEY (`id_liste`) REFERENCES `liste` (`id`) ON DELETE CASCADE ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
