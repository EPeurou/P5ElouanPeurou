-- phpMyAdmin SQL Dump
-- version OVH
-- https://www.phpmyadmin.net/
--
-- Hôte : elouanr29.mysql.db
-- Généré le : jeu. 23 sep. 2021 à 10:26
-- Version du serveur : 5.6.50-log
-- Version de PHP : 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `elouanr29`
--
CREATE DATABASE IF NOT EXISTS `elouanr29` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `elouanr29`;

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'python'),
(2, 'php');

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` varchar(255) NOT NULL,
  `validate` tinyint(1) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idPost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `date`, `content`, `validate`, `idUser`, `idPost`) VALUES
(2, '2021-07-05 16:14:12', 'ce post est vraiment super ', 1, 1, 4),
(3, '2021-07-07 08:58:29', 'super contenu ', 1, 2, 4),
(5, '2021-07-07 09:22:59', 'ce post est franchement pas terrible', 1, 2, 44),
(48, '2021-09-02 09:42:59', 'TROP BIEN!!', 0, 1, 4),
(49, '2021-09-02 09:43:42', 'sympa ce post', 0, 1, 4);

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `description` varchar(30) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idUser` int(11) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `description`, `date`, `idUser`, `idCategory`, `author`) VALUES
(4, 'Nouveau blog!', 'Le blog à été conçu pour être agréable à l\'oeil et à l\'usage. Il vous plait?', 'Bienvenue sur le blog!', '2021-09-22 15:44:15', 1, 2, 'Elouan'),
(44, 'PHP c\'est vraiment bien!', 'PHP est un bon language pour apprendre.', 'Blabla à propos de php', '2021-09-22 15:54:11', 1, 2, 'Elouan');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `civility` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `creationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `firstName`, `name`, `civility`, `email`, `password`, `pseudo`, `admin`, `creationDate`) VALUES
(1, 'elouan', 'peurou', 'm', 'elouan@npack.fr', '******', 'tim', 1, '2021-07-01 13:32:29'),
(2, 'Tom', 'Dupont', 'm', 'tomDupont@gmail.com', '**', 'tom18', 0, '2021-07-02 14:20:42');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idPost` (`idPost`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUser` (`idUser`),
  ADD KEY `idCategory` (`idCategory`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`idPost`) REFERENCES `post` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
