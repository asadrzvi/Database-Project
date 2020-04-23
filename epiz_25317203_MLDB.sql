-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql306.epizy.com
-- Generation Time: Apr 22, 2020 at 01:42 AM
-- Server version: 5.6.45-86.1
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_25317203_MLDB`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `AlbumID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `AlbumName` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ArtistID` int(10) DEFAULT NULL,
  `DateCreate` date DEFAULT NULL,
  `Numberoftracks` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`AlbumID`, `AlbumName`, `ArtistID`, `DateCreate`, `Numberoftracks`) VALUES
('5e97825a1a4be2.57930335.jpg', 'J-EDM', 1, '2020-04-15', 3),
('5e97c30d42df66.38754194.jpg', 'Kirby Songs', 17, '2020-04-15', 0),
('5e97c58839de20.00469039.jpg', 'American songs', 17, '2020-04-15', 0),
('5e97c59b1cfda2.76458241.jpe', 'Love songs', 17, '2020-04-15', 0),
('5e97c5de54e6f9.14167835.png', 'Kingdom Hearts songs', 17, '2020-04-15', 0),
('5e98c53ce8d759.16879845.png', 'New Test', 1, '2020-04-16', 3),
('5e98c6003880b6.96064396.jpg', 'Fairythm', 8, '2020-04-16', 2),
('5e98d72d3655e3.54121631.jpeg', 'Firefly', 20, '2020-04-16', 2),
('5e98e9ca382678.98964886.jpeg', 'Mynewalbum', 22, '2020-04-16', 1);

-- --------------------------------------------------------

--
-- Table structure for table `album_tracks`
--

CREATE TABLE `album_tracks` (
  `AlbumID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TracksID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Counter` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album_tracks`
--

INSERT INTO `album_tracks` (`AlbumID`, `TracksID`, `Counter`) VALUES
('5e97825a1a4be2.57930335.jpg', '5e97806ee52134.62745547.mp3', 15),
('5e97825a1a4be2.57930335.jpg', '5e97737dbbc5b3.07915552.mp3', 14),
('5e97825a1a4be2.57930335.jpg', '5e9771fcb3e294.82098512.mp3', 13),
('5e98c53ce8d759.16879845.png', '5e9461349eff37.09090137.mp3', 16),
('5e98c53ce8d759.16879845.png', '5e94a3f9186de5.10233900.mp3', 17),
('5e98c53ce8d759.16879845.png', '5e9641c6c76375.03171749.mp3', 18),
('5e98c6003880b6.96064396.jpg', '5e98c5b0260979.98537505.mp3', 19),
('5e98c6003880b6.96064396.jpg', '5e98c5e241f6f2.25874317.mp3', 20),
('5e98d72d3655e3.54121631.jpeg', '5e98d636540e37.82775537.mp3', 21),
('5e98d72d3655e3.54121631.jpeg', '5e98d6ee7aa506.35439333.mp3', 22),
('5e98e9ca382678.98964886.jpeg', '5e98e9503810f3.64493852.mp3', 23);

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

