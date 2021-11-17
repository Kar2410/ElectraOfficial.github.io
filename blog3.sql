-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2021 at 05:44 PM
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
(28, 26, 4, 'NEW AN', '&lt;p&gt;NA&lt;/p&gt;', 1, '2021-05-20 16:15:13'),
(29, 26, 2, 'hiiiiiiiiiiiiiiiiiiiiiii', '&lt;p&gt;jiooooooooooooooooooo&lt;/p&gt;', 1, '2021-05-20 16:17:15'),
(30, 26, 2, 'aaaaaaaaaaaaa', '&lt;p&gt;aaaaaaaaaaaaaa&lt;/p&gt;', 1, '2021-05-20 17:39:35'),
(31, 26, 4, 'new anouncement', '&lt;p&gt;new anaouncment&lt;/p&gt;', 1, '2021-05-20 17:43:13'),
(32, 26, 2, 'new anouncement  34', '&lt;p&gt;new anouncement &amp;nbsp;34&lt;/p&gt;', 1, '2021-05-20 17:54:48'),
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
(19, 26, 2, 'POST 2', '1619862732_1 (7).png', '&lt;p&gt;I know this is a personal development blog and it&rsquo;s intended to always be that, but I want to write something a little different today. This is a post about literally anything and everything that comes into my mind this morning.&lt;/p&gt;&lt;p&gt;I fancied practicing my typing skills again and so as I transition into my new lifestyle of being self employed (more on this in a bit) I really need to get used to typing fast! So there&rsquo;s a very good chance no one is going to read this as it&rsquo;s not targeted around any keywords.&lt;/p&gt;&lt;p&gt;I&rsquo;m (When I first typed this sentence, there was a spelling mistake, and for about 20 minutes I didn&rsquo;t notice! I&rsquo;m an expert I promise!) an SEO expert meaning I can get posts to rank well on the search engines.&lt;/p&gt;', 1, '2021-05-01 15:22:12'),
(20, 26, 3, 'The Most Random Blog Post Of 2020 Ever!', '1619862768_1 (3).png', '&lt;p&gt;My boss was very understanding of the whole thing and we now have a great relationship and continue to be friends and work together. Good stuff! But switching from full time work to full time working for yourself can be confusing.&lt;/p&gt;&lt;p&gt;With no set schedule (yet) it&rsquo;s a challenge to know what to focus on next! Now to avoid this blog post turning into a giant wall of text and not many images (I&rsquo;m not actually sure if I&rsquo;ll put images in this at this point because it&rsquo;s just not a focused post!) I&rsquo;ll include little headings as I usually do so that you&rsquo;re not going to get bored and click off this post!&lt;/p&gt;', 1, '2021-05-01 15:22:48'),
(21, 26, 4, 'The one thing (A great book)', '1619862800_updated 29-38_Page_7.png', '&lt;p&gt;The one thing is a little yellow book which explains why it&rsquo;s very important to focus only on ONE thing at a time. Literally just one thing, hence the title. &lt;i&gt;Oh, also check out &lt;/i&gt;&lt;a href=&quot;https://www.transcendyourlimits.com/books-about-making-money/&quot;&gt;&lt;i&gt;my summary books about money&lt;/i&gt;&lt;/a&gt;&lt;i&gt;, it&rsquo;s good).&lt;/i&gt;&lt;/p&gt;&lt;p&gt;In fact, the author is so sure of this that the entire boo is literally just about one thing as well; getting you (the reader) to only think about one thing.&lt;/p&gt;', 1, '2021-05-01 15:23:20'),
(22, 26, 5, 'You’ve got to streamline.', '1619862839_2 (4).png', '&lt;p&gt;I owned 35 websites at one point, and I was trying to make ALL of them work as businesses. It was too much! Even in my full time agency job I was trying to balance about 5 other projects on the side on the weekends and in the evenings!&lt;/p&gt;&lt;p&gt;Attention and mental energy is actually a resource and it DOES run out! It&rsquo;s easy to think that you can just focus on things all day long but you can&rsquo;t. Your brain is like a muscle, and because I can&rsquo;t really remember where I found this out, you&rsquo;re going to have to take my word for it, but there have been studies done proving this!&lt;/p&gt;&lt;p&gt;You can prove it to yourself, actually.&lt;/p&gt;&lt;p&gt;Try and focus on things all day long 7 days a week, with no breaks. You&rsquo;ll find that at the very best, you&rsquo;re just not as effective towards the end of the days, and towards the end of the week.&lt;/p&gt;', 1, '2021-05-01 15:23:59'),
(25, 26, 6, 'GHV', '1621437183_IMG_0561.jpg', '&lt;p&gt;HVNB B&lt;/p&gt;', 1, '2021-05-19 20:43:03'),
(26, 26, 3, 'sdsfgs', '1621494559_Capture1.PNG', '&lt;p&gt;sdfsdf&lt;/p&gt;', 1, '2021-05-20 12:39:19'),
(27, 26, 5, 'kartik', '1621518468_—Pngtree—robotic material is commercially available_4095415.png', '&lt;p&gt;HII NEW POST&lt;/p&gt;', 1, '2021-05-20 15:44:40');

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
(2, 'Life', '<p>test change</p>'),
(3, 'Quotes', ''),
(4, 'Announcements', ''),
(5, 'Carrier', ''),
(6, ' Motivation', ''),
(7, 'Internships', ''),
(8, 'Test', '<p>test</p>'),
(9, 'kartik_v17', '<p>sadas</p>');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

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









