-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 12 oct. 2018 à 17:10
-- Version du serveur :  5.7.21
-- Version de PHP :  5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecommerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Prix` float NOT NULL,
  `Type` varchar(535) NOT NULL,
  `Materiau` varchar(535) NOT NULL,
  `Quantite` int(11) NOT NULL,
  `Marque` varchar(535) NOT NULL,
  `Description` varchar(535) NOT NULL,
  `Image` varchar(535) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `Prix`, `Type`, `Materiau`, `Quantite`, `Marque`, `Description`, `Image`) VALUES
(1, 2.7, 'Plate', 'Plastique', 100, 'Cristaline', 'La meilleure eau', 'pictures/cristaline.png'),
(2, 3.5, 'Plate', 'Plastique', 100, 'Volvic', 'Eau prélevée à la source', 'pictures/volvic.png'),
(3, 3.7, 'Plate', 'Plastique', 100, 'Evian', 'Evian c\'est ban', 'pictures/evian.png'),
(4, 2.8, 'Plate', 'Plastique', 100, 'Contrex', 'L\'eau qui fait maigrir', 'pictures/contrex.png'),
(5, 3.2, 'Plate', 'Plastique', 100, 'Plancoet', 'L\'eau qu\'on connaît pas', 'pictures/plancoet.png'),
(6, 3.6, 'Plate', 'Plastique', 100, 'Vittel', 'Grosse gorgée, grosse bouteille', 'pictures/vittel.png'),
(7, 1.8, 'Plate', 'Plastique', 100, 'Hépar', 'Hépardi, tu connais pas mon eau ?', 'pictures/hepart.png'),
(8, 5, 'Gazeuse', 'Plastique', 70, 'Perrier', 'Une bouteille fraîche, un citron, un moment parfait.', 'pictures/perrier.png'),
(9, 5.5, 'Gazeuse', 'Plastique', 70, 'Badoit', 'Badoit et ses bulles, goûte comme c\'est bon !', 'pictures/badoit.png'),
(10, 5.8, 'Gazeuse', 'Plastique', 70, 'Saint-Amand', 'Et oui, on existe aussi en version pétillante !', 'pictures/saintamand.png'),
(11, 4.1, 'Sucrées', 'Plastique', 50, 'Volvic Fraise', 'C\'est LA meilleure boisson !', 'pictures/volvicfraise.png'),
(12, 4.1, 'Sucrées', 'Plastique', 50, 'Volvic Citron', 'Ah non, c\'est moi LA boisson préférée de tous !', 'pictures/volviccitron.png'),
(13, 4.1, 'Sucrées', 'Plastique', 50, 'Volvic Thé', 'La boisson préférée des pratiquants de yoga !', 'pictures/volvicthe.png'),
(14, 35, 'Luxe', 'Aluminium', 20, 'Gota', 'Buvez un verre de Gota et voyez vos forces décuplées.', 'pictures/gota.png'),
(15, 50, 'Luxe', 'Ecailles de dragon', 20, 'Ice Landic', 'Cette eau vous transformera en esquimau !', 'pictures/icelandic.png'),
(16, 75, 'Luxe', 'Obsidienne', 10, 'Bling H2O', 'Une eau invisible, vous ne la boirez pas, vous ne la sentirez pas, vous allez la vivre !', 'pictures/blingh2o.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
