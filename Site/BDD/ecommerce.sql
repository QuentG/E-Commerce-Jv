-- phpMyAdmin SQL Dump
-- version 4.7.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mer. 14 fév. 2018 à 15:24
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `Jeux`
--

CREATE TABLE `Jeux` (
  `id` int(11) NOT NULL,
  `Nom` varchar(255) NOT NULL,
  `Prix` varchar(255) NOT NULL,
  `Categories` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `membres`
--

CREATE TABLE `membres` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `membres`
--

INSERT INTO `membres` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$KEaGo7/5H0pmcITdNOrrt.lqI4hKjetEYoCgFt6wFjXOnA0EEomJi'),
(2, 'tony', '$2y$10$HIiERb.ZfB8d2Kcz2d2W1OW/XcAc3al8p8iqpI5ZV98TJy2O9BlAW'),
(3, 'tony', '$2y$10$3ERDhJf5e./7JkRkmidOkOxefj5ur7V8CH976thOvlEadENq1nZrW'),
(4, 'Guigui', '$2y$10$yKUyqXJyl6ocm2hmvqgDlO1R.u74wNa5Yxl2My0MDDAqbytOZqnny');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `Jeux`
--
ALTER TABLE `Jeux`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `membres`
--
ALTER TABLE `membres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `Jeux`
--
ALTER TABLE `Jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `membres`
--
ALTER TABLE `membres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;