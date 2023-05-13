-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2023 at 02:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mtb-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `customer-name` varchar(255) NOT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `theater-name` varchar(255) NOT NULL,
  `ticket-type` varchar(255) NOT NULL,
  `child-seats` int(11) NOT NULL,
  `showtime` time NOT NULL,
  `showdate` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `adult-seats` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `customer-name`, `movieTitle`, `theater-name`, `ticket-type`, `child-seats`, `showtime`, `showdate`, `email`, `adult-seats`, `status`) VALUES
(9, 'aqsa ashfaq', '<br /><b>Warning</b>:  Undefined array key ', 'Atrium Cinemas', 'platinum', 4, '03:03:00', '2023-03-23', 'aqsaashfaq510@gmail.com', 2, ''),
(10, 'aqsa ashfaq', '<br /><b>Warning</b>:  Undefined array key ', 'Atrium Cinemas', 'platinum', 4, '03:03:00', '2023-03-23', 'aqsaashfaq510@gmail.com', 2, '');

-- --------------------------------------------------------

--
-- Table structure for table `book_status`
--

CREATE TABLE `book_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_status`
--

INSERT INTO `book_status` (`id`, `status`) VALUES
(3, 'Cancelled'),
(2, 'Confirmed'),
(1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `register-id` int(11) NOT NULL,
  `customer-id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genere-id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genere-id`, `type`) VALUES
(4, 'Action'),
(2, 'Comedy'),
(1, 'Horror'),
(3, 'Kids Animation'),
(5, 'Mystry');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `theater-id` int(55) NOT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `movie_pic` varchar(255) NOT NULL,
  `Movie_Trailers` varchar(1000) NOT NULL,
  `genre_type` varchar(255) DEFAULT NULL,
  `release` date NOT NULL,
  `duration` time NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `theater-id`, `movieTitle`, `movie_pic`, `Movie_Trailers`, `genre_type`, `release`, `duration`, `description`) VALUES
