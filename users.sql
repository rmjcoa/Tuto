-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 20 mai 2023 à 14:00
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
-- Base de données : `messageries`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `pseudo`, `prenom`, `email`, `mdp`, `photo`, `Date`) VALUES
(25, 'Feno', 'Toky', 'fanomezana@gmail.com', '$2y$10$EyDyuTBu5HZT3p0PEXDE3eignwG8.hV3WC6Bo1T4L53.hKzOsQjzu', '3.jpg', '2023-05-20 12:16:50'),
(26, 'Valimbavaka', 'Fanirintsoa', 'faniry@gmail.com', '$2y$10$OqW4cwcXn4.pgzFKsfnw4u4Uy7cCZyY3n1.LPOGNvusvX6uyNjdRG', '1.jpg', '2023-05-20 12:18:49'),
(27, 'Rabialahy ', 'Andry', 'andry@gmail.com', '$2y$10$RUV.5GFwi7cf784kGGIY8OmKq/qz7m5wVWrabzUVZTrPfNsSkI4cS', '4.jpg', '2023-05-20 12:19:18'),
(28, 'rakoto', 'Kely', 'kely@gmail.com', '$2y$10$BkDEl/i8TUfM9K0C2twHBO7qerLjN3Pts/kLVj20eRcndtsdsfpzK', 'team-1.jpg', '2023-05-20 12:20:36'),
(29, 'admin', 'Santos', 'admin@gmail.com', '$2y$10$qkXRla6hQ8bQSyy60wfcP.6/tvxuFuziaBeVRQGZyEnUWVHjiYemu', '5.jpg', '2023-05-20 12:21:26'),
(30, 'Raphael', 'Rakoto', 'raphael@gmail.com', '$2y$10$7rG1qZP3NAKau9DNBvhHjOppOWeTaPcXv.147nmG5JWxYMtJ/Ps1q', 'team-4.jpg', '2023-05-20 12:24:15'),
(31, 'fano', 'andry', 'rabialahyandry123@gmail.com', '$2y$10$fWeVhjwgxZAE3Nurg.giQeZ/ivJs7hV9DfHAIyr142rXA7Q4qQ0jW', '6.jpg', '2023-05-20 12:46:49'),
(32, 'fano', 'andry', 'rabialahyandry123@gmail.com', '782dd27ea8e3b4f4095ffa38eeb4d20b59069077', '61.jpg', '2023-05-20 13:57:31');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
