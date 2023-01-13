-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : Dim 11 avr. 2021 à 09:14
-- Version du serveur :  10.4.14-MariaDB
-- Version de PHP : 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `ems`
--

-- --------------------------------------------------------

--
-- Structure de la table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(2) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'julesgadom237', '91637062'),
(3, 'olipong', '4edcv5'),
(4, 'fansseu', '123'),
(5, 'soso', '4567');

-- --------------------------------------------------------

--
-- Structure de la table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(3) NOT NULL,
  `employee_name` varchar(30) NOT NULL,
  `presence` varchar(30) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `attendance`
--

INSERT INTO `attendance` (`id`, `employee_name`, `presence`, `time`) VALUES
(1, 'ngem olivia pongha', 'entering', '2021-03-14 23:09:00'),
(2, 'ngem olivia pongha', 'entering', '2021-03-14 23:10:01'),
(3, 'ngem olivia', 'leaving', '2021-03-15 12:05:39'),
(4, 'ndognou ndognou malvina', 'entering', '2021-03-15 12:21:43'),
(5, 'eboue aiglon joseph bebey', 'leaving', '2021-03-15 12:51:38'),
(6, 'eboue aiglon joseph bebey', 'leaving', '2021-03-15 12:52:02'),
(7, 'PONGHA MAEVA AUDREY', 'coming', '2021-03-15 13:56:50'),
(8, 'ngem yvonne', 'leaving', '2021-03-21 13:02:19'),
(9, 'lonfin', 'leaving', '2021-04-09 16:09:12'),
(10, 'ngem olivia', 'entering', '2021-04-10 15:21:20'),
(11, 'ngem olivia', 'leaving', '2021-04-10 18:07:16');

-- --------------------------------------------------------

--
-- Structure de la table `employee`
--

CREATE TABLE `employee` (
  `id` int(3) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` enum('M','F') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employee`
--

INSERT INTO `employee` (`id`, `first_name`, `last_name`, `address`, `contact`, `email`, `password`, `gender`) VALUES
(1, 'ngem', 'pongha', 'bali', '6789654', 'pongha@gmail.com', '123', 'M'),
(3, 'winnie', 'white', 'bali', '6780098', 'whitewinnie1@gmail.com', '123', 'F'),
(16, 'vero', 'vero', 'kribi', '678009865', 'vero@gmail.com', '', 'F');

-- --------------------------------------------------------

--
-- Structure de la table `employeelogin`
--

CREATE TABLE `employeelogin` (
  `id` int(2) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `pass_word` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `employeelogin`
--

INSERT INTO `employeelogin` (`id`, `user_name`, `pass_word`) VALUES
(1, 'olivia', 'olivia123'),
(2, 'eboue clair', 'cleb123'),
(3, 'eboue clair', 'cleb123'),
(4, 'PONGHA', '09871'),
(5, 'noumsi', 'noumsi12');

-- --------------------------------------------------------

--
-- Structure de la table `leave`
--

CREATE TABLE `leave` (
  `id` int(3) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `leave_type` varchar(30) NOT NULL,
  `leave_date` date NOT NULL,
  `return_date` date NOT NULL,
  `day` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `report`
--

CREATE TABLE `report` (
  `id_report` int(11) NOT NULL,
  `emp_id` int(2) NOT NULL,
  `datejr` varchar(100) NOT NULL,
  `report_type` varchar(1000) NOT NULL,
  `price` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `report`
--

INSERT INTO `report` (`id_report`, `emp_id`, `datejr`, `report_type`, `price`) VALUES
(1, 1, '2021-04-07', 'sold lenovo laptop', 5000),
(2, 3, '2021-04-15', 'aetfff', 103330),
(3, 3, '2021-04-08', 'aetVVVV', 1200),
(4, 3, '2021-04-08', 'bonsoir\r\n', 1000),
(5, 3, '2021-04-08', 'aet', 1000),
(6, 3, '2021-04-15', 'qsrhdfx:VQT?NFÃ¹pqsSSSSSkxfm', 10200),
(7, 1, '2021-04-11', 'bought lenovo laptop', 10000);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`,`password`);

--
-- Index pour la table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `e-mail` (`email`);

--
-- Index pour la table `employeelogin`
--
ALTER TABLE `employeelogin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `leave`
--
ALTER TABLE `leave`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id_report`),
  ADD KEY `emp_id` (`emp_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `employeelogin`
--
ALTER TABLE `employeelogin`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `leave`
--
ALTER TABLE `leave`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `report`
--
ALTER TABLE `report`
  MODIFY `id_report` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
