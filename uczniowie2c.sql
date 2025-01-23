-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 23, 2025 at 01:11 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `szkola`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie2c`
--

CREATE TABLE `uczniowie2c` (
  `id` int(11) NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `pasja` text NOT NULL,
  `ocena` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uczniowie2c`
--

INSERT INTO `uczniowie2c` (`id`, `imie`, `nazwisko`, `pasja`, `ocena`) VALUES
(1, 'Marek', 'Wiśniewski', 'Muzyka', 0),
(2, 'Paweł', 'Wojciechowski', 'Piłka nożna', 0),
(3, 'Piotr', 'Jankowski', 'Podróże', 0),
(4, 'Agnieszka', 'Dąbrowska', 'Pływanie', 0),
(5, 'Izabela', 'Kubiak', 'Taniec', 0),
(6, 'Jakub', 'Jasiński', 'Lektury', 0),
(7, 'Katarzyna', 'Sikora', 'Turystyka', 0),
(8, 'Sebastian', 'Pawlak', 'Gra na gitarze', 0),
(9, 'Olof', 'Maister', 'Pogchamp', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uczniowie2c`
--
ALTER TABLE `uczniowie2c`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uczniowie2c`
--
ALTER TABLE `uczniowie2c`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
