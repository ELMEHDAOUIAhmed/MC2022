-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 21 mai 2022 à 21:42
-- Version du serveur : 10.4.19-MariaDB
-- Version de PHP : 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `login`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id_event` int(10) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_desc` text COLLATE utf8_unicode_ci NOT NULL,
  `event_logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_img_1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_img_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_img_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id_event`, `event_name`, `event_desc`, `event_logo`, `event_img_1`, `event_img_2`, `event_img_3`) VALUES
(1, 'Micro Catch The Flag', 'Micro-Club Capture The Flag (MCTF) est un événement phare du Micro-Club, ce dernier représente un rendez-vous annuel pour tous les passionnés et amateurs de cyber sécurité en Algérie. MCTF rassemble chaque année les fervents et amateurs de sécurité informatique afin qu’ils s’affrontent et essayent de trouver la faille qui réside entre le 0 et le 1 des systèmes informatiques avec des challenges soigneusement élaborés.', './assests/images/events/logo_event.png', './assests/images/events/MCTF_1.jpg', './assests/images/events/MCTF_2.jpg', './assests/images/events/MCTF_3.jpg'),
(2, 'Algerian Game Challenge', 'AGC est un événement annuel qui vise à rassembler les développeurs de jeux à\r\ntravers un concours de développement de jeux et des séries d’activités telles que\r\ndes ateliers, des conférences et des formations.\r\nCet event initialemnt nommé le défi de jeu \'', './assests/images/events/logo_agc.png', './assests/images/events/AGC_1.png', './assests/images/events/AGC_2.png', './assests/images/events/AGC_3.jpg'),
(3, 'Local Hack Day', 'Vous vous demandiez ce qu\'on a préparé pour vous ? Le Micro Club a le plaisir d\'organiser le Local Hack Day : build ! :D\r\n\r\nLe local Hack day, c\'est 12 heures de coding intensive, qui vont vous permettre de vous mettre au défi et de repousser vos limites. Organisé à l\'échelle internationale, ce hackathon a pour ambition d\'explorer des idées innovantes développées d\'équipes passionnées, qu\'elles soient débutantes ou pas !\r\n\r\nL\'événement aura lieu au niveau de The Campus, le 7 décembre 2019, au Val d\'hydra (entre l\'ambassade d\'Autriche et l\'ambassade de la République de Corée).\r\n\r\nLocalisation de l\'événement : https://goo.gl/maps/WPGBi9ySZvzZvq3T7\r\nLien d\'inscription : https://localhackday.mlh.io/build/locations/2753\r\n\r\nprogramme :\r\n\r\n8:00am - Checkin & registration begin\r\n\r\n9:00am - Opening Ceremony\r\n\r\n9:30am - Hacking Begins\r\n\r\n10:00am - Workshop 1\r\n\r\n1:00pm - Lunch Break\r\n\r\n2:00pm - Workshop 2\r\n\r\n4:00pm - Fun mini-event\r\n\r\n6:00pm - Dinner Break\r\n\r\n8:00pm - Hacking ends & demos Start\r\n\r\n9:00pm - Awards & event ends', './assests/images/events/logo_LHD.png', './assests/images/events/LHD_1.jpg', './assests/images/events/LHD_2.jpg', './assests/images/events/LHD_3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `mc_users`
--

CREATE TABLE `mc_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `mat` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` decimal(10,0) UNSIGNED NOT NULL,
  `study` varchar(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `spec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `motif` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `motif_1` varchar(1024) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `mc_users`
--

INSERT INTO `mc_users` (`id`, `mat`, `name`, `surname`, `email`, `phone`, `study`, `spec`, `faculty`, `motif`, `motif_1`, `password`, `code`) VALUES
(1, '1234556789', 'name', 'surname', 'email@email.com', '123456789', 'L1', 'spec', 'Mathematiques', '.', '.', '.', ''),
(2, '0234546789', 'name', 'surname', 'email1@email.com', '123456789', 'L2', 'spec', 'Sciences Biologiques', '.', '.', '.', ''),
(3, '0134556789', 'name', 'surname', 'email2@email.com', '123456789', 'L3', 'spec', 'Genie Mecanique et Genie des Procedes', '.', '.', '.', ''),
(4, '0124456789', 'name', 'surname', 'email3@email.com', '123456789', 'M1', 'spec', 'Sciences de la terre et de Geographie', '.', '.', '.', ''),
(5, '0123556789', 'name', 'surname', 'email4@email.com', '123456789', 'M2', 'spec', 'Physique', '.', '.', '.', ''),
(6, '0123567789', 'name', 'surname', 'email5@email.com', '123456789', 'FF', 'spec', 'Chimie', '.', '.', '.', ''),
(7, '0142346789', 'name', 'surname', 'email6@email.com', '123456789', 'FF', 'spec', 'Informatique', '.', '.', '.', ''),
(8, '0123345789', 'name', 'surname', 'email7@email.com', '123456789', 'FF', 'spec', 'Genie electrique', '.', '.', '.', ''),
(9, '0126345689', 'name', 'surname', 'email8@email.com', '123456789', 'FF', 'spec', 'Genie Civil', '.', '.', '.', '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`),
  ADD UNIQUE KEY `event_name` (`event_name`);

--
-- Index pour la table `mc_users`
--
ALTER TABLE `mc_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `mat` (`mat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `mc_users`
--
ALTER TABLE `mc_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
