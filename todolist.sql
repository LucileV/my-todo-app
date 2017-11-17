-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 17 nov. 2017 à 15:42
-- Version du serveur :  10.1.26-MariaDB
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `todolist`
--

-- --------------------------------------------------------

--
-- Structure de la table `task`
--

CREATE TABLE `task` (
  `task_ID` int(255) NOT NULL,
  `task_title` varchar(255) NOT NULL,
  `task_description` text NOT NULL,
  `task_start` varchar(10) NOT NULL,
  `task_end` varchar(10) NOT NULL,
  `task_status` int(255) NOT NULL DEFAULT '1',
  `task_ended_on_timestamp​` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `task`
--

INSERT INTO `task` (`task_ID`, `task_title`, `task_description`, `task_start`, `task_end`, `task_status`, `task_ended_on_timestamp​`) VALUES
(1, 'Faire les courses', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, eveniet laborum distinctio! Incidunt sequi porro aut, quidem consectetur ipsam facere. Esse reprehenderit ipsam soluta fuga alias enim, mollitia aliquam unde.', '2017-11-15', '2017-11-16', 1, '0000-00-00 00:00:00'),
(2, 'Faire la valise', 'Voluptas, eveniet laborum distinctio! Incidunt sequi porro aut, quidem consectetur ipsam facere. Esse reprehenderit ipsam soluta fuga alias enim, mollitia aliquam unde.', '2017-11-15', '2017-12-01', 1, '0000-00-00 00:00:00'),
(3, 'Sortir le chien', 'Ne pas oublier !!', '2017-11-15', '2017-11-14', 3, '0000-00-00 00:00:00'),
(4, 'Faire du sport', 'Aller soyons motivée !!', '2017-11-03', '2017-11-04', 2, '0000-00-00 00:00:00'),
(5, 'Restaurant avec Delphine', 'A confirmer', '14.12.2017', '2017-11-17', 2, '0000-00-00 00:00:00'),
(6, 'Restaurant avec Delphine', 'A confirmer', '', '', 0, '0000-00-00 00:00:00'),
(7, 'test1', 'dgfdgdf', '14.12.2017', '2017-11-04', 1, '2017-11-16 14:34:08');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `task`
--
ALTER TABLE `task`
  MODIFY `task_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
