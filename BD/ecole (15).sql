-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 juil. 2024 à 20:42
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
-- Structure de la table `announcements`
--

CREATE TABLE `announcements` (
  `AnnouncementID` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `announcements`
--

INSERT INTO `announcements` (`AnnouncementID`, `Date`, `Title`, `Status`, `Description`) VALUES
(2, '2024-05-15', 'Unlocking Potential: The ISET Kelibia Advantage', '.', 'Explore how ISET Kelibia empowers students to unlock their full potential through innovative education and industry-focused programs.'),
(5, '2024-05-26', 'Shaping Tomorrow\'s Innovators: The ISET Kelibia Experience', '.', 'Discover how ISET Kelibia provides a unique educational experience that nurtures creativity, critical thinking, and innovation among its students.'),
(6, '2024-06-01', 'Leading the Way: ISET Kelibia\'s Role in Industry-Relevant Education', '.', 'Learn how ISET Kelibia is leading the way in providing education that is closely aligned with industry needs, ensuring graduates are well-prepared for the workforce.'),
(7, '2024-06-09', 'Building Futures: The Impact of ISET Kelibia on Student Success', '.', 'Explore the success stories of ISET Kelibia graduates and how the institution has played a pivotal role in shaping their futures and career paths.');

-- --------------------------------------------------------

--
-- Structure de la table `club`
--

CREATE TABLE `club` (
  `club_id` int(11) NOT NULL,
  `club_name` varchar(255) DEFAULT NULL,
  `club_description` text DEFAULT NULL,
  `club_founded_date` date DEFAULT NULL,
  `club_president` varchar(100) DEFAULT NULL,
  `club_location` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `club`
--

INSERT INTO `club` (`club_id`, `club_name`, `club_description`, `club_founded_date`, `club_president`, `club_location`) VALUES
(1, 'sisi', 'x\r\nWe use jQuery’s slim build, but the full version is also supported.', '2024-04-16', '5', 'dc1'),
(6, 'Club Informatique', 'Ce club vise à promouvoir la culture informatique à travers des ateliers, des conférences et des compétitions.', '2017-09-20', 'Ahmed Ben Amor', 'Tunis'),
(7, 'Club de Robotique', 'Ce club passionnant offre aux étudiants la possibilité de concevoir, construire et programmer des robots pour divers projets et compétitions.', '2019-02-10', 'Fatma Khaldi', 'Sousse'),
(8, 'Club Environnement', 'Ce club sensibilise les étudiants aux problématiques environnementales et organise des actions concrètes telles que des campagnes de nettoyage et des plantations d\'arbres.', '2018-04-05', 'Khalil Mabrouk', 'Nabeul');

-- --------------------------------------------------------

--
-- Structure de la table `clubmembre`
--

CREATE TABLE `clubmembre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `carte_etudiant` decimal(8,0) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL,
  `club_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `clubmembre`
--

INSERT INTO `clubmembre` (`id`, `nom`, `prenom`, `carte_etudiant`, `classe`, `club_id`) VALUES
(3, 'hadil', 'didi', 56325980, 'dsi21', 7);

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

CREATE TABLE `commentaires` (
  `id` int(11) NOT NULL,
  `id_ecriture` int(11) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `id_ecriture`, `contenu`) VALUES
(1, 53, 'hi'),
(2, 53, 'xxxxxxxxxxx'),
(3, 0, 'zzzzzzzzz'),
(4, 0, 'vvvvvvvvv'),
(5, 53, 'xxxxxxxxxxxx'),
(6, 53, 'bfezhvjh&quot;bj');

-- --------------------------------------------------------

--
-- Structure de la table `corrections`
--

CREATE TABLE `corrections` (
  `ID` int(11) NOT NULL,
  `ProfesseurID` int(11) DEFAULT NULL,
  `MatiereID` varchar(200) DEFAULT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `DatePublication` date DEFAULT NULL,
  `Fichier` varchar(255) DEFAULT NULL,
  `TP_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `corrections`
--

INSERT INTO `corrections` (`ID`, `ProfesseurID`, `MatiereID`, `Titre`, `Description`, `DatePublication`, `Fichier`, `TP_ID`) VALUES
(10, 54, 'ftyuhgfh', 'hi', 'x', '2024-05-17', 'uploads/TP7BD[1].docx', 4);

-- --------------------------------------------------------

--
-- Structure de la table `cour`
--

CREATE TABLE `cour` (
  `ID` int(11) NOT NULL,
  `ProfesseurID` int(11) DEFAULT NULL,
  `MatiereID` varchar(200) DEFAULT NULL,
  `Titre` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `DatePublication` date DEFAULT NULL,
  `Fichier` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cour`
--

INSERT INTO `cour` (`ID`, `ProfesseurID`, `MatiereID`, `Titre`, `Description`, `DatePublication`, `Fichier`) VALUES
(11, 54, 'azertyui', 'a faire200', 'c', '2024-05-04', 'uploads/lab.2.5.2.5.pdf'),
(14, 54, 'azertyui', 'bn,nbn,nh', 'j', '2024-05-22', 'uploads/10.PNG'),
(15, 54, 'ftyuhgff', 'bn,nbn,nh', 'j', '2024-05-22', 'uploads/10.PNG'),
(17, 54, 'ftyuhgff', 'j', 'd', '2024-05-12', 'uploads/hi10.PNG'),
(18, 54, 'ftyuhgfh', 'cc', 'cccc', '2024-05-10', 'uploads/hi12.PNG'),
(19, 54, 'ftyuhgfh', '0', '*****', '2024-05-11', 'uploads/TP7BD[1].docx');

-- --------------------------------------------------------

--
-- Structure de la table `cours`
--

CREATE TABLE `cours` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `code` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `cours`
--

INSERT INTO `cours` (`id`, `titre`, `contenu`, `code`) VALUES
(1, 'didi', 'didi1', 'hadil'),
(2, 'fatiiii', 'fata', '12345');

-- --------------------------------------------------------

--
-- Structure de la table `couruser`
--

CREATE TABLE `couruser` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `NomProfesseur` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `couruser`
--

INSERT INTO `couruser` (`id`, `code`, `user_id`, `subject`, `NomProfesseur`) VALUES
(3, 'azertyui', 53, 'php', 'fatma ben rjab'),
(4, 'drezsder', 53, 'sgbd', 'tayssir chabeen'),
(5, 'fdsertyg', 53, 'angular', 'hela hilal'),
(6, 'dfrtygrt', 53, 'html', 'ahmed aissa'),
(7, 'ftyuhgfh', 53, 'symfony', 'hadil ben doudou'),
(8, 'azertyui', 58, 'php', 'hadil ben doudou'),
(9, 'hiolpmkf', 58, 'html', '12345678'),
(10, 'azertyui', 59, 'php', 'hadil ben doudou');

-- --------------------------------------------------------

--
-- Structure de la table `emplois_etudiant`
--

CREATE TABLE `emplois_etudiant` (
  `ID` int(11) NOT NULL,
  `Description` text DEFAULT NULL,
  `Classe` varchar(50) DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `emplois_etudiant`
--

INSERT INTO `emplois_etudiant` (`ID`, `Description`, `Classe`, `image_file`) VALUES
(1, 'emploi', 'dsi21', 'emploi/agenda (1).webp');

-- --------------------------------------------------------

--
-- Structure de la table `emplois_professeur`
--

CREATE TABLE `emplois_professeur` (
  `ID` int(11) NOT NULL,
  `Description` text DEFAULT NULL,
  `Nom_professeur` int(100) DEFAULT NULL,
  `Classe` varchar(50) DEFAULT NULL,
  `Image_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `emplois_professeur`
--

INSERT INTO `emplois_professeur` (`ID`, `Description`, `Nom_professeur`, `Classe`, `Image_file`) VALUES
(1, 'emploi', 52698456, 'dsi21', 'emploi/rapport_emploi_du_temps_enseignant_tableau.png'),
(3, 'voila emploi', 52698456, 'dsi21', 'emploi/rapport_emploi_du_temps_enseignant_tableau.png'),
(4, 'emploi\r\n', 52698456, 'dsi21', 'emploi/rapport_emploi_du_temps_enseignant_tableau.png'),
(5, 'emploi', 12345678, 'dsi21', 'emploi/rapport_emploi_du_temps_enseignant_tableau.png'),
(7, 'hvbhj00', 58968745, 'dsi21', 'emploi/hadilbendoudou.docx');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `carte_etudiant` decimal(8,0) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `carte_etudiant`, `classe`) VALUES
(5, 'hadil', 'didi', 56325980, 'dsi21'),
(6, 'ben doudou', 'hadil', 56325985, 'dsi21'),
(10, 'emna', 'ff', 85965478, 'dsi21'),
(11, 'csdq5', 'dsvc', 12345678, 'dsi21'),
(100, 'vv', 'vv', 58987458, 'dsi22'),
(112, ' cd d ', ' f d', 56325987, 'dsi21'),
(113, 'ecef', 'ce', 56325988, 'dsi21'),
(114, 'qwaaaaaaaaaaaaaaaaaaaaaa', 'wq', 12345620, 'dsi21');

-- --------------------------------------------------------

--
-- Structure de la table `eventmembre`
--

CREATE TABLE `eventmembre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `carte_etudiant` decimal(8,0) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `eventmembre`
--

INSERT INTO `eventmembre` (`id`, `nom`, `prenom`, `carte_etudiant`, `classe`, `event_id`) VALUES
(1, 'hadil', 'didi', 56325980, 'dsi21', 19),
(6, 'hadil', 'didi', 56325980, 'dsi21', 18),
(7, 'hadil', 'didi', 56325980, 'dsi21', 20),
(8, 'qwaaaaaaaaaaaaaaaaaaaaaa', 'wq', 98765432, 'dsi21', 18);

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `date` date NOT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `localisation` varchar(255) DEFAULT NULL,
  `detailed_description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `event_name`, `description`, `date`, `image_url`, `localisation`, `detailed_description`) VALUES
(18, 'Conférence sur les dernières avancées en génie informatique', 'Une conférence présentant les dernières avancées et tendances en matière de génie informatique, y compris l\'intelligence artificielle, le cloud computing et la cybersécurité.', '2024-06-15', 'uploads/md-duran-rE9vgD_TXgM-unsplash.jpg', 'Tunis', 'Cette conférence réunira des experts du secteur pour discuter des défis et des opportunités dans le domaine du génie informatique.'),
(19, 'Hackathon de développement logiciel', 'Un événement de programmation intensif où les équipes développent des solutions logicielles innovantes sur une période de plusieurs jours.', '2024-07-20', 'uploads/jakob-dalbjorn-cuKJre3nyYc-unsplash.jpg', 'Sousse', 'Les participants auront l\'occasion de mettre en pratique leurs compétences en programmation et de collaborer avec d\'autres passionnés de technologie.'),
(20, 'Atelier sur les technologies de l', 'Un atelier pratique explorant les applications et les défis des technologies de l\'Internet des objets, y compris la conception de capteurs, la connectivité sans fil et l\'analyse des données.', '2024-08-10', 'uploads/headway-F2KRf_QfCqw-unsplash.jpg', 'Sfax', 'Cet atelier fournira aux participants une introduction pratique à la conception et au déploiement d\'applications IoT.'),
(21, 'Séminaire sur la robotique et l', 'Un séminaire mettant en lumière les avancées récentes en matière de robotique et d\'automatisation dans divers domaines, tels que la fabrication, la santé et l\'agriculture.', '2024-09-05', 'uploads/teemu-paananen-bzdhc5b3Bxs-unsplash.jpg', 'Bizerte', 'Les intervenants partageront leurs expériences et leurs perspectives sur l\'avenir de la robotique et de l\'automatisation.'),
(22, 'Forum de carrière en génie électrique', 'Un événement de réseautage professionnel où les étudiants auront l\'opportunité de rencontrer des professionnels du secteur de l\'ingénierie électrique et de découvrir les opportunités de carrière disponibles.', '2024-10-15', 'uploads/john-schnobrich-FlPc9_VocJ4-unsplash.jpg', 'Tunis', 'Ce forum permettra aux étudiants d\'établir des contacts avec des entreprises et d\'explorer différentes voies professionnelles dans le domaine du génie électrique.');

-- --------------------------------------------------------

--
-- Structure de la table `formationmembre`
--

CREATE TABLE `formationmembre` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `carte_etudiant` decimal(8,0) DEFAULT NULL,
  `classe` varchar(50) DEFAULT NULL,
  `formation_id` int(11) DEFAULT NULL,
  `formateur_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formationmembre`
--

INSERT INTO `formationmembre` (`id`, `nom`, `prenom`, `carte_etudiant`, `classe`, `formation_id`, `formateur_id`) VALUES
(2, 'hadil', 'didi', 56325980, 'dsi21', 7, 3);

-- --------------------------------------------------------

--
-- Structure de la table `formations`
--

CREATE TABLE `formations` (
  `formation_id` int(11) NOT NULL,
  `nom_formation` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `date_debut` date DEFAULT NULL,
  `date_fin` date DEFAULT NULL,
  `responsable_formation` varchar(255) DEFAULT NULL,
  `lieu_formation` varchar(255) DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `formations`
--

INSERT INTO `formations` (`formation_id`, `nom_formation`, `description`, `date_debut`, `date_fin`, `responsable_formation`, `lieu_formation`, `image_file`) VALUES
(4, 'formation francais', 'apprendre francais', '2024-04-13', '2024-04-26', '1', 'kelibia', 'uploads/663c10893ba4d_jason-goodman-Oalh2MojUuk-unsplash.jpg'),
(7, 'Formation en Développement Web', 'Cette formation couvre les principaux langages et technologies du web, y compris HTML, CSS, JavaScript, et les frameworks populaires comme React et Vue.js.', '2024-06-01', '2024-12-31', '3', 'Tunis', 'uploads/663c1045565d0_campaign-creators-gMsnXqILjp4-unsplash.jpg'),
(8, 'Formation en Gestion de Projet', 'Apprenez les fondamentaux de la gestion de projet, y compris la planification, l\'exécution, le contrôle et la clôture, ainsi que l\'utilisation d\'outils et de méthodologies populaires.', '2024-07-15', '2024-11-30', '1', 'Sfax', 'uploads/663c105e47af8_jason-goodman-bzqU01v-G54-unsplash.jpg'),
(9, 'Formation en Intelligence Artificielle', 'Explorez les concepts de base et les applications pratiques de l\'intelligence artificielle, y compris l\'apprentissage automatique, la vision par ordinateur et le traitement du langage naturel.', '2024-08-10', '2024-10-20', '3', 'Sousse', 'uploads/663c10766d479_austin-distel-rxpThOwuVgE-unsplash.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `nouveauxpwd`
--

CREATE TABLE `nouveauxpwd` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_modified_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `nouveauxpwd`
--

INSERT INTO `nouveauxpwd` (`id`, `email`, `login`, `password`, `last_modified_date`) VALUES
(0, 'bendoudouhadil@gmail.com', 'hadil', '512ebfb4efe96570def898070c015c66', '2024-03-03 12:12:52'),
(0, 'bendoudouhadil@gmail.com', 'hadil', '98e1787040c46059853a5d7de381ffc9', '2024-03-09 00:12:23'),
(0, 'bendoudouhadil@gmail.com', 'hadil', '25859e29a2ae8f4ff04ef80c1333a271', '2024-03-09 00:13:19'),
(0, 'bendoudouhadil@gmail.com', 'hadil', '2e564a552ce1109d245292bc02e64968', '2024-03-14 08:37:53');

-- --------------------------------------------------------

--
-- Structure de la table `professeur`
--

CREATE TABLE `professeur` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `carte_professeur` int(8) UNSIGNED NOT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `qualification` varchar(100) DEFAULT NULL,
  `experience` varchar(100) DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `professeur`
--

INSERT INTO `professeur` (`id`, `nom`, `prenom`, `email`, `carte_professeur`, `image_path`, `qualification`, `experience`, `description`) VALUES
(1, 'hadil', 'bendoudou', 'bendoudou@gmail.com', 52698456, 'uploads/teacher-2.png', 'doctor', '10ans', 'Enseignant dynamique avec une expertise dans le domaine de l\'\'électrotechnique.'),
(3, 'tayssir', 'chabeen', 'bendddddddoudou@gmail.com', 12345678, 'uploads/teacher-3.png', 'doctor', '15ans', 'Passionnée par l\'\'enseignement de la programmation et des technologies web.'),
(7, 'fadi', 'ben rjab', 'fadi@gmail.com', 58968745, 'uploads/teacher-1.png', 'Ingénieur ', '17ans', 'Spécialiste en modélisation mathématique et optimisation.'),
(14, 'ahmed', 'aissa', 'ahmed@gmail.com', 56987589, 'uploads/teacher-4.png', 'Doctorat en Informatique, Université de Tunis', '20ans', 'Ahmed Khaled est un professeur expérimenté en informatique, avec une expertise approfondie dans les '),
(23, 'knk', 'vfsev', 'bdvvcendoudou@gmail.com', 45896589, 'uploads/teacher-3.png', 'v', 'v', 'v');

-- --------------------------------------------------------

--
-- Structure de la table `tablematiere`
--

CREATE TABLE `tablematiere` (
  `ID` int(11) NOT NULL,
  `NomMatiere` varchar(255) NOT NULL,
  `NomProfesseur` varchar(255) NOT NULL,
  `CodeMatiere` varchar(8) NOT NULL,
  `ProfesseurID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tablematiere`
--

INSERT INTO `tablematiere` (`ID`, `NomMatiere`, `NomProfesseur`, `CodeMatiere`, `ProfesseurID`) VALUES
(1, 'php', 'hadil ben doudou', 'azertyui', NULL),
(2, 'php', '12345678', 'huioplkj', NULL),
(4, 'html', '12345678', 'hiolpmkf', NULL),
(5, 'zz', '12345678', 'jolpmloi', NULL),
(6, 'html', 'ghassen', 'gyuikpl', NULL),
(12, 'html', '', 'hyuiolku', 3),
(13, 'zz', 'didi55', 'drezsder', 0),
(14, 'zz', 'didi55', 'rtyiug', 0),
(15, 'zz2', 'didi55', 'rtydfgtf', 0),
(16, 'ff', 'ghassen', 'fdsertyg', 0),
(17, 'php', 'didi', 'dfrtyuhb', 0),
(18, 'html2', 'didi', 'sdefcws', 3),
(19, 'html4', 'didi', 'dfrtygrt', 3),
(20, 'html5', 'didi', 'sdrtygfd', 3),
(21, 'html5', 'didi2', 'sertfdsx', 1),
(22, 'html6', 'didi2', 'sdrtgfgy', 1),
(23, 'hahah', 'f', 'gtyuiolj', 52698456),
(25, 'hahah', 'f', 'hyiokij', 52698456),
(34, 'fd1252', 'vcds', 'csqqz', 52698456),
(35, 'php', 'hadil ben doudou', 'sdrtyui', 12345670),
(37, 'htmlll', 'hadil ben doudou', 'ftyuhgfh', 12345678),
(39, 'php', 'hadil ben doudou', 'dsqcd', 12345678);

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
(4, 54, 'ftyuhgfh', 'dd555', 'ddd', '2024-05-19', 'uploads/hi11.PNG'),
(5, 54, 'hahaha', 'free', 'ffifi', '2024-05-31', 'uploads/hi11.PNG'),
(6, 54, 'azertyui', 'HAHIA', 'JBZJBZ', '2024-05-23', 'uploads/hi11.PNG'),
(7, 54, 'azertyui', '5', '6666', '2024-05-26', 'uploads/recette.pdf');

-- --------------------------------------------------------

--
-- Structure de la table `travaux`
--

CREATE TABLE `travaux` (
  `travail_id` int(11) NOT NULL,
  `tp_id` int(11) DEFAULT NULL,
  `image_file` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `travaux`
--

INSERT INTO `travaux` (`travail_id`, `tp_id`, `image_file`) VALUES
(1, NULL, 'uploads/test (1).docx'),
(2, NULL, 'uploads/téléchargement (15).png'),
(3, 6, 'uploads/téléchargement (15).png'),
(4, 6, 'uploads/téléchargement (15).png'),
(7, 6, 'uploads/test (1).docx');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `iduser` int(4) NOT NULL,
  `login` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `role` varchar(50) DEFAULT NULL,
  `etat` int(1) DEFAULT NULL,
  `pwd` varchar(255) DEFAULT NULL,
  `rapport` varchar(100) DEFAULT NULL,
  `carte_etudiant` int(8) UNSIGNED DEFAULT NULL,
  `carte_professeur` int(8) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`iduser`, `login`, `email`, `role`, `etat`, `pwd`, `rapport`, `carte_etudiant`, `carte_professeur`) VALUES
(27, 'ad', 'xxxx@gmail.com', 'VISITEUR', 0, '$2y$10$DPrEuwyCS3l0HvLxKZuYuevS1KPWBD7.oMotf0CqmhFKRMXf/ktDe', NULL, NULL, NULL),
(31, 'aaaa', 'fatmsssssabenrjab15@gmail.com', 'VISITEUR', 1, '$2y$10$g7y.s4jWNQCeP64vNc1Iwem.jFFX5dyduwyGHtg2ymGaTV0GJh9dK', NULL, 14856985, NULL),
(33, 'name', 'faghtmabenrjab15@gmail.com', 'VISITEUR', 1, '$2y$10$Bd50bLx69eafcPPCozVyVOAv9K/k28fdGZ2yDNAqfEIW3YGHduqeq', NULL, 25986358, NULL),
(41, 'soso', 'soso@gmail.com', 'VISITEUR', 1, 'd0717f47123f763c266ca3a759dcaf30', NULL, 89657415, NULL),
(42, 'gggg', 'gggg@gmail.com', 'VISITEUR', 0, 'c1ebb4933e06ce5617483f665e26627c', NULL, 45698756, NULL),
(43, 'zzzz', 'zzzz@gmail.com', 'VISITEUR', 0, '02c425157ecd32f259548b33402ff6d3', NULL, 58967845, NULL),
(45, 'wwww', 'wawhha@gmail.com', 'VISITEUR', 0, 'e34a8899ef6468b74f8a1048419ccc8b', NULL, 89687456, NULL),
(47, 'bbbb', 'bbb@gmail.com', 'VISITEUR', 1, '65ba841e01d6db7733e90a5b7f9e6f80', NULL, 85694523, NULL),
(51, 'dddd', 'emna.aissa2003@gmail.com', 'VISITEUR', 1, '11ddbaf3386aea1f2974eee984542152', NULL, 85965478, NULL),
(52, 'mmmm', 'fatmabenrjab15@gmail.com', 'VISITEUR', 1, '9de37a0627c25684fdd519ca84073e34', NULL, 48569522, NULL),
(53, 'HEDIL', 'bendoudouhadil@gmail.com', 'VISITEUR', 1, 'eb9279982226a42afdf2860dbdc29b45', NULL, 56325980, NULL),
(54, 'didi', 'fatmabddenrjab15@gmail.com', 'PROFESSEUR', 1, 'c19c8f9b6caad92726f88434d1493ad5', NULL, NULL, 12345678),
(55, 'admin', 'admin@gmail.com', 'ADMIN', 1, 'e00cf25ad42683b3df678c61f42c6bda', NULL, NULL, NULL),
(56, 'vvvv', 'vvv@gmail.com', 'VISITEUR', 1, 'd5a09d3562dc679b7b6407f6b6abf744', NULL, 58987458, NULL),
(57, 'abab', 'RDRDR6@gmail.com', 'VISITEUR', 1, '4db9ecbbab465901544abeff33baca4b', NULL, 4, NULL),
(58, 'hadilbendoudou', 'didi@gmail.com', 'VISITEUR', 1, '7b8cdea18f26fff19c27b1ed13fb0148', NULL, 98765432, NULL),
(59, 'zied', 'zied@gmail.com', 'VISITEUR', 1, '0a08622f8faa0333b97a2c9d4ee4c00c', NULL, 12345620, NULL);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`AnnouncementID`);

--
-- Index pour la table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Index pour la table `clubmembre`
--
ALTER TABLE `clubmembre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaires`
--
ALTER TABLE `commentaires`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `corrections`
--
ALTER TABLE `corrections`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `cour`
--
ALTER TABLE `cour`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `cours`
--
ALTER TABLE `cours`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `couruser`
--
ALTER TABLE `couruser`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `emplois_etudiant`
--
ALTER TABLE `emplois_etudiant`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `emplois_professeur`
--
ALTER TABLE `emplois_professeur`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carte_etudiant` (`carte_etudiant`);

--
-- Index pour la table `eventmembre`
--
ALTER TABLE `eventmembre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formationmembre`
--
ALTER TABLE `formationmembre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formations`
--
ALTER TABLE `formations`
  ADD PRIMARY KEY (`formation_id`);

--
-- Index pour la table `professeur`
--
ALTER TABLE `professeur`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `carte_professeur` (`carte_professeur`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `tablematiere`
--
ALTER TABLE `tablematiere`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `CodeMatiere` (`CodeMatiere`);

--
-- Index pour la table `tp`
--
ALTER TABLE `tp`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `travaux`
--
ALTER TABLE `travaux`
  ADD PRIMARY KEY (`travail_id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`iduser`),
  ADD UNIQUE KEY `carte_etudiant` (`carte_etudiant`),
  ADD UNIQUE KEY `carte_professeur` (`carte_professeur`),
  ADD UNIQUE KEY `carte_professeur_2` (`carte_professeur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `AnnouncementID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `club`
--
ALTER TABLE `club`
  MODIFY `club_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `clubmembre`
--
ALTER TABLE `clubmembre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `commentaires`
--
ALTER TABLE `commentaires`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `corrections`
--
ALTER TABLE `corrections`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `cour`
--
ALTER TABLE `cour`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `cours`
--
ALTER TABLE `cours`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `couruser`
--
ALTER TABLE `couruser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `emplois_etudiant`
--
ALTER TABLE `emplois_etudiant`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `emplois_professeur`
--
ALTER TABLE `emplois_professeur`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT pour la table `eventmembre`
--
ALTER TABLE `eventmembre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `formationmembre`
--
ALTER TABLE `formationmembre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `formations`
--
ALTER TABLE `formations`
  MODIFY `formation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `professeur`
--
ALTER TABLE `professeur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `tablematiere`
--
ALTER TABLE `tablematiere`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT pour la table `tp`
--
ALTER TABLE `tp`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `travaux`
--
ALTER TABLE `travaux`
  MODIFY `travail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `iduser` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
