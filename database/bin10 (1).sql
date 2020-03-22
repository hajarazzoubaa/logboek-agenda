-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: www.piustien.net
-- Gegenereerd op: 22 mrt 2020 om 16:11
-- Serverversie: 5.5.62-0+deb8u1
-- PHP-versie: 7.2.19

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
-- Tabelstructuur voor tabel `Administrator`
--

CREATE TABLE `Administrator` (
  `email` varchar(30) NOT NULL,
  `wachtwoord` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Afspraak`
--

CREATE TABLE `Afspraak` (
  `naam` varchar(30) NOT NULL,
  `locatie` varchar(30) NOT NULL,
  `tijdstip` time NOT NULL,
  `persoon` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Categorie`
--

CREATE TABLE `Categorie` (
  `naam` varchar(30) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Evenement`
--

CREATE TABLE `Evenement` (
  `naam` varchar(30) NOT NULL,
  `locatie` varchar(30) NOT NULL,
  `tijd` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Feestdag`
--

CREATE TABLE `Feestdag` (
  `naam` varchar(30) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Gebruiker`
--

CREATE TABLE `Gebruiker` (
  `email` varchar(30) NOT NULL,
  `naam` varchar(30) NOT NULL,
  `wachtwoord` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Herinnering`
--

CREATE TABLE `Herinnering` (
  `naam` varchar(30) NOT NULL,
  `tijd` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Persoon`
--

CREATE TABLE `Persoon` (
  `email` varchar(30) NOT NULL,
  `naam` tinytext NOT NULL,
  `wachtwoord` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Taak`
--

CREATE TABLE `Taak` (
  `naam` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Administrator`
--
ALTER TABLE `Administrator`
  ADD PRIMARY KEY (`email`,`wachtwoord`);

--
-- Indexen voor tabel `Afspraak`
--
ALTER TABLE `Afspraak`
  ADD PRIMARY KEY (`naam`);

--
-- Indexen voor tabel `Categorie`
--
ALTER TABLE `Categorie`
  ADD PRIMARY KEY (`naam`);

--
-- Indexen voor tabel `Evenement`
--
ALTER TABLE `Evenement`
  ADD PRIMARY KEY (`naam`);

--
-- Indexen voor tabel `Feestdag`
--
ALTER TABLE `Feestdag`
  ADD PRIMARY KEY (`naam`);

--
-- Indexen voor tabel `Gebruiker`
--
ALTER TABLE `Gebruiker`
  ADD PRIMARY KEY (`email`,`naam`);

--
-- Indexen voor tabel `Herinnering`
--
ALTER TABLE `Herinnering`
  ADD PRIMARY KEY (`naam`);

--
-- Indexen voor tabel `Persoon`
--
ALTER TABLE `Persoon`
  ADD PRIMARY KEY (`email`);

--
-- Indexen voor tabel `Taak`
--
ALTER TABLE `Taak`
  ADD PRIMARY KEY (`naam`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
