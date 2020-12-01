-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 01 2020 г., 14:39
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
  `mail` varchar(255) NOT NULL,
  `confirm_mail` varchar(255) NOT NULL,
  `verifided` int(11) NOT NULL DEFAULT 0,
  `password` varchar(255) NOT NULL,
  `admin` varchar(11) NOT NULL DEFAULT '0',
  `position` varchar(255) NOT NULL,
  `branc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `employees`
--

INSERT INTO `employees` (`id`, `name`, `mail`, `confirm_mail`, `verifided`, `password`, `admin`, `position`, `branc`) VALUES
(1, 'Іванов Іван Іванович', '', '', 0, '', '0', 'Технолог', 'Відділ виготовлення'),
(2, 'Киселев Антон Геннадійович', '', '', 0, '', '0', 'Розливальник', 'Відділ виготовлення'),
(3, 'Ромова Анастасія Вікторівна', '', '', 1, '', '0', 'Розливальник', 'Відділ виготовлення'),
(9, 'Кавицька Юлія Олександрівна', 'julia.k106.l7@gmail.com', '09yMwqnHkDbjLEBwbbgX', 1, 'a870581c1dcd2385b619cc88fbd60387', '1', 'Директор', 'Головний'),
(10, 'Крадько Олександр Олегович', 'n@n.n', 'ZDkmeJFw8oXTl07C2uVP', 0, '248ec08314f5898abe40891002826665', '0', 'Молодший інжинер', 'Технічний'),
(11, 'фіва фіва фіва', 'julia@gmail.com', 'hwTw2mUDw8hreWXtYFdm', 1, '2dc722d6b45158957a72476480aade3f', '0', 'фіва', 'фіва');

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
(4, 'Молоко 3,2%', 'Київ', 250, 7, '2020-11-26'),
(5, 'Молоко 2,5%', 'Худяки', 150, 4, '2020-11-27'),
(6, 'Молоко 3,2%', 'Сміла', 200, 6, '2020-11-19'),
(7, 'Молоко 2,5%', 'Київ', 300, 5, '2020-11-22');

-- --------------------------------------------------------

--
-- Структура таблицы `sale`
--

CREATE TABLE `sale` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `sale`
--

INSERT INTO `sale` (`id`, `product_id`, `shop_id`, `quantity`, `price`) VALUES
(1, 1, 1, 20, 15),
(2, 1, 2, 30, 19),
(6, 1, 1, 10, 20),
(7, 1, 2, 12, 45),
(8, 1, 3, 20, 14);

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
(3, 'Деликат', ' м. Черкаси'),
(7, 'Robert', 'Борщагівська 146');

-- --------------------------------------------------------

--
-- Структура таблицы `working`
--

CREATE TABLE `working` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `shift` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `working`
--

INSERT INTO `working` (`id`, `user_id`, `shift`, `date`) VALUES
(1, 1, 2, '0000-00-00'),
(2, 2, 1, '0000-00-00'),
(5, 2, 2, '2020-11-01'),
(6, 3, 1, '2020-11-06'),
(7, 2, 1, '2020-11-01'),
(8, 9, 1, '2020-11-01'),
(9, 10, 2, '2020-11-01');

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
-- Индексы таблицы `working`
--
ALTER TABLE `working`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `working`
--
ALTER TABLE `working`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
