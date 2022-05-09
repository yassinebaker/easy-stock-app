-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 09 mai 2022 à 02:55
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `easy-stock-app`
--

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `prix` varchar(255) NOT NULL,
  `quantite` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `designation`, `prix`, `quantite`) VALUES
(1, 'Thiakri', '500', 100);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `mot_de_passe` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `role` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `email`, `telephone`, `mot_de_passe`, `adresse`, `role`) VALUES
(6, 'admin', 'admin@admin.stock', '786300614', '$2y$10$JJanXPEQko2mGUbCbR4NfOlFZmCohLi15xd8DejtKaPzE1drt3xrS', 'Rufisque', '1'),
(7, 'Yacine', 'yacine@gmail.com', '784035623', '$2y$10$7H4Wr0G9/GA/kNQBK.3fg.7oVstsrxaL9mL1tsJVPsJ6ZQGDarcA2', 'Dakar', '0'),
(8, 'Diatta', 'diatta@gmail.com', '78123456789', '$2y$10$qKWDzs078mWaNle.WCpfS.BAemWXhssce1JkELnqzr7d4EFdoOJ1e', 'Keur Massar', '0'),
(9, 'Abdou', 'abdou@gmail.com', '786300614', '$2y$10$xmiWT7ifnTpdo9z3Sna9quIuQpRk5MMjywzkuPTq.unczjZS2701q', 'Medina', '0');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
