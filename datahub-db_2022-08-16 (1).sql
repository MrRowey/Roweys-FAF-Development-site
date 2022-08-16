-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 16, 2022 at 09:46 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datahub`
--

-- --------------------------------------------------------

--
-- Table structure for table `1v1_data`
--

CREATE TABLE `1v1_data` (
  `ID` int NOT NULL,
  `playerID` int NOT NULL,
  `opponentID` int NOT NULL,
  `opponentMatchResultID` int NOT NULL,
  `playerMatchResultID` int NOT NULL,
  `finalsMatch` tinyint(1) NOT NULL,
  `playerFactionID` int NOT NULL,
  `opponentFactionID` int NOT NULL,
  `mapID` int NOT NULL,
  `tournamentID` int NOT NULL,
  `replayID` int DEFAULT NULL,
  `year` year NOT NULL,
  `position` int DEFAULT NULL,
  `income` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `1v1_data`
--

INSERT INTO `1v1_data` (`ID`, `playerID`, `opponentID`, `opponentMatchResultID`, `playerMatchResultID`, `finalsMatch`, `playerFactionID`, `opponentFactionID`, `mapID`, `tournamentID`, `replayID`, `year`, `position`, `income`) VALUES
(1, 87, 80, 1, 0, 0, 2, 3, 15, 1, 3627915, 2015, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` int NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `alias`
--

CREATE TABLE `alias` (
  `ID` int NOT NULL,
  `alias` varchar(25) NOT NULL,
  `playerID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `alias`
--

INSERT INTO `alias` (`ID`, `alias`, `playerID`) VALUES
(1, 'bigpriapism', 2),
(2, 'effthisaccount', 44),
(3, 'Femboy', 192),
(4, 'haachamachama', 191);

-- --------------------------------------------------------

--
-- Table structure for table `faction`
--

CREATE TABLE `faction` (
  `ID` int NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `faction`
--

INSERT INTO `faction` (`ID`, `name`) VALUES
(1, 'Aeon'),
(2, 'UEF'),
(3, 'Cybran'),
(4, 'Seraphim');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `sizeID` int NOT NULL,
  `image` varchar(100) NOT NULL,
  `Avaliable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`ID`, `name`, `sizeID`, `image`, `Avaliable`) VALUES
