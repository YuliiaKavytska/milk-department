-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 05 2020 г., 17:39
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
(9, 'Кавицька Юлія Олександрівна', 'julia.k106.l7@gmail.com', '09yMwqnHkDbjLEBwbbgX', 1, 'a870581c1dcd2385b619cc88fbd60387', '1', 'Директор', 'Головний'),
(12, 'Климов Іван Миколайович', 'k@k.k', 'fJ264K7vyP6wvkxN97X3', 0, '105f307da010a93cfb31e27533fc9c23', '0', 'Зам директора', 'Головний'),
(13, 'Минаїв Михайло Геннадійович', 'm@m.m', 'ZWgUY3awsaau4ilsS71Y', 0, '8985310cab32bcbb9ca556b0bdbe475e', '0', 'Розливальник', 'Виготовлення'),
(14, 'Кожара Катерина Миколаївна', 'k@k.k', 'eLyCfE9Mfc7KrBJ6Z180', 0, '105f307da010a93cfb31e27533fc9c23', '0', 'Технолог', 'Виготовлення'),
(15, 'Ющенко Катерина Віталіївна', 'y@y.y', 'sX0gatKjmdkCeNtxK4zx', 0, '05ca2524c2af609aa1481fad53f17274', '0', 'Прибиральниця', 'Допоміжний'),
(16, 'Ємець Анастасія Василівна', 'e@e.e', 'vG3Ci4ta7vsZUjPgOgua', 0, '8d6d6aa99cf40b7f80ebdbd112f534ac', '0', 'Бухгалтер', 'Бухгалтерія'),
(17, 'Яременко Михайло Олександрович', 'ya@ya.ya', '4veYKQIKIBvfiYggOEcq', 0, 'def9202638585b3a0be6f1396a29d677', '0', 'Начальник цеху', 'Технічний'),
(18, 'Іванов Микола Андрійович', 'i@i.i', 'T6q9IQXTY9tc8GHmPcgm', 0, '6de935e9a0804d37305573c317a0c595', '0', 'Розливальник', 'Виготовлення'),
(19, 'Єршов Олександр Олегович', 'er@er.er', 'fhg9uiai4xtBQk2VsqDz', 0, 'd2b8d9a2bafbc6413fc608ff7539a6ad', '0', 'Пакувальник', 'Виготовлення'),
(20, 'Афанасьєв Андрій Валерійович', 'a@a.a', 'WUCEhW7NgGhslOOEwFMy', 0, '177ea4f7870464a0a7138ff4d2757497', '0', 'Грузчик', 'Відділ доставки'),
(21, 'Ключник Сергій Вікторович', 'k@k.k', 'Dfgg0rrX3UsfImthq7nJ', 0, '105f307da010a93cfb31e27533fc9c23', '0', 'Водій', 'Відділ доставки'),
(22, 'Погорелова Дарья Ігорівна', 'p@p.p', 'FuZaNUthZgivYd8nfKu1', 1, '1dfd6fdfe4a1a0bd05342f7c294ecd16', '0', 'Розливальник', 'Виготовлення');

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
(4, 'Молоко 3,2%', 'Київ', 250, 7, '2020-11-23'),
(5, 'Молоко 2,5%', 'Худяки', 150, 4, '2020-11-25'),
(6, 'Молоко 3,2%', 'Сміла', 200, 6, '2020-11-02'),
(7, 'Молоко 2,5%', 'Київ', 300, 5, '2020-11-04'),
(10, 'Молоко 3,2%', 'Сміла', 200, 6, '2020-11-09'),
(11, 'Молоко 1,0%', 'Київ', 300, 6, '2020-11-16'),
(12, 'Молоко 1,0%', 'Сміла', 400, 5, '2020-11-18'),
(13, 'Молоко 2,5%', 'Драбів', 150, 4, '2020-11-30'),
(14, 'Молоко 2,5%', 'Київ', 200, 5, '2020-12-02');

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
(18, 4, 9, 50, 23),
(19, 4, 10, 70, 24),
(20, 4, 11, 100, 25),
(21, 4, 12, 30, 25),
(22, 5, 10, 70, 21),
(23, 5, 14, 80, 22),
(24, 5, 15, 90, 23),
(25, 6, 13, 85, 24),
(26, 6, 11, 80, 20),
(27, 6, 11, 80, 22),
(28, 7, 10, 100, 24),
(29, 7, 9, 50, 23),
(30, 10, 10, 90, 25),
(31, 11, 13, 100, 20),
(32, 13, 14, 50, 22),
(33, 14, 12, 65, 22),
(34, 12, 10, 76, 24),
(35, 11, 15, 90, 26),
(36, 11, 9, 55, 22),
(37, 10, 13, 30, 19);

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
(9, 'Казбет', 'бульвар Шевченка, 133, Черкаси, Черкаська область, 18000'),
(10, 'Сільпо', 'вулиця Пушкіна, 67, Черкаси, Черкаська область, 18000'),
(11, 'Машунька', 'вулиця Надпільна, 180, Черкаси, Черкаська область, 18000'),
(12, 'Деликат', 'вулиця Надпільна, 162, Черкаси, Черкаська область, 18031'),
(13, 'Україна', '114, бульвар Шевченка, Черкаси, Черкаська область, 18000'),
(14, 'Велика кишеня', 'вулиця Кавказька, 103, Черкаси, Черкаська область, 18000'),
(15, 'АТБ', 'Весела вулиця, 9, Черкаси, Черкаська область, 18000');

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
(11, 12, 1, '2020-11-02'),
(12, 15, 1, '2020-11-02'),
(13, 19, 2, '2020-11-02'),
(14, 20, 1, '2020-11-02'),
(15, 14, 1, '2020-11-04'),
(16, 18, 1, '2020-11-02'),
(17, 22, 2, '2020-11-04'),
(18, 16, 2, '2020-11-09'),
(19, 13, 2, '2020-11-09'),
(20, 12, 2, '2020-11-09'),
(21, 17, 1, '2020-11-09'),
(22, 21, 1, '2020-11-11'),
(23, 9, 1, '2020-11-11'),
(24, 21, 1, '2020-11-16'),
(25, 15, 1, '2020-11-16'),
(26, 20, 2, '2020-11-16'),
(27, 17, 1, '2020-11-16'),
(28, 14, 2, '2020-11-18'),
(29, 16, 2, '2020-11-18'),
(30, 22, 1, '2020-11-25'),
(31, 9, 1, '2020-11-11'),
(32, 15, 1, '2020-11-11'),
(33, 19, 2, '2020-11-18'),
(34, 19, 1, '2020-11-18'),
(35, 21, 2, '2020-11-18'),
(36, 15, 2, '2020-11-23'),
(37, 17, 1, '2020-11-23'),
(38, 22, 2, '2020-11-23'),
(39, 20, 1, '2020-11-23'),
(40, 18, 1, '2020-11-23'),
(41, 13, 2, '2020-11-30'),
(42, 9, 1, '2020-11-30'),
(43, 15, 2, '2020-11-30'),
(44, 21, 1, '2020-11-30'),
(45, 12, 1, '2020-11-25'),
(46, 19, 1, '2020-11-25');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT для таблицы `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `sale`
--
ALTER TABLE `sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT для таблицы `shops`
--
ALTER TABLE `shops`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `working`
--
ALTER TABLE `working`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
