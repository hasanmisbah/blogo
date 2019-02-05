-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2019 at 06:20 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogo`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `post_id`, `user_id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 6, 'World News', '2018-11-25 23:01:55', '2018-11-25 23:01:55'),
(2, NULL, 5, 'Sports', '2018-11-26 10:03:03', '2018-11-26 10:03:03');

-- --------------------------------------------------------

--
-- Table structure for table `commment`
--

CREATE TABLE `commment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `pages_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pages_title` varchar(250) NOT NULL,
  `pages_body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pages_id`, `user_id`, `pages_title`, `pages_body`, `created_at`, `updated_at`) VALUES
(1, 6, 'Home Pages', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vestibulum a augue a facilisis. Nunc tempus dapibus eros, nec sollicitudin sem lacinia commodo. Vivamus sollicitudin quam vel odio commodo, ac dapibus lacus ornare. Fusce venenatis ex in ex rhoncus molestie. Nullam venenatis egestas lectus non pellentesque. Phasellus tristique finibus lorem, sed accumsan magna ultrices dignissim. Praesent quis dolor et leo sollicitudin feugiat. Ut mattis, elit quis finibus ultricies, sem justo luctus tortor, vitae consectetur tortor turpis eget erat. Praesent ut faucibus elit. Etiam mollis augue ut urna mattis interdum. Aliquam viverra eros nec justo condimentum, eu dignissim lacus bibendum. Vivamus pretium tortor magna, blandit rutrum odio sollicitudin in. Quisque dapibus ultricies enim eget finibus. Proin molestie magna nec diam commodo, ac luctus libero varius. Nunc turpis eros, suscipit sit amet orci sed, tristique maximus ex. Curabitur volutpat justo mollis, condimentum eros placerat, eleifend risus.</p>\r\n\r\n<p>Quisque pharetra odio facilisis posuere iaculis. Ut placerat tortor quis tincidunt luctus. Vestibulum at imperdiet justo, eu sagittis eros. Curabitur tempor quam quis enim sagittis bibendum. Sed sodales ligula at dui ultrices porttitor. Morbi vestibulum efficitur ipsum at bibendum. Cras tristique, massa sit amet ullamcorper interdum, magna felis venenatis mauris, id semper enim velit ut mi. Integer sed varius massa, at sagittis augue. Phasellus vestibulum quam vel erat dapibus, vel maximus est cursus. Vivamus consequat quam in felis porttitor, sit amet tincidunt tellus aliquet. Etiam posuere quam arcu, at interdum lacus pellentesque non. Proin a tellus a justo iaculis lobortis. Nullam ultricies lacus eget urna iaculis accumsan.</p>\r\n\r\n<p>Maecenas vel justo quis diam eleifend elementum a a odio. Nulla scelerisque condimentum risus, quis gravida orci dictum sit amet. Nulla et urna euismod odio dictum tincidunt. Proin semper tellus eget varius dapibus. Vivamus eget mi lobortis augue semper rutrum ut sed justo. Sed non enim ut dolor faucibus sagittis. Vivamus euismod et risus quis mattis.</p>\r\n\r\n<p>Etiam elementum nisl non ante viverra sollicitudin. Cras enim nisi, aliquam a vehicula eget, egestas tempus nulla. Duis vehicula nisl at lacinia iaculis. Proin suscipit mauris sed dolor fermentum tristique. Nam et rhoncus magna. Nullam pulvinar justo sed magna elementum dapibus. Sed hendrerit metus at nisl varius fringilla efficitur pretium felis. In elementum id elit vitae euismod. Aenean eget lacus in mi lacinia consequat quis ut sem. Aliquam metus mi, feugiat non lobortis ut, pharetra eu nisl. Integer at est eros. Sed varius nisl ex, et scelerisque elit ullamcorper a. Vestibulum quis elit magna. Sed vel iaculis tortor, et tempus sapien.</p>\r\n\r\n<p>Ut justo eros, mattis in neque a, porttitor iaculis magna. Sed id ex quis sapien ultricies tempus ac vitae ex. Integer leo sem, consequat eu blandit at, luctus et orci. Quisque ac finibus nunc, ut aliquet nisl. Nunc quis urna vel ex volutpat commodo cursus et elit. Proin ornare massa ac mauris pretium vestibulum. Curabitur ut molestie dui. Aenean blandit lectus purus, ut interdum massa vehicula interdum. Suspendisse potenti. Etiam malesuada mattis porta. Suspendisse convallis eu metus ac convallis. Morbi ac porttitor ligula, a pretium magna.</p>\r\n\r\n<p>Pellentesque at ex quam. Donec eleifend magna sodales enim pretium vestibulum. Suspendisse consectetur elit lorem, in mattis justo auctor vel. Curabitur in purus auctor mauris interdum rhoncus nec laoreet nibh. Aliquam mattis pulvinar erat ac porttitor. Nullam bibendum dolor eget turpis fringilla, sit amet placerat magna porta. Morbi auctor, nisi nec euismod laoreet, sem mi vulputate nisl, sit amet semper purus ex ac sapien. Morbi a sapien sit amet metus faucibus congue. Morbi egestas aliquet sapien, nec placerat neque sodales quis. Sed et elit interdum, congue massa ac, posuere nibh.</p>\r\n', '2018-11-28 13:11:06', '2018-12-12 11:57:48');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(99) NOT NULL,
  `user_id` int(99) NOT NULL,
  `category_id` int(99) NOT NULL,
  `image_name` varchar(250) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `user_id`, `category_id`, `image_name`, `post_title`, `post_body`, `created_at`, `updated_at`) VALUES
(4, 6, 2, '', 'hello world', 'postBody', '2018-11-28 12:30:39', '0000-00-00 00:00:00'),
(5, 6, 2, '', 'Where does it come from?', 'postBody', '2018-11-28 12:41:30', '0000-00-00 00:00:00'),
(6, 6, 1, '', 'Where can I get some?', 'postBody', '2018-11-28 12:50:20', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'vaiya', 'vaiya@vaiya.com', '5bacd9f25613659b2fbd2f3a58822e5c', '2018-11-25 10:49:10', '0000-00-00 00:00:00'),
(5, 'Hasan Misbah', 'misbah@admin.com', '5bacd9f25613659b2fbd2f3a58822e5c', '2018-11-25 18:40:43', '0000-00-00 00:00:00'),
(6, 'Misbah', 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', '2018-11-25 19:16:54', '2018-12-18 05:20:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id_2` (`post_id`);

--
-- Indexes for table `commment`
--
ALTER TABLE `commment`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `user_id` (`user_id`,`post_id`),
  ADD KEY `commment_ibfk_1` (`post_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`pages_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `user_id` (`user_id`,`category_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `commment`
--
ALTER TABLE `commment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `pages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `category`
--
ALTER TABLE `category`
  ADD CONSTRAINT `category_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `commment`
--
ALTER TABLE `commment`
  ADD CONSTRAINT `commment_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `commment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pages`
--
ALTER TABLE `pages`
  ADD CONSTRAINT `pages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `post_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
