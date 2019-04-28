-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2019 at 10:01 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `adminpanel`
--

CREATE TABLE `adminpanel` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `post` varchar(10000) NOT NULL,
  `userAccess` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `adminpanel`
--

INSERT INTO `adminpanel` (`id`, `datetime`, `title`, `category`, `author`, `image`, `post`, `userAccess`) VALUES
(4, '02/08/2019 02:28:38 am', 'bjp neta', 'old civilasation', 'admin', 'FB_IMG_1489253448761.jpg', 'amit bhaiya gttt', '1'),
(5, '02/08/2019 12:29:51 am', 'jui0o-', 'party', 'admin', '_20170201_184602.jpg', 'tgrthrhtr', '2'),
(10, '02/08/2019 08:28:04 am', 'new generation', 'party', 'admin', 'him.PNG', 'ed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dout odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', '1'),
(12, '02/08/2019 10:42:30 pm', 'This one is kudos', 'happy distribution', 'sristi', 'IMG_20170126_065714.jpg', 'A Seashore Happinesss gives me utmost pleasure', '5'),
(13, '02/08/2019 11:30:57 pm', 'dusky', 'party', 'sristi', 'FB_IMG_1489160707741.jpg', 'beauty', '5'),
(14, '02/11/2019 01:23:44 pm', 'Cricket ', 'party', 'admin', '4OypH6k-the-joker-wallpaper.jpg', 'TEASER: Here\'s a sneak peek of what happened when @DanishSait went out to find out from you if the Indian players should skip some part of the IPL ahead of the 2019 World Cup. #StrangerXI\'s second episode out tomorrow! #2019IPL #ICCCricketWorldCup #IndiaCricket\r\n\r\n\r\n\"I think world cricket loves him. Everyone loves Virat Kohli because it\'s refreshing to hearing him talk so honestly and openly. He loves confrontation. That\'s why he has those 100s in chases\" - Shane Warne', '5'),
(15, '02/11/2019 01:39:45 pm', 'Placement practice', 'Education', 'admin', 'max-busse-1100281-unsplash.jpg', 'Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include storytelling, discussion, teaching, training, and directed research. Education frequently takes place under the guidance of educators and also learners may also educate themselves.[1] Education can take place in formal or informal settings and any experience that has a formative effect on the way one thinks, feels, or acts may be considered educational. The methodology of teaching is called pedagogy.', '5'),
(16, '02/11/2019 02:27:14 pm', 'R studio', 'Education', 'admin', 'Screenshot (16).png', 'This si sjust for learning purpose', '1'),
(19, '02/12/2019 08:03:18 pm', 'dusky bureau', 'happy distribution', 'sristi', 'the_joker_wallpaper_and_video_by_erikvonlehmann-d5tnjql.jpg', 'this is just for fun', '5'),
(20, '02/12/2019 08:04:15 pm', 'title mania', 'party', 'sristi', 'Screenshot (20).png', 'retrieval justy ', '5'),
(22, '02/17/2019 04:56:47 pm', 'unsplash images', 'happy distribution', 'sristi', 'der.jpeg', 'lokking rather attractive', '5'),
(23, '02/17/2019 05:00:09 pm', 'hacker world', 'Education', 'sristi', 'hacker.jpeg', 'thsi si s hacjer sijdofmewf kvgnrk gfdnbdfigbjermnkjsdbhjdasbdu,bfewfewfewgergergewtew', '1'),
(24, '02/27/2019 04:11:52 pm', 'how is spirit josh', 'Education', 'sristi', 'IMG_20170308_172815150.jpg', '2017', '5'),
(25, '03/02/2019 11:46:34 am', 'sunny satys', 'old civilasation', 'sristi', 'IMG_20170126_065959.jpg', 'seashore 2de2d2d2f3', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `creatorname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `datetime`, `name`, `creatorname`) VALUES
(6, '02/07/2019 10:31:33 pm', 'swiggy', 'admin'),
(7, '02/07/2019 10:31:38 pm', 'old civilasation', 'admin'),
(8, '02/08/2019 12:24:37 am', 'party', 'admin'),
(9, '02/08/2019 10:41:08 pm', 'happy distribution', 'sristi'),
(10, '02/11/2019 01:38:39 pm', 'Education', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(10) NOT NULL,
  `sendby` varchar(200) NOT NULL,
  `sendto` varchar(200) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `posttime` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `sendby`, `sendto`, `message`, `posttime`) VALUES
(46, 'atul@gmail.com', 'riya@gmail.com', 'hi ret', '03/04/2019 07:19:46 pm'),
(47, 'atul@gmail.com', 'riya@gmail.com', 'ddge', '03/04/2019 07:23:43 pm'),
(48, 'riya@gmail.com', 'atul@gmail.com', 'hello atul', '03/04/2019 07:27:39 pm'),
(49, 'riya@gmail.com', 'riya@gmail.com', 'vfdfgfe', '03/04/2019 07:27:57 pm'),
(50, 'riya@gmail.com', 'riya@gmail.com', 'ffdgre', '03/04/2019 07:28:05 pm'),
(51, 'riya@gmail.com', 'suraj@gmail.com', 'hi suraj', '03/04/2019 07:28:32 pm'),
(52, 'suraj@gmail.com', 'riya@gmail.com', 'ya riya', '03/04/2019 07:30:29 pm'),
(53, 'suraj@gmail.com', 'riya@gmail.com', 'what going on', '03/04/2019 07:30:42 pm'),
(54, 'suraj@gmail.com', 'riya@gmail.com', 'is tomorrow class?', '03/04/2019 07:30:50 pm'),
(55, 'suraj@gmail.com', 'riya@gmail.com', 'Any discussion in classs grp', '03/04/2019 07:31:02 pm'),
(56, 'riya@gmail.com', 'suraj@gmail.com', 'i dont know suraj', '03/04/2019 07:31:14 pm'),
(57, 'riya@gmail.com', 'suraj@gmail.com', 'tell aboy r you are you going', '03/04/2019 07:31:30 pm'),
(58, 'suraj@gmail.com', 'atul@gmail.com', 'hi atul', '03/04/2019 07:32:12 pm'),
(59, 'kd@gmail.com', 'riya@gmail.com', 'hi this is kd ', '03/05/2019 03:20:34 pm'),
(60, 'riya@gmail.com', 'kd@gmail.com', 'oo  ya', '03/05/2019 03:20:43 pm');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `approvedBy` varchar(100) NOT NULL,
  `status` varchar(5) NOT NULL,
  `adminpanel_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `datetime`, `name`, `email`, `comment`, `approvedBy`, `status`, `adminpanel_id`) VALUES
