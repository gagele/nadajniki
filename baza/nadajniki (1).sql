-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 09 Lut 2019, 14:54
-- Wersja serwera: 10.1.37-MariaDB
-- Wersja PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `nadajniki`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `nadajnik`
--

CREATE TABLE `nadajnik` (
  `id` int(9) NOT NULL,
  `call_sign` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `name` varchar(64) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `date` varchar(10) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `time` varchar(5) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `rst` int(3) NOT NULL,
  `locator` varchar(6) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `remark` varchar(255) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `nadajnik`
--
ALTER TABLE `nadajnik`
  ADD PRIMARY KEY (`id`) KEY_BLOCK_SIZE=9;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `nadajnik`
--
ALTER TABLE `nadajnik`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
