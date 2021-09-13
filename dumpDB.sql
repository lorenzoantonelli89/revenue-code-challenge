-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Creato il: Set 13, 2021 alle 16:39
-- Versione del server: 5.7.32
-- Versione PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `revenue-test`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dump dei dati per la tabella `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'brillante sviluppatore di Torino', 'Reveneu alza il livello e assume Lorenzo Antonelli fresco di accademia presso Boolean Careers, giovane promettente.', 'https://www.linkedin.com/in/lorenzo-antonelli-4240b8213/', '2021-09-13 12:36:27', '2021-09-13 14:00:39', NULL),
(2, 'Energia pulita: nuova fonte in arrivo', 'Il sale marino usato come nuova fonte energetica\n                            I ricercatori della Penn State University hanno sviluppato una tecnologia ibrida che, \n                            unendo i sistemi più efficaci utilizzati fino a questo momento, consente di produrre energia sfruttando \n                            la differenza di concentrazione salina dell\'acqua.', 'https://www.green.it/nuova-fonte-energetica-stati-uniti/#:~:text=Il%20sale%20marino%20usato%20come%20nuova%20fonte%20energetica&text=I%20ricercatori%20della%20Penn%20State,di%20concentrazione%20salina%20dell\'acqua.', '2021-09-13 12:36:27', '2021-09-13 12:36:27', NULL),
(3, 'Green pass, nuova stretta', 'Dopo la scuola tutta la Pubblica amministrazione. Il green pass potrebbe diventare presto obbligatorio anche per i dipendenti pubblici.', 'https://www.iltempo.it/attualita/2021/08/31/news/green-pass-dipendenti-pubblici-ultime-notizie-stretta-governo-obbligo-vaccino-ministro-speranza-mario-draghi-28498809/', '2021-09-13 12:36:27', '2021-09-13 12:36:27', NULL);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;