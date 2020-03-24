-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 12:56 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tournadodb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_number` char(11) NOT NULL,
  `cnic` char(13) NOT NULL,
  `number_of_customers` int(11) NOT NULL,
  `discount_applicable` tinyint(1) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `isactive` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `trip_id`, `booking_date`, `name`, `email`, `phone_number`, `cnic`, `number_of_customers`, `discount_applicable`, `price`, `isactive`) VALUES
(13, 1, '2018-06-01', 'Saad', 'saad@tss.com', '03328999094', '124194812940', 20, NULL, 200000, 0),
(14, 1, '2018-06-02', 'daas', 'hadfs@fashdf.com', '2138712', '1241238', 2, NULL, 200000, 0),
(15, 1, '2018-06-02', 'daas', 'hadfs@fashdf.com', '2138712', '1241238', 2, NULL, 200000, 1),
(16, 1, '2018-06-02', 'Sobia', 'sobia@tss123.com', '0331294812', '1234567891234', 6, NULL, 600000, 1),
(17, 7, '2018-06-02', 'sami', 'ahbab@gmail.com', '21734812', '9328483274', 3, NULL, 300000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `bookings-others`
--

CREATE TABLE `bookings-others` (
  `otherinfo_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cnic` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `content_id` int(11) NOT NULL,
  `page` int(11) NOT NULL,
  `section` int(11) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`content_id`, `page`, `section`, `content`) VALUES
(1, 1, 1, 'Our Focus\r\n'),
(2, 1, 2, 'Photography'),
(3, 1, 3, 'This is a test description for CRUD.'),
(4, 1, 4, 'Music'),
(5, 1, 5, 'This is a test description for CRUD 2.'),
(6, 1, 6, 'Adventure\r\n'),
(7, 1, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum enim, commodo in sapien eget, accumsan maximus metus. Cras eu nulla sit amet nulla aliquet iaculis et porta augue. Maecenas eu libero tempus, dignissim ipsum dapibus, consequat purus. Phasellus eget egestas ante.'),
(10, 1, 8, 'Do your packages include food? '),
(11, 1, 9, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum enim, commodo in sapien eget, accumsan maximus metus. Cras eu nulla sit amet nulla aliquet iaculis et porta augue. Maecenas eu libero tempus, dignissim ipsum dapibus, consequat purus. Phasellus eget egestas ante.'),
(12, 1, 10, 'Do you have discounts available? '),
(13, 1, 11, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum enim, commodo in sapien eget, accumsan maximus metus. Cras eu nulla sit amet nulla aliquet iaculis et porta augue. Maecenas eu libero tempus, dignissim ipsum dapibus, consequat purus. Phasellus eget egestas ante.'),
(14, 1, 12, 'Is it possible to cancel bookings? '),
(15, 1, 13, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ipsum enim, commodo in sapien eget, accumsan maximus metus. Cras eu nulla sit amet nulla aliquet iaculis et porta augue. Maecenas eu libero tempus, dignissim ipsum dapibus, consequat purus. Phasellus eget egestas ante.'),
(16, 2, 1, 'Who We Are'),
(17, 2, 2, '\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n'),
(18, 2, 3, 'Our Mission'),
(19, 2, 4, '\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n'),
(20, 2, 5, 'Our Values'),
(21, 2, 6, '\r\n\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `cnic` char(13) NOT NULL,
  `phone_number` char(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`email`, `name`, `cnic`, `phone_number`) VALUES
('saad@tss.com', 'Saad', '4221012014841', '2218102412'),
('sobia@tss123.com', 'Sobia', '1234567891234', '0331294812'),
('tabish@tss.com', 'Tabish', '123124124124', '123123123');

-- --------------------------------------------------------

--
-- Table structure for table `discounts`
--

CREATE TABLE `discounts` (
  `discount_id` int(11) NOT NULL,
  `discount_percentage` float NOT NULL,
  `discount_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonial_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `testimonial_text` text NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonial_id`, `email`, `testimonial_text`, `rating`) VALUES
(2, 'sobia@gmail.com', 'This is our second test testimonial.', 1),
(4, 'saad@tss.com', 'This is my second testimonial.', 4);

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `trip_id` int(11) NOT NULL,
  `trip_name` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `number_of_seats` int(11) NOT NULL,
  `number_of_available_seats` int(11) NOT NULL,
  `female_only` tinyint(1) NOT NULL,
  `itenarary` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `trip_name`, `start_date`, `end_date`, `description`, `price`, `number_of_seats`, `number_of_available_seats`, `female_only`, `itenarary`) VALUES
(7, 'Hyderabad', '2018-05-18', '2018-05-30', 'Test description', 100000, 100, 97, 1, 'A very long test iternary. A very long test iternary. A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  '),
(8, 'Gorakh Hills', '2018-04-05', '2018-04-10', 'This is a test description which has been edited.', 100000, 50, 50, 1, 'A very long test iternary. A very long test iternary. A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  '),
(9, 'Hyderabad', '2018-05-18', '2018-05-30', 'Test description', 100000, 100, 100, 0, 'A very long test iternary. A very long test iternary. A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  A very long test iternary.  this is very long');

-- --------------------------------------------------------

--
-- Table structure for table `trips-discounts`
--

CREATE TABLE `trips-discounts` (
  `trip_id` int(11) NOT NULL,
  `discount_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `name` text,
  `user_type_id` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `user_type_id`, `remember_token`, `updated_at`, `created_at`) VALUES
