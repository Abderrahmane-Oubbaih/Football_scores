-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 08 jan. 2020 à 00:26
-- Version du serveur :  10.3.20-MariaDB
-- Version de PHP :  7.3.12

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

DROP TABLE IF EXISTS `tbl_competition`;
CREATE TABLE IF NOT EXISTS `tbl_competition` (
  `Id` int(11) NOT NULL,
  `code` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  `logo2` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_competition`
--

INSERT INTO `tbl_competition` (`Id`, `code`, `Name`, `Logo`, `logo2`) VALUES
(2001, 'CL', 'UEFA Champions League', 'https://www.up-00.com/i/00153/wq3a31lu85ca.png', 'https://www.up-00.com/i/00153/azr0mmo3vdnp.png'),
(2002, ' BL1 ', 'Bundesliga ', ' https://www.up-00.com/i/00153/55omz66kswj6.png', ' https://www.up-00.com/i/00153/55omz66kswj6.png'),
(2003, 'DED', 'Eredivisie  ', 'https://www.up-00.com/i/00153/7urrvn2s2vww.png', 'https://www.up-00.com/i/00153/k532vmjuhiph.png'),
(2013, '  BSA ', 'Série A  ', ' https://www.up-00.com/i/00153/6dfz6dr9oq3q.png', ' https://www.up-00.com/i/00153/h95hniic5335.png'),
(2015, 'FL1', 'Ligue 1', ' https://www.up-00.com/i/00153/0eza7owv013k.png', ' https://www.up-00.com/i/00153/y9fj2qnsjz6a.png'),
(2017, ' PPL ', 'Primeira Liga ', ' https://www.up-00.com/i/00153/h1yzo5fcmykm.png', 'https://www.up-00.com/i/00153/4p2i23602n0y.png'),
(2018, 'EC ', 'European Championship', 'https://www.up-00.com/i/00153/33jb8qccu6tl.png', ' https://www.up-00.com/i/00153/0i91fi97w2d2.png'),
(2019, 'SA ', 'Serie A ', 'https://www.up-00.com/i/00153/bh31c2rq99y5.png', 'https://www.up-00.com/i/00153/b3gfqh5vhaox.png'),
(2021, ' PL', 'Premier League ', 'https://www.up-00.com/i/00153/jleen9te8m3o.png', 'https://www.up-00.com/i/00153/o6rs199bv7eh.png');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_participation`
--

DROP TABLE IF EXISTS `tbl_participation`;
CREATE TABLE IF NOT EXISTS `tbl_participation` (
  `IdCompetition` int(50) NOT NULL,
  `idteam` int(50) NOT NULL,
  `Saison` int(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbl_team`
--

DROP TABLE IF EXISTS `tbl_team`;
CREATE TABLE IF NOT EXISTS `tbl_team` (
  `Id` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Logo` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=utf8mb4;

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
(20, 'RC Strasbourg Alsace', 'https://www.up-00.com/i/00147/aiwpw1t6yk6g.png'),
(21, 'Arsenal FC', ''),
(22, 'Aston Villa FC', ''),
(23, 'Chelsea FC', ''),
(24, 'Everton FC', ''),
(25, 'Liverpool FC', ''),
(26, ' Manchester City FC', ''),
(27, 'Manchester United FC', ''),
(28, 'Newcastle United FC', ''),
(29, 'Norwich City FC', ''),
(30, 'Tottenham Hotspur FC', ''),
(31, 'Wolverhampton Wanderers FC', ''),
(32, 'Burnley FC', ''),
(33, ' Leicester City FC', ''),
(34, 'Southampton FC', ''),
(35, ' Watford FC', ''),
(36, 'Crystal Palace FC', ''),
(37, 'Sheffield United FC', ''),
(38, ' Brighton & Hove Albion FC', ''),
(39, 'West Ham United FC', ''),
(40, ' AFC Bournemouth', ''),
(41, 'Bayer 04 Leverkusen', ''),
(42, 'BV Borussia 09 Dortmund', ''),
(43, 'FC Bayern München', ''),
(44, 'Chelsea FC', ''),
(45, 'Liverpool FC', ''),
(46, 'Manchester City FC', ''),
(47, '  Tottenham Hotspur FC', ''),
(48, 'Club Atlético de Madrid', ''),
(49, 'FC Barcelona', ''),
(50, ' Real Madrid CF', ''),
(51, 'Valencia CF', ''),
(52, ' Atalanta BC', ''),
(53, ' FC Internazionale Milano', ''),
(54, ' Juventus FC', ''),
(55, ' SSC Napoli', ''),
(56, 'FC Porto', ''),
(57, ' Lille OSC', ''),
(58, ' Olympique Lyonnais', ''),
(59, 'Paris Saint-Germain FC', ''),
(60, 'Galatasaray SK', ''),
(61, 'Qarabağ Ağdam FK', ''),
(62, ' PAE Olympiakos SFP', ''),
(63, 'PSV', ''),
(64, '', ''),
(65, ' AFC Ajax', ''),
(66, 'RB Leipzig', ''),
(67, 'FC Basel 1893', ''),
(68, ' FK Zenit Sankt-Petersburg', ''),
(69, 'Celtic FC', ''),
(70, ' NK Maribor', ''),
(71, '  FK BATE Borisov', ''),
(72, 'APOEL FC', ''),
(73, 'GNK Dinamo Zagreb', ''),
(74, 'FK Dynamo Kyiv', ''),
(75, 'Club Brugge KV', ''),
(76, 'Rosenborg BK', ''),
(77, 'SK Slavia Praha', ''),
(78, 'KRC Genk', ''),
(79, 'BSC Young Boys', ''),
(80, 'Dundalk FC', ''),
(81, 'F91 Diddeleng', ''),
(82, 'FC København', ''),
(83, 'FC Red Bull Salzburg', ''),
(84, 'FC Santa Coloma', ''),
(85, 'FC Sheriff Tiraspol', ''),
(86, 'FC Viktoria Plzeň', ''),
(87, ' Astana FK', ''),
(88, ' FK Shakhtar Donetsk', ''),
(89, 'Linfield FC', ''),
(90, ' Medipol Başakşehir FK', ''),
(91, ' PFK Ludogorets 1945 Razgrad', ''),
(92, 'Sport Lisboa e Benfica', ''),
(93, 'The New Saints FC', ''),
(94, 'LASK Linz', ''),
(95, 'FK Sarajevo', ''),
(96, ' Nõmme Kalju FC', ''),
(97, ' Helsingin JK', ''),
(98, 'AIK Fotboll', ''),
(99, 'FK Krasnodar', ''),
(100, 'FK Lokomotiv Moskva', ''),
(101, 'FC CFR 1907 Cluj', ''),
(102, 'GKS Piast Gliwice', ''),
(103, ' Valletta FC', ''),
(104, 'FK Sūduva Marijampolė', ''),
(105, 'Rīga FC', ''),
(106, ' Maccabi Tel Aviv FC', ''),
(107, '', ''),
(108, ' Ferencvárosi TC', ''),
(109, 'PAOK FC', ''),
(110, 'Lincoln Red Imps FC', ''),
(111, ' FK Crvena Zvezda', ''),
(112, 'FK Sutjeska Nikšić', ''),
(113, 'KF Shkëndija 79', ''),
(114, 'FK Partizani', ''),
(115, 'ŠK Slovan Bratislava', ''),
(116, ' KF Feronikeli', ''),
(117, 'SP Tre Penne', ''),
(118, 'FC Ararat-Armenia', ''),
(119, 'FC Saburtalo', ''),
(120, 'HB', ''),
(121, 'Toulouse FC', ''),
(122, ' Stade Brestois 29', ''),
(123, ' Olympique de Marseille', ''),
(124, 'Montpellier HSC', ''),
(125, 'Lille OSC', ''),
(126, 'OGC Nice', ''),
(127, ' Olympique Lyonnais', ''),
(128, 'Paris Saint-Germain FC', ''),
(129, 'FC Girondins de Bordeaux', ''),
(130, 'AS Saint-Étienne', ''),
(131, ' Dijon Football Côte d\'Or', ''),
(132, 'Stade Rennais FC 1901', ''),
(133, 'Amiens SC', ''),
(134, 'Angers SCO', ''),
(135, 'FC Nantes', ''),
(136, 'FC Metz', ''),
(137, 'Stade de Reims', ''),
(138, 'AS Monaco FC', ''),
(139, 'Nîmes Olympique', ''),
(140, 'RC Strasbourg Alsace', ''),
(141, 'FC Köln', ''),
(142, 'TSG 1899 Hoffenheim', ''),
(143, 'Bayer 04 Leverkusen', ''),
(144, 'BV Borussia 09 Dortmund', ''),
(145, ' FC Bayern München', ''),
(146, ' FC Schalke 04', ''),
(147, ' Hertha BSC', ''),
(148, 'VfL Wolfsburg', ''),
(149, 'SV Werder Bremen', ''),
(150, ' FSV Mainz 05', ''),
(151, 'FC Augsburg', ''),
(152, 'SC Freiburg', ''),
(153, 'Borussia Mönchengladbach', ''),
(154, 'Eintracht Frankfurt', ''),
(155, 'TSV Fortuna 95 Düsseldorf', ''),
(156, ' FC Union Berlin', ''),
(157, 'SC Paderborn 07', ''),
(158, 'RB Leipzig', ''),
(159, 'Rio Ave FC', ''),
(160, 'Sporting Clube de Portugal', ''),
(161, '', ''),
(162, ' FC Porto', ''),
(163, ' FC Paços de Ferreira', ''),
(164, '  Moreirense FC', ''),
(165, ' Boavista FC', ''),
(166, ' CD Tondela', ''),
(167, ' Sport Lisboa e Benfica', ''),
(168, ' CD Santa Clara', ''),
(169, ' FC Famalicão', ''),
(170, 'Gil Vicente FC', ''),
(171, 'Vitória SC', ''),
(172, 'CD Aves', ''),
(173, ' Os Belenenses Futebol', ''),
(174, ' CS Marítimo', ''),
(175, ' Portimonense SC', ''),
(176, 'Sporting Clube de Braga', ''),
(177, ' Vitória FC', ''),
(178, 'Athletic Club', ''),
(179, 'Club Atlético de Madrid', ''),
(180, 'CA Osasuna', ''),
(181, '  RCD Espanyol de Barcelona', ''),
(182, ' FC Barcelona', ''),
(183, 'Getafe CF', ''),
(184, ' Granada CF', ''),
(185, 'Real Madrid CF', ''),
(186, 'Levante UD', ''),
(187, 'RCD Mallorca', ''),
(188, 'Real Betis Balompié', ''),
(189, 'Real Sociedad de Fútbol', ''),
(190, 'Villarreal CF', ''),
(191, 'Valencia CF', ''),
(192, ' Real Valladolid CF', ''),
(193, 'Deportivo Alavés', ''),
(194, 'SD Eibar', ''),
(195, 'RC Celta de Vigo', ''),
(196, ' Sevilla FC', ''),
(197, 'CD Leganés', ''),
(198, 'AC Milan', ''),
(199, ' ACF Fiorentina', ''),
(200, 'AS Roma', ''),
(201, 'Atalanta BC', ''),
(202, 'Bologna FC 1909', ''),
(203, 'Cagliari Calcio', ''),
(204, 'Genoa CFC', ''),
(205, 'FC Internazionale Milano', ''),
(206, 'Juventus FC', ''),
(207, 'SS Lazio', ''),
(208, 'Parma Calcio 1913', ''),
(209, ' SSC Napoli', ''),
(210, ' Udinese Calcio', ''),
(211, '  Brescia Calcio', ''),
(212, ' Hellas Verona FC', ''),
(213, ' US Sassuolo Calcio', ''),
(214, ' UC Sampdoria', ''),
(215, '', ''),
(216, 'Torino FC', ''),
(217, ' SPAL 2013', ''),
(218, 'US Lecce', ''),
(219, 'Germany', ''),
(220, ' Spain', ''),
(221, ' Portugal', ''),
(222, ' England', ''),
(223, 'France', ''),
(224, 'Denmark', ''),
(225, 'Italy', ''),
(226, 'Switzerland', ''),
(227, 'Ukraine', ''),
(228, 'Sweden', ''),
(229, 'Poland', ''),
(230, 'Czech Republic', ''),
(231, 'Croatia', ''),
(232, 'Turkey', ''),
(233, 'Belgium', ''),
(234, 'Russia', ''),
(235, 'Austria', ''),
(236, 'Wales', ''),
(237, 'Finland', ''),
(238, 'Netherlands', ''),
(239, 'Eredivisie ', ''),
(240, 'FC Twente \'65', ''),
(241, 'VVV Venlo', ''),
(242, 'Heracles Almelo', ''),
(243, ' Willem II Tilburg', ''),
(244, 'SC Heerenveen', ''),
(245, ' PSV', ''),
(246, 'Feyenoord Rotterdam', ''),
(247, 'FC Utrecht', ''),
(248, 'FC Groningen', ''),
(249, 'AFC Ajax', ''),
(250, 'SBV Vitesse', ''),
(251, 'ADO Den Haag', ''),
(252, 'AZ', ''),
(253, 'RKC Waalwijk', ''),
(254, ' PEC Zwolle', ''),
(255, 'FC Emmen', ''),
(256, '  Fortuna Sittard', ''),
(257, 'Sparta Rotterdam', ''),
(258, 'Fluminense FC', ''),
(259, 'CA Mineiro', ''),
(260, ' Grêmio FBPA', ''),
(261, ' CA Paranaense', ''),
(262, 'SE Palmeiras', ''),
(263, 'Botafogo FR', ''),
(264, 'Cruzeiro EC', ''),
(265, 'Chapecoense AF', ''),
(266, ' Avaí FC', ''),
(267, 'São Paulo FC', ''),
(268, 'EC Bahia', ''),
(269, '', ''),
(270, ' SC Corinthians Paulista', ''),
(271, 'CR Vasco da Gama', ''),
(272, 'CR Flamengo', ''),
(273, 'Ceará SC', ''),
(274, ' Fortaleza EC', ''),
(275, ' CS Alagoano', ''),
(276, ' Goiás EC', ''),
(277, 'SC Internacional', ''),
(278, ' Santos FC     ', '');

-- --------------------------------------------------------

--
-- Structure de la table `tbl_users`
--

DROP TABLE IF EXISTS `tbl_users`;
CREATE TABLE IF NOT EXISTS `tbl_users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `Equipe` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `tbl_users`
--

INSERT INTO `tbl_users` (`Id`, `Name`, `Last_name`, `Equipe`, `Email`, `Password`) VALUES
(1, 'test1', 'test1', 'test1', 'test1', 'test1'),
(2, 'test1', 'test1', 'test1', 'test1', 'test1'),
(5, '', '', '', '', ''),
(6, '', '', '', '', ''),
(7, 'admin', 'admin', 'admin', 'admin', 'admin'),
(8, 'Fathallah', 'wassim', 'RCA', 'wassimfathallah11@gmail.com', 'rca'),
(9, 'Fathallah', 'wassim', 'RCA', 'wassimfathallah11@gmail.com', 'j'),
(10, 'test', 'test', 'test', 'test@hhijlo.com', 'testtest'),
(11, 'Fathallah', 'f', 'fgb', 'f@knk', 'd'),
(12, 'jkn', 'lnlnl', 'jhnkn', 'lnlnl@gmdvfgvail', 'ln,ll,n'),
(13, 'jkn', 'lnlnl', 'jhnkn', 'lnlnl@gmdvfgvail', 'd'),
(14, 'test', 'test', 'test', 'test@gmail.com', 'jhkhik'),
(15, 'test', 'test', 'test', 'test@gmail.com', 'df'),
(16, 'test', 'test', 'test', 'test@gmail.com', 'z'),
(17, 'test', 'test', 'test', 'test@gmail.com', 'z'),
(18, 'test', 'test', 'test', 'test@gmail.com', 'ze'),
(19, 'test', 'test', 'test', 'test@gmail.com', 'f'),
(20, 'g', 'df', 'gds', 'yt@ts', 'RE'),
(21, '', '', '', '', ''),
(22, 't', 'tr', 'rt', 'tr@yet', 'tr'),
(23, 'knln', 'ad', 'ad', 'wassimfathallah1@gmail.com', 'sdcvs'),
(24, 'qsdcqs', 'qsdqsd', 'qdssqd', 'qsd@uinoi', 'qdsqs'),
(25, 'ez', 'ezf', 'ezf', 'ezf@sh', 'ef'),
(26, 'fe', 'fes', 'ef', 'wassimfathallah1@gmail.com', 'rs'),
(27, 'efz', 'ef', 'fe', 'ad@zrt', 'ezf'),
(28, 'gf', 'fd', 'fd', 'wassimfathallah11@gmail.com', 'fd'),
(29, 'gf', 'fd', 'fd', 'wassimfathallah11@gmail.com', 'v'),
(30, 'gt', 'tse', 'df', 'fd@ths', 'fd'),
(31, 'knln', 'd', 'M', 'wassimfathallah11@gmail.com', 'd'),
(32, 'ad', 'd', 'd', 'wassimfathallah11@gmail.com', 'c'),
(33, 'dd', 'df', 'd', 'd@ff', 'd'),
(34, 'cf', 'c', 'c', 'cc@g', 'c'),
(35, 'ad', 'ad', 'ad', 'wassimfathallah11@gmail.com', 'D');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
