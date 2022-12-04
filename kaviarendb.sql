-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Sun 04.Dec 2022, 16:09
-- Verzia serveru: 10.4.21-MariaDB
-- Verzia PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `kaviarendb`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `cafe_menu`
--

CREATE TABLE `cafe_menu` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `image` varchar(45) NOT NULL,
  `size_S` varchar(45) NOT NULL,
  `size_M` varchar(45) NOT NULL,
  `size_L` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `type` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `cafe_menu`
--

INSERT INTO `cafe_menu` (`id`, `sys_name`, `display_name`, `image`, `size_S`, `size_M`, `size_L`, `created_at`, `updated_at`, `type`) VALUES
(59, 'hotCappucino', 'Hot Cappucino', 'menu-item-1.jpg', '8.50', '', '10.50', '2022-12-04 15:34:37', '2022-12-04 16:00:40', 'hot'),
(60, 'hotAmericano', 'Hot Americano', 'menu-item-2.jpg', '9.50', '', '12.50', '2022-12-04 15:36:53', '2022-12-04 15:36:53', 'hot'),
(61, 'hotLatte', 'Hot Latte', 'menu-item-3.jpg', '', '11.75', '14.75', '2022-12-04 15:37:33', '2022-12-04 15:37:33', 'hot'),
(62, 'hotEspresso', 'Hot Espresso', 'menu-item-4.jpg', '', '11.75', '14.75', '2022-12-04 15:38:02', '2022-12-04 15:38:02', 'hot'),
(63, 'icedCappucino', 'Iced Cappuccino', 'menu-item-5.jpg', '12.50', '', '16.50', '2022-12-04 15:38:42', '2022-12-04 15:38:42', 'iced'),
(64, 'icedMilkyLatte', 'Iced Milky Latte', 'menu-item-7.jpg', '14', '', '18', '2022-12-04 15:39:29', '2022-12-04 15:39:29', 'iced'),
(65, 'icedMocha', 'Iced Mocha', 'menu-item-8.jpg', '10', '', '15', '2022-12-04 15:40:20', '2022-12-04 15:40:20', 'iced'),
(66, 'icedAmericano', 'Iced Americano', 'menu-item-6.jpg', '12.50', '14.50', '16.50', '2022-12-04 15:42:10', '2022-12-04 15:42:10', 'iced');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `content` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `content`
--

INSERT INTO `content` (`id`, `sys_name`, `display_name`, `content`, `created_at`, `updated_at`) VALUES
(1, 'intro', 'Antique Cafe', '<div class=\"bg-black bg-opacity-70 p-10 mb-5\">\r\n                    <p class=\"text-white leading-8 text-sm font-light\">\r\n                        This is a coffee shop template named Antique Cafe which is a parallax HTML5 template with a good responsiveness.\r\n                        Feel free to use this layout for your cafe.\r\n                        If you have any question, please <a rel=\"nofollow\" href=\"https://www.tooplate.com/contact\" target=\"_parent\">send us a message</a>. </p>\r\n                </div>', '2022-11-22 19:18:32', '2022-12-04 15:58:01'),
(2, 'about', 'About our cafe', '<p class=\"mb-6 text-base leading-8\">\r\n                        Images are taken from Pexels, a great stock photo website. This template used Tailwind CSS. You may modify Antique Cafe template in any way you prefer and use it for your website.\r\n                    </p>\r\n                    <p class=\"text-base leading-8\">\r\n                        If you wish to <a rel=\"nofollow\" href=\"https://www.tooplate.com/contact\" target=\"_parent\">support us</a>, please make a little donation via PayPal. That would be\r\n                        very helpful. Another way is to tell your friends about Tooplate website. Thank you. </p>', '2022-11-22 19:48:40', '2022-12-04 15:58:09'),
(3, 'contact', 'Contact Us', '<p class=\"mb-6 text-lg leading-8\">\r\n                        Praesent tellus magna, consectetur sit amet volutpat eu, pulvinar vitae sem.\r\n                        Sed ultrices.\r\n                    </p>\r\n                    <p class=\"mb-10 text-lg\">\r\n                        <span class=\"block mb-2\">Tel: <a href=\"tel:0100200340\" class=\"hover:text-yellow-600 transition\">010-020-0340</a></span>\r\n                        <span class=\"block\">Email: <a href=\"mailto:info@company.com\" class=\"hover:text-yellow-600 transition\">info@company.com</a></span>\r\n                    </p>', '2022-11-22 19:54:01', '2022-11-22 19:54:01');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `email`
--

CREATE TABLE `email` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Sťahujem dáta pre tabuľku `email`
--

INSERT INTO `email` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(32, 'Janko Mrkvicka', 'jankomrkvicka@gg.com', 'Hello', '2022-12-04 15:53:01', '2022-12-04 15:53:01'),
(33, 'AA BB', 'aabb@gg.com', 'Hi!', '2022-12-04 15:54:32', '2022-12-04 15:54:32'),
(34, 'Patrik M', 'patrikM@gg.com', 'dddfff', '2022-12-04 15:55:16', '2022-12-04 15:55:33');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `sys_name` varchar(45) NOT NULL,
  `display_name` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `sys_name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'intro', 'Intro', '2022-12-03 15:47:46', '2022-12-04 15:58:48'),
(2, 'menu', 'Menu', '2022-12-03 15:48:14', '2022-12-03 15:48:14'),
(3, 'about', 'About', '2022-12-03 15:48:14', '2022-12-04 14:27:25'),
(4, 'contact', 'Contact', '2022-12-03 15:48:43', '2022-12-03 15:48:43');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(2, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `cafe_menu`
--
ALTER TABLE `cafe_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sys_name_UNIQUE` (`sys_name`);

--
-- Indexy pre tabuľku `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `cafe_menu`
--
ALTER TABLE `cafe_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT pre tabuľku `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pre tabuľku `email`
--
ALTER TABLE `email`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