(1, 'Abis Garden', 1, 'Abis_Garden.png', 1),
(2, 'Adaptive Archsimkats Valley', 3, 'Adaptive_Archsimkats_Valley.png', 1),
(3, 'Adaptive Hardshield Oasis', 1, 'Adaptive_Hardshield_Oasis.png', 1),
(4, 'Adaptive Kusoge', 6, 'Adaptive_Kusoge.png', 1),
(5, 'Adaptive Maridia', 6, 'Adaptive_Maridia.png', 1),
(6, 'Adaptive Pyramid', 3, 'Adaptive_Pyramid.png', 1),
(7, 'Africa', 3, 'Africa.png', 1),
(8, 'Ambush Pass', 1, 'Ambush_Pass.png', 1),
(9, 'Ambush The Enemy', 1, 'Ambush_The_Enemy.png', 1),
(10, 'Amoor', 3, 'Amoor.png', 1),
(11, 'Apchui', 1, 'Apchui.png', 1),
(12, 'Arcane', 3, 'Arcane.png', 1),
(13, 'Artic Refuge', 3, 'Artic_Refuge.png', 1),
(14, 'Autumn', 3, 'Autumn.png', 1),
(15, 'Crimson Feud', 1, 'Crimson_Feud.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `map_size`
--

CREATE TABLE `map_size` (
  `ID` int NOT NULL,
  `size` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `map_size`
--

INSERT INTO `map_size` (`ID`, `size`) VALUES
(1, 5),
(2, 7.5),
(3, 10),
(4, 12.5),
(5, 15),
(6, 20);

-- --------------------------------------------------------

--
-- Table structure for table `match_result`
--

CREATE TABLE `match_result` (
  `ID` int NOT NULL,
  `result` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `match_result`
--

INSERT INTO `match_result` (`ID`, `result`) VALUES
(1, 'Win'),
(2, 'Loss'),
(3, 'Draw');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `ID` int NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`ID`, `username`) VALUES
(1, 'Abandoned'),
(2, 'AchievedJaguar8'),
(3, 'Adjux'),
(4, 'Aeonrico'),
(5, 'Afknoob'),
(6, 'Agrum'),
(7, 'Alegnagyobbkiraj'),
(8, 'Alina-kiss'),
(9, 'AlmHurricane'),
(10, 'Apofenas'),
(11, 'Archsimkat'),
(12, 'Armaster'),
(13, 'Aulex'),
(14, 'Autonoob'),
(15, 'Blackdeath'),
(16, 'Blackheart'),
(17, 'Blast_Chilled'),
(18, 'Bleedingwing'),
(19, 'BlinChik'),
(20, 'Blodir'),
(21, 'BoomNoob'),
(22, 'Box-'),
(23, 'Bravo_'),
(24, 'BringerOfNoms'),
(25, 'BRS_DCCC97'),
(26, 'Cancle'),
(27, 'CaptainKlutz'),
(28, 'Cetea'),
(29, 'Cheerios'),
(30, 'Chevalier'),
(31, 'ChitChat_88'),
(32, 'Chosen'),
(33, 'Commerz-Gandalf'),
(34, 'Crehzy'),
(35, 'CyBopoB_'),
(36, 'Darkym'),
(37, 'Death_Squad'),
(38, 'DemonStreamer666'),
(39, 'Donalbain'),
(40, 'Doqqel'),
(41, 'Dot_'),
(42, 'Drakas'),
(43, 'Dro'),
(44, 'Biass'),
(45, 'econoob'),
(46, 'Elzewire'),
(47, 'Embers'),
(48, 'EricaPwnz'),
(49, 'Eternal-'),
(50, 'Evan_'),
(51, 'Everywhere116'),
(52, 'Explosive'),
(53, 'Exselsior'),
(54, 'F-Putin'),
(55, 'FunkOff'),
(56, 'GallowsBird'),
(57, 'Gasper_Vladi'),
(58, 'Gently-'),
(59, 'GFY_Deponny'),
(60, 'Grimmstriper'),
(61, 'Grimplex'),
(62, 'GrunttiNoob'),
(63, 'Heaven'),
(64, 'Hendrix'),
(65, 'Hirschy'),
(66, 'HOSCHMOSCH'),
(67, 'Hybrid_'),
(68, 'Hypanoob'),
(69, 'Inspektor_Kot'),
(70, 'Invictus__'),
(71, 'IronTony'),
(72, 'Isen'),
(73, 'Iszh'),
(74, 'ItsYourFuneral'),
(75, 'Jabka'),
(76, 'JaggedAppliance'),
(77, 'Jip'),
(78, 'Johnice227'),
(79, 'Jonathaam'),
(80, 'Juraj'),
(81, 'Keyser'),
(82, 'Kite'),
(83, 'Koiskix'),
(84, 'LexiconVII'),
(85, 'Linksthor'),
(86, 'Lucied'),
(87, 'LuXy'),
(88, 'MacroNoob'),
(89, 'Magnetic'),
(90, 'MaIicious'),
(91, 'Maitz'),
(92, 'Man_of_Action'),
(93, 'Manley'),
(94, 'Manread'),
(95, 'MasterPiece'),
(96, 'Matr1'),
(97, 'MazorNoob'),
(98, 'Mephi'),
(99, 'MilchRatchet'),
(100, 'Misthafalls'),
(101, 'MoMo-Uchiha'),
(102, 'Montana'),
(103, 'Moonbearonmeth'),
(104, 'Morax'),
(105, 'Mr-Smith'),
(106, 'MrStallin'),
(107, 'NarNerdPower'),
(108, 'Nepalm'),
(109, 'Nexus-'),
(110, 'Neytron'),
(111, 'Nombringer'),
(112, 'NoOneCares'),
(113, 'NubFriedRice'),
(114, 'NullyDozerBoob'),
(115, 'Ogre'),
(116, 'OhKay'),
(117, 'Orokamono'),
(118, 'OxideIon'),
(119, 'P0P0LIAK0V73'),
(120, 'Paralon'),
(121, 'Penemue'),
(122, 'Pheonix-'),
(123, 'Picoo'),
(124, 'Pl4t_'),
(125, 'Plasma_Wolf'),
(126, 'PlasmaLightning'),
(127, 'plz-no-bannis'),
(128, 'R4sperdan'),
(129, 'Raider-'),
(130, 'Reactive_'),
(131, 'Returning_Noob'),
(132, 'Resistance'),
(133, 'RidleyCore'),
(134, 'Rikai'),
(135, 'Riot-'),
(136, 'Robogear'),
(137, 'RowanMorseYT'),
(138, 'Rowey'),
(139, 'Ryfun'),
(140, 'Scoot'),
(141, 'Se7ven'),
(142, 'Search4Destroy'),
(143, 'Shazam-Israel'),
(144, 'Sheikah'),
(145, 'Shen'),
(146, 'Shokaku22'),
(147, 'SilentNoob'),
(148, 'SilverNoob-5'),
(149, 'SiwaonaDaphnewen'),
(150, 'Speed2'),
(151, 'StormLantern'),
(152, 'Super'),
(153, 'SupremeBurger'),
(154, 'Surtsan'),
(155, 'Swkoll'),
(156, 'SYSTEM_FAILURE'),
(157, 'T_R_U_Baka'),
(158, 'TAG_PEBBLE'),
(159, 'TAG_Rock'),
(160, 'Tagada'),
(161, 'TechHouseNoob'),
(162, 'Templar'),
(163, 'Tex'),
(164, 'Thalia'),
(165, 'The_Worst'),
(166, 'TheBlackWolf'),
(167, 'TheCatNooberino'),
(168, 'TheCornishGinger'),
(169, 'TheRedViper'),
(170, 'ThomasHiatt'),
(171, 'ThunderChild'),
(172, 'Tokyto_'),
(173, 'Tomruler'),
(174, 'TridentArcher'),
(175, 'Turbo2'),
(176, 'Turinturambar'),
(177, 'Turtleman_'),
(178, 'UnicornNoob'),
(179, 'Unknow'),
(180, 'Utterly_Pathetic'),
(181, 'Vaginator_'),
(182, 'Vlastav'),
(183, 'Voodoo'),
(184, 'WhenDayBreaks'),
(185, 'White_Free_Owl'),
(186, 'White-Horse'),
(187, 'Zlo'),
(188, 'zock'),
(189, 'ZwaffelNoob'),
(190, 'ZXCCURSED'),
(191, 'Yudi'),
(192, 'Javi'),
(193, 'Wifi_');

-- --------------------------------------------------------

--
-- Table structure for table `player_to_data`
--

CREATE TABLE `player_to_data` (
  `ID` int NOT NULL,
  `aliasID` int NOT NULL,
  `playerID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `ID` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `typeID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`ID`, `name`, `typeID`) VALUES
(1, 'Prime Commander', 1),
(2, 'LegendOfTheStars Qualifier\'s 2016', 1),
(3, 'LegendOfTheStars 2016 End of Year Championship', 1),
(4, 'LegendOfTheStars Qualifier\'s 2017', 1),
(5, 'LegendOfTheStars Backup\'s 2017', 1),
(6, 'LegendOfTheStars 2017 End of Year Championship', 1),
(7, '1v1 Tournament: FAF Masters Cup', 1),
(8, 'i5 Champion Tourney', 1),
(9, 'The Galaxy Cup Qualifiers', 1),
(10, 'The Galaxy Cup Grand Final', 1),
(11, 'LegendOfTheStars Qualifier\'s 2018', 1),
(12, 'LegendOfTheStars Backup\'s 2018', 1),
(13, 'LegendOfTheStars 2018 End of Year Championship', 1),
(14, 'Beta Patch 1v1', 1),
(15, 'LegendOfTheStars Qualifier\'s 2019\r\n', 1),
(16, 'LegendOfTheStars Substitution 2019\r\n', 1),
(17, 'LegendOfTheStars 2019 End of Year Championship', 1),
(18, 'Blitz Tourney #1 2020', 1),
(19, 'Blitz Tourney #2 2020', 1),
(20, 'Blitz Tourney #3 2020', 1),
(21, 'Blitz Tourney #4 2020', 1),
(22, '2020 Summer Invitational Qualifier', 1),
(23, '2020 Summer Invitational', 1),
(24, '2020 Fall Invitational Qualifier', 1),
(25, '2020 Fall Invitational\r\n', 1),
(26, 'LegendOfTheStars Qualifier\'s 2020\r\n', 1),
(27, 'LegendOfTheStars Substitution Qualifier 2020', 1),
(28, '1v1 MapGen Tournament', 1),
(29, '2021 Spring Invitational Qualifier\r\n', 1),
(30, '2021 Spring Invitational', 1),
(31, '2021 April League Invitational', 1),
(32, '2021 June League Invitational', 1),
(33, '2021 Summer Invitational Qualifier', 1),
(34, '2021 Summer Invitational', 1),
(35, 'King of Crazyrush Tournament', 1),
(36, 'August League Invitational 2021', 1),
(37, 'Mini Legend of the Stars #1', 1),
(38, 'October League Invitational', 1),
(39, 'Mini Legend of the Stars #2', 1),
(40, '2021 Fall Invitational Qualifier\r\n', 1),
(41, '2021 Fall Invitational', 1),
(42, 'Legend of the Stars Qualifier\'s 2021\r\n', 1),
(43, 'Legend Of The Stars 2021 Championship', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tournament_type`
--

CREATE TABLE `tournament_type` (
  `ID` int NOT NULL,
  `type` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tournament_type`
--

INSERT INTO `tournament_type` (`ID`, `type`) VALUES
(1, 'Single Elimination'),
(2, 'Double Elimination'),
(3, 'Round Robin'),
(4, 'Swiss'),
(5, 'Free For All');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1v1_data`
--
ALTER TABLE `1v1_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `alias`
--
ALTER TABLE `alias`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `faction`
--
ALTER TABLE `faction`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `map_size`
--
ALTER TABLE `map_size`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `match_result`
--
ALTER TABLE `match_result`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `player_to_data`
--
ALTER TABLE `player_to_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tournament_type`
--
ALTER TABLE `tournament_type`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1v1_data`
--
ALTER TABLE `1v1_data`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `alias`
--
ALTER TABLE `alias`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `faction`
--
ALTER TABLE `faction`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `map_size`
--
ALTER TABLE `map_size`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `match_result`
--
ALTER TABLE `match_result`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `player_to_data`
--
ALTER TABLE `player_to_data`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tournament_type`
--
ALTER TABLE `tournament_type`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
