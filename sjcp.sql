-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июн 14 2019 г., 16:34
-- Версия сервера: 5.7.17
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `sjcp`
--

-- --------------------------------------------------------

--
-- Структура таблицы `travel_groups`
--

CREATE TABLE `travel_groups` (
  `id` int(11) NOT NULL,
  `country` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `description` varchar(512) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `travel_groups`
--

INSERT INTO `travel_groups` (`id`, `country`, `place`, `description`, `start_date`, `end_date`, `price`) VALUES
(1, 'asd', 'asd', 'asd', '2019-05-17', '2019-05-09', 123),
(2, 'qwe', 'qwe', 'qweqwqe', '2019-05-17', '2019-05-26', 12);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `date` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `howOften` varchar(50) DEFAULT NULL,
  `lastVisited` varchar(50) DEFAULT NULL,
  `wantVisit` varchar(50) DEFAULT NULL,
  `interests` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `type`, `email`, `name`, `surname`, `date`, `gender`, `howOften`, `lastVisited`, `wantVisit`, `interests`) VALUES
(4, 'admin', 'admin', 'admin', 'admin@admin.com', 'Admins', 'Admins', '', '', '0', 'No', 'No', ''),
(5, 'user101', 'user', 'user', '', '', '', '', '', '0', 'No', 'No', ''),
(15, 'asd', 'asd', 'user', 'asd', 'asd', 'asd', '06/11/2019', 'Male', '1', 'Azerbaijan', 'Bangladesh', 'asd'),
(50, 'qwe', 'qwe', 'user', 'qwe', 'qwe', 'qwe', '06/14/2019', 'Male', NULL, NULL, NULL, NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `travel_groups`
--
ALTER TABLE `travel_groups`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `travel_groups`
--
ALTER TABLE `travel_groups`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
