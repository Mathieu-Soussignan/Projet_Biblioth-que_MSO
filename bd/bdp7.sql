-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 28 fév. 2023 à 14:08
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bdp7`
--

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `Id_fournisseur` int(11) NOT NULL,
  `Code_fournisseur` varchar(50) NOT NULL,
  `Raison_sociale` varchar(255) NOT NULL,
  `Rue_fournisseur` varchar(255) NOT NULL,
  `Code_postal` varchar(50) NOT NULL,
  `Localite` varchar(255) NOT NULL,
  `Pays` varchar(255) NOT NULL,
  `Tel_fournisseur` varchar(50) NOT NULL,
  `Url_fournisseur` varchar(255) NOT NULL,
  `Email_fournisseur` varchar(255) NOT NULL,
  `Reseau_fournisseur` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Déchargement des données de la table `fournisseur`
--

INSERT INTO `fournisseur` (`Id_fournisseur`, `Code_fournisseur`, `Raison_sociale`, `Rue_fournisseur`, `Code_postal`, `Localite`, `Pays`, `Tel_fournisseur`, `Url_fournisseur`, `Email_fournisseur`, `Reseau_fournisseur`) VALUES
(11, 'F001', 'Librairie de la Plume', '12 rue des Livres', '75001', 'Paris', 'France', '01 23 45 67 89', 'www.librairiedelaplume.fr', 'contact@librairiedelaplume.fr', '@librairiedelaplume'),
(12, 'F002', 'Distribulivre', '32 avenue de la Lecture', '69002', 'Lyon', 'France', '04 78 90 12 34', 'www.distribulivre.com', 'contact@distribulivre.com', '@distribulivre'),
(13, 'F003', 'Papeterie des Arts', '10 rue du Papier', '31000', 'Toulouse', 'France', '05 61 23 45 67', 'www.papeteriedesarts.fr', 'contact@papeteriedesarts.fr', '@papeteriedesarts'),
(14, 'F004', 'Livre&Co', '5 rue de la Littérature', '44000', 'Nantes', 'France', '02 40 56 78 90', 'www.livreandco.fr', 'contact@livreandco.fr', '@livreandco'),
(15, 'F005', 'Imprimerie Moderne', '18 boulevard de l\'Imprimerie', '75008', 'Paris', 'France', '01 45 67 89 01', 'www.imprimeriemoderne.fr', 'contact@imprimeriemoderne.fr', '@imprimeriemoderne'),
(16, 'F006', 'coucou', '15 bis', '21520', 'namur', 'Belgique', '06039145', 'gggi.net', 'a@mail.fr', '@insta'),
(17, 'F001', 'Raison sociale 1', 'Rue fournisseur 1', '75001', 'Paris', 'France', '0525874121', 'www.fournisseur1.com', 'contact@fournisseur1.com', 'www.facebook.com/fournisseur1'),
(18, 'F002', 'Raison sociale 2', 'Rue fournisseur 2', '75002', 'Bastia', 'France', '0123458752', 'www.fournisseur2.com', 'contact@fournisseur2.com', 'www.facebook.com/fournisseur2'),
(19, 'F003', 'Raison sociale 3', 'Rue fournisseur 3', '75003', 'Ajaccio', 'France', '0123458774', 'www.fournisseur3.com', 'contact@fournisseur3.com', 'www.facebook.com/fournisseur3'),
(20, 'F004', 'Raison sociale 4', 'Rue fournisseur 4', '75004', 'Strasbourg', 'France', '0123456622', 'www.fournisseur4.com', 'contact@fournisseur4.com', 'www.facebook.com/fournisseur4'),
(21, 'F005', 'Raison sociale 5', 'Rue fournisseur 5', '75005', 'Paris', 'France', '0123457744', 'www.fournisseur5.com', 'contact@fournisseur5.com', 'www.facebook.com/fournisseur5'),
(22, 'F006', 'Raison sociale 6', 'Rue fournisseur 6', '69001', 'Lille', 'France', '0123454599', 'www.fournisseur6.com', 'contact@fournisseur6.com', 'www.facebook.com/fournisseur6'),
(23, 'F007', 'Raison sociale 7', 'Rue fournisseur 7', '69002', 'Bordeaux', 'France', '0123455522', 'www.fournisseur7.com', 'contact@fournisseur7.com', 'www.facebook.com/fournisseur7'),
(24, 'F008', 'Raison sociale 8', 'Rue fournisseur 8', '69003', 'Reims', 'France', '0123456633', 'www.fournisseur8.com', 'contact@fournisseur8.com', 'www.facebook.com/fournisseur8'),
(25, 'F009', 'Raison sociale 9', 'Rue fournisseur 9', '69004', 'Toulouse', 'France', '0123454711', 'www.fournisseur9.com', 'contact@fournisseur9.com', 'www.facebook.com/fournisseur9'),
(26, 'F010', 'Raison sociale 10', 'Rue fournisseur 10', '69005', 'Marseille', 'France', '0123458820', 'www.fournisseur10.com', 'contact@fournisseur10.com', 'www.facebook.com/fournisseur10'),
(27, 'F011', 'coucou2', '15 bis', '21520', 'namur', 'Belgique', '06039145', 'gggi.com', 'a@mail.com', '@insta');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `id` int(11) NOT NULL,
  `ISBN` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Titre` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Theme` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Nb_pages` varchar(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Format` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Nom_auteur` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Prenom_auteur` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Editeur` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Annee_edition` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Prix` decimal(6,0) NOT NULL,
  `Langue` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`id`, `ISBN`, `Titre`, `Theme`, `Nb_pages`, `Format`, `Nom_auteur`, `Prenom_auteur`, `Editeur`, `Annee_edition`, `Prix`, `Langue`) VALUES
