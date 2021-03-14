-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 14 mars 2021 à 01:48
-- Version du serveur :  10.4.18-MariaDB
-- Version de PHP : 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `uvscoders`
--

-- --------------------------------------------------------

--
-- Structure de la table `administration`
--

CREATE TABLE `administration` (
  `id` int(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `administration`
--

INSERT INTO `administration` (`id`, `email`, `password`) VALUES
(3, '', ''),
(4, '', ''),
(5, '', ''),
(6, '', ''),
(7, '', ''),
(8, '', ''),
(9, '', ''),
(10, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(250) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `act_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `pseudo`, `comment`, `act_date`) VALUES
(12, 'aaa2222', '                   vvsvsvvsvs ', '2021-03-14'),
(13, 'aaa2222', '               a     ', '2021-03-14');

-- --------------------------------------------------------

--
-- Structure de la table `commentairesb`
--

CREATE TABLE `commentairesb` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `act_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commentairesb`
--

INSERT INTO `commentairesb` (`id`, `pseudo`, `comment`, `act_date`) VALUES
(1, 'aaa2222', '                    ss', '2021-03-14');

-- --------------------------------------------------------

--
-- Structure de la table `commentairesf`
--

CREATE TABLE `commentairesf` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `act_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE `inscription` (
  `id` int(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `inscription`
--

INSERT INTO `inscription` (`id`, `pseudo`, `email`, `password`) VALUES
(19, 'test', 'test@gmail.com', '$2y$10$zw5jzrR2lhmmv9DHGFhAQO9Tj/sBeYAvX7LMrcmD4Img6Gq1f5HH6');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentairesb`
--
ALTER TABLE `commentairesb`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentairesf`
--
ALTER TABLE `commentairesf`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inscription`
--
ALTER TABLE `inscription`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administration`
--
ALTER TABLE `administration`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `commentairesb`
--
ALTER TABLE `commentairesb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `commentairesf`
--
ALTER TABLE `commentairesf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `inscription`
--
ALTER TABLE `inscription`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
