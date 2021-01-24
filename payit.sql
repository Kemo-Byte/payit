-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2020 at 04:33 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payit`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `cardid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `groupid` tinyint(4) NOT NULL DEFAULT '0',
  `balance` int(11) NOT NULL DEFAULT '0',
  `fullname` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'UnKnown',
  `email` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT 'example@example.com',
  `phone` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`cardid`, `username`, `password`, `status`, `groupid`, `balance`, `fullname`, `email`, `phone`) VALUES
(1, 'kamal', '$2y$10$Z.LpInW3S9OdMkzpAIbROeqxQbVxpCQ/zAxGYLnwyhZUufkfebMYu', 1, 1, 25, 'kamal kafi', 'kamalkafi12@gmail.com', 967769167),
(2, 'mohamed', '$2y$10$zn0NdTsDgbWB3vLXAhk4qu1/OgoDa7HQvTuwNNKhtyt0TTK1dUs3K', 0, 0, 3, 'mohamed Ahmed', 'm@m.com', 111),
(3, 'Ahmed', '$2y$10$TmE7Q2KsI9YdkZMlVTgr9OUO3cX2dttDYYDEGreYfgm7gyus7khnG', 1, 0, 5, 'Ahmed Fox', 'fox@gmail.com', 234),
(4, 'Ali', '$2y$10$dLIiZcvWqZDgd09XKjFwQuheZE/QrOTkydpPdlIo1ekDxIpAwhWom', 1, 0, 30, 'Ali mohmaed', 'example@example.com', 0),
(5, 'brram', '$2y$10$9KkmRkjr5l9DxVHEpXWp1.APQa/27AiJ6nFfSQqBdROkqZrpij3.i', 1, 0, 5, 'brram ibrahim', 'example@example.com', 0),
(6, 'ahhh', '$2y$10$LbsjizRmNebMS/Id/z/IvOqXbSdtnycUjotlBa9I8G/E8nHmHv3iq', 0, 0, 0, 'ahh', 'example@example.com', 0),
(7, 'ahh', '$2y$10$4BMo9q8sLbucGfdNeThdZuQYsjmux0hekQgHQ19MyPmYvH6JfiQ6i', 1, 0, 0, 'kl', 'example@example.com', 0),
(8, 'js', '$2y$10$FU1JPO/sK7fXpJpU0VOcF.JH2VmseyC6Rl/677VIrE.1gk14DewcW', 1, 0, 0, 'dfskdjf', 'example@example.com', 0),
(9, 'me', '$2y$10$4hlgjIWmX.by8cOeElGQJetWIihk5uDgddlkZqnztdjMoq/ouicD6', 1, 0, 0, 'asdfads', 'example@example.com', 0),
(10, 'mee', '$2y$10$UKhM2A7dJamOofNniGBVJ.HK/aN99t9L07gL4Ii6ZxtKXYU/ZSb0O', 1, 0, 0, 'lajf', 'example@example.com', 0),
(11, 'meee', '$2y$10$gjl1WPPMmNJglO.hp8jRgesyhtkcp6DZnBpwxSFmOAt1AmHNvyUf2', 1, 0, 0, 'asdfkj', 'example@example.com', 0),
(12, 'ahemd_fox', '$2y$10$jT.3W2BnjVDzUElNdKVNA.ZmwXDwYgmgw/7B61ZA1FEBlCAfJh4Re', 1, 0, 0, 'ahmed adam yhaya abakar', 'example@example.com', 0),
(13, 'basher', '$2y$10$G1jVH5eEKL.BV0nf7rqB7uoBuMFg5Yuo4nFzKiHlvv9yGIfis717m', 1, 0, 800, 'basheer edrees', 'example@example.com', 909551501),
(14, 'foxey', '$2y$10$2x3oiCb8PP.Nc9KmIWrGy.Zz3dly5uaGebHhBavpCoI.uxfc58Jb2', 1, 0, 200, 'ahmed aka fox', 'example@example.com', 966898119),
(15, 'ah', '$2y$10$aNuzSLTmcQgL4ga3egUZLuAJyI9NQb3rmb9abPyXPgdf6f5rjFUgO', 1, 0, 0, 'ah er', 'example@example.com', 0),
(16, 'ama', '$2y$10$jMiQEXM8refVrXYarVlBwuCh.AwJ7WkCPbIGKuyycPD4QJTr3Y6/u', 1, 0, 0, 'amam', 'example@example.com', 0),
(17, 'admin', '$2y$10$UceI.WuGfV3bf820Ih/7/Ovyaf3wvyPKNppTEJIiKQtLI0ngS62gC', 1, 1, 10000, 'administrator', 'example@example.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cardid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `cardid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
