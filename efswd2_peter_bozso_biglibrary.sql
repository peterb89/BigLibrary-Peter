-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2026 at 07:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `efswd2_peter_bozso_biglibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `biglibrary_safe`
--

CREATE TABLE `biglibrary_safe` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author_first_name` varchar(255) NOT NULL,
  `author_last_name` varchar(255) NOT NULL,
  `isbn` varchar(20) NOT NULL,
  `type` varchar(100) NOT NULL,
  `publisher_name` varchar(255) NOT NULL,
  `publisher_address` varchar(255) NOT NULL,
  `publish_date` date NOT NULL,
  `short_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biglibrary_safe`
--

INSERT INTO `biglibrary_safe` (`id`, `image`, `title`, `author_first_name`, `author_last_name`, `isbn`, `type`, `publisher_name`, `publisher_address`, `publish_date`, `short_description`) VALUES
(11, 'tchaikovsky_book.jpg', 'Tchaikovsky: Life and Legacy', 'Elena', 'Morozova', '9780300214567', 'book', 'Harmony Press', 'Moscow, Russia', '2014-05-12', 'A detailed biography exploring Tchaikovsky’s personal life and musical genius.'),
(12, 'mozart_sonatas_cd.jpg', 'Mozart: Complete Piano Sonatas', 'Wolfgang Amadeus', 'Mozart', '9780198765432', 'CD', 'Vienna Classics', 'Vienna, Austria', '2018-09-20', 'A high‑quality studio recording of Mozart’s complete piano sonatas.'),
(13, 'schubert_winterreise_dvd.jpg', 'Schubert: Winterreise Documentary', 'Franz', 'Schubert', '9780674432109', 'DVD', 'BlueMountain Films', 'Salzburg, Austria', '2020-11-03', 'A documentary exploring the history and emotional depth of Schubert’s Winterreise.'),
(14, 'grieg_journey_book.jpg', 'Edvard Grieg: A Composer’s Journey', 'Anna', 'Larsen', '9781408891234', 'book', 'Nordic Arts Publishing', 'Bergen, Norway', '2016-03-14', 'A modern biography following Grieg’s travels and inspirations across Scandinavia.'),
(15, 'tchaikovsky_best_cd.jpg', 'The Best of Tchaikovsky', 'Pyotr Ilyich', 'Tchaikovsky', '9781234501123', 'CD', 'Royal Philharmonic Records', 'London, UK', '2019-07-08', 'A curated collection of Tchaikovsky’s most beloved orchestral works.'),
(16, 'mozart_live_dvd.jpg', 'Mozart in Vienna – Live Concert', 'Wolfgang Amadeus', 'Mozart', '9781784509981', 'DVD', 'GoldenStage Productions', 'Vienna, Austria', '2021-12-01', 'A live orchestral performance recorded at the Vienna Musikverein.'),
(17, 'schubert_letters_book.jpg', 'Schubert: Letters and Memories', 'Karl', 'Reinhardt', '9780521678901', 'book', 'AlpenBook Verlag', 'Graz, Austria', '2015-08-22', 'A collection of Schubert’s personal letters with commentary from music historians.'),
(18, 'grieg_piano_cd.jpg', 'Grieg: Piano Works Collection', 'Edvard', 'Grieg', '9781335570012', 'CD', 'Northern Lights Records', 'Oslo, Norway', '2020-02-10', 'A beautifully recorded selection of Grieg’s most iconic piano compositions.'),
(19, 'mozart_early_book.jpg', 'Mozart: The Early Years', 'Johann', 'Steiner', '9781902235678', 'book', 'ClassicEra Publishing', 'Linz, Austria', '2017-10-05', 'A historical study of Mozart’s childhood and early compositions.'),
(20, 'tchaikovsky_ballet_dvd.jpg', 'Tchaikovsky Ballet Gala', 'Pyotr Ilyich', 'Tchaikovsky', '9781657789901', 'DVD', 'Imperial Stage Films', 'St. Petersburg, Russia', '2022-04-18', 'A filmed performance featuring highlights from Swan Lake and The Nutcracker.'),
(21, 'images.jpg', 'Peter Bozso: Tchaikovsky\'s last years', 'Peter', 'Bozso', '1234567891', 'book', 'Harmony Press', 'Budapest,Hungary', '2016-11-06', 'Tchaikovsky\'s Last Composition and Days. How He May Have Passed His Last Days');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biglibrary_safe`
--
ALTER TABLE `biglibrary_safe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biglibrary_safe`
--
ALTER TABLE `biglibrary_safe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
