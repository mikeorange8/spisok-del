-- phpMyAdmin SQL Dump
-- version 4.0.4.2
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Мар 05 2017 г., 15:59
-- Версия сервера: 5.6.13
-- Версия PHP: 5.4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `sd`
--
CREATE DATABASE IF NOT EXISTS `sd` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sd`;

-- --------------------------------------------------------

--
-- Структура таблицы `date`
--

CREATE TABLE IF NOT EXISTS `date` (
  `id_date` int(30) NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `data` date NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id_date`),
  KEY `id_date` (`id_date`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=43 ;

--
-- Дамп данных таблицы `date`
--

INSERT INTO `date` (`id_date`, `value`, `data`, `id_user`) VALUES
(5, 'ÐŸÑ€Ð¸Ð²ÐµÑ‚Ð¸Ðº ÐµÑ‰Ðµ Ñ€Ð°Ð·', '2016-12-16', 13),
(7, 'dobriy vecher ya dispetcher', '2016-12-31', 16),
(33, 'ÐÐ¸Ñ‡ÐµÐ³Ð¾ Ð½ÐµÑ‚', '2016-12-24', 16),
(34, 'sdasdas', '2016-12-29', 16),
(35, 'roma', '2016-12-09', 16),
(36, 'chub dz', '2016-12-10', 16),
(37, 'erem dz + lev kurs', '2016-12-11', 16),
(38, 'lev dz', '2016-12-12', 16),
(39, 'Ñ‡Ñ‚Ð¾-Ñ‚Ð¾ ÐµÑÑ‚ÑŒ', '2016-12-27', 13),
(40, 'hgfjgkjb', '2016-12-23', 13),
(41, 'zxczxz', '2017-03-23', 17),
(42, 'wqeqweqw', '2017-03-18', 17);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(70) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `email`) VALUES
(1, 'asdasd', 'dsadasdsa', 'wqeqwe@wqeqweq'),
(10, 'qwewqe', 'qweqwee', 'qweqwe@qwee'),
(11, 'zdraste', 'dosvidos', 'sada@adq'),
(13, 'qwerr', 'qwe', 'qwe@qweq'),
(14, 'qeqweq', 'qweqweqwe', 'qwewqeqw@qweqw'),
(15, 'Marina', 'King', 'emmkm@mail.ru'),
(16, 'mishka', 'mishka', 'q@q'),
(17, 'qwe', 'qwe', 'qwe@qwe');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
