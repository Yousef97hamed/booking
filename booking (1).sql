-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 10, 2019 at 04:44 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking`
--

-- --------------------------------------------------------

--
-- Table structure for table `air_lines`
--

DROP TABLE IF EXISTS `air_lines`;
CREATE TABLE IF NOT EXISTS `air_lines` (
  `ID_AirLines` int(11) NOT NULL,
  `Name_Lines` varchar(225) NOT NULL,
  `from_airline` varchar(100) NOT NULL,
  `to_airline` varchar(100) NOT NULL,
  `prise` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `air_lines`
--

INSERT INTO `air_lines` (`ID_AirLines`, `Name_Lines`, `from_airline`, `to_airline`, `prise`) VALUES
(1, 'Libyan Air Lines\r\n', 'Tripoli', 'Benghazi', 350),
(1, 'Libyan Air Lines', 'Tripoli', 'Mesrata', 200),
(1, 'Libyan Air Lines', 'Mesrata', 'Benghazi', 150),
(2, 'Afrigia Air Lines', 'Tripoli', 'Benghazi', 430),
(2, 'Afrigia Air Lines', 'Tripoli', 'Mesrata', 175),
(2, 'Afrigia Air Lines', 'Mesrata', 'Benghazi', 145),
(3, 'Buraq Air Lines', 'Tripoli', 'Benghazi', 420),
(3, 'Buraq Air Lines', 'Tripoli', 'Mesrata', 320),
(3, 'Buraq Air Lines', 'Mesrata', 'Benghazi', 180),
(4, 'Air libya', 'Triopli', 'Benghazi', 500),
(4, 'Air libya', 'Triopli', 'Mesrata', 250),
(4, 'Air libya', 'Mesrata', 'Benghazi', 190),
(4, 'Air libya', 'Triopli', 'Benghazi', 500),
(4, 'Air libya', 'Triopli', 'Mesrata', 250),
(4, 'Air libya', 'Mesrata', 'Benghazi', 190),
(4, 'Air libya', 'Triopli', 'Benghazi', 500),
(4, 'Air libya', 'Triopli', 'Mesrata', 250),
(4, 'Air libya', 'Mesrata', 'Benghazi', 190),
(4, 'Air libya', 'Tripoli', 'aaaa', 1),
(5, 'Ghadames Air Lines', 'Tripoli', 'Benghazi', 520),
(5, 'Ghadames Air Lines', 'Tripoli', 'Mesrata', 310),
(5, 'Ghadames Air Lines', 'Mesrata', 'Benghazi', 130),
(6, 'Air Kufra', 'Tripoli', 'Benghazi', 400),
(6, 'Air Kufra', 'Tripoli', 'Mesrata', 200),
(6, 'Air Kufra', 'Mesrata', 'Benghazi', 120);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `first_name` varchar(50) NOT NULL,
  `passport` int(30) NOT NULL,
  `ID_AirLines` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`first_name`, `passport`, `ID_AirLines`) VALUES
('Yousef', 1234567891, 1),
('Ibrahim', 987654321, 1),
('Safwan', 654656898, 1),
('aa', 11111, NULL),
('qqqq', 12231, NULL),
('Mohammed Magrhee', 5641365, NULL),
('grtgrtg', 1242342, NULL),
('gegerg', 12324, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
