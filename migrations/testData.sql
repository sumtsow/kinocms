-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Авг 16 2019 г., 11:33
-- Версия сервера: 5.7.27-0ubuntu0.18.04.1
-- Версия PHP: 7.3.8-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `kino`
--

-- --------------------------------------------------------

--
-- Дамп данных таблицы `tickets`
--

INSERT INTO `tickets` (`id`, `row`, `place`, `cost`, `state`, `reservation_expiration`) VALUES
(1, 1, 1, 55, 'saled', NULL),
(2, 1, 2, 55, 'saled', NULL),
(3, 1, 3, 55, 'free', NULL),
(4, 1, 4, 55, 'free', NULL),
(5, 1, 5, 55, 'free', NULL),
(6, 1, 6, 55, 'free', NULL),
(7, 1, 7, 55, 'free', NULL),
(8, 1, 8, 55, 'free', NULL),
(9, 1, 9, 55, 'reserved', NULL),
(10, 1, 10, 55, 'free', NULL),
(11, 1, 11, 55, 'free', NULL),
(12, 1, 12, 55, 'free', NULL),
(13, 2, 1, 55, 'free', NULL),
(14, 2, 2, 55, 'free', NULL),
(15, 2, 3, 55, 'free', NULL),
(16, 2, 4, 55, 'free', NULL),
(17, 2, 5, 55, 'free', NULL),
(18, 2, 6, 55, 'free', NULL),
(19, 2, 7, 55, 'free', NULL),
(20, 2, 8, 55, 'free', NULL),
(21, 2, 9, 55, 'free', NULL),
(22, 2, 10, 55, 'free', NULL),
(23, 2, 11, 55, 'saled', NULL),
(24, 2, 12, 55, 'free', NULL),
(25, 2, 13, 55, 'free', NULL),
(26, 2, 14, 55, 'free', NULL),
(27, 3, 1, 55, 'free', NULL),
(28, 3, 2, 55, 'free', NULL),
(29, 3, 3, 55, 'free', NULL),
(30, 3, 4, 55, 'free', NULL),
(31, 3, 5, 55, 'free', NULL),
(32, 3, 6, 55, 'free', NULL),
(33, 3, 7, 55, 'free', NULL),
(34, 3, 8, 55, 'free', NULL),
(35, 3, 9, 55, 'free', NULL),
(36, 3, 10, 55, 'free', NULL),
(37, 3, 11, 55, 'free', NULL),
(38, 3, 12, 55, 'free', NULL),
(39, 3, 13, 55, 'free', NULL),
(40, 3, 14, 55, 'free', NULL),
(41, 3, 15, 55, 'free', NULL),
(42, 4, 1, 55, 'free', NULL),
(43, 4, 2, 55, 'free', NULL),
(44, 4, 3, 55, 'free', NULL),
(45, 4, 4, 55, 'free', NULL),
(46, 4, 5, 55, 'free', NULL),
(47, 4, 6, 55, 'free', NULL),
(48, 4, 7, 55, 'free', NULL),
(49, 4, 8, 55, 'free', NULL),
(50, 4, 9, 55, 'free', NULL),
(51, 4, 10, 55, 'free', NULL),
(52, 4, 11, 55, 'free', NULL),
(53, 4, 12, 55, 'free', NULL),
(54, 4, 13, 55, 'free', NULL),
(55, 5, 1, 55, 'free', NULL),
(56, 5, 2, 55, 'free', NULL),
(57, 5, 3, 55, 'free', NULL),
(58, 5, 4, 55, 'free', NULL),
(59, 5, 5, 55, 'free', NULL),
(60, 5, 6, 55, 'free', NULL),
(61, 5, 7, 55, 'free', NULL),
(62, 5, 8, 55, 'free', NULL),
(63, 5, 9, 55, 'free', NULL),
(64, 5, 10, 55, 'free', NULL),
(65, 5, 11, 55, 'free', NULL),
(66, 5, 12, 55, 'free', NULL),
(67, 5, 13, 55, 'free', NULL),
(68, 6, 1, 55, 'free', NULL),
(69, 6, 2, 55, 'free', NULL),
(70, 6, 3, 55, 'free', NULL),
(71, 6, 4, 55, 'free', NULL),
(72, 6, 5, 55, 'free', NULL),
(73, 6, 6, 55, 'free', NULL),
(74, 6, 7, 55, 'free', NULL),
(75, 6, 8, 55, 'free', NULL),
(76, 6, 9, 55, 'free', NULL),
(77, 6, 10, 55, 'free', NULL),
(78, 6, 11, 55, 'free', NULL),
(79, 6, 12, 55, 'free', NULL),
(80, 6, 13, 55, 'free', NULL),
(81, 7, 1, 55, 'free', NULL),
(82, 7, 2, 55, 'free', NULL),
(83, 7, 3, 55, 'free', NULL),
(84, 7, 4, 55, 'free', NULL),
(85, 7, 5, 55, 'free', NULL),
(86, 7, 6, 55, 'free', NULL),
(87, 7, 7, 55, 'free', NULL),
(88, 7, 8, 55, 'free', NULL),
(89, 7, 9, 55, 'free', NULL),
(90, 7, 10, 55, 'free', NULL),
(91, 7, 11, 55, 'free', NULL),
(92, 7, 12, 55, 'free', NULL),
(93, 7, 13, 55, 'free', NULL),
(94, 8, 1, 55, 'free', NULL),
(95, 8, 2, 55, 'free', NULL),
(96, 8, 3, 55, 'free', NULL),
(97, 8, 4, 55, 'free', NULL),
(98, 8, 5, 55, 'free', NULL),
(99, 8, 6, 55, 'free', NULL),
(100, 8, 7, 55, 'free', NULL),
(101, 8, 8, 55, 'free', NULL),
(102, 8, 9, 55, 'free', NULL),
(103, 8, 10, 55, 'free', NULL),
(104, 8, 11, 55, 'free', NULL),
(105, 8, 12, 55, 'free', NULL),
(106, 8, 13, 55, 'free', NULL),
(107, 9, 1, 55, 'free', NULL),
(108, 9, 2, 55, 'free', NULL),
(109, 9, 3, 55, 'free', NULL),
(110, 9, 4, 55, 'free', NULL),
(111, 9, 5, 55, 'free', NULL),
(112, 9, 6, 55, 'free', NULL),
(113, 9, 7, 55, 'free', NULL),
(114, 9, 8, 55, 'free', NULL),
(115, 9, 9, 55, 'free', NULL),
(116, 9, 10, 55, 'free', NULL),
(117, 9, 11, 55, 'free', NULL),
(118, 9, 12, 55, 'free', NULL),
(119, 9, 13, 55, 'free', NULL),
(120, 10, 1, 55, 'free', NULL),
(121, 10, 2, 55, 'free', NULL),
(122, 10, 3, 55, 'free', NULL),
(123, 10, 4, 55, 'free', NULL),
(124, 10, 5, 55, 'free', NULL),
(125, 10, 6, 55, 'free', NULL),
(126, 10, 7, 55, 'free', NULL),
(127, 10, 8, 55, 'free', NULL),
(128, 10, 9, 55, 'free', NULL),
(129, 10, 10, 55, 'free', NULL),
(130, 10, 11, 55, 'free', NULL),
(131, 10, 12, 55, 'free', NULL),
(132, 10, 13, 55, 'free', NULL),
(133, 10, 14, 55, 'free', NULL),
(134, 10, 15, 55, 'free', NULL),
(135, 10, 16, 55, 'free', NULL),
(136, 10, 17, 55, 'free', NULL),
(137, 10, 18, 55, 'free', NULL),
(138, 10, 19, 55, 'free', NULL),
(139, 10, 20, 55, 'free', NULL);

