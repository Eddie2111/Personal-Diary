-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 05:16 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `progress`
--

CREATE TABLE `progress` (
  `id` int(11) NOT NULL,
  `task` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `progress`
--

INSERT INTO `progress` (`id`, `task`) VALUES
(6, 'learn mongo language'),
(7, 'learn jquery to hide contents with onClick() function'),
(8, 'Learn Promises, await async and MVC'),
(9, 'practice and memorize swtiching of light to dark mode'),
(10, 'Learn sessioning on nodejs'),
(12, 'learn php with ajax call, this is necessary.'),
(13, 'create a navbar, sidebar, login page template'),
(14, 'get a hold of JWT in php'),
(15, 'learn beginner: Linked List, Stack, Queue, Binary Search Tree. in CPP'),
(16, 'Learn Heap, Priority Queue, Huffman Tree, Union Find, Tries, Hash Table, Tree Map. in CPP'),
(17, 'Learn Segment Tree, Binary Indexed Tree, Suffix Array, Sparse Table, Lowest Common Ancestor, Range Tree. in CPP'),
(18, 'Learn Suffix Automaton, Suffix Tree, Heavy-Light Decomposition, Treap, Aho-Corasick, K-d tree, Link-Cut Tree, Splay Tree, Palindromic Tree, Rope, Dancing Links, Radix Tree, Dynamic Suffix Array in CPP'),
(19, 'Find out out to update data on ejs in realtime'),
(20, 'add media query for width in index page, fix irresponsiveness ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `progress`
--
ALTER TABLE `progress`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `progress`
--
ALTER TABLE `progress`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
