-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-08-21 15:15:51
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `db01`
--

-- --------------------------------------------------------

--
-- 資料表結構 `movie`
--

CREATE TABLE `movie` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `level` tinyint(1) NOT NULL,
  `length` int(11) NOT NULL,
  `ondate` date NOT NULL,
  `publish` text NOT NULL,
  `director` text NOT NULL,
  `trailer` text NOT NULL,
  `poster` text NOT NULL,
  `intro` text NOT NULL,
  `rank` int(11) NOT NULL,
  `sh` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `movie`
--

INSERT INTO `movie` (`id`, `name`, `level`, `length`, `ondate`, `publish`, `director`, `trailer`, `poster`, `intro`, `rank`, `sh`) VALUES
(1, '預告片01', 1, 120, '2023-09-01', '發行商01', '導演01', '03B01v.mp4', '03B01.png', '院線片01簡介', 1, 1),
(2, '預告片02', 2, 120, '2023-09-02', '發行商02', '導演02', '03B02v.mp4', '03B02.png', '院線片02簡介', 2, 1),
(3, '預告片03', 3, 120, '2023-09-03', '發行商03', '導演03', '03B03v.mp4', '03B03.png', '院線片03簡介', 3, 1),
(4, '預告片04', 4, 120, '2023-09-04', '發行商04', '導演04', '03B04v.mp4', '03B04.png', '院線片04簡介', 4, 1),
(5, '預告片05', 1, 120, '2023-09-05', '發行商05', '導演05', '03B05v.mp4', '03B05.png', '院線片05簡介', 5, 1),
(6, '預告片06', 2, 120, '2023-09-06', '發行商06', '導演06', '03B06v.mp4', '03B06.png', '院線片06簡介', 6, 1),
(7, '預告片07', 3, 120, '2023-09-07', '發行商07', '導演07', '03B07v.mp4', '03B07.png', '院線片07簡介', 7, 1),
(8, '預告片08', 4, 120, '2023-09-08', '發行商08', '導演08', '03B08v.mp4', '03B08.png', '院線片08簡介', 8, 1),
(9, '預告片09', 1, 120, '2023-09-09', '發行商09', '導演09', '03B09v.mp4', '03B09.png', '院線片09簡介', 9, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
