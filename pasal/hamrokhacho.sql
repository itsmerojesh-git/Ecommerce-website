-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2024 at 04:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hamrokhacho`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `Id` int(20) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `PPrice` varchar(100) NOT NULL,
  `PImage` varchar(200) NOT NULL,
  `PDetails` varchar(100) DEFAULT NULL,
  `PCategory` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`Id`, `PName`, `PPrice`, `PImage`, `PDetails`, `PCategory`) VALUES
(44, 'BASKET BALL', '2500/-', 'Uploadimage/basketball.webp', 'Sports Indoor/Outdoor Rubber Basketball Offical Basketball Of FIB', 'Sports'),
(45, 'Pressure Cooker', '2500/-', 'Uploadimage/pressurecooker.webp', 'BaltraFoodie BPC HA350AIB Induction Base PressureCooker 3.5ltr', 'Utensil'),
(46, 'Badminton', '2000/-', 'Uploadimage/batmintoonbat.jpeg', 'Play Badminton With Bag And Free One Piece Cork Head For Badminton ', 'Sports'),
(47, 'Mobile', '25000/-', 'Uploadimage/]mobile.webp', 'Vivo Y17s (6/128 GB) l 5000mah Battery l 50MP+2MP & Front Camera ', 'Electronics'),
(48, 'Football', '2000/-', 'Uploadimage/ball.webp', 'White/Dark Blue Color Kiko Nylon Wound Lightweight Football / Soc', 'Sports'),
(49, 'ASUS TUF GAMING', '225000/-', 'Uploadimage/laptop.png', 'Asus tuf gaming/i5/16 gb RAM /SSD 512GB/144hz display/4030 RTX ', 'Electronics'),
(51, 'Basmati Rice', '2000/-', 'Uploadimage/rice.jpg', 'Premium basmati rice 25 kg.healty.less price but high quality branded.', 'Grocery'),
(52, 'Handi Set', '2499/-', 'Uploadimage/setutensil.webp', 'Famous Stainless Steel Copper Handi Set.', 'Utensil'),
(61, 'Winter Jacket', '2500/-', 'Uploadimage/jacket.jfif', 'This is very good jacket.', 'Fashion'),
(64, 'Men Jacket', '3000/-', 'Uploadimage/jacket.jpg', 'it is very good product.', 'Fashion'),
(65, 'Trendy Shoes', '2000/-', 'Uploadimage/shoes.jpg', 'Trendy Shoes for Men With Great Confortable', 'Fashion'),
(66, 'Formal Pant', '1500/-', 'Uploadimage/pant.webp', 'JBC Weaves Mens Trousers Casual Formal Work Comfort Pants With Belt', 'Fashion'),
(73, 'Study Table', '799/-', 'Uploadimage/studytable.jpeg', 'Foldable And Portable Multipurpose Laptop ,Study Table', 'Stationery'),
(74, 'Erasable Magic Pen', '450/-', 'Uploadimage/pen.webp', 'Erasable Magic Blue Ink Pen for School Office Writing & Correction Set Of 3', 'Stationery'),
(75, 'Kangaro Stapler', '200/-', 'Uploadimage/staple.webp', 'Kangaro Desk Essentials Metal Stapler, Standard Stapler with Quick Loading Mechanism', 'Stationery'),
(76, 'Instant Oats', '270/-', 'Uploadimage/oats.jpg', 'Instant Energy: Start your mornings on a high-protein note with Oateo Instant oats under 3 minutes! ', 'Grocery'),
(79, 'MacCoffee Coffee', '350/-', 'Uploadimage/cofee.jpg', 'MacCoffee Original is 100% pure soluble coffee granules, made from a perfect combination of Central ', 'Grocery'),
(81, 'Namkeen Butter Biscuits', '70/-', 'Uploadimage/biscuit.png', 'best biscuits.', 'Grocery'),
(83, 'Eggs (Pack of 30)', '500/-', 'Uploadimage/egg.jpg', 'Whole eggs are a complete protein, meaning they contain all the necessary amino acids. They’re so go', 'Grocery'),
(84, 'Sugar(Rs 100/KG)', '500/-', 'Uploadimage/sugar.png', 'Sugar, 5 KG Pack (Rs 100/KG)', 'Grocery'),
(85, 'Horlicks', '1200/-', 'Uploadimage/hor.jpg', 'Clinically proven health drink Helps meet the requirements of essential nutrients in children Make ', 'Grocery'),
(86, 'USB Sound Card', '250/-', 'Uploadimage/pendrive.webp', 'External USB Sound Card Microphone-in Audio-out USB Splitter Soundcard', 'Electronics'),
(87, 'Ring Light With Stand', '1200/-', 'Uploadimage/stand.webp', 'Ring Light With 7 Feet Stand and Mobile Holder TikTok Light ( 26cm )', 'Electronics'),
(88, 'Cricket Bat', '999/-', 'Uploadimage/cricket.webp', 'Cricket Bat With Free Tenish Ball (2pcs) (Wooden Bat With 2ft+ Height)', 'Sports'),
(89, ' Dinner Plate ', '700/-', 'Uploadimage/plate.webp', 'Melamine Dinner Plate Royal Serve Melissa Full Plate 6 Pcs Set', 'Utensil'),
(90, 'Automatic Gas Stove', '4000/-', 'Uploadimage/gas.jpeg', '3 Burner Toughened Tempered Glass Top Automatic Gas Stove', 'Utensil'),
(91, 'Notebook', '750/-', 'Uploadimage/book.webp', 'B5 Ruled Notebook Journal 360 Page with Pen Loop, Hardcover Writing Notebooks, Perfect for Office Ho', 'Stationery'),
(93, 'T-short', '500/-', 'Uploadimage/tshort.jpg', 'This is best t-short for men with good price.', 'Fashion'),
(94, 'Nike Women Trouser ', '1999/-', 'Uploadimage/nike-s.jpg', 'Tish trouser is very good .', ' Fashion');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `username`, `userpassword`) VALUES
(1, 'Rojesh', 'Rojesh@321');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `SN` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Subject` varchar(300) NOT NULL,
  `Message` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`SN`, `Name`, `Email`, `Subject`, `Message`) VALUES
