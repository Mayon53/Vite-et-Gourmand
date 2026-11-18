-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mer. 18 nov. 2026 à 22:53
-- Version du serveur : 9.7.1
-- Version de PHP : 8.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `Vite_et_Gourmand`
--

-- --------------------------------------------------------

--
-- Structure de la table `Commande`
--

CREATE TABLE `Commande` (
  `id_Utilisateur` int NOT NULL,
  `Menu` varchar(50) DEFAULT NULL,
  `date_Livraison` date DEFAULT NULL,
  `heure_Livraison` varchar(50) DEFAULT NULL,
  `Adresse_livraison` varchar(255) DEFAULT NULL,
  `Code_postal_Livraison` varchar(5) DEFAULT NULL,
  `Ville_Livraison` varchar(255) DEFAULT NULL,
  `Nb_Personne` int NOT NULL,
  `date_Commande` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Role`
--

CREATE TABLE `Role` (
  `idUtilisateur` int NOT NULL,
  `libelle` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Utilisateur`
--

CREATE TABLE `Utilisateur` (
  `Id` int NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Prénom` varchar(50) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Téléphone` varchar(10) NOT NULL,
  `Adresse` varchar(255) NOT NULL,
  `Code_Postal` varchar(5) NOT NULL,
  `Ville` varchar(255) NOT NULL,
  `Password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `Utilisateur`
--

INSERT INTO `Utilisateur` (`Id`, `Nom`, `Prénom`, `Email`, `Téléphone`, `Adresse`, `Code_Postal`, `Ville`, `Password`) VALUES
(3, 'DUPONT', 'Jean', 'dupont.j@gmail.com', '645678765', '23 rue de la republique', '33000', 'Bordeaux', 'Jean1Du0nt');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Role`
--
ALTER TABLE `Role`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- Index pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Utilisateur`
--
ALTER TABLE `Utilisateur`
  MODIFY `Id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `Role`
--
ALTER TABLE `Role`
  ADD CONSTRAINT `role_ibfk_1` FOREIGN KEY (`idUtilisateur`) REFERENCES `Utilisateur` (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
