-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : sam. 05 oct. 2024 à 19:02
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `vitafit`
--

-- --------------------------------------------------------

--
-- Structure de la table `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `action` varchar(255) NOT NULL,
  `page_visited` varchar(255) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=527 DEFAULT CHARSET=utf8mb3;

--
-- Déchargement des données de la table `logs`
--

INSERT INTO `logs` (`id`, `user_id`, `action`, `page_visited`, `timestamp`) VALUES
(517, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:34:35'),
(516, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:34:34'),
(515, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:33:00'),
(514, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:31:48'),
(513, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:31:08'),
(512, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:31:08'),
(511, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:31:08'),
(510, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:31:08'),
(509, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:34'),
(508, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:33'),
(507, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:09'),
(506, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:09'),
(505, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:09'),
(504, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:08'),
(503, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:08'),
(502, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:08'),
(501, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:29:07'),
(500, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:28:28'),
(499, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:28:28'),
(498, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:27:37'),
(497, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:27:37'),
(496, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:27:37'),
(495, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:24:52'),
(494, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:24:52'),
(493, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:24:52'),
(492, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:24:10'),
(491, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:24:10'),
(490, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:24:10'),
(489, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:24:10'),
(488, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:22:36'),
(487, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:22:35'),
(486, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:41'),
(485, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:40'),
(484, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:12'),
(483, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:11'),
(482, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:11'),
(481, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:10'),
(480, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:10'),
(479, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:10'),
(478, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:21:09'),
(477, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:19:10'),
(476, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:26'),
(475, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:26'),
(474, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:26'),
(473, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:25'),
(472, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:25'),
(471, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:25'),
(470, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:04'),
(469, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:03'),
(468, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:03'),
(467, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:03'),
(466, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:03'),
(465, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:18:02'),
(464, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:16:37'),
(463, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:16:37'),
(462, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:16:37'),
(461, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:16:36'),
(460, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:15:28'),
(459, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:15:28'),
(458, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:15:28'),
(457, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:36'),
(456, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:35'),
(455, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:35'),
(454, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:15'),
(453, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:15'),
(452, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:14'),
(451, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:07'),
(450, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:06'),
(449, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:06'),
(448, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:06'),
(447, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:14:05'),
(446, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:34'),
(445, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:14'),
(444, NULL, 'Visite de la page sans connexion', 'index.php', '2024-10-05 18:13:09'),
(443, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:07'),
(442, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:07'),
(441, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:07'),
(440, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:06'),
(439, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:06'),
(438, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:05'),
(437, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:05'),
(436, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:13:05'),
(435, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:12:55'),
(434, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:12:55'),
(433, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:12:54'),
(432, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:12:54'),
(431, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:11:28'),
(430, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:11:28'),
(429, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:11:28'),
(428, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:11:28'),
(427, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:10:39'),
(426, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:10:39'),
(425, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:10:39'),
(424, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:10:38'),
(423, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:10:38'),
(422, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:09:40'),
(421, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:04:36'),
(420, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:02:55'),
(419, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:01:40'),
(418, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 17:57:27'),
(417, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 17:57:27'),
(416, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 17:57:27'),
(415, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 17:57:26'),
(414, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 17:57:26'),
(413, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 17:57:02'),
(518, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:34:35'),
(519, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:34:35'),
(520, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:34:35'),
(521, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:53:10'),
(522, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:54:04'),
(523, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:54:04'),
(524, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:54:05'),
(525, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:55:39'),
(526, NULL, 'Visite de la page sans connexion', 'register.php', '2024-10-05 18:55:40');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