(22, 'Rojesh Humagain', 'Rojeshhumagain@gmail.com', 'Feedback', 'The utensil product is best...'),
(23, 'shyam', 'rojeshhumagain@gmai.com', 'good', 'best product');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `SN` int(20) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `Date` varchar(100) NOT NULL,
  `Paymentmethod` varchar(100) NOT NULL,
  `Location` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`SN`, `Name`, `Email`, `Phone`, `Date`, `Paymentmethod`, `Location`, `Description`) VALUES
(1, 'rojesh', 'Rojesh@gmail.com', '9876543210', '', 'cash', 'academia international college,lalitpur,guarko', 'guarko..'),
(4, 'rojesh', 'Rojesh@gmail.com', '9876543210', '', 'esewa', 'academia international college,lalitpur,guarko', 'good'),
(5, 'Abiral', 'Abiral@gmail.com', '5746546467464', '', 'esewa', 'acdemia ', 'hlhgjkgh  kjhlhighl luhhi'),
(6, 'Rojesh', 'Rojesh@gmail.com', '9841763010', '', 'cash', 'imadol', 'kathmandu'),
(7, '', '', '', '', '', '', ''),
(8, 'Rojesh', 'Rojesh@gmail.com', '9846975662', '', 'cash', 'imadol', 'rojesh'),
(9, 'Rojesh', 'Rojesh@gmail.com', '888987', '', 'cash', 'imadol', '12345'),
(10, 'Rojesh', 'Rojesh@gmail.com', '7666767', '', 'cash', 'imadol', 'hhjhj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Number` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `UserName`, `Email`, `Number`, `Password`) VALUES
(15, 'Rojesh', 'Rojesh@321', '9876543210', 'Rojesh123'),
(16, 'ram', 'hari@123', '98677675654', '1234'),
(17, 'shyam', 'shyam@gmail.com', '9846975662', 'shyam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`SN`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `SN` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `SN` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
