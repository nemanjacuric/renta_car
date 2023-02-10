-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 25, 2022 at 09:14 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_rental`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

DROP TABLE IF EXISTS `cars`;
CREATE TABLE IF NOT EXISTS `cars` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car` varchar(244) NOT NULL,
  `price` varchar(244) DEFAULT NULL,
  `image` varchar(244) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `car`, `price`, `image`) VALUES
(2, 'BMW X5', '35', 'bmw1.jpg'),
(3, 'Hyundai i30', '23', 'hj.jpg'),
(4, 'Dacia Stepway 2022', '19', 'dacia.png'),
(5, 'Reno Clio', '21', 'reno.jpg'),
(6, 'Opel Insignia', '28', 'opel.jpg'),
(7, 'Fiat Tipo', '30', 'fiat.jpg'),
(8, 'Mercedes G klasa-Brabus', '75', 'brabus.jpg'),
(9, 'Audi A4', '60', 'audi.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cars` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `id_cars`, `id_user`, `date`) VALUES
(10, 3, 2, '2022-08-24'),
(11, 5, 2, '2022-08-24'),
(12, 8, 3, '2022-08-24'),
(13, 6, 3, '2022-08-24'),
(14, 9, 2, '2022-08-24'),
(15, 9, 4, '2022-08-25'),
(16, 4, 4, '2022-08-25'),
(17, 7, 4, '2022-08-25'),
(18, 8, 5, '2022-08-25'),
(19, 3, 6, '2022-08-25'),
(20, 4, 6, '2022-08-25'),
(21, 5, 6, '2022-08-25');

-- --------------------------------------------------------

--
-- Table structure for table `reservation_work`
--

DROP TABLE IF EXISTS `reservation_work`;
CREATE TABLE IF NOT EXISTS `reservation_work` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cars` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cars` (`id_cars`,`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(244) NOT NULL,
  `email` varchar(244) NOT NULL,
  `password_user` varchar(244) NOT NULL,
  `rola` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user`, `email`, `password_user`, `rola`) VALUES
(2, 'Nemanja', 'nemanja@gmail.com', '101090', 1),
(3, 'Marko', 'marko@gmail.com', 'mare123', NULL),
(4, 'Marija', 'marija@gmail.com', 'marija123', NULL),
(5, 'Aleksandar', 'coa@gmail.com', 'coa123', NULL),
(6, 'Nikola', 'nikola@gmail.com', 'nikola123', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
