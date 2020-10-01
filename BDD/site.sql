-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : jeu. 01 oct. 2020 à 08:55
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP : 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `id14993348_orangeadmin`
--

-- --------------------------------------------------------

--
-- Structure de la table `employé`
--

CREATE TABLE `employé` (
  `employé_ID` int(11) NOT NULL,
  `Nom` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `Prénom` varchar(80) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `employé`
--

INSERT INTO `employé` (`employé_ID`, `Nom`, `Prénom`) VALUES
(1, 'Balkany', 'Patrick'),
(2, 'Sardou', 'Michel'),
(3, 'Chatterton', 'Alisée'),
(4, 'Poli', 'Robin'),
(5, 'Baratheon', 'Robert');

-- --------------------------------------------------------

--
-- Structure de la table `fiche employé`
--

CREATE TABLE `fiche employé` (
  `employé_ID` int(100) NOT NULL,
  `prénom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(10) NOT NULL,
  `adresse` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `poste` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `service` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_de_naissance` date NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Numéro_sécurité_sociale` varchar(21) COLLATE utf8_unicode_ci NOT NULL,
  `contrat` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `salaire` int(10) NOT NULL,
  `dernier_salaire` int(10) NOT NULL,
  `prochain_salaire` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `fiche employé`
--

INSERT INTO `fiche employé` (`employé_ID`, `prénom`, `nom`, `age`, `adresse`, `poste`, `service`, `date_de_naissance`, `tel`, `email`, `Numéro_sécurité_sociale`, `contrat`, `salaire`, `dernier_salaire`, `prochain_salaire`) VALUES
(1, 'Patrick', 'Balkany', 41, '8 rue de la richesse, 92300, Levallois Perret, Ile de France, France', 'Comptable', 'Comptabilité', '1979-09-16', '0632493278', 'patbalka@levallois.fr', '1 78 14 65 984 257 84', 'CDI', 18000, 18000, 18000),
(2, 'Michel', 'Sardou', 60, '23 avenue des coquelicots fleuris, 75009, Paris, Ile de France, France', 'DRH', 'Ressources Humaines', '1960-09-03', '0632346373', 'sardou_off@wanadoo.fr', '1 24 35 76 175 035 49', 'Alternance', 12340, 12340, 12340),
(3, 'Alisée', 'Chatterton', 20, '23 bis rue des potiers, 86000, Poitiers, France', 'Apprenti responsable qualité', 'Qualité', '2000-05-06', '0743459083', 'alizéedu23bis@hotmail.fr', '2 46 81 05 953 154 46', 'Alternance', 1350, 1350, 1350),
(4, 'Robin', 'Poli', 26, '1 boulevard des pelles, 78500, Limay, France', 'Technicien', 'Informatique', '1994-03-24', '0783746343', 'robinpoli_pro@gmail.com', '1 57 61 10 248 761 19', 'CDD', 2900, 2900, 2900),
(5, 'Robert', 'Baratheon', 58, '2 Avenue de Chateau Noir, 10300, Le Mur, France', 'Hôte', 'Accueil', '1962-02-25', '0737983247', 'robbarath@gmail.com', '1 17 56 43 658 945 28', 'CDI', 6700, 6700, 6700);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `user_ID` int(100) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`user_ID`, `email`, `password`) VALUES
(1, 'patbalka@levallois.fr', '4rGEnT'),
(2, 'sardou_off@wanadoo.fr', 'Th€VOiCE');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fiche employé`
--
ALTER TABLE `fiche employé`
  ADD PRIMARY KEY (`employé_ID`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fiche employé`
--
ALTER TABLE `fiche employé`
  MODIFY `employé_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `user_ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
