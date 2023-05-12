-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Gép: localhost
-- Létrehozás ideje: 2023. Máj 12. 19:58
-- Kiszolgáló verziója: 10.4.28-MariaDB
-- PHP verzió: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `kecskemenhely`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `felhasznalok`
--

CREATE TABLE `felhasznalok` (
  `id` int(10) UNSIGNED NOT NULL,
  `nev` varchar(80) NOT NULL COMMENT 'Név',
  `email` varchar(80) NOT NULL COMMENT 'E-mail cím, login név',
  `telefon` varchar(20) DEFAULT NULL COMMENT 'Telefonszám',
  `jelszo` varchar(60) NOT NULL COMMENT 'Jelszó (sha)',
  `salt` varchar(32) NOT NULL COMMENT 'Jelszó kódoláshoz plusz kód',
  `allapot` tinyint(4) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'Állapot, 0: törölt, 1: aktív'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='felhasználók';

--
-- A tábla adatainak kiíratása `felhasznalok`
--

INSERT INTO `felhasznalok` (`id`, `nev`, `email`, `telefon`, `jelszo`, `salt`, `allapot`) VALUES
(1, '-', '-', NULL, '-', '-', 0),
(2, 'béla', 'mail4robi@gmail.com', '+36201234567', 'f502dee2e14dcba2bfd37e9be62ec7cbab0bd33c', '245689139', 1),
(3, 'béla', 'mail4robi@gmail.com', '+36201234567', '65fed5ff1fdcbc2c485e319284de8028e521989d', '1657897254', 1),
(4, 'Márton Róbert', 'mail@mail.io', '+36201234567', '2df6252e7f2247f383b580a5a82a27101bb6de5b', '2116556752', 1),
(5, 'Józsi', 'mail@jozsi.io', '+36201234567', 'f2f67aa8bd894e56fb93ec73f9f39bcae44092ba', '1754129838', 1);

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kutyak`
--

CREATE TABLE `kutyak` (
  `id` int(10) UNSIGNED NOT NULL,
  `nev` varchar(80) NOT NULL COMMENT 'Név',
  `fajta` varchar(80) NOT NULL COMMENT 'Kutya fajtája',
  `nem` varchar(20) NOT NULL,
  `meret` varchar(30) NOT NULL COMMENT 'Kutya mérete, kicsi, közepes, nagy',
  `szin` varchar(30) NOT NULL COMMENT 'Kutya színe',
  `szorzet` varchar(255) DEFAULT NULL COMMENT 'Kutya szőrzetének leírása',
  `suly` tinyint(4) UNSIGNED DEFAULT NULL COMMENT 'Kutya súlya',
  `chipelt` tinyint(4) UNSIGNED DEFAULT NULL COMMENT 'Chippel rendelkezik',
  `leiras` text DEFAULT NULL COMMENT 'Leírás, egyéb infók a kutyáról',
  `kep_url` varchar(1000) NOT NULL,
  `bekerules_datuma` date NOT NULL COMMENT 'Mikor került be a kutya a nyílvántartásba',
  `cim` varchar(255) NOT NULL COMMENT 'Megtalálás ím',
  `lat` decimal(10,8) DEFAULT NULL COMMENT 'lattitude',
  `lng` decimal(10,8) DEFAULT NULL COMMENT 'longitude',
  `allapot` varchar(10) NOT NULL COMMENT 'Állapot: aktiv, inaktiv'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Kutyák';

--
-- A tábla adatainak kiíratása `kutyak`
--

INSERT INTO `kutyak` (`id`, `nev`, `fajta`, `nem`, `meret`, `szin`, `szorzet`, `suly`, `chipelt`, `leiras`, `kep_url`, `bekerules_datuma`, `cim`, `lat`, `lng`, `allapot`) VALUES
(1, '-', '-', '', '-', '-', NULL, 0, 0, NULL, '', '2000-01-01', '-', NULL, NULL, 'inaktiv'),
(2, 'Tappancs', 'Golden retriever', 'Szuka', 'Nagy', 'Világos barna', 'Közepes', 23, 1, 'Mozgékony eleven kutya', 'https://images.pexels.com/photos/2759564/pexels-photo-2759564.jpeg', '2022-12-18', '6000, Kecskemét, Március 15. u. 15', NULL, NULL, 'aktiv'),
(3, 'Jeges', 'Husky', 'Kan', 'Nagy', 'Fekete & Fehér', 'Közepes', 25, 1, 'Mozgékony eleven kutya, macskákkal nem igazán jó barátok', 'https://images.pexels.com/photos/3196887/pexels-photo-3196887.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '2023-01-18', '6000, Kecskemét, Bíbor u. 1-47', NULL, NULL, 'aktiv'),
(4, 'Leyla', 'Németjuhász', 'Kan', 'Nagy', 'Fekete & Barna', 'Közepes', 25, 1, 'Pórázon jól sétál, más kutyákkal is barátságos', 'https://images.pexels.com/photos/351406/pexels-photo-351406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '2023-01-28', '6000, Kecskemét, Semmelweis u. 3a', NULL, NULL, 'aktiv'),
(5, 'Hógolyó', 'Máltai selyem', 'Szuka', 'Kicsi', 'Fehér', 'Közepes', 8, 0, 'Kölyök, sok figyelmet igényel', 'https://images.pexels.com/photos/33053/dog-young-dog-small-dog-maltese.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '2023-03-28', '6000, Kecskemét Tölgyesi u. 7', NULL, NULL, 'aktiv'),
(6, 'Maszlag', 'Rottweiler', 'Kan', 'Nagy', 'Fekete & Barna', 'Rövid', 30, 1, 'Játékos, nehezen viseli a bezártságot', 'https://images.pexels.com/photos/13569296/pexels-photo-13569296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', '2022-11-28', '6000,Kecskemét Munkácsy u. 20', NULL, NULL, 'aktiv');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `kutya_kepek`
--

CREATE TABLE `kutya_kepek` (
  `id` int(10) UNSIGNED NOT NULL,
  `kutya_id` int(10) UNSIGNED NOT NULL,
  `cim` varchar(255) NOT NULL,
  `url` varchar(1000) NOT NULL,
  `allapot` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `kutya_kepek`
--

INSERT INTO `kutya_kepek` (`id`, `kutya_id`, `cim`, `url`, `allapot`) VALUES
(1, 1, '-', '-', 'inaktiv'),
(2, 2, 'Kutya képe', 'https://images.pexels.com/photos/2759564/pexels-photo-2759564.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(3, 2, 'Kutya képe', 'https://images.pexels.com/photos/686094/pexels-photo-686094.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(4, 2, 'Kutya képe', 'https://images.pexels.com/photos/2409490/pexels-photo-2409490.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(5, 2, 'Kutya képe', 'https://images.pexels.com/photos/7752793/pexels-photo-7752793.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(6, 2, 'Kutya képe', 'https://images.pexels.com/photos/2759564/pexels-photo-2759564.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(7, 3, 'Kutya kép', 'https://images.pexels.com/photos/3995451/pexels-photo-3995451.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(8, 3, 'Kutya kép', 'https://images.pexels.com/photos/4206711/pexels-photo-4206711.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(9, 3, 'Kutya kép', 'https://images.pexels.com/photos/7046352/pexels-photo-7046352.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(10, 3, 'Kutya kép', 'https://images.pexels.com/photos/4054111/pexels-photo-4054111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(11, 4, 'Kutya kép', 'https://images.pexels.com/photos/351406/pexels-photo-351406.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(12, 4, 'Kutya kép', 'https://images.pexels.com/photos/2873382/pexels-photo-2873382.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(13, 4, 'Kutya kép', 'https://images.pexels.com/photos/342214/pexels-photo-342214.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(14, 4, 'Kutya kép', 'https://images.pexels.com/photos/15279808/pexels-photo-15279808.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(15, 5, 'Kutya kép', 'https://images.pexels.com/photos/33053/dog-young-dog-small-dog-maltese.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(16, 5, 'Kutya kép', 'https://images.pexels.com/photos/13069793/pexels-photo-13069793.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(17, 5, 'Kutya kép', 'https://images.pexels.com/photos/13119047/pexels-photo-13119047.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(18, 5, 'Kutya kép', 'https://images.pexels.com/photos/4106509/pexels-photo-4106509.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(19, 6, 'Kutya kép', 'https://images.pexels.com/photos/13569296/pexels-photo-13569296.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(20, 6, 'Kutya kép', 'https://images.pexels.com/photos/170325/pexels-photo-170325.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(21, 6, 'Kutya kép', 'https://images.pexels.com/photos/4488894/pexels-photo-4488894.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv'),
(22, 6, 'Kutya kép', 'https://images.pexels.com/photos/7061776/pexels-photo-7061776.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'aktiv');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `uzenetek`
--

CREATE TABLE `uzenetek` (
  `id` int(10) UNSIGNED NOT NULL,
  `kutya_id` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `felhasznalo_id` int(10) UNSIGNED NOT NULL DEFAULT 1 COMMENT 'Felhasználó, ha bejelentkezett felhasználó küldi',
  `uzenet` text NOT NULL COMMENT 'Üzenet tartalma',
  `kuldve` datetime NOT NULL COMMENT 'Üzenet küldés időpontja',
  `allapot` varchar(10) NOT NULL COMMENT 'Üzenet állapota: torolt, uj, elolvasva'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci COMMENT='Üzenetek';

--
-- A tábla adatainak kiíratása `uzenetek`
--

INSERT INTO `uzenetek` (`id`, `kutya_id`, `felhasznalo_id`, `uzenet`, `kuldve`, `allapot`) VALUES
(1, 1, 1, '-', '2000-01-01 00:00:00', 'torolt'),
(2, 2, 5, 'Kedves Menhely,\r\nszobatiszta a kutyus?', '2023-05-10 19:54:50', 'aktiv');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `felhasznalok`
--
ALTER TABLE `felhasznalok`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_felhasznalo_email` (`email`);

--
-- A tábla indexei `kutyak`
--
ALTER TABLE `kutyak`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `kutya_kepek`
--
ALTER TABLE `kutya_kepek`
  ADD PRIMARY KEY (`id`);

--
-- A tábla indexei `uzenetek`
--
ALTER TABLE `uzenetek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_uzenet_felhasznalo` (`felhasznalo_id`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `felhasznalok`
--
ALTER TABLE `felhasznalok`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT a táblához `kutyak`
--
ALTER TABLE `kutyak`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT a táblához `kutya_kepek`
--
ALTER TABLE `kutya_kepek`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT a táblához `uzenetek`
--
ALTER TABLE `uzenetek`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
