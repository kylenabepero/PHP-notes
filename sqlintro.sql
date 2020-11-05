-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2017 at 10:02 AM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqlintro`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `reg_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `pass`, `reg_date`) VALUES
(1, 'john', 'johnson', 'john@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2017-07-06 19:54:09'),
(2, 'bob', 'bobson', 'bob@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2017-07-06 19:55:05'),
(3, 'jack', 'jackson', 'jack@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2017-07-06 19:57:03'),
(4, 'sally', 'smith', 'sally@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2017-07-06 19:57:03'),
(5, 'fred', 'stevens', 'fred@gmail.com', '9d4e1e23bd5b727046a9e3b4b7db57bd8d6ee684', '2017-07-06 19:59:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
