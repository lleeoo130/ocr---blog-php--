-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 16 mai 2018 à 19:31
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ocr_blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

DROP TABLE IF EXISTS `billet`;
CREATE TABLE IF NOT EXISTS `billet` (
  `billet_id` int(11) NOT NULL AUTO_INCREMENT,
  `billet_titre` varchar(255) NOT NULL,
  `billet_contenu` text NOT NULL,
  `billet_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `billet_auteur` varchar(255) NOT NULL,
  PRIMARY KEY (`billet_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`billet_id`, `billet_titre`, `billet_contenu`, `billet_date`, `billet_auteur`) VALUES
(11, 'Mon premier article!', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\n', '2018-05-16 20:04:00', ''),
(12, 'Mon deuxième article!', 'Wow, déja! Après vos nombreuses réactions sur le Lorem Ipsum, en voilà plus!\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '2018-05-16 20:15:17', 'Lleeoo130'),
(13, 'Jamais d\'eux sans toi!', 'Et oui, je suis en effet un expert dans les jeux de mots!\r\nComme vous pouvez le voir, la vie n\'est pas si hard-core, chaque mot peut être changé pour transformer sa propre réalité... du coup, est-elle sale? Le contraire est aussi lui même potentiellement vrai, sachant qu\'il n\'exclut que la vérité subjective de l\'individu objectif. Mais tout ceci est un autre débat, qui aura, lui même ses réactions, ses réponses et ses actions.\r\nJe vous dit donc à bientôt pour de nouveaux épisodes des chroniques.\r\nEt en attendant, n\'oubliez pas, \"In this game fire represents your life. If your fire is gone, so are you.\"', '2018-05-16 20:33:01', 'Lleeoo130'),
(14, 'On continue avec Lorem', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '2018-05-16 21:09:08', 'Lleeoo130');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `commentaire_id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaire_billet_id` int(11) NOT NULL,
  `commentaire_auteur` varchar(255) NOT NULL,
  `commentaire_contenu` text NOT NULL,
  `commentaire_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`commentaire_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`commentaire_id`, `commentaire_billet_id`, `commentaire_auteur`, `commentaire_contenu`, `commentaire_date`) VALUES
(11, 11, 'Lleeoo130', 'Super! J\'en sais enfin un peu plus sur le lorem Ipsum! xD', '2018-05-16 20:05:34'),
(12, 12, 'Lleeoo130', 'Les commentaires marchent-ils bien?!', '2018-05-16 20:17:59'),
(13, 13, 'Lleeoo130', 'Trop fort!', '2018-05-16 21:13:34'),
(15, 14, 'Lleeoo130', 'Retour direct à l\'article!', '2018-05-16 21:15:41');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
