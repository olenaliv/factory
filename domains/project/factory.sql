-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2019 г., 11:10
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `factory`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `id_position` int(11) NOT NULL DEFAULT '0',
  `id_vacation` int(11) NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `id_position`, `id_vacation`, `number`) VALUES
(17, 'Пивень Максим Георгиевич', 6, 7, 114),
(16, 'Власова Ольга Ивановна', 5, 6, 113),
(15, 'Иванов Владислав Иванович', 4, 5, 112),
(14, 'Петренко Игорь Владимирович', 6, 4, 111),
(18, 'Шуман Илона Викторовна', 6, 8, 115),
(20, 'Лымар Анантолий Анатолиевич', 7, 9, 116);

-- --------------------------------------------------------

--
-- Структура таблицы `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `position`
--

INSERT INTO `position` (`id`, `name`, `description`) VALUES
(4, 'Должность 1', 'Описание должности 1'),
(5, 'Должность 2', 'Описание должности 2'),
(6, 'Должность 3', 'Описание должности 3'),
(7, 'Должность 4', 'Описание должности 4');

-- --------------------------------------------------------

--
-- Структура таблицы `vacation`
--

CREATE TABLE `vacation` (
  `id` int(11) NOT NULL,
  `id_employees` int(11) NOT NULL DEFAULT '0',
  `date_from` date DEFAULT NULL,
  `date_into` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=cp1251;

--
-- Дамп данных таблицы `vacation`
--

INSERT INTO `vacation` (`id`, `id_employees`, `date_from`, `date_into`) VALUES
(4, 14, '2019-01-01', '2019-01-10'),
(5, 15, '2019-06-05', '2019-06-20'),
(6, 16, '2019-03-26', '2019-03-31'),
(7, 17, '2019-04-10', '2019-04-18'),
(8, 18, '2019-07-11', '2019-07-18'),
(9, 20, '2019-08-07', '2019-08-13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vacation`
--
ALTER TABLE `vacation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT для таблицы `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `vacation`
--
ALTER TABLE `vacation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
