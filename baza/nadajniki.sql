-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Sty 2019, 20:36
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
  `call_sign` varchar(255) NOT NULL,
  `name` varchar(64) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(5) NOT NULL,
  `rst` int(3) NOT NULL,
  `locator` varchar(6) NOT NULL,
  `remark` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `nadajnik`
--

INSERT INTO `nadajnik` (`id`, `call_sign`, `name`, `date`, `time`, `rst`, `locator`, `remark`) VALUES
(1, 'Siema to pierwszy wpis na moim blogu', 'Czarek', '23/01/2019', '20:32', 997, 'ER77YK', 'Mam nadzieje ze moj wpis sie wam podobal, nie zapomnijcie o lapce w gore i wgl');

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
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
