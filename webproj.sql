-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2019 at 10:54 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproj`
--

-- --------------------------------------------------------

--
-- Table structure for table `flight`
--

CREATE TABLE `flight` (
  `id` int(11) NOT NULL,
  `air_name` varchar(50) COLLATE utf16_bin NOT NULL,
  `flight_img` varchar(500) COLLATE utf16_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Dumping data for table `flight`
--

INSERT INTO `flight` (`id`, `air_name`, `flight_img`) VALUES
(1, 'AirAsia', 'airasia.png'),
(3, 'Bangkok Airways', 'bangkokairways.png'),
(5, 'Myanmar Airways International', 'maiInternational.png'),
(6, 'Vietnam Airlines', 'vietnam.png'),
(7, 'Qatar Airways', 'qatar.png'),
(8, 'Singapore Airlines', 'singapore.png'),
(9, 'Myanmar National Airlines', 'mnaAirInternational.png');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `location` varchar(225) COLLATE latin1_german1_ci NOT NULL,
  `rating` varchar(10) COLLATE latin1_german1_ci NOT NULL,
  `hotel_img` varchar(500) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `hotel_name`, `location`, `rating`, `hotel_img`) VALUES
(6, 'Melia Hotel', ' No. 1 Kabar Aye Pagoda Rd, Yangon 11081, Myanmar (Burma)', '4.4', 'meliahotel.jpeg'),
(8, 'Jasmine Palace Hotel', ' 341 Pyay Road, Sanchaung Township, Yangon 11111, Myanmar (Burma)', '4.2', 'jasminepalace.jpeg'),
(9, 'Ananta Bagan Hotel', 'Old Bagan, Myanmar (Burma)', '4.5', 'anantabagan.jpeg'),
(10, 'Amata Garden Hotel', 'Inlay ,Myanmar (Burma)\r\n', '4.5', 'amatagarden.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `name` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `content` text COLLATE latin1_german1_ci NOT NULL,
  `img1` varchar(500) COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `content`, `img1`) VALUES
(1, 'Mandalay', 'Mandalay is the second-largest city and the last royal capital of Myanmar (Burma). Located 716 km (445 mi) north of Yangon on the east bank of the Irrawaddy River, the city has a population of 1,225,553 (2014 census). Mandalay is the economic centre of Upper Burma and considered the centre of Burmese culture.\r\nMandalay is located in the central dry zone of Burma by the Irrawaddy river at 21.98° North, 96.08° East, 80 meters (260 feet) above sea level. Its standard time zone is UTC/GMT +6:30 hours. Mandalay lies along the Sagaing Fault.Bodies of water near Mandalay are Mandalay Kantawgyi, a small lake and Irawaddy River to the west of the city.', 'mdy-2.jpg'),
(2, 'Bagan', 'Bagan, located on the banks of the Ayeyarwady (Irrawaddy) River, is home to the largest and densest concentration of Buddhist temples, pagodas, stupas and ruins in the world with many dating from the 11th and 12th centuries. The shape and construction of each building is highly significant in Buddhism with each component part taking on spiritual meaning.\r\n', 'bagan-2.jpg'),
(3, 'Yangon', 'Yangon served as the capital of Myanmar until 2006. With over 7 million people, Yangon is Myanmar\'s largest city and it’s the most important commercial centre. Yangon boasts the largest number of colonial-era buildings in Southeast Asia, and has a unique colonial-era urban core that is remarkably intact. The colonial-era commercial core is centred around the Sule Pagoda, which is reputed to be over 2,000 years old. The city is also home to the gilded Shwedagon Pagoda – Myanmar\'s most sacred Buddhist pagoda', 'ygn.png'),
(4, 'Sagaing', 'Sagaing  is located the Irrawaddy River, 20 km to the south-west of Mandalay on the opposite bank of the river, Sagaing, with numerous Buddhist monasteries is an important religious and monastic centre. The pagodas and monasteries crowd the numerous hills along the ridge running parallel to the river. The central pagoda, Soon U Ponya Shin Pagoda, is connected by a set of covered staircases that run up the 240 m hill.\r\n\r\nToday, with about 70,000 inhabitants, the city is part of Mandalay built-up area with more than 1,022,000 inhabitants estimated in 2011. The city is a frequent tourist destination of day trippers. Within the city are the Sagaing Institute of Education, the Sagaing Education College, Sagaing University, Technological University (Sagaing), and co-operative university (Sagaing).', 'sagaing.jpg'),
(5, 'Inlay', 'Inle Lake is a freshwater lake located in the Nyaungshwe Township of Taunggyi District of Shan State, part of Shan¬¬ Hills in Myanmar (Burma). It is the second largest lake in Myanmar with an estimated surface area of 44.9 square miles (116 km2), and one of the highest at an elevation of 2,900 feet (880 m). During the dry season, the average water depth is 7 feet (2.1 m), with the deepest point being 12 feet (3.7 m), but during the rainy season this can increase by 5 feet (1.5 m).\r\n\r\nThe people of Inle Lake (called Intha), some 70,000 of them, live in four cities bordering the lake, in numerous small villages along the lake\'s shores, and on the lake itself. The entire lake area is in Nyaung Shwe township. ', 'inlay.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tour`
--

CREATE TABLE `tour` (
  `id` int(11) NOT NULL,
  `tour_name` varchar(30) COLLATE latin1_german1_ci NOT NULL,
  `content` text COLLATE latin1_german1_ci NOT NULL,
  `price` int(20) NOT NULL,
  `img1` text COLLATE latin1_german1_ci NOT NULL,
  `img2` text COLLATE latin1_german1_ci NOT NULL,
  `img3` text COLLATE latin1_german1_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_german1_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flight`
--
ALTER TABLE `flight`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flight`
--
ALTER TABLE `flight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tour`
--
ALTER TABLE `tour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
