-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 15 2020 г., 18:49
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `milk-department`
--

-- --------------------------------------------------------

--
-- Структура таблицы `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `branc` varchar(255) NOT NULL,
  `shift` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `position`, `branc`, `shift`, `date`) VALUES
(1, 'Іванов Іван Іванович', 'Технолог', 'Відділ виготовлення', 1, '2020-10-04'),
(2, 'Киселев Антон Геннадійович', 'Розливальник', 'Відділ виготовлення', 1, '2020-10-04'),
(3, 'Ромова Анастасія Вікторівна', 'Розливальник', 'Відділ виготовлення', 2, '2020-10-04'),
(4, 'Вернадський Олександр Андрійович', 'Грузчик', 'Відділ доставки', 1, '2020-10-05');

-- --------------------------------------------------------

--
-- Структура таблицы `purchase`
--

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL,
  `product` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `purchase`
--

INSERT INTO `purchase` (`id`, `product`, `city`, `quantity`, `price`, `date`) VALUES
(1, 'Молоко', 'Черкаси', 100, 5, '2020-10-04'),
(2, 'Молоко', 'Сміла', 70, 4, '2020-10-05');

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `date_part` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`id`, `product_id`, `shop_id`, `quantity`, `price`, `date_part`) VALUES
(1, 1, 1, 20, 15, '2020-10-04'),
(2, 1, 2, 30, 17, '2020-10-04'),
(3, 1, 3, 50, 14, '2020-10-04'),
(4, 2, 2, 40, 14, '2020-10-05'),
(5, 2, 3, 30, 16, '2020-10-05');

-- --------------------------------------------------------

--
-- Структура таблицы `shops`
--

CREATE TABLE `shops` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `shops`
--

INSERT INTO `shops` (`id`, `name`, `address`) VALUES
(1, 'Польова ромашка', 'вул. Хрещатик 120 буд.3, м. Черкаси'),
(2, 'Казбет', 'бульв. Шевченка 236, м. Черкаси'),
(3, 'Деликат', 'вул. Франка 50, м. Черкаси');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `shops`
--
ALTER TABLE `shops`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
