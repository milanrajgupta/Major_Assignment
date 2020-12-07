-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 06:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `sno` int(50) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `mes` text NOT NULL,
  `date` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`sno`, `name`, `email`, `phone_num`, `mes`, `date`) VALUES
(1, 'Milan Raj Gupta', 'milanraj96@gmail.com', '9709253600', 'My first Post', '2020-07-07 10:49:10'),
(2, 'Milan', 'shubhamsamratgupta@gmail.com', '9998765432', 'Jay Mahadev', '2020-07-07 13:19:54'),
(3, 'Milan kumar', 'milanspr97@gmail.com', '9876543210', 'Om Namah Shivay', '2020-07-07 13:24:38'),
(4, 'Villain', 'villain@gmail.com', '9876543210', 'Finally I have send data in database.', '2020-07-08 08:15:40'),
(5, 'Villain', 'villain@gmail.com', '9876543210', 'Finally I have send data in database.', '2020-07-08 08:31:01'),
(6, 'Milan', 'villain@gmail.com', '9876543210', 'error', '2020-07-08 09:25:39'),
(7, 'Milan kumar', 'villain@gmail.com', '9998765432', 'cdcc,cpd', '2020-07-08 09:57:01'),
(8, 'Milan kumar', 'villain@gmail.com', '9998765432', 'cdcc,cpd', '2020-07-08 10:12:59'),
(9, 'Milan Raj Gupta', 'mrguptaruff@gmail.com', '9876543210', 'sfhfwes csdihwedhuk87en dhdhd mmsdoiddmouqdd jddwqo', '2020-07-08 10:16:01'),
(10, 'Milan Raj Gupta', 'mrguptaruff@gmail.com', '9876543210', 'sfhfwes csdihwedhuk87en dhdhd mmsdoiddmouqdd jddwqo', '2020-07-08 10:17:32'),
(11, 'Villain', 'villain@gmail.com', '9876543210', 'Finally Successful', '2020-07-08 10:22:01'),
(12, 'Milan kumar', 'milanspr97@gmail.com', '9876543210', 'xcdfsg', '2020-07-29 09:06:35'),
(13, 'Milan kumar', 'milanspr97@gmail.com', '9876543210', 'xcdfsg', '2020-07-29 09:13:44'),
(14, 'Milan Kumar', 'milanraj96@gmail.com', '9998765432', 'klhjgkfj', '2020-07-29 09:17:03'),
(15, 'qqqqqqqqqqqqqqqqqqqqq', 'ddddddddddd', 'xxxxxxxxxxx', 'xxxxxxxxxxxx', '2020-12-07 13:11:17'),
(18, '', '', '', '', '2020-12-07 22:33:06'),
(19, '', '', '', '', '2020-12-07 22:33:08'),
(20, '', '', '', '', '2020-12-07 22:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `sno` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `mes` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`sno`, `name`, `email`, `mes`, `date`) VALUES
(1, 'AMAN KUMAR ANSHU', 'milanraj96@gmail.com', 'This is good Blog.', '0000-00-00 00:00:00'),
(2, '', '', '', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `sno` int(11) NOT NULL,
  `title` text NOT NULL,
  `tagline` text NOT NULL,
  `slug` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(12) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`sno`, `title`, `tagline`, `slug`, `content`, `author`, `date`) VALUES
(15, 'How to Get Mark Cuban’s Money', ' Mark Cuban’s Money', ' Mark Cuban’s Money', 'What does a good idea look like to a man who has heard every type of pitch imaginable? For a glimpse into what piques Mark Cuban’s interest, these are some of his most noteworthy ‘Shark Tank’ investments.', 'Jonny Auping', '2020-12-07 10:32:45'),
(16, 'What Is Motivation?', 'Motivation', 'Motivation', 'Motivation is your desire to do something with your personal life, at work, in school, in sports, or in any hobbies. Having the motivation to do something can help you achieve your big goals and dreams, whatever they may be.\r\n\r\nKnowing how to motivate yourself can help you accomplish anything you set your mind to, so let’s get to that next.', 'MILAN KUMAR', '2020-12-07 10:48:36'),
(17, 'Motivation', 'Motivation', 'Motivation', 'If you think of something difficult, that means you have not understood it well.', 'MILAN KUMAR', '2020-12-07 10:57:21'),
(18, 'Success', 'Motivation', 'Motivation-success', 'Inspiration is thinking whereas motivation is action.', 'MILAN KUMAR', '2020-12-07 10:59:54'),
(24, 'The two most important days in your life', 'Your life', 'your life', 'The two most important days in your life are the day you are born and the day you find out why.', 'Mark Twain', '2020-12-07 22:15:48'),
(25, 'Decision', 'Decision', 'Decision', 'When you make a decision, the universe conspires to make it happen. ', 'MILAN KUMAR', '2020-12-07 22:17:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `reg_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `mobile_no`, `reg_time`) VALUES
(11, 'Milan Raj Gupta', '$2y$10$FCkmbP.vq4i2.FsUqHAvcO5C.4MK/i6f7V0LKnhKVWqZwY.UNwSLC', '9709253600', '2020-10-29 15:37:07'),
(12, 'Milan', '$2y$10$jOlN0oHghlRPf6mQflyh1udvC03G.e2oIt2iKyal6sVpo6P4PQ5.S', '9709253600', '2020-10-29 15:49:00'),
(13, '19mcmc64', '$2y$10$NZ1cz/etMvXCtt0tYjQTKOlMVIfYHWFaWXQxrcxCYeYK4sFM.lAQe', '9709253600', '2020-10-29 15:54:46'),
(18, 'Milan Kumar', '$2y$10$m..8EQGzF8u1tgOj1G6vJuleQmZJntdzzP.RxRRy234LPyQb8CJL2', '9709253600', '2020-11-03 10:55:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `sno` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
