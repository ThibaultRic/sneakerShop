-- phpMyAdmin SQL Dump
-- version 4.6.0
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 27 Avril 2016 à 00:17
-- Version du serveur :  5.7.9
-- Version de PHP :  5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `sneakerShop`
--

-- --------------------------------------------------------

--
-- Structure de la table `brand`
--

CREATE TABLE `brand` (
  `id` int(11) NOT NULL,
  `brand` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `brand`
--

INSERT INTO `brand` (`id`, `brand`) VALUES
(1, 'Air Jordan'),
(2, 'Adidas'),
(3, 'Reebok'),
(4, 'Nike'),
(5, 'New Balance'),
(6, 'Asics'),
(7, 'Converse'),
(8, 'Vans');

-- --------------------------------------------------------

--
-- Structure de la table `picture`
--

CREATE TABLE `picture` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `url` varchar(45) DEFAULT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `picture`
--

INSERT INTO `picture` (`id`, `name`, `url`, `product_id`) VALUES
(1, 'Air Jordan 1 RB/B (1)', 'jordan/jordan1BlueRoyal/1.jpg', 1),
(2, 'Air Jordan 1 RB/B (2)', 'jordan/jordan1BlueRoyal/2.jpg', 1),
(3, 'Air Jordan 1 RB/B (3)', 'jordan/jordan1BlueRoyal/3.jpg', 1),
(4, 'Air Jordan 1 RB/B (4)', 'jordan/jordan1BlueRoyal/4.jpg', 1),
(5, 'Adidas Top Ten (1)', 'adidas/topTen/1.jpg', 2),
(6, 'Adidas Top Ten (2)', 'adidas/topTen/2.jpg', 2),
(7, 'Adidas Top Ten (3)', 'adidas/topTen/3.jpg', 2),
(8, 'Adidas Top Ten (4)', 'adidas/topTen/4.jpg', 2),
(9, 'Airmax 90 Infra (1)', 'nike/airmax90Infra/1.jpg', 4),
(10, 'Airmax 90 Infra (2)', 'nike/airmax90Infra/2.jpg', 4),
(11, 'Airmax 90 Infra (3)', 'nike/airmax90Infra/3.jpg', 4),
(12, 'Airmax 90 Infra (4)', 'nike/airmax90Infra/4.jpg', 4),
(13, 'reebok Pump Blast (1)', 'reebok/pumpBlast/1.jpg', 3),
(14, 'reebok Pump Blast (2)', 'reebok/pumpBlast/2.jpg', 3),
(15, 'reebok Pump Blast (3)', 'reebok/pumpBlast/3.jpg', 3),
(16, 'reebok Pump Blast (4)', 'reebok/pumpBlast/4.jpg', 3);

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `subName` varchar(45) DEFAULT NULL,
  `price` decimal(5,2) DEFAULT NULL,
  `description` longtext,
  `created_at` datetime DEFAULT NULL,
  `productPic` varchar(45) DEFAULT NULL,
  `brand_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `subName`, `price`, `description`, `created_at`, `productPic`, `brand_id`) VALUES
(1, 'Air Jordan 1 OG', 'Royal Blue / Black', '139.99', 'La jordan 1 dans son coloris Bleu royal.\r\nReedition du modele iconique de la marque Jordan dans son coloris bleu royal et noir', '2016-04-17 20:53:00', 'jordan/jordan1BlueRoyal/1.jpg', 1),
(2, 'Adidas Top Ten', 'Originals', '99.99', 'Avec ses 3 bandes synthetiques et sa languette matelassee ornee du logo Top Ten original, la chaussure Top Ten Hi hommes a fiere allure sur le pave.', '2016-04-19 07:23:44', 'adidas/topTen/1.jpg', 2),
(3, 'Pump Blast', 'Reebok', '150.00', 'Boostez votre look classique avec ces chaussures spectaculaires.\r\nC\'est ce qu\'on appelle un retour en force.', '2016-04-05 09:30:38', 'reebok/pumpBlast/1.jpg', 3),
(4, 'Nike Air Max 90', 'Infrared', '125.90', 'La Nike Air Max 90 "Infrared est la declinaison la plus iconique de la plus populaire des baskets.', '2016-04-01 10:26:36', 'nike/airmax90Infra/1.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `product_has_sizeChart`
--

CREATE TABLE `product_has_sizeChart` (
  `product_id` int(11) NOT NULL,
  `sizeChart_id` int(11) NOT NULL,
  `quantity` int(9) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `product_has_sizeChart`
--

INSERT INTO `product_has_sizeChart` (`product_id`, `sizeChart_id`, `quantity`) VALUES
(1, 1, 9),
(1, 2, 15),
(1, 3, 0),
(1, 4, 4),
(1, 5, 10),
(1, 6, 9),
(1, 7, 4),
(1, 8, 0),
(1, 9, 2),
(2, 1, 0),
(2, 2, 7),
(2, 3, 3),
(2, 4, 9),
(2, 5, 0),
(2, 6, 0),
(2, 7, 4),
(2, 8, 3),
(2, 9, 2),
(3, 1, 4),
(3, 2, 2),
(3, 3, 0),
(3, 4, 9),
(3, 5, 3),
(3, 6, 0),
(3, 7, 4),
(3, 8, 0),
(3, 9, 2),
(4, 1, 2),
(4, 2, 0),
(4, 3, 3),
(4, 4, 0),
(4, 5, 2),
(4, 6, 0),
(4, 7, 8),
(4, 8, 1),
(4, 9, 0);

-- --------------------------------------------------------

--
-- Structure de la table `raisons`
--

CREATE TABLE `raisons` (
  `id` int(11) NOT NULL,
  `raison` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `raisons`
--

INSERT INTO `raisons` (`id`, `raison`) VALUES
(1, 'Je cherche un modèle en particulier'),
(2, 'Informations sur une commande'),
(3, 'Disponibilité des produits'),
(4, 'Autre raison');

-- --------------------------------------------------------

--
-- Structure de la table `sizeChart`
--

CREATE TABLE `sizeChart` (
  `id` int(11) NOT NULL,
  `sizeChart` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `sizeChart`
--

INSERT INTO `sizeChart` (`id`, `sizeChart`) VALUES
(1, '41'),
(2, '42'),
(3, '42.5'),
(4, '43'),
(5, '44'),
(6, '44.5'),
(7, '45'),
(8, '46'),
(9, '47.5');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(45) DEFAULT NULL,
  `lastName` varchar(45) DEFAULT NULL,
  `mail` varchar(45) DEFAULT NULL,
  `message` longtext,
  `optinNewsletter` varchar(45) DEFAULT NULL,
  `raisons` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `mail`, `message`, `optinNewsletter`, `raisons`) VALUES
(1, 'fname', 'lname', 'mail@mail.com', 'too bored to lorem', '1', 0),
(2, 'Thibault', 'Richard', 'Mail@Damail.com', 'This is the ultimate test', '1', 1),
(3, 'Thibault', 'Richard', 'Mail@Damail.com', 'This is the ultimate test', '1', 1),
(4, 'Thibault', 'Richard', 'Mail@Damail.com', 'This is the ultimate test', '1', 1),
(5, 'Thibault', 'Richard', 'mail@damail.com', 'This is the ultimate test', '1', 1),
(6, 'Why ', 'Why', 'why@why.why', 'why', '0', 2),
(7, 'Test', 'Conditon', 'test@condition.com', 'test de la condition', '0', 2),
(8, 'Juliette', 'Gonzalez', 'Test@test.com', 'eaeae', '1', 1),
(9, '', 'azzaz', 'mail@hu.com', '', '0', 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`id`,`product_id`),
  ADD KEY `fk_picture_product1_idx` (`product_id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_product_brand1_idx` (`brand_id`);

--
-- Index pour la table `product_has_sizeChart`
--
ALTER TABLE `product_has_sizeChart`
  ADD PRIMARY KEY (`product_id`,`sizeChart_id`),
  ADD KEY `fk_product_has_sizeChart_sizeChart1_idx` (`sizeChart_id`),
  ADD KEY `fk_product_has_sizeChart_product1_idx` (`product_id`);

--
-- Index pour la table `raisons`
--
ALTER TABLE `raisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sizeChart`
--
ALTER TABLE `sizeChart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_users_raisons1_idx` (`raisons`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `brand`
--
ALTER TABLE `brand`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `picture`
--
ALTER TABLE `picture`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `raisons`
--
ALTER TABLE `raisons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `sizeChart`
--
ALTER TABLE `sizeChart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `fk_picture_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_brand1` FOREIGN KEY (`brand_id`) REFERENCES `brand` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `product_has_sizeChart`
--
ALTER TABLE `product_has_sizeChart`
  ADD CONSTRAINT `fk_product_has_sizeChart_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_has_sizeChart_sizeChart1` FOREIGN KEY (`sizeChart_id`) REFERENCES `sizeChart` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_raisons1` FOREIGN KEY (`raisons`) REFERENCES `raisons` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
