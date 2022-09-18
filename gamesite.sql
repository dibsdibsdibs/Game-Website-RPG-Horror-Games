-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2022 at 08:21 PM
-- Server version: 8.0.29
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamesite`
--

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `game_id` int NOT NULL,
  `title` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `creator` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `summary` text CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `profile` varchar(45) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL,
  `link` tinytext CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`game_id`, `title`, `creator`, `summary`, `profile`, `link`) VALUES
(1, 'Ib', 'kouri', 'A young girl named Ib visits an art gallery with her parents. While observing the many exhibits, she suddenly realizes she is alone. And in her search for others, she finds things awry in the gallery...', 'pics/ib.jpg', 'http://download2275.mediafire.com/riz4t4dcnuvg/2nkyauuhayn0ebx/Ib107.zip'),
(2, 'The Witch\'s House', 'Fummy', 'The young Viola visits a mysterious house in the woods. She soon discovers its dangerous nature and must find a way out. But the house is ever-changing, and death could be lurking anywhere...', 'pics/witchhouse.jpg', 'http://download2281.mediafire.com/vd43oe7bxbqg/jarg65dl8o1loiq/TheWitchsHouse108.zip'),
(3, 'Mad Father', 'Miscreant\'s Room (Sen)', 'Aya Drevis is a young girl living in an isolated mansion in northern Germany. Since her mother\'s passing, she\'s felt lonely living with just her father and his assistant Maria. What\'s more, having heard the screams from the basement, she knows her father\'s secret...', 'pics/madfather.png', 'http://download2389.mediafire.com/eoq0ssx9qblg/7x06rybd0i2x6yv/MadFather208.zip'),
(4, 'Misao', 'Miscreant\'s Room (Sen)', 'It\'s been three months since the mysterious disappearance of Misao. No one has any idea where she could have gone, but many believe she\'s dead by now. And when paranormal events crop up around the school, rumors spread that she\'s out for revenge...', 'pics/misao.jpg', 'http://download1941.mediafire.com/24ddig6q9uig/wym7m7al33aofm2/Misao303.zip'),
(5, 'The Crooked Man', 'Uri', 'David Hoover decides to move into a new apartment during a rough time in his life. After some odd occurrences, he decides to ask about the room\'s former owner, but learns little. So he sets off in search of him, strangely compelled to know more about this man...', 'pics/crookedman.jpg', 'http://download2262.mediafire.com/4t2u8rpczevg/uacckdqgkccie5w/TheCrookedMan.zip'),
(6, 'Paranoiac', 'Uri', 'Miki Takamura moves into a house formerly owned by her aunt. Filled with mysteriously locked doors, the house has an oppressive air. And though wanting to use it to recuperate, strange things keep happening to her...', 'pics/paranoiac.jpg', 'https://download1337.mediafire.com/s6l9qsaeu4zg/6h54xhuleiwvill/ParanoiacRemake.zip'),
(7, 'Insanity', 'Uri', 'A group of high-school friends is talked into exploring an abandoned mansion. Before long, they discover a dead body. They hurry to call the police, but find the front door\'s stuck. As they search for another way out, they learn the truth about what happened in this house...', 'pics/insanity.png', 'http://download2261.mediafire.com/jha19f8ebbbg/xqqbwqchu5fk45u/InsanityRemake.zip'),
(8, 'Re:Kinder', 'Parun', 'Third-grader Shunsuke goes to stay over at his grandmother\'s house. Upon his return home, he finds not his familiar hometown, but a ruined town of death. He meets his surviving friends and some other children their age, but a crueler reality awaits them...', 'pics/rekinder.jpg', 'http://download937.mediafire.com/6pli10xpbyng/03sba4zmf14zl77/ReKinder.zip'),
(9, 'Mermaid Swamp', 'Uri', 'Rin Yamazaki and her college friends have their car break down in the mountains on a trip. Fortunately, a kindly old man offers to let them stay at his house. But there\'s a legend about the swamp outside the mansion...', 'pics/mermaidswamp.png', 'http://download2282.mediafire.com/vbh57k7kb2ug/lvgt7qz51k2wvgy/MermaidSwampRemake.zip'),
(10, 'The Sandman', 'Uri', 'For days now, Sophie Grundler has been unable to sleep. Bullied at school, and her father busy with work, she simply has to endure. Then one night, the clock in her room stops ticking...', 'pics/sandman.jpg', 'http://download2273.mediafire.com/4lbx1oh3e7dg/ltz6h01rz9xo54w/TheSandman.zip'),
(11, 'Blight Dream', 'Teriyaki Tomato (Kanawo)', 'A traumatic accident renders Michiru Orihara unable to retain any new memories for more than a day. She eventually learns to preserve them using a notebook, but becomes curious about the gap in her memory following the accident. Michiru starts to look for clues around the house, but it seems her brother would prefer that she didn\'t...', 'pics/blightdream.png', 'http://download1587.mediafire.com/zx2622mmuvfg/qptx3qje9f9mhrx/BlightDream100.zip'),
(12, 'Blank Dream', 'Teriyaki Tomato (Kanawo)', 'Wishing that she had never even existed, Mishiro Usui threw herself into the lake. When she came to, she was in the Mirror World, a place neither heaven nor hell. There, her reflection instructed her: \"Find the mirrors in this world, and break them.\"', 'pics/blankdream.png', 'http://download807.mediafire.com/xeq0yu9gne6g/cjcqc8jyleizr82/BlankDream105.zip'),
(13, 'The Boogie Man', 'Uri', 'Keith Baring is a cold, devoted detective whose boss decides he needs to take some time off. While on a tour of an old castle with his wife Helena, she makes a startling confession to him. Keith goes to bed bewildered - but things only become stranger as the Boogie Man\'s game begins...', 'pics/boogieman.jpg', 'http://download2273.mediafire.com/qy5ld69bt3qg/7kilr6adk1ku6n7/TheBoogieMan.zip'),
(14, 'The Hanged Man', 'Uri', 'A boy walks through the snow, wandering around town. After running from place to place, he ends up in an old, abandoned building in the woods. Though he hoped to leave soon, when his best friend runs away, he must face his trial and go in search of him...', 'pics/hangedman.jpg', 'https://download2282.mediafire.com/b3q6i4r8mmrg/og1swucug00lw18/TheHangedMan.zip');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int UNSIGNED NOT NULL,
  `email` varchar(62) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `email`, `username`, `name`, `password`) VALUES
(1, 'potatosalad@gmail.com', 'potato_salad01', 'Potato Salad', 'b98a75557b41a6147a714d0c3bf69e11'),
(2, 'lumpbeefbroth@gmail.com', 'lumpybroth', 'Lump Beef Broth Jr.', '6c87bc100806a53c159678a966be6025'),
(3, 'stinkycheese@gmail.com', 'bluecheese', 'Blue Cheese', '8ee2027983915ec78acc45027d874316');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
