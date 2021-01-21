-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 18 2021 г., 17:31
-- Версия сервера: 10.4.13-MariaDB
-- Версия PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testgo`
--

-- --------------------------------------------------------

--
-- Структура таблицы `r4a4f13`
--

CREATE TABLE `r4a4f13` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `answer_4` varchar(255) NOT NULL,
  `answ_right` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `r4a4f13`
--

INSERT INTO `r4a4f13` (`id`, `question`, `images`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answ_right`) VALUES
(1, '11+11', 'img/', '12', '20', '21', '22', '4'),
(2, '22+22', 'img/', '11', '22', '44', '40', '3'),
(3, '33+33', 'img/', '33', '66', '44', '22', '2'),
(4, '44+44', 'img/', '88', '66', '77', '33', '1'),
(5, '55+55', 'img/', '56', '78', '95', '110', '4'),
(6, '66+66', 'img/', '132', '110', '98', '59', '1'),
(7, '77+77', 'img/', '454', '54', '554', '154', '4'),
(8, '88+88', 'img/', '184', '120', '157', '176', '4'),
(9, '99+99', 'img/', '181', '210', '321', '198', '4'),
(10, '10+20', 'img/', '10', '20', '30', '40', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `r8e6745`
--

CREATE TABLE `r8e6745` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `answer_4` varchar(255) NOT NULL,
  `answ_right` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `r8e6745`
--

INSERT INTO `r8e6745` (`id`, `question`, `images`, `answer_1`, `answer_2`, `answer_3`, `answer_4`, `answ_right`) VALUES
(1, 'Кто это?', 'img/1.jpg', 'собака', 'кот', 'хомяк', 'попугай', '2'),
(2, 'Кто это?', 'img/3.jpg', 'морская свинка', 'кошка', 'кролик', 'щенок', '4'),
(3, 'Кто это?', 'img/2.jpg', 'заяц', 'волк', 'тигр', 'олень', '2'),
(4, 'Кто является домашним животным?', 'img/', 'лось', 'свинья', 'белка', 'лиса', '2'),
(5, 'Кто является домашним животным?', 'img/', 'коза', 'жираф', 'носорог', 'дельфин', '1'),
(6, 'Кто является диким животным?', 'img/', 'корова', 'лев', 'индюк', 'баран', '2'),
(7, 'Кто живёт в воде?', 'img/', 'зебра', 'страус', 'цапля', 'акула', '4'),
(8, 'Кто умеет летать?', 'img/', 'страус', 'пингвин', 'журавль', 'индюк', '3'),
(9, 'Кто из животных - хищник?', 'img/', 'бык', 'гусь', 'слон', 'лисица', '4'),
(10, 'Какое животное откладывает яйца?', 'img/', 'лошадь', 'крокодил', 'касатка', 'носорог', '2');

-- --------------------------------------------------------

--
-- Структура таблицы `rabc5bf`
--

CREATE TABLE `rabc5bf` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `images` varchar(255) NOT NULL,
  `answer_1` varchar(255) NOT NULL,
  `answer_2` varchar(255) NOT NULL,
  `answer_3` varchar(255) NOT NULL,
  `answer_4` varchar(255) NOT NULL,
  `answ_right` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `test_id` varchar(11) NOT NULL,
  `result` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `user_id`, `test_id`, `result`, `date`) VALUES
(17, '2', 'r58fbe1', 5, '2021-01-18 12:42:22'),
(18, '2', 'r8e6745', 10, '2021-01-18 14:57:03'),
(19, '0', 'r4a4f13', 8, '2021-01-18 17:51:17'),
(20, '', 'r4a4f13', 8, '2021-01-18 17:56:20'),
(21, '', 'r4a4f13', 8, '2021-01-18 17:56:22'),
(22, '', 'r4a4f13', 8, '2021-01-18 17:56:28'),
(23, '', 'r4a4f13', 8, '2021-01-18 18:02:28'),
(24, '', 'r4a4f13', 5, '2021-01-18 18:12:31'),
(25, '', 'r4a4f13', 5, '2021-01-18 18:14:10'),
(26, '', 'r4a4f13', 5, '2021-01-18 18:14:12'),
(27, '', 'r4a4f13', 5, '2021-01-18 18:14:15'),
(28, 'Sergey', 'r4a4f13', 5, '2021-01-18 18:20:50');

-- --------------------------------------------------------

--
-- Структура таблицы `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `test_id` varchar(10) NOT NULL,
  `test_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tests`
--

INSERT INTO `tests` (`id`, `test_id`, `test_name`) VALUES
(4, 'r4a4f13', 'Математика: Сложение двоичных чисел'),
(5, 'r8e6745', 'Животные'),
(6, 'rabc5bf', 'ghjgjghjg');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(1, 'Sergey', '111', '111');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `r4a4f13`
--
ALTER TABLE `r4a4f13`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `r8e6745`
--
ALTER TABLE `r8e6745`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rabc5bf`
--
ALTER TABLE `rabc5bf`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `r4a4f13`
--
ALTER TABLE `r4a4f13`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `r8e6745`
--
ALTER TABLE `r8e6745`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `rabc5bf`
--
ALTER TABLE `rabc5bf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT для таблицы `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
