-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2020 at 08:02 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
--
-- Database: `sparksbank`
--
--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `sno` int(5) NOT NULL,
  `sender` text NOT NULL,
  `receiver` text NOT NULL,
  `balance` int(9) NOT NULL,
  `datetime` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `balance` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `balance`) VALUES
(1, 'sumit kumar ', 'sumitkumar5623@gmail.com', 10500),
(2, 'satish kumar', 'satishkumar9562@gmail.com', 13800),
(3, 'Anish kumar sharma', 'anishkumarsharma8814@gmail.com', 19900),
(4, 'suraj kr singh', 'surajkumarsingh392@gmail.com', 11200),
(5, 'Nikhil Sharma', 'nikhilsharma4236@gmail.com', 14500),
(6, 'Mukesh kumar', 'singhmukesh1619@gmail.com', 18800),
(7, 'Gautam Kumar', 'gautamucet4578@gmail.com', 22000),
(8, 'Aditya jha', 'cseadityajha@gmail.com', 27000),
(9, 'Prince Kumar', 'princekumar5580@gmail.com', 21000),
(10, 'Ranjan mishra', 'ranjanloveranjan@gmail.com', 23800);
COMMIT;
