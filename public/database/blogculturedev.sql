-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 jan. 2023 à 10:25
-- Version du serveur : 10.4.25-MariaDB
-- Version de PHP : 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blogculturedev`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(21, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(22, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(23, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(24, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(25, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(26, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(27, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(28, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(29, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(30, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(31, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(32, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(33, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(34, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(35, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(36, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(37, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(38, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(39, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(40, 'Curran Burns', 'minik@mailinator.com', '$2y$10$bjQhpqdIRqXY4I4w/M4YHe4kfIbhseSkYdyFpdv6Azrhz1/J/O0e2'),
(41, 'Curran Burns', 'minik@mailinator.com', '$2y$10$TLDeE4purvZ8v3SpPcwmwOUwbqqoYBYOMolQlbrwLAtCiFHvcEZzS'),
(42, 'Tucker Hopper', 'cari@mailinator.com', '$2y$10$9//ypMOQz51V/uBr8AWv8e8Z97MTttKlsG5YnHjVQ0.OPrU8DHrQa'),
(43, 'Macey                 jkkkPotts', 'lucakyhe@mailinator.com', '$2y$10$m21GA42s2NiR9h50AFM3w.ESCuhPsgzqASFQBt2B8le9Axpagk3o6'),
(44, 'Germde        ain           e Jarvis', 'rypakydy@mailinator.com', '$2y$10$PfAI3abRfOgjyGuHr4rM9.yPOXVCpp4mQGyrdCuxQvTMGjwJwriaG'),
(45, 'Germde        ain           e Jarvis', 'rypakydy@mailinator.com', '$2y$10$5HTw4IrjlE1BnWbaDLR0zO5090vQJk/812blQeSNqXkw4yuh9xvcW'),
(46, 'Beve        rly Potts', 'lelo@mailinator.com', '$2y$10$6xr1u8NgDtiY5vyUH9dya.T9PLgQNXnEV5V2L.j4e1cI9jUMFCU3i'),
(47, 'Beve        rly Potts', 'lelo@mailinator.com', '$2y$10$jMUMTtNsYtoO6WKdlE/j1OjgadCcTWFqnNTiY35LEORBIYVMNBsN6'),
(48, 'Beve        rly Potts', 'lelo@mailinator.com', '$2y$10$XGimLNktZY5zsmorq/gU/e5Ew19UxI5tt4.NcFgOZQtcXFI6P5Al6'),
(49, 'Beve        rly Potts', 'lelo@mailinator.com', '$2y$10$cX3VXNky9k.m4O85OskUROTF23TRbqQ0NrW7ZKpQSED53NuokvKgi'),
(50, 'September Drake', 'tehy@mailinator.com', '$2y$10$audXEs5UeFaAj8.mvCqqs.XGWCiLuQSO9IfKqOn5E1OOJ7lbtL35y'),
(51, 'Christopher Cu                                 mmings', 'xoqele@mailinator.com', '$2y$10$oQsPmncamBaXbQ0TML8iUOlJ0DodqgqOAMG3akRfCnuC2K8GhZlf6'),
(52, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$s4Q6/CygmzDsllcZ4GebHuCYqzrOlij6EZaeOjpsN683j4SzVY43W'),
(53, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$rH9AdLdpsBUFsrSM4AidM.pqKbFavlvPvBytH7EqOmVX9vhrbFwQS'),
(54, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$.bK4h4iSWVnMZ7iqIkz7y.t0DXoppPwXt87hbmTvC5EBl0n73nRYG'),
(55, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$vnh3Bn1h35D79jwLvfnRS.NChLTjFe1qRqEraLH4pW8Xrx9ixmhaO'),
(56, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$FnYPzH4v8KZ8T4Lucj50suQnnmMN97ZxxIxzVyTq5mDYebkmEH6AG'),
(57, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$t.Kn42wf35ToyCl.zcu08.TjVwDzznXJEUZSNLvdkoQ6.V7FoX8Iy'),
(58, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$Xy4TujqfeokGlAr4uL.4WOV21VNCiclOBwgZaJjvv5c3kcL8sarpu'),
(59, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$xEG7gYV9nvRU3mVTx6pGwesPYEALLZlWATeprSbEMhTAB3JtrYKNm'),
(60, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$DA9eYrc.WDZKMGIYjyeTQORnpLIB9NqNaTCmdpOKY3GzQiwxaf0VS'),
(61, 'Zelda Hodge', 'hywyl@mailinator.com', '$2y$10$dugAVXMuZqYfknpQVL317usOvydnPzhBHQ38h5OFJVkooBjWa6E9G'),
(62, 'Hu Hebert', 'fyzy@mailinator.com', '$2y$10$ee8NKbwoFROXYztSmtN8h.JcKSMpYEPQqk3r66s2WzR32/06A5rpm'),
(63, 'Hu Hebert', 'fyzy@mailinator.com', '$2y$10$fPLHt00DtgW4HFQ7c9/lXebG1mMmeOl3l2pInHMskYusaq9lTbTqG'),
(64, 'Hu Hebert', 'fyzy@mailinator.com', '$2y$10$lG4E1VK826YPZHXCZUsPauky1TIJAfNCYiEitgrvnekohl9Zvr5Sm'),
(65, 'Hu Hebert', 'fyzy@mailinator.com', '$2y$10$PrWKBdSlHfiFRxX1WEUSSeZJHr66aL94mAX5V5hxYR7yykPyMz3uK'),
(66, 'Hu Hebert', 'fyzy@mailinator.com', '$2y$10$oVizKjVwICF7sFCyq4VeGOYBJJc/.VwBn2TXwxv/GS2dRqEG8n3MS'),
(67, 'Hu Hebert', 'fyzy@mailinator.com', '$2y$10$viJchxaovdb0Ehvr9rFRaOwVPNM0drE4EmOSC..z.ZvRV3I24vp9C'),
(68, 'Stacey Santos', 'vanakyju@mailinator.com', '$2y$10$Oa/4PEbdbV6dDNesnWEOcutvtSwupPACtPKj5lE950kBr27vWVjwa'),
(69, 'Stacey Santos', 'vanakyju@mailinator.com', '$2y$10$0iZ22GQrToCEEGoDj5Px7OesHiTw1XCCMNI4B9/7R8aXVNUaMR5wW'),
(70, 'Igor Marquez', 'metomy@mailinator.com', '$2y$10$2/E1FXgpsmbzW89ANBngTejkLzU3EgblwQ3UPkTfOv6s7raYnOdNS'),
(71, 'Igor Marquez', 'metomy@mailinator.com', '$2y$10$ijS5220n1ZGjfHcP91Yieeg/aguSvQrHkhUf9jt3.kN8TDbrP6oX2'),
(72, 'Quyn Chambers', 'juqapuno@mailinator.com', '$2y$10$/tT.zRc17CARfq8b1fUO.uW.PFaH/sJoaHJhuv5ROC8HNTQ2db8N6'),
(73, 'Erasmus Moran', 'zicyfybose@mailinator.com', '$2y$10$q8sqKl04cX.LvAGopH2dKOr9gPJlbyx4edIclsdsjaLYJUz/clQFG'),
(74, 'Rhona Ferrell', 'texyjaraf@mailinator.com', '$2y$10$vxKZQNHtBO8Dhny8QffSkuOSUEMxSj2iiWDMjq83D8gGxOwd7tlHe'),
(75, 'Rhona Ferrell', 'texyjaraf@mailinator.com', '$2y$10$MUSvsYKH5qxAd/YWWr8sHeOcWTvBkJw3Sdw.g1NwYc1h0SSEAk4Hq'),
(76, 'Hiroko Petersen', 'vepamul@mailinator.com', '$2y$10$A6lIhTdlxn69P8jYJt6RSeIATl4r1mpkvdvMs0iizC8ArvS1hd.3m'),
(77, 'Hiroko Petersen', 'vepamul@mailinator.com', '$2y$10$d0HdRcwvI9YioI95A6BU7e9zl0k9Racy5K2JiatP07TzcgLHrvMm2'),
(78, 'Igor Merritt', 'dofydukyk@mailinator.com', '$2y$10$TZI7e/QiQ3vNzovrUhVbtemPZGw9yrkC11mrpPG.Xejk.GTRtvN3S'),
(79, 'Clio Davis', 'pemisovu@mailinator.com', '$2y$10$4saxi9eCkzknBS52pvcjveiuJwnfiyZi1lBEcuq3GOh26J3JYnmiG'),
(80, 'Zeph Reilly', 'wejig@mailinator.com', '$2y$10$FKsTA1n/EB5OTrJ6coxLkOCrY5r5apwavnHXLUH3DGGYEiMuR.LrC');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `admin_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
