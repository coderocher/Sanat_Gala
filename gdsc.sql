-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 05:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gdsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `creds`
--

CREATE TABLE `creds` (
  `mno` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `category` int(11) DEFAULT NULL,
  `experience` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `creds`
--

INSERT INTO `creds` (`mno`, `name`, `category`, `experience`, `username`, `password`) VALUES
(100, 'admin', NULL, 25, 'theAdmin', 'Admin@a13i2'),
(101, 'John Doe', 1, 5, 'john_doe', 'P@ssw0rd'),
(102, 'Jane Smith', 2, 8, 'jane_smith', 'Qwerty_1'),
(103, 'Michael Johnson', 3, 4, 'michael_johnson', 'Myp@ss'),
(104, 'Emily Brown', 1, 2, 'emily_brown', 'Pass_123'),
(105, 'William Davis', 2, 9, 'william_davis', 'S3cur3Pwd'),
(106, 'Linda Wilson', 3, 6, 'linda_wilson', 'Pwd#456'),
(107, 'David Martinez', 1, 7, 'david_martinez', 'Secret@7'),
(108, 'Maria Johnson', 2, 3, 'maria_johnson', 'MyP@ssword'),
(109, 'James Anderson', 3, 5, 'james_anderson', 'SecurePwd#2'),
(110, 'Sarah Thomas', 1, 8, 'sarah_thomas', 'Th0mas_P@ss'),
(111, 'Robert Clark', 2, 1, 'robert_clark', 'C1ark_123'),
(112, 'Jennifer Lee', 3, 10, 'jennifer_lee', 'L33_Password'),
(113, 'Daniel White', 1, 6, 'daniel_white', 'Wh1t3_P@ss'),
(114, 'Lisa Harris', 2, 4, 'lisa_harris', 'Harr1s_P@ss'),
(115, 'Christopher Walker', 3, 9, 'christopher_walker', 'W@lker123'),
(116, 'Amit Patel', 1, 7, 'amit_patel', 'Patel@123'),
(117, 'Rekha Sharma', 2, 3, 'rekha_sharma', 'SharmaPwd_1'),
(118, 'Rahul Verma', 3, 6, 'rahul_verma', 'V3rma_P@ss'),
(119, 'Anita Singh', 1, 9, 'anita_singh', 'Singh_2023'),
(120, 'Vivek Gupta', 2, 2, 'vivek_gupta', 'Gupta123!'),
(121, 'Kiran Khan', 3, 5, 'kiran_khan', 'Khan5_P@ss'),
(122, 'Sudha Yadav', 1, 8, 'sudha_yadav', 'YadavPwd#1'),
(123, 'Ravi Mishra', 2, 4, 'ravi_mishra', 'RaviM_123'),
(124, 'Neha Agarwal', 3, 7, 'neha_agarwal', 'N3ha_P@ss'),
(125, 'Sanjay Sharma', 1, 10, 'sanjay_sharma', 'Sharma10@'),
(126, 'Riya Jain', 2, 6, 'riya_jain', 'JainRiya_1'),
(127, 'Arjun Patel', 3, 3, 'arjun_patel', 'Arjun_P@ss'),
(128, 'Shalini Gupta', 1, 5, 'shalini_gupta', 'Shalini_5'),
(129, 'Vikram Singh', 2, 8, 'vikram_singh', 'Vikram@8'),
(130, 'Anjali Verma', 3, 2, 'anjali_verma', 'Anjali2_P@ss');

-- --------------------------------------------------------

--
-- Table structure for table `ecategories`
--

CREATE TABLE `ecategories` (
  `cno` int(11) NOT NULL,
  `cname` varchar(30) DEFAULT NULL,
  `cintro` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ecategories`
--

INSERT INTO `ecategories` (`cno`, `cname`, `cintro`) VALUES
(1, 'Tech', 'Unlock your potential and embrace the power of technology by joining our exciting technical events! Expand your knowledge, network with like-minded enthusiasts, and stay at the forefront of innovation. Don\'t miss this opportunity to learn, grow, and be part of a dynamic community that celebrates all things tech. Join us now and let your passion for technology soar to new heights! #TechEvents #Innovation'),
(2, 'Music', 'Discover the magic of music at our vibrant events! Immerse yourself in melodies that stir the soul, performed by talented artists. Join fellow enthusiasts, whether you\'re an artist or an admirer. Let the harmonies uplift your spirit and create lasting memories. Unlock your musical journey, share in the joy, and be part of a community that resonates with rhythm and passion. Come, let\'s celebrate the universal language of music together!'),
(3, 'Sports', 'Dive into the thrill of sports! Join our dynamic events to unleash your passion, conquer challenges, and celebrate teamwork. From beginners to pros, everyone\'s invited. Embrace the rush, forge new connections, and ignite your competitive spirit. Unleash your potential in exhilarating matches. Be part of the energy. Join us now!');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `eno` int(11) NOT NULL,
  `ename` varchar(30) DEFAULT NULL,
  `edate` date DEFAULT NULL,
  `eintro` varchar(1000) DEFAULT NULL,
  `ecat` int(11) DEFAULT NULL,
  `evenue` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`eno`, `ename`, `edate`, `eintro`, `ecat`, `evenue`) VALUES
(11, 'Tech Symposium', '2023-08-10', 'Explore the latest advancements in technology. Engaging talks, workshops, and demos await you in this knowledge-packed symposium.', 1, 'Big Data Lab'),
(12, 'Melodic Harmony', '2023-08-15', 'Experience a soul-stirring musical extravaganza. Immerse yourself in melodies that resonate with emotions and joy.', 2, 'Music Club'),
(13, 'SprintFest', '2023-08-20', 'Gear up for a thrilling sports festival. Compete, challenge, and celebrate the spirit of sportsmanship.', 3, 'Basket Ball Court'),
(14, 'Tech Innovate', '2023-08-12', 'A platform for tech enthusiasts to showcase their innovations. Witness groundbreaking ideas and connect with visionaries.', 1, 'PGDM Seminar Hall'),
(15, 'Harmony Night', '2023-08-18', 'Embark on a musical journey under the starry sky. An enchanting evening of diverse melodies and enchanting performances.', 2, 'Royal Cafe Junction'),
(16, 'Athletics Challenge', '2023-08-23', 'Test your mettle in adrenaline-pumping sports challenges. Push your limits and win exciting prizes.', 3, 'Football court'),
(17, 'Tech Confluence', '2023-08-14', 'A convergence of minds in the tech world. Engaging discussions, tech demos, and networking opportunities.', 1, 'IOT Centre'),
(18, 'Rhythmic Fusion', '2023-08-17', 'Witness a fusion of musical genres and cultures. An eclectic evening of rhythm, harmony, and cultural diversity.', 2, 'Auditorium'),
(19, 'Adventure Quest', '2023-08-25', 'Embark on an adventurous journey. Conquer challenges, explore nature, and create unforgettable memories.', 3, 'PGDM ground'),
(20, 'CodingContest', '2023-08-30', 'Coding will be done on HackerRank platform.', 1, 'ML Lab');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `mno` int(11) DEFAULT NULL,
  `gno` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`mno`, `gno`) VALUES
(101, 11),
(101, 14),
(102, 15),
(102, 18),
(103, 13),
(103, 16),
(103, 19),
(105, 15),
(106, 13),
(106, 16),
(101, 20),
(104, 20),
(107, 20);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `creds`
--
ALTER TABLE `creds`
  ADD PRIMARY KEY (`mno`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `ecategories`
--
ALTER TABLE `ecategories`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`eno`),
  ADD KEY `ecat` (`ecat`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD KEY `mno` (`mno`),
  ADD KEY `gno` (`gno`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `creds`
--
ALTER TABLE `creds`
  ADD CONSTRAINT `creds_ibfk_1` FOREIGN KEY (`category`) REFERENCES `ecategories` (`cno`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`ecat`) REFERENCES `ecategories` (`cno`);

--
-- Constraints for table `groups`
--
ALTER TABLE `groups`
  ADD CONSTRAINT `groups_ibfk_1` FOREIGN KEY (`mno`) REFERENCES `creds` (`mno`),
  ADD CONSTRAINT `groups_ibfk_2` FOREIGN KEY (`gno`) REFERENCES `events` (`eno`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
