-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.2
-- Время создания: Мар 30 2025 г., 16:50
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
-- База данных: `db_shishimorov`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `created_at`) VALUES
(1, 'test', '$2y$10$Eh1b10p/89ev3BkLuDP7V.8O9TTwk.uiPySBJHfDFGsd7p2gxfOyq', '2025-03-30 09:37:53'),
(2, 'Vlad', '$2y$10$MRHCCjpczGEGYwHY4934re5yC4MFhA.J4o6UftfFsoFndXOY0aYki', '2025-03-30 09:38:18'),
(3, 'tttt', '$2y$10$c83PCdjLAp/rvf2YQCb57O2EluNuttBtiMj/wbd.BrPQuZpcQphH6', '2025-03-30 09:57:23'),
(4, '1', '$2y$10$8weYodDpbum3r0gcAri.Q.urD8.HgkqfzGbn.Fmd5ivOY88hL0b6e', '2025-03-30 11:18:58'),
(5, '12', '$2y$10$3KZTDxJLSphreR0KZW/fB.93RbINaQ1xtUO5J869BcRA0hTEMcfs2', '2025-03-30 11:35:01');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