-- Event*******************************************************************************************




CREATE TABLE `audience` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `event_id` int(30) NOT NULL,
  `payment_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0= pending, 1 =Paid',
  `attendance_status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '1= present',
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0 = for verification,  1 = confirmed,2= declined',
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audience`
--

INSERT INTO `audience` (`id`, `name`, `contact`, `email`, `address`, `event_id`, `payment_status`, `attendance_status`, `status`, `date_created`) VALUES
(2, 'Mark Jason', '+18456-5455-55', 'mjason@sample.com', 'Sample', 2, 1, 0, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(30) NOT NULL,
  `venue_id` int(30) NOT NULL,
  `event` text NOT NULL,
  `description` text NOT NULL,
  `schedule` datetime NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Public, 2-Private',
  `audience_capacity` int(30) NOT NULL,
  `payment_type` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Free,payable',
  `amount` double NOT NULL DEFAULT '0',
  `banner` text NOT NULL,
  `date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `venue_id`, `event`, `description`, `schedule`, `type`, `audience_capacity`, `payment_type`, `amount`, `banner`, `date_created`) VALUES
(1, 1, 'Sample Only', '&lt;p&gt;&lt;/p&gt;&lt;h2 style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;&lt;b style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Sample Header&lt;/b&gt;&lt;/h2&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;&lt;b style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Non diam phasellus vestibulum lorem. Vel elit scelerisque mauris pellentesque pulvinar pellentesque. Fames ac turpis egestas integer eget. Nam at lectus urna duis convallis convallis tellus. Turpis tincidunt id aliquet risus. Turpis tincidunt id aliquet risus feugiat in ante metus. Ut porttitor leo a diam sollicitudin tempor id eu nisl. Sit amet tellus cras adipiscing enim eu turpis. Ultricies mi eget mauris pharetra et ultrices neque.&lt;/b&gt;&lt;/p&gt;&lt;h3 style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;&lt;b style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Headere 3&lt;/b&gt;&lt;/h3&gt;&lt;p style=&quot;text-align: center; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Magna etiam tempor orci eu lobortis elementum nibh. Quis eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Gravida cum sociis natoque penatibus et magnis. Mi ipsum faucibus vitae aliquet nec ullamcorper sit. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit. Tincidunt id aliquet risus feugiat in ante. Elementum facilisis leo vel fringilla est ullamcorper eget. Id semper risus in hendrerit gravida rutrum. Aliquam vestibulum morbi blandit cursus risus at ultrices mi. Elementum pulvinar etiam non quam lacus suspendisse faucibus. Ultrices eros in cursus turpis massa tincidunt dui ut ornare. Pretium vulputate sapien nec sagittis. Lectus sit amet est placerat in egestas erat imperdiet sed. Auctor elit sed vulputate mi. Eget est lorem ipsum dolor sit amet consectetur. Tristique magna sit amet purus gravida quis. In arcu cursus euismod quis viverra nibh cras pulvinar mattis.&lt;/p&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Luctus accumsan tortor posuere ac ut. Fames ac turpis egestas maecenas pharetra convallis posuere morbi. Arcu felis bibendum ut tristique et egestas. Mauris in aliquam sem fringilla ut morbi. Lobortis elementum nibh tellus molestie nunc non blandit massa. Curabitur gravida arcu ac tortor dignissim convallis aenean. Libero enim sed faucibus turpis in eu mi bibendum. Neque egestas congue quisque egestas diam in arcu cursus. Diam phasellus vestibulum lorem sed risus ultricies. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Volutpat lacus laoreet non curabitur gravida arcu ac. Elementum tempus egestas sed sed risus pretium quam. Diam maecenas ultricies mi eget mauris pharetra et. Venenatis cras sed felis eget velit aliquet sagittis. Arcu dictum varius duis at consectetur lorem donec massa sapien. Ullamcorper velit sed ullamcorper morbi tincidunt ornare.&lt;/p&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Tempus iaculis urna id volutpat lacus laoreet. Auctor neque vitae tempus quam pellentesque nec nam. Eget nunc lobortis mattis aliquam faucibus purus. Amet nisl suscipit adipiscing bibendum est ultricies integer quis. Donec ac odio tempor orci dapibus ultrices in. Varius sit amet mattis vulputate. Ornare massa eget egestas purus. Pellentesque dignissim enim sit amet venenatis. Blandit massa enim nec dui nunc mattis enim ut tellus. Habitant morbi tristique senectus et netus et. Blandit volutpat maecenas volutpat blandit aliquam etiam erat velit scelerisque. Facilisis magna etiam tempor orci eu lobortis elementum nibh. Feugiat nibh sed pulvinar proin gravida hendrerit lectus a. Euismod elementum nisi quis eleifend quam. Convallis convallis tellus id interdum velit laoreet id. Pulvinar mattis nunc sed blandit libero volutpat sed cras ornare.&lt;/p&gt;&lt;p style=&quot;-webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1.5em; margin-bottom: 1.5em; line-height: 1.5; animation: 1000ms linear 0s 1 normal none running fadeInLorem;&quot;&gt;Neque gravida in fermentum et. Amet nulla facilisi morbi tempus iaculis urna id volutpat. Id diam vel quam elementum pulvinar etiam non quam lacus. Mauris commodo quis imperdiet massa. Pulvinar mattis nunc sed blandit libero volutpat. Suspendisse faucibus interdum posuere lorem. Nunc pulvinar sapien et ligula ullamcorper malesuada proin libero. Blandit cursus risus at ultrices mi tempus imperdiet nulla. Eget velit aliquet sagittis id consectetur purus. Quis lectus nulla at volutpat diam ut venenatis tellus. Nunc mattis enim ut tellus elementum.&lt;/p&gt;&lt;p&gt;&lt;/p&gt;', '2020-10-20 05:00:00', 1, 500, 2, 500, '1602647100_JSAV-multiscreen_3ddbdd40-38d9-4b64-9cf2-5d0ef356f29c.jpg', '0000-00-00 00:00:00'),
(2, 2, 'Event 2', '&lt;p&gt;Lorem ipsum dolor sit amet, viris eleifend convenire mei te, ei mea probo cotidieque? Pri gloriatur disputationi vituperatoribus ex, dolorum disputationi quo te! Cibo reque postea te his, mea quis oportere ei. Qui ut vide idque minimum, aeterno laoreet consetetur mei in. Mel stet audiam omittantur cu!&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Dictas meliore eos ea, iusto libris volumus mel ut. Sea id exerci ignota expetenda, cum ei nostro eirmod apeirian. Est luptatum liberavisse cu, cu quo stet veniam. Mei causae honestatis ad, esse fugit laudem qui ex, eu duo choro quaestio. Scripta appetere cu vim, agam nulla percipit duo ei.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Per in sanctus instructior. No prompta instructior duo, per no mucius deterruisset, sumo munere delenit vix ut? Mea ut idque lorem assum, eum et idque dissentias. Choro tempor per ex, at duo fuisset maiestatis! Has in voluptaria vituperata, at erat vituperata est, autem prompta appetere in per!&lt;/p&gt;', '2020-10-23 18:00:00', 1, 500, 1, 0, '1602652920_pngtree-purple-hd-business-banner-image_5493.jpg', '0000-00-00 00:00:00'),
(3, 2, 'Sample Private', 'Wedding', '2020-10-28 17:00:00', 2, 300, 1, 0, '1602660960_images4.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `system_settings`
--

CREATE TABLE `system_settings` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `cover_img` text NOT NULL,
  `about_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `system_settings`
--

INSERT INTO `system_settings` (`id`, `name`, `email`, `contact`, `cover_img`, `about_content`) VALUES
(1, 'Event Management System', 'sample@sample.com', '+6948 8542 623', '1616488620_green-background.jpg', '&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;span style=&quot;color: rgb(0, 0, 0); font-family: &amp;quot;Open Sans&amp;quot;, Arial, sans-serif; font-weight: 400; text-align: justify;&quot;&gt;&amp;nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&rsquo;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.&lt;/span&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center; background: transparent; position: relative;&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `Eventusers` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `type` tinyint(1) NOT NULL DEFAULT '2' COMMENT '1=Admin,2=Staff'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `Eventusers` (`id`, `name`, `username`, `password`, `type`) VALUES
(1, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(30) NOT NULL,
  `venue` text NOT NULL,
  `address` text NOT NULL,
  `description` text NOT NULL,
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `venue`, `address`, `description`, `rate`) VALUES
(1, 'Venue 1', 'Sample Address', 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 300),
(2, 'Venue 2', 'Sample', 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 250),
(3, 'Venue 3', 'Sample Address', 'Lorem ipsum dolor sit amet, id has nostro vivendo, id per alii volutpat inciderint? Graece ornatus gubergren te quo, qui at oblique accusamus, id pro eros etiam conceptam! Ullum clita.', 280),
(4, 'Venue 4', 'Sample only', 'Lorem ipsum dolor sit amet, id has nostro vivendo, id per alii volutpat inciderint? Graece ornatus gubergren te quo, qui at oblique accusamus, id pro eros etiam conceptam! Ullum clita.', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `venue_booking`
--

CREATE TABLE `venue_booking` (
  `id` int(30) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `venue_id` int(30) NOT NULL,
  `duration` varchar(100) NOT NULL,
  `datetime` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0-for verification,1=confirmed,2=canceled'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `venue_booking`
--

INSERT INTO `venue_booking` (`id`, `name`, `address`, `email`, `contact`, `venue_id`, `duration`, `datetime`, `status`) VALUES
(3, 'Adam Vayne', 'Kabankalan', 'adam@yahoo.com', '09099828289', 3, '1 night', '2021-03-29 16:56:00', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audience`
--
ALTER TABLE `audience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `system_settings`
--
ALTER TABLE `system_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `Eventusers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue_booking`
--
ALTER TABLE `venue_booking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audience`
--
ALTER TABLE `audience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `system_settings`
--
ALTER TABLE `system_settings`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `Eventusers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `venue_booking`
--
ALTER TABLE `venue_booking`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

