-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2025 at 03:50 PM
-- Server version: 10.6.20-MariaDB-cll-lve
-- PHP Version: 8.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoeylfqw_movies`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `movie1` varchar(150) NOT NULL,
  `movie2` varchar(150) NOT NULL,
  `reason` varchar(1000) NOT NULL,
  `date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `name`, `movie1`, `movie2`, `reason`, `date`) VALUES
(1, 'Zoey', 'Ladybird', 'Ghostlight', 'This film\\\'s title upsets me, because it\\\'s not a horror movie! It\\\'s a beautiful, funny, heartwrenching coming of age story about love and family and daughterhood and fatherhood. I cried, and so did my two friends who saw it with me in theaters. Run, don\\\'t walk!', '02-06-2025'),
(2, 'Mara', 'Shawshank Redemption', 'Sing Sing', '\\\"Sing Sing\\\" is a prison drama like \\\"Shawshank Redemption,\\\" but the majority of the actors are actually formerly incarcerated people playing themselves! In general, I think it does a better job including incarcerated voices in their own representation ... and it\\\'s just a gorgeous move in general. Plus, Coleman Domingo is a superstar and I love him.', '02-06-2025');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
