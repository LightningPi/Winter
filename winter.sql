-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 
-- 伺服器版本: 5.6.21
-- PHP 版本： 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫： `winter`
--

-- --------------------------------------------------------

--
-- 資料表結構 `publish`
--

CREATE TABLE IF NOT EXISTS `publish` (
`p_id` int(255) NOT NULL,
  `class` text COLLATE utf8_unicode_ci NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `datetime` datetime NOT NULL,
  `type` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `register`
--

CREATE TABLE IF NOT EXISTS `register` (
`r_id` int(255) NOT NULL,
  `ID` text COLLATE utf8_unicode_ci NOT NULL,
  `code` text COLLATE utf8_unicode_ci NOT NULL,
  `username` text COLLATE utf8_unicode_ci NOT NULL,
  `sex` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `cellphone` int(30) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 資料表結構 `reply`
--

CREATE TABLE IF NOT EXISTS `reply` (
`res_id` int(255) NOT NULL,
  `p_id` int(255) NOT NULL,
  `username` int(50) NOT NULL,
  `content` int(255) NOT NULL,
  `datetime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `publish`
--
ALTER TABLE `publish`
 ADD PRIMARY KEY (`p_id`);

--
-- 資料表索引 `register`
--
ALTER TABLE `register`
 ADD PRIMARY KEY (`r_id`);

--
-- 資料表索引 `reply`
--
ALTER TABLE `reply`
 ADD PRIMARY KEY (`res_id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `publish`
--
ALTER TABLE `publish`
MODIFY `p_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=37;
--
-- 使用資料表 AUTO_INCREMENT `register`
--
ALTER TABLE `register`
MODIFY `r_id` int(255) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- 使用資料表 AUTO_INCREMENT `reply`
--
ALTER TABLE `reply`
MODIFY `res_id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
