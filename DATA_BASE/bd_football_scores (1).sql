-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 25 nov. 2019 à 12:27
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
(1, 'Amiens_SC', 'https://www.up-00.com/i/00147/a2c0wn1bhj1u.png'),
(2, 'Angers_SCO', 'https://www.up-00.com/i/00147/txg6fwabnx0v.png'),
(3, 'AS_Monaco_FC', 'https://www.up-00.com/i/00147/9c4ujj94pgw4.png'),
(4, 'As_Saint_Etienne', 'https://www.up-00.com/i/00147/544i8u03sn3s.png'),
(5, ' Dijon_Football_Cote_Dor', 'https://www.up-00.com/i/00147/ce74nz2ytvb3.png'),
(6, 'FC_Girondins_De_Bordeaux', 'https://www.up-00.com/i/00147/t1sxyt3anyxs.png'),
(7, 'FC_Metz	', 'https://www.up-00.com/i/00147/j7skc2m11r83.png'),
(8, 'FC_Nantes', 'https://www.up-00.com/i/00147/ei03gogdsd0u.png'),
(9, 'Lille_OSC', 'https://www.up-00.com/i/00147/opkbvwmuuwy7.png'),
(10, 'Montpellier_HSC	', 'https://www.up-00.com/i/00147/nj5qqc7f7ha3.png'),
(11, 'Nimes_Olympique', 'https://www.up-00.com/i/00147/vx27wzhxnwfe.png'),
(12, 'OGC_Nice', 'https://www.up-00.com/i/00147/imjs9o7svv8k.png'),
(13, 'Olympique_de_Marseille', 'https://www.up-00.com/i/00147/bdyvygxcsx2c.png'),
(14, 'Olympique_Lyonnais', 'https://www.up-00.com/i/00147/hg9o2rvokjih.png'),
(15, 'Paris_Saint8Germain_FC', 'https://www.up-00.com/i/00147/glfn3biulbwm.png'),
(16, 'Stade_Brestois_29', 'https://www.up-00.com/i/00147/nsuez5sxhyss.png'),
(17, 'Stade_De_Reims	', 'https://www.up-00.com/i/00147/1ynvbrzyk2lp.png'),
(18, 'Stade_Rennai', 'https://www.up-00.com/i/00147/whfqoeczqdo1.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `tbl_competition`
--
ALTER TABLE `tbl_competition`
  ADD PRIMARY KEY (`Id`);

--
-- Index pour la table `tbl_team`
--
ALTER TABLE `tbl_team`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
