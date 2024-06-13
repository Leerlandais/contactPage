-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 13 juin 2024 à 15:04
-- Version du serveur : 8.0.31
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `contact_page`
--
CREATE DATABASE IF NOT EXISTS `contact_page` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `contact_page`;

-- --------------------------------------------------------

--
-- Structure de la table `cp_text`
--

DROP TABLE IF EXISTS `cp_text`;
CREATE TABLE IF NOT EXISTS `cp_text` (
  `cp_text_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `cp_text_element` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cp_text_en` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cp_text_fr` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cp_text_type` varchar(8) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'id',
  PRIMARY KEY (`cp_text_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cp_text`
--

INSERT INTO `cp_text` (`cp_text_id`, `cp_text_element`, `cp_text_en`, `cp_text_fr`, `cp_text_type`) VALUES
(1, 'submitButton', 'Submit', 'Soumettre', 'class'),
(2, 'publicPageLogin', 'Login', 'Connexion', 'id'),
(3, 'testH', 'This is ok', 'Cela est bonne', 'id'),
(4, 'inpLabelSelect', 'Selector', 'Selecteur', 'class'),
(5, 'inpLabelID', 'ID', 'ID', 'class'),
(6, 'inpLabelClass', 'Class', 'Classe', 'class'),
(7, 'copyrightName', '<a href=\"https://leerlandais.com\">Lee Brennan</a>', '<a href=\"https://leerlandais.com\">Lee Brennan</a>', 'id'),
(8, 'footerScreenWidth', 'The screen width is', 'La largeur de l&#039;écran est', 'id'),
(9, 'navLogin', 'Login', 'Connexion', 'id'),
(10, 'welcomeVisitor', 'Welcome', 'Bienvenue', 'id');

-- --------------------------------------------------------

--
-- Structure de la table `cp_users`
--

DROP TABLE IF EXISTS `cp_users`;
CREATE TABLE IF NOT EXISTS `cp_users` (
  `cp_id` smallint UNSIGNED NOT NULL AUTO_INCREMENT,
  `cp_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cp_email` varchar(128) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cp_pwd` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cp_permission` tinyint UNSIGNED NOT NULL DEFAULT '1',
  `cp_lang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`cp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cp_users`
--

INSERT INTO `cp_users` (`cp_id`, `cp_username`, `cp_email`, `cp_pwd`, `cp_permission`, `cp_lang`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$2sn4jJ0LgUkGCQHNDfsEPOlybZlC20j.Lk3JCM7lfyAwwrizsEaem', 1, 'fr'),
(2, 'leerlandais', 'lee@leerlandais.com', '$2y$10$y0pLpP4tuXDuLaDakIpkdO17YjRqZ6U5UEHPEid9LHR60L7eYIFy.', 255, 'en'),
(18, 'test', 'a@a.com', '$2y$10$2ftKO95EQWaM9W6KNMytu.p43DGQlvjemA4D0oONEmZPPOxdDAMMu', 1, 'fr');

-- --------------------------------------------------------

--
-- Structure de la table `cp_visitors`
--

DROP TABLE IF EXISTS `cp_visitors`;
CREATE TABLE IF NOT EXISTS `cp_visitors` (
  `cp_visitor_id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `cp_visitor_code` varchar(8) COLLATE utf8mb4_general_ci NOT NULL,
  `cp_visitor_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `cp_visitor_current` int NOT NULL DEFAULT '0',
  `cp_visitor_new` int NOT NULL DEFAULT '0',
  `cp_visitor_lang` varchar(2) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'en',
  PRIMARY KEY (`cp_visitor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cp_visitors`
--

INSERT INTO `cp_visitors` (`cp_visitor_id`, `cp_visitor_code`, `cp_visitor_name`, `cp_visitor_current`, `cp_visitor_new`, `cp_visitor_lang`) VALUES
(1, '001', 'Erhan', 0, 0, 'fr'),
(2, '010', 'Lee', 0, 0, 'en');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
