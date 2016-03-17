-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mrt 2016 om 11:40
-- Serverversie: 10.1.9-MariaDB
-- PHP-versie: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agescan`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `evenement`
--

CREATE TABLE `evenement` (
  `IDEvenement` int(255) NOT NULL,
  `Naam` varchar(25) NOT NULL,
  `Organisator` varchar(25) NOT NULL,
  `MinLeeftijd` int(2) NOT NULL,
  `MaxAanwezigen` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `feestgangers`
--

CREATE TABLE `feestgangers` (
  `IDFeestgangers` int(255) NOT NULL,
  `Leeftijd` int(2) NOT NULL,
  `RRNR` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `feestgangersopevenement`
--

CREATE TABLE `feestgangersopevenement` (
  `IDFOE` int(255) NOT NULL,
  `IDEvenement` int(255) NOT NULL,
  `IDFeestgangers` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`IDEvenement`);

--
-- Indexen voor tabel `feestgangers`
--
ALTER TABLE `feestgangers`
  ADD PRIMARY KEY (`IDFeestgangers`);

--
-- Indexen voor tabel `feestgangersopevenement`
--
ALTER TABLE `feestgangersopevenement`
  ADD PRIMARY KEY (`IDFOE`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `evenement`
--
ALTER TABLE `evenement`
  MODIFY `IDEvenement` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `feestgangers`
--
ALTER TABLE `feestgangers`
  MODIFY `IDFeestgangers` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `feestgangersopevenement`
--
ALTER TABLE `feestgangersopevenement`
  MODIFY `IDFOE` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
