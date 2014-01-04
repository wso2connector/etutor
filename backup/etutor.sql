-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 04, 2014 at 09:17 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `etutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `post` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`answer_id`, `post`, `answer`, `username`, `usertype`) VALUES
(36, '25', '  $(document).ready(){\r\n      var score;\r\n      $(''input[name="score"]'').each(function(index)\r\n      {\r\n        //YOUR LOGIC\r\n        //IE: score = $(this).val(); console.log(score);\r\n      });\r\n\r\n});', 'Tharuka', 'Tutor'),
(40, '25', 'actually, i think I might have just found a simpler solution. it appears that I can add an argument {scoreName : ''name[]'',} and then i should be able to access my ratings with $_POST[''name''][0]', 'Kasun', 'Student'),
(41, '26', 'I installed Shareaholic Version 7.0.3.1 and love the simplicity of this version. My only problem is that I can''t seem to get the Related Content/Recommendations to show up on my site and it continues to show the Data Status as "Processing". I am frustrate', 'Kasun', 'Student'),
(43, '23', '$data = mysql_query("SELECT email FROM address ORDER BY email DESC") OR\r\n$data = mysql_query("SELECT * FROM address ORDER BY name ASC") ', 'Tharuka', 'Tutor'),
(44, '28', 'Human Resource Management (HRM) is the function within an organization that focuses on recruitment of, management of, and providing direction for the people who work in the organization. HRM can also be performed by line', 'Kasun', 'Student'),
(45, '28', 'HRM is the organizational function that deals with issues related to people such as compensation', 'Kasun', 'Student'),
(46, '25', 'sddsdsd', 'Kasun', 'Student'),
(47, '36', 'Configure your database for full text search (MyISAM engine). Then you can search as you would do any other CodeIgniter search. ', 'root', 'tutor');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'IT'),
(2, 'Management');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `question_id` int(5) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `category_id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `post` text NOT NULL,
  `tags` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`question_id`),
  FULLTEXT KEY `subject` (`subject`),
  FULLTEXT KEY `tags` (`tags`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_id`, `date`, `category_id`, `subject`, `post`, `tags`, `username`, `usertype`) VALUES
(25, '2013-11-13', 1, 'php', 'I''m using jQuery raty for a personal website. I have a form and raty generates the following for each set of stars', 'jquery,php,raty', 'Tharuka', 'Tutor'),
(26, '2013-11-13', 1, 'Wordpress', 'Shareaholic | share buttons & related posts', 'wordpress,php,shareaholic', 'Kasun', 'Student'),
(27, '2013-11-13', 1, 'SQL', 'How do I order MySQL data?:', 'mysql', 'Kasun', 'Student'),
(28, '2013-11-13', 2, 'HRM', 'What Is Human Resource Management?', 'hrm', 'Tharuka', 'Tutor'),
(29, '2013-11-13', 2, 'SQL', 'How to connect mysql database', 'mysql', 'Kasun', 'Student'),
(33, '0000-00-00', 2, 'Help with Project Management', 'I need some help with the Project Management course', 'project management', 'Root', 'Tutor'),
(34, '0000-00-00', 1, 'Serialize Java object using GSON', 'Hi, I''m using the GSON library to serialise Java objects in to JSON strings. I need help defining a new adapter for a class.', 'java, json, gson', 'Root', 'Tutor'),
(36, '2014-01-04', 1, 'Search using CodeIgniter', 'How do I run a full text search in CodeIgniter?', 'codeigniter,fulltext', 'root', 'tutor');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `email`, `usertype`) VALUES
(9, 'kasun', '05e60b40ce21b0416ff2d186a3fe4c21', 'kasun@gmail.com', 'student'),
(13, 'sanath', '173f8c9e191df4966a18b3c13df6d284', 'sanath@gmail.com', 'tutor'),
(14, 'tharuka', 'c8005651f1870339455e430ec3aba72c', 'tharuka@gmail.com', 'tutor'),
(15, 'root', '202cb962ac59075b964b07152d234b70', 'rasade88@gmail.com', 'tutor'),
(16, 'lota', '9622ff0a969c5d70c82d51d4b9c99512', 'lota@lota.com', 'student');
