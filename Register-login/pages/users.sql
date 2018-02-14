-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2018 at 10:42 AM
-- Server version: 5.7.20
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `rollNo` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `rollNo`, `email`, `address`) VALUES
('AnshikaG', 'd41d8cd98f00b204e9800998ecf8427e', 70, 'an.anshika.gupta@gmail.com', '6H/96, HIG Duplex, Sec-5, Rajender Nagar, Sahibabad, Ghaziabad, Uttar Pradesh\r\n'),
('Anshu65', 'ac56f9c660f63949ea9704895ec1805c', 45, 'an@gmail.com', 'lhgkvcg'),
('UdteParinde', '827ccb0eea8a706c4c34a16891f84e7b', 54, 'ang.anshu.gupta@gmail.com', 'xsjblcjs c'),
('Anshu', '66b2f5c3bc465b507dbe10e11442775d', 70, 'anshika@gupta.com', '6H/96, HIG Duplex, Sec-5, Rajender Nagar, Sahibabad, Ghaziabad, Uttar Pradesh'),
('6561', 'c3635818572a364b6bf2fdce02f299d4', 45, 'azn@gmail.com', 'hlbj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;