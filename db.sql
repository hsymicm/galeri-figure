-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2024 at 03:58 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galerifigure`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `brand` varchar(50) NOT NULL,
  `release_date` date NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `caption`, `description`, `brand`, `release_date`, `filename`) VALUES
(1, 'Kamen Rider Geats Magnum Boost Form', 'The figure is a S.H.Figuarts action figure of Kamen Rider Geats, a character from the Japanese television series Kamen Rider Geats. The figure is depicted in his Magnum Boost Form, which features a white and red costume with red and black accents. The figure also has a red and white helmet with a yellow visor. It is holding a silver and red gun in its right hand.', 'Bandai S.H.Figuarts', '2023-11-13', '11.jpeg'),
(2, 'Masked Rider Kido', 'The figure’s costume is black and yellow with gold accents. It has a black mask with yellow eyes and a prominent yellow lightning bolt design running down the middle of its chest. The figure has a yellow belt with a buckle in the center. It has a long, silver sword in its right hand.', 'Bandai S.H.Figuarts', '2013-12-30', '22.jpeg'),
(3, 'Kamen Rider Wizard Flame', 'The figure has a black helmet with orange lining and a yellow visor on the right side and a red visor on the left side. The chest plate is orange with yellow accents and a red lightning bolt symbol. The right arm is orange and the left arm is red.  It has a black belt with a silver buckle in the center.', 'Bandai S.H.Figuarts', '2013-04-02', '31.jpeg'),
(6, 'Kamen Rider Faiz', 'The figure is a close-up of the head of a Kamen Rider Faiz S.H.Figuarts action figure.  Kamen Rider Faiz is a character from the 2003-2004 Japanese television series Kamen Rider Faiz. The figure has a red head with a clear visor that has a red light-up feature.  The figure also has a black mouth guard and silver accents around the eyes.', 'Bandai S.H.Figuarts', '2003-08-26', '6.jpeg'),
(7, 'Kamen Rider Dark Kabuto', 'The figure is a close-up of the upper torso of a Dark Kabuto action figure. Dark Kabuto is a character from the 2006-2007 Japanese television series Kamen Rider Kabuto. The figure has a black helmet with a horn-like protrusions on either side. The eyes glow red and there’s a silver mouthpiece covering the mouth. The chest plate is black with yellow trim and a green Kabuto虫 (Kabuto) insect symbol in the center.', 'Bandai Figuarts ZERO', '2006-09-13', '43.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
