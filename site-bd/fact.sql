-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Апр 07 2025 г., 14:19
-- Версия сервера: 8.2.0
-- Версия PHP: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fact`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `login` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `password`, `created_at`) VALUES
(1, 'Lbyf', '$2y$10$Wt.3X7s3j7TQ4Q5yE.tkbucpsJxow7nyjm2MoiOIeIPK5ccfl5/na', '2025-04-07 04:18:20'),
(2, 'Дина', '$2y$10$l.EtrnWoconDFuvpEf0uGOlrz9WLvBkyN3a4CzsJgwSC.GCM2Yg.e', '2025-04-07 04:20:22'),
(5, 'Cаша', '$2y$10$s.cMPwQtdTcQJmujsNrl3.POrzvE.pOIRENiCS0YXCor3qcVSCYs2', '2025-04-07 04:55:08'),
(6, 'Игорь', '$2y$10$0niF4nhSopB4U8Ybwl.c.uZjZfG/EoJyVFYGX0Fv7b9RUt4byQxgG', '2025-04-07 04:59:00'),
(7, 'Андрей', '$2y$10$VJfzFi13bLUBcdlQjz94m.1oAH8wiRHBCNCxDU9yegWJXjVN2GVpS', '2025-04-07 05:00:50'),
(8, 'Маша', '$2y$10$NbMmA8Hk0wfBqz8s/vGdd.mNFe9r551lPYw50M3DTy8aoY.UsCQx.', '2025-04-07 05:02:49'),
(9, 'Вася', '$2y$10$43fhOj19LvBVElizNG.W.eGjjrIYeDSCUCVzu0ubeaTPjG0VRANXW', '2025-04-07 05:05:18'),
(10, 'Влад', '$2y$10$66edjAO1aeoWqgjNtRX4Eem4d8Cfh28y.V3niCQMYhqIsGlMxIJuS', '2025-04-07 05:11:12'),
(11, 'Данил', '$2y$10$ikREoRdilbyWkJrQw/jtteStc38J6N4INUlxAsYzGQDC4dd9hm8em', '2025-04-07 05:15:53'),
(13, 'Миша', '$2y$10$tnRDHlDhLO94prAUA5z1MeVSBNGK5uudWL0VR9NlD5dG5Wll3V5hu', '2025-04-07 08:14:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
