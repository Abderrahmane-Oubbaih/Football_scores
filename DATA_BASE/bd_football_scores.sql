-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 30 nov. 2019 à 04:57
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bd_football_scores`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbl_competition`
--

CREATE TABLE `tbl_competition` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_competition`
--

INSERT INTO `tbl_competition` (`Id`, `Name`, `Logo`) VALUES
(1, 'Ligue 1', 'https://www.up-00.com/i/00147/kjh0kze74b00.png');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_inscription`
--

CREATE TABLE `tbl_inscription` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Equipe` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_inscription`
--

INSERT INTO `tbl_inscription` (`Id`, `Name`, `Last_name`, `Equipe`, `Email`, `Password`) VALUES
(1, 'test1', 'test1', 'test1', 'test1', 'test1'),
(2, 'test1', 'test1', 'test1', 'test1', 'test1');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_team`
--

CREATE TABLE `tbl_team` (
  `Id` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Logo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_team`
--

INSERT INTO `tbl_team` (`Id`, `Name`, `Logo`) VALUES
(1, 'Amiens SC', 'https://www.up-00.com/i/00147/a2c0wn1bhj1u.png'),
(2, 'Angers SCO', 'https://www.up-00.com/i/00147/txg6fwabnx0v.png'),
(3, 'AS Monaco FC', 'https://www.up-00.com/i/00147/9c4ujj94pgw4.png'),
(4, 'As Saint-Étienne', 'https://www.up-00.com/i/00147/544i8u03sn3s.png'),
(5, ' Dijon Football Côte d\'Or', 'https://www.up-00.com/i/00147/ce74nz2ytvb3.png'),
(6, 'FC Girondins de Bordeaux', 'https://www.up-00.com/i/00147/t1sxyt3anyxs.png'),
(7, 'FC Metz	', 'https://www.up-00.com/i/00147/j7skc2m11r83.png'),
(8, 'FC Nantes', 'https://www.up-00.com/i/00147/ei03gogdsd0u.png'),
(9, 'Lille OSC', 'https://www.up-00.com/i/00147/opkbvwmuuwy7.png'),
(10, 'Montpellier HSC	', 'https://www.up-00.com/i/00147/nj5qqc7f7ha3.png'),
(11, 'Nîmes Olympique', 'https://www.up-00.com/i/00147/vx27wzhxnwfe.png'),
(12, 'OGC Nice', 'https://www.up-00.com/i/00147/imjs9o7svv8k.png'),
(13, 'Olympique de Marseille', 'https://www.up-00.com/i/00147/bdyvygxcsx2c.png'),
(14, 'Olympique Lyonnais', 'https://www.up-00.com/i/00147/hg9o2rvokjih.png'),
(15, 'Paris Saint-Germain FC', 'https://www.up-00.com/i/00147/glfn3biulbwm.png'),
(16, 'Stade Brestois 29', 'https://www.up-00.com/i/00147/nsuez5sxhyss.png'),
(17, 'Stade De Reims	', 'https://www.up-00.com/i/00147/1ynvbrzyk2lp.png'),
(18, 'Stade Rennais FC 1901', 'https://www.up-00.com/i/00147/whfqoeczqdo1.png'),
(19, 'Toulouse FC', 'https://www.up-00.com/i/00147/hxg15ydu331e.png'),
(20, 'RC Strasbourg Alsace', 'https://www.up-00.com/i/00147/aiwpw1t6yk6g.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_competition`
--
ALTER TABLE `tbl_competition`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tbl_inscription`
--
ALTER TABLE `tbl_inscription`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `tbl_inscription`
--
ALTER TABLE `tbl_inscription`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