(4, '02/08/2019 10:03:05 am', 'admin', 'admin@gmail.com', 'awesome\r\n', 'pending', 'ON', 10),
(5, '02/08/2019 02:40:54 pm', 'admin', 'admin@gmail.com', 'haha', 'pending', 'ON', 4),
(7, '02/08/2019 02:53:18 pm', 'admin', 'admin@gmail.com', 'hi chutiye', 'pending', 'ON', 5),
(9, '02/08/2019 09:22:26 pm', 'admin', 'admin@gmail.com', 'hi', 'pending', 'OFF', 11),
(10, '02/08/2019 10:43:11 pm', 'admin', 'admin@gmail.com', 'nice hahaa', 'pending', 'OFF', 12),
(11, '02/08/2019 10:44:48 pm', 'sristi', 'sristi@gmail.com', 'great bro', 'pending', 'OFF', 10),
(12, '02/10/2019 04:13:28 pm', 'shekar', 'shekar@gmail.com', 'hello\r\n', 'pending', 'ON', 11),
(14, '02/11/2019 01:41:39 pm', 'akshay', 'akshay@gmail.com', 'hi', 'pending', 'ON', 15),
(17, '02/11/2019 01:48:01 pm', 'akshay', 'akshay@gmail.com', 'dekho', 'pending', 'ON', 15),
(20, '02/11/2019 01:49:05 pm', 'akshay', 'akshay@gmail.com', 'this is too much', 'pending', 'ON', 15),
(26, '02/11/2019 02:21:20 pm', 'shekar', 'shekar@gmail.com', 'seashore view', 'pending', 'ON', 12),
(27, '02/11/2019 03:19:22 pm', 'shekar', 'shekar@gmail.com', 'cricket mania', 'pending', 'ON', 14),
(28, '02/12/2019 03:36:03 pm', 'akshay', 'akshay@gmail.com', 'hi this akshay', 'pending', 'ON', 18),
(29, '02/12/2019 08:04:39 pm', 'kd', 'kd@gmail.com', 'miuso ssi', 'pending', 'ON', 20),
(30, '02/12/2019 08:05:20 pm', 'kd', 'kd@gmail.com', 'hiuisq', 'pending', 'ON', 20),
(31, '02/17/2019 04:50:08 pm', 'kd', 'kd@gmail.com', 'rgretyery', 'pending', 'ON', 20),
(34, '02/17/2019 04:54:24 pm', 'kd', 'kd@gmail.com', 'gtrytytryrt', 'pending', 'ON', 20),
(35, '02/17/2019 05:14:04 pm', 'sristi', 'sristi@gmail.com', 'hu', 'pending', 'OFF', 23),
(36, '02/23/2019 01:29:02 pm', 'atul kumar', 'atul@gmail.com', 'this is a test for you', 'pending', 'ON', 23),
(39, '02/23/2019 01:33:48 pm', 'atul kumar', 'atul@gmail.com', 'wow', 'pending', 'ON', 22),
(40, '02/23/2019 01:39:58 pm', 'satish', 'satish@hotmail.com', 'er3t3', 'pending', 'ON', 24),
(41, '02/23/2019 01:42:17 pm', 'kd', 'kd@gmail.com', 'cgchcc', 'pending', 'ON', 24),
(43, '02/23/2019 02:09:28 pm', 'atul kumar', 'atul@gmail.com', 'dsfegre', 'pending', 'ON', 23);

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `id` int(10) NOT NULL,
  `sendby` varchar(255) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `datetime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`id`, `sendby`, `message`, `datetime`) VALUES
(7, 'atul kumar gupta', 'just having very urgent meeting', '03/03/2019 11:27:50 '),
(9, 'riya', 'iliu', '03/04/2019 12:03:03 '),
(13, 'atul kumar gupta', 'fghrhhre', '03/04/2019 12:18:16 '),
(14, 'riya', 'fgrtghtrh', '03/04/2019 12:38:27 '),
(15, 'atul kumar gupta', 'eeffer', '03/04/2019 12:41:01 '),
(16, 'atul kumar gupta', 'gfg', '03/04/2019 12:51:29 '),
(17, 'riya', 'fddffgf', '03/04/2019 12:52:32 '),
(18, 'riya', 'gfh', '03/04/2019 12:52:37 '),
(19, 'riya', 'bfght', '03/04/2019 12:53:02 '),
(20, 'riya', 'hthtr', '03/04/2019 12:53:08 '),
(21, 'riya', 'bdfbdf', '03/04/2019 12:53:55 '),
(22, 'riya', 'oy7i7di', '03/04/2019 12:54:24 '),
(23, 'bilas', 'I am bilas what I can help you', '03/04/2019 12:55:30 '),
(25, 'riya', 'ok ofcourse', '03/04/2019 12:56:42 '),
(26, 'riya', 'ytjtyjt', '03/04/2019 12:57:09 '),
(27, 'riya', 'bored', '03/04/2019 02:00:06 '),
(28, 'riya', 'bored', '03/04/2019 02:00:17 '),
(29, 'riya', 'i am feeling bord', '03/04/2019 02:00:41 '),
(30, 'riya', 'rferge', '03/04/2019 02:02:32 '),
(31, 'atul ', 'yes it is', '03/04/2019 07:12:03 '),
(32, 'suraj', 'wdqw', '03/04/2019 07:35:50 '),
(33, 'riya', 'hi for alln users deefestwe', '03/05/2019 03:24:02 ');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `time` varchar(100) NOT NULL,
  `organiser` varchar(300) NOT NULL,
  `offer` varchar(600) NOT NULL,
  `place` varchar(600) NOT NULL,
  `interested` int(11) NOT NULL,
  `addedby` varchar(100) NOT NULL,
  `addedat` varchar(100) NOT NULL,
  `going` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `time`, `organiser`, `offer`, `place`, `interested`, `addedby`, `addedat`, `going`) VALUES
(1, 'July 21th', 'Star Pizza', '20% before 5pm with valid student card.', 'Talbot St, Mountjoy, Dublin', 0, 'admin', '02/08/2019 02:15:30 pm', ''),
(2, 'July 25th', 'Lifestyle Sports', 'Back to college offer. 50% of all sports bags with valid student card,', '40 Mary St, North City, Dublin 1', 0, 'admin', '02/08/2019 02:17:35 pm', ''),
(3, 'August 1st', 'Dublin Zoo', 'Half price admission', 'Phoenix Park, Dublin 8', 0, 'admin', '02/08/2019 02:18:46 pm', ''),
(4, 'August 10th - 13th', 'Cineworld', '2nd Ticket half price.', 'The Parnell Centre, Parnell St, Rotunda, Dublin 1', 0, 'admin', '02/08/2019 02:19:52 pm', ''),
(6, 'August 10th - 13th', 'Monster plaza goods presents', '50% before 5pm with valid student card. + one cupon swiggy', 'cusat auditorium', 0, 'akshay', '02/10/2019 09:54:12 am', ''),
(7, '12 july ', 'star india', 'Full Day workshop on Contracts Management', 'Kochi near marine drive', 0, 'admin', '02/11/2019 02:31:34 pm', ''),
(8, '11 dec', 'lulu mall', 'student card. + one cupon swiggy', 'Kochi near marine drive', 0, 'admin', '02/11/2019 02:48:41 pm', ''),
(9, 'August 1st', 'ajax grp', 'Full Day workshop on Contracts Management on ajax', 'cusat auditorium', 0, 'admin', '02/11/2019 04:01:09 pm', ''),
(10, 'July 21th', 'Star plus Award', 'free ticket', '40 Mary St, North City, Dublin 1', 0, 'admin', '02/11/2019 04:06:15 pm', ''),
(11, 'August 1st', 'cinema jagat', 'Full Day prade', 'reebtrrht', 0, 'admin', '02/11/2019 04:09:13 pm', ''),
(12, 'August 10th - 13th', 'zoho', 'ghfgnfg', 'trtrtr', 0, 'sristi', '02/11/2019 04:33:39 pm', ''),
(13, '12 july 2019', 'lenevo ', '50 % off for the first commer and many more..', 'near santa clauz west kochi ', 0, 'sristi', '02/17/2019 05:02:36 pm', ''),
(14, '20th feb 2019', 'zoology department presents', '20% before 5pm with valid student card.', 'student amenity cenre', 0, 'kd', '02/22/2019 03:47:01 pm', ''),
(15, 'efgerg', 'dfdsff', 'erteter', 'ertee', 0, 'kd', '02/22/2019 06:17:35 pm', ''),
(16, 'tutu', 'hgfht', 'yutyut', 'yutyt', 0, 'kd', '02/22/2019 06:18:00 pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `jobcategory`
--

CREATE TABLE `jobcategory` (
  `jobcatid` int(11) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `jobcatname` varchar(500) NOT NULL,
  `jobcatdescription` varchar(500) NOT NULL,
  `postedBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobcategory`
--

INSERT INTO `jobcategory` (`jobcatid`, `datetime`, `jobcatname`, `jobcatdescription`, `postedBy`) VALUES
(2, '02/09/2019 01:36:05 pm', 'Accountancy / Finance Jobs', 'For students with a background in Finance/Maths', 'sristi'),
(3, '02/09/2019 01:37:17 pm', 'advertiser', 'for advertising in company', 'admin'),
(4, '02/22/2019 07:27:20 pm', 'ghfhtr', 'tuttu', 'sristi');

-- --------------------------------------------------------

--
-- Table structure for table `jobpost`
--

CREATE TABLE `jobpost` (
  `jobid` int(10) NOT NULL,
  `jobSubject` varchar(500) NOT NULL,
  `jobCompany` varchar(500) NOT NULL,
  `jobSalary` int(30) NOT NULL,
  `jobLocation` varchar(200) NOT NULL,
  `datetime` varchar(100) NOT NULL,
  `jobCat` int(10) NOT NULL,
  `Details` varchar(300) NOT NULL,
  `JobPostBy` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobpost`