(1, 1, 'Kingsman: The Secret Service', 'kingsman.PNG', 'https://www.youtube.com/watch?v=kl8F-8tR8to', 'Action', '2015-01-24', '02:10:00', 'Gary \'Eggsy\' Unwin faces several challenges when he gets recruited as a secret agent in a secret spy organisation in order to look for Richmond Valentine, an eco-terrorist.'),
(2, 2, 'Enola Holmes', 'EnolaHolmes.PNG', 'https://www.youtube.com/watch?v=1d0Zf9sXlHk', 'Mystry', '2020-09-23', '02:03:00', 'While searching for her missing mother, intrepid teen Enola Holmes uses her sleuthing skills to outsmart big brother Sherlock and help a runaway lord.'),
(3, 3, 'KNIVES OUT\r\n', 'knivesOut.PNG', 'https://www.youtube.com/watch?v=qGqiHJTsRkQ', 'Mystry', '2019-09-07', '02:10:00', 'Harlan Thrombey, a reputable crime novelist, is found dead after his 85th birthday celebrations. However, as detective Benoit Blanc investigates the case, it unravels a ploy of sinister intentions.'),
(4, 4, 'Now You See Me 2', 'NYSM.PNG', 'https://www.youtube.com/watch?v=kMrUHV0VJe4', 'Action', '2016-06-17', '02:10:00', 'Four street magicians, Daniel, Merritt, Henley and Jack, ransack a huge amount of money belonging to insurance baron Arthur Tressler while being chased by police officers.'),
(5, 5, 'The Boss Baby', 'BossBaby.PNG', 'https://www.youtube.com/watch?v=3cw_-XXGMm0', 'Kids Animation', '2017-03-31', '01:37:00', 'Seven-year-old Tim gets jealous when his parents give all their attention to his little brother. Tim soon learns that the baby can talk and the two team up to foil the plans of the CEO of Puppy Co.'),
(6, 1, 'Lights Out', 'LightOut.PNG', 'https://www.youtube.com/watch?v=6LiKKFZyhRU', 'Horror', '2016-06-08', '01:21:00', 'Rebecca and her boyfriend try to investigate the connection between her mother and her imaginary friend, Diana, after her stepfather is murdered by a supernatural entity.'),
(7, 2, 'ANNABELLE:\r\n', 'Annabelle.PNG', 'https://www.youtube.com/watch?v=KisPhy7T__Q', 'Horror', '2017-08-11', '01:49:00', 'Samuel and Elle embed their daughter\'s spirit into a doll, only to realise it is a demon. Years later, they open their home to a nun and six orphan girls, one of whom finds the doll.'),
(8, 3, 'Resident Evil: Welcome to Raccoon City\r\n', 'ResidentEvil.PNG', 'https://www.youtube.com/watch?v=4q6UGCyHZCI', 'Horror', '2021-11-24', '01:47:00', 'Claire and her brother Chris get caught in a zombie outbreak in the dying Raccoon City. They must band together with others to survive and uncover the truth about the experiments held in the city.'),
(9, 4, 'Spider-Man: Homecoming\r\n', 'spiderman.jpg', 'https://www.youtube.com/watch?v=rk-dF1lIbIg', 'Action', '2017-07-07', '02:13:00', 'Peter Parker tries to stop the Vulture from selling weapons made with advanced Chitauri technology while trying to balance his life as an ordinary high school student.'),
(10, 5, 'Zombieland', 'zombieLand.PNG', 'https://www.youtube.com/watch?v=8m9EVP8X7N8', 'Horror', '2009-10-02', '01:28:00', 'Zombieland is a 2009 American post-apocalyptic zombie comedy film directed by Ruben Fleischer (in his theatrical debut) and written by Rhett Reese and Paul Wernick. It stars Woody Harrelson, Jesse Eisenberg, Emma Stone, Abigail Breslin, and Bill Murray.'),
(11, 2, 'Pixels', 'pixels.PNG', 'https://www.youtube.com/watch?v=eIOcWZOQL5M', 'Comedy', '2015-08-24', '01:46:00', 'A special team of arcade gamers is put together to fight a mysterious alien race that watches classic games of the \'80s and presumes them to be a declaration of war.'),
(12, 4, 'Free Guy', 'Free_Guy.PNG', 'https://www.youtube.com/watch?v=tK6jSOaoVDk', 'Action', '2021-08-13', '01:55:00', 'When Guy, a bank teller, learns that he is a non-player character in a bloodthirsty, open-world video game, he goes on to become the hero of the story and takes the responsibility of saving the world.'),
(13, 1, 'Love And Monsters', 'Love&Monster.jpeg', 'https://www.youtube.com/watch?v=-19tBHrZwOM', 'Comedy', '2020-10-16', '01:48:00', 'Seven years after the Monsterpocalypse, Joel Dawson, along with the rest of humanity, has been living underground ever since giant creatures took control of the land. After reconnecting over the radio with his high school girlfriend, Aimee, who is now 80 miles away at a coastal colony, Joel begins to fall for her again.'),
(14, 5, 'Orphan', 'Orphan.PNG', 'https://www.youtube.com/watch?v=m5BSLNAKIZs', 'Horror', '2009-07-24', '02:03:00', 'After losing their baby, a couple adopt a nine-year-old girl. However, they soon make a troubling discovery about her mysterious past and uncover several traits of her disturbing personality.'),
(15, 3, 'THE SUPER MARIO BROS.', 'Mario Bros.jpg', 'https://www.youtube.com/watch?v=TnGl01FkMMo', 'Kids Animation', '2023-04-05', '01:32:00', 'With help from Princess Peach, Mario gets ready to square off against the all-powerful Bowser to stop his plans from conquering the world.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `Discount` varchar(250) NOT NULL,
  `Payment_Method` varchar(255) NOT NULL,
  `booking-id` int(11) NOT NULL,
  `custome-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `popularmovies`
--

CREATE TABLE `popularmovies` (
  `MovieId` int(11) NOT NULL,
  `MovieName` varchar(255) NOT NULL,
  `MoviePic` varchar(255) NOT NULL,
  `MovieGenre` varchar(255) NOT NULL,
  `MovieTrailers` varchar(255) NOT NULL,
  `Release` date NOT NULL,
  `Duration` time NOT NULL,
  `Description` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `popularmovies`
--

INSERT INTO `popularmovies` (`MovieId`, `MovieName`, `MoviePic`, `MovieGenre`, `MovieTrailers`, `Release`, `Duration`, `Description`) VALUES
(1, 'Pathaan', 'Phatan.PNG', 'Action/Thriller', 'https://www.youtube.com/watch?v=nDHsBUbivz8', '2023-01-25', '02:40:00', 'An Indian spy battles against the leader of a gang of mercenaries who have a heinous plot for his homeland.'),
(2, 'Teefa in Trouble', 'TeefaInTrouble.PNG', ' Action', 'https://www.youtube.com/watch?v=jw5dTVTX9zo', '2018-07-20', '02:35:00', 'A gangster hires Teefa to kidnap a girl from Poland so that his son can marry her. However, Teefa starts to fall in love with the girl he is supposed to kidnap.'),
(3, 'The Legend of Maula Jatt\r\n', 'MaulaJatt.PNG', 'Action/Drama', 'https://www.youtube.com/watch?v=pEWqOAcYgpQ', '2022-10-13', '02:33:00', 'From times untold where legends are written in soil with blood, a hero is born. Maula Jatt, a fierce prizefighter with a tortured past seeks vengeance against his arch nemesis Noori Natt, the most feared warrior in the land of Punjab.'),
(4, 'Drifting Home', 'DriftingHome.PNG', 'Kids Animation', 'https://www.youtube.com/watch?v=BSE2KGU5png', '2022-09-16', '01:59:00', 'During summer break, sixth graders Kosuke and Natsume play in an apartment building set to be demolished. They find themselves caught up in a strange phenomenon. All they can see around them is a vast sea.'),
(5, 'The Smurfs', 'TheSmurfs.PNG', 'Adventure', 'https://www.youtube.com/watch?v=yhBpgqXwrt8', '2011-09-23', '01:43:00', 'While trying to escape the evil wizard Gargamel, the blue-skinned Smurfs get sucked into a vortex that teleports them to New York. Thereafter, they try their best to find a way back home.'),
(6, 'Encanto', 'Encanto.PNG', 'Kid Animation ', 'https://www.youtube.com/watch?v=CaimKeDcudo', '2020-11-24', '01:49:00', 'The Madrigals are an extraordinary family who live hidden in the mountains of Colombia in a charmed place called the Encanto. The magic of the Encanto has blessed every child in the family with a unique gift -- every child except Mirabel.'),
(7, 'Aladdin', 'Aladdin.jpeg', 'Adventure', 'https://www.youtube.com/watch?v=7hHECMVOq7g', '2019-05-24', '02:08:00', 'Aladdin, a kind thief, woos Jasmine, the princess of Agrabah, with the help of Genie. When Jafar, the grand vizier, tries to usurp the king, Jasmine, Aladdin and Genie must stop him from succeeding.'),
(8, 'A Quiet Place Part II\r\n', 'QuietPlace2.PNG', 'Horror/ Thriller', 'https://www.youtube.com/watch?v=BpdDN9d9Jio', '2021-05-28', '01:37:00', 'Following the deadly events at home, the Abbott family must now face the terrors of the outside world as they continue their fight for survival in silence. '),
(9, 'It Chapter Two', 'IT2.PNG', 'Horror/ Thriller', 'https://www.youtube.com/watch?v=xhJ5P7Up3jA', '2019-09-06', '02:49:00', 'After 27 years, the Losers Club receive a call from their friend Mike Hanlon that Pennywise is back. They decide to honour their promise and return to their old town to end the evil clown for good.'),
(10, 'We Have a Ghost', 'WeHaveAGhost.PNG', 'Mystery', 'https://www.youtube.com/watch?v=82I1ErFD63U', '2023-02-24', '02:07:00', 'The discovery that their house is haunted by a ghost named Ernest makes Kevin\'s family a social media sensation. But when Kevin and Ernest get to the bottom of the mystery of Ernest\'s past, they become targets of the CIA.'),
(11, 'The Secrets of Dumbledore', 'TheSecretofDumbledore.PNG', 'Fantasy', 'https://www.youtube.com/watch?v=Y9dr2zw-TXQ', '2022-04-08', '02:33:00', 'Professor Albus Dumbledore knows the powerful, dark wizard Gellert Grindelwald is moving to seize control of the wizarding world.'),
(12, 'Doraemon: Nobita\'s Sky Utopia\r\n', 'DoremonSkyTopia.PNG', 'Kid Animation', 'https://www.youtube.com/watch?v=_gmKcfXG2es', '2023-03-03', '01:47:00', 'The film will be set in a perfect world in the sky, where everyone lives happily. Doraemon and Nobita set out on an adventure to find the utopia with the help of a new gadget of Doraemon.'),
(13, 'Frozen II', 'Frozen 2.jpeg', 'Kid Animation', 'https://www.youtube.com/watch?v=Zi4LMpSDccc', '2019-11-22', '01:43:00', 'Queen Elsa begins to hear a mysterious melodic voice calling to her. Unsettled, she answers it, thus awakening the elemental spirits and setting into motion a quest to restore an old injustice.');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `register_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Apassword` varchar(255) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `Urole` varchar(50) NOT NULL,
  `status` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `full_name`, `email`, `Apassword`, `picture`, `Urole`, `status`, `code`) VALUES
(85, 'Aqsa Ashfaq', 'aqsaashfaq510@gmail.com', 'aqsaashfaq', 'jannat_mirza_12aa-819x1024.jpg', 'user', 'active', '94de5b562e8812f05df1dae164f37a');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `customer-name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Role_id` int(10) NOT NULL,
  `Role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Role_id`, `Role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat-id` int(11) NOT NULL,
  `theater-title` varchar(255) NOT NULL,
  `seat-type` varchar(50) NOT NULL,
  `No_of_seat` varchar(74) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat-id`, `theater-title`, `seat-type`, `No_of_seat`) VALUES
