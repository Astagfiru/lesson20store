-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Окт 26 2020 г., 10:51
-- Версия сервера: 5.6.38
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
-- База данных: `store`
--

-- --------------------------------------------------------

--
-- Структура таблицы `items`
--

CREATE TABLE `items` (
  `title` varchar(150) NOT NULL,
  `description` varchar(350) NOT NULL,
  `img` varchar(30) NOT NULL,
  `price` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `items`
--

INSERT INTO `items` (`title`, `description`, `img`, `price`) VALUES
('DJI Mavic Mini Combo', 'Drone FlyCam Quadcopter UAV with 2.7K Camera 3-Axis Gimbal GPS 30min Flight Time, less than 0.55lbs, Gray', 'b.jpg', '$499.00'),
('AMD Ryzen 7 3700X 8-Core', '16-Thread Unlocked Desktop Processor with Wraith Prism LED Cooler', 'c.jpg', '$309.99'),
('WD_Black 5TB P10-Game Drive', 'Portable External Hard Drive Compatible with Playstation,-Xbox, PC, & Mac - WDBA3A0050BBK-WESN', 'd.jpg', '$119.99'),
('Oculus Rift S', 'PC-Powered VR Gaming Headset', 'e.jpg', '$399.00'),
('DJI Mavic Air 2 Fly More Combo', 'Drone Quadcopter UAV with 48MP Camera 4K Video 8K Hyperlapse 1/2\" CMOS Sensor 3-Axis Gimbal 34min Flight Time', 'f.jpg', '$988.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