--

INSERT INTO `jobpost` (`jobid`, `jobSubject`, `jobCompany`, `jobSalary`, `jobLocation`, `datetime`, `jobCat`, `Details`, `JobPostBy`) VALUES
(5, 'mongodb', 'oracle India', 745, 'cusat', '02/09/2019 02:47:42 pm', 2, 'high in demand', 'admin'),
(6, 'app developent', 'apple', 789, 'kochi', '02/09/2019 02:48:49 pm', 3, 'needed', 'sristi'),
(7, 'swiggy carrier', 'swiggy', 7412, 'kochi', '02/09/2019 04:17:59 pm', 3, 'iherfer', 'sristi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `gender` varchar(40) NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `dob` datetime(6) NOT NULL,
  `Student_ID` varchar(20) NOT NULL,
  `usertype` varchar(40) NOT NULL,
  `opt` int(1) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `pass`, `mobile`, `gender`, `hobbies`, `image`, `dob`, `Student_ID`, `usertype`, `opt`, `status`) VALUES
(1, 'klop', 'him@gmail.com', '4122ea4f5490094a33d7cdba65136cf8', '8089125587', 'm', 'reading,singing,playing,Dancing,others', '_20170201_184602.jpg', '1975-06-22 00:00:00.000000', '121', '1', 1, 0),
(17, 'sristi', 'sristi@gmail.com', '21232f297a57a5a743894a0e4a801fc3', '7979858006', 'f', 'reading,playing', '', '1998-12-14 00:00:00.000000', '7411', '4', 1, 1),
(19, 'kd', 'kd@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8056789612', 'm', 'reading,singin', 'hermes-rivera-682997-unsplash.jpg', '2011-12-19 00:00:00.000000', '785220', '1', 1, 1),
(22, 'atul kumar gupta', 'atul@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '1236549871', 'm', 'singin,playing,Dancing', 'Himanshu.PNG', '1962-11-18 00:00:00.000000', '789625', '1', 1, 0),
(23, 'satish', 'satish@hotmail.com', 'b8377b23bb86899405d2455cc6da3556', '6358965812', 'm', 'playing,Dancing', 'IMG_20170126_070237.jpg', '1997-05-21 00:00:00.000000', '74136', '1', 0, 0),
(24, 'suraj', 'suraj@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '7412589635', 'm', 'reading,playing', '', '1967-12-18 00:00:00.000000', '12523', '1', 1, 0),
(25, 'riya', 'riya@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '7412589365', 'f', 'singin,Dancing', 'and_the_winner_of_britains_dirtiest_student_dig_is_this_19yearold_girl_640_16.jpg', '1999-11-19 00:00:00.000000', '143', '1', 1, 1),
(26, 'bilas', 'bilas@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '2369852741', 'm', 'Dancing', '', '1971-06-23 00:00:00.000000', '75639', '1', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminpanel`
--
ALTER TABLE `adminpanel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `discussion`
--
ALTER TABLE `discussion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobcategory`
--
ALTER TABLE `jobcategory`
  ADD PRIMARY KEY (`jobcatid`);

--
-- Indexes for table `jobpost`
--
ALTER TABLE `jobpost`
  ADD PRIMARY KEY (`jobid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `adminpanel`
--
ALTER TABLE `adminpanel`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `discussion`
--
ALTER TABLE `discussion`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jobcategory`
--
ALTER TABLE `jobcategory`
  MODIFY `jobcatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `jobpost`
--
ALTER TABLE `jobpost`
  MODIFY `jobid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
