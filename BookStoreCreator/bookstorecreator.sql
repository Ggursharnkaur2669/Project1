-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2020 at 07:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstorecreator`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinventory`
--

CREATE TABLE `bookinventory` (
  `ID` int(10) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Author` varchar(200) NOT NULL,
  `Description` varchar(400) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Price` float NOT NULL,
  `Image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinventory`
--

INSERT INTO `bookinventory` (`ID`, `Title`, `Author`, `Description`, `Quantity`, `Price`, `Image`) VALUES
(101, 'The Magic', 'Rhonde Byrne', 'The book was released on March 6, 2012, as a paperback and e-book. The book is available in 41 languages.', 15, 200, 'images/TheMagic.jpg'),
(102, 'The Devil Wear Prada', 'Lauren Weisberger', 'A young woman who has graduated in journalism comes to New York and becomes an assistant to one of the city\'s biggest magazine editors, the ruthless and cynical Miranda Priestly.', 29, 400, 'images/TheDevilWearPrada.jpg'),
(103, 'Tom Sawyer', 'Mark Twin', 'Sawyer also appears in at least three unfinished Twain works, Huck and Tom Among the Indians, Schoolhouse Hill and Tom Sawyer\'s Conspiracy. ', 49, 200, 'images/TomSawyer.jpg'),
(104, 'Dare To Lead', 'Brene Brown', 'Leadership is not about titles or the corner office. It’s about the willingness to step up, put yourself out there, and lean into courage. The world is desperate for braver leaders. It’s time for all of us to step up.', 20, 400, 'images/DareToLead.jpg'),
(105, 'Harry Potter', 'J.K Rowling', 'The novels chronicle the lives of a young wizard, Harry Potter, and his friends Hermione Granger and Ron Weasley, all of whom are students at Hogwarts School of Witchcraft and Wizardry.', 50, 600, 'images/HarryPotter.jpg'),
(106, 'The Lord Of The Rings', 'Peter Jackson', 'A young hobbit, Frodo, who has found the One Ring that belongs to the Dark Lord Sauron, begins his journey with eight companions to Mount Doom, the only place where it can be destroyed.', 54, 300, 'images/TheLordOfTheRings.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(10) NOT NULL,
  `FirstName` varchar(200) NOT NULL,
  `LastName` varchar(200) NOT NULL,
  `Payment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `Payment`) VALUES
(1, 'gursharan', 'kaur', 'Credit card'),
(9, 'TARANDEEP', 'SINGH', 'Credit card'),
(10, 'jaskaran', 'singh', 'Credit card'),
(13, 'Gursharan', 'Kaur', 'Debit Card'),
(15, 'Gurneet', 'kaur', 'Credit card'),
(16, 'MANDEEP SINGH', 'LEHAL', 'Credit card'),
(18, 'Kamal', 'Randhawa', 'Credit card');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinventory`
--
ALTER TABLE `bookinventory`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinventory`
--
ALTER TABLE `bookinventory`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
