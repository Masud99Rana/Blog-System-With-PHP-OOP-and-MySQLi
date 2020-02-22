-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2018 at 07:31 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'JAVA'),
(2, 'PHP'),
(3, 'HTML'),
(4, 'CSS'),
(9, 'Health');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `status` int(50) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `body`, `status`, `date`) VALUES
(2, 'man', 'wome', 'mmmmmm@gmail.com', '09279747d7e77d94b0b6f51cfefe61ec', 1, '2018-09-28 18:31:43'),
(3, 'Masud', 'Rana', 'masudrana917775@gmail.com', 'Hey this is masud rana', 1, '2018-09-28 18:31:43'),
(4, 'Md. Masud', 'Rana', 'masudrana917775@gmail.com', 'Hi, This is masud Rana.\r\nHow are you.&gt;?\r\nDj\r\n\r\nHope to hear from you soon.\r\n\r\nThanks\r\nMasud', 1, '2018-09-28 18:31:43'),
(5, 'maira', 'mairr amare', 'maira@gmail.com', 'hey keoo amare mairaa halaaaaaaaaaaaaaaa', 1, '2018-09-29 02:47:01'),
(7, 'sdf', 'Rana', 'Ananta@gmail.com', 'dsfffffffffffffffffff', 0, '2018-09-29 03:05:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `text` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `text`) VALUES
(1, 'Copyright Training Masud Rana');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(1, 'About Us', '<p>ProfileProfileProfileProfileProfileProfileProfile prii</p>'),
(2, 'Privacy policy', '<p>&nbsp;Privacy policy Privacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policyPrivacy policy&nbsp;Privacy policy Privacy policyPrivacy policy'),
(6, 'my page_PP', '<p>my page my page&nbsp;my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my page&nbsp; my page my<');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(2, 1, 'java', '<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud ss Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>', 'upload/post1.jpg', 'masud', 'java Prog', '2018-09-21 05:22:27', 2),
(3, 4, 'css', '<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>', 'upload/post1.jpg', 'masud', 'html', '2018-09-21 05:25:48', 2),
(4, 3, 'hey html', '<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>', 'upload/post1.jpg', '2', 'css', '2018-09-21 05:25:48', 2),
(5, 2, 'jljljxdffmmmmmmmmmmmmmm', '<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>\r\n<p>Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana Masud Rana</p>', 'upload/post1.jpg', '2', 'java', '2018-09-21 05:27:21', 2),
(6, 3, 'dsfsdfda', '<p>sdfffffffffffff</p>', 'upload/9f415695b4.jpg', 'aaaaaaa', 'aa', '2018-09-25 12:56:23', 0),
(7, 3, 'dsfsdfda', '<p>sdfffffffffffff</p>', 'upload/1f4449ab1a.jpg', '2', 'aa', '2018-09-25 12:58:37', 2),
(8, 0, 'dgfdgdf', '<p>dfffffffffffffffff</p>', 'upload/1a82fa8fec.jpg', 'fdddddddddddddddd', 'dffffffffff', '2018-09-25 12:58:51', 21),
(9, 10, 'dfsgfdgfdgfd hhhhhhhhhh', '<p>mmmmmmdfgggggggggggggggg</p>', 'upload/85cf7f510b.jpg', 'gffggggg', 'lplgggggg', '2018-09-25 12:59:18', 21),
(10, 1, 'dsssssssss', '<p>ddddddddddddddd</p>', 'upload/dd5f449239.jpg', 'aaaaa', 'php, html 5, maira, aro', '2018-09-29 03:46:50', 22),
(11, 1, 'dsssssssss', '<p>ddddddddddddddd</p>', 'upload/390ca0e8c6.jpg', 'aaaaa', 'php, html 5, maira, aro', '2018-09-29 03:47:40', 22),
(13, 1, 'mr', '<p>mr</p>', 'upload/6e42a3b2eb.jpg', 'masud', 'mr', '2018-10-01 03:10:50', 2),
(15, 1, 'aaaaaaaaaaaaa', '<p>aaaaaaaaaaaaaa</p>', 'upload/2f765601c9.jpg', 'masud', 'aaaaaaaaaaaaaaaaaa', '2018-10-01 03:24:07', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`) VALUES
(7, '2nd slider', 'upload/slider/2e674f2289.jpg'),
(8, '3rd slider', 'upload/slider/800de7ec83.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `twitter` varchar(32) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `facebook`, `twitter`, `linkedin`, `googleplus`) VALUES
(1, 'http://facebook.com/masudrana99mr', 'http://twitter.com/masudrana99mr', 'http://linkedin.com/masudrana99mr', 'http://google.com/masudrana99mr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme`
--

CREATE TABLE `tbl_theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_theme`
--

INSERT INTO `tbl_theme` (`id`, `theme`) VALUES
(1, 'green');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(60) NOT NULL,
  `details` text NOT NULL,
  `role` int(255) NOT NULL,
  `name` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `username`, `password`, `email`, `details`, `role`, `name`) VALUES
(2, 'masud', '266742ad7c319c03dac609047486ddcc', 'vbnbv@gmail.com', '', 1, 'masud'),
(21, 'asd', '59cb7a39428f18a0c4ebcf50080f416b', 'asd@gmail.com', '<p>\'Hey this is ASD</p>', 3, 'AASSDD'),
(24, 'admin', 'bf6a75a3dacf6ab18117a9b77f4915a1', 'admin@gmail.com', '', 1, ''),
(26, 'author', '02bd92faa38aaa6cc0ea75e59937a1ef', 'author@gmail.com', '', 2, ''),
(27, 'editor', '5aee9dbd2a188839105073571bee1b1f', 'editor@gmail.com', '', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `image`) VALUES
(1, 'Blog Practise', 'My Blog Practise', 'upload/logo.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