(10, ' 225323821X', 'Comment résoudre les conflits', 'Développement personnel', '224 pages', 'de poche', 'Carnegie', ' Dale ', ' Lgf', ' 13/10/2021', '14', 'Français '),
(18, '2707188794', 'Les mots sont des fenêtres (ou bien ce sont des murs)', 'Développement personnel', ' 320', '', 'B. Rosenberg', 'Marshall', 'La decouverte', '28/04/2016', '20', 'Français '),
(19, '2807328156', 'Psychologie du haut potentiel', 'Psychologie', '672 pages', 'Classique', 'Gauvrit', ' Nicolas', 'De Boeck Supérieur', '26/05/2021', '42', 'Français '),
(52, '9780590353427', 'Harry Potter à l\'École des Sorciers', 'Fantasy', '210', 'broché', 'Rowling', 'J.K', 'Gallimard', '1997', '16', 'Français'),
(54, '9780590108367', 'Harry Potter et la Chambre des Secrets', 'Fantasy', '251', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '1998', '17', 'Français'),
(55, '9780747532743', 'Harry Potter et le Prisonnier d\'Azkaban', 'Fantasy', '317', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '1999', '19', 'Français'),
(56, '9780747581086', 'Harry Potter et la Coupe de Feu', 'Fantasy', '636', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2000', '21', 'Français'),
(57, '9780747599312', 'Harry Potter et l\'Ordre du Phoenix', 'Fantasy', '870', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2003', '23', 'Français'),
(58, '9780756404079', 'Harry Potter et le Prince de Sang-Mêlé', 'Fantasy', '607', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2005', '25', 'Français'),
(59, '9780545139708', 'Harry Potter et les Reliques de la Mort', 'Fantasy', '759', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2007', '27', 'Français'),
(64, '978-0-451-23211', 'Les Misérables', 'Roman historique', '1488', 'poche', 'Hugo', 'Victor', 'Gallimard', '1862', '11', 'Français'),
(65, '9780590353427', 'Les Misérables', 'Roman historique', '1488', 'poche', 'Hugo', 'Victor', 'Gallimard', '1862', '11', 'Japonais'),
(67, '978-1-56619-9', 'Livre 10', 'Science-fiction', '328', 'poche', 'Eiichirō ', 'Oda', 'Glénat', '2023', '21', 'Français');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mdp` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `mdp`, `role`) VALUES
(1, 'Dupont', 'Eric', 'b@mail.fr', 'hello', 2),
(2, 'Alexis', 'Serbelloni', 'a@mail.fr', 'azerty', 2),
(19, 'Dumont', 'Leo', 'c@mail.fr', 'azerty', 2),
(20, 'Casagrande', 'Theo', 'Theo.c@mail.fr', 'azerty', 2),
(22, 'Lasarovitch', 'Pierre', 'e@mail.fr', 'azerty', 2),
(23, 'Pascal', 'Bertrand', 'f@mail.fr', 'azerty', 2),
(28, 'so', 'mathieu', 's@mail.fr', 'hello', 2),
(29, 'mat', 'mathieu', 'a@mail.fr', 'hello', 2),
(30, 'Soussignan', 'Mathieu', 'sous@mail.fr', '$2y$10$bDbgnZDFrn4Kx8qmY5HSDOYx7fERektdG2OcfS/B8CEYjr9O7Db02', 1),
(31, 'Hubert', 'Caro', 'caroco@gmail.com', '123456', 2),
(32, 'Bond', 'James', '007@bond.fr', 'coco', 2),
(33, 'John', 'Doe', 'j@ex.com', '12345', 1),
(34, 'me', 'a', 's@mail.com', '$2y$10$QRv3t5..pHJpZz8/537OFu63tYQMMi6.HfsnTjMjUJ2S14LH6hP6u', 1),
(35, 'balkany', 'patoche', 'aa@gmail.com', '12345678', 1),
(36, 'Parker', 'Peter', 'spidey@g.fr', '$2y$10$zSzGFsKhmg7dbT.a5viXSOo5N5300GsWYfgbKF9cSZ/WxeHHqiZGK', 1),
(38, 'Kent', 'Clark', 'super@gmail.fr', '$2y$10$Sw48hldRcoLPsMb5L5Ige..6G1k4A3eixm.anPSZaFjxQWCvUzKlO', 1),
(42, 'test3', 'test3', 'test3@gmail.com', '$2y$10$InlWwx/ZE1r1SFi3RgTBz.nh2EYupBhLOwEie64YYRuKvyOxSlBQO', 1),
(43, 'doe', 'john', 'test@gmail.com', '$2y$10$pKwQ7SqCAkPxIbaJXw2hi.y2S2g7ubDNqjePgvRTwj6j1R5uynrkK', 2);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`Id_fournisseur`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `nom` (`nom`) USING BTREE,
  ADD KEY `prenom` (`prenom`) USING BTREE,
  ADD KEY `mail` (`mail`) USING BTREE;

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  MODIFY `Id_fournisseur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
