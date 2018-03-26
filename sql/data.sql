-- phpMyAdmin SQL Dump
-- version 4.2.12deb2+deb8u2
-- http://www.phpmyadmin.net
--
-- Hoszt: localhost
-- Létrehozás ideje: 2018. Már 26. 20:58
-- Szerver verzió: 5.5.59-0+deb8u1
-- PHP verzió: 5.6.33-0+deb8u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Adatbázis: `yii2advanced`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `oldalak`
--

CREATE TABLE IF NOT EXISTS `oldalak` (
`id` int(11) NOT NULL,
  `cim` varchar(500) NOT NULL,
  `link` varchar(250) NOT NULL,
  `meta_leiras` varchar(200) NOT NULL,
  `meta_kulcsszavak` varchar(200) NOT NULL,
  `torzs` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- A tábla adatainak kiíratása `oldalak`
--

INSERT INTO `oldalak` (`id`, `cim`, `link`, `meta_leiras`, `meta_kulcsszavak`, `torzs`) VALUES
(1, 'cim1', 'link1', 'ml11', 'mk1', '<p><img alt="" src="/advanced/vendor/sunhater/kcfinder/upload/images/ideig1.png" style="height:59px; width:100px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>torzs1 <u>ertertert&nbsp;<img alt="" src="https://www.yiiframework.com/image/logo.svg" style="height:62px; width:300px" /></u></strong></p>\r\n');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- A tábla adatainak kiíratása `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'zpC2xhIjDZsJ2O-oawAlfHO15DtW8dh-', '$2y$13$0PAdRJ9PwLK6aqGunL/iLecZoPF8azcv7jeSqfOpMx92jnVT.Issi', NULL, 'admin@admin.hu', 10, 1522084653, 1522084653);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `oldalak`
--
ALTER TABLE `oldalak`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `oldalak`
--
ALTER TABLE `oldalak`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
