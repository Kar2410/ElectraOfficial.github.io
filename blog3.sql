-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 02:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog3`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `user_id`, `topic_id`, `title`, `body`, `published`, `created_at`) VALUES
(18, 2, 7, 'hii  ', '&lt;p&gt;A &lt;strong&gt;blog&lt;/strong&gt; (a &lt;a href=&quot;https://en.wikipedia.org/wiki/Clipping_(morphology)&quot;&gt;truncation&lt;/a&gt; of &quot;&lt;strong&gt;weblog&lt;/strong&gt;&quot;)&lt;a href=&quot;https://en.wikipedia.org/wiki/Blog#cite_note-1&quot;&gt;[1]&lt;/a&gt; is a discussion or informational &lt;a href=&quot;https://en.wikipedia.org/wiki/Website&quot;&gt;website&lt;/a&gt; published on the &lt;a href=&quot;https://en.wikipedia.org/wiki/World_Wide_Web&quot;&gt;World Wide Web&lt;/a&gt; consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in &lt;a href=&quot;https://en.wikipedia.org/wiki/Reverse_chronology&quot;&gt;reverse chronological order&lt;/a&gt;, so that the most recent post appears first, at the top of the &lt;a href=&quot;https://en.wikipedia.org/wiki/Web_page&quot;&gt;web page&lt;/a&gt;. Until 2009, blogs were usually the work of a single individual,[&lt;a href=&quot;https://en.wikipedia.org/wiki/Wikipedia:Citation_needed&quot;&gt;&lt;i&gt;citation needed&lt;/i&gt;&lt;/a&gt;] occasionally of a small group, and often covered a single subject or topic. In the 2010s, &quot;multi-author blogs&quot; (MABs) emerged, featuring the writing of multiple authors and sometimes professionally &lt;a href=&quot;https://en.wikipedia.org/wiki/Editing&quot;&gt;edited&lt;/a&gt;. MABs from &lt;a href=&quot;https://en.wikipedia.org/wiki/Newspaper&quot;&gt;newspapers&lt;/a&gt;, other &lt;a href=&quot;https://en.wikipedia.org/wiki/News_media&quot;&gt;media outlets&lt;/a&gt;, universities, &lt;a href=&quot;https://en.wikipedia.org/wiki/Think_tank&quot;&gt;think tanks&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Advocacy_group&quot;&gt;advocacy groups&lt;/a&gt;, and similar institutions account for an increasing quantity of blog &lt;a href=&quot;https://en.wikipedia.org/wiki/Web_traffic&quot;&gt;traffic&lt;/a&gt;. The rise of &lt;a href=&quot;https://en.wikipedia.org/wiki/Twitter&quot;&gt;Twitter&lt;/a&gt; and other &quot;&lt;a href=&quot;https://en.wikipedia.org/wiki/Microblogging&quot;&gt;microblogging&lt;/a&gt;&quot; systems helps integrate MABs and single-author blogs into the news media. &lt;i&gt;Blog&lt;/i&gt; can also be used as a verb, meaning &lt;i&gt;to maintain or add content to a blog&lt;/i&gt;.&lt;/p&gt;', 1, '2021-05-01 12:49:30'),
(28, 26, NULL, 'NEW AN', '&lt;p&gt;NA&lt;/p&gt;', 1, '2021-05-20 16:15:13'),
(29, 26, NULL, 'hiiiiiiiiiiiiiiiiiiiiiii', '&lt;p&gt;jiooooooooooooooooooo&lt;/p&gt;', 1, '2021-05-20 16:17:15'),
(30, 26, NULL, 'aaaaaaaaaaaaa', '&lt;p&gt;aaaaaaaaaaaaaa&lt;/p&gt;', 1, '2021-05-20 17:39:35'),
(31, 26, NULL, 'new anouncement', '&lt;p&gt;new anaouncment&lt;/p&gt;', 1, '2021-05-20 17:43:13'),
(32, 26, NULL, 'new anouncement  34', '&lt;p&gt;new anouncement &amp;nbsp;34&lt;/p&gt;', 1, '2021-05-20 17:54:48'),
(33, 26, 3, 'announcement', '&lt;p&gt;mmmmmmmmmmm&lt;/p&gt;', 1, '2021-05-20 18:13:57'),
(34, 26, 3, 'nlwwwwwwwwwwwwww', '&lt;p&gt;ffffffffffffffffffff&lt;/p&gt;', 1, '2021-05-20 18:31:53'),
(36, 26, NULL, 'announcement 4.0', '&lt;p&gt;i dont know&lt;/p&gt;', 1, '2021-05-20 20:09:30');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(18, 2, 7, 'hii  ', '1619853576_kartiks_official_small.jpg', '&lt;p&gt;A &lt;strong&gt;blog&lt;/strong&gt; (a &lt;a href=&quot;https://en.wikipedia.org/wiki/Clipping_(morphology)&quot;&gt;truncation&lt;/a&gt; of &quot;&lt;strong&gt;weblog&lt;/strong&gt;&quot;)&lt;a href=&quot;https://en.wikipedia.org/wiki/Blog#cite_note-1&quot;&gt;[1]&lt;/a&gt; is a discussion or informational &lt;a href=&quot;https://en.wikipedia.org/wiki/Website&quot;&gt;website&lt;/a&gt; published on the &lt;a href=&quot;https://en.wikipedia.org/wiki/World_Wide_Web&quot;&gt;World Wide Web&lt;/a&gt; consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in &lt;a href=&quot;https://en.wikipedia.org/wiki/Reverse_chronology&quot;&gt;reverse chronological order&lt;/a&gt;, so that the most recent post appears first, at the top of the &lt;a href=&quot;https://en.wikipedia.org/wiki/Web_page&quot;&gt;web page&lt;/a&gt;. Until 2009, blogs were usually the work of a single individual,[&lt;a href=&quot;https://en.wikipedia.org/wiki/Wikipedia:Citation_needed&quot;&gt;&lt;i&gt;citation needed&lt;/i&gt;&lt;/a&gt;] occasionally of a small group, and often covered a single subject or topic. In the 2010s, &quot;multi-author blogs&quot; (MABs) emerged, featuring the writing of multiple authors and sometimes professionally &lt;a href=&quot;https://en.wikipedia.org/wiki/Editing&quot;&gt;edited&lt;/a&gt;. MABs from &lt;a href=&quot;https://en.wikipedia.org/wiki/Newspaper&quot;&gt;newspapers&lt;/a&gt;, other &lt;a href=&quot;https://en.wikipedia.org/wiki/News_media&quot;&gt;media outlets&lt;/a&gt;, universities, &lt;a href=&quot;https://en.wikipedia.org/wiki/Think_tank&quot;&gt;think tanks&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Advocacy_group&quot;&gt;advocacy groups&lt;/a&gt;, and similar institutions account for an increasing quantity of blog &lt;a href=&quot;https://en.wikipedia.org/wiki/Web_traffic&quot;&gt;traffic&lt;/a&gt;. The rise of &lt;a href=&quot;https://en.wikipedia.org/wiki/Twitter&quot;&gt;Twitter&lt;/a&gt; and other &quot;&lt;a href=&quot;https://en.wikipedia.org/wiki/Microblogging&quot;&gt;microblogging&lt;/a&gt;&quot; systems helps integrate MABs and single-author blogs into the news media. &lt;i&gt;Blog&lt;/i&gt; can also be used as a verb, meaning &lt;i&gt;to maintain or add content to a blog&lt;/i&gt;.&lt;/p&gt;', 1, '2021-05-01 12:49:30'),
(28, 26, 3, 'test', '1636893687_Capture1.PNG', '&lt;p&gt;ajbscjkdabfksjdbc &amp;nbsp;diuadhgb&amp;nbsp;&lt;/p&gt;', 1, '2021-11-14 18:11:27'),
(29, 26, 5, 'test 2', '1636893709_b1111.jpg', '&lt;p&gt;test 2&lt;/p&gt;', 1, '2021-11-14 18:11:49'),
(30, 26, 6, 'test 3', '1636893733_prince 2.jpg', '&lt;p&gt;dfdjkvndsjv&lt;/p&gt;', 1, '2021-11-14 18:12:13'),
(32, 26, 6, 'testing12', '1637129258_prince.jpg', '&lt;p&gt;testing12&lt;/p&gt;', 1, '2021-11-17 11:36:02'),
(33, 26, 6, 'test again', '1637583678_black_panther_2018_4k.jpg', '&lt;p&gt;dhfjshdfjk&lt;/p&gt;', 1, '2021-11-22 17:51:18'),
(34, 26, 3, 'poster test', '1637855230_WhatsApp Image 2021-11-25 at 9.10.54 PM (1).jpeg', '&lt;p&gt;poster test&lt;/p&gt;', 1, '2021-11-25 21:17:10');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(3, 'Quotes', ''),
(5, 'Carrier', ''),
(6, ' Motivation', ''),
(7, 'Internships', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(23, 1, 'Kartik', 'kartikverma378@gmail.com', '$2y$10$Q6be5Fe9O/Ay/num5mZcGOFJKGKo9ODG.xEIEfjoz6KUCKeMrxr46', '2021-05-01 07:10:32'),
(24, 0, 'user2', 'uheetimepass@gmail.com', '$2y$10$1mubz7iBaBr/NJYUpy0eAOKwkN0ErbpalQotEhi8yAhdJy9dQWkTm', '2021-05-01 07:46:43'),
(25, 0, 'user3', 'unofficialcreator07@gmail.com', '$2y$10$ArM3mhV8epsr2pvHWYiLpOw0Ap3n53Uhp1TuwBG/ituqfBHCPhw9y', '2021-05-01 09:43:58'),
(26, 1, 'user4', 'armen.jancarlos@wifioak.com', '$2y$10$QZQNmo6S/CZ/DeQhB9RWjei.iJnKaUgl/1SSoybFYrG5AoWuD3qKq', '2021-05-01 09:49:38'),
(27, 0, 'randomuser', 'adasd@gmail.com', '$2y$10$OLPEapVv9E.CP/SmGbxvpuBLg1VRrke62TpbCBxc0PXE.aYRTDjdy', '2021-05-15 06:48:01'),
(28, 0, 'random', 'asd@gmail.com', '$2y$10$YBapfPt2rx1371Z9WuBCBe5K1SZJofoedmMllugU1i4PxgiAI9w2m', '2021-05-15 06:48:49'),
(29, 0, 'user7', 'user7@gmail.com', '$2y$10$fZoUGgXeeRRRps7hwoPzGuQ865Uy5y9JwzE5RyeHr2E8zZcBBtYCq', '2021-05-27 07:25:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcements`
--
ALTER TABLE `announcements`
  ADD CONSTRAINT `announcements_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
