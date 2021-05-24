-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 24 mai 2021 à 17:53
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cpme_gestion`
--

-- --------------------------------------------------------

--
-- Structure de la table `annuaire_adherents`
--

CREATE TABLE `annuaire_adherents` (
  `id` int(11) NOT NULL,
  `id_adherent` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `role` varchar(100) NOT NULL,
  `telephone` int(8) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `linkedin` varchar(250) NOT NULL,
  `nom_contact` varchar(250) NOT NULL,
  `prenom_contact` varchar(250) NOT NULL,
  `role_contact` varchar(250) NOT NULL,
  `telephone_contact` int(8) NOT NULL,
  `mail_contact` varchar(250) NOT NULL,
  `linkedin_contact` varchar(250) NOT NULL,
  `section` varchar(50) NOT NULL,
  `entreprise` varchar(150) NOT NULL,
  `activite` varchar(255) NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `secteur` varchar(10) NOT NULL,
  `site_entreprise` varchar(255) NOT NULL,
  `linkedin_entreprise` varchar(255) NOT NULL,
  `facebook_entreprise` varchar(255) NOT NULL,
  `twitter_entreprise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `annuaire_adherents`
--

INSERT INTO `annuaire_adherents` (`id`, `id_adherent`, `nom`, `prenom`, `role`, `telephone`, `mail`, `linkedin`, `nom_contact`, `prenom_contact`, `role_contact`, `telephone_contact`, `mail_contact`, `linkedin_contact`, `section`, `entreprise`, `activite`, `adresse`, `secteur`, `site_entreprise`, `linkedin_entreprise`, `facebook_entreprise`, `twitter_entreprise`) VALUES
(1, 10, 'LAVIT D\'HAUTEFORT', 'Gaëtan', 'Gérant', 11223344, 'test@test', 'https://', 'Berners-Lee', 'Tim', 'Responsable', 1234567, 'test@test2', 'https://', 'artisanat', 'ineoxa', '', '97410', 'nord', 'https://', 'https://', 'https://', 'https://'),
(2, 10, 'LAVIT D\'HAUTEFORT', 'Gaëtan', 'Gérant', 11223344, 'test@test', 'https://', 'Berners-Lee', 'Tim', 'Responsable', 1234567, 'test@test2', 'https://', 'artisanat', 'ineoxa', 'Création de site web, vitrines et e-commerce', '97410', 'nord', 'https://', 'https://', 'https://', 'https://');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annuaire_adherents`
--
ALTER TABLE `annuaire_adherents`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annuaire_adherents`
--
ALTER TABLE `annuaire_adherents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
