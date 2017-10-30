-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 12:16 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kazino`
--

-- --------------------------------------------------------

--
-- Table structure for table `vartotojai`
--

CREATE TABLE `vartotojai` (
  `id` int(11) NOT NULL,
  `vardas` text NOT NULL,
  `slaptazodis` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vartotojai`
--

INSERT INTO `vartotojai` (`id`, `vardas`, `slaptazodis`) VALUES
(1, 'test', '$2y$10$2CA6kvrOtnQ9/7Vi8jWRDey1ykQgr4Twwrzv9bD6f0vSVodcs3mzS'),
(2, 'tutu', '$2y$10$6THM2jNE8dY4i7jTUu.hu.vIuhtmtjDsWoBTn.an3dhlQevGKSgjG'),
(3, 'kak', '$2y$10$8AFyr2fosiSo.uoMg8cQIODSNSmG36N7nmmxo8C/PqOFW7r3KpSRG'),
(4, 'tomas', '$2y$10$cg3DSocInh2mgma/IX0xx.0fO3QeKo53pUw5IL3FdCq/Y9f2oSiVu'),
(5, 'tomosius', '$2y$10$jafkiJMEwHDrTXVlY8200evq6fwwwDmSFfm9te9T4HfD3WovoHjjO'),
(6, 'tomtom', '$2y$10$bcPfNK.QQlCiRv67F/HCQ.eqD3dNxBkAn0v15LcreARHOwqknptmS'),
(7, 'jon', '$2y$10$SHHpEe52/oAK0AEqBabG4OK0PDl8W7hgZUueJecZL2EsnCcHm0iGu');

-- --------------------------------------------------------

--
-- Table structure for table `zaidimai`
--

CREATE TABLE `zaidimai` (
  `id` int(11) NOT NULL,
  `sukimas` text NOT NULL,
  `rezultatas` text NOT NULL,
  `vartotojas` text NOT NULL,
  `data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zaidimai`
--

INSERT INTO `zaidimai` (`id`, `sukimas`, `rezultatas`, `vartotojas`, `data`) VALUES
(154, '4', '0.4', 'tomas', '2017-10-27'),
(153, '4', '0.6', 'tomas', '2017-10-27'),
(152, '4', '0', 'tomas', '2017-10-27'),
(151, '4', '0.3', 'tomas', '2017-10-27'),
(150, '4', '0.3', 'kak', '2017-10-27'),
(149, '4', '0.4', 'kak', '2017-10-27'),
(148, '4', '0.4', 'kak', '2017-10-27'),
(147, '4', '0.5', 'kak', '2017-10-27'),
(146, '4', '0.1', 'tutu', '2017-10-27'),
(145, '4', '0.6', 'tutu', '2017-10-27'),
(144, '4', '0.2', 'tutu', '2017-10-27'),
(143, '4', '0.5', 'tutu', '2017-10-27'),
(142, '4', '0.6', 'tutute', '2017-10-27'),
(141, '4', '0.2', 'tutu', '2017-10-27'),
(140, '4', '0.5', 'tutu', '2017-10-27'),
(139, '4', '0.2', 'tutu', '2017-10-27'),
(138, '4', '0.6', 'tutu', '2017-10-27'),
(155, '4', '0.6', 'tomas', '2017-10-27'),
(156, '4', '0.3', 'kak', '2017-10-27'),
(157, '4', '0.4', 'kak', '2017-10-27'),
(158, '4', '0.1', 'tomosius', '2017-10-30'),
(159, '4', '0.4', 'tomosius', '2017-10-30'),
(160, '4', '0.6', 'tomosius', '2017-10-30'),
(161, '4', '0.3', 'tomosius', '2017-10-30'),
(162, '4', '0.5', 'tomosius', '2017-10-30'),
(163, '4', '0.6', 'tomosius', '2017-10-30'),
(164, '4', '0.4', 'tomosius', '2017-10-30'),
(165, '4', '0.2', 'tomosius', '2017-10-30'),
(166, '4', '0.3', 'tomosius', '2017-10-30'),
(167, '4', '0.6', 'tomtom', '2017-10-30'),
(168, '4', '0.6', 'tomtom', '2017-10-30'),
(169, '4', '0.6', 'tomtom', '2017-10-30'),
(170, '4', '0.1', 'tomtom', '2017-10-30'),
(171, '4', '0.5', 'tomtom', '2017-10-30'),
(172, '4', '0.4', 'tomtom', '2017-10-30'),
(173, '4', '0.5', 'tomtom', '2017-10-30'),
(174, '4', '0.6', 'tomtom', '2017-10-30'),
(175, '4', '0.1', 'tomtom', '2017-10-30'),
(176, '4', '0.4', 'tomtom', '2017-10-30'),
(177, '4', '0.6', 'tomtom', '2017-10-30'),
(178, '4', '0.4', 'tomtom', '2017-10-30'),
(179, '4', '0.3', 'tomtom', '2017-10-30'),
(180, '4', '0.5', 'tomtom', '2017-10-30'),
(181, '4', '0.5', 'tomtom', '2017-10-30'),
(182, '4', '0.4', 'tomtom', '2017-10-30'),
(183, '4', '0.5', 'tomtom', '2017-10-30'),
(184, '4', '0.3', 'tomtom', '2017-10-30'),
(185, '4', '0.3', 'tomtom', '2017-10-30'),
(186, '4', '0.5', 'tomtom', '2017-10-30'),
(187, '4', '0.5', 'tomtom', '2017-10-30'),
(188, '4', '0.5', 'jon', '2017-10-30'),
(189, '4', '0.2', 'jon', '2017-10-30'),
(190, '4', '0.1', 'jon', '2017-10-30'),
(191, '4', '0.2', 'jon', '2017-10-30'),
(192, '4', '10000', 'jon', '2017-10-30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `vartotojai`
--
ALTER TABLE `vartotojai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zaidimai`
--
ALTER TABLE `zaidimai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `vartotojai`
--
ALTER TABLE `vartotojai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `zaidimai`
--
ALTER TABLE `zaidimai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
