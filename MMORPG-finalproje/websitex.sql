-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 14 May 2019, 15:51:24
-- Sunucu sürümü: 10.1.37-MariaDB
-- PHP Sürümü: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `websitex`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `account`
--

CREATE TABLE `account` (
  `username` char(20) NOT NULL,
  `password` char(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `birthday` varchar(20) DEFAULT NULL,
  `hoursplayed` int(11) DEFAULT NULL,
  `teamtag` char(20) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `url` varchar(100) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `account`
--

INSERT INTO `account` (`username`, `password`, `email`, `birthday`, `hoursplayed`, `teamtag`, `level`, `url`, `image`) VALUES
('berkay', '123', 'beft@abc.com', '2019-04-28', 2753, '-', 18, '/vgeZF2', 'https://www.teksteshqip.com/img_upz/galeri_full/157/157947.jpg'),
('herentug', '12345', 'herentug@sabanciuniv', '2019-04-28 00:00:00', 0, '-', 1, 'On3ewLH', 'https://www.teksteshqip.com/img_upz/galeri_full/157/157947.jpg'),
('ilayda', '123', 'iademoglu@sabaniciun', '2019-04-28 00:00:00', 0, '-', 1, 'nwRFDVh', 'https://www.teksteshqip.com/img_upz/galeri_full/157/157947.jpg'),
('kamerkaya', '123', 'k@hot.com', '2019-04-28', 885, '-', 44, '8e5aCEq', 'https://www.teksteshqip.com/img_upz/galeri_full/157/157947.jpg'),
('mehmet', '12345', 'mehmet@sabanciuniv.e', '2019-04-28', 2963, '-', 20, 'Kt76xwb', 'https://www.teksteshqip.com/img_upz/galeri_full/157/157947.jpg'),
('yÃ¼celsaygÄ±n', '123', 'yucelsaygin@hotmail.', '2019-04-28', 1855, '-', 68, 'Cm4GIXe', 'https://www.teksteshqip.com/img_upz/galeri_full/157/157947.jpg'),
('yucels', '1234', 'yucel@sabanciuniv.edu', '07/12/1998', 122, '12', 12, '', '');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `character`
--

CREATE TABLE `character` (
  `username` char(20) DEFAULT NULL,
  `charactername` char(20) NOT NULL,
  `inventory_id` char(20) DEFAULT NULL,
  `health` int(11) DEFAULT NULL,
  `mana` int(11) DEFAULT NULL,
  `armor` int(11) DEFAULT NULL,
  `region` char(20) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `location_x` double(1,1) DEFAULT NULL,
  `location_y` double(1,1) DEFAULT NULL,
  `gold` int(11) DEFAULT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `character`
--

INSERT INTO `character` (`username`, `charactername`, `inventory_id`, `health`, `mana`, `armor`, `region`, `level`, `location_x`, `location_y`, `gold`, `image`) VALUES
('herentug', 'Drago', '1', 2000, 600, 8, 'eincrad', 45, 0.9, 0.9, 5000, 'https://ksr-ugc.imgix.net/assets/022/580/629/0a06c5d1ae7b18f4337864e688b1912e_original.jpg?ixlib=rb-1.1.0&w=680&fit=max&v=1537197161&auto=format&gif-q=50&q=92&s=7e66137bff496f71ff982741d226b85b'),
('kamerkaya', 'luna', '3', 100, 120, 23, 'lonarLake', 100, NULL, NULL, NULL, ''),
('herentug', 'Viserys', '4', 1000, 650, 8, 'lonarLake', 15, 0.9, 0.4, 2000, 'https://gamepedia.cursecdn.com/hearthstone_gamepedia/thumb/3/31/Fire_Dragon_full.jpg/400px-Fire_Dragon_full.jpg?version=bea992d21d45cdb8a4e0d7e8ae5c6ab3'),
('mehmet', 'WizzleBang', '2', 1500, 400, 6, 'shadowRealm', 23, 0.9, 0.4, 1234, 'https://gamepedia.cursecdn.com/hearthstone_gamepedia/thumb/6/6d/Whizbang_the_Wonderful_full.jpg/400px-Whizbang_the_Wonderful_full.jpg?version=1ad262fcf98d650e4a9cf3584808647f');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `inside`
--

CREATE TABLE `inside` (
  `item_id` char(20) NOT NULL,
  `charactername` char(20) NOT NULL,
  `eqipped` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `inside`
--

INSERT INTO `inside` (`item_id`, `charactername`, `eqipped`) VALUES
('Ghost Poro', 'Viserys', 'T');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `inventory`
--

INSERT INTO `inventory` (`inventory_id`) VALUES
('1'),
('2'),
('3'),
('4');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `item`
--

CREATE TABLE `item` (
  `slotname` char(20) DEFAULT NULL,
  `item_id` char(20) NOT NULL,
  `attack_range` char(20) DEFAULT NULL,
  `attack_speed` char(20) DEFAULT NULL,
  `health_bonus` char(20) DEFAULT NULL,
  `mana_bonus` char(20) DEFAULT NULL,
  `attack_bonus` char(20) DEFAULT NULL,
  `defense_bonus` char(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `item`
--

INSERT INTO `item` (`slotname`, `item_id`, `attack_range`, `attack_speed`, `health_bonus`, `mana_bonus`, `attack_bonus`, `defense_bonus`) VALUES
('3', 'Dagger', '1200', '2000', '4000', '1000', '2000', '4000'),
('2', 'Fire at Will', '1000', '6000', '1000', '1000', '1000', '1000'),
('1', 'Ghost Poro', '1200', '1500', '1700', '2000', '3000', '2000'),
('4', 'Power Ring', '3000', '1200', '6000', '2000', '2000', '5000');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `region`
--

CREATE TABLE `region` (
  `name` char(20) NOT NULL,
  `players_in` int(11) DEFAULT NULL,
  `climate` char(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `region`
--

INSERT INTO `region` (`name`, `players_in`, `climate`) VALUES
('eincrad', 1, 'sunny'),
('lonarLake', 1, 'windy'),
('shadowRealm', 2, 'raining');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `slot`
--

CREATE TABLE `slot` (
  `slotname` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Tablo döküm verisi `slot`
--

INSERT INTO `slot` (`slotname`) VALUES
('1'),
('2'),
('3'),
('4'),
('5'),
('6');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Tablo için indeksler `character`
--
ALTER TABLE `character`
  ADD PRIMARY KEY (`charactername`),
  ADD KEY `inventory_id` (`inventory_id`),
  ADD KEY `username` (`username`),
  ADD KEY `region` (`region`);

--
-- Tablo için indeksler `inside`
--
ALTER TABLE `inside`
  ADD PRIMARY KEY (`item_id`,`charactername`),
  ADD KEY `charactername` (`charactername`);

--
-- Tablo için indeksler `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`);

--
-- Tablo için indeksler `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`item_id`),
  ADD KEY `slotname` (`slotname`);

--
-- Tablo için indeksler `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`name`);

--
-- Tablo için indeksler `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`slotname`);

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `character`
--
ALTER TABLE `character`
  ADD CONSTRAINT `character_ibfk_1` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`inventory_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `character_ibfk_2` FOREIGN KEY (`username`) REFERENCES `account` (`username`) ON DELETE NO ACTION,
  ADD CONSTRAINT `character_ibfk_3` FOREIGN KEY (`region`) REFERENCES `region` (`name`) ON DELETE NO ACTION;

--
-- Tablo kısıtlamaları `inside`
--
ALTER TABLE `inside`
  ADD CONSTRAINT `inside_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`item_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `inside_ibfk_2` FOREIGN KEY (`charactername`) REFERENCES `character` (`charactername`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`slotname`) REFERENCES `slot` (`slotname`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
