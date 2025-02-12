-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost:3306
-- Время создания: Фев 17 2022 г., 03:44
-- Версия сервера: 5.7.24
-- Версия PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fizikpro`
--

-- --------------------------------------------------------

--
-- Структура таблицы `editor_block`
--

CREATE TABLE `editor_block` (
  `id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `category` varchar(60) NOT NULL,
  `auther` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `editor_block`
--

INSERT INTO `editor_block` (`id`, `code`, `title`, `category`, `auther`) VALUES
(1, 1, 'Заголовок с горами', 'header', 'ProotoFerum'),
(2, 1, 'Красивый текст с кнопкой', 'text', 'Иван'),
(3, 2, 'Заголовок с лого', 'header', 'ProotoFerum'),
(4, 1, 'Меню 1', 'menu', 'ProotoFerum'),
(5, 2, 'Текст 2 без кнопки', 'text', 'ProotoFerum');

-- --------------------------------------------------------

--
-- Структура таблицы `routes`
--

CREATE TABLE `routes` (
  `id` int(11) NOT NULL,
  `url` text NOT NULL,
  `controller` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  `library` text NOT NULL,
  `stylesheet` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `routes`
--

INSERT INTO `routes` (`id`, `url`, `controller`, `action`, `title`, `visible`, `library`, `stylesheet`) VALUES
(8, 'admin/panel', 'admin', 'panel', 'Админ Панель', 1, 'bootstrap;', 'xinoro_admin_panel.css'),
(9, 'admin/editor', 'admin', 'editor', 'Редактор Страниц', 1, 'bootstrap;jquery;', 'xinoro_admin_editor.css'),
(10, 'admin/content', 'admin', 'content', 'Генератор Контента', 0, '', ''),
(11, 'admin/db', 'admin', 'db', 'База Данных', 0, '', ''),
(12, 'admin/setting', 'admin', 'setting', 'Настройки CMS', 0, '', ''),
(15, 'cmsxinoro', 'cmsxinoro', 'index', 'Тест', 1, 'bootstrap;', 'cmsxinoro-index.css'),
(16, 'admin/ajax', 'admin', 'ajax', 'ajax(контроллер)', 1, '', '');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `editor_block`
--
ALTER TABLE `editor_block`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `routes`
--
ALTER TABLE `routes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `editor_block`
--
ALTER TABLE `editor_block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `routes`
--
ALTER TABLE `routes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
