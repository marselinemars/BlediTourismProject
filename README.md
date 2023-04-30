# bleditourism_project

  MY SQL CODE
  
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2023 at 12:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bleditourism`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `gallery_path` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `num_of_posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`name`, `email`, `pass`, `address`, `contact`, `gallery_path`, `city`, `num_of_posts`) VALUES
('sdfdghf', 'sdfgh', 'sdfgd', 'sidiabdellah', 'sdfg', 'sdfdghf', 'algiers', 0),
('jsdmfkldsa', 'sdfgdfsgg', 'dfgfhjh', 'sidiabdellah', 'njasdkmfnkjdfms,k', 'jsdmfkldsa', 'algiers', 0);

-- --------------------------------------------------------

--
-- Table structure for table `circuits`
--

CREATE TABLE `circuits` (
  `guide` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `circuits`
--

INSERT INTO `circuits` (`guide`, `title`, `description`) VALUES
('hamza djamila amani', 'the most interesting circuit ', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt excepturi sequi, quae omnis assumenda corporis suscipit, recusandae et totam corrupti fugiat labore debitis odio voluptatum pariatur minima vitae illo voluptas!'),
('hamza djamila amani ', 'my circuit', 'aadsgkndsgfmasfdjasf'),
('hamza djamila amani ', 'sfafa', 'asdfa'),
('hamza djamila amani ', 'serthj', 'asdfaga'),
('hamza djamila amani ', 'fsdf', 'sfdasgf'),
('hamza djamila amani ', 'adsgnkjfandgm', 'jnmestdfnjkvamdfjkgnm v');

-- --------------------------------------------------------

--
-- Table structure for table `feedbacks`
--

CREATE TABLE `feedbacks` (
  `visitor` varchar(50) NOT NULL,
  `rating` float NOT NULL,
  `opinion` varchar(100) NOT NULL,
  `guide` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedbacks`
--

INSERT INTO `feedbacks` (`visitor`, `rating`, `opinion`, `guide`) VALUES
('djamo', 5, 'sf', 'hamza djamila amani'),
('djamo', 4, 'ajkdfajknkmgaksdfm gn', 'hamza djamila amani'),
('djamo', 2.5, 'sfjkamg', 'hamza djamila amani'),
('djamo', 3, 'sadgmnakdmfgbvndjfvhn ', 'hamza djamila amani'),
('djamo', 5, 'hnmhbgv ', 'hamza djamila amani');

-- --------------------------------------------------------

--
-- Table structure for table `guides`
--

CREATE TABLE `guides` (
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `g_name` varchar(50) NOT NULL,
  `g_bio` varchar(200) NOT NULL,
  `g_city` varchar(20) NOT NULL,
  `gallery_path` varchar(100) NOT NULL,
  `num_of_posts` int(11) NOT NULL DEFAULT 0,
  `contacts` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guides`
--

INSERT INTO `guides` (`email`, `pass`, `g_name`, `g_bio`, `g_city`, `gallery_path`, `num_of_posts`, `contacts`) VALUES
('jiji.16hamza@gmail.com', '1611', 'hamza djamila amani ', 'i am your mama ', 'ouargla', 'hamzadjamilaamani', 5, 'Facebook : Marseline Mars \r\nInstagram : Liilsee \r\nNumber : 0559128876'),
('djamila.hamza@ensia.edu.dz', 'asfddg', 'hjabnsmd,', 'ajsndksmf,', 'algiers', 'hjabnsmd,', 0, 'ajndkfms,'),
('amar.19hamza@gmail.com', 'adsfsgfdhg', 'dfgfh', 'asdfghgfsadfsg', 'algiers', 'dfgfh', 0, 'asdfghfd');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` text NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gallery_path` varchar(100) NOT NULL,
  `num_of_posts` int(11) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`name`, `email`, `pass`, `address`, `contact`, `gallery_path`, `num_of_posts`, `city`) VALUES
('madeline', 'djamila.hamza@ensia.edu.dz', 'fvghjkl', 'sidiabdellah', 'gfhjikol', 'madeline', 0, ''),
('asdfg', 'asdfa', 'asdfg', 'sidiabdellah', 'gfhjikol', 'asdfg', 1, 'algiers'),
('sfdg', 'asdfgh', 'fdsghj', 'sidiabdellah', 'aikgsmdv,dfbkl', 'sfdg', 1, 'algiers');

-- --------------------------------------------------------

--
-- Table structure for table `resto`
--

CREATE TABLE `resto` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `gallery_path` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `num_of_posts` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resto`
--

INSERT INTO `resto` (`name`, `email`, `pass`, `address`, `contact`, `gallery_path`, `city`, `num_of_posts`) VALUES
('sfdgmsldfkg', 'amar.19hamza@gmail.com', 'aasdfgghjgk', 'sidiabdellah', 'asdfgdgd', '0', 'algiers', 0);

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`name`, `email`, `pass`) VALUES
('ajnkdsgmf', 'amar.19hamza@gmail.com', 'jsamdf,');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
