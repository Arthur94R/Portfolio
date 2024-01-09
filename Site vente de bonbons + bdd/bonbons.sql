-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le : mar. 09 jan. 2024 à 13:18
-- Version du serveur : 5.7.34
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bonbons`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `login` varchar(255) DEFAULT NULL,
  `mdp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `login`, `mdp`) VALUES
(1, 'arthur', 'arthur');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) COLLATE latin1_bin NOT NULL,
  `prix` decimal(10,2) NOT NULL,
  `photo` varchar(30) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id`, `nom`, `prix`, `photo`) VALUES
(1, 'bananes', '0.48', 'Images/bananes.jpg'),
(2, 'chamallow', '0.48', 'Images/chamallow.jpg'),
(3, 'coca', '0.48', 'Images/coca.jpg'),
(4, 'colorado', '0.48', 'Images/colorado.jpg'),
(5, 'fruikipik', '0.55', 'Images/fruikipik.jpg'),
(6, 'dragolo', '0.48', 'Images/dragolo.jpg'),
(7, 'world', '0.48', 'Images/world.jpg'),
(8, 'happy', '0.48', 'Images/happy.jpg'),
(9, 'melange', '0.48', 'Images/melange.jpg'),
(10, 'miami', '0.48', 'Images/miami.jpg'),
(11, 'nounours', '0.48', 'Images/nounours.jpg'),
(12, 'oeufs', '0.48', 'Images/oeufs.jpg'),
(13, 'rainbow', '0.48', 'Images/rainbow.jpg'),
(14, 'shtroumpf', '0.48', 'Images/shtroumpf.jpg'),
(15, 'frites', '0.45', 'Images/frites.jpg'),
(16, 'reglisses', '0.53', 'Images/reglisse.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `produit`
--
ALTER TABLE `produit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
