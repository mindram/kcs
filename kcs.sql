-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2016 at 08:30 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kcs`
--

-- --------------------------------------------------------

--
-- Table structure for table `meniu_punktai`
--

CREATE TABLE `meniu_punktai` (
  `id` int(11) NOT NULL,
  `pavadinimas` varchar(255) NOT NULL,
  `nuoroda` varchar(255) NOT NULL,
  `turinys` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meniu_punktai`
--

INSERT INTO `meniu_punktai` (`id`, `pavadinimas`, `nuoroda`, `turinys`) VALUES
(1, 'Pagrindinis', 'index.php?url=home', ''),
(2, 'TV', '', '<div>\r\n	<span>Puslapis apie TV.</span>\r\n</div>'),
(3, 'vidus', 'index.php?url=vidus', 'šito tur?t? nerodyti!!'),
(5, 'ketvirtas', '', '		<div id="container">\r\n			<div class="pavadinimas margin0">\r\n				<h1 class="pavadinimas_h1 margin0 inline">Kaunas</h1>\r\n				<h2 class="balta margin0 padding_top8 inline">Coding</h2>\r\n				<h3 class="balta margin0 padding_top12 inline">School</h3>\r\n			</div>\r\n			<img class="margin0 block padding_top12" src="http://www.kaunascoding.lt/wp-content/themes/vcs/img/logo.png" />\r\n			<div class="meniu">\r\n				<ul>\r\n					<li>Pirmas</li>\r\n					<li class="no_left_border">Antras</li>\r\n					<li class="no_left_border">Tre?ias</li>\r\n					<li class="no_left_border">Ketvirtas</li>\r\n					<li class="no_left_border">Penktas</li>\r\n				</ul>\r\n			</div>\r\n			<br />\r\n			?veskite skai?i?: <input type="text" id="skaicius"/>\r\n			?veskite raid?: <input type="text" id="raide"/>\r\n			<button type="button" onClick="atbulai(skaicius.value, raide.value)">Mygtukas</button>\r\n			<br />\r\n			?veskite tekst?: <input type="text" id="tex" value="testas"/>\r\n			<button type="button" onClick="animacija(tex)">Mygtukas</button><br />\r\n			<button type="button" onClick="siandienos_data()">Data</button>\r\n			<span id="siandienos_data"></span>\r\n		</div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `meniu_punktai`
--
ALTER TABLE `meniu_punktai`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `meniu_punktai`
--
ALTER TABLE `meniu_punktai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
