-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2020 at 09:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `advertisement`
--

CREATE TABLE `advertisement` (
  `advertisement_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `image` longtext NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `advertisement`
--

INSERT INTO `advertisement` (`advertisement_id`, `id`, `name`, `description`, `image`, `sub_category_id`, `category_id`, `date`) VALUES
(16, 48, 'Iphone X', '\r\n                               Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil architecto incidunt cupiditate voluptas eius quas nemo natus fuga numquam asperiores nesciunt, expedita doloremque, beatae ipsa, fugiat ducimus omnis nostrum provident!  ', 'iphone1.jpg', 17, 10, '25-07-20 '),
(17, 48, 'K20 Pro', '\r\nLorem ipsum dolor sit amet, consectetur adipisicing elit. A totam iure debitis in. Cumque culpa qui quod quidem dolore nesciunt nam libero velit nulla rem, nobis minus ipsam ducimus quam.  ', 'k.jpg', 14, 8, '25-07-20 ');

-- --------------------------------------------------------

--
-- Table structure for table `basic_info`
--

CREATE TABLE `basic_info` (
  `basic_info_id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `description` longtext NOT NULL,
  `id` int(11) NOT NULL,
  `gst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `basic_info`
--

INSERT INTO `basic_info` (`basic_info_id`, `company_name`, `owner`, `email`, `location`, `mobile`, `description`, `id`, `gst`) VALUES
(50, 'Admin', 'Admin', 'admin123@gamil.com', 'Janak Puri, New Delhi', 'XXXXXXXXXX', '   Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro nesciunt dolores corrupti, temporibus expedita dignissimos, beatae provident in voluptatum culpa aspernatur quasi eaque? Ab fugiat voluptas vero mollitia dolor praesentium!', 48, '1122323422');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `date`) VALUES
(8, 'Mi', '2025-07-20 00:00:00'),
(9, 'Samsung', '2025-07-20 00:00:00'),
(10, 'Apple', '2025-07-20 00:00:00'),
(11, 'RealMe', '2025-07-20 00:00:00'),
(12, 'Vivo', '2025-07-20 00:00:00'),
(13, 'Oppo', '2025-07-20 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_images`
--

CREATE TABLE `gallery_images` (
  `gallery_images_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `gallery_images` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery_images`
--

INSERT INTO `gallery_images` (`gallery_images_id`, `id`, `gallery_images`) VALUES
(9, 48, 'g1.jpeg'),
(10, 48, 'g2.jpg'),
(11, 48, 'g3.jpg'),
(12, 48, 'g4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `images_id` int(11) NOT NULL,
  `landing_image` longtext NOT NULL,
  `prome_video` longtext NOT NULL,
  `pics` longtext NOT NULL,
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`images_id`, `landing_image`, `prome_video`, `pics`, `id`, `company_name`) VALUES
(43, 'Directory-Submission-featured-vskslo0ljrl26yv9xq7ncw1.png', '', 'admin.jpg', 48, '');

-- --------------------------------------------------------

--
-- Table structure for table `signup_admin`
--

CREATE TABLE `signup_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `signup_admin`
--

INSERT INTO `signup_admin` (`id`, `name`, `email`, `password`, `position`) VALUES
(47, 'Rohan Sharma', 'rohan@gmail.com', '123', 0),
(48, 'Admin', 'admin', '123456', 1);

-- --------------------------------------------------------

--
-- Table structure for table `sub_category`
--

CREATE TABLE `sub_category` (
  `sub_category_id` int(11) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_category`
--

INSERT INTO `sub_category` (`sub_category_id`, `sub_category`, `date`, `category_id`) VALUES
(13, 'Note Series', ' 25-07-20 ', 8),
(14, 'K20', ' 25-07-20 ', 8),
(15, 'S Series', ' 25-07-20 ', 9),
(16, 'M Series', ' 25-07-20 ', 9),
(17, 'Apple', ' 25-07-20 ', 10),
(18, 'Realme', ' 25-07-20 ', 11),
(19, 'Vivo', ' 25-07-20 ', 12),
(20, 'Oppo Find X', ' 25-07-20 ', 13);

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `super_admin_id` int(11) NOT NULL,
  `name` varchar(233) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`super_admin_id`, `name`, `username`, `password`) VALUES
(3, 'admin', 'admin', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advertisement`
--
ALTER TABLE `advertisement`
  ADD PRIMARY KEY (`advertisement_id`);

--
-- Indexes for table `basic_info`
--
ALTER TABLE `basic_info`
  ADD PRIMARY KEY (`basic_info_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `gallery_images`
--
ALTER TABLE `gallery_images`
  ADD PRIMARY KEY (`gallery_images_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`images_id`);

--
-- Indexes for table `signup_admin`
--
ALTER TABLE `signup_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_category`
--
ALTER TABLE `sub_category`
  ADD PRIMARY KEY (`sub_category_id`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`super_admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advertisement`
--
ALTER TABLE `advertisement`
  MODIFY `advertisement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `basic_info`
--
ALTER TABLE `basic_info`
  MODIFY `basic_info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `gallery_images`
--
ALTER TABLE `gallery_images`
  MODIFY `gallery_images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `images_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `signup_admin`
--
ALTER TABLE `signup_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `sub_category`
--
ALTER TABLE `sub_category`
  MODIFY `sub_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `super_admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
