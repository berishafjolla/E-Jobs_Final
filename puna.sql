-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 20, 2014 at 12:54 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `puna`
--

-- --------------------------------------------------------

--
-- Table structure for table `aplikacioni`
--

CREATE TABLE IF NOT EXISTS `aplikacioni` (
  `AplikacionId` int(11) NOT NULL AUTO_INCREMENT,
  `KerkoPunId` int(11) NOT NULL,
  `PunaId` int(11) NOT NULL,
  `Status` varchar(30) NOT NULL,
  `Pershkrimi` varchar(200) NOT NULL,
  PRIMARY KEY (`AplikacionId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `aplikacioni`
--

INSERT INTO `aplikacioni` (`AplikacionId`, `KerkoPunId`, `PunaId`, `Status`, `Pershkrimi`) VALUES
(1, 3, 1, 'Ftesa eshte derguar', 'Ftuar  21-Dec-2014.'),
(2, 3, 2, 'Ftesa eshte derguar', 'Ftohet me 10-MAR-2014.'),
(3, 3, 3, 'Ftesa eshte derguar', 'Ftohet me  21-Dec-2014.'),
(5, 3, 4, 'Ftesa eshte derguar', 'Ftohet me 21-Dec-2014.');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `FeedbackId` int(11) NOT NULL AUTO_INCREMENT,
  `KerkoPunId` int(11) NOT NULL,
  `Feedback` varchar(200) NOT NULL,
  `FeedbakData` date NOT NULL,
  PRIMARY KEY (`FeedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`FeedbackId`, `KerkoPunId`, `Feedback`, `FeedbakData`) VALUES
(5, 3, 'Shume mire', '2014-01-01'),
(6, 3, 'Teper mire', '2014-01-09'),
(7, 4, 'Ju faleminderit', '2014-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `lajmet`
--

CREATE TABLE IF NOT EXISTS `lajmet` (
  `LajmetId` int(11) NOT NULL AUTO_INCREMENT,
  `Lajmet` varchar(200) NOT NULL,
  `LajmetData` date NOT NULL,
  PRIMARY KEY (`LajmetId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `lajmet`
--

INSERT INTO `lajmet` (`LajmetId`, `Lajmet`, `LajmetData`) VALUES
(3, 'Konkurse te reja', '2014-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `punedhenesit`
--

CREATE TABLE IF NOT EXISTS `punedhenesit` (
  `PunedhenesiId` int(11) NOT NULL AUTO_INCREMENT,
  `KompaniaEmri` varchar(20) NOT NULL,
  `PersoniKontaktues` varchar(20) NOT NULL,
  `Adresa` varchar(100) NOT NULL,
  `Qyteti` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Telefoni` bigint(20) NOT NULL,
  `Pozita` varchar(40) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Pyetja` varchar(100) NOT NULL,
  `Pergjigjja` varchar(50) NOT NULL,
  PRIMARY KEY (`PunedhenesiId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `punedhenesit`
--

INSERT INTO `punedhenesit` (`PunedhenesiId`, `KompaniaEmri`, `PersoniKontaktues`, `Adresa`, `Qyteti`, `Email`, `Telefoni`, `Pozita`, `Status`, `UserName`, `Password`, `Pyetja`, `Pergjigjja`) VALUES
(8, 'Cactus', 'Filan Fisteku', 'Prishtine', 'Prishtine', 'filanfisteku@gmail.com', 1234567, 'Software developper', 'Confirm', 'filan', '123456', 'Who is Your Favourite Person?', 'sql'),
(9, 'Divat', 'Diva', 'Prishtine', 'Prishtine', 'divat@gmail.com', 1234567890, 'Software developer', 'Confirm', 'divat', '123456', 'Who is Your Favourite Person?', 'you'),
(10, 'FFM', 'filan', 'prishtine', 'prishtine', 'filan@gmail.com', 1212121212, 'Software engineer', 'Confirm', 'filan', '123456', 'Who is Your Favourite Person?', 'lopa'),
(11, '123', 'filan', 'prishtine', 'prishtine', 'filan@gmail.com', 12345, 'menaxher', 'Confirm', 'filan', '123456', 'Personi i preferuar?', 'nana'),
(12, 'HIM', 'Ville', 'Helsinkii', 'Helsinki', 'ville@gmail.com', 12345, 'Menaxher', 'Confirm', 'ville', '123456', 'Personi i preferuar?', 'fjolla'),
(13, 'filan', 'filan', 'prishtine', 'prishtine', 'filan@gmail.com', 12345, 'menaxher', 'Konfirmuar', 'fil', '123456', 'Personi i preferuar?', 'kike'),
(14, 'Une', 'Une', 'hell', 'heaven', 'une@gmail.com', 12345, 'hacker', 'Konfirmuar', 'une', '123456', 'Personi i preferuar?', 'une'),
(15, 'Ffm', 'mimi', 'prishtine', 'prishtine', 'mimi@gmail.com', 12345, 'asisten', 'Konfirmuar', 'mimi', '123456', 'Personi i preferuar?', 'mami');

-- --------------------------------------------------------

--
-- Table structure for table `punekerkuesit`
--

CREATE TABLE IF NOT EXISTS `punekerkuesit` (
  `KerkoPunId` int(11) NOT NULL AUTO_INCREMENT,
  `PunkerkuesEmri` varchar(20) NOT NULL,
  `Adresa` varchar(100) NOT NULL,
  `Qyteti` varchar(20) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Telefoni` bigint(20) NOT NULL,
  `Kualifikimi` varchar(20) NOT NULL,
  `Gjinia` varchar(10) NOT NULL,
  `Datelindja` date NOT NULL,
  `Permbledhje` varchar(200) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Pyetja` varchar(100) NOT NULL,
  `Pergjigjja` varchar(50) NOT NULL,
  PRIMARY KEY (`KerkoPunId`),
  KEY `JobSeekId` (`KerkoPunId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `punekerkuesit`
--

INSERT INTO `punekerkuesit` (`KerkoPunId`, `PunkerkuesEmri`, `Adresa`, `Qyteti`, `Email`, `Telefoni`, `Kualifikimi`, `Gjinia`, `Datelindja`, `Permbledhje`, `Status`, `UserName`, `Password`, `Pyetja`, `Pergjigjja`) VALUES
(3, 'Fjolla Berisha', 'Tophane', 'Prishtine', 'fjolla@gmail.com', 9898989898, 'M.C.A', 'Female', '2013-09-10', 'Marksheet.pdf', 'Confirm', 'fjolla', '123456', 'What is Your Pet Name?', 'kitty'),
(4, 'mimoza', 'rruga "Agim Ramadani"', 'Prishtine', 'mimi@gmail.com', 1233211233, 'B.C.A', 'Female', '2014-05-13', 'background.gif', 'Confirm', 'mimoza', '123456', 'Who is Your Favourite Person?', 'mami'),
(5, 'Fjolla Gashi', 'rruga "Agmi Ramadani"', 'Prishtine', 'fjolla@gmail.com', 1234567890, 'B.C.A', 'Female', '2014-05-13', 'background.gif', 'Confirm', 'fjollag', '123456', 'Who is Your Favourite Person?', 'nana'),
(6, 'Mimoza Zatriqi', 'Peje', 'Prishtine', 'mimoza@gmail.com', 1234567890, 'B.C.A', 'Male', '2014-05-13', 'images.jpg', 'Confirm', 'mimoza', '123456', 'Who is Your Favourite Person?', 'mami'),
(7, 'Filan', 'prishtine', 'prishtine', 'filan@gmail.com', 12345, 'Bachelor', 'Femer', '2014-05-19', 'cookie.php', 'Confirm', 'filan', '123456', 'Personi i preferuar?', 'nana'),
(8, 'filan', 'prishtine', 'prishtine', 'filan@gmail.com', 12345, 'Bachelor', 'Femer', '2014-05-06', 'cookie.php', 'Konfirmuar', 'filan', '123456', 'Personi i preferuar?', 'nana'),
(9, 'filan', 'prishtine', 'prishtine', 'filan@gmail.com', 12345, 'Bachelor', 'Femer', '2014-05-06', 'images.jpg', 'Pending', 'filan', '123456', 'Personi i preferuar?', 'babi'),
(11, 'Jonna', 'Prishtine', 'Prishtine', 'jonna@gmail.com', 12345, 'Bachelor', 'Femer', '2014-05-27', '10350420_10152410174321416_1225242952046372905_n.jpg', 'Confirm', 'jonna', '123456', 'Personi i preferuar?', 'ville'),
(12, 'drilon ', 'prishtine', 'prishtine', 'dril@gmail.com', 12345, 'Bachelor', 'Mashkull', '2014-05-26', '10350420_10152410174321416_1225242952046372905_n.jpg', 'Confirm', 'drilon', '123456', 'Kenga e preferuar?', 'wicked game'),
(13, 'atdhe', 'prishtine', 'prishtine', 'buja@gmail.com', 12345, 'Bachelor', 'Mashkull', '2014-05-05', '10350420_10152410174321416_1225242952046372905_n.jpg', 'Konfirmuar', 'atdhe', '123456', 'Personi i preferuar?', 'sql'),
(14, 'roy', 'prishtine', 'prishtine', 'roy@live.com', 12345, 'Bachelor', 'Mashkull', '2014-05-05', '10350420_10152410174321416_1225242952046372905_n.jpg', 'Konfirmuar', 'roy', '123456', 'Kenga e preferuar?', 'haunting'),
(15, 'simone', 'prishtine', 'prishtine', 'simone@gmail.com', 12345, 'Bachelor', 'Femer', '2014-05-05', '10350420_10152410174321416_1225242952046372905_n.jpg', 'Konfirmuar', 'simone', '123456', 'Personi i preferuar?', 'roy');

-- --------------------------------------------------------

--
-- Table structure for table `punekerkues_edukimi`
--

CREATE TABLE IF NOT EXISTS `punekerkues_edukimi` (
  `EduId` int(11) NOT NULL AUTO_INCREMENT,
  `KerkoPunId` int(11) NOT NULL,
  `Shkalla` varchar(20) NOT NULL,
  `Universiteti` varchar(100) NOT NULL,
  `VitiKaluar` mediumint(9) NOT NULL,
  `Perqindja` float NOT NULL,
  PRIMARY KEY (`EduId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `punekerkues_edukimi`
--

INSERT INTO `punekerkues_edukimi` (`EduId`, `KerkoPunId`, `Shkalla`, `Universiteti`, `VitiKaluar`, `Perqindja`) VALUES
(3, 3, 'B.C.A', 'Hasan Prishtina', 2011, 68.89);

-- --------------------------------------------------------

--
-- Table structure for table `punet`
--

CREATE TABLE IF NOT EXISTS `punet` (
  `PunaId` int(11) NOT NULL AUTO_INCREMENT,
  `KompaniaEmri` varchar(20) NOT NULL,
  `EmriPunes` varchar(50) NOT NULL,
  `PozitaELire` int(11) NOT NULL,
  `MinKualifikimi` varchar(50) NOT NULL,
  `Pershkrimi` varchar(200) NOT NULL,
  PRIMARY KEY (`PunaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `punet`
--

INSERT INTO `punet` (`PunaId`, `KompaniaEmri`, `EmriPunes`, `PozitaELire`, `MinKualifikimi`, `Pershkrimi`) VALUES
(1, 'Cactus', 'Software Developer', 2, 'M.C.A', 'ASP.NET'),
(2, 'Cactus', 'Software engineer', 3, 'B.C.A', 'TOR'),
(3, 'Cactus', 'Engineer', 1, 'B.C.A', 'Formatizim'),
(4, 'Divat', 'pastruese', 3, 'Shkolla e mesme', 'te jete pedante'),
(7, 'HIM', 'Menaxher', 2, 'Bachelor', 'Menaxher projekti');

-- --------------------------------------------------------

--
-- Table structure for table `shfrytezuesit`
--

CREATE TABLE IF NOT EXISTS `shfrytezuesit` (
  `UserId` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  PRIMARY KEY (`UserId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `shfrytezuesit`
--

INSERT INTO `shfrytezuesit` (`UserId`, `UserName`, `Password`) VALUES
(6, 'fjollag', 'admin'),
(10, 'fjollab', 'admin'),
(11, 'mimozaz', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `walkin_master`
--

CREATE TABLE IF NOT EXISTS `walkin_master` (
  `IntervistaId` int(11) NOT NULL AUTO_INCREMENT,
  `KompaniaEmri` varchar(20) NOT NULL,
  `EmriPunes` varchar(50) NOT NULL,
  `PozitaELire` int(11) NOT NULL,
  `MinKualifikimi` varchar(50) NOT NULL,
  `Pershkrimi` varchar(100) NOT NULL,
  `IntervistaData` date NOT NULL,
  `IntervistaKoha` time NOT NULL,
  PRIMARY KEY (`IntervistaId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `walkin_master`
--

INSERT INTO `walkin_master` (`IntervistaId`, `KompaniaEmri`, `EmriPunes`, `PozitaELire`, `MinKualifikimi`, `Pershkrimi`, `IntervistaData`, `IntervistaKoha`) VALUES
(1, 'Wipro Infotech', 'Freshers Required', 5, 'B.C.A', 'Hardworking Person are Required.', '2013-09-25', '09:00:00'),
(2, 'TCS Private Limited', 'Marketive Representative Invited', 2, 'Pharmacist', 'Ready TO work in North Gujarat', '2013-10-07', '09:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
