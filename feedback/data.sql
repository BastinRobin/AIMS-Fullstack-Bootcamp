-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Mar 15, 2017 at 12:24 PM
-- Server version: 5.6.33
-- PHP Version: 7.0.12
CREATE DATABASE survey;

USE survey;



SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `roll_no` varchar(250) NOT NULL,
  `program` varchar(500) NOT NULL,
  `program_material` int(11) NOT NULL,
  `knowledge_of_person` int(11) NOT NULL,
  `presentation_delievery` int(11) NOT NULL,
  `relevance_practical` int(11) NOT NULL,
  `contribution_on_your_needs` int(11) NOT NULL,
  `persons_interaction` int(11) NOT NULL,
  `evaluation_of_participants` int(11) NOT NULL,
  `training_arrangement` int(11) NOT NULL,
  `time_management` int(11) NOT NULL,
  `overall_rating` int(11) NOT NULL,
  `comments` text NOT NULL,
  `sentiment` varchar(100) DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `roll_no`, `program`, `program_material`, `knowledge_of_person`, `presentation_delievery`, `relevance_practical`, `contribution_on_your_needs`, `persons_interaction`, `evaluation_of_participants`, `training_arrangement`, `time_management`, `overall_rating`, `comments`, `sentiment`, `is_deleted`, `created_at`) VALUES
(1, 'Bastin Robin', '89089809809', 'Augementation program', 1, 2, 3, 3, 2, 1, 2, 3, 1, 3, 'Nothing', 'false', 0, '2017-03-15 11:06:42'),
(2, 'Bastin Robins', '89089089089080', 'Augmentation Program of FullStack Development', 3, 3, 3, 0, 3, 3, 3, 3, 3, 3, 'It was interesting', '0', 0, '2017-03-15 11:12:53'),
(3, 'Bastin Robin', '8908989080980', 'Augmentation Program of FullStack Development', 5, 5, 4, 5, 5, 2, 3, 3, 3, 3, 'I was sleepy', '0', 0, '2017-03-15 11:15:00'),
(4, 'Bastinrobin', '9890890809', 'Augmentation Program of FullStack Development', 3, 3, 3, 3, 3, 3, 3, 3, 3, 3, 'how is the class', '0', 0, '2017-03-15 11:20:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;