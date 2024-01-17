-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2024 at 01:18 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `PImage` varchar(250) NOT NULL,
  `PName` varchar(100) NOT NULL,
  `Unitprice` int(11) NOT NULL,
  `Qty` int(11) NOT NULL,
  `TotalPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `PImage`, `PName`, `Unitprice`, `Qty`, `TotalPrice`) VALUES
(1, 'papaya jam23.jpg', 'papaya jam', 678, 1, 678),
(2, 'Red Shimla Mirch26.jpg', 'Red Shimla Mirch', 45, 1, 45),
(3, 'Orange4.jpg', 'Orange', 120, 1, 120),
(4, 'Dawn Bread5.jpg', 'Dawn Bread', 150, 1, 150);

-- --------------------------------------------------------

--
-- Table structure for table `catogery`
--

CREATE TABLE `catogery` (
  `Cat_Id` int(11) NOT NULL,
  `Cat_Name` varchar(50) NOT NULL,
  `CatImage` varchar(250) NOT NULL,
  `navimg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `catogery`
--

INSERT INTO `catogery` (`Cat_Id`, `Cat_Name`, `CatImage`, `navimg`) VALUES
(1, 'Bread', 'Breadcategory-5.jpg', 'bread.png'),
(2, 'Tea', 'Teacategory-4.jpg', 'tea.png'),
(3, 'Juices', 'Juicescategory-3.jpg', 'juic.png'),
(4, 'Vagetables', 'Vagetablescategory-2.jpg', 'veg.png'),
(5, 'Fruits', 'Fruitscategory-1.jpg', 'fruit.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Pro_Id` int(11) NOT NULL,
  `Pro_Name` varchar(50) NOT NULL,
  `Pro_Price` int(11) NOT NULL,
  `Pro_qty` int(11) NOT NULL,
  `Pro_Image` varchar(250) NOT NULL,
  `Pro_Details` varchar(250) NOT NULL,
  `CategoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Pro_Id`, `Pro_Name`, `Pro_Price`, `Pro_qty`, `Pro_Image`, `Pro_Details`, `CategoryName`) VALUES
(1, 'Dawn Bread', 150, 15, 'Dawn Bread5.jpg', 'dddd', 'Bread'),
(2, 'Jam for Tea', 250, 0, 'Jam for Tea18.jpg', 'Good for Tea', 'Tea'),
(3, 'Peach', 120, 200, 'Peach1.jpg', 'boht ache', 'Fruits'),
(4, 'kata howa apple', 200, 500, 'kata howa apple2.jpg', 'sahi he maze ka hai', 'Fruits'),
(5, 'Red Apple', 300, 50, 'Red Apple3.jpg', 'red', 'Fruits'),
(6, 'Orange', 120, 20, 'Orange4.jpg', 'fff', 'Fruits'),
(7, 'Organic strawberry fruits', 200, 45, 'Organic strawberry fruits6.jpg', 'trt', 'Fruits'),
(8, 'aadu', 500, 300, 'aadu7.jpg', 'rt', 'Fruits'),
(9, 'banana', 120, 500, 'banana8.jpg', 'kkk', 'Fruits'),
(10, 'shareefa', 500, 200, 'shareefa9.jpg', 'trt', 'Fruits'),
(11, 'gobi', 20, 300, 'gobi11.jpg', 'very good', 'Vagetables'),
(12, 'band gobi', 60, 121, 'band gobi12.jpg', 'fdf', 'Vagetables'),
(13, 'tomato', 60, 16, 'tomato13.jpg', 'tet', 'Juices'),
(14, 'orange juice', 450, 11, 'orange juice14.jpg', 'rtyrt', 'Juices'),
(15, 'cucumber', 34, 556, 'cucumber15.jpg', 'trh', 'Vagetables'),
(16, 'juice botle', 345, 6547, 'juice botle16.jpg', 'hgj', 'Juices'),
(17, 'baingan', 569, 78, 'baingan17.jpg', '3g', 'Vagetables'),
(18, 'more orange', 459, 5345, 'more orange19.jpg', 'fgh', 'Fruits'),
(19, 'shimla mirch', 345, 55, 'shimla mirch20.jpg', 'rtrt', 'Vagetables'),
(20, 'grapes', 120, 34, 'grapes21.jpg', 'tr', 'Fruits'),
(21, 'guava`', 90, 7, 'guava`22.jpg', 'hgsh', 'Fruits'),
(22, 'papaya jam', 678, 43, 'papaya jam23.jpg', 'good for tea\r\n', 'Tea'),
(23, 'peach', 253, 88, 'peach24.jpg', 'peac', 'Fruits'),
(24, 'Red Shimla Mirch', 45, 55, 'Red Shimla Mirch26.jpg', 'mirchi', 'Vagetables'),
(25, 'strawberry juice', 677, 44, 'strawberry juice28.jpg', 'wert', 'Juices'),
(26, 'cutt strawberry', 600, 455, 'cutt strawberry30.jpg', 'erwr', 'Fruits'),
(27, 'strawberry', 560, 33, 'strawberry31.jpg', 'hhh', 'Fruits'),
(28, 'peach & apple', 56, 788, 'peach & apple33.jpg', 'uyyu', 'Fruits'),
(29, 'Lemon', 55, 444, 'Lemon38.jpg', 'yty', 'Vagetables'),
(30, 'PineApple', 78, 566, 'PineApple40.jpg', 'fdg', 'Fruits'),
(31, 'Aquafina', 100, 20, 'Aquafinabootle.jpg', 'Purity Guaranteed', 'Juices');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `R_Id` int(11) NOT NULL,
  `User_Name` varchar(100) NOT NULL,
  `User_Image` varchar(250) NOT NULL,
  `R_Date` date NOT NULL DEFAULT current_timestamp(),
  `R_Rating` int(11) NOT NULL,
  `R_comments` varchar(250) NOT NULL,
  `productName` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`R_Id`, `User_Name`, `User_Image`, `R_Date`, `R_Rating`, `R_comments`, `productName`) VALUES
(1, 'Ali', 'ai@gmail.comprofile-img.jpg', '2023-12-27', 5, 'Good Product. ', '2'),
(2, 'Ali', 'ai@gmail.comprofile-img.jpg', '2023-12-27', 5, 'papaya jam is v good. PHP Students. ', '22'),
(3, '', '', '2023-12-27', 5, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_Id` int(11) NOT NULL,
  `User_Name` varchar(50) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `User_Password` varchar(250) NOT NULL,
  `User_Age` int(11) NOT NULL,
  `User_Image` varchar(250) NOT NULL,
  `User_address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_Id`, `User_Name`, `User_Email`, `User_Password`, `User_Age`, `User_Image`, `User_address`) VALUES
(1, 'Amjad', 'amjad@gmail.com', '123', 35, 'amjad@gmail.comng1.png', 'Landhi'),
(2, 'Ali', 'ali@gmail.com', '1234', 33, 'ai@gmail.comprofile-img.jpg', 'DHA');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `catogery`
--
ALTER TABLE `catogery`
  ADD PRIMARY KEY (`Cat_Id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Pro_Id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`R_Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `catogery`
--
ALTER TABLE `catogery`
  MODIFY `Cat_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Pro_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `R_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
