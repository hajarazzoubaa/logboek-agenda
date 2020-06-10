-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: www.piustien.net
-- Gegenereerd op: 10 jun 2020 om 13:25
-- Serverversie: 5.5.62-0+deb8u1
-- PHP-versie: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bin10`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Activiteit`
--

CREATE TABLE `Activiteit` (
  `ID` int(11) NOT NULL,
  `Start` datetime NOT NULL,
  `Einde` datetime NOT NULL,
  `Notitie` text NOT NULL,
  `Onderwerp` text NOT NULL,
  `Soort` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Activiteit`
--

INSERT INTO `Activiteit` (`ID`, `Start`, `Einde`, `Notitie`, `Onderwerp`, `Soort`) VALUES
(1, '2020-01-20 13:30:00', '2020-01-20 14:30:00', 'Taak1: sollicitatiebrief en sollicitatiegesprek', 'Engels', 'Taak'),
(2, '2020-01-21 14:00:00', '2020-01-21 14:30:00', 'Tram 10', 'Tandarts', 'Afspraak'),
(3, '2020-07-18 00:00:00', '2020-07-19 00:00:00', '', 'Afspraak kapper', 'Afspraak');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Administrator`
--

CREATE TABLE `Administrator` (
  `ID` int(11) NOT NULL,
  `Herinnering` text NOT NULL,
  `DateTime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Administrator`
--

INSERT INTO `Administrator` (`ID`, `Herinnering`, `DateTime`) VALUES
(1, 'Verjaardag Lisse', '2020-07-18 00:00:00'),
(2, 'Concert Justin Bieber', '2020-08-17 19:00:00'),
(3, 'Docters afspraak', '2020-06-12 10:45:00');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Gebruiker`
--

CREATE TABLE `Gebruiker` (
  `ID` int(11) NOT NULL,
  `email` text NOT NULL,
  `wachtwoord` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Gegevens worden geëxporteerd voor tabel `Gebruiker`
--

INSERT INTO `Gebruiker` (`ID`, `email`, `wachtwoord`) VALUES
(1, 'hajar@gmail.com', 'hajar'),
(2, 'lisse@gmail.com', 'lisse'),
(3, 'tim@gmail.com', 'tim');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Activiteit`
--
ALTER TABLE `Activiteit`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `Administrator`
--
ALTER TABLE `Administrator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexen voor tabel `Gebruiker`
--
ALTER TABLE `Gebruiker`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Activiteit`
--
ALTER TABLE `Activiteit`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT voor een tabel `Administrator`
--
ALTER TABLE `Administrator`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT voor een tabel `Gebruiker`
--
ALTER TABLE `Gebruiker`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
