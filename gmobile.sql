-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 01 avr. 2020 à 21:39
-- Version du serveur :  10.4.11-MariaDB
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gmobile`
--

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `idcommande` int(3) NOT NULL,
  `quantite` int(4) DEFAULT NULL,
  `prixCommande` double DEFAULT NULL,
  `dateCommande` date DEFAULT NULL,
  `idGestionnaire` int(3) DEFAULT NULL,
  `idEntreprise` int(3) DEFAULT NULL,
  `idFacture` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `consommation`
--

CREATE TABLE `consommation` (
  `idConsommation` int(3) NOT NULL,
  `dateDu` date DEFAULT NULL,
  `dateAu` date DEFAULT NULL,
  `DureeAppel` int(10) DEFAULT NULL,
  `nbSms` int(10) DEFAULT NULL,
  `idEmploye` int(3) DEFAULT NULL,
  `idMobile` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `declaration`
--

CREATE TABLE `declaration` (
  `idEmploye` int(3) DEFAULT NULL,
  `idMobile` int(3) DEFAULT NULL,
  `commentaire` varchar(1000) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `nombreMax` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

CREATE TABLE `employe` (
  `idEmploye` int(3) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `mail` varchar(50) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `poste` varchar(30) DEFAULT NULL,
  `idEntreprise` int(3) DEFAULT NULL,
  `idForfait` int(3) DEFAULT NULL,
  `idMobile` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`idEmploye`, `nom`, `mail`, `login`, `mdp`, `poste`, `idEntreprise`, `idForfait`, `idMobile`) VALUES
(001, 'Roman', 'Roman@Babemba.fr', 'Roman001', 'motdepasse', 'AgentdeSécurité', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `idEntreprise` int(3) NOT NULL,
  `nom` varchar(50) DEFAULT NULL,
  `nom_Directeur` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`idEntreprise`, `nom`, `nom_Directeur`, `adresse`) VALUES
(001, 'Babemba', 'Seydou Keita', '10 Rue de Dakar'),
(002, 'John', 'bbb', '10okkk');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `idFacture` int(3) NOT NULL,
  `prix` double DEFAULT NULL,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `idEntreprise` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `forfait`
--

CREATE TABLE `forfait` (
  `idForfait` int(3) NOT NULL,
  `nom` varchar(30) DEFAULT NULL,
  `prix` float DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

CREATE TABLE `gestionnaire` (
  `idGestionnaire` int(3) NOT NULL,
  `idEmploye` int(3) DEFAULT NULL,
  `idEntreprise` int(3) DEFAULT NULL,
  `login` varchar(20) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `mobile`
--

CREATE TABLE `mobile` (
  `idMobile` int(3) NOT NULL,
  `numeroTel` int(10) DEFAULT NULL,
  `etat` tinyint(1) DEFAULT NULL,
  `idForfait` int(3) DEFAULT NULL,
  `idEmploye` int(3) DEFAULT NULL,
  `idConsommation` int(3) DEFAULT NULL,
  `id_modele` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `modele_mobile`
--

CREATE TABLE `modele_mobile` (
  `id_modele` int(11) NOT NULL,
  `nom` varchar(20) DEFAULT NULL,
  `poid` float DEFAULT NULL,
  `taille` int(3) DEFAULT NULL,
  `couleur` varchar(50) DEFAULT NULL,
  `prix` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `opérateur`
--

CREATE TABLE `opérateur` (
  `idOpérateur` int(3) NOT NULL,
  `login` varchar(20) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `opérateur`
--

INSERT INTO `opérateur` (`idOpérateur`, `login`, `mdp`) VALUES
(001, 'log', 'log');

-- --------------------------------------------------------

--
-- Structure de la table `ref_commande_mobile`
--

CREATE TABLE `ref_commande_mobile` (
  `idcommande` int(3) DEFAULT NULL,
  `idMobile` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `ref_forfait_facture`
--

CREATE TABLE `ref_forfait_facture` (
  `idForfait` int(3) DEFAULT NULL,
  `idEmploye` int(3) DEFAULT NULL,
  `idFacture` int(3) DEFAULT NULL,
  `idMobile` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`idcommande`),
  ADD KEY `idGestionnaire` (`idGestionnaire`),
  ADD KEY `idEntreprise` (`idEntreprise`),
  ADD KEY `idFacture` (`idFacture`);

--
-- Index pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD PRIMARY KEY (`idConsommation`),
  ADD KEY `idEmploye` (`idEmploye`),
  ADD KEY `idMobile` (`idMobile`);

--
-- Index pour la table `declaration`
--
ALTER TABLE `declaration`
  ADD KEY `idEmploye` (`idEmploye`),
  ADD KEY `idMobile` (`idMobile`);

--
-- Index pour la table `employe`
--
ALTER TABLE `employe`
  ADD PRIMARY KEY (`idEmploye`),
  ADD KEY `idEntreprise` (`idEntreprise`),
  ADD KEY `idForfait` (`idForfait`),
  ADD KEY `idMobile` (`idMobile`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`idEntreprise`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`idFacture`),
  ADD KEY `idEntreprise` (`idEntreprise`);

--
-- Index pour la table `forfait`
--
ALTER TABLE `forfait`
  ADD PRIMARY KEY (`idForfait`);

--
-- Index pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD PRIMARY KEY (`idGestionnaire`),
  ADD KEY `idEmploye` (`idEmploye`),
  ADD KEY `idEntreprise` (`idEntreprise`);

--
-- Index pour la table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`idMobile`),
  ADD KEY `idForfait` (`idForfait`),
  ADD KEY `idEmploye` (`idEmploye`),
  ADD KEY `idConsommation` (`idConsommation`),
  ADD KEY `id_modele` (`id_modele`);

--
-- Index pour la table `modele_mobile`
--
ALTER TABLE `modele_mobile`
  ADD PRIMARY KEY (`id_modele`);

--
-- Index pour la table `opérateur`
--
ALTER TABLE `opérateur`
  ADD PRIMARY KEY (`idOpérateur`);

--
-- Index pour la table `ref_commande_mobile`
--
ALTER TABLE `ref_commande_mobile`
  ADD KEY `idcommande` (`idcommande`),
  ADD KEY `idMobile` (`idMobile`);

--
-- Index pour la table `ref_forfait_facture`
--
ALTER TABLE `ref_forfait_facture`
  ADD KEY `idForfait` (`idForfait`),
  ADD KEY `idEmploye` (`idEmploye`),
  ADD KEY `idFacture` (`idFacture`),
  ADD KEY `idMobile` (`idMobile`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `modele_mobile`
--
ALTER TABLE `modele_mobile`
  MODIFY `id_modele` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `idMobile` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `idcommande` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `consommation`
--
ALTER TABLE `consommation`
  MODIFY `idConsommation` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `employe`
--
ALTER TABLE `employe`
  MODIFY `idEmploye` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `idEntreprise` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `idFacture` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `forfait`
--
ALTER TABLE `forfait`
  MODIFY `idForfait` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  MODIFY `idGestionnaire` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `opérateur`
--
ALTER TABLE `opérateur`
  MODIFY `idOpérateur` int(3) NOT NULL AUTO_INCREMENT;


--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `commande_ibfk_1` FOREIGN KEY (`idGestionnaire`) REFERENCES `gestionnaire` (`idGestionnaire`),
  ADD CONSTRAINT `commande_ibfk_2` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`),
  ADD CONSTRAINT `commande_ibfk_3` FOREIGN KEY (`idFacture`) REFERENCES `facture` (`idFacture`);

