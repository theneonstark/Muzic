-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 10:02 AM
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
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` tinyint(4) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `fname`, `lname`, `email`, `pass`, `cpass`) VALUES
(1, 'Mohd', 'Shahid', 'shahid@muzic.com', 'admin123', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `artist_data`
--

CREATE TABLE `artist_data` (
  `A_ID` int(20) NOT NULL,
  `artist_name` varchar(100) NOT NULL,
  `artist_img_name` varchar(50) NOT NULL,
  `artist_img_type` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artist_data`
--

INSERT INTO `artist_data` (`A_ID`, `artist_name`, `artist_img_name`, `artist_img_type`) VALUES
(1, 'Arman Malik', 'Photo at sector 1285664.jpg', 'image/jpeg'),
(2, 'Sonu Nigam', 'Photo at sector 1384384.jpg', 'image/jpeg'),
(4, 'B Praak', 'bpraak.jpg', 'image/jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `Header` varchar(100) NOT NULL,
  `Details` varchar(100) NOT NULL,
  `f_btn` varchar(100) NOT NULL,
  `s_btn` varchar(100) NOT NULL,
  `banner_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `Header`, `Details`, `f_btn`, `s_btn`, `banner_img`) VALUES
(1, 'Latest Song', 'Top 50 latest songs', 'Check it', 'Listen Now', 'dil-lauta-do-jubin-nautiyal.jpg'),
(2, 'Top 20', 'Crazy top songs!!', 'Listen Now', 'Check It', 'Natu Natu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `musics_data`
--

CREATE TABLE `musics_data` (
  `ID` int(11) NOT NULL,
  `File_name` varchar(150) NOT NULL,
  `type` varchar(50) NOT NULL,
  `Song_name` varchar(150) NOT NULL,
  `Singer_name` varchar(150) NOT NULL,
  `img_name` varchar(125) NOT NULL,
  `img_type` varchar(25) NOT NULL,
  `artist_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `musics_data`
--

INSERT INTO `musics_data` (`ID`, `File_name`, `type`, `Song_name`, `Singer_name`, `img_name`, `img_type`, `artist_id`) VALUES
(1, 'Natu-Natu.mp3', 'audio/mpeg', 'Natu Natu', 'Vishal Mishra, Rahul Sipligunj', 'Natu Natu.jpg', 'image/jpeg', NULL),
(5, 'Yaar-Ka-Sataya-Hua-Hai.mp3', 'audio/mpeg', 'Yaar Ka Sataya Hua Hai', 'B Praak, Nawazuddin Siddiqui', 'Yaar-Ka-Sataya-Hua-Hai.jpg', 'image/jpeg', 4),
(6, 'Jab-Tak-Hai-Zameen.mp3', 'audio/mpeg', 'Jab Tak Hai Zameen', 'Ananya Bhat', 'Mehabooba-Malayalam.jpg', 'image/jpeg', 2),
(8, 'Yadav-Brand-2.mp3', 'audio/mpeg', 'Yadav Brand 2', 'Sunny Yaduvanshi', 'Yadav-Brand-2.jpg', 'image/jpeg', 1),
(9, 'Sulthana.mp3', 'audio/mpeg', 'Sulthana Kannada', 'Santhosh Venky, Mohan Krishna, Sachin Basrur, Ravi Basrur, Puneeth Rudranag, Manish Dinakar', 'mqdefault.jpg', 'image/jpeg', 1),
(11, 'Dil-Lauta-Do-Mera.mp3', 'audio/mpeg', 'Dil Lauta Do Mera', 'Jubin Nautiyal, Payal Dev', 'dil-lauta-do-jubin-nautiyal.jpg', 'image/jpeg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `ID` tinyint(4) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(255) NOT NULL,
  `c_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`ID`, `first_name`, `last_name`, `email`, `password`, `c_password`) VALUES
(58, 'Ravi', 'Raj', 'ravigandi@gmail.com', 'gandi009', 'gandi009'),
(88, 'Mohd Shahid', 'khan', 'shahid@muzic.com', 'admin123', 'admin123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `artist_data`
--
ALTER TABLE `artist_data`
  ADD PRIMARY KEY (`A_ID`),
  ADD UNIQUE KEY `ID` (`A_ID`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `musics_data`
--
ALTER TABLE `musics_data`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `artist_id` (`artist_id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `artist_data`
--
ALTER TABLE `artist_data`
  MODIFY `A_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `musics_data`
--
ALTER TABLE `musics_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `ID` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `musics_data`
--
ALTER TABLE `musics_data`
  ADD CONSTRAINT `musics_data_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist_data` (`A_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
