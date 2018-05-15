-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 15. Mai 2018 um 16:23
-- Server-Version: 10.1.31-MariaDB
-- PHP-Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `theclick`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `game`
--

CREATE TABLE `game` (
  `gameid` int(11) NOT NULL,
  `playerid` int(10) UNSIGNED NOT NULL,
  `overallPoints` int(11) NOT NULL,
  `gametype` enum('1','2','3') CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `game`
--

INSERT INTO `game` (`gameid`, `playerid`, `overallPoints`, `gametype`) VALUES
(1, 6, 45, '1'),
(2, 6, 50, '1'),
(3, 6, 64, '1'),
(4, 6, 12, '2'),
(5, 6, 12, '3');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `players`
--

CREATE TABLE `players` (
  `playerid` int(11) NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL,
  `passwort` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `players`
--

INSERT INTO `players` (`playerid`, `username`, `email`, `passwort`) VALUES
(1, 'Daniel', 'ad.gasser@outlook.com', 'daniel'),
(2, 'test', '', '$2y$10$e7trihysVU62n7w9Leq0pOVQeyVzFu1wFd49jQ20cd9'),
(3, 'test2', 'test@test.de', '$2y$10$sfGoptgf6Z1/4zBfb26rbebZEm/EZxdEFDGRl.NBtoD'),
(4, 'test4', 'test2@test.de', '$2y$10$BjpwU/SxPSR19qVGF6qRHuepw6LGpsEjMbd.SBnDD558lj0wa5Qum'),
(5, 'test90', 'l.g.1@gmx.at', '$2y$10$Iif6m3ZrY3vHGg7rhuL84uxIrZa3DMsbx0H9nCK5H9oO4iKp1wqwa'),
(6, 'test70', 'test45@gmx.at', '$2y$10$OAqdSVwEDg26y9nGvsG9muBRARm21mTEYvw8J0w6LYxU3kyo9LrAS');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rounds`
--

CREATE TABLE `rounds` (
  `roundid` int(11) NOT NULL,
  `points` int(11) NOT NULL,
  `playtime` datetime NOT NULL,
  `playerid` int(11) NOT NULL,
  `gameid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`gameid`),
  ADD KEY `gametype` (`gametype`);

--
-- Indizes für die Tabelle `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`playerid`);

--
-- Indizes für die Tabelle `rounds`
--
ALTER TABLE `rounds`
  ADD PRIMARY KEY (`roundid`),
  ADD KEY `playerid` (`playerid`),
  ADD KEY `gameid` (`gameid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `game`
--
ALTER TABLE `game`
  MODIFY `gameid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT für Tabelle `players`
--
ALTER TABLE `players`
  MODIFY `playerid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT für Tabelle `rounds`
--
ALTER TABLE `rounds`
  MODIFY `roundid` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `rounds`
--
ALTER TABLE `rounds`
  ADD CONSTRAINT `rounds_ibfk_1` FOREIGN KEY (`gameid`) REFERENCES `game` (`gameid`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rounds_ibfk_2` FOREIGN KEY (`playerid`) REFERENCES `players` (`playerid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