--
-- Contraintes pour la table `consommation`
--
ALTER TABLE `consommation`
  ADD CONSTRAINT `consommation_ibfk_1` FOREIGN KEY (`idEmploye`) REFERENCES `employe` (`idEmploye`),
  ADD CONSTRAINT `consommation_ibfk_2` FOREIGN KEY (`idMobile`) REFERENCES `mobile` (`idMobile`);

--
-- Contraintes pour la table `declaration`
--
ALTER TABLE `declaration`
  ADD CONSTRAINT `declaration_ibfk_1` FOREIGN KEY (`idEmploye`) REFERENCES `employe` (`idEmploye`),
  ADD CONSTRAINT `declaration_ibfk_2` FOREIGN KEY (`idMobile`) REFERENCES `mobile` (`idMobile`);

--
-- Contraintes pour la table `employe`
--
ALTER TABLE `employe`
  ADD CONSTRAINT `employe_ibfk_1` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`),
  ADD CONSTRAINT `employe_ibfk_2` FOREIGN KEY (`idForfait`) REFERENCES `forfait` (`idForfait`),
  ADD CONSTRAINT `employe_ibfk_3` FOREIGN KEY (`idMobile`) REFERENCES `mobile` (`idMobile`);

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_ibfk_1` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`);

--
-- Contraintes pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD CONSTRAINT `gestionnaire_ibfk_1` FOREIGN KEY (`idEmploye`) REFERENCES `employe` (`idEmploye`),
  ADD CONSTRAINT `gestionnaire_ibfk_2` FOREIGN KEY (`idEntreprise`) REFERENCES `entreprise` (`idEntreprise`);

--
-- Contraintes pour la table `mobile`
--
ALTER TABLE `mobile`
  ADD CONSTRAINT `mobile_ibfk_1` FOREIGN KEY (`idForfait`) REFERENCES `forfait` (`idForfait`),
  ADD CONSTRAINT `mobile_ibfk_2` FOREIGN KEY (`idEmploye`) REFERENCES `employe` (`idEmploye`),
  ADD CONSTRAINT `mobile_ibfk_3` FOREIGN KEY (`idConsommation`) REFERENCES `consommation` (`idConsommation`),
  ADD CONSTRAINT `mobile_ibfk_4` FOREIGN KEY (`id_modele`) REFERENCES `modele_mobile` (`id_modele`);

--
-- Contraintes pour la table `ref_commande_mobile`
--
ALTER TABLE `ref_commande_mobile`
  ADD CONSTRAINT `ref_commande_mobile_ibfk_1` FOREIGN KEY (`idcommande`) REFERENCES `commande` (`idcommande`),
  ADD CONSTRAINT `ref_commande_mobile_ibfk_2` FOREIGN KEY (`idMobile`) REFERENCES `mobile` (`idMobile`);

--
-- Contraintes pour la table `ref_forfait_facture`
--
ALTER TABLE `ref_forfait_facture`
  ADD CONSTRAINT `ref_forfait_facture_ibfk_1` FOREIGN KEY (`idForfait`) REFERENCES `forfait` (`idForfait`),
  ADD CONSTRAINT `ref_forfait_facture_ibfk_2` FOREIGN KEY (`idEmploye`) REFERENCES `employe` (`idEmploye`),
  ADD CONSTRAINT `ref_forfait_facture_ibfk_3` FOREIGN KEY (`idFacture`) REFERENCES `facture` (`idFacture`),
  ADD CONSTRAINT `ref_forfait_facture_ibfk_4` FOREIGN KEY (`idMobile`) REFERENCES `mobile` (`idMobile`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