(1, 'Atrium Cinemas', 'Adult', '1'),
(2, 'Capri Cinema', 'Child', '1');

-- --------------------------------------------------------

--
-- Table structure for table `seat_categories`
--

CREATE TABLE `seat_categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_categories`
--

INSERT INTO `seat_categories` (`id`, `categories`) VALUES
(1, 'Adult'),
(2, 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theater_id` int(11) NOT NULL,
  `theater-title` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `capacity` varchar(74) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `showdate` date DEFAULT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `showtime` varchar(255) NOT NULL,
  `movie-pic` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theater_id`, `theater-title`, `country`, `capacity`, `Location`, `showdate`, `movieTitle`, `showtime`, `movie-pic`, `description`) VALUES
(1, 'Atrium Cinemas', 'Pakistan', '74 Seat', 'V24J+C24, MBL Panorama Karachi Cantonment.', '2023-03-28', 'Boss Baby', '06:00pm', 'BossBaby.PNG', 'Seven-year-old Tim gets jealous when his parents give all their attention to his little brother. Tim soon learns that the baby can talk and the two team up to foil the plans of the CEO of Puppy Co.'),
(2, 'Capri Cinema', 'Pakistan', '74 seat', 'M.A Jinnah Rd, Central Jacob Lines Karachi.', '2023-03-27', 'Cruella Devil', '07:00pm', 'cruella.jpg', 'Estella is a young and clever grifter who\'s determined to make a name for herself in the fashion world. She soon meets a pair of thieves who appreciate her appetite for mischief, and together they build a life for themselves on the streets of London.'),
(3, 'The Arena Karachi', 'Pakistan', '70 seat', 'Bahria Town Tower, Tariq Rd, P.E.C.H.S Block 2 Karachi.', '2023-03-28', 'Mario Bros', '06:00pm', 'Mario Bros.jpg', 'With help from Princess Peach, Mario gets ready to square off against the all-powerful Bowser to stop his plans from conquering the world.'),
(4, 'Mega Multiplex Cinema\r\n', 'Pakistan', '74 Seat', 'Millennium Mall, Rashid Minhas Rd, Gulistan-e-Johar, Karachi.', '2023-03-26', 'Enola Holmes', '07:00pm', 'EnolaHolmes.PNG', 'While searching for her missing mother, intrepid teen Enola Holmes uses her sleuthing skills to outsmart big brother Sherlock and help a runaway lord.');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `T-id` int(11) NOT NULL,
  `booking-id` int(11) NOT NULL,
  `ticket-type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `moviet` (`movieTitle`),
  ADD KEY `c-id` (`customer-name`),
  ADD KEY `Ttitle` (`theater-name`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `book_status`
--
ALTER TABLE `book_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer-id`),
  ADD UNIQUE KEY `customer_name` (`customer_name`),
  ADD KEY `test` (`register-id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genere-id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie_id`),
  ADD UNIQUE KEY `movieTitle` (`movieTitle`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book` (`booking-id`),
  ADD KEY `customer` (`custome-id`);

