-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 mai 2024 à 00:11
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ecole`
--

-- --------------------------------------------------------

--
-- Structure de la table `tp`
--

CREATE TABLE `tp` (
  `ID` int(11) NOT NULL,
  `ProfesseurID` int(11) DEFAULT NULL,
  `MatiereID` varchar(200) DEFAULT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `DatePublication` date DEFAULT NULL,
  `Fichier` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tp`
--

INSERT INTO `tp` (`ID`, `ProfesseurID`, `MatiereID`, `Titre`, `Description`, `DatePublication`, `Fichier`) VALUES
(0, 54, 'ftyuhgfh', 'symfony22', 'edf', '2024-05-26', 'uploads/recette.pdf'),
(0, 54, 'ftyuhgfh', 'symfony22', 'edf', '2024-05-26', 'uploads/recette.pdf'),
(0, 54, 'ftyuhgfh', 'symfony22', 'edf', '2024-05-26', 'uploads/recette.pdf');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
