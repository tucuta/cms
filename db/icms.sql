-- phpMyAdmin SQL Dump
-- version 4.4.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2015 at 11:04 AM
-- Server version: 5.6.23
-- PHP Version: 5.4.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `email`, `name`) VALUES
(1, 'admin', 'admin', 'admin@icms.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL,
  `email` varchar(500) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `dt` varchar(100) NOT NULL,
  `postid` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `email`, `comment`, `dt`, `postid`) VALUES
(47, 'pavan@gmail.com', 'dydfhffhfffffffffffffff', '15-05-21 09:08:00pm', '0'),
(61, '4@gmail.com', 'dfdryrty', '15-05-21 09:42:53pm', '0');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(200) NOT NULL,
  `menu_name` varchar(200) NOT NULL,
  `active` int(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `menu_name`, `active`) VALUES
(23, 'Home', 1),
(24, 'About', 1),
(25, 'Services', 1),
(26, 'Contact', 1),
(27, 'Forum', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id` int(11) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `page_content` mediumtext NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `page_title`, `page_content`, `menu_id`) VALUES
(11, 'Home', '<p>Innovate Techno Solutions is a web designing company that will help you with web development and design along with domain registration and web hosting. At Innovate Techno Solutions we aim to give you services of global standards at optimum pricing without compromising on standards. Our designers understand that though appearance is a key to a website, its accessibility, search engine visibility and ease of use are more important for the success of the website. At Innovate Techno Solutions, we strive to find new ways to meet all these needs without compromising on the basic image of your company. The creativity and expertise of our dedicated designers will provide you an edge over your competitors when it comes to the web development.</p>', 23),
(12, 'About Innovate Techno Solutions', '<p class="lead">Innovate Techno Solutions is a minority-owned, Business (SDB) providing IT products and services to both the government and commercial markets. We were founded in early 2014 and continue to evolve as a leading provider of enterprise-wide services and technology solutions. Innovate Techno Solutions is a noted and trusted partner to our clients who seek our knowledge and guidance for their most critical and complex IT projects.</p>\r\n<p>With a strong focus on enterprise-wide solutions, Innovate Techno Solutions possesses thorough knowledge of the specific mandates and contemporary IT trends that shape government and commercial IT infrastructures. A proven track record, repeat clients, and long lasting customer relationships demonstrate our commitment to client satisfaction. Innovate Techno Solutions position as an 8(a)-certified SDB helps government clients meet their socio-economic obligations, and has allowed us to learn from and team with a number of innovators in the federal IT market.</p>\r\n<h3>Think Enterprise-Wide:</h3>\r\n<p>We believe in the big picture - your entire IT enterprise. Innovate Techno Solutions vision is to offer our clients cutting-edge IT solutions for enterprise-wide implementation. The whole is more than the sum of its parts. Innovate Techno Solutions is a leading pioneer in the creation of a shared services culture. We understand the trends in mobility, social media, and collaboration; the cyber realm and its associated threats and benefits; and cloud computing.</p>\r\n<p>&nbsp;</p>', 24),
(13, 'Services', '<div id="translate" class="panel-pane pane-views pane-view-level2-description">\r\n<div class="center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">\r\n<h2>Our Services</h2>\r\n<p class="lead">We provide professional website design services for companies, Businesses and Individuals. We are able to provide your company or business, large or small with a range of options to ensure we can create the web site you require.</p>\r\n</div>\r\n<div class="row">\r\n<div class="features">\r\n<div class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" data-wow-duration="1000ms" data-wow-delay="600ms">\r\n<div class="feature-wrap">\r\n<h2>Website Designing</h2>\r\n<h3>Custom Website Designing , Redesigning</h3>\r\n</div>\r\n</div>\r\n<div class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" data-wow-duration="1000ms" data-wow-delay="600ms">\r\n<div class="feature-wrap">\r\n<h2>Web Development</h2>\r\n<h3>CMS, PHP, Joomla, Wordpress, Drupal</h3>\r\n</div>\r\n</div>\r\n<div class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" data-wow-duration="1000ms" data-wow-delay="600ms">\r\n<div class="feature-wrap">\r\n<h2>SEO Marketing</h2>\r\n<h3>Search Engine Optimization, Website Promotions</h3>\r\n</div>\r\n</div>\r\n<div class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" data-wow-duration="1000ms" data-wow-delay="600ms">\r\n<div class="feature-wrap">\r\n<h2>Web Hosting</h2>\r\n<h3>Affordable web hosting and Bulk Sms Service</h3>\r\n</div>\r\n</div>\r\n<div class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" data-wow-duration="1000ms" data-wow-delay="600ms">\r\n<div class="feature-wrap">\r\n<h2>Logo Designing</h2>\r\n<h3>Custom Logo With Full Detailed Imformation</h3>\r\n</div>\r\n</div>\r\n<div class="col-md-4 col-sm-6 wow fadeInDown animated" style="visibility: visible; animation-duration: 1000ms; animation-delay: 600ms; animation-name: fadeInDown;" data-wow-duration="1000ms" data-wow-delay="600ms">\r\n<div class="feature-wrap">\r\n<h2>Banner Designing</h2>\r\n<h3>Banner Designing For Our Contant</h3>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', 25),
(14, 'Contact', '<h1><img src="tinymce/source20150516a_009135004.jpg" alt="" />Address</h1>\r\n<p>Innovate Pvt Lmtd Comapnay</p>\r\n<p>Arundelpet 13<sup>th</sup> Line Guntur,</p>\r\n<p>Pin code :522007</p>\r\n<p>Andhrapradesh.</p>\r\n<p>Conctact No : 0863 - 2266778</p>\r\n<h1>Google Map</h1>\r\n<p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=%211m18%211m12%211m3%211d7658.71254050328%212d80.44116410000001%213d16.304730500000005%212m3%211f0%212f0%213f0%213m2%211i1024%212i768%214f13.1%213m3%211m2%211s0x3a4a754524a4b8fd%3A0x6d347eaf429ce539%212sArundelpet%2C+Guntur%2C+Andhra+Pradesh%215e0%213m2%211sen%212sin%214v1431429830274" width="500" height="250" frameborder="0"></iframe></p>', 26),
(16, 'Forum', '<p><img src="admin/tinymce/source/forum_marketing_strategy_users_are_more_engaged_in_online_and_offline_activities_id6428830.jpg" alt="" /></p>\r\n<p>Sample Forum content</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;<!--?php get_comments();?--></p>\r\n<!--?php get_comments(); ?-->\r\n<p>[...] before this decade is out, of landing a man on the Moon and returning him safely to the Earth.</p>', 27);

-- --------------------------------------------------------

--
-- Table structure for table `sub_menu`
--

CREATE TABLE IF NOT EXISTS `sub_menu` (
  `sid` int(200) NOT NULL,
  `submenu_name` varchar(200) NOT NULL,
  `id` int(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_menu`
--

INSERT INTO `sub_menu` (`sid`, `submenu_name`, `id`) VALUES
(2, 'web', 25);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(25) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `upass` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `uname`, `upass`, `email`, `role`) VALUES
(1, 'vasavi', 'lakshmi', 'vasavi@gmail.com', 'Reader'),
(2, 'lasya', 'sri', 'lasya@gmail.com', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD PRIMARY KEY (`sid`),
  ADD KEY `menu_id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `unique` (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `sub_menu`
--
ALTER TABLE `sub_menu`
  MODIFY `sid` int(200) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(25) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sub_menu`
--
ALTER TABLE `sub_menu`
  ADD CONSTRAINT `sub_menu_ibfk_1` FOREIGN KEY (`id`) REFERENCES `menu` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