--
-- Indexes for table `popularmovies`
--
ALTER TABLE `popularmovies`
  ADD PRIMARY KEY (`MovieId`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user-password` (`Apassword`),
  ADD KEY `connect` (`Urole`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `message` (`message`),
  ADD KEY `name` (`customer-name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_id`),
  ADD UNIQUE KEY `Role_name` (`Role_name`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat-id`),
  ADD KEY `test` (`theater-title`),
  ADD KEY `type` (`seat-type`);

--
-- Indexes for table `seat_categories`
--
ALTER TABLE `seat_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories` (`categories`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theater_id`),
  ADD UNIQUE KEY `theater-title` (`theater-title`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`T-id`),
  ADD UNIQUE KEY `ticket-type` (`ticket-type`),
  ADD KEY `booking` (`booking-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `book_status`
--
ALTER TABLE `book_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genere-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `popularmovies`
--
ALTER TABLE `popularmovies`
  MODIFY `MovieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat_categories`
--
ALTER TABLE `seat_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `T-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `Ttitle` FOREIGN KEY (`theater-name`) REFERENCES `theatre` (`theater-title`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `email` FOREIGN KEY (`email`) REFERENCES `registration` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`register-id`) REFERENCES `registration` (`register_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `book` FOREIGN KEY (`booking-id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer` FOREIGN KEY (`custome-id`) REFERENCES `customer` (`customer-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `connect` FOREIGN KEY (`Urole`) REFERENCES `role` (`Role_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `name` FOREIGN KEY (`customer-name`) REFERENCES `customer` (`customer_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `type` FOREIGN KEY (`seat-type`) REFERENCES `seat_categories` (`categories`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `booking` FOREIGN KEY (`booking-id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
