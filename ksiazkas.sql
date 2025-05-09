-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 29, 2024 at 10:49 PM
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
-- Database: `biblioconnect`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazkas`
--

CREATE TABLE `ksiazkas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tytul` varchar(255) NOT NULL,
  `autor` varchar(255) NOT NULL,
  `rok_wydania` int(11) NOT NULL,
  `kategoria` varchar(255) NOT NULL,
  `dostepnosc` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `wypozyczenie` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ksiazkas`
--

INSERT INTO `ksiazkas` (`id`, `tytul`, `autor`, `rok_wydania`, `kategoria`, `dostepnosc`, `status`, `created_at`, `updated_at`, `wypozyczenie`) VALUES
(1, 'Pan Tadeusz', 'Adam Mickiewicz', 2020, 'Epopeja klasyczna', 1, 0, '2024-01-28 19:21:36', '2024-01-29 20:18:47', 0),
(2, 'Nowy wspanialy swiat', 'Audley Huxley', 1990, 'Powiesc science fiction', 1, 0, '2024-01-28 19:23:55', '2024-01-29 18:53:07', 0),
(3, 'Makbet', 'William Szekspir', 1980, 'Powiesc klasyczna', 1, 0, '2024-01-28 19:24:22', '2024-01-29 19:15:40', 0),
(4, 'Morfeusz', 'Adam Lis', 2010, 'Powiesc science fiction', 1, 0, '2024-01-28 19:24:54', '2024-01-28 19:24:54', 0),
(5, 'Dzieci z Bulerbyn', 'Rudolf Hess', 2000, 'Powiesc dla dzieci', 1, 0, '2024-01-28 19:25:02', '2024-01-28 19:25:02', 0),
(6, 'Lizbona okiem Polaka', 'Maciej Adamczyk', 2018, 'Turystyczna', 1, 0, '2024-01-28 19:25:10', '2024-01-28 19:25:10', 0),
(7, 'Koniowal', 'Ignacy Witek', 2023, 'Popularno naukowa', 1, 0, '2024-01-28 19:25:16', '2024-01-28 19:25:16', 0),
(8, 'Kosmos', 'Ignacy Witek', 2011, 'Popularno naukowa', 1, 0, '2024-01-28 19:25:22', '2024-01-28 19:25:22', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazkas`
--
ALTER TABLE `ksiazkas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ksiazkas`
--
ALTER TABLE `ksiazkas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
