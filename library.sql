-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 08:19 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `phone`, `email`, `address`) VALUES
(4, 789123476, 'Ahmad@kpu.edu.af', 'Karte-mamoren, polythechnic University');

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(50) NOT NULL,
  `author_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `create_at`, `update_at`) VALUES
(10, 'BEHROUZ A. FOROUZAN', '2019-12-13', '0000-00-00'),
(11, 'PAUL DEITEL', '2019-12-17', '0000-00-00'),
(12, 'HARVEY DEITEL', '2019-12-17', '0000-00-00'),
(13, 'Joseph S. Valacich ', '2019-12-17', '0000-00-00'),
(14, ' Joey F. George ', '2019-12-17', '0000-00-00'),
(15, ' Jeffrey A. Hoffer', '2019-12-17', '0000-00-00'),
(16, 'sodaba', '2020-01-14', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(50) NOT NULL,
  `record_id` varchar(255) COLLATE utf8_bin NOT NULL,
  `book_title` varchar(250) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `publisher_id` int(50) NOT NULL,
  `no_of_volume` int(50) NOT NULL,
  `no_of_pages` int(50) NOT NULL,
  `procurement_id` int(50) NOT NULL,
  `category_id` int(50) NOT NULL,
  `edition` varchar(250) COLLATE utf8_bin NOT NULL,
  `price` int(50) NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `record_id`, `book_title`, `date`, `publisher_id`, `no_of_volume`, `no_of_pages`, `procurement_id`, `category_id`, `edition`, `price`, `image`) VALUES
(8, 'D-12', 'how to program early objects', '2016-06-15', 8, 12, 1200, 11, 9, 'Tenth Edition', 1000, 'assets/img/book/D-12.PNG073737.png'),
(9, 'D-12', 'essentials of systems analysis and design', '2016-06-15', 9, 16, 450, 10, 10, 'Fifth edition', 1000, 'assets/img/book/Capture11PNG.PNG075255.png'),
(10, '66', 'history', '2019-10-29', 9, 5, 88, 9, 8, 'چاپ اول', 37, 'assets/img/book/D-12.PNG050844.png'),
(11, 'ac3', 'book', '2020-01-14', 9, 123, 88, 10, 8, 'Fifth edition', 7, 'assets/img/book/D-12.PNG064421.png');

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `book_author_id` int(50) NOT NULL,
  `book_id` int(50) NOT NULL,
  `author_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`book_author_id`, `book_id`, `author_id`) VALUES
(15, 0, 9),
(17, 0, 9),
(19, 2, 10),
(21, 4, 10),
(9, 5, 7),
(10, 5, 8),
(22, 5, 10),
(11, 6, 7),
(23, 6, 10),
(12, 7, 9),
(24, 7, 10),
(13, 8, 9),
(25, 8, 11),
(26, 8, 12),
(14, 9, 15),
(27, 9, 15),
(28, 9, 15),
(29, 9, 15),
(30, 10, 10),
(31, 11, 11);

-- --------------------------------------------------------

--
-- Table structure for table `book_translator`
--

CREATE TABLE `book_translator` (
  `book_translator_id` int(50) NOT NULL,
  `book_id` int(50) NOT NULL,
  `translator_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `book_translator`
--

INSERT INTO `book_translator` (`book_translator_id`, `book_id`, `translator_id`) VALUES
(21, 4, 10),
(25, 8, 10),
(26, 9, 10),
(27, 10, 10),
(28, 11, 10);

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrow_id` int(50) NOT NULL,
  `book_id` int(50) NOT NULL,
  `type` varchar(250) COLLATE utf8_bin NOT NULL,
  `user_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `borrower_id` int(250) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `collateral` int(50) NOT NULL,
  `checks` tinyint(1) NOT NULL,
  `jarema` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrow_id`, `book_id`, `type`, `user_name`, `borrower_id`, `check_in`, `check_out`, `collateral`, `checks`, `jarema`) VALUES
