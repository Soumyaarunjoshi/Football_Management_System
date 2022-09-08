-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 07:24 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `get_stand` ()  BEGIN
SELECT rank,team_name,captain,points FROM TEAM JOIN MANAGER ON team.team_id=manager.team_id
ORDER BY rank ASC;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `dropdown_db`
--

CREATE TABLE `dropdown_db` (
  `priya` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` int(38) NOT NULL,
  `manager_name` varchar(40) NOT NULL,
  `team_id` int(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`manager_id`, `manager_name`, `team_id`) VALUES
(1, 'Diego Simeone', 101),
(2, 'Ernesto Valverde', 102),
(3, 'Juan Carlos Unzue', 103),
(4, 'Jose Luis Mendilibar', 104),
(5, 'Quique Sanchez Flores', 105),
(6, 'Pablo Machin', 106),
(7, 'Pako Ayestaran', 107),
(8, ' Asier Garitano', 108),
(9, ' Michel', 109),
(10, 'Quique Setien', 110),
(11, 'Eusebio Sacristan', 111),
(12, 'Zinedine Zidane', 112),
(13, ' Eduardo Berizzo', 113),
(14, 'Marcelino', 114),
(115, 'Javier Calleja', 115);

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `match_id` int(38) NOT NULL,
  `team1_name` varchar(60) NOT NULL,
  `team2_name` varchar(60) NOT NULL,
  `date` datetime NOT NULL,
  `team_won` varchar(60) NOT NULL,
  `venue_id` int(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`match_id`, `team1_name`, `team2_name`, `date`, `team_won`, `venue_id`) VALUES
(10, 'Real Madrid', 'Las Palmas', '2017-11-05 05:00:00', 'rcb', 500),
(20, 'Real Sociedad', 'Eibar', '2017-11-05 10:00:00', 'pending', 501),
(30, 'Barcelona', 'Sevilla', '2017-11-04 02:00:00', 'pending', 502),
(40, 'La Coruna', 'Atl Madrid', '2017-11-04 06:00:00', 'pending', 503),
(50, 'Valancia', 'Leganes', '2017-11-04 12:00:00', 'Valancia', 504),
(60, 'Girona', 'Real Madrid', '2017-10-29 08:00:00', 'Girona', 505),
(70, 'Celta Vigo', 'Atl Madrid', '2017-10-22 04:00:00', 'Atl Madrid', 506),
(80, 'Valancia', 'Sevilla', '2017-10-21 09:00:00', 'Valancia', 504),
(90, 'Atl Madrid', 'Sevilla', '2017-09-23 03:00:00', 'Atl Madrid', 507),
(100, 'Girona', 'Villarreal', '2017-10-15 06:00:00', 'Villarreal', 505),
(101, 'Real Sociedad', 'Real Madrid', '2017-09-17 06:00:00', 'Real Madrid', 501),
(102, 'Barcelona', 'Espanyol', '2017-09-09 07:00:00', 'Barcelona', 502),
(103, 'Real Madrid', 'Valencia', '2017-08-27 03:00:00', 'Real Madrid', 500),
(104, 'Barcelona', 'Betis', '2017-08-20 03:00:00', 'Barcelona', 502),
(105, 'rcb', 'srh', '0000-00-00 00:00:00', 'rcb', 500);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `mem_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`mem_id`, `username`, `password`, `fname`, `lname`, `address`, `contact`, `picture`, `gender`) VALUES
(0, 'messi', 'god', 'lional', 'messi', 'kuptm', '8792125992', '', 'f'),
(1, 'adarsh', 'jain', 'adu', 'aj', 'hrr', '7892176426', '', 'f');

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `player_id` varchar(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `age` int(38) NOT NULL,
  `position` varchar(20) NOT NULL,
  `team_id` int(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player`
--

INSERT INTO `player` (`player_id`, `name`, `nationality`, `age`, `position`, `team_id`) VALUES
('B10', 'Lionel Messi', 'Argentine', 30, 'Forward', 102),
('B11', 'GCT', 'Indian', 25, 'fwd', 102),
('B18', 'Jordi Alba', 'Spanish', 28, 'Leftback', 102),
('B8', 'Andres Iniesta', 'Spanish', 33, 'Midfielder', 102),
('CV10', 'Iago Aspas', 'Spanish', 30, 'Striker', 103),
('G7', 'Cristhian Stuani', 'Uruguaian', 31, 'Striker', 106),
('RB19', 'Antonio Sanbria', 'Paraguaian', 21, 'Striker', 110),
('RM11', 'Gareth Bale', 'Walesh', 28, 'Winger', 112),
('RM7', 'Cristiano  Ronaldo', 'Portugal', 32, 'Forward', 112),
('RS18', 'Mikel Oyarzabal', 'Spanish', 20, 'Winger', 114),
('S20', 'Luis Muriel', 'Colombian', 26, 'Forward', 113),
('S24', 'Nolito', 'Spanish', 31, 'Forward', 113),
('V19', 'Rodrigo', 'Brazzillian', 26, 'Striker', 114),
('V9', 'Simone Zara', 'Italian', 26, 'Striker', 114),
('VR17', 'Cedric Bakambu', 'French', 26, 'Forward', 115),
('VR46', 'Maxwell', 'india', 25, 'defender', 120);

--
-- Triggers `player`
--
DELIMITER $$
CREATE TRIGGER `InsertAge17 and30` AFTER INSERT ON `player` FOR EACH ROW BEGIN
IF 17>new.age OR 35<new.age THEN 
DELETE FROM player WHERE age=new.age;
END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE `statistics` (
  `player_id` varchar(20) NOT NULL,
  `team_id` int(11) NOT NULL,
  `goals` int(38) NOT NULL,
  `red_cards` int(38) NOT NULL,
  `yellow_cards` int(38) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`player_id`, `team_id`, `goals`, `red_cards`, `yellow_cards`) VALUES
('B10', 102, 214, 34, 34),
('B11', 102, 15, 0, 4),
('B18', 102, 0, 0, 0),
('B8', 110, 1, 0, 0),
('CV10', 103, 2, 0, 0),
('G7', 106, 3, 0, 1),
('RB19', 110, 3, 0, 1),
('RM11', 112, 3, 0, 0),
('RM7', 112, 8, 0, 1),
('RS18', 111, 1, 0, 0),
('S20', 113, 3, 0, 0),
('S24', 113, 1, 0, 1),
('V19', 114, 4, 0, 0),
('V9', 114, 11, 0, 1),
('VR17', 115, 8, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `team_id` int(38) NOT NULL,
  `team_name` varchar(20) NOT NULL,
  `captain` varchar(40) NOT NULL,
  `location` varchar(50) NOT NULL,
  `rank` int(38) NOT NULL,
  `points` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`team_id`, `team_name`, `captain`, `location`, `rank`, `points`) VALUES
(101, 'Atl Madrid', 'Gabi', 'Madrid', 4, 23),
(102, 'Barcelona', 'gct', 'Barcelona', 1, 31),
(103, 'Celta Vigo', 'Hugo Mallo', 'Vigo', 11, 14),
(104, 'Eibar', 'Dani Garcia', 'Eibar', 17, 8),
(105, 'Espanyol', 'Javi Lopez', 'Barcelona', 13, 13),
(106, 'Girona', 'Eloi Amagat', 'Girona', 10, 15),
(107, 'Las Palmas', 'David Garcia', 'Las Palmas', 19, 6),
(108, 'Leganes', 'Martin Mantovani', 'Leganes', 9, 17),
(109, 'Malaga', 'Recio', 'Malaga', 20, 4),
(110, 'Betis', 'Joaquin', 'Seville', 8, 17),
(111, 'Real Sociedad', 'Xabi Prieto', 'San Sebastian', 7, 17),
(112, 'Real Madrid', 'Sergio Ramos', 'Madrid', 3, 23),
(113, 'Sevilla', 'Nicolas Pareja', 'Seville', 6, 19),
(114, 'Valancia', 'Daniel Parejo', 'Valancia', 2, 27),
(115, 'Villareal', 'Bruno', 'Villarreal', 5, 20),
(120, 'sf FC', 'safdsdafsgds', 'fsd', 7, 12);

--
-- Triggers `team`
--
DELIMITER $$
CREATE TRIGGER `sufix_name` BEFORE INSERT ON `team` FOR EACH ROW BEGIN 
SET new.team_name=concat(new.team_name,' ','FC');
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `venue_id` int(38) NOT NULL,
  `venue_name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`venue_id`, `venue_name`) VALUES
(500, 'Estadio Santiago Bernabeu'),
(501, 'Estadio Anoeta'),
(502, 'Estadio Camp Nou'),
(503, 'Estadio Municipal de Riazor'),
(504, 'Estadio de Mestalla'),
(505, 'Estadio Municipal de Montilivi'),
(506, 'Estadio Balaidos'),
(507, 'Wanda Metropolitano');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`),
  ADD KEY `fk5` (`team_id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`match_id`,`team1_name`,`team2_name`),
  ADD KEY `venue_id` (`venue_id`),
  ADD KEY `fk2` (`team1_name`),
  ADD KEY `fk3` (`team2_name`),
  ADD KEY `venue_id_2` (`venue_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`mem_id`);

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `statistics`
--
ALTER TABLE `statistics`
  ADD PRIMARY KEY (`player_id`),
  ADD KEY `team_id` (`team_id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`venue_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `mem_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `fk5` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `fk4` FOREIGN KEY (`venue_id`) REFERENCES `venue` (`venue_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `player`
--
ALTER TABLE `player`
  ADD CONSTRAINT `fk7` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `statistics`
--
ALTER TABLE `statistics`
  ADD CONSTRAINT `fk1` FOREIGN KEY (`player_id`) REFERENCES `player` (`player_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk8` FOREIGN KEY (`team_id`) REFERENCES `team` (`team_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
