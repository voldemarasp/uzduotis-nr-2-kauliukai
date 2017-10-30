-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2017 at 12:28 PM
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
(188, '4', '0.5', 'jon', '2017-10-30'),
(189, '4', '0.2', 'jon', '2017-10-30'),
(190, '4', '0.1', 'jon', '2017-10-30'),
(191, '4', '0.2', 'jon', '2017-10-30');

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
