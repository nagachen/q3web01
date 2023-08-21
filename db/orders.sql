-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-08-21 15:15:45
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
-- 資料表結構 `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `no` text NOT NULL,
  `movie` text NOT NULL,
  `date` date NOT NULL,
  `session` text NOT NULL,
  `qt` int(11) NOT NULL,
  `seats` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `orders`
--

INSERT INTO `orders` (`id`, `no`, `movie`, `date`, `session`, `qt`, `seats`) VALUES
(1, '202309010001', '院線片01', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:2;i:1;i:3;}'),
(2, '202309010002', '院線片02', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:4;i:1;i:5;}'),
(3, '202309010003', '院線片03', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:6;i:1;i:7;}'),
(4, '202309010004', '院線片04', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:8;i:1;i:9;}'),
(5, '202309010005', '院線片05', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:10;i:1;i:11;}'),
(6, '202309010006', '院線片06', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:12;i:1;i:13;}'),
(7, '202309010007', '院線片07', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:14;i:1;i:15;}'),
(8, '202309010008', '院線片08', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:16;i:1;i:17;}'),
(9, '202309010009', '院線片09', '2023-09-10', '14:00~16:00', 2, 'a:2:{i:0;i:18;i:1;i:19;}');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
