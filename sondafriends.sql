-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : lun. 21 déc. 2020 à 20:18
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sondafriends`
--

-- --------------------------------------------------------

--
-- Structure de la table `t_friends`
--

CREATE TABLE `t_friends` (
  `friendship_id` int(11) NOT NULL,
  `friend_id_one` int(11) NOT NULL,
  `friend_id_two` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_friends`
--

INSERT INTO `t_friends` (`friendship_id`, `friend_id_one`, `friend_id_two`) VALUES
(1, 2, 1),
(2, 2, 3),
(3, 2, 4),
(6, 4, 1),
(7, 6, 1),
(8, 6, 2),
(9, 6, 7),
(10, 6, 4),
(11, 6, 3),
(12, 1, 3),
(13, 1, 7),
(14, 2, 7),
(15, 22, 2),
(16, 22, 6),
(17, 22, 7),
(18, 22, 3),
(19, 22, 4),
(20, 4, 3),
(21, 4, 7);

-- --------------------------------------------------------

--
-- Structure de la table `t_reponses`
--

CREATE TABLE `t_reponses` (
  `sondage_id` int(11) NOT NULL,
  `reponse_titre` varchar(255) NOT NULL,
  `reponse_score` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_reponses`
--

INSERT INTO `t_reponses` (`sondage_id`, `reponse_titre`, `reponse_score`) VALUES
(1, 'back-end', 1),
(1, 'front-end', 3),
(2, 'manga', 3),
(2, 'sÃ©ries / films', 0),
(2, 'lecture', 0),
(3, 'football', 1),
(3, 'basket', 2),
(3, 'tennis', 1),
(3, 'boxe', 2),
(4, 'Vegeta', 2),
(4, 'Goku', 0),
(5, 'Chien ?', 2),
(5, 'Chat ?', 3),
(6, 'prÃ©sentiel', 1),
(6, 'distance', 1),
(7, 'one piece', 0),
(7, 'naruto', 0),
(8, 'One piece', 0),
(8, 'bleach', 0),
(9, 'prÃ©sentiel', 0),
(9, 'distance', 0),
(10, 'oui ', 0),
(10, 'non', 0),
(11, 'oui ', 0),
(11, 'moyen', 0),
(11, ':(((((((', 0),
(12, 'oui', 4),
(12, 'non', 0);

-- --------------------------------------------------------

--
-- Structure de la table `t_sondages`
--

CREATE TABLE `t_sondages` (
  `sondage_id` int(11) NOT NULL,
  `sondage_titre` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sondage_temps` datetime NOT NULL,
  `sondage_statut` varchar(255) DEFAULT 'en cours',
  `sondage_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_sondages`
--

INSERT INTO `t_sondages` (`sondage_id`, `sondage_titre`, `user_id`, `sondage_temps`, `sondage_statut`, `sondage_code`) VALUES
(1, 'PlutÃ´t back-end ou front-end ?', 2, '2021-12-21 18:11:23', 'en cours', '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy'),
(2, 'Manga ou sÃ©ries / films ou lecture', 2, '2021-12-21 18:13:39', 'en cours', '$2y$10$X3dgPduoc2iPQxRAd5LmnOXSzD13azQmn9mVC/ZN1V9aW77rDD9G6'),
(3, 'Foot ou basket ou tennis ou boxe ? ', 2, '2020-12-21 19:45:03', 'Finish', '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK'),
(4, 'Vegeta ou Goku ?', 3, '2021-12-21 18:19:56', 'en cours', '$2y$10$wCM3Kd9BEWPY5wAYldg9LeHhAzn.tHEwue1nlAoVrLCIn3VvbvG9.'),
(5, 'Chat ou Chien ?', 6, '2020-12-21 19:55:01', 'Finish', '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2'),
(6, 'Cours en prÃ©sentiel ou Ã  distance ?', 1, '2021-12-21 18:31:58', 'en cours', '$2y$10$2VdHIIInnqJX7W4YiR9ZnebSD5xugykDOXQwWF92XKOdztCT6GOCG'),
(7, 'One piece ou naruto ?', 14, '2020-12-21 20:09:58', 'Finish', '$2y$10$i/4qkjDGUDj0QTSekrPGYOJxvvK7qvZ/vC1WknVQBUgmDTYNR0cRq'),
(8, 'One piece ou bleach ?', 14, '2020-12-21 20:10:24', 'Finish', '$2y$10$1Rcxz3OcnQ9OS5fS9VScFORrQbFpriI6Dq3mhnUKRklgUmSbIrgE.'),
(9, 'vous prÃ©fÃ©rez les cours Ã  distance ou en prÃ©sentiel ?', 22, '2021-12-21 19:31:46', 'en cours', '$2y$10$pI4xWtVziER0byokSUWHIuPvNR8ZuhR8NST.vYhBbBDAaQlcK54US'),
(10, 'Bonjour, Ã§a va ?', 22, '2021-12-21 19:33:45', 'en cours', '$2y$10$/IqZbLtdmdEIBWTLStrd0eg.OZ9RCxgriAlrkkjufHN/xglXvPvUe'),
(11, 'Alors la poo, simple non ?', 22, '2021-12-21 19:34:50', 'en cours', '$2y$10$ntnSePLrCK4yvJazA8sGlOXipffP.ecxoMyKY1bj6DfkWgFsy/yUm'),
(12, 'Avez-vous tous rendu vos projets fils rouge ? ', 22, '2020-12-21 21:05:04', 'en cours', '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW');

-- --------------------------------------------------------

--
-- Structure de la table `t_tchat`
--

CREATE TABLE `t_tchat` (
  `tchat_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tchat_message` text NOT NULL,
  `sondage_code` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_tchat`
--

INSERT INTO `t_tchat` (`tchat_id`, `user_id`, `tchat_message`, `sondage_code`) VALUES
(1, 2, 'les deux sont bien mais ... faut choisir maintenant !', '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy'),
(2, 2, 'Team Manga ici', '$2y$10$X3dgPduoc2iPQxRAd5LmnOXSzD13azQmn9mVC/ZN1V9aW77rDD9G6'),
(3, 2, 'Tous dans les pieds :))', '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK'),
(4, 3, 'Ce sera la boxe pour moi', '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK'),
(5, 3, 'hÃ©hÃ©hÃ©hÃ© quelle question !', '$2y$10$X3dgPduoc2iPQxRAd5LmnOXSzD13azQmn9mVC/ZN1V9aW77rDD9G6'),
(6, 3, 'On attaque au front toujours !!', '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy'),
(7, 3, 'Ne vous trompez pas !!', '$2y$10$wCM3Kd9BEWPY5wAYldg9LeHhAzn.tHEwue1nlAoVrLCIn3VvbvG9.'),
(8, 4, 'le back voyons faut toujours surveiller ses arriÃ¨res', '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy'),
(9, 4, 'Le basket c\'est pas mal en volant', '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK'),
(10, 6, 'mmmm tennis !', '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK'),
(11, 6, 'miaou', '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy'),
(12, 6, 'oui team miou anga', '$2y$10$X3dgPduoc2iPQxRAd5LmnOXSzD13azQmn9mVC/ZN1V9aW77rDD9G6'),
(13, 6, 'no error possible', '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2'),
(14, 6, 'Vegetaaaa', '$2y$10$wCM3Kd9BEWPY5wAYldg9LeHhAzn.tHEwue1nlAoVrLCIn3VvbvG9.'),
(15, 1, 'Quelle est votre prÃ©fÃ©rence ?', '$2y$10$2VdHIIInnqJX7W4YiR9ZnebSD5xugykDOXQwWF92XKOdztCT6GOCG'),
(16, 2, 'en prÃ©sentiel cela reste meilleur !', '$2y$10$2VdHIIInnqJX7W4YiR9ZnebSD5xugykDOXQwWF92XKOdztCT6GOCG'),
(17, 2, 'team chat ici', '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2'),
(18, 7, 'comment Ã§a ?', '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2'),
(19, 7, 'distane ouaf', '$2y$10$2VdHIIInnqJX7W4YiR9ZnebSD5xugykDOXQwWF92XKOdztCT6GOCG'),
(20, 4, 'Chien !', '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2'),
(21, 22, 'Dites moi donc !', '$2y$10$pI4xWtVziER0byokSUWHIuPvNR8ZuhR8NST.vYhBbBDAaQlcK54US'),
(22, 22, 'comment allez-vous aujourd\'hui ?', '$2y$10$/IqZbLtdmdEIBWTLStrd0eg.OZ9RCxgriAlrkkjufHN/xglXvPvUe'),
(23, 22, 'Un petit retour !', '$2y$10$ntnSePLrCK4yvJazA8sGlOXipffP.ecxoMyKY1bj6DfkWgFsy/yUm'),
(24, 2, 'bien sÃ»re', '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW'),
(25, 6, 'bien sÃ»r', '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW'),
(26, 7, 'oui', '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW'),
(27, 3, 'oui oui', '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW');

-- --------------------------------------------------------

--
-- Structure de la table `t_users`
--

CREATE TABLE `t_users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_mail` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_isConnected` int(11) NOT NULL DEFAULT '0',
  `user_picture` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `t_users`
--

INSERT INTO `t_users` (`user_id`, `user_name`, `user_mail`, `user_password`, `user_isConnected`, `user_picture`) VALUES
(2, 'Samy', 'samy@outlook.fr', '$2y$10$2LZ1omBJWk6hi6B.ApDphOzdlzhBGYzTKiKRT89r1AxigmZVc0oqC', 0, '5fe0d70e6a55a4.59353105.png'),
(3, 'Vegeta', 'vegeta@dbz.jp', '$2y$10$9mgVTlcUt7MFGDwG7EFY6eFPBZE2N0v4PZpCsX21XqWPCQ0mzYWHi', 1, '5fe0dfb005d257.83458371.jpg'),
(4, 'Goku', 'goku@dbz.jp', '$2y$10$60FaIAoHhluiHLiHP2CEuOlO9ydvmqU4krqsAWlKJaQTBkjOzdZxe', 1, '5fe0df939ce115.88280269.jpg'),
(5, 'Pikachu', 'pikachu@poke.fr', '$2y$10$3roPsbcBz1ZiSEEthlJSTOs5JtQAygz58nebahnMpzTUWCSrnryKy', 0, 'default.png'),
(6, 'Chat', 'chat@ani.fr', '$2y$10$Tt.JdTC9wvssA8e81.rnm.ineqbo0aZFKxQrPUVxOvP4uWf8rDND.', 0, '5fe0e03daa7857.77013007.jpg'),
(7, 'Chien', 'chien@ani.fr', '$2y$10$sjdrLg7y0kxfgI0b0zZFSOi.3391dG8QRtmGlCgtGNKiibfrHyZ4C', 0, '5fe0dfcb500ea7.81183224.jpg'),
(8, 'Lion', 'lion@ani.fr', '$2y$10$u1SMYmrBv7u1Ip0lYgDTt.u18Hu2LHIvG6ztSD9MzknWr9d5cdCUC', 0, 'default.png'),
(9, 'Tigre', 'tigre@ani.fr', '$2y$10$uwILRJiJo7JAOZ2HjYviN.s5HJpgJt6.QyGWQGLiZ.73VFauqnxnC', 0, 'default.png'),
(10, 'Ours', 'ours@ani.fr', '$2y$10$9HoK1vs3uvve3pkS/44Mw.p3hCccrfJhiElLiK1AQ1XVJ1EHpHlI6', 0, 'default.png'),
(11, 'Mario', 'mario@ds.fr', '$2y$10$99ivWGag/GkCDu3oPA450ul6tMiVERjbi3V3waQmcTuaCfLuIMc0q', 0, 'default.png'),
(12, 'Luigi', 'luigi@ds.fr', '$2y$10$Xo6q1w6FNywyjKCtKpg6tO2VHLuBaQa4a0D4jjCXZNNNJW6Xzyomi', 0, 'default.png'),
(13, 'Peach', 'peach@ds.fr', '$2y$10$chj7bxe3gM1TqXp65SXSXuGi8TJ52ZasEjqDQK0C68A5bH40RCJ0O', 0, 'default.png'),
(14, 'Luffy', 'luffy@manga.jp', '$2y$10$UTny574MhGItoEo1Nv0UNOHOdzUZgntaf128H4t0rIIwE7Sc0Hb6C', 0, 'default.png'),
(15, 'Naruto', 'naruto@manga.jp', '$2y$10$mp4XU7mitqVxpQEOV6G3GucX4YvoAK4R67eAu6mqUP8FQtbHkk23m', 0, 'default.png'),
(17, 'Ichigo', 'ichigo@manga.jp', '$2y$10$379WQc3ErVgx4RjEtmjANej7wCORpUAXRppiCzZyC.VyQ.rfftZbS', 0, 'default.png'),
(18, 'Eren', 'eren@manga.jp', '$2y$10$wwG7fWlxJh3.UBobMQx/MubVitu.KH.2PH3Aen9q0fP8.BcoxCj/u', 0, 'default.png'),
(19, 'Mikasa', 'mikasa@manga.jp', '$2y$10$Y6bOX06oNxu1gJWNDgGhrO9.M4vR13Iclxbv1KUd.XtT9PRLiwTgu', 0, 'default.png'),
(20, 'Fourmi', 'fourmi@ins.fr', '$2y$10$aZK3swQZRzYvMdkZpewjtekP4YajevokIeviZPNvDmG9X9.huooQq', 0, 'default.png'),
(21, 'Araignee', 'araignee@ins.fr', '$2y$10$VF23dcyBrmOTbXsp5b5kSuNgd3Qzg2f2afSSfggs7RQv233GLvcOu', 0, 'default.png'),
(22, 'Alexandre', 'alexandre@iim.fr', '$2y$10$wcc0lxBphdIm3iGtgJU/vueyf5awyYkfw7arlzcOnYqGtYdAsW0OO', 1, 'default.png');

-- --------------------------------------------------------

--
-- Structure de la table `t_usersreponses`
--

CREATE TABLE `t_usersreponses` (
  `userRep_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sondage_code` text NOT NULL,
  `reponse_titre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `t_usersreponses`
--

INSERT INTO `t_usersreponses` (`userRep_id`, `user_id`, `sondage_code`, `reponse_titre`) VALUES
(1, 2, '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy', 'front-end'),
(2, 2, '$2y$10$X3dgPduoc2iPQxRAd5LmnOXSzD13azQmn9mVC/ZN1V9aW77rDD9G6', 'manga'),
(3, 2, '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK', 'football'),
(4, 3, '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK', 'boxe'),
(5, 3, '$2y$10$X3dgPduoc2iPQxRAd5LmnOXSzD13azQmn9mVC/ZN1V9aW77rDD9G6', 'manga'),
(6, 3, '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy', 'front-end'),
(7, 3, '$2y$10$wCM3Kd9BEWPY5wAYldg9LeHhAzn.tHEwue1nlAoVrLCIn3VvbvG9.', 'Vegeta'),
(8, 4, '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy', 'back-end'),
(9, 4, '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK', 'basket'),
(10, 6, '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK', 'tennis'),
(11, 6, '$2y$10$iSxHViKLFs3WuVDdswiNP.xYUJfBAMVHp36lcNLU7JasjlWVfmBdy', 'front-end'),
(12, 6, '$2y$10$X3dgPduoc2iPQxRAd5LmnOXSzD13azQmn9mVC/ZN1V9aW77rDD9G6', 'manga'),
(13, 6, '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2', 'Chat ?'),
(14, 6, '$2y$10$wCM3Kd9BEWPY5wAYldg9LeHhAzn.tHEwue1nlAoVrLCIn3VvbvG9.', 'Vegeta'),
(15, 1, '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK', 'boxe'),
(16, 2, '$2y$10$2VdHIIInnqJX7W4YiR9ZnebSD5xugykDOXQwWF92XKOdztCT6GOCG', 'prÃ©sentiel'),
(17, 2, '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2', 'Chat ?'),
(18, 7, '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2', 'Chien ?'),
(19, 7, '$2y$10$2VdHIIInnqJX7W4YiR9ZnebSD5xugykDOXQwWF92XKOdztCT6GOCG', 'distance'),
(20, 4, '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2', 'Chien ?'),
(21, 22, '$2y$10$nMFqddcrBilg46TO3MiHkOwpz8llYgmwyjACzd0o9KHJplcaiaVvK', 'basket'),
(22, 22, '$2y$10$jvQEkyKd1BJPNSBc81ovxuAD8Tl9LS9EZdWN1Dquy7Va316qPM/a2', 'Chat ?'),
(23, 2, '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW', 'oui'),
(24, 6, '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW', 'oui'),
(25, 7, '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW', 'oui'),
(26, 3, '$2y$10$UIWAQmGAWNfYZVePveoOauQR574XkRWVxFv93p4QQPSl6fV8w1woW', 'oui');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `t_friends`
--
ALTER TABLE `t_friends`
  ADD PRIMARY KEY (`friendship_id`);

--
-- Index pour la table `t_sondages`
--
ALTER TABLE `t_sondages`
  ADD PRIMARY KEY (`sondage_id`);

--
-- Index pour la table `t_tchat`
--
ALTER TABLE `t_tchat`
  ADD PRIMARY KEY (`tchat_id`);

--
-- Index pour la table `t_users`
--
ALTER TABLE `t_users`
  ADD PRIMARY KEY (`user_id`);

--
-- Index pour la table `t_usersreponses`
--
ALTER TABLE `t_usersreponses`
  ADD PRIMARY KEY (`userRep_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `t_friends`
--
ALTER TABLE `t_friends`
  MODIFY `friendship_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `t_sondages`
--
ALTER TABLE `t_sondages`
  MODIFY `sondage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `t_tchat`
--
ALTER TABLE `t_tchat`
  MODIFY `tchat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `t_users`
--
ALTER TABLE `t_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `t_usersreponses`
--
ALTER TABLE `t_usersreponses`
  MODIFY `userRep_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
