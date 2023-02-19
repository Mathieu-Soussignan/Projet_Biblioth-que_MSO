-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 08 fév. 2023 à 09:09
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
(5, '2253081477', 'La semaine de 4heures', 'Developpement personnel', '320 pages', 'Classique', 'Ferries', 'Timothy', 'PEARSON', '30 avril 2010', '15', 'Français'),
(7, '2266227920', 'Influence et manipulation ', 'Développement personnel', ' 408', '11cm x 17cm', ' Cialdini', ' Robert B.', 'Pocket', ' 17/04/2014', '9', 'Français anglais\r\n'),
(8, ' 2266268554', 'Miracle morning', 'Développement personnel ', '240 pages', 'De poche', ' Elrod', ' Hal', 'First', '10 mars 2016', '17', 'Anglais'),
(10, ' 225323821X', 'Comment résoudre les conflits', 'Développement personnel', '224 pages', 'de poche', 'Carnegie', ' Dale ', ' Lgf', ' 13/10/2021', '14', 'Français '),
(18, '2707188794', 'Les mots sont des fenêtres (ou bien ce sont des murs)', 'Développement personnel', ' 320', '', 'B. Rosenberg', 'Marshall', 'La decouverte', '28/04/2016', '20', 'Français '),
(19, '2807328156', 'Psychologie du haut potentiel', 'Psychologie', '672 pages', 'Classique', 'Gauvrit', ' Nicolas', 'De Boeck Supérieur', '26/05/2021', '42', 'Français '),
(27, '2010008995', 'Les misérables', 'rêve et le suicide', '352', 'Classique', 'Hugo', 'Victor', 'Ldp Jeunesse', '0', '5', 'Français'),
(52, '9780590353427', 'Harry Potter à l\'École des Sorciers', 'Fantasy', '210', 'broché', 'Rowling', 'J.K', 'Gallimard', '1997', '16', 'Français'),
(54, '9780590108367', 'Harry Potter et la Chambre des Secrets', 'Fantasy', '251', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '1998', '17', 'Français'),
(55, '9780747532743', 'Harry Potter et le Prisonnier d\'Azkaban', 'Fantasy', '317', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '1999', '19', 'Français'),
(56, '9780747581086', 'Harry Potter et la Coupe de Feu', 'Fantasy', '636', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2000', '21', 'Français'),
(57, '9780747599312', 'Harry Potter et l\'Ordre du Phoenix', 'Fantasy', '870', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2003', '23', 'Français'),
(58, '9780756404079', 'Harry Potter et le Prince de Sang-Mêlé', 'Fantasy', '607', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2005', '25', 'Français'),
(59, '9780545139708', 'Harry Potter et les Reliques de la Mort', 'Fantasy', '759', 'Broché', 'Rowling', 'J.K.', 'Gallimard Jeunesse', '2007', '27', 'Français'),
(64, '978-0-451-23211', 'Les Misérables', 'Roman historique', '1488', 'poche', 'Hugo', 'Victor', 'Gallimard', '1862', '11', 'Français'),
(65, '9780590353427', 'Les Misérables', 'Roman historique', '1488', 'poche', 'Hugo', 'Victor', 'Gallimard', '1862', '11', 'Japonais');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prenom` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mail` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `mdp` varchar(80) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `mdp`) VALUES
(1, 'Dupont', 'Eric', 'b@mail.fr', 'azerty'),
(2, 'Alexis', 'Serbelloni', 'a@mail.fr', 'azerty'),
(19, 'Dumont', 'Leo', 'c@mail.fr', 'azerty'),
(20, 'Casagrande', 'Theo', 'Theo.c@mail.fr', 'azerty'),
(22, 'Lasarovitch', 'Pierre', 'e@mail.fr', 'azerty'),
(23, 'Pascal', 'Bertrand', 'f@mail.fr', 'azerty'),
(28, 'so', 'mathieu', 's@mail.fr', 'hello'),
(29, 'mat', 'mathieu', 'a@mail.fr', 'hello'),
(30, 'Soussignan', 'Mathieu', 'sous@mail.fr', 'hello'),
(31, 'Hubert', 'Caro', 'caroco@gmail.com', '123456');

--
-- Index pour les tables déchargées
--

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
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
