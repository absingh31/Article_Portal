-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2016 at 02:46 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iwpproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `table1`
--

CREATE TABLE `table1` (
  `T1Id` int(10) NOT NULL,
  `Name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table1`
--

INSERT INTO `table1` (`T1Id`, `Name`) VALUES
(1, 'Dipankar Das'),
(2, 'John Smith'),
(3, 'Steven'),
(4, 'Abhishek');

-- --------------------------------------------------------

--
-- Table structure for table `table2`
--

CREATE TABLE `table2` (
  `T2Id` int(10) NOT NULL,
  `UserName` varchar(30) NOT NULL,
  `Password` varchar(56) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table2`
--

INSERT INTO `table2` (`T2Id`, `UserName`, `Password`) VALUES
(1, 'dipankar12', 'e2b2628a1db6f0d21c7d2f7f18b68314'),
(2, 'john1', '827ccb0eea8a706c4c34a16891f84e7b'),
(3, 'Gerrard', 'adcaec3805aa912c0d0b14a81bedb6ff'),
(4, 'abhishek1', 'f589a6959f3e04037eb2b3eb0ff726ac');

-- --------------------------------------------------------

--
-- Table structure for table `table3`
--

CREATE TABLE `table3` (
  `SNo` int(10) NOT NULL,
  `T3Id` int(10) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Article` longtext NOT NULL,
  `Upvotes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table3`
--

INSERT INTO `table3` (`SNo`, `T3Id`, `Title`, `Article`, `Upvotes`) VALUES
(1, 3, 'Steven Gerrard', 'Steven George Gerrard, MBE (born 30 May 1980) is an English professional footballer who plays for Major League Soccer club LA Galaxy as a central midfielder. He spent the majority of his career playing for Premier League club Liverpool, with most of that time as their captain.', 9),
(2, 1, 'Spain', 'Spain (Listeni/ËˆspeÉªn/; Spanish: EspaÃ±a [esËˆpaÉ²a] ( listen)), officially the Kingdom of Spain (Spanish: Reino de EspaÃ±a),[a][b] is a sovereign state largely located on the Iberian Peninsula in southwestern Europe, with archipelagos in the Atlantic Ocean and Mediterranean Sea, and several small territories on and near the North African coast. Its mainland is bordered to the south and east by the Mediterranean Sea except for a small land boundary with Gibraltar; to the north and northeast by France, Andorra, and the Bay of Biscay; and to the west and northwest by Portugal and the Atlantic Ocean. Along with France and Morocco, it is one of only three countries to have both Atlantic and Mediterranean coastlines. Extending to 1,214 km (754 mi), the Portugalâ€“Spain border is the longest uninterrupted border within the European Union.\r\n		', 7),
(3, 1, 'Spanish History', 'Iberia enters written records as a land populated largely by the Iberians, Basques and Celts. After an arduous conquest, the peninsula came under the rule of the Roman Empire. During the early Middle Ages it came under Germanic rule but later, much of it was conquered by Moorish invaders from North Africa. In a process that took centuries, the small Christian kingdoms in the north gradually regained control of the peninsula. The last Moorish kingdom fell in the same year Columbus reached the Americas. A global empire began which saw Spain become the strongest kingdom in Europe, the leading world power for a century and a half, and the largest overseas empire for three centuries.		\r\n		', 5),
(4, 2, 'Cricket', 'Cricket is a bat-and-ball game played between two teams of eleven players on a cricket field, at the centre of which is a rectangular 22-yard-long pitch with a wicket (a set of three wooden stumps) sited at each end. One team, designated the batting team, attempts to score as many runs as possible, whilst their opponents field. Each phase of play is called an innings. After either ten batsmen have been dismissed or a set number of overs have been completed, the innings ends and the two teams then swap roles. The winning team is the one that scores the most runs, including any extras gained, during their one or two innings.			\r\n		', 7),
(5, 2, 'Climate', 'The climate of a location is affected by its latitude, terrain, and altitude, as well as nearby water bodies and their currents. Climates can be classified according to the average and the typical ranges of different variables, most commonly temperature and precipitation. The most commonly used classification scheme was KÃ¶ppen climate classification originally developed by Wladimir KÃ¶ppen. The Thornthwaite system,[4] in use since 1948, incorporates evapotranspiration along with temperature and precipitation information and is used in studying biological diversity and the potential effects on it of climate changes. The Bergeron and Spatial Synoptic Classification systems focus on the origin of air masses that define the climate of a region.		\r\n		', 8),
(6, 1, 'Weather', 'Paleoclimatology is the study of ancient climates. Since direct observations of climate are not available before the 19th century, paleoclimates are inferred from proxy variables that include non-biotic evidence such as sediments found in lake beds and ice cores, and biotic evidence such as tree rings and coral. Climate models are mathematical models of past, present and future climates. Climate change may occur over long and short timescales from a variety of factors; recent warming is discussed in global warming.		\r\n		', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table1`
--
ALTER TABLE `table1`
  ADD PRIMARY KEY (`T1Id`);

--
-- Indexes for table `table2`
--
ALTER TABLE `table2`
  ADD PRIMARY KEY (`T2Id`);

--
-- Indexes for table `table3`
--
ALTER TABLE `table3`
  ADD PRIMARY KEY (`SNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table1`
--
ALTER TABLE `table1`
  MODIFY `T1Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table2`
--
ALTER TABLE `table2`
  MODIFY `T2Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `table3`
--
ALTER TABLE `table3`
  MODIFY `SNo` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
