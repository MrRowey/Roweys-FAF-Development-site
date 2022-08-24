-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 24, 2022 at 11:36 PM
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
(1, 87, 80, 2, 1, 0, 2, 3, 15, 1, 3627915, 2015, NULL, 0);

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
(16, 'Balmy', 3, 'Balmy.png', 1),
(17, 'Bloodthrone', 3, 'Bloodthrone.png', 1),
(18, 'Break V3', 1, 'Break.png', 1),
(19, 'Broken Vows', 3, 'Broken_Vows.png', 1),
(40, 'Cadmium Green', 3, 'Cadmium_Green.png', 1),
(41, 'Canis River', 1, 'Canis_River.png', 1),
(42, 'Cobalt Valley', 3, 'Cobalt_Valley.png', 1),
(43, 'Cold Conflict', 1, 'Cold_Conflict.png', 1),
(44, 'Comet Catcher', 3, 'Comet_Catcher.png', 1),
(45, 'Crag Dunes', 1, 'Crag_Dunes.png', 1),
(46, 'Crash Site', 3, 'Crash_Site.png', 1),
(47, 'Crazy Rush', 1, 'Crazy_Rush.png', 1),
(48, 'Crimson Feud', 1, 'Crimson_Feud.png', 1),
(49, 'Crossfire Canal', 6, 'Crossfire_Canal.png', 1),
(50, 'Darkfall', 3, 'Darkfall.png', 1),
(51, 'Daroza\'s Sanctuary\r\n', 3, 'Darozas_Sanctuary.png\r\n', 1),
(52, 'Desert Arena', 1, 'Desert_Arena.png', 1),
(53, 'Desert Joust', 1, 'Desert_Joust.png', 1),
(54, 'Desert Planet II', 3, 'Desert_Planet_II.png', 1),
(55, 'Desolate Dunes', 3, 'Desolate_Dunes.png', 1),
(56, 'Diversity', 3, 'Diversity.png', 1),
(57, 'Dry Canyon', 3, 'Dry_Canyon.png', 1),
(58, 'Dusty Grounds', 1, 'Dusty_Grounds.png', 1),
(59, 'Emerald Crater', 6, 'Emerald_Crater.png', 1),
(60, 'Emerald Terraces', 3, 'Emerald_Terraces.png', 1),
(61, 'Esgaroth\'s Ruins', 1, 'Esgaroths_Ruins.png', 1),
(62, 'Eye of the Storm', 3, 'EotS.png\r\n', 1),
(63, 'Festea VII', 3, 'Festea_VII.png', 1),
(64, 'Fields of Isis', 3, 'Fields_of_Isis.png', 1),
(65, 'Fields of Thunder', 1, 'Fields_of_Thunder.png', 1),
(66, 'Finn\'s Revenge', 3, 'Finns_Revenge.png', 1),
(67, 'Firelight', 1, 'Firelight.png', 1),
(68, 'Floralis', 1, 'Floralis.png', 1),
(69, 'Forbidden Pass', 3, 'Forbidden_Pass.png', 1),
(70, 'Forgotten Facilities', 3, 'Forgotten_Facilities.png', 1),
(71, 'Four-Leaf Clover', 3, 'Four-Leaf_Clover.png', 1),
(72, 'Frithen', 3, 'Frithen.png', 1),
(73, 'Frozen Firefight', 6, 'Frozen_Firefight.png', 1),
(74, 'Frozen Isis', 3, 'Frozen_Isis.png', 1),
(75, 'Goodlands', 3, 'Goodlands.png', 1),
(76, 'HardFFA', 1, 'HardFFA.png', 1),
(77, 'Havasu Canyon', 6, 'Havasu_Canyon.png', 1),
(78, 'Haven Reef', 3, 'Haven_Reef.png', 1),
(79, 'High Noon', 3, 'High_Noon.png', 1),
(80, 'Hilly Plateau', 3, 'Hilly_Plateau.png', 1),
(81, 'Huracan', 3, 'Huracan.png', 1),
(82, 'Icelands', 3, 'Icelands.png', 1),
(83, 'Jungle Valley', 1, 'Jungle_Valley.png', 1),
(84, 'Krakens Nest', 6, 'Krakens_Nest.png', 1),
(85, 'Lake Arokh', 1, 'Lake_Arokh.png', 1),
(86, 'Last Oasis', 3, 'Last_Oasis.png', 1),
(87, 'Lena River', 6, 'Lena_River.png', 1),
(88, 'Loki\r\n', 3, 'Loki.png', 1),
(89, 'Lost Paradise Island', 6, 'Lost_Paradise_Island.png\r\n', 1),
(90, 'Lots of Mass', 3, 'Four-Leaf_Clover.png', 1),
(91, 'Map Generator 5km', 1, 'Map_Generator.png', 1),
(92, 'Map Generator 10km', 3, 'Map_Generator.png', 1),
(93, 'Map Generator 15km', 5, 'Map_Generator.png', 1),
(94, 'Map Generator 20km', 6, 'Map_Generator.png', 1),
(95, 'Mentor', 6, 'Mentor.png', 1),
(96, 'Mirage', 1, 'Mirage.png', 1),
(97, 'Monaki', 1, 'Monaki.png\r\n', 1),
(98, 'Monster Girl Arena', 3, 'Monster_Girl_Arena.png', 1),
(99, 'Moonlight', 1, 'Moonlight.png', 1),
(100, 'Niflheim - Final II', 3, 'Niflheim.png', 1),
(101, 'Norfair', 6, 'Norfair.png', 1),
(102, 'Ocil Wetlands', 3, 'Ocil_Wetlands.png', 1),
(103, 'Open Palms', 3, 'Open_Palms.png', 1),
(104, 'Open Waters', 3, 'Open_Waters.png', 1),
(105, 'Open Zeta', 3, 'Open_Zeta.png', 1),
(106, 'Oracle', 3, 'Oracle.png', 1),
(107, 'Owly Cliffs', 1, 'Owly_Cliffs.png', 1),
(108, 'Painted Desert', 6, 'Painted_Desert.png', 1),
(109, 'Palaneum', 1, 'Palaneum.png', 1),
(110, 'Pelagial V2', 6, 'Pelagial_V2.png', 1),
(111, 'Phaaze', 3, 'Phaaze.png', 1),
(112, 'Point of Reach', 6, 'Point_of_Reach.png', 1),
(113, 'Polar Depression', 3, 'Polar_Depression.png', 1),
(114, 'Quantum Sea', 6, 'Quantum_Sea.png', 1),
(115, 'Red Rocks', 3, 'Red_Rocks.png', 1),
(116, 'Regor VI Highlands', 3, 'Regor_VI_Highlands.png', 1),
(117, 'Roanoke Abyss', 6, 'Roanoke_Abyss.png', 1),
(118, 'Saltrock Colony', 3, 'Saltrock_Colony.png', 1),
(119, 'Sentry Point', 1, 'Sentry_Point.png', 1),
(120, 'Seraphim Glaciers', 6, 'Seraphim_Glaciers.png', 1),
(121, 'Seraphim Outpost', 3, 'Seraphim_Outpost.png', 1),
(122, 'Seraphim Outpost EP', 6, 'Seraphim_Outpost_EP.png', 1),
(123, 'Serenity Desert', 3, 'Serenity_Desert.png', 1),
(124, 'Serenity Desert Small', 1, 'Serenity_Desert_Small.png', 1),
(125, 'Sirgis', 6, 'Sirgis.png', 1),
(126, 'Standing Stones', 3, 'Standing_Stones.png', 1),
(127, 'Stella Maris', 3, 'Stella_Maris.png', 1),
(128, 'Stickleback Ridge', 1, 'Stickleback_Ridge.png', 1),
(129, 'Strife of Titan R1', 6, 'Strife_of_Titan_R1.png', 1),
(130, 'Summer Duel', 1, 'Summer_Duel.png', 1),
(131, 'Syrtis Major', 3, 'Syrtis_Major.png', 1),
(132, 'Seton\'s Clutch', 6, 'Setons_Clutch.png', 1),
(133, 'TAG Craftious Maximus', 3, 'TAG_Craftious_Maximus.png', 1),
(134, 'Taylors Pass', 6, 'Taylors_Pass.png', 1),
(135, 'The Bermuda Locket', 6, 'The_Bermuda_Locket.png', 1),
(136, 'The Cold Place', 3, 'The_Cold_Place.png', 1),
(137, 'The Dark Heart', 3, 'The_Dark_Heart.png', 1),
(138, 'The Ditch', 6, 'The_Ditch.png', 1),
(139, 'The Drunken Beetles Dance', 6, 'The_Drunken_Beetles_Dance.png', 1),
(140, 'The Ganges Chasma', 1, 'The_Ganges_Chasma.png', 1),
(141, 'Therum', 6, 'Therum.png', 1),
(142, 'Theta Passage', 1, 'Theta_Passage.png', 1),
(143, 'Turtle Rocks', 3, 'Turtle_Rocks.png', 1),
(144, 'Twin Rivers', 3, 'Twin_Rivers.png', 1),
(145, 'Vale of Isis', 1, 'Vale_of_Isis.png', 1),
(146, 'Varga Pass', 3, 'Varga_Pass.png', 1),
(147, 'Veil of Stars', 3, 'Veil_of_Stars.png', 1),
(148, 'Vesta', 3, 'Vesta.png', 1),
(149, 'Vulcan\'s Reach', 3, 'Vulcans_Reach.png', 1),
(150, 'Vya-3 Protectorate', 3, 'Vya-3_Protectorate.png', 1),
(151, 'White Fire', 3, 'White_Fire.png', 1),
(152, 'Williamson\'s Bridge', 1, 'Williamsons_Bridge.png', 1),
(153, 'X6', 6, 'X6.png', 1),
(154, 'Xmas Setons', 6, 'Xmas_Setons.png', 1),
(155, 'Zerg Canyon', 3, 'Zerg_Canyon.png', 1),
(156, 'Zeuthea Valley', 3, 'Zeuthea_Valley.png', 1),
(157, '8-Badlands_v4', 3, '8-Badlands_v4.png', 1);

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
-- Table structure for table `opponent_to_data`
--

CREATE TABLE `opponent_to_data` (
  `ID` int NOT NULL,
  `playersID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `ID` int NOT NULL,
  `username` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`ID`, `username`) VALUES
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
-- Table structure for table `players_to_data`
--

CREATE TABLE `players_to_data` (
  `ID` int NOT NULL,
  `Player` varchar(50) NOT NULL,
  `Opponent` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Indexes for table `opponent_to_data`
--
ALTER TABLE `opponent_to_data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `players_to_data`
--
ALTER TABLE `players_to_data`
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
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

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
-- AUTO_INCREMENT for table `opponent_to_data`
--
ALTER TABLE `opponent_to_data`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

--
-- AUTO_INCREMENT for table `players_to_data`
--
ALTER TABLE `players_to_data`
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
