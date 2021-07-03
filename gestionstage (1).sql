-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 03 juil. 2021 à 19:48
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestionstage`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateurs`
--

DROP TABLE IF EXISTS `administrateurs`;
CREATE TABLE IF NOT EXISTS `administrateurs` (
  `idadmin` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CIN` int(7) NOT NULL,
  `nomadmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomadmin` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idpost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numtel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'adminlogo.png',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idadmin`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `administrateurs`
--

INSERT INTO `administrateurs` (`idadmin`, `CIN`, `nomadmin`, `prenomadmin`, `idpost`, `numtel`, `photo`, `email`, `password`, `etat`, `created_at`, `updated_at`) VALUES
(1, 12822868, 'admin', 'administrateur', '1', '23822012', 'adminlogo.png', 'admin999999@gmail.com', 'XB6oEUGg', 'actif', NULL, '2021-06-03 13:40:22'),
(2, 100000, 'Jamel', 'grasa', '2', '23698541', 'adminlogo.png', 'mabroukiimen99@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'actif', NULL, '2021-06-09 09:01:05');

-- --------------------------------------------------------

--
-- Structure de la table `affectation`
--

DROP TABLE IF EXISTS `affectation`;
CREATE TABLE IF NOT EXISTS `affectation` (
  `idaff` int(11) NOT NULL AUTO_INCREMENT,
  `idprojet` int(11) NOT NULL,
  `idenseignant` int(11) NOT NULL,
  PRIMARY KEY (`idaff`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `affectation`
--

INSERT INTO `affectation` (`idaff`, `idprojet`, `idenseignant`) VALUES
(21, 2, 1),
(35, 4, 1),
(37, 3, 2);

-- --------------------------------------------------------

--
-- Structure de la table `departement`
--

DROP TABLE IF EXISTS `departement`;
CREATE TABLE IF NOT EXISTS `departement` (
  `iddepartement` int(11) NOT NULL AUTO_INCREMENT,
  `departement` varchar(100) NOT NULL,
  PRIMARY KEY (`iddepartement`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `departement`
--

INSERT INTO `departement` (`iddepartement`, `departement`) VALUES
(1, 'Metodhes Quantitatives et Technologies de l\'Information'),
(2, 'Sciences de Gestion'),
(3, 'Sciences Economiques et Commerce International'),
(4, 'Finance et Comptabilité'),
(5, 'Anglais des affaires');

-- --------------------------------------------------------

--
-- Structure de la table `encadrantentreprises`
--

DROP TABLE IF EXISTS `encadrantentreprises`;
CREATE TABLE IF NOT EXISTS `encadrantentreprises` (
  `idencad` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomEncad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomEncad` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `identreprise` int(191) NOT NULL,
  `numtel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idencad`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `encadrantentreprises`
--

INSERT INTO `encadrantentreprises` (`idencad`, `nomEncad`, `prenomEncad`, `identreprise`, `numtel`, `photo`, `email`, `password`, `etat`, `created_at`, `updated_at`) VALUES
(5, 'jamel', 'encadrantE', 1, '23658974', 'logoH.png', 'jamel@gmail.com', '08a4415e9d594ff960030b921d42b91e', 'active', '2021-05-28 12:39:19', '2021-05-28 12:39:19'),
(6, 'poiu', 'tyuiop', 1, '98484221', 'logoF.png', 'nnn@gmail.com', '$2y$10$qCTMl63okWLwdFpCpo3bJujbnBJ9LxDtjXWfXQRCBc1RNFcyNoy8e', 'active', '2021-05-28 12:44:43', '2021-05-28 12:44:43');

-- --------------------------------------------------------

--
-- Structure de la table `enseignants`
--

DROP TABLE IF EXISTS `enseignants`;
CREATE TABLE IF NOT EXISTS `enseignants` (
  `idenseignant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `numCNSS` int(12) DEFAULT NULL,
  `nomenseignant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenomenseignant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grade` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `iddepartement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numtel` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `encadre` int(11) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idenseignant`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `enseignants`
--

INSERT INTO `enseignants` (`idenseignant`, `numCNSS`, `nomenseignant`, `prenomenseignant`, `grade`, `iddepartement`, `numtel`, `photo`, `email`, `password`, `etat`, `encadre`, `created_at`, `updated_at`) VALUES
(1, 125896333, 'soulefff', 'khalfallah', 'chercheur', '1', '98745236', 'adminlogo.png', 'mabroukiwijden2018@gmail.com', '3adfd5f0ff08fea9e2cd0f5c59fec0a4', 'désactiver', 1, '2021-05-08 19:35:03', '2021-07-03 17:37:40'),
(2, 12825874, 'sonia', 'ghanouchi', 'proffeseur', '1', '25369741', 'adminlogo.png', 'soulef@gmail.com', '4a7d1ed414474e4033ac29ccb8653d9b', 'active', 1, '2021-05-12 14:04:35', '2021-05-12 14:06:00'),
(3, 12589633, 'amir', 'farah', 'professeur', '1', '25698741', 'logoH.png', 'amir.farah@gmail.com', '0000', 'active', 1, NULL, NULL),
(4, 12589600, 'anis', 'ben Salem', 'professeur', '2', '21258741', 'logoH.png', 'anis.bensalem@gmail.com', '0000', 'active', 1, NULL, NULL),
(6, 1478523698, 'mohmed', 'mohamed2', 'prof', '1', '26369874', 'logoadmin.png', 'prof2@gmail.com', '1478523698', 'active', 0, '2021-06-12 11:34:59', '2021-06-12 11:34:59'),
(5, 1234567896, 'ali', 'ali2', 'prof', '1', '25698741', 'logoadmin.png', 'prof1@gmail.com', '1234567896', 'active', 0, '2021-06-12 11:34:59', '2021-06-12 11:34:59');

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `identreprise` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `raisonsocial` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localisation` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`identreprise`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`identreprise`, `raisonsocial`, `activite`, `localisation`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'EPI d\'OR', 'Usine', 'Avenue Habib Mellouli Sousse', 'epidor.png', NULL, NULL),
(2, 'warda Bidha', 'Usineeee', 'sousse', 'epidor.png', '2021-06-02 09:45:42', '2021-06-02 09:45:42'),
(3, 'institut supérieur de gestion', 'institut universitaire', 'souk lahad sousse', 'logo1.png', '2021-06-02 09:47:00', '2021-06-02 09:47:00');

-- --------------------------------------------------------

--
-- Structure de la table `etudiants`
--

DROP TABLE IF EXISTS `etudiants`;
CREATE TABLE IF NOT EXISTS `etudiants` (
  `idetudiant` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CIN` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numinscrit` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nometudiant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenometudiant` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idfiliere` int(191) NOT NULL,
  `niveau` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'télé.png',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`idetudiant`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `etudiants`
--

INSERT INTO `etudiants` (`idetudiant`, `CIN`, `numinscrit`, `nometudiant`, `prenometudiant`, `idfiliere`, `niveau`, `photo`, `email`, `password`, `etat`, `created_at`, `updated_at`) VALUES
(1, '12822868', '125899', 'wijdennn', 'mabrouki', 2, '2ème Licence', 'wijden.png', 'mabroukiwijden@gmail.com', 'e1671797c52e15f763380b45e841ec32', 'active', NULL, '2021-07-03 17:37:20'),
(13, '12822869', '128854', 'imen', 'mabrouki', 3, '1ème Licence', 'adminlogo.png', 'admin2@gmail.com', '0000', 'active', '2021-05-12 14:37:34', '2021-05-12 14:37:34'),
(14, '12822869', '128854', 'mohamed', 'amin', 3, '2ème Licence', 'adminlogo.png', 'ttt@gmail.com', '0000', 'active', '2021-05-12 14:39:57', '2021-05-12 14:39:57'),
(2, '12015569', '125899', 'Hamemi', 'Nada', 4, '2ème Licence', 'télé.png', 'nada@gmail.com', '0000', 'active', NULL, NULL),
(3, '12015500', '125800', 'Toumi', 'Adelhamid', 4, '2ème Licence', 'télé.png', 'ABtoumi@gmail.com', '0000', 'active', NULL, NULL),
(4, '12589746', '718599', 'mefteh', 'rania', 1, '3ème Licence', 'télé.png', 'rania@gmail.com', '0000', 'avtive', NULL, NULL),
(5, '15889746', '228599', 'Lotfi', 'Ameni', 1, '3ème Licence', 'télé.png', 'ameni@gmail.com', '0000', 'avtive', NULL, NULL),
(6, '17896522', '589963', 'Salhi', 'Aycha', 2, '3ème Licence', 'télé.png', 'aychouch@gmail.com', '0000', 'active', NULL, NULL),
(7, '15986355', '785412', 'Mrakben', 'Hassen', 2, '3ème Licence', 'télé.png', 'hassen@gmail.com', '0000', 'active', NULL, NULL),
(8, '17896000', '589000', 'Mekrazi', 'Marwen', 3, '3ème Licence', 'télé.png', 'mekrazi.marwen@gmail.com', '0000', 'active', NULL, NULL),
(9, '15986111', '785111', 'Njeh', 'Wissal', 3, '3ème Licence', 'télé.png', 'WissalNjeh@gmail.com', '0000', 'active', NULL, NULL),
(15, '2589647', '236588', 'ali', 'aliii', 4, 'Master', 'télé.png', 'aliali@gmail.com', '0000', 'active', NULL, NULL),
(16, '2500000', '236500', 'mohamed', 'aliii', 4, 'Master', 'télé.png', 'alimohamed@gmail.com', '0000', 'active', NULL, NULL),
(10, '12822877', '125808', 'amine', 'chrif', 1, NULL, 'logo.png', 'aminamin@gmail.com', '125808', '1', '2021-06-11 09:42:05', '2021-06-11 09:42:05'),
(11, '12822888', '125809', 'kamel', 'walid', 1, NULL, 'logo.png', 'kamel.walid@gamail.com', '125809', '1', '2021-06-11 09:42:05', '2021-06-11 09:42:05'),
(12, '12822899', '125811', 'marwa', 'ben mabrouk', 1, NULL, 'logo.png', 'marwa99@gmail.com', '125811', '1', '2021-06-11 09:42:05', '2021-06-11 09:42:05');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `filiere`
--

DROP TABLE IF EXISTS `filiere`;
CREATE TABLE IF NOT EXISTS `filiere` (
  `idfiliere` int(11) NOT NULL AUTO_INCREMENT,
  `filiere` varchar(200) NOT NULL,
  PRIMARY KEY (`idfiliere`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `filiere`
--

INSERT INTO `filiere` (`idfiliere`, `filiere`) VALUES
(1, 'informatique de gestion'),
(2, 'Economie'),
(3, 'gestion'),
(4, 'marketing');

-- --------------------------------------------------------

--
-- Structure de la table `messagerie`
--

DROP TABLE IF EXISTS `messagerie`;
CREATE TABLE IF NOT EXISTS `messagerie` (
  `idmessage` int(11) NOT NULL AUTO_INCREMENT,
  `MailDest` varchar(100) NOT NULL,
  `MailExp` varchar(100) NOT NULL,
  `objet` varchar(200) NOT NULL,
  `message` varchar(6000) NOT NULL,
  `date` varchar(100) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`idmessage`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `messagerie`
--

INSERT INTO `messagerie` (`idmessage`, `MailDest`, `MailExp`, `objet`, `message`, `date`, `etat`) VALUES
(2, 'mabroukiimen99@gmail.com', 'mabroukiwijden@gmail.com', 'confirmation', 'bonjour  wijden mabrouki imen mabrouki ahla cv wnk lbs ena cv hmdl w enty ch3aml cv l9raya cv enty cv enty', '2021-06-04 15:51:14', 0),
(10, 'soulef@gmail.com', 'mabroukiimen99@gmail.com', 'aaa', 'bonjour', '2021-06-08 18:41:17', 1),
(11, 'soulef@gmail.com', 'mabroukiimen99@gmail.com', 'aaa', 'urgence', '2021-06-09 10:20:16', 1),
(3, 'mabroukiwijden@gmail.com', 'mabroukiimen99@gmail.com', 'cc', '3asslema', '05/06/2021 20:28', 1),
(5, 'mabroukiimen99@gmail.com', 'mabroukiimen@gmail.com', 'cc', 'ahla wnk cv', '2021-06-05 20:14:04', 0),
(9, 'soulef@gmail.com', 'mabroukiimen99@gmail.com', 'urgence', 'aze ert yui opm lkjjh gfds qwxc vvb', '2021-06-07 20:22:23', 1),
(8, 'soulef@gmail.com', 'mabroukiimen99@gmail.com', 'aaa', 'aaa', '2021-06-05 20:34:56', 1);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_04_21_143929_create_administrateurs_table', 1),
(5, '2021_04_21_151655_create_etudiants_table', 2),
(6, '2021_04_21_154256_create_encadrententreprises_table', 3),
(7, '2021_04_21_155904_create_encadrantentreprises_table', 4),
(8, '2021_04_21_160725_create_enseignants_table', 5),
(9, '2014_10_12_200000_add_two_factor_columns_to_users_table', 6),
(10, '2019_12_14_000001_create_personal_access_tokens_table', 6),
(11, '2021_04_29_012237_create_sessions_table', 6),
(12, '2021_05_06_141420_entreprise', 7),
(13, '2021_05_06_143757_create_entreprises_table', 8),
(14, '2021_05_10_115051_create_etudiants_table', 9);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `idpost` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(100) NOT NULL,
  PRIMARY KEY (`idpost`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`idpost`, `post`) VALUES
(1, 'Secrétaire général'),
(2, 'Directeur du stages'),
(3, 'Bureau');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `idprojet` int(11) NOT NULL AUTO_INCREMENT,
  `sujet` varchar(200) NOT NULL,
  `idetudiant1` int(11) NOT NULL,
  `idetudiant2` int(11) NOT NULL,
  `idencad` int(11) DEFAULT NULL,
  `anneeUni` varchar(100) NOT NULL,
  `etat` int(11) NOT NULL,
  PRIMARY KEY (`idprojet`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`idprojet`, `sujet`, `idetudiant1`, `idetudiant2`, `idencad`, `anneeUni`, `etat`) VALUES
(1, 'sujet 1', 1, 10, NULL, '2020/2021', 0),
(2, 'sujet 2', 11, 12, NULL, '2020/2021', 0),
(3, 'sujet 3', 13, 14, 1, '2020/2021', 0),
(4, 'sujet4', 2, 3, NULL, '2020/2021', 1),
(5, 'sujet 5', 4, 5, NULL, '2020/2021', 0),
(6, 'sujet 6', 6, 7, NULL, '2020/2021', 0),
(7, 'sujet 7', 8, 9, NULL, '2020/2021', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kCJzFFY0UzTvC3H0U2cynm8zZP1RsSMv8CtymV2I', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.93 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTmhPakg5WFhZR0NTRmRSVVhvaXNrNWlnT1R2eWdxMzAyVnJaWlBLWCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkaExPTGMyWnROalpuekZIbjA5N2h5ZTlMalpPZ2c3eFJMc0FZSmRKL2JsSWdBNEh5TlRiamUiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJGhMT0xjMlp0TmpabnpGSG4wOTdoeWU5TGpaT2dnN3hSTHNBWUpkSi9ibElnQTRIeU5UYmplIjt9', 1619660419);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'wijden', 'mabroukiwijden2018@gmail.com', NULL, '$2y$10$hLOLc2ZtNjZnzFHn097hye9LjZOgg7xRLsAYJdJ/blIgA4HyNTbje', NULL, NULL, NULL, '2021-04-29 00:39:13', '2021-04-29 00:39:13');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