CREATE TABLE `artist` (
  `ArtistID` int(11) NOT NULL,
  `UH_ID` int(11) NOT NULL,
  `ArtistName` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `Description` varchar(280) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'N/A',
  `IsAdmin` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artist`
--

INSERT INTO `artist` (`ArtistID`, `UH_ID`, `ArtistName`, `Description`, `IsAdmin`) VALUES
(1, 4444444, 'Foty', '404 Not Found :)', 1),
(4, 123, 'Snappy', 'I met an interesting turtle while the song on the radio blasted away.', 0),
(6, 7, 'Testing 1', 'He had decided to accept his fate of accepting his fate.', 0),
(7, 1020304, 'Jacob', 'Songs are good', 0),
(8, 1978432, 'kaliop', 'After exploring the abandoned building, he started to believe in ghosts.', 1),
(13, 1029384, 'Snoopy', 'Behind the window was a reflection that only instilled fear.', 0),
(16, 2222222, 'Lolz', 'Truth in advertising and dinosaurs with skateboards have much in common.', 0),
(17, 968256, 'Silento', 'Improve your goldfish\'s physical fitness by getting him a bicycle.', 1),
(18, 987654, 'Corona gang', 'I am never at home on Sundays.', 0),
(19, 1231231, 'N/A', 'She opened up her third bottle of wine of the night.', 0),
(20, 1234556, 'big daddy', 'Im a tiny flying lighting bug', 0),
(21, 8927034, 'Trap', 'Im sorry Miss rona', 0),
(22, 2344556, 'Uma', 'N/A', 0),
(23, 9999999, 'N/A', 'N/A', 1),
(24, 1234563, 'N/A', 'N/A', 1),
(25, 7564231, 'N/A', 'N/A', 0);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `PlayListID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PlayListName` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `UH_ID` int(11) NOT NULL,
  `DateCreate` date DEFAULT NULL,
  `numtracks` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`PlayListID`, `PlayListName`, `UH_ID`, `DateCreate`, `numtracks`) VALUES
('5e954dd16e4ac2.43122089', 'firstplaylist', 4444444, '2020-04-14', 8),
('5e954deea3ab74.68395318', 'secondplaylist', 4444444, '2020-04-14', 7),
('5e9557a48ad188.69350166', 'hjkhj', 0, '2020-04-14', 0),
('5e9557bd3936d7.12323442', 'bruh', 0, '2020-04-14', 1),
('LIKED4444444', 'Liked Songs', 4444444, '2020-04-15', 5),
('5e980c487723e8.13737362', 'blablabla', 1234567, '2020-04-16', 0),
('LIKED1234567', 'Liked Songs', 1234567, '2020-04-16', 1),
('LIKED2948582', 'Liked Songs', 2948582, '2020-04-16', 1),
('5e98886ee60363.55882454', 'Test', 968256, '2020-04-16', 0),
('LIKED1020304', 'Liked Songs', 1020304, '2020-04-16', 2),
('5e98c870c3fda8.09168582', 'New', 1020304, '2020-04-16', 1),
('5e98d50301c1d3.85705012', 'fun fun', 1234556, '2020-04-16', 2),
('LIKED1234556', 'Liked Songs', 1234556, '2020-04-16', 1),
('LIKED1772231', 'Liked Songs', 1772231, '2020-04-16', 1),
('5e98e84b2171e5.27232841', 'myfirstplaylist', 2344556, '2020-04-16', 1),
('LIKED2344556', 'Liked Songs', 2344556, '2020-04-16', 1),
('LIKED8927034', 'Liked Songs', 8927034, '2020-04-19', 2);

-- --------------------------------------------------------

--
-- Table structure for table `playlist_tracks`
--

CREATE TABLE `playlist_tracks` (
  `PlayListID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tracks_ID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrackCount` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlist_tracks`
--

INSERT INTO `playlist_tracks` (`PlayListID`, `Tracks_ID`, `TrackCount`) VALUES
('5e954dd16e4ac2.43122089', '5e9461349eff37.09090137.mp3', 1),
('5e954deea3ab74.68395318', '5e9461349eff37.09090137.mp3', 2),
('5e954dd16e4ac2.43122089', '5e95c431346128.06444437.mp3', 22),
('5e9557bd3936d7.12323442', '5e95c39a2e2993.08599156.mp3', 48),
('5e954deea3ab74.68395318', '5e93b289306fc6.80922504.mp3', 10),
('5e954deea3ab74.68395318', '5e95c39a2e2993.08599156.mp3', 11),
('5e954deea3ab74.68395318', '5e95c313031f72.53732816.mp3', 20),
('LIKED4444444', '5e9771fcb3e294.82098512.mp3', 47),
('LIKED4444444', '5e97737dbbc5b3.07915552.mp3', 46),
('5e954deea3ab74.68395318', '5e95c431346128.06444437.mp3', 23),
('5e954dd16e4ac2.43122089', '5e95c313031f72.53732816.mp3', 24),
('LIKED1234567', '5e94a3f9186de5.10233900.mp3', 50),
('5e954dd16e4ac2.43122089', '5e93b289306fc6.80922504.mp3', 28),
('5e954dd16e4ac2.43122089', '5e9641c6c76375.03171749.mp3', 29),
('5e954deea3ab74.68395318', '5e9641c6c76375.03171749.mp3', 30),
('LIKED4444444', '5e95c431346128.06444437.mp3', 49),
('5e954dd16e4ac2.43122089', '5e95c39a2e2993.08599156.mp3', 32),
('5e954deea3ab74.68395318', '5e97806ee52134.62745547.mp3', 33),
('5e954dd16e4ac2.43122089', '5e94a3f9186de5.10233900.mp3', 43),
('LIKED4444444', '5e97806ee52134.62745547.mp3', 51),
('LIKED2948582', '5e97806ee52134.62745547.mp3', 52),
('5e954dd16e4ac2.43122089', '5e97806ee52134.62745547.mp3', 53),
('LIKED4444444', '5e9641c6c76375.03171749.mp3', 54),
('LIKED1020304', '5e98c5b0260979.98537505.mp3', 55),
('LIKED1020304', '5e97806ee52134.62745547.mp3', 56),
('5e98c870c3fda8.09168582', '5e97806ee52134.62745547.mp3', 57),
('5e98d50301c1d3.85705012', '5e9771fcb3e294.82098512.mp3', 58),
('LIKED1234556', '5e9771fcb3e294.82098512.mp3', 59),
('5e98d50301c1d3.85705012', '5e9461349eff37.09090137.mp3', 60),
('LIKED1772231', '5e9461349eff37.09090137.mp3', 61),
('5e98e84b2171e5.27232841', '5e9461349eff37.09090137.mp3', 62),
('LIKED2344556', '5e9461349eff37.09090137.mp3', 63),
('LIKED8927034', '5e95c313031f72.53732816.mp3', 64),
('LIKED8927034', '5e97737dbbc5b3.07915552.mp3', 65);

--
-- Triggers `playlist_tracks`
--
DELIMITER $$
CREATE TRIGGER `CountTracks` AFTER INSERT ON `playlist_tracks` FOR EACH ROW UPDATE playlist
SET playlist.numtracks=playlist.numtracks+1
WHERE playlist.PlayListID = NEW.PlayListID
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tracks`
--

CREATE TABLE `tracks` (
  `TrackID` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TrackName` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ArtistID` int(11) NOT NULL,
  `DateCreate` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tracks`
--

INSERT INTO `tracks` (`TrackID`, `TrackName`, `ArtistID`, `DateCreate`) VALUES
('5e9461349eff37.09090137.mp3', 'Mercy', 1, '2020-04-13'),
('5e94a3f9186de5.10233900.mp3', 'Stargazing', 1, '2020-04-13'),
('5e93b289306fc6.80922504.mp3', 'Brian', 7, '2020-04-12'),
('5e95c313031f72.53732816.mp3', 'Check', 18, '2020-04-14'),
('5e95c39a2e2993.08599156.mp3', 'Intro', 18, '2020-04-14'),
('5e95c431346128.06444437.mp3', 'Dreams and Nightmares', 18, '2020-04-14'),
('5e9641c6c76375.03171749.mp3', 'X', 1, '2020-04-14'),
('5e9771fcb3e294.82098512.mp3', 'Abyss', 1, '2020-04-15'),
('5e97737dbbc5b3.07915552.mp3', 'WorldFragments1', 1, '2020-04-15'),
('5e97806ee52134.62745547.mp3', 'FAFNIR', 1, '2020-04-15'),
('5e98c5b0260979.98537505.mp3', 'Stigma', 8, '2020-04-16'),
('5e98c5e241f6f2.25874317.mp3', 'Lentamente', 8, '2020-04-16'),
('5e98ce2159f124.13863722.mp3', 'Altale', 8, '2020-04-16'),
('5e98d636540e37.82775537.mp3', 'Hot n Cold', 20, '2020-04-16'),
('5e98d6ee7aa506.35439333.mp3', 'Firefly', 20, '2020-04-16'),
('5e98e245d74dd5.43354227.mp3', 'Perfect Day', 21, '2020-04-16'),
('5e98e9503810f3.64493852.mp3', 'SOng', 22, '2020-04-16'),
('5e9d9519ef4410.88645521.mp3', 'Toosie Slide', 1, '2020-04-20');

-- --------------------------------------------------------

--
-- Table structure for table `tracks_likes`
--

CREATE TABLE `tracks_likes` (
  `Tracks_ID` varchar(100) DEFAULT NULL,
  `LikeCount` int(11) NOT NULL DEFAULT '0',
  `Counter` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tracks_likes`
--

INSERT INTO `tracks_likes` (`Tracks_ID`, `LikeCount`, `Counter`) VALUES
('5e9771fcb3e294.82098512.mp3', 2, 1),
('5e95c431346128.06444437.mp3', 1, 2),
('5e94a3f9186de5.10233900.mp3', 1, 3),
('5e97806ee52134.62745547.mp3', 3, 4),
('5e9641c6c76375.03171749.mp3', 1, 5),
('5e98c5b0260979.98537505.mp3', 1, 6),
('5e9461349eff37.09090137.mp3', 2, 7),
('5e95c313031f72.53732816.mp3', 1, 8),
('5e97737dbbc5b3.07915552.mp3', 1, 9);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UH_ID` int(45) NOT NULL,
  `u_Major` varchar(4) COLLATE utf8mb4_unicode_ci NOT NULL,
  `u_Email` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Username` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsArtist` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UH_ID`, `u_Major`, `u_Email`, `Username`, `Password`, `IsArtist`) VALUES
(7, '4444', 'r@g.c', 'aaaaaaaaaaa', '222222222', 1),
(123, '1', 's@f.c', '3', '123', 1),
(4444444, '4', '4@4.4', '4', '4', 1),
(1234567, 'CS', 'a@a', 'coog', 'muzik', 1),
(1978432, 'ART', 'casd@gmail.com', '456', '456', 1),
(1772231, 'CS', 'lizandrom6@gmail.com', 'ljmeza', 'password', 0),
(1020304, 'Scie', '123456@uh.edu', '890', '890', 1),
(1029384, 'PSYC', '102945@mail', 'cou', 'cou', 1),
(2222222, '2', '2@2.2', '2', '2', 1),
(968256, 'PSYC', 'n@mail', 'hoj', 'hoj', 1),
(987654, 'Libe', 'b@feva.com', 'co', 'rona', 1),
(2948582, 'Scie', 'wke@mail', 'set', 'set', 0),
(1231231, 'CS', '123123231232312@asd.live', 'rizvi', '1234asdf', 1),
(1234556, 'jskl', 'a@b.com', 'z', 'z', 1),
(8927034, 'Art', 'temp@null.com', 'Trap', '123', 1),
(2344556, 'bio', 'a@c.com', 'g', 'g', 1),
(9999999, 'nein', 'nein@n.n', 'n', 'n', 1),
(1234563, 'MUSI', 'b@4.com', '808', '808', 1),
(7564231, 'gend', 'shoobtube55@gmail.com', 's712', 'Elmo123', 1);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `RegisterNewArtist` AFTER UPDATE ON `users` FOR EACH ROW INSERT INTO artist (UH_ID)
SELECT UH_ID FROM users
WHERE (NEW.UH_ID=UH_ID AND NEW.IsArtist <> OLD.IsArtist)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`AlbumID`),
  ADD UNIQUE KEY `AlbumID` (`AlbumID`),
  ADD KEY `ArtistID` (`ArtistID`);

--
-- Indexes for table `album_tracks`
--
ALTER TABLE `album_tracks`
  ADD PRIMARY KEY (`Counter`),
  ADD KEY `TracksID_idx` (`TracksID`),
  ADD KEY `AlbumID` (`AlbumID`);

--
-- Indexes for table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`ArtistID`,`ArtistName`),
  ADD UNIQUE KEY `ArtistID` (`ArtistID`,`UH_ID`),
  ADD KEY `UH_ID` (`UH_ID`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`PlayListID`),
  ADD UNIQUE KEY `PlayListID` (`PlayListID`),
  ADD KEY `UH_ID` (`UH_ID`);

--
-- Indexes for table `playlist_tracks`
--
ALTER TABLE `playlist_tracks`
  ADD PRIMARY KEY (`TrackCount`),
  ADD KEY `PlayListID_idx` (`PlayListID`),
  ADD KEY `TrackID_idx` (`Tracks_ID`);

--
-- Indexes for table `tracks`
--
ALTER TABLE `tracks`
  ADD PRIMARY KEY (`TrackID`),
  ADD UNIQUE KEY `TrackID` (`TrackID`,`ArtistID`),
  ADD KEY `ArtistID` (`ArtistID`);

--
-- Indexes for table `tracks_likes`
--
ALTER TABLE `tracks_likes`
  ADD PRIMARY KEY (`Counter`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UH_ID`),
  ADD UNIQUE KEY `UH_ID` (`UH_ID`,`Username`,`u_Email`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_tracks`
--
ALTER TABLE `album_tracks`
  MODIFY `Counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `artist`
--
ALTER TABLE `artist`
  MODIFY `ArtistID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `playlist_tracks`
--
ALTER TABLE `playlist_tracks`
  MODIFY `TrackCount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tracks_likes`
--
ALTER TABLE `tracks_likes`
  MODIFY `Counter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
