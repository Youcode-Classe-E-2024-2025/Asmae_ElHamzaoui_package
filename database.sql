-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 13 déc. 2024 à 19:03
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion_packages`
--

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id_Auteur` int(11) NOT NULL,
  `nom_Auteur` varchar(255) NOT NULL,
  `prenom_Auteur` varchar(255) NOT NULL,
  `email_Auteur` varchar(255) NOT NULL,
  `date_inscription_Auteur` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id_Auteur`, `nom_Auteur`, `prenom_Auteur`, `email_Auteur`, `date_inscription_Auteur`) VALUES
(1, 'Soma4', 'Soma2', 'vyjeqegi@mailinator.com', '1998-11-28'),
(2, 'riquvigo', 'ferojo', 'rutecabu@mailinator.com', '1992-10-29'),
(3, 'El Hamzaoui', 'Asmae', 'asmaeelhamzaoui77@gmail.com', '2025-01-05');

-- --------------------------------------------------------

--
-- Structure de la table `colaborations`
--

CREATE TABLE `colaborations` (
  `id_Package` int(11) NOT NULL,
  `id_Auteur` int(11) NOT NULL,
  `date_contribution` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `colaborations`
--

INSERT INTO `colaborations` (`id_Package`, `id_Auteur`, `date_contribution`) VALUES
(4, 2, '2024-12-21'),
(5, 2, '2024-12-18');

-- --------------------------------------------------------

--
-- Structure de la table `g_package`
--

CREATE TABLE `g_package` (
  `id_Package` int(11) NOT NULL,
  `nom_Package` varchar(255) NOT NULL,
  `desc_Package` varchar(255) NOT NULL,
  `url_Package` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `g_package`
--

INSERT INTO `g_package` (`id_Package`, `nom_Package`, `desc_Package`, `url_Package`) VALUES
(1, 'gsqvd', 'dhhjjsq', 'http://localhost/Asmae_ElHamzaoui_package/formulaire.php'),
(2, 'qQD', 'QSQ', 'http://localhost/Asmae_ElHamzaoui_package/formulaire.php'),
(3, 'qQD', '<wx', 'http://localhost/Asmae_ElHamzaoui_package/formulaire.php'),
(4, 'dofyroj@mailinator.com', 'xegyle@mailinator.com', 'https://www.tatokaxon.tv'),
(5, 'Asmae', 'El hamzaoui', 'https://www.jyqecofagejus.com.au'),
(6, 'tasytej@mailinator.com', 'byliti@mailinator.com', 'https://www.buzenajojaxeqoh.in'),
(7, 'bawesi@mailinator.com', 'begyze@mailinator.com', 'https://www.gar.me.uk'),
(8, 'xupatiq@mailinator.com', 'myropyrol@mailinator.com', 'https://www.hidusahanaqurel.tv');

-- --------------------------------------------------------

--
-- Structure de la table `version`
--

CREATE TABLE `version` (
  `id_Version` int(11) NOT NULL,
  `id_Package` int(11) DEFAULT NULL,
  `num_version` varchar(255) NOT NULL,
  `date_sortie_version` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `version`
--

INSERT INTO `version` (`id_Version`, `id_Package`, `num_version`, `date_sortie_version`) VALUES
(1, 5, '1.0.0', '2024-12-11'),
(2, 7, 'poqu@mailinator.com', '1988-07-22');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id_Auteur`),
  ADD UNIQUE KEY `email_Auteur` (`email_Auteur`);

--
-- Index pour la table `colaborations`
--
ALTER TABLE `colaborations`
  ADD PRIMARY KEY (`id_Package`,`id_Auteur`),
  ADD KEY `id_Auteur` (`id_Auteur`);

--
-- Index pour la table `g_package`
--
ALTER TABLE `g_package`
  ADD PRIMARY KEY (`id_Package`);

--
-- Index pour la table `version`
--
ALTER TABLE `version`
  ADD PRIMARY KEY (`id_Version`),
  ADD KEY `id_Package` (`id_Package`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id_Auteur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `g_package`
--
ALTER TABLE `g_package`
  MODIFY `id_Package` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `version`
--
ALTER TABLE `version`
  MODIFY `id_Version` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `colaborations`
--
ALTER TABLE `colaborations`
  ADD CONSTRAINT `colaborations_ibfk_1` FOREIGN KEY (`id_Package`) REFERENCES `g_package` (`id_Package`),
  ADD CONSTRAINT `colaborations_ibfk_2` FOREIGN KEY (`id_Auteur`) REFERENCES `auteur` (`id_Auteur`);

--
-- Contraintes pour la table `version`
--
ALTER TABLE `version`
  ADD CONSTRAINT `version_ibfk_1` FOREIGN KEY (`id_Package`) REFERENCES `g_package` (`id_Package`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