(1, 8, '0', 'user', 3, '2019-12-15', '2019-12-20', 500, 0, 0),
(4, 8, '0', 'user', 1, '2019-11-30', '2019-11-30', 500, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(50) NOT NULL,
  `category_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `create_at`, `update_at`) VALUES
(8, 'Networking', '2019-12-13', '0000-00-00'),
(9, 'Programing', '2019-12-17', '0000-00-00'),
(10, 'System Anlysis', '2019-12-17', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(50) NOT NULL,
  `department_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `faculty_id` int(50) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `faculty_id`, `create_at`, `update_at`) VALUES
(5, 'تعمیرات', 3, '0000-00-00', '0000-00-00'),
(6, 'شهرسازی', 4, '0000-00-00', '0000-00-00'),
(7, 'مهندسی', 5, '2019-09-13', '0000-00-00'),
(14, 'it', 2, '2019-10-15', '0000-00-00'),
(16, 'CIS', 2, '2019-12-08', '0000-00-00'),
(17, 'تعمیرات', 1, '2019-12-17', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `external_magazine`
--

CREATE TABLE `external_magazine` (
  `em_id` int(50) NOT NULL,
  `em_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `reference` varchar(250) COLLATE utf8_bin NOT NULL,
  `em_number` int(50) NOT NULL,
  `issue_year` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `external_magazine`
--

INSERT INTO `external_magazine` (`em_id`, `em_name`, `reference`, `em_number`, `issue_year`) VALUES
(1, 'Azadi Bayan', 'Radio Azadi', 1, 2019),
(2, 'Kiled', 'Radio Kiled', 2, 2019);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(50) NOT NULL,
  `faculty_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_name`, `create_at`, `update_at`) VALUES
(1, 'ساحتمانی', '0000-00-00', '0000-00-00'),
(2, 'کمپیوترساینس', '0000-00-00', '0000-00-00'),
(3, 'هایدرولیک', '0000-00-00', '0000-00-00'),
(4, 'مهندسی', '0000-00-00', '0000-00-00'),
(5, 'شهر سازی', '2019-09-13', '0000-00-00'),
(6, 'تعمیرات', '2019-09-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `jarema`
--

CREATE TABLE `jarema` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `jarema`
--

INSERT INTO `jarema` (`id`, `amount`, `create_at`, `update_at`) VALUES
(4, 20, '2019-12-04', '2019-12-04');

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE `opinion` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `lname` varchar(255) COLLATE utf8_bin NOT NULL,
  `uni` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `detail` longtext COLLATE utf8_bin NOT NULL,
  `aprove` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `opinion`
--

INSERT INTO `opinion` (`id`, `name`, `lname`, `uni`, `email`, `detail`, `aprove`) VALUES
(15, 'sodaba', 'rahimi', 'kpu', 'sodabarahimiit@gmail.com', 'a very good website', 0),
(16, 'latifa', 'sekandri', 'kpu', 'latifa@gmail.com', 'we need more books ', 1),
(17, 'latifa', 'sekandri', 'kpu', 'latifa@gmail.com', 'we need more books ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `other_member`
--

CREATE TABLE `other_member` (
  `om_id` int(50) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `f_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `phone_no` int(50) NOT NULL,
  `reference` varchar(250) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `other_member`
--

INSERT INTO `other_member` (`om_id`, `name`, `f_name`, `phone_no`, `reference`) VALUES
(16, 'Khadija', 'Abdul Kebar', 789765687, 'Kabul University'),
(17, 'Dewa', 'Mohamad Akbar', 786543876, 'Kateb University'),
(18, 'Lima', 'Shenwari', 765419867, 'Kabul University'),
(19, 'Sara', 'Mohammad Naim', 776563288, 'Kardan University');

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE `panel` (
  `panel_id` int(50) NOT NULL,
  `wp_id` int(50) NOT NULL,
  `mag_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `procurement`
--

CREATE TABLE `procurement` (
  `procurement_id` int(50) NOT NULL,
  `procurement_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `procurement`
--

INSERT INTO `procurement` (`procurement_id`, `procurement_name`, `create_at`, `update_at`) VALUES
(9, 'KU', '2019-11-28', '0000-00-00'),
(10, 'American University of Aghanistan', '2019-12-13', '0000-00-00'),
(11, 'Kabul Polytechnic University', '2019-12-17', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `publisher`
--

CREATE TABLE `publisher` (
  `publisher_id` int(50) NOT NULL,
  `publisher_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `publisher_address` varchar(250) COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `publisher`
--

INSERT INTO `publisher` (`publisher_id`, `publisher_name`, `publisher_address`, `create_at`, `update_at`) VALUES
(8, '-', '-', '2019-12-13', '0000-00-00'),
(9, 'Global edition', '-', '2019-12-17', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `scientific_magazine`
--

CREATE TABLE `scientific_magazine` (
  `mag_id` int(50) NOT NULL,
  `mag_no` int(50) NOT NULL,
  `faculty_id` int(50) NOT NULL,
  `teacher_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `issue_year` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `scientific_magazine`
--

INSERT INTO `scientific_magazine` (`mag_id`, `mag_no`, `faculty_id`, `teacher_name`, `issue_year`) VALUES
(2, 1, 2, 'Zia sana', 2019),
(3, 2, 3, 'Ahmad Ahmadi', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(50) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `f_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `id_no` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `detail` varchar(250) COLLATE utf8_bin NOT NULL,
  `faculty_id` int(50) NOT NULL,
  `department_id` int(50) NOT NULL,
  `current_resident` varchar(250) COLLATE utf8_bin NOT NULL,
  `original_resident` varchar(250) COLLATE utf8_bin NOT NULL,
  `phone_no` int(50) NOT NULL,
  `email_address` varchar(250) COLLATE utf8_bin NOT NULL,
  `photo` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `name`, `f_name`, `id_no`, `date`, `detail`, `faculty_id`, `department_id`, `current_resident`, `original_resident`, `phone_no`, `email_address`, `photo`) VALUES
(1, 'mahsa', 'Barat Ali', 'S-1', '2019-12-17', 'کانکور', 2, 14, 'ghazni', 'kabul', 744123456, 'mahsanedam@gmail.com', 0x6173736574732f696d672f73747564656e74732f4453434e303031342e6a70673036343733392e6a706567),
(2, 'Beheshta', 'Abdul Rahman', 'S-2', '2019-12-17', 'کانکور', 2, 14, 'Takhar', 'Kabul', 700876543, 'b.rahmani@gmail.com', 0x6173736574732f696d672f73747564656e74732f494d475f32303139303332375f3131323531342e6a70673036353530382e6a706567),
(3, 'Maryam', 'Mohammad Reza', 'S-3', '2019-12-17', 'کانکور', 2, 14, 'Behsod', 'Kabul', 765429876, 'maryam.yaganeh@gmail.com', 0x6173736574732f696d672f73747564656e74732f494d475f32303139303332365f3039303832342e6a70673037303030382e6a706567),
(4, 'Ghazal', 'Sayeed Arif', 'S-4', '2019-12-17', 'کانکور', 2, 14, 'Kabul', 'Kabul', 788653876, 'ghazal.nekhat@gmail.com', 0x6173736574732f696d672f73747564656e74732f6768617a616c2e6a70673037303534342e6a706567),
(5, 'Zulal', 'Ghazi Bad', 'S-5', '2019-12-17', 'کانکور', 2, 14, 'Khost', 'Kabul', 786548287, 'zulal.tanai@gmail.com', 0x6173736574732f696d672f73747564656e74732f7a756c616c2e6a70673037303931312e6a706567),
(6, 'Jawad', 'Suhrab Ali', 'S-6', '2019-12-17', 'کانکور', 2, 14, 'Behsod', 'kabul', 76543100, 'jawad.fallah@gmail.com', 0x6173736574732f696d672f73747564656e74732f6a617761642e6a70673037313331352e6a706567);

-- --------------------------------------------------------

--
-- Table structure for table `time`
--

CREATE TABLE `time` (
  `id` int(11) NOT NULL,
  `day` varchar(255) COLLATE utf8_bin NOT NULL,
  `time` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `time`
--

INSERT INTO `time` (`id`, `day`, `time`) VALUES
(2, 'شنبه', '8:30-3:30'),
(3, 'یکشنبه', '8:30-3:30'),
(4, 'دوشنبه', '8:30-3:30'),
(5, 'سه شنبه', '8:30-3:30'),
(6, 'چهارشنبه', '8:30-3:30'),
(7, 'پنجشنبه', '8:30-12:00');

-- --------------------------------------------------------

--
-- Table structure for table `translator`
--

CREATE TABLE `translator` (
  `translator_id` int(50) NOT NULL,
  `translator_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `translator`
--

INSERT INTO `translator` (`translator_id`, `translator_name`, `create_at`, `update_at`) VALUES
(10, '-', '2019-12-13', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(250) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `email` varchar(250) COLLATE utf8_bin NOT NULL,
  `phone` int(15) NOT NULL,
  `gender` varchar(20) COLLATE utf8_bin NOT NULL,
  `username` varchar(250) COLLATE utf8_bin NOT NULL,
  `password` varchar(250) COLLATE utf8_bin NOT NULL,
  `position` varchar(100) COLLATE utf8_bin NOT NULL,
  `privilege` varchar(255) COLLATE utf8_bin NOT NULL,
  `image` text COLLATE utf8_bin NOT NULL,
  `create_at` date NOT NULL,
  `update_at` date NOT NULL,
  `aprove` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `last_name`, `email`, `phone`, `gender`, `username`, `password`, `position`, `privilege`, `image`, `create_at`, `update_at`, `aprove`) VALUES
(21, 'user', 'user', 'user@gmail.com', 789761354, 'useradmin', 'useradmin', '99e7a456385b481f25e1451868a3a584d4200d17', 'user', 'admin', 'assets/img/users/female.jpg081627.jpeg', '0000-00-00', '0000-00-00', 0),
(22, 'Sodaba', 'Rahimi', 'sodabarahimiit@gmail.com', 799169186, 'f', 'sodaba', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Boss', 'admin', 'assets/img/users/DSCN2941.jpg084456.jpeg', '0000-00-00', '0000-00-00', 1),
(23, 'Shafiq', 'Rasa', 's.rasa@gmail.com', 786543876, 'm', 'shafiq', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'Administrator', 'guest', 'assets/img/users/IMG_20190902_090727.jpg083955.jpeg', '0000-00-00', '0000-00-00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `writing_panel`
--

CREATE TABLE `writing_panel` (
  `wp_id` int(50) NOT NULL,
  `wp_name` varchar(250) COLLATE utf8_bin NOT NULL,
  `mag_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `writing_panel`
--

INSERT INTO `writing_panel` (`wp_id`, `wp_name`, `mag_no`) VALUES
(1, 'sodaba', 1),
(2, 'shafiq', 2),
(3, 'ahmad', 2),
(4, 'mahsa', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `book_author_id` (`publisher_id`,`procurement_id`,`category_id`),
  ADD KEY `publisher_id` (`publisher_id`),
  ADD KEY `procurement_id` (`procurement_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`book_author_id`),
  ADD KEY `book_id` (`book_id`,`author_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `book_id_2` (`book_id`),
  ADD KEY `author_id_2` (`author_id`);

--
-- Indexes for table `book_translator`
--
ALTER TABLE `book_translator`
  ADD PRIMARY KEY (`book_translator_id`),
  ADD KEY `book_id` (`book_id`,`translator_id`),
  ADD KEY `book_id_2` (`book_id`),
  ADD KEY `translator_id` (`translator_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrow_id`),
  ADD KEY `book_id` (`book_id`,`user_name`),
  ADD KEY `book_id_2` (`book_id`),
  ADD KEY `user-id` (`user_name`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `faculty_id_2` (`faculty_id`);

--
-- Indexes for table `external_magazine`
--
ALTER TABLE `external_magazine`
  ADD PRIMARY KEY (`em_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `jarema`
--
ALTER TABLE `jarema`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other_member`
--
ALTER TABLE `other_member`
  ADD PRIMARY KEY (`om_id`);

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`panel_id`),
  ADD KEY `wp_id` (`wp_id`,`mag_id`),
  ADD KEY `wp_id_2` (`wp_id`),
  ADD KEY `mag_id` (`mag_id`);

--
-- Indexes for table `procurement`
--
ALTER TABLE `procurement`
  ADD PRIMARY KEY (`procurement_id`);

--
-- Indexes for table `publisher`
--
ALTER TABLE `publisher`
  ADD PRIMARY KEY (`publisher_id`);

--
-- Indexes for table `scientific_magazine`
--
ALTER TABLE `scientific_magazine`
  ADD PRIMARY KEY (`mag_id`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `faculty_id_2` (`faculty_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `faculty_id` (`faculty_id`,`department_id`),
  ADD KEY `faculty_id_2` (`faculty_id`),
  ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `time`
--
ALTER TABLE `time`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translator`
--
ALTER TABLE `translator`
  ADD PRIMARY KEY (`translator_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `writing_panel`
--
ALTER TABLE `writing_panel`
  ADD PRIMARY KEY (`wp_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `book_author`
--
ALTER TABLE `book_author`
  MODIFY `book_author_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `book_translator`
--
ALTER TABLE `book_translator`
  MODIFY `book_translator_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrow_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `external_magazine`
--
ALTER TABLE `external_magazine`
  MODIFY `em_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `jarema`
--
ALTER TABLE `jarema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `other_member`
--
ALTER TABLE `other_member`
  MODIFY `om_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `panel`
--
ALTER TABLE `panel`
  MODIFY `panel_id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `procurement`
--
ALTER TABLE `procurement`
  MODIFY `procurement_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `publisher`
--
ALTER TABLE `publisher`
  MODIFY `publisher_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `scientific_magazine`
--
ALTER TABLE `scientific_magazine`
  MODIFY `mag_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `time`
--
ALTER TABLE `time`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `translator`
--
ALTER TABLE `translator`
  MODIFY `translator_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `writing_panel`
--
ALTER TABLE `writing_panel`
  MODIFY `wp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `book`
--
ALTER TABLE `book`
  ADD CONSTRAINT `book_ibfk_10` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_8` FOREIGN KEY (`publisher_id`) REFERENCES `publisher` (`publisher_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `book_ibfk_9` FOREIGN KEY (`procurement_id`) REFERENCES `procurement` (`procurement_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `book_translator`
--
ALTER TABLE `book_translator`
  ADD CONSTRAINT `book_translator_ibfk_2` FOREIGN KEY (`translator_id`) REFERENCES `translator` (`translator_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrow`
--
ALTER TABLE `borrow`
  ADD CONSTRAINT `borrow_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `department_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `panel`
--
ALTER TABLE `panel`
  ADD CONSTRAINT `panel_ibfk_1` FOREIGN KEY (`wp_id`) REFERENCES `writing_panel` (`wp_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `panel_ibfk_2` FOREIGN KEY (`mag_id`) REFERENCES `scientific_magazine` (`mag_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `scientific_magazine`
--
ALTER TABLE `scientific_magazine`
  ADD CONSTRAINT `scientific_magazine_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `student_ibfk_2` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