(5, 'sobia@tss.com', '$2y$10$R8dWnZvOxSu9YhThTAUKYObxVWuawbe2yavubEsP2B3p4BzIX0p6i', 'Sobia', 1, 'spoReApousQ0Yrw8FwnzJCl4GX3qPWDRfUrHF0ZuuE0MN4EeG2WiIcnuESFB', '2018-05-03 15:08:55', '2018-05-03 15:03:31'),
(6, 'admin@tss.com', '$2y$10$mSbfKk0U9g3H4hkwzgY7Ae8rMiNdS/F2ki1zDUfYbEdK39WfcdIRy', 'Administrator', 2, 'cvxgbBjc1mplsEtuVSzEbaJniwP4P1GKh4aaRlKZLMZCbUMiqETnvn6syIlc', '2018-05-03 20:04:26', '2018-05-03 20:04:26'),
(7, 'tabish@tss.com', '$2y$10$0KCOeKpzJF6VtFBlLwSzdOGsqQjNt5S1lUQODpqP0PwFscC6xNQxq', 'Tabish', 1, 'lWaBkqvEyKcGCvt3yA2CPRNIzhEEZDUn3gH9HUxezenhsEBrRs1Y0UulFCGu', '2018-05-03 15:10:27', '2018-05-03 15:10:27'),
(8, 'saad@tss.com', '$2y$10$rBiHZQOl3xu2rv76dk3L2ez7jazIIz5tZR5I58Uc2GIABQF5k8nDu', 'Saad', 2, 'SWU1MZCBOQa2dtf6mmI1BgF8Xoe0O2xhrImaSXTISoTzNnTLgKsHmNw8z6Ev', '2018-06-01 11:11:24', '2018-06-01 11:11:24'),
(9, 'sobia@tss123.com', '$2y$10$PvPbWHNkfRV/Wp2clonk8.r13yKxI27M8CqX1O45L0jQ13F/oydK2', 'Sobia', 1, 'FMLYKIW5v1wgWAUywIFifQ9D13SwSQggXxcN7QiMPXmm0o104SW1cv6VFpRM', '2018-06-02 02:58:35', '2018-06-01 23:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `user_type_id` int(11) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_type`
--

INSERT INTO `user_type` (`user_type_id`, `user_type`) VALUES
(1, 'Customer'),
(2, 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bookings-others`
--
ALTER TABLE `bookings-others`
  ADD PRIMARY KEY (`otherinfo_id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`content_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `discounts`
--
ALTER TABLE `discounts`
  ADD PRIMARY KEY (`discount_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `trips-discounts`
--
ALTER TABLE `trips-discounts`
  ADD PRIMARY KEY (`trip_id`,`discount_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`user_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bookings-others`
--
ALTER TABLE `bookings-others`
  MODIFY `otherinfo_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `content_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `discounts`
--
ALTER TABLE `discounts`
  MODIFY `discount_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonial_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `user_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
