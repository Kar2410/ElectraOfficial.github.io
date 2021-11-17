-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 01:27 PM
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
-- Database: `blog2`
--

-- --------------------------------------------------------

--
/*-- Table structure for table `posts`
--
*/
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
(18, 23, 7, 'hii  i am just testing', '1619853576_kartiks_official_small.jpg', '&lt;p&gt;A &lt;strong&gt;blog&lt;/strong&gt; (a &lt;a href=&quot;https://en.wikipedia.org/wiki/Clipping_(morphology)&quot;&gt;truncation&lt;/a&gt; of &quot;&lt;strong&gt;weblog&lt;/strong&gt;&quot;)&lt;a href=&quot;https://en.wikipedia.org/wiki/Blog#cite_note-1&quot;&gt;[1]&lt;/a&gt; is a discussion or informational &lt;a href=&quot;https://en.wikipedia.org/wiki/Website&quot;&gt;website&lt;/a&gt; published on the &lt;a href=&quot;https://en.wikipedia.org/wiki/World_Wide_Web&quot;&gt;World Wide Web&lt;/a&gt; consisting of discrete, often informal diary-style text entries (posts). Posts are typically displayed in &lt;a href=&quot;https://en.wikipedia.org/wiki/Reverse_chronology&quot;&gt;reverse chronological order&lt;/a&gt;, so that the most recent post appears first, at the top of the &lt;a href=&quot;https://en.wikipedia.org/wiki/Web_page&quot;&gt;web page&lt;/a&gt;. Until 2009, blogs were usually the work of a single individual,[&lt;a href=&quot;https://en.wikipedia.org/wiki/Wikipedia:Citation_needed&quot;&gt;&lt;i&gt;citation needed&lt;/i&gt;&lt;/a&gt;] occasionally of a small group, and often covered a single subject or topic. In the 2010s, &quot;multi-author blogs&quot; (MABs) emerged, featuring the writing of multiple authors and sometimes professionally &lt;a href=&quot;https://en.wikipedia.org/wiki/Editing&quot;&gt;edited&lt;/a&gt;. MABs from &lt;a href=&quot;https://en.wikipedia.org/wiki/Newspaper&quot;&gt;newspapers&lt;/a&gt;, other &lt;a href=&quot;https://en.wikipedia.org/wiki/News_media&quot;&gt;media outlets&lt;/a&gt;, universities, &lt;a href=&quot;https://en.wikipedia.org/wiki/Think_tank&quot;&gt;think tanks&lt;/a&gt;, &lt;a href=&quot;https://en.wikipedia.org/wiki/Advocacy_group&quot;&gt;advocacy groups&lt;/a&gt;, and similar institutions account for an increasing quantity of blog &lt;a href=&quot;https://en.wikipedia.org/wiki/Web_traffic&quot;&gt;traffic&lt;/a&gt;. The rise of &lt;a href=&quot;https://en.wikipedia.org/wiki/Twitter&quot;&gt;Twitter&lt;/a&gt; and other &quot;&lt;a href=&quot;https://en.wikipedia.org/wiki/Microblogging&quot;&gt;microblogging&lt;/a&gt;&quot; systems helps integrate MABs and single-author blogs into the news media. &lt;i&gt;Blog&lt;/i&gt; can also be used as a verb, meaning &lt;i&gt;to maintain or add content to a blog&lt;/i&gt;.&lt;/p&gt;', 1, '2021-05-01 12:49:36'),
(19, 26, 2, 'POST 2', '1619862732_1 (7).png', '&lt;p&gt;I know this is a personal development blog and it&rsquo;s intended to always be that, but I want to write something a little different today. This is a post about literally anything and everything that comes into my mind this morning.&lt;/p&gt;&lt;p&gt;I fancied practicing my typing skills again and so as I transition into my new lifestyle of being self employed (more on this in a bit) I really need to get used to typing fast! So there&rsquo;s a very good chance no one is going to read this as it&rsquo;s not targeted around any keywords.&lt;/p&gt;&lt;p&gt;I&rsquo;m (When I first typed this sentence, there was a spelling mistake, and for about 20 minutes I didn&rsquo;t notice! I&rsquo;m an expert I promise!) an SEO expert meaning I can get posts to rank well on the search engines.&lt;/p&gt;', 1, '2021-05-01 15:22:12'),
(20, 26, 3, 'The Most Random Blog Post Of 2020 Ever!', '1619862768_1 (3).png', '&lt;p&gt;My boss was very understanding of the whole thing and we now have a great relationship and continue to be friends and work together. Good stuff! But switching from full time work to full time working for yourself can be confusing.&lt;/p&gt;&lt;p&gt;With no set schedule (yet) it&rsquo;s a challenge to know what to focus on next! Now to avoid this blog post turning into a giant wall of text and not many images (I&rsquo;m not actually sure if I&rsquo;ll put images in this at this point because it&rsquo;s just not a focused post!) I&rsquo;ll include little headings as I usually do so that you&rsquo;re not going to get bored and click off this post!&lt;/p&gt;', 1, '2021-05-01 15:22:48'),
(21, 26, 4, 'The one thing (A great book)', '1619862800_updated 29-38_Page_7.png', '&lt;p&gt;The one thing is a little yellow book which explains why it&rsquo;s very important to focus only on ONE thing at a time. Literally just one thing, hence the title. &lt;i&gt;Oh, also check out &lt;/i&gt;&lt;a href=&quot;https://www.transcendyourlimits.com/books-about-making-money/&quot;&gt;&lt;i&gt;my summary books about money&lt;/i&gt;&lt;/a&gt;&lt;i&gt;, it&rsquo;s good).&lt;/i&gt;&lt;/p&gt;&lt;p&gt;In fact, the author is so sure of this that the entire boo is literally just about one thing as well; getting you (the reader) to only think about one thing.&lt;/p&gt;', 1, '2021-05-01 15:23:20'),
(22, 26, 5, 'You’ve got to streamline.', '1619862839_2 (4).png', '&lt;p&gt;I owned 35 websites at one point, and I was trying to make ALL of them work as businesses. It was too much! Even in my full time agency job I was trying to balance about 5 other projects on the side on the weekends and in the evenings!&lt;/p&gt;&lt;p&gt;Attention and mental energy is actually a resource and it DOES run out! It&rsquo;s easy to think that you can just focus on things all day long but you can&rsquo;t. Your brain is like a muscle, and because I can&rsquo;t really remember where I found this out, you&rsquo;re going to have to take my word for it, but there have been studies done proving this!&lt;/p&gt;&lt;p&gt;You can prove it to yourself, actually.&lt;/p&gt;&lt;p&gt;Try and focus on things all day long 7 days a week, with no breaks. You&rsquo;ll find that at the very best, you&rsquo;re just not as effective towards the end of the days, and towards the end of the week.&lt;/p&gt;', 1, '2021-05-01 15:23:59');

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
(8, 'Test', '<p>test</p>');

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
(26, 1, 'user4', 'armen.jancarlos@wifioak.com', '$2y$10$QZQNmo6S/CZ/DeQhB9RWjei.iJnKaUgl/1SSoybFYrG5AoWuD3qKq', '2021-05-01 09:49:38');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
