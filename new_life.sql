-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 11 2024 г., 10:49
-- Версия сервера: 10.4.32-MariaDB
-- Версия PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `new_life`
--

-- --------------------------------------------------------

--
-- Структура таблицы `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `type_animal` varchar(256) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `mark` varchar(256) DEFAULT NULL,
  `address` varchar(256) DEFAULT NULL,
  `date_found` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `type_animal`, `description`, `mark`, `address`, `date_found`) VALUES
(1, 1, 'dog', 'Большая черная собака, дружелюбная', 'Шарик', 'ул. Ленина, 10', '2023-10-01'),
(2, 2, 'cat', 'Маленькая белая кошка с серыми пятнами', 'Мурка', 'пр. Мира, 5', '2023-10-02');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `surname` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `phone` varchar(256) NOT NULL,
  `passwords` varchar(256) NOT NULL,
  `agree` tinyint(1) NOT NULL,
  `api_token` varchar(256) DEFAULT NULL,
  `type` varchar(256) DEFAULT 'default'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `phone`, `passwords`, `agree`, `api_token`, `type`) VALUES
(1, 'Иван', 'Иванов', 'ivan.ivanov@mail.ru', '+7 900 123 45 67', 'password123', 1, 'token_ivan_123', 'default'),
(2, 'Анна', 'Петрова', 'anna.petrov@mail.ru', '+7 900 234 56 78', '456', 1, 'aGFzaD0xNzMzNzEwNzYwJmVtYWlsPWFubmEucGV0cm92QG1haWwucnUmcGFzc3dvcmQ9NDU2', 'default'),
(3, 'Сергей', 'Сергеев', 'sergey.sergeev@mail.ru', '+7 900 345 67 89', '789', 1, NULL, 'mod'),
(4, 'Ольга', 'Смирнова', 'olga.smirnova@mail.ru', '+7 900 456 78 90', '101', 1, 'token_olga_101', 'default'),
(5, 'Дмитрий', 'Дмитриев', 'dmitry.dmitriev@mail.ru', '+7 900 567 89 01', '202', 1, 'token_dmitry_202', 'default');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
